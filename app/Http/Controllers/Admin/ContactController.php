<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::orderBy('id', 'DESC')->first();
        return view('admin.Contact.edit', compact('contact'));
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
            'map' => ['required', 'url'],
            'title' => ['required'],
            'contact_info' => ['required'],
            'description' => ['required'],
            'general_inquries_title' => ['required'],
            'general_inquries_email' => ['required'],
            'social_link_1' => ['required', 'url'],
            'social_link_2' => ['required', 'url'],
            'social_link_3' => ['required', 'url'],
            'join_team_title' => ['required'],
            'join_team_description' => ['required'],
            'be_our_partner_text' => ['required'],
            'be_our_partner_email' => ['required'],
            'user_id' => ['nullable'],
        ]);

        $data = Contact::updateOrCreate(['user_id' => Auth::user()->id],$data);

        return redirect()->back()->with('success', 'Contact is successfully saved');
    }

}
