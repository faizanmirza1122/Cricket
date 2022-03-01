<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\Faqs;
use App\Models\TeamMatch;
use Illuminate\Http\Request;

class MatchesController extends Controller
{

    public function scores()
    {
        $matchScore = TeamMatch::with(['matchType'])->orderBy('date', 'DESC')->get();
        return view('matches.scores', compact('matchScore'));
    }

    public function upcomingMatch()
    {
        $upcomingMatches = TeamMatch::with(['matchType'])->orderBy('date', 'DESC')->get();
        // dd($upcomingMatches);
        return view('matches.upcoming', compact('upcomingMatches'));
    }

    public function matchesStanding()
    {
        $standings = TeamMatch::with(['matchType', 'team1', 'team2'])->orderBy('date', 'DESC')->get();
        // dd($standings);
        return view('matches.standings', compact('standings'));
    }

    public function matchStats1()
    {
        $stat = TeamMatch::first();

        return view('matches.stats-1', compact('stat'));
    }


    public function matchesLineups1()
    {
        return view('matches.lineups-1');
    }


    public function matchesOverview1()
    {
        // $fixture = TeamMatch::where('id', $team1->id);
        return view('matches.overview-1');
    }

    public function matchesRepaly()
    {
        return view('matches.replay');
    }

    public function contact()
    {
        $contact = Contact::orderBy('id', 'DESC')->first();
        return view('contact', compact('contact'));
    }

    public function faqs()
    {
        $faqs = Faqs::orderBy('id', 'DESC')->get();
        return view('faqs', compact('faqs'));
    }

    public function about()
    {
        $about = About::orderBy('id', 'DESC')->first();
        return view('about', compact('about'));
    }

}
