<?php

/**
 * Template Name: About Us New
 * Description: 360 SMS App About Us page — Bootstrap layout matching design spec.
 *              All CSS, HTML, and JS in this single file.
 *
 * @package SMS360
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!function_exists('sms_lp_asset')) {
    function sms_lp_asset($filename)
    {
        $base = trailingslashit(get_stylesheet_directory_uri()) . 'landing-page/assets/';
        return $base . implode('/', array_map('rawurlencode', explode('/', $filename)));
    }
}

get_header("sms");

$au_uploads = '/wp-content/uploads/2026/06/';
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<!--<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">-->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">-->
<!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">-->

<style>
    /*#head,*/
    /*#nav-main,*/
    /*#footer,*/
    /*.site-footer,*/
    /*footer.footer {*/
    /*    display: none !important;*/
    /*}*/
    #three60-hp-root .au-wcu-dots button{
        padding 0 !important
    }
    .whatsapp-content,
    .tawk-min-container {
        display: none !important;
    }

    iframe[src*="tawk"],
    iframe[title*="chat"] {
        display: none !important;
    }

    body:has(.sms-lp) {
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


    /* About Us — scoped under .sms-lp */
    .sms-lp {
        --au-blue: #0057B8;
        --au-ink: #1a1a1a;
        --au-ink2: #444;
        --au-ink3: #777;
        --au-ink4: #aaa;
        --au-bdr: #e2e2e2;
        --au-bg2: #F7F7F5;
        --au-sky-l: #E8F0FB;
        --au-sky-m: #CCE0F7;
        --au-journey-bg: #EEF4FF;
        --lp-header-offset: 64px;
        font-family: 'Plus Jakarta Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
        font-size: 14px;
        line-height: 1.5;
        color: var(--au-ink);
        width: 100%;
        /*padding-top: var(--lp-header-offset, 64px);*/
    }

    .sms-lp .container {
        max-width: 1320px;
        padding-left: 24px;
        padding-right: 24px;
    }

    .sms-lp h1,
    .sms-lp h2,
    .sms-lp h3,
    .sms-lp h4,
    .sms-lp p,
    .sms-lp a,
    .sms-lp button {
        text-transform: none;
    }

    /* Hero */
    .sms-lp .au-hero {
        padding: 72px 0;
        background: #fff;
    }

    .sms-lp .au-hero-we {
        font-size: clamp(32px, 4vw, 46px);
        font-weight: 800;
        color: var(--au-ink);
        letter-spacing: -1.2px;
        line-height: 1.08;
        display: block;
    }

    .sms-lp .au-hero-brand {
        font-size: clamp(32px, 4vw, 46px);
        font-weight: 800;
        color: var(--au-blue);
        letter-spacing: -1.2px;
        line-height: 1.08;
        display: block;
    }

    .sms-lp .au-hero-desc {
        font-size: 15px;
        color: var(--au-ink2);
        line-height: 1.65;
        max-width: 480px;
        margin-bottom: 28px;
    }

    .sms-lp .btn-au-primary {
        padding: 12px 24px;
        font-size: 13px;
        font-weight: 700;
        border-radius: 7px;
        border: none;
        color: #fff;
        background: var(--au-blue);
        transition: opacity 0.15s;
    }

    .sms-lp .btn-au-primary:hover {
        opacity: 0.88;
        color: #fff;
    }

    .sms-lp .btn-au-secondary {
        padding: 12px 18px;
        font-size: 13px;
        font-weight: 500;
        border-radius: 7px;
        border: 1.5px solid var(--au-bdr);
        color: var(--au-ink);
        background: #fff;
        transition: border-color 0.15s;
    }

    .sms-lp .btn-au-secondary:hover {
        border-color: #999;
        color: var(--au-ink);
    }

    .sms-lp .au-hero-collage {
        display: grid;
        grid-template-columns: 1fr 1fr;
        /*grid-template-rows: 210px 220px;*/
        gap: 10px;
    }

    .sms-lp .au-hc {
        border-radius: 18px;
        overflow: hidden;
        /*background: linear-gradient(135deg, var(--au-sky-m), var(--au-sky-l));*/
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .sms-lp .au-hc.wide {
        grid-column: span 2;
    }

    .sms-lp .au-hc img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .sms-lp .au-hc-ph {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        color: var(--au-ink4);
        font-size: 10.5px;
        font-weight: 600;
        letter-spacing: 0.07em;
        text-transform: uppercase;
    }

    /* Stats */
    .sms-lp .au-stats {
        background: #fff;
        padding: 40px 0;
        border-top: 1px solid var(--au-bdr);
        border-bottom: 1px solid var(--au-bdr);
        /*margin-top: 40px;*/
    }

    .sms-lp .au-stat-item {
        text-align: center;
        padding: 0 24px;
        border-right: 1px solid var(--au-bdr);
    }

    .sms-lp .au-stat-item:last-child {
        border-right: none;
    }

    .sms-lp .au-stat-num {
        font-size: 32px;
        font-weight: 800;
        color: var(--au-ink);
        letter-spacing: -1px;
        line-height: 1;
        margin-bottom: 6px;
    }

    .sms-lp .au-stat-num em {
        font-style: normal;
        color: var(--au-blue);
    }

    .sms-lp .au-stat-label {
        font-size: 12px;
        color: var(--au-ink3);
        line-height: 1.5;
    }

    @media (max-width: 767.98px) {
        .sms-lp .au-stat-item {
            border-right: none;
            border-bottom: 1px solid var(--au-bdr);
            padding: 16px 0;
        }

        .sms-lp .au-stat-item:last-child {
            border-bottom: none;
        }
    }

    /* Section helpers */
    .sms-lp .au-section {
        padding: 40px 0;
        background: #ffffff;
    }

    #three60-hp-root .nav {
        /*position: static !important;*/
        box-shadow: none !important;
    }

    .sms-lp .au-section-bg {
        background: #ffffff;
    }

    .sms-lp .au-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        padding: 4px 13px;
        border-radius: 20px;
        margin-bottom: 10px;
        background: var(--au-sky-l);
        color: var(--au-blue);
        border: 1px solid var(--au-sky-m);
    }

    .sms-lp .au-eyebrow-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: currentColor;
    }

    .sms-lp .au-section-title {
        font-size: 26px;
        font-weight: 800;
        color: var(--au-ink);
        letter-spacing: -0.5px;
        line-height: 1.2;
        margin-bottom: 10px;
        margin-top: 10px;
    }

    .sms-lp .au-section-sub {
        font-size: 14px;
        color: var(--au-ink2);
        line-height: 1.6;
        max-width: 560px;
    }

    /* Story tabs */
    .sms-lp .au-story-tabs {
        border-bottom: 2px solid var(--au-bdr);
        margin-bottom: 44px;
        gap: 0;
    }

    .sms-lp .au-story-tabs .nav-link {
        padding: 10px 20px;
        font-size: 13px;
        font-weight: 600;
        color: var(--au-ink3);
        border: none;
        border-bottom: 2px solid transparent;
        margin-bottom: -2px;
        border-radius: 6px 6px 0 0;
        background: none;

    }

    .sms-lp .au-story-tabs .nav-link:hover {
        color: var(--au-blue);
        background: var(--au-sky-l);
    }

    .sms-lp .au-story-tabs .nav-link.active {
        color: var(--au-blue);
        border-bottom-color: var(--au-blue);
        background: var(--au-sky-l);

    }

    .sms-lp .au-journey-panel {
        background: var(--au-journey-bg);
        border-radius: 20px;
        padding: 32px 40px 40px;
    }

    .sms-lp .au-journey-panel h3 {
        font-size: 20px;
        font-weight: 800;
        color: var(--au-ink);
        letter-spacing: -0.4px;
        line-height: 1.2;
        margin-bottom: 10px;
    }

    .sms-lp .au-journey-divider {
        width: 52px;
        height: 3px;
        background: var(--au-blue);
        border-radius: 2px;
        margin-bottom: 24px;
    }

    .sms-lp .au-journey-divider.dark {
        background: var(--au-ink);
    }

    .sms-lp .au-journey-photo-frame {
        width: auto;
        height: auto;
        border-radius: 16px;
        overflow: hidden;
        /*background: linear-gradient(135deg, var(--au-sky-m), var(--au-sky-l));*/
        transform: rotate(-5deg);
        /*box-shadow: 0 12px 36px rgba(0, 87, 184, 0.15);*/
        margin-top: 10px;
    }

    .sms-lp .au-journey-photo-frame img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .sms-lp .au-journey-photo-ph {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        color: var(--au-ink4);
        font-size: 10px;
        font-weight: 600;
        letter-spacing: 0.07em;
        text-transform: uppercase;
    }

    .sms-lp .au-journey-year {
        font-size: clamp(48px, 8vw, 88px);
        font-weight: 800;
        color: var(--au-blue);
        letter-spacing: -3px;
        line-height: 0.85;
        margin-bottom: 12px;
        display: block;
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .sms-lp .au-journey-label {
        font-size: 12px;
        font-weight: 700;
        color: #e05c2e;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        margin-bottom: 8px;
    }

    .sms-lp .au-journey-desc {
        font-size: 13px;
        color: var(--au-ink2);
        line-height: 1.65;
    }

    /* Timeline */
    .sms-lp .au-timeline-bar {
        padding: 20px 0 0;
    }

    .sms-lp .au-timeline-track {
        position: relative;
        display: flex;
        align-items: flex-start;
    }

    .sms-lp .au-timeline-line {
        position: absolute;
        top: 10px;
        left: 0;
        right: 0;
        height: 2px;
        background: var(--au-blue);
        z-index: 0;
    }

    .sms-lp .au-timeline-nodes {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;
        width: 100%;
        position: relative;
        z-index: 1;
        overflow-x: auto;
        gap: 4px;
        padding-bottom: 8px;
    }

    .sms-lp .au-tnode {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 6px;
        cursor: pointer;
        flex-shrink: 0;
        border: none;
        background: none;
        padding: 0;
    }

    .sms-lp .au-tnode-pill {
        width: 36px;
        height: 20px;
        border-radius: 20px;
        border: 2px solid var(--au-blue);
        background: var(--au-journey-bg);
        transition: all 0.2s;
    }

    .sms-lp .au-tnode.active .au-tnode-pill {
        background: var(--au-blue);
        box-shadow: 0 0 0 3px rgba(0, 87, 184, 0.2);
    }

    .sms-lp .au-tnode-year {
        font-size: 11px;
        font-weight: 700;
        color: var(--au-ink);
    }

    .sms-lp .au-tnode.active .au-tnode-year {
        color: var(--au-blue);
    }

    /* Life at Cloudians */
    .sms-lp .au-growing-head {
        text-align: center;
        max-width: 700px;
        margin: 0 auto 28px;
    }

    .sms-lp .au-growing-head h2 {
        font-size: 26px;
        font-weight: 800;
        color: var(--au-ink);
        letter-spacing: -0.5px;
        margin-bottom: 10px;
        line-height:normal;
    }

    .sms-lp .au-growing-head p {
        font-size: 13px;
        color: var(--au-ink2);
        line-height: 1.6;
    }

    .sms-lp .au-life-copy h3 {
        font-size: 22px;
        font-weight: 800;
        color: var(--au-ink);
        letter-spacing: -0.4px;
        margin-bottom: 12px;
        line-height: normal !important;
    }

    .sms-lp .au-life-copy p {
        font-size: 13px;
        color: var(--au-ink2);
        line-height: 1.65;
        margin-bottom: 12px;
    }

    .sms-lp .au-life-photos {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 240px 200px;
        gap: 12px;
    }

    .sms-lp .au-lp {
        border-radius: 18px;
        overflow: hidden;
        /*background: linear-gradient(135deg, var(--au-sky-m), var(--au-sky-l));*/
        display: flex;
        /*align-items: center;*/
        justify-content: center;
    }

    .sms-lp .au-lp.tall {
        grid-row: span 2;
    }

    .sms-lp .au-lp img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .sms-lp .au-lp-ph {
        font-size: 10.5px;
        font-weight: 600;
        color: var(--au-ink4);
        text-transform: uppercase;
        letter-spacing: 0.07em;
        text-align: center;
        padding: 12px;
    }

    /* Why Choose Us slider */
    .sms-lp .au-wcu-section {
        background: var(--au-bg2);
        padding: 40px 0;
    }

    .sms-lp .au-wcu-head {
        text-align: center;
        margin-bottom: 28px;
    }

    .sms-lp .au-wcu-head h2 {
        font-size: 26px;
        font-weight: 800;
        color: var(--au-ink);
        letter-spacing: -0.5px;
        margin-bottom: 10px;
    }

    .sms-lp .au-wcu-divider {
        width: 48px;
        height: 3px;
        background: var(--au-blue);
        border-radius: 2px;
        margin: 0 auto;
    }

    .sms-lp .au-wcu-track-outer {
        overflow: hidden;
        border-radius: 12px;
    }

    .sms-lp .au-wcu-track {
        display: flex;
        gap: 14px;
        transition: transform 0.4s ease;
        will-change: transform;
    }

    .sms-lp .au-wcu-card {
        flex: 0 0 calc(25% - 11px);
        background: #fff;
        border: 1px solid var(--au-bdr);
        border-radius: 12px;
        overflow: hidden;
        transition: transform 0.2s, box-shadow 0.15s, border-color 0.15s;
    }

    .sms-lp .au-wcu-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 28px rgba(0, 87, 184, 0.1);
        border-color: var(--au-sky-m);
    }

    .sms-lp .au-wcu-card-bg {
        height: 200px;
        position: relative;
        overflow: hidden;
        background-size: cover;
        background-position: center;
    }

    .sms-lp .au-wcu-card-bg.has-img::after {
        content: '';
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(255, 255, 255, 0.12) 1px, transparent 1px);
        background-size: 16px 16px;
    }

    .sms-lp .au-wcu-card-body {
        padding: 18px 18px 20px;
    }

    .sms-lp .au-wcu-card-icon {
        font-size: 20px;
        margin-bottom: 10px;
        line-height: 1;
    }

    .sms-lp .au-wcu-card-title {
        font-size: 13.5px;
        font-weight: 800;
        color: var(--au-ink);
        margin-bottom: 6px;
    }

    .sms-lp .au-wcu-card-desc {
        font-size: 12px;
        color: var(--au-ink3);
        line-height: 1.6;
    }

    .sms-lp .au-wcu-bg-1 {
        background: linear-gradient(135deg, #E8F0FB 0%, #CCE0F7 100%);
    }

    .sms-lp .au-wcu-bg-2 {
        background: linear-gradient(135deg, #dbeafe 0%, #93c5fd 100%);
    }

    .sms-lp .au-wcu-bg-3 {
        background: linear-gradient(135deg, #e0f2fe 0%, #7dd3fc 100%);
    }

    .sms-lp .au-wcu-bg-4 {
        background: linear-gradient(135deg, #eff6ff 0%, #bfdbfe 100%);
    }

    .sms-lp .au-wcu-bg-5 {
        background: linear-gradient(135deg, #EEF5FF 0%, #CCE0F7 100%);
    }

    .sms-lp .au-wcu-bg-6 {
        background: linear-gradient(135deg, #dbeafe 0%, #60a5fa 100%);
    }

    .sms-lp .au-wcu-bg-7 {
        background: linear-gradient(135deg, #e0f2fe 0%, #38bdf8 100%);
    }

    .sms-lp .au-wcu-bg-8 {
        background: linear-gradient(135deg, #eff6ff 0%, #93c5fd 100%);
    }

    .sms-lp .au-wcu-bg-9 {
        background: linear-gradient(135deg, #E8F0FB 0%, #7dd3fc 100%);
    }

    .sms-lp .au-wcu-bg-10 {
        background: linear-gradient(135deg, #dbeafe 0%, #CCE0F7 100%);
    }

    .sms-lp .au-wcu-dots {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 6px;
        margin-top: 20px;
    }

    .sms-lp .au-wcu-dot {
        width: 7px;
        height: 7px;
        border-radius: 50%;
        background: var(--au-sky-m);
        cursor: pointer;
        transition: all 0.2s;
        border: none;
        padding: 0;
    }

    .sms-lp .au-wcu-dot.active {
        background: var(--au-blue);
        width: 20px;
        border-radius: 10px;
    }

    @media (max-width: 1199.98px) {
        .sms-lp .au-wcu-card {
            flex: 0 0 calc(33.333% - 10px);
        }
    }

    @media (max-width: 767.98px) {
        .sms-lp .au-wcu-card {
            flex: 0 0 calc(50% - 7px);
        }

        .sms-lp .au-journey-panel {
            padding: 24px 20px;
        }

        .sms-lp .au-life-photos {
            grid-template-rows: 180px 160px;
        }
    }

    @media (max-width: 575.98px) {
        .sms-lp .au-wcu-card {
            flex: 0 0 100%;
        }
    }

    /* Team */
    .sms-lp .au-team-card {
        text-align: center;
        transition: transform 0.2s;
    }

    .sms-lp .au-team-card:hover {
        transform: translateY(-5px);
    }

    .sms-lp .au-team-photo {
        width: 100%;
        aspect-ratio: 1;
        border-radius: 22px;
        overflow: hidden;
        margin-bottom: 14px;
        background: linear-gradient(160deg, var(--au-sky-m) 0%, #c0d8f8 100%);
        position: relative;
    }

    .sms-lp .au-team-photo-inner {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: flex-end;
        justify-content: center;
    }

    .sms-lp .au-team-photo-inner img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: top center;
        display: block;
    }

    .sms-lp .au-team-sil {
        width: 68%;
        margin: 0 auto;
        padding-top: 16%;
    }

    .sms-lp .au-team-bar {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: linear-gradient(90deg, var(--au-blue), var(--au-blue));
    }

    .sms-lp .au-team-name {
        font-size: 13px;
        font-weight: 800;
        color: var(--au-ink);
        margin-bottom: 3px;
    }

    .sms-lp .au-team-role {
        font-size: 11px;
        color: var(--au-blue);
        font-weight: 600;
        margin-bottom: 2px;
    }

    .sms-lp .au-team-loc {
        font-size: 11px;
        color: var(--au-ink3);
    }

    /* Offices */
    .sms-lp .au-office-card {
        background: #fff;
        border: 1.5px solid var(--au-bdr);
        border-radius: 16px;
        padding: 22px 20px;
        height: 100%;
        transition: all 0.25s;
    }

    .sms-lp .au-office-card:hover {
        box-shadow: 0 6px 26px rgba(0, 87, 184, 0.1);
        border-color: var(--au-sky-m);
        transform: translateY(-2px);
    }

    .sms-lp .au-office-flag {
        margin-bottom: 12px;
    }

    .sms-lp .au-office-flag img {
        border-radius: 4px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.15);
    }

    .sms-lp .au-office-city {
        font-size: 13px;
        font-weight: 800;
        color: var(--au-ink);
        margin-bottom: 6px;
    }

    .sms-lp .au-office-addr {
        font-size: 11px;
        color: var(--au-ink3);
        line-height: 1.55;
        margin: 0;
    }

    /* Join CTA */
    .sms-lp .au-join {
        background: linear-gradient(135deg, var(--au-blue) 0%, var(--au-blue) 100%);
        padding: 40px 0;
        position: relative;
        overflow: hidden;
    }

    .sms-lp .au-join::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: radial-gradient(rgba(255, 255, 255, 0.06) 1px, transparent 1px);
        background-size: 24px 24px;
    }

    .sms-lp .au-join-blob {
        position: absolute;
        right: -80px;
        bottom: -80px;
        width: 420px;
        height: 420px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(255, 255, 255, 0.12) 0%, transparent 65%);
        pointer-events: none;
    }

    .sms-lp .au-join-in {
        max-width: 640px;
        margin: 0 auto;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    .sms-lp .au-join-title {
        font-size: 30px;
        font-weight: 800;
        color: #fff;
        letter-spacing: -0.6px;
        line-height: 1.1;
        margin-bottom: 12px;
    }

    .sms-lp .au-join-sub {
        font-size: 13px;
        color: rgba(255, 255, 255, 0.65);
        line-height: 1.7;
        margin-bottom: 28px;
    }

    .sms-lp .btn-au-join-primary {
        padding: 12px 24px;
        font-size: 13px;
        font-weight: 700;
        border-radius: 7px;
        border: none;
        color: var(--au-blue);
        background: #fff;
        transition: opacity 0.15s;
    }

    .sms-lp .btn-au-join-primary:hover {
        opacity: 0.88;
        color: var(--au-blue);
    }

    .sms-lp .btn-au-join-secondary {
        padding: 11px 20px;
        font-size: 13px;
        font-weight: 500;
        border-radius: 7px;
        border: 1.5px solid rgba(255, 255, 255, 0.4);
        color: #fff;
        background: transparent;
        transition: border-color 0.15s;
    }

    .sms-lp .btn-au-join-secondary:hover {
        border-color: rgba(255, 255, 255, 0.8);
        color: #fff;
    }

    .sms-lp .visually-hidden {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
    }
</style>

<main class="sms-lp">

    <!-- ═══ HERO ═══ -->
    <section class="au-hero">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h1 class="mb-3">
                        <span class="au-hero-we">We're</span>
                        <span class="au-hero-brand">CLOUDIANS</span>
                    </h1>
                    <p class="au-hero-desc">We built 360 SMS with one clear goal: to make customer communication inside Salesforce seamless, scalable, and intelligent, helping businesses engage customers across multiple channels without ever leaving Salesforce. As the flagship product of 360 Degree Cloud, 360 SMS is built on more than a decade of Salesforce expertise.</p>
                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-au-primary">Visit the newsroom</button>
                        <button type="button" class="btn btn-au-secondary">Join the team</button>
                    
                    </div>
                </div>
                <div class="col-lg-6 mt-4">
                    <div class="au-hero-collage">
                        <div class="au-hc">
                            <img src="<?php echo esc_url($au_uploads . 'div.webp'); ?>" alt="Team event" loading="lazy">
                        </div>
                        <div class="au-hc">
                            <img src="<?php echo esc_url($au_uploads . 'div-1.webp'); ?>" alt="Office collaboration" loading="lazy">
                        </div>
                        <div class="au-hc wide">
                            <img src="<?php echo esc_url($au_uploads . 'div.wide_.webp'); ?>" alt="Cloudians team photo" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ STATS ═══ -->
    <section class="au-stats" aria-label="Company statistics">
        <div class="container">
            <div class="row">
                <?php
                $au_stats = [
                    ['60,000<em>+</em>', 'Active Users Worldwide'],
                    ['1,200<em>+</em>', '5-Star AppExchange Reviews'],
                    ['15<em>+</em>', 'Messaging Channels'],
                    ['100<em>+</em>', 'Countries served'],
                ];
                foreach ($au_stats as $i => $stat) :
                    $col_class = $i < 3 ? 'col-6 col-md-3' : 'col-6 col-md-3';
                ?>
                    <div class="<?php echo esc_attr($col_class); ?>">
                        <div class="au-stat-item">
                            <div class="au-stat-num"><?php echo wp_kses_post($stat[0]); ?></div>
                            <div class="au-stat-label"><?php echo esc_html($stat[1]); ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ═══ OUR STORY ═══ -->
    <section class="au-section">
        <div class="container">
            <div class="text-center mb-4">
                <div class="au-eyebrow"><span class="au-eyebrow-dot"></span> Our Journey</div>
                <h2 class="au-section-title">Our story</h2>
            </div>

            <ul class="nav au-story-tabs justify-content-center" id="storyTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="story-tab-1" data-bs-toggle="tab" data-bs-target="#story-pane-1" type="button" role="tab" aria-controls="story-pane-1" aria-selected="true">How It Started</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="story-tab-2" data-bs-toggle="tab" data-bs-target="#story-pane-2" type="button" role="tab" aria-controls="story-pane-2" aria-selected="false">Road to Growth</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="story-tab-3" data-bs-toggle="tab" data-bs-target="#story-pane-3" type="button" role="tab" aria-controls="story-pane-3" aria-selected="false">Where We're Headed</button>
                </li>
            </ul>

            <div class="tab-content" id="storyTabContent">
                <!-- Tab 1 -->
                <div class="tab-pane fade show active" id="story-pane-1" role="tabpanel" aria-labelledby="story-tab-1" tabindex="0">
                    <div class="au-journey-panel">
                        <h3>It started with a communication gap Salesforce users shouldn't have to manage.</h3>
                        <div class="au-journey-divider"></div>
                        <div class="row align-items-center g-4 g-lg-5">
                            <div class="col-md-6 col-lg-5">
                                <div class="au-journey-photo-frame">
                                    <img src="<?php echo esc_url($au_uploads . 'div.journey-photo-frame.webp'); ?>" alt="The Beginning · 2012" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-7">
                                <span class="au-journey-year">2012</span>
                                <div class="au-journey-label">The Beginning</div>
                                <p class="au-journey-desc mb-0">The team at 360 Degree Cloud saw businesses juggling customer conversations across multiple tools, creating inefficiencies and disconnected experiences. To solve it, they built a native messaging solution inside Salesforce for a customer. Demand grew quickly, and within a short time, that solution evolved into 360 SMS—a trusted AppExchange product helping businesses communicate, engage, and convert customers without leaving Salesforce.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab 2 — Timeline -->
                <div class="tab-pane fade" id="story-pane-2" role="tabpanel" aria-labelledby="story-tab-2" tabindex="0">
                    <div class="au-journey-panel">
                        <h3>The 360 Degree Cloud Journey: A Timeline of Growth</h3>
                        <div class="au-journey-divider dark"></div>
                        <div class="row align-items-center g-4 g-lg-5 mb-3">
                            <div class="col-md-6 col-lg-5">
                                <div class="au-journey-photo-frame">
                                    <img id="j-photo-img" src="<?php echo esc_url($au_uploads . 'div.journey-photo-frame.webp'); ?>" alt="The Beginning · 2012" loading="lazy">
                                    <span id="j-photo-label" class="visually-hidden">The Beginning · 2012</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-7">
                                <span class="au-journey-year" id="j-year">2012</span>
                                <div class="au-journey-label" id="j-label">The Beginning</div>
                                <p class="au-journey-desc mb-0" id="j-desc">Embarked on our Salesforce journey with a passionate team of five, united by a vision to help businesses get more value from their CRM investments.</p>
                            </div>
                        </div>
                        <div class="au-timeline-bar">
                            <div class="au-timeline-track">
                                <div class="au-timeline-line"></div>
                                <div class="au-timeline-nodes" id="timelineNodes" role="tablist" aria-label="Company timeline"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tab 3 -->
                <div class="tab-pane fade" id="story-pane-3" role="tabpanel" aria-labelledby="story-tab-3" tabindex="0">
                    <div class="au-journey-panel">
                        <h3>AI-first, building for the next decade</h3>
                        <div class="au-journey-divider"></div>
                        <div class="row align-items-center g-4 g-lg-5">
                            <div class="col-md-6 col-lg-5">
                                <div class="au-journey-photo-frame">
                                    <img src="<?php echo esc_url($au_uploads . 'div.journey-photo-frame-8.png'); ?>" alt="Where We're Headed · 2026" loading="lazy">
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-7">
                                <span class="au-journey-year">2026</span>
                                <div class="au-journey-label">Where We're Headed</div>
                                <p class="au-journey-desc mb-0">The future of customer engagement is intelligent, automated, and deeply connected. As we continue expanding our AI-powered capabilities and multi-channel communication solutions, our vision remains clear: help businesses deliver personalized conversations at scale, directly within the platforms they already trust. More than 60,000 users rely on us today—and we're just getting started.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ GROWING TOGETHER / LIFE AT CLOUDIANS ═══ -->
    <section class="au-section au-section-bg">
        <div class="container">
            <div class="au-growing-head">
                <h2>Growing together as Cloudians</h2>
                <p>We show up for each other at 360. We embody our values every day — in every interaction with our colleagues and customers.</p>
            </div>
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="au-life-copy">
                        <h3>Life at 360 Degree Cloud - A Culture of Growth and Innovation</h3>
                        <p>At 360 Degree Cloud, life is about more than work. We foster a culture that values work-life balance, collaboration, fresh ideas, and continuous learning. From Salesforce and AI innovation to team celebrations and shared successes, we create an environment where people can thrive and grow.</p>
                        <button type="button" class="btn btn-au-primary d-inline-flex align-items-center gap-2">
                            Join the team <i class="bi bi-arrow-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
                <div class="col-lg-6 mt-4">
                    <div class="au-life-photos">
                        <div class="au-lp tall">
                            <img src="<?php echo esc_url($au_uploads . 'div.tall_.webp'); ?>" alt="Team event" loading="lazy">
                        </div>
                        <div class="au-lp">
                            <img src="<?php echo esc_url($au_uploads . 'div-2.webp'); ?>" alt="Office life" loading="lazy">
                        </div>
                        <div class="au-lp">
                            <img src="<?php echo esc_url($au_uploads . 'div-3.webp'); ?>" alt="Company retreat" loading="lazy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ WHY CHOOSE US ═══ -->
    <section class="au-wcu-section">
        <div class="container">
            <div class="au-wcu-head">
                <h2>Why Choose Us?</h2>
                <div class="au-wcu-divider"></div>
            </div>
            <div class="au-wcu-track-outer">
                <div class="au-wcu-track" id="wcuTrack">
                    <?php
                    $wcu_cards = [
                        ['au-wcu-bg-1', 'Flexibility', 'Hybrid, remote, or onsite — we prioritise outcomes over hours. Work the way you work best.'],
                        ['au-wcu-bg-2', 'Growth', 'Skill and initiative drive progress here — with certification support and internal mobility to match.'],
                        ['au-wcu-bg-3', 'Work–Life Balance', 'Do meaningful work in a culture that energises you. Your ideas and passion are always welcome.'],
                        ['au-wcu-bg-4', 'Mentorship', 'From onboarding to leadership coaching — our managers mentor, not micromanage.'],
                        ['au-wcu-bg-5', 'Innovation', 'Access the best AI tools and ship real ideas. We invest in your productivity because great teams build great products.'],
                        ['au-wcu-bg-6', 'Global Collaboration', 'Work with teammates across 4 continents. Build a global career perspective without leaving your role.'],
                        ['au-wcu-bg-7', 'Ownership', 'Every Cloudian owns their outcomes. We trust you to take initiative, make decisions, and lead from where you are.'],
                        ['au-wcu-bg-8', 'Wellbeing', 'Comprehensive health cover, wellness allowances, and a team that genuinely cares about your personal wellbeing.'],
                        ['au-wcu-bg-9', 'Impact', '60,000+ users depend on what we build. Every line of code, every support reply, every idea — it matters.'],
                        ['au-wcu-bg-10', 'Celebrate Wins', 'Annual retreats, team events, and end-of-quarter celebrations. We work hard and celebrate even harder.'],
                    ];
                    $wcu_images = ['after.webp','after-1.webp','after-2.webp','after-3.webp','after.png', 'after-1.png', 'after-2.png', 'after-3.png', 'after-4.png', 'after-5.png'];
                    foreach ($wcu_cards as $i => $card) :
                        $bg_class = isset($wcu_images[$i]) ? 'has-img' : esc_attr($card[0]);
                        $bg_style = isset($wcu_images[$i])
                            ? ' style="background-image:url(' . esc_url($au_uploads . $wcu_images[$i]) . ')"'
                            : '';
                    ?>
                        <div class="au-wcu-card">
                            <div class="au-wcu-card-bg <?php echo $bg_class; ?>" <?php echo $bg_style; ?>></div>
                            <div class="au-wcu-card-body">
                                <div class="au-wcu-card-title"><?php echo esc_html($card[1]); ?></div>
                                <div class="au-wcu-card-desc"><?php echo esc_html($card[2]); ?></div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="au-wcu-dots" id="wcuDots" aria-label="Slider pagination"></div>
        </div>
    </section>

    <!-- ═══ LEADERSHIP ═══ -->
    <?php /*<section class="au-section">
        <div class="container">
            <div class="text-center mb-5">
                <div class="au-eyebrow"><span class="au-eyebrow-dot"></span> Our Leaders</div>
                <h2 class="au-section-title">Leading with a shared vision</h2>
                <p class="au-section-sub mx-auto mb-0">The people who set the direction, ship alongside the team, and stay accountable to every one of our 60,000+ users.</p>
            </div>
            <div class="row g-4">
                <?php
                $leaders_row1 = [
                    ['Deepak Khatter', 'Chief Executive Officer', 'Co-Founder · Faridabad', 'div.tc-photo-inner.webp'],
                    ['Bhavesh Thakor', 'Chief Technology Officer', 'Co-Founder · Noida', 'div.tc-photo-inner.webp'],
                    ['Priya Sharma', 'Chief Product Officer', 'Gurgaon', 'div.tc-photo-inner.webp'],
                    ['James Whitfield', 'VP Sales, International', 'London, UK', 'div.tc-photo-inner.webp'],
                ];
                foreach ($leaders_row1 as $leader) :
                ?>
                    <div class="col-6 col-lg-3">
                        <div class="au-team-card">
                            <div class="au-team-photo">
                                <div class="au-team-photo-inner">
                                    <img src="<?php echo esc_url($au_uploads . $leader[3]); ?>" alt="<?php echo esc_attr($leader[0]); ?>" loading="lazy">
                                </div>
                                <div class="au-team-bar"></div>
                            </div>
                            <div class="au-team-name"><?php echo esc_html($leader[0]); ?></div>
                            <div class="au-team-role"><?php echo esc_html($leader[1]); ?></div>
                            <div class="au-team-loc"><?php echo esc_html($leader[2]); ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="row g-4 justify-content-center mt-2">
                <?php
                $leaders_row2 = [
                    ['Anjali Mehta', 'Head of Customer Success', 'Pune', 'div.tc-photo-inner.webp'],
                    ['Marcus Chen', 'Head of AI & Platform', 'Singapore', 'div.tc-photo-inner.webp'],
                    ['Rachel O\'Brien', 'Chief Marketing Officer', 'Sydney, AU', 'div.tc-photo-inner.webp'],
                ];
                foreach ($leaders_row2 as $leader) :
                ?>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="au-team-card">
                            <div class="au-team-photo">
                                <div class="au-team-photo-inner">
                                    <img src="<?php echo esc_url($au_uploads . $leader[3]); ?>" alt="<?php echo esc_attr($leader[0]); ?>" loading="lazy">
                                </div>
                                <div class="au-team-bar"></div>
                            </div>
                            <div class="au-team-name"><?php echo esc_html($leader[0]); ?></div>
                            <div class="au-team-role"><?php echo esc_html($leader[1]); ?></div>
                            <div class="au-team-loc"><?php echo esc_html($leader[2]); ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>*/?>

    <!-- ═══ OFFICES ═══ -->
    <section class="au-section au-section-bg">
        <div class="container">
            <div class="text-center mb-5">
                <div class="au-eyebrow"><span class="au-eyebrow-dot"></span> Our Locations</div>
                <h2 class="au-section-title">Connecting Customers Across the Globe</h2>
                <p class="au-section-sub mx-auto mb-0">Delivering local expertise with a truly global reach</p>
            </div>
            <div class="row g-3 g-md-4">
                <?php
                $offices = [
                    ['us', 'United States', '1968 S. Coast Hwy 1412, Laguna Beach, CA 92651'],
                    ['gb', 'United Kingdom', 'Plaza Suite 8, KD Tower, Cotterells, HP1 1FW'],
                    ['au', 'Australia', 'Nationwide coverage — connect with your nearest representative.'],
                    ['in', 'Faridabad', 'SCO – 12, Second Floor, Above Canara Bank, Sector 16, Haryana – 121002'],
                    ['in', 'Noida', 'B29, Sector 1, Noida, Uttar Pradesh – 201301'],
                    ['in', 'Pune', 'Office no-202, Alluring Sky, Terraza Rd, Aundh, Pune, Maharashtra – 411007'],
                    ['in', 'Meerut', '177/1, 3rd Floor PP Plaza, Mangal Pandey Nagar, CCS University Road – 250004'],
                    ['in', 'Jaipur', '2nd Floor, 10, Shivraj Niketan Colony, Vaishali Nagar, Rajasthan – 302021'],
                    ['in', 'Bangalore', 'Doddanakundi Industrial Area, Graphite India Main Rd, Whitefield – 560048'],
                    ['in', 'Gurgaon', 'Orchid Business Park, 1st Floor, Sector 48, Gurugram, Haryana – 122004'],
                    ['in', 'Hyderabad', 'The Hive, Corporate Capital, Financial District, Nanakramguda – 500032'],
                    ['in', 'Indore', 'First Floor, Red Square, Vijay Nagar, Indore, Madhya Pradesh – 452010'],
                ];
                foreach ($offices as $office) :
                ?>
                    <div class="col-sm-6 col-lg-3">
                        <div class="au-office-card">
                            <div class="au-office-flag">
                                <img src="https://flagcdn.com/40x30/<?php echo esc_attr($office[0]); ?>.png" width="40" height="30" alt="" loading="lazy">
                            </div>
                            <div class="au-office-city"><?php echo esc_html($office[1]); ?></div>
                            <p class="au-office-addr"><?php echo esc_html($office[2]); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- ═══ JOIN CTA ═══ -->
    <section class="au-join">
        <div class="au-join-blob" aria-hidden="true"></div>
        <div class="container">
            <div class="au-join-in">
                <h2 class="au-join-title">Join the team</h2>
                <p class="au-join-sub">We're always looking for builders, problem-solvers, and people who genuinely love what they do. Come help shape the future of business messaging.</p>
                <div class="d-flex align-items-center justify-content-center gap-3 flex-wrap">
                    <button type="button" class="btn btn-au-join-primary">See open positions</button>
                    <button type="button" class="btn btn-au-join-secondary">Learn about our culture</button>
                </div>
            </div>
        </div>
    </section>

    <!-- ═══ FOOTER ═══ -->


</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    (function() {
        'use strict';

        setInterval(function() {
            document.querySelectorAll('[class*="tawk"], [id*="tawk"], iframe[src*="tawk"]').forEach(function(el) {
                el.style.display = 'none';
            });
        }, 500);

        var lpHeader = document.querySelector('.lp-sticky-header');
        var lpMain = document.querySelector('.sms-lp');

        function syncHeaderOffset() {
            if (!lpHeader || !lpMain) return;
            var topOffset = 0;
            if (document.body.classList.contains('admin-bar')) {
                topOffset = window.innerWidth <= 782 ? 46 : 32;
            }
            var totalOffset = lpHeader.offsetHeight + topOffset;
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

        var mobileNav = document.getElementById('auMobileNav');
        if (mobileNav) {
            mobileNav.addEventListener('shown.bs.collapse', syncHeaderOffset);
            mobileNav.addEventListener('hidden.bs.collapse', syncHeaderOffset);
        }

        /* Timeline data */
        var auUploads = '<?php echo esc_js($au_uploads); ?>';
        var journeyData = [{
                year: '2012',
                label: 'The Beginning',
                photoSrc: auUploads + 'div.journey-photo-frame.webp',
                photo: 'The Beginning · 2012',
                desc: 'Embarked on our Salesforce journey with a passionate team of five, united by a vision to help businesses get more value from their CRM investments.'
            },
            {
                year: '2013',
                label: '20+ Certified Experts',
                photoSrc: auUploads + 'div.journey-photo-frame.png',
                photo: 'Team · 2013',
                desc: 'Expanded into a team of 20+ certified Salesforce experts, delivering consulting, implementation, and support services to a growing customer base.'
            },
            {
                year: '2014',
                label: '100+ Consultants',
                photoSrc: auUploads + 'div.journey-photo-frame-4.png',
                photo: 'Team · 2014',
                desc: 'Crossed the milestone of 100+ Salesforce consultants, strengthening our expertise across multiple clouds, industries, and business functions.'
            },
            {
                year: '2015',
                label: 'Noida Office',
                photoSrc: auUploads + 'div.journey-photo-frame-9.png',
                photo: 'Noida office · 2015',
                desc: 'Expanded our footprint with a new office in Noida, laying the groundwork for the next phase of growth and innovation.'
            },
            {
                year: '2016',
                label: '360 SMS on AppExchange',
                photoSrc: auUploads + 'div.journey-photo-frame-2.png',
                photo: 'AppExchange · 2016',
                desc: 'Launched 360 SMS on AppExchange, transforming customer communication within Salesforce and marking our entry into the Salesforce product ecosystem.'
            },
            {
                year: '2017',
                label: 'Salesforce ISV Partner',
                photoSrc: auUploads + 'div.journey-photo-frame-6.png',
                photo: 'Partnership · 2017',
                desc: 'Became a Salesforce ISV Partner, expanding our focus from consulting services to building innovative products for Salesforce users worldwide.'
            },
            {
                year: '2018–19',
                label: 'Silver Consulting Partner',
                photoSrc: auUploads + 'div.journey-photo-frame-11.png',
                photo: 'Team · 2018–19',
                desc: 'Achieved Salesforce Silver Consulting Partner status while growing to 250+ certified experts, delivering success across industries and regions.'
            },
            {
                year: '2021',
                label: 'Summit Partner',
                photoSrc: auUploads + 'div.journey-photo-frame-1.png',
                photo: 'Salesforce · 2021',
                desc: 'Reached Salesforce Summit Partner status, reflecting our commitment to excellence, customer success, and continued ecosystem leadership.'
            },
            {
                year: '2022',
                label: '600+ Member Team',
                photoSrc: auUploads + 'div.journey-photo-frame-5.png',
                photo: 'Team · 2022',
                desc: 'Grew into a 600+ member team, earned PDO Partner status, and achieved Great Place to Work® certification, reinforcing our people-first culture.'
            },
            {
                year: '2023',
                label: 'APAC ISV Partner of the Year',
                photoSrc: auUploads + 'div.journey-photo-frame-10.png',
                photo: 'Award · 2023',
                desc: 'Won the APAC ISV Partner of the Year award, recognizing our innovation, customer impact, and growing presence in the Salesforce ecosystem.'
            },
            {
                year: '2024',
                label: 'Innovation & Expansion',
                photoSrc: auUploads + 'div.journey-photo-frame-3.png',
                photo: 'Dreamforce · 2024',
                desc: 'Launched 360 Textolic, won the Dreamforce Demo Jam, joined the Inc. 5000 list, and expanded operations to Jaipur and Bengaluru.'
            },
            {
                year: '2025',
                label: 'AI Innovation',
                photoSrc: auUploads + 'div.journey-photo-frame-7.png',
                photo: 'AI team · 2025',
                desc: 'Accelerated our AI innovation journey by building 50+ AI agents in-house. Also earned recognition among the top Salesforce companies worldwide.'
            }
        ];

        var timelineNodes = document.getElementById('timelineNodes');
        if (timelineNodes) {
            journeyData.forEach(function(d, idx) {
                var btn = document.createElement('button');
                btn.type = 'button';
                btn.className = 'au-tnode' + (idx === 0 ? ' active' : '');
                btn.setAttribute('data-idx', idx);
                btn.innerHTML = '<div class="au-tnode-pill"></div><div class="au-tnode-year">' + d.year + '</div>';
                btn.addEventListener('click', function() {
                    setYear(idx, btn);
                });
                timelineNodes.appendChild(btn);
            });
        }

        function setYear(idx, node) {
            var d = journeyData[idx];
            var yearEl = document.getElementById('j-year');
            var labelEl = document.getElementById('j-label');
            var descEl = document.getElementById('j-desc');
            var photoEl = document.getElementById('j-photo-label');
            if (!yearEl) return;

            yearEl.textContent = d.year;
            labelEl.textContent = d.label;
            descEl.textContent = d.desc;
            if (photoEl) photoEl.textContent = d.photo;
            var photoImg = document.getElementById('j-photo-img');
            if (photoImg) {
                photoImg.alt = d.photo;
                if (d.photoSrc) photoImg.src = d.photoSrc;
            }

            document.querySelectorAll('.au-tnode').forEach(function(n) {
                n.classList.remove('active');
            });
            node.classList.add('active');

            yearEl.style.opacity = '0';
            yearEl.style.transform = 'translateY(10px)';
            setTimeout(function() {
                yearEl.style.transition = 'all .3s ease';
                yearEl.style.opacity = '1';
                yearEl.style.transform = 'translateY(0)';
            }, 30);
        }

        /* Why Choose Us slider */
        var wcuIndex = 0;
        var wcuVisible = 4;
        var wcuTotal = 10;

        function getWcuVisible() {
            if (window.innerWidth < 576) return 1;
            if (window.innerWidth < 768) return 2;
            if (window.innerWidth < 1200) return 3;
            return 4;
        }

        function wcuInit() {
            var dots = document.getElementById('wcuDots');
            if (!dots) return;
            wcuVisible = getWcuVisible();
            dots.innerHTML = '';
            var pages = Math.ceil(wcuTotal / wcuVisible);
            for (var i = 0; i < pages; i++) {
                var d = document.createElement('button');
                d.type = 'button';
                d.className = 'au-wcu-dot' + (i === 0 ? ' active' : '');
                d.setAttribute('data-i', i);
                d.setAttribute('aria-label', 'Go to slide group ' + (i + 1));
                d.addEventListener('click', function() {
                    wcuGoTo(parseInt(this.getAttribute('data-i'), 10) * getWcuVisible());
                });
                dots.appendChild(d);
            }
            wcuRender();
        }

        function wcuGoTo(idx) {
            var max = wcuTotal - getWcuVisible();
            wcuIndex = Math.max(0, Math.min(idx, max));
            wcuRender();
        }

        function wcuRender() {
            var track = document.getElementById('wcuTrack');
            var card = track && track.querySelector('.au-wcu-card');
            if (!track || !card) return;
            wcuVisible = getWcuVisible();
            var gap = 14;
            var cardW = card.offsetWidth + gap;
            track.style.transform = 'translateX(-' + (wcuIndex * cardW) + 'px)';
            var activePage = Math.floor(wcuIndex / wcuVisible);
            document.querySelectorAll('.au-wcu-dot').forEach(function(d, i) {
                d.classList.toggle('active', i === activePage);
            });
        }

        window.addEventListener('load', wcuInit);
        window.addEventListener('resize', function() {
            wcuInit();
        });

        /* Auto-advance WCU slider */
        var wcuAuto = setInterval(function() {
            var max = wcuTotal - getWcuVisible();
            wcuIndex = wcuIndex >= max ? 0 : wcuIndex + 1;
            wcuRender();
        }, 5000);

        var wcuSection = document.querySelector('.au-wcu-section');
        if (wcuSection) {
            wcuSection.addEventListener('mouseenter', function() {
                clearInterval(wcuAuto);
            });
            wcuSection.addEventListener('mouseleave', function() {
                wcuAuto = setInterval(function() {
                    var max = wcuTotal - getWcuVisible();
                    wcuIndex = wcuIndex >= max ? 0 : wcuIndex + 1;
                    wcuRender();
                }, 5000);
            });
        }
    })();
</script>

<?php get_footer("sms"); ?>