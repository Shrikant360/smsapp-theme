<?php
/*
Template Name:Service Cloud
*/
get_header('sms');
?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/industry.css">

<!-- BREADCRUMB -->
<div class="bc">
  <div class="container-xl">
    <div class="d-flex align-items-center gap-2">
      <a href="https://360smsapp.com">Home</a><span>›</span>
      <a href="https://360smsapp.com/industries">Industries</a><span>›</span>
      <span style="color:var(--ink);font-weight:600">Service</span>
    </div>
  </div>
</div>

<!-- HERO -->
<div class="hero">
  <div class="container-xl">
    <div class="row align-items-center g-4 g-lg-5">
      <!-- LEFT -->
      <div class="col-12 col-lg-6">
        <div class="hero-eyebrow">
          <span class="ey-dot"></span>
          Service Cloud Native · Case SMS · Omnichannel Support
        </div>
        <h1>Resolve Cases Faster and Boost CSAT<br>with <em>Salesforce SMS</em></h1>
        <p class="hero-sub">Automate support, reduce customer anxiety, and improve accessibility with Salesforce SMS for customer service, natively inside Salesforce — helping teams deliver faster service and higher CSAT.</p>
        <div class="d-flex gap-3 flex-wrap mb-3">
          <a href="#contact-form" class="btn-primary-cta">Speak to a Professional</a>
          <a href="#contact-form" class="btn-outline-cta">Get the App →</a>
        </div>
        <div class="d-flex align-items-center gap-2 flex-wrap" style="font-size:12px;color:var(--ink3)">
          <span style="color:#0057B8;font-size:14px;letter-spacing:1px">★★★★★</span>
          <strong style="color:var(--ink)">4.9 / 5.0</strong>
          <span>·</span>
          <span><strong style="color:var(--ink)">1,200+</strong> AppExchange reviews</span>
          <span>·</span>
          <span><strong style="color:var(--ink)">60K+</strong> users globally</span>
        </div>
      </div>
      <!-- RIGHT: Dashboard UI -->
      <div class="col-12 col-lg-6">
        <div class="hero-ui">
          <div class="hero-ui-bar">
            <div class="dots d-flex gap-1">
              <span style="background:#FF5F57"></span>
              <span style="background:#FFBD2E"></span>
              <span style="background:#28CA41"></span>
            </div>
            <div class="hero-ui-url">360 SMS — Support Inbox · Salesforce Service Cloud</div>
          </div>
          <div class="d-flex" style="height:340px;overflow:hidden">
            <!-- Icon sidebar -->
            <div class="inbox-sidebar d-none d-sm-flex flex-column">
              <div class="inbox-icon act"><i class="bi bi-house-fill" style="color:#fff;font-size:13px"></i><span class="inbox-badge">4</span></div>
              <div class="inbox-icon inact"><i class="bi bi-lightning-charge-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i><span class="inbox-badge">2</span></div>
              <div class="inbox-icon inact"><i class="bi bi-file-earmark-text-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i><span class="inbox-badge">1</span></div>
              <div class="inbox-icon inact"><i class="bi bi-robot" style="color:rgba(255,255,255,.6);font-size:13px"></i><span class="inbox-badge">3</span></div>
              <div class="inbox-icon inact"><i class="bi bi-people-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i></div>
              <div class="inbox-icon inact mt-auto"><i class="bi bi-gear-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i></div>
            </div>
            <!-- Conversation list -->
            <div style="width:200px;flex-shrink:0;border-right:1px solid #eee;overflow:hidden" class="d-none d-md-flex flex-column">
              <div style="padding:10px 12px;border-bottom:1px solid #eee;font-size:11px;font-weight:700;color:var(--ink)">Client Conversations</div>
              <div class="conv-item act border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">David Chen</span><span style="font-size:10px;color:var(--ink4)">9:03 AM</span></div>
                <div class="conv-prev hl">Docs uploaded — all done ⚖️</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Sarah Williams</span><span style="font-size:10px;color:var(--ink4)">8:44 AM</span></div>
                <div class="conv-prev dim">Invoice paid ✓</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px">💚 WhatsApp</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Marcus Reid</span><span style="font-size:10px;color:var(--ink4)">Tue</span></div>
                <div class="conv-prev dim">What's my case status?</div>
                <div class="d-flex align-items-center justify-content-between">
                  <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px"><i class="bi bi-robot"></i> AI Bot</div>
                  <span style="background:#0057B8;color:#fff;font-size:9px;font-weight:700;width:15px;height:15px;border-radius:50%;display:flex;align-items:center;justify-content:center">1</span>
                </div>
              </div>
              <div class="conv-item">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Priya Kapoor</span><span style="font-size:10px;color:var(--ink4)">Mon</span></div>
                <div class="conv-prev dim">CONFIRM — Tuesday 10am ✓</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
            </div>
            <!-- Chat panel -->
            <div class="d-flex flex-column flex-grow-1" style="background:#fff;min-width:0">
              <div style="padding:10px 14px;border-bottom:1px solid #eee">
                <div style="font-size:13px;font-weight:700;color:var(--ink)">Angela Torres — Case #4821</div>
                <div style="font-size:10px;color:var(--ink4)">via Service Cloud · ServiceFirst Support</div>
              </div>
              <div class="flex-grow-1 d-flex flex-column gap-2 p-3" style="overflow:hidden">
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Angela — your case #4821 has been received. We'll update you as soon as an agent is assigned. Expected wait: &lt;10 min. ✓</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start" style="max-width:75%">
                  <div class="bubble-in">Is there an ETA? It's been happening since this morning 🙁</div>
                  <div class="msg-meta">David · 9:03 AM</div>
                </div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Absolutely — agent assigned: Sarah. ETA 8 mins. We'll text you when she's on the case. 🎧</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:6px;padding:6px 10px;font-size:10px;font-weight:700;color:#0057B8">✓ Case created · Agent assigned · SLA timer running · All logged in Service Cloud</div>
              </div>
              <div style="border-top:1px solid #eee;padding:9px 12px;display:flex;align-items:center;gap:7px">
                <span style="font-size:15px;color:var(--ink3)"><i class="bi bi-paperclip"></i></span>
                <div style="flex:1;background:#F7F7F5;border:1px solid #eee;border-radius:6px;padding:7px 10px;font-size:11px;color:var(--ink4)">Type a message...</div>
                <div style="padding:6px 11px;background:#F7F7F5;border:1px solid #ddd;border-radius:5px;font-size:11px;font-weight:600;color:var(--ink2)">Template</div>
              </div>
              <div style="background:#F7F7F5;border-top:1px solid #eee;padding:5px 12px;display:flex;align-items:center;justify-content:space-between">
                <span style="font-size:9px;color:var(--ink4)">Auto-logged · SLA tracking · 15+ channels active</span>
                <span style="font-size:10px;font-weight:700;color:#0057B8;display:flex;align-items:center;gap:4px"><span style="width:6px;height:6px;border-radius:50%;background:#0057B8;display:inline-block"></span> Live</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- PROOF STRIP -->
<div class="proof">
  <div class="container-xl">
    <div class="proof-grid">
      <div class="proof-item"><span class="proof-n">40%</span><span class="proof-l ms-2">Reduction in<br>Avg Handling Time</span></div>
      <div class="proof-item"><span class="proof-n">35%</span><span class="proof-l ms-2">Higher First<br>Contact Resolution</span></div>
      <div class="proof-item"><span class="proof-n">38%</span><span class="proof-l ms-2">Improvement in<br>CSAT Score</span></div>
      <div class="proof-item"><span class="proof-n">98%</span><span class="proof-l ms-2">SMS<br>Open Rate</span></div>
      <div class="proof-item"><span class="proof-n">1,200+</span><span class="proof-l ms-2">5-Star<br>Reviews</span></div>
      <div class="proof-item">
        <span style="background:var(--sf-l);color:var(--sf);font-size:11px;font-weight:700;padding:4px 10px;border-radius:4px;line-height:1.5;white-space:nowrap">AppExchange · #1 Rated</span>
      </div>
    </div>
  </div>
</div>

<!-- SERVICE USE CASES -->
<section class="sec sec-alt" id="use-cases">
  <div class="container-xl">
    <div class="text-center mb-4">
      <div class="lbl d-flex justify-content-center">Why service teams choose 360 SMS</div>
      <h2 class="sec-h mx-auto" style="max-width:640px">Make Service Accessible —<br class="d-none d-md-block">Differentiate Service Experiences at Every Touchpoint</h2>
      <p class="sec-sub mx-auto" style="max-width:600px">Every use case runs natively inside Salesforce Service Cloud — from case creation and routing to SLA alerts, chatbot deflection, field service, and CSAT surveys. Click a use case to see it in action.</p>
    </div>

    <!-- Tab pills -->
    <div class="d-flex gap-2 flex-wrap justify-content-center mb-4">
      <button onclick="switchUC(0)" class="uc-tab-btn active"><i class="bi bi-diagram-3-fill"></i> Case Routing &amp; Triage</button>
      <button onclick="switchUC(1)" class="uc-tab-btn"><i class="bi bi-robot"></i> Chatbot &amp; FAQ Deflection</button>
      <button onclick="switchUC(2)" class="uc-tab-btn"><i class="bi bi-exclamation-triangle-fill"></i> SLA Alerts &amp; Escalation</button>
      <button onclick="switchUC(3)" class="uc-tab-btn"><i class="bi bi-tools"></i> Field Service &amp; Reminders</button>
      <button onclick="switchUC(4)" class="uc-tab-btn"><i class="bi bi-star-fill"></i> CSAT &amp; Feedback</button>
      <button onclick="switchUC(5)" class="uc-tab-btn"><i class="bi bi-megaphone-fill"></i> Proactive Outreach</button>
    </div>

    <div style="background:#fff;border:1px solid var(--bdr);border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.07)">

      <!-- PANEL 0: Client Intake & Preliminary Evaluation -->
      <div class="uc-panel active" id="uc-panel-0">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-diagram-3-fill"></i> Case Routing &amp; Triage</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Route cases to the right queue — instantly, automatically, by keyword</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Respond instantly, track complaints, and automate confirmations. Route cases by product or department with IVR or texting chatbots, and let customers initiate or escalate cases through keywords.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Create keyword triggers and route cases — INSTALL, FAULT, BILLING, COMPLAINT</li>
              <li><span class="chk-icon">✓</span>Assign via round robin, geotagged, or geotagged round robin — for more availability</li>
              <li><span class="chk-icon">✓</span>Case reference sent instantly — customer anxiety reduced from first contact</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">↓40%</div><div class="stat-l">AHT</div></div>
              <div><div class="stat-n">Instant</div><div class="stat-l">Case creation</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual routing</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Case Routing &amp; Triage · Service Cloud</span><span class="uc-mock-badge">Live</span></div>
              <div class="uc-mock-body" style="background:#F9FBFF">
                <div style="font-size:9px;font-weight:700;color:var(--ink4);text-transform:uppercase;letter-spacing:.07em;text-align:center;margin-bottom:4px">Keyword → Case Created → Agent Assigned · Automated</div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Angela — your case #4821 has been received. We'll update you as soon as an agent is assigned. Expected wait: &lt;10 min. ✓</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:65%">
                  <div class="bubble-in">Is there an ETA? It's been happening since this morning 🙁</div>
                  <div class="msg-meta">David · 9:08 AM</div>
                </div>
                <div class="align-self-end mt-1" style="max-width:88%">
                  <div class="bubble-out">Thank you — your record is created. Ref: APX-1042. Your consultant will be in touch within 24 hours.</div>
                  <div class="msg-meta text-end">9:08 AM · Auto-logged ✓</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ AHT ↓40% · Case created instantly · Agent notified · All logged in Service Cloud</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓40%</div><div class="uc-mock-stat-l">AHT</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">Instant</div><div class="uc-mock-stat-l">Case creation</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual routing</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 1: Chatbot & FAQ Deflection -->
      <div class="uc-panel" id="uc-panel-1">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-robot"></i> Chatbot &amp; FAQ Deflection</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Scale service, not teams — pre-set FAQ responses deflect tier-one automatically</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Use guided support texts and chatbots to walk customers through common issues. Share help documents, automate service responses, and speed up installation, troubleshooting, consulting, and complaint resolution.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Chatbot builder handles installation, troubleshooting, consulting, and complaints</li>
              <li><span class="chk-icon">✓</span>Share help articles, guided steps, and dynamic responses via text</li>
              <li><span class="chk-icon">✓</span>Tier-one deflection — agents only handle cases that need them</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">↓60%</div><div class="stat-l">Tier-one volume</div></div>
              <div><div class="stat-n">24/7</div><div class="stat-l">Coverage</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Agent time wasted</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Chatbot &amp; FAQ Deflection · Service Cloud</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-robot"></i> Customer texts FAULT — chatbot activated · guided troubleshooting starts</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-chat-left-text-fill me-1"></i> Guided steps sent: "Try restarting the device and reply FIXED or AGENT"</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Sent ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-check-circle-fill me-1"></i> Customer replies FIXED — case closed, CSAT survey fires instantly</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Deflected ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-diagram-3-fill me-1"></i> AGENT reply — escalated to live agent · full history on case record</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Escalated ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ Tier-one ↓60% · Agents handle only what needs them · All logged in Service Cloud</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓60%</div><div class="uc-mock-stat-l">Tier-one</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">24/7</div><div class="uc-mock-stat-l">Coverage</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Agent time wasted</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 2: SLA Alerts & Escalation -->
      <div class="uc-panel" id="uc-panel-2">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-exclamation-triangle-fill"></i> SLA Alerts &amp; Escalation</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Resolve and escalate cases in the first go — attend to calls that matter</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Native to Service Cloud, 360 SMS triggers SLA and escalation alerts automatically when cases near breach thresholds. Track conversation history, identify genuine grievances, and notify agents and supervisors before SLAs are missed.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>SLA breach warning fires to agent when threshold approaches</li>
              <li><span class="chk-icon">✓</span>Supervisor notified automatically on escalation — no manual chase</li>
              <li><span class="chk-icon">✓</span>Full conversation history — genuine grievances identified at a glance</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">0</div><div class="stat-l">Missed breaches</div></div>
              <div><div class="stat-n">↑35%</div><div class="stat-l">FCR rate</div></div>
              <div><div class="stat-n">Auto</div><div class="stat-l">Escalation</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>SLA Alerts &amp; Escalation · Service Cloud</span><span class="uc-mock-badge">Active</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-exclamation-triangle-fill"></i> Case #4821 approaching SLA threshold — alert fires to agent automatically</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-alarm-fill me-1"></i> Agent alerted via SMS · "Case #4821 — SLA breach in 15 min. Act now."</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Sent ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-person-fill-up me-1"></i> Agent takes action · priority update sent to customer instantly</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Actioned ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-arrow-up-circle-fill me-1"></i> Supervisor auto-notified on escalation · conversation history attached</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Escalated ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ Zero missed breaches · FCR ↑35% · All logged in Service Cloud</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Missed breaches</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↑35%</div><div class="uc-mock-stat-l">FCR rate</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">Auto</div><div class="uc-mock-stat-l">Escalation</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 3: Field Service & Appointment Reminders -->
      <div class="uc-panel" id="uc-panel-3">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-tools"></i> Field Service &amp; Appointment Reminders</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Automate field service reminders — technicians show up, customers are prepared</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Reduce customer anxiety and improve satisfaction with automated field service updates, appointment confirmations, technician details, and two-way rescheduling. Send out-of-office voicemail and text alerts from Salesforce.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Booking confirmation + day-before + morning-of reminders fire automatically</li>
              <li><span class="chk-icon">✓</span>CONFIRM and RESCHEDULE keywords — customers self-serve, record auto-updates</li>
              <li><span class="chk-icon">✓</span>Out-of-office auto-response — voicemail and text alerts when teams are away</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">↓60%</div><div class="stat-l">No-shows</div></div>
              <div><div class="stat-n">40%</div><div class="stat-l">Faster resolution</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual reminders</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#0a1e48 0%,#0d2d6b 100%)">
            <div class="uc-mock" style="background:#0a1e48;border:1px solid rgba(255,255,255,.1)">
              <div style="background:rgba(0,87,184,.25);border-bottom:1px solid rgba(255,255,255,.1);padding:12px 16px;display:flex;align-items:center;justify-content:space-between">
                <span style="font-size:11px;font-weight:700;color:rgba(255,255,255,.9)">Field Service &amp; Appointment Reminders · Service Cloud</span>
                <span style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);background:rgba(0,87,184,.2);border:1px solid rgba(0,87,184,.3);border-radius:20px;padding:2px 9px;display:flex;align-items:center;gap:4px"><span style="width:5px;height:5px;border-radius:50%;background:#5B9EF5;display:inline-block;animation:pulse 2s infinite"></span> Running</span>
              </div>
              <div style="padding:14px;display:flex;flex-direction:column;gap:8px">
                <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:7px;padding:10px 12px">
                  <div style="font-size:9px;font-weight:700;color:rgba(91,158,245,.9);text-transform:uppercase;letter-spacing:.06em;margin-bottom:6px">🔧 FIELD SERVICE — TECHSUPPORT CO</div>
                  <div style="font-size:11px;color:rgba(255,255,255,.8);line-height:1.6">"Hi David — your technician visit is confirmed for Thu 10am. Technician: James. Reply CONFIRM or RESCHEDULE."<br><br>→ David replies CONFIRM → record updated automatically</div>
                  <div style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);margin-top:8px">✓ No-shows ↓60% · 40% faster resolution · 0 manual reminders</div>
                </div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> Day-before + morning-of reminders fire from Service Cloud automatically</div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> Out-of-office auto-response ensures no customer is left waiting</div>
              </div>
              <div style="display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid rgba(255,255,255,.1)">
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">↓60%</div><div style="font-size:9px;color:rgba(255,255,255,.4)">No-shows</div></div>
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">40%</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Faster resolution</div></div>
                <div style="padding:10px;text-align:center"><div style="font-size:16px;font-weight:800;color:#fff">0</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Manual reminders</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 4: CSAT & Feedback Collection -->
      <div class="uc-panel" id="uc-panel-4">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-star-fill"></i> CSAT &amp; Feedback Collection</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Trigger surveys as soon as a customer is served — collect reviews while they remember</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Trigger post-service surveys while experiences are fresh to collect reviews and identify genuine grievances through conversation history. Use ratings and call records to reward and train service teams.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>CSAT survey fires automatically when case is closed in Service Cloud</li>
              <li><span class="chk-icon">✓</span>Ratings logged to Salesforce — reward top performers, flag training needs</li>
              <li><span class="chk-icon">✓</span>Detractors escalated instantly — conversation history proves the grievance</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">5×</div><div class="stat-l">Response vs email</div></div>
              <div><div class="stat-n">+38%</div><div class="stat-l">CSAT score</div></div>
              <div><div class="stat-n">Auto</div><div class="stat-l">Every case</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>CSAT &amp; Feedback Collection · Service Cloud</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Case closed in Service Cloud — CSAT survey fires automatically within seconds</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> "Rate your experience 1–5" · Angela replies 5 — logged to case record ⭐⭐⭐⭐⭐</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Top performer flagged for reward · Weekly leaderboard updated in Salesforce</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Detractor score detected — recovery flow triggered · supervisor alerted</div>
              </div>
              <div class="uc-mock-foot">✓ CSAT +38% · 5× response rate · Performers rewarded · All in Service Cloud</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">5×</div><div class="uc-mock-stat-l">Response vs email</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">+38%</div><div class="uc-mock-stat-l">CSAT score</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">Auto</div><div class="uc-mock-stat-l">Every case</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 5: Proactive Customer Outreach -->
      <div class="uc-panel" id="uc-panel-5">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-megaphone-fill"></i> Proactive Customer Outreach</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Make service accessible — be there at every turn before customers reach for the phone</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Improve service accessibility with text, automated voicemail, and out-of-office alerts. Track complaints, automate confirmations, and manage two-way omnichannel conversations across SMS, WhatsApp, and voice with full case context in Salesforce.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Proactive outage, maintenance, or update alerts to all affected customers</li>
              <li><span class="chk-icon">✓</span>Omnichannel — switch SMS → WhatsApp → voice without losing context</li>
              <li><span class="chk-icon">✓</span>Auto-response and voicemail when teams are out-of-office</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">↓50%</div><div class="stat-l">Inbound calls</div></div>
              <div><div class="stat-n">24/7</div><div class="stat-l">Service access</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Lost context</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Proactive Outreach · Omnichannel · Service Cloud</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Outage detected — proactive SMS alert fires to all 1,200 affected customers</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Inbound volume drops 50% — customers informed before they call</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Customer switches SMS → WhatsApp — full context preserved, no repeat</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Team out-of-office — voicemail + auto-response fires · urgent cases escalated</div>
              </div>
              <div class="uc-mock-foot">✓ Inbound ↓50% · Omnichannel · 24/7 service access · All in Service Cloud</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓50%</div><div class="uc-mock-stat-l">Inbound calls</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">24/7</div><div class="uc-mock-stat-l">Service access</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Lost context</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- MID-PAGE CTA -->
<section class="sec">
  <div class="container-xl">
    <div class="cta-band">
      <div>
        <div style="font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.55);margin-bottom:10px">Service Teams</div>
        <div style="font-size:clamp(18px,2.5vw,24px);font-weight:800;color:#fff;letter-spacing:-.4px;line-height:1.2;margin-bottom:8px">Ready to accelerate case resolution?</div>
        <div style="font-size:13px;color:rgba(255,255,255,.7);line-height:1.6">See 360 SMS running inside Salesforce Service Cloud in a free 20-minute demo.</div>
      </div>
      <div class="flex-shrink-0"><a href="#contact-form" class="btn-cta-w">Book a Demo →</a></div>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="sec sec-alt">
  <div class="container-xl">
    <div class="text-center mb-4">
      <div class="lbl">How it works</div>
      <h2 class="sec-h">Automated. Inside Salesforce. Zero code.</h2>
      <p class="sec-sub mx-auto" style="max-width:520px;margin:8px auto 0">Receive · Route · Resolve · Survey — every service interaction follows the same automated pattern.</p>
    </div>
    <div class="hiw-tabs">
      <button class="hiw-tab-btn active" onclick="hiwGo(0,this)"><i class="bi bi-diagram-3-fill"></i> Case Triage &amp; Routing</button>
      <button class="hiw-tab-btn" onclick="hiwGo(1,this)"><i class="bi bi-robot"></i> Chatbot Deflection</button>
      <button class="hiw-tab-btn" onclick="hiwGo(2,this)"><i class="bi bi-exclamation-triangle-fill"></i> SLA &amp; Escalation</button>
      <button class="hiw-tab-btn" onclick="hiwGo(3,this)"><i class="bi bi-star-fill"></i> CSAT &amp; Case Close</button>
    </div>
    <div class="hiw-slider-wrap px-3 px-md-0">
      <div class="hiw-slider-track">

        <div class="hiw-slide active" id="hiw-0">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-diagram-3-fill"></i></div><div><div class="hiw-slide-title">Case Triage &amp; Routing</div><div class="hiw-slide-sub">Keyword trigger · IVR routing · Case creation · Confirmation · Service Cloud</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">AHT ↓40%</span><span class="hiw-slide-count">01 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Customer texts keyword</div><div class="hiw-step-desc">INSTALL, FAULT, BILLING, COMPLAINT — case created instantly in Service Cloud</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">IVR or chatbot routes case</div><div class="hiw-step-desc">By product, skill, or department — no agent needed</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Confirmation sent instantly</div><div class="hiw-step-desc">Case reference + ETA — customer anxiety drops immediately</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Case record created · Agent notified</div><div class="hiw-step-desc">Full context in Service Cloud · SLA timer running</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Case created in seconds · Right agent instantly · Customer confirmed — all in Service Cloud</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-0"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-1">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-robot"></i></div><div><div class="hiw-slide-title">Chatbot Deflection</div><div class="hiw-slide-sub">Intent detection · Guided steps · FIXED/AGENT keyword · Service Cloud</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">Tier-one volume ↓60%</span><span class="hiw-slide-count">02 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Customer query received</div><div class="hiw-step-desc">Chatbot detects intent — FAQ, guided support, or routing</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Guided steps sent via SMS</div><div class="hiw-step-desc">Walk through troubleshooting · share help docs</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">FIXED or AGENT keyword</div><div class="hiw-step-desc">FIXED → case closed, survey fired · AGENT → human escalation</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Outcome logged in Service Cloud</div><div class="hiw-step-desc">Deflected or escalated · full history on case record</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Tier-one deflected · Agent handles only what needs them · Scale service, not teams</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-1"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-2">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-exclamation-triangle-fill"></i></div><div><div class="hiw-slide-title">SLA &amp; Escalation</div><div class="hiw-slide-sub">Threshold alert · Agent action · Supervisor notification · Case close · Service Cloud</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">Zero missed breaches</span><span class="hiw-slide-count">03 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">SLA threshold approached</div><div class="hiw-step-desc">Service Cloud triggers SMS alert to agent before breach</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Agent alerted · takes action</div><div class="hiw-step-desc">Priority update sent to customer — anxiety reduced</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Breach → supervisor notified</div><div class="hiw-step-desc">Auto-escalation to supervisor · no manual chase needed</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Case resolved · record updated</div><div class="hiw-step-desc">Resolution SMS + CSAT survey · case closed in Service Cloud</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Zero SLA breaches missed · Auto-escalated · Customer always informed · FCR +35%</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-2"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-3">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-star-fill"></i></div><div><div class="hiw-slide-title">CSAT &amp; Case Close</div><div class="hiw-slide-sub">Resolution · Survey · Score logged · Detractor recovery · Service Cloud</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">CSAT +38%</span><span class="hiw-slide-count">04 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Case resolved in Service Cloud</div><div class="hiw-step-desc">Resolution confirmation sent · CSAT survey fires instantly</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Customer rates 1–5 via SMS</div><div class="hiw-step-desc">5× response rate vs email · collected while memory is fresh</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Score logged in Service Cloud</div><div class="hiw-step-desc">Top agents flagged for reward · detractors escalated</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Detractor recovery sequence</div><div class="hiw-step-desc">Conversation history proves grievance · recovery flow starts</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>CSAT +38% · Performers rewarded · Detractors caught · Service quality improves every cycle</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-3"></div></div>
        </div>

      </div>
      <button class="hiw-arrow hiw-arrow-prev" onclick="hiwShift(-1)" aria-label="Previous">&#8249;</button>
      <button class="hiw-arrow hiw-arrow-next" onclick="hiwShift(1)" aria-label="Next">&#8250;</button>
      <div class="hiw-dots">
        <button class="hiw-dot active" onclick="hiwGo(0,null)"></button>
        <button class="hiw-dot" onclick="hiwGo(1,null)"></button>
        <button class="hiw-dot" onclick="hiwGo(2,null)"></button>
        <button class="hiw-dot" onclick="hiwGo(3,null)"></button>
      </div>
    </div>
  </div>
</section>

<!-- AI DARK SECTION -->
<div class="ai-dark" id="ai-use-case">
  <div class="ai-dark-grid"></div>
  <div class="ai-dark-glow"></div>
  <div class="container-xl" style="position:relative;z-index:1">
    <div style="display:inline-flex;align-items:center;gap:7px;background:rgba(0,87,184,.18);border:1px solid rgba(0,87,184,.35);border-radius:20px;padding:5px 14px;font-size:10px;font-weight:700;color:rgba(120,170,255,.9);letter-spacing:.07em;text-transform:uppercase;margin-bottom:20px">⚡ AI Use Case · Service</div>
    <h2 style="font-size:clamp(22px,3vw,32px);font-weight:800;color:#fff;letter-spacing:-1px;line-height:1.15;margin-bottom:12px">AI-Powered Customer Service at Scale.<br><span style="color:#5B9BD5">24/7.</span></h2>
    <p style="font-size:15px;color:rgba(255,255,255,.48);line-height:1.7;max-width:560px;margin-bottom:36px">Agents are too valuable to spend on tier-one queries and manual case tracking. 360 SMS AI agents handle chatbot deflection, FAQ responses, guided troubleshooting, SLA monitoring, case routing, and CSAT collection — automatically inside Salesforce Service Cloud. Expand your customer base even with leaner service teams.</p>
    <div class="row g-3 mb-4">
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-chat-left-text-fill fs-4"></i></div><div class="aa-title">Conversation Analysis for Service Intelligence</div><div class="aa-desc">Conversation Analysis identifies frustration trends, recurring complaints, sentiment patterns, and required follow-up actions from customer interactions automatically.</div><span class="aa-result">Improve support decision accuracy</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-translate fs-4"></i></div><div class="aa-title">AI-powered Service Surveys</div><div class="aa-desc">Generates intelligent, context-aware responses based on the customer's last input — making service interactions more conversational, personalized, and responsive across messaging channels.</div><span class="aa-result">Run interactive, AI-driven surveys</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-magic fs-4"></i></div><div class="aa-title">Language Translation for Support Teams</div><div class="aa-desc">AI Language Translation translates customer conversations in real time to support seamless multilingual communication across diverse customer groups.</div><span class="aa-result">Deliver better customer experiences</span></div></div>
    </div>
    <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:10px;padding:20px 24px;display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap">
      <div>
        <div style="font-size:14px;font-weight:700;color:#fff;margin-bottom:3px">All AI agents run natively inside Salesforce Service Cloud — no external tools, no extra logins.</div>
        <div style="font-size:12px;color:rgba(255,255,255,.4)">Every customer interaction is auto-logged to the case record. Data stays in your Salesforce org.</div>
      </div>
      <a href="#contact-form" style="background:var(--sf);color:#fff;border:none;border-radius:7px;padding:11px 22px;font-size:13px;font-weight:700;cursor:pointer;white-space:nowrap;text-decoration:none;display:inline-flex;align-items:center">See AI in action →</a>
    </div>
  </div>
</div>

<!-- PLATFORM & TERRITORY MANAGEMENT -->
<section class="sec">
  <div class="container-xl">
    <div class="row align-items-center g-4 g-lg-5">
      <div class="col-12 col-lg-6">
        <div class="comp-badge"><i class="bi bi-shield-lock-fill"></i> Service Cloud Native · Omnichannel · Full Stack</div>
        <div class="lbl">Platform &amp; Service Cloud Integration</div>
        <h2 class="sec-h">The full stack for modern<br>service operations — native to Service Cloud</h2>
        <p class="sec-sub mb-0">Chatbots, automated case routing, SLA alerts, and two-way messaging tied to case records — natively inside Service Cloud. Support customers across SMS, WhatsApp, and voice while keeping every conversation connected in one place.</p>
        <div class="comp-pts">
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-headset"></i></div><div><div class="comp-th">Native to Salesforce Service Cloud</div><div class="comp-tp">Every case interaction, routing decision, and survey response is logged to the Service Cloud case record. No middleware. No sync delays. No data leaving your org.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-arrow-left-right"></i></div><div><div class="comp-th">Omnichannel — SMS, WhatsApp, voice</div><div class="comp-tp">Customers can switch between SMS, WhatsApp, and voice without losing conversation context or continuity. Agents see the full history regardless of which channel the customer used.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-geo-alt-fill"></i></div><div><div class="comp-th">Round robin and geotagged assignment</div><div class="comp-tp">Assign cases through a round robin, geotagged, or geotagged round robin pattern for more availability. The right agent always gets the right case — automatically.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-reply-fill"></i></div><div><div class="comp-th">Out-of-office automation</div><div class="comp-tp">Automate voicemail and text alerts when teams are out-of-office. Auto-response ensures customers never feel ignored. Urgent cases are escalated even when no agent is available.</div></div></div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="comp-visual">
          <div style="font-size:12px;font-weight:700;color:var(--ink);margin-bottom:3px">Full-Stack Service Cloud SMS Platform</div>
          <div style="font-size:11px;color:var(--ink3);margin-bottom:12px">The complete service SMS stack, all native to Salesforce</div>
          <div class="hck-row"><div class="hck">✓</div> Native to Service Cloud — all case data inside Salesforce</div>
          <div class="hck-row"><div class="hck">✓</div> Chatbot · IVR · keyword routing — tier-one deflection</div>
          <div class="hck-row"><div class="hck">✓</div> SLA alerts · auto-escalation · supervisor notification</div>
          <div class="hck-row"><div class="hck">✓</div> Omnichannel · SMS, WhatsApp, voice · zero context lost</div>
          <div class="hck-row"><div class="hck">✓</div> Round robin · geotagged · auto-assignment</div>
          <div class="hck-row"><div class="hck">✓</div> CSAT surveys · performer rewards · grievance tracking</div>
          <div style="background:var(--sf);border-radius:8px;padding:12px 14px;margin-top:4px">
            <div style="font-size:12px;font-weight:700;color:#fff;margin-bottom:3px">Scale Service. Not Teams.</div>
            <div style="font-size:11px;color:rgba(255,255,255,.7)">Expand your customer base with lean teams through automated guided support and higher case handling.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="sec sec-alt">
  <div class="container-xl">
    <div class="lbl">Testimonials</div>
    <h2 class="sec-h mb-1">Hear from service teams using 360 SMS</h2>
    <p class="sec-sub">Real outcomes from real customer service and support teams.</p>

    <!-- Logo strip -->
    <div style="display:flex;align-items:center;flex-wrap:wrap;gap:16px;margin-bottom:28px;padding:14px 20px;background:#F7F7F5;border-radius:10px;border:1px solid var(--bdr)">
      <span style="font-size:10px;font-weight:700;color:var(--ink4);text-transform:uppercase;letter-spacing:.08em;white-space:nowrap">Trusted by</span>
      <span style="font-size:12px;font-weight:700;color:var(--ink2)">ServiceFirst</span>
      <span style="color:var(--ink4)">·</span>
      <span style="font-size:12px;font-weight:700;color:var(--ink2)">TechSupport Co</span>
      <span style="color:var(--ink4)">·</span>
      <span style="font-size:12px;font-weight:700;color:var(--ink2)">OmniCare</span>
      <span style="color:var(--ink4)">·</span>
      <span style="font-size:12px;font-weight:700;color:var(--ink2)">60K+ Users Globally</span>
    </div>

    <div class="g-3">
      <div class="row justify-content-center">

      <!-- Video 1 -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="testi-card">
          <div class="testi-thumb p-0 overflow-hidden" style="background:#f0f4f8;height:220px;display:flex;align-items:center;justify-content:center">
            <div style="text-align:center;color:var(--ink3)">
              <i class="bi bi-play-circle-fill" style="font-size:40px;color:#0057B8;opacity:.7"></i>
              <div style="font-size:11px;margin-top:8px">2:08</div>
            </div>
          </div>
          <div class="testi-body">
            <div class="testi-name">Angela Torres</div>
            <div class="testi-org">ServiceFirst · Head of Customer Support</div>
          </div>
        </div>
      </div>

      <!-- Video 2 -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="testi-card">
          <div class="testi-thumb p-0 overflow-hidden" style="background:#f0f4f8;height:220px;display:flex;align-items:center;justify-content:center">
            <div style="text-align:center;color:var(--ink3)">
              <i class="bi bi-play-circle-fill" style="font-size:40px;color:#0057B8;opacity:.7"></i>
              <div style="font-size:11px;margin-top:8px">1:44</div>
            </div>
          </div>
          <div class="testi-body">
            <div class="testi-name">David Kim</div>
            <div class="testi-org">TechSupport Co · Service Cloud Admin</div>
          </div>
        </div>
      </div>

      <!-- Video 3 -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="testi-card">
          <div class="testi-thumb p-0 overflow-hidden" style="background:#f0f4f8;height:220px;display:flex;align-items:center;justify-content:center">
            <div style="text-align:center;color:var(--ink3)">
              <i class="bi bi-play-circle-fill" style="font-size:40px;color:#0057B8;opacity:.7"></i>
              <div style="font-size:11px;margin-top:8px">2:33</div>
            </div>
          </div>
          <div class="testi-body">
            <div class="testi-name">Rachel Moore</div>
            <div class="testi-org">OmniCare · Director of CX</div>
          </div>
        </div>
      </div>

      <!-- Video 4 -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="testi-card">
          <div class="testi-thumb p-0 overflow-hidden" style="background:#f0f4f8;height:220px;display:flex;align-items:center;justify-content:center">
            <div style="text-align:center;color:var(--ink3)">
              <i class="bi bi-play-circle-fill" style="font-size:40px;color:#0057B8;opacity:.7"></i>
              <div style="font-size:11px;margin-top:8px">1:22</div>
            </div>
          </div>
          <div class="testi-body">
            <div class="testi-name">James Chen</div>
            <div class="testi-org">Service Support Team</div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- SOCIAL PROOF / REVIEWS -->
  <div class="container-xl mt-5">
    <div class="lbl">Social Proof</div>
    <h2 class="sec-h mb-1">Trusted by 60K+ Users Globally</h2>
    <p class="sec-sub">The most reviewed Salesforce SMS app on AppExchange — verified 5-star reviews from real service teams globally.</p>
    <div class="row g-3 mt-2">
      <div class="col-12 col-md-4">
        <div style="background:#fff;border:1px solid var(--bdr);border-radius:12px;padding:20px 22px;height:100%">
          <div style="color:#0057B8;font-size:14px;letter-spacing:1px;margin-bottom:10px">★★★★★</div>
          <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:14px">"360 SMS cut our average handling time by 40% in the first month. Chatbot deflection handles routine queries automatically and our agents only see cases that genuinely need them. We scaled our customer base without adding headcount."</p>
          <div style="font-size:12px;font-weight:700;color:var(--ink)">Angela T.</div>
          <div style="font-size:11px;color:var(--ink3)">Head of Support · ServiceFirst · Service Cloud</div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div style="background:#fff;border:1px solid var(--bdr);border-radius:12px;padding:20px 22px;height:100%">
          <div style="color:#0057B8;font-size:14px;letter-spacing:1px;margin-bottom:10px">★★★★★</div>
          <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:14px">"SLA breach has gone to zero. The moment a case approaches threshold, both agent and supervisor get an SMS — the case is handled before it breaches. Omnichannel means customers switch channels without repeating themselves."</p>
          <div style="font-size:12px;font-weight:700;color:var(--ink)">David K.</div>
          <div style="font-size:11px;color:var(--ink3)">Service Cloud Admin · TechSupport Co · Salesforce</div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div style="background:#fff;border:1px solid var(--bdr);border-radius:12px;padding:20px 22px;height:100%">
          <div style="color:#0057B8;font-size:14px;letter-spacing:1px;margin-bottom:10px">★★★★★</div>
          <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:14px">"CSAT surveys via SMS get 5× the response rate of email — and we collect them while the experience is still fresh. Our top performers are now identified weekly from ratings data. Service quality improved every single quarter since we launched."</p>
          <div style="font-size:12px;font-weight:700;color:var(--ink)">Rachel M.</div>
          <div style="font-size:11px;color:var(--ink3)">Director of CX · OmniCare · Salesforce Service Cloud</div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
/* ── Use Case tab switcher ── */
function switchUC(idx) {
  document.querySelectorAll('.uc-panel').forEach(function(el, i) {
    el.classList.toggle('active', i === idx);
  });
  document.querySelectorAll('.uc-tab-btn').forEach(function(btn, i) {
    btn.classList.toggle('active', i === idx);
  });
}

/* ── HIW Slider ── */
(function(){
  var cur=0, total=4, timer;
  function startProgress(idx){
    var fill=document.getElementById('hiw-prog-'+idx);
    if(!fill) return;
    fill.style.transition='none'; fill.style.width='0%';
    requestAnimationFrame(function(){requestAnimationFrame(function(){
      fill.style.transition='width 5s linear'; fill.style.width='100%';
    });});
  }
  function resetProgress(idx){
    var fill=document.getElementById('hiw-prog-'+idx);
    if(fill){fill.style.transition='none'; fill.style.width='0%';}
  }
  window.hiwGo=function(n,tabEl){
    resetProgress(cur);
    document.getElementById('hiw-'+cur).classList.remove('active');
    document.querySelectorAll('.hiw-dot').forEach(function(d,i){d.classList.toggle('active',i===n);});
    document.querySelectorAll('.hiw-tab-btn').forEach(function(b,i){b.classList.toggle('active',i===n);});
    cur=n;
    document.getElementById('hiw-'+cur).classList.add('active');
    startProgress(cur);
    clearInterval(timer);
    timer=setInterval(function(){window.hiwShift(1);},5000);
  };
  window.hiwShift=function(dir){hiwGo((cur+dir+total)%total,null);};
  var wrap=document.querySelector('.hiw-slider-track');
  if(wrap){
    wrap.addEventListener('mouseenter',function(){clearInterval(timer); resetProgress(cur);});
    wrap.addEventListener('mouseleave',function(){startProgress(cur); timer=setInterval(function(){window.hiwShift(1);},5000);});
  }
  startProgress(0); timer=setInterval(function(){window.hiwShift(1);},5000);
})();
</script>

<?php
get_footer('sms');
?>
