<?php
/*
Template Name: Salesforce Channels
*/
    get_header('sms');
?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
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
    }
    @media (max-width: 767px) { section { padding: 48px 0; } }
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
    .btn-nav-pri{
        display: inline-flex;
        align-items: center;   /* vertical center */
        justify-content: center;
    
        padding: 10px 20px;
        line-height: 1;        /* 🔥 important */
    
        background: var(--brand);
        color: #fff;
        border-radius: 8px;
        font-weight: 700;
        font-size: 13px;
        text-decoration: none;
        cursor: pointer;
        transition: transform .2s;
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
    #breadcrumb-bar .breadcrumb { font-size: 12.5px; margin: 0; }
    #breadcrumb-bar .breadcrumb-item a { color: var(--muted); text-decoration: none; font-weight: 500; }
    #breadcrumb-bar .breadcrumb-item a:hover { color: var(--blue); }
    #breadcrumb-bar .breadcrumb-item.active { color: var(--blue); font-weight: 600; }
    #breadcrumb-bar .breadcrumb-item + .breadcrumb-item::before { color: #bbb; content: "›"; font-size: 14px; }

    /* ========== SECTION 1 — HERO ========== */
    #hero {
      padding: 64px 0 60px;
      background: linear-gradient(to right, #eff6ff, #f7f7f5);
    }
    #hero .hero-tag {
      display: inline-flex; align-items: center; gap: 6px;
      background: #f0f7ff; border: 1px solid #c9e1f8;
      border-radius: 20px; padding: 5px 14px;
      font-size: 12px; font-weight: 600; color: var(--blue); margin-bottom: 18px;
    }
    #hero h1 { font-size: clamp(28px, 4vw, 44px); font-weight: 800; line-height: 1.2; margin-bottom: 18px; color: var(--dark); }
    #hero .hero-sub { color: var(--muted); font-size: 15px; line-height: 1.7; margin-bottom: 28px; margin-left:0px !important; max-width: 480px; }
    #hero .hero-btns { display: flex; gap: 12px; flex-wrap: wrap; margin-bottom: 16px; }
    #hero .trust-text { font-size: 12.5px; color: var(--muted); }
    #hero .rating-row { display: flex; align-items: center; gap: 6px; margin-top: 14px; font-size: 13px; font-weight: 600; }
    #hero .stars { color: #f4c430; font-size: 13px; }
    #hero .hero-image-wrap { position: relative; display: flex; justify-content: center; }

    /* ========== STATS BAR ========== */
    #stats-bar {
      padding: 28px 0;
      border-top: 1px solid #e8edf2;
      border-bottom: 1px solid #e8edf2;
      background: #fff;
    }
    .stats-bar-inner {
      display: flex; align-items: center;
      justify-content: space-between; flex-wrap: nowrap; gap: 0;
    }
    .stat-item { text-align: center; flex: 1; padding: 6px 8px; position: relative; }
    .stat-item + .stat-item::before {
      content: ''; position: absolute; left: 0; top: 50%;
      transform: translateY(-50%); height: 34px; width: 1px; background: #e8edf2;
    }
    .stat-item .big-num { font-size: 24px; font-weight: 800; color: var(--dark); line-height: 1; letter-spacing: -0.5px; }
    .stat-item .stat-label { font-size: 11px; color: var(--muted); margin-top: 4px; line-height: 1.3; font-weight: 500; }
    @media (max-width: 767px) {
      .stats-bar-inner { flex-wrap: wrap; justify-content: center; }
      .stat-item { flex: 0 0 33.333%; max-width: 33.333%; padding: 12px 8px; border-bottom: 1px solid #e8edf2; }
      .stat-item + .stat-item::before { display: none; }
      .stat-item:nth-child(3), .stat-item:nth-child(6) { border-right: none; }
      .stat-item:nth-child(1), .stat-item:nth-child(2) { border-right: 1px solid #e8edf2; }
      .stat-item:nth-child(4), .stat-item:nth-child(5) { border-right: 1px solid #e8edf2; }
      .stat-item:nth-child(4), .stat-item:nth-child(5), .stat-item:nth-child(6) { border-bottom: none; }
      .stat-item .big-num { font-size: 22px; }
      .stat-item .stat-label { font-size: 10.5px; }
    }

    /* ========== SECTION 2 — HOW IT WORKS ========== */
    #how-it-works { background: #fff; }
    #how-it-works h2 { font-size: clamp(22px, 3vw, 32px); margin-bottom: 12px; }
    .how-tabs { display: flex; gap: 8px; flex-wrap: wrap; }
    .how-tab {
      padding: 7px 20px; border-radius: 20px; font-size: 12.5px; font-weight: 600;
      border: 1.5px solid #e0e0e0; background: #fff; color: var(--muted); cursor: pointer; transition: all .2s;
    }
    .how-tab.active { background: var(--blue); border-color: var(--blue); color: #fff; }
    .hiw-card { border: 1.5px solid #e8edf2; border-radius: 14px; padding: 28px; height: 100%; background: #fff; box-shadow: 0 2px 10px rgba(0,0,0,0.04); }
    .hiw-card-header { margin-bottom: 14px; }
    .hiw-badge { font-size: 11px; font-weight: 700; border-radius: 20px; padding: 4px 12px; letter-spacing: .3px; }
    .col-head { font-size: 16px; font-weight: 700; margin-bottom: 8px; color: var(--dark); }
    .feature-row { display: flex; gap: 12px; margin-bottom: 16px; align-items: flex-start; }
    .feature-icon { width: 32px; height: 32px; border-radius: 8px; background: #e8f1fb; color: var(--blue); display: flex; align-items: center; justify-content: center; font-size: 14px; flex-shrink: 0; margin-top: 2px; }
    .feature-icon.green { background: #e6f9ef; color: #27ae60; }
    .feature-icon.orange { background: #fff3e6; color: #e67e22; }
    .feature-title { font-size: 13.5px; font-weight: 700; margin-bottom: 3px; }
    .feature-desc { font-size: 13px; color: var(--muted); line-height: 1.55; }
    .section-divider { border: none; border-top: 1px solid #e8edf2; margin: 0; }

    /* ========== SECTION 3 — APP FEATURES ========== */
    #app-features { background: var(--light-bg); }
    #app-features h2 { font-size: clamp(20px, 2.8vw, 30px); margin-bottom: 8px; }
    .af-wrap { display: flex; background: #fff; border: 1.5px solid #e8edf2; border-radius: 14px; overflow: hidden; box-shadow: var(--shadow); }
    .af-left { width: 200px; flex-shrink: 0; border-right: 1.5px solid #e8edf2; background: #fafcff; display: flex; flex-direction: column; }
    .af-nav { display: flex; flex-direction: column; }
    .af-tab { display: flex; align-items: center; gap: 10px; padding: 11px 12px; border-left: 3px solid transparent; border-bottom: 1px solid #f0f2f5; cursor: pointer; transition: all .18s; }
    .af-tab:hover { background: #f0f7ff; border-left-color: #90c8f0; }
    .af-tab.active { background: #eef6ff; border-left-color: var(--blue); }
    .af-thumb-inner { width: 42px; height: 34px; border-radius: 7px; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(0,0,0,0.06); flex-shrink: 0; }
    .af-tab-text { flex: 1; min-width: 0; }
    .af-tab-title { font-size: 11px; font-weight: 700; color: #333; line-height: 1.3; }
    .af-tab.active .af-tab-title { color: var(--blue); }
    .af-tab-sub { font-size: 9.5px; color: var(--muted); margin-top: 1px; }
    .af-more-label { font-size: 10px; font-weight: 700; color: var(--muted); letter-spacing: .7px; padding: 12px 12px 6px; border-top: 1px solid #e8edf2; margin-top: auto; }
    .af-more-list { padding: 0 8px 10px; display: flex; flex-direction: column; gap: 3px; }
    .af-more-item { display: flex; align-items: center; gap: 7px; padding: 5px 7px; border-radius: 7px; background: #fff; border: 1px solid #edf2f8; font-size: 10.5px; font-weight: 600; color: #444; cursor: pointer; transition: background .15s; }
    .af-more-item:hover { background: #f0f7ff; }
    .af-more-icon { font-size: 13px; width: 24px; height: 24px; background: #f4f6f8; border-radius: 5px; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
    .af-unique { background: #e8f1fb; color: var(--blue); font-size: 8.5px; font-weight: 700; padding: 1px 5px; border-radius: 8px; margin-left: 3px; }
    .af-right { flex: 1; min-width: 0; display: flex; flex-direction: column; }
    .af-panel { display: none; }
    .af-panel.active { display: block; }
    .af-panel-inner { display: flex; }
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
    .af-more-strip { display: flex; align-items: flex-start; justify-content: space-around; padding: 16px 20px; gap: 6px; flex-wrap: wrap; }
    .af-ms-icon { width: 44px; height: 44px; background: #fff; border: 1px solid #e8edf2; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 18px; box-shadow: 0 1px 5px rgba(0,0,0,0.05); }
    .af-more-strip-item span { font-size: 10px; font-weight: 600; color: #555; line-height: 1.3; }
    .see-all-btn { background: var(--blue); color: #fff; border: none; border-radius: 8px; padding: 15px 0; font-size: 14px; font-weight: 700; width: 100%; cursor: pointer; transition: background .2s; letter-spacing: .2px; }
    .see-all-btn:hover { background: var(--blue-dark); }
    @media (max-width: 767px) {
      .af-wrap { flex-direction: column; }
      .af-left { width: 100%; border-right: none; border-bottom: 1.5px solid #e8edf2; max-height: 260px; overflow-y: auto; }
      .af-more-label, .af-more-list { display: none; }
      .af-panel-inner { flex-direction: column; }
      .af-text-col { padding: 16px; }
      .af-more-strip { display: none; }
    }

    /* ========== SECTION 5 — AI DARK ========== */
    #ai-section { background: #00346F; color: #fff; padding: 64px 0 0; }
    .ai-eyebrow { display: inline-flex; align-items: center; gap: 6px; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.14); color: rgba(255,255,255,0.6); font-size: 10.5px; font-weight: 700; letter-spacing: 1.2px; text-transform: uppercase; padding: 5px 14px; border-radius: 20px; margin-bottom: 18px; }
    .ai-h2 { color: #fff; font-size: clamp(26px, 3vw, 40px); font-weight: 800; line-height: 1.2; margin-bottom: 14px; }
    .ai-sub { color: rgba(255,255,255,0.55); font-size: 14.5px; line-height: 1.7; max-width: 640px; margin-bottom: 40px; }
    .ai-card { background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.09); border-radius: 14px; padding: 24px; height: 100%; transition: background .2s, transform .2s; }
    .ai-card:hover { background: rgba(255,255,255,0.08); transform: translateY(-3px); }
    .ai-card-icon { width: 44px; height: 44px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px; margin-bottom: 16px; color: #fff; }
    .ai-icon-green { background: rgba(39,174,96,0.22); color: #4cd98a; }
    .ai-icon-blue  { background: rgba(52,152,219,0.22); color: #6ab8f7; }
    .ai-icon-red   { background: rgba(231,76,60,0.22);  color: #f08080; }
    .ai-card-title { color: #fff; font-size: 15px; font-weight: 700; margin-bottom: 10px; }
    .ai-card-desc  { color: rgba(255,255,255,0.55); font-size: 13px; line-height: 1.65; margin-bottom: 14px; }
    .ai-tags { display: flex; gap: 6px; flex-wrap: wrap; }
    .ai-tag { font-size: 10.5px; font-weight: 600; background: rgba(255,255,255,0.08); border: 1px solid rgba(255,255,255,0.1); color: rgba(255,255,255,0.6); padding: 3px 10px; border-radius: 20px; }
    .ai-stats-strip { background: #fff; border-top: 1px solid #e8edf2; border-bottom: 1px solid #e8edf2; padding: 36px 0; }
    .ai-stats-row { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 20px; }
    .ai-stat-block { flex: 1; min-width: 100px; text-align: center; }
    .ai-stat-num   { font-size: 40px; font-weight: 800; color: var(--blue); line-height: 1; }
    .ai-stat-lbl   { font-size: 12px; color: var(--muted); margin-top: 6px; line-height: 1.4; }
    .ai-cta-strip { background: #0a56a0; padding: 22px 0; margin-top: 0; }
    .ai-cta-inner { display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 16px; }
    .ai-cta-main { color: #fff; font-size: 26px; font-weight: 700; margin: 0; line-height: 1.4; }
    h2.fw-bold.mb-2.cta-bar-h{
        font-size:26px !important;
    }
    .ai-cta-sub { color: rgba(255,255,255,0.55); font-size: 11.5px; margin: 3px 0 0; font-weight: 400; }
    .ai-cta-btns { display: flex; gap: 10px; flex-wrap: wrap; align-items: center; flex-shrink: 0; }
    .btn-white-solid { background: #fff; color: var(--blue); border: 2px solid #fff; border-radius: 8px; padding: 9px 22px; font-weight: 700; font-size: 13.5px; text-decoration: none; transition: all .2s; white-space: nowrap; display: inline-flex; align-items: center; }
    .btn-white-solid:hover { background: #e8f1fb; color: var(--blue-dark); }
    .btn-white-outline { background: transparent; color: #fff; border: 2px solid rgba(255,255,255,0.5); border-radius: 8px; padding: 9px 22px; font-weight: 700; font-size: 13.5px; text-decoration: none; transition: all .2s; white-space: nowrap; display: inline-flex; align-items: center; }
    .btn-white-outline:hover { background: rgba(255,255,255,0.12); border-color: #fff; }

    /* ========== SECTION 6 — INTEGRATION ========== */
    #integration { background: #f7f7f5; padding: 80px 0; }
    .int-h2 { font-size: clamp(22px, 2.6vw, 32px); font-weight: 800; line-height: 1.2; margin-bottom: 14px; color: var(--dark); }
    .int-para { color: var(--muted); font-size: 14px; line-height: 1.7; margin-bottom: 24px; }
    .int-chips-all { display: flex; flex-wrap: wrap; gap: 7px; margin-bottom: 12px; justify-content: flex-start; align-items: flex-start; }
    .int-ch { display: inline-flex; align-items: center; background: #f4f6f8; border: 1.5px solid #e0e8f0; border-radius: 20px; padding: 4px 12px; font-size: 12px; font-weight: 600; color: #555; white-space: nowrap; }
    .int-sms { background: #0070d2; color: #fff; border-color: #0070d2; }
    .int-mms { background: #e74c3c; color: #fff; border-color: #e74c3c; }
    .int-wa  { background: #25d366; color: #fff; border-color: #25d366; }
    .int-note { font-size: 12px; color: var(--muted); line-height: 1.65; margin: 4px 0 0; padding: 8px 14px; border: none; background: #f0f7ff; border-radius: 8px; display: block; }
    .int-note strong { color: #333; }
    @media (max-width: 767px) { #integration { padding: 48px 0; } .int-h2 { font-size: 22px; } .int-chips-all { gap: 6px; } .int-ch { font-size: 11.5px; padding: 4px 10px; } }

    /* ========== SECTION 7 — COMPARISON TABLE ========== */
    #comparison { background: #fff; }
    .cmp-header-row { display: flex; align-items: flex-start; justify-content: space-between; gap: 20px; flex-wrap: wrap; margin-bottom: 28px; }
    .cmp-award-badge { display: flex; align-items: center; gap: 10px; background: #E8F0FB; border: 1px solid #CCE0F7; border-radius: 10px; padding: 10px 16px; flex-shrink: 0; }
    .cmp-table-wrap { overflow-x: auto; border-radius: 12px; border: 1.5px solid #e8edf2; }
    .cmp-table { width: 100%; border-collapse: collapse; font-size: 13.5px; min-width: 520px; }
    .cmp-table th, .cmp-table td { padding: 14px 20px; }
    .cmp-th-feat { background: #f8f9fa; color: #999; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: .5px; width: 34%; border-right: 1px solid #e8edf2; border-bottom: 2px solid #e8edf2; }
    .cmp-th-us { background: var(--blue); border-bottom: 2px solid var(--blue-dark); width: 33%; text-align: center; border-right: 1px solid rgba(255,255,255,0.2); }
    .cmp-us-label { display: flex; align-items: center; justify-content: center; gap: 6px; color: #fff; font-size: 14px; font-weight: 800; }
    .cmp-us-sub { color: rgba(255,255,255,0.7); font-size: 10px; font-weight: 600; letter-spacing: .5px; margin-top: 3px; text-align: center; }
    .cmp-th-other { background: #f8f9fa; width: 33%; text-align: center; border-bottom: 2px solid #e8edf2; }
    .cmp-feat { font-weight: 600; color: #333; font-size: 13.5px; border-right: 1px solid #e8edf2; }
    .cmp-us-cell { text-align: center; background: #f0f7ff; border-right: 1px solid #dce8f5; }
    .cmp-other-cell { text-align: center; }
    .cmp-alt td { background: #fafafa; }
    .cmp-alt .cmp-us-cell { background: #e8f1fb; }
    .cmp-table tbody tr:hover td { background: #f5f8ff !important; }
    .cmp-green { display: inline-flex; align-items: center; gap: 5px; background: #e6f9ef; color: #1a7c45; padding: 4px 12px; border-radius: 20px; font-size: 12.5px; font-weight: 700; }
    .cmp-red { display: inline-flex; align-items: center; gap: 5px; background: #fde8e8; color: #c0392b; padding: 4px 12px; border-radius: 20px; font-size: 12.5px; font-weight: 600; }
    .cmp-blue { display: inline-flex; align-items: center; background: #e8f1fb; color: var(--blue); padding: 4px 12px; border-radius: 20px; font-size: 12.5px; font-weight: 700; }
    .cmp-cta-row { display: flex; align-items: center; justify-content: center; flex-direction: column; gap: 14px; margin-top: 28px; text-align: center; }
    .cmp-cta-row p { color: var(--muted); font-size: 13.5px; margin: 0; }
    .cmp-cta-btns { display: flex; gap: 12px; flex-wrap: wrap; justify-content: center; }

    /* ========== SECTION 13 — CONTACT ========== */
    #contact { background: #eef4ff; }
    .contact-checks { list-style: none; padding: 0; margin: 20px 0; }
    .contact-checks li { display: flex; align-items: flex-start; gap: 10px; font-size: 15px; margin-bottom: 12px; line-height: 1.5; }
    .contact-checks li i { color: var(--blue); font-size: 16px; margin-top: 2px; }
    .form-card { background: #fff; border-radius: 14px; padding: 32px; box-shadow: 0 4px 20px rgba(0,112,210,0.08); }
    .form-card .form-control, .form-card .form-select { border: 1.5px solid #e0e8f0; border-radius: 8px; padding: 11px 14px; font-size: 14px; color: var(--dark); background: #fafcff; transition: border-color .2s; }
    .form-card .form-control:focus, .form-card .form-select:focus { border-color: var(--blue); box-shadow: 0 0 0 3px rgba(0,112,210,0.1); }
    .form-card label { font-size: 13px; font-weight: 600; color: #444; margin-bottom: 5px; }
    .submit-btn { background: var(--blue); color: #fff; border: none; border-radius: 8px; padding: 13px; font-size: 15px; font-weight: 700; width: 100%; cursor: pointer; transition: background .2s; }
    .submit-btn:hover { background: var(--blue-dark); }

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
    }
    /* make every card a column flex container */
    .hiw-card{
      display:flex;
      flex-direction:column;
    }
    
    /* let the text/list block take the free space */
    .hiw-card ul{
      margin-bottom:14px !important;
    }
    
    /* push the button to the bottom of the card */
    .hiw-card .learn-more{
      margin-top:auto;
      align-self:flex-start;
    }
  </style>

<!-- ===== BREADCRUMB ===== -->
<div id="breadcrumb-bar">
  <div class="container" style="max-width:1200px">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li class="breadcrumb-item">Channels</li>
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
          15 Channels · Salesforce-Native · One Inbox
        </div>
        <h1>Every channel your customers use - <span style="color:var(--blue)">inside Salesforce</span></h1>
        <p class="hero-sub">SMS, WhatsApp, Instagram, CTI, WeChat, Viber, LINE, and 8 more - all managed from a single unified inbox natively inside your CRM. Zero middleware. Zero external tools.</p>
        <div class="hero-btns">
          <a class="btn-nav-pri" target="_blank" href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation">Book a Demo</a>
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
          <img class="img-fluid" src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/09/Channel.png" alt="Salesforce Channels">
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
        <div class="big-num">1,200+</div>
        <div class="stat-label">5-star reviews<br>AgentExchange</div>
      </div>
      <div class="stat-item">
        <div class="big-num">98%</div>
        <div class="stat-label">SMS<br>open rate</div>
      </div>
      <div class="stat-item">
        <div class="big-num">90s</div>
        <div class="stat-label">Avg.<br>Response time</div>
      </div>
      <div class="stat-item">
        <div class="big-num">AI</div>
        <div class="stat-label">AI agent<br>powered</div>
      </div>
      <div class="stat-item">
        <div class="big-num">60k+</div>
        <div class="stat-label">Users<br>worldwide</div>
      </div>
      <div class="stat-item">
        <div class="big-num">24/7</div>
        <div class="stat-label">Free<br>support</div>
      </div>
    </div>
  </div>
</div>

<!-- ===== SECTION 2: HOW IT WORKS ===== -->
<section id="how-it-works">
  <div class="container" style="max-width:1200px">
    <div class="row justify-content-center mb-4">
      <div class="col-lg-12">
        <h2 style="
            font-weight: 700;
            font-style: Bold;
            font-size: 10px;
            leading-trim: NONE;
            line-height: 15px;
            letter-spacing: 1px;
            text-align: center;
            vertical-align: middle;
            text-transform: uppercase;
            ">Why teams choose 360 SMS</h2>
        <p style="
            font-weight: 700;
            font-style: Bold;
            font-size: 27.5px;
            leading-trim: NONE;
            line-height: 42px;
            letter-spacing: -0.5px;
            text-align: center;
            vertical-align: middle;
            ">All conversations. Fully connected.<br> Inside your CRM.<br></p>
            <p style="font-family: Plus Jakarta Sans;
                font-weight: 400;
                font-style: Regular;
                font-size: 14.4px;
                leading-trim: NONE;
                line-height: 25.5px;
                letter-spacing: 0%;
                text-align: center;
                vertical-align: middle;
                ">Manage all your Salesforce SMS, WhatsApp, Instagram, and other channels in one unified inbox - right inside Salesforce. Every message stays synced and auto-logged.</p>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card text-center" style="padding:28px 20px">
          <div class="feature-icon mx-auto mb-3" style="width:48px;height:48px;border-radius:14px;background:#e8f1fb;display:flex;align-items:center;justify-content:center;font-size:20px;
          
          color:var(--blue)"><i class="bi bi-shield-check"></i></div>
          
          <p class="col-head">100% Salesforce-Native</p>
          <p style="color:var(--muted);font-size:13px;line-height:1.6">No middleware, no webhooks, no external tools. Every message, reply, and opt-out lives inside your Salesforce CRM automatically.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card text-center" style="padding:28px 20px">
          <div class="feature-icon mx-auto mb-3" style="width:48px;height:48px;border-radius:14px;background:#e8f1fb;display:flex;align-items:center;justify-content:center;font-size:20px;
          color:var(--blue)"><i class="bi bi-inbox"></i></div>
          <p class="col-head">One Inbox for All Channels</p>
          <p style="color:var(--muted);font-size:13px;line-height:1.6">SMS, WhatsApp, Instagram, CTI, WeChat, and 10 more channels - all in a single unified inbox. No tab switching. No external logins.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card text-center" style="padding:28px 20px">
          <div class="feature-icon mx-auto mb-3" style="width:48px;height:48px;border-radius:14px;background:#e8f1fb;display:flex;align-items:center;justify-content:center;font-size:20px;
          color:var(--blue)"><i class="bi bi-robot"></i></div>
          <p class="col-head">AI Agents Across Every Channel</p>
          <p style="color:var(--muted);font-size:13px;line-height:1.6">Chatbots, voice agents, and translation AI work seamlessly across every channel - qualifying leads and resolving cases 24/7.</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card text-center" style="padding:28px 20px">
          <div class="feature-icon mx-auto mb-3" style="width:48px;height:48px;border-radius:14px;background:#e8f1fb;display:flex;align-items:center;justify-content:center;font-size:20px;
          color:var(--blue)"><i class="bi bi-gear"></i></div>
          <p class="col-head">No-code Automation</p>
          <p style="color:var(--muted);font-size:13px;line-height:1.6">Trigger messages on any channel from Salesforce Flows based on scenarios, or schedule messages without coding - no developer required.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<hr class="section-divider" />

<!-- ===== SECTION 3: APP FEATURES ===== -->
<section id="app-features">
  <div class="container" style="max-width:1200px">
    <div class="mb-5">
      <h2>15 channels. All natively inside Salesforce. </h2>
      <p style="color:var(--muted);font-size:14px;max-width:700px;margin-top:6px">Reach your customers on every channel they prefer- without leaving Salesforce. Every channel below is managed from one inbox, with full automation, opt-out management, and CRM logging built in.</p>
    </div>

    <div class="row g-4">

      <!-- SMS -->
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card" style="height:100%">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px">
            <i class="bi bi-chat-dots-fill" style="color:#0057b8;"></i>
            <div>
              <div style="font-weight:700;font-size:14px;color:var(--dark)">Salesforce SMS</div>
              <!--<span style="font-size:10px;font-weight:700;background:#fff3cd;color:#b45309;border-radius:20px;padding:2px 8px">🔥 Most Used</span>-->
            </div>
          </div>
          <p style="color:var(--muted);font-size:12.5px;line-height:1.6;margin-bottom:12px">Two-way texting, bulk campaigns, AI-powered texting, drip sequences - all auto-logged to your CRM records. 98% open rate.</p>
          <ul style="list-style:none;padding:0;margin:0 0 14px;font-size:12px;color:#555">
            <li><span style="color: #0057B8;">✓</span> 1-on-1 &amp; bulk messaging</li>
            <li><span style="color: #0057B8;">✓</span> Salesforce no-code automation</li>
            <li><span style="color: #0057B8;">✓</span> AI Drip campaigns &amp; surveys</li>
          </ul>
          <a href="<?php echo site_url(); ?>/salesforce-sms/" class="learn-more btn-outline-primary-custom">Explore SMS </a>
        </div>
      </div>

      <!-- WhatsApp -->
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card" style="height:100%">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px">
            <i class="bi bi-whatsapp" style="color:#0057b8;"></i>
            <div style="font-weight:700;font-size:14px;color:var(--dark)">WhatsApp Business</div>
          </div>
          <p style="color:var(--muted);font-size:12.5px;line-height:1.6;margin-bottom:12px">WhatsApp Business API - templates, rich media, 2-way conversations natively inside Salesforce.</p>
          <ul style="list-style:none;padding:0;margin:0 0 14px;font-size:12px;color:#555">
            <li><span style="color: #0057B8;">✓</span> Verified Business Account</li>
            <li><span style="color: #0057B8;">✓</span> Templates &amp; rich media</li>
            <li><span style="color: #0057B8;">✓</span> AI-driven 2-way messaging</li>
          </ul>
          <a href="<?php echo site_url(); ?>/salesforce-whatsapp/" class="learn-more btn-outline-primary-custom">Explore WhatsApp </a>
        </div>
      </div>

      <!-- CTI -->
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card" style="height:100%">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px">
            <i class="bi bi-telephone-fill" style="color:#0057b8;"></i>
            <div style="font-weight:700;font-size:14px;color:var(--dark)">CTI Telephony</div>
          </div>
          <p style="color:var(--muted);font-size:12.5px;line-height:1.6;margin-bottom:12px">Click-to-dial, call logging, and SMS during live calls - deep native CTI integration inside Salesforce.</p>
          <ul style="list-style:none;padding:0;margin:0 0 14px;font-size:12px;color:#555">
            <li><span style="color: #0057B8;">✓</span> Click-to-dial from any record</li>
            <li><span style="color: #0057B8;">✓</span> SMS during live call</li>
            <li><span style="color: #0057B8;">✓</span> Auto call logging to CRM</li>
          </ul>
          <a href="<?php echo site_url(); ?>/salesforce-computer-telephony-integration/" class="learn-more btn-outline-primary-custom">Explore CTI </a>
        </div>
      </div>

      <!-- Webchat -->
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card" style="height:100%">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px">
            <i class="bi bi-chat-square-dots-fill" style="color:#0057b8;"></i>
            <div style="font-weight:700;font-size:14px;color:var(--dark)">Webchat</div>
          </div>
          <p style="color:var(--muted);font-size:12.5px;line-height:1.6;margin-bottom:12px">Embed a live chat widget on your website - conversations flow into Salesforce and are auto-matched to CRM records.</p>
          <ul style="list-style:none;padding:0;margin:0 0 14px;font-size:12px;color:#555">
            <li><span style="color: #0057B8;">✓</span> Embeddable chat widget</li>
            <li><span style="color: #0057B8;">✓</span> Auto-matched to CRM</li>
            <li><span style="color: #0057B8;">✓</span> AI-driven responses</li>
          </ul>
          <a class="open-popup-form-on-click learn-more btn-outline-primary-custom">Explore Webchat </a>
        </div>
      </div>

      <!-- Ringless Voicemail -->
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card" style="height:100%">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px">
            <i class="bi bi-voicemail" style="color:#0057b8;"></i>
            <div style="font-weight:700;font-size:14px;color:var(--dark)">Ringless Voicemail</div>
          </div>
          <p style="color:var(--muted);font-size:12.5px;line-height:1.6;margin-bottom:12px">Drop voicemails without ringing. Flow-triggered bulk drops at scale - zero interruption for recipients.</p>
          <ul style="list-style:none;padding:0;margin:0 0 14px;font-size:12px;color:#555">
            <li><span style="color: #0057B8;">✓</span> No phone ring on delivery</li>
            <li><span style="color: #0057B8;">✓</span> Flow-triggered bulk drops</li>
            <li><span style="color: #0057B8;">✓</span> Personalized voice messages</li>
          </ul>
          <a href="<?php echo site_url(); ?>/salesforce-ringless-voicemail/" class="learn-more btn-outline-primary-custom">Explore Voicemail </a>
        </div>
      </div>

      <!-- Facebook Messenger -->
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card" style="height:100%">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px">
            <i class="bi bi-messenger" style="color:#0057b8;"></i>
            <div style="font-weight:700;font-size:14px;color:var(--dark)">Facebook Messenger</div>
          </div>
          <p style="color:var(--muted);font-size:12.5px;line-height:1.6;margin-bottom:12px">Reply to Facebook Page messages from Salesforce. Auto-match inbound messages to CRM contact records.</p>
          <ul style="list-style:none;padding:0;margin:0 0 14px;font-size:12px;color:#555">
            <li><span style="color: #0057B8;">✓</span> Page message management</li>
            <li><span style="color: #0057B8;">✓</span> Auto-match to CRM contacts</li>
            <li><span style="color: #0057B8;">✓</span> Chatbot &amp; auto-response</li>
          </ul>
          <a href="<?php echo site_url(); ?>/salesforce-facebook-messenger/" class="learn-more btn-outline-primary-custom">Explore Messenger </a>
        </div>
      </div>

      <!-- Instagram -->
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card" style="height:100%">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px">
            <i class="bi bi-instagram" style="color:#0057b8;"></i>
            <div style="font-weight:700;font-size:14px;color:var(--dark)">Instagram Messaging</div>
          </div>
          <p style="color:var(--muted);font-size:12.5px;line-height:1.6;margin-bottom:12px">Manage Instagram DMs and story replies from Salesforce records. Every reply is auto logged to the CRM.</p>
          <ul style="list-style:none;padding:0;margin:0 0 14px;font-size:12px;color:#555">
            <li><span style="color: #0057B8;">✓</span> DMs &amp; story replies</li>
            <li><span style="color: #0057B8;">✓</span> Auto logged to Salesforce</li>
            <li><span style="color: #0057B8;">✓</span> 2-way conversations</li>
          </ul>
          <a href="<?php echo site_url(); ?>/salesforce-instagram/" class="learn-more btn-outline-primary-custom">Explore Instagram </a>
        </div>
      </div>

      <!-- WeChat -->
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card" style="height:100%">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px">
            <i class="bi bi-wechat" style="color:#0057b8;"></i>
            <div style="font-weight:700;font-size:14px;color:var(--dark)">WeChat</div>
          </div>
          <p style="color:var(--muted);font-size:12.5px;line-height:1.6;margin-bottom:12px">Official WeChat Business Account - reach 1.4B+ APAC customers from Salesforce without any external tools.</p>
          <ul style="list-style:none;padding:0;margin:0 0 14px;font-size:12px;color:#555">
            <li><span style="color: #0057B8;">✓</span> Official Business Account</li>
            <li><span style="color: #0057B8;">✓</span> 1.4B+ active users</li>
            <li><span style="color: #0057B8;">✓</span> Rich media messages</li>
          </ul>
          <a href="<?php echo site_url(); ?>/salesforce-wechat/" class="learn-more btn-outline-primary-custom">Explore WeChat </a>
        </div>
      </div>

      <!-- Viber -->
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card" style="height:100%">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px">
            <i class="bi bi-chat-fill" style="color:#0057b8;"></i>
            <div style="font-weight:700;font-size:14px;color:var(--dark)">Viber</div>
          </div>
          <p style="color:var(--muted);font-size:12.5px;line-height:1.6;margin-bottom:12px">Business messages for Eastern Europe, MENA &amp; Southeast Asia - reach 1B+ users on Viber directly from Salesforce.</p>
          <ul style="list-style:none;padding:0;margin:0 0 14px;font-size:12px;color:#555">
            <li><span style="color: #0057B8;">✓</span> 1B+ global users</li>
            <li><span style="color: #0057B8;">✓</span> Rich messages &amp; buttons</li>
            <li><span style="color: #0057B8;">✓</span> Transactional &amp; promo</li>
          </ul>
          <a href="<?php echo site_url(); ?>/salesforce-viber/" class="learn-more btn-outline-primary-custom">Explore Viber </a>
        </div>
      </div>

      <!-- LINE -->
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card" style="height:100%">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px">
            <i class="bi bi-line" style="color:#0057b8;"></i>
            <div style="font-weight:700;font-size:14px;color:var(--dark)">LINE</div>
          </div>
          <p style="color:var(--muted);font-size:12.5px;line-height:1.6;margin-bottom:12px">LINE Official Account for Japan, Thailand, Taiwan &amp; Indonesia - reach 180M+ monthly active users directly from Salesforce.</p>
          <ul style="list-style:none;padding:0;margin:0 0 14px;font-size:12px;color:#555">
            <li><span style="color: #0057B8;">✓</span> Official Account support</li>
            <li><span style="color: #0057B8;">✓</span> Japan &amp; SE Asia markets</li>
            <li><span style="color: #0057B8;">✓</span> Rich cards &amp; carousels</li>
          </ul>
          <a href="<?php echo site_url(); ?>/salesforce-line/" class="learn-more btn-outline-primary-custom">Explore LINE </a>
        </div>
      </div>

      <!-- KakaoTalk -->
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card" style="height:100%">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px">
            <i class="bi bi-chat-left-text-fill" style="color:#0057b8;"></i>
            <div style="font-weight:700;font-size:14px;color:var(--dark)">KakaoTalk</div>
          </div>
          <p style="color:var(--muted);font-size:12.5px;line-height:1.6;margin-bottom:12px">KakaoTalk automated, bulk, and 2-way messaging for Korean customers - reach 47M+ monthly active users directly from Salesforce.</p>
          <ul style="list-style:none;padding:0;margin:0 0 14px;font-size:12px;color:#555">
            <li><span style="color: #0057B8;">✓</span> 47M+ Active Users in Korea</li>
            <li><span style="color: #0057B8;">✓</span> Two-Way Conversations</li>
            <li><span style="color: #0057B8;">✓</span> Instant notifications</li>
          </ul>
          <a href="<?php echo site_url(); ?>/salesforce-kakao/" class="learn-more btn-outline-primary-custom">Explore KakaoTalk </a>
        </div>
      </div>

      <!-- Zalo -->
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card" style="height:100%">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px">
            <i class="bi bi-chat-square-text-fill" style="color:#0057b8;"></i>
            <div style="font-weight:700;font-size:14px;color:var(--dark)">Zalo</div>
          </div>
          <p style="color:var(--muted);font-size:12.5px;line-height:1.6;margin-bottom:12px">Reach 70M+ monthly active users in Vietnam via Zalo Official Account, managed from Salesforce with full automation support.</p>
          <ul style="list-style:none;padding:0;margin:0 0 14px;font-size:12px;color:#555">
            <li><span style="color: #0057B8;">✓</span> 70M+ Vietnam users</li>
            <li><span style="color: #0057B8;">✓</span> Official Account</li>
            <li><span style="color: #0057B8;">✓</span> Automated notifications</li>
          </ul>
          <a href="<?php echo site_url(); ?>/salesforce-zalo/" class="learn-more btn-outline-primary-custom">Explore Zalo </a>
        </div>
      </div>

      <!-- MMS -->
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card" style="height:100%">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px">
            <i class="bi bi-envelope-paper-fill" style="color:#0057b8;"></i>
            <div style="font-weight:700;font-size:14px;color:var(--dark)">MMS Messaging</div>
          </div>
          <p style="color:var(--muted);font-size:12.5px;line-height:1.6;margin-bottom:12px">Send images, PDFs, videos, and voice notes from any Salesforce record. Richer messages, higher engagement.</p>
          <ul style="list-style:none;padding:0;margin:0 0 14px;font-size:12px;color:#555">
            <li><span style="color: #0057B8;">✓</span> Images, PDFs &amp; video</li>
            <li><span style="color: #0057B8;">✓</span> Voice note delivery</li>
            <li><span style="color: #0057B8;">✓</span> Bulk MMS campaigns</li>
          </ul>
          <a href="<?php echo site_url(); ?>/salesforce-mms/" class="learn-more btn-outline-primary-custom">Explore MMS </a>
        </div>
      </div>

      <!-- LinkedIn -->
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card" style="height:100%">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px">
            <i class="bi bi-linkedin" style="color:#0057b8;"></i>
            <div style="font-weight:700;font-size:14px;color:var(--dark)">LinkedIn Messaging</div>
          </div>
          <p style="color:var(--muted);font-size:12.5px;line-height:1.6;margin-bottom:12px">Send LinkedIn messages to leads and prospects directly from Salesforce, auto logged to contact records.</p>
          <ul style="list-style:none;padding:0;margin:0 0 14px;font-size:12px;color:#555">
            <li><span style="color: #0057B8;">✓</span> Send from Salesforce records</li>
            <li><span style="color: #0057B8;">✓</span> Auto-logged to CRM</li>
            <li><span style="color: #0057B8;">✓</span> Lead &amp; contact outreach</li>
          </ul>
          <a class="open-popup-form-on-click learn-more btn-outline-primary-custom">Explore LinkedIn </a>
        </div>
      </div>

      <!-- Email -->
      <div class="col-lg-3 col-md-6">
        <div class="hiw-card" style="height:100%">
          <div style="display:flex;align-items:center;gap:10px;margin-bottom:12px">
            <i class="bi bi-envelope-fill" style="color:#0057b8;"></i>
            <div style="font-weight:700;font-size:14px;color:var(--dark)">Native Email</div>
          </div>
          <p style="color:var(--muted);font-size:12.5px;line-height:1.6;margin-bottom:12px">Native Salesforce email - unified alongside SMS and all other channels in the same inbox for true omnichannel management.</p>
          <ul style="list-style:none;padding:0;margin:0 0 14px;font-size:12px;color:#555">
            <li><span style="color: #0057B8;">✓</span> Unified with the SMS inbox</li>
            <li><span style="color: #0057B8;">✓</span> Salesforce-native sending</li>
            <li><span style="color: #0057B8;">✓</span> Auto-logged to records</li>
          </ul>
          <a class="open-popup-form-on-click learn-more btn-outline-primary-custom">Explore Email </a>
        </div>
      </div>
      <div class="cmp-cta-row">
        <div class="cmp-cta-btns">
            <a href="<?php echo site_url(); ?>/features/" class="btn-primary-solid">View all Features </a>
        </div>
    </div>
    </div><!-- /row -->
  </div>
</section>

<!-- CTA strip -->
<div class="ai-cta-strip">
  <div class="container" style="max-width:1200px">
    <div class="ai-cta-inner">
      <div class="ai-cta-text">
        <p class="ai-cta-main">Connect every channel. One inbox. Zero middleware.</p>
        <p class="ai-cta-sub">Installs from AgentExchange in 60 seconds · No code · No developer required</p>
      </div>
      <div class="ai-cta-btns">
        <a class="open-popup-form-on-click btn-white-solid">Start Free Trial</a>
        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" class="btn-white-outline" target="_blank">Book a Demo</a>
      </div>
    </div>
  </div>
</div>

<!-- ===== SECTION 7: COMPARISON TABLE ===== -->
<section id="comparison">
  <div class="container" style="max-width:1200px">
    <div class="cmp-header-row">
      <div>
        <h2>360 SMS vs other Salesforce SMS apps</h2>
        <p style="color:var(--muted);font-size:14px;margin-top:6px">See how 360 SMS stands out with advanced Salesforce SMS capabilities, built to scale without limitations.</p>
      </div>
      <div class="cmp-award-badge" style="margin-top:40px;">
        <img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/04/📦.png" alt="">
        <div>
          <div style="font-weight:700;font-size:12px">Most-reviewed SMS apps</div>
          <div style="font-size:10.5px;color:#888">1,200+ verified 5-star reviews</div>
        </div>
      </div>
    </div>

    <div class="cmp-table-wrap">
      <table class="cmp-table">
        <thead>
          <tr>
            <th class="cmp-th-feat">ELEMENTS</th>
            <th class="cmp-th-us">
              <div class="cmp-us-label">
                <!--<i class="fa-solid fa-trophy" style="color:#f4c430;font-size:11px"></i>-->
                360 SMS App
              </div>
              <div class="cmp-us-sub">SALESFORCE NATIVE · #1 RATED</div>
            </th>
            <th class="cmp-th-other">
              <div style="font-weight:700;font-size:13px;color:#555">Others</div>
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

  <!--  <div class="cmp-cta-row">-->
  <!--    <div class="cmp-cta-btns">-->
  <!--      <span style="margin-top:12px;">See all 15 channels live in your Salesforce org.</span>-->
  <!--      <a href="#contact_form" class="btn-primary-solid">Book a Demo</a>-->
  <!--      <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" class="btn-outline-primary-custom">View on AppExchange ↗</a>-->
  <!--    </div>-->
  <!--  </div>-->
  <!--</div>-->
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
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
      tabs.forEach(t => t.classList.remove("active"));
      panels.forEach(p => p.classList.remove("active"));
      this.classList.add("active");
      const target = this.getAttribute("data-target");
      const panel = document.getElementById(target);
      if (panel) panel.classList.add("active");
    });
  });
});
</script>
<?php
    get_footer('sms');
?>
