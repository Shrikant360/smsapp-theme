<?php
/* Template Name: Feature Appointments Rescheduling */
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

    .display-5 {
        font-size: 2.3rem;
    }
</style>

<main class="pbd-page">
    <!-- Hero Section -->
    <section class="hero-section bg-hero py-1" style="background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="badge-custom bg-light text-primary mb-3">
                        Confirm · Remind · Reschedule · 93% Device Reach
                    </div>
                    <h1 class="display-5 fw-extrabold mb-4" style="line-height: 1.1;">
                        Appointments & Rescheduling - <span class="text-primary">Confirm, Remind, and Reschedule with Salesforce SMS</span>
                    </h1>
                    <p class="mb-4 lead text-dark fw-semibold">
                        No-Shows and Repeat Site Visits Are Costly - Help Customers Reschedule and Free Up Time for Serious Ones.
                    </p>
                    <div class="hero-list mb-5">
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <p class="mb-0">Automate bookings, reminders, slot selection, cancellations, and field data capture before every appointment — all over SMS or with chatbots, natively inside Salesforce, with up to 93% device reach.</p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Appointments & Rescheduling">Book a demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App from AgentExchange">Get the App →</a>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/06/Appointment-Recheduling-1.webp" alt="Appointments & Rescheduling SMS Flow">
                </div>
            </div>
        </div>
    </section>
    <style>
        .sms-section {
            background: #165ea8;
            color: #fff;
            padding: 40px 20px;
        }

        .sms-percentage {
            font-size: 64px;
            font-weight: 700;
            line-height: 1;
        }

        .sms-percentage span {
            font-size: 28px;
            vertical-align: top;
            margin-left: 5px;
        }

        .sms-text {
            font-size: 14px;
            line-height: 1.6;
            opacity: 0.95;
        }

        /* Mobile adjustments */
        @media (max-width: 768px) {
            .sms-percentage {
                font-size: 48px;
                text-align: center;
                margin-bottom: 15px;
            }

            .sms-text {
                text-align: center;
            }
        }
    </style>

    <section class="sms-section">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left: Percentage -->
                <div class="col-md-2 col-12 text-md-start text-center">
                    <div class="sms-percentage">
                        93<span>%</span>
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="col-md-10 col-12">
                    <div class="sms-text">
                        <strong>SMS reaches up to 93% of devices.</strong> SMS reminders pop up on the home screens
                        and notification bars of most devices - making them the most reliable channel for appointment
                        confirmations, reminders, and rescheduling prompts. No app download required, no email inbox
                        to check. The reminder lands where the customer is already looking.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Stats Strip -->
    <div class="stat-strip py-2">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-md-2 stat-item border-0">
                    <div class="h3 fw-bold text-primary mb-0">93%</div>
                    <div class="text-muted small">SMS Device Reach</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">Auto</div>
                    <div class="text-muted small">Slot Offers & Booking</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">Zero</div>
                    <div class="text-muted small">No-Shows Tolerated</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">Chatbot</div>
                    <div class="text-muted small">Book Demos or Appointments</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0" style="font-size: 1.5rem;">1-Key</div>
                    <div class="text-muted small">Confirm, Reschedule, Cancel</div>
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
                        <div class="text-muted extra-small text-uppercase mb-4 fw-medium" style="letter-spacing: 0.05em; font-size: 10px;">APPOINTMENT AUTOMATION WORKFLOW · SALESFORCE-NATIVE</div>
                        <ul class="numbered-list m-0 p-0">
                            <li class="bg-light-blue">
                                <div class="list-number">1</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Automatically Send Slots for the Customer to Pick From</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">When you automate bookings with 360 SMS, you can automate what slots the customer can pick from - sent automatically, replied to with a single keypress.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">2</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Receive Confirmations - Automatically</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Customer replies with their chosen slot number. Confirmation is sent back automatically. Salesforce records the appointment without any manual rep action.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">3</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Send Reminders with Reschedule & Cancel Options</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Send reminders at configured intervals. Include options to confirm presence, reschedule another slot, or cancel - all responded to with a single keypress.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">4</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Capture Field Data Before the Appointment</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Keep meetings short and meaningful by collecting important field data beforehand using dynamic questions and answers sent through SMS or chatbots - so every appointment starts informed.</div>
                                </div>
                            </li>
                        </ul>
                        <div class="alert principles-alert mb-0 px-3 py-2 small d-flex align-items-center">
                            <i class="bi bi-check2 me-2"></i> More appointments booked, fewer no-shows, shorter meetings - all automated inside Salesforce
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="fw-bold mb-4" style="font-size: 2.5rem; line-height: 1.2;">Book More Appointments That Result in Business - With Zero Manual Effort</h2>
                    <p class="text-muted mb-4">No-shows and repeat site visits are costly and hold up business. When you automate bookings, reminders, and cancellations for appointments with 360 SMS, you offer customers the right slots automatically, depend on SMS's unmatched 93% device reach, and capture field data before the appointment to keep every meeting short and meaningful.</p>
                    <div class="bg-light-blue p-4 rounded-3 mb-5 border-start border-primary border-4">
                        <div class="fw-semibold mb-2">Every step runs automatically inside Salesforce</div>
                        <p class="text-muted small mb-0">Automated messages and chatbots let you book more appointments, schedule and reschedule, send available slots to choose from, receive confirmations, and send reminders with options to reschedule along with the alert - so your team focuses on the meeting, not the coordination around it.</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Appointments & Rescheduling">Book a demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App for Appointments & Rescheduling">Get the App →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Appointments Grid Section -->
    <section class="bg-light">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Everything You Need to Book More Appointments That Convert</h2>
                <p class="section-subtitle mx-auto">Slot selection, confirmations, reminders, rescheduling, cancellations, and pre-appointment data capture - all automated over SMS</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-calendar-check" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Automated Slot Offers & Booking</h4>
                        <p class="card-text small">Send available appointment slots automatically. Customers reply with a single keypress to confirm their slot. The booking is recorded in Salesforce without any manual rep input - done in seconds, not minutes.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-bell" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Reminders with Reschedule Options</h4>
                        <p class="card-text small">Send appointment reminders at configured intervals. Include options to confirm presence, reschedule to another slot, or cancel - all handled with a single keypress reply that updates Salesforce automatically.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-clipboard-data" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Pre-Appointment Field Data Capture</h4>
                        <p class="card-text small">Keep meetings short and meaningful by collecting important field data beforehand. Use dynamic SMS questions and answers to gather what your team needs before the appointment starts - no forms, no friction.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-phone" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">93% Device Reach via SMS</h4>
                        <p class="card-text small">Depend on SMS for reminders. With up to 93% device reach, SMS reminders pop up on home screens and notification bars of most devices - ensuring customers never miss a reminder regardless of which app they have installed.</p>
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
                    <img src="<?php echo home_url(); ?>/wp-content/uploads/2026/06/Appointment-Recheduling-3.webp" alt="Appointment Booking SMS Flow in Action">
                </div>
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-2" style="letter-spacing: 0.06em; font-size: 11px;">TWO TYPES OF APPOINTMENTS COVERED</div>
                    <h2 class="section-title mb-4">Office Appointments & Callbacks - Both Automated, Both Inside Salesforce</h2>
                    <p class="opacity-75">360 SMS covers both appointment types. For office appointments, book customers at your place of business or practice - patients for medical check-ups, home-buyers for open houses, students for counselling, loan-seekers with officers. For callbacks and site visits, check customer availability for a call or home visit by service personnel - appliance maintenance, at-home check-ups, property valuations, and sales callbacks.</p>
                    <div class="p-4 border-start border-primary border-4 bg-light mb-4 text-muted">
                        All of these work the same way: offer slots, receive a keypress confirmation, send a reminder with reschedule and cancel options, capture field data dynamically before the appointment, and let Salesforce handle the record - zero manual coordination from your team.
                    </div>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md">Book a demo <i class="bi bi-arrow-right icon-sm"></i></a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4">Get the App <i class="bi bi-arrow-right icon-sm"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Industry / Use Case Section -->
    <section class="bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">Appointment Automation for Every Customer-Facing Team</h2>
                <p class="section-subtitle">From medical practices to real estate teams, from loan officers to field service crews - every team that books appointments benefits from automated SMS confirmation and rescheduling.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-heart-pulse" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Patients for Medical Check-Ups</h4>
                        <p class="card-text small">Send available appointment slots to patients automatically. Receive keypress confirmations, send reminders with reschedule options, and capture any pre-appointment health information via SMS before the visit begins.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-house-door" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Home-Buyers for Open Houses & Site Visits</h4>
                        <p class="card-text small">Book open-house and property site visit appointments over SMS. Stop agents showing up to empty appointments by sending automated day-before and day-of reminders with a reschedule option already included.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-mortarboard" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Students for Counseling & Enrollment</h4>
                        <p class="card-text small">Automate appointment booking for student counseling and enrollment sessions. Capture pre-session information via dynamic SMS questions so every counselor starts the appointment fully briefed.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-currency-dollar" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Loan-Seekers with Loan Officers</h4>
                        <p class="card-text small">Book approval meetings between loan-seekers and loan officers automatically. Collect financial details over SMS before the appointment starts. Keeps the meeting on track — no document hunting mid-conversation.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-tools" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Appliance Maintenance & Installation</h4>
                        <p class="card-text small">Check customer availability for at-home maintenance and installation visits. Send available technician slots, receive keypress confirmations, and capture pre-visit details to ensure the right parts and tools arrive on the first call.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-telephone-forward" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Sales Callbacks After Inquiries</h4>
                        <p class="card-text small">Check customer availability for a callback by sales personnel after a sales inquiry. Offer specific callback windows, confirm the slot, and send a reminder before the call - so the prospect is ready when your rep dials.</p>
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
                    <div class="section-label">EXPERIENCE TRUE APPOINTMENT AUTOMATION</div>
                    <h2 class="section-title">A No-Show Is Not Bad Luck - It's a Failure of the Reminder System</h2>
                    <p class="mb-4 text-muted">Most no-shows happen not because customers aren't interested, but because they forgot, couldn't find a way to reschedule easily, or weren't reminded at the right time on the right channel. 360 SMS appointment automation removes all three causes - sending reminders via the channel that reaches 93% of devices, making rescheduling a single keypress, and capturing data beforehand so even last-minute reschedules don't waste the slot.</p>
                    <div class="d-flex gap-3">
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-primary btn-md px-4" aria-label="Book a demo for Appointments & Rescheduling">Book a demo →</a>
                        <a class="open-popup-form-on-click btn btn-outline-light btn-md text-dark border px-4" aria-label="Get the App for Appointments & Rescheduling">Get the App →</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-dark-navy p-5 rounded-xl">
                        <div class="text-white-35 small mb-4 text-uppercase">Everything Appointment Automation brings to the table</div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Automated Slot Offers<span class="text-white-75 small fw-normal"> - Send available slots and receive keypress confirmations - zero rep effort per booking</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">93% Device Reach<span class="text-white-75 small fw-normal"> - SMS reminders pop up on home screens and notification bars - the highest-reach reminder channel available</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">One-Keypress Reschedule & Cancel<span class="text-white-75 small fw-normal"> - Customers confirm, reschedule, or cancel with a single reply - Salesforce updates automatically</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Pre-Appointment Field Data Capture<span class="text-white-75 small fw-normal"> - Dynamic SMS questions collect what your team needs before the meeting starts</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Both Appointment Types Covered<span class="text-white-75 small fw-normal"> - Office appointments and callbacks or site visits - fully automated for any customer-facing team</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Salesforce-Native<span class="text-white-75 small fw-normal"> - Every booking, confirmation, reschedule, and cancellation updates Salesforce records automatically</span></div>
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
                    <h6 class="text-white mb-2">Help Your Customer Reschedule - Free Up Your Time for Serious Customers, Inside Salesforce</h6>
                    <p class="mb-0 text-white">Book a demo • Get the App • 60K+ teams on Salesforce • 1,200+ AgentExchange reviews</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" class="btn btn-light btn-md text-primary me-2">Book a demo</a>
                    <a class="open-popup-form-on-click btn btn-outline-light btn-md btn-cta-light text-light">Get the App</a>
                </div>
            </div>
        </div>
    </div>

    <!-- No-Show Problem & Quote Section -->
    <section class="py-5 bg-light">
        <div class="container py-lg-5">
            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="text-muted text-uppercase fw-semibold small mb-3" style="letter-spacing: 0.06em; font-size: 11px;">STOP LOSING BUSINESS TO NO-SHOWS</div>
                    <h2 class="section-title">Every No-Show Is a Slot You Could Have Filled - If the Reminder Had Been Better</h2>
                    <p class="text-muted">A customer who no-shows wasn't necessarily a bad lead. They got busy, they forgot, they couldn't find your number to reschedule, or your email reminder went straight to spam. SMS appointment automation closes all of those gaps - reaching 93% of devices directly on the home screen, making rescheduling a single keypress, and keeping customers engaged before every appointment with dynamic pre-visit questions.</p>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <span class="badge-custom border text-primary">93% Device Reach</span>
                        <span class="badge-custom border text-primary">1-Keypress Reschedule</span>
                        <span class="badge-custom border text-primary">Auto Slot Offers</span>
                        <span class="badge-custom border text-primary">Pre-Appt Data Capture</span>
                        <span class="badge-custom border text-primary">Salesforce-Native</span>
                        <span class="badge-custom border text-primary">Chatbot Support</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="quote-box">
                        <h4 class="fw-bold mb-4">"Help your customer reschedule - <span class="text-primary">free up your time for serious customers</span>, all inside Salesforce."</h4>
                        <hr class="my-3 border-1 border-dark">
                        <p class="text-muted small">With up to 93% device reach, SMS reminders pop up on the home screens and notification bars of most devices. 360 SMS appointment automation lets you send available slots, receive keypress confirmations, send reminders with reschedule options, capture pre-appointment field data, and automatically cancel or book - all from within Salesforce, zero manual rep effort.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



</main>

<?php get_footer('sms'); ?>