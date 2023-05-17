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
    $(".global-progress-container").removeClass("animate-pulse");
    $(".bar-progress-color").removeClass("bg-slate-300").addClass(check_color()).attr("data-color", check_color()).css("width", pourcentage+"%");
    $(".module[numero=1]").addClass("active");
    $(".items-container[data-target=module1]").removeClass("hidden");
}

delayedColor();

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

function update(fct, item){
    console.log("UPDATE : "+fct+" ITEM : "+item);
    $.post(
        '/democrite/update-rev',
        {_token: $("meta[name=_token]").attr("content"), fct: fct, item: item},
        function(d){
            let r = JSON.parse(d);
            if (parseInt(r.item) != -1){
                $("input[data-item="+item+"]").attr("value", r.item);
                $(".indicator").html(r.total_reread+"/"+r.total_number);
                pourcentage = r.total_reread*100/r.total_number;
                $(".bar-progress-color").css("width", pourcentage+"%");
                $(".bar-progress-color").removeClass($(".bar-progress-color").attr("data-color")).addClass(check_color());
                console.log(check_color());
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

    update(fct, item);
})