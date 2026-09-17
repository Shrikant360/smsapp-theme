<?php
/*
 * Template Name: Home Page SMS
 */
if (!defined('ABSPATH')) {
    exit;
}
?>
<?php get_header('sms'); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/newhome-sections.css?ver=<?php echo time(); ?>">
        <!-- ═══ SECTION 1: HERO ═══ -->
        <section id="hero-sec" class="hero">
            <div class="container">
                <div class="h-pill mb-4">
                    <span class="dot-sm dot-hero me-2"></span> #1 on AgentExchange • 1,200+ Reviews • 15+ Channels
                </div>
                <h1 class="hero-h1 mb-4">The #1 SMS & Messaging App for <span class="kw">Salesforce</span></h1>
                <p class="hero-sub mb-5">Transform Salesforce text messaging across 15+ channels and elevate digital engagement with AI agents that help you connect, engage, and convert.</p>
                <div class="d-flex justify-content-center gap-3">
                    <button class="btn fs-14 btn-brand rounded-3 px-4 py-2 fw-bold" onclick="window.open('https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV', '_blank')">Start Free Trial</button>
                    
                    <button class="open-popup-form-on-click btn btn-ghost fs-14 rounded-3 px-4 py-2 fw-bold">
                        Contact our experts
                    </button>

                </div> 

                <!-- Highlights Section -->

            </div>
        </section>

        <!-- ═══ SECTION 2: PROOF STRIP ═══ -->
        <div class="border-top border-bottom py-4 bg-white">
            <div class="container">
                <div class="proof-row">

                    <div class="proof-item">
                        <span class="pn">100%</span>
                        <span class="pl">Salesforce Native</span>
                    </div>
                
                    <div class="proof-item">
                        <span class="pn">1,200+</span>
                        <span class="pl">Customer<br>Reviews</span>
                    </div>
                
                    <div class="proof-item">
                        <div class="proof-stars">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <span class="pl">Rated on<br>AgentExchange</span>
                    </div>
                
                    <div class="proof-item">
                        <span class="pn">99.99%</span>
                        <span class="pl">Platform<br>Uptime</span>
                    </div>
                
                    <div class="proof-item">
                        <span class="pn">60K+</span>
                        <span class="pl">Users<br>Worldwide</span>
                    </div>
                
                    <div class="proof-item">
                        <span class="pn">24×7</span>
                        <span class="pl">Free Support</span>
                    </div>
                
                </div>
            </div>
        </div>

        <!-- ═══ SECTION 3: INBOX SHOWCASE ═══ -->
        <section class="sec">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 mb-3 mb-lg-4">
                        <div class="kicker text-uppercase fw-bold mb-3 c-ink2 ls-1">Unified Inbox · Salesforce</div>
                        <h2 class="sh2 fw-bold mb-3">All Conversations. Fully Connected. Inside Your CRM.</h2>
                        <p class="ssub mb-4 c-ink2 lh-16">Manage all your Salesforce SMS, WhatsApp, Instagram, AI chatbots, and calls in one unified inbox, right inside Salesforce. With a powerful Salesforce SMS app, every message stays synced and auto-logged, so nothing gets missed.</p>
                        <ul class="list-unstyled mb-5 d-flex flex-column gap-3">
                            <li class="d-flex align-items-start gap-2 fs-6"><i class="bi bi-check-lg check-icon"></i><span><strong>15+ channels in one view</strong> - SMS, WhatsApp, Messenger, Instagram & more</span></li>
                            <li class="d-flex align-items-start gap-2 fs-6"><i class="bi bi-check-lg check-icon"></i><span><strong>Auto-log every interaction</strong> for seamless Salesforce text messaging</span></li>
                            <li class="d-flex align-items-start gap-2 fs-6"><i class="bi bi-check-lg check-icon"></i><span><strong>Assign, track, and manage conversations</strong>-all from one place</span></li>
                        </ul>
                        <a href="<?php echo esc_url(home_url('/')); ?>features/" target="_blank" class="btn btn-brand rounded-2 px-4 py-2 fw-bold fs-15">
                            See all features
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/09/SMS-hero-img.png" alt="Unified Inbox" class="img-fluid rounded-4 ">
                    </div>
                </div>
            </div>
        </section>
        
        <hr class="my-1 text-secondary opacity-50">

        <!-- ═══ SECTION 4: WHY 360 SMS ═══ -->
        <section class=" why360sms sec bg-white">
            <div class="container text-center">
                <div class="kicker text-uppercase mb-2 fw-bold c-brand ls-1">WHY TEAMS CHOOSE 360 SMS</div>
                <h2 class="sh2 fw-bold mb-3 ls-n12 c-ink">Everything you need to stay ahead. Nothing you don't.</h2>
                <p class="ssub mx-auto mb-5 mw-750 lh-15 c-ink2">Most Salesforce SMS apps stop at basic messaging. 360 SMS stands out with 1,200+ AgentExchange reviews, AI-powered multichannel communication, AI agents, and 15+ channels-powering smarter Salesforce text messaging.</p>
                <div class="row gx-4 gy-4 text-start">
                    <?php
                    $stats = [
                        ['1,200+', 'AgentExchange reviews- more than any other Salesforce SMS app', 'Real feedback from Salesforce users across industries. Trusted by teams who rely on proven Salesforce messaging app performance.', '★★★★★ "Best SMS app on Agentexchange." - VP Sales, Finance'],
                        ['15+ Channels', 'All managed from one place- SMS, WhatsApp, CTI, and more.', 'Go beyond SMS with WhatsApp, Messenger, Instagram, CTI, and more-managed seamlessly inside your CRM.', '✓ Every channel unified in one Salesforce messaging app'],
                        ['AI & AI Agents', 'Elevating communication and workflows inside Salesforce.', 'From translation to drip suggestions, AI and intelligent agents help you optimize Salesforce text messaging without losing the human touch.', '✓ AI-driven automation, agents, and Insights inside Salesforce'],
                    ];
                    foreach ($stats as $s): ?>
                        <div class="col-lg-4 p-1 p-lg-4">
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
        <section class="sec bg-white">
            <div class="container">
                <div class="card border-0 rounded-4 overflow-hidden mb-5 bg-blue-card blue-card-pad">
                    <div class="kicker text-uppercase text-white fw-bold mb-4 c-white-60 ls-1 text-center">WHY 360 SMS OUTPERFORMS OTHER SALESFORCE SMS APPS</div>
                    <div class="row g-4 overflow-hidden">
                        <?php
                        $blueFeats = [
                            ['bi-lock', '100% Native to Salesforce', 'No middleware, no webhooks, no external tools. This Salesforce native SMS solution ensures every message, reply, and opt-out lives inside your CRM, powering seamless Salesforce SMS integration'],
                            ['bi-lightning-charge', 'Start Texting in Minutes', 'Install this SMS app for Salesforce, connect a number, and start sending instantly. No dev work, no setup calls-just fast, reliable text messaging for Salesforce teams.'],
                            ['bi-bar-chart-line', '98% Open Rates, Faster Responses', 'Email gets ignored, SMS gets seen. With this powerful Salesforce texting app, messages see up to 98% open rates and rapid replies-maximizing your Salesforce SMS capabilities'],
                            ['bi-shield-check', 'Enterprise Compliance Built In', 'Stay compliant with TCPA, GDPR, and more. This secure Salesforce SMS service manages consent, opt-outs, and logging automatically-so you never have to worry.'],
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
                        $roi = [['57%', 'Higher Engagement'], ['37%', 'Improved Service'], ['45%', 'More Sales'], ['< 2 min', 'Setup from AgentExchange']];
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
        <section class="sec bg-fafafa">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="sh2 fw-bold mb-3 text-start">15+ channels inside 1 Salesforce messaging app</h2>
                <p class="ssub text-start mb-5 mw-900 c-ink2 lh-16">Reach your customers on every channel they prefer-without leaving Salesforce. Manage all conversations from one place for seamless text messaging and multichannel communication, no external tools or logins needed.</p>
                <div class="channels-grid">
                    <?php
                        $channels = [
                            ['dot-sms', 'SMS', '/salesforce-sms/'],
                            ['dot-wa', 'WhatsApp', '/salesforce-whatsapp/'],
                            ['dot-mms', 'MMS', '/salesforce-mms/'],
                            ['dot-cti', 'CTI Telephony', '/salesforce-computer-telephony-integration/'],
                            ['dot-rvm', 'Ringless Voicemail', '/salesforce-ringless-voicemail/'],
                            ['dot-fb', 'Facebook Messenger', '/salesforce-facebook-messenger/'],
                            ['dot-ig', 'Instagram', '/salesforce-instagram/'],
                            ['dot-wechat', 'WeChat', '/salesforce-wechat/'],
                            ['dot-viber', 'Viber', '/salesforce-viber/'],
                            ['dot-line', 'LINE', '/salesforce-line/'],
                            ['dot-kakao', 'Kakao', '/salesforce-kakao/'],
                            ['dot-zalo', 'Zalo', '/salesforce-zalo/'],
                            ['dot-webchat', 'Webchat', '/salesforce-wechat/'],
                            ['dot-li', 'LinkedIn'],
                            ['dot-email', 'Email'],
                        ];
                        
                        foreach ($channels as $ch): ?>

                            <?php if (!empty($ch[2])) : ?>
                        
                                <a href="<?php echo esc_url(site_url($ch[2])); ?>"
                                   target="_blank"
                                   rel="noopener noreferrer"
                                   class="chip-channel border rounded-2 px-3 py-2 d-flex align-items-center gap-2 text-decoration-none">
                        
                                    <span class="dot-sm <?php echo esc_attr($ch[0]); ?>"></span>
                                    <?php echo esc_html($ch[1]); ?>
                        
                                </a>
                        
                            <?php else : ?>
                        
                                <div class="chip-channel border rounded-2 px-3 py-2 d-flex align-items-center gap-2">
                        
                                    <span class="dot-sm <?php echo esc_attr($ch[0]); ?>"></span>
                                    <?php echo esc_html($ch[1]); ?>
                        
                                </div>
                        
                            <?php endif; ?>
                        
                        <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ═══ SECTION 7: FEATURES ═══ -->
<section class=" features sec bg-white">
    <div class="container">

        <div class="row mb-4">
            <div class="col-lg-12">
                <h2 class="sh2 fw-bold mb-3 text-start ls-n1">
                    Everything you need to send SMS from Salesforce at scale
                </h2>

                <p class="text-muted">
                    Send SMS from Salesforce with 360 SMS-automate messaging, manage conversations, and scale with powerful Salesforce SMS integration.
                </p>
            </div>
        </div>

        <div class="row gx-4 gy-4 gx-lg-5 gy-lg-4">

            <?php
            $site_url = home_url('/');
        
            $features = [
                [
                    $site_url . 'wp-content/uploads/2026/04/Vector-3.png',
                    '1:1 Messaging',
                    'Engage in real-time with two-way Salesforce texting. Build stronger relationships through personalized text messaging for Salesforce.',
                    $site_url . 'one-on-one-conversations/'
                ],
                [
                    $site_url . 'wp-content/uploads/2026/04/Vector-1-3.png',
                    'No-code Automation',
                    'Trigger automated SMS in Salesforce using Flows, Workflows, or Apex. Send the right message at the right time without coding.',
                    $site_url . 'salesforce-sms/'
                ],
                [
                    $site_url . 'wp-content/uploads/2026/04/Vector-4.png',
                    'Bulk & Batch SMS',
                    'Run campaigns with bulk SMS from Salesforce using reports, list views, or campaigns, or schedule messages to scale easily.',
                    $site_url . 'bulk-batch-scheduled-sms-texting/'
                ],
                [
                    $site_url . 'wp-content/uploads/2026/04/vector3.png',
                    'Drip Campaigns',
                    'Create multi-step sequences to nurture leads and customers. Automate SMS follow-ups via Salesforce and keep engagement consistent.',
                    $site_url . 'drip-campaigns/'
                ],
                [
                    $site_url . 'wp-content/uploads/2026/04/Vector-1-2.png',
                    'Conversation Manager',
                    'Manage messaging operations like bulk texting, record creation, and more in a single console-all inside your Salesforce texting app.',
                    $site_url . 'conversation-manager/'
                ],
                [
                    $site_url . 'wp-content/uploads/2026/04/Vector7.png',
                    'Link Tracking',
                    'Track clicks, measure engagement, and attribute ROI. Links shared through your Salesforce SMS service are monitored in CRM records.',
                    $site_url . 'link-tracking/'
                ],
                [
                    $site_url . 'wp-content/uploads/2026/04/Vector-2-1.png',
                    'SMS Analytics',
                    'Track delivery, opens, clicks, and responses with a custom dashboard and optimize your Salesforce SMS messaging for better engagement and ROI.'
                ],
                [
                    $site_url . 'wp-content/uploads/2026/04/Vector-3-1.png',
                    'Compliance & Opt-Out',
                    'Stay compliant with texting rules and regulations using a Salesforce SMS Integration with a future-ready compliance mechanism.'
                ],
                [
                    $site_url . 'wp-content/uploads/2026/04/Vector-4-1.png',
                    'Sticky Sender',
                    'Maintain consistency by sending messages from the same number. Build trust with reliable text messaging for Salesforce interactions.',
                    $site_url . 'sticky-sender/'
                ],
            ];
            ?>
        
                <?php foreach ($features as $f): ?>

                <div class="col-lg-4 col-md-6">
            
                    <?php if (!empty($f[3])) : ?>
            
                        <a href="<?= esc_url($f[3]); ?>"
                           class="text-decoration-none d-block h-100">
            
                            <div class="card h-100 border rounded-4 p-4 shadow-sm bdr-eee">
            
                                <div class="d-flex align-items-center justify-content-center rounded-3 mb-3 icon-box bg-icon">
                                    <img src="<?= esc_url($f[0]); ?>"
                                         alt="<?= esc_attr($f[1]); ?>"
                                         class="feature-icon">
                                </div>
            
                                <h5 class="fw-bold mb-2 fs-18 c-ink">
                                    <?= esc_html($f[1]); ?>
                                </h5>
            
                                <p class="text-muted small mb-3 lh-16">
                                    <?= esc_html($f[2]); ?>
                                </p>
            
                            </div>
            
                        </a>
            
                    <?php else : ?>
            
                        <div class="card h-100 border rounded-4 p-4 shadow-sm bdr-eee">
            
                            <div class="d-flex align-items-center justify-content-center rounded-3 mb-3 icon-box bg-icon">
                                <img src="<?= esc_url($f[0]); ?>"
                                     alt="<?= esc_attr($f[1]); ?>"
                                     class="feature-icon">
                            </div>
            
                            <h5 class="fw-bold mb-2 fs-18 c-ink">
                                <?= esc_html($f[1]); ?>
                            </h5>
            
                            <p class="text-muted small mb-3 lh-16">
                                <?= esc_html($f[2]); ?>
                            </p>
            
                        </div>
            
                    <?php endif; ?>
            
                </div>
            
            <?php endforeach; ?>
        
        </div>

        <div class="text-center mt-5">
            <a href="<?= esc_url(home_url('/features/')); ?>"
               target="_blank"
               rel="noopener noreferrer"
               class="btn btn-brand px-5 py-2 fw-bold rounded-3 fs-13">
                View all Features
            </a>
        </div>

    </div>
</section>

        <!-- ═══ SECTION 8: AI AGENTS ═══ -->
        <section class="sec bg-agents">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-lg-12">
                        <h2 class="fw-bold text-white mb-2 ls-n15">AI Agents for Every Team. Scalable.</h2>
                        <h3 class="fw-bold mb-3 c-blue-accent ls-n1">Fully automated.</h3>
                        <p class="c-white-50 mb-4 fs-14 lh-16 mw-900">AI Agents power your communication workflows-automating conversations, qualifying leads, transcribing calls, translating interactions, and helping you close deals faster, all within your CRM.</p>
                    </div>
                </div>
                <div class="row gx-4 gy-4 gx-lg-5 gy-lg-5 mb-4">
                <?php
                $site_url = home_url('/');
            
                $agents = [
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector16.png',
                        'AI Chatbot',
                        'Automate conversations across channels. Qualify leads, answer FAQs, and engage users 24/7-powering smarter texting from Salesforce and faster responses.',
                        $site_url . '360-llm-ai-chat-assistant/'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector17.png',
                        'AI Voice Agent',
                        'Manage inbound and outbound calls with natural conversations. Qualify intent, handle objections, and book demos with AI-no IVR menus, no hold music.',
                        $site_url . 'conversational-ai-voice-agent/'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector18.png',
                        'Call Transcription',
                        'Automatically transcribe live calls, capturing every key detail. Further, AI analyzes conversations and guide agents with smart suggestions for better call handling.',
                        $site_url . 'aiva-ai-agent-call-coaching-transcription/'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector20.png',
                        'Call Translation',
                        'Translate calls and messages across 50+ languages in real time. Break language barriers, connect with customers in their preferred language, and never lose new opportunities.',
                        $site_url . 'ai-connect-live-call-translating-agent/'
                    ],
                ];
            
                foreach ($agents as $a): ?>
            
                    <div class="col-lg-3 col-md-6">
                        <a href="<?= esc_url($a[3]); ?>"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="text-decoration-none d-block h-100">
            
                            <div class="card h-100 border-0 rounded-4 p-4 bg-agent-card bdr-agent">
            
                                <div class="text-white fs-4 mb-4 rounded-3 d-flex align-items-center justify-content-center icon-box bg-agent-icon">
                                    <img src="<?= esc_url($a[0]); ?>"
                                         alt="<?= esc_attr($a[1]); ?>"
                                         class="agent-icon-img">
                                </div>
            
                                <h5 class="text-white fw-bold mb-3 ag-h">
                                    <?= esc_html($a[1]); ?>
                                </h5>
            
                                <p class="c-white-50 small mb-0 lh-16">
                                    <?= esc_html($a[2]); ?>
                                </p>
            
                            </div>
                        </a>
                    </div>
            
                <?php endforeach; ?>
            </div>
                <div class="card border-0 rounded-3 p-4 p-lg-4 bg-agent-cta">
                    <div class="row align-items-center">
                        <div class="col-md-9">
                            <h5 class="text-white fw-medium mb-2 fs-15">Explore some more AI agents in the suite-for recruitment, pre-sales documentation, lead sourcing, and Salesforce administration</h5>
                            <p class="c-white-50 small mb-0">All run natively inside your CRM-no external tools, no extra logins.</p>
                        </div>
                        <div class="col-md-3 text-md-end mt-4 mt-md-0">
                            <a href="<?php echo esc_url(site_url('/360sms-for-agentforce/')); ?>"
                               target="_blank"
                               rel="noopener noreferrer"
                               class="btn btn-brand px-4 py-2 fw-bold rounded-2 fs-14">
                                See all AI Agents
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ═══ SECTION 11: INDUSTRIES ═══ -->
        <section class="industries sec bg-fdfdfd">
            <div class="container">
                <div class="text-center mb-4">
                    <h2 class="fw-bold mb-3 ls-n1 c-ink">Built for your industry with advanced Salesforce SMS capabilities</h2>
                    <p class="text-muted mx-auto mw-900 fs-17 lh-16">Deliver personalized text messaging for Salesforce with industry-specific workflows, templates, and automation.<br>From SMS-to-case in Salesforce to Salesforce SMS campaign, 360 SMS adapts to your exact business needs.</p>
                </div>
                <div class="row g-3">
                <?php
                $site_url = home_url('/');
            
                $industries = [
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector-5.png',
                        'Healthcare & Wellness',
                        'Send appointment reminders, patient follow-ups, and care updates using secure Salesforce SMS capabilities.',
                        $site_url . 'healthcare-wellness/'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector-1-4.png',
                        'Finance & Mortgage',
                        'Automate lead nurturing, send rate alerts, and streamline document collection with Salesforce SMS messaging.',
                        $site_url . 'finance-mortgage/'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector-2-2.png',
                        'Real Estate',
                        'Share property alerts, confirm showings, and send offer updates using Salesforce SMS campaigns for faster deal cycles.',
                        $site_url . 'real-estate/'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector-3-2.png',
                        'Education & Academics',
                        'Manage enrollment, send reminders, and boost engagement with scalable Salesforce text messaging.',
                        $site_url . 'education-academics/'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector-4-2.png',
                        'Recruitment',
                        'Screen candidates, schedule interviews, and send updates with two-way Salesforce texting and automation.',
                        $site_url . 'recruitment/'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector-5-1.png',
                        'Legal & Insurance',
                        'Send case updates, policy reminders, and automate workflows with SMS-to-case Salesforce and secure messaging.',
                        $site_url . 'legal-insurance/'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/Vector-6.png',
                        'Non-profit',
                        'Engage donors, manage events, and coordinate volunteers with Salesforce campaign SMS.',
                        $site_url . 'non-profit/'
                    ],
                    [
                        $site_url . 'wp-content/uploads/2026/04/image-83-Traced.png',
                        'Professional Services',
                        'Share project updates, billing reminders, and client communications using Salesforce SMS integration.',
                        $site_url . 'professional-services/'
                    ],
                ];
                ?>
            
<?php foreach ($industries as $ind): ?>
                <div class="col-lg-3 col-md-6 industry-margin">
                    <div class="ind-card p-4 h-100 border rounded-4 bg-white shadow-sm">

                        <div class="mb-2 fs-3">
                            <img
                                src="<?= esc_url($ind[0]); ?>"
                                alt="<?= esc_attr($ind[1]); ?>"
                                class="industry-icon">
                        </div>

                        <h5 class="fw-bold mb-2 fs-16">
                            <?= esc_html($ind[1]); ?>
                        </h5>

                        <p class="text-muted mb-2 lh-16 fs-12">
                            <?= esc_html($ind[2]); ?>
                        </p>

                        <a
                            href="<?= esc_url($ind[3]); ?>"
                            class="fw-bold text-decoration-none ind-link fs-12">
                            Explore
                        </a>

                    </div>
                </div>
            <?php endforeach; ?>
            </div>
                <div class="text-center mt-5">
                    <a href="<?php echo esc_url(home_url('/industries/')); ?>" class="btn btn-brand px-4 py-2 fw-bold rounded-2 fs-16">
                        View all Industries
                    </a>
                </div>
            </div>
        </section>


<style>
    /* ─── Consistent Headings with clamp() ─── */
    /* All Section Headings (h2) consistent at 32px desktop */
    h2, .sh2, .fs-44, .fs-40, .fs-32, .cta-bar-h {
        font-size: clamp(24px, 2.8vw, 32px) !important;
        line-height: 1.25 !important;
    }
    
    /* All Sub-headings (h3) consistent at 26px desktop */
    h3 {
        font-size: clamp(20px, 2.2vw, 26px) !important;
        line-height: 1.25 !important;
    }

    /* Hero Typography */
    .hero-h1 {
        font-size: clamp(28px, 4.5vw, 45px) !important; /* 28px on 360px up to 45px on desktop */
    }
    .hero-sub {
        font-size: clamp(14px, 1.2vw, 15px) !important; /* 14px - 15px */
    }

    /* Cards & Micro Typography with clamp() */
    .fs-21 {
        font-size: clamp(18px, 1.8vw, 21px) !important; /* 18px - 21px */
    }
    .fs-19 {
        font-size: clamp(17px, 1.6vw, 19px) !important; /* 17px - 19px */
    }
    .fs-18 {
        font-size: clamp(16px, 1.5vw, 18px) !important; /* 16px - 18px */
    }
    .fs-17 {
        font-size: clamp(15px, 1.3vw, 17px) !important; /* 15px - 17px */
    }
    .fs-16 {
        font-size: clamp(14px, 1.2vw, 16px) !important; /* 14px - 16px */
    }
    .fs-15 {
        font-size: clamp(14px, 1.1vw, 15px) !important; /* 14px - 15px */
    }
    .fs-14 {
        font-size: clamp(13px, 1vw, 14px) !important; /* 13px - 14px */
    }
    .st-num, .roi-num {
        font-size: clamp(26px, 3.2vw, 36px) !important; /* 26px - 36px */
    }

    /* ─── Standard, Balanced Section Spacing with clamp() ─── */
    .hero {
        padding: clamp(36px, 5vw, 56px) 0 !important;
    }
    .sec {
        padding: clamp(32px, 4vw, 48px) 0 !important;
    }
    .sec-cta {
        padding: clamp(28px, 3.5vw, 40px) 0 !important;
    }

    /* Fluid Card Paddings */
    .bg-stat-card {
        padding: clamp(20px, 3vw, 40px) !important;
    }
    .blue-card-pad {
        padding: clamp(24px, 3.5vw, 44px) clamp(20px, 4vw, 48px) !important;
    }
    .blue-card-h {
        font-size: clamp(16px, 1.6vw, 20px) !important;
    }
    .blue-card-p {
        font-size: clamp(13px, 1.1vw, 14px) !important;
    }

    /* ─── Responsive Channels Grid ─── */
    .channels-grid {
        display: grid !important;
        grid-template-columns: repeat(8, max-content);
        gap: clamp(8px, 1.2vw, 12px);
    }
    @media (max-width: 1200px) {
        .channels-grid {
            grid-template-columns: repeat(4, max-content) !important;
        }
    }
    @media (max-width: 767px) {
        .channels-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
        .channels-grid .chip-channel {
            justify-content: center;
            text-align: center;
            font-size: 13px;
            padding: 6px 10px !important;
        }
    }

    /* ─── Equal Card Heights ─── */
    .row.gx-4.gy-4 .col-lg-3 {
        display: flex;
    }
    
    .row.gx-4.gy-4 .bdr-agent {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .row.gx-4.gy-4 .ag-h {
        min-height: 24px;
    }
    
    .row.gx-4.gy-4 .bdr-agent p {
        flex-grow: 1;
    }

    /* Equal height stat cards */
    .row.gx-4.gy-4.text-start .col-lg-4 {
        display: flex;
    }
    
    .row.gx-4.gy-4.text-start .bdr-stat {
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
    }
    
    .row.gx-4.gy-4.text-start .st-p {
        flex-grow: 1;
    }
    
    .row.gx-4.gy-4.text-start .stat-badge {
        margin-top: auto;
    }

    /* Proof section - responsive 6 -> 3 -> 2 columns */
    .proof-row {
        display: grid !important;
        grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
        width: 100% !important;
        margin: 0 !important;
        padding: 0 !important;
        gap: clamp(8px, 1.5vw, 16px);
    }

    .proof-row .proof-item {
        width: 100% !important;
        max-width: none !important;
        min-width: 0 !important;
        flex: none !important;
        box-sizing: border-box !important;
        margin: 0 !important;
        gap: clamp(6px, 1vw, 10px);
    }

    .proof-row .pn {
        font-size: clamp(18px, 2vw, 20px) !important;
    }

    .proof-row .pl {
        font-size: clamp(11px, 1vw, 12px) !important;
    }

    /* Desktop */
    @media (min-width: 992px) {
        .proof-row {
            grid-template-columns: repeat(6, minmax(0, 1fr)) !important;
        }
    }

    /* Tablet */
    @media (min-width: 768px) and (max-width: 991px) {
        .proof-row {
            grid-template-columns: repeat(3, minmax(0, 1fr)) !important;
        }
    }

    /* Mobile */
    @media (max-width: 767px) {
        .proof-row {
            grid-template-columns: repeat(2, minmax(0, 1fr)) !important;
        }
        .proof-row .proof-item:not(:last-child)::after {
            display: none !important;
        }
    }

    @media (min-width: 992px) {
        .bg-agent-card {
            height: 100%;
            min-height: 300px;
        }

        .row.gx-4.gy-4>.col-lg-3 {
            display: flex;
        }

        .row.gx-4.gy-4>.col-lg-3>a {
            display: flex;
            width: 100%;
        }

        .row.gx-4.gy-4>.col-lg-3>a>.bg-agent-card {
            width: 100%;
        }
    }

    
    

    /* FAQ accordion interactive styles */
    .faq-q {
        cursor: pointer;
        user-select: none;
        transition: color 0.2s ease;
    }
    .faq-q:hover {
        color: #0057B8;
    }
    .faq-item {
        transition: background-color 0.2s ease;
    }
</style>

<script>
function toggleFaq(el) {
    var ans = el.nextElementSibling;
    var icon = el.querySelector('i');
    if (ans) {
        var isOpen = ans.style.display === 'block';
        ans.style.display = isOpen ? 'none' : 'block';
        if (icon) {
            if (isOpen) {
                icon.classList.remove('bi-dash');
                icon.classList.add('bi-plus');
            } else {
                icon.classList.remove('bi-plus');
                icon.classList.add('bi-dash');
            }
        }
    }
}
</script>

<?php 
    get_footer('sms'); 
?>
      