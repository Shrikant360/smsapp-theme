<?php
/*
Template Name:Industry Legal
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
      <span style="color:var(--ink);font-weight:600">Legal</span>
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
          Salesforce Native Texting App for Legal Firms
        </div>
        <h1>Maximize Billable Hours and<br>Accelerate Collections with<br><em>SMS for Legal Firms</em></h1>
        <p class="hero-sub">Automate client intake, document collection, and billing follow-ups with <strong>Salesforce text messaging for law firms</strong> - no code. No middleware.</p>
        <div class="d-flex gap-3 flex-wrap mb-3">
          <a href="#contact-form" class="btn-primary-cta">Speak to a Texting Professional</a>
          <a href="#contact-form" class="btn-outline-cta">Book a Demo</a>
        </div>
        <div class="d-flex align-items-center gap-2 flex-wrap" style="font-size:12px;color:var(--ink3)">
          <span style="color:#0057B8;font-size:14px;letter-spacing:1px">★★★★★</span>
          <strong style="color:var(--ink)">4.9 / 5.0</strong>
          <span>·</span>
          <span><strong style="color:var(--ink)">1,200+</strong> verified reviews</span>
          <span>·</span>
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
            <div class="hero-ui-url">360 SMS - Client Inbox · Salesforce CRM for Legal</div>
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
                <div style="font-size:13px;font-weight:700;color:var(--ink)">David Chen - Client</div>
                <div style="font-size:10px;color:var(--ink4)">via Salesforce CRM · Chen &amp; Associates</div>
              </div>
              <div class="flex-grow-1 d-flex flex-column gap-2 p-3" style="overflow:hidden">
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi David - welcome to Chen &amp; Associates. To open your matter, please complete your intake form: chen.law/intake ⚖️</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start" style="max-width:75%">
                  <div class="bubble-in">Done - also uploaded all my docs 📎</div>
                  <div class="msg-meta">David · 9:03 AM</div>
                </div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Perfect - your matter is open. Your attorney will be in touch within 24h. Reference: CHN-2847.</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:6px;padding:6px 10px;font-size:10px;font-weight:700;color:#0057B8">✓ Intake complete · Matter record created · Attorney briefed in Salesforce</div>
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
      <div class="proof-item"><span class="proof-n">40%</span><span class="proof-l ms-2">Increase in Billable<br>Hours Recovered</span></div>
      <div class="proof-item"><span class="proof-n">60%</span><span class="proof-l ms-2">Reduction in Document<br>Chase Time</span></div>
      <div class="proof-item"><span class="proof-n">3×</span><span class="proof-l ms-2">Faster Invoice<br>Collections</span></div>
      <div class="proof-item"><span class="proof-n">98%</span><span class="proof-l ms-2">SMS<br>Open Rate</span></div>
      <div class="proof-item"><span class="proof-n">1,200+</span><span class="proof-l ms-2">Verified<br>Reviews</span></div>
      <div class="proof-item">
        <span style="background:var(--sf-l);color:var(--sf);font-size:11px;font-weight:700;padding:4px 10px;border-radius:4px;line-height:1.5;white-space:nowrap">AgentExchange · #1 Rated</span>
      </div>
    </div>
  </div>
</div>

<!-- MORTGAGE USE CASES -->
<section class="sec sec-alt" id="use-cases">
  <div class="container-xl">
    <div class="text-center mb-4">
      <div class="lbl d-flex justify-content-center">Why legal teams choose 360 SMS</div>
      <h2 class="sec-h mx-auto" style="max-width:640px">Get Back Your Billable Hours -<br class="d-none d-md-block">Automate Busywork &amp; Administration</h2>
      <p class="sec-sub mx-auto" style="max-width:600px">Every use case runs natively inside Salesforce - from client intake and document collection to case updates, deadline reminders, and billing. Click a use case to see it in action.</p>
    </div>

    <!-- Tab pills -->
    <div class="d-flex gap-2 flex-wrap justify-content-center mb-4">
      <button onclick="switchUC(0)" class="uc-tab-btn active"><i class="bi bi-clipboard2-check-fill"></i> Client Intake</button>
      <button onclick="switchUC(1)" class="uc-tab-btn"><i class="bi bi-file-earmark-arrow-up-fill"></i> Document Collection</button>
      <button onclick="switchUC(2)" class="uc-tab-btn"><i class="bi bi-calendar-check-fill"></i> Appointments &amp; Deadlines</button>
      <button onclick="switchUC(3)" class="uc-tab-btn"><i class="bi bi-briefcase-fill"></i> Case Updates</button>
      <button onclick="switchUC(4)" class="uc-tab-btn"><i class="bi bi-credit-card-fill"></i> Billing &amp; Collections</button>
      <button onclick="switchUC(5)" class="uc-tab-btn"><i class="bi bi-robot"></i> AI Client Support</button>
    </div>

    <div style="background:#fff;border:1px solid var(--bdr);border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.07)">

      <!-- PANEL 0: Client Intake & Preliminary Evaluation -->
      <div class="uc-panel active" id="uc-panel-0">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-clipboard2-check-fill"></i> Client Intake</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Capture essential case data early - automate preliminary interactions and follow-ups</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Send and track links to important webforms - or replace webforms with text. Every response logs to the Salesforce matter record automatically. Legal advisors enter every consultation fully briefed.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Intake form link fires when new client record is created in Salesforce</li>
              <li><span class="chk-icon">✓</span>Decision trees qualify case type, urgency, and legal specialization automatically</li>
              <li><span class="chk-icon">✓</span>Supports all practice types and sizes - solo practitioners to large law firms</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">50%</div><div class="stat-l">Faster intake</div></div>
              <div><div class="stat-n">24/7</div><div class="stat-l">Intake available</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual data entry</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Client Intake · Salesforce Matter Record</span><span class="uc-mock-badge">Live</span></div>
              <div class="uc-mock-body" style="background:#F9FBFF">
                <div style="font-size:9px;font-weight:700;color:var(--ink4);text-transform:uppercase;letter-spacing:.07em;text-align:center;margin-bottom:4px">New Client · SMS Intake · Automated</div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi David - welcome to Chen &amp; Associates. Please complete your intake form to open your matter: chen.law/intake ⚖️</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:65%">
                  <div class="bubble-in">Done - uploaded docs too 📎</div>
                  <div class="msg-meta">David · 9:08 AM</div>
                </div>
                <div class="align-self-end mt-1" style="max-width:88%">
                  <div class="bubble-out">Thank you - matter opened. Ref: CHN-2847. Your attorney will be in touch within 24 hours.</div>
                  <div class="msg-meta text-end">9:08 AM · Auto-logged ✓</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ Intake 50% faster · Attorney briefed · Matter record created in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">50%</div><div class="uc-mock-stat-l">Faster intake</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">24/7</div><div class="uc-mock-stat-l">Available</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual entry</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 1: Document Collection -->
      <div class="uc-panel" id="uc-panel-1">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-file-earmark-arrow-up-fill"></i> Document Collection</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Documents arrive timely - cases move faster - deadlines don't get missed</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">The reminder runs without a paralegal manually tracking every outstanding document for every active matter. Documents arrive on time. Cases move faster. Deadlines don't get missed because intake stalled.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Secure upload link fires automatically when document is missing from case file</li>
              <li><span class="chk-icon">✓</span>48-hour and 7-day follow-ups - no paralegal tracking required</li>
              <li><span class="chk-icon">✓</span>Link tracking - attorney knows exactly who opened and who ignored</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">↓60%</div><div class="stat-l">Doc chase time</div></div>
              <div><div class="stat-n">89%</div><div class="stat-l">Link click rate</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Paralegal tracking</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Document Collection · Branded Links · Salesforce</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-lightning-charge-fill"></i> Missing doc detected - secure upload link fires automatically</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-file-earmark-arrow-up-fill me-1"></i> "Please upload your medical records: chen.law/docs/CHN-2847"</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Sent ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-link-45deg me-1"></i> Link opened by David - upload pending</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Tracked ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-check-circle-fill me-1"></i> Document received · Matter stage updated</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Received ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ Doc delays ↓60% · Attorney knows who opened · All logged in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓60%</div><div class="uc-mock-stat-l">Doc chase time</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">89%</div><div class="uc-mock-stat-l">Click rate</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Paralegal tracking</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 2: Appointments & Deadline Reminders -->
      <div class="uc-panel" id="uc-panel-2">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-calendar-check-fill"></i> Appointments &amp; Deadline Reminders</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Confirm and reschedule appointments to maximize billing - never miss a court date</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Remind the client of critical due dates, share disclosures, invoices, notes, and more. Track case progress and documentation and send relevant personalized follow-ups to keep clients on their feet.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Appointment reminders with CONFIRM and RESCHEDULE keywords - self-service</li>
              <li><span class="chk-icon">✓</span>Court date and filing deadline reminders at 7 days, 48 hours, and morning-of</li>
              <li><span class="chk-icon">✓</span>Call forwarding and auto-response when advisors are away</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">↓60%</div><div class="stat-l">No-shows</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Missed deadlines</div></div>
              <div><div class="stat-n">↑40%</div><div class="stat-l">Billing recovered</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Deadline &amp; Appointment Reminders · Salesforce</span><span class="uc-mock-badge">Active</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-exclamation-triangle-fill"></i> Court date in 7 days - reminder sequence fires from Salesforce</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-calendar2-event-fill me-1"></i> 7-day reminder · "Court date Jan 22, 9am - reply CONFIRM"</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Sent ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-check2-circle me-1"></i> David replied CONFIRM - Salesforce record updated</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Confirmed ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-alarm-fill me-1"></i> Morning-of reminder + location + required docs</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Sent ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ No-shows ↓60% · Zero missed deadlines · Billing maximized</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓60%</div><div class="uc-mock-stat-l">No-shows</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Missed deadlines</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↑40%</div><div class="uc-mock-stat-l">Billing recovered</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 3: Case Updates & Tracking -->
      <div class="uc-panel" id="uc-panel-3">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-briefcase-fill"></i> Case Updates &amp; Tracking</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Push updates at every case stage - keep clients informed and reduce inbound calls</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Track case progress and documentation and send personalized follow-ups. Push updates each time compliance status changes. Legal clients prefer lawyers that know their case - and keep them informed without being asked.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Case stage updates fire automatically from Salesforce matter record</li>
              <li><span class="chk-icon">✓</span>Compliance and regulatory date updates push to clients automatically</li>
              <li><span class="chk-icon">✓</span>Automatic assignment - same advisor originates all client messages for trust</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">↓50%</div><div class="stat-l">Inbound calls</div></div>
              <div><div class="stat-n">+38%</div><div class="stat-l">Client satisfaction</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual updates</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#0a1e48 0%,#0d2d6b 100%)">
            <div class="uc-mock" style="background:#0a1e48;border:1px solid rgba(255,255,255,.1)">
              <div style="background:rgba(0,87,184,.25);border-bottom:1px solid rgba(255,255,255,.1);padding:12px 16px;display:flex;align-items:center;justify-content:space-between">
                <span style="font-size:11px;font-weight:700;color:rgba(255,255,255,.9)">Case Stage Updates · Full Lifecycle · Salesforce</span>
                <span style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);background:rgba(0,87,184,.2);border:1px solid rgba(0,87,184,.3);border-radius:20px;padding:2px 9px;display:flex;align-items:center;gap:4px"><span style="width:5px;height:5px;border-radius:50%;background:#5B9EF5;display:inline-block;animation:pulse 2s infinite"></span> Running</span>
              </div>
              <div style="padding:14px;display:flex;flex-direction:column;gap:8px">
                <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:7px;padding:10px 12px">
                  <div style="font-size:9px;font-weight:700;color:rgba(91,158,245,.9);text-transform:uppercase;letter-spacing:.06em;margin-bottom:6px">⚖️ MATTER CHN-2847 - STAGE UPDATE</div>
                  <div style="font-size:11px;color:rgba(255,255,255,.8);line-height:1.6">"Hi David - your case has advanced to Discovery. We've issued the subpoenas and expect responses by Feb 5. We'll update you at each stage."<br><br>→ Next: Deposition → Trial Prep → Settlement - each fires automatically</div>
                  <div style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);margin-top:8px">✓ Client informed · Inbound calls ↓50% · Always same advisor number</div>
                </div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> Compliance and regulatory dates pushed automatically</div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> All updates logged to Salesforce matter record</div>
              </div>
              <div style="display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid rgba(255,255,255,.1)">
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">↓50%</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Inbound calls</div></div>
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">+38%</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Client satisfaction</div></div>
                <div style="padding:10px;text-align:center"><div style="font-size:16px;font-weight:800;color:#fff">0</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Manual updates</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 4: Billing & Collections -->
      <div class="uc-panel" id="uc-panel-4">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-credit-card-fill"></i> Billing &amp; Collections</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Automate alerts, improve collections - send on-brand URLs clients trust and use</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Set up custom billing and reporting processes inside Salesforce. Payment confirmation texts fire instantly. Invoice reminders escalate on schedule. Every billing interaction is logged to the client matter record.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Invoice sent with on-brand shortened URL - clients trust and pay via link</li>
              <li><span class="chk-icon">✓</span>Overdue reminders escalate automatically - no manual collections chasing</li>
              <li><span class="chk-icon">✓</span>Payment confirmation fires instantly - matter record updated in Salesforce</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">3×</div><div class="stat-l">Faster collections</div></div>
              <div><div class="stat-n">↓80%</div><div class="stat-l">Late payments</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual chasing</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Billing &amp; Collections · Salesforce Matter</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Invoice generated · "Hi David - invoice #INV-847 ($4,200): chen.law/pay/847"</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> David pays via branded link - confirmation fires instantly</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Matter record updated · Receipt sent · Case moves forward</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Overdue: escalation sequence fires on schedule - attorney alerted</div>
              </div>
              <div class="uc-mock-foot">✓ Collections 3× faster · Late payments ↓80% · All logged in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">3×</div><div class="uc-mock-stat-l">Faster collections</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓80%</div><div class="uc-mock-stat-l">Late payments</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual chasing</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 5: AI Client Support -->
      <div class="uc-panel" id="uc-panel-5">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-robot"></i> AI Client Support</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Give yourself more legroom - respond at your convenience with call forwarding</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Auto-response when advisors are away. Speak to case applicants one-on-one through text or call them for clarity when legal advisors get stuck. The AI handles routine queries 24/7 - escalating urgent matters instantly.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>AI handles routine client queries 24/7 - case status, document requests, billing FAQs</li>
              <li><span class="chk-icon">✓</span>Auto-response and call forwarding when advisors are unavailable</li>
              <li><span class="chk-icon">✓</span>Urgent matters escalated to attorney instantly - no missed client emergencies</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">24/7</div><div class="stat-l">Client support</div></div>
              <div><div class="stat-n">↑40%</div><div class="stat-l">Billable hours</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Missed urgents</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>AI Client Support · 24/7 · Salesforce Matter</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Client asks "When is my next court date?" - AI answers instantly</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Billing FAQ handled: outstanding balance, payment link re-sent</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Advisor away - auto-response + call forwarding activated</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Urgent matter detected - attorney notified instantly, no delay</div>
              </div>
              <div class="uc-mock-foot">✓ 24/7 client support · Billable hours ↑40% · No missed emergencies</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">24/7</div><div class="uc-mock-stat-l">Client support</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↑40%</div><div class="uc-mock-stat-l">Billable hours</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Missed urgents</div></div>
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
        <div style="font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.55);margin-bottom:10px">Legal Teams</div>
        <div style="font-size:clamp(18px,2.5vw,24px);font-weight:800;color:#fff;letter-spacing:-.4px;line-height:1.2;margin-bottom:8px">Ready to maximize billable hours?</div>
        <div style="font-size:13px;color:rgba(255,255,255,.7);line-height:1.6">See 360 SMS running inside Salesforce for legal firms in a free 20-minute demo.</div>
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
      <h2 class="sec-h">Automated. Inside Salesforce. Zero code</h2>
      <p class="sec-sub mx-auto" style="max-width:520px;margin:8px auto 0">Intake · Documents · Updates · Billing · Close - every client matter handled automatically.</p>
    </div>
    <div class="hiw-tabs">
      <button class="hiw-tab-btn active" onclick="hiwGo(0,this)"><i class="bi bi-clipboard2-check-fill"></i> Client Intake</button>
      <button class="hiw-tab-btn" onclick="hiwGo(1,this)"><i class="bi bi-file-earmark-arrow-up-fill"></i> Document Collection</button>
      <button class="hiw-tab-btn" onclick="hiwGo(2,this)"><i class="bi bi-calendar-check-fill"></i> Deadlines &amp; Appointments</button>
      <button class="hiw-tab-btn" onclick="hiwGo(3,this)"><i class="bi bi-credit-card-fill"></i> Billing &amp; Collections</button>
    </div>
    <div class="hiw-slider-wrap px-3 px-md-0">
      <div class="hiw-slider-track">

        <div class="hiw-slide active" id="hiw-0">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-clipboard2-check-fill"></i></div><div><div class="hiw-slide-title">Client Intake</div><div class="hiw-slide-sub">Welcome text · Form link · Decision tree · Salesforce matter record</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">50% faster intake</span><span class="hiw-slide-count">01 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">New client record created</div><div class="hiw-step-desc">Salesforce triggers intake form link and welcome text instantly</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Preliminary evaluation runs</div><div class="hiw-step-desc">Decision tree qualifies case type, urgency, and specialization</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Case data captured in Salesforce</div><div class="hiw-step-desc">Attorney assigned · matter record created · file opened</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Document requests triggered</div><div class="hiw-step-desc">Missing doc checklist fires automatically · no paralegal needed</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Intake 50% faster · Attorney enters consultation fully briefed · All logged in Salesforce</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-0"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-1">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-file-earmark-arrow-up-fill"></i></div><div><div class="hiw-slide-title">Document Collection</div><div class="hiw-slide-sub">Secure links · Link tracking · Auto follow-ups · Salesforce</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">Doc delays ↓60%</span><span class="hiw-slide-count">02 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Missing doc detected in Salesforce</div><div class="hiw-step-desc">Automated request + secure upload link fires to client</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Link tracking in Salesforce</div><div class="hiw-step-desc">Attorney sees who opened and who hasn't responded</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">48-hour follow-up fires</div><div class="hiw-step-desc">Reminder runs automatically - no paralegal tracking needed</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Doc received · Case moves forward</div><div class="hiw-step-desc">Stage updated · attorney notified · deadline protected</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Documents arrive faster · Cases move on time · No paralegal manual tracking required</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-1"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-2">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-calendar-check-fill"></i></div><div><div class="hiw-slide-title">Deadlines &amp; Appointments</div><div class="hiw-slide-sub">7-day · 48-hour · Morning-of · CONFIRM/RESCHEDULE · Salesforce</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">Zero missed deadlines</span><span class="hiw-slide-count">03 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Critical date logged in Salesforce</div><div class="hiw-step-desc">Court dates, filings, consultations trigger reminder sequences</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">7-day and 48-hour reminders</div><div class="hiw-step-desc">Personalized with case context and required documents</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Client confirms or reschedules</div><div class="hiw-step-desc">CONFIRM / RESCHEDULE keyword · record auto-updated in Salesforce</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Morning-of reminder + briefing</div><div class="hiw-step-desc">Location, time, required items · client arrives prepared</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Zero missed deadlines · Clients arrive prepared · Attorney billing maximized</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-2"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-3">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-credit-card-fill"></i></div><div><div class="hiw-slide-title">Billing &amp; Collections</div><div class="hiw-slide-sub">Invoice · Payment link · Confirmation · Escalation · Salesforce</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">Collections 3× faster</span><span class="hiw-slide-count">04 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Invoice generated in Salesforce</div><div class="hiw-step-desc">Invoice text with on-brand payment URL fires automatically</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Client pays via branded link</div><div class="hiw-step-desc">Trust built by familiar URL · payments without phone calls</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Confirmation fires instantly</div><div class="hiw-step-desc">Matter record updated · receipt sent · case moves forward</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Overdue escalation sequence</div><div class="hiw-step-desc">Reminder escalates on schedule · attorney alerted if critical</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Collections 3× faster · Late payments ↓80% · Revenue and collections improved</span></div>
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
    <div style="display:inline-flex;align-items:center;gap:7px;background:rgba(0,87,184,.18);border:1px solid rgba(0,87,184,.35);border-radius:20px;padding:5px 14px;font-size:10px;font-weight:700;color:rgba(120,170,255,.9);letter-spacing:.07em;text-transform:uppercase;margin-bottom:20px">⚡ AI Use Case · Legal</div>
    <h2 style="font-size:clamp(22px,3vw,32px);font-weight:800;color:#fff;letter-spacing:-1px;line-height:1.15;margin-bottom:12px">AI-Powered Client Support<br><span style="color:#5B9BD5">for Law Firms. 24/7</span></h2>
    <p style="font-size:15px;color:rgba(255,255,255,.48);line-height:1.7;max-width:560px;margin-bottom:36px">Legal advisors spend the bulk of their time in administration - it's time to flip that ratio. 360 SMS AI agents handle routine client queries, document requests, appointment reminders, and billing follow-ups - automatically inside Salesforce. Attorneys get back their billable hours. Clients get answers without calling the firm.</p>
    <div class="row g-3 mb-4">
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-chat-left-text-fill fs-4"></i></div><div class="aa-title">Automated Client Conversation Summaries</div><div class="aa-desc">Generates concise summaries of legal conversations, highlights important discussion points, and identifies follow-up actions automatically after client interactions.</div><span class="aa-result">Improve case communication accuracy</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-translate fs-4"></i></div><div class="aa-title">Multilingual Legal Client Messaging</div><div class="aa-desc">Translates client conversations and legal updates across SMS and messaging channels to support multilingual communication seamlessly across all practice types.</div><span class="aa-result">Serve clients more confidently</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-magic fs-4"></i></div><div class="aa-title">Professional Message Refinement</div><div class="aa-desc">Refines legal communication by improving tone, clarity, and professionalism while preserving the original context and intent of the message.</div><span class="aa-result">Maintain professional client communication</span></div></div>
    </div>
    <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:10px;padding:20px 24px;display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap">
      <div>
        <div style="font-size:14px;font-weight:700;color:#fff;margin-bottom:3px">Achieve end-to-end legal communications with a single app integration - no code. Integrates with Clio.</div>
        <div style="font-size:12px;color:rgba(255,255,255,.4)">All client interactions auto-logged to the Salesforce matter record. Data stays inside your org.</div>
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
        <div class="comp-badge"><i class="bi bi-shield-lock-fill"></i> Salesforce Native · Clio Migration · All Practice Sizes</div>
        <div class="lbl">Platform &amp; Legal Specializations</div>
        <h2 class="sec-h">Supports all sizes and types<br>of legal practices</h2>
        <p class="sec-sub mb-0">360 SMS is highly customizable and adapts to any operational size and the legal specialization your practice provides. <strong>Integrate or migrate from Clio.</strong> All data stays inside Salesforce - secure, auditable, and compliant.</p>
        <div class="comp-pts">
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-building"></i></div><div><div class="comp-th">All practice sizes supported</div><div class="comp-tp">Solo practitioners, attorneys, small firms, mid-size and large law firms, full-service law firms, and in-house counsel - all supported and fully customizable.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-link-45deg"></i></div><div><div class="comp-th">Clio migration</div><div class="comp-tp">Migrate from Clio - the leading legal practice management platform. All case data, matter records, and client interactions synchronized inside Salesforce.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-shield-check"></i></div><div><div class="comp-th">Secure and compliant communications</div><div class="comp-tp">TLS-encrypted callouts. Branded custom domain URLs for trusted payment and document links. Double Opt-In consent management. Full audit trail inside Salesforce.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-check-circle-fill"></i></div><div><div class="comp-th">All legal specializations supported</div><div class="comp-tp">Civil litigation, criminal defense, personal injury, family law, real estate, IP, immigration, employment, bankruptcy, business law, elder law, and more.</div></div></div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="comp-visual">
          <div style="font-size:12px;font-weight:700;color:var(--ink);margin-bottom:3px">Salesforce-Native Legal Platform</div>
          <div style="font-size:11px;color:var(--ink3);margin-bottom:12px">Supported legal specializations</div>
          <div class="hck-row"><div class="hck">✓</div> Civil Litigation · Criminal Defense · Personal Injury</div>
          <div class="hck-row"><div class="hck">✓</div> Family Law · Estate Planning · Real Estate Law</div>
          <div class="hck-row"><div class="hck">✓</div> IP Law · Immigration Law · Employment Law</div>
          <div class="hck-row"><div class="hck">✓</div> Bankruptcy Law · Business Law · Compliance Law</div>
          <div class="hck-row"><div class="hck">✓</div> Elder Law · Government Law · Administrative Law</div>
          <div class="hck-row"><div class="hck">✓</div> General Practice · In-House Counsel · Solo Practitioners</div>
          <div style="background:var(--sf);border-radius:8px;padding:12px 14px;margin-top:4px">
            <div style="font-size:12px;font-weight:700;color:#fff;margin-bottom:3px">Migrate from Clio · Salesforce Native</div>
            <div style="font-size:11px;color:rgba(255,255,255,.7)">All client and matter data stays inside Salesforce. Secure, auditable, compliant - for every legal specialization.</div>
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