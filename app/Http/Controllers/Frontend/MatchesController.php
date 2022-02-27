<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\Match;
use App\Models\Faqs;
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
        $stat = Match::first();
        return view('matches.stats-1', compact('stat'));
    }


    public function matchesLineups1()
    {
        return view('matches.lineups-1');
    }


    public function matchesOverview1()
    {
        // $fixture = Match::where('id', $team1->id);
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
