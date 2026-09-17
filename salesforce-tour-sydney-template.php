<?php

/**
 * Template Name: Salesforce Tour, Sydney Page
 */

get_header('sms');
?>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<!-- Google Fonts (Montserrat & Open Sans) -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">

<style>
    body {
        /*font-family: 'Open Sans', sans-serif;*/
        background-color: #ffffff !important;
        color: #333333;
        overflow-x: hidden;
    }

    h2{
        /*font-family: 'Montserrat', sans-serif;*/
        text-transform: none;
        font-size: clamp(24px, 4vw, 32px);
    }

    /* ── HERO BANNER ── */
    .sydney-hero {
        background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;
        padding: clamp(50px, 6vw, 80px) 0;
        text-align: center;
    }

    .sydney-hero h1 {
        font-weight: 700;
        color: #000000;
        margin: 0;
        text-transform: capitalize;
        font-size: clamp(28px, 4vw, 45px);
        letter-spacing: -0.01em;
    }

    /* ── CONTENT SECTION ── */
    .sydney-content-section {
        padding: 70px 0;
        background-color: #ffffff;
    }

    .sydney-text {
        font-size: clamp(16px, 1.8vw, 19px);
        line-height: 1.8;
        color: #333333;
        margin-bottom: 40px;
        font-weight: 400;
    }

    .sydney-text a {
        color: #0057B8;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.2s ease;
    }

    .sydney-text a:hover {
        color: #003F8A;
        text-decoration: underline;
    }

    /* ── RESPONSIVE VIDEO WRAPPER ── */
    .video-container {
        max-width: 900px;
        margin: 0 auto;
        box-shadow: 0 15px 45px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
        background-color: #000000;
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
    <section class="sydney-hero">
        <div class="container">
            <h1>Salesforce Tour, Sydney</h1>
        </div>
    </section>

    <!-- 2. DESCRIPTION & VIDEO CONTENT SECTION -->
    <section class="sydney-content-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-9">
                    
                    <!-- Paragraph Text -->
                    <div class="sydney-text">
                        <p>
                            <a href="https://www.facebook.com/hashtag/360smsapp?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARAG4oEZzVMrDCbkc2jyP8_Vx5Sn3Mz1YyjoKou4mfBp6cxNZ7r_cHXwc2L2Fv0pTY5qKpQdXwETkwbrm64NSkO2E320_qGM19RC8s852fE6VtxvX8C2u__6hI-Dhh26vJVGCOGwRupnAid6ZB9DOqyNHjbVgecCvHZqhqiuWJ0m7TtWkHhL9OYFlvG4bKI_bJvyPuZMyMCcaQEd7Qsfit8mxCAiR-bd2kgH2R5Sq5TRTckMX6ZbjlarcnyNwkhQMCeYigYCo9h618ZBBS6zflFCsjjEKGGHPGh3tdkSB7IgR2w450foTXC7y9DHkDp9LikzZ_DiCK5xqoVAcue1CFmuu-Gtv5L2LIQ&amp;__tn__=%2ANK-R" target="_blank">#360SMSApp</a> Team is proud to have the opportunity to host a panel on 
                            <a href="https://www.facebook.com/hashtag/smsmarketing?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARAG4oEZzVMrDCbkc2jyP8_Vx5Sn3Mz1YyjoKou4mfBp6cxNZ7r_cHXwc2L2Fv0pTY5qKpQdXwETkwbrm64NSkO2E320_qGM19RC8s852fE6VtxvX8C2u__6hI-Dhh26vJVGCOGwRupnAid6ZB9DOqyNHjbVgecCvHZqhqiuWJ0m7TtWkHhL9OYFlvG4bKI_bJvyPuZMyMCcaQEd7Qsfit8mxCAiR-bd2kgH2R5Sq5TRTckMX6ZbjlarcnyNwkhQMCeYigYCo9h618ZBBS6zflFCsjjEKGGHPGh3tdkSB7IgR2w450foTXC7y9DHkDp9LikzZ_DiCK5xqoVAcue1CFmuu-Gtv5L2LIQ&amp;__tn__=%2ANK-R" target="_blank">#SMSMarketing</a> at @ 
                            <a href="https://www.facebook.com/hashtag/salesforcetour?source=feed_text&amp;epa=HASHTAG&amp;__xts__%5B0%5D=68.ARAG4oEZzVMrDCbkc2jyP8_Vx5Sn3Mz1YyjoKou4mfBp6cxNZ7r_cHXwc2L2Fv0pTY5qKpQdXwETkwbrm64NSkO2E320_qGM19RC8s852fE6VtxvX8C2u__6hI-Dhh26vJVGCOGwRupnAid6ZB9DOqyNHjbVgecCvHZqhqiuWJ0m7TtWkHhL9OYFlvG4bKI_bJvyPuZMyMCcaQEd7Qsfit8mxCAiR-bd2kgH2R5Sq5TRTckMX6ZbjlarcnyNwkhQMCeYigYCo9h618ZBBS6zflFCsjjEKGGHPGh3tdkSB7IgR2w450foTXC7y9DHkDp9LikzZ_DiCK5xqoVAcue1CFmuu-Gtv5L2LIQ&amp;__tn__=%2ANK-R" target="_blank">#SalesforceTour</a>, Sydney. We thank everyone for joining and knowing us, sharing your views and giving us a chance to serve you. We will meet next in 
                            <strong><a href="https://360smsapp.com/salesforce-world-tour-london-2019/" target="_blank">Salesforce World Tour, London</a></strong> on 23rd May 2019. Hope to meet many more at our next visit.
                        </p>
                    </div>

                    <!-- Centered responsive Video -->
                    <div class="video-container">
                        <div class="ratio ratio-16x9">
                            <iframe src="https://www.youtube.com/embed/Y5WsyGeMJP4" title="360 SMS App at Salesforce World Tour, Sydney" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php get_footer('sms'); ?>