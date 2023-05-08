<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        @include("sections.head")
    </head>
    <body class="antialiased">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <div class="background">
            <img src="https://jadeveloppement.fr/wp-content/uploads/2023/01/html-color-codes-color-tutorials-hero-scaled.jpg" alt="">
        </div>
        @include("sections.header");

        <section>
            <h2 class="text-white">Qui suis-je ?</h2>
            <div class="profil">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/02/profil.jpg" alt="">
                <div class="right">
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

        @include("sections.footers")
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
