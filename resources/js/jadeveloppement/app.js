import './bootstrap';
import $ from 'jquery';

$(".part2, .part3, .part4").fadeOut();
$(".progress-profil").addClass("animate-grow").css("width", "100%");

let par = 1;
const DURATION = 60000;

let pro = 0, max_pro = 7;
$(".prev-pro").addClass("opacity-50");

$(".next-pro").on("click", function(){
    if (pro < max_pro-1){
        $(".carre-container[target="+pro+"]").css("margin-left", "-100%");
        pro++;
        if (pro >= 1) $(".prev-pro").removeClass("opacity-50").addClass("cursor-pointer");
        if (pro == max_pro-1) $(this).removeClass("cursor-pointer").addClass("opacity-50");
    }
    console.log(pro);
});

$(".prev-pro").on("click", function(){
    if (pro > 0){
        $(".carre-container[target="+(pro-1)+"]").css("margin-left", "0");
        pro--;
        if (pro <= 9) $(".next-pro").removeClass("opacity-50").addClass("cursor-pointer");
        if (pro == 0) $(this).removeClass("cursor-pointer").addClass("opacity-50");
    }

    console.log(pro);
});

function make_prof(direction, target){
    $(".progress-profil").removeClass("animate-grow").css("width", "0");
    $(".bi[data=part"+par+"]").removeClass("bi-circle-fill").addClass("bi-circle");
    $(".part"+par).fadeOut("slow", function(){
        if (target === undefined){
            if (direction === undefined || direction > 0){
                par++;
                if (par == 5) par = 1;
            }
            else if (direction < 0){
                par--;
                if (par == 0) par = 4;
            }
        } else {
            par = target;
        }
        $(".part"+par).fadeIn();
        $(".bi[data=part"+par+"]").removeClass("bi-circle").addClass("bi-circle-fill");
        $(".progress-profil").addClass("animate-grow").css("width", "100%");
    })
}

$("i[data-nav]").on("click", function(){
    clearInterval(interval);
    make_prof(0, parseInt($(this).attr("data").substring(4, 5)));
    interval = setInterval(function(){
        make_prof();   
    }, DURATION);
})

let interval = setInterval(function(){
    make_prof(1); 
}, DURATION);

let touchstartX = 0
let touchendX = 0
let deltaX = 0;

function checkDirection(from) {
    deltaX = touchendX - touchstartX;
    console.log(deltaX);
    if (deltaX < 0){
        if (Math.abs(deltaX) > 50){
            if (from == undefined){
                clearInterval(interval);
                make_prof(1);
                interval = setInterval(function(){
                    make_prof();   
                }, DURATION);
            } else {
                console.log("change");
                if (pro < max_pro-1){
                    $(".carre-container[target="+pro+"]").css("margin-left", "-100%");
                    pro++;
                    if (pro >= 1) $(".prev-pro").removeClass("opacity-50").addClass("cursor-pointer");
                    if (pro == max_pro-1) $(".next-pro").removeClass("cursor-pointer").addClass("opacity-50");
                }
            }
        }
    } else {
        if (Math.abs(deltaX) > 50){
            if (from == undefined){
                clearInterval(interval);
                make_prof(-1);
                interval = setInterval(function(){
                    make_prof();   
                }, DURATION);
            } else {
                if (pro > 0){
                    $(".carre-container[target="+(pro-1)+"]").css("margin-left", "0");
                    pro--;
                    if (pro <= 9) $(".next-pro").removeClass("opacity-50").addClass("cursor-pointer");
                    if (pro == 0) $(".prev-pro").removeClass("cursor-pointer").addClass("opacity-50");
                }
            }
        }
    }
}

$(".profil > .right").on('mousedown touchstart', e => {
    if (e.type === "touchstart") touchstartX = e.changedTouches[0].screenX;
    else touchstartX = e.screenX
})

$(".profil > .right").on('mouseup touchend', e => {
    if (e.type === "touchend") touchendX = e.changedTouches[0].screenX;
    else touchendX = e.screenX;
    checkDirection()
})

$(".carre-container").on('mousedown touchstart', e => {
    console.log("ok");
    if (e.type === "touchstart") touchstartX = e.changedTouches[0].screenX;
    else touchstartX = e.screenX
})

$(".carre-container").on('mouseup touchend', e => {
    if (e.type === "touchend") touchendX = e.changedTouches[0].screenX;
    else touchendX = e.screenX;
    checkDirection(1)
})

$(window).on("load", function(){
    let max = 0;
    $(".carre").each(function(){
        if ($(this).outerHeight() > max) max = $(this).outerHeight();
        console.log("outerheight : "+$(this).outerHeight() + " MAX : "+max);
    })

    $(".carre").each(function(){
        $(this).css("height", max+"px");
    })
})