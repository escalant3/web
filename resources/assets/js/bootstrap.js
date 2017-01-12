window._ = require('lodash');

window.$ = window.jQuery = require('jquery');

window.Vue = require('vue');
require('vue-resource');

window.toastr = require('toastr');
window.simpleLightbox = require('simplelightbox');
window.slick = require('slick-carousel');

Vue.http.interceptors.push((request, next) => {
    request.headers.set('X-CSRF-TOKEN', Laravel.csrfToken);

    next();
});