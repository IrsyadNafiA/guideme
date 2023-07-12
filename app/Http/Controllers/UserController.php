<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard1() {
        return view('admin.index', ["title" => "User Page"]);
    }
}
