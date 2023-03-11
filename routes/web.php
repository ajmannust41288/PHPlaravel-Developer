<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\DB;
use app\Http\Controllers\UserController;
// use app\Http\Controllers\getformcontroller;
use App\Http\Controllers\UserController as ControllersUserController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/contact', function () {
//     return view('contact');
// });
// Route::get("/users",[UserController::class,'loadview']);
// Route::post("users",[ControllersUserController::class,'getData']);//first is url and second parameter  is filename
Route::view("login","users");
// Route::get('/home', function () {
//     return view('home');
// });
Route::get('/position', function () {
    return view('position');
});
// Route::get("/users",[UserController::class,'loadview']);
// Route::post("data",[getformcontroller::class,"getData"]);
// Route::view("login","form" );
Route::get('/', function () {
    return view('welcome');
});
Route::view("noaccess","noaccess");
Route::view("home","home")->middleware('protectedpage');
Route::view("check","check")->middleware('protectedpage');
Route::group(['middleware'=>['protectage']],function(){
    // Route::view("users","users");

    // Route::get('/about', function () {
    //     return view('about');
    // });
});
// Route::get("user",[ControllersUserController::class,'index']);
Route::get("user",[ControllersUserController::class,'index']);
