<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Twitch</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=ubuntu:400,600&display=swap" rel="stylesheet" />

        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

        <!-- CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ mix('css/twitch/app_index.css') }}">
        
    </head>
    <body>
        <div class="loading">
            <img class="" src="https://jadeveloppement.fr/wp-content/uploads/2023/02/loading.gif" alt="">
            <p class="text-2xl italic">Chargement en cours...</p>
            <span class="waiting animate-pulse italic text-sm my-4 transition-all opacity-0">Cela peut prendre un certain temps si c'est la première fois que vous vous connectez.</span>
        </div>

        <header>
            <div class="left">
                <img src="https://jadeveloppement.fr/wp-content/uploads/2023/02/btt.png" alt="">
                <h1>Bob Tahiti</h1>
            </div>
            <div class="right">
                <div class="status">
                    <li class="bi bi-circle mx-2"></li>
                </div>
            </div>
        </header>
        <section>
            <img src="https://jadeveloppement.fr/wp-content/uploads/2023/02/BeneficialImaginativeCurlew-size_restricted.gif" alt="">
            <div class="jadtwitch-container">
                <div id="twitch-embed"></div>
            </div>
        </section>
        <section>
            <h1>Ma dernière vidéo</h1>
            
            <div class="jadyoutube-container">
                <iframe class="latestVideoEmbed" vnum='0' cid="UCVjS9N-Ao9rM-PCS7m7BAzQ" width="600" height="340" frameborder="0" allowfullscreen></iframe>
            </div>
        </section>
        <div class="socials">
            <a href="https://twitter.com/bobtighttea" target="_blank"><i class="bi bi-twitter"></i></a>
            <a href="https://www.youtube.com/channel/UCVjS9N-Ao9rM-PCS7m7BAzQ" target="_blank"><i class="bi bi-youtube"></i></a>
            <a href="https://twitch.tv/bobtighttea" target="_blank"><i class="bi bi-twitch"></i></a>
        </div>
        <footer>
            <img src="https://jadeveloppement.fr/wp-content/uploads/2023/01/jadeveloppement-favicon.png" alt="">
            <p>Développé par <a href="/"><b>JADeveloppement</b></a></p>
        </footer>

        <script src="https://embed.twitch.tv/embed/v1.js"></script>
        <script src="{{ mix('js/twitch/app_index.js') }}"></script>
    </body>
</html>