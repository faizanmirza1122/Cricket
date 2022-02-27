<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Match;
use App\Models\MatchType;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use PhpParser\Node\Expr\Match_;

class MatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matches = Match::orderBy('id', 'DESC')->get();
        return view('admin.match.index', compact('matches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $matchTypes = MatchType::orderBy('id', 'DESC')->get();
        $team1 = Team::orderBy('id', 'DESC')->get();
        $team2 = Team::orderBy('id', 'DESC')->get();

        // $team22 = $team2->players->first();
        return view('admin.match.create', compact('matchTypes','team1','team2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'team_1' => ['required', 'string', 'max:255'],
            'team_2' => ['required', 'string', 'max:255'],
            'match_type_id' => ['required', 'string', 'max:255'],
            'team_1_score' => ['required'],
            'team_2_score' => ['required'],
            'team_1_match_result' => ['required', 'in:win,loss'],
            'team_2_match_result' => ['required', 'in:win,loss'],
            'date' => ['required', 'date'],
            'match_start_time' => ['required', 'time'],
            'match_end_time' => ['required', 'time'],
            'team_1_matchup_heading_1' => ['required', 'string', 'max:255'],
            'team_1_matchup_title_1' => ['required', 'string', 'max:255'],
            'team_1_matchup_heading_2' => ['required', 'string', 'max:255'],
            'team_1_matchup_title_2' => ['required', 'string', 'max:255'],
            'team_1_matchup_heading_3' => ['required', 'string', 'max:255'],
            'team_1_matchup_title_3' => ['required', 'string', 'max:255'],
            'team_2_matchup_heading_1' => ['required', 'string', 'max:255'],
            'team_2_matchup_title_1' => ['required', 'string', 'max:255'],
            'team_2_matchup_heading_2' => ['required', 'string', 'max:255'],
            'team_2_matchup_title_2' => ['required', 'string', 'max:255'],
            'team_2_matchup_heading_3' => ['required', 'string', 'max:255'],
            'team_2_matchup_title_3' => ['required', 'string', 'max:255'],
            'general_stats_map_heading' => ['required', 'string', 'max:255'],
            'general_stats_map_title' => ['required', 'string', 'max:255'],
            'general_stats_mission_heading' => ['required', 'string', 'max:255'],
            'general_stats_mission_title' => ['required', 'string', 'max:255'],
            'general_stats_duration_heading' => ['required', 'string', 'max:255'],
            'general_stats_duration_title' => ['required',],
        ]);

        $data = Match::create($data);
        return redirect()->route('match.index')->with('message', 'Match has been added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $match = Match::find($id);
        $matchTypes = MatchType::orderBy('id', 'DESC')->get();

        $team = Match::find($id);
        // $team1 = Match::where('team_1', $team->id)->first();
        // $team2 = '';

        $team1 = Team::orderBy('id', 'DESC')->get();
        $team2 = Team::orderBy('id', 'DESC')->get();
        // dd($team1);

        return view('admin.match.edit', compact('match', 'matchTypes','team1','team2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'team_1' => ['nullable', 'string', 'max:255'],
            'team_2' => ['nullable', 'string', 'max:255'],
            'match_type_id' => ['nullable', 'string', 'max:255'],
            'team_1_score' => ['nullable'],
            'team_2_score' => ['nullable'],
            'team_1_match_result' => ['nullable', 'in:win,loss'],
            'team_2_match_result' => ['nullable', 'in:win,loss'],
            'date' => ['nullable', 'date'],
            'match_start_time' => ['nullable', 'time'],
            'match_end_time' => ['nullable', 'time'],
            'team_1_matchup_heading_1' => ['nullable', 'string', 'max:255'],
            'team_1_matchup_title_1' => ['nullable', 'string', 'max:255'],
            'team_1_matchup_heading_2' => ['nullable', 'string', 'max:255'],
            'team_1_matchup_title_2' => ['nullable', 'string', 'max:255'],
            'team_1_matchup_heading_3' => ['nullable', 'string', 'max:255'],
            'team_1_matchup_title_3' => ['nullable', 'string', 'max:255'],
            'team_2_matchup_heading_1' => ['nullable', 'string', 'max:255'],
            'team_2_matchup_title_1' => ['nullable', 'string', 'max:255'],
            'team_2_matchup_heading_2' => ['nullable', 'string', 'max:255'],
            'team_2_matchup_title_2' => ['nullable', 'string', 'max:255'],
            'team_2_matchup_heading_3' => ['nullable', 'string', 'max:255'],
            'team_2_matchup_title_3' => ['nullable', 'string', 'max:255'],
            'general_stats_map_heading' => ['nullable', 'string', 'max:255'],
            'general_stats_map_title' => ['nullable', 'string', 'max:255'],
            'general_stats_mission_heading' => ['nullable', 'string', 'max:255'],
            'general_stats_mission_title' => ['nullable', 'string', 'max:255'],
            'general_stats_duration_heading' => ['nullable', 'string', 'max:255'],
            'general_stats_duration_title' => ['nullable',],
        ]);


        $data['slug'] = Str::slug($request->title, '-');
        $data = Match::find($id);

        return redirect()->back()->with('message', 'Match has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $match = Match::find($id);
        $match->delete();

        return redirect()->route('match.index')
            ->with('success', 'News deleted successfully');
    }
}
