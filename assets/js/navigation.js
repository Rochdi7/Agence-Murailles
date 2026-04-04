/**
 * Navigation - Mobile menu toggle and sticky header
 *
 * @package AgenceMurailles
 */
(function () {
    'use strict';

    const menuToggle = document.querySelector('.menu-toggle');
    const primaryMenu = document.querySelector('.primary-menu');
    const header = document.getElementById('site-header');

    // Mobile menu toggle
    if (menuToggle && primaryMenu) {
        menuToggle.addEventListener('click', function () {
            const isOpen = primaryMenu.classList.toggle('is-open');
            menuToggle.setAttribute('aria-expanded', isOpen);

            // Animate hamburger
            menuToggle.classList.toggle('is-active');
        });

        // Close menu when clicking outside
        document.addEventListener('click', function (e) {
            if (!menuToggle.contains(e.target) && !primaryMenu.contains(e.target)) {
                primaryMenu.classList.remove('is-open');
                menuToggle.setAttribute('aria-expanded', 'false');
                menuToggle.classList.remove('is-active');
            }
        });

        // Close menu on Escape
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && primaryMenu.classList.contains('is-open')) {
                primaryMenu.classList.remove('is-open');
                menuToggle.setAttribute('aria-expanded', 'false');
                menuToggle.classList.remove('is-active');
                menuToggle.focus();
            }
        });
    }

    // Sticky header shadow on scroll
    if (header) {
        let lastScroll = 0;
        window.addEventListener('scroll', function () {
            const currentScroll = window.pageYOffset;
            if (currentScroll > 50) {
                header.classList.add('is-scrolled');
            } else {
                header.classList.remove('is-scrolled');
            }
            lastScroll = currentScroll;
        }, { passive: true });
    }
})();
