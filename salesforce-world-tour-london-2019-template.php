<?php

/**
 * Template Name: Salesforce World Tour, London Page
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
    .london-hero {
        position: relative;
        height: 500px;
        background-image: url('https://360smsapp.com/wp-content/uploads/2021/01/321669-alexfas01-1.jpg');
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
        font-size: clamp(16px, 2.5vw, 30px);
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
    }

    /* ── HIGHLIGHT ROW ── */
    .london-highlight-row {
        background-color: #001851;
        color: #ffffff;
        padding: 30px 20px;
        text-align: center;
        position: relative;
    }

    .london-highlight-row h2 {
        font-size: clamp(20px, 3.2vw, 32px);
        font-weight: 700;
        margin: 0;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .london-marker-svg {
        position: absolute;
        bottom: -69px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 10;
        pointer-events: none;
    }

    /* ── CONTENT SECTION ── */
    .london-content-section {
        padding-top: 110px; /* space for SVG marker */
        padding-bottom: 70px;
        background-color: #ffffff;
    }

    .london-content-section h3 {
        color: #000000;
        font-weight: 700;
        margin-bottom: 30px;
        font-size: clamp(22px, 3vw, 28px);
    }

    .london-text {
        font-size: 16px;
        line-height: 1.8;
        color: #5b5b5b;
    }

    .london-img {
        max-width: 100%;
        height: auto;
        display: block;
        transition: transform 0.3s ease;
    }

    .london-img:hover {
        transform: scale(1.02);
    }

    /* ── CTA SECTION ── */
    .london-cta-section {
        background-color: #001851;
        color: #ffffff;
        padding: 60px 20px;
        text-align: center;
    }

    .london-cta-section h3 {
        font-size: clamp(22px, 3.5vw, 32px);
        font-weight: 700;
        margin-bottom: 25px;
        letter-spacing: 1px;
    }

    .london-cta-btn {
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

    .london-cta-btn:hover {
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

    <!-- 1. LONDON HERO BANNER -->
    <section class="london-hero">
        <div class="hero-badge-light">UNLEASH THE POWER</div>
        <div class="hero-badge-bold">OF SALESFORCE</div>
    </section>

    <!-- 2. NAVY HIGHLIGHT ROW WITH SHAPE DIVIDER -->
    <section class="london-highlight-row">
        <h2>“SALESFORCE WORLD TOUR, LONDON HIGHLIGHTS”</h2>
        <div class="london-marker-svg">
            <svg width="140" height="70" style="fill: #001851"><path d="M 0,0 Q 65,5 70,70 Q 75,5 140,0"></path></svg>
        </div>
    </section>

    <!-- 3. MAIN BODY CONTENT SECTION -->
    <section class="london-content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-11">
                    
                    <!-- Main Body Header -->
                    <h3 class="text-center text-uppercase">Highlights of Salesforce World Tour London 2019:</h3>
                    
                    <!-- First Paragraph (Full Width) -->
                    <div class="london-text text-justify mb-5">
                        <p>So, finally, the Salesforce World Tour in London was conducted successfully on 23rd May 2019. It was proudly sponsored by several of its highly-reputed partners. The key highlights of the event included various product demos, informative sessions by different keynote speakers and many more things. Attended over by 10,000 Salesforce enthusiasts, it was one of the most successful events that took place in recent times. People appreciated spending their action-packed day at several different booths which were present at the venue. It was a busy yet informative day for all the people who made it to ExCel London. No matter whether you are a Salesforce Developer, Admin or even consultant; there was something interesting for everyone at the event.</p>
                    </div>

                    <!-- Alternating Row 1: Image Left, Text Right -->
                    <div class="row align-items-center mb-5">
                        <div class="col-md-5 mb-4 mb-md-0">
                            <img src="https://360smsapp.com/wp-content/uploads/2019/06/keynote-trailblazers.jpg" alt="highlights of Salesforce World Tour London" class="london-img mx-auto rounded shadow-sm">
                        </div>
                        <div class="col-md-7">
                            <div class="london-text text-justify">
                                <p>People had one of the most informative yet interesting sessions with Salesforce World Tour London. The main idea which was addressed by almost all the keynote speakers was that of empowering the human resources in a way that their creativity benefits for the upliftment of an organization. No matter how much-advanced technology we have got, it can never replace humans. People must always be valued on the basis of their opinions as well as creativity level. And in fact, performing par your customers’ expectations is one of the ways to win people’s trust and take them in confidence. So, underestimating your human resources can cost you the growth of your business firm.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Alternating Row 2: Text Left, Image Right -->
                    <div class="row align-items-center mb-5">
                        <div class="col-md-7 order-2 order-md-1">
                            <div class="london-text text-justify">
                                <p>Also, concluding how happening the Salesforce World Tour at London was, it must not be wrong to say that it was one of a kind experience for all those people who witnessed it for the very first time. It was bigger and better than ever. There were huge screens everywhere telecasting the live sessions to the larger set of audience.</p>
                            </div>
                        </div>
                        <div class="col-md-5 order-1 order-md-2 mb-4 mb-md-0">
                            <img src="https://360smsapp.com/wp-content/uploads/2019/06/small-business-networking-event-600-300x200.jpg" alt="Highlights of Salesforce world tour london" class="london-img mx-auto rounded shadow-sm">
                        </div>
                    </div>

                    <!-- Final Section Description -->
                    <div class="london-text text-justify">
                        <p>From product demonstrations to customers’ success stories, each thing was discussed in detail along with the benefits associated with all of them. This filled the entire atmosphere with positivity fostering innovation and creativity. This was actually a brief about one of the grand events arranged by Salesforce, just in case you missed to be present there!</p>
                        <p class="text-muted small mt-4">Image Source: <a href="https://www.salesforce.com" target="_blank" class="text-secondary text-decoration-underline">https://www.salesforce.com</a></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 4. CTA BANNER ROW -->
    <section class="london-cta-section">
        <div class="container">
            <h3>SEE THE 360 SMS APP PLATFORM IN ACTION!</h3>
            <a href="https://calendly.com/360sms/30min" target="_blank" class="london-cta-btn">Book Your Free Trial</a>
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