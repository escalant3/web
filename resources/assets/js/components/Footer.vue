<template>
    <footer>
        <div class="container">
            <div class="columns">
                <div class="column is-one-quarter ">
                    <ul>
                        <li><a href="/">Inicio</a></li>
                        <li><a href="#que-es">¿Qué es?</a></li>
                        <li><a href="#caracteristicas">Características</a></li>
                        <li><a href="#galeria">Galería</a></li>
                        <li><a href="#protectoras">Protectora</a></li>
                        <li><a href="#contacto">Contacto</a></li>
                    </ul>
                </div>
                <div class="column is-one-quarter">
                    <ul>
                        <li><a href="">Preguntas frecuentes</a></li>
                        <li><a href="">Política de privacidad</a></li>
                        <li><a href="">Términos y condiciones</a></li>
                        <li><a href="">Para desarrolladores</a></li>
                    </ul>
                </div>
                <div class="column is-half">
                    <div class="columns is-gapless has-text-centered" style="margin-bottom: 20px">
                        <div class="column is-half is-hidden-mobile">
                            <p>Redes sociales de proyecto</p>
                        </div>
                        <div class="column is-half is-hidden-mobile">
                            <p>Gestión de proyecto</p>
                        </div>
                    </div>
                    
                    <div class="columns is-gapless has-text-centered is-mobile">
                        <div class="column is-one-quarter">
                            <span class="icon is-large">
                                <a href="https://facebook.com/protecms"><i class="fa fa-facebook" title="Facebook ProteCMS"></i></a>
                            </span>
                        </div>
                        <div class="column is-one-quarter">
                            <span class="icon is-large">
                                <a href="https://twitter.com/protecms"><i class="fa fa-twitter" title="Twitter ProteCMS"></i></a>
                            </span>
                        </div>
                        <div class="column is-one-quarter">
                            <span class="icon is-large">
                                <a href="https://github.com/protecms"><i class="fa fa-github" title="Github ProteCMS"></i></a>
                            </span>
                        </div>
                        <div class="column is-one-quarter">
                            <span class="icon is-large">
                                <a href="https://trello.com/b/j4eAFtN1/protecms"><i class="fa fa-trello" title="Trello ProteCMS"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="has-text-centered">
                Copyright &copy; {{ date }} - Todos los derechos reservados.<br>
                Creado por <a href="http://jaimesares.com" target="_blank">Jaime Sares</a>.
            </div>
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