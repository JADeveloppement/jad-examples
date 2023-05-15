require ('./bootstrap');

import $ from 'jquery';

const _token = $("meta[name=_token]").attr("content");

$(window).on("load", function(){
    $(".send-news").on("click", function(){
        $(".wait-sending").removeClass("hidden");
        setTimeout(function(){
            $(".wait-sending").removeClass("opacity-0");
            $(".send-news").attr("disabled", true);;
        }, 100);
        let email = $("#emailnews").val(),
            subject = $("#subjectnews").val();

        if (email.length == 0) $("#emailnews").addClass("is-invalid");
        else $("#emailnews").removeClass("is-invalid");

        if (subject == 0) $("#subjectnews").addClass("is-invalid");
        else $("#subjectnews").removeClass("is-invalid");

        if ($("#emailnews, #subjectnews").hasClass("is-invalid")) alert("Veuillez remplir les champs nécessaire avant de me contacter");
        else {

            $.post(
                '/send-news',
                {_token: _token, email: email, subject: subject},
                function(){
                    alert("J'ai bien recçu votre message, je vous recontacterai dans les meilleurs délai.");
                    location.reload(true);
                }
            )
        }
    })
})