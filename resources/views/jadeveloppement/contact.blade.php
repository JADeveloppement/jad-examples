<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="{{ mix('css/jadeveloppement/app_contact.css') }}">
        @include("jadeveloppement.sections.head")
    </head>
    <body class="antialiased">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <div class="background">
            <img src="https://jadeveloppement.fr/wp-content/uploads/2023/01/html-color-codes-color-tutorials-hero-scaled.jpg" alt="">
        </div>
        @include("jadeveloppement.sections.header")

        <section>
            <h2>Formulaire de contact</h2>

            <div class="form-container">
                <div class="form-floating m-3">
                    <input type="name" class="form-control" id="nom" placeholder="Nom">
                    <label for="nom">Nom</label>
                </div>
                <div class="form-floating m-3">
                    <input type="name" class="form-control" id="prenom" placeholder="Prénom">
                    <label for="prenom">Prénom</label>
                </div>
                <div class="form-floating m-3">
                    <input type="email" class="form-control" id="email" placeholder="name@example.com">
                    <label for="email">Email address</label>
                </div>
                <div class="form-floating m-3">
                    <input type="telephone" class="form-control" id="telephone" placeholder="name@example.com">
                    <label for="telephone">Téléphone</label>
                </div>

                <div class="form-check m-3">
                    <input class="form-check-input" type="checkbox" value="" id="donttelephone">
                    <label class="form-check-label" for="donttelephone">
                        Ne pas me contacter par téléphone
                    </label>
                </div>

                <div class="form-floating m-3 msg">
                    <textarea class="form-control" placeholder="Leave a comment here" id="message" style="height: 100px"></textarea>
                    <label for="message">Votre message</label>
                    <span for="message">1000/1000</span>
                </div>
                
                <button class="btn flex items-center m-3 bg-orange-500 text-white transition-all hover:bg-orange-800 send-mail ">
                    <svg class="animate-spin h-5 w-5 mr-3 wait-sending transition-all opacity-0 hidden " viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Envoyer
                </button>
            </div>
        </section>
        
        @include("jadeveloppement.sections.footers")
        <script src="{{ mix('js/jadeveloppement/app_contact.js') }}"></script>
        <script>
        </script>
    </body>
</html>
