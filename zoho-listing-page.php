<?php

/**
 * Template Name: ZOHO Listing
 * Description:   Standalone Salesforce-branded template. Blue theme (#0057B8).
 */
if (!defined('ABSPATH')) {
    exit;
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');
?>
<?php get_header('zoho'); ?>

<?php
/**
 * Zoho Template  - All Sections
 * Contains: Hero, Proof Strip, Inbox Showcase, Why 360 SMS, Red Bar & ROI,
 *           Channels, Features, Getting Started, CTA Bars,
 *           Industries, Testimonials, Resources, FAQ
 * Note: AI Agents section is excluded for Zoho template
 */
?>

<style>
/* ═══ SECTION 1: HERO ═══ */
.zoho-hero {
    background: linear-gradient(90deg, #FEF0F1 0%, #F7F7F5 65%);
    padding: 56px 0 52px;
}
.hero-pill {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #fff;
    border: 1.5px solid #f0c0a8;
    border-radius: 20px;
    padding: 5px 14px;
    font-size: 12px;
    color: #555;
    font-weight: 500;
    margin-bottom: 24px;
}
.hero-pill-dot {
    width: 8px;
    height: 8px;
    background: #e06030;
    border-radius: 50%;
    flex-shrink: 0;
    display: inline-block;
}
.zoho-hero-h1 {
    font-size: 38px;
    font-weight: 800;
    line-height: 1.1;
    color: #111;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.zoho-hero-h1 .kw-orange {
    color: #d04a20;
}
.zoho-hero-sub {
    font-size: 15px;
    color: #555;
    line-height: 1.65;
    margin-bottom: 28px;
    max-width: 420px;
}
.btn-hero-primary {
    background: #0057B8;
    color: #fff;
    border: none;
    border-radius: 7px;
    padding: 11px 22px;
    font-size: 14px;
    font-weight: 700;
    cursor: pointer;
    transition: background 0.2s;
}
.btn-hero-primary:hover {
    background: #004fa3;
    color: #fff;
}
.btn-hero-ghost {
    background: transparent;
    color: #222;
    border: 1.5px solid #bbb;
    border-radius: 7px;
    padding: 10px 20px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: border-color 0.2s;
}
.btn-hero-ghost:hover {
    border-color: #888;
}
.hero-trust {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 13px;
    color: #666;
    flex-wrap: wrap;
    margin-top: 4px;
}
.hero-trust-stars {
    color: #f4a820;
    font-size: 14px;
    letter-spacing: 1px;
}
.hero-trust-rating {
    font-weight: 700;
    color: #222;
}
.hero-trust-sep {
    color: #ccc;
}
.zoho-hero-img {
    width: 100%;
    height: auto;
    display: block;
}

/* ═══ SECTION 2: PROOF STRIP ═══ */
.proof-strip {
    border-top: 1px solid #e8e8e8;
    border-bottom: 1px solid #e8e8e8;
    background: #fff;
    padding: 16px 0;
}
.proof-stat-num {
    font-size: 21px;
    font-weight: 800;
    color: #111;
    line-height: 1.1;
    white-space: nowrap;
}
.proof-stat-num-sm {
    font-size: 17px;
    font-weight: 800;
    color: #111;
    line-height: 1.2;
    white-space: nowrap;
}
.proof-stat-label {
    font-size: 11px;
    color: #999;
    line-height: 1.3;
    margin-top: 2px;
}
.proof-ai-pill {
    background: #FCE8EA;
    color: #DA5D45;
    font-size: 12px;
    font-weight: 600;
    border-radius: 4px;
    padding: 7px 14px;
    white-space: nowrap;
}

/* ═══ SECTION 3: WHY TEAMS CHOOSE ═══ */
.why-teams-sec {
    background: #fff;
    padding: 64px 0 60px;
}
.why-kicker {
    text-align: center;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    color: #aaa;
    text-transform: uppercase;
    margin-bottom: 14px;
}
.why-h2 {
    text-align: center;
    font-size: 34px;
    font-weight: 800;
    color: #111;
    letter-spacing: -0.5px;
    margin-bottom: 14px;
    line-height: 1.15;
}
.why-sub {
    text-align: center;
    font-size: 15px;
    color: #666;
    max-width: 560px;
    margin: 0 auto 44px;
    line-height: 1.65;
}
.why-feat-card {
    border: 1px solid #e8e8e8;
    border-radius: 12px;
    padding: 26px 22px;
    background: #fff;
    height: 100%;
}
.why-feat-icon {
    width: 42px;
    height: 42px;
    background: #eef3ff;
    border-radius: 9px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 16px;
    flex-shrink: 0;
}
.why-feat-title {
    font-size: 14px;
    font-weight: 700;
    color: #111;
    margin-bottom: 8px;
    line-height: 1.3;
}
.why-feat-desc {
    font-size: 13px;
    color: #888;
    line-height: 1.55;
    margin: 0;
}
a{
    text-decoration:none !important;
}
</style>

<!-- ═══ SECTION 1: HERO ═══ -->
<section id="hero-sec" class="zoho-hero">
    <div class="container">
        <div class="row align-items-center g-4">

            <!-- LEFT COLUMN -->
            <div class="col-lg-6">
                <div class="hero-pill">
                    <span class="hero-pill-dot"></span>
                    3 Channels · Zoho-Native · One-Click Install
                </div>
                <h1 class="zoho-hero-h1">
                    SMS, MMS, &amp; WhatsApp<br>
                    <span class="kw-orange">natively Inside Zoho CRM</span>
                </h1>
                <p class="zoho-hero-sub">
                    Bring the most effective messaging channels into Zoho CRM with 360 SMS- no middleware, no API setup, no developer. Every message auto-logged to the record. Go Live in minutes.
                </p>
                <div class="d-flex gap-3 mb-3">
                    <a href="https://marketplace.zoho.com/app/crm/360-sms-for-zoho-crm" target="_blank" class="btn-hero-primary">Book a Demo</a>
                    <a href="#contact_form" class="btn-hero-ghost">Start Free Trial</a>
                </div>
                <div class="hero-trust">
                    <span class="hero-trust-stars">★★★★★</span>
                    <span class="hero-trust-rating">4.9/5.0</span>
                    <span class="hero-trust-sep">·</span>
                    <span>1,200+ AppExchange reviews</span>
                    <span class="hero-trust-sep">·</span>
                    <span>10+ years</span>
                </div>
            </div>

            <!-- RIGHT COLUMN -->
            <div class="col-lg-6">
                <img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/06/Zoho-listing-1.webp" alt="360 SMS Inbox" class="zoho-hero-img">
            </div>

        </div>
    </div>
</section>

<!-- ═══ SECTION 2: PROOF STRIP ═══ -->
<div class="proof-strip">
    <div class="container">
        <div class="row g-0 align-items-center">
            <div class="col border-end py-2 px-3">
                <div class="proof-stat-num">98%</div>
                <div class="proof-stat-label">SMS<br>open rate</div>
            </div>
            <div class="col border-end py-2 px-3">
                <div class="proof-stat-num-sm">Quick<br>setup</div>
                <div class="proof-stat-label">from Zoho-<br>marketplace</div>
            </div>
            <div class="col border-end py-2 px-3">
                <div class="proof-stat-num">50%</div>
                <div class="proof-stat-label">Faster<br>follow-ups</div>
            </div>
            <div class="col border-end py-2 px-3">
                <div class="proof-stat-num">35%</div>
                <div class="proof-stat-label">Higher<br>engagement</div>
            </div>
            <div class="col border-end py-2 px-3">
                <div class="proof-stat-num">53%</div>
                <div class="proof-stat-label">Reduced<br>Manual Effort</div>
            </div>
            <div class="col py-2 px-3 d-flex justify-content-end align-items-center">
                <span class="proof-ai-pill">AI-powered Zoho messaging</span>
            </div>
        </div>
    </div>
</div>

<!-- ═══ SECTION 3: WHY TEAMS CHOOSE ═══ -->
<section class="why-teams-sec">
    <div class="container">
        <div class="why-kicker">WHY TEAMS CHOOSE 360 SMS FOR ZOHO</div>
        <h2 class="why-h2">All Conversations. Connected Inside Zoho CRM.</h2>
        <p class="why-sub">Send SMS, MMS, and WhatsApp from one inbox inside Zoho. Every message logs itself to the right record - nothing falls through, nobody has to remember to update anything.</p>

        <div class="row g-3">

            <!-- Card 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="why-feat-card">
                    <div class="why-feat-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="5" width="18" height="14" rx="2" stroke="#0057B8" stroke-width="1.8"/>
                            <path d="M3 9h18" stroke="#0057B8" stroke-width="1.8"/>
                            <path d="M7 13h4M7 16h6" stroke="#0057B8" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="why-feat-title">100% Zoho-Native</div>
                    <p class="why-feat-desc">No middleware, no external tools. Every message, reply, and opt-out is managed and auto-logged directly inside Zoho CRM.</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="why-feat-card">
                    <div class="why-feat-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="8" stroke="#0057B8" stroke-width="1.8"/>
                            <path d="M12 8v4l3 2" stroke="#0057B8" stroke-width="1.8" stroke-linecap="round"/>
                            <path d="M5 3l-2 2M19 3l2 2" stroke="#0057B8" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="why-feat-title">One-Click Install</div>
                    <p class="why-feat-desc">Install directly from Zoho Marketplace and get started in minutes. No API setup required. Connect your number and start messaging from Zoho CRM.</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="why-feat-card">
                    <div class="why-feat-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2z" stroke="#0057B8" stroke-width="1.8"/>
                            <path d="M8 12l3 3 5-5" stroke="#0057B8" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="why-feat-title">AI Chatbot 24/7</div>
                    <p class="why-feat-desc">Let your teams focus on priority tasks. Answer FAQs, qualify leads, book demos, and routes conversations when needed, capturing every opportunity with AI chatbots.</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="why-feat-card">
                    <div class="why-feat-icon">
                        <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="12" width="4" height="9" rx="1" fill="#0057B8" opacity="0.3" stroke="#0057B8" stroke-width="1.5"/>
                            <rect x="10" y="7" width="4" height="14" rx="1" fill="#0057B8" opacity="0.5" stroke="#0057B8" stroke-width="1.5"/>
                            <rect x="17" y="3" width="4" height="18" rx="1" fill="#0057B8" stroke="#0057B8" stroke-width="1.5"/>
                        </svg>
                    </div>
                    <div class="why-feat-title">Zoho Workflow Automation</div>
                    <p class="why-feat-desc">Trigger SMS and WhatsApp messages based on CRM events-no code, no developer needed.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
/**
 * Section 4: ZOHO CRM Messaging Channels
 * 3 channels. All natively inside Zoho CRM.
 */
?>

<style>
/* ═══ SECTION 4: CHANNELS ═══ */
.ch-section {
    background: #fff;
    padding: 64px 0 72px;
}

/* Header row */
.ch-kicker {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #aaa;
    margin-bottom: 14px;
}
.ch-h2 {
    font-size: 32px;
    font-weight: 800;
    color: #111;
    letter-spacing: -0.4px;
    line-height: 1.15;
    margin-bottom: 14px;
}
.ch-sub {
    font-size: 14px;
    color: #666;
    line-height: 1.65;
    max-width: 500px;
    margin: 0;
}

/* Native badge (top-right) */
.ch-native-badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #FCE8EA;
    border: 1.5px solid #F5C0C6;
    border-radius: 12px;
    padding: 12px 18px;
    max-width: 260px;
}
.ch-native-badge-icon {
    font-size: 20px;
    flex-shrink: 0;
    line-height: 1;
}
.ch-native-badge-title {
    font-size: 13px;
    font-weight: 700;
    color: #111;
    line-height: 1.2;
    margin-bottom: 2px;
}
.ch-native-badge-sub {
    font-size: 11.5px;
    color: #888;
    line-height: 1;
}

/* Channel Cards */
.ch-card {
    background: linear-gradient(180deg, #FFF4F2 0%, #FFFFFF 100%);
    border: 1px solid #F5C0C6;
    border-radius: 16px;
    padding: 28px 26px 24px;
    height: 100%;
    display: flex;
    flex-direction: column;
}

/* Card top row: icon + badge */
.ch-card-top {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 22px;
}

/* Channel icon boxes */
.ch-icon-box {
    width: 46px;
    height: 46px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}
.ch-icon-box-blue  { background: #eef3ff; }
.ch-icon-box-green { background: #e8f8ee; }
.ch-icon-box-sky   { background: #e8f4ff; }

/* Card label badges */
.ch-label-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    border-radius: 20px;
    padding: 4px 11px;
    font-size: 11.5px;
    font-weight: 600;
    line-height: 1;
    white-space: nowrap;
}
.ch-label-fire  { background: #fff3ed; color: #c05a20; }
.ch-label-globe { background: #eef4ff; color: #1d5cbf; }
.ch-label-bolt  { background: #fffbea; color: #a07010; }

/* Card content */
.ch-card-title {
    font-size: 18px;
    font-weight: 800;
    color: #111;
    margin-bottom: 10px;
    line-height: 1.2;
}
.ch-card-desc {
    font-size: 13.5px;
    color: #666;
    line-height: 1.6;
    margin-bottom: 22px;
}

/* Checklist */
.ch-checklist {
    list-style: none;
    padding: 0;
    margin: 0 0 28px 0;
    display: flex;
    flex-direction: column;
    gap: 8px;
    flex: 1;
}
.ch-checklist li {
    display: flex;
    align-items: flex-start;
    gap: 8px;
    font-size: 13px;
    color: #444;
    line-height: 1.4;
}
.ch-check {
    color: #c05a20;
    font-size: 13px;
    font-weight: 700;
    flex-shrink: 0;
    margin-top: 1px;
}

/* CTA Button */
.ch-cta-btn {
    display: block;
    width: 100%;
    text-align: center;
    background: #FCE8EA;
    color: #DA5D45;
    border: 1.5px solid #F5C0C6;
    border-radius: 8px;
    padding: 11px 16px;
    font-size: 13.5px;
    font-weight: 600;
    text-decoration: none;
    cursor: pointer;
    transition: background 0.2s, border-color 0.2s;
    margin-top: auto;
}
.ch-cta-btn:hover {
    background: #fde8de;
    border-color: #e8a88c;
    color: #c04a18;
    text-decoration: none;
}
h2.fw-bold.mb-2.cta-bar-h {
    font-size: 20px !important;
}
</style>

<!-- ═══ SECTION 4: CHANNELS ═══ -->
<section class="ch-section">
    <div class="container">

        <!-- Header Row -->
        <div class="row align-items-start mb-5">
                <div class="ch-kicker">ZOHO CRM MESSAGING CHANNELS</div>
                <h2 class="ch-h2">3 Channels. All Natively Inside Zoho CRM.</h2>
            <div class="col-lg-8">
                <p class="ch-sub">Keep SMS, MMS, and WhatsApp in a single inbox - already inside Zoho CRM. One login, one place, nothing else open. Every conversation is auto-logged to your CRM records.</p>
            </div>
            <div class="col-lg-4 d-flex justify-content-lg-end align-items-start mt-3 mt-lg-0">
                <div class="ch-native-badge">
                    <span class="ch-native-badge-icon">📦</span>
                    <div>
                        <div class="ch-native-badge-title">Native Zoho Marketplace App</div>
                        <div class="ch-native-badge-sub">One-click install · No developer</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cards Row -->
        <div class="row g-4">

            <!-- Card 1: SMS -->
            <div class="col-lg-4 col-md-6">
                <div class="ch-card">
                    <div class="ch-card-top">
                        <div class="ch-icon-box ch-icon-box-blue">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M20 2H4C2.9 2 2 2.9 2 4V22L6 18H20C21.1 18 22 17.1 22 16V4C22 2.9 21.1 2 20 2Z" fill="#4a7cff" opacity="0.2" stroke="#4a7cff" stroke-width="1.6" stroke-linejoin="round"/>
                                <path d="M7 9h10M7 13h6" stroke="#4a7cff" stroke-width="1.6" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <span class="ch-label-badge ch-label-fire">🔥 Most Used</span>
                    </div>
                    <div class="ch-card-title">SMS for Zoho CRM</div>
                    <p class="ch-card-desc">Two-way texting and bulk messaging - all auto-logged to Zoho Contacts, Leads, and Deals. High open rates ensure your messages get seen.</p>
                    <ul class="ch-checklist">
                        <li><span class="ch-check">✓</span><span>1-on-1 &amp; bulk SMS from any Zoho record</span></li>
                        <li><span class="ch-check">✓</span><span>Zoho Workflow automation (no code)</span></li>
                        <li><span class="ch-check">✓</span><span>Scheduling &amp; automated follow-ups</span></li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/')); ?>sms-messaging-app-zoho-crm/" class="ch-cta-btn">Explore SMS for Zoho</a>
                </div>
            </div>

            <!-- Card 2: WhatsApp -->
            <div class="col-lg-4 col-md-6">
                <div class="ch-card">
                    <div class="ch-card-top">
                        <div class="ch-icon-box ch-icon-box-green">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2 22l4.978-1.418A9.956 9.956 0 0012 22c5.523 0 10-4.477 10-10S17.523 2 12 2z" fill="#25D366" opacity="0.15" stroke="#25D366" stroke-width="1.6"/>
                                <path d="M8.5 9.5C8.5 8.9 9 8.5 9.5 8.5c.3 0 .6.1.8.4l1 1.5c.2.3.2.7 0 1l-.5.7c.4.8 1 1.4 1.8 1.8l.7-.5c.3-.2.7-.2 1 0l1.5 1c.3.2.4.5.4.8 0 .5-.4 1-1 1C11 16.2 8 13.1 8.5 9.5z" fill="#25D366"/>
                            </svg>
                        </div>
                        <span class="ch-label-badge ch-label-globe">🌐 2B Users</span>
                    </div>
                    <div class="ch-card-title">WhatsApp for Zoho CRM</div>
                    <p class="ch-card-desc">Templates, rich media, bulk messaging, two-way WhatsApp conversations - handled natively inside Zoho CRM. Your team never has to open WhatsApp Business separately.</p>
                    <ul class="ch-checklist">
                        <li><span class="ch-check">✓</span><span>WhatsApp Business API integration</span></li>
                        <li><span class="ch-check">✓</span><span>Templates, images &amp; documents</span></li>
                        <li><span class="ch-check">✓</span><span>2-way conversations from Zoho records</span></li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/')); ?>whatsapp-integration-zoho-crm/" class="ch-cta-btn">Explore WhatsApp for Zoho</a>
                </div>
            </div>

            <!-- Card 3: MMS -->
            <div class="col-lg-4 col-md-6">
                <div class="ch-card">
                    <div class="ch-card-top">
                        <div class="ch-icon-box ch-icon-box-sky">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <rect x="3" y="5" width="18" height="14" rx="2" fill="#4a9eff" opacity="0.15" stroke="#4a9eff" stroke-width="1.6"/>
                                <path d="M3 15l4-4 3 3 4-5 4 6" stroke="#4a9eff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                                <circle cx="8.5" cy="9.5" r="1.5" fill="#4a9eff"/>
                            </svg>
                        </div>
                        <span class="ch-label-badge ch-label-bolt">⚡ Visual Impact</span>
                    </div>
                    <div class="ch-card-title">MMS for Zoho CRM</div>
                    <p class="ch-card-desc">Drop images, links, and attachments into messages and give customers something worth opening - not just another line of text.</p>
                    <ul class="ch-checklist">
                        <li><span class="ch-check">✓</span><span>Send images, links, and attachments via MMS</span></li>
                        <li><span class="ch-check">✓</span><span>Personalize messages using Zoho CRM data</span></li>
                        <li><span class="ch-check">✓</span><span>Ideal for promotions, updates, and announcements</span></li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/')); ?>ai-led-zoho-messaging-app/" class="ch-cta-btn">Explore MMS for Zoho</a>
                </div>
            </div>

        </div>
    </div>
</section>




<!-- ═══ SECTION 10: CTA BAR ═══ -->
<section class="bg-cta c-white" id="cta-bar-10">
    <div class="container py-3">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h2 class="fw-bold mb-2 cta-bar-h fs-32 mt-0" style="color:#fff">Bring SMS, MMS, & WhatsApp natively into Zoho CRM.</h2>
                <p class="mb-0 opacity-75 fs-16" style="color:#fff">One-click Marketplace install · No developer · Go live in minutes</p>
            </div>
            <div class="col-lg-5 text-lg-end mt-4 mt-lg-0">
                <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
                    <a href="https://marketplace.zoho.com/app/crm/360-sms-for-zoho-crm" target="_blank" class="btn btn-light px-4 py-2 fw-semibold text-primary"> Book a Demo </a>
                    <button class="open-popup-form-on-click btn btn-outline-light px-4 py-2 fw-bold btn-cta-light">Contact our experts</button>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
/**
 * Section: HOW WE COMPARE
 * 360 SMS vs native Zoho messaging
 */
?>

<style>
/* ═══ COMPARE SECTION ═══ */
.cmp-section {
    background: #fff;
    padding: 64px 0 72px;
}

/* Header */
.cmp-kicker {
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: #aaa;
    margin-bottom: 14px;
}
.cmp-h2 {
    font-size: 32px;
    font-weight: 800;
    color: #111;
    letter-spacing: -0.4px;
    line-height: 1.15;
    margin-bottom: 12px;
}
.cmp-sub {
    font-size: 14px;
    color: #666;
    line-height: 1.65;
    max-width: 420px;
    margin: 0 0 40px 0;
}

/* Table wrapper */
.cmp-table-wrap {
    background: #f4f4f4;
    border-radius: 16px;
    overflow: visible;
    padding: 0;
}

/* Table */
.cmp-table {
    width: 100%;
    border-collapse: separate;
    border-spacing: 0;
    table-layout: fixed;
}

/* Header row */
.cmp-table thead tr th {
    padding: 18px 24px;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    vertical-align: middle;
}
.cmp-th-label {
    width: 42%;
    color: #999;
    background: #f4f4f4;
    border-radius: 16px 0 0 0;
    text-align: left;
}
.cmp-th-360 {
    width: 29%;
    background: #0057B8;
    color: #fff;
    text-align: center;
    border-radius: 10px 10px 0 0;
    position: relative;
    top: -2px;
    box-shadow: 0 -2px 12px rgba(0, 87, 184, 0.18);
}
.cmp-th-native {
    width: 29%;
    color: #999;
    background: #f4f4f4;
    border-radius: 0 16px 0 0;
    text-align: center;
}

/* Body rows */
.cmp-table tbody tr {
    background: #fff;
}
.cmp-table tbody tr td {
    padding: 20px 24px;
    border-bottom: 1px solid #efefef;
    vertical-align: middle;
    font-size: 14px;
}
.cmp-table tbody tr:last-child td {
    border-bottom: none;
}
.cmp-table tbody tr:last-child td:first-child {
    border-radius: 0 0 0 16px;
}
.cmp-table tbody tr:last-child td:last-child {
    border-radius: 0 0 16px 0;
}

/* Row label col */
.cmp-td-label {
    font-weight: 700;
    color: #111;
    text-align: left;
}

/* 360 SMS col */
.cmp-td-360 {
    text-align: center;
    font-weight: 700;
    color: #111;
    background: #FEF9FA;
}

/* Native col */
.cmp-td-native {
    text-align: center;
    color: #aaa;
    font-weight: 400;
    background: #fff;
}

/* Icons */
.cmp-check {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #22a855;
    font-size: 18px;
    font-weight: 700;
    line-height: 1;
}
.cmp-cross {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    color: #e84040;
    font-size: 16px;
    font-weight: 700;
    line-height: 1;
}
#cta-bar-13,#cta-bar-10{
    background:#0057B8;
}
</style>

<!-- ═══ SECTION: COMPARE ═══ -->
<section class="cmp-section">
    <div class="container">

        <!-- Header -->
        <div class="cmp-kicker">HOW WE COMPARE</div>
        <h2 class="cmp-h2">360 SMS vs Native Zoho Messaging</h2>
        <p class="cmp-sub">See how 360 SMS stands out - built to scale Zoho CRM messaging without limitations or developer effort.</p>

        <!-- Comparison Table -->
        <div class="cmp-table-wrap">
            <table class="cmp-table">
                <thead>
                    <tr>
                        <th class="cmp-th-label">Elements</th>
                        <th class="cmp-th-360">360 SMS for Zoho</th>
                        <th class="cmp-th-native">Others</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="cmp-td-label">Zoho Native</td>
                        <td class="cmp-td-360">100%</td>
                        <td class="cmp-td-native">Partially</td>
                    </tr>
                    <tr>
                        <td class="cmp-td-label">Redirection to external portal</td>
                        <td class="cmp-td-360">No</td>
                        <td class="cmp-td-native">Yes</td>
                    </tr>
                    <tr>
                        <td class="cmp-td-label">AI-powered Messaging</td>
                        <td class="cmp-td-360">
                            <span class="cmp-check">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path d="M4 10.5L8.5 15L16 7" stroke="#22a855" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </span>
                        </td>
                        <td class="cmp-td-native">
                            <span class="cmp-cross">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M4.5 4.5L13.5 13.5M13.5 4.5L4.5 13.5" stroke="#e84040" stroke-width="2" stroke-linecap="round"/>
                                </svg>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</section>

<?php get_footer('zoho'); ?>