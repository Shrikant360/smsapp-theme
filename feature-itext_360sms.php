<?php
/* Template Name: Feature iText */
?>

<?php get_header('sms'); ?>

<style>
    :root {
        --font-heading: 'Plus Jakarta Sans', sans-serif;
        --font-body: 'Plus Jakarta Sans', sans-serif;
        --fs-h1: clamp(2.5rem, 5vw, 3rem);
        --fs-h2: clamp(1.75rem, 4vw, 2rem);
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
        --lh-heading: 1.2;
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
    }

    .itext-principles-box {
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
        margin-bottom: 2rem !important;
        position: relative;
        background-color: #fff;
        padding: 10px;
        border-radius: 18px;
    }

    .principles-alert {
        background-color: #eef7ff;
        border: 1px solid #CCE0F7;
        color: var(--clr-primary);
        font-weight: var(--fw-semibold);
        border-radius: 8px;
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
</style>

<main class="itext-page">

    <!-- Hero Section -->
    <section class="hero-section bg-hero py-1" style="background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="badge-custom bg-light text-primary mb-3">
                        Zero-code · Keyword-triggered · Salesforce-native
                    </div>
                    <h1 class="display-5 fw-extrabold mb-4" style="line-height: 1.1;">
                        iText - Easily Configure <span class="text-primary">DIY Conversation Trees with Zero Code</span>
                    </h1>
                    <p class="mb-3 text-muted">
                        <b>Configure Keyword-Triggered Actions in Minutes. Capture Data from Messages Directly into Salesforce Record Fields.</b>
                    </p>
                    <p class="mb-5 text-muted small">
                        The only solution for truly zero-code chatbots and polls via Salesforce texting-dynamic, response-triggered actions and data capture, set up in minutes.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target=_blank class="btn btn-primary btn-md px-4" aria-label="Book a demo for iText">Book a demo </a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App from AppExchange">Get the App </a>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/09/div.ui-mock-6.webp" alt="iText Zero-Code Surveys">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <div class="stat-strip py-2">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-md-2 stat-item border-0">
                    <div class="h3 fw-bold text-primary mb-0">Zero</div>
                    <div class="text-muted small">Code to Configure</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">5 min</div>
                    <div class="text-muted small">Survey to Live</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">Dynamic</div>
                    <div class="text-muted small">Decision Trees</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">Auto</div>
                    <div class="text-muted small">Field Data Capture</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0" style="font-size: 1.5rem;">Any SF</div>
                    <div class="text-muted small">Object Compatible</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Principles Section -->
    <section class="core-principles py-5">
        <div class="container py-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="itext-principles-box">
                        <div class="text-muted extra-small text-uppercase mb-4 fw-medium" style="letter-spacing: 0.05em; font-size: 10px;">ITEXT CONVERSATION TREE • SALESFORCE-NATIVE</div>
                        <ul class="numbered-list m-0 p-0">
                            <li class="bg-light-blue">
                                <div class="list-number">1</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Define Your Opening Question or Keyword Trigger</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Set a cold-start question or reserve a keyword to kick off the conversation - no coding, just configuration.</div>
                                </div>
                            </li>
                            <li style="margin-bottom: 3.5rem;">
                                <div class="list-number">2</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Map Response-Based Branches &amp; Actions</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Each response triggers its own action: field update, campaign enrollment, next question, or drip sequence.</div>
                                </div>
                            </li>
                            <li style="margin-bottom: 3.5rem;">
                                <div class="list-number">3</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Capture Data into Salesforce Record Fields</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Responses are written automatically into any Salesforce record field for progressive profiling and lead scoring.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">4</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Chain Surveys, Templates &amp; Drips</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Trigger sequences of surveys, SMS templates, and drip campaigns based on responses - all hands-free.</div>
                                </div>
                            </li>
                        </ul>
                        <div class="alert principles-alert mb-0 px-3 py-2 small d-flex align-items-center">
                            <i class="bi bi-check2 me-2"></i> Dynamic conversation trees live in minutes - built by anyone, zero development cost
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="fw-bold mb-4" style="font-size: 2.5rem; line-height: 1.2;">What Does iText Bring to the Table? Short Answer - Everything.</h2>
                    <p class="text-muted mb-4">iText is 360's pioneering, truly zero-code solution that lets even non-techies - pretty much anyone - create dynamic surveys in 5 minutes without a single line of code. Users can run a Survey via Salesforce texting in no time, create dynamic keyword-triggered automation for progressive profiling, and capture structured data directly into Salesforce record fields.</p>
                    <div class="bg-light-blue p-4 rounded-3 mb-5 border-start border-primary border-4">
                        <div class="fw-semibold mb-2">The only solution for zero-code chatbot designing in Salesforce texting</div>
                        <p class="text-muted small mb-0">Use fully configurable decision trees and set up dynamic, response-triggered actions and data-capture in minutes. iText enables out-of-the-box user adoption with admin-friendly setup for faster customization.</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for iText">Book a demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App for iText">Get the App →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comprehensive Section -->
    <section class="bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Just a Few of the Many Ways iText Changes Business Communication</h2>
                <p class="section-subtitle mx-auto">Response-triggered actions, automated profiling, campaign enrollment, and data capture - all in zero code.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-lightning-charge" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Response-Based SF Actions</h4>
                        <p class="card-text small">An 'Action Handler' that lets you trigger multiple actions and updates based on responses. Each reply drives a distinct Salesforce action - field updates, campaign adds, follow-up scheduling.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-bar-chart-steps" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Surveys, Polls &amp; Voting</h4>
                        <p class="card-text small">Run intelligent forms, polls, surveys, and voting campaigns over SMS - all configured without code. Recommended over templates for hands-free, zero-intervention conversations.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-link-45deg" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Trigger Survey &amp; Drip Sequences</h4>
                        <p class="card-text small">Chain sequences of surveys, SMS templates, and drip campaigns based on responses. Start at any question in any survey to reuse multi-purpose flows and avoid repetition.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-file-earmark-text" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Response-Based Field Updates</h4>
                        <p class="card-text small">Capture data received over messages directly into Salesforce record fields. Build rich, accurate contact profiles through progressive profiling - automatically, at scale.</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/09/div.sc-mock-1-3.webp" alt="iText Action Handler">
                </div>
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-2" style="letter-spacing: 0.06em; font-size: 11px;">KEEP ALL YOUR CONVERSATION OPTIONS OPEN</div>
                    <h2 class="section-title mb-4">Why You Should Use iText for Lead Qualification &amp; Profiling</h2>
                    <p class="opacity-75">Automated text inquiries for lead qualification and follow-ups, incisive progressive profiling through dynamic SMS surveys, and easier sales pitch preparation with well-rounded contact profiles - iText does it all without a single line of code.</p>
                    <div class="p-4 border-start border-primary border-4 bg-light mb-4 text-muted">
                        Automated respondent addition to campaigns, response-based scheduling and follow-ups, accelerated qualification times, and reduced closing turnaround - iText eliminates long-term development cost while enabling time-feasible personalization in every customer response.
                    </div>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md">Book a demo </a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4">Get the App </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Use Case Section -->
    <section class="bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">iText for Every Stage of the Customer Journey</h2>
                <p class="section-subtitle">From first-touch lead qualification to post-sale feedback - iText dynamic conversation trees work across every use case, for every team, without code.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-bullseye" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Lead Qualification</h4>
                        <p class="card-text small">Automate text inquiries for lead qualification, gather structured data through dynamic SMS surveys, and score leads faster using response-based field updates in Salesforce.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-graph-up-arrow" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Progressive Profiling</h4>
                        <p class="card-text small">Build well-rounded contact profiles through automated, progressive SMS surveys. Capture answers directly into Salesforce fields for richer data without lengthy forms.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-briefcase" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Sales Pitch Preparation</h4>
                        <p class="card-text small">Equip your reps with well-rounded prospect profiles before every pitch. Accelerate qualification timelines and reduce closing turnaround with automated data collection.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-clipboard-data" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Polls &amp; Voting</h4>
                        <p class="card-text small">Run polls and voting campaigns over SMS with response-based tallying. Add respondents automatically to campaigns and segment audiences based on their answers.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-globe" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Audience Penetration</h4>
                        <p class="card-text small">Achieve greater audience penetration and relevance for communications by delivering personalized follow-ups triggered dynamically from each respondent's unique answers.</p>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-clock-history" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Time-Feasible Personalization</h4>
                        <p class="card-text small">Automate personalized responses to customers at scale - response-based scheduling and follow-ups ensure the right message reaches the right person at the right time, every time.</p>

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
                    <div class="section-label">EXPERIENCE 'TRUE' ZERO-CODE</div>
                    <h2 class="section-title">Chatbot Tools Don't Make You Conversational - iText Does</h2>
                    <p class="mb-4 text-muted">It's not just about having a chatbot - it's about having one that anyone on your team can build, modify, and launch in minutes. iText gives non-techies the same power as developers: fully configurable decision trees, response-triggered actions, real-time data capture into Salesforce, and campaign automation - all without opening a code editor once.</p>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for iText">Book a demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App for iText">Get the App →</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-dark-navy p-5 rounded-xl">
                        <div class="text-white-35 small mb-4 text-uppercase">Everything iText Brings to the Table</div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Zero-Code DIY Conversation Trees<span class="text-white-75 small fw-normal"> - Build dynamic, branching surveys without any developer involvement</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Response-Based Salesforce Actions<span class="text-white-75 small fw-normal"> - Trigger field updates, campaign adds, and sequences from every reply</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Automated Campaign Enrollment<span class="text-white-75 small fw-normal"> - Add respondents to campaigns automatically based on what they answer</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Progressive Profiling &amp; Field Capture<span class="text-white-75 small fw-normal"> - Write message responses directly into any Salesforce record field</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Surveys, Polls, Voting &amp; Forms<span class="text-white-75 small fw-normal"> - All supported, all zero-code, all native inside Salesforce texting</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Zero Long-Term Development Cost<span class="text-white-75 small fw-normal"> - Admin-friendly setup means faster customization with no ongoing tech dependency</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blue CTA Banner -->
    <!--<div class="bg-cta py-5 text-white">-->
    <!--    <div class="container">-->
    <!--        <div class="row align-items-center">-->
    <!--            <div class="col-lg-8">-->
    <!--                <h6 class="text-white mb-2">Build Your First iText Conversation Tree - Zero Code, Live in 5 Minutes</h6>-->
    <!--                <p class="mb-0 text-white">Book a demo • Get the App • 60K+ teams on Salesforce • 1,200+ AgentExchange reviews</p>-->
    <!--            </div>-->
    <!--            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">-->
    <!--                <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-light btn-md text-primary me-2">Book a demo</a>-->
    <!--                <a class="open-popup-form-on-click btn btn-outline-light btn-md btn-cta-light text-light">Get the App</a>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->

    <!-- Pipeline & Quote Section -->
    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-3" style="letter-spacing: 0.06em; font-size: 11px;">BE READY FOR SCALE-READY PERSONALIZATION</div>
                    <h2 class="section-title">Manual Qualification Is the Biggest Drain on Your Sales Pipeline</h2>
                    <p class="text-muted">Every manually qualified lead costs rep time, every static survey loses respondents, and every data-entry task is an error waiting to happen. Stop asking your team to do what automation can do better. iText's dynamic decision trees qualify, profile, and route leads automatically - while writing the data straight into Salesforce.</p>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <span class="badge-custom border text-primary">Lead Qualification</span>
                        <span class="badge-custom border text-primary">Progressive Profiling</span>
                        <span class="badge-custom border text-primary">Polls &amp; Voting</span>
                        <span class="badge-custom border text-primary">Field Data Capture</span>
                        <span class="badge-custom border text-primary">Campaign Enrollment</span>
                        <span class="badge-custom border text-primary">Drip Sequences</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="quote-box">
                        <h4 class="fw-bold mb-4">"Pretty much anyone can create dynamic surveys in <span class="text-primary">5 minutes</span> - without a single line of code."</h4>
                        <hr class="my-3 border-1 border-dark">
                        <p class="text-muted small">iText is 360's pioneering, truly zero-code solution. Non-techies and admins can configure fully dynamic, keyword-triggered conversation trees in Salesforce - complete with response-based actions, data capture, and automated follow-up sequences - with no developer dependency, ever.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>





</main>

<?php get_footer('sms'); ?>