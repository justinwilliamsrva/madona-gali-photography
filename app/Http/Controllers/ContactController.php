<?php

namespace App\Http\Controllers;

use App\Mail\ContactMailer;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    public function __construct(Request $request)
    {
        $this->middleware('auth')->only('index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate(["name" => 'required', "message" => ['required', 'min:7', 'max:500']]);

        if (strtolower($request->security) != 'blue'){
            Session::flash('error', 'Failed security question. <br class="md:hidden"/> Message not sent.');

            return redirect()->back();
        }

        $contact = new Contact;
        $contact = Contact::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'location' => $request->location,
            'subject' => $request->subject,
            'message' => $request->message,
            'security' => $request->security,
        ]);
        $contact->save();
        Session::flash('success', 'Thank you for your message.<br class="md:hidden"/> I will get back to your shortly.');
        Mail::to('madonagaliphotography@gmail.com')->send(new ContactMailer($contact));
        Mail::to('justinwdev@gmail.com')->send(new ContactMailer($contact));

        return redirect()->back();
    }
}
