<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PlayerController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Team $team)
    {
       $players= Player::with('team')->get();
    //    $players= $team->players;
    //    $players= Player::with('team')->get();
    //    dd($players);
        return view('admin.teams.players.index', compact('players', 'team'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($team)
    {
        // dd($team);
        return view('admin.teams.players.create', compact('team'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $team)
    {
        $data = $request->validate([
            'player_name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'player_age' => ['nullable', 'string', 'max:255'],
            'player_since' => ['required'],
            'player_born_country' => ['required'],
            'player_team' => ['required'],
            'player_role' => ['required'],
            'score' => ['nullable'],
            'hero' => ['nullable'],
            'player_description' => ['required'],
            'player_social_link_1' => ['nullable', 'url'],
            'player_social_link_2' => ['nullable', 'url'],
            'player_social_link_3' => ['nullable', 'url'],
            'player_social_link_4' => ['nullable', 'url'],
            'image' => ['required', 'image'],
        ]);

        $data['slug'] = Str::slug($request->player_name, '-');


        if ($request->file('image')) {
            $image = $request->file('image');
            $name = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $name);
            $data['image'] = $name;
        }


        $data = Player::create($data + [ 'team_id' => $team, ]);
        return redirect()->route('team.players.index', $team)->with('message', 'teams has been added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $player
     * @return \Illuminate\Http\Response
     */
    public function edit($team, $player)
    {
        $player = Player::find($player);
        return view('admin.teams.players.edit', compact('player', 'team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $team, $player)
    {
        $data = $request->validate([
            'player_name' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'player_age' => ['nullable', 'string', 'max:255'],
            'player_since' => ['required'],
            'player_born_country' => ['required'],
            'player_team' => ['required'],
            'player_role' => ['required'],
            'score' => ['nullable'],
            'hero' => ['nullable'],
            'player_description' => ['required'],
            'player_social_link_1' => ['nullable', 'url'],
            'player_social_link_2' => ['nullable', 'url'],
            'player_social_link_3' => ['nullable', 'url'],
            'player_social_link_4' => ['nullable', 'url'],
            'image' => ['nullable', 'image'],
        ]);

        if ($request->file('image')) {

            $image = $request->file('image');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['image'] = $imageName;
        }

        $data['slug'] = Str::slug($request->title, '-');

        $player = Player::find($player);
        $player->update($data);

        return redirect()->route('team.players.index', $team)->with('message', 'teams has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy($team, $player)
    {
        $player = Player::find($player);
        $player->delete();

        return redirect()->route('team.players.index', $team)
            ->with('success', 'teams deleted successfully');
    }
}
