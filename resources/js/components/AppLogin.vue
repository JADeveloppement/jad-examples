<style lang="scss">
    .login-container {
        background-color: white;
        padding: 4rem;
        text-align: center;

        .login {
            display: flex;
            flex-direction: column;
        }
    }
</style>
<template>
    <div class="login-container">
        <div class="login">
            <h1>Connexion</h1>
            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
