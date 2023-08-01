<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\places;
use Illuminate\Http\Request;

class ApiLocationController extends Controller
{
    public function __invoke(){
        $places = places::all();

        return response()->json($places);
    }
}
