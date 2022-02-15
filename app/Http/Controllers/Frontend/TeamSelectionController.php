<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AllMember;
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

    public function staffPage()
    {
        $teams = AllMember::orderBy('id', 'DESC')->get();
        return view('teams.staff-page', compact('teams'));
    }

    public function staffMember($slug)
    {
        $team = AllMember::where('slug', $slug)->first();
        dd($team);
        // $team = AllMember::where('slug', $team->id)->get();
        return view('teams.staff-member', compact('team'));
    }
}
