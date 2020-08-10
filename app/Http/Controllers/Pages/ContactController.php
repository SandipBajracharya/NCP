<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;


//This controller just takes the data stored (via Admin/ContactController) on DB and display it.
class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::orderBy('created_at','desc')->first();
        return view('pages.contact', ['contact' => $contact]);
    }
}
