import './bootstrap';
import $ from 'jquery';

$(".part2, .part3, .part4").fadeOut();

var par = 1;            
function make_prof(){
    $(".part"+par).fadeOut("slow", function(){
        par++;
        if (par == 5) par = 1;
        $(".part"+par).fadeIn();
    })
}

setInterval(function(){
    make_prof();   
}, 1500);
