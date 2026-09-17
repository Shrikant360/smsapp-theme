<?php

/**
 * Template Name: Dreamforce 2022
 */

get_header('sms');
?>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
    body {
        font-family: 'Open Sans', sans-serif;
        background-color: #ffffff !important;
        color: #333333;
        overflow-x: hidden;
    }

     h2 {
        /*font-family: 'Montserrat', sans-serif;*/
        text-transform: none;
        font-size: clamp(24px, 4vw, 32px);
    }

    /* ── HERO BANNER ── */
    .df-hero-section {
        position: relative;
        background: url('https://360smsapp.com/wp-content/uploads/2023/01/BG-01Dreamforce-2022.jpg?id=43092') center center / cover no-repeat;
        padding: 90px 0 160px 0;
        color: #ffffff;
    }

    .df-hero-section h3 {
        font-size: clamp(18px, 2.5vw, 24px);
        font-weight: 500;
        margin-bottom: 12px;
    }

    .df-hero-section h1 {
        font-size: clamp(28px, 4.5vw, 52px);
        font-weight: 800;
        line-height: 1.2;
        margin-bottom: 15px;
    }

    .df-hero-section h2 {
        font-size: clamp(22px, 3.5vw, 36px);
        font-weight: 700;
        margin-bottom: 0;
    }

    /* ── CLOUD SVG DIVIDERS ── */
    /*.cloud-divider-bottom {*/
    /*    position: absolute;*/
    /*    bottom: -1px;*/
    /*    left: 0;*/
    /*    right: 0;*/
    /*    width: 100%;*/
    /*    z-index: 5;*/
    /*    pointer-events: none;*/
    /*}*/

    /*.cloud-divider-top {*/
    /*    position: relative;*/
    /*    margin-top: -50px;*/
    /*    margin-bottom: -1px;*/
    /*    left: 0;*/
    /*    right: 0;*/
    /*    width: 100%;*/
    /*    z-index: 5;*/
    /*    pointer-events: none;*/
    /*}*/

    /* ── OVERLAPPING CARDS ── */
    .overlap-cards-container {
        margin-top: -100px;
        position: relative;
        z-index: 10;
        margin-bottom: 50px;
    }

    .overlap-card {
        background: #ffffff;
        border: 1px solid #eaeaea;
        border-bottom: 4px solid #00bcd5;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        border-radius: 8px;
        padding: 45px 20px;
        text-align: center;
        position: relative;
        min-height: 150px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .overlap-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
    }

    .card-badge {
        position: absolute;
        top: -15px;
        left: 50%;
        transform: translateX(-50%);
        background-color: #00bcd5;
        color: #ffffff;
        font-weight: 700;
        font-size: 13px;
        padding: 4px 24px;
        border-radius: 30px;
        text-transform: uppercase;
        letter-spacing: 1px;
        box-shadow: 0 4px 10px rgba(0, 188, 213, 0.3);
    }

    .card-body-text {
        font-size: 26px;
        font-weight: 700;
        color: #062752;
        line-height: 1.25;
        /*font-family: 'Montserrat', sans-serif;*/
    }

    /* ── MIDDLE MEETING SECTION ── */
    .meeting-section {
        padding: 30px 0 60px 0;
        background-color: #ffffff;
    }

    .meeting-section h5 {
        color: #062752;
        font-size: 22px;
        font-weight: 700;
        line-height: 1.3;
        margin-bottom: 15px;
        text-align: left;
    }

    .meeting-section p {
        color: #062752;
        font-size: 18px;
        margin-bottom: 15px;
    }

    .meeting-section p a {
        color: #062752;
        font-weight: 700;
        text-decoration: none;
    }

    .meeting-section p a:hover {
        text-decoration: underline;
    }

    /* ── BUTTON STYLES ── */
    .btn-custom {
        display: inline-flex;
        align-items: center;
        justify-content: space-between;
        background-color: #00bcd5;
        color: #ffffff;
        font-weight: 600;
        font-size: 15px;
        padding: 10px 18px;
        border-radius: 4px;
        text-decoration: none;
        transition: all 0.3s ease;
        border: 1px solid #00bcd5;
        min-width: 250px;
    }

    .btn-custom i {
        background-color: #01e2ff;
        color: #ffffff;
        border-radius: 2px;
        padding: 2px 6px;
        font-size: 12px;
        margin-left: 15px;
        font-weight: bold;
        transition: all 0.3s ease;
    }

    .btn-custom:hover {
        background-color: #ffffff;
        color: #00bcd5;
        border-color: #00bcd5;
    }

    .btn-custom:hover i {
        background-color: #00bcd5;
        color: #ffffff;
    }

    /* ── BANG FEATURES SECTION ── */
    .features-bang-section {
        background-color: #f4f4f4;
        padding: 60px 0;
        border-top: 1px solid #eaeaea;
        border-bottom: 1px solid #eaeaea;
    }

    .bang-subtitle {
        text-align: center;
        font-size: 20px;
        color: #153d70;
        margin-bottom: 10px;
        font-weight: 500;
    }

    .bang-title {
        text-align: center;
        font-size: clamp(24px, 3.5vw, 38px);
        color: #1674ba;
        margin-bottom: 45px;
        font-weight: 800;
    }

    .feature-col-title {
        font-size: 20px;
        font-weight: 700;
        color: #000000;
        margin-bottom: 25px;
        line-height: 1.4;
    }

    .df-list {
        list-style: none;
        padding-left: 0;
    }

    .df-list li {
        position: relative;
        padding-left: 35px;
        margin-bottom: 15px;
        font-size: 16px;
        font-weight: 600;
        color: #333333;
        display: flex;
        align-items: center;
        min-height: 24px;
    }

    .df-list li::before {
        content: "";
        position: absolute;
        left: 0;
        width: 22px;
        height: 22px;
        background-image: url('https://360smsapp.com/wp-content/uploads/2022/09/right.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
    }

    /* ── BOTTOM CTA SECTION ── */
    .bottom-cta-section {
        position: relative;
        background: url('https://360smsapp.com/wp-content/uploads/2023/01/BG-01Dreamforce-2022.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        padding: 90px 0 130px 0;
        color: #ffffff;
        text-align: center;
    }

    .bottom-cta-section .lastpata {
        font-size: clamp(18px, 2.5vw, 22px);
        color: #ffffff;
        margin-bottom: 12px;
        font-weight: 500;
    }

    .bottom-cta-section .heads {
        font-size: clamp(24px, 4vw, 38px);
        line-height: 1.3;
        color: #ffffff;
        margin-bottom: 35px;
        font-weight: 800;
    }

    .bottom-cta-section p.email-cta {
        font-size: 20px;
        margin-top: 25px;
        margin-bottom: 0;
    }

    .bottom-cta-section p.email-cta a {
        color: #ffffff;
        font-weight: 700;
        text-decoration: none;
    }

    .bottom-cta-section p.email-cta a:hover {
        text-decoration: underline;
    }

    /* ── WHATSAPP FLOATING BUTTON ── */
    .whatsapp-content {
        position: fixed;
        top: 70%;
        right: 0;
        z-index: 500;
    }

    .whatsapp-content div {
        padding: 6px 12px;
        background-color: #595c71;
        color: #fff;
        border-top-left-radius: 4px;
        border-bottom-left-radius: 4px;
        transition: 0.3s;
        font-weight: 700;
        font-size: 14px;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .whatsapp-content a {
        text-decoration: none;
    }

    .whatsapp-content div:hover {
        background-color: #075E54;
    }
</style>

<!-- Main content container -->
<main class="site-main" id="main">

    <!-- 1. HERO BANNER SECTION -->
    <section class="df-hero-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Left text content -->
                <div class="col-12 col-lg-7 text-start mb-5 mb-lg-0">
                    <h3>Attending <span style="color: #01e2ff; font-weight: 700;">#dreamforce2022?</span> So are we.</h3>
                    <h1>Stop by <span style="color: #fbec39; font-weight: 800;">Booth #1537</span> at</h1>
                    <h2>Dreamforce <span style="font-weight: 400;">for</span> <span style="color: #fbec39; font-weight: 800;">4x Growth.</span></h2>
                </div>
                <!-- Right illustration -->
                <div class="col-12 col-lg-5 text-center text-lg-end">
                    <img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2022/09/booth.png" alt="Dreamforce 360 SMS Booth" class="img-fluid" style="max-height: 380px;">
                </div>
            </div>
        </div>

        <!-- Cloud divider bottom -->
        <!--<div class="cloud-divider-bottom">-->
        <!--    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120" preserveAspectRatio="none" style="width: 100%; height: 80px; display: block;">-->
        <!--        <path d="M0,120 C80,120 120,90 160,80 C200,70 240,100 320,100 C400,100 440,70 480,60 C520,50 560,80 640,80 C720,80 760,50 800,40 C840,30 880,70 960,70 C1040,70 1080,40 1120,30 C1160,20 1200,60 1280,60 C1360,60 1400,100 1440,120 L1440,120 L0,120 Z" fill="#ffffff"/>-->
        <!--    </svg>-->
        <!--</div>-->
    </section>

    <!-- 2. OVERLAPPING VENUE, DATE & BOOTH CARDS -->
    <div class="container overlap-cards-container">
        <div class="row justify-content-center g-4">
            <!-- Venue -->
            <div class="col-12 col-md-4">
                <div class="overlap-card">
                    <span class="card-badge">Venue</span>
                    <div class="card-body-text">Moscone, SF</div>
                </div>
            </div>
            <!-- Date -->
            <div class="col-12 col-md-4">
                <div class="overlap-card">
                    <span class="card-badge">Date</span>
                    <div class="card-body-text">September<br>20th-22nd</div>
                </div>
            </div>
            <!-- Booth -->
            <div class="col-12 col-md-4">
                <div class="overlap-card">
                    <span class="card-badge">Booth</span>
                    <div class="card-body-text">#1537</div>
                </div>
            </div>
        </div>
    </div>

    <!-- 3. CALL-TO-ACTION MEETING & DEMO SECTION -->
    <section class="meeting-section">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-12 col-md-5 mb-5 mb-md-0 px-md-4 border-end border-light-subtle text-start">
                    <h5>Want to meet up<br>at our booth or outside Dreamforce?</h5>
                    <a class="btn-custom mb-3" href="/contact-us">
                        Schedule a one-on-one meeting
                        <i class="bi bi-chevron-right"></i>
                    </a>
                    <p>Or drop an email at <a href="mailto:care@360smsapp.com">care@360smsapp.com.</a></p>
                </div>
                <div class="col-12 col-md-5 px-md-4 text-start">
                    <h5>Need a peek<br>at the 360 SMS app?</h5>
                    <a class="btn-custom mb-3" href="/demo">
                        Watch Demo
                        <i class="bi bi-chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. BANG FEATURES & LISTS SECTION -->
    <section class="features-bang-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <p class="bang-subtitle">It’s the first in-person Dreamforce in 2 years. So, we’re making it count.</p>
                    <h2 class="bang-title">We’re coming to Dreamforce with a bang.</h2>

                    <div class="row g-4">
                        <!-- Left Column: A-Team -->
                        <div class="col-12 col-md-6 px-md-4">
                            <h4 class="feature-col-title">We’ll bring our A-team<br>that can handle anything <br>under the sun.</h4>
                            <ul class="df-list">
                                <li>Custom Plans for Growth</li>
                                <li>Communication Strategies</li>
                                <li>Technology Choices</li>
                                <li>Messaging Use Cases</li>
                                <li>Special Business Needs</li>
                            </ul>
                        </div>
                        <!-- Right Column: Upgrades -->
                        <div class="col-12 col-md-6 px-md-4">
                            <h4 class="feature-col-title">And the best-ever 360 SMS<br>that’s fine-tuned for growth <br>and packed with upgrades.</h4>
                            <ul class="df-list">
                                <li>4x Conversion</li>
                                <li>2x Retention</li>
                                <li>43% Faster Sales</li>
                                <li>5x Better Reach</li>
                                <li>100% Compliance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. BOTTOM CTA BANNER SECTION -->
    <section class="bottom-cta-section">
        
        <!-- Cloud divider top -->
        <!--<div class="cloud-divider-top">-->
        <!--    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120" preserveAspectRatio="none" style="width: 100%; height: 80px; display: block; transform: scaleY(-1);">-->
        <!--        <path d="M0,120 C80,120 120,90 160,80 C200,70 240,100 320,100 C400,100 440,70 480,60 C520,50 560,80 640,80 C720,80 760,50 800,40 C840,30 880,70 960,70 C1040,70 1080,40 1120,30 C1160,20 1200,60 1280,60 C1360,60 1400,100 1440,120 L1440,120 L0,120 Z" fill="#f4f4f4"/>-->
        <!--    </svg>-->
        <!--</div>-->

        <div class="container pt-4">
            <p class="lastpata">Calling all Salesforce-powered businesses globally.</p>
            <h2 class="heads">See how growth-obsessed companies are<br>changing the game with SMS.</h2>

            <div class="d-flex flex-wrap justify-content-center gap-3">
                <a class="btn-custom" href="/contact-us">
                    Schedule a one-on-one meeting
                    <i class="bi bi-chevron-right"></i>
                </a>
                <a class="btn-custom" href="/demo">
                    Watch Demo
                    <i class="bi bi-chevron-right"></i>
                </a>
            </div>

            <p class="email-cta">Or drop an email at <a href="mailto:care@360smsapp.com">care@360smsapp.com</a>.</p>
        </div>

        <!-- Cloud divider bottom -->
        <!--<div class="cloud-divider-bottom">-->
        <!--    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 120" preserveAspectRatio="none" style="width: 100%; height: 80px; display: block;">-->
        <!--        <path d="M0,120 C80,120 120,90 160,80 C200,70 240,100 320,100 C400,100 440,70 480,60 C520,50 560,80 640,80 C720,80 760,50 800,40 C840,30 880,70 960,70 C1040,70 1080,40 1120,30 C1160,20 1200,60 1280,60 C1360,60 1400,100 1440,120 L1440,120 L0,120 Z" fill="#181828"/>-->
        <!--    </svg>-->
        <!--</div>-->
    </section>

</main>

<!-- Floating WhatsApp Widget -->
<div class="whatsapp-content">
    <a onclick="dataLayer.push({ event: 'whatsapp_click', button_type: 'desktop' })" target="_blank" href="https://api.whatsapp.com/send?phone=12028038488&amp;text=Hello,%20I%20need%20help">
        <div>
            <img src="https://360smsapp.com/wp-content/uploads/2022/02/ezgif-3-ce6bf46dd917-1-2.webp" width="30" height="30" alt="logo">
            <span>Live Chat</span>
        </div>
    </a>
</div>


<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<?php get_footer('sms'); ?>