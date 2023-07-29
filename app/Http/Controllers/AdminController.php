<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\places;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;

class AdminController extends Controller
{
    public function dashboard1() {
        return view('admin.index', ["title" => "Admin Page"]);
    }

    /* category */
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

    public function deletecategory(Request $request, $id){
        $data = Category::find($id);
        $data->delete();
        return redirect()->back();
        
    }
    // end category

    /* start places */
    // public function places(Request $request){
    //     $placem = places::with('category');
    //     dd($placem);
    //     return view('admin.places', ['placem' => $placem],["title" => "Admin Page"]);
    // }
    public function places(){
        $placem = places::query()->with('category')->get();
        $cat = Category::all();

        
        return view('admin.places', ['placem' => $placem, 'cat' => $cat], ["title" => "Admin Page"]);
        
    }

    public function store_places(Request $request){

   
        $nm = $request->image;
       // $namafile = $nm->getClientOriginalName();
           
        $model = new places();
        $model->title = $request->title;
        $model->maps   = $request->map;
        $model->description   = $request->desc;
        $model->id_category   = $request->coba;
        $model->image = $request->image->getClientOriginalName();
   
        $nm->move(public_path().'/images', $request->image->getClientOriginalName());
        $model->save();
   
       return redirect()->back();
       // dd($request->all());
   
       }

    public function editplaces(Request $request,$id){
        if ($request->isMethod('post')) {
            $data = $request->all();
            $nm = $request->image;
            $nm->move(public_path().'/images', $request->image->getClientOriginalName());
            places::where(['id_places' => $id])->update(['title'=>$data['title'],'maps'=>$data['map'], 'description'=>$data['desc'],'id_category'=>$data['coba'], 'image'=>$data['image']->getClientOriginalName()]);
            return redirect()->back();
            
           }
    }
    /* end places */
}
