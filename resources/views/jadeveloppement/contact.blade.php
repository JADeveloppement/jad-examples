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
            <h2 class="h2-1">Développons un site web qui vous ressemble</h2>
            <div class="flex text-white ensemble"><h2 class="h2-2"></h2><h2 class="cursor">|</h2></div>
        </section>
        
        @include("jadeveloppement.sections.footers")
        <script src="{{ mix('js/jadeveloppement/app_contact.js') }}"></script>
    </body>
</html>
