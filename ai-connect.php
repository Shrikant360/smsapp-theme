<?php

/**
 * Template Name: AI Connect - Call Translation Agent
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
    /* ─── CSS VARIABLES ─── */
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
    }

    .feat-icon i {
        font-size: 20px;
        line-height: 1;
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
        color: #0057B8;
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
        color: #0057B8;
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
                    AI Connect · Real-Time Voice Translation · 50+ Languages · Salesforce Native
                </div>
                <h1 class="anim anim-2">Speak to Every Customer in <span class="serif"> Their Language </span>&nbsp; with AI Connect</h1>
                <p class="hero-sub anim anim-3">Speak to your customers in their language without hiring multilingual support staff. <strong>AI-Connect is an AI voice translator for automatic live call translation that improves resolution speed.</strong></p>
                <div class="hero-btns anim anim-4">
                    <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" target="_blank" class="btn-pri-lg">Book a free demo</a>
                    <a href="#how-it-works" class="btn-sec-lg">See how it works</a>
                </div>
                <div class="hero-trust anim anim-5">
                    <div class="ht"><span class="ht-ck">✓</span> 5★ AgentExchange · 1,200+ reviews</div>
                    <div class="ht"><span class="ht-ck">✓</span> Salesforce Summit Partner</div>
                    <div class="ht"><span class="ht-ck">✓</span> 50+ languages · bidirectional</div>
                    <div class="ht"><span class="ht-ck">✓</span> No interpreters needed</div>
                </div>
            </div>
            <!-- Right: demo card -->
           <div class="col-12 col-lg-6 anim anim-3 d-flex align-items-center justify-content-center" style="background:none; box-shadow:none; border:none; padding:0;">
                <img 
                    src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/05/Hero-live-translation-demo-mock.png" 
                    alt="AI Connect · Live Call Translation" 
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
                    <div class="pi-l">AgentExchange 360 SMS app reviews</div>
                </div>
                <span class="pi-badge">5★ rated</span>
            </div>
            <div class="col-6 col-md pi">
                <div>
                    <div class="pi-n">50+</div>
                    <div class="pi-l">Languages - bidirectional real-time</div>
                </div>
            </div>
            <div class="col-6 col-md pi">
                <div>
                    <div class="pi-n">~$2.1T</div>
                    <div class="pi-l">Annual economic loss from language barriers</div>
                </div>
            </div>
            <div class="col-6 col-md pi">
                <div>
                    <div class="pi-n">&lt;200ms</div>
                    <div class="pi-l">Translation latency - feels natural</div>
                </div>
            </div>
            <div class="col-6 col-md pi">
                <div>
                    <div class="pi-n">0</div>
                    <div class="pi-l">Human interpreters needed</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ════════════════════════ COMPATIBILITY STRIP ════════════════════════ -->
<div class="compat-strip">
    <div class="container-xl px-3">
        <div class="d-flex align-items-center gap-3 flex-wrap justify-content-center">
            <div class="compat-label">Works with your existing setup:</div>
            <div class="d-flex gap-2 flex-wrap justify-content-center">
                <div class="compat-pill">
                    <div class="compat-dot" style="background:var(--grn)"></div>
                    <div>
                        <div style="font-size:13px;font-weight:700;color:var(--ink)">Salesforce call translation</div>
                        <div style="font-size:11px;color:var(--ink3)">Natively integrated - transcripts auto-logged</div>
                    </div>
                </div>
                <div class="compat-pill">
                    <div class="compat-dot" style="background:var(--grn)"></div>
                    <div>
                        <div style="font-size:13px;font-weight:700;color:var(--ink)">Zoho &amp; other CRMs</div>
                        <div style="font-size:11px;color:var(--ink3)">Multi-environment integration via APIs</div>
                    </div>
                </div>
                <div class="compat-pill active">
                    <div class="compat-dot" style="background:var(--blue)"></div>
                    <div>
                        <div style="font-size:13px;font-weight:700;color:var(--blue-dk)">Inbound &amp; outbound</div>
                        <div style="font-size:11px;color:var(--blue)">Live translation on every call direction</div>
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
        <h2 class="sec-h xl">AI-Connect in Action - Clear, Human Conversations</h2>
        <p class="sec-sub">AI-Connect listens, understands, and delivers AI call translation for live conversations, bidirectionally, across 50+ languages.</p>

        <div class="flow-wrap">
            <div class="flow-connector d-none d-md-block"></div>
            <div class="row g-4 g-md-0">
                <div class="col-6 col-md-3 flow-step">
                    <div class="fs-num"><svg viewBox="0 0 24 24">
                            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07A19.5 19.5 0 013.07 10.8 19.79 19.79 0 01.22 2.18 2 2 0 012.18 0h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L6.91 7.1a16 16 0 006 6l.46-.46a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0120 15h3a2 2 0 012 2v.09z" />
                        </svg></div>
                    <div class="fs-agent">Call Initiation</div>
                    <div class="fs-title">Live Call Begins</div>
                    <div class="fs-desc">A call begins between two participants speaking different languages - AI-Connect activates instantly</div>
                    <span class="fs-badge">Zero setup required</span>
                </div>
                <div class="col-6 col-md-3 flow-step">
                    <div class="fs-num"><svg viewBox="0 0 24 24">
                            <path d="M12 1a3 3 0 00-3 3v8a3 3 0 006 0V4a3 3 0 00-3-3z" />
                            <path d="M19 10v2a7 7 0 01-14 0v-2M12 19v4M8 23h8" />
                        </svg></div>
                    <div class="fs-agent">Speech Recognition</div>
                    <div class="fs-title">Real-Time Speech Understanding</div>
                    <div class="fs-desc">AI-Connect listens to each speaker in real time and understands intent, context, and industry-specific language</div>
                    <span class="fs-badge">Context &amp; intent intact</span>
                </div>
                <div class="col-6 col-md-3 flow-step">
                    <div class="fs-num"><svg viewBox="0 0 24 24">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                        </svg></div>
                    <div class="fs-agent">Instant Translation</div>
                    <div class="fs-title">Instant Language Translation</div>
                    <div class="fs-desc">Speech is translated instantly using real-time voice translation and played back in the listener's preferred language in &lt;200ms</div>
                    <span class="fs-badge">&lt;200ms latency</span>
                </div>
                <div class="col-6 col-md-3 flow-step">
                    <div class="fs-num"><svg viewBox="0 0 24 24">
                            <path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z" />
                        </svg></div>
                    <div class="fs-agent">Seamless Exchange</div>
                    <div class="fs-title">Fluid, Natural Conversation</div>
                    <div class="fs-desc">Both parties speak naturally - AI-Connect translates each response bidirectionally with tone and context preserved throughout</div>
                    <span class="fs-badge">No interpreters needed</span>
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
        <h2 class="sec-h xl">Deliver Multilingual Experience Without Language Barrier</h2>
        <p class="sec-sub">See what real-time multilingual call translation makes possible in every conversation - across customer support, sales, and cross-border operations.</p>

        <!-- Feature 1 - Real-Time Translation -->
        <div class="row align-items-center g-5 mt-4">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <h3 style="font-size:22px;font-weight:800;color:var(--ink);letter-spacing:-.4px;margin-bottom:20px">Real-Time Multilingual Translation Across 50+ Languages</h3>
                <div class="feat-item">
                    <div class="feat-icon" style="background:#0057B8"><i class="bi bi-chat-quote-fill" style="color:#fff"></i></div>
                    <div class="feat-body">
                        <div class="ft">Two-Way Conversations That Feel Natural</div>
                        <div class="fd">Both sides hear each other in real time with context and intent intact.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon" style="background:#0057B8"><i class="bi bi-emoji-smile-fill" style="color:#fff"></i></div>
                    <div class="feat-body">
                        <div class="ft">AI-Driven Clarity and Accuracy</div>
                        <div class="fd">AI Connect understands real speech, emotion, and industry language.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon" style="background:#0057B8"><i class="bi bi-lightning-charge-fill" style="color:#fff"></i></div>
                    <div class="feat-body">
                        <div class="ft">Low Latency Voice Processing</div>
                        <div class="fd">Responses happen under 200ms from speech to translated playback.</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 order-1 order-lg-2">
                <img
                    src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/05/div.feat-visual-4.png"
                    alt="AI Connect · Real-Time Translation"
                    class="img-fluid"
                    style="width:100%; height:auto; object-fit:contain; display:block;"
                />
            </div>
        </div>
        <!-- Feature 2 - Enterprise Integration -->
        <div class="row align-items-center g-5 mt-5">
            <div class="col-12 col-lg-6 order-1 order-lg-2">
                <h3 style="font-size:22px;font-weight:800;color:var(--ink);letter-spacing:-.4px;margin-bottom:20px">Context and Tone Adaptation with Enterprise-Grade Reliability</h3>
                <div class="feat-item">
                    <div class="feat-icon" style="background:#0057B8"><i class="bi bi-translate" style="color:#fff"></i></div>
                    <div class="feat-body">
                        <div class="ft">Context and Tone Adaptation</div>
                        <div class="fd">AI adjusts translations to match tone and context for empathetic communication.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon" style="background:#0057B8"><i class="bi bi-shield-lock-fill" style="color:#fff"></i></div>
                    <div class="feat-body">
                        <div class="ft">Enterprise-Grade Security</div>
                        <div class="fd">Securely handle high call volumes across teams and regions.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon" style="background:#0057B8"><i class="bi bi-cloud-check-fill" style="color:#fff"></i></div>
                    <div class="feat-body">
                        <div class="ft">Salesforce Native Integration</div>
                        <div class="fd">Call translations logged to Salesforce workflows automatically.</div>
                    </div>
                </div>
                <div class="feat-item">
                    <div class="feat-icon" style="background:#0057B8"><i class="bi bi-book-fill" style="color:#fff"></i></div>
                    <div class="feat-body">
                        <div class="ft">Custom Vocabulary Support</div>
                        <div class="fd">Adapt the AI to industry-specific terms, acronyms, or brand language.</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <img
                    src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/06/AI-Connect-3.webp"
                    alt="Context and Tone Adaptation with Enterprise-Grade Reliability"
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
        <h2 class="sec-h xl light">AI Call Translation That Works While You Speak</h2>
        <p class="sec-sub light">Not sure how much miscommunication is impacting your CX and ROI? Here's what AI Connect delivers for organizations that operate across languages.</p>

        <div class="row g-4 mt-4">
            <div class="col-6 col-lg-3">
                <div class="metric-card">
                    <div class="mc-num">50+</div>
                    <div class="mc-label">Languages - bidirectional real-time</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="metric-card">
                    <div class="mc-num">~$2.1T</div>
                    <div class="mc-label">Annual economic loss from language barriers</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="metric-card">
                    <div class="mc-num">&lt;200ms</div>
                    <div class="mc-label">Translation latency - feels natural</div>
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="metric-card">
                    <div class="mc-num">0</div>
                    <div class="mc-label">Human interpreters needed - 24/7 AI</div>
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
        <h2 class="sec-h xl">Built for Industries Where Clarity is Critical</h2>
        <p class="sec-sub">AI-Connect is designed for organizations that rely on clear, trusted communication at scale - across borders, languages, and customer segments.</p>

        <div class="row g-4 mt-4">
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-hospital"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>healthcare-wellness/" style="color:inherit;text-decoration:none;">Healthcare</a></div>
                    <div class="uc-title">Patient consultations without language barriers</div>
                    <div class="uc-desc">Clinicians communicate directly with patients in their native language - improving informed consent, reducing misdiagnosis risk, and staying available during emergencies when human interpreters aren't.</div>
                    <div class="uc-result">Available when interpreters aren't</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-house-door-fill"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>real-estate/" style="color:inherit;text-decoration:none;">Real Estate</a></div>
                    <div class="uc-title">Cross-border property transactions</div>
                    <div class="uc-desc">Agents speak to international buyers and sellers naturally - eliminating miscommunication on pricing, terms, and timelines that can kill deals.</div>
                    <div class="uc-result">More cross-border deals closed</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-capsule"></i></div>
                    <div class="uc-industry">Pharma</div>
                    <div class="uc-title">Precise communication on clinical calls</div>
                    <div class="uc-desc">Custom vocabulary support ensures technical terms, drug names, and protocols are translated accurately - critical for patient safety and regulatory compliance.</div>
                    <div class="uc-result">Custom vocabulary · zero ambiguity</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-airplane-fill"></i></div>
                    <div class="uc-industry">Travel &amp; Hospitality</div>
                    <div class="uc-title">Seamless multilingual guest support</div>
                    <div class="uc-desc">Support international guests in their language at every touchpoint - bookings, complaints, and special requests handled fluently without multilingual staff.</div>
                    <div class="uc-result">Multilingual CX at no extra headcount</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-bank2"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>finance/" style="color:inherit;text-decoration:none;">Finance &amp; Banking</a></div>
                    <div class="uc-title">Compliant cross-language advisory calls</div>
                    <div class="uc-desc">Advisors explain complex financial products to clients in their preferred language - with full bilingual transcripts saved for compliance and training.</div>
                    <div class="uc-result">Full bilingual audit trail</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-cart4"></i></div>
                    <div class="uc-industry">Retail</div>
                    <div class="uc-title">Global support without language gaps</div>
                    <div class="uc-desc">Support teams resolve returns, complaints, and product queries across languages - improving CSAT for international customers without hiring per-language agents.</div>
                    <div class="uc-result">Global support, local experience</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-mortarboard-fill"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>education-academics/" style="color:inherit;text-decoration:none;">Education</a></div>
                    <div class="uc-title">Multilingual student &amp; parent support</div>
                    <div class="uc-desc">Admissions, enrollment, and student services teams communicate with international students and parents naturally - improving access and conversion.</div>
                    <div class="uc-result">Higher international enrollment</div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="uc-card">
                    <div class="uc-icon"><i class="bi bi-headset"></i></div>
                    <div class="uc-industry"><a href="<?php echo esc_url(home_url('/')); ?>service/" style="color:inherit;text-decoration:none;">Customer Support</a></div>
                    <div class="uc-title">First-call resolution across all languages</div>
                    <div class="uc-desc">Agents resolve queries on the first call regardless of language - eliminating hold times, interpreter wait, and repeat contacts driven by miscommunication.</div>
                    <div class="uc-result">Higher FCR across all languages</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ════════════════════════ FAQ ════════════════════════ -->
<!--<section class="sec">-->
<!--    <div class="container" style="max-width:780px">-->
<!--        <div class="eyebrow">FAQ</div>-->
<!--        <h2 class="sec-h xl">Questions? We've Got Answers</h2>-->
<!--        <div class="faq-list">-->
<!--            <div class="faq-item">-->
<!--                <div class="faq-q" onclick="toggleFaq(this)">What is AI-Connect used for? <span class="faq-toggle">+</span></div>-->
<!--                <div class="faq-a">AI-Connect is an AI voice translator that enables live call translation so two people can speak naturally in their own languages during a call. It listens to each speaker in real time, translates the spoken language instantly, and plays it back to the other party - bidirectionally - across 50+ languages. No human interpreter is required at any point.</div>-->
<!--            </div>-->
<!--            <div class="faq-item">-->
<!--                <div class="faq-q" onclick="toggleFaq(this)">How does AI call translation work in real time? <span class="faq-toggle">+</span></div>-->
<!--                <div class="faq-a">AI-Connect uses real-time speech recognition to listen to each speaker as they talk, processes the language for meaning and intent (not just words), and outputs the translation as audio in the listener's preferred language - all within under 200ms. The result is a conversation that feels natural and uninterrupted. Both parties speak at their normal pace throughout.</div>-->
<!--            </div>-->
<!--            <div class="faq-item">-->
<!--                <div class="faq-q" onclick="toggleFaq(this)">Is this automatic call translation or do users need to trigger it? <span class="faq-toggle">+</span></div>-->
<!--                <div class="faq-a">AI-Connect is fully automatic - no agent action is needed to trigger translation. When a call begins between parties speaking different languages, AI-Connect detects the languages and activates translation immediately. Agents don't need to press any button or select a language manually. The translation begins from the first word spoken.</div>-->
<!--            </div>-->
<!--            <div class="faq-item">-->
<!--                <div class="faq-q" onclick="toggleFaq(this)">Can AI-Connect be used for Salesforce call translation? <span class="faq-toggle">+</span></div>-->
<!--                <div class="faq-a">Yes - AI-Connect integrates natively with Salesforce. Translated calls are logged directly to the relevant Salesforce record - including a bilingual transcript, language pair, disposition, and resolution status. No middleware or external platform is required. Transcripts are fully searchable within Salesforce and can be used for agent training and quality reviews.</div>-->
<!--            </div>-->
<!--            <div class="faq-item">-->
<!--                <div class="faq-q" onclick="toggleFaq(this)">Can it work with other CRMs like Zoho? <span class="faq-toggle">+</span></div>-->
<!--                <div class="faq-a">Yes. While AI-Connect integrates natively with Salesforce, it also supports multi-environment integration via APIs - including Zoho CRM and other enterprise platforms. Speak to the 360 SMS team during your demo to explore the right integration path for your existing CRM setup.</div>-->
<!--            </div>-->
<!--            <div class="faq-item">-->
<!--                <div class="faq-q" onclick="toggleFaq(this)">Is it suitable for AI call translation for CRM teams like sales and support? <span class="faq-toggle">+</span></div>-->
<!--                <div class="faq-a">Yes - and it's one of the primary use cases. Sales teams use AI-Connect to pitch, negotiate, and close with international prospects without needing multilingual reps. Support teams resolve queries in the customer's preferred language on the first call, eliminating repeat contacts and interpreter wait time. Both teams benefit from auto-logged bilingual transcripts in Salesforce.</div>-->
<!--            </div>-->
<!--            <div class="faq-item">-->
<!--                <div class="faq-q" onclick="toggleFaq(this)">What happens during emergencies when human interpreters aren't available? <span class="faq-toggle">+</span></div>-->
<!--                <div class="faq-a">This is one of AI-Connect's most important advantages. Human interpreters have limited availability - they can't be on-call 24/7 across every language combination. AI-Connect is always available, instantly. For healthcare, emergency services, and other time-critical industries, this removes a critical gap in multilingual communication.</div>-->
<!--            </div>-->
<!--            <div class="faq-item">-->
<!--                <div class="faq-q" onclick="toggleFaq(this)">Does AI-Connect support industry-specific terminology? <span class="faq-toggle">+</span></div>-->
<!--                <div class="faq-a">Yes - through custom vocabulary support. You can train AI-Connect on your specific industry terms, brand language, product names, acronyms, and regulatory vocabulary. This is especially important for Pharma, Healthcare, Finance, and Legal, where mistranslating a technical term can have serious consequences. Custom vocabulary ensures accuracy holds up across the most complex and sensitive call types.</div>-->
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
                    <div class="ra-icon"><i class="bi bi-telephone-fill"></i></div>
                    <div class="ra-tag">Salesforce AI Agent · Voice</div>
                    <div class="ra-name">AI Voice Agent</div>
                    <div class="ra-desc">Qualify every inbound lead, answer FAQs, and book demos through human-like voice conversations - 24/7, autonomously.</div>
                    <div class="ra-link">Explore AI Voice Agent</div>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://360smsapp.com/aiva-ai-agent-call-coaching-transcription/" class="ra-card">
                    <div class="ra-icon"><i class="bi bi-mic-fill"></i></div>
                    <div class="ra-tag">Salesforce AI Agent · Call Intelligence</div>
                    <div class="ra-name">AIVA - Call Transcription &amp; Coaching</div>
                    <div class="ra-desc">Transcribes every call, reads sentiment, and coaches agents with smart suggestions mid-call. Up to 30% faster resolution.</div>
                    <div class="ra-link">Explore AIVA</div>
                </a>
            </div>
            <div class="col-12 col-md-4">
                <a href="https://360smsapp.com/360-llm-ai-chat-assistant/" class="ra-card">
                    <div class="ra-icon"><i class="bi bi-chat-dots-fill"></i></div>
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
            q.nextElementSibling.classList.remove('open');
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