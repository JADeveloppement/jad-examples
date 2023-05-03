<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        
        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-pdIs13zgsU97G1U6/CLw6hPZ8FrP+oNzA6n1ddBNQzW8T1egcQ+ZRBrRwvbHkZr8" crossorigin="anonymous"></script>
        <div class="background">
            <img src="https://jadeveloppement.fr/wp-content/uploads/2023/01/html-color-codes-color-tutorials-hero-scaled.jpg" alt="">
        </div>
        <header>
            <div class="left">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/01/jadeveloppement-favicon-black.png" alt="">
                <h2>JADeveloppement</h2>
            </div>
            <div class="right">
                <a href="">Accueil</a>
                <a href="">Cursus & Travaux</a>
                <a href="">Contact</a>
            </div>
            <div class="right mobile">
                <a href="">Accueil</a>
                <a href="">Cursus & Travaux</a>
                <a href="">Contact</a>
            </div>
        </header>

        <section>
            <h2 class="text-white">Mes différents travaux</h2>
        </section>

        <section>
            <h2>Exigez la qualité</h2>
            <div class="separator"></div>
            <p class="text-center w-[650px] text-lg">
                Depuis <span class="important">2015</span>, je travaille en étroite collaboration avec mes différents clients pour proposer un contenu qui leur ressemble, et qui leur convient car la <span class="important">communication</span> est un outil clé pour réussir tout projet.
                <br>
                <span class="important">Autodidacte</span> depuis 2012, j’ai su m’adapter avec les demandes et l’évolution des technologies que j’ai appris à maîtriser grâce à une <span class="important">diversité d’exercice</span> tout au long de ma formation (application mobile, web, solution logicielles, etc).
            </p>
            <div class="separator"></div>
            <p class="text-orange-400 w-[650px] zoom-on-hover text-lg important text-center">
                Travailler avec moi, c’est s’assurer un travail fait minutieusement et professionnellement.
            </p>
        </section>
        <section>
            <h2 class="text-center text-white">Mes compétences</h2>
            <div class="competences">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/03/html5.png" alt="">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/03/1452px-CSS3_logo_and_wordmark.svg_.png" alt="">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/03/JavaScript-logo.png" alt="">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/02/image.png" alt="">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/03/5968313.png" alt="">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/03/1200px-Laravel.svg_.png" alt="">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/03/Vue.js_Logo_2.svg_.png" alt="">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/04/Tailwind_CSS_Logo.svg_.png" alt="">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/03/1280px-Sass_Logo_Color.svg_.png" alt="">
            </div>
            <div class="separator"></div>
            <h2 class="text-center text-white">Mon environnement technique</h2>
            <div class="competences">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/04/Linux_Logo_in_Linux_Libertine_Font.svg_.png" alt="">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/04/visual-studio-code-1.png" alt="">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/04/GitHub-Mark.png" alt="">
            </div>
        </section>
        <section>
                <h2>N'hésitez pas et contactez moi</h2>
                <div class="separator"></div>
                <div class="news-container">
                    <div class="form-floating mr-3">
                        <input type="email" class="form-control shadow-sm" id="email" placeholder="name@example.com">
                        <label for="email" >Email address</label>
                    </div>
                    <select class="form-select shadow-sm" id="floatingSelect" aria-label="">
                        <option value="0">Objet de votre demande</option>
                        <option value="1">Création de site web</option>
                        <option value="2">Solution graphique</option>
                        <option value="3">Mis à jour d'un site web</option>
                        <option value="4">Autre demande</option>
                    </select>
                    <button type="button" class="btn btn-warning text-white shadow-sm">Envoyer</button>
                </div>
        </section>

        <footer>
            <div class="left">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/01/jadeveloppement-favicon-black.png" alt="">
                <span>Copyright 2023</span>
            </div>
            <div class="right">
                <a href="">Confidentialité</a>
                <a href="">Mentions légales</a>
            </div>
        </footer>
    </body>
</html>
