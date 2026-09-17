<?php
/* Template Name: Feature Bring Your Own Number */
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

    html { scroll-behavior: smooth }

    body {
        font-family: var(--font-body);
        font-size: var(--fs-body);
        font-weight: var(--fw-regular);
        line-height: var(--lh-body);
        color: var(--clr-text);
        background-color: var(--clr-bg)
    }

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
    .lead { font-size: var(--fs-body); font-weight: var(--fw-regular); line-height: var(--lh-lead); color: var(--clr-text-muted) }
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
    .form-label { font-size: var(--fs-label); font-weight: var(--fw-label); color: var(--clr-text); margin-bottom: .25rem }
    .form-control, .form-select { font-size: var(--fs-body); height: var(--input-height-md); border-radius: var(--radius-input); border: 1px solid var(--clr-border); color: var(--clr-text); background-color: var(--clr-surface); transition: var(--transition-color); padding: 0 var(--space-sm) }
    .form-control:focus, .form-select:focus { border-color: var(--clr-focus-ring); box-shadow: 0 0 0 3px rgba(0, 0, 0, .08); outline: none }
    .nav-link { font-size: var(--fs-nav); font-weight: var(--fw-nav); color: var(--clr-text); padding: var(--space-xs) var(--space-sm); transition: var(--transition-color) }
    .nav-link:hover, .nav-link.active { color: var(--clr-primary) }
    .icon-sm { font-size: var(--fs-icon-sm) }
    .icon-md { font-size: var(--fs-icon-md) }
    .icon-lg { font-size: var(--fs-icon-lg) }

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

    .bg-hero { background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important; }
    .bg-light-blue { background-color: #eef7ff !important; }
    .bg-cta { background-color: --clr-accent }
    .bg-dark-navy { background-color: #E8F0FB; color: var(--clr-text-inverse); border-radius: var(--radius-xl); }
    .bg-light { background-color: var(--clr-bg-alt); }
    .text-primary { color: #0057B8 !important; }
    .text-accent { color: var(--clr-secondary); }
    .text-white-75 { color: #000; opacity: 75% !important; }
    .text-white-35 { color: #000; opacity: 50%; }
    .hero-dashboard-card { box-shadow: var(--shadow-lg); border-radius: var(--radius-xl); overflow: hidden; background: white; }

    .numbered-list { list-style: none; counter-reset: pbd-counter; }
    .pbd-principles-box { background-color: #F7F7F5; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; }
    .list-number { flex-shrink: 0; width: 32px; height: 32px; background-color: var(--clr-primary); color: white; display: flex; align-items: center; justify-content: center; border-radius: 50%; font-weight: var(--fw-bold); font-size: 0.875rem; position: relative; z-index: 2; }
    .numbered-list li { border: 1px solid #CCE0F7; display: flex; gap: 1.25rem; margin-bottom: 1.5rem !important; position: relative; background-color: #fff; padding: 1rem; border-radius: 18px; transition: var(--transition-base); }
    .numbered-list li.active { background-color: #EEF7FF; border-color: var(--clr-primary); }
    .principles-alert { background-color: #eef7ff; border: 1px solid #CCE0F7; color: var(--clr-primary); font-weight: var(--fw-semibold); border-radius: 8px; }
    .checklist-item { display: flex; gap: 0.75rem; margin-bottom: 1rem; }
    .checklist-icon { color: var(--clr-secondary); }
    .quote-box { background: white; border-radius: var(--radius-lg); padding: var(--space-lg); box-shadow: var(--shadow-lg); position: relative; }
    .hero-list i { color: var(--clr-primary); font-size: 1.25rem; }

    /* Stats Strip */
    .traffic-stat-item { border-right: 1px solid #e2e8f0; padding: 30px 15px; }
    .traffic-stat-item:last-child { border-right: none; }
    .traffic-stat-strip { background-color: #ffffff; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0; }
    .traffic-stat-value { font-size: 32px; font-weight: 700; color: #0057B8; margin-bottom: 5px; }
    .traffic-stat-label { font-size: 12px; color: #64748b; text-transform: none; }

    /* Bring Your Own Number Section Styles */
    .byon-section { background-color: #f8fafc; padding: 100px 0; }
    .byon-card { border-radius: 20px; padding: 40px; height: 100%; background-color: #ffffff; transition: transform 0.3s ease; }
    .byon-card.porting { background-color: #eef7ff; border: 2px solid #0057B8; }
    .byon-card.hosting { border: 1px solid #e2e8f0; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05); }
    .byon-tag { display: inline-block; background-color: #0057B8; color: #ffffff; font-size: 10px; font-weight: 700; padding: 6px 12px; border-radius: 4px; margin-bottom: 25px; text-transform: uppercase; letter-spacing: 0.05em; }
    .byon-title { font-size: 22px; font-weight: 700; color: #1e293b; margin-bottom: 15px; }
    .byon-text { font-size: 14px; color: #64748b; line-height: 1.6; margin-bottom: 30px; }
    .byon-list { list-style: none; padding: 0; margin-bottom: 35px; }
    .byon-list-item { display: flex; gap: 12px; font-size: 13.5px; color: #334155; margin-bottom: 12px; line-height: 1.4; }
    .byon-list-item i { color: #0057B8; font-size: 16px; flex-shrink: 0; margin-top: 2px; }
    .byon-link { color: #0057B8; font-weight: 700; font-size: 14px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; }
    .byon-link:hover { text-decoration: underline; }
</style>

<main class="pbd-page">
    <!-- Hero Section -->
    <section class="hero-section bg-hero py-1" style="background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="badge-custom bg-light text-primary mb-3">
                        Port · Host · BYOP · Any Carrier
                    </div>
                    <h1 class="display-5 fw-extrabold mb-4" style="line-height: 1.1;">
                        Salesforce Bring Your Own Number - <span class="text-primary">Keep the Audience You've Already Built</span>
                    </h1>
                    <p class="mb-4 lead text-dark">
                        Keep Your Old Number and the Audience Around It When You Use Our Messaging Platform.
                    </p>
                    <div class="hero-list mb-5">
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <p class="mb-0">We are not a walled garden. Keep both your number and your provider when you choose 360 SMS. You have worked hard to cultivate an audience and brand recall - they remember your number. Why throw all of that away?</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Bring Your Own Number">Book a demo </a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App from AgentExchange">Get the App </a>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/06/BYON.webp" alt="Bring Your Own Number Dashboard">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <div class="traffic-stat-strip">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col traffic-stat-item">
                    <div class="traffic-stat-value">Keep</div>
                    <div class="traffic-stat-label">Your Existing Number</div>
                </div>
                <div class="col traffic-stat-item">
                    <div class="traffic-stat-value">Port</div>
                    <div class="traffic-stat-label">or Host to 360 SMS</div>
                </div>
                <div class="col traffic-stat-item">
                    <div class="traffic-stat-value">BYOP</div>
                    <div class="traffic-stat-label">Bring Your Own Provider</div>
                </div>
                <div class="col traffic-stat-item">
                    <div class="traffic-stat-value">VoIP</div>
                    <div class="traffic-stat-label">Porting Supported</div>
                </div>
                <div class="col traffic-stat-item">
                    <div class="traffic-stat-value">Any</div>
                    <div class="traffic-stat-label">Carrier or Aggregator</div>
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
                        <div class="text-muted extra-small text-uppercase mb-4 fw-medium" style="letter-spacing: 0.05em; font-size: 10px;">WE'RE NOT A WALLED GARDEN • SALESFORCE-NATIVE</div>
                        <ul class="numbered-list m-0 p-0">
                            <li class="bg-light-blue">
                                <div class="list-number">1</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Your Existing Number Gets Ported or Hosted to 360 SMS</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Bring over SMS capabilities from mobile, fixed line, or VoIP numbers via porting. Or bring over SMS and Telephony together via hosting.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">2</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Keep Your Provider Too - Salesforce BYOP</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">360 SMS supports Salesforce BYOP capability, allowing your provider to come over to 360 SMS alongside your number.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">3</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Retain Brand Recall and Carrier Plans</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Keep the phone number recognition and carrier plans for numbers you spent money advertising. Your audience already knows your number.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">4</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">No Number? We Will Set One Up for You</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Fixed-line long codes, short codes, Free To End User (FTEU) numbers, VoIP - choose any carrier, any aggregator.</div>
                                </div>
                            </li>
                        </ul>
                        <div class="alert principles-alert mb-0 px-3 py-2 small d-flex align-items-center">
                            <i class="bi bi-check2 me-2"></i> Keep your number, your provider, your audience, and your brand recall - nothing is lost when you switch
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="fw-bold mb-4" style="line-height: 1.2;">Other Apps Issue New Numbers. We Let You Keep Your Old One.</h2>
                    <p class="text-muted mb-4">Other messaging applications may issue new phone numbers or application numbers when you switch to them. We let you keep both your number and your provider. You have worked hard to cultivate an audience and build brand recall. They remember your numbers. Why throw all of that away?</p>
                    <div class="bg-light-blue p-4 rounded-3 mb-5 border-start border-primary border-4">
                        <div class="fw-semibold mb-2">Retain phone number recognition and carrier plans</div>
                        <p class="text-muted small mb-0">Your existing number gets ported or hosted to 360 SMS - bringing over SMS capabilities alone via porting, or both SMS and Telephony via hosting, depending on what your operation needs.</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Bring Your Own Number">Book a demo </a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App for Bring Your Own Number">Get the App </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bring Your Own Number Section -->
    <section class="byon-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3" style="font-size: 36px; color: #1e293b;">Bring Your Own Number - Two Ways to Do It</h2>
                <p class="text-muted mx-auto" style="max-width: 800px; font-size: 16px;">Choose porting to bring SMS capabilities, or hosting to bring both SMS and Telephony - we support both paths</p>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-6">
                    <div class="byon-card porting">
                        <div class="byon-tag">Porting</div>
                        <h3 class="byon-title">Bring Your Own Number - SMS Capability</h3>
                        <p class="byon-text">Your existing number gets ported to 360 SMS. Bring over SMS capabilities from mobile numbers, fixed line numbers, and virtual numbers (VoIP).</p>
                        <div class="byon-list">
                            <div class="byon-list-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Supports mobile numbers, fixed line / landline numbers, and VoIP</span>
                            </div>
                            <div class="byon-list-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>360 SMS is one of few vendors that port VoIP numbers - not just fixed line</span>
                            </div>
                            <div class="byon-list-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Important: No vendors port mobile numbers. Only fixed line and VoIP are portable.</span>
                            </div>
                            <div class="byon-list-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Retain your number's brand recall and existing audience recognition</span>
                            </div>
                            <div class="byon-list-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Keep the carrier plans for numbers you spent money advertising</span>
                            </div>
                        </div>
                        <a style="cursor:pointer;" class="open-popup-form-on-click byon-link">Speak to us about porting </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="byon-card hosting">
                        <div class="byon-tag">Hosting</div>
                        <h3 class="byon-title">Bring Your Own Number - SMS + Telephony</h3>
                        <p class="byon-text">Your existing number gets hosted on 360 SMS. Bring over both SMS and Telephony from fixed line / landline numbers and virtual numbers (VoIP).</p>
                        <div class="byon-list">
                            <div class="byon-list-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Supports fixed line / landline numbers and virtual numbers (VoIP)</span>
                            </div>
                            <div class="byon-list-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Brings over both SMS capability and Telephony - not SMS alone</span>
                            </div>
                            <div class="byon-list-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Ideal for businesses that need voice and messaging under one platform</span>
                            </div>
                            <div class="byon-list-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Retain your number's identity, audience, and carrier plan investment</span>
                            </div>
                            <div class="byon-list-item">
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Salesforce BYOP capability supported - your provider comes over too</span>
                            </div>
                        </div>
                        <a style="cursor:pointer;" class="open-popup-form-on-click byon-link">Speak to us about hosting </a>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/09/LEFT_-UI-MOCK.webp" alt="Number Setup Configuration">
                </div>
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-2" style="letter-spacing: 0.06em; font-size: 11px;">DON'T HAVE A NUMBER YET?</div>
                    <h2 class="section-title mb-4">We Will Set One Up for You - Any Type, Any Carrier, Any Aggregator</h2>
                    <p class="opacity-75">If you do not have an existing number to bring over, 360 SMS sets one up for you. Choose from fixed-line long codes, short codes, Free To End User (FTEU) numbers, and VoIP numbers - with full flexibility over carrier and aggregator selection.</p>
                    <div class="p-4 border-start border-primary border-4 bg-light mb-4 text-muted">
                        We are one of the few vendors that port VoIP numbers - not just fixed line. No vendors port mobile numbers; only fixed line and VoIP are portable. For mobile numbers, porting brings over SMS capability. Hosting brings over both SMS and Telephony for fixed line and VoIP numbers.
                    </div>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md">Book a demo <i class="bi bi-arrow-right icon-sm"></i></a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4">Get the App <i class="bi bi-arrow-right icon-sm"></i></a>
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
                    <div class="section-label">EXPERIENCE 'TRUE' NUMBER FREEDOM</div>
                    <h2 class="section-title">Switching Messaging Platforms Should Never Mean Starting Over</h2>
                    <p class="mb-4 text-muted">Your phone number is more than a dial string - it is an asset. It carries years of audience familiarity, advertising investment, and brand recall. When you switch messaging platforms and get assigned a new number, you lose all of that instantly. 360 SMS is built on the belief that your number, your provider, and your audience relationship belong to you - not to us.</p>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Bring Your Own Number">Book a demo </a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App for Bring Your Own Number">Get the App </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-dark-navy p-5 rounded-xl">
                        <div class="text-white-35 small mb-4 text-uppercase">Everything BYON Brings to the Table in 360 SMS</div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Keep Your Existing Number<span class="text-white-75 small fw-normal"> - Port or host your number to 360 SMS without losing brand recall or audience recognition</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Bring Your Own Provider (BYOP)<span class="text-white-75 small fw-normal"> - Salesforce BYOP support means your provider comes over to 360 SMS with your number</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">VoIP Porting Supported<span class="text-white-75 small fw-normal"> - One of few vendors that port VoIP numbers, not just fixed line or landline</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">SMS + Telephony via Hosting<span class="text-white-75 small fw-normal"> - Bring over both capabilities from fixed line and VoIP numbers via hosting</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Retain Carrier Plans &amp; Investment<span class="text-white-75 small fw-normal"> - Keep the plans for numbers you spent money advertising - no sunk-cost losses</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">New Number Setup if Needed<span class="text-white-75 small fw-normal"> - Long codes, short codes, FTEU, VoIP - any carrier, any aggregator, set up for you</span></div>
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
                    <h6 class="text-white mb-2">Keep Your Number, Your Provider &amp; Your Audience - Switch Without Starting Over</h6>
                    <p class="mb-0 text-white">Get the App • Ask for a Demo • 60K+ teams on Salesforce • 1,200+ AgentExchange reviews</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-light btn-md text-primary me-2">Book a demo</a>
                    <a class="open-popup-form-on-click btn btn-outline-light btn-md btn-cta-light text-light">Get the App</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Number Investment & Quote Section -->
    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-3" style="letter-spacing: 0.06em; font-size: 11px;">PROTECT YOUR NUMBER INVESTMENT</div>
                    <h2 class="section-title">A New Number Means Starting Over. That Is a Cost Most Businesses Cannot Afford.</h2>
                    <p class="text-muted">Every campaign you ran with your old number, every contact who saved it, every piece of printed collateral with that number on it - all of it becomes worthless the moment you switch to a platform that issues a new one. BYON means the only thing that changes is the platform behind the number. Your audience never has to know you switched.</p>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <span class="badge-custom border text-primary">Porting</span>
                        <span class="badge-custom border text-primary">Hosting</span>
                        <span class="badge-custom border text-primary">BYOP</span>
                        <span class="badge-custom border text-primary">VoIP Support</span>
                        <span class="badge-custom border text-primary">Fixed Line</span>
                        <span class="badge-custom border text-primary">Long Codes &amp; Short Codes</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="quote-box">
                        <h4 class="fw-bold mb-4">"They remember your number. <span class="text-primary">Why throw all of that away?</span>"</h4>
                        <hr class="my-3 border-1 border-dark">
                        <p class="text-muted small">You have worked hard to cultivate an audience and build brand recall around your number. Other messaging applications may issue new phone numbers when you switch to them. 360 SMS lets you keep both your number and your provider - ported or hosted to our platform, with zero disruption to the audience relationship you have already built.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer('sms'); ?>