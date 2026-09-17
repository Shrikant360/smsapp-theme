<?php
/* Template Name: Feature CTI Call */
?>

<?php get_header('sms'); ?>

<style>
    :root {
        --font-heading: 'Plus Jakarta Sans', sans-serif;
        --font-body: 'Plus Jakarta Sans', sans-serif;
        --fs-h1: clamp(2.5rem, 5vw, 3rem);
        --fs-h2: clamp(1.75rem, 4vw, 2.25rem);
        --fs-h3: clamp(1.5rem, 3vw, 1.75rem);
        --fs-h4: clamp(1.25rem, 2.5vw, 1.5rem);
        --fs-h5: clamp(1.125rem, 2vw, 1.25rem);
        --fs-h6: clamp(1rem, 1.8vw, 1.125rem);
        --fs-lead: clamp(1.125rem, 2vw, 1.375rem);
        --fs-body: clamp(0.875rem, 1vw, 1rem);
        --fs-sm: clamp(0.875rem, 1.5vw, 1rem);
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

    /* Manage Conversations Section Styles */
    .manage-conv-section {
        background-color: #f8f9fa;
        padding: 80px 0;
    }

    .manage-conv-card {
        background: #ffffff;
        border: none;
        border-radius: 16px;
        padding: 40px 30px;
        height: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
    }

    .manage-conv-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.06);
    }

    .manage-conv-icon {
        font-size: 24px;
        color: #334155;
        margin-bottom: 25px;
        display: inline-block;
    }

    .manage-conv-title {
        font-size: 18px;
        font-weight: 700;
        color: #1e293b;
        margin-bottom: 15px;
        line-height: 1.4;
    }

    .manage-conv-text {
        font-size: 14px;
        color: #64748b;
        line-height: 1.6;
        margin-bottom: 0;
    }

    /* Put Them at Ease Section Styles */
    .put-ease-section {
        background-color: #0057B8;
        padding: 50px 0;
        color: #ffffff;
    }

    .script-box {
        background-color: #1968BF;
        border-radius: 16px;
        padding: 40px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
    }

    .script-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #ffffff;
        color: #0057B8;
        padding: 6px 15px;
        border-radius: 4px;
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        margin-bottom: 30px;
    }

    .script-quote {
        font-size: 18px;
        font-weight: 500;
        line-height: 1.6;
        margin-bottom: 35px;
        color: #ffffff;
    }

    .script-row {
        background-color: #4182CA;
        border-radius: 8px;
        padding: 12px 18px;
        display: flex;
        align-items: center;
        gap: 20px;
        margin-bottom: 12px;
    }

    .script-row:last-child {
        margin-bottom: 0;
    }

    .script-number {
        width: 32px;
        height: 32px;
        background: #679BD5;
        border-radius: 4px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        font-size: 13px;
        flex-shrink: 0;
        color: #ffffff;
    }

    .script-row-text {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 0;
    }
</style>

<main class="pbd-page">
    <!-- Hero Section -->
    <section class="hero-section bg-hero py-1" style="background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="badge-custom bg-light text-primary mb-3">
                        Programmable Call Forwarding · Auto Voice Responders · Real Time ACD
                    </div>
                    <h1 class="display-5 fw-extrabold mb-4" style="line-height: 1.1;">
                        Salesforce CTI Call Auto-Forwarding, <span class="text-primary">Inside 360 SMS App</span>
                    </h1>
                    <p class="mb-4 lead text-dark fw-semibold">
                        Programmable Call Forwarding, Auto Voice Responders, and Real Time Agent Availability - All Inside Salesforce.
                    </p>
                    <div class="hero-list mb-5">
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <i class="bi bi-check-circle-fill"></i>
                            <p class="mb-0">Don't lose opportunities when agents are on break, vacation, or in staggered shifts.</p>
                        </div>
                        <div class="d-flex align-items-start gap-3">
                            <i class="bi bi-check-circle-fill"></i>
                            <p class="mb-0">Auto-forward calls to up to 9 numbers and manage availability through real time ACD routing - natively in Salesforce.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Get a Demo">Get a Demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Speak to a CTI Specialist">Speak to a CTI Specialist →</a>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/09/div.sc-mock-3.webp" alt="CTI Call Auto-Forwarding Dashboard">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <div class="stat-strip py-2">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-md-2 stat-item border-0">
                    <div class="h3 fw-bold text-primary mb-0">9</div>
                    <div class="text-muted small">Forward-to Numbers</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">3</div>
                    <div class="text-muted small">Agent Activity Modes</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">Auto</div>
                    <div class="text-muted small">Voice Responder</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">Real Time</div>
                    <div class="text-muted small">ACD Queue Updates</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0" style="font-size: 1.5rem;">Zero</div>
                    <div class="text-muted small">Missed Opportunities</div>
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
                        <div class="text-muted extra-small text-uppercase mb-4 fw-medium" style="letter-spacing: 0.05em; font-size: 10px;">PROGRAMMABLE CALL FORWARDING • SALESFORCE-NATIVE</div>
                        <ul class="numbered-list m-0 p-0">
                            <li class="bg-light-blue">
                                <div class="list-number">1</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Agent Marks Status as Away</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">When an agent marks themselves as Away in the calling queue, the system detects the status change in real time and activates the forwarding configuration.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">2</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Call Is Forwarded to Up to 9 Numbers</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">The call is automatically forwarded to up to 9 configured phone numbers in sequence, ensuring the call reaches an available agent before falling to voicemail.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">3</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Auto Voice Responder Plays on Rejection</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">If lines are busy, closed, or all agents are unavailable, the auto voice responder informs the caller and can offer IVR options to schedule a callback or request a call during local business hours.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">4</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">ACD Routes Calls Only to Online Agents</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">The calling queue updates in real time with agent activity modes. Calls are only routed to Online agents, reducing hold times, wait times, and poor caller experience.</div>
                                </div>
                            </li>
                        </ul>
                        <div class="alert principles-alert mb-0 px-3 py-2 small d-flex align-items-center">
                            <i class="bi bi-check2 me-2"></i> No missed calls, no irate callers, no lost high-value accounts - availability managed automatically
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="fw-bold mb-4" style="font-size: 2.5rem; line-height: 1.2;">Manage Availability for Customer-Facing Calls - Automatically</h2>
                    <p class="text-muted mb-4">Reduce poor caller experiences, prevent calls from landing on unavailable agents, and make sure important inquiries still reach the right person. Automatically forward calls to another account manager, improve team throughput, and keep callers informed even when no agent is immediately available.</p>
                    <div class="bg-light-blue p-4 rounded-3 mb-5 border-start border-primary border-4">
                        <div class="fw-semibold mb-2">Avoid Poor Caller Experience and Don't Miss Inquiries from High-Value Accounts</div>
                        <p class="text-muted small mb-0">Forward the call to another account manager automatically, increase throughput, and keep every caller informed so they never feel ignored - even when no agent is available right now.</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Get a Demo">Get a Demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Speak to a CTI Specialist">Speak to a CTI Specialist →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Manage Conversations -->
    <section class="manage-conv-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3" style="font-size: 32px; color: #1e293b;">Don't Miss Anything - Manage and Automate Conversations When Agents Are Away</h2>
                <p class="text-muted mx-auto" style="max-width: 800px; font-size: 16px;">Call forwarding, auto voicemail, agent availability modes, and ACD distribution - all configurable inside Salesforce</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="manage-conv-card">
                        <i class="bi bi-telephone-outbound manage-conv-icon" style="color: var(--clr-primary);"></i>
                        <h4 class="manage-conv-title">Programmable Call Forwarding</h4>
                        <p class="manage-conv-text">Choose where calls go when agents mark their activity status as Away. Forward calls to up to 9 phone numbers in sequence so every inbound call has a path to an available agent before reaching voicemail.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="manage-conv-card">
                        <i class="bi bi-mic manage-conv-icon" style="color: var(--clr-primary);"></i>
                        <h4 class="manage-conv-title">Auto Voice Responders</h4>
                        <p class="manage-conv-text">Let callers know if lines are busy, closed, or if they should expect a callback. Trigger a custom voicemail to confirm acknowledgement of the call - reducing caller anxiety and preventing irate customers from feeling ignored.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="manage-conv-card">
                        <i class="bi bi-person manage-conv-icon" style="color: var(--clr-primary);"></i>
                        <h4 class="manage-conv-title">'Away' Status for Agents</h4>
                        <p class="manage-conv-text">Agents set their availability as Online, Away, or Offline. The calling queue updates in real time. Calls are only routed to Online agents via ACD - so no call ever lands on an unavailable agent during breaks or shift gaps.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="manage-conv-card">
                        <i class="bi bi-gear manage-conv-icon" style="color: var(--clr-primary);"></i>
                        <h4 class="manage-conv-title">ACD - Automatic Call Distribution</h4>
                        <p class="manage-conv-text">Modes are updated in the calling queue in real time to manage and distribute calls through Automatic Call Distribution. Reduce hold-ups, wait times, and poor caller experience for every inbound call across all shift configurations.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Put Callers at Ease -->
    <section class="put-ease-section">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4 text-light"; line-height: 1.2;">Put Callers at Ease by Letting Them Know They've Been Heard</h2>
                    <p class="mb-0 text-light" style="font-size: 16px; opacity: 0.9; line-height: 1.6;">
                        This automated voicemail plays when a call is rejected or unanswered. Use it to reduce customer anxiety and guide callers toward the next best step. A caller who hears an acknowledgment and receives a clear option is more likely to stay engaged.
                    </p>
                </div>
                <div class="col-lg-6">
                    <div class="script-box">
                        <div class="script-badge">
                            <i class="bi bi-pencil-square"></i> SAMPLE AUTO VOICEMAIL SCRIPT
                        </div>
                        <p class="script-quote">
                            "This is Agent Mike from 360. We are sorry we missed your call. We're not in right now, but we'll get back to you."
                        </p>
                        <div class="script-row">
                            <div class="script-number">9</div>
                            <p class="script-row-text">Press 9 on the IVR to schedule a callback</p>
                        </div>
                        <div class="script-row">
                            <div class="script-number">0</div>
                            <p class="script-row-text">Press 0 if you want us to call you during daylight hours in your time-zone</p>
                        </div>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/09/div.sc-mock-1-2.webp" alt="3 Agent Activity Modes">
                </div>
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-2" style="letter-spacing: 0.06em; font-size: 11px;">3 AGENT ACTIVITY MODES</div>
                    <h2 class="section-title mb-4">Online, Away, Offline - Real Time Queue Management for Every Shift Configuration</h2>
                    <p class="opacity-75">Three activity modes - Online, Away, and Offline - are updated in the calling queue in real time to manage and distribute calls through ACD. Calls are only routed to Online agents to reduce hold-ups and wait times, ensuring the right agent receives every call at the right moment.</p>
                    <div class="p-4 border-start border-primary border-4 bg-light mb-4 text-muted">
                        Manage availability for call center agents during staggered shift timings and breaks. Avoid poor caller experience and prevent calls from landing on unavailable agents. Forward calls to another account manager automatically when an agent is Away - and increase throughput across the entire team without adding headcount.
                    </div>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md">Get a Demo <i class="bi bi-arrow-right icon-sm"></i></a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4">Speak to a CTI Specialist <i class="bi bi-arrow-right icon-sm"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Use Case Section -->
    <section class="bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">CTI Call Auto-Forwarding for Every Team &amp; Shift Configuration</h2>
                <p class="section-subtitle">From call center agents on staggered shifts to account managers handling high-value inbound - auto-forwarding and ACD keep every call covered.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-telephone-inbound" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Call Center Agent Management</h4>
                        <p class="card-text small">Manage availability for call center agents during staggered shift timings and breaks. Calls route only to Online agents via ACD, eliminating wait times and preventing calls from landing on agents who are unavailable.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-building" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">High-Value Account Inbound</h4>
                        <p class="card-text small">Don't miss inquiries or tickets from high-value accounts. When a primary account manager is Away, forward the call to another account manager automatically - keeping key relationships protected at all times.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-moon-stars" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">After-Hours &amp; Closed Lines</h4>
                        <p class="card-text small">Let callers know when lines are closed and give them IVR options to schedule a callback or request a call during their timezone's daylight hours - turning a missed call into a booked interaction.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-cup-hot" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Break &amp; Vacation Coverage</h4>
                        <p class="card-text small">Avoid missed calls and lost opportunities when agents are on break or on vacation. Auto-forwarding pushes calls through up to 9 configured numbers before voicemail fires - maximizing every inbound opportunity.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-graph-up" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Throughput &amp; Queue Efficiency</h4>
                        <p class="card-text small">Increase throughput by distributing calls intelligently through ACD based on real time agent availability. Reduce hold-ups and cut wait times across the entire calling queue without adding agents or changing shift structures.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-emoji-smile" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Caller Anxiety Reduction</h4>
                        <p class="card-text small">No one likes hearing dead silence after a missed call. Auto voice responders acknowledge every caller and give them next-step IVR options - reducing irate callers and improving overall customer experience.</p>
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
                    <div class="section-label">PROTECT EVERY INBOUND OPPORTUNITY</div>
                    <h2 class="section-title">A Missed Call from a High-Value Account Is More Than an Operational Issue</h2>
                    <p class="mb-4 text-muted">Every call that lands on an unavailable agent, every caller who hears dead silence on rejection, every high-value account that doesn't get a callback - these are not small operational hiccups. They are revenue events. 360 SMS CTI Call Auto-Forwarding is built to ensure that no call is ever truly missed - it is only rerouted, acknowledged, and actioned.</p>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Get a Demo">Get a Demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Speak to a CTI Specialist">Speak to a CTI Specialist →</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-dark-navy p-5 rounded-xl">
                        <div class="text-white-35 small mb-4 text-uppercase">Everything CTI Call Auto-Forwarding Brings to the Table</div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Forward to Up to 9 Numbers<span class="text-white-75 small fw-normal"> - Forward calls through a chain of up to 9 numbers when agents mark status as Away</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Auto Voice Responder<span class="text-white-75 small fw-normal"> - Automated voicemail on rejection with custom script and IVR options for callbacks</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">3 Agent Activity Modes<span class="text-white-75 small fw-normal"> - Online, Away, and Offline - updated in ACD queue in real time</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">ACD Routing<span class="text-white-75 small fw-normal"> - Calls distributed only to Online agents - reduces hold-ups, wait times, and poor caller experience</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Staggered Shift Coverage<span class="text-white-75 small fw-normal"> - Manage agent availability during breaks, shift transitions, and vacation windows</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Salesforce &amp; Texting in One App<span class="text-white-75 small fw-normal"> - The most versatile Salesforce call and messaging automation in one place</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Missed Call & Quote Section -->
    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-3" style="letter-spacing: 0.06em; font-size: 11px;">KEEP EVERY INBOUND CALL MOVING</div>
                    <h2 class="section-title">A Call That Goes Unanswered Is Not Just a Bad Experience - It's a Lead That Called Your Competitor Next</h2>
                    <p class="text-muted">High-value accounts call when they have an immediate need. If that call lands on an unavailable agent with no forwarding chain and no acknowledgement voicemail, the next call they make is to someone else. CTI Call Auto-Forwarding ensures every inbound call has a path forward - and every caller knows they have been heard, even if no one answered.</p>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <span class="badge-custom border text-primary">9-Number Forward Chain</span>
                        <span class="badge-custom border text-primary">Auto Voice Responder</span>
                        <span class="badge-custom border text-primary">3 Activity Modes</span>
                        <span class="badge-custom border text-primary">ACD Routing</span>
                        <span class="badge-custom border text-primary">Shift Coverage</span>
                        <span class="badge-custom border text-primary">IVR Callbacks</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="quote-box">
                        <h4 class="fw-bold mb-4">"Don't lose opportunity when agents are on their break or <span class="text-primary">vacation.</span>"</h4>
                        <hr class="my-3 border-1 border-dark">
                        <p class="text-muted small">360 SMS CTI Call Auto-Forwarding lets you choose who the call goes to when agents mark their activity status as Away, push calls to up to 9 phone numbers, and let callers know via automated voicemail if lines are busy, closed, or if they should expect a callback - all configurable inside Salesforce alongside your existing texting workflows.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer('sms'); ?>