/**
 * Property Filter - AJAX-based search and filter
 *
 * @package AgenceMurailles
 */
(function () {
    'use strict';

    const searchForm = document.getElementById('property-search-form');
    const resultsContainer = document.getElementById('properties-results');
    const paginationContainer = document.getElementById('properties-pagination');
    const sortSelect = document.getElementById('sort-select');
    const resultsCountText = document.getElementById('results-count-text');

    if (!searchForm || !resultsContainer) return;

    let currentPage = 1;

    /**
     * Gather form data
     */
    function getFormData() {
        const data = new FormData(searchForm);
        const params = {};

        for (const [key, value] of data.entries()) {
            if (value) params[key] = value;
        }

        if (sortSelect) {
            params.sort = sortSelect.value;
        }

        return params;
    }

    /**
     * Perform AJAX filter
     */
    function filterProperties(page) {
        page = page || 1;
        currentPage = page;

        const params = getFormData();
        params.action = 'am_filter_properties';
        params.nonce = amAjax.nonce;
        params.paged = page;

        // Show loading state
        resultsContainer.classList.add('loading');

        const body = new URLSearchParams(params);

        fetch(amAjax.ajaxUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: body.toString(),
        })
            .then(function (response) { return response.json(); })
            .then(function (data) {
                resultsContainer.classList.remove('loading');

                if (data.success) {
                    resultsContainer.innerHTML = data.data.html;
                    updatePagination(data.data.max_pages, page);
                    updateResultsCount(data.data.found);

                    // Scroll to results
                    resultsContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            })
            .catch(function () {
                resultsContainer.classList.remove('loading');
            });
    }

    /**
     * Update pagination
     */
    function updatePagination(maxPages, currentPage) {
        if (!paginationContainer) return;

        if (maxPages <= 1) {
            paginationContainer.innerHTML = '';
            return;
        }

        let html = '<nav class="navigation pagination"><div class="nav-links">';

        if (currentPage > 1) {
            html += '<a class="prev page-numbers" data-page="' + (currentPage - 1) + '">&laquo; Previous</a>';
        }

        for (let i = 1; i <= maxPages; i++) {
            if (i === currentPage) {
                html += '<span class="page-numbers current">' + i + '</span>';
            } else if (i <= 2 || i >= maxPages - 1 || Math.abs(i - currentPage) <= 1) {
                html += '<a class="page-numbers" data-page="' + i + '">' + i + '</a>';
            } else if (Math.abs(i - currentPage) === 2) {
                html += '<span class="page-numbers dots">&hellip;</span>';
            }
        }

        if (currentPage < maxPages) {
            html += '<a class="next page-numbers" data-page="' + (currentPage + 1) + '">Next &raquo;</a>';
        }

        html += '</div></nav>';
        paginationContainer.innerHTML = html;

        // Bind pagination clicks
        paginationContainer.querySelectorAll('a[data-page]').forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                filterProperties(parseInt(this.dataset.page, 10));
            });
        });
    }

    /**
     * Update results count
     */
    function updateResultsCount(count) {
        if (!resultsCountText) return;
        const word = count === 1 ? 'Property' : 'Properties';
        resultsCountText.textContent = count + ' ' + word + ' Found';
    }

    // Form submit handler (AJAX)
    searchForm.addEventListener('submit', function (e) {
        e.preventDefault();
        filterProperties(1);
    });

    // Sort change
    if (sortSelect) {
        sortSelect.addEventListener('change', function () {
            filterProperties(1);
        });
    }
})();
