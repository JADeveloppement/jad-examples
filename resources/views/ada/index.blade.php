@php
    $logo = asset("storage/04/logo-300x300.png");
@endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Art Design Agencement</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ mix('css/ada/app_index.css') }}">
    </head>
    <body>
        <header>
            <a href="/ada">
                <div class="left">
                    <img src="{{ $logo }}" alt="">
                    <h2>Art Design & Agencement</h2>
                </div>
            </a>
            <div class="right">
                <button class="btn btn-lg bg-blue-700 text-white ttransition-color shadow-lg hover:bg-blue-900 contact-me">Contactez-moi</button>
            </div>
        </header>
        <div class="cover">
            <img src="{{ asset('storage/04/Designer-interieur.jpg')}}" alt="">
        </div>
        <section class='overflow-hidden'>
            <div class="carte accueil flex min-h-fit">
                <img src="{{ $logo }}" alt="">
                <h2>Yaël Hollander – Décoratrice d’intérieur et créatrice d’ambiance</h2>
                <p>
                    Passionnée de décoration intérieure, dynamique et sérieuse, je mets ma créativité, mon inspiration et mon expérience à votre 
                    écoute, afin de concevoir des espaces uniques adaptés à vos besoins, vos goûts, votre personnalité, votre mode de vie et 
                    votre budget. Je joue avec les couleurs, les volumes, la lumière, le mobilier et les matériaux pour rendre un espace unique.
                </p>
                <p>
                    Ma mission : Vous accompagner et vous conseiller pour réaliser votre projet, en vous proposant des solutions adaptées et 
                    personnalisées. Traduire vos envies et vous aider à les concrétiser, créer des ambiances et des lieux optimisés, fonctionnels, 
                    agréables et qui vous ressemblent, tout en respectant votre budget, pour l’aménagement et la décoration de vos espaces privés 
                    ou professionnels.
                </p>

                <div class="carousel-examples">
                    <img src="{{asset('storage/04/img1-1-scaled.jpg')}}" alt="">
                    <img src="{{asset('storage/04/img3-1.jpg')}}" alt="">
                    <img src="{{asset('storage/04/img2-1-scaled.jpg')}}" alt="">
                    <img src="{{asset('storage/04/img5.png')}}" alt="">
                    <img src="{{asset('storage/04/img4-scaled.jpg')}}" alt="">
                </div>

                <button class="btn btn-lg bg-blue-700 text-white ttransition-color shadow-lg contact-me hover:bg-blue-900">Contactez-moi</button>
            </div>

            <div class="carte contact hidden opacity-0">
                <h2>Formulaire de contact</h2>
                <span class="mt-4 text-sm italic w-full">
                    Remplissez ce formulaire pour me décrire votre projet, je reviendrais vers vous très rapidement pour en 
                    discuter plus en détail.
                </span>
                <div class="flex w-full items-center justify-center mt-8">
                    <div class="form-floating mr-4 flex-1">
                        <input type="name" class="form-control" id="nom" placeholder="name@example.com">
                        <label for="nom">Nom</label>
                    </div>

                    <div class="form-floating flex-1">
                        <input type="name" class="form-control" id="prenom" placeholder="name@example.com">
                        <label for="prenom">Prénom</label>
                    </div>
                </div>

                <div class="flex w-full items-center justify-center mt-8">
                    <div class="form-floating mr-4 flex-1">
                        <input type="email" class="form-control" id="email" placeholder="name@example.com">
                        <label for="email">E-mail</label>
                    </div>

                    <div class="form-floating flex-1">
                        <input type="telephone" class="form-control" id="telephone" placeholder="name@example.com">
                        <label for="telephone">Téléphone</label>
                    </div>
                </div>

                <div class="w-full flex justify-start mt-8">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="nottelephoneme">
                        <label class="form-check-label" for="nottelephoneme">
                            Ne pas me contacter par téléphone
                        </label>
                    </div>
                </div>

                <div class="form-floating w-full mt-8">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Décrivez-moi votre projet </label>
                </div>

                <div class="w-full flex justify-start">
                    <button class="btn bg-blue-700 text-white mt-8 hover:bg-blue-900 contact-me" data-toggle="send-mail">Envoyer</button>
                </div>
            </div>
        </section>
        <footer>
            <a href="/"><img src="{{asset('storage/01/favicon_white.png')}}" alt=""></a>
            <span>Développé par <a href="/"><b>JADeveloppement</b></a></span>
        </footer>
        <script src="{{ mix('js/ada/app_index.js') }}"></script>
    </body>
</html>