/**
 * Main JS - Gallery, contact forms, smooth scroll, animations
 *
 * @package AgenceMurailles
 */
(function () {
    'use strict';

    /**
     * Property Gallery - thumbnail click to swap main image
     */
    function initGallery() {
        const mainImage = document.getElementById('gallery-main-image');
        const thumbs = document.querySelectorAll('.gallery-thumb');

        if (!mainImage || !thumbs.length) return;

        thumbs.forEach(function (thumb) {
            thumb.addEventListener('click', function () {
                const fullUrl = this.dataset.full;
                if (!fullUrl) return;

                mainImage.src = fullUrl;

                // Update active state
                thumbs.forEach(function (t) { t.classList.remove('active'); });
                this.classList.add('active');
            });
        });
    }

    /**
     * Contact Form AJAX submission
     */
    function initContactForms() {
        const forms = document.querySelectorAll('#contact-form, #property-inquiry-form');

        forms.forEach(function (form) {
            form.addEventListener('submit', function (e) {
                e.preventDefault();

                const formData = new FormData(form);
                const messageEl = form.querySelector('.form-message');
                const submitBtn = form.querySelector('button[type="submit"]');
                const originalText = submitBtn.textContent;

                // If no ajaxUrl provided, use native form
                if (typeof amAjax === 'undefined') {
                    form.submit();
                    return;
                }

                submitBtn.textContent = 'Sending...';
                submitBtn.disabled = true;

                fetch(amAjax.ajaxUrl, {
                    method: 'POST',
                    body: new URLSearchParams(formData),
                    headers: {
                        'Content-Type': 'application/x-www-form-urlencoded',
                    },
                })
                    .then(function (response) { return response.json(); })
                    .then(function (data) {
                        submitBtn.textContent = originalText;
                        submitBtn.disabled = false;

                        if (messageEl) {
                            messageEl.textContent = data.data.message;
                            messageEl.className = 'form-message ' + (data.success ? 'success' : 'error');
                        }

                        if (data.success) {
                            form.reset();
                        }
                    })
                    .catch(function () {
                        submitBtn.textContent = originalText;
                        submitBtn.disabled = false;

                        if (messageEl) {
                            messageEl.textContent = 'An error occurred. Please try again.';
                            messageEl.className = 'form-message error';
                        }
                    });
            });
        });
    }

    /**
     * Smooth scroll for anchor links
     */
    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(function (link) {
            link.addEventListener('click', function (e) {
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    }

    /**
     * Scroll animations - fade in elements on scroll
     */
    function initScrollAnimations() {
        if (!('IntersectionObserver' in window)) return;

        const observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('is-visible');
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.1, rootMargin: '0px 0px -50px 0px' }
        );

        document.querySelectorAll(
            '.property-card, .agent-card, .testimonial-card, .post-card, .type-card, .stat-card, .feature-item, .contact-info-card'
        ).forEach(function (el) {
            el.classList.add('fade-in-up');
            observer.observe(el);
        });
    }

    // Initialize all modules on DOM ready
    document.addEventListener('DOMContentLoaded', function () {
        initGallery();
        initContactForms();
        initSmoothScroll();
        initScrollAnimations();
    });
})();
