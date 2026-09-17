<?php
/*
Template Name:Industry Mortgage
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
      <span style="color:var(--ink);font-weight:600">Mortgage</span>
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
          Salesforce Native · Mortgage SMS · Borrower Texting
        </div>
        <h1>Close More Loans and Drive<br>Repeat Business with<br><em>SMS for Mortgage</em></h1>
        <p class="hero-sub">Automate speed-to-lead responses, loan status updates, and post-closure drip campaigns with well-timed <strong>mortgage SMS messages using Salesforce</strong> - no code. No middleware.</p>
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
            <div class="hero-ui-url">360 SMS - Borrower Inbox · Salesforce CRM for Mortgage</div>
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
              <div style="padding:10px 12px;border-bottom:1px solid #eee;font-size:11px;font-weight:700;color:var(--ink)">Borrower Conversations</div>
              <div class="conv-item act border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Bradley Brondt</span><span style="font-size:10px;color:var(--ink4)">9:03 AM</span></div>
                <div class="conv-prev hl">Great - what's my rate? 🏠</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Julie Aragon</span><span style="font-size:10px;color:var(--ink4)">8:44 AM</span></div>
                <div class="conv-prev dim">Docs uploaded ✓</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px">💚 WhatsApp</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Scottie Campbell</span><span style="font-size:10px;color:var(--ink4)">Tue</span></div>
                <div class="conv-prev dim">What's my loan status?</div>
                <div class="d-flex align-items-center justify-content-between">
                  <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px"><i class="bi bi-robot"></i> AI Bot</div>
                  <span style="background:#0057B8;color:#fff;font-size:9px;font-weight:700;width:15px;height:15px;border-radius:50%;display:flex;align-items:center;justify-content:center">1</span>
                </div>
              </div>
              <div class="conv-item">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Leon Belov</span><span style="font-size:10px;color:var(--ink4)">Mon</span></div>
                <div class="conv-prev dim">Loan funded - congrats! 🎉</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
            </div>
            <!-- Chat panel -->
            <div class="d-flex flex-column flex-grow-1" style="background:#fff;min-width:0">
              <div style="padding:10px 14px;border-bottom:1px solid #eee">
                <div style="font-size:13px;font-weight:700;color:var(--ink)">Bradley Brondt - Borrower</div>
                <div style="font-size:10px;color:var(--ink4)">via Salesforce CRM · Acre Mortgage</div>
              </div>
              <div class="flex-grow-1 d-flex flex-column gap-2 p-3" style="overflow:hidden">
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Bradley - I'm Sarah at Acre Mortgage. I saw you're looking at a 30-year fixed in Austin. I'd love to help - what's the best time for a quick call? 🏠</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start" style="max-width:75%">
                  <div class="bubble-in">Great - what's my rate? 🏠</div>
                  <div class="msg-meta">Bradley · 9:03 AM</div>
                </div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Based on your profile, you're looking at around 6.8% - let me run a full pre-qual and send your personalized options. Reply INFO to start!</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:6px;padding:6px 10px;font-size:10px;font-weight:700;color:#0057B8">✓ Lead qualified · LO briefed · Loan record updated in Salesforce</div>
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
      <div class="proof-item"><span class="proof-n">35%</span><span class="proof-l ms-2">Fewer Application<br>Drop-Offs</span></div>
      <div class="proof-item"><span class="proof-n">55%</span><span class="proof-l ms-2">Faster Document<br>Collection</span></div>
      <div class="proof-item"><span class="proof-n">38%</span><span class="proof-l ms-2">More Repeat<br>Business</span></div>
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
      <div class="lbl d-flex justify-content-center">Why mortgage teams choose 360 SMS</div>
      <h2 class="sec-h mx-auto" style="max-width:640px">How 360 SMS Solves Every<br class="d-none d-md-block">Mortgage Communication Need</h2>
      <p class="sec-sub mx-auto" style="max-width:600px">Every use case runs natively inside Salesforce - from speed-to-lead to post-closure drip. Click a use case to see it in action.</p>
    </div>

    <!-- Tab pills -->
    <div class="d-flex gap-2 flex-wrap justify-content-center mb-4">
      <button onclick="switchUC(0)" class="uc-tab-btn active"><i class="bi bi-lightning-charge-fill"></i> Speed-to-Lead</button>
      <button onclick="switchUC(1)" class="uc-tab-btn"><i class="bi bi-clipboard-fill"></i> Loan Status Updates</button>
      <button onclick="switchUC(2)" class="uc-tab-btn"><i class="bi bi-file-earmark-text-fill"></i> Document Collection</button>
      <button onclick="switchUC(3)" class="uc-tab-btn"><i class="bi bi-robot"></i> Chatbot Qualification</button>
      <button onclick="switchUC(4)" class="uc-tab-btn"><i class="bi bi-bullseye"></i> Post-Closure Drip</button>
      <button onclick="switchUC(5)" class="uc-tab-btn"><i class="bi bi-people-fill"></i> Stakeholder Updates</button>
    </div>

    <div style="background:#fff;border:1px solid var(--bdr);border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.07)">

      <!-- PANEL 0: Speed-to-Lead -->
      <div class="uc-panel active" id="uc-panel-0">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-lightning-charge-fill"></i> Speed-to-Lead</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Catch homebuyers early - get on a first-name basis within 2–3 minutes</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">A personalized message within 2–3 minutes of a lead filling out a form helps you reach them before they forget your brand. Use merge fields and templates to send tailored introductions - essential for effective mortgage texting.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Instant personalized intro fires the moment lead record is created in Salesforce</li>
              <li><span class="chk-icon">✓</span>Merge fields use lead data - name, loan type, area - to personalize at scale</li>
              <li><span class="chk-icon">✓</span>Single branded Sender ID - get on a first-name basis before competitors respond</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">2–3 min</div><div class="stat-l">Response window</div></div>
              <div><div class="stat-n">50%</div><div class="stat-l">First-responder wins</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual outreach</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Speed-to-Lead · Salesforce CRM Flow</span><span class="uc-mock-badge">Live</span></div>
              <div class="uc-mock-body" style="background:#F9FBFF">
                <div style="font-size:9px;font-weight:700;color:var(--ink4);text-transform:uppercase;letter-spacing:.07em;text-align:center;margin-bottom:4px">Borrower Conversation · SMS · &lt;3 Minutes</div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Bradley - I'm Sarah at Acre Mortgage. I saw you're looking at a 30-year fixed in Austin. I'd love to help - what's the best time for a quick call? 🏠</div>
                  <div class="msg-meta text-end">360 SMS · 9:01 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:65%">
                  <div class="bubble-in">Great - what's my rate?</div>
                  <div class="msg-meta">Bradley · 9:03 AM</div>
                </div>
                <div class="align-self-end mt-1" style="max-width:88%">
                  <div class="bubble-out">Based on your profile, you're looking at ~6.8%. Let me run a full pre-qual and send your personalized options!</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ On first-name basis in &lt;3 min · Lead qualified · LO notified in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">2–3 min</div><div class="uc-mock-stat-l">Response</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">50%</div><div class="uc-mock-stat-l">First responder wins</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual outreach</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 1: Loan Status Updates -->
      <div class="uc-panel" id="uc-panel-1">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-clipboard-fill"></i> Loan Status Updates</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Eliminate phone tag - automate borrower loan update messages at every stage</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Automate loan updates, missing document reminders, and application status messages from a single branded Sender ID. Track every milestone and keep mortgage applications moving without missing opportunities.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Loan stage update texts fire automatically from Salesforce - no manual effort</li>
              <li><span class="chk-icon">✓</span>Single branded Sender ID - all comms from one consistent number</li>
              <li><span class="chk-icon">✓</span>Pick up loan conversations where you left off - full history visible to LO</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">3×</div><div class="stat-l">Faster processing</div></div>
              <div><div class="stat-n">↓70%</div><div class="stat-l">Phone tag</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual updates</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Loan Status Updates · Salesforce CRM</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Application received · Welcome text + checklist sent</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> UW Submission · "Your file is with underwriting - est. 48h"</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Conditional Approval · Conditions list sent with doc links</div>
                <div class="uc-mock-row" style="background:#E8F0FB;border-color:#CCE0F7"><div class="uc-mock-dot">!</div> Clear to Close · Congrats text sent · All stakeholders notified</div>
              </div>
              <div class="uc-mock-foot">✓ Every stage auto-communicated · Phone tag eliminated · Full history in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">3×</div><div class="uc-mock-stat-l">Faster processing</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓70%</div><div class="uc-mock-stat-l">Phone tag</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual updates</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 2: Document Collection -->
      <div class="uc-panel" id="uc-panel-2">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-file-earmark-text-fill"></i> Document Collection</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Process applications faster - custom shortened URLs borrowers trust and use</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Use trusted branded short URLs for documents, e-signing, and mortgage payment reminders. Share secure custom domain links, send and receive borrower documentation, redirect to payment gateways, and track link opens easily.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Custom branded short URLs for document upload, e-signing, and payments</li>
              <li><span class="chk-icon">✓</span>Link tracking shows who opened the URL - LO knows exactly who to call</li>
              <li><span class="chk-icon">✓</span>Missing doc requests fire automatically when items aren't received by deadline</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">↓60%</div><div class="stat-l">Doc delays</div></div>
              <div><div class="stat-n">89%</div><div class="stat-l">Link click rate</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Manual chasing</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Document Collection · Branded URLs · Salesforce</span><span class="uc-mock-badge">Active</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-lightning-charge-fill"></i> Trigger: Pay stub missing - deadline in 48 hours</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-file-earmark-text-fill me-1"></i> Doc request sent - branded upload link</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Delivered ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-link-45deg me-1"></i> Link opened by borrower</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Tracked ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-check-circle-fill me-1"></i> Document received · Stage updated</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Uploaded ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ Doc delays ↓60% · Link tracking eliminates guesswork · All logged in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">↓60%</div><div class="uc-mock-stat-l">Doc delays</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">89%</div><div class="uc-mock-stat-l">Click rate</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Manual chasing</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 3: Chatbot Qualification -->
      <div class="uc-panel" id="uc-panel-3">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-robot"></i> Chatbot Qualification</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Mortgage inquiry chatbot in Salesforce - qualify borrowers for loan eligibility</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Configure decision trees and keyword-driven questionnaires in 360 SMS to qualify applicants automatically. Instantly share eligible loan amounts and mortgage rates for more qualified conversations.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Decision trees driven by keyword replies - qualify income, credit, purchase price</li>
              <li><span class="chk-icon">✓</span>Borrowers learn loan amounts and rates they qualify for - before first call</li>
              <li><span class="chk-icon">✓</span>All responses logged to Salesforce - LO enters every call fully briefed</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">3×</div><div class="stat-l">More qualified leads</div></div>
              <div><div class="stat-n">24/7</div><div class="stat-l">Qualification</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Wasted LO calls</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#0a1e48 0%,#0d2d6b 100%)">
            <div class="uc-mock" style="background:#0a1e48;border:1px solid rgba(255,255,255,.1)">
              <div style="background:rgba(0,87,184,.25);border-bottom:1px solid rgba(255,255,255,.1);padding:12px 16px;display:flex;align-items:center;justify-content:space-between">
                <span style="font-size:11px;font-weight:700;color:rgba(255,255,255,.9)">Chatbot Qualification · 24/7 · Salesforce CRM</span>
                <span style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);background:rgba(0,87,184,.2);border:1px solid rgba(0,87,184,.3);border-radius:20px;padding:2px 9px;display:flex;align-items:center;gap:4px"><span style="width:5px;height:5px;border-radius:50%;background:#5B9EF5;display:inline-block;animation:pulse 2s infinite"></span> Online</span>
              </div>
              <div style="padding:14px;display:flex;flex-direction:column;gap:8px">
                <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:7px;padding:10px 12px">
                  <div style="font-size:9px;font-weight:700;color:rgba(91,158,245,.9);text-transform:uppercase;letter-spacing:.06em;margin-bottom:6px">🏠 BORROWER QUALIFICATION · AUTO-RUNNING</div>
                  <div style="font-size:11px;color:rgba(255,255,255,.8);line-height:1.6">Bot: "What purchase price are you targeting? Reply A) Under $400K  B) $400–700K  C) $700K+"<br><br>Scottie: B<br><br>Bot: "Got it. What's your credit range? A) 620–679  B) 680–739  C) 740+"</div>
                  <div style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);margin-top:8px">✓ Fully qualified before first call · LO briefed in Salesforce</div>
                </div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> Loan amount + rate eligibility shared before first call</div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> All responses auto-logged to loan record in Salesforce</div>
              </div>
              <div style="display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid rgba(255,255,255,.1)">
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">3×</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Qualified leads</div></div>
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)"><div style="font-size:16px;font-weight:800;color:#fff">24/7</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Qualification</div></div>
                <div style="padding:10px;text-align:center"><div style="font-size:16px;font-weight:800;color:#fff">0</div><div style="font-size:9px;color:rgba(255,255,255,.4)">Wasted calls</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 4: Post-Closure Drip -->
      <div class="uc-panel" id="uc-panel-4">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-bullseye"></i> Post-Closure Drip</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Keep in touch after closure - drive repeat sales and referrals</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Stay top-of-mind with automated borrower follow-ups from Salesforce. Drip campaigns nurture refinance opportunities at planned intervals - even when teams forget to follow up.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Loan anniversary notification 30 days post-funding - automated from Salesforce</li>
              <li><span class="chk-icon">✓</span>Post-closure feedback + review requests - bulk SMS to funded clients</li>
              <li><span class="chk-icon">✓</span>Year-long drip - SMS, voicemail, email - so refinance leads come to you first</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">+38%</div><div class="stat-l">Repeat business</div></div>
              <div><div class="stat-n">3×</div><div class="stat-l">More referrals</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Missed follow-ups</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Post-Closure Drip · SMS + Voicemail + Email</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Day 30 · Feedback request + review link - 89% response rate</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Month 6 · "Rates dropped 0.5% since your close - want to explore refi?"</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Month 12 · Loan anniversary + equity update sent</div>
                <div class="uc-mock-row"><div class="uc-mock-dot">✓</div> Month 18 · Referral ask - "Know anyone buying? I'd love to help."</div>
              </div>
              <div class="uc-mock-foot">✓ +38% repeat business · 3× referrals · You're always first-choice for refi</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">+38%</div><div class="uc-mock-stat-l">Repeat business</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">3×</div><div class="uc-mock-stat-l">Referrals</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Missed follow-ups</div></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 5: Stakeholder Updates -->
      <div class="uc-panel" id="uc-panel-5">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-people-fill"></i> Stakeholder Updates</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Update all stakeholders on each stage of the loan process - simultaneously</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Send automated loan updates and reminders to borrowers, agents, and partners simultaneously. Manage multi-channel communication, geotag territories, and keep originator numbers consistent to strengthen relationships.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>All parties updated simultaneously - borrower, co-borrower, listing agent, title</li>
              <li><span class="chk-icon">✓</span>Geotag by area code - auto-assign leads to loan officers by territory</li>
              <li><span class="chk-icon">✓</span>Birthday and milestone texts - congratulate stakeholders on closings</li>
            </ul>
            <div class="uc-stats">
              <div><div class="stat-n">6+</div><div class="stat-l">Stakeholders updated</div></div>
              <div><div class="stat-n">1 click</div><div class="stat-l">All parties notified</div></div>
              <div><div class="stat-n">0</div><div class="stat-l">Missed comms</div></div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Stakeholder Broadcast · Clear to Close</span><span class="uc-mock-badge">Sent</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-check-circle-fill me-1"></i> Loan stage: Clear to Close - all parties notified simultaneously</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-person-fill me-1"></i> Borrower &amp; Co-borrower notified</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Sent ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-house-door-fill me-1"></i> Listing agent notified</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Sent ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-people-fill me-1"></i> Title company &amp; referral partner</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Sent ✓</span></div>
              </div>
              <div class="uc-mock-foot">✓ 6 stakeholders updated in 1 click · All logged to loan record in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">6+</div><div class="uc-mock-stat-l">Stakeholders</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">1 click</div><div class="uc-mock-stat-l">All notified</div></div>
                <div class="uc-mock-stat"><div class="uc-mock-stat-n">0</div><div class="uc-mock-stat-l">Missed comms</div></div>
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
        <div style="font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.55);margin-bottom:10px">Mortgage Teams</div>
        <div style="font-size:clamp(18px,2.5vw,24px);font-weight:800;color:#fff;letter-spacing:-.4px;line-height:1.2;margin-bottom:8px">Ready to close more loans?</div>
        <div style="font-size:13px;color:rgba(255,255,255,.7);line-height:1.6">See 360 SMS running inside Salesforce for mortgage in a free 20-minute demo.</div>
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
      <p class="sec-sub mx-auto" style="max-width:520px;margin:8px auto 0">Campaign · Evaluate · Process · Update · Retain - every stage handled automatically.</p>
    </div>
    <div class="hiw-tabs">
      <button class="hiw-tab-btn active" onclick="hiwGo(0,this)"><i class="bi bi-lightning-charge-fill"></i> Speed-to-Lead</button>
      <button class="hiw-tab-btn" onclick="hiwGo(1,this)"><i class="bi bi-clipboard-fill"></i> Application Processing</button>
      <button class="hiw-tab-btn" onclick="hiwGo(2,this)"><i class="bi bi-file-earmark-text-fill"></i> Document Collection</button>
      <button class="hiw-tab-btn" onclick="hiwGo(3,this)"><i class="bi bi-bullseye"></i> Post-Closure Retention</button>
    </div>
    <div class="hiw-slider-wrap px-3 px-md-0">
      <div class="hiw-slider-track">

        <div class="hiw-slide active" id="hiw-0">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-lightning-charge-fill"></i></div><div><div class="hiw-slide-title">Speed-to-Lead</div><div class="hiw-slide-sub">Instant response · Chatbot qualification · Salesforce CRM</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">50% leads won by first responder</span><span class="hiw-slide-count">01 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Lead submits contact form</div><div class="hiw-step-desc">Salesforce record created - triggers intro text instantly</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Personalized intro fires &lt;3 min</div><div class="hiw-step-desc">First name, loan type, area - merge fields from Salesforce</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Lead replies - chatbot qualifies</div><div class="hiw-step-desc">Decision tree runs - income, credit, purchase price captured</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">LO briefed - fully qualified call</div><div class="hiw-step-desc">Lead record updated · LO notified · No cold calls</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>On first-name basis in &lt;3 min · Fully qualified before first call · All logged in Salesforce</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-0"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-1">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-clipboard-fill"></i></div><div><div class="hiw-slide-title">Application Processing</div><div class="hiw-slide-sub">Stage-triggered updates · All stakeholders · Salesforce CRM</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↓ 70% phone tag</span><span class="hiw-slide-count">02 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Application submitted</div><div class="hiw-step-desc">Salesforce loan record triggers status text automatically</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Stage updates auto-texted</div><div class="hiw-step-desc">UW submission, conditional approval, CTC - all automatic</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">All stakeholders notified</div><div class="hiw-step-desc">Borrower, listing agent, title, referral partner - simultaneously</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Funded - congrats text sent</div><div class="hiw-step-desc">Post-closure drip starts automatically · No manual steps</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Every stage auto-communicated · Phone tag eliminated · All parties always informed</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-1"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-2">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-file-earmark-text-fill"></i></div><div><div class="hiw-slide-title">Document Collection</div><div class="hiw-slide-sub">Branded URLs · Link tracking · Auto-requests · Salesforce</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↓ 60% doc delays</span><span class="hiw-slide-count">03 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Missing doc detected in Salesforce</div><div class="hiw-step-desc">Loan record triggers automated document request</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Branded URL sent via SMS</div><div class="hiw-step-desc">Custom domain - borrowers trust and click</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Link open tracked in Salesforce</div><div class="hiw-step-desc">LO knows exactly who clicked and who to follow up with</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Doc received · Stage updated</div><div class="hiw-step-desc">Salesforce loan record updated · Confirmation sent instantly</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>Doc delays ↓60% · Link tracking eliminates guesswork · All logged in Salesforce CRM</span></div>
          <div class="hiw-progress-bar"><div class="hiw-progress-fill" id="hiw-prog-2"></div></div>
        </div>

        <div class="hiw-slide" id="hiw-3">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left"><div class="hiw-slide-icon"><i class="bi bi-bullseye"></i></div><div><div class="hiw-slide-title">Post-Closure Retention</div><div class="hiw-slide-sub">Year-long drip · Refi pipeline · Referral engine · Salesforce</div></div></div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">+38% repeat business</span><span class="hiw-slide-count">04 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step"><div class="hiw-step-num">1</div><div class="hiw-step-label">Loan funded in Salesforce</div><div class="hiw-step-desc">Post-closure drip sequence starts automatically</div></div>
              <div class="hiw-step"><div class="hiw-step-num">2</div><div class="hiw-step-label">Day 30 - feedback + review ask</div><div class="hiw-step-desc">Establish touchpoint - collect social proof</div></div>
              <div class="hiw-step"><div class="hiw-step-num">3</div><div class="hiw-step-label">Month 6 - rate check-in</div><div class="hiw-step-desc">"Rates dropped since your close" - refi conversation starts</div></div>
              <div class="hiw-step"><div class="hiw-step-num">4</div><div class="hiw-step-label">Year 1+ - anniversary + referral</div><div class="hiw-step-desc">Loan anniversary · equity update · referral ask · repeat sale</div></div>
            </div>
          </div>
          <div class="hiw-slide-foot"><div class="hiw-slide-foot-dot"></div><span>No deal falls through the cracks · Refi pipeline built automatically · You're always first-choice</span></div>
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
    <div style="display:inline-flex;align-items:center;gap:7px;background:rgba(0,87,184,.18);border:1px solid rgba(0,87,184,.35);border-radius:20px;padding:5px 14px;font-size:10px;font-weight:700;color:rgba(120,170,255,.9);letter-spacing:.07em;text-transform:uppercase;margin-bottom:20px">⚡ AI Use Case · Mortgage Lenders</div>
    <h2 style="font-size:clamp(22px,3vw,32px);font-weight:800;color:#fff;letter-spacing:-1px;line-height:1.15;margin-bottom:12px">AI-Powered Borrower<br><span style="color:#5B9BD5">Qualification &amp; Support. 24/7</span></h2>
    <p style="font-size:15px;color:rgba(255,255,255,.48);line-height:1.7;max-width:560px;margin-bottom:36px">Loan officers are too valuable to waste on unqualified leads or routine status queries. 360 SMS AI agents handle qualification, document chasing, appointment scheduling, and post-closure follow-up - automatically inside Salesforce. Give back teams more time to prospect and close.</p>
    <div class="row g-3 mb-4">
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-magic fs-4"></i></div><div class="aa-title">AI Rephrase &amp; Polish Borrower Communication</div><div class="aa-desc">AI Rephrase & Polish Content simplifies complex mortgage explanations, approval updates, and documentation requests into clearer borrower-friendly communication automatically.</div><span class="aa-result">Reduce borrower communication confusion</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-robot fs-4"></i></div><div class="aa-title">AI-Powered Chatbots for Loan Assistance</div><div class="aa-desc">A first-time buyer needs hand-holding. A repeat borrower doing a cash-out refi needs speed. Salesforce data - loan type, borrower history, stage - drives what gets sent and when. Merge fields do the personalization. Never a generic mortgage checklist.</div><span class="aa-result">Improve borrower support responsiveness</span></div></div>
      <div class="col-12 col-md-4"><div class="ai-agent-card"><div class="aa-icon"><i class="bi bi-bar-chart-line-fill fs-4"></i></div><div class="aa-title">Conversation Analysis for Borrower Insights</div><div class="aa-desc">Conversation Analysis identifies hesitation, missing documentation, sentiment trends, and potential delays from borrower conversations automatically.</div><span class="aa-result">Accelerate loan processing efficiency</span></div></div>
    </div>
    <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:10px;padding:20px 24px;display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap">
      <div>
        <div style="font-size:14px;font-weight:700;color:#fff;margin-bottom:3px">Achieve end-to-end mortgage communications with a single app integration - no code.</div>
        <div style="font-size:12px;color:rgba(255,255,255,.4)">All conversations auto-logged to the loan record. Data stays inside your Salesforce org.</div>
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
        <div class="comp-badge"><i class="bi bi-shield-lock-fill"></i> Salesforce Native · Single App Integration</div>
        <div class="lbl">Platform &amp; Territory Management</div>
        <h2 class="sec-h">Manage territories, teams &amp;<br>touchpoints - all inside Salesforce</h2>
        <p class="sec-sub mb-0">360 SMS centralizes end-to-end mortgage communications inside Salesforce - <strong>no middleware, no external platforms</strong>. Geotag borrowers by area code, manage loan officer territories, and ensure every conversation is consistent, contextual, and logged.</p>
        <div class="comp-pts">
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-geo-alt-fill"></i></div><div><div class="comp-th">Geotag borrowers by area code</div><div class="comp-tp">Auto-assign inbound leads to the right loan officer by territory. Keep originator numbers consistent to build relationships with account managers.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-link-45deg"></i></div><div><div class="comp-th">Custom shortened URLs for docs &amp; payments</div><div class="comp-tp">Custom domain URLs borrowers trust - for documentation, e-signing, and payment gateways. See if borrowers opened those links directly in Salesforce.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-megaphone-fill"></i></div><div><div class="comp-th">Single branded Sender ID</div><div class="comp-tp">All communications from one consistent shortcode or Sender ID - building brand recognition and borrower trust throughout the loan process.</div></div></div>
          <div class="comp-pt"><div class="comp-ic"><i class="bi bi-check-circle-fill"></i></div><div><div class="comp-th">Opt-In &amp; Opt-Out consent management</div><div class="comp-tp">Double Opt-In and Opt-Out consent flows built in - essential for compliant mortgage text marketing at scale, directly inside Salesforce.</div></div></div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="comp-visual">
          <div style="font-size:12px;font-weight:700;color:var(--ink);margin-bottom:3px">Salesforce-Native Mortgage Platform</div>
          <div style="font-size:11px;color:var(--ink3);margin-bottom:12px">End-to-end borrower communication</div>
          <div class="hck-row"><div class="hck">✓</div> All borrower data inside your Salesforce CRM only</div>
          <div class="hck-row"><div class="hck">✓</div> 15+ channels · SMS, WhatsApp, MMS, voice · single inbox</div>
          <div class="hck-row"><div class="hck">✓</div> Geotag by area code · auto territory assignment</div>
          <div class="hck-row"><div class="hck">✓</div> Custom branded URLs · link tracking built in</div>
          <div class="hck-row"><div class="hck">✓</div> Single Sender ID · consistent borrower relationship</div>
          <div class="hck-row"><div class="hck">✓</div> All interactions auto-logged to loan record</div>
          <div style="background:var(--sf);border-radius:8px;padding:12px 14px;margin-top:4px">
            <div style="font-size:12px;font-weight:700;color:#fff;margin-bottom:3px">Zero Code · Single App Integration</div>
            <div style="font-size:11px;color:rgba(255,255,255,.7)">Empower loan officers to set up processes easily without code. Achieve end-to-end mortgage communications with one Salesforce app.</div>
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