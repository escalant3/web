<template>
    <div class="page faq">
        <h1>Preguntas frecuentes</h1>
        <div class="container">
            <div v-for="(item, index) in faq" class="faq-item">
                <h3>{{ item.question }}</h3>
                <article class="message">
                    <div class="message-body" v-html="item.answer"></div>
                </article>
            </div>

            <h4 class="title is-6 has-text-centered">¿Sigues teniendo dudas? Envíanos un mensaje a través de la sección de <a href="/#contacto">contacto</a>.</h4>
        </div>
    </div>
</template>

<script>
    let faq = [
        {
            question: '¿Qué es ProteCMS?',
            answer: 'ProteCMS es un gestor creado especialmente para protectoras y refugios de animales. No necesita instalación ni contratar ningún servidor ya que funciona en el servidor del propio proyecto y da la posibilidad a las protectoras o refugios a tener una página web donde poder enseñar los animales y un panel de administración completo donde gestionar, entre otras cosas, las fichas de los animales, fotos, salud, artículos, finanzas de la protectora, llevar un seguimiento mediante un calendario y muchás más.'
        },
        {
            question: '¿Puedo instalar el proyecto en nuestro servidor?',
            answer: 'Como posibilidad, si, pero no lo recomiendo. El proyecto no está pensado para gestionar una protectora si no para la gestión de múltiples; aparte tendríais que pagar un servidor. También hay que tener unos conocimientos avanzados de programación para poder instalar y mantener el proyecto. Aún así si decides hacerlo, piensa que al no estar en el servidor del proyecto, no tendréis actualizaciones ni soporte de ningún tipo.'
        },
        {
            question: '¿Cuántos euros cuesta usar el proyecto?',
            answer: 'Nada, 0. Usar el proyecto es totalmente gratuito.'
        },
        {
            question: '¿Cualquiera puede usar el proyecto?',
            answer: 'No. El proyecto solo puede ser usado por protectoras y refugios (no tienen por qué que estar dados de alta ni tener un refugio como tal, hay muchos que funcionan con casas de acogida) que <u><strong>no tengan ánimo de lucro</strong></u>. Es el único requisito.'
        },
        {
            question: '¿Es seguro usar el proyecto?',
            answer: 'Si, es totalmente seguro. Los datos sensibles como la contraseña de los usuarios están fuertemente encriptadas. También se realizan copias de seguridad diarias para que, en caso de error grave, la pérdida sea mínima.'
        },
        {
            question: '¿El proyecto es libre? ¿Puedo consultar el código fuente?',
            answer: 'Si, el proyecto es libre y está totalmente abierto a colaboraciones. Puedes consultar el código fuente del CMS y de la página web del proyecto en <a href="http://github.com/protecms" target="_blank">Github</a>.'
        },
        {
            question: 'Pero para que el proyecto funcione necesita por lo menos contratar un servidor, por lo tanto tiene gastos. ¿Cómo que es gratis?',
            answer: 'Actualmente yo, <a href="http://jaimesares.com">Jaime Sares</a>, mantengo el proyecto en su totalidad. En caso de necesitar ayuda de algún tipo, intentaría por todos los medios que las protectoras no tengan que aportar nada, aunque para ello aún queda mucho.'
        },
        {
            question: '¿Cuánto gasto tiene el proyecto actualmente?',
            answer: 'El proyecto cuenta con un servidor de 10€/mensuales y de 1 dominio de 10€/año, por lo tanto los gastos anuales ascienden a 130€ al año.'
        },
        {
            question: '¿Puedo sugerir cambios que podrían venir bien a las demás protectoras?',
            answer: 'Por supuesto. Este proyecto es por y para protectoras y refugios. Si ya estáis registrados podéis hacerlo a través del panel de administración, en la sección Soporte. Si no, podéis enviar un mensaje a través de la sección de <a href="/#contacto">contacto</a>.'
        },
        {
            question: '¿Dónde puedo consultar los cambios que están pendientes de implementar, errores pendientes de solucionar, etc?',
            answer: 'Todo esto lo puedes consultar en el panel de <a href="https://trello.com/b/j4eAFtN1/protecms" target="_blank">Trello</a>.'
        }
    ];

    export default {
        data() {
            return {
                faq: faq
            }
        }
    }
</script>