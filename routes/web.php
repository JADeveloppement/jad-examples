<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemocriteController;

use Illuminate\Http\Request;

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

Route::get("/contact", function(){
    return view("jadeveloppement/contact");
});

Route::get('/confidentialite', function(){
    return view('jadeveloppement/confidentialite');
});

Route::get('/legals', function(){
    return view('jadeveloppement/mentions_legales');
});

Route::post("/send-mail", function(Request $r){
    $nom = $r->nom;
    $prenom = $r->prenom;
    $email = $r->email;
    $telephone = $r->telephone;
    $message = $r->message;

    return json_encode(["r"=>"NOM : ".$nom." PRENOM ".$prenom." EMAIL ".$email." TELEPHONE : ".$telephone." MESSAGE : ".$message ] );
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

/*
    TWITCH
*/

Route::get("/twitch", function() {
    return view("twitch/index");
});