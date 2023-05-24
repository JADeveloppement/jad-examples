<style lang="scss">
    .presentation-container {
        padding: 4rem;
        background-color: white;
        text-align: center;
        border-radius: 10px;
        max-width: 50vw;
        border: 2px solid rgba(40 167 69);
        box-shadow: 3px 3px 5px rgba(0,0,0,0.3);
        margin: auto;

        > .presentation {
            h1 {
                color: rgba(40 167 69);
            }

            img {
                width: 95%;
                object-fit: cover;
                margin: 2rem 0 2rem 0;
            }
        }
    }
</style>
<template>
    <div class="presentation-container">
        <div class="presentation">
            <h1>Révision Démocrite</h1>
            <p>Organisez vos révisions comme vous ne l’avez jamais fait. Développée et pensée par un étudiant en médecine, cette 
                plateforme regroupe l’outil nécessaire pour suivre votre avancement dans vos révisions pour préparer au mieux ce concours 
                sanctionnant la fin des études du second cycle.
                <br>Retrouvez un suivi par module, ainsi que par item, pour savoir où vous en êtes exactement dans vos révisions.
                <br>Essayez notre plateforme pour la découvrir avant de vous inscrire pour vous faire une première idée.
            </p>
            <img src="https://jadeveloppement.fr/storage/04/Capture-decran-du-2023-04-26-21-35-10.png" alt="">
        </div>
    </div>
    <p> </p>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
