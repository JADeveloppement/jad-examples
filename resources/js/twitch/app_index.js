import $ from 'jquery'

console.log("ok");

setTimeout(() => {
    $(".waiting").removeClass("opacity-0").addClass("opacity-1");
    $(".loading > img, .loading > p ").addClass("animate-pulse");
}, 3000);

$(window).on("load", function(){
    $(".loading").fadeOut();
})