<?php
/**
 * Template Name: Newhome-SMS
 * Description:   Standalone Salesforce-branded template. Blue theme (#0057B8).
 */
if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
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
        
        <?php
/**
 * Salesforce Template — All Sections
 * Contains: Hero, Proof Strip, Inbox Showcase, Why 360 SMS, Blue Bar & ROI,
 *           Channels, Features, AI Agents, Getting Started, CTA Bars,
 *           Industries, Testimonials, Resources, FAQ
 */
?>

        <!-- ═══ SECTION 1: HERO ═══ -->
        <section id="hero-sec" class="hero">
            <div class="container">
                <div class="h-pill mb-4">
                    <span class="dot-sm dot-hero me-2"></span> #1 on AppExchange • 1,200+ Reviews • 16+ Channels
                </div>
                <h1 class="hero-h1 mb-4">The #1 SMS & messaging app<br>for <span class="kw">Salesforce</span></h1>
                <p class="hero-sub mb-5">Transform Salesforce text messaging across 15+ channels and elevate digital engagement with AI agents that help you connect, engage, and convert.</p>
                <div class="d-flex justify-content-center gap-3 mb-1">
                    <button class="btn btn-brand rounded-3 px-4 py-3 fw-bold">Book a demo →</button>
                    <button class="btn btn-ghost rounded-3 px-4 py-3 fw-bold">Contact our experts</button>
                </div>
            </div>
        </section>

        <!-- ═══ SECTION 2: PROOF STRIP ═══ -->
        <div class="border-top border-bottom py-4 bg-white">
            <div class="container">
                <div class="row align-items-center g-0">
                    <div class="col-6 col-md-2 proof-item">
                        <span class="pn">100%</span>
                        <span class="pl">Salesforce-Native</span>
                    </div>
                    <div class="col-6 col-md-2 proof-item">
                        <span class="pn">1,200+</span>
                        <span class="pl">Customer<br>Reviews</span>
                    </div>
                    <div class="col-6 col-md-2 proof-item">
                        <div class="proof-stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                        <span class="pl">Rated on<br>AppExchange</span>
                    </div>
                    <div class="col-6 col-md-2 proof-item">
                        <span class="pn">99.99%</span>
                        <span class="pl">Platform<br>Uptime</span>
                    </div>
                    <div class="col-6 col-md-2 proof-item">
                        <span class="pn">60K+</span>
                        <span class="pl">Users<br>Worldwide</span>
                    </div>
                    <div class="col-6 col-md-2 proof-item">
                        <span class="pn">24x7</span>
                        <span class="pl">Free Support</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- ═══ SECTION 3: INBOX SHOWCASE ═══ -->
        <section class="sec py-5">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-5">
                        <div class="kicker text-uppercase fw-bold mb-3 c-ink2 ls-1">Unified Inbox · Salesforce</div>
                        <h2 class="sh2 fw-bold mb-4 fs-40 lh-11">All Conversations. Fully Connected. Inside Your CRM.</h2>
                        <p class="ssub mb-4 c-ink2 lh-16">Manage all your Salesforce SMS, WhatsApp, Instagram, AI chatbots, and calls in one unified inbox—right inside Salesforce. With a powerful Salesforce SMS app, every message stays synced and auto-logged—so nothing gets missed.</p>
                        <ul class="list-unstyled mb-5 d-flex flex-column gap-3">
                            <li class="d-flex align-items-start gap-2 fs-6"><i class="bi bi-check-lg check-icon"></i><span><strong>15+ channels in one view</strong> — SMS, WhatsApp, Messenger, Instagram & more</span></li>
                            <li class="d-flex align-items-start gap-2 fs-6"><i class="bi bi-check-lg check-icon"></i><span><strong>Auto-log every interaction</strong> for seamless Salesforce text messaging</span></li>
                            <li class="d-flex align-items-start gap-2 fs-6"><i class="bi bi-check-lg check-icon"></i><span><strong>Assign, track, and manage conversations</strong>—all from one place</span></li>
                        </ul>
                        <button class="btn btn-brand rounded-2 px-4 py-3 fw-bold fs-15">See all features →</button>
                    </div>
                    <div class="col-lg-7">
                        <img src="https://360degreecloud.com/wp-content/uploads/2026/03/timg1-1.png" alt="Unified Inbox" class="img-fluid rounded-4 shadow-lg">
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ SECTION 4: WHY 360 SMS ═══ -->
        <section class="sec py-5 bg-white">
            <div class="container text-center">
                <div class="kicker text-uppercase mb-2 fw-bold c-brand ls-1">WHY TEAMS CHOOSE 360 SMS</div>
                <h2 class="sh2 fw-bold mb-3 fs-40 lh-11 ls-n12 c-ink">Everything you need to stay ahead.<br>Nothing you don't.</h2>
                <p class="ssub mx-auto mb-5 mw-750 lh-15 c-ink2">Most Salesforce SMS apps stop at basic messaging. 360 SMS stands out with 1,200+ AppExchange reviews, AI-powered multichannel communication, AI agents, and 15+ channels—powering smarter Salesforce text messaging.</p>
                <div class="row gx-5 gy-4 text-start">
                    <?php
                    $stats = [
                        ['1,200+', 'AppExchange reviews— more than any other Salesforce SMS app', 'Real feedback from Salesforce users across industries. Trusted by teams who rely on proven Salesforce messaging app performance.', '★★★★★ "Best SMS app on AppExchange. Period." — VP Sales, Finance'],
                        ['15+', 'All managed from one place— SMS, WhatsApp, CTI, and more.', 'Go beyond SMS with WhatsApp, Messenger, Instagram, CTI, and more—managed seamlessly inside your CRM.', '✓ Every channel unified in one Salesforce messaging app'],
                        ['AI Agents', 'Elevating communication and workflows inside Salesforce.', 'From translation to drip suggestions, AI and intelligent agents help you optimize Salesforce text messaging without losing the human touch.', '✓ AI-driven automation, agents, and Insights inside Salesforce'],
                    ];
                    foreach ($stats as $s): ?>
                        <div class="col-lg-4 p-3">
                            <div class="card border rounded-4 p-4 h-100 bg-stat-card bdr-stat">
                                <div class="st-num fw-bold mb-1"><?= $s[0] ?></div>
                                <div class="st-h fw-bold mb-2"><?= $s[1] ?></div>
                                <p class="st-p text-muted mb-3"><?= $s[2] ?></p>
                                <div class="mt-auto">
                                    <div class="stat-badge border px-3 py-2 rounded-2 bg-white d-inline-block"><?= $s[3] ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ═══ SECTION 5: BLUE BAR & ROI ═══ -->
        <section class="sec py-5 bg-white">
            <div class="container">
                <div class="card border-0 rounded-4 overflow-hidden mb-5 bg-blue-card blue-card-pad">
                    <div class="kicker text-uppercase text-white opacity-50 fw-bold mb-4 c-white-60 ls-1">WHY 360 SMS OUTPERFORMS OTHER SALESFORCE SMS APPS</div>
                    <div class="row g-4 overflow-hidden">
                        <?php
                        $blueFeats = [
                            ['bi-lock', '100% Native Salesforce', 'No middleware, no webhooks, no external tools. This Salesforce native SMS solution ensures every message, reply, and opt-out lives inside your CRM, powering seamless Salesforce SMS integration'],
                            ['bi-lightning-charge', 'Start Texting in Minutes', 'Install this SMS app for Salesforce, connect a number, and start sending instantly. No dev work, no setup calls—just fast, reliable text messaging for Salesforce teams.'],
                            ['bi-bar-chart-line', '98% Open Rates, Faster Response', 'Email gets ignored, SMS gets seen. With this powerful Salesforce texting app, messages see up to 98% open rates and rapid replies—maximizing your Salesforce SMS capabilities'],
                            ['bi-shield-check', 'Enterprise Compliance Built In', 'Stay compliant with TCPA, GDPR, and more. This secure Salesforce SMS service manages consent, opt-outs, and logging automatically—so you never have to worry.'],
                        ];
                        foreach ($blueFeats as $bf): ?>
                            <div class="col-md-3">
                                <div class="text-white fs-2 mb-3"><i class="bi <?= $bf[0] ?>"></i></div>
                                <h4 class="text-white fw-bold mb-3 blue-card-h"><?= $bf[1] ?></h4>
                                <p class="text-white-50 small blue-card-p"><?= $bf[2] ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="card border rounded-4 p-4">
                    <div class="row text-center g-0">
                        <?php
                        $roi = [['57%', 'Higher Engagement'], ['60%', 'Improved Service'], ['45%', 'More Sales'], ['<2 min', 'Setup from AppExchange']];
                        foreach ($roi as $i => $r): ?>
                            <div class="col-6 col-md-3 py-3 <?= $i < 3 ? 'border-end' : '' ?>">
                                <div class="fw-bold fs-2 roi-num"><?= $r[0] ?></div>
                                <div class="small fw-bold text-dark mt-1"><?= $r[1] ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ SECTION 6: CHANNELS ═══ -->
        <section class="sec py-5 bg-fafafa">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <h2 class="sh2 fw-bold mb-4 text-start fs-32">15+ channels inside 1 Salesforce messaging app</h2>
                        <p class="ssub text-start mb-5 mw-900 c-ink2 lh-16">Reach your customers on every channel they prefer—without leaving Salesforce. Manage all conversations from one place for seamless text messaging and multichannel communication, no external tools or logins needed.</p>
                        <div class="d-flex flex-wrap gap-3">
                            <?php
                            $channels = [
                                ['dot-sms', 'SMS'],
                                ['dot-wa', 'WhatsApp'],
                                ['dot-mms', 'MMS'],
                                ['dot-cti', 'CTI Telephony'],
                                ['dot-rvm', 'Ringless Voicemail'],
                                ['dot-fb', 'Facebook Messenger'],
                                ['dot-ig', 'Instagram DM'],
                                ['dot-wechat', 'WeChat'],
                                ['dot-viber', 'Viber'],
                                ['dot-line', 'Line'],
                                ['dot-kakao', 'Kakao'],
                                ['dot-zalo', 'Zalo'],
                                ['dot-webchat', 'Webchat'],
                                ['dot-li', 'LinkedIn'],
                                ['dot-email', 'Email'],
                            ];
                            foreach ($channels as $ch): ?>
                                <div class="chip-channel border rounded-2 px-3 py-2 d-flex align-items-center gap-2">
                                    <span class="dot-sm <?= $ch[0] ?>"></span> <?= $ch[1] ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ SECTION 7: FEATURES ═══ -->
        <section class="sec py-5 bg-white">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <h2 class="sh2 fw-bold mb-3 text-start fs-32 ls-n1">Everything your Salesforce team needs to text at scale</h2>
                        <p class="text-muted">Send SMS from Salesforce with 360 SMS—automate messaging, manage conversations, and scale with powerful Salesforce SMS integration.</p>
                    </div>
                </div>
                <div class="row gx-4 gy-4 gx-lg-5 gy-lg-5">
                    <?php
                    $features = [
                        ['bi-chat-left-dots', '1:1 Messaging', 'Engage in real-time with two-way Salesforce texting. Build stronger relationships through personalized text messaging for Salesforce.'],
                        ['bi-cpu', 'No-code Automation', 'Trigger automated SMS in Salesforce using Flows, Workflows, or Apex. Send the right message at the right time without coding.'],
                        ['bi-send', 'Bulk & Batch SMS', 'Run campaigns with bulk SMS from Salesforce using reports, list views, or campaigns, or schedule messages to scale easily.'],
                        ['bi-calendar-event', 'Drip Campaigns', 'Create multi-step sequences to nurture leads and customers. Automate SMS follow-ups via Salesforce and keep engagement consistent.'],
                        ['bi-chat-square-text', 'Conversation Manager', 'Manage messaging operations like bulk texting, record creation, and more in a single console—all inside your Salesforce texting app.'],
                        ['bi-link-45deg', 'Link Tracking', 'Track clicks, measure engagement, and attribute ROI. Links shared through your Salesforce SMS service are monitored in CRM records.'],
                        ['bi-graph-up', 'SMS Analytics', 'Track delivery, opens, clicks, and responses with a custom dashboard and optimize your Salesforce SMS messaging for better engagement and ROI.'],
                        ['bi-shield-check', 'Compliance & Opt-Out', 'Stay compliant with texting rules and regulations using a Salesforce SMS Integration with a future-ready compliance mechanism.'],
                        ['bi-pin-angle', 'Sticky Sender', 'Maintain consistency by sending messages from the same number. Build trust with reliable text messaging for Salesforce interactions.'],
                    ];
                    foreach ($features as $f): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="card h-100 border rounded-4 p-4 shadow-sm bdr-eee">
                                <div class="d-flex align-items-center justify-content-center rounded-3 mb-4 icon-box bg-icon">
                                    <i class="bi <?= $f[0] ?> text-primary fs-5"></i>
                                </div>
                                <h5 class="fw-bold mb-3 fs-18 c-ink"><?= $f[1] ?></h5>
                                <p class="text-muted small mb-3 lh-16"><?= $f[2] ?><span><a href="#" class="text-primary text-decoration-none fw-bold fs-5 feat-arrow">→</a></span></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="text-center mt-5">
                    <button class="btn btn-brand px-5 py-2 fw-bold rounded-3 fs-15">View all Features →</button>
                </div>
            </div>
        </section>

        <!-- ═══ SECTION 8: AI AGENTS ═══ -->
        <section class="sec py-5 bg-agents">
            <div class="container py-lg-4">
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <h2 class="fw-bold text-white mb-2 fs-44 ls-n15">AI Agents for Every Team. Scalable.</h2>
                        <h3 class="fw-bold mb-4 fs-32 c-blue-accent ls-n1">Fully automated.</h3>
                        <p class="c-white-50 mb-4 fs-17 lh-16 mw-900">AI Agents power your communication workflows—automating conversations, qualifying leads, transcribing calls, translating interactions, and helping you close deals faster, all within your CRM.<span><a href="#" class="text-primary text-decoration-none fw-bold fs-5">→</a></span></p>
                    </div>
                </div>
                <div class="row gx-4 gy-4 gx-lg-5 gy-lg-5 mb-5">
                    <?php
                    $agents = [
                        ['bi-robot', 'AI Chatbot', 'Automate conversations across channels. Qualify leads, answer FAQs, and engage users 24/7—powering smarter texting from Salesforce and faster responses.'],
                        ['bi-soundwave', 'AI Voice Agent', 'Manage inbound and outbound calls with natural conversations. Qualify intent, handle objections, and book demos with AI—no IVR menus, no hold music.'],
                        ['bi-text-left', 'Call Transcription', 'Automatically transcribe live calls, capturing every key detail. Further, AI analyzes conversations and guide agents with smart suggestions for better call handling.'],
                        ['bi-translate', 'Call Translation', 'Translate calls and messages across 50+ languages in real time. Break language barriers, connect with customers in their preferred language, and never lose new opportunities.'],
                    ];
                    foreach ($agents as $a): ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="card h-100 border-0 rounded-4 p-4 bg-agent-card bdr-agent">
                                <div class="text-white fs-4 mb-4 rounded-3 d-flex align-items-center justify-content-center icon-box bg-agent-icon">
                                    <i class="bi <?= $a[0] ?>"></i>
                                </div>
                                <h5 class="text-white fw-bold mb-3 ag-h"><?= $a[1] ?></h5>
                                <p class="c-white-50 small mb-0 lh-16"><?= $a[2] ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="card border-0 rounded-3 p-4 p-lg-5 bg-agent-cta">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h5 class="text-white fw-bold mb-2 fs-18">Explore some more AI agents in the suite—for recruitment, pre-sales documentation, lead sourcing, and Salesforce administration</h5>
                            <p class="c-white-50 small mb-0">All run natively inside your CRM—no external tools, no extra logins.</p>
                        </div>
                        <div class="col-md-3 text-md-end mt-4 mt-md-0">
                            <button class="btn btn-brand px-4 py-2 fw-bold rounded-2 fs-14">See all 8 AI Agents →</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ SECTION 9: GETTING STARTED ═══ -->
        <section class="sec" id="getting-started">
            <div class="container">
                <div class="text-center mb-5">
                    <div class="kicker text-primary fw-bold text-uppercase mb-2 ls-1">Setup in Minutes</div>
                    <h2 class="sh2 fs-32 fw-800 ls-n1">Send SMS from Salesforce in minutes—no setup headaches</h2>
                    <p class="ssub mx-auto text-muted mw-800 fs-17 lh-16">Start using a powerful SMS app for Salesforce without coding or complexity. With seamless Salesforce SMS integration, you can get started and send SMS from Salesforce in just a few simple steps.</p>
                </div>
                <div class="row g-0 border rounded-4 overflow-hidden bg-white shadow-sm">
                    <div class="col-lg-6 border-end">
                        <?php
                        $steps = [
                            [1, 'Install from AppExchange', 'One-click install. Security Reviewed & Lightning Ready. Live in your Salesforce org in under 60 seconds — no developer needed.', ['Salesforce Security Reviewed & Certified', 'Works on Enterprise, Unlimited, Developer orgs', 'No data leaves your org — fully native']],
                            [2, 'Sync & Set Up Your Number', 'Sync your Salesforce records and activate messaging. Use a trial number or connect your own to enable SMS via Salesforce right away.', []],
                            [3, 'Start Messaging with Trial Access', 'Use the trial number to send SMS from Salesforce, explore two-way Salesforce texting, and test real-time conversations.', []],
                            [4, 'Configure & Go Live', 'Customize messaging workflows, automation, and campaigns. Once ready, go live and scale your Salesforce SMS capabilities.', []],
                        ];
                        foreach ($steps as $i => $step):
                            $isFirst = $i === 0;
                            $isLast = $i === count($steps) - 1;
                        ?>
                            <div class="gs-tab <?= $isFirst ? 'active-tab' : '' ?> gs-pad <?= !$isLast ? 'gs-bdr-b' : '' ?>" id="gst-<?= $step[0] ?>" onclick="showGS(<?= $step[0] ?>)" <?= !$isFirst ? 'style="opacity:.6"' : 'style="border-left:3px solid var(--brand)"' ?>>
                                <div class="d-flex align-items-flex-start gap-4">
                                    <div class="gs-step-num" id="gsn<?= $step[0] ?>"><?= $step[0] ?></div>
                                    <div>
                                        <div class="gs-step-h"><?= $step[1] ?></div>
                                        <div class="gs-step-p <?= empty($step[3]) ? 'mb-0' : '' ?> c-ink3"><?= $step[2] ?></div>
                                        <?php if (!empty($step[3])): ?>
                                            <ul class="gs-bullets mb-0">
                                                <?php foreach ($step[3] as $bullet): ?><li><?= $bullet ?></li><?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-lg-6 bg-light d-flex align-items-center justify-content-center p-4 p-lg-5 min-h-500 bg-dots-pattern">
                        <?php for ($i = 1; $i <= 4; $i++): ?>
                            <div class="gs-panel <?= $i === 1 ? 'active' : '' ?>" id="gsp-<?= $i ?>" style="width:100%">
                                <img src="https://360degreecloud.com/wp-content/uploads/2026/03/timg1-1.png" alt="Step <?= $i ?>" class="img-fluid rounded-4 shadow-lg">
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ SECTION 10: CTA BAR ═══ -->
        <section class="py-5 bg-cta c-white" id="cta-bar-10">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-2 cta-bar-h">The #1 Salesforce SMS app. Go Live in 2 minutes.</h2>
                        <p class="mb-0 opacity-75 fs-16">Native install. Zero middleware. Zero dev effort.</p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
                            <button class="btn btn-light px-4 py-2 fw-bold btn-cta-light c-brand">Start Free Trial</button>
                            <button class="btn btn-outline-light px-4 py-2 fw-bold btn-cta-light">Book a Demo</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ SECTION 11: INDUSTRIES ═══ -->
        <section class="sec py-5 bg-fdfdfd">
            <div class="container py-4">
                <div class="text-center mb-5">
                    <h2 class="fw-bold mb-3 fs-32 ls-n1 c-ink">Built for your industry with advanced Salesforce SMS capabilities</h2>
                    <p class="text-muted mx-auto mw-900 fs-17 lh-16">Deliver personalized text messaging for Salesforce with industry-specific workflows, templates, and automation.<br>From SMS-to-case in Salesforce to Salesforce SMS campaign, 360 SMS adapts to your exact business needs.</p>
                </div>
                <div class="row g-3">
                    <?php
                    $industries = [
                        ['bi-heart-pulse', 'Healthcare & Wellness', 'Send appointment reminders, patient follow-ups, and care updates using secure Salesforce SMS capabilities.'],
                        ['bi-bank', 'Finance & Mortgage', 'Automate lead nurturing, send rate alerts, and streamline document collection with Salesforce SMS messaging.'],
                        ['bi-house-door', 'Real Estate', 'Share property alerts, confirm showings, and send offer updates using Salesforce SMS campaigns for faster deal cycles.'],
                        ['bi-mortarboard', 'Education & Academics', 'Manage enrollment, send reminders, and boost engagement with scalable Salesforce text messaging.'],
                        ['bi-people', 'Recruitment', 'Screen candidates, schedule interviews, and send updates with two-way Salesforce texting and automation.'],
                        ['bi-briefcase', 'Legal & Insurance', 'Send case updates, policy reminders, and automate workflows with SMS-to-case Salesforce and secure messaging.'],
                        ['bi-heart', 'Non-profit', 'Engage donors, manage events, and coordinate volunteers with Salesforce campaign SMS.'],
                        ['bi-people', 'Professional Services', 'Share project updates, billing reminders, and client communications using Salesforce SMS integration.'],
                    ];
                    foreach ($industries as $ind): ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="ind-card p-4 h-100 border rounded-4 bg-white shadow-sm">
                                <div class="mb-2 fs-3"><i class="bi <?= $ind[0] ?>"></i></div>
                                <h5 class="fw-bold mb-2 fs-19"><?= $ind[1] ?></h5>
                                <p class="small text-muted mb-2 lh-16"><?= $ind[2] ?></p>
                                <a href="#" class="fw-bold text-decoration-none small ind-link">Explore →</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="text-center mt-5">
                    <button class="btn btn-brand px-4 py-2 fw-bold rounded-2 fs-16">View all Industries →</button>
                </div>
            </div>
        </section>

        <!-- ═══ SECTION 12: TRUST & TESTIMONIALS ═══ -->
        <section class="sec py-5 bg-white bdr-section">
            <div class="container py-4">
                <div class="mb-5">
                    <h2 class="fw-bold mb-3 fs-32 ls-n1 c-ink">Trusted by 60K+ Users Globally</h2>
                    <p class="text-muted fs-17">One of the most-reviewed Salesforce SMS apps on AppExchange—trusted with 1,200+ verified 5-star reviews.</p>
                </div>
                <div class="row align-items-center g-4 mb-5">
                    <div class="col-12"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/image-84.png" alt="companies-logo" class="img-fluid"></div>
                </div>
                <div class="row g-4">
                    <?php
                    $testimonials = [
                        ['Sarah M.', 'Director of Admissions · Education · Salesforce', '"360 SMS transformed our student enrollment. SMS reminders see 4x the response rate of email, and automation setup took an afternoon — no dev needed."'],
                        ['James T.', 'VP Sales Operations · Finance · Salesforce', '"Best Salesforce SMS app we evaluated. Drip campaigns, bulk SMS, CTI — all natively in Salesforce. ROI was immediate from month one."'],
                        ['Michael R.', 'Head of Sales · Real Estate · Salesforce', '"CTI Telephony + SMS follow-ups transformed our pipeline. Deal response time dropped from 48 hours to under 4. ROI paid for the annual licence in month one."'],
                    ];
                    foreach ($testimonials as $t): ?>
                        <div class="col-lg-4">
                            <div class="p-4 border rounded-4 h-100 bg-white shadow-sm position-relative">
                                <div class="text-warning mb-3 small">★★★★★</div>
                                <p class="mb-4 text-dark fst-italic testimonial-p"><?= $t[2] ?></p>
                                <div class="mt-auto">
                                    <div class="fw-bold text-dark fs-15"><?= $t[0] ?></div>
                                    <div class="text-muted small"><?= $t[1] ?></div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ═══ SECTION 13: CTA BAR ═══ -->
        <section class="py-5 bg-cta c-white" id="cta-bar-13">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-2 cta-bar-h">Join 60K+ boosting digital ROI worldwide</h2>
                        <p class="mb-0 opacity-75 fs-16">See SMS live demo for Healthcare, Finance, Real Estate, Education, and more</p>
                    </div>
                    <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                        <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
                            <button class="btn btn-light px-4 py-2 fw-bold btn-cta-light c-brand">Book a Demo</button>
                            <button class="btn btn-outline-light px-4 py-2 fw-bold btn-cta-light">Talk to an Expert</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ═══ SECTION 14: RESOURCES ═══ -->
        <section class="sec py-5 bg-fdfdfd">
            <div class="container py-4">
                <h2 class="fw-bold mb-5 fs-32 ls-n1 c-ink">Everything you need to learn, set up, and succeed</h2>
                <div class="row g-4">
                    <?php
                    $resources = [
                        ['https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800', 'Blog'],
                        ['https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=800', 'Case Study'],
                        ['https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800', 'Webinar'],
                        ['https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800', 'Event'],
                        ['https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=800', 'Manual'],
                        ['https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800', 'Blog'],
                    ];
                    foreach ($resources as $r): ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="res-card bg-white border-0 shadow-sm rounded-4 overflow-hidden h-100">
                                <div class="position-relative">
                                    <img src="<?= $r[0] ?>" class="w-100 img-card-h" alt="<?= $r[1] ?>">
                                    <span class="badge position-absolute top-0 end-0 m-3 px-3 py-1 fw-bold bg-badge-orange badge-tag"><?= $r[1] ?></span>
                                </div>
                                <div class="p-4 d-flex flex-column res-body">
                                    <div class="mb-3">
                                        <span class="badge rounded-pill px-3 py-2 text-primary bg-badge-blue fs-11 fw-500"><i class="bi bi-calendar3 me-2"></i>Jan 5, 2025</span>
                                    </div>
                                    <h4 class="fw-bold mb-4 fs-21 lh-14 c-ink">So how did the classical Latin become so incoheren</h4>
                                    <div class="mt-auto">
                                        <button class="btn btn-brand px-4 py-2 fw-bold rounded-2 fs-14 rb-btn">Read More</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ═══ SECTION 15: FAQ ═══ -->
        <section class="sec py-5 bg-white">
            <div class="container py-4">
                <div class="mb-5">
                    <h2 class="fw-bold mb-3 fs-34 ls-n1">Frequently asked questions</h2>
                    <p class="text-muted fs-16">Everything you need to know about 360 SMS App—your go-to solution for texting from Salesforce and multichannel communication.</p>
                </div>
                <div class="border rounded-4 overflow-hidden shadow-sm bg-white">
                    <?php
                    $faqs = [
                        ['Can Salesforce send text messages?', 'Yes. While Salesforce doesn\'t have a native built-in texting service, you can easily send SMS via AppExchange apps like 360 SMS.'],
                        ['How to send SMS from Salesforce?', 'You can send SMS directly from Leads, Contacts, or any Custom Object. You can also automate it via Salesforce Flow.'],
                        ['What is the best Salesforce SMS app?', '360 SMS is the #1 rated app on AppExchange with 1,200+ five-star reviews, offering full multi-channel support.'],
                        ['How does Salesforce SMS pricing work?', 'Pricing typically includes a monthly license fee per user plus messaging costs based on volume and destination.'],
                        ['Can I use SMS in Salesforce Service Cloud?', 'Yes, 360 SMS works perfectly with Service Cloud, enabling agents to handle queries via SMS/WhatsApp from the Console.'],
                    ];
                    foreach ($faqs as $i => $faq):
                        $bdr = $i < count($faqs) - 1 ? 'border-bottom' : '';
                    ?>
                        <div class="faq-item <?= $bdr ?> p-4">
                            <div class="faq-q d-flex justify-content-between align-items-center" onclick="toggleFaq(this)">
                                <?= ($i + 1) ?>. <?= $faq[0] ?> <i class="bi bi-plus fs-4"></i>
                            </div>
                            <div class="faq-a pt-3 text-muted" style="display:none"><?= $faq[1] ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- ═══ SECTION 16: CONTACT FORM (placeholder) ═══ -->
<?php
/**
 * Salesforce Template — Footer
 * Brand Color: #0057B8 (Salesforce Blue)
 */
?>

        <!-- ═══ FOOTER — SALESFORCE ═══ -->
        <footer class="footer">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="f-logo" id="foot-logo"><img src="https://360smsapp.com/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp" alt="360 SMS App Logo"></div>
                        <p class="f-desc">The #1 rated Salesforce SMS app on AppExchange. SMS, WhatsApp, AI Chatbot — natively inside Salesforce. No middleware, no developer.</p>
                       <a href="#" class="f-badge mb-2"><span>📦</span> Also on AppExchange · Salesforce</a>
                        <a href="#" class="f-badge" style="color: var(--brand-zo) !important; border-color: rgba(196, 21, 42, 0.1);"><span>📦</span> Zoho Marketplace · Zoho CRM</a>
                        
                        <div class="f-socials">
                            <a href="#"><i class="bi bi-linkedin"></i></a>
                            <a href="#"><i class="bi bi-twitter-x"></i></a>
                            <a href="#"><i class="bi bi-youtube"></i></a>
                            <a href="#"><i class="bi bi-facebook"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h4 class="f-h">Products</h4>
                        <?php foreach (['SMS for Salesforce', 'WhatsApp for CRM', 'AI Chatbot for CRM', 'Messaging App for CRM', 'Automated Messaging', 'Bulk SMS', 'Workflow Automation', 'WhatsApp Automation'] as $link): ?>
                            <a href="#" class="f-link"><?= $link ?></a>
                        <?php endforeach; ?>
                        <a href="#" class="f-link red">→ All Features</a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h4 class="f-h">Resources</h4>
                        <?php foreach (['Blog', 'Case Studies', 'Success Stories', 'Documents', 'Pro Tips', 'Webinars', 'Whitepapers', 'Events'] as $link): ?>
                            <a href="#" class="f-link"><?= $link ?></a>
                        <?php endforeach; ?>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h4 class="f-h">Company</h4>
                        <?php foreach (['About Us', 'Careers', 'Partners', 'Pricing', 'Contact Us'] as $link): ?>
                            <a href="#" class="f-link"><?= $link ?></a>
                        <?php endforeach; ?>
                        <h4 class="f-h f-sales-mt">SALES CLOUD</h4>
                        <a href="mailto:sales@360smsapp.com" class="f-link f-sales-link">sales@360smsapp.com</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="f-h">Contact</h4>
                        <div class="f-contact-item">
                            <div class="f-contact-title"> United States</div>
                            <a href="tel:+13236414417" class="f-contact-num">+1 323 641 4417</a>
                            <div class="f-contact-addr">1968 S. Coast Hwy 1412,<br>Laguna Beach, CA 92651</div>
                        </div>
                        <div class="f-contact-item">
                            <div class="f-contact-title">🇬🇧 United Kingdom</div>
                            <a href="tel:+447403279473" class="f-contact-num">+44 740 327 9473</a>
                            <div class="f-contact-addr">Plaza Suite 8, KD Tower, Cotterells,<br>Hemel Hempstead, Herts, HP1 1FW, UK</div>
                        </div>
                    </div>
                </div>
                <div class="f-btm d-flex justify-content-between align-items-center">
                    <div>© 2026 360 SMS App. All rights reserved.</div>
                    <div class="f-btm-links">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Use</a>
                        <a href="#">Cookie Policy</a>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let activeGS = 1;

        function showGS(n) {
            activeGS = n;
            const color = 'var(--brand)';
            for (let i = 1; i <= 4; i++) {
                const tab = document.getElementById('gst-' + i),
                    panel = document.getElementById('gsp-' + i),
                    num = document.getElementById('gsn' + i);
                if (tab) {
                    tab.style.opacity = i === n ? '1' : '.6';
                    tab.style.borderLeft = i === n ? '4px solid ' + color : '4px solid transparent';
                    tab.classList.toggle('active-tab', i === n);
                }
                if (panel) panel.style.display = i === n ? 'block' : 'none';
            }
        }

        function toggleM(menu, el) {
            const mega = el.nextElementSibling,
                isOpen = mega.classList.contains('show');
            document.querySelectorAll('.mega').forEach(m => m.classList.remove('show'));
            document.querySelectorAll('.nl').forEach(n => n.classList.remove('open'));
            if (!isOpen) {
                mega.classList.add('show');
                el.classList.add('open');
            }
        }

        function toggleFaq(el) {
            const item = el.parentElement,
                ans = el.nextElementSibling,
                isOpen = item.classList.contains('open');
            document.querySelectorAll('.faq-item').forEach(i => {
                i.classList.remove('open');
                i.querySelector('.faq-a').style.display = 'none';
            });
            if (!isOpen) {
                item.classList.add('open');
                ans.style.display = 'block';
            }
        }

        function toggleMobNav() {
            const root = document.getElementById('three60-hp-root');
            root.classList.toggle('mob-nav-open');
            document.body.style.overflow = root.classList.contains('mob-nav-open') ? 'hidden' : '';
        }

        document.addEventListener('click', function(e) {
            if (!e.target.closest('.ni') && !e.target.closest('.mob-toggle')) {
                document.querySelectorAll('.mega').forEach(m => m.classList.remove('show'));
                document.querySelectorAll('.nl').forEach(n => n.classList.remove('open'));
                const root = document.getElementById('three60-hp-root');
                if (root.classList.contains('mob-nav-open')) {
                    root.classList.remove('mob-nav-open');
                    document.body.style.overflow = '';
                }
            }
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
</body>

</html>

