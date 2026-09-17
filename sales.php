<?php
/*
Template Name:Sales
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
      <span style="color:var(--ink);font-weight:600">Sales</span>
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
          Salesforce Native · Sales Messaging · Lead-to-Close Automation
        </div>
        <h1>Shrink Sales Cycle and Close More<br>with <em>SMS in Salesforce</em></h1>
        <p class="hero-sub">Qualify leads with automated Salesforce sales messaging and accelerate every stage of the buying cycle. Help reps manage more conversations, respond instantly, and close deals faster with less manual effort.</p>
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
            <div class="hero-ui-url">360 SMS — Sales Inbox · Salesforce CRM for Sales</div>
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
                <div style="font-size:13px;font-weight:700;color:var(--ink)">James Carter — Lead #L-4219</div>
                <div style="font-size:10px;color:var(--ink4)">via Salesforce CRM · TechScale Sales</div>
              </div>
              <div class="flex-grow-1 d-flex flex-column gap-2 p-3" style="overflow:hidden">
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Sophie — text DEMO to get early access + a personalised walkthrough. Reply DEMO now 🚀</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start" style="max-width:75%">
                  <div class="bubble-in">DEMO</div>
                  <div class="msg-meta">David · 9:03 AM</div>
                </div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Great — your demo is booked for Thu 2pm. Here's the link: gb.co/demo/7342 🎯</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:6px;padding:6px 10px;font-size:10px;font-weight:700;color:#0057B8">✓ Lead #L-4219 · SMS out in 43s · Demo booked · Rep briefed · All in Salesforce</div>
              </div>
              <div style="border-top:1px solid #eee;padding:9px 12px;display:flex;align-items:center;gap:7px">
                <span style="font-size:15px;color:var(--ink3)"><i class="bi bi-paperclip"></i></span>
                <div style="flex:1;background:#F7F7F5;border:1px solid #eee;border-radius:6px;padding:7px 10px;font-size:11px;color:var(--ink4)">Type a message...</div>
                <div style="padding:6px 11px;background:#F7F7F5;border:1px solid #ddd;border-radius:5px;font-size:11px;font-weight:600;color:var(--ink2)">Template</div>
              </div>
              <div style="background:#F7F7F5;border-top:1px solid #eee;padding:5px 12px;display:flex;align-items:center;justify-content:space-between">
                <span style="font-size:9px;color:var(--ink4)">Auto-logged · Rep briefed · Deal in motion</span>
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
      <div class="proof-item"><span class="proof-n">3×</span><span class="proof-l ms-2">Lead-to-Pipeline<br>Conversion</span></div>
      <div class="proof-item"><span class="proof-n">35%</span><span class="proof-l ms-2">Shorter<br>Sales Cycles</span></div>
      <div class="proof-item"><span class="proof-n">38%</span><span class="proof-l ms-2">More<br>Conversions</span></div>
      <div class="proof-item"><span class="proof-n">98%</span><span class="proof-l ms-2">SMS<br>Open Rate</span></div>
      <div class="proof-item"><span class="proof-n">1,200+</span><span class="proof-l ms-2">5-Star<br>Reviews</span></div>
      <div class="proof-item">
        <span style="background:var(--sf-l);color:var(--sf);font-size:11px;font-weight:700;padding:4px 10px;border-radius:4px;line-height:1.5;white-space:nowrap">AppExchange · #1 Rated</span>
      </div>
    </div>
  </div>
</div>

<!-- SALES USE CASES -->
<section class="sec sec-alt" id="use-cases">
  <div class="container-xl">
    <div class="text-center mb-4">
      <div class="lbl d-flex justify-content-center">Why sales teams choose 360 SMS</div>
      <h2 class="sec-h mx-auto" style="max-width:640px">Leave Nothing to Chance —<br class="d-none d-md-block">Enhance Every Step of the Buying Cycle</h2>
      <p class="sec-sub mx-auto" style="max-width:600px">Every use case runs natively inside Salesforce — from speed-to-lead and lead qualification to demo booking, cross-sell, renewals, and review collection. Click a use case to see it in action.</p>
    </div>

    <!-- Tab pills -->
    <div class="d-flex gap-2 flex-wrap justify-content-center mb-4">
      <button onclick="switchUC(0)" class="uc-tab-btn active"><i class="bi bi-lightning-charge-fill"></i> Speed-to-Lead</button>
      <button onclick="switchUC(1)" class="uc-tab-btn"><i class="bi bi-funnel-fill"></i> Lead Qualification</button>
      <button onclick="switchUC(2)" class="uc-tab-btn"><i class="bi bi-calendar-check-fill"></i> Demo Booking</button>
      <button onclick="switchUC(3)" class="uc-tab-btn"><i class="bi bi-currency-dollar"></i> Cross-Sell &amp; Renewals</button>
      <button onclick="switchUC(4)" class="uc-tab-btn"><i class="bi bi-robot"></i> AI Sales Support</button>
      <button onclick="switchUC(5)" class="uc-tab-btn"><i class="bi bi-star-fill"></i> Reviews &amp; Retention</button>
    </div>

    <div style="background:#fff;border:1px solid var(--bdr);border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.07)">

      <!-- PANEL 0: Client Intake & Preliminary Evaluation -->
      <div class="uc-panel active" id="uc-panel-0">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-lightning-charge-fill"></i> Speed-to-Lead</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Catch the early — before the internet distracts them</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Lead enters Salesforce — automated SMS goes out in under a minute, not when reps check their queue. Reach prospects at peak interest instantly, regardless of lead volume or rep availability.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>SMS fires in under 60 seconds — regardless of volume or rep availability</li>
              <li><span class="chk-icon">✓</span>Advertise branded keywords to start conversations faster and more reliably</li>
              <li><span class="chk-icon">✓</span>Schedule meetings 90× faster than email — before competitors get a look in</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">&lt;1 min</div><div class="stat-l">First response</div></div>
              <div><div class="stat-n">2×</div><div class="stat-l">More meetings</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual outreach</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Speed-to-Lead · Salesforce CRM · Auto-Fire</span><span class="uc-mock-badge">Live</span></div>
              <div class="uc-mock-body" style="background:#F9FBFF">
                <div style="font-size:9px;font-weight:700;color:var(--ink4);text-transform:uppercase;letter-spacing:.07em;text-align:center;margin-bottom:4px">Lead Submits Form → SMS Out in &lt;60s → Rep Briefed · Automated</div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Sophie — text DEMO to get early access + a personalised walkthrough. Reply DEMO now 🚀</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:65%">
                  <div class="bubble-in">DEMO</div>
                  <div class="msg-meta">David · 9:08 AM</div>
                </div>
                <div class="align-self-end mt-1" style="max-width:88%">
                  <div class="bubble-out">Thank you — your record is created. Ref: APX-1042. Your consultant will be in touch within 24 hours.</div>
                  <div class="msg-meta text-end">9:08 AM · Auto-logged ✓</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ SMS out in &lt;60s · Demo booked · Rep briefed · Deal starts warm · All in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">&lt;1 min</div><div class="uc-mock-stat-l">First response</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">2×</div><div class="uc-mock-stat-l">More meetings</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual outreach</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 1: Lead Qualification -->
      <div class="uc-panel" id="uc-panel-1">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-funnel-fill"></i> Lead Qualification</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Help sales teams handle more conversations — respond automatically</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Qualify leads with automated Salesforce sales messaging and chatbot-driven conversations. Save conversation history, give reps full context, and switch to 360 CTI when prospects are ready for a sales call.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Decision trees qualify budget, timeline, use case, and authority via keyword replies</li>
              <li><span class="chk-icon">✓</span>Leads scored and routed to the right rep — reps only call qualified prospects</li>
              <li><span class="chk-icon">✓</span>Full conversation history saved — sales agents enter every call briefed</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">3×</div><div class="stat-l">More qualified</div></div>
              <div><div class="stat-n">24/7</div><div class="stat-l">Qualification</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Wasted calls</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Lead Qualification · Decision Tree · Salesforce</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-funnel-fill"></i> Lead created in Salesforce — qualification sequence starts automatically</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-chat-left-dots-fill me-1"></i> "What's your team size and timeline?" — budget &amp; authority captured via reply</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Qualified ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-graph-up-arrow me-1"></i> Lead scored automatically · Enterprise → AE · SMB → SDR · routed instantly</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Routed ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-telephone-fill me-1"></i> Rep alerted · full conversation history visible · CTI pivot when ready</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Briefed ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ 3× more qualified · Reps only call ready prospects · All logged in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">3×</div><div class="uc-mock-stat-l">More qualified</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">24/7</div><div class="uc-mock-stat-l">Qualification</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Wasted calls</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 2: Demo Booking & Meeting Scheduling -->
      <div class="uc-panel" id="uc-panel-2">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-calendar-check-fill"></i> Demo Booking &amp; Meeting Scheduling</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Schedule meetings 9× faster than email — prevent buyers from shifting focus</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Schedule and reschedule meetings with SMS follow-ups far faster than email to keep buyers engaged before competitors do. Send confirmations and reminder sequences that reduce no-shows and keep deals moving.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>DEMO keyword triggers scheduling link instantly — booking in one reply</li>
              <li><span class="chk-icon">✓</span>Confirmation + 24-hour + morning-of reminders fire automatically</li>
              <li><span class="chk-icon">✓</span>Respond based on time zone and availability to maximize response chances</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">9×</div><div class="stat-l">vs Email</div></div>
              <div><div class="stat-n">↓60%</div><div class="stat-l">No-shows</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual booking</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Demo Booking · Scheduling · Salesforce CRM</span><span class="uc-mock-badge">Active</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-calendar-check-fill"></i> Lead replies DEMO — scheduling link fires instantly · booking in one reply</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-check2-square me-1"></i> James books Thu 2pm · confirmation fires · 24h + morning-of reminders set</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Booked ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-clock-fill me-1"></i> Time-zone aware · rep availability checked · message lands at optimal window</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Optimized ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-person-fill me-1"></i> Rep briefed · no-show rate ↓60% · deal stays in motion · all logged in Salesforce</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Ready ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ 9× faster than email · No-shows ↓60% · Deal stays warm · All in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">9×</div><div class="uc-mock-stat-l">vs Email</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓60%</div><div class="uc-mock-stat-l">No-shows</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual booking</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 3: Cross-Sell, Upsell & Renewals -->
      <div class="uc-panel" id="uc-panel-3">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-currency-dollar"></i> Cross-Sell, Upsell &amp; Renewals</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Increase renewals and new subscriptions with well-placed SMS offers</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Cross-sell products by client tier and promote upgrades with targeted SMS offers. Share web links and help resources, drive renewals, and launch offers at scale with branded payment links.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Cross-sell triggers by client tier — right product, right customer, right time</li>
              <li><span class="chk-icon">✓</span>Renewal reminders fire before expiry — branded payment link for instant conversion</li>
              <li><span class="chk-icon">✓</span>Send reminders for deals to create urgency and generate curiosity</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">+38%</div><div class="stat-l">Renewal rate</div></div>
              <div><div class="stat-n">3×</div><div class="stat-l">Cross-sell rate</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual outreach</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#0a1e48 0%,#0d2d6b 100%)">
            <div class="uc-mock" style="background:#0a1e48;border:1px solid rgba(255,255,255,.1)">
              <div style="background:rgba(0,87,184,.25);border-bottom:1px solid rgba(255,255,255,.1);padding:12px 16px;display:flex;align-items:center;justify-content:space-between">
                <span style="font-size:11px;font-weight:700;color:rgba(255,255,255,.9)">Cross-Sell &amp; Renewals · Client Tier Triggers · Salesforce</span>
                <span style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);background:rgba(0,87,184,.2);border:1px solid rgba(0,87,184,.3);border-radius:20px;padding:2px 9px;display:flex;align-items:center;gap:4px"><span style="width:5px;height:5px;border-radius:50%;background:#5B9EF5;display:inline-block;animation:pulse 2s infinite"></span> Running</span>
              </div>
              <div style="padding:14px;display:flex;flex-direction:column;gap:8px">
                <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:7px;padding:10px 12px">
                  <div style="font-size:9px;font-weight:700;color:rgba(91,158,245,.9);text-transform:uppercase;letter-spacing:.06em;margin-bottom:6px">💰 CROSS-SELL TRIGGER — TECHSCALE · ENTERPRISE TIER</div>
                  <div style="font-size:11px;color:rgba(255,255,255,.8);line-height:1.6">"Hi James — your Pro plan renews in 14 days. Upgrade to Enterprise now and lock in 20% off: ts.co/upgrade/4219 🚀"<br><br>→ Branded payment link → James upgrades without a call</div>
                  <div style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);margin-top:8px">✓ Renewal rate +38% · Cross-sell 3× · Branded links build trust</div>
                </div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> Client tier data from Salesforce triggers the right offer automatically</div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> Urgency deal + branded payment URL converts without a call</div>
              </div>
              <div style="display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid rgba(255,255,255,.1)">
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">+38%</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Renewal rate</div></div>
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">3×</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Cross-sell rate</div></div>
                <div style="padding:10px;text-align:center"><div style="font-size:16px;font-weight:800;color:#fff">0</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Manual outreach</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 4: AI Sales Support -->
      <div class="uc-panel" id="uc-panel-4">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-robot"></i> AI Sales Support</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Stay on the customer — pursue opportunities with a persistence only 360 SMS can provide</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Configure chatbots and drip campaigns to follow up with prospects automatically at every lifecycle stage. Re-engage non-responders with power dialers, texts, and ringless voicemails that busy prospects can review later.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>AI handles FAQs, pricing queries, and objections 24/7 — reps stay in high-value work</li>
              <li><span class="chk-icon">✓</span>Ringless voicemail for busy prospects — they play back at their convenience</li>
              <li><span class="chk-icon">✓</span>Hot leads escalated to rep instantly — no opportunity lost to silence</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">24/7</div><div class="stat-l">Coverage</div></div>
              <div><div class="stat-n">↑2×</div><div class="stat-l">Selling time</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Missed leads</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>AI Sales Support · 24/7 · Salesforce CRM</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Prospect asks "What's the pricing?" — AI handles instantly, 24/7</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Non-responder detected — ringless voicemail sent for later playback</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> High intent signal detected — hot lead escalated to rep instantly</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Rep selling time doubled · AI handles tier-one · no opportunity lost</div>
              </div>
              <div class="uc-mock-foot">✓ 24/7 coverage · Selling time ↑2× · Hot leads never missed · All in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">24/7</div><div class="uc-mock-stat-l">Coverage</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↑2×</div><div class="uc-mock-stat-l">Selling time</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Missed leads</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 5: Reviews, Social Proof & Retention -->
      <div class="uc-panel" id="uc-panel-5">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-megaphone-fill"></i> Proactive Customer Outreach</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Collect social proof and attract reviews — encourage first-time buyers with automated surveys</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Send branded shortened URLs to collect reviews through automated surveys. Showcase positive customer experiences, drive repeat purchases, and encourage word-of-mouth with faster, more accessible service interactions.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Branded shortened URLs to review pages — 5× response vs email requests</li>
              <li><span class="chk-icon">✓</span>Automated NPS and satisfaction surveys — logged to Salesforce record</li>
              <li><span class="chk-icon">✓</span>Give customers a single point of contact — same localized originator builds trust</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">5×</div><div class="stat-l">Review rate vs email</div></div>
              <div><div class="stat-n">+38%</div><div class="stat-l">Repeat purchases</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual follow-ups</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Reviews &amp; Retention · NPS · Salesforce CRM</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Deal closes in Salesforce — review request fires: ts.co/review/4219</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> James rates 5⭐ — NPS logged · rep flagged · positive review captured</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Drip sequence pursues renewal — millions of prospects followed up year-round</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Repeat purchase offer fires at right moment · Salesforce deal record created</div>
              </div>
              <div class="uc-mock-foot">✓ 5× review rate · Repeat purchases +38% · No prospect forgotten · All in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">5×</div><div class="uc-mock-stat-l">Review rate</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">+38%</div><div class="uc-mock-stat-l">Repeat purchases</div></div>
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
        <div style="font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.55);margin-bottom:10px">Sales Teams</div>
        <div style="font-size:clamp(18px,2.5vw,24px);font-weight:800;color:#fff;letter-spacing:-.4px;line-height:1.2;margin-bottom:8px">Ready to close deals faster?</div>
        <div style="font-size:13px;color:rgba(255,255,255,.7);line-height:1.6">See 360 SMS running inside Salesforce for sales in a free 20-minute demo.</div>
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
      <p class="sec-sub mx-auto" style="max-width:520px;margin:8px auto 0">Respond fast · Qualify · Book · Close · Retain — every deal follows the same automated pattern.</p>
    </div>
    <div class="hiw-tabs">
      <button class="hiw-tab-btn active" onclick="hiwGo(0,this)"><i class="bi bi-lightning-charge-fill"></i> Speed-to-Lead</button>
      <button class="hiw-tab-btn" onclick="hiwGo(1,this)"><i class="bi bi-funnel-fill"></i> Lead Qualification</button>
      <button class="hiw-tab-btn" onclick="hiwGo(2,this)"><i class="bi bi-currency-dollar"></i> Cross-Sell &amp; Close</button>
      <button class="hiw-tab-btn" onclick="hiwGo(3,this)"><i class="bi bi-arrow-repeat"></i> Follow-Up &amp; Retention</button>
    </div>
    <div class="hiw-slider-wrap px-3 px-md-0">
      <div class="hiw-slider-track">

        <div class="hiw-slide active" id="hiw-0">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-lightning-charge-fill"></i></div><div><div class="hiw-slide-title">Speed-to-Lead</div><div class="hiw-slide-sub">Form submit → SMS in &lt;60s · Personalized intro · Keyword flow · Rep briefed · Salesforce</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">SMS out in &lt;60 seconds</span><span class="hiw-slide-count">01 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Lead submits form</div><div class="hiw-step-desc">Salesforce record created — SMS fires automatically in &lt;60s</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Personalized intro sent</div><div class="hiw-step-desc">Rep name, product, keyword trigger — feels 1-on-1 at scale</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Lead replies DEMO or INFO</div><div class="hiw-step-desc">Keyword flow handles response — booking link or info sent</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Rep notified · Briefed for call</div><div class="hiw-step-desc">Lead record updated · full conversation history available</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>First contact before competitor responds · Deal starts with warm prospect · All in Salesforce</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-0"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-1">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-funnel-fill"></i></div><div><div class="hiw-slide-title">Lead Qualification</div><div class="hiw-slide-sub">Qualification sequence · Lead scored · Rep given context · CTI pivot · Salesforce</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">3× more qualified leads</span><span class="hiw-slide-count">02 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Qualification sequence starts</div><div class="hiw-step-desc">Budget, timeline, use case, authority — keyword replies</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Lead scored automatically</div><div class="hiw-step-desc">Score logged to Salesforce · matched to right rep or tier</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Rep given full context</div><div class="hiw-step-desc">Conversation history visible · rep enters call prepared</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">CTI pivot when ready</div><div class="hiw-step-desc">Switch to 360 CTI call when interest is high enough</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Reps only call qualified leads · Full context every time · Sales time doubled</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-1"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-2">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-currency-dollar"></i></div><div><div class="hiw-slide-title">Cross-Sell &amp; Close</div><div class="hiw-slide-sub">Client tier trigger · Urgency deal · Branded payment link · Confirmation · Salesforce</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">Deals closed 3× faster</span><span class="hiw-slide-count">03 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Cross-sell trigger fires</div><div class="hiw-step-desc">Salesforce client tier data triggers personalized offer</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Urgency deal sent</div><div class="hiw-step-desc">Limited time offer + branded URL creates sense of urgency</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Customer clicks and pays</div><div class="hiw-step-desc">Branded payment link converts without a call</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Confirmation sent · Record updated</div><div class="hiw-step-desc">Salesforce updated · rep notified · upsell complete</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Cross-sell 3× · Urgency drives decisions · Branded links build trust · All in Salesforce</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-2"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-3">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-arrow-repeat"></i></div><div><div class="hiw-slide-title">Follow-Up &amp; Retention</div><div class="hiw-slide-sub">Post-purchase sequence · NPS survey · Drip renewal · Repeat purchase · Salesforce</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">Repeat purchases +38%</span><span class="hiw-slide-count">04 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Deal closes in Salesforce</div><div class="hiw-step-desc">Post-purchase sequence starts automatically</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">NPS survey + review ask</div><div class="hiw-step-desc">Branded URL · 5× response vs email requests</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Drip campaign pursues renewal</div><div class="hiw-step-desc">Millions of prospects followed up simultaneously year-round</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Repeat purchase triggered</div><div class="hiw-step-desc">Offer fires at right moment · Salesforce deal record created</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>No prospect falls through the cracks · Reviews built in · Repeat business automated</span></div>
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
    <div style="display:inline-flex;align-items:center;gap:7px;background:rgba(0,87,184,.18);border:1px solid rgba(0,87,184,.35);border-radius:20px;padding:5px 14px;font-size:10px;font-weight:700;color:rgba(120,170,255,.9);letter-spacing:.07em;text-transform:uppercase;margin-bottom:20px">⚡ AI Use Case · Sales</div>
    <h2 style="font-size:clamp(22px,3vw,32px);font-weight:800;color:#fff;letter-spacing:-1px;line-height:1.15;margin-bottom:12px">AI-Powered Sales Engagement at Scale.<br><span style="color:#5B9BD5">24/7.</span></h2>
    <p style="font-size:15px;color:rgba(255,255,255,.48);line-height:1.7;max-width:560px;margin-bottom:36px">Sales reps are too valuable to waste on unqualified leads and routine queries. 360 SMS AI agents handle lead qualification, objection handling, meeting scheduling, and follow-up drips — automatically inside Salesforce. Give sales agents the context they need to pivot into a conversation. Automated text is your window in.</p>
    <div class="row g-3 mb-4">
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-chat-left-text-fill fs-4"></i></div><div class="aa-title">AI-backed One-on-One Conversations</div><div class="aa-desc">AI-Powered One-on-One Conversation generates contextual response suggestions during live prospect conversations based on customer intent and interaction history automatically.</div><span class="aa-result">Improve prospect engagement quality</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-translate fs-4"></i></div><div class="aa-title">AI-Based Drip Suggestions for Nurturing</div><div class="aa-desc">AI-Based Drip Suggestions recommend personalized follow-up journeys and engagement timing based on customer response patterns and conversion behavior.</div><span class="aa-result">Increase lead nurturing effectiveness</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-magic fs-4"></i></div><div class="aa-title">Conversation Analysis for Sales Insights</div><div class="aa-desc">Conversation Analysis detects buyer sentiment, identifies objections, summarizes discussions, and recommends next-step actions from sales conversations automatically.</div><span class="aa-result">Strengthen sales follow-up strategies</span></div></div>
    </div>
    <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:10px;padding:20px 24px;display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap">
      <div>
        <div style="font-size:14px;font-weight:700;color:#fff;margin-bottom:3px">All AI agents run natively inside Salesforce — no external tools, no extra logins.</div>
        <div style="font-size:12px;color:rgba(255,255,255,.4)">Every conversation is logged to the Salesforce lead or opportunity record. Reps always have full context.</div>
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
        <div class="comp-badge"><i class="bi bi-shield-lock-fill"></i> Salesforce Native · Multi-Channel · Single Point of Contact</div>
        <div class="lbl">Platform &amp; Multi-Channel</div>
        <h2 class="sec-h">Increase accessibility —<br>customers find it easy to come back to you</h2>
        <p class="sec-sub mb-0">Get deals in front of mobile screens and move buyers through the sales cycle faster. Unlike ignored calls, texts get seen — making automated SMS your window to engagement.</p>
        <div class="comp-pts">
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-moon-stars-fill"></i></div><div><div class="comp-th">Send messages when they're awake</div><div class="comp-tp">Respond to customers based on their time zone and availability. Maximize chances to receive a response. Scheduled messages land at the optimal window for each contact.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-person-circle"></i></div><div><div class="comp-th">Same localized originator for all comms</div><div class="comp-tp">Use the same localized originator (sender number) for all communications so buyers always have a single point of contact — building trust and familiarity throughout the sales cycle.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-link-45deg"></i></div><div><div class="comp-th">Branded shortened URLs</div><div class="comp-tp">Send branded shortened URLs for web assets, help articles, review pages, and payment links that redirect and track engagement. Buyers trust and click links from familiar brands.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-megaphone-fill"></i></div><div><div class="comp-th">Advertise branded keywords</div><div class="comp-tp">Advertise branded keywords across campaigns to start conversations faster over text. Keywords like DEMO, INFO, and BUY trigger automated flows that move deals forward.</div></div></div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="comp-visual">
          <div style="font-size:12px;font-weight:700;color:var(--ink);margin-bottom:3px">Salesforce-Native Sales Platform</div>
          <div style="font-size:11px;color:var(--ink3);margin-bottom:12px">How 360 SMS moves deals through the buying cycle</div>
          <div class="hck-row"><div class="hck">✓</div> All lead and opportunity data inside Salesforce CRM</div>
          <div class="hck-row"><div class="hck">✓</div> 15+ channels · SMS, WhatsApp, MMS, voice, ringless VM</div>
          <div class="hck-row"><div class="hck">✓</div> Branded keywords · scheduling links · payment URLs</div>
          <div class="hck-row"><div class="hck">✓</div> Time-zone aware sending · max response rate</div>
          <div class="hck-row"><div class="hck">✓</div> Same originator · single point of contact</div>
          <div class="hck-row"><div class="hck">✓</div> All conversations logged to Salesforce record</div>
          <div style="background:var(--sf);border-radius:8px;padding:12px 14px;margin-top:4px">
            <div style="font-size:12px;font-weight:700;color:#fff;margin-bottom:3px">Text is Read. Calls sometimes Go Unanswered.</div>
            <div style="font-size:11px;color:rgba(255,255,255,.7)">Text is read at least once even before it's ignored — unlike calls that can be rejected off-hand. Automated text is your window in.</div>
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
    <h2 class="sec-h mb-1">Hear from sales teams using 360 SMS</h2>
    <p class="sec-sub">Real outcomes from real sales reps, managers, and revenue teams.</p>

    <!-- Logo strip -->
    <div style="display:flex;align-items:center;flex-wrap:wrap;gap:16px;margin-bottom:28px;padding:14px 20px;background:#F7F7F5;border-radius:10px;border:1px solid var(--bdr)">
      <span style="font-size:10px;font-weight:700;color:var(--ink4);text-transform:uppercase;letter-spacing:.08em;white-space:nowrap">Trusted by</span>
      <span style="font-size:12px;font-weight:700;color:var(--ink2)">TechScale</span>
      <span style="color:var(--ink4)">·</span>
      <span style="font-size:12px;font-weight:700;color:var(--ink2)">GrowthLab</span>
      <span style="color:var(--ink4)">·</span>
      <span style="font-size:12px;font-weight:700;color:var(--ink2)">SalesForce Elite</span>
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
              <div style="font-size:11px;margin-top:8px">2:14</div>
            </div>
          </div>
          <div class="testi-body">
            <div class="testi-name">James Carter</div>
            <div class="testi-org">TechScale · VP Sales</div>
          </div>
        </div>
      </div>

      <!-- Video 2 -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="testi-card">
          <div class="testi-thumb p-0 overflow-hidden" style="background:#f0f4f8;height:220px;display:flex;align-items:center;justify-content:center">
            <div style="text-align:center;color:var(--ink3)">
              <i class="bi bi-play-circle-fill" style="font-size:40px;color:#0057B8;opacity:.7"></i>
              <div style="font-size:11px;margin-top:8px">1:38</div>
            </div>
          </div>
          <div class="testi-body">
            <div class="testi-name">Sarah Kim</div>
            <div class="testi-org">GrowthLab · Head of Revenue</div>
          </div>
        </div>
      </div>

      <!-- Video 3 -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="testi-card">
          <div class="testi-thumb p-0 overflow-hidden" style="background:#f0f4f8;height:220px;display:flex;align-items:center;justify-content:center">
            <div style="text-align:center;color:var(--ink3)">
              <i class="bi bi-play-circle-fill" style="font-size:40px;color:#0057B8;opacity:.7"></i>
              <div style="font-size:11px;margin-top:8px">2:47</div>
            </div>
          </div>
          <div class="testi-body">
            <div class="testi-name">Mark Davis</div>
            <div class="testi-org">SalesForce Elite · Enterprise AE</div>
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
            <div class="testi-name">Chris Morgan</div>
            <div class="testi-org">Revenue Operations Team</div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- SOCIAL PROOF / REVIEWS -->
  <div class="container-xl mt-5">
    <div class="lbl">Social Proof</div>
    <h2 class="sec-h mb-1">Trusted by 60K+ Users Globally</h2>
    <p class="sec-sub">The most reviewed Salesforce SMS app on AppExchange — verified 5-star reviews from real sales teams globally.</p>
    <div class="row g-3 mt-2">
      <div class="col-12 col-md-4">
        <div style="background:#fff;border:1px solid var(--bdr);border-radius:12px;padding:20px 22px;height:100%">
          <div style="color:#0057B8;font-size:14px;letter-spacing:1px;margin-bottom:10px">★★★★★</div>
          <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:14px">"Our speed-to-lead response went from hours to seconds. Every new lead gets an SMS before our rep even sees the notification — and we're booking demos 90× faster than email. Pipeline doubled in 60 days."</p>
          <div style="font-size:12px;font-weight:700;color:var(--ink)">James C.</div>
          <div style="font-size:11px;color:var(--ink3)">VP Sales · TechScale · Salesforce CRM</div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div style="background:#fff;border:1px solid var(--bdr);border-radius:12px;padding:20px 22px;height:100%">
          <div style="color:#0057B8;font-size:14px;letter-spacing:1px;margin-bottom:10px">★★★★★</div>
          <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:14px">"Cross-sell and renewal automation alone paid for the platform in month one. The right offer goes to the right customer tier at exactly the right moment — branded payment link and all. It just works."</p>
          <div style="font-size:12px;font-weight:700;color:var(--ink)">Sarah K.</div>
          <div style="font-size:11px;color:var(--ink3)">Head of Revenue · GrowthLab · Salesforce</div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div style="background:#fff;border:1px solid var(--bdr);border-radius:12px;padding:20px 22px;height:100%">
          <div style="color:#0057B8;font-size:14px;letter-spacing:1px;margin-bottom:10px">★★★★★</div>
          <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:14px">"Our reps used to waste 40% of their time on unqualified calls. Now the chatbot qualifies every lead before anyone picks up the phone — reps only call prospects who are ready to buy. Close rate up 3× since implementation."</p>
          <div style="font-size:12px;font-weight:700;color:var(--ink)">Mark D.</div>
          <div style="font-size:11px;color:var(--ink3)">Enterprise AE · SalesForce Elite · Salesforce</div>
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
