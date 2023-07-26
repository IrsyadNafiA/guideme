<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact', ["title" => "Contact"]);
    }

    public function store(Request $request)
    {
        $post = new Contact();
        $post->name = $request->name;
        $post->email = $request->email;
        $post->description = $request->description;
        $post->save();
        return redirect()->back()->with('status', 'Contact Has Been sent');
    }
}
