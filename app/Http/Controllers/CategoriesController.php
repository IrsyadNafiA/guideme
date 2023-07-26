<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\http\UploadedFile;

class CategoriesController extends Controller
{
    public function store_category(Request $request){

    // $nm = $request->image;
    // $namafile = $nm->getClientOriginalName();
        
    $model = new Category();
    // $model->category = $request->category;
    // $model->image = $request->namafile;

    // $nm->move(public_path().'/images', $namafile);
    // $model->save();

    return redirect()->back();
    // dd($request->all());

    }
}
