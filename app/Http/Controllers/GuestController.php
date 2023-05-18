<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Brand;
use App\Models\Heading;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function news(Request $request)
    {
        $lastPost = $request->input('lastPost');
        $nPosts = $request->input('nPosts');
    
        $totalNewsCount = News::count();
        $maxPosts = min($nPosts, $totalNewsCount - ($lastPost - 1));
    
        if ($maxPosts <= 0) {
            $news = [];
        } else {
            $news = News::orderBy('id', 'desc')
                ->skip($lastPost - 1)
                ->take($maxPosts)
                ->get();
        }
    
        $brands = Brand::all();
        return view('guest.news', compact('news', 'brands'));
    }

    public function oneNews(News $news)
    {
        $brands = Brand::all();
        return view('guest.onenews', compact('news', 'brands'));
    }

    public function brands(Request $request)
    {
        $brands = Brand::orderBy('name')->get();
        $letters = array();
        foreach ($brands as $brand) {
            if (count($letters) == 0)
                array_push($letters, substr($brand->name, 0, 1));
            else if ($letters[count($letters)-1] != substr($brand->name, 0, 1))
                array_push($letters, substr($brand->name, 0, 1));
        }
        $letter = $request->letter;
        if ($letter != '') {
            $brands = Brand::where('name','like',$letter.'%')->orderBy('name')->latest()->get();
        }
        $headings = Heading::orderBy('name')->get();
        $heading = $request->heading;
        if ($heading != '') {
            $brands = DB::table('brands')->join('catalog', 'brands.id', '=', 'catalog.brand_id')->select('brands.*')->where('catalog.heading_id','=',$heading)->orderBy('name')->latest()->get();
        }
        return view('guest.brands', compact('brands', 'headings', 'letters'));
    }

    public function brand(Brand $brand)
    {
        $news = News::where('brand_id','=',$brand->id)->orderBy('id', 'desc')->get();
        return view('guest.brand', compact('brand', 'news'));
    }

    public function search(Request $request)
    {
        $find = $request->find;
        $brand = Brand::where('name','=',$find)->first();
        if ($brand != '') {
            $news = News::where('brand_id','=',$brand->id)->orderBy('id', 'desc')->get();
            return view('guest.brand', compact('brand', 'news'));
        } else {
            return view('guest.errsearch', compact('find'));
        }
    }
}