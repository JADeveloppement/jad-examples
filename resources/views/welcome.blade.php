<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ env('APP_NAME') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
        
        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    </head>
    <body class="antialiased">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
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
        </header>

        <section>
            <h2 class="text-white">Qui suis-je ?</h2>
            <div class="profil">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/02/profil.jpg" alt="">
                <div id="myDiv" class="right" data-role="page">
                    <div class="part1">
                        <p>
                        Étudiant en médecine de formation depuis Septembre 2013, j’ai validé avec brio une première année en <important>Mathématiques et 
                        Informatique</important> à la Faculté des Sciences et Techniques de Mulhouse en Juin 2013.
                        <br>
                        <br>Mon intérêt pour l’informatique a débuté en 2010 où je me passionnais dans la cybersécurité dans <important>la recherche de 
                        failles dans les structures webs</important> et prévenir les webmasters de celles-ci pour ensuite me former dans l’apprentissage 
                        du langage C. Le <important>siteduzero</important> (développé par M@théo21 pour ceux qui l’ont connu) a été une mine d’or d’information pour 
                        toutes mes connaissances jusqu’aujourd’hui encore.
                        </p>
                    </div>

                    <div class="part2">
                        <p>
                        Par la suite, je me suis intéressé au <important>Java pour le développement de solutions mobiles Android</important> entre 2012 et 2016 
                        pour le compte d’association d’étudiants et d’une entreprise de formation pour étudiants en médecine. Parallèlement, j’ai débuté mon apprentissage 
                        dans le développement web en apprenant le balisage <important>HTML</important>, <important>XML</important>, puis l’édition des feuilles 
                        de styles en <important>CSS</important>, ainsi que <important>Javascript (et Jquery)</important> et <important>PHP</important>.
                        </p>
                    </div>

                    <div class="part3">
                        <p>
                        L’apprentissage du langage web m’a plongé aussi dans <important>MySQL</important> et le développement de serveurs webs privés pour faire mon propre espace de 
                        stockage cloud hébergé à domicile et accessible depuis une application Android développée par mes soins.
                        <br>
                        J’ai un attrait particulier pour le <important>back-end</important> dans le développement web, même si je reste très polyvalent et sais <important>adapter mes capacités</important> pour répondre aux besoins du client.
                        </p>
                    </div>

                    <div class="part4 text-left">
                        <p>
                            Les langages que j’ai ainsi appris sont les suivants :
                            <br>
                            <ul>
                                <li><important>C, C++, Assembleur, Python</important> : développement de programmes sous Windows pour automatiser des tâches et découvrir la portée de ces langages et ce qu’il est possible de faire</li>
                                <li><important>Java/XML </important>: développement d’applications sur Android</li>
                                <li><important>HTML/CSS</important> : développement de site web interne pour le compte d’association d’étudiants</li>
                                <li><important>Javascript/Jquery</important> : pour dynamiser les sites web</li>
                                <li><important>PHP</important> : parce qu’il faut bien communiquer avec le serveur, pour être correctement servi.</li>
                                <li><important>Laravel, VueJS, Tailwind </important>: pour se simplifier la vie</li>
                                <li><important>MySQL</important>: qui dit site web, dit base de données bien entendu</li>
                            </ul>
                        </p>
                    </div>

                    <div class="progress-profil"></div>

                    <div class="navigator text-[0.5rem] text-orange-500">
                        <i class="bi bi-circle-fill" data-nav data="part1"></i>
                        <i class="bi bi-circle" data-nav data="part2"></i>
                        <i class="bi bi-circle" data-nav data="part3"></i>
                        <i class="bi bi-circle" data-nav data="part4"></i>
                    </div>
                </div>
                <script>
                    
                </script>
            </div>
            <h2 class="text-white">Mes différents travaux</h2>
            <div class="travaux-container">
                
                <!-- JADeveloppement -->
                <div class="travaux">
                    <img src="https://jadeveloppement.fr/wp-content/uploads/2023/05/Capture-decran-du-2023-05-04-03-29-52.png" alt="">
                    <div class="description">
                        <p>
                            Site web vitrine personnel.
                            <br>
                            <br><i>CMS : Wordpress</i>
                            <br><i>Frameworks: Laravel, VueJS, Tailwind-CSS</i>
                            <br>
                        </p>
                        <a href="" target="_blank"><button class="btn btn-warning" disabled>Vous y êtes</button></a>
                    </div>
                    <div class="details">
                        <h2>JADeveloppement</h2>
                    </div>
                </div>

                <!-- InnerSens -->
                <div class="travaux">
                    <img src="https://jadeveloppement.fr/wp-content/uploads/2023/05/Capture-decran-du-2023-05-04-03-46-11.png" alt="">
                    <div class="description">
                        <p>
                            Site web vitrine.
                            <br>
                            <br><i>CMS : Wordpress</i>
                            <br><i>Langages utilisés : HTML, CSS, jQuery</i>
                            <br>
                        </p>
                        <a href="https://jeremyvalance.fr" target="_blank"><button class="btn btn-warning">Visiter</button></a>
                    </div>
                    <div class="details">
                        <h2>InnerSens</h2>
                    </div>
                </div>

                <!-- Arthur Ivan -->
                <div class="travaux">
                    <img src="https://jadeveloppement.fr/wp-content/uploads/2023/05/Capture-decran-du-2023-05-04-03-34-36.png" alt="">
                    <div class="description">
                        <p>
                            Site web vitrine avec espace client, système de paiement en ligne, gestion de RDV.
                            <br>
                            <br><i>CMS : Wordpress</i>
                            <br><i>Frameworks: Laravel, VueJS, Tailwind-CSS</i>
                            <br>
                        </p>
                        <a href="https://arthurivan.com" target="_blank"><button class="btn btn-warning">Visiter</button></a>
                    </div>
                    <div class="details">
                        <h2>FRBG</h2>
                    </div>
                </div>

                <!-- Twitch -->
                <div class="travaux">
                    <img src="https://jadeveloppement.fr/wp-content/uploads/2023/05/Capture-decran-du-2023-05-04-03-41-29.png" alt="">
                    <div class="description">
                        <p>
                            Landing page. API Twitch, Youtube
                            <br>
                            <br><i>CMS : Wordpress</i>
                            <br><i>Langages : HTML, CSS, jQuery</i>
                            <br>
                        </p>
                        <a href="https://jadeveloppement.fr/index.php/twitch/" target="_blank"><button class="btn btn-warning">Visiter</button></a>
                    </div>
                    <div class="details">
                        <h2>Twitch</h2>
                    </div>
                </div>

                <!-- Artdesignagencement -->
                <div class="travaux">
                    <img src="https://jadeveloppement.fr/wp-content/uploads/2023/05/Capture-decran-du-2023-05-04-03-44-22.png" alt="">
                    <div class="description">
                        <p>
                            Site web vitrine.
                            <br>
                            <br><i>CMS : Wordpress</i>
                            <br>
                        </p>
                        <a href="https://jadeveloppement.fr/index.php/artdesignagencement/" target="_blank"><button class="btn btn-warning">Visiter</button></a>
                    </div>
                    <div class="details">
                        <h2>ArtDesignAgencement</h2>
                    </div>
                </div>

                <!-- Démocrite -->
                <div class="travaux">
                    <img src="https://jadeveloppement.fr/wp-content/uploads/2023/04/Capture-decran-du-2023-04-26-21-35-10.png" alt="">
                    <div class="description">
                        <p>
                            Site web vitrine avec espace client, système de paiement en ligne, suivi de révision
                            <br>
                            <br><i>Langages : PHP, HTML, CSS, jQuery, MySQL</i>
                            <br><i>Frameworks: Laravel, Tailwind-CSS</i>
                            <br>
                        </p>
                        <a href="https://jadeveloppement.fr/jad-examples/democrite/" target="_blank"><button class="btn btn-warning">Visiter</button></a>
                    </div>
                    <div class="details">
                        <h2>Démocrite</h2>
                    </div>
                </div>

            </div>
        </section>

        <section>
            <h2>Exigez la qualité</h2>
            <div class="separator"></div>
            <p class="text-center max-w-[650px] text-lg">
                Depuis <span class="important">2015</span>, je travaille en étroite collaboration avec mes différents clients pour proposer un contenu qui leur ressemble, et qui leur convient car la <span class="important">communication</span> est un outil clé pour réussir tout projet.
                <br>
                <span class="important">Autodidacte</span> depuis 2012, j’ai su m’adapter avec les demandes et l’évolution des technologies que j’ai appris à maîtriser grâce à une <span class="important">diversité d’exercice</span> tout au long de ma formation (application mobile, web, solution logicielles, etc).
            </p>
            <div class="separator"></div>
            <p class="text-orange-400 max-w-[650px] zoom-on-hover text-lg important text-center">
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
                <h2 class="text-center">N'hésitez pas et contactez moi</h2>
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
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
