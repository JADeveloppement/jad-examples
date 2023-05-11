@php
    if (!Cookie::has('democrite_id')) redirect("/democrite");

    $liste_modules = config("democrite_values.modules");
    $liste_items = [config("democrite_values.module_1"),
                    config("democrite_values.module_2"),
                    config("democrite_values.module_3"),
                    config("democrite_values.module_4"),
                    config("democrite_values.module_5"),
                    config("democrite_values.module_6"),
                    config("democrite_values.module_7"),
                    config("democrite_values.module_8"),
                    config("democrite_values.module_9"),
                    config("democrite_values.module_10"),
                    config("democrite_values.module_11")]
    
@endphp
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
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin=''>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=alef:400,600&display=swap" rel="stylesheet" />
        
        <link rel="stylesheet" href="{{ asset('css/democrite/app_profil.css') }}">

        <!-- BOOTSTRAP AND ICONS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    </head>
    <body class="antialiased">
        <div class="header">
            <div class="left">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/02/logo-sans-fond.png" alt="">
                Révisions ECN
            </div>
            <div class="right">
                <i class="do-modules bi bi-card-checklist mr-4 menu-active"></i>
                <i class="do-profil bi bi-person-circle mr-4"></i>
                <i class="log-out bi bi-power"></i>
            </div>
        </div>
        <div class="content">
            <div class="global-progress-container">
                <h4>Progression générale</h4>
                <div class="bar-progress-container mt-4">
                    <div class="bar-progress-color"></div>
                    <span class="indicator">0/360</span>
                </div>
            </div>
            <hr>
            <h4>Progression par module</h4>
            <div class="modules-container">
                @for($a = 0; $a < count($liste_modules); $a++)
                    @include("democrite.module-grid")
                @endfor
            </div>
            <hr>
            <div class="titre-module-item">
                Module 1 - De la conception à la naissance
            </div>
            <span class="italic text-sm">Pour des raisons de praticité, les fonctionnalités ont été désactivées.</span>
            @for($i = 0; $i < count($liste_modules); $i++)
                <div class="items-container hidden" data-target="module{{ $i+1 }}">
                    @for($item = 0; $item < count($liste_items[$i]); $item++)
                        <div class="item">
                            <div class="left">
                                {{ $liste_items[$i][$item] }}
                            </div>
                            <div class="right">
                                <div class="bi bi-plus-lg"></div>
                                <input type="text" value="0">
                                <div class="bi bi-dash-lg"></div>
                            </div>
                        </div>
                    @endfor
                </div>
            @endfor
        </div>
        <div class="profil hidden">
            <h4>Vos informations générales</h4>
            <div class="grid grid-cols-2 gap-2">
                <div class="form-floating mb-3">
                    <input type="name" class="form-control" id="nom" placeholder="Nom de famille" value="{{ $nom }}" disabled>
                    <label for="nom">Nom de famille</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="name" class="form-control" id="prenom" placeholder="Prénom" value="{{ $prenom }}" disabled>
                    <label for="prenom">Prénom</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="email" placeholder="E-mail" value="{{ $email }}" disabled>
                    <label for="email">E-mail</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="telephone" class="form-control" id="telephone" placeholder="Numéro de téléphone" value="{{ $telephone }}" disabled>
                    <label for="prenom">Numéro de téléphone</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="name" class="form-control" id="promotion" placeholder="Promotion" disabled>
                    <label for="promotion">Votre promotion</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="name" class="form-control" id="ville" placeholder="Ville" disabled>
                    <label for="ville">Votre ville</label>
                </div>
            </div>
            
            <hr>
            <h4>Changer de mot de passe</h4>
            <span class="italic text-sm">Laissez vide si vous ne souhaitez pas modifier</span>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="oldpwd" placeholder="Ancien mot de passe">
                <label for="oldpwd">Ancien mot de passe</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="newpwd" placeholder="Nouveau mot de passe">
                <label for="newpwd">Nouveau mot de passe</label>
            </div>

            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="pwd_confirm" placeholder="Confirmation mot de passe">
                <label for="pwd_confirm">Confirmation mot de passe</label>
            </div>

            <hr>
            <h4>Votre abonnement</h4>
            <button type="button" class="btn btn-success" disabled>Abonné.e pour 2023/2024</button>

            <hr>
            <button type="button" class="btn log-out btn-danger">Déconnexion</button>
        </div>

        <div class="footer">Fièrement développé par <b>JADeveloppement</b></div>
        <script src="{{ asset('js/democrite/app_profil.js') }}" ></script>
    </body>
</html>