<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Home::orderBy('id', 'DESC')->get();
        return view('admin.home.index', compact('homes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.home.create');
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
            'title' => ['required'],
            'slug' => ['nullable', 'string', 'max:255'],
            'date' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
            'category' => ['required', 'string', 'max:255'],
            'body_image' => ['required'],
            'description_under_image' => ['required'],
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['image'] = $imageName;
        }

        if ($request->file('body_image')) {
            $image = $request->file('body_image');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['body_image'] = $imageName;
        }
        $data = Home::create($data);
        return redirect()->route('home.index')->with('message', 'Home has been added successfully');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $home = Home::find($id);
        return view('admin.home.edit',compact('home'));
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
            'title' => ['nullable'],
            'slug' => ['nullable', 'string', 'max:255'],
            'subtitle' => ['nullable'],
            'date' => ['nullable'],
            'description' => ['nullable'],
            'image' => ['nullable'],
            'category' => ['nullable', 'string', 'max:255'],
            'body_image' => ['nullable'],
            'description_under_image' => ['nullable'],
        ]);

        $data['slug'] = Str::slug($request->title, '-');

        if ($request->file('body_image')) {
            $image = $request->file('body_image');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['body_image'] = $imageName;
        }

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['image'] = $imageName;
        }

        $home = Home::find($id);
        $home->update($data);

        return redirect()->back()->with('message', 'Home has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $home = Home::find($id);
        $home->delete();

        return redirect()->route('home.index')
                        ->with('success','Home deleted successfully');
    }
}
