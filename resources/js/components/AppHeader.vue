<style lang="scss">
    header {
        width: 100%;
        padding: 1rem 0 1rem 0;
        background-color: green;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .left, .right {
        padding: 2rem;
    }

    .left {
        display: flex;
    }

    .right {
        display: flex;

        > a {
            margin-right: 1rem;
        }
    }
</style>
<template>
    <header>
        <div class="left">
            <p>Logo</p>
            <p>Démocrite</p>
        </div>
        <div class="right">
            <a href="">Connexion</a>
            <a href="">Profil</a>
            <a href="">Déconnexion</a>
        </div>
    </header>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
