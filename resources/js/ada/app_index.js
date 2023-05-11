import $ from 'jquery';

let anim = 0;

$(window).on("load", function () {

    function animate() {
        anim++;
        if (anim == 5) anim = 0;
        $(".carousel-examples > img:first-child").css("margin-left", "-" + 100 * anim + "%");
    }

    $("button[data-toggle=send-mail]").on("click", function () {
        let nom = $("#nom").val(),
            prenom = $("#prenom").val(),
            email = $("#email").val(),
            telephone = $("#telephone").val();

            if (nom.length == 0) $("#nom").addClass("is-invalid");
            else $("#nom").removeClass("is-invalid");

            if (prenom.length == 0) $("#prenom").addClass("is-invalid");
            else $("#prenom").removeClass("is-invalid");

            if (email.length == 0) $("#email").addClass("is-invalid");
            else $("#email").removeClass("is-invalid");

            if (telephone.length == 0 && !$("#nottelephoneme").is(":checked")) $("#telephone").addClass("is-invalid");
            else if ($("#nottelephoneme").is(":checked")) $("#telephone").removeClass("is-invalid");

            if ($(":input").hasClass("is-invalid"))
                alert("Veuillez remplir correctement les champs indiqués en rouge");
            else alert("Merci pour votre message, je vais revenir vers vous très rapidement.");
    })

    $(".contact-me").on("click", function(){
        $(".contact").removeClass("hidden opacity-0").addClass("flex opacity-1");
        $(".accueil").addClass("hidden opacity-0")
    })

    setInterval(animate, 3000);
})