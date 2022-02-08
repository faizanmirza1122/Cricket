<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatchesController extends Controller
{

    public function scores()
    {
        return view('matches.scores');
    }

    public function upcomingMatch()
    {
        return view('matches.upcoming');
    }

    public function matchesStanding()
    {
        return view('matches.standings');
    }

    public function matchStats1()
    {
        return view('matches.stats-1');
    }

    public function matchStats2()
    {
        return view('matches.stats-2');
    }

    public function matchStats3()
    {
        return view('matches.stats-3');
    }

    public function matchesLineups1()
    {
        return view('matches.lineups-1');
    }

    public function matchesLineups2()
    {
        return view('matches.lineups-2');
    }

    public function matchesLineups3()
    {
        return view('matches.lineups-3');
    }

    public function matchesOverview1()
    {
        return view('matches.overview-1');
    }

    public function matchesOverview2()
    {
        return view('matches.overview-2');
    }

    public function matchesRepaly()
    {
        return view('matches.replay');
    }

    public function news()
    {
        return view('news');
    }

    public function shop()
    {
        return view('shop');
    }

}
