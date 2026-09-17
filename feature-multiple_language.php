<?php
/* Template Name: Feature Multi Language Suport */
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
        font-size: var(--fs-body);
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
        height: 100% !important;
        display: flex;
        flex-direction: column
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
        padding: 80px 0;
        color: #ffffff;
    }

    .ease-channel-card {
        background-color: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 20px;
        padding: 40px 30px;
        height: 100%;
        transition: transform 0.3s ease;
    }

    .ease-channel-card:hover {
        transform: translateY(-5px);
        background-color: rgba(255, 255, 255, 0.15);
    }

    .ease-channel-icon {
        font-size: 32px;
        margin-bottom: 25px;
        display: block;
    }

    .ease-channel-title {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 15px;
        color: #ffffff;
    }

    .ease-channel-text {
        font-size: 14px;
        line-height: 1.6;
        color: rgba(255, 255, 255, 0.85);
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
                        All Scripts · All Languages · Multi-Channel · Hyper-Local
                    </div>
                    <h1 class="display-5 fw-extrabold mb-4" style="line-height: 1.1;">
                        Take Our Messaging Expertise <span class="text-primary">Wherever You Go</span>
                    </h1>
                    <p class="mb-4 lead text-dark">
                        Expand Your Business to Non-English Markets Like a Pro. Make Your Business Presence Feel Globally Local and Hyper-Local.
                    </p>
                    <div class="hero-list mb-5">
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <!--<i class="bi bi-check-circle-fill"></i>-->
                            <p class="mb-0">Pioneering text message language automation in Salesforce, now in multiple languages. Send messages in all scripts and character sets, route customers to language-proficient agents, and reach new markets across WhatsApp, WeChat, and Viber.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Multiple Language Support">Book a demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App from AppExchange">Get the App →</a>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/06/Multi-Language-Support-1.webp" alt="Multiple Language Support Dashboard">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <div class="stat-strip py-2">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-md-2 stat-item border-0">
                    <div class="h3 fw-bold text-primary mb-0">ALL</div>
                    <div class="text-muted small">Languages &amp; Scripts</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">Auto</div>
                    <div class="text-muted small">Language-Based Routing</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">WhatsApp</div>
                    <div class="text-muted small">WeChat &amp; Viber Channels</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">Central</div>
                    <div class="text-muted small">Strategy Management</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0" style="font-size: 1.5rem;">Keyword</div>
                    <div class="text-muted small">Filters in Any Language</div>
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
                        <div class="text-muted extra-small text-uppercase mb-4 fw-medium" style="letter-spacing: 0.05em; font-size: 10px;">PIONEERING TEXT MESSAGE LANGUAGE AUTOMATION IN SALESFORCE</div>
                        <ul class="numbered-list m-0 p-0">
                            <li class="bg-light-blue">
                                <div class="list-number">1</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Send in All Scripts and Character Sets</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Support input from ALL languages. Let customers read messages in their native language, or automate pre-built templates for each language using reserved keywords.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">2</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Route Customers to Language-Proficient Agents</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Assign message originators for campaigns and bulk messages by language proficiency. Make customers feel like they're at home and in the right place.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">3</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Send Globally via Channels That Cross Country Barriers</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Choose from WhatsApp, WeChat, and Viber to push messages without borders and work around country-to-country texting barriers while reaching new markets.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">4</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Manage Communication Strategy &amp; Cost Centrally</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Manage communication strategy, automation, and cost from one central Salesforce instance, regardless of how many languages, geographies, or channels your team operates across.</div>
                                </div>
                            </li>
                        </ul>
                        <div class="alert principles-alert mb-0 px-3 py-2 small d-flex align-items-center">
                            <i class="bi bi-check2 me-2"></i> Globally local messaging - any language, any channel, managed centrally inside Salesforce
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="fw-bold mb-4" style=" line-height: 1.2;">Make Your Business Feel Globally Local - in Every Language, in Every Market</h2>
                    <p class="text-muted mb-4">Expand your business to non-English markets with confidence. 360 SMS supports input from ALL languages - sending in all scripts and character sets so locals read messages in their native vernacular. Pair multi-language templates with texting channels popular in the target geography, and receive replies over numbers manned by agents of the same language.</p>
                    <div class="bg-light-blue p-4 rounded-3 mb-5 border-start border-primary border-4">
                        <div class="fw-semibold mb-2">Make Your Global Outreach Unstoppable</div>
                        <p class="text-muted small mb-0">Pair our app with multi-language templates and texting channels popular in the target geography. Receive replies over numbers manned by agents of the same language - so every customer conversation feels local, even when your team is distributed globally.</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Multiple Language Support">Book a demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App for Multiple Language Support">Get the App →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Make Global Outreach Unstoppable -->
    <section class="manage-conv-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3" style="font-size: 32px; color: #1e293b;">Make Your Global Outreach Unstoppable - Every Tool You Need</h2>
                <p class="text-muted mx-auto" style="max-width: 800px; font-size: 16px;">Multi-language templates, geo-Prioritized alerts, keyword filters in any language, and channels that cross borders - all inside Salesforce</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="manage-conv-card">
                        <i class="bi bi-translate manage-conv-icon" style="color: var(--clr-primary);"></i>
                        <h4 class="manage-conv-title">All Languages &amp; Scripts</h4>
                        <p class="manage-conv-text">Supports input from ALL languages. Type in Latin, Cyrillic, Arabic, Chinese, Devanagari — whatever script your customer reads in, it goes through clean. Automate pre-made templates for each language triggered by reserved keywords.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="manage-conv-card">
                        <i class="bi bi-people manage-conv-icon" style="color: var(--clr-primary);"></i>
                        <h4 class="manage-conv-title">Language-Based Agent Routing</h4>
                        <p class="manage-conv-text">Assign message originators for campaigns and bulk messages by language proficiency. Route incoming replies to agents who speak the customer's language - making every customer feel they are in the right place from the first exchange.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="manage-conv-card">
                        <i class="bi bi-funnel manage-conv-icon" style="color: var(--clr-primary);"></i>
                        <h4 class="manage-conv-title">Keyword Filters in Any Language</h4>
                        <p class="manage-conv-text">Filter replies by keywords in any language and segment audiences for next steps. Prioritize incoming alerts by geography for offshore teams so no response is delayed - even when your team spans multiple time zones and languages.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="manage-conv-card">
                        <i class="bi bi-arrow-repeat manage-conv-icon" style="color: var(--clr-primary);"></i>
                        <h4 class="manage-conv-title">Automatic Originator Consistency</h4>
                        <p class="manage-conv-text">Choose originators automatically for consistency in contact details across languages and geographies. Combine with Sticky Sender to ensure every customer always receives messages from the same number, in their language, from their assigned agent.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Channels to Cross Barriers -->
    <section class="put-ease-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3 text-white" style="font-size: 32px; line-height: 1.2;">Channels to Cross Country-to-Country Texting Barriers</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="ease-channel-card">
                        <i class="bi bi-whatsapp ease-channel-icon"></i>
                        <h4 class="ease-channel-title">WhatsApp - Global Barrier Breaker</h4>
                        <p class="ease-channel-text">Switch to WhatsApp where local SMS costs or regulations make direct texting impractical. Reach customers across those geographies anyway - WhatsApp delivers natively on 360 SMS.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ease-channel-card">
                        <div class="ease-channel-icon" style="color: #ffffff; font-weight: 700; font-family: sans-serif;">讯息</div>
                        <h4 class="ease-channel-title">WeChat - Asian Markets</h4>
                        <p class="ease-channel-text">Reach Asian markets with WeChat integration - the dominant messaging platform across China and East Asia. Communicate in Simplified Chinese, Traditional Chinese, and other Asian scripts natively from Salesforce.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ease-channel-card">
                        <i class="bi bi-chat-text ease-channel-icon"></i>
                        <h4 class="ease-channel-title">Viber - East European Markets</h4>
                        <p class="ease-channel-text">Reach East European markets with Viber - widely used across Eastern Europe and parts of Southeast Asia. Send in local scripts and languages to customers in markets where Viber is the preferred communication channel.</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/06/Multi-Language-Support-3.webp" alt="Multi-Language Messaging Management">
                </div>
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-2" style="letter-spacing: 0.06em; font-size: 11px;">NOT JUST MULTIPLE LANGUAGES - COMPLETE INTERNATIONAL MESSAGING</div>
                    <h2 class="section-title mb-4">Manage International Messaging Completely - Strategy, Automation &amp; Cost, All Central</h2>
                    <p class="opacity-75">When you combine multi-language support with 360 SMS's built-in solutions, you get a complete international messaging operation. Prioritize incoming alerts by geography so offshore teams never delay a response. Use WeChat and Viber to reach Asian and East European markets. Filter replies by keywords in any language and segment audiences for next steps.</p>
                    <div class="p-4 border-start border-primary border-4 bg-light mb-4 text-muted">
                        Multi-language support for international and interstate text operations - manage communication strategy, automation, and cost centrally while reaching every market in the language and channel it prefers.
                    </div>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md">Book a demo <i class="bi bi-arrow-right icon-sm"></i></a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4">Get the App <i class="bi bi-arrow-right icon-sm"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Use Case Section -->
    <section class="bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Multi-Language Messaging for Every Market &amp; Team</h2>
                <p class="section-subtitle">From expanding into non-English markets to managing offshore teams across time zones - language-aware messaging makes every customer interaction feel locally relevant.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-globe" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Non-English Market Expansion</h4>
                        <p class="card-text small">Expand into Spanish, French, Arabic, Chinese, and any other language market with confidence. Send in the local script, automate language-specific templates, and route replies to proficient agents - entering new markets without a local office.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-building" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Offshore &amp; Distributed Teams</h4>
                        <p class="card-text small">Have an offshore team? Prioritize incoming alerts by geography so no response is delayed. Manage agent availability across staggered time zones, and route customer messages to the agent in the right geography and language automatically.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-megaphone" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Multi-Language Bulk Campaigns</h4>
                        <p class="card-text small">Run bulk campaigns across multiple language markets in a single operation. Assign originators by language proficiency so every recipient receives the message from an agent who speaks their language - making campaigns feel locally relevant at scale.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-wechat" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Asian Markets via WeChat</h4>
                        <p class="card-text small">Reach Chinese and broader East Asian markets with WeChat integration. Send in Simplified Chinese, Traditional Chinese, and other Asian scripts natively from Salesforce - meeting customers on the channel they actually use every day.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-chat-dots" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">East European Markets via Viber</h4>
                        <p class="card-text small">Reach Eastern European and Southeast Asian markets with Viber integration. Send in local Cyrillic and other scripts to customers in markets where Viber is the dominant channel - without SMS country-to-country barriers.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-search" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Keyword Segmentation in Any Language</h4>
                        <p class="card-text small">Filter replies by keywords in any language and segment audiences for next steps. Use language-specific reserved keywords to trigger automated templates, route to agents, or add respondents to campaigns - all managed from central Salesforce.</p>
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
                    <div class="section-label">EXPERIENCE 'TRUE' GLOBAL-LOCAL MESSAGING</div>
                    <h2 class="section-title">Sending in English to a Non-English Customer Is Not Global - It's Lazy</h2>
                    <p class="mb-4 text-muted">A message that arrives in the wrong language doesn't just go unread - it signals that you don't know or care about the customer you're trying to reach. 360 SMS multi-language support ensures every message your business sends feels like it was written by a local, routed by a local, and replied to by someone who speaks the customer's language - at the scale of a global operation, managed centrally inside Salesforce.</p>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Multiple Language Support">Book a demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App for Multiple Language Support">Get the App →</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-dark-navy p-5 rounded-xl">
                        <div class="text-white-35 small mb-4 text-uppercase">Everything Multi-Language Support Brings to the Table</div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">ALL Languages &amp; Scripts<span class="text-white-75 small fw-normal"> - Send in any language and any character set - locals read messages in their native vernacular</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Language-Based Agent Routing<span class="text-white-75 small fw-normal"> - Route customers to proficient agents automatically - make every customer feel at home</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">WhatsApp, WeChat &amp; Viber<span class="text-white-75 small fw-normal"> - Break country-to-country barriers - reach Asian and East European markets natively</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Geo-Prioritized Incoming Alerts<span class="text-white-75 small fw-normal"> - Offshore teams never delay a response - alerts Prioritized by geography in real time</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Keyword Filters in Any Language<span class="text-white-75 small fw-normal"> - Segment audiences by language-specific keywords - trigger templates and routing automatically</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Central Strategy &amp; Cost Management<span class="text-white-75 small fw-normal"> - One Salesforce instance manages every language, geography, and channel globally</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Hyper-Local & Quote Section -->
    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-3" style="letter-spacing: 0.06em; font-size: 11px;">GO HYPER-LOCAL WITHOUT GOING LOCAL</div>
                    <h2 class="section-title">A Business That Messages in English Only Is Leaving Every Non-English Market on the Table</h2>
                    <p class="text-muted">The world's fastest-growing consumer markets are not English-first. Spanish, Mandarin, Arabic, Hindi, Portuguese - these are the languages of your next growth opportunity. 360 SMS multi-language support lets you enter those markets without a local office, a local team, or a local phone system - just centrally managed language-aware messaging from the Salesforce instance you already have.</p>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <span class="badge-custom border text-primary">All Scripts &amp; Languages</span>
                        <span class="badge-custom border text-primary">Agent Language Routing</span>
                        <span class="badge-custom border text-primary">WhatsApp &amp; WeChat</span>
                        <span class="badge-custom border text-primary">Viber for East Europe</span>
                        <span class="badge-custom border text-primary">Geo Alert Priority</span>
                        <span class="badge-custom border text-primary">Keyword Filters Any Language</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="quote-box">
                        <h4 class="fw-bold mb-4">"Make your business presence feel <span class="text-primary">globally local and hyper-local.</span>"</h4>
                        <hr class="my-3 border-1 border-dark">
                        <p class="text-muted small">360 SMS multi-language support lets you send in all scripts and character sets, route customers to language-proficient agents, choose from WhatsApp, WeChat, and Viber to cross country-to-country barriers, filter replies by keywords in any language, and manage all communication strategy and cost centrally from one Salesforce instance - however many markets you serve.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer('sms'); ?>