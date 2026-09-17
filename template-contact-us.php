<?php

/**
 * Template Name: Contact Us
 *
 * Inner page sections only — header/footer via theme.
 *
 * @package SMS360
 */

get_header('sms');
?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<style>
    /* All selectors scoped under .sms-contact-page — no global rules */
    .sms-contact-page {
        --sms-cu-navy: #1a2744;
        --sms-cu-blue: #0057b8;
        --sms-cu-blue-v: #0d6efd;
        --sms-cu-sky: #7ec8ff;
        --sms-cu-sky-l: #e8f4ff;
        --sms-cu-sky-m: #c8e0f9;
        --sms-cu-ink: #1a1a1a;
        --sms-cu-ink2: #3a3a3a;
        --sms-cu-ink3: #6b7280;
        --sms-cu-bdr: #e4e8f0;
        --sms-cu-page-bg: rgba(0, 87, 184, 0.07);
        font-size: 14px;
        line-height: 1.5;
        color: var(--sms-cu-ink);
    }

    @keyframes sms-cu-pulse {

        0%,
        100% {
            opacity: 1;
        }

        50% {
            opacity: 0.35;
        }
    }

    .sms-contact-page .sms-contact-form-section__title {
        color: var(--sms-cu-navy);
        letter-spacing: -0.6px;
    }

    .sms-contact-page .sms-contact-form-section__layout {
        display: grid;
        grid-template-columns: minmax(0, 620px) 430px;
        justify-content: space-between;
        align-items: start;
        width: 100%;
    }

    @media (max-width: 1199.98px) {
        .sms-contact-page .sms-contact-form-section__layout {
            grid-template-columns: 1fr;
            row-gap: 2.5rem;
        }

        .sms-contact-page .sms-contact-form-section__sidebar {
            padding-top: 0 !important;
            max-width: 300px;
        }
    }

    .sms-contact-page .sms-contact-form-section__shortcode {
        background: var(--sms-cu-page-bg);
        border: 1.5px solid var(--sms-cu-bdr);
        border-radius: 18px;
        padding: 20px;
    }

    .sms-contact-page .sms-contact-form-section__sidebar-line {
        height: 1px;
        background: var(--sms-cu-bdr);
    }

    .sms-contact-page .sms-contact-form-section__info-card {
        border: 1.5px solid var(--sms-cu-bdr);
        border-radius: 16px;
        overflow: hidden;
        transition: box-shadow 0.2s, border-color 0.2s;
    }

    .sms-contact-page .sms-contact-form-section__info-card:hover {
        box-shadow: 0 6px 24px rgba(0, 87, 184, 0.1);
        border-color: var(--sms-cu-sky-m);
    }

    .sms-contact-page .sms-contact-form-section__info-icon {
        width: 36px;
        height: 36px;
        background: linear-gradient(135deg, var(--sms-cu-blue), var(--sms-cu-blue-v));
    }

    .sms-contact-page .sms-contact-form-section__info-title {
        color: var(--sms-cu-navy);
        font-size: 13.5px;
    }

    .sms-contact-page .sms-contact-form-section__phone-row,
    .sms-contact-page .sms-contact-form-section__email-row {
        border-bottom: 1px solid var(--sms-cu-page-bg);
    }

    .sms-contact-page .sms-contact-form-section__phone-row:last-child,
    .sms-contact-page .sms-contact-form-section__email-row:last-child {
        border-bottom: none;
    }

    .sms-contact-page .sms-contact-form-section__link {
        color: var(--sms-cu-ink2);
        font-size: 13.5px;
        transition: color 0.15s;
    }

    .sms-contact-page .sms-contact-form-section__link:hover {
        color: var(--sms-cu-blue-v);
    }

    .sms-contact-page .sms-contact-form-section__email-tag {
        width: 30px;
        height: 30px;
        color: var(--sms-cu-blue);
        background: var(--sms-cu-sky-l);
        border: 1px solid var(--sms-cu-sky-m);
        flex-shrink: 0;
    }

    .sms-contact-page .sms-contact-avail-section {
        background: #f3f5f8;
    }

    .sms-contact-page .sms-contact-avail-section__header {
        margin-bottom: 2.5rem;
    }

    .sms-contact-page .sms-contact-avail-section__title {
        color: var(--sms-cu-navy);
        font-size: 2rem;
        font-weight: 800;
        letter-spacing: -0.6px;
        line-height: 1.2;
        margin-bottom: 0.5rem;
    }

    .sms-contact-page .sms-contact-avail-section__sub {
        color: var(--sms-cu-ink3);
        font-size: 14px;
        line-height: 1.7;
        max-width: 520px;
        margin-bottom: 0;
    }

    .sms-contact-page .sms-contact-avail-section__tiles {
        align-items: stretch;
    }

    .sms-contact-page .sms-contact-avail-section__tile {
        background: #fff;
        border: 1.5px solid var(--sms-cu-bdr);
        border-radius: 16px;
        border-top: 4px solid var(--sms-cu-blue-v);
        position: relative;
        overflow: hidden;
        transition: box-shadow 0.2s, transform 0.2s;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        text-align: center;
        padding: 28px 20px 24px;
        min-height: 100%;
        box-shadow: 0 2px 12px rgba(0, 57, 184, 0.06);
    }

    .sms-contact-page .sms-contact-avail-section__tile:hover {
        box-shadow: 0 8px 30px rgba(0, 87, 184, 0.12);
        transform: translateY(-3px);
    }

    .sms-contact-page .sms-contact-avail-section__tile-icon {
        width: 48px;
        height: 48px;
        background: var(--sms-cu-sky-l);
        color: var(--sms-cu-blue-v);
        margin-bottom: 16px;
    }

    .sms-contact-page .sms-contact-avail-section__tile-heading {
        color: var(--sms-cu-navy);
        font-size: 2.8rem;
        font-weight: 800;
        letter-spacing: -0.5px;
        line-height: 1.15;
        margin-bottom: 6px;
    }

    .sms-contact-page .sms-contact-avail-section__tile-heading--sm {
        font-size: 2.8rem;
    }

    .sms-contact-page .sms-contact-avail-section__tile-heading em {
        color: var(--sms-cu-blue-v);
        font-style: normal;
    }

    .sms-contact-page .sms-contact-avail-section__tile-label {
        font-size: 11px;
        font-weight: 600;
        color: var(--sms-cu-ink3);
        text-transform: uppercase;
        letter-spacing: 0.08em;
        margin-bottom: 14px;
    }

    .sms-contact-page .sms-contact-avail-section__badge {
        font-size: 10px;
        font-weight: 700;
        padding: 4px 10px;
        margin-top: auto;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        background: var(--sms-cu-sky-l);
        color: var(--sms-cu-blue-v);
        border: 1px solid var(--sms-cu-sky-m);
    }

    .sms-contact-page .sms-contact-avail-section__badge-dot {
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: var(--sms-cu-blue-v);
        animation: sms-cu-pulse 2s infinite;
        flex-shrink: 0;
    }

    .sms-contact-page .sms-contact-offices-section {
        background: var(--sms-cu-page-bg);
    }

    .sms-contact-page .sms-contact-offices-section__eyebrow {
        background: var(--sms-cu-sky-l);
        color: var(--sms-cu-blue);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        padding: 5px 14px;
        display: inline-flex;
        align-items: center;
        gap: 7px;
    }

    .sms-contact-page .sms-contact-offices-section__eyebrow-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--sms-cu-blue-v);
    }

    .sms-contact-page .sms-contact-offices-section__title {
        color: var(--sms-cu-navy);
        letter-spacing: -0.6px;
    }

    .sms-contact-page .sms-contact-offices-section__badge-icon {
        width: 28px;
        height: 28px;
        background: linear-gradient(135deg, var(--sms-cu-blue) 0%, var(--sms-cu-blue-v) 100%);
    }

    .sms-contact-page .sms-contact-offices-section__badge-item {
        border-color: var(--sms-cu-bdr) !important;
        color: var(--sms-cu-ink2);
    }

    .sms-contact-page .sms-contact-offices-section__accordion-item {
        border-color: var(--sms-cu-bdr) !important;
        transition: border-color 0.25s, box-shadow 0.25s;
    }

    .sms-contact-page .sms-contact-offices-section__accordion-item:hover {
        border-color: var(--sms-cu-sky-m) !important;
        box-shadow: 0 6px 24px rgba(0, 87, 184, 0.08);
    }

    .sms-contact-page .sms-contact-offices-section__accordion-btn {
        padding: 20px 24px;
        box-shadow: none !important;
        background: #fff;
    }

    .sms-contact-page .sms-contact-offices-section__accordion-btn:not(.collapsed) {
        background: linear-gradient(135deg, var(--sms-cu-sky-l) 0%, rgba(232, 244, 255, 0.3) 100%);
        color: var(--sms-cu-navy);
    }

    .sms-contact-page .sms-contact-offices-section__accordion-btn::after {
        margin-left: auto;
    }

    .sms-contact-page .sms-contact-offices-section__flag-badge {
        width: 52px;
        height: 52px;
        background: rgba(0, 87, 184, 0.08);
        border: 1.5px solid rgba(0, 87, 184, 0.14);
    }

    .sms-contact-page .sms-contact-offices-section__accordion-btn:not(.collapsed) .sms-contact-offices-section__flag-badge {
        background: rgba(0, 87, 184, 0.14);
        border-color: rgba(0, 87, 184, 0.28);
    }

    .sms-contact-page .sms-contact-offices-section__accordion-btn:not(.collapsed) .sms-contact-offices-section__country-name {
        color: var(--sms-cu-blue);
    }

    .sms-contact-page .sms-contact-offices-section__country-name {
        font-size: 17px;
        transition: color 0.15s;
    }

    .sms-contact-page .sms-contact-offices-section__pin {
        width: 34px;
        height: 34px;
        background: var(--sms-cu-sky-l);
        font-size: 16px;
    }

    .sms-contact-page .sms-contact-offices-section__addr {
        font-size: 13.5px;
        color: var(--sms-cu-ink2);
        line-height: 1.75;
    }

    .sms-contact-page .sms-contact-offices-section__city-card {
        background: var(--sms-cu-page-bg);
        border: 1px solid var(--sms-cu-bdr);
        border-left: 3px solid var(--sms-cu-sky-m);
        transition: background 0.15s, border-color 0.15s, transform 0.15s;
    }

    .sms-contact-page .sms-contact-offices-section__city-card:hover {
        background: var(--sms-cu-sky-l);
        border-left-color: var(--sms-cu-blue);
        transform: translateX(2px);
    }

    .sms-contact-page .sms-contact-offices-section__city-card .fw-bold {
        color: var(--sms-cu-navy);
    }
</style>

<main class="sms-contact-page">

    <style>
        element.style {}

        #three60-hp-root .contact-card {
            background: rgba(0, 87, 184, 0.07);
            border-radius: 18px;
            padding: 20px;
            box-shadow: none;
            position: relative;
            z-index: 2;
            border: 1px solid #f0f0f0;
        }
    </style>

    <!-- Contact form + direct contact -->
    <section class="sms-contact-form-section py-5 bg-white">
        <div class="container-lg">
            <div class="sms-contact-form-section__layout">
                <div class="sms-contact-form-section__main">
                    <h2 class="sms-contact-form-section__title display-6 fw-bold mb-2">Let's Find the Right Solution Together</h2>
                    <p class="sms-contact-form-section__lead text-secondary mb-4">Tell us about your goals, and we'll connect you with the right expert within an hour.</p>
                    <div id="contact_form"></div>
                    <div class="sec-17-18-wrap position-relative">
                        <div class="contact-card">
                            <?= do_shortcode('[contact_pageshortcode]') ?>
                        </div>
                    </div>
                </div>

                <div class="sms-contact-form-section__sidebar pt-lg-5 mt-5">
                    <div class="sms-contact-form-section__sidebar-label d-flex align-items-center gap-2 text-uppercase small fw-bold text-secondary mb-4">
                        <span>Or reach us directly</span>
                        <span class="flex-grow-1 sms-contact-form-section__sidebar-line"></span>
                    </div>

                    <!-- Phone -->
                    <div class="card sms-contact-form-section__info-card mb-3">
                        <div class="card-header bg-white d-flex align-items-center gap-3 py-3">
                            <div class="sms-contact-form-section__info-icon rounded-3 d-flex align-items-center justify-content-center flex-shrink-0">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12 19.79 19.79 0 0 1 1.61 3.38 2 2 0 0 1 3.6 1.2h3a2 2 0 0 1 2 1.72c.127.96.361 1.903.7 2.81a2 2 0 0 1-.45 2.11L7.91 8.9a16 16 0 0 0 6 6l.9-1.06a2 2 0 0 1 2.11-.45c.907.339 1.85.573 2.81.7A2 2 0 0 1 21.5 16h.5" />
                                </svg>
                            </div>
                            <div>
                                <div class="fw-bold sms-contact-form-section__info-title">Call Us Directly</div>
                                <div class="small text-secondary">Lines open 24×7</div>
                            </div>
                        </div>
                        <div class="card-body py-2">
                            <div class="d-flex align-items-center gap-3 py-2 sms-contact-form-section__phone-row">
                                <img src="https://flagcdn.com/24x18/us.png" width="24" height="18" alt="USA" class="rounded-1">
                                <a href="tel:+13236414417" class="text-decoration-none fw-semibold sms-contact-form-section__link">+1 323 641 4417</a>
                            </div>
                            <div class="d-flex align-items-center gap-3 py-2 sms-contact-form-section__phone-row">
                                <img src="https://flagcdn.com/24x18/gb.png" width="24" height="18" alt="UK" class="rounded-1">
                                <a href="tel:+447403279473" class="text-decoration-none fw-semibold sms-contact-form-section__link">+44 740 327 9473</a>
                            </div>
                            <div class="d-flex align-items-center gap-3 py-2 sms-contact-form-section__phone-row">
                                <img src="https://flagcdn.com/24x18/au.png" width="24" height="18" alt="Australia" class="rounded-1">
                                <a href="tel:+61488853632" class="text-decoration-none fw-semibold sms-contact-form-section__link">+61 48885 3632</a>
                            </div>
                            <div class="d-flex align-items-center gap-3 py-2 sms-contact-form-section__phone-row">
                                <img src="https://flagcdn.com/24x18/in.png" width="24" height="18" alt="India" class="rounded-1">
                                <a href="tel:+918527100131" class="text-decoration-none fw-semibold sms-contact-form-section__link">+91 8527100131</a>
                            </div>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="card sms-contact-form-section__info-card">
                        <div class="card-header bg-white d-flex align-items-center gap-3 py-3">
                            <div class="sms-contact-form-section__info-icon rounded-3 d-flex align-items-center justify-content-center flex-shrink-0">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                    <polyline points="22,6 12,13 2,6" />
                                </svg>
                            </div>
                            <div>
                                <div class="fw-bold sms-contact-form-section__info-title">Email Us</div>
                                <div class="small text-secondary">Every message gets a reply</div>
                            </div>
                        </div>
                        <div class="card-body py-2">
                            <div class="d-flex align-items-center gap-3 py-2 sms-contact-form-section__email-row">
                                <span class="sms-contact-form-section__email-tag rounded-2 d-flex align-items-center justify-content-center" title="Sales">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <polyline points="22 12 16 12 14 15 10 15 8 12 2 12" />
                                        <path d="M5.45 5.11L2 12v6a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-6l-3.45-6.89A2 2 0 0 0 16.76 4H7.24a2 2 0 0 0-1.79 1.11z" />
                                    </svg>
                                </span>
                                <a href="mailto:sales@360smsapp.com" class="text-decoration-none sms-contact-form-section__link">sales@360smsapp.com</a>
                            </div>
                            <div class="d-flex align-items-center gap-3 py-2 sms-contact-form-section__email-row">
                                <span class="sms-contact-form-section__email-tag rounded-2 d-flex align-items-center justify-content-center" title="Support">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                                    </svg>
                                </span>
                                <a href="mailto:support@360smsapp.com" class="text-decoration-none sms-contact-form-section__link">support@360smsapp.com</a>
                            </div>
                            <div class="d-flex align-items-center gap-3 py-2 sms-contact-form-section__email-row">
                                <span class="sms-contact-form-section__email-tag rounded-2 d-flex align-items-center justify-content-center" title="HR">
                                    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                        <circle cx="9" cy="7" r="4" />
                                        <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    </svg>
                                </span>
                                <a href="mailto:hr@360degreecloud.com" class="text-decoration-none sms-contact-form-section__link">hr@360degreecloud.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Availability stats -->
    <section class="sms-contact-avail-section py-5">
        <div class="container-lg">
            <div class="sms-contact-avail-section__header">
                <h2 class="sms-contact-avail-section__title">Built for round-the-clock business</h2>
                <p class="sms-contact-avail-section__sub">Whether you're in Dallas or Delhi, our team and platform are ready when you are.</p>
            </div>
            <div class="row g-4 sms-contact-avail-section__tiles">
                <div class="col-sm-6 col-lg-3 d-flex">
                    <div class="sms-contact-avail-section__tile w-100">
                        <div class="sms-contact-avail-section__tile-icon rounded-3 d-flex align-items-center justify-content-center">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="10" />
                                <polyline points="12 6 12 12 16 14" />
                            </svg>
                        </div>
                        <div class="sms-contact-avail-section__tile-heading">24x7</div>
                        <div class="sms-contact-avail-section__tile-label">Free Support</div>
                        <span class="badge rounded-pill sms-contact-avail-section__badge"><span class="sms-contact-avail-section__badge-dot"></span> Live Now</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 d-flex">
                    <div class="sms-contact-avail-section__tile w-100">
                        <div class="sms-contact-avail-section__tile-icon rounded-3 d-flex align-items-center justify-content-center">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z" />
                            </svg>
                        </div>
                        <div class="sms-contact-avail-section__tile-heading sms-contact-avail-section__tile-heading--sm">Under an Hour</div>
                        <div class="sms-contact-avail-section__tile-label">Avg. Response Time</div>
                        <span class="badge rounded-pill sms-contact-avail-section__badge"><span class="sms-contact-avail-section__badge-dot"></span> Chat Online</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 d-flex">
                    <div class="sms-contact-avail-section__tile w-100">
                        <div class="sms-contact-avail-section__tile-icon rounded-3 d-flex align-items-center justify-content-center">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <circle cx="12" cy="12" r="10" />
                                <line x1="2" y1="12" x2="22" y2="12" />
                                <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z" />
                            </svg>
                        </div>
                        <div class="sms-contact-avail-section__tile-heading">60k<em>+</em></div>
                        <div class="sms-contact-avail-section__tile-label">Users Worldwide</div>
                        <span class="badge rounded-pill sms-contact-avail-section__badge"><span class="sms-contact-avail-section__badge-dot"></span> Worldwide</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3 d-flex">
                    <div class="sms-contact-avail-section__tile w-100">
                        <div class="sms-contact-avail-section__tile-icon rounded-3 d-flex align-items-center justify-content-center">
                            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" />
                            </svg>
                        </div>
                        <div class="sms-contact-avail-section__tile-heading">1200<em>+</em></div>
                        <div class="sms-contact-avail-section__tile-label">5-Star Reviews</div>
                        <span class="badge rounded-pill sms-contact-avail-section__badge"><span class="sms-contact-avail-section__badge-dot"></span> AppExchange</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Global offices -->
    <section class="sms-contact-offices-section py-5 border-top">
        <div class="container-lg">
            <div class="row row d-flex justify-content-center align-items-center">
                <div class="col-lg-4">
                    <span class="badge rounded-pill sms-contact-offices-section__eyebrow mb-3">
                        <span class="sms-contact-offices-section__eyebrow-dot"></span> Our Locations
                    </span>
                    <h2 class="sms-contact-offices-section__title display-6 fw-bold mb-3">Global Offices</h2>
                    <p class="text-secondary mb-4">Find a 360 SMS expert near you across the Americas, Europe, Asia Pacific, and India.</p>
                    
                </div>

                <div class="col-lg-8">
                    <div class="accordion sms-contact-offices-section__accordion" id="sms-cu-offices-accordion">

                        <div class="accordion-item sms-contact-offices-section__accordion-item rounded-4 mb-3 border overflow-hidden">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed sms-contact-offices-section__accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#sms-cu-office-usa" aria-expanded="false" aria-controls="sms-cu-office-usa">
                                    <span class="d-flex align-items-center gap-3">
                                        <span class="sms-contact-offices-section__flag-badge rounded-3 d-flex align-items-center justify-content-center flex-shrink-0">
                                            <img src="https://flagcdn.com/28x21/us.png" width="28" height="21" alt="USA">
                                        </span>
                                        <span>
                                            <span class="d-block fw-bold sms-contact-offices-section__country-name">United States</span>
                                            <span class="d-block small text-secondary">Laguna Beach, California</span>
                                        </span>
                                    </span>
                                </button>
                            </h3>
                            <div id="sms-cu-office-usa" class="accordion-collapse collapse" data-bs-parent="#sms-cu-offices-accordion">
                                <div class="accordion-body">
                                    <div class="d-flex gap-3">
                                        <span class="sms-contact-offices-section__pin rounded-3 d-flex align-items-center justify-content-center flex-shrink-0">📍</span>
                                        <p class="mb-0 sms-contact-offices-section__addr">1968 S. Coast Hwy 1412, Laguna Beach, CA 92651</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item sms-contact-offices-section__accordion-item rounded-4 mb-3 border overflow-hidden">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed sms-contact-offices-section__accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#sms-cu-office-uk" aria-expanded="false" aria-controls="sms-cu-office-uk">
                                    <span class="d-flex align-items-center gap-3">
                                        <span class="sms-contact-offices-section__flag-badge rounded-3 d-flex align-items-center justify-content-center flex-shrink-0">
                                            <img src="https://flagcdn.com/28x21/gb.png" width="28" height="21" alt="UK">
                                        </span>
                                        <span>
                                            <span class="d-block fw-bold sms-contact-offices-section__country-name">United Kingdom</span>
                                            <span class="d-block small text-secondary">Hemel Hempstead, Hertfordshire</span>
                                        </span>
                                    </span>
                                </button>
                            </h3>
                            <div id="sms-cu-office-uk" class="accordion-collapse collapse" data-bs-parent="#sms-cu-offices-accordion">
                                <div class="accordion-body">
                                    <div class="d-flex gap-3">
                                        <span class="sms-contact-offices-section__pin rounded-3 d-flex align-items-center justify-content-center flex-shrink-0">📍</span>
                                        <p class="mb-0 sms-contact-offices-section__addr">Plaza Suite 8, KD Tower, Cotterells, Hemel Hempstead, Herts, HP1 1FW, United Kingdom</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item sms-contact-offices-section__accordion-item rounded-4 mb-3 border overflow-hidden">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed sms-contact-offices-section__accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#sms-cu-office-india" aria-expanded="false" aria-controls="sms-cu-office-india">
                                    <span class="d-flex align-items-center gap-3">
                                        <span class="sms-contact-offices-section__flag-badge rounded-3 d-flex align-items-center justify-content-center flex-shrink-0">
                                            <img src="https://flagcdn.com/28x21/in.png" width="28" height="21" alt="India">
                                        </span>
                                        <span>
                                            <span class="d-block fw-bold sms-contact-offices-section__country-name">India</span>
                                            <span class="d-block small text-secondary">9 cities — Faridabad, Noida, Pune &amp; more</span>
                                        </span>
                                    </span>
                                </button>
                            </h3>
                            <div id="sms-cu-office-india" class="accordion-collapse collapse" data-bs-parent="#sms-cu-offices-accordion">
                                <div class="accordion-body">
                                    <div class="row g-2">
                                        <div class="col-md-6">
                                            <div class="sms-contact-offices-section__city-card rounded-3 p-3 h-100">
                                                <div class="fw-bold small mb-1">Faridabad</div>
                                                <div class="small text-secondary">SCO – 12, Second Floor, Above Canara Bank, Sector 16, Haryana – 121002</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="sms-contact-offices-section__city-card rounded-3 p-3 h-100">
                                                <div class="fw-bold small mb-1">Noida</div>
                                                <div class="small text-secondary">B29, Sector 1, Noida, Uttar Pradesh – 201301</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="sms-contact-offices-section__city-card rounded-3 p-3 h-100">
                                                <div class="fw-bold small mb-1">Pune</div>
                                                <div class="small text-secondary">Office no-202, Alluring Sky, Terraza Rd, Aundh, Pune, Maharashtra – 411007</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="sms-contact-offices-section__city-card rounded-3 p-3 h-100">
                                                <div class="fw-bold small mb-1">Meerut</div>
                                                <div class="small text-secondary">177/1, 3rd Floor PP Plaza, Mangal Pandey Nagar, CCS University Road – 250004</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="sms-contact-offices-section__city-card rounded-3 p-3 h-100">
                                                <div class="fw-bold small mb-1">Jaipur</div>
                                                <div class="small text-secondary">2nd Floor, 10, Shivraj Niketan Colony, Vaishali Nagar, Rajasthan – 302021</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="sms-contact-offices-section__city-card rounded-3 p-3 h-100">
                                                <div class="fw-bold small mb-1">Bangalore</div>
                                                <div class="small text-secondary">Doddanakundi Industrial Area, Graphite India Main Rd, Whitefield – 560048</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="sms-contact-offices-section__city-card rounded-3 p-3 h-100">
                                                <div class="fw-bold small mb-1">Gurgaon</div>
                                                <div class="small text-secondary">Orchid Business Park, 1st Floor, Sector 48, Gurugram, Haryana – 122004</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="sms-contact-offices-section__city-card rounded-3 p-3 h-100">
                                                <div class="fw-bold small mb-1">Hyderabad</div>
                                                <div class="small text-secondary">The Hive, Corporate Capital, Financial District, Nanakramguda – 500032</div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="sms-contact-offices-section__city-card rounded-3 p-3 h-100">
                                                <div class="fw-bold small mb-1">Indore</div>
                                                <div class="small text-secondary">First Floor, Red Square, Vijay Nagar, Indore, Madhya Pradesh – 452010</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item sms-contact-offices-section__accordion-item rounded-4 border overflow-hidden">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed sms-contact-offices-section__accordion-btn" type="button" data-bs-toggle="collapse" data-bs-target="#sms-cu-office-au" aria-expanded="false" aria-controls="sms-cu-office-au">
                                    <span class="d-flex align-items-center gap-3">
                                        <span class="sms-contact-offices-section__flag-badge rounded-3 d-flex align-items-center justify-content-center flex-shrink-0">
                                            <img src="https://flagcdn.com/28x21/au.png" width="28" height="21" alt="Australia">
                                        </span>
                                        <span>
                                            <span class="d-block fw-bold sms-contact-offices-section__country-name">Australia</span>
                                            <span class="d-block small text-secondary">Nationwide coverage</span>
                                        </span>
                                    </span>
                                </button>
                            </h3>
                            <!--<div id="sms-cu-office-au" class="accordion-collapse collapse" data-bs-parent="#sms-cu-offices-accordion">-->
                            <!--    <div class="accordion-body">-->
                            <!--        <div class="d-flex gap-3">-->
                            <!--            <span class="sms-contact-offices-section__pin rounded-3 d-flex align-items-center justify-content-center flex-shrink-0">📍</span>-->
                            <!--            <p class="mb-0 sms-contact-offices-section__addr">Available nationwide — contact us to connect with your nearest representative.</p>-->
                            <!--        </div>-->
                            <!--    </div>-->
                            <!--</div>-->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php
get_footer('contact');
