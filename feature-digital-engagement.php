<?php
/* Template Name: Feature Digital Engagement */
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
        height: 100%
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
    @media (min-width: 1200px) {
    .display-5 {
            font-size: 2.2rem;
        }
    }
</style>

<main class="pbd-page">
    <!-- Hero Section -->
    <section class="hero-section bg-hero py-1" style="background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;"> 
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="badge-custom bg-light text-primary mb-3">
                        Salesforce Digital Engagement on Steroids
                    </div>
                    <h1 class="display-5 fw-extrabold mb-4" style="line-height: 1.1;">
                        Accelerate Salesforce Digital<br/> Engagement with <span class="text-primary">Point-and-Click Automation</span>
                    </h1>
                    <p class="mb-4 lead text-dark fw-semibold">
                        Essential automation for messaging - no code, no learning curve. Built natively inside Salesforce.
                    </p>
                    <div class="hero-list mb-5">
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <p class="mb-0">Combine DE + 360 SMS to enable messaging over more clouds and channels. Get 8 channels, 4 more Salesforce Clouds, and bring your own number.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="#contact_form" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Digital Engagement on Steroids">Book a demo </a>
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" class="btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App from AgentExchange">Get the App </a>
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
                    <img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/06/Digital-Engagement-1.webp" alt="Digital Engagement on Steroids DEOS Dashboard">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <div class="stat-strip py-2">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-md-2 stat-item border-0">
                    <div class="h3 fw-bold text-primary mb-0">8</div>
                    <div class="text-muted small">Combined Channels</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">4</div>
                    <div class="text-muted small">More Salesforce Clouds</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">BYON</div>
                    <div class="text-muted small">Bring Your Own Number</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">10+ years</div>
                    <div class="text-muted small">Salesforce Texting</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0" style="font-size: 1.5rem;">5★</div>
                    <div class="text-muted small">AgentExchange Rating</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Principles Section -->
    <section class="core-principles py-5" style="background-color:#fff;">
        <div class="container py-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="pbd-principles-box">
                        <div class="text-muted extra-small text-uppercase mb-4 fw-medium" style="letter-spacing: 0.05em; font-size: 10px;">WHAT DE + 360 SMS UNLOCKS - STEP BY STEP</div>
                        <ul class="numbered-list m-0 p-0">
                            <li class="bg-light-blue">
                                <div class="list-number">1</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">2 More Communication Channels + BYON</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Add Ringless Voicemail and Click-to-dial Telephony for existing Digital Engagement numbers. Bring Your Own Number and keep the numbers your customers already know.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">2</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">4 More Salesforce Clouds</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Sales Cloud, Service Cloud, Marketing Cloud, and Pardot - wide open. Digital Engagement restricted to Service Cloud gets extended across the full Salesforce ecosystem.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">3</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Look Beyond the Service Cloud Console</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">DE is restricted to Omni-Channel and the Service Cloud console - 360 SMS removes that limit, enabling messaging across any standard or custom Salesforce object.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">4</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Point-and-Click Automation for Messaging</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Distill a year's worth of customizations down to minutes of powerful DIY configuration using a mature selection of parameters and several pre-installed capabilities.</div>
                                </div>
                            </li>
                        </ul>
                        <div class="alert principles-alert mb-0 px-3 py-2 small d-flex align-items-center">
                            <i class="bi bi-check2 me-2"></i> 8 channels · 4 Salesforce Clouds · BYON · No code · Active from day one
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="fw-bold mb-4" style="font-size: 2.5rem; line-height: 1.2;">Combine DE + 360 SMS </br> Enable Messaging Across More Clouds and Channels</h2>
                    <p class="text-muted mb-4">Combining Digital Engagement with 360 SMS brings together 8 channels and also lets you bring your own number. Businesses get immediate, out-of-the-box engagement features for Sales Cloud users that work on all existing Digital Engagement channels.</p>
                    <div class="bg-light-blue p-4 rounded-3 mb-5 border-start border-primary border-4">
                        <div class="fw-semibold mb-2">Since DE is restricted to Omni-Channel and the Service Cloud console</div>
                        <p class="text-muted small mb-0">Combining 360 SMS with Digital Engagement is straightforward and lets you access all 360 SMS innovations across any standard or custom Salesforce object - with pre-installed capabilities active from day one.</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="#contact_form" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Digital Engagement">Book a demo </a>
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" class="btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App for Digital Engagement">Get the App </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <style>
    body {
      background: #f5f6f7;
      font-family: Arial, sans-serif;
    }

    .engagement-section {
      padding: 60px 20px;
      text-align: center;
    }

    .engagement-title {
      font-size: 26px;
      font-weight: 600;
      margin-bottom: 10px;
      color: #222;
    }

    .engagement-subtitle {
      font-size: 14px;
      color: #777;
      margin-bottom: 40px;
    }

    .engagement-card {
      background: #fff;
      border-radius: 12px;
      padding: 20px;
      text-align: left;
      border: 1px solid #eee;
      transition: all 0.3s ease;
      height: 100%;
    }

    .engagement-card:hover {
      box-shadow: 0 6px 20px rgba(0,0,0,0.08);
      transform: translateY(-4px);
    }

    .engagement-icon {
      font-size: 22px;
      margin-bottom: 10px;
      color: #444;
    }

    .engagement-card h6 {
      font-weight: 600;
      font-size: 15px;
      margin-bottom: 8px;
    }

    .engagement-card p {
      font-size: 13px;
      color: #666;
      margin: 0;
      line-height: 1.5;
    }

    /* Mobile spacing */
    @media (max-width: 768px) {
      .engagement-title {
        font-size: 20px;
      }
    }
  </style>

<section class="engagement-section" style="border-bottom:1px solid #E2E2E2;">
  <div class="container">

    <!-- Heading -->
    <h2 class="engagement-title">
      Get the Most Out of Salesforce Digital Engagement
    </h2>
    <p class="engagement-subtitle">
      Thoughtful out-of-the-box features, parameters, and powerful DIY automation for Salesforce texting across any standard or custom objects
    </p>

    <!-- Cards -->
    <div class="row g-4">

      <!-- Card 1 -->
      <div class="col-md-6 col-12">
        <div class="engagement-card">
          <div class="engagement-icon"><i class="bi bi-chat-dots"></i></div>
          <h6>Texting Enabled Everywhere</h6>
          <p>
            Users can access texting across Salesforce objects and extend DE capabilities into Sales Cloud, Service Cloud, Marketing Cloud, and Pardot.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-6 col-12">
        <div class="engagement-card">
          <div class="engagement-icon"><i class="bi bi-gear"></i></div>
          <h6>Thoughtful, Mature Out-of-the-box Text Automation</h6>
          <p>
            360 SMS helps you distill a year's worth of customizations down to minutes of powerful DIY configuration that uses a mature selection of parameters and several pre-installed capabilities.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-6 col-12">
        <div class="engagement-card">
          <div class="engagement-icon"><i class="bi bi-trophy"></i></div>
          <h6>Client Relationships, Exceptional Support</h6>
          <p>
            360 SMS has specialized in Salesforce texting for 10+ years, backed by strong AgentExchange ratings and experienced support.
          </p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-6 col-12">
        <div class="engagement-card">
          <div class="engagement-icon"><i class="bi bi-phone"></i></div>
          <h6>Mobile App for Digital Engagement</h6>
          <p>
            On its own, Salesforce Digital Engagement has limited mobile flexibility. With DEOS, teams can access combined capabilities of DE and 360 SMS on the go through the Salesforce mobile app.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

    <!-- Browser UI + Text Section -->
    <section class="py-5" style="border-bottom:1px solid #E2E2E2;">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 m-0 p-0">
                    <img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/06/Digital-Engagement-3.webp" alt="DEOS Pre-Installed Capabilities Configuration">
                </div>
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-2" style="letter-spacing: 0.06em; font-size: 11px;">EXTEND DE WITH PROVEN OUT-OF-THE-BOX CAPABILITIES</div>
                    <h2 class="section-title mb-4">Pre-Installed Capabilities - Active from Day One</h2>
                    <p class="opacity-75">360 SMS Keyword Processing Automation works on Einstein Bots and Process Builders. Phone Number Management, Automatic Response Assignment, and Engagement Reports are all included out of the box. Drip Campaigns, Voicemail, After Hours Scheduling, Time-zone Management, Message Signatures, URL-click Tracking, and Guided Conversations are pre-installed and ready.</p>
                    <div class="p-4 border-start border-primary border-4 bg-light mb-4 text-muted">
                        Templates & Batch Texting · Einstein Bots & Process Builders · DIY Conversation Trees (iText) · Engagement Reports & Analytics · Incoming Alerts & Notifications - all configured point-and-click, zero code.
                    </div>
                    <div class="d-flex gap-3">
                        <a href="#contact_form" class="btn btn-primary btn-md">Book a demo <i class="bi bi-arrow-right icon-sm"></i></a>
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" class="btn btn-outline-light btn-md text-dark border px-4">Get the App <i class="bi bi-arrow-right icon-sm"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
     <style>
    body {
      background: #f4f5f7;
      font-family: Arial, sans-serif;
    }

    .conv-section {
      padding: 60px 20px;
    }

    .conv-label {
      font-size: 12px;
      font-weight: 600;
      color: #1e6bd6;
      text-transform: uppercase;
      margin-bottom: 10px;
    }

    .conv-title {
      font-size: 28px;
      font-weight: 600;
      margin-bottom: 10px;
      color: #222;
    }

    .conv-subtitle {
      font-size: 14px;
      color: #666;
      margin-bottom: 40px;
    }

    .conv-card {
      background: #fff;
      border-radius: 12px;
      padding: 20px;
      border: 1px solid #e5e7eb;
      height: 100%;
    }

    .conv-card h6 {
      font-size: 13px;
      font-weight: 700;
      color: #1e6bd6;
      margin-bottom: 15px;
      text-transform: uppercase;
    }

    .conv-list {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .conv-list li {
      font-size: 13px;
      color: #444;
      padding: 8px 0;
      border-bottom: 1px solid #f0f0f0;
      position: relative;
      padding-left: 18px;
    }

    .conv-list li:last-child {
      border-bottom: none;
    }

    .conv-list li::before {
      content: "•";
      color: #1e6bd6;
      position: absolute;
      left: 0;
      font-size: 18px;
      top: 2px;
    }

    /* Bottom cards */
    .mini-card {
      background: #fff;
      border-radius: 10px;
      padding: 15px;
      border: 1px solid #e5e7eb;
      height: 100%;
    }

    .mini-label {
      display: inline-block;
      font-size: 10px;
      background: #e8f0ff;
      color: #1e6bd6;
      padding: 4px 8px;
      border-radius: 6px;
      margin-bottom: 8px;
      font-weight: 600;
      text-transform: uppercase;
    }

    .mini-card h6 {
      font-size: 14px;
      font-weight: 600;
      margin-bottom: 5px;
    }

    .mini-card p {
      font-size: 12px;
      color: #666;
      margin: 0;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .conv-title {
        font-size: 22px;
      }
    }
  </style>
<section class="conv-section">
  <div class="container">

    <!-- Header -->
    <div class="conv-label">Conversational Experience</div>
    <div class="conv-title">A More Complete, Interactive Conversational Experience</div>
    <div class="conv-subtitle">
      For Salesforce Digital Engagement SMS operations - the full feature set that DE alone doesn't provide.
    </div>

    <!-- Top Cards -->
    <div class="row g-4 mb-4">

      <!-- Left Card -->
      <div class="col-lg-6 col-12">
        <div class="conv-card">
          <h6>BARE ESSENTIALS + TEMPLATES</h6>
          <ul class="conv-list">
            <li>Drip Campaigns</li>
            <li>Voicemail</li>
            <li>After Hours Scheduling</li>
            <li>Time-Zone Management</li>
            <li>Message Signatures</li>
            <li>URL-click Tracking</li>
            <li>Guided Conversations</li>
            <li>Template Management</li>
            <li>360 SMS Batch Texting</li>
            <li>Keyword Processing Automation on Einstein Bots and Process Builders</li>
            <li>DIY Conversation Trees and Surveys (Text by 360 SMS)</li>
          </ul>
        </div>
      </div>

      <!-- Right Card -->
      <div class="col-lg-6 col-12">
        <div class="conv-card">
          <h6>ENGAGEMENT AND REPORTING</h6>
          <ul class="conv-list">
            <li>Incoming Alerts</li>
            <li>Notifications</li>
            <li>Phone Number Management</li>
            <li>Automatic Response Assignment</li>
            <li>Engagement Reports</li>
            <li>Analytics</li>
            <li>Engagement History</li>
          </ul>
        </div>
      </div>

    </div>

    <!-- Bottom Cards -->
    <div class="row g-4">

      <div class="col-md-4 col-12">
        <div class="mini-card">
          <div class="mini-label">Conversation Manager</div>
          <h6>Single-Window Productivity</h6>
          <p>
            Unified editing, Single Window productivity, Filtered List Views. Faster response processing to select and nurture custom audiences.
          </p>
        </div>
      </div>

      <div class="col-md-4 col-12">
        <div class="mini-card">
          <div class="mini-label">Unknown Number Management</div>
          <h6>Automated Record Creation</h6>
          <p>
            Automated Record Creation, 360 Degree Views. Reduced redundancy - no more manual handling of unrecognized inbound numbers.
          </p>
        </div>
      </div>

      <div class="col-md-4 col-12">
        <div class="mini-card">
          <div class="mini-label">Taggable Lists</div>
          <h6>Color-coded Priority Management</h6>
          <p>
            Color-coded incoming alerts for managing longer conversations with configurable priorities - see what needs attention first, instantly.
          </p>
        </div>
      </div>

    </div>

  </div>
</section>

    <!-- Checklist Section -->
    <section class="py-5" style="background-color: #fff;">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="section-label">DIGITAL ENGAGEMENT, DONE RIGHT</div>
                    <h2 class="section-title">No Code, No Einstein Dependency, No Developers - 8 Channels, 4 Clouds, BYON</h2>
                    <p class="mb-4 text-muted">A DE and 360 SMS combination gets businesses to plan their digital engagement strategies faster. An intuitive, highly optimized interface for the combined channels of DE and 360 SMS eliminates any issues with training time, productivity, and adoption. Enable pre-built automation essentials, fill out any gaps in campaign management, and build custom capabilities on top of Salesforce Digital Engagement.</p>
                    <div class="d-flex gap-3">
                        <a href="#contact_form" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Digital Engagement">Book a demo </a>
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" class="btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App for Digital Engagement">Get the App </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-dark-navy p-5 rounded-xl">
                        <div class="text-white-35 small mb-4 text-uppercase">Everything DEOS brings to the table</div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Faster Route to Digital Strategy<span class="text-white-75 small fw-normal"> - Plan and execute digital engagement strategies without waiting months for custom builds</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">No Learning Curve<span class="text-white-75 small fw-normal"> - Intuitive, highly optimized interface eliminates training time, productivity loss, and adoption issues</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Digital Engagement, Done Right<span class="text-white-75 small fw-normal"> - Enable pre-built automation essentials and fill gaps in campaign management</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">All 4 Clouds Unlocked<span class="text-white-75 small fw-normal"> - Sales Cloud, Service Cloud, Marketing Cloud, and Pardot - full capabilities across all</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">10+ Years of Salesforce Texting<span class="text-white-75 small fw-normal"> - Proven platform backed by strong AgentExchange credibility and experienced support</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Salesforce Mobile App<span class="text-white-75 small fw-normal"> - Access combined DE + 360 SMS capabilities on the go - something DE alone can't do</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blue CTA Banner -->
    <div class="bg-cta py-5 text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h6 class="text-white mb-2">Digital Engagement, Done Right - 8 Channels, 4 Clouds, BYON, Point-and-Click Automation Inside Salesforce</h6>
                    <p class="mb-0 text-white">Book a demo • Get the App • 60K+ teams on Salesforce • 1,200+ AgentExchange reviews</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="#contact_form" class="btn btn-light btn-md text-primary me-2">Book a demo</a>
                    <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" class="btn btn-outline-light btn-md btn-cta-light text-light">Get the App</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Use Cases Section - from Doc 2, missing in Doc 1 -->
    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="section-header text-center">
                <div class="section-label">Digital Engagement on Steroids - Use Cases</div>
                <h2 class="section-title">From Sales Cloud Messaging to Multi-Channel Marketing Automation</h2>
                <p class="section-subtitle mx-auto">From Sales Cloud users who need messaging to marketing teams running multi-channel automation, DEOS helps extend Digital Engagement beyond its default limits.</p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-cloud"></i></div>
                        <div class="card-title">Sales Cloud Messaging</div>
                        <p class="card-text">Immediate, out-of-the-box engagement features for Sales Cloud users that work on all existing Digital Engagement channels - no separate setup required.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-robot"></i></div>
                        <div class="card-title">Einstein Bot Integration</div>
                        <p class="card-text">360 SMS Keyword Processing Automation works on Einstein Bots - automate customer interactions and qualify leads without writing code.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-bar-chart"></i></div>
                        <div class="card-title">Marketing Cloud Campaigns</div>
                        <p class="card-text">Run multi-channel campaigns across SMS, WhatsApp, and more from Marketing Cloud - fill the automation gaps DE leaves behind.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-phone"></i></div>
                        <div class="card-title">Salesforce 1 Mobile</div>
                        <p class="card-text">Access combined DE + 360 SMS capabilities on the go through the Salesforce mobile app - something Digital Engagement alone cannot do.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-diagram-3"></i></div>
                        <div class="card-title">Pardot Integration</div>
                        <p class="card-text">Extend Digital Engagement into Pardot for B2B marketing automation - SMS, MMS, and messaging across the full Pardot journey.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-gear-wide-connected"></i></div>
                        <div class="card-title">Process Builder Automation</div>
                        <p class="card-text">Trigger messages, assign responses, and manage phone numbers automatically using Flow - zero developer dependency.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Better Together & Quote Section -->
    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-3" style="letter-spacing: 0.06em; font-size: 11px;">SALESFORCE DIGITAL ENGAGEMENT AND 360 SMS - MUCH BETTER TOGETHER</div>
                    <h2 class="section-title">Plan Your Digital Engagement Strategy Faster - No Waiting, No Custom Builds</h2>
                    <p class="text-muted">A DE and 360 SMS combination gets businesses to plan their digital engagement strategies faster. An intuitive, highly optimized interface for the combined channels eliminates any issues with training time, productivity, and adoption. Enable pre-built automation essentials, fill out any gaps in campaign management, and build custom capabilities on top of Salesforce Digital Engagement - from day one.</p>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <span class="badge-custom border text-primary">8 Channels</span>
                        <span class="badge-custom border text-primary">4 Salesforce Clouds</span>
                        <span class="badge-custom border text-primary">BYON</span>
                        <span class="badge-custom border text-primary">No Learning Curve</span>
                        <span class="badge-custom border text-primary">Mobile App Access</span>
                        <span class="badge-custom border text-primary">10+ Years Expertise</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="quote-box">
                        <h4 class="fw-bold mb-4">"Digital Engagement, Done Right - <span class="text-primary">no code, no Einstein dependency, no developers</span>. Active from day one."</h4>
                        <hr class="my-3 border-1 border-dark">
                        <p class="text-muted small">Combining Digital Engagement with 360 SMS brings together 8 channels, 4 Salesforce Clouds, and Bring Your Own Number. Pre-installed capabilities including Drip Campaigns, Voicemail, After Hours Scheduling, Time-zone Management, URL-click Tracking, and Guided Conversations are ready from day one - no custom builds, no developer dependency, no learning curve.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer('sms'); ?>