<?php
/* Template Name: Feature Salesforce Chatbot */
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
</style>

<main class="pbd-page">
    <!-- Hero Section -->
    <section class="hero-section bg-hero py-1" style="background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="badge-custom bg-light text-primary mb-3">
                        AI-powered · No Code · 15 Channels · Salesforce-Native
                    </div>
                    <h1 class="display-5 fw-extrabold mb-4" style="line-height: 1.1;">
                        No Dependency on Just<br/><span class="text-primary"> Einstein Chatbot </span><br/>in Salesforce
                    </h1>
                    <div class="hero-list mb-5">
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <p class="mb-0">Spawn a Salesforce Texting Chatbot - build one or many yourself without ANY custom code. Works for any industry, CRM, and texting channel. No separate integrations or technical knowledge needed. Tailor complete conversation journeys in minutes.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Salesforce Chatbot">Book a demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App from AppExchange">Get the App →</a>
                    </div>
                    <div class="d-flex align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <div class="text-warning small"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                            <span class="fw-bold small">4.9/5.0</span>
                        </div>
                        <div class="text-muted extra-small" style="font-size: 12px;">1,200+ AppExchange reviews</div>
                        <div class="text-muted extra-small" style="font-size: 12px;">60K+ users</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/06/Chatbot-1.webp" alt="Salesforce Chatbot No-Code Builder">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <div class="stat-strip py-2">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-md-2 stat-item border-0">
                    <div class="h3 fw-bold text-primary mb-0">397%</div>
                    <div class="text-muted small">Increase in Conversions</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">217%</div>
                    <div class="text-muted small">Better Retention</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">15</div>
                    <div class="text-muted small">Channels Supported</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">1,200+</div>
                    <div class="text-muted small">AppExchange Reviews</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0" style="font-size: 1.5rem;">Zero Code</div>
                    <div class="text-muted small">Drag & Drop Builder</div>
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
                        <div class="text-muted extra-small text-uppercase mb-4 fw-medium" style="letter-spacing: 0.05em; font-size: 10px;">NO-CODE FLOW BUILDER · DRAG & DROP</div>
                        <ul class="numbered-list m-0 p-0">
                            <li class="bg-light-blue">
                                <div class="list-number">1</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Trigger: Lead Created in Salesforce</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Bot fires automatically on any CRM event - lead created, field updated, stage changed, or any custom trigger inside Salesforce.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">2</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Ask Qualifying Questions via SMS</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Branch on keyword reply - BUY / SELL / custom keywords. Every reply drives the conversation forward along a different path tailored to the customer's intent.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">3</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Capture Details into Salesforce Fields</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Zero manual entry - all data mapped automatically to Salesforce fields. Leads, Contacts, Opportunities, and custom objects all updated in real-time.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">4</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Automate Responses & Trigger Next Step</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Book an appointment, alert a rep, or enter a drip sequence automatically. All data captured in CRM - easy tracking and follow-up from that point forward.</div>
                                </div>
                            </li>
                        </ul>
                        <div class="alert principles-alert mb-0 px-3 py-2 small d-flex align-items-center">
                            <i class="bi bi-check2 me-2"></i> All data captured in CRM · Easy tracking & follow-up
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="fw-bold mb-4" style="font-size: 2.5rem; line-height: 1.2;">Build Salesforce Chatbot Without Coding - For Any Industry, Any CRM</h2>
                    <p class="text-muted mb-4">Configure a Salesforce Chatbot without coding to automate customer interactions such as lead qualification, customer support, and FAQs. Powered by AI, it delivers answers in seconds - automating responses, capturing leads, and providing personalized support so your team can focus on high-value tasks.</p>
                    <div class="bg-light-blue p-4 rounded-3 mb-5 border-start border-primary border-4">
                        <div class="fw-semibold mb-2">Need a chatbot for another CRM or industry? No sweat - it's just drag and drop</div>
                        <p class="text-muted small mb-0">No dependency on just the Einstein bot in Salesforce. No separate integrations or technical knowledge needed. Tailor complete conversation journeys in minutes. Teams save millions in spend - configuring processes in days, not years.</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Salesforce Chatbot">Book a demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App for Salesforce Chatbot">Get the App →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chatbot Grid Section -->
    <section class="bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">We give you all the tools you need to create your own texting chatbot that works on 11 channels</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-chat-dots" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Communicate Productively, Always</h4>
                        <p class="card-text small">Automate and scale 2-way interactions with point-and-click. Handle any volume of customer conversations simultaneously without increasing headcount.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-geo-alt" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Be Where Customers Are</h4>
                        <p class="card-text small">Merge and control 15 in-built communication channels from one chatbot. Meet customers on SMS, WhatsApp, Instagram, or any channel they prefer.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-arrow-right-circle" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Move the Chatting Needle</h4>
                        <p class="card-text small">Capture details and progress to trigger the next conversation. Every reply branches the flow, updates the CRM, and moves the lead forward automatically.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-tools" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Extensible In-Built Tools</h4>
                        <p class="card-text small">Save millions in spend. Configure processes with point-and-click tools in days, not years. Teams see 70% faster information retrieval when knowledge is centralized inside Salesforce.</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/06/Chatbot-3.webp" alt="Salesforce WhatsApp Chatbot Configuration">
                </div>
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-2" style="letter-spacing: 0.06em; font-size: 11px;">WHATSAPP CHATBOT · SALESFORCE-NATIVE CONFIGURATION</div>
                    <h2 class="section-title mb-4">Salesforce WhatsApp Chatbot Is Much Easier to Configure Now</h2>
                    <p class="opacity-75">Configure a Salesforce WhatsApp Chatbot without coding and automate customer support, lead qualification, and sales interactions via WhatsApp directly within your Salesforce ecosystem. The chatbot logs all conversations automatically in Salesforce, ensuring that your team has full visibility of every interaction.</p>
                    <div class="p-4 border-start border-primary border-4 bg-light mb-4 text-muted">
                        WhatsApp Business API · No code · No API keys · No middleware · Handles FAQs, lead qualification, product enquiries, multilingual · All conversations auto-logged to Salesforce · TCPA & GDPR opt-out built in.
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
                <h2 class="section-title">An Ideal Salesforce Chatbot Integration - for Every Industry</h2>
                <p class="section-subtitle">Win them on the mobile, win them over completely. Ditch boring forms and make lead qualification more interactive and engaging over mobile.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-mortarboard" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Education & Edutech</h4>
                        <p class="card-text small">Help student counselors scale student engagement and enroll more students with an admissions chatbot for your institution - automated, 24/7, across SMS and WhatsApp.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-bank" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Financial Services</h4>
                        <p class="card-text small">Build trustworthy relationships for financial services. Pre-qualify customers for loans with automated chatbots and respond to them fast - no manual follow-up needed.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-heart-pulse" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Healthcare Services</h4>
                        <p class="card-text small">Increase treatment adherence for treatment programs. Communicate compliantly over Veeva or any CRM with HIPAA compliance - patient interactions automated and logged.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-house-door" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Real Estate</h4>
                        <p class="card-text small">Respond to serious home buyers immediately and get the conversation to an open house appointment faster - chatbot qualifies, books, and routes hot leads 24/7.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-shield-check" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Insurance</h4>
                        <p class="card-text small">Automate policy renewals, claims status updates, and inbound queries - reduce call volume without any code. Every interaction logged automatically in Salesforce.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-people" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Recruitment</h4>
                        <p class="card-text small">Screen candidates, schedule interviews, and send offer letters via SMS chatbot - all automated inside Salesforce. Reduce recruiter workload while improving candidate experience.</p>
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
                    <div class="section-label">CONSIDERING EINSTEIN CHATBOT?</div>
                    <h2 class="section-title">360 SMS May Surprise You - Much Cheaper, Much Easier, No Limits</h2>
                    <p class="mb-4 text-muted">Chatbot Salesforce Integration with 360 SMS is much cheaper in comparison to Salesforce Einstein bot pricing. It's also completely predictable and super easy to set up. And there's no limit on the number of simultaneous customer conversations you can automate. Tailor complete conversation journeys on a chatbot for your industry in minutes - saving months and thousands of dollars on custom code.</p>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Salesforce Chatbot">Book a demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App for Salesforce Chatbot">Get the App →</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-dark-navy p-5 rounded-xl">
                        <div class="text-white-35 small mb-4 text-uppercase">360 SMS Chatbot vs Einstein - What You Get</div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Much Cheaper<span class="text-white-75 small fw-normal"> - Predictable pricing, no surprise Einstein licensing costs or per-conversation charges</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Super Easy to Set Up<span class="text-white-75 small fw-normal"> - Drag and drop, go live the same day - no specialist setup required</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">No Limit on Conversations<span class="text-white-75 small fw-normal"> - Handle unlimited simultaneous customer conversations with no throttling</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">15 Channels<span class="text-white-75 small fw-normal"> - SMS, WhatsApp, Instagram, CTI and more - all from one chatbot configuration</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">No Developers Needed<span class="text-white-75 small fw-normal"> - Point-and-click for any industry or CRM - no technical knowledge required</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Compliance-Ready & Enterprise-Secure<span class="text-white-75 small fw-normal"> - Governance and access control built in for Salesforce AI chatbot use cases</span></div>
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
                    <h6 class="text-white mb-2">Build a Salesforce texting chatbot without any code - for any industry, any CRM, 15 channels</h6>
                    <p class="mb-0 text-white">Book a demo • Get the App • 60K+ teams on Salesforce • 1,200+ AppExchange reviews</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-light btn-md text-primary me-2">Book a demo</a>
                    <a class="open-popup-form-on-click btn btn-outline-light btn-md btn-cta-light text-light">Get the App</a>
                </div>
            </div>
        </div>
    </div>

    <!-- OpEx & Quote Section -->
    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-3" style="letter-spacing: 0.06em; font-size: 11px;">50% LOWER OPEX · 70% FASTER INFORMATION RETRIEVAL</div>
                    <h2 class="section-title">Save Months and Thousands of Dollars on Custom Code - Go Live the Same Day</h2>
                    <p class="text-muted">Teams using 360 SMS report 50% lower OpEx through automation and reduced time-to-answer across Salesforce AI chatbot use cases. Configure processes with point-and-click tools in days, not years. No developers needed, no Einstein dependency, no separate integrations - just drag, drop, and launch.</p>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <span class="badge-custom border text-primary">AI-Powered</span>
                        <span class="badge-custom border text-primary">No Code</span>
                        <span class="badge-custom border text-primary">15 Channels</span>
                        <span class="badge-custom border text-primary">No Einstein Dependency</span>
                        <span class="badge-custom border text-primary">TCPA & GDPR Ready</span>
                        <span class="badge-custom border text-primary">Bring Your Own Number</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="quote-box">
                        <h4 class="fw-bold mb-4">"Build one or many chatbots yourself - <span class="text-primary">without ANY custom code</span>, for any industry, any CRM."</h4>
                        <hr class="my-3 border-1 border-dark">
                        <p class="text-muted small">360 SMS Chatbot is AI-powered and built for Salesforce AI chatbot use cases - qualifying leads, answering FAQs instantly, handling multilingual conversations, and reducing repetitive queries. Teams report 70% faster information retrieval and 50% lower operational costs. No limit on simultaneous conversations. Go live the same day.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer('sms'); ?>