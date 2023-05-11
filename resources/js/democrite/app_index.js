require('./bootstrap.js');
import $ from 'jquery';

$(".do-login").on("click", function(){
    if ($(".login").hasClass("hidden")){
        $(".login").removeClass("hidden").addClass("flex");
        $(".description").removeClass("flex").addClass("hidden");
    }
});

$(".do-cancel").on("click", function(){
    $(".login").removeClass("flex").addClass("hidden");
    $(".description").removeClass("hidden").addClass("flex");
});

$("a").on("click", function(e){
    e.preventDefault();
    alert("Vous ne pouvez pas vous inscrire sur la version de démonstration.");
});

$(".do-signin").on("click", function(){
    var login = $("#login").val(), pwd = $("#pwd").val(), _token = $("meta[name=_token]").attr("content");
    console.log(_token);
    if (pwd.length == 0 || login.length == 0) alert("Veuillez remplir tous les champs s'il vous plait.");
    else {
        $.post(
            '/democrite/login',
            {_token: _token, login: login, password: pwd},
            function(d){
                if ((JSON.parse(d)).r == 1)
                    location = "/democrite/profil";
                else if ((JSON.parse(d)).r == 0) alert("Mauvais nom d'utilisateur ou mot de passe");
            }
        );
    }
});