<template>
    <div id="contacto" class="contact">
        <div class="container">
            <h3 class="has-text-centered">
                Contacto
            </h3>
            
            <div class="columns">
                <div class="column is-8">
                    <form action="/contact" method="POST">
                        <input type="hidden" name="_token" :value="token">
                        <div class="control">
                            <label class="label">Tus datos</label>
                            <p class="control">
                                <input class="input" name="name" type="text" placeholder="Nombre" required>
                            </p> 
                        </div>
                        <div class="control">
                            <label class="label">Correo electrónico</label>
                            <p class="control">
                                <input class="input" name="email" type="email" placeholder="Correo electrónico" required>
                            </p>
                        </div>
                        <div class="control">
                            <label class="label">Asunto</label>
                            <div class="control">
                                <div class="select is-fullwidth">
                                    <select name="subject" required>
                                        <option>Obtener información</option>
                                        <option>Somos un refugio y queremos usar ProteCMS</option>
                                        <option>Soy desarrollador/diseñador/traductor y quiero colaborar</option>
                                        <option>Somos una empresa y queremos colaborar con el proyecto</option>
                                        <option>Otro asunto</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="control">
                            <label class="label">Mensaje</label>
                            <div class="control">
                                <textarea class="textarea" name="message" placeholder="Escribe tu mensaje" required></textarea>
                            </div>
                        </div>
                        <div class="control columns">
                            <div class="column is-offset-5 is-2">
                                <button class="button is-fullwidth is-info">
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="column is-4 contact-social is-hidden-mobile">
                    <p>Si tienes problemas con el formulario, puedes enviar un mensaje a: <a href="mailto:web@protecms.com">web@protecms.com</a></p>
                    <p>Puedes contactar usando el formulario de contacto de la izquierda o mediante los siguientes enlaces a las redes sociales.</p>
                    <p>No dudes en enviarnos un mensaje, aunque solo sea para darnos una sugerencia para mejorar el proyecto, contarnos algún caso o anécdota. ¡Nos encanta leeros!</p>
                    <hr>
                    <div class="columns">
                        <div class="column is-offset-3 is-2">
                            <a href="https://facebook.com/protecms"><span class="icon"><i class="fa fa-facebook"></i></span></a>
                        </div>
                        <div class="column is-2">
                            <a href="https://twitter.com/protecms"><span class="icon"><i class="fa fa-twitter"></i></span></a>
                        </div>
                        <div class="column is-2">
                            <a href="mailto:web@protecms.com"><span class="icon"><i class="fa fa-envelope"></i></span></a>
                        </div>
                    </div>
                </div>
            </div>
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