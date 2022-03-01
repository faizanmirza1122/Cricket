<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\Product;
use App\Models\TeamMatch;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $team= Team::get()->count();
        $match= TeamMatch::get()->count();
        $product = Product::get()->count();
        return view('admin.dashboard', compact('team', 'match', 'product'));
    }


}
