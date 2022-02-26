<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MatchType;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MatchTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matchTypes = MatchType::orderBy('id', 'DESC')->get();
        return view('admin.match-type.index', compact('matchTypes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.match-type.create');
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
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'in:tournament,series,league'],
        ]);

        $data['slug'] = Str::slug($request->name, '-');


        $data = MatchType::create($data);
        return redirect()->route('match-type.index')->with('message', 'Match Type has been added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $matchType = MatchType::find($id);
        return view('admin.match-type.edit', compact('matchType'));
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
            'name' => ['required', 'string', 'max:255'],
            'type' => ['required', 'in:tournament,series,league'],
        ]);


        $data['slug'] = Str::slug($request->title, '-');
        $data = MatchType::find($id);

        return redirect()->back()->with('message', 'Match Type has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $members = MatchType::find($id);
        $members->delete();

        return redirect()->route('match-type.index')
            ->with('success', 'News deleted successfully');
    }
}
