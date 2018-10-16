<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Http\Requests\ContactRequest;
use App\Mail\MessageCreated;

use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function index()
    {
        // $contacts = Contact::all();
        // return view('mail',compact('contacts'));
    }


    public function create(Request $request)
    {
        // $contacts = new Contact;
        // $contacts->name = $request->name;
        // $contacts->email = $request->email;
        // $contacts->phone =$request->phone;
        // $contacts->message = $request->message;
        // $contacts->save();
        // return redirect('/');
        return view ('/');
    }


    public function store(ContactRequest $request)
    {
        $mailable = new MessageCreated($request->name,$request->email, $request->msg);
        Mail::to('admin@gmail.com')->send($mailable);

        return view ('email.messagesCreate', compact($request->name,$request->email, $request->msg));
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
