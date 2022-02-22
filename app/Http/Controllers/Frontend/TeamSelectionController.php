<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AllMember;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamSelectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function ts2()
    {
        $teams = Team::limit(4)->get();
        return view('teams.team-s-v2', compact('teams'));
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

        return view('teams.staff-member', compact('team'));
    }
}
