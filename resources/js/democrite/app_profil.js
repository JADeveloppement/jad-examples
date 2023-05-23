require('./bootstrap');

import $ from 'jquery';

let last_module = 1;

let items_relus = parseInt(($(".indicator").html().split("/"))[0]), total_nb_items = parseInt(($(".indicator").html().split("/"))[1]),
    pourcentage = items_relus*100/total_nb_items, color = "bg-red-700";

function check_color(){
    if (parseInt(pourcentage) <= 33) color = "bg-red-700";
    else if (parseInt(pourcentage) <= 66) color = "bg-demo-orange";
    else color = "bg-demo-green";
    
    return color;
}

function delayColor() {
    return new Promise(function(resolve) {
        setTimeout(function() {
            resolve();
        }, 1500);
    });
}

async function delayedColor() {
    await delayColor();
    $(".animate-pulse").removeClass("animate-pulse");
    $(".bar-progress-color, .pf-bar").removeClass("bg-slate-300").addClass(check_color()).attr("data-color", check_color()).css("width", pourcentage+"%");
    $(".module[numero=1]").addClass("active");
    $(".items-container[data-target=module1]").removeClass("hidden");
    update(0, 0);
}

delayedColor();

$(".module").on("click", function(){
    var module = $(this).attr("numero");
    var titre_module = $(".module[numero="+module+"] > .module-titre").text(), numero_module = $(".module[numero="+module+"] > .numero-module").text();
    $(this).addClass("active");
    $(".module[numero="+last_module+"]").removeClass("active");
    $(".titre-module-item").text(numero_module + " - " + titre_module);

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

$(".reset-pro").on("click", function(){
    $(".alert-reset-container").removeClass("top-[-100vh]").addClass("top-0");
})

$(".cancel-reset").on("click", function(){
    $(".alert-reset-container").removeClass("top-0").addClass("top-[-100vh]");
})

$(".confirm-reset").on("click", function(){
    location = "/democrite/reset-pro";
})

function change_square(avancement){
    for (var i = 0; i < avancement.length; i++){
        let nb_square_to_color = Math.floor(avancement[i]*0.25);

        if (nb_square_to_color == 25)
            $(".finished[numero="+(i+1)+"]").removeClass("hidden");
        else $(".finished[numero="+(i+1)+"]").addClass("hidden");

        for (var j = 0; j < 25; j++)
            $(".module[numero="+(i+1)+"] .square:nth-child("+(j+1)+")").addClass("bg-slate-100").removeClass("bg-orange-400");

        for (var j = 0; j < nb_square_to_color; j++)
            $(".module[numero="+(i+1)+"] .square:nth-child("+(j+1)+")").removeClass("bg-slate-100").addClass("bg-orange-400");
    }
}

function update(fct, item){
    $.post(
        '/democrite/update-rev',
        {_token: $("meta[name=_token]").attr("content"), fct: fct, item: item},
        function(d){
            let r = JSON.parse(d);
            if (parseInt(r.item) != -1){
                $("input[data-item="+item+"]").attr("value", r.item);
                $(".indicator").html(r.total_reread+"/"+r.total_number);
                pourcentage = r.total_reread*100/r.total_number;
                $(".bar-progress-color, .pf-bar").css("width", pourcentage+"%");
                $(".bar-progress-color, .pf-bar").removeClass($(".bar-progress-color").attr("data-color")).addClass(check_color());
                change_square(r.module_avancement);
                $(".conteneur[numero="+r.numero+"]").removeClass("animate-pulse");
            }
            else console.log("Result : "+d);
        }
    )
}

$(".bi-plus-lg, .bi-dash-lg").on("click", function(){
    let fct = 0, item = 0;
    if ($(this).hasClass("bi-dash-lg")) fct = -1;
    else if ($(this).hasClass("bi-plus-lg")) fct = 1;
    item =  parseInt($(this).attr("data-item"));

    $(".conteneur[numero="+item+"]").addClass("animate-pulse");

    update(fct, item);
})

$(".content").on("scroll", function(){
    if ($(this).scrollTop() > ($(".header").outerHeight() + $(".global-progress-container").outerHeight())) 
        $(".progression-fixed").removeClass("bottom-[-100vh]").addClass("bottom-[1rem]");
    else
        $(".progression-fixed").removeClass("bottom-[1rem]").addClass("bottom-[-100vh]");
})