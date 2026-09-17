<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php
       // wp_head();
    ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>360 SMS App | #1 Salesforce SMS App on AppExchange · 1,200+ Reviews</title>
    <meta name="description" content="360 SMS App is the #1 rated Salesforce SMS app on AppExchange with 1,200+ reviews. Send SMS, WhatsApp, and more natively inside Salesforce.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <style>
        /* ═══════════════════════════════════════════════════
           1. ROOT VARIABLES & RESET — SALESFORCE
           ═══════════════════════════════════════════════════ */
        #three60-hp-root {
            --brand-zo: #C4152A;
            --brand: #0057B8;
            --brand-light: #E8F0FB;
            --brand-mid: #CCE0F7;
            --brand-dark: #004a9e;
            --brand-bg: #0056b3;
            --grn: #1A7A2E;
            --grn-l: #E4FCE8;
            --ink: #1a1a1a;
            --ink2: #444;
            --ink3: #777;
            --ink4: #aaa;
            --bdr: #e2e2e2;
            --bg: #fff;
            --bg2: #F7F7F5;
            --bg3: #EFEFEB;
            --sh: 0 4px 16px rgba(0, 0, 0, .07);
            --sh-lg: 0 16px 48px rgba(0, 0, 0, .12), 0 4px 16px rgba(0, 0, 0, .07);
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: var(--ink);
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
            width: 100%;
            max-width: 100%;
            overflow-x: hidden;
            position: relative;
        }

        #three60-hp-root *,
        #three60-hp-root *::before,
        #three60-hp-root *::after {
            box-sizing: border-box;
        }

        #three60-hp-root .container {
            max-width: 1210px;
            margin-right: auto !important;
            margin-left: auto !important;
            padding-right: 20px !important;
            padding-left: 20px !important;
        }

        /* ═══════════════════════════════════════════════════
           2. REUSABLE UTILITY CLASSES
           ═══════════════════════════════════════════════════ */
        /* -- Font sizes -- */
        .fs-11 { font-size: 11px !important; }
        .fs-12 { font-size: 12px !important; }
        .fs-13 { font-size: 13px !important; }
        .fs-14 { font-size: 14px !important; }
        .fs-15 { font-size: 15px !important; }
        .fs-16 { font-size: 16px !important; }
        .fs-17 { font-size: 17px !important; }
        .fs-18 { font-size: 18px !important; }
        .fs-19 { font-size: 19px !important; }
        .fs-21 { font-size: 21px !important; }
        .fs-32 { font-size: 32px !important; }
        .fs-34 { font-size: 34px !important; }
        .fs-36 { font-size: 36px !important; }
        .fs-38 { font-size: 38px !important; }
        .fs-40 { font-size: 40px !important; }
        .fs-44 { font-size: 44px !important; }
        .fs-48 { font-size: 48px !important; }

        /* -- Line heights -- */
        .lh-1 { line-height: 1 !important; }
        .lh-105 { line-height: 1.05 !important; }
        .lh-11 { line-height: 1.1 !important; }
        .lh-13 { line-height: 1.3 !important; }
        .lh-14 { line-height: 1.4 !important; }
        .lh-15 { line-height: 1.5 !important; }
        .lh-16 { line-height: 1.6 !important; }
        .lh-17 { line-height: 1.7 !important; }

        /* -- Letter spacing -- */
        .ls-n1 { letter-spacing: -1px; }
        .ls-n12 { letter-spacing: -1.2px; }
        .ls-n15 { letter-spacing: -1.5px; }
        .ls-n25 { letter-spacing: -2.5px; }
        .ls-n03 { letter-spacing: -0.3px; }
        .ls-1 { letter-spacing: 1px; }
        .ls-005 { letter-spacing: 0.05em; }
        .ls-01 { letter-spacing: 0.1em; }

        /* -- Colors (Salesforce branded) -- */
        .c-ink { color: var(--ink) !important; }
        .c-ink2 { color: var(--ink2) !important; }
        .c-ink3 { color: var(--ink3) !important; }
        .c-brand { color: #0057B8 !important; }
        .c-white { color: #fff !important; }
        .c-white-50 { color: rgba(255, 255, 255, 0.5) !important; }
        .c-white-60 { color: rgba(255, 255, 255, 0.6) !important; }
        .c-navy { color: #001F3F !important; }
        .c-blue-accent { color: #60A5FA !important; }
        .c-red-bold { color: #D32F2F !important; }

        /* -- Backgrounds -- */
        .bg-brand { background: var(--brand) !important; }
        .bg-white { background: #fff !important; }
        .bg-fafafa { background: #FAFAFA !important; }
        .bg-fdfdfd { background: #fdfdfd !important; }
        .bg-agents { background: #003366 !important; }
        .bg-cta { background: #0056b3 !important; }
        .bg-blue-card { background: #0057B8 !important; }
        .bg-stat-card { background: #f8fbff !important; }
        .bg-icon { background: #f0f7ff !important; }
        .bg-icon-blue { background: #E8F0FB !important; }
        .bg-icon-green { background: #E8F5E9 !important; }
        .bg-icon-indigo { background: #F0F4FF !important; }
        .bg-icon-red { background: #FCE8EA !important; }
        .bg-icon-mint { background: #E4FCE8 !important; }
        .bg-icon-purple { background: #F3ECFE !important; }
        .bg-icon-yellow { background: #FFF8E1 !important; }
        .bg-icon-neutral { background: var(--bg2) !important; }
        .bg-agent-card { background: rgba(255, 255, 255, 0.06) !important; }
        .bg-agent-icon { background: rgba(255, 255, 255, 0.1) !important; }
        .bg-agent-cta { background: rgba(0, 87, 184, 0.3) !important; }
        .bg-pill { background: #F0F7FF !important; }
        .bg-badge-orange { background: #E67E22 !important; }
        .bg-badge-blue { background: #E8F0FB !important; }
        .bg-contact { background: #EAF2FF !important; }
        .bg-footer { background: #E8F0FB !important; }
        .bg-dots-pattern {
            background-image: radial-gradient(var(--bdr) 1px, transparent 1px);
            background-size: 20px 20px;
        }

        /* -- Borders -- */
        .bdr-stat { border-color: #CCE0F7 !important; }
        .bdr-eee { border: 1px solid #eee !important; }
        .bdr-agent { border: 1px solid rgba(255, 255, 255, 0.1) !important; }
        .bdr-section { border-top: 1px solid #eee !important; }

        /* -- Max widths -- */
        .mw-650 { max-width: 650px; }
        .mw-750 { max-width: 750px; }
        .mw-800 { max-width: 800px; }
        .mw-900 { max-width: 900px; }
        .mw-280 { max-width: 280px; }

        /* -- Sizing -- */
        .icon-box { width: 44px; height: 44px; }
        .icon-box-sm { width: 32px; height: 32px; }
        .dot-sm { width: 8px; height: 8px; border-radius: 50%; display: inline-block; }
        .img-card-h { height: 220px; object-fit: cover; }
        .min-h-500 { min-height: 500px; }

        /* -- Dot colors (channels) -- */
        .dot-hero { background-color: #00A1E0; border-color: #CCE0F7; }
        .dot-sms { background: #22C55E; }
        .dot-wa { background: #25D366; }
        .dot-mms { background: #00A1E0; }
        .dot-cti { background: #0057B8; }
        .dot-rvm { background: #333; }
        .dot-fb { background: #1877F2; }
        .dot-ig { background: #E1306C; }
        .dot-wechat { background: #07C160; }
        .dot-viber { background: #7360F2; }
        .dot-line { background: #06C755; }
        .dot-kakao { background: #FEE500; }
        .dot-zalo { background: #0068FF; }
        .dot-webchat { background: #1877F2; }
        .dot-li { background: #0077B5; }
        .dot-email { background: #EA4335; }

        /* -- Check icon -- */
        .check-icon { color: #000; font-weight: 800; font-size: 20px; line-height: 1; }

        /* -- Badge/stat custom -- */
        .stat-badge {
            font-size: 11px;
            font-weight: 700;
            border-color: #CCE0F7 !important;
            color: #0057B8 !important;
        }

        /* ═══════════════════════════════════════════════════
           3. TOPBAR
           ═══════════════════════════════════════════════════ */
        #three60-hp-root .topbar {
            background: #111;
            padding: 8px 0;
            font-size: 11px;
            color: #888;
            border-bottom: 1px solid #222;
        }

        #three60-hp-root .t-links a {
            color: #888;
            text-decoration: none;
            margin-left: 15px;
            font-weight: 500;
            transition: color .15s;
        }

        #three60-hp-root .t-links a:hover { color: #fff; }
        .t-sep { margin: 0 10px; }

        /* ═══════════════════════════════════════════════════
           4. NAVIGATION
           ═══════════════════════════════════════════════════ */
        #three60-hp-root .nav {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid var(--bdr);
        }
        
         #three60-hp-root .switcher {
            display: flex;
            background: var(--bg2);
            border-radius: 24px;
            border: 1px solid var(--bdr);
            padding: 3px;
            margin-right: 24px;
            align-items: center;
        }

        #three60-hp-root .sw-btn {
            padding: 6px 16px;
            font-size: 13px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            background: transparent;
            color: var(--ink3);
            border-radius: 20px;
            transition: all .2s;
            text-decoration: none;
            line-height: 1;
        }

        #three60-hp-root .sw-btn.on-sf {
            background: #0057B8;
            color: #fff;
            box-shadow: 0 2px 8px rgba(0, 87, 184, 0.3);
        }

        #three60-hp-root .sw-btn.on-zo {
            background: #C4152A;
            color: #fff;
            box-shadow: 0 2px 8px rgba(196, 21, 42, 0.3);
        }

        #three60-hp-root .nav-in {
            display: flex;
            align-items: center;
            height: 64px;
        }

        #three60-hp-root .logo { display: block; height: 32px; margin-right: 32px; }
        #three60-hp-root .logo img { height: 100%; width: auto; display: block; }

        #three60-hp-root .nav-links {
            display: flex;
            gap: 0;
            flex: 1;
            align-items: stretch;
        }

        #three60-hp-root .ni {
            position: relative;
            display: flex;
            align-items: stretch;
        }

        #three60-hp-root .nl {
            display: flex;
            align-items: center;
            gap: 4px;
            padding: 0 16px;
            height: 64px;
            font-size: 14px;
            font-weight: 600;
            color: var(--ink2);
            cursor: pointer;
            border-bottom: 2px solid transparent;
            transition: all .2s;
        }

        #three60-hp-root .nl:hover,
        #three60-hp-root .nl.open {
            color: var(--ink);
            background: var(--bg2);
        }

        #three60-hp-root .nl.open { border-bottom-color: var(--brand); }

        #three60-hp-root .caret {
            font-size: 10px;
            opacity: 0.4;
            transition: transform .2s;
        }

        #three60-hp-root .nl.open .caret { transform: rotate(180deg); }

        /* Mega menus */
        #three60-hp-root .mega {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: #fff;
            border: 1px solid var(--bdr);
            border-top: none;
            padding: 24px;
            z-index: 1000;
            box-shadow: var(--sh-lg);
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        #three60-hp-root .mega.show {
            display: flex;
            gap: 24px;
            animation: navSlide .2s ease-out;
        }

        @keyframes navSlide {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        #three60-hp-root .mc { min-width: 220px; }
        #three60-hp-root .mc:not(:first-child) { border-left: 1px solid var(--bg3); padding-left: 24px; }
        .mega-540 { min-width: 540px; }
        .mega-520 { min-width: 520px; }
        .mega-300 { min-width: 300px; }
        .mega-240 { min-width: 240px; }

        #three60-hp-root .mh {
            font-size: 10px;
            font-weight: 800;
            text-transform: uppercase;
            color: var(--ink3);
            letter-spacing: 0.1em;
            margin-bottom: 12px;
            padding-left: 8px;
        }

        #three60-hp-root .mi {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            padding: 10px;
            border-radius: 8px;
            cursor: pointer;
            transition: background .15s;
            text-decoration: none;
        }

        #three60-hp-root .mi:hover { background: var(--bg2); }

        #three60-hp-root .mi-ic {
            width: 32px; height: 32px; border-radius: 8px;
            display: flex; align-items: center; justify-content: center;
            font-size: 16px; flex-shrink: 0;
        }

        #three60-hp-root .mi-t { font-size: 13px; font-weight: 700; color: var(--ink); margin-bottom: 2px; }
        #three60-hp-root .mi-s { font-size: 11px; color: var(--ink3); line-height: 1.4; }

        #three60-hp-root .mi-more {
            font-size: 12px; font-weight: 700; color: var(--brand);
            margin-top: 8px; padding-left: 10px; display: block; text-decoration: none;
        }

        .mega-info {
            background: var(--bg2);
            border-radius: 10px;
            padding: 20px;
            border: 1px solid var(--bdr);
        }

        /* Nav right */
        #three60-hp-root .nav-r { margin-left: auto; display: flex; align-items: center; gap: 12px; }

        #three60-hp-root .btn-nav-pri {
            background: var(--brand);
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 13px;
            cursor: pointer;
            transition: transform .2s;
        }

        #three60-hp-root .btn-nav-pri:hover { transform: translateY(-1px); }

        #three60-hp-root .mobile-only-btn { display: none; }

        #three60-hp-root .mob-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 28px;
            cursor: pointer;
            color: var(--ink);
            padding: 4px;
            line-height: 1;
        }

        #three60-hp-root .mob-toggle .menu-close { display: none; }
        #three60-hp-root.mob-nav-open .mob-toggle .menu-ic { display: none; }
        #three60-hp-root.mob-nav-open .mob-toggle .menu-close { display: block; }

        /* ═══════════════════════════════════════════════════
           5. HERO
           ═══════════════════════════════════════════════════ */
        #three60-hp-root .hero {
            padding: 60px 0;
            text-align: center;
            background: linear-gradient(150deg, #EEF4FF 0%, #F7F7F5 65%);
        }

        #three60-hp-root .h-pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #F0F7FF;
            color: #0056b3;
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 700;
            border: 1px solid #CCE0F7;
        }

        .hero-h1 { font-size: 54px; font-weight: 700; line-height: 1.05; letter-spacing: -2.5px; margin-bottom: 24px; }
        .hero-h1 .kw { color: var(--brand); }
        .hero-sub { font-size: 18px; color: var(--ink2); max-width: 650px; margin: 0 auto 32px; line-height: 1.6; }

        .btn-brand { background-color: #0057B8; border: none; color: #fff; }
        .btn-brand:hover { background-color: #004a9e; color: #fff; }
        .btn-ghost { border: 1px solid #e2e2e2; background: #fff; color: var(--ink); }

        /* ═══════════════════════════════════════════════════
           6. PROOF STRIP
           ═══════════════════════════════════════════════════ */
        #three60-hp-root .proof-item {
            position: relative; padding: 12px 0;
            display: flex; align-items: center; justify-content: center; gap: 10px;
        }

        #three60-hp-root .proof-item:not(:last-child)::after {
            content: ""; position: absolute; right: 0; top: 50%;
            transform: translateY(-50%); width: 1px; height: 32px;
            background: rgba(0, 0, 0, 0.1);
        }

        .pn { font-size: 28px; font-weight: 800; color: #111; line-height: 1; }
        .pl { font-size: 11px; color: #888; font-weight: 600; line-height: 1.2; text-align: left; }
        .proof-stars { display: flex; gap: 2px; color: #001F3F; }
        .proof-stars i { font-size: 11px; }

        /* ═══════════════════════════════════════════════════
           7. COMMON SECTION STYLES
           ═══════════════════════════════════════════════════ */
        .sec { padding: 80px 0; }
        .kicker { font-size: 11px; font-weight: 800; text-transform: uppercase; color: var(--brand); letter-spacing: 0.1em; margin-bottom: 16px; }
        .sh2 { font-size: 32px; font-weight: 800; line-height: 1.15; letter-spacing: -1.2px; margin-bottom: 20px; }
        .ssub { font-size: 16px; color: var(--ink2); max-width: 600px; margin-bottom: 48px; line-height: 1.6; }

        /* ═══════════════════════════════════════════════════
           8. CARDS (shared)
           ═══════════════════════════════════════════════════ */
        #three60-hp-root .card { background: #fff; border: 1px solid var(--bdr); border-radius: 16px; padding: 32px; transition: all .2s; height: 100%; }
        #three60-hp-root .card:hover { box-shadow: var(--sh-lg); transform: translateY(-4px); }

        /* ═══════════════════════════════════════════════════
           9. STATS CARDS
           ═══════════════════════════════════════════════════ */
        .st-num { font-size: 32px; font-weight: 800; color: #0057B8; letter-spacing: -1px; }
        .st-h { font-size: 16px; font-weight: 700; line-height: 1.3; color: #000; }
        .st-p { font-size: 13px; line-height: 1.5; color: #444; }

        /* ═══════════════════════════════════════════════════
           10. BLUE CARD
           ═══════════════════════════════════════════════════ */
        .blue-card-pad { padding: 48px; }
        .blue-card-h { font-size: 16px; }
        .blue-card-p { line-height: 1.6; }
        .roi-num { font-weight: 700; color: #0057B8; }

        /* ═══════════════════════════════════════════════════
           11. CHANNEL CHIPS
           ═══════════════════════════════════════════════════ */
        .chip-channel { font-size: 13px; font-weight: 600; background: #fff; }

        /* ═══════════════════════════════════════════════════
           12. FEATURE CARDS
           ═══════════════════════════════════════════════════ */
        .feat-arrow { text-decoration: none; }

        /* ═══════════════════════════════════════════════════
           13. AI AGENTS
           ═══════════════════════════════════════════════════ */
        .ag-h { font-size: 17px; }

        /* ═══════════════════════════════════════════════════
           14. GETTING STARTED
           ═══════════════════════════════════════════════════ */
        #three60-hp-root .gs-tab { border-left: 3px solid transparent; transition: all .15s; cursor: pointer; background: #fff; }
        #three60-hp-root .gs-tab:hover { background: var(--bg2) !important; }
        #three60-hp-root .gs-tab.active-tab { background: #fff; opacity: 1 !important; }
        #three60-hp-root .gs-panel { display: none; }
        #three60-hp-root .gs-panel.active { display: block; }
        .gs-pad { padding: 28px; }
        .gs-bdr-b { border-bottom: 1px solid var(--bdr); }
        .gs-step-num {
            width: 32px; height: 32px; border-radius: 50%;
            color: #fff !important; display: flex; align-items: center; justify-content: center;
            font-size: 14px; font-weight: 800; flex-shrink: 0;
            background: var(--brand);
            transition: background .3s;
        }
        .gs-step-h { font-size: 18px; font-weight: 800; color: var(--ink); margin-bottom: 8px; letter-spacing: -0.3px; }
        .gs-step-p { font-size: 14px; color: var(--ink2); line-height: 1.6; margin-bottom: 14px; }
        .gs-bullets { list-style: none; display: flex; flex-direction: column; gap: 8px; padding-left: 0; margin-bottom: 0; }
        .gs-bullets li { font-size: 13px; color: var(--ink2); display: flex; align-items: flex-start; gap: 8px; }
        .gs-bullets li::before { content: '✓'; font-weight: 800; font-size: 12px; margin-top: 1px; flex-shrink: 0; color: var(--brand); }

        /* ═══════════════════════════════════════════════════
           15. CTA BARS
           ═══════════════════════════════════════════════════ */
        .cta-bar-h { font-size: 34px; letter-spacing: -1px; }
        .btn-cta-light { border-radius: 8px; font-size: 15px; }

        /* ═══════════════════════════════════════════════════
           16. INDUSTRY CARDS
           ═══════════════════════════════════════════════════ */
        .ind-card { transition: all 0.3s ease; height: 100%; min-height: 257px; display: flex; flex-direction: column; justify-content: flex-start; border: 1px solid #eee !important; }
        .ind-card:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1) !important; }
        .ind-card i { color: var(--brand); }
        .ind-link { color: #0057B8 !important; }

        /* ═══════════════════════════════════════════════════
           17. TESTIMONIALS
           ═══════════════════════════════════════════════════ */
        .testimonial-p { font-size: 15px; line-height: 1.7; }

        /* ═══════════════════════════════════════════════════
           18. RESOURCE CARDS
           ═══════════════════════════════════════════════════ */
        .res-card { transition: all 0.3s ease; }
        .res-card:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1) !important; }
        .res-body { height: calc(100% - 220px); }
        .badge-tag { font-size: 11px; border-radius: 4px; }

        /* ═══════════════════════════════════════════════════
           19. FAQ
           ═══════════════════════════════════════════════════ */
        .faq-item { transition: background 0.3s ease; }
        .faq-item.open { background: #f8f9fa; }
        .faq-q { font-weight: 600; font-size: 16px; cursor: pointer; }
        .faq-q i { transition: transform 0.3s ease; }
        .faq-item.open .faq-q i { transform: rotate(45deg); }

        /* ═══════════════════════════════════════════════════
           20. FOOTER
           ═══════════════════════════════════════════════════ */
        #three60-hp-root .footer {
            background: #E8F0FB;
            color: #444;
            padding: 80px 0 40px;
            border-top: 1px solid rgba(0, 0, 0, 0.05);
            font-size: 13px;
        }

        .f-h { font-size: 11px; font-weight: 800; text-transform: uppercase; color: #666; margin-bottom: 24px; letter-spacing: 0.05em; }
        .f-logo { height: 48px; margin-bottom: 24px; }
        .f-logo img { height: 100%; width: auto; display: block; }
        .f-desc { line-height: 1.6; color: #555; margin-bottom: 24px; max-width: 280px; }
        .f-badge {
            display: flex; align-items: center; gap: 8px; padding: 8px 12px;
            background: #fff; border: 1px solid rgba(0, 0, 0, 0.08); border-radius: 6px;
            text-decoration: none; color: var(--brand); font-weight: 700; font-size: 11px;
            margin-bottom: 10px; width: fit-content;
        }
        .f-socials { display: flex; gap: 8px; margin-top: 24px; }
        .f-socials a {
            width: 32px; height: 32px; background: #0057B8; color: #fff;
            display: flex; align-items: center; justify-content: center;
            border-radius: 4px; text-decoration: none; font-size: 16px; transition: transform .2s;
        }
        .f-link { display: block; color: #555; text-decoration: none; margin-bottom: 12px; transition: color .15s; }
        .f-link:hover { color: var(--brand); }
        .f-link.red { color: #D32F2F; font-weight: 700; }
        .f-contact-item { margin-bottom: 20px; }
        .f-contact-title { font-weight: 700; color: var(--brand); display: flex; align-items: center; gap: 6px; margin-bottom: 4px; }
        .f-contact-num { font-weight: 800; font-size: 14px; color: var(--brand); display: block; margin-bottom: 4px; text-decoration: none; }
        .f-contact-addr { font-size: 11px; color: #777; line-height: 1.5; }
        .f-btm { margin-top: 48px; padding-top: 24px; border-top: 1px solid rgba(0, 0, 0, 0.1); font-size: 12px; color: #666; }
        .f-btm-links { display: flex; gap: 20px; }
        .f-btm-links a { color: #666; text-decoration: none; }
        .f-sales-mt { margin-top: 32px; }
        .f-sales-link { color: var(--brand); font-weight: 600; }

        /* ═══════════════════════════════════════════════════
           21. GUTTER OVERRIDES
           ═══════════════════════════════════════════════════ */
        #three60-hp-root .gx-lg-5>[class^="col-"] { padding-left: 24px !important; padding-right: 24px !important; }
        #three60-hp-root .gx-4>[class^="col-"] { padding-left: 12px !important; padding-right: 12px !important; }

        /* ═══════════════════════════════════════════════════
           22. RESPONSIVE
           ═══════════════════════════════════════════════════ */
        @media (max-width: 768px) {
            .hero-h1 { font-size: 36px; }
            #three60-hp-root .proof-item { border: none; margin-bottom: 20px; }
            #three60-hp-root .proof-item::after { display: none; }
            #three60-hp-root .nav-in { justify-content: space-between; gap: 12px; }
            #three60-hp-root .logo { margin-right: 0; height: 24px; }
            #three60-hp-root .mob-toggle { display: block; order: 3; }
            #three60-hp-root .nav-links {
                display: none; position: fixed; top: 64px; left: 0; width: 100%;
                height: calc(100vh - 64px); background: #fff; flex-direction: column;
                padding: 20px; overflow-y: auto; z-index: 999; gap: 0;
            }
            #three60-hp-root .nav-links .mobile-only-btn {
                display: block; width: 100%; margin-top: 24px; padding: 14px;
                font-size: 15px; text-align: center; border-radius: 12px;
            }
            #three60-hp-root.mob-nav-open .nav-links { display: flex; }
            #three60-hp-root .ni { flex-direction: column; align-items: stretch; border-bottom: 1px solid var(--bdr); }
            #three60-hp-root .nl { height: auto; padding: 16px 0; justify-content: space-between; font-size: 16px; }
            #three60-hp-root .mega { position: static; box-shadow: none; border: none; padding: 0 0 16px 16px; display: none !important; flex-direction: column; animation: none; }
            #three60-hp-root .mega.show { display: flex !important; }
            #three60-hp-root .mc { min-width: unset; padding-left: 0 !important; border: none !important; }
            #three60-hp-root .mh { display: none; }
            #three60-hp-root .mi { padding: 12px 0; }
            #three60-hp-root .nav-r { margin-left: 0; order: 4; }
            #three60-hp-root .nav-r .btn-nav-pri { display: none; }
        }
    </style>
</head>

<body>
    <div id="three60-hp-root">

        <!-- ═══ TOPBAR ═══ -->
        <div class="topbar">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <span>🇺🇸 US: +1 323 641 4417</span>
                        <span class="t-sep">|</span>
                        <span>🇬🇧 UK: +44 740 327 9473</span>
                    </div>
                    <div class="t-links">
                        <a href="#">Support</a>
                        <a href="#">Login</a>
                        <a href="#">Schedule Demo</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ═══ NAVIGATION — SALESFORCE ═══ -->
        <nav class="nav">
            <div class="container nav-in">
                <a href="#" class="logo" id="main-logo">
                    <img src="https://360smsapp.com/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp" alt="360 SMS App Logo">
                </a>
                
                <!-- CRM Switcher Toggle -->
                <div class="switcher">
                    <a href="https://360smsapp.test360degreecloud.in/new-sms/newhome-sms/" class="sw-btn on-sf">Salesforce</a>
                    <a href="https://360smsapp.test360degreecloud.in/new-sms/newhome-zoho/" class="sw-btn">Zoho CRM</a>
                </div>
                
                <div class="nav-links">
                    <!-- Products -->
                    <div class="ni">
                        <div class="nl" onclick="toggleM('products', this)">Products <i class="bi bi-chevron-down caret"></i></div>
                        <div class="mega" id="mega-products">
                            <div class="mc" id="mc-channels">
                                <div class="mh">Channels</div>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-blue">💬</div>
                                    <div>
                                        <div class="mi-t">SMS for Salesforce</div>
                                        <div class="mi-s">1-on-1 and bulk SMS texting</div>
                                    </div>
                                </a>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-green">💚</div>
                                    <div>
                                        <div class="mi-t">WhatsApp for Salesforce</div>
                                        <div class="mi-s">Business messaging, templates</div>
                                    </div>
                                </a>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-indigo">📞</div>
                                    <div>
                                        <div class="mi-t">CTI Telephony</div>
                                        <div class="mi-s">Click-to-dial, call forwarding</div>
                                    </div>
                                </a>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-red">📸</div>
                                    <div>
                                        <div class="mi-t">Instagram Messaging</div>
                                        <div class="mi-s">DMs from Salesforce records</div>
                                    </div>
                                </a>
                                <a href="#" class="mi-more">→ View All Channels</a>
                            </div>
                            <div class="mc" id="mc-features">
                                <div class="mh">Features</div>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-blue">⚡</div>
                                    <div>
                                        <div class="mi-t">Automated Messaging</div>
                                        <div class="mi-s">Flows, triggers, zero code</div>
                                    </div>
                                </a>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-red">📊</div>
                                    <div>
                                        <div class="mi-t">Bulk Messaging</div>
                                        <div class="mi-s">Send to thousands at once</div>
                                    </div>
                                </a>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-mint">📅</div>
                                    <div>
                                        <div class="mi-t">Drip Campaigns</div>
                                        <div class="mi-s">Multi-step timed sequences</div>
                                    </div>
                                </a>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-purple">🤖</div>
                                    <div>
                                        <div class="mi-t">AI Chatbot</div>
                                        <div class="mi-s">24/7 automated responses</div>
                                    </div>
                                </a>
                                <a href="#" class="mi-more">→ View All Features</a>
                            </div>
                        </div>
                    </div>
                    <!-- AI Agents -->
                    <div class="ni" id="nav-ai">
                        <div class="nl" onclick="toggleM('ai', this)">AI Agents <i class="bi bi-chevron-down caret"></i></div>
                        <div class="mega mega-540" id="mega-ai">
                            <div class="mc">
                                <div class="mh">Agents</div>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-purple">🤖</div>
                                    <div>
                                        <div class="mi-t">AI Chatbot</div>
                                        <div class="mi-s">24/7 lead qualification</div>
                                    </div>
                                </a>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-blue">🗣</div>
                                    <div>
                                        <div class="mi-t">AI Voice Agent</div>
                                        <div class="mi-s">24/7 voice automation</div>
                                    </div>
                                </a>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-mint">🎙</div>
                                    <div>
                                        <div class="mi-t">Call Transcription</div>
                                        <div class="mi-s">AI coaching from every call</div>
                                    </div>
                                </a>
                                <a href="#" class="mi-more">→ View All Agents</a>
                            </div>
                            <div class="mc">
                                <div class="mega-info">
                                    <div class="fs-12 fw-bold c-ink mb-2">8 AI Agents Built-in</div>
                                    <p class="fs-11 c-ink3 lh-16 mb-0">SOW Generator, LinkedIn Parsing, and Metadata Automation — natively in Salesforce.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Industries -->
                    <div class="ni">
                        <div class="nl" onclick="toggleM('industries', this)">Industries <i class="bi bi-chevron-down caret"></i></div>
                        <div class="mega mega-300" id="mega-industries">
                            <div class="mc">
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-yellow">🏘</div>
                                    <div>
                                        <div class="mi-t">Real Estate</div>
                                        <div class="mi-s">Property alerts, showings</div>
                                    </div>
                                </a>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-blue">🎓</div>
                                    <div>
                                        <div class="mi-t">Edtech</div>
                                        <div class="mi-s">Enrollment, engagement</div>
                                    </div>
                                </a>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-mint">🏦</div>
                                    <div>
                                        <div class="mi-t">Finance</div>
                                        <div class="mi-s">Rate alerts, doc collection</div>
                                    </div>
                                </a>
                                <a href="#" class="mi-more">→ View All Industries</a>
                            </div>
                        </div>
                    </div>
                    <!-- Resources -->
                    <div class="ni">
                        <div class="nl" onclick="toggleM('resources', this)">Resources <i class="bi bi-chevron-down caret"></i></div>
                        <div class="mega mega-520" id="mega-resources">
                            <div class="mc">
                                <div class="mh">Content</div>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-blue">📖</div>
                                    <div>
                                        <div class="mi-t">Blog</div>
                                        <div class="mi-s">Tips, guides, announcements</div>
                                    </div>
                                </a>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-red">🏆</div>
                                    <div>
                                        <div class="mi-t">Case Studies</div>
                                        <div class="mi-s">Real customer results</div>
                                    </div>
                                </a>
                                <a href="#" class="mi-more">→ View Knowledge Hub</a>
                            </div>
                            <div class="mc">
                                <div class="mh">Docs & Support</div>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-neutral">📋</div>
                                    <div>
                                        <div class="mi-t">Manuals</div>
                                        <div class="mi-s">Product documentation</div>
                                    </div>
                                </a>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-neutral">📝</div>
                                    <div>
                                        <div class="mi-t">Setup Guides</div>
                                        <div class="mi-s">Step-by-step installation</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Company -->
                    <div class="ni">
                        <div class="nl" onclick="toggleM('company', this)">Company <i class="bi bi-chevron-down caret"></i></div>
                        <div class="mega mega-240" id="mega-company">
                            <div class="mc">
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-blue">🏢</div>
                                    <div>
                                        <div class="mi-t">About Us</div>
                                        <div class="mi-s">Our story & mission</div>
                                    </div>
                                </a>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-mint">💼</div>
                                    <div>
                                        <div class="mi-t">Careers</div>
                                        <div class="mi-s">Join our global team</div>
                                    </div>
                                </a>
                                <a href="#" class="mi">
                                    <div class="mi-ic bg-icon-red">✉️</div>
                                    <div>
                                        <div class="mi-t">Contact Us</div>
                                        <div class="mi-s">Get in touch</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <button class="btn-nav-pri mobile-only-btn" onclick="window.location.href='#'">Get started Free →</button>
                </div>
                <div class="nav-r">
                    <button class="btn-nav-pri" id="nav-cta">Get started Free →</button>
                    <button class="mob-toggle" onclick="toggleMobNav()" aria-label="Toggle menu">
                        <i class="bi bi-list menu-ic"></i>
                        <i class="bi bi-x menu-close"></i>
                    </button>
                </div>
            </div>
        </nav>