<?php
/*
Template Name:Industry Insurance
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
      <span style="color:var(--ink);font-weight:600">Insurance</span>
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
          Salesforce Native · Insurance SMS · Policyholder Texting
        </div>
        <h1>Reduce Policy Lapses and Boost<br>Renewals with<br><em>SMS for Insurance</em></h1>
        <p class="hero-sub">Automate renewal reminders, accelerate claims updates, and retain more policyholders with <strong>Salesforce SMS for insurance companies</strong> - no code. No middleware.</p>
        <div class="d-flex gap-3 flex-wrap mb-3">
          <a class="open-popup-form-on-click btn-primary-cta">Speak to a Texting Professional</a>
          <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" target="_blank" class="btn-outline-cta">Book a Demo</a>
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
            <div class="hero-ui-url">360 SMS - Policyholder Inbox · Salesforce CRM for Insurance</div>
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
              <div style="padding:10px 12px;border-bottom:1px solid #eee;font-size:11px;font-weight:700;color:var(--ink)">Policyholder Conversations</div>
              <div class="conv-item act border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">David Bickle</span><span style="font-size:10px;color:var(--ink4)">9:03 AM</span></div>
                <div class="conv-prev hl">What's my renewal rate? 🏠</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Rachel Morgan</span><span style="font-size:10px;color:var(--ink4)">8:44 AM</span></div>
                <div class="conv-prev dim">Policy renewed ✓</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px">💚 WhatsApp</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Carlos Mendez</span><span style="font-size:10px;color:var(--ink4)">Tue</span></div>
                <div class="conv-prev dim">What's my claim status?</div>
                <div class="d-flex align-items-center justify-content-between">
                  <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px"><i class="bi bi-robot"></i> AI Bot</div>
                  <span style="background:#0057B8;color:#fff;font-size:9px;font-weight:700;width:15px;height:15px;border-radius:50%;display:flex;align-items:center;justify-content:center">1</span>
                </div>
              </div>
              <div class="conv-item">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Sarah Collins</span><span style="font-size:10px;color:var(--ink4)">Mon</span></div>
                <div class="conv-prev dim">Claim settled - congrats! 🎉</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
            </div>
            <!-- Chat panel -->
            <div class="d-flex flex-column flex-grow-1" style="background:#fff;min-width:0">
              <div style="padding:10px 14px;border-bottom:1px solid #eee">
                <div style="font-size:13px;font-weight:700;color:var(--ink)">David Bickle - Policyholder</div>
                <div style="font-size:10px;color:var(--ink4)">via Salesforce CRM · Bickle Insurance</div>
              </div>
              <div class="flex-grow-1 d-flex flex-column gap-2 p-3" style="overflow:hidden">
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi David - your home policy renews in 14 days. Tap to renew instantly: ins.bickle.co/renew 🏠</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start" style="max-width:75%">
                  <div class="bubble-in">What's my renewal rate? 🏠</div>
                  <div class="msg-meta">David · 9:03 AM</div>
                </div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Your rate is $1,240/yr - same coverage, no changes. Reply YES to renew now or call us to adjust your policy!</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:6px;padding:6px 10px;font-size:10px;font-weight:700;color:#0057B8">✓ Renewal confirmed · Policy record updated in Salesforce</div>
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
      <div class="proof-item"><span class="proof-n">40%</span><span class="proof-l ms-2">Reduction in Policy<br>Lapse Rate</span></div>
      <div class="proof-item"><span class="proof-n">3×</span><span class="proof-l ms-2">Higher Policy<br>Renewal Rate</span></div>
      <div class="proof-item"><span class="proof-n">38%</span><span class="proof-l ms-2">Increase in Policyholder<br>Retention</span></div>
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
      <div class="lbl d-flex justify-content-center">Why insurance teams choose 360 SMS</div>
      <h2 class="sec-h mx-auto" style="max-width:640px">How 360 SMS Manages Insurance <br class="d-none d-md-block">Conversations at Every Stage</h2>
      <p class="sec-sub mx-auto" style="max-width:600px">Every use case runs natively inside Salesforce - from lead follow-up and policy onboarding to renewal reminders and claims updates. Click a use case to see it in action.</p>
    </div>

    <!-- Tab pills -->
    <div class="d-flex gap-2 flex-wrap justify-content-center mb-4">
      <button onclick="switchUC(0)" class="uc-tab-btn active"><i class="bi bi-lightning-charge-fill"></i> Lead Follow-Up</button>
      <button onclick="switchUC(1)" class="uc-tab-btn"><i class="bi bi-arrow-repeat"></i> Renewals &amp; Reminders</button>
      <button onclick="switchUC(2)" class="uc-tab-btn"><i class="bi bi-file-earmark-text-fill"></i> Claims Updates</button>
      <button onclick="switchUC(3)" class="uc-tab-btn"><i class="bi bi-credit-card-fill"></i> Premium Payments</button>
      <button onclick="switchUC(4)" class="uc-tab-btn"><i class="bi bi-robot"></i> AI Policy Support</button>
      <button onclick="switchUC(5)" class="uc-tab-btn"><i class="bi bi-bullseye"></i> Cross-Sell &amp; Retention</button>
    </div>

    <div style="background:#fff;border:1px solid var(--bdr);border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.07)">

      <!-- PANEL 0: Lead Follow-Up -->
      <div class="uc-panel active" id="uc-panel-0">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-lightning-charge-fill"></i> Lead Follow-Up</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Spend more time closing - SMS out in seconds before the agent sees the notification</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">New lead in Salesforce - SMS out in seconds. Automated SMS removes the human delay from that first response entirely, every time, regardless of volume or hour. Have more meaningful conversations with templated messages and automation.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Instant personalized intro fires the moment lead record is created in Salesforce</li>
              <li><span class="chk-icon">✓</span>Automatic lead assignment and consistent originator numbers - right agent, right lead</li>
              <li><span class="chk-icon">✓</span>Check qualification and eligibility for insurance via conversational chatbot flow</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">Seconds</div><div class="stat-l">First response</div></div>
              <div><div class="stat-n">50%</div><div class="stat-l">First-contact wins</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual outreach</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Lead Follow-Up · Salesforce CRM Flow</span><span class="uc-mock-badge">Live</span></div>
              <div class="uc-mock-body" style="background:#F9FBFF">
                <div style="font-size:9px;font-weight:700;color:var(--ink4);text-transform:uppercase;letter-spacing:.07em;text-align:center;margin-bottom:4px">Policyholder Conversation · SMS · &lt;60 Seconds</div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi David - I'm Sarah at Bickle Insurance. I'd love to help you find the right coverage. What type of insurance are you looking for? Reply HOME, AUTO, LIFE or HEALTH 🏥</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:65%">
                  <div class="bubble-in">HOME</div>
                  <div class="msg-meta">David · 9:02 AM</div>
                </div>
                <div class="align-self-end mt-1" style="max-width:88%">
                  <div class="bubble-out">Great! Let me check your eligibility. What's your ZIP code? I'll have options ready before our call.</div>
                  <div class="msg-meta text-end">9:02 AM · Auto-logged ✓</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ Qualified before first call · Agent briefed · Lead record updated in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">Seconds</div><div class="uc-mock-stat-l">Response</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">50%</div><div class="uc-mock-stat-l">First contact wins</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual outreach</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 1: Renewals & Policy Reminders -->
      <div class="uc-panel" id="uc-panel-1">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-arrow-repeat"></i> Renewals &amp; Policy Reminders</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Announce policy updates reliably - send renewal reminders that actually get read</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Payments can slip a customer's mind - don't let this grow into an issue. Send reminders for premiums, policy lapses and expiry. Announce policy updates with SMS. Send branded URLs for payments and document submissions.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>30-day, 14-day, and 7-day renewal reminders fire automatically from Salesforce</li>
              <li><span class="chk-icon">✓</span>Branded shortened URLs - policyholders trust and click to renew instantly</li>
              <li><span class="chk-icon">✓</span>Policy lapse and expiry alerts - agent notified if renewal not completed</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">↓40%</div><div class="stat-l">Lapse rate</div></div>
              <div><div class="stat-n">3×</div><div class="stat-l">Renewal rate</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual reminders</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Policy Renewals · Salesforce CRM</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> 30 days out · "Your home policy expires Jan 15 - renew now: ins.bickle.co/renew"</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> 14 days out · Follow-up reminder + branded renewal link</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> 7 days out · Final reminder with one-tap renewal link</div>
                <div class="uc-mock-row" style="background:#E8F0FB;border-color:#CCE0F7"><div class="uc-mock-dot">!</div> Renewed via link · Policy active · Salesforce record updated</div>
              </div>
              <div class="uc-mock-foot">✓ Renewals 3× higher · Lapse rate ↓40% · All logged in Salesforce CRM</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓40%</div><div class="uc-mock-stat-l">Lapse rate</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">3×</div><div class="uc-mock-stat-l">Renewal rate</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual reminders</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 2: Claims Updates -->
      <div class="uc-panel" id="uc-panel-2">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-file-earmark-text-fill"></i> Claims Updates</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Establish an easy claim initiation process - accelerate responses and grievance redressal</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Claims status updates fire automatically at each stage. Send notification alerts for claims when they get credited. Two-way SMS lets policyholders ask questions and receive answers in seconds - without calling the contact center.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Claim initiation confirmation sent instantly when filed via Salesforce</li>
              <li><span class="chk-icon">✓</span>Status updates at each claims stage - under review, approved, credited</li>
              <li><span class="chk-icon">✓</span>Two-way replies let policyholders query claims without calling support</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">↓50%</div><div class="stat-l">Claims calls</div></div>
              <div><div class="stat-n">3×</div><div class="stat-l">Faster resolution</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Missed updates</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Claims Updates · Salesforce CRM</span><span class="uc-mock-badge">Active</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-lightning-charge-fill"></i> Claim filed - confirmation sent instantly</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-search me-1"></i> Under review · "Your claim is being assessed - est. 48h"</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Sent ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-check-circle-fill me-1"></i> Claim approved · Approval notification sent</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Sent ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-cash-stack me-1"></i> Claim credited · Settlement alert sent</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Sent ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ Every claims stage communicated · Support calls ↓50% · Policyholder anxiety reduced</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓50%</div><div class="uc-mock-stat-l">Claims calls</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">3×</div><div class="uc-mock-stat-l">Faster resolution</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Missed updates</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 3: Premium Payment Reminders -->
      <div class="uc-panel" id="uc-panel-3">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-credit-card-fill"></i> Premium Payment Reminders</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Payments can slip a customer's mind - don't let this grow into a lapse</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Send reminders for premiums, policy lapses, and expiry. Send branded URLs for payments and document submissions. Redirect to payment gateways easily when sending reminders for mortgage installments - and see if policyholders opened those links.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Automated premium reminders with branded secure payment links</li>
              <li><span class="chk-icon">✓</span>Link tracking - see if policyholders opened payment link without paying</li>
              <li><span class="chk-icon">✓</span>Payment confirmation fires instantly - policy record updated in Salesforce</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">3×</div><div class="stat-l">Faster collections</div></div>
              <div><div class="stat-n">↓80%</div><div class="stat-l">Late payments</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual chasing</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#0a1e48 0%,#0d2d6b 100%)">
            <div class="uc-mock" style="background:#0a1e48;border:1px solid rgba(255,255,255,.1)">
              <div style="background:rgba(0,87,184,.25);border-bottom:1px solid rgba(255,255,255,.1);padding:12px 16px;display:flex;align-items:center;justify-content:space-between">
                <span style="font-size:11px;font-weight:700;color:rgba(255,255,255,.9)">Premium Reminders · Branded Payment Links · Salesforce</span>
                <span style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);background:rgba(0,87,184,.2);border:1px solid rgba(0,87,184,.3);border-radius:20px;padding:2px 9px;display:flex;align-items:center;gap:4px"><span style="width:5px;height:5px;border-radius:50%;background:#5B9EF5;display:inline-block;animation:pulse 2s infinite"></span> Running</span>
              </div>
              <div style="padding:14px;display:flex;flex-direction:column;gap:8px">
                <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:7px;padding:10px 12px">
                  <div style="font-size:9px;font-weight:700;color:rgba(91,158,245,.9);text-transform:uppercase;letter-spacing:.06em;margin-bottom:6px">💳 PREMIUM DUE - AUTO-REMINDER SEQUENCE</div>
                  <div style="font-size:11px;color:rgba(255,255,255,.8);line-height:1.6">"Hi Rachel - your $320 premium is due Jan 20. Pay securely: ins.bickle.co/pay 🔒"<br><br>Link opened ✓ - not yet paid → escalation reminder fires at 48h</div>
                  <div style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);margin-top:8px">✓ Payment received · Policy active · Record updated in Salesforce</div>
                </div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> Link tracking shows who opened without paying</div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> Payment confirmation fires instantly - no manual entry</div>
              </div>
              <div style="display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid rgba(255,255,255,.1)">
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">3×</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Faster collections</div></div>
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">↓80%</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Late payments</div></div>
                <div style="padding:10px;text-align:center"><div style="font-size:16px;font-weight:800;color:#fff">0</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Manual chasing</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 4: AI Policy Support -->
      <div class="uc-panel" id="uc-panel-4">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-robot"></i> AI Policy Support</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Reduce policyholder anxiety - connect customers to answers faster, 24/7</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Connect customers to policy answers faster. Share policy documents easily and send confirmations. Respond immediately when customers are interested in closing the deal and enable voice-message for out-of-office hours.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>AI handles policy FAQs, coverage queries, and eligibility checks 24/7</li>
              <li><span class="chk-icon">✓</span>Enable self-service - product selection, add-ons, document upload via SMS</li>
              <li><span class="chk-icon">✓</span>Book and reschedule appointments easily - all interactions logged in Salesforce</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">24/7</div><div class="stat-l">Coverage</div></div>
              <div><div class="stat-n">↓40%</div><div class="stat-l">Support calls</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Missed queries</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>AI Policy Support · 24/7 · Salesforce CRM</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Day 1 · Welcome pack + policy summary + doc upload link sent</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Policyholder asks "Am I covered for flood?" - AI answers instantly</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Self-service add-on selected via SMS - policy updated in Salesforce</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Appointment booked via reply - confirmation + reminder auto-sent</div>
              </div>
              <div class="uc-mock-foot">✓ 24/7 policy support · Support calls ↓40% · All logged in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">24/7</div><div class="uc-mock-stat-l">Coverage</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓40%</div><div class="uc-mock-stat-l">Support calls</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Missed queries</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 5: Cross-Sell & Retention -->
      <div class="uc-panel" id="uc-panel-5">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-bullseye"></i> Cross-Sell &amp; Retention</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Turn policy buyers into policyholders - and policyholders into repeat buyers</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Cross-sell other insurance products like life, health, dental, disability, and retirement coverage to existing customers. Wish customers important life events. Build insurance agent relationships and an inbox presence.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Cross-sell life, health, dental, disability and retirement coverage via triggered SMS</li>
              <li><span class="chk-icon">✓</span>Birthday and life event texts - build relationships that persist beyond the policy</li>
              <li><span class="chk-icon">✓</span>Post-policy feedback and review requests - collect social proof at scale</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">+38%</div><div class="stat-l">Retention rate</div></div>
              <div><div class="stat-n">3×</div><div class="stat-l">Cross-sell rate</div></div>
              <div><div class="stat-n">89%</div><div class="stat-l">Response rate</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Cross-Sell Trigger · Life Event · Salesforce</span><span class="uc-mock-badge">Sent</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-balloon-fill me-1"></i> Life event detected - birthday trigger fired in Salesforce</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-heart-fill me-1"></i> Birthday greeting + life coverage offer sent</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Sent ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-reply-fill me-1"></i> Carlos replied LIFE - eligibility check runs</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Triggered ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-check-circle-fill me-1"></i> New policy added · Salesforce record updated</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Active ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ Policy buyers become repeat buyers · Cross-sell 3× · Retention +38%</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">+38%</div><div class="uc-mock-stat-l">Retention</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">3×</div><div class="uc-mock-stat-l">Cross-sell</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">89%</div><div class="uc-mock-stat-l">Response rate</div></div>
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
        <div style="font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.55);margin-bottom:10px">Insurance Teams</div>
        <div style="font-size:clamp(18px,2.5vw,24px);font-weight:800;color:#fff;letter-spacing:-.4px;line-height:1.2;margin-bottom:8px">Ready to turn policy buyers into policyholders?</div>
        <div style="font-size:13px;color:rgba(255,255,255,.7);line-height:1.6">See 360 SMS running inside Salesforce for insurance in a free 20-minute demo.</div>
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
      <p class="sec-sub mx-auto" style="max-width:520px;margin:8px auto 0">Trigger · Send · Respond · Log - every insurance communication handled automatically.</p>
    </div>
    <div class="hiw-tabs">
      <button class="hiw-tab-btn active" onclick="hiwGo(0,this)"><i class="bi bi-lightning-charge-fill"></i> Lead Follow-Up</button>
      <button class="hiw-tab-btn" onclick="hiwGo(1,this)"><i class="bi bi-arrow-repeat"></i> Policy Renewals</button>
      <button class="hiw-tab-btn" onclick="hiwGo(2,this)"><i class="bi bi-file-earmark-text-fill"></i> Claims Updates</button>
      <button class="hiw-tab-btn" onclick="hiwGo(3,this)"><i class="bi bi-bullseye"></i> Cross-Sell &amp; Retention</button>
    </div>
    <div class="hiw-slider-wrap px-3 px-md-0">
      <div class="hiw-slider-track">

        <div class="hiw-slide active" id="hiw-0">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-lightning-charge-fill"></i></div><div><div class="hiw-slide-title">Lead Follow-Up</div><div class="hiw-slide-sub">Instant response · Chatbot qualification · Salesforce CRM</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">50% leads won by first responder</span><span class="hiw-slide-count">01 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Lead record created</div><div class="hiw-step-desc">Salesforce triggers instant SMS - before agent sees notification</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Personalized intro sent</div><div class="hiw-step-desc">Agent name, product, merge fields - personal at scale</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Chatbot qualifies eligibility</div><div class="hiw-step-desc">Decision tree checks coverage type, budget, requirements</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Agent briefed - qualified call</div><div class="hiw-step-desc">Lead record updated · Agent notified · No cold calls</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>First contact in seconds · Fully qualified before first call · All logged in Salesforce</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-0"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-1">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-arrow-repeat"></i></div><div><div class="hiw-slide-title">Policy Renewals</div><div class="hiw-slide-sub">30/14/7-day sequence · Branded URLs · Salesforce CRM</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">Lapse rate ↓40%</span><span class="hiw-slide-count">02 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Expiry date approaches</div><div class="hiw-step-desc">Salesforce policy record triggers 30-day reminder sequence</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Renewal reminders sent</div><div class="hiw-step-desc">30, 14, 7 days - branded URL for instant renewal</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Policyholder renews via link</div><div class="hiw-step-desc">One-click renewal - no phone call needed</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Confirmation sent · Record updated</div><div class="hiw-step-desc">Policy active · Salesforce record updated · Zero manual entry</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Renewals 3× higher · Lapse rate ↓40% · All logged in Salesforce CRM</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-1"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-2">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-file-earmark-text-fill"></i></div><div><div class="hiw-slide-title">Claims Updates</div><div class="hiw-slide-sub">Auto status updates · Two-way SMS · Salesforce CRM</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↓ 50% claims calls</span><span class="hiw-slide-count">03 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Claim filed in Salesforce</div><div class="hiw-step-desc">Claims record triggers instant confirmation text to policyholder</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Status updates at each stage</div><div class="hiw-step-desc">Under review, approved, settlement - automatic at every stage</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Queries handled via 2-way SMS</div><div class="hiw-step-desc">Policyholder replies - AI answers or routes to agent</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Credited - notification sent</div><div class="hiw-step-desc">Settlement credited alert · Record closed in Salesforce</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Every claims stage communicated · Support calls ↓50% · Policyholder anxiety reduced</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-2"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-3">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-bullseye"></i></div><div><div class="hiw-slide-title">Cross-Sell &amp; Retention</div><div class="hiw-slide-sub">Life events · Cross-sell triggers · Referral engine · Salesforce</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">+38% retention rate</span><span class="hiw-slide-count">04 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Life event detected in Salesforce</div><div class="hiw-step-desc">Birthday, anniversary, or policy milestone triggers sequence</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Personalized text sent</div><div class="hiw-step-desc">Life event greeting + relevant cross-sell offer included</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Policyholder replies LIFE/DENTAL</div><div class="hiw-step-desc">Cross-sell flow triggers - eligibility check runs automatically</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Add-on activated · Record updated</div><div class="hiw-step-desc">New policy added · Salesforce updated · Agent notified</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Policy buyers become repeat buyers · Cross-sell 3× · Retention +38% · All in Salesforce</span></div>
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
    <div style="display:inline-flex;align-items:center;gap:7px;background:rgba(0,87,184,.18);border:1px solid rgba(0,87,184,.35);border-radius:20px;padding:5px 14px;font-size:10px;font-weight:700;color:rgba(120,170,255,.9);letter-spacing:.07em;text-transform:uppercase;margin-bottom:20px">⚡ AI Use Case · Insurance</div>
    <h2 style="font-size:clamp(22px,3vw,32px);font-weight:800;color:#fff;letter-spacing:-1px;line-height:1.15;margin-bottom:12px">AI-Powered Policyholder<br><span style="color:#5B9BD5">Support &amp; Self-Service. 24/7</span></h2>
    <p style="font-size:15px;color:rgba(255,255,255,.48);line-height:1.7;max-width:560px;margin-bottom:36px">Insurance agents are too valuable to waste on routine policy queries and renewal reminders. 360 SMS AI agents handle qualification, claims queries, self-service add-ons, appointment booking, and cross-sell conversations - automatically inside Salesforce. Build an inbox presence that turns curious insurance hunters into loyal, repeat policyholders.</p>
    <div class="row g-3 mb-4">
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-shield-check fs-4"></i></div><div class="aa-title">Compliance Monitoring for Messaging</div><div class="aa-desc">Monitors outbound customer communication to identify compliance risks, spam triggers, misleading language, and opt-out intent before messages are delivered.</div><span class="aa-result">Reduce compliance-related risks</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-magic fs-4"></i></div><div class="aa-title">Intelligent Renewal Drip Suggestions</div><div class="aa-desc">Recommends optimized renewal reminders, follow-up journeys, and engagement sequences based on customer response behavior and interaction history.</div><span class="aa-result">Increase policy renewal rates</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-chat-text-fill fs-4"></i></div><div class="aa-title">Clearer Policy Communication</div><div class="aa-desc">Refines and simplifies insurance communication by rewriting complex messages into more customer-friendly and professional conversations.</div><span class="aa-result">Improve customer understanding instantly</span></div></div>
    </div>
    <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:10px;padding:20px 24px;display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap">
      <div>
        <div style="font-size:14px;font-weight:700;color:#fff;margin-bottom:3px">Achieve end-to-end insurance communications with a single app integration - no code.</div>
        <div style="font-size:12px;color:rgba(255,255,255,.4)">All conversations auto-logged to the policyholder record. Data stays inside your Salesforce org.</div>
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
        <div class="comp-badge"><i class="bi bi-shield-lock-fill"></i>Salesforce Native · Any Carrier · Branded Inbox</div>
        <div class="lbl">PLATFORM & CREDIBILITY </div>
        <h2 class="sec-h">Look credible in your customer’s </br>inbox - branded, consistent, and trusted </h2>
        <p class="sec-sub mb-0">All your data stays inside your Salesforce org - no middleware, no external platforms. Manage agent territories and lead assignment automatically, with consistent originator numbers throughout every relationship.</p>
        <div class="comp-pts">
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-geo-alt-fill"></i></div><div><div class="comp-th">Branded Sender IDs and Short Codes</div><div class="comp-tp">Use branded shortened URLs, short codes, and Sender IDs to make messages look more credible - policyholders trust and respond to messages from a familiar sender.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-link-45deg"></i></div><div><div class="comp-th">Agent territory and lead assignment</div><div class="comp-tp">Automatic lead assignment and consistent originator numbers - regardless of who sends the campaign. Geotag leads by area code to auto-assign to the right agent territory.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-megaphone-fill"></i></div><div><div class="comp-th">TLS-encrypted callouts</div><div class="comp-tp">Every callout from Salesforce to messaging providers is TLS-encrypted. Policyholder data protected in transit end-to-end - all stored inside your Salesforce org only.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-check-circle-fill"></i></div><div><div class="comp-th">Opt-In & Opt-Out consent management</div><div class="comp-tp">Double Opt-In and Opt-Out consent flows built in - essential for compliant insurance SMS marketing at scale, directly inside Salesforce.</div></div></div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="comp-visual">
          <div style="font-size:12px;font-weight:700;color:var(--ink);margin-bottom:3px">Salesforce-Native Insurance Platform</div>
          <div style="font-size:11px;color:var(--ink3);margin-bottom:12px">End-to-end policyholder communication</div>
          <div class="hck-row"><div class="hck">✓</div> All policyholder data inside your Salesforce CRM only</div>
          <div class="hck-row"><div class="hck">✓</div> 15+ channels · SMS, WhatsApp, MMS, voice · single inbox</div>
          <div class="hck-row"><div class="hck">✓</div> Geotag by area code · auto territory assignment</div>
          <div class="hck-row"><div class="hck">✓</div> Branded Sender IDs · Short Codes · custom URLs</div>
          <div class="hck-row"><div class="hck">✓</div> Opt-In / Opt-Out consent flows built in</div>
          <div class="hck-row"><div class="hck">✓</div> All interactions auto-logged to policyholder record</div>
          <div style="background:var(--sf);border-radius:8px;padding:12px 14px;margin-top:4px">
            <div style="font-size:12px;font-weight:700;color:#fff;margin-bottom:3px">Zero Code · Single App Integration</div>
            <div style="font-size:11px;color:rgba(255,255,255,.7)">Empower insurance agents to set up processes easily without code. Achieve end-to-end insurance communications with one Salesforce app.</div>
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