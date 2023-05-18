<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Heading;
use App\Models\Catalog;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BrandsController extends Controller
{
    public function index()
    {
        $pagination_list = 20;
        $brands = Brand::orderBy('name')->get();
        $letters = array();
        foreach ($brands as $brand) {
            if (count($letters) == 0)
                array_push($letters, substr($brand->name, 0, 1));
            else if ($letters[count($letters)-1] != substr($brand->name, 0, 1))
                array_push($letters, substr($brand->name, 0, 1));
        }
        if (isset($_GET['letter'])) {
            $brands = Brand::where('name','like',$_GET['letter'].'%')->orderBy('name')->latest()->paginate($pagination_list);
        } elseif (isset($_GET['heading'])) {
            $brands = DB::table('brands')->join('catalog', 'brands.id', '=', 'catalog.brand_id')->select('brands.*')->where('catalog.heading_id','=',$_GET['heading'])->orderBy('name')->latest()->paginate($pagination_list);
            if ($_GET['heading'] == '') return redirect('/cabinet/brands');
        } else {
            $brands = Brand::orderBy('name')->latest()->paginate($pagination_list);
        }
        $headings = Heading::orderBy('name')->get();
        return view('admin.brands', compact('headings', 'brands', 'letters'))->with('i', (request()->input('page',1)-1)*$pagination_list);
    }

    public function edit(Brand $brand)
    {
        $headings = Heading::orderBy('name')->get();
        $users = User::orderBy('login')->get();
        if (isset($brand->id)) {
            $catalog = Catalog::where('brand_id','=',$brand->id)->first();
            return view('admin.brandEdit', compact('brand', 'headings', 'catalog', 'users'));
        } else {
            return view('admin.brandEdit', compact('headings', 'users'));
        }
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'link' => 'required'
        ]);
        $data = $request->all();
        $filename = time().'_'.$request->file('photo')->getClientOriginalName();
        $data['photo'] = $filename;
        $brand = Brand::create($data);
        $file = $request->file('photo');
        $file->move('../public/images/brands/', $filename);
        Catalog::create(['brand_id' => $brand->id, 'heading_id' => $data['heading']]);
        return redirect('/cabinet/brands');
    }

    public function update(Request $request, Brand $brand)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'link' => 'required'
        ]);
        $data = $request->all();
        if ($request->file('photo')) {
            $file = $request->file('photo');
            File::delete('../public/images/brands/'.$brand->photo);
            $filename = time().'_'.$request->file('photo')->getClientOriginalName();
            $data['photo'] = $filename;
            $file->move('../public/images/brands/', $filename);
        } else {
            $data['photo'] = $brand->photo;
        }
        $brand->update($data);
        $catalog = Catalog::where('brand_id','=',$brand->id)->first();
        $catalog->update(['heading_id' => $data['heading']]);
        return redirect('/cabinet/brands');
    }

    public function delete(Brand $brand)
    {
        File::delete('../public/images/brands/'.$brand->photo);
        DB::table('catalog')->where('brand_id', '=', $brand->id)->delete();
        $brand->delete();
        return redirect('/cabinet/brands');
    }
}
