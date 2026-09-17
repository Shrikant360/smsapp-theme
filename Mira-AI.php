<?php

/**
 * Template Name: Mira AI-Recruitment Agent
 * Description:   Standalone Salesforce-branded template. Blue theme (#0057B8).
 */
if (!defined('ABSPATH')) {
    exit;
}

//require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');


?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/new-header.css">
<?php
get_header('sms');
?>
<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Instrument+Serif:ital@0;1&display=swap" rel="stylesheet">

<style>
    /* ─── CSS VARIABLES (unchanged from original) ─── */
    :root {
        --blue: #0057B8;
        --blue-l: #E8F0FB;
        --blue-m: #CCE0F7;
        --blue-dk: #003A80;
        --grn: #16A34A;
        --grn-l: #DCFCE7;
        --grn-dk: #15803D;
        --amber: #D97706;
        --amber-l: #FEF3C7;
        --ink: #111827;
        --ink2: #374151;
        --ink3: #6B7280;
        --ink4: #9CA3AF;
        --bg: #FFFFFF;
        --bg2: #F9FAFB;
        --bg3: #F3F4F6;
        --bdr: #E5E7EB;
        --r6: 6px;
        --r8: 8px;
        --r10: 10px;
        --r12: 12px;
        --r16: 16px;
        --r24: 24px;
        --sh: 0 1px 3px rgba(0, 0, 0, .06), 0 4px 16px rgba(0, 0, 0, .06);
        --sh-lg: 0 8px 32px rgba(0, 0, 0, .1), 0 2px 8px rgba(0, 0, 0, .06);
        --sh-xl: 0 20px 60px rgba(0, 0, 0, .14), 0 4px 16px rgba(0, 0, 0, .08);
        --font-head: 'Plus Jakarta Sans', sans-serif;
        --font-body: 'Plus Jakarta Sans', sans-serif;
        --serif: 'Instrument Serif', serif;
    }

    /* ─── BASE ─── */
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        font-family: var(--font-body);
        color: var(--ink);
        background: var(--bg);
        font-size: 15px;
        line-height: 1.6;
        -webkit-font-smoothing: antialiased;
    }

    /* ─── ANIMATIONS ─── */
    @keyframes pulse {

        0%,
        100% {
            opacity: 1;
            transform: scale(1)
        }

        50% {
            opacity: .4;
            transform: scale(.8)
        }
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(16px)
        }

        to {
            opacity: 1;
            transform: translateY(0)
        }
    }

    .anim {
        opacity: 0;
        animation: fadeUp .5s ease forwards;
    }

    .anim-1 {
        animation-delay: .05s
    }

    .anim-2 {
        animation-delay: .1s
    }

    .anim-3 {
        animation-delay: .15s
    }

    .anim-4 {
        animation-delay: .2s
    }

    .anim-5 {
        animation-delay: .25s
    }

    .anim-6 {
        animation-delay: .3s
    }

    /* ─── TYPOGRAPHY HELPERS ─── */
    .eyebrow {
        font-size: 10px;
        font-weight: 700;
        letter-spacing: .12em;
        text-transform: uppercase;
        color: var(--blue);
        margin-bottom: 10px;
        display: block;
    }

    .eyebrow.light {
        color: rgba(147, 197, 253, 1);
    }

    .sec-h {
        font-family: var(--font-head);
        font-size: 30px;
        font-weight: 800;
        color: var(--ink);
        letter-spacing: -.6px;
        line-height: 1.15;
        margin-bottom: 12px;
    }

    .sec-h.light {
        color: #fff;
    }

    .sec-h.xl {
        font-size: 36px;
    }

    .sec-sub {
        font-size: 15px;
        color: var(--ink2);
        line-height: 1.7;
    }

    .sec-sub.light {
        color: rgba(255, 255, 255, .65);
    }

    /* ─── SECTION BACKGROUNDS ─── */
    .sec {
        padding: 80px 0;
    }

    .sec-alt {
        background: var(--bg2);
    }

    .sec-dark {
        background: #0057B8;
        color: #fff;
    }

    hr.div {
        border: none;
        border-top: 1px solid var(--bdr);
        margin: 0;
    }

    /* ─── BUTTONS ─── */
    .btn-ghost {
        padding: 7px 16px;
        font-size: 13px;
        border: 1px solid var(--bdr);
        border-radius: var(--r8);
        cursor: pointer;
        background: transparent;
        color: var(--ink);
        font-weight: 600;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        transition: all .12s;
        white-space: nowrap;
    }

    .btn-ghost:hover {
        border-color: var(--blue);
        color: var(--blue);
    }

    .btn-pri {
        padding: 9px 20px;
        font-size: 13px;
        font-weight: 700;
        border-radius: var(--r8);
        cursor: pointer;
        border: none;
        color: #fff;
        background: var(--blue);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: background .12s;
        white-space: nowrap;
    }

    .btn-pri:hover {
        background: var(--blue-dk);
        color: #fff;
    }

    .btn-pri-lg {
        padding: 14px 28px;
        font-size: 15px;
        font-weight: 700;
        border-radius: var(--r10);
        cursor: pointer;
        border: none;
        color: #fff;
        background: var(--blue);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all .15s;
    }

    .btn-pri-lg:hover {
        background: var(--blue-dk);
        transform: translateY(-1px);
        box-shadow: 0 8px 24px rgba(0, 87, 184, .3);
        color: #fff;
    }

    .btn-sec-lg {
        padding: 13px 24px;
        font-size: 15px;
        font-weight: 600;
        border-radius: var(--r10);
        cursor: pointer;
        border: 2px solid var(--bdr);
        color: var(--ink);
        background: var(--bg);
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 8px;
        transition: all .15s;
    }

    .btn-sec-lg:hover {
        border-color: var(--blue);
        color: var(--blue);
    }

    /* ─── HERO ─── */
    .hero {
        padding: 72px 0 64px;
        background: linear-gradient(160deg, #EEF5FF 0%, #F9FAFB 55%, #fff 100%);
        position: relative;
        overflow: hidden;
    }

    .hero::before {
        content: '';
        position: absolute;
        right: -200px;
        top: -200px;
        width: 700px;
        height: 700px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(0, 87, 184, .06) 0%, transparent 65%);
        pointer-events: none;
    }

    .hero-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 7px;
        background: var(--blue-l);
        border: 1px solid var(--blue-m);
        border-radius: 20px;
        padding: 5px 14px;
        font-size: 11px;
        font-weight: 700;
        letter-spacing: .06em;
        text-transform: uppercase;
        color: var(--blue);
        margin-bottom: 20px;
    }

    .hero-eyebrow-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--blue);
        animation: pulse 2s infinite;
        flex-shrink: 0;
    }

    .hero h1 {
        font-family: var(--font-head);
        font-size: 42px;
        font-weight: 800;
        color: var(--ink);
        line-height: 1.08;
        letter-spacing: -1.5px;
        margin-bottom: 18px;
    }

    .hero h1 .serif {
        font-family: var(--serif);
        font-style: italic;
        color: var(--blue);
        font-weight: 400;
    }

    .hero-sub {
        font-size: 16px;
        color: var(--ink2);
        line-height: 1.75;
        margin-bottom: 28px;
    }

    .hero-sub strong {
        color: var(--ink);
        font-weight: 600;
    }

    .hero-btns {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        margin-bottom: 28px;
    }

    .hero-trust {
        display: flex;
        flex-wrap: wrap;
        gap: 14px;
    }

    .ht {
        display: flex;
        align-items: center;
        gap: 6px;
        font-size: 12px;
        color: var(--ink3);
        font-weight: 500;
    }

    .ht-ck {
        color: var(--grn);
        font-size: 13px;
        font-weight: 700;
    }

    /* ─── DEMO CARD (hero mockup) ─── */
    .demo-card {
        background: #fff;
        border-radius: var(--r16);
        border: 1px solid var(--bdr);
        box-shadow: var(--sh-xl);
        overflow: hidden;
        position: relative;
    }

    .dc-bar {
        background: #F3F4F6;
        border-bottom: 1px solid var(--bdr);
        padding: 10px 16px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .dc-dots {
        display: flex;
        gap: 5px;
    }

    .dc-dots span {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        display: block;
    }

    .dc-dots span:nth-child(1) {
        background: #FF5F57
    }

    .dc-dots span:nth-child(2) {
        background: #FEBC2E
    }

    .dc-dots span:nth-child(3) {
        background: #28C840
    }

    .dc-title {
        flex: 1;
        text-align: center;
        font-size: 10px;
        font-weight: 700;
        color: #9CA3AF;
        letter-spacing: .06em;
        text-transform: uppercase;
    }

    .dc-live {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 10px;
        font-weight: 700;
    }

    .call-timeline {
        padding: 16px;
    }

    .call-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 14px;
        padding-bottom: 10px;
        border-bottom: 1px solid var(--bdr);
    }

    .call-contact {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .call-avatar {
        width: 32px;
        height: 32px;
        border-radius: 50%;
        background: var(--blue-l);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        font-weight: 700;
        color: var(--blue);
        flex-shrink: 0;
    }

    .call-name {
        font-size: 12px;
        font-weight: 700;
        color: var(--ink);
    }

    .call-sub {
        font-size: 10px;
        color: var(--ink3);
    }

    .talk-row {
        display: flex;
        gap: 8px;
        margin-bottom: 10px;
        align-items: flex-start;
    }

    .talk-av {
        width: 22px;
        height: 22px;
        border-radius: 50%;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 8px;
        font-weight: 700;
        color: #fff;
    }

    .talk-bubble {
        flex: 1;
        padding: 8px 11px;
        border-radius: 10px;
        font-size: 11px;
        line-height: 1.55;
    }

    .talk-agent .talk-bubble {
        background: var(--blue-l);
        color: var(--ink);
        border-radius: 10px 10px 10px 2px;
    }

    .talk-lead .talk-bubble {
        background: var(--bg3);
        color: var(--ink);
        border-radius: 10px 10px 2px 10px;
    }

    .talk-label {
        font-size: 9px;
        font-weight: 700;
        margin-bottom: 3px;
    }

    .talk-agent .talk-label {
        color: var(--blue);
    }

    .talk-lead .talk-label {
        color: var(--ink3);
    }

    .dc-footer {
        background: #F9FAFB;
        border-top: 1px solid var(--bdr);
        padding: 8px 14px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .sf-pill {
        font-size: 9px;
        font-weight: 700;
        color: #fff;
        background: var(--blue);
        padding: 2px 8px;
        border-radius: 3px;
        white-space: nowrap;
    }

    .dc-foot-txt {
        font-size: 10px;
        color: var(--ink4);
        flex: 1;
    }

    .dc-sync {
        font-size: 10px;
        font-weight: 600;
        color: var(--grn);
        display: flex;
        align-items: center;
        gap: 4px;
    }

    .sync-dot {
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: var(--grn);
        animation: pulse 1.2s infinite;
    }

    .f-stat {
        position: absolute;
        background: #fff;
        border: 1px solid var(--bdr);
        border-radius: var(--r10);
        padding: 10px 14px;
        box-shadow: var(--sh-lg);
    }

    .f-stat-n {
        font-size: 20px;
        font-weight: 800;
        color: var(--blue);
        letter-spacing: -1px;
        line-height: 1;
    }

    .f-stat-l {
        font-size: 10px;
        color: var(--ink3);
        margin-top: 2px;
    }

    .f1 {
        bottom: -16px;
        left: -20px;
    }

    .f2 {
        top: 20px;
        right: -20px;
    }

    /* ─── PROOF STRIP ─── */
    .proof-strip {
        background: #fff;
        border-top: 1px solid var(--bdr);
        border-bottom: 1px solid var(--bdr);
        padding: 16px 0;
    }

    .pi {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 20px;
        border-right: 1px solid var(--bdr);
    }

    .pi:last-child {
        border-right: none;
    }

    .pi-n {
        font-size: 22px;
        font-weight: 800;
        color: var(--ink);
        letter-spacing: -1px;
        line-height: 1;
    }

    .pi-l {
        font-size: 11px;
        color: var(--ink3);
        line-height: 1.4;
    }

    .pi-badge {
        font-size: 10px;
        font-weight: 700;
        color: #0057B8;
        background: #E8F0FB;
        padding: 2px 7px;
        border-radius: 3px;
        white-space: nowrap;
    }

    /* ─── COMPATIBILITY STRIP ─── */
    .compat-strip {
        background: var(--bg2);
        border-top: 1px solid var(--bdr);
        border-bottom: 1px solid var(--bdr);
        padding: 18px 0;
    }

    .compat-label {
        font-size: 12px;
        font-weight: 700;
        color: var(--ink3);
        letter-spacing: .04em;
        text-transform: uppercase;
        white-space: nowrap;
    }

    .compat-pill {
        display: flex;
        align-items: center;
        gap: 8px;
        background: #fff;
        border: 1px solid var(--bdr);
        border-radius: var(--r8);
        padding: 9px 16px;
    }

    .compat-pill.active {
        background: var(--blue-l);
        border-color: var(--blue-m);
    }

    .compat-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        flex-shrink: 0;
    }

    /* ─── HOW IT WORKS ─── */
    .flow-wrap {
        position: relative;
        margin-top: 48px;
    }

    .flow-connector {
        position: absolute;
        top: 36px;
        left: calc(12.5% + 36px);
        right: calc(12.5% + 36px);
        height: 2px;
        background: linear-gradient(90deg, var(--blue-m), var(--blue));
        z-index: 0;
    }

    .flow-step {
        position: relative;
        z-index: 1;
        padding: 0 12px;
        text-align: center;
    }

    .fs-num {
        width: 72px;
        height: 72px;
        border-radius: 50%;
        background: #fff;
        border: 2px solid var(--blue);
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 16px;
        box-shadow: 0 0 0 8px var(--blue-l);
        transition: all .2s;
    }

    .flow-step:hover .fs-num {
        background: var(--blue);
    }

    .flow-step:hover .fs-num svg {
        stroke: #fff;
    }

    .fs-num svg {
        width: 28px;
        height: 28px;
        fill: none;
        stroke: var(--blue);
        stroke-width: 1.8;
        transition: stroke .2s;
    }

    .fs-agent {
        font-size: 10px;
        font-weight: 700;
        letter-spacing: .06em;
        text-transform: uppercase;
        color: var(--blue);
        margin-bottom: 5px;
    }

    .fs-title {
        font-size: 14px;
        font-weight: 700;
        color: var(--ink);
        margin-bottom: 5px;
        line-height: 1.3;
    }

    .fs-desc {
        font-size: 12px;
        color: var(--ink3);
        line-height: 1.55;
    }

    .fs-badge {
        display: inline-block;
        font-size: 10px;
        font-weight: 700;
        color: #0057B8;
        background: #E8F0FB;
        padding: 2px 8px;
        border-radius: 20px;
        margin-top: 6px;
    }

    /* ─── FEATURES ─── */
    .feat-item {
        display: flex;
        gap: 14px;
        align-items: flex-start;
        padding: 16px;
        border-radius: var(--r10);
        border: 1px solid transparent;
        transition: all .15s;
        cursor: default;
    }

    .feat-item:hover {
        border-color: var(--blue-m);
        background: var(--blue-l);
    }

    .feat-icon {
        width: 40px;
        height: 40px;
        border-radius: var(--r8);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        background-color: #0057B8 !important;
        color: #ffffff !important;
    }

    .feat-icon i {
        font-size: 20px;
        color: #ffffff !important;
    }

    .feat-body .ft {
        font-size: 14px;
        font-weight: 700;
        color: var(--ink);
        margin-bottom: 4px;
    }

    .feat-body .fd {
        font-size: 13px;
        color: var(--ink3);
        line-height: 1.6;
    }

    .feat-visual {
        background: #00346F;
        border: 1px solid var(--bdr);
        border-radius: var(--r16);
        overflow: hidden;
        position: relative;
    }

    /* ─── METRICS ─── */
    .metric-card {
        background: rgba(255, 255, 255, .06);
        border: 1px solid rgba(255, 255, 255, .1);
        border-radius: var(--r12);
        padding: 24px 20px;
        text-align: center;
        transition: all .2s;
        height: 100%;
    }

    .metric-card:hover {
        background: rgba(255, 255, 255, .1);
        transform: translateY(-2px);
    }

    .mc-num {
        font-size: 36px;
        font-weight: 800;
        color: #fff;
        letter-spacing: -2px;
        line-height: 1;
        margin-bottom: 8px;
    }

    .mc-label {
        font-size: 12px;
        color: rgba(255, 255, 255, .55);
        line-height: 1.5;
    }

    .mc-source {
        display: inline-block;
        font-size: 10px;
        font-weight: 700;
        color: rgba(147, 197, 253, .9);
        background: rgba(0, 87, 184, .3);
        padding: 2px 8px;
        border-radius: 20px;
        margin-top: 8px;
    }

    /* ─── USE CASES ─── */
    .uc-card {
        background: #fff;
        border: 1px solid var(--bdr);
        border-radius: var(--r12);
        padding: 24px;
        transition: all .15s;
        height: 100%;
    }

    .uc-card:hover {
        border-color: var(--blue-m);
        box-shadow: var(--sh);
        transform: translateY(-2px);
    }

    .uc-icon {
        font-size: 28px;
        margin-bottom: 12px;
    }

    .uc-icon i {
        color: #0057b8;
        font-size: 28px;
    }

    .uc-industry {
        font-size: 10px;
        font-weight: 700;
        letter-spacing: .07em;
        text-transform: uppercase;
        color: var(--blue);
        margin-bottom: 6px;
    }

    .uc-title {
        font-size: 15px;
        font-weight: 700;
        color: var(--ink);
        margin-bottom: 6px;
        line-height: 1.3;
    }

    .uc-desc {
        font-size: 13px;
        color: var(--ink3);
        line-height: 1.6;
        margin-bottom: 12px;
    }

    .uc-result {
        font-size: 12px;
        font-weight: 600;
        color: #0057B8;
        background: #E8F0FB;
        padding: 4px 10px;
        border-radius: 4px;
        display: inline-block;
    }

    /* ─── FAQ ─── */
    .faq-list {
        display: flex;
        flex-direction: column;
        border: 1px solid var(--bdr);
        border-radius: var(--r12);
        overflow: hidden;
        margin-top: 40px;
    }

    .faq-item {
        border-bottom: 1px solid var(--bdr);
    }

    .faq-item:last-child {
        border-bottom: none;
    }

    .faq-q {
        padding: 18px 20px;
        font-size: 14px;
        font-weight: 700;
        color: var(--ink);
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #fff;
        transition: background .1s;
        user-select: none;
    }

    .faq-q:hover {
        background: var(--bg2);
    }

    .faq-q.open {
        color: var(--blue);
    }

    .faq-toggle {
        font-size: 18px;
        color: var(--ink3);
        transition: transform .2s;
        flex-shrink: 0;
        margin-left: 12px;
    }

    .faq-q.open .faq-toggle {
        transform: rotate(45deg);
        color: var(--blue);
    }

    .faq-a {
        display: none;
        padding: 0 20px 16px;
        font-size: 13px;
        color: var(--ink2);
        line-height: 1.7;
        background: #fff;
    }

    .faq-a.open {
        display: block;
    }

    /* ─── RELATED AGENTS ─── */
    .ra-card {
        background: #fff;
        border: 1px solid var(--bdr);
        border-radius: var(--r12);
        padding: 20px;
        text-decoration: none;
        transition: all .15s;
        display: block;
        height: 100%;
    }

    .ra-card:hover {
        border-color: var(--blue-m);
        box-shadow: var(--sh);
        transform: translateY(-1px);
    }

    .ra-icon {
        font-size: 24px;
        margin-bottom: 12px;
    }

    .ra-icon i {
        color: #0057b8;
        font-size: 24px;
    }

    .ra-tag {
        font-size: 10px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: .06em;
        color: var(--blue);
        margin-bottom: 4px;
    }

    .ra-name {
        margin: 6px 0;
        font-size: 15px;
        font-weight: 700;
        color: var(--ink);
        line-height: 1.3;
    }

    .ra-desc {
        font-size: 13px;
        color: var(--ink3);
        line-height: 1.55;
    }

    .ra-link {
        font-size: 12px;
        color: var(--blue);
        font-weight: 600;
        margin-top: 8px;
        display: block;
    }

    /* ─── MOBILE-SPECIFIC OVERRIDES ─── */
    @media (max-width: 575px) {
        .hero {
            padding: 48px 0 40px;
        }

        .hero h1 {
            font-size: 28px;
            letter-spacing: -0.8px;
        }

        .hero-sub {
            font-size: 14px;
        }

        .hero-eyebrow {
            font-size: 9.5px;
            padding: 4px 10px;
        }

        .btn-pri-lg,
        .btn-sec-lg {
            width: 100%;
            justify-content: center;
            padding: 12px 20px;
            font-size: 14px;
        }

        .sec {
            padding: 52px 0;
        }

        .sec-h.xl {
            font-size: 24px;
        }

        .sec-h {
            font-size: 22px;
        }

        .f-stat {
            display: none;
        }

        .flow-connector {
            display: none;
        }

        .pi {
            border-right: none !important;
            border-bottom: 1px solid var(--bdr);
            padding: 12px 0;
        }

        .pi:last-child {
            border-bottom: none;
        }

        .mc-num {
            font-size: 28px;
        }

        .feat-item {
            padding: 12px;
        }
    }

    @media (max-width: 767px) {
        .f-stat {
            display: none;
        }

        .flow-connector {
            display: none;
        }

        .hero-btns .btn-pri-lg,
        .hero-btns .btn-sec-lg {
            width: 100%;
            justify-content: center;
        }
    }

    @media (min-width: 768px) and (max-width: 991px) {
        .hero h1 {
            font-size: 34px;
        }

        .sec-h.xl {
            font-size: 30px;
        }
    }
</style>

<!-- ════════════════════════ HERO ════════════════════════ -->
<section class="hero">
    <div class="container-xl px-3">
        <div class="row align-items-center g-5">
            <!-- Left -->
            <div class="col-12 col-lg-6 text-start">
                <div class="hero-eyebrow anim anim-1">
                    <div class="hero-eyebrow-dot"></div>
                    MIRA AI · Recruiting Agent · End-to-End Hiring Automation · Salesforce Native
                </div>
                <h1 class="anim anim-2">Automate End-to-End Hiring with <span class="serif">MIRA AI </span> &nbsp;Recruiting Agent</h1>
                <p class="hero-sub anim anim-3">From sourcing to hiring, transform every step with an AI agent for recruiting that <strong>understands roles, skills, and candidate relevance better than any keyword search.</strong> Stop wasting hours on screening and interview prep.</p>
                <div class="hero-btns anim anim-4">
                    <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" target="_blank" class="btn-pri-lg">Book a free demo</a>
                    <a href="#how-it-works" class="btn-sec-lg">See how it works</a>
                </div>
                <div class="hero-trust anim anim-5">
                    <div class="ht"><span class="ht-ck">✓</span> 5★ AgentExchange · 1,200+ reviews</div>
                    <div class="ht"><span class="ht-ck">✓</span> Salesforce Summit Partner</div>
                    <div class="ht"><span class="ht-ck">✓</span> 35% faster hiring</div>
                    <div class="ht"><span class="ht-ck">✓</span> Scans, interviews &amp; evaluates for you</div>
                </div>
            </div>
            <!-- Right: demo card -->
            <div class="col-12 col-lg-6 anim anim-3 d-flex align-items-center justify-content-center" style="background:none; box-shadow:none; border:none; padding:0;">
                <img 
                    src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/06/Mira-1.webp" 
                    alt="recruitment agent" 
                    class="img-fluid"
                    style="width:100%; height:auto; object-fit:contain; display:block; background:transparent; box-shadow:none;"
                />
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════ PROOF STRIP ════════════════════════ -->
<div class="proof-strip">
    <div class="container-xl px-3">
        <div class="row g-0">
            <div class="col-6 col-md pi">
                <div>
                    <div class="pi-n">1,200+</div>
                    <div class="pi-l">AgentExchange reviews</div>
                </div>
                <span class="pi-badge">5★ rated</span>
            </div>
            <div class="col-6 col-md pi">
                <div>
                    <div class="pi-n">35%</div>
                    <div class="pi-l">Faster hiring</div>
                </div>
                <span class="pi-badge">Measured</span>
            </div>
            <div class="col-6 col-md pi">
                <div>
                    <div class="pi-n">49%</div>
                    <div class="pi-l">Time saved on prep</div>
                </div>
            </div>
            <div class="col-6 col-md pi">
                <div>
                    <div class="pi-n">33%</div>
                    <div class="pi-l">Higher quality-of-hire</div>
                </div>
            </div>
            <div class="col-6 col-md pi">
                <div>
                    <div class="pi-n">27%</div>
                    <div class="pi-l">More business growth</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ════════════════════════ COMPATIBILITY STRIP ════════════════════════ -->
<div class="compat-strip">
    <div class="container-xl px-3">
        <div class="d-flex align-items-center gap-3 flex-wrap justify-content-center">
            <div class="compat-label">Integrates with your hiring stack:</div>
            <div class="d-flex gap-2 flex-wrap justify-content-center">
                <div class="compat-pill">
                    <div class="compat-dot" style="background:var(--grn)"></div>
                    <div>
                        <div style="font-size:13px;font-weight:700;color:var(--ink)">Salesforce native</div>
                        <div style="font-size:11px;color:var(--ink3)">Profiles, scores &amp; transcripts auto-logged</div>
                    </div>
                </div>
                <div class="compat-pill">
                    <div class="compat-dot" style="background:var(--grn)"></div>
                    <div>
                        <div style="font-size:13px;font-weight:700;color:var(--ink)">Other CRMs &amp; ATS</div>
                        <div style="font-size:11px;color:var(--ink3)">Seamless integration across platforms</div>
                    </div>
                </div>
                <div class="compat-pill active">
                    <div class="compat-dot" style="background:var(--blue)"></div>
                    <div>
                        <div style="font-size:13px;font-weight:700;color:var(--blue-dk)">IVR-powered outreach</div>
                        <div style="font-size:11px;color:var(--blue)">AI calls, screens &amp; reschedules automatically</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ════════════════════════ HOW IT WORKS ════════════════════════ -->
<section class="sec" id="how-it-works">
    <div class="container-xl px-3">
        <div class="eyebrow">How it works</div>
        <h2 class="sec-h xl">How MiraAI Agent for Recruiting Works</h2>
        <p class="sec-sub">AI agent for hiring that scans, interviews, and evaluates candidates for you - from job input to comprehensive candidate profiles, fully automated.</p>

        <div class="flow-wrap">
            <div class="flow-connector d-none d-md-block"></div>
            <div class="row g-4 g-md-0">
                <div class="col-6 col-md-3 flow-step">
                    <div class="fs-num"><svg viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                            <line x1="16" y1="17" x2="8" y2="17" />
                            <polyline points="10 9 9 9 8 9" />
                        </svg></div>
                    <div class="fs-agent">Job Input</div>
                    <div class="fs-title">Job Details Input</div>
                    <div class="fs-desc">Recruiters enter role information - job profile, required skills, number of candidates, and job description</div>
                    <span class="fs-badge">Minutes to set up</span>
                </div>
                <div class="col-6 col-md-3 flow-step">
                    <div class="fs-num"><svg viewBox="0 0 24 24">
                            <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
                        </svg></div>
                    <div class="fs-agent">Question Generation</div>
                    <div class="fs-title">AI-Generated Interview Questions</div>
                    <div class="fs-desc">MiraAI creates customized, role-specific interview questions tailored to the job requirements and skills - 49% faster than manual prep</div>
                    <span class="fs-badge">Role-specific · Instant</span>
                </div>
                <div class="col-6 col-md-3 flow-step">
                    <div class="fs-num"><svg viewBox="0 0 24 24">
                            <path d="M22 16.92v3a2 2 0 01-2.18 2A19.8 19.8 0 0112 18.9" />
                            <path d="M1 1l22 22" />
                            <path d="M16.72 11.06A10.94 10.94 0 0119 12.55" />
                        </svg></div>
                    <div class="fs-agent">Automated Outreach</div>
                    <div class="fs-title">Automated Candidate Outreach</div>
                    <div class="fs-desc">AI-powered calling reaches candidates, conducts initial screenings, handles rescheduling, and answers FAQs automatically - zero manual coordination</div>
                    <span class="fs-badge">Zero manual effort</span>
                </div>
                <div class="col-6 col-md-3 flow-step">
                    <div class="fs-num"><svg viewBox="0 0 24 24">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                            <circle cx="9" cy="7" r="4" />
                            <path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75" />
                        </svg></div>
                    <div class="fs-agent">Evaluation + Profiles</div>
                    <div class="fs-title">Candidate Profiles &amp; AI Shortlists</div>
                    <div class="fs-desc">All interactions are scored - AI evaluates communication, intent, and skill alignment - and HR receives comprehensive profiles with transcripts and recordings</div>
                    <span class="fs-badge">33% higher quality-of-hire</span>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="div">

<!-- ════════════════════════ FEATURES ════════════════════════ -->
<!-- ════════════════════════ FEATURES ════════════════════════ -->
<section class="sec sec-alt">
    <div class="container-xl px-3">
        <div class="eyebrow">Features</div>
        <h2 class="sec-h xl">Next-Level Recruitment Automation with AI Agent</h2>
        <p class="sec-sub">See what AI-enhanced recruiting can really do for your team - from semantic matching and structured screening to automated interviews and shortlists.</p>

        <!-- Feature 1 -->
        <div class="row align-items-center g-5 mt-4">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <h3 style="font-size:22px;font-weight:800;color:var(--ink);letter-spacing:-.4px;margin-bottom:20px">Smarter sourcing and structured screening</h3>
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-file-earmark-text"></i></div>
                    <div class="feat-body">
                        <div class="ft">Custom Screening Flows and Structured Hiring</div>
                        <div class="fd">Get tailored screening flows and a structured hiring process designed around recruiter-defined role requirements and inputs.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-search"></i></div>
                    <div class="feat-body">
                        <div class="ft">Semantic Matching for Best-Fit Talent</div>
                        <div class="fd">MiraAI analyzes role context, skills, and intent - not just keywords - to surface the most relevant candidates instantly.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-chat-left-text"></i></div>
                    <div class="feat-body">
                        <div class="ft">Role-Specific Interview Question Generator</div>
                        <div class="fd">Automatically generate role-specific interview questions for consistent, relevant candidate evaluations - eliminating hours of manual preparation.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-plugin"></i></div>
                    <div class="feat-body">
                        <div class="ft">Seamless Integration Across CRM and Solutions</div>
                        <div class="fd">Whether you are using Salesforce, a different CRM, or another solution, MIRA AI integrates seamlessly into your existing workflows.</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 order-1 order-lg-2">
                <img
                    src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/06/Mira-2.webp"
                    alt="MIRA AI Semantic Matching and Question Generator"
                    class="img-fluid"
                    style="width:100%; height:auto; object-fit:contain; display:block;"
                />
            </div>
        </div>

        <!-- Feature 2 -->
        <div class="row align-items-center g-5 mt-5">
            <div class="col-12 col-lg-6 order-1 order-lg-2">
                <h3 style="font-size:22px;font-weight:800;color:var(--ink);letter-spacing:-.4px;margin-bottom:20px">Automated Interviews, AI Evaluation & Profiles</h3>
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-telephone"></i></div>
                    <div class="feat-body">
                        <div class="ft">Automated Candidate Screening</div>
                        <div class="fd">Automatically reach out to shortlisted candidates via IVR, conduct first-round interviews, and capture responses - removing hours of manual coordination.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-bar-chart-line"></i></div>
                    <div class="feat-body">
                        <div class="ft">AI-Powered Evaluation &amp; Shortlisting</div>
                        <div class="fd">AI analyzes responses to score interactions, intent, and skills, and provides recruiters with best-fit shortlists and detailed performance insights.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-people"></i></div>
                    <div class="feat-body">
                        <div class="ft">Built for Every Hiring Team</div>
                        <div class="fd">No matter your industry - HR, Healthcare, Finance, Education, or Customer Service - MiraAI works seamlessly across various sectors.</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <img
                    src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/06/Mira-3.webp"
                    alt="MIRA AI Automated Interviews and Candidate Profiles"
                    class="img-fluid"
                    style="width:100%; height:auto; object-fit:contain; display:block;"
                />
            </div>
        </div>

    </div>
</section>

<hr class="div">

<!-- ════════════════════════ METRICS / RESULTS ════════════════════════ -->
<section class="sec sec-dark" id="results">
    <div class="container-xl px-3">
        <div class="eyebrow light">Results</div>
        <h2 class="sec-h xl light">AI-Powered Recruitment Reshaping Talent Acquisition</h2>
        <p class="sec-sub light">Not sure how much impact AI can bring to your hiring process? Here's what MIRA AI consistently delivers for recruiting teams across industries.</p>

        <div class="row g-4 mt-4">
            <div class="col-6 col-lg-3">
                <div class="metric-card">
                    <div class="mc-num">35%</div>
                    <div class="mc-label">Faster hiring by reducing candidate screening time with automated first-round interviews</div>
                    <div class="mc-source">Measured</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="metric-card">
                    <div class="mc-num">49%</div>
                    <div class="mc-label">Time saved on interview prep with auto-generated role-specific questions per job description</div>
                    <div class="mc-source">MIRA AI Benchmark</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="metric-card">
                    <div class="mc-num">33%</div>
                    <div class="mc-label">Higher quality-of-hire with AI-driven candidate insights, scoring, and semantic matching</div>
                    <div class="mc-source">Customer data</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="metric-card">
                    <div class="mc-num">27%</div>
                    <div class="mc-label">More business growth by hiring top talent aligned to strategic goals - not just keywords</div>
                    <div class="mc-source">360 SMS App</div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-12 col-lg-9">
                <div style="padding:24px;background:rgba(255,255,255,.06);border:1px solid rgba(255,255,255,.1);border-radius:var(--r12)">
                    <div style="font-size:16px;color:rgba(255,255,255,.7);line-height:1.75;font-style:italic;margin-bottom:10px">"For cost savings, we have estimated that we have saved over $100,000 in operational costs by using the 360 SMS platform. It's so innovative that we've already seen a number of productive features and enhancements over a short period."</div>
                    <div style="font-size:12px;font-weight:700;color:rgba(255,255,255,.35)">Verified review · Salesforce AgentExchange · 5★</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════ USE CASES / INDUSTRIES ════════════════════════ -->
<section class="sec">
    <div class="container-xl px-3">
        <div class="eyebrow">Industries</div>
        <h2 class="sec-h xl">Built for Every Hiring Team</h2>
        <p class="sec-sub">No matter your industry - HR, Healthcare, Finance, Education, or Customer Service - MiraAI works seamlessly across every sector where quality hiring matters.</p>

        <div class="row g-4 mt-4">
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-hospital"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>healthcare-wellness/" style="color:inherit;text-decoration:none;">Healthcare</a></div>
                    <div class="uc-title">Faster clinical &amp; support hiring</div>
                    <div class="uc-desc">Screen nurses, technicians, and support staff at scale - with role-specific questions for clinical competencies and auto-generated candidate profiles for HR review.</div>
                    <div class="uc-result">35% faster time-to-hire</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-houses"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>real-estate/" style="color:inherit;text-decoration:none;">Real Estate</a></div>
                    <div class="uc-title">High-volume agent recruitment</div>
                    <div class="uc-desc">Screen large candidate pools for sales aptitude, communication, and market knowledge - with AI scoring that identifies top performers before any human interview.</div>
                    <div class="uc-result">33% higher quality-of-hire</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-capsule"></i></div>
                    <div class="uc-industry">Pharma</div>
                    <div class="uc-title">Technical candidate evaluation at scale</div>
                    <div class="uc-desc">Auto-generate role-specific questions for highly specialized roles - regulatory, research, and clinical sales - and evaluate candidate accuracy and intent with AI scoring.</div>
                    <div class="uc-result">49% less interview prep time</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-airplane"></i></div>
                    <div class="uc-industry">Travel &amp; Hospitality</div>
                    <div class="uc-title">Seasonal &amp; high-volume hiring</div>
                    <div class="uc-desc">Handle large seasonal recruitment drives automatically - MIRA AI reaches, screens, and shortlists candidates around the clock without overloading HR teams.</div>
                    <div class="uc-result">Zero manual coordination</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-bank"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>finance/" style="color:inherit;text-decoration:none;">Finance &amp; Banking</a></div>
                    <div class="uc-title">Compliance-aware candidate screening</div>
                    <div class="uc-desc">Screen candidates for financial acumen, regulatory knowledge, and communication quality - with transcripts and scores logged for audit and structured hiring compliance.</div>
                    <div class="uc-result">Structured, auditable process</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-cart3"></i></div>
                    <div class="uc-industry">Retail</div>
                    <div class="uc-title">Rapid frontline &amp; manager hiring</div>
                    <div class="uc-desc">Automate first-round screening for frontline and management roles across locations - with AI identifying the best cultural and skills fit from hundreds of applicants.</div>
                    <div class="uc-result">27% more business growth</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-mortarboard"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>education-academics/" style="color:inherit;text-decoration:none;">Education</a></div>
                    <div class="uc-title">Faculty &amp; staff recruitment at scale</div>
                    <div class="uc-desc">Screen educators, administrators, and support staff with structured AI interviews - evaluating communication, subject expertise, and role alignment before human review.</div>
                    <div class="uc-result">Consistent, bias-reduced screening</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-headset"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>service/" style="color:inherit;text-decoration:none;">Customer Support</a></div>
                    <div class="uc-title">High-volume agent hiring, faster</div>
                    <div class="uc-desc">Screen hundreds of support agent candidates automatically - evaluating empathy, communication, and problem-solving without a single manual interview in the first round.</div>
                    <div class="uc-result">Hours of screening saved daily</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ════════════════════════ FAQ ════════════════════════ -->
<!--<section class="sec">-->
<!--    <div class="container" style="max-width:780px">-->
<!--        <div class="eyebrow">FAQ</div>-->
<!--        <h2 class="sec-h xl">Common questions about MIRA AI Recruiting Agent</h2>-->
<!--        <div class="faq-list">-->
<!--            <div class="faq-item">-->
<!--                <div class="faq-q" onclick="toggleFaq(this)">What is MIRA AI and what does it do for recruiting? <span class="faq-toggle">+</span></div>-->
<!--                <div class="faq-a">MIRA AI is an end-to-end AI recruiting agent that scans, interviews, and evaluates candidates for you. Recruiters input a job description and requirements - MIRA AI then auto-generates role-specific interview questions, reaches out to candidates via AI-powered calls, conducts first-round screenings, evaluates responses, and delivers comprehensive candidate profiles with AI scores, transcripts, and recordings. HR receives a ranked shortlist ready for human decision-making.</div>-->
<!--            </div>-->
<!--            <div class="faq-item">-->
<!--                <div class="faq-q" onclick="toggleFaq(this)">How does automated candidate screening work? <span class="faq-toggle">+</span></div>-->
<!--                <div class="faq-a">MIRA AI uses IVR-powered outreach to contact shortlisted candidates automatically. It conducts the first-round interview as a natural AI-powered call - asking the role-specific questions it generated from your job description. It handles rescheduling if a candidate is unavailable and answers common FAQs. Every interaction is recorded, transcribed, and scored in real time. No recruiter involvement is required until the shortlist is ready for review.</div>-->
<!--            </div>-->
<!--            <div class="faq-item">-->
<!--                <div class="faq-q" onclick="toggleFaq(this)">How is semantic matching different from keyword search? <span class="faq-toggle">+</span></div>-->
<!--                <div class="faq-a">Traditional keyword search matches literal words on a CV - missing candidates who describe the same skills differently and surfacing irrelevant candidates who happen to use the right words. MIRA AI's semantic matching analyzes role context, skills intent, and candidate relevance at a deeper level - understanding that "distributed systems engineer" and "backend infrastructure developer" may describe the same fit for a given role. The result is a shortlist of genuinely relevant candidates, not just keyword matches.</div>-->
<!--            </div>-->
<!--            <div class="faq-item">-->
<!--                <div class="faq-q" onclick="toggleFaq(this)">How does the role-specific interview question generator work? <span class="faq-toggle">+</span></div>-->
<!--                <div class="faq-a">Recruiters input the job profile, required skills, and job description. MIRA AI analyzes this and generates a tailored question set designed to assess the specific competencies and intent signals that matter for that role. Questions are structured for consistency - ensuring every candidate is evaluated on the same criteria, eliminating ad-hoc interviewing and reducing preparation time by 49%.</div>-->
<!--            </div>-->
<!--            <div class="faq-item">-->
<!--                <div class="faq-q" onclick="toggleFaq(this)">Does MIRA AI integrate with Salesforce? <span class="faq-toggle">+</span></div>-->
<!--                <div class="faq-a">Yes - MIRA AI integrates natively with Salesforce. Candidate profiles, AI scores, transcripts, recordings, and interview history are all logged directly to the relevant Salesforce record. Recruiters can access the full candidate pipeline, shortlists, and hiring activity within Salesforce without any manual data entry or external tools.</div>-->
<!--            </div>-->
<!--            <div class="faq-item">-->
<!--                <div class="faq-q" onclick="toggleFaq(this)">Can it work with other CRMs and ATS platforms? <span class="faq-toggle">+</span></div>-->
<!--                <div class="faq-a">Yes. MIRA AI is designed to integrate seamlessly across CRM and hiring solutions - not just Salesforce. Whether you use Zoho, HubSpot, or a dedicated ATS, MIRA AI connects into your existing workflows. Speak to the 360 SMS team during your demo to discuss the right integration path for your current hiring stack.</div>-->
<!--            </div>-->
<!--            <div class="faq-item">-->
<!--                <div class="faq-q" onclick="toggleFaq(this)">What does a candidate profile include? <span class="faq-toggle">+</span></div>-->
<!--                <div class="faq-a">Each auto-generated candidate profile includes: the AI score (out of 100), a full interview transcript, the call recording, an assessment of communication quality, intent signals, skill alignment against the job requirements, and the candidate's full interview history. HR receives everything needed to make an informed hiring decision without conducting their own first-round screening.</div>-->
<!--            </div>-->
<!--            <div class="faq-item">-->
<!--                <div class="faq-q" onclick="toggleFaq(this)">Which industries is MIRA AI built for? <span class="faq-toggle">+</span></div>-->
<!--                <div class="faq-a">MIRA AI works across every industry where volume hiring or structured screening matters - including Healthcare, Real Estate, Pharma, Travel &amp; Hospitality, Finance &amp; Banking, Retail, Education, and Customer Support. The semantic matching and question generation adapt to the specific role context and terminology of each industry, so the same platform works whether you're hiring ICU nurses, financial advisors, or frontline retail staff.</div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<hr class="div">

<!-- ════════════════════════ RELATED AGENTS ════════════════════════ -->
<section class="sec sec-alt">
    <div class="container-xl px-3">
        <div class="eyebrow">Related Salesforce AI agents</div>
        <h2 class="sec-h">More AI Automation Agents for Salesforce</h2>
        <p class="sec-sub">Every agent runs natively inside Salesforce - no middleware, no Agentforce license required to get started.</p>
        <div class="row g-4 mt-4">
            <div class="col-12 col-md-4">
                <a href="https://360smsapp.com/conversational-ai-voice-agent/" class="ra-card">
                    <div class="ra-icon"><i class="bi bi-telephone"></i></div>
                    <div class="ra-tag">Salesforce AI Agent · Voice</div>
                    <div class="ra-name">AI Voice Agent</div>
                    <div class="ra-desc">Qualify every inbound lead, answer FAQs, and book demos through human-like voice conversations - 24/7, autonomously.</div>
                    <div class="ra-link">Explore AI Voice Agent</div>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://360smsapp.com/aiva-ai-agent-call-coaching-transcription/" class="ra-card">
                    <div class="ra-icon"><i class="bi bi-mic"></i></div>
                    <div class="ra-tag">Salesforce AI Agent · Call Intelligence</div>
                    <div class="ra-name">AIVA - Call Transcription &amp; Coaching</div>
                    <div class="ra-desc">Transcribes every call, reads sentiment, and coaches agents with smart suggestions mid-call. 30% faster resolution.</div>
                    <div class="ra-link">Explore AIVA</div>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://360smsapp.com/360-llm-ai-chat-assistant/" class="ra-card">
                    <div class="ra-icon"><i class="bi bi-chat-dots"></i></div>
                    <div class="ra-tag">Salesforce AI Agent · Messaging</div>
                    <div class="ra-name">AI Chatbot (360 LLM)</div>
                    <div class="ra-desc">Context-aware AI chatbot across SMS, WhatsApp, and 15+ channels - using live Salesforce CRM data to personalize every reply.</div>
                    <div class="ra-link">Explore AI Chatbot</div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function toggleFaq(el) {
        const a = el.nextElementSibling;
        const isOpen = a.classList.contains('open');
        document.querySelectorAll('.faq-q').forEach(q => {
            q.classList.remove('open');
            q.nextElementSibling.classList.remove('open')
        });
        if (!isOpen) {
            el.classList.add('open');
            a.classList.add('open');
        }
    }
</script>

<?php
get_footer('sms');
?>