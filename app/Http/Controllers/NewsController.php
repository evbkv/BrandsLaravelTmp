<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Auth;

class NewsController extends Controller
{
    public function index()
    {
        $pagination_list = 20;
        if (Auth::user()->status != 4) {
            $news = News::orderBy('id', 'desc')->latest()->paginate($pagination_list);
        } else {
            $news = News::where('user_id', '=', Auth::user()->id)->orderBy('id', 'desc')->latest()->paginate($pagination_list);
        }
        $brands = Brand::all();
        return view('admin.news', compact('news', 'brands'))->with('i', (request()->input('page',1)-1)*$pagination_list);
    }

    public function edit(News $news)
    {
        $brands = Brand::orderBy('name')->get();
        if (isset($news->id)) {
            $user = User::where('id', $news->user_id)->first();
            return view('admin.newsEdit', compact('news', 'brands', 'user'));
        } else {
            return view('admin.newsEdit', compact('brands'));
        }
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $data = $request->all();
        $filename = time().'_'.$request->file('photo')->getClientOriginalName();
        $data['photo'] = $filename;
        $data['user_id'] = Auth::user()->id;
        News::create($data);
        $file = $request->file('photo');
        $file->move('../public/images/news/', $filename);
        return redirect('/cabinet/news');
    }

    public function update(Request $request, News $news)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $data = $request->all();
        if ($request->file('photo')) {
            $file = $request->file('photo');
            File::delete('../public/images/news/'.$news->photo);
            $filename = time().'_'.$request->file('photo')->getClientOriginalName();
            $data['photo'] = $filename;
            $file->move('../public/images/news/', $filename);
        } else {
            $data['photo'] = $news->photo;
        }
        $news->update($data);
        return redirect('/cabinet/news');
    }

    public function delete(News $news)
    {
        File::delete('../public/images/news/'.$news->photo);
        $news->delete();
        return redirect('/cabinet/news');
    }
}
