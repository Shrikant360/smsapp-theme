<?php
/*
Template Name:Industry Marketing
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
      <span style="color:var(--ink);font-weight:600">Marketing</span>
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
          Salesforce Native · 15+ Channel Campaigns · Limitless Bulk Messaging
        </div>
        <h1>Drive More Engagement and Leads<br>Faster with <em>SMS Marketing</em></h1>
        <p class="hero-sub">Reach every prospect faster across 15+ channels with AI-powered Salesforce SMS marketing that automates campaigns, captures leads, and tracks every click.</p>
        <div class="d-flex gap-3 flex-wrap mb-3">
          <a class="open-popup-form-on-click btn-primary-cta">Speak to a Professional</a>
          <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" target="_blank" class="btn-outline-cta">Get the App →</a>
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
            <div class="hero-ui-url">360 SMS - Campaign Inbox · Salesforce Marketing</div>
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
                <div style="font-size:13px;font-weight:700;color:var(--ink)">Sophie Anderson - Lead #L-7342</div>
                <div style="font-size:10px;color:var(--ink4)">via Salesforce Marketing · GrowthBrand Campaign</div>
              </div>
              <div class="flex-grow-1 d-flex flex-column gap-2 p-3" style="overflow:hidden">
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Sophie - text DEMO to get early access + a personalized walkthrough. Reply DEMO now 🚀</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start" style="max-width:75%">
                  <div class="bubble-in">DEMO</div>
                  <div class="msg-meta">Sophie · 9:03 AM</div>
                </div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Great - your demo is booked for Thu 2pm. Here's the link: gb.co/demo/7342 🎯</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:6px;padding:6px 10px;font-size:10px;font-weight:700;color:#0057B8">✓ Lead #L-7342 created · Rep notified · Chatbot qualified · All in Salesforce</div>
              </div>
              <div style="border-top:1px solid #eee;padding:9px 12px;display:flex;align-items:center;gap:7px">
                <span style="font-size:15px;color:var(--ink3)"><i class="bi bi-paperclip"></i></span>
                <div style="flex:1;background:#F7F7F5;border:1px solid #eee;border-radius:6px;padding:7px 10px;font-size:11px;color:var(--ink4)">Type a message...</div>
                <div style="padding:6px 11px;background:#F7F7F5;border:1px solid #ddd;border-radius:5px;font-size:11px;font-weight:600;color:var(--ink2)">Template</div>
              </div>
              <div style="background:#F7F7F5;border-top:1px solid #eee;padding:5px 12px;display:flex;align-items:center;justify-content:space-between">
                <span style="font-size:9px;color:var(--ink4)">Auto-logged · UTM tracked · 15+ channels active</span>
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
      <div class="proof-item"><span class="proof-n">55%</span><span class="proof-l ms-2">Higher Campaign<br>Response Rates</span></div>
      <div class="proof-item"><span class="proof-n">37%</span><span class="proof-l ms-2">More Lead<br>Conversions</span></div>
      <div class="proof-item"><span class="proof-n">75%</span><span class="proof-l ms-2">Faster<br>Lead-to-Pipeline</span></div>
      <div class="proof-item"><span class="proof-n">98%</span><span class="proof-l ms-2">SMS<br>Open Rate</span></div>
      <div class="proof-item"><span class="proof-n">1,200+</span><span class="proof-l ms-2">Verified<br>Reviews</span></div>
      <div class="proof-item">
        <span style="background:var(--sf-l);color:var(--sf);font-size:11px;font-weight:700;padding:4px 10px;border-radius:4px;line-height:1.5;white-space:nowrap">AgentExchange · #1 Rated</span>
      </div>
    </div>
  </div>
</div>

<!-- MARKETING USE CASES -->
<section class="sec sec-alt" id="use-cases">
  <div class="container-xl">
    <div class="text-center mb-4">
      <div class="lbl d-flex justify-content-center">Why marketing teams choose 360 SMS</div>
      <h2 class="sec-h mx-auto" style="max-width:640px">Powerful Tools Second to None<br class="d-none d-md-block">for Every Campaign Type</h2>
      <p class="sec-sub mx-auto" style="max-width:600px">Point-and-click chatbot builder. Campaign automation over 15+ channels. Marketing preference management. Limitless bulk messaging. Branded shortcodes, keywords, Sender IDs. All natively inside Salesforce. Click a use case to see it in action.</p>
    </div>

    <!-- Tab pills -->
    <div class="d-flex gap-2 flex-wrap justify-content-center mb-4">
      <button onclick="switchUC(0)" class="uc-tab-btn active"><i class="bi bi-megaphone-fill"></i> Bulk Messaging &amp; MMS</button>
      <button onclick="switchUC(1)" class="uc-tab-btn"><i class="bi bi-key-fill"></i> Keyword Lead Capture</button>
      <button onclick="switchUC(2)" class="uc-tab-btn"><i class="bi bi-robot"></i> Chatbot Campaigns</button>
      <button onclick="switchUC(3)" class="uc-tab-btn"><i class="bi bi-person-lines-fill"></i> Personalization &amp; Merge Fields</button>
      <button onclick="switchUC(4)" class="uc-tab-btn"><i class="bi bi-bar-chart-fill"></i> UTM Tracking &amp; Attribution</button>
      <button onclick="switchUC(5)" class="uc-tab-btn"><i class="bi bi-arrow-repeat"></i> Re-targeting &amp; Drip</button>
    </div>

    <div style="background:#fff;border:1px solid var(--bdr);border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.07)">

      <!-- PANEL 0: Client Intake & Preliminary Evaluation -->
      <div class="uc-panel active" id="uc-panel-0">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-megaphone-fill"></i> Bulk Messaging &amp; MMS</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Grow with bulk text - start more conversations, expand brand presence</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Limitless bulk messaging broadcasts to any Salesforce segment. Meet prospects where they are - automate messages across 15+ channels to speak to customers from the same app, take the conversation to them.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Limitless bulk SMS and MMS from any Salesforce segment - no CSV exports</li>
              <li><span class="chk-icon">✓</span>15+ channels - SMS, WhatsApp, MMS, voice, short codes, VoIP, toll-free - one app</li>
              <li><span class="chk-icon">✓</span>Branded shortcodes, keywords, and Sender IDs - every message builds recognition</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">98%</div><div class="stat-l">Open rate</div></div>
              <div><div class="stat-n">∞</div><div class="stat-l">Volume</div></div>
              <div><div class="stat-n">15+</div><div class="stat-l">Channels</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Bulk Campaign · Salesforce Segment · All Channels</span><span class="uc-mock-badge">Live</span></div>
              <div class="uc-mock-body" style="background:#F9FBFF">
                <div style="font-size:9px;font-weight:700;color:var(--ink4);text-transform:uppercase;letter-spacing:.07em;text-align:center;margin-bottom:4px">Bulk Send → Replies Captured → Leads Created · Automated</div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Sophie - text DEMO to get early access + a personalized walkthrough. Reply DEMO now 🚀</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:65%">
                  <div class="bubble-in">DEMO</div>
                  <div class="msg-meta">Sophie · 9:08 AM</div>
                </div>
                <div class="align-self-end mt-1" style="max-width:88%">
                  <div class="bubble-out">Great - your demo is booked for Thu 2pm. Here's the link: gb.co/demo/7342 🎯</div>
                  <div class="msg-meta text-end">9:08 AM · Auto-logged ✓</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ 98% open rate · Leads captured instantly · Rep notified · All in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">98%</div><div class="uc-mock-stat-l">Open rate</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">∞</div><div class="uc-mock-stat-l">Volume</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">15+</div><div class="uc-mock-stat-l">Channels</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 1: Keyword Lead Capture -->
      <div class="uc-panel" id="uc-panel-1">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-key-fill"></i> Keyword Lead Capture</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Advertise keywords - capture leads the moment they show intent</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Capture customer information through keyword responses. Segment audiences using campaign-specific keywords across channels. Pair keywords with memorable short or shared codes. Use custom branded URLs customers recognize and trust.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Keyword reply → Salesforce lead created instantly - zero manual entry</li>
              <li><span class="chk-icon">✓</span>Different keywords per channel - segment traffic at source automatically</li>
              <li><span class="chk-icon">✓</span>Advertise keywords across ads, OOH, social - every reply measurable</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">Instant</div><div class="stat-l">Lead capture</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual entry</div></div>
              <div><div class="stat-n">100%</div><div class="stat-l">Measurable</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Keyword Lead Capture · All Channels · Salesforce</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-key-fill"></i> Prospect texts DEMO - Salesforce lead created instantly · zero manual entry</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-person-plus-fill me-1"></i> Lead record created · channel, source, keyword all logged to Salesforce</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Created ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-link-45deg me-1"></i> Branded URL sent · gb.co/demo/7342 · click tracked per lead in Salesforce</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Tracked ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-bell-fill me-1"></i> Rep notified · lead briefed · chatbot continues qualification 24/7</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Routed ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ Lead captured instantly · 0 manual entry · 100% measurable · All in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">Instant</div><div class="uc-mock-stat-l">Lead capture</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual entry</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">100%</div><div class="uc-mock-stat-l">Measurable</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 2: Chatbot Campaigns -->
      <div class="uc-panel" id="uc-panel-2">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-robot"></i> Chatbot Campaigns</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Configure chatbots fast - carry conversations from incoming traffic and responses</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Build chatbots to carry forward conversations from incoming traffic and responses. Alert teams, assign leads - reduce admin busywork, assign responses to record owners automatically.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Point-and-click chatbot builder - no developer, no delay, no code</li>
              <li><span class="chk-icon">✓</span>Keyword-driven decision trees - qualify and route leads automatically 24/7</li>
              <li><span class="chk-icon">✓</span>Update lead progress - track funnel stage and trigger relevant campaigns</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">24/7</div><div class="stat-l">Always on</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Code needed</div></div>
              <div><div class="stat-n">∞</div><div class="stat-l">Conversations</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Chatbot Campaign · Qualify &amp; Route · Salesforce</span><span class="uc-mock-badge">Active</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-robot"></i> Lead replies DEMO - chatbot activates · decision tree qualification starts</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-diagram-3-fill me-1"></i> "Company size?" → Enterprise → routed to AE · SMB → routed to SDR</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Qualified ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-person-fill-up me-1"></i> Lead scored · rep assigned · originator number set · rep alerted instantly</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Routed ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-funnel-fill me-1"></i> Funnel stage updated · next campaign triggered · full history in Salesforce</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Tracked ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ 24/7 qualification · Zero code · Leads routed to right rep · All in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">24/7</div><div class="uc-mock-stat-l">Always on</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Code needed</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">∞</div><div class="uc-mock-stat-l">Conversations</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 3: Personalization & Merge Fields -->
      <div class="uc-panel" id="uc-panel-3">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-person-lines-fill"></i> Personalization &amp; Merge Fields</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Right message, right audience, right timing - at unlimited scale</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Use merge fields for SMS in Salesforce marketing and trigger campaigns relevant to customer interactions. A loyal customer gets different messaging than a prospect. SMS is the channel fast enough to deliver it when it's relevant.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Merge fields from any Salesforce field - name, company, product, tier, stage</li>
              <li><span class="chk-icon">✓</span>Marketing preference management - customers choose their channel</li>
              <li><span class="chk-icon">✓</span>Segment by demographics, behavior, purchase patterns - direct in Salesforce</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">3×</div><div class="stat-l">Engagement lift</div></div>
              <div><div class="stat-n">Any</div><div class="stat-l">SF field usable</div></div>
              <div><div class="stat-n">∞</div><div class="stat-l">Scale</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#0a1e48 0%,#0d2d6b 100%)">
            <div class="uc-mock" style="background:#0a1e48;border:1px solid rgba(255,255,255,.1)">
              <div style="background:rgba(0,87,184,.25);border-bottom:1px solid rgba(255,255,255,.1);padding:12px 16px;display:flex;align-items:center;justify-content:space-between">
                <span style="font-size:11px;font-weight:700;color:rgba(255,255,255,.9)">Personalization &amp; Merge Fields · Salesforce Marketing</span>
                <span style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);background:rgba(0,87,184,.2);border:1px solid rgba(0,87,184,.3);border-radius:20px;padding:2px 9px;display:flex;align-items:center;gap:4px"><span style="width:5px;height:5px;border-radius:50%;background:#5B9EF5;display:inline-block;animation:pulse 2s infinite"></span> Running</span>
              </div>
              <div style="padding:14px;display:flex;flex-direction:column;gap:8px">
                <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:7px;padding:10px 12px">
                  <div style="font-size:9px;font-weight:700;color:rgba(91,158,245,.9);text-transform:uppercase;letter-spacing:.06em;margin-bottom:6px">🎯 PERSONALIZED CAMPAIGN - GROWTHBRAND</div>
                  <div style="font-size:11px;color:rgba(255,255,255,.8);line-height:1.6">"Hi Sophie - as an Enterprise client, you're first in line for our Q3 launch. Here's your exclusive access: gb.co/enterprise/q3 🚀"<br><br>→ SMB version: "Hi Marcus - early bird access live now: gb.co/smb/q3"</div>
                  <div style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);margin-top:8px">✓ 3× engagement lift · Any SF field · Unlimited scale</div>
                </div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> Enterprise vs SMB vs prospect - different message, same campaign</div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> Marketing preference management - channel choice logged to Salesforce</div>
              </div>
              <div style="display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid rgba(255,255,255,.1)">
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">3×</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Engagement lift</div></div>
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">Any</div><div style="font-size:9px;color:rgba(255,255,255,.4)">SF field usable</div></div>
                <div style="padding:10px;text-align:center"><div style="font-size:16px;font-weight:800;color:#fff">∞</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Scale</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 4: UTM Tracking & Attribution -->
      <div class="uc-panel" id="uc-panel-4">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-bar-chart-fill"></i> UTM Tracking &amp; Attribution</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Guide traffic effectively - see exactly what works</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Track all conversations - use keyword processing and URL click-throughs to see which campaigns get the most response. Use UTM trackers to see which device, location, channel, and content a lead came from.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>UTM parameters - device, location, channel, content, campaign all tracked</li>
              <li><span class="chk-icon">✓</span>Branded shortened URLs - click-throughs visible per lead in Salesforce</li>
              <li><span class="chk-icon">✓</span>Marketing Cloud integration - conversions work when sales teams have data</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">100%</div><div class="stat-l">Attribution</div></div>
              <div><div class="stat-n">Real-time</div><div class="stat-l">Click data</div></div>
              <div><div class="stat-n">All</div><div class="stat-l">Platforms synced</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>UTM Tracking &amp; Attribution · Salesforce</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> UTM appended: utm_source=sms&utm_medium=campaign&utm_content=earlybird</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Sophie clicks gb.co/earlybird · device: mobile · location: Chicago · all logged</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Keyword processing: DEMO keyword 3× more response than INFO - visible in real time</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Data synced to Marketing Cloud · packaged for sales · conversion attributed</div>
              </div>
              <div class="uc-mock-foot">✓ 100% attribution · Real-time click data · All platforms synced · All in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">100%</div><div class="uc-mock-stat-l">Attribution</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">Real-time</div><div class="uc-mock-stat-l">Click data</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">All</div><div class="uc-mock-stat-l">Platforms synced</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 5: Re-targeting & Drip -->
      <div class="uc-panel" id="uc-panel-5">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-megaphone-fill"></i> Proactive Customer Outreach</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Re-target to retain - ensure you're on their mind when they buy</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Trigger the right message at the right moment. Remind customers of your relationship by wishing them on life events, sending feedback surveys. Keep campaigns relevant by tracking what stage of the funnel a lead or prospect is in.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Year-round drip campaigns - millions followed up simultaneously</li>
              <li><span class="chk-icon">✓</span>Life event triggers - birthday, anniversary, renewal - personalized at scale</li>
              <li><span class="chk-icon">✓</span>Funnel-stage triggers - message changes as lead progresses through pipeline</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">+38%</div><div class="stat-l">Retention</div></div>
              <div><div class="stat-n">∞</div><div class="stat-l">Prospects at once</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Missed follow-ups</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Re-targeting &amp; Drip · Funnel Stage · Salesforce</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Drip configured: funnel stage changes → message changes automatically</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> "Happy Birthday Sophie 🎂 - here's an exclusive offer just for you: gb.co/bday"</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Prospect engages → Salesforce stage updated · rep alerted · deal created</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Conversion attributed to campaign · data pushed to sales · retention +38%</div>
              </div>
              <div class="uc-mock-foot">✓ Retention +38% · Zero missed follow-ups · Always top-of-mind · All in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">+38%</div><div class="uc-mock-stat-l">Retention</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">∞</div><div class="uc-mock-stat-l">Prospects</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Missed follow-ups</div></div>
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
        <div style="font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.55);margin-bottom:10px">Marketing Teams</div>
        <div style="font-size:clamp(18px,2.5vw,24px);font-weight:800;color:#fff;letter-spacing:-.4px;line-height:1.2;margin-bottom:8px">See more traction and responses for your brand?</div>
        <div style="font-size:13px;color:rgba(255,255,255,.7);line-height:1.6">See 360 SMS running inside Salesforce for marketing in a free 20-minute demo.</div>
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
      <p class="sec-sub mx-auto" style="max-width:520px;margin:8px auto 0">Broadcast · Capture · Qualify · Nurture · Convert - every campaign follows the same automated pattern.</p>
    </div>
    <div class="hiw-tabs">
      <button class="hiw-tab-btn active" onclick="hiwGo(0,this)"><i class="bi bi-megaphone-fill"></i> Broadcast &amp; Capture</button>
      <button class="hiw-tab-btn" onclick="hiwGo(1,this)"><i class="bi bi-robot"></i> Qualify &amp; Route</button>
      <button class="hiw-tab-btn" onclick="hiwGo(2,this)"><i class="bi bi-bar-chart-fill"></i> Track &amp; Attribute</button>
      <button class="hiw-tab-btn" onclick="hiwGo(3,this)"><i class="bi bi-arrow-repeat"></i> Nurture &amp; Convert</button>
    </div>
    <div class="hiw-slider-wrap px-3 px-md-0">
      <div class="hiw-slider-track">

        <div class="hiw-slide active" id="hiw-0">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-megaphone-fill"></i></div><div><div class="hiw-slide-title">Broadcast &amp; Capture</div><div class="hiw-slide-sub">Segment · Bulk send · Merge fields · Keyword reply · Lead created · Salesforce</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">98% open rate</span><span class="hiw-slide-count">01 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Segment created in Salesforce</div><div class="hiw-step-desc">Any Salesforce list becomes a campaign audience - no CSV export needed</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Bulk SMS or MMS sent</div><div class="hiw-step-desc">Merge fields personalize every message at limitless scale instantly</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Keyword or link reply captured</div><div class="hiw-step-desc">DEMO, INFO, EARLYBIRD - response triggers Salesforce action automatically</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Lead record created</div><div class="hiw-step-desc">Salesforce lead updated · rep notified · chatbot qualifies further</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Millions reached · 98% open rate · Leads captured with zero manual entry · All in Salesforce</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-0"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-1">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-robot"></i></div><div><div class="hiw-slide-title">Qualify &amp; Route</div><div class="hiw-slide-sub">Keyword reply · Decision tree · Lead scored · Rep assigned · Salesforce</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">Leads qualified 24/7</span><span class="hiw-slide-count">02 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Keyword reply received</div><div class="hiw-step-desc">Chatbot takes over · decision tree starts qualification automatically</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Profile captured via SMS</div><div class="hiw-step-desc">Company size, intent, budget - keyword-driven, no forms needed</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Lead scored and routed</div><div class="hiw-step-desc">Enterprise → AE · SMB → SDR · originator number assigned</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Rep alerted · Briefed · Ready</div><div class="hiw-step-desc">Full SMS history in Salesforce · no cold outreach ever</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Every inbound reply qualified · Right rep gets right lead · Marketing feeds sales with clean data</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-1"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-2">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-bar-chart-fill"></i></div><div><div class="hiw-slide-title">Track &amp; Attribute</div><div class="hiw-slide-sub">UTM tracking · Click-throughs · Keyword processing · Marketing Cloud sync · Salesforce</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">100% attribution</span><span class="hiw-slide-count">03 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">UTM parameters appended</div><div class="hiw-step-desc">Source, medium, channel, content, campaign - all tracked from send</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Click-throughs tracked</div><div class="hiw-step-desc">Device, location, channel visible per lead record in Salesforce</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Keyword processing runs</div><div class="hiw-step-desc">Which campaign gets most response - visible in Salesforce in real time</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Data synced to Marketing Cloud</div><div class="hiw-step-desc">Same data across all platforms · packaged data sales teams pounce on</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Every click attributed · Every campaign measured · Data packaged for sales · All in Salesforce</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-2"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-3">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-arrow-repeat"></i></div><div><div class="hiw-slide-title">Nurture &amp; Convert</div><div class="hiw-slide-sub">Drip sequence · Life events · Stage triggers · Conversion tracked · Salesforce</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">Retention +38%</span><span class="hiw-slide-count">04 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Drip sequence configured</div><div class="hiw-step-desc">Year-round outreach · triggers by date, stage, or behaviour in Salesforce</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Life event or stage change</div><div class="hiw-step-desc">Birthday, renewal, upgrade - personalized text fires automatically</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Prospect engages</div><div class="hiw-step-desc">Salesforce stage updated · rep alerted · deal created automatically</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Conversion tracked &amp; shared</div><div class="hiw-step-desc">Usable data pushed to sales · conversion attributed to campaign</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>No one falls through the cracks · Always top-of-mind when they buy · Retention +38%</span></div>
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
    <div style="display:inline-flex;align-items:center;gap:7px;background:rgba(0,87,184,.18);border:1px solid rgba(0,87,184,.35);border-radius:20px;padding:5px 14px;font-size:10px;font-weight:700;color:rgba(120,170,255,.9);letter-spacing:.07em;text-transform:uppercase;margin-bottom:20px">⚡ AI Use Case · Marketing</div>
    <h2 style="font-size:clamp(22px,3vw,32px);font-weight:800;color:#fff;letter-spacing:-1px;line-height:1.15;margin-bottom:12px">AI-Powered Campaign Automation at Scale.<br><span style="color:#5B9BD5">24/7</span></h2>
    <p style="font-size:15px;color:rgba(255,255,255,.48);line-height:1.7;max-width:560px;margin-bottom:36px">Marketing teams shouldn't be hand-delivering campaigns one by one. 360 SMS AI agents run bulk broadcasts, chatbot qualification, funnel-stage drips, and retargeting sequences - automatically inside Salesforce. Initiate and personalize more. Get more leads in the pipeline. Cast a wider, faster net than your competition.</p>
    <div class="row g-3 mb-4">
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-chat-left-text-fill fs-4"></i></div><div class="aa-title">AI-Based Drip Campaigns</div><div class="aa-desc">AI-Based Drip Suggestions analyze audience engagement, click behavior, and response trends to recommend optimized multichannel campaign sequences and follow-up campaigns automatically.</div><span class="aa-result">Increase campaign conversion rates</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-translate fs-4"></i></div><div class="aa-title">Template Quality Score &amp; Rephrase Content</div><div class="aa-desc">Template Quality Score and AI Rephrase &amp; Polish Content improve promotional messaging for readability, engagement potential, tone, and compliance before campaign launch.</div><span class="aa-result">Improve messaging campaign performance</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-magic fs-4"></i></div><div class="aa-title">AI-Powered One-on-One Conversations</div><div class="aa-desc">AI-Powered One-on-One Conversation generates contextual response suggestions during live customer interactions to maintain faster and more personalized engagement across channels.</div><span class="aa-result">Boost customer interaction quality</span></div></div>
    </div>
    <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:10px;padding:20px 24px;display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap">
      <div>
        <div style="font-size:14px;font-weight:700;color:#fff;margin-bottom:3px">All campaign automation runs natively inside Salesforce - no external tools, no extra logins.</div>
        <div style="font-size:12px;color:rgba(255,255,255,.4)">Every lead, every reply, every click-through is logged to the Salesforce record. Your data stays in your org.</div>
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
        <div class="comp-badge"><i class="bi bi-shield-lock-fill"></i> Salesforce Native · Marketing Cloud · 15+ Channels</div>
        <div class="lbl">Platform &amp; Traffic Attribution</div>
        <h2 class="sec-h">Guide traffic effectively -<br>segment in a snap, reach wider audiences</h2>
        <p class="sec-sub mb-0">Segment traffic and calls in a snap. Reach wider audiences to increase effectiveness. Advertise keywords. Traceback click-throughs. Use branded numbers. Broadcast trusted URLs. Integrates to Marketing Cloud easily - get the same SMS data across all platforms.</p>
        <div class="comp-pts">
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-key-fill"></i></div><div><div class="comp-th">Advertise keywords across channels</div><div class="comp-tp">Segment traffic by advertising different campaign keywords across channels. Each keyword is a measurable, attributable lead source - straight into Salesforce automatically.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-bar-chart-fill"></i></div><div><div class="comp-th">Traceback click-throughs with UTM</div><div class="comp-tp">Use UTM trackers to see which device, location, channel, and content a lead came from. Every click attributed. Every campaign measured. Every decision data-driven.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-phone-fill"></i></div><div><div class="comp-th">Use branded numbers and trusted URLs</div><div class="comp-tp">Pair advertised keywords with memorable short codes for results. Receive traffic on custom domain URLs that customers are familiar with - trust drives clicks and conversions.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-sliders"></i></div><div><div class="comp-th">Marketing preference management</div><div class="comp-tp">Let customers choose their preferred channel. Double Opt-In and Opt-Out consent built in. Every preference logged to Salesforce. Compliant at any scale, on any channel.</div></div></div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="comp-visual">
          <div style="font-size:12px;font-weight:700;color:var(--ink);margin-bottom:3px">Salesforce-Native Marketing Platform</div>
          <div style="font-size:11px;color:var(--ink3);margin-bottom:12px">The complete marketing SMS stack</div>
          <div class="hck-row"><div class="hck">✓</div> All campaign data stays inside Salesforce CRM only</div>
          <div class="hck-row"><div class="hck">✓</div> 15+ channels · SMS, WhatsApp, MMS, voice · one app</div>
          <div class="hck-row"><div class="hck">✓</div> Limitless bulk messaging · branded shortcodes &amp; Sender IDs</div>
          <div class="hck-row"><div class="hck">✓</div> Keyword advertising · UTM tracking · URL click-throughs</div>
          <div class="hck-row"><div class="hck">✓</div> Marketing Cloud integration · same data everywhere</div>
          <div class="hck-row"><div class="hck">✓</div> Marketing preference management · compliant at scale</div>
          <div style="background:var(--sf);border-radius:8px;padding:12px 14px;margin-top:4px">
            <div style="font-size:12px;font-weight:700;color:#fff;margin-bottom:3px">Conversions Work When Sales Teams Have Data They Can Use</div>
            <div style="font-size:11px;color:rgba(255,255,255,.7)">Get the same SMS data across all platforms. Completely packaged and usable data that sales teams will pounce on.</div>
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