<template>
    <div>
        <h3>Listado de artículos</h3>
        <table class="table is-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Categoría</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="post in posts">
                    <td>{{ post.id }}</td>
                    <td>{{ post.title }}</td>
                    <td>{{ post.category }}</td>
                    <td>{{ post.created_at }}</td>
                    <td>
                        <div class="columns">
                            <div class="column is-6">
                                <a :href="'/admin/posts/' + post.id + '/edit'" class="button is-info is-small is-fullwidth"><i class="fa fa-edit"></i></a>
                            </div>
                            <div class="column is-6">
                                <a :href="'/admin/posts/' + post.id + '/delete'" class="button is-danger is-small is-fullwidth confirm"><i class="fa fa-trash"></i></a>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div> 
</template>

<script>
    export default {
        data: function () {
            return {
                posts: []
            };
        },

        created: function () {
            $.getJSON('/admin/api/posts', function(posts) {
                this.posts = posts;
            }.bind(this));
        }
    }
</script>
