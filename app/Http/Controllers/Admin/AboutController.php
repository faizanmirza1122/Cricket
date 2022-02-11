<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::orderBy('id', 'DESC')->first();
        return view('admin.About.edit', compact('about'));
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
            'side_image_2' => ['nullable'],
            'title' => ['nullable'],
            'subtitle' => ['nullable'],
            'description' => ['nullable'],
            'image' => ['nullable'],
            'why_us_title' => ['nullable'],
            'why_us_description' => ['nullable'],
            'logo_1' => ['nullable'],
            'logo_number_1' => ['nullable'],
            'logo_name_1' => ['nullable'],
            'logo2' => ['nullable'],
            'logo_number_2' => ['nullable'],
            'logo_name_2' => ['nullable'],
            'logo_3' => ['nullable'],
            'logo_number_3' => ['nullable'],
            'logo_name_3' => ['nullable'],
            'user_id' => ['nullable'],
        ]);

        if ($request->file('side_logo_1')) {
            $image = $request->file('side_logo_1');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['side_logo_1'] = $imageName;
        }

        if ($request->file('image')) {
            $image = $request->file('image');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['image'] = $imageName;
        }

        if ($request->file('logo_1')) {
            $image = $request->file('logo_1');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['logo_1'] = $imageName;
        }

        if ($request->file('logo_2')) {
            $image = $request->file('logo_2');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['logo_2'] = $imageName;
        }
        if ($request->file('logo_3')) {
            $image = $request->file('logo_3');
            $imageName = Str::random(8) . '.' . $image->getClientOriginalExtension();
            Storage::putFileAs('public', $image, $imageName);
            $data['logo_3'] = $imageName;
        }
        $data = About::updateOrCreate(['user_id' => Auth::user()->id],$data);

        return redirect()->back()->with('success', 'About is successfully saved');
    }

}
