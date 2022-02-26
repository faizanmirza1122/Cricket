<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderBy('id', 'DESC')->get();

        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teams.create');
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
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'subtitle' => ['required', 'string', 'max:255'],
            'country' => ['required', 'string', 'max:255'],
            'since' => ['required'],
            'prize_earned' => ['required'],
            'description' => ['required'],
            'sidebar_icon' => ['nullable', 'image'],
            'icon' => ['nullable', 'image'],
            'image' => ['nullable', 'image'],
            'final_score' => ['nullable'],
            'match_result' => ['nullable', 'in:win,loss'],
            'team_matchup_heading_1' => ['nullable', 'string', 'max:255'],
            'team_matchup_title_1' => ['nullable', 'string', 'max:255'],
            'team_matchup_heading_2' => ['nullable', 'string', 'max:255'],
            'team_matchup_title_2' => ['nullable', 'string', 'max:255'],
            'team_matchup_heading_3' => ['nullable', 'string', 'max:255'],
            'team_matchup_title_3' => ['nullable', 'string', 'max:255'],
        ]);

        $data['slug'] = Str::slug($request->title, '-');

        if ($request->file('sidebar_icon')) {
            $image = $request->file('sidebar_icon');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['sidebar_icon'] = $imageName;
        }

        if ($request->file('icon')) {
            $image = $request->file('icon');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['icon'] = $imageName;
        }

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['image'] = $imageName;
        }
        $data = Team::create($data);
        return redirect()->route('team.index')->with('message', 'teams has been added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::find($id);
        return view('admin.teams.edit', compact('team'));
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
            'title' => ['nullable', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'subtitle' => ['nullable', 'string', 'max:255'],
            'country' => ['nullable', 'string', 'max:255'],
            'since' => ['nullable'],
            'prize_earned' => ['nullable'],
            'description' => ['nullable'],
            'sidebar_icon' => ['nullable', 'image'],
            'icon' => ['nullable', 'image'],
            'image' => ['nullable', 'image'],
            'final_score' => ['nullable'],
            'match_result' => ['nullable', 'in:win,loss'],
            'team_matchup_heading_1' => ['nullable', 'string', 'max:255'],
            'team_matchup_title_1' => ['nullable', 'string', 'max:255'],
            'team_matchup_heading_2' => ['nullable', 'string', 'max:255'],
            'team_matchup_title_2' => ['nullable', 'string', 'max:255'],
            'team_matchup_heading_3' => ['nullable', 'string', 'max:255'],
            'team_matchup_title_3' => ['nullable', 'string', 'max:255'],
        ]);

        if ($request->file('sidebar_icon')) {
            $image = $request->file('sidebar_icon');
            $sideImageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $sideImageName);
            $data['sidebar_icon'] = $sideImageName;
        }


        if ($request->file('icon')) {
            $image = $request->file('icon');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['icon'] = $imageName;
        }

        if ($request->file('image')) {
            $image = $request->file('image');
            $name = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $name);
            $data['image'] = $name;
        }

        $data['slug'] = Str::slug($request->title, '-');

        $team = Team::find($id);
        $team->update($data);

        return redirect()->back()->with('message', 'teams has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();

        return redirect()->route('team.index')
            ->with('success', 'teams deleted successfully');
    }
}
