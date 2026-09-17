<?php
/*
Template Name:Industry Nonprofit
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
      <span style="color:var(--ink);font-weight:600">Nonprofit</span>
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
          Salesforce Native · NPSP · Donor Texting
        </div>
        <h1>Raise More Donations and<br>Attract Volunteers with<br><em>SMS for Salesforce</em></h1>
        <p class="hero-sub">Automate sequences, donor engagement, volunteer coordination and re-engagement campaigns with <strong>personalised texting for nonprofits</strong> built natively inside Salesforce.</p>
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
            <div class="hero-ui-url">360 SMS - Donor Inbox · Salesforce NPSP</div>
          </div>
          <div class="d-flex" style="height:340px;overflow:hidden">
            <!-- Icon sidebar -->
            <div class="inbox-sidebar d-none d-sm-flex flex-column">
              <div class="inbox-icon act"><i class="bi bi-heart-fill" style="color:#fff;font-size:13px"></i><span class="inbox-badge">4</span></div>
              <div class="inbox-icon inact"><i class="bi bi-cash-coin" style="color:rgba(255,255,255,.6);font-size:13px"></i><span class="inbox-badge">2</span></div>
              <div class="inbox-icon inact"><i class="bi bi-megaphone-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i><span class="inbox-badge">1</span></div>
              <div class="inbox-icon inact"><i class="bi bi-robot" style="color:rgba(255,255,255,.6);font-size:13px"></i><span class="inbox-badge">3</span></div>
              <div class="inbox-icon inact"><i class="bi bi-trophy-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i></div>
              <div class="inbox-icon inact mt-auto"><i class="bi bi-gear-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i></div>
            </div>
            <!-- Conversation list -->
            <div style="width:200px;flex-shrink:0;border-right:1px solid #eee;overflow:hidden" class="d-none d-md-flex flex-column">
              <div style="padding:10px 12px;border-bottom:1px solid #eee;font-size:11px;font-weight:700;color:var(--ink)">Donor Conversations</div>
              <div class="conv-item act border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Angela Rivera</span><span style="font-size:10px;color:var(--ink4)">9:03 AM</span></div>
                <div class="conv-prev hl">GIVE - donation sent 💚</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Marcus Webb</span><span style="font-size:10px;color:var(--ink4)">8:44 AM</span></div>
                <div class="conv-prev dim">Event registration confirmed</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px">💚 WhatsApp</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Sophia Chen</span><span style="font-size:10px;color:var(--ink4)">Tue</span></div>
                <div class="conv-prev dim">Tell me more about the cause</div>
                <div class="d-flex align-items-center justify-content-between">
                  <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px"><i class="bi bi-robot"></i> AI Bot</div>
                  <span style="background:#0057B8;color:#fff;font-size:9px;font-weight:700;width:15px;height:15px;border-radius:50%;display:flex;align-items:center;justify-content:center">1</span>
                </div>
              </div>
              <div class="conv-item">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Priya M.</span><span style="font-size:10px;color:var(--ink4)">Mon</span></div>
                <div class="conv-prev dim">Lapsed donor re-engaged ✓</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
            </div>
            <!-- Chat panel -->
            <div class="d-flex flex-column flex-grow-1" style="background:#fff;min-width:0">
              <div style="padding:10px 14px;border-bottom:1px solid #eee">
                <div style="font-size:13px;font-weight:700;color:var(--ink)">Angela Rivera - Donor</div>
                <div style="font-size:10px;color:var(--ink4)">via Salesforce NPSP · Hope Foundation</div>
              </div>
              <div class="flex-grow-1 d-flex flex-column gap-2 p-3" style="overflow:hidden">
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Angela - text <strong>GIVE</strong> to donate to our spring clean water campaign, or reply <strong>INFO</strong> to learn more. Every dollar makes a difference. 💙</div>
                  <div class="msg-meta text-end">360 SMS · 9:00 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start" style="max-width:75%">
                  <div class="bubble-in">GIVE - donation sent 💚</div>
                  <div class="msg-meta">Angela · 9:03 AM</div>
                </div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Thank you so much, Angela! Your donation is confirmed. You're helping bring clean water to 500 families. 💙</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:6px;padding:6px 10px;font-size:10px;font-weight:700;color:#0057B8">✓ Donation confirmed · Donor record updated in Salesforce NPSP</div>
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
      <div class="proof-item"><span class="proof-n">42%</span><span class="proof-l ms-2">Higher Donor<br>Retention</span></div>
      <div class="proof-item"><span class="proof-n">52%</span><span class="proof-l ms-2">More Text-to-<br>Donate Gifts</span></div>
      <div class="proof-item"><span class="proof-n">34%</span><span class="proof-l ms-2">More Event<br>Attendance</span></div>
      <div class="proof-item"><span class="proof-n">98%</span><span class="proof-l ms-2">SMS<br>Open Rate</span></div>
      <div class="proof-item"><span class="proof-n">1,200+</span><span class="proof-l ms-2">Verified<br>Reviews</span></div>
      <div class="proof-item">
        <span style="background:var(--sf-l);color:var(--sf);font-size:11px;font-weight:700;padding:4px 10px;border-radius:4px;line-height:1.5;white-space:nowrap">AgentExchange · #1 Rated</span>
      </div>
    </div>
  </div>
</div>

<!-- NONPROFIT USE CASES -->
<section class="sec sec-alt" id="use-cases">
  <div class="container-xl">
    <div class="text-center mb-4">
      <div class="lbl d-flex justify-content-center">Why nonprofit teams choose 360 SMS</div>
      <h2 class="sec-h mx-auto" style="max-width:640px">How 360 SMS Solves Every<br class="d-none d-md-block">Nonprofit Communication Need</h2>
      <p class="sec-sub mx-auto" style="max-width:600px">Every use case runs natively inside Salesforce NPSP - automating the entire giving sequence. Click a use case to see it in action.</p>
    </div>

    <!-- Tab pills -->
    <div class="d-flex gap-2 flex-wrap justify-content-center mb-4">
      <button onclick="switchUC(0)" class="uc-tab-btn active"><i class="bi bi-cash-coin"></i> Text-to-Donate</button>
      <button onclick="switchUC(1)" class="uc-tab-btn"><i class="bi bi-heart-fill"></i> Donor Engagement</button>
      <button onclick="switchUC(2)" class="uc-tab-btn"><i class="bi bi-megaphone-fill"></i> Mass Campaigns</button>
      <button onclick="switchUC(3)" class="uc-tab-btn"><i class="bi bi-search-heart"></i> Cause Profiling</button>
      <button onclick="switchUC(4)" class="uc-tab-btn"><i class="bi bi-robot"></i> AI Donor Support</button>
      <button onclick="switchUC(5)" class="uc-tab-btn"><i class="bi bi-trophy-fill"></i> Event &amp; Gamified Fundraising</button>
    </div>

    <div style="background:#fff;border:1px solid var(--bdr);border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.07)">

      <!-- PANEL 0: Text-to-Donate -->
      <div class="uc-panel active" id="uc-panel-0">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-cash-coin"></i> Text-to-Donate</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Make giving faster - let donors partake in change in under 1 minute</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Trigger Text-to-Donate campaigns using advertised keywords in Salesforce NPSP. Donors text a keyword, instantly receive a donation link, and their records update automatically.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Advertise a keyword - donor texts it - donation link fires instantly</li>
              <li><span class="chk-icon">✓</span>Thank-you confirmation auto-sent once donation is received</li>
              <li><span class="chk-icon">✓</span>Donor record updated in Salesforce NPSP - zero manual entry</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">3×</div><div class="stat-l">More donations</div></div>
              <div><div class="stat-n">&lt;1 min</div><div class="stat-l">Giving flow</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual entry</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Text-to-Donate · Salesforce NPSP Flow</span><span class="uc-mock-badge">Live</span></div>
              <div class="uc-mock-body" style="background:#F9FBFF">
                <div style="font-size:9px;font-weight:700;color:var(--ink4);text-transform:uppercase;letter-spacing:.07em;text-align:center;margin-bottom:4px">Donor Conversation · SMS</div>
                <div class="align-self-start" style="max-width:65%">
                  <div class="bubble-in">GIVE</div>
                  <div class="msg-meta">Angela · 9:01 AM</div>
                </div>
                <div class="align-self-end mt-1" style="max-width:88%">
                  <div class="bubble-out">Thank you, Angela! Here's your secure donation link for our clean water campaign: [link]. Every dollar helps. 💙</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:60%">
                  <div class="bubble-in">Done! Just donated $50 💚</div>
                  <div class="msg-meta">Angela · 9:03 AM</div>
                </div>
                <div class="align-self-end mt-1" style="max-width:88%">
                  <div class="bubble-out">You're amazing - thank you! Your gift is helping 500 families access clean water. 💙</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ Donation confirmed · Donor record updated automatically in Salesforce NPSP</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">3×</div><div class="uc-mock-stat-l">More donations</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">&lt;1 min</div><div class="uc-mock-stat-l">Giving flow</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual entry</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 1: Donor Engagement -->
      <div class="uc-panel" id="uc-panel-1">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-heart-fill"></i> Donor Engagement</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Personalize donor communication - give on life events that matter</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Let donors contribute on important life events like birthdays and anniversaries using Salesforce texting for nonprofits. 1-on-1 conversational SMS forges the personal connections that drive commitment.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Birthday and anniversary texts triggered automatically from NPSP records</li>
              <li><span class="chk-icon">✓</span>1-on-1 conversational SMS - donors feel heard, not broadcast to</li>
              <li><span class="chk-icon">✓</span>First donation in - thank-you fires within minutes automatically</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">+42%</div><div class="stat-l">Donor retention</div></div>
              <div><div class="stat-n">89%</div><div class="stat-l">Response rate</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual outreach</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Donor Engagement Drip · Salesforce NPSP</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                  <span style="padding:5px 10px;background:#E8F0FB;border:1px solid #CCE0F7;border-radius:5px;font-size:10px;font-weight:700;color:#0057B8"><i class="bi bi-gift-fill"></i> Birthday Trigger</span>
                  <span style="color:var(--ink4)">→</span>
                  <span style="padding:5px 10px;background:var(--sf-l);border:1px solid var(--sf-m);border-radius:5px;font-size:10px;font-weight:700;color:var(--sf)">💬 Personal SMS</span>
                  <span style="color:var(--ink4)">→</span>
                  <span style="padding:5px 10px;background:#E8F0FB;border:1px solid #CCE0F7;border-radius:5px;font-size:10px;font-weight:700;color:#0057B8"><i class="bi bi-check-circle-fill"></i> Donated</span>
                </div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Happy Birthday, Marcus! 🎂 To celebrate, would you consider a gift to the children's literacy program you've supported? [link]</div>
                  <div class="msg-meta text-end">Auto-triggered · 8:00 AM</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:60%">
                  <div class="bubble-in">What a lovely idea! Just donated 💚</div>
                  <div class="msg-meta">Marcus · 8:14 AM</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ Donation received · Thank-you fired · NPSP record updated</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">+42%</div><div class="uc-mock-stat-l">Retention</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">89%</div><div class="uc-mock-stat-l">Response rate</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual outreach</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 2: Mass Campaigns -->
      <div class="uc-panel" id="uc-panel-2">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-megaphone-fill"></i> Mass Campaigns</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Pull at the right strings with mass texting for nonprofits</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">360 SMS Campaigns is a mass texting app for nonprofits built natively inside Salesforce. Broadcast personalized texts to donor segments in NPSP and easily promote fundraisers, fun-runs, cookouts, carnivals, and more.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Build donor lists from any Salesforce report or NPSP segment - no CSV export</li>
              <li><span class="chk-icon">✓</span>Personalized merge fields (donor name, cause, event) - never feels bulk</li>
              <li><span class="chk-icon">✓</span>Thousands of donors reached in minutes - every reply logged automatically</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">Scalable</div><div class="stat-l">Reach in minutes</div></div>
              <div><div class="stat-n">98%</div><div class="stat-l">Open rate</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">CSV exports</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Mass Campaign · Salesforce NPSP Segment</span><span class="uc-mock-badge">Sending</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Donor list built from NPSP report - 4,800 supporters</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Template personalized: "Hi [Name], our spring fun-run is on..."</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Broadcast sent - 98% open rate · 312 replies logged</div>
                <div class="uc-mock-row" style="background:#E8F0FB;border-color:#CCE0F7"><div class="uc-mock-dot">!</div> 47 opt-outs managed automatically - NPSP updated</div>
              </div>
              <div class="uc-mock-foot">✓ Campaign complete · All replies &amp; opt-outs logged to NPSP records</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">4,800</div><div class="uc-mock-stat-l">Donors reached</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">98%</div><div class="uc-mock-stat-l">Open rate</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">CSV exports</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 3: Cause Profiling -->
      <div class="uc-panel" id="uc-panel-3">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-search-heart"></i> Cause Profiling</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Find out what causes your donors care about - then personalize every appeal</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Find shared interests and causes to personalize nonprofit SMS campaigns, updates, and donation requests. Progressive profiling over conversational SMS builds the picture needed to maximize every donor's giving potential.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Keyword prompts profile donor cause preferences conversationally</li>
              <li><span class="chk-icon">✓</span>Responses update NPSP segments automatically - zero manual tagging</li>
              <li><span class="chk-icon">✓</span>MMS lets you showcase real impact - photos, videos, hyperlinks over text</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">3×</div><div class="stat-l">Higher giving</div></div>
              <div><div class="stat-n">72%</div><div class="stat-l">Profile rate</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual tagging</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Cause Profiling · Conversational SMS</span><span class="uc-mock-badge">Active</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-lightning-charge-fill"></i> Progressive profiling - building donor cause profile</div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Sophia - which cause matters most to you? Reply <strong>WATER</strong>, <strong>EDUCATION</strong>, or <strong>HUNGER</strong> and we'll keep you updated on what you care about most.</div>
                  <div class="msg-meta text-end">360 SMS · 10:00 AM</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:50%">
                  <div class="bubble-in">EDUCATION</div>
                  <div class="msg-meta">Sophia · 10:04 AM</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ Cause tagged · NPSP segment updated · Education appeals now personalized</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">3×</div><div class="uc-mock-stat-l">Higher giving</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">72%</div><div class="uc-mock-stat-l">Profile rate</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual tagging</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 4: AI Donor Support -->
      <div class="uc-panel" id="uc-panel-4">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-robot"></i> AI Donor Support</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Open yourself up to questions - advance donor negotiations at scale</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">AI agents handle every inbound donor query 24/7 - FAQs, cause information, giving options, and appointment scheduling over text, making SMS for nonprofits your most powerful relationship tool.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>AI answers donor FAQs and cause queries 24/7 - zero staff overhead</li>
              <li><span class="chk-icon">✓</span>Schedule appointments over text - for a more involved donor relationship</li>
              <li><span class="chk-icon">✓</span>All conversations auto-logged to donor record in Salesforce NPSP</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">24/7</div><div class="stat-l">Coverage</div></div>
              <div><div class="stat-n">&lt;5s</div><div class="stat-l">Escalation</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Missed queries</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#0a1e48 0%,#0d2d6b 100%)">
            <div class="uc-mock" style="background:#0a1e48;border:1px solid rgba(255,255,255,.1)">
              <div style="background:rgba(0,87,184,.25);border-bottom:1px solid rgba(255,255,255,.1);padding:12px 16px;display:flex;align-items:center;justify-content:space-between">
                <span style="font-size:11px;font-weight:700;color:rgba(255,255,255,.9)">AI Donor Agent · 24/7 · Salesforce NPSP</span>
                <span style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);background:rgba(0,87,184,.2);border:1px solid rgba(0,87,184,.3);border-radius:20px;padding:2px 9px;display:flex;align-items:center;gap:4px"><span style="width:5px;height:5px;border-radius:50%;background:#5B9EF5;display:inline-block;animation:pulse 2s infinite"></span> Online</span>
              </div>
              <div style="padding:14px;display:flex;flex-direction:column;gap:8px">
                <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:7px;padding:10px 12px">
                  <div style="font-size:9px;font-weight:700;color:rgba(91,158,245,.9);text-transform:uppercase;letter-spacing:.06em;margin-bottom:6px">💬 INBOUND DONOR QUERY · AUTO-HANDLED</div>
                  <div style="font-size:11px;color:rgba(255,255,255,.8);line-height:1.6">Donor: "How exactly does my donation reach families in need?"<br><br>AI: Great question! 100% of your gift goes directly to our field programs. Here's a 60-second impact video: [link]. Want to schedule a call with our team?</div>
                  <div style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);margin-top:8px">✓ FAQ handled in 3 seconds · No staff needed</div>
                </div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> Appointments scheduled over text - zero friction</div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> All conversations auto-logged to donor record in NPSP</div>
              </div>
              <div style="display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid rgba(255,255,255,.1)">
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">24/7</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Coverage</div></div>
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">&lt;5s</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Escalation</div></div>
                <div style="padding:10px;text-align:center"><div style="font-size:16px;font-weight:800;color:#fff">0</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Missed queries</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 5: Event & Gamified Fundraising -->
      <div class="uc-panel" id="uc-panel-5">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-trophy-fill"></i> Event &amp; Gamified Fundraising</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Keep donors engaged - gamify giving and promote every event</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Promote fun-runs, triathlons, cookouts, carnivals, and more with 360 SMS Campaigns inside Salesforce. Gamified fundraisers, leaderboard updates, and milestone texts keep donors engaged and encourage repeat participation.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Event invites, registration links, and reminders sent via SMS &amp; WhatsApp</li>
              <li><span class="chk-icon">✓</span>Gamified fundraiser updates - leaderboards and milestone texts</li>
              <li><span class="chk-icon">✓</span>Post-event thank-you and impact updates keep supporters engaged long-term</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">72%</div><div class="stat-l">Event sign-up rate</div></div>
              <div><div class="stat-n">+31%</div><div class="stat-l">Repeat donors</div></div>
              <div><div class="stat-n">89%</div><div class="stat-l">Engagement rate</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Event Fundraiser · SMS + WhatsApp + MMS</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Week 1 · MMS invite sent - event poster + registration link</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Day of event · Leaderboard update - "You're #3! Keep going 🏆"</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Milestone · "$10,000 raised!" - celebration text sent to all</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Post-event · Impact update + thank-you - 89% engagement</div>
              </div>
              <div class="uc-mock-foot">✓ 72% sign-up rate · +31% repeat donors vs email-only group</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">72%</div><div class="uc-mock-stat-l">Sign-up rate</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">+31%</div><div class="uc-mock-stat-l">Repeat donors</div></div>
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
        <div style="font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.55);margin-bottom:10px">Nonprofit Teams</div>
        <div style="font-size:clamp(18px,2.5vw,24px);font-weight:800;color:#fff;letter-spacing:-.4px;line-height:1.2;margin-bottom:8px">Ready to boost donor giving?</div>
        <div style="font-size:13px;color:rgba(255,255,255,.7);line-height:1.6">See 360 SMS running inside Salesforce NPSP in a free 20-minute demo.</div>
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
      <p class="sec-sub mx-auto" style="max-width:520px;margin:8px auto 0">Every donor workflow follows the same pattern - trigger, send, respond, log.</p>
    </div>
    <div class="hiw-tabs">
      <button class="hiw-tab-btn active" onclick="hiwGo(0,this)"><i class="bi bi-cash-coin"></i> Text-to-Donate</button>
      <button class="hiw-tab-btn" onclick="hiwGo(1,this)"><i class="bi bi-heart-fill"></i> Donor Re-engagement</button>
      <button class="hiw-tab-btn" onclick="hiwGo(2,this)"><i class="bi bi-megaphone-fill"></i> Mass Campaign</button>
      <button class="hiw-tab-btn" onclick="hiwGo(3,this)"><i class="bi bi-trophy-fill"></i> Event Fundraising</button>
    </div>
    <div class="hiw-slider-wrap px-3 px-md-0">
      <div class="hiw-slider-track">

        <div class="hiw-slide active" id="hiw-0">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-cash-coin"></i></div><div><div class="hiw-slide-title">Text-to-Donate</div><div class="hiw-slide-sub">Keyword-triggered · Salesforce NPSP</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↑ 3× more donations</span><span class="hiw-slide-count">01 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Campaign keyword advertised</div><div class="hiw-step-desc">Donor sees "Text GIVE to 12345" on campaign material</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Donor texts keyword</div><div class="hiw-step-desc">360 SMS receives GIVE - flow triggers instantly in Salesforce</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Donation link sent automatically</div><div class="hiw-step-desc">Personalized with cause, amount options, and secure link</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Thank-you fired · Record updated</div><div class="hiw-step-desc">Confirmation sent - NPSP record updated automatically</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>All interactions auto-logged to Salesforce NPSP · Zero manual entry required</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-0"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-1">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-heart-fill"></i></div><div><div class="hiw-slide-title">Donor Re-engagement</div><div class="hiw-slide-sub">Lapsed donor recovery · Automated from NPSP</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↑ Lapsed donor recovery</span><span class="hiw-slide-count">02 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">6-month donation lapse detected</div><div class="hiw-step-desc">NPSP record triggers re-engagement flow automatically</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Personalized re-engagement text</div><div class="hiw-step-desc">Impact update + cause content tailored to donor profile</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Donor replies INTERESTED</div><div class="hiw-step-desc">Giving sequence resumes - donation link sent immediately</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Record reactivated in NPSP</div><div class="hiw-step-desc">Donor segment updated - ongoing nurture begins</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Lapsed donors recovered automatically · Staff focuses on strategy · NPSP updated</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-1"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-2">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-megaphone-fill"></i></div><div><div class="hiw-slide-title">Mass Campaign</div><div class="hiw-slide-sub">Donor engagement at scale · Salesforce NPSP</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">Donor engagement at scale</span><span class="hiw-slide-count">03 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Donor list from NPSP report</div><div class="hiw-step-desc">No CSV export - built directly from Salesforce segment</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Template with merge fields</div><div class="hiw-step-desc">Name, cause, event details - personalized at scale</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Broadcast sent in minutes</div><div class="hiw-step-desc">Thousands of donors reached - 98% open rate</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">All replies logged automatically</div><div class="hiw-step-desc">Opt-outs handled · responses tracked in NPSP</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Mass campaign sent · Every reply logged · Opt-outs managed · All inside Salesforce</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-2"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-3">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-trophy-fill"></i></div><div><div class="hiw-slide-title">Event Fundraising</div><div class="hiw-slide-sub">MMS invites · Gamification · Post-event follow-up</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↑ Donor participation</span><span class="hiw-slide-count">04 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Event created in Salesforce</div><div class="hiw-step-desc">Campaign record triggers outreach sequence automatically</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">MMS invite sent to donor list</div><div class="hiw-step-desc">Event poster + registration link - visual appeal drives action</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Leaderboard updates during event</div><div class="hiw-step-desc">Gamified milestone texts keep energy and giving high</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Impact update post-event</div><div class="hiw-step-desc">Thank-you + results sent · Donor record updated in NPSP</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Event fully automated · Gamification drives giving · All logged to Salesforce NPSP</span></div>
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
    <div style="display:inline-flex;align-items:center;gap:7px;background:rgba(0,87,184,.18);border:1px solid rgba(0,87,184,.35);border-radius:20px;padding:5px 14px;font-size:10px;font-weight:700;color:rgba(120,170,255,.9);letter-spacing:.07em;text-transform:uppercase;margin-bottom:20px">⚡ AI Use Case · Nonprofits</div>
    <h2 style="font-size:clamp(22px,3vw,32px);font-weight:800;color:#fff;letter-spacing:-1px;line-height:1.15;margin-bottom:12px">AI-Powered Real-Time<br><span style="color:#5B9BD5">Donor Support. 24/7</span></h2>
    <p style="font-size:15px;color:rgba(255,255,255,.48);line-height:1.7;max-width:560px;margin-bottom:36px">High inbound donor query volume overwhelms fundraising teams - especially during campaigns. 360 SMS AI agents handle it all inside Salesforce NPSP: FAQs, donation queries, cause information, appointment scheduling, and urgent escalation - automatically. No staff. No loose ends.</p>
    <div class="row g-3 mb-4">
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-translate fs-4"></i></div><div class="aa-title">AI Language Translation for Outreach</div><div class="aa-desc">AI Language Translation translates nonprofit communication in real time to engage diverse communities, volunteers, and donors across preferred messaging channels.</div><span class="aa-result">Expand supporter communication reach</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-bar-chart-line-fill fs-4"></i></div><div class="aa-title">Conversation Analysis for Donor Insights</div><div class="aa-desc">Analyzes supporter conversations to identify donation intent, engagement levels, campaign feedback, and follow-up opportunities automatically.</div><span class="aa-result">Improve donor retention efforts</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-robot fs-4"></i></div><div class="aa-title">Chatbots for Volunteer Support</div><div class="aa-desc">AI-powered chatbots handle event inquiries, volunteer coordination, donation questions, and campaign support requests through automated workflows.</div><span class="aa-result">Reduce administrative communication workload</span></div></div>
    </div>
    <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:10px;padding:20px 24px;display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap">
      <div>
        <div style="font-size:14px;font-weight:700;color:#fff;margin-bottom:3px">All AI agents run natively inside Salesforce - no external tools, no extra logins.</div>
        <div style="font-size:12px;color:rgba(255,255,255,.4)">Every conversation is auto-logged to the donor record. Data stays in your Salesforce NPSP org.</div>
      </div>
      <a href="<?php echo home_url(); ?>/360sms-for-agentforce/" style="background:var(--sf);color:#fff;border:none;border-radius:7px;padding:11px 22px;font-size:13px;font-weight:700;cursor:pointer;white-space:nowrap;text-decoration:none;display:inline-flex;align-items:center">See AI in action →</a>
    </div>
  </div>
</div>

<!-- PLATFORM & DATA SECURITY -->
<section class="sec">
  <div class="container-xl">
    <div class="row align-items-center g-4 g-lg-5">
      <div class="col-12 col-lg-6">
        <div class="comp-badge"><i class="bi bi-shield-lock-fill"></i> Salesforce NPSP · Native by Design</div>
        <div class="lbl">Platform &amp; Data Security</div>
        <h2 class="sec-h">Built inside Salesforce -<br>no middleware, no risk</h2>
        <p class="sec-sub mb-0">360 SMS is architected so donor data <strong>never touches our servers</strong>. Everything runs inside your own Salesforce NPSP org - the platform your fundraising team already trusts. No third-party sync, no CSV exports, no data leaving your control.</p>
        <div class="comp-pts">
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-database-fill-slash"></i></div><div><div class="comp-th">Zero external data storage</div><div class="comp-tp">All donor data hosted on your Salesforce NPSP instance - 360 SMS never stores donor information on its own servers.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-lock-fill"></i></div><div><div class="comp-th">TLS-encrypted API callouts</div><div class="comp-tp">Every callout from Salesforce to messaging providers is TLS-encrypted, protecting donor data in transit end-to-end.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-shield-fill-check"></i></div><div><div class="comp-th">HTTP Basic &amp; Digest Authentication</div><div class="comp-tp">360 SMS supports HTTP Basic and Digest Auth to protect every API request from unauthorized access.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-check-circle-fill"></i></div><div><div class="comp-th">Double Opt-In &amp; Opt-Out consent management</div><div class="comp-tp">Use the 360 SMS Opt-In addon to capture consent and initiate conversations - essential for any compliant texting platform for nonprofits.</div></div></div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="comp-visual">
          <div style="font-size:12px;font-weight:700;color:var(--ink);margin-bottom:3px">Salesforce NPSP Native Architecture</div>
          <div style="font-size:11px;color:var(--ink3);margin-bottom:12px">How donor data stays protected end-to-end</div>
          <div class="hck-row"><div class="hck">✓</div> Donor data stored in your Salesforce NPSP org only</div>
          <div class="hck-row"><div class="hck">✓</div> TLS-encrypted callouts - data protected in transit</div>
          <div class="hck-row"><div class="hck">✓</div> No donor data stored on 360 SMS servers - ever</div>
          <div class="hck-row"><div class="hck">✓</div> HTTP Basic + Digest Auth on all API requests</div>
          <div class="hck-row"><div class="hck">✓</div> Double Opt-In / Opt-Out consent flows built in</div>
          <div class="hck-row"><div class="hck">✓</div> All conversations auto-logged to donor record</div>
          <div style="background:var(--sf);border-radius:8px;padding:12px 14px;margin-top:4px">
            <div style="font-size:12px;font-weight:700;color:#fff;margin-bottom:3px">Salesforce NPSP Compliance</div>
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