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
        return view('admin.matches.staff-page.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.matches.staff-page.create');
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
            'slug' => ['nullable', 'string', 'max:255'],
            'age' => ['required'],
            'joining_date' => ['required'],
            'country' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
            'social_media_link_1' => ['nullable', 'url'],
            'social_media_link_2' => ['nullable', 'url'],
            'social_media_link_3' => ['nullable', 'url'],
            'previous_work' => ['nullable'],
        ]);

        $data['slug'] = Str::slug($request->name);

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['image'] = $imageName;
        }
        // dd($data);
        $data = AllMember::create($data);
        return redirect()->route('management-team-members.index')->with('message', 'Team Member has been added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = AllMember::find($id);
        return view('admin.matches.staff-page.edit', compact('member'));
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
            'designation' => ['nullable', 'string', 'max:255'],
            'name' => ['nullable', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255'],
            'age' => ['nullable'],
            'joining_date' => ['nullable'],
            'country' => ['nullable'],
            'description' => ['nullable'],
            'image' => ['nullable'],
            'social_media_link_1' => ['nullable', 'url'],
            'social_media_link_2' => ['nullable', 'url'],
            'social_media_link_3' => ['nullable', 'url'],
            'previous_work' => ['nullable'],
        ]);

        $data['slug'] = Str::slug($request->name);

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['image'] = $imageName;
        }else{
            $imageName = $request->image;
        }

        // dd($data);
        $data = AllMember::find($id);

        $data->designation =  $request->get('designation');
        $data->name = $request->get('name');
        $data->slug = $request->get('slug');
        $data->age = $request->get('age');
        $data->joining_date = $request->get('joining_date');
        $data->country = $request->get('country');
        $data->description = $request->get('description');
        $data->image = $imageName;
        $data->social_media_link_1 = $request->get('social_media_link_1');
        $data->social_media_link_2 = $request->get('social_media_link_2');
        $data->social_media_link_3 = $request->get('social_media_link_3');
        $data->previous_work = $request->get('previous_work');
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

        return redirect()->route('management-team-members.index')
            ->with('success', 'Team Member deleted successfully');
    }
}
