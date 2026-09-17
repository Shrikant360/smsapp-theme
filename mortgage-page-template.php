<?php

/**
 * Template Name: Mortgage Landing Page
 * Description: Google Ads 360 SMS mortgage landing page — Bootstrap layout matching Figma mockup.
 *
 * @package SMS360
 */

if (!defined('ABSPATH')) {
    exit;
}

$lp_img  = esc_url( home_url('/wp-content/uploads/2026/09/') );
$lp_logo = esc_url( home_url('/wp-content/uploads/2019/07/360_sms_-app_logo.png') );
$lp_demo = 'href="#lp-demo-modal" data-bs-toggle="modal" data-bs-target="#lp-demo-modal"';

get_header("paid");
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
#webtoLeadFormOne{
margin-top:0 !important;
margin-bottom:0 !important;
}

p.country{
display:none;
}

.phone1{
margin-bottom:0 !important;
}

#city {
    margin-top: 0px !important;
}

.lp-form-card .row{
margin-bottom:0 !important;
}

@media (max-width: 767px) {
  .phone1 .iti.iti--allow-dropdown.iti--separate-dial-code {
    width: 100%;
  }
}
	
    html.hide-header #head,
    html.hide-header #nav-main {
        display: none !important;
    }

    body:has(.sms-lp) #colophon,
    body:has(.sms-lp) .site-footer,
    body:has(.sms-lp) footer:not(.lp-footer) {
        display: none !important;
    }

    #ccb-banner,
    #ccb-float-btn,
    .whatsapp-content,
    .cus_class {
        display: none !important;
    }

    body:has(.sms-lp),
    body:has(.sms-lp) *,
    .sms-lp,
    .sms-lp * {
        font-family: var(--lp-font, 'Plus Jakarta Sans', 'Segoe UI', sans-serif) !important;
    }

    body:has(.sms-lp) {
        --lp-font: 'Plus Jakarta Sans', 'Segoe UI', sans-serif;
        --lp-blue: #0056b3;
        --lp-blue-dark: #004a99;
        --lp-navy: #0a1f44;
        --lp-ink: #1e293b;
        --lp-muted: #64748b;
        --lp-bg: #f4f7fa;
        --lp-border: #e5eaf0;
        --lp-green: #16a34a;
        --lp-red: #dc4a3a;
        --lp-stat: #1e5189;
        --lp-coral: #CB634B;
        --lp-coral-hover: #c46248;
        --lp-white: #ffffff;
        --lp-header-offset: 72px;
        overflow-x: clip;
        overflow-y: visible;
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
        margin: 0 !important;
        overflow: visible !important;
        transform: none !important;
        filter: none !important;
        perspective: none !important;
    }
    
    .sms-lp .lp-logo img {
        height: 40px !important;
        width: auto;
    }

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
        transform: translateY(-100%);
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transition: transform .28s ease, opacity .28s ease, visibility .28s ease;
    }

    .lp-sticky-header.is-visible {
        transform: translateY(0);
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
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
        padding: clamp(12px, 2vw, 14px) clamp(16px, 3vw, 24px);
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
        height: clamp(36px, 5vw, 44px);
        width: auto;
        max-width: clamp(140px, 42vw, 180px);
        object-fit: contain;
    }

    .lp-sticky-header .btn-lp-coral {
        background-color: var(--lp-coral, #CB634B);
        border: none;
        color: #ffffff;
        font-weight: 700;
        font-size: clamp(13px, 0.8rem + 0.25vw, 15px);
        padding: clamp(7px, 1.5vw, 10px) clamp(18px, 4vw, 28px);
        border-radius: 6px;
        transition: background-color 0.2s ease;
        text-decoration: none;
        display: inline-block;
        text-transform: none;
        letter-spacing: normal;
        box-shadow: 0 4px 14px rgba(217, 113, 84, 0.32);
        white-space: nowrap;
    }

    .lp-sticky-header .btn-lp-coral:hover,
    .lp-sticky-header .btn-lp-coral:focus {
        background-color: var(--lp-coral-hover, #c46248);
        color: #fff !important;
    }

    body.admin-bar .lp-sticky-header {
        top: 32px;
    }

    @media screen and (max-width: 782px) {
        body.admin-bar .lp-sticky-header {
            top: 46px;
        }
    }

    .lp-mobile-sticky-cta {
        display: none;
        align-items: center;
        justify-content: center;
        position: fixed;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 99999;
        width: 100%;
        background: var(--lp-coral, #CB634B);
        color: #fff;
        font-weight: 700;
        font-size: clamp(15px, 2.8vw, 16px);
        line-height: 1.2;
        padding: 16px 20px;
        border: 0;
        border-radius: 0;
        text-decoration: none;
        text-align: center;
        box-shadow: 0 -4px 18px rgba(10, 31, 68, .12);
    }

    .lp-mobile-sticky-cta:hover,
    .lp-mobile-sticky-cta:focus {
        background: var(--lp-coral-hover, #c46248);
        color: #fff;
    }

    @media (max-width: 767.98px) {
        .lp-sticky-header {
            display: none !important;
        }

        .lp-mobile-sticky-cta {
            display: flex;
        }

        .sms-lp {
            padding-bottom: 64px;
        }

        .lp-demo-modal.show ~ .lp-mobile-sticky-cta,
        body:has(.lp-demo-modal.show) .lp-mobile-sticky-cta {
            display: none;
        }
    }

    .sms-lp,
    .sms-lp * {
        text-transform: none !important;
    }

    .sms-lp {
        font-family: var(--lp-font, 'Plus Jakarta Sans', 'Segoe UI', sans-serif);
        color: var(--lp-ink);
        font-size: clamp(15px, 0.9rem + 0.2vw, 16px);
        font-weight: 400;
        line-height: 1.6;
        background: #fff;
        text-transform: none;
        --lp-section-y: clamp(40px, 5vw + 1.2rem, 80px);
        --lp-block-gap: clamp(20px, 3vw + 0.6rem, 48px);
    }

    .sms-lp .container {
        max-width: 1180px;
    }

    .sms-lp h1,
    .sms-lp h2,
    .sms-lp h3,
    .sms-lp h4 {
        color: var(--lp-navy);
        font-weight: 700;
        letter-spacing: -0.025em;
    }

    .sms-lp p {
        font-weight: 400;
    }

    .sms-lp .btn-lp {
        background: var(--lp-blue);
        border: 1.5px solid var(--lp-blue);
        color: #fff;
        font-weight: 600;
        font-size: clamp(14px, 0.85rem + 0.2vw, 15px);
        line-height: 1.2;
        padding: 13px 26px;
        border-radius: 8px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: background .2s, color .2s, border-color .2s;
    }

    .sms-lp .btn-lp:hover,
    .sms-lp .btn-lp:focus {
        background: var(--lp-blue-dark);
        border-color: var(--lp-blue-dark);
        color: #fff;
    }

    .sms-lp .btn-lp-outline {
        background: #fff;
        color: var(--lp-blue);
    }

    .sms-lp .btn-lp-outline:hover,
    .sms-lp .btn-lp-outline:focus {
        background: var(--lp-blue);
        color: #fff;
    }

    .sms-lp .lp-section-title {
        font-size: clamp(24px, 1.3rem + 1.4vw, 34px);
        line-height: 1.28;
        margin-bottom: 12px;
    }

    .sms-lp .lp-section-sub {
        color: var(--lp-muted);
        font-size: clamp(14px, 0.85rem + 0.25vw, 16px);
        line-height: 1.65;
        font-weight: 400;
        max-width: 620px;
        margin: 0 auto var(--lp-block-gap);
    }

    /* Hero */
    .sms-lp .lp-hero {
        background-color: #eaf4fb;
        background-image: url('<?php echo esc_url($lp_img . 'hero-bg.webp'); ?>');
        background-position: center top;
        background-size: cover;
        background-repeat: no-repeat;
        padding: clamp(20px, 3vw, 32px) 0 0;
        overflow: visible;
    }

    .sms-lp .lp-badge {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #e7f3ff;
        color: var(--lp-blue);
        font-size: clamp(12px, 0.7rem + 0.15vw, 13px);
        font-weight: 500;
        padding: 7px 14px;
        border-radius: 50px;
        margin: 36px 0 20px;
    }

    .sms-lp .lp-hero h1 {
        font-size: clamp(22px, 1.4rem + 1.5vw, 36px);
        line-height: 1.18;
        font-weight: 700;
        
        margin: 0 0 18px;
        color: var(--lp-navy);
    }

    .sms-lp .lp-hero h1 .accent {
        color: var(--lp-blue);
        display: block;
    }

    .sms-lp .lp-hero-sub {
        color: var(--lp-muted);
        font-size: clamp(14px, 0.85rem + 0.25vw, 16px);
        line-height: 1.7;
        font-weight: 400;
        max-width: 500px;
        margin: 0 0 28px;
    }

    .sms-lp .lp-hero-visual {
        max-width: 100%;
        height: auto;
    }

    /* Stats — centered on the hero / trusted seam */
    .sms-lp .lp-stats-wrap {
        position: relative;
        z-index: 3;
        transform: translateY(50%);
        margin: 28px 0 0;
        padding: 0;
    }

    .sms-lp .lp-stats {
        background: #fff;
        border-radius: clamp(16px, 2.5vw, 20px);
        box-shadow: 0 8px 28px rgba(10, 31, 68, .08);
        padding: clamp(6px, 1.5vw, 18px) clamp(4px, 1vw, 8px);
        max-width: 1105px;
        margin: 0 auto;
    }

    .sms-lp .lp-stats .row > [class*="col-"] {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sms-lp .lp-stats .row > [class*="col-"]:not(:last-child)::after {
        content: "";
        position: absolute;
        top: 50%;
        right: 0;
        transform: translateY(-50%);
        width: 1px;
        height: 54%;
        background: #e6ebf0;
        pointer-events: none;
    }

    .sms-lp .lp-stat {
        text-align: center;
        padding: 2px 8px;
        width: 100%;
    }

    .sms-lp .lp-stat-copy {
        text-align: center;
    }

    .sms-lp .lp-stat i {
        color: var(--lp-blue);
        font-size: 18px;
        display: block;
        margin-bottom: 6px;
        line-height: 1;
    }

    .sms-lp .lp-stat strong {
        display: block;
        color: var(--lp-navy);
        font-size: clamp(18px, 1.1rem + 0.5vw, 24px);
        font-weight: 700;
        line-height: 1.15;
        letter-spacing: -0.02em;
    }

    .sms-lp .lp-stat span {
        display: block;
        color: var(--lp-muted);
        font-size: clamp(11px, 0.65rem + 0.15vw, 12px);
        font-weight: 400;
        margin-top: 2px;
        line-height: 1.3;
    }

    /* Trusted */
    .sms-lp .lp-trusted {
        background: #F0F1F1;
        padding: 40px 0 var(--lp-section-y);
        overflow: visible;
    }

    .sms-lp .lp-trusted > .container {
        padding-top: 72px;
    }

    .sms-lp .lp-trusted h2 {
        font-size: clamp(24px, 1.3rem + 1.4vw, 34px);
        line-height: 1.25;
        font-weight: 700;
        margin: 0;
        max-width: 280px;
    }

    .sms-lp .lp-logo-card {
        background: #fff;
        border-radius: 8px;
        height: 75px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 16px 12px;
        box-shadow: 0 2px 10px rgba(10, 31, 68, .04);
    }

    .sms-lp .lp-logo-card img {
        max-height: 90px;
         max-width: 100%; 
        width: auto;
        object-fit: contain;
    }

    /* Features */
    .sms-lp .lp-features {
        padding: var(--lp-section-y) 0;
        background: #F4F8FD;
    }

    .sms-lp .lp-feature-block {
        margin-bottom: clamp(32px, 4vw, 56px);
    }

    .sms-lp .lp-step {
        display: block;
        width: 100%;
        border: 0;
        background: transparent;
        text-align: left;
        padding: 8px 8px 8px 4px;
        margin: 0 0 28px;
        border-radius: 12px;
        cursor: pointer;
        color: inherit;
        transition: background .2s, box-shadow .2s;
    }

    .sms-lp .lp-step:last-child {
        margin-bottom: 0;
    }

    .sms-lp .lp-step.active {
        background: rgba(179, 186, 197, 0.1);
        padding: 20px 22px 20px 24px;
        box-shadow: inset 4px 0 0 var(--lp-blue);
    }

    .sms-lp .lp-step-badge {
        display: inline-block;
        font-size: clamp(10px, 0.6rem + 0.1vw, 11px);
        font-weight: 600;
        letter-spacing: 0;
        padding: 4px 10px;
        border-radius: 50px;
        background: #e8f1fb;
        color: var(--lp-blue);
        margin-bottom: 10px;
    }

    .sms-lp .lp-step.active .lp-step-badge {
        background: var(--lp-blue);
        color: #fff;
    }

    .sms-lp .lp-step h3 {
        font-size: clamp(17px, 0.95rem + 0.4vw, 20px);
        line-height: 1.3;
        font-weight: 700;
        margin: 0 0 8px;
    }

    .sms-lp .lp-step p {
        margin: 0;
        color: var(--lp-muted);
        font-size: clamp(14px, 0.8rem + 0.25vw, 15px);
        line-height: 1.65;
        font-weight: 400;
        max-width: 420px;
    }

    .sms-lp .lp-feature-media {
        padding: 24px;
    }

    .sms-lp .lp-feature-media img {
        max-width: 100%;
        height: auto;
        transition: opacity .22s ease;
    }

    .sms-lp .lp-feature-media img.is-fading {
        opacity: 0;
    }

    .sms-lp .lp-step-visual {
        display: none;
    }

    @media (min-width: 992px) {
        .sms-lp .lp-feature-media {
            position: sticky;
            top: calc(var(--lp-header-offset, 72px) + 12px);
        }
    }

    /* Results */
    .sms-lp .lp-results {
        padding: var(--lp-section-y) 0;
        background: #fff;
    }

    .sms-lp .lp-results .lp-section-title {
        margin-bottom: var(--lp-block-gap);
    }

    .sms-lp .lp-results-bar {
        background: var(--lp-stat);
        border-radius: clamp(12px, 2vw, 14px);
        padding: clamp(18px, 4vw, 40px) clamp(6px, 1.2vw, 12px);
        color: #fff;
    }

    .sms-lp .lp-result-item {
        text-align: center;
        padding: clamp(0px, 0.4vw, 4px) clamp(8px, 1.8vw, 20px);
        position: relative;
        border-right: 0;
    }

    .sms-lp .lp-result-item:not(:last-child)::after {
        content: '';
        position: absolute;
        right: 0;
        top: 50%;
        transform: translateY(-50%);
        width: 1px;
        height: 72%;
        background: rgba(255, 255, 255, .28);
    }

    .sms-lp .lp-result-item strong {
        display: block;
        font-size: clamp(24px, 1.3rem + 1.4vw, 34px);
        font-weight: 700;
        line-height: 1.05;
        letter-spacing: -0.03em;
        margin-bottom: 8px;
    }

    .sms-lp .lp-result-item span {
        display: block;
        font-size: clamp(13px, 0.8rem + 0.2vw, 15px);
        font-weight: 400;
        line-height: 1.4;
        opacity: .95;
    }

    /* Clouds */
    .sms-lp .lp-clouds {
        padding: var(--lp-section-y) 0;
        background: #fff;
    }

    .sms-lp .lp-clouds .eyebrow {
        color: var(--lp-blue);
        font-weight: 700;
        font-size: clamp(16px, 0.95rem + 0.4vw, 20px);
        line-height: 1.4;
        margin: 0 0 12px;
    }

    .sms-lp .lp-cloud-slider {
        overflow: visible;
    }

    .sms-lp .lp-cloud-track {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 12px;
    }

    .sms-lp .lp-cloud-slide {
        flex: 0 0 calc(25% - 12px);
        max-width: 280px;
    }

    .sms-lp .lp-cloud-card {
        background: #fff;
        border: 1px solid #d5dde6;
        border-radius: 10px;
        padding: 16px 18px;
        display: flex;
        align-items: center;
        gap: 12px;
        height: 100%;
        box-shadow: 0 4px 12px rgba(10, 31, 68, .06);
        text-align: left;
    }

    .sms-lp .lp-cloud-icon {
        width: 40px;
        height: 40px;
        flex-shrink: 0;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        line-height: 0;
    }

    .sms-lp .lp-cloud-icon svg {
        width: 40px;
        height: 40px;
        display: block;
    }

    .sms-lp .lp-cloud-card span {
        font-weight: 700;
        color: var(--lp-navy);
        font-size: clamp(13px, 0.75rem + 0.15vw, 14px);
        line-height: 1.3;
    }

    /* Compare */
    .sms-lp .lp-compare {
        padding: var(--lp-section-y) 0;
        background: #fff;
    }

    .sms-lp .lp-compare .table-responsive {
        max-width: 860px;
        margin-left: auto;
        margin-right: auto;
    }

    .sms-lp .lp-compare-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        overflow: hidden;
        border-radius: 12px;
    }

    .sms-lp .lp-compare-table th,
    .sms-lp .lp-compare-table td {
        padding: 16px 22px;
        font-size: clamp(13px, 0.8rem + 0.2vw, 15px);
        vertical-align: middle;
    }

    .sms-lp .lp-compare-table thead th {
        color: #fff;
        font-weight: 600;
        border: 0;
    }

    .sms-lp .lp-compare-table thead th:nth-child(1) {
        background: #0b1f3a;
        text-align: left;
        width: 42%;
        border-radius: 12px 0 0 0;
    }

    .sms-lp .lp-compare-table thead th:nth-child(2) {
        background: #1e5aa8;
        text-align: center;
        width: 29%;
    }

    .sms-lp .lp-compare-table thead th:nth-child(3) {
        background: #163a66;
        text-align: center;
        width: 29%;
        border-radius: 0 12px 0 0;
    }

    .sms-lp .lp-compare-table tbody td {
        border-bottom: 1px solid #e8edf2;
        background: #fff;
        font-weight: 400;
    }

    .sms-lp .lp-compare-table tbody tr:last-child td {
        border-bottom: 0;
    }

    .sms-lp .lp-compare-table tbody td:first-child {
        color: var(--lp-ink);
        font-weight: 500;
    }

    .sms-lp .lp-compare-table tbody td:not(:first-child) {
        text-align: center;
    }

    .sms-lp .lp-yes {
        color: var(--lp-green);
        font-weight: 600;
    }

    .sms-lp .lp-no {
        color: var(--lp-red);
        font-weight: 500;
    }

    .sms-lp .lp-mobile-cta {
        padding: 8px 0 var(--lp-section-y);
        background: #fff;
    }

    .sms-lp .lp-mobile-cta-card {
        position: relative;
        overflow: hidden;
        background-color: var(--lp-blue);
        background-image:
            radial-gradient(circle at 108% -8%, rgba(255, 255, 255, .18) 0 92px, transparent 93px),
            radial-gradient(circle at -12% 112%, rgba(255, 255, 255, .14) 0 110px, transparent 111px);
        border-radius: 20px;
        box-shadow: 0 12px 32px rgba(0, 86, 179, .25);
        padding: 40px 24px 32px;
        text-align: center;
        color: #fff;
    }

    .sms-lp .lp-mobile-cta-icon {
        position: relative;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 16px;
        color: #fff;
    }

    .sms-lp .lp-mobile-cta-icon .bi-bank2 {
        font-size: 42px;
        line-height: 1;
    }

    .sms-lp .lp-mobile-cta-icon .bi-shield-fill-check {
        position: absolute;
        right: -8px;
        bottom: -2px;
        font-size: 16px;
        line-height: 1;
    }

    .sms-lp .lp-mobile-cta-card h2 {
        color: #fff;
        font-size: clamp(20px, 5.4vw, 24px);
        line-height: 1.3;
        font-weight: 700;
        margin: 0 0 22px;
    }

    .sms-lp .lp-mobile-cta-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        background: #fff;
        color: var(--lp-blue);
        font-weight: 700;
        font-size: 15px;
        line-height: 1.2;
        padding: 11px 28px;
        border-radius: 50px;
        text-decoration: none;
    }

    .sms-lp .lp-mobile-cta-btn:hover,
    .sms-lp .lp-mobile-cta-btn:focus {
        background: #fff;
        color: var(--lp-blue-dark);
    }

    /* Final CTA + footer share footer-bg */
    .sms-lp .lp-bottom {
        background: url('<?php echo esc_url($lp_img . 'footer-bg.webp'); ?>') center bottom / cover no-repeat;
        background-color: #eef6fc;
        padding: var(--lp-section-y) 0;
        text-align: center;
    }

    .sms-lp .lp-final h2 {
        font-size: clamp(24px, 1.3rem + 1.4vw, 34px);
        line-height: 1.28;
        /*max-width: 720px;*/
        margin: 0 auto 14px;
        color: var(--lp-blue);
    }

    .sms-lp .lp-final p {
        color: var(--lp-muted);
        font-size: clamp(14px, 0.85rem + 0.25vw, 16px);
        line-height: 1.7;
        max-width: 640px;
        margin: 0 auto 28px;
    }

    .lp-form-card {
        background: #fff;
        border-radius: 16px;
        padding: 8px 4px 4px;
        text-align: left;
        border: 0;
        box-shadow: none;
    }

    .lp-form-card h3,
    .lp-form-card > p,
    .lp-form-card .form-sub {
        display: none;
    }

    .lp-form-card .contact-card,
    .lp-form-card .sms-contact-form-section__shortcode {
        background: transparent;
        border: none;
        border-radius: 0;
        padding: 0;
        box-shadow: none;
    }

    .lp-form-card input[type="text"],
    .lp-form-card input[type="email"],
    .lp-form-card input[type="tel"],
    .lp-form-card textarea,
    .lp-form-card select {
        border-radius: 8px;
        padding: 10px 14px;
        font-size: clamp(16px, 0.95rem + 0.1vw, 16px);
        width: 100%;
        margin-bottom: 0 !important;
        font-family: var(--lp-font, 'Plus Jakarta Sans', 'Segoe UI', sans-serif) !important;
        text-transform: none !important;
    }

    .lp-form-card input[type="submit"],
    .lp-form-card button[type="submit"],
    .lp-form-card .wpcf7-submit {
        background-color: var(--lp-coral, #CB634B) !important;
        border: none !important;
        color: #fff !important;
        font-weight: 700 !important;
        font-size: clamp(14px, 0.85rem + 0.2vw, 15px) !important;
        padding: 12px 24px !important;
        border-radius: 6px !important;
        width: 100%;
        cursor: pointer;
        transition: background-color 0.2s;
        font-family: var(--lp-font, 'Plus Jakarta Sans', 'Segoe UI', sans-serif) !important;
        text-transform: none !important;
    }

    .lp-form-card input[type="submit"]:hover,
    .lp-form-card button[type="submit"]:hover {
        background-color: var(--lp-coral-hover, #c46248) !important;
    }

    input#country_selector,
    #country_selector {
        height: 42px !important;
        border: 1px solid #ccc;
    }

    .lp-form-card .intl-tel-input .selected-flag,
    .country-select .selected-flag {
        height: 40px !important;
    }

    .lp-form-card .intl-tel-input .selected-flag {
        height: 100% !important;
    }

    #country {
        border: 0 !important;
        margin-bottom: 1rem !important;
    }

    .lp-demo-modal {
        z-index: 100050 !important;
        overflow: visible !important;
    }

    .lp-demo-modal .modal-dialog,
    .lp-demo-modal .modal-body {
        overflow: visible !important;
    }

    .modal-backdrop,
    .modal-backdrop.show,
    .modal-backdrop.fade {
        z-index: 100040 !important;
    }

    body > .post_outer,
    .post_outer,
    .post_outer.show {
        z-index: 2147483000 !important;
        position: fixed !important;
        top: 0 !important;
        left: 0 !important;
        right: 0 !important;
        bottom: 0 !important;
        width: 100% !important;
        height: 100% !important;
    }

    body > .iti--container,
    body > .intl-tel-input.iti-container,
    .iti--container,
    .intl-tel-input.iti-container,
    .lp-demo-modal .country-select .country-list {
        z-index: 100080 !important;
    }

    .lp-demo-modal .modal-dialog {
        max-width: 520px;
    }

    .lp-demo-modal .modal-content {
        border: 0;
        border-radius: 16px;
        box-shadow: 0 8px 40px rgba(10, 45, 92, 0.1);
        overflow: visible;
    }

    .lp-demo-modal .modal-header {
        border: 0;
        padding: 18px 24px 0;
        align-items: flex-start;
    }

    .lp-demo-modal .modal-title {
        font-size: clamp(18px, 1rem + 0.5vw, 22px);
        font-weight: 700;
        color: var(--lp-navy, #0a1f44);
        text-transform: none;
        letter-spacing: -0.02em;
    }

    .lp-demo-modal .modal-body {
        padding: 8px 24px 8px;
    }

    .sms-lp .lp-footer-card {
        background: #fff;
        border-radius: clamp(16px, 3vw, 20px);
        box-shadow: 0 8px 32px rgba(10, 31, 68, .06);
        padding: clamp(28px, 4vw, 48px) clamp(16px, 3vw, 32px);
        margin: var(--lp-section-y) auto 0;
        text-align: center;
        max-width: 1100px;
    }

    .sms-lp .lp-footer-card img {
        height: 46px !important ;
        width: auto !important;
        margin: 0 auto 16px;
        display: block;
    }

    .sms-lp .lp-footer-card .tagline {
        font-weight: 700;
        color: var(--lp-ink);
        max-width: 560px;
        margin: 0 auto 18px;
        font-size: clamp(13px, 0.8rem + 0.2vw, 15px);
        line-height: 1.5;
    }

    .sms-lp .lp-footer-meta {
        color: #94a3b8;
        font-size: clamp(11px, 0.65rem + 0.15vw, 12px);
        font-weight: 400;
        margin: 0;
        line-height: 1.6;
    }

    .sms-lp .lp-footer-meta a {
        color: inherit;
        text-decoration: none;
    }

   

    @media (max-width: 991.98px) {
        .sms-lp .lp-hero > .container > .row {
            flex-direction: column;
            align-items: center;
        }

        .sms-lp .lp-hero-copy {
            display: contents;
            text-align: center;
        }

        .sms-lp .lp-hero .lp-badge {
            display: none;
        }

        .sms-lp .lp-hero h1,
        .sms-lp .lp-hero-sub,
        .sms-lp .lp-hero-visual-col {
            width: 100%;
            text-align: center;
        }

        .sms-lp .lp-hero-logo {
            order: 1;
            width: 100%;
            margin: 0 0 20px;
            text-align: left;
        }
        
         .sms-lp .lp-logo img{
             margin-left:20px;
         }
        
        .sms-lp .lp-hero h1 {
            order: 2;
            margin: 0 0 16px;
        }

        .sms-lp .lp-hero-visual-col {
            order: 3;
            margin: 0 0 16px;
        }

        .sms-lp .lp-hero-sub {
            order: 4;
            margin: 0 auto 24px;
        }

        .sms-lp .lp-hero-copy > .btn-lp {
            order: 5;
        }

        .sms-lp .lp-trusted-title {
            text-align: center;
        }

        .sms-lp .lp-trusted h2 {
            max-width: 300px;
            margin: 0 auto 18px;
            line-height: 1.3;
            text-align: center;
        }

        .sms-lp .lp-logo-desktop-only {
            display: none !important;
        }

        .sms-lp .lp-logo-grid {
            display: flex;
            flex-wrap: nowrap;
            justify-content: center;
            align-items: stretch;
            gap: 4px;
            margin-left: 0;
            margin-right: 0;
        }

        .sms-lp .lp-logo-grid > [class*="col-"] {
            flex: 1 1 0;
            width: auto;
            max-width: none;
            padding-left: 0;
            padding-right: 0;
        }

        .sms-lp .lp-logo-card {
            height: 35px;
            padding: 5px 5px;
            border-radius: 6px;
            box-shadow: none;
            border: 1px solid #e8ecf0;
        }

        .sms-lp .lp-logo-card img {
            max-height: 34px;
        }

        .sms-lp .lp-feature-block {
            margin-bottom: 0;
        }

        .sms-lp .lp-feature-media-col {
            display: none !important;
        }

        .sms-lp .lp-step {
            position: relative;
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 8px 28px rgba(10, 31, 68, .07);
            padding: 32px 18px 18px;
            margin: 0 0 28px;
            text-align: left;
            cursor: default;
            -webkit-appearance: none;
            appearance: none;
        }

        .sms-lp .lp-step:last-child {
            margin-bottom: 28px;
        }

        .sms-lp .lp-step.active {
            background: #fff;
            padding: 32px 18px 18px;
            box-shadow: 0 8px 28px rgba(10, 31, 68, .07);
        }

        .sms-lp .lp-step-badge,
        .sms-lp .lp-step.active .lp-step-badge {
            position: absolute;
            top: 0;
            left: 50%;
            transform: translate(-50%, -50%);
            margin: 0;
            background: var(--lp-blue);
            color: #fff;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase !important;
            padding: 5px 14px;
            white-space: nowrap;
        }

        .sms-lp .lp-step h3 {
            text-align: left;
            margin-bottom: 8px;
        }

        .sms-lp .lp-step p {
            max-width: none;
            margin-bottom: 12px;
        }

        .sms-lp .lp-step-visual {
            display: block;
            width: 100%;
            max-width: 100%;
            height: auto;
            margin: 8px auto 0;
        }

        .sms-lp .lp-cloud-slider {
            overflow-x: auto;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
            scroll-snap-type: x mandatory;
            scrollbar-width: none;
            margin-left: -12px;
            margin-right: -12px;
            padding: 4px 16px 8px;
        }

        .sms-lp .lp-cloud-slider::-webkit-scrollbar {
            display: none;
        }

        .sms-lp .lp-cloud-track {
            flex-wrap: nowrap;
            justify-content: flex-start;
            width: max-content;
            gap: 10px;
        }

        .sms-lp .lp-cloud-track::after {
            content: '';
            flex: 0 0 16px;
        }

        .sms-lp .lp-cloud-slide {
            flex: 0 0 min(220px, 46vw);
            max-width: none;
            scroll-snap-align: start;
        }

        .sms-lp .lp-cloud-card {
            height: 64px;
            padding: 12px 14px;
            white-space: nowrap;
            border: 1px solid #d5dde6;
        }
    }

    @media (max-width: 767.98px) {
        .sms-lp .lp-hero {
            overflow: visible;
        }

        .sms-lp .lp-stats-wrap {
            transform: translateY(50%);
            margin-top: 20px;
        }

        .sms-lp .lp-stats-wrap > .container {
            padding-left: 12px;
            padding-right: 12px;
        }

        .sms-lp .lp-stats .row {
            flex-direction: row;
            flex-wrap: wrap;
            align-items: stretch;
            justify-content: center;
        }

        .sms-lp .lp-stats .row > .col-4 {
            flex: 0 0 33.333%;
            max-width: 33.333%;
            width: 33.333%;
        }

        .sms-lp .lp-stats .row > .col-6 {
            flex: 0 0 50%;
            max-width: 50%;
            width: 50%;
        }

        .sms-lp .lp-stats {
            max-width: none;
            padding: 6px 4px;
            border-radius: 16px;
        }

        .sms-lp .lp-stats .row > [class*="col-"]:not(:last-child)::after {
            display: none;
        }

        .sms-lp .lp-stats .row > [class*="col-"]:nth-child(1)::after,
        .sms-lp .lp-stats .row > [class*="col-"]:nth-child(2)::after,
        .sms-lp .lp-stats .row > [class*="col-"]:nth-child(4)::after {
            display: block;
            top: 22%;
            bottom: 22%;
            height: auto;
            transform: none;
        }

        .sms-lp .lp-stat {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            gap: 6px;
            text-align: left;
            padding: 12px 6px;
        }

        .sms-lp .lp-stat i {
            margin-bottom: 0;
            font-size: 20px;
            flex-shrink: 0;
        }

        .sms-lp .lp-stat-copy {
            text-align: left;
        }

        .sms-lp .lp-stat strong {
            font-size: 16px;
        }

        .sms-lp .lp-stat span {
            font-size: 10px;
            line-height: 1.25;
        }

        .sms-lp .lp-trusted > .container {
            padding-top: 76px;
        }

        .sms-lp .lp-results-bar {
            padding: clamp(18px, 4vw, 24px) 6px;
            border-radius: 12px;
        }

        .sms-lp .lp-result-item {
            padding: 0 8px;
        }
    }
</style>

<script>
    document.documentElement.classList.add('hide-header');
</script>

<header class="lp-sticky-header">
    <div class="lp-header-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="lp-logo">
            <img src="<?php echo esc_url($lp_logo); ?>"
                alt="360 SMS App"
                width="180"
                height="44"
                loading="eager">
        </a>
        <a <?php echo $lp_demo; ?> class="btn btn-lp-coral lp-header-cta">Book a Demo</a>
    </div>
</header>

<a <?php echo $lp_demo; ?> class="lp-mobile-sticky-cta">Book a Demo</a>

<main class="sms-lp">

    <section class="lp-hero px-2">
        <div class="container">
            <div class="row align-items-center justify-content-center g-4 g-lg-5">
                <div class="col-lg-6 lp-hero-copy">
                    <div class="lp-hero-logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="lp-logo d-inline-block">
                            <img src="<?php echo esc_url($lp_logo); ?>"
                                alt="360 SMS App" width="180" height="40" loading="eager">
                        </a>
                    </div>
                    <div class="lp-badge">
                        <i class="bi bi-house-door-fill" aria-hidden="true"></i>
                        Built For Mortgage Lenders On Salesforce
                    </div>
                    <h1>Close More Loan Requests <span class="accent">with Salesforce SMS and Calls</span></h1>
                    <p class="lp-hero-sub">Manage borrower communication across the loan lifecycle with AI-powered calling, texting, and automation - all without leaving Salesforce.</p>
                    <a <?php echo $lp_demo; ?> class="btn-lp">Book a demo now <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
                </div>
                <div class="col-lg-5 text-center lp-hero-visual-col">
                    <img src="<?php echo esc_url($lp_img . 'Righ-Img.webp'); ?>"
                        alt="Mortgage team closing loans with Salesforce SMS"
                        class="lp-hero-visual"
                        width="540" height="auto" loading="eager">
                </div>
            </div>
        </div>

        <div class="lp-stats-wrap">
            <div class="container">
                <div class="lp-stats">
                    <div class="row g-0">
                        <?php
                        $lp_stats = [
                            ['award', '14+', 'Years of Expertise', 'col-4 col-md'],
                            ['people', '60K+', 'Users Worldwide', 'col-4 col-md'],
                            ['stars', '1.2k+', 'AgentExchange Reviews', 'col-4 col-md'],
                            ['shield-check', '100%', 'Data Security', 'col-6 col-md'],
                            ['headset', '24/7', 'Free Support', 'col-6 col-md'],
                        ];
                        foreach ($lp_stats as $stat) :
                        ?>
                            <div class="<?php echo esc_attr($stat[3]); ?>">
                                <div class="lp-stat">
                                    <i class="bi bi-<?php echo esc_attr($stat[0]); ?>" aria-hidden="true"></i>
                                    <div class="lp-stat-copy">
                                        <strong><?php echo esc_html($stat[1]); ?></strong>
                                        <span><?php echo esc_html($stat[2]); ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

  <section class="lp-trusted px-2">

    <div class="container">
        <div class="row align-items-center justify-content-center g-4 g-lg-5">
            <div class="col-lg-4 lp-trusted-title">
                <h2>Trusted by 100+ Mortgage Teams Worldwide</h2>
            </div>

            <div class="col-lg-6">
                <div class="row g-3 lp-logo-grid">
                    <?php
                    $logos = [
                        [home_url('/wp-content/uploads/2026/09/layer1ldpi.png'), 'Volkswagen'],
                        [home_url('/wp-content/uploads/2026/09/Asset-21ldpi.png'), 'Abbott'],
                        [home_url('/wp-content/uploads/2026/09/Asset-3ldpi-1.png'), 'Accenture'],
                        [home_url('/wp-content/uploads/2026/09/Asset-4ldpi-1.png'), 'Nasdaq'],
                        [home_url('/wp-content/uploads/2026/09/american-redcross.webp'), 'American Red Cross'],
                        [home_url('/wp-content/uploads/2026/09/Asset-10ldpi.png'), 'PWC'],
                    ];

                    foreach ($logos as $i => $logo) :
                        $item_class = $i === 5
                            ? 'col-6 col-md-4 lp-logo-desktop-only'
                            : 'col-6 col-md-4';
                    ?>
                        <div class="<?php echo esc_attr($item_class); ?>">
                            <div class="lp-logo-card">
                                <img
                                    src="<?php echo esc_url($logo[0]); ?>"
                                    alt="<?php echo esc_attr($logo[1]); ?>"
                                    loading="lazy"
                                >
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

</section>

    <section class="lp-features px-2" id="loan-lifecycle">
        <div class="container">
            <div class="text-center">
                <h2 class="lp-section-title">Stay Connected with Your<br> Customers Across the Loan Lifecycle</h2>
                <p class="lp-section-sub">Never leave your prospects and customers lost at any touchpoint. Be there on their preferred channel - Calls, SMS, WhatsApp, and 12 more.</p>
            </div>

            <?php
            $steps_a = [
                [
                    'Convert New Enquiries Faster',
                    'Call high-intent borrowers immediately and automatically send personalized SMS to confirm interest and schedule consultations.',
                    $lp_img . 'automated-sms-updates.webp',
                ],
                [
                    'Simplify Pre-Qualification',
                    'Answer critical borrower questions over the phone or pre-qualify borrowers automatically via SMS using iText, so teams focus only on high-intent clients.',
                    $lp_img . 'appointment-scheduling.webp',
                ],
                [
                    'Keep Loan Applications Moving',
                    'Follow up on incomplete applications via automated SMS reminders for pending documents and guide for next steps.',
                    $lp_img . 'instant-notifications.webp',
                ],
            ];
            $steps_b = [
                [
                    'Reduce Processing Delays',
                    'Combine timely calls with automated status updates to keep borrowers informed about underwriting conditions, approvals, and outstanding requirements.',
                    $lp_img . 'document-completion.webp',
                ],
                [
                    'Deliver a Seamless Loan Closing Experience',
                    'Confirm closing appointments, share final instructions, and send automated reminders to ensure borrowers are prepared for closing day.',
                    $lp_img . 'mobile-app-features.webp',
                ],
                [
                    'Build Long-Term Borrower Relationships',
                    'Stay connected after closing with refinance outreach, referral campaigns, review requests, and nurture communications through calls and text.',
                    $lp_img . 'loan-process-workflow.webp',
                ],
            ];
            ?>

            <div class="row align-items-center g-4 g-lg-5 lp-feature-block" data-lp-steps>
                <div class="col-lg-6">
                    <div role="tablist" aria-label="Loan lifecycle steps 1 to 3">
                        <?php foreach ($steps_a as $i => $step) :
                            $n = str_pad((string) ($i + 1), 2, '0', STR_PAD_LEFT);
                        ?>
                            <button type="button"
                                class="lp-step<?php echo $i === 0 ? ' active' : ''; ?>"
                                role="tab"
                                aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>"
                                data-step-image="<?php echo esc_url($step[2]); ?>">
                                <span class="lp-step-badge">Step <?php echo esc_html($n); ?></span>
                                <h3><?php echo esc_html($step[0]); ?></h3>
                                <p><?php echo esc_html($step[1]); ?></p>
                                <img class="lp-step-visual"
                                    src="<?php echo esc_url($step[2]); ?>"
                                    alt="<?php echo esc_attr($step[0]); ?>"
                                    width="640" height="480" loading="lazy">
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-6 lp-feature-media-col">
                    <div class="lp-feature-media">
                        <img src="<?php echo esc_url($steps_a[0][2]); ?>"
                            alt="<?php echo esc_attr($steps_a[0][0]); ?>"
                            data-step-image-target
                            width="640" height="480" loading="lazy">
                    </div>
                </div>
            </div>

            <div class="row align-items-center g-4 g-lg-5 lp-feature-block flex-lg-row-reverse" data-lp-steps>
                <div class="col-lg-6">
                    <div role="tablist" aria-label="Loan lifecycle steps 4 to 6">
                        <?php foreach ($steps_b as $i => $step) :
                            $n = str_pad((string) ($i + 4), 2, '0', STR_PAD_LEFT);
                        ?>
                            <button type="button"
                                class="lp-step<?php echo $i === 0 ? ' active' : ''; ?>"
                                role="tab"
                                aria-selected="<?php echo $i === 0 ? 'true' : 'false'; ?>"
                                data-step-image="<?php echo esc_url($step[2]); ?>">
                                <span class="lp-step-badge">Step <?php echo esc_html($n); ?></span>
                                <h3><?php echo esc_html($step[0]); ?></h3>
                                <p><?php echo esc_html($step[1]); ?></p>
                                <img class="lp-step-visual"
                                    src="<?php echo esc_url($step[2]); ?>"
                                    alt="<?php echo esc_attr($step[0]); ?>"
                                    width="640" height="480" loading="lazy">
                            </button>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-lg-6 lp-feature-media-col">
                    <div class="lp-feature-media">
                        <img src="<?php echo esc_url($steps_b[0][2]); ?>"
                            alt="<?php echo esc_attr($steps_b[0][0]); ?>"
                            data-step-image-target
                            width="640" height="480" loading="lazy">
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a <?php echo $lp_demo; ?> class="btn-lp">Book a demo now <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>

    <section class="lp-results px-2 pb-0">
        <div class="container">
            <h2 class="lp-section-title text-center">Powering Better Outcomes Across<br> the Mortgage Journey</h2>
            <div class="lp-results-bar">
                    <div class="row g-0">
                        <?php
                        $lp_results = [
                            ['51%', 'Faster Speed-to-Lead'],
                            ['39%', 'Reduction in Loan Processing Delays'],
                            ['34%', 'Increase in Loan Closures'],
                        ];
                        foreach ($lp_results as $result) :
                        ?>
                            <div class="col-4">
                                <div class="lp-result-item">
                                    <strong><?php echo esc_html($result[0]); ?></strong>
                                    <span><?php echo esc_html($result[1]); ?></span>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
            </div>
        </div>
    </section>

    <section class="lp-clouds px-2 pb-0">
        <div class="container text-center">
            <h2 class="lp-section-title mb-3">Simplify Mortgage Communication for Your Salesforce Cloud</h2>
            <p class="eyebrow">Works Wherever Your Mortgage Team Works</p>
            <p class="lp-section-sub">Compatible with All 15 Salesforce Clouds</p>

            <div class="lp-cloud-slider" aria-label="Salesforce clouds">
                <div class="lp-cloud-track">
                    <?php
                    $cloud_svg = [
                        'fsc' => '<svg viewBox="0 0 48 48" fill="none" aria-hidden="true"><ellipse cx="24" cy="20" rx="16" ry="11" fill="#7CD5F5"/><path d="M12.5 22c0-5.2 4-9.4 9.1-9.4 1.7 0 3.3.5 4.6 1.3C27.7 11.2 30.6 9.5 34 9.5c5.2 0 9.4 4.2 9.4 9.5 0 1.3-.3 2.6-.8 3.7 2.4 1.2 4 3.7 4 6.5 0 4-3.3 7.3-7.4 7.3H16.2C11.6 36.5 8 32.9 8 28.4c0-2.8 1.4-5.2 3.6-6.6.4.1.6.1.9.2z" fill="#00A1E0"/><rect x="18" y="26" width="4" height="10" rx="1" fill="#E3066A"/><rect x="24" y="22" width="4" height="14" rx="1" fill="#FFB75D"/><rect x="30" y="18" width="4" height="18" rx="1" fill="#1589EE"/><circle cx="36" cy="16" r="5" fill="#F272C5"/><path d="M34.2 16a1.8 1.8 0 1 1 2.6 1.6L38.4 20.2a.8.8 0 0 1-1.3.9l-1.5-2.4A1.8 1.8 0 0 1 34.2 16z" fill="#fff"/></svg>',
                        'sales' => '<svg viewBox="0 0 48 48" fill="none" aria-hidden="true"><path d="M12.5 22c0-5.2 4-9.4 9.1-9.4 1.7 0 3.3.5 4.6 1.3C27.7 11.2 30.6 9.5 34 9.5c5.2 0 9.4 4.2 9.4 9.5 0 1.3-.3 2.6-.8 3.7 2.4 1.2 4 3.7 4 6.5 0 4-3.3 7.3-7.4 7.3H16.2C11.6 36.5 8 32.9 8 28.4c0-2.8 1.4-5.2 3.6-6.6.4.1.6.1.9.2z" fill="#00A1E0"/><rect x="16" y="20" width="18" height="12" rx="2" fill="#2E844A"/><rect x="17.5" y="21.5" width="15" height="9" rx="1.2" fill="#3BA755"/><text x="24" y="29" text-anchor="middle" font-size="8" font-weight="700" fill="#fff">$</text><path d="M31 17l5 2.2-1.8 4.2-5.2-1.5z" fill="#E3066A"/></svg>',
                        'service' => '<svg viewBox="0 0 48 48" fill="none" aria-hidden="true"><path d="M12.5 22c0-5.2 4-9.4 9.1-9.4 1.7 0 3.3.5 4.6 1.3C27.7 11.2 30.6 9.5 34 9.5c5.2 0 9.4 4.2 9.4 9.5 0 1.3-.3 2.6-.8 3.7 2.4 1.2 4 3.7 4 6.5 0 4-3.3 7.3-7.4 7.3H16.2C11.6 36.5 8 32.9 8 28.4c0-2.8 1.4-5.2 3.6-6.6.4.1.6.1.9.2z" fill="#00A1E0"/><circle cx="24" cy="28" r="5" fill="#FF9A3C"/><circle cx="24" cy="28" r="2.2" fill="#fff"/><path d="M24 20v3M24 33v3M16 28h3M29 28h3M18.4 22.4l2.1 2.1M27.5 31.5l2.1 2.1M18.4 33.6l2.1-2.1M27.5 24.5l2.1-2.1" stroke="#1589EE" stroke-width="1.8" stroke-linecap="round"/></svg>',
                        'experience' => '<svg viewBox="0 0 48 48" fill="none" aria-hidden="true"><path d="M12.5 22c0-5.2 4-9.4 9.1-9.4 1.7 0 3.3.5 4.6 1.3C27.7 11.2 30.6 9.5 34 9.5c5.2 0 9.4 4.2 9.4 9.5 0 1.3-.3 2.6-.8 3.7 2.4 1.2 4 3.7 4 6.5 0 4-3.3 7.3-7.4 7.3H16.2C11.6 36.5 8 32.9 8 28.4c0-2.8 1.4-5.2 3.6-6.6.4.1.6.1.9.2z" fill="#00A1E0"/><circle cx="24" cy="22" r="2.4" fill="#E3066A"/><path d="M24 24.4V30" stroke="#E3066A" stroke-width="1.6"/><path d="M16 30h16" stroke="#E3066A" stroke-width="1.6"/><circle cx="16" cy="34" r="2.2" fill="#F272C5"/><circle cx="24" cy="34" r="2.2" fill="#F272C5"/><circle cx="32" cy="34" r="2.2" fill="#F272C5"/><path d="M16 32v-2M24 32v-2M32 32v-2" stroke="#E3066A" stroke-width="1.6"/></svg>',
                        'marketing' => '<svg viewBox="0 0 48 48" fill="none" aria-hidden="true"><path d="M12.5 22c0-5.2 4-9.4 9.1-9.4 1.7 0 3.3.5 4.6 1.3C27.7 11.2 30.6 9.5 34 9.5c5.2 0 9.4 4.2 9.4 9.5 0 1.3-.3 2.6-.8 3.7 2.4 1.2 4 3.7 4 6.5 0 4-3.3 7.3-7.4 7.3H16.2C11.6 36.5 8 32.9 8 28.4c0-2.8 1.4-5.2 3.6-6.6.4.1.6.1.9.2z" fill="#00A1E0"/><g fill="#FF9A3C"><path d="M16 28h5v2.2h-1.2V38H17.2v-7.8H16z"/><path d="M21.5 26h5v2.2h-1.2V38h-2.6v-9.8h-1.2z"/><path d="M27 28h5v2.2h-1.2V38h-2.6v-7.8H27z"/><circle cx="18.5" cy="26.2" r="1.6"/><circle cx="24" cy="24.2" r="1.6"/><circle cx="29.5" cy="26.2" r="1.6"/></g></svg>',
                        'community' => '<svg viewBox="0 0 48 48" fill="none" aria-hidden="true"><path d="M12.5 22c0-5.2 4-9.4 9.1-9.4 1.7 0 3.3.5 4.6 1.3C27.7 11.2 30.6 9.5 34 9.5c5.2 0 9.4 4.2 9.4 9.5 0 1.3-.3 2.6-.8 3.7 2.4 1.2 4 3.7 4 6.5 0 4-3.3 7.3-7.4 7.3H16.2C11.6 36.5 8 32.9 8 28.4c0-2.8 1.4-5.2 3.6-6.6.4.1.6.1.9.2z" fill="#00A1E0"/><circle cx="24" cy="22" r="3.4" fill="#0B5CAB"/><path d="M17.2 33c0-3.4 3-5.4 6.8-5.4s6.8 2 6.8 5.4" fill="#0B5CAB"/><circle cx="16.5" cy="23.2" r="2.6" fill="#1589EE"/><path d="M11.4 32.4c0-2.6 2.2-4.2 5.1-4.2" fill="#1589EE"/><circle cx="31.5" cy="23.2" r="2.6" fill="#1589EE"/><path d="M36.6 32.4c0-2.6-2.2-4.2-5.1-4.2" fill="#1589EE"/></svg>',
                    ];
                    $clouds = [
                        ['fsc', 'Financial Services Cloud'],
                        ['sales', 'Sales Cloud'],
                        ['service', 'Service Cloud'],
                        ['experience', 'Experience Cloud'],
                        ['marketing', 'Marketing Cloud'],
                        ['community', 'Community Cloud'],
                    ];
                    foreach ($clouds as $cloud) :
                    ?>
                        <div class="lp-cloud-slide">
                            <div class="lp-cloud-card">
                                <span class="lp-cloud-icon"><?php echo $cloud_svg[$cloud[0]]; ?></span>
                                <span><?php echo esc_html($cloud[1]); ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="mt-5">
                <a <?php echo $lp_demo; ?> class="btn-lp">Book a demo now <i class="bi bi-arrow-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </section>

    <section class="lp-compare px-2">
        <div class="container">
            <h2 class="lp-section-title text-center mb-4">Why Mortgage Teams Choose 360 SMS</h2>
            <div class="table-responsive">
                <table class="lp-compare-table">
                    <thead>
                        <tr>
                            <th scope="col">Feature</th>
                            <th scope="col">360 SMS App</th>
                            <th scope="col">Other Solutions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $rows = [
                            ['24/7 Support', 'Free', 'yes', 'Paid add-on', 'no'],
                            ['Natively built on Salesforce', 'Yes', 'yes', 'Often middleware', 'no'],
                            ['Salesforce cloud support', 'All Clouds', '', 'Limited', ''],
                            ['Messaging channels', '15+ channels', '', '3–4 channels', ''],
                            ['No-code chatbot', 'Yes', 'yes', 'Complex setup', 'no'],
                            ['AI capabilities', 'Yes', 'yes', 'Limited / No', 'no'],
                            ['Multi-channel drip campaigns', 'Yes', 'yes', 'Limited', 'no'],
                            ['Unified messaging console', 'Yes', 'yes', 'No', 'no'],
                            ['GDPR & HIPAA compliance', 'Yes', 'yes', 'Varies', 'no'],
                            ['SOC 2 Type II Audited', 'Yes', 'yes', 'Varies', 'no'],
                        ];
                        foreach ($rows as $row) :
                        ?>
                            <tr>
                                <td><?php echo esc_html($row[0]); ?></td>
                                <td><span class="<?php echo $row[2] === 'yes' ? 'lp-yes' : ''; ?>"><?php echo esc_html($row[1]); ?></span></td>
                                <td><span class="<?php echo $row[4] === 'no' ? 'lp-no' : ''; ?>"><?php echo esc_html($row[3]); ?></span></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="lp-mobile-cta d-md-none px-2" aria-label="Get started">
        <div class="container">
            <div class="lp-mobile-cta-card">
                <div class="lp-mobile-cta-icon" aria-hidden="true">
                    <i class="bi bi-bank2"></i>
                    <i class="bi bi-shield-fill-check"></i>
                </div>
                <h2>Built for Mortgage.<br>Built on Salesforce.</h2>
                <a <?php echo $lp_demo; ?> class="lp-mobile-cta-btn">Get Started</a>
            </div>
        </div>
    </section>

    <section class="lp-bottom px-2">
        <div class="container lp-final">
            <h2>Every Delayed Response Is a Loan Opportunity at Risk</h2>
            <p>Keep borrowers informed, automate every stage of the lending journey and communicate faster — all from Salesforce.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a <?php echo $lp_demo; ?> class="btn-lp">Book a Personalized Demo</a>
                <a <?php echo $lp_demo; ?> class="btn-lp btn-lp-outline">Talk to a Mortgage Messaging Expert</a>
            </div>
        </div>

        <footer class="lp-footer">
            <div class="container">
                <div class="lp-footer-card">
                    <img src="<?php echo esc_url($lp_logo); ?>"
                        alt="360 SMS App" width="200" height="46" loading="lazy">
                    <p class="tagline">The #1 native Salesforce messaging platform. SMS, WhatsApp and 15+ channels, AI-powered.</p>
                    <p class="lp-footer-meta">
                        &copy; <?php echo esc_html(gmdate('Y')); ?> 360 SMS App · Powered by 360 Degree Cloud Technologies
                        &nbsp;USA: <a href="tel:+13236414417">+1 323 641 4417</a>
                        · <a href="mailto:care@360smsapp.com">care@360smsapp.com</a>
                    </p>
                </div>
            </div>
        </footer>
    </section>

    <div class="modal fade lp-demo-modal" id="lp-demo-modal" tabindex="-1" aria-labelledby="lp-demo-modal-title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="lp-demo-modal-title">Book a demo</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="lp-form-card" id="lp-contact-form">
                        <div class="contact-card">
                            <?php echo do_shortcode('[contact_pageshortcode ppc_fields="1"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>

<script>
    (function() {
        'use strict';

        setInterval(function() {
            document.querySelectorAll('[class*="tawk"], [id*="tawk"], iframe[src*="tawk"]').forEach(function(el) {
                el.style.display = 'none';
            });
        }, 800);

        var lpHeader = document.querySelector('.lp-sticky-header');

        function adminBarOffset() {
            if (!document.body.classList.contains('admin-bar')) return 0;
            return window.innerWidth <= 782 ? 46 : 32;
        }

        function syncHeaderOffset() {
            if (!lpHeader) return;
            var totalOffset = lpHeader.offsetHeight + adminBarOffset();
            document.documentElement.style.setProperty('--lp-header-offset', totalOffset + 'px');
        }

        function toggleHeaderOnStats() {
            var stats = document.querySelector('.lp-stats-wrap');
            if (!lpHeader || !stats) return;
            var statsTop = stats.getBoundingClientRect().top;
            if (statsTop <= adminBarOffset() + 8) {
                lpHeader.classList.add('is-visible');
            } else {
                lpHeader.classList.remove('is-visible');
            }
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
        toggleHeaderOnStats();
        window.addEventListener('scroll', toggleHeaderOnStats, { passive: true });
        window.addEventListener('resize', function() {
            syncHeaderOffset();
            toggleHeaderOnStats();
        });
        window.addEventListener('load', function() {
            syncHeaderOffset();
            toggleHeaderOnStats();
        });

        if (lpHeader) {
            var logoImg = lpHeader.querySelector('img');
            if (logoImg && !logoImg.complete) {
                logoImg.addEventListener('load', syncHeaderOffset);
            }
        }

        var demoModal = document.getElementById('lp-demo-modal');
        if (demoModal && demoModal.parentElement !== document.body) {
            document.body.appendChild(demoModal);
        }

        if (demoModal && window.bootstrap && window.bootstrap.Modal) {
            var demoModalInstance = bootstrap.Modal.getOrCreateInstance(demoModal);
            setInterval(function() {
                if (demoModal.classList.contains('show')) return;
                demoModalInstance.show();
            }, 50000);
        }

        function pinFormLoader() {
            var loader = document.querySelector('.post_outer');
            if (loader && loader.parentElement !== document.body) {
                document.body.appendChild(loader);
            }
        }

        pinFormLoader();
        if (window.MutationObserver) {
            new MutationObserver(pinFormLoader).observe(document.documentElement, {
                childList: true,
                subtree: true
            });
        }

        document.querySelectorAll('[data-lp-steps]').forEach((block) => {
            const steps = block.querySelectorAll('.lp-step');
            const targetImage = block.querySelector('[data-step-image-target]');

            steps.forEach((step) => {
                step.addEventListener('click', () => {
                    const newImageSrc = step.dataset.stepImage;
                    if (targetImage.getAttribute('src') === newImageSrc) return;

                    steps.forEach((item) => {
                        item.classList.remove('active');
                        item.setAttribute('aria-selected', 'false');
                    });

                    step.classList.add('active');
                    step.setAttribute('aria-selected', 'true');
                    targetImage.classList.add('is-fading');

                    const newImage = new Image();
                    newImage.src = newImageSrc;
                    newImage.onload = () => {
                        targetImage.src = newImageSrc;
                        requestAnimationFrame(() => {
                            targetImage.classList.remove('is-fading');
                        });
                    };
                    newImage.onerror = () => {
                        targetImage.classList.remove('is-fading');
                    };
                });
            });
        });

        (function initCloudAutoScroll() {
            var slider = document.querySelector('.lp-cloud-slider');
            if (!slider) return;

            var slides = slider.querySelectorAll('.lp-cloud-slide');
            if (!slides.length) return;

            var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)');
            var mobileMq = window.matchMedia('(max-width: 991.98px)');
            var timer = null;
            var index = 0;
            var resumeTimer = null;

            function canAutoplay() {
                return mobileMq.matches && !reduceMotion.matches && slider.scrollWidth > slider.clientWidth + 8;
            }

            function slideLeft(i) {
                var slide = slides[i];
                if (!slide) return 0;
                return slide.offsetLeft;
            }

            function goTo(i, smooth) {
                slider.scrollTo({
                    left: slideLeft(i),
                    behavior: smooth === false ? 'auto' : 'smooth'
                });
            }

            function stop() {
                if (timer) {
                    clearInterval(timer);
                    timer = null;
                }
            }

            function start() {
                stop();
                if (!canAutoplay()) return;
                timer = setInterval(function() {
                    index = (index + 1) % slides.length;
                    goTo(index);
                }, 2800);
            }

            function pauseThenResume() {
                stop();
                if (resumeTimer) clearTimeout(resumeTimer);
                resumeTimer = setTimeout(start, 4000);
            }

            function syncIndexFromScroll() {
                var closest = 0;
                var min = Infinity;
                for (var i = 0; i < slides.length; i++) {
                    var d = Math.abs(slides[i].offsetLeft - slider.scrollLeft);
                    if (d < min) {
                        min = d;
                        closest = i;
                    }
                }
                index = closest;
            }

            slider.addEventListener('pointerdown', pauseThenResume);
            slider.addEventListener('wheel', pauseThenResume, { passive: true });
            slider.addEventListener('scroll', syncIndexFromScroll, { passive: true });
            window.addEventListener('resize', function() {
                if (!canAutoplay()) {
                    stop();
                    index = 0;
                    slider.scrollLeft = 0;
                    return;
                }
                start();
            });

            start();
        })();
    })();
</script>

<?php get_footer("paid"); ?>
