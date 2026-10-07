<?php

declare(strict_types=1);

/** @var array $_ */
?>

<div id="carebilling" class="carebilling-page">
    <header class="carebilling-header">
        <div>
            <p class="carebilling-kicker">CareBilling</p>
            <h1>Billing overview</h1>
        </div>
        <div class="carebilling-actions" aria-label="Primary actions">
            <button type="button" class="primary" disabled>New invoice</button>
            <button type="button" disabled>Add customer</button>
        </div>
    </header>

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
                <li><span>Customer management</span><em>Planned</em></li>
                <li><span>Service catalog</span><em>Planned</em></li>
                <li><span>Invoice creation</span><em>Planned</em></li>
                <li><span>Payment tracking</span><em>Planned</em></li>
            </ul>
        </section>
    </div>
</div>
