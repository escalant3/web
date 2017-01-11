window._ = require('lodash');

window.$ = window.jQuery = require('jquery');

window.Vue = require('vue');
require('vue-resource');

window.toastr = require('toastr');

Vue.http.interceptors.push((request, next) => {
    request.headers.set('X-CSRF-TOKEN', Laravel.csrfToken);

    next();
});