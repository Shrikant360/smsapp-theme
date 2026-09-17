<?php
/*
Template Name:Industry Real Estate
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
      <span style="color:var(--ink);font-weight:600">Real Estate</span>
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
          AI-Powered · Salesforce Native · Real Estate Texting
        </div>
        <h1>Convert Serious Buyers Faster and Build Referrals<br>with <em>Salesforce SMS</em></h1>
        <p class="hero-sub">You have just minutes to respond before homebuyers move on. <strong>AI-powered real estate texting software</strong> ensures instant replies, faster follow-ups, and better lead qualification to help you close deals faster - no code. No middleware.</p>
        <div class="d-flex gap-3 flex-wrap mb-3">
          <a class="open-popup-form-on-click btn-primary-cta">Speak to a Texting Professional</a>
          <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" class="btn-outline-cta">Book a Demo</a>
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
            <div class="hero-ui-url">360 SMS - Buyer Inbox · Salesforce CRM for Real Estate</div>
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
              <div style="padding:10px 12px;border-bottom:1px solid #eee;font-size:11px;font-weight:700;color:var(--ink)">Buyer Conversations</div>
              <div class="conv-item act border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Sarah Mitchell</span><span style="font-size:10px;color:var(--ink4)">9:03 AM</span></div>
                <div class="conv-prev hl">CONFIRM - Saturday 11am 🏠</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Marcus Rivera</span><span style="font-size:10px;color:var(--ink4)">8:44 AM</span></div>
                <div class="conv-prev dim">Offer submitted - exciting! 🔑</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px">💚 WhatsApp</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Jessica Chen</span><span style="font-size:10px;color:var(--ink4)">Tue</span></div>
                <div class="conv-prev dim">Do you have 4BR in Austin?</div>
                <div class="d-flex align-items-center justify-content-between">
                  <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px"><i class="bi bi-robot"></i> AI Bot</div>
                  <span style="background:#0057B8;color:#fff;font-size:9px;font-weight:700;width:15px;height:15px;border-radius:50%;display:flex;align-items:center;justify-content:center">1</span>
                </div>
              </div>
              <div class="conv-item">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">David Park</span><span style="font-size:10px;color:var(--ink4)">Mon</span></div>
                <div class="conv-prev dim">Closed! Thanks for everything 🎉</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
            </div>
            <!-- Chat panel -->
            <div class="d-flex flex-column flex-grow-1" style="background:#fff;min-width:0">
              <div style="padding:10px 14px;border-bottom:1px solid #eee">
                <div style="font-size:13px;font-weight:700;color:var(--ink)">Sarah Mitchell - Buyer</div>
                <div style="font-size:10px;color:var(--ink4)">via Salesforce CRM · House Beagle</div>
              </div>
              <div class="flex-grow-1 d-flex flex-column gap-2 p-3" style="overflow:hidden">
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Sarah - I'm Emma at House Beagle. You inquired about 3BR homes in Austin. What's your budget and ideal move-in timeline? 🏠</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start" style="max-width:75%">
                  <div class="bubble-in">$550K, looking to move in 90 days</div>
                  <div class="msg-meta">Sarah · 9:03 AM</div>
                </div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Perfect - I have 4 great matches. Here are the listings: housebeagle.co/sarah-3br. Reply VIEW to book a tour 🔑</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:6px;padding:6px 10px;font-size:10px;font-weight:700;color:#0057B8">✓ Buyer profiled · Listings sent · Agent briefed · Record updated in Salesforce</div>
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
      <div class="proof-item"><span class="proof-n">31%</span><span class="proof-l ms-2">Higher Lead-to-Close<br>Conversion</span></div>
      <div class="proof-item"><span class="proof-n">40%</span><span class="proof-l ms-2">More Open House<br>Attendance</span></div>
      <div class="proof-item"><span class="proof-n">&lt;10 min</span><span class="proof-l ms-2">Speed-to-Lead<br>Response Window</span></div>
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
      <div class="lbl d-flex justify-content-center">Why real estate teams choose 360 SMS</div>
      <h2 class="sec-h mx-auto" style="max-width:640px">More Buyers, More Closed Homes <br class="d-none d-md-block">with Text Marketing for Real Estate</h2>
      <p class="sec-sub mx-auto" style="max-width:600px">Every use case runs natively inside Salesforce - from speed-to-lead to open house automation to buyer persona profiling. Click a use case to see it in action.</p>
    </div>

    <!-- Tab pills -->
    <div class="d-flex gap-2 flex-wrap justify-content-center mb-4">
      <button onclick="switchUC(0)" class="uc-tab-btn active"><i class="bi bi-lightning-charge-fill"></i> Speed-to-Lead</button>
      <button onclick="switchUC(1)" class="uc-tab-btn"><i class="bi bi-house-door-fill"></i> Open House Invites</button>
      <button onclick="switchUC(2)" class="uc-tab-btn"><i class="bi bi-person-lines-fill"></i> Buyer Persona Profiling</button>
      <button onclick="switchUC(3)" class="uc-tab-btn"><i class="bi bi-megaphone-fill"></i> Listing Broadcasts</button>
      <button onclick="switchUC(4)" class="uc-tab-btn"><i class="bi bi-robot"></i> AI Buyer Support</button>
      <button onclick="switchUC(5)" class="uc-tab-btn"><i class="bi bi-link-45deg"></i> Property Inquiries &amp; Links</button>
    </div>

    <div style="background:#fff;border:1px solid var(--bdr);border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.07)">

      <!-- PANEL 0: Speed-to-Lead -->
      <div class="uc-panel active" id="uc-panel-0">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-lightning-charge-fill"></i> Speed-to-Lead</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Less than 10 minutes before serious buyers are lost to a sea of listings</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">With high volumes of calls and web leads, SMS marketing for real estate automation helps you act within the response window. Qualified buyers respond to personalized texts in minutes - turning first contact into lasting relationships.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Instant personalized intro fires when lead record is created in Salesforce</li>
              <li><span class="chk-icon">✓</span>Merge fields personalize with buyer name, area, and property type at scale</li>
              <li><span class="chk-icon">✓</span>Buyers talking to several agents - you respond first, you win the relationship</li>
            </ul>
            <div class="uc-stats">
              <div>
                <div class="stat-n">&lt;10 min</div>
                <div class="stat-l">Response window</div>
              </div>
              <div>
                <div class="stat-n">31%</div>
                <div class="stat-l">Lead conversion</div>
              </div>
              <div>
                <div class="stat-n">0</div>
                <div class="stat-l">Manual outreach</div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Speed-to-Lead · Salesforce CRM Flow</span><span class="uc-mock-badge">Live</span></div>
              <div class="uc-mock-body" style="background:#F9FBFF">
                <div style="font-size:9px;font-weight:700;color:var(--ink4);text-transform:uppercase;letter-spacing:.07em;text-align:center;margin-bottom:4px">Buyer Conversation · SMS · &lt;10 Minutes</div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Sarah - I'm Emma at House Beagle. You inquired about 3BR homes in Austin. What's your budget and ideal timeline? 🏠</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:65%">
                  <div class="bubble-in">$550K, 90 days 🏡</div>
                  <div class="msg-meta">Sarah · 9:04 AM</div>
                </div>
                <div class="align-self-end mt-1" style="max-width:88%">
                  <div class="bubble-out">I have 4 great matches - here are the listings: housebeagle.co/sarah-3br. Reply VIEW to book a tour!</div>
                  <div class="msg-meta text-end">9:04 AM · Auto-logged ✓</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ First contact &lt;10 min · Buyer profiled · Serious buyers separated before first call</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">&lt;10 min</div>
                  <div class="uc-mock-stat-l">Response</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">31%</div>
                  <div class="uc-mock-stat-l">Conversion lift</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">0</div>
                  <div class="uc-mock-stat-l">Manual outreach</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 1: Open House Invites -->
      <div class="uc-panel" id="uc-panel-1">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-house-door-fill"></i> Open House Invites</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Reduce no-shows - send personalized open house invites that feel 1-on-1 at scale</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Invite buyers in your territory and drive keyword-based responses to confirm interest or trigger actions. Property SMS delivers 1-on-1 communication at scale and enables easy booking, confirmation, and rescheduling through auto-replies.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Personalized invite with property details, photos link, and CONFIRM keyword</li>
              <li><span class="chk-icon">✓</span>Day-before and morning-of reminders fire automatically - outperform email every time</li>
              <li><span class="chk-icon">✓</span>RESCHEDULE keyword lets buyers self-serve - no agent coordination needed</li>
            </ul>
            <div class="uc-stats">
              <div>
                <div class="stat-n">↑40%</div>
                <div class="stat-l">Attendance rate</div>
              </div>
              <div>
                <div class="stat-n">↓60%</div>
                <div class="stat-l">No-shows</div>
              </div>
              <div>
                <div class="stat-n">0</div>
                <div class="stat-l">Manual follow-ups</div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Open House Automation · Salesforce CRM</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-lightning-charge-fill"></i> Open house created - invites fire to matched buyers in territory</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-house-fill me-1"></i> "Hi Sarah - open house Sat 11am, 4BR Oak Lane. Reply CONFIRM"</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Sent ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-check2-circle me-1"></i> Sarah replied CONFIRM - record updated instantly</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Confirmed ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-alarm-fill me-1"></i> Morning-of reminder + address + parking sent</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Sent ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ Attendance ↑40% · No-shows ↓60% · Buyers show up because the text hit their lock screen</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">↑40%</div>
                  <div class="uc-mock-stat-l">Attendance</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">↓60%</div>
                  <div class="uc-mock-stat-l">No-shows</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">0</div>
                  <div class="uc-mock-stat-l">Manual follow-ups</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 2: Buyer Persona Profiling -->
      <div class="uc-panel" id="uc-panel-2">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-person-lines-fill"></i> Buyer Persona Profiling</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Narrow down the search - get all the information you need in one shot</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Collect all essential buyer information in one interaction without back-and-forth delays. Capture key decision-making details early and guide first-time buyers through a complex purchase journey with personalized real estate SMS automation.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Dynamic questionnaires driven by keyword replies - budget, beds, location, timeline</li>
              <li><span class="chk-icon">✓</span>All responses logged to Salesforce - buyer segments update automatically</li>
              <li><span class="chk-icon">✓</span>Agent enters every call fully briefed - no cold conversation, no wasted time</li>
            </ul>
            <div class="uc-stats">
              <div>
                <div class="stat-n">3×</div>
                <div class="stat-l">More qualified leads</div>
              </div>
              <div>
                <div class="stat-n">24/7</div>
                <div class="stat-l">Qualification</div>
              </div>
              <div>
                <div class="stat-n">0</div>
                <div class="stat-l">Manual profiling</div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Buyer Persona Profiling · Decision Tree · Salesforce</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row">
                  <div class="uc-mock-dot">✓</div> Budget: Jessica replied B) $500K–$750K - qualified buyer
                </div>
                <div class="uc-mock-row">
                  <div class="uc-mock-dot">✓</div> Bedrooms: 4BR minimum · Location: Austin, TX confirmed
                </div>
                <div class="uc-mock-row">
                  <div class="uc-mock-dot">✓</div> Timeline: 60 days · Pre-approved mortgage confirmed
                </div>
                <div class="uc-mock-row" style="background:#E8F0FB;border-color:#CCE0F7">
                  <div class="uc-mock-dot">!</div> Buyer profiled · 3 listings matched · Agent briefed in Salesforce
                </div>
              </div>
              <div class="uc-mock-foot">✓ Buyer profiled in one flow · Agent enters call briefed · All in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">3×</div>
                  <div class="uc-mock-stat-l">More qualified</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">24/7</div>
                  <div class="uc-mock-stat-l">Available</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">0</div>
                  <div class="uc-mock-stat-l">Manual profiling</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 3: Listing Broadcasts -->
      <div class="uc-panel" id="uc-panel-3">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-megaphone-fill"></i> Listing Broadcasts</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Accelerate buying decisions - broadcast property updates that hit home</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">You improve buyer success by sharing key facts early. Send updates on interest rates, new listings, availability changes, and final calls. Track engagement with shortened links to identify ready-to-visit buyers.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>New listings, price drops, rate changes, and final calls - all auto-broadcast</li>
              <li><span class="chk-icon">✓</span>Segmented by buyer persona - 3BR Austin buyers get 3BR Austin listings only</li>
              <li><span class="chk-icon">✓</span>Traceable shortened URLs - link clicks show who is most ready to buy</li>
            </ul>
            <div class="uc-stats">
              <div>
                <div class="stat-n">5×</div>
                <div class="stat-l">More read vs email</div>
              </div>
              <div>
                <div class="stat-n">89%</div>
                <div class="stat-l">Link click rate</div>
              </div>
              <div>
                <div class="stat-n">0</div>
                <div class="stat-l">Manual outreach</div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#0a1e48 0%,#0d2d6b 100%)">
            <div class="uc-mock" style="background:#0a1e48;border:1px solid rgba(255,255,255,.1)">
              <div style="background:rgba(0,87,184,.25);border-bottom:1px solid rgba(255,255,255,.1);padding:12px 16px;display:flex;align-items:center;justify-content:space-between">
                <span style="font-size:11px;font-weight:700;color:rgba(255,255,255,.9)">Listing Broadcast · Buyer Segments · Salesforce</span>
                <span style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);background:rgba(0,87,184,.2);border:1px solid rgba(0,87,184,.3);border-radius:20px;padding:2px 9px;display:flex;align-items:center;gap:4px"><span style="width:5px;height:5px;border-radius:50%;background:#5B9EF5;display:inline-block;animation:pulse 2s infinite"></span> Running</span>
              </div>
              <div style="padding:14px;display:flex;flex-direction:column;gap:8px">
                <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:7px;padding:10px 12px">
                  <div style="font-size:9px;font-weight:700;color:rgba(91,158,245,.9);text-transform:uppercase;letter-spacing:.06em;margin-bottom:6px">🏠 NEW LISTING - 3BR AUSTIN BUYERS</div>
                  <div style="font-size:11px;color:rgba(255,255,255,.8);line-height:1.6">"Hi Sarah - new 3BR just listed in Oak Hill, $529K, just reduced. Photos + floor plan: housebeagle.co/oak-hill · Reply VIEW to book a tour 🏡"<br><br>Sarah clicks link → click logged in Salesforce → agent prioritizes</div>
                  <div style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);margin-top:8px">✓ Hot lead identified by click activity · Agent follows up immediately</div>
                </div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> Interest rate changes & final calls auto-broadcast to all segments</div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> VIEW keyword triggers appointment booking automatically</div>
              </div>
              <div style="display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid rgba(255,255,255,.1)">
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)">
                  <div style="font-size:16px;font-weight:800;color:#fff">5×</div>
                  <div style="font-size:9px;color:rgba(255,255,255,.4)">More read</div>
                </div>
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)">
                  <div style="font-size:16px;font-weight:800;color:#fff">89%</div>
                  <div style="font-size:9px;color:rgba(255,255,255,.4)">Link click rate</div>
                </div>
                <div style="padding:10px;text-align:center">
                  <div style="font-size:16px;font-weight:800;color:#fff">0</div>
                  <div style="font-size:9px;color:rgba(255,255,255,.4)">Manual outreach</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 4: AI Buyer Support -->
      <div class="uc-panel" id="uc-panel-4">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-robot"></i> AI Buyer Support</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Spend more time prospecting - automate basic responses at scale</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Most buyers prefer receiving listing details over text for faster, more accurate responses. With 360 SMS, automate basic replies so teams can focus on high-value activities like prospecting. Quick responses help buyers close faster on competitive listings.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>AI answers property FAQs, listing details, and viewing requests 24/7</li>
              <li><span class="chk-icon">✓</span>Hot leads escalated to human agent instantly - sentiment detection built in</li>
              <li><span class="chk-icon">✓</span>All conversations logged to Salesforce buyer record - agent picks up seamlessly</li>
            </ul>
            <div class="uc-stats">
              <div>
                <div class="stat-n">24/7</div>
                <div class="stat-l">Response</div>
              </div>
              <div>
                <div class="stat-n">↑2×</div>
                <div class="stat-l">Prospecting time</div>
              </div>
              <div>
                <div class="stat-n">0</div>
                <div class="stat-l">Missed inquiries</div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>AI Buyer Support · 24/7 · Salesforce CRM</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row">
                  <div class="uc-mock-dot">✓</div> "How many bedrooms does 4 Oak Lane have?" - AI answers instantly
                </div>
                <div class="uc-mock-row">
                  <div class="uc-mock-dot">✓</div> FAQ handled: HOA fees, school district, nearest transport
                </div>
                <div class="uc-mock-row">
                  <div class="uc-mock-dot">✓</div> Sentiment: high intent detected - escalated to agent instantly
                </div>
                <div class="uc-mock-row">
                  <div class="uc-mock-dot">✓</div> Agent steps in with full history visible - ready to close
                </div>
              </div>
              <div class="uc-mock-foot">✓ 24/7 buyer support · Prospecting time ↑2× · No missed inquiries</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">24/7</div>
                  <div class="uc-mock-stat-l">Response</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">↑2×</div>
                  <div class="uc-mock-stat-l">Prospecting time</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">0</div>
                  <div class="uc-mock-stat-l">Missed inquiries</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 5: Property Inquiries & Traceable Links -->
      <div class="uc-panel" id="uc-panel-5">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-link-45deg"></i> Property Inquiries &amp; Traceable Links</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Cut back on inquiries - traceable links measure interest before site visits</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Track prospect interest through engagement with links to listings, maps, and virtual tours. Send shortened, traceable URLs with photos, floor plans, and directions, and identify high-intent buyers before scheduling site visits.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Custom shortened URLs - listing photos, floor plans, Google Maps, virtual tours</li>
              <li><span class="chk-icon">✓</span>Link tracking in Salesforce - know who clicked and who is ready to make an offer</li>
              <li><span class="chk-icon">✓</span>Fewer questions at site visit - buyers arrive informed and ready to decide</li>
            </ul>
            <div class="uc-stats">
              <div>
                <div class="stat-n">↓50%</div>
                <div class="stat-l">Site visit queries</div>
              </div>
              <div>
                <div class="stat-n">89%</div>
                <div class="stat-l">Link click rate</div>
              </div>
              <div>
                <div class="stat-n">2×</div>
                <div class="stat-l">Faster decisions</div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Traceable Links · Property Interest · Salesforce</span><span class="uc-mock-badge">Tracked</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-link-45deg me-1"></i> "Hi Marcus - photos, floor plan &amp; virtual tour: housebeagle.co/oak-hill-full"</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-cursor-fill me-1"></i> Link clicked - floor plan viewed (3 min)</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Tracked ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-map-fill me-1"></i> Google Maps opened - driving route checked</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Hot lead ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-bell-fill me-1"></i> High intent - agent alerted instantly</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Flagged ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ Hot leads obvious from link data · Site visit queries ↓50% · Buyers arrive ready</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">↓50%</div>
                  <div class="uc-mock-stat-l">Site visit queries</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">89%</div>
                  <div class="uc-mock-stat-l">Click rate</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">2×</div>
                  <div class="uc-mock-stat-l">Faster decisions</div>
                </div>
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
        <div style="font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.55);margin-bottom:10px">Real Estate Teams</div>
        <div style="font-size:clamp(18px,2.5vw,24px);font-weight:800;color:#fff;letter-spacing:-.4px;line-height:1.2;margin-bottom:8px">Ready to close more homes?</div>
        <div style="font-size:13px;color:rgba(255,255,255,.7);line-height:1.6">See 360 SMS running inside Salesforce for real estate in a free 20-minute demo.</div>
      </div>
      <div class="flex-shrink-0"><a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" class="btn-cta-w">Book a Demo →</a></div>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="sec sec-alt">
  <div class="container-xl">
    <div class="text-center mb-4">
      <div class="lbl">How it works</div>
      <h2 class="sec-h">Automated. Inside Salesforce. Zero code</h2>
      <p class="sec-sub mx-auto" style="max-width:520px;margin:8px auto 0">Respond fast · Profile · Invite · Close · Nurture - every buyer journey handled automatically.</p>
    </div>
    <div class="hiw-tabs">
      <button class="hiw-tab-btn active" onclick="hiwGo(0,this)"><i class="bi bi-lightning-charge-fill"></i> Speed-to-Lead</button>
      <button class="hiw-tab-btn" onclick="hiwGo(1,this)"><i class="bi bi-house-door-fill"></i> Open House</button>
      <button class="hiw-tab-btn" onclick="hiwGo(2,this)"><i class="bi bi-megaphone-fill"></i> Listing Broadcast</button>
      <button class="hiw-tab-btn" onclick="hiwGo(3,this)"><i class="bi bi-arrow-repeat"></i> Close &amp; Long-Term Nurture</button>
    </div>
    <div class="hiw-slider-wrap px-3 px-md-0">
      <div class="hiw-slider-track">

        <div class="hiw-slide active" id="hiw-0">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left">
              <div class="hiw-slide-icon"><i class="bi bi-lightning-charge-fill"></i></div>
              <div>
                <div class="hiw-slide-title">Speed-to-Lead</div>
                <div class="hiw-slide-sub">First contact &lt;10 min · Buyer profiled · Listings triggered · Salesforce</div>
              </div>
            </div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">1.5× lead conversion with SMS</span><span class="hiw-slide-count">01 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step">
                <div class="hiw-step-num">1</div>
                <div class="hiw-step-label">Lead submits inquiry</div>
                <div class="hiw-step-desc">Salesforce lead record created - SMS fires instantly</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">2</div>
                <div class="hiw-step-label">Personalized intro sent</div>
                <div class="hiw-step-desc">Agent name, area, property type - merge fields from Salesforce</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">3</div>
                <div class="hiw-step-label">Buyer persona profiled</div>
                <div class="hiw-step-desc">Budget, beds, location captured in one conversational flow</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">4</div>
                <div class="hiw-step-label">Matching listings triggered</div>
                <div class="hiw-step-desc">Relevant properties sent · Agent briefed · No cold calls</div>
              </div>
            </div>
          </div>
          <div class="hiw-slide-foot">
            <div class="hiw-slide-foot-dot"></div><span>First contact &lt;10 min · Buyer profiled · Serious buyers separated before first call</span>
          </div>
          <div class="hiw-progress-bar">
            <div class="hiw-progress-fill" id="hiw-prog-0"></div>
          </div>
        </div>

        <div class="hiw-slide" id="hiw-1">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left">
              <div class="hiw-slide-icon"><i class="bi bi-house-door-fill"></i></div>
              <div>
                <div class="hiw-slide-title">Open House</div>
                <div class="hiw-slide-sub">Invite · CONFIRM · Reminders · Post-visit follow-up · Salesforce</div>
              </div>
            </div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">Attendance ↑40% · No-shows ↓60%</span><span class="hiw-slide-count">02 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step">
                <div class="hiw-step-num">1</div>
                <div class="hiw-step-label">Open house created in Salesforce</div>
                <div class="hiw-step-desc">Campaign triggers personalized invites to matched buyers</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">2</div>
                <div class="hiw-step-label">Buyer replies CONFIRM</div>
                <div class="hiw-step-desc">Attendance confirmed - Salesforce record updated instantly</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">3</div>
                <div class="hiw-step-label">Day-before &amp; morning-of reminders</div>
                <div class="hiw-step-desc">Address, time, parking - lands on lock screen every time</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">4</div>
                <div class="hiw-step-label">Post-visit follow-up fired</div>
                <div class="hiw-step-desc">OFFER keyword triggers offer flow · Agent notified instantly</div>
              </div>
            </div>
          </div>
          <div class="hiw-slide-foot">
            <div class="hiw-slide-foot-dot"></div><span>2 automated reminders outperform email every time · Buyers show up because the text hit their lock screen</span>
          </div>
          <div class="hiw-progress-bar">
            <div class="hiw-progress-fill" id="hiw-prog-1"></div>
          </div>
        </div>

        <div class="hiw-slide" id="hiw-2">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left">
              <div class="hiw-slide-icon"><i class="bi bi-megaphone-fill"></i></div>
              <div>
                <div class="hiw-slide-title">Listing Broadcast</div>
                <div class="hiw-slide-sub">Segmented broadcast · Traceable URLs · VIEW keyword · Salesforce</div>
              </div>
            </div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">5× more read than email</span><span class="hiw-slide-count">03 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step">
                <div class="hiw-step-num">1</div>
                <div class="hiw-step-label">New listing added in Salesforce</div>
                <div class="hiw-step-desc">CRM triggers broadcast to buyers matching property criteria</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">2</div>
                <div class="hiw-step-label">Traceable URL sent via SMS</div>
                <div class="hiw-step-desc">Photos, floor plan, Google Maps - all in one branded link</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">3</div>
                <div class="hiw-step-label">Link clicks tracked in Salesforce</div>
                <div class="hiw-step-desc">Hot leads identified by click activity - agent prioritizes</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">4</div>
                <div class="hiw-step-label">Viewing or offer triggered</div>
                <div class="hiw-step-desc">VIEW keyword → appointment booked automatically</div>
              </div>
            </div>
          </div>
          <div class="hiw-slide-foot">
            <div class="hiw-slide-foot-dot"></div><span>Hot leads identified by link clicks · Fewer queries at site visit · Deals move faster</span>
          </div>
          <div class="hiw-progress-bar">
            <div class="hiw-progress-fill" id="hiw-prog-2"></div>
          </div>
        </div>

        <div class="hiw-slide" id="hiw-3">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left">
              <div class="hiw-slide-icon"><i class="bi bi-arrow-repeat"></i></div>
              <div>
                <div class="hiw-slide-title">Close &amp; Long-Term Nurture</div>
                <div class="hiw-slide-sub">Offer → milestones → review → annual drip · Salesforce</div>
              </div>
            </div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↑ Referrals &amp; repeat business</span><span class="hiw-slide-count">04 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step">
                <div class="hiw-step-num">1</div>
                <div class="hiw-step-label">Offer accepted in Salesforce</div>
                <div class="hiw-step-desc">Congratulatory text fires automatically to buyer</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">2</div>
                <div class="hiw-step-label">Closing milestone updates</div>
                <div class="hiw-step-desc">Inspection, title, keys - every stage auto-communicated</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">3</div>
                <div class="hiw-step-label">Post-close check-in + review</div>
                <div class="hiw-step-desc">30-day check-in · review request · referral ask</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">4</div>
                <div class="hiw-step-label">Long-term drip continues</div>
                <div class="hiw-step-desc">Annual property value update · refi opportunity · repeat sale</div>
              </div>
            </div>
          </div>
          <div class="hiw-slide-foot">
            <div class="hiw-slide-foot-dot"></div><span>No buyer falls through the cracks · Referrals built in · Repeat business automated</span>
          </div>
          <div class="hiw-progress-bar">
            <div class="hiw-progress-fill" id="hiw-prog-3"></div>
          </div>
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
    <div style="display:inline-flex;align-items:center;gap:7px;background:rgba(0,87,184,.18);border:1px solid rgba(0,87,184,.35);border-radius:20px;padding:5px 14px;font-size:10px;font-weight:700;color:rgba(120,170,255,.9);letter-spacing:.07em;text-transform:uppercase;margin-bottom:20px">⚡ AI Use Case · Real Estate</div>
    <h2 style="font-size:clamp(22px,3vw,32px);font-weight:800;color:#fff;letter-spacing:-1px;line-height:1.15;margin-bottom:12px">AI-Powered Buyer<br><span style="color:#5B9BD5">Engagement at Scale. 24/7</span></h2>
    <p style="font-size:15px;color:rgba(255,255,255,.48);line-height:1.7;max-width:560px;margin-bottom:36px">Real estate agents are too valuable to waste on window shoppers and basic inquiries. 360 SMS AI agents handle buyer profiling, open house confirmations, property FAQs, and listing alerts - automatically inside Salesforce. Your team spends more time with serious buyers and less time on back-and-forths that go nowhere.</p>
    <div class="row g-3 mb-4">
      <div class="col-12 col-md-4">
        <div class="ai-agent-card">
          <div class="aa-icon"><i class="bi bi-person-lines-fill fs-4"></i></div>
          <div class="aa-title">AI Buyer Profiling &amp; FAQ Chatbot</div>
          <div class="aa-desc">Profile buyer personas, answer property FAQs, send matching listings, and book viewings 24/7 - all inside Salesforce. Automate basic responses to allocate agent time to high-value prospecting activities.</div><span class="aa-result">24/7 · zero agent time on routine queries</span>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="ai-agent-card">
          <div class="aa-icon"><i class="bi bi-diagram-2-fill fs-4"></i></div>
          <div class="aa-title">Drip Suggestions for Follow-Ups</div>
          <div class="aa-desc">AI-Based Drip Suggestions recommend optimized follow-up journeys and engagement timing based on buyer interaction behavior and inquiry patterns.</div><span class="aa-result">Increase property conversion opportunities</span>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="ai-agent-card">
          <div class="aa-icon"><i class="bi bi-translate fs-4"></i></div>
          <div class="aa-title">AI Language Translation for Buyers</div>
          <div class="aa-desc">AI Language Translation translates buyer and tenant conversations instantly to support seamless multilingual communication across messaging channels.</div><span class="aa-result">Reach wider property audiences</span>
        </div>
      </div>
    </div>
    <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:10px;padding:20px 24px;display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap">
      <div>
        <div style="font-size:14px;font-weight:700;color:#fff;margin-bottom:3px">Achieve end-to-end buyer communications with a single app integration - no code.</div>
        <div style="font-size:12px;color:rgba(255,255,255,.4)">Every buyer conversation is auto-logged to the Salesforce record. Data stays in your org.</div>
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
        <div class="comp-badge"><i class="bi bi-shield-lock-fill"></i> Salesforce Native · Property SMS · Territory Management</div>
        <div class="lbl">Platform &amp; Territory Management</div>
        <h2 class="sec-h">Manage relationships and<br>agent territory - all inside Salesforce</h2>
        <p class="sec-sub mb-0">Use automatic lead assignment and consistent originator numbers for messages, no matter who sends the campaign. <strong>Property SMS on Salesforce</strong> centralizes all buyer conversations, link tracking, open house automation, and listing broadcasts in one place - with full territory visibility.</p>
        <div class="comp-pts">
          <div class="comp-pt">
            <div class="comp-ic"><i class="bi bi-geo-alt-fill"></i></div>
            <div>
              <div class="comp-th">Automatic lead assignment by territory</div>
              <div class="comp-tp">Use automatic lead assignment and consistent originator numbers so buyers always hear from the same agent - building the personal relationship that closes deals.</div>
            </div>
          </div>
          <div class="comp-pt">
            <div class="comp-ic"><i class="bi bi-link-45deg"></i></div>
            <div>
              <div class="comp-th">Traceable shortened hyperlinks</div>
              <div class="comp-tp">Activity over links to listings, Google Maps, and floor plans tells you much about prospects - and helps cut back on inquiries at the time of the site visit.</div>
            </div>
          </div>
          <div class="comp-pt">
            <div class="comp-ic"><i class="bi bi-phone-fill"></i></div>
            <div>
              <div class="comp-th">15+ channels - SMS, WhatsApp, MMS, voice</div>
              <div class="comp-tp">Choose between 15+ built-in channels, short codes, VoIP, or toll-free numbers to encourage home buyers to respond on their preferred communication channel.</div>
            </div>
          </div>
          <div class="comp-pt">
            <div class="comp-ic"><i class="bi bi-check-circle-fill"></i></div>
            <div>
              <div class="comp-th">Opt-In &amp; Opt-Out consent management</div>
              <div class="comp-tp">Double Opt-In and Opt-Out consent flows built in - essential for compliant real estate SMS marketing at scale, directly inside Salesforce.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="comp-visual">
          <div style="font-size:12px;font-weight:700;color:var(--ink);margin-bottom:3px">Salesforce-Native Real Estate Platform</div>
          <div style="font-size:11px;color:var(--ink3);margin-bottom:12px">Buyer conversations and territory management centralized</div>
          <div class="hck-row">
            <div class="hck">✓</div> All buyer data inside your Salesforce CRM only
          </div>
          <div class="hck-row">
            <div class="hck">✓</div> Automatic territory assignment · consistent originator numbers
          </div>
          <div class="hck-row">
            <div class="hck">✓</div> Traceable URLs · link clicks tracked in Salesforce
          </div>
          <div class="hck-row">
            <div class="hck">✓</div> 15+ channels · SMS, WhatsApp, MMS, voice · single inbox
          </div>
          <div class="hck-row">
            <div class="hck">✓</div> Open house automation · keyword replies · confirmations
          </div>
          <div class="hck-row">
            <div class="hck">✓</div> All interactions auto-logged to buyer record
          </div>
          <div style="background:var(--sf);border-radius:8px;padding:12px 14px;margin-top:4px">
            <div style="font-size:12px;font-weight:700;color:#fff;margin-bottom:3px">Best SMS Marketing Platform for Real Estate</div>
            <div style="font-size:11px;color:rgba(255,255,255,.7)">Text communications are 5× more likely to be read. With a structured SMS strategy, lead conversions increase up to 1.5×.</div>
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
  (function() {
    var cur = 0,
      total = 4,
      timer;

    function startProgress(idx) {
      var fill = document.getElementById('hiw-prog-' + idx);
      if (!fill) return;
      fill.style.transition = 'none';
      fill.style.width = '0%';
      requestAnimationFrame(function() {
        requestAnimationFrame(function() {
          fill.style.transition = 'width 5s linear';
          fill.style.width = '100%';
        });
      });
    }

    function resetProgress(idx) {
      var fill = document.getElementById('hiw-prog-' + idx);
      if (fill) {
        fill.style.transition = 'none';
        fill.style.width = '0%';
      }
    }
    window.hiwGo = function(n, tabEl) {
      resetProgress(cur);
      document.getElementById('hiw-' + cur).classList.remove('active');
      document.querySelectorAll('.hiw-dot').forEach(function(d, i) {
        d.classList.toggle('active', i === n);
      });
      document.querySelectorAll('.hiw-tab-btn').forEach(function(b, i) {
        b.classList.toggle('active', i === n);
      });
      cur = n;
      document.getElementById('hiw-' + cur).classList.add('active');
      startProgress(cur);
      clearInterval(timer);
      timer = setInterval(function() {
        window.hiwShift(1);
      }, 5000);
    };
    window.hiwShift = function(dir) {
      hiwGo((cur + dir + total) % total, null);
    };
    var wrap = document.querySelector('.hiw-slider-track');
    if (wrap) {
      wrap.addEventListener('mouseenter', function() {
        clearInterval(timer);
        resetProgress(cur);
      });
      wrap.addEventListener('mouseleave', function() {
        startProgress(cur);
        timer = setInterval(function() {
          window.hiwShift(1);
        }, 5000);
      });
    }
    startProgress(0);
    timer = setInterval(function() {
      window.hiwShift(1);
    }, 5000);
  })();
</script>

<?php
get_footer('sms');
?>