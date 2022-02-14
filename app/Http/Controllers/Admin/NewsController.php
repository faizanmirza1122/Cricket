<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('id', 'DESC')->get();
        return view('admin.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
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
            'category' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'date' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['image'] = $imageName;
        }
        $data = News::create($data);
        return redirect()->route('news.index')->with('message', 'News has been added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::find($id);
        return view('admin.news.edit', compact('news'));
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
            'category' => ['required', 'string', 'max:255'],
            'title' => ['required', 'string', 'max:255'],
            'date' => ['required'],
            'description' => ['required'],
            'image' => ['nullable'],
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['image'] = $imageName;
        } else {
            $imageName = $request->image;
        }

        $data = News::find($id);

        $data->category =  $request->get('category');
        $data->title = $request->get('title');
        $data->date = $request->get('date');
        $data->description = $request->get('description');
        $data->image = $imageName;
        $data->save();
        return redirect()->back()->with('message', 'News has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $members = News::find($id);
        $members->delete();

        return redirect()->route('news.index')
            ->with('success', 'News deleted successfully');
    }
}
