<?php
/*
Template Name:Industry Professional Services
*/
get_header('sms');
?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/industry.css">

<!-- BREADCRUMB -->
<div class="bc">
  <div class="container-xl">
    <div class="d-flex align-items-center gap-2">
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a><span>›</span>
      <a href="<?php echo esc_url(home_url('/')); ?>/industries">Industries</a><span>›</span>
      <span style="color:var(--ink);font-weight:600">Professional Services</span>
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
          Salesforce Native · Professional Services · 15+ Channel Messaging
        </div>
        <h1>Grow Your Client Base and Nurture<br>Relationships with<br><em>Salesforce SMS</em></h1>
        <p class="hero-sub">Manage professional services messaging in Salesforce across the channels clients already use. Automate timely updates and reminders while reducing manual coordination. No code. No middleware.</p>
        <div class="d-flex gap-3 flex-wrap mb-3">
          <a class="open-popup-form-on-click btn-primary-cta">Speak to a Professional</a>
          <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" target="_blank" class="btn-outline-cta">Book a Demo</a>
        </div>
        <div class="d-flex align-items-center gap-2 flex-wrap" style="font-size:12px;color:var(--ink3)">
          <span style="color:#0057B8;font-size:14px;letter-spacing:1px">★★★★★</span>
          <strong style="color:var(--ink)">4.9 / 5.0</strong>
          <span>·</span>
          <span><strong style="color:var(--ink)">1,200+</strong> verified reviews</span>
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
            <div class="hero-ui-url">360 SMS - Client Inbox · Salesforce CRM for Professional Services</div>
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
                <div class="conv-prev hl">Docs uploaded - all done ⚖️</div>
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
                <div class="conv-prev dim">CONFIRM - Tuesday 10am ✓</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
            </div>
            <!-- Chat panel -->
            <div class="d-flex flex-column flex-grow-1" style="background:#fff;min-width:0">
              <div style="padding:10px 14px;border-bottom:1px solid #eee">
                <div style="font-size:13px;font-weight:700;color:var(--ink)">Rachel Morrison - Client</div>
                <div style="font-size:10px;color:var(--ink4)">via Salesforce CRM · Apex Consulting</div>
              </div>
              <div class="flex-grow-1 d-flex flex-column gap-2 p-3" style="overflow:hidden">
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Rachel - welcome to Apex Consulting. To get started, please complete your onboarding form: apex.co/onboard 📋</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start" style="max-width:75%">
                  <div class="bubble-in">Done - all details submitted ✅</div>
                  <div class="msg-meta">Rachel · 9:03 AM</div>
                </div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Perfect - your record is created. Your consultant will be in touch within 24h. Reference: APX-1042.</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:6px;padding:6px 10px;font-size:10px;font-weight:700;color:#0057B8">✓ Onboarding complete · Client record created · Consultant briefed in Salesforce</div>
              </div>
              <div style="border-top:1px solid #eee;padding:9px 12px;display:flex;align-items:center;gap:7px">
                <span style="font-size:15px;color:var(--ink3)"><i class="bi bi-paperclip"></i></span>
                <div style="flex:1;background:#F7F7F5;border:1px solid #eee;border-radius:6px;padding:7px 10px;font-size:11px;color:var(--ink4)">Type a message...</div>
                <div style="padding:6px 11px;background:#F7F7F5;border:1px solid #ddd;border-radius:5px;font-size:11px;font-weight:600;color:var(--ink2)">Template</div>
              </div>
              <div style="background:#F7F7F5;border-top:1px solid #eee;padding:5px 12px;display:flex;align-items:center;justify-content:space-between">
                <span style="font-size:9px;color:var(--ink4)">Auto-logged · Opt-out managed · 15+ channels active</span>
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
      <div class="proof-item"><span class="proof-n">60%</span><span class="proof-l ms-2">Reduction in<br>Coordination Overhead</span></div>
      <div class="proof-item"><span class="proof-n">35%</span><span class="proof-l ms-2">Improvement in<br>Collections Rate</span></div>
      <div class="proof-item"><span class="proof-n">80%</span><span class="proof-l ms-2">Fewer Client<br>No-Shows</span></div>
      <div class="proof-item"><span class="proof-n">98%</span><span class="proof-l ms-2">SMS<br>Open Rate</span></div>
      <div class="proof-item"><span class="proof-n">1,200+</span><span class="proof-l ms-2">Verified<br>Reviews</span></div>
      <div class="proof-item">
        <span style="background:var(--sf-l);color:var(--sf);font-size:11px;font-weight:700;padding:4px 10px;border-radius:4px;line-height:1.5;white-space:nowrap">AgentExchange · #1 Rated</span>
      </div>
    </div>
  </div>
</div>

<!-- PROFESSIONAL SERVICES USE CASES -->
<section class="sec sec-alt" id="use-cases">
  <div class="container-xl">
    <div class="text-center mb-4">
      <div class="lbl d-flex justify-content-center">Why professional services firms choose 360 SMS</div>
      <h2 class="sec-h mx-auto" style="max-width:640px">Go Far Beyond Table Stakes -<br class="d-none d-md-block">Differentiate Your Brand with Salesforce SMS</h2>
      <p class="sec-sub mx-auto" style="max-width:600px">Every use case runs natively inside Salesforce - from client intake and onboarding to field visits, payment collections, WhatsApp, and chatbot qualification. Click a use case to see it in action.</p>
    </div>

    <!-- Tab pills -->
    <div class="d-flex gap-2 flex-wrap justify-content-center mb-4">
      <button onclick="switchUC(0)" class="uc-tab-btn active"><i class="bi bi-clipboard2-check-fill"></i> Client Intake &amp; Onboarding</button>
      <button onclick="switchUC(1)" class="uc-tab-btn"><i class="bi bi-calendar-check-fill"></i> Appointments &amp; Field Visits</button>
      <button onclick="switchUC(2)" class="uc-tab-btn"><i class="bi bi-credit-card-fill"></i> Payments &amp; Collections</button>
      <button onclick="switchUC(3)" class="uc-tab-btn"><i class="bi bi-whatsapp"></i> WhatsApp for Consultants</button>
      <button onclick="switchUC(4)" class="uc-tab-btn"><i class="bi bi-robot"></i> Service Chatbot &amp; Qualification</button>
      <button onclick="switchUC(5)" class="uc-tab-btn"><i class="bi bi-megaphone-fill"></i> Brand &amp; Practice Area Marketing</button>
    </div>

    <div style="background:#fff;border:1px solid var(--bdr);border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.07)">

      <!-- PANEL 0: Client Intake & Preliminary Evaluation -->
      <div class="uc-panel active" id="uc-panel-0">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-clipboard2-check-fill"></i> Client Intake &amp; Onboarding</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Automate data capture and reduce barrier-to-entry from day one</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Capture key details early, automate message routing and escalations, and make customer communication effortless across channels. Send confirmations, onboarding texts, and surveys directly from Salesforce.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Enable seamless client texting - no extra apps or complex setup required</li>
              <li><span class="chk-icon">✓</span>Capture client details via automated SMS flow - zero manual entry</li>
              <li><span class="chk-icon">✓</span>Capture client satisfaction and team performance with surveys</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">Auto</div><div class="stat-l">Data capture</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual entry</div></div>
              <div><div class="stat-n">Instant</div><div class="stat-l">Onboarding</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Client Intake &amp; Onboarding · Salesforce Record</span><span class="uc-mock-badge">Live</span></div>
              <div class="uc-mock-body" style="background:#F9FBFF">
                <div style="font-size:9px;font-weight:700;color:var(--ink4);text-transform:uppercase;letter-spacing:.07em;text-align:center;margin-bottom:4px">New Client · Onboarding SMS · Automated</div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Rachel - welcome to Apex Consulting. To get started, please complete your onboarding form: apex.co/onboard 📋</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:65%">
                  <div class="bubble-in">Done - all details submitted ✅</div>
                  <div class="msg-meta">Rachel · 9:08 AM</div>
                </div>
                <div class="align-self-end mt-1" style="max-width:88%">
                  <div class="bubble-out">Thank you - your record is created. Ref: APX-1042. Your consultant will be in touch within 24 hours.</div>
                  <div class="msg-meta text-end">9:08 AM · Auto-logged ✓</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ Onboarding instant · Consultant briefed · Client record created in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">Auto</div><div class="uc-mock-stat-l">Data capture</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual entry</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">Instant</div><div class="uc-mock-stat-l">Onboarding</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 1: Appointments & Field Visits -->
      <div class="uc-panel" id="uc-panel-1">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-calendar-check-fill"></i> Appointments &amp; Field Visits</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Coordinate site visits - book, confirm, reschedule, and update field agents automatically</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Send addresses and critical updates to field agents, build stronger client relationships over consistent sender numbers, and receive alerts for incoming replies so conversations never lose context.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Appointment reminders auto-sent · RESCHEDULE keyword triggers rebooking</li>
              <li><span class="chk-icon">✓</span>Field agents receive address and job details via SMS automatically</li>
              <li><span class="chk-icon">✓</span>Single sender number - clients always know who is contacting them</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">↓80%</div><div class="stat-l">No-shows</div></div>
              <div><div class="stat-n">Auto</div><div class="stat-l">Agent dispatch</div></div>
              <div><div class="stat-n">1</div><div class="stat-l">Sender number</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Appointments &amp; Field Visits · Salesforce</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-lightning-charge-fill"></i> Site visit confirmed - agent dispatch + client confirmation fires automatically</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-calendar-check-fill me-1"></i> "Hi Daniel - your site visit is confirmed Thu 10am: 12 Oak Lane, Camden"</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Sent ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-geo-alt-fill me-1"></i> Field agent auto-dispatched · Job details and schedule sent via SMS</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Dispatched ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-check-circle-fill me-1"></i> Client replied CONFIRM - record updated · Reminder scheduled</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Confirmed ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ No-shows ↓80% · Field agent always briefed · All logged in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓80%</div><div class="uc-mock-stat-l">No-shows</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">Auto</div><div class="uc-mock-stat-l">Agent dispatch</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">1</div><div class="uc-mock-stat-l">Sender number</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 2: Payments & Collections -->
      <div class="uc-panel" id="uc-panel-2">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-credit-card-fill"></i> Payments &amp; Collections</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Improve collections - send payment URLs, trigger renewals, remind of dues automatically</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Remind customers of dues and deadlines with bulk Salesforce SMS. Send payment URLs using custom shortened domain links, enable text-to-pay gateways, and trigger renewals through keyword texts.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Automated payment reminders with shortened branded payment links</li>
              <li><span class="chk-icon">✓</span>Text-to-pay gateway integration - clients pay from their phone instantly</li>
              <li><span class="chk-icon">✓</span>Keyword-triggered renewals - reply RENEW to extend a contract instantly</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">↑35%</div><div class="stat-l">Collections rate</div></div>
              <div><div class="stat-n">Auto</div><div class="stat-l">Reminders</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Admin chase</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Payments &amp; Collections · Salesforce</span><span class="uc-mock-badge">Active</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-exclamation-triangle-fill"></i> Invoice due in 7 days - payment reminder sequence fires from Salesforce</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-credit-card-fill me-1"></i> 7-day reminder · "Invoice #INV-1042 due Jan 22 - pay: apex.co/pay/1042"</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Sent ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-check2-circle me-1"></i> Client pays via branded link - receipt auto-sent · record updated</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Paid ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-arrow-repeat me-1"></i> Client replies RENEW - renewal contract triggered instantly in Salesforce</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Renewed ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ Collections ↑35% · Renewals automated · Zero admin chasing</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↑35%</div><div class="uc-mock-stat-l">Collections rate</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">Auto</div><div class="uc-mock-stat-l">Reminders</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Admin chase</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 3: WhatsApp for Consultants -->
      <div class="uc-panel" id="uc-panel-3">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-whatsapp"></i> WhatsApp for Consultants</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Reach clients on their preferred channel - manage every reply inside Salesforce</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">WhatsApp communication for consultants - reach clients on their preferred channel and manage all replies inside Salesforce. Handle complaints and conversations across channels, maintain consistent sender identity, and track interactions with searchable multi-channel history.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>WhatsApp, SMS, MMS, voice - all from a single Salesforce inbox</li>
              <li><span class="chk-icon">✓</span>Track communication records across all channels in one place</li>
              <li><span class="chk-icon">✓</span>Send marketing collateral and brochures with service messages via MMS</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">15+</div><div class="stat-l">Channels</div></div>
              <div><div class="stat-n">1</div><div class="stat-l">Unified inbox</div></div>
              <div><div class="stat-n">100%</div><div class="stat-l">In Salesforce</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#0a1e48 0%,#0d2d6b 100%)">
            <div class="uc-mock" style="background:#0a1e48;border:1px solid rgba(255,255,255,.1)">
              <div style="background:rgba(0,87,184,.25);border-bottom:1px solid rgba(255,255,255,.1);padding:12px 16px;display:flex;align-items:center;justify-content:space-between">
                <span style="font-size:11px;font-weight:700;color:rgba(255,255,255,.9)">WhatsApp for Consultants · Unified Inbox · Salesforce</span>
                <span style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);background:rgba(0,87,184,.2);border:1px solid rgba(0,87,184,.3);border-radius:20px;padding:2px 9px;display:flex;align-items:center;gap:4px"><span style="width:5px;height:5px;border-radius:50%;background:#5B9EF5;display:inline-block;animation:pulse 2s infinite"></span> Running</span>
              </div>
              <div style="padding:14px;display:flex;flex-direction:column;gap:8px">
                <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:7px;padding:10px 12px">
                  <div style="font-size:9px;font-weight:700;color:rgba(91,158,245,.9);text-transform:uppercase;letter-spacing:.06em;margin-bottom:6px">💚 WHATSAPP - APEX CONSULTING</div>
                  <div style="font-size:11px;color:rgba(255,255,255,.8);line-height:1.6">"Hi Anita - project update attached via MMS. Phase 2 milestones on track. Please confirm receipt and we'll schedule the review call."<br><br>→ Reply received · All logged to Salesforce automatically</div>
                  <div style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);margin-top:8px">✓ 15+ channels · 1 unified inbox · 100% in Salesforce</div>
                </div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> SMS, WhatsApp, MMS, voice - one inbox in Salesforce</div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> All channel history logged and searchable in Salesforce</div>
              </div>
              <div style="display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid rgba(255,255,255,.1)">
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">15+</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Channels</div></div>
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">1</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Unified inbox</div></div>
                <div style="padding:10px;text-align:center"><div style="font-size:16px;font-weight:800;color:#fff">100%</div><div style="font-size:9px;color:rgba(255,255,255,.4)">In Salesforce</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 4: Service Chatbot & Qualification -->
      <div class="uc-panel" id="uc-panel-4">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-robot"></i> Service Chatbot &amp; Qualification</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Qualify inquiries before getting on a call - handle multiple conversations automatically</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Easily configure a Salesforce chatbot to handle multiple conversations and qualify inquiries before calls. Switch to Salesforce telephony when needed. Enforce SLAs with prioritized alerts - escalate messages based on priority and keywords.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Point-and-click chatbot qualifies by service type, urgency, and practice area</li>
              <li><span class="chk-icon">✓</span>CTI pivot - switch to Salesforce call from SMS conversation instantly</li>
              <li><span class="chk-icon">✓</span>SLA alerts - route, prioritize, and escalate by keyword and urgency</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">24/7</div><div class="stat-l">Always on</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Code needed</div></div>
              <div><div class="stat-n">CTI</div><div class="stat-l">Call pivot</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Service Chatbot &amp; Qualification · Salesforce</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Chatbot qualifies inquiry: "Are you looking for IT, HR, or consulting services?" - keyword routing</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Urgency detected - HIGH priority flag · Salesforce Flow triggered instantly</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Simple query → chatbot resolves · Complex → escalated to specialist</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> CTI pivot: SMS conversation escalated to live call · all history visible</div>
              </div>
              <div class="uc-mock-foot">✓ 24/7 qualification · Zero code setup · All logged in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">24/7</div><div class="uc-mock-stat-l">Always on</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Code needed</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">CTI</div><div class="uc-mock-stat-l">Call pivot</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 5: Brand & Practice Area Marketing -->
      <div class="uc-panel" id="uc-panel-5">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-megaphone-fill"></i> Brand &amp; Practice Area Marketing</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Use a brand-led voice - never dilute consistency across practice areas</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Use templates and merge fields for quick personalization. Segment audiences by keywords, interests, practice areas, and industries. Maintain a consistent brand presence with localized numbers, multilingual messaging, and trackable URLs.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Keyword identities segment clients by practice area automatically</li>
              <li><span class="chk-icon">✓</span>Embed webpage URLs and brochures into service messages via MMS</li>
              <li><span class="chk-icon">✓</span>Localized numbers and multilingual messages for diverse client bases</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">Any</div><div class="stat-l">Practice area</div></div>
              <div><div class="stat-n">15+</div><div class="stat-l">Channels</div></div>
              <div><div class="stat-n">Always</div><div class="stat-l">Top-of-mind</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Brand &amp; Practice Area Marketing · Salesforce</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Bulk campaign: segment by practice area keyword · 500 clients reached</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> MMS sent: "Hi Rachel - see our latest service brochure: apex.co/guide" + PDF</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Localized number active · multilingual message delivered · reply tracked</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Trackable URL clicked · Salesforce record updated · follow-up triggered</div>
              </div>
              <div class="uc-mock-foot">✓ Brand consistent · All practice areas · Always top-of-mind</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">Any</div><div class="uc-mock-stat-l">Practice area</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">15+</div><div class="uc-mock-stat-l">Channels</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">Always</div><div class="uc-mock-stat-l">Top-of-mind</div></div>
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
        <div style="font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.55);margin-bottom:10px">Professional Services</div>
        <div style="font-size:clamp(18px,2.5vw,24px);font-weight:800;color:#fff;letter-spacing:-.4px;line-height:1.2;margin-bottom:8px">Ready to automate coordination and grow your client base?</div>
        <div style="font-size:13px;color:rgba(255,255,255,.7);line-height:1.6">See 360 SMS running inside Salesforce for professional services in a free 20-minute demo.</div>
      </div>
      <div class="flex-shrink-0"><a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" target="_blank" class="btn-cta-w">Book a Demo →</a></div>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="sec sec-alt">
  <div class="container-xl">
    <div class="text-center mb-4">
      <div class="lbl">How it works</div>
      <h2 class="sec-h">Automated. Inside Salesforce. Zero code</h2>
      <p class="sec-sub mx-auto" style="max-width:520px;margin:8px auto 0">Inquire · Qualify · Deliver · Collect - every client interaction follows the same automated pattern.</p>
    </div>
    <div class="hiw-tabs">
      <button class="hiw-tab-btn active" onclick="hiwGo(0,this)"><i class="bi bi-chat-dots-fill"></i> Inquire &amp; Capture</button>
      <button class="hiw-tab-btn" onclick="hiwGo(1,this)"><i class="bi bi-robot"></i> Qualify &amp; Route</button>
      <button class="hiw-tab-btn" onclick="hiwGo(2,this)"><i class="bi bi-tools"></i> Deliver &amp; Update</button>
      <button class="hiw-tab-btn" onclick="hiwGo(3,this)"><i class="bi bi-credit-card-fill"></i> Collect &amp; Retain</button>
    </div>
    <div class="hiw-slider-wrap px-3 px-md-0">
      <div class="hiw-slider-track">

        <div class="hiw-slide active" id="hiw-0">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-chat-dots-fill"></i></div><div><div class="hiw-slide-title">Inquire &amp; Capture</div><div class="hiw-slide-sub">Zero barrier to entry · Chatbot · Salesforce record · Confirmation</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">Zero barrier to entry</span><span class="hiw-slide-count">01 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Client texts existing number</div><div class="hiw-step-desc">Seamless messaging without new apps or friction</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Chatbot captures details</div><div class="hiw-step-desc">Name, address, service type, urgency - all via automated SMS</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Salesforce record created</div><div class="hiw-step-desc">New leads captured and records are created automatically</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Confirmation sent</div><div class="hiw-step-desc">Onboarding message, next steps, and collateral sent automatically</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Clients reach you on their terms · Zero admin entry · Salesforce record complete from the first text</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-0"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-1">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-robot"></i></div><div><div class="hiw-slide-title">Qualify &amp; Route</div><div class="hiw-slide-sub">Keyword triggers · SLA enforcement · Chatbot · Salesforce</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">Qualified 24/7</span><span class="hiw-slide-count">02 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Chatbot qualifies by intent</div><div class="hiw-step-desc">CONTRACT, EMPLOYMENT, PROPERTY - keyword trigger SMS flows</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Urgency assessed</div><div class="hiw-step-desc">HIGH priority → Salesforce Flow triggered · alert sent to the user</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Escalate or self-serve</div><div class="hiw-step-desc">Simple queries → chatbot resolves in Salesforce · complex → escalated</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">All logged to Salesforce</div><div class="hiw-step-desc">Every message, every channel, every interaction - one record</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Right professional gets right client · SLAs enforced · No inquiry falls through the cracks</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-1"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-2">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-tools"></i></div><div><div class="hiw-slide-title">Deliver &amp; Update</div><div class="hiw-slide-sub">Project texts · Client updates · Escalation · Completion survey · Salesforce</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">All parties aligned</span><span class="hiw-slide-count">03 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Project texts via Salesforce CRM</div><div class="hiw-step-desc">Address, timeline, milestones - sent to client and field agent</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Client receives updates</div><div class="hiw-step-desc">Via SMS, WhatsApp, or preferred channel - one sender number</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Issues escalated instantly</div><div class="hiw-step-desc">Complaint or urgent reply triggers alert · senior notified immediately</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Completion confirmed</div><div class="hiw-step-desc">Service delivery confirmed via SMS · satisfaction survey auto-sent</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Client and field agent always aligned · Every update logged · Post-delivery survey automated</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-2"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-3">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-credit-card-fill"></i></div><div><div class="hiw-slide-title">Collect &amp; Retain</div><div class="hiw-slide-sub">Invoice reminder · Text-to-pay · Renewals · Relationship messages · Salesforce</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">Collections +35%</span><span class="hiw-slide-count">04 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Invoice due reminder</div><div class="hiw-step-desc">Automated SMS with payment link at −7 days, −1 day, and due date</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Client pays via link</div><div class="hiw-step-desc">Text-to-pay gateway - one tap from phone · receipt auto-sent</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Life events &amp; renewals</div><div class="hiw-step-desc">Birthday, anniversary - personalized. Renewal keyword triggers instantly</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Always top-of-mind</div><div class="hiw-step-desc">Year-round relationship messages - clients return when they need you</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Collections +35% · Renewals automated · Relationships maintained year-round without admin overhead</span></div>
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
    <div style="display:inline-flex;align-items:center;gap:7px;background:rgba(0,87,184,.18);border:1px solid rgba(0,87,184,.35);border-radius:20px;padding:5px 14px;font-size:10px;font-weight:700;color:rgba(120,170,255,.9);letter-spacing:.07em;text-transform:uppercase;margin-bottom:20px">⚡ AI Use Case · Professional Services</div>
    <h2 style="font-size:clamp(22px,3vw,32px);font-weight:800;color:#fff;letter-spacing:-1px;line-height:1.15;margin-bottom:12px">AI Agents That Handle the Coordination -<br><span style="color:#5B9BD5">So You Can Focus on Delivery</span></h2>
    <p style="font-size:15px;color:rgba(255,255,255,.48);line-height:1.7;max-width:560px;margin-bottom:36px">Professional services firms shouldn't lose billable hours to reminders, follow-ups, and scheduling. 360 SMS AI agents handle client qualification, appointment coordination, payment chasing, and project updates - automatically inside Salesforce. Professionals focus on delivery. Automation handles everything else.</p>
    <div class="row g-3 mb-4">
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-chat-left-text-fill fs-4"></i></div><div class="aa-title">Conversation Analysis for Client Summaries</div><div class="aa-desc">Conversation Analysis generates summaries, extracts action items, identifies sentiment, and highlights important discussion points automatically.</div><span class="aa-result">Improve service follow-up accuracy</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-translate fs-4"></i></div><div class="aa-title">AI-Driven One-on-One Conversations</div><div class="aa-desc">AI-Powered One-on-One Conversation provides intelligent response suggestions during live client conversations based on interaction history and conversation intent.</div><span class="aa-result">Enhance customer communication consistency</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-magic fs-4"></i></div><div class="aa-title">Rephrase &amp; Polish Client Communication</div><div class="aa-desc">AI Rephrase & Polish Content improves clarity, professionalism, tone, and readability while preserving the intended business communication context.</div><span class="aa-result">Maintain polished client communication</span></div></div>
    </div>
    <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:10px;padding:20px 24px;display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap">
      <div>
        <div style="font-size:14px;font-weight:700;color:#fff;margin-bottom:3px">All client communication automation runs natively inside Salesforce - no external tools, no extra logins.</div>
        <div style="font-size:12px;color:rgba(255,255,255,.4)">Every inquiry, every project update, every payment reminder is logged to the Salesforce record. Your data stays in your org.</div>
      </div>
      <a href="<?php echo home_url(); ?>/360sms-for-agentforce/" style="background:var(--sf);color:#fff;border:none;border-radius:7px;padding:11px 22px;font-size:13px;font-weight:700;cursor:pointer;white-space:nowrap;text-decoration:none;display:inline-flex;align-items:center">See AI in action →</a>
    </div>
  </div>
</div>

<!-- PLATFORM & TERRITORY MANAGEMENT -->
<section class="sec">
  <div class="container-xl">
    <div class="row align-items-center g-4 g-lg-5">
      <div class="col-12 col-lg-6">
        <div class="comp-badge"><i class="bi bi-shield-lock-fill"></i> Salesforce Native · 15+ Channels · All Practice Areas</div>
        <div class="lbl">Platform &amp; Compliance</div>
        <h2 class="sec-h">Increase efficiency - reduce phone<br>tag with scalable interactions</h2>
        <p class="sec-sub mb-0">Give customers a dedicated text line for convenience to handle inquiries and follow up right from their SMS keypad. Receive alerts for incoming messages over all channels and pick up where you left off. Use the same sender phone number to manage relationships.</p>
        <div class="comp-pts">
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-phone-fill"></i></div><div><div class="comp-th">Text-enable incoming landlines</div><div class="comp-tp">Enable text on incoming landlines for quick questions without making customers choose a texting app to contact you. Reduce barrier-to-entry completely for every practice area.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-file-earmark-richtext-fill"></i></div><div><div class="comp-th">Embed collateral and brochures</div><div class="comp-tp">Embed webpage URLs into messaging campaigns to drive awareness for your services. Incorporate the right marketing collateral and brochures with service messages via MMS and WhatsApp.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-clock-history"></i></div><div><div class="comp-th">Multi-channel conversation history</div><div class="comp-tp">Keep track of all client and partner communication with conversation history over all platforms. Monitor and search client-employee conversations with multi-channel conversation history and keyword search.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-telephone-fill"></i></div><div><div class="comp-th">Salesforce telephony for services</div><div class="comp-tp">Jump on a call when deliberations get serious. Switch to Salesforce telephony for services from the same app screen. Full CTI pivot - SMS conversation history visible during every call.</div></div></div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="comp-visual">
          <div style="font-size:12px;font-weight:700;color:var(--ink);margin-bottom:3px">Salesforce-Native Professional Services Platform</div>
          <div style="font-size:11px;color:var(--ink3);margin-bottom:12px">The complete client communication stack</div>
          <div class="hck-row"><div class="hck">✓</div> All client data stays inside Salesforce CRM only</div>
          <div class="hck-row"><div class="hck">✓</div> 15+ channels · SMS, WhatsApp, MMS, voice · one inbox</div>
          <div class="hck-row"><div class="hck">✓</div> Text-enabled landlines · reduce barrier-to-entry</div>
          <div class="hck-row"><div class="hck">✓</div> Service chatbot · qualification · SLA enforcement</div>
          <div class="hck-row"><div class="hck">✓</div> Payment links · text-to-pay · renewal keywords</div>
          <div class="hck-row"><div class="hck">✓</div> Multi-channel conversation history · keyword search</div>
          <div style="background:var(--sf);border-radius:8px;padding:12px 14px;margin-top:4px">
            <div style="font-size:12px;font-weight:700;color:#fff;margin-bottom:3px">Reminders, document requests, payment follow-ups, billing notifications - all automated in Salesforce.</div>
            <div style="font-size:11px;color:rgba(255,255,255,.7)">Admin staff manages exceptions. Professionals focus on delivery. The overhead that grows with client count gets absorbed by automation rather than headcount.</div>
          </div>
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