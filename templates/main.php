<?php

declare(strict_types=1);

/** @var array $_ */
?>

<div id="app-content" class="carebilling-app-content">
    <div id="carebilling" class="carebilling-page">
        <header class="carebilling-header">
            <div>
                <p class="carebilling-kicker">CareBilling</p>
                <h1>Billing overview</h1>
            </div>
            <div class="carebilling-actions" aria-label="Primary actions">
                <button type="button" class="primary" disabled>New invoice</button>
                <button type="button" data-carebilling-open-view="customers">Add customer</button>
            </div>
        </header>

        <nav class="carebilling-tabs" aria-label="CareBilling workspace">
            <button type="button" class="carebilling-tab active" data-carebilling-view-tab="overview" aria-selected="true">Overview</button>
            <button type="button" class="carebilling-tab" data-carebilling-view-tab="customers" aria-selected="false">Customers</button>
            <button type="button" class="carebilling-tab" disabled>Services</button>
            <button type="button" class="carebilling-tab" disabled>Payments</button>
        </nav>

        <main class="carebilling-workspace">
            <section class="carebilling-view active" data-carebilling-view="overview">
                <section class="carebilling-metrics" aria-label="Billing summary">
                    <article>
                        <span class="carebilling-metric-label">Open invoices</span>
                        <strong>0</strong>
                    </article>
                    <article>
                        <span class="carebilling-metric-label">Outstanding</span>
                        <strong>0.00</strong>
                    </article>
                    <article>
                        <span class="carebilling-metric-label">Customers</span>
                        <strong>0</strong>
                    </article>
                    <article>
                        <span class="carebilling-metric-label">Overdue</span>
                        <strong>0</strong>
                    </article>
                </section>

                <div class="carebilling-grid">
                    <section class="carebilling-panel carebilling-panel-wide" aria-labelledby="carebilling-recent-heading">
                        <div class="carebilling-panel-header">
                            <h2 id="carebilling-recent-heading">Recent invoices</h2>
                        </div>
                        <div class="carebilling-empty-state">
                            <strong>No invoices yet</strong>
                            <span>Invoice records will appear here once invoice management is available.</span>
                        </div>
                    </section>

                    <section class="carebilling-panel" aria-labelledby="carebilling-next-heading">
                        <div class="carebilling-panel-header">
                            <h2 id="carebilling-next-heading">Next modules</h2>
                        </div>
                        <ul class="carebilling-module-list">
                            <li><span>Customer management</span><em>Started</em></li>
                            <li><span>Service catalog</span><em>Planned</em></li>
                            <li><span>Invoice creation</span><em>Planned</em></li>
                            <li><span>Payment tracking</span><em>Planned</em></li>
                        </ul>
                    </section>
                </div>
            </section>

            <section class="carebilling-view" data-carebilling-view="customers" hidden>
                <section class="carebilling-panel carebilling-customers-panel" aria-labelledby="carebilling-customers-heading">
                    <div class="carebilling-panel-header">
                        <div>
                            <h2 id="carebilling-customers-heading">Customers</h2>
                            <p>Track billing contacts before creating invoices.</p>
                        </div>
                        <button type="button" class="primary" disabled>New customer</button>
                    </div>

                    <div class="carebilling-table" role="table" aria-label="Customers">
                        <div class="carebilling-table-row carebilling-table-heading" role="row">
                            <span role="columnheader">Customer</span>
                            <span role="columnheader">Contact</span>
                            <span role="columnheader">Open balance</span>
                            <span role="columnheader">Status</span>
                        </div>
                        <div class="carebilling-empty-state carebilling-empty-state-table">
                            <strong>No customers yet</strong>
                            <span>Customer records will appear here once customer storage is available.</span>
                        </div>
                    </div>
                </section>
            </section>
        </main>
    </div>
</div>
