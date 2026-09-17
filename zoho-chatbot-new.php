<?php
/*
Template Name: Zoho AI Chatbot
*/
    get_header('zoho');
?>

<style>
    :root {
        --font-heading: 'Plus Jakarta Sans', sans-serif;
        --font-body: 'Plus Jakarta Sans', sans-serif;
        --fs-h1: clamp(2.5rem, 5vw, 2.9rem);
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

        /* ── Brand colours ── */
        --clr-primary: #0057B8;
        --clr-primary-hover: #00438c;
        --clr-primary-light: #e6f0f9;
        --clr-orange: #DA5D45;
        --clr-orange-hover: #c04e38;
        --clr-orange-light: #fdf0ed;
        --clr-secondary: #0057B8;
        --clr-accent: #DA5D45;

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
        --clr-focus-ring: var(--clr-orange);
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
        --shadow-sm: 0 1px 4px rgba(0,0,0,.08);
        --shadow-md: 0 4px 12px rgba(0,0,0,.10);
        --shadow-lg: 0 8px 24px rgba(0,0,0,.12);
        --shadow-hover: 0 12px 32px rgba(0,0,0,.16);
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
    .section-label { font-size: var(--fs-label); font-weight: var(--fw-label); letter-spacing: var(--ls-wider); text-transform: uppercase; color: var(--clr-orange); margin-bottom: var(--space-xs) }
    .section-title { font-size: var(--fs-h2); font-weight: var(--fw-heading); line-height: var(--lh-heading); color: var(--clr-heading); margin-bottom: var(--space-sm) }
    .section-subtitle { font-size: var(--fs-icon-sm); color: var(--clr-text-muted); line-height: var(--lh-lead); max-width: 640px }
    .section-header { margin-bottom: var(--space-xl) }
    .section-header.text-center .section-subtitle { margin-inline: auto }

    /* ── Buttons ── */
    .btn { display: inline-flex; align-items: center; justify-content: center; gap: var(--space-xs); font-family: var(--font-body); font-weight: var(--fw-btn); font-size: var(--fs-btn-md); line-height: 1; border-radius: var(--radius-btn); border: 2px #0058a3; padding: var(--pad-btn-md); height: var(--btn-height-md); cursor: pointer; white-space: nowrap; transition: var(--transition-base); text-decoration: none }
    .btn-sm { font-size: var(--fs-btn-sm); padding: var(--pad-btn-sm); height: var(--btn-height-sm) }
    .btn-lg { font-size: var(--fs-btn-lg); padding: var(--pad-btn-lg); height: var(--btn-height-lg) }

    /* Primary CTA → orange */
    .btn-primary { background-color: #0057B8; color: #fff; border-color: #0057B8; box-shadow: var(--shadow-btn) }
    .btn-primary:hover { background-color: var(--clr-orange-hover); border-color: var(--clr-orange-hover); box-shadow: var(--shadow-md); transform: translateY(-1px); color: #fff }

    .btn-cta-light { border: 1px solid #fff !important; }
    .btn-cta-light:hover { color: #000 !important; }
    .btn-secondary { background-color: var(--clr-secondary); color: var(--clr-text-inverse); border-color: var(--clr-secondary) }
    .btn-outline-primary { background-color: transparent; color: var(--clr-primary); border-color: var(--clr-primary) }
    .btn-outline-primary:hover { background-color: var(--clr-primary); color: var(--clr-text-inverse) }
    .btn-ghost { background-color: transparent; color: var(--clr-primary); border-color: transparent }
    .btn-ghost:hover { background-color: var(--clr-primary-light) }
    .btn:focus-visible { outline: 2px solid var(--clr-focus-ring); outline-offset: 3px }

    /* ── Cards ── */
    .card { background-color: var(--clr-surface); border: 1px solid var(--clr-border); border-radius: var(--radius-card); box-shadow: var(--shadow-card); padding: var(--pad-card); transition: var(--transition-lift); height: 100% }
    .card:hover { box-shadow: var(--shadow-hover); transform: translateY(-2px) }
    .card-icon { font-size: var(--fs-icon-lg); color: var(--clr-primary); margin-bottom: var(--space-sm) }
    .card-title { font-size: var(--fs-h5); font-weight: var(--fw-subheading); color: var(--clr-heading); margin-bottom: var(--space-xs) }
    .card-text { font-size: var(--fs-body); color: var(--clr-text-muted); line-height: var(--lh-body) }

    .form-label { font-size: var(--fs-label); font-weight: var(--fw-label); color: var(--clr-text); margin-bottom: .25rem }
    .form-control, .form-select { font-size: var(--fs-body); height: var(--input-height-md); border-radius: var(--radius-input); border: 1px solid var(--clr-border); color: var(--clr-text); background-color: var(--clr-surface); transition: var(--transition-color); padding: 0 var(--space-sm) }
    .form-control:focus, .form-select:focus { border-color: var(--clr-focus-ring); box-shadow: 0 0 0 3px rgba(218,93,69,.15); outline: none }
    .nav-link { font-size: var(--fs-nav); font-weight: var(--fw-nav); color: var(--clr-text); padding: var(--space-xs) var(--space-sm); transition: var(--transition-color) }
    .nav-link:hover, .nav-link.active { color: var(--clr-orange) }
    .icon-sm { font-size: var(--fs-icon-sm) }
    .icon-md { font-size: var(--fs-icon-md) }
    .icon-lg { font-size: var(--fs-icon-lg) }

    /* ── Hero badge → orange border + text ── */
    .badge-custom {
        /*background-color: var(--clr-orange-light) !important;*/
        display: inline-flex; align-items: center;
        font-size: var(--fs-xs); font-weight: var(--fw-semibold);
        letter-spacing: var(--ls-wide);
        padding: .5rem .75rem;
        border-radius: var(--radius-pill);
        line-height: 1;
        border: 1px solid #0057B8;
        color: #0057B8;
    }

    /* ── Heading accent span ── */
    .text-primary { color: var(--clr-orange) !important; }

    .bg-hero { background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important; }
    .bg-light-blue { background-color: #eef7ff !important; }
    .bg-cta { background-color: var(--clr-orange) }
    .bg-dark-navy { background-color: #E8F0FB; color: #DA5D45; border-radius: var(--radius-xl); }
    .bg-light { background-color: var(--clr-bg-alt); }
    .text-accent { color: var(--clr-orange); }
    .text-white-75 { color: #000; opacity: 75% !important; }
    .text-white-35 { color: #000; opacity: 50%; }

    /* ── Stat strip numbers → orange ── */
    .stat-item { border-right: 1px solid #e2e8f0; padding: 1.5rem 1rem; }
    .stat-item:last-child { border-right: none; }
    .stat-item .h3 { color: var(--clr-orange) !important; }
    .stat-strip { background-color: #f8f9fb; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0; }

    /* ── Numbered list ── */
    .numbered-list { list-style: none; counter-reset: pbd-counter; }
    .pbd-principles-box { background-color: #F7F7F5; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; }

    /* Number circles → orange */
    .list-number {
        flex-shrink: 0; width: 32px; height: 32px;
        background-color: var(--clr-orange);
        color: white;
        display: flex; align-items: center; justify-content: center;
        border-radius: 50%;
        font-weight: var(--fw-bold); font-size: 0.875rem;
        position: relative; z-index: 2;
    }
    .numbered-list li { border: 1px solid #fcd5cc; display: flex; gap: 1.25rem; margin-bottom: 2rem !important; position: relative; background-color: #fff; padding: 10px; border-radius: 18px; }

    /* Alert bar → orange */
    .principles-alert {
        background-color: var(--clr-orange-light);
        border: 1px solid var(--clr-orange);
        color: var(--clr-orange);
        font-weight: var(--fw-semibold);
        border-radius: 8px;
    }

    /* Blue highlight box in core section → keep blue */
    .bg-light-blue.p-4 { border-left-color: var(--clr-orange) !important; }
    .border-primary { border-color: var(--clr-orange) !important; }

    .checklist-item { display: flex; gap: 0.75rem; margin-bottom: 1rem; }
    .checklist-icon { color: var(--clr-orange); }
    .text-color-sf { color: var(--clr-orange) !important; }
    .quote-box { background: white; border-radius: var(--radius-lg); padding: var(--space-lg); box-shadow: var(--shadow-lg); position: relative; }

    /* ── Resource card "Case Study" badge ── */
    .badge-tag {
        background-color: var(--clr-orange) !important;
        color: #fff !important;
        border-radius: var(--radius-pill);
        font-size: 11px;
        letter-spacing: 0.02em;
    }

    /* ── CTA banner → orange bg ── */
    .bg-cta-banner { background-color: var(--clr-orange) !important; }

    /* ── btn-light in orange banner stays readable ── */
    .btn-light { background-color: #fff; color: var(--clr-orange) !important; border-color: #fff; }
    .btn-light:hover { background-color: #f5f5f5; }
    section.bg-light .row .card{
        min-height:260px !important;
    }
    .d-flex.gap-3 > .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        line-height: 1;
    }
</style>

<main class="pbd-page">
    <!-- Hero Section -->
    <section class="hero-section bg-hero py-1" style="background: #f5faf5">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="badge-custom mb-3">
                        AI-Powered · Zoho-native · 24/7 Engagement · One-click setup
                    </div>
                    <h1 class="fw-extrabold mb-4" style="line-height: 1.1;">
                        AI-Powered <span class="text-primary">Zoho Chatbot</span><br>For 24/7 Engagement
                    </h1>
                    <p class="mb-5 text-muted">
                        Run intelligent, real-time conversations natively inside Zoho CRM. That's 14+ years of CRM messaging experience doing the work - better engagement, better experiences, more opportunities that don't slip through.
                    </p>
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="https://marketplace.zoho.com/app/crm/360-sms-for-zoho-crm" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Get a Demo">Book a Demo</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Speak to a Zoho expert">Speak to a Zoho expert</a>
                    </div>
                    <div class="d-flex align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <div class="small">
                                <i class="bi bi-star-fill" style="color:#DA5D45;"></i>
                                <i class="bi bi-star-fill" style="color:#DA5D45;"></i>
                                <i class="bi bi-star-fill" style="color:#DA5D45;"></i>
                                <i class="bi bi-star-fill" style="color:#DA5D45;"></i>
                                <i class="bi bi-star-fill" style="color:#DA5D45;"></i>
                            </div>
                        </div>
                        <div class="text-muted small" style="font-size: 12px;"><strong>45% faster response</strong></div>
                        <div class="text-muted small" style="font-size: 12px;">37% more leads</div>
                        <div class="text-muted small" style="font-size: 12px;">100% Zoho-native</div>
                    </div>
                </div>
                <div class="col-lg-6 px-0">
                    <img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/04/chatbot.png" alt="Zoho AI Chatbot">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <div class="stat-strip py-2">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-md-2 stat-item border-0">
                    <div class="h3 fw-bold mb-0" style="color:#DA5D45;">45%</div>
                    <div class="text-muted small">Faster Response Time</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold mb-0" style="color:#DA5D45;">31%</div>
                    <div class="text-muted small">Improved Service Quality</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold mb-0" style="color:#DA5D45;">37%</div>
                    <div class="text-muted small">More Lead Generation</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold mb-0" style="color:#DA5D45;">14+</div>
                    <div class="text-muted small">Years CRM messaging experience</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold mb-0" style="color:#DA5D45; font-size: 1.5rem;">24/7</div>
                    <div class="text-muted small">Engagement engine</div>
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
                        <div class="text-uppercase mb-4 fw-medium" style="letter-spacing: 0.05em; font-size: 10px; color:#DA5D45;">HUMAN-LIKE AI CONVERSATIONAL BOT · ZOHO-NATIVE</div>
                        <ul class="numbered-list m-0 p-0">
                            <li class="bg-light-blue">
                                <div class="list-number">1</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">100% native Zoho integration — no redirection</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Your data and conversations live in Zoho CRM.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">2</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Go live in minutes with one-click setup</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">No middleware, no developers, no custom code.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">3</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">AI understands CRM context, not just messages</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Delivers contextual, action-oriented responses.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">4</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Auto-log every interaction to Zoho records</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Full visibility — zero manual data entry.</div>
                                </div>
                            </li>
                        </ul>
                        <div class="alert principles-alert mb-0 px-3 py-2 small d-flex align-items-center">
                            <i class="bi bi-check2 me-2"></i> All-in-one setup · Zoho CRM 24/7 engagement engine
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <div class="text-uppercase fw-semibold small mb-2" style="letter-spacing: 0.06em; font-size: 11px; color:#DA5D45;">HUMAN-LIKE AI CONVERSATIONAL BOT</div>
                    <h2 class="fw-bold mb-4" style="line-height: 1.2;">Deliver Contextual and Action-Oriented Responses Right from Your CRM</h2>
                    <p class="text-muted mb-4">Turn your Zoho CRM into a 24/7 engagement engine with a human-like AI chatbot that understands CRM context — not just messages. Automate lead qualification, customer support, demo booking, and more, all from inside Zoho with zero redirection.</p>
                    <div class="p-4 rounded-3 mb-5 border-start border-4" style="background-color:#EAF2FF; border-color:#0057B8 !important;">
                        <p class="text-muted small mb-0">It's your <strong>ALL-IN-ONE SETUP</strong> to turn Zoho CRM into a 24/7 engagement engine with AI-powered conversations — no separate integrations or technical knowledge needed.</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="https://marketplace.zoho.com/app/crm/360-sms-for-zoho-crm" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Get a Demo">Get a Demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Speak to an expert">Speak to an expert</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comprehensive Section -->
    <section class="bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Zoho CRM Chatbot Across Sales, Service, and Support</h2>
                <p class="section-subtitle mx-auto">From lead capture to post-sale follow-ups — one chatbot handles it all inside Zoho CRM</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-person-check" style="color:;"></i></div>
                        <h4 class="card-title">Instant Lead Qualification</h4>
                        <p class="card-text small">Automatically score and qualify inbound leads via SMS or WhatsApp before they reach your sales queue.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-calendar-check" style="color:;"></i></div>
                        <h4 class="card-title">Automated Demo &amp; Meeting Booking</h4>
                        <p class="card-text small">Let prospects self-schedule directly through the chatbot — synced instantly with your Zoho calendar.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-graph-up-arrow" style="color:;"></i></div>
                        <h4 class="card-title">2-Way Lead Nurturing at Scale</h4>
                        <p class="card-text small">Run two-way conversations that guide leads through the funnel — personalised, automated, and always on.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-headset" style="color:;"></i></div>
                        <h4 class="card-title">Customer Query Handling</h4>
                        <p class="card-text small">Resolve common customer queries instantly using CRM data — without involving a live agent.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-book" style="color:;"></i></div>
                        <h4 class="card-title">Business Offerings Knowledge Transfer</h4>
                        <p class="card-text small">Deliver instant, accurate answers on your products, services, and plans - reducing sales cycle length.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-star" style="color:;"></i></div>
                        <h4 class="card-title">Post-Purchase Feedback Collection</h4>
                        <p class="card-text small">Automatically collect satisfaction scores and NPS feedback after purchase - all logged in Zoho CRM.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-ticket" style="color:;"></i></div>
                        <h4 class="card-title">Support Request Management</h4>
                        <p class="card-text small">Triage, log, and route support tickets via chat — integrated directly with Zoho Desk and CRM.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-flag" style="color:;"></i></div>
                        <h4 class="card-title">High-Volume Failed Deliveries</h4>
                        <p class="card-text small">Re-engage failed delivery contacts at scale with automated follow-up sequences via WhatsApp or SMS.</p>
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
                    <img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/06/Zoho-Chatbot-3.webp" alt="Zoho AI Chatbot Configuration">
                </div>
                <div class="col-lg-6">
                    <div class="text-uppercase fw-semibold small mb-2" style="letter-spacing: 0.06em; font-size: 11px; color:#DA5D45;">CAPTURE MORE BUSINESS</div>
                    <h2 class="section-title mb-4">Capture More Business with an AI Chatbot in Zoho CRM</h2>
                    <p class="opacity-75">Most chatbots read messages. This one reads CRM context. Keep lead qualification, customer support, and demo booking running around the clock - all from inside Zoho, no redirection required.</p>
                    <div class="p-4 mb-4 text-muted" style="border-left: 4px solid #0057B8; background-color:#EAF2FF; border-radius: 0 8px 8px 0;">
                        Configure it once. After that, SMS, WhatsApp, and web run themselves. Live CRM data flows in, workflows kick off, records get updated - all while the conversation is still happening.
                    </div>
                    <div class="d-flex gap-3">
                        <a href="https://marketplace.zoho.com/app/crm/360-sms-for-zoho-crm" target="_blank" class="btn btn-primary btn-md">Get a Demo</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4">Speak to an Expert</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industry Section -->
    <section class="bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">An Ideal Zoho CRM Chatbot Integration for Every Industry</h2>
                <p class="section-subtitle">Whether you run a clinic, agency, or e-commerce store — the AI chatbot adapts to your workflows and customers.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-mortarboard" style="color:;"></i></div>
                        <h4 class="card-title">Education &amp; Edtech</h4>
                        <p class="card-text small">Automate enrolment queries, course information, and student follow-ups across SMS and WhatsApp.</p>
                        <!--<a href="<?php //echo esc_url(home_url('/')); ?>" class="btn-ghost fw-bold btn-sm mt-auto" style="color:;" aria-label="Explore Education and Edtech">Explore</a>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-bank" style="color:;"></i></div>
                        <h4 class="card-title">Financial Services</h4>
                        <p class="card-text small">Qualify loan inquiries, send rate alerts, and collect documents — all via automated chat in Zoho CRM.</p>
                        <!--<a href="<?php //echo esc_url(home_url('/')); ?>" class="btn-ghost fw-bold btn-sm mt-auto" style="color:;" aria-label="Explore Financial Services">Explore <i class="bi bi-arrow-right icon-sm" aria-hidden="true"></i></a>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-hospital" style="color:;"></i></div>
                        <h4 class="card-title">Healthcare Services</h4>
                        <p class="card-text small">Book appointments, send reminders, and handle patient FAQs — securely and at scale.</p>
                        <!--<a href="<?php //echo esc_url(home_url('/')); ?>" class="btn-ghost fw-bold btn-sm mt-auto" style="color:;" aria-label="Explore Healthcare Services">Explore <i class="bi bi-arrow-right icon-sm" aria-hidden="true"></i></a>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-house-door" style="color:;"></i></div>
                        <h4 class="card-title">Real Estate</h4>
                        <p class="card-text small">Capture buyer intent, qualify prospects, and schedule property viewings automatically via SMS.</p>
                        <!--<a href="<?php //echo esc_url(home_url('/')); ?>" class="btn-ghost fw-bold btn-sm mt-auto" style="color:;">Explore </a>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-people" style="color:;"></i></div>
                        <h4 class="card-title">Recruitment</h4>
                        <p class="card-text small">Screen candidates, schedule interviews, and send offer updates — all automated in Zoho CRM.</p>
                        <!--<a href="<?php //echo esc_url(home_url('/')); ?>" class="btn-ghost fw-bold btn-sm mt-auto" style="color:;">Explore </a>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-shield-check" style="color:;"></i></div>
                        <h4 class="card-title">Legal &amp; Compliance</h4>
                        <p class="card-text small">Intake client queries, collect case details, and send document reminders — without manual follow-up.</p>
                        <!--<a href="<?php //echo esc_url(home_url('/')); ?>" class="btn-ghost fw-bold btn-sm mt-auto" style="color:;">Explore </a>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-briefcase" style="color:;"></i></div>
                        <h4 class="card-title">Insurance</h4>
                        <p class="card-text small">Automate policy renewals, claims follow-ups, and agent routing — all inside Zoho CRM.</p>
                        <!--<a href="//<?php //echo esc_url(home_url('/')); ?>" class="btn-ghost fw-bold btn-sm mt-auto" style="color:;">Explore </a>-->
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-bag" style="color:;"></i></div>
                        <h4 class="card-title">Retail &amp; E-Commerce</h4>
                        <p class="card-text small">Send order updates, recover abandoned carts, and run promo campaigns via WhatsApp and SMS.</p>
                        <!--<a href="<?php //echo esc_url(home_url('/')); ?>" class="btn-ghost fw-bold btn-sm mt-auto" style="color:;">Explore </a>-->
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <!--<a href="<?php //echo esc_url(home_url('/')); ?>" class="btn btn-primary btn-md px-5" aria-label="View all Industries served">View all Industries</a>-->
            </div>
        </div>
    </section>

    <!-- Checklist Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2 class="section-title">360 SMS AI Chatbot for Zoho may surprise you</h2>
                    <p class="mb-4 text-muted">You may not expect a Salesforce SMS app to pack in such a powerful AI chatbot — but 360 SMS does. Complete customer journeys on a chatbot for as little as a fraction of the cost, and save months and thousands of dollars on custom code. Using 360 SMS you can engage customers through multiple channels and reduce the cost per interaction on every message.</p>
                    <p class="mb-5 text-muted small">For just $0.01 per CTA message, vs $1 per CTA message, reduce costs by 99% using our AI chatbot on any messaging experience.</p>
                    <div class="d-flex gap-3">
                        <a href="https://marketplace.zoho.com/app/crm/360-sms-for-zoho-crm" class="btn btn-primary btn-md px-4" aria-label="Start Free Now">Book a Demo</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Speak to an Expert">Speak to an Expert</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-dark-navy p-5 rounded-xl">
                        <div class="text-white-35 small mb-4 text-uppercase">All AI Chatbot Messaging experience Capabilities</div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill" ></i>
                            <div>
                                <div class="fw-semibold fs-sm" >Qualify Leads Automatically<span class="text-white-75 small fw-normal"> — Score and route leads from any channel before they reach your sales team</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill" ></i>
                            <div>
                                <div class="fw-semibold fs-sm" >Book Appointments via Chat<span class="text-white-75 small fw-normal"> — Let customers self-schedule from SMS or WhatsApp — synced with your Zoho calendar</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill" ></i>
                            <div>
                                <div class="fw-semibold fs-sm" >Trigger Zoho Workflows<span class="text-white-75 small fw-normal"> — Fire automations, update records, and send follow-ups based on chatbot responses</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill" ></i>
                            <div>
                                <div class="fw-semibold fs-sm" >Omnichannel — One Chatbot<span class="text-white-75 small fw-normal"> — Deploy across SMS, WhatsApp, and web from a single configuration in Zoho CRM</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill" ></i>
                            <div>
                                <div class="fw-semibold fs-sm" >AI Knowledge Base Responses<span class="text-white-75 small fw-normal"> — Answer product, pricing, and service questions automatically using your CRM data</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill" ></i>
                            <div>
                                <div class="fw-semibold fs-sm" >All of the above AI Messaging experience<span class="text-white-75 small fw-normal"> — combining into the perfect customer experience</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</main>

<script>
function toggleFaq(el) {
    const answer = el.nextElementSibling;
    const icon = el.querySelector('i');
    const isOpen = answer.style.display === 'block';
    answer.style.display = isOpen ? 'none' : 'block';
    icon.className = isOpen ? 'bi bi-plus fs-4' : 'bi bi-dash fs-4';
}
</script>

<?php get_footer('zoho'); ?>