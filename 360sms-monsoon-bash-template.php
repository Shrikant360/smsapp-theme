<?php

/**
 * Template Name: 360 SMS Monsoon-Bash Page
 */

get_header('sms');
?>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


<!-- Slick Slider Dependencies -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<style>
    body {
        /*font-family: 'Montserrat', sans-serif;*/
        background-color: #ffffff !important;
        color: #333333;
    }

    /* ── HERO SECTION STYLE ── */
    .monsoon-hero {
        background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;
        padding: clamp(40px, 6vw, 70px) 0;
        text-align: center;
    }

    .monsoon-hero h1 {
        /*font-family: 'Montserrat', sans-serif;*/
        font-weight: 700;
        color: #000000;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        font-size: clamp(24px, 4vw, 45px);
    }

    /* ── MONSOON CONTENT STYLE ── */
    .monsoon-grey-section {
        background-color: #EDEDED;
        padding: 50px 0;
    }
    .page-template-default h2{
        padding-left: 0px !important;
    margin-right: 0px !important;
        
    }
    h2 {
        
        font-weight: 700;
        font-size: clamp(24px, 4vw, 32px);
    }

    .monsoon-title {
        /*font-family: 'Montserrat', sans-serif;*/
        font-weight: 700;
        font-size: clamp(24px, 4vw, 32px);
        color: #2E3A59;
        margin-bottom: 30px;
        text-align: center;
        letter-spacing: 0.05em;
    }

    .monsoon-text {
        font-size: 16px;
        line-height: 1.7;
        color: #555555;
        margin-bottom: 20px;
    }

    .monsoon-list {
        list-style: none;
        padding-left: 0;
        margin-top: 15px;
    }

    .monsoon-list li {
        position: relative;
        padding-left: 30px;
        margin-bottom: 15px;
        font-size: 16px;
        line-height: 1.6;
        color: #555555;
    }

    .monsoon-list li::before {
        content: "★";
        position: absolute;
        left: 0;
        top: 0;
        color: #2E3A59;
        font-size: 18px;
    }

    .monsoon-list li .sub-item {
        display: block;
        margin-top: 4px;
        color: #666666;
    }

    /* ── CAROUSEL STYLE ── */
    .gallery-section {
        padding: 60px 0 40px 0;
        background-color: #ffffff;
    }

    .slick-slide {
        padding: 0 10px;
        outline: none;
    }

    .gallery-img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        border-radius: 4px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        display: block;
    }

    /* Slick Dots Custom styling */
    .slick-dots {
        margin-top: 30px;
        position: static;
        display: flex;
        justify-content: center;
        list-style: none;
        padding: 0;
    }

    .slick-dots li {
        margin: 0 5px;
    }

    .slick-dots li button {
        font-size: 0;
        line-height: 0;
        display: block;
        width: 10px;
        height: 10px;
        padding: 0;
        cursor: pointer;
        color: transparent;
        border: 0;
        outline: none;
        background: #CCCCCC;
        border-radius: 50%;
        transition: background-color 0.3s;
    }

    .slick-dots li.slick-active button {
        background: #000000;
    }

    /* Custom Arrow */
    .prev-arrow, .next-arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 100;
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.9);
        border: 1px solid #ddd;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        color: #555;
        font-size: 20px;
        transition: all 0.3s;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .prev-arrow:hover, .next-arrow:hover {
        background-color: #000000;
        color: #ffffff;
        border-color: #000000;
    }

    .prev-arrow {
        left: -50px;
    }

    .next-arrow {
        right: -50px;
    }

    @media (max-width: 1200px) {
        .prev-arrow { left: -10px; }
        .next-arrow { right: -10px; }
    }

    @media (max-width: 768px) {
        .prev-arrow, .next-arrow {
            display: none !important;
        }
    }

    /* ── QUOTE BOX ── */
    .quote-box {
        border: 2px solid #499FDD !important;
        border-radius: 4px;
        overflow: hidden;
        margin-top: 30px;
        margin-bottom: 50px;
    }

    .quote-icon-bar {
        background-color: #499FDD;
        width: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .quote-content {
        padding: 30px;
        background-color: #ffffff;
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
    
    <!-- Hero Section -->
    <section class="monsoon-hero">
        <div class="container">
            <h1>360 SMS Monsoon-Bash</h1>
        </div>
    </section>
    
    <!-- Hero Image Section -->
    <section class="hero-image-section text-center">
        <img src="https://360smsapp.com/wp-content/uploads/2021/11/lindin.jpg" alt="360 SMS Monsoon Bash Team Banner" class="img-fluid w-100">
    </section>
    
    <!-- 1. Text Content Section (Light Grey Background) -->
    <section class="monsoon-grey-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-9">
                    <h2 class="monsoon-title">360 SMS – MONSOON BASH</h2>
                    
                    <p class="monsoon-text">Aloha to our texting and Salesforce family!</p>
                    
                    <p class="monsoon-text">After spending nearly a year and a half apart our teams need to blow off some steam. So we all got together to let our hair down and enjoy the Monsoon. The monsoon bash also celebrated our 9th year as a Salesforce ISV company.</p>
                    
                    <p class="monsoon-text">Later in the evening, at the valedictory ceremony, we at 360 SMS, decided to celebrate our top performances together and we had a blast of a time.</p>
                    
                    <p class="monsoon-text">So we thought we’d leave you with a few snapshots from the event:<br>Among other things we:</p>
                    
                    <ul class="monsoon-list">
                        <li>Lit the ceremonial lamp for good fortune</li>
                        <li>Shook a leg on the dance floor, and then some</li>
                        <li>Sang musical solos and medleys for karaoke</li>
                        <li>Performed guitar singles</li>
                        <li>Participated in truth and dares<span class="sub-item">Shared stories and anecdotes over drinks and delicacies</span></li>
                        <li>Cut a cake to mark our 9th anniversary</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Responsive Slick Slider Section (White Background) -->
    <section class="gallery-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-11 position-relative">
                    
                    <!-- Slick Slider Custom Arrows -->
                    <div class="prev-arrow"><i class="bi bi-chevron-left"></i></div>
                    <div class="next-arrow"><i class="bi bi-chevron-right"></i></div>
                    
                    <div class="monsoon-slider">
                        <div>
                            <img src="https://360smsapp.com/wp-content/uploads/2021/09/DSC_3863-300x199-Copy.jpg" alt="360 Sms App Monsoon Bash Parties" class="gallery-img">
                        </div>
                        <div>
                            <img src="https://360smsapp.com/wp-content/uploads/2021/09/11-1.jpg" alt="360 Sms App 9Years of Excellence 360 Degree Cloud" class="gallery-img">
                        </div>
                        <div>
                            <img src="https://360smsapp.com/wp-content/uploads/2021/09/1-3.jpg" alt="360 Sms App Monsoon Bash Anniversaries" class="gallery-img">
                        </div>
                        <div>
                            <img src="https://360smsapp.com/wp-content/uploads/2021/09/DSC_4317-300x199-1.jpg" alt="360 Sms App Monsoon Bash of 9 years celebrations" class="gallery-img">
                        </div>
                        <div>
                            <img src="https://360smsapp.com/wp-content/uploads/2021/09/DSC_4283-300x199-1.jpg" alt="360 Sms App Monsoon Bash DSC parties" class="gallery-img">
                        </div>
                        <div>
                            <img src="https://360smsapp.com/wp-content/uploads/2021/09/21.jpg" alt="360 Sms App Monsoon Bash Ocassions" class="gallery-img">
                        </div>
                        <div>
                            <img src="https://360smsapp.com/wp-content/uploads/2021/09/DSC_3891.jpg" alt="360 Sms App Monsoon Bash" class="gallery-img">
                        </div>
                        <div>
                            <img src="https://360smsapp.com/wp-content/uploads/2021/09/DSC_3884-scaled-1.jpg" alt="360 Sms App celebrated our 9th year as a Salesforce ISV company." class="gallery-img">
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Quote Section -->
    <section class="quote-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-10">
                    <div class="quote-box d-flex align-items-stretch">
                        <div class="quote-icon-bar text-white">
                            <i class="bi bi-send-fill fs-3"></i>
                        </div>
                        <div class="quote-content flex-grow-1 text-center">
                            <p class="fs-5 text-dark mb-3">“We wish all our teams many more occasions and mixers ahead and<br>We can’t wait for the next monsoon when we’ll finally turn ten.”</p>
                            <p class="text-secondary mb-1">Love and peace,</p>
                            <p class="mb-0 fw-bold" style="color: #003300; font-size: 18px;">-Siddharth Sehgal,</p>
                            <p class="mb-0 fw-bold" style="color: #003300; font-size: 18px;">CEO @360 Degree Cloud</p>
                        </div>
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

<script>
    jQuery(document).ready(function($) {
        $('.monsoon-slider').slick({
            dots: true,
            prevArrow: $('.prev-arrow'),
            nextArrow: $('.next-arrow'),
            infinite: true,
            speed: 300,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false
                    }
                }
            ]
        });
    });
</script>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<?php get_footer('sms'); ?>