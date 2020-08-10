<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Rules\Url;
use App\Contact;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function contactForm()
    {
        $contact = Contact::orderBy('created_at','desc')->first();
        return view('admin.contactForm', ['contact' => $contact]);
    }

    public function storeContact(Request $request, $id)
    {
        if($request){
            $this->validate($request, [
                'telephone1' => 'required|regex:/[0-9]/|not_regex:/[a-z]/|min:7',
                'telephone2' => 'nullable|regex:/[0-9]/|not_regex:/[a-z]/|min:7',
                'telephone3' => 'nullable|regex:/[0-9]/|not_regex:/[a-z]/|min:7',
                'fax' => 'required|regex:/[0-9]/|not_regex:/[a-z]/|min:7',
                'email' => 'required|email|string|max:255',
                'url' => new Url,
            ]);
            
            $contact = Contact::find($id);
            if($contact){   
                $contact->telephone1 = $request->input('telephone1');
                $contact->telephone2 = $request->input('telephone2');
                $contact->telephone3 = $request->input('telephone3');
                $contact->fax = $request->input('fax');
                $contact->email = $request->input('email');
                $contact->url = $request->input('url');
                $contact->save();
            }

            return redirect()->back()->with('success','Contact saved.');
        }
        else{
            return redirect()->back()->with('error','request failed');
        }
    }
}
