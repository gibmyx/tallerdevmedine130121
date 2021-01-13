<template>

    <div class="container">
        <div class="py-5 text-center">
            <img class="d-block mx-auto mb-4" src="img/logo-SF.png" alt="" width="240" height="200">
            <h2>Taller Medine 13/01/2021</h2>
            <h3>TDD</h3>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <router-link to="/" class="nav-link" href="#">Inicio</router-link>
                </li>
                <li class="nav-item">
                    <router-link to="/registrar" class="nav-link" href="#">Registrar</router-link>
                </li>
            </ul>
        </div>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log('Component mounted.')
    }
}
</script>
