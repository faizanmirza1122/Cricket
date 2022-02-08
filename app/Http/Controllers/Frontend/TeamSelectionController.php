<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamSelectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function ts1()
    {
        return view('teams.team-s-v1');
    }

    public function ts2()
    {
        return view('teams.team-s-v2');
    }

    public function ts3()
    {
        return view('teams.team-s-v3');
    }

    public function ts4()
    {
        return view('teams.team-s-v4');
    }

    public function to1()
    {
        return view('teams.team-overview1');
    }

    public function to2()
    {
        return view('teams.team-overview2');
    }

    public function playerPage()
    {
        return view('teams.player-page');
    }

    public function staffMember()
    {
        return view('teams.staff-member');
    }

    public function staffPage()
    {
        return view('teams.staff-page');
    }

}
