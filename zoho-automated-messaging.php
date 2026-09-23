<?php
/*
Template Name: Zoho CRM Automated Messaging
*/
    get_header('zoho');

    // Image folder for this page — update if the images live elsewhere.
    $zam_img = "https://360smsapp.com/wp-content/uploads/2026/09/";
?>
<style>
    /* ==========================================================================
       Zoho CRM Automated Messaging
       Typography & components matched to the Zoho WhatsApp Integration page.
       Everything is scoped to .zam-page so header/footer are not affected.
       ========================================================================== */
    .zam-page {
        --blue: #0070d2;
        --blue-dark: #0058a3;
        --red: #DA5D45;
        --dark: #1a1a1a;
        --muted: #6c757d;
        --border: #e8edf2;
        --radius: 14px;

        font-family: 'Plus Jakarta Sans', sans-serif;
        font-size: 15px;
        line-height: 1.65;
        color: var(--dark);
        background: #fff;
    }

    .zam-page *,
    .zam-page *::before,
    .zam-page *::after {
        box-sizing: border-box;
    }

    .zam-page h1,
    .zam-page h2,
    .zam-page h3,
    .zam-page h4 {
        font-family: inherit;
        font-weight: 700;
        color: var(--dark);
    }

    .zam-page section {
        padding: 80px 0;
    }

    .zam-page .container {
        max-width: 1200px;
    }

    .zam-page img {
        max-width: 100%;
        height: auto;
    }

    /* ---------- Shared text ---------- */
    .zam-eyebrow {
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.12em;
        color: var(--red);
        text-transform: uppercase;
        margin-bottom: 12px;
    }

    .zam-h2 {
        font-size: clamp(22px, 3vw, 32px);
        line-height: 1.25;
        margin-bottom: 12px;
    }

    .zam-sub {
        color: var(--muted);
        font-size: 14px;
        line-height: 1.7;
        max-width: 680px;
        margin-bottom: 24px;
    }

    .zam-accent {
        color: var(--red);
    }

    /* ---------- Buttons (same as WhatsApp page) ---------- */
    .btn-primary-solid {
        background: var(--blue);
        color: #fff;
        border: 2px solid var(--blue);
        border-radius: 8px;
        padding: 11px 24px;
        font-weight: 600;
        font-size: 13.5px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        transition: .2s;
    }

    .btn-primary-solid:hover {
        background: var(--blue-dark);
        border-color: var(--blue-dark);
        color: #fff;
    }

    .btn-white-solid,
    .btn-white-outline {
        border-radius: 8px;
        padding: 9px 22px;
        font-weight: 700;
        font-size: 13.5px;
        text-decoration: none;
        white-space: nowrap;
        display: inline-flex;
        align-items: center;
        cursor: pointer;
        transition: all .2s;
    }

    .btn-white-solid {
        background: #fff;
        color: var(--blue);
        border: 2px solid #fff;
    }

    .btn-white-solid:hover {
        background: #e8f1fb;
        color: var(--blue-dark);
    }

    .btn-white-outline {
        background: transparent;
        color: #fff;
        border: 2px solid rgba(255, 255, 255, 0.5);
    }

    .btn-white-outline:hover {
        background: rgba(255, 255, 255, 0.12);
        border-color: #fff;
        color: #fff;
    }

    .zam-page a:focus-visible {
        outline: 2px solid var(--red);
        outline-offset: 3px;
    }

    /* ---------- Hero ---------- */
    #zam-hero {
        padding: 64px 0 60px;
        background: linear-gradient(to right, #eff6ff, #f7f7f5);
    }

    #zam-hero h1 {
        font-size: clamp(28px, 4vw, 44px);
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 18px;
    }

    .zam-hero-sub {
        color: var(--muted);
        font-size: 15px;
        line-height: 1.7;
        max-width: 480px;
        margin-bottom: 28px;
    }

    .zam-trust {
        display: flex;
        align-items: center;
        gap: 14px;
        flex-wrap: wrap;
        margin-top: 24px;
    }

    .zam-stars {
        color: var(--red);
        font-size: 14px;
        letter-spacing: 1px;
    }

    .zam-trust-divider {
        width: 1px;
        height: 16px;
        background: #d0d8e4;
        flex-shrink: 0;
    }

    .zam-trust-item {
        font-size: 13px;
        font-weight: 600;
        color: #333;
    }

    /* ---------- Stats bar ---------- */
    #zam-stats {
        background: #F7F7F5;
        border-top: 1px solid var(--border);
        border-bottom: 1px solid var(--border);
    }

    .zam-stats-inner {
        display: flex;
        align-items: stretch;
    }

    .zam-stat {
        flex: 1;
        text-align: center;
        padding: 22px 12px;
        border-right: 1px solid var(--border);
    }

    .zam-stat:last-child {
        border-right: none;
    }

    .zam-stat-num {
        font-size: 22px;
        font-weight: 800;
        color: var(--red);
        line-height: 1;
        letter-spacing: -0.5px;
    }

    .zam-stat-label {
        font-size: 11px;
        font-weight: 500;
        color: var(--muted);
        margin-top: 5px;
        line-height: 1.35;
    }

    /* ---------- Checklist ---------- */
    .zam-check {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 12px;
        font-size: 13.5px;
        font-weight: 600;
        color: #333;
    }

    .zam-check i {
        color: var(--red);
        margin-top: 2px;
        flex-shrink: 0;
    }

    .zam-callout {
        border-left: 4px solid var(--blue);
        background: #EAF2FF;
        border-radius: 0 8px 8px 0;
        padding: 16px 20px;
        font-size: 13.5px;
        line-height: 1.6;
        color: #444;
        margin: 20px 0 24px;
    }

    /* ---------- Autopilot section ---------- */
    #zam-autopilot {
        background: #f8f9fa;
    }

    .zam-panel {
        background: #E8F0FB;
        border-radius: var(--radius);
        padding: 32px;
    }

    .zam-panel-label {
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--muted);
        margin-bottom: 18px;
    }

    .zam-panel-item {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 16px;
    }

    .zam-panel-item:last-child {
        margin-bottom: 0;
    }

    .zam-panel-item i {
        color: var(--red);
        margin-top: 2px;
        flex-shrink: 0;
    }

    .zam-panel-title {
        font-size: 13.5px;
        font-weight: 700;
        color: var(--dark);
        line-height: 1.55;
    }

    .zam-panel-title span {
        font-size: 13px;
        font-weight: 400;
        color: var(--muted);
    }

    /* ---------- CTA band ---------- */
    #zam-cta {
        background: var(--red);
        text-align: center;
        padding: 64px 0;
    }

    #zam-cta h2 {
        color: #fff;
        font-size: clamp(22px, 3vw, 32px);
        font-weight: 800;
        line-height: 1.25;
        margin-bottom: 12px;
    }

    #zam-cta p {
        color: rgba(255, 255, 255, 0.85);
        font-size: 14.5px;
        line-height: 1.7;
        max-width: 760px;
        margin: 0 auto 28px;
    }

    /* ---------- Why cards (same as WhatsApp "Why choose us") ---------- */
    .wc-stat-card {
        background: #fff;
        border: 1px solid var(--border);
        border-radius: 12px;
        padding: 24px 20px;
        height: 100%;
    }

    .wc-stat-num {
        font-size: 36px;
        font-weight: 800;
        color: var(--red);
        line-height: 1;
        margin-bottom: 8px;
    }

    .wc-stat-label {
        font-size: 13.5px;
        font-weight: 700;
        color: #0f172a;
        margin-bottom: 8px;
    }

    .wc-stat-desc {
        font-size: 12.5px;
        color: #64748b;
        line-height: 1.6;
        margin: 0;
    }

    /* ---------- Responsive ---------- */
    @media (max-width: 991px) {
        .zam-hero-img {
            margin-top: 32px;
        }
    }

    @media (max-width: 767px) {
        .zam-page section {
            padding: 48px 0;
        }

        .zam-page h2 {
            font-size: 24px !important;
        }

        .zam-stats-inner {
            flex-wrap: wrap;
        }

        .zam-stat {
            flex: 0 0 50%;
            max-width: 50%;
            border-bottom: 1px solid var(--border);
            padding: 14px 8px;
        }

        .zam-stat:nth-child(2n) {
            border-right: none;
        }

        .zam-panel {
            padding: 24px 20px;
        }

        .btn-primary-solid {
            width: 100%;
        }

        .zam-trust {
            gap: 10px;
        }
    }

    /* Shared header/footer overrides (kept from the live page) */
    .testimonial-p {
        font-size: 15px;
        line-height: 1.7;
    }

    #three60-hp-root .btn-nav-pri {
        padding: 10px 20px !important;
    }
</style>

<main class="zam-page">

    <!-- ===== HERO ===== -->
    <section id="zam-hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <h1>Send SMS Automatically from <span class="zam-accent">Zoho CRM</span> to Drive More Engagement</h1>
                    <p class="zam-hero-sub">Stop relying on manual reminders and repetitive messaging that cost you valuable time. Deliver timely, personalized communication with Zoho CRM automated SMS.</p>
                    <a class="open-popup-form-on-click btn-primary-solid">Book a Free Demo</a>

                    <div class="zam-trust">
                        <span class="zam-stars" aria-label="5 star rating">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </span>
                        <span class="zam-trust-divider"></span>
                        <span class="zam-trust-item">52% less manual work</span>
                        <span class="zam-trust-divider"></span>
                        <span class="zam-trust-item">43% faster communication</span>
                        <span class="zam-trust-divider"></span>
                        <span class="zam-trust-item">36% higher engagement</span>
                    </div>
                </div>
                <div class="col-lg-6 zam-hero-img">
                    <img width="1012" height="714" src="<?php echo esc_url($zam_img . 'zoho-am-hero.webp'); ?>" alt="Automated SMS workflow running inside Zoho CRM, with the reminder auto-logged to the Lead record">
                </div>
            </div>
        </div>
    </section>

    <!-- ===== STATS BAR ===== -->
    <div id="zam-stats">
        <div class="container px-0">
            <div class="zam-stats-inner">
                <div class="zam-stat">
                    <div class="zam-stat-num">52%</div>
                    <div class="zam-stat-label">Less Manual<br>Work</div>
                </div>
                <div class="zam-stat">
                    <div class="zam-stat-num">43%</div>
                    <div class="zam-stat-label">Faster Customer<br>Communication</div>
                </div>
                <div class="zam-stat">
                    <div class="zam-stat-num">36%</div>
                    <div class="zam-stat-label">Higher Customer<br>Engagement</div>
                </div>
                <div class="zam-stat">
                    <div class="zam-stat-num">14+</div>
                    <div class="zam-stat-label">Years of CRM<br>Messaging Innovation</div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== POWER EVERY CUSTOMER JOURNEY ===== -->
    <section id="zam-journey">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <img width="1044" height="774" loading="lazy" src="<?php echo esc_url($zam_img . 'zoho-am-journey.webp'); ?>" alt="Zoho CRM automated SMS: workflow-based automation, one-click setup, and data that stays inside Zoho CRM">
                </div>
                <div class="col-lg-6">
                    <div class="zam-eyebrow">Power every customer journey</div>
                    <h2 class="zam-h2">Power Every Customer Journey with Zoho Automation</h2>
                    <p class="zam-sub">Automate personalized SMS communication directly from your CRM—without manual follow-ups.</p>

                    <div class="zam-check"><i class="bi bi-check-circle-fill"></i> Zoho CRM SMS workflow automation, no coding required</div>
                    <div class="zam-check"><i class="bi bi-check-circle-fill"></i> Customer data and automated conversations stay inside Zoho CRM</div>
                    <div class="zam-check"><i class="bi bi-check-circle-fill"></i> Go live in minutes with a simple, one-click setup</div>
                    <div class="zam-check"><i class="bi bi-check-circle-fill"></i> Trigger personalized SMS from workflows, schedules, and CRM events</div>

                    <div class="zam-callout">
                        It's your all-in-one solution to <strong>send SMS from Zoho CRM</strong> and automate customer engagement at every stage of their journey.
                    </div>

                    <a class="open-popup-form-on-click btn-primary-solid">Book a Free Demo</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== AUTOPILOT ===== -->
    <section id="zam-autopilot">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="zam-h2">Put Sales, Marketing, and Support on Autopilot with Zoho CRM</h2>
            </div>

            <!-- Row 1 -->
            <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-6">
                    <div class="zam-panel">
                        <div class="zam-panel-label">Sales &amp; lead automation</div>
                        <div class="zam-panel-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="zam-panel-title">Instant Lead Follow-Ups <span>— Automatically send personalized SMS when a new lead is created so every inquiry receives immediate attention.</span></div>
                        </div>
                        <div class="zam-panel-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="zam-panel-title">Appointment &amp; Meeting Reminders <span>— Reduce no-shows by automatically sending reminders before scheduled meetings, demos, or consultations.</span></div>
                        </div>
                        <div class="zam-panel-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="zam-panel-title">Lead Nurturing Campaigns <span>— Keep prospects engaged with timely follow-up messages triggered by their CRM journey and activity.</span></div>
                        </div>
                        <div class="zam-panel-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="zam-panel-title">Order &amp; Status Updates <span>— Automatically notify customers about order confirmations, shipping updates, and important service milestones.</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img width="1012" height="714" loading="lazy" src="<?php echo esc_url($zam_img . 'zoho-am-workflow-builder.webp'); ?>" alt="360 SMS workflow builder in Zoho CRM running Instant Lead Follow-Ups">
                </div>
            </div>

            <!-- Row 2 -->
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center order-2 order-lg-1">
                    <img width="1044" height="774" loading="lazy" src="<?php echo esc_url($zam_img . 'zoho-am-lifecycle.webp'); ?>" alt="Payment reminders, event notifications, support updates and re-engagement campaigns automated from Zoho CRM">
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="zam-panel">
                        <div class="zam-panel-label">Billing, events &amp; support automation</div>
                        <div class="zam-panel-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="zam-panel-title">Payment &amp; Renewal Reminders <span>— Send timely payment due dates, renewal reminders, and subscription alerts without manual effort.</span></div>
                        </div>
                        <div class="zam-panel-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="zam-panel-title">Event &amp; Webinar Notifications <span>— Automatically invite contacts, send reminders, and share event updates through SMS workflows.</span></div>
                        </div>
                        <div class="zam-panel-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="zam-panel-title">Customer Support Updates <span>— Keep customers informed by sending automated SMS whenever support requests are updated or resolved.</span></div>
                        </div>
                        <div class="zam-panel-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="zam-panel-title">Re-Engagement Campaigns <span>— Reconnect with inactive customers using automated SMS campaigns triggered by CRM conditions or timelines.</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA BAND ===== -->
    <section id="zam-cta">
        <div class="container">
            <h2>Never Miss a Customer Touchpoint with Zoho CRM SMS Automation</h2>
            <p>Turn every CRM workflow into timely, personalized SMS conversations that keep customers informed and drive more conversions.</p>
            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a href="https://marketplace.zoho.in/app/crm/360-sms-for-zoho-crm" class="btn-white-solid" target="_blank" rel="noopener">Try For Free</a>
                <a class="open-popup-form-on-click btn-white-outline">Book a Free Demo</a>
            </div>
        </div>
    </section>

    <!-- ===== WHY 360 SMS ===== -->
    <section id="zam-why">
        <div class="container">
            <div class="text-center mb-5">
                <div class="zam-eyebrow">Why choose us</div>
                <h2 class="zam-h2">Why 360 SMS Automated Messaging for Zoho CRM</h2>
            </div>
            <div class="row g-3 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="wc-stat-card">
                        <div class="wc-stat-num">52%</div>
                        <div class="wc-stat-label">Less Manual Work</div>
                        <p class="wc-stat-desc">Automate repetitive customer messaging with CRM-triggered SMS workflows so your team spends less time on routine follow-ups.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="wc-stat-card">
                        <div class="wc-stat-num">43%</div>
                        <div class="wc-stat-label">Faster Customer Communication</div>
                        <p class="wc-stat-desc">Send SMS automatically from Zoho CRM whenever leads, opportunities, or customer records reach key milestones.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="wc-stat-card">
                        <div class="wc-stat-num">36%</div>
                        <div class="wc-stat-label">Higher Customer Engagement</div>
                        <p class="wc-stat-desc">Deliver timely, personalized SMS messages through Zoho CRM SMS automation that encourage faster responses and stronger relationships.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php get_footer('zoho'); ?>