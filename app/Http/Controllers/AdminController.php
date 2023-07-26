<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard1() {
        return view('admin.index', ["title" => "Admin Page"]);
    }
    public function category() {
        $categorym = Category::all();
        return view('admin.category', ['categorym' => $categorym],["title" => "Admin Page"]);
    }

    public function store_category(Request $request){

   
         $nm = $request->image;
        // $namafile = $nm->getClientOriginalName();
            
         $model = new Category();
         $model->category = $request->category;
         $model->image = $request->image->getClientOriginalName();
    
         $nm->move(public_path().'/images', $request->image->getClientOriginalName());
         $model->save();
    
        return redirect()->back();
        // dd($request->all());
    
        }
    public function editgetcategory(Request $request, $id){
       if ($request->isMethod('post')) {
        $data = $request->all();
        $nm = $request->image;
        $nm->move(public_path().'/images', $request->image->getClientOriginalName());
        Category::where(['id_category' => $id])->update(['category'=>$data['category'], 'image'=>$data['image']->getClientOriginalName()]);
        return redirect()->back();
        
       }
    }
}
