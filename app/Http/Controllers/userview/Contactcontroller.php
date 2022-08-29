<?php

namespace App\Http\Controllers\userview;

use App\Http\Controllers\Controller;
use App\Models\userview\ContactModel;
use Illuminate\Http\Request;

class Contactcontroller extends Controller
{

    public function index()
    {
        return view('userview.contact');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
               'phone' =>['required','string' ,'max:255'],
               'location' =>['required','string' ,'max:255'],
               'subject' =>['required','string' ,'max:255'],
               'message' =>['required','string' ,'max:255'],
        ]);
        $contactmodel = new ContactModel;
        $contactmodel->username =$request['username'];
        $contactmodel->email =$request['email'];
        $contactmodel->phone =$request['phone'];
        $contactmodel->location =$request['location'];
        $contactmodel->subject =$request['subject'];
        $contactmodel->message =$request['message'];
        $contactmodel->save();
        return redirect()->back();
    }

    protected function logout()
    {
        
    }
    
}
