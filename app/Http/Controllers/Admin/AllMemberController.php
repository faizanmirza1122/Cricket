<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AllMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AllMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = AllMember::orderBy('id', 'DESC')->get();
        return view('admin.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
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
            'designation' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'age' => ['required'],
            'joining_date' => ['required'],
            'country' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
            'social_media_link_1' => ['required', 'url'],
            'social_media_link_2' => ['required', 'url'],
            'social_media_link_3' => ['required', 'url'],
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['image'] = $imageName;
        }
        $data = AllMember::create($data);
        return redirect()->route('team.index')->with('message', 'Team Member has been added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $members = AllMember::find($id);
        return view('admin.team.edit', compact('home'));
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
            'designation' => ['required', 'string', 'max:255'],
            'name' => ['required', 'string', 'max:255'],
            'age' => ['required'],
            'joining_date' => ['required'],
            'country' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
            'social_media_link_1' => ['required', 'url'],
            'social_media_link_2' => ['required', 'url'],
            'social_media_link_3' => ['required', 'url'],
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['image'] = $imageName;
        }

        $data = AllMember::find($id);

        $data->designation =  $request->get('designation');
        $data->name = $request->get('name');
        $data->age = $request->get('age');
        $data->joining_date = $request->get('joining_date');
        $data->country = $request->get('country');
        $data->description = $request->get('description');
        $data->image = $request->get('image');
        $data->social_media_link_1 = $request->get('social_media_link_1');
        $data->social_media_link_2 = $request->get('social_media_link_2');
        $data->social_media_link_3 = $request->get('social_media_link_3');
        $data->image = $imageName;
        $data->save();
        return redirect()->back()->with('message', 'Team Member has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $members = AllMember::find($id);
        $members->delete();

        return redirect()->route('home.index')
            ->with('success', 'Team Member deleted successfully');
    }
}
