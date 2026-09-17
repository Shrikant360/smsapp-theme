<?php

/**
 * Template Name: View Agent page
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">
<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">
<style>
    /* ── Brand tokens ── */
    :root {
        --sf: #0057B8;
        --sf-l: #E8F0FB;
        --sf-m: #CCE0F7;
        --grn: #1A7A2E;
        --grn-l: #E4FCE8;
        --ink: #1a1a1a;
        --ink2: #444;
        --ink3: #777;
        --ink4: #aaa;
        --bdr: #e2e2e2;
        --bg2: #F7F7F5;
        --bg3: #EFEFEB;
    }

    /* ── Global ── */
    body {
        font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
        color: var(--ink);
        font-size: 14px;
    }

    /* ── Hero ── */
    .hero-section {
        background: linear-gradient(150deg, #EEF4FF 0%, #F7F7F5 65%);
        padding: 64px 0 56px;
    }

    .hero-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        border-radius: 20px;
        padding: 4px 13px;
        font-size: 11px;
        font-weight: 700;
        border: 1px solid var(--sf-m);
        background: var(--sf-l);
        color: var(--sf);
        margin-bottom: 16px;
    }

    .ey-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: var(--sf);
        animation: pulse 2s infinite;
        flex-shrink: 0;
    }

    @keyframes pulse {

        0%,
        100% {
            opacity: 1
        }

        50% {
            opacity: .35
        }
    }

    .hero-title {
        font-size: 40px;
        font-weight: 800;
        color: var(--ink);
        line-height: 1.1;
        letter-spacing: -1.5px;
    }

    .hero-title span {
        color: var(--sf);
    }

    .hero-sub {
        font-size: 15px;
        color: var(--ink2);
        line-height: 1.7;
        max-width: 480px;
    }

    .btn-hp {
        padding: 12px 24px;
        font-size: 14px;
        font-weight: 700;
        border-radius: 8px;
        border: none;
        color: #fff;
        background: var(--sf);
    }

    .btn-hs {
        padding: 12px 20px;
        font-size: 14px;
        font-weight: 500;
        border-radius: 8px;
        border: 1px solid var(--bdr);
        background: #fff;
        color: var(--ink);
    }

    .hero-trust-item {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-size: 11px;
        color: var(--ink3);
        font-weight: 500;
    }

    .ht-dot {
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: var(--grn);
        flex-shrink: 0;
    }

    /* ── Hero visual / chat card ── */
    .agent-work-card {
        background: #fff;
        border-radius: 12px;
        border: 1px solid var(--bdr);
        box-shadow: 0 16px 48px rgba(0, 0, 0, .12), 0 4px 16px rgba(0, 0, 0, .07);
        overflow: hidden;
    }

    .aw-bar {
        background: #f4f3ef;
        border-bottom: 1px solid #e8e8e2;
        padding: 8px 14px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .aw-dots span {
        width: 9px;
        height: 9px;
        border-radius: 50%;
        display: inline-block;
    }

    .aw-dots span:nth-child(1) {
        background: #FF5F57;
    }

    .aw-dots span:nth-child(2) {
        background: #FEBC2E;
    }

    .aw-dots span:nth-child(3) {
        background: #28C840;
    }

    .aw-title {
        flex: 1;
        text-align: center;
        font-size: 10px;
        font-weight: 700;
        color: #999;
        letter-spacing: .05em;
    }

    .aw-body {
        padding: 16px;
    }

    .aiva-name {
        font-size: 12px;
        font-weight: 700;
        color: var(--ink);
    }

    .aiva-live {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 10px;
        font-weight: 700;
        color: #22C55E;
    }

    .aiva-live-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #22C55E;
        animation: pulse 1.2s infinite;
    }

    .tr-avatar {
        width: 24px;
        height: 24px;
        border-radius: 50%;
        flex-shrink: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 9px;
        font-weight: 700;
        color: #fff;
    }

    .tr-bubble {
        flex: 1;
        padding: 7px 10px;
        border-radius: 8px;
        font-size: 11px;
        line-height: 1.5;
    }

    .tr-agent .tr-bubble {
        background: var(--sf-l);
        color: var(--ink);
    }

    .tr-customer .tr-bubble {
        background: #f2f2ee;
        color: var(--ink);
    }

    .tr-label {
        font-size: 9px;
        font-weight: 700;
        margin-bottom: 2px;
    }

    .tr-agent .tr-label {
        color: var(--sf);
    }

    .tr-customer .tr-label {
        color: var(--ink3);
    }

    .coaching-box {
        background: #E8F0FB;
        border: 1px solid #DA5D45;
        border-radius: 8px;
        padding: 10px 12px;
    }

    .coaching-text {
        font-size: 11px;
        color: var(--ink);
        line-height: 1.5;
    }

    .coaching-text strong {
        color: #DA5D45;
        font-weight: 700;
    }

    .sentiment-row {
        display: flex;
        align-items: center;
        gap: 8px;
        padding-top: 8px;
        border-top: 1px solid var(--bdr);
        margin-top: 4px;
    }

    .sent-label {
        font-size: 10px;
        color: var(--ink3);
        font-weight: 600;
        width: 70px;
        flex-shrink: 0;
    }

    .sent-bar {
        flex: 1;
        height: 6px;
        background: #eee;
        border-radius: 3px;
        overflow: hidden;
    }

    .sent-fill {
        height: 100%;
        border-radius: 3px;
        background: #DA5D45;
    }

    .card-footer-status {
        background: #fafaf7;
        border-top: 1px solid #eee;
        padding: 7px 14px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .float-card {
        position: absolute;
        background: #fff;
        border: 1px solid var(--bdr);
        border-radius: 8px;
        padding: 10px 14px;
        box-shadow: 0 16px 48px rgba(0, 0, 0, .12), 0 4px 16px rgba(0, 0, 0, .07);
        font-size: 11px;
    }

    .fc-1 {
        bottom: -10px;
        left: -20px;
    }

    .fc-2 {
        top: 30px;
        right: -20px;
    }

    .fc-num {
        font-size: 18px;
        font-weight: 800;
        color: var(--sf);
        letter-spacing: -1px;
    }

    .fc-lbl {
        font-size: 10px;
        color: var(--ink3);
    }

    /* ── Stats strip - unique ag-stat-* classes, no overlap with new-header.css ── */
    .ag-stat-strip {
        border-top: 1px solid var(--bdr);
        border-bottom: 1px solid var(--bdr);
        padding: 16px 0;
    }

    .ag-stat-grid {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
    }

    .ag-stat-item {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 10px 18px;
        border-right: 1px solid var(--bdr);
    }

    .ag-stat-item:first-child {
        padding-left: 0;
    }

    .ag-stat-item:last-child {
        border-right: none;
        padding-right: 0;
    }

    .ag-stat-num {
        font-size: 22px;
        font-weight: 800;
        color: var(--ink);
        letter-spacing: -1px;
        line-height: 1.1;
    }

    .ag-stat-label {
        font-size: 11px;
        color: var(--ink3);
        line-height: 1.4;
        margin-top: 2px;
    }

    .ag-stat-badge {
        font-size: 10px;
        font-weight: 700;
        color: #0057B8;
        background: #E8F0FB;
        padding: 2px 6px;
        border-radius: 3px;
        white-space: nowrap;
    }

    /* Tablet: 3 cols */
    @media (max-width: 991px) {
        .ag-stat-grid {
            grid-template-columns: repeat(3, 1fr);
        }

        .ag-stat-item {
            border-right: 1px solid var(--bdr);
            border-bottom: 1px solid var(--bdr);
            padding: 14px 16px;
        }

        .ag-stat-item:first-child {
            padding-left: 16px;
        }

        .ag-stat-item:last-child {
            padding-right: 16px;
        }

        .ag-stat-item:nth-child(3n) {
            border-right: none;
        }

        .ag-stat-item:nth-last-child(-n+2) {
            border-bottom: none;
        }
    }

    /* Mobile: 2 cols */
    @media (max-width: 575px) {
        .ag-stat-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .ag-stat-item {
            padding: 14px;
            border-right: 1px solid var(--bdr);
            border-bottom: 1px solid var(--bdr);
        }

        .ag-stat-item:first-child {
            padding-left: 14px;
        }

        .ag-stat-item:last-child {
            padding-right: 14px;
        }

        .ag-stat-item:nth-child(3n) {
            border-right: 1px solid var(--bdr);
        }

        .ag-stat-item:nth-child(2n) {
            border-right: none;
        }

        .ag-stat-item:last-child {
            border-bottom: none;
            border-right: none;
        }

        .ag-stat-item:nth-last-child(2) {
            border-bottom: none;
        }

        .ag-stat-num {
            font-size: 20px;
        }
    }

    /* ── Section ── */
    .sec {
        padding: 56px 0;
    }

    .sec-alt {
        background: var(--bg2);
    }

    .sec-dark {
        background: #0f0f14;
    }

    .lbl {
        font-size: 10px;
        font-weight: 700;
        letter-spacing: .1em;
        text-transform: uppercase;
        color: var(--ink3);
        margin-bottom: 8px;
    }

    .sec-h {
        font-size: 28px;
        font-weight: 800;
        color: var(--ink);
        margin-bottom: 10px;
        letter-spacing: -.5px;
    }

    .sec-h.light {
        color: #fff;
    }

    .sec-sub {
        font-size: 15px;
        color: var(--ink2);
        line-height: 1.6;
        max-width: 600px;
        margin-bottom: 32px;
    }

    /* ── Filter tabs ── */
    .ftab {
        padding: 7px 16px;
        font-size: 12px;
        font-weight: 600;
        border-radius: 20px;
        cursor: pointer;
        border: 1px solid var(--bdr);
        background: #fff;
        color: var(--ink2);
        transition: all .12s;
        white-space: nowrap;
    }

    .ftab.on {
        background: var(--sf);
        color: #fff;
        border-color: var(--sf);
    }

    .outcome-hint {
        display: none;
        align-items: center;
        gap: 10px;
        background: var(--sf-l);
        border: 1px solid var(--sf-m);
        border-radius: 8px;
        padding: 10px 14px;
        margin-bottom: 20px;
        font-size: 13px;
        color: var(--ink);
    }

    .outcome-hint.show {
        display: flex;
    }

    .outcome-hint strong {
        color: var(--sf);
    }

    /* ── Agent cards ── */
    .ag-card {
        background: #fff;
        border: 1px solid var(--bdr);
        border-radius: 10px;
        padding: 20px;
        cursor: pointer;
        transition: all .15s;
        position: relative;
        height: 100%;
    }

    .ag-card:hover {
        box-shadow: 0 4px 16px rgba(0, 0, 0, .07);
        border-color: #bbb;
    }

    .ag-card.match {
        border-color: var(--sf);
        background: var(--sf-l);
    }

    .ag-card.ag-hidden {
        display: none;
    }

    .ag-card.best::after {
        content: 'Best match';
        position: absolute;
        top: 12px;
        right: 12px;
        font-size: 9px;
        font-weight: 700;
        letter-spacing: .05em;
        color: #fff;
        background: var(--grn);
        padding: 2px 7px;
        border-radius: 3px;
    }

    .ag-icon {
        font-size: 26px;
        margin-bottom: 12px;
    }

    .ag-icon i {
        color: var(--sf);
        font-size: 26px;
    }

    .ag-name {
        font-size: 14px;
        font-weight: 700;
        color: var(--ink);
        margin-bottom: 4px;
    }

    .ag-tagline {
        font-size: 11px;
        font-weight: 700;
        color: var(--sf);
        text-transform: uppercase;
        letter-spacing: .05em;
        margin-bottom: 6px;
    }

    .ag-desc {
        font-size: 12px;
        color: var(--ink3);
        line-height: 1.55;
        margin-bottom: 12px;
    }

    .ag-m {
        font-size: 11px;
        padding: 3px 8px;
        background: var(--bg2);
        border: 1px solid var(--bdr);
        border-radius: 4px;
        color: var(--ink2);
    }

    .ag-m strong {
        color: var(--sf);
        font-weight: 700;
    }

    .ag-link {
        font-size: 12px;
        color: var(--sf);
        font-weight: 600;
    }

    .native-badge {
        display: inline-flex;
        align-items: center;
        gap: 4px;
        font-size: 9px;
        font-weight: 700;
        padding: 2px 7px;
        border-radius: 3px;
        background: var(--sf-l);
        color: var(--sf);
        margin-bottom: 10px;
    }

    /* ── Native strip ── */
    .native-strip {
        background: #0057B8;
        padding: 32px 0;
        position: relative;
        overflow: hidden;
    }

    .ns-grid-bg {
        background-image: linear-gradient(rgba(255, 255, 255, .025) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, .025) 1px, transparent 1px);
        background-size: 32px 32px;
        position: absolute;
        inset: 0;
        pointer-events: none;
    }

    .ns-card {
        background: rgba(255, 255, 255, .05);
        border: 1px solid rgba(255, 255, 255, .1);
        border-radius: 10px;
        padding: 20px;
        height: 100%;
    }

    .ns-icon {
        font-size: 22px;
        margin-bottom: 10px;
    }

    .ns-icon i {
        color: #fff;
        font-size: 22px;
    }

    .ns-title {
        font-size: 13px;
        font-weight: 700;
        color: #fff;
        margin-bottom: 5px;
    }

    .ns-desc {
        font-size: 11px;
        color: rgba(255, 255, 255, .45);
        line-height: 1.6;
    }

    /* ── ROI ── */
    .roi-card {
        display: flex;
        gap: 14px;
        padding: 14px 16px;
        border-radius: 10px;
        border: 1px solid var(--bdr);
        background: #fff;
        cursor: pointer;
        transition: all .15s;
    }

    .roi-card:hover {
        box-shadow: 0 4px 16px rgba(0, 0, 0, .07);
    }

    .roi-card.active {
        border-color: var(--sf);
        background: var(--sf-l);
    }

    .roi-num {
        font-size: 30px;
        font-weight: 800;
        color: var(--sf);
        letter-spacing: -1.5px;
        line-height: 1;
        flex-shrink: 0;
        min-width: 80px;
    }

    .roi-t {
        font-size: 13px;
        font-weight: 700;
        color: var(--ink);
        margin-bottom: 3px;
    }

    .roi-d {
        font-size: 11px;
        color: var(--ink3);
        line-height: 1.55;
    }

    .roi-ag {
        font-size: 10px;
        font-weight: 700;
        color: #0057B8;
        margin-top: 4px;
        background: #E8F0FB;
        display: inline-flex;
        padding: 2px 6px;
        border-radius: 3px;
    }

    .roi-vis-header {
        font-size: 12px;
        font-weight: 700;
        color: var(--ink3);
        text-transform: uppercase;
        letter-spacing: .07em;
        margin-bottom: 4px;
    }

    .bar-row {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
    }

    .bar-lbl {
        font-size: 12px;
        color: var(--ink2);
        width: 160px;
        flex-shrink: 0;
        line-height: 1.3;
    }

    .bar-track {
        flex: 1;
        height: 8px;
        background: var(--bg3);
        border-radius: 4px;
        overflow: hidden;
    }

    .bar-fill {
        height: 100%;
        border-radius: 4px;
        background: var(--sf);
        transition: width .6s ease;
    }

    .bar-val {
        font-size: 11px;
        font-weight: 700;
        color: var(--sf);
        width: 50px;
        text-align: right;
    }

    .roi-callout {
        background: #0057b8;
        border-radius: 10px;
        padding: 20px 24px;
        margin-top: 8px;
    }

    .rc-quote {
        font-size: 13px;
        color: rgba(255, 255, 255, .65);
        line-height: 1.7;
        font-style: italic;
        margin-bottom: 10px;
    }

    .rc-attr {
        font-size: 11px;
        font-weight: 700;
        color: rgba(255, 255, 255, .35);
    }

    /* ── Comparison table ── */
    .cmp-tbl {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        border: 1px solid #e2e8f0;
        border-radius: 12px;
        overflow: hidden;
        font-size: 13px;
        background: #fff;
    }

    .cmp-tbl th,
    .cmp-tbl td {
        padding: 16px 24px;
        border-bottom: 1px solid #e2e8f0;
        border-right: 1px solid #e2e8f0;
        vertical-align: middle;
    }

    .cmp-tbl th:last-child,
    .cmp-tbl td:last-child {
        border-right: none;
    }

    .cmp-tbl tr:last-child td {
        border-bottom: none;
    }

    .cmp-tbl th {
        font-weight: 700;
        color: #1a1a1a;
        background: #F7FAFF;
        text-align: left;
    }

    .cmp-tbl th:not(:first-child) {
        text-align: center;
    }

    .cmp-tbl td:first-child {
        font-weight: 500;
        color: #1a1a1a;
    }

    .cmp-tbl td:not(:first-child) {
        text-align: center;
    }

    .cmp-tbl th.col-360 {
        background: #eff6ff !important;
        color: #0057B8 !important;
    }

    .cmp-tbl td.col-360 {
        background: #f4fcf7;
    }

    .th-subtitle {
        display: block;
        font-size: 10px;
        font-weight: 400;
        color: #0057B8;
        margin-top: 4px;
        text-transform: none;
    }

    .ck-tick {
        color: #22c55e;
        font-weight: 700;
        font-size: 15px;
        margin-right: 4px;
    }

    .cx-cross {
        color: #ef4444;
        font-weight: 700;
        font-size: 15px;
        margin-right: 4px;
    }

    .text-val-blue {
        color: #0057B8;
        font-weight: 700;
    }

    .text-val-muted {
        color: #777;
        font-weight: 500;
    }

    .text-val-dark {
        color: #1a1a1a;
        font-weight: 500;
    }

    /* ── FAQ ── */
    .faq-wrap {
        border: 1px solid var(--bdr);
        border-radius: 12px;
        overflow: hidden;
        margin-top: 28px;
    }

    .faq-item {
        border-bottom: 1px solid var(--bdr);
    }

    .faq-item:last-child {
        border-bottom: none;
    }

    .faq-q {
        padding: 16px 20px;
        font-size: 13px;
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
        color: var(--sf);
    }

    .faq-tog {
        font-size: 18px;
        color: var(--ink3);
        transition: transform .2s;
        flex-shrink: 0;
        margin-left: 12px;
    }

    .faq-q.open .faq-tog {
        transform: rotate(45deg);
        color: var(--sf);
    }

    .faq-a {
        display: none;
        padding: 0 20px 14px;
        font-size: 13px;
        color: var(--ink2);
        line-height: 1.7;
        background: #fff;
    }

    .faq-a.open {
        display: block;
    }

    /* ── CTA section ── */
    .cta-section {
        padding: 64px 0;
        background: linear-gradient(160deg, var(--sf) 0%, #003A80 100%);
        position: relative;
        overflow: hidden;
    }

    .cta-grid-bg {
        position: absolute;
        inset: 0;
        background-image: linear-gradient(rgba(255, 255, 255, .04) 1px, transparent 1px), linear-gradient(90deg, rgba(255, 255, 255, .04) 1px, transparent 1px);
        background-size: 36px 36px;
        pointer-events: none;
    }

    .cta-left h2 {
        font-size: 28px;
        font-weight: 800;
        color: #fff;
        letter-spacing: -.5px;
        line-height: 1.2;
        margin-bottom: 10px;
    }

    .cta-left p {
        font-size: 14px;
        color: rgba(255, 255, 255, .7);
        line-height: 1.7;
        margin-bottom: 20px;
    }

    .cta-trust-item {
        display: flex;
        align-items: center;
        gap: 8px;
        font-size: 12px;
        color: rgba(255, 255, 255, .7);
        margin-bottom: 8px;
    }

    .cta-trust-item::before {
        content: '✓';
        font-weight: 700;
        color: #22C55E;
    }

    .cta-form-card {
        background: #fff;
        border-radius: 12px;
        padding: 24px;
        box-shadow: 0 16px 48px rgba(0, 0, 0, .25);
    }

    .form-title {
        font-size: 16px;
        font-weight: 800;
        color: var(--ink);
        letter-spacing: -.3px;
        margin-bottom: 4px;
    }

    .form-sub {
        font-size: 12px;
        color: var(--ink3);
        margin-bottom: 18px;
    }

    .form-label {
        font-size: 11px;
        font-weight: 700;
        color: var(--ink2);
        margin-bottom: 4px;
        display: block;
        letter-spacing: .02em;
    }

    .form-control,
    .form-select {
        font-size: 13px;
        padding: 9px 12px;
        border: 1px solid var(--bdr);
        border-radius: 6px;
        color: var(--ink);
    }

    .form-control:focus,
    .form-select:focus {
        border-color: var(--sf);
        box-shadow: none;
    }

    .btn-submit {
        width: 100%;
        padding: 12px;
        font-size: 14px;
        font-weight: 700;
        border-radius: 8px;
        border: none;
        color: #fff;
        background: var(--sf);
    }

    .btn-submit:hover {
        background: #003A80;
    }

    .form-privacy {
        font-size: 10px;
        color: var(--ink4);
        text-align: center;
        margin-top: 10px;
        line-height: 1.5;
    }


    /* ── ROI detail box (JS-generated) ── */
    #roi-detail {
        background: var(--sf-l);
        border: 1px solid var(--sf-m);
        border-radius: 8px;
        padding: 16px;
        margin-top: 14px;
    }
</style>
</head>

<body>


    <!-- ══ HERO ════════════════════════════════════════════════════════════════ -->
    <section class="hero-section">
        <div class="container" style="max-width:1100px">
            <div class="row align-items-center g-5">
                <!-- Left -->
                <div class="col-lg-6">
                    <div class="hero-eyebrow">
                        <div class="ey-dot"></div> Agentforce AI Agents · SMS · WhatsApp · Voice · CTI · Native Salesforce
                    </div>
                    <h1 class="hero-title mb-3">Automate Communication with <span>360 AI Agents</span> Built on Agentforce.</h1>
                    <p class="hero-sub mb-4">Keep texts, sales calls, and chats on autopilot with 360 AI Agents built on Agentforce. AI Voice, AI Chatbot, Agentforce SMS integration, and CTI - automate workflows, boost conversions, and leverage real-time intelligence at every customer interaction.</p>
                    <div class="d-flex gap-2 flex-wrap mb-3">
                        <button class="btn-hp open-popup-form-on-click">Unlock More Opportunities</button>
                        <button class="btn-hs"><a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank">Book a demo</a></button>
                    </div>
                    <div class="d-flex flex-wrap gap-3">
                        <div class="hero-trust-item">
                            <div class="ht-dot"></div> Agentforce AI agents - native Salesforce
                        </div>
                        <div class="hero-trust-item">
                            <div class="ht-dot"></div> Salesforce Summit Partner
                        </div>
                        <div class="hero-trust-item">
                            <div class="ht-dot"></div> Works with or without Agentforce licence
                        </div>
                        <div class="hero-trust-item">
                            <div class="ht-dot"></div> SMS · WhatsApp · Voice · 15+ channels
                        </div>
                    </div>
                </div>

                <!-- Right - chat visual -->
                <div class="col-12 col-lg-6 anim anim-3 d-flex align-items-center justify-content-center" style="background:none; box-shadow:none; border:none; padding:0;">
                    <img
                        src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/05/Hero-visual_-360-AI-Chatbot-Agentforce-SMS-at-work.png"
                        alt="360 AI Chatbot · Agentforce SMS · Qualifying Lead"
                        class="img-fluid"
                        style="width:100%; height:auto; object-fit:contain; display:block; background:transparent; box-shadow:none;" />
                </div>
            </div>
        </div>
    </section>
    <!-- ══ PROOF STRIP ══════════════════════════════════════════════════════════ -->
    <div class="ag-stat-strip">
        <div class="container" style="max-width:1100px">
            <div class="ag-stat-grid">
                <!-- 1,200+ - no badge -->
                <div class="ag-stat-item">
                    <div class="ag-stat-num">1,200+</div>
                    <div class="ag-stat-label">AgentExchange reviews · 5★ rated</div>
                </div>
                <!-- 15+ - badge inline next to number -->
                <div class="ag-stat-item">
                    <div class="d-flex align-items-center gap-2 mb-1">
                        <div class="ag-stat-num">15+</div>
                        <span class="ag-stat-badge">Agentforce</span>
                    </div>
                    <div class="ag-stat-label">Channels - Agentforce SMS, WhatsApp, voice &amp; more</div>
                </div>
                <!-- 24/7 - no badge -->
                <div class="ag-stat-item">
                    <div class="ag-stat-num">24/7</div>
                    <div class="ag-stat-label">Always-on AI engagement - Agentforce AI messaging never sleeps</div>
                </div>
                <!-- 50+ - badge inline next to number -->
                <div class="ag-stat-item">
                    <div class="d-flex align-items-center gap-2 mb-1">
                        <div class="ag-stat-num">50+</div>
                        <span class="ag-stat-badge">Live</span>
                    </div>
                    <div class="ag-stat-label">Languages - AI Connect real-time call translation</div>
                </div>
                <!-- Hours - no badge -->
                <div class="ag-stat-item">
                    <div class="ag-stat-num">Hours</div>
                    <div class="ag-stat-label">To deploy. Same-day live Agentforce AI agents, not weeks</div>
                </div>
            </div>
        </div>
    </div>

    <!-- ══ SECTION 1 - FIND YOUR AGENT ════════════════════════════════════════ -->
    <section class="sec" id="agents">
        <div class="container" style="max-width:1100px">
            <div class="lbl">Agentforce AI Agents for Salesforce - find yours</div>
            <div class="sec-h">Which Agentforce AI Agent Does Your Team Need?</div>
            <p class="sec-sub mb-4">Each 360 AI Agent is purpose-built for Salesforce - running natively inside your org as an Agentforce AI messaging agent, AI voice agent, or automation agent, with no middleware and no Agentforce licence required to get started.</p>

            <!-- Filter tabs -->
            <div class="d-flex flex-wrap gap-1 mb-3">
                <div class="ftab on" onclick="filterBy('all',this)">All agents</div>
                <div class="ftab" onclick="filterBy('sms',this)">Agentforce SMS &amp; chat</div>
                <div class="ftab" onclick="filterBy('calls',this)">Improve every call</div>
                <div class="ftab" onclick="filterBy('leads',this)">Never lose a lead</div>
                <div class="ftab" onclick="filterBy('global',this)">Serve global customers</div>
                <div class="ftab" onclick="filterBy('hire',this)">Hire without the admin</div>
                <div class="ftab" onclick="filterBy('ops',this)">Automate Salesforce ops</div>
            </div>

            <div class="outcome-hint" id="ohint">
                <i class="bi bi-bullseye" style="color:var(--sf);font-size:16px;"></i>
                <div><strong id="ohint-t"></strong> - <span id="ohint-s"></span></div>
            </div>

            <!-- Agent grid -->
            <div class="row g-3" id="ag-grid">

                <!-- 360 AI Chatbot -->
                <div class="col-lg-4 col-md-6" id="card-chatbot">
                    <div class="ag-card" data-t="sms leads" onclick="location.href='https://360smsapp.com/360-llm-ai-chat-assistant/'">
                        <div class="native-badge">⚡ Agentforce AI Chatbot · SMS &amp; WhatsApp</div>
                        <div class="ag-icon"><i class="bi bi-chat-dots"></i></div>
                        <div class="ag-tagline">Agentforce AI Chatbot · Messaging</div>
                        <div class="ag-name">360 AI Chatbot</div>
                        <div class="ag-desc">Always-on Agentforce AI chatbot for SMS, WhatsApp, and web chat inside Salesforce. Qualifies prospects automatically, answers FAQs instantly, books demos in real time - 24/7, even when your team is offline.</div>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="ag-m">24/7 qualification</span>
                            <span class="ag-m">15+ channels</span>
                            <span class="ag-m">Auto demo booking</span>
                        </div>
                        <div class="ag-link"><a href="<?php echo esc_url(home_url('/')); ?>360-llm-ai-chat-assistant" target="_blank">Explore AI Chatbot</a></div>
                    </div>
                </div>

                <!-- 360 AI Texting Agent -->
                <div class="col-lg-4 col-md-6">
                    <div class="ag-card" data-t="sms leads">
                        <div class="native-badge">⚡ Agentforce AI Texting Agent · SMS Automation</div>
                        <div class="ag-icon"><i class="bi bi-envelope"></i></div>
                        <div class="ag-tagline">AI SMS Agent for Salesforce · Messaging AI</div>
                        <div class="ag-name">360 AI Texting Agent</div>
                        <div class="ag-desc">Agentforce AI messaging agent that translates and polishes outbound SMS, scores communication quality, detects tone and intent, reduces spam risk, and improves reply rates with human-like AI SMS automation for Salesforce.</div>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="ag-m">Tone &amp; intent detection</span>
                            <span class="ag-m">Spam risk scoring</span>
                            <span class="ag-m">Higher reply rates</span>
                        </div>
                        <!--<div class="ag-link">Explore AI Texting Agent</div>-->
                    </div>
                </div>

                <!-- 360 AI Voice Bot -->
                <div class="col-lg-4 col-md-6">
                    <div class="ag-card" data-t="calls leads" onclick="location.href='https://360smsapp.com/conversational-ai-voice-agent/'">
                        <div class="native-badge">⚡ Agentforce AI Voice Agent · Salesforce Native</div>
                        <div class="ag-icon"><i class="bi bi-telephone"></i></div>
                        <div class="ag-tagline">Agentforce AI Voice Agents · Calling</div>
                        <div class="ag-name">360 AI Voice Agent</div>
                        <div class="ag-desc">Agentforce AI voice agent that handles real-time inbound and outbound calls autonomously - answers FAQs, handles objections, books demos automatically, and logs every outcome natively to Salesforce. No Agentforce Voice licence required.</div>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="ag-m">24/7 call handling</span>
                            <span class="ag-m">Auto demo booking</span>
                            <span class="ag-m">Full CRM logging</span>
                        </div>
                        <div class="ag-link"><a href="<?php echo esc_url(home_url('/')); ?>conversational-ai-voice-agent/" target="_blank">Explore AI Voice Agent</a></div>
                    </div>
                </div>

                <!-- 360 CTI -->
                <div class="col-lg-4 col-md-6">
                    <div class="ag-card" data-t="calls ops" onclick="location.href='https://360smsapp.com/aiva-ai-agent-call-coaching-transcription/'">
                        <div class="native-badge">⚡ AI Calling Bot Salesforce · CTI</div>
                        <div class="ag-icon"><i class="bi bi-mic"></i></div>
                        <div class="ag-tagline">AI Coaching &amp; CTI Intelligence · Calls</div>
                        <div class="ag-name">360 CTI - Transcription &amp; Coaching</div>
                        <div class="ag-desc">AI calling bot for Salesforce that combines real-time call transcription, smart mid-call suggestions, and live agent coaching - capturing every word accurately while improving closure rates and telephony efficiency.</div>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="ag-m"><strong>30%</strong> faster resolution</span>
                            <span class="ag-m"><strong>40–50%</strong> less training</span>
                            <span class="ag-m"><strong>20%</strong> higher CSAT</span>
                        </div>
                        <div class="ag-link"><a href="<?php echo esc_url(home_url('/')); ?>aiva-ai-agent-call-coaching-transcription/" target="_blank">Explore 360 CTI</a></div>
                    </div>
                </div>

                <!-- 360 Vibe -->
                <div class="col-lg-4 col-md-6">
                    <div class="ag-card" data-t="ops" onclick="location.href='https://360smsapp.com/automated-metadata-generator-archbuddy-ai/'">
                        <div class="native-badge">⚡ Salesforce AI Automation · Vibe Coding </div>
                        <div class="ag-icon"><i class="bi bi-lightning"></i></div>
                        <div class="ag-tagline">AI Automation Salesforce · Admin</div>
                        <div class="ag-name">360 Vibe - Salesforce Automation</div>
                        <div class="ag-desc">AI Automation for Salesforce admin tasks - auto-creates triggers, generates layouts and validations, builds reports, and writes Apex on command. Reduce Salesforce admin workload dramatically without a developer queue.</div>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="ag-m">Auto triggers &amp; flows</span>
                            <span class="ag-m">Report generation</span>
                            <span class="ag-m">No dev queue</span>
                        </div>
                        <div class="ag-link"><a href="<?php echo esc_url(home_url('/')); ?>automated-metadata-generator-archbuddy-ai/" target="_blank">Explore 360 Vibe</a></div>
                    </div>
                </div>

                <!-- AI Sales Assistant -->
                <div class="col-lg-4 col-md-6">
                    <div class="ag-card" data-t="global calls" onclick="location.href='https://360smsapp.com/ai-connect-live-call-translating-agent/'">
                        <div class="native-badge">⚡ Agentforce AI Messaging · Translation</div>
                        <div class="ag-icon"><i class="bi bi-globe"></i></div>
                        <div class="ag-tagline">Agentforce Messaging Platform · Multilingual</div>
                        <div class="ag-name">360 AI Sales Assistant</div>
                        <div class="ag-desc">Global sales enablement with real-time call translation across 50+ languages inside Salesforce. Your agent speaks in their language, the customer hears theirs - enabling multilingual AI WhatsApp and voice conversations that convert globally.</div>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="ag-m"><strong>50+</strong> languages live</span>
                            <span class="ag-m">Zero latency</span>
                            <span class="ag-m">No interpreters</span>
                        </div>
                        <div class="ag-link"><a href="<?php echo esc_url(home_url('/')); ?>ai-connect-live-call-translating-agent/" target="_blank">Explore AI Sales Assistant</a></div>
                    </div>
                </div>

                <!-- MIRA -->
                <div class="col-lg-4 col-md-6">
                    <div class="ag-card" data-t="hire ops" onclick="location.href='https://360smsapp.com/mira-ai-agent-recruitment-tool/'">
                        <div class="native-badge">⚡ Agentforce AI Agent · Independent</div>
                        <div class="ag-icon"><i class="bi bi-bullseye"></i></div>
                        <div class="ag-tagline">Agentforce AI Agents · HR &amp; Talent</div>
                        <div class="ag-name">MIRA - AI Recruiting Agent</div>
                        <div class="ag-desc">Autonomous Salesforce AI agent that handles the entire recruitment workflow - semantic screening, AI-generated interview questions, scheduling, and CRM updates - from application to booked interview the same day.</div>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="ag-m"><strong>35%</strong> faster hiring</span>
                            <span class="ag-m"><strong>49%</strong> less prep time</span>
                            <span class="ag-m">Auto CRM updates</span>
                        </div>
                        <div class="ag-link"><a href="<?php echo esc_url(home_url('/')); ?>mira-ai-agent-recruitment-tool/" target="_blank">Explore MIRA</a></div>
                    </div>
                </div>

                <!-- LinkedIn Lead Parsing -->
                <div class="col-lg-4 col-md-6">
                    <div class="ag-card" data-t="leads sms" onclick="location.href='https://360smsapp.com/linkedin-lead-parsing-ai-agent/'">
                        <div class="native-badge">⚡ Agentforce AI Agent · Independent</div>
                        <div class="ag-icon"><i class="bi bi-briefcase"></i></div>
                        <div class="ag-tagline">AI Messaging Automation Salesforce · Pipeline</div>
                        <div class="ag-name">LinkedIn Lead Parsing Agent</div>
                        <div class="ag-desc">AI sales intelligence tool that parses LinkedIn intent, extracts client requirements, generates personalized Agentforce AI messaging outreach, and syncs leads and context back to Salesforce - pipeline built without manual scanning.</div>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="ag-m">Intent parsing</span>
                            <span class="ag-m">AI outreach drafts</span>
                            <span class="ag-m">CRM auto-sync</span>
                        </div>
                        <div class="ag-link"><a href="<?php echo esc_url(home_url('/')); ?>linkedin-lead-parsing-ai-agent/" target="_blank">Explore LinkedIn Agent</a> </div>
                    </div>
                </div>

                <!-- SOW & WBS Generator -->
                <div class="col-lg-4 col-md-6">
                    <div class="ag-card" data-t="ops leads" onclick="location.href='https://360smsapp.com/pre-sales-document-parsing-ai-agent/'">
                        <div class="native-badge">⚡ Agentforce AI Agent · Independent</div>
                        <div class="ag-icon"><i class="bi bi-file-earmark-text"></i></div>
                        <div class="ag-tagline">Agentforce AI Messaging Platform · Pre-Sales</div>
                        <div class="ag-name">SOW &amp; WBS Generator</div>
                        <div class="ag-desc">Automates pre-sales documentation inside Salesforce - parses RFPs, discovery transcripts, and audio, then generates complete Statements of Work and Work Breakdown Structures in under an hour. No developer dependency.</div>
                        <div class="d-flex flex-wrap gap-1 mb-3">
                            <span class="ag-m">Days → <strong>&lt;1 hour</strong></span>
                            <span class="ag-m">Audio &amp; PDF parsing</span>
                            <span class="ag-m">Auto WBS build</span>
                        </div>
                        <div class="ag-link"><a href="<?php echo esc_url(home_url('/')); ?>pre-sales-document-parsing-ai-agent/" target="_blank">Explore SOW Agent</a></div>
                    </div>
                </div>

            </div><!-- /row -->
        </div>
    </section>

    <hr class="m-0" style="border-color:var(--bdr)">

    <!-- ══ NATIVE CALLOUT STRIP ════════════════════════════════════════════════ -->
    <div class="native-strip">
        <div class="ns-grid-bg"></div>
        <div class="container position-relative" style="max-width:1100px;z-index:1">
            <div class="text-center mb-4">
                <div style="font-size:10px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:rgba(255,255,255,.35);margin-bottom:8px">Agentforce AI Agents Platform</div>
                <div style="font-size:20px;font-weight:800;color:#fff;letter-spacing:-.5px">Two Modes. Zero Middleware. 100% Salesforce-Native Agentforce AI Messaging Automation.</div>
            </div>
            <div class="row g-3">
                <div class="col-md-4">
                    <div class="ns-card">
                        <div class="ns-icon"><i class="bi bi-lightning-charge"></i></div>
                        <div class="ns-title">Agentforce Compatible</div>
                        <div class="ns-desc">All 360 AI agents work alongside Salesforce Agentforce - extending your Agentforce AI agents with SMS, WhatsApp, voice, and 15+ channels. The most complete Agentforce SMS integration on the AgentExchange. Fits into your existing agentic apps seamlessly.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ns-card">
                        <div class="ns-icon"><i class="bi bi-unlock"></i></div>
                        <div class="ns-title">No Agentforce Licence Needed</div>
                        <div class="ns-desc">Every 360 AI agent runs fully independently inside Salesforce - no Agentforce licence required. AI Voice Agent, AI Chatbot, AI Texting Agent, and CTI all operate natively in any Salesforce org. Start automating today without any additional licence cost.</div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="ns-card">
                        <div class="ns-icon"><i class="bi bi-globe"></i></div>
                        <div class="ns-title">SMS · WhatsApp · Voice · 15+ Channels</div>
                        <div class="ns-desc">One Agentforce AI messaging platform covers every channel - Agentforce chatbot SMS, AI WhatsApp chatbot for Salesforce, AI voice agents, CTI coaching, and real-time translation. Unified logging, unified automation, one Salesforce org.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ══ SECTION 3 - ROI ══════════════════════════════════════════════════════ -->
    <section class="sec">
        <div class="container" style="max-width:1100px">
            <div class="lbl">Agentforce AI messaging &amp; automation - business impact</div>
            <div class="sec-h">Real Numbers from Real Agentforce Deployments</div>
            <p class="sec-sub mb-4">Product-measured and customer-reported across 360 AI Agents built on Agentforce. Not projections.</p>

            <div class="row g-4">
                <!-- ROI cards -->
                <div class="col-lg-5">
                    <div class="d-flex flex-column gap-2">
                        <div class="roi-card active" onclick="setRoi(this)">
                            <div class="roi-num">3×</div>
                            <div class="roi-body">
                                <div class="roi-t">More demos booked via Agentforce SMS</div>
                                <div class="roi-d">360 AI Chatbot qualifies inbound leads 24/7 across SMS and WhatsApp - every lead gets a response, every response is logged to Salesforce</div>
                                <span class="roi-ag">360 AI Chatbot · Agentforce SMS Integration</span>
                            </div>
                        </div>
                        <div class="roi-card" onclick="setRoi(this)">
                            <div class="roi-num">30%</div>
                            <div class="roi-body">
                                <div class="roi-t">Faster call resolution with AI CTI coaching</div>
                                <div class="roi-d">360 CTI transcribes and coaches agents mid-call - accurate answers, first time, every time, with every outcome auto-logged to Salesforce</div>
                                <span class="roi-ag">360 CTI · AI Calling Bot Salesforce</span>
                            </div>
                        </div>
                        <div class="roi-card" onclick="setRoi(this)">
                            <div class="roi-num">40–50%</div>
                            <div class="roi-body">
                                <div class="roi-t">Less agent training time</div>
                                <div class="roi-d">New reps ramp faster - CTI coaches live instead of waiting for post-call review. Agentforce AI messaging handles tier-1 queries automatically</div>
                                <span class="roi-ag">360 CTI · Agentforce AI Messaging Agent</span>
                            </div>
                        </div>
                        <div class="roi-card" onclick="setRoi(this)">
                            <div class="roi-num">50+</div>
                            <div class="roi-body">
                                <div class="roi-t">Languages - real-time call translation</div>
                                <div class="roi-d">360 AI Sales Assistant translates calls live across 50+ languages - global Agentforce messaging without interpreters or extra headcount</div>
                                <span class="roi-ag">360 AI Sales Assistant · Agentforce Messaging Platform</span>
                            </div>
                        </div>
                        <div class="roi-card" onclick="setRoi(this)">
                            <div class="roi-num">35%</div>
                            <div class="roi-body">
                                <div class="roi-t">Faster hiring with MIRA AI Recruiting</div>
                                <div class="roi-d">MIRA screens, generates interview questions, schedules, and updates Salesforce end-to-end - same-day from application to booked interview</div>
                                <span class="roi-ag">MIRA · Agentforce AI Agent · Recruiting</span>
                            </div>
                        </div>
                        <div class="roi-card" onclick="setRoi(this)">
                            <div class="roi-num">&lt;1hr</div>
                            <div class="roi-body">
                                <div class="roi-t">RFP to complete SOW &amp; WBS</div>
                                <div class="roi-d">Pre-sales docs that took days now take under an hour - deals stop stalling at proposals, BA teams run independently without dev input</div>
                                <span class="roi-ag">SOW Generator · Agentforce AI Agents</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Visual bars -->
                <div class="col-lg-7">
                    <div class="roi-visual">
                        <div class="roi-vis-header">360 AI Agents on Agentforce vs teams without - measured impact</div>
                        <div class="bar-row">
                            <div class="bar-lbl">Demos booked - Agentforce SMS</div>
                            <div class="bar-track">
                                <div class="bar-fill" style="width:90%"></div>
                            </div>
                            <div class="bar-val">3× ↑</div>
                        </div>
                        <div class="bar-row">
                            <div class="bar-lbl">Call resolution speed</div>
                            <div class="bar-track">
                                <div class="bar-fill" style="width:70%"></div>
                            </div>
                            <div class="bar-val">30% ↑</div>
                        </div>
                        <div class="bar-row">
                            <div class="bar-lbl">Agent training speed</div>
                            <div class="bar-track">
                                <div class="bar-fill" style="width:85%"></div>
                            </div>
                            <div class="bar-val">45% ↑</div>
                        </div>
                        <div class="bar-row">
                            <div class="bar-lbl">Languages - AI voice &amp; chat</div>
                            <div class="bar-track">
                                <div class="bar-fill" style="width:100%"></div>
                            </div>
                            <div class="bar-val">50+ ↑</div>
                        </div>
                        <div class="bar-row">
                            <div class="bar-lbl">Recruitment admin</div>
                            <div class="bar-track">
                                <div class="bar-fill" style="width:70%"></div>
                            </div>
                            <div class="bar-val">35% ↓</div>
                        </div>
                        <div class="bar-row">
                            <div class="bar-lbl">Pre-sales doc time</div>
                            <div class="bar-track">
                                <div class="bar-fill" style="width:95%"></div>
                            </div>
                            <div class="bar-val">90% ↓</div>
                        </div>
                        <div class="bar-row">
                            <div class="bar-lbl">After-hours lead loss</div>
                            <div class="bar-track">
                                <div class="bar-fill" style="width:100%"></div>
                            </div>
                            <div class="bar-val">→ 0</div>
                        </div>

                        <div class="roi-callout">
                            <div class="rc-quote">"We have estimated that we have saved over $100,000 in operational costs using the 360 SMS platform. It's so innovative that we've already seen a number of productive features and enhancements over a short period."</div>
                            <div class="rc-attr">Verified · AgentExchange Customer Review · 5★</div>
                        </div>

                        <div class="d-flex gap-2 align-items-start p-3 mt-2 rounded" style="background:var(--sf-l);border:1px solid var(--sf-m)">
                            <div style="font-size:22px;flex-shrink:0;color:var(--sf)"><i class="bi bi-lightning-charge-fill"></i></div>
                            <div>
                                <div style="font-size:12px;font-weight:700;color:var(--sf);margin-bottom:3px">Agentforce SMS + voice + CTI - 100% Salesforce native</div>
                                <div style="font-size:11px;color:var(--ink2);line-height:1.55">Every 360 AI agent runs inside your existing Salesforce org. No external platform, no data leaving your environment, no Agentforce licence required to get started.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr class="m-0" style="border-color:var(--bdr)">

    <!-- ══ COMPARISON TABLE ════════════════════════════════════════════════════ -->
    <section class="sec sec-alt">
        <div class="container" style="max-width:1100px">
            <div class="lbl">Agentforce AI agents platform - how we compare</div>
            <div class="sec-h">A Complete Agentforce AI Messaging Platform - Not Just a Channel Add-On</div>
            <p class="sec-sub">Most tools add SMS or WhatsApp as a channel for Agentforce. 360 SMS App is a full Agentforce AI messaging platform - autonomous AI agents for voice, SMS, chatbot, CTI, recruiting, admin, and pre-sales, running natively inside Salesforce with or without an Agentforce licence.</p>

            <div class="table-responsive">
                <table class="cmp-tbl">
                    <thead>
                        <tr>
                            <th>Elements</th>
                            <th class="col-360">
                                🏆 360 SMS
                                <span class="th-subtitle">#1 Rated · Salesforce-Native · 10+ Years</span>
                            </th>
                            <th>Others</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Support</td>
                            <td class="col-360"><span class="text-val-blue">Free</span></td>
                            <td><span class="text-val-muted">Paid</span></td>
                        </tr>
                        <tr>
                            <td>Natively-built</td>
                            <td class="col-360"><span class="ck-tick">✓</span><span class="text-val-dark">Yes</span></td>
                            <td><span class="cx-cross">✕</span><span class="text-val-dark">No</span></td>
                        </tr>
                        <tr>
                            <td>Salesforce Cloud Support</td>
                            <td class="col-360"><span class="text-val-blue">All Clouds</span></td>
                            <td><span class="text-val-muted">Limited to 1–2 clouds</span></td>
                        </tr>
                        <tr>
                            <td>Channels</td>
                            <td class="col-360"><span class="text-val-blue">15 Channels</span></td>
                            <td><span class="text-val-muted">Limited to 3–4 channels</span></td>
                        </tr>
                        <tr>
                            <td>Chatbot</td>
                            <td class="col-360"><span class="text-val-blue">No-code</span></td>
                            <td><span class="text-val-muted">Complex</span></td>
                        </tr>
                        <tr>
                            <td>AI Capabilities</td>
                            <td class="col-360"><span class="ck-tick">✓</span><span class="text-val-dark">Yes</span></td>
                            <td><span class="cx-cross">✕</span><span class="text-val-dark">No</span></td>
                        </tr>
                        <tr>
                            <td>Drip Campaigns</td>
                            <td class="col-360"><span class="text-val-blue">Multi-channel</span></td>
                            <td><span class="text-val-muted">Single channel</span></td>
                        </tr>
                        <tr>
                            <td>Unified Messaging Console</td>
                            <td class="col-360"><span class="ck-tick">✓</span><span class="text-val-dark">Yes</span></td>
                            <td><span class="cx-cross">✕</span><span class="text-val-dark">No</span></td>
                        </tr>
                        <tr>
                            <td>GDPR Compliant</td>
                            <td class="col-360"><span class="ck-tick">✓</span><span class="text-val-dark">Yes</span></td>
                            <td><span class="cx-cross">✕</span><span class="text-val-dark">No</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <hr class="m-0" style="border-color:var(--bdr)">

    <!-- ══ FAQ ════════════════════════════════════════════════════════════════ -->
    <!--<section class="sec">-->
    <!--  <div class="container" style="max-width:780px">-->
    <!--    <div class="lbl">Agentforce AI agents - common questions</div>-->
    <!--    <div class="sec-h">Questions about Agentforce SMS, chatbot &amp; voice automation</div>-->
    <!--    <p class="sec-sub" style="max-width:100%">Direct answers to the most common questions about Agentforce AI messaging, Agentforce SMS integration, and 360 AI Agents for Salesforce.</p>-->

    <!--    <div class="faq-wrap">-->
    <!--      <div class="faq-item">-->
    <!--        <div class="faq-q" onclick="toggleFaq(this)">What is Agentforce SMS integration with 360 SMS App? <span class="faq-tog">+</span></div>-->
    <!--        <div class="faq-a">Agentforce SMS integration via 360 SMS App connects Salesforce Agentforce AI agents to SMS, WhatsApp, and 15+ messaging channels. AI agents send, receive, and respond to messages autonomously - qualifying leads, answering FAQs, booking demos, and logging all outcomes natively to Salesforce records without human intervention. 360 SMS App is the leading Agentforce SMS integration on the AppExchange with 1,200+ five-star reviews and Salesforce Summit Partner status.</div>-->
    <!--      </div>-->
    <!--      <div class="faq-item">-->
    <!--        <div class="faq-q" onclick="toggleFaq(this)">What does the 360 AI Chatbot do as an Agentforce AI chatbot? <span class="faq-tog">+</span></div>-->
    <!--        <div class="faq-a">The 360 AI Chatbot is an always-on Agentforce AI chatbot that handles SMS, web chat, and WhatsApp conversations autonomously inside Salesforce. It qualifies prospects automatically, answers FAQs instantly, books demos in real time, and keeps the pipeline active even when the team is offline - without requiring an Agentforce licence. It works with Agentforce to extend existing agents, or fully independently without one.</div>-->
    <!--      </div>-->
    <!--      <div class="faq-item">-->
    <!--        <div class="faq-q" onclick="toggleFaq(this)">How does the Agentforce AI texting agent work? <span class="faq-tog">+</span></div>-->
    <!--        <div class="faq-a">The 360 AI Texting Agent is an Agentforce AI messaging agent for SMS automation inside Salesforce. It translates and polishes outbound messages, scores communication quality, detects tone and intent, reduces spam risk, and improves response rates with human-like AI SMS automation. It works across SMS, WhatsApp, and other channels supported by the 360 SMS App Agentforce messaging platform - with every interaction logged natively to Salesforce.</div>-->
    <!--      </div>-->
    <!--      <div class="faq-item">-->
    <!--        <div class="faq-q" onclick="toggleFaq(this)">What do Agentforce AI voice agents do in Salesforce? <span class="faq-tog">+</span></div>-->
    <!--        <div class="faq-a">The 360 AI Voice Bot is an Agentforce AI voice agent that handles real-time inbound and outbound calls autonomously inside Salesforce. It answers FAQs, handles objections, books demos automatically, and logs every call outcome - lead score, qualification answers, booked meeting - to the Salesforce record in real time. It does not require a Salesforce Agentforce Voice licence and runs fully independently within any Salesforce org.</div>-->
    <!--      </div>-->
    <!--      <div class="faq-item">-->
    <!--        <div class="faq-q" onclick="toggleFaq(this)">Does 360 SMS App require an Agentforce licence? <span class="faq-tog">+</span></div>-->
    <!--        <div class="faq-a">No. 360 SMS App AI agents work both with and without an Agentforce licence. With Agentforce, the 360 AI agents extend your existing Agentforce agents with SMS, WhatsApp, voice, and CTI. Without Agentforce, all nine AI agents run fully independently inside Salesforce - no additional licence required. This is the key differentiator from Salesforce's native Agentforce messaging products, which require an Agentforce tier.</div>-->
    <!--      </div>-->
    <!--      <div class="faq-item">-->
    <!--        <div class="faq-q" onclick="toggleFaq(this)">What is 360 CTI and how does it improve on-call agent performance? <span class="faq-tog">+</span></div>-->
    <!--        <div class="faq-a">360 CTI is an AI calling bot for Salesforce that combines real-time call transcription, smart contextual suggestions, and live agent coaching. Every call is captured accurately, agents receive mid-call guidance to handle objections and close more effectively, and all outcomes are logged to Salesforce automatically. 360 CTI also supports real-time call translation across 50+ languages - enabling global sales teams to run multilingual conversations without interpreters.</div>-->
    <!--      </div>-->
    <!--      <div class="faq-item">-->
    <!--        <div class="faq-q" onclick="toggleFaq(this)">Which channels does the Agentforce AI messaging agent support? <span class="faq-tog">+</span></div>-->
    <!--        <div class="faq-a">360 SMS App's Agentforce AI messaging agent supports SMS, WhatsApp, MMS, web chat, Facebook Messenger, Instagram, LINE, WeChat, and 15+ additional channels. All channels operate from a single Salesforce-native Agentforce messaging platform - with unified logging, unified lead scoring, and unified automation rules. There is no separate platform to configure per channel.</div>-->
    <!--      </div>-->
    <!--      <div class="faq-item">-->
    <!--        <div class="faq-q" onclick="toggleFaq(this)">How is 360 SMS App different from other Agentforce AI messaging platforms? <span class="faq-tog">+</span></div>-->
    <!--        <div class="faq-a">360 SMS App is the only Agentforce AI messaging platform that combines SMS automation, AI WhatsApp chatbot for Salesforce, Agentforce AI voice agents, CTI coaching, real-time call translation, Vibe Coding Automation, AI recruiting, LinkedIn lead parsing, and SOW generation in a single native Salesforce solution - with 1,200+ AppExchange reviews, Salesforce Summit Partner status, and deployment in hours rather than weeks.</div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->

    <hr class="m-0" style="border-color:var(--bdr)">

    <!-- ══ BOTTOM CTA WITH FORM ════════════════════════════════════════════════ -->
    <!--<section class="cta-section" id="cta-form-section">-->
    <!--  <div class="cta-grid-bg"></div>-->
    <!--  <div class="container position-relative" style="max-width:900px;z-index:1">-->
    <!--    <div class="row g-5 align-items-start">-->
    <!--      <div class="col-lg-6 cta-left">-->
    <!--        <h2>Automate sales calls, texts, and chats with 360 AI Agents powered by Agentforce.</h2>-->
    <!--        <p>Delivering intelligent Agentforce AI messaging and real-time automation across every customer interaction - SMS, WhatsApp, voice, chat, and CTI, all natively inside Salesforce.</p>-->
    <!--        <div>-->
    <!--          <div class="cta-trust-item">Agentforce SMS integration - live in hours, not weeks</div>-->
    <!--          <div class="cta-trust-item">AI Voice, Chatbot, Texting Agent &amp; CTI in one platform</div>-->
    <!--          <div class="cta-trust-item">Works with or without Agentforce licence</div>-->
    <!--          <div class="cta-trust-item">5★ on AppExchange · 1,200+ reviews · Summit Partner</div>-->
    <!--          <div class="cta-trust-item">SMS · WhatsApp · voice · 15+ channels natively</div>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-lg-6">-->
    <!--        <div class="cta-form-card">-->
    <!--          <div class="form-title">Unlock More Opportunities with Agentforce</div>-->
    <!--          <div class="form-sub">We'll show you the Agentforce AI agent that fits your exact Salesforce workflow - live.</div>-->

    <!--          <div class="row g-2 mb-2">-->
    <!--            <div class="col-6">-->
    <!--              <label class="form-label">First name</label>-->
    <!--              <input class="form-control" type="text" placeholder="Emma">-->
    <!--            </div>-->
    <!--            <div class="col-6">-->
    <!--              <label class="form-label">Last name</label>-->
    <!--              <input class="form-control" type="text" placeholder="Chen">-->
    <!--            </div>-->
    <!--          </div>-->

    <!--          <div class="mb-2">-->
    <!--            <label class="form-label">Work email</label>-->
    <!--            <input class="form-control" type="email" placeholder="emma@company.com">-->
    <!--          </div>-->

    <!--          <div class="mb-2">-->
    <!--            <label class="form-label">Company</label>-->
    <!--            <input class="form-control" type="text" placeholder="Acme Corp">-->
    <!--          </div>-->

    <!--          <div class="row g-2 mb-3">-->
    <!--            <div class="col-6">-->
    <!--              <label class="form-label">Team size</label>-->
    <!--              <select class="form-select">-->
    <!--                <option>Select...</option>-->
    <!--                <option>1–10</option>-->
    <!--                <option>11–50</option>-->
    <!--                <option>51–200</option>-->
    <!--                <option>200+</option>-->
    <!--              </select>-->
    <!--            </div>-->
    <!--            <div class="col-6">-->
    <!--              <label class="form-label">Primary interest</label>-->
    <!--              <select class="form-select">-->
    <!--                <option>Select...</option>-->
    <!--                <option>Agentforce SMS integration</option>-->
    <!--                <option>AI Chatbot - SMS &amp; WhatsApp</option>-->
    <!--                <option>Agentforce AI texting agent</option>-->
    <!--                <option>Agentforce AI voice agent</option>-->
    <!--                <option>CTI coaching &amp; transcription</option>-->
    <!--                <option>Real-time call translation</option>-->
    <!--                <option>MIRA - AI Recruiting</option>-->
    <!--                <option>SOW &amp; WBS Generator</option>-->
    <!--                <option>Not sure - show me all</option>-->
    <!--              </select>-->
    <!--            </div>-->
    <!--          </div>-->

    <!--          <button class="btn-submit">Book my free Agentforce demo →</button>-->
    <!--          <div class="form-privacy">By submitting you agree to our Privacy Policy. We'll only use your details to arrange the demo you requested.</div>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->


    <!-- Bootstrap 5 JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

    <script>
        /* ── Outcome filter ── */
        const outcomes = {
            sms: {
                t: 'Need Agentforce SMS & chat automation',
                s: '360 AI Chatbot and AI Texting Agent handle inbound and outbound Agentforce SMS, WhatsApp, and web chat 24/7 - qualifying leads, polishing messages, and keeping pipeline active.'
            },
            calls: {
                t: 'Calls take too long or agents go off-script',
                s: '360 CTI coaches reps live mid-call - 30% faster resolution, 40–50% less training time, 20% higher CSAT. AI Voice Agent handles qualifying calls autonomously.'
            },
            leads: {
                t: 'Leads go cold after hours',
                s: '360 AI Voice Agent and AI Chatbot qualify inbound leads 24/7 across voice and Agentforce SMS - no lead waits for a human to wake up.'
            },
            global: {
                t: 'Language barriers on calls',
                s: '360 AI Sales Assistant removes language friction on live calls - 50+ languages translated in real time, zero delay, no interpreters or extra headcount.'
            },
            hire: {
                t: 'Recruiting drowns in admin',
                s: 'MIRA screens, generates interview questions, schedules, and updates Salesforce end-to-end - same-day from application to booked interview.'
            },
            ops: {
                t: 'Salesforce admin backlog',
                s: '360 Vibe auto-creates triggers, generates layouts and validations, builds reports on command. SOW Generator produces complete proposals in under an hour.'
            },
        };

        function filterBy(tag, btn) {
            document.querySelectorAll('.ftab').forEach(b => b.classList.remove('on'));
            btn.classList.add('on');
            const hint = document.getElementById('ohint');
            // Target the ag-card divs inside the row cols
            const cards = document.querySelectorAll('#ag-grid .ag-card');
            const cols = document.querySelectorAll('#ag-grid .col-lg-4, #ag-grid .col-md-6');

            if (tag === 'all') {
                hint.classList.remove('show');
                cols.forEach(c => c.style.display = '');
                cards.forEach(c => {
                    c.classList.remove('ag-hidden', 'match', 'best');
                });
            } else {
                const o = outcomes[tag];
                hint.classList.add('show');
                document.getElementById('ohint-t').textContent = o.t;
                document.getElementById('ohint-s').textContent = o.s;
                let first = true;
                cols.forEach(col => {
                    const card = col.querySelector('.ag-card');
                    if (!card) return;
                    const tags = (card.dataset.t || '').split(' ');
                    if (tags.includes(tag)) {
                        col.style.display = '';
                        card.classList.remove('ag-hidden', 'dim');
                        card.classList.add('match');
                        if (first) {
                            card.classList.add('best');
                            first = false;
                        } else card.classList.remove('best');
                    } else {
                        col.style.display = 'none';
                        card.classList.remove('match', 'best');
                        card.classList.add('ag-hidden');
                    }
                });
            }
        }

        function setRoi(card) {
            document.querySelectorAll('.roi-card').forEach(c => c.classList.remove('active'));
            card.classList.add('active');

            const num = card.querySelector('.roi-num').textContent;
            const title = card.querySelector('.roi-t').textContent;
            const desc = card.querySelector('.roi-d').textContent;
            const agent = card.querySelector('.roi-ag').textContent;

            const barMap = {
                '3×': 0,
                '30%': 1,
                '40–50%': 2,
                '50+': 3,
                '35%': 4,
                '<1hr': 5
            };
            const barIdx = barMap[num.replace('&lt;', '<')] ?? -1;
            document.querySelectorAll('.bar-row').forEach((r, i) => {
                r.querySelector('.bar-fill').style.opacity = (barIdx === -1 || i === barIdx) ? '1' : '.3';
                r.style.opacity = (barIdx === -1 || i === barIdx) ? '1' : '.5';
            });

            let detail = document.getElementById('roi-detail');
            if (!detail) {
                detail = document.createElement('div');
                detail.id = 'roi-detail';
                document.querySelector('.roi-visual').appendChild(detail);
            }
            detail.innerHTML = `
    <div style="font-size:28px;font-weight:800;color:var(--sf);letter-spacing:-1.5px;line-height:1;margin-bottom:6px">${num}</div>
    <div style="font-size:13px;font-weight:700;color:var(--ink);margin-bottom:4px">${title}</div>
    <div style="font-size:12px;color:var(--ink2);line-height:1.6;margin-bottom:8px">${desc}</div>
    <div style="font-size:10px;font-weight:700;color:#0057B8;background:#E8F0FB;display:inline-flex;padding:2px 8px;border-radius:3px">${agent}</div>
  `;
        }

        function toggleFaq(el) {
            const a = el.nextElementSibling;
            const open = el.classList.contains('open');
            document.querySelectorAll('.faq-q.open').forEach(q => {
                q.classList.remove('open');
                q.nextElementSibling.classList.remove('open');
            });
            if (!open) {
                el.classList.add('open');
                a.classList.add('open');
            }
        }

        // Init ROI
        setRoi(document.querySelector('.roi-card.active'));
    </script>


    <?php
    get_footer('sms');
    ?>