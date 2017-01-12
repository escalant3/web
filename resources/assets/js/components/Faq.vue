<template>
    <div class="page faq">
        <h1>Preguntas frecuentes</h1>
        <div class="container">
            <div v-for="(item, index) in faq" class="faq-item">
                <h3>{{ item.question }}</h3>
                <article class="message">
                    <div class="message-body">
                        {{ item.answer }}
                    </div>
                </article>
            </div>

            <h4 class="title is-6 has-text-centered">¿Sigues teniendo dudas? Envíanos un mensaje a través de la sección de <a href="/#contacto">contacto</a>.</h4>
        </div>
    </div>
</template>

<script>
    let faq = [
        {
            question: "¿Qué es ProteCMS?",
            answer: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quis consequuntur doloribus provident excepturi perferendis fugit aut vitae quibusdam nihil. Necessitatibus ratione iusto provident odit recusandae veritatis tenetur dicta perspiciatis."
        },
        {
            question: "¿Qué es ProteCMS?",
            answer: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quis consequuntur doloribus provident excepturi perferendis fugit aut vitae quibusdam nihil. Necessitatibus ratione iusto provident odit recusandae veritatis tenetur dicta perspiciatis."
        },
        {
            question: "¿Qué es ProteCMS?",
            answer: "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellat quis consequuntur doloribus provident excepturi perferendis fugit aut vitae quibusdam nihil. Necessitatibus ratione iusto provident odit recusandae veritatis tenetur dicta perspiciatis."
        },

    ];

    export default {
        data() {
            return {
                faq: faq
            }
        }
    }
</script>