/**
 * Agence Murailles Theme Custom JavaScript
 *
 * @package Agence_Murailles
 */

(function($) {
    'use strict';

    // ── Preloader ────────────────────────────────────────
    $(window).on('load', function() {
        $('#preloader').fadeOut('slow');
    });

    // Fallback: remove preloader after 3s
    setTimeout(function() {
        $('#preloader').fadeOut('slow');
    }, 3000);

    $(document).ready(function() {

        // ── Select2 Init ────────────────────────────────
        if ($.fn.select2) {
            $('select.form-control').select2({
                minimumResultsForSearch: 6,
                width: '100%'
            });
        }

        // ── Slick Carousel Init ─────────────────────────
        if ($.fn.slick) {
            $('.featured_slick_gallery .row').slick({
                dots: false,
                arrows: true,
                infinite: true,
                speed: 500,
                slidesToShow: 1,
                adaptiveHeight: true
            });

            // Testimonial carousel if exists
            $('.testimonial-carousel').slick({
                dots: true,
                arrows: false,
                infinite: true,
                speed: 600,
                slidesToShow: 3,
                slidesToScroll: 1,
                responsive: [
                    { breakpoint: 992, settings: { slidesToShow: 2 } },
                    { breakpoint: 768, settings: { slidesToShow: 1 } }
                ]
            });
        }

        // ── Magnific Popup ──────────────────────────────
        if ($.fn.magnificPopup) {
            $('.mfp-gallery').magnificPopup({
                type: 'image',
                gallery: { enabled: true },
                zoom: { enabled: true, duration: 300 }
            });
        }

        // ── Back to Top ─────────────────────────────────
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 400) {
                $('#back2Top').addClass('visible');
            } else {
                $('#back2Top').removeClass('visible');
            }
        });

        $('#back2Top').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({ scrollTop: 0 }, 600);
        });

        // ── Sticky Header ───────────────────────────────
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 100) {
                $('.header').addClass('header-fixed');
            } else {
                $('.header').removeClass('header-fixed');
            }
        });

        // ── Property Filter (AJAX) ──────────────────────
        if (typeof amAjax !== 'undefined') {
            $('#property-filter-form').on('submit', function(e) {
                // Allow normal form submission for now
                // AJAX filtering can be enhanced later
            });
        }

        // ── Range Slider Init ───────────────────────────
        if ($.fn.ionRangeSlider) {
            $('input.price-range-slider').ionRangeSlider({
                type: 'double',
                min: 0,
                max: 1000000,
                from: 0,
                to: 500000,
                prefix: '$',
                grid: false,
                skin: 'round'
            });
        }

    }); // end document.ready

})(jQuery);
