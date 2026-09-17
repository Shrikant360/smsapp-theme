<?php
/*
Template Name:salesforce-instant-messaging
*/
get_header('sms');
?>
    <style>
        body {
            background-color: #fff;
        }

        /* ── Hero ── */
        .hero-section {
            background: url("https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/05/SMS-Blog-Banner-BG.webp");
            padding: 60px 20px;
            text-align: center;
        }
        .hero-section h1 {
            color: #fff;
            font-size: 4rem;
            font-weight: 400;
            line-height: 1.3;
        }
        .hero-section h1 strong {
            font-weight: 700;
        }
        .hero-section .btn-learn-more {
            display: inline-block;
            margin-top: 18px;
            background-color: #0057b8;
            color: #fff;
            font-size: 1.3rem;
            font-weight: 600;
            padding: 10px 28px;
            border-radius: 4px;
            text-decoration: none;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }
        .hero-section .btn-learn-more:hover {
            background-color: #003f8a;
            color: #fff;
        }

        /* ── Quote ── */
        .quote-section {
            background: linear-gradient(135deg, #1a3a5c, #2a5a8a);
            padding: 30px 40px;
            position: relative;
            margin: 40px 0;
            border-radius: 4px;
        }
        .quote-section p {
            color: #fff;
            font-size: 2rem;
        }
        .quote-section .quote-mark {
            position: absolute;
            bottom: 10px;
            right: 30px;
            font-size: 5rem;
            color: rgba(255,255,255,0.15);
            line-height: 1;
        }

        /* ── Description ── */
        .description-section p {
            color: #000;
            line-height: 1.8;
            font-size: 1.5rem;
        }
        .description-section h5 {
            font-weight: 700;
            margin-top: 25px;
            margin-bottom: 10px;
        }

        /* ── Help grid ── */
        .help-section h2 {
            font-weight: 700;
            text-align: center;
            margin-bottom: 40px;
            font-size: 2rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .help-section h2 span {
            color: #0057b8;
        }
        .feature-card {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding: 20px 15px;
            margin-bottom: 20px;
        }
        .feature-icon {
            flex-shrink: 0;
            width: 45px;
            height: 45px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #0057b8;
            color: #fff;
            font-size: 1.5rem;
        }
        .feature-card p {
            margin: 0;
            font-size: 1.5rem;
            color: #555;
            line-height: 1.6;
        }

        /* ── NEW: Intro two-column section ── */
        .intro-split-section {
            padding: 60px 0 40px;
            background: #fff;
        }
        .intro-split-section .image-col {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .intro-split-section .image-col img {
            max-width: 100%;
            height: auto;
        }
        .intro-split-section .text-col p {
            font-size: 1.4rem;
            color: #333;
            line-height: 1.9;
            margin-bottom: 18px;
        }
        .intro-split-section .text-col p strong {
            color: #000;
            font-weight: 700;
        }

        /* ── NEW: Additional Benefits section ── */
        .benefits-section {
            background: #f4f4f4;
            padding: 50px 20px;
        }
        .benefits-section h2 {
            font-size: 2rem;
            font-weight: 700;
            text-align: center;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #000;
            margin-bottom: 30px;
        }
        .benefits-section .intro-text {
            font-size: 1.4rem;
            color: #333;
            line-height: 1.8;
            margin-bottom: 25px;
        }
        .benefits-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .benefits-list li {
            font-size: 1.4rem;
            color: #333;
            line-height: 1.9;
            padding: 3px 0;
            display: flex;
            align-items: flex-start;
            gap: 8px;
        }
        .benefits-list li::before {
            content: "•";
            color: #333;
            font-size: 1.6rem;
            line-height: 1.4;
            flex-shrink: 0;
        }

        /* ── NEW: Monitor/screen mockup box ── */
        .monitor-box {
            background: #1a1a2e;
            border-radius: 8px 8px 0 0;
            padding: 14px 14px 0;
            position: relative;
        }
        .monitor-screen {
            background: #fff;
            border-radius: 4px;
            padding: 14px;
            min-height: 200px;
        }
        .monitor-screen .screen-title {
            font-size: 1.2rem;
            color: #555;
            border-bottom: 1px solid #eee;
            padding-bottom: 8px;
            margin-bottom: 12px;
        }
        .monitor-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }
        .monitor-tile {
            background: #0057b8;
            border-radius: 6px;
            padding: 14px 8px;
            text-align: center;
            color: #fff;
            font-size: 1.1rem;
        }
        .monitor-tile i {
            display: block;
            font-size: 1.8rem;
            margin-bottom: 6px;
        }
        .monitor-tile.tile-dark {
            background: #1a3a5c;
        }
        .monitor-stand {
            background: #2a2a3e;
            height: 18px;
            border-radius: 0 0 4px 4px;
            margin-bottom: 4px;
        }
        .monitor-base {
            background: #222;
            height: 12px;
            width: 60%;
            margin: 0 auto;
            border-radius: 0 0 8px 8px;
        }

        /* ── NEW: Why Choose section ── */
        .why-choose-section {
            background: #fff;
            padding: 55px 20px;
            text-align: center;
        }
        .why-choose-section h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #000;
            margin-bottom: 18px;
        }
        .why-choose-section p {
            font-size: 1.5rem;
            color: #333;
            line-height: 1.9;
            max-width: 700px;
            margin: 0 auto 24px;
        }
        .why-choose-section p strong {
            color: #000;
            font-weight: 700;
        }
        .why-choose-section .btn-demo {
            display: inline-block;
            background-color: #0057b8;
            color: #fff;
            font-size: 1.4rem;
            font-weight: 600;
            padding: 12px 32px;
            border-radius: 4px;
            text-decoration: none;
            letter-spacing: 0.5px;
        }
        .why-choose-section .btn-demo:hover {
            background-color: #003f8a;
            color: #fff;
        }

        @media screen and (max-width: 768px) {
            .hero-section h1 { font-size: 2.2rem; }
            .benefits-section h2 { font-size: 1.6rem; }
            .monitor-grid { grid-template-columns: repeat(2, 1fr); }
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1 style="color:#000;"><strong>SALESFORCE INSTANT</strong> MESSAGING<br>SOLUTION</h1>
        </div>
    </section>

    <!-- Intro Two-Column Section -->
    <section class="intro-split-section">
        <div class="container">
            <div class="row align-items-center">

                <!-- Left: Salesforce + 360 SMS logo image -->
                <div class="col-lg-6 col-md-12 image-col mb-4 mb-lg-0">
                    <img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/05/Untitled-design-37.png"
                         alt="Salesforce + 360 SMS App" />
                </div>

                <!-- Right: Text -->
                <div class="col-lg-6 col-md-12 text-col">
                    <p>Salesforce powered texting app, <strong>360 SMS App</strong> can be your one-stop texting solution. This powerful application provides you with some wonderful functionalities that you may have never experienced before.</p>
                    <p>Being the <strong>top-rated SMS app on the AppExchange</strong>, it empowers you to communicate effectively with your already existing customers, prospects, and even business partners. 360 SMS app is versatile, yet so easy to use and configure at the same time. Engage with your customers in a more interactive manner along with generating higher revenues with this top-ranked <strong>Salesforce native App</strong>.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Additional Benefits Section -->
    <section class="benefits-section">
        <div class="container">
            <h2>ADDITIONAL BENEFITS OF SALESFORCE NATIVE APP</h2>

            <div class="row align-items-center">

                <!-- Left: Text + lists -->
                <div class="col-lg-7 col-md-12 mb-4 mb-lg-0">
                    <p class="intro-text">Natively built on Salesforce, 360 SMS App provides its users with some extraordinary benefits apart from the basic ones such as sending single, bulk SMS/MMS. It provides an industry-specific solution to the people as per their defined business needs and requirements. The following mentioned are a few additional features that the users get with this powerful app:</p>

                    <div class="row">
                        <div class="col-md-6">
                            <ul class="benefits-list">
                                <li>Support Survey, MMS, Emojis</li>
                                <li>Incoming dashboard</li>
                                <li>Call Auto-forwarding</li>
                                <li>Global Coverage & 24*5 strong tech support</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="benefits-list">
                                <li>Email Alerts on Incoming SMS</li>
                                <li>Hyperlink Tracking</li>
                                <li>Bring your own number</li>
                                <li>Schedule event reminders and text messages</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Right: Monitor mockup -->
                <div class="col-lg-5 col-md-12">
                    <div class="monitor-box">
                        <div class="monitor-screen">
                            <div class="screen-title">Unique Features</div>
                            <div class="monitor-grid">
                                <div class="monitor-tile">
                                    <i class="bi bi-telephone-fill"></i>
                                    Emon Calling
                                </div>
                                <div class="monitor-tile">
                                    <i class="bi bi-chat-dots-fill"></i>
                                    Click to SMS
                                </div>
                                <div class="monitor-tile">
                                    <i class="bi bi-phone-fill"></i>
                                    Verify the Phone
                                </div>
                                <div class="monitor-tile tile-dark">
                                    <i class="bi bi-envelope-check-fill"></i>
                                    Verify The Email
                                </div>
                                <div class="monitor-tile">
                                    <i class="bi bi-clock-fill"></i>
                                    Dark Hours
                                </div>
                                <div class="monitor-tile tile-dark">
                                    <i class="bi bi-toggle-on"></i>
                                    Automatic Opt-In/ Opt-Out
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="monitor-stand"></div>
                    <div class="monitor-base"></div>
                </div>

            </div>
        </div>
    </section>

    <!-- Why Choose 360 SMS App Section -->
    <section class="why-choose-section">
        <div class="container">
            <h3>Why Choose 360 SMS App?</h3>
            <p>An industry-focused messaging app like <strong>360 SMS App</strong> can take your business to great heights. Choosing us can bring you more lead engagement along with higher revenue generation at the same time. <strong>Wish to try our app for free?</strong> Schedule a free demo with our experts now and get on board with the best Salesforce-powered texting app.</p>
            <a href="#" class="btn-demo">Schedule Your Demo</a>
        </div>
    </section>

<?php
get_footer('sms');
?>