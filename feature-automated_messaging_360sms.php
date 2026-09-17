<?php
/* Template Name: Feature Automated Messaging */
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
    .card { background-color: var(--clr-surface); border: 1px solid var(--clr-border); border-radius: var(--radius-card); box-shadow: var(--shadow-card); padding: var(--pad-card); transition: var(--transition-lift); height: 100% }
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
    .numbered-list { list-style: none; counter-reset: auto-counter; }
    .auto-principles-box { background-color: #F7F7F5; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; }
    .list-number { flex-shrink: 0; width: 32px; height: 32px; background-color: var(--clr-primary); color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-weight: var(--fw-bold); font-size: 0.875rem; position: relative; z-index: 2; }
    .numbered-list li { border: 1px solid #CCE0F7; display: flex; gap: 1.25rem; margin-bottom: 2rem !important; position: relative; background-color: #fff; padding: 10px; border-radius: 18px; }
    .principles-alert { background-color: #eef7ff; border: 1px solid #CCE0F7; color: var(--clr-primary); font-weight: var(--fw-semibold); border-radius: 8px; }
    .checklist-item { display: flex; gap: 0.75rem; margin-bottom: 1rem; }
    .checklist-icon { color: var(--clr-secondary); }
    .quote-box { background: white; border-radius: var(--radius-lg); padding: var(--space-lg); box-shadow: var(--shadow-lg); position: relative; }
</style>

<main class="automated-messaging-page">

    <!-- Hero Section -->
    <section class="hero-section bg-hero py-1" style="background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="badge-custom bg-light text-primary mb-3">
                        Apex · Flows · Process Builders · Integrations
                    </div>
                    <h1 class="display-5 fw-extrabold mb-4" style="line-height: 1.1;">
                        Salesforce Automated Text Message App, <span class="text-primary">Any Channel. Any Logic.</span>
                    </h1>
                    <p class="mb-3 text-muted">
                        Send Messages over Any Channel with Comprehensive Business Logic.
                    </p>
                    <p class="mb-5 text-muted small">
                        Use Apex, Process Builders, Flows, Workflows, and Integrations to automate every touchpoint - without writing a single line of code if you choose not to.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="#contact_form" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Automated Messaging">Book a demo →</a>
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" class="btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App from AppExchange">Get the App →</a>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/06/Automated-Messaging-1.webp" alt="Automated Messaging">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <div class="stat-strip py-2">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-md-2 stat-item border-0">
                    <div class="h3 fw-bold text-primary mb-0">Zero-Code</div>
                    <div class="text-muted small">iText Surveys</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">5+</div>
                    <div class="text-muted small">Automation Types</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">Dynamic</div>
                    <div class="text-muted small">Sender Numbers</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">Dark-Hour</div>
                    <div class="text-muted small">Aware Scheduling</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0" style="font-size: 1.5rem;">Any Channel</div>
                    <div class="text-muted small">SMS, MMS, Voicemail</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Core Principles Section -->
    <section class="core-principles py-5">
        <div class="container py-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="auto-principles-box">
                        <div class="text-muted extra-small text-uppercase mb-4 fw-medium" style="letter-spacing: 0.05em; font-size: 10px;">THE 360 AUTOMATION DIFFERENCE • SALESFORCE-NATIVE</div>
                        <ul class="numbered-list m-0 p-0">
                            <li class="bg-light-blue">
                                <div class="list-number">1</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Complete Ease-Of-Use</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">For all levels of Salesforce expertise - zero-code iText Surveys, Flows, or full Apex customization.</div>
                                </div>
                            </li>
                            <li style="margin-bottom: 3.5rem;">
                                <div class="list-number">2</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Absolute Flexibility-of-Choice</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Over any desired Salesforce automation type and level of process-control - from no-code to custom API integrations.</div>
                                </div>
                            </li>
                            <li style="margin-bottom: 3.5rem;">
                                <div class="list-number">3</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Reduce Customer Acquisition & Retention Costs</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Concentrate resources on automation that matters - from candidate recruitment to drip campaign management.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">4</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Schedule, Trigger, and Respond Automatically</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Pull and send messages to the latest phone numbers, process incoming texts by keywords, and schedule by relationship type.</div>
                                </div>
                            </li>
                        </ul>
                        <div class="alert principles-alert mb-0 px-3 py-2 small d-flex align-items-center">
                            <i class="bi bi-check2 me-2"></i> Limitless utility: No-code to full Apex - automation that scales with your Salesforce expertise
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="fw-bold mb-4" style="font-size: 2.5rem; line-height: 1.2;">End-to-End Automation That Reduces Cost &amp; Drives More Revenue</h2>
                    <p class="text-muted mb-4">Our end-to-end automation solution for SMS messaging in Salesforce helps reduce customer acquisition and retention cost by concentrating on two principal focuses: Complete Ease-Of-Use for all levels of Salesforce expertise, and Absolute Flexibility-of-Choice over any desired Salesforce automation type and level of process-control.</p>
                    <div class="bg-light-blue p-4 rounded-3 mb-5 border-start border-primary border-4">
                        <div class="fw-semibold mb-2">Can Salesforce send text messages automatically?</div>
                        <p class="text-muted small mb-0">360 SMS automation accommodates and elevates all levels of process control - from Zero-code iText Surveys to Apex Code &amp; Triggers to Third-Party API Integrations. Your team gets full control at every level.</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="#contact_form" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Automated Messaging">Book a demo →</a>
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" class="btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App for Automated Messaging">Get the App →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comprehensive Section -->
    <section class="bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Uncover Limitless Utility with No-Code Text Automation</h2>
                <p class="section-subtitle mx-auto">Trigger automated messages on record changes, life events, new objects, and incoming keywords - zero coding required.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-arrow-repeat" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Record Updates &amp; Changes</h4>
                        <p class="card-text small">Trigger automated messages for changes and updates to record details. Keep contacts informed the moment something important changes in Salesforce.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-calendar-event" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Life Events &amp; Reminders</h4>
                        <p class="card-text small">Send automated alerts on life events or reminders for upcoming appointments - the right message, to the right person, at exactly the right time.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-plus-square" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">New Object &amp; Record Creation</h4>
                        <p class="card-text small">Fire automated outbound messages on creation of new objects or records in Salesforce - ideal for onboarding, lead follow-up, and service workflows.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-chat-dots" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Reserved Keyword Triggers</h4>
                        <p class="card-text small">Process incoming texts based on reserved keywords and respond automatically - enabling hands-free conversations, survey routing, and case management.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Browser UI + Text Section -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 m-0 p-0">
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/06/Automated-Messaging-3.webp" alt="Outbound Automation Detail View">
                </div>
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-2" style="letter-spacing: 0.06em; font-size: 11px;">KEEP ALL YOUR AUTOMATION OPTIONS OPEN</div>
                    <h2 class="section-title mb-4">Every Level of Salesforce Automation - All in One Place</h2>
                    <p class="opacity-75">Process Builder, Workflows, Apex Classes and Triggers (on anything), Custom Code Automation, and Third-Party API calls - 360 SMS puts every level of control at your fingertips without limiting your options.</p>
                    <div class="p-4 border-start border-primary border-4 bg-light mb-4 text-muted">
                        Dynamically Choose Sender Numbers - easily change senders based on requirements with point-and-click configuration. Pull numbers from relevant fields automatically. Get pre-built choices like 'Record-Owner' or 'Last-Inbound' sender for smart routing.
                    </div>
                    <div class="d-flex gap-3">
                        <a href="#contact_form" class="btn btn-primary btn-md">Book a demo <i class="bi bi-arrow-right icon-sm"></i></a>
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" class="btn btn-outline-light btn-md text-dark border px-4">Get the App <i class="bi bi-arrow-right icon-sm"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industry / Use Case Section -->
    <section class="bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Automation for Every Business Operation</h2>
                <p class="section-subtitle">Internal and external operations, recruitment, customer support, drip campaigns - 360 SMS automation handles it all from within Salesforce, zero code if you choose.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-people" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Candidate Recruitment</h4>
                        <p class="card-text small">Recruit candidates remotely with fewer face-to-face interviews. Automate screening messages, interview reminders, and offer notifications from Salesforce.</p>
                        <a href="#" class="btn-ghost fw-bold btn-sm mt-auto" aria-label="Explore Candidate Recruitment">Explore <i class="bi bi-arrow-right icon-sm" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-gear" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Internal Operations</h4>
                        <p class="card-text small">Choose sender numbers dynamically, account for dark hours, reuse configurations from the 'Last SMS', and trigger texts internally across Salesforce objects.</p>
                        <a href="#" class="btn-ghost fw-bold btn-sm mt-auto" aria-label="Explore Internal Operations">Explore <i class="bi bi-arrow-right icon-sm" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-megaphone" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Drip Campaigns</h4>
                        <p class="card-text small">Add targets to a Drip Campaign audience directly from Salesforce flows. Schedule different messages for different uses, relationships, and scenarios.</p>
                        <a href="#" class="btn-ghost fw-bold btn-sm mt-auto">Explore <i class="bi bi-arrow-right icon-sm"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-robot" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Chatbots &amp; Surveys</h4>
                        <p class="card-text small">Implement complex Chatbots and Surveys with zero intervention. Choose between cold-start questions, reuse multi-purpose surveys, and avoid repetition.</p>
                        <a href="#" class="btn-ghost fw-bold btn-sm mt-auto">Explore <i class="bi bi-arrow-right icon-sm"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-headset" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Support &amp; Case Management</h4>
                        <p class="card-text small">Automate case updates, route incoming texts by keyword, and deliver MMS automatically for richer customer support experiences inside Salesforce.</p>
                        <a href="#" class="btn-ghost fw-bold btn-sm mt-auto">Explore <i class="bi bi-arrow-right icon-sm"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-telephone" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Ringless Voicemail</h4>
                        <p class="card-text small">Send Ringless Voicemails for a personal touch - automated, non-intrusive, and delivered straight to voicemail without interrupting the recipient.</p>
                        <a href="#" class="btn-ghost fw-bold btn-sm mt-auto">Explore <i class="bi bi-arrow-right icon-sm" style="color: var(--clr-primary);"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#" class="btn btn-primary btn-md px-5" aria-label="View all Use Cases">View all Use Cases</a>
            </div>
        </div>
    </section>

    <!-- Checklist Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="section-label">EXPERIENCE 'TRUE' AUTOMATION</div>
                    <h2 class="section-title">Automation Tools Don't Make You Automated</h2>
                    <p class="mb-4 text-muted">It's not the tool, but how you use it that drives results. 360 SMS builds automation at the center of everything - so you can focus on business outcomes instead of managing message queues. Be ready for any scale of operation with flexible automation architecture that works at every level of Salesforce expertise, even as your team and requirements grow.</p>
                    <div class="d-flex gap-3">
                        <a href="#contact_form" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Automated Messaging">Book a demo →</a>
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" class="btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App for Automated Messaging">Get the App →</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-dark-navy p-5 rounded-xl">
                        <div class="text-white-35 small mb-4 text-uppercase">The most comprehensive Salesforce SMS automation options</div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">iText Surveys (Zero-Code)<span class="text-white-75 small fw-normal"> - Hands-free conversations, zero intervention - start at any question in any survey</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Process Builders &amp; Flows<span class="text-white-75 small fw-normal"> - Point-and-click scheduling, templates, and recipient type selection inside Salesforce</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Apex Code &amp; Triggers<span class="text-white-75 small fw-normal"> - Trigger on anything, full custom logic, and advanced send-time processing</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Dynamic Sender Numbers<span class="text-white-75 small fw-normal"> - Point-and-click sender config, pull numbers from relevant fields in real-time</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Dark-Hour Awareness<span class="text-white-75 small fw-normal"> - Automatically account for time restrictions so messages arrive at the right moment</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Third-Party API Integrations<span class="text-white-75 small fw-normal"> - Extend with any external platform via custom API calls from Salesforce</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer('sms'); ?>
