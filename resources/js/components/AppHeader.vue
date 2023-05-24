<style lang="scss">
    header {
        width: 100%;
        padding: 1rem 0 1rem 0;
        background-color: rgb(40 167 69);
        display: flex;
        justify-content: space-between;
        align-items: center;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .left, .right {
        padding: 1rem;
        display: flex;
        align-items: center;
    }

    .left {
        > img {
            width: 70px;
            object-fit: cover;
            margin-right: 1rem;
        }
        
        > p {
            font-size: 2rem;
            font-weight: bold;
            color: white;
        }
    }

    .right {

        > a {
            margin-right: 1rem;
            font-size: 2rem;
            color: white;
            text-decoration: none;
            margin-right: 1.5rem;
            transition: all 0.2s;
            cursor: pointer;

            &:last-child {
                margin-right: 0;
            }

            &:first-child {
                margin-right: 1.5rem;
            }

            &:hover {
                transform: scale(1.1);
                border-bottom: 2px solid white; 
            }
        }
    }
</style>
<template>
    <header>
        <div class="left">
            <img :src="logo" alt="">
            <p>{{ titre_site }}</p>
        </div>
        <div class="right">
            <template v-if="connected">
                <a href=""><i class="bi bi-card-list"></i></a>
                <a href=""><i class="bi bi-person-circle"></i></a>
                <a href=""><i class="bi bi-power"></i></a>
            </template>
            <template v-else>
                <a href=""><i class="bi bi-person-circle"></i></a>
            </template>
        </div>
    </header>
</template>

<script>
    export default {
        props: ['logo', 'titre_site', 'connected'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
