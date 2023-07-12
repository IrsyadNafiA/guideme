<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard1() {
        return view('admin.index', ["title" => "Admin Page"]);
    }
}
