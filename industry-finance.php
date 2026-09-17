<?php
/*
Template Name:Industry Finance
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
      <span style="color:var(--ink);font-weight:600">Financial Services</span>
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
          Secure Texting For Finance Teams · Salesforce Native
        </div>
        <h1>Accelerate Client Acquisition<br>and Retention with<br><em>SMS for Financial Services</em></h1>
        <p class="hero-sub">Build stronger advisor-client relationships and onboard new clients faster with our <strong>text messaging for financial services platform</strong> - natively inside Salesforce. No code. No middleware.</p>
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
          <span><strong style="color:var(--ink)">200+</strong> financial orgs</span>
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
            <div class="hero-ui-url">360 SMS - Client Inbox · Salesforce Financial Services Cloud</div>
          </div>
          <div class="d-flex" style="height:340px;overflow:hidden">
            <!-- Icon sidebar -->
            <div class="inbox-sidebar d-none d-sm-flex flex-column">
              <div class="inbox-icon act"><i class="bi bi-briefcase-fill" style="color:#fff;font-size:13px"></i><span class="inbox-badge">4</span></div>
              <div class="inbox-icon inact"><i class="bi bi-calendar-event-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i><span class="inbox-badge">2</span></div>
              <div class="inbox-icon inact"><i class="bi bi-clipboard-check-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i><span class="inbox-badge">1</span></div>
              <div class="inbox-icon inact"><i class="bi bi-robot" style="color:rgba(255,255,255,.6);font-size:13px"></i><span class="inbox-badge">3</span></div>
              <div class="inbox-icon inact"><i class="bi bi-graph-up-arrow" style="color:rgba(255,255,255,.6);font-size:13px"></i></div>
              <div class="inbox-icon inact mt-auto"><i class="bi bi-gear-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i></div>
            </div>
            <!-- Conversation list -->
            <div style="width:200px;flex-shrink:0;border-right:1px solid #eee;overflow:hidden" class="d-none d-md-flex flex-column">
              <div style="padding:10px 12px;border-bottom:1px solid #eee;font-size:11px;font-weight:700;color:var(--ink)">Client Conversations</div>
              <div class="conv-item act border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">James Carter</span><span style="font-size:10px;color:var(--ink4)">9:03 AM</span></div>
                <div class="conv-prev hl">YES - confirmed ✓</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Sarah M.</span><span style="font-size:10px;color:var(--ink4)">8:44 AM</span></div>
                <div class="conv-prev dim">Loan application link clicked</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px">💚 WhatsApp</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Priya Kapoor</span><span style="font-size:10px;color:var(--ink4)">Tue</span></div>
                <div class="conv-prev dim">What are my portfolio options?</div>
                <div class="d-flex align-items-center justify-content-between">
                  <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px"><i class="bi bi-robot"></i> AI Bot</div>
                  <span style="background:#0057B8;color:#fff;font-size:9px;font-weight:700;width:15px;height:15px;border-radius:50%;display:flex;align-items:center;justify-content:center">1</span>
                </div>
              </div>
              <div class="conv-item">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">David Chen</span><span style="font-size:10px;color:var(--ink4)">Mon</span></div>
                <div class="conv-prev dim">Review meeting booked ✓</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
            </div>
            <!-- Chat panel -->
            <div class="d-flex flex-column flex-grow-1" style="background:#fff;min-width:0">
              <div style="padding:10px 14px;border-bottom:1px solid #eee">
                <div style="font-size:13px;font-weight:700;color:var(--ink)">James Carter - Wealth Management Client</div>
                <div style="font-size:10px;color:var(--ink4)">via Salesforce Financial Services Cloud · Apex Capital</div>
              </div>
              <div class="flex-grow-1 d-flex flex-column gap-2 p-3" style="overflow:hidden">
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi James - a reminder that your portfolio review with Sarah is tomorrow at 2 PM. Reply YES to confirm or RESCHEDULE if needed.</div>
                  <div class="msg-meta text-end">360 SMS · 9:00 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start" style="max-width:75%">
                  <div class="bubble-in">YES - confirmed ✓</div>
                  <div class="msg-meta">James · 9:03 AM</div>
                </div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Great! We'll see you tomorrow at 2 PM. Sarah will have your updated portfolio ready. Reply HELP anytime.</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:6px;padding:6px 10px;font-size:10px;font-weight:700;color:#0057B8">✓ Appointment confirmed · Client record updated in Salesforce Financial Services Cloud</div>
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
      <div class="proof-item"><span class="proof-n">45%</span><span class="proof-l ms-2">Faster Loan<br>Completion</span></div>
      <div class="proof-item"><span class="proof-n">35%</span><span class="proof-l ms-2">Higher Payment<br>Responses</span></div>
      <div class="proof-item"><span class="proof-n">50%</span><span class="proof-l ms-2">Fewer Missed<br>Follow-Ups</span></div>
      <div class="proof-item"><span class="proof-n">98%</span><span class="proof-l ms-2">SMS<br>Open Rate</span></div>
      <div class="proof-item"><span class="proof-n">1,200+</span><span class="proof-l ms-2">Verified<br>Reviews</span></div>
      <div class="proof-item">
        <span style="background:var(--sf-l);color:var(--sf);font-size:11px;font-weight:700;padding:4px 10px;border-radius:4px;line-height:1.5;white-space:nowrap">AgentExchange · #1 Rated</span>
      </div>
    </div>
  </div>
</div>

<!-- FINANCIAL SERVICES USE CASES -->
<section class="sec sec-alt" id="use-cases">
  <div class="container-xl">
    <div class="text-center mb-4">
      <div class="lbl d-flex justify-content-center">Why financial services teams choose 360 SMS</div>
      <h2 class="sec-h mx-auto" style="max-width:640px">How 360 SMS Solves Every<br class="d-none d-md-block">Financial Services Communication Need</h2>
      <p class="sec-sub mx-auto" style="max-width:600px">Every use case runs natively inside Salesforce Financial Services Cloud - secure by design. Click a use case to see it in action.</p>
    </div>

    <!-- Tab pills -->
    <div class="d-flex gap-2 flex-wrap justify-content-center mb-4">
      <button onclick="switchUC(0)" class="uc-tab-btn active"><i class="bi bi-calendar-event-fill"></i> Appointment Reminders</button>
      <button onclick="switchUC(1)" class="uc-tab-btn"><i class="bi bi-clipboard-check-fill"></i> Client Onboarding</button>
      <button onclick="switchUC(2)" class="uc-tab-btn"><i class="bi bi-briefcase-fill"></i> Relationship Management</button>
      <button onclick="switchUC(3)" class="uc-tab-btn"><i class="bi bi-graph-up-arrow"></i> Lead Conversion</button>
      <button onclick="switchUC(4)" class="uc-tab-btn"><i class="bi bi-robot"></i> AI Client Support</button>
      <button onclick="switchUC(5)" class="uc-tab-btn"><i class="bi bi-bullseye"></i> Advisory Drips</button>
    </div>

    <div style="background:#fff;border:1px solid var(--bdr);border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.07)">

      <!-- PANEL 0: Appointment Reminders -->
      <div class="uc-panel active" id="uc-panel-0">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-calendar-event-fill"></i> Appointment Reminders</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Reduce no-shows by 40% and reallocate time slots to cast a wider net</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Let clients choose times that work for them over text and manage appointments effortlessly - a core benefit of banking text marketing using Salesforce for institutions managing high appointment volumes.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Auto-triggered 48h &amp; 24h before every client meeting</li>
              <li><span class="chk-icon">✓</span>Clients reply YES / RESCHEDULE - Salesforce record auto-updates</li>
              <li><span class="chk-icon">✓</span>Advisors show up to full calendars - zero manual coordination</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">40%</div><div class="stat-l">Fewer no-shows</div></div>
              <div><div class="stat-n">3 min</div><div class="stat-l">Avg response</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual follow-ups</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Appointment Reminder · Salesforce Flow</span><span class="uc-mock-badge">Live</span></div>
              <div class="uc-mock-body" style="background:#F9FBFF">
                <div style="font-size:9px;font-weight:700;color:var(--ink4);text-transform:uppercase;letter-spacing:.07em;text-align:center;margin-bottom:4px">Client Conversation · SMS</div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi James - your portfolio review with Sarah is tomorrow at 2 PM. Reply <strong>YES</strong> to confirm or <strong>RESCHEDULE</strong> if needed.</div>
                  <div class="msg-meta text-end">360 SMS · 9:00 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:65%">
                  <div class="bubble-in">YES - confirmed ✓</div>
                  <div class="msg-meta">James · 9:03 AM</div>
                </div>
                <div class="align-self-end mt-1" style="max-width:88%">
                  <div class="bubble-out">Great! See you at 2 PM. Sarah will have your updated portfolio ready. Reply HELP anytime.</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ Appointment confirmed · Client record updated automatically in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">40%</div><div class="uc-mock-stat-l">Fewer no-shows</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">3 min</div><div class="uc-mock-stat-l">Avg response</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual follow-ups</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 1: Client Onboarding -->
      <div class="uc-panel" id="uc-panel-1">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-clipboard-check-fill"></i> Client Onboarding</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Automate every step of client onboarding - 50% faster intake</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Automatically fire a welcome message with 360 SMS upon new client record creation. Follow-up texts guide clients through onboarding milestones, reducing friction and building trust from day one.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Welcome text + document links fired instantly when client record is created</li>
              <li><span class="chk-icon">✓</span>Day 3, Day 7, Day 14 follow-ups run automatically in Salesforce</li>
              <li><span class="chk-icon">✓</span>Two-way replies let clients ask questions - all logged to their Salesforce record</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">50%</div><div class="stat-l">Faster intake</div></div>
              <div><div class="stat-n">+28%</div><div class="stat-l">Client retention</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual entry</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Client Onboarding Sequence · Salesforce</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                  <span style="padding:5px 10px;background:#E8F0FB;border:1px solid #CCE0F7;border-radius:5px;font-size:10px;font-weight:700;color:#0057B8"><i class="bi bi-clipboard-check-fill"></i> Record Created</span>
                  <span style="color:var(--ink4)">→</span>
                  <span style="padding:5px 10px;background:var(--sf-l);border:1px solid var(--sf-m);border-radius:5px;font-size:10px;font-weight:700;color:var(--sf)">💬 Welcome SMS</span>
                  <span style="color:var(--ink4)">→</span>
                  <span style="padding:5px 10px;background:#E8F0FB;border:1px solid #CCE0F7;border-radius:5px;font-size:10px;font-weight:700;color:#0057B8"><i class="bi bi-check-circle-fill"></i> Onboarded</span>
                </div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Welcome to Apex Capital, Sarah! Complete your onboarding form here: [link] - takes 3 minutes. Your advisor will follow up shortly.</div>
                  <div class="msg-meta text-end">Auto-triggered · 2:14 PM</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:60%">
                  <div class="bubble-in">Done! Form submitted ✓</div>
                  <div class="msg-meta">Sarah · 2:19 PM</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ Onboarding complete · Documents captured · First review scheduled</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">50%</div><div class="uc-mock-stat-l">Faster intake</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">+28%</div><div class="uc-mock-stat-l">Retention</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual entry</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 2: Relationship Management -->
      <div class="uc-panel" id="uc-panel-2">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-briefcase-fill"></i> Relationship Management</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Project active interest and build closely coordinated client relationships</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Send reliable and relevant financial advice, periodic market insights, and greetings for important life events using secure finance texting on Salesforce Financial Services Cloud.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Personalized financial advice and market insights on a scheduled cadence</li>
              <li><span class="chk-icon">✓</span>Life event greetings - birthdays, anniversaries, milestones - automated in Salesforce</li>
              <li><span class="chk-icon">✓</span>Two-way conversations that deepen trust and improve client lifetime value</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">3×</div><div class="stat-l">Higher engagement</div></div>
              <div><div class="stat-n">+40%</div><div class="stat-l">Retention</div></div>
              <div><div class="stat-n">98%</div><div class="stat-l">Open rate</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Relationship Drip · Salesforce Financial Services Cloud</span><span class="uc-mock-badge">Active</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Month 1 · Welcome + advisor introduction + portfolio overview sent</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Month 2 · Market insights update + personalized financial tip</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Month 3 · Birthday greeting sent - client replied: "Thank you!"</div>
                <div class="uc-mock-row" style="background:#E8F0FB;border-color:#CCE0F7"><div class="uc-mock-dot">!</div> Month 4 · No response - escalated to advisor for personal outreach</div>
              </div>
              <div class="uc-mock-foot">✓ Advisor notified · Relationship case created · Record flagged</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">3×</div><div class="uc-mock-stat-l">Engagement</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">+40%</div><div class="uc-mock-stat-l">Retention</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">98%</div><div class="uc-mock-stat-l">Open rate</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 3: Lead Conversion -->
      <div class="uc-panel" id="uc-panel-3">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-graph-up-arrow"></i> Lead Conversion</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Get in front of customers faster - 50% of leads go to the first responder</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Text messaging for financial institutions is the fastest way to get in front of customers. Lead into personalized conversations that adapt to client responses, making 360 SMS the go-to SMS service for financial industries that scales with every team size.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Instant SMS response to any new lead record created in Salesforce</li>
              <li><span class="chk-icon">✓</span>Conversational sequences adapt to client responses - progressive profiling</li>
              <li><span class="chk-icon">✓</span>Encouraging prompts steer automated responses - for easier closing at scale</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">50%</div><div class="stat-l">First responder wins</div></div>
              <div><div class="stat-n">3×</div><div class="stat-l">Faster conversion</div></div>
              <div><div class="stat-n">&lt;3 min</div><div class="stat-l">First response</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Lead Follow-Up · Salesforce Financial Services Cloud</span><span class="uc-mock-badge">Active</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-lightning-charge-fill"></i> Trigger: New lead record created - inquiry received</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-send-fill me-1"></i> Instant SMS fired with advisor intro + product link</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Delivered ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-link-45deg me-1"></i> Product information link clicked</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Tracked ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-check-circle-fill me-1"></i> Lead replied YES - routed to advisor</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Converted</span></div>
              </div>
              <div class="uc-mock-foot">✓ Lead converted · Advisor briefed instantly · Record updated in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">50%</div><div class="uc-mock-stat-l">First responder</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">3×</div><div class="uc-mock-stat-l">Conversion rate</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">&lt;3 min</div><div class="uc-mock-stat-l">First response</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 4: AI Client Support -->
      <div class="uc-panel" id="uc-panel-4">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-robot"></i> AI Client Support</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Automate inquiry response and reduce client anxiety - 24/7</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Reduce client anxiety by responding immediately. With 360 SMS you'll easily configure elaborate flows of text automation - the backbone of reliable WhatsApp messaging for financial services and SMS, leaving no loose ends.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>AI handles FAQs, account queries, and product information - 24/7</li>
              <li><span class="chk-icon">✓</span>Sentiment detection escalates urgent or distressed clients to a human advisor</li>
              <li><span class="chk-icon">✓</span>All conversations auto-logged to client record - data stays in Salesforce</li>
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
                <span style="font-size:11px;font-weight:700;color:rgba(255,255,255,.9)">AI Support Agent · 24/7 · Salesforce Financial Services Cloud</span>
                <span style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);background:rgba(0,87,184,.2);border:1px solid rgba(0,87,184,.3);border-radius:20px;padding:2px 9px;display:flex;align-items:center;gap:4px"><span style="width:5px;height:5px;border-radius:50%;background:#5B9EF5;display:inline-block;animation:pulse 2s infinite"></span> Online</span>
              </div>
              <div style="padding:14px;display:flex;flex-direction:column;gap:8px">
                <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:7px;padding:10px 12px">
                  <div style="font-size:9px;font-weight:700;color:rgba(91,158,245,.9);text-transform:uppercase;letter-spacing:.06em;margin-bottom:6px">⚡ SENTIMENT: URGENT DETECTED</div>
                  <div style="font-size:11px;color:rgba(255,255,255,.8);line-height:1.6">Client: "I think there's been an unauthorized transaction on my account."<br><br>AI: Urgency detected. Routing to your advisor immediately. Sending secure verification link now.</div>
                  <div style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);margin-top:8px">🚨 Escalated to human advisor in 4 seconds</div>
                </div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> FAQ &amp; account queries handled automatically - zero staff needed</div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> All conversations auto-logged to client record in Salesforce</div>
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

      <!-- PANEL 5: Advisory & Retention Drips -->
      <div class="uc-panel" id="uc-panel-5">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-bullseye"></i> Advisory &amp; Retention Drips</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Keep clients engaged between reviews and boost retention by 31%</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Point-and-click drip campaigns via SMS, WhatsApp, or MMS - delivering periodic financial insights, market updates, and life event greetings on a scheduled cadence to keep clients engaged and confident in their advisor relationship long-term.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Point-and-click drip campaigns via SMS, WhatsApp, or MMS</li>
              <li><span class="chk-icon">✓</span>Market updates, financial tips, and milestone follow-ups on schedule</li>
              <li><span class="chk-icon">✓</span>Keeps clients engaged between meetings and improves program ROI</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">72%</div><div class="stat-l">Engagement rate</div></div>
              <div><div class="stat-n">+31%</div><div class="stat-l">Retention</div></div>
              <div><div class="stat-n">89%</div><div class="stat-l">Response rate</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Advisory Retention Drip · SMS + WhatsApp</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Month 1 · Welcome message + portfolio overview + advisor intro</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Month 2 · Market update + personalized financial insight</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Month 3 · Milestone check-in - 89% of clients responded</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Month 6 · Re-engagement offer sent to at-risk clients</div>
              </div>
              <div class="uc-mock-foot">✓ Engagement rate 72% · Retention +31% vs email-only group</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">72%</div><div class="uc-mock-stat-l">Engagement</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">+31%</div><div class="uc-mock-stat-l">Retention</div></div>
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
        <div style="font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.55);margin-bottom:10px">Financial Services Teams</div>
        <div style="font-size:clamp(18px,2.5vw,24px);font-weight:800;color:#fff;letter-spacing:-.4px;line-height:1.2;margin-bottom:8px">Ready to boost client engagement?</div>
        <div style="font-size:13px;color:rgba(255,255,255,.7);line-height:1.6">See 360 SMS running inside Salesforce Financial Services Cloud in a free 20-minute demo.</div>
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
      <p class="sec-sub mx-auto" style="max-width:520px;margin:8px auto 0">Every client workflow follows the same pattern - trigger, send, respond, log.</p>
    </div>
    <div class="hiw-tabs">
      <button class="hiw-tab-btn active" onclick="hiwGo(0,this)"><i class="bi bi-calendar-event-fill"></i> Appointment Reminders</button>
      <button class="hiw-tab-btn" onclick="hiwGo(1,this)"><i class="bi bi-briefcase-fill"></i> Lead Follow-Up</button>
      <button class="hiw-tab-btn" onclick="hiwGo(2,this)"><i class="bi bi-chat-dots-fill"></i> Inquiry Response</button>
      <button class="hiw-tab-btn" onclick="hiwGo(3,this)"><i class="bi bi-bullseye"></i> Client Retention</button>
    </div>
    <div class="hiw-slider-wrap px-3 px-md-0">
      <div class="hiw-slider-track">

        <div class="hiw-slide active" id="hiw-0">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-calendar-event-fill"></i></div><div><div class="hiw-slide-title">Appointment Reminders</div><div class="hiw-slide-sub">Auto-triggered · Salesforce Financial Services Cloud</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↓ 40% no-shows</span><span class="hiw-slide-count">01 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Meeting created in Salesforce</div><div class="hiw-step-desc">Financial Services Cloud record triggers the automated flow</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Reminder SMS sent 24h before</div><div class="hiw-step-desc">Personalized with advisor name, time &amp; location</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Client replies YES or RESCHEDULE</div><div class="hiw-step-desc">2-way reply handled instantly by 360 SMS</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Record auto-updated in Salesforce</div><div class="hiw-step-desc">Confirmation logged - zero manual entry</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>All interactions auto-logged to Salesforce Financial Services Cloud · Zero manual entry required</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-0"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-1">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-briefcase-fill"></i></div><div><div class="hiw-slide-title">Lead Follow-Up</div><div class="hiw-slide-sub">Instant response · First-mover advantage</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↑ 3× conversion rate</span><span class="hiw-slide-count">02 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Lead record created in Salesforce</div><div class="hiw-step-desc">Inquiry triggers automated response flow</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">First SMS fires instantly</div><div class="hiw-step-desc">Personalized with lead name, product, advisor</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Lead replies YES or INFO</div><div class="hiw-step-desc">Conversational flow adapts to their response</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Lead routed to advisor in Salesforce</div><div class="hiw-step-desc">Record updated - advisor briefed instantly</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>First-mover advantage captured · All replies logged to Salesforce lead record automatically</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-1"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-2">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-chat-dots-fill"></i></div><div><div class="hiw-slide-title">Inquiry Response</div><div class="hiw-slide-sub">AI-powered · Salesforce Financial Services Cloud</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↑ Client satisfaction</span><span class="hiw-slide-count">03 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Client sends inbound query</div><div class="hiw-step-desc">Via SMS, WhatsApp, or MMS to your Salesforce number</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">AI identifies intent &amp; responds</div><div class="hiw-step-desc">FAQ answered automatically - no staff needed</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Urgent queries escalated instantly</div><div class="hiw-step-desc">Sentiment detection routes to human advisor in &lt;5 seconds</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Interaction logged to client record</div><div class="hiw-step-desc">Full audit trail in Salesforce - no loose ends</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Inquiry response automated · Client anxiety reduced · Data stays inside Salesforce org</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-2"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-3">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-bullseye"></i></div><div><div class="hiw-slide-title">Client Retention</div><div class="hiw-slide-sub">Drip campaigns · Keyword routing · AI escalation</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↑ Client lifetime value</span><span class="hiw-slide-count">04 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Drip schedule set in Salesforce</div><div class="hiw-step-desc">Cadence linked to client review schedule</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Monthly market update SMS sent</div><div class="hiw-step-desc">Personalized - relevant to client's portfolio type</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Client replies INTERESTED or CALL</div><div class="hiw-step-desc">Keyword routing handles each response automatically</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">At-risk clients flagged instantly</div><div class="hiw-step-desc">Alert to advisor + case created in Salesforce</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>AI detects non-response · Escalates to advisor · Case auto-created in Salesforce</span></div>
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
    <div style="display:inline-flex;align-items:center;gap:7px;background:rgba(0,87,184,.18);border:1px solid rgba(0,87,184,.35);border-radius:20px;padding:5px 14px;font-size:10px;font-weight:700;color:rgba(120,170,255,.9);letter-spacing:.07em;text-transform:uppercase;margin-bottom:20px">⚡ AI Use Case · Financial Services</div>
    <h2 style="font-size:clamp(22px,3vw,32px);font-weight:800;color:#fff;letter-spacing:-1px;line-height:1.15;margin-bottom:12px">AI-Powered Real-Time<br><span style="color:#5B9BD5">Client Support. 24/7</span></h2>
    <p style="font-size:15px;color:rgba(255,255,255,.48);line-height:1.7;max-width:560px;margin-bottom:36px">High inbound client query volume overwhelms advisor teams - especially outside office hours. 360 SMS AI agents handle it all inside Salesforce: FAQs, account queries, advisor routing, and urgent escalation - automatically. Reduce client anxiety by responding to service inquiries immediately, leaving no loose ends.</p>
    <div class="row g-3 mb-4">
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-robot fs-4"></i></div><div class="aa-title">AI Chatbot</div><div class="aa-desc">Automate client conversations 24/7. Answer FAQs, confirm appointments, handle account queries, and engage prospects across SMS and WhatsApp - all inside Salesforce Financial Services Cloud.</div><span class="aa-result">24/7 · zero staff overhead</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-shield-check fs-4"></i></div><div class="aa-title">AI Compliance &amp; Risk Monitoring</div><div class="aa-desc">AI detects urgency and client sentiment in real time. Routine queries are handled automatically; distressed or high-priority clients are flagged and routed instantly - fraud, urgency, or distress never missed.</div><span class="aa-result">Reduce compliance risks automatically</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-translate fs-4"></i></div><div class="aa-title">Multilingual Client Engagement</div><div class="aa-desc">AI automatically translates customer conversations across SMS, WhatsApp, and other messaging channels, enabling financial institutions to engage clients in their preferred language without delays or manual translation.</div><span class="aa-result">Never lose a client because of language barriers</span></div></div>
    </div>
    <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:10px;padding:20px 24px;display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap">
      <div>
        <div style="font-size:14px;font-weight:700;color:#fff;margin-bottom:3px">All AI agents run natively inside Salesforce - no external tools, no extra logins.</div>
        <div style="font-size:12px;color:rgba(255,255,255,.4)">Every conversation is auto-logged to the client record. Data stays in your Salesforce org.</div>
      </div>
      <a href="<?php echo home_url(); ?>/360sms-for-agentforce/" style="background:var(--sf);color:#fff;border:none;border-radius:7px;padding:11px 22px;font-size:13px;font-weight:700;cursor:pointer;white-space:nowrap;text-decoration:none;display:inline-flex;align-items:center">See AI in action →</a>
    </div>
  </div>
</div>

<!-- SECURITY & COMPLIANCE -->
<section class="sec">
  <div class="container-xl">
    <div class="row align-items-center g-4 g-lg-5">
      <div class="col-12 col-lg-6">
        <div class="comp-badge"><i class="bi bi-shield-lock-fill"></i> Secure Finance Texting by Design</div>
        <div class="lbl">Security &amp; Compliance</div>
        <h2 class="sec-h">Aligning with compliance<br>requirements - by design</h2>
        <p class="sec-sub mb-0">360 SMS is architected so client data <strong>never touches our servers</strong>. Everything runs inside your own Salesforce cloud - the infrastructure your financial team already trusts and audits.</p>
        <div class="comp-pts">
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-database-fill-slash"></i></div><div><div class="comp-th">Zero external data storage</div><div class="comp-tp">All data hosted on your Salesforce cloud instance - 360 SMS never stores client financial data on its own servers.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-lock-fill"></i></div><div><div class="comp-th">TLS-encrypted API callouts</div><div class="comp-tp">Every callout from Salesforce to messaging providers is TLS-encrypted, protecting sensitive financial data in transit end-to-end.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-shield-fill-check"></i></div><div><div class="comp-th">HTTP Basic &amp; Digest Authentication</div><div class="comp-tp">360 SMS supports HTTP Basic and Digest Auth to protect every API request from unauthorized access.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-check-circle-fill"></i></div><div><div class="comp-th">Double Opt-In &amp; Opt-Out consent management</div><div class="comp-tp">Use the 360 SMS App's Opt-In addon to capture consent and initiate the conversation - essential for any compliant SMS service for financial industries.</div></div></div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="comp-visual">
          <div style="font-size:12px;font-weight:700;color:var(--ink);margin-bottom:3px">Secure Finance Texting Architecture</div>
          <div style="font-size:11px;color:var(--ink3);margin-bottom:12px">How client data stays protected end-to-end</div>
          <div class="hck-row"><div class="hck">✓</div> Client data stored in your Salesforce org only</div>
          <div class="hck-row"><div class="hck">✓</div> TLS-encrypted callouts - data protected in transit</div>
          <div class="hck-row"><div class="hck">✓</div> No client data stored on 360 SMS servers - ever</div>
          <div class="hck-row"><div class="hck">✓</div> HTTP Basic + Digest Auth on all API requests</div>
          <div class="hck-row"><div class="hck">✓</div> Double Opt-In / Opt-Out consent flows built in</div>
          <div class="hck-row"><div class="hck">✓</div> All conversations auto-logged to client record</div>
          <div style="background:var(--sf);border-radius:8px;padding:12px 14px;margin-top:4px">
            <div style="font-size:12px;font-weight:700;color:#fff;margin-bottom:3px">Salesforce Financial Services Cloud Compliance</div>
            <div style="font-size:11px;color:rgba(255,255,255,.7)">360 SMS runs entirely within your Salesforce environment - inheriting all existing compliance, audit, and data controls.</div>
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