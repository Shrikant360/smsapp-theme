<?php
/* Template Name: Feature Privacy By Design */
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
        /*--fs-body: clamp(1rem, 1.8vw, 1.125rem);*/
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
        /*background-color: var(--clr-text-inverse) !important;*/
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
</style>

<main class="pbd-page">
    <!-- Hero Section -->
    <section class="hero-section bg-hero py-1" style="background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="badge-custom bg-light text-primary mb-3">
                        Apex • Flows • Integrations
                    </div>
                    <h1 class="display-5 fw-extrabold mb-4" style="line-height: 1.1;">
                        Privacy And Security By Design, <span class="text-primary">The Way it's Supposed To Be</span>
                    </h1>
                    <p class="mb-3 text-muted">
                        Your Data Is Truly Yours, Even We Can't Access It.
                    </p>
                    <p class="mb-5 text-muted small">
                        Your Trust Precedes Everything. That's Why, Unlike Other Messaging Vendors, We Don't Use Any Servers Of Our Own.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Privacy and Security">Book a demo →</a>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/06/Privacy-By-Design-1.webp" alt="Privacy and Security">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <div class="stat-strip py-2">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-md-2 stat-item border-0">
                    <div class="h3 fw-bold text-primary mb-0">0</div>
                    <div class="text-muted small">External Servers</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">100%</div>
                    <div class="text-muted small">Salesforce-native Storage</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">TCPA</div>
                    <div class="text-muted small">& GDPR Compliant</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">HIPAA</div>
                    <div class="text-muted small">Conscious</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0" style="font-size: 1.5rem;">Set-and-forget</div>
                    <div class="text-muted small">Compliance</div>
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
                        <div class="text-muted extra-small text-uppercase mb-4 fw-medium" style="letter-spacing: 0.05em; font-size: 10px;">PRIVACY-FIRST ARCHITECTURE • HOW IT WORKS</div>
                        <ul class="numbered-list m-0 p-0">
                            <li class="bg-light-blue">
                                <div class="list-number">1</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Choose your Salesforce instance</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Everything is stored on Salesforce in geographical locations of your choice. We can't even see what you send stakeholders.</div>
                                </div>
                            </li>
                            <li style="margin-bottom: 3.5rem;">
                                <div class="list-number">2</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Get clear, simpler answers, not promises</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">We communicate all changes openly, transparently, and well before time. So you can make informed decisions.</div>
                                </div>
                            </li>
                            <li style="margin-bottom: 3.5rem;">
                                <div class="list-number">3</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Be at the center of all our decisions</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">We can't even see what you send stakeholders. Your data stays in your Salesforce instance, period.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">4</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Don't get caught in a cat-and-mouse game</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Use privacy-first architecture that holds up to all the compliance challenges of the future with ease.</div>
                                </div>
                            </li>
                        </ul>
                        <div class="alert principles-alert mb-0 px-3 py-2 small d-flex align-items-center">
                            <i class="bi bi-check2 me-2"></i> Expect continued, undiluted commitment to privacy, even in an uncertain future
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="fw-bold mb-4" style="font-size: 2.5rem; line-height: 1.2;">We Build Privacy at the Center of Everything We Do</h2>
                    <p class="text-muted mb-4">Compliance can be fickle. And every new regulation or rule change induces a mad dash to the lawyer's office, which costs a fortune in audits. All this, only to be washed over by another sweeping regulation. Welcome to the worst business nightmare - compliance purgatory. Use privacy-first architecture that holds up to all the compliance challenges of the future with ease.</p>
                    <div class="bg-light-blue p-4 rounded-3 mb-5 border-start border-primary border-4">

                        <p class="text-muted small mb-0"><span class="fw-semibold mb-2">Countries everywhere are drafting their own Data regulations - are you ready?</span>Certifications don't mean a thing if businesses don't get the basics right. Understand and yield the essence of compliance. It's unlikely that regulatory and oversight bodies globally will converge on a standardized set of rules for data compliance or PII anytime soon.</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Salesforce Native Privacy">Book a demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App for Salesforce Native Privacy">Get the App →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comprehensive Section -->
    <section class="bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">The Most Comprehensive Set-and-Forget Data Compliance, Now in Point-and-Click Reach</h2>
                <p class="section-subtitle mx-auto">We've pioneered several compliance features in the messaging space - so you can stay in the clear without losing business</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-bell-slash" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Unsubscribe Right from the Chat</h4>
                        <p class="card-text small">Opt-out conveniently right from the incoming alerts window. Manage unsubscribed contacts so they don't receive any unwanted messages</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-clipboard-check" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Templatized Messages</h4>
                        <p class="card-text small">Restrict teams to approved opt-in requests that provide enough context, and prevent being marked as SPAM.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-ban" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Do Not Call, DND</h4>
                        <p class="card-text small">Prevent teams from dialing customers after an opt-out. Use reserved keywords like STOP or UNSUB. Opt-in people in or out by default.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-plus-circle" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Make Exceptions</h4>
                        <p class="card-text small">Exempt one-time opt-in requests or life-saving alerts from Opt-in requirements.</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/09/div.sc-mock-1-1.webp" alt="img">
                </div>
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-2" style="letter-spacing: 0.06em; font-size: 11px;">WORRIED HOW COMPLIANCE IMPACTS BUSINESS?</div>
                    <h2 class="section-title mb-4">Don't Be - You're in the Best Hands</h2>
                    <p class="opacity-75">SMS Unsubscribe, Selective Opt-outs and Opt-ins, Double Opt-ins for messaging, User-Defined Opt-in and Opt-Out Categories - we've pioneered them all in the messaging space so you can stay in the clear without losing business.</p>
                    <div class="p-4 border-start border-primary border-4 bg-light mb-4 text-muted">
                        Make Exceptions - Exempt one-time opt-in requests or life-saving alerts from Opt-in requirements. Complete Multi-channel Opt-outs and Opt-ins - never miss a spot with opt-outs. Ensure either all or no messages go out to customers, across all channels.
                    </div>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md">Book a demo <i class="bi bi-arrow-right icon-sm"></i></a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4">Get the App <i class="bi bi-arrow-right icon-sm"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industry Section -->
    <section class="bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Privacy By Design for Every Industry</h2>
                <p class="section-subtitle">Every industry faces its own compliance challenges. 360 SMS privacy-first architecture holds up to all of them - out of the box, zero code.</p>
            </div>
            <div class="row g-4">
                <!-- Healthcare -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-hospital" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Healthcare &amp; Wellness</h4>
                        <p class="card-text small">HIPAA-conscious compliance, patient opt-out management, and care coordination with full data residency control.</p>
                    </div>
                </div>
                <!-- Finance -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-bank" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Finance &amp; Mortgage</h4>
                        <p class="card-text small">TCPA and GDPR compliant messaging, selective opt-outs by message type, and full consent tracking.</p>
                    </div>
                </div>
                <!-- Real Estate -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-house-door" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Real Estate</h4>
                        <p class="card-text small">Double opt-ins, Do Not Call management, and selective opt-outs so customers control what they receive.</p>
                    </div>
                </div>
                <!-- Education -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-mortarboard" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Education &amp; Academics</h4>
                        <p class="card-text small">Students choose what and how they want to hear— selective opt-ins and opt-outs that put their preferences first.</p>
                    </div>
                </div>
                <!-- Legal -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-briefcase" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Legal &amp; Insurance</h4>
                        <p class="card-text small">Case update compliance, selective opt-outs by channel, and comprehensive audit trails on Salesforce.</p>
                    </div>
                </div>
                <!-- Non-profit -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-heart" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Non-profit</h4>
                        <p class="card-text small">Donor opt-in management, exemptions for life-saving alerts, and full multi-channel opt-out control.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certification Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="section-label">EXPERIENCE 'TRUE' PRIVACY</div>
                    <h2 class="section-title">Compliance Certifications Don't Make You Compliant</h2>
                    <p class="mb-4 text-muted">It's not the certificate, but 'complying' that makes you compliant. 360 SMS builds privacy at the center of everything - so you can focus on improving business with more sanity. Be ready for the future of compliance with privacy-first architecture that holds up to all the challenges of the future, even in an uncertain regulatory environment.</p>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Salesforce Native Privacy">Book a demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App for Salesforce Native Privacy">Get the App →</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-dark-navy p-5 rounded-xl">
                        <div class="text-white-35 small mb-4 text-uppercase">The most comprehensive compliance features in the messaging space</div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">SMS Unsubscribe<span class="text-white-75 small fw-normal"> - Unsubscribe records are kept automatically, so no one on that list gets a message.</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Selective Opt-outs and Opt-ins <span class="text-white-75 small fw-normal"> - Customers pick exactly what message they want — by department, channel, or message type.</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Double Opt-ins for messaging <span class="text-white-75 small fw-normal"> - Don't assume consent - ask explicitly again before starting interactions</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">User-Defined Categories <span class="text-white-75 small fw-normal"> - Create custom fields and conditions for opt-in and opt-out categories</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Complete Multi-channel Opt-outs <span class="text-white-75 small fw-normal"> - Never miss a spot with opt-outs. Ensure either all or no messages go out to customers, across all channels</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">No External Servers <span class="text-white-75 small fw-normal"> - Everything stored on Salesforce in geographical locations of your choice</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Purgatory & Quote Section -->
    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-3" style="letter-spacing: 0.06em; font-size: 11px;">BE READY FOR THE FUTURE OF COMPLIANCE</div>
                    <h2 class="section-title">Compliance Purgatory is the Worst Business Nightmare</h2>
                    <p class="text-muted">Every new regulation or rule change induces a mad dash to the lawyer's office, which costs a fortune in audits - all this, only to be washed over by another sweeping regulation. Don't get caught in a cat-and-mouse game. Use privacy-first architecture that holds up to all the challenges of the future.</p>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <span class="badge-custom border text-primary">TCPA</span>
                        <span class="badge-custom border text-primary">GDPR</span>
                        <span class="badge-custom border text-primary">HIPAA-conscious</span>
                        <span class="badge-custom border text-primary">Do Not Call</span>
                        <span class="badge-custom border text-primary">Double Opt-in</span>
                        <span class="badge-custom border text-primary">Data Residency</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="quote-box">
                        <h4 class="fw-bold mb-4">"It's not the certificate, but <span class="text-primary">'complying'</span> that makes you compliant"</h4>
                        <hr class="my-3 border-1 border-dark">
                        <p class="text-muted small">Countries everywhere are drafting their own data regulations. Use privacy-first architecture that holds up to all the compliance challenges of the future with ease - and expect continued, undiluted commitment to privacy, even in an uncertain future.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer('sms'); ?>