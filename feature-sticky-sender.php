<?php
/* Template Name: Feature Sticky Sender */
?>

<?php get_header('sms'); ?>

<style>
    :root {
        --font-heading: 'Plus Jakarta Sans', sans-serif;
        --font-body: 'Plus Jakarta Sans', sans-serif;
        --fs-h1: clamp(2.5rem, 5vw, 3rem);
        --fs-h2: clamp(1.5rem, 4vw, 2rem);
        --fs-h3: clamp(1.5rem, 3vw, 1.75rem);
        --fs-h4: clamp(1.25rem, 2.5vw, 1.5rem);
        --fs-h5: clamp(1.125rem, 2vw, 1.25rem);
        --fs-h6: clamp(1rem, 1.8vw, 1.125rem);
        --fs-lead: clamp(1.125rem, 2vw, 1.375rem);
        --fs-body: clamp(0.875rem, 1vw, 1rem);
        --fs-xs: clamp(0.75rem, 1.2vw, 0.875rem);
        --fs-label: clamp(0.75rem, 1.2vw, 0.875rem);
        --fs-btn-lg: 1.125rem;
        --fs-btn-md: 1rem;
        --fs-btn-sm: 0.875rem;
        --fs-nav: 1rem;
        --fs-icon-sm: 1rem;
        --fs-icon-md: 1.25rem;
        --fs-icon-lg: 1.5rem;
        --fw-regular: 400;
        --fw-medium: 500;
        --fw-semibold: 600;
        --fw-bold: 700;
        --fw-extrabold: 800;
        --fw-heading: var(--fw-bold);
        --fw-subheading: var(--fw-semibold);
        --fw-body: var(--fw-regular);
        --fw-btn: var(--fw-semibold);
        --fw-label: var(--fw-medium);
        --fw-nav: var(--fw-medium);
        --lh-heading: 1.1;
        --lh-lead: 1.4;
        --lh-body: 1.6;
        --ls-tight: -0.02em;
        --ls-normal: 0;
        --ls-wide: 0.04em;
        --ls-wider: 0.08em;
        --clr-primary: #0057B8;
        --clr-primary-hover: #00438c;
        --clr-primary-light: #e6f0f9;
        --clr-secondary: #0057B8;
        --clr-accent: #0057B8;
        --clr-bg: #FFFFFF;
        --clr-bg-alt: #f8f9fb;
        --clr-bg-dark: #0D1F3C;
        --clr-surface: #FFFFFF;
        --clr-text: #334155;
        --clr-text-muted: #64748B;
        --clr-text-inverse: #FFFFFF;
        --clr-heading: #0F172A;
        --clr-border: #E2E8F0;
        --clr-link: var(--clr-primary);
        --clr-focus-ring: var(--clr-primary);
        --space-xs: clamp(0.5rem, 1vw, 0.75rem);
        --space-sm: clamp(0.75rem, 1.5vw, 1rem);
        --space-md: clamp(1rem, 2vw, 1.5rem);
        --space-lg: clamp(1.5rem, 3vw, 2.5rem);
        --space-xl: clamp(2rem, 4vw, 4rem);
        --space-2xl: clamp(3rem, 6vw, 6rem);
        --space-3xl: clamp(4rem, 8vw, 8rem);
        --pad-btn-sm: 0.375rem 0.875rem;
        --pad-btn-md: 0.5rem 1.25rem;
        --pad-btn-lg: 0.75rem 1.75rem;
        --pad-card: 1.5rem;
        --gap-card: 1.5rem;
        --radius-sm: 4px;
        --radius-md: 8px;
        --radius-lg: 12px;
        --radius-xl: 16px;
        --radius-pill: 999px;
        --radius-btn: var(--radius-md);
        --radius-card: var(--radius-lg);
        --radius-input: var(--radius-md);
        --shadow-sm: 0 1px 4px rgba(0, 0, 0, .08);
        --shadow-md: 0 4px 12px rgba(0, 0, 0, .10);
        --shadow-lg: 0 8px 24px rgba(0, 0, 0, .12);
        --shadow-hover: 0 12px 32px rgba(0, 0, 0, .16);
        --shadow-card: var(--shadow-md);
        --shadow-btn: var(--shadow-sm);
        --transition-base: all 0.25s ease;
        --transition-color: color .2s ease, background-color .2s ease, border-color .2s ease;
        --transition-lift: box-shadow .25s ease, transform .25s ease;
        --btn-height-sm: 36px;
        --btn-height-md: 44px;
        --btn-height-lg: 52px;
        --input-height-md: 44px;
        --navbar-height: 64px;
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0
    }

    html {
        scroll-behavior: smooth
    }

    body {
        font-family: var(--font-body);
        font-size: var(--fs-body);
        font-weight: var(--fw-regular);
        line-height: var(--lh-body);
        color: var(--clr-text);
        background-color: var(--clr-bg)
    }

    .text-color-sf {
        color: var(--clr-primary) !important;
    }

    img {
        max-width: 100%;
        height: auto;
        display: block
    }

    hr {
        border: none;
        border-top: 1px solid var(--clr-border);
        margin: var(--space-lg) 0
    }

    h1,
    .h1 {
        font-size: var(--fs-h1);
        font-weight: var(--fw-heading) !important;
        line-height: var(--lh-heading);
        color: var(--clr-heading);
        letter-spacing: var(--ls-tight)
    }

    h2,
    .h2 {
        font-size: var(--fs-h2);
        font-weight: var(--fw-heading);
        line-height: var(--lh-heading);
        color: var(--clr-heading);
        letter-spacing: var(--ls-tight)
    }

    h3,
    .h3 {
        font-size: var(--fs-h3);
        font-weight: var(--fw-subheading);
        line-height: var(--lh-heading);
        color: var(--clr-heading)
    }

    h4,
    .h4 {
        font-size: var(--fs-h4);
        font-weight: var(--fw-subheading);
        line-height: var(--lh-lead);
        color: var(--clr-heading)
    }

    h5,
    .h5 {
        font-size: var(--fs-h5);
        font-weight: var(--fw-semibold);
        line-height: var(--lh-lead);
        color: var(--clr-heading)
    }

    h6,
    .h6 {
        font-size: var(--fs-h6);
        font-weight: var(--fw-semibold);
        line-height: var(--lh-lead);
        color: var(--clr-heading)
    }

    p {
        font-size: var(--fs-body);
        line-height: var(--lh-body);
        color: var(--clr-text);
        margin-bottom: var(--space-sm);
        font-weight: var(--fw-regular);
    }

    .lead {
        font-size: var(--fs-lead);
        font-weight: var(--fw-regular);
        line-height: var(--lh-lead);
        color: var(--clr-text-muted)
    }

    small {
        font-size: var(--fs-sm)
    }

    a {
        color: var(--clr-link);
        transition: var(--transition-color);
        text-decoration: none
    }

    a:hover {
        color: var(--clr-primary-hover)
    }

    section {
        padding: var(--space-2xl) 0
    }

    .section-label {
        font-size: var(--fs-label);
        font-weight: var(--fw-label);
        letter-spacing: var(--ls-wider);
        text-transform: uppercase;
        color: var(--clr-primary);
        margin-bottom: var(--space-xs)
    }

    .section-title {
        font-size: var(--fs-h2);
        font-weight: var(--fw-heading);
        line-height: var(--lh-heading);
        color: var(--clr-heading);
        margin-bottom: var(--space-sm)
    }

    .section-subtitle {
        font-size: var(--fs-icon-sm);
        color: var(--clr-text-muted);
        line-height: var(--lh-lead);
        max-width: 640px
    }

    .section-header {
        margin-bottom: var(--space-xl)
    }

    .section-header.text-center .section-subtitle {
        margin-inline: auto
    }

    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: var(--space-xs);
        font-family: var(--font-body);
        font-weight: var(--fw-btn);
        font-size: var(--fs-btn-md);
        line-height: 1;
        border-radius: var(--radius-btn);
        border: 2px solid transparent;
        padding: var(--pad-btn-md);
        height: var(--btn-height-md);
        cursor: pointer;
        white-space: nowrap;
        transition: var(--transition-base);
        text-decoration: none
    }

    .btn-sm {
        font-size: var(--fs-btn-sm);
        padding: var(--pad-btn-sm);
        height: var(--btn-height-sm)
    }

    .btn-cta-light {
        border: 1px solid #fff !important;
    }

    .btn-cta-light:hover {
        color: #000 !important;
    }

    .btn-lg {
        font-size: var(--fs-btn-lg);
        padding: var(--pad-btn-lg);
        height: var(--btn-height-lg)
    }

    .btn-primary {
        background-color: var(--clr-primary);
        color: var(--clr-text-inverse);
        border-color: var(--clr-primary);
        box-shadow: var(--shadow-btn)
    }

    .btn-primary:hover {
        background-color: var(--clr-primary-hover);
        border-color: var(--clr-primary-hover);
        box-shadow: var(--shadow-md);
        transform: translateY(-1px)
    }

    .btn-secondary {
        background-color: var(--clr-secondary);
        color: var(--clr-text-inverse);
        border-color: var(--clr-secondary)
    }

    .btn-outline-primary {
        background-color: transparent;
        color: var(--clr-primary);
        border-color: var(--clr-primary)
    }

    .btn-outline-primary:hover {
        background-color: var(--clr-primary);
        color: var(--clr-text-inverse)
    }

    .btn-ghost {
        background-color: transparent;
        color: var(--clr-primary);
        border-color: transparent
    }

    .btn-ghost:hover {
        background-color: var(--clr-primary-light)
    }

    .btn:focus-visible {
        outline: 2px solid var(--clr-focus-ring);
        outline-offset: 3px
    }

    .card {
        background-color: var(--clr-surface);
        border: 1px solid var(--clr-border);
        border-radius: var(--radius-card);
        box-shadow: var(--shadow-card);
        padding: var(--pad-card);
        transition: var(--transition-lift);
        height: 100% !important; display: flex; flex-direction: column
    }

    .card:hover {
        box-shadow: var(--shadow-hover);
        transform: translateY(-2px)
    }

    .card-icon {
        font-size: var(--fs-icon-lg);
        color: var(--clr-primary);
        margin-bottom: var(--space-sm)
    }

    .card-title {
        font-size: var(--fs-h5);
        font-weight: var(--fw-subheading);
        color: var(--clr-heading);
        margin-bottom: var(--space-xs)
    }

    .card-text {
        font-size: var(--fs-body);
        color: var(--clr-text-muted);
        line-height: var(--lh-body)
    }

    .form-label {
        font-size: var(--fs-label);
        font-weight: var(--fw-label);
        color: var(--clr-text);
        margin-bottom: .25rem
    }

    .form-control,
    .form-select {
        font-size: var(--fs-body);
        height: var(--input-height-md);
        border-radius: var(--radius-input);
        border: 1px solid var(--clr-border);
        color: var(--clr-text);
        background-color: var(--clr-surface);
        transition: var(--transition-color);
        padding: 0 var(--space-sm)
    }

    .form-control:focus,
    .form-select:focus {
        border-color: var(--clr-focus-ring);
        box-shadow: 0 0 0 3px rgba(0, 0, 0, .08);
        outline: none
    }

    .nav-link {
        font-size: var(--fs-nav);
        font-weight: var(--fw-nav);
        color: var(--clr-text);
        padding: var(--space-xs) var(--space-sm);
        transition: var(--transition-color)
    }

    .nav-link:hover,
    .nav-link.active {
        color: var(--clr-primary)
    }

    .icon-sm {
        font-size: var(--fs-icon-sm)
    }

    .icon-md {
        font-size: var(--fs-icon-md)
    }

    .icon-lg {
        font-size: var(--fs-icon-lg)
    }

    .badge-custom {
        background-color: #E8F0FB !important;
        display: inline-flex;
        align-items: center;
        font-size: var(--fs-xs);
        font-weight: var(--fw-semibold);
        letter-spacing: var(--ls-wide);
        padding: .5rem .75rem;
        border-radius: var(--radius-pill);
        line-height: 1;
        border: 1px solid #CCE0F7;
    }

    /* Additive Modifiers & Section Specifics */

    .bg-hero {
        background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;
    }

    .bg-light-blue {
        background-color: #eef7ff !important;
    }

    .bg-cta {
        background-color: --clr-accent
    }

    .bg-dark-navy {
        background-color: #E8F0FB;
        color: var(--clr-text-inverse);
        border-radius: var(--radius-xl);
    }

    .bg-light {
        background-color: var(--clr-bg-alt);
    }

    .text-primary {
        color: #0057B8 !important;
    }

    .text-accent {
        color: var(--clr-secondary);
    }

    .text-white-75 {
        color: #000;
        opacity: 75% !important;
    }

    .text-white-35 {
        color: #000;
        opacity: 50%;
    }

    .hero-dashboard-card {
        box-shadow: var(--shadow-lg);
        border-radius: var(--radius-xl);
        overflow: hidden;
        background: white;
    }

    .stat-item {
        border-right: 1px solid #e2e8f0;
        padding: 1.5rem 1rem;
    }

    .stat-item:last-child {
        border-right: none;
    }

    .stat-strip {
        background-color: #f8f9fb;
        border-top: 1px solid #e2e8f0;
        border-bottom: 1px solid #e2e8f0;
    }

    .numbered-list {
        list-style: none;
        counter-reset: pbd-counter;
    }

    .pbd-principles-box {
        background-color: #F7F7F5;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        padding: 2.5rem;
    }

    .list-number {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        background-color: var(--clr-primary);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-weight: var(--fw-bold);
        font-size: 0.875rem;
        position: relative;
        z-index: 2;
    }

    .numbered-list li {
        border: 1px solid #CCE0F7;
        display: flex;
        gap: 1.25rem;
        margin-bottom: 1.5rem !important;
        position: relative;
        background-color: #fff;
        padding: 1rem;
        border-radius: 18px;
        transition: var(--transition-base);
    }

    .numbered-list li.active {
        background-color: #EEF7FF;
        border-color: var(--clr-primary);
    }

    .principles-alert {
        background-color: #eef7ff;
        border: 1px solid #CCE0F7;
        color: var(--clr-primary);
        font-weight: var(--fw-semibold);
        border-radius: 8px;
    }

    .browser-card {
        border: 1px solid var(--clr-border);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-md);
        background: white;
        overflow: hidden;
    }

    .browser-header {
        background: #f1f5f9;
        padding: 0.75rem 1rem;
        display: flex;
        gap: 6px;
        border-bottom: 1px solid var(--clr-border);
    }

    .dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
    }

    .dot-red {
        background: #ff5f56;
    }

    .dot-yellow {
        background: #ffbd2e;
    }

    .dot-green {
        background: #27c93f;
    }

    .checklist-item {
        display: flex;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }

    .checklist-icon {
        color: var(--clr-secondary);
    }

    .quote-box {
        background: white;
        border-radius: var(--radius-lg);
        padding: var(--space-lg);
        box-shadow: var(--shadow-lg);
        position: relative;
    }

    .hero-list i {
        color: var(--clr-primary);
        font-size: 1.25rem;
    }
    .display-5{
        font-size:2.5rem;
    }
</style>

<main class="pbd-page">
    <!-- Hero Section -->
    <section class="hero-section bg-hero py-1" style="background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="badge-custom bg-light text-primary mb-3">
                        Consistent Numbers · 15 Channels · No Code · real time
                    </div>
                    <h1 class="display-5 fw-extrabold mb-4" style="line-height: 1.1;">
                        Salesforce Sticky Sender - <span class="text-primary">Build Trust with Consistent Numbers Every Time</span>
                    </h1>
                    <p class="mb-4 lead text-dark fw-semibold">
                        Shows the Same Number, No Matter Who Presses Send.
                    </p>
                    <div class="hero-list mb-5">
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <p class="mb-0">Keep the originator number consistent across every message, every campaign, every channel. Let your recipients know who to contact upfront — and let Sticky Sender assign numbers automatically without error, across all 15 channels, inside Salesforce.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Sticky Sender">Book a demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App from AgentExchange">Get the App →</a>
                    </div>
                    <div class="d-flex align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <div class="text-warning small"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                            <span class="fw-bold small">4.9/5.0</span>
                        </div>
                        <div class="text-muted extra-small" style="font-size: 12px;">1,200+ AgentExchange reviews</div>
                        <div class="text-muted extra-small" style="font-size: 12px;">60K+ users</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/06/Sticky-Sender-1.webp" alt="Sticky Sender Auto Number Assignment">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <div class="stat-strip py-2">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-md-2 stat-item border-0">
                    <div class="h3 fw-bold text-primary mb-0">15 Channels</div>
                    <div class="text-muted small">Consistent Sender</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">Zero Code</div>
                    <div class="text-muted small">Auto-Assigned Numbers</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">1 SPOC</div>
                    <div class="text-muted small">Per Client, Always</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">real time</div>
                    <div class="text-muted small">Number Updates</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0" style="font-size: 1.5rem;">Any Geo</div>
                    <div class="text-muted small">1 Campaign Send</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Principles Section -->
    <section class="core-principles py-5">
        <div class="container py-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="pbd-principles-box">
                        <div class="text-muted extra-small text-uppercase mb-4 fw-medium" style="letter-spacing: 0.05em; font-size: 10px;">STICKY SENDER WORKFLOW · SALESFORCE-NATIVE · NO CODE</div>
                        <ul class="numbered-list m-0 p-0">
                            <li class="bg-light-blue">
                                <div class="list-number">1</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Assign Account Owners for All Future Communications</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Assign account owners across 15 channels. From that point forward, every message to that contact always comes from the same sender - automatically.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">2</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Update with the Number Last Used to Contact a Client</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Sticky Sender updates automatically with the number last used to contact each client - ensuring continuity even when numbers or agents change over time.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">3</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Verify the Most Up-to-Date Number in real time Before Sending</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Before sending, check campaign messages and verify the most up-to-date number in real time - so every send is accurate, never stale.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">4</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Send Once for All Geographies - Numbers Assigned Automatically</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">You no longer need to run as many campaigns as the geographies you target. Send messages once for all geographies and let Sticky Sender assign numbers automatically without error.</div>
                                </div>
                            </li>
                        </ul>
                        <div class="alert principles-alert mb-0 px-3 py-2 small d-flex align-items-center">
                            <i class="bi bi-check2 me-2"></i> Consistent numbers, zero admin effort, one campaign send for every geography
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="fw-bold mb-4" style="font-size: 2.5rem; line-height: 1.2;">Your System Admins Shouldn't Have to Route Responses Manually - That's Crazy Talk</h2>
                    <p class="text-muted mb-4">Your system admins are busy people. When they get responses to bulk messages and campaigns, they can't be expected to route them individually to different teams. Sticky Sender solves this entirely - assigning account owners for all future communications across 15 channels, updating with the last-used number, and verifying the most up-to-date number in real time before every send.</p>
                    <div class="bg-light-blue p-4 rounded-3 mb-5 border-start border-primary border-4">
                        <div class="fw-semibold mb-2">One send for all your geographies</div>
                        <p class="text-muted small mb-0">Have one number for each country? You'll no longer need to run as many campaigns as the geographies you target. Send messages once for all your geographies and let Sticky Sender assign numbers automatically without error - saving campaign effort and keeping every recipient's experience consistent.</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Sticky Sender">Book a demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App for Sticky Sender">Get the App →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sticky Sender Grid Section -->
    <section class="bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Be Recognized Across All Channels - Every Tool Sticky Sender Provides</h2>
                <p class="section-subtitle mx-auto">Single point of contact, less handoffs, real time number updates, and cross-geographic consistency - all zero-code</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-person-badge" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Single Point of Contact (SPOC)</h4>
                        <p class="card-text small">Multiple sender numbers become hard to keep track of and can disorient the client. Sticky Sender gives every customer one consistent SPOC - eliminating the confusion that washes away all the advantages of a single point of contact.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-globe" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Cross-Geographic Consistency</h4>
                        <p class="card-text small">Use the same geographic phone number and Sender ID every time you call or message a customer. Cross barriers geographically without running separate campaigns for each target geography - send once, Sticky Sender handles the rest.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-arrow-repeat" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">real time Number Updates</h4>
                        <p class="card-text small">Update numbers in real time. Before sending, verify the most up-to-date number for each contact to ensure campaign messages always go out from the right sender - never from a stale or reassigned number.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-code-slash" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Zero Code, Auto-Assigned</h4>
                        <p class="card-text small">Setting up message routing traditionally takes extensive coding each time. Sticky Sender is well-parameterized and covers all your criteria for assigning an account manager or service agent to a response - no code required.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Browser UI + Text Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 m-0 p-0">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/06/Sticky-Sender-3.webp" alt="RECALL VALUE & BRAND RECOGNITION">
                </div>
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-2" style="letter-spacing: 0.06em; font-size: 11px;">RECALL VALUE & BRAND RECOGNITION</div>
                    <h2 class="section-title mb-4">Your Business Isn't Shady - Then Why Look It?</h2>
                    <p class="opacity-75">Multiple sender numbers become hard to keep track of and can disorient the client. This washes away all the advantages that come with a single point of contact. Studies show that customers around the world respond to numbers that stay the same — and Sticky Sender automates that consistency at zero-code effort.</p>
                    <div class="p-4 border-start border-primary border-4 bg-light mb-4 text-muted">
                        Use the same geographic phone number and Sender ID every time you call or message a customer. Fix your Sender IDs. Less handoffs and routing, build trust and brand recall, update numbers in real time, and cross barriers geographically — all from within your existing Salesforce setup, zero additional coding.
                    </div>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md">Book a demo <i class="bi bi-arrow-right icon-sm"></i></a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4">Get the App <i class="bi bi-arrow-right icon-sm"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industry / Use Case Section -->
    <section class="bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Sticky Sender for Every Team & Every Geography</h2>
                <p class="section-subtitle">From offshore sales teams dealing with trust deficits to enterprise teams running multi-geo campaigns - consistent sender numbers solve a problem every customer-facing team has.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-globe2" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Multi-Geography Campaigns</h4>
                        <p class="card-text small">Send once for all geographies and let Sticky Sender assign the last-used local number per recipient automatically. No more running separate campaigns for each country you target - one send, right number, every time.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-building" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Offshore & Remote Sales Teams</h4>
                        <p class="card-text small">Bridge the trust deficit for offshore teams. An overseas number can spook potential customers. Sticky Sender ensures recipients always see a familiar, geographic Sender ID - removing a major trust barrier before the first word is read.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-person-lines-fill" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Account Manager Continuity</h4>
                        <p class="card-text small">Assign account owners for all future communications across 15 channels. When an account manager changes, Sticky Sender updates with the last-used number, so continuity is maintained without client confusion or trust disruption.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-megaphone" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Bulk Campaign Response Routing</h4>
                        <p class="card-text small">When bulk messages go out, responses come back to the right place automatically. No admin sorting, no manual assignment - Sticky Sender routes every reply to the correct account manager or service agent without intervention.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-broadcast" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">15-Channel Brand Consistency</h4>
                        <p class="card-text small">Be recognized across all 15 channels with a single consistent Sender ID. Multiple sender numbers disorient clients and remove the advantages of a single point of contact. Sticky Sender eliminates the problem across every channel at once.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-shield-check" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">real time Sender Verification</h4>
                        <p class="card-text small">Before sending campaign messages, verify the most up-to-date number in real time. Catch stale or reassigned numbers before they cause confusion - ensuring every send goes out from the number the recipient already trusts.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Checklist Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="section-label">EXPERIENCE TRUE NUMBER CONSISTENCY</div>
                    <h2 class="section-title">Inconsistent Sender Numbers Don't Just Confuse Customers - They Destroy the Trust You've Already Built</h2>
                    <p class="mb-4 text-muted">Every time a customer sees a different number, they ask themselves: who is this? Every unfamiliar number is a hesitation. Every hesitation is a missed reply. Multiple sender numbers across a team become impossible to manage, erode brand recall, and create the kind of confusion that no amount of great messaging can overcome. Sticky Sender eliminates the problem at the source - automatically, across every channel, with zero code.</p>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Sticky Sender">Book a demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App for Sticky Sender">Get the App →</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-dark-navy p-5 rounded-xl">
                        <div class="text-white-35 small mb-4 text-uppercase">Everything 360 SMS Sticky Sender brings to the table</div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Same Number No Matter Who Sends<span class="text-white-75 small fw-normal"> - Shows the same originator number regardless of which agent or team presses Send</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Consistent Across 15 Channels<span class="text-white-75 small fw-normal"> - Assign account owners for all future communications across all supported channels</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Zero Code Setup<span class="text-white-75 small fw-normal"> - Well-parameterized coverage of all criteria for assigning account managers - no developer required</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Single Campaign for All Geos<span class="text-white-75 small fw-normal"> - Send once, Sticky Sender assigns the right geographic number per recipient automatically</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">real time Number Verification<span class="text-white-75 small fw-normal"> - Verify the most up-to-date sender number before every campaign send - never use a stale number again</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Auto Response Routing<span class="text-white-75 small fw-normal"> - Replies automatically routed back to the right account manager - no admin sorting, no handoff overhead</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Trust Problem & Quote Section -->
    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-3" style="letter-spacing: 0.06em; font-size: 11px;">STOP LOOKING LIKE YOU DON'T KNOW WHAT YOU'RE DOING</div>
                    <h2 class="section-title">A Different Number Every Time Is Not a Small Operational Detail - It's a Trust Problem</h2>
                    <p class="text-muted">Customers remember numbers. They save them. They screen calls based on them. When your messages come from a different number every time - because different agents pressed Send, or because you ran separate campaigns per country - your brand looks fragmented, your team looks disorganized, and the customer questions whether you're worth responding to. Sticky Sender makes that problem structurally impossible.</p>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <span class="badge-custom border text-primary">15 Channels</span>
                        <span class="badge-custom border text-primary">Zero Code</span>
                        <span class="badge-custom border text-primary">real time Verification</span>
                        <span class="badge-custom border text-primary">Auto Response Routing</span>
                        <span class="badge-custom border text-primary">Geo Number Assignment</span>
                        <span class="badge-custom border text-primary">1 Campaign Send</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="quote-box">
                        <h4 class="fw-bold mb-4">"Shows the same number, <span class="text-primary">no matter who presses 'Send'</span> - across every channel, inside Salesforce."</h4>
                        <hr class="my-3 border-1 border-dark">
                        <p class="text-muted small">Studies show that customers around the world respond to numbers that stay the same. Sticky Sender automates sender consistency across 15 channels - assigning account owners, updating with the last-used number, verifying in real time before every send, and routing replies back to the right person automatically - all with zero code inside Salesforce.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



</main>

<?php get_footer('sms'); ?>