<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemocriteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*
    JADEVELOPPEMENT WEBSITE
*/
Route::get('/travaux', function () {
    return view('jadeveloppement/travaux');
});

Route::get('/', function(){
    return view('jadeveloppement/index');
});

/*
    DEMOCRITE WEBSITE
*/
Route::get('/democrite', function(){
    return view('democrite/index');
});

Route::post("/democrite/login", [DemocriteController::class, "try_login"]);
Route::get("/democrite/profil", [DemocriteController::class, "logged"]);
ROute::get("/democrite/log-out", function(){
    Cookie::queue("democrite_id", "", -1);
    return view("democrite/index");
});

/*
    ART DESIGN AGENCEMENT
*/

Route::get("/ada", function(){
    return view("ada/index");
});