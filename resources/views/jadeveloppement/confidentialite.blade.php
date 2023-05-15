<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="{{ mix('css/jadeveloppement/app_conf.css') }}">
        @include("jadeveloppement.sections.head")
        @include("jadeveloppement.sections.poppinsfont")
    </head>
    <body class="antialiased">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        @include("jadeveloppement.sections.header")

        <style>
            hr {
                opacity: 1;
                border-top: 2px solid #fff;
                width: 100px;
                margin: 3rem;
            }
        </style>
        <section class="content">
            <h1 class="text-[3.25rem] w-[75%]">Politique de confidentialité</h1>
            <div class="politique-container">
                <h2>Qui sommes-nous ?</h2>
                <ul>
                    <li>AISSAOUI Jalal</li>
                    <li><a href="mailto:contact@jadeveloppement.fr">contact@jadeveloppement.fr</a></li>
                    <li>https://jadeveloppement.fr</li>
                </ul>
                <hr>
                <h2>Commentaires</h2>
                <p>
                    Quand vous laissez un commentaire sur notre site, les données inscrites dans le formulaire de commentaire, mais aussi votre 
                    adresse IP et l’agent utilisateur de votre navigateur sont collectés pour nous aider à la détection des commentaires indésirables. 
                    Une chaîne anonymisée créée à partir de votre adresse e-mail (également appelée hash) peut être envoyée au service Gravatar pour 
                    vérifier si vous utilisez ce dernier. Les clauses de confidentialité du service Gravatar sont disponibles ici : 
                        https://automattic.com/privacy/. Après validation de votre commentaire, votre photo de profil sera visible publiquement à côté 
                        de votre commentaire.
                </p>
                <hr>
                <h2>Médias</h2>
                <p>
                    Si vous téléversez des images sur le site, nous vous conseillons d’éviter de téléverser des images contenant des données EXIF 
                    de coordonnées GPS. Les personnes visitant votre site peuvent télécharger et extraire des données de localisation depuis ces images.
                </p>
                <hr>
                <h2>Formulaires de contact</h2>
                <p>
                    Dans le formulaire de contact, nous serons amenés à vous demander vos Nom, Prénom, E-mail et numéro de téléphone dans le cas 
                    où vous cochez la case correspondante, pour pouvoir vous contacter en retour.
                    <br>
                    Ces données seront exploitées dans un but unique de contact et ne seront pas redistribuées, même en partie, à un tiers autre 
                    que JADeveloppement.
                </p>
                <hr>
                <h2>Cookies</h2>
                <p>
                    Si vous déposez un commentaire sur notre site, il vous sera proposé d’enregistrer votre nom, adresse e-mail et site dans des 
                    cookies. C’est uniquement pour votre confort afin de ne pas avoir à saisir ces informations si vous déposez un autre 
                    commentaire plus tard. Ces cookies expirent au bout d’un an. Si vous vous rendez sur la page de connexion, un cookie temporaire 
                    sera créé afin de déterminer si votre navigateur accepte les cookies. Il ne contient pas de données personnelles et sera 
                    supprimé automatiquement à la fermeture de votre navigateur. Lorsque vous vous connecterez, nous mettrons en place un certain 
                    nombre de cookies pour enregistrer vos informations de connexion et vos préférences d’écran. La durée de vie d’un cookie de 
                    connexion est de deux jours, celle d’un cookie d’option d’écran est d’un an. Si vous cochez « Se souvenir de moi », votre cookie 
                    de connexion sera conservé pendant deux semaines. Si vous vous déconnectez de votre compte, le cookie de connexion sera effacé. 
                    En modifiant ou en publiant une publication, un cookie supplémentaire sera enregistré dans votre navigateur. Ce cookie ne 
                    comprend aucune donnée personnelle. Il indique simplement l’ID de la publication que vous venez de modifier. Il expire au bout 
                    d’un jour.
                </p>
                <hr>
                <h2>Contenu embarqué depuis d’autres sites</h2>
                <p>
                    Les articles de ce site peuvent inclure des contenus intégrés (par exemple des vidéos, images, articles…). Le contenu 
                    intégré depuis d’autres sites se comporte de la même manière que si le visiteur se rendait sur cet autre site. Ces sites 
                    web pourraient collecter des données sur vous, utiliser des cookies, embarquer des outils de suivis tiers, suivre vos 
                    interactions avec ces contenus embarqués si vous disposez d’un compte connecté sur leur site web.
                </p>
                <hr>
                <h2>Utilisation et transmission de vos données personnelles</h2>
                <p>
                    Si vous demandez une réinitialisation de votre mot de passe, votre adresse IP sera incluse dans l’e-mail de 
                    réinitialisation. Les commentaires des visiteurs peuvent être vérifiés à l’aide d’un service automatisé de détection 
                    des commentaires indésirables.
                </p>
                <hr>
                <h2>Durées de stockage de vos données</h2>
                <p>
                    Si vous laissez un commentaire, le commentaire et ses métadonnées sont conservés indéfiniment. Cela permet de 
                    reconnaître et approuver automatiquement les commentaires suivants au lieu de les laisser dans la file de modération. 
                    Pour les comptes qui s’inscrivent sur notre site (le cas échéant), nous stockons également les données personnelles 
                    indiquées dans leur profil. Tous les comptes peuvent voir, modifier ou supprimer leurs informations personnelles à 
                    tout moment (à l’exception de leur identifiant). Les gestionnaires du site peuvent aussi voir et modifier ces informations.
                </p>
                <hr>
                <h2>Les droits que vous avez sur vos données</h2>
                <p>
                    Si vous avez un compte ou si vous avez laissé des commentaires sur le site, vous pouvez demander à recevoir un 
                    fichier contenant toutes les données personnelles que nous possédons à votre sujet, incluant celles que vous nous 
                    avez fournies. Vous pouvez également demander la suppression des données personnelles vous concernant. Cela ne 
                    prend pas en compte les données stockées à des fins administratives, légales ou pour des raisons de sécurité.
                </p>
            </div>
        </section>
        
        @include("jadeveloppement.sections.footers")

        <script>
            let loadingScreen = document.querySelector(".loading"); 
            loadingScreen.setAttribute("style", "opacity: 0; z-index: -999");
        </script>
    </body>
</html>