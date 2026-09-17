<?php

/**
 * Template Name: Whatsapp for Zoho LP new
 * Description: 360 SMS App landing page — Bootstrap layout matching design spec.
 *              All CSS, HTML, and JS in this single file.
 *
 * @package SMS360
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Deploy: copy this file to your-theme/page-templates/
 *         copy assets/ to your-theme/landing-page/assets/
 */
$lp_footer_bg = '';

if (!function_exists('sms_lp_asset')) {
    function sms_lp_asset($filename)
    {
        $base = trailingslashit(get_stylesheet_directory_uri()) . 'landing-page/assets/';
        return $base . implode('/', array_map('rawurlencode', explode('/', $filename)));
    }
}

$lp_footer_bg = sms_lp_asset('footer bg img.webp');

get_header('paid');

?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    html.hide-header #head,
    html.hide-header #nav-main {
        display: none !important;
    }
    #three60-hp-root .contact-card {
        background: none !important;
        border-radius: 0 !important;
        padding: 0 !important;
        box-shadow: none !important;
        position: static !important;
        z-index: auto !important;
        border: none !important;
    }
    #ccb-banner,
    #ccb-float-btn, #ccb-us-banner {
        display: none !important;
    }
</style>

<script>
    document.documentElement.classList.add('hide-header');
</script>
<style>
    .lp-form-card h3,
    .lp-form-card p {
        display: none;
    }

    .whatsapp-content {
        display: none !important;
    }


    .sms-lp .lp-form-card input[type="text"] {
        margin-bottom: 0px !important;
    }

    #country {
        border: 0 !important;
    }

    #city {
        margin-top: 10px;
    }

    .cus_class {
        display: none;
    }

    window.addEventListener("load", killTawk);
    setInterval(killTawk, 1000);

    /* Landing page — reset theme wrappers that break layout / fixed header */
    body:has(.sms-lp) {
        --lp-primary: #0076be;
        --lp-primary-dark: #005691;
        --lp-primary-light: #e8f4fc;
        --lp-coral: #d97154;
        --lp-coral-hover: #c46248;
        --lp-navy: #0a2d5c;
        --lp-ink: #1a1a2e;
        --lp-bblue: #1F548F;
        --lp-ink-muted: #5c6470;
        --lp-ink-light: #8b939e;
        --lp-bg-light: #f5f7fa;
        --lp-bg-stat: #f0f4f8;
        --lp-border: #e4e8ef;
        --lp-green: #22a06b;
        --lp-white: #ffffff;
        --lp-footer-bg: url('/wp-content/uploads/2026/08/footer-bg-img-scaled.webp');
        --lp-header-offset: 72px;
        overflow-x: hidden;
    }

    body:has(.sms-lp) #page,
    body:has(.sms-lp) .site,
    body:has(.sms-lp) #content,
    body:has(.sms-lp) .site-content,
    body:has(.sms-lp) #primary,
    body:has(.sms-lp) .content-area,
    body:has(.sms-lp) article,
    body:has(.sms-lp) .entry-content {
        max-width: none !important;
        width: 100% !important;
        padding-left: 0 !important;
        padding-right: 0 !important;
        margin-left: 0 !important;
        margin-right: 0 !important;
        overflow: visible !important;
        transform: none !important;
        filter: none !important;
        perspective: none !important;
    }

    a {
        text-decoration: none;
    }

    /* Fixed landing header — must sit at document root (not inside transformed parents) */
    .lp-sticky-header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        z-index: 99999;
        background: #ffffff;
        border-bottom: 1px solid #e8ecf0;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
    }

    .lp-sticky-header .lp-header-inner {
        display: flex !important;
        align-items: center;
        justify-content: space-between !important;
        flex-direction: row !important;
        flex-wrap: nowrap;
        gap: 24px;
        width: 100%;
        max-width: 1320px;
        min-height: 72px;
        margin: 0 auto;
        padding: 14px 24px;
        box-sizing: border-box;
    }

    .lp-sticky-header .lp-logo {
        display: inline-flex;
        align-items: center;
        flex: 0 0 auto;
        margin-right: auto;
        line-height: 0;
        text-decoration: none;
    }

    .lp-sticky-header .lp-header-cta {
        display: inline-flex;
        flex: 0 0 auto;
        margin-left: auto;
        text-decoration: none;
    }

    .lp-sticky-header .lp-logo img {
        height: 44px;
        width: auto;
        max-width: 180px;
        object-fit: contain;
    }

    .lp-sticky-header .btn-lp-coral {
        box-shadow: 0 4px 14px rgba(217, 113, 84, 0.32);
        white-space: nowrap;
    }

    body.admin-bar .lp-sticky-header {
        top: 32px;
    }

    @media screen and (max-width: 782px) {
        body.admin-bar .lp-sticky-header {
            top: 46px;
        }
    }

    @media (max-width: 575.98px) {
        .lp-sticky-header .lp-header-inner {
            padding: 12px 16px;
        }

        .lp-sticky-header .lp-logo img {
            height: 36px;
            max-width: 140px;
        }

        .lp-sticky-header .btn-lp-coral {
            font-size: 14px;
            padding: 10px 18px;
        }
    }

    /* 360 SMS Landing Page — scoped under .sms-lp */
    .sms-lp {
        --lp-primary: #0076be;
        --lp-primary-dark: #005691;
        --lp-primary-light: #e8f4fc;
        --lp-coral: #d97154;
        --lp-coral-hover: #c46248;
        --lp-navy: #0a2d5c;
        --lp-ink: #1a1a2e;
        --lp-bblue: #1F548F;
        --lp-ink-muted: #5c6470;
        --lp-ink-light: #8b939e;
        --lp-bg-light: #f5f7fa;
        --lp-bg-stat: #f0f4f8;
        --lp-border: #e4e8ef;
        --lp-green: #22a06b;
        --lp-white: #ffffff;
        --lp-footer-bg: url('/wp-content/uploads/2026/08/footer-bg-img-scaled.webp');
        --lp-header-offset: 88px;
        font-family: 'Plus Jakarta Sans', 'Segoe UI', sans-serif;
        font-size: 16px;
        line-height: 1.6;
        color: var(--lp-ink);
        text-transform: none;
        width: 100%;
        padding-top: var(--lp-header-offset, 72px);
    }

    .sms-lp .lp-trusted,
    .sms-lp .lp-badge-trusted,
    .sms-lp .lp-testimonial-viewport,
    .sms-lp .lp-logo-scroller {
        max-width: 100%;
    }

    .sms-lp .container {
        width: 100%;
        max-width: 1320px;
        margin-left: auto;
        margin-right: auto;
        padding-left: 24px;
        padding-right: 24px;
        box-sizing: border-box;
    }

    @media (max-width: 575.98px) {
        .sms-lp .container {
            padding-left: 16px;
            padding-right: 16px;
        }
    }

    .sms-lp h1,
    .sms-lp h2,
    .sms-lp h3,
    .sms-lp h4,
    .sms-lp h5,
    .sms-lp p,
    .sms-lp a,
    .sms-lp li,
    .sms-lp span,
    .sms-lp label,
    .sms-lp button,
    .sms-lp th,
    .sms-lp td {
        text-transform: none;
    }

    .sms-lp h1,
    .sms-lp h2,
    .sms-lp h3,
    .sms-lp h4,
    .sms-lp h5 {
        font-family: 'Plus Jakarta Sans', 'Segoe UI', sans-serif;
        color: var(--lp-ink);
    }

    .lp-sticky-header .btn-lp-coral,
    .sms-lp .btn-lp-coral {
        background-color: #CB634B;
        border: none;
        color: #ffffff;
        font-weight: 700;
        font-size: 15px;
        padding: 7px 28px;
        border-radius: 6px;
        transition: background-color 0.2s ease;
        text-decoration: none;
        display: inline-block;
        text-transform: none;
        letter-spacing: normal;
    }

    .lp-sticky-header .btn-lp-coral:hover,
    .lp-sticky-header .btn-lp-coral:focus,
    .sms-lp .btn-lp-coral:hover,
    .sms-lp .btn-lp-coral:focus {
        background-color: #CB634B;
        color: #fff !important;
    }

    .sms-lp .btn-lp-outline {
        background: transparent;
        border: 2px solid var(--lp-primary);
        color: var(--lp-primary);
        font-weight: 700;
        font-size: 15px;
        padding: 10px 26px;
        border-radius: 6px;
    }

    .sms-lp .btn-lp-outline:hover {
        background: var(--lp-primary);
        color: var(--lp-white);
    }

    .sms-lp .lp-hero {
        padding: 56px 0 48px;
        background: var(--lp-white);
    }

    .sms-lp .lp-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--lp-primary-light);
        color: var(--lp-primary-dark);
        font-size: 13px;
        font-weight: 600;
        letter-spacing: normal;
        text-transform: none;
        padding: 8px 16px;
        border-radius: 50px;
        margin-bottom: 20px;
    }

    .sms-lp .lp-hero-badge .dot {
        width: 8px;
        height: 8px;
        background: var(--lp-primary);
        border-radius: 50%;
        flex-shrink: 0;
    }

    .sms-lp .lp-hero h1 {
        font-size: clamp(32px, 4vw, 46px);
        font-weight: 800;
        line-height: 1.15;
        letter-spacing: -0.5px;
        margin-bottom: 24px;
    }

    .sms-lp .lp-hero h1 .text-primary {
        color: var(--lp-primary) !important;
    }

    .sms-lp .lp-hero-sub {
        font-size: 17px;
        color: var(--lp-ink-muted);
        line-height: 1.65;
        margin-bottom: 28px;
        max-width: 520px;
    }

    .sms-lp .lp-hero-img {
        max-width: 100%;
        height: auto;
    }

    @media (max-width: 767.98px) {
        .sms-lp .lp-hero .btn {
            display: none;
        }
    }

    .sms-lp .lp-stats {
        background: #ffffff;
        border-top: 1px solid var(--lp-border);
        border-bottom: 1px solid var(--lp-border);
        padding: 28px 0;
    }

    .sms-lp .lp-stat-item {
        text-align: center;
        padding: 8px 12px;
    }

    .sms-lp .lp-stat-item+.lp-stat-item {
        border-left: 1px solid var(--lp-border);
    }

    @media (max-width: 767.98px) {
        .sms-lp .lp-stat-item:nth-child(odd) {
            border-left: none;
        }

        .sms-lp .lp-stat-item:nth-child(even) {
            border-left: 1px solid var(--lp-border);
        }
    }

    .sms-lp .lp-stat-icon {
        font-size: 20px;
        color: var(--lp-primary);
        margin-bottom: 6px;
    }

    .sms-lp .lp-stat-num {
        display: block;
        font-size: 28px;
        font-weight: 800;
        color: var(--lp-bblue);
        line-height: 1.2;
    }

    .sms-lp .lp-stat-label {
        display: block;
        font-size: 12px;
        font-weight: 600;
        color: var(--lp-ink-muted);
        line-height: 1.35;
        margin-top: 4px;
    }

    .sms-lp .lp-trusted {
        padding: 48px 0;
        background: #F0F1F1;
        overflow: hidden;
    }

    .sms-lp .lp-trusted-title {
        font-size: clamp(28px, 3.5vw, 38px);
        font-weight: 800;
        letter-spacing: normal;
        text-transform: none;
        color: var(--lp-ink);
        text-align: center;
        margin-bottom: 32px;
        line-height: 1.35;
    }

    .sms-lp .lp-logo-scroller {
        overflow: hidden;
        width: 100%;
        -webkit-mask-image: linear-gradient(to right, transparent, #000 8%, #000 92%, transparent);
        mask-image: linear-gradient(to right, transparent, #000 8%, #000 92%, transparent);
    }

    .sms-lp .lp-logo-track {
        display: flex;
        align-items: center;
        width: max-content;
        gap: 16px;
        animation: lp-logo-scroll 35s linear infinite;
        will-change: transform;
    }

    .sms-lp .lp-logo-scroller:hover .lp-logo-track {
        animation-play-state: paused;
    }

    @keyframes lp-logo-scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .sms-lp .lp-logo-item {
        flex: 0 0 auto;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 132px;
        height: 95px;
        padding: 18px;
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 10px;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.04);
        transition: box-shadow 0.2s ease, border-color 0.2s ease;
    }

    .sms-lp .lp-logo-item:hover {
        border-color: #ced4da;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .sms-lp .lp-logo-item img {
        max-width: 100%;
        max-height: 100%;
        width: auto;
        height: auto;
        object-fit: contain;
        filter: none;
        opacity: 1;
    }

    .sms-lp .lp-badge-trusted {
        padding: 48px 0 56px;
        background: #F0F1F1;
        overflow: hidden;
    }

    .sms-lp .lp-badge-trusted .lp-logo-item {
        width: auto;
        height: 108px;
        padding: 14px 16px;
    }

    .sms-lp .lp-badge-trusted .lp-logo-track {
        animation-duration: 40s;
    }

    @media (prefers-reduced-motion: reduce) {
        .sms-lp .lp-logo-track {
            animation: none;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%;
            gap: 32px 40px;
        }

        .sms-lp .lp-logo-scroller {
            -webkit-mask-image: none;
            mask-image: none;
        }
    }

    .sms-lp .lp-leadgen {
        padding: 72px 0;
        background: #ffffff;
        scroll-margin-top: var(--lp-header-offset, 72px);
    }

    .sms-lp .lp-leadgen h2 {
        font-size: clamp(28px, 3.5vw, 38px);
        font-weight: 800;
        line-height: 1.2;
        letter-spacing: -0.4px;
        margin-bottom: 16px;
    }

    .sms-lp .lp-leadgen-desc {
        font-size: 16px;
        color: var(--lp-ink-muted);
        line-height: 1.65;
        margin-bottom: 24px;
    }

    .sms-lp .lp-check-list {
        list-style: none;
        padding: 0;
        margin: 0 0 28px;
    }

    .sms-lp .lp-check-list li {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        font-size: 15px;
        color: var(--lp-ink);
        margin-bottom: 12px;
        line-height: 1.5;
    }

    .sms-lp .lp-check-list li i {
        color: var(--lp-green);
        font-size: 18px;
        margin-top: 2px;
        flex-shrink: 0;
    }

    .sms-lp .lp-rating-row {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 14px;
    }

    .sms-lp .lp-appex-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: var(--lp-primary);
        color: var(--lp-white);
        border: none;
        border-radius: 6px;
        padding: 7px 12px;
        font-size: 13px;
        font-weight: 700;
        line-height: 1.2;
        white-space: nowrap;
    }

    .sms-lp .lp-appex-badge i {
        font-size: 14px;
        flex-shrink: 0;
    }

    .sms-lp .lp-rating-row .stars {
        color: #f5a623;
        font-size: 18px;
        letter-spacing: 2px;
        line-height: 1;
    }

    .sms-lp .lp-rating-row .score {
        color: var(--lp-navy);
        font-size: 22px;
        font-weight: 800;
        line-height: 1;
    }

    .sms-lp .lp-rating-row .review-count {
        color: var(--lp-ink-light);
        font-size: 14px;
        font-weight: 500;
        line-height: 1;
    }

    @media (max-width: 767.98px) {
        .sms-lp .lp-rating-row {
            flex-wrap: nowrap;
            gap: 8px;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }

        .sms-lp .lp-rating-row::-webkit-scrollbar {
            display: none;
        }

        .sms-lp .lp-rating-row>* {
            flex-shrink: 0;
        }

        .sms-lp .lp-appex-badge {
            font-size: 10px;
            padding: 5px 8px;
            gap: 5px;
        }

        .sms-lp .lp-appex-badge i {
            font-size: 11px;
        }

        .sms-lp .lp-rating-row .stars {
            font-size: 13px;
            letter-spacing: 1px;
        }

        .sms-lp .lp-rating-row .score {
            font-size: 17px;
        }

        .sms-lp .lp-rating-row .review-count {
            font-size: 11px;
            white-space: nowrap;
        }
    }

    .sms-lp .lp-form-card {
        background: var(--lp-white);
        border-radius: 16px;
        box-shadow: 0 8px 40px rgba(10, 45, 92, 0.1);
        padding: 32px;
        border: 1px solid var(--lp-border);
    }

    .sms-lp .lp-form-card h3 {
        font-size: 22px;
        font-weight: 800;
        margin-bottom: 6px;
    }

    .sms-lp .lp-form-card .form-sub {
        font-size: 14px;
        color: var(--lp-ink-muted);
        margin-bottom: 20px;
    }

    .sms-lp .lp-form-card .contact-card,
    .sms-lp .lp-form-card .sms-contact-form-section__shortcode {
        background: transparent;
        border: none;
        border-radius: 0;
        padding: 0;
        box-shadow: none;
    }

    .sms-lp .lp-form-card input[type="text"],
    .sms-lp .lp-form-card input[type="email"],
    .sms-lp .lp-form-card input[type="tel"],
    .sms-lp .lp-form-card textarea,
    .sms-lp .lp-form-card select {
        border: 1px solid var(--lp-border);
        border-radius: 8px;
        padding: 10px 14px;
        font-size: 14px;
        width: 100%;
        margin-bottom: 12px;
    }

    .sms-lp .lp-form-card input[type="submit"],
    .sms-lp .lp-form-card button[type="submit"],
    .sms-lp .lp-form-card .wpcf7-submit {
        background-color: var(--lp-coral) !important;
        border: none !important;
        color: var(--lp-white) !important;
        font-weight: 700 !important;
        font-size: 15px !important;
        padding: 12px 24px !important;
        border-radius: 6px !important;
        width: 100%;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .sms-lp .lp-form-card input[type="submit"]:hover,
    .sms-lp .lp-form-card button[type="submit"]:hover {
        background-color: var(--lp-coral-hover) !important;
    }

    .sms-lp .lp-comm-suite {
        padding: 72px 0;
        background: #F4F8FD;
        text-align: center;
    }

    .sms-lp .lp-comm-suite h2 {
        font-size: clamp(28px, 3.5vw, 38px);
        font-weight: 800;
        color: var(--lp-primary);
        margin-bottom: 10px;
    }

    .sms-lp .lp-comm-suite .sub {
        font-size: 18px;
        color: var(--lp-primary);
        font-weight: 500;
        margin-bottom: 36px;
        opacity: 0.85;
    }

    .sms-lp .lp-comm-img {
        max-width: 750px;
        width: 100%;
        height: auto;
        /*margin: 0 auto 36px;*/
    }

    .sms-lp .lp-feature-grid {
        padding: 72px 0;
        background: var(--lp-white);
        text-align: center;
    }

    .sms-lp .lp-feature-grid h2 {
        font-size: clamp(28px, 3.5vw, 38px);
        font-weight: 800;
        color: var(--lp-navy);
        margin-bottom: 12px;
        line-height: 1.25;
        letter-spacing: -0.3px;
    }

    .sms-lp .lp-feature-grid .sub {
        font-size: 16px;
        color: var(--lp-ink-muted);
        margin-bottom: 48px;
        max-width: 640px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.6;
    }

    .sms-lp .lp-feature-grid-cards {
        text-align: left;
    }

    .sms-lp .lp-feature-card {
        background: var(--lp-white);
        border: 1px solid var(--lp-border);
        border-radius: 12px;
        padding: 28px 24px;
        height: 100%;
        transition: box-shadow 0.2s ease, border-color 0.2s ease;
    }

    .sms-lp .lp-feature-card:hover {
        border-color: #d0d7e2;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
    }

    .sms-lp .lp-feature-card-icon {
        width: 48px;
        height: 48px;
        background: var(--lp-primary-light);
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 22px;
        color: var(--lp-primary);
        margin-bottom: 18px;
        flex-shrink: 0;
    }

    .sms-lp .lp-feature-card h4 {
        font-size: 17px;
        font-weight: 700;
        color: var(--lp-navy);
        margin-bottom: 10px;
        line-height: 1.35;
    }

    .sms-lp .lp-feature-card p {
        font-size: 14px;
        color: var(--lp-ink-muted);
        margin: 0;
        line-height: 1.65;
    }

    @media (max-width: 767.98px) {
        .sms-lp .lp-feature-grid {
            padding: 56px 0;
        }

        .sms-lp .lp-feature-grid .sub {
            margin-bottom: 32px;
        }
    }

    .sms-lp .lp-dark-highlight {
        background: #0e75bc;
        padding: 64px 0 96px;
        color: var(--lp-white);
        overflow: visible;
    }

    .sms-lp .lp-dark-heading {
        color: var(--lp-white);
        font-size: clamp(28px, 3.5vw, 38px);
        font-weight: 800;
        text-align: center;
        line-height: 1.2;
        letter-spacing: -0.3px;
        margin: 0 auto 48px;
        max-width: 1200px;
    }

    .sms-lp .lp-dark-row {
        align-items: flex-start;
    }

    .sms-lp .lp-dark-cards {
        height: min(480px, calc(100vh - 220px));
        max-height: min(480px, calc(100vh - 220px));
        overflow-y: auto;
        overflow-x: hidden;
        overscroll-behavior: contain;
        -webkit-overflow-scrolling: touch;
        -ms-overflow-style: none;
        scrollbar-width: none;
        padding-right: 4px;
    }

    .sms-lp .lp-dark-cards::-webkit-scrollbar {
        display: none;
        width: 0;
        height: 0;
    }

    .sms-lp .lp-dark-highlight .container,
    .sms-lp .lp-dark-row {
        overflow: visible;
    }

    .sms-lp .lp-dark-sticky {
        position: -webkit-sticky;
        position: sticky;
        top: var(--lp-header-offset);
        align-self: flex-start;
        z-index: 2;
    }

    .sms-lp .lp-dark-feat {
        display: flex;
        gap: 20px;
        margin-bottom: 20px;
        align-items: flex-start;
        padding: 22px 24px;
        border: 1px solid rgba(255, 255, 255, 0.4);
        border-radius: 14px;
        background: rgba(0, 0, 0, 0.12);
    }

    .sms-lp .lp-dark-feat:last-child {
        margin-bottom: 0;
    }

    .sms-lp .lp-dark-feat-icon {
        width: 52px;
        height: 52px;
        background: #ffffff;
        border: 1px solid rgba(255, 255, 255, 0.85);
        border-radius: 12px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        color: #0e75bc;
        flex-shrink: 0;
    }

    .sms-lp .lp-dark-feat-body {
        flex: 1;
        min-width: 0;
    }

    .sms-lp .lp-dark-feat h4 {
        color: var(--lp-white);
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 8px;
        line-height: 1.3;
    }

    .sms-lp .lp-dark-feat p {
        color: rgba(255, 255, 255, 0.9);
        font-size: 14px;
        margin: 0;
        line-height: 1.65;
    }

    .sms-lp .lp-dark-img {
        border-radius: 14px;
        max-width: 100%;
        width: auto;
        height: auto;
        display: block;
        /*box-shadow: 0 20px 50px rgba(0, 0, 0, 0.28);*/
    }

    @media (max-width: 991.98px) {
        .sms-lp .lp-dark-heading {
            margin-bottom: 32px;
        }

        .sms-lp .lp-dark-cards {
            height: auto;
            max-height: none;
            overflow: visible;
            margin-bottom: 0;
        }

        .sms-lp .lp-dark-sticky {
            position: static;
            top: auto;
        }

        .sms-lp .lp-dark-row .lp-dark-img-col {
            order: -1;
            margin-bottom: 32px;
        }
    }

    .sms-lp .lp-results {
        padding: 72px 0;
        background: #F0F1F1;
        text-align: center;
    }

    .sms-lp .lp-results h2 {
        font-size: clamp(28px, 3.5vw, 38px);
        font-weight: 800;
        margin-bottom: 22px;
    }

    .sms-lp .lp-results .sub {
        font-size: 16px;
        color: var(--lp-ink-muted);
        margin-bottom: 48px;
    }

    .sms-lp .lp-result-num {
        font-size: clamp(28px, 6vw, 50px);
        font-weight: 800;
        color: var(--lp-coral);
        line-height: 1;
        margin-bottom: 8px;
    }

    .sms-lp .lp-result-label {
        font-size: 15px;
        font-weight: 600;
        color: var(--lp-ink-muted);
        line-height: 1.4;
    }

    .sms-lp .lp-awards {
        padding: 48px 0;
        background: var(--lp-bg-light);
    }

    .sms-lp .lp-awards img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
    }

    .sms-lp .lp-compare {
        padding: 72px 0;
        background: var(--lp-white);
    }

    .sms-lp .lp-compare .sub {
        font-size: 16px;
        color: var(--lp-ink-muted);
        margin-bottom: 48px;
        text-align: center;
    }

    .sms-lp .lp-compare h2 {
        font-size: clamp(28px, 3.5vw, 38px);
        font-weight: 800;
        text-align: center;
        /*margin-bottom: 40px;*/
    }

    .sms-lp .lp-compare-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border-radius: 12px;
        overflow: hidden;
        border: 1px solid var(--lp-border);
    }

    .sms-lp .lp-compare-table thead th {
        padding: 16px 20px;
        font-size: 15px;
        font-weight: 700;
        text-align: center;
        background: var(--lp-bg-light);
        border-bottom: 1px solid var(--lp-border);
    }

    .sms-lp .lp-compare-table thead th.lp-col-highlight {
        background: var(--lp-primary);
        color: var(--lp-white);
    }

    .sms-lp .lp-compare-table tbody td {
        padding: 14px 20px;
        font-size: 14px;
        text-align: center;
        border-bottom: 1px solid var(--lp-border);
        vertical-align: middle;
    }

    .sms-lp .lp-compare-table tbody td:first-child {
        text-align: left;
        font-weight: 600;
        color: var(--lp-ink);
    }

    .sms-lp .lp-compare-table tbody td.lp-col-highlight {
        background: var(--lp-primary-light);
    }

    .sms-lp .lp-compare-table tbody tr:last-child td {
        border-bottom: none;
    }

    @media (max-width: 767.98px) {
        .sms-lp .lp-compare {
            /*display: none;*/
        }
    }

    .sms-lp .lp-check-yes {
        color: var(--lp-green);
        font-size: 18px;
    }

    .sms-lp .lp-check-no {
        color: #dc3545;
        font-size: 18px;
    }

    .sms-lp .lp-partial {
        color: var(--lp-ink-light);
        font-size: 13px;
        font-weight: 600;
    }

    .sms-lp .lp-footer-cta {
        position: relative;
        padding: 80px 0;
        background: linear-gradient(135deg, rgba(10, 45, 92, 0.94) 0%, rgba(0, 86, 145, 0.92) 100%);
        overflow: visible;
    }

    .sms-lp .lp-footer-cta::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: var(--lp-footer-bg);
        background-size: cover;
        background-position: center right;
        background-repeat: no-repeat;
        opacity: 0.35;
        z-index: 0;
    }

    .sms-lp .lp-footer-cta .container {
        position: relative;
        z-index: 1;
        overflow: visible;
    }

    .sms-lp .lp-testimonial-slider {
        --lp-testimonial-gap: 20px;
        --lp-testimonial-visible: 3;
        position: relative;
        width: 100%;
        max-width: 100%;
        margin: 0 auto;
    }

    .sms-lp .lp-testimonial-viewport {
        overflow: hidden;
        width: 100%;
    }

    .sms-lp .lp-testimonial-track {
        display: flex;
        gap: var(--lp-testimonial-gap);
        transition: transform 0.55s ease;
        will-change: transform;
    }

    .sms-lp .lp-testimonial-track.is-resetting {
        transition: none;
    }

    .sms-lp .lp-testimonial-slide {
        flex: 0 0 calc((100% - (var(--lp-testimonial-visible) - 1) * var(--lp-testimonial-gap)) / var(--lp-testimonial-visible));
        min-width: 0;
    }

    .sms-lp .lp-testimonial {
        background: #ffffff;
        border-radius: 16px;
        padding: 28px 32px;
        height: 100%;
        box-shadow: 0 4px 24px rgba(0, 0, 0, 0.1);
    }

    .sms-lp .lp-testimonial .stars {
        color: #1a1a2e;
        font-size: 15px;
        margin-bottom: 16px;
        letter-spacing: 3px;
        line-height: 1;
    }

    .sms-lp .lp-testimonial-quote {
        font-size: 15px;
        color: #2d3748;
        line-height: 1.65;
        margin: 0 0 24px;
        font-weight: 400;
    }

    .sms-lp .lp-testimonial-author {
        display: flex;
        align-items: center;
        gap: 14px;
    }

    .sms-lp .lp-testimonial-avatar {
        width: 44px;
        height: 44px;
        min-width: 44px;
        border-radius: 50%;
        background: #0a2d5c;
        color: #ffffff;
        font-size: 13px;
        font-weight: 700;
        letter-spacing: 0.5px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-transform: uppercase;
    }

    .sms-lp .lp-testimonial-meta .name {
        font-size: 15px;
        font-weight: 700;
        color: #0a2d5c;
        margin: 0 0 3px;
        line-height: 1.3;
    }

    .sms-lp .lp-testimonial-meta .role {
        font-size: 13px;
        font-weight: 400;
        color: #6b7280;
        margin: 0;
        line-height: 1.4;
    }

    .sms-lp .lp-testimonial-controls {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 16px;
        margin-top: 28px;
    }

    .sms-lp .lp-testimonial-btn {
        width: 42px;
        height: 42px;
        border: 1px solid rgba(255, 255, 255, 0.45);
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.12);
        color: #ffffff;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: background 0.2s ease, border-color 0.2s ease;
        padding: 0;
        flex-shrink: 0;
    }

    .sms-lp .lp-testimonial-btn:hover,
    .sms-lp .lp-testimonial-btn:focus-visible {
        background: rgba(255, 255, 255, 0.22);
        border-color: rgba(255, 255, 255, 0.7);
        outline: none;
    }

    .sms-lp .lp-testimonial-btn i {
        font-size: 18px;
        line-height: 1;
    }

    @media (max-width: 991.98px) {
        .sms-lp .lp-testimonial-slider {
            --lp-testimonial-visible: 2;
        }
    }

    @media (max-width: 767.98px) {
        .sms-lp .lp-testimonial-slider {
            --lp-testimonial-visible: 1;
        }

        .sms-lp .lp-testimonial {
            padding: 24px 22px;
        }

        .sms-lp .lp-testimonial-controls {
            margin-top: 22px;
        }
    }

    @media (prefers-reduced-motion: reduce) {
        .sms-lp .lp-testimonial-track {
            transition: none;
        }
    }

    .sms-lp .lp-site-footer {
        background: #0E75BC;
        color: var(--lp-white);
        text-align: center;
        padding: 26px 0 32px;
    }

    .sms-lp .lp-site-footer-logo {
        display: block;
        height: 56px !important;
        width: auto;
        max-width: 220px;
        margin: 0 auto 28px;
        object-fit: contain;
    }

    .sms-lp .lp-site-footer-tagline {
        font-size: 17px;
        font-weight: 400;
        line-height: 1.65;
        color: rgba(255, 255, 255, 0.95);
        max-width: 560px;
        margin: 0 auto 0px;
    }

    .sms-lp .lp-site-footer-divider {
        border: none;
        border-top: 1px solid rgba(255, 255, 255, 0.22);
        margin: 0 0 24px;
    }

    .sms-lp .lp-site-footer-bar {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;
        gap: 12px 24px;
        font-size: 13px;
        color: rgba(255, 255, 255, 0.88);
        line-height: 1.5;
    }

    .sms-lp .lp-site-footer-bar a {
        color: rgba(255, 255, 255, 0.95);
        text-decoration: none;
    }

    .sms-lp .lp-site-footer-bar a:hover {
        color: var(--lp-white);
        text-decoration: underline;
    }

    @media (max-width: 767.98px) {
        .sms-lp .lp-site-footer {
            padding: 48px 0 28px;
        }

        .sms-lp .lp-site-footer-tagline {
            font-size: 15px;
            margin-bottom: 32px;
        }

        .sms-lp .lp-site-footer-bar {
            flex-direction: column;
            text-align: center;
        }
    }

    .sms-lp .lp-section-cta {
        text-align: center;
        margin-top: 8px;
    }

    /* Comparison table value styles */
    .sms-lp .lp-val-yes {
        color: var(--lp-green);
        font-weight: 700;
        font-size: 15px;
    }

    .sms-lp .lp-val-no {
        color: #CB634B;
        font-weight: 700;
        font-size: 14px;
    }

    .sms-lp .lp-val-neutral {
        color: var(--lp-ink-muted);
        font-size: 14px;
        font-weight: 500;
    }
</style>

<!-- ═══ STICKY HEADER (outside main — required for fixed positioning in WP themes) ═══ -->
<header class="lp-sticky-header">
    <div class="lp-header-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="lp-logo">
            <img src="/wp-content/uploads/2026/08/360_sms_-app_logo.png"
                alt="360 SMS App"
                width="180"
                height="44"
                loading="eager">
        </a>
        <a href="#lp-contact-form" class="btn btn-lp-coral lp-scroll lp-header-cta">Book a Demo</a>
    </div>
</header>

<main class="sms-lp">

    <!-- ═══ HERO ═══ -->
    <section class="lp-hero">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6 mb-5">
                    <div class="lp-hero-badge">
                        <span class="dot" aria-hidden="true"></span>
                        Zoho WhatsApp Solution
                    </div>

                    <h1>Turn Engagement  Into Closed Deals With <span class="text-primary">360 SMS App</span> for Zoho WhatsApp</h1>
                    <!--<p class="lp-hero-sub">The #1 rated Zoho SMS app on AppExchange. Send SMS, WhatsApp, and 15+ channels natively inside Zoho — no middleware, no developer required.</p>-->
                    <a href="#lp-contact-form" class="btn btn-lp-coral lp-scroll">Book a Demo</a>
                </div>
                <div class="col-lg-6 text-center text-lg-end">
                    <img src="/wp-content/uploads/2026/08/zoho-whts-img.png"
                        alt="360 SMS App dashboard on laptop and mobile"
                        class="lp-hero-img"
                        width="580"
                        height="420"
                        loading="eager">
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ STATS BAR ═══ -->
    <section class="lp-stats" aria-label="Company statistics">
        <div class="container">
            <div class="row g-0">
                <?php
                $stats = [
                    ['bi-award',        '14+',     'Years of Expertise'],
                    ['bi-cursor',       '1-Click',  'Install'],
                    ['bi-slash-circle', 'No',       'Redirection outside Zoho'],
                    ['bi-robot',        'AI',       'Powered messaging'],
                    ['bi-shield-check', '99.99%',   'Uptime'],
                    ['bi-headset',      '24/7',     'Free Support'],
                ];
                foreach ($stats as $stat) :
                ?>
                    <div class="col-6 col-md-4 col-lg-2">
                        <div class="lp-stat-item">
                            <div class="lp-stat-icon"></div>
                            <span class="lp-stat-num"><?php echo esc_html($stat[1]); ?></span>
                            <span class="lp-stat-label"><?php echo esc_html($stat[2]); ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ═══ TRUSTED BY — scrollable logo strip (360degreecloud.com) ═══ -->
    <section class="lp-trusted py-5">
        <div class="container">

            <div class="row">
                <div class="col-12 text-center">
                    <h2 class="lp-trusted-title mb-4">
                        Trusted by 3,000+ Businesses Worldwide.
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">

                    <div class="lp-logo-scroller" aria-label="Client logos">
                        <div class="lp-logo-track d-flex align-items-center">

                            <?php
                            $lp_client_logos = [
                                ['/wp-content/uploads/2026/08/Asset-16ldpi-1.png', 'Morgan'],
                                ['/wp-content/uploads/2026/08/Asset-21ldpi.png', 'Abbott'],
                                ['/wp-content/uploads/2026/08/Asset-3ldpi-1.png', 'Unicef'],
                                ['/wp-content/uploads/2026/08/Asset-10ldpi.png', 'Pagegroup'],
                                ['/wp-content/uploads/2026/08/Asset-13ldpi.png', 'Lennar'],
                                ['/American-red-Cross.png', 'American Red Cross'],
                                ['/wp-content/uploads/2026/08/Asset-9ldpi.png', 'Fairway'],
                                ['/wp-content/uploads/2026/08/Asset-5ldpi-1.png', 'ecornell'],
                                ['/wp-content/uploads/2026/08/layer1ldpi.png', 'Audi'],
                                ['/wp-content/uploads/2026/08/Asset-4ldpi-1.png', 'MSD'],
                                ['/wp-content/uploads/2026/08/Asset-2ldpi-1.png', 'Boys & Girls club'],
                                ['/wp-content/uploads/2026/08/Asset-20ldpi.png', 'Credit Union of Texas'],
                            ];

                            $lp_client_logos_doubled = array_merge($lp_client_logos, $lp_client_logos);

                            foreach ($lp_client_logos_doubled as $logo) :
                            ?>
                                <div class="lp-logo-item flex-shrink-0 px-3">
                                    <img
                                        src="<?php echo esc_url($logo[0]); ?>"
                                        alt="<?php echo esc_attr($logo[1]); ?>"
                                        class="img-fluid"
                                        loading="lazy">
                                </div>
                            <?php endforeach; ?>

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- ═══ LEAD GENERATION ═══ -->
    <section class="lp-leadgen" id="lp-contact-form">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h2>Convert WhatsApp Interactions into Repeat Customers </h2>
                    <p class="lp-leadgen-desc">Turn everyday WhatsApp conversations into lasting customer relationships with personalized messaging, intelligent automation, and AI-powered engagement inside Zoho CRM. </p>
                    <ul class="lp-check-list">
                        <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span><strong>Native to Zoho CRM — customer data stays connected</strong></span></li>
                        <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span><strong>Personalized WhatsApp engagement — relevant conversations at every stage</strong></span></li>
                        <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span><strong>Bulk WhatsApp messaging — engage audiences at scale </strong></span></li>
                        <li><i class="bi bi-check-circle-fill" aria-hidden="true"></i><span><strong>AI-powered conversations — replies, chatbots, and translation  </strong></span></li>
                    </ul>
                    <!-- <div class="lp-rating-row">
                        <div class="lp-appex-badge">
                            <i class="bi bi-clock" aria-hidden="true"></i>
                            <span> Zoho Agentexchnage</span>
                        </div>
                        <span class="stars" aria-label="4.9 out of 5 stars">★★★★★</span>
                        <span class="score">4.9/5</span>
                        <span class="review-count">1,200+ reviews</span>
                    </div> -->
                </div>
                <div class="col-lg-6">
                    <div class="lp-form-card">
                        <h3>Get started today</h3>
                        <p class="form-sub">Fill out the form and our team will reach out within an hour.</p>
                        <div class="contact-card">
                            <?php echo do_shortcode('[contact_pageshortcode ppc_fields="1"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ END-TO-END COMMUNICATION SUITE ═══ -->
    <!-- <section class="lp-comm-suite">
        <div class="container">
            <h2>End To End Communication Suite</h2>
            <p class="sub">Drive outcomes from every touchpoint</p>
            <img src="/wp-content/uploads/2026/08/end-to-end-communication.webp"
                alt="360 SMS multichannel communication funnel — Awareness, Engagement, Nurture, Conversion"
                class="lp-comm-img"
                width="900"
                height="500"
                loading="lazy">

        </div>
    </section> -->


    <!-- ═══ STOP LOSING DEALS — FEATURE GRID ═══ -->
    <section class="lp-feature-grid">
        <div class="container">
            <h2>Build Frictionless Customer Experiences On WhatsApp</h2>
            <p class="sub">Transform WhatsApp for Zoho into a powerful channel for sales, service, and customer retention.</p>
            <div class="row g-4 lp-feature-grid-cards">
                <?php
                $feature_cards = [
                    ['bi-chat-square-dots', 'Instant WhatsApp Alerts', 'Receive real-time notifications when customers reply on WhatsApp, helping teams respond faster and keep conversations moving.'],
                    ['bi-send', 'Bulk WhatsApp Messaging', 'Send personalized messages at scale using WhatsApp for Zoho and build lasting relationships for repeat customers.'],
                    ['bi-heart', 'Compliance', 'Manage consent preferences automatically to maintain compliant WhatsApp communication and reduce regulatory risk.'],
                    ['bi-shield-check', 'WhatsApp Message Scheduling', 'Plan and automate WhatsApp messages ahead of time to reach customers when engagement is highest.'],
                    ['bi-link-45deg', 'Link Tracking', 'Share branded short links in WhatsApp messages and monitor engagement to optimize follow-ups and campaign performance.'],
                    ['bi-clock', 'Template Management', 'Store and organize WhatsApp templates efficiently, making it easy for teams to find and use approved content without any hassle.'],
                ];
                foreach ($feature_cards as $card) :
                ?>
                    <div class="col-md-4">
                        <div class="lp-feature-card">
                            <div class="lp-feature-card-icon"><i class="bi <?php echo esc_attr($card[0]); ?>" aria-hidden="true"></i></div>
                            <h4><?php echo esc_html($card[1]); ?></h4>
                            <p><?php echo esc_html($card[2]); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ═══ STOP LOSING DEALS — SCROLLABLE CARDS + STICKY IMAGE ═══ -->
    <section class="lp-dark-highlight">
        <div class="container">
            <h2 class="lp-dark-heading">AI WhatsApp Integration in Zoho. More Engagement, Less Effort</h2>
            <div class="row lp-dark-row g-5">
                <div class="col-lg-6 lp-dark-cards-col">
                    <div class="lp-dark-cards">
                        <?php
                        $dark_feats = [
                            ['bi-lightning-charge', 'Reply Suggestions', 'Get context-aware reply recommendations during WhatsApp chats, helping teams respond quickly and keep conversations moving forward.'],
                            ['bi-bar-chart', 'Compliance', 'Identify opt-out requests based on customer intent, not just keywords, so WhatsApp communication remains compliant and customer-friendly.'],
                            ['bi-globe2', 'Template Creation', 'Generate WhatsApp message templates with AI, making it easier to craft engaging customer communications in less time.'],
                            ['bi-activity', 'ChatAgent', 'Let AI handle incoming WhatsApp conversations around the clock, ensuring every customer receives timely responses and attention.'],
                        ];
                        foreach ($dark_feats as $df) :
                        ?>
                            <div class="lp-dark-feat">
                                <div class="lp-dark-feat-icon"><i class="bi <?php echo esc_attr($df[0]); ?>" aria-hidden="true"></i></div>
                                <div class="lp-dark-feat-body">
                                    <h4><?php echo esc_html($df[1]); ?></h4>
                                    <p><?php echo esc_html($df[2]); ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-6 lp-dark-img-col d-flex align-item-center justify-content-center">
                    <div class="lp-dark-sticky">
                        <img src="/wp-content/uploads/2026/08/AI-agent-img.webp"
                            alt="360 SMS conversation view with link tracking and AI suggestions"
                            class="lp-dark-img"
                            width="640"
                            height="480"
                            loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ RESULTS ═══ -->
    <section class="lp-results">
        <div class="container">
            <h2>Growth Metrics with 360 SMS WhatsApp in Zoho CRM </h2>
            <!--<p class="sub">Real numbers from real teams using 360 SMS App inside Zoho.</p>-->
            <div class="row g-4">
                <?php
                $results = [
                    ['41%', 'More Lead Counts '],
                    ['43%', 'Higher Customer Engagement '],
                    ['37%', 'Boost in Customer Satisfaction '],
                ];
                foreach ($results as $res) :
                ?>
                    <div class="col-md-4">
                        <div class="lp-result-num"><?php echo esc_html($res[0]); ?></div>
                        <div class="lp-result-label"><?php echo esc_html($res[1]); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ═══ AWARDS / BADGES — scrollable strip (below results) ═══ -->

    <!-- ═══ COMPARISON TABLE ═══ -->
    <section class="lp-compare">
        <div class="container">
            <h2>Why 360 SMS for Zoho CRM SMS Integration over Others</h2>
            <p class="sub">Native architecture and free support change your total cost of ownership.</p>
            <div class="table-responsive">
                <table class="lp-compare-table">
                    <thead>
                        <tr>
                            <th scope="col" style="width:40%">Elements</th>
                            <th scope="col" class="lp-col-highlight" style="width:30%">360 SMS for Zoho</th>
                            <th scope="col" style="width:30%">Other Solutions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        /*
                         * [0] Feature label
                         * [1] Our value text
                         * [2] Our value CSS class  (lp-val-yes | lp-val-no | lp-val-neutral)
                         * [3] Their value text
                         * [4] Their value CSS class (lp-val-yes | lp-val-no | lp-val-neutral)
                         */
                        $compare_rows = [
                            ['Zoho Native',                    '100%',  'lp-val-yes', 'Partially',  'lp-val-no'],
                            ['Redirection to external portal', 'No',    'lp-val-yes', 'Yes',         'lp-val-neutral'],
                            ['AI-powered Messaging',           'Yes',   'lp-val-yes', 'No',          'lp-val-neutral'],
                        ];
                        foreach ($compare_rows as $row) :
                        ?>
                            <tr>
                                <td><?php echo esc_html($row[0]); ?></td>
                                <td class="lp-col-highlight">
                                    <span class="<?php echo esc_attr($row[2]); ?>"><?php echo esc_html($row[1]); ?></span>
                                </td>
                                <td>
                                    <span class="<?php echo esc_attr($row[4]); ?>"><?php echo esc_html($row[3]); ?></span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- ═══ FOOTER CTA — TESTIMONIAL SLIDER ═══ -->
    <section class="lp-footer-cta">
        <div class="container">
            <div class="lp-testimonial-slider" data-lp-testimonial-slider>
                <div class="lp-testimonial-viewport" data-lp-testimonial-viewport>
                    <div class="lp-testimonial-track" data-lp-testimonial-track role="region" aria-label="Customer testimonials" aria-live="polite">
                        <?php
                        $testimonials = [
                            ['ED', 'So innovative — we\'ve seen productive features and enhancements in a short time.', 'Eduardo Dela Rosa', 'CRM Integration Analyst, ResMed Ltd'],
                            ['LF', 'We compared 16 vendors, narrowed to 6, and moved to 360 SMS. Far less custom code than the rest.', 'Lindsay Fairchild', 'Administrator, Bisk Education'],
                            ['RB', '360 SMS has been a great strategic partner as we built out our Zoho messaging systems. Their team is helpful and communicative.', 'Rachel Blake', 'Director of Analytics, Livly'],
                            ['MR', 'A highly capable and reliable Zoho partner. Their team delivered high-quality solutions with far less custom code than others.', 'Mark Reynolds', 'VP of Technology'],
                        ];
                        foreach ($testimonials as $t) :
                        ?>
                            <div class="lp-testimonial-slide" data-lp-testimonial-slide>
                                <div class="lp-testimonial">
                                    <div class="stars" aria-label="5 out of 5 stars">★★★★★</div>
                                    <p class="lp-testimonial-quote">&ldquo;<?php echo esc_html($t[1]); ?>&rdquo;</p>
                                    <div class="lp-testimonial-author">
                                        <div class="lp-testimonial-avatar" aria-hidden="true"><?php echo esc_html($t[0]); ?></div>
                                        <div class="lp-testimonial-meta">
                                            <p class="name"><?php echo esc_html($t[2]); ?></p>
                                            <p class="role"><?php echo esc_html($t[3]); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="lp-testimonial-controls">
                    <button type="button" class="lp-testimonial-btn" data-lp-testimonial-prev aria-label="Previous testimonial">
                        <i class="bi bi-chevron-left" aria-hidden="true"></i>
                    </button>
                    <button type="button" class="lp-testimonial-btn" data-lp-testimonial-next aria-label="Next testimonial">
                        <i class="bi bi-chevron-right" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ SITE FOOTER ═══ -->
    <footer class="lp-site-footer">
        <div class="container">
            <img src="/wp-content/uploads/2026/08/360-SMS-logo-white.png"
                alt="360 SMS App"
                class="lp-site-footer-logo"
                width="220"
                height="56"
                loading="lazy">
            <!--<p class="lp-site-footer-tagline">The #1 native Zoho messaging platform. SMS, WhatsApp<br>and 15+ channels, AI-powered.</p>-->
            <hr class="lp-site-footer-divider" aria-hidden="true">
            <div class="lp-site-footer-bar">
                <p class="lp-site-footer-copy mb-0">&copy; <?php echo esc_html(gmdate('Y')); ?> 360 SMS App &middot; Powered by 360 Degree Cloud Technologies</p>
            </div>
        </div>
    </footer>

</main>

<script>
    (function() {
        'use strict';

        /* Hide third-party chat widgets */
        setInterval(function() {
            document.querySelectorAll('[class*="tawk"], [id*="tawk"], iframe[src*="tawk"]').forEach(function(el) {
                el.style.display = 'none';
            });
        }, 500);

        /* Move header to <body> so position:fixed is relative to the viewport */
        var lpHeader = document.querySelector('.lp-sticky-header');
        var lpMain = document.querySelector('.sms-lp');

        function syncHeaderOffset() {
            if (!lpHeader || !lpMain) return;
            var topOffset = 0;
            if (document.body.classList.contains('admin-bar')) {
                topOffset = window.innerWidth <= 782 ? 46 : 32;
            }
            var headerHeight = lpHeader.offsetHeight;
            var totalOffset = headerHeight + topOffset;
            document.documentElement.style.setProperty('--lp-header-offset', totalOffset + 'px');
            lpMain.style.paddingTop = totalOffset + 'px';
        }

        if (lpHeader && lpHeader.parentElement !== document.body) {
            var adminBar = document.getElementById('wpadminbar');
            if (adminBar) {
                adminBar.insertAdjacentElement('afterend', lpHeader);
            } else {
                document.body.insertBefore(lpHeader, document.body.firstChild);
            }
        }

        syncHeaderOffset();
        window.addEventListener('resize', syncHeaderOffset);
        window.addEventListener('load', syncHeaderOffset);

        if (lpHeader) {
            var logoImg = lpHeader.querySelector('img');
            if (logoImg && !logoImg.complete) {
                logoImg.addEventListener('load', syncHeaderOffset);
            }
        }

        /* Smooth scroll to contact form — all Book a demo / #lp-contact-form links */
        function getHeaderOffset() {
            var value = getComputedStyle(document.documentElement).getPropertyValue('--lp-header-offset');
            var offset = parseInt(value, 10);
            return isNaN(offset) ? 72 : offset;
        }

        function scrollToContactForm(e) {
            var target = document.getElementById('lp-contact-form');
            if (!target) return;
            e.preventDefault();
            var top = target.getBoundingClientRect().top + window.pageYOffset - getHeaderOffset();
            window.scrollTo({
                top: top,
                behavior: 'smooth'
            });
        }

        document.querySelectorAll('a[href="#lp-contact-form"], a[href$="#lp-contact-form"]').forEach(function(link) {
            link.addEventListener('click', scrollToContactForm);
        });

        /* Fade-in sections on scroll — skip sticky sections (transform breaks sticky) */
        if ('IntersectionObserver' in window) {
            var sections = document.querySelectorAll('.sms-lp section:not(.lp-dark-highlight):not(.lp-footer-cta)');
            sections.forEach(function(el) {
                el.style.opacity = '0';
                el.style.transform = 'translateY(20px)';
                el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            });

            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.08,
                rootMargin: '0px 0px -40px 0px'
            });

            sections.forEach(function(el) {
                observer.observe(el);
            });
        }

        /* Sticky + scroll panels: scroll anywhere on section → left panel scrolls */
        var stickyMq = window.matchMedia('(min-width: 992px)');

        function initStickyScrollSection(section, scrollPanel, stickyPanel) {
            if (!section || !scrollPanel || !stickyPanel) return;

            function syncPanelHeight() {
                if (!stickyMq.matches) {
                    scrollPanel.style.height = '';
                    scrollPanel.style.maxHeight = '';
                    return;
                }
                var h = stickyPanel.offsetHeight;
                if (h > 0) {
                    scrollPanel.style.height = h + 'px';
                    scrollPanel.style.maxHeight = h + 'px';
                }
            }

            function sectionActive() {
                var rect = section.getBoundingClientRect();
                var top = 88;
                return rect.top <= top && rect.bottom > top + 120;
            }

            function panelCanScroll() {
                return scrollPanel.scrollHeight > scrollPanel.clientHeight + 2;
            }

            section.addEventListener('wheel', function(e) {
                if (!stickyMq.matches || !sectionActive() || !panelCanScroll()) return;

                var atTop = scrollPanel.scrollTop <= 0;
                var atBottom = scrollPanel.scrollTop + scrollPanel.clientHeight >= scrollPanel.scrollHeight - 2;

                if (e.deltaY > 0 && !atBottom) {
                    e.preventDefault();
                    scrollPanel.scrollTop += e.deltaY;
                } else if (e.deltaY < 0 && !atTop) {
                    e.preventDefault();
                    scrollPanel.scrollTop += e.deltaY;
                }
            }, {
                passive: false
            });

            window.addEventListener('resize', syncPanelHeight);
            window.addEventListener('load', syncPanelHeight);
            syncPanelHeight();

            if ('ResizeObserver' in window) {
                new ResizeObserver(syncPanelHeight).observe(stickyPanel);
            }
        }

        initStickyScrollSection(
            document.querySelector('.sms-lp .lp-dark-highlight'),
            document.querySelector('.sms-lp .lp-dark-cards'),
            document.querySelector('.sms-lp .lp-dark-sticky')
        );

        var darkImg = document.querySelector('.sms-lp .lp-dark-img');
        if (darkImg && !darkImg.complete) {
            darkImg.addEventListener('load', function() {
                window.dispatchEvent(new Event('resize'));
            });
        }

        /* Testimonial infinite slider — 3 visible, slides right to left */
        var testimonialSlider = document.querySelector('.sms-lp [data-lp-testimonial-slider]');
        if (testimonialSlider) {
            var viewport = testimonialSlider.querySelector('[data-lp-testimonial-viewport]');
            var track = testimonialSlider.querySelector('[data-lp-testimonial-track]');
            var prevBtn = testimonialSlider.querySelector('[data-lp-testimonial-prev]');
            var nextBtn = testimonialSlider.querySelector('[data-lp-testimonial-next]');
            var reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            var originals = track ? Array.prototype.slice.call(track.children) : [];
            var total = originals.length;
            var index = 0;
            var slideStep = 0;
            var isAnimating = false;
            var autoTimer = null;
            var animTimer = null;
            var autoDelay = 4000;
            var animDuration = 550;
            var isHovered = false;

            if (track && viewport && total) {
                originals.forEach(function(slide) {
                    track.appendChild(slide.cloneNode(true));
                });

                function applyTransform(animate) {
                    track.style.transform = 'translateX(-' + (index * slideStep) + 'px)';

                    if (!animate || reducedMotion) {
                        track.classList.add('is-resetting');
                        return;
                    }

                    track.classList.add('is-resetting');
                    void track.offsetWidth;
                    track.classList.remove('is-resetting');
                    track.style.transform = 'translateX(-' + (index * slideStep) + 'px)';
                }

                function measureStep() {
                    var slide = track.children[0];
                    if (!slide) return false;
                    var gap = parseFloat(window.getComputedStyle(track).gap) || 20;
                    var width = slide.getBoundingClientRect().width;
                    if (width <= 0) return false;
                    slideStep = width + gap;
                    applyTransform(false);
                    return true;
                }

                function clearAnimTimer() {
                    if (animTimer) {
                        window.clearTimeout(animTimer);
                        animTimer = null;
                    }
                }

                function finishTransition() {
                    clearAnimTimer();
                    isAnimating = false;

                    if (index >= total) {
                        index = 0;
                        applyTransform(false);
                    } else if (index < 0) {
                        index = total - 1;
                        applyTransform(false);
                    }

                    scheduleAutoPlay();
                }

                track.addEventListener('transitionend', function(e) {
                    if (e.target !== track || e.propertyName !== 'transform') return;
                    finishTransition();
                });

                function beginAnimation() {
                    clearAnimTimer();
                    isAnimating = true;
                    animTimer = window.setTimeout(finishTransition, animDuration + 80);
                }

                function moveNext() {
                    if (isAnimating || slideStep <= 0) return;
                    index += 1;
                    applyTransform(true);
                    beginAnimation();
                }

                function movePrev() {
                    if (isAnimating || slideStep <= 0) return;

                    if (index <= 0) {
                        index = total;
                        applyTransform(false);
                        requestAnimationFrame(function() {
                            index -= 1;
                            applyTransform(true);
                            beginAnimation();
                        });
                        return;
                    }

                    index -= 1;
                    applyTransform(true);
                    beginAnimation();
                }

                function stopAutoPlay() {
                    if (autoTimer) {
                        window.clearTimeout(autoTimer);
                        autoTimer = null;
                    }
                }

                function scheduleAutoPlay() {
                    stopAutoPlay();
                    if (reducedMotion || isHovered) return;
                    autoTimer = window.setTimeout(moveNext, autoDelay);
                }

                function startAutoPlay() {
                    stopAutoPlay();
                    scheduleAutoPlay();
                }

                if (prevBtn) {
                    prevBtn.addEventListener('click', function() {
                        stopAutoPlay();
                        movePrev();
                    });
                }

                if (nextBtn) {
                    nextBtn.addEventListener('click', function() {
                        stopAutoPlay();
                        moveNext();
                    });
                }

                viewport.addEventListener('mouseenter', function() {
                    isHovered = true;
                    stopAutoPlay();
                });
                viewport.addEventListener('mouseleave', function() {
                    isHovered = false;
                    startAutoPlay();
                });

                function initSlider(attempt) {
                    if (measureStep()) {
                        startAutoPlay();
                        return;
                    }

                    if (attempt < 30) {
                        window.setTimeout(function() {
                            initSlider(attempt + 1);
                        }, 100);
                    }
                }

                window.addEventListener('resize', function() {
                    measureStep();
                });
                window.addEventListener('load', function() {
                    measureStep();
                    if (!autoTimer && !isAnimating) startAutoPlay();
                });

                if ('ResizeObserver' in window) {
                    new ResizeObserver(function() {
                        measureStep();
                    }).observe(viewport);
                }

                initSlider(0);
            }
        }

    })();
</script>

<script>
    document.querySelectorAll('*').forEach(e => {
        if (e.outerHTML.includes('tawk')) console.log(e);
    });
</script>

<?php get_footer("paid"); ?>