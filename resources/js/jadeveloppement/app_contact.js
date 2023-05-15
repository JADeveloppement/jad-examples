import $ from 'jquery'

$(".loading").fadeOut();

let max_length = 1000;

$("textarea").on("keyup", function(){
    let textlength = $(this).val().length;
    var charemaining = max_length - textlength;
    if (charemaining < 0){
        $(this).val($(this).val().substring(0, max_length));
        charemaining = 0;
    }

    $(".msg > span").text(charemaining + "/" + max_length);
})

$(window).on("load", function(){
    $(".send-mail").on("click", function(){
        $(this).attr("disabled", true);
        $(".wait-sending").removeClass("hidden");
        setTimeout(function(){
            $(".wait-sending").removeClass("opacity-0");
        }, 100);
        let nom = $("#nom").val(),
            prenom = $("#prenom").val(),
            email = $("#email").val(),
            telephone = $("#telephone").val(),
            message = $("#message").val().substring(0, max_length),
            _token = $("meta[name=_token]").attr("content");

        if (nom.length == 0) $("#nom").addClass("is-invalid");
        else $("#nom").removeClass("is-invalid");

        if (prenom.length == 0) $("#prenom").addClass("is-invalid");
        else $("#prenom").removeClass("is-invalid");

        if (email.length == 0) $("#email").addClass("is-invalid");
        else $("#email").removeClass("is-invalid");

        if (!$("#donttelephone").is(":checked")){
            if (telephone.length == 0)
                $("#telephone").addClass("is-invalid");
        } else if ($("#donttelephone").is(":checked")){
            $("#telephone").removeClass("is-invalid");
        }

        if ($(":input").hasClass('is-invalid')) alert("Veuillez corriger les champs marqué d'un '!' SVP");
        else {
            $.post(
                '/send-mail',
                {_token: _token, nom: nom, prenom: prenom, email: email, telephone: telephone, message: message},
                function(d){
                    alert("Le message a bien été envoyé, je reviendrais vers vous très rapidement.");
                    location.reload(true);
                }
            )
        }
    })
})