<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
        <title>Document</title>
    </head>
    <body style="padding: 0; margin: 0; font-family: 'ubuntu'; overflow-x: hidden;">
        <style lang="scss">
            section {
                height: 100vh;
                width: 100vw;
                overflow: hidden;
                position: relative;
                background-color: rgba(0,0,0,0.3);
                padding: 4rem;
            }

            section > .cover {
                position: absolute;
                z-index: -1;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
            }

            section > .cover > img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
        </style>
        <div id="header">
            <headerapp logo="https://jadeveloppement.fr/storage/02/logo-sans-fond.png" titre_site="Démocrite" :connected="{{ Cookie::has('democrite-id') }}" /> 
        </div>
        <section>
            <div class="cover">
                <img src="https://jadeveloppement.fr/storage/02/Hanna-Sudom-How-to-stay-motivated-while-studying-online-rotated-1.jpg" alt="">
            </div>
            <div id="presentation">
                <presentation-app />
            </div>
            <div id="login">
                <login-app />
            </div>
        </section>
        <div id="footer">
            <footerapp />
        </div>
        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>