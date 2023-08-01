<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Arrival;
use App\Models\places;
use Illuminate\Http\Request;
use Illuminate\View\response;

class UserController extends Controller
{
    public function home()
    {
        $arrivalm = Arrival::all();
        $places = places::all();
        $lt = $places->where('id_places','1');
        $lt2 = $places->where('id_places','2');
        
        return view('pages.home', ['arrivalm' => $arrivalm], ["title" => "Home"], response()->json($places));
    }

    public function arrival($id_arrival)
    {
        $arrivalm = Arrival::find($id_arrival);
        $place = places::all()->where('id_arrival', $id_arrival);
        return view('pages.arrival', ['arrivalm' => $arrivalm, 'place' => $place], ["title" => "Arrival Location"]);
    }

    public function category()
    {
        $categorym = Category::all();
        return view('pages.category', ['categorym' => $categorym], ["title" => "Category"]);
    }

    public function categoryDetail($id_kategori)
    {
        $data = Category::find($id_kategori);
        $data2 = places::all()->where('id_category', $id_kategori);
        // dd($data);
        if ($data !== null) {
            return view('pages.detail', ['data' => $data, 'data2' => $data2], ["title" => "Detail"]);
        } else {
            return "Category Not Found";
        }
    }

    public function placedetail($id)
    {
        $data = places::find($id);
        return view('pages.seemore', ['data' => $data], ["title" => "Detail"]);
    }
}
