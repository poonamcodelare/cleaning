<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{
    public function index(){
    	return view('contact-us');
    }

    public function store(Request $request)
    {
    	$contact = new Contact;
    	$contact->name = $request->input('name');
    	$contact->email = $request->input('email');
    	$contact->contact_number = $request->input('contact_number');
    	$contact->city = $request->input('city');
    	$contact->message = $request->input('message');
    	$contact->save();
    	return redirect('/contact-us');
    }
}
