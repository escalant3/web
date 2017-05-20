/**
 * Web components
 */
Vue.component('headermenu', require('./components/web/Header.vue'));
Vue.component('slider', require('./components/web/Slider.vue'));
Vue.component('whatis', require('./components/web/WhatIs.vue'));
Vue.component('features', require('./components/web/Features.vue'));
Vue.component('customfooter', require('./components/web/Footer.vue'));
Vue.component('counters', require('./components/web/Counters.vue'));
Vue.component('gallery', require('./components/web/Gallery.vue'));
Vue.component('shelters', require('./components/web/Shelter.vue'));
Vue.component('contact', require('./components/web/Contact.vue'));
Vue.component('feedback', require('./components/web/Feedback.vue'));
Vue.component('demo', require('./components/web/Demo.vue'));
Vue.component('faq', require('./components/web/Faq.vue'));
Vue.component('terms', require('./components/web/Terms.vue'));
Vue.component('policy', require('./components/web/Policy.vue'));
Vue.component('devs', require('./components/web/Devs.vue'));
Vue.component('blog', require('./components/web/Blog.vue'));
Vue.component('post', require('./components/web/Post.vue'));

/**
 * Admin components
 */
Vue.component('login', require('./components/admin/Login.vue'));
Vue.component('adminheader', require('./components/admin/Header.vue'));
Vue.component('adminfooter', require('./components/admin/Footer.vue'));
Vue.component('sidebar', require('./components/admin/Sidebar.vue'));

// Posts
Vue.component('posts-index', require('./components/admin/posts/Index.vue'));
Vue.component('posts-create', require('./components/admin/posts/Create.vue'));
Vue.component('posts-edit', require('./components/admin/posts/Edit.vue'));