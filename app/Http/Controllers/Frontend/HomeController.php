<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Home::get();
        return view('home', compact('homes'));
    }

    public function homeDetail($slug)
    {
        $home = Home::where('slug', $slug)->first();

        return view('home-detail', compact('home'));
    }


}
