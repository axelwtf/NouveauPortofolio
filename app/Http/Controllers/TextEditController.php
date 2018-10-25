<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
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

        $path = $request->file('aboutImage')->store('public');

        $text = new TextEdit;

        $text -> aboutEdit = $request -> editor;
        $text->aboutImage = $path;
        $text->save();

        return redirect()->back();
    }

    public function edit(TextEdit $textEdit)
    {

    }

    public function update(Request $request)
    {
        $text = TextEdit::find(1);
        $text->aboutEdit = $request->editor;
        if ($request->imageAbout){
            Storage::delete($text->aboutImage);
            $text->aboutImage = $request->file('imageAbout')->store('public');
        }

        $text->save();
        return redirect()->back();
    }

}
