<template>
    <div class="container blog blog-post">
        <h1>{{ post.title }}</h1>
        
        <div class="post post-single">
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
        props: ['slug'],

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
            $.getJSON('/api/posts/' + this.slug, function(post) {
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
