<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faqs;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqs = Faqs::orderBy('id', 'DESC')->get();
        return view('admin.faqs.index', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faqs.create');
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
            'question' => ['required'],
            'answer' => ['nullable'],
        ]);

        $data = Faqs::create($data);

        return redirect()->back()->with('success', 'Faqs is successfully saved');
    }

    public function edit($id)
    {
        $faqs = Faqs::find($id);
        return view('admin.faqs.edit',compact('faqs'));
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
            'question' => ['required'],
            'answer' => ['nullable'],
        ]);



        $data = Faqs::find($id);
        // Getting values from the blade template form
        $data->question =  $request->get('question');
        $data->answer = $request->get('answer');
        $data->save();
        return redirect()->back()->with('message', 'faqs has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $faqs = Faqs::find($id);
        $faqs->delete();

        return redirect()->route('faqs.index')
                        ->with('success','faqs deleted successfully');
    }


}
