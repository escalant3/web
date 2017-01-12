require('./bootstrap');
require('./components');

const app = new Vue({
    el: '#app'
});

$(function() {

    /**
     * Feedback slider
     */
    $('.feedback .container .columns').slick({
        autoplay: true,
        autoplaySpeed: 6000,
        speed: 700,
        prevArrow: '<button type="button" class="slick-prev button is-hidden-mobile is-small"><i class="fa fa-arrow-left"></i></button>',
        nextArrow: '<button type="button" class="slick-next button is-hidden-mobile is-small"><i class="fa fa-arrow-right"></i></button>'
    });

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