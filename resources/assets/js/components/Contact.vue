<template>
    <div id="contacto" class="contact">
        <div class="container">
            <h3 class="has-text-centered">
                Contacto
            </h3>
            
            <div class="columns">
                <div class="column is-8">
                    <div class="control">
                        <label class="label">Tus datos</label>
                        <p class="control">
                            <input class="input" type="text" placeholder="Nombre">
                        </p> 
                    </div>
                    <div class="control">
                        <label class="label">Correo electrónico</label>
                        <p class="control">
                            <input class="input" type="email" placeholder="Correo electrónico">
                        </p>
                    </div>
                    <div class="control">
                        <label class="label">Asunto</label>
                        <div class="control">
                            <div class="select is-fullwidth">
                                <select>
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
                            <textarea class="textarea" placeholder="Escribe tu mensaje"></textarea>
                        </div>
                    </div>
                    <div class="control columns">
                        <div class="column is-offset-5 is-2">
                            <button class="button is-fullwidth is-info">
                                Enviar
                            </button>
                        </div>
                    </div>
                </div>
                <div class="column is-4 contact-social">
                    <p>También puedes contactar mediante:</p>
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