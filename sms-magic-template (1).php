<?php

/**
 * Template Name: 360 SMS VS SMS Magic
 * Description: 360 SMS App landing page — Bootstrap layout matching design spec.
 *              All CSS, HTML, and JS in this single file.
 *
 * @package SMS360
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Deploy: copy this file to your-theme/page-templates/
 *         copy assets/ to your-theme/landing-page/assets/
 */
$lp_footer_bg = '';

if (!function_exists('sms_lp_asset')) {
    function sms_lp_asset($filename)
    {
        $base = trailingslashit(get_stylesheet_directory_uri()) . 'landing-page/assets/';
        return $base . implode('/', array_map('rawurlencode', explode('/', $filename)));
    }
}

$lp_footer_bg = sms_lp_asset('footer bg img.webp');

get_header('paid');

?>
<!-- ✅ Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">


<style>
    /* Zoho LP Hero Section */
    #ccb-banner,
    #ccb-float-btn, #ccb-us-banner {
        display: none !important;
    }

    .whatsapp-content {
        display: none !important;
    }

    .top-header-left {
        font-size: 16px;
    }

    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    span,
    a,
    li,
    button,
    input,
    select,
    textarea,
    td,
    th {
        font-family: 'Plus Jakarta Sans', sans-serif !important;
    }

    body {
        background: #fff !important;
        font-size: inherit;
    }



    /* Fixed landing header — must sit at document root */
    .lp-sticky-header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        width: 100%;
        z-index: 99999;
        background: #ffffff;
        border-bottom: 1px solid #e8ecf0;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.05);
        transform: translateY(-100%);
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .lp-sticky-header.header-visible {
        transform: translateY(0);
    }

    .lp-sticky-header .lp-header-inner {
        display: flex !important;
        align-items: center;
        justify-content: space-between !important;
        flex-direction: row !important;
        flex-wrap: nowrap;
        gap: 24px;
        width: 100%;
        max-width: 1320px;
        min-height: 72px;
        margin: 0 auto;
        padding: 14px 24px;
        box-sizing: border-box;
    }

    .lp-sticky-header .lp-logo {
        display: inline-flex;
        align-items: center;
        flex: 0 0 auto;
        margin-right: auto;
        line-height: 0;
        text-decoration: none;
    }

    .lp-sticky-header .lp-header-cta {
        display: inline-flex;
        flex: 0 0 auto;
        margin-left: auto;
        text-decoration: none;
    }

    .lp-sticky-header .lp-logo img {
        height: 44px !important;
        width: auto;
        max-width: 180px;
        object-fit: contain;
    }

    .lp-sticky-header .btn-lp-coral {
        background-color: #CB634B;
        border: none;
        color: #ffffff;
        font-weight: 700;
        font-size: 15px;
        padding: 7px 28px;
        border-radius: 6px;
        transition: background-color 0.2s ease;
        text-decoration: none;
        display: inline-block;
        text-transform: none;
        letter-spacing: normal;
        box-shadow: 0 4px 14px rgba(217, 113, 84, 0.32);
        white-space: nowrap;
    }

    .lp-sticky-header .btn-lp-coral:hover,
    .lp-sticky-header .btn-lp-coral:focus {
        background-color: #b0543e;
        color: #fff !important;
    }

    body.admin-bar .lp-sticky-header {
        top: 32px;
    }

    @media screen and (max-width: 782px) {
        body.admin-bar .lp-sticky-header {
            top: 46px;
        }
    }

    @media (max-width: 575.98px) {
        .lp-sticky-header .lp-header-inner {
            padding: 12px 16px;
            min-height: 60px;
        }

        .lp-sticky-header .lp-logo img {
            height: 36px;
            max-width: 140px;
        }

        .lp-sticky-header .btn-lp-coral {
            font-size: 14px;
            padding: 10px 18px;
        }
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        text-transform: none;
    }

    h2 {
        font-size: clamp(20px, 3vw, 28px) !important;
    }

    h3 {
        font-size: 1.8rem;
    }



    a {
        text-decoration: none;
    }

    h1 {
        font-size: 3rem;
    }

    p {
        font-size: 1.5rem !important;
    }

    .chatbot-hero {
        background: linear-gradient(180deg, rgba(255, 255, 255, .37) 25%, rgba(143, 209, 255, .72) 100%);
        min-height: 80vh;
        position: relative;
        z-index: 1;
        /*padding-top: 50px;*/
        padding-bottom: 180px;
    }

    .chatbot-hero h1 {
        font-size: clamp(2rem, 4vw, 3.34rem);
        line-height: 1.25;
        color: #0c2b5e;
    }

    .chatbot-hero p {
        font-size: 1.8rem !important;
        line-height: 28px;
        color: #334155;
    }

    .chatbot-hero .btn {
        border-radius: 6px;
        transition: all 0.3s ease;
        background: #fff;
    }

    .chatbot-hero .btn:hover {
        transform: translateY(-2px);
        color: #000;
    }

    /* Form Card in Hero — match campaignpage .lp-form-card shell */
    .hero-form-card {
        border: none !important;
        box-shadow: none !important;
        background: transparent !important;
        padding: 0 !important;
    }

    .text-dark-blue {
        color: #0c2b5e !important;
    }

    .text-secondary-dark {
        color: #475569 !important;
    }

    /* Hero bullet points */
    .hero-features li i {
        color: #0c77b7 !important;
    }

    .hero-features li span {
        font-size: 1.6rem;
    }

    @media (max-width: 991px) {
        .chatbot-hero {
            padding-bottom: 160px;
        }

        .chatbot-hero h1 {
            font-size: 3.2rem;
        }
    }

    @media (max-width: 767px) {
        .chatbot-hero {
            margin-top: 40px !important;
            padding-top: 60px;
            padding-bottom: 80px;
        }

        .chatbot-hero h1 {
            font-size: 2.5rem;
        }

        .chatbot-hero p {
            font-size: 1.5rem !important;
            line-height: 24px;
        }

        .hero-form-card {
            padding: 25px !important;
        }
</style>

<!-- ═══ STICKY HEADER ═══ -->
<header class="lp-sticky-header">
    <div class="lp-header-inner">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="lp-logo">
            <img src="/wp-content/uploads/2026/08/360_sms_-app_logo.png" alt="360 SMS App Logo" width="180" height="44" loading="eager">
        </a>
        <a href="#zoho_form" class="btn btn-lp-coral lp-header-cta">Book a Demo</a>
    </div>
</header>

<!-- Hero Section -->
<section class="chatbot-hero mt-5 d-flex align-items-center" id="zoho_form">
    <div class="container">
        <!-- Top Row: Logo -->
        <div class="row mb-5">
            <div class="col-lg-5 mx-lg-5 text-start"
                <a href="#" class="logo-link">
                <img src="/wp-content/uploads/2026/08/360_sms_-app_logo.png" alt="360 SMS App Logo" class="img-fluid" style="max-height: 55px; width: auto;">
                </a>
            </div>
        </div>

        <!-- Main Row: Content + Form -->
        <div class="row align-items-center justify-content-between g-3">
            <!-- Left Side Content -->
            <div class="col-lg-5 mx-lg-5 text-start mb-5 mb-lg-0">
                <span class="badge bg-white text-primary border border-primary-subtle px-3 py-2 rounded-pill fw-semibold mb-4 tracking-wider fs-4 d-inline-block">
                    #1 Native Salesforce Messaging Platform </span>
                <h1 class="fw-bold mb-5 text-dark-blue">360 SMS vs. SMS Magic: <br> Which Is the Better Choice?</h1>
                <p class="lead mb-5 text-secondary-dark" style="font-size: 1.6rem !important; line-height: 1.5;">
                    Compare features, AI, automation, channels, and pricing to choose the right Salesforce messaging solution.<br>
                    <strong>Choice is YOURS</strong>
                </p>
            </div>

            <!-- Right Side Form Card -->
            <div class="col-lg-4">
                <div class="card hero-form-card shadow-lg p-4 p-md-5">
                    <h2 class="fw-bold mb-4 text-center text-dark-blue">TRY before you BUY!</h2>
                    <!-- ✅ Render Form Shortcode -->
                    <?php echo do_shortcode('[contact_pageshortcode]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    /* Expertise Section */
    .chatbot-expertise {
        /* background: linear-gradient(to bottom, #002060 0%, #ffffff 100%); */
        position: relative;
        margin-top: -180px;
        z-index: 3;
        /* overlaps slightly with hero */
    }

    .expertise-box {
        /* max-width: 900px; */
        border-radius: 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
    }

    .expertise-box p {
        font-weight: 500;
        font-size: 1.5rem;
        padding: 8px 8px;
    }

    .expertise-box span.text-primary {
        color: #0056b3 !important;
    }

    @media (max-width: 767px) {
        .chatbot-expertise {
            margin-top: 0px;
        }
    }
</style>

<!-- ✅ Expertise Section -->
<section class="chatbot-expertise py-5 position-relative">
    <div class="container">


        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="expertise-box bg-white shadow rounded-4 p-4 p-md-5 text-center mx-auto">
                    <h3 class="fw-bold text-dark-blue mb-3" style="font-size: 2.4rem;">Does SMS Magic Have Everything You Need?</h3>
                    <p class="mb-0 text-secondary-dark mx-auto" style="font-size: 1.4rem !important; max-width: 800px; line-height: 1.6;">
                        SMS Magic is a capable Salesforce messaging solution for basic SMS conversations. But if you need AI, chatbots, more channels, or broader Salesforce Cloud coverage, you may outgrow it sooner than you expect.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ✅ Section 3: Trusted by 3000+ Business Worldwide (Client Logos) -->
<?php
$lp_client_logos = [
    ['/wp-content/uploads/2026/08/Asset-16ldpi-1.png', 'Morgan'],
    ['/wp-content/uploads/2026/08/Asset-21ldpi.png', 'Abbott'],
    ['/wp-content/uploads/2026/08/Asset-3ldpi-1.png', 'Unicef'],
    ['/wp-content/uploads/2026/08/Asset-10ldpi.png', 'Pagegroup'],
    ['/wp-content/uploads/2026/08/Asset-13ldpi.png', 'Lennar'],
    ['/wp-content/uploads/2026/08/American-red-Cross.png', 'American Red Cross'],
    // ['/wp-content/uploads/2026/08/Asset-9ldpi.png', 'Fairway'],
    // ['/wp-content/uploads/2026/08/Asset-5ldpi-1.png', 'ecornell'],

    // ['/wp-content/uploads/2026/08/Asset-4ldpi-1.png', 'MSD'],

];
?>
<section class="client-logos-section py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-5 tracking-wider text-dark-blue">Trusted by 3,000+ Businesses Worldwide</h2>
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-4 justify-content-center">
            <?php foreach ($lp_client_logos as $logo): ?>
                <div class="col d-flex">
                    <div class="logo-card bg-white border rounded-3 p-3 shadow-sm d-flex align-items-center justify-content-center w-100" style="height: 90px; min-height: 90px;">
                        <img src="<?php echo esc_url($logo[0]); ?>" alt="<?php echo esc_attr($logo[1]); ?>" class="img-fluid" style=" max-width: auto; object-fit: contain;">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Style for Client Logos -->
<style>
    .client-logos-section {
        background-color: #fff;
        position: relative;
        overflow: hidden;
        border-radius: 60px 60px 0px 0px;
        margin-top: -115px;
        z-index: 2;
        padding-top: 140px !important;
        padding-bottom: 60px !important;
    }

    .client-logos-section h3 {
        letter-spacing: 1px;
        font-size: 1.6rem !important;
    }

    .logo-card {
        transition: all 0.3s ease;
    }

    .logo-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.05) !important;
    }
</style>

<!-- ✅ Section 4: What Sets 360 SMS Apart from SMS Magic (Comparison Table) -->
<section class="comparison-section py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-4 mb-md-5 text-dark-blue">What Sets 360 SMS Apart from SMS Magic</h2>

        <div class="comparison-table-wrapper shadow-sm border rounded-4 bg-white">
            <table class="comparison-table">
                <thead>
                    <tr>
                        <th class="comp-label" scope="col">App Name</th>
                        <th class="comp-360" scope="col">
                            <img src="/wp-content/uploads/2026/08/360_sms_-app_logo.png" alt="360 SMS App" width="120" height="36">
                        </th>
                        <th class="comp-magic" scope="col">
                            <img src="/wp-content/uploads/2026/08/SMS-Magic-Logo.png" alt="SMS Magic" width="110" height="36">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="comp-label" scope="row">AppExchange Reviews</th>
                        <td class="comp-360"><strong>1200+</strong></td>
                        <td class="comp-magic">1100+</td>
                    </tr>
                    <tr>
                        <th class="comp-label" scope="row">Channels</th>
                        <td class="comp-360">SMS, MMS, WhatsApp, RVM, and 11 more channels</td>
                        <td class="comp-magic">6 Channels</td>
                    </tr>
                    <tr>
                        <th class="comp-label" scope="row">AI</th>
                        <td class="comp-360">Comprehensive</td>
                        <td class="comp-magic">Limited</td>
                    </tr>
                    <tr>
                        <th class="comp-label" scope="row">Salesforce Cloud Supported</th>
                        <td class="comp-360">All Saleasforce Cloud supported</td>
                        <td class="comp-magic">Sales, service, marketing, experience</td>
                    </tr>
                    <tr>
                        <th class="comp-label" scope="row">Out of the Box Chatbot</th>
                        <td class="comp-360"><i class="bi bi-check-circle-fill" aria-hidden="true"></i> Yes</td>
                        <td class="comp-magic">No</td>
                    </tr>
                    <tr>
                        <th class="comp-label" scope="row">Multi-Channel Drip Campaign</th>
                        <td class="comp-360"><i class="bi bi-check-circle-fill" aria-hidden="true"></i> Yes</td>
                        <td class="comp-magic">No</td>
                    </tr>
                    <tr>
                        <th class="comp-label" scope="row">Unified Messaging Console</th>
                        <td class="comp-360"><i class="bi bi-check-circle-fill" aria-hidden="true"></i> Yes</td>
                        <td class="comp-magic">No</td>
                    </tr>
                    <tr>
                        <th class="comp-label" scope="row">Support</th>
                        <td class="comp-360 free-badge">Free</td>
                        <td class="comp-magic">Paid</td>
                    </tr>
                </tbody>
            </table>
            <p class="p-3" style="font-size: 10px !important;">*The names and logos for 360 SMS App are trademarks of 360Degree Corp. All other trademark, brand name, or product name belong to their respective holders. Comparison information as of July, 2026.</p>
        </div>
    </div>
</section>

<!-- Styles for Comparison Table -->
<style>
    .comparison-section {
        background-color: #f8fbff;
    }

    .comparison-section h2 {
        font-size: clamp(22px, 3vw, 32px) !important;
        padding: 0 8px;
    }

    .comparison-table-wrapper {
        max-width: 920px;
        margin: 0 auto;
        width: 100%;
        overflow: hidden;
        box-sizing: border-box;
        padding: 8px;
    }

    .comparison-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        table-layout: fixed;
        margin: 0;
    }

    .comparison-table th,
    .comparison-table td {
        vertical-align: middle;
        padding: 14px 12px;
        font-size: clamp(13px, 1.6vw, 18px);
        line-height: 1.35;
        word-break: break-word;
        border-bottom: 1px solid #e2e8f0;
    }

    .comparison-table thead th {
        border-bottom: 2px solid #D4E8FF;
        padding-top: 18px;
        padding-bottom: 18px;
    }

    .comparison-table tbody tr:last-child th,
    .comparison-table tbody tr:last-child td {
        border-bottom: none;
    }

    .comparison-table .comp-label {
        width: 34%;
        text-align: left;
        font-weight: 600;
        color: #334155;
        background: #fff;
    }

    .comparison-table thead .comp-label {
        color: #0d6efd;
        font-size: clamp(15px, 2vw, 22px);
        font-weight: 700;
    }

    .comparison-table .comp-360 {
        width: 33%;
        text-align: center;
        color: #0d6efd;
        background: #f0f7ff;
        font-weight: 500;
        border-left: 2px solid #0057B8;
        border-right: 2px solid #0057B8;
    }

    .comparison-table thead .comp-360 {
        border-top: 2px solid #0057B8;
        border-top-left-radius: 14px;
        border-top-right-radius: 14px;
    }

    .comparison-table tbody tr:last-child .comp-360 {
        border-bottom: 2px solid #0057B8;
        border-bottom-left-radius: 14px;
        border-bottom-right-radius: 14px;
    }

    .comparison-table .comp-360 img,
    .comparison-table .comp-magic img {
        max-width: 100%;
        height: auto;
        max-height: 42px;
        object-fit: contain;
    }

    .comparison-table .comp-360 .bi {
        color: #0d6efd;
        margin-right: 4px;
    }

    .comparison-table .comp-magic {
        width: 33%;
        text-align: center;
        color: #64748b;
        background: #fff;
        font-weight: 500;
    }

    .comparison-table .free-badge {
        background: #0057B8 !important;
        color: #fff !important;
        font-weight: 700;
        font-size: clamp(15px, 2vw, 22px);
    }

    @media (max-width: 767.98px) {
        .comparison-section {
            padding-top: 1.5rem !important;
            padding-bottom: 1.5rem !important;
        }

        .comparison-section .container {
            padding-left: 12px;
            padding-right: 12px;
        }

        .comparison-section h2 {
            font-size: 1.25rem !important;
            margin-bottom: 1rem !important;
        }

        .comparison-table-wrapper {
            padding: 6px;
            border-radius: 12px !important;
        }

        .comparison-table th,
        .comparison-table td {
            padding: 10px 6px;
            font-size: 11px;
            line-height: 1.3;
        }

        .comparison-table thead th {
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .comparison-table thead .comp-label {
            font-size: 12px;
        }

        .comparison-table .comp-label {
            width: 32%;
            padding-left: 8px;
            padding-right: 4px;
        }

        .comparison-table .comp-360,
        .comparison-table .comp-magic {
            width: 34%;
        }

        .comparison-table .comp-360 {
            border-left-width: 1.5px;
            border-right-width: 1.5px;
        }

        .comparison-table thead .comp-360 {
            border-top-width: 1.5px;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }

        .comparison-table tbody tr:last-child .comp-360 {
            border-bottom-width: 1.5px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .comparison-table .comp-360 img,
        .comparison-table .comp-magic img {
            max-height: 24px;
        }

        .comparison-table .free-badge {
            font-size: 13px;
            padding-top: 12px;
            padding-bottom: 12px;
        }

        .comparison-table .comp-360 .bi {
            font-size: 11px;
            margin-right: 2px;
        }
    }

    @media (max-width: 400px) {

        .comparison-table th,
        .comparison-table td {
            font-size: 10px;
            padding: 8px 4px;
        }

        .comparison-table .comp-360 img,
        .comparison-table .comp-magic img {
            max-height: 20px;
        }
    }
</style>

<!-- ✅ Section 5: Why 360 SMS for your business? -->
<section class="why-360-section">
    <div class="container">
        <div class="row align-items-center justify-content-between">

            <!-- Left: Text and Features -->
            <div class="col-lg-6 mb-5 mb-lg-0 pe-lg-5">
                <h2 class="mb-5 text-white">Why 360 SMS for<br>your business?</h2>

                <div class="row">
                    <div class="col-sm-6">
                        <ul class="list-unstyled why-360-list mb-0">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Never miss a follow-up again.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Compliance changes never slow you down.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Never lose a lead to slow responses.</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul class="list-unstyled why-360-list mb-0">
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Stop juggling disconnected communication tools.</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Data security can never be a concern for you</span>
                            </li>
                            <li>
                                <i class="bi bi-check-circle-fill"></i>
                                <span>Language is never a barrier again.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Right: Stat Cards -->
            <div class="col-lg-5">
                <div class="row g-3 g-md-4">
                    <!-- Card 1 -->
                    <div class="col-6">
                        <div class="stat-card shadow-sm">
                            <div class="percentage">57%</div>
                            <div class="desc">Higher engagement</div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-6">
                        <div class="stat-card shadow-sm">
                            <div class="percentage">45%</div>
                            <div class="desc">Increase in sales</div>
                        </div>
                    </div>
                    <!-- Card 3 (Wide) -->
                    <div class="col-12">
                        <div class="stat-card-wide shadow-sm">
                            <div class="percentage">40%</div>
                            <div class="desc">More customer retention</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Styles for Section 5 -->
<style>
    .why-360-section {
        background-color: #021237;
        padding-top: 80px;
        padding-bottom: 80px;
        color: #fff;
    }

    .why-360-section h2 {
        font-size: clamp(24px, 3vw, 32px) !important;
        font-weight: 700;
    }

    .why-360-list li {
        font-size: clamp(14px, 1.8vw, 17px) !important;
        color: #cbd5e1;
        margin-bottom: 24px;
        display: flex;
        align-items: flex-start;
        text-align: start;
    }

    .why-360-list li i {
        color: #ffc107 !important;
        font-size: 1.6rem;
        margin-right: 12px;
        margin-top: 2px;
    }

    .stat-card {
        background-color: #0056b3;
        border-radius: 16px;
        padding: 30px;
        height: 100%;
        border: none;
        text-align: start;
    }

    .stat-card .percentage {
        color: #ffd000;
        font-weight: 700;
        font-size: clamp(2.5rem, 4vw, 4rem) !important;
        line-height: 1;
        margin-bottom: 10px;
    }

    .stat-card .desc {
        color: #fff;
        font-size: clamp(14px, 1.8vw, 18px) !important;
        font-weight: 500;
    }

    .stat-card-wide {
        display: flex;
        align-items: center;
        background-color: #0056b3;
        border-radius: 16px;
        padding: 30px;
        border: none;
        text-align: start;
    }

    .stat-card-wide .percentage {
        color: #ffd000;
        font-weight: 700;
        font-size: clamp(2.5rem, 4vw, 4rem) !important;
        margin-right: 20px;
        line-height: 1;
    }

    .stat-card-wide .desc {
        color: #fff;
        font-size: clamp(15px, 2vw, 22px) !important;
        font-weight: 500;
        line-height: 1.2;
    }

    @media (max-width: 767px) {
        .why-360-section {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .stat-card {
            padding: 18px 14px;
            border-radius: 12px;
        }

        .stat-card .percentage {
            font-size: 2rem !important;
            margin-bottom: 6px;
        }

        .stat-card .desc {
            font-size: 12px !important;
            line-height: 1.3;
        }

        /* Keep desktop-style horizontal layout on wide card */
        .stat-card-wide {
            flex-direction: row;
            align-items: center;
            padding: 18px 16px;
            border-radius: 12px;
        }

        .stat-card-wide .percentage {
            margin-bottom: 0;
            margin-right: 12px;
            font-size: 2rem !important;
        }

        .stat-card-wide .desc {
            font-size: 13px !important;
            line-height: 1.25;
        }
    }
</style>


<!-- ✅ Section 6: Starting Fresh or Moving from SMS Magic? Choose 360 SMS -->
<section class="migration-section">
    <div class="container text-center">
        <h2 class="fw-bold mb-3 text-dark-blue">Starting Fresh or Moving from SMS Magic?<br>Choose 360 SMS</h2>
        <p class="migration-subtitle mb-5">Complete data migration &nbsp;|&nbsp; Dedicated onboarding specialist &nbsp;|&nbsp; Bring your own carrier or number</p>

        <div class="row g-4 justify-content-center">
            <!-- Col 1 -->
            <div class="col-6 col-md-3">
                <div class="migration-card">
                    <div class="number">60K</div>
                    <div class="label">Users Worldwide</div>
                </div>
            </div>
            <!-- Col 2 -->
            <div class="col-6 col-md-3">
                <div class="migration-card">
                    <div class="number">99.99%</div>
                    <div class="label">Uptime</div>
                </div>
            </div>
            <!-- Col 3 -->
            <div class="col-6 col-md-3">
                <div class="migration-card">
                    <div class="number">100+</div>
                    <div class="label">Countries Served</div>
                </div>
            </div>
            <!-- Col 4 -->
            <div class="col-6 col-md-3">
                <div class="migration-card">
                    <div class="number">4.9/5.0</div>
                    <div class="label">AppExchange Rating</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Styles for Section 6 -->
<style>
    .migration-section {
        background-color: #fff;
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .migration-section h2 {
        color: #0c2b5e;
        font-weight: 700;
        font-size: clamp(24px, 3vw, 32px) !important;
    }

    .migration-subtitle {
        color: #64748b;
        font-size: clamp(14px, 1.8vw, 17px) !important;
    }

    .migration-card {
        background-color: #F5FDFF;
        /*border: 1px solid #f1f5f9;*/
        border-radius: 12px;
        padding: 15px 20px;
        text-align: center;
        height: 100%;
        transition: all 0.3s ease;
    }

    .migration-card:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.03);
    }

    .migration-card .number {
        color: #cc4e3c;
        font-size: clamp(2.2rem, 3.5vw, 3rem) !important;
        font-weight: 700;
        margin-bottom: 2px;
        line-height: 1;
        padding-bottom: 5px;
    }

    .migration-card .label {
        color: #475569;
        font-size: clamp(13px, 1.6vw, 16px) !important;
        font-weight: 500;
    }

    @media (max-width: 767px) {
        .migration-section {
            padding-top: 50px;
            padding-bottom: 50px;
        }
    }
</style>

<?php
$lp_testimonials = [
    [
        'logo'   => '/wp-content/uploads/2026/08/Asset-13ldpi.png',
        'alt'    => 'Lennar Logo',
        'quote'  => '"SMS360 has been a great strategic partner as we built out our Salesforce messaging systems. Their team is helpful and communicative."',
        'author' => 'Rachel Blake, Principal at DW International LLC, Wisconsin, United States'
    ],
    [
        'logo'   => '/wp-content/uploads/2026/08/Asset-16ldpi-1.png',
        'alt'    => 'Morgan Logo',
        'quote'  => '"App seamlessly work with Salesforce. Manages Opt-ins, opt-outs easily. provides useful insights about any SMS communication. Onboarding team specially Versha Verma was extremely helpful in training, understanding issues, resolving issues, follow-up, etc."',
        'author' => 'Saad Mian, Principal at DW International LLC, Michigan, Wisconsin, United States'
    ],
    [
        'logo'   => '/wp-content/uploads/2026/08/Asset-21ldpi.png',
        'alt'    => 'Abbott Logo',
        'quote'  => '"I am very pleased with the app and the customer service. They go above and beyond to solve our issues. Versha, Pankaj, and Namrata offer great feedback and are always there to help when we need them. I look forward to working with them."',
        'author' => 'Khansaa Algassid, Administrator at Zaman International, Michigan, United States',
    ],
];
?>
<section class="stories-section py-5">
    <div class="container text-center">
        <!--<h2 class="fw-bold mb-5 text-dark-blue">Here's What Former SMS Magic Customers Say</h2>-->

        <div id="customerStoriesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">

            <!-- Carousel Slides -->
            <div class="carousel-inner px-md-5">
                <?php foreach ($lp_testimonials as $index => $item): ?>
                    <div class="carousel-item <?php echo $index === 0 ? 'active' : ''; ?>">
                        <div class="story-slide-content py-4 mx-auto position-relative" style="max-width: 800px;">
                            <div class="client-logo-wrapper mb-4">
                            </div>
                            <p class="story-quote mb-4">
                                <?php echo esc_html($item['quote']); ?>
                            </p>
                            <span class="story-author text-muted d-block fs-6"><?php echo esc_html($item['author']); ?></span>
                            <!--<span class="quote-mark-bg">”</span>-->
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev custom-control-btn" type="button" data-bs-target="#customerStoriesCarousel" data-bs-slide="prev">
                <i class="bi bi-chevron-left"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next custom-control-btn" type="button" data-bs-target="#customerStoriesCarousel" data-bs-slide="next">
                <i class="bi bi-chevron-right"></i>
                <span class="visually-hidden">Next</span>
            </button>

            <!-- Carousel Indicators (Flat Dots) -->
            <div class="carousel-indicators custom-indicators mb-0 mt-5">
                <?php foreach ($lp_testimonials as $index => $item): ?>
                    <button type="button" data-bs-target="#customerStoriesCarousel" data-bs-slide-to="<?php echo $index; ?>" class="<?php echo $index === 0 ? 'active' : ''; ?>" <?php echo $index === 0 ? 'aria-current="true"' : ''; ?> aria-label="Slide <?php echo $index + 1; ?>"></button>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</section>

<!-- Styles for Stories Carousel -->
<style>
    .stories-section {
        background-color: #f4f9fd;
        padding-top: 80px;
        padding-bottom: 80px;
        position: relative;
    }

    .stories-section h2 {
        color: #0c2b5e;
        font-weight: 700;
        font-size: clamp(24px, 3vw, 32px) !important;
    }

    .client-carousel-logo {
        max-height: 40px;
        width: auto;
        object-fit: contain;
    }

    .story-quote {
        font-size: clamp(16px, 2vw, 24px) !important;
        font-weight: 500;
        color: #1e293b;
        line-height: 1.5;
        font-style: normal;
        margin: 0 auto;
        max-width: 90%;
    }

    .story-author {
        font-size: clamp(12px, 1.5vw, 15px) !important;
        font-weight: 400;
        color: #94a3b8 !important;
    }

    .quote-mark-bg {
        position: absolute;
        right: 40px;
        bottom: -15px;
        font-size: 8rem;
        color: #98EBE9;
        /* Light Cyan */
        font-family: Georgia, serif !important;
        font-weight: 900;
        line-height: 1;
        user-select: none;
        pointer-events: none;
        opacity: 0.6;
    }

    /* Indicators - Flat Rounded Dots */
    .custom-indicators {
        position: relative;
        justify-content: center;
        gap: 6px;
        margin-top: 30px !important;
    }

    .custom-indicators button {
        width: 24px !important;
        height: 5px !important;
        border-radius: 3px !important;
        background-color: #cbd5e1 !important;
        border: none !important;
        opacity: 0.7 !important;
        transition: all 0.3s ease !important;
    }

    .custom-indicators button.active {
        background-color: #0057B8 !important;
        opacity: 1 !important;
        width: 36px !important;
    }

    /* Controls - Circular Buttons */
    .custom-control-btn {
        width: 48px !important;
        height: 48px !important;
        border-radius: 50% !important;
        top: 50% !important;
        transform: translateY(-50%) !important;
        opacity: 1 !important;
        transition: all 0.3s ease !important;
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        border: none !important;
    }

    .carousel-control-prev.custom-control-btn {
        left: 20px !important;
        background-color: #e2e8f0 !important;
    }

    .carousel-control-prev.custom-control-btn i {
        color: #94a3b8 !important;
        font-size: 1.5rem !important;
        font-weight: bold !important;
    }

    .carousel-control-prev.custom-control-btn:hover {
        background-color: #cbd5e1 !important;
    }

    .carousel-control-next.custom-control-btn {
        right: 20px !important;
        background-color: #0057B8 !important;
    }

    .carousel-control-next.custom-control-btn i {
        color: #fff !important;
        font-size: 1.5rem !important;
        font-weight: bold !important;
    }

    .carousel-control-next.custom-control-btn:hover {
        background-color: #004694 !important;
    }

    @media (max-width: 767px) {
        .stories-section {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .custom-control-btn {
            display: none !important;
            /* Hide arrows on mobile for better touch swiping */
        }
    }
</style>

<!--Contact form Styling — matched to campaignpage.php form UI -->
<style>
    /* Form alignment overrides (from campaignpage) */

    #marketing_optin {
        width: 40px;
    }


    .phone1 {
        margin-bottom: 10px;
        max-width: 100%;
        box-sizing: border-box;
    }


    #country {
        margin-bottom: 10px;
        width: 100% !important;
        max-width: 100%;
        display: block;
        box-sizing: border-box;
    }

    /* Phone (intl-tel-input) — full column width on all screens */
    .hero-form-card .intl-tel-input,
    .contact-form-section .intl-tel-input,
    .hero-form-card .iti,
    .contact-form-section .iti,
    .hero-form-card .phone1 .intl-tel-input,
    .contact-form-section .phone1 .intl-tel-input {
        width: 100% !important;
        max-width: 100% !important;
        display: block !important;
    }

    .hero-form-card .intl-tel-input input,
    .contact-form-section .intl-tel-input input,
    .hero-form-card .iti input,
    .contact-form-section .iti input,
    .hero-form-card input[type="tel"],
    .contact-form-section input[type="tel"],
    .hero-form-card #phone,
    .contact-form-section #phone,
    .hero-form-card input.phone1,
    .contact-form-section input.phone1 {
        width: 100% !important;
        max-width: 100% !important;
        box-sizing: border-box;
    }

    .hero-form-card .intl-tel-input .flag-container,
    .contact-form-section .intl-tel-input .flag-container,
    .hero-form-card .iti__flag-container,
    .contact-form-section .iti__flag-container {
        z-index: 2;
    }

    input#country_selector {
        height: 42px !important;
    }

    .hero-form-card .row,
    .contact-form-section .row {
        margin-bottom: 9px;
    }

    .hero-form-card .row>[class*="col-"],
    .contact-form-section .row>[class*="col-"] {
        min-width: 0;
    }

    .hero-form-card .intl-tel-input .selected-flag,
    .contact-form-section .intl-tel-input .selected-flag {
        height: 100% !important;
    }

    .country-select .selected-flag {
        height: 40px !important;
    }

    #country_selector {
        border: 1px solid #ccc;
    }

    .hero-form-card input[type="text"],
    .contact-form-section input[type="text"] {
        margin-bottom: 0px !important;
    }

    #country {
        border: 0 !important;
        margin-bottom: 1rem !important;
    }

    #city {
        margin-top: 10px;
    }

    .cus_class {
        display: none;
    }

    #zoho_form {
        scroll-margin-top: 250px;
    }

    .contact-form-section {
        background-color: #f8fbff;
    }

    .contact-form-section .selected-flag,
    .hero-form-card .selected-flag,
    input#country_selector {
        height: 42px !important;
    }

    /* Form Fields — campaignpage alignment */
    .contact-form-section form input,
    .hero-form-card form input,
    .contact-form-section form select,
    .hero-form-card form select,
    .contact-form-section form textarea,
    .hero-form-card form textarea,
    .contact-form-section form fieldset,
    .hero-form-card form fieldset,
    .contact-form-section form email,
    .hero-form-card form email {
        border-radius: 8px !important;
        box-shadow: none;
        padding: 10px 14px;
        font-size: 14px;
        width: 100%;
        margin-bottom: 0px !important;
    }

    form div {
        margin-bottom: 0px;
    }

    .contact-form-section form input:focus,
    .hero-form-card form input:focus,
    .contact-form-section form select:focus,
    .hero-form-card form select:focus,
    .contact-form-section form textarea:focus,
    .hero-form-card form textarea:focus {
        border-color: #0046d5;
        box-shadow: 0 0 0 0.1rem rgba(0, 70, 213, 0.1);
    }

    .contact-form-section form label,
    .hero-form-card form label {
        font-weight: 500;
        color: #333;
    }

    /* Submit — campaignpage coral button */
    .contact-form-section form input[type="submit"],
    .hero-form-card form input[type="submit"],
    .contact-form-section form button[type="submit"],
    .hero-form-card form button[type="submit"],
    .hero-form-card form .wpcf7-submit,
    .contact-form-section form .wpcf7-submit {
        background-color: #d97154 !important;
        border: none !important;
        color: #fff !important;
        border-radius: 6px !important;
        padding: 12px 24px !important;
        font-weight: 700 !important;
        font-size: 15px !important;
        width: 100%;
        cursor: pointer;
        transition: background-color 0.2s;
    }

    .contact-form-section form input[type="submit"]:hover,
    .hero-form-card form input[type="submit"]:hover,
    .contact-form-section form button[type="submit"]:hover,
    .hero-form-card form button[type="submit"]:hover {
        background-color: #c46248 !important;
    }

    .contact-form-section form .wpcf7-list-item-label,
    .hero-form-card form .wpcf7-list-item-label {
        font-size: 0.9rem;
        color: #555;
    }

    @media (max-width: 767px) {
        .cus-width {
            width: 50% !important;
        }
    }
</style>

<!-- ✅ Section 8: Upgrade to Future-Ready Communication (Centered 2-Column with Button) -->
<section class="upgrade-section py-5">
    <div class="container text-center py-4">
        <h2 class="fw-bold mb-3 text-dark-blue">For teams of every size. Start every conversation inside Salesforce.</h2>
        <p class="migration-subtitle mb-5">Join 60,000+ users in 100+ countries who text, automate, and engage without ever leaving their CRM.</p>
        <div class="row justify-content-center text-start mx-auto my-4" style="max-width: 900px;">
            <!-- Left Column -->
            <div class="col-md-6 mb-3 mb-md-0 ps-md-5">
                <ul class="list-unstyled upgrade-pointers-list mb-0">
                    <li class="d-flex align-items-center mb-3">
                        <div class="upgrade-list-icon">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <span class="upgrade-list-text">Backed by AI Agents</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <div class="upgrade-list-icon">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <span class="upgrade-list-text">Free migration from SMS Magic</span>
                    </li>
                    <!--<li class="d-flex align-items-center mb-3">-->
                    <!--  <div class="upgrade-list-icon">-->
                    <!--    <i class="bi bi-check-lg"></i>-->
                    <!--  </div>-->
                    <!--  <span class="upgrade-list-text">Zero messaging downtime</span>-->
                    <!--</li>-->
                    <!--<li class="d-flex align-items-center mb-3">-->
                    <!--  <div class="upgrade-list-icon">-->
                    <!--    <i class="bi bi-check-lg"></i>-->
                    <!--  </div>-->
                    <!--  <span class="upgrade-list-text">Dedicated onboarding specialist</span>-->
                    <!--</li>-->
                </ul>
            </div>

            <!-- Right Column -->
            <div class="col-md-6 ps-md-5">
                <ul class="list-unstyled upgrade-pointers-list mb-0">
                    <!--<li class="d-flex align-items-center mb-3">-->
                    <!--  <div class="upgrade-list-icon">-->
                    <!--    <i class="bi bi-check-lg"></i>-->
                    <!--  </div>-->
                    <!--  <span class="upgrade-list-text">Backed by AI Agents</span>-->
                    <!--</li>-->
                    <!--<li class="d-flex align-items-center mb-3">-->
                    <!--  <div class="upgrade-list-icon">-->
                    <!--    <i class="bi bi-check-lg"></i>-->
                    <!--  </div>-->
                    <!--  <span class="upgrade-list-text">Free migration from SMS Magic</span>-->
                    <!--</li>-->
                    <li class="d-flex align-items-center mb-3">
                        <div class="upgrade-list-icon">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <span class="upgrade-list-text">Zero messaging downtime</span>
                    </li>
                    <li class="d-flex align-items-center mb-3">
                        <div class="upgrade-list-icon">
                            <i class="bi bi-check-lg"></i>
                        </div>
                        <span class="upgrade-list-text">Dedicated onboarding specialist</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Centered Submit Button -->
        <div class="text-center mt-5 pt-2">
            <a href="#zoho_form" class="btn upgrade-submit-btn shadow-sm px-5 py-3 fw-semibold">Book a Demo</a>
        </div>



</section>
<div class="lp-site-footer">
    <div class="container text-center">
        <p class="lp-site-footer-copy mb-0">&copy; <?php echo esc_html(gmdate('Y')); ?> 360 SMS App - Powered by 360 Degree Cloud Technologies</p>
    </div>
</div>

<!-- Styles for Upgrade Section -->
<style>

@media (max-width: 767.98px) {
    .upgrade-section .text-center.mt-5.pt-2 {
        display: none !important;
    }
}
    .upgrade-section {
        background-color: #fff;
        padding-top: 80px;
        padding-bottom: 80px;
    }

    .upgrade-section h2 {
        color: #0c2b5e;
        font-weight: 700;
        font-size: clamp(24px, 3vw, 32px) !important;
        line-height: 1.25;
    }

    .upgrade-pointers-list {
        background: transparent;
        padding: 0;
        border: none;
    }

    .upgrade-list-icon {
        width: 36px;
        height: 36px;
        border-radius: 50%;
        background-color: #d1fae5 !important;
        /* Mint green */
        display: flex;
        align-items: center;
        justify-content: center;
        color: #059669 !important;
        /* Emerald green check */
        font-size: 1.2rem;
        font-weight: bold;
        flex-shrink: 0;
        margin-right: 18px;
    }

    .upgrade-list-text {
        font-size: clamp(15px, 1.8vw, 18px) !important;
        font-weight: 600;
        color: #0c2b5e;
        margin-bottom: 0;
        text-align: start;
    }

    .upgrade-submit-btn {
        background-color: #c85f46 !important;
        /* Terracotta / Warm orange-brown */
        color: #fff !important;
        border-radius: 8px !important;
        font-size: 1.5rem !important;
        transition: all 0.3s ease !important;
        border: none !important;
        box-shadow: 0 4px 15px rgba(200, 95, 70, 0.2) !important;
        display: inline-block;
        text-decoration: none;
    }

    .upgrade-submit-btn:hover {
        background-color: #b3513a !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(200, 95, 70, 0.3) !important;
    }

    @media (max-width: 767px) {
        .upgrade-section {
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .upgrade-pointers-list {
            padding-left: 15px;
        }
    }

    /* Solid Brand Blue Footer Styles */
    .lp-site-footer {
        background-color: #0057B8 !important;
        padding: 30px 0 !important;
        color: #ffffff !important;
        font-family: 'Plus Jakarta Sans', sans-serif !important;
    }

    .lp-site-footer-copy {
        font-size: 13px !important;
        color: #ffffff !important;
        opacity: 0.95 !important;
        font-weight: 500 !important;
        letter-spacing: 0.3px !important;
        line-height: 1.5 !important;
        margin: 0 !important;
    }

    @media (max-width: 767px) {
        .lp-site-footer {
            padding: 20px 0 !important;
        }
        .lp-site-footer-copy {
            font-size: 11px !important;
        }
    }
</style>

<!-- Scroll Script for Sticky Header Trigger -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var header = document.querySelector('.lp-sticky-header');
        var triggerSection = document.querySelector('.client-logos-section');

        if (header && triggerSection) {
            var checkScroll = function() {
                var triggerOffset = triggerSection.offsetTop;
                // Slide in when user scrolls down to or past the client logos section
                if (window.scrollY >= triggerOffset - 72) {
                    header.classList.add('header-visible');
                } else {
                    header.classList.remove('header-visible');
                }
            };

            window.addEventListener('scroll', checkScroll);
            checkScroll();
        }
    });
</script>

<?php get_footer("paid"); ?>