<?php
/*
Template Name: Zoho CRM Multichannel Messaging
*/
    get_header('zoho');

    // Image folder for this page — update if the images live elsewhere.
    $zam_img = "https://360smsapp.com/wp-content/uploads/2026/09/";
?>
<style>
    /* ==========================================================================
       Zoho CRM Multichannel Messaging
       Same typography & components as the Zoho CRM Automated Messaging page.
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

    /* ---------- Buttons ---------- */
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

    .zam-page a:focus-visible,
    .zam-page button:focus-visible {
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

    /* ---------- Use-case panels ---------- */
    #zam-usecases {
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

    /* ---------- Why cards ---------- */
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

    /* ---------- CTA strip ---------- */
    .zam-page #zam-cta-strip {
        background: var(--red);
        padding: 22px 0;
    }

    .zam-cta-inner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-wrap: wrap;
        gap: 16px;
    }

    .zam-cta-main {
        color: #fff;
        font-size: 14.5px;
        font-weight: 700;
        line-height: 1.4;
        margin: 0;
    }

    .zam-cta-sub {
        color: rgba(255, 255, 255, 0.85);
        font-size: 12.5px;
        margin: 4px 0 0;
    }

    .zam-cta-btns {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        align-items: center;
    }

    /* ---------- FAQ ---------- */
    .zam-faq-wrap {
        border: 1px solid var(--border);
        border-radius: var(--radius);
        overflow: hidden;
        background: #fff;
    }

    .zam-faq-item {
        border-bottom: 1px solid var(--border);
    }

    .zam-faq-item:last-child {
        border-bottom: none;
    }

    .zam-faq-q {
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        background: none;
        border: none;
        padding: 20px 24px;
        text-align: left;
        font-family: inherit;
        font-size: 15px;
        font-weight: 700;
        color: var(--dark);
        cursor: pointer;
    }

    .zam-faq-q i {
        font-size: 20px;
        color: var(--blue);
        flex-shrink: 0;
    }

    .zam-faq-a {
        padding: 0 24px 20px;
        font-size: 13.5px;
        line-height: 1.7;
        color: var(--muted);
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

        .zam-faq-q {
            padding: 16px 18px;
            font-size: 14px;
        }

        .zam-faq-a {
            padding: 0 18px 16px;
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
                    <h1>Connect with Customers Across SMS, MMS, and WhatsApp from <span class="zam-accent">Zoho CRM</span></h1>
                    <p class="zam-hero-sub">Reach customers on their preferred channel without leaving Zoho CRM. Manage every conversation from one place to improve engagement, responsiveness, and customer experience.</p>
                    <a class="open-popup-form-on-click btn-primary-solid">Book a Free Demo</a>

                    <div class="zam-trust">
                        <span class="zam-stars" aria-label="5 star rating">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        </span>
                        <span class="zam-trust-divider"></span>
                        <span class="zam-trust-item">48% higher engagement</span>
                        <span class="zam-trust-divider"></span>
                        <span class="zam-trust-item">39% faster productivity</span>
                        <span class="zam-trust-divider"></span>
                        <span class="zam-trust-item">34% better experience</span>
                    </div>
                </div>
                <div class="col-lg-6 zam-hero-img">
                    <img width="1012" height="714" src="<?php echo esc_url($zam_img . 'zoho-mc-hero.webp'); ?>" alt="Unified SMS, MMS and WhatsApp inbox inside Zoho CRM">
                </div>
            </div>
        </div>
    </section>

    <!-- ===== STATS BAR ===== -->
    <div id="zam-stats">
        <div class="container px-0">
            <div class="zam-stats-inner">
                <div class="zam-stat">
                    <div class="zam-stat-num">48%</div>
                    <div class="zam-stat-label">Higher Customer<br>Engagement</div>
                </div>
                <div class="zam-stat">
                    <div class="zam-stat-num">39%</div>
                    <div class="zam-stat-label">Faster Team<br>Productivity</div>
                </div>
                <div class="zam-stat">
                    <div class="zam-stat-num">34%</div>
                    <div class="zam-stat-label">Better Customer<br>Experience</div>
                </div>
                <div class="zam-stat">
                    <div class="zam-stat-num">14+</div>
                    <div class="zam-stat-label">Years of CRM<br>Messaging Innovation</div>
                </div>
            </div>
        </div>
    </div>

    <!-- ===== NATIVE MULTICHANNEL MESSAGING ===== -->
    <section id="zam-native">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <img width="1044" height="774" loading="lazy" src="<?php echo esc_url($zam_img . 'zoho-mc-spec.webp'); ?>" alt="Native Zoho CRM multichannel messaging across SMS, MMS and WhatsApp">
                </div>
                <div class="col-lg-6">
                    <div class="zam-eyebrow">Native multichannel messaging</div>
                    <h2 class="zam-h2">Native Multichannel Messaging for Zoho CRM</h2>
                    <p class="zam-sub">Manage every customer conversation across SMS, MMS, and WhatsApp directly from your CRM.</p>

                    <div class="zam-check"><i class="bi bi-check-circle-fill"></i> Native Zoho CRM messaging—no external portals or redirection</div>
                    <div class="zam-check"><i class="bi bi-check-circle-fill"></i> Keep every conversation and customer record inside Zoho CRM</div>
                    <div class="zam-check"><i class="bi bi-check-circle-fill"></i> Get started in minutes with a simple one-click installation</div>

                    <div class="zam-callout">
                        It's your all-in-one solution to <strong>boost multichannel communication in Zoho</strong> and close more deals.
                    </div>

                    <a class="open-popup-form-on-click btn-primary-solid">Book a Free Demo</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== USE CASES ===== -->
    <section id="zam-usecases">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="zam-h2">Engage Customers Across Sales, Marketing, and Support</h2>
            </div>

            <!-- Row 1 -->
            <div class="row align-items-center g-5 mb-5">
                <div class="col-lg-6">
                    <div class="zam-panel">
                        <div class="zam-panel-label">Sales &amp; marketing</div>
                        <div class="zam-panel-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="zam-panel-title">Lead Engagement <span>— Connect with new leads instantly on SMS, MMS, or WhatsApp to improve response rates.</span></div>
                        </div>
                        <div class="zam-panel-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="zam-panel-title">Appointment &amp; Meeting Reminders <span>— Reduce missed meetings with timely reminders delivered on customers' preferred messaging channel.</span></div>
                        </div>
                        <div class="zam-panel-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="zam-panel-title">Marketing Campaigns <span>— Reach customers with personalized promotional messages, offers, and announcements.</span></div>
                        </div>
                        <div class="zam-panel-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="zam-panel-title">Customer Support Conversations <span>— Handle customer questions and provide updates from a single conversation workspace.</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img width="1012" height="714" loading="lazy" src="<?php echo esc_url($zam_img . 'zoho-mc-inbox.webp'); ?>" alt="Lead engagement handled across SMS, MMS and WhatsApp from one Zoho CRM workspace">
                </div>
            </div>

            <!-- Row 2 -->
            <div class="row align-items-center g-5">
                <div class="col-lg-6 text-center order-2 order-lg-1">
                    <img width="1044" height="774" loading="lazy" src="<?php echo esc_url($zam_img . 'zoho-mc-lifecycle.webp'); ?>" alt="Order updates, payment reminders, feedback collection and internal notifications from Zoho CRM">
                </div>
                <div class="col-lg-6 order-1 order-lg-2">
                    <div class="zam-panel">
                        <div class="zam-panel-label">Operations &amp; customer care</div>
                        <div class="zam-panel-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="zam-panel-title">Order &amp; Delivery Updates <span>— Keep customers informed with confirmations, shipping notifications, and delivery updates.</span></div>
                        </div>
                        <div class="zam-panel-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="zam-panel-title">Payment &amp; Renewal Reminders <span>— Send timely reminders to improve collections and reduce missed renewals.</span></div>
                        </div>
                        <div class="zam-panel-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="zam-panel-title">Customer Feedback Collection <span>— Gather valuable feedback after purchases, appointments, or service interactions.</span></div>
                        </div>
                        <div class="zam-panel-item">
                            <i class="bi bi-check-circle-fill"></i>
                            <div class="zam-panel-title">Internal Team Communication <span>— Coordinate updates and notifications while keeping customer communication centralized inside Zoho CRM.</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA BAND ===== -->
    <section id="zam-cta">
        <div class="container">
            <h2>Create Connected Customer Conversations Across Every Channel</h2>
            <p>Improve CSAT with an advanced omnichannel messaging tool—all without leaving Zoho CRM.</p>
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
                <h2 class="zam-h2">Why Multichannel Integration in Zoho with 360 SMS</h2>
            </div>
            <div class="row g-3 justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="wc-stat-card">
                        <div class="wc-stat-num">48%</div>
                        <div class="wc-stat-label">Higher Customer Engagement</div>
                        <p class="wc-stat-desc">Reach customers on SMS, MMS, and WhatsApp from one platform to increase responsiveness and conversation rates.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="wc-stat-card">
                        <div class="wc-stat-num">39%</div>
                        <div class="wc-stat-label">Faster Team Productivity</div>
                        <p class="wc-stat-desc">Manage every customer conversation from Zoho CRM without switching between multiple messaging tools.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="wc-stat-card">
                        <div class="wc-stat-num">34%</div>
                        <div class="wc-stat-label">Better Customer Experience</div>
                        <p class="wc-stat-desc">Deliver personalized communication across every touchpoint while maintaining complete conversation history inside Zoho CRM.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        document.querySelectorAll(".zam-faq-q").forEach(function (btn) {
            btn.addEventListener("click", function () {
                var answer = btn.nextElementSibling;
                var icon = btn.querySelector("i");
                var isOpen = btn.getAttribute("aria-expanded") === "true";

                btn.setAttribute("aria-expanded", isOpen ? "false" : "true");
                answer.hidden = isOpen;
                icon.className = isOpen ? "bi bi-plus" : "bi bi-dash";
            });
        });
    });
</script>
<?php get_footer('zoho'); ?>