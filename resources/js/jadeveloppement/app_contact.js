import $ from 'jquery'

$(".loading").fadeOut(); 

$(window).on("load", function(){
    $(".send-mail").on("click", function(){
        let nom = $("#nom").val(),
            prenom = $("#prenom").val(),
            email = $("#email").val(),
            telephone = $("#telephone").val(),
            message = $("#message").val(),
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
                    let r = JSON.parse(d);
                    console.log(r.r);
                }
            )
        }
    })
})