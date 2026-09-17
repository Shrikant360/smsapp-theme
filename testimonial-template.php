<?php
/**
 * Template Name: Testimonials Page
 * Description: 360 SMS App Customer Reviews page — Bootstrap layout matching design spec.
 *              All CSS, HTML, and JS in this single file.
 *
 * @package SMS360
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

<style>
/*#head, #nav-main, #footer, .site-footer, footer.footer { display: none !important; }*/
/*.whatsapp-content, .tawk-min-container { display: none !important; }*/
/*iframe[src*="tawk"], iframe[title*="chat"] { display: none !important; }*/

body:has(.sms-tm) {
    overflow-x: hidden;
}

body:has(.sms-tm) #page,
body:has(.sms-tm) .site,
body:has(.sms-tm) #content,
body:has(.sms-tm) .site-content,
body:has(.sms-tm) #primary,
body:has(.sms-tm) .content-area,
body:has(.sms-tm) article,
body:has(.sms-tm) .entry-content {
    max-width: none !important;
    width: 100% !important;
    padding-left: 0 !important;
    padding-right: 0 !important;
    margin-left: 0 !important;
    margin-right: 0 !important;
    overflow: visible !important;
    transform: none !important;
    filter: none !important;
    perspective: none !important;
}

/* ── Scoped variables & base ── */
.sms-tm {
    --blue: #0057B8;
    --blue-d: #1A4FBF;
    --blue-l: #EFF4FF;
    --blue-m: #BFDBFE;
    --ink: #111827;
    --ink2: #374151;
    --ink3: #6B7280;
    --ink4: #9CA3AF;
    --bdr: #E5E7EB;
    --bg: #F1F5FB;
    --white: #FFFFFF;
    --amber: #F59E0B;
    --green: #10B981;
    font-family: 'Inter', system-ui, sans-serif;
    color: var(--ink);
    background: var(--white);
    -webkit-font-smoothing: antialiased;
    width: 100%;
}

.sms-tm .container {
    max-width: 1440px;
    width: 100%;
    margin-left: auto;
    margin-right: auto;
    padding-left: 24px;
    padding-right: 24px;
    box-sizing: border-box;
}

@media (min-width: 1200px) {
    .sms-tm .container {
        padding-left: 40px;
        padding-right: 40px;
    }
}

.sms-tm h1, .sms-tm h2, .sms-tm h3, .sms-tm h4,
.sms-tm p, .sms-tm a, .sms-tm button {
    text-transform: none;
    letter-spacing: normal;
}

/* ── HERO ── */
.sms-tm .tm-hero {
    background: var(--blue);
    padding: 48px 0 0;
    min-height: 440px;
    overflow: hidden;
    position: relative;
}

.sms-tm .tm-hero .row {
    --bs-gutter-x: 2.5rem;
    align-items: center;
}

.sms-tm .tm-hero-left {
    padding-bottom: 64px;
    max-width: 640px;
}

.sms-tm .tm-hero-eyebrow {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    background: rgba(255, 255, 255, .15);
    border: 1px solid rgba(255, 255, 255, .2);
    border-radius: 20px;
    padding: 4px 14px;
    font-size: 11px;
    font-weight: 700;
    color: rgba(255, 255, 255, .9);
    letter-spacing: .05em;
    /*text-transform: uppercase;*/
    margin-bottom: 22px;
}

.sms-tm .tm-hero-h1 {
    font-size: 44px;
    font-weight: 800;
    color: #fff;
    line-height: 1.12;
    letter-spacing: -.8px;
    margin-bottom: 18px;
}

.sms-tm .tm-hero-sub {
    font-size: 16px;
    color: rgba(255, 255, 255, .72);
    line-height: 1.7;
    max-width: 540px;
    margin-bottom: 28px;
}

.sms-tm .tm-h-btn-white {
    padding: 12px 24px;
    background: #fff;
    color: var(--blue);
    font-size: 13px;
    font-weight: 700;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    text-decoration: none;
}

.sms-tm .tm-h-btn-ghost {
    padding: 12px 22px;
    background: rgba(255, 255, 255, .12);
    color: #fff;
    font-size: 13px;
    font-weight: 600;
    border-radius: 8px;
    border: 1px solid rgba(255, 255, 255, .25);
    text-decoration: none;
    cursor: pointer;
}

.sms-tm .tm-hero-right {
    display: flex;
    align-items: center;
    justify-content: flex-end;
    position: relative;
}

.sms-tm .tm-hero-img {
    width: 100%;
    max-width: 620px;
    height: auto;
    display: block;
}

@media (max-width: 991.98px) {
    .sms-tm .tm-hero-h1 { font-size: 30px; }
}

/* ── STATS BAR ── */
.sms-tm .tm-stats-bar {
    background: var(--white);
    border-bottom: 1px solid var(--bdr);
}

.sms-tm .tm-stat-cell {
    padding: 22px 24px;
    border-right: 1px solid var(--bdr);
    display: flex;
    align-items: center;
    gap: 14px;
}

.sms-tm .tm-stat-cell:last-child { border-right: none; }

.sms-tm .tm-stat-icon {
    width: 40px;
    height: 40px;
    border-radius: 10px;
    background: var(--blue-l);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 18px;
    flex-shrink: 0;
}

.sms-tm .tm-stat-n {
    font-size: 22px;
    font-weight: 800;
    color: var(--ink);
    line-height: 1;
    letter-spacing: -.5px;
}

.sms-tm .tm-stat-n em { font-style: normal; color: var(--blue); }

.sms-tm .tm-stat-l {
    font-size: 11px;
    color: var(--ink3);
    margin-top: 2px;
    line-height: 1.3;
}

@media (max-width: 991.98px) {
    .sms-tm .tm-stat-cell:nth-child(4),
    .sms-tm .tm-stat-cell:nth-child(5) { border-top: 1px solid var(--bdr); }
    .sms-tm .tm-stat-cell:nth-child(2n) { border-right: none; }
    .sms-tm .tm-stat-cell:nth-child(odd):not(:last-child) { border-right: 1px solid var(--bdr); }
}

@media (min-width: 992px) {
    .sms-tm .tm-stat-cell { border-right: 1px solid var(--bdr); }
    .sms-tm .tm-stat-cell:last-child { border-right: none; }
}

/* ── TRUST SECTION ── */
.sms-tm .tm-trust {
    background: var(--bg);
    padding: 64px 0;
}

.sms-tm .tm-trust-img {
    width: 100%;
    max-width: 480px;
    height: auto;
    display: block;
}

.sms-tm .tm-trust-h {
    font-size: 26px;
    font-weight: 800;
    color: var(--ink);
    line-height: 1.25;
    margin-bottom: 16px;
    letter-spacing: -.3px;
}

.sms-tm .tm-trust-p {
    font-size: 15px;
    color: var(--ink2);
    line-height: 1.75;
    margin-bottom: 14px;
}

.sms-tm .tm-trust-links a {
    font-size: 15px;
    font-weight: 600;
    color: var(--blue);
    text-decoration: none;
}

.sms-tm .tm-trust-links a:hover { text-decoration: underline; }

@media (max-width: 991.98px) {
    .sms-tm .tm-trust-img { max-width: 360px; margin: 0 auto 32px; }
}

/* ── FILTER BAR ── */
.sms-tm .tm-filter-bar {
    background: var(--white);
    border-bottom: 1px solid var(--bdr);
    position: sticky;
    top: 60px;
    z-index: 90;
    box-shadow: 0 2px 6px rgba(0, 0, 0, .04);
}

.sms-tm .tm-filter-in {
    min-height: 54px;
    gap: 12px;
    flex-wrap: wrap;
    padding-top: 8px;
    padding-bottom: 8px;
}

.sms-tm .tm-flbl {
    font-size: 11px;
    font-weight: 700;
    color: var(--ink4);
    text-transform: uppercase;
    letter-spacing: .06em;
    white-space: nowrap;
}

.sms-tm .tm-fsep {
    width: 1px;
    height: 28px;
    background: var(--bdr);
    flex-shrink: 0;
}

.sms-tm .tm-fsw { position: relative; display: inline-flex; align-items: center; }

.sms-tm .tm-fsel {
    appearance: none;
    -webkit-appearance: none;
    background: var(--white);
    border: 1.5px solid var(--bdr);
    border-radius: 7px;
    padding: 7px 30px 7px 12px;
    font-size: 13px;
    font-weight: 500;
    color: var(--ink);
    font-family: 'Inter', sans-serif;
    cursor: pointer;
    outline: none;
    min-width: 160px;
    transition: border-color .14s;
}

.sms-tm .tm-fsel:hover { border-color: var(--blue-m); }

.sms-tm .tm-fsel:focus,
.sms-tm .tm-fsel.on {
    border-color: var(--blue);
    box-shadow: 0 0 0 3px rgba(37, 99, 235, .1);
}

.sms-tm .tm-fsel.on { background: var(--blue-l); color: var(--blue); }

.sms-tm .tm-farr {
    position: absolute;
    right: 10px;
    pointer-events: none;
    color: var(--ink4);
    font-size: 10px;
}

.sms-tm .tm-fcount { font-size: 13px; color: var(--ink3); }
.sms-tm .tm-fcount strong { color: var(--ink); font-weight: 700; }

.sms-tm .tm-fclr {
    font-size: 12px;
    font-weight: 600;
    color: var(--blue);
    background: none;
    border: none;
    cursor: pointer;
    padding: 4px 8px;
    border-radius: 5px;
    display: none;
}

.sms-tm .tm-fclr:hover { background: var(--blue-l); }

/* ── REVIEWS ── */
.sms-tm .tm-reviews { padding: 44px 0 80px; }

.sms-tm .tm-reviews-h {
    font-size: 28px;
    font-weight: 800;
    color: var(--ink);
    letter-spacing: -.4px;
    text-align: center;
    margin-bottom: 8px;
}

.sms-tm .tm-reviews-sub {
    font-size: 14px;
    color: var(--ink3);
    text-align: center;
    margin-bottom: 36px;
}

.sms-tm .tm-review-grid {
    display: grid;
    grid-template-columns: 1fr;
    gap: 24px;
    align-items: stretch;
}

@media (min-width: 768px) {
    .sms-tm .tm-review-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 992px) {
    .sms-tm .tm-review-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

.sms-tm .tm-qc {
    background: var(--white);
    border: 1px solid var(--bdr);
    border-radius: 12px;
    padding: 28px 26px 22px;
    display: flex;
    flex-direction: column;
    height: 100%;
    transition: box-shadow .2s, transform .18s, border-color .18s;
}

.sms-tm .tm-qc:hover {
    box-shadow: 0 6px 28px rgba(37, 99, 235, .1);
    transform: translateY(-2px);
    border-color: var(--blue-m);
}

.sms-tm .tm-qc.hidden { display: none !important; }

.sms-tm .tm-qmark {
    font-size: 40px;
    line-height: .75;
    color: var(--blue-m);
    margin-bottom: 14px;
    display: block;
    font-weight: 800;
    font-family: Georgia, serif;
    letter-spacing: -2px;
}

.sms-tm .tm-qtext {
    font-size: 13px;
    color: var(--ink2);
    line-height: 1.72;
    font-style: italic;
    flex: 1;
    margin-bottom: 14px;
}

.sms-tm .tm-qtext strong { font-style: normal; font-weight: 700; color: var(--ink); }

.sms-tm .tm-qbot {
    border-top: 1px solid var(--bdr);
    padding-top: 14px;
    margin-top: auto;
}

.sms-tm .tm-qname { font-size: 13px; font-weight: 700; color: var(--ink); margin-bottom: 2px; }
.sms-tm .tm-qrole { font-size: 11px; color: var(--ink3); line-height: 1.4; }
.sms-tm .tm-qdate { font-size: 10px; color: var(--ink4); margin-top: 2px; }

.sms-tm .tm-qsource {
    font-size: 10px;
    color: var(--ink4);
    margin-top: 6px;
    display: flex;
    align-items: center;
    gap: 4px;
    letter-spacing: .01em;
}

.sms-tm #tm-load-more-btn:hover {
    border-color: var(--blue) !important;
    color: var(--blue) !important;
    background: var(--blue-l) !important;
}

.sms-tm .tm-empty { display: none; }
.sms-tm .tm-empty.show { display: block; }

.sms-tm .tm-empty-ico { font-size: 36px; margin-bottom: 10px; }
.sms-tm .tm-empty-t { font-size: 17px; font-weight: 700; color: var(--ink); margin-bottom: 5px; }
.sms-tm .tm-empty-s { font-size: 13px; color: var(--ink3); }

/* ── CTA BAND ── */
.sms-tm .tm-cta {
    background: var(--blue);
    padding: 60px 0;
    text-align: center;
}

.sms-tm .tm-cta-h {
    font-size: 30px;
    font-weight: 800;
    color: #fff;
    letter-spacing: -.5px;
    margin-bottom: 10px;
}

.sms-tm .tm-cta-sub {
    font-size: 15px;
    color: rgba(255, 255, 255, .7);
    line-height: 1.65;
    margin-bottom: 26px;
}

.sms-tm .tm-cta-w {
    padding: 12px 26px;
    background: #fff;
    color: var(--blue);
    font-size: 13px;
    font-weight: 700;
    border-radius: 8px;
    border: none;
    cursor: pointer;
    text-decoration: none;
    font-family: 'Inter', sans-serif;
}

.sms-tm .tm-cta-o {
    padding: 12px 22px;
    background: transparent;
    color: #fff;
    font-size: 13px;
    font-weight: 600;
    border-radius: 8px;
    border: 1.5px solid rgba(255, 255, 255, .35);
    text-decoration: none;
    font-family: 'Inter', sans-serif;
}
</style>

<main class="sms-tm">

    <!-- HERO -->
    <section class="tm-hero">
        <div class="container position-relative">
            <div class="row align-items-center g-4">
                <div class="col-lg-6 tm-hero-left">
                    <div class="tm-hero-eyebrow">★ Verified Customer Reviews</div>
                    <h1 class="tm-hero-h1">The Salesforce SMS Platform Trusted by High-<br>Performing Teams</h1>
                    <p class="tm-hero-sub">Real stories from healthcare, finance, education, real estate, and other industries using AI-powered 360 SMS to engage customers, automate communication, and drive results. Backed by 1,200+ five-star reviews and growing.</p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#reviews" class="tm-h-btn-white">Read Customer Stories</a>
                        <a href="#" class="tm-h-btn-ghost">View on AppExchange →</a>
                    </div>
                </div>
                <div class="col-lg-6 tm-hero-right d-none d-lg-flex">
                    <img
                        src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/06/Hero-Right-Cloverleaf-1.png"
                        alt="360 SMS customers across healthcare, finance, education, and real estate"
                        class="tm-hero-img"
                        width="520"
                        height="520"
                        loading="eager"
                    >
                </div>
            </div>
        </div>
    </section>

    <!-- STATS BAR -->
    <div class="tm-stats-bar">
        <div class="container">
            <div class="row g-0">
                <div class="col-6 col-lg tm-stat-cell">
                    <!--<div class="tm-stat-icon">⭐</div>-->
                    <div>
                        <div class="tm-stat-n"><em>4.9</em>/5</div>
                        <div class="tm-stat-l">Average rating</div>
                    </div>
                </div>
                <div class="col-6 col-lg tm-stat-cell">
                    <!--<div class="tm-stat-icon">💬</div>-->
                    <div>
                        <div class="tm-stat-n">1,200<em>+</em></div>
                        <div class="tm-stat-l">Reviews on AppExchange</div>
                    </div>
                </div>
                <div class="col-6 col-lg tm-stat-cell">
                    <!--<div class="tm-stat-icon">👥</div>-->
                    <div>
                        <div class="tm-stat-n">60<em>K+</em></div>
                        <div class="tm-stat-l">Salesforce users</div>
                    </div>
                </div>
                <div class="col-6 col-lg tm-stat-cell">
                    <!--<div class="tm-stat-icon">🌍</div>-->
                    <div>
                        <div class="tm-stat-n">100<em>+</em></div>
                        <div class="tm-stat-l">Countries Served</div>
                    </div>
                </div>
                <div class="col-6 col-lg tm-stat-cell">
                    <!--<div class="tm-stat-icon">📅</div>-->
                    <div>
                        <div class="tm-stat-n">14<em>+</em></div>
                        <div class="tm-stat-l">Years of Expertise</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- TRUST SECTION -->
    <section class="tm-trust">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-5">
                    <img
                        src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/06/trust-img.webp"
                        alt="Teams using 360 SMS with Salesforce and AppExchange"
                        class="tm-trust-img"
                        width="480"
                        height="480"
                        loading="lazy"
                    >
                </div>
                <div class="col-lg-7">
                    <h2 class="tm-trust-h">Turn Every Customer Conversation Into a Growth Opportunity</h2>
                    <p class="tm-trust-p">See how businesses use Salesforce-native, AI-powered communication across SMS, WhatsApp, and 15+ channels to engage customers faster, accelerate pipeline growth, and build stronger relationships that drive conversions at scale.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- FILTER BAR -->
    <div class="tm-filter-bar">
        <div class="container px-3 px-lg-4">
            <div class="tm-filter-in d-flex align-items-center">
                <span class="tm-flbl">Sort</span>
                <div class="tm-fsw">
                    <select class="tm-fsel form-select border" id="sort-sel" onchange="applyFilters()">
                        <option value="newest">📅 Newest to Oldest</option>
                        <option value="oldest">🕐 Oldest to Newest</option>
                    </select>
                    <span class="tm-farr">▾</span>
                </div>
                <div class="tm-fsep d-none d-md-block"></div>
                <span class="tm-flbl">Industry</span>
                <div class="tm-fsw">
                    <select class="tm-fsel form-select border" id="ind-sel" onchange="applyFilters()">
                        <option value="all">All Industries</option>
                        <option value="healthcare">🏥 Healthcare</option>
                        <option value="finance">💼 Finance</option>
                        <option value="education">🎓 Education</option>
                        <option value="realestate">🏠 Real Estate</option>
                        <option value="retail">🛍️ Retail</option>
                        <option value="nonprofit">💛 Non-Profit</option>
                        <option value="technology">💻 Technology</option>
                    </select>
                    <span class="tm-farr">▾</span>
                </div>
                <div class="tm-fsep d-none d-md-block"></div>
                <span class="tm-flbl">Region</span>
                <div class="tm-fsw">
                    <select class="tm-fsel form-select border" id="reg-sel" onchange="applyFilters()">
                        <option value="all">All Regions</option>
                        <option value="north-america">🇺🇸 North America</option>
                        <option value="europe">🇪🇺 Europe</option>
                        <option value="apac">🌏 Asia Pacific</option>
                        <option value="latam">🌎 Latin America</option>
                        <option value="middle-east">🌍 Middle East &amp; Africa</option>
                    </select>
                    <span class="tm-farr">▾</span>
                </div>
                <div class="d-flex align-items-center gap-2 ms-md-auto">
                    <span class="tm-fcount" id="fcount"><strong>18</strong> reviews</span>
                    <button type="button" class="tm-fclr" id="fclr" onclick="clearFilters()">✕ Clear filters</button>
                </div>
            </div>
        </div>
    </div>

    <!-- REVIEWS -->
    <section class="tm-reviews" id="reviews">
        <div class="container px-3 px-lg-4">
            <h2 class="tm-reviews-h">See What Businesses Are Saying About 360 SMS</h2>
            <p class="tm-reviews-sub">Filter reviews by industry, region, or date to find stories most relevant to your team.</p>

            <div class="tm-review-grid" id="r-grid">

                <div class="tm-qc" data-date="2025-05-12" data-industry="healthcare" data-region="north-america">
                    <span class="tm-qmark">"</span>
                    <p class="tm-qtext">Since deploying 360 SMS inside Health Cloud, our no-show rate dropped from <strong>22% to under 13%</strong> in just 8 weeks. The two-way rescheduling alone saved our front desk 15 hours a week. Setup was genuinely easy — no dev resources needed.</p>
                    <div class="tm-qbot">
                        <div class="tm-qname">Emma Thornton</div>
                        <div class="tm-qrole">Operations Manager · Pathways to Care</div>
                        <div class="tm-qdate">May 2025</div>
                        <div class="tm-qsource">☁️ Salesforce AppExchange</div>
                    </div>
                </div>

                <div class="tm-qc" data-date="2025-04-28" data-industry="finance" data-region="north-america">
                    <span class="tm-qmark">"</span>
                    <p class="tm-qtext">Best Salesforce SMS app we evaluated. Drip campaigns, bulk SMS, CTI — all natively in Salesforce. <strong>ROI was immediate from month one.</strong> Our pipeline response time dropped 3× and deal close rates improved significantly across the board.</p>
                    <div class="tm-qbot">
                        <div class="tm-qname">James T.</div>
                        <div class="tm-qrole">VP Sales Operations · ClearBridge Capital</div>
                        <div class="tm-qdate">Apr 2025</div>
                        <div class="tm-qsource">☁️ Salesforce AppExchange</div>
                    </div>
                </div>

                <div class="tm-qc" data-date="2025-04-15" data-industry="realestate" data-region="north-america">
                    <span class="tm-qmark">"</span>
                    <p class="tm-qtext">CTI Telephony + SMS follow-ups transformed our pipeline. Deal response time dropped from <strong>48 hours to under 4</strong>. ROI paid for the annual licence in month one. Every agent uses it daily with zero training overhead.</p>
                    <div class="tm-qbot">
                        <div class="tm-qname">Michael R.</div>
                        <div class="tm-qrole">Head of Sales · Apex Realty Group</div>
                        <div class="tm-qdate">Apr 2025</div>
                        <div class="tm-qsource">✦ Verified review</div>
                    </div>
                </div>

                <div class="tm-qc" data-date="2025-03-20" data-industry="education" data-region="north-america">
                    <span class="tm-qmark">"</span>
                    <p class="tm-qtext">360 SMS transformed our student enrollment. SMS reminders see <strong>4× the response rate of email</strong>, and automation setup took an afternoon — no dev needed. Our admissions team now handles 60% more leads without adding headcount.</p>
                    <div class="tm-qbot">
                        <div class="tm-qname">Sarah M.</div>
                        <div class="tm-qrole">Director of Admissions · Westfield University</div>
                        <div class="tm-qdate">Mar 2025</div>
                        <div class="tm-qsource">☁️ Salesforce AppExchange</div>
                    </div>
                </div>

                <div class="tm-qc" data-date="2025-03-05" data-industry="healthcare" data-region="europe">
                    <span class="tm-qmark">"</span>
                    <p class="tm-qtext">We handle <strong>40,000+ patient interactions per month</strong>. Before 360 SMS, we needed a team of 12 for outreach. Now 6 people manage it all — with better response rates, full HIPAA compliance, and every conversation auto-logged in Health Cloud.</p>
                    <div class="tm-qbot">
                        <div class="tm-qname">Devan Thorne</div>
                        <div class="tm-qrole">Operations Director · Healthy Sync Global</div>
                        <div class="tm-qdate">Mar 2025</div>
                        <div class="tm-qsource">☁️ Salesforce AppExchange</div>
                    </div>
                </div>

                <div class="tm-qc" data-date="2025-02-18" data-industry="finance" data-region="europe">
                    <span class="tm-qmark">"</span>
                    <p class="tm-qtext">Billing collection rate improved by <strong>31%</strong> after rolling out automated payment reminder texts. Patients actually respond to SMS — they were ignoring our emails and calls completely. Salesforce-native setup made compliance easy.</p>
                    <div class="tm-qbot">
                        <div class="tm-qname">Adrian Gonzalez</div>
                        <div class="tm-qrole">Revenue Cycle Manager · FinServ UK</div>
                        <div class="tm-qdate">Feb 2025</div>
                        <div class="tm-qsource">☁️ Salesforce AppExchange</div>
                    </div>
                </div>

                <div class="tm-qc" data-date="2025-02-01" data-industry="retail" data-region="apac">
                    <span class="tm-qmark">"</span>
                    <p class="tm-qtext">We run flash sale campaigns across 3 countries using 360 SMS. Multi-language support and timezone-aware scheduling are game-changers for our APAC teams. <strong>Open rates are 6× higher than email.</strong> Absolutely essential.</p>
                    <div class="tm-qbot">
                        <div class="tm-qname">Li Wei</div>
                        <div class="tm-qrole">Digital Marketing Lead · Novu Retail Asia</div>
                        <div class="tm-qdate">Feb 2025</div>
                        <div class="tm-qsource">✦ Verified review</div>
                    </div>
                </div>

                <div class="tm-qc" data-date="2025-01-22" data-industry="nonprofit" data-region="north-america">
                    <span class="tm-qmark">"</span>
                    <p class="tm-qtext">360 SMS helped us reach underserved communities in a way email never could. Volunteer coordination, donation reminders, and event RSVPs — <strong>all natively inside our Salesforce NPSP org.</strong> Support team is incredibly responsive.</p>
                    <div class="tm-qbot">
                        <div class="tm-qname">Rachel Kim</div>
                        <div class="tm-qrole">Salesforce Admin · Bright Future Foundation</div>
                        <div class="tm-qdate">Jan 2025</div>
                        <div class="tm-qsource">☁️ Salesforce AppExchange</div>
                    </div>
                </div>

                <div class="tm-qc" data-date="2025-01-10" data-industry="technology" data-region="north-america">
                    <span class="tm-qmark">"</span>
                    <p class="tm-qtext">We evaluated 6 Salesforce SMS apps. 360 SMS won on every dimension: <strong>native data model, Flow/Apex API, WhatsApp + SMS in one inbox</strong>, and actually responsive support. Integration complete in under a week.</p>
                    <div class="tm-qbot">
                        <div class="tm-qname">Priya Venkat</div>
                        <div class="tm-qrole">Senior SF Developer · Cloudify Solutions</div>
                        <div class="tm-qdate">Jan 2025</div>
                        <div class="tm-qsource">✦ Verified review</div>
                    </div>
                </div>

                <div class="tm-qc" data-date="2024-12-15" data-industry="healthcare" data-region="latam">
                    <span class="tm-qmark">"</span>
                    <p class="tm-qtext">Lanzamos recordatorios de citas para <strong>5 clínicas en México</strong>. La tasa de no-presentación bajó un 35% en el primer mes. El equipo respondió en español — totalmente recomendado.</p>
                    <div class="tm-qbot">
                        <div class="tm-qname">Carlos Ruiz</div>
                        <div class="tm-qrole">IT Director · Clínicas MedSalud MX</div>
                        <div class="tm-qdate">Dec 2024</div>
                        <div class="tm-qsource">☁️ Salesforce AppExchange</div>
                    </div>
                </div>

                <div class="tm-qc" data-date="2024-11-28" data-industry="realestate" data-region="europe">
                    <span class="tm-qmark">"</span>
                    <p class="tm-qtext">Our London agents use 360 SMS for property viewing reminders. Conversations are visible right on the Salesforce lead record. <strong>No more personal WhatsApp — everything logged and compliant.</strong></p>
                    <div class="tm-qbot">
                        <div class="tm-qname">Oliver Hayes</div>
                        <div class="tm-qrole">Operations Lead · Prime London Property</div>
                        <div class="tm-qdate">Nov 2024</div>
                        <div class="tm-qsource">☁️ Salesforce AppExchange</div>
                    </div>
                </div>

                <div class="tm-qc" data-date="2024-11-10" data-industry="education" data-region="apac">
                    <span class="tm-qmark">"</span>
                    <p class="tm-qtext">Student check-ins, fee reminders, and emergency alerts across <strong>3 campuses in Australia</strong>. The Education Cloud integration is seamless and automation builder works for non-technical admins.</p>
                    <div class="tm-qbot">
                        <div class="tm-qname">Natalie Park</div>
                        <div class="tm-qrole">Salesforce Admin · AusLearn Institute</div>
                        <div class="tm-qdate">Nov 2024</div>
                        <div class="tm-qsource">☁️ Salesforce AppExchange</div>
                    </div>
                </div>

                <div class="tm-qc" data-date="2024-10-22" data-industry="finance" data-region="middle-east">
                    <span class="tm-qmark">"</span>
                    <p class="tm-qtext">UAE wealth management firm. Client appointment reminders and document nudges inside our <strong>Financial Services Cloud</strong>. Compliance team approved it in a week. Excellent product and outstanding support.</p>
                    <div class="tm-qbot">
                        <div class="tm-qname">Faisal Al-Rashid</div>
                        <div class="tm-qrole">CRM Manager · AlTrust Wealth UAE</div>
                        <div class="tm-qdate">Oct 2024</div>
                        <div class="tm-qsource">☁️ Salesforce AppExchange</div>
                    </div>
                </div>

                <div class="tm-qc" data-date="2024-10-05" data-industry="retail" data-region="north-america">
                    <span class="tm-qmark">"</span>
                    <p class="tm-qtext">Cart recovery SMS alone added <strong>$40K ARR in the first quarter</strong>. Order updates, cart abandonment recovery, and loyalty messages — all inside Salesforce Commerce Cloud. Completely plug-and-play.</p>
                    <div class="tm-qbot">
                        <div class="tm-qname">Taylor Brooks</div>
                        <div class="tm-qrole">VP eCommerce · Thread &amp; Co.</div>
                        <div class="tm-qdate">Oct 2024</div>
                        <div class="tm-qsource">✦ Verified review</div>
                    </div>
                </div>

                <div class="tm-qc" data-date="2024-09-18" data-industry="nonprofit" data-region="europe">
                    <span class="tm-qmark">"</span>
                    <p class="tm-qtext">Crisis support services across <strong>4 EU countries</strong>. 360 SMS lets us reach vulnerable people without reliable internet — just SMS. The GDPR tooling and opt-out compliance were the deciding factors for our legal team.</p>
                    <div class="tm-qbot">
                        <div class="tm-qname">Anna Müller</div>
                        <div class="tm-qrole">Digital Lead · Brücke Hilfe e.V.</div>
                        <div class="tm-qdate">Sep 2024</div>
                        <div class="tm-qsource">☁️ Salesforce AppExchange</div>
                    </div>
                </div>

                <div class="tm-qc" data-date="2024-09-02" data-industry="technology" data-region="apac">
                    <span class="tm-qmark">"</span>
                    <p class="tm-qtext">As a Salesforce ISV, we recommend 360 SMS to every client. <strong>The architecture is the most Salesforce-native we've seen</strong> — no external data, pure platform code, plays perfectly alongside our own managed packages.</p>
                    <div class="tm-qbot">
                        <div class="tm-qname">Kenji Nakamura</div>
                        <div class="tm-qrole">CTO · PlatformEdge Japan</div>
                        <div class="tm-qdate">Sep 2024</div>
                        <div class="tm-qsource">✦ Verified review</div>
                    </div>
                </div>

                <div class="tm-qc" data-date="2024-08-14" data-industry="healthcare" data-region="middle-east">
                    <span class="tm-qmark">"</span>
                    <p class="tm-qtext">Deployed 360 SMS at a <strong>300-bed hospital in Riyadh</strong> for post-discharge follow-up. Patient engagement improved dramatically — <strong>40% drop in readmissions in the first 90 days.</strong> Remarkable outcomes from a single messaging tool.</p>
                    <div class="tm-qbot">
                        <div class="tm-qname">Yusuf Al-Amin</div>
                        <div class="tm-qrole">Digital Health Lead · Al-Noor Medical Centre</div>
                        <div class="tm-qdate">Aug 2024</div>
                        <div class="tm-qsource">☁️ Salesforce AppExchange</div>
                    </div>
                </div>

                <div class="tm-qc" data-date="2024-07-30" data-industry="realestate" data-region="latam">
                    <span class="tm-qmark">"</span>
                    <p class="tm-qtext">If we didn't have 360 SMS, we'd lose the ability to respond when it matters — to reach clients right away and stay on top of every property lead. <strong>It would dramatically reduce our conversion rate.</strong> It's the backbone of our entire sales process.</p>
                    <div class="tm-qbot">
                        <div class="tm-qname">Bruno Silva</div>
                        <div class="tm-qrole">CRM Lead · Imóveis Prime Brasil</div>
                        <div class="tm-qdate">Jul 2024</div>
                        <div class="tm-qsource">☁️ Salesforce AppExchange</div>
                    </div>
                </div>

            </div>

            <div class="text-center mt-5" id="load-more-wrap">
                <button type="button" id="tm-load-more-btn" class="btn" onclick="loadMore()"
                    style="padding:12px 32px;background:var(--white);border:1.5px solid var(--bdr);border-radius:8px;font-size:14px;font-weight:600;color:var(--ink2);transition:all .15s">
                    Load more reviews ↓
                </button>
                <div id="all-loaded-cta" class="d-none flex-column align-items-center" style="gap:10px">
                    <div class="d-inline-block px-4 py-3 rounded-2 fw-bold text-white" style="background:var(--blue);font-size:14px;letter-spacing:-.1px">
                        ✓ All reviews loaded
                    </div>
                    <div style="font-size:12px;color:var(--ink4)">You've seen all <span id="total-count-label">18</span> reviews</div>
                </div>
                <div id="showing-count" class="mt-2" style="font-size:12px;color:var(--ink4)">Showing 6 of 18 reviews</div>
            </div>

            <div class="tm-empty text-center py-5" id="empty-state">
                <div class="tm-empty-ico">🔍</div>
                <p class="tm-empty-t">No reviews match these filters</p>
                <p class="tm-empty-s">Try removing a filter to see more stories.</p>
            </div>
        </div>
    </section>

    <!-- CTA BAND -->
    <section class="tm-cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h2 class="tm-cta-h">Try it out for yourself!</h2>
                    <p class="tm-cta-sub">Join 60,000+ Salesforce users who trust 360 SMS for patient, customer, and prospect communication across 15 channels.</p>
                    <div class="d-flex align-items-center justify-content-center gap-3 flex-wrap">
                        <a href="#" class="tm-cta-w">Try 360 SMS for Free</a>
                        <a href="#" class="tm-cta-o">View on AppExchange →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
var allCards = [];
var visibleLimit = 6;

document.addEventListener('DOMContentLoaded', function () {
    allCards = Array.from(document.querySelectorAll('#r-grid .tm-qc'));
    updateCount(allCards.length);
    applyFilters();
});

var currentCards = [];

function showCards(cards) {
    currentCards = cards;
    allCards.forEach(function (c) { c.classList.add('hidden'); });
    var toShow = cards.slice(0, visibleLimit);
    toShow.forEach(function (c) { c.classList.remove('hidden'); });
    updateLoadMore(cards);
}

function loadMore() {
    visibleLimit = visibleLimit + 3;
    var toShow = currentCards.slice(0, visibleLimit);
    toShow.forEach(function (c) { c.classList.remove('hidden'); });
    updateLoadMore(currentCards);
}

function updateLoadMore(cards) {
    var wrap = document.getElementById('load-more-wrap');
    var btn = document.getElementById('tm-load-more-btn');
    var allDone = document.getElementById('all-loaded-cta');
    var lbl = document.getElementById('showing-count');
    var totalLbl = document.getElementById('total-count-label');
    var shown = Math.min(visibleLimit, cards.length);
    var total = cards.length;
    if (total === 0) { wrap.style.display = 'none'; return; }
    wrap.style.display = 'block';
    lbl.textContent = 'Showing ' + shown + ' of ' + total + ' reviews';
    if (totalLbl) totalLbl.textContent = total;
    if (shown >= total) {
        btn.style.display = 'none';
        allDone.classList.remove('d-none');
        allDone.classList.add('d-flex');
    } else {
        btn.style.display = 'inline-block';
        allDone.classList.add('d-none');
        allDone.classList.remove('d-flex');
    }
}

function applyFilters() {
    var sort = document.getElementById('sort-sel').value;
    var ind = document.getElementById('ind-sel').value;
    var reg = document.getElementById('reg-sel').value;
    document.getElementById('ind-sel').classList.toggle('on', ind !== 'all');
    document.getElementById('reg-sel').classList.toggle('on', reg !== 'all');
    document.getElementById('fclr').style.display = (ind !== 'all' || reg !== 'all') ? 'inline-block' : 'none';
    visibleLimit = 6;
    var matched = allCards.filter(function (c) {
        return (ind === 'all' || c.dataset.industry === ind) && (reg === 'all' || c.dataset.region === reg);
    });
    matched.sort(function (a, b) {
        var da = new Date(a.dataset.date), db = new Date(b.dataset.date);
        return sort === 'newest' ? db - da : da - db;
    });
    allCards.forEach(function (c) { c.classList.add('hidden'); });
    var grid = document.getElementById('r-grid');
    matched.forEach(function (c) { grid.appendChild(c); });
    updateCount(matched.length);
    document.getElementById('empty-state').classList.toggle('show', matched.length === 0);
    showCards(matched);
}

function clearFilters() {
    document.getElementById('ind-sel').value = 'all';
    document.getElementById('reg-sel').value = 'all';
    applyFilters();
}

function updateCount(n) {
    document.getElementById('fcount').innerHTML = '<strong>' + n + '</strong> review' + (n !== 1 ? 's' : '');
}
</script>

<?php get_footer(); ?>
