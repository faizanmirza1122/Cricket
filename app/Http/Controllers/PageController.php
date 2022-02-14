<?php

namespace App\Http\Controllers;

use App\Models\AllMember;
use App\Models\News;
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

}
