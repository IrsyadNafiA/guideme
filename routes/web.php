<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Route as RoutingRoute;
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

// routes login
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => 'Cek_login:admin'], function () {
        Route::get('admin/dashboard', [AdminController::class, 'dashboard1'])->name('admin/dashboard');

        Route::get('admin/category', [AdminController::class, 'category'])->name('admin/category');
        Route::post('admin/add_category', [AdminController::class, 'store_category'])->name('admin/add_category');
        Route::match(['get', 'post'], '/edit_category{id}', [AdminController::class, 'editgetcategory'])->name('/edit_category{id}');
        Route::match(['get', 'post', 'delete'], '/delete_category{id}', [AdminController::class, 'deletecategory'])->name('/delete_category{id}');

        Route::get('admin/places', [AdminController::class, 'places'])->name('admin/places');
        Route::post('admin/add_places', [AdminController::class, 'store_places'])->name('admin/add_places');
        Route::match(['get', 'post'], '/edit_places{id}', [AdminController::class, 'editplaces'])->name('/edit_places{id}');


        Route::get('admin/arrival', [AdminController::class, 'arrival'])->name('admin/arrival');
        Route::post('admin/add_arrival', [AdminController::class, 'store_arrival'])->name('admin/add_arrival');
    });

    Route::group(['middleware' => 'Cek_login:user'], function () {
        Route::get('user', [UserController::class, 'dashboard1'])->name('user');
    });
});
// end login

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/home', function () {
//     return view('pages.home', [
//         "title" => "Home"
//     ]);
// });

Route::get('/home', [UserController::class, 'home'])->name('/home');
Route::get('/arrival/detail/{id_arrival}', [UserController::class, 'arrival'])->name('/arrival/detail/{id_arrival}');

// Route::get('/category', function () {
//     return view('pages.category', [
//         "title" => "Category"
//     ]);
// });

// Route::get('/detail', function () {
//     return view('pages.detail', [
//         "title" => "Details"
//     ]);
// });

Route::get('/category', [UserController::class, 'category'])->name('/category');
Route::get('/category/detail/{id_kategori}', [UserController::class, 'categoryDetail'])->name('/category/detail/{id_kategori}');


Route::get('/about', function () {
    return view('pages.about', [
        "title" => "About"
    ]);
});

// Route::get('/contact', function () {
//     return view('pages.contact', [
//         "title" => "Contact"
//     ]);
// });

Route::get('/contact', [ContactController::class, 'index'])->name('/contact');
Route::post('store_contact', [ContactController::class, 'store'])->name('store_contact');
Route::get('/place{id}', [UserController::class, 'placedetail'])->name('/place{id}');




Route::get('/admin_login', function () {
    return view('auth.login', [
        "title" => "Admin Login"
    ]);
});

Route::get('/dashboard', function () {
    return view('admin.index', [
        "title" => "Dashboard Admin"
    ]);
});

Route::get('/add_category', function () {
    return view('admin.category', [
        "title" => "Category Admin"
    ]);
});

Route::get('/add_arrival', function () {
    return view('admin.arrival', [
        "title" => "Arrival Location Admin"
    ]);
});

Route::get('/add_places', function () {
    return view('admin.places', [
        "title" => "Places Admin"
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
