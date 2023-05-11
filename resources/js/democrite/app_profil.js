require('./bootstrap');

import $ from 'jquery'

let last_module = 1, last_menu = ".content"

setTimeout(function(){
    $(".bar-progress-color").css("width", "1%");
    $(".module[numero=1]").addClass("active");
    $(".items-container[data-target=module1]").removeClass("hidden");
}, 1000);

$(".module").on("click", function(){
    var module = $(this).attr("numero");
    var titre_module = $(".module[numero="+module+"] > .module-titre").text(), numero_module = $(".module[numero="+module+"] > .numero-module").text();
    $(this).addClass("active");
    $(".module[numero="+last_module+"]").removeClass("active");
    $(".titre-module-item").html(numero_module + " - " + titre_module);

    $(".items-container[data-target=module"+last_module+"]").addClass("hidden");
    $(".items-container[data-target=module"+module+"]").removeClass("hidden");

    last_module = module;    
})

$(".do-modules").on("click", function(){
    if (!$(".profil").hasClass("hidden")){
        $(".do-profil").removeClass("menu-active");
        $(this).addClass("menu-active");
        $(".profil").addClass("hidden");
        $(".content").removeClass("hidden");
    }
})

$(".do-profil").on("click", function(){
    if (!$(".content").hasClass("hidden")){
        $(".do-modules").removeClass("menu-active");
        $(this).addClass("menu-active");
        $(".content").addClass("hidden");
        $(".profil").removeClass("hidden");
    }
})

$(".log-out").on("click", function(){
    location = "/democrite/log-out";
})