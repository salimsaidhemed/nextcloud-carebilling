(function () {
    'use strict';

    function setActiveView(app, viewName) {
        app.querySelectorAll('[data-carebilling-view-tab]').forEach(function (tab) {
            var isActive = tab.dataset.carebillingViewTab === viewName;
            tab.classList.toggle('active', isActive);
            tab.setAttribute('aria-selected', isActive ? 'true' : 'false');
        });

        app.querySelectorAll('[data-carebilling-view]').forEach(function (view) {
            var isActive = view.dataset.carebillingView === viewName;
            view.classList.toggle('active', isActive);
            view.hidden = !isActive;
        });
    }

    document.addEventListener('DOMContentLoaded', function () {
        var app = document.getElementById('carebilling');

        if (!app) {
            return;
        }

        app.querySelectorAll('[data-carebilling-view-tab], [data-carebilling-open-view]').forEach(function (control) {
            control.addEventListener('click', function () {
                var viewName = control.dataset.carebillingViewTab || control.dataset.carebillingOpenView;

                if (viewName) {
                    setActiveView(app, viewName);
                }
            });
        });
    });
}());
