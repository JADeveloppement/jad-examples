<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemocriteController;

use Illuminate\Http\Request;

use App\Mail\ContactForm;
use Illuminate\Support\Facades\Mail;

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
    $content = [$r->nom, $r->prenom, $r->email, $r->telephone, $r->message];
    
    Mail::to('zachari_86@hotmail.fr')->send(new ContactForm(1, $content));
    return json_encode(["r" => 1]);
});

Route::post("/send-news", function(Request $r){
    $email = $r->email;
    $subject = $r->subject;

    Mail::to('zachari_86@hotmail.fr')->send(new ContactForm(2, [$email, $subject]));
    return json_encode(["r"=>1]);
});

Route::get("/test", function(Request $r){
    $content = ["Aissaoui", "Jalal", "zachari_86@hotmail.fr", "", "Ceci est un essai de message"];
    return new ContactForm($r->from, $content);
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