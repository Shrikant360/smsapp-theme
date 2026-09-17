<?php
/*
Template Name:Salesforce MMS New
*/
    get_header('sms');
?>
  <style>
  /* Plus Jakarta Sans for website text */
body {
    font-family: "Plus Jakarta Sans", sans-serif;
}

/* Fix Font Awesome icons */
.fa,
.fa-solid,
.fa-regular,
.fa-brands,
.fas,
.far,
.fab {
    font-family: "Font Awesome 6 Free" !important;
    font-style: normal;
    font-weight: 900 !important;
    display: inline-block;
    line-height: 1;
    text-rendering: auto;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

/* Brands */
.fa-brands,
.fab {
    font-family: "Font Awesome 6 Brands" !important;
    font-weight: 400 !important;
}

/* Regular icons */
.fa-regular,
.far {
    font-family: "Font Awesome 6 Free" !important;
    font-weight: 400 !important;
}
#three60-hp-root .btn-nav-pri {
    padding: 12px 20px 7px 20px;
}
h2{
line-height: 1.1;
}
    :root {
      --blue: #0070d2;
      --blue-dark: #0058a3;
      --navy: #0a2540;
      --dark: #1a1a1a;
      --muted: #6c757d;
      --light-bg: #f8f9fa;
      --border: #dee2e6;
      --radius: 10px;
      --shadow: 0 2px 12px rgba(0,0,0,0.07);
    }
    *, *::before, *::after { box-sizing: border-box; }
    body {
      font-family: 'Plus Jakarta Sans', sans-serif;
      font-size: 15px;
      line-height: 1.65;
      color: var(--dark);
      background: #fff;
    }
    h1,h2,h3,h4,h5 { font-weight: 700; color: var(--dark); }
    section { padding: 80px 0; }
    .btn-primary-solid {
        background: var(--blue);
        color: #fff;
        border: 2px solid var(--blue);
        border-radius: 8px;
        padding: 11px 11px 0;
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
        border-radius: 12px;
    }
    @media (max-width: 767px) { section { padding: 48px 0; } }
    .btn-primary-solid {
        background: var(--blue);
        color: #fff;
        border: 2px solid var(--blue);
        border-radius: 8px;
        padding: 7px 18px;
        font-weight: 600; 
        font-size: 13.5px;
        text-decoration: none;
        display: inline-block;
        transition: .2s;
    }
    .btn-primary-solid:hover { background: var(--blue-dark); border-color: var(--blue-dark); color: #fff; } 
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
    .btn-outline-primary-custom:hover { background: var(--blue); color: #fff; }
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
    #breadcrumb-bar .breadcrumb-item a:hover { color: var(--blue); }
    #breadcrumb-bar .breadcrumb-item.active { color: var(--blue); font-weight: 600; }
    #breadcrumb-bar .breadcrumb-item + .breadcrumb-item::before {
      color: #bbb;
      content: "›";
      font-size: 14px;
    }

    /* ========== SECTION 1 — HERO ========== */
    #hero {
      padding: 64px 0 60px;
      background: linear-gradient(to right, #eff6ff, #f7f7f5);
    }
    #hero .hero-tag {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      background: #f0f7ff;
      border: 1px solid #c9e1f8;
      border-radius: 20px;
      padding: 5px 14px;
      font-size: 12px;
      font-weight: 600;
      color: var(--blue);
      margin-bottom: 18px;
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
      margin-left:0px !important;
      max-width: 480px;
    }
    #hero .hero-btns { display: flex; gap: 12px; flex-wrap: wrap; margin-bottom: 16px; }
    #hero .trust-text { font-size: 12.5px; color: var(--muted); }
    #hero .rating-row {
      display: flex;
      align-items: center;
      gap: 6px;
      margin-top: 14px;
      font-size: 13px;
      font-weight: 600;
    }
    #hero .stars { color: #f4c430; font-size: 13px; }
    #hero .hero-image-wrap {
      position: relative;
      display: flex;
      justify-content: center;
    }
    .hero-mockup {
      background: #fff;
      border-radius: 16px;
      border: 1px solid #e0e8f0;
      box-shadow: 0 12px 40px rgba(0,112,210,.12);
      overflow: hidden;
      width: 100%;
      max-width: 520px;
    }
    .mockup-topbar {
      background: #f4f6f8;
      border-bottom: 1px solid #e0e8f0;
      padding: 8px 14px;
      display: flex;
      align-items: center;
      gap: 6px;
    }
    .dot { width: 10px; height: 10px; border-radius: 50%; }
    .dot-r { background: #ff5f57; }
    .dot-y { background: #ffbd2e; }
    .dot-g { background: #28c840; }
    .mockup-inner { display: flex; height: 300px; }
    .mockup-sidebar {
      width: 160px;
      border-right: 1px solid #e8edf2;
      padding: 10px;
      flex-shrink: 0;
    }
    .mockup-sidebar .contact-row {
      display: flex;
      align-items: center;
      gap: 8px;
      padding: 7px 8px;
      border-radius: 7px;
      cursor: pointer;
      margin-bottom: 2px;
      transition: background .15s;
    }
    .mockup-sidebar .contact-row:hover, .contact-row.active { background: #f0f7ff; }
    .avatar {
      width: 30px; height: 30px; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
      font-size: 11px; font-weight: 700; color: #fff; flex-shrink: 0;
    }
    .av-blue { background: #0070d2; }
    .av-green { background: #27ae60; }
    .av-orange { background: #e67e22; }
    .av-purple { background: #8e44ad; }
    .contact-info .cname { font-size: 11px; font-weight: 600; color: #1a1a1a; line-height: 1.2; }
    .contact-info .cpreview { font-size: 10px; color: #999; }
    .mockup-chat { flex: 1; padding: 12px; display: flex; flex-direction: column; gap: 8px; overflow: hidden; }
    .chat-bubble {
      max-width: 75%;
      padding: 8px 12px;
      border-radius: 12px;
      font-size: 11px;
      line-height: 1.4;
    }
    .chat-in { background: #f0f2f5; color: #333; align-self: flex-start; border-bottom-left-radius: 3px; }
    .chat-out { background: var(--blue); color: #fff; align-self: flex-end; border-bottom-right-radius: 3px; }
    .chat-img-bubble {
      background: #f0f2f5;
      border-radius: 12px;
      overflow: hidden;
      max-width: 140px;
      align-self: flex-end;
    }
    .chat-img-inner {
      background: linear-gradient(135deg, #e8f1fb 0%, #d0e8f8 100%);
      height: 70px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
    }
    .mockup-input-bar {
      border-top: 1px solid #e8edf2;
      padding: 8px 12px;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .mockup-input {
      flex: 1; background: #f4f6f8; border: none; border-radius: 20px;
      padding: 6px 14px; font-size: 11px; color: #666; outline: none;
    }
    .send-btn {
      width: 28px; height: 28px; background: var(--blue); border: none;
      border-radius: 50%; display: flex; align-items: center; justify-content: center;
      color: #fff; font-size: 11px; cursor: pointer;
    }
    /* Floating stat badges */
    .stat-badge {
      position: absolute;
      background: #fff;
      border-radius: 10px;
      box-shadow: 0 4px 16px rgba(0,0,0,0.12);
      padding: 8px 14px;
      text-align: center;
      min-width: 72px;
    }
    .stat-badge .snum { font-size: 17px; font-weight: 800; color: var(--dark); line-height: 1; }
    .stat-badge .slabel { font-size: 10px; color: var(--muted); font-weight: 500; margin-top: 2px; }
    .badge-tl { top: -12px; left: -10px; }
    .badge-tr { top: 30px; right: -18px; }
    .badge-ml { top: 50%; right: -22px; transform: translateY(-50%); }
    .badge-bl { bottom: 20px; left: -16px; }
    .badge-br { bottom: -12px; right: 20px; }
    .badge-bc { bottom: 30px; left: 50%; transform: translateX(-50%); }

    /* ========== STATS BAR ========== */
    #stats-bar {
      padding: 28px 0;
      border-top: 1px solid #e8edf2;
      border-bottom: 1px solid #e8edf2;
      background: #fff;
    }
    .stats-bar-inner {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: nowrap;
      gap: 0;
    }
    .stat-item {
      text-align: center;
      flex: 1;
      padding: 6px 8px;
      position: relative;
    }
    .stat-item + .stat-item::before {
      content: '';
      position: absolute;
      left: 0; top: 50%;
      transform: translateY(-50%);
      height: 34px;
      width: 1px;
      background: #e8edf2;
    }
    .stat-item .big-num {
      font-size: 24px;
      font-weight: 800;
      color: var(--dark);
      line-height: 1;
      letter-spacing: -0.5px;
    }
    .stat-item .stat-label {
      font-size: 11px;
      color: var(--muted);
      margin-top: 4px;
      line-height: 1.3;
      font-weight: 500;
    }
    /* Mobile: 3 cols × 2 rows grid */
    @media (max-width: 767px) {
      .stats-bar-inner {
        flex-wrap: wrap;
        justify-content: center;
      }
      .stat-item {
        flex: 0 0 33.333%;
        max-width: 33.333%;
        padding: 12px 8px;
        border-bottom: 1px solid #e8edf2;
      }
      /* Remove pseudo dividers on mobile, use border instead */
      .stat-item + .stat-item::before { display: none; }
      /* 3rd item in each row: no right divider needed */
      .stat-item:nth-child(3),
      .stat-item:nth-child(6) { border-right: none; }
      .stat-item:nth-child(1),
      .stat-item:nth-child(2) { border-right: 1px solid #e8edf2; }
      .stat-item:nth-child(4),
      .stat-item:nth-child(5) { border-right: 1px solid #e8edf2; }
      /* Last row: no bottom border */
      .stat-item:nth-child(4),
      .stat-item:nth-child(5),
      .stat-item:nth-child(6) { border-bottom: none; }
      .stat-item .big-num { font-size: 22px; }
      .stat-item .stat-label { font-size: 10.5px; }
    }

    /* ========== SECTION 2 — HOW IT WORKS ========== */
    #how-it-works { background: #fff; }
    #how-it-works h2 { font-size: clamp(22px, 3vw, 32px); margin-bottom: 12px; }
    .how-tabs { display: flex; gap: 8px; flex-wrap: wrap; }
    .how-tab {
      padding: 7px 20px;
      border-radius: 20px;
      font-size: 12.5px;
      font-weight: 600;
      border: 1.5px solid #e0e0e0;
      background: #fff;
      color: var(--muted);
      cursor: pointer;
      transition: all .2s;
    }
    .how-tab.active { background: var(--blue); border-color: var(--blue); color: #fff; }
    /* HIW bordered card */
    .hiw-card {
      border: 1.5px solid #e8edf2;
      border-radius: 14px;
      padding: 28px;
      height: 100%;
      background: #fff;
      box-shadow: 0 2px 10px rgba(0,0,0,0.04);
    }
    .hiw-card-header { margin-bottom: 14px; }
    .hiw-badge {
      font-size: 11px;
      font-weight: 700;
      border-radius: 20px;
      padding: 4px 12px;
      letter-spacing: .3px;
    }
    .col-head { font-size: 16px; font-weight: 700; margin-bottom: 8px; color: var(--dark); }
    .feature-row { display: flex; gap: 12px; margin-bottom: 16px; align-items: flex-start; }
    .feature-icon {
      width: 32px; height: 32px; border-radius: 8px;
      background: #e8f1fb; color: var(--blue);
      display: flex; align-items: center; justify-content: center;
      font-size: 14px; flex-shrink: 0; margin-top: 2px;
    }
    .feature-icon.green { background: #e6f9ef; color: #27ae60; }
    .feature-icon.orange { background: #fff3e6; color: #e67e22; }
    .feature-title { font-size: 13.5px; font-weight: 700; margin-bottom: 3px; }
    .feature-desc { font-size: 13px; color: var(--muted); line-height: 1.55; }
    .section-divider { border: none; border-top: 1px solid #e8edf2; margin: 0; }

     /* ========== SECTION 3 — APP FEATURES ========== */
    #app-features { background: var(--light-bg); }
    #app-features h2 { font-size: clamp(20px, 2.8vw, 30px); margin-bottom: 8px; }

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
    .af-nav { display: flex; flex-direction: column; }
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
    .af-tab:hover { background: #f0f7ff; border-left-color: #90c8f0; }
    .af-tab.active { background: #eef6ff; border-left-color: var(--blue); }
    .af-thumb-inner {
      width: 42px; height: 34px;
      border-radius: 7px;
      display: flex; align-items: center; justify-content: center;
      border: 1px solid rgba(0,0,0,0.06);
      flex-shrink: 0;
    }
    .af-tab-text { flex: 1; min-width: 0; }
    .af-tab-title { font-size: 11px; font-weight: 700; color: #333; line-height: 1.3; }
    .af-tab.active .af-tab-title { color: var(--blue); }
    .af-tab-sub { font-size: 9.5px; color: var(--muted); margin-top: 1px; }
    .af-more-label {
      font-size: 10px; font-weight: 700; color: var(--muted);
      letter-spacing: .7px; padding: 12px 12px 6px;
      border-top: 1px solid #e8edf2; margin-top: auto;
    }
    .af-more-list { padding: 0 8px 10px; display: flex; flex-direction: column; gap: 3px; }
    .af-more-item {
      display: flex; align-items: center; gap: 7px;
      padding: 5px 7px; border-radius: 7px;
      background: #fff; border: 1px solid #edf2f8;
      font-size: 10.5px; font-weight: 600; color: #444;
      cursor: pointer; transition: background .15s;
    }
    .af-more-item:hover { background: #f0f7ff; }
    .af-more-icon {
      font-size: 13px; width: 24px; height: 24px;
      background: #f4f6f8; border-radius: 5px;
      display: flex; align-items: center; justify-content: center; flex-shrink: 0;
    }
    .af-unique {
      background: #e8f1fb; color: var(--blue);
      font-size: 8.5px; font-weight: 700;
      padding: 1px 5px; border-radius: 8px; margin-left: 3px;
    }
    .af-right { flex: 1; min-width: 0; display: flex; flex-direction: column; }
    .af-panel { display: none; }
    .af-panel.active { display: block; }
    .af-panel-inner { display: flex; }
    .af-mockup-col {
      width: 210px; flex-shrink: 0;
      padding: 18px 14px;
      border-right: 1px solid #f0f2f5;
      background: #fafcff;
      display: flex; align-items: flex-start; justify-content: center;
    }
    .af-mini-mockup {
      width: 100%;
      border: 1px solid #e0e8f0;
      border-radius: 10px; overflow: hidden;
      box-shadow: 0 3px 12px rgba(0,112,210,0.1);
      background: #fff;
    }
    .af-mini-topbar {
      background: #f4f6f8; border-bottom: 1px solid #e8edf2;
      padding: 5px 8px; display: flex; align-items: center; gap: 4px;
    }
    .af-mini-body { display: flex; height: 185px; overflow: hidden; }
    .af-mini-sidebar {
      width: 76px; border-right: 1px solid #f0f2f5;
      padding: 5px 3px; flex-shrink: 0;
    }
    .af-mini-row {
      display: flex; align-items: center; gap: 4px;
      padding: 4px; border-radius: 5px; margin-bottom: 2px; cursor: pointer;
    }
    .active-row { background: #e8f1fb; }
    .af-ava {
      width: 18px; height: 18px; border-radius: 50%;
      font-size: 6.5px; font-weight: 700; color: #fff;
      display: flex; align-items: center; justify-content: center; flex-shrink: 0;
    }
    .af-rinfo .af-rn { font-size: 8.5px; font-weight: 700; color: #1a1a1a; line-height: 1.2; }
    .af-rinfo .af-rm { font-size: 8px; color: #999; }
    .af-mini-chat { flex: 1; padding: 7px 6px; display: flex; flex-direction: column; gap: 4px; overflow: hidden; }
    .af-bubble { padding: 4px 7px; border-radius: 7px; font-size: 8.5px; line-height: 1.3; max-width: 88%; }
    .af-bubble.in { background: #f0f2f5; color: #333; align-self: flex-start; }
    .af-bubble.out { background: var(--blue); color: #fff; align-self: flex-end; }
    .af-img-bub {
      background: linear-gradient(135deg,#e8f1fb,#d0e5f8);
      border-radius: 6px; width: 44px; height: 32px;
      display: flex; align-items: center; justify-content: center;
      font-size: 14px; align-self: flex-end;
    }
    .af-text-col { flex: 1; padding: 22px 24px; min-width: 0; }
    .tc-sub { font-size: 10px; font-weight: 800; color: var(--blue); letter-spacing: 1px; text-transform: uppercase; margin-bottom: 8px; }
    .af-text-col h3 { font-size: 17px; line-height: 1.3; margin-bottom: 10px; }
    .af-text-col p { color: var(--muted); font-size: 13px; line-height: 1.65; margin-bottom: 12px; }
    .check-list { list-style: none; padding: 0; margin-bottom: 14px; }
    .check-list li { display: flex; align-items: flex-start; gap: 8px; font-size: 13px; margin-bottom: 6px; color: #444; }
    .check-list li i { color: var(--blue); margin-top: 3px; flex-shrink: 0; }
    .tag-chips { display: flex; gap: 6px; flex-wrap: wrap; margin-bottom: 14px; }
    .tag-chip { background: #f0f7ff; border: 1px solid #c9e1f8; color: var(--blue); border-radius: 20px; padding: 4px 11px; font-size: 11px; font-weight: 600; }
    .learn-more { color: var(--blue); font-weight: 700; font-size: 13px; text-decoration: none; }
    .learn-more:hover { text-decoration: underline; }
    /* More features strip under panel */
    .af-more-strip {
      display: flex; align-items: flex-start; justify-content: space-around;
      padding: 16px 0px;
      gap: 6px; flex-wrap: wrap;
    }
    .af-more-strip-item {
      display: flex; flex-direction: column; align-items: center;
      text-align: center; gap: 6px; flex: 1; min-width: 65px;
    }
    .af-ms-icon {
      width: 44px; height: 44px; background: #fff;
      border: 1px solid #e8edf2; border-radius: 10px;
      display: flex; align-items: center; justify-content: center;
      font-size: 18px; box-shadow: 0 1px 5px rgba(0,0,0,0.05);
    }
    .af-more-strip-item span { font-size: 10px; font-weight: 600; color: #555; line-height: 1.3; }
    .see-all-btn {
      background: var(--blue); color: #fff; border: none;
      border-radius: 8px; padding: 15px 0;
      font-size: 14px; font-weight: 700; width: 100%;
      cursor: pointer; transition: background .2s; letter-spacing: .2px;
    }
    .see-all-btn:hover { background: var(--blue-dark); }
    @media (max-width: 767px) {
      .af-wrap { flex-direction: column; }
      .af-left { width: 100%; border-right: none; border-bottom: 1.5px solid #e8edf2; max-height: 260px; overflow-y: auto; }
      .af-more-label, .af-more-list { display: none; }
      .af-panel-inner { flex-direction: column; }
      .af-mockup-col { width: 100%; border-right: none; border-bottom: 1px solid #f0f2f5; }
      .af-text-col { padding: 16px; }
      .af-more-strip { display: none; }
    }

   /* ========== SECTION 5 — AI DARK ========== */
    #ai-section {
      background: #00346F;
      color: #fff;
      padding: 64px 0 0;
    }
    .ai-eyebrow {
      display: inline-flex; align-items: center; gap: 6px;
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.14);
      color: rgba(255,255,255,0.6);
      font-size: 10.5px; font-weight: 700;
      letter-spacing: 1.2px; text-transform: uppercase;
      padding: 5px 14px; border-radius: 20px;
      margin-bottom: 18px; display: inline-flex;
    }
    .ai-h2 {
      color: #fff; font-size: clamp(26px, 3vw, 40px);
      font-weight: 800; line-height: 1.2; margin-bottom: 14px;
    }
    .ai-sub {
      color: rgba(255,255,255,0.55);
      font-size: 14.5px; line-height: 1.7;
      max-width: 640px; margin-bottom: 40px;
    }
    /* Cards */
    .ai-card {
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.09);
      border-radius: 14px; padding: 24px; height: 100%;
      transition: background .2s, transform .2s;
    }
    .ai-card:hover { background: rgba(255,255,255,0.08); transform: translateY(-3px); }
    .ai-card-icon {
      width: 44px; height: 44px; border-radius: 12px;
      display: flex; align-items: center; justify-content: center;
      font-size: 20px; margin-bottom: 16px; color: #fff;
    }
    .ai-icon-green { background: rgba(39,174,96,0.22); color: #4cd98a; }
    .ai-icon-blue  { background: rgba(52,152,219,0.22); color: #6ab8f7; }
    .ai-icon-red   { background: rgba(231,76,60,0.22);  color: #f08080; }
    .ai-card-title { color: #fff; font-size: 15px; font-weight: 700; margin-bottom: 10px; }
    .ai-card-desc  { color: rgba(255,255,255,0.55); font-size: 13px; line-height: 1.65; margin-bottom: 14px; }
    .ai-tags { display: flex; gap: 6px; flex-wrap: wrap; }
    .ai-tag {
      font-size: 10.5px; font-weight: 600;
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(255,255,255,0.1);
      color: rgba(255,255,255,0.6);
      padding: 3px 10px; border-radius: 20px;
    }
    /* Stats strip — WHITE background, own section outside dark navy */
    .ai-stats-strip {
      background: #fff;
      border-top: 1px solid #e8edf2;
      border-bottom: 1px solid #e8edf2;
      padding: 36px 0;
    }
    .ai-stats-row {
      display: flex; justify-content: space-between; align-items: center;
      flex-wrap: wrap; gap: 20px;
    }
    .ai-stat-block { flex: 1; min-width: 100px; text-align: center; }
    .ai-stat-num   { font-size: 40px; font-weight: 800; color: var(--blue); line-height: 1; }
    .ai-stat-lbl   { font-size: 12px; color: var(--muted); margin-top: 6px; line-height: 1.4; }
    /* CTA strip — full-width bg shift at very bottom */
    .ai-cta-strip {
      background: #0a56a0;
      padding: 22px 0;
      margin-top: 0;
    }
    .ai-cta-inner {
      display: flex; align-items: center;
      justify-content: space-between; flex-wrap: wrap; gap: 16px;
    }
    .ai-cta-main {
      color: #fff; font-size: 14.5px; font-weight: 700;
      margin: 0; line-height: 1.4;
    }
    .ai-cta-sub {
      color: rgba(255,255,255,0.55); font-size: 11.5px;
      margin: 3px 0 0; font-weight: 400;
    }
    .ai-cta-btns { display: flex; gap: 10px; flex-wrap: wrap; align-items: center; flex-shrink: 0; }
    .btn-white-solid {
      background: #fff; color: var(--blue);
      border: 2px solid #fff; border-radius: 8px;
      padding: 9px 22px; font-weight: 700; font-size: 13.5px;
      text-decoration: none; transition: all .2s; white-space: nowrap;
      display: inline-flex; align-items: center;
    }
    .btn-white-solid:hover { background: #e8f1fb; color: var(--blue-dark); }
    .btn-white-outline {
      background: transparent; color: #fff;
      border: 2px solid rgba(255,255,255,0.5); border-radius: 8px;
      padding: 9px 22px; font-weight: 700; font-size: 13.5px;
      text-decoration: none; transition: all .2s; white-space: nowrap;
      display: inline-flex; align-items: center;
    }
    .btn-white-outline:hover { background: rgba(255,255,255,0.12); border-color: #fff; }

   /* ========== SECTION 6 — INTEGRATION ========== */
    #integration {
      background: #f7f7f5;
      padding: 80px 0;
    }
    .int-h2 {
      font-size: clamp(22px, 2.6vw, 32px);
      font-weight: 800;
      line-height: 1.2;
      margin-bottom: 14px;
      color: var(--dark);
    }
    .int-para {
      color: var(--muted);
      font-size: 14px;
      line-height: 1.7;
      margin-bottom: 24px;
    }
    /* All chips in one flex-wrap block */
    .int-chips-all {
      display: flex;
      flex-wrap: wrap;
      gap: 7px;
      margin-bottom: 12px;
      justify-content: flex-start;
      align-items: flex-start;
    }
    .int-ch {
      display: inline-flex;
      align-items: center;
      background: #f4f6f8;
      border: 1.5px solid #e0e8f0;
      border-radius: 20px;
      padding: 4px 12px;
      font-size: 12px;
      font-weight: 600;
      color: #555;
      white-space: nowrap;
    }
    /* Highlighted chips */
    .int-sms { background: #0070d2; color: #fff; border-color: #0070d2; }
    .int-mms { background: #e74c3c; color: #fff; border-color: #e74c3c; }
    .int-rcs { background: #27ae60; color: #fff; border-color: #27ae60; }
    /* Rest assured — light tinted background box */
    .int-note {
      font-size: 12.5px;
      color: var(--muted);
      line-height: 1.65;
      margin: 4px 0 0;
      padding: 8px 14px;
      border: none;
      background: #f0f7ff;
      border-radius: 8px;
      display: block;
    }
    .int-note strong { color: #333; }
    @media (max-width: 767px) {
      #integration { padding: 48px 0; }
      .int-h2 { font-size: 22px; }
      .int-chips-all { gap: 6px; }
      .int-ch { font-size: 11.5px; padding: 4px 10px; }
    }

   /* ========== SECTION 7 — COMPARISON TABLE ========== */
    #comparison { background: #fff; }
    .cmp-header-row {
      display: flex; align-items: flex-start; justify-content: space-between;
      gap: 20px; flex-wrap: wrap; margin-bottom: 28px;
    }
    .cmp-award-badge {
      display: flex; align-items: center; gap: 10px;
      background: #E8F0FB; border: 1px solid #CCE0F7;
      border-radius: 10px; padding: 10px 16px; flex-shrink: 0;
    }
    .cmp-table-wrap { overflow-x: auto; border-radius: 12px; border: 1.5px solid #e8edf2; }
    .cmp-table { width: 100%; border-collapse: collapse; font-size: 13.5px; min-width: 520px; }
    .cmp-table th, .cmp-table td { padding: 14px 20px; }
    .cmp-th-feat {
      background: #f8f9fa; color: #999; font-size: 11px;
      font-weight: 700; text-transform: uppercase; letter-spacing: .5px;
      width: 34%; border-right: 1px solid #e8edf2; border-bottom: 2px solid #e8edf2;
    }
    .cmp-th-us {
      background: var(--blue); border-bottom: 2px solid var(--blue-dark);
      width: 33%; text-align: center; border-right: 1px solid rgba(255,255,255,0.2);
    }
    .cmp-us-label {
      display: flex; align-items: center; justify-content: center;
      gap: 6px; color: #fff; font-size: 14px; font-weight: 800;
    }
    .cmp-us-sub { color: rgba(255,255,255,0.7); font-size: 10px; font-weight: 600; letter-spacing: .5px; margin-top: 3px; text-align: center; }
    .cmp-th-other {
      background: #f8f9fa; width: 33%; text-align: center;
      border-bottom: 2px solid #e8edf2;
    }
    .cmp-feat { font-weight: 600; color: #333; font-size: 13.5px; border-right: 1px solid #e8edf2; }
    .cmp-us-cell { text-align: center; background: #f0f7ff; border-right: 1px solid #dce8f5; }
    .cmp-other-cell { text-align: center; }
    .cmp-alt td { background: #fafafa; }
    .cmp-alt .cmp-us-cell { background: #e8f1fb; }
    .cmp-table tbody tr:hover td { background: #f5f8ff !important; }
    .cmp-green {
      display: inline-flex; align-items: center; gap: 5px;
      background: #e6f9ef; color: #1a7c45;
      padding: 4px 12px; border-radius: 20px; font-size: 12.5px; font-weight: 700;
    }
    .cmp-red {
      display: inline-flex; align-items: center; gap: 5px;
      background: #fde8e8; color: #c0392b;
      padding: 4px 12px; border-radius: 20px; font-size: 12.5px; font-weight: 600;
    }
    .cmp-blue {
      display: inline-flex; align-items: center;
      background: #e8f1fb; color: var(--blue);
      padding: 4px 12px; border-radius: 20px; font-size: 12.5px; font-weight: 700;
    }
    .cmp-cta-row {
      display: flex; align-items: center; justify-content: center;
      flex-direction: column; gap: 14px; margin-top: 28px; text-align: center;
    }
    .cmp-cta-row p { color: var(--muted); font-size: 13.5px; margin: 0; }
    .cmp-cta-btns { display: flex; gap: 12px; flex-wrap: wrap; justify-content: center; }


    /* ========== SECTION 13 — CONTACT ========== */
    #contact { background: #eef4ff; }
    .contact-checks { list-style: none; padding: 0; margin: 20px 0; }
    .contact-checks li {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      font-size: 15px;
      margin-bottom: 12px;
      line-height: 1.5;
    }
    .contact-checks li i { color: var(--blue); font-size: 16px; margin-top: 2px; }
    .form-card { background: #fff; border-radius: 14px; padding: 32px; box-shadow: 0 4px 20px rgba(0,112,210,0.08); }
    .form-card .form-control, .form-card .form-select {
      border: 1.5px solid #e0e8f0;
      border-radius: 8px;
      padding: 11px 14px;
      font-size: 14px;
      color: var(--dark);
      background: #fafcff;
      transition: border-color .2s;
    }
    .form-card .form-control:focus, .form-card .form-select:focus {
      border-color: var(--blue);
      box-shadow: 0 0 0 3px rgba(0,112,210,0.1);
    }
    .form-card label { font-size: 13px; font-weight: 600; color: #444; margin-bottom: 5px; }
    .submit-btn {
      background: var(--blue);
      color: #fff;
      border: none;
      border-radius: 8px;
      padding: 13px;
      font-size: 15px;
      font-weight: 700;
      width: 100%;
      cursor: pointer;
      transition: background .2s;
    }
    .submit-btn:hover { background: var(--blue-dark); }

    /* Responsive tweaks */
    @media (max-width: 991px) {
      .badge-tl, .badge-tr, .badge-ml, .badge-bl, .badge-br, .badge-bc { display: none; }
      #hero .hero-image-wrap { margin-top: 40px; }
    }
    @media (max-width: 767px) {
      h2 { font-size: 24px !important; }
      .btn-primary-solid, .btn-outline-primary-custom { width: 100%; justify-content: center; }
      #hero .hero-btns { flex-direction: column; }
      .ai-cta-row { flex-direction: column; text-align: center; }
      .ai-cta-btns { justify-content: center; }
      .see-all-btn { font-size: 13px; }
      .compare-top-badge { display: none; }
    }
  </style>

<!-- ===== BREADCRUMB ===== -->
<div id="breadcrumb-bar">
  <div class="container" style="max-width:1200px">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>channels/">Channels</a></li>
        <li class="breadcrumb-item active" aria-current="page">Salesforce MMS</li>
      </ol>
    </nav>
  </div>
</div>

<!-- ===== SECTION 1: HERO ===== -->
<section id="hero">
  <div class="container" style="max-width:1200px">
    <div class="row align-items-center">
      <div class="col-lg-6 mb-4 mb-lg-0">
        <div class="hero-tag">
          <i class="fa-solid fa-bolt"></i>  Salesforce MMS · Send Multimedia Messages from Salesforce · 300KB
        </div>
        <h1><span style="color:var(--blue)">Salesforce MMS</span> - Send Images, Video &amp; Docs from Your CRM</h1>
        <p class="hero-sub">360 SMS is the leading Salesforce MMS app on AgentExchange. Send multimedia messages, images, video, GIFs, barcodes, and PDFs - directly from the <a href="<?php echo esc_url(home_url('/')); ?>salesforce-sms/">Salesforce SMS</a> inbox; no extra setup needed.</p>
        <div class="hero-btns">
          <a class="btn-nav-pri" target="_blank" href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&amp;utm_source=SEO&amp;utm_medium=website&amp;utm_campaign=navigation" style="text-decoration:none;">Book a Demo</a> 
          <a class="open-popup-form-on-click btn-outline-primary-custom">Start Free Trial</a>
        </div>
        <div class="rating-row mt-3">
          <span class="stars">★★★★★</span>
          <strong>4.9 / 5.0</strong>
          <span style="color:var(--muted);font-size:12px">· 1,200+ AgentExchange reviews · 10+ years</span>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hero-image-wrap">
          <img class="img-fluid" src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/09/CH-MMS.png"alt="Salesforce MMS">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats Bar -->
<div id="stats-bar">
  <div class="container" style="max-width:1200px">
    <div class="stats-bar-inner">
      <div class="stat-item">
        <div class="big-num">10x</div>
        <div class="stat-label">More likely to<br>be shared</div>
      </div>
      <div class="stat-item">
        <div class="big-num">6x</div>
        <div class="stat-label">Faster<br>visual processing</div>
      </div>
      <div class="stat-item">
        <div class="big-num">300KB</div>
        <div class="stat-label">Max file size<br>supported</div>
      </div>
      <div class="stat-item">
        <div class="big-num">1,600</div>
        <div class="stat-label">Characters<br>per message</div>
      </div>
      <div class="stat-item">
        <div class="big-num">60k+</div>
        <div class="stat-label">Users<br>worldwide</div>
      </div>
      <div class="stat-item">
        <div class="big-num">24/7</div>
        <div class="stat-label">Free support</div>
      </div>
    </div>
  </div>
</div>

<!-- ===== SECTION 2: HOW IT WORKS ===== -->
<section id="how-it-works">
  <div class="container" style="max-width:1200px">
    <div class="row justify-content-center mb-4">
      <div class="col-lg-12">
        <h2>How Salesforce MMS integration works - send, receive, and automate.</h2>
        <p style="color:var(--muted);font-size:14.5px;line-height:1.7;margin-top:12px;">Both sides of your Salesforce MMS integration run natively - no middleware, no tab-switching, no separate login. Every message sent or received is automatically tied to the right Salesforce record.</p>
      </div>
    </div>
    <!-- Two-column bordered panels -->
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="hiw-card">
          <div class="hiw-card-header">
            <span class="hiw-badge" style="background:#e8f1fb;color:var(--blue)">Multimedia · Content</span>
          </div>
          <p class="col-head">Send pictures, video, audio, and more.</p>
          <p style="color:var(--muted);font-size:13.5px;line-height:1.6;margin-bottom:20px">Send images, audio, video files, GIFs, barcodes, and rich documents - straight from any Salesforce record.</p>
          <div class="feature-row">
            <div class="feature-icon"><i class="bi bi-ban"></i></div>
            <div>
              <div class="feature-title">Rich formats</div>
              <div class="feature-desc">JPG, PNG, PDF, GIF, MP3, PDF, barcodes, business cards - send any media your customers need.</div>
            </div>
          </div>
          <div class="feature-row">
            <div class="feature-icon"><i class="bi bi-bar-chart"></i></div>
            <div>
              <div class="feature-title"><a href="<?php echo esc_url(home_url('/')); ?>link-tracking/" style="color:inherit;text-decoration:none;">Analytics</a></div>
              <div class="feature-desc">See delivery, open, and click-through data per message directly inside Salesforce reports.</div>
            </div>
          </div>
          <div class="feature-row">
            <div class="feature-icon"><i class="bi bi-chat-square-text"></i></div>
            <div>
              <div class="feature-title"><a href="<?php echo esc_url(home_url('/')); ?>automated-messaging/" style="color:inherit;text-decoration:none;">Response-triggered MMS</a></div>
              <div class="feature-desc">Send multimedia based on keyword replies - automate visual responses to inbound messages.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hiw-card">
          <div class="hiw-card-header">
            <span class="hiw-badge" style="background:#e6f9ef;color:#27ae60">Budget · Conversion</span>
          </div>
          <p class="col-head">Improve ROI with visual campaigns.</p>
          <p style="color:var(--muted);font-size:13.5px;line-height:1.6;margin-bottom:20px">Repurpose existing graphics, reduce MMS spend, and improve campaign returns by adding visuals to <a href="<?php echo esc_url(home_url('/')); ?>bulk-batch-scheduled-sms-texting/">SMS campaigns</a> without rebuilding from scratch.</p>
          <div class="feature-row">
            <div class="feature-icon"><i class="bi bi-arrow-repeat"></i></div>
            <div>
              <div class="feature-title">Repurpose creatives</div>
              <div class="feature-desc">Reuse existing brand assets across MMS campaigns to reduce spend and improve campaign returns.</div>
            </div>
          </div>
          <div class="feature-row">
            <div class="feature-icon"><i class="bi bi-ticket"></i></div>
            <div>
              <div class="feature-title">Vouchers &amp; passes</div>
              <div class="feature-desc">Send tickets, barcodes, menus, and forms over MMS to drive conversions from every campaign.</div>
            </div>
          </div>
          <div class="feature-row">
            <div class="feature-icon"><i class="bi bi-geo-alt"></i></div>
            <div>
              <div class="feature-title">Visual maps &amp; directions</div>
              <div class="feature-desc">Share venue directions and maps to drive foot traffic directly from any Salesforce record.</div>
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
    <!-- Heading -->
    <div class="mb-4">
      <h2>Salesforce MMS app features used by 60K+ Users daily</h2>
      <p style="color:var(--muted);font-size:14px;max-width:680px;margin-top:6px">Every Salesforce MMS feature lives inside your CRM - same records, same reports, same Salesforce workflows your team already knows.</p>
    </div>

    <!-- Main 2-col layout: left nav tabs + right content panel -->
    <div class="af-wrap">

      <!-- LEFT: vertical stacked tab buttons with mini preview thumbnails -->
      <div class="af-left">
        <div class="af-nav" id="af-nav">

          <div class="af-tab active" data-target="af-panel-1">
            <div class="af-thumb">
              <div class="feature-icon"><i class="bi bi-image"></i></div>
            </div>
            <div class="af-tab-text">
              <div class="af-tab-title">Salesforce MMS<br>Rich Media</div>
              <div class="af-tab-sub">Images, video, audio, files from CRM </div>
            </div>
          </div>

          <div class="af-tab" data-target="af-panel-2">
            <div class="af-thumb">
              <div class="feature-icon"><i class="bi bi-bar-chart"></i></div>
            </div>
            <div class="af-tab-text">
              <div class="af-tab-title">Salesforce MMS<br>Analytics</div>
              <div class="af-tab-sub">MMS click-through & delivery tracking</div>
            </div>
          </div>

          <div class="af-tab" data-target="af-panel-3">
            <div class="af-thumb">
              <div class="feature-icon"><i class="bi bi-lightning"></i></div>
            </div>
            <div class="af-tab-text">
              <div class="af-tab-title">Salesforce MMS<br>Automation</div>
              <div class="af-tab-sub">Flow-triggered multimedia sends</div>
            </div>
          </div>

          <div class="af-tab" data-target="af-panel-4">
            <div class="af-thumb">
              <div class="feature-icon"><i class="bi bi-arrow-repeat"></i></div>
            </div>
            <div class="af-tab-text">
              <div class="af-tab-title">Drip Campaigns</div>
              <div class="af-tab-sub">Multi-step visual sequences</div>
            </div>
          </div>

          <div class="af-tab" data-target="af-panel-5">
            <div class="af-thumb">
              <div class="feature-icon"><i class="bi bi-chat-dots"></i></div>
            </div>
            <div class="af-tab-text">
              <div class="af-tab-title">P2P Messaging</div>
              <div class="af-tab-sub">1-on-1 multimedia replies </div>
            </div>
          </div>
        </div>
        
      </div>

      <!-- RIGHT: tab content panels — split mockup + text -->
      <div class="af-right">

        <!-- Panel 1 -->
        <div class="af-panel active" id="af-panel-1">
          <div class="af-panel-inner">
            <div class="af-text-col">
              <div class="tc-sub">SALESFORCE MMS - RICH MULTIMEDIA MESSAGES</div>
              <h3>Send MMS from Salesforce - images, video, GIFs, and documents.</h3>
              <p>Send MMS from Salesforce - images, video, GIFs, audio, and documents - all from any Lead, Contact, or Account record. MMS for Salesforce is 10× more likely to be shared than plain SMS. Supported by the same 360 SMS app that handles <a href="<?php echo esc_url(home_url('/')); ?>bulk-batch-scheduled-sms-texting/">bulk SMS Salesforce</a>, <a href="<?php echo esc_url(home_url('/')); ?>salesforce-whatsapp/">WhatsApp</a>, and <a href="<?php echo esc_url(home_url('/')); ?>channels/">13 more channels</a>.</p>
              <ul class="check-list">
                <li><i class="fa-solid fa-check-circle"></i> Salesforce MMS supports JPG, PNG, MP4, GIF, MP3, PDF - up to 300KB per multimedia message</li>
                <li><i class="fa-solid fa-check-circle"></i> Send MMS vouchers, barcodes, business cards, and maps from any Salesforce record</li>
                <li><i class="fa-solid fa-check-circle"></i> Response-triggered MMS - send multimedia based on inbound keyword replies</li>
              </ul>
              <div class="tag-chips">
                <span class="tag-chip">Salesforce MMS 300KB</span>
                <span class="tag-chip">Multiple MMS formats</span>
                <span class="tag-chip">Response-triggered MMS</span>
              </div>
              <a href="<?php echo esc_url(home_url('/')); ?>conversation-manager/" class="learn-more btn-outline-primary-custom">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Panel 2 -->
        <div class="af-panel" id="af-panel-2">
          <div class="af-panel-inner">
            <div class="af-text-col">
              <div class="tc-sub">SALESFORCE MMS ANALYTICS - TRACK EVERY MULTIMEDIA MESSAGE</div>
              <h3>Track every Salesforce MMS campaign - delivery, clicks, and performance.</h3>
              <p>Track delivery rates, <a href="<?php echo esc_url(home_url('/')); ?>link-tracking/">click-throughs</a>, and open rates per MMS template. Use data to identify best-performing creatives and reduce spend.</p>
              <ul class="check-list">
                <li><i class="fa-solid fa-check-circle"></i> Delivery and read receipts per message</li>
                <li><i class="fa-solid fa-check-circle"></i> Click-through tracking for URLs in MMS</li>
                <li><i class="fa-solid fa-check-circle"></i> Compare template performance to optimize spend </li>
              </ul>
              <a href="<?php echo esc_url(home_url('/')); ?>link-tracking/" class="learn-more btn-outline-primary-custom">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Panel 3 -->
        <div class="af-panel" id="af-panel-3">
          <div class="af-panel-inner">
            <div class="af-text-col">
              <div class="tc-sub">SALESFORCE MMS - AUTOMATION</div>
              <h3>Automate MMS from Salesforce Flow - send multimedia on any CRM event.</h3>
              <p>Fire MMS automatically on record changes, keyword replies, or campaign steps. Build <a href="<?php echo esc_url(home_url('/')); ?>drip-campaigns/">drip sequences</a> mixing SMS and MMS in the same flow.</p>
              <ul class="check-list">
                <li><i class="fa-solid fa-check-circle"></i> No-code automation and Salesforce Flow native</li>
                <li><i class="fa-solid fa-check-circle"></i> Drip campaigns - mix SMS and MMS in one sequence</li>
                <li><i class="fa-solid fa-check-circle"></i> Keyword-triggered MMS responses</li>
              </ul>
              <a href="<?php echo esc_url(home_url('/')); ?>automated-messaging/" class="learn-more btn-outline-primary-custom">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Panel 4 -->
        <div class="af-panel" id="af-panel-4">
          <div class="af-panel-inner">
            <div class="af-text-col">
              <div class="tc-sub">SALESFORCE MMS - DRIP CAMPAIGNS</div>
              <h3>Nurture leads with visual drip sequences.</h3>
              <p>Build multi-step <a href="<?php echo esc_url(home_url('/')); ?>drip-campaigns/">drip campaigns</a> that mix MMS and <a href="<?php echo esc_url(home_url('/')); ?>salesforce-sms/">SMS</a> in a single flow. Send the right visual at the right stage - product image on day 1, promo on day 3, reminder on day 7.</p>
              <ul class="check-list">
                <li><i class="fa-solid fa-check-circle"></i> Mix MMS and SMS in the same drip sequence</li>
                <li><i class="fa-solid fa-check-circle"></i> Branching logic - different visuals by keyword reply</li>
                <li><i class="fa-solid fa-check-circle"></i> Schedule and throttle drip steps for optimal timing</li>
              </ul>
              <a href="<?php echo esc_url(home_url('/')); ?>drip-campaigns/" class="learn-more btn-outline-primary-custom">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Panel 5 -->
        <div class="af-panel" id="af-panel-5">
          <div class="af-panel-inner">
            <div class="af-text-col">
              <div class="tc-sub">SALESFORCE MMS - P2P MESSAGING</div>
              <h3>Send personal multimedia messages 1-on-1.</h3>
              <p>Reply to <a href="<?php echo esc_url(home_url('/')); ?>one-on-one-conversations/">individual conversations</a> with images, videos, or documents directly from any Salesforce record - same threaded inbox as SMS, personalised at every touchpoint.</p>
              <ul class="check-list">
                <li><i class="fa-solid fa-check-circle"></i> Threaded MMS conversations on any Salesforce object</li>
                <li><i class="fa-solid fa-check-circle"></i> Attach images or documents to any individual reply</li>
                <li><i class="fa-solid fa-check-circle"></i> AI-suggested replies with multimedia context awareness</li>
              </ul>
              <a href="<?php echo esc_url(home_url('/')); ?>one-on-one-conversations/" class="learn-more btn-outline-primary-custom">Learn More</a>
            </div>
          </div>
        </div>

      </div><!-- /.af-right -->
    </div><!-- /.af-wrap -->
     <div class="af-more-label">MORE FEATURES</div>
        <div class="af-more-strip">
          <div class="af-more-strip-item">
            <div class="feature-icon"><i class="bi bi-translate"></i></div>
            <span><a href="<?php echo esc_url(home_url('/')); ?>multiple-language-support/" style="color:#555;text-decoration:none;">Language<br>Translation</a></span>
          </div>
          <div class="af-more-strip-item">
            <div class="feature-icon"><i class="bi bi-chat-square-text"></i></div>
            <span><a href="<?php echo esc_url(home_url('/')); ?>conversation-manager/" style="color:#555;text-decoration:none;">Conversation<br>Manager</a></span>
          </div>
          <div class="af-more-strip-item">
            <div class="feature-icon"><i class="bi bi-pin-angle"></i></div>
            <span><a href="<?php echo esc_url(home_url('/')); ?>sticky-sender/" style="color:#555;text-decoration:none;">Sticky<br>Sender</a></span>
          </div>
          <div class="af-more-strip-item">
            <div class="feature-icon"><i class="bi bi-palette"></i></div>
            <span><a href="<?php echo esc_url(home_url('/')); ?>link-tracking/" style="color:#555;text-decoration:none;">Color-coded<br>Incoming msgs</a></span>
          </div>
          <div class="af-more-strip-item">
            <div class="feature-icon"><i class="bi bi-robot"></i></div>
            <span><a href="<?php echo esc_url(home_url('/')); ?>one-on-one-conversations/" style="color:#555;text-decoration:none;">AI Conversation</a><br><small class="af-unique">Unique</small></span>
          </div>
        </div>
    <!-- Full-width See all features button -->
    <button class="see-all-btn mt-4"><a href="<?php echo esc_url(home_url('/')); ?>features/" style="color:#fff;">See all features</a></button>

  </div>
</section>
<!-- ===== SECTION 5: AI DARK ===== -->
<section id="ai-section">
  <div class="container" style="max-width:1200px">
    <!-- Eyebrow + heading + sub — all left aligned -->
    <div class="mb-4">
      <div class="ai-eyebrow"><i class="fa-solid fa-wand-magic-sparkles me-1"></i> AI - BUILT INTO EVERY WORKFLOW</div>
      <h2 class="ai-h2">AI that works where your team already works</h2>
      <p class="ai-sub">Every AI feature lives inside Salesforce - no extra tab, no third-party tool. Your team gets smarter replies, faster responses, and less manual work without changing how they work today.</p>
    </div>

    <!-- 3 AI cards -->
    <div class="row g-3">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="ai-card">
          <div class="feature-icon" style="margin-bottom:16px;">
            <i class="bi bi-robot"></i>
          </div>
          <h5 class="ai-card-title">AI MMS Conversation Analysis</h5>
          <p class="ai-card-desc">AI MMS Conversation Analysis analyzes conversations to detect sentiment, extract keywords, summarize interactions, identify key takeaways, and suggest follow-up actions.</p>
          <div class="ai-tags">
            <span class="ai-tag">Response scoring</span>
            <span class="ai-tag">Audience-tailored</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="ai-card">
          <div class="feature-icon" style="margin-bottom:16px;">
            <i class="bi bi-graph-up"></i>
          </div>
          <h5 class="ai-card-title">AI Campaign Analysis</h5>
          <p class="ai-card-desc">AI tracks campaign performance, identifies top-performing creatives, and recommends adjustments to improve response rates automatically.</p>
          <div class="ai-tags">
            <span class="ai-tag">Performance insights</span>
            <span class="ai-tag">Auto-recommendation</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="ai-card">
          <div class="feature-icon" style="margin-bottom:16px;">
            <i class="bi bi-chat-dots"></i>
          </div>
          <h5 class="ai-card-title">AI-Assisted 1:1 conversations</h5>
          <p class="ai-card-desc">AI supports the best replies during one-on-one SMS and MMS conversations, helping agents be more effective with meaningful interactions.</p>
          <div class="ai-tags">
            <span class="ai-tag">CRM data</span>
            <span class="ai-tag">Auto-personalization</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Stats row REMOVED from here — moved to white strip below -->
  </div>
</section>

<!-- Stats strip — white background, outside dark navy -->
<div class="ai-stats-strip">
  <div class="container" style="max-width:1200px">
    <div class="ai-stats-row">
      <div class="ai-stat-block">
        <div class="ai-stat-num">10x</div>
        <div class="ai-stat-lbl">More shared than<br>plain SMS</div>
      </div>
      <div class="ai-stat-block">
        <div class="ai-stat-num">6x</div>
        <div class="ai-stat-lbl">Faster processing<br>for short sentences</div>
      </div>
      <div class="ai-stat-block">
        <div class="ai-stat-num">600x</div>
        <div class="ai-stat-lbl">Faster processing<br>for full sentences</div>
      </div>
      <div class="ai-stat-block">
        <div class="ai-stat-num">300KB</div>
        <div class="ai-stat-lbl">File size<br>per message</div>
      </div>
    </div>
  </div>
</div>

<!-- CTA strip — blue bar, below white stats -->
<div class="ai-cta-strip">
  <div class="container" style="max-width:1200px">
    <div class="ai-cta-inner">
      <div class="ai-cta-text">
        <p class="ai-cta-main">Add MMS to Salesforce within minutes - no middleware, no developer</p>
        <p class="ai-cta-sub">Native AgentExchange install &nbsp;·&nbsp; No developer &nbsp;·&nbsp; No middleware &nbsp;·&nbsp; GDPR &amp; HIPAA compliant &nbsp;·&nbsp; 24/7 onboarding included</p>
      </div>
      <div class="ai-cta-btns">
        <a class="open-popup-form-on-click btn-white-solid">Start Free Trial</a>
        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&amp;utm_source=SEO&amp;utm_medium=website&amp;utm_campaign=navigation" target="_blank" class="btn-white-outline">Book a Demo</a>
      </div>
    </div>
  </div>
</div>

<!-- ===== SECTION 6: INTEGRATION ===== -->
<section id="integration">
  <div class="container" style="max-width:1200px">
    <div class="row align-items-start g-4">

      <!-- LEFT: heading + para + button -->
      <div class="col-lg-5">
        <h2 class="int-h2">Salesforce MMS integration is one of 15+ channels - all in one app.</h2>
        <p class="int-para">Same Salesforce SMS app, same inbox, same features. Add channels without starting from scratch.</p>
        <a href="<?php echo esc_url(home_url('/')); ?>channels/" class="btn-primary-solid d-inline-flex">Explore all channels</a>
      </div>

      <!-- RIGHT: channel chips + rest assured -->
      <div class="col-lg-7">
        <div class="int-chips-all">
          <!-- All chips in one flex-wrap container — they flow naturally into rows -->
          <span class="int-ch"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-sms/" style="color:#555;">● SMS</a></span>
          <span class="int-ch int-sms"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-mms/" style="color:#fff;">● MMS</a></span>
          <span class="int-ch"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-whatsapp/" style="color:#555;">WhatsApp</a></span>
          <span class="int-ch"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-facebook-messenger/" style="color:#555;">Facebook</a></span>
          <span class="int-ch"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-instagram/" style="color:#555;">Instagram</a></span>
          <span class="int-ch"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-computer-telephony-integration/" style="color:#555;">CTI</a></span>
          <span class="int-ch"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-ringless-voicemail/" style="color:#555;">Voicemail</a></span>
          <span class="int-ch"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-wechat/" style="color:#555;">WeChat</a></span>
          <span class="int-ch"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-viber/" style="color:#555;">Viber</a></span>
          <span class="int-ch"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-kakao/" style="color:#555;">KakaoTalk</a></span>
          <span class="int-ch"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-line/" style="color:#555;">LINE</a></span>
          <span class="int-ch"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-zalo/" style="color:#555;">Zalo</a></span>
          <span class="int-ch">LinkedIn</span>
          <span class="int-ch">Email</span>
          <span class="int-ch">Webchat</span>
        </div>
        <!-- Rest assured — directly below chips, no border, small italic -->
        <p class="int-note"><strong style="color:#0070d2">Rest assured</strong> - you'll get the same features across every channel. Switch channels without starting from scratch.</p>
      </div>

    </div>
  </div>
</section>

<!-Section 7-->
<section id="comparison">
  <div class="container" style="max-width:1200px">
    <!-- Header row -->
    <div class="cmp-header-row">
      <div>
        <h2>360 SMS App vs other Salesforce SMS apps</h2>
        <p style="color:var(--muted);font-size:14px;margin-top:6px">See exactly why 60k+ users choose 360 SMS over every other option on AgentExchange.</p>
      </div>
      <div class="cmp-award-badge">
        <img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/04/📦.png">
        <div>
          <div style="font-weight:700;font-size:12px">Most-reviewed SMS app</div>
          <div style="font-size:10.5px;color:#888">1,200+ verified AgentExchange reviews</div>
        </div>
      </div>
    </div>

    <!-- Table -->
    <div class="cmp-table-wrap">
      <table class="cmp-table">
        <thead>
          <tr>
            <th class="cmp-th-feat">ELEMENTS</th>
            <th class="cmp-th-us">
              <div class="cmp-us-label">
                <i class="fa-solid fa-trophy" style="color:#f4c430;font-size:11px"></i>
                360 SMS App
              </div>
              <div class="cmp-us-sub">SALESFORCE NATIVE · #1 RATED</div>
            </th>
            <th class="cmp-th-other" colspan="1">
              <div style="font-weight:700;font-size:13px;color:#555">Other SMS Apps</div>
              <div style="font-size:11px;color:#999">On AgentExchange</div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="cmp-feat">Support</td>
            <td class="cmp-us-cell"><span class="">Free</span></td>
            <td class="cmp-other-cell"><span class="">Paid</span></td>
          </tr>
          <tr class="cmp-alt">
            <td class="cmp-feat">Natively-built</td>
            <td class="cmp-us-cell"><span class="">Yes</span></td>
            <td class="cmp-other-cell"><span class="">No</span></td>
          </tr>
          <tr>
            <td class="cmp-feat">Salesforce Cloud Support</td>
            <td class="cmp-us-cell"><span class="">All Clouds</span></td>
            <td class="cmp-other-cell"><span class="">Limited to 1–2 clouds</span></td>
          </tr>
          <tr class="cmp-alt">
            <td class="cmp-feat">Channels</td>
            <td class="cmp-us-cell"><span class="">15 Channels</span></td>
            <td class="cmp-other-cell"><span class="">Limited to 3–4 channels</span></td>
          </tr>
          <tr>
            <td class="cmp-feat">Chatbot</td>
            <td class="cmp-us-cell"><span class="">No-code</span></td>
            <td class="cmp-other-cell"><span class="">Complex</span></td>
          </tr>
          <tr class="cmp-alt">
            <td class="cmp-feat">AI Capabilities</td>
            <td class="cmp-us-cell"><span class="">Yes</span></td>
            <td class="cmp-other-cell"><span class="">No</span></td>
          </tr>
          <tr>
            <td class="cmp-feat">Drip Campaigns</td>
            <td class="cmp-us-cell"><span class="">Multi-channel</span></td>
            <td class="cmp-other-cell"><span class="">Single channel</span></td>
          </tr>
          <tr class="cmp-alt">
            <td class="cmp-feat">Unified Messaging Console</td>
            <td class="cmp-us-cell"><span class="">Yes</span></td>
            <td class="cmp-other-cell"><span class="">No</span></td>
          </tr>
          <tr>
            <td class="cmp-feat">GDPR Compliant</td>
            <td class="cmp-us-cell"><span class="">Yes</span></td>
            <td class="cmp-other-cell"><span class="">No</span></td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- CTA row below table -->
    <div class="cmp-cta-row">
      <div class="cmp-cta-btns">
        <span style="margin-top:15px;">See how 360 SMS is better than other MMS apps</span>
        <a class="open-popup-form-on-click btn-primary-solid">Schedule a free demo</a>
        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" target="_blank" class="btn-outline-primary-custom">View on AgentExchange</a>
      </div>
    </div>
  </div>
</section>
        <!-- ═══ SECTION 11: INDUSTRIES ═══ -->
        <section class="sec py-5" style="background: #F7F7F5;">
            <div class="container py-4">
                <div class="mb-5">
                    <h2 class="fw-bold mb-3 fs-32 ls-n1 c-ink">Salesforce MMS integration by industry</h2>
                    <p class="text-muted mw-900 fs-17 lh-16">Industry-specific Salesforce MMS workflows, pre-built templates, and proven use cases - ready on day one.</p>
                </div>
                <div class="row g-3">
                    <?php
                    $site_url = home_url('/');
                    $industries = [
                        [$site_url . 'wp-content/uploads/2026/04/Vector-5.png', 'Retail', 'Product images, vouchers, mini-catalogs, and in-store maps', $site_url . 'marketing/'],
                        [$site_url . 'wp-content/uploads/2026/04/Vector-1-4.png', 'Hospitality & Food', 'Menus, promotional images, event flyers, and venue maps', $site_url . 'industries/'],
                        [$site_url . 'wp-content/uploads/2026/04/Vector-2-2.png', 'Education', 'Campus maps, event banners, and multimedia announcements', $site_url . 'education-academics/'],
                        [$site_url . 'wp-content/uploads/2026/04/Vector-3-2.png', 'Healthcare', 'Visual guides, appointment confirmations with maps', $site_url . 'healthcare-wellness/'],
                        [$site_url . 'wp-content/uploads/2026/04/Vector-4-2.png', 'Real Estate', 'Property photos, virtual tour links, and offer documents', $site_url . 'real-estate/'],
                        [$site_url . 'wp-content/uploads/2026/04/Vector-5-1.png', 'Recruitment', 'Job role visuals, offer letters, and onboarding packs', $site_url . 'recruitment/'],
                        [$site_url . 'wp-content/uploads/2026/04/Vector-6.png', 'Non-profit', 'Campaign imagery, donor impact stories, event flyers', $site_url . 'non-profit/'],
                        [$site_url . 'wp-content/uploads/2026/04/image-83-Traced.png', 'Travel & Hospitality', 'Destination photos, boarding passes, and itinerary PDFs', $site_url . 'industries/'],
                    ];	
                    foreach ($industries as $ind): ?>
                        <div class="col-lg-3 col-md-6">
                            <div class="ind-card p-4 h-100 border rounded-4 bg-white shadow-sm">
                                <div class="mb-2 fs-3">
                <img src="<?= esc_url($ind[0]); ?>" 
                     alt="<?= esc_attr($ind[1]); ?>" 
                     class="industry-icon">
            </div>
                                <h5 class="fw-bold mb-2 fs-19"><?= $ind[1] ?></h5>
                                <p class="small text-muted mb-2 lh-16"><?= $ind[2] ?></p>
                                <a href="<?= $ind[3] ?>" class="fw-bold text-decoration-none small ind-link">Explore</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="text-center mt-5">
                    <button class="btn btn-brand px-4 py-2 fw-bold rounded-2 fs-16"><a href="<?php echo esc_url(home_url('/')); ?>industries/">View all Industries</a></button>
                </div>
            </div>
        </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // How-it-works tab toggle
  document.querySelectorAll('.how-tab').forEach(tab => {
    tab.addEventListener('click', () => {
      document.querySelectorAll('.how-tab').forEach(t => t.classList.remove('active'));
      tab.classList.add('active');
    });
  });
</script>
<script>
document.addEventListener("DOMContentLoaded", function () {

  const tabs = document.querySelectorAll(".af-tab");
  const panels = document.querySelectorAll(".af-panel");

  tabs.forEach(tab => {
    tab.addEventListener("click", function () {

      // Remove active from all tabs
      tabs.forEach(t => t.classList.remove("active"));

      // Hide all panels
      panels.forEach(p => p.classList.remove("active"));

      // Activate clicked tab
      this.classList.add("active");

      // Show correct panel
      const target = this.getAttribute("data-target");
      const panel = document.getElementById(target);

      if (panel) {
        panel.classList.add("active");
      }
    });
  });

});
</script>
<?php
    get_footer('sms');
?>