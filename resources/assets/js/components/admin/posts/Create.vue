<template>
    <div>
        <h3>Publicar artículo</h3>
        <form action="/admin/posts" method="POST">
            <input type="hidden" name="_token" :value="token">

            <label class="label">Título</label>
            <p class="control">
                <input class="input from-slug" type="text" name="title" placeholder="Título...">
            </p>

            <label class="label">Enlace</label>
            <p class="control has-addons">
                <button class="button">http://protecms.com/</button>
                <input class="input is-expanded to-slug" type="text" name="slug" placeholder="Enlace...">
            </p>

            <label class="label">Categoría</label>
            <p class="control">
                <select name="category" class="select is-fullwidth">
                    <option>Noticias</option>
                    <option>Nuevas protectoras</option>
                    <option>Actualizaciones</option>
                </select>
            </p>

            <label class="label">Texto</label>
            <p class="control">
                <textarea name="body" id="editor" class="textarea"></textarea>
            </p>

            <p class="control">
                <span class="columns">
                    <span class="column is-offset-4 is-4">
                        <button class="button is-fullwidth">Publicar</button>
                    </span>
                </span>
            </p>
        </form>
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