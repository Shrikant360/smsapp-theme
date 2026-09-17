<?php

/**
 * Template Name: AI Voice Agent - Salesforce Native
 * Description:   Standalone Salesforce-branded template. Blue theme (#0057B8).
 */
if (!defined('ABSPATH')) {
    exit;
}

?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/new-header.css">
<?php
get_header('sms');
?>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
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
        background: linear-gradient(180deg, #EEF5FF 0%, #F9FAFB 55%, #FFFFFF 100%) !important;
        position: relative;
        overflow: hidden;
        text-align: left !important;
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

    .flow-step:hover .fs-num i {
        color: #fff;
    }

    .fs-num i {
        font-size: 26px;
        color: var(--blue);
        transition: color .2s;
        line-height: 1;
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
        width: 48px;
        height: 48px;
        border-radius: 14px;
        background: #0057B8;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        box-shadow: 0 4px 12px rgba(0, 87, 184, .25);
    }

    .feat-icon i {
        font-size: 22px;
        line-height: 1;
        color: #fff !important;
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
        font-size: 26px;
        margin-bottom: 12px;
        color: var(--blue);
        display: block;
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
        color: var(--blue);
        display: block;
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
        font-size: 15px;
        font-weight: 700;
        color: var(--ink);
        margin-bottom: 6px;
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
        font-size: 30px;
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

    .cta-ti i {
        color: #4ADE80;
        font-size: 14px;
        flex-shrink: 0;
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
                    Salesforce AI Voice Agent · Native · No Agentforce Required
                </div>
                <h1 class="anim anim-2">The <span class="serif">only</span> AI Voice Agent built inside Salesforce</h1>
                <p class="hero-sub anim anim-3">Qualify every inbound lead, answer FAQs, and book demos through human-like voice conversations - 24/7, autonomously, with every outcome logged natively to your Salesforce CRM. <strong>No external platform. No Agentforce license.</strong></p>
                <div class="hero-btns anim anim-4">
                    <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" target="_blank" class="btn-pri-lg">Book a free demo</a>
                    <a href="#how-it-works" class="btn-sec-lg">See how it works</a>
                </div>
                <div class="hero-trust anim anim-5">
                    <div class="ht"><i class="bi bi-check-circle-fill ht-ck"></i> 5★ AgentExchange · 1,200+ reviews</div>
                    <div class="ht"><i class="bi bi-check-circle-fill ht-ck"></i> Salesforce Summit Partner</div>
                    <div class="ht"><i class="bi bi-check-circle-fill ht-ck"></i> Live in hours, not weeks</div>
                    <div class="ht"><i class="bi bi-check-circle-fill ht-ck"></i> Works without Agentforce</div>
                </div>
            </div>
            <!-- Right: demo card -->
            <div class="col-12 col-lg-6 anim anim-3 d-flex align-items-center justify-content-center" style="background:none; box-shadow:none; border:none; padding:0;">
                <img 
                    src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/05/Hero-demo-mock-1.png" 
                    alt="The only AI Voice Agent built inside Salesforce." 
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
                    <div class="pi-n">24/7</div>
                    <div class="pi-l">Autonomous lead qualification</div>
                </div>
            </div>
            <div class="col-6 col-md pi">
                <div>
                    <div class="pi-n">3×</div>
                    <div class="pi-l">More qualified demos</div>
                </div>
                <span class="pi-badge">Measured</span>
            </div>
            <div class="col-6 col-md pi">
                <div>
                    <div class="pi-n">40%</div>
                    <div class="pi-l">Leads arrive outside hours</div>
                </div>
            </div>
            <div class="col-6 col-md pi">
                <div>
                    <div class="pi-n">Hours</div>
                    <div class="pi-l">To deploy - not weeks</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ════════════════════════ COMPATIBILITY STRIP ════════════════════════ -->
<div class="compat-strip">
    <div class="container-xl px-3">
        <div class="d-flex align-items-center gap-3 flex-wrap justify-content-center">
            <div class="compat-label">Works with your Salesforce setup:</div>
            <div class="d-flex gap-2 flex-wrap justify-content-center">
                <div class="compat-pill">
                    <div class="compat-dot" style="background:var(--grn)"></div>
                    <div>
                        <div style="font-size:13px;font-weight:700;color:var(--ink)">With Agentforce</div>
                        <div style="font-size:11px;color:var(--ink3)">Extends your existing Agentforce agents with voice</div>
                    </div>
                </div>
                <div class="compat-pill">
                    <div class="compat-dot" style="background:var(--grn)"></div>
                    <div>
                        <div style="font-size:13px;font-weight:700;color:var(--ink)">Without Agentforce</div>
                        <div style="font-size:11px;color:var(--ink3)">Runs fully independently - no license needed</div>
                    </div>
                </div>
                <div class="compat-pill active">
                    <div class="compat-dot" style="background:var(--blue)"></div>
                    <div>
                        <div style="font-size:13px;font-weight:700;color:var(--blue-dk)">100% Salesforce native</div>
                        <div style="font-size:11px;color:var(--blue)">No middleware · no external platform</div>
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
        <h2 class="sec-h xl">From Inbound Lead to Booked Demo - Fully Automated</h2>
        <p class="sec-sub">The 360 SMS AI Voice Agent for Salesforce handles the entire qualification and booking workflow, with every step logged natively to your CRM.</p>
        <div class="flow-wrap">
            <div class="flow-connector d-none d-md-block"></div>
            <div class="row g-4 g-md-0">
                <div class="col-6 col-md-3 flow-step">
                    <div class="fs-num"><i class="bi bi-telephone-fill"></i></div>
                    <div class="fs-agent">AI Voice Agent</div>
                    <div class="fs-title">Lead submits form or calls in</div>
                    <div class="fs-desc">Agent answers instantly - at 2 PM or 2 AM - in a natural, conversational voice</div>
                    <span class="fs-badge">Zero wait time</span>
                </div>
                <div class="col-6 col-md-3 flow-step">
                    <div class="fs-num"><i class="bi bi-patch-question-fill"></i></div>
                    <div class="fs-agent">AI Qualification</div>
                    <div class="fs-title">Dynamic qualification questions</div>
                    <div class="fs-desc">Asks your custom BANT criteria - budget, team size, CRM, use case - naturally mid-conversation</div>
                    <span class="fs-badge">Your playbook, automated</span>
                </div>
                <div class="col-6 col-md-3 flow-step">
                    <div class="fs-num"><i class="bi bi-calendar-check-fill"></i></div>
                    <div class="fs-agent">AutoBooking</div>
                    <div class="fs-title">Demo booked directly in-call</div>
                    <div class="fs-desc">Qualified leads are offered a meeting slot and confirmed before the call ends - no follow-up needed</div>
                    <span class="fs-badge">Calendar sync included</span>
                </div>
                <div class="col-6 col-md-3 flow-step">
                    <div class="fs-num"><i class="bi bi-cloud-check-fill"></i></div>
                    <div class="fs-agent">Salesforce Sync</div>
                    <div class="fs-title">Everything logged automatically</div>
                    <div class="fs-desc">Lead score, qualification answers, call summary, and next steps - all written to the Salesforce record, instantly</div>
                    <span class="fs-badge">100% Salesforce native</span>
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
        <h2 class="sec-h xl">Unlike Generic Voice Bots - Purpose-Built for Salesforce</h2>
        <p class="sec-sub">A purpose-built Salesforce AI voice agent - designed to qualify, log, and convert inside the CRM your team already uses every day.</p>

        <!-- Feature 1 -->
        <div class="row align-items-center g-5 mt-4">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-chat-dots-fill"></i></div>
                    <div class="feat-body">
                        <div class="ft">Conversational AI, not a script bot</div>
                        <div class="fd">Natural language understanding handles interruptions, follow-up questions, and off-topic responses - just like a skilled SDR would.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-clipboard2-check-fill"></i></div>
                    <div class="feat-body">
                        <div class="ft">Custom qualification criteria</div>
                        <div class="fd">Define your own BANT questions, scoring thresholds, and routing rules. The agent qualifies to your exact playbook - not a generic template.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-bar-chart-fill"></i></div>
                    <div class="feat-body">
                        <div class="ft">Real-time lead scoring in Salesforce</div>
                        <div class="fd">Every qualification signal is scored and written to the Salesforce lead record in real time - your reps see intent and context before their first call.</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 order-1 order-lg-2">
                <img
                    src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/05/div.feat-visual-10.png"
                    alt="Conversational AI, not a script bot"
                    class="img-fluid"
                    style="width:100%; height:auto; object-fit:contain; display:block;"
                />
            </div>
        </div>
        <!-- Feature 2 -->
        <div class="row align-items-center g-5 mt-5">
            <div class="col-12 col-lg-6 order-1 order-lg-2">
                <h3 style="font-size:22px;font-weight:800;color:var(--ink);letter-spacing:-.4px;margin-bottom:20px">Auto-booking, auto-logged - zero manual steps</h3>
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-calendar2-check-fill"></i></div>
                    <div class="feat-body">
                        <div class="ft">In-call demo scheduling</div>
                        <div class="fd">Qualified leads book a meeting before they hang up - the agent offers available slots, confirms, and sends a calendar invite. No follow-up emails.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-database-fill-check"></i></div>
                    <div class="feat-body">
                        <div class="ft">Native Salesforce logging - no integration needed</div>
                        <div class="fd">Call summary, lead score, qualification answers, and booked meeting all write to the Salesforce record automatically. No webhooks, no middleware.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon"><i class="bi bi-people-fill"></i></div>
                    <div class="feat-body">
                        <div class="ft">Smart rep routing</div>
                        <div class="fd">High-intent leads are routed to your senior reps. Unqualified leads receive a helpful response and are flagged for nurture. No rep time wasted.</div>
                    </div>
                </div>
            </div>
           <div class="col-12 col-lg-6 order-2 order-lg-1">
                <img
                    src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/05/div.feat-visual-11.png"
                    alt="Auto-booking, auto-logged - zero manual steps"
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
        <h2 class="sec-h xl light">What Salesforce AI Voice Agents Deliver - by the Numbers</h2>
        <p class="sec-sub light">Research-backed metrics from AI voice agent deployments. Your results will vary, but the direction is consistent.</p>
        <div class="row g-4 mt-4">
            <div class="col-6 col-lg-3">
                <div class="metric-card">
                    <div class="mc-num">3×</div>
                    <div class="mc-label">More qualified demos booked</div>
                    <div class="mc-source">Industry benchmark</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="metric-card">
                    <div class="mc-num">40%</div>
                    <div class="mc-label">Leads arrive outside business hours</div>
                    <div class="mc-source">AgentisPro 2026</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="metric-card">
                    <div class="mc-num">&lt;60s</div>
                    <div class="mc-label">Average response time</div>
                    <div class="mc-source">Measured</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="metric-card">
                    <div class="mc-num">100%</div>
                    <div class="mc-label">Call outcomes logged to Salesforce</div>
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
        <h2 class="sec-h xl">Which Teams Use an AI Voice Agent for Salesforce</h2>
        <p class="sec-sub">The same Salesforce-native AI agent works across industries and team types - any team that receives inbound leads and wants them qualified automatically.</p>
        <div class="row g-4 mt-4">
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-briefcase-fill"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>sales/" style="color:inherit;text-decoration:none;">Sales Teams</a></div>
                    <div class="uc-title">Inbound lead qualification at scale</div>
                    <div class="uc-desc">Qualify every form submission, website inquiry, or inbound call - 24/7. Reps only speak to leads who've already confirmed intent, team size, and CRM.</div>
                    <div class="uc-result">3× more demos booked</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-heart-pulse-fill"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>healthcare-wellness/" style="color:inherit;text-decoration:none;">Healthcare &amp; Wellness</a></div>
                    <div class="uc-title">Patient intake and appointment booking</div>
                    <div class="uc-desc">Collect intake information, verify insurance eligibility questions, and book appointments automatically - compliant, consistent, 24/7.</div>
                    <div class="uc-result">Zero missed after-hours calls</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-house-fill"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>real-estate/" style="color:inherit;text-decoration:none;">Real Estate</a></div>
                    <div class="uc-title">Property inquiry qualification</div>
                    <div class="uc-desc">Qualify buyer intent, budget, and timeline the moment a lead enquires about a listing - before a human agent has to follow up manually.</div>
                    <div class="uc-result">Same-day qualified callbacks</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-mortarboard-fill"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>education-academics/" style="color:inherit;text-decoration:none;">Education</a></div>
                    <div class="uc-title">Enrollment and admissions qualification</div>
                    <div class="uc-desc">Answer prospective student questions, assess program fit, and book admissions consultations - at any hour, in any timezone.</div>
                    <div class="uc-result">Higher enrollment conversion</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-shield-fill-check"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>legal/" style="color:inherit;text-decoration:none;">Legal</a> &amp; <a href="<?php echo esc_url(home_url('/')); ?>insurance/" style="color:inherit;text-decoration:none;">Insurance</a></div>
                    <div class="uc-title">Case and policy inquiry screening</div>
                    <div class="uc-desc">Collect incident details, assess initial viability, and route qualified inquiries to the right team - before a paralegal or agent picks up.</div>
                    <div class="uc-result">Consistent triage at scale</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-bank2"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>finance/" style="color:inherit;text-decoration:none;">Finance</a> &amp; <a href="<?php echo esc_url(home_url('/')); ?>mortgage/" style="color:inherit;text-decoration:none;">Mortgage</a></div>
                    <div class="uc-title">Loan and mortgage lead qualification</div>
                    <div class="uc-desc">Qualify borrower intent, basic eligibility criteria, and route high-intent leads to advisors - fully logged to your Salesforce org.</div>
                    <div class="uc-result">Pre-qualified lead pipeline</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════ FAQ ════════════════════════ -->
<!--<section class="sec">-->
<!--  <div class="container" style="max-width:780px">-->
<!--    <div class="eyebrow">FAQ</div>-->
<!--    <h2 class="sec-h xl">Common questions about the Salesforce AI Voice Agent</h2>-->
<!--    <div class="faq-list">-->
<!--      <div class="faq-item">-->
<!--        <div class="faq-q" onclick="toggleFaq(this)">Do I need a Salesforce Agentforce license to use the AI Voice Agent? <span class="faq-toggle">+</span></div>-->
<!--        <div class="faq-a">No. The 360 SMS AI Voice Agent runs natively inside any Salesforce org and does not require an Agentforce license. If you use Agentforce, it works alongside it seamlessly - extending your agents with voice. But it operates fully independently if you don't. This is the key difference from Salesforce's own Agentforce Voice product, which requires an Agentforce tier.</div>-->
<!--      </div>-->
<!--      <div class="faq-item">-->
<!--        <div class="faq-q" onclick="toggleFaq(this)">How is this different from a traditional IVR system? <span class="faq-toggle">+</span></div>-->
<!--        <div class="faq-a">A traditional IVR routes calls via keypad input and rigid pre-set menus. The 360 SMS AI Voice Agent holds a real conversation - it understands intent, adapts to unexpected responses, handles objections, and reaches a qualified outcome. Where IVR frustrates callers into hanging up, an AI voice agent creates a positive brand experience that actually converts.</div>-->
<!--      </div>-->
<!--      <div class="faq-item">-->
<!--        <div class="faq-q" onclick="toggleFaq(this)">How does the AI Voice Agent log calls to Salesforce? <span class="faq-toggle">+</span></div>-->
<!--        <div class="faq-a">The agent writes directly to your Salesforce records - no webhooks, no middleware, no manual steps. After each call, the lead score, qualification answers, call summary, booked meeting, and assigned rep are all written to the relevant Lead or Contact record in real time. If a call is incomplete, partial data is still captured and logged.</div>-->
<!--      </div>-->
<!--      <div class="faq-item">-->
<!--        <div class="faq-q" onclick="toggleFaq(this)">Can I customize the qualification questions and scoring criteria? <span class="faq-toggle">+</span></div>-->
<!--        <div class="faq-a">Yes - fully. You define the qualification questions (BANT or any framework), scoring thresholds, and routing rules. The agent uses your exact playbook, not a generic template. You can configure different question sets for different lead sources, products, or territories.</div>-->
<!--      </div>-->
<!--      <div class="faq-item">-->
<!--        <div class="faq-q" onclick="toggleFaq(this)">How long does it take to deploy? <span class="faq-toggle">+</span></div>-->
<!--        <div class="faq-a">Most teams go live within a few hours. Install from the Salesforce AppExchange, connect your phone number, set your qualification questions and scoring rules, and test a sample call. There is no external platform to configure and no middleware to maintain. The 360 SMS team supports you through setup - most customers are live the same day they start.</div>-->
<!--      </div>-->
<!--      <div class="faq-item">-->
<!--        <div class="faq-q" onclick="toggleFaq(this)">Is this the right fit for my team? <span class="faq-toggle">+</span></div>-->
<!--        <div class="faq-a">The AI Voice Agent delivers the most value for teams that receive a meaningful volume of inbound leads, have reps spending significant time on repetitive intake calls, or are losing deals because after-hours enquiries aren't followed up fast enough. If any of those apply, the agent typically covers its cost within the first month - not by replacing sales reps, but by ensuring no lead goes cold before a rep can reach them.</div>-->
<!--      </div>-->
<!--      <div class="faq-item">-->
<!--        <div class="faq-q" onclick="toggleFaq(this)">What happens when the AI can't answer a question? <span class="faq-toggle">+</span></div>-->
<!--        <div class="faq-a">The agent has a graceful escalation path - it acknowledges the question, gives a helpful response where possible, and either transfers the call to a human agent or offers to have the right person call back. The call outcome and question context are logged to Salesforce so the rep has full context before any follow-up.</div>-->
<!--      </div>-->
<!--      <div class="faq-item">-->
<!--        <div class="faq-q" onclick="toggleFaq(this)">Does the AI Voice Agent work for outbound calling? <span class="faq-toggle">+</span></div>-->
<!--        <div class="faq-a">The primary use case is inbound lead qualification and booking. Outbound AI voice calling is available within the broader 360 SMS platform - speak to the team during your demo to explore how inbound and outbound voice AI can work together in your Salesforce workflow.</div>-->
<!--      </div>-->
<!--      <div class="faq-item">-->
<!--        <div class="faq-q" onclick="toggleFaq(this)">How does the AI Voice Agent compare to a human SDR? <span class="faq-toggle">+</span></div>-->
<!--        <div class="faq-a">The agent handles the intake and qualification workflow that typically consumes 60–70% of an SDR's day - the same questions, the same data logging, the same meeting bookings - at any hour, at any volume, with zero inconsistency. Human SDRs are better deployed on complex, relationship-building conversations. The agent handles volume; your reps handle conversion.</div>-->
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
                <a href="https://360smsapp.com/aiva-ai-agent-call-coaching-transcription/" class="ra-card">
                    <div class="ra-icon"><i class="bi bi-mic-fill"></i></div>
                    <div class="ra-tag">Salesforce AI Agent · Call Intelligence</div>
                    <div class="ra-name">AIVA - Call Transcription &amp; Coaching</div>
                    <div class="ra-desc">Transcribes every call, reads sentiment, and coaches agents with smart suggestions mid-call. 30% faster resolution.</div>
                    <div class="ra-link">Explore AIVA</div>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://360smsapp.com/call-translation-agent/" class="ra-card">
                    <div class="ra-icon"><i class="bi bi-translate"></i></div>
                    <div class="ra-tag">Salesforce AI Agent · Multilingual</div>
                    <div class="ra-name">Call Translation Agent</div>
                    <div class="ra-desc">Real-time call translation across 50+ languages. Your agent speaks their language. The customer hears theirs.</div>
                    <div class="ra-link">Explore Call Translation Agent</div>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://360smsapp.com/360-llm-ai-chat-assistant/" class="ra-card">
                    <div class="ra-icon"><i class="bi bi-chat-fill"></i></div>
                    <div class="ra-tag">Salesforce AI Agent · Messaging</div>
                    <div class="ra-name">AI Chatbot (360 LLM)</div>
                    <div class="ra-desc">Context-aware AI chatbot across SMS, WhatsApp, and 15+ channels - using live Salesforce CRM data to personalize every reply.</div>
                    <div class="ra-link">Explore AI Chatbot</div>
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