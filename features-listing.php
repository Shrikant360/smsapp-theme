<?php
/* Template Name: Features Listing Page */
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
        border: 1px solid #fff;
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
        background-color: var(--clr-bg-dark);
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
        color: var(--clr-text-inverse);
        opacity: 75% !important;
    }

    .text-white-35 {
        color: var(--clr-text-inverse);
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
<section class="hero-section" style="background: linear-gradient(160deg, #EEF4FF 0%, #F0F4FF 40%, #F7F7F5 100%); padding: 56px 24px 0; text-align: center; overflow: hidden;">
    <div class="container">

        <!-- Badge -->
        <div class="d-inline-flex align-items-center gap-2 bg-white border rounded-pill px-3 py-2 mb-4 small fw-semibold text-dark" style="border-color:#dde6f5!important;font-size:12px;">
            <span style="width:8px;height:8px;border-radius:50%;background:#0057B8;display:inline-block;flex-shrink:0;"></span>
            Secure, Native &amp; Salesforce-Compliant
        </div>

        <!-- Heading -->
        <h1 class="fw-extrabold mb-4 mx-auto" style="line-height:1.1;letter-spacing:-0.03em;max-width:680px;">
            Everything 360 SMS Can Do<br>-Inside Salesforce
        </h1>

        <!-- Subtitle -->
        <p class="lead mb-4 mx-auto fs-16" style="max-width:560px;color:#64748B;">
            Out-of-the-box features built natively inside your CRM. No middleware, no external logins. Every message logged to your Salesforce record automatically.
        </p>

        <!-- CTAs -->
        <div class="d-flex gap-3 justify-content-center flex-wrap mb-4">
            <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4 fw-bold">Book a Demo </a>
            <a class="btn btn-outline-secondary btn-md px-4 bg-white text-dark fw-semibold open-popup-form-on-click" style="border-color:#CBD5E1;">Start Free Trial</a>
        </div>

        <!-- Social Proof -->
        <div class="d-flex align-items-center justify-content-center gap-3 flex-wrap mb-1">
            <div class="d-flex align-items-center gap-2">
                <div class="text-warning small"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                <span class="fw-bold small">4.9 / 5.0</span>
            </div>
            <span style="width:1px;height:16px;background:#CBD5E1;display:inline-block;"></span>
            <span class="text-muted" style="font-size:12.5px;">1,200+ AgentExchange reviews</span>
            <span style="width:1px;height:16px;background:#CBD5E1;display:inline-block;"></span>
            <span class="text-muted" style="font-size:12.5px;">60K+ users</span>
            <span style="width:1px;height:16px;background:#CBD5E1;display:inline-block;"></span>
            <span class="text-muted" style="font-size:12.5px;">10+ years</span>
        </div>

        <!-- Dashboard Image -->
        <div class="mx-auto" style="max-width:860px;">
            <img src="<?php echo esc_url(home_url('/')); ?>/wp-content/uploads/2026/04/Dashboard-floating-side-cards.png"
                 alt="360 SMS Dashboard inside Salesforce"
                 style="width:100%;display:block;border-radius:12px 12px 0 0;">
        </div>
    </div>
</section>

    <!-- Stats Strip -->
    <div class="stat-strip py-2">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-md-2 stat-item border-0">
                    <div class="h4 fw-bold text-primary mb-0">Out-of-the-box</div>
                    <div class="text-muted small">Native Features</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h4 fw-bold text-primary mb-0">15+</div>
                    <div class="text-muted small">Channels Supported</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h4 fw-bold text-primary mb-0">AI Agents</div>
                    <div class="text-muted small">Built-In</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h4 fw-bold text-primary mb-0">1,200+</div>
                    <div class="text-muted small">AgentExchange Reviews</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h4 fw-bold text-primary mb-0" style="font-size: 1.5rem;">60K+</div>
                    <div class="text-muted small">Salesforce Users</div>
                </div>
            </div>
        </div>
    </div>
 
    
    <!-- All Features Grid -->
<section class="py-5" style="background: #F5F9FF;">
  <div class="container">

    <div class="section-header mb-4">
      <h2 class="section-title" style="font-size:1.75rem;font-weight:800;letter-spacing:-0.02em;">Supported Features And Numbers</h2>
    </div>

    <!-- Filter Tabs -->
    <div class="filter-row mb-4" id="featureFilterTabs">
      <span class="filter-label" id="filterLabel">All Features and Numbers</span>
      <button class="feature-tab active" data-filter="messaging">Messaging</button>
      <button class="feature-tab" data-filter="automation">Automation</button>
      <button class="feature-tab" data-filter="numbers">Numbers</button>
      <button class="feature-tab" data-filter="compliance">Compliance</button>
      <button class="feature-tab" data-filter="all">All</button>
    </div>

    <style>
      /* ── Filter Row ── */
      .filter-row {
        display: flex;
        align-items: center;
        gap: 8px;
        flex-wrap: wrap;
      }

      .filter-label {
        font-size: 14px;
        font-weight: 700;
        color: #0F172A;
        white-space: nowrap;
        margin-right: 4px;
      }

      .feature-tab {
        font-family: inherit;
        font-size: 13px;
        font-weight: 500;
        color: #475569;
        padding: 7px 18px;
        border: 1.5px solid #CBD5E1;
        background: #ffffff;
        cursor: pointer;
        border-radius: 999px;
        transition: all 0.15s;
        white-space: nowrap;
        outline: none;
        line-height: 1;
      }

      .feature-tab:hover {
        border-color: #0057B8;
        color: #0057B8;
      }

      .feature-tab.active {
        background: #0057B8;
        color: #ffffff;
        border-color: #0057B8;
        font-weight: 600;
      }

      /* ── Card Items ── */
      .feature-card-item { display: flex; }
      .feature-card-item.d-none-filter { display: none !important; }

      /* ── Bottom Pills ── */
      .pill-messaging  { color: #0057B8; border-color: #0057B8; background: #EEF7FF; }
      .pill-automation {  color: #0057B8; border-color: #0057B8; background: #EEF7FF; }
      .pill-compliance {  color: #0057B8; border-color: #0057B8; background: #EEF7FF; }
      .pill-numbers    {  color: #0057B8; border-color: #0057B8; background: #EEF7FF; }
      .pill-calling    {  color: #0057B8; border-color: #0057B8; background: #EEF7FF; }
      .pill-global     {  color: #0057B8; border-color: #0057B8; background: #EEF7FF;}
      .pill-analytics  {  color: #0057B8; border-color: #0057B8; background: #EEF7FF; }

      /* ── Feature Card ── */
      .f-card {
        background: #fff;
        border: 1px solid #E2E8F0;
        border-radius: 12px;
        padding: 20px;
        height: 100%;
        display: flex;
        flex-direction: column;
        transition: box-shadow .2s, transform .2s;
      }
      .f-card:hover {
        box-shadow: 0 8px 28px rgba(0,0,0,.09);
        transform: translateY(-2px);
      }

      .f-icon {
        width: 38px;
        height: 38px;
        border-radius: 8px;
        background: #EEF4FF;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
      }
      .f-icon i { font-size: 1.05rem; color: #0057B8; }

      .f-pill {
        font-size: 10px;
        font-weight: 600;
        padding: 3px 10px;
        border-radius: 4;
        /*border: 1px solid;*/
      }

      .f-footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: auto;
        padding-top: 12px;
        border-top: 1px solid #F1F5F9;
      }

      .f-learn { font-size: 12px; font-weight: 600; color: #0057B8; text-decoration: none; }
      .f-learn:hover { color: #00438c; }
    </style>

    <!-- Cards Grid -->
    <!--
      TAB  CARD MAPPING (per screenshots):

      MESSAGING (9):
        AI-led iText, Conversation Manager, Bulk/Batch/Scheduled SMS,
        One-on-One Conversations, CTI Call Management, Sticky Sender,
        Multiple Language Support, SMS Analytics, Survey & Feedback SMS

      AUTOMATION (6):
        No-code Automated Messaging, Link Tracking, AI-powered Drip Campaigns,
        Appointments & Rescheduling, Salesforce Chatbot, Keyword Auto-Response

      NUMBERS (3):
        Bring Your Own Number, Shared Short Codes, Short Codes

      COMPLIANCE (3):
        Privacy By Design, Compliance & Opt-out, Consent Management
    -->
    <div class="row g-3" id="featuresGrid">
      <?php
      $features_grid = [

        // ── MESSAGING (9) ──────────────────────────────────────────────────────
        ['bi-chat-square-text', 'messaging',  'MESSAGING',  'Messaging',  'AI-led iText',
         'Manage most of your messaging operations from a single window console and boost productivity - send bulk messages, edit records inline, configure views, filter records, export data, and add follow-up task',
         'pill-automation', 'Automation', 'itext'],

        ['bi-window-stack',    'messaging',  'MESSAGING',  'Messaging',  'Conversation Manager',
         'Unified inbox for all inbound and outbound messages across every channel - AI routes and prioritizes threads so urgent conversations are never missed. Assign, filter, and resolve, all inside Salesforce.',
         'pill-messaging', 'Messaging', 'conversation-manager'],

        ['bi-send',            'messaging',  'MESSAGING',  'Messaging',  'Bulk, Batch &amp; Scheduled SMS',
         'Send messages to millions from any Salesforce Report, Campaign, or List View - personalize message content using merge fields, so every contact gets a message tailored with their own data. Schedule and auto-skip opted-out contacts. Zero exports needed.',
         'pill-messaging', 'Messaging', 'bulk-batch-scheduled-sms-texting'],

        ['bi-chat-dots',       'messaging',  'MESSAGING',  'Messaging',  'One-on-One Conversations',
         'Agents reply to inbound SMS and other messages in real time - AI suggests contextual replies using CRM data, so agents approve in one click, draft faster, and cut response times by up to 70%. Every message is auto logged to the Contact, Lead, or Account record.',
         'pill-calling', '2-way SMS', 'one-on-one-conversations'],

        ['bi-telephone',       'messaging',  'MESSAGING',  'CTI',        'CTI Call Management',
         'Click-to-dial, call logging, auto-forwarding, voice responders, and more - route calls based on Salesforce data and forward to multiple numbers to avoid missed opportunities. Fully native, zero external dialers.',
         'pill-calling', 'CTI', 'cti-call-auto-forwarding'],

        ['bi-pin-map',         'messaging',  'MESSAGING',  'Messaging',  'Sticky Sender',
         'Always message from the same number per contact - automatically reuse the last used number or apply configured rules to maintain consistency. Keep conversations familiar and recognizable, even across bulk messaging at scale.',
         'pill-messaging', 'Messaging','sticky-sender'],

        ['bi-translate',       'messaging',  'MESSAGING',  'Global',     'Multiple Language Support &amp; Translation',
         'Send SMS in any language with full Unicode support - AI translates messages based on recipient language in real time, so every conversation feels natural and locally relevant.',
         'pill-global', 'Global', 'multiple-language-support'],

        ['bi-bar-chart-line',  'messaging',  'MESSAGING',  'Analytics',  'SMS Analytics',
         'Track delivery, open, reply rates, and campaign ROI inside Salesforce - AI surfaces performance anomalies and recommends adjustments before results drop. Every metric attributed to the CRM record, no external analytics tool needed.',
         'pill-analytics', 'Analytics', ''],

        ['bi-bell',            'messaging',  'MESSAGING',  'Feedback',   'Survey &amp; Feedback SMS',
         'Send post-interaction surveys via SMS and capture replies directly into Salesforce fields - AI analyzes responses for sentiment and auto-escalates unhappy customers to support instantly. Collect NPS, score leads, trigger follow-up flows on autopilot.',
         'pill-analytics', 'Feedback'],

        // ── AUTOMATION (6) ─────────────────────────────────────────────────────
        ['bi-lightning',       'automation', 'AUTOMATION', 'Automation', 'No-code Automated Messaging',
         'Send and receive SMS directly from any Salesforce record - with AI predicting the next best message based on the contact\'s CRM history and prior replies. One-click texting, every message auto-logged in history.',
         'pill-automation', 'Automation', 'automated-messaging'],

        ['bi-link-45deg',      'automation', 'AUTOMATION', 'Analytics',  'Link Tracking',
         'Send links from any Salesforce Report to List View - AI maximises message content per segment in real time so every contact gets a copy that feels written for them. Schedule, throttle, and auto-skip opted-out contacts. Zero exports needed.',
         'pill-analytics', 'Analytics', 'link-tracking'],

        ['bi-arrow-repeat',    'automation', 'AUTOMATION', 'Automation', 'AI-powered Drip Campaigns',
         'Create dynamic multichannel drip campaigns based on past engagement, message performance, and customer behavior - AI generates content, auto-approves, activates campaigns, and builds follow-up sequences automatically.',
         'pill-automation', 'Automation', 'drip-campaigns'],

        ['bi-calendar-check',  'automation', 'AUTOMATION', 'Automation', 'Appointments &amp; Rescheduling',
         'Automate bookings, reminders, and cancellations - send available slots for selection or rescheduling options, along with timely reminders to keep schedules on track.',
         'pill-global', 'Global', 'appointments-and-rescheduling'],

        ['bi-robot',           'automation', 'AUTOMATION', 'AI',         'Salesforce Chatbot',
         'AI chatbot that qualifies leads, answers FAQs, books demos, and scores intent in real time - escalating only sales-ready contacts to reps automatically. Runs 24/7 via multiple channels, no human needed until the lead is hot.',
         'pill-calling', 'AI', 'salesforce-chatbot'],

        ['bi-reply-all',       'automation', 'AUTOMATION', 'Automation', 'Keyword Auto-Response',
         'Trigger instant replies, field updates, or Flow actions on keywords - AI understands intent beyond exact matches, so "not interested" and "no thanks" are handled just as correctly as STOP. Handle every reply, all within Salesforce.',
         'pill-automation', 'Automation', ''],

        // ── NUMBERS (3) ────────────────────────────────────────────────────────
        ['bi-phone',           'numbers',    'NUMBERS',    'Numbers',    'Bring Your Own Number',
         'Connect your existing business number to 360 SMS - keep your current number active inside Salesforce with no disruption. Customers recognise your number from day one, with no switching or downtime.',
         'pill-numbers', 'Numbers', 'bring-your-own-number'],

        ['bi-hash',            'numbers',    'NUMBERS',    'Numbers',    'Shared Short Codes',
         'Cost-effective 5–6 digit short codes shared across users - enabling high-volume messaging with strong deliverability and carrier compliance at a lower cost, ideal for scalable campaigns without dedicated number overhead.',
         'pill-numbers', 'Numbers', 'shared-short-codes'],

        ['bi-123',             'numbers',    'NUMBERS',    'Numbers',    'Short Codes',
         'Dedicated 5–6 digit numbers for high-volume SMS campaigns - offering maximum deliverability, fast throughput, and strong carrier trust for enterprise messaging at scale with consistent performance across large-scale outreach.',
         'pill-numbers', 'Numbers', 'short-codes'],

        // ── COMPLIANCE (3) ─────────────────────────────────────────────────────
        ['bi-shield-check',       'compliance', 'COMPLIANCE', 'Compliance', 'Privacy By Design',
         'Future-ready compliance management for existing and evolving texting regulations - ensuring GDPR, TCPA, CCPA, and HIPAA compliance with selective opt-in/opt-out controls. AI detects consent gaps, flags risky messages before sending, and enables intent-based opt-out handling.',
         'pill-compliance', 'Compliance', 'privacy-by-design'],

        ['bi-slash-circle',       'compliance', 'COMPLIANCE', 'Compliance', 'Compliance &amp; Opt-out',
         'STOP keywords, custom opt-out phrases, and consent field management - AI monitors regulatory changes and alerts admins when opt-out rules need updating. TCPA & GDPR ready, built to stay ahead of new texting regulations.',
         'pill-compliance', 'Compliance'],

        ['bi-file-earmark-check', 'compliance', 'COMPLIANCE', 'Compliance', 'Consent Management',
         'Capture, store, and honour SMS consent on every Salesforce Contact and Lead - AI identifies expiring consents and triggers re-consent campaigns before deadlines are missed. Full audit trail, consent expiry controls, and re-consent workflows built in.',
         'pill-compliance', 'Compliance'],
      ];
      foreach ($features_grid as $f):
        $f_slug = isset($f[8]) ? $f[8] : '';
      ?>
      <div class="col-lg-4 col-md-6 feature-card-item" data-cat="<?= $f[1] ?>">
        <div class="f-card w-100">
          <div class="d-flex align-items-center gap-2 mb-3">
            <div class="f-icon"><i class="bi <?= $f[0] ?>"></i></div>
            <div>
              <!--<div style="font-size:9px;font-weight:700;letter-spacing:.07em;text-transform:uppercase;color:#94A3B8;line-height:1.4;"><?//= $f[2] ?> · <?= $f[3] ?></div>-->
              <div style="font-size:.875rem;font-weight:700;color:#0F172A;line-height:1.3;"><?= $f[4] ?></div>
            </div>
          </div>
          <p style="font-size:11.5px;color:#64748B;line-height:1.6;flex:1;margin-bottom:16px;"><?= $f[5] ?></p>
          <div class="f-footer">
            <span class="f-pill <?= $f[6] ?>"><?= $f[7] ?></span>
            <?php if ($f_slug !== '') : ?>
            <a href="<?= esc_url(home_url('/' . $f_slug . '/')); ?>" class="f-learn">
                Learn More 
            </a>
            <?php else : ?>
            <span class="f-learn open-popup-form-on-click" style="cursor:pointer;">
                Contact us
            </span>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
  
  <!-- Blue CTA Banner -->
    <div class="container">
    <div class="row">
        <div class="col-12">
            <div class="bg-cta py-5 text-white rounded-4 px-4 px-lg-5 mt-5">
                <div class="row align-items-center">
                    
                    <div class="col-lg-8">
                        <p class="text-uppercase small mb-2 text-white opacity-75">
                            Get started today
                        </p>
                        <h5 class="mb-2 fw-semibold text-light">
                            Out-of-the-box features. One native Salesforce app.
                        </h5>
                        <p class="mb-0 text-white-50 small">
                            No code · No middleware · Up and running in minutes
                        </p>
                    </div>

                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn-white-solid text-primary me-2">
                            Book a Demo 
                        </a>
                        <a class="btn-white-outline open-popup-form-on-click">
                            Start Free Trial
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
  
</section>

    

<script>
document.addEventListener("DOMContentLoaded", function () {

  const tabs  = document.querySelectorAll('.feature-tab');
  const cards = document.querySelectorAll('.feature-card-item');
  const label = document.getElementById('filterLabel');

  /*
   * Tab  data-cat mapping
   * ─────────────────────────────────────────────
   * messaging    data-cat="messaging"   (9 cards)
   * automation   data-cat="automation"  (6 cards)
   * numbers      data-cat="numbers"     (3 cards)
   * compliance   data-cat="compliance"  (3 cards)
   * all          every card             (21 cards)
   */
  function filterCards(filter) {
    let visible = 0;

    cards.forEach(function (card) {
      const cat  = card.dataset.cat;
      const show = (filter === 'all') || (cat === filter);
      card.classList.toggle('d-none-filter', !show);
      if (show) visible++;
    });

    // Update label with visible count (matches screenshot style: "All Features (9)")
    const names = {
      messaging:  'All Features',
      automation: 'All Features',
      numbers:    'All Features',
      compliance: 'All Features',
      all:        'All Features'
    };
    label.innerHTML = names[filter] + ' <span style="color:#0057B8;font-weight:700;">(' + visible + ')</span>';
  }

  tabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
      tabs.forEach(function (t) { t.classList.remove('active'); });
      this.classList.add('active');
      filterCards(this.dataset.filter);
    });
  });

  // Default tab on page load: Messaging
  filterCards('messaging');

});
</script>

<!-- Features in Action Section -->
<section class="py-5 bg-white">
  <div class="container">

    <div class="mb-5">
      <h2 style="font-size:1.6rem;font-weight:800;color:#0F172A;letter-spacing:-0.02em;margin-bottom:6px;">See Exactly How 360 SMS Features Save Your Team Time</h2>
      <p style="font-size:13px;color:#94A3B8;margin:0;">Not generic messaging - purpose-built workflows for real Salesforce teams across every industry.</p>
    </div>

    <style>
      .fia-label {
        font-size: 9px;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: #0057B8;
        margin-bottom: 10px;
        display: block;
      }
      .fia-heading {
        font-size: 1.45rem;
        font-weight: 800;
        color: #0F172A;
        line-height: 1.2;
        letter-spacing: -0.02em;
        margin-bottom: 12px;
      }
      .fia-desc {
        font-size: 12.5px;
        color: #64748B;
        line-height: 1.65;
        margin-bottom: 20px;
      }
      .fia-stat-val {
        font-size: 1.5rem;
        font-weight: 800;
        color: #0057B8;
        line-height: 1;
        margin-bottom: 3px;
      }
      .fia-stat-label {
        font-size: 10.5px;
        color: #94A3B8;
        line-height: 1.3;
      }
      .fia-stat-box {
        display: flex;
        flex-direction: column;
      }
      .fia-img {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 14px;
        /*box-shadow: 0 8px 32px rgba(0, 87, 184, 0.10), 0 2px 8px rgba(0,0,0,0.06);*/
      }
    </style>

    <!-- ══════════════════════════════════════════
         ROW 1 - Bulk SMS (content left | image right)
    ══════════════════════════════════════════ -->
    <div class="row align-items-center g-5 mb-5 pb-5" style="border-bottom:1px solid #F1F5F9;">
      <!-- Content -->
      <div class="col-lg-6">
        <span class="fia-label">Bulk &amp; Batch SMS</span>
        <h3 class="fia-heading">Reach Millions of Leads in One Click – No Exports, No CSV</h3>
        <p class="fia-desc">Select any Salesforce Report or List View, compose a message, schedule delivery, and send. Every reply auto-logged. Opted-out contacts automatically skipped. No developer, no external tool.</p>
        <div class="d-flex gap-4">
          <div class="fia-stat-box">
            <div class="fia-stat-val">98%</div>
            <div class="fia-stat-label">Open rate</div>
          </div>
          <div class="fia-stat-box">
            <div class="fia-stat-val">Scalable</div>
            <div class="fia-stat-label">Outreach</div>
          </div>
          <div class="fia-stat-box">
            <div class="fia-stat-val">0</div>
            <div class="fia-stat-label">Developers needed</div>
          </div>
        </div>
      </div>
      <!-- Image -->
      <div class="col-lg-6">
        <img
          src="<?php echo esc_url(home_url('/')); ?>/wp-content/uploads/2026/04/div.ind-row-visual.png"
          alt="Bulk SMS Campaign UI in Salesforce"
          class="fia-img"
        >
      </div>
    </div>
    
    <!-- ══════════════════════════════════════════
         ROW 2 - Drip Campaigns (image left | content right)
    ══════════════════════════════════════════ -->
    <div class="row align-items-center g-5 mb-5 pb-5" style="border-bottom:1px solid #F1F5F9;">
      <!-- Image -->
      <div class="col-lg-6">
        <img
          src="<?php echo esc_url(home_url('/')); ?>/wp-content/uploads/2026/04/div.ind-row-visual-1.png"
          alt="Drip Campaign Sequence UI in Salesforce"
          class="fia-img"
        >
      </div>
      <!-- Content -->
      <div class="col-lg-6">
        <span class="fia-label">Drip Campaigns</span>
        <h3 class="fia-heading">Nurture on Autopilot – Branch, Personalize, Convert</h3>
        <p class="fia-desc">Build multi-step SMS sequences with AI that trigger on Lead creation, field changes, or date events. Branch on keyword replies. A/B test variants. Every touchpoint tracked in the CRM - zero manual work once live.</p>
        <div class="d-flex gap-4">
          <div class="fia-stat-box">
            <div class="fia-stat-val">Up to 34%</div>
            <div class="fia-stat-label">More ROI vs email</div>
          </div>
          <div class="fia-stat-box">
            <div class="fia-stat-val">Up to 27%</div>
            <div class="fia-stat-label">Less manual effort</div>
          </div>
        </div>
      </div>
    </div>

    <!-- ══════════════════════════════════════════
         ROW 3 - Unified Inbox (content left | image right)
    ══════════════════════════════════════════ -->
    <div class="row align-items-center g-5">
      <!-- Content -->
      <div class="col-lg-6">
        <span class="fia-label">Unified Messaging</span>
        <h3 class="fia-heading">Every Channel. One Inbox. No Tab Switching.</h3>
        <p class="fia-desc">SMS, WhatsApp, Instagram, CTI and 11 more - all replies land in one unified inbox inside Salesforce. Assign to reps, filter by status, resolve threads, and auto-log everything. No external logins, ever.</p>
        <div class="d-flex gap-4">
          <div class="fia-stat-box">
            <div class="fia-stat-val">&lt;90s</div>
            <div class="fia-stat-label">Avg response time</div>
          </div>
          <div class="fia-stat-box">
            <div class="fia-stat-val">15+</div>
            <div class="fia-stat-label">Channels unified</div>
          </div>
        </div>
      </div>
      <!-- Image -->
      <div class="col-lg-6">
        <img
          src="<?php echo esc_url(home_url('/')); ?>/wp-content/uploads/2026/04/div.ind-row-visual-2.png"
          alt="Unified Inbox UI in Salesforce"
          class="fia-img"
        >
      </div>
    </div>

  </div>
</section>

<!-- Getting Started Section -->
<section class="py-5 bg-white">
  <div class="container py-lg-3">
    <div class="row g-5 align-items-start" style="border-top:1px solid #F1F5F9;">

      <!-- ── LEFT: Steps ── -->
      <div class="col-lg-6">

        <h2 style="font-size:1.75rem;font-weight:800;color:#0F172A;line-height:1.15;letter-spacing:-0.025em;margin-bottom:10px;">
          From AgentExchange to First</br>Campaign in Under 10 Minutes 
        </h2>
        <p style="font-size:13px;color:#94A3B8;margin-bottom:36px;line-height:1.6;">
          No developer. No middleware. No external accounts. Just install, connect, and go.
        </p>

        <style>
          .gs-step {
            display: flex;
            gap: 16px;
            margin-bottom: 28px;
            position: relative;
          }
          .gs-step:not(:last-child)::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 34px;
            bottom: -14px;
            width: 2px;
            background: #E2E8F0;
            z-index: 0;
          }
          .gs-num {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: #0057B8;
            color: #fff;
            font-size: 13px;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            position: relative;
            z-index: 1;
          }
          .gs-body { padding-top: 4px; }
          .gs-title {
            font-size: 14px;
            font-weight: 700;
            color: #0F172A;
            margin-bottom: 4px;
            line-height: 1.3;
          }
          .gs-desc {
            font-size: 12px;
            color: #64748B;
            line-height: 1.65;
            margin: 0;
          }
        </style>

        <!-- Step 1 -->
        <div class="gs-step">
          <div class="gs-num">01</div>
          <div class="gs-body">
            <div class="gs-title">Install from AgentExchange</div>
            <p class="gs-desc">Install 360 SMS from AgentExchange with one-click setup. Why use an external login? All features live inside Salesforce natively.</p>
          </div>
        </div>

        <!-- Step 2 -->
        <div class="gs-step">
          <div class="gs-num">02</div>
          <div class="gs-body">
            <div class="gs-title">Sync Your Data &amp; Start Trial</div>
            <p class="gs-desc">Sync your records instantly and get a 7-day trial number to test messaging and calling features in real time.</p>
          </div>
        </div>

        <!-- Step 3 -->
        <div class="gs-step">
          <div class="gs-num">03</div>
          <div class="gs-body">
            <div class="gs-title">Share Configuration Requirements</div>
            <p class="gs-desc">Provide login access, number preferences, and org ID so setup is tailored to your business needs.</p>
          </div>
        </div>

        <!-- Step 4 -->
        <div class="gs-step">
          <div class="gs-num">04</div>
          <div class="gs-body">
            <div class="gs-title">Get Configured &amp; Go Live</div>
            <p class="gs-desc">Support team completes setup, enabling you to start messaging and calling customers across channels.</p>
          </div>
        </div>

      </div><!-- /left -->

      <!-- ── RIGHT: Included Card ── -->
      <div class="col-lg-6">
        <div style="background:#CFE1FA;border-radius:16px;padding:32px 32px 28px;">

          <p style="font-size:10px;font-weight:700;letter-spacing:0.1em;text-transform:uppercase;color:rgba(0,0,0);margin-bottom:20px;">
            Everything included from day one
          </p>

          <style>
            .inc-item {
              display: flex;
              align-items: flex-start;
              gap: 10px;
              margin-bottom: 13px;
            }
            .inc-item:last-of-type { margin-bottom: 0; }
            .inc-icon {
              width: 18px;
              height: 18px;
              border-radius: 50%;
              background: #0057B8;
              display: flex;
              align-items: center;
              justify-content: center;
              flex-shrink: 0;
              margin-top: 1px;
            }
            .inc-icon i { font-size: 9px; color: #fff; }
            .inc-text {
              font-size: 13px;
              font-weight: 500;
              color: rgba(0,0,0,0.6);
              line-height: 1.45;
            }
          </style>

          <div class="inc-item">
            <div class="inc-icon"><i class="bi bi-check"></i></div>
            <span class="inc-text">Out-of-the-box native features - all active on install</span>
          </div>
          <div class="inc-item">
            <div class="inc-icon"><i class="bi bi-check"></i></div>
            <span class="inc-text">15+ channels - SMS, WhatsApp, CTI &amp; more</span>
          </div>
          <div class="inc-item">
            <div class="inc-icon"><i class="bi bi-check"></i></div>
            <span class="inc-text">Salesforce message automation - no code needed</span>
          </div>
          <div class="inc-item">
            <div class="inc-icon"><i class="bi bi-check"></i></div>
            <span class="inc-text">TCPA &amp; GDPR compliance built in</span>
          </div>
          <div class="inc-item">
            <div class="inc-icon"><i class="bi bi-check"></i></div>
            <span class="inc-text">Link tracking, analytics in CRM</span>
          </div>
          <div class="inc-item">
            <div class="inc-icon"><i class="bi bi-check"></i></div>
            <span class="inc-text">AI and AI Agents - chatbot, voice, translation</span>
          </div>
          <div class="inc-item">
            <div class="inc-icon"><i class="bi bi-check"></i></div>
            <span class="inc-text">24×7 global support team</span>
          </div>
          <div class="inc-item" style="margin-bottom:24px;">
            <div class="inc-icon"><i class="bi bi-check"></i></div>
            <span class="inc-text">Dedicated onboarding specialist</span>
          </div>

          <!-- Divider -->
          <div style="border-top:1px solid rgba(255,255,255,0.1);margin-bottom:20px;"></div>

          <!-- CTA Buttons -->
          <div class="d-flex gap-3 flex-wrap mb-3">
            <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank"
               style="display:inline-flex;align-items:center;gap:6px;background:#0057B8;color:#fff;font-size:13px;font-weight:700;padding:10px 20px;border-radius:8px;text-decoration:none;border:none;white-space:nowrap;transition:background 0.15s;"
               onmouseover="this.style.background='#00438c'" onmouseout="this.style.background='#0057B8'">
              Install free on AgentExchange 
            </a>
            <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank"
               style="display:inline-flex;align-items:center;background:#fff;color:#0057B8;font-size:13px;font-weight:600;padding:10px 20px;border-radius:8px;text-decoration:none;border:1px solid rgba(255,255,255,0.25);white-space:nowrap;transition:border-color 0.15s,color 0.15s;"
               onmouseover="this.style.borderColor='rgba(255,255,255,0.6)'" onmouseout="this.style.borderColor='rgba(255,255,255,0.25)'">
              Book a demo
            </a>
          </div>

          <!-- Star Rating -->
          <div style="display:flex;align-items:center;gap:6px;flex-wrap:wrap;">
            <span style="color:#F59E0B;font-size:11px;letter-spacing:1px;">★★★★★</span>
            <span style="font-size:11px;color:rgba(0,0,0,0.4);">1,200+ reviews · AgentExchange #1 Rated</span>
          </div>

        </div>
      </div><!-- /right -->

    </div>
  </div>
</section>

    <!-- Industries Section -->
<section class="industries-section">
  <div class="container">

    <div class="industries-header">
      <h2 class="industries-title">Which Team are You Building For?</h2>
      <p class="industries-subtitle">360 SMS features are pre-configured for the workflows your industry depends on - not generic messaging you need to rebuild from scratch.</p>
    </div>

    <div class="row g-3">

      <!-- Healthcare -->
      <div class="col-lg-4 col-md-6">
        <div class="ind-card">
          <div class="ind-icon-wrap">
            <i class="bi bi-heart-pulse-fill ind-icon"></i>
          </div>
          <h4 class="ind-name">Healthcare</h4>
          <p class="ind-desc">Appointment reminders, patient follow-ups, prescription alerts, and care team coordination - HIPAA-conscious and auto-logged to every record.</p>
          <div class="ind-tags">
            <span class="ind-tag">Drip Campaigns</span>
            <span class="ind-tag">Bulk SMS</span>
            <span class="ind-tag">Compliance</span>
          </div>
          <div class="ind-footer">
            <div class="ind-stat">
              <span class="ind-stat-val">Up to 45%</span>
              <span class="ind-stat-label">Fewer no-shows</span>
            </div>
            <a href="<?php echo esc_url(home_url('/')); ?>healthcare-wellness/" class="ind-arrow">
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Real Estate -->
      <div class="col-lg-4 col-md-6">
        <div class="ind-card">
          <div class="ind-icon-wrap">
            <i class="bi bi-house-door-fill ind-icon"></i>
          </div>
          <h4 class="ind-name">Real Estate</h4>
          <p class="ind-desc">Re-engage cold leads, send property alerts, book viewings by SMS reply, and follow up at scale from Salesforce Reports - no CSV, no exports.</p>
          <div class="ind-tags">
            <span class="ind-tag">Bulk &amp; Batch</span>
            <span class="ind-tag">Link Tracking</span>
            <span class="ind-tag">Drip</span>
          </div>
          <div class="ind-footer">
            <div class="ind-stat">
              <span class="ind-stat-val">Up to 3×</span>
              <span class="ind-stat-label">More lead replies</span>
            </div>
            <a href="<?php echo esc_url(home_url('/')); ?>real-estate/" class="ind-arrow">
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Finance & Mortgage -->
      <div class="col-lg-4 col-md-6">
        <div class="ind-card">
          <div class="ind-icon-wrap">
            <i class="bi bi-bank2 ind-icon"></i>
          </div>
          <h4 class="ind-name">Finance &amp; Mortgage</h4>
          <p class="ind-desc">Rate alerts, document collection reminders, application status updates, and loan follow-ups that keep deals moving without manual effort.</p>
          <div class="ind-tags">
            <span class="ind-tag">Automated Messaging</span>
            <span class="ind-tag">iText</span>
          </div>
          <div class="ind-footer">
            <div class="ind-stat">
              <span class="ind-stat-val">60%</span>
              <span class="ind-stat-label">Faster pipeline</span>
            </div>
            <a href="<?php echo esc_url(home_url('/')); ?>finance/" class="ind-arrow">
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Education -->
      <div class="col-lg-4 col-md-6">
        <div class="ind-card">
          <div class="ind-icon-wrap">
            <i class="bi bi-mortarboard-fill ind-icon"></i>
          </div>
          <h4 class="ind-name">Education</h4>
          <p class="ind-desc">Nurture trial sign-ups into enrollments with multi-step drip sequences. Send course updates, event reminders, and deadlines across SMS and WhatsApp.</p>
          <div class="ind-tags">
            <span class="ind-tag">Drip Campaigns</span>
            <span class="ind-tag">WhatsApp</span>
          </div>
          <div class="ind-footer">
            <div class="ind-stat">
              <span class="ind-stat-val">Up to 38%</span>
              <span class="ind-stat-label">Higher enrollment</span>
            </div>
            <a href="<?php echo esc_url(home_url('/')); ?>education-academics/" class="ind-arrow">
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Recruitment -->
      <div class="col-lg-4 col-md-6">
        <div class="ind-card">
          <div class="ind-icon-wrap">
            <i class="bi bi-people-fill ind-icon"></i>
          </div>
          <h4 class="ind-name">Recruitment</h4>
          <p class="ind-desc">Send interview confirmations, job alerts, and offer letters via SMS. Book appointments by keyword reply - the bot handles scheduling end-to-end.</p>
          <div class="ind-tags">
            <span class="ind-tag">Appointments</span>
            <span class="ind-tag">AI Chatbot</span>
          </div>
          <div class="ind-footer">
            <div class="ind-stat">
              <span class="ind-stat-val">Up to 20hrs</span>
              <span class="ind-stat-label">Saved per week</span>
            </div>
            <a href="<?php echo esc_url(home_url('/')); ?>recruitment/" class="ind-arrow">
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Insurance -->
      <div class="col-lg-4 col-md-6">
        <div class="ind-card">
          <div class="ind-icon-wrap">
            <i class="bi bi-shield-fill-check ind-icon"></i>
          </div>
          <h4 class="ind-name">Insurance</h4>
          <p class="ind-desc">Click-to-dial with SMS follow-up, renewal reminders, claim status updates, and policy alerts - all from the same unified inbox inside Salesforce.</p>
          <div class="ind-tags">
            <span class="ind-tag">CTI</span>
            <span class="ind-tag">Sticky Sender</span>
          </div>
          <div class="ind-footer">
            <div class="ind-stat">
              <span class="ind-stat-val">Up to 52%</span>
              <span class="ind-stat-label">Less call time</span>
            </div>
            <a href="<?php echo esc_url(home_url('/')); ?>insurance/" class="ind-arrow ind-arrow-double">
              <i class="bi bi-arrow-right"></i>
              <!--<i class="bi bi-arrow-right"></i>-->
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<style>
  /* ── Section ── */
  .industries-section {
    padding: 64px 0;
    background-color: #EEF4FF;
  }

  /* ── Header ── */
  .industries-header {
    margin-bottom: 40px;
  }
  .industries-title {
    font-size: 1.75rem;
    font-weight: 800;
    color: #0F172A;
    letter-spacing: -0.025em;
    line-height: 1.2;
    margin-bottom: 10px;
  }
  .industries-subtitle {
    font-size: 13px;
    color: #64748B;
    line-height: 1.65;
    max-width: 480px;
    margin: 0;
  }

  /* ── Card ── */
  .ind-card {
    background: #FFFFFF;
    border: 1px solid #E8EEF6;
    border-radius: 14px;
    padding: 24px;
    height: 100%;
    display: flex;
    flex-direction: column;
    transition: box-shadow 0.2s ease, transform 0.2s ease;
  }
  .ind-card:hover {
    box-shadow: 0 8px 28px rgba(0, 0, 0, 0.08);
    transform: translateY(-2px);
  }

  /* ── Icon wrapper ── */
  .ind-icon-wrap {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background: #EEF4FF;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 14px;
    flex-shrink: 0;
  }
  .ind-icon {
    font-size: 1.125rem;
    color: #0057B8;
  }

  /* ── Name ── */
  .ind-name {
    font-size: 0.9375rem;
    font-weight: 700;
    color: #0F172A;
    margin-bottom: 8px;
    line-height: 1.3;
  }

  /* ── Description ── */
  .ind-desc {
    font-size: 12px;
    color: #64748B;
    line-height: 1.65;
    margin-bottom: 14px;
    flex: 1;
  }

  /* ── Tags ── */
  .ind-tags {
    display: flex;
    flex-wrap: wrap;
    gap: 5px;
    margin-bottom: 16px;
  }
  .ind-tag {
    font-size: 10px;
    font-weight: 600;
    color: #0057B8;
    background: #CFE1FA;
    border: 1px solid #E2E8F0;
    border-radius: 4px;
    padding: 3px 10px;
    white-space: nowrap;
    line-height: 1.4;
  }

  /* ── Footer ── */
  .ind-footer {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-top: 14px;
    border-top: 1px solid #F1F5F9;
    margin-top: auto;
  }

  /* ── Stat ── */
  .ind-stat {
    display: flex;
    align-items: baseline;
    gap: 6px;
  }
  .ind-stat-val {
    font-size: 1.1rem;
    font-weight: 800;
    color: #0057B8;
    line-height: 1;
    white-space: nowrap;
  }
  .ind-stat-label {
    font-size: 11px;
    color: #94A3B8;
    font-weight: 400;
    white-space: nowrap;
  }

  /* ── Arrow button ── */
  .ind-arrow {
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background: #EEF4FF;
    border: 1px solid #CCE0F7;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #0057B8;
    font-size: 13px;
    text-decoration: none;
    flex-shrink: 0;
    transition: background 0.15s ease, color 0.15s ease, border-color 0.15s ease;
  }
  .ind-arrow:hover {
    background: #0057B8;
    color: #ffffff;
    border-color: #0057B8;
  }

  /* Double arrow - Insurance */
  .ind-arrow-double {
    width: auto;
    border-radius: 999px;
    padding: 0 10px;
    gap: 2px;
  }
  .ind-arrow-double .bi-arrow-right:first-child {
    margin-right: -5px;
  }
</style>

</main>

<?php
get_footer('sms');
?>