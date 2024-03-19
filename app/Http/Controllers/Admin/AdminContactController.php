<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;


class AdminContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::get();
        return view('Admin.contact.contact', compact('contacts'));
    }

    public function store(Request $request)
    {
//        dd('cc');
        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message
        ]);
        dd('cc');
        return redirect()->back();

    }

    public function delete(Request $request)
    {
        Contact::find($request->contact_id)->delete();
        return redirect()->back();

    }
}
