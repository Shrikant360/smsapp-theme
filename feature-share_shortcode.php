<?php
/* Template Name: Feature Shared Short Codes */
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

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0 }
    html { scroll-behavior: smooth }
    body { font-family: var(--font-body); font-size: var(--fs-body); font-weight: var(--fw-regular); line-height: var(--lh-body); color: var(--clr-text); background-color: var(--clr-bg) }
    .text-color-sf { color: var(--clr-primary) !important; }
    img { max-width: 100%; height: auto; display: block }
    hr { border: none; border-top: 1px solid var(--clr-border); margin: var(--space-lg) 0 }
    h1, .h1 { font-size: var(--fs-h1); font-weight: var(--fw-heading) !important; line-height: var(--lh-heading); color: var(--clr-heading); letter-spacing: var(--ls-tight) }
    h2, .h2 { font-size: var(--fs-h2); font-weight: var(--fw-heading); line-height: var(--lh-heading); color: var(--clr-heading); letter-spacing: var(--ls-tight) }
    h3, .h3 { font-size: var(--fs-h3); font-weight: var(--fw-subheading); line-height: var(--lh-heading); color: var(--clr-heading) }
    h4, .h4 { font-size: var(--fs-h4); font-weight: var(--fw-subheading); line-height: var(--lh-lead); color: var(--clr-heading) }
    h5, .h5 { font-size: var(--fs-h5); font-weight: var(--fw-semibold); line-height: var(--lh-lead); color: var(--clr-heading) }
    h6, .h6 { font-size: var(--fs-h6); font-weight: var(--fw-semibold); line-height: var(--lh-lead); color: var(--clr-heading) }
    p { font-size: var(--fs-body); line-height: var(--lh-body); color: var(--clr-text); margin-bottom: var(--space-sm); font-weight: var(--fw-regular); }
    .lead { font-size: var(--fs-lead); font-weight: var(--fw-regular); line-height: var(--lh-lead); color: var(--clr-text-muted) }
    small { font-size: var(--fs-sm) }
    a { color: var(--clr-link); transition: var(--transition-color); text-decoration: none }
    a:hover { color: var(--clr-primary-hover) }
    section { padding: var(--space-2xl) 0 }
    .section-label { font-size: var(--fs-label); font-weight: var(--fw-label); letter-spacing: var(--ls-wider); text-transform: uppercase; color: var(--clr-primary); margin-bottom: var(--space-xs) }
    .section-title { font-size: var(--fs-h2); font-weight: var(--fw-heading); line-height: var(--lh-heading); color: var(--clr-heading); margin-bottom: var(--space-sm) }
    .section-subtitle { font-size: var(--fs-icon-sm); color: var(--clr-text-muted); line-height: var(--lh-lead); max-width: 640px }
    .section-header { margin-bottom: var(--space-xl) }
    .section-header.text-center .section-subtitle { margin-inline: auto }
    .btn { display: inline-flex; align-items: center; justify-content: center; gap: var(--space-xs); font-family: var(--font-body); font-weight: var(--fw-btn); font-size: var(--fs-btn-md); line-height: 1; border-radius: var(--radius-btn); border: 2px solid transparent; padding: var(--pad-btn-md); height: var(--btn-height-md); cursor: pointer; white-space: nowrap; transition: var(--transition-base); text-decoration: none }
    .btn-sm { font-size: var(--fs-btn-sm); padding: var(--pad-btn-sm); height: var(--btn-height-sm) }
    .btn-cta-light { border: 1px solid #fff !important; }
    .btn-cta-light:hover { color: #000 !important; }
    .btn-lg { font-size: var(--fs-btn-lg); padding: var(--pad-btn-lg); height: var(--btn-height-lg) }
    .btn-primary { background-color: var(--clr-primary); color: var(--clr-text-inverse); border-color: var(--clr-primary); box-shadow: var(--shadow-btn) }
    .btn-primary:hover { background-color: var(--clr-primary-hover); border-color: var(--clr-primary-hover); box-shadow: var(--shadow-md); transform: translateY(-1px) }
    .btn-secondary { background-color: var(--clr-secondary); color: var(--clr-text-inverse); border-color: var(--clr-secondary) }
    .btn-outline-primary { background-color: transparent; color: var(--clr-primary); border-color: var(--clr-primary) }
    .btn-outline-primary:hover { background-color: var(--clr-primary); color: var(--clr-text-inverse) }
    .btn-ghost { background-color: transparent; color: var(--clr-primary); border-color: transparent }
    .btn-ghost:hover { background-color: var(--clr-primary-light) }
    .btn:focus-visible { outline: 2px solid var(--clr-focus-ring); outline-offset: 3px }
    .card { background-color: var(--clr-surface); border: 1px solid var(--clr-border); border-radius: var(--radius-card); box-shadow: var(--shadow-card); padding: var(--pad-card); transition: var(--transition-lift); height: 100% !important; display: flex; flex-direction: column }
    .card:hover { box-shadow: var(--shadow-hover); transform: translateY(-2px) }
    .card-icon { font-size: var(--fs-icon-lg); color: var(--clr-primary); margin-bottom: var(--space-sm) }
    .card-title { font-size: var(--fs-h5); font-weight: var(--fw-subheading); color: var(--clr-heading); margin-bottom: var(--space-xs) }
    .card-text { font-size: var(--fs-body); color: var(--clr-text-muted); line-height: var(--lh-body) }
    .form-label { font-size: var(--fs-label); font-weight: var(--fw-label); color: var(--clr-text); margin-bottom: .25rem }
    .form-control, .form-select { font-size: var(--fs-body); height: var(--input-height-md); border-radius: var(--radius-input); border: 1px solid var(--clr-border); color: var(--clr-text); background-color: var(--clr-surface); transition: var(--transition-color); padding: 0 var(--space-sm) }
    .form-control:focus, .form-select:focus { border-color: var(--clr-focus-ring); box-shadow: 0 0 0 3px rgba(0,0,0,.08); outline: none }
    .nav-link { font-size: var(--fs-nav); font-weight: var(--fw-nav); color: var(--clr-text); padding: var(--space-xs) var(--space-sm); transition: var(--transition-color) }
    .nav-link:hover, .nav-link.active { color: var(--clr-primary) }
    .icon-sm { font-size: var(--fs-icon-sm) }
    .icon-md { font-size: var(--fs-icon-md) }
    .icon-lg { font-size: var(--fs-icon-lg) }
    .badge-custom { background-color: #E8F0FB !important; display: inline-flex; align-items: center; font-size: var(--fs-xs); font-weight: var(--fw-semibold); letter-spacing: var(--ls-wide); padding: .5rem .75rem; border-radius: var(--radius-pill); line-height: 1; border: 1px solid #CCE0F7; }
    .bg-hero { background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important; }
    .bg-light-blue { background-color: #eef7ff !important; }
    .bg-cta { background-color: --clr-accent }
    .bg-dark-navy { background-color: #E8F0FB; color: var(--clr-text-inverse); border-radius: var(--radius-xl); }
    .bg-light { background-color: var(--clr-bg-alt); }
    .text-primary { color: #0057B8 !important; }
    .text-accent { color: var(--clr-secondary); }
    .text-white-75 { color: #000; opacity: 75% !important; }
    .text-white-35 { color: #000; opacity: 50%; }
    .stat-item { border-right: 1px solid #e2e8f0; padding: 1.5rem 1rem; }
    .stat-item:last-child { border-right: none; }
    .stat-strip { background-color: #f8f9fb; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0; }
    .numbered-list { list-style: none; counter-reset: pbd-counter; }
    .pbd-principles-box { background-color: #F7F7F5; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; }
    .list-number { flex-shrink: 0; width: 32px; height: 32px; background-color: var(--clr-primary); color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-weight: var(--fw-bold); font-size: 0.875rem; position: relative; z-index: 2; }
    .numbered-list li { border: 1px solid #CCE0F7; display: flex; gap: 1.25rem; margin-bottom: 2rem !important; position: relative; background-color: #fff; padding: 10px; border-radius: 18px; }
    .principles-alert { background-color: #eef7ff; border: 1px solid #CCE0F7; color: var(--clr-primary); font-weight: var(--fw-semibold); border-radius: 8px; }
    .checklist-item { display: flex; gap: 0.75rem; margin-bottom: 1rem; }
    .checklist-icon { color: var(--clr-secondary); }
    .quote-box { background: white; border-radius: var(--radius-lg); padding: var(--space-lg); box-shadow: var(--shadow-lg); position: relative; }
</style>

<main class="pbd-page">
    <!-- Hero Section -->
    <section class="hero-section bg-hero py-1" style="background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="badge-custom bg-light text-primary mb-3">
                        Keywords · Shared Cost · Instant Activation · Compliance
                    </div>
                    <h1 class="display-5 fw-extrabold mb-4" style="line-height: 1.1;">
                        Use Shared Short Codes for Inbound Messaging <span class="text-primary">at a Fraction of the Cost</span>
                    </h1>
                    <p class="mb-3 text-muted">
                        Pay only for traffic tied to your keywords and get all the benefits and recognition of a dedicated short code.
                    </p>
                    <p class="mb-5 text-muted small">
                        No three-month wait. No website changes. No full-price commitment. Advertise branded keywords and share the number - keep all the impact.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a class="open-popup-form-on-click btn btn-primary btn-md px-4" aria-label="Speak to a Professional">Speak to a Professional →</a>
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-outline-light btn-md text-dark border px-4" aria-label="Book a Demo">Book a Demo →</a>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/09/div.ui-mock-1.webp" alt="Shared Short Codes">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <div class="stat-strip py-2">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-md-2 stat-item border-0">
                    <div class="h3 fw-bold text-primary mb-0">Minutes</div>
                    <div class="text-muted small">To Get Started</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">Fraction</div>
                    <div class="text-muted small">of Dedicated Cost</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">Same</div>
                    <div class="text-muted small">Carrier Trust</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">No</div>
                    <div class="text-muted small">Website Changes</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0" style="font-size: 1.5rem;">Pay Per</div>
                    <div class="text-muted small">Keyword Only</div>
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
                        <div class="text-muted extra-small text-uppercase mb-4 fw-medium" style="letter-spacing: 0.05em; font-size: 10px;">FASTER, COST-EFFECTIVE BRANDING • SALESFORCE-NATIVE</div>
                        <ul class="numbered-list m-0 p-0">
                            <li class="bg-light-blue">
                                <div class="list-number">1</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Same Trust for Much Less</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Achieve the same trust as dedicated shortcodes for mission-critical campaigns.</div>
                                </div>
                            </li>
                            <li style="margin-bottom: 3.5rem;">
                                <div class="list-number">2</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">No Three Month Waiting Period</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">12 weeks from applying to receiving a short code - ours brings that down to minutes.</div>
                                </div>
                            </li>
                            <li style="margin-bottom: 3.5rem;">
                                <div class="list-number">3</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">No Changes to Your Website</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Pre-approved and do not require explicit declarations or website changes.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">4</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Pay Only for Your Keywords</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">You'll only pay for messages received on your advertised keyword - not the number.</div>
                                </div>
                            </li>
                        </ul>
                        <div class="alert principles-alert mb-0 px-3 py-2 small d-flex align-items-center">
                            <i class="bi bi-check2 me-2"></i> Keyword identity - same carrier trust, fraction of the cost, active in minutes
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="fw-bold mb-4" style="line-height: 1.2;">Keyword Identity - Differentiate Traffic by Keywords</h2>
                    <p class="text-muted mb-4">Advertise branded keywords and combine them with other keywords to specify the purpose of incoming messages. With pre-approved templates, you don't need to make any changes to your webpages.</p>
                    <div class="bg-light-blue p-4 rounded-3 mb-5 border-start border-primary border-4">
                        <div class="fw-semibold mb-2">Easier texting compliance with pre-approved templates</div>
                        <p class="text-muted small mb-0">With pre-approved templates you never get marked for SPAM. Keyword identity means your brand stands out on a shared number just as clearly as on a dedicated one.</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a class="open-popup-form-on-click btn btn-primary btn-md px-4" aria-label="Speak to a Professional">Speak to a Professional →</a>
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-outline-light btn-md text-dark border px-4" aria-label="Book a Demo">Book a Demo →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comprehensive Section -->
    <section class="bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Differentiate Traffic By Keywords</h2>
                <p class="section-subtitle mx-auto">Buy only the keywords you need and differentiate your traffic - hassle-free usage, lower liability</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-cash-coin" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Pay Only Your Share</h4>
                        <p class="card-text small">Buy only the keywords you need and differentiate your traffic from other entities or co-owners through keyword identity.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-rocket-takeoff" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Start Campaigns Today</h4>
                        <p class="card-text small">Get pre-registered numbers and keywords as soon as you pay, so you can launch campaigns immediately.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-graph-up-arrow" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Campaign with Returns</h4>
                        <p class="card-text small">Launch text campaigns faster and respond to time-sensitive opportunities more efficiently.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-tag" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Don't Pay Full Price</h4>
                        <p class="card-text small">Find a dedicated short code prohibitively expensive? Share the cost with others and still own your keyword identity.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-people" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Want Co-owners? We'll Find Them</h4>
                        <p class="card-text small">We do all the groundwork for you to find other businesses interested in a shared short code - no sourcing required.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-shield-check" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Ensure Compliant Use by Co-owners</h4>
                        <p class="card-text small">All co-owners are required to comply with good-faith usage, so the numbers don't get marked for SPAM.</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/09/LEFT_-UI-MOCK-1.webp" alt="Shared Short Code Configuration">
                </div>
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-2" style="letter-spacing: 0.06em; font-size: 11px;">HASSLE-FREE USAGE, LOWER LIABILITY</div>
                    <h2 class="section-title mb-4">Pair with Texting Automation to Multiply Returns</h2>
                    <p class="opacity-75">Use the same keyword or different keyword identities to launch multiple services. Increase the value of incoming responses even further with scalable text interactions.</p>
                    <div class="p-4 border-start border-primary border-4 bg-light mb-4 text-muted">
                        Activation in minutes - not months. Run multiple services under one number, pair with texting automation, and let us source co-owners for you. Good-faith compliance enforced across all parties.
                    </div>
                    <div class="d-flex gap-3">
                        <a class="open-popup-form-on-click btn btn-primary btn-md">Speak to a Professional <i class="bi bi-arrow-right icon-sm"></i></a>
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-outline-light btn-md text-dark border px-4">Book a Demo <i class="bi bi-arrow-right icon-sm"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industry Section -->
    <section class="bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">An Ideal Shared Short Code Integration</h2>
                <p class="section-subtitle">Shared short codes fit every industry where cost-effective, keyword-driven inbound campaigns matter.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-house-door" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Real Estate</h4>
                        <p class="card-text small">Advertise keywords on billboards and drive inbound leads to agents - all routing handled inside Salesforce.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-credit-card" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Finance and Lending</h4>
                        <p class="card-text small">Keyword-driven inbound for loan inquiries, rate alerts, and document collection - all compliant.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-hospital" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Healthcare and Pharma</h4>
                        <p class="card-text small">Patient reminders, prescription alerts, and appointment confirmations delivered at shared short code speed.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-shield" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Insurance</h4>
                        <p class="card-text small">Policy renewals, claims follow-ups, and inbound inquiry routing - without dedicated short code cost.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-bank" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Banking and Payments</h4>
                        <p class="card-text small">Secure OTP delivery, account alerts, and payment confirmations at high volume.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-bag" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Retail and E-Commerce</h4>
                        <p class="card-text small">Coupons, flash sales, promo codes, and loyalty campaigns - instant activation, no waiting period.</p>
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
                    <!--<div class="section-label"></div>-->
                    <h2 class="section-title">Extend Shared Short Codes with 360 SMS</h2>
                    <p class="mb-4 text-muted">Make the most of the inbound engagement shared short codes can drive with additional tools that help you scale interactions. Chatbot and messaging automation make customer journeys more complete - and cut setup time and cost compared to dedicated short code provisioning. With 360 SMS, you're across multiple channels, and every interaction actually counts for something.</p>
                    <div class="d-flex gap-3">
                        <a class="open-popup-form-on-click btn btn-primary btn-md px-4" aria-label="Speak to a Professional">Speak to a Professional →</a>
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-outline-light btn-md text-dark border px-4" aria-label="Book a Demo">Book a Demo →</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-dark-navy p-5 rounded-xl">
                        <div class="text-white-35 small mb-4 text-uppercase">Everything Shared Short Codes + 360 SMS Bring to the Table</div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Run Promotions Faster<span class="text-white-75 small fw-normal"> - Reduce time to market and run inbound campaigns immediately after keyword activation</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Pair with Texting Automation<span class="text-white-75 small fw-normal"> - Increase returns from incoming responses with scalable text interactions</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Launch Multiple Services<span class="text-white-75 small fw-normal"> - Use the same keyword or different keyword identities to launch a host of services</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Compliant Co-owners<span class="text-white-75 small fw-normal"> - All co-owners required to comply with good-faith usage so numbers stay clean</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Campaign with Returns<span class="text-white-75 small fw-normal"> - Most reach and lowest turnaround for time-sensitive markets</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Hassle Free Activation<span class="text-white-75 small fw-normal"> - Pre-registered, pre-approved, no infrastructure changes required</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Quote Section -->
    <!-- Quote Section -->
<section class="py-5 bg-light d-none">
    <div class="container py-lg-5">
        <div class="row g-5">
            <div class="col-lg-6">
                <h2 class="section-title">Create a Keyword and Numeric Identity for Much Less, Much Faster</h2>
                <p class="text-muted">Shared short codes power keyword-driven campaigns across any industry. Own your keyword identity on a shared number and pay only for what you use.</p>
                <div class="d-flex flex-wrap gap-2 mt-4">
                    <span class="badge-custom border text-primary">BUY PROPERTY</span>
                    <span class="badge-custom border text-primary">PILL REFILLS</span>
                    <span class="badge-custom border text-primary">PAY INSTALLMENT</span>
                    <span class="badge-custom border text-primary">LOAN NOW</span>
                    <span class="badge-custom border text-primary">QUICK INSURE</span>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="quote-box">
                    <p class="fw-bold mb-1" style="font-size: 1.1rem;">Text <span class="text-primary">LOAN NOW</span> to <span class="text-primary">53210</span></p>
                    <p class="fw-bold mb-3" style="font-size: 1.1rem;">to get your rate in seconds</p>
                    <p class="text-muted small mb-3">- on billboards, TV ads, radio, and AdWords</p>
                    <hr class="my-3 border-1 border-dark">
                    <p class="text-muted small mb-0">Keyword identity means your brand stands out on a shared number just as clearly as on a dedicated one - at a fraction of the cost. No waiting period. No website changes. Start today.</p>
                </div>
            </div>
        </div>
    </div>
</section>



</main>

<?php get_footer('sms'); ?>