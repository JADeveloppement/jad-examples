<style lang="scss">
    footer {
        width: 100%;
        padding: 0.5rem;
        background-color: black;
        display: flex;
        /* justify-content: space-between; */
        align-items: center;
        color: white;

        > img {
            margin-right: 1rem;
            width: 40px;
        }
    }
</style>
<template>
    <footer>
        <img src="https://jadeveloppement.fr/storage/01/favicon_white.png" alt="">
        <p>JADeveloppement</p>
    </footer>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
