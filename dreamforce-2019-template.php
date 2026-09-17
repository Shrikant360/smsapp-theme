<?php

/**
 * Template Name: Salesfrce Dreamforce 2019
 */

get_header('sms');
?>


<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
    body {
        background-color: #ffffff !important;
        color: #333333;
        overflow-x: hidden;
    }

    h1, h2, h3, h4, h5, h6 {
        text-transform: none;
    }

    /* ── HERO BANNER ── */
    .df-hero {
        position: relative;
        height: 600px;
        background-image: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url('https://360smsapp.com/wp-content/uploads/2019/05/architecture-bridge-connection-417054-1.jpg');
        background-size: cover;
        background-position: center;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 20px;
    }

    .df-hero h1 {
        color: #ffffff;
        font-weight: 800;
        font-size: clamp(32px, 6vw, 72px);
        letter-spacing: 2px;
        margin: 0;
        text-transform: uppercase;
        text-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);
    }

    .df-hero .df-subtitle {
        color: #ffffff;
        font-weight: 500;
        font-size: clamp(16px, 2.5vw, 24px);
        margin-top: 15px;
        letter-spacing: 1px;
        text-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
    }

    /* ── EXPERTS SECTION ── */
    .df-experts-section {
        padding: 80px 0;
        background-color: #ffffff;
    }

    .df-experts-title {
        color: #2a2b36;
        font-weight: 700;
        margin-bottom: 35px;
        font-size: clamp(20px, 3vw, 32px);
        letter-spacing: 0.5px;
    }

    .df-text {
        font-size: 16px;
        line-height: 1.8;
        color: #5b5b5b;
    }

    .df-text p {
        margin-bottom: 20px;
    }

    /* ── HELP SECTION ── */
    .df-help-section {
        background-color: #0c182b;
        color: #ffffff;
        padding: 80px 0;
    }

    .df-help-title {
        font-size: clamp(22px, 3.5vw, 32px);
        font-weight: 700;
        letter-spacing: 1px;
    }

    .df-help-subtitle {
        font-size: clamp(14px, 1.8vw, 17px);
        font-weight: 400;
        opacity: 0.85;
    }

    .df-icon-circle {
        width: 50px;
        height: 50px;
        background-color: #0066a5;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #ffffff;
        font-size: 20px;
        margin-bottom: 15px;
        transition: transform 0.3s ease;
    }

    .df-feature-card:hover .df-icon-circle {
        transform: scale(1.1);
    }

    .df-feature-title {
        font-size: 18px;
        font-weight: 700;
        margin-bottom: 10px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .df-feature-text {
        font-size: 14px;
        line-height: 1.6;
        opacity: 0.9;
    }

    .df-globe-img {
        max-width: 100%;
        height: auto;
        display: block;
        margin: 0 auto;
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

    <!-- 1. HERO BANNER -->
    <section class="df-hero">
        <h1>DREAMFORCE 2019</h1>
        <div class="df-subtitle">November 19th - 22nd 2019, Moscone, San Francisco</div>
    </section>

    <!-- 2. MEET OUR EXPERTS SECTION -->
    <section class="df-experts-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-10">
                    <h2 class="text-center text-uppercase df-experts-title">Meet Our 360 SMS App Experts in Dreamforce, San Francisco</h2>
                    <div class="df-text text-justify">
                        <p>After a tremendously successful year, we are again back to the USA with an utmost powerful product in Salesforce World that is “360 SMS App”. Our experts are hanging tight to meet you. We are helping a huge number of clients beat the challenge and increase their client connect, we can help your business as well to thrive more than ever by switching to Text Marketing.</p>
                        <p>360 SMS App is incorporated with the world top CRM stage, Salesforce which is worked to make a correspondence channel to meet the business explicit usefulness. We had a fruitful occasion in Sydney, where we propelled a bundle of new highlights and additional items, this time around we intend to make it much greater, better and commendable at Dreamforce, San Francisco. The US is conspicuous geography for us and seems to have multiple times more guests at Dreamforce.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. HOW WE CAN HELP YOU WORK BETTER -->
    <section class="df-help-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-12 col-lg-10 text-center">
                    <h2 class="text-uppercase df-help-title mb-3">How We Can Help You Work Better?</h2>
                    <p class="df-help-subtitle">Drive immediate business impact with the world’s leading cross platforms secured messaging system.</p>
                </div>
            </div>

            <div class="row align-items-center g-4">
                <!-- Left Column Features -->
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- Codeless Automation -->
                    <div class="df-feature-card mb-5">
                        <div class="df-icon-circle">
                            <i class="bi bi-ui-checks"></i>
                        </div>
                        <h4 class="df-feature-title">Codeless Automation</h4>
                        <p class="df-feature-text text-justify">Can build surveys without using any code. It can help you connect with the audience through SMS and also can understand them better through Surveys.</p>
                    </div>
                    <!-- Link Click Tracking -->
                    <div class="df-feature-card">
                        <div class="df-icon-circle">
                            <i class="bi bi-link-45deg"></i>
                        </div>
                        <h4 class="df-feature-title">Link Click Tracking</h4>
                        <p class="df-feature-text text-justify">App comes with an extreme feature, where you can add hyperlink to your SMS and also, you can track the same.</p>
                    </div>
                </div>

                <!-- Center Globe Column -->
                <div class="col-12 col-md-12 col-lg-6 d-none d-lg-block">
                    <img src="https://360smsapp.com/wp-content/uploads/2017/08/6-2.png" alt="360 SMS App Global Connection Globe" class="df-globe-img">
                </div>

                <!-- Right Column Features -->
                <div class="col-12 col-md-6 col-lg-3">
                    <!-- CTI Compatible -->
                    <div class="df-feature-card mb-5">
                        <div class="df-icon-circle">
                            <i class="bi bi-headset"></i>
                        </div>
                        <h4 class="df-feature-title">CTI COMPATIBLE</h4>
                        <p class="df-feature-text text-justify">We provide the world-class CTI integration that goes as smooth along with your Salesforce.</p>
                    </div>
                    <!-- SMS Template -->
                    <div class="df-feature-card">
                        <div class="df-icon-circle">
                            <i class="bi bi-chat-square-quote"></i>
                        </div>
                        <h4 class="df-feature-title">SMS TEMPLATE</h4>
                        <p class="df-feature-text text-justify">Easy to create and customizable with any object and associated fields!</p>
                    </div>
                </div>
            </div>
        </div>
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