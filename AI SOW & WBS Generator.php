<?php

/**
 * Template Name: AI SOW & WBS Generator - Presales Document Automation
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
    
    h2{
        font-size:32px !important;
        
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
        /*font-family: var(--serif);*/
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

    /* ─── CTA BAND ─── */
    .cta-band {
        background: linear-gradient(135deg, var(--blue-dk) 0%, var(--blue) 100%);
        padding: 72px 0;
        position: relative;
        overflow: hidden;
    }

    .cta-band::before {
        content: '';
        position: absolute;
        inset: 0;
        background-image: linear-gradient(rgba(255, 255, 255, .04) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, .04) 1px, transparent 1px);
        background-size: 32px 32px;
        pointer-events: none;
    }

    .cta-inner {
        position: relative;
        z-index: 1;
    }

    .cta-left h2 {
        font-size: 32px !important;
        font-weight: 800;
        color: #fff;
        letter-spacing: -.5px;
        line-height: 1.2;
        margin-bottom: 12px;
    }

    .cta-left p {
        font-size: 15px;
        color: rgba(255, 255, 255, .7);
        line-height: 1.7;
        margin-bottom: 20px;
    }

    .cta-trust-row {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .cta-ti {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 13px;
        color: rgba(255, 255, 255, .8);
        font-weight: 500;
    }

    .cta-ti::before {
        content: '✓';
        font-weight: 700;
        color: #4ADE80;
        font-size: 12px;
    }

    .cta-form-box {
        background: #fff;
        border-radius: var(--r16);
        padding: 28px;
        box-shadow: 0 20px 60px rgba(0, 0, 0, .25);
    }

    .cf-title {
        font-size: 17px;
        font-weight: 800;
        color: var(--ink);
        letter-spacing: -.3px;
        margin-bottom: 4px;
    }

    .cf-sub {
        font-size: 12px;
        color: var(--ink3);
        margin-bottom: 18px;
    }

    .form-field {
        margin-bottom: 10px;
    }

    .form-label {
        font-size: 11px;
        font-weight: 700;
        color: var(--ink2);
        display: block;
        margin-bottom: 4px;
        letter-spacing: .02em;
    }

    .form-input {
        width: 100%;
        padding: 9px 12px;
        font-size: 13px;
        border: 1px solid var(--bdr);
        border-radius: var(--r6);
        font-family: inherit;
        color: var(--ink);
        outline: none;
        transition: border-color .12s;
        background: #fff;
    }

    .form-input:focus {
        border-color: var(--blue);
        box-shadow: none;
    }

    .form-select-field {
        width: 100%;
        padding: 9px 12px;
        font-size: 13px;
        border: 1px solid var(--bdr);
        border-radius: var(--r6);
        font-family: inherit;
        color: var(--ink);
        outline: none;
        background: #fff;
    }

    .form-submit {
        width: 100%;
        padding: 13px;
        font-size: 14px;
        font-weight: 700;
        border-radius: var(--r8);
        cursor: pointer;
        border: none;
        color: #fff;
        background: var(--blue);
        transition: background .12s;
        margin-top: 6px;
    }

    .form-submit:hover {
        background: var(--blue-dk);
    }

    .form-privacy {
        font-size: 10px;
        color: var(--ink3);
        text-align: center;
        margin-top: 10px;
        line-height: 1.55;
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

        .cta-left h2 {
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
            <div class="col-12 col-lg-6 text-start">
                <div class="hero-eyebrow anim anim-1">
                    <div class="hero-eyebrow-dot"></div>
                    Presales Document Automation · Salesforce Native
                </div>
                <h1 class="anim anim-2">Instant <span class="serif"> SOW &amp; WBS </span>&nbsp; from Any Presales Input</h1>
                <p class="hero-sub anim anim-3">Extract requirements from text, files, audio, and video - then generate client-ready SOWs and WBS instantly inside Salesforce. <strong>AI document parsing that eliminates estimation bottlenecks and manual drafting for good.</strong></p>
                <div class="hero-btns anim anim-4">
                    <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" target="_blank" class="btn-pri-lg">Book a free demo</a>
                    <a href="#how-it-works" class="btn-sec-lg">See how it works</a>
                </div>
                <div class="hero-trust anim anim-5">
                    <div class="ht"><span class="ht-ck">✓</span> 5★ AgentExchange · 1,200+ reviews</div>
                    <div class="ht"><span class="ht-ck">✓</span> Salesforce Summit Partner</div>
                    <div class="ht"><span class="ht-ck">✓</span> SOW + WBS in minutes, not days</div>
                    <div class="ht"><span class="ht-ck">✓</span> No developer dependency</div>
                </div>
            </div>
            <!-- Right: demo card -->
            <div class="col-12 col-lg-6 anim anim-3 d-flex align-items-center justify-content-center" style="background:none; box-shadow:none; border:none; padding:0;">
                <img
                    src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/05/Hero-demo-mock-3.png"
                    alt="Instant SOW & WBS   from Any Presales Input"
                    class="img-fluid"
                    style="width:100%; height:auto; object-fit:contain; display:block; background:transparent; box-shadow:none;" />
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
                    <div class="pi-n">80%</div>
                    <div class="pi-l">Faster SOW turnaround vs manual presales drafting</div>
                </div>
                <span class="pi-badge">Measured</span>
            </div>
            <div class="col-6 col-md pi">
                <div>
                    <div class="pi-n">100%</div>
                    <div class="pi-l">Of outputs benchmarked against historical SOW data</div>
                </div>
            </div>
            <div class="col-6 col-md pi">
                <div>
                    <div class="pi-n">0</div>
                    <div class="pi-l">Developer dependency - BAs generate SOWs independently</div>
                </div>
            </div>
            <div class="col-6 col-md pi">
                <div>
                    <div class="pi-n">Hours</div>
                    <div class="pi-l">To deploy - not weeks of implementation</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ════════════════════════ COMPATIBILITY STRIP ════════════════════════ -->
<div class="compat-strip">
    <div class="container-xl px-3">
        <div class="d-flex align-items-center gap-3 flex-wrap justify-content-center">
            <div class="compat-label">Works with your presales stack:</div>
            <div class="d-flex gap-2 flex-wrap justify-content-center">
                <div class="compat-pill">
                    <div class="compat-dot" style="background:var(--grn)"></div>
                    <div>
                        <div style="font-size:13px;font-weight:700;color:var(--ink)">Native Agentforce Integration</div>
                        <div style="font-size:11px;color:var(--ink3)">Trigger from any Opportunity or Lead record</div>
                    </div>
                </div>
                <div class="compat-pill">
                    <div class="compat-dot" style="background:var(--grn)"></div>
                    <div>
                        <div style="font-size:13px;font-weight:700;color:var(--ink)">AWS S3 Secure Processing</div>
                        <div style="font-size:11px;color:var(--ink3)">Safely handles large uploads - audio, video, PDFs</div>
                    </div>
                </div>
                <div class="compat-pill active">
                    <div class="compat-dot" style="background:var(--blue)"></div>
                    <div>
                        <div style="font-size:13px;font-weight:700;color:var(--blue-dk)">PDF &amp; Excel Export</div>
                        <div style="font-size:11px;color:var(--blue)">Client-ready SOW PDF + WBS Excel in one click</div>
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
        <h2 class="sec-h xl">AI-Powered Presales Document Parsing in Action</h2>
        <p class="sec-sub">The AI agent analyzes presales inputs, uses historical delivery data, and generates structured SOW and WBS outputs fast - all inside Salesforce, without developer dependency.</p>
        <div class="flow-wrap">
            <div class="flow-connector d-none d-md-block"></div>
            <div class="row g-4 g-md-0">
                <div class="col-6 col-md-3 flow-step">
                    <div class="fs-num"><svg viewBox="0 0 24 24">
                            <path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4" />
                            <polyline points="17 8 12 3 7 8" />
                            <line x1="12" y1="3" x2="12" y2="15" />
                        </svg></div>
                    <div class="fs-agent">Input</div>
                    <div class="fs-title">Upload Presales Inputs</div>
                    <div class="fs-desc">Add discovery notes, PDFs, meeting transcripts, audio, or video to the opportunity context - any format, any source.</div>
                    <span class="fs-badge">Text · audio · video · PDF</span>
                </div>
                <div class="col-6 col-md-3 flow-step">
                    <div class="fs-num"><svg viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="8" />
                            <line x1="21" y1="21" x2="16.65" y2="16.65" />
                        </svg></div>
                    <div class="fs-agent">AI Parsing</div>
                    <div class="fs-title">Extract Requirements Automatically</div>
                    <div class="fs-desc">The agent parses content and structures client requirements - scope, constraints, timelines, and deliverables.</div>
                    <span class="fs-badge">Automated extraction</span>
                </div>
                <div class="col-6 col-md-3 flow-step">
                    <div class="fs-num"><svg viewBox="0 0 24 24">
                            <path d="M18 20V10M12 20V4M6 20v-6" />
                        </svg></div>
                    <div class="fs-agent">Estimation</div>
                    <div class="fs-title">Estimate Effort Using Historical Data</div>
                    <div class="fs-desc">Benchmarks against historical SOWs to improve estimation accuracy and consistency - reducing developer dependency during presales.</div>
                    <span class="fs-badge">Data-backed estimates</span>
                </div>
                <div class="col-6 col-md-3 flow-step">
                    <div class="fs-num"><svg viewBox="0 0 24 24">
                            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z" />
                            <polyline points="14 2 14 8 20 8" />
                            <line x1="16" y1="13" x2="8" y2="13" />
                            <line x1="16" y1="17" x2="8" y2="17" />
                        </svg></div>
                    <div class="fs-agent">Generate &amp; Share</div>
                    <div class="fs-title">Generate SOW &amp; WBS - Finalize &amp; Share</div>
                    <div class="fs-desc">Create structured outputs and export client-ready PDF. Move forward faster with Salesforce proposal automation.</div>
                    <span class="fs-badge">One-click export</span>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="div">

<!-- ════════════════════════ FEATURES ════════════════════════ -->
<section class="sec sec-alt">
    <div class="container-xl px-3">
        <div class="eyebrow">Features</div>
        <h2 class="sec-h xl">Deliver Instant Presales Documentation Without Estimation Bottlenecks</h2>
        <p class="sec-sub">Put the AI agent to work across presales discovery and documentation - generating SOWs faster, estimating accurately, and keeping every proposal consistent and client-ready.</p>

        <!-- Feature 1 - Parsing, Extraction & Estimation -->
        <div class="row align-items-center g-5 mt-4">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <h3 style="font-size:22px;font-weight:800;color:var(--ink);letter-spacing:-.4px;margin-bottom:6px">Feature Set A - Parsing, Extraction &amp; Estimation</h3>
                <p style="font-size:14px;font-weight:600;color:var(--ink3);margin-bottom:20px">Automated Requirement Extraction · Historical SOW Analysis · AI Effort Estimation</p>
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-file-earmark-text"></i></div>
                    <div class="feat-body">
                        <div class="ft">Automated Requirement Extraction</div>
                        <div class="fd">Extract requirements from text, files, audio, and video and turn unstructured presales inputs into structured scope - no manual summarization needed.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-bar-chart-line"></i></div>
                    <div class="feat-body">
                        <div class="ft">Historical SOW Data Analysis</div>
                        <div class="fd">Benchmark new requirements against historical SOWs to improve accuracy and consistency across proposals - so estimates reflect real delivery patterns.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-clock"></i></div>
                    <div class="feat-body">
                        <div class="ft">AI-Based Effort Estimation</div>
                        <div class="fd">Estimate effort and timelines using historical patterns to reduce developer dependency during presales - accurate scopes without waiting for engineering input.</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 order-1 order-lg-2">
                <img
                    src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/05/div.feat-visual-14.png"
                    alt="AI SOW Generator · Requirement Parsing"
                    class="img-fluid"
                    style="width:100%; height:auto; object-fit:contain; display:block;" />
            </div>
        </div>

        <!-- Feature 2 - Generation, Templates & Collaboration -->
        <div class="row align-items-center g-5 mt-5">
            <div class="col-12 col-lg-6 order-1 order-lg-2">
                <h3 style="font-size:22px;font-weight:800;color:var(--ink);letter-spacing:-.4px;margin-bottom:6px">Feature Set B - Generation, Templates &amp; Collaboration</h3>
                <p style="font-size:14px;font-weight:600;color:var(--ink3);margin-bottom:20px">Instant SOW &amp; WBS PDF Generation · Templates &amp; Version Control · Collaborative Review</p>
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-file-text"></i></div>
                    <div class="feat-body">
                        <div class="ft">Instant SOW and WBS PDF Generation</div>
                        <div class="fd">Generate SOW and WBS outputs instantly with automated SOW creation software and export as a client-ready PDF - without leaving Salesforce.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-journal-text"></i></div>
                    <div class="feat-body">
                        <div class="ft">Ready-to-Use SOW Templates &amp; Version Control</div>
                        <div class="fd">Automatically populates brand-approved SOW templates for legal and stylistic consistency. Every version is saved so teams can compare iterations and revert when needed.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-people"></i></div>
                    <div class="feat-body">
                        <div class="ft">Collaborative Review Mode</div>
                        <div class="fd">Enables BA and dev comments and approvals on the draft before finalizing for the client - so every SOW ships with full team sign-off.</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <img
                    src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/05/div.feat-visual-15.png"
                    alt="Generation, Templates & Collaboration"
                    class="img-fluid"
                    style="width:100%; height:auto; object-fit:contain; display:block;" />
            </div>
        </div>

    </div>
</section>

<hr class="div">

<!-- ════════════════════════ METRICS / RESULTS ════════════════════════ -->
<section class="sec sec-dark" id="results">
    <div class="container-xl px-3">
        <div class="eyebrow light">Results</div>
        <h2 class="sec-h xl light">What AI Presales Document Automation Delivers - By the Numbers</h2>
        <p class="sec-sub light">Research-backed metrics from AI SOW and WBS generator deployments. Your results will vary, but the direction is consistent.</p>
        <div class="row g-4 mt-4">
            <div class="col-6 col-lg-3">
                <div class="metric-card">
                    <div class="mc-num">80%</div>
                    <div class="mc-label">Faster SOW turnaround vs manual presales drafting and estimation cycles</div>
                    <div class="mc-source">Industry benchmark</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="metric-card">
                    <div class="mc-num">100%</div>
                    <div class="mc-label">Of outputs benchmarked against historical SOW data for accuracy and consistency</div>
                    <div class="mc-source">AI SOW Generator</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="metric-card">
                    <div class="mc-num">0</div>
                    <div class="mc-label">Developer dependency - BAs generate complete SOWs and WBS independently</div>
                    <div class="mc-source">Measured</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="metric-card">
                    <div class="mc-num">40%</div>
                    <div class="mc-label">Reduction in presales estimation errors through AI-based effort benchmarking</div>
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
        <h2 class="sec-h xl">Built for Industries Where Presales Speed and Accuracy Matter</h2>
        <p class="sec-sub">Designed for high-velocity services teams that rely on fast, data-backed project documentation to win and deliver.</p>
        <div class="row g-4 mt-4">
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-laptop"></i></div>
                    <div class="uc-industry">IT &amp; Managed Services</div>
                    <div class="uc-title">Close faster with instant SOW turnaround</div>
                    <div class="uc-desc">IT services teams handling high volumes of proposals use AI SOW automation to generate scoped, accurately estimated documents in minutes - not days - reducing deal cycle time.</div>
                    <div class="uc-result">Faster deal closure</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-building-gear"></i></div>
                    <div class="uc-industry">Manufacturing &amp; Industrial</div>
                    <div class="uc-title">Standardize project scopes across complex bids</div>
                    <div class="uc-desc">Manufacturing teams with multi-phase implementation bids use AI WBS generation to produce consistent, structured work breakdowns that reflect real delivery complexity.</div>
                    <div class="uc-result">Consistent, accurate scopes</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-people"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>professional-services/" style="color:inherit;text-decoration:none;">Professional Services</a></div>
                    <div class="uc-title">Eliminate presales bottlenecks for consulting firms</div>
                    <div class="uc-desc">Consulting firms use Salesforce proposal automation to generate client-ready SOWs from discovery sessions - removing the BA-to-dev handoff delay that slows every engagement kickoff.</div>
                    <div class="uc-result">No more dev queue delays</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-hospital"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>healthcare-wellness/" style="color:inherit;text-decoration:none;">Healthcare &amp; MedTech</a></div>
                    <div class="uc-title">Scope compliant implementations accurately</div>
                    <div class="uc-desc">Healthcare technology vendors use AI document parsing to extract complex regulatory and integration requirements from discovery inputs - and generate scoped, compliant SOWs faster.</div>
                    <div class="uc-result">Compliant scopes, faster</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-bank"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>finance/" style="color:inherit;text-decoration:none;">Financial Services</a></div>
                    <div class="uc-title">Deliver accurate proposals for regulated projects</div>
                    <div class="uc-desc">Financial services teams use historical SOW benchmarking to produce effort estimates and project scopes that hold up under scrutiny - reducing rework and change orders post-signature.</div>
                    <div class="uc-result">Fewer post-signature changes</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-mortarboard"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>education-academics/" style="color:inherit;text-decoration:none;">Education &amp; EdTech</a></div>
                    <div class="uc-title">Speed up platform implementation proposals</div>
                    <div class="uc-desc">EdTech vendors and implementation partners use AI SOW generation to turn discovery sessions into structured project scopes - reducing presales turnaround across multiple active bids.</div>
                    <div class="uc-result">More proposals, same team</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ════════════════════════ FAQ ════════════════════════ -->
<!--<section class="sec">-->
<!--  <div class="container" style="max-width:780px">-->
<!--    <div class="eyebrow">FAQ</div>-->
<!--    <h2 class="sec-h xl">Questions? We've Got Answers</h2>-->
<!--    <div class="faq-list">-->
<!--      <div class="faq-item">-->
<!--        <div class="faq-q" onclick="toggleFaq(this)">What does this proposal automation software generate inside Salesforce? <span class="faq-toggle">+</span></div>-->
<!--        <div class="faq-a">It generates complete, client-ready Statements of Work (SOWs) and Work Breakdown Structures (WBS) directly inside Salesforce - triggered from any Opportunity or Lead record. Outputs include structured scope documents, effort estimates benchmarked against historical data, WBS task breakdowns exportable to Excel, and branded SOW PDFs ready to share with clients.</div>-->
<!--      </div>-->
<!--      <div class="faq-item">-->
<!--        <div class="faq-q" onclick="toggleFaq(this)">How does the AI document parsing tool extract requirements? <span class="faq-toggle">+</span></div>-->
<!--        <div class="faq-a">The tool accepts any presales input - text notes, uploaded PDFs, meeting transcripts, audio recordings, or discovery videos - and uses contextual NLP to identify and structure client requirements. It extracts scope items, constraints, timelines, team sizes, and integration needs, then organizes them into a structured format ready for SOW generation. Large files like video recordings are handled securely via AWS S3.</div>-->
<!--      </div>-->
<!--      <div class="faq-item">-->
<!--        <div class="faq-q" onclick="toggleFaq(this)">What is the difference between an AI SOW generator and an AI WBS generator? <span class="faq-toggle">+</span></div>-->
<!--        <div class="faq-a">An AI SOW generator produces the full Statement of Work document - scope, deliverables, timelines, assumptions, and commercial terms - formatted and client-ready. An AI WBS generator produces the Work Breakdown Structure - the task-level breakdown of the project used for resource planning and kickoff. Both are generated from the same parsed requirements and can be exported separately as PDF (SOW) or Excel (WBS).</div>-->
<!--      </div>-->
<!--      <div class="faq-item">-->
<!--        <div class="faq-q" onclick="toggleFaq(this)">Does it support Salesforce proposal automation workflows? <span class="faq-toggle">+</span></div>-->
<!--        <div class="faq-a">Yes. The tool is built as a native Salesforce proposal automation solution - BAs can trigger SOW and WBS generation directly from an Opportunity or Lead record, with outputs automatically attached and versioned within the record. It works with Agentforce integration and fits existing Salesforce approval workflows, so proposal generation becomes part of your standard sales process.</div>-->
<!--      </div>-->
<!--      <div class="faq-item">-->
<!--        <div class="faq-q" onclick="toggleFaq(this)">Is it also a Salesforce SOW generator for standard templates? <span class="faq-toggle">+</span></div>-->
<!--        <div class="faq-a">Yes. The Salesforce SOW generator automatically populates brand-approved, legally reviewed SOW templates - maintaining consistent structure, language, and formatting across all proposals. Teams can configure their own templates, and every generated document adheres to the approved format. Version control is built in, so every iteration is saved and can be compared or reverted.</div>-->
<!--      </div>-->
<!--      <div class="faq-item">-->
<!--        <div class="faq-q" onclick="toggleFaq(this)">How does the AI SOW automation tool reduce presales delays? <span class="faq-toggle">+</span></div>-->
<!--        <div class="faq-a">The AI SOW automation tool reduces manual drafting and dependency on developers by generating structured drafts faster, supported by automated SOW creation software and historical data benchmarking. BAs no longer need to wait for engineering input to produce effort estimates - the tool benchmarks against historical delivery data automatically, cutting the typical presales SOW cycle from days to minutes.</div>-->
<!--      </div>-->
<!--    </div>-->
<!--  </div>-->
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
                <a href="https://360smsapp.com/archbuddy-ai-salesforce-metadata-automation/" class="ra-card">
                    <div class="ra-icon"><i class="bi bi-lightning"></i></div>
                    <div class="ra-tag">Salesforce AI Agent · Metadata</div>
                    <div class="ra-name">ArchBuddy.ai - Metadata Automation</div>
                    <div class="ra-desc">Generate, validate, and deploy Salesforce metadata automatically - no manual XML, no dev queue, one-click deployment via Metadata API.</div>
                    <div class="ra-link">Explore ArchBuddy.ai</div>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://360smsapp.com/mira-ai-recruiting-agent/" class="ra-card">
                    <div class="ra-icon"><i class="bi bi-people"></i></div>
                    <div class="ra-tag">Salesforce AI Agent · Recruiting</div>
                    <div class="ra-name">MIRA AI Recruiting Agent</div>
                    <div class="ra-desc">Automate end-to-end hiring - semantic matching, AI-generated interview questions, and candidate shortlisting natively in Salesforce.</div>
                    <div class="ra-link">Explore MIRA AI</div>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://360smsapp.com/conversational-ai-voice-agent/" class="ra-card">
                    <div class="ra-icon"><i class="bi bi-telephone"></i></div>
                    <div class="ra-tag">Salesforce AI Agent · Voice</div>
                    <div class="ra-name">AI Voice Agent</div>
                    <div class="ra-desc">Qualify inbound leads, answer FAQs, and book demos 24/7 through human-like voice conversations - fully logged to Salesforce.</div>
                    <div class="ra-link">Explore AI Voice Agent</div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════ BOTTOM CTA + FORM ════════════════════════ -->




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