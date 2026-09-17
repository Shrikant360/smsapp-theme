<?php
/*
Template Name:Industry Recruitment
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
      <span style="color:var(--ink);font-weight:600">Recruitment</span>
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
          Salesforce Native · Recruitment SMS · Candidate Texting
        </div>
        <h1>Fill Job Orders Faster and Hire<br>Quality Candidates with<br><em>SMS for Recruitment</em></h1>
        <p class="hero-sub">Automate candidate outreach, screening, and interview scheduling with <strong>Salesforce recruiting text messages</strong> to shrink time-to-hire without skimping on quality - no code. No middleware.</p>
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
            <div class="hero-ui-url">360 SMS - Candidate Inbox · Salesforce CRM for Recruitment</div>
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
              <div style="padding:10px 12px;border-bottom:1px solid #eee;font-size:11px;font-weight:700;color:var(--ink)">Candidate Conversations</div>
              <div class="conv-item act border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Karen Duke</span><span style="font-size:10px;color:var(--ink4)">9:03 AM</span></div>
                <div class="conv-prev hl">APPLY - sounds great! 💼</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Julie Gilys</span><span style="font-size:10px;color:var(--ink4)">8:44 AM</span></div>
                <div class="conv-prev dim">CONFIRM - Tuesday 10am ✓</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px">💚 WhatsApp</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Sarah Mitchell</span><span style="font-size:10px;color:var(--ink4)">Tue</span></div>
                <div class="conv-prev dim">What's my application status?</div>
                <div class="d-flex align-items-center justify-content-between">
                  <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px"><i class="bi bi-robot"></i> AI Bot</div>
                  <span style="background:#0057B8;color:#fff;font-size:9px;font-weight:700;width:15px;height:15px;border-radius:50%;display:flex;align-items:center;justify-content:center">1</span>
                </div>
              </div>
              <div class="conv-item">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Alex Torres</span><span style="font-size:10px;color:var(--ink4)">Mon</span></div>
                <div class="conv-prev dim">Offer accepted - congrats! 🎉</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
            </div>
            <!-- Chat panel -->
            <div class="d-flex flex-column flex-grow-1" style="background:#fff;min-width:0">
              <div style="padding:10px 14px;border-bottom:1px solid #eee">
                <div style="font-size:13px;font-weight:700;color:var(--ink)">Karen Duke - Candidate</div>
                <div style="font-size:10px;color:var(--ink4)">via Salesforce CRM · Belay</div>
              </div>
              <div class="flex-grow-1 d-flex flex-column gap-2 p-3" style="overflow:hidden">
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Karen - we have a Remote Executive Assistant role, $55K, full-time. Sounds like a fit? Reply APPLY to start your application 💼</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start" style="max-width:75%">
                  <div class="bubble-in">APPLY - sounds great! 💼</div>
                  <div class="msg-meta">Karen · 9:03 AM</div>
                </div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Great! Quick question 1 of 4 - how many years of executive support experience do you have? Reply A) Under 2  B) 2–5  C) 5+</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:6px;padding:6px 10px;font-size:10px;font-weight:700;color:#0057B8">✓ Application started · Profiling in progress · Candidate record updated in Salesforce</div>
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
      <div class="proof-item"><span class="proof-n">40%</span><span class="proof-l ms-2">Reduction in<br>Time-to-Hire</span></div>
      <div class="proof-item"><span class="proof-n">33%</span><span class="proof-l ms-2">Increase in Candidate<br>Response</span></div>
      <div class="proof-item"><span class="proof-n">60%</span><span class="proof-l ms-2">Reduced Interview<br>No-Shows</span></div>
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
      <div class="lbl d-flex justify-content-center">Why recruitment teams choose 360 SMS</div>
      <h2 class="sec-h mx-auto" style="max-width:640px">Get Texting to Do the Work for You -<br class="d-none d-md-block">Shrink Time-to-Hire Across the Board</h2>
      <p class="sec-sub mx-auto" style="max-width:600px">Every use case runs natively inside Salesforce - from bulk candidate outreach and progressive profiling to interview scheduling and onboarding. Click a use case to see it in action.</p>
    </div>

    <!-- Tab pills -->
    <div class="d-flex gap-2 flex-wrap justify-content-center mb-4">
      <button onclick="switchUC(0)" class="uc-tab-btn active"><i class="bi bi-megaphone-fill"></i> Bulk Outreach</button>
      <button onclick="switchUC(1)" class="uc-tab-btn"><i class="bi bi-funnel-fill"></i> Progressive Profiling</button>
      <button onclick="switchUC(2)" class="uc-tab-btn"><i class="bi bi-calendar-check-fill"></i> Interview Scheduling</button>
      <button onclick="switchUC(3)" class="uc-tab-btn"><i class="bi bi-bell-fill"></i> Alerts &amp; Status Updates</button>
      <button onclick="switchUC(4)" class="uc-tab-btn"><i class="bi bi-robot"></i> AI Candidate Support</button>
      <button onclick="switchUC(5)" class="uc-tab-btn"><i class="bi bi-rocket-takeoff-fill"></i> Onboarding Automation</button>
    </div>

    <div style="background:#fff;border:1px solid var(--bdr);border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.07)">

      <!-- PANEL 0: Bulk Candidate Outreach -->
      <div class="uc-panel active" id="uc-panel-0">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-megaphone-fill"></i> Bulk Candidate Outreach</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Get more applications - make sure your hiring pipelines never dry out</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Broadcast messages to candidate groups, invite applications, and start conversations at scale. Keep pipelines full, re-engage ghosting candidates, and personalize every Salesforce SMS with merge fields.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Broadcast to entire candidate pools from any Salesforce segment - no CSV exports</li>
              <li><span class="chk-icon">✓</span>Access 15+ popular texting channels to enhance reach and widen your candidate pool</li>
              <li><span class="chk-icon">✓</span>Let candidates apply to multiple roles at once - all tracked in Salesforce automatically</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">10×</div><div class="stat-l">Response vs email</div></div>
              <div><div class="stat-n">98%</div><div class="stat-l">SMS open rate</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">CSV exports</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Bulk Outreach · Salesforce Campaign</span><span class="uc-mock-badge">Live</span></div>
              <div class="uc-mock-body" style="background:#F9FBFF">
                <div style="font-size:9px;font-weight:700;color:var(--ink4);text-transform:uppercase;letter-spacing:.07em;text-align:center;margin-bottom:4px">Broadcast · 2,400 Candidates · Personalized</div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Karen - we have a Remote Executive Assistant role, $55K, full-time. Sounds like a fit? Reply APPLY to start 💼</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:55%">
                  <div class="bubble-in">APPLY</div>
                  <div class="msg-meta">Karen · 9:02 AM</div>
                </div>
                <div class="align-self-end mt-1" style="max-width:88%">
                  <div class="bubble-out">Great! Your application is started. We'll send your first screening question shortly - watch this space!</div>
                  <div class="msg-meta text-end">9:02 AM · Auto-logged ✓</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ 2,400 candidates reached · Pipeline full · All replies tracked in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">10×</div><div class="uc-mock-stat-l">Response vs email</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">98%</div><div class="uc-mock-stat-l">Open rate</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">CSV exports</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 1: Progressive Profiling -->
      <div class="uc-panel" id="uc-panel-1">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-funnel-fill"></i> Progressive Profiling</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Qualify &amp; process applications faster - screen more accurately than resume parsing</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Automate candidate qualification with decision trees that match roles, score applicants, capture information, and evaluate attributes. Screen applications more accurately than resume parsing tools and focus on high-potential candidates.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Decision trees driven by keyword replies - skills, experience, availability, location</li>
              <li><span class="chk-icon">✓</span>Candidates scored and matched to roles automatically - recruiters enter calls briefed</li>
              <li><span class="chk-icon">✓</span>Enforces equal opportunity - same structured question sequence for every candidate</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">3×</div><div class="stat-l">More qualified</div></div>
              <div><div class="stat-n">24/7</div><div class="stat-l">Screening</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Wasted calls</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Progressive Profiling · Decision Tree · Salesforce</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Q1: Years of experience - Karen replied C) 5+</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Q2: Availability - Full-time, immediate start confirmed</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Q3: Remote working - Yes, fully set up at home</div>
                <div class="uc-mock-row" style="background:#E8F0FB;border-color:#CCE0F7"><div class="uc-mock-dot">!</div> Score: 92/100 · Matched to EA role · Recruiter briefed in Salesforce</div>
              </div>
              <div class="uc-mock-foot">✓ Screened automatically · Equal opportunity enforced · Recruiter only talks to top matches</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">3×</div><div class="uc-mock-stat-l">More qualified</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">24/7</div><div class="uc-mock-stat-l">Screening</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Wasted calls</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 2: Interview Scheduling -->
      <div class="uc-panel" id="uc-panel-2">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-calendar-check-fill"></i> Interview Scheduling</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Reduce no-shows - automated reminders that stop recruiters driving to empty rooms</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Send interview invites with scheduling links, automated confirmations, reminders, and two-way replies for rescheduling. Reduce no-shows with timely SMS follow-ups and easy conflict resolution.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Interview invite + scheduling link fires automatically from Salesforce</li>
              <li><span class="chk-icon">✓</span>24-hour and morning-of reminders fire automatically - no manual coordination</li>
              <li><span class="chk-icon">✓</span>CONFIRM and RESCHEDULE keywords - candidates self-serve, Salesforce auto-updates</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">↓60%</div><div class="stat-l">No-shows</div></div>
              <div><div class="stat-n">↑40%</div><div class="stat-l">Attendance rate</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual reminders</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Interview Scheduling · Salesforce CRM</span><span class="uc-mock-badge">Active</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-lightning-charge-fill"></i> Shortlisted - interview invite fires automatically</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-calendar2-check-fill me-1"></i> Karen replied CONFIRM - Zoom link sent</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Confirmed ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-clock-fill me-1"></i> 24-hour reminder sent automatically</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Sent ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-alarm-fill me-1"></i> Morning-of reminder sent - candidate shows up</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Attended ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ No-shows ↓60% · Candidates hit reminders on lock screen · All logged in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓60%</div><div class="uc-mock-stat-l">No-shows</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↑40%</div><div class="uc-mock-stat-l">Attendance</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual reminders</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 3: Alerts & Status Updates -->
      <div class="uc-panel" id="uc-panel-3">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-bell-fill"></i> Alerts &amp; Status Updates</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Manage and track the entire hiring cycle - keep every candidate informed at every stage</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Update applicants of their application status. Send them application numbers and instructions for subsequent interview stages. Manage and track the entire hiring cycle - sourcing, shortlisting, acceptance, and onboarding. Let candidates apply to multiple roles at once and follow up with each of them at all stages automatically.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Application status updates fire at every stage - shortlisted, interviewing, offer, declined</li>
              <li><span class="chk-icon">✓</span>Application numbers and next-step instructions sent automatically</li>
              <li><span class="chk-icon">✓</span>Capture replies from candidates with special needs to make arrangements</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">↓50%</div><div class="stat-l">Inbound queries</div></div>
              <div><div class="stat-n">+38%</div><div class="stat-l">Candidate NPS</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual updates</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#0a1e48 0%,#0d2d6b 100%)">
            <div class="uc-mock" style="background:#0a1e48;border:1px solid rgba(255,255,255,.1)">
              <div style="background:rgba(0,87,184,.25);border-bottom:1px solid rgba(255,255,255,.1);padding:12px 16px;display:flex;align-items:center;justify-content:space-between">
                <span style="font-size:11px;font-weight:700;color:rgba(255,255,255,.9)">Application Status · Full Cycle · Salesforce</span>
                <span style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);background:rgba(0,87,184,.2);border:1px solid rgba(0,87,184,.3);border-radius:20px;padding:2px 9px;display:flex;align-items:center;gap:4px"><span style="width:5px;height:5px;border-radius:50%;background:#5B9EF5;display:inline-block;animation:pulse 2s infinite"></span> Running</span>
              </div>
              <div style="padding:14px;display:flex;flex-direction:column;gap:8px">
                <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:7px;padding:10px 12px">
                  <div style="font-size:9px;font-weight:700;color:rgba(91,158,245,.9);text-transform:uppercase;letter-spacing:.06em;margin-bottom:6px">🔔 HIRING CYCLE UPDATES - AUTO-FIRING</div>
                  <div style="font-size:11px;color:rgba(255,255,255,.8);line-height:1.6">"Hi Sarah - you've been shortlisted for the Marketing Manager role! Ref #JO-2847. Your interview invite is on its way."<br><br>→ Stage: Interviewing → Offer → Onboarding - each auto-fires in Salesforce</div>
                  <div style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);margin-top:8px">✓ Every stage communicated · Inbound queries ↓50%</div>
                </div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> Candidates can apply to multiple roles - all tracked separately</div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> Special needs replies captured and logged in Salesforce</div>
              </div>
              <div style="display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid rgba(255,255,255,.1)">
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">↓50%</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Inbound queries</div></div>
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">+38%</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Candidate NPS</div></div>
                <div style="padding:10px;text-align:center"><div style="font-size:16px;font-weight:800;color:#fff">0</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Manual updates</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 4: AI Candidate Support -->
      <div class="uc-panel" id="uc-panel-4">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-robot"></i> AI Candidate Support</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Recruit candidates remotely - fewer face-to-face interviews, same quality hires</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Recruit remotely with automated conversations that engage large candidate pools and reduce manual work. Process applications faster and step in with 1-on-1 texting for high-potential candidates when needed.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>AI handles candidate FAQs, job details, eligibility checks - 24/7</li>
              <li><span class="chk-icon">✓</span>Hot candidates escalated to recruiter instantly - sentiment detection built in</li>
              <li><span class="chk-icon">✓</span>1-on-1 texting lets recruiters intervene manually with personal conversations</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">24/7</div><div class="stat-l">Coverage</div></div>
              <div><div class="stat-n">↓40%</div><div class="stat-l">Face-to-face</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Missed candidates</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>AI Candidate Support · 24/7 · Salesforce CRM</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Candidate asks "Is the role remote?" - AI answers instantly, 24/7</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> FAQ handled: salary range, start date, benefits - no recruiter needed</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Sentiment detected as highly engaged - escalated to recruiter</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Recruiter steps in for 1-on-1 - all history visible in Salesforce</div>
              </div>
              <div class="uc-mock-foot">✓ 24/7 candidate support · Face-to-face ↓40% · All logged in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">24/7</div><div class="uc-mock-stat-l">Coverage</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓40%</div><div class="uc-mock-stat-l">Face-to-face</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Missed candidates</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 5: Onboarding Automation -->
      <div class="uc-panel" id="uc-panel-5">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-rocket-takeoff-fill"></i> Onboarding Automation</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Lower time to onboard - messages that complete formalities and due diligence</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Lower onboarding time with automated messages for formalities and due diligence. Capture applicant data, store conversation history, and let new hires ask questions through two-way SMS - all logged in Salesforce.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Offer accepted → welcome text + document requests fire automatically</li>
              <li><span class="chk-icon">✓</span>Compliance formalities, background checks, and first-day instructions via SMS</li>
              <li><span class="chk-icon">✓</span>All interactions logged to Salesforce - hiring team has full visibility</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">50%</div><div class="stat-l">Faster onboarding</div></div>
              <div><div class="stat-n">↓80%</div><div class="stat-l">Paper chase</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual follow-ups</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Onboarding Automation · Salesforce CRM</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Offer accepted · Welcome text + document upload link fires instantly</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Background check + contract link sent - secure branded URL</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Compliance complete · First-day instructions auto-sent</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Day 30 check-in + NPS captured · Logged to Salesforce record</div>
              </div>
              <div class="uc-mock-foot">✓ Onboarding 50% faster · Paper chase eliminated · New hire ready from day one</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">50%</div><div class="uc-mock-stat-l">Faster onboarding</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓80%</div><div class="uc-mock-stat-l">Paper chase</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual follow-ups</div></div>
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
        <div style="font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.55);margin-bottom:10px">Recruitment Teams</div>
        <div style="font-size:clamp(18px,2.5vw,24px);font-weight:800;color:#fff;letter-spacing:-.4px;line-height:1.2;margin-bottom:8px">Ready to shrink time-to-hire?</div>
        <div style="font-size:13px;color:rgba(255,255,255,.7);line-height:1.6">See 360 SMS running inside Salesforce for recruitment in a free 20-minute demo.</div>
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
      <p class="sec-sub mx-auto" style="max-width:520px;margin:8px auto 0">Source · Qualify · Schedule · Hire · Onboard - every stage handled automatically.</p>
    </div>
    <div class="hiw-tabs">
      <button class="hiw-tab-btn active" onclick="hiwGo(0,this)"><i class="bi bi-megaphone-fill"></i> Candidate Outreach</button>
      <button class="hiw-tab-btn" onclick="hiwGo(1,this)"><i class="bi bi-funnel-fill"></i> Progressive Profiling</button>
      <button class="hiw-tab-btn" onclick="hiwGo(2,this)"><i class="bi bi-calendar-check-fill"></i> Interview Scheduling</button>
      <button class="hiw-tab-btn" onclick="hiwGo(3,this)"><i class="bi bi-rocket-takeoff-fill"></i> Onboarding</button>
    </div>
    <div class="hiw-slider-wrap px-3 px-md-0">
      <div class="hiw-slider-track">

        <div class="hiw-slide active" id="hiw-0">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-megaphone-fill"></i></div><div><div class="hiw-slide-title">Candidate Outreach</div><div class="hiw-slide-sub">Bulk broadcast · Personalized · Pipeline never dry · Salesforce CRM</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">Pipeline never runs dry</span><span class="hiw-slide-count">01 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Job order created in Salesforce</div><div class="hiw-step-desc">Campaign triggers bulk SMS to matched candidate segment</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Personalized broadcast sent</div><div class="hiw-step-desc">Merge fields - name, role, salary - feels 1-on-1 at scale</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Candidate replies APPLY</div><div class="hiw-step-desc">Application triggered · profiling sequence starts automatically</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Pipeline populated in Salesforce</div><div class="hiw-step-desc">All replies logged · candidates tracked by role · recruiter briefed</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Entire candidate pool engaged simultaneously · Pipeline never dry · All inside Salesforce</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-0"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-1">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-funnel-fill"></i></div><div><div class="hiw-slide-title">Progressive Profiling</div><div class="hiw-slide-sub">Decision trees · Scoring · Equal opportunity · Salesforce CRM</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">3× more qualified candidates</span><span class="hiw-slide-count">02 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Application received</div><div class="hiw-step-desc">Profiling sequence auto-starts - consistent for every candidate</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Decision tree qualifies</div><div class="hiw-step-desc">Skills, experience, availability, location - keyword replies</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Candidate scored and matched</div><div class="hiw-step-desc">Score logged to Salesforce · matched to open roles automatically</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Recruiter briefed on top candidates</div><div class="hiw-step-desc">Meaningful conversations only · no wasted calls</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Applications screened automatically · Bias prevented · Recruiters only talk to top candidates</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-1"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-2">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-calendar-check-fill"></i></div><div><div class="hiw-slide-title">Interview Scheduling</div><div class="hiw-slide-sub">Invite · Confirm · Remind · Follow up · Salesforce CRM</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">No-shows ↓60%</span><span class="hiw-slide-count">03 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Candidate shortlisted in Salesforce</div><div class="hiw-step-desc">Interview invite + scheduling link fires automatically</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Candidate replies CONFIRM</div><div class="hiw-step-desc">Zoom link + interviewer name sent · Record updated in Salesforce</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">24-hour + morning-of reminders</div><div class="hiw-step-desc">Two automated texts that consistently prevent no-shows</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Post-interview status update</div><div class="hiw-step-desc">Result sent to candidate · next stage triggered if progressed</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>No-shows ↓60% · Candidates show up because reminders hit their lock screen · All in Salesforce</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-2"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-3">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-rocket-takeoff-fill"></i></div><div><div class="hiw-slide-title">Onboarding</div><div class="hiw-slide-sub">Welcome · Compliance · First-day · Day 30 check-in · Salesforce</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">50% faster onboarding</span><span class="hiw-slide-count">04 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Offer accepted in Salesforce</div><div class="hiw-step-desc">Welcome text + document upload link fires instantly</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Compliance formalities via SMS</div><div class="hiw-step-desc">Background check, contracts, compliance - all via secure links</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">First-day instructions sent</div><div class="hiw-step-desc">Location, time, contact, dress code - nothing missed</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Day 30 check-in + NPS</div><div class="hiw-step-desc">Feedback captured · NPS logged to Salesforce record</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Onboarding 50% faster · Paper chase eliminated · New hire ready from day one</span></div>
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
    <div style="display:inline-flex;align-items:center;gap:7px;background:rgba(0,87,184,.18);border:1px solid rgba(0,87,184,.35);border-radius:20px;padding:5px 14px;font-size:10px;font-weight:700;color:rgba(120,170,255,.9);letter-spacing:.07em;text-transform:uppercase;margin-bottom:20px">⚡ AI Use Case · Recruitment</div>
    <h2 style="font-size:clamp(22px,3vw,32px);font-weight:800;color:#fff;letter-spacing:-1px;line-height:1.15;margin-bottom:12px">AI-Powered Candidate<br><span style="color:#5B9BD5">Engagement at Scale. 24/7</span></h2>
    <p style="font-size:15px;color:rgba(255,255,255,.48);line-height:1.7;max-width:560px;margin-bottom:36px">Recruiters are too valuable to waste on unqualified applicants and basic inquiries. 360 SMS AI agents handle candidate profiling, qualification, interview scheduling, status updates, and onboarding communication - automatically inside Salesforce. Empower hiring teams with powerful communication, so they review better candidates and focus on meaningful conversations.</p>
    <div class="row g-3 mb-4">
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-robot fs-4"></i></div><div class="aa-title">AI Chatbots for Candidate Screening</div><div class="aa-desc">AI-Powered Chatbots handle candidate qualification, interview scheduling, FAQs, and application updates through conversational messaging workflows automatically.</div><span class="aa-result">Accelerate recruitment communication workflows</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-bar-chart-line-fill fs-4"></i></div><div class="aa-title">Conversation Analysis for Hiring Insights</div><div class="aa-desc">Conversation Analysis analyzes recruiter-candidate conversations to identify engagement trends, sentiment, hiring bottlenecks, and follow-up priorities automatically.</div><span class="aa-result">Improve hiring process visibility</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-magic fs-4"></i></div><div class="aa-title">Rephrase &amp; Polish Candidate Outreach</div><div class="aa-desc">AI Rephrase & Polish Content improves recruitment communication by refining tone, clarity, professionalism, and readability for outreach messages.</div><span class="aa-result">Enhance recruiter communication quality</span></div></div>
    </div>
    <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:10px;padding:20px 24px;display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap">
      <div>
        <div style="font-size:14px;font-weight:700;color:#fff;margin-bottom:3px">Achieve end-to-end recruitment communications with a single app integration - no code.</div>
        <div style="font-size:12px;color:rgba(255,255,255,.4)">All candidate interactions auto-logged to the Salesforce record. Data stays inside your org.</div>
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
        <div class="comp-badge"><i class="bi bi-shield-lock-fill"></i> Salesforce Native · Equal Opportunity</div>
        <div class="lbl">Platform &amp; Compliance</div>
        <h2 class="sec-h">Empower hiring teams with<br>powerful communication - all inside Salesforce</h2>
        <p class="sec-sub mb-0">360 SMS gives recruitment teams access to 15+ popular texting channels to enhance reach and widen the candidate pool - all centralized inside Salesforce. Every candidate interaction is <strong>logged, searchable, and auditable</strong>. Equal opportunity employment is enforced through consistent, automated evaluation flows.</p>
        <div class="comp-pts">
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-broadcast-pin"></i></div><div><div class="comp-th">15+ popular communication channels</div><div class="comp-tp">SMS, WhatsApp, MMS, voice, and more - meet candidates wherever they are to enhance reach and widen your candidate pool beyond traditional channels.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-balance-scale"></i></div><div><div class="comp-th">Equal opportunity enforcement</div><div class="comp-tp">Every candidate receives the same structured question sequence. Capture replies from candidates with special needs to make appropriate arrangements - bias prevented automatically.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-diagram-3-fill"></i></div><div><div class="comp-th">Full hiring cycle tracking</div><div class="comp-tp">Sourcing, shortlisting, acceptance, and onboarding - managed and tracked in Salesforce. Candidates can apply to multiple roles and get followed up at each stage automatically.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-check-circle-fill"></i></div><div><div class="comp-th">Opt-In &amp; Opt-Out consent management</div><div class="comp-tp">Double Opt-In and Opt-Out consent flows built in - essential for compliant candidate communication at scale, directly inside Salesforce.</div></div></div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="comp-visual">
          <div style="font-size:12px;font-weight:700;color:var(--ink);margin-bottom:3px">Salesforce-Native Recruitment Platform</div>
          <div style="font-size:11px;color:var(--ink3);margin-bottom:12px">End-to-end candidate communication</div>
          <div class="hck-row"><div class="hck">✓</div> All candidate data inside your Salesforce CRM only</div>
          <div class="hck-row"><div class="hck">✓</div> 15+ channels · SMS, WhatsApp, MMS, voice · single inbox</div>
          <div class="hck-row"><div class="hck">✓</div> Equal opportunity · same structured sequence for all</div>
          <div class="hck-row"><div class="hck">✓</div> Full hiring lifecycle tracked in Salesforce</div>
          <div class="hck-row"><div class="hck">✓</div> Opt-In / Opt-Out consent flows built in</div>
          <div class="hck-row"><div class="hck">✓</div> All interactions auto-logged to candidate record</div>
          <div style="background:var(--sf);border-radius:8px;padding:12px 14px;margin-top:4px">
            <div style="font-size:12px;font-weight:700;color:#fff;margin-bottom:3px">Zero Code · Single App Integration</div>
            <div style="font-size:11px;color:rgba(255,255,255,.7)">Empower recruiters to set up processes easily without code. Achieve end-to-end recruitment communications with one Salesforce app.</div>
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