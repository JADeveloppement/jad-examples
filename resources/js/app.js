import './bootstrap';
import $ from 'jquery';

$(".part2, .part3, .part4").fadeOut();
$(".progress-profil").addClass("animate-grow").css("width", "100%");

let par = 1;
const DURATION = 60000;

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

function checkDirection() {
    deltaX = touchendX - touchstartX;
    if (deltaX < 0){
        if (Math.abs(deltaX) > 50){
            clearInterval(interval);
            make_prof(1);
            interval = setInterval(function(){
                make_prof();   
            }, DURATION);
        }
    } else {
        if (Math.abs(deltaX) > 50){
            clearInterval(interval);
            make_prof(-1);
            interval = setInterval(function(){
                make_prof();   
            }, DURATION);
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