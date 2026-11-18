/**
 * Navigation Handler for Resido Theme
 * Handles desktop hover dropdowns and mobile click toggles
 */
(function($) {
    'use strict';

    $(document).ready(function() {

        var $navigation = $('#navigation');
        var breakpoint = 992;

        function isLandscape() {
            return $(window).width() >= breakpoint;
        }

        function setMode() {
            if (isLandscape()) {
                $navigation.removeClass('navigation-portrait').addClass('navigation-landscape');
                // Reset mobile state
                $navigation.find('.nav-menus-wrapper').removeAttr('style');
                $navigation.find('.nav-dropdown').removeAttr('style');
            } else {
                $navigation.removeClass('navigation-landscape').addClass('navigation-portrait');
            }
        }

        // ── Desktop: hover show/hide ────────────────────
        // Level 1 dropdowns
        $navigation.on('mouseenter.navDesktop', '.nav-menu > li', function() {
            if (!isLandscape()) return;
            $(this).children('.nav-dropdown').stop(true, true).fadeIn(200);
        });
        $navigation.on('mouseleave.navDesktop', '.nav-menu > li', function() {
            if (!isLandscape()) return;
            $(this).children('.nav-dropdown').stop(true, true).fadeOut(150);
        });

        // Level 2+ nested dropdowns
        $navigation.on('mouseenter.navDesktop', '.nav-dropdown > li', function() {
            if (!isLandscape()) return;
            $(this).children('.nav-dropdown').stop(true, true).fadeIn(200);
        });
        $navigation.on('mouseleave.navDesktop', '.nav-dropdown > li', function() {
            if (!isLandscape()) return;
            $(this).children('.nav-dropdown').stop(true, true).fadeOut(150);
        });

        // ── Mobile: toggle button ───────────────────────
        $('.nav-toggle').on('click', function() {
            if (!isLandscape()) {
                $navigation.find('.nav-menus-wrapper').slideToggle(300);
            }
        });

        // ── Mobile: click submenu indicators ────────────
        $navigation.on('click', '.submenu-indicator', function(e) {
            if (isLandscape()) return;
            e.preventDefault();
            e.stopPropagation();
            var $li = $(this).closest('li');
            $li.children('.nav-dropdown').slideToggle(300);
        });

        // ── Mobile: click on parent links with dropdown ─
        $navigation.on('click', '.nav-menu li > a', function(e) {
            if (isLandscape()) return;
            var $li = $(this).parent();
            var $dropdown = $li.children('.nav-dropdown');
            var href = $(this).attr('href');

            if ($dropdown.length && (!href || href === '#' || href.indexOf('Void') !== -1)) {
                e.preventDefault();
                $dropdown.slideToggle(300);
            }
        });

        // ── Resize ──────────────────────────────────────
        $(window).on('resize', setMode);

        // Init
        setMode();
    });

})(jQuery);
