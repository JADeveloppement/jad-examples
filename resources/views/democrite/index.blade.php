<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="_token" content="{{ csrf_token() }}">

        <title>Révision Démocrite</title>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=alef:400,600&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="{{ asset('css/democrite/app_index.css') }}">

        <!-- BOOTSTRAP AND ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

        <div class="header">
            <div class="left">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/02/logo-sans-fond.png" alt="">
                Révisions ECN
            </div>
            <div class="right">
                <i class="do-login bi bi-person-circle mr-4"></i>
            </div>
        </div>
        <style>
            @media screen and(max-width: 768px){
                .description, .login {
                    width: 80vw !important;
                    align-items: center !important;
                }
            }
        </style>
        <div class="content">
            <img src="https://jadeveloppement.fr/wp-content/uploads/2023/02/Hanna-Sudom-How-to-stay-motivated-while-studying-online-rotated-1.jpg" alt="" class="cover">
            <div class="description flex">
                <h4 class="text-demo-green text-center w-full">Révisions Démocrite</h4>
                <p class="text-center">
                    Organisez vos révisions comme vous ne l’avez jamais fait. Développée et pensée par un étudiant en médecine, 
                    cette plateforme regroupe l’outil nécessaire pour suivre votre avancement dans vos révisions pour préparer au 
                    mieux ce concours sanctionnant la fin des études du second cycle.
                    <br>Retrouvez un suivi par module, ainsi que par item, pour savoir où vous en êtes exactement dans vos révisions.
                    <br>Essayez notre plateforme pour la découvrir avant de vous inscrire pour vous faire une première idée.
                </p>
                <img class="my-4" src="https://jadeveloppement.fr/wp-content/uploads/2023/04/Capture-decran-du-2023-04-26-21-35-10.png" alt="">
                <button type="button" class="btn text-white my-8 do-login" style="background-color: #28a745;" >Connexion</button>
            </div>

            <div class="login hidden">
                <h4 class="text-demo-green text-center">Connexion</h4>

                <div class="form-floating mb-3">
                    <input type="login" class="form-control" id="login" placeholder="Nom d'utilisateur">
                    <label for="login">Nom d'utilisateur</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="password" class="form-control" id="pwd" placeholder="Mot de passe">
                    <label for="pwd">Mot de passe</label>
                </div>
                <a href="#" class="text-sm italic text-center">Pas encore inscrit ? Cliquez ici pour vous créer un compte.</a>
                <span class="italic text-sm text-center">Utilisez les identifiant et mot de passe suivant : demo demo</span>

                <button type="button" class="btn text-white mt-4 do-signin" style="background-color: #28a745;" >Connexion</button>
                <button type="button" class="btn btn-secondary text-white mt-4 do-cancel">Annuler</button>
            </div>
        </div>

        <footer>
            <a href="/"><img src="https://jadeveloppement.fr/wp-content/uploads/2023/01/jadeveloppement-favicon.png" alt=""></a>
            <span>Développé par <a href="/"><b>JADeveloppement</b></a></span>
        </footer>

        <script type="text/javascript" src="{{ asset('js/democrite/app_index.js') }}" ></script>
    </body>
</html> 