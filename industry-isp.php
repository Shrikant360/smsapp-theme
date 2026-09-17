<?php
/*
Template Name:Industry ISP
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
      <span style="color:var(--ink);font-weight:600">ISPs &amp; Telecom</span>
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
          Salesforce Native · ISP &amp; Broadband · Subscriber Texting
        </div>
        <h1>Reduce Subscriber Churn<br>and Cut Support Costs with<br><em>SMS for ISPs</em></h1>
        <p class="hero-sub">Automate outage alerts, subscriber onboarding, and retention drips with <strong>SMS integration with Salesforce for ISPs</strong> - no code. No middleware.</p>
        <div class="d-flex gap-3 flex-wrap mb-3">
          <a class="open-popup-form-on-click btn-primary-cta">Get the App</a>
          <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" target="_blank" class="btn-outline-cta">Ask for a Demo</a>
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
            <div class="hero-ui-url">360 SMS - Subscriber Inbox · Salesforce CRM for ISPs</div>
          </div>
          <div class="d-flex" style="height:340px;overflow:hidden">
            <!-- Icon sidebar -->
            <div class="inbox-sidebar d-none d-sm-flex flex-column">
              <div class="inbox-icon act"><i class="bi bi-wifi" style="color:#fff;font-size:13px"></i><span class="inbox-badge">4</span></div>
              <div class="inbox-icon inact"><i class="bi bi-exclamation-triangle-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i><span class="inbox-badge">2</span></div>
              <div class="inbox-icon inact"><i class="bi bi-cash-stack" style="color:rgba(255,255,255,.6);font-size:13px"></i><span class="inbox-badge">1</span></div>
              <div class="inbox-icon inact"><i class="bi bi-robot" style="color:rgba(255,255,255,.6);font-size:13px"></i><span class="inbox-badge">3</span></div>
              <div class="inbox-icon inact"><i class="bi bi-megaphone-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i></div>
              <div class="inbox-icon inact mt-auto"><i class="bi bi-gear-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i></div>
            </div>
            <!-- Conversation list -->
            <div style="width:200px;flex-shrink:0;border-right:1px solid #eee;overflow:hidden" class="d-none d-md-flex flex-column">
              <div style="padding:10px 12px;border-bottom:1px solid #eee;font-size:11px;font-weight:700;color:var(--ink)">Subscriber Conversations</div>
              <div class="conv-item act border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Bradley Farquhar</span><span style="font-size:10px;color:var(--ink4)">9:03 AM</span></div>
                <div class="conv-prev hl">UPGRADE - plan switched ✓</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Sarah Mitchell</span><span style="font-size:10px;color:var(--ink4)">8:44 AM</span></div>
                <div class="conv-prev dim">Payment confirmed ✓</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px">💚 WhatsApp</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">James O'Brien</span><span style="font-size:10px;color:var(--ink4)">Tue</span></div>
                <div class="conv-prev dim">Why is my connection slow?</div>
                <div class="d-flex align-items-center justify-content-between">
                  <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px"><i class="bi bi-robot"></i> AI Bot</div>
                  <span style="background:#0057B8;color:#fff;font-size:9px;font-weight:700;width:15px;height:15px;border-radius:50%;display:flex;align-items:center;justify-content:center">1</span>
                </div>
              </div>
              <div class="conv-item">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Maria Santos</span><span style="font-size:10px;color:var(--ink4)">Mon</span></div>
                <div class="conv-prev dim">Onboarding complete ✓</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
            </div>
            <!-- Chat panel -->
            <div class="d-flex flex-column flex-grow-1" style="background:#fff;min-width:0">
              <div style="padding:10px 14px;border-bottom:1px solid #eee">
                <div style="font-size:13px;font-weight:700;color:var(--ink)">Bradley Farquhar - Subscriber</div>
                <div style="font-size:10px;color:var(--ink4)">via Salesforce CRM · Purple Cow Internet</div>
              </div>
              <div class="flex-grow-1 d-flex flex-column gap-2 p-3" style="overflow:hidden">
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Bradley - you're eligible for our new Gigabit plan at $10/month more. Reply <strong>UPGRADE</strong> to switch instantly or <strong>INFO</strong> for details. 📡</div>
                  <div class="msg-meta text-end">360 SMS · 9:00 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start" style="max-width:75%">
                  <div class="bubble-in">UPGRADE - plan switched ✓</div>
                  <div class="msg-meta">Bradley · 9:03 AM</div>
                </div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Done! Your Gigabit plan is live. A technician will contact you if needed. Enjoy the speed upgrade! 🚀</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:6px;padding:6px 10px;font-size:10px;font-weight:700;color:#0057B8">✓ Plan upgraded · Subscriber record updated · Technician booking triggered in Salesforce</div>
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
      <div class="proof-item"><span class="proof-n">38%</span><span class="proof-l ms-2">Less Subscriber<br>Churn</span></div>
      <div class="proof-item"><span class="proof-n">40%</span><span class="proof-l ms-2">Fewer Inbound<br>Support Calls</span></div>
      <div class="proof-item"><span class="proof-n">3×</span><span class="proof-l ms-2">Higher Plan<br>Upgrade Rate</span></div>
      <div class="proof-item"><span class="proof-n">98%</span><span class="proof-l ms-2">SMS<br>Open Rate</span></div>
      <div class="proof-item"><span class="proof-n">1,200+</span><span class="proof-l ms-2">Verified<br>Reviews</span></div>
      <div class="proof-item">
        <span style="background:var(--sf-l);color:var(--sf);font-size:11px;font-weight:700;padding:4px 10px;border-radius:4px;line-height:1.5;white-space:nowrap">AgentExchange · #1 Rated</span>
      </div>
    </div>
  </div>
</div>

<!-- ISP USE CASES -->
<section class="sec sec-alt" id="use-cases">
  <div class="container-xl">
    <div class="text-center mb-4">
      <div class="lbl d-flex justify-content-center">Why ISPs &amp; telecom teams choose 360 SMS</div>
      <h2 class="sec-h mx-auto" style="max-width:640px">How 360 SMS Solves Every <br class="d-none d-md-block">ISP Communication Need</h2>
      <p class="sec-sub mx-auto" style="max-width:600px">Every use case runs natively inside Salesforce - migrate and centralize all subscriber communication in one place. Click a use case to see it in action.</p>
    </div>

    <!-- Tab pills -->
    <div class="d-flex gap-2 flex-wrap justify-content-center mb-4">
      <button onclick="switchUC(0)" class="uc-tab-btn active"><i class="bi bi-wifi"></i> Subscriber Onboarding</button>
      <button onclick="switchUC(1)" class="uc-tab-btn"><i class="bi bi-exclamation-triangle-fill"></i> Outage &amp; Service Alerts</button>
      <button onclick="switchUC(2)" class="uc-tab-btn"><i class="bi bi-cash-stack"></i> Billing &amp; Payments</button>
      <button onclick="switchUC(3)" class="uc-tab-btn"><i class="bi bi-megaphone-fill"></i> ISP Promotions &amp; Upsells</button>
      <button onclick="switchUC(4)" class="uc-tab-btn"><i class="bi bi-robot"></i> AI Support &amp; Chatbot</button>
      <button onclick="switchUC(5)" class="uc-tab-btn"><i class="bi bi-shield-heart-fill"></i> Loyalty &amp; Retention</button>
    </div>

    <div style="background:#fff;border:1px solid var(--bdr);border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.07)">

      <!-- PANEL 0: Subscriber Onboarding -->
      <div class="uc-panel active" id="uc-panel-0">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-wifi"></i> Subscriber Onboarding</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Automate subscriber onboarding - from welcome text to hardware setup</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Manage subscriber texting on Salesforce. Welcome sequence, setup guide, Wi-Fi configuration tips, hardware activation, and parental controls, all triggered automatically from Salesforce CRM with 360 SMS.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Welcome SMS + setup guide fires the moment subscriber record is created</li>
              <li><span class="chk-icon">✓</span>Guided hardware setup - Wi-Fi, broadband, IoT, home assistants via SMS &amp; WhatsApp</li>
              <li><span class="chk-icon">✓</span>Two-way replies let subscribers ask questions - all logged to Salesforce record</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">50%</div><div class="stat-l">Faster activation</div></div>
              <div><div class="stat-n">↓40%</div><div class="stat-l">Support calls</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual entry</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Subscriber Onboarding · Salesforce CRM Flow</span><span class="uc-mock-badge">Live</span></div>
              <div class="uc-mock-body" style="background:#F9FBFF">
                <div style="font-size:9px;font-weight:700;color:var(--ink4);text-transform:uppercase;letter-spacing:.07em;text-align:center;margin-bottom:4px">Subscriber Conversation · SMS</div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Welcome to Purple Cow Internet, Maria! 📡 Your setup guide: [link]. For Wi-Fi help reply <strong>WIFI</strong>, for router setup reply <strong>ROUTER</strong>. We're here 24/7.</div>
                  <div class="msg-meta text-end">360 SMS · 2:00 PM · Delivered ✓</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:50%">
                  <div class="bubble-in">WIFI</div>
                  <div class="msg-meta">Maria · 2:04 PM</div>
                </div>
                <div class="align-self-end mt-1" style="max-width:88%">
                  <div class="bubble-out">Here's your Wi-Fi setup guide: [link]. Takes 2 minutes. Reply DONE when you're connected or HELP for live support!</div>
                  <div class="msg-meta text-end">2:04 PM · Auto-logged ✓</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ Onboarding complete · Activation logged · Support calls ↓40%</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">50%</div><div class="uc-mock-stat-l">Faster activation</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓40%</div><div class="uc-mock-stat-l">Support calls</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual entry</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 1: Outage & Service Alerts -->
      <div class="uc-panel" id="uc-panel-1">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-exclamation-triangle-fill"></i> Outage &amp; Service Alerts</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Reach your entire subscriber base in minutes - reduce anxiety, slash call volume</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Send resolution updates automatically. Reduce customer anxiety and enhance experiences by keeping subscribers informed before they reach for the phone.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Outage alert fires to all affected subscribers within minutes of CRM trigger</li>
              <li><span class="chk-icon">✓</span>Resolution updates auto-sent when service is restored - zero manual comms</li>
              <li><span class="chk-icon">✓</span>Inbound queries during outages handled by AI - call volume drops dramatically</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">&lt;3 min</div><div class="stat-l">Alert time</div></div>
              <div><div class="stat-n">↓60%</div><div class="stat-l">Inbound calls</div></div>
              <div><div class="stat-n">98%</div><div class="stat-l">Open rate</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Outage Alert · Mass Broadcast · Salesforce CRM</span><span class="uc-mock-badge">Sent</span></div>
              <div class="uc-mock-body">
                <div style="background:#fff3cd;border:1px solid #ffc107;border-radius:7px;padding:9px 12px;font-size:11px;color:#856404;margin-bottom:2px"><i class="bi bi-exclamation-triangle-fill me-1"></i> Trigger: Service disruption logged - Eastside zone affected</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Alert broadcast to 2,840 affected subscribers - &lt;3 minutes</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> AI handled 412 inbound status queries - zero agents needed</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Service restored - resolution text auto-sent to all subscribers</div>
                <div class="uc-mock-row" style="background:#E8F0FB;border-color:#CCE0F7"><div class="uc-mock-dot">!</div> Inbound call volume ↓60% vs previous outage events</div>
              </div>
              <div class="uc-mock-foot">✓ Full outage lifecycle automated · All logged in Salesforce CRM</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">&lt;3 min</div><div class="uc-mock-stat-l">Alert time</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓60%</div><div class="uc-mock-stat-l">Inbound calls</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual comms</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 2: Billing & Payments -->
      <div class="uc-panel" id="uc-panel-2">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-cash-stack"></i> Billing &amp; Payments</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Automate billing reminders, payment confirmations, and overdue follow-ups</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">360 SMS integrates with Salesforce billing records to fire payment reminders automatically when due dates approach. Send payment confirmation instantly. Escalate overdue reminders on a scheduled cadence - reducing missed payments and eliminating manual chasing.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Payment due reminder fires automatically from Salesforce billing record</li>
              <li><span class="chk-icon">✓</span>Payment confirmation sent instantly - subscriber record updated in CRM</li>
              <li><span class="chk-icon">✓</span>Overdue escalation sequence - no manual chasing, no missed collections</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">3×</div><div class="stat-l">Faster collections</div></div>
              <div><div class="stat-n">↓80%</div><div class="stat-l">Late payments</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual chasing</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Billing Reminders · Salesforce CRM</span><span class="uc-mock-badge">Active</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-lightning-charge-fill"></i> Trigger: Bill due in 3 days - payment outstanding</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-cash-stack me-1"></i> Payment reminder sent with secure link</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Delivered ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-link-45deg me-1"></i> Payment portal link clicked</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Tracked ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-check-circle-fill me-1"></i> Payment completed · Confirmation sent</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Paid ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ Invoice closed · No agent needed · Subscriber record auto-updated</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">3×</div><div class="uc-mock-stat-l">Faster collections</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓80%</div><div class="uc-mock-stat-l">Late payments</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual chasing</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 3: ISP Promotions & Upsells -->
      <div class="uc-panel" id="uc-panel-3">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-megaphone-fill"></i> ISP Promotions &amp; Upsells</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Get more subscribers - offer limited period discounts powered by ISP promotion texts</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">ISP promotion texts in Salesforce - automated, timely, and personalized. Market premium infotainment, bundle upgrades, and new plan launches - target the right subscriber with the right offer.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Limited-period discounts and bundle promotions triggered from Salesforce</li>
              <li><span class="chk-icon">✓</span>Cross-sell based on usage data via Salesforce - right offer, right subscriber</li>
              <li><span class="chk-icon">✓</span>UPGRADE keyword flows - instant plan switch triggered from subscriber reply</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">3×</div><div class="stat-l">Upgrade rate</div></div>
              <div><div class="stat-n">90%+</div><div class="stat-l">Open rate</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual outreach</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Plan Promotion · Salesforce CRM Segment</span><span class="uc-mock-badge">Active</span></div>
              <div class="uc-mock-body" style="background:#F9FBFF">
                <div style="font-size:9px;font-weight:700;color:var(--ink4);text-transform:uppercase;letter-spacing:.07em;text-align:center;margin-bottom:4px">Subscriber Conversation · SMS</div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Bradley - based on your usage, our new Gigabit plan is a perfect fit at just $10 more/month. Reply <strong>UPGRADE</strong> to switch now or <strong>INFO</strong> for details. 📡</div>
                  <div class="msg-meta text-end">360 SMS · 9:00 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:50%">
                  <div class="bubble-in">UPGRADE</div>
                  <div class="msg-meta">Bradley · 9:03 AM</div>
                </div>
                <div class="align-self-end mt-1" style="max-width:88%">
                  <div class="bubble-out">Done! Gigabit plan is now active. Technician will be in touch if a visit is needed. Enjoy! 🚀</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ Plan upgraded in 1 reply · Salesforce record updated · Technician booking auto-triggered</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">3×</div><div class="uc-mock-stat-l">Upgrade rate</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">90%+</div><div class="uc-mock-stat-l">Open rate</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual outreach</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 4: AI Support & Chatbot -->
      <div class="uc-panel" id="uc-panel-4">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-robot"></i> AI Support &amp; Chatbot</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Reduce inbound voice calls - set up chatbots and IVR instantly</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">The Salesforce chatbot for ISP queries handles troubleshooting, billing FAQs, service appointments, and cross-selling based on usage data - automatically. Route and assign inquiries to queues based on any custom criteria. Reduce support costs dramatically.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Automate guided troubleshooting - connectivity, hardware, account queries</li>
              <li><span class="chk-icon">✓</span>See custom subscriber details when they contact you - context always available</li>
              <li><span class="chk-icon">✓</span>Let agents switch to telecom calling via Salesforce CRM easily from same inbox</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">24/7</div><div class="stat-l">Coverage</div></div>
              <div><div class="stat-n">↓40%</div><div class="stat-l">Support costs</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Missed queries</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#0a1e48 0%,#0d2d6b 100%)">
            <div class="uc-mock" style="background:#0a1e48;border:1px solid rgba(255,255,255,.1)">
              <div style="background:rgba(0,87,184,.25);border-bottom:1px solid rgba(255,255,255,.1);padding:12px 16px;display:flex;align-items:center;justify-content:space-between">
                <span style="font-size:11px;font-weight:700;color:rgba(255,255,255,.9)">AI Support Agent · 24/7 · Salesforce CRM</span>
                <span style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);background:rgba(0,87,184,.2);border:1px solid rgba(0,87,184,.3);border-radius:20px;padding:2px 9px;display:flex;align-items:center;gap:4px"><span style="width:5px;height:5px;border-radius:50%;background:#5B9EF5;display:inline-block;animation:pulse 2s infinite"></span> Online</span>
              </div>
              <div style="padding:14px;display:flex;flex-direction:column;gap:8px">
                <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:7px;padding:10px 12px">
                  <div style="font-size:9px;font-weight:700;color:rgba(91,158,245,.9);text-transform:uppercase;letter-spacing:.06em;margin-bottom:6px">🔧 GUIDED TROUBLESHOOTING · AUTO-HANDLED</div>
                  <div style="font-size:11px;color:rgba(255,255,255,.8);line-height:1.6">Subscriber: "My internet has been cutting out since this morning."<br><br>AI: Checking your line now, James. I can see your router last synced at 6:42 AM. Try restarting it - hold the power button for 10 seconds. Reply DONE when complete.</div>
                  <div style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);margin-top:8px">✓ Troubleshooting handled - no agent required</div>
                </div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> Custom subscriber context always available - no repeated questions</div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> Agents can switch to telecom calling from the same Salesforce inbox</div>
              </div>
              <div style="display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid rgba(255,255,255,.1)">
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">24/7</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Coverage</div></div>
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">↓40%</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Support costs</div></div>
                <div style="padding:10px;text-align:center"><div style="font-size:16px;font-weight:800;color:#fff">0</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Missed queries</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 5: Loyalty & Retention -->
      <div class="uc-panel" id="uc-panel-5">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-shield-heart-fill"></i> Loyalty &amp; Retention</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Keep customers coming back - reward loyalty, referrals, and relationship length</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Reward loyalty, nurture relationships, and earn referrals - the core of SMS marketing for internet providers. Nurture brand advocacy with your best customers and pitch network services to local bodies and communities.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Loyalty rewards and anniversary discounts triggered automatically from CRM</li>
              <li><span class="chk-icon">✓</span>Referral incentive texts - automate brand advocacy at scale</li>
              <li><span class="chk-icon">✓</span>Automated surveys collect preferences - feed plan personalization in Salesforce</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">+38%</div><div class="stat-l">Retention rate</div></div>
              <div><div class="stat-n">3×</div><div class="stat-l">More referrals</div></div>
              <div><div class="stat-n">89%</div><div class="stat-l">Survey response</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Loyalty &amp; Retention Drip · Salesforce CRM</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Year 1 anniversary · Loyalty discount sent - subscriber renewed</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Month 6 · Referral incentive sent - 2 new subscribers referred</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Satisfaction survey sent - 89% response rate · Preferences updated</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> At-risk churn flag · Retention offer auto-sent - subscriber retained</div>
              </div>
              <div class="uc-mock-foot">✓ Retention +38% · 3× referral rate · All logged to Salesforce CRM</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">+38%</div><div class="uc-mock-stat-l">Retention</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">3×</div><div class="uc-mock-stat-l">Referrals</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">89%</div><div class="uc-mock-stat-l">Survey response</div></div>
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
        <div style="font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.55);margin-bottom:10px">ISP &amp; Telecom Teams</div>
        <div style="font-size:clamp(18px,2.5vw,24px);font-weight:800;color:#fff;letter-spacing:-.4px;line-height:1.2;margin-bottom:8px">Ready to slash support costs and boost retention?</div>
        <div style="font-size:13px;color:rgba(255,255,255,.7);line-height:1.6">See 360 SMS running inside Salesforce for ISPs in a free 20-minute demo.</div>
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
      <p class="sec-sub mx-auto" style="max-width:520px;margin:8px auto 0">Every subscriber workflow follows the same pattern - trigger, send, respond, log.</p>
    </div>
    <div class="hiw-tabs">
      <button class="hiw-tab-btn active" onclick="hiwGo(0,this)"><i class="bi bi-wifi"></i> Subscriber Onboarding</button>
      <button class="hiw-tab-btn" onclick="hiwGo(1,this)"><i class="bi bi-exclamation-triangle-fill"></i> Outage Alerts</button>
      <button class="hiw-tab-btn" onclick="hiwGo(2,this)"><i class="bi bi-cash-stack"></i> Billing &amp; Payments</button>
      <button class="hiw-tab-btn" onclick="hiwGo(3,this)"><i class="bi bi-megaphone-fill"></i> Plan Promotions</button>
    </div>
    <div class="hiw-slider-wrap px-3 px-md-0">
      <div class="hiw-slider-track">

        <div class="hiw-slide active" id="hiw-0">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-wifi"></i></div><div><div class="hiw-slide-title">Subscriber Onboarding</div><div class="hiw-slide-sub">Auto-triggered · Salesforce CRM for ISPs</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↓ 40% support calls</span><span class="hiw-slide-count">01 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Subscriber record created</div><div class="hiw-step-desc">Salesforce CRM triggers onboarding flow automatically</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Welcome SMS + setup guide</div><div class="hiw-step-desc">Router, Wi-Fi &amp; hardware activation steps sent instantly</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Subscriber replies with questions</div><div class="hiw-step-desc">2-way support via SMS or WhatsApp - resolved in minutes</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Record auto-updated in Salesforce</div><div class="hiw-step-desc">Onboarding status logged - zero manual entry</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>All interactions auto-logged to Salesforce CRM · Activation 50% faster · Support calls ↓40%</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-0"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-1">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-exclamation-triangle-fill"></i></div><div><div class="hiw-slide-title">Outage Alerts</div><div class="hiw-slide-sub">Mass broadcast · AI-handled inbound · Salesforce CRM</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↓ 60% inbound calls</span><span class="hiw-slide-count">02 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Service disruption logged</div><div class="hiw-step-desc">Salesforce record triggers mass outage alert broadcast</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Alert sent to all affected</div><div class="hiw-step-desc">Personalized with subscriber name and area - &lt;3 minutes</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">AI handles inbound queries</div><div class="hiw-step-desc">Chatbot answers status questions - no agents needed</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Resolution text auto-sent</div><div class="hiw-step-desc">Service restored update fires automatically · Record updated</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Entire subscriber base alerted in &lt;3 minutes · Inbound calls ↓60% · All logged in Salesforce</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-1"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-2">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-cash-stack"></i></div><div><div class="hiw-slide-title">Billing &amp; Payments</div><div class="hiw-slide-sub">Auto-triggered from billing records · Salesforce CRM</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↑ 3× faster collections</span><span class="hiw-slide-count">03 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Bill generated in Salesforce</div><div class="hiw-step-desc">Billing record triggers automated payment reminder sequence</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Payment reminder + link sent</div><div class="hiw-step-desc">Secure payment link - subscriber pays without calling in</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Subscriber pays or queries</div><div class="hiw-step-desc">Handled automatically or routed to billing agent</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Invoice marked paid in Salesforce</div><div class="hiw-step-desc">Confirmation sent instantly · No manual reconciliation</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Payment links tracked · Salesforce billing record updated automatically · Zero manual chasing</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-2"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-3">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-megaphone-fill"></i></div><div><div class="hiw-slide-title">Plan Promotions</div><div class="hiw-slide-sub">Usage-based targeting · UPGRADE keyword · Salesforce CRM</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↑ 3× upgrade rate</span><span class="hiw-slide-count">04 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Campaign created in Salesforce</div><div class="hiw-step-desc">Eligible subscribers identified from CRM usage data</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Personalized promo text sent</div><div class="hiw-step-desc">Offer tailored to subscriber plan, usage &amp; tenure</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Subscriber replies UPGRADE</div><div class="hiw-step-desc">Plan upgrade flow triggers automatically - 1 reply to switch</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Plan updated in Salesforce</div><div class="hiw-step-desc">Confirmation sent · Technician booking triggered if needed</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Plan upgraded in 1 reply · Salesforce record updated · Technician booking auto-triggered</span></div>
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
    <div style="display:inline-flex;align-items:center;gap:7px;background:rgba(0,87,184,.18);border:1px solid rgba(0,87,184,.35);border-radius:20px;padding:5px 14px;font-size:10px;font-weight:700;color:rgba(120,170,255,.9);letter-spacing:.07em;text-transform:uppercase;margin-bottom:20px">⚡ AI Use Case · ISPs &amp; Telecom</div>
    <h2 style="font-size:clamp(22px,3vw,32px);font-weight:800;color:#fff;letter-spacing:-1px;line-height:1.15;margin-bottom:12px">AI-Powered Real-Time<br><span style="color:#5B9BD5">Subscriber Support. 24/7</span></h2>
    <p style="font-size:15px;color:rgba(255,255,255,.48);line-height:1.7;max-width:560px;margin-bottom:36px">High inbound subscriber query volume overwhelms ISP support teams - especially during outages. 360 SMS AI agents handle it all inside Salesforce: troubleshooting, billing FAQs, plan queries, and case routing - automatically. Reduce inbound voice calls, slash support costs, and seize every selling opportunity.</p>
    <div class="row g-3 mb-4">
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-robot fs-4"></i></div><div class="aa-title">Automated Customer Support Chatbots</div><div class="aa-desc">Handles billing questions, outage inquiries, plan upgrades, and service requests across messaging channels without increasing support workload.</div><span class="aa-result">Reduce support response delays</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-chat-text-fill fs-4"></i></div><div class="aa-title">Context-Aware Customer Replies</div><div class="aa-desc">Generates intelligent responses based on previous customer conversations to maintain faster and more personalized support interactions.</div><span class="aa-result">Improve customer response consistency</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-bar-chart-line-fill fs-4"></i></div><div class="aa-title">Service Experience Analysis</div><div class="aa-desc">Analyzes customer conversations to identify frustration trends, recurring service complaints, and engagement patterns for better support decisions.</div><span class="aa-result">Improve customer satisfaction levels</span></div></div>
    </div>
    <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:10px;padding:20px 24px;display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap">
      <div>
        <div style="font-size:14px;font-weight:700;color:#fff;margin-bottom:3px">All AI agents run natively inside Salesforce - no external tools, no extra logins.</div>
        <div style="font-size:12px;color:rgba(255,255,255,.4)">Every interaction is auto-logged to the subscriber record. Data stays in your Salesforce org.</div>
      </div>
      <a href="<?php echo home_url(); ?>/360sms-for-agentforce/" style="background:var(--sf);color:#fff;border:none;border-radius:7px;padding:11px 22px;font-size:13px;font-weight:700;cursor:pointer;white-space:nowrap;text-decoration:none;display:inline-flex;align-items:center">See AI in action →</a>
    </div>
  </div>
</div>

<!-- PLATFORM & INTEGRATION -->
<section class="sec">
  <div class="container-xl">
    <div class="row align-items-center g-4 g-lg-5">
      <div class="col-12 col-lg-6">
        <div class="comp-badge"><i class="bi bi-shield-lock-fill"></i> Salesforce Native · Any Carrier · Any Aggregator</div>
        <div class="lbl">Platform &amp; Integration</div>
        <h2 class="sec-h">Built inside Salesforce -<br>centralize all support processes</h2>
        <p class="sec-sub mb-0">360 SMS is architected so all subscriber data stays inside your Salesforce CRM. Migrate and centralize all communication support processes in one place - <strong>SMS, WhatsApp, MMS, voice, and more</strong>. Choose any carrier, any aggregator. No middleware, no data leaving your control.</p>
        <div class="comp-pts">
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-broadcast-pin"></i></div><div><div class="comp-th">Any carrier, any aggregator</div><div class="comp-tp">360 SMS works with all major carriers and messaging aggregators - no lock-in. Keep your existing telecom infrastructure.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-inbox-fill"></i></div><div><div class="comp-th">See incoming alerts from 15+ channels</div><div class="comp-tp">SMS, WhatsApp, MMS, voice, Facebook Messenger, and more - all in a single Salesforce inbox. Context carried across every channel.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-lock-fill"></i></div><div><div class="comp-th">TLS-encrypted API callouts</div><div class="comp-tp">Every callout from Salesforce to messaging providers is TLS-encrypted. Subscriber data protected in transit end-to-end.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-check-circle-fill"></i></div><div><div class="comp-th">Opt-In &amp; Opt-Out consent management</div><div class="comp-tp">Double Opt-In and Opt-Out consent flows built in - essential for any compliant SMS for ISPs deployment at scale.</div></div></div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="comp-visual">
          <div style="font-size:12px;font-weight:700;color:var(--ink);margin-bottom:3px">Salesforce-Native ISP Architecture</div>
          <div style="font-size:11px;color:var(--ink3);margin-bottom:12px">How subscriber data and communications stay centralized</div>
          <div class="hck-row"><div class="hck">✓</div> All subscriber data inside your Salesforce CRM only</div>
          <div class="hck-row"><div class="hck">✓</div> SMS, WhatsApp, MMS, voice - single inbox in Salesforce</div>
          <div class="hck-row"><div class="hck">✓</div> TLS-encrypted callouts - data protected in transit</div>
          <div class="hck-row"><div class="hck">✓</div> Any carrier · any aggregator · no lock-in</div>
          <div class="hck-row"><div class="hck">✓</div> Opt-In / Opt-Out consent flows built in</div>
          <div class="hck-row"><div class="hck">✓</div> All interactions auto-logged to subscriber record</div>
          <div style="background:var(--sf);border-radius:8px;padding:12px 14px;margin-top:4px">
            <div style="font-size:12px;font-weight:700;color:#fff;margin-bottom:3px">Centralize Everything in Salesforce</div>
            <div style="font-size:11px;color:rgba(255,255,255,.7)">Automate away messages, routing, forwarding, and scheduling entirely within your Salesforce ISP environment.</div>
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