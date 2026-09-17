<?php

/**
 * Template Name: Newhome SMS - UK
 * Description:   Standalone Salesforce-branded template. Blue theme (#0057B8).
 */
if (!defined('ABSPATH')) {
    exit;
}

//require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');


?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/newhome-sections.css?ver=<?php echo time(); ?>">
<?php get_header('sms'); ?>
<style>
    .hero-h1 {
        text-align: center !important;
        padding-right: 0 !important;
        margin-right: auto !important;
        margin-left: auto !important;
    }
    h2{
        color:#000 !important;
    }
</style>
<!-- ═══ SECTION 1: HERO ═══ -->
<section id="hero-sec" class="hero">
    <div class="container text-center">
        <div class="h-pill mb-4" id="ey-txt">
            <span class="dot-sm dot-hero me-2"></span> Texting for United Kingdom · GDPR Compliant · 15+ Channels
        </div>
        <h1 class="hero-h1 mb-4 text-center text-dark" id="hero-h1">Engage customers all over UK and leave <span class="kw">compliance to us</span></h1>
        <p class="hero-sub mb-5" id="hero-sub">Automate messaging reliably all over UK, no matter the channel or carrier.</p>
        <div class="d-flex justify-content-center gap-3">
            <button class="btn fs-14 btn-brand rounded-3 px-4 py-2 fw-bold" id="hero-cta1" onclick="window.open('https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV', '_blank')">Speak to a Professional →</button>
            <a href="#contact_form">
                <button class="btn btn-ghost fs-14 rounded-3 px-4 py-2 fw-bold" id="hero-cta2">Contact our experts</button>
            </a>
        </div>

        <!-- Highlights Section -->

    </div>
</section>

<!-- ═══ SECTION 2: PROOF STRIP ═══ -->
<div class="border-top border-bottom py-4 bg-white" id="proof-bar">
    <div class="container">
        <div class="row align-items-center justify-content-center g-0">
            <div class="col-6 col-md-2 proof-item">
                <span class="pn" id="proof-n">1,200+</span>
                <span class="pl">5-star reviews on<br>AppExchange</span>
            </div>
            <div class="col-6 col-md-2 proof-item">
                <span class="pn">100%</span>
                <span class="pl">Salesforce<br>Native</span>
            </div>
            <div class="col-6 col-md-2 proof-item">
                <span class="pn">60K+</span>
                <span class="pl">Users<br>Worldwide</span>
            </div>
            <div class="col-6 col-md-2 proof-item">
                <span class="pn">15+</span>
                <span class="pl">In-built<br>channels</span>
            </div>
            <div class="col-6 col-md-2 proof-item">
                <span class="pn">24×7</span>
                <span class="pl">Free Support</span>
            </div>
            <!--<div class="col-6 col-md-2 proof-item">-->
            <!--    <span class="pn">🇬🇧</span>-->
            <!--    <span class="pl">UK Dedicated Support</span>-->
            <!--</div>-->
        </div>
    </div>
</div>

<!-- ═══ SECTION 3: INBOX SHOWCASE ═══ -->
<section id="inbox-sec" class="sec py-5 bg-white">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div class="kicker text-uppercase fw-bold mb-3 c-ink2 ls-1" id="inbox-lbl">Send globally-local messaging from the UK</div>
                <h2 class="sh2 fw-bold mb-4 text-dark fs-40 lh-11" id="inbox-h">All Conversations. Fully Connected. Inside Your CRM.</h2>
                <p class="ssub mb-4 c-ink2 lh-16" id="inbox-p">Manage all your Salesforce SMS, WhatsApp, Instagram, Facebook, and calls in one unified inbox — right inside Salesforce. Activate channels popular across the United Kingdom. Every message stays synced and auto-logged.</p>
                <ul class="list-unstyled mb-5 d-flex flex-column gap-3">
                    <li class="d-flex align-items-start gap-2 fs-14"><i class="bi bi-check-lg check-icon"></i><span id="inbox-f1">Send bulk messages in British English, Dutch, and French too</span></li>
                    <li class="d-flex align-items-start gap-2 fs-14"><i class="bi bi-check-lg check-icon"></i><span id="inbox-f2">Stagger messaging times for non-GMT time-zones</span></li>
                    <li class="d-flex align-items-start gap-2 fs-14"><i class="bi bi-check-lg check-icon"></i><span id="inbox-f3">Direct local calls and messages to native speakers of English, Dutch, French, and more</span></li>
                </ul>
                <button class="btn btn-brand rounded-2 px-4 py-2 fw-bold fs-15">See all features →</button>
            </div>
            <div class="col-lg-6">
                <img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Right_-inbox-mock_new-1-1.png" alt="Unified Inbox" class="img-fluid rounded-4 ">
            </div>
        </div>
    </div>
</section>

<!-- ═══ SECTION 4: WHY 360 SMS ═══ -->
<section class="sec py-5 bg-white">
    <div class="container text-center">
        <div class="kicker text-uppercase mb-2 fw-bold c-brand ls-1">WHY TEAMS CHOOSE 360 SMS</div>
        <h2 class="sh2 fw-bold mb-3 fs-40 lh-11 ls-n12 c-ink">Everything you need to stay ahead.<br>Nothing you don't.</h2>
        <p class="ssub mx-auto mb-5 mw-750 lh-15 c-ink2">Most Salesforce SMS apps stop at basic messaging. 360 SMS stands out with 1,200+ AppExchange reviews, AI-powered multichannel communication, AI agents, and 15+ channels-powering smarter Salesforce text messaging.</p>
        <div class="row gx-4 gy-4 text-start">
            <?php
            $stats = [
                ['1,200+', 'AppExchange reviews- more than any other Salesforce SMS app', 'Real feedback from Salesforce users across industries. Trusted by teams who rely on proven Salesforce messaging app performance.', '★★★★★ "Best SMS app on AppExchange. Period." - VP Sales, Finance'],
                ['15+ Channels', 'All managed from one place- SMS, WhatsApp, CTI, and more.', 'Go beyond SMS with WhatsApp, Messenger, Instagram, CTI, and more-managed seamlessly inside your CRM.', '✓ Every channel unified in one Salesforce messaging app'],
                ['AI & AI Agents', 'Elevating communication and workflows inside Salesforce.', 'From translation to drip suggestions, AI and intelligent agents help you optimize Salesforce text messaging without losing the human touch.', '✓ AI-driven automation, agents, and Insights inside Salesforce'],
            ];
            foreach ($stats as $s): ?>
                <div class="col-lg-4 p-4">
                    <div class="card border rounded-4 p-5 h-100 bg-stat-card bdr-stat">
                        <div class="st-num fw-bold mb-1"><?= $s[0] ?></div>
                        <div class="st-h fw-bold mb-2"><?= $s[1] ?></div>
                        <p class="st-p text-muted mb-3"><?= $s[2] ?></p>
                        <div class="mt-auto">
                            <div class="stat-badge border px-3 py-2 rounded-2 bg-white d-inline-block"><?= $s[3] ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══ SECTION 5: BLUE BAR & ROI ═══ -->
<section class="sec py-5 bg-white">
    <div class="container">
        <div class="card border-0 rounded-4 overflow-hidden mb-5 bg-blue-card blue-card-pad">
            <div class="kicker text-uppercase text-white opacity-50 fw-bold mb-4 c-white-60 ls-1" id="why-diff-label">Manage first party data and consent easily with our GDPR Essentials</div>
            <div class="row g-4 overflow-hidden">
                <?php
                $blueFeats = [
                    ['bi-award', 'We\'re ISO 27001 certified', 'Enterprise-grade information security certification. Your data is protected to the highest international standards.'],

                    ['bi-globe2', '360 can provide UK only Data Centers', 'Keep all your data within the United Kingdom. We can provision UK only data centres for full data residency compliance.'],

                    ['bi-shield-lock', 'Our DPA is Schrems 2 Compliant', 'Our Data Processing Agreement meets all Schrems 2 requirements — safe international data transfers fully covered.'],

                    ['bi-patch-check', 'We don\'t store any data whatsoever', 'Privacy by design. We implement zero data retention — learn how we implement privacy by design.'],
                ];

                foreach ($blueFeats as $bf): ?>
                    <div class="col-md-3">
                        <div class="text-white fs-2 mb-3"><i class="bi <?= $bf[0] ?>"></i></div>
                        <h4 class="text-white fw-13 fw-bold mb-2 lh-14 blue-card-h"><?= $bf[1] ?></h4>
                        <p class="text-white-50 small blue-card-p"><?= $bf[2] ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="card border rounded-4 p-4">
            <div class="row text-center g-0">
                <?php
                $roi = [['57%', 'Higher Engagement'], ['37%', 'Improved Service'], ['45%', 'More Sales'], ['< 2 min', 'Setup from AppExchange']];
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
<section class="sec py-5 bg-fafafa">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="sh2 fw-bold mb-4 text-start fs-32" id="ch-heading">Integrate the most popular UK channels, messengers, and more with Salesforce</h2>
                <p class="ssub text-start mb-5 mw-900 c-ink2 lh-16" id="ch-sub">Get our best features over all 15 in-built Communication Channels. Reach your customers on every channel they prefer — without leaving Salesforce.</p>
                <div class="d-flex flex-wrap gap-3" style="display:grid !important; grid-template-columns: repeat(8, max-content);">
                    <?php
                    $channels = [
                        ['dot-sms', 'SMS'],
                        ['dot-wa', 'WhatsApp'],
                        ['dot-mms', 'MMS'],
                        ['dot-cti', 'CTI Telephony'],
                        ['dot-rvm', 'Ringless Voicemail'],
                        ['dot-fb', 'Facebook Messenger'],
                        ['dot-ig', 'Instagram DM'],
                        ['dot-wechat', 'WeChat'],
                        ['dot-viber', 'Viber'],
                        ['dot-line', 'Line'],
                        ['dot-kakao', 'Kakao'],
                        ['dot-zalo', 'Zalo'],
                        ['dot-webchat', 'Webchat'],
                        ['dot-li', 'LinkedIn'],
                        ['dot-email', 'Email'],
                    ];
                    foreach ($channels as $ch): ?>
                        <div class="chip-channel border rounded-2 px-3 py-2 d-flex align-items-center gap-2">
                            <span class="dot-sm <?= $ch[0] ?>"></span> <?= $ch[1] ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ SECTION 7: FEATURES ═══ -->
<section class="sec py-5 bg-white">
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <h2 class="sh2 fw-bold mb-3 text-start fs-32 ls-n1" id="feat-heading">Set up communications and interact from UK with customers globally over a variety of tools</h2>
                <p class="text-muted" id="feat-sub">Build Chatbots, scale interactions, send bulk messages to millions, go multichannel, segment, and daypart messages — all from UK to global customers.</p>
            </div>
        </div>
        <div class="row gx-4 gy-4 gx-lg-5 gy-lg-5">
            <?php
            $features = [
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-3.png', 'Omnichannel Messaging', 'Route Connect with customers across SMS, WhatsApp, Facebook Messenger, and more from one platform.'],
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-1-3.png', 'AI-backed One-on-one conversations', 'Engage customers with real-time two-way messaging and deliver more personal experiences.'],
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-4.png', 'Messaging at Scale', 'Reach millions of customers across multiple communication channels without losing personal touch.'],
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/vector3.png', 'No-Code Chatbots', 'Build and launch automated chatbots without relying on technical teams or developers.'],
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-1-2.png', 'Consistent Sender Identity', 'Keep sender numbers consistent to build familiarity and improve response rates.'],
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector7.png', 'Conversation Manager', 'Perform messaging activities and conversations from one single console and boost productivity.'],
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-2-1.png', 'Smart Link Tracking', 'Share branded links and monitor customer engagement through click tracking.'],
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-3-1.png', 'Automation Without Coding', 'Automate messages through Salesforce Flows, Workflows, or Apex or use no code automation for simple use cases.'],
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-4-1.png', 'Intelligent Drip Campaigns', 'Create and optimize AI-driven multichannel drip campaigns for better engagement.'],
            ];
            foreach ($features as $f): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 border rounded-4 p-4 shadow-sm bdr-eee">
                        <div class="d-flex align-items-center justify-content-center rounded-3 mb-3 icon-box bg-icon">
                            <img src="<?= esc_url($f[0]); ?>"
                                alt="<?= esc_attr($f[1]); ?>"
                                class="feature-icon">
                        </div>
                        <h5 class="fw-bold  mb-2 fs-18 c-ink"><?= $f[1] ?></h5>
                        <p class="text-muted small mb-3 lh-16"><?= $f[2] ?><span><a href="#" class="text-primary text-decoration-none fs-14 fw-bold feat-arrow">→</a></span></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-5">
            <button class="btn btn-brand px-5 py-2 fw-bold rounded-3 fs-13">View all Features →</button>
        </div>
    </div>
</section>

<!-- ═══ SECTION 8: AI AGENTS ═══ -->
<section class="sec py-5 bg-agents">
    <div class="container py-lg-4">
        <div class="row mb-5">
            <div class="col-lg-12">
                <h2 class="fw-bold text-white mb-2 fs-44 ls-n15">AI Agents for Every Team. Scalable.</h2>
                <h3 class="fw-bold mb-4 fs-32 c-blue-accent ls-n1">Fully automated.</h3>
                <p class="c-white-50 mb-4 fs-14 lh-16 mw-900">AI Agents power your communication workflows-automating conversations, qualifying leads, transcribing calls, translating interactions, and helping you close deals faster, all within your CRM.</p>
            </div>
        </div>
        <div class="row gx-4 gy-4 gx-lg-5 gy-lg-5 mb-5">
            <?php
            $agents = [
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector16.png', 'AI Chatbot', 'Automate conversations across channels. Qualify leads, answer FAQs, and engage users 24/7-powering smarter texting from Salesforce and faster responses.'],
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector17.png', 'AI Voice Agent', 'Manage inbound and outbound calls with natural conversations. Qualify intent, handle objections, and book demos with AI-no IVR menus, no hold music.'],
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector18.png', 'Call Transcription', 'Automatically transcribe live calls, capturing every key detail. Further, AI analyzes conversations and guide agents with smart suggestions for better call handling.'],
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector20.png', 'Call Translation', 'Translate calls and messages across 50+ languages in real time. Break language barriers, connect with customers in their preferred language, and never lose new opportunities.'],
            ];
            foreach ($agents as $a): ?>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100 border-0 rounded-4 p-4 bg-agent-card bdr-agent">
                        <div class="text-white fs-4 mb-4 rounded-3 d-flex align-items-center justify-content-center icon-box bg-agent-icon">
                            <img src="<?= esc_url($a[0]); ?>"
                                alt="<?= esc_attr($a[1]); ?>"
                                class="agent-icon-img">
                        </div>
                        <h5 class="text-white fw-bold mb-3 ag-h"><?= $a[1] ?></h5>
                        <p class="c-white-50 small mb-0 lh-16"><?= $a[2] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="card border-0 rounded-3 p-4 p-lg-5 bg-agent-cta">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <h5 class="text-white fw-bold mb-2 fs-15">Explore some more AI agents in the suite-for recruitment, pre-sales documentation, lead sourcing, and Salesforce administration</h5>
                    <p class="c-white-50 small mb-0">All run natively inside your CRM-no external tools, no extra logins.</p>
                </div>
                <div class="col-md-3 text-md-end mt-4 mt-md-0">
                    <button class="btn btn-brand px-4 py-2 fw-bold rounded-2 fs-14">See all 8 AI Agents →</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ SECTION 9: GETTING STARTED ═══ -->
<section class="sec" id="getting-started">
    <div class="container">
        <div class="mb-5">
            <!--<div class="kicker text-primary fw-bold text-uppercase mb-2 ls-1">Setup in Minutes</div>-->
            <h2 class="sh2 fs-32 fw-800 ls-n1" id="gs-title">Get GDPR compliant and reliable text messaging throughout UK</h2>
            <p class="ssub  text-muted mw-1000 fs-17 lh-16" id="gs-sub">Get Salesforce guidance, development, and lifecycle support in the UK. Speak to a professional and start engaging customers all over UK today.</p>
        </div>
        <div class="row g-0 border rounded-4 overflow-hidden bg-white shadow-sm">
            <div class="col-lg-6 border-end">
                <?php
                $steps = [
                    [1, 'Integrate branded or Local UK Numbers with the CRM', 'Keep your old number or Sender ID or select from a list of desirable shared and dedicated UK mobile numbers, short codes, or long codes with high reputation. Absolutely no grey routing.', ['Dedicated short codes & shared short codes available', 'Keep your old Sender ID or get a new +44 UK number', 'You can also receive SMS on landlines']],
                    [2, 'Ascertain message delivery with top tier carrier integrations in the UK', 'Deliver SMS reliably to all recipients with carrier integrations to EE, Vodafone, Three, O2, Tesco Mobile, and Virgin. UCS-2 and GSM are both supported — no international routing needed.', ['EE, Vodafone, Three, O2, Tesco Mobile, and Virgin supported', 'UCS-2 and GSM both supported', 'No international routing needed']],
                    [3, 'Market to UK social media users effectively', 'Facebook, Instagram, and WhatsApp takes the lion\'s share of attention in UK. 360 SMS is the only Salesforce app to offer all its exclusive text automation features over Facebook Messenger and Instagram.', ['Facebook Messenger — Catch customers on Facebook, Instagram', 'WhatsApp — Catch customers on WhatsApp', 'Instagram — Only Salesforce app with full automation']],
                    [4, 'Pre-integrated to all Salesforce Platforms', 'Using Salesforce, Pardot, Marketing Cloud or any other SFDC product for texting? No sweat, our texting app is already fully embedded and compatible. No need for long-drawn and poorly-planned Salesforce Integrations.', ['Pre-integrated to Salesforce, Pardot & Marketing Cloud', 'Fully embedded — no separate integration needed', 'Leagues ahead of any vanilla integration']],
                ];
                foreach ($steps as $i => $step):
                    $isFirst = $i === 0;
                    $isLast = $i === count($steps) - 1;
                ?>
                    <div class="gs-tab <?= $isFirst ? 'active-tab' : '' ?> gs-pad <?= !$isLast ? 'gs-bdr-b' : '' ?>" id="gst-<?= $step[0] ?>" onclick="showGS(<?= $step[0] ?>)" <?= !$isFirst ? 'style="opacity:.6"' : 'style="border-left:3px solid var(--brand)"' ?>>
                        <div class="d-flex align-items-flex-start gap-4">
                            <div class="gs-step-num" id="gsn<?= $step[0] ?>"><?= $step[0] ?></div>
                            <div>
                                <div class="gs-step-h" <?= $step[0] === 1 ? 'id="gs1-t"' : ($step[0] === 3 ? 'id="gs3-t"' : '') ?>><?= $step[1] ?></div>
                                <div class="gs-step-p <?= empty($step[3]) ? 'mb-0' : '' ?> c-ink3" <?= $step[0] === 1 ? 'id="gs1-d"' : ($step[0] === 3 ? 'id="gs3-tab-sub"' : '') ?>><?= $step[2] ?></div>
                                <?php if (!empty($step[3])): ?>
                                    <ul class="gs-bullets mb-0">
                                        <?php foreach ($step[3] as $bullet): ?><li><?= $bullet ?></li><?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="col-lg-6 bg-light d-flex align-items-center justify-content-center p-4 p-lg-5 min-h-500 ">
                <?php
                $stepImages = [
                    1 => 'https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Group-1000014821.png',
                    2 => 'https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/image-3.png',
                    3 => 'https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/image-4.png',
                    4 => 'https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/image-5.png',

                ];

                for ($i = 1; $i <= 4; $i++):
                    $img = isset($stepImages[$i]) ? $stepImages[$i] : $stepImages[5];
                ?>
                    <div class="gs-panel <?= $i === 1 ? 'active' : '' ?>" id="gsp-<?= $i ?>" style="width:100%">
                        <img src="<?php echo esc_url($img); ?>"
                            alt="Step <?php echo $i; ?>"
                            class="img-fluid rounded-4">
                    </div>
                <?php endfor; ?>
            </div>
        </div>




    </div>
</section>

<!-- ═══ SECTION 10: CTA BAR ═══ -->
<section class="py-5 bg-cta c-white" id="icta-1">
    <div class="container py-3">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-2 cta-bar-h text-light" id="icta1-h">The #1 Salesforce SMS app. Get started in minutes.</h2>
                <p class="mb-0 opacity-75 fs-16" id="icta1-sub">No middleware · No developer · Native install from AppExchange</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
                    <button class="btn btn-light px-4 py-2 fw-bold btn-cta-light c-brand">Start Free Trial</button>
                    <button class="btn btn-outline-light px-4 py-2 fw-bold btn-cta-light">Book a Demo</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ SECTION 11: INDUSTRIES ═══ -->
<section class="sec py-5 bg-fdfdfd">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h2 class="fw-bold mb-3 fs-32 ls-n1 c-ink">Built for your UK industry with advanced Salesforce SMS capabilities</h2>
            <p class="text-muted mx-auto mw-900 fs-17 lh-16">Deliver personalized text messaging for Salesforce with industry-specific workflows, templates, and automation.<br>360 SMS adapts to your exact business needs.</p>
        </div>
        <div class="row g-3">
            <?php
            $industries = [
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-5.png', 'Healthcare & Wellness', 'Send appointment reminders, patient follow-ups, and care updates using secure Salesforce SMS capabilities.'],
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-1-4.png', 'Finance & Mortgage', 'Automate lead nurturing, send rate alerts, and streamline document collection with Salesforce SMS messaging.'],
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-2-2.png', 'Real Estate', 'Share property alerts, confirm showings, and send offer updates using Salesforce SMS campaigns for faster deal cycles.'],
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-3-2.png', 'Education & Academics', 'Manage enrollment, send reminders, and boost engagement with scalable Salesforce text messaging.'],
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-4-2.png', 'Recruitment', 'Screen candidates, schedule interviews, and send updates with two-way Salesforce texting and automation.'],
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-5-1.png', 'Legal & Insurance', 'Send case updates, policy reminders, and automate workflows with SMS-to-case Salesforce and secure messaging.'],
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/Vector-6.png', 'Non-profit', 'Engage donors, manage events, and coordinate volunteers with Salesforce campaign SMS.'],
                ['https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/image-83-Traced.png', 'Professional Services', 'Share project updates, billing reminders, and client communications using Salesforce SMS integration.'],
            ];
            foreach ($industries as $ind): ?>
                <div class="col-lg-3 col-md-6 px-2">
                    <div class="ind-card p-5 h-100 border rounded-4 bg-white shadow-sm">
                        <div class="mb-2 fs-3">
                            <img src="<?= esc_url($ind[0]); ?>"
                                alt="<?= esc_attr($ind[1]); ?>"
                                class="industry-icon">
                        </div>
                        <h5 class="fw-bold mb-2 fs-19"><?= $ind[1] ?></h5>
                        <p class="small text-muted mb-2 lh-16"><?= $ind[2] ?></p>
                        <a href="#" class="fw-bold text-decoration-none small ind-link">Explore →</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center mt-5">
            <button class="btn btn-brand px-4 py-2 fw-bold rounded-2 fs-16">View all Industries →</button>
        </div>
    </div>
</section>

<!-- ═══ SECTION 12: TRUST & TESTIMONIALS ═══ -->
<section class="sec py-5 bg-white bdr-section">
    <div class="container py-4">
        <div class="mb-5">
            <h2 class="fw-bold mb-3 fs-32 ls-n1 c-ink" id="reviews-h">Trusted by 60K+ Users Globally</h2>
            <p class="text-muted fs-17">One of the most-reviewed Salesforce SMS apps on AppExchange-trusted with 1,200+ verified 5-star reviews.</p>
        </div>
        <div class="row align-items-center g-4 mb-5">
            <div class="col-12"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/04/image-84.png" alt="companies-logo" class="img-fluid"></div>
        </div>
        <div class="row g-4">
            <?php
            $testimonials = [
                ['Sarah M.', 'Director of Admissions · Education · Salesforce', '"360 SMS transformed our student enrollment. SMS reminders see 4× the response rate of email, and automation setup took an afternoon — no dev needed."'],
                ['James T.', 'VP Sales Operations · Finance · Salesforce', '"Best Salesforce SMS app we evaluated. Drip campaigns, bulk SMS, CTI — all natively in Salesforce. ROI was immediate from month one."'],
                ['Michael R.', 'Head of Sales · Real Estate · Salesforce', '"CTI Telephony + SMS follow-ups transformed our pipeline. Deal response time dropped from 48 hours to under 4. ROI paid for the annual licence in month one."'],
            ];
            foreach ($testimonials as $t): ?>
                <div class="col-lg-4">
                    <div class="p-4 border rounded-4 h-100 bg-white shadow-sm position-relative">
                        <div class="text-warning mb-3 small">★★★★★</div>
                        <p class="mb-4 text-dark fst-italic testimonial-p"><?= $t[2] ?></p>
                        <div class="mt-auto">
                            <div class="fw-bold text-dark fs-15"><?= $t[0] ?></div>
                            <div class="text-muted small"><?= $t[1] ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══ SECTION 13: CTA BAR ═══ -->
<section class="py-5 bg-cta c-white" id="icta-3">
    <div class="container py-3">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="fw-bold mb-2 cta-bar-h text-light" id="icta3-h">Join 60K+ boosting digital ROI worldwide</h2>
                <p class="mb-0 opacity-75 fs-16" id="icta3-sub">Healthcare, finance, real estate, education — see a live demo tailored to your UK industry</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <div class="d-flex flex-wrap gap-3 justify-content-lg-end">
                    <button class="btn btn-light px-4 py-2 fw-bold btn-cta-light c-brand">Book a Demo</button>
                    <button class="btn btn-outline-light px-4 py-2 fw-bold btn-cta-light">Talk to an Expert</button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ SECTION 14: RESOURCES ═══ -->
<section class="sec py-5 bg-fdfdfd">
    <div class="container py-4">
        <h2 class="fw-bold mb-5 fs-32 ls-n1 c-ink">Everything you need to learn, set up, and succeed</h2>
        <div class="row g-4">
            <?php
            $resources = [
                ['https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800', 'Blog'],
                ['https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=800', 'Case Study'],
                ['https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800', 'Webinar'],
                ['https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800', 'Event'],
                ['https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=800', 'Manual'],
                ['https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800', 'Blog'],
            ];
            foreach ($resources as $r): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="res-card bg-white border-0 shadow-sm rounded-4 overflow-hidden h-100">
                        <div class="position-relative">
                            <img src="<?= $r[0] ?>" class="w-100 img-card-h" alt="<?= $r[1] ?>">
                            <span class="badge position-absolute top-0 end-0 m-3 px-3 py-1 fw-bold bg-badge-orange badge-tag"><?= $r[1] ?></span>
                        </div>
                        <div class="p-4 d-flex flex-column res-body">
                            <div class="mb-3">
                                <span class="badge rounded-pill px-3 py-2 text-dark bg-badge-blue fs-11 fw-500"><i class="bi bi-calendar3 me-2"></i>Jan 5, 2025</span>
                            </div>
                            <h4 class="fw-bold fs-21 lh-14 c-ink mb-3">So how did the classical Latin become so incoheren</h4>
                            <div class="pt-2">
                                <button class="btn btn-brand px-4 py-2 fw-bold rounded-2 fs-14 rb-btn">Read More</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- ═══ SECTION 15: FAQ ═══ -->
<section class="sec py-5 bg-white">
    <div class="container py-4">
        <div class="mb-5">
            <h2 class="fw-bold mb-3 fs-32 ls-n1" id="faq-h">Frequently asked questions</h2>
            <p class="text-muted fs-14">Everything you need to know about 360 SMS App — your go-to solution for texting from Salesforce and multichannel communication across the UK.</p>
        </div>
        <div class="border rounded-4 overflow-hidden shadow-sm bg-white">
            <?php
            $faqs = [
                ['Can Salesforce send text messages?', 'Yes — with 360 SMS App installed from AppExchange, Salesforce can send SMS, WhatsApp, MMS, and messages across 15+ channels natively.'],
                ['How to send SMS from Salesforce?', 'Install 360 SMS from AppExchange, connect a number, and send from any Lead, Contact, Account, or custom object record.'],
                ['What is the best Salesforce SMS app?', '360 SMS App — #1 on AppExchange with 1,200+ 5-star reviews, 15+ channels, and 8 AI Agents.'],
                ['How does Salesforce SMS pricing work?', 'Pricing depends on volume and channels. Contact our team for a quote tailored to your Salesforce edition and usage.'],
                ['Can I use SMS in Salesforce Service Cloud?', 'Yes — 360 SMS works across all Salesforce editions including Sales Cloud, Service Cloud, Marketing Cloud, and more.'],
            ];
            foreach ($faqs as $i => $faq):
                $bdr = $i < count($faqs) - 1 ? 'border-bottom' : '';
            ?>
                <div class="faq-item <?= $bdr ?> p-4">
                    <div class="faq-q d-flex justify-content-between align-items-center" onclick="toggleFaq(this)">
                        <?= ($i + 1) ?>. <?= $faq[0] ?> <i class="bi bi-plus fs-4"></i>
                    </div>
                    <div class="faq-a pt-3 text-muted" style="display:none"><?= $faq[1] ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>




<?php
get_footer('sms');
?>