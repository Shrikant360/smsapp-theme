<?php
/*
Template Name:MSA
*/
get_header("sms");
?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap');

    /* ==========================================================
       ALL styles below are scoped to .msa-page.
       No global *, html or body rules -> header/footer untouched.
       ========================================================== */

    .msa-page {
        --ink: #080c14;
        --ink2: #0f1623;
        --gold: #c9a84c;
        --gold2: #e8c97a;
        --gold-line: rgba(201, 168, 76, 0.35);
        --white: #ffffff;
        --off: #f5f3ee;
        --cream: #faf8f4;
        --text: #1a1f2e;
        --muted: #6b7280;
        --border: rgba(201, 168, 76, 0.2);
        --border-light: #e5e0d8;
        --blue-accent: #2a5cf5;

        font-family: 'Plus Jakarta Sans', sans-serif;
        background: var(--cream);
        color: var(--text);
        font-size: 15px;
        line-height: 1.75;
    }

    /* scoped reset - replaces the old global `*` reset */
    .msa-page *,
    .msa-page *::before,
    .msa-page *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    .msa-brand-mark {
        width: 34px;
        height: 34px;
        border: 1.5px solid var(--gold);
        border-radius: 6px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        font-weight: 700;
        color: var(--gold);
    }

    .msa-brand-text {
        font-size: 13px;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.9);
    }

    .msa-brand-text em {
        color: var(--gold);
        font-style: normal;
    }

    .msa-topbar-tag {
        font-size: 10px;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.35);
        border: 1px solid rgba(255, 255, 255, 0.1);
        padding: 4px 12px;
        border-radius: 20px;
    }

    /* HERO */
    .msa-hero {
        background: url('/wp-content/uploads/2026/09/hero-bg-scaled-1.webp') center center / cover no-repeat;
        min-height: 50vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
        padding: 60px 40px 60px;
        text-align: center;
    }

    .msa-hero-geo {
        position: absolute;
        inset: 0;
        pointer-events: none;
    }

    .msa-geo-ring {
        position: absolute;
        border-radius: 50%;
        border: 1px solid rgba(201, 168, 76, 0.07);
    }

    .msa-geo-ring:nth-child(1) {
        width: 600px;
        height: 600px;
        top: -200px;
        right: -150px;
    }

    .msa-geo-ring:nth-child(2) {
        width: 900px;
        height: 900px;
        top: -350px;
        right: -350px;
        border-color: rgba(201, 168, 76, 0.03);
    }

    .msa-geo-ring:nth-child(3) {
        width: 400px;
        height: 400px;
        bottom: -100px;
        left: -100px;
        border-color: rgba(42, 92, 245, 0.07);
    }

    .msa-geo-line {
        position: absolute;
        background: linear-gradient(90deg, transparent, rgba(201, 168, 76, 0.12), transparent);
        height: 1px;
        width: 60%;
        left: 20%;
    }

    .msa-geo-line:nth-child(4) {
        top: 35%;
    }

    .msa-geo-line:nth-child(5) {
        top: 65%;
        opacity: 0.5;
    }

    .msa-geo-dot {
        position: absolute;
        width: 3px;
        height: 3px;
        border-radius: 50%;
        background: var(--gold);
        opacity: 0.4;
    }

    .msa-geo-dot:nth-child(6) {
        top: 35%;
        left: 20%;
    }

    .msa-geo-dot:nth-child(7) {
        top: 35%;
        right: 20%;
    }

    .msa-geo-dot:nth-child(8) {
        top: 65%;
        left: 20%;
        opacity: 0.2;
    }

    .msa-geo-dot:nth-child(9) {
        top: 65%;
        right: 20%;
        opacity: 0.2;
    }

    .msa-geo-corner {
        position: absolute;
        width: 40px;
        height: 40px;
        opacity: 0.25;
    }

    .msa-geo-corner::before,
    .msa-geo-corner::after {
        content: '';
        position: absolute;
        background: var(--gold);
    }

    .msa-geo-corner.tl {
        top: 80px;
        left: 40px;
    }

    .msa-geo-corner.tl::before {
        top: 0;
        left: 0;
        width: 100%;
        height: 1px;
    }

    .msa-geo-corner.tl::after {
        top: 0;
        left: 0;
        height: 100%;
        width: 1px;
    }

    .msa-geo-corner.br {
        bottom: 40px;
        right: 40px;
    }

    .msa-geo-corner.br::before {
        bottom: 0;
        right: 0;
        width: 100%;
        height: 1px;
    }

    .msa-geo-corner.br::after {
        bottom: 0;
        right: 0;
        height: 100%;
        width: 1px;
    }

    .msa-hero-inner {
        position: relative;
        z-index: 1;
        max-width: 780px;
    }

    .msa-hero-eyebrow {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        font-size: 10px;
        letter-spacing: 3px;
        text-transform: none;
        color: #6b7280;
        margin-bottom: 16px;
        opacity: 0;
        animation: msaFadeUp 0.8s 0.2s forwards;
    }

    .msa-hero-eyebrow::before,
    .msa-hero-eyebrow::after {
        content: '';
        display: block;
        width: 30px;
        height: 1px;
        background: rgba(0, 0, 0, 0.15);
    }

    .msa-hero h1 {
        font-size: clamp(32px, 7vw, 52px);
        font-weight: 700;
        line-height: 1.05;
        color: var(--ink);
        letter-spacing: -1px;
        margin-bottom: 8px;
        margin-top: 0;
        opacity: 0;
        animation: msaFadeUp 0.9s 0.4s forwards;
        text-transform: none;
    }

    .msa-hero h1 em {
        font-style: italic;
        color: var(--ink);
    }

    .msa-hero-sub-title {
        font-size: clamp(16px, 2vw, 22px);
        font-weight: 300;
        color: #374151;
        letter-spacing: 6px;
        text-transform: uppercase;
        margin-bottom: 16px;
        opacity: 0;
        animation: msaFadeUp 0.9s 0.55s forwards;
    }

    .msa-hero-divider {
        width: 1px;
        height: 36px;
        background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.2), transparent);
        margin: 0 auto 24px;
        opacity: 0;
        animation: msaFadeUp 0.8s 0.7s forwards;
    }

    .msa-hero-desc {
        font-size: 14px;
        font-weight: 700;
        color: #4b5563;
        max-width: 700px;
        margin: 0 auto 28px;
        line-height: 1.85;
        opacity: 0;
        animation: msaFadeUp 0.8s 0.8s forwards;
    }

    .msa-hero-pills {
        display: flex;
        gap: 10px;
        justify-content: center;
        flex-wrap: wrap;
        opacity: 0;
        animation: msaFadeUp 0.8s 0.95s forwards;
    }

    .msa-pill {
        display: flex;
        align-items: center;
        gap: 8px;
        background: rgba(255, 255, 255, 0.55);
        border: 1px solid rgba(0, 0, 0, 0.12);
        border-radius: 24px;
        padding: 8px 18px;
        font-size: 12px;
        color: #374151;
        transition: all 0.25s;
    }

    .msa-pill:hover {
        background: rgba(255, 255, 255, 0.85);
        border-color: rgba(0, 0, 0, 0.25);
        color: var(--ink);
    }

    .msa-pill-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
    }

    .msa-pill-dot.in {
        background: #ff9933;
    }

    .msa-pill-dot.us {
        background: #3c6ef0;
    }

    .msa-pill-dot.doc {
        background: var(--gold);
    }

    .msa-scroll-hint {
        position: absolute;
        bottom: 36px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 8px;
        opacity: 0;
        animation: msaFadeIn 1s 1.5s forwards;
    }

    .msa-scroll-hint span {
        font-size: 9px;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: rgba(0, 0, 0, 0.25);
    }

    .msa-scroll-arrow {
        width: 20px;
        height: 30px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 10px;
        position: relative;
    }

    .msa-scroll-arrow::after {
        content: '';
        position: absolute;
        top: 6px;
        left: 50%;
        transform: translateX(-50%);
        width: 3px;
        height: 6px;
        background: rgba(255, 255, 255, 0.25);
        border-radius: 2px;
        animation: msaScrollBounce 1.5s infinite;
    }

    /* LAYOUT */
    .msa-page-wrap {
        max-width: 1120px;
        margin: 0 auto;
        padding: 80px 24px 100px;
        display: grid;
        grid-template-columns: 240px 1fr;
        gap: 48px;
        align-items: start;
    }

    /* SIDEBAR */
    .msa-sidebar {
        position: sticky;
        top: 80px;
    }

    .msa-sidebar-card {
        background: #0057B8;
        border: 1px solid rgba(255, 255, 255, 0.15);
        border-radius: 16px;
        overflow: hidden;
    }

    .msa-sidebar-head {
        padding: 20px 22px 16px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.15);
    }

    .msa-sidebar-head-label {
        font-size: 9px;
        letter-spacing: 2.5px;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.7);
        margin-bottom: 4px;
    }

    .msa-sidebar-head-title {
        font-size: 18px;
        font-weight: 600;
        color: var(--white);
    }

    .msa-sidebar-nav {
        padding: 10px 8px;
    }

    .msa-nav-item {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 6px 12px;
        border-radius: 8px;
        text-decoration: none;
        color: rgba(255, 255, 255);
        font-size: 12px;
        transition: all 0.2s;
    }

    .msa-nav-item:hover {
        background: rgba(255, 255, 255, 0.12);
        color: #ffffff;
    }

    .msa-nav-item.active {
        background: rgba(255, 255, 255, 0.15);
        color: #ffffff;
    }

    .msa-nav-num {
        font-size: 9px;
        color: rgba(255, 255, 255, 0.45);
        min-width: 18px;
    }

    .msa-nav-item:hover .msa-nav-num,
    .msa-nav-item.active .msa-nav-num {
        color: #ffffff;
    }

    .msa-sidebar-actions {
        padding: 12px;
        border-top: 1px solid rgba(255, 255, 255, 0.15);
    }

    .msa-btn-print {
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        width: 100%;
        padding: 10px;
        background: #fff;
        color: var(--ink);
        border: none;
        border-radius: 8px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: all 0.2s;
    }

    .msa-btn-print:hover {
        background: var(--gold2);
        transform: translateY(-1px);
        box-shadow: 0 4px 16px rgba(201, 168, 76, 0.3);
    }

    /* DOCUMENT */
    .msa-doc {
        min-width: 0;
        background: linear-gradient(180deg, #F0F9FF 0%, rgba(240, 240, 240, 0) 100%);
        border-radius: 16px;
        padding: 8px;
    }

    /* PREAMBLE */
    .msa-preamble {
        background: linear-gradient(180deg, #F0F9FF 0%, rgba(240, 240, 240, 0) 100%);
        border-radius: 20px;
        padding: 40px;
        margin-bottom: 28px;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(0, 87, 184, 0.12);
    }

    .msa-preamble::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent, #0057B8, transparent);
    }

    .msa-preamble-label {
        font-size: 9px;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: #0057B8;
        margin-bottom: 16px;
    }

    .msa-preamble p {
        font-size: 14px;
        font-weight: 300;
        color: #374151;
        line-height: 1.85;
        margin-bottom: 12px;
    }

    .msa-preamble p:last-child {
        margin-bottom: 0;
    }

    .msa-preamble strong {
        color: var(--ink);
        font-weight: 600;
    }

    /* PARTIES */
    .msa-parties {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        gap: 16px;
        align-items: center;
        margin-bottom: 28px;
    }

    .msa-party-card {
        background: var(--white);
        border: 1px solid var(--border-light);
        border-radius: 16px;
        padding: 24px;
        position: relative;
        overflow: hidden;
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .msa-party-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 28px rgba(0, 0, 0, 0.07);
    }

    .msa-party-card::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
    }

    .msa-party-card.client::after {
        background: linear-gradient(90deg, #3c6ef0, #6b9df2);
    }

    .msa-party-card.provider::after {
        background: linear-gradient(90deg, var(--gold), var(--gold2));
    }

    .msa-party-flag {
        font-size: 22px;
        margin-bottom: 12px;
    }

    .msa-party-role {
        font-size: 9px;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: var(--muted);
        margin-bottom: 6px;
    }

    .msa-party-name-big {
        font-size: 21px;
        font-weight: 600;
        color: var(--ink);
        line-height: 1.2;
        margin-bottom: 10px;
    }

    .msa-party-detail {
        font-size: 12px;
        color: var(--muted);
        line-height: 1.65;
    }

    .msa-party-entity-row {
        display: flex;
        align-items: flex-start;
        gap: 8px;
        margin-bottom: 8px;
        font-size: 12px;
        color: var(--muted);
    }

    .msa-entity-badge {
        font-size: 10px;
        font-weight: 600;
        padding: 2px 7px;
        border-radius: 4px;
        white-space: nowrap;
        margin-top: 2px;
    }

    .msa-entity-badge.in {
        background: #fff3e0;
        color: #e65100;
    }

    .msa-entity-badge.us {
        background: #e3f2fd;
        color: #1565c0;
    }

    .msa-party-divider {
        text-align: center;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: var(--muted);
    }

    /* RECITALS */
    .msa-recitals {
        background: var(--white);
        border: 1px solid var(--border-light);
        border-radius: 16px;
        padding: 32px;
        margin-bottom: 28px;
    }

    .msa-recitals-label {
        font-size: 11px;
        letter-spacing: 4px;
        text-transform: uppercase;
        color: var(--muted);
        margin-bottom: 20px;
    }

    .msa-recital-item {
        display: flex;
        gap: 16px;
        padding: 14px 0;
        border-bottom: 1px solid var(--border-light);
        font-size: 14px;
        color: var(--text);
        line-height: 1.75;
    }

    .msa-recital-item:last-child {
        border-bottom: none;
        padding-bottom: 0;
    }

    .msa-recital-kw {
        font-size: 14px;
        font-style: italic;
        color: #0057b8;
        font-weight: 600;
        white-space: nowrap;
        padding-top: 2px;
        min-width: 80px;
    }

    /* SECTIONS */
    .msa-section {
        background: var(--white);
        border: 1px solid var(--border-light);
        border-radius: 16px;
        margin-bottom: 14px;
        overflow: hidden;
        transition: box-shadow 0.25s;
        scroll-margin-top: 80px;
    }

    .msa-section:hover {
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.06);
    }

    .msa-section.open {
        box-shadow: 0 8px 36px rgba(0, 0, 0, 0.09);
    }

    .msa-section-trigger {
        display: flex;
        align-items: center;
        gap: 16px;
        padding: 20px 26px;
        cursor: pointer;
        background: var(--white);
        transition: background 0.2s;
        user-select: none;
        border: none;
        width: 100%;
        text-align: left;
    }

    .msa-section-trigger:hover {
        background: #faf9f7;
    }

    .msa-section.open .msa-section-trigger {
        background: var(--ink);
    }

    .msa-section-num-badge {
        width: 36px;
        height: 36px;
        border-radius: 10px;
        background: var(--off);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        font-weight: 500;
        color: var(--muted);
        flex-shrink: 0;
        transition: all 0.2s;
    }

    .msa-section.open .msa-section-num-badge {
        background: #C8654E;
        color: var(--ink);
    }

    .msa-section-title-text {
        flex: 1;
        font-size: 20px;
        font-weight: 600;
        color: var(--ink);
        transition: color 0.2s;
    }

    .msa-section.open .msa-section-title-text {
        color: var(--white);
    }

    .msa-section-icon {
        width: 24px;
        height: 24px;
        border: 1px solid var(--border-light);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 11px;
        color: var(--muted);
        transition: all 0.3s;
        flex-shrink: 0;
    }

    .msa-section.open .msa-section-icon {
        border-color: rgba(201, 168, 76, 0.4);
        color: var(--gold);
        transform: rotate(180deg);
    }

    .msa-section-body {
        display: none;
        padding: 28px 30px 30px;
        border-top: 1px solid var(--border-light);
    }

    .msa-section.open .msa-section-body {
        display: block;
        animation: msaSlideDown 0.25s ease;
    }

    @keyframes msaSlideDown {
        from {
            opacity: 0;
            transform: translateY(-6px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .msa-section-body p {
        font-size: 14px;
        color: #374151;
        line-height: 1.85;
        margin-bottom: 14px;
    }

    .msa-section-body p:last-child {
        margin-bottom: 0;
    }

    .msa-section-body strong {
        color: var(--ink);
        font-weight: 600;
    }

    /* CLAUSE BLOCKS */
    .msa-clause-block {
        margin-bottom: 20px;
        padding: 18px 20px;
        background: #F1F9FF;
        border-radius: 10px;
        border-left: 3px solid #D8DEE9;
    }

    .msa-clause-block:last-child {
        margin-bottom: 0;
    }

    .msa-clause-head {
        font-size: 10px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: #C8654E;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .msa-clause-head::after {
        content: '';
        flex: 1;
        height: 1px;
        background: var(--gold-line);
    }

    .msa-clause-block p {
        font-size: 13.5px;
        color: #374151;
        line-height: 1.8;
        margin-bottom: 8px;
    }

    .msa-clause-block p:last-child {
        margin-bottom: 0;
    }

    /* JURISDICTION GRID */
    .msa-jurisdiction-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 14px;
        margin-bottom: 14px;
    }

    .msa-juris-card {
        border-radius: 12px;
        padding: 20px;
        border: 1px solid var(--border-light);
    }

    .msa-juris-card.india {
        background: linear-gradient(135deg, #fffbf0, #fff8e8);
        border-color: #f0d088;
    }

    .msa-juris-card.us {
        background: linear-gradient(135deg, #f0f6ff, #e8f1ff);
        border-color: #93b8f5;
    }

    .msa-juris-flag {
        font-size: 22px;
        margin-bottom: 8px;
    }

    .msa-juris-entity {
        font-size: 11px;
        font-weight: 600;
        color: var(--muted);
        margin-bottom: 4px;
    }

    .msa-juris-law {
        font-size: 17px;
        font-weight: 600;
        color: var(--ink);
        margin-bottom: 8px;
    }

    .msa-juris-detail {
        font-size: 12.5px;
        color: #4b5563;
        line-height: 1.65;
    }

    .msa-juris-note {
        font-size: 12px;
        color: var(--muted);
        margin-top: 14px;
    }

    /* ALERT */
    .msa-alert-box {
        display: flex;
        gap: 12px;
        align-items: flex-start;
        background: #F1F9FF;
        border: 1px solid #fcd34d;
        border-radius: 10px;
        padding: 14px 18px;
        font-size: 13px;
        color: #92400e;
        margin: 14px 0;
        line-height: 1.65;
    }

    .msa-alert-icon {
        font-size: 16px;
        flex-shrink: 0;
        margin-top: 1px;
    }

    /* TABLE */
    .msa-styled-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 13.5px;
        border-radius: 10px;
        overflow: hidden;
        border: 1px solid var(--border-light);
        margin-top: 8px;
    }

    .msa-styled-table thead {
        background: var(--ink);
    }

    .msa-styled-table th {
        padding: 11px 18px;
        text-align: left;
        font-size: 9px;
        letter-spacing: 1.5px;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.55);
        font-weight: 500;
    }

    .msa-styled-table td {
        padding: 12px 18px;
        border-bottom: 1px solid var(--border-light);
        color: var(--text);
    }

    .msa-styled-table tr:last-child td {
        border-bottom: none;
    }

    .msa-styled-table tr:nth-child(even) td {
        background: var(--off);
    }

    .msa-mono-link {
        font-size: 12px;
        color: var(--blue-accent);
        text-decoration: none;
    }

    .msa-mono-link:hover {
        text-decoration: underline;
    }

    /* ACCEPTANCE */
    .msa-acceptance {
        background: linear-gradient(180deg, #F0F9FF 0%, rgba(240, 240, 240, 0) 100%);
        border-radius: 20px;
        padding: 48px;
        margin-top: 36px;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(0, 87, 184, 0.12);
    }

    .msa-acceptance::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: linear-gradient(90deg, transparent 0%, #0057B8 40%, #4a90d9 60%, transparent 100%);
    }

    .msa-acceptance-watermark {
        position: absolute;
        bottom: -20px;
        right: 16px;
        font-size: 130px;
        font-weight: 700;
        color: rgba(201, 168, 76, 0.04);
        pointer-events: none;
        line-height: 1;
        user-select: none;
    }

    .msa-acceptance-label {
        font-size: 9px;
        letter-spacing: 3px;
        text-transform: uppercase;
        color: #0057B8;
        margin-bottom: 8px;
    }

    .msa-acceptance-title {
        font-size: 38px;
        font-weight: 300;
        color: var(--ink);
        margin-bottom: 8px;
    }

    .msa-acceptance-sub {
        font-size: 13px;
        font-weight: 300;
        color: #4b5563;
        max-width: 580px;
        line-height: 1.85;
        margin-bottom: 40px;
    }

    .msa-acceptance-sub strong {
        color: var(--ink);
        font-weight: 500;
    }

    .msa-acceptance-points {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 16px;
        margin-top: 8px;
    }

    .msa-acceptance-point {
        background: #ffffff;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        padding: 20px;
        transition: border-color 0.2s, background 0.2s;
    }

    .msa-acceptance-point:hover {
        background: #f0f9ff;
        border-color: #0057B8;
    }

    .msa-acceptance-point-icon {
        font-size: 11px;
        font-weight: 500;
        color: #0057B8;
        margin-bottom: 10px;
        opacity: 0.9;
    }

    .msa-acceptance-point-text {
        font-size: 13px;
        font-weight: 300;
        color: #4b5563;
        line-height: 1.75;
    }

    .msa-acceptance-point-text strong {
        display: block;
        margin-bottom: 4px;
        color: var(--ink);
        font-weight: 600;
        font-size: 13.5px;
    }

    @media (max-width: 680px) {
        .msa-acceptance-points {
            grid-template-columns: 1fr;
        }
    }

    /* ANIMATIONS */
    @keyframes msaFadeUp {
        from {
            opacity: 0;
            transform: translateY(22px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes msaFadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes msaScrollBounce {

        0%,
        100% {
            transform: translateX(-50%) translateY(0);
        }

        50% {
            transform: translateX(-50%) translateY(8px);
        }
    }

    .msa-reveal {
        opacity: 0;
        transform: translateY(18px);
        transition: opacity 0.6s ease, transform 0.6s ease;
    }

    .msa-reveal.visible {
        opacity: 1;
        transform: translateY(0);
    }

    /* RESPONSIVE */
    @media (max-width: 860px) {
        .msa-page-wrap {
            grid-template-columns: 1fr;
        }

        .msa-sidebar {
            display: none;
        }

        .msa-parties {
            grid-template-columns: 1fr;
        }

        .msa-party-divider {
            display: none;
        }

        .msa-jurisdiction-grid {
            grid-template-columns: 1fr;
        }

        .msa-hero {
            min-height: auto;
            padding: 100px 24px 60px;
        }

        .msa-hero h1 {
            font-size: 48px;
        }

        .msa-acceptance {
            padding: 32px 24px;
        }
    }

    /* ===== PRINT: nothing hidden, nothing white-on-white ===== */
    @media print {

        .msa-sidebar,
        .msa-scroll-hint,
        .msa-hero-geo,
        .msa-acceptance-watermark,
        .msa-section-icon {
            display: none !important;
        }

        .msa-page {
            background: #fff !important;
        }

        /* scroll/entrance animations must never hide content in print */
        .msa-reveal,
        .msa-reveal * {
            opacity: 1 !important;
            transform: none !important;
            transition: none !important;
        }

        .msa-hero * {
            opacity: 1 !important;
            animation: none !important;
        }

        /* hero -> light, compact letterhead */
        .msa-hero {
            background: #fff !important;
            min-height: 0 !important;
            padding: 6px 0 16px !important;
            text-align: left !important;
            border-bottom: 2px solid var(--gold);
        }

        .msa-hero h1 {
            color: var(--ink) !important;
            font-size: 32px !important;
        }

        .msa-hero h1 em {
            color: var(--gold) !important;
        }

        .msa-hero-eyebrow {
            color: var(--gold) !important;
        }

        .msa-hero-sub-title {
            color: var(--muted) !important;
        }

        .msa-hero-desc {
            color: var(--text) !important;
            margin: 0 0 14px !important;
            max-width: none !important;
        }

        .msa-hero-pills {
            justify-content: flex-start !important;
        }

        .msa-pill {
            color: var(--ink) !important;
            background: none !important;
            border: 1px solid var(--border-light) !important;
        }

        .msa-page-wrap {
            grid-template-columns: 1fr;
            padding: 20px;
        }

        /* preamble -> light */
        .msa-preamble {
            background: #fff !important;
            border: 1px solid var(--gold-line) !important;
        }

        .msa-preamble,
        .msa-preamble p,
        .msa-preamble strong {
            color: var(--text) !important;
        }

        .msa-preamble-label {
            color: var(--gold) !important;
        }

        .msa-preamble a {
            color: var(--blue-accent) !important;
        }

        /* accordion: every section fully expanded and readable */
        .msa-section-body {
            display: block !important;
        }

        .msa-section-trigger {
            background: var(--off) !important;
            page-break-after: avoid;
        }

        .msa-section-title-text {
            color: var(--ink) !important;
        }

        .msa-section-num-badge {
            background: var(--gold) !important;
            color: var(--ink) !important;
        }

        .msa-section {
            page-break-inside: auto;
        }

        .msa-clause-block,
        .msa-alert-box,
        .msa-juris-card,
        .msa-recital-item,
        .msa-party-card,
        .msa-acceptance-point {
            page-break-inside: avoid;
        }

        /* acceptance card -> light */
        .msa-acceptance {
            background: #fff !important;
            border: 1px solid var(--gold-line) !important;
        }

        .msa-acceptance-label,
        .msa-acceptance-point-icon {
            color: var(--gold) !important;
        }

        .msa-acceptance-title {
            color: var(--ink) !important;
        }

        .msa-acceptance-sub,
        .msa-acceptance-point-text,
        .msa-acceptance-point-text strong {
            color: var(--text) !important;
        }
    }
</style>

<div class="msa-page">

    <section class="msa-hero">
        <div class="msa-hero-geo">
            <div class="msa-geo-ring"></div>
            <div class="msa-geo-ring"></div>
            <div class="msa-geo-ring"></div>
            <div class="msa-geo-line"></div>
            <div class="msa-geo-line"></div>
            <div class="msa-geo-dot"></div>
            <div class="msa-geo-dot"></div>
            <div class="msa-geo-dot"></div>
            <div class="msa-geo-dot"></div>
            <div class="msa-geo-corner tl"></div>
            <div class="msa-geo-corner br"></div>
        </div>
        <div class="msa-hero-inner">
            <div class="msa-hero-eyebrow">Legal Agreement &middot; July 2026 Edition &middot; Version 1.0</div>
            <h1>Master Services Agreement</h1>
            <div class="msa-hero-sub-title">Applications &nbsp;&middot;&nbsp; 360 SMS App &nbsp;&middot;&nbsp; 360 CTI</div>
            <div class="msa-hero-divider"></div>
            <p class="msa-hero-desc">This Agreement governs the software products and application services delivered by 360 Degree Cloud &mdash;
                incorporated by reference into every Order Form, quote, and invoice. Customer-specific details are captured in the
                applicable Order Form.</p>
            <div class="msa-hero-pills">
                <div class="msa-pill">India Entity &mdash; Faridabad, Haryana</div>
                <div class="msa-pill">US Entity &mdash; California</div>
                <div class="msa-pill">Effective 04 July 2026</div>
                <div class="msa-pill">10 Sections</div>
            </div>
        </div>
    </section>

    <div class="msa-page-wrap">
        <aside class="msa-sidebar">
            <div class="msa-sidebar-card">
                <div class="msa-sidebar-head">
                    <div class="msa-sidebar-head-label">Contents</div>
                    <div class="msa-sidebar-head-title">Agreement Index</div>
                </div>
                <nav class="msa-sidebar-nav">
                    <a href="#sA" class="msa-nav-item"><span class="msa-nav-num">A</span>Acceptance</a>
                    <a href="#sB" class="msa-nav-item"><span class="msa-nav-num">B</span>Scope of Services</a>
                    <a href="#sC" class="msa-nav-item"><span class="msa-nav-num">C</span>Fees &amp; Payment</a>
                    <a href="#sD" class="msa-nav-item"><span class="msa-nav-num">D</span>Term of Agreement</a>
                    <a href="#sE" class="msa-nav-item"><span class="msa-nav-num">E</span>Representations &amp; Warranties</a>
                    <a href="#sF" class="msa-nav-item"><span class="msa-nav-num">F</span>Indemnity &amp; Liability</a>
                    <a href="#sG" class="msa-nav-item"><span class="msa-nav-num">G</span>Termination &amp; Refunds</a>
                    <a href="#sH" class="msa-nav-item"><span class="msa-nav-num">H</span>Jurisdiction &amp; Governing Law</a>
                    <a href="#sI" class="msa-nav-item"><span class="msa-nav-num">I</span>Website Terms</a>
                    <a href="#sJ" class="msa-nav-item"><span class="msa-nav-num">J</span>General Provisions</a>
                </nav>
                <div class="msa-sidebar-actions">
                    <button class="msa-btn-print" onclick="window.print()">&#128438;&nbsp; Print / Save PDF</button>
                </div>
            </div>
        </aside>

        <main>
            <div class="msa-preamble msa-reveal">
                <div class="msa-preamble-label">Preamble</div>
                <p>This <strong>Master Services Agreement</strong> ("Agreement") is entered into between the <strong>Customer</strong> (as identified in the
                    applicable Order Form, which expression shall, unless repugnant to the context, include its subsidiaries, affiliates,
                    successors, permitted assigns and representatives) and <strong>360 Degree Cloud</strong> &mdash; the applicable entity identified on
                    that Order Form, either the India entity or the US entity (which expression shall include its representatives, affiliates,
                    assigns, subsidiaries and successors) &mdash; collectively referred to as the "Parties." This Agreement applies to
                    <strong>360 Degree Cloud application products and services</strong>.
                </p>
                <p>Customer-specific details including name, address, effective date, and commercial terms are set out in the respective
                    <strong>Order Form</strong>, which is incorporated herein by reference. By signing or accepting an Order Form referencing this
                    Agreement, by making payment against it, or by using the Services, the Customer confirms it has read, understood, and
                    agrees to be legally bound by all terms herein.
                </p>
                <p><strong>"Third Party"</strong> refers to any entity outside of 360 Degree Cloud, the Customer, and their respective Affiliates
                    that provides or vends specialised software services or dependencies. The <strong>version of this Agreement in effect on the
                        Effective Date of your Order Form</strong> governs that order; archived versions are available on request at
                    <a href="mailto:legal@360degreecloud.com">legal@360degreecloud.com</a>.
                </p>
            </div>

            <div class="msa-parties msa-reveal">
                <div class="msa-party-card client">
                    <div class="msa-party-flag">&#129309;</div>
                    <div class="msa-party-role">The Customer</div>
                    <div class="msa-party-name-big">As Specified<br>in the Order Form</div>
                    <div class="msa-party-detail">All Customer details &mdash; name, registered address, jurisdiction, and entity type &mdash; are captured
                        in the applicable Order Form signed, accepted, or paid by the Customer.</div>
                </div>
                <div class="msa-party-divider">and</div>
                <div class="msa-party-card provider">
                    <div class="msa-party-flag">&#9729;&#65039;</div>
                    <div class="msa-party-role">Service Provider</div>
                    <div class="msa-party-name-big">360 Degree<br>Cloud</div>
                    <div class="msa-party-entity-row">
                        <span class="msa-entity-badge in">IN</span>
                        <span>360 Degree Cloud Technologies Pvt. Ltd.<br><small>SCO-11, Sector-16, Faridabad, Haryana &ndash; 121002, India</small></span>
                    </div>
                    <div class="msa-party-entity-row">
                        <span class="msa-entity-badge us">US</span>
                        <span>360 Degree Cloud Technologies LLC<br><small>1968 S. Coast Hwy #1412, Laguna Beach, California 92651, USA</small></span>
                    </div>
                    <div class="msa-party-detail" style="margin-top:10px;font-size:11px;">Applicable entity identified on the executed Order Form.</div>
                </div>
            </div>

            <div class="msa-recitals msa-reveal">
                <div class="msa-recitals-label">Recitals</div>
                <div class="msa-recital-item"><span class="msa-recital-kw">Whereas</span><span>360 Degree Cloud is engaged in the business of providing a wide
                        range of software products and application services, listed and described at
                        <a href="https://360smsapp.com/" target="_blank" rel="noopener">360smsapp.com</a>.</span></div>
                <div class="msa-recital-item"><span class="msa-recital-kw">Whereas</span><span>The Customer wishes to obtain, either for itself or for its end
                        users, the 360 Degree Cloud services within the scope specified herein &mdash; and even where the Customer registers for a free
                        version or free trial of the service, the applicable provisions of this Agreement also govern that use.</span></div>
                <div class="msa-recital-item"><span class="msa-recital-kw">Therefore</span><span>In consideration of the mutual covenants set forth herein, the
                        Parties, intending to be legally bound, hereby covenant and agree as follows.</span></div>
            </div>

            <div class="msa-section msa-reveal open" id="sA">
                <button class="msa-section-trigger" onclick="msaToggle(this)">
                    <div class="msa-section-num-badge">A</div>
                    <div class="msa-section-title-text">Acceptance of this Agreement</div>
                    <div class="msa-section-icon">&#9660;</div>
                </button>
                <div class="msa-section-body">
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">How this Agreement is Accepted</div>
                        <p>The Customer accepts this Agreement, and it becomes binding between the Parties, upon the <strong>earliest</strong> of:
                            (a) the Customer&rsquo;s signature on, or written acceptance of, an <strong>Order Form</strong> that references this Agreement;
                            (b) <strong>payment</strong> against any such Order Form, quote, or invoice; or
                            (c) any <strong>access to or use of the Services</strong>, including a free version or free trial.</p>
                    </div>
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">One Contract per Order Form</div>
                        <p>Each Order Form, together with this Agreement and the Website Terms referred to in Section I, forms the entire contract
                            for the Services it describes. The individual accepting on behalf of the Customer represents that they have
                            <strong>authority to bind the Customer</strong>.
                        </p>
                    </div>
                    <div class="msa-alert-box"><span class="msa-alert-icon">&#9888;&#65039;</span><span>The version of this Agreement in effect on the Effective Date of your Order Form governs that order and its renewals for the term then in effect. Updated versions apply to new orders and subsequent renewals only.</span></div>
                </div>
            </div>

            <div class="msa-section msa-reveal" id="sB">
                <button class="msa-section-trigger" onclick="msaToggle(this)">
                    <div class="msa-section-num-badge">B</div>
                    <div class="msa-section-title-text">Scope of Services</div>
                    <div class="msa-section-icon">&#9660;</div>
                </button>
                <div class="msa-section-body">
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Services under Order Forms</div>
                        <p>On and from the Effective Date of the applicable Order Form and during its term, 360 Degree Cloud shall provide the
                            Services, subject to the terms and conditions of this Agreement. The scope of Services shall be as listed in each
                            <strong>Order Form, quote, invoice, annexure</strong>, or other form in writing agreed between the Parties, each of which is
                            considered part and parcel of this Agreement.
                        </p>
                    </div>
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Territory &amp; Non-Exclusivity</div>
                        <p>360 Degree Cloud shall provide the Services to any place within the Territory of the Customer as deemed necessary by the
                            Customer and as agreed between the Parties. The Parties expressly acknowledge that this Agreement is entered into on a
                            <strong>non-exclusive basis</strong>. 360 Degree Cloud agrees to provide the Customer with the Service(s) specified in any Order Form,
                            quote, invoice or annexure executed or accepted by the Parties in the context of this Agreement.
                        </p>
                    </div>
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">New Services</div>
                        <p>If the Customer wishes to avail any new service other than the services already agreed and mentioned in an Order Form,
                            quote, invoice or annexure, the same may be discussed between the Parties and a separate Order Form shall be released by
                            360 Degree Cloud and accepted by the Customer on the basis of the Website Terms applicable to that service. The full range of
                            services is listed at <a href="https://360smsapp.com/" target="_blank" rel="noopener">360smsapp.com</a>
                            (&ldquo;<strong>Types of Services</strong>&rdquo;).</p>
                    </div>
                </div>
            </div>

            <div class="msa-section msa-reveal" id="sC">
                <button class="msa-section-trigger" onclick="msaToggle(this)">
                    <div class="msa-section-num-badge">C</div>
                    <div class="msa-section-title-text">Service Fees &amp; Payment</div>
                    <div class="msa-section-icon">&#9660;</div>
                </button>
                <div class="msa-section-body">
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Service Fees</div>
                        <p>In consideration of the Services, the Customer agrees to pay the fees and charges set out in the applicable Order Form
                            (&ldquo;<strong>Service Fees</strong>&rdquo;), along with other fees and charges as mutually agreed by the Parties.
                            &ldquo;<strong>Document</strong>&rdquo; means any services schedule, appendix, quotation (&ldquo;Quote&rdquo;), order form, invoice, or statement
                            of work for such Services.</p>
                    </div>
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Payment &amp; Late Payment</div>
                        <p>The Customer shall make payment within <strong>thirty (30) days</strong> of receipt of the Document, unless a different due date
                            is stated on it. Overdue amounts accrue interest at <strong>1.5% per month</strong> (or the maximum permitted by law) from the due
                            date. Notwithstanding anything contained herein, 360 Degree Cloud may <strong>suspend or disconnect the Services</strong>, without
                            liability to the Customer, in the event of any payment default, without prejudice to its rights under Applicable Law. Where
                            payment is made against a pro-forma invoice, 360 Degree Cloud shall share the tax invoice promptly thereafter.</p>
                    </div>
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Invoice Disputes</div>
                        <p>Any good-faith dispute regarding an invoice must be notified to 360 Degree Cloud within <strong>fifteen (15) days</strong> of
                            receipt of the invoice; the undisputed portion remains payable as provided herein. The Parties will work together in good
                            faith to resolve the dispute, and any amounts owed shall be paid within fifteen (15) days of its resolution.</p>
                    </div>
                </div>
            </div>

            <div class="msa-section msa-reveal" id="sD">
                <button class="msa-section-trigger" onclick="msaToggle(this)">
                    <div class="msa-section-num-badge">D</div>
                    <div class="msa-section-title-text">Term of Agreement</div>
                    <div class="msa-section-icon">&#9660;</div>
                </button>
                <div class="msa-section-body">
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Three-Year Term &amp; Renewal</div>
                        <p>This Agreement is effective from its acceptance under Section A and remains in effect for a period of
                            <strong>three (3) years</strong>. Upon expiration, it automatically renews for successive one-year periods &mdash; with the renewal
                            Order Form or annexure shared with the Customer &mdash; unless either Party provides written notice of termination in accordance
                            with the Termination clause.
                        </p>
                    </div>
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Survival of Order Forms</div>
                        <p>Termination or expiry of this Agreement does not affect any Order Form then in effect, which remains governed by this
                            Agreement until the end of its own term.</p>
                    </div>
                </div>
            </div>

            <div class="msa-section msa-reveal" id="sE">
                <button class="msa-section-trigger" onclick="msaToggle(this)">
                    <div class="msa-section-num-badge">E</div>
                    <div class="msa-section-title-text">Representations &amp; Warranties</div>
                    <div class="msa-section-icon">&#9660;</div>
                </button>
                <div class="msa-section-body">
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">360 Degree Cloud</div>
                        <p>360 Degree Cloud represents and warrants that it has the full right, power, and authority to enter into this Agreement
                            and perform its obligations, and that there are no outstanding agreements, commitments, arrangements, encumbrances, or rights
                            with or in other parties that may interfere with or preclude such performance.</p>
                    </div>
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Customer Compliance</div>
                        <p>The Customer shall comply with all applicable <strong>telecom and regulatory laws</strong> and regulations in relation to the
                            transmission of content, including without limitation all applicable Website Terms, data-protection and privacy laws. The
                            Customer will provide any governmental body or 360 Degree Cloud with such information or material relating to the Services as
                            reasonably requested to carry out any investigation in connection with the Services.</p>
                    </div>
                </div>
            </div>

            <div class="msa-section msa-reveal" id="sF">
                <button class="msa-section-trigger" onclick="msaToggle(this)">
                    <div class="msa-section-num-badge">F</div>
                    <div class="msa-section-title-text">Indemnity &amp; Limitation of Liability</div>
                    <div class="msa-section-icon">&#9660;</div>
                </button>
                <div class="msa-section-body">
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Mutual Indemnity</div>
                        <p>Either Party (&ldquo;<strong>Indemnifying Party</strong>&rdquo;) agrees to indemnify, defend and hold the other Party, its directors,
                            officers, employees, service providers, and agents (&ldquo;<strong>Indemnified Party</strong>&rdquo;) harmless from and against claims,
                            demands, actions, liabilities, costs, interest, damages, and expenses of any nature whatsoever (including all legal and other
                            costs, charges and expenses) incurred or suffered by the Indemnified Party, arising out of: (a) any wrongful or negligent act
                            or omission of the Indemnifying Party; (b) any breach by the Indemnifying Party of its obligations, undertakings, warranties
                            or covenants under this Agreement; (c) any breach of applicable law, rules, regulations or legal requirements by the
                            Indemnifying Party; and (d) any third-party action or claim made against the Indemnified Party by reason of any action taken
                            or omitted by the Indemnifying Party under this Agreement.</p>
                    </div>
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">No Indirect Damages</div>
                        <p>Notwithstanding anything to the contrary elsewhere in this Agreement, no Party shall in any event be liable to any other
                            person or Party, whether in contract, tort, or otherwise, for any <strong>consequential, incidental, indirect, special or
                                punitive damages</strong>, including loss of future revenue, income or profits, diminution of value, or loss of business
                            reputation or opportunity.</p>
                    </div>
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Limitation of Liability</div>
                        <p>In no event shall the total aggregate liability of 360 Degree Cloud arising out of or related to this Agreement exceed
                            the total <strong>Subscription Fees paid by the Customer for the Services in the twelve (12) months</strong> immediately preceding
                            the event giving rise to the claim. &ldquo;<strong>Subscription Fees</strong>&rdquo; means the recurring licence/subscription fees set out
                            in the applicable Order Form, and excludes implementation, onboarding, support, professional services, consulting, credits,
                            communications or carrier/10DLC surcharges, taxes, and any other charges. If no Subscription Fees have been paid, 360 Degree
                            Cloud shall have no liability.</p>
                    </div>
                </div>
            </div>

            <div class="msa-section msa-reveal" id="sG">
                <button class="msa-section-trigger" onclick="msaToggle(this)">
                    <div class="msa-section-num-badge">G</div>
                    <div class="msa-section-title-text">Termination &amp; Refunds</div>
                    <div class="msa-section-icon">&#9660;</div>
                </button>
                <div class="msa-section-body">
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Termination</div>
                        <p>Both Parties reserve the right to terminate this Agreement in case of material breach by giving <strong>30 days&rsquo;</strong>
                            advance written notice to the other Party. 360 Degree Cloud reserves the right to <strong>immediately terminate</strong> the
                            Agreement if the Customer breaches any provision relating to security or confidentiality, fails to pay outstanding amounts
                            for the Services, or uses the Services in an unauthorised manner or engages in activities that compromise the 360 Degree
                            Cloud network, services, or the experience of other users.</p>
                    </div>
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Subscription Renewal &amp; Cancellation</div>
                        <p>The Customer&rsquo;s obligation to pay fees continues until the subscription is cancelled. Prior to every renewal due,
                            360 Degree Cloud will share the renewal quote, and the Customer has the right to cancel the subscription prior to the renewal
                            date. In the absence of any termination notice from the Customer before the renewal date, the subscription
                            <strong>automatically renews for another term</strong> and the Customer is obligated to make payment for the renewed term.
                        </p>
                    </div>
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Refunds</div>
                        <p>Refunds, if applicable, will only be issued where the Customer has reported a <strong>verifiable issue</strong> in the Services
                            that 360 Degree Cloud is unable to resolve within a reasonable period. Any such refund shall be provided on a
                            <strong>pro-rata basis</strong>, limited solely to the licence subscription fees for the affected period.
                        </p>
                    </div>
                    <div class="msa-alert-box"><span class="msa-alert-icon">&#9888;&#65039;</span><span>No refunds are provided for implementation, support, consulting, credits, or any other fees.</span></div>
                </div>
            </div>

            <div class="msa-section msa-reveal" id="sH">
                <button class="msa-section-trigger" onclick="msaToggle(this)">
                    <div class="msa-section-num-badge">H</div>
                    <div class="msa-section-title-text">Jurisdiction, Arbitration &amp; Governing Law</div>
                    <div class="msa-section-icon">&#9660;</div>
                </button>
                <div class="msa-section-body">
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Dispute Resolution</div>
                        <p>Any dispute arising out of this Agreement, or any issue relating to its interpretation or validity, may be referred by
                            either Party to a <strong>sole arbitrator mutually appointed by the Parties</strong>. The governing law and arbitration mechanics
                            depend on the 360 Degree Cloud entity named on the applicable Order Form. The language of the arbitration and proceedings
                            shall be English.</p>
                    </div>
                    <div class="msa-jurisdiction-grid">
                        <div class="msa-juris-card india">
                            <div class="msa-juris-flag">&#127470;&#127475;</div>
                            <div class="msa-juris-entity">360 Degree Cloud Technologies Pvt. Ltd. (India)</div>
                            <div class="msa-juris-law">Laws of India</div>
                            <div class="msa-juris-detail">Where the Customer&rsquo;s place of business is <strong>within India</strong>: arbitration under the
                                <strong>Arbitration &amp; Conciliation Act, 1996</strong>, seat &amp; venue <strong>Faridabad, Haryana</strong>. Where the Customer is
                                <strong>outside India</strong>: arbitration under the <strong>ICC Rules</strong>.
                            </div>
                        </div>
                        <div class="msa-juris-card us">
                            <div class="msa-juris-flag">&#127482;&#127480;</div>
                            <div class="msa-juris-entity">360 Degree Cloud Technologies LLC (US)</div>
                            <div class="msa-juris-law">Laws of California, USA</div>
                            <div class="msa-juris-detail">Governed by the laws of the <strong>State of California</strong> and controlling United States federal
                                law, without regard to conflict-of-law principles. Each Party agrees to the <strong>exclusive jurisdiction</strong> of the
                                applicable courts.</div>
                        </div>
                    </div>
                    <p class="msa-juris-note">The applicable entity and governing law are identified on the executed Order Form.</p>
                </div>
            </div>

            <div class="msa-section msa-reveal" id="sI">
                <button class="msa-section-trigger" onclick="msaToggle(this)">
                    <div class="msa-section-num-badge">I</div>
                    <div class="msa-section-title-text">Agreement to Website Terms</div>
                    <div class="msa-section-icon">&#9660;</div>
                </button>
                <div class="msa-section-body">
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Website Terms Incorporated</div>
                        <p>By availing 360 Degree Cloud services, the Customer acknowledges and agrees to be bound by the
                            <a href="https://360smsapp.com/privacy-policy/" target="_blank" rel="noopener">Privacy Policy</a>, the
                            <a href="https://360smsapp.com/terms-and-conditions/" target="_blank" rel="noopener">Terms and Conditions</a>, and the
                            <a href="https://360smsapp.com/terms-of-service/" target="_blank" rel="noopener">Terms of Use / Terms of Service</a> published
                            on the 360 Degree Cloud website (<a href="https://360smsapp.com/" target="_blank" rel="noopener">360smsapp.com</a>), as may be
                            amended, modified, or updated from time to time and posted on the website (together, the
                            &ldquo;<strong>Website Terms</strong>&rdquo;). Acceptance of this Agreement constitutes acceptance of the Website Terms.
                        </p>
                    </div>
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Order of Precedence</div>
                        <p>In the event of any conflict, inconsistency, or overlap between the provisions of this Agreement (including its Order
                            Forms, annexures, appendices, purchase orders, or work orders) and the Website Terms: the provisions of this Agreement shall
                            prevail and govern to the extent such matters are expressly addressed herein; and for all matters not expressly covered under
                            this Agreement, the applicable Website Terms shall apply and be binding on the Customer.</p>
                    </div>
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Updated Website Terms</div>
                        <p>If the Customer does not agree to any updated Website Terms, the Customer shall immediately discontinue use of the
                            Services by notifying 360 Degree Cloud and shall settle all outstanding dues immediately. By continuing to use the Services,
                            the Customer agrees to be bound by such Website Terms and any updates thereto.</p>
                    </div>
                </div>
            </div>

            <div class="msa-section msa-reveal" id="sJ">
                <button class="msa-section-trigger" onclick="msaToggle(this)">
                    <div class="msa-section-num-badge">J</div>
                    <div class="msa-section-title-text">General Provisions &amp; Interpretations</div>
                    <div class="msa-section-icon">&#9660;</div>
                </button>
                <div class="msa-section-body">
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Entire Agreement &amp; Amendment</div>
                        <p>This Agreement (including its recitals, schedules, Order Forms, quotes, invoices and annexures) constitutes the entire
                            agreement and understanding between the Parties for the Services and supersedes any previous agreement or understanding
                            between the Parties in respect of them (including any LOI/MOU).</p>
                    </div>
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Severability &amp; One Document</div>
                        <p>If a court of law holds any provision of this Agreement to be illegal, invalid or unenforceable, that provision shall be
                            deemed amended to achieve an economic effect as near as possible to that provided by the original provision, and the
                            legality, validity and enforceability of the remaining provisions shall not be affected. All annexures, quotes, invoices and
                            Order Forms form an integral part of this Agreement and shall be read together with it as <strong>one document</strong>.</p>
                    </div>
                    <div class="msa-clause-block">
                        <div class="msa-clause-head">Interpretations</div>
                        <p>&ldquo;<strong>Affiliate</strong>&rdquo; means any entity that, directly or indirectly, controls, is controlled by, or is under common
                            control with such entity (but only for so long as such control exists), where &ldquo;control&rdquo; means the ownership of more than
                            50% of the outstanding shares or securities representing the right to vote in the election of directors or other managing
                            authority of such entity. &ldquo;<strong>Order Form</strong>&rdquo; means any order form, quote, appendix, annexure, or invoice issued by
                            360 Degree Cloud and signed, accepted, or paid by the Customer, which references or incorporates this Agreement.
                            &ldquo;<strong>Services</strong>&rdquo; means the products and services to be provided hereunder between the Customer and 360 Degree Cloud
                            or any of their Affiliates, as set out in the applicable Order Forms, quotes, invoices, or annexures.</p>
                    </div>
                </div>
            </div>

            <div class="msa-acceptance msa-reveal">
                <div class="msa-acceptance-watermark">MSA</div>
                <div class="msa-acceptance-label">Acknowledgement</div>
                <div class="msa-acceptance-title">Acceptance of Terms</div>
                <div class="msa-acceptance-sub">This Agreement is accepted electronically and is valid without physical signature; a signed
                    counterpart may be executed on request. By any of the actions below, the Customer confirms it has read, understood, and
                    agrees to be legally bound by all terms and conditions set forth herein. All party details and commercial terms are
                    captured exclusively in the Order Form.</div>

                <div class="msa-acceptance-points">
                    <div class="msa-acceptance-point">
                        <div class="msa-acceptance-point-icon">01</div>
                        <div class="msa-acceptance-point-text"><strong>Signature or Written Acceptance</strong> &mdash; Signing, or accepting in writing
                            (including over email), an Order Form that references this Agreement constitutes full acceptance of all terms herein.</div>
                    </div>
                    <div class="msa-acceptance-point">
                        <div class="msa-acceptance-point-icon">02</div>
                        <div class="msa-acceptance-point-text"><strong>Payment</strong> &mdash; Payment against any Order Form, quote, or invoice referencing
                            this Agreement constitutes acceptance with equal legal force as a direct signature on this document.</div>
                    </div>
                    <div class="msa-acceptance-point">
                        <div class="msa-acceptance-point-icon">03</div>
                        <div class="msa-acceptance-point-text"><strong>Use of the Services</strong> &mdash; Any access to or use of the Services, including a
                            free version or free trial, constitutes acceptance of this Agreement and the Website Terms it incorporates.</div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div><!-- /.msa-page -->

<script>
    (function () {
        var msaRoot = document.querySelector('.msa-page');
        if (!msaRoot) return;

        window.msaToggle = function (btn) {
            btn.closest('.msa-section').classList.toggle('open');
        };

        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (e) {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                    observer.unobserve(e.target);
                }
            });
        }, {
            threshold: 0.06,
            rootMargin: '0px 0px -30px 0px'
        });

        // scoped to msaRoot so theme/footer elements are never touched
        msaRoot.querySelectorAll('.msa-reveal').forEach(function (el, i) {
            el.style.transitionDelay = Math.min(i * 0.05, 0.3) + 's';
            observer.observe(el);
        });

        var sections = msaRoot.querySelectorAll('.msa-section[id]');
        var navItems = msaRoot.querySelectorAll('.msa-nav-item');
        window.addEventListener('scroll', function () {
            var cur = '';
            sections.forEach(function (s) {
                if (window.scrollY >= s.offsetTop - 110) cur = s.id;
            });
            navItems.forEach(function (n) {
                n.classList.toggle('active', n.getAttribute('href') === '#' + cur);
            });
        }, {
            passive: true
        });

        window.addEventListener('beforeprint', function () {
            msaRoot.querySelectorAll('.msa-reveal').forEach(function (el) { el.classList.add('visible'); });
            msaRoot.querySelectorAll('.msa-section').forEach(function (el) { el.classList.add('open'); });
        });
    })();
</script>
<?php
get_footer('contact');
?>