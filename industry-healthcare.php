<?php
/*
Template Name:Industry Healthcare
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
      <span style="color:var(--ink);font-weight:600">Healthcare</span>
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
          HIPAA-Compliant · Salesforce Native · Serverless
        </div>
        <h1>Improve Patient Outcomes<br>and Care Adherence with<br><em>SMS for Healthcare</em></h1>
        <p class="hero-sub">Reduce no-shows, improve medication adherence, and keep patients connected with our <strong>HIPAA-compliant SMS for healthcare</strong> - natively inside Salesforce. No code. No middleware.</p>
        <div class="d-flex gap-3 flex-wrap mb-3">
          <a class="open-popup-form-on-click btn-primary-cta">Speak to Our Experts</a>
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
            <div class="hero-ui-url">360 SMS - Patient Inbox · Salesforce Health Cloud</div>
          </div>
          <div class="d-flex" style="height:340px;overflow:hidden">
            <!-- Icon sidebar -->
            <div class="inbox-sidebar d-none d-sm-flex flex-column">
              <div class="inbox-icon act"><i class="bi bi-heart-pulse-fill" style="color:#fff;font-size:13px"></i><span class="inbox-badge">4</span></div>
              <div class="inbox-icon inact"><i class="bi bi-calendar-event-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i><span class="inbox-badge">2</span></div>
              <div class="inbox-icon inact"><i class="bi bi-clipboard2-pulse-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i><span class="inbox-badge">1</span></div>
              <div class="inbox-icon inact"><i class="bi bi-robot" style="color:rgba(255,255,255,.6);font-size:13px"></i><span class="inbox-badge">3</span></div>
              <div class="inbox-icon inact"><i class="bi bi-cash-stack" style="color:rgba(255,255,255,.6);font-size:13px"></i></div>
              <div class="inbox-icon inact mt-auto"><i class="bi bi-gear-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i></div>
            </div>
            <!-- Conversation list -->
            <div style="width:200px;flex-shrink:0;border-right:1px solid #eee;overflow:hidden" class="d-none d-md-flex flex-column">
              <div style="padding:10px 12px;border-bottom:1px solid #eee;font-size:11px;font-weight:700;color:var(--ink)">Patient Conversations</div>
              <div class="conv-item act border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Emma Thornton</span><span style="font-size:10px;color:var(--ink4)">9:03 AM</span></div>
                <div class="conv-prev hl">YES - I'll be there ✓</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Devan Thorne</span><span style="font-size:10px;color:var(--ink4)">8:44 AM</span></div>
                <div class="conv-prev dim">Medication reminder confirmed</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px">💚 WhatsApp</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Adrian Gonzalez</span><span style="font-size:10px;color:var(--ink4)">Tue</span></div>
                <div class="conv-prev dim">Can I reschedule my follow-up?</div>
                <div class="d-flex align-items-center justify-content-between">
                  <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px"><i class="bi bi-robot"></i> AI Bot</div>
                  <span style="background:#0057B8;color:#fff;font-size:9px;font-weight:700;width:15px;height:15px;border-radius:50%;display:flex;align-items:center;justify-content:center">1</span>
                </div>
              </div>
              <div class="conv-item">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Maria Santos</span><span style="font-size:10px;color:var(--ink4)">Mon</span></div>
                <div class="conv-prev dim">Payment received ✓</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
            </div>
            <!-- Chat panel -->
            <div class="d-flex flex-column flex-grow-1" style="background:#fff;min-width:0">
              <div style="padding:10px 14px;border-bottom:1px solid #eee">
                <div style="font-size:13px;font-weight:700;color:var(--ink)">Emma Thornton - Patient</div>
                <div style="font-size:10px;color:var(--ink4)">via Salesforce Health Cloud · Pathways to Care</div>
              </div>
              <div class="flex-grow-1 d-flex flex-column gap-2 p-3" style="overflow:hidden">
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Emma - reminder that your appointment with Dr. Patel is tomorrow at 10 AM. Reply YES to confirm or RESCHEDULE if needed. 🏥</div>
                  <div class="msg-meta text-end">360 SMS · 9:00 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start" style="max-width:75%">
                  <div class="bubble-in">YES - I'll be there ✓</div>
                  <div class="msg-meta">Emma · 9:03 AM</div>
                </div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Confirmed! We'll see you tomorrow at 10 AM. Please bring your insurance card. Reply HELP anytime.</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:6px;padding:6px 10px;font-size:10px;font-weight:700;color:#0057B8">✓ Appointment confirmed · Patient record updated in Salesforce Health Cloud</div>
              </div>
              <div style="border-top:1px solid #eee;padding:9px 12px;display:flex;align-items:center;gap:7px">
                <span style="font-size:15px;color:var(--ink3)"><i class="bi bi-paperclip"></i></span>
                <div style="flex:1;background:#F7F7F5;border:1px solid #eee;border-radius:6px;padding:7px 10px;font-size:11px;color:var(--ink4)">Type a message...</div>
                <div style="padding:6px 11px;background:#F7F7F5;border:1px solid #ddd;border-radius:5px;font-size:11px;font-weight:600;color:var(--ink2)">Template</div>
              </div>
              <div style="background:#F7F7F5;border-top:1px solid #eee;padding:5px 12px;display:flex;align-items:center;justify-content:space-between">
                <span style="font-size:9px;color:var(--ink4)">Auto-logged · Opt-out managed · PHI secured · 15+ channels active</span>
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
      <div class="proof-item"><span class="proof-n">40%</span><span class="proof-l ms-2">Fewer Patient<br>No-Shows</span></div>
      <div class="proof-item"><span class="proof-n">28%</span><span class="proof-l ms-2">Better Care Plan<br>Adherence</span></div>
      <div class="proof-item"><span class="proof-n">32%</span><span class="proof-l ms-2">Fewer Hospital<br>Readmissions</span></div>
      <div class="proof-item"><span class="proof-n">98%</span><span class="proof-l ms-2">SMS<br>Open Rate</span></div>
      <div class="proof-item"><span class="proof-n">1,200+</span><span class="proof-l ms-2">Verified<br>Reviews</span></div>
      <div class="proof-item">
        <span style="background:var(--sf-l);color:var(--sf);font-size:11px;font-weight:700;padding:4px 10px;border-radius:4px;line-height:1.5;white-space:nowrap">AgentExchange · #1 Rated</span>
      </div>
    </div>
  </div>
</div>

<!-- HEALTHCARE USE CASES -->
<section class="sec sec-alt" id="use-cases">
  <div class="container-xl">
    <div class="text-center mb-4">
      <div class="lbl d-flex justify-content-center">Why healthcare teams choose 360 SMS</div>
      <h2 class="sec-h mx-auto" style="max-width:640px">How 360 SMS Solves Every<br class="d-none d-md-block">Healthcare Communication Need</h2>
      <p class="sec-sub mx-auto" style="max-width:600px">Every use case runs natively inside Salesforce Health Cloud - HIPAA-compliant by design. Click a use case to see it in action.</p>
    </div>

    <!-- Tab pills -->
    <div class="d-flex gap-2 flex-wrap justify-content-center mb-4">
      <button onclick="switchUC(0)" class="uc-tab-btn active"><i class="bi bi-calendar-event-fill"></i> Appointment Reminders</button>
      <button onclick="switchUC(1)" class="uc-tab-btn"><i class="bi bi-clipboard2-pulse-fill"></i> Patient Onboarding</button>
      <button onclick="switchUC(2)" class="uc-tab-btn"><i class="bi bi-heart-pulse-fill"></i> Post-Care Follow-Up</button>
      <button onclick="switchUC(3)" class="uc-tab-btn"><i class="bi bi-cash-stack"></i> Billing Reminders</button>
      <button onclick="switchUC(4)" class="uc-tab-btn"><i class="bi bi-robot"></i> AI Patient Support</button>
      <button onclick="switchUC(5)" class="uc-tab-btn"><i class="bi bi-activity"></i> Wellness &amp; Preventive Care</button>
    </div>

    <div style="background:#fff;border:1px solid var(--bdr);border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.07)">

      <!-- PANEL 0: Appointment Reminders -->
      <div class="uc-panel active" id="uc-panel-0">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-calendar-event-fill"></i> Appointment Reminders</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Reduce no-shows by 40% and reallocate cancelled slots to cast a wider net</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Appointment reminders happen automatically, so your team can focus on patient care instead of chasing confirmations. Patients can respond directly to reschedule, while Salesforce Health Cloud keeps the record updated.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Auto-triggered 24h &amp; 2h before every appointment</li>
              <li><span class="chk-icon">✓</span>Patients reply YES / RESCHEDULE - Health Cloud record auto-updates</li>
              <li><span class="chk-icon">✓</span>Zero manual follow-up - front-desk staff fully freed up</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">40%</div><div class="stat-l">Fewer no-shows</div></div>
              <div><div class="stat-n">98%</div><div class="stat-l">SMS open rate</div></div>
              <div><div class="stat-n">15s</div><div class="stat-l">Avg response time</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Appointment Reminder · Health Cloud Flow</span><span class="uc-mock-badge">Live</span></div>
              <div class="uc-mock-body" style="background:#F9FBFF">
                <div style="font-size:9px;font-weight:700;color:var(--ink4);text-transform:uppercase;letter-spacing:.07em;text-align:center;margin-bottom:4px">Patient Conversation · SMS</div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Emma - your appointment with Dr. Patel is tomorrow at 10 AM. Reply <strong>YES</strong> to confirm or <strong>RESCHEDULE</strong> if needed. 🏥</div>
                  <div class="msg-meta text-end">360 SMS · 9:00 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:65%">
                  <div class="bubble-in">YES - I'll be there ✓</div>
                  <div class="msg-meta">Emma · 9:03 AM</div>
                </div>
                <div class="align-self-end mt-1" style="max-width:88%">
                  <div class="bubble-out">Confirmed! See you tomorrow at 10 AM. Please bring your insurance card. Reply HELP anytime.</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ Appointment confirmed · Patient record updated automatically in Health Cloud</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">40%</div><div class="uc-mock-stat-l">Fewer no-shows</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">98%</div><div class="uc-mock-stat-l">Open rate</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">15s</div><div class="uc-mock-stat-l">Avg response</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 1: Patient Onboarding -->
      <div class="uc-panel" id="uc-panel-1">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-clipboard2-pulse-fill"></i> Patient Onboarding</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Onboard new patients 50% faster - entirely over SMS</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">The moment a new patient record is created in Salesforce Health Cloud, an automated SMS sequence fires - collecting intake forms, insurance details, and pre-visit instructions without any manual outreach.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Automated sequence triggers instantly on record creation</li>
              <li><span class="chk-icon">✓</span>Collects intake forms, insurance &amp; pre-visit instructions over text</li>
              <li><span class="chk-icon">✓</span>Zero phone calls or manual admin required from staff</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">50%</div><div class="stat-l">Faster intake</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual calls</div></div>
              <div><div class="stat-n">5min</div><div class="stat-l">Avg completion</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Patient Onboarding Sequence · Health Cloud</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                  <span style="padding:5px 10px;background:#E8F0FB;border:1px solid #CCE0F7;border-radius:5px;font-size:10px;font-weight:700;color:#0057B8"><i class="bi bi-clipboard2-pulse-fill"></i> Record Created</span>
                  <span style="color:var(--ink4)">→</span>
                  <span style="padding:5px 10px;background:var(--sf-l);border:1px solid var(--sf-m);border-radius:5px;font-size:10px;font-weight:700;color:var(--sf)">💬 Welcome SMS</span>
                  <span style="color:var(--ink4)">→</span>
                  <span style="padding:5px 10px;background:#E8F0FB;border:1px solid #CCE0F7;border-radius:5px;font-size:10px;font-weight:700;color:#0057B8"><i class="bi bi-check-circle-fill"></i> Ready</span>
                </div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Welcome to Pathways to Care, Devan! Please complete your intake form here: [link] - takes 5 minutes. Your care team will be in touch shortly. 🏥</div>
                  <div class="msg-meta text-end">Auto-triggered · 2:14 PM</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:60%">
                  <div class="bubble-in">Done! Form submitted ✓</div>
                  <div class="msg-meta">Devan · 2:19 PM</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ Intake complete · Insurance captured · Pre-visit instructions sent</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">50%</div><div class="uc-mock-stat-l">Faster intake</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual calls</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">5min</div><div class="uc-mock-stat-l">Completion</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 2: Post-Care Follow-Up -->
      <div class="uc-panel" id="uc-panel-2">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-heart-pulse-fill"></i> Post-Care Follow-Up</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Improve care plan adherence by 28% with automated follow-up drips</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Multi-step SMS drip sequences tied directly to Salesforce care plan milestones. Medication reminders, recovery check-ins, and AI-powered escalation triggers ensure no patient falls through the cracks.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Multi-step drip sequences tied to care plan milestones</li>
              <li><span class="chk-icon">✓</span>Medication reminders, recovery check-ins, missed-dose escalation</li>
              <li><span class="chk-icon">✓</span>AI analyzes past campaigns and suggests an optimized one for more engagement</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">28%</div><div class="stat-l">↑ Adherence</div></div>
              <div><div class="stat-n">Auto</div><div class="stat-l">Escalation</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Missed cases</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Post-Care Follow-Up · Care Plan Drip</span><span class="uc-mock-badge">Active</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Day 1 · Discharge instructions + care team contacts sent</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Day 3 · Medication reminder (patient replied: "TAKEN")</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Day 7 · Recovery check-in (patient replied: "GOOD")</div>
                <div class="uc-mock-row" style="background:#E8F0FB;border-color:#CCE0F7"><div class="uc-mock-dot">!</div> Day 14 · No response to medication reminder - escalated to care coordinator</div>
              </div>
              <div class="uc-mock-foot">✓ Coordinator notified · Follow-up call scheduled · Record flagged</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">28%</div><div class="uc-mock-stat-l">↑ Adherence</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">Auto</div><div class="uc-mock-stat-l">Escalation</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Missed cases</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 3: Billing Reminders -->
      <div class="uc-panel" id="uc-panel-3">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-cash-stack"></i> Billing Reminders</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Recover outstanding balances 3× faster with automated payment SMS</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">SMS payment nudges triggered automatically from billing records in Salesforce. Direct links to payment portals are tracked via analytics, letting teams intervene on high-value threads to improve collections.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>SMS nudges auto-triggered from Salesforce billing records</li>
              <li><span class="chk-icon">✓</span>Payment portal links tracked via link analytics</li>
              <li><span class="chk-icon">✓</span>Teams intervene on high-value unpaid threads - no manual chasing</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">3×</div><div class="stat-l">Recovery rate</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Calls needed</div></div>
              <div><div class="stat-n">Auto</div><div class="stat-l">Record update</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Billing Reminders · Salesforce Health Cloud</span><span class="uc-mock-badge">Active</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-lightning-charge-fill"></i> Trigger: Invoice generated - outstanding balance detected</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-cash-stack me-1"></i> Payment reminder sent with secure portal link</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Delivered ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-link-45deg me-1"></i> Payment portal link clicked</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Tracked ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-check-circle-fill me-1"></i> Payment completed</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Paid ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ Invoice closed · No staff intervention needed · Record auto-updated</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">3×</div><div class="uc-mock-stat-l">Recovery rate</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Calls needed</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">Auto</div><div class="uc-mock-stat-l">Record update</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 4: AI Patient Support -->
      <div class="uc-panel" id="uc-panel-4">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-robot"></i> AI Patient Support</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Handle every patient query 24/7 - with zero staff overhead</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">AI chatbot handles FAQs, appointment queries, and triage routing around the clock. Sentiment detection flags distressed or urgent patients for immediate human handoff - every interaction logged to Health Cloud automatically.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>AI chatbot handles FAQs, queries &amp; triage routing 24/7</li>
              <li><span class="chk-icon">✓</span>Sentiment detection flags urgent patients in under 5 seconds</li>
              <li><span class="chk-icon">✓</span>All conversations auto-logged to patient record - PHI stays in Salesforce</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">24/7</div><div class="stat-l">Coverage</div></div>
              <div><div class="stat-n">&lt;5s</div><div class="stat-l">Escalation</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Missed urgents</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#0a1e48 0%,#0d2d6b 100%)">
            <div class="uc-mock" style="background:#0a1e48;border:1px solid rgba(255,255,255,.1)">
              <div style="background:rgba(0,87,184,.25);border-bottom:1px solid rgba(255,255,255,.1);padding:12px 16px;display:flex;align-items:center;justify-content:space-between">
                <span style="font-size:11px;font-weight:700;color:rgba(255,255,255,.9)">AI Support Agent · 24/7 · Health Cloud</span>
                <span style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);background:rgba(0,87,184,.2);border:1px solid rgba(0,87,184,.3);border-radius:20px;padding:2px 9px;display:flex;align-items:center;gap:4px"><span style="width:5px;height:5px;border-radius:50%;background:#5B9EF5;display:inline-block;animation:pulse 2s infinite"></span> Online</span>
              </div>
              <div style="padding:14px;display:flex;flex-direction:column;gap:8px">
                <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:7px;padding:10px 12px">
                  <div style="font-size:9px;font-weight:700;color:rgba(91,158,245,.9);text-transform:uppercase;letter-spacing:.06em;margin-bottom:6px">⚡ SENTIMENT: URGENT DETECTED</div>
                  <div style="font-size:11px;color:rgba(255,255,255,.8);line-height:1.6">Patient: "I've been having severe chest pain since this morning and can't reach my doctor."<br><br>AI: Urgency detected. Routing to your care coordinator immediately. Sending emergency guidance now.</div>
                  <div style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);margin-top:8px">🚨 Escalated to care coordinator in 4 seconds</div>
                </div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> FAQ &amp; appointment queries handled automatically - zero staff needed</div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> All conversations auto-logged - PHI stays inside Salesforce Health Cloud</div>
              </div>
              <div style="display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid rgba(255,255,255,.1)">
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">24/7</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Coverage</div></div>
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">&lt;5s</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Escalation</div></div>
                <div style="padding:10px;text-align:center"><div style="font-size:16px;font-weight:800;color:#fff">0</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Missed urgents</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 5: Wellness & Preventive Care -->
      <div class="uc-panel" id="uc-panel-5">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-activity"></i> Wellness &amp; Preventive Care</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Keep patients engaged between visits and boost retention by 31%</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Point-and-click drip campaigns via SMS, WhatsApp, or MMS - delivering wellness program check-ins, motivational content, and milestone follow-ups on a scheduled cadence to keep members engaged long-term.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Point-and-click drip campaigns via SMS, WhatsApp, or MMS</li>
              <li><span class="chk-icon">✓</span>Motivational content, check-ins, milestone follow-ups on schedule</li>
              <li><span class="chk-icon">✓</span>Keeps members engaged between visits and improves program ROI</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">72%</div><div class="stat-l">Completion rate</div></div>
              <div><div class="stat-n">+31%</div><div class="stat-l">Retention</div></div>
              <div><div class="stat-n">89%</div><div class="stat-l">Engagement</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Wellness Drip · SMS + WhatsApp</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Week 1 · Welcome to wellness program + goals set + care team intro</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Week 2 · Motivational check-in + healthy tips + resource links</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Week 4 · Milestone check-in - 89% members responded</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Week 8 · Re-engagement sent to at-risk members</div>
              </div>
              <div class="uc-mock-foot">✓ Completion rate 72% · Retention +31% vs non-SMS group</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">72%</div><div class="uc-mock-stat-l">Completion</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">+31%</div><div class="uc-mock-stat-l">Retention</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">89%</div><div class="uc-mock-stat-l">Engagement</div></div>
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
        <div style="font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.55);margin-bottom:10px">Healthcare Teams</div>
        <div style="font-size:clamp(18px,2.5vw,24px);font-weight:800;color:#fff;letter-spacing:-.4px;line-height:1.2;margin-bottom:8px">Ready to reduce no-shows?</div>
        <div style="font-size:13px;color:rgba(255,255,255,.7);line-height:1.6">See 360 SMS running inside Salesforce Health Cloud in a free 20-minute demo.</div>
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
      <p class="sec-sub mx-auto" style="max-width:520px;margin:8px auto 0">Every patient workflow follows the same pattern - trigger, send, respond, log.</p>
    </div>
    <div class="hiw-tabs">
      <button class="hiw-tab-btn active" onclick="hiwGo(0,this)"><i class="bi bi-calendar-event-fill"></i> Appointment Reminders</button>
      <button class="hiw-tab-btn" onclick="hiwGo(1,this)"><i class="bi bi-capsule"></i> Medication Reminders</button>
      <button class="hiw-tab-btn" onclick="hiwGo(2,this)"><i class="bi bi-cash-stack"></i> Billing &amp; Payments</button>
      <button class="hiw-tab-btn" onclick="hiwGo(3,this)"><i class="bi bi-heart-pulse-fill"></i> Care Plan Follow-Up</button>
    </div>
    <div class="hiw-slider-wrap px-3 px-md-0">
      <div class="hiw-slider-track">

        <div class="hiw-slide active" id="hiw-0">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-calendar-event-fill"></i></div><div><div class="hiw-slide-title">Appointment Reminders</div><div class="hiw-slide-sub">Auto-triggered · Salesforce Health Cloud</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↓ 40% no-shows</span><span class="hiw-slide-count">01 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Appointment created in Salesforce</div><div class="hiw-step-desc">Health Cloud record triggers the automated flow</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Reminder SMS sent 24h before</div><div class="hiw-step-desc">Personalized with doctor name, time &amp; location</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Patient replies YES or RESCHEDULE</div><div class="hiw-step-desc">2-way reply handled instantly by 360 SMS</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Record auto-updated in Salesforce</div><div class="hiw-step-desc">Confirmation logged - zero manual entry</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>All interactions auto-logged to Salesforce Health Cloud · Zero manual entry required</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-0"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-1">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-capsule"></i></div><div><div class="hiw-slide-title">Medication Reminders</div><div class="hiw-slide-sub">Daily automated reminders · Care plan milestones linked</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↑ Medication adherence</span><span class="hiw-slide-count">02 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Care plan set in Health Cloud</div><div class="hiw-step-desc">Medication schedule linked to patient record</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Daily reminder SMS fires automatically</div><div class="hiw-step-desc">Personalized with medication name &amp; dosage</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Patient replies TAKEN</div><div class="hiw-step-desc">One word - frictionless confirmation</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Missed dose escalates to care team</div><div class="hiw-step-desc">No reply in 2h triggers coordinator alert automatically</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Missed-dose alerts fire automatically · Care coordinator notified inside Salesforce</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-1"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-2">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-cash-stack"></i></div><div><div class="hiw-slide-title">Billing &amp; Payments</div><div class="hiw-slide-sub">Auto-triggered from billing records · Health Cloud</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↑ 3× faster collections</span><span class="hiw-slide-count">03 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Invoice generated in Salesforce</div><div class="hiw-step-desc">Billing record created after visit or service</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Payment link sent via SMS</div><div class="hiw-step-desc">Secure link - patient pays without logging in</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Patient pays or asks a question</div><div class="hiw-step-desc">Handled automatically or routed to billing staff</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Invoice marked paid in Salesforce</div><div class="hiw-step-desc">No manual reconciliation - instant record update</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Payment links tracked · Salesforce billing record updated automatically · Zero manual chasing</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-2"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-3">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-heart-pulse-fill"></i></div><div><div class="hiw-slide-title">Care Plan Follow-Up</div><div class="hiw-slide-sub">Recovery drip · Keyword routing · AI escalation</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↑ Patient outcomes</span><span class="hiw-slide-count">04 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Discharge or care plan created</div><div class="hiw-step-desc">Follow-up schedule set in Health Cloud</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Weekly check-in SMS sent</div><div class="hiw-step-desc">Personalized - tracking symptoms or wellbeing</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Patient replies GOOD, FAIR, or PAIN</div><div class="hiw-step-desc">Response triggers automated workflow for each case</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">At-risk patients flagged instantly</div><div class="hiw-step-desc">Conversation analysis + case created in Salesforce</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Escalates to coordinator · Case auto-created in Salesforce</span></div>
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
    <div style="display:inline-flex;align-items:center;gap:7px;background:rgba(0,87,184,.18);border:1px solid rgba(0,87,184,.35);border-radius:20px;padding:5px 14px;font-size:10px;font-weight:700;color:rgba(120,170,255,.9);letter-spacing:.07em;text-transform:uppercase;margin-bottom:20px">⚡ AI Use Case · Healthcare</div>
    <h2 style="font-size:clamp(22px,3vw,32px);font-weight:800;color:#fff;letter-spacing:-1px;line-height:1.15;margin-bottom:12px">AI-Powered Real-Time<br><span style="color:#5B9BD5">Patient Support. 24/7</span></h2>
    <p style="font-size:15px;color:rgba(255,255,255,.48);line-height:1.7;max-width:560px;margin-bottom:36px">High inbound patient query volume overwhelms front-desk teams - especially after hours. 360 SMS AI agents handle it all inside Salesforce: FAQs, appointment queries, triage routing, and urgent case escalation - automatically.</p>
    <div class="row g-3 mb-4">
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-robot fs-4"></i></div><div class="aa-title">Smart Patient Support Chatbots</div><div class="aa-desc">Automates appointment scheduling, prescription reminders, patient FAQs, and follow-ups across SMS and WhatsApp to reduce staff workload and improve patient responsiveness.</div><span class="aa-result">24/7 Faster patient communication</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-translate fs-4"></i></div><div class="aa-title">Multilingual Patient Conversations</div><div class="aa-desc">Translates patient conversations and care updates in real time, helping providers communicate clearly with diverse patient communities across preferred channels.</div><span class="aa-result">Better care without barriers</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-bar-chart-line-fill fs-4"></i></div><div class="aa-title">Patient Conversation Insights</div><div class="aa-desc">Analyzes patient conversations to detect sentiment, identify recurring concerns, generate summaries, and highlight important follow-up actions automatically.</div><span class="aa-result">Smarter patient engagement decisions</span></div></div>
    </div>
    <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:10px;padding:20px 24px;display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap">
      <div>
        <div style="font-size:14px;font-weight:700;color:#fff;margin-bottom:3px">All AI agents run natively inside Salesforce - no external tools, no extra logins.</div>
        <div style="font-size:12px;color:rgba(255,255,255,.4)">Every conversation is auto-logged to the patient record. PHI stays in your Salesforce org.</div>
      </div>
      <a href="<?php echo home_url(); ?>/360sms-for-agentforce/" style="background:var(--sf);color:#fff;border:none;border-radius:7px;padding:11px 22px;font-size:13px;font-weight:700;cursor:pointer;white-space:nowrap;text-decoration:none;display:inline-flex;align-items:center">See AI in action →</a>
    </div>
  </div>
</div>

<!-- HIPAA COMPLIANCE -->
<section class="sec">
  <div class="container-xl">
    <div class="row align-items-center g-4 g-lg-5">
      <div class="col-12 col-lg-6">
        <div class="comp-badge"><i class="bi bi-shield-lock-fill"></i> HIPAA-Compliant by Design</div>
        <div class="lbl">Security &amp; Compliance</div>
        <h2 class="sec-h">Aligning with compliance<br>requirements - by design</h2>
        <p class="sec-sub mb-0">360 SMS is architected so patient data <strong>never touches our servers</strong>. Everything runs inside your own HIPAA-compliant Salesforce cloud - the infrastructure your team already trusts.</p>
        <div class="comp-pts">
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-database-fill-slash"></i></div><div><div class="comp-th">Zero external data storage</div><div class="comp-tp">All data hosted on your HIPAA-compliant Salesforce cloud instance - 360 SMS never stores PHI on its own servers.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-lock-fill"></i></div><div><div class="comp-th">TLS-encrypted API callouts</div><div class="comp-tp">Every callout from Salesforce to messaging providers is TLS-encrypted, protecting data in transit end-to-end.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-shield-fill-check"></i></div><div><div class="comp-th">HTTP Basic &amp; Digest Authentication</div><div class="comp-tp">360 SMS supports HTTP Basic and Digest Auth to protect every API request from unauthorized access.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-check-circle-fill"></i></div><div><div class="comp-th">Double Opt-In &amp; Opt-Out consent management</div><div class="comp-tp">Manage recipient consent end-to-end - keeping all patient text communication fully HIPAA-compliant.</div></div></div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="comp-visual">
          <div style="font-size:12px;font-weight:700;color:var(--ink);margin-bottom:3px">HIPAA-Compliant Architecture</div>
          <div style="font-size:11px;color:var(--ink3);margin-bottom:12px">How patient data stays protected end-to-end</div>
          <div class="hck-row"><div class="hck">✓</div> Patient data stored in Salesforce Health Cloud (your org)</div>
          <div class="hck-row"><div class="hck">✓</div> TLS-encrypted callouts - PHI protected in transit</div>
          <div class="hck-row"><div class="hck">✓</div> No PHI stored on 360 SMS servers - ever</div>
          <div class="hck-row"><div class="hck">✓</div> HTTP Basic + Digest Auth on all API requests</div>
          <div class="hck-row"><div class="hck">✓</div> Double Opt-In / Opt-Out consent flows built in</div>
          <div class="hck-row"><div class="hck">✓</div> All conversations auto-logged to patient record</div>
          <div style="background:var(--sf);border-radius:8px;padding:12px 14px;margin-top:4px">
            <div style="font-size:12px;font-weight:700;color:#fff;margin-bottom:3px">Salesforce HIPAA Compliance</div>
            <div style="font-size:11px;color:rgba(255,255,255,.7)">360 SMS runs entirely within your Salesforce environment - inheriting all existing HIPAA, BAA, and audit controls.</div>
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