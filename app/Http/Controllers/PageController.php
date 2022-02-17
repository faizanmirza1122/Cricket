<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function news()
    {
        $news = News::orderBy('id', 'DESC')->get();

        return view('news', compact('news'));
    }

    public function newsDetail($slug)
    {
        $news = News::where('slug', $slug)->first();

        return view('news-detail', compact('news'));
    }

    public function shop()
    {
        $products = Product::orderBy('id', 'DESC')->get();

        return view('shop', compact('products'));
    }

    public function shopDetail($slug)
    {
        $product = Product::where('slug', $slug)->first();

        return view('shop-detail', compact('product'));
    }


}
