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
                <h1>Bob Tahiti</h1>
            </div>
            <div class="right">
                <p>Hors ligne</p>
            </div>
        </header>
        <section>

        </section>
        <footer>

        </footer>

        <div style="width: 100%; display: flex; align-items: center; justify-content: center;">
            <div id="twitch-embed"></div>
        </div>
        <script src="{{ mix('js/twitch/app_index.js') }}"></script>
    </body>
</html>