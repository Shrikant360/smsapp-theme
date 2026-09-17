<?php

/**
 * Template Name: Together For Our Planet
 * Description:   Sustainability initiative page — 360 SMS App
 */
if (! defined('ABSPATH')) exit;
get_header('sms');
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Together For Our Planet | 360 SMS App</title>
    <meta name="description" content="360 SMS App is the #1 rated Salesforce SMS app on AppExchange with 1,200+ reviews. Send SMS, WhatsApp, and more natively inside Salesforce.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    <link rel="stylesheet" href="https://www.jqueryscript.net/demo/country-picker-flags/build/css/countrySelect.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <script src="https://www.jqueryscript.net/demo/country-picker-flags/build/js/countrySelect.js"></script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/new-header-footer.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="three60-hp-root">

<style>

    /* ══════════════════════════════════════════
   TOGETHER FOR OUR PLANET — scoped to #tfop-root
   ══════════════════════════════════════════ */
    #tfop-root * {
        box-sizing: border-box;
    }

    #tfop-root,
    #tfop-root h1,
    #tfop-root h2,
    #tfop-root h3,
    #tfop-root h4,
    #tfop-root h5,
    #tfop-root h6,
    #tfop-root p,
    #tfop-root a,
    #tfop-root span,
    #tfop-root div,
    #tfop-root li {
        font-family: 'Plus Jakarta Sans', sans-serif;
    }

    /* ── HERO ── */
    #tfop-root .tfop-hero {
        background-image: url('https://360smsapp.com/wp-content/uploads/2022/09/Untitled-7.png?id=41944');
        background-size: auto;
        background-position: center center;
        background-repeat: repeat;
        background-color: #1a9bd8;
        padding: 60px 0 0;
        /* Airy top padding for premium feel */
        position: relative;
    }

    /* Logo */
    #tfop-root .tfop-logo {
        /*margin-bottom: 48px;*/
        /* Elegant logo spacing */
    }

    #tfop-root .tfop-logo img {
        height: auto;
        /* Responsive logo height, matches brand weight in screenshot */
        width: auto;
        object-fit: contain;
    }

    /* Heading */
    #tfop-root .tfop-hero-h1 {
        font-size: clamp(32px, 3.5vw, 48px);
        font-weight: 800;
        color: #fff;
        line-height: 1.1;
        letter-spacing: -0.5px;
        margin-bottom: 50px;
        text-transform: uppercase;
    }

    /* Sub */
    #tfop-root .tfop-hero-sub {
        font-size: clamp(16px, 1.5vw, 20px);
        color: #fff;
        line-height: 1.5;
        margin-bottom: 20px;
        font-weight: 400;
    }

    /* Plant line */
    #tfop-root .tfop-plant-line {
        font-size: clamp(13px, 1.2vw, 15px);
        font-weight: 700;
        color: #fff;
        margin-bottom: 0;
    }

    /* Hero content row spacing */
    #tfop-root .tfop-hero-row {
        padding-bottom: 100px;
        /* Spacious bottom room on desktop for card overlap */
    }

    /* Video Column and Sparks */
    #tfop-root .tfop-video-col {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    #tfop-root .tfop-video-container-relative {
        position: relative;
        width: 100%;
        max-width: 560px;
        padding: 10px;
    }

    #tfop-root .tfop-video-wrap {
        width: 100%;
        border-radius: 8px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.22);
        /* Deep premium player shadow */
        border: 4px solid #fff;
    }

    #tfop-root .tfop-video-wrap iframe {
        display: block;
        border: none;
    }

    /* Spark SVGs */
    #tfop-root .tfop-spark {
        position: absolute;
        z-index: 2;
        pointer-events: none;
        width: 44px;
        height: 44px;
    }

    #tfop-root .spark-tr {
        top: -20px;
        right: -20px;
    }

    #tfop-root .spark-bl {
        bottom: -20px;
        left: -20px;
    }

    /* ── BOTTOM SPLIT ── */
    #tfop-root .tfop-bottom {
        background: #fff;
        padding-top: 60px;
        padding-bottom: 50px;
    }

    /* Leaf / climate card wrapper */
    #tfop-root .tfop-leaf-card-wrapper {
        position: relative;
        z-index: 10;
        margin-top: -140px;
        /* Overlap the blue background on desktop */
        filter: drop-shadow(0 16px 20px rgba(0, 0, 0, 0.18)); /* Perfectly calibrated bottom-focused drop shadow */
    }

    /* Leaf / climate card */
    #tfop-root .tfop-leaf-card {
        background-color: transparent;
        background-image: url('https://360smsapp.com/wp-content/uploads/2022/09/background.png?id=41945');
        background-repeat: no-repeat;
        background-position: center center;
        background-size: 100% 100%; /* Stretches the PNG perfectly to align built-in shadow and leaves to the absolute edges */
        aspect-ratio: 536 / 491;
        width: 100%;
        max-width: 380px;
        margin: 0 auto;
        padding: 16% 12%;
        /* Keeps text centered in the white space away from top/bottom leaves */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        border: none;
    }

    #tfop-root .tfop-leaf-card h2 {
        font-size: clamp(16px, 1.8vw, 24px);
        font-weight: 700;
        color: #2e384c;
        line-height: 1.3;
        margin-bottom: 8px;
        letter-spacing: -0.2px;
    }

    #tfop-root .tfop-leaf-card .tfop-hashtag {
        font-size: clamp(11px, 1.2vw, 15px);
        font-weight: 700;
        color: #1a9bd8;
        /* Blue color as in the screenshot */
        margin-bottom: 0;
    }

    /* Body text column */
    #tfop-root .tfop-body-col {
        padding: 20px 0 0 15px;
    }

    #tfop-root .tfop-body-col p {
        font-size: 15px;
        color: #434955;
        line-height: 1.8;
        margin-bottom: 18px;
        font-weight: 400;
    }

    #tfop-root .tfop-body-col p:last-child {
        margin-bottom: 0;
    }

    #tfop-root .tfop-body-col a {
        color: #1a9bd8;
        font-weight: 600;
        text-decoration: none;
        border-bottom: 1px solid transparent;
        transition: all 0.2s ease;
    }

    #tfop-root .tfop-body-col a:hover {
        color: #1580b3;
        border-bottom-color: #1580b3;
    }

    /* ── TOGETHER DARK SECTION ── */
    #tfop-root .tfop-together {
        background-color: #2e384c;
        /* Premium dark navy/charcoal */
        padding: 90px 24px;
        text-align: center;
    }

    #tfop-root .tfop-together h2 {
        font-size: clamp(26px, 3vw, 38px);
        font-weight: 600;
        color: #fff;
        letter-spacing: -0.5px;
        line-height: 1.25;
        margin-bottom: 32px;
    }

    #tfop-root .tfop-together p {
        font-size: 15px;
        color: rgba(255, 255, 255, .85);
        line-height: 1.8;
        max-width: 720px;
        margin: 0 auto 20px;
        font-weight: 400;
    }

    #tfop-root .tfop-together p:last-child {
        margin-bottom: 0;
    }

    /* ── JOIN CTA SECTION ── */
    #tfop-root .tfop-join-sec {
        background-color: #fff;
        padding: 80px 24px;
        text-align: center;
        border-top: 1px solid #f0f0f0;
    }

    #tfop-root .tfop-join-sec .tfop-join-intro {
        font-size: 18px;
        color: #2e384c;
        line-height: 1.7;
        max-width: 720px;
        margin: 0 auto 12px;
        font-weight: 500;
        display: block;
    }

    #tfop-root .tfop-join-sec .tfop-join-link {
        font-size: 18px;
        color: #1a9bd8;
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        margin-bottom: 32px;
        border-bottom: 2px solid transparent;
        transition: all 0.2s ease;
    }

    #tfop-root .tfop-join-sec .tfop-join-link:hover {
        color: #1580b3;
        border-bottom-color: #1580b3;
    }

    #tfop-root .tfop-join-sec .tfop-write-line {
        font-size: 18px;
        color: #2e384c;
        margin: 0 auto;
        max-width: 680px;
        line-height: 1.75;
        display: block;
        font-weight: 500;
    }

    #tfop-root .tfop-join-sec .tfop-write-line a {
        color: #1a9bd8;
        font-weight: 600;
        text-decoration: none;
        border-bottom: 1px solid transparent;
        transition: all 0.2s ease;
    }

    #tfop-root .tfop-join-sec .tfop-write-line a:hover {
        color: #1580b3;
        border-bottom-color: #1580b3;
    }

    /* ── RESPONSIVE ── */
    @media (max-width: 991px) {
        #tfop-root .tfop-hero-h1 {
            font-size: 32px;
        }

        #tfop-root .tfop-hero-sub {
            font-size: 16px;
        }

        #tfop-root .tfop-hero-row {
            padding-bottom: 90px;
            /* Comfortable bottom spacing for tablets */
        }

        #tfop-root .tfop-leaf-card-wrapper {
            margin-top: -80px;
            /* Smooth transition for tablets */
        }

        #tfop-root .tfop-body-col {
            padding: 20px 0 0 0;
        }

        #tfop-root .tfop-together h2 {
            font-size: 28px;
        }

        #tfop-root .tfop-join-sec .tfop-join-intro,
        #tfop-root .tfop-join-sec .tfop-join-link,
        #tfop-root .tfop-join-sec .tfop-write-line {
            font-size: 16px;
        }
    }

    @media (max-width: 767px) {
        #tfop-root .tfop-hero {
            padding: 40px 0 0;
        }

        #tfop-root .tfop-logo {
            margin-bottom: 30px;
        }

        #tfop-root .tfop-logo img {
            height: 56px;
        }

        /* Slightly larger logo for mobile clarity */
        #tfop-root .tfop-hero-h1 {
            font-size: 28px;
            letter-spacing: 0;
        }

        #tfop-root .tfop-hero-sub {
            font-size: 16px;
        }

        #tfop-root .tfop-plant-line {
            font-size: 14px;
        }

        #tfop-root .tfop-hero-row {
            padding-bottom: 50px;
            /* Compact bottom padding for mobile layout */
        }

        #tfop-root .tfop-leaf-card-wrapper {
            margin-top: -40px;
            /* Float card over blue-white boundary on mobile */
            margin-bottom: 30px;
        }

        #tfop-root .tfop-leaf-card {
            max-width: 320px;
        }

        #tfop-root .tfop-body-col {
            padding: 20px 10px;
        }

        #tfop-root .tfop-together {
            padding: 60px 20px;
        }

        #tfop-root .tfop-together h2 {
            font-size: 24px;
        }

        #tfop-root .tfop-together p {
            font-size: 15px;
            max-width: 100%;
        }

        #tfop-root .tfop-join-sec {
            padding: 60px 20px;
        }

        #tfop-root .tfop-join-sec .tfop-join-intro,
        #tfop-root .tfop-join-sec .tfop-join-link,
        #tfop-root .tfop-join-sec .tfop-write-line {
            font-size: 16px;
            max-width: 100%;
        }

        #tfop-root .tfop-spark {
            width: 36px;
            height: 36px;
        }

        #tfop-root .spark-tr {
            top: -12px;
            right: -12px;
        }

        #tfop-root .spark-bl {
            bottom: -12px;
            left: -12px;
        }
    }
</style>

<div id="tfop-root">

    <!-- ══════════════════════════════════════════
         HERO — blue patterned background
    ══════════════════════════════════════════ -->
    <section class="tfop-hero">
        <div class="container-fluid px-4 px-lg-5">

            <!-- Logo -->
            <div class="tfop-logo">
                <img src="https://360smsapp.com/wp-content/uploads/2022/09/1-logo-1.png"
                    alt="360 SMS App" loading="lazy">
            </div>

            <!-- Heading row: text left, video right -->
            <div class="row align-items-center g-5 tfop-hero-row">

                <!-- LEFT: heading + subtext -->
                <div class="col-lg-5 col-md-6">
                    <h1 class="tfop-hero-h1">Hi there,<br>planet hero!</h1>
                    <p class="tfop-hero-sub">
                        Got some seed paper from us?<br>
                        Don't lose that magical thing.
                    </p>
                    <p class="tfop-plant-line">Plant it as shown in the video here.</p>
                </div>

                <!-- RIGHT: YouTube video with decorative sparks -->
                <div class="col-lg-6 col-md-6 offset-lg-1 tfop-video-col">
                    <div class="tfop-video-container-relative">
                        <!-- Top-right spark -->
                        <div class="tfop-spark spark-tr">
                            <svg width="100%" height="100%" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="8" y1="32" x2="4" y2="12" stroke="#f5e642" stroke-width="4" stroke-linecap="round" />
                                <line x1="14" y1="26" x2="28" y2="10" stroke="#f5e642" stroke-width="4" stroke-linecap="round" />
                                <line x1="20" y1="20" x2="38" y2="26" stroke="#f5e642" stroke-width="4" stroke-linecap="round" />
                            </svg>
                        </div>

                        <!-- Video Player Wrap -->
                        <div class="tfop-video-wrap">
                            <div class="ratio ratio-16x9">
                                <iframe
                                    src="https://www.youtube.com/embed/dhv-anmpJ7k"
                                    title="How to Plant Seed Paper"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>

                        <!-- Bottom-left spark -->
                        <div class="tfop-spark spark-bl">
                            <svg width="100%" height="100%" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="32" y1="8" x2="12" y2="4" stroke="#f5e642" stroke-width="4" stroke-linecap="round" />
                                <line x1="26" y1="14" x2="10" y2="28" stroke="#f5e642" stroke-width="4" stroke-linecap="round" />
                                <line x1="20" y1="20" x2="26" y2="38" stroke="#f5e642" stroke-width="4" stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ── BOTTOM SPLIT (white) ── -->
        <div class="tfop-bottom">
            <div class="container-fluid px-4 px-lg-5">
                <div class="row g-4 align-items-start">

                    <!-- Left: climate card with background image -->
                    <div class="col-lg-4 col-md-5">
                        <div class="tfop-leaf-card-wrapper">
                            <div class="tfop-leaf-card">
                                <h2>Let's work on<br>climate action</h2>
                                <p class="tfop-hashtag">#togetherforourplanet</p>
                            </div>
                        </div>
                    </div>

                    <!-- Right: body text -->
                    <div class="col-lg-8 col-md-7">
                        <div class="tfop-body-col">
                            <p>Climate action isn't just for flag waving on World Environment Day. We believe it's more than a UN sustainability goal, and more than buying carbon credits and offsets.</p>
                            <p>It's just as much for you, for us, and the person on the street. It'll take more of us outside of conference halls making climate-friendly decisions to fix our burning climate issues.</p>
                            <p>It's going to take 'planet heroes.'</p>
                            <p>That's why we at 360 SMS are pulling up our sleeves with a renewed commitment to brainstorm on new and innovative ways to reduce our carbon footprint, support green causes, make real impact, and have fun while doing it.</p>
                            <p>Because together we have more of a shot at solving these issues. Let's make it happen. Let's come <a href="https://360smsapp.com/together-for-our-planet/">#togetherforourplanet</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════
         SECTION: TOGETHER WE CAN DO MORE (dark)
    ══════════════════════════════════════════ -->
    <section class="tfop-together">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <h2>Together, we can do more than you think</h2>
                    <p>The fact that you're a human with access to digital resources and mobility gives you so much power. Great things happen when businesses come together and pool their capabilities and resources for the greater planet-good. And our work with nonprofits has only reinforced this belief.</p>
                    <p>It's also why we embraced 'care' as a core value in 2022. That means care for our customers, our employees, and our community – which include the planet.</p>
                    <p>So we're calling on all Salesforce partners, ISVs, nonprofits to join hands.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- ══════════════════════════════════════════
         SECTION: JOIN CTA (white)
    ══════════════════════════════════════════ -->
    <section class="tfop-join-sec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <span class="tfop-join-intro">If you're an organization doing great work in the sustainability space or a firm looking to combine forces for a green initiative,</span>
                    <a class="tfop-join-link" href="mailto:care@360smsapp.com">we'd love to hear from you.</a>
                    <span class="tfop-write-line">Write to us at <a href="mailto:care@360smsapp.com">care@360smsapp.com,</a><br>and someone from our people and culture operations will reach out to you.</span>
                </div>
            </div>
        </div>
    </section>

</div><!-- /#tfop-root -->

    </div><!-- /#three60-hp-root -->

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php include get_stylesheet_directory() . '/old-footer-code.php'; ?>
    <?php get_footer('sms'); ?>
</body>
</html>