<?php
/*
Template Name:Industry Education
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
      <span style="color:var(--ink);font-weight:600">Higher Education</span>
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
          TCPA-Compliant · Salesforce Native
        </div>
        <h1>Boost Admissions and<br><em>Enrollments with SMS Salesforce</em><br>for Higher Education</h1>
        <p class="hero-sub">Drive faster admissions and deeper student engagement with our higher ed texting platform - natively inside Salesforce. No code. No middleware.</p>
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
          <span><strong style="color:var(--ink)">200+</strong> education orgs</span>
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
            <div class="hero-ui-url">360 SMS - Student Inbox · Salesforce for Education</div>
          </div>
          <div class="d-flex" style="height:340px;overflow:hidden">
            <!-- Icon sidebar -->
            <div class="inbox-sidebar d-none d-sm-flex flex-column">
              <div class="inbox-icon act"><i class="bi bi-mortarboard-fill" style="color:#fff;font-size:13px"></i><span class="inbox-badge">4</span></div>
              <div class="inbox-icon inact"><i class="bi bi-calendar-event-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i><span class="inbox-badge">2</span></div>
              <div class="inbox-icon inact"><i class="bi bi-clipboard-check-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i><span class="inbox-badge">1</span></div>
              <div class="inbox-icon inact"><i class="bi bi-robot" style="color:rgba(255,255,255,.6);font-size:13px"></i><span class="inbox-badge">3</span></div>
              <div class="inbox-icon inact"><i class="bi bi-cash-stack" style="color:rgba(255,255,255,.6);font-size:13px"></i></div>
              <div class="inbox-icon inact mt-auto"><i class="bi bi-gear-fill" style="color:rgba(255,255,255,.6);font-size:13px"></i></div>
            </div>
            <!-- Conversation list -->
            <div style="width:200px;flex-shrink:0;border-right:1px solid #eee;overflow:hidden" class="d-none d-md-flex flex-column">
              <div style="padding:10px 12px;border-bottom:1px solid #eee;font-size:11px;font-weight:700;color:var(--ink)">Student Conversations</div>
              <div class="conv-item act border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Emma Carter</span><span style="font-size:10px;color:var(--ink4)">9:03 AM</span></div>
                <div class="conv-prev hl">YES - confirm my place</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Marcus R.</span><span style="font-size:10px;color:var(--ink4)">8:44 AM</span></div>
                <div class="conv-prev dim">FAFSA deadline reminder confirmed</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px">💚 WhatsApp</div>
              </div>
              <div class="conv-item border-bottom">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Priya Sharma</span><span style="font-size:10px;color:var(--ink4)">Tue</span></div>
                <div class="conv-prev dim">Can I change my program choice?</div>
                <div class="d-flex align-items-center justify-content-between">
                  <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:#0057B8;background:#E8F0FB;border-radius:4px;padding:2px 6px"><i class="bi bi-robot"></i> AI Bot</div>
                  <span style="background:#0057B8;color:#fff;font-size:9px;font-weight:700;width:15px;height:15px;border-radius:50%;display:flex;align-items:center;justify-content:center">1</span>
                </div>
              </div>
              <div class="conv-item">
                <div class="d-flex justify-content-between mb-1"><span class="conv-name">Jake Torres</span><span style="font-size:10px;color:var(--ink4)">Mon</span></div>
                <div class="conv-prev dim">Acceptance letter received ✓</div>
                <div style="display:inline-flex;align-items:center;gap:3px;font-size:9px;font-weight:700;color:var(--ink3);background:#f0f0ee;border-radius:4px;padding:2px 6px">💬 SMS</div>
              </div>
            </div>
            <!-- Chat panel -->
            <div class="d-flex flex-column flex-grow-1" style="background:#fff;min-width:0">
              <div style="padding:10px 14px;border-bottom:1px solid #eee">
                <div style="font-size:13px;font-weight:700;color:var(--ink)">Emma Carter - Prospective Student</div>
                <div style="font-size:10px;color:var(--ink4)">via Salesforce for Education · Greenfield University</div>
              </div>
              <div class="flex-grow-1 d-flex flex-column gap-2 p-3" style="overflow:hidden">
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Emma - reminder that your enrollment confirmation for Fall 2025 is due by Friday. Reply YES to confirm your place or HELP for assistance. 🎓</div>
                  <div class="msg-meta text-end">360 SMS · 9:00 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start" style="max-width:75%">
                  <div class="bubble-in">YES - confirm my place</div>
                  <div class="msg-meta">Emma · 9:03 AM</div>
                </div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Confirmed! Your spot is secured. Your orientation pack will be emailed shortly. Reply HELP anytime.</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:6px;padding:6px 10px;font-size:10px;font-weight:700;color:#0057B8">✓ Enrollment confirmed · Student record updated in Salesforce</div>
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
      <div class="proof-item"><span class="proof-n">10×</span><span class="proof-l ms-2">Response vs<br>Other Channels</span></div>
      <div class="proof-item"><span class="proof-n">98%</span><span class="proof-l ms-2">SMS<br>Open Rate</span></div>
      <div class="proof-item"><span class="proof-n">25%</span><span class="proof-l ms-2">more Opens<br>than Email</span></div>
      <div class="proof-item"><span class="proof-n">1 in 4</span><span class="proof-l ms-2">Students Want<br>Text Updates</span></div>
      <div class="proof-item"><span class="proof-n">90 sec.</span><span class="proof-l ms-2">Response<br>Time</span></div>
      <div class="proof-item">
        <span style="background:var(--sf-l);color:var(--sf);font-size:11px;font-weight:700;padding:4px 10px;border-radius:4px;line-height:1.5;white-space:nowrap">AgentExchange · #1 Rated</span>
      </div>
    </div>
  </div>
</div>

<!-- EDUCATION USE CASES -->
<section class="sec sec-alt" id="use-cases">
  <div class="container-xl">
    <div class="text-center mb-4">
      <div class="lbl d-flex justify-content-center">Why education teams choose 360 SMS</div>
      <h2 class="sec-h mx-auto" style="max-width:640px">How 360 SMS Solves Every <br class="d-none d-md-block">Higher Education Communication Need</h2>
      <p class="sec-sub mx-auto" style="max-width:600px">Every use case runs natively inside Salesforce - TCPA-compliant by design. Click a use case to see it in action.</p>
    </div>

    <!-- Tab pills -->
    <div class="d-flex gap-2 flex-wrap justify-content-center mb-4">
      <button onclick="switchUC(0)" class="uc-tab-btn active"><i class="bi bi-calendar-event-fill" style="color#0057B8;"></i> Admission Reminders</button>
      <button onclick="switchUC(1)" class="uc-tab-btn"><i class="bi bi-clipboard-check-fill"></i> Student Onboarding</button>
      <button onclick="switchUC(2)" class="uc-tab-btn"><i class="bi bi-mortarboard-fill"></i> Academic Follow-Up</button>
      <button onclick="switchUC(3)" class="uc-tab-btn"><i class="bi bi-cash-stack"></i> Financial Aid</button>
      <button onclick="switchUC(4)" class="uc-tab-btn"><i class="bi bi-robot"></i> AI Student Support</button>
      <button onclick="switchUC(5)" class="uc-tab-btn"><i class="bi bi-bullseye"></i> Retention Drips</button>
    </div>

    <div style="background:#fff;border:1px solid var(--bdr);border-radius:16px;overflow:hidden;box-shadow:0 4px 24px rgba(0,0,0,.07)">

      <!-- PANEL 0: Admission Reminders -->
      <div class="uc-panel active" id="uc-panel-0">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-calendar-event-fill"></i> Admission Reminders</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Reduce enrollment drop-off by 40% with automated two-way admission SMS</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Appointment reminders happen automatically, helping your admissions team stay on top of important dates while giving prospects an easy way to confirm or reschedule.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Auto-triggered 48h &amp; 24h before enrollment deadlines and campus events</li>
              <li><span class="chk-icon">✓</span>Prospects reply YES / RESCHEDULE — Salesforce record auto-updates</li>
              <li><span class="chk-icon">✓</span>Zero manual follow-up — admissions staff fully freed up</li>
            </ul>
            <div class="uc-stats">
              <div>
                <div class="stat-n">40%</div>
                <div class="stat-l">Less drop-off</div>
              </div>
              <div>
                <div class="stat-n">98%</div>
                <div class="stat-l">SMS open rate</div>
              </div>
              <div>
                <div class="stat-n">15s</div>
                <div class="stat-l">Avg response time</div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Admission Reminder · Salesforce Flow</span><span class="uc-mock-badge">Live</span></div>
              <div class="uc-mock-body" style="background:#F9FBFF">
                <div style="font-size:9px;font-weight:700;color:var(--ink4);text-transform:uppercase;letter-spacing:.07em;text-align:center;margin-bottom:4px">Student Conversation · SMS</div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Hi Emma - your Fall 2025 enrollment deadline is tomorrow at 5 PM. Reply <strong>YES</strong> to confirm your place or <strong>HELP</strong> for assistance. 🎓</div>
                  <div class="msg-meta text-end">360 SMS · 9:00 AM · Delivered ✓</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:65%">
                  <div class="bubble-in">YES - confirm my place</div>
                  <div class="msg-meta">Emma · 9:03 AM</div>
                </div>
                <div class="align-self-end mt-1" style="max-width:88%">
                  <div class="bubble-out">Confirmed! Your spot is secured for Fall 2025. Orientation info coming soon. Reply HELP anytime.</div>
                  <div class="msg-meta text-end">9:03 AM · Auto-logged ✓</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ Enrollment confirmed · Student record updated automatically in Salesforce</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">40%</div>
                  <div class="uc-mock-stat-l">Drop-off reduction</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">98%</div>
                  <div class="uc-mock-stat-l">Open rate</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">15s</div>
                  <div class="uc-mock-stat-l">Avg response</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 1: Student Onboarding -->
      <div class="uc-panel" id="uc-panel-1">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-clipboard-check-fill"></i> Student Onboarding</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Onboard new students 50% faster - entirely over SMS</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">The moment a new student record is created in Salesforce, an automated SMS sequence fires - collecting enrollment forms, program preferences, and orientation confirmations without any manual outreach.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Automated sequence triggers instantly on record creation</li>
              <li><span class="chk-icon">✓</span>Collects enrollment forms, program choices &amp; orientation details over text</li>
              <li><span class="chk-icon">✓</span>Zero phone calls or manual admin required from staff</li>
            </ul>
            <div class="uc-stats">
              <div>
                <div class="stat-n">50%</div>
                <div class="stat-l">Faster onboarding</div>
              </div>
              <div>
                <div class="stat-n">0</div>
                <div class="stat-l">Manual calls</div>
              </div>
              <div>
                <div class="stat-n">5min</div>
                <div class="stat-l">Avg completion</div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Student Onboarding Sequence · Salesforce</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="d-flex align-items-center gap-2 flex-wrap mb-2">
                  <span style="padding:5px 10px;background:#E8F0FB;border:1px solid #CCE0F7;border-radius:5px;font-size:10px;font-weight:700;color:#0057B8"><i class="bi bi-clipboard-check-fill"></i> Record Created</span>
                  <span style="color:var(--ink4)">→</span>
                  <span style="padding:5px 10px;background:var(--sf-l);border:1px solid var(--sf-m);border-radius:5px;font-size:10px;font-weight:700;color:var(--sf)">💬 Welcome SMS</span>
                  <span style="color:var(--ink4)">→</span>
                  <span style="padding:5px 10px;background:#E8F0FB;border:1px solid #CCE0F7;border-radius:5px;font-size:10px;font-weight:700;color:#0057B8"><i class="bi bi-check-circle-fill"></i> Ready</span>
                </div>
                <div class="align-self-end" style="max-width:88%">
                  <div class="bubble-out">Welcome to Greenfield University, Marcus! Complete your enrollment form: [link] - takes 3 minutes. 🎓</div>
                  <div class="msg-meta text-end">Auto-triggered · 2:14 PM</div>
                </div>
                <div class="align-self-start mt-1" style="max-width:60%">
                  <div class="bubble-in">Done! Form submitted ✓</div>
                  <div class="msg-meta">Marcus · 2:19 PM</div>
                </div>
              </div>
              <div class="uc-mock-foot">✓ Onboarding complete · Program captured · Orientation details sent</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">50%</div>
                  <div class="uc-mock-stat-l">Faster onboarding</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">0</div>
                  <div class="uc-mock-stat-l">Manual calls</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">5min</div>
                  <div class="uc-mock-stat-l">Completion</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 2: Academic Follow-Up -->
      <div class="uc-panel" id="uc-panel-2">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-mortarboard-fill"></i> Academic Follow-Up</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Close 60% more enrollment milestones with automated academic follow-up</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Automated course registration follow-ups sent directly from Salesforce. Students reply DONE or HELP, and the system routes automatically. Non-responses escalate to advisors inside Salesforce - no manual tracking required.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Follow-ups sent automatically based on enrollment milestones</li>
              <li><span class="chk-icon">✓</span>Single-word reply (DONE / HELP) - frictionless for students </li>
              <li><span class="chk-icon">✓</span>Non-responders auto-escalated to advisors inside Salesforce</li>
            </ul>
            <div class="uc-stats">
              <div>
                <div class="stat-n">60%</div>
                <div class="stat-l">More milestones closed</div>
              </div>
              <div>
                <div class="stat-n">2-way</div>
                <div class="stat-l">Escalation</div>
              </div>
              <div>
                <div class="stat-n">0</div>
                <div class="stat-l">Manual tracking </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Academic Follow-Up · Enrollment Drip</span><span class="uc-mock-badge">Active</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row">
                  <div class="uc-mock-dot">✓</div> Day 1 · Welcome + orientation schedule + advisor contacts sent
                </div>
                <div class="uc-mock-row">
                  <div class="uc-mock-dot">✓</div> Day 3 · Course registration reminder + portal link
                </div>
                <div class="uc-mock-row">
                  <div class="uc-mock-dot">✓</div> Day 7 · Progress check-in (student replied: "all set!")
                </div>
                <div class="uc-mock-row" style="background:#E8F0FB;border-color:#CCE0F7">
                  <div class="uc-mock-dot">!</div> Day 14 · No response - escalated to academic advisor
                </div>
              </div>
              <div class="uc-mock-foot">✓ Advisor notified · Follow-up call scheduled · Record flagged</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">28%</div>
                  <div class="uc-mock-stat-l">↑ Completion</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">Auto</div>
                  <div class="uc-mock-stat-l">Escalation</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">0</div>
                  <div class="uc-mock-stat-l">Missed students</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 3: Financial Aid -->
      <div class="uc-panel" id="uc-panel-3">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-cash-stack"></i> Financial Aid Reminders</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Improve financial aid completion 3× faster with automated tuition SMS</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">FAFSA deadline alerts and tuition payment nudges triggered automatically from records in Salesforce. Direct links to portals are tracked via analytics, letting advisors intervene on incomplete applications to boost completion.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Tuition deadlines trigger automatic reminders with direct links </li>
              <li><span class="chk-icon">✓</span>Missing document alerts sent before the deadline - zero chasing</li>
              <li><span class="chk-icon">✓</span>Students text back and get live advisor response - faster than a phone call </li>
            </ul>
            <div class="uc-stats">
              <div>
                <div class="stat-n">3×</div>
                <div class="stat-l">Completion rate</div>
              </div>
              <div>
                <div class="stat-n">0</div>
                <div class="stat-l">Missed deadlines</div>
              </div>
              <div>
                <div class="stat-n">Auto</div>
                <div class="stat-l">Record update</div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Financial Aid Reminders · Salesforce</span><span class="uc-mock-badge">Active</span></div>
              <div class="uc-mock-body">
                <div style="background:#E8F0FB;border:1px solid #CCE0F7;border-radius:7px;padding:9px 12px;font-size:11px;color:#0057B8;margin-bottom:2px"><i class="bi bi-lightning-charge-fill"></i> Trigger: FAFSA deadline in 3 days - application incomplete</div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-cash-stack me-1"></i> FAFSA reminder sent with direct link</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Delivered ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-link-45deg me-1"></i> Financial aid portal link clicked</span><span style="font-size:9px;font-weight:700;background:var(--sf-l);color:var(--sf);padding:2px 7px;border-radius:4px">Tracked ✓</span></div>
                <div class="d-flex align-items-center justify-content-between uc-mock-row"><span><i class="bi bi-check-circle-fill me-1"></i> Application submitted</span><span style="font-size:9px;font-weight:700;background:#E8F0FB;color:#0057B8;padding:2px 7px;border-radius:4px">Completed</span></div>
              </div>
              <div class="uc-mock-foot">✓ Application closed · No staff intervention needed</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">3×</div>
                  <div class="uc-mock-stat-l">Completion rate</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">0</div>
                  <div class="uc-mock-stat-l">Missed deadlines</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">Auto</div>
                  <div class="uc-mock-stat-l">Record update</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 4: AI Student Support -->
      <div class="uc-panel" id="uc-panel-4">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-robot"></i> AI Student Support</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Handle every student query 24/7 - with zero staff overhead</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">AI chatbot handles FAQs, enrollment queries, and advisor routing around the clock. Sentiment detection flags distressed or urgent students for immediate human handoff - every interaction logged to Salesforce automatically.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>AI chatbot handles FAQs, queries &amp; routing 24/7</li>
              <li><span class="chk-icon">✓</span>Sentiment detection flags urgent students in under 5 seconds</li>
              <li><span class="chk-icon">✓</span>All conversations auto-logged to student record - data stays in Salesforce</li>
            </ul>
            <div class="uc-stats">
              <div>
                <div class="stat-n">24/7</div>
                <div class="stat-l">Coverage</div>
              </div>
              <div>
                <div class="stat-n">&lt;5s</div>
                <div class="stat-l">Escalation</div>
              </div>
              <div>
                <div class="stat-n">0</div>
                <div class="stat-l">Missed urgents</div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#0a1e48 0%,#0d2d6b 100%)">
            <div class="uc-mock" style="background:#0a1e48;border:1px solid rgba(255,255,255,.1)">
              <div style="background:rgba(0,87,184,.25);border-bottom:1px solid rgba(255,255,255,.1);padding:12px 16px;display:flex;align-items:center;justify-content:space-between">
                <span style="font-size:11px;font-weight:700;color:rgba(255,255,255,.9)">AI Support Agent · 24/7 · Salesforce</span>
                <span style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);background:rgba(0,87,184,.2);border:1px solid rgba(0,87,184,.3);border-radius:20px;padding:2px 9px;display:flex;align-items:center;gap:4px"><span style="width:5px;height:5px;border-radius:50%;background:#5B9EF5;display:inline-block;animation:pulse 2s infinite"></span> Online</span>
              </div>
              <div style="padding:14px;display:flex;flex-direction:column;gap:8px">
                <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:7px;padding:10px 12px">
                  <div style="font-size:9px;font-weight:700;color:rgba(91,158,245,.9);text-transform:uppercase;letter-spacing:.06em;margin-bottom:6px">⚡ SENTIMENT: URGENT DETECTED</div>
                  <div style="font-size:11px;color:rgba(255,255,255,.8);line-height:1.6">Student: "I've missed the FAFSA deadline and can't reach the financial aid office"<br><br>AI: Urgency detected. Routing to financial aid advisor. Sending extension request link now.</div>
                  <div style="font-size:10px;font-weight:700;color:rgba(91,158,245,.9);margin-top:8px">🚨 Escalated to human advisor in 4 seconds</div>
                </div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> FAQ queries handled automatically - zero staff needed</div>
                <div style="display:flex;align-items:center;gap:8px;background:rgba(255,255,255,.05);border:1px solid rgba(255,255,255,.08);border-radius:6px;padding:8px 10px;font-size:11px;color:rgba(255,255,255,.7)"><span style="color:rgba(91,158,245,.9)">✓</span> All conversations auto-logged to student record in Salesforce</div>
              </div>
              <div style="display:grid;grid-template-columns:repeat(3,1fr);border-top:1px solid rgba(255,255,255,.1)">
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)">
                  <div style="font-size:16px;font-weight:800;color:#fff">24/7</div>
                  <div style="font-size:9px;color:rgba(255,255,255,.4)">Coverage</div>
                </div>
                <div style="padding:10px;text-align:center;border-right:1px solid rgba(255,255,255,.08)">
                  <div style="font-size:16px;font-weight:800;color:#fff">&lt;5s</div>
                  <div style="font-size:9px;color:rgba(255,255,255,.4)">Escalation</div>
                </div>
                <div style="padding:10px;text-align:center">
                  <div style="font-size:16px;font-weight:800;color:#fff">0</div>
                  <div style="font-size:9px;color:rgba(255,255,255,.4)">Missed urgents</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- PANEL 5: Retention Drips -->
      <div class="uc-panel" id="uc-panel-5">
        <div class="row g-0" style="min-height:420px;margin-left:5px;margin-right:5px;">
          <div class="col-12 col-md-6 uc-panel-left d-flex flex-column justify-content-center p-4 p-lg-5">
            <div style="display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border-radius:6px;padding:5px 12px;font-size:11px;font-weight:700;color:#0057B8;margin-bottom:20px;width:fit-content"><i class="bi bi-bullseye"></i> Retention &amp; Personalization</div>
            <h3 style="font-size:clamp(18px,2.2vw,22px);font-weight:800;color:var(--ink);letter-spacing:-.4px;line-height:1.25;margin-bottom:14px">Keep students engaged and boost re-enrollment by 31%</h3>
            <p style="font-size:13px;color:var(--ink2);line-height:1.7;margin-bottom:20px">Automate that warm close with personalized acceptance messages, reminders, and thoughtful knowledge articles. Personalize messages for the generation that scoffs at bulk texts - actions triggered directly in 360 SMS inside Salesforce.</p>
            <ul class="uc-check-list">
              <li><span class="chk-icon">✓</span>Personalized acceptance messages, semester reminders, milestone follow-ups</li>
              <li><span class="chk-icon">✓</span>Knowledge articles and campus event invites on a scheduled cadence</li>
              <li><span class="chk-icon">✓</span>Keeps students engaged between terms and improves re-enrollment rates</li>
            </ul>
            <div class="uc-stats">
              <div>
                <div class="stat-n">72%</div>
                <div class="stat-l">Engagement rate</div>
              </div>
              <div>
                <div class="stat-n">+31%</div>
                <div class="stat-l">Re-enrollment</div>
              </div>
              <div>
                <div class="stat-n">89%</div>
                <div class="stat-l">Response rate</div>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 d-flex align-items-center justify-content-center p-4" style="background:linear-gradient(145deg,#E8F0FB 0%,#EEF5FF 100%)">
            <div class="uc-mock">
              <div class="uc-mock-head"><span>Student Retention Drip · SMS + WhatsApp</span><span class="uc-mock-badge">Running</span></div>
              <div class="uc-mock-body">
                <div class="uc-mock-row">
                  <div class="uc-mock-dot">✓</div> Week 1 · Acceptance message + orientation schedule + advisor intro
                </div>
                <div class="uc-mock-row">
                  <div class="uc-mock-dot">✓</div> Week 2 · Campus event invite + student resources link
                </div>
                <div class="uc-mock-row">
                  <div class="uc-mock-dot">✓</div> Week 4 · Milestone check-in - 89% students responded
                </div>
                <div class="uc-mock-row">
                  <div class="uc-mock-dot">✓</div> Week 8 · Re-enrollment offer sent to at-risk students
                </div>
              </div>
              <div class="uc-mock-foot">✓ Engagement rate 72% · Re-enrollment +31% vs email-only group</div>
              <div class="uc-mock-stats">
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">72%</div>
                  <div class="uc-mock-stat-l">Engagement</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">+31%</div>
                  <div class="uc-mock-stat-l">Re-enrollment</div>
                </div>
                <div class="uc-mock-stat">
                  <div class="uc-mock-stat-n">89%</div>
                  <div class="uc-mock-stat-l">Response rate</div>
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
        <div style="font-size:10px;font-weight:700;letter-spacing:.12em;text-transform:uppercase;color:rgba(255,255,255,.55);margin-bottom:10px">Higher Education Teams</div>
        <div style="font-size:clamp(18px,2.5vw,24px);font-weight:800;color:#fff;letter-spacing:-.4px;line-height:1.2;margin-bottom:8px">Ready to boost enrollment?</div>
        <div style="font-size:13px;color:rgba(255,255,255,.7);line-height:1.6">See 360 SMS running inside Salesforce for Education in a free 20-minute demo.</div>
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
      <p class="sec-sub mx-auto" style="max-width:520px;margin:8px auto 0">Every student workflow follows the same pattern - trigger, send, respond, log.</p>
    </div>
    <div class="hiw-tabs">
      <button class="hiw-tab-btn active" onclick="hiwGo(0,this)"><i class="bi bi-calendar-event-fill"></i> Admission Reminders</button>
      <button class="hiw-tab-btn" onclick="hiwGo(1,this)"><i class="bi bi-mortarboard-fill"></i> Academic Drip</button>
      <button class="hiw-tab-btn" onclick="hiwGo(2,this)"><i class="bi bi-cash-stack"></i> Financial Aid</button>
      <button class="hiw-tab-btn" onclick="hiwGo(3,this)"><i class="bi bi-bullseye"></i> Student Retention</button>
    </div>
    <div class="hiw-slider-wrap px-3 px-md-0">
      <div class="hiw-slider-track">

        <div class="hiw-slide active" id="hiw-0">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left">
              <div class="hiw-slide-icon"><i class="bi bi-calendar-event-fill"></i></div>
              <div>
                <div class="hiw-slide-title">Admission Reminders</div>
                <div class="hiw-slide-sub">Auto-triggered · Salesforce for Education</div>
              </div>
            </div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↓ 40% drop-off</span><span class="hiw-slide-count">01 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step">
                <div class="hiw-step-num">1</div>
                <div class="hiw-step-label">Application created in Salesforce</div>
                <div class="hiw-step-desc">Prospect record triggers the automated flow</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">2</div>
                <div class="hiw-step-label">Reminder SMS sent 48h before deadline</div>
                <div class="hiw-step-desc">Personalized with program name, date &amp; link</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">3</div>
                <div class="hiw-step-label">Student replies YES or RESCHEDULE</div>
                <div class="hiw-step-desc">2-way reply handled instantly by 360 SMS</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">4</div>
                <div class="hiw-step-label">Record auto-updated in Salesforce</div>
                <div class="hiw-step-desc">Confirmation logged - zero manual entry</div>
              </div>
            </div>
          </div>
          <div class="hiw-slide-foot">
            <div class="hiw-slide-foot-dot"></div><span>All interactions auto-logged to Salesforce · Zero manual entry required</span>
          </div>
          <div class="hiw-progress-bar">
            <div class="hiw-progress-fill" id="hiw-prog-0"></div>
          </div>
        </div>

        <div class="hiw-slide" id="hiw-1">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left">
              <div class="hiw-slide-icon"><i class="bi bi-mortarboard-fill"></i></div>
              <div>
                <div class="hiw-slide-title">Academic Drip Follow-Up</div>
                <div class="hiw-slide-sub">Daily automated follow-ups · Enrollment milestones linked</div>
              </div>
            </div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↑ Enrollment completion</span><span class="hiw-slide-count">02 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step">
                <div class="hiw-step-num">1</div>
                <div class="hiw-step-label">Enrollment plan set in Salesforce</div>
                <div class="hiw-step-desc">Course registration schedule linked to student record</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">2</div>
                <div class="hiw-step-label">Follow-up SMS fires automatically</div>
                <div class="hiw-step-desc">Personalized with course name &amp; deadline</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">3</div>
                <div class="hiw-step-label">Student replies DONE or HELP</div>
                <div class="hiw-step-desc">One word - frictionless confirmation</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">4</div>
                <div class="hiw-step-label">Non-response escalates to advisor</div>
                <div class="hiw-step-desc">No reply in 48h triggers advisor alert automatically</div>
              </div>
            </div>
          </div>
          <div class="hiw-slide-foot">
            <div class="hiw-slide-foot-dot"></div><span>Missed-deadline alerts fire automatically · Advisor notified inside Salesforce</span>
          </div>
          <div class="hiw-progress-bar">
            <div class="hiw-progress-fill" id="hiw-prog-1"></div>
          </div>
        </div>

        <div class="hiw-slide" id="hiw-2">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left">
              <div class="hiw-slide-icon"><i class="bi bi-cash-stack"></i></div>
              <div>
                <div class="hiw-slide-title">Financial Aid &amp; Tuition</div>
                <div class="hiw-slide-sub">Auto-triggered from financial records · Salesforce</div>
              </div>
            </div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↑ 3× faster completion</span><span class="hiw-slide-count">03 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step">
                <div class="hiw-step-num">1</div>
                <div class="hiw-step-label">FAFSA deadline approaching in Salesforce</div>
                <div class="hiw-step-desc">Financial record triggers the automated flow</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">2</div>
                <div class="hiw-step-label">Aid portal link sent via SMS</div>
                <div class="hiw-step-desc">Direct link - student completes form without calling</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">3</div>
                <div class="hiw-step-label">Student submits or texts a question</div>
                <div class="hiw-step-desc">Handled automatically or routed to advisor</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">4</div>
                <div class="hiw-step-label">Record marked complete in Salesforce</div>
                <div class="hiw-step-desc">No manual reconciliation - instant record update</div>
              </div>
            </div>
          </div>
          <div class="hiw-slide-foot">
            <div class="hiw-slide-foot-dot"></div><span>Aid links tracked · Salesforce record updated automatically · Zero manual chasing</span>
          </div>
          <div class="hiw-progress-bar">
            <div class="hiw-progress-fill" id="hiw-prog-2"></div>
          </div>
        </div>

        <div class="hiw-slide" id="hiw-3">
          <div class="hiw-slide-head">
            <div class="hiw-slide-head-left">
              <div class="hiw-slide-icon"><i class="bi bi-bullseye"></i></div>
              <div>
                <div class="hiw-slide-title">Student Retention</div>
                <div class="hiw-slide-sub">Re-enrollment drip · Keyword routing · AI escalation</div>
              </div>
            </div>
            <div class="d-none d-sm-flex align-items-center gap-3"><span class="hiw-slide-kpi">↑ Student re-enrollment</span><span class="hiw-slide-count">04 / 04</span></div>
          </div>
          <div class="hiw-slide-body">
            <div class="hiw-steps-row">
              <div class="hiw-step">
                <div class="hiw-step-num">1</div>
                <div class="hiw-step-label">Semester end or re-enrollment window</div>
                <div class="hiw-step-desc">Follow-up schedule set in Salesforce</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">2</div>
                <div class="hiw-step-label">Weekly check-in SMS sent</div>
                <div class="hiw-step-desc">Personalized - tracking engagement or wellbeing</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">3</div>
                <div class="hiw-step-label">Student replies RETURNING, UNSURE, or HELP</div>
                <div class="hiw-step-desc">Keyword routing handles each response automatically</div>
              </div>
              <div class="hiw-step">
                <div class="hiw-step-num">4</div>
                <div class="hiw-step-label">At-risk students flagged instantly</div>
                <div class="hiw-step-desc">Alert to advisor + case created in Salesforce</div>
              </div>
            </div>
          </div>
          <div class="hiw-slide-foot">
            <div class="hiw-slide-foot-dot"></div><span>AI detects non-response · Escalates to advisor · Case auto-created in Salesforce</span>
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
    <div style="display:inline-flex;align-items:center;gap:7px;background:rgba(0,87,184,.18);border:1px solid rgba(0,87,184,.35);border-radius:20px;padding:5px 14px;font-size:10px;font-weight:700;color:rgba(120,170,255,.9);letter-spacing:.07em;text-transform:uppercase;margin-bottom:20px">⚡ AI Use Case · Higher Education</div>
    <h2 style="font-size:clamp(22px,3vw,32px);font-weight:800;color:#fff;letter-spacing:-1px;line-height:1.15;margin-bottom:12px">AI-Powered Real-Time<br><span style="color:#5B9BD5">Student Support. 24/7</span></h2>
    <p style="font-size:15px;color:rgba(255,255,255,.48);line-height:1.7;max-width:560px;margin-bottom:36px">High inbound student query volume overwhelms admissions and advising teams - especially outside office hours. 360 SMS AI agents handle it all inside Salesforce: FAQs, enrollment queries, advisor routing, and urgent case escalation - automatically.</p>
    <div class="row g-3 mb-4">
      <div class="col-12 col-md-4">
        <div class="ai-agent-card">
          <div class="aa-icon"><i class="bi bi-robot fs-4"></i></div>
          <div class="aa-title">AI Chatbot</div>
          <div class="aa-desc">Automate student conversations 24/7. Answer FAQs, confirm enrollment deadlines, handle program queries, and engage prospects across SMS and WhatsApp - all inside Salesforce.</div><span class="aa-result">24/7 · zero staff overhead</span>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="ai-agent-card">
          <div class="aa-icon"><i class="bi bi-soundwave fs-4"></i></div>
          <div class="aa-title">Sentiment Detection &amp; Advisor Routing</div>
          <div class="aa-desc">AI detects urgency and student sentiment in real time. Routine queries are handled automatically; distressed or high-priority students are flagged and routed instantly to a human advisor.</div><span class="aa-result">Urgent cases never missed</span>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="ai-agent-card">
          <div class="aa-icon"><i class="bi bi-telephone-fill fs-4"></i></div>
          <div class="aa-title">AI Voice Agent</div>
          <div class="aa-desc">Manage inbound student calls with natural AI conversations. Qualify intent, handle enrollment queries, and escalate to staff when needed - no IVR menus, no hold music, no missed calls.</div><span class="aa-result">Inbound calls handled 24/7</span>
        </div>
      </div>
    </div>
    <div style="background:rgba(0,87,184,.15);border:1px solid rgba(0,87,184,.3);border-radius:10px;padding:20px 24px;display:flex;align-items:center;justify-content:space-between;gap:20px;flex-wrap:wrap">
      <div>
        <div style="font-size:14px;font-weight:700;color:#fff;margin-bottom:3px">All AI agents run natively inside Salesforce - no external tools, no extra logins.</div>
        <div style="font-size:12px;color:rgba(255,255,255,.4)">Every conversation is auto-logged to the student record. Data stays in your Salesforce org.</div>
      </div>
      <a href="<?php echo home_url(); ?>/360sms-for-agentforce/" style="background:var(--sf);color:#fff;border:none;border-radius:7px;padding:11px 22px;font-size:13px;font-weight:700;cursor:pointer;white-space:nowrap;text-decoration:none;display:inline-flex;align-items:center">See AI in action →</a>
    </div>
  </div>
</div>

<!-- TCPA COMPLIANCE -->
<section class="sec">
  <div class="container-xl">
    <div class="row align-items-center g-4 g-lg-5">
      <div class="col-12 col-lg-6">
        <div class="comp-badge"><i class="bi bi-shield-lock-fill"></i> TCPA-Compliant by Design</div>
        <div class="lbl">Security &amp; Compliance</div>
        <h2 class="sec-h">Aligning with compliance<br>requirements - by design</h2>
        <p class="sec-sub mb-0">360 SMS is architected so student data <strong>never touches our servers</strong>. Everything runs inside your own Salesforce cloud - the infrastructure your team already trusts.</p>
        <div class="comp-pts">
          <div class="comp-pt">
            <div class="comp-ic"><i class="bi bi-database-fill-slash"></i></div>
            <div>
              <div class="comp-th">Zero external data storage</div>
              <div class="comp-tp">All data hosted on your Salesforce cloud instance - 360 SMS never stores student data on its own servers.</div>
            </div>
          </div>
          <div class="comp-pt">
            <div class="comp-ic"><i class="bi bi-lock-fill"></i></div>
            <div>
              <div class="comp-th">TLS-encrypted API callouts</div>
              <div class="comp-tp">Every callout from Salesforce to messaging providers is TLS-encrypted, protecting data in transit end-to-end.</div>
            </div>
          </div>
          <div class="comp-pt">
            <div class="comp-ic"><i class="bi bi-shield-fill-check"></i></div>
            <div>
              <div class="comp-th">HTTP Basic &amp; Digest Authentication</div>
              <div class="comp-tp">360 SMS supports HTTP Basic and Digest Auth to protect every API request from unauthorized access.</div>
            </div>
          </div>
          <div class="comp-pt">
            <div class="comp-ic"><i class="bi bi-check-circle-fill"></i></div>
            <div>
              <div class="comp-th">Double Opt-In &amp; Opt-Out consent management</div>
              <div class="comp-tp">Use the 360 SMS App's Opt-In addon to capture consent and initiate the conversation - essential for any compliant college texting service.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6">
        <div class="comp-visual">
          <div style="font-size:12px;font-weight:700;color:var(--ink);margin-bottom:3px">TCPA-Compliant Architecture</div>
          <div style="font-size:11px;color:var(--ink3);margin-bottom:12px">How student data stays protected end-to-end</div>
          <div class="hck-row">
            <div class="hck">✓</div> Student data stored in your Salesforce org
          </div>
          <div class="hck-row">
            <div class="hck">✓</div> TLS-encrypted callouts - data protected in transit
          </div>
          <div class="hck-row">
            <div class="hck">✓</div> No student data stored on 360 SMS servers - ever
          </div>
          <div class="hck-row">
            <div class="hck">✓</div> HTTP Basic + Digest Auth on all API requests
          </div>
          <div class="hck-row">
            <div class="hck">✓</div> Double Opt-In / Opt-Out consent flows built in
          </div>
          <div class="hck-row">
            <div class="hck">✓</div> All conversations auto-logged to student record
          </div>
          <div style="background:var(--sf);border-radius:8px;padding:12px 14px;margin-top:4px">
            <div style="font-size:12px;font-weight:700;color:#fff;margin-bottom:3px">Salesforce TCPA Compliance</div>
            <div style="font-size:11px;color:rgba(255,255,255,.7)">360 SMS runs entirely within your Salesforce environment - inheriting all existing compliance, audit, and data controls.</div>
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
    <h2 class="sec-h mb-1">Hear from education teams using 360 SMS</h2>
    <p class="sec-sub">Real outcomes from real students and higher education organizations.</p>
    <div class="g-3">
      <div class="row justify-content-center">

        <!-- Empty column for center alignment on desktop 
      <div class="col-md-2 d-none d-md-block"></div>-->

        <!-- Video 1 -->
        <div class="col-12 col-sm-6 col-md-6">
          <div class="testi-card">

            <div class="testi-thumb p-0 overflow-hidden">
              <iframe
                width="100%"
                height="250"
                src="https://www.youtube.com/embed/vvDxMUZh450?controls=0&rel=0"
                title="Lindsay Fairchild | BISK Education | Salesforce Administrator"
                frameborder="0"
                allowfullscreen>
              </iframe>
            </div>

            <div class="testi-body">
              <div class="testi-name">Lindsay Fairchild</div>
              <div class="testi-org">
                BISK Education · Salesforce Administrator
              </div>
            </div>

          </div>
        </div>

        <!-- Video 2 -->
        <div class="col-12 col-sm-6 col-md-6">
          <div class="testi-card">

            <div class="testi-thumb p-0 overflow-hidden">
              <iframe
                width="100%"
                height="250"
                src="https://www.youtube.com/embed/Pg05_q72m3U?controls=0&rel=0"
                title="Hayes Hicken | Waterford"
                frameborder="0"
                allowfullscreen>
              </iframe>
            </div>

            <div class="testi-body">
              <div class="testi-name">Hayes Hicken</div>
              <div class="testi-org">Waterford</div>
            </div>

          </div>
        </div>

        <!-- Empty column for center alignment on desktop
      <div class="col-md-2 d-none d-md-block"></div> -->

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