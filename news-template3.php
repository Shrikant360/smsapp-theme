<?php
/**
 * Template Name: Newsn - Summit Partner
 * Description:   Salesforce Summit Partner announcement page — 360 SMS App
 */

get_header('sms');
?>

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

<!-- Bootstrap 5 CSS (Fallback in case header does not include it) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

<style>

.page-template-default h1, h2 {
    text-transform: none !important;
    line-height: 55px;
     padding-left: 0 !important; 
     margin-right: 0 !important; 
}

    :root {
        --primary-blue: #0057B8;
        --dark-navy: #2e384c;
        --accent-blue: #1a9bd8;
        --text-dark: #434955;
        --bg-light: #F8FAFC;
        --white: #FFFFFF;
    }

    #summit-partner-root {
        font-family: 'Plus Jakarta Sans', sans-serif;
        background-color: var(--white);
        color: var(--text-dark);
        line-height: 1.8;
    }

    #summit-partner-root .banner-container {
        max-width: 1170px;
        margin: 0 auto;
    }

    #summit-partner-root .banner-img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    #summit-partner-root .banner-img:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
    }

    #summit-partner-root .section-title {
        font-family: 'Outfit', sans-serif;
        font-weight: 700;
        font-size: clamp(20px, 2.2vw, 24px);
        color: var(--dark-navy);
        text-transform: uppercase;
        letter-spacing: 0.02em;
        margin-top: 45px;
        margin-bottom: 20px;
        line-height: 1.3;
        position: relative;
    }

    #summit-partner-root p {
        font-size: 16px;
        color: var(--text-dark);
        margin-bottom: 22px;
        text-align: justify;
    }

    #summit-partner-root strong {
        font-weight: 700;
        color: #1a1a1a;
    }

    /* ── CEO MESSAGE BOX ── */
    #summit-partner-root .ceo-message-box {
        border: 1.5px solid var(--accent-blue);
        border-radius: 4px;
        overflow: hidden;
        background: var(--white);
        box-shadow: 0 10px 30px rgba(26, 155, 216, 0.05);
        margin-top: 60px;
        margin-bottom: 60px;
    }

    #summit-partner-root .ceo-sidebar {
        background-color: var(--accent-blue);
        width: 90px;
        min-height: 90px;
        flex-shrink: 0;
    }

    #summit-partner-root .ceo-sidebar i {
        transform: rotate(0deg);
        font-size: 2.2rem;
    }

    @media (max-width: 767.98px) {
        #summit-partner-root .ceo-message-box {
            flex-direction: column;
        }
        #summit-partner-root .ceo-sidebar {
            width: 100%;
            padding: 30px 20px;
            min-height: auto;
        }
    }

    #summit-partner-root .ceo-body {
        padding: 40px 50px;
    }

    @media (max-width: 575.98px) {
        #summit-partner-root .ceo-body {
            padding: 30px 20px;
        }
    }

    #summit-partner-root .ceo-heading {
        font-family: 'Outfit', sans-serif;
        font-size: 20px;
        font-weight: 700;
        color: var(--dark-navy);
        text-transform: uppercase;
        letter-spacing: 0.05em;
        margin-bottom: 25px;
    }

    #summit-partner-root .ceo-quote {
        font-size: 16px;
        color: var(--text-dark);
        line-height: 1.8;
        margin-bottom: 25px;
    }

    #summit-partner-root .ceo-quote p {
        text-align: center;
        margin-bottom: 18px;
    }

    #summit-partner-root .ceo-quote p:last-child {
        margin-bottom: 0;
    }

    #summit-partner-root .ceo-author {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 25px;
    }

    #summit-partner-root .ceo-name {
        color: #003366;
        font-weight: 500;
        font-size: 16px;
        margin-bottom: 2px;
    }

    #summit-partner-root .ceo-title {
        color: #000000;
        font-weight: 700;
        font-size: 16px;
    }

    /* ── HERO BANNER HEADER ── */
    #summit-partner-root .story-hero-header {
        background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;
        padding: clamp(50px, 7vw, 85px) 0;
        text-align: center;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    #summit-partner-root .story-hero-header h1 {
        font-family: 'Outfit', sans-serif;
        font-weight: 800;
        font-size: clamp(28px, 4.2vw, 48px);
        color: #000000;
        margin: 0;
        letter-spacing: -0.02em;
        line-height: 1.25;
    }
</style>

<div id="summit-partner-root">
    <!-- ── Hero Banner Header ── -->
    <header class="story-hero-header">
        <div class="container">
            <h1> Summit (Platinum) Partner</h1>
        </div>
    </header>

    <!-- Banner Section -->
    <div class="container mt-5 mb-5">
        <div class="banner-container text-center">
            <img src="https://360smsapp.com/wp-content/uploads/2021/12/Sms-Banner-8-12.jpg" alt="Salesforce Summit Partner Announcement" class="img-fluid banner-img" loading="lazy">
        </div>
    </div>

    <!-- Main Content -->
    <main class="container mb-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-xl-12">

                <!-- Section: How did we get here? -->
                <section class="mb-5">
                    <h4 class="section-title">How did we get here?</h4>
                    <p>Our zealous emphasis on customer success and depth of Salesforce knowledge have allowed us to scale real-world results and flaunt this <strong>Salesforce Summit partner logo</strong> on our website. It’s also helped us enrich our talent pool to a team of 500 and meet required partner scores to qualify as a Salesforce Summit Partner. It’s taken us nearly a decade and 260+ certifications across all Salesforce clouds to make it here.</p>
                    <p>Besides this, we’ve consistently earned high CSAT scores for customers by getting things by listening to their needs intently and getting things right the first time.</p>
                </section>

                <!-- Section: The Salesforce partner program: A Primer -->
                <section class="mb-5">
                    <h4 class="section-title">The Salesforce partner program: A Primer</h4>
                    <p>Salesforce depends on its partner ecosystem for product and platform development on top of its cloud platform offerings.</p>
                    <p>Salesforce-certified partners customize these platforms and implement solutions specific to the business objectives of platform users.</p>
                    <p>This increases the overall adoption of Salesforce across industries as a business platform and drives revenue through license contracts and subscriptions.</p>
                </section>

                <!-- Section: The ‘Partner Value Score’ -->
                <section class="mb-5">
                    <h4 class="section-title">The ‘Partner Value Score’</h4>
                    <p>The Partner Value system instituted by Salesforce is a strict evaluation mechanism to assign value to partners in the Salesforce ecosystem. The system uses a ‘Partner Value Score,’ and algorithmic point system to do this fairly to ensure adequate capabilities of the partners awarded scores. The point system accounts for hard metrics and parameters such as certifications, projects, innovation, and CSAT.</p>
                    <p>Based on the scores, partners in the Salesforce ecosystem are awarded one of four tiers – Base (up to 249 points), Crest (over 250 points), Ridge (over 500 points), Summit (over 750 points).</p>
                    <p>Partners need to demonstrate high CSAT, knowledge, and growth capabilities through which separates and rewards partners that work in service of quality and consistently strive to get things right the first time.</p>
                </section>

                <!-- Section: What does a Summit Partnership mean for our customers and partners? -->
                <section class="mb-5">
                    <h4 class="section-title">What does a Summit Partnership mean for our customers and partners?</h4>
                    <p>The Partner Value Score sets the bar for a Summit Partnership really high and only 7-8% of Salesforce partners achieve this distinction.</p>
                    <p>For customers, users, and partners of 360 SMS, this ensures an authentic track record built on real results which only comes through a vertically deep know-how of Salesforce technology.</p>
                    <p>As Salesforce Summit Partners, we’re expected to set formal standards for quality through our choices of the right roadmaps, technology, solution design, and architecture, delivery timelines, and development best practices.</p>
                </section>

                <!-- Section: A Word from the CEO Box -->
                <div class="ceo-message-box d-flex align-items-stretch">
                    <div class="ceo-sidebar d-flex align-items-center justify-content-center">
                        <i class="bi bi-send-fill text-white"></i>
                    </div>
                    <div class="ceo-body flex-grow-1 text-center">
                        <h4 class="ceo-heading">A Word from the CEO</h4>
                        <div class="ceo-quote">
                            <p>“It’s only through 9 years of continuous devotion that led to this.</p>
                            <p>Of course, nurturing and building Salesforce knowledge has laid out the steps for us to scale this peak. This Summit Partnership has been a payoff of our careful commitment to software architecture and design, strategic guidance from our partner, and our staffs’ commitment to client relationships and growth.</p>
                            <p>As we set our gaze on the future, we thank all our teams, customers, partners, and Salesforce for sticking by us all these years.”</p>
                        </div>
                        <div class="ceo-author">
                            <span class="ceo-name">-Siddharth Sehgal,</span>
                            <span class="ceo-title">CEO and Founder, 360 SMS</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
</div>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php get_footer('sms'); ?>