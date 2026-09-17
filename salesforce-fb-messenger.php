<?php
/*
Template Name: Salesforce Facebook Messenger
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
      border-radius: 12px;
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
    .af-more-strip { display: flex; align-items: flex-start; justify-content: space-around; padding: 16px 0px; gap: 6px; flex-wrap: wrap; }
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
    .ai-cta-main { color: #fff; font-size: 14.5px; font-weight: 700; margin: 0; line-height: 1.4; }
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
  </style>

<!-- ===== BREADCRUMB ===== -->
<div id="breadcrumb-bar">
  <div class="container" style="max-width:1200px">
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo esc_url(home_url('/')); ?>channels/">Channels</a></li>
        <li class="breadcrumb-item active" aria-current="page">Salesforce Facebook Messenger</li>
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
          Salesforce Facebook Messenger Integration · 1B+ Users · No Developer Needed
        </div>
        <h1><span style="color:var(--blue)">Salesforce Facebook Messenger Integration</span>Manage Messenger from Your CRM</h1>
        <p class="hero-sub">360 SMS connects Facebook Messenger to Salesforce natively - target 1B+ Messenger users, run <a href="<?php echo esc_url(home_url('/')); ?>bulk-batch-scheduled-sms-texting/">bulk Messenger campaigns from Reports</a>, deploy <a href="<?php echo esc_url(home_url('/')); ?>salesforce-chatbot/">no-code Messenger chatbots</a>, all inside Salesforce.</p>
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
          <img class="img-fluid" src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/09/CH-fb.png" alt="Salesforce Facebook Messenger Integration">
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
        <div class="big-num">1B+</div>
        <div class="stat-label">Messenger<br>Users</div>
      </div>
      <div class="stat-item">
        <div class="big-num">No-code</div>
        <div class="stat-label">Message<br>Automation</div>
      </div>
      <div class="stat-item">
        <div class="big-num">AI-powered</div>
        <div class="stat-label">Facebook<br>Messaging</div>
      </div>
      <div class="stat-item">
        <div class="big-num">24/7</div>
        <div class="stat-label">Chatbot<br>Coverage</div>
      </div>
      <div class="stat-item">
        <div class="big-num">60k+</div>
        <div class="stat-label">Users<br>Worldwide</div>
      </div>
      <div class="stat-item">
        <div class="big-num">24/7</div>
        <div class="stat-label">Free Support</div>
      </div>
    </div>
  </div>
</div>

<!-- ===== SECTION 2: HOW IT WORKS ===== -->
<section id="how-it-works">
  <div class="container" style="max-width:1200px">
    <div class="row justify-content-center mb-4">
      <div class="col-lg-12">
        <h2>How Salesforce Messenger integration works - send, receive, and automate.</h2>
        <p style="color:var(--muted);font-size:14.5px;line-height:1.7;margin-top:12px;">Salesforce Messenger integration runs natively - no middleware, no tab-switching, no separate login. Every Facebook message sent or received is automatically tied to the right Salesforce record.</p>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="hiw-card">
          <div class="hiw-card-header">
            <span class="hiw-badge" style="background:#e8f1fb;color:var(--blue)">Acquire &amp; Support</span>
          </div>
          <p class="col-head">Connect with 1B people globally.</p>
          <p style="color:var(--muted);font-size:13.5px;line-height:1.6;margin-bottom:20px">Run interactive campaigns for millions of users simultaneously. Let customers message you from anywhere - desktop or mobile - and manage it all in Salesforce.</p>
          <div class="feature-row">
            <div class="feature-icon"><i class="bi bi-globe"></i></div>
            <div>
              <div class="feature-title">Global reach</div>
              <div class="feature-desc">Connect with 1B+ Messenger users without regional restrictions.</div>
            </div>
          </div>
          <div class="feature-row">
            <div class="feature-icon"><i class="bi bi-credit-card"></i></div>
            <div>
              <div class="feature-title">Payments &amp; in-store</div>
              <div class="feature-desc">Manage purchases, payments, and B2C in-store experiences.</div>
            </div>
          </div>
          <div class="feature-row">
            <div class="feature-icon"><i class="bi bi-journal-text"></i></div>
            <div>
              <div class="feature-title">Knowledge bases</div>
              <div class="feature-desc">Deploy FAQs and guided flows via <a href="<?php echo esc_url(home_url('/')); ?>salesforce-chatbot/">Messenger chatbots</a>.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hiw-card">
          <div class="hiw-card-header">
            <span class="hiw-badge" style="background:#e6f9ef;color:#27ae60">Re-engage &amp; Convert</span>
          </div>
          <p class="col-head">Prevent escalations, build trust.</p>
          <p style="color:var(--muted);font-size:13.5px;line-height:1.6;margin-bottom:20px">Handle customer cases faster, reduce anxiety and churn, and enable agent teams to manage high volumes with chatbot-first qualifications.</p>
          <div class="feature-row">
            <div class="feature-icon"><i class="bi bi-robot"></i></div>
            <div>
              <div class="feature-title"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-chatbot/" style="color:inherit;text-decoration:none;">Chatbot qualification</a></div>
              <div class="feature-desc">Qualify inquiries via chatbot before routing to a live agent.</div>
            </div>
          </div>
          <div class="feature-row">
            <div class="feature-icon"><i class="bi bi-chat-dots"></i></div>
            <div>
              <div class="feature-title"><a href="<?php echo esc_url(home_url('/')); ?>automated-messaging/" style="color:inherit;text-decoration:none;">Away messages</a></div>
              <div class="feature-desc">Send automated responses to maintain engagement after business hours.</div>
            </div>
          </div>
          <div class="feature-row">
            <div class="feature-icon"><i class="bi bi-graph-up-arrow"></i></div>
            <div>
              <div class="feature-title">Accelerate purchases</div>
              <div class="feature-desc">Send invoices, improve collections, build buyer confidence.</div>
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
      <h2>Salesforce Facebook Messenger app features used by 60K+ teams daily</h2>
      <p style="color:var(--muted);font-size:14px;max-width:680px;margin-top:6px">Every Salesforce Facebook Messenger feature lives inside your CRM - same records, same reports, same Salesforce workflows your team already knows.</p>
    </div>

    <div class="af-wrap">
      <div class="af-left">
        <div class="af-nav" id="af-nav">

          <div class="af-tab active" data-target="af-panel-1">
            <div class="af-thumb">
              <div class="feature-icon"><i class="bi bi-plug"></i></div>
            </div>
            <div class="af-tab-text">
              <div class="af-tab-title">Messenger Integration</div>
              <div class="af-tab-sub">1 Facebook Business Page needed</div>
            </div>
          </div>

          <div class="af-tab" data-target="af-panel-2">
            <div class="af-thumb">
              <div class="feature-icon"><i class="bi bi-robot"></i></div>
            </div>
            <div class="af-tab-text">
              <div class="af-tab-title">Chatbots</div>
              <div class="af-tab-sub">Qualification &amp; FAQ automation</div>
            </div>
          </div>

          <div class="af-tab" data-target="af-panel-3">
            <div class="af-thumb">
              <div class="feature-icon"><i class="bi bi-gear"></i></div>
            </div>
            <div class="af-tab-text">
              <div class="af-tab-title">Automation</div>
              <div class="af-tab-sub">Campaigns &amp; re-engagement</div>
            </div>
          </div>

          <div class="af-tab" data-target="af-panel-4">
            <div class="af-thumb">
              <div class="feature-icon"><i class="bi bi-chat-dots"></i></div>
            </div>
            <div class="af-tab-text">
              <div class="af-tab-title">P2P Messaging</div>
              <div class="af-tab-sub">1-on-1 brand conversations</div>
            </div>
          </div>

          <div class="af-tab" data-target="af-panel-5">
            <div class="af-thumb">
              <div class="feature-icon"><i class="bi bi-bar-chart"></i></div>
            </div>
            <div class="af-tab-text">
              <div class="af-tab-title">Analytics</div>
              <div class="af-tab-sub">Messenger campaign reporting</div>
            </div>
          </div>

        </div>
      </div>

      <div class="af-right">

        <!-- Panel 1: Messenger Integration -->
        <div class="af-panel active" id="af-panel-1">
          <div class="af-panel-inner">
            <div class="af-text-col">
              <div class="tc-sub">FACEBOOK MESSENGER INTEGRATION</div>
              <h3>All you need is a Facebook Business Page.</h3>
              <p>Connect your Facebook Business Page to 360 SMS and manage all Messenger conversations natively in Salesforce. No separate app, no middleware, no tab switching.</p>
              <ul class="check-list">
                <li><i class="fa-solid fa-check-circle"></i> Don't have a Business Page? We'll set one up for you</li>
                <li><i class="fa-solid fa-check-circle"></i> All Facebook Messenger conversations in the Salesforce <a href="<?php echo esc_url(home_url('/')); ?>conversation-manager/">unified inbox</a></li>
                <li><i class="fa-solid fa-check-circle"></i> Auto-logged to Lead, Contact, or Account records</li>
              </ul>
              <div class="tag-chips">
                <span class="tag-chip">Managed Setup</span>
                <span class="tag-chip">Unified Inbox</span>
                <span class="tag-chip">Auto-Logged</span>
              </div>
              <a class="open-popup-form-on-click learn-more btn-outline-primary-custom">Contact us</a>
            </div>
          </div>
        </div>

        <!-- Panel 2: Chatbots -->
        <div class="af-panel" id="af-panel-2">
          <div class="af-panel-inner">
            <div class="af-text-col">
              <div class="tc-sub">FACEBOOK MESSENGER CHATBOTS</div>
              <h3>Qualify, support, and re-engage at scale.</h3>
              <p>Deploy point-and-click <a href="<?php echo esc_url(home_url('/')); ?>salesforce-chatbot/">chatbots</a> on Messenger to handle FAQs, qualify inbound inquiries, and escalate to agents - 24/7, no code required.</p>
              <ul class="check-list">
                <li><i class="fa-solid fa-check-circle"></i> Point-and-click chatbot builder - no developer</li>
                <li><i class="fa-solid fa-check-circle"></i> 24/7 coverage - handles inquiries outside business hours</li>
                <li><i class="fa-solid fa-check-circle"></i> Seamless <a href="<?php echo esc_url(home_url('/')); ?>one-on-one-conversations/">handoff to live agent</a> with full conversation history</li>
              </ul>
              <div class="tag-chips">
                <span class="tag-chip">No Code</span>
                <span class="tag-chip">24/7</span>
                <span class="tag-chip">Human Handoff</span>
              </div>
              <a href="<?php echo esc_url(home_url('/')); ?>salesforce-chatbot/" class="learn-more btn-outline-primary-custom">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Panel 3: Automation -->
        <div class="af-panel" id="af-panel-3">
          <div class="af-panel-inner">
            <div class="af-text-col">
              <div class="tc-sub">FACEBOOK MESSENGER AUTOMATION</div>
              <h3>Run campaigns and re-engage customers.</h3>
              <p>Trigger Facebook Messenger messages from Salesforce Flow, send <a href="<?php echo esc_url(home_url('/')); ?>bulk-batch-scheduled-sms-texting/">bulk campaign messages</a> to opted-in followers, and build multichannel <a href="<?php echo esc_url(home_url('/')); ?>drip-campaigns/">drip sequences</a>.</p>
              <ul class="check-list">
                <li><i class="fa-solid fa-check-circle"></i> Bulk messages to opted-in Messenger followers from Reports</li>
                <li><i class="fa-solid fa-check-circle"></i> Salesforce Flow-triggered Messenger automation</li>
                <li><i class="fa-solid fa-check-circle"></i> Drip campaigns with Messenger and other channels - <a href="<?php echo esc_url(home_url('/')); ?>salesforce-sms/">SMS</a>, <a href="<?php echo esc_url(home_url('/')); ?>salesforce-whatsapp/">WhatsApp</a>, and more</li>
              </ul>
              <div class="tag-chips">
                <span class="tag-chip">Bulk Campaigns</span>
                <span class="tag-chip">Flow Native</span>
                <span class="tag-chip">Multichannel Drip Campaigns</span>
              </div>
              <a href="<?php echo esc_url(home_url('/')); ?>automated-messaging/" class="learn-more btn-outline-primary-custom">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Panel 4: P2P Messaging -->
        <div class="af-panel" id="af-panel-4">
          <div class="af-panel-inner">
            <div class="af-text-col">
              <div class="tc-sub">MESSENGER P2P</div>
              <h3>Reply 1-on-1 as your brand on Messenger.</h3>
              <p>Agents respond to individual Messenger conversations directly from Salesforce - seeing full CRM context, replying instantly, and logging every interaction to the record automatically.</p>
              <ul class="check-list">
                <li><i class="fa-solid fa-check-circle"></i> Full CRM context shown alongside every Messenger conversation</li>
                <li><i class="fa-solid fa-check-circle"></i> AI-suggested replies - context-aware, real-time assistance for agents</li>
                <li><i class="fa-solid fa-check-circle"></i> Every reply is auto-logged to Lead, Contact, or Account in Salesforce</li>
              </ul>
              <div class="tag-chips">
                <span class="tag-chip">CRM Context</span>
                <span class="tag-chip">AI Assist</span>
                <span class="tag-chip">Auto-Logged</span>
              </div>
              <a href="<?php echo esc_url(home_url('/')); ?>one-on-one-conversations/" class="learn-more btn-outline-primary-custom">Learn More</a>
            </div>
          </div>
        </div>

        <!-- Panel 5: Analytics -->
        <div class="af-panel" id="af-panel-5">
          <div class="af-panel-inner">
            <div class="af-text-col">
              <div class="tc-sub">FACEBOOK MESSENGER ANALYTICS</div>
              <h3>Measure every Messenger interaction.</h3>
              <p>Track Messenger campaign open rates, reply rates, chatbot deflection, and agent response times - all in native Salesforce reports with no external analytics tool required.</p>
              <ul class="check-list">
                <li><i class="fa-solid fa-check-circle"></i> Delivery, open, and reply rate tracking per Messenger campaign</li>
                <li><i class="fa-solid fa-check-circle"></i> Track delivery trends, message performance, and more with a custom dashboard</li>
                <li><i class="fa-solid fa-check-circle"></i> Agent response time and conversation volume in Salesforce dashboards</li>
              </ul>
              <div class="tag-chips">
                <span class="tag-chip">Native Reports</span>
                <span class="tag-chip">Custom dashboard</span>
                <span class="tag-chip">Response Times</span>
              </div>
              <a class="open-popup-form-on-click learn-more btn-outline-primary-custom">Contact us</a>
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
        <div class="feature-icon"><i class="bi bi-link"></i></div>
        <span><a href="<?php echo esc_url(home_url('/')); ?>link-tracking/" style="color:#555;text-decoration:none;">Link<br>Tracking</a></span>
      </div>
      <div class="af-more-strip-item">
        <div class="feature-icon"><i class="bi bi-send"></i></div>
        <span><a href="<?php echo esc_url(home_url('/')); ?>bulk-batch-scheduled-sms-texting/" style="color:#555;text-decoration:none;">Bulk<br>Messaging</a></span>
      </div>
      <div class="af-more-strip-item">
        <div class="feature-icon"><i class="bi bi-diagram-3"></i></div>
        <span><a href="<?php echo esc_url(home_url('/')); ?>drip-campaigns/" style="color:#555;text-decoration:none;">Multichannel drip campaigns</a><br><small class="af-unique">Unique</small></span>
      </div>
    </div>

    <button class="see-all-btn mt-4"><a href="<?php echo esc_url(home_url('/')); ?>features/" style="color:#fff;">See all features</a> </button>
  </div>
</section>

<!-- ===== SECTION 5: AI DARK ===== -->
<section id="ai-section">
  <div class="container" style="max-width:1200px">
    <div class="mb-4">
      <div class="ai-eyebrow"><i class="fa-solid fa-wand-magic-sparkles me-1"></i> AI - BUILT INTO EVERY WORKFLOW</div>
      <h2 class="ai-h2">AI that works where your team already works</h2>
      <p class="ai-sub">Every AI feature lives inside Salesforce - no extra tab, no third-party tool. Your team gets smarter replies, faster responses, and less manual work without changing how they work today.</p>
    </div>

    <div class="row g-3">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="ai-card">
          <div class="feature-icon" style="margin-bottom:16px;">
            <i class="bi bi-robot"></i>
          </div>
          <h5 class="ai-card-title">AI Messenger Chatbot</h5>
          <p class="ai-card-desc">AI chatbot handles FAQs, qualifies inbound Messenger leads, creates Salesforce records, and escalates to agents with full context.</p>
          <div class="ai-tags">
            <span class="ai-tag">Lead creation</span>
            <span class="ai-tag">24/7 qualification</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="ai-card">
          <div class="feature-icon" style="margin-bottom:16px;">
            <i class="bi bi-translate"></i>
          </div>
          <h5 class="ai-card-title">AI Language Support</h5>
          <p class="ai-card-desc">AI translates Messenger conversations in real time - enabling your team to serve global audiences without language barriers.</p>
          <div class="ai-tags">
            <span class="ai-tag">50+ languages</span>
            <span class="ai-tag">Real-time translation</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="ai-card">
          <div class="feature-icon" style="margin-bottom:16px;">
            <i class="bi bi-bar-chart"></i>
          </div>
          <h5 class="ai-card-title">AI Campaign Analysis</h5>
          <p class="ai-card-desc">AI analyzes Messenger campaign engagement and recommends adjustments to improve response rates and conversion for future campaigns.</p>
          <div class="ai-tags">
            <span class="ai-tag">Engagement analysis</span>
            <span class="ai-tag">Campaign optimization</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats strip — white background -->
<div class="ai-stats-strip">
  <div class="container" style="max-width:1200px">
    <div class="ai-stats-row">
      <div class="ai-stat-block">
        <div class="ai-stat-num">1B+</div>
        <div class="ai-stat-lbl">Messenger users<br>globally</div>
      </div>
      <div class="ai-stat-block">
        <div class="ai-stat-num">Zero</div>
        <div class="ai-stat-lbl">Regional<br>restrictions</div>
      </div>
      <div class="ai-stat-block">
        <div class="ai-stat-num">Unified</div>
        <div class="ai-stat-lbl">Inbox for<br>messaging</div>
      </div>
      <div class="ai-stat-block">
        <div class="ai-stat-num">100%</div>
        <div class="ai-stat-lbl">Data<br>security</div>
      </div>
    </div>
  </div>
</div>

<!-- CTA strip -->
<div class="ai-cta-strip">
  <div class="container" style="max-width:1200px">
    <div class="ai-cta-inner">
      <div class="ai-cta-text">
        <p class="ai-cta-main">Add Facebook Messenger to Salesforce within minutes - no middleware, no developer</p>
        <p class="ai-cta-sub">Native AgentExchange install &nbsp;·&nbsp; No developer &nbsp;·&nbsp; No middleware &nbsp;·&nbsp; GDPR &amp; HIPAA compliant &nbsp;·&nbsp; 24/7 onboarding included</p>
      </div>
      <div class="ai-cta-btns">
        <a class="open-popup-form-on-click btn-white-solid">Start Free Trial</a>
        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" target="_blank" class="btn-white-outline">Book a Demo</a>
      </div>
    </div>
  </div>
</div>

<!-- ===== SECTION 6: INTEGRATION ===== -->
<section id="integration">
  <div class="container" style="max-width:1200px">
    <div class="row align-items-start g-4">
      <div class="col-lg-5">
        <h2 class="int-h2">Salesforce Facebook Messenger integration is one of 15+ channel integrations, all in one app.</h2>
        <p class="int-para">Same Salesforce SMS app, same inbox, same features. Add channels without starting from scratch.</p>
        <a href="<?php echo esc_url(home_url('/')); ?>channels/" class="btn-primary-solid d-inline-flex">Explore all channels</a>
      </div>
      <div class="col-lg-7">
        <div class="int-chips-all">
          <span class="int-ch"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-sms/" style="color:#555;">● SMS</a></span>
          <span class="int-ch"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-whatsapp/" style="color:#555;">● WhatsApp</a></span>
          <span class="int-ch" style="background:#1877F2;color:#fff;border-color:#1877F2;"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-facebook-messenger/" style="color:#fff;">● Facebook</a></span>
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
          <span class="int-ch"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-mms/" style="color:#555;">● MMS</a></span>
        </div>
        <p class="int-note"><strong style="color:#0070d2;">Rest assured</strong> - you'll get all the same features across every channel. Switch channels without starting from scratch.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== SECTION 7: COMPARISON TABLE ===== -->
<section id="comparison">
  <div class="container" style="max-width:1200px">
    <div class="cmp-header-row">
      <div>
        <h2>360 SMS App vs other Salesforce Facebook Messenger apps</h2>
        <p style="color:var(--muted);font-size:14px;margin-top:6px">See exactly why 60K+ users chose the 360 SMS Salesforce Facebook Messenger app over every other option on AgentExchange.</p>
      </div>
      <div class="cmp-award-badge">
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

    <div class="cmp-cta-row">
      <div class="cmp-cta-btns">
        <span style="margin-top:12px;">See how 360 SMS is better than other Facebook Messenger apps</span>
        <a class="open-popup-form-on-click btn-primary-solid">Schedule a free demo</a>
        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" target="_blank" class="btn-outline-primary-custom">View on AgentExchange ↗</a>
      </div>
    </div>
  </div>
</section>

<!-- ===== SECTION 11: INDUSTRIES ===== -->
<section class="sec py-5" style="background: #F7F7F5;">
  <div class="container py-4">
    <div class="mb-5">
      <h2 class="fw-bold mb-3 fs-32 ls-n1 c-ink">Salesforce Facebook Messenger integration by industry</h2>
      <p class="text-muted mw-900 fs-17 lh-16">Industry-specific Salesforce Facebook messenger workflows, pre-built templates, and proven use cases - ready on day one.</p>
    </div>
    <div class="row g-3">
      <?php
      $site_url = home_url('/');
      $industries = [
        [$site_url . 'wp-content/uploads/2026/04/Vector-5.png',   'Retail',                'Purchase assistance, order updates, and loyalty programme messaging', $site_url . 'marketing/'],
        [$site_url . 'wp-content/uploads/2026/04/Vector-5.png',   'Healthcare',            'Appointment booking and patient support via Messenger', $site_url . 'healthcare-wellness/'],
        [$site_url . 'wp-content/uploads/2026/04/Vector-3-2.png', 'Education',             'Admissions enquiries, event promotion, and student support', $site_url . 'education-academics/'],
        [$site_url . 'wp-content/uploads/2026/04/Vector-2-2.png', 'Global Brands',         'Multi-region campaigns without phone numbers or regional limits', $site_url . 'multiple-language-support/'],
        [$site_url . 'wp-content/uploads/2026/04/Vector-4-2.png', 'Recruitment',           'Candidate engagement and job promotion via Facebook Messenger', $site_url . 'recruitment/'],
        [$site_url . 'wp-content/uploads/2026/04/Vector-6.png',   'Non-profit',            'Donor engagement, event promotion, and community campaigns', $site_url . 'non-profit/'],
        [$site_url . 'wp-content/uploads/2026/04/image-83-Traced.png', 'Professional Services', 'Client communication and enquiry management', $site_url . 'professional-services/'],
        [$site_url . 'wp-content/uploads/2026/04/Vector-1-4.png', 'Finance',               'Lead nurturing and product promotion via Messenger', $site_url . 'finance/'],
      ];
      foreach ($industries as $ind): ?>
        <div class="col-lg-3 col-md-6">
          <div class="ind-card p-4 h-100 border rounded-4 bg-white shadow-sm">
            <div class="mb-2 fs-3">
              <img src="<?= esc_url($ind[0]); ?>" alt="<?= esc_attr($ind[1]); ?>" class="industry-icon">
            </div>
            <h5 class="fw-bold mb-2 fs-19"><?= $ind[1] ?></h5>
            <p class="small text-muted mb-2 lh-16"><?= $ind[2] ?></p>
            <a href="<?= $ind[3] ?>" class="fw-bold text-decoration-none small ind-link">Explore</a>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="text-center mt-5">
      <button class="btn btn-brand px-4 py-2 fw-bold rounded-2 fs-16"><a href="<?php echo esc_url(home_url('/')); ?>industries/">View all Industries</a> </button>
    </div>
  </div>
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