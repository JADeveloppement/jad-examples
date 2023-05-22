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
    $objet = "Aucun objet";

    switch($r->subject){
        case 1:
            $objet = "Création de site web";
            break;
        case 2:
            $objet = "Solution graphique";
            break;
        case 3:
            $objet = "Mise à jour d'un site web";
            break;
        case 4:
            $objet = "Autre demande";
            break;
        default:
            $objet = "Erreur dans la récupération d'objet";
            break;
    }

    Mail::to('zachari_86@hotmail.fr')->send(new ContactForm(2, [$email, $objet]));
    return json_encode(["r"=>1]);
});

/*
    DEMOCRITE WEBSITE
*/
Route::get('/democrite', function(){
    return view('democrite/index');
});
Route::get("/democrite/profil", [DemocriteController::class, "logged"]);
Route::get("/democrite/log-out", function(){
    Cookie::queue("democrite_id", "", -1);
    return view("democrite/index");
});
Route::get("/democrite/reset-pro", [DemocriteController::class, "reset_pro"]);

Route::post("/democrite/login", [DemocriteController::class, "try_login"]);
Route::post("/democrite/update-rev", [DemocriteController::class, "update"]);

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