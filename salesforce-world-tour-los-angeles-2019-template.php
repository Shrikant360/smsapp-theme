<?php

/**
 * Template Name: Salesforce World Tour, Los Angeles Page
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

    h2{
        text-transform: none;
        font-size: clamp(24px, 4vw, 32px);
    }

    /* ── HERO BANNER ── */
    .la-hero {
        position: relative;
        height: 500px;
        background-image: url('https://360smsapp.com/wp-content/uploads/2019/07/wp4290189.jpg');
        background-size: cover;
        background-position: center top;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 20px;
    }

    .hero-badge-light {
        background-color: rgba(0, 0, 0, 0.84);
        color: #ffffff;
        font-weight: 100;
        font-size: clamp(16px, 2.5vw, 34px);
        letter-spacing: 2px;
        padding: 10px;
        width: 100%;
        max-width: 465px;
        min-height: 60px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 15px auto;
        text-transform: uppercase;
        z-index: 2;
    }

    .hero-badge-bold {
        background-color: rgba(0, 0, 0, 0.84);
        color: #ffffff;
        font-weight: 700;
        font-size: clamp(22px, 5vw, 60px);
        letter-spacing: 2px;
        padding: 10px;
        width: 100%;
        max-width: 598px;
        min-height: 83px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        text-transform: uppercase;
        z-index: 2;
    }

    .hero-btn-container {
        z-index: 2;
    }

    .hero-cta-link-btn {
        background-color: rgba(255, 255, 255, 0.75);
        color: #000000;
        font-weight: 500;
        font-size: 16px;
        padding: 8px 24px;
        border-radius: 30px;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease, transform 0.2s ease;
        border: 1px solid transparent;
    }

    .hero-cta-link-btn:hover {
        background-color: #ffffff;
        color: #000000;
        border-color: #000000;
        transform: translateY(-2px);
    }

    /* ── HIGHLIGHT ROW ── */
    .la-highlight-row {
        background-color: #110600;
        color: #ffffff;
        padding: 30px 20px;
        text-align: center;
        position: relative;
    }

    .la-highlight-row h2 {
        font-size: clamp(20px, 3.2vw, 32px);
        font-weight: 700;
        margin: 0;
        letter-spacing: 1px;
        text-transform: uppercase;
        line-height: 1.3;
    }

    .la-highlight-row .date-sub {
        font-size: clamp(16px, 2vw, 22px);
        font-weight: 600;
        margin-top: 8px;
        opacity: 0.9;
    }

    .la-marker-svg {
        position: absolute;
        bottom: -69px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 10;
        pointer-events: none;
    }

    /* ── CONTENT SECTION ── */
    .la-content-section {
        padding-top: 110px; /* space for SVG marker */
        padding-bottom: 70px;
        background-color: #ffffff;
    }

    .la-content-title {
        color: #2a2b36;
        font-weight: 700;
        margin-bottom: 25px;
        font-size: clamp(18px, 2.5vw, 24px);
        letter-spacing: 0.5px;
    }

    .la-text {
        font-size: 16px;
        line-height: 1.8;
        color: #5b5b5b;
    }

    .la-content-img-left {
        float: left;
        margin-right: 20px;
        margin-bottom: 15px;
        width: 169px;
        height: 300px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .la-content-img-right {
        float: right;
        margin-left: 20px;
        margin-bottom: 15px;
        width: 300px;
        height: 169px;
        object-fit: cover;
        transition: transform 0.3s ease;
    }

    .la-content-img-left:hover, .la-content-img-right:hover {
        transform: scale(1.02);
    }

    @media (max-width: 767px) {
        .la-content-img-left, .la-content-img-right {
            float: none !important;
            margin: 15px auto !important;
            display: block !important;
            width: 100% !important;
            max-width: 300px !important;
            height: auto !important;
        }
    }

    .la-img:hover {
        transform: scale(1.02);
    }

    /* ── CTA SECTION ── */
    .la-cta-section {
        background-color: #001851;
        color: #ffffff;
        padding: 60px 20px;
        text-align: center;
    }

    .la-cta-section h3 {
        font-size: clamp(22px, 3.5vw, 32px);
        font-weight: 700;
        margin-bottom: 25px;
        letter-spacing: 1px;
    }

    .la-cta-btn {
        background-color: #00bbd3;
        color: #ffffff;
        font-weight: 700;
        font-size: 18px;
        padding: 14px 35px;
        border-radius: 6px;
        text-decoration: none;
        display: inline-block;
        transition: background-color 0.3s ease, transform 0.2s ease;
        border: none;
    }

    .la-cta-btn:hover {
        background-color: #009aaf;
        color: #ffffff;
        transform: translateY(-2px);
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

    <!-- 1. LOS ANGELES HERO BANNER -->
    <section class="la-hero">
        <div class="hero-badge-light">UNLEASH THE POWER</div>
        <div class="hero-badge-bold mb-4">OF SALESFORCE</div>
        <div class="hero-btn-container d-flex flex-wrap justify-content-center gap-3">
            <a href="https://360smsapp.com/demo" target="_blank" class="hero-cta-link-btn">Watch Demo<i class="bi bi-chevron-right ms-2"></i></a>
            <a href="https://calendly.com/360sms/30min" target="_blank" class="hero-cta-link-btn">Book A Free Trial<i class="bi bi-chevron-right ms-2"></i></a>
        </div>
    </section>

    <!-- 2. DARK BROWN HIGHLIGHT ROW WITH SHAPE DIVIDER -->
    <section class="la-highlight-row">
        <h2>“SALESFORCE WORLD TOUR, Los Angeles”</h2>
        <div class="date-sub">28th August 2019</div>
        <div class="la-marker-svg">
            <svg width="140" height="70" style="fill: #110600"><path d="M 0,0 Q 65,5 70,70 Q 75,5 140,0"></path></svg>
        </div>
    </section>

    <!-- 3. MAIN BODY CONTENT SECTION -->
    <section class="la-content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-11">
                    
                    <!-- Main Body Header -->
                    <h3 class="text-start text-uppercase la-content-title">Most fascinating experience at Salesforce WorldTour, Los Angeles:</h3>
                    
                    <div class="la-text text-justify">
                        <p>Salesforce World Tour 2019 just took place in Los Angeles on August 28, 2019. It was one of its kind events, being one of the greatest events by Salesforce. It takes place every year and this year too, it was celebrated with a bang. Salesforce enthusiast from all over the world witnessed this huge yet another spectacular event of the year. It was a day packed with the process of innovative learning along with fun and enjoyment.</p>
                        
                        <p>
                            <img src="https://360smsapp.com/wp-content/uploads/2021/11/741D3CB8-54DC-437C-9BA4-56976B057BF1-1-300x169.jpg" alt="360 Sms App most facinating experience Salesforce WorldTour" class="la-content-img-right rounded shadow-sm">
                            <img src="https://360smsapp.com/wp-content/uploads/2021/11/5A540C9B-25F8-4DEA-B9C7-F0B62D5CF7C4-169x300.jpg" alt="360 Sms App Most Fascinating Experience Salesforce World Tour" class="la-content-img-left rounded shadow-sm">
                            The event was majorly all about keynote speakers, hands-on sessions, live demonstrations, etc. It was a much-needed event aiming to inform the people about the latest updates of Salesforce along with their practical usage and applications. People also got a chance to meet other Trailblazers like them with whom they shared their common interests as well. It was definitely an event worth remembering for those who truly feel that Salesforce CRM can take their business to great heights.
                        </p>
                        
                        <p>
                            We all are already pretty much aware of the fact that people do not easily turn a blind eye for something which can provide them with exceptional benefits. With people all around the world, we were also a part of this huge event. We were there to witness the magnificent yet informative sessions by the respective keynote speakers along with other trailblazers too. We got informed about various new tools to attract new customers and maintain that special bond with the already existing ones. Also, we got quite a few new customers on-boarded via this event. Again, a special mention to Salesforce CRM for organizing this huge event every year so that people can become much aware than before and also generate higher revenue alongside. Now, our experts of 360 SMS App are also coming to the biggest event of the year- Dreamforce’19. Book a slot with us now if you haven’t yet.
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 4. CTA BANNER ROW -->
    <section class="la-cta-section">
        <div class="container">
            <h3>SEE THE 360 SMS APP PLATFORM IN ACTION!</h3>
            <a href="https://calendly.com/360sms/30min" target="_blank" class="la-cta-btn">Book Your Free Trial</a>
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