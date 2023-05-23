@php
    use App\Models\User;

    if (!Cookie::has('democrite_id')) redirect("/democrite");
    else {
        $login = Cookie::get('democrite_id');
        $user_bdd = new User;

        $infos = $user_bdd->where('login', $login)->first();

        $nom = $infos->nom;
        $prenom = $infos->prenom;
        $email = $infos->email;
        $telephone = $infos->telephone;
        $ville = $infos->ville;
        $promotion = $infos->promotion;
        $avancement = $infos->avancement;

        $total_reread = 0;
        for ($i = 0; $i < strlen($avancement); $i++)
            if (intval(mb_substr($avancement, $i, 1)) > 0)
                $total_reread++;

        $nb_item = 0;

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
                        config("democrite_values.module_11")];
    }
    
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
        <div class="alert-reset-container top-[-100vh]">
            <div class="alert-reset">
                <h2 class="mb-4">Confirmer</h2>
                <p>Êtes-vous sûr de vouloir réinitialiser votre progression ?
                    <br> Ces changements seront irréversibles.</p>
                <div class="alert-confirm">
                    <button class="btn btn-danger shadow-lg m-4 confirm-reset">Oui</button>
                    <button class="btn btn-secondary shadow-lg cancel-reset">Non</button>
                </div>
            </div>
        </div>
        <div class="header">
            <div class="left">
                <img src="{{asset('storage/02/logo-sans-fond.png')}}" alt="">
                Révisions ECN
            </div>
            <div class="right">
                <i class="do-modules bi bi-card-checklist mr-4 menu-active"></i>
                <i class="do-profil bi bi-person-circle mr-4"></i>
                <i class="log-out bi bi-power"></i>
            </div>
        </div>
        <div class="content">
            <div class="global-progress-container animate-pulse">
                <h4>Progression générale</h4>
                <div class="bar-progress-container mt-4">
                    <div class="bar-progress-color bg-slate-300" data-color=""></div>
                    <span class="indicator" data-item="{{$total_reread}}">{{$total_reread}}/{{ strlen($avancement) }}</span>
                </div>
            </div>
            <hr>
            <h4>Progression par module</h4>
            <div class="modules-container animate-pulse">
                @for($a = 0; $a < count($liste_modules); $a++)
                    @include("democrite.module-grid")
                @endfor
            </div>
            <hr>
            <div class="titre-module-item relative animate-pulse">
                Module 1 - Apprentissage de l'exercice médical
            </div>
            @for($i = 0; $i < count($liste_modules); $i++)
                <div class="items-container hidden" data-target="module{{ $i+1 }}">
                    @for($item = 0; $item < count($liste_items[$i]); $item++, $nb_item++)
                        <div class="item conteneur" numero="{{ $nb_item }}">
                            <div class="left">
                                {{ $liste_items[$i][$item] }}
                            </div>
                            <div class="right">
                                <div class="bi bi-plus-lg" data-item="{{$nb_item}}"></div>
                                <input type="text" data-item="{{$nb_item}}" value="{{$avancement[$nb_item]}}">
                                <div class="bi bi-dash-lg" data-item="{{$nb_item}}"></div>
                            </div>
                        </div>
                    @endfor
                </div>
            @endfor
            <div class="progression-fixed animate-pulse bottom-[-100vh]">
                <i class="bi bi-trophy-fill text-3xl"></i>
                <div class="pf-container">
                    <div class="pf-bar bg-slate-300" data-color=""></div>
                    <span class="indicator" data-item="{{$total_reread}}">{{$total_reread}}/{{ strlen($avancement) }}</span>
                </div>
            </div>
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
                    <input type="name" class="form-control" id="promotion" placeholder="Promotion" value="{{$ville}}" disabled>
                    <label for="promotion">Votre promotion</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="name" class="form-control" id="ville" placeholder="Ville" value="{{$promotion}}" disabled>
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
            <h4>Réinitialiser votre progression</h4>
            <button type="button" class="btn reset-pro btn-danger">Réinitialiser</button>

            <hr>
            <h4>Votre abonnement</h4>
            <button type="button" class="btn btn-success" disabled>Abonné.e pour 2023/2024</button>
        </div>

        <footer>
            <a href="/"><img src="{{asset('storage/01/favicon_white.png')}}" alt=""></a>
            <span>Développé par <a href="/"><b>JADeveloppement</b></a></span>
        </footer>
        <script src="{{ asset('js/democrite/app_profil.js') }}" ></script>
    </body>
</html>