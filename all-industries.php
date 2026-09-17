<?php
/*
Template Name:All Industries
*/
get_header('sms');
?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/industry.css">
<style>
/* ── BREADCRUMB ── */
.bc{background:#fff;border-bottom:1px solid var(--bdr);padding:9px 0}
.bc-wrap{font-size:12px;color:var(--ink3)}
.bc-wrap a{color:var(--sf);text-decoration:none}

/* ── HERO ── */
.hero{background:linear-gradient(145deg,#E8F0FB 0%,#EEF4FF 45%,#F7F9FF 75%,#F0F5FF 100%);padding:44px 0}
.hero-eyebrow{display:inline-flex;align-items:center;gap:7px;background:#E8F0FB;border:1px solid #CCE0F7;border-radius:20px;padding:5px 14px;font-size:11px;font-weight:700;color:var(--sf);margin-bottom:22px;letter-spacing:.04em;text-transform:uppercase}
.ey-dot{width:6px;height:6px;border-radius:50%;background:var(--sf);animation:pulse 2s infinite;flex-shrink:0;display:inline-block}
.hero-h1{font-size:clamp(32px,5vw,48px);font-weight:800;color:var(--ink);letter-spacing:-1.8px;line-height:1.06;margin-bottom:18px}
.hero-h1 em{color:var(--sf);font-style:normal}
.hero-sub{font-size:15px;color:var(--ink2);line-height:1.72;margin-bottom:32px}
.btn-hero-pri{padding:12px 24px;background:var(--sf);color:#fff;font-size:13px;font-weight:700;border-radius:7px;text-decoration:none;display:inline-flex;align-items:center;gap:6px;transition:opacity .15s;border:none}
.btn-hero-pri:hover{opacity:.88;color:#fff}
.btn-hero-sec{padding:12px 20px;border:1.5px solid var(--bdr);background:#fff;color:var(--ink);font-size:13px;font-weight:500;border-radius:7px;text-decoration:none;display:inline-flex;align-items:center;gap:6px;transition:border-color .15s}
.btn-hero-sec:hover{border-color:#999;color:var(--ink)}
.stars-gold{color:#F59E0B;letter-spacing:1px;font-size:13px}

/* ── DASH PANEL ── */
.dash-panel{background:#fff;border:1px solid var(--bdr);border-radius:16px;overflow:hidden;box-shadow:0 8px 40px rgba(0,87,184,.12),0 2px 8px rgba(0,0,0,.06)}
.dash-hdr{background:#0057b8;padding:14px 18px;display:flex;align-items:center;justify-content:space-between}
.dash-hdr-app{font-size:13px;font-weight:700;color:#fff}
.dash-live-badge{display:flex;align-items:center;gap:5px;background:rgba(91,158,245,.15);border:1px solid rgba(91,158,245,.3);border-radius:20px;padding:4px 12px;font-size:10px;font-weight:700;color:#5B9EF5}
.dash-live-dot{width:6px;height:6px;border-radius:50%;background:#5B9EF5;animation:pulse 1.5s infinite;display:inline-block}
.dash-stats{display:grid;grid-template-columns:repeat(4,1fr);border-bottom:1px solid var(--bdr)}
.dash-stat{padding:13px 14px;border-right:1px solid var(--bdr)}
.dash-stat:last-child{border-right:none}
.dash-stat-val{font-size:20px;font-weight:800;color:var(--ink);letter-spacing:-0.5px;line-height:1}
.dash-stat-lbl{font-size:10px;color:var(--ink3);margin-top:3px}
.dash-stat-chg{font-size:9px;font-weight:700;color:#16a34a;margin-top:3px}
.dash-industries{padding:12px 14px;border-bottom:1px solid var(--bdr);background:var(--bg2)}
.dash-ind-label{font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;color:var(--ink4);margin-bottom:8px}
.dash-ind-pills{display:flex;flex-wrap:wrap;gap:5px}
.dash-ind-pill{padding:5px 11px;border-radius:20px;border:1.5px solid var(--bdr);font-size:11px;font-weight:600;color:var(--ink3);background:#fff;cursor:pointer;transition:all .15s;display:inline-flex;align-items:center;gap:4px;white-space:nowrap}
.dash-ind-pill:hover{border-color:var(--sf);color:var(--sf)}
.dash-ind-pill.active{background:var(--sf);color:#fff;border-color:var(--sf)}
.dash-conv-hdr{padding:11px 16px;border-bottom:1px solid var(--bdr);display:flex;align-items:center;justify-content:space-between;background:#fff}
.dash-conv-contact{font-size:12px;font-weight:700;color:var(--ink)}
.dash-conv-sub{font-size:10px;color:var(--ink3);margin-top:2px}
.dash-conv-badge{font-size:9px;font-weight:700;padding:3px 9px;border-radius:20px;background:var(--sf-l);color:var(--sf);border:1px solid #CCE0F7;white-space:nowrap}
.dash-conv-body{padding:16px;display:flex;flex-direction:column;gap:9px;background:#fff}
.dc-out{align-self:flex-end;max-width:80%}
.dc-in{align-self:flex-start;max-width:80%}
.dc-bub-out{background:var(--sf);color:#fff;padding:9px 13px;border-radius:13px 13px 3px 13px;font-size:12px;line-height:1.5}
.dc-bub-in{background:var(--bg2);border:1px solid var(--bdr);padding:9px 13px;border-radius:13px 13px 13px 3px;font-size:12px;line-height:1.5;color:var(--ink)}
.dc-meta{font-size:9px;color:var(--ink4);margin-top:3px}
.dc-meta.r{text-align:right}
.dc-confirm{font-size:10px;font-weight:700;color:#16a34a;background:#f0fdf4;border:1px solid #bbf7d0;border-radius:7px;padding:7px 11px;display:flex;align-items:center;gap:5px}
.dash-composer{border-top:1px solid var(--bdr);padding:10px 14px;display:flex;align-items:center;gap:8px;background:#fff}
.dash-composer-input{flex:1;background:var(--bg2);border:1px solid var(--bdr);border-radius:20px;padding:8px 14px;font-size:11px;color:var(--ink3);font-family:inherit}
.dash-send-btn{padding:7px 16px;background:var(--sf);border-radius:20px;font-size:11px;font-weight:700;color:#fff;cursor:pointer;white-space:nowrap}

/* ── PROOF STRIP ── */
.proof{border-top:1px solid var(--bdr);border-bottom:1px solid var(--bdr);padding:16px 0}
.proof-item{display:flex;align-items:center;gap:8px;padding:10px 18px;border-right:1px solid var(--bdr)}
.proof-item:last-child{border-right:none}
.proof-n{font-size:22px;font-weight:800;color:var(--ink);letter-spacing:-1px;line-height:1}
.proof-l{font-size:11px;color:var(--ink3);line-height:1.4}

/* ── SECTIONS ── */
.sec{padding:56px 0}
.sec-alt{background:var(--bg2)}
.lbl{font-size:10px;font-weight:700;letter-spacing:.1em;text-transform:uppercase;color:var(--ink3);margin-bottom:8px}
.sec-h{font-size:26px;font-weight:800;color:var(--ink);margin-bottom:10px;letter-spacing:-.5px;line-height:1.2}
.sec-sub{font-size:14px;color:var(--ink2);line-height:1.6;margin-bottom:28px}

/* ── SEARCH & FILTER ── */
.ind-search-wrap{position:relative;margin-bottom:16px;max-width:400px}
.ind-search-icon{position:absolute;left:13px;top:50%;transform:translateY(-50%);font-size:13px;pointer-events:none;color:var(--ink4)}
.ind-search{width:100%;padding:10px 16px 10px 38px;border:1.5px solid var(--bdr);border-radius:24px;font-size:13px;color:var(--ink);outline:none;transition:border-color .15s;background:#fff;font-family:inherit}
.ind-search:focus{border-color:var(--sf);box-shadow:0 0 0 3px rgba(0,87,184,.08)}
.ind-search::placeholder{color:var(--ink4)}
.fpill{padding:7px 15px;border-radius:20px;border:1.5px solid var(--bdr);font-size:12px;font-weight:600;color:var(--ink3);background:#fff;cursor:pointer;transition:all .15s;white-space:nowrap;display:inline-flex;align-items:center;gap:5px}
.fpill:hover{border-color:var(--sf);color:var(--sf)}
.fpill.on{background:var(--sf);color:#fff;border-color:var(--sf)}
.ind-count{font-size:11px;color:var(--ink4);margin-top:12px;font-weight:500}

/* ── INDUSTRY CARDS ── */
.ind-card{background:#fff;border:1px solid var(--bdr);border-radius:12px;text-decoration:none;color:inherit;transition:border-color .18s,box-shadow .18s,transform .18s;display:flex;flex-direction:column;overflow:hidden;position:relative;height:100%}
.ind-card:hover{border-color:var(--accent,var(--sf));box-shadow:var(--sh-lg);transform:translateY(-3px)}
.ind-card-accent-bar{height:3px;background:var(--accent,var(--sf));width:0;transition:width .22s ease}
.ind-card:hover .ind-card-accent-bar{width:100%}
.ind-card-body{padding:20px 20px 14px;flex:1}
.ind-card-top{display:flex;align-items:flex-start;justify-content:space-between;margin-bottom:12px}
.ind-icon{width:44px;height:44px;border-radius:10px;display:flex;align-items:center;justify-content:center;font-size:21px;flex-shrink:0;background:#0057B8!important}
.ind-icon .bi{color:#fff!important;font-size:20px}
.ind-arr{width:28px;height:28px;border-radius:50%;border:1px solid var(--bdr);display:flex;align-items:center;justify-content:center;font-size:11px;color:var(--ink4);transition:all .18s}
.ind-card:hover .ind-arr{background:var(--accent,var(--sf));border-color:var(--accent,var(--sf));color:#fff}
.ind-name{font-size:15px;font-weight:800;color:var(--ink);margin-bottom:6px;letter-spacing:-.3px;line-height:1.2}
.ind-desc{font-size:12px;color:var(--ink3);line-height:1.55;margin-bottom:12px}
.ind-tags{display:flex;flex-wrap:wrap;gap:5px}
.ind-tag{font-size:9px;font-weight:700;padding:3px 7px;border-radius:4px;background:var(--bg2);color:var(--ink3)}
.ind-hidden{display:none!important}

/* ── HOW IT WORKS ── */
.how-row{border:1px solid var(--bdr);border-radius:12px;overflow:hidden;background:#fff}
.how-step{padding:26px 20px;border-bottom:1px solid var(--bdr)}
.how-step:last-child{border-bottom:none}
@media(min-width:768px){
  .how-row{display:grid;grid-template-columns:repeat(4,1fr)}
  .how-step{border-bottom:none;border-right:1px solid var(--bdr)}
  .how-step:last-child{border-right:none}
}
.how-num{width:32px;height:32px;border-radius:8px;background:var(--sf);color:#fff;font-size:13px;font-weight:800;display:flex;align-items:center;justify-content:center;margin-bottom:12px}
.how-title{font-size:13px;font-weight:700;color:var(--ink);margin-bottom:5px}
.how-desc{font-size:12px;color:var(--ink3);line-height:1.6}

/* ── FEATURES ── */
.feat-card{background:#fff;border:1px solid var(--bdr);border-radius:14px;padding:24px 20px 20px;display:flex;flex-direction:column;gap:12px;position:relative;overflow:hidden;transition:box-shadow .2s,transform .2s,border-color .2s;cursor:default;height:100%}
.feat-card::before{content:'';position:absolute;top:0;left:0;right:0;height:3px;background:var(--feat-clr,var(--sf));transform:scaleX(0);transform-origin:left;transition:transform .25s ease}
.feat-card:hover::before{transform:scaleX(1)}
.feat-card:hover{box-shadow:0 8px 32px rgba(0,0,0,.10);transform:translateY(-4px);border-color:var(--feat-clr,var(--sf))}
.feat-icon-wrap{width:48px;height:48px;border-radius:12px;display:flex;align-items:center;justify-content:center;font-size:22px;flex-shrink:0;background:var(--feat-bg,var(--sf-l))}
.feat-name{font-size:14px;font-weight:800;color:var(--ink);letter-spacing:-.3px;line-height:1.2}
.feat-desc{font-size:12px;color:var(--ink3);line-height:1.6;flex:1}
.feat-tag{display:inline-flex;align-items:center;gap:4px;font-size:10px;font-weight:700;color:var(--feat-clr,var(--sf));background:var(--feat-bg,var(--sf-l));padding:3px 9px;border-radius:20px;width:fit-content}
.btn-feat-all{display:inline-flex;align-items:center;gap:8px;padding:13px 28px;border:2px solid var(--sf);color:var(--sf);font-size:13px;font-weight:700;border-radius:8px;text-decoration:none;transition:background .18s,color .18s}
.btn-feat-all:hover{background:var(--sf);color:#fff}

/* ── CTA BAND ── */
.cta-band{background:var(--sf);border-radius:12px;padding:36px 44px}
.cta-h{font-size:20px;font-weight:800;color:#fff;letter-spacing:-.3px;margin-bottom:5px}
.cta-s{font-size:13px;color:rgba(255,255,255,.7)}
.btn-cta-w{padding:11px 22px;font-size:13px;font-weight:700;border-radius:7px;border:none;background:#fff;color:var(--sf);text-decoration:none;display:inline-flex;align-items:center}
.btn-cta-w:hover{color:var(--sf)}
.btn-cta-o{padding:11px 18px;font-size:13px;font-weight:700;border-radius:7px;border:2px solid rgba(255,255,255,.3);background:transparent;color:#fff;text-decoration:none;display:inline-flex;align-items:center}
.btn-cta-o:hover{color:#fff;border-color:rgba(255,255,255,.6)}

/* ── FOOTER ── */
.footer{background:#0a1e48;padding:44px 0 28px}
.foot-logo{font-size:17px;font-weight:800;color:#fff;letter-spacing:-.5px;margin-bottom:7px}
.foot-logo em{color:#5B9EF5;font-style:normal}
.foot-desc{font-size:12px;color:#555;line-height:1.6;margin-bottom:13px}
.mkt-badge{display:inline-flex;align-items:center;gap:5px;padding:5px 10px;border-radius:5px;font-size:10px;font-weight:700;width:fit-content}
.mkt-sf{background:#122a5e;color:#7ab8ff}
.mkt-zo{background:#3e1018;color:#f5a0a7}
.foot-col-h{font-size:10px;font-weight:700;letter-spacing:.07em;text-transform:uppercase;color:#555;margin-bottom:13px}
.fl{font-size:12px;color:#666;display:block;margin-bottom:7px;text-decoration:none;transition:color .15s}
.fl:hover{color:#bbb}
.foot-btm{border-top:1px solid #1a3a6b;padding-top:18px;font-size:11px;color:#444}

/* ── TESTIMONIALS ── */
.logo-placeholder{height:22px;padding:0 10px;background:var(--bdr);border-radius:4px;display:inline-flex;align-items:center;font-size:10px;font-weight:700;color:var(--ink4);white-space:nowrap;filter:grayscale(1);opacity:.5}
.review-card{background:#fff;border:1px solid var(--bdr);border-radius:12px;padding:22px;display:flex;flex-direction:column;gap:10px;transition:box-shadow .2s,transform .2s;height:100%}
.review-card:hover{box-shadow:var(--sh-lg);transform:translateY(-3px)}
.review-stars{color:#F59E0B;font-size:13px;letter-spacing:1px}
.review-txt{font-size:13px;color:var(--ink2);line-height:1.65;flex:1;font-style:italic}
.review-author{font-size:12px;font-weight:700;color:var(--ink)}
.review-role{font-size:11px;color:var(--ink3)}

/* ── MID CTA ── */
.mid-cta{background:var(--sf);border-radius:12px;padding:28px 40px;margin-top:40px}
.mid-cta strong{font-size:16px;font-weight:800;color:#fff;display:block;margin-bottom:4px}
.mid-cta span{font-size:12px;color:rgba(255,255,255,.7)}
.btn-mid-w{padding:10px 20px;background:#fff;color:var(--sf);font-size:12px;font-weight:700;border-radius:6px;text-decoration:none;display:inline-flex;align-items:center}
.btn-mid-w:hover{color:var(--sf)}
.btn-mid-o{padding:10px 18px;border:2px solid rgba(255,255,255,.35);color:#fff;font-size:12px;font-weight:700;border-radius:6px;text-decoration:none;display:inline-flex;align-items:center}
.btn-mid-o:hover{color:#fff}

/* ── RESOURCES ── */
.res-card{background:#fff;border:1px solid var(--bdr);border-radius:12px;overflow:hidden;text-decoration:none;color:inherit;transition:box-shadow .2s,transform .2s;display:flex;flex-direction:column;height:100%}
.res-card:hover{box-shadow:var(--sh-lg);transform:translateY(-3px)}
.res-img{width:100%;height:140px;background:var(--bg3);display:flex;align-items:center;justify-content:center;font-size:32px}
.res-type{font-size:9px;font-weight:700;text-transform:uppercase;letter-spacing:.08em;padding:3px 8px;border-radius:4px;display:inline-block;width:fit-content}
.res-body{padding:16px 18px 18px;display:flex;flex-direction:column;gap:8px;flex:1}
.res-date{font-size:10px;color:var(--ink4)}
.res-title{font-size:13px;font-weight:700;color:var(--ink);line-height:1.4}
.res-desc{font-size:12px;color:var(--ink3);line-height:1.55;flex:1}
.res-cta{font-size:11px;font-weight:700;color:var(--sf);margin-top:4px}

/* ── CONTACT ── */
.contact-left h2{font-size:28px;font-weight:800;color:var(--ink);letter-spacing:-.5px;line-height:1.2;margin-bottom:12px}
.contact-left p{font-size:13px;color:var(--ink2);line-height:1.65;margin-bottom:24px}
.contact-check{display:flex;align-items:center;gap:10px;font-size:13px;color:var(--ink2);margin-bottom:10px}
.contact-check span{width:20px;height:20px;border-radius:50%;background:var(--sf);color:#fff;display:flex;align-items:center;justify-content:center;font-size:10px;font-weight:700;flex-shrink:0}
.contact-form-wrap{background:#fff;border:1px solid var(--bdr);border-radius:14px;padding:28px;box-shadow:var(--sh)}
.contact-form-wrap h3{font-size:16px;font-weight:800;color:var(--ink);margin-bottom:4px}
.contact-form-wrap p{font-size:12px;color:var(--ink3);margin-bottom:20px}
.form-label{font-size:11px;font-weight:700;color:var(--ink2)}
.form-control{padding:9px 12px;border:1px solid var(--bdr);border-radius:6px;font-size:13px;color:var(--ink);font-family:inherit}
.form-control:focus{border-color:var(--sf);box-shadow:0 0 0 3px rgba(0,87,184,.1)}
.btn-form-submit{width:100%;padding:12px;background:var(--sf);color:#fff;font-size:13px;font-weight:700;border:none;border-radius:7px;cursor:pointer;letter-spacing:.03em;margin-top:4px;transition:opacity .15s}
.btn-form-submit:hover{opacity:.88}
.form-note{font-size:10px;color:var(--ink4);text-align:center;margin-top:8px}

/* Responsive tweaks */
@media(max-width:767px){
  .topbar-left,.topbar-right{font-size:10px}
  .topbar-right a{margin-left:8px}
  .crm-pill{display:none}
  .hero{padding:32px 0}
  .hero-h1{font-size:30px;letter-spacing:-1px}
  .dash-stats{grid-template-columns:repeat(2,1fr)}
  .proof-item{padding:8px 12px;border-right:none;border-bottom:1px solid var(--bdr)}
  .proof-item:last-child{border-bottom:none}
  .sec{padding:36px 0}
  .cta-band{padding:24px 20px}
  .mid-cta{padding:20px 24px}
  .contact-form-wrap{padding:20px}
}
@media(max-width:575px){
  .dash-stats{grid-template-columns:repeat(2,1fr)}
  .dash-ind-pills{gap:4px}
  .dash-ind-pill{font-size:10px;padding:4px 9px}
}
</style>


<!-- BREADCRUMB -->
<div class="bc">
  <div class="container-xl">
    <div class="bc-wrap d-flex align-items-center gap-2">
      <i class="bi bi-house-fill" style="font-size:11px;color:var(--sf)"></i>
      <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
      <span>›</span>
      <span style="color:var(--ink);font-weight:600">Industries</span>
    </div>
  </div>
</div>

<!-- HERO -->
<div class="hero">
  <div class="container-xl">
    <div class="row align-items-center g-5">
      <!-- LEFT -->
      <div class="col-lg-6">
        <div class="hero-eyebrow"><span class="ey-dot"></span> 13 Industries · Salesforce Native · No-Code</div>
        <h1 class="hero-h1">One SMS Platform.<br><em>Every Industry</em><br>You Serve.</h1>
        <p class="hero-sub">360 SMS App runs natively inside Salesforce across every sector - from healthcare to real estate, fintech to legal. No code. No middleware. No external servers.</p>
        <div class="d-flex gap-3 flex-wrap mb-3">
          <button class="open-popup-form-on-click btn-hero-pri"><i class="bi bi-building me-1"></i>Explore Industries</button>
          <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" target="_blank" class="btn-hero-sec"><i class="bi bi-calendar-check me-1"></i>Book a Demo</a>
        </div>
        <div class="d-flex align-items-center gap-3 flex-wrap" style="font-size:12px;color:var(--ink3)">
          <span class="stars-gold">★★★★★</span>
          <strong style="color:var(--ink)">4.9 / 5.0</strong>
          <span>·</span><span><strong style="color:var(--ink)">1,200+</strong> verified reviews</span>
          <span>·</span><span><strong style="color:var(--ink)">14+</strong> Years with Salesforce</span>
        </div>
      </div>
      <!-- RIGHT: Dashboard Panel -->
      <div class="col-lg-6">
        <div class="dash-panel">
          <div class="dash-hdr">
            <div><div class="dash-hdr-app"><i class="bi bi-lightning-charge-fill me-1"></i>360 SMS App · Salesforce</div></div>
            <div class="dash-live-badge"><span class="dash-live-dot"></span> 247 active</div>
          </div>
          <div class="dash-industries">
            <div class="dash-ind-label">Select industry</div>
            <div class="dash-ind-pills">
              <div class="dash-ind-pill active" onclick="switchFeed('realestate',this)">🏠 Real Estate</div>
              <div class="dash-ind-pill" onclick="switchFeed('edtech',this)">🎓 Education</div>
              <div class="dash-ind-pill" onclick="switchFeed('fintech',this)">💳 Finance</div>
              <div class="dash-ind-pill" onclick="switchFeed('healthcare',this)">🏥 Healthcare</div>
              <div class="dash-ind-pill" onclick="switchFeed('nonprofit',this)">🤝 Non-Profit</div>
            </div>
          </div>
          <div class="dash-conv-hdr">
            <div>
              <div class="dash-conv-contact" id="dash-contact-name">Mark Williams - Buyer Lead</div>
              <div class="dash-conv-sub" id="dash-contact-sub">Salesforce CRM · Century21</div>
            </div>
            <div class="dash-conv-badge" id="dash-ind-badge">Real Estate</div>
          </div>
          <div class="dash-conv-body" id="dash-conv-body">
            <div class="dc-out"><div class="dc-bub-out">Hi Mark! The property at 45 Oak Ave just dropped to $485K. Want to book a viewing this week? Reply YES.</div><div class="dc-meta r">10:20 AM · Delivered ✓</div></div>
            <div class="dc-in"><div class="dc-bub-in">YES, Friday 2pm works!</div><div class="dc-meta">Mark · 10:22 AM</div></div>
            <div class="dc-out"><div class="dc-bub-out">Booked! 45 Oak Ave, Friday 2PM. See you then 🏠</div><div class="dc-meta r">10:22 AM · Logged ✓</div></div>
            <div class="dc-confirm">✅ Showing confirmed · Opportunity updated in Salesforce</div>
          </div>
          <div class="dash-composer">
            <div class="dash-composer-input">Type a message…</div>
            <div class="dash-send-btn"><i class="bi bi-send-fill me-1"></i>Send</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- PROOF STRIP -->
<div class="proof bg-white">
  <div class="container-xl">
    <div class="row g-0">
      <div class="col-6 col-md proof-item">
        
        <div><span class="proof-n">57%</span><div class="proof-l">Higher<br>Engagement</div></div>
      </div>
      <div class="col-6 col-md proof-item">
        
        <div><span class="proof-n">45%</span><div class="proof-l">More<br>Sales</div></div>
      </div>
      <div class="col-6 col-md proof-item">
        
        <div><span class="proof-n">40%</span><div class="proof-l">More<br>Retention</div></div>
      </div>
      <div class="col-6 col-md proof-item">
        
        <div><span class="proof-n">AI</span><div class="proof-l">Powered</div></div>
      </div>
      <div class="col-12 col-md proof-item">
        <span style="display:inline-flex;align-items:center;padding:7px 16px;border:1.5px solid #CCE0F7;border-radius:30px;background:#E8F0FB;font-size:13px;font-weight:700;color:var(--sf);white-space:nowrap">
          AgentExchange · #1 Rated
        </span>
      </div>
    </div>
  </div>
</div>

<!-- INDUSTRY GRID -->
<section class="sec sec-alt" id="industries">
  <div class="container-xl">
    <div class="mb-4">
      <div class="lbl"><i class="bi bi-building me-1"></i>All Industries</div>
      <h2 class="sec-h">Pick your sector. See your use cases.</h2>
      <p class="sec-sub" style="max-width:520px">Every industry page is built with sector-specific workflows, compliance requirements, and Salesforce automation—not generic copy that applies to all industries.</p>
      <!-- Filter bar -->
      <!--<div class="mb-3">
        <div class="ind-search-wrap">
          <span class="ind-search-icon"><i class="bi bi-search" style="color:#0057B8"></i></span>
          <input type="text" class="ind-search" id="ind-search" placeholder="Search industries…" oninput="indSearch(this.value)">
        </div>
        <div class="d-flex flex-wrap gap-2">
          <button class="fpill on" data-f="all" onclick="setF('all',this)"><i class="bi bi-grid-fill me-1"></i>All</button>
          <button class="fpill" data-f="scheduling" onclick="setF('scheduling',this)"><i class="bi bi-calendar3 me-1"></i>Scheduling</button>
          <button class="fpill" data-f="finance" onclick="setF('finance',this)"><i class="bi bi-bank me-1"></i>Finance</button>
          <button class="fpill" data-f="alerts" onclick="setF('alerts',this)"><i class="bi bi-bell-fill me-1"></i>Alerts</button>
          <button class="fpill" data-f="pipeline" onclick="setF('pipeline',this)"><i class="bi bi-funnel-fill me-1"></i>Pipeline</button>
        </div>
        <div class="ind-count" id="ind-count">Showing all 13 industries</div>
      </div>-->
    </div>

    <div class="row g-4" id="ind-grid">

      <div class="col-12 col-sm-6 col-lg-4 ind-card-col" data-name="healthcare wellness hipaa" data-tags="scheduling">
        <a href="<?php echo esc_url(home_url('/')); ?>healthcare-wellness/" class="ind-card" style="--accent:#0057B8">
          <div class="ind-card-accent-bar"></div>
          <div class="ind-card-body">
            <div class="ind-card-top"><div class="ind-icon"><i class="bi bi-hospital-fill"></i></div><div class="ind-arr"><i class="bi bi-arrow-right"></i></div></div>
            <div class="ind-name">Healthcare</div>
            <div class="ind-desc">HIPAA-compliant SMS inside Salesforce Health Cloud - appointment reminders, care plan follow-ups, billing nudges, AI-powered 24/7 support.</div>
            <div class="ind-tags"><span class="ind-tag"><i class="bi bi-shield-check me-1" style="font-size:8px"></i>HIPAA</span><span class="ind-tag">Appointment Reminders</span><span class="ind-tag">Care Plans</span></div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-4 ind-card-col" data-name="real estate property" data-tags="pipeline">
        <a href="<?php echo esc_url(home_url('/')); ?>real-estate/" class="ind-card" style="--accent:#0057B8">
          <div class="ind-card-accent-bar"></div>
          <div class="ind-card-body">
            <div class="ind-card-top"><div class="ind-icon"><i class="bi bi-house-fill"></i></div><div class="ind-arr"><i class="bi bi-arrow-right"></i></div></div>
            <div class="ind-name">Real Estate</div>
            <div class="ind-desc">Instantly follow up on property inquiries, automate showing reminders, and nurture cold leads with drip campaigns inside Salesforce CRM.</div>
            <div class="ind-tags"><span class="ind-tag">Lead Nurturing</span><span class="ind-tag">Showings</span><span class="ind-tag">Drip SMS</span></div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-4 ind-card-col" data-name="fintech finance banking" data-tags="finance">
        <a href="<?php echo esc_url(home_url('/')); ?>finance/" class="ind-card" style="--accent:#0057B8">
          <div class="ind-card-accent-bar"></div>
          <div class="ind-card-body">
            <div class="ind-card-top"><div class="ind-icon"><i class="bi bi-credit-card-fill"></i></div><div class="ind-arr"><i class="bi bi-arrow-right"></i></div></div>
            <div class="ind-name">FinTech</div>
            <div class="ind-desc">Transaction alerts, OTP delivery, fraud notifications, and KYC follow-ups at scale - compliant and fully inside Salesforce Financial Services Cloud.</div>
            <div class="ind-tags"><span class="ind-tag">Fraud Alerts</span><span class="ind-tag">KYC</span><span class="ind-tag">Compliance</span></div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-4 ind-card-col" data-name="edtech education learning" data-tags="alerts">
        <a href="<?php echo esc_url(home_url('/')); ?>education-academics/" class="ind-card" style="--accent:#1565C0">
          <div class="ind-card-accent-bar"></div>
          <div class="ind-card-body">
            <div class="ind-card-top"><div class="ind-icon"><i class="bi bi-mortarboard-fill"></i></div><div class="ind-arr"><i class="bi bi-arrow-right"></i></div></div>
            <div class="ind-name">EdTech</div>
            <div class="ind-desc">Automate enrollment reminders, course updates, payment nudges, and re-engagement campaigns - boosting admissions without adding headcount.</div>
            <div class="ind-tags"><span class="ind-tag">Enrollment</span><span class="ind-tag">Course Alerts</span><span class="ind-tag">Re-engagement</span></div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-4 ind-card-col" data-name="non profit nonprofit charity" data-tags="alerts">
        <a href="<?php echo esc_url(home_url('/')); ?>non-profit/" class="ind-card" style="--accent:#0057B8">
          <div class="ind-card-accent-bar"></div>
          <div class="ind-card-body">
            <div class="ind-card-top"><div class="ind-icon"><i class="bi bi-heart-fill"></i></div><div class="ind-arr"><i class="bi bi-arrow-right"></i></div></div>
            <div class="ind-name">Non-Profit</div>
            <div class="ind-desc">Drive donor engagement, volunteer coordination, event reminders, and fundraising campaigns with 2-way SMS inside Salesforce NPSP.</div>
            <div class="ind-tags"><span class="ind-tag">Donor SMS</span><span class="ind-tag">Volunteers</span><span class="ind-tag">Fundraising</span></div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-4 ind-card-col" data-name="professional services consulting" data-tags="scheduling">
        <a href="<?php echo esc_url(home_url('/')); ?>professional-services/" class="ind-card" style="--accent:#0057B8">
          <div class="ind-card-accent-bar"></div>
          <div class="ind-card-body">
            <div class="ind-card-top"><div class="ind-icon"><i class="bi bi-briefcase-fill"></i></div><div class="ind-arr"><i class="bi bi-arrow-right"></i></div></div>
            <div class="ind-name">Professional Services</div>
            <div class="ind-desc">Book consultations, send contract follow-ups, automate proposal reminders, and keep clients updated on project milestones.</div>
            <div class="ind-tags"><span class="ind-tag">Bookings</span><span class="ind-tag">Contracts</span><span class="ind-tag">Milestones</span></div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-4 ind-card-col" data-name="isp internet service provider" data-tags="alerts">
        <a href="<?php echo esc_url(home_url('/')); ?>internet-service-providers/" class="ind-card" style="--accent:#0057B8">
          <div class="ind-card-accent-bar"></div>
          <div class="ind-card-body">
            <div class="ind-card-top"><div class="ind-icon"><i class="bi bi-wifi"></i></div><div class="ind-arr"><i class="bi bi-arrow-right"></i></div></div>
            <div class="ind-name">ISP</div>
            <div class="ind-desc">Send outage alerts, installation reminders, and payment nudges to thousands - automated from Salesforce. Zero manual effort.</div>
            <div class="ind-tags"><span class="ind-tag">Outage Alerts</span><span class="ind-tag">Bulk SMS</span><span class="ind-tag">Payments</span></div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-4 ind-card-col" data-name="mortgage lending loans" data-tags="finance">
        <a href="<?php echo esc_url(home_url('/')); ?>mortgage/" class="ind-card" style="--accent:#0057B8">
          <div class="ind-card-accent-bar"></div>
          <div class="ind-card-body">
            <div class="ind-card-top"><div class="ind-icon"><i class="bi bi-bank2"></i></div><div class="ind-arr"><i class="bi bi-arrow-right"></i></div></div>
            <div class="ind-name">Mortgage</div>
            <div class="ind-desc">Loan application follow-ups, document reminders, pre-approval notifications - every stage automated inside Salesforce.</div>
            <div class="ind-tags"><span class="ind-tag">Loan Follow-up</span><span class="ind-tag">Doc Reminders</span><span class="ind-tag">Pre-approval</span></div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-4 ind-card-col" data-name="insurance claims renewals" data-tags="finance">
        <a href="<?php echo esc_url(home_url('/')); ?>insurance/" class="ind-card" style="--accent:#0057B8">
          <div class="ind-card-accent-bar"></div>
          <div class="ind-card-body">
            <div class="ind-card-top"><div class="ind-icon"><i class="bi bi-shield-fill-check"></i></div><div class="ind-arr"><i class="bi bi-arrow-right"></i></div></div>
            <div class="ind-name">Insurance</div>
            <div class="ind-desc">Policy renewals, claims updates, quote follow-ups, and cross-sell campaigns - reducing churn inside Salesforce Insurance Cloud.</div>
            <div class="ind-tags"><span class="ind-tag">Renewals</span><span class="ind-tag">Claims</span><span class="ind-tag">Retention</span></div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-4 ind-card-col" data-name="recruitment hiring staffing" data-tags="scheduling">
        <a href="<?php echo esc_url(home_url('/')); ?>recruitment/" class="ind-card" style="--accent:#0057B8">
          <div class="ind-card-accent-bar"></div>
          <div class="ind-card-body">
            <div class="ind-card-top"><div class="ind-icon"><i class="bi bi-people-fill"></i></div><div class="ind-arr"><i class="bi bi-arrow-right"></i></div></div>
            <div class="ind-name">Recruitment</div>
            <div class="ind-desc">Candidate SMS, interview scheduling, offer follow-ups - cut time-to-hire without adding admin workload</div>
            <div class="ind-tags"><span class="ind-tag">Candidates</span><span class="ind-tag">Scheduling</span><span class="ind-tag">Offers</span></div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-4 ind-card-col" data-name="legal law firm attorneys" data-tags="scheduling">
        <a href="<?php echo esc_url(home_url('/')); ?>legal/" class="ind-card" style="--accent:#0057B8">
          <div class="ind-card-accent-bar"></div>
          <div class="ind-card-body">
            <div class="ind-card-top"><div class="ind-icon"><i class="bi bi-bank"></i></div><div class="ind-arr"><i class="bi bi-arrow-right"></i></div></div>
            <div class="ind-name">Legal</div>
            <div class="ind-desc">Hearing reminders, document follow-ups, consultation confirmations - with full audit trails inside Salesforce Legal CRM.</div>
            <div class="ind-tags"><span class="ind-tag">Hearings</span><span class="ind-tag">Client Updates</span><span class="ind-tag">Audit Trail</span></div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-4 ind-card-col" data-name="sales pipeline crm" data-tags="pipeline">
        <a href="<?php echo esc_url(home_url('/')); ?>sales/" class="ind-card" style="--accent:#0057B8">
          <div class="ind-card-accent-bar"></div>
          <div class="ind-card-body">
            <div class="ind-card-top"><div class="ind-icon"><i class="bi bi-graph-up-arrow"></i></div><div class="ind-arr"><i class="bi bi-arrow-right"></i></div></div>
            <div class="ind-name">Sales</div>
            <div class="ind-desc">Lead follow-up in seconds, pipeline nudges, CTI follow-ups, personalized bulk SMS - all auto-logged in Salesforce Sales Cloud.</div>
            <div class="ind-tags"><span class="ind-tag">Pipeline</span><span class="ind-tag">CTI</span><span class="ind-tag">Bulk SMS</span></div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-4 ind-card-col" data-name="marketing campaigns sms" data-tags="pipeline">
        <a href="<?php echo esc_url(home_url('/')); ?>marketing/" class="ind-card" style="--accent:#0057B8">
          <div class="ind-card-accent-bar"></div>
          <div class="ind-card-body">
            <div class="ind-card-top"><div class="ind-icon"><i class="bi bi-megaphone-fill"></i></div><div class="ind-arr"><i class="bi bi-arrow-right"></i></div></div>
            <div class="ind-name">Marketing</div>
            <div class="ind-desc">Multi-channel campaigns, audience segmentation, event-triggered messages, delivery analytics - inside Salesforce Marketing Cloud.</div>
            <div class="ind-tags"><span class="ind-tag">Campaigns</span><span class="ind-tag">Segmentation</span><span class="ind-tag">Analytics</span></div>
          </div>
        </a>
      </div>

      <div class="col-12 col-sm-6 col-lg-4 ind-card-col" data-name="service customer support case management" data-tags="alerts">
        <a href="<?php echo esc_url(home_url('/')); ?>service/" class="ind-card" style="--accent:#0057B8">
          <div class="ind-card-accent-bar"></div>
          <div class="ind-card-body">
            <div class="ind-card-top"><div class="ind-icon"><i class="bi bi-headset"></i></div><div class="ind-arr"><i class="bi bi-arrow-right"></i></div></div>
            <div class="ind-name">Service</div>
            <div class="ind-desc">Case status updates, proactive outage and delay alerts, resolution confirmations, and CSAT surveys - every reply auto-logged to the Case inside Salesforce Service Cloud.</div>
            <div class="ind-tags"><span class="ind-tag">Case Updates</span><span class="ind-tag">CSAT Surveys</span><span class="ind-tag">Two-way SMS</span></div>
          </div>
        </a>
      </div>

    </div><!-- /row #ind-grid -->
  </div>
</section>

<!-- CTA BAND -->
<section class="sec" style="padding-top:32px;padding-bottom:32px" id="cta-band">
  <div class="container-xl">
    <div class="cta-band d-flex flex-wrap align-items-center justify-content-between gap-4">
      <div>
        <div style="font-size:10px;font-weight:700;text-transform:uppercase;letter-spacing:.1em;color:rgba(255,255,255,.5);margin-bottom:7px">
          <i class="bi bi-send-fill me-1"></i>Salesforce SMS · All Industries
        </div>
        <div class="cta-h">Ready to see 360 SMS in your industry?</div>
        <div class="cta-s">Free 20-minute demo. Industry-specific workflows. Live inside your Salesforce org.</div>
      </div>
      <div class="d-flex gap-3 flex-wrap">
        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" target="_blank" class="btn-cta-w"><i class="bi bi-calendar-event me-2"></i>Book a Demo</a>
        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" target="_blank" class="btn-cta-o"><i class="bi bi-box-arrow-up-right me-2"></i>View on AgentExchange</a>
      </div>
    </div>
  </div>
</section>

<!-- CHANNELS -->
<section class="sec sec-alt">
  <div class="container-xl">
    <div class="text-center mb-4">
      <div class="lbl"><i class="bi bi-broadcast me-1"></i>Messaging Channels</div>
      <h2 class="sec-h">15+ channels. One Salesforce inbox.</h2>
      <p class="sec-sub mx-auto" style="max-width:500px">Meet your customers where they are - every message auto-logged in Salesforce, fully tracked and replied to from one place.</p>
    </div>
    <div class="row g-4">
      <div class="col-12 col-sm-4 col-xl-4">
        <div class="feat-card" style="--feat-clr:#0057B8;--feat-bg:#E8F0FB">
          <div class="feat-icon-wrap"><i class="bi bi-chat-left-text-fill fs-4" style="color:#0057B8"></i></div>
          <div class="feat-name"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-sms/" style="color:inherit;text-decoration:none;">SMS</a></div>
          <div class="feat-desc">The #1 channel for instant reach. Automate reminders, alerts, and two-way conversations - directly inside Salesforce.</div>
          <div class="feat-tag"><i class="bi bi-lightning-fill me-1"></i>98% open rate</div>
        </div>
      </div>
      <div class="col-12 col-sm-4 col-xl-4">
        <div class="feat-card" style="--feat-clr:#0057B8;--feat-bg:#E8F0FB">
          <div class="feat-icon-wrap"><i class="bi bi-whatsapp fs-4" style="color:#0057B8"></i></div>
          <div class="feat-name"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-whatsapp/" style="color:inherit;text-decoration:none;">WhatsApp</a></div>
          <div class="feat-desc">Rich messages, documents, and interactive buttons to 2B+ users via the WhatsApp Business API - natively in Salesforce.</div>
          <div class="feat-tag"><i class="bi bi-globe me-1"></i>2B+ users reached</div>
        </div>
      </div>
      <div class="col-12 col-sm-4 col-xl-4">
        <div class="feat-card" style="--feat-clr:#0057B8;--feat-bg:#E8F0FB">
          <div class="feat-icon-wrap"><i class="bi bi-image-fill fs-4" style="color:#0057B8"></i></div>
          <div class="feat-name">RCS</div>
          <div class="feat-desc">Send rich, interactive messages with images, buttons, carousels, and branded content - creating more engaging customer experiences.</div>
          <div class="feat-tag"><i class="bi bi-images me-1"></i>Rich media support</div>
        </div>
      </div>
      <div class="col-12 col-sm-4 col-xl-4">
        <div class="feat-card" style="--feat-clr:#0057B8;--feat-bg:#E8F0FB">
          <div class="feat-icon-wrap"><i class="bi bi-telephone-fill fs-4" style="color:#0057B8"></i></div>
          <div class="feat-name"><a href="<?php echo esc_url(home_url('/')); ?>salesforce-computer-telephony-integration/" style="color:inherit;text-decoration:none;">Voice / CTI</a></div>
          <div class="feat-desc">Combine inbound calls with automatic SMS follow-ups. Every call and message logged to the same Salesforce record.</div>
          <div class="feat-tag"><i class="bi bi-phone-vibrate me-1"></i>Call + SMS unified</div>
        </div>
      </div>
      <div class="col-12 col-sm-4 col-xl-4">
        <div class="feat-card" style="--feat-clr:#1565C0;--feat-bg:#E3F2FD">
          <div class="feat-icon-wrap"><i class="bi bi-facebook fs-4" style="color:#1565C0"></i></div>
          <div class="feat-name">WebChat</div>
          <div class="feat-desc">Connect with customers through real-time web conversations - making it easy to answer questions, offer support, and drive engagement.</div>
          <div class="feat-tag"><i class="bi bi-chat-dots me-1"></i>Social DMs · API</div>
        </div>
      </div>
      <div class="col-12 col-sm-4 col-xl-4 d-flex align-items-center">
        <div class="p-4 text-center w-100">
          <p style="font-size:13px;color:var(--ink3);margin-bottom:14px"><i class="bi bi-plus-circle me-1" style="color:#0057B8"></i>Plus Instagram, Telegram, LINE, WeChat and 9 more channels</p>
          <a href="<?php echo esc_url(home_url('/')); ?>channels/" class="btn-feat-all"><i class="bi bi-arrow-right-circle me-2"></i>View All Channels</a>
        </div>
      </div>
    </div>
  </div>
</section>
<script>
var allFeedData = {
  realestate:{
    contact:'Mark Williams - Buyer Lead',contactSub:'Salesforce CRM · Century21',
    chat:[{out:true,txt:'Hi Mark! The property at 45 Oak Ave just dropped to $485K. Want to book a viewing this week? Reply YES.',meta:'10:20 AM · Delivered ✓'},{out:false,txt:'YES, Friday 2pm works!',meta:'Mark · 10:22 AM'},{out:true,txt:'Booked! 45 Oak Ave, Friday 2PM. See you then 🏠',meta:'10:22 AM · Logged ✓'},{confirm:'✓ Showing confirmed · Opportunity updated in Salesforce'}]},
  edtech:{
    contact:'Emma Clark - Prospective Student',contactSub:'Salesforce CRM · BrightPath Academy',
    chat:[{out:true,txt:'Hi Emma! Your application to BrightPath is almost done. Complete it here: [link]. Deadline is Friday!',meta:'9:00 AM · Delivered ✓'},{out:false,txt:'Just submitted it! Thanks for the reminder.',meta:'Emma · 9:15 AM'},{out:true,txt:'Got it! We\'ll review within 24 hours. Welcome to BrightPath 🎓',meta:'9:15 AM · Logged ✓'},{confirm:'✓ Application received · Status updated · Advisor notified'}]},
  fintech:{
    contact:'David Chen - Account Holder',contactSub:'Salesforce FSC · NovaPay',
    chat:[{out:true,txt:'⚠️ Unusual transaction: $2,400 at AMZN. Was this you? Reply YES to confirm or NO to freeze.',meta:'2:14 PM · Delivered ✓'},{out:false,txt:'NO! Freeze it!',meta:'David · 2:15 PM'},{out:true,txt:'Card frozen instantly ✓ Dispute filed. New card arriving in 2 days.',meta:'2:15 PM · Auto-logged ✓'},{confirm:'✓ Card frozen · Dispute filed · Case created in Salesforce'}]},
  healthcare:{
    contact:'Sarah Johnson - Patient',contactSub:'Salesforce Health Cloud · Pathways to Care',
    chat:[{out:true,txt:'Hi Sarah - reminder for your appt with Dr. Chen tomorrow 10AM. Reply YES to confirm or RESCHEDULE. 🏥',meta:'9:00 AM · Delivered ✓'},{out:false,txt:'YES - see you then! 👍',meta:'Sarah · 9:03 AM'},{out:true,txt:'Confirmed! 123 Health St, Suite 4. Bring insurance card.',meta:'9:03 AM · Auto-logged ✓'},{confirm:'✓ Appt confirmed · Record updated in Health Cloud'}]},
  nonprofit:{
    contact:'Donor Outreach - Spring Campaign',contactSub:'Salesforce NPSP · GreenFuture Foundation',
    chat:[{out:true,txt:'Hi! Your last gift funded 3 school gardens 🌱 Can you give $25 to plant 5 more? [link]',meta:'10:00 AM · 3,200 sent'},{out:false,txt:'Done! Just donated $50 🙌',meta:'Donor · 10:12 AM'},{out:true,txt:'Thank you! Your gift plants 10 gardens. Sharing your impact report shortly.',meta:'Auto-reply'},{confirm:'✓ $50 received · Donation logged · Thank-you email sent'}]}
};

function renderFeed(key) {
  var d = allFeedData[key];
  if (!d) return;
  var indLabels = {realestate:'Real Estate',edtech:'Education',fintech:'Finance',healthcare:'Healthcare',nonprofit:'Non-Profit'};
  document.getElementById('dash-contact-name').textContent = d.contact;
  document.getElementById('dash-contact-sub').textContent = d.contactSub;
  document.getElementById('dash-ind-badge').textContent = indLabels[key] || key;
  var chatHtml = '';
  d.chat.forEach(function(m){
    if(m.confirm){
      chatHtml += '<div class="dc-confirm">✅ '+m.confirm.replace(/^[✓✅]\s*/,'')+'</div>';
    } else if(m.out){
      chatHtml += '<div class="dc-out"><div class="dc-bub-out">'+m.txt+'</div><div class="dc-meta r">'+m.meta+'</div></div>';
    } else {
      chatHtml += '<div class="dc-in"><div class="dc-bub-in">'+m.txt+'</div><div class="dc-meta">'+m.meta+'</div></div>';
    }
  });
  document.getElementById('dash-conv-body').innerHTML = chatHtml;
}

function switchFeed(key, el) {
  document.querySelectorAll('.dash-ind-pill').forEach(function(p){p.classList.remove('active')});
  if(el) el.classList.add('active');
  renderFeed(key);
}

function indUpdateCount() {
  var visible = document.querySelectorAll('#ind-grid .ind-card-col:not([style*="none"])').length;
  var total = document.querySelectorAll('#ind-grid .ind-card-col').length;
  document.getElementById('ind-count').textContent =
    visible === total ? 'Showing all ' + total + ' industries'
                      : 'Showing ' + visible + ' of ' + total + ' industries';
}

function setF(tag, el) {
  var s = document.getElementById('ind-search');
  if(s) s.value = '';
  document.querySelectorAll('.fpill').forEach(function(p){ p.classList.remove('on'); });
  if(el) el.classList.add('on');
  document.querySelectorAll('#ind-grid .ind-card-col').forEach(function(c){
    var tags = (c.getAttribute('data-tags') || '').split(' ');
    if(tag === 'all' || tags.indexOf(tag) > -1){
      c.style.display = '';
    } else {
      c.style.display = 'none';
    }
  });
  indUpdateCount();
}

function indSearch(q) {
  q = q.toLowerCase().trim();
  document.querySelectorAll('.fpill').forEach(function(p){ p.classList.remove('on'); });
  if(!q){
    var allBtn = document.querySelector('.fpill[data-f="all"]');
    if(allBtn) allBtn.classList.add('on');
  }
  document.querySelectorAll('#ind-grid .ind-card-col').forEach(function(c){
    var name = (c.getAttribute('data-name') || '').toLowerCase();
    var tags = (c.getAttribute('data-tags') || '').toLowerCase();
    var match = !q || name.indexOf(q) > -1 || tags.indexOf(q) > -1;
    c.style.display = match ? '' : 'none';
  });
  indUpdateCount();
}
</script>
<?php
    get_footer('sms');
?>