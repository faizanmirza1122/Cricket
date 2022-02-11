<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Main;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $main = Main::orderBy('id', 'DESC')->first();
        return view('admin.main.edit', ['main' => $main]);
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
            'subtitle' => ['required'],
            'logo' => ['nullable'],
            'image' => ['nullable'],
            'social_link_1' => ['nullable', 'url'],
            'social_link_name_1' => ['nullable'],
            'social_link_text_1' => ['nullable'],
            'social_link_2' => ['nullable', 'url'],
            'social_link_name_2' => ['nullable'],
            'social_link_text_2' => ['nullable'],
            'social_link_3' => ['nullable', 'url'],
            'social_link_name_3' => ['nullable'],
            'social_link_text_3' => ['nullable'],
            'social_link_4' => ['nullable', 'url'],
            'social_link_name_4' => ['nullable'],
            'social_link_text_4' => ['nullable'],
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['image'] = $imageName;
        }

        if ($request->file('logo')) {
            $image = $request->file('logo');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['logo'] = $imageName;
        }

        // $data = $data->storeImage();
        $data = Main::updateOrCreate(['user_id' => Auth::user()->id],$data);

        return redirect()->back()->with('success', 'Index is successfully saved');
    }

}
