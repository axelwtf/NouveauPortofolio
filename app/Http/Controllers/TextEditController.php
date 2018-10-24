<?php

namespace App\Http\Controllers;

use App\TextEdit;
use Illuminate\Http\Request;

class TextEditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $text = TextEdit::all();
        return view('adminProfile/profile',compact('text'));
    }


    public function create(Request $request)
    {
        $request->validate([
            'editor' => 'required|',
        ]);
        $text = new TextEdit;
        $text -> aboutEdit = $request -> editor;
        $text->save();

        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TextEdit  $textEdit
     * @return \Illuminate\Http\Response
     */
    public function show(TextEdit $textEdit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TextEdit  $textEdit
     * @return \Illuminate\Http\Response
     */
    public function edit(TextEdit $textEdit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TextEdit  $textEdit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TextEdit $textEdit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TextEdit  $textEdit
     * @return \Illuminate\Http\Response
     */
    public function destroy(TextEdit $textEdit)
    {
        //
    }
}
