<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard1()
    {
        return view('admin.index', ["title" => "User Page"]);
    }

    public function category()
    {
        $categorym = Category::all();
        return view('pages.category', ['categorym' => $categorym], ["title" => "Category"]);
    }

    public function categoryDetail($id_kategori)
    {
        $data = Category::find($id_kategori);
        // dd($data);
        if ($data !== null) {
            return view('pages.detail', ['data' => $data], ["title" => "Detail"]);
        } else {
            return "Category Not Found";
        }
    }
}
