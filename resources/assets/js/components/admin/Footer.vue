<template>
    <footer>
        <div class="has-text-centered">
            Copyright &copy; {{ date }} - Todos los derechos reservados.<br>
            Creado por <a href="http://jaimesares.com" target="_blank">Jaime Sares</a>.
        </div>
    </footer>
</template>

<script>
    export default {
        data() {
            return {
                date: new Date().getFullYear()
            }
        }
    }
</script>