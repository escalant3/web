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

    /**
     * Slug
     */
    function slugify(text)
    {
        return text.toLowerCase()
            .replace(/[\u00C0-\u00C5]/ig,'a')
            .replace(/[\u00C8-\u00CB]/ig,'e')
            .replace(/[\u00CC-\u00CF]/ig,'i')
            .replace(/[\u00D2-\u00D6]/ig,'o')
            .replace(/[\u00D9-\u00DC]/ig,'u')
            .replace(/[\u00D1]/ig,'n')
            .replace(/[^a-z0-9 ]+/gi,'')
            .trim().replace(/ /g,'-')
            .replace(/[\-]{2}/g,'')
            .replace(/[^a-z\- ]*/gi,'');
    }

    $('.from-slug').on('keyup', function() {
        $('.to-slug').val(slugify($(this).val()));
    });

    /**
     * Confirm
     */
    $('.confirm').on('click', function(e) {
        const vm = $(this);
        e.preventDefault();
        $.confirm({
            title: 'Confirmación',
            content: 'Esta acción es permanente. ¿Desea continuar?',
            closeIcon: true,
            closeIconClass: 'fa fa-close',
            buttons: {
                confirm: {
                    text: 'Continuar',
                    action: function() {
                        window.location.replace(vm.attr('href'));
                    }
                },
                cancel: {
                    text: 'Cancelar'
                }
            }
        });
    });
});