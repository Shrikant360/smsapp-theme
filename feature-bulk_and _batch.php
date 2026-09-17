<?php
/* Template Name: Feature Bulk and Batch SMS  */
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
        color: var(--clr-text-muted) Lead
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

    /* Traffic Analysis Section Styles */
    .traffic-analysis-section {
        background-color: #0057B8;
        padding: 60px 0;
        color: #ffffff;
    }

    .traffic-large-text {
        font-size: 80px;
        font-weight: 600;
        line-height: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 15px;
    }

    .traffic-small-text {
        font-size: 24px;
        font-weight: 400;
        text-transform: lowercase;
    }

    .traffic-content-text {
        font-size: 16px;
        line-height: 1.6;
        opacity: 0.9;
    }

    .traffic-stat-item {
        border-right: 1px solid #e2e8f0;
        padding: 30px 15px;
    }

    .traffic-stat-item:last-child {
        border-right: none;
    }

    .traffic-stat-strip {
        background-color: #ffffff;
        border-top: 1px solid #e2e8f0;
        border-bottom: 1px solid #e2e8f0;
    }

    .traffic-stat-value {
        font-size: 32px;
        font-weight: 700;
        color: #0057B8;
        margin-bottom: 5px;
    }

    .traffic-stat-label {
        font-size: 12px;
        color: #64748b;
        text-transform: none;
    }
</style>

<main class="pbd-page">
    <!-- Hero Section -->
    <section class="hero-section bg-hero py-1" style="background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="badge-custom bg-light text-primary mb-3">
                        Millions of Messages · Salesforce Reports Integration · Zero Governor Limits
                    </div>
                    <h1 class="display-5 fw-extrabold mb-4" style="line-height: 1.1;">
                        Batch & Bulk SMS in Salesforce for <span class="text-primary">Scalable Communications</span>
                    </h1>
                    <p class="mb-4 lead text-dark ">
                        Push hundreds, thousands, or millions of messages in under 5 minutes without governor-limit constraints. 360 SMS App is the only native Salesforce app built for massive, multi-channel scale.
                    </p>
                    <div class="hero-list mb-5">
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <p class="mb-0">Reach your entire database natively from Salesforce. Bypassing standard 2,000-record limits by sending directly from Reports, ensuring your massive campaigns hit every recipient every time.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Get a Demo">Get a Demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Start Free Trial">Start Free Trial →</a>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/06/Bulk-Messaging-1.webp" alt="Batch & Bulk SMS Dashboard">
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Traffic Analysis (From Image) -->
    <section class="traffic-analysis-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-center text-lg-end">
                    <div class="traffic-large-text">
                        1 <span class="traffic-small-text">in</span> 3
                    </div>
                </div>
                <div class="col-lg-8">
                    <p class="traffic-content-text text-light mb-0">
                        <strong>Traffic analysis by 360 SMS clients shows text-based conversions have gone up by a third</strong> since the pandemic started. Large-scale public campaigns doubled down on SMS to reach supporters for funds and volunteering - achieving a one-in-ten respondent conversion rate to a cause. Bulk texting is no longer optional for scalable outreach.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Strip (From Image) -->
    <div class="traffic-stat-strip">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col traffic-stat-item">
                    <div class="traffic-stat-value">Millions</div>
                    <div class="traffic-stat-label">Recipients from Reports</div>
                </div>
                <div class="col traffic-stat-item">
                    <div class="traffic-stat-value">
                        <5 min</div>
                            <div class="traffic-stat-label">Volume Send Time</div>
                    </div>
                    <div class="col traffic-stat-item">
                        <div class="traffic-stat-value">Zero</div>
                        <div class="traffic-stat-label">Governor Limits</div>
                    </div>
                    <div class="col traffic-stat-item">
                        <div class="traffic-stat-value">Any</div>
                        <div class="traffic-stat-label">Channel Supported</div>
                    </div>
                    <div class="col traffic-stat-item">
                        <div class="traffic-stat-value">Zero-code</div>
                        <div class="traffic-stat-label">Admin-Friendly Setup</div>
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
                            <div class="text-muted extra-small text-uppercase mb-4 fw-medium" style="letter-spacing: 0.05em; font-size: 10px;">A BULK MESSAGING PIONEER • SALESFORCE-NATIVE</div>
                            <ul class="numbered-list m-0 p-0">
                                <li class="bg-light-blue">
                                    <div class="list-number">1</div>
                                    <div>
                                        <div class="fw-semibold text-heading medium mb-1">Send Directly from Salesforce Reports</div>
                                        <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Bypass the 2,000-record threshold of traditional List Views. Push messages to your entire database by simply selecting a Salesforce Report.</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-number">2</div>
                                    <div>
                                        <div class="fw-semibold text-heading medium mb-1">Multi-Channel Natively</div>
                                        <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Reach customers on SMS, MMS, WhatsApp, Viber, and more – all from a single bulk campaign interface inside Salesforce.</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-number">3</div>
                                    <div>
                                        <div class="fw-semibold text-heading medium mb-1">Dark-Hour Awareness</div>
                                        <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Schedule messages with intelligent time-zone awareness to ensure they arrive during peak activity windows, never during "dark hours."</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-number">4</div>
                                    <div>
                                        <div class="fw-semibold text-heading medium mb-1">Zero-Code & Admin-Friendly</div>
                                        <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Configure complex bulk workflows without developer intervention. Admins can manage everything using a point-and-click interface.</div>
                                    </div>
                                </li>
                            </ul>
                            <div class="alert principles-alert mb-0 px-3 py-2 small d-flex align-items-center">
                                <i class="bi bi-check2 me-2"></i> Push millions of messages in under 5 minutes without governor-limit constraints.
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 ps-lg-5">
                        <h2 class="fw-bold mb-4" style="line-height: 1.2;">The Salesforce App That Sends Bulk SMS to Millions</h2>
                        <p class="text-muted mb-4">Don't let manual batching and Salesforce limits slow down your outreach. 360 SMS App allows you to scale communications effortlessly, whether you're broadcasting to citizens or launching global campaigns.</p>
                        <div class="bg-light-blue p-4 rounded-3 mb-5 border-start border-primary border-4">
                            <div class="fw-semibold mb-2">Bypass List View limits and manual effort</div>
                            <p class="text-muted small mb-0">Sending messages to millions by simply selecting a report eliminates the manual effort of batching records and bypasses the governor limits that restrict ListViews to 2,000 records.</p>
                        </div>
                        <div class="d-flex gap-3">
                            <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Get a Demo">Get a Demo →</a>
                            <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Speak to a Bulk Specialist">Speak to a Bulk Specialist →</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Manage Conversations -->
        <section class="manage-conv-section">
            <div class="container">
                <div class="text-center mb-5">
                    <h2 class="fw-bold mb-3" style="font-size: 32px; color: #1e293b;">Bulk Texting That Helps Scale Operations Effortlessly</h2>
                    <p class="text-muted mx-auto" style="max-width: 800px; font-size: 16px;">An App that sends bulk SMS directly from Salesforce Reports, bypassing ListView limits and manual effort.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <div class="manage-conv-card">
                            <i class="bi bi-file-earmark-bar-graph manage-conv-icon" style="color: var(--clr-primary);"></i>
                            <h4 class="manage-conv-title">Reports to Millions</h4>
                            <p class="manage-conv-text">The only app that sends bulk SMS directly from Salesforce Reports. Bypass the manual effort of batching records and the 2,000-record threshold of ListViews.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="manage-conv-card">
                            <i class="bi bi-chat-quote manage-conv-icon" style="color: var(--clr-primary);"></i>
                            <h4 class="manage-conv-title">Multi-Channel Reach</h4>
                            <p class="manage-conv-text">Supports SMS, MMS, WhatsApp, Viber, Facebook Messenger, and more natively from within Salesforce. Reach your database on their preferred channels.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="manage-conv-card">
                            <i class="bi bi-clock-history manage-conv-icon" style="color: var(--clr-primary);"></i>
                            <h4 class="manage-conv-title">Intelligent Scheduling</h4>
                            <p class="manage-conv-text">Schedule messages with dark-hour awareness. Ensure massive campaigns arrive during peak activity windows across different time zones automatically.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="manage-conv-card">
                            <i class="bi bi-person-lines-fill manage-conv-icon" style="color: var(--clr-primary);"></i>
                            <h4 class="manage-conv-title">Dynamic Personalization</h4>
                            <p class="manage-conv-text">Use data from any standard or custom Salesforce field to personalize bulk messages. Make every recipient feel like the message was written just for them.</p>
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
                        <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/06/Bulk-Messaging-3.webp" alt="Bulk Messaging Dashboard">
                    </div>
                    <div class="col-lg-6">
                        <div class="text-muted text-uppercase fw-semibold small mb-2" style="letter-spacing: 0.06em; font-size: 11px;">DARK-HOUR SCHEDULING</div>
                        <h2 class="section-title mb-4">Intelligent Time-Zone Awareness for Massive Campaigns</h2>
                        <p class="opacity-75">Scale your operations effortlessly without worrying about inappropriate delivery times. 360 SMS App identifies the recipient's local time zone and ensures your bulk messages arrive during peak engagement hours.</p>
                        <div class="p-4 border-start border-primary border-4 bg-light mb-4 text-muted">
                            Bulk texting is no longer optional for scalable outreach. Whether it's broadcast announcements, massive fundraising campaigns, or public service alerts, our zero-code setup allows admins to deploy large segmented lists in minutes.
                        </div>
                        <div class="d-flex gap-3">
                            <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md">Get a Demo <i class="bi bi-arrow-right icon-sm"></i></a>
                            <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4">Speak to a Bulk Specialist <i class="bi bi-arrow-right icon-sm"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Use Case Section -->
        <section class="bg-light">
            <div class="container">
                <div class="section-header text-center">
                    <h2 class="section-title">Salesforce Bulk Messaging for Every Use Case</h2>
                    <p class="section-subtitle">From broadcast announcements to massive fundraising campaigns, 360 SMS helps you reach millions natively from Salesforce.</p>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100">
                            <div class="card-icon"><i class="bi bi-megaphone" style="color: var(--clr-primary);"></i></div>
                            <h4 class="card-title">Public Service Announcements</h4>
                            <p class="card-text small">Broadcasting critical alerts and updates to millions of citizens across multiple channels simultaneously. Reliable, fast, and scalable delivery when every second counts.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100">
                            <div class="card-icon"><i class="bi bi-rocket-takeoff" style="color: var(--clr-primary);"></i></div>
                            <h4 class="card-title">Product Launches & Campaigns</h4>
                            <p class="card-text small">Rapid deployment of promotional messages to segmented lists. Scale your database natively from Salesforce and drive massive engagement for new products.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100">
                            <div class="card-icon"><i class="bi bi-heart-pulse" style="color: var(--clr-primary);"></i></div>
                            <h4 class="card-title">Fundraising & Volunteering</h4>
                            <p class="card-text small">Digital "at-the-door" outreach for non-profits at massive scale. Achieve high respondent conversion rates for causes and volunteer recruitment.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100">
                            <div class="card-icon"><i class="bi bi-alarm" style="color: var(--clr-primary);"></i></div>
                            <h4 class="card-title">Automated Bulk Reminders</h4>
                            <p class="card-text small">Set up recurring daily or monthly bulk reminders for appointments, renewals, and events. Automate your most repetitive massive outreach tasks.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100">
                            <div class="card-icon"><i class="bi bi-graph-up" style="color: var(--clr-primary);"></i></div>
                            <h4 class="card-title">Multi-Channel Campaigns</h4>
                            <p class="card-text small">Reach your database on SMS, WhatsApp, and Viber natively. Use channel-specific features like rich media and buttons to boost conversion rates.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card h-100">
                            <div class="card-icon"><i class="bi bi-shield-check" style="color: var(--clr-primary);"></i></div>
                            <h4 class="card-title">Compliance at Scale</h4>
                            <p class="card-text small">Manage opt-ins and opt-outs automatically even for millions of recipients. Stay compliant with regulations without manual record updates.</p>
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
                        <div class="section-label">SCALABLE BULK COMMUNICATIONS</div>
                        <h2 class="section-title">Why 360 SMS Bulk Messaging Is the Only Scalable Salesforce App</h2>
                        <p class="mb-4 text-muted">Scalable outreach requires more than just sending a text. It requires a deep integration with Salesforce data, the ability to bypass standard governor limits, and intelligent scheduling that ensures messages land at the right time. 360 SMS App is built from the ground up to handle millions of messages natively within your Salesforce org.</p>
                        <div class="d-flex gap-3">
                            <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Get a Demo">Get a Demo →</a>
                            <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Speak to a Bulk Specialist">Speak to a Bulk Specialist →</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-dark-navy p-5 rounded-xl">
                            <div class="text-white-35 small mb-4 text-uppercase">Everything Bulk Messaging Brings to the Table</div>
                            <div class="checklist-item">
                                <i class="bi bi-check-circle-fill checklist-icon"></i>
                                <div>
                                    <div class="fw-semibold fs-sm text-color-sf">Reports Integration<span class="text-white-75 small fw-normal"> - The only app that sends bulk SMS directly from Salesforce Reports.</span></div>
                                </div>
                            </div>
                            <div class="checklist-item">
                                <i class="bi bi-check-circle-fill checklist-icon"></i>
                                <div>
                                    <div class="fw-semibold fs-sm text-color-sf">Zero-Code Setup<span class="text-white-75 small fw-normal"> - Admin-friendly configuration without requiring developer intervention.</span></div>
                                </div>
                            </div>
                            <div class="checklist-item">
                                <i class="bi bi-check-circle-fill checklist-icon"></i>
                                <div>
                                    <div class="fw-semibold fs-sm text-color-sf">Multi-Channel Support<span class="text-white-75 small fw-normal"> - 15+ channels including SMS, WhatsApp, Viber, and Facebook Messenger.</span></div>
                                </div>
                            </div>
                            <div class="checklist-item">
                                <i class="bi bi-check-circle-fill checklist-icon"></i>
                                <div>
                                    <div class="fw-semibold fs-sm text-color-sf">Automation Ready<span class="text-white-75 small fw-normal"> - Fully integrates with Salesforce Processes, Flows, and Apex Code.</span></div>
                                </div>
                            </div>
                            <div class="checklist-item">
                                <i class="bi bi-check-circle-fill checklist-icon"></i>
                                <div>
                                    <div class="fw-semibold fs-sm text-color-sf">Dynamic Personalization<span class="text-white-75 small fw-normal"> - Personalize messages using data from any Salesforce field.</span></div>
                                </div>
                            </div>
                            <div class="checklist-item">
                                <i class="bi bi-check-circle-fill checklist-icon"></i>
                                <div>
                                    <div class="fw-semibold fs-sm text-color-sf">Intelligent Scheduling<span class="text-white-75 small fw-normal"> - Time-zone aware delivery to avoid "dark hour" messaging.</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Bulk Messaging Quote Section -->
        <section class="py-5 bg-light">
            <div class="container py-lg-5">
                <div class="row g-5">
                    <div class="col-lg-6">
                        <div class="text-muted text-uppercase fw-semibold small mb-3" style="letter-spacing: 0.06em; font-size: 11px;">SCALE YOUR OPERATIONS EFFORTLESSLY</div>
                        <h2 class="section-title">Manual Batching and Salesforce Limits Should Not Slow Down Your Outreach</h2>
                        <p class="text-muted">High-scale communications require a native Salesforce solution that doesn't restrict you to 2,000 records at a time. Whether you're broadcasting to citizens or launching a global marketing campaign, 360 SMS App ensures your massive segmented lists are deployed in minutes, with full dark-hour awareness and multi-channel reach.</p>
                        <div class="d-flex flex-wrap gap-2 mt-4">
                            <span class="badge-custom border text-primary">Reports-to-Millions</span>
                            <span class="badge-custom border text-primary">Multi-Channel Native</span>
                            <span class="badge-custom border text-primary">Dark-Hour Aware</span>
                            <span class="badge-custom border text-primary">Zero-Code Setup</span>
                            <span class="badge-custom border text-primary">Dynamic Personalization</span>
                            <span class="badge-custom border text-primary">Automation Ready</span>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="quote-box">
                            <h4 class="fw-bold mb-4">"Bypass List View limits and manual effort by sending <span class="text-primary">directly from Reports.</span>"</h4>
                            <hr class="my-3 border-1 border-dark">
                            <p class="text-muted small">Sending messages to millions by simply selecting a report eliminates the manual effort of batching records and bypasses the governor limits that restrict ListViews to 2,000 records. 360 SMS App is the only native Salesforce app built for this level of scale and simplicity.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</main>

<?php get_footer('sms'); ?>