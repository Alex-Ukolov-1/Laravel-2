<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(ContactRequest $req)
    {
    	
    $contact=new Contact();
    $contact->home=$req->input('home');
    $contact->about=$req->input('about');
    $contact->contact=$req->input('contact');


    $contact->save();
    return redirect()->route('home')->with('success','the message was added');
    }

    public function allData()
    {
    	return View('messages',['data'=>Contact::all()]);
    }
}
