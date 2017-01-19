<template>
    <div class="container blog">
        <h1>Blog de ProteCMS</h1>
        
        <div class="post" v-for="post in posts">
            <h2>{{ post.title }}</h2>
            <p class="post-info">
                Escrito por {{ post.user.name }}<br>
                Publicado el {{ post.published_at | moment }} en {{ post.category }}
            </p>
            <div class="post-body" v-html="post.body"></div>
        </div>

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
            $.getJSON('/api/posts', function(posts) {
                this.posts = posts;
            }.bind(this));
        },

        filters: {
            moment: function (date) {
                return moment(date).format('LLLL');
            }
        },

        methods: {
            moment: function() {
                return moment();
            }
        }
    }
</script>
