<?php

/**
 * Template Name: Newhome-ZOHO
 * Description:   Standalone Salesforce-branded template. Blue theme (#0057B8).
 */
if (!defined('ABSPATH')) {
    exit;
}

require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');
?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/newhome-sections-zoho.css?ver=<?php echo time(); ?>">
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


<!-- ═══ SECTION 1: HERO ═══ -->
<section id="hero-sec" class="hero">
    <div class="container">
        <div class="h-pill mb-4">
            <span class="dot-sm dot-hero me-2"></span> 100% Zoho Native • 4 Core Channels • AI-Powered Messaging
        </div>
        <h1 class="hero-h1 my-3">The #1 SMS and WhatsApp <br> App for <span class="kw">Zoho CRM</span></h1>
        <p class="hero-sub mb-5">Send SMS, WhatsApp, and MMS from Zoho CRM with a powerful SMS app for Zoho -automate conversations, campaigns, and boost engagement with AI</p>
        <div class="d-flex justify-content-center gap-3 mb-1">
            <a href="https://marketplace.zoho.com/app/crm/360-sms-for-zoho-crm"
                class="btn btn-brand rounded-3 px-4 py-2 fw-bold fs-15">
                Book a demo
            </a>

            <a target="_blank"
                class="open-popup-form-on-click btn btn-ghost rounded-3 px-4 py-2 fw-bold fs-15">
                Contact our experts
            </a>
        </div>
    </div>
</section>

<!-- ═══ SECTION 2: PROOF STRIP ═══ -->
<div class="border-top border-bottom py-4 py-lg-4 bg-white">
    <div class="container">
        <div class="proof-row">

            <div class="proof-item">
                <span class="pn">100%</span>
                <span class="pl">Zoho CRM-Native</span>
            </div>

            <div class="proof-item">
                <span class="pn">500+</span>
                <span class="pl">Active<br>Users</span>
            </div>

            <div class="proof-item">
                <div class="proof-stars">
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                    <i class="bi bi-star-fill"></i>
                </div>
                <span class="pl">Listed on<br>Zoho Marketplace</span>
            </div>

            <div class="proof-item">
                <span class="pn">99.99%</span>
                <span class="pl">Platform<br>Uptime</span>
            </div>

            <div class="proof-item">
                <span class="pn">4</span>
                <span class="pl">Core<br>Channels</span>
            </div>

            <div class="proof-item">
                <span class="pn">24x7</span>
                <span class="pl">Free Support</span>
            </div>

        </div>
    </div>
</div>

<!-- ═══ SECTION 3: INBOX SHOWCASE ═══ -->
<section class="sec py-4 py-lg-5">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5 mt-0">
                <div class="kicker text-uppercase fw-bold mb-3 c-ink2 ls-1">Zoho CRM SMS &amp; WhatsApp Inbox</div>
                <h2 class="sh2 fw-bold mb-4 fs-32 lh-11">One inbox. Inside Zoho CRM.</h2>
                <p class="ssub mb-4 c-ink2 lh-16">360 SMS brings SMS, MMS, and WhatsApp into a single inbox with seamless Zoho WhatsApp integration and Zoho CRM SMS integration. Manage all messaging from Zoho Contacts, Leads, and Deals —no external tools needed.</p>
                <ul class="list-unstyled mb-4 d-flex flex-column gap-3">
                    <li class="d-flex align-items-start gap-2 fs-6"><i class="bi bi-check-lg check-icon"></i><span>SMS, WhatsApp—all in one Zoho CRM inbox</span></li>
                    <li class="d-flex align-items-start gap-2 fs-6"><i class="bi bi-check-lg check-icon"></i><span>Every conversation auto-logged to Zoho records —Contacts, Leads, Deals</span></li>
                    <li class="d-flex align-items-start gap-2 fs-6"><i class="bi bi-check-lg check-icon"></i><span>Send messages, run zoho crm bulk sms, and manage opt-outs—all built in</span></li>
                </ul>
                <a href="<?php echo esc_url(home_url('/')); ?>features/" class="btn text-white fw-bold rounded-3 px-4 py-2" style="background-color: #0057B8;">See all features </a>
            </div>
            <div class="col-lg-7 mt-0">
                <img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/09/zoho-Homepage.png" alt="Unified Inbox" class="img-fluid rounded-4">
            </div>
        </div>
    </div>
</section>

<!-- ═══ SECTION 4: WHY 360 SMS ═══ -->
<section class="sec py-4 py-lg-5 bg-white">
    <div class="container text-center">
        <div class="kicker text-uppercase mb-4 fw-bold c-brand ls-1">WHY ZOHO CRM TEAMS CHOOSE 360 SMS</div>
        <h2 class="sh2 fw-bold mb-3 fs-32 lh-11 ls-n12 c-ink">The layer your Zoho CRM messaging was missing</h2>
        <p class="ssub mx-auto mb-5 mw-750 lh-15 c-ink2">Zoho CRM is powerful. But its native messaging is limited. 360 SMS adds Zoho CRM SMS, Zoho WhatsApp integration, and AI-powered messaging -fully inside Zoho, with no external portals.</p>
        <div class="row g-4 text-start">
            <?php
            $stats = [
                [
                    '100% Zoho Native',
                    'Zoho Marketplace app — zero integration required',
                    'Unlike Twilio integrations that need API keys and developer time — 360 SMS installs from Zoho Marketplace in one click. Live in minutes, not weeks.',
                    '<span class="me-1">★★★★★</span> "Installed in 5 minutes. WhatsApp running same day." — Sales Director'
                ],
                [
                    'No Portal Redirection',
                    'Channels — SMS, WhatsApp & AI Chatbot inside Zoho',
                    'The three channels that move deals — SMS for speed, WhatsApp for reach, AI Chatbot for scale. All from inside Zoho CRM records, no external tool needed.',
                    '<span class="me-1">✓</span> SMS and WhatsApp inside every Zoho record'
                ],
                [
                    'AI Zoho Messaging',
                    'Smarter conversations, better engagement, less manual work',
                    'Use AI to draft messages, improve responses, and enhance communication across your zoho crm sms automation workflows—without adding complexity.',
                    '<span class="me-1">✓</span>AI-powered messaging and automation inside Zoho CRM'
                ],
            ];
            foreach ($stats as $s): ?>
                <div class="col-lg-4 whysms-margin">
                    <div class="card h-100 border rounded-4 bg-stat-card bdr-stat">
                        <div class="st-num fw-bold mb-3"><?= $s[0] ?></div>
                        <div class="st-h fw-bold mb-3"><?= $s[1] ?></div>
                        <p class="st-p text-muted mb-4"><?= $s[2] ?></p>
                        <div class="mt-auto">
                            <div class="stat-badge border rounded-3 p-3 bg-white d-flex align-items-center fw-bold"><?= $s[3] ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<hr class="my-1 text-secondary opacity-50">

<!-- ═══ SECTION 5: RED BAR & ROI ═══ -->
<section class="sec py-4 py-lg-5 bg-white">
    <div class="container">
        <div class="card border-0 rounded-4 overflow-hidden mb-5 bg-blue-card blue-card-pad">
            <div class="kicker text-uppercase text-white opacity-50 fw-bold mb-4 c-white-60 ls-1">WHY 360 SMS BEATS OTHER ZOHO MESSAGING APPS</div>
            <div class="row g-4 overflow-hidden">
                <?php $site_url = home_url('/'); ?>

                <?php
                $redFeats = [
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector-1-5.png',
                        'Truly Zoho-Native App',
                        'Built as a zoho sms app on Zoho Marketplace -not a third-party tool. No APIs, no external setup. Just seamless SMS integration with Zoho CRM.'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector-3-3.png',
                        'One-click install. Message in minutes.',
                        'Install from Marketplace in a single click, connect your number, and send SMS from Zoho CRM instantly -no delays, no technical setup.'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector-2-3.png',
                        '98% SMS Open Rate',
                        'With 360 SMS, your Zoho messaging becomes more advanced and stands out -SMS can see up to 98% open rates, unlike emails that often go unnoticed.'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector-7.png',
                        'Works with Zoho Workflows',
                        'Trigger messages from any Zoho CRM module using Zoho CRM SMS automation and Zoho WhatsApp integration -from lead creation to deal updates, all without code.'
                    ],
                ];

                foreach ($redFeats as $rf): ?>
                    <div class="col-md-3">
                        <div class="text-white fs-2 mb-3 d-flex align-items-center justify-content-start">
                            <img src="<?= esc_url($rf[0]); ?>"
                                alt="<?= esc_attr($rf[1]); ?>"
                                class="rf-icon">
                        </div>
                        <h4 class="text-white fw-bold mb-3 blue-card-h"><?= $rf[1] ?></h4>
                        <p class="text-white-50 small blue-card-p"><?= $rf[2] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="card border rounded-4 p-4">
            <div class="row text-center g-0">
                <?php
                $roi = [['50%', 'Faster Follow-Ups'], ['53%', 'Reduced Manual Effort'], ['35%', 'Higher Engagement'], ['<5 min', 'Setup from Zoho Marketplace']];
                foreach ($roi as $i => $r): ?>
                    <div class="col-6 col-md-3 py-3 <?= $i < 3 ? 'border-end' : '' ?>">
                        <div class="fw-bold fs-2 roi-num"><?= $r[0] ?></div>
                        <div class="small fw-bold text-dark mt-1"><?= $r[1] ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ═══ SECTION 6: CHANNELS ═══ -->
<section class="sec py-4 py-lg-5 bg-white">
    <div class="container">
        <div class="channels-outer-wrap rounded-5 p-4 p-lg-5">
            <div class="text-center mb-5">
                <h2 class="sh2 fw-bold mb-3 fs-32">3 messaging channels inside Zoho CRM</h2>
                <p class="ssub mx-auto mb-0 mw-750 lh-16 text-muted">
                    Multichannel communication, fully inside Zoho CRM. No external apps, no API setup, no developer required.
                </p>
            </div>

            <div class="row g-4">
                <?php
                $site_url = home_url('/');

                $channels = [
                    [
                        'icon'  => $site_url . 'wp-content/uploads/2026/04/Vector-8.png',
                        'badge' => 'RELIABLE',
                        'class' => 'channel-badge-neutral',
                        'title' => 'SMS',
                        'desc'  => 'No internet dependency. Reliable messaging that helps with scalable outreach',
                        'url'   => $site_url . 'sms-messaging-app-zoho-crm/'
                    ],
                    [
                        'icon'  => $site_url . 'wp-content/uploads/2026/04/Vector-1-6.png',
                        'badge' => 'GLOBAL',
                        'class' => 'channel-badge-orange',
                        'title' => 'WhatsApp',
                        'desc'  => 'Globally preferred channel. Media-rich conversations that drives more engagement',
                        'url'   => $site_url . 'whatsapp-integration-zoho-crm/'
                    ],
                    [
                        'icon'  => $site_url . 'wp-content/uploads/2026/04/Vector-2-4.png',
                        'badge' => 'VISUAL',
                        'class' => 'channel-badge-neutral',
                        'title' => 'MMS',
                        'desc'  => "High visual appeal. Capture your audience's attention instantly and connect with impact.",
                        'url'   => $site_url . 'ai-led-zoho-messaging-app/'
                    ],
                ];

                foreach ($channels as $ch): ?>

                    <div class="col-lg-4 col-md-6 channels-margin">
                        <a href="<?= esc_url($ch['url']); ?>"
                            class="channel-card card h-100 border rounded-4 p-4 bg-white text-decoration-none">

                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <div class="channel-icon-wrap d-flex align-items-center justify-content-center">
                                    <img src="<?= esc_url($ch['icon']); ?>"
                                        alt="<?= esc_attr($ch['title']); ?>"
                                        class="channel-icon"
                                        width="40"
                                        height="40">
                                </div>
                                <span class="badge rounded-pill px-3 py-1 fw-bold text-uppercase channel-badge-pill <?= esc_attr($ch['class']); ?>"><?= esc_html($ch['badge']); ?></span>
                            </div>

                            <h3 class="fw-bold text-dark mb-3 fs-4"><?= esc_html($ch['title']); ?></h3>

                            <p class="text-muted mb-4 lh-base small"><?= esc_html($ch['desc']); ?></p>

                            <div class="mt-auto pt-2">
                                <span class="channel-link fw-bold d-inline-flex align-items-center gap-1">
                                    Learn More &rarr;
                                </span>
                            </div>

                        </a>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<!-- ═══ SECTION 7: FEATURES ═══ -->
<section class="sec py-4 py-lg-5 bg-white d-none">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <h2 class="sh2 fw-bold mb-3 text-start fs-32 ls-n1">Features · Zoho CRM Powerful Messaging Features Built for Zoho CRM</h2>
                <p class="text-muted">Built natively with Zoho CRM -works with your records, workflows, and reporting. No middleware, no external tools.</p>
            </div>
        </div>
        <div class="row gx-4 gy-4 gx-lg-5 gy-lg-5">
            <?php
            $features = [
                ['bi-send-fill', 'Send SMS, WhatsApp & MMS from Zoho CRM', 'Easily send SMS from Zoho CRM and manage WhatsApp conversations with seamless Zoho WhatsApp integration -right from your records.'],
                ['bi-cpu', 'No-Code Automation', 'Set up zoho crm sms automation to send reminders, confirmations, and follow-ups based on workflows -no coding or manual effort required.'],
                ['bi-calendar-check', 'Message Scheduling', 'Schedule messages in advance to reach customers at the right time. Plan outreach better and improve engagement with timely communication.'],
            ];
            foreach ($features as $f): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border rounded-4 p-4 shadow-sm bdr-eee">
                        <div class="d-flex align-items-center justify-content-center rounded-3 mb-4 icon-box bg-icon">
                            <i class="bi <?= $f[0] ?> fs-5" style="color: var(--brand)"></i>
                        </div>
                        <h5 class="fw-bold mb-3 fs-18 c-ink"><?= $f[1] ?></h5>
                        <p class="text-muted small mb-3 lh-16"><?= $f[2] ?><span><a href="#" class="text-decoration-none fw-bold fs-14 feat-arrow" style="color: var(--brand)">→</a></span></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!--<div class="text-center mt-5">
                    <button class="btn btn-brand px-5 py-2 fw-bold rounded-3 fs-14">View all Features</button>
                </div>-->
    </div>
</section>

<!-- ═══ SECTION 8.1: FEATURES GRID ═══ -->
<section class="sec py-4 py-lg-5 bg-white">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="sh2 fw-bold mb-3 fs-32 ls-n1">Powerful Messaging Features Built for Zoho CRM</h2>
            <p class="ssub mx-auto mw-750 text-muted fs-17 lh-16">Built natively with Zoho CRM -works with your records, workflows, and reporting. No middleware, no external tools.</p>
        </div>

        <div class="features-grid-wrap mx-auto" style="max-width: 1060px;">
            <div class="row g-4">
                <?php $site_url = home_url('/'); ?>

                <?php
                $feat81 = [
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector-3.png',
                        'Send SMS, WhatsApp & MMS from Zoho CRM',
                        'Easily send SMS from Zoho CRM and manage WhatsApp conversations with seamless Zoho WhatsApp integration -right from your records.'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector-1-3.png',
                        'No-Code Automation',
                        'Set up zoho crm sms automation to send reminders, confirmations, and follow-ups based on workflows -no coding or manual effort required.'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/vector3.png',
                        'Message Scheduling',
                        'Schedule messages in advance to reach customers at the right time. Plan outreach better and improve engagement with timely communication.'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector-4.png',
                        'Personalized Bulk Messaging',
                        'Run targeted campaigns using Zoho CRM bulk SMS from list views. Send personalized messages at scale and drive more engagement.'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector-2-1.png',
                        'Contextual 1:1 conversations.',
                        'Manage inbound and outbound conversations in one thread. Track interactions and respond faster without leaving your Zoho CRM environment.'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector-3-1.png',
                        'Opt-out & Compliance Management',
                        'Manage consent and opt-outs automatically with secure sms integration with Zoho CRM, ensuring compliant messaging across regions.'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector7.png',
                        'Custom Links & Tracking',
                        'Share shortened links and track clicks, engagement, and campaign performance directly within Zoho CRM for better visibility.'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector-9.png',
                        'Template Management',
                        'Create message templates with AI, organize them in folders for quick access, and reuse them for faster communication, skipping writing texts from scratch.'
                    ],
                ];

                foreach ($feat81 as $f): ?>
                    <div class="col-lg-6 col-md-6 feature-grid-margin">
                        <div class="feat-card-8 d-flex align-items-start gap-3">
                            <div class="feat-icon-bg">
                                <img src="<?= esc_url($f[0]); ?>"
                                    alt="<?= esc_attr($f[1]); ?>"
                                    class="feat-icon-img">
                            </div>
                            <div>
                                <h5 class="fw-bold mb-1 fs-18 c-ink mt-0"><?= $f[1] ?></h5>
                                <p class="text-muted small mb-0 lh-16"><?= $f[2] ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="text-center">
                <a href="<?= esc_url(home_url('/')); ?>features/"
                    class="btn text-white fw-bold rounded-3 px-4 py-2"
                    style="background-color: #0057B8; border-color: #0057B8; font-size: 14px;">
                    View all Features
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ═══ SECTION 8.2: AI CAPABILITIES ═══ -->
<section class="sec py-4 py-lg-5" style="background-color: #fbfbfb; border-top: 1px solid #eee;">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="sh2 fw-bold mb-3 fs-32 ls-n1">AI Capabilities · Zoho CRM
                Let AI handle the busywork. You focus on the conversation</h2>
            <p class="text-muted mx-auto mw-750 fs-17 lh-16">360 SMS brings AI-powered messaging into Zoho CRM -helping you automate replies, manage compliance, and engage customers in real time for better messaging outcomes.</p>
        </div>

        <div class="row g-4 pt-4">
            <!-- Card 1 -->
            <div class="col-lg-4 capabilites-margin">
                <div class="ai-card">
                    <div class="ai-card-head">
                        <div class="fs-1 mb-3"><img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/04/Vector-10.png"> </div>
                        <h3 class="fw-bold fs-21 mb-2 text-light">AI-Suggested Replies</h3>
                        <p class="opacity-75 small mb-0">Faster responses. More meaningful conversations.</p>
                    </div>
                    <div class="ai-card-body">
                        <ul class="ai-list">
                            <li><i class="bi bi-check-lg"></i><span>Get context-aware replies during live chats with automated SMS Zoho messaging</span></li>
                            <li><i class="bi bi-check-lg"></i><span>Respond instantly without typing every message from scratch</span></li>
                            <li><i class="bi bi-check-lg"></i><span>Keep conversations natural, relevant, and personalized</span></li>
                            <li><i class="bi bi-check-lg"></i><span>Improve response speed while maintaining a human tone</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-lg-4 capabilites-margin">
                <div class="ai-card">
                    <div class="ai-card-head">
                        <div class="fs-1 mb-3"><img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/04/Vector-1-7.png"></div>
                        <h3 class="fw-bold fs-21 mb-2 text-light">AI-Driven Compliance</h3>
                        <p class="opacity-75 small mb-0">Smarter compliance without manual <br> rules.</p>
                    </div>
                    <div class="ai-card-body">
                        <ul class="ai-list">
                            <li><i class="bi bi-check-lg"></i><span>Automatically manage opt-outs using AI intent detection</span></li>
                            <li><i class="bi bi-check-lg"></i><span>Move beyond keyword-based compliance with intelligent automation</span></li>
                            <li><i class="bi bi-check-lg"></i><span>Reduce risk with real-time monitoring across conversations</span></li>
                            <li><i class="bi bi-check-lg"></i><span>Built for modern conversational AI platforms inside Zoho CRM</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-lg-4 capabilites-margin">
                <div class="ai-card">
                    <div class="ai-card-head">
                        <div class="fs-1 mb-3"><img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/04/Vector-2-5.png"></div>
                        <h3 class="fw-bold fs-21 mb-2 text-light">Zoho AI Chatbot (ChatAgent)</h3>
                        <p class="opacity-75 small mb-0">24/7 conversations. Zero missed <br>opportunities</p>
                    </div>
                    <div class="ai-card-body">
                        <ul class="ai-list">
                            <li><i class="bi bi-check-lg"></i><span>Engage customers instantly with an SMS or Zoho WhatsApp chatbot</span></li>
                            <li><i class="bi bi-check-lg"></i><span>Handle queries, qualify leads, and respond in real time</span></li>
                            <li><i class="bi bi-check-lg"></i><span>Seamless Zoho chatbot integration within Zoho CRM records</span></li>
                            <li><i class="bi bi-check-lg"></i><span>Run continuous conversations without manual intervention</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Stats Strip -->
        <div class="stats-strip-8 py-4 py-lg-4 mt-3 mt-lg-5">
            <div class="row g-0 text-center align-items-center">
                <div class="col-6 col-md-3 border-end border-strip-divider">
                    <div class="fs-4 fw-bold text-navy lh-1 mb-1">98%</div>
                    <div class="small text-muted">SMS open rate</div>
                </div>
                <div class="col-6 col-md-3 border-end border-strip-divider">
                    <div class="fw-bold text-navy lh-sm">Go live in<br>minutes</div>
                </div>
                <div class="col-6 col-md-3 border-end border-strip-divider">
                    <div class="fw-bold text-navy lh-sm">Faster than<br>emails</div>
                </div>
                <div class="col-6 col-md-3">
                    <div class="fw-bold text-navy lh-sm">No developer<br>required</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ SECTION 10: CTA BAR ═══ -->
<section class="py-4 py-lg-5 bg-cta c-white" id="cta-bar-10">
    <div class="container py-3">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-2 cta-bar-h mt-0 fs-32 text-light">The #1 SMS app for Zoho CRM. Get started in minutes.</h2>
                <p class="mb-0 opacity-75 fs-16">No middleware. No developers. Just a one-click, native Zoho Marketplace install.</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
                    <a target="_blank"
                        class="open-popup-form-on-click btn btn-light px-4 py-2 fw-bold btn-cta-light c-brand">
                        Start Free Trial
                    </a>

                    <a href="https://marketplace.zoho.com/app/crm/360-sms-for-zoho-crm"
                        class="btn btn-outline-light px-4 py-2 fw-bold btn-cta-light">
                        Book a Demo
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ SECTION 11: INDUSTRIES ═══ -->
<section class="sec pt-4 py-lg-5 bg-fdfdfd">
    <div class="container py-4">

        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3 fs-32 ls-n1 c-ink">
                Messaging that Adapts to your Industry in Zoho CRM
            </h2>

            <p class="text-muted mx-auto mw-900 fs-17 lh-16">
                Leverage the power of advanced Zoho CRM SMS integration and Zoho WhatsApp integration to run industry-specific workflows and communication -tailored to how your team works.
            </p>
        </div>

        <div class="row g-4 gy-4">

            <?php
            $site_url = home_url('/');

            $industries = [
                [
                    $site_url . 'wp-content/uploads/2026/04/Vector-5.png',
                    'Healthcare & Wellness',
                    'Send appointment reminders, follow-ups, and care updates using automated SMS Zoho workflows for better patient engagement.',
                    $site_url . 'healthcare-wellness/'
                ],
                [
                    $site_url . 'wp-content/uploads/2026/04/Vector-1-4.png',
                    'Finance & Mortgage',
                    'Nurture leads, share interest rate alerts, and manage documents with secure SMS integration with Zoho CRM.',
                    $site_url . 'finance-mortgage/'
                ],
                [
                    $site_url . 'wp-content/uploads/2026/04/Vector-2-2.png',
                    'Real Estate',
                    'Send property alerts, confirm showings, and share updates with Zoho CRM SMS automation to move deals faster.',
                    $site_url . 'real-estate/'
                ],
                [
                    $site_url . 'wp-content/uploads/2026/04/Vector-3-2.png',
                    'Education & Academics',
                    'Manage enrollments, send reminders, and boost engagement using Zoho CRM SMS and WhatsApp communication.',
                    $site_url . 'education-academics/'
                ],
                [
                    $site_url . 'wp-content/uploads/2026/04/Vector-4-2.png',
                    'Recruitment',
                    'Screen candidates, schedule interviews, and communicate instantly using a zoho sms app built for speed.',
                    $site_url . 'recruitment/'
                ],
                [
                    $site_url . 'wp-content/uploads/2026/04/Vector-5-1.png',
                    'Legal & Insurance',
                    'Send case updates, renewal reminders, and document alerts using reliable Zoho CRM SMS integration.',
                    $site_url . 'legal-insurance/'
                ],
                [
                    $site_url . 'wp-content/uploads/2026/04/Vector-6.png',
                    'Non-profit',
                    'Engage donors, promote events, and coordinate volunteers with targeted Zoho CRM bulk SMS campaigns.',
                    $site_url . 'non-profit/'
                ],
                [
                    $site_url . 'wp-content/uploads/2026/04/image-83-Traced.png',
                    'Professional Services',
                    'Share project updates, billing reminders, and client communications with Zoho text messaging inside CRM.',
                    ''
                ],
            ];

            foreach ($industries as $ind):
            ?>

                <div class="col-lg-3 col-md-6 industries-margin">

                    <?php if (!empty($ind[3])) : ?>

                        <div class="ind-card p-4 h-100 border rounded-4 bg-white shadow-sm">

                            <div class="mb-3 fs-3 d-flex align-items-center justify-content-start">
                                <img src="<?= esc_url($ind[0]); ?>"
                                    alt="<?= esc_attr($ind[1]); ?>"
                                    class="industry-icon">
                            </div>

                            <h5 class="fw-bold mb-2 fs-19">
                                <?= esc_html($ind[1]); ?>
                            </h5>

                            <p class="small text-muted mb-2 lh-16">
                                <?= esc_html($ind[2]); ?>
                            </p>

                            <!--<span class="fw-bold text-decoration-none small ind-link">
                                        Explore
                                    </span>-->

                        </div>

                    <?php else : ?>

                        <div class="ind-card p-4 h-100 border rounded-4 bg-white shadow-sm">

                            <div class="mb-3 fs-3 d-flex align-items-center justify-content-start">
                                <img src="<?= esc_url($ind[0]); ?>"
                                    alt="<?= esc_attr($ind[1]); ?>"
                                    class="industry-icon">
                            </div>

                            <h5 class="fw-bold mb-2 fs-19">
                                <?= esc_html($ind[1]); ?>
                            </h5>

                            <p class="small text-muted mb-2 lh-16">
                                <?= esc_html($ind[2]); ?>
                            </p>

                            <!--<span class="fw-bold text-decoration-none small ind-link">
                                        Explore
                                    </span>-->

                        </div>

                    <?php endif; ?>

                </div>

            <?php endforeach; ?>

        </div>

        <?php /*<div class="text-center mt-5">
                    <a href="<?= esc_url(home_url('/industries/')); ?>"
                       class="btn btn-brand px-4 py-2 fw-bold rounded-2 fs-16">
                        View all Industries
                    </a>
                </div>*/ ?>

    </div>
</section>

<style>

    #three60-hp-root .bg-badge-orange {
    background: #E67E22 !important;
}
    .proof-row {
        display: grid !important;
        grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
    }

    .proof-row .proof-item {
        width: 100% !important;
        max-width: none !important;
        min-width: 0 !important;
        box-sizing: border-box !important;
        margin: 0 !important;
    }

    /* Desktop - 6 items */
    @media (min-width: 992px) {
        .proof-row {
            grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
        }
    }

    /* Tablet - 3 items */
    @media (min-width: 768px) and (max-width: 991px) {
        .proof-row {
            grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
        }
    }

    /* Mobile - 2 items */
    @media (max-width: 767px) {
        .proof-row {
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        }
    }
</style>

<?php
/**
 * Zoho Template  - Footer
 * Brand Color: #C4152A (Zoho Red)
 */
?>

<?php get_footer('zoho'); ?>