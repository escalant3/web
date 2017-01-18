<template>
    <div>
        <h3>Actualizar artículo</h3>
        <form :action="'/admin/posts/' + post.id" method="POST">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" :value="token">

            <label class="label">Título</label>
            <p class="control">
                <input class="input" type="text" name="title" :value="post.title" placeholder="Título...">
            </p>

            <label class="label">Enlace</label>
            <p class="control has-addons">
                <button class="button">http://protecms.com/</button>
                <input class="input is-expanded" type="text" name="slug" :value="post.slug" placeholder="Enlace...">
            </p>

            <label class="label">Fecha de publicación</label>
            <p class="control">
                <input class="input" type="text" name="published_at" :value="post.published_at" placeholder="Fecha de publicación...">
            </p>

            <label class="label">Categoría</label>
            <p class="control">
                <select name="category" class="select is-fullwidth" v-model="post.category">
                    <option>Noticias</option>
                    <option>Nuevas protectoras</option>
                    <option>Actualizaciones</option>
                </select>
            </p>

            <label class="label">Texto</label>
            <p class="control">
                <textarea name="body" id="editor" class="textarea">{{ post.body }}</textarea>
            </p>

            <p class="control">
                <span class="columns">
                    <span class="column is-offset-4 is-4">
                        <button class="button is-fullwidth">Actualizar</button>
                    </span>
                </span>
            </p>
        </form>
    </div>
</template>

<script>

    export default {
        props: ['id'],

        data: function () {
            return {
                post: {},
                token: $('meta[name="csrf-token"]').attr('content')
            };
        },

        created: function () {
            $.getJSON('/admin/api/posts/' + this.id, function(post) {
                this.post = post;
            }.bind(this));
        }
    }
</script>