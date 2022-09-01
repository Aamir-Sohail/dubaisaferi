<?php

namespace App\Http\Controllers\Admin;
use App\Models\userview\ContactModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{

    public function index()
    {
        $contact = ContactModel::all();
        // dd($users);
        return view('admin.contact.allcontact', compact('contact'));
    }

    public function deletecontact($id)
    {

        $contact= ContactModel::find($id);
        $contact->delete();
        return redirect()->back();
    }
}
