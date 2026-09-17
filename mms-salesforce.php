<?php
/*
Template Name:Salesforce MMS
*/
    get_header('test');
?>
  <style>
    :root {
      --blue: #0070d2;
      --blue-dark: #005fb2;
      --navy: #0a2540;
      --dark: #1a1a1a;
      --muted: #6c757d;
      --light-bg: #f5f7fa;
      --border: #e0e0e0;
      --card-shadow: 0 2px 12px rgba(0,0,0,0.07);
      --font: 'Plus Jakarta Sans', sans-serif;
    }
    *, body { font-family: var(--font); }
    body { font-size: 15px; color: var(--dark); line-height: 1.65; }
    section { padding: 80px 0; }
    @media (max-width: 767px) { section { padding: 48px 0; } }

    /* Badges & Buttons */
    .badge-blue { background: #e8f2fc; color: var(--blue); font-size: 11px; font-weight: 700; padding: 5px 12px; border-radius: 20px; display: inline-block; }
    .btn-primary-custom { background: var(--blue); color: #fff; border: 2px solid var(--blue); border-radius: 50px; padding: 11px 28px; font-weight: 600; font-size: 14px; text-decoration: none; display: inline-block; transition: .2s; }
    .btn-primary-custom:hover { background: var(--blue-dark); border-color: var(--blue-dark); color: #fff; }
    .btn-outline-custom { background: transparent; color: var(--blue); border: 2px solid var(--blue); border-radius: 50px; padding: 11px 28px; font-weight: 600; font-size: 14px; text-decoration: none; display: inline-block; transition: .2s; }
    .btn-outline-custom:hover { background: var(--blue); color: #fff; }
    .btn-white-solid { background: #fff; color: var(--blue); border: 2px solid #fff; border-radius: 50px; padding: 11px 28px; font-weight: 700; font-size: 14px; text-decoration: none; display: inline-block; transition: .2s; }
    .btn-white-solid:hover { background: #e8f2fc; color: var(--blue); }
    .btn-white-outline { background: transparent; color: #fff; border: 2px solid rgba(255,255,255,0.7); border-radius: 50px; padding: 11px 28px; font-weight: 600; font-size: 14px; text-decoration: none; display: inline-block; transition: .2s; }
    .btn-white-outline:hover { background: rgba(255,255,255,0.15); }

    /* HERO */
    #hero { background: linear-gradient(to right, #eff6ff, #f7f7f5); padding: 80px 0 60px; }
    #hero h1 { font-size: clamp(28px, 4vw, 44px); font-weight: 800; line-height: 1.2; color: var(--dark); margin-bottom: 18px; }
    #hero p.lead { color: var(--muted); font-size: 15px; line-height: 1.7; max-width: 480px; }
    .trust-text { font-size: 12px; color: var(--muted); margin-top: 10px; }
    .hero-image-wrap { position: relative; padding: 24px; }
    .hero-mockup { background: #f0f6ff; border-radius: 16px; overflow: hidden; box-shadow: 0 20px 60px rgba(0,112,210,0.15); width: 100%; }
    .mockup-bar { background: var(--blue); border-radius: 8px 8px 0 0; height: 36px; display: flex; align-items: center; padding: 0 16px; gap: 6px; }
    .mockup-dot { width: 10px; height: 10px; border-radius: 50%; background: rgba(255,255,255,0.5); }
    .mockup-body { background: #fff; border-radius: 0 0 8px 8px; padding: 20px; min-height: 220px; }
    .mockup-row { display: flex; gap: 10px; margin-bottom: 10px; align-items: flex-start; }
    .mockup-avatar { width: 32px; height: 32px; border-radius: 50%; background: #c8dff7; flex-shrink: 0; display: flex; align-items: center; justify-content: center; font-size: 11px; color: var(--blue); font-weight: 700; }
    .mockup-bubble { background: #e8f2fc; border-radius: 12px 12px 12px 0; padding: 8px 14px; font-size: 12px; color: #333; max-width: 200px; }
    .mockup-bubble.right { background: var(--blue); color: #fff; border-radius: 12px 12px 0 12px; margin-left: auto; }
    .mockup-img-bubble { background: #e8f2fc; border-radius: 12px; width: 80px; height: 60px; display: flex; align-items: center; justify-content: center; color: var(--blue); font-size: 20px; }
    .stat-badge { position: absolute; background: #fff; border-radius: 10px; box-shadow: 0 4px 16px rgba(0,0,0,0.12); padding: 8px 14px; text-align: center; min-width: 72px; z-index: 2; }
    .stat-badge .num { font-size: 17px; font-weight: 800; color: var(--dark); line-height: 1; }
    .stat-badge .lbl { font-size: 10px; color: var(--muted); margin-top: 2px; }
    .badge-tl { top: 8px; left: 0; }
    .badge-tr { top: 8px; right: 0; }
    .badge-ml { top: 50%; left: -10px; transform: translateY(-50%); }
    .badge-mr { top: 50%; right: -10px; transform: translateY(-50%); }
    .badge-bl { bottom: 8px; left: 10px; }
    .badge-br { bottom: 8px; right: 0; }
    @media (max-width: 991px) { .stat-badge { display: none; } }

    /* HOW IT WORKS */
    #how-it-works { background: #fff; }
    #how-it-works .section-heading { font-size: clamp(22px, 3vw, 32px); font-weight: 800; color: var(--dark); }
    .col-heading { font-size: 17px; font-weight: 700; color: var(--dark); margin-bottom: 20px; padding-bottom: 12px; border-bottom: 2px solid #e8f2fc; }
    .feature-row { display: flex; gap: 14px; margin-bottom: 18px; align-items: flex-start; }
    .feature-icon { width: 36px; height: 36px; border-radius: 8px; background: #e8f2fc; display: flex; align-items: center; justify-content: center; color: var(--blue); font-size: 15px; flex-shrink: 0; margin-top: 2px; }
    .feature-row h6 { font-size: 14px; font-weight: 700; margin: 0 0 3px; color: var(--dark); }
    .feature-row p { font-size: 13px; color: var(--muted); margin: 0; line-height: 1.5; }

    /* APP FEATURES TABS */
    #app-features { background: var(--light-bg); }
    #app-features .section-heading { font-size: clamp(20px, 2.5vw, 28px); font-weight: 800; color: var(--dark); }
    .feature-tabs .nav-link { color: var(--dark); font-size: 14px; font-weight: 500; padding: 12px 18px; border-radius: 8px; border-left: 3px solid transparent; background: #fff; margin-bottom: 6px; transition: .2s; text-align: left; border-right: none; border-top: none; border-bottom: none; }
    .feature-tabs .nav-link:hover { background: #e8f2fc; color: var(--blue); }
    .feature-tabs .nav-link.active { background: var(--blue); color: #fff; border-left-color: var(--blue-dark); font-weight: 600; }
    .tab-content-box { background: #fff; border-radius: 14px; padding: 30px; box-shadow: var(--card-shadow); }
    .tab-content-box h4 { font-size: 20px; font-weight: 800; color: var(--dark); margin-bottom: 12px; }
    .tab-content-box p { color: var(--muted); font-size: 14px; line-height: 1.7; }
    .tab-content-box .learn-more { color: var(--blue); font-weight: 600; font-size: 14px; text-decoration: none; }
    .tab-content-box .learn-more:hover { text-decoration: underline; }
    .tab-mockup { background: #e8f2fc; border-radius: 10px; height: 160px; display: flex; align-items: center; justify-content: center; color: var(--blue); font-size: 40px; margin-top: 20px; }

    /* STATS BAR */
    #stats-bar { background: #fff; padding: 36px 0; border-top: 1px solid var(--border); border-bottom: 1px solid var(--border); }
    .stat-item { text-align: center; padding: 10px 0; }
    .stat-item .big-num { font-size: 28px; font-weight: 800; color: var(--dark); line-height: 1; display: block; }
    .stat-item .small-lbl { font-size: 12px; color: var(--muted); margin-top: 4px; display: block; }
    .stat-divider { border-left: 1px solid var(--border); height: 40px; }
    @media (max-width: 767px) { .stat-divider { display: none; } }

    /* AI DARK SECTION */
    #ai-section { background: #0a2540; padding: 80px 0; }
    #ai-section .section-heading { color: #fff; font-size: clamp(22px, 3vw, 34px); font-weight: 800; }
    #ai-section .sub-text { color: rgba(255,255,255,0.65); font-size: 15px; max-width: 600px; margin: 0 auto; }
    .ai-card { background: rgba(255,255,255,0.07); border: 1px solid rgba(255,255,255,0.1); border-radius: 14px; padding: 28px; height: 100%; transition: .2s; }
    .ai-card:hover { background: rgba(255,255,255,0.11); transform: translateY(-3px); }
    .ai-card-icon { width: 48px; height: 48px; border-radius: 10px; background: rgba(255,255,255,0.12); display: flex; align-items: center; justify-content: center; font-size: 20px; color: #5bc8ff; margin-bottom: 16px; }
    .ai-card h5 { color: #fff; font-size: 16px; font-weight: 700; margin-bottom: 10px; }
    .ai-card p { color: rgba(255,255,255,0.6); font-size: 13px; line-height: 1.6; margin: 0; }
    .ai-stat-item { text-align: center; padding: 10px 20px; }
    .ai-stat-item .big { font-size: 36px; font-weight: 800; color: #fff; line-height: 1; }
    .ai-stat-item .small { font-size: 12px; color: rgba(255,255,255,0.6); margin-top: 4px; }
    .ai-cta-bar { border-top: 1px solid rgba(255,255,255,0.1); padding-top: 36px; }

    /* INTEGRATION */
    #integration { background: #fff; }
    .badge-sf { background: #fff3cd; color: #856404; font-size: 12px; font-weight: 600; padding: 4px 12px; border-radius: 20px; display: inline-block; border: 1px solid #ffc107; }
    #integration h2 { font-size: clamp(22px, 3vw, 32px); font-weight: 800; color: var(--dark); line-height: 1.25; margin: 14px 0 16px; }
    .rating-row { display: flex; align-items: center; gap: 8px; flex-wrap: wrap; margin: 16px 0; }
    .stars { color: #f5a623; font-size: 14px; }
    .rating-score { font-weight: 800; font-size: 16px; color: var(--dark); }
    .rating-platform { font-size: 11px; color: var(--muted); background: #f5f5f5; padding: 3px 8px; border-radius: 4px; }
    .expand-link { color: var(--blue); font-size: 13px; font-weight: 600; text-decoration: none; display: block; margin: 8px 0 20px; }
    .integration-mockup { background: #e8f2fc; border-radius: 16px; min-height: 300px; display: flex; align-items: center; justify-content: center; box-shadow: 0 8px 30px rgba(0,0,0,0.10); padding: 30px; }
    .inline-stat { display: flex; align-items: center; gap: 8px; margin-bottom: 10px; }
    .inline-stat .icon { color: var(--blue); font-size: 14px; width: 20px; }
    .inline-stat span { font-size: 13px; color: var(--muted); }
    .inline-stat strong { color: var(--dark); }

    /* COMPARISON TABLE */
    #comparison { background: #f8f9fa; }
    #comparison h2 { font-size: clamp(22px, 3vw, 32px); font-weight: 800; color: var(--dark); }
    .table-wrap { overflow-x: auto; border-radius: 12px; box-shadow: var(--card-shadow); }
    .comp-table { width: 100%; min-width: 650px; border-collapse: collapse; background: #fff; }
    .comp-table thead th { padding: 14px 18px; font-size: 13px; font-weight: 700; border: 1px solid #dee2e6; }
    .comp-table thead th:first-child { background: #f5f7fa; color: var(--muted); text-align: left; }
    .comp-table thead th.highlight { background: var(--blue); color: #fff; text-align: center; }
    .comp-table thead th.other { background: #f8f9fa; color: var(--dark); text-align: center; }
    .comp-table tbody tr:nth-child(even) { background: #fafafa; }
    .comp-table tbody tr:hover { background: #f0f7ff; }
    .comp-table tbody td { padding: 12px 18px; border: 1px solid #dee2e6; font-size: 13px; text-align: center; }
    .comp-table tbody td:first-child { text-align: left; font-weight: 600; color: var(--dark); }
    .check { color: #28a745; font-size: 16px; }
    .cross { color: #dc3545; font-size: 15px; }
    .badge-green { background: #d4edda; color: #155724; font-size: 11px; font-weight: 600; padding: 3px 10px; border-radius: 20px; }
    .badge-partial { background: #fff3cd; color: #856404; font-size: 11px; font-weight: 600; padding: 3px 10px; border-radius: 20px; }

    /* INDUSTRY */
    #industry { background: var(--light-bg); }
    #industry h2 { font-size: clamp(22px, 3vw, 32px); font-weight: 800; color: var(--dark); }
    .industry-card { background: #fff; border-radius: 12px; padding: 26px; box-shadow: var(--card-shadow); height: 100%; transition: .2s; }
    .industry-card:hover { transform: translateY(-4px); box-shadow: 0 8px 24px rgba(0,0,0,0.1); }
    .industry-icon { width: 48px; height: 48px; border-radius: 10px; background: #e8f2fc; display: flex; align-items: center; justify-content: center; color: var(--blue); font-size: 20px; margin-bottom: 16px; }
    .industry-card h5 { font-size: 15px; font-weight: 700; color: var(--dark); margin-bottom: 8px; }
    .industry-card p { font-size: 13px; color: var(--muted); line-height: 1.6; margin-bottom: 12px; }
    .industry-card a { color: var(--blue); font-size: 13px; font-weight: 600; text-decoration: none; }

    /* TRUSTED BY */
    #trusted { background: #fff; }
    #trusted h2 { font-size: clamp(22px, 3vw, 30px); font-weight: 800; color: var(--dark); }
    .logo-grid { display: flex; flex-wrap: wrap; justify-content: center; align-items: center; gap: 10px; padding: 24px 0; }
    .logo-item { background: #f5f7fa; border-radius: 8px; padding: 12px 22px; font-size: 12px; font-weight: 700; color: #aaa; letter-spacing: 0.5px; transition: .2s; border: 1px solid #ebebeb; }
    .logo-item:hover { color: var(--blue); border-color: #c8dff7; background: #e8f2fc; }
    .review-col { text-align: center; padding: 20px; border-radius: 10px; background: var(--light-bg); }
    .review-col .stars { font-size: 16px; margin-bottom: 6px; }
    .review-col .score { font-size: 22px; font-weight: 800; color: var(--dark); }
    .review-col .platform { font-size: 12px; color: var(--muted); }

    /* CTA BANNER */
    #cta-banner { background: var(--blue); padding: 60px 0; }
    #cta-banner h2 { color: #fff; font-size: clamp(20px, 3vw, 30px); font-weight: 800; }
    #cta-banner p { color: rgba(255,255,255,0.8); font-size: 14px; }

    /* FAQ */
    #faq { background: #fff; }
    #faq h2 { font-size: clamp(20px, 3vw, 30px); font-weight: 800; color: var(--dark); }
    .accordion-item { border: none; border-bottom: 1px solid var(--border); }
    .accordion-button { font-size: 15px; font-weight: 600; color: var(--dark); background: #fff; box-shadow: none; padding: 18px 0; }
    .accordion-button:not(.collapsed) { color: var(--blue); background: #fff; box-shadow: none; }
    .accordion-button:not(.collapsed)::after { filter: invert(30%) sepia(90%) saturate(1000%) hue-rotate(190deg); }
    .accordion-body { font-size: 14px; color: var(--muted); line-height: 1.7; padding: 0 0 18px; }

    /* RESOURCES */
    #resources { background: var(--light-bg); }
    #resources h2 { font-size: clamp(20px, 3vw, 28px); font-weight: 800; color: var(--dark); }
    .resource-card { background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.07); height: 100%; transition: .2s; }
    .resource-card:hover { transform: translateY(-3px); box-shadow: 0 8px 24px rgba(0,0,0,0.1); }
    .resource-img { height: 150px; width: 100%; background: #c8dff7; display: flex; align-items: center; justify-content: center; color: var(--blue); font-size: 32px; }
    .resource-body { padding: 16px; }
    .resource-badge { background: var(--blue); color: #fff; font-size: 10px; font-weight: 700; padding: 3px 10px; border-radius: 20px; display: inline-block; margin-bottom: 8px; text-transform: uppercase; letter-spacing: 0.5px; }
    .resource-body h6 { font-size: 14px; font-weight: 700; color: var(--dark); line-height: 1.4; margin-bottom: 12px; }
    .btn-read-more { background: #e74c3c; color: #fff; border: none; border-radius: 6px; padding: 7px 16px; font-size: 12px; font-weight: 600; text-decoration: none; display: inline-block; transition: .2s; }
    .btn-read-more:hover { background: #c0392b; color: #fff; }

    /* CONTACT */
    #contact { background: #eef4ff; }
    #contact h2 { font-size: clamp(22px, 3vw, 32px); font-weight: 800; color: var(--dark); line-height: 1.25; }
    .check-list { list-style: none; padding: 0; margin: 20px 0; }
    .check-list li { font-size: 15px; color: var(--dark); margin-bottom: 12px; display: flex; align-items: flex-start; gap: 10px; line-height: 1.6; }
    .check-list li i { color: var(--blue); font-size: 16px; margin-top: 2px; flex-shrink: 0; }
    .contact-form-box { background: #fff; border-radius: 14px; padding: 32px; box-shadow: var(--card-shadow); }
    .form-control, .form-select { border: 1px solid #d0d0d0; border-radius: 8px; font-size: 14px; padding: 10px 14px; color: var(--dark); transition: .2s; }
    .form-control:focus, .form-select:focus { border-color: var(--blue); box-shadow: 0 0 0 3px rgba(0,112,210,0.1); }
    .btn-submit { background: var(--blue); color: #fff; border: none; border-radius: 8px; padding: 13px; font-size: 15px; font-weight: 700; width: 100%; transition: .2s; cursor: pointer; }
    .btn-submit:hover { background: var(--blue-dark); }

    @media (max-width: 767px) {
      #hero h1 { font-size: 26px; }
      .ai-stat-item .big { font-size: 26px; }
      .btn-primary-custom, .btn-outline-custom, .btn-white-solid, .btn-white-outline { width: 100%; text-align: center; margin-bottom: 8px; }
    }
    .btn-primary-custom {
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
    .btn-outline-custom {
        background: transparent;
        color: var(--blue);
        border: 2px solid var(--blue);
        border-radius: 8px;
        padding: 7px 18px;
        font-weight: 600;
        font-size: 13.5px;
        text-decoration: none;
        display: inline-block;
        transition: .2s;
    }
  </style>

<!-- SECTION 1 — HERO -->
<section id="hero">
  <div class="container" style="max-width:1200px">
    <div class="row align-items-center g-5">
      <div class="col-lg-6">
        <span class="badge-blue mb-3 d-inline-block"><i class="fa-solid fa-bolt me-1"></i> Salesforce MMS · Send Multimedia Messages from Salesforce · 300KB</span>
        <h1><span class="f-heading" style="color: #0057B8;">Salesforce MMS</span> —<br>Send Images, Video &amp;<br> Docs from Your CRM.</h1>
        <p class="lead mb-4">360 SMS is a Salesforce-native MMS tool trusted by 60K+ teams. Send rich media — images, GIFs, videos, PDFs &amp; vCards — directly from any Salesforce object, workflow, or automation — no third-party middleware.</p>
        <div class="d-flex flex-wrap gap-3 align-items-center">
          <a href="#" class="btn-primary-custom"><i class="fa-regular fa-calendar me-2"></i>Book a Demo →</a>
          <a href="#" class="btn-outline-custom"><i class="fa-solid fa-rocket me-2"></i>Start For Free</a>
        </div>
        <div class="rating-img" style="margin-top:15px;"><img class="img-fluid" src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Container-1.png"></div>
      </div>
      <div class="col-lg-6">
        <div class="hero-image-wrap">
          <img class="img-fluid" src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Right_-inbox-mock-1-1.png">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 2 — HOW IT WORKS -->
<section id="how-it-works">
  <div class="container" style="max-width:1200px">
    <div class="text-center mb-5">
      <h2 class="section-heading">How Salesforce MMS integration works — send, receive, and automate.</h2>
      <p class="text-muted mx-auto mt-3" style="max-width:680px;font-size:15px">Connect your Salesforce CRM to any MMS channel. Send rich media at scale, automate follow-ups, and receive replies — all natively inside Salesforce without middleware.</p>
    </div>
    <div class="row g-5">
      <div class="col-lg-6">
        <div class="col-heading"><i class="fa-solid fa-photo-film me-2" style="color:var(--blue)"></i>Send pictures, video, audio, and more</div>
        <div class="feature-row">
          <div class="feature-icon"><i class="fa-solid fa-image"></i></div>
          <div><h6>Images &amp; GIFs</h6><p>Send JPG, PNG, and animated GIFs up to 300KB directly from any Salesforce record, list view, or automation trigger.</p></div>
        </div>
        <div class="feature-row">
          <div class="feature-icon"><i class="fa-solid fa-video"></i></div>
          <div><h6>Video &amp; Audio Clips</h6><p>Deliver short product videos and voice messages that open instantly on any smartphone — no app install required.</p></div>
        </div>
        <div class="feature-row">
          <div class="feature-icon"><i class="fa-solid fa-file-pdf"></i></div>
          <div><h6>PDFs &amp; Documents</h6><p>Attach brochures, contracts, or presentations as MMS. Recipients open them directly in their native messages app.</p></div>
        </div>
        <div class="feature-row">
          <div class="feature-icon"><i class="fa-solid fa-address-card"></i></div>
          <div><h6>vCards &amp; Location Pins</h6><p>Share contact cards and GPS location pins in a single tap — perfect for field teams and real-time delivery alerts.</p></div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="col-heading"><i class="fa-solid fa-chart-line me-2" style="color:var(--blue)"></i>Improve ROI with smart campaigns</div>
        <div class="feature-row">
          <div class="feature-icon"><i class="fa-solid fa-bullhorn"></i></div>
          <div><h6>Bulk MMS Campaigns</h6><p>Send rich media to thousands of Salesforce contacts in a single click — directly from Campaign, List View, or Report.</p></div>
        </div>
        <div class="feature-row">
          <div class="feature-icon"><i class="fa-solid fa-robot"></i></div>
          <div><h6>Automated Workflows</h6><p>Trigger MMS via Salesforce Flow, Process Builder, or Apex — fully automated campaigns with zero additional coding needed.</p></div>
        </div>
        <div class="feature-row">
          <div class="feature-icon"><i class="fa-solid fa-reply"></i></div>
          <div><h6>Two-way MMS Replies</h6><p>Receive and manage inbound MMS replies inside Salesforce. Smart routing assigns conversations to the right agent automatically.</p></div>
        </div>
        <div class="feature-row">
          <div class="feature-icon"><i class="fa-solid fa-chart-bar"></i></div>
          <div><h6>Delivery &amp; Read Analytics</h6><p>Track delivery, open, and click-through rates per MMS message. Generate native Salesforce reports to optimize campaigns.</p></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 3 — APP FEATURES TABS -->
<section id="app-features">
  <div class="container" style="max-width:1200px">
    <h2 class="section-heading mb-5">Salesforce MMS app features used by <span style="color:var(--blue)">60K+</span> teams daily</h2>
    <div class="row g-4">
      <div class="col-lg-4">
        <div class="nav flex-column feature-tabs" id="featureTab" role="tablist">
          <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab"><i class="fa-solid fa-paper-plane me-2"></i>Send MMS from Salesforce</button>
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab"><i class="fa-solid fa-inbox me-2"></i>Receive &amp; Manage Replies</button>
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab"><i class="fa-solid fa-layer-group me-2"></i>Multi-Channel Messaging</button>
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab"><i class="fa-solid fa-gear me-2"></i>Salesforce Flow Automation</button>
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab"><i class="fa-solid fa-chart-pie me-2"></i>Analytics &amp; Reporting</button>
          <button class="nav-link" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab"><i class="fa-solid fa-shield-halved me-2"></i>Compliance &amp; Opt-Out</button>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="tab-content">
          <div class="tab-pane fade show active" id="tab1" role="tabpanel">
            <div class="tab-content-box">
              <h4>Send MMS from Salesforce</h4>
              <p>Send images, videos, PDFs, GIFs, vCards, and audio files directly from any Salesforce record — Leads, Contacts, Opportunities, Cases, and custom objects. No third-party app or middleware needed.</p>
              <a href="#" class="learn-more">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
              <div class="tab-mockup"><i class="fa-solid fa-paper-plane"></i></div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab2" role="tabpanel">
            <div class="tab-content-box">
              <h4>Receive &amp; Manage Replies</h4>
              <p>All inbound MMS replies are captured and displayed directly inside Salesforce. Route conversations to the right agent, team, or department automatically using intelligent routing rules.</p>
              <a href="#" class="learn-more">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
              <div class="tab-mockup"><i class="fa-solid fa-inbox"></i></div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab3" role="tabpanel">
            <div class="tab-content-box">
              <h4>Multi-Channel Messaging</h4>
              <p>Beyond MMS, 360 SMS supports SMS, WhatsApp, Facebook Messenger, RCS, Telegram, and 30+ more channels — all managed from a single Salesforce app. Unify all customer messaging in one place.</p>
              <a href="#" class="learn-more">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
              <div class="tab-mockup"><i class="fa-solid fa-layer-group"></i></div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab4" role="tabpanel">
            <div class="tab-content-box">
              <h4>Salesforce Flow Automation</h4>
              <p>Trigger MMS messages automatically via Salesforce Flow, Process Builder, or Apex triggers. Send appointment reminders, delivery confirmations, and follow-ups without any manual effort.</p>
              <a href="#" class="learn-more">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
              <div class="tab-mockup"><i class="fa-solid fa-gear"></i></div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab5" role="tabpanel">
            <div class="tab-content-box">
              <h4>Analytics &amp; Reporting</h4>
              <p>Track delivery rates, open rates, click-throughs, and reply rates for every MMS campaign. Native Salesforce reports and dashboards give you full visibility into campaign performance.</p>
              <a href="#" class="learn-more">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
              <div class="tab-mockup"><i class="fa-solid fa-chart-pie"></i></div>
            </div>
          </div>
          <div class="tab-pane fade" id="tab6" role="tabpanel">
            <div class="tab-content-box">
              <h4>Compliance &amp; Opt-Out</h4>
              <p>Handle opt-outs, STOP requests, and TCPA/GDPR compliance rules automatically. Opt-out data is synced back to Salesforce records instantly — keeping your teams fully compliant at all times.</p>
              <a href="#" class="learn-more">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
              <div class="tab-mockup"><i class="fa-solid fa-shield-halved"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 4 — STATS BAR -->
<section id="stats-bar">
  <div class="container" style="max-width:1200px">
    <div class="row align-items-center justify-content-center g-3 text-center">
      <div class="col-6 col-md-auto"><div class="stat-item"><span class="big-num">Unlimited</span><span class="small-lbl">Message Logs</span></div></div>
      <div class="d-none d-md-flex col-auto align-items-center"><div class="stat-divider"></div></div>
      <div class="col-6 col-md-auto"><div class="stat-item"><span class="big-num">2.5K+</span><span class="small-lbl">Salesforce Orgs</span></div></div>
      <div class="d-none d-md-flex col-auto align-items-center"><div class="stat-divider"></div></div>
      <div class="col-6 col-md-auto"><div class="stat-item"><span class="big-num">5.1M+</span><span class="small-lbl">MMS Sent Daily</span></div></div>
      <div class="d-none d-md-flex col-auto align-items-center"><div class="stat-divider"></div></div>
      <div class="col-6 col-md-auto"><div class="stat-item"><span class="big-num">1.5K+</span><span class="small-lbl">Messages / Min</span></div></div>
      <div class="d-none d-md-flex col-auto align-items-center"><div class="stat-divider"></div></div>
      <div class="col-6 col-md-auto"><div class="stat-item"><span class="big-num">60K+</span><span class="small-lbl">Active Users</span></div></div>
      <div class="d-none d-md-flex col-auto align-items-center"><div class="stat-divider"></div></div>
      <div class="col-12 col-md-auto"><a href="#" class="btn-outline-custom" style="font-size:13px;padding:9px 22px">All Features</a></div>
    </div>
  </div>
</section>

<!-- SECTION 5 — AI DARK SECTION -->
<section id="ai-section">
  <div class="container" style="max-width:1200px">
    <div class="text-center mb-5">
      <h2 class="section-heading">AI that works where your team already works.</h2>
      <p class="sub-text mt-3">Supercharge your Salesforce MMS with AI-driven automation, smart chatbots, and campaign intelligence — built natively into your CRM workflow.</p>
    </div>
    <div class="row g-4 mb-5">
      <div class="col-lg-4 col-md-6">
        <div class="ai-card">
          <div class="ai-card-icon"><i class="fa-solid fa-robot"></i></div>
          <h5>AI-Assisted MMS Chatbot</h5>
          <p>Deploy intelligent MMS chatbots that respond 24/7, qualify leads, and route conversations — all without any coding. Trained on your Salesforce data.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="ai-card">
          <div class="ai-card-icon"><i class="fa-solid fa-chart-line"></i></div>
          <h5>AI Campaign Analysis</h5>
          <p>Let AI analyze your MMS campaigns, identify top-performing content types, and recommend optimal send times to maximize open and click-through rates.</p>
        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="ai-card">
          <div class="ai-card-icon"><i class="fa-solid fa-comments"></i></div>
          <h5>AI-Assisted Conversational</h5>
          <p>AI reads incoming MMS replies and suggests the best response for your agents — speeding up resolution time and improving customer satisfaction scores.</p>
        </div>
      </div>
    </div>
    <div class="row justify-content-center mb-5 g-0">
      <div class="col-6 col-md-3"><div class="ai-stat-item"><div class="big">10x</div><div class="small">Higher Engagement</div></div></div>
      <div class="col-6 col-md-3"><div class="ai-stat-item"><div class="big">6x</div><div class="small">Faster Resolution</div></div></div>
      <div class="col-6 col-md-3"><div class="ai-stat-item"><div class="big">600x</div><div class="small">Automation Scale</div></div></div>
      <div class="col-6 col-md-3"><div class="ai-stat-item"><div class="big">300Kb</div><div class="small">Max Media Size</div></div></div>
    </div>
    <div class="ai-cta-bar text-center">
      <p style="color:rgba(255,255,255,0.75);font-size:15px;margin-bottom:20px">Add MMS to Salesforce within minutes — no middleware, no developer needed.</p>
      <div class="d-flex flex-wrap justify-content-center gap-3 align-items-center">
        <a href="#" class="btn-white-solid"><i class="fa-solid fa-rocket me-2"></i>Start Free Trial</a>
        <a href="#" style="color:rgba(255,255,255,0.85);font-size:14px;font-weight:600;text-decoration:none;display:inline-flex;align-items:center;gap:6px"><i class="fa-solid fa-circle-play"></i> See a video</a>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 6 — INTEGRATION HIGHLIGHT -->
<section id="integration">
  <div class="container" style="max-width:1200px">
    <div class="row align-items-center g-5">
      <div class="col-lg-5">
        <span class="badge-sf">⚡ Salesforce Native</span>
        <h2>Salesforce MMS integration is one of 35+ channels — all in one app.</h2>
        <p class="text-muted" style="font-size:14px;line-height:1.7">360 SMS brings MMS, SMS, WhatsApp, RCS, Telegram, and 30+ more channels under one roof — directly inside Salesforce. Switch channels per contact or campaign with zero extra setup or middleware.</p>
        <div class="rating-row">
          <span class="stars">★★★★★</span>
          <span class="rating-score">4.91 / 5</span>
          <span class="rating-platform">G2</span>
          <span class="rating-platform">Capterra</span>
          <span class="rating-platform">AppExchange</span>
        </div>
        <a href="#" class="expand-link">Expand all reviews ↓</a>
        <a href="#" class="btn-primary-custom"><i class="fa-solid fa-grid-2 me-2"></i>Explore all channels</a>
      </div>
      <div class="col-lg-7">
        <div class="row g-2 mb-3">
          <div class="col-6"><div class="inline-stat"><div class="icon"><i class="fa-solid fa-mobile-screen"></i></div><div><strong>35+ </strong><span>Channels Supported</span></div></div></div>
          <div class="col-6"><div class="inline-stat"><div class="icon"><i class="fa-solid fa-globe"></i></div><div><strong>100+ </strong><span>Countries</span></div></div></div>
          <div class="col-6"><div class="inline-stat"><div class="icon"><i class="fa-solid fa-star"></i></div><div><strong>7,000+ </strong><span>5-star Reviews</span></div></div></div>
          <div class="col-6"><div class="inline-stat"><div class="icon"><i class="fa-solid fa-users"></i></div><div><strong>60K+ </strong><span>Active Users</span></div></div></div>
        </div>
        <div class="integration-mockup">
          <div class="text-center w-100">
            <p class="mb-3" style="font-size:13px;color:var(--muted);font-weight:600">All channels. One Salesforce App.</p>
            <div style="display:flex;flex-wrap:wrap;gap:8px;justify-content:center">
              <span style="background:#fff;border-radius:8px;padding:8px 14px;font-size:12px;font-weight:700;color:var(--blue);box-shadow:0 2px 8px rgba(0,0,0,0.08)"><i class="fa-brands fa-whatsapp me-1 text-success"></i>WhatsApp</span>
              <span style="background:#fff;border-radius:8px;padding:8px 14px;font-size:12px;font-weight:700;color:var(--blue);box-shadow:0 2px 8px rgba(0,0,0,0.08)"><i class="fa-solid fa-comment-sms me-1"></i>SMS / MMS</span>
              <span style="background:#fff;border-radius:8px;padding:8px 14px;font-size:12px;font-weight:700;color:var(--blue);box-shadow:0 2px 8px rgba(0,0,0,0.08)"><i class="fa-brands fa-facebook me-1" style="color:#1877f2"></i>Messenger</span>
              <span style="background:#fff;border-radius:8px;padding:8px 14px;font-size:12px;font-weight:700;color:var(--blue);box-shadow:0 2px 8px rgba(0,0,0,0.08)"><i class="fa-brands fa-telegram me-1" style="color:#0088cc"></i>Telegram</span>
              <span style="background:#fff;border-radius:8px;padding:8px 14px;font-size:12px;font-weight:700;color:var(--blue);box-shadow:0 2px 8px rgba(0,0,0,0.08)"><i class="fa-solid fa-comment me-1 text-success"></i>RCS</span>
              <span style="background:#fff;border-radius:8px;padding:8px 14px;font-size:12px;font-weight:700;color:var(--blue);box-shadow:0 2px 8px rgba(0,0,0,0.08)"><i class="fa-brands fa-instagram me-1" style="color:#e1306c"></i>Instagram</span>
              <span style="background:#fff;border-radius:8px;padding:8px 14px;font-size:12px;font-weight:700;color:var(--muted);box-shadow:0 2px 8px rgba(0,0,0,0.08)">+29 more</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 7 — COMPARISON TABLE -->
<section id="comparison">
  <div class="container" style="max-width:1200px">
    <div class="text-center mb-5">
      <h2>360 SMS App vs other Salesforce SMS apps</h2>
      <p class="text-muted mt-2">See how 360 SMS stacks up against the competition across every feature that matters.</p>
    </div>
    <div class="table-wrap mb-4">
      <table class="comp-table">
        <thead>
          <tr>
            <th style="background:#f5f7fa;color:var(--muted);text-align:left;min-width:180px">Features</th>
            <th class="highlight">360 SMS App</th>
            <th class="other">Competitor A</th>
            <th class="other">Competitor B</th>
            <th class="other">Competitor C</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Pricing</td><td><span class="badge-green">Affordable</span></td><td><span class="badge-partial">High</span></td><td><span class="badge-partial">Medium</span></td><td><span class="badge-partial">High</span></td></tr>
          <tr><td>MMS Support</td><td><i class="fa-solid fa-circle-check check"></i></td><td><i class="fa-solid fa-circle-xmark cross"></i></td><td><i class="fa-solid fa-circle-check check"></i></td><td><i class="fa-solid fa-circle-xmark cross"></i></td></tr>
          <tr><td>Multi-Channel (35+)</td><td><i class="fa-solid fa-circle-check check"></i></td><td><i class="fa-solid fa-circle-xmark cross"></i></td><td><i class="fa-solid fa-circle-xmark cross"></i></td><td><i class="fa-solid fa-circle-xmark cross"></i></td></tr>
          <tr><td>Salesforce Native</td><td><i class="fa-solid fa-circle-check check"></i></td><td><i class="fa-solid fa-circle-check check"></i></td><td><i class="fa-solid fa-circle-xmark cross"></i></td><td><i class="fa-solid fa-circle-check check"></i></td></tr>
          <tr><td>AI Chatbot</td><td><i class="fa-solid fa-circle-check check"></i></td><td><i class="fa-solid fa-circle-xmark cross"></i></td><td><i class="fa-solid fa-circle-xmark cross"></i></td><td><i class="fa-solid fa-circle-xmark cross"></i></td></tr>
          <tr><td>Flow Automation</td><td><span class="badge-green">Complete</span></td><td><span class="badge-partial">Limited</span></td><td><span class="badge-partial">Limited</span></td><td><span class="badge-green">Complete</span></td></tr>
          <tr><td>Customer Support</td><td><span class="badge-green">24/7</span></td><td><span class="badge-partial">Biz Hours</span></td><td><span class="badge-partial">Email Only</span></td><td><span class="badge-partial">Biz Hours</span></td></tr>
          <tr><td>TCPA / GDPR Compliance</td><td><i class="fa-solid fa-circle-check check"></i></td><td><i class="fa-solid fa-circle-check check"></i></td><td><i class="fa-solid fa-circle-xmark cross"></i></td><td><i class="fa-solid fa-circle-xmark cross"></i></td></tr>
          <tr><td>Free Trial</td><td><i class="fa-solid fa-circle-check check"></i></td><td><i class="fa-solid fa-circle-xmark cross"></i></td><td><i class="fa-solid fa-circle-check check"></i></td><td><i class="fa-solid fa-circle-xmark cross"></i></td></tr>
          <tr><td>Unified Inbox</td><td><i class="fa-solid fa-circle-check check"></i></td><td><i class="fa-solid fa-circle-xmark cross"></i></td><td><i class="fa-solid fa-circle-xmark cross"></i></td><td><i class="fa-solid fa-circle-xmark cross"></i></td></tr>
        </tbody>
      </table>
    </div>
    <div class="text-center d-flex flex-wrap justify-content-center gap-3">
      <a href="#" class="btn-primary-custom"><i class="fa-regular fa-calendar me-2"></i>Schedule a Demo</a>
      <a href="#" class="btn-outline-custom">View All Features</a>
    </div>
  </div>
</section>

<!-- SECTION 8 — INDUSTRY USE CASES -->
<section id="industry">
  <div class="container" style="max-width:1200px">
    <div class="text-center mb-5">
      <h2>Salesforce MMS Integration by Industry</h2>
      <p class="text-muted mt-2 mx-auto" style="max-width:640px">From retail to healthcare, teams across every industry use 360 SMS to deliver rich media messages that drive real results inside Salesforce.</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6"><div class="industry-card"><div class="industry-icon"><i class="fa-solid fa-building"></i></div><h5>Real Estate</h5><p>Send virtual tour videos, property photos, and listing PDFs to prospects directly from Salesforce. Close deals faster with rich media follow-ups at every stage.</p><a href="#">Explore <i class="fa-solid fa-arrow-right ms-1"></i></a></div></div>
      <div class="col-lg-4 col-md-6"><div class="industry-card"><div class="industry-icon"><i class="fa-solid fa-cart-shopping"></i></div><h5>eCommerce</h5><p>Boost sales with product image MMS, abandoned cart GIFs, and promo videos. Drive higher CTR and conversions directly from Salesforce Commerce Cloud campaigns.</p><a href="#">Explore <i class="fa-solid fa-arrow-right ms-1"></i></a></div></div>
      <div class="col-lg-4 col-md-6"><div class="industry-card"><div class="industry-icon"><i class="fa-solid fa-heart-pulse"></i></div><h5>Healthcare</h5><p>Send appointment reminders with directions, lab result alerts, and wellness tips via HIPAA-friendly MMS workflows built inside Salesforce Health Cloud.</p><a href="#">Explore <i class="fa-solid fa-arrow-right ms-1"></i></a></div></div>
      <div class="col-lg-4 col-md-6"><div class="industry-card"><div class="industry-icon"><i class="fa-solid fa-hand-holding-heart"></i></div><h5>Non-Profit</h5><p>Engage donors with impact photos, fundraising videos, and event invitations via MMS — all tracked in Salesforce NPSP for complete donor journey visibility.</p><a href="#">Explore <i class="fa-solid fa-arrow-right ms-1"></i></a></div></div>
      <div class="col-lg-4 col-md-6"><div class="industry-card"><div class="industry-icon"><i class="fa-solid fa-plane"></i></div><h5>Travel &amp; Hospitality</h5><p>Deliver boarding passes, hotel check-in instructions, and destination guides as rich MMS. Enhance the traveler experience from booking confirmation to arrival.</p><a href="#">Explore <i class="fa-solid fa-arrow-right ms-1"></i></a></div></div>
      <div class="col-lg-4 col-md-6"><div class="industry-card"><div class="industry-icon"><i class="fa-solid fa-graduation-cap"></i></div><h5>Education</h5><p>Send enrollment confirmations, campus tour videos, and scholarship notifications via MMS. Engage prospective students where they spend the most time.</p><a href="#">Explore <i class="fa-solid fa-arrow-right ms-1"></i></a></div></div>
    </div>
    <div class="text-center mt-5"><a href="#" class="btn-outline-custom">View All Industries</a></div>
  </div>
</section>

<!-- SECTION 9 — TRUSTED BY -->
<section id="trusted">
  <div class="container" style="max-width:1200px">
    <div class="text-center mb-4">
      <h2>Trusted by 60K+ Users Globally</h2>
      <p class="text-muted mt-2" style="font-size:14px">From startups to Fortune 500 — teams worldwide rely on 360 SMS for Salesforce MMS messaging.</p>
    </div>
    <div class="logo-grid">
      <div class="logo-item">SALESFORCE</div><div class="logo-item">HubSpot</div><div class="logo-item">ZENDESK</div>
      <div class="logo-item">ServiceNow</div><div class="logo-item">WORKDAY</div><div class="logo-item">Marketo</div>
      <div class="logo-item">PARDOT</div><div class="logo-item">Eloqua</div><div class="logo-item">VEEVA</div>
      <div class="logo-item">NETSUITE</div><div class="logo-item">Zoho</div><div class="logo-item">FRESHDESK</div>
    </div>
    <div class="row g-3 mt-2">
      <div class="col-md-4"><div class="review-col"><div class="stars">★★★★★</div><div class="score">4.9 / 5</div><div class="platform">Salesforce AppExchange · 3,200+ reviews</div></div></div>
      <div class="col-md-4"><div class="review-col"><div class="stars">★★★★★</div><div class="score">4.8 / 5</div><div class="platform">G2 · 2,100+ reviews</div></div></div>
      <div class="col-md-4"><div class="review-col"><div class="stars">★★★★★</div><div class="score">4.9 / 5</div><div class="platform">Capterra · 1,800+ reviews</div></div></div>
    </div>
  </div>
</section>

<!-- SECTION 10 — BLUE CTA BANNER -->
<section id="cta-banner">
  <div class="container" style="max-width:1200px">
    <div class="text-center">
      <h2>60K+ users, 100+ countries, 7,000+ 5-star reviews</h2>
      <p class="mb-4">Join thousands of Salesforce teams sending smarter with MMS today.</p>
      <div class="d-flex flex-wrap justify-content-center gap-3">
        <a href="#" class="btn-white-solid"><i class="fa-solid fa-comments me-2"></i>Chat Now</a>
        <a href="#" class="btn-white-outline"><i class="fa-solid fa-rocket me-2"></i>Start For Free</a>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 11 — FAQ -->
<section id="faq">
  <div class="container" style="max-width:860px">
    <div class="text-center mb-5">
      <h2>Salesforce MMS Integration — frequently asked questions</h2>
      <p class="text-muted mt-2" style="font-size:14px">Everything you need to know before you get started with 360 SMS.</p>
    </div>
    <div class="accordion accordion-flush" id="faqAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">What is Salesforce MMS integration?</button></h2>
        <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
          <div class="accordion-body">Salesforce MMS integration connects your Salesforce CRM with MMS (Multimedia Messaging Service) so you can send and receive images, videos, audio, and documents directly from Salesforce records, workflows, and automations — without any external middleware or tools.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">How do we add MMS integration to Salesforce?</button></h2>
        <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">Install 360 SMS directly from the Salesforce AppExchange in a few clicks. No middleware or developers required. Once installed, configure your MMS provider credentials and you're ready to send MMS within minutes from any Salesforce object or automation.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">Can Salesforce automation send MMS images automatically?</button></h2>
        <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">Yes. Using 360 SMS with Salesforce Flow, Process Builder, or Apex triggers, you can automatically send MMS messages — including images, PDFs, and videos — based on any Salesforce record event, time-based delay, or custom condition in your org.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">How do I customize MMS templates in Salesforce?</button></h2>
        <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">360 SMS includes a built-in MMS template builder that supports dynamic merge fields from any Salesforce object. Create reusable image, video, and document templates with personalized recipient data — including name, account, product, deal stage, and any custom field.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">What is the file size limit for MMS messages?</button></h2>
        <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">The standard carrier limit for MMS attachments is 300KB per message. 360 SMS automatically optimizes and compresses your images and media files to meet carrier requirements while preserving the best possible visual quality for recipients.</div>
        </div>
      </div>
      <div class="accordion-item">
        <h2 class="accordion-header"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">Is 360 SMS MMS compliant with TCPA and GDPR?</button></h2>
        <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
          <div class="accordion-body">Yes. 360 SMS includes built-in opt-out handling, automatic STOP message processing, consent management, and real-time opt-out sync back to Salesforce records — keeping your entire MMS program fully compliant with TCPA, GDPR, and CASL regulations.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 12 — RESOURCES -->
<section id="resources">
  <div class="container" style="max-width:1200px">
    <div class="text-center mb-5">
      <h2>Salesforce MMS resources — guides, case studies, and setup help</h2>
      <p class="text-muted mt-2" style="font-size:14px">Everything you need to get started and get results with Salesforce MMS.</p>
    </div>
    <div class="row g-4">
      <div class="col-lg-4 col-md-6"><div class="resource-card"><div class="resource-img"><i class="fa-solid fa-newspaper"></i></div><div class="resource-body"><span class="resource-badge">Guide</span><h6>Replicated Landing Page Drive Engagement for a Global CPG Brand</h6><a href="#" class="btn-read-more">Read More</a></div></div></div>
      <div class="col-lg-4 col-md-6"><div class="resource-card"><div class="resource-img"><i class="fa-solid fa-users"></i></div><div class="resource-body"><span class="resource-badge">Case Study</span><h6>Customized Content &amp; Synchronized Data Across Channels for a Marketing Firm</h6><a href="#" class="btn-read-more">Read More</a></div></div></div>
      <div class="col-lg-4 col-md-6"><div class="resource-card"><div class="resource-img"><i class="fa-solid fa-chart-bar"></i></div><div class="resource-body"><span class="resource-badge">Case Study</span><h6>Customized Content &amp; Synchronized Data Automated Campaigns for a Marketing Firm</h6><a href="#" class="btn-read-more">Read More</a></div></div></div>
      <div class="col-lg-4 col-md-6"><div class="resource-card"><div class="resource-img"><i class="fa-solid fa-book-open"></i></div><div class="resource-body"><span class="resource-badge">Setup Guide</span><h6>Replicated Landing Pages Drive Engagement for a Global B2B SaaS Brand</h6><a href="#" class="btn-read-more">Read More</a></div></div></div>
      <div class="col-lg-4 col-md-6"><div class="resource-card"><div class="resource-img"><i class="fa-solid fa-file-lines"></i></div><div class="resource-body"><span class="resource-badge">Case Study</span><h6>Customized Content &amp; Synchronization of Data Across Multiple Marketing Channels</h6><a href="#" class="btn-read-more">Read More</a></div></div></div>
      <div class="col-lg-4 col-md-6"><div class="resource-card"><div class="resource-img"><i class="fa-solid fa-lightbulb"></i></div><div class="resource-body"><span class="resource-badge">Case Study</span><h6>Customized Content &amp; Synchronized Automated Campaigns for a Marketing Firm</h6><a href="#" class="btn-read-more">Read More</a></div></div></div>
    </div>
  </div>
</section>



<?php
    get_footer('test1');
?>