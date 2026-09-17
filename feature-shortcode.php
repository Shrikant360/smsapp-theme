<?php
/* Template Name: Feature Short Codes */
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
                        High-Volume · Pre-Approved · Brand-Synonymous · Salesforce-Native
                    </div>
                    <h1 class="display-5 fw-extrabold mb-4" style="line-height: 1.1;">
                        Get a Memorable SMS Short Code <span class="text-primary">for Calls to Action</span>
                    </h1>
                    <p class="mb-3 text-muted">
                        Create message blasts and campaigns for billboards, TV ads, and Google Ads that your customers will remember.
                    </p>
                    <p class="mb-5 text-muted small">
                        Go beyond standard numbers. Works across industries, CRMs, and texting channels with no separate infrastructure required - Salesforce-native.
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/09/div.ui-mock.webp" alt="Short Codes">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <div class="stat-strip py-2">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-md-2 stat-item border-0">
                    <div class="h3 fw-bold text-primary mb-0">200/s</div>
                    <div class="text-muted small">Messages per Second</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">17M+</div>
                    <div class="text-muted small">Messages per Day</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">Higher</div>
                    <div class="text-muted small">Reliability</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">Easy</div>
                    <div class="text-muted small">Number Recognition</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0" style="font-size: 1.5rem;">Memorable</div>
                    <div class="text-muted small">CTAs for Ads</div>
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
                        <div class="text-muted extra-small text-uppercase mb-4 fw-medium" style="letter-spacing: 0.05em; font-size: 10px;">YOUR MOST POTENT BRAND ASSET • SALESFORCE-NATIVE</div>
                        <ul class="numbered-list m-0 p-0">
                            <li class="bg-light-blue">
                                <div class="list-number">1</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Easy Number Recognition</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Own catchier numbers passers-by associate with your brand in seconds.</div>
                                </div>
                            </li>
                            <li style="margin-bottom: 3.5rem;">
                                <div class="list-number">2</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Higher Reliability</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Pre-approved messages - certain that all your messages go through.</div>
                                </div>
                            </li>
                            <li style="margin-bottom: 3.5rem;">
                                <div class="list-number">3</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Memorable CTAs for Ads</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Better returns for banners, radio, and billboards with easy 5–6 digit numbers.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">4</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Text in Massive Volumes</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Send 200 messages a second - over 17 million messages a day.</div>
                                </div>
                            </li>
                        </ul>
                        <div class="alert principles-alert mb-0 px-3 py-2 small d-flex align-items-center">
                            <i class="bi bi-check2 me-2"></i> Pre-approved, high-volume, brand-synonymous - the most powerful SMS number type available
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="fw-bold mb-4" style="line-height: 1.2;">Choose from a Variety of Dedicated SMS Short Codes</h2>
                    <p class="text-muted mb-4">Dedicated SMS short codes are numbers reserved for your brand alone and, over time, can become closely associated with your identity. Short codes are built for high-volume messaging, with pre-approved programs designed to support reliable delivery at scale.</p>
                    <div class="bg-light-blue p-4 rounded-3 mb-5 border-start border-primary border-4">
                       
                        <p class="text-muted small mb-0"> <span class="fw-semibold mb-2">Short codes make number recognition easier.</span>They help passers-by connect a simple 5–6 digit number with your brand in seconds, making billboards, radio, banners, and other ad placements easier to act on.</p>
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
                <h2 class="section-title">We'll Handle Everything for You</h2>
                <p class="section-subtitle mx-auto">From pre-approved templates to provisioning numbers and web compliance - we manage the full process</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-clipboard-check" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Pre-Approved Templates</h4>
                        <p class="card-text small">Message templates go through approval requirements to support compliant, higher-trust messaging programs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-file-earmark-text" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Documentation and Application</h4>
                        <p class="card-text small">We'll help you throughout the documentation and registration process for using shortcodes.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-hash" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Provisioning Numbers</h4>
                        <p class="card-text small">Finding an available number for your brand can be a slow, country-specific process. We help handle that for you.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-chat-dots" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Interactive Campaigns</h4>
                        <p class="card-text small">Profile individual purchase behavior to create personas, automate promotions and Google Ads.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-globe" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Issue Global Short Codes</h4>
                        <p class="card-text small">Running a global operation? Plan short code coverage market by market with the right provisioning and compliance support.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-shield-check" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Ensure Web Compliance</h4>
                        <p class="card-text small">Numbers issued also have compliance requirements that extend to websites, which we can handle for you.</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/09/LEFT_-UI-MOCK.webp" alt="Short Code Configuration">
                </div>
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-2" style="letter-spacing: 0.06em; font-size: 11px;">SHORT CODE TEXTING</div>
                    <h2 class="section-title mb-4">Choose from a Variety of Dedicated SMS Short Codes</h2>
                    <p class="opacity-75">Dedicated SMS short codes are numbers reserved for use only by you, and over time become synonymous with your brand identity.</p>
                    <div class="p-4 border-start border-primary border-4 bg-light mb-4 text-muted">
                        Configure the right short code type for your brand - Vanity, Random, or Free To End User
(FTEU). We'll handle provisioning, documentation, and compliance from start to finish.
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
                <h2 class="section-title">An Ideal Salesforce Short Code Integration</h2>
                <p class="section-subtitle">Short codes fit all industries. Use them for billboards, TV ads, and any calls to action where customers need to remember your number.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-hospital" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Healthcare and Wellness</h4>
                        <p class="card-text small">Appointment reminders, patient follow-ups, and care coordination alerts at massive volume.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-bank" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Finance and Mortgage</h4>
                        <p class="card-text small">Lead nurturing, rate alerts, and document collection with compliance at scale.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-house-door" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Real Estate</h4>
                        <p class="card-text small">'Send PROP YOUR AREA CODE to 53210 and receive property listings in your area.'</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-mortarboard" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Education and Academics</h4>
                        <p class="card-text small">Enrollment journeys, event reminders, and student engagement campaigns.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-briefcase" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Insurance and Legal</h4>
                        <p class="card-text small">Policy renewals, case updates, and secure document follow-ups at high volume.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-bag" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Retail and E-Commerce</h4>
                        <p class="card-text small">Coupons, sales alerts, promo codes, and authentication codes for shoppers.</p>
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
                    <!--<div class="section-label">MAKE THE INVESTMENT COUNT</div>-->
                    <h2 class="section-title">360 SMS and Short Codes - Better Together</h2>
                    <p class="mb-4 text-muted">Short codes help drive strong inbound engagement. 360 SMS helps you route, automate, and scale those interactions inside Salesforce across multiple workflows and channels.</p>
                    <div class="d-flex gap-3">
                        <a class="open-popup-form-on-click btn btn-primary btn-md px-4" aria-label="Speak to a Professional">Speak to a Professional →</a>
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-outline-light btn-md text-dark border px-4" aria-label="Book a Demo">Book a Demo →</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-dark-navy p-5 rounded-xl">
                        <div class="text-white-35 small mb-4 text-uppercase">Everything Short Codes + 360 SMS Bring to the Table</div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Automate Interactions Entirely<span class="text-white-75 small fw-normal"> - Reduce call volumes and operate with a lean team by qualifying inquiries before they reach the queue</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Same Shortcode for All Interactions<span class="text-white-75 small fw-normal"> - Pivot into sales, service, marketing, and support from the same number</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Trigger Actions and Capture Data<span class="text-white-75 small fw-normal"> - Capture essential data in Salesforce and trigger emails, tasks, record updates at scale</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Polling<span class="text-white-75 small fw-normal"> - Engage audiences with interactive SMS polls</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Promo Codes and Coupons<span class="text-white-75 small fw-normal"> - Distribute discount codes and sales alerts instantly at scale</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Authentication and Helplines<span class="text-white-75 small fw-normal"> - Secure OTP delivery and public interest messaging use cases</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Quote Section -->
    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="row g-5">
                <div class="col-lg-6">
                   
                    <h2 class="section-title">Create a Numerical Identity for Your Entire
Brand</h2>
                    <p class="text-muted">Short codes power a host of use cases across industries. From polling to promo codes,
authentication to public interest announcements - short codes make every campaign
memorable and measurable.</p>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <span class="badge-custom border text-primary">200 msg/sec</span>
                        <span class="badge-custom border text-primary">17M+ per Day</span>
                        <span class="badge-custom border text-primary">Pre-Approved</span>
                        <span class="badge-custom border text-primary">Brand Synonymous</span>
                        <span class="badge-custom border text-primary">Vanity Numbers</span>
                        <span class="badge-custom border text-primary">Global Coverage</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="quote-box">
                        <h4 class="fw-bold mb-4">"Send <span class="text-primary">PROP YOUR AREA CODE </span>to<span class="text-primary"> 53210</span></h4>
                        <hr class="my-3 border-1 border-dark">
                        <p class="text-muted small">Easy to remember. Hard to ignore. Built to drive response across billboards, TV ads, radio, and Google Ads. Short codes give your audience a number they can remember - and a channel they are more likely to use.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer('sms'); ?>