<?php

/**
 * Template Name: Playbook Page
 * Description:   Donor Retention Playbook for Nonprofits. Standalone Salesforce template.
 */
if (!defined('ABSPATH')) {
    exit;
}
?>

<?php get_header(); ?>

<style>
    /* Custom style overrides for specific elements not natively provided by Bootstrap */
    body {
        background: #fff;
    }


    .playbook-header-banner {
        background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;
        box-shadow: inset 0 -5px 15px rgba(0, 0, 0, 0.05);
        padding: 70px 0 !important;
    }

    .playbook-header-banner h1 {
        font-size: clamp(30px, 4.5vw, 45px) !important;
        letter-spacing: 0.06em !important;
        line-height: 1.3 !important;
        
    }

    .playbook-section-heading {
        color: #2c2b3e !important;
        letter-spacing: -0.01em !important;
        line-height: 1.3 !important;
        font-size: clamp(24px, 3.5vw, 32px) !important;
    }

    .playbook-download-btn {
        background-color: #0082c3 !important;

        letter-spacing: 0.05em !important;
        transition: all 0.25s ease !important;
    }

    .playbook-download-btn:hover {
        background-color: #0070a8 !important;
        box-shadow: 0 6px 20px rgba(0, 130, 195, 0.3) !important;
        transform: translateY(-1px) !important;
    }

    .playbook-download-btn:active {
        transform: translateY(1px) !important;
    }
</style>

<div id="main-content" class="main-content pb-5">
    <!-- Header Title Banner using Bootstrap spacing -->
    <div class="playbook-header-banner text-white text-center py-5">
        <div class="container py-2">
            <h1 class="h2 fw-bold  text-dark m-0">Donor Retention Playbook for <br><span style="color:#0057B8">Nonprofits</span> </h1>
        </div>
    </div>

    <!-- Main Container utilizing Bootstrap responsive column and grid system -->
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-md-12 col-lg-12">

                <!-- Centered Featured Playbook Mockup Image via Bootstrap utilities -->
                <div class="text-center mb-5">
                    <img class="img-fluid rounded-3 shadow"
                        src="https://360smsapp.com/wp-content/uploads/2026/03/Donor-Retention-Playbook-NPO.webp"
                        alt="Donor Retention Playbook for Nonprofits Mockup"
                        width="783"
                        height="516"
                        style="transition: transform 0.3s ease; box-shadow: 0 12px 35px rgba(0,0,0,0.09) !important;"
                        onmouseover="this.style.transform='scale(1.01)'"
                        onmouseout="this.style.transform='scale(1)'">
                </div>

                <!-- SECTION 1 -->
                <h2 class="playbook-section-heading fw-bold mt-5 mb-2">Donor Retention Playbook Approved by Top NPOs</h2>
                <div class="mb-4" style="width: 45px; height: 4px; background-color: #00bcff; border-radius: 2px;"></div>
                <div class="mb-4" style="font-size: 15.5px; line-height: 1.8; color: #484848;">
                    <p class="mb-3">81% of first-time donors never give again. This playbook shows you how to change that with SMS – automatically, inside Salesforce.</p>
                    <ul class="list-unstyled ps-0 my-3">
                        <li class="position-relative ps-4 mb-2">
                            <span class="position-absolute start-0 fw-bold" style="color: #00bcff; font-size: 18px; top: -2px;">•</span>
                            <strong>98% SMS</strong> open rate
                        </li>
                        <li class="position-relative ps-4 mb-2">
                            <span class="position-absolute start-0 fw-bold" style="color: #00bcff; font-size: 18px; top: -2px;">•</span>
                            <strong>$4.38</strong> ROI per $1 spent
                        </li>
                        <li class="position-relative ps-4 mb-2">
                            <span class="position-absolute start-0 fw-bold" style="color: #00bcff; font-size: 18px; top: -2px;">•</span>
                            <strong>3,000+</strong> nonprofits trust 360 SMS
                        </li>
                    </ul>
                </div>

                <!-- SECTION 2 -->
                <h2 class="playbook-section-heading fw-bold  mt-5 mb-2">The Retention Crisis Costing Your Mission Millions</h2>
                <div class="mb-4" style="width: 45px; height: 4px; background-color: #00bcff; border-radius: 2px;"></div>
                <div class="mb-4" style="font-size: 15.5px; line-height: 1.8; color: #484848;">
                    <p class="mb-3">Most nonprofits lose over 80% of first-time donors before a second gift — not because donors lost interest, but because no one stayed in touch at the right moment. Email is saturated. Direct mail is slow. The relationship window is narrow, and most organisations let it close.</p>
                    <p class="mb-0">Every lapsed donor represents wasted acquisition spend — a compounding cost that quietly stalls mission growth.</p>
                </div>

                <!-- SECTION 3 -->
                <h2 class="playbook-section-heading fw-bold  mt-5 mb-2">Why SMS Is the Best Channel Built for Donor Relationships</h2>
                <div class="mb-4" style="width: 45px; height: 4px; background-color: #00bcff; border-radius: 2px;"></div>
                <div class="mb-4" style="font-size: 15.5px; line-height: 1.8; color: #484848;">
                    <ul class="list-unstyled ps-0 mb-4">
                        <li class="position-relative ps-4 mb-2">
                            <span class="position-absolute start-0 fw-bold" style="color: #00bcff; font-size: 18px; top: -2px;">•</span>
                            Read within 5 minutes – not 24–48 hours like email
                        </li>
                        <li class="position-relative ps-4 mb-2">
                            <span class="position-absolute start-0 fw-bold" style="color: #00bcff; font-size: 18px; top: -2px;">•</span>
                            45% response rate vs. 6% for email
                        </li>
                        <li class="position-relative ps-4 mb-2">
                            <span class="position-absolute start-0 fw-bold" style="color: #00bcff; font-size: 18px; top: -2px;">•</span>
                            Two-way conversations and automation, all inside Salesforce
                        </li>
                        <li class="position-relative ps-4 mb-2">
                            <span class="position-absolute start-0 fw-bold" style="color: #00bcff; font-size: 18px; top: -2px;">•</span>
                            Opt-out rate below 1% -donors want your texts
                        </li>
                    </ul>
                    <p class="mb-3">A structured 30-day SMS sequence drives up to 75% higher engagement and 18% conversion to a second gift within 90 days.</p>
                    <p class="mb-0">Trusted by American Red Cross and UNICEF Mexico. Built for development directors and fundraising teams who need results, not theory.</p>
                </div>

                <!-- SECTION 4 -->
                <h2 class="playbook-section-heading fw-bold mt-5 mb-2">What's Inside the Playbook</h2>
                <div class="mb-4" style="width: 45px; height: 4px; background-color: #00bcff; border-radius: 2px;"></div>
                <div class="mb-4" style="font-size: 15.5px; line-height: 1.8; color: #484848;">
                    <ul class="list-unstyled ps-0 mb-0">
                        <li class="position-relative ps-4 mb-2">
                            <span class="position-absolute start-0 fw-bold" style="color: #00bcff; font-size: 18px; top: -2px;">•</span>
                            The 30-day first-time donor sequence with day-by-day messaging logic
                        </li>
                        <li class="position-relative ps-4 mb-2">
                            <span class="position-absolute start-0 fw-bold" style="color: #00bcff; font-size: 18px; top: -2px;">•</span>
                            A 5-message reactivation series proven to win back lapsed givers
                        </li>
                        <li class="position-relative ps-4 mb-2">
                            <span class="position-absolute start-0 fw-bold" style="color: #00bcff; font-size: 18px; top: -2px;">•</span>
                            A donor segmentation model built for Salesforce NPSP
                        </li>
                        <li class="position-relative ps-4 mb-2">
                            <span class="position-absolute start-0 fw-bold" style="color: #00bcff; font-size: 18px; top: -2px;">•</span>
                            Real results from American Red Cross and UNICEF Mexico
                        </li>
                        <li class="position-relative ps-4 mb-2">
                            <span class="position-absolute start-0 fw-bold" style="color: #00bcff; font-size: 18px; top: -2px;">•</span>
                            KPI benchmarks and red-flag metrics to track performance
                        </li>
                    </ul>
                </div>

                <!-- SECTION 5 -->
                <h2 class="playbook-section-heading fw-bold  mt-5 mb-2">Your Donors Are Worth Fighting For</h2>
                <div class="mb-4" style="width: 45px; height: 4px; background-color: #00bcff; border-radius: 2px;"></div>
                <div class="mb-4" style="font-size: 15.5px; line-height: 1.8; color: #484848;">
                    <p class="mb-0">Download the free playbook and start building donor relationships that last a lifetime.</p>
                </div>

                <!-- Download CTA Button styled natively in Bootstrap -->
                <div class="mt-5 pt-3">
                    <a class="playbook-download-btn btn btn-primary w-100 py-3 fw-bold border-0 shadow-sm"
                        href="https://360smsapp.com/wp-content/uploads/2026/03/Donor-Retention-Playbook-For-NPO-by-360-SMS.pdf"
                        target="_blank"
                        style="box-shadow: 0 4px 15px rgba(0, 130, 195, 0.2) !important; font-size: 16px; border-radius: 4px !important;">
                        Download Now
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>