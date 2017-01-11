require('./bootstrap');
require('./components');

const app = new Vue({
    el: '#app'
});

$(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
            $('html, body').animate({
                scrollTop: target.offset().top
            }, 500);
            return false;
        }
    });
});