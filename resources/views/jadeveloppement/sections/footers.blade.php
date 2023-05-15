<!-- DESCRIPTION -->
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

<!-- COMPETENCES -->
<section>
    <h2 class="text-center text-white">Mes compétences</h2>
    <div class="competences">
        <img src="{{asset('storage/03/html5.png') }}" alt="">
        <img src="{{asset('storage/03/1452px-CSS3_logo_and_wordmark.svg_.png') }}" alt="">
        <img src="{{asset('storage/03/JavaScript-logo.png') }}" alt="">
        <img src="{{asset('storage/02/image.png') }}" alt="">
        <img src="{{asset('storage/03/5968313.png') }}" alt="">
        <img src="{{asset('storage/03/1200px-Laravel.svg_.png') }}" alt="">
        <img src="{{asset('storage/03/Vue.js_Logo_2.svg_.png') }}" alt="">
        <img src="{{asset('storage/04/Tailwind_CSS_Logo.svg_.png') }}" alt="">
        <img src="{{asset('storage/03/1280px-Sass_Logo_Color.svg_.png') }}" alt="">
    </div>
    <div class="separator"></div>
    <h2 class="text-center text-white">Mon environnement technique</h2>
    <div class="competences">
        <img src="{{asset('storage/04/Linux_Logo_in_Linux_Libertine_Font.svg_.png')}}" alt="">
        <img src="{{asset('storage/04/visual-studio-code-1.png')}}" alt="">
        <img src="{{asset('storage/04/GitHub-Mark.png')}}" alt="">
    </div>
</section>

<!-- NEWSLETTER -->
<section>
        <h2 class="text-center">N'hésitez pas et contactez moi</h2>
        <div class="separator"></div>
        <div class="news-container">
            <div class="form-floating mr-3">
                <input type="email" class="form-control shadow-sm" id="emailnews" placeholder="name@example.com">
                <label for="emailnews" class="text-slate-700" >Adresse e-mail</label>
            </div>
            <select class="form-select objectnews shadow-sm" id="subjectnews" aria-label="">
                <option value="0">Objet de votre demande</option>
                <option value="1">Création de site web</option>
                <option value="2">Solution graphique</option>
                <option value="3">Mis à jour d'un site web</option>
                <option value="4">Autre demande</option>
            </select>
            <button type="button" class="btn btn-warning text-white shadow-sm send-news flex items-center justify-center" style="background-color: orange;" >
                <svg class="animate-spin h-5 w-5 mr-3 wait-sending transition-all opacity-0 hidden" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Envoyer
            </button>
        </div>
</section>

<footer>
    <div class="left">
        <img src="{{asset(config('medias_link.logo_black'))}}" alt="">
        <span>Copyright 2023</span>
    </div>
    <div class="right">
        <a href="/confidentialite">Confidentialité</a>
        <a href="/legals">Mentions légales</a>
    </div>
</footer>

<script src="{{ asset('js/jadeveloppement/app_footer.js') }}"></script>