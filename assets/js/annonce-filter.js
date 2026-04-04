/**
 * Annonce Immobilier Filter - AJAX search/filter
 *
 * @package AgenceMurailles
 */
(function () {
    'use strict';

    var searchForm = document.getElementById('annonce-search-form');
    var resultsContainer = document.getElementById('annonces-results');
    var paginationContainer = document.getElementById('annonces-pagination');
    var sortSelect = document.getElementById('annonce-sort');
    var resultsCountText = document.getElementById('annonce-results-count');

    if (!searchForm || !resultsContainer) return;

    function getFormData() {
        var data = new FormData(searchForm);
        var params = {};
        for (var pair of data.entries()) {
            if (pair[1]) params[pair[0]] = pair[1];
        }
        if (sortSelect) {
            params.sort = sortSelect.value;
        }
        return params;
    }

    function filterAnnonces(page) {
        page = page || 1;

        var params = getFormData();
        params.action = 'am_filter_annonces';
        params.nonce = amAjax.nonce;
        params.paged = page;

        resultsContainer.classList.add('loading');

        fetch(amAjax.ajaxUrl, {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams(params).toString(),
        })
            .then(function (r) { return r.json(); })
            .then(function (data) {
                resultsContainer.classList.remove('loading');
                if (data.success) {
                    resultsContainer.innerHTML = data.data.html;
                    updatePagination(data.data.max_pages, page);
                    updateCount(data.data.found);
                    resultsContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            })
            .catch(function () {
                resultsContainer.classList.remove('loading');
            });
    }

    function updatePagination(maxPages, currentPage) {
        if (!paginationContainer) return;
        if (maxPages <= 1) { paginationContainer.innerHTML = ''; return; }

        var html = '<nav class="navigation pagination"><div class="nav-links">';
        if (currentPage > 1) {
            html += '<a class="prev page-numbers" data-page="' + (currentPage - 1) + '">&laquo; Précédent</a>';
        }
        for (var i = 1; i <= maxPages; i++) {
            if (i === currentPage) {
                html += '<span class="page-numbers current">' + i + '</span>';
            } else if (i <= 2 || i >= maxPages - 1 || Math.abs(i - currentPage) <= 1) {
                html += '<a class="page-numbers" data-page="' + i + '">' + i + '</a>';
            } else if (Math.abs(i - currentPage) === 2) {
                html += '<span class="page-numbers dots">&hellip;</span>';
            }
        }
        if (currentPage < maxPages) {
            html += '<a class="next page-numbers" data-page="' + (currentPage + 1) + '">Suivant &raquo;</a>';
        }
        html += '</div></nav>';
        paginationContainer.innerHTML = html;

        paginationContainer.querySelectorAll('a[data-page]').forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                filterAnnonces(parseInt(this.dataset.page, 10));
            });
        });
    }

    function updateCount(count) {
        if (!resultsCountText) return;
        var word = count === 1 ? 'annonce trouvée' : 'annonces trouvées';
        resultsCountText.textContent = count + ' ' + word;
    }

    searchForm.addEventListener('submit', function (e) {
        e.preventDefault();
        filterAnnonces(1);
    });

    if (sortSelect) {
        sortSelect.addEventListener('change', function () {
            filterAnnonces(1);
        });
    }
})();
