<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\AllMember;
use App\Models\Team;
use App\Models\Player;
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

    public function to1($slug)
    {

        $team = Team::where('slug', $slug)->first();

        $players = Player::with('team')->get();
        // dd($player);
        return view('teams.team-overview1', compact('team', 'players'));
    }

    public function playerPage($team, $player)
    {
        $player_info = Player::where('slug', $player)->first();
        return view('teams.player-page', compact('player_info'));
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
