<template>
    <div class="container blog">
        <h1>Blog de ProteCMS</h1>
        
        <div class="post">
            <h2>{{ post.title }}</h2>
            <p class="post-info">
                Escrito por {{ post.user.name }}<br>
            </p>
            <div class="post-body" v-html="post.body"></div>
        </div>

        </table>
    </div> 
</template>

<script>
    export default {
        props: ['post_id'],

        data: function () {
            return {
                post: {
                    user: {
                        name: ''
                    }
                }
            };
        },

        created: function () {
            $.getJSON('/api/posts/' + this.post_id, function(post) {
                this.post = post;
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
