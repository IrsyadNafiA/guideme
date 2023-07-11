<?php

use Illuminate\Support\Facades\Route;
use Stevebauman\Location\Facades\Location;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('pages.home', [
        "title" => "Home"
    ]);
});

Route::get('/category', function () {
    return view('pages.category', [
        "title" => "Category"
    ]);
});

Route::get('/about', function () {
    return view('pages.about', [
        "title" => "About"
    ]);
});

Route::get('/contact', function () {
    return view('pages.contact', [
        "title" => "Contact"
    ]);
});

Route::get('/detail', function () {
    return view('pages.detail', [
        "title" => "Details"
    ]);
});

Route::get('/seemore', function () {
    return view('pages.seemore', [
        "title" => "See More"
    ]);
});

Route::get('/admin_login', function () {
    return view('auth.login', [
        "title" => "Admin Login"
    ]);
});

Route::get('/dashboard', function () {
    return view('admin.pages.index', [
        "title" => "Dashboard Admin"
    ]);
});

Route::get('/homea', function () {
    #dd(Location::get(request()->ip()));

    //    $ipicad = '180.242.198.192';
    //    $ipq = '180.242.194.16';
    //     if ($position = (Location::get($ipicad))) {

    //         return view('pages.home', compact('position'), [ "title" => "Home"]);
    //     }else {
    //     echo 'fail';
    //     }
});
