import './bootstrap';
import $ from 'jquery';

let timer = 170, indice = 0, phrase = "Ensemble.", done = false, cursor = 4;

$(window).on("load", function(){
    $(".h2-1").css("opacity", "1");
    $(".ensemble").css("opacity", "1");
    setTimeout(() => {
        ensemble();
    }, 1300);
    
    function ensemble(){
        setTimeout(function(){
            $(".h2-2").html($(".h2-2").html() + phrase[indice]);
            indice++;
            timer += 57;
            if (indice < phrase.length) ensemble();
            else {
                var interval = setInterval(function(){
                    let c = $(".cursor");
                    if (c.hasClass("hidden")) c.removeClass("hidden");
                    else c.addClass("hidden");
                    cursor ++;

                    if (cursor == 10) clearInterval(this);
                }, 800);
            };
        }, timer);
    }
})