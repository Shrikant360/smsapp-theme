<?php
/*
Template Name: Zoho WhatsApp Integration
*/
    get_header('zoho');
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
<style>
    :root {
        --blue: #0070d2;
        --blue-dark: #0058a3;
        --red: #DA5D45;
        --navy: #0a2540;
        --dark: #1a1a1a;
        --muted: #6c757d;
        --light-bg: #f8f9fa;
        --border: #dee2e6;
        --radius: 10px;
        --shadow: 0 2px 12px rgba(0, 0, 0, 0.07);
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    body {
        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 15px;
        line-height: 1.65;
        color: var(--dark);
        background: #fff;
    }

    h1,
    h2,
    h3,
    h4,
    h5 {
        font-weight: 700;
        color: var(--dark);
    }

       .hiw-eyebrow {
  font-size: 11px;
  font-weight: 700;
  letter-spacing: 0.12em;
  color: #DA5D45;
  text-transform: uppercase;
  margin-bottom: 12px;
}

    section {
        padding: 80px 0;
    }

    .btn-primary-solid {
        background: var(--blue);
        color: #fff;
        border: 2px solid var(--blue);
        border-radius: 8px;
        padding: 11px 18px;
        font-weight: 600;
        font-size: 13.5px;
        text-decoration: none;
        display: inline-block;
        transition: .2s;
    }

    .af-more-strip-item {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        gap: 9px;
        flex: 1;
        min-width: 65px;
        background: #fff;
        padding: 20px 20px;
        border-radius: 13px;
    }

    @media (max-width: 767px) {
        section {
            padding: 48px 0;
        }
    }

    .btn-primary-solid:hover {
        background: var(--blue-dark);
        border-color: var(--blue-dark);
        color: #fff;
    }

    .btn-outline-primary-custom {
        background: transparent;
        color: var(--blue);
        border: 2px solid var(--blue);
        border-radius: 8px;
        padding: 11px 28px;
        font-weight: 600;
        font-size: 14px;
        transition: all .2s;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
    }

    .btn-nav-pri {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 6px 20px;
        line-height: 1;
        background: var(--blue);
        color: #fff;
        border-radius: 8px;
        font-weight: 700;
        font-size: 13px;
        text-decoration: none;
        cursor: pointer;
        transition: transform .2s;
    }

    .btn-outline-primary-custom:hover {
        background: var(--blue);
        color: #fff;
    }

    .badge-blue {
        background: #e8f1fb;
        color: var(--blue);
        font-size: 11.5px;
        font-weight: 600;
        border-radius: 20px;
        padding: 4px 12px;
        letter-spacing: .3px;
    }

    /* ========== BREADCRUMB ========== */
    #breadcrumb-bar {
        background: #fff;
        border-bottom: 1px solid #f0f2f5;
        padding: 10px 0;
    }

    #breadcrumb-bar .breadcrumb {
        font-size: 12.5px;
        margin: 0;
    }

    #breadcrumb-bar .breadcrumb-item a {
        color: var(--muted);
        text-decoration: none;
        font-weight: 500;
    }

    #breadcrumb-bar .breadcrumb-item a:hover {
        color: var(--blue);
    }

    #breadcrumb-bar .breadcrumb-item.active {
        color: var(--blue);
        font-weight: 600;
    }

    #breadcrumb-bar .breadcrumb-item+.breadcrumb-item::before {
        color: #bbb;
        content: "›";
        font-size: 14px;
    }

    /* ========== HERO ========== */
    #hero {
        padding: 64px 0 60px;
        background: linear-gradient(to right, #eff6ff, #f7f7f5);
    }

    .hero-tag-pill {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #fff;
        border: 1px solid #dde8f5;
        border-radius: 999px;
        padding: 5px 16px 5px 10px;
        font-size: 12px;
        font-weight: 600;
        color: #333;
        margin-bottom: 20px;
        box-shadow: 0 1px 4px rgba(0, 0, 0, 0.06);
    }

    .hero-tag-dot {
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: var(--red);
        flex-shrink: 0;
    }

    #hero h1 {
        font-size: clamp(28px, 4vw, 44px);
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 18px;
        color: var(--dark);
    }

    #hero .hero-sub {
        color: var(--muted);
        font-size: 15px;
        line-height: 1.7;
        margin-bottom: 28px;
        margin-left: 0px !important;
        max-width: 480px;
    }

    #hero .hero-btns {
        display: flex;
        gap: 12px;
        flex-wrap: wrap;
        margin-bottom: 0;
    }

    .hero-trust-strip {
        display: flex;
        align-items: center;
        gap: 14px;
        flex-wrap: wrap;
        margin-top: 20px;
    }

    .hero-stars {
        color: #f4c430;
        font-size: 14px;
        letter-spacing: 1px;
    }

    .hero-trust-divider {
        width: 1px;
        height: 16px;
        background: #d0d8e4;
        flex-shrink: 0;
    }

    .hero-trust-item {
        font-size: 13px;
        font-weight: 600;
        color: #333;
    }

    #hero .hero-image-wrap {
        position: relative;
        display: flex;
        justify-content: center;
    }

    /* ========== STATS BAR ========== */
    #stats-bar {
        padding: 0;
        border-top: 1px solid #e8edf2;
        border-bottom: 1px solid #e8edf2;
        background: #F7F7F5;
    }

    .stats-bar-inner {
        display: flex;
        align-items: stretch;
        flex-wrap: nowrap;
    }

    .stat-item {
        flex: 1;
        text-align: center;
        padding: 22px 12px;
        position: relative;
        border-right: 1px solid #e8edf2;
    }

    .stat-item:last-child {
        border-right: none;
    }

    .stat-item .big-num {
        font-size: 22px;
        font-weight: 800;
        color: var(--dark);
        line-height: 1;
        letter-spacing: -0.5px;
    }

    .stat-item .stat-label {
        font-size: 11px;
        color: var(--muted);
        margin-top: 5px;
        line-height: 1.35;
        font-weight: 500;
    }

    .stat-item-badge {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 16px 18px;
    }

    .zoho-marketplace-badge {
        background: #FECDD3;
        border: 1.5px solid var(--red);
        border-radius: 10px;
        padding: 10px 18px;
        text-align: center;
        color: var(--red);
        font-size: 12px;
        font-weight: 700;
        line-height: 1.4;
        white-space: nowrap;
    }

    @media (max-width: 767px) {
        .stats-bar-inner {
            flex-wrap: wrap;
        }

        .stat-item {
            flex: 0 0 33.333%;
            max-width: 33.333%;
            border-bottom: 1px solid #e8edf2;
            padding: 14px 8px;
        }

        .stat-item-badge {
            flex: 0 0 100%;
            border-top: 1px solid #e8edf2;
            padding: 16px;
        }

        .stat-item .big-num {
            font-size: 20px;
        }
    }

    /* ========== HOW IT WORKS ========== */
    #how-it-works {
        background: #fff;
    }

    #how-it-works h2 {
        font-size: clamp(22px, 3vw, 32px);
        margin-bottom: 12px;
    }

    .hiw-card {
        border: 1.5px solid #e8edf2;
        border-radius: 14px;
        padding: 28px;
        height: 100%;
        background: #fff;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.04);
    }

    .hiw-card-header {
        margin-bottom: 14px;
    }

    .hiw-badge {
        font-size: 11px;
        font-weight: 700;
        border-radius: 20px;
        padding: 4px 12px;
        letter-spacing: .3px;
    }

    .col-head {
        font-size: 16px;
        font-weight: 700;
        margin-bottom: 8px;
        color: var(--dark);
    }

    .feature-row {
        display: flex;
        gap: 12px;
        margin-bottom: 16px;
        align-items: flex-start;
    }

    .feature-icon {
        width: 32px;
        height: 32px;
        border-radius: 8px;
        background: #e8f1fb;
        color: var(--blue);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        flex-shrink: 0;
        margin-top: 2px;
    }

    .feature-title {
        font-size: 13.5px;
        font-weight: 700;
        margin-bottom: 3px;
    }

    .feature-desc {
        font-size: 13px;
        color: var(--muted);
        line-height: 1.55;
    }

    .section-divider {
        border: none;
        border-top: 1px solid #e8edf2;
        margin: 0;
    }

    /* ========== APP FEATURES ========== */
    #app-features {
        background: var(--light-bg);
    }

    #app-features h2 {
        font-size: clamp(20px, 2.8vw, 30px);
        margin-bottom: 8px;
    }

    .af-wrap {
        display: flex;
        background: #fff;
        border: 1.5px solid #e8edf2;
        border-radius: 14px;
        overflow: hidden;
        box-shadow: var(--shadow);
    }

    .af-left {
        width: 200px;
        flex-shrink: 0;
        border-right: 1.5px solid #e8edf2;
        background: #fafcff;
        display: flex;
        flex-direction: column;
    }

    .af-nav {
        display: flex;
        flex-direction: column;
    }

    .af-tab {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 11px 12px;
        border-left: 3px solid transparent;
        border-bottom: 1px solid #f0f2f5;
        cursor: pointer;
        transition: all .18s;
    }

    .af-tab:hover {
        background: #f0f7ff;
        border-left-color: #90c8f0;
    }

    .af-tab.active {
        background: #eef6ff;
        border-left-color: var(--blue);
    }

    .af-tab-text {
        flex: 1;
        min-width: 0;
    }

    .af-tab-title {
        font-size: 11px;
        font-weight: 700;
        color: #333;
        line-height: 1.3;
    }

    .af-tab.active .af-tab-title {
        color: var(--blue);
    }

    .af-tab-sub {
        font-size: 9.5px;
        color: var(--muted);
        margin-top: 1px;
    }

    .af-more-label {
        font-size: 10px;
        font-weight: 700;
        color: var(--muted);
        letter-spacing: .7px;
        padding: 12px 12px 6px;
        border-top: 1px solid #e8edf2;
        margin-top: auto;
    }

    .af-unique {
        background: #e8f1fb;
        color: var(--blue);
        font-size: 8.5px;
        font-weight: 700;
        padding: 1px 5px;
        border-radius: 8px;
        margin-left: 3px;
    }

    .af-right {
        flex: 1;
        min-width: 0;
        display: flex;
        flex-direction: column;
    }

    .af-panel {
        display: none;
    }

    .af-panel.active {
        display: block;
    }

    .af-panel-inner {
        display: flex;
    }

    .af-text-col {
        flex: 1;
        padding: 22px 24px;
        min-width: 0;
    }

    .tc-sub {
        font-size: 10px;
        font-weight: 800;
        color: var(--blue);
        letter-spacing: 1px;
        text-transform: uppercase;
        margin-bottom: 8px;
    }

    .af-text-col h3 {
        font-size: 17px;
        line-height: 1.3;
        margin-bottom: 10px;
    }

    .af-text-col p {
        color: var(--muted);
        font-size: 13px;
        line-height: 1.65;
        margin-bottom: 12px;
    }

    .check-list {
        list-style: none;
        padding: 0;
        margin-bottom: 14px;
    }

    .check-list li {
        display: flex;
        align-items: flex-start;
        gap: 8px;
        font-size: 13px;
        margin-bottom: 6px;
        color: #444;
    }

    .check-list li i {
        color: var(--blue);
        margin-top: 3px;
        flex-shrink: 0;
    }

    .tag-chips {
        display: flex;
        gap: 6px;
        flex-wrap: wrap;
        margin-bottom: 14px;
    }

    .tag-chip {
        background: #f0f7ff;
        border: 1px solid #c9e1f8;
        color: var(--blue);
        border-radius: 20px;
        padding: 4px 11px;
        font-size: 11px;
        font-weight: 600;
    }

    .learn-more {
        color: var(--blue);
        font-weight: 700;
        font-size: 13px;
        text-decoration: none;
    }

    .learn-more:hover {
        text-decoration: underline;
    }

    .af-more-strip {
        display: flex;
        align-items: flex-start;
        justify-content: space-around;
        padding: 16px 0px;
        gap: 6px;
        flex-wrap: wrap;
    }

    .af-more-strip-item span {
        font-size: 10px;
        font-weight: 600;
        color: #555;
        line-height: 1.3;
    }

    .see-all-btn {
        background: var(--blue);
        color: #fff;
        border: none;
        border-radius: 8px;
        padding: 15px 0;
        font-size: 14px;
        font-weight: 700;
        width: 100%;
        cursor: pointer;
        transition: background .2s;
        letter-spacing: .2px;
    }

    .see-all-btn:hover {
        background: var(--blue-dark);
    }

    @media (max-width: 767px) {
        .af-wrap {
            flex-direction: column;
        }

        .af-left {
            width: 100%;
            border-right: none;
            border-bottom: 1.5px solid #e8edf2;
            max-height: 260px;
            overflow-y: auto;
        }

        .af-more-label {
            display: none;
        }

        .af-panel-inner {
            flex-direction: column;
        }

        .af-text-col {
            padding: 16px;
        }

        .af-more-strip {
            display: none;
        }
    }

    /* ========== AI SECTION ========== */
    #ai-section {
        background: #00346F;
        color: #fff;
        padding: 64px 0 64px;
    }

    .ai-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.14);
        color: rgba(255, 255, 255, 0.6);
        font-size: 10.5px;
        font-weight: 700;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        padding: 5px 14px;
        border-radius: 20px;
        margin-bottom: 18px;
    }

    .ai-h2 {
        color: #fff;
        font-size: clamp(26px, 3vw, 40px);
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 14px;
    }

    .ai-sub {
        color: rgba(255, 255, 255, 0.55);
        font-size: 14.5px;
        line-height: 1.7;
        max-width: 640px;
        margin-bottom: 40px;
    }

    .ai-card {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.09);
        border-radius: 14px;
        padding: 24px;
        height: 100%;
        transition: background .2s, transform .2s;
    }

    .ai-card:hover {
        background: rgba(255, 255, 255, 0.08);
        transform: translateY(-3px);
    }

    .ai-card-title {
        color: #fff;
        font-size: 15px;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .ai-card-desc {
        color: rgba(255, 255, 255, 0.55);
        font-size: 13px;
        line-height: 1.65;
        margin-bottom: 14px;
    }

    .ai-tags {
        display: flex;
        gap: 6px;
        flex-wrap: wrap;
    }

    .ai-tag {
        font-size: 10.5px;
        font-weight: 600;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.1);
        color: rgba(255, 255, 255, 0.6);
        padding: 3px 10px;
        border-radius: 20px;
    }

    .ai-stats-strip {
        background: #fff;
        border-top: 1px solid #e8edf2;
        border-bottom: 1px solid #e8edf2;
        padding: 36px 0;
    }

    .ai-stats-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 20px;
    }

    .ai-stat-block {
        flex: 1;
        min-width: 100px;
        text-align: center;
    }

    .ai-stat-num {
        font-size: 40px;
        font-weight: 800;
        color: var(--red);
        line-height: 1;
    }

    .ai-stat-lbl {
        font-size: 12px;
        color: var(--muted);
        margin-top: 6px;
        line-height: 1.4;
    }

    .ai-cta-strip {
        background: #0057B8;
        padding: 22px 0;
    }

    .ai-cta-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 16px;
    }

    .ai-cta-main {
        color: #fff;
        font-size: 14.5px;
        font-weight: 700;
        margin-bottom: 7px;
        line-height: 1.4;
    }

    .ai-cta-sub {
        color: rgba(255, 255, 255, 0.55);
        font-size: 11.5px;
        margin: 3px 0 0;
        font-weight: 400;
    }

    .ai-cta-btns {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        align-items: center;
        flex-shrink: 0;
    }

    .btn-white-solid {
        background: #fff;
        color: var(--blue);
        border: 2px solid #fff;
        border-radius: 8px;
        padding: 9px 22px;
        font-weight: 700;
        font-size: 13.5px;
        text-decoration: none;
        transition: all .2s;
        white-space: nowrap;
        display: inline-flex;
        align-items: center;
    }

    .btn-white-solid:hover {
        background: #e8f1fb;
        color: var(--blue-dark);
    }

    .btn-white-outline {
        background: transparent;
        color: #fff;
        border: 2px solid rgba(255, 255, 255, 0.5);
        border-radius: 8px;
        padding: 9px 22px;
        font-weight: 700;
        font-size: 13.5px;
        text-decoration: none;
        transition: all .2s;
        white-space: nowrap;
        display: inline-flex;
        align-items: center;
    }

    .btn-white-outline:hover {
        background: rgba(255, 255, 255, 0.12);
        border-color: #fff;
    }

    /* ========== SECTION 6 — WHY CHOOSE US ========== */
    #why-choose {
        background: #fff;
        padding: 64px 0;
    }

    .wc-eyebrow {
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--red);
        margin-bottom: 14px;
    }

    .wc-heading {
        font-size: clamp(22px, 2.8vw, 32px);
        font-weight: 800;
        color: #0f172a;
        line-height: 1.2;
        letter-spacing: -0.02em;
        margin-bottom: 14px;
    }

    .wc-sub {
        font-size: 14px;
        color: #64748b;
        line-height: 1.7;
        margin-bottom: 28px;
        max-width: 360px;
    }

    .wc-stat-card {
        background: #fff;
        border: 1px solid #e8edf2;
        border-radius: 12px;
        padding: 24px 20px;
        height: 100%;
    }

    .wc-stat-num {
        font-size: 36px;
        font-weight: 800;
        color: var(--red);
        line-height: 1;
        margin-bottom: 8px;
    }

    .wc-stat-label {
        font-size: 13.5px;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 8px;
    }

    .wc-stat-desc {
        font-size: 12.5px;
        color: #64748b;
        line-height: 1.6;
        margin: 0;
    }

    .wc-rest-note {
        background: #fff5f5;
        border: 1px solid #fecdcd;
        border-radius: 8px;
        padding: 12px 18px;
        font-size: 13px;
        color: #555;
        line-height: 1.6;
        margin-top: 16px;
    }

    .wc-rest-note strong {
        color: var(--red);
    }

    @media (max-width: 991px) {
        .wc-sub {
            max-width: 100%;
        }
    }

    /* ========== SECTION 7 — COMPARISON TABLE ========== */
    #comparison {
        background: #fff;
        padding: 0 0;
    }

    /* Outer wrapper — rounded border, no overflow clip so pill can overlap header */
    .cmp2-wrap {
        border-radius: 12px;
        border: 1px solid #e2e8f0;
        overflow: hidden;
    }

    /* 3-column grid: wide feat col | equal us col | equal them col */
    .cmp2-head,
    .cmp2-row {
        display: grid;
        grid-template-columns: 2fr 1fr 1fr;
    }

    /* ── Header row ── */
    .cmp2-head {
        background: #f4f6f8;
    }

    .cmp2-head-empty {
        padding: 18px 28px;
        border-right: 1px solid #e2e8f0;
        font-size: 10.5px;
        font-weight: 700;
        color: #b0b8c4;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        display: flex;
        align-items: center;
    }

    /* Middle header cell — blue pill floats centered on grey bg */
    .cmp2-head-us {
        background: #0070d2;
        border-right: 1px solid #e2e8f0;
        padding: 10px 16px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .cmp2-us-pill {
        background: var(--blue);
        color: #fff;
        font-size: 11px;
        font-weight: 800;
        letter-spacing: 0.07em;
        text-transform: uppercase;
        border-radius: 999px;
        padding: 11px 28px;
        text-align: center;
        white-space: nowrap;
        display: inline-block;
    }

    .cmp2-head-them {
        background: #f4f6f8;
        padding: 18px 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 10.5px;
        font-weight: 700;
        color: #b0b8c4;
        letter-spacing: 0.08em;
        text-transform: uppercase;
    }

    /* ── Data rows ── */
    .cmp2-row {
        border-top: 1px solid #e2e8f0;
        background: #fff;
    }

    /* Feature label cell */
    .cmp2-cell-feat {
        padding: 22px 28px;
        font-size: 14px;
        font-weight: 700;
        color: #1e293b;
        border-right: 1px solid #e2e8f0;
        display: flex;
        align-items: center;
    }

    /* Our value cell — very subtle blue tint */
    .cmp2-cell-us {
        padding: 22px 16px;
        background: #f0f7ff;
        border-right: 1px solid #dce8f5;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: 700;
        color: #1e293b;
    }

    /* Their value cell */
    .cmp2-cell-them {
        padding: 22px 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: 400;
        color: #94a3b8;
    }

    .cmp2-check {
        color: #22c55e;
        font-size: 20px;
        line-height: 1;
    }

    .cmp2-cross {
        color: #ef4444;
        font-size: 20px;
        line-height: 1;
    }

    @media (max-width: 640px) {

        .cmp2-head,
        .cmp2-row {
            grid-template-columns: 1.4fr 1fr 1fr;
        }

        .cmp2-cell-feat,
        .cmp2-head-empty {
            padding: 14px 14px;
            font-size: 12px;
        }

        .cmp2-cell-us,
        .cmp2-cell-them {
            padding: 14px 10px;
            font-size: 12px;
        }

        .cmp2-us-pill {
            padding: 8px 14px;
            font-size: 9px;
        }
    }

    /* ========== MISC ========== */
    #contact {
        background: #eef4ff;
    }

    .form-card {
        background: #fff;
        border-radius: 14px;
        padding: 32px;
        box-shadow: 0 4px 20px rgba(0, 112, 210, 0.08);
    }

    .form-card .form-control,
    .form-card .form-select {
        border: 1.5px solid #e0e8f0;
        border-radius: 8px;
        padding: 11px 14px;
        font-size: 14px;
        color: var(--dark);
        background: #fafcff;
        transition: border-color .2s;
    }

    .form-card .form-control:focus,
    .form-card .form-select:focus {
        border-color: var(--blue);
        box-shadow: 0 0 0 3px rgba(0, 112, 210, 0.1);
    }

    @media (max-width: 991px) {
        #hero .hero-image-wrap {
            margin-top: 40px;
        }
    }

    @media (max-width: 767px) {
        h2 {
            font-size: 24px !important;
        }

        .btn-primary-solid,
        .btn-outline-primary-custom {
            width: 100%;
            justify-content: center;
        }

        #hero .hero-btns {
            flex-direction: column;
        }

        .ai-cta-btns {
            justify-content: center;
        }

        .see-all-btn {
            font-size: 13px;
        }

        .hero-trust-strip {
            gap: 10px;
        }

    }
    #cta-bar-13{
            background-color:#0057B8 !important;
        }
     #cta-bar-13 p{
         color:#fff;
     }
</style>

<!-- ===== BREADCRUMB ===== -->
<div id="breadcrumb-bar">
    <div class="container" style="max-width:1200px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>zoho/">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Zoho CRM</a></li>
                <li class="breadcrumb-item active" aria-current="page">WhatsApp Messaging</li>
            </ol>
        </nav>
    </div>
</div>

<!-- ===== SECTION 1: HERO ===== -->
<section id="hero">
    <div class="container" style="max-width:1200px">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="hero-tag-pill">
                    <span class="hero-tag-dot"></span>
                    Zoho-native WhatsApp Integration &nbsp;·&nbsp; AI-Powered &nbsp;·&nbsp; 100% Inside Zoho CRM
                </div>
                <h1>Zoho-native<br><span style="color:#DA5D45;">WhatsApp Integration</span></h1>
                <p class="hero-sub">Customers respond faster on WhatsApp, so that's where you need to be. AI-powered Zoho WhatsApp messaging drives higher engagement, quicker replies, and more conversions.</p>
                <div class="hero-btns">
                    <a class="open-popup-form-on-click btn-nav-pri">Book a Demo</a>
                    <a href="https://marketplace.zoho.com/app/crm/360-sms-for-zoho-crm" class="btn-outline-primary-custom">Start Free Trial</a>
                </div>
                <div class="hero-trust-strip">
                    <span class="hero-stars">★★★★★</span>
                    <span class="hero-trust-divider"></span>
                    <span class="hero-trust-item">13+ Years</span>
                    <span class="hero-trust-divider"></span>
                    <span class="hero-trust-item">AI-Driven WhatsApp Engagement</span>
                    <span class="hero-trust-divider"></span>
                    <span class="hero-trust-item">Zoho-Native</span>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-image-wrap">
                    <img class="img-fluid" src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/06/Zoho-Whats-app.webp" alt="Zoho Messaging App">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Bar -->
<div id="stats-bar">
    <div class="container" style="max-width:1200px;padding-left:0;padding-right:0;">
        <div class="stats-bar-inner">
            <div class="stat-item">
                <div class="big-num">13+</div>
                <div class="stat-label">Years of CRM<br>Innovation</div>
            </div>
            <div class="stat-item">
                <div class="big-num">AI</div>
                <div class="stat-label">Powered Customer<br>Engagement</div>
            </div>
            <div class="stat-item">
                <div class="big-num">1-Click</div>
                <div class="stat-label">Install &amp; Get<br>Started</div>
            </div>
            <div class="stat-item">
                <div class="big-num">100%</div>
                <div class="stat-label">Zoho-Native · No<br>External Portals</div>
            </div>
            <div class="stat-item">
                <div class="big-num">3B+</div>
                <div class="stat-label">WhatsApp Users<br>Worldwide</div>
            </div>
            <div class="stat-item-badge">
                <div class="zoho-marketplace-badge">
                    Zoho Marketplace<br>Verified
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ===== SECTION 2: HOW IT WORKS ===== -->
<section id="how-it-works">
    <div class="container" style="max-width:1200px">
        <div class="row g-4">

    <!-- ✅ NEW HEADER BLOCK -->


    <div class="">
      <div class="hiw-eyebrow">HOW IT WORKS</div>

      <h2>
        Powering WhatsApp–First Engagement from Zoho
      </h2>

      <p style="color:var(--muted);font-size:14px;max-width:680px;margin-top:6px">
        Every WhatsApp interaction timed right, loaded with context, built to drive action. 13+ years of CRM messaging experience now running inside Zoho CRM.
      </p>
    </div>

    <!-- ✅ ROW STARTS AFTER HEADER -->
    <div class="row g-4">
            <div class="col-lg-6">
                <div class="hiw-card">
                    <div class="hiw-card-header">
                        <span class="hiw-badge" style="background:#e8f1fb;color:var(--blue)">
                            <i class="bi bi-link-45deg me-1"></i> 100% Zoho-Native
                        </span>
                    </div>
                    <p class="col-head">Your data stays inside Zoho — fully secure.</p>
                    <p style="color:var(--muted);font-size:13.5px;line-height:1.6;margin-bottom:20px">
                        100% Zoho-native WhatsApp integration with no external portals. Start WhatsApp messaging in minutes with one-click installation. No developer, no middleware.
                    </p>
                    <hr class="border border-dark opacity-100">
                    <div class="feature-row">
                        <div class="feature-icon"><i class="bi bi-check2-square"></i></div>
                        <div>
                            <div class="feature-title">100% Zoho-native — <span class="fw-normal">no external portals, no tab switching ever.</span></div>
                        </div>
                    </div>
                    <div class="feature-row">
                        <div class="feature-icon"><i class="bi bi-shield-lock"></i></div>
                        <div>
                            <div class="feature-title">Your data stays inside Zoho — <span class="fw-normal">fully secure and owned by you.</span></div>
                        </div>
                    </div>
                    <div class="feature-row">
                        <div class="feature-icon"><i class="bi bi-lightning-charge"></i></div>
                        <div>
                            <div class="feature-title">Start in minutes — <span class="fw-normal">one-click installation, no coding required.</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hiw-card">
                    <div class="hiw-card-header">
                        <span class="hiw-badge" style="background:#f1ecff;color:#7c5cff">
                            <i class="bi bi-cpu me-1"></i> AI-Powered Engagement
                        </span>
                    </div>
                    <p class="col-head">Turn Zoho workflows into real customer conversations.</p>
                    <p style="color:var(--muted);font-size:13.5px;line-height:1.6;margin-bottom:20px">
                        AI-powered Zoho messaging for profitable quarters. SMS, MMS, and WhatsApp- all manageable from a unified inbox inside Zoho.
                    </p>
                    <hr class="border border-dark opacity-100">
                    <div class="feature-row">
                        <div class="feature-icon"><i class="bi bi-graph-up-arrow"></i></div>
                        <div>
                            <div class="feature-title">Higher engagement - <span class="fw-normal">hit the channel with the fastest response rates. </span></div>
                        </div>
                    </div>
                    <div class="feature-row">
                        <div class="feature-icon"><i class="bi bi-robot"></i></div>
                        <div>
                            <div class="feature-title">AI-powered messaging - <span class="fw-normal">smart replies, chatbots, and compliance running on their own.</span></div>
                        </div>
                    </div>
                    <div class="feature-row">
                        <div class="feature-icon"><i class="bi bi-chat-dots"></i></div>
                        <div>
                            <div class="feature-title">More conversions - <span class="fw-normal">leads nudged through the funnel at exactly the right moment.</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<hr class="section-divider" />

<!-- ===== SECTION 3: APP FEATURES ===== -->
<section id="app-features">
    <div class="container" style="max-width:1200px">
        <div class="mb-4">
            <h2>Zoho CRM WhatsApp Solutions that Boost Conversions</h2>
            <p style="color:var(--muted);font-size:14px;max-width:680px;margin-top:6px">Every feature lives inside Zoho CRM — same records, same workflows, same reports your team already knows.</p>
        </div>
        <div class="af-wrap">
            <div class="af-left">
                <div class="af-nav" id="af-nav">
                    <div class="af-tab active" data-target="af-panel-1">
                        <div class="af-thumb">
                            <div class="feature-icon"><i class="bi bi-chat-dots"></i></div>
                        </div>
                        <div class="af-tab-text">
                            <div class="af-tab-title">WhatsApp from Zoho CRM</div>
                            <div class="af-tab-sub">Native & Seamless</div>
                        </div>
                    </div>
                    <div class="af-tab" data-target="af-panel-2">
                        <div class="af-thumb">
                            <div class="feature-icon"><i class="bi bi-phone"></i></div>
                        </div>
                        <div class="af-tab-text">
                            <div class="af-tab-title">Unified Conversation Management</div>
                            <div class="af-tab-sub">One Unified Inbox</div>
                        </div>
                    </div>
                    <div class="af-tab" data-target="af-panel-3">
                        <div class="af-thumb">
                            <div class="feature-icon"><i class="bi bi-gear"></i></div>
                        </div>
                        <div class="af-tab-text">
                            <div class="af-tab-title">Bulk WhatsApp Campaigns</div>
                            <div class="af-tab-sub">Scale with Personalization</div>
                        </div>
                    </div>
                    <div class="af-tab" data-target="af-panel-4">
                        <div class="af-thumb">
                            <div class="feature-icon"><i class="bi bi-people"></i></div>
                        </div>
                        <div class="af-tab-text">
                            <div class="af-tab-title">Real-Time Response Alerts</div>
                            <div class="af-tab-sub">Never Miss a Response</div>
                        </div>
                    </div>
                    <div class="af-tab" data-target="af-panel-5">
                        <div class="af-thumb">
                            <div class="feature-icon"><i class="bi bi-bar-chart"></i></div>
                        </div>
                        <div class="af-tab-text">
                            <div class="af-tab-title">No-Code Workflow Automation</div>
                            <div class="af-tab-sub">Effortless Automation</div>
                        </div>
                    </div>
                    <div class="af-tab" data-target="af-panel-6">
                        <div class="af-thumb">
                            <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
                        </div>
                        <div class="af-tab-text">
                            <div class="af-tab-title">Compliance & Risk Management</div>
                            <div class="af-tab-sub">Stay Compliant & Mitigate Risk</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="af-right">
                <div class="af-panel active" id="af-panel-1">
                    <div class="af-panel-inner">
                        <div class="af-text-col">
                            <div class="tc-sub">WHATSAPP FROM ZOHO CRM</div>
                            <h3>Stay inside Zoho and still reach customers on WhatsApp</h3>
                            <p>Real-time alerts hit your team instantly, automated reminders and follow-ups run on their own — all from one place, nothing else to log into.</p>
                            <ul class="check-list">
                                <li><i class="fa-solid fa-check-circle"></i> Communicate conveniently sending WhatsApp messages directly from any Zoho record</li>
                                <li><i class="fa-solid fa-check-circle"></i> Real-time incoming message alerts so your team responds instantly</li>
                                <li><i class="fa-solid fa-check-circle"></i> All WhatsApp conversations auto-logged to the right Zoho CRM record</li>
                            </ul>
                            <div class="tag-chips">
                                <span class="tag-chip">WhatsApp Business API</span><span class="tag-chip"> Real-Time Alerts</span><span class="tag-chip">Auto-Logged</span>
                            </div>
                            <a class="open-popup-form-on-click learn-more btn-outline-primary-custom">Contact us</a>
                        </div>
                    </div>
                </div>
                <div class="af-panel" id="af-panel-2">
                    <div class="af-panel-inner">
                        <div class="af-text-col">
                            <div class="tc-sub">UNIFIED CONVERSATION MANAGEMENT</div>
                            <h3>Manage Conversations in One Unified Inbox</h3>
                            <p>Connect, Engage, and Close Faster with WhatsApp in Zoho. Engage leads instantly on WhatsApp from Zoho CRM and turn every message into a closed deal — all from one unified inbox alongside SMS and other channels.</p>
                            <ul class="check-list">
                                <li><i class="fa-solid fa-check-circle"></i> Unified inbox for all WhatsApp inbound and outbound conversations inside Zoho</li>
                                <li><i class="fa-solid fa-check-circle"></i> Full conversation history tied to the Lead, Contact, or Deal record</li>
                                <li><i class="fa-solid fa-check-circle"></i> Manage WhatsApp alongside SMS, MMS, and other channels in one view</li>
                            </ul>
                            <div class="tag-chips">
                                <span class="tag-chip">Bulk Campaigns</span><span class="tag-chip">CRM Merge Fields</span><span class="tag-chip">Delivery Tracking</span>
                            </div>
                            <a class="open-popup-form-on-click learn-more btn-outline-primary-custom">Contact us</a>
                        </div>
                    </div>
                </div>
                <div class="af-panel" id="af-panel-3">
                    <div class="af-panel-inner">
                        <div class="af-text-col">
                            <div class="tc-sub">BULK WHATSAPP CAMPAIGNS</div>
                            <h3>Scale with Personalized Bulk Messaging</h3>
                            <p>Reach thousands of contacts at once with personalized WhatsApp messages from Zoho CRM. Run bulk WhatsApp campaigns from Reports or List Views with full delivery and engagement visibility — all inside Zoho.</p>
                            <ul class="check-list">
                                <li><i class="fa-solid fa-check-circle"></i> Send bulk WhatsApp messages from Zoho CRM List Views</li>
                                <li><i class="fa-solid fa-check-circle"></i> Personalize every message with merge fields from Zoho CRM data</li>
                                <li><i class="fa-solid fa-check-circle"></i> Track delivery, open, and response rates inside Zoho CRM dashboards</li>
                            </ul>
                            <div class="tag-chips">
                                <span class="tag-chip">No Code</span><span class="tag-chip">Any CRM Module</span><span class="tag-chip">Automation</span>
                            </div>
                            <a class="open-popup-form-on-click learn-more btn-outline-primary-custom">Contact us</a>
                        </div>
                    </div>
                </div>
                <div class="af-panel" id="af-panel-4">
                    <div class="af-panel-inner">
                        <div class="af-text-col">
                            <div class="tc-sub">REAL-TIME RESPONSE ALERTS</div>
                            <h3>Never Miss a Customer Response</h3>
                            <p>Stay connected to customers and sell faster to prospects. Get instant alerts for every incoming WhatsApp message inside Zoho CRM so your team never misses a response or a lead opportunity.</p>
                            <ul class="check-list">
                                <li><i class="fa-solid fa-check-circle"></i> Real-time incoming WhatsApp notification alerts inside Zoho CRM</li>
                                <li><i class="fa-solid fa-check-circle"></i> Channel badges for instant visual identification</li>
                                <li><i class="fa-solid fa-check-circle"></i> AI ChatAgent handles responses 24/7 so no lead is ever missed</li>
                            </ul>
                            <div class="tag-chips">
                                <span class="tag-chip">Smart Scheduling</span><span class="tag-chip">Time-Zone Aware</span><span class="tag-chip">Bulk Scheduling</span>
                            </div>
                            <a class="open-popup-form-on-click learn-more btn-outline-primary-custom">Contact us</a>
                        </div>
                    </div>
                </div>
                <div class="af-panel" id="af-panel-5">
                    <div class="af-panel-inner">
                        <div class="af-text-col">
                            <div class="tc-sub">NO-CODE WORKFLOW AUTOMATION</div>
                            <h3>Automate Workflows Effortlessly</h3>
                            <p>Trigger WhatsApp messages from any Zoho CRM object and workflow automatically — no coding required, minimal manual effort. Set up automated WhatsApp reminders, follow-ups, and drip sequences in minutes.</p>
                            <ul class="check-list">
                                <li><i class="fa-solid fa-check-circle"></i> Trigger WhatsApp from any Zoho CRM module — Leads, Contacts, Deals, and more</li>
                                <li><i class="fa-solid fa-check-circle"></i> No code automation builder — zero coding or developer effort</li>
                                <li><i class="fa-solid fa-check-circle"></i> Automated follow-ups on WhatsApp for any Zoho module</li>
                            </ul>
                            <div class="tag-chips">
                                <span class="tag-chip">No Code</span><span class="tag-chip">Trigger-Based</span><span class="tag-chip">Any CRM Object</span>
                            </div>
                            <a class="open-popup-form-on-click learn-more btn-outline-primary-custom">Contact us</a>
                        </div>
                    </div>
                </div>
                <div class="af-panel" id="af-panel-6">
                    <div class="af-panel-inner">
                        <div class="af-text-col">
                            <div class="tc-sub">COMPLIANCE & RISK MANAGEMENT</div>
                            <h3>Stay Compliant and Mitigate Risk</h3>
                            <p>Automatically manage WhatsApp messaging compliance - TCPA, GDPR, and consent - based on customer behavior and intent. Boost brand awareness with branded links and protect your business from legal risk.</p>
                            <ul class="check-list">
                                <li><i class="fa-solid fa-check-circle"></i> AI-powered compliance management based on customer intent, not just keywords</li>
                                <li><i class="fa-solid fa-check-circle"></i> Automated opt-in and opt-out handling — GDPR, TCPA, and WhatsApp policy compliant</li>
                                <li><i class="fa-solid fa-check-circle"></i> Branded short links to boost brand awareness and track engagement</li>
                            </ul>
                            <div class="tag-chips">
                                <span class="tag-chip">GDPR Ready</span><span class="tag-chip">AI Compliance</span><span class="tag-chip">Branded Links</span>
                            </div>
                            <a class="open-popup-form-on-click learn-more btn-outline-primary-custom">Contact us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="af-more-label">MORE FEATURES</div>
        <div class="af-more-strip">
            <div class="af-more-strip-item">
                <div class="feature-icon"><i class="bi bi-translate"></i></div>
                <span>Message<br>Scheduling</span>
            </div>
            <div class="af-more-strip-item">
                <div class="feature-icon"><i class="bi bi-send"></i></div>
                <span>Templates<br>& Folders</span>
            </div>
            <div class="af-more-strip-item">
                <div class="feature-icon"><i class="bi bi-pin-angle"></i></div>
                <span>Message<br>Tracking</span>
            </div>
            <div class="af-more-strip-item">
                <div class="feature-icon"><i class="bi bi-link"></i></div>
                <span>Link Shortening<br>Tracking</span>
            </div>
            <div class="af-more-strip-item">
                <div class="feature-icon"><i class="bi bi-lightning"></i></div>
                <span>AI-powered <br>1:1<small class="af-unique">Unique</small></span>
            </div>
        </div>
        <button class="see-all-btn mt-4"><a href="<?php echo esc_url(home_url('/')); ?>zoho-listing/" style="color:#fff;text-decoration:none;">See all features</a></button>
    </div>
</section>

<!-- ===== SECTION 5: AI DARK ===== -->
<section id="ai-section">
    <div class="container" style="max-width:1200px">
        <div class="mb-4">
            <div class="ai-eyebrow">AI — BUILT INTO EVERY WORKFLOW</div>
            <h2 class="ai-h2">Transform Interactions with AI-powered WhatsApp for Zoho CRM</h2>
            <p class="ai-sub">Every AI feature lives inside Zoho - smarter replies, faster responses, automated compliance, and 24/7 coverage with zero extra tools.</p>
        </div>
        <div class="row g-3">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="ai-card">
                    <div class="feature-icon" style="margin-bottom:16px;"><i class="bi bi-stars"></i></div>
                    <h5 class="ai-card-title">Templates</h5>
                    <p class="ai-card-desc">Create personalized WhatsApp message templates with the help of AI that drive higher engagement and meaningful responses.</p>
                    <div class="ai-tags"><span class="ai-tag">AI Suggestions</span><span class="ai-tag">Higher Engagement</span></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="ai-card">
                    <div class="feature-icon" style="margin-bottom:16px;"><i class="bi bi-shield-check"></i></div>
                    <h5 class="ai-card-title">Compliance</h5>
                    <p class="ai-card-desc">Automatically manage WhatsApp messaging compliance — TCPA, GDPR, and consent — based on customer behavior and intent.</p>
                    <div class="ai-tags"><span class="ai-tag">Intent Detection</span><span class="ai-tag">Auto Compliance</span></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="ai-card">
                    <div class="feature-icon" style="margin-bottom:16px;"><i class="bi bi-chat-dots"></i></div>
                    <h5 class="ai-card-title">AI Replies</h5>
                    <p class="ai-card-desc">Get reply suggestions generated by AI tailored to each ongoing conversation, helping teams respond faster and smarter.</p>
                    <div class="ai-tags"><span class="ai-tag">Context-Aware</span><span class="ai-tag">Faster Replies</span></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="ai-card">
                    <div class="feature-icon" style="margin-bottom:16px;"><i class="bi bi-robot"></i></div>
                    <h5 class="ai-card-title">ChatAgent</h5>
                    <p class="ai-card-desc">Engage prospects and customers 24/7 with an AI chatbot that responds to incoming WhatsApp messages right away - never miss a lead.</p>
                    <div class="ai-tags"><span class="ai-tag">24/7 Coverage</span><span class="ai-tag">Zero Missed Leads</span></div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="ai-stats-strip">
    <div class="container" style="max-width:1200px">
        <div class="ai-stats-row">
            <div class="ai-stat-block">
                <div class="ai-stat-num">50%</div>
                <div class="ai-stat-lbl">Faster customer<br>follow-ups</div>
            </div>
            <div class="ai-stat-block">
                <div class="ai-stat-num">AI-Powered</div>
                <div class="ai-stat-lbl">WhatsApp</div>
            </div>
            <div class="ai-stat-block">
                <div class="ai-stat-num">Multichannel</div>
                <div class="ai-stat-lbl">support</div>
            </div>
            <div class="ai-stat-block">
                <div class="ai-stat-num">13+</div>
                <div class="ai-stat-lbl">Years CRM<br>Expertise</div>
            </div>
        </div>
    </div>
</div>

<div class="ai-cta-strip">
    <div class="container" style="max-width:1200px">
        <div class="ai-cta-inner">
            <div class="ai-cta-text">
                <p class="ai-cta-main">Turn every WhatsApp conversation into a sales opportunity — right from Zoho CRM</p>
                <p class="ai-cta-sub">Truly Zoho-native &nbsp;·&nbsp; One-click install &nbsp;·&nbsp; No middleware &nbsp;·&nbsp; 24/7 onboarding support included</p>
            </div>
            <div class="ai-cta-btns">
                <a class="open-popup-form-on-click btn-white-solid">Start Free Trial</a>
                <a href="https://marketplace.zoho.com/app/crm/360-sms-for-zoho-crm" class="btn-white-outline">Book a Demo</a>
            </div>
        </div>
    </div>
</div>

<!-- ===== SECTION 6: WHY CHOOSE US (Image 1 layout) ===== -->
<section id="why-choose">
    <div class="container" style="max-width:1200px">
        <div class="row align-items-start g-4 g-lg-5">

            <!-- LEFT: eyebrow + heading + sub + CTA -->
            <div class="col-lg-4">
                <p class="wc-eyebrow">WHY CHOOSE US</p>
                <h2 class="wc-heading">Why Zoho CRM WhatsApp integration with 360 SMS</h2>
                <p class="wc-sub">14+ years of CRM innovation doesn't leave much room for guesswork. What we've built into Zoho CRM reflects that - AI-backed messaging that modern teams actually need.</p>
                <a href="<?php echo esc_url(home_url('/')); ?>zoho-listing/" class="btn-primary-solid">Explore all features</a>
            </div>

            <!-- RIGHT: 3 stat cards + rest-assured note -->
            <div class="col-lg-8">
                <div class="row g-3">
                    <div class="col-md-4">
                        <div class="wc-stat-card">
                            <div class="wc-stat-num">50%</div>
                            <div class="wc-stat-label">Faster Follow-Ups</div>
                            <p class="wc-stat-desc">Define triggers around CRM activity and watch response times drop. Messages fire when they're supposed to.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wc-stat-card">
                            <div class="wc-stat-num">53%</div>
                            <div class="wc-stat-label">Reduced Manual Effort</div>
                            <p class="wc-stat-desc">Automated scheduling and backend logic handle repetitive tasks, freeing your team for higher-value work.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="wc-stat-card">
                            <div class="wc-stat-num">35%</div>
                            <div class="wc-stat-label">Higher Engagement</div>
                            <p class="wc-stat-desc">Let automated scheduling and backend logic take repetitive tasks off your team's plate, reducing effort.</p>
                        </div>
                    </div>
                </div>

                <!-- Rest assured note — full width below cards -->
                <div class="wc-rest-note mt-3">
                    <strong>Rest assured</strong> — you'll get all the same capabilities across SMS, MMS, and WhatsApp inside Zoho CRM. Switch channels without starting from scratch.
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ===== SECTION 7: COMPARISON TABLE (Image layout) ===== -->
<section id="comparison">
    <div class="container" style="max-width:1200px">

        <div class="mb-5">
            <h2 style="font-size:clamp(22px,2.6vw,32px);font-weight:800;color:#0f172a;letter-spacing:-0.02em;margin-bottom:8px;">360 SMS vs other Zoho WhatsApp integrations</h2>
            <p style="color:var(--muted);font-size:14px;margin:0;">See exactly why customers chose 360 SMS over every other option for Zoho CRM messaging.</p>
        </div>

        <div class="cmp2-wrap">

            <!-- Header row: grey bg left & right, blue pill centered in middle -->
            <div class="cmp2-head">
                <div class="cmp2-head-empty">ELEMENTS</div>
                <div class="cmp2-head-us text-light">
                    <span>360 SMS FOR ZOHO WHATSAPP</span>
                </div>
                <div class="cmp2-head-them">Others</div>
            </div>

            <!-- Row 1 -->
            <div class="cmp2-row">
                <div class="cmp2-cell-feat">Zoho Native</div>
                <div class="cmp2-cell-us">100%</div>
                <div class="cmp2-cell-them">Partially</div>
            </div>

            <!-- Row 2 -->
            <div class="cmp2-row">
                <div class="cmp2-cell-feat">Redirection to external portal</div>
                <div class="cmp2-cell-us">No</div>
                <div class="cmp2-cell-them">Yes</div>
            </div>

            <!-- Row 3 -->
            <div class="cmp2-row">
                <div class="cmp2-cell-feat">AI-powered Messaging</div>
                <div class="cmp2-cell-us">Yes</div>
                <div class="cmp2-cell-them">No</div>
            </div>


        </div><!-- /cmp2-wrap -->

        <div class="d-flex align-items-center justify-content-center gap-3 flex-wrap mt-4">
            <span style="font-size:13.5px;color:var(--muted);">See 360 SMS live in your Zoho org.</span>
            <a class="open-popup-form-on-click btn-primary-solid">Schedule a free demo</a>
            <a href="https://marketplace.zoho.com/app/crm/360-sms-for-zoho-crm" class="btn-outline-primary-custom">View on Marketplace</a>
        </div>

    </div>
</section>
<style>
    .testimonial-p {
        font-size: 15px;
        line-height: 1.7;
    }
    #three60-hp-root .btn-nav-pri {
        padding: 10px 20px !important;
    }
</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // AF tabs
        const tabs = document.querySelectorAll(".af-tab");
        const panels = document.querySelectorAll(".af-panel");
        tabs.forEach(tab => {
            tab.addEventListener("click", function() {
                tabs.forEach(t => t.classList.remove("active"));
                panels.forEach(p => p.classList.remove("active"));
                this.classList.add("active");
                const panel = document.getElementById(this.getAttribute("data-target"));
                if (panel) panel.classList.add("active");
            });
        });
    });
</script>
<?php get_footer('zoho'); ?>