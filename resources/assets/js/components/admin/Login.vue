<template>
    <div class="columns is-9">
        <div class="column login-form is-offset-4 is-4">
            <h3>Acceso al sistema</h3>
            <img src="/images/logos/logo_original.png" class="image" alt="">
            <form action="/authenticate" method="POST">
                <input type="hidden" name="_token" :value="token">
                <label class="label">Correo electrónico</label>
                <p class="control">
                    <input class="input" type="text" name="email" placeholder="Email...">
                </p>

                <label class="label">Contraseña</label>
                <p class="control">
                    <input class="input" type="password" name="password" placeholder="Contraseña...">
                </p>

                <p class="control">
                    <button class="button">Acceder</button>
                </p>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                token: $('meta[name="csrf-token"]').attr('content')
            }
        }
    }
</script>