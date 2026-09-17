<?php

/**
 * Template Name: News - 1 percent pledge
 */

get_header('sms');
?>


<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<!-- Google Fonts (Montserrat & Outfit) -->
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,400&family=Outfit:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<style>

.page-template-default h1, h2 {
    text-transform: none !important;
    line-height: 55px;
     padding-left: 0 !important; 
     margin-right: 0 !important; 
}

h2,

    :root {
        --primary-blue: #0057B8;
        --dark-navy: #0B3B75;
        --accent-blue: #499FDD;
        --bg-light: #F4F6F7;
        --bg-quote: #D0D7F4;
        --bg-card: #E8EEF5;
        --text-dark: #333333;
        --text-muted: #666666;
        --white: #FFFFFF;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        background-color: var(--white) !important;
        color: var(--text-dark);
        line-height: 1.6;
        font-size: 16px;
    }

    /* ── TYPOGRAPHY ── */

    h1 {
        font-size: clamp(28px, 4.5vw, 45px) !important;
        line-height: 1.25;
    }

    h2 {
        font-size: clamp(24px, 3.5vw, 32px);
        line-height: 1.3;
    }

    /* ── HERO BANNER HEADER ── */
    .story-hero-header {
        background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;
        padding: clamp(40px, 6vw, 70px) 0;
        text-align: center;
    }

    .story-hero-header h1 {
        color: #000000;
        margin: 0;
        letter-spacing: -0.02em;
    }

    /* ── HERO PLEDGE ANNOUNCEMENT CARD ── */
    .pledge-hero-section {
        background-color: var(--bg-light);
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
        padding: clamp(40px, 6vw, 60px) 0;
    }

    .pledge-banner-img {
        max-width: 800px;
        width: 100%;
        height: auto;
        box-shadow: 0 15px 35px rgba(11, 59, 117, 0.12);
        transition: transform 0.3s ease;
    }

    .pledge-banner-img:hover {
        transform: scale(1.015);
    }

    /* ── ABOUT 1% PLEDGE ── */
    .section-about-pledge {
        padding: clamp(50px, 7vw, 90px) 0;
        background-color: var(--white);
    }

    .section-title-centered {
        text-align: center;
        margin-bottom: clamp(30px, 5vw, 50px);
    }

    .section-title-centered h2 {
        display: inline-block;
        position: relative;
        padding-bottom: 12px;
        margin: 0;
        text-transform: uppercase;
        letter-spacing: 0.02em;
    }

    .section-title-centered h2::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 25%;
        width: 50%;
        height: 3px;
        background-color: var(--primary-blue);
        border-radius: 2px;
    }

    .about-pledge-content {
        max-width: 950px;
        margin: 0 auto;
        font-size: clamp(15px, 1.8vw, 16px);
        line-height: 1.8;
    }

    .about-pledge-content p {
        margin-bottom: 30px;
        text-align: justify;
    }

    .pledge-concept-title {
        color: var(--dark-navy);
        font-weight: 700;
        font-size: clamp(18px, 2.5vw, 22px);
        margin-bottom: 20px;
    }

    .pledge-list {
        list-style: none;
        padding-left: 0;
        margin-bottom: 0;
    }

    .pledge-list-item {
        position: relative;
        padding-left: 30px;
        margin-bottom: 15px;
        color: var(--text-dark);
        font-weight: 500;
    }

    .pledge-list-item::before {
        content: '»';
        position: absolute;
        left: 0;
        top: -2px;
        color: #FF9E1B;
        /* Golden yellow color as in the image! */
        font-size: 22px;
        font-weight: 700;
    }

    /* ── 1% PLEDGE IN ACTION ── */
    .section-pledge-action {
        padding: clamp(50px, 7vw, 90px) 0;
        background-color: var(--bg-light);
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .action-card {
        background-color: var(--bg-card) !important;
        border-radius: 12px;
        padding: clamp(25px, 4vw, 40px);
        height: 100%;
        border: 1px solid rgba(11, 59, 117, 0.08);
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.02);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        text-align: center;
    }

    .action-card:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06);
    }

    .action-card h3 {
        font-size: clamp(18px, 2.5vw, 21px);
        color: var(--dark-navy);
        margin-bottom: 15px;
        font-weight: 700;
    }

    .action-card p {
        font-size: clamp(14px, 1.8vw, 15px);
        color: var(--text-dark);
        line-height: 1.7;
        margin-bottom: 0;
    }

    /* ── COMMENTS FROM CEO ── */
    .section-ceo-comments {
        padding: clamp(50px, 7vw, 90px) 0;
        background-color: var(--white);
    }

    .ceo-quote-container {
        max-width: 950px;
        margin: 0 auto;
        border: 2px solid var(--accent-blue);
        border-radius: 12px;
        display: flex;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 87, 184, 0.05);
    }

    .ceo-quote-icon-tab {
        background-color: var(--accent-blue);
        width: 80px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        color: var(--white);
        font-size: 32px;
    }

    .ceo-quote-content {
        padding: clamp(25px, 4vw, 45px);
        background-color: var(--white);
        flex-grow: 1;
    }

    .ceo-quote-text {
        font-size: clamp(15px, 1.8vw, 16px);
        line-height: 1.7;
        color: var(--text-dark);
        margin-bottom: 25px;
        text-align: justify;
    }

    .ceo-quote-author {
        text-align: center;
        font-size: 15px;
    }

    .ceo-quote-author a {
        color: var(--primary-blue);
        font-weight: 700;
        text-decoration: none;
        display: block;
        font-size: 16px;
        margin-bottom: 2px;
        transition: color 0.2s ease;
    }

    .ceo-quote-author a:hover {
        color: var(--dark-navy);
    }

    .ceo-quote-author strong {
        color: #000000;
        display: block;
    }

    @media (max-width: 576px) {
        .ceo-quote-container {
            flex-direction: column;
        }

        .ceo-quote-icon-tab {
            width: 100%;
            height: 60px;
        }
    }

    /* ── CERTIFICATIONS ── */
    .section-certifications {
        background-color: var(--bg-light);
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        padding: clamp(40px, 6vw, 60px) 0;
    }

    .cert-card {
        background: transparent;
        padding: 10px;
        transition: transform 0.3s ease;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        min-height: 100px;
    }

    .cert-card:hover {
        transform: translateY(-5px);
    }

    .cert-img {
        max-height: 70px;
        width: auto;
        max-width: 100%;
        object-fit: contain;
    }

    /* ── FOOTER & DISCLAIMER ── */
    .section-disclaimer {
        padding: 30px 0;
        background-color: var(--white);
        border-top: 1px solid rgba(0, 0, 0, 0.05);
    }

    .disclaimer-text {
        font-size: 13px;
        color: var(--text-muted);
        text-align: center;
        max-width: 900px;
        margin: 0 auto;
        line-height: 1.6;
        font-style: italic;
    }
</style>

<!-- ── Hero Banner Header ── -->
<header class="story-hero-header">
    <div class="container">
        <h1>360 SMS Joins 1% Pledge <br><span style="color: #499FDD;">Commits To Giving Back</span></h1>
    </div>
</header>

<!-- ── Hero Announcement Banner ── -->
<section class="pledge-hero-section text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <img src="https://360smsapp.com/wp-content/uploads/2021/08/pledge4-768x183.jpg" alt="360 SMS Pledge 1% Announcement Banner" class="pledge-banner-img rounded-3">
            </div>
        </div>
    </div>
</section>

<!-- ── About 1% Pledge Section ── -->
<section class="section-about-pledge">
    <div class="container">
        <div class="section-title-centered">
            <h2>About 1% Pledge</h2>
        </div>
        <div class="about-pledge-content">
            <p>
                Pledge 1% initiative was founded by Atlassian, Rally, Salesforce, and Tides to encourage companies and early-stage start-ups to make philanthropy a core concern. The movement helps businesses incorporate community giving into their business model and become a force for meaningful change.
            </p>
            <h3 class="pledge-concept-title">The idea of a 1% pledge</h3>
            <ul class="pledge-list">
                <li class="pledge-list-item">Reinforces the idea of businesses as platforms for change</li>
                <li class="pledge-list-item">Help companies embed philanthropy and giving into their business fabric</li>
                <li class="pledge-list-item">Brings business closer to making a real impact over time</li>
            </ul>
        </div>
    </div>
</section>

<!-- ── 1% Pledge in Action Section ── -->
<section class="section-pledge-action">
    <div class="container">
        <div class="section-title-centered">
            <h2>1% Pledge in Action</h2>
        </div>
        <div class="row g-4 justify-content-center">
            <!-- Left Card -->
            <div class="col-md-6">
                <div class="action-card">
                    <h3>How the 1% Pledge Works</h3>
                    <p>
                        Participating businesses are encouraged to commit a percentage of equity, resource time, profit, or product licenses to a nonprofit's cause
                    </p>
                </div>
            </div>

            <!-- Right Card -->
            <div class="col-md-6">
                <div class="action-card">
                    <h3>How does 360 SMS give back</h3>
                    <p>
                        360 SMS pledges a percentage of all its product usage licenses to registered non-profits looking to make positive change in the world
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ── Comments From CEO Section ── -->
<section class="section-ceo-comments">
    <div class="container">
        <div class="section-title-centered">
            <h2>Comments From The CEO</h2>
        </div>

        <div class="ceo-quote-container">
            <div class="ceo-quote-icon-tab">
                <i class="bi bi-send-fill"></i>
            </div>
            <div class="ceo-quote-content">
                <p class="ceo-quote-text">
                    “The 1% Pledge is a scalable model forgiving, in the way, we know best – Product. The pledge program aligns strongly with our values and helps us drive economic and social change with tools that we have complete confidence in and know to have tremendous potential for community impact. We’ve been able to ensure that our products are accessible and work for everyone, not just businesses.”
                </p>
                <div class="ceo-quote-author">
                    <a href="https://www.linkedin.com/company/360smsapp/" target="_blank" rel="noopener noreferrer">-Siddharth Sehgal,</a>
                    <strong>CEO and Founder, 360 SMS App</strong>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php get_footer('sms'); ?>