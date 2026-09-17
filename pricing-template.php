<?php
/**
 * Template Name: Pricing (Bootstrap)
 * Description: 360 SMS App pricing page — Bootstrap grid/components,
 *               fully namespaced so it cannot collide with theme/plugin CSS.
 */
get_header();

// Only load Bootstrap assets on THIS template, so it never affects other pages.
if ( ! wp_style_is( 'tsms-bootstrap-css', 'enqueued' ) ) {
    wp_enqueue_style( 'tsms-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css', array(), '5.3.3' );
    wp_enqueue_script( 'tsms-bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', array(), '5.3.3', true );
}
?>

<style>
/* ============================================================
   All selectors below are scoped under #tsms-pricing-page so
   they cannot leak out to the rest of the site, and cannot be
   overridden by unrelated theme/plugin rules of the same
   specificity. Every custom class + keyframe name is prefixed
   "tsms-" to avoid clashing with theme or plugin class names.
   ============================================================ */

#tsms-pricing-page {
  --tsms-blue:    #0057B8;
  --tsms-blue-d:  #003D82;
  --tsms-sky:     #5B9EF5;
  --tsms-sky-l:   #E8F0FB;
  --tsms-navy:    #1a2744;
  --tsms-navy-d:  #0a1e48;
  --tsms-ink:     #1a1a1a;
  --tsms-ink2:    #444;
  --tsms-ink3:    #777;
  --tsms-ink4:    #aaa;
  --tsms-bdr:     #e2e2e2;
  --tsms-bg2:     #F7F7F5;
  --tsms-eef:     #EEF4FF;

  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  color: var(--tsms-ink);
  font-size: 14px;
  line-height: 1.5;
  overflow-x: hidden;
}

/* HERO */
#tsms-pricing-page .tsms-hero {
  position: relative; overflow: hidden;
  padding: 90px 0 48px;
  background:
    radial-gradient(ellipse 70% 55% at 50% -5%, rgba(0,87,184,0.1) 0%, transparent 68%),
    radial-gradient(ellipse 35% 45% at 88% 65%, rgba(91,158,245,0.1) 0%, transparent 60%),
    #F7F7F5;
}
#tsms-pricing-page .tsms-blob { position: absolute; border-radius: 50%; filter: blur(80px); opacity: 0.45; pointer-events: none; animation: tsmsBlobFloat 9s ease-in-out infinite; }
#tsms-pricing-page .tsms-blob-1 { width: 550px; height: 550px; top: -130px; left: -80px; background: radial-gradient(circle, rgba(0,87,184,0.2), transparent); }
#tsms-pricing-page .tsms-blob-2 { width: 450px; height: 450px; bottom: -80px; right: -60px; background: radial-gradient(circle, rgba(91,158,245,0.18), transparent); animation-delay: -3.5s; }
#tsms-pricing-page .tsms-blob-3 { width: 280px; height: 280px; top: 38%; left: 62%; background: radial-gradient(circle, rgba(0,87,184,0.12), transparent); animation-delay: -5.5s; }
@keyframes tsmsBlobFloat { 0%,100%{transform:translate(0,0) scale(1)} 33%{transform:translate(18px,-28px) scale(1.04)} 66%{transform:translate(-14px,18px) scale(0.97)} }

#tsms-pricing-page .tsms-badge { display: inline-flex; align-items: center; gap: 7px; background: rgba(255,255,255,0.85); border: 1px solid rgba(0,87,184,0.18); padding: 5px 14px 5px 7px; border-radius: 100px; font-size: 12px; font-weight: 700; color: var(--tsms-blue); box-shadow: 0 2px 10px rgba(0,87,184,0.08); }
#tsms-pricing-page .tsms-grad { background: linear-gradient(135deg, var(--tsms-blue) 0%, var(--tsms-sky) 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }

#tsms-pricing-page .tsms-h1 {
  font-size: clamp(2.4rem, 6vw, 4.2rem);
  font-weight: 900;
  letter-spacing: -0.04em;
  line-height: 1.06;
}

/* Price card */
#tsms-pricing-page .tsms-price-card { display: inline-flex; flex-direction: column; align-items: center; }
#tsms-pricing-page .tsms-price-from { font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.1em; color: var(--tsms-ink4); margin-bottom: 6px; display: block; }
#tsms-pricing-page .tsms-price-row { display: flex; align-items: flex-start; gap: 3px; line-height: 1; }
#tsms-pricing-page .tsms-price-currency { font-size: 16px; font-weight: 700; color: var(--tsms-ink3); margin-top: 7px; }
#tsms-pricing-page .tsms-price-amt { font-size: 44px; font-weight: 800; letter-spacing: -0.03em; color: var(--tsms-ink); }
#tsms-pricing-page .tsms-price-period-wrap { display: flex; flex-direction: column; justify-content: flex-end; padding-bottom: 3px; }
#tsms-pricing-page .tsms-price-unit { font-size: 12px; font-weight: 600; color: var(--tsms-ink2); }
#tsms-pricing-page .tsms-price-note { font-size: 11px; color: var(--tsms-ink4); }
#tsms-pricing-page .tsms-price-card-sub { font-size: 12px; color: var(--tsms-ink4); margin-top: 6px; display: block; }

/* Section head */
#tsms-pricing-page .tsms-chip { display: inline-flex; align-items: center; background: var(--tsms-sky-l); border: 1px solid rgba(0,87,184,0.15); border-radius: 100px; padding: 4px 14px; font-size: 11px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.08em; color: var(--tsms-blue); margin-bottom: 12px; }
#tsms-pricing-page .tsms-section-head h2 { font-size: clamp(22px, 3.5vw, 34px); font-weight: 900; letter-spacing: -0.03em; line-height: 1.15; margin-bottom: 12px; color: var(--tsms-ink); }
#tsms-pricing-page .tsms-section-head h2 span { background: linear-gradient(135deg, var(--tsms-blue), var(--tsms-sky)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
#tsms-pricing-page .tsms-section-head p { font-size: 14px; color: var(--tsms-ink3); line-height: 1.7; }

/* Feature cards */
#tsms-pricing-page .tsms-card { border: 1.5px solid var(--tsms-bdr); border-radius: 14px; padding: 24px; height: 100%; transition: all .3s cubic-bezier(.34,1.56,.64,1); background: #fff; }
#tsms-pricing-page .tsms-card:hover { transform: translateY(-6px); box-shadow: 0 18px 48px rgba(0,87,184,0.12); border-color: rgba(0,87,184,0.25); }
#tsms-pricing-page .tsms-card-icon { width: 46px; height: 46px; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 20px; margin-bottom: 14px; background: var(--tsms-sky-l); transition: transform .3s; }
#tsms-pricing-page .tsms-card:hover .tsms-card-icon { transform: scale(1.1) rotate(5deg); }
#tsms-pricing-page .tsms-card h3 { font-size: 14px; font-weight: 800; margin-bottom: 7px; color: var(--tsms-ink); }
#tsms-pricing-page .tsms-card p { font-size: 13px; color: var(--tsms-ink3); line-height: 1.65; margin-bottom: 0; }
#tsms-pricing-page .tsms-c2 .tsms-card-icon { background: linear-gradient(135deg, rgba(91,158,245,.18), rgba(91,158,245,.08)); }
#tsms-pricing-page .tsms-c3 .tsms-card-icon { background: linear-gradient(135deg, rgba(34,160,107,.15), rgba(34,160,107,.07)); }
#tsms-pricing-page .tsms-c4 .tsms-card-icon { background: linear-gradient(135deg, rgba(224,92,46,.14), rgba(224,92,46,.06)); }
#tsms-pricing-page .tsms-c5 .tsms-card-icon { background: linear-gradient(135deg, rgba(0,87,184,.14), rgba(91,158,245,.08)); }
#tsms-pricing-page .tsms-c6 .tsms-card-icon { background: linear-gradient(135deg, rgba(26,39,68,.12), rgba(91,158,245,.08)); }

/* Stats */
#tsms-pricing-page .tsms-stats-section { background: var(--tsms-eef); padding: 64px 0; }
#tsms-pricing-page .tsms-stat-card { background: #fff; border-radius: 14px; padding: 28px 20px; text-align: center; border: 1.5px solid rgba(0,87,184,0.1); position: relative; overflow: hidden; height: 100%; transition: all .25s; }
#tsms-pricing-page .tsms-stat-card::before { content:''; position:absolute; top:0; left:0; right:0; height:3px; background: linear-gradient(90deg, var(--tsms-blue), var(--tsms-sky)); }
#tsms-pricing-page .tsms-stat-card:hover { transform: translateY(-4px); box-shadow: 0 12px 32px rgba(0,87,184,0.1); }
#tsms-pricing-page .tsms-stat-num { font-size: 36px; font-weight: 900; letter-spacing: -0.04em; background: linear-gradient(135deg, var(--tsms-blue), var(--tsms-sky)); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; margin-bottom: 6px; line-height: 1; }
#tsms-pricing-page .tsms-stat-label { font-size: 12px; color: var(--tsms-ink3); font-weight: 500; line-height: 1.45; }

/* CTA */
#tsms-pricing-page .tsms-cta-section { padding: 80px 0; position: relative; overflow: hidden; background: linear-gradient(135deg, var(--tsms-navy-d) 0%, var(--tsms-navy) 100%); }
#tsms-pricing-page .tsms-glow { position: absolute; border-radius: 50%; filter: blur(90px); pointer-events: none; }
#tsms-pricing-page .tsms-glow-1 { width: 500px; height: 500px; top: -150px; left: -80px; background: radial-gradient(circle, rgba(0,87,184,.3), transparent); }
#tsms-pricing-page .tsms-glow-2 { width: 420px; height: 420px; bottom: -120px; right: -60px; background: radial-gradient(circle, rgba(91,158,245,.22), transparent); }
#tsms-pricing-page .tsms-cta-section h2 { font-size: clamp(22px, 4vw, 36px); font-weight: 900; letter-spacing: -0.035em; color: #fff; line-height: 1.15; }
#tsms-pricing-page .tsms-cta-section h2 span { color: #7EC8FF; }
#tsms-pricing-page .tsms-cta-lead { font-size: 14px; color: rgba(255,255,255,.55); line-height: 1.7; }
#tsms-pricing-page .tsms-cta-trust span { font-size: 11px; color: rgba(255,255,255,.38); margin-right: 20px; }
#tsms-pricing-page .tsms-cta-trust span::before { content: '✓ '; color: rgba(91,158,245,.7); font-weight: 700; }

/* Reveal animation */
#tsms-pricing-page .tsms-reveal { opacity: 0; transform: translateY(26px); transition: opacity .6s ease, transform .6s ease; }
#tsms-pricing-page .tsms-reveal.tsms-visible { opacity: 1; transform: translateY(0); }
#tsms-pricing-page .tsms-d1{transition-delay:.08s} #tsms-pricing-page .tsms-d2{transition-delay:.16s} #tsms-pricing-page .tsms-d3{transition-delay:.24s}
#tsms-pricing-page .tsms-d4{transition-delay:.32s} #tsms-pricing-page .tsms-d5{transition-delay:.4s} #tsms-pricing-page .tsms-d6{transition-delay:.48s}
</style>

<div id="tsms-pricing-page">

  <!-- HERO -->
  <section class="tsms-hero">
    <div class="tsms-blob tsms-blob-1"></div>
    <div class="tsms-blob tsms-blob-2"></div>
    <div class="tsms-blob tsms-blob-3"></div>

    <div class="container position-relative" style="z-index:2;">
      <div class="row justify-content-center text-center">
        <div class="col-lg-8">

          <h1 class="tsms-h1 mb-3">
            Simple pricing,<br><span class="tsms-grad">built to scale with you.</span>
          </h1>
          <p class="mx-auto mb-4" style="max-width:440px; color:var(--tsms-ink3);">
            One license. 15+ channels. No platform switching. Transparent per-user pricing with no hidden fees — pay only for what your team needs.
          </p>

          <!-- Price card -->
          <div class="tsms-price-card mb-4">
            <span class="tsms-price-from">Starting from</span>
            <div class="tsms-price-row">
              <span class="tsms-price-currency">USD</span>
              <span class="tsms-price-amt">7</span>
              <div class="tsms-price-period-wrap">
                <span class="tsms-price-unit">/user</span>
                <span class="tsms-price-note">/month</span>
              </div>
            </div>
            <span class="tsms-price-card-sub">onwards &nbsp;·&nbsp; Billed annually</span>
          </div>

          <div class="d-flex gap-2 justify-content-center flex-wrap mb-4">
            <a href="#" class="btn btn-primary d-inline-flex align-items-center gap-2 px-4 py-2 fw-bold">
              Speak to our expert
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="#" class="btn btn-outline-secondary d-inline-flex align-items-center gap-2 px-4 py-2 fw-semibold">Start 7-day free trial</a>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- FLEXIBILITY -->
  <section class="py-5" id="tsms-flexibility">
    <div class="container">
      <div class="tsms-section-head tsms-reveal text-center mx-auto mb-5" style="max-width:580px;">
        <div class="tsms-chip">✦ Why 360 SMS App</div>
        <h2>Get the <span>Ultimate Flexibility</span></h2>
        <p>Build your messaging stack your way — start with SMS and grow into a full omnichannel setup, all inside Salesforce.</p>
      </div>

      <div class="row g-3 justify-content-center">
        <div class="col-md-6 col-lg-4 tsms-reveal tsms-d1">
          <div class="tsms-card tsms-c1">
            <div class="tsms-card-icon">🧩</div>
            <h3>Modular add-ons</h3>
            <p>Start with the core license and layer on only what you need — AI texting, drip campaigns, link tracking, voice drops — at your own pace.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 tsms-reveal tsms-d2">
          <div class="tsms-card tsms-c2">
            <div class="tsms-card-icon">📡</div>
            <h3>15+ messaging channels</h3>
            <p>SMS, MMS, WhatsApp, RCS, Facebook, Instagram, LinkedIn, Viber, LINE, WeChat, KakaoTalk, Webchat and more — all natively in Salesforce.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 tsms-reveal tsms-d3">
          <div class="tsms-card tsms-c3">
            <div class="tsms-card-icon">⚡</div>
            <h3>Scale without switching</h3>
            <p>From 1 user to thousands, your pricing grows with you. Add users, numbers, and channels without migrating to a new platform.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 tsms-reveal tsms-d4">
          <div class="tsms-card tsms-c4">
            <div class="tsms-card-icon">🔒</div>
            <h3>Compliance built in</h3>
            <p>TCPA and GDPR tools — opt-out handling, consent tracking, and dark hours restrictions — included in every plan at no extra charge.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 tsms-reveal tsms-d5">
          <div class="tsms-card tsms-c5">
            <div class="tsms-card-icon">🌍</div>
            <h3>Global availability</h3>
            <p>Available in every region on Salesforce AppExchange. Enterprise teams get dedicated account managers and custom SLA agreements.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 tsms-reveal tsms-d6">
          <div class="tsms-card tsms-c6">
            <div class="tsms-card-icon">🔗</div>
            <h3>Open API for full control</h3>
            <p>Bring your own telephony provider, provision your own numbers, and control credit costs with the 360 SMS Open API — built for enterprise.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- STATS -->
  <section class="tsms-stats-section">
    <div class="container">
      <div class="tsms-section-head tsms-reveal text-center mx-auto mb-5" style="max-width:580px;">
        <div class="tsms-chip">✦ By the numbers</div>
        <h2>Trusted by teams <span>worldwide</span></h2>
      </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-5 g-3">
        <div class="col tsms-reveal tsms-d1"><div class="tsms-stat-card"><div class="tsms-stat-num" data-tsms-target="15">0</div><div class="tsms-stat-label">Messaging channels<br>in one platform</div></div></div>
        <div class="col tsms-reveal tsms-d2"><div class="tsms-stat-card"><div class="tsms-stat-num" data-tsms-target="1200">0</div><div class="tsms-stat-label">AppExchange reviews<br>from verified customers</div></div></div>
        <div class="col tsms-reveal tsms-d3"><div class="tsms-stat-card"><div class="tsms-stat-num" data-tsms-target="7">0</div><div class="tsms-stat-label">Day free trial<br>no card needed</div></div></div>
        <div class="col tsms-reveal tsms-d4"><div class="tsms-stat-card"><div class="tsms-stat-num">100%</div><div class="tsms-stat-label">Native Salesforce<br>no data leaves your org</div></div></div>
        <div class="col tsms-reveal tsms-d5"><div class="tsms-stat-card"><div class="tsms-stat-num">24/7</div><div class="tsms-stat-label">Global support<br>across all timezones</div></div></div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA -->
  <section class="tsms-cta-section">
    <div class="tsms-glow tsms-glow-1"></div>
    <div class="tsms-glow tsms-glow-2"></div>
    <div class="container position-relative" style="z-index:2;">
      <div class="row justify-content-center text-center">
        <div class="col-lg-7 tsms-reveal">
          <h2 class="mb-3">Ready to text smarter<br><span>inside Salesforce?</span></h2>
          <p class="tsms-cta-lead mb-4">Start your 7-day free trial or speak to an expert — no credit card, no commitment, no lock-in.</p>
          <div class="d-flex gap-2 justify-content-center flex-wrap mb-4">
            <a href="#" class="btn btn-light d-inline-flex align-items-center gap-2 px-4 py-2 fw-bold" style="color:var(--tsms-blue);">
              Speak to our expert
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
            </a>
            <a href="#" class="btn btn-outline-light d-inline-flex align-items-center gap-2 px-4 py-2">Start free trial</a>
          </div>
          <div class="tsms-cta-trust">
            <span>7-day free trial</span>
            <span>No credit card</span>
            <span>Cancel anytime</span>
            <span>Global support</span>
          </div>
        </div>
      </div>
    </div>
  </section>

</div><!-- /#tsms-pricing-page -->

<script>
document.addEventListener('DOMContentLoaded', function () {
  var root = document.getElementById('tsms-pricing-page');
  if (!root) return;

  // Scroll-reveal animation (scoped to this page's elements only)
  var obs = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) { e.target.classList.add('tsms-visible'); obs.unobserve(e.target); }
    });
  }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
  root.querySelectorAll('.tsms-reveal').forEach(function (el) { obs.observe(el); });

  // Animated count-up for stats
  function tsmsCountUp(el, target) {
    var n = 0, step = Math.max(1, Math.ceil(target / 25));
    var t = setInterval(function () {
      n = Math.min(n + step, target);
      el.textContent = n + '+';
      if (n >= target) clearInterval(t);
    }, 50);
  }
  var cObs = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) {
        var v = parseInt(e.target.getAttribute('data-tsms-target'), 10);
        if (v) tsmsCountUp(e.target, v);
        cObs.unobserve(e.target);
      }
    });
  }, { threshold: 0.5 });
  root.querySelectorAll('[data-tsms-target]').forEach(function (el) { cObs.observe(el); });
});
</script>

<?php
get_footer();

/**
 * SETUP NOTES
 * ------------------------------------------------------------------
 * 1. Save this file as template-pricing.php inside your active theme
 *    (or child theme) root folder.
 *
 * 2. Bootstrap 5 CSS/JS is enqueued directly in this file (top of the
 *    template, guarded with wp_style_is/wp_enqueue_*) — it ONLY loads
 *    when this specific template is rendered, so it never touches any
 *    other page on the site.
 *
 * 3. Every custom class, ID, CSS variable, and keyframe name in this
 *    template is prefixed "tsms-" and additionally scoped under the
 *    #tsms-pricing-page wrapper, so:
 *      - none of this page's CSS can leak out and affect other pages
 *      - none of the theme's/plugins' existing classes of the same
 *        generic name (e.g. .card, .badge, .hero) can leak in and
 *        override this page's styling
 *    Bootstrap's own framework classes (container, row, col-*, btn)
 *    are intentionally left as-is since renaming them
 *    would break Bootstrap's CSS/JS — if your theme defines its own
 *    conflicting .btn/.container rules, the safest full isolation
 *    is to load this page's content in an <iframe>, which I can set
 *    up if you run into a real collision.
 *
 * 4. In WP Admin, create/edit a Page and select
 *    "Pricing (Bootstrap)" under Page Attributes > Template.
 * ------------------------------------------------------------------
 */