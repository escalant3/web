require('./bootstrap');
require('./components');

const app = new Vue({
    el: '#app'
});

$(function() {

    /**
     * Lightbox
     */
    $('.gallery .tile .content a').simpleLightbox({});

    /**
     * Responsive menu
     */
    $('.nav-toggle').on('click', function() {
        $('.nav-right.nav-menu').toggleClass('is-active');
    });

    /**
     * Smooth scroll
     */
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