<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use Validator;
    use Session;
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
        return view ('/');
    }

     public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required|min:3',
            'email'=>'required|email',
            'message'=>'required|min:10',
        ]);

        if ($validator->fails()) {
            return redirect('/#contact')
                        ->withErrors($validator)
                        ->withInput();
        }

        $mailable = new MessageCreated($request->name,$request->email, $request->msg);
        Mail::to('admin@gmail.com')->send($mailable);
        return redirect('/#contact')->with('success','Votre message est envoye');
    }
}
