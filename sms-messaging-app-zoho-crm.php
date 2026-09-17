<?php
/*
Template Name: Feature sms messaging app zoho crm
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

    /* ========== SECTION 1 - HERO ========== */
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

    /* ========== SECTION 2 - HOW IT WORKS ========== */
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

    /* ========== SECTION 3 - APP FEATURES ========== */
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

    /* ========== SECTION 5 - AI DARK ========== */
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

    /* ========== SECTION 6 - INTEGRATION ========== */
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

    /* ========== SECTION 7 - COMPARISON TABLE ========== */
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

    /* ========== SECTION 13 - CONTACT ========== */
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
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Channels</a></li>
        <li class="breadcrumb-item active" aria-current="page">360 SMS App for Zoho CRM</li>
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
          360 SMS App for Zoho CRM · SMS · MMS · WhatsApp · AI-Powered · Truly Zoho-Native
        </div>
        <h1><span style="color:var(--blue)">360 SMS App for Zoho CRM</span> - Convert more with AI-powered multi-channel messaging.</h1>
        <p class="hero-sub">360 SMS App is the leading AI-powered multi-channel messaging app for Zoho CRM. Send SMS, MMS, and WhatsApp from any Zoho record - truly Zoho-native, no middleware, no developer needed.</p>
        <div class="hero-btns">
          <a class="btn-nav-pri" href="#contact_form">Book a Demo →</a>
          <a href="#" class="btn-outline-primary-custom">Start for Free</a>
        </div>
        <div class="rating-row mt-3">
          <span class="stars">★★★★★</span>
          <strong>5★ rated</strong>
          <span style="color:var(--muted);font-size:12px">· 13+ Years · AI-backed Messaging · Zoho-Native</span>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hero-image-wrap">
          <img class="img-fluid" src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Right_-inbox-mock-1-2.png" alt="360 SMS App for Zoho CRM">
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
        <div class="big-num">13+</div>
        <div class="stat-label">Years of CRM<br>Innovation</div>
      </div>
      <div class="stat-item">
        <div class="big-num">AI</div>
        <div class="stat-label">Powered Customer<br>Engagement</div>
      </div>
      <div class="stat-item">
        <div class="big-num">1-Click</div>
        <div class="stat-label">Install &amp;<br>Get Started</div>
      </div>
      <div class="stat-item">
        <div class="big-num">Native</div>
        <div class="stat-label">To Zoho,<br>No Redirection</div>
      </div>
      <div class="stat-item">
        <div class="big-num">3-in-1</div>
        <div class="stat-label">SMS, MMS<br>&amp; WhatsApp</div>
      </div>
      <div class="stat-item">
        <div class="big-num">24/7</div>
        <div class="stat-label">Free<br>Support</div>
      </div>
    </div>
  </div>
</div>

<!-- ===== SECTION 2: HOW IT WORKS ===== -->
<section id="how-it-works">
  <div class="container" style="max-width:1200px">
    <div class="row justify-content-center mb-4">
      <div class="col-lg-12">
        <h2>Enable AI-powered Customer Engagement from Zoho - send, receive, and automate.</h2>
        <p style="color:var(--muted);font-size:14.5px;line-height:1.7;margin-top:12px;">Make every customer interaction count and convert more with SMS, MMS, and WhatsApp Zoho integration. It's your all-in-one setup to turn Zoho workflows into real customer conversations.</p>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-lg-6">
        <div class="hiw-card">
          <div class="hiw-card-header">
            <span class="hiw-badge" style="background:#e8f1fb;color:var(--blue)">Zoho-Native Setup</span>
          </div>
          <p class="col-head">You and your data remain on Zoho.</p>
          <p style="color:var(--muted);font-size:13.5px;line-height:1.6;margin-bottom:20px">Truly a Zoho-native app with no redirection. Install and get started in one click — no middleware, no external login. Complete data sovereignty from day one.</p>
          <div class="feature-row">
            <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
            <div>
              <div class="feature-title">Truly Zoho-native</div>
              <div class="feature-desc">No redirection — your data stays in Zoho at all times.</div>
            </div>
          </div>
          <div class="feature-row">
            <div class="feature-icon"><i class="bi bi-lightning"></i></div>
            <div>
              <div class="feature-title">One-click install</div>
              <div class="feature-desc">Install and get started in one click — zero developer effort required.</div>
            </div>
          </div>
          <div class="feature-row">
            <div class="feature-icon"><i class="bi bi-lock"></i></div>
            <div>
              <div class="feature-title">Complete data sovereignty</div>
              <div class="feature-desc">You and your data remain on Zoho — always secure and compliant.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="hiw-card">
          <div class="hiw-card-header">
            <span class="hiw-badge" style="background:#e6f9ef;color:#27ae60">AI-Powered Engagement</span>
          </div>
          <p class="col-head">Improve CSAT &amp; CRR with multi-channel messaging.</p>
          <p style="color:var(--muted);font-size:13.5px;line-height:1.6;margin-bottom:20px">AI-powered Zoho messaging for profitable quarters. Engage customers across SMS, MMS, and WhatsApp from a single unified inbox inside Zoho.</p>
          <div class="feature-row">
            <div class="feature-icon"><i class="bi bi-heart"></i></div>
            <div>
              <div class="feature-title">Improve CSAT &amp; CRR</div>
              <div class="feature-desc">Multi-channel engagement that builds loyalty and retention.</div>
            </div>
          </div>
          <div class="feature-row">
            <div class="feature-icon"><i class="bi bi-robot"></i></div>
            <div>
              <div class="feature-title">AI-powered messaging</div>
              <div class="feature-desc">Smarter engagement for profitable quarters with AI-driven workflows.</div>
            </div>
          </div>
          <div class="feature-row">
            <div class="feature-icon"><i class="bi bi-inbox"></i></div>
            <div>
              <div class="feature-title">Unified inbox</div>
              <div class="feature-desc">SMS, MMS, &amp; WhatsApp — all from a single Zoho-native inbox.</div>
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
      <h2>Zoho CRM Texting Solutions that Boost Conversions - used by teams daily</h2>
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
              <div class="af-tab-title">Multi-Channel Messaging</div>
              <div class="af-tab-sub">SMS, MMS &amp; WhatsApp from Zoho</div>
            </div>
          </div>

          <div class="af-tab" data-target="af-panel-2">
            <div class="af-thumb">
              <div class="feature-icon"><i class="bi bi-arrow-left-right"></i></div>
            </div>
            <div class="af-tab-text">
              <div class="af-tab-title">Conversation Management</div>
              <div class="af-tab-sub">Unified inbox &amp; 2-way messaging</div>
            </div>
          </div>

          <div class="af-tab" data-target="af-panel-3">
            <div class="af-thumb">
              <div class="feature-icon"><i class="bi bi-megaphone"></i></div>
            </div>
            <div class="af-tab-text">
              <div class="af-tab-title">Bulk Messaging</div>
              <div class="af-tab-sub">Scale with personalized campaigns</div>
            </div>
          </div>

          <div class="af-tab" data-target="af-panel-4">
            <div class="af-thumb">
              <div class="feature-icon"><i class="bi bi-gear"></i></div>
            </div>
            <div class="af-tab-text">
              <div class="af-tab-title">No-Code Automation</div>
              <div class="af-tab-sub">Automate workflows without coding</div>
            </div>
          </div>

          <div class="af-tab" data-target="af-panel-5">
            <div class="af-thumb">
              <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
            </div>
            <div class="af-tab-text">
              <div class="af-tab-title">Compliance &amp; Safety</div>
              <div class="af-tab-sub">GDPR, TCPA &amp; HIPAA ready</div>
            </div>
          </div>

        </div>
      </div>

      <div class="af-right">

        <!-- Panel 1: Multi-Channel Messaging -->
        <div class="af-panel active" id="af-panel-1">
          <div class="af-panel-inner">
            <div class="af-text-col">
              <div class="tc-sub">MULTI-CHANNEL MESSAGING · ZOHO CRM</div>
              <h3>Send SMS, MMS, and WhatsApp from Zoho CRM - automate timely interactions.</h3>
              <p>Automate SMS, MMS, and WhatsApp messages for timely and time-sensitive interactions such as reminders, confirmations, follow-ups, and more — all without leaving Zoho CRM.</p>
              <ul class="check-list">
                <li><i class="fa-solid fa-check-circle"></i> Send SMS, MMS, and WhatsApp directly from any Zoho CRM record</li>
                <li><i class="fa-solid fa-check-circle"></i> Automate reminders, confirmations, and follow-ups with no manual effort</li>
                <li><i class="fa-solid fa-check-circle"></i> All messages auto-logged to the right Zoho CRM record in real time</li>
              </ul>
              <div class="tag-chips">
                <span class="tag-chip">MMS</span>
                <span class="tag-chip">WhatsApp</span>
                <span class="tag-chip">Zoho-Native</span>
              </div>
              <a href="#contact_form" class="learn-more btn-outline-primary-custom">Contact us →</a>
            </div>
          </div>
        </div>

        <!-- Panel 2: Conversation Management -->
        <div class="af-panel" id="af-panel-2">
          <div class="af-panel-inner">
            <div class="af-text-col">
              <div class="tc-sub">CONVERSATION MANAGEMENT</div>
              <h3>Manage outbound &amp; inbound conversations - stay connected and sell faster.</h3>
              <p>Turn every message into an opportunity using SMS, MMS &amp; WhatsApp — all within Zoho CRM. A unified inbox keeps every conversation tied to the right record.</p>
              <ul class="check-list">
                <li><i class="fa-solid fa-check-circle"></i> Unified inbox for all inbound and outbound conversations inside Zoho</li>
                <li><i class="fa-solid fa-check-circle"></i> Never miss an incoming message — real-time alerts and notifications</li>
                <li><i class="fa-solid fa-check-circle"></i> Full conversation history tied to the Lead, Contact, or Deal record</li>
              </ul>
              <div class="tag-chips">
                <span class="tag-chip">Unified Inbox</span>
                <span class="tag-chip">2-Way Messaging</span>
                <span class="tag-chip">Real-Time Alerts</span>
              </div>
              <a href="#contact_form" class="learn-more btn-outline-primary-custom">Contact us →</a>
            </div>
          </div>
        </div>

        <!-- Panel 3: Bulk Messaging -->
        <div class="af-panel" id="af-panel-3">
          <div class="af-panel-inner">
            <div class="af-text-col">
              <div class="tc-sub">BULK MESSAGING</div>
              <h3>Scale with personalized bulk messaging - reach thousands while staying personal.</h3>
              <p>Reach thousands of leads or customers at once while maintaining personalization. Send bulk SMS, MMS, and WhatsApp campaigns from Zoho CRM with full visibility into delivery, engagement, and responses.</p>
              <ul class="check-list">
                <li><i class="fa-solid fa-check-circle"></i> Send personalized bulk SMS and WhatsApp from Zoho CRM List Views</li>
                <li><i class="fa-solid fa-check-circle"></i> Merge fields ensure every message feels personal, not mass-sent</li>
                <li><i class="fa-solid fa-check-circle"></i> Track delivery, engagement, and response metrics inside Zoho</li>
              </ul>
              <div class="tag-chips">
                <span class="tag-chip">Bulk Campaigns</span>
                <span class="tag-chip">Merge Fields</span>
                <span class="tag-chip">Delivery Tracking</span>
              </div>
              <a href="#contact_form" class="learn-more btn-outline-primary-custom">Contact us →</a>
            </div>
          </div>
        </div>

        <!-- Panel 4: No-Code Automation -->
        <div class="af-panel" id="af-panel-4">
          <div class="af-panel-inner">
            <div class="af-text-col">
              <div class="tc-sub">NO-CODE AUTOMATION</div>
              <h3>Automate Zoho workflows without coding - set up messaging in minutes.</h3>
              <p>Set up automated messaging workflows on any CRM object without writing a single line of code and reduce manual efforts. Use pre-built templates and point-and-click automations.</p>
              <ul class="check-list">
                <li><i class="fa-solid fa-check-circle"></i> No-code workflow builder — no developer or coding required</li>
                <li><i class="fa-solid fa-check-circle"></i> Trigger messages based on Zoho CRM record events automatically</li>
                <li><i class="fa-solid fa-check-circle"></i> Works across any CRM module — Leads, Contacts, Deals, and more</li>
              </ul>
              <div class="tag-chips">
                <span class="tag-chip">No Code</span>
                <span class="tag-chip">Trigger-Based</span>
                <span class="tag-chip">Any CRM Object</span>
              </div>
              <a href="#contact_form" class="learn-more btn-outline-primary-custom">Contact us →</a>
            </div>
          </div>
        </div>

        <!-- Panel 5: Compliance -->
        <div class="af-panel" id="af-panel-5">
          <div class="af-panel-inner">
            <div class="af-text-col">
              <div class="tc-sub">COMPLIANCE &amp; LEGAL SAFETY</div>
              <h3>Stay compliant and avoid legal risks - built-in opt-in/opt-out management.</h3>
              <p>Built-in compliance tools help you manage opt-ins, opt-outs, and messaging regulations automatically. Improve brand recall with custom URLs and protect your brand from legal exposure.</p>
              <ul class="check-list">
                <li><i class="fa-solid fa-check-circle"></i> Automated opt-in/opt-out management — GDPR, TCPA, and HIPAA ready</li>
                <li><i class="fa-solid fa-check-circle"></i> Custom URL shortening for improved brand recall and click tracking</li>
                <li><i class="fa-solid fa-check-circle"></i> Schedule and connect at the right time — time-zone aware messaging</li>
              </ul>
              <div class="tag-chips">
                <span class="tag-chip">GDPR Ready</span>
                <span class="tag-chip">Opt-out Managed</span>
                <span class="tag-chip">Custom URLs</span>
              </div>
              <a href="#contact_form" class="learn-more btn-outline-primary-custom">Contact us →</a>
            </div>
          </div>
        </div>

      </div><!-- /.af-right -->
    </div><!-- /.af-wrap -->

    <div class="af-more-label">MORE FEATURES</div>
    <div class="af-more-strip">
      <div class="af-more-strip-item">
        <div class="feature-icon"><i class="bi bi-link"></i></div>
        <span>Link Shortening<br>&amp; Tracking</span>
      </div>
      <div class="af-more-strip-item">
        <div class="feature-icon"><i class="bi bi-clock"></i></div>
        <span>Message<br>Scheduling</span>
      </div>
      <div class="af-more-strip-item">
        <div class="feature-icon"><i class="bi bi-folder"></i></div>
        <span>Templates<br>&amp; Folders</span>
      </div>
      <div class="af-more-strip-item">
        <div class="feature-icon"><i class="bi bi-graph-up"></i></div>
        <span>Message<br>Tracking</span>
      </div>
      <div class="af-more-strip-item">
        <div class="feature-icon"><i class="bi bi-lightning"></i></div>
        <span>AI-Powered<br>1:1 messaging<small class="af-unique">Unique</small></span>
      </div>
    </div>

    <button class="see-all-btn mt-4">See all features →</button>
  </div>
</section>

<!-- ===== SECTION 5: AI DARK ===== -->
<section id="ai-section">
  <div class="container" style="max-width:1200px">
    <div class="mb-4">
      <div class="ai-eyebrow"><i class="fa-solid fa-wand-magic-sparkles me-1"></i> AI - BUILT INTO EVERY WORKFLOW</div>
      <h2 class="ai-h2">Drive Sales with AI-powered SMS App for Zoho CRM.</h2>
      <p class="ai-sub">Every AI feature lives inside Zoho — no extra tab, no third-party tool. Your team gets smarter replies, faster responses, and less manual work without changing how they work today.</p>
    </div>

    <div class="row g-3">
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="ai-card">
          <div class="feature-icon" style="margin-bottom:16px;">
            <i class="bi bi-file-earmark-text"></i>
          </div>
          <h5 class="ai-card-title">Template with AI</h5>
          <p class="ai-card-desc">Get personalized template suggestions and create engaging templates with AI for higher engagement and better response rates.</p>
          <div class="ai-tags">
            <span class="ai-tag">AI Suggestions</span>
            <span class="ai-tag">Higher Engagement</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="ai-card">
          <div class="feature-icon" style="margin-bottom:16px;">
            <i class="bi bi-shield-check"></i>
          </div>
          <h5 class="ai-card-title">Compliance with AI</h5>
          <p class="ai-card-desc">Automate and manage compliance based on customer intent using AI, rather than relying on incoming keywords — smarter and more accurate.</p>
          <div class="ai-tags">
            <span class="ai-tag">Intent Detection</span>
            <span class="ai-tag">Auto Compliance</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="ai-card">
          <div class="feature-icon" style="margin-bottom:16px;">
            <i class="bi bi-chat-quote"></i>
          </div>
          <h5 class="ai-card-title">AI-suggested Replies</h5>
          <p class="ai-card-desc">Get AI-suggested responses based on the ongoing conversation context and engage in more meaningful conversations with less effort.</p>
          <div class="ai-tags">
            <span class="ai-tag">Context-Aware</span>
            <span class="ai-tag">Faster Replies</span>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 mb-4">
        <div class="ai-card">
          <div class="feature-icon" style="margin-bottom:16px;">
            <i class="bi bi-robot"></i>
          </div>
          <h5 class="ai-card-title">AI ChatAgent</h5>
          <p class="ai-card-desc">Enable the AI chatbot to respond to incoming messages in real time, 24/7, so that no opportunity is ever missed — even outside business hours.</p>
          <div class="ai-tags">
            <span class="ai-tag">24/7 Coverage</span>
            <span class="ai-tag">Zero Missed Leads</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Stats strip - white background -->
<div class="ai-stats-strip">
  <div class="container" style="max-width:1200px">
    <div class="ai-stats-row">
      <div class="ai-stat-block">
        <div class="ai-stat-num">50%</div>
        <div class="ai-stat-lbl">Faster<br>Follow-Ups</div>
      </div>
      <div class="ai-stat-block">
        <div class="ai-stat-num">53%</div>
        <div class="ai-stat-lbl">Reduced<br>Manual Effort</div>
      </div>
      <div class="ai-stat-block">
        <div class="ai-stat-num">35%</div>
        <div class="ai-stat-lbl">Higher<br>Engagement</div>
      </div>
      <div class="ai-stat-block">
        <div class="ai-stat-num">13+</div>
        <div class="ai-stat-lbl">Years CRM<br>Expertise</div>
      </div>
    </div>
  </div>
</div>

<!-- CTA strip -->
<div class="ai-cta-strip">
  <div class="container" style="max-width:1200px">
    <div class="ai-cta-inner">
      <div class="ai-cta-text">
        <p class="ai-cta-main">Add 360 SMS to Zoho CRM in one click - no middleware, no developer needed</p>
        <p class="ai-cta-sub">Truly Zoho-native &nbsp;·&nbsp; One-click install &nbsp;·&nbsp; No middleware &nbsp;·&nbsp; GDPR &amp; HIPAA compliant &nbsp;·&nbsp; 24/7 onboarding support included</p>
      </div>
      <div class="ai-cta-btns">
        <a href="#" class="btn-white-solid">Start for Free Today!</a>
        <a href="#contact_form" class="btn-white-outline">Book a Demo</a>
      </div>
    </div>
  </div>
</div>

<!-- ===== SECTION 6: INTEGRATION ===== -->
<section id="integration">
  <div class="container" style="max-width:1200px">
    <div class="row align-items-start g-4">
      <div class="col-lg-5">
        <h2 class="int-h2">360 SMS for Zoho CRM covers SMS, MMS, and WhatsApp - all in one app.</h2>
        <p class="int-para">Same app, same inbox, same features across every channel. Switch channels without starting from scratch.</p>
        <a href="#" class="btn-primary-solid d-inline-flex">Explore all features →</a>
      </div>
      <div class="col-lg-7">
        <div class="int-chips-all">
          <span class="int-ch int-sms">● SMS</span>
          <span class="int-ch int-wa">● WhatsApp</span>
          <span class="int-ch int-mms">● MMS</span>
          <span class="int-ch" style="background:#0070d2;color:#fff;border-color:#0070d2;">● Zoho-Native</span>
          <span class="int-ch">Bulk Messaging</span>
          <span class="int-ch">AI ChatAgent</span>
          <span class="int-ch">No-Code Automation</span>
          <span class="int-ch">Unified Inbox</span>
          <span class="int-ch">Drip Campaigns</span>
          <span class="int-ch">Templates &amp; Folders</span>
          <span class="int-ch">Link Tracking</span>
          <span class="int-ch">Message Scheduling</span>
          <span class="int-ch">GDPR Compliance</span>
          <span class="int-ch">AI-suggested Replies</span>
          <span class="int-ch">Conversation Manager</span>
        </div>
        <p class="int-note"><strong style="color:#0070d2;">Rest assured</strong> - you'll get all the same capabilities across SMS, MMS, and WhatsApp inside Zoho CRM. Switch channels without starting from scratch.</p>
      </div>
    </div>
  </div>
</section>

<!-- ===== SECTION 7: COMPARISON TABLE ===== -->
<section id="comparison">
  <div class="container" style="max-width:1200px">
    <div class="cmp-header-row">
      <div>
        <h2>360 SMS App vs other Zoho CRM messaging apps</h2>
        <p style="color:var(--muted);font-size:14px;margin-top:6px">See exactly why customers chose 360 SMS over every other option for Zoho CRM messaging.</p>
      </div>
      <div class="cmp-award-badge">
        <img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/📦.png" alt="">
        <div>
          <div style="font-weight:700;font-size:12px">Zoho Marketplace Verified</div>
          <div style="font-size:10.5px;color:#888">13+ years · 5★ rated</div>
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
                <i class="fa-solid fa-trophy" style="color:#f4c430;font-size:11px"></i>
                360 SMS for Zoho
              </div>
              <div class="cmp-us-sub">ZOHO-NATIVE · #1 RATED · 13+ YEARS</div>
            </th>
            <th class="cmp-th-other">
              <div style="font-weight:700;font-size:13px;color:#555">Others</div>
              <div style="font-size:11px;color:#999">On Zoho Marketplace</div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="cmp-feat">Zoho Native</td>
            <td class="cmp-us-cell"><span class="cmp-green">100%</span></td>
            <td class="cmp-other-cell"><span class="cmp-red">Partially</span></td>
          </tr>
          <tr class="cmp-alt">
            <td class="cmp-feat">Redirection to external portal</td>
            <td class="cmp-us-cell"><span class="cmp-green">No</span></td>
            <td class="cmp-other-cell"><span class="cmp-red">Yes</span></td>
          </tr>
          <tr>
            <td class="cmp-feat">AI-powered Messaging</td>
            <td class="cmp-us-cell"><span class="cmp-green">Yes</span></td>
            <td class="cmp-other-cell"><span class="cmp-red">No</span></td>
          </tr>
          <tr class="cmp-alt">
            <td class="cmp-feat">Channels Supported</td>
            <td class="cmp-us-cell"><span class="cmp-green">SMS, MMS &amp; WhatsApp</span></td>
            <td class="cmp-other-cell"><span class="cmp-red">SMS only</span></td>
          </tr>
          <tr>
            <td class="cmp-feat">No-Code Automation</td>
            <td class="cmp-us-cell"><span class="cmp-green">Yes</span></td>
            <td class="cmp-other-cell"><span class="cmp-red">Complex</span></td>
          </tr>
          <tr class="cmp-alt">
            <td class="cmp-feat">AI ChatAgent (24/7)</td>
            <td class="cmp-us-cell"><span class="cmp-green">Yes</span></td>
            <td class="cmp-other-cell"><span class="cmp-red">No</span></td>
          </tr>
          <tr>
            <td class="cmp-feat">GDPR / HIPAA Compliant</td>
            <td class="cmp-us-cell"><span class="cmp-green">Yes</span></td>
            <td class="cmp-other-cell"><span class="cmp-red">Partial</span></td>
          </tr>
          <tr class="cmp-alt">
            <td class="cmp-feat">Unified Messaging Console</td>
            <td class="cmp-us-cell"><span class="cmp-green">Yes</span></td>
            <td class="cmp-other-cell"><span class="cmp-red">No</span></td>
          </tr>
          <tr>
            <td class="cmp-feat">Support</td>
            <td class="cmp-us-cell"><span class="cmp-green">Free 24/7</span></td>
            <td class="cmp-other-cell"><span class="cmp-red">Paid</span></td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="cmp-cta-row">
      <div class="cmp-cta-btns">
        <span style="margin-top:12px;">See how 360 SMS is better than other Zoho messaging apps</span>
        <a href="#contact_form" class="btn-primary-solid">Schedule a free demo →</a>
        <a href="#" class="btn-outline-primary-custom">View on Zoho Marketplace ↗</a>
      </div>
    </div>
  </div>
</section>

<!-- ===== SECTION 11: INDUSTRIES ===== -->
<section class="sec py-5" style="background: #F7F7F5;">
  <div class="container py-4">
    <div class="mb-5">
      <h2 class="fw-bold mb-3 fs-32 ls-n1 c-ink">360 SMS for Zoho CRM by industry</h2>
      <p class="text-muted mw-900 fs-17 lh-16">Industry-specific Zoho CRM messaging workflows, pre-built templates, and proven use cases - ready on day one.</p>
    </div>
    <div class="row g-3">
      <?php
      $industries = [
        ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-2-2.png', 'Recruitment', 'Candidate outreach, interview invites, and onboarding greetings via SMS &amp; WhatsApp'],
        ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-5.png', 'Real Estate', 'Property alerts with a personal voice, buyer re-engagement and follow-ups'],
        ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-1-4.png', 'Finance &amp; Banking', 'Rate announcements, loan follow-ups, and advisor check-ins'],
        ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-3-2.png', 'Education', 'Student communication, enrollment updates, and campus announcements'],
        ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-4-2.png', 'Healthcare', 'Appointment reminders, patient follow-ups, and care notifications'],
        ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-6.png', 'Non-profit', 'Community campaigns, donor engagement, and volunteer coordination'],
        ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-5.png', 'Retail', 'Promotions, order updates, and loyalty program communications'],
      ];
      foreach ($industries as $ind): ?>
        <div class="col-lg-3 col-md-6">
          <div class="ind-card p-4 h-100 border rounded-4 bg-white shadow-sm">
            <div class="mb-2 fs-3">
              <img src="<?= esc_url($ind[0]); ?>" alt="<?= esc_attr($ind[1]); ?>" class="industry-icon">
            </div>
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

<!-- ===== SECTION 12: TRUST & TESTIMONIALS ===== -->
<section class="sec py-5 bg-white bdr-section">
  <div class="container py-4">
    <div class="mb-5">
      <h2 class="fw-bold mb-3 fs-32 ls-n1 c-ink">What teams say about 360 SMS for Zoho CRM</h2>
      <p class="text-muted fs-17">Trusted by teams across industries. Powered by 13+ years of CRM innovation.</p>
    </div>
    <div class="row align-items-center g-4 mb-5">
      <div class="col-12"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/image-84.png" alt="companies-logo" class="img-fluid"></div>
    </div>
    <div class="row g-4">
      <?php
      $testimonials = [
        ['Khansaa Algassid', 'Administrator · Zaman International Michigan', '"I\'m very pleased with the app and customer service. They go above and beyond to resolve our issues. The team provides great feedback and is always there to help whenever we need them."'],
        ['Wesley Gordon', 'IT Manager · Global Vision International', '"We have been using the 360 SMS app for the past few months. It was a seamless setup, and it is very easy to use; not much training is needed for the users. The team is very knowledgeable."'],
        ['Alex R.', 'CRM Lead · Real Estate', '"WhatsApp campaigns from Zoho CRM generated 3× lead engagement. The Zoho-native setup meant our team was live in one day — no developer, no middleware."'],
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

<!-- ===== SECTION 13: CTA BAR ===== -->
<section class="bg-cta c-white" id="cta-bar-13" style="padding: 20px 0;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <h2 class="fw-bold mb-2 cta-bar-h" style="font-weight:800;color:#fff;font-size:17px;line-height:25.5px;">
          Healthcare, finance, real estate, education — book a demo built around your Zoho use case.</h2>
        <p class="mb-0 opacity-75 fs-16">Truly Zoho-native · One-click install · No middleware · 24/7 onboarding support included.</p>
      </div>
      <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
        <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
          <a href="#contact_form" 
             class="btn btn-light px-4 py-2 fw-bold btn-cta-light c-brand text-decoration-none">
             Book a Demo
          </a>
          <a href="#" 
             class="btn btn-outline-light px-4 py-2 fw-bold btn-cta-light text-decoration-none">
             Start for Free
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ===== SECTION 15: FAQ ===== -->
<section class="sec py-5 bg-white">
  <div class="container py-4">
    <div class="mb-5">
      <h2 class="fw-bold mb-3 fs-32 ls-n1">360 SMS for Zoho CRM - frequently asked questions</h2>
      <p class="text-muted fs-14">Everything you need to know about 360 SMS App for Zoho CRM.</p>
    </div>
    <div class="border rounded-4 overflow-hidden shadow-sm bg-white">
      <?php
      $faqs = [
        ['Can I send bulk SMS/WhatsApp campaigns from Zoho CRM?',
         'Yes. With 360 SMS for Zoho CRM, you can send personalized bulk SMS and WhatsApp messages directly from Zoho. You can reach thousands of leads or customers at once — while maintaining personalization, compliance, and complete visibility into delivery, engagement, and response metrics inside Zoho.'],
        ['How do I install 360 SMS App in Zoho CRM?',
         'Install 360 SMS from the Zoho Marketplace in one click. It is truly Zoho-native — no middleware, no external login, no developer required. Your data stays in Zoho throughout. Our team assists with onboarding and setup as part of the process. You can be live in one day, not weeks.'],
        ['Does it support MMS (images, PDFs, videos) in Zoho?',
         'Yes. 360 SMS supports MMS messaging from Zoho CRM, allowing you to send images, PDFs, videos, and other rich media attachments. MMS can be used in both individual and bulk messaging campaigns — all from within Zoho CRM with no external tools.'],
        ['Can I run drip or automated messaging journeys in Zoho CRM?',
         'Absolutely. You can set up automated messaging workflows on any CRM object without writing a single line of code. Build multi-step drip sequences that include SMS, MMS, and WhatsApp as steps, triggered by CRM events, time delays, or customer actions — all managed within Zoho.'],
        ['Is 360 SMS for Zoho CRM GDPR and HIPAA compliant?',
         'Yes. 360 SMS includes built-in compliance tools to manage opt-ins, opt-outs, and messaging regulations automatically. The app is GDPR, TCPA, and HIPAA ready — with automated opt-out management, time-zone aware scheduling, and custom URL shortening for brand-safe communications.'],
        ['Is there a WhatsApp chatbot or auto-reply support inside Zoho?',
         'Yes. The AI ChatAgent feature enables 24/7 automated responses to incoming WhatsApp and SMS messages inside Zoho CRM. The AI responds in real time based on conversation context and customer intent — so no opportunity is ever missed, even outside business hours.'],
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

<!-- ===== SECTION 14: RESOURCES ===== -->
<section class="sec py-5" style="background: #F7F7F5;">
  <div class="container py-4">
    <h2 class="fw-bold mb-5 fs-32 ls-n1 c-ink">Zoho CRM messaging resources - guides, case studies, and setup help</h2>
    <div class="row g-4">
      <?php
      $resources = [
        ['https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800', 'Case Study'],
        ['https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=800', 'Case Study'],
        ['https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800', 'Case Study'],
        ['https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800', 'Case Study'],
        ['https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=800', 'Case Study'],
        ['https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800', 'Case Study'],
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
                <span class="badge rounded-pill px-3 py-2 text-dark bg-badge-blue fs-11 fw-500"><i class="bi bi-calendar3 me-2"></i>Jan 5, 2025</span>
              </div>
              <h4 class="fw-bold mb-4 fs-21 lh-14 c-ink">So how did the classical Latin become so incoherent</h4>
              <div class="mt-auto">
                <button class="btn btn-brand px-4 py-2 fw-bold rounded-2 fs-14 rb-btn">Read More</button>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
  <div id="contact_form"></div>
</section>

<!-- ===== SECTION 17 + 18: GET IN TOUCH ===== -->
<section class="sec-17-18 py-5 mb-5">
  <div class="container">
    <div class="sec-17-18-wrap position-relative">
      <div class="sec-17-bg-card">
        <div class="sec-17-content">
          <div class="text-uppercase fw-bold text-muted small ls-1 mb-3">CONTACT US</div> 
          <h2 class="fw-800 ls-n1 mb-4">Get in touch — hear back in an hour or less.</h2>
          <p class="text-muted fs-14 mb-5 lh-16">Whether you need a 360 SMS demo, a pricing quote, or help setting up in Zoho CRM, our team is available 24×7 across the US, UK, AU, and IN.</p>
          <div class="d-flex flex-column gap-3">
            <div class="d-flex align-items-center gap-3">
              <div class="sec-17-check"><i class="bi bi-check2"></i></div>
              <span class="fw-500 text-muted fs-16">24×7 global support — US, UK, AU, IN</span>
            </div>
            <div class="d-flex align-items-center gap-3">
              <div class="sec-17-check"><i class="bi bi-check2"></i></div>
              <span class="fw-500 text-muted fs-16">Average first response time under an hour</span>
            </div>
            <div class="d-flex align-items-center gap-3">
              <div class="sec-17-check"><i class="bi bi-check2"></i></div>
              <span class="fw-500 text-muted fs-16">13+ years helping CRM teams succeed</span>
            </div>
          </div>
        </div>
      </div>
      <div class="sec-17-form-float">
        <div class="contact-card">
          <h3 class="fw-bold fs-21 mb-1">Drop us a message</h3>
          <p class="text-muted small mb-4">We'll connect you with the right expert.</p>
          <?= do_shortcode('[contact_pageshortcode]') ?>
          <p class="text-center text-muted small mt-3 mb-0" style="font-size: 11px;">
            By submitting you agree to our <a href="<?php echo home_url('/privacy-policy/'); ?>" class="text-muted">Privacy Policy</a>.
          </p>
        </div>
      </div>
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
    get_footer('zoho');
?>