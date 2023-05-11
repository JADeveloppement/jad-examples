@php
    $img_pro = ["https://jadeveloppement.fr/wp-content/uploads/2023/05/Capture-decran-du-2023-05-04-03-29-52.png",
    "https://jadeveloppement.fr/wp-content/uploads/2023/05/Capture-decran-du-2023-05-04-03-46-11.png",
    "https://jadeveloppement.fr/wp-content/uploads/2023/05/Capture-decran-du-2023-05-04-03-34-36.png",
    "https://jadeveloppement.fr/wp-content/uploads/2023/05/Capture-decran-du-2023-05-04-03-41-29.png",
    "https://jadeveloppement.fr/wp-content/uploads/2023/05/Capture-decran-du-2023-05-04-03-44-22.png",
    "https://jadeveloppement.fr/wp-content/uploads/2023/04/Capture-decran-du-2023-04-26-21-35-10.png",
    "https://jadeveloppement.fr/wp-content/uploads/2023/05/Capture-decran-du-2023-05-10-01-57-54.png"];

    $nom_pro = ["JADeveloppement",
    "InnerSens",
    "ArthurIvan",
    "Twitch",
    "ArtDesignAgencement",
    "Démocrite",
    "Conférence Fatih"];

    $url_pro = [
        "/",
        "https://jeremyvalance.fr",
        "https://arthurivan.com",
        "https://jadeveloppement.fr/index.php/twitch/",
        "https://jadeveloppement.fr/index.php/artdesignagencement/",
        "https://jadeveloppement.fr/jad-examples/democrite/",
        "https://www.figma.com/file/QM1UdZWCA05HujJwhP4Vk5/Conf%C3%A9rence-FATIH?type=design&node-id=1%3A2&t=VJZVuqg2kLWDY2OT-1"]

@endphp
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
            <div class="profil-container">
                <h2 class="text-white text-center">Qui suis-je ?</h2>
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
                </div>
            </div>
            <div class="w-full h-[75px]"></div>
            <h2 class="text-white text-center">Mes projets</h2>
            <div class="w-full text-center text-white flex justify-center p-4 items-center">
                <p class="w-[500px] font-bold">
                    Ici, retrouvez mes projets finis ou en cours de travaux dont j'ai eu la charge de développement (front-end et backend).
                </p>
            </div>
            <div class="travaux-container">
                <i class="bi bi-caret-right-fill cursor-pointer next-pro"></i>
                <i class="bi bi-caret-left-fill opacity-50 prev-pro"></i>
                @for($i = 0; $i < count($nom_pro); $i++)
                    <div class="carre-container" target="{{ $i }}" style="flex: 1 0 auto;">
                        <div class="carre">
                            <img src="{{ $img_pro[$i] }}" alt="">
                            <div class="description">
                                <h2>{{ $nom_pro[$i] }}</h2>
                                <p>
                                    @include('pro-description.pro'.$i)
                                </p>
                                <a href="{{ $url_pro[$i] }}" class="text-white no-underline w-full flex items-center justify-center" target="_blank"><button class="btn btn-warning w-[85%] m-4 text-white">Visiter</button></a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </section>

        @include("sections.footers")
        <script src="{{ mix('js/app.js') }}"></script>
    </body>
</html>
