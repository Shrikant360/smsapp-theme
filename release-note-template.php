<?php

/**
 * Template Name: Release Notes Page
 * Description:   Interactive Release Notes template built with Bootstrap 5.
 */
if (!defined('ABSPATH')) {
    exit;
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
<?php get_header(); ?>

<style>
    /* ─── Base ─────────────────────────────────────────────────────────────── */
    body {
        background-color: #ffffff !important;
    }

    /* ─── Hero Banner ───────────────────────────────────────────────────────── */
    .rn-hero-banner {
        background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;
        padding: 70px 20px !important;
        text-align: center;
        width: 100%;
        box-shadow: inset 0 -5px 15px rgba(0, 0, 0, 0.05);
    }

    .rn-hero-banner h1 {
        color: #000 !important;
        font-weight: 800 !important;
        font-size: clamp(32px, 5vw, 45px) !important;
        letter-spacing: 0.04em !important;
        margin: 0 !important;
       
    }

    /* ─── Sidebar Tab Links ─────────────────────────────────────────────────── */
    .rn-tab-link {
        font-weight: 500 !important;
        color: #495057 !important;
        background-color: #ffffff !important;
        border: 1px solid #dee2e6 !important;
        border-radius: 0 !important;
        transition: all 0.2s ease !important;
        text-align: left;
        font-size: 15px;
        width: 100%;
    }

    .rn-tab-link:hover {
        background-color: #f8f9fa !important;
        color: #000000 !important;
    }

    .rn-tab-link.active {
        background-color: #eaecef !important;
        color: #111111 !important;
        font-weight: 700 !important;
        border-left: 4px solid #0057B8 !important;
    }

    /* ─── Accordion ─────────────────────────────────────────────────────────── */
    .rn-accordion-header {
        cursor: pointer;
        padding: 14px 20px;
        transition: background-color 0.2s ease;
        display: flex;
        justify-content: space-between;
        align-items: center;
        border-bottom: 1px solid #dee2e6;
        background-color: #ffffff;
    }

    .rn-accordion-header:hover {
        background-color: #f0f4ff;
    }

    .rn-accordion-header span.rn-title {
        font-size: 14.5px;
        font-weight: 600;
        color: #0057B8;
        /* brand blue titles like screenshot */
    }

    .rn-chevron-circle {
        width: 24px;
        height: 24px;
        min-width: 24px;
        border-radius: 50%;
        background-color: #0057B8 !important;
        color: #ffffff !important;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: transform 0.25s ease;
        font-size: 12px;
    }

    .rn-accordion-item.expanded .rn-chevron-circle {
        transform: rotate(180deg);
    }

    .rn-accordion-body {
        display: none;
        padding: 16px 20px 18px 20px;
        background-color: #ffffff;
        border-bottom: 1px solid #dee2e6;
        font-size: 14px;
        line-height: 1.75;
        color: #484848;
    }

    .rn-accordion-body p {
        margin-bottom: 10px;
    }

    .rn-accordion-body ul {
        padding-left: 20px;
        margin-bottom: 0;
    }

    .rn-accordion-body li {
        margin-bottom: 6px;
    }

    .rn-accordion-body ul.subpoints {
        padding-left: 18px;
        margin-top: 4px;
    }

    .rn-accordion-body ol {
        padding-left: 20px;
    }

    /* images inside accordion */
    .rn-accordion-body .img_Sec {
        display: block;
        text-align: center;
        margin: 14px 0 4px;
    }

    .rn-accordion-body .img_Sec img {
        max-width: 100%;
        height: auto;
        border: 1px solid #dee2e6;
        border-radius: 6px;
    }

    .rn-accordion-body .figDescription {
        display: block;
        text-align: center;
        font-size: 12px;
        color: #888;
        margin-bottom: 10px;
    }

    /* inline small icon images */
    .rn-accordion-body img:not(.img_Sec img) {
        max-width: 100%;
        height: auto;
        vertical-align: middle;
    }

    /* ─── Section Headers ───────────────────────────────────────────────────── */
    .rn-section-title {

        font-size: 15px;
        font-weight: 700;
        letter-spacing: 0.04em;
        color: #2c2b3e;
        margin: 0;
        padding: 14px 20px 10px 20px;
        text-transform: none;
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
    }

    /* ─── Panel top bar ─────────────────────────────────────────────────────── */
    .rn-panel-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
        padding: 14px 20px;
        
    }

    .rn-panel-header h2 {
        font-size: clamp(24px, 2.5vw, 32px) !important;
        font-weight: 700 !important;
        color: #2c2b3e !important;
        margin: 0 !important;
        display: flex;
        align-items: center;
        gap: 8px;
        font-family: 'Plus Jakarta Sans', sans-serif !important;
    }

    /* ─── PDF icon ──────────────────────────────────────────────────────────── */
    .downloadPDF {
        display: inline-flex;
        align-items: center;
        text-decoration: none !important;
        flex-shrink: 0;
    }

    .downloadPDF img {
        width: 28px;
        height: auto;
        transition: transform 0.2s ease;
    }

    .downloadPDF:hover img {
        transform: scale(1.12);
    }

    /* ─── Not-found message ─────────────────────────────────────────────────── */
    .notFound {
        display: none;
        padding: 16px 20px;
        color: #888;
        font-style: italic;
        border-bottom: 1px solid #dee2e6;
    }

    /* ─── Highlighted info box ──────────────────────────────────────────────── */
    .rn-info-box {
        background-color: #f0f4ff;
        border: 1px solid #c8d8ff;
        border-radius: 6px;
        padding: 12px 16px;
        margin: 12px 0;
        font-size: 13.5px;
        color: #2c2b3e;
        text-align: center;
    }

    .rn-info-box strong {
        display: block;
        margin-bottom: 6px;
        font-size: 14px;
    }

    /* ─── Responsive ────────────────────────────────────────────────────────── */
    @media (max-width: 991px) {
        .desktop-sidebar {
            display: none !important;
        }
    }

    @media (min-width: 992px) {
        .mobile-sidebar {
            display: none !important;
        }
    }
</style>

<div id="main-content" class="main-content pb-5">

    <!-- Hero Banner -->
    <div class="rn-hero-banner">
        <div class="container">
            <h1 class="m-0 text-dark">Release Notes</h1>
        </div>
    </div>

    <!-- Main Grid -->
    <div class="container py-5">
        <div class="row">

            <!-- ── Left Sidebar ──────────────────────────────────────────────── -->
            <div class="col-12 col-lg-3 mb-4">

                <!-- Search -->
                <div class="input-group mb-3 border rounded-3 overflow-hidden" style="box-shadow:0 2px 8px rgba(0,0,0,0.05);">
                    <input type="text" id="searchF" class="form-control border-0 py-2 ps-3"
                        placeholder="Search Release Notes" aria-label="Search Release Notes">
                    <span class="input-group-text bg-white border-0 pe-3">
                        <i class="bi bi-search text-muted"></i>
                    </span>
                </div>

                <!-- Desktop list -->
                <div class="desktop-sidebar">
                    <div class="list-group border rounded-3 overflow-hidden" style="box-shadow:0 4px 12px rgba(0,0,0,0.05);">
                        <button class="list-group-item rn-tab-link active" data-target="version_seven_one">Release Note 1.271</button>
                        <button class="list-group-item rn-tab-link" data-target="version_seven_zero">Release Note 1.270</button>
                        <button class="list-group-item rn-tab-link" data-target="version_six_seven">Release Note 1.267</button>
                        <button class="list-group-item rn-tab-link" data-target="version_six_six">Release Note 1.266</button>
                        <button class="list-group-item rn-tab-link" data-target="version_five_nine">Release Note 1.259</button>
                        <button class="list-group-item rn-tab-link" data-target="version_five_four">Release Note 1.254</button>
                        <button class="list-group-item rn-tab-link" data-target="version_five">Release Note 1.253</button>
                        <button class="list-group-item rn-tab-link" data-target="version_five_one">Release Note 1.251</button>
                        <button class="list-group-item rn-tab-link" data-target="version_four_six">Release Note 1.246</button>
                        <button class="list-group-item rn-tab-link" data-target="version_four_two">Release Note 1.242</button>
                    </div>
                </div>

                <!-- Mobile dropdown -->
                <div class="mobile-sidebar">
                    <select class="form-select rounded-3 border py-2" id="mobileDropdown" style="font-size:15px;color:#495057;">
                        <option value="version_seven_one">Release Note 1.271</option>
                        <option value="version_seven_zero">Release Note 1.270</option>
                        <option value="version_six_seven">Release Note 1.267</option>
                        <option value="version_six_six">Release Note 1.266</option>
                        <option value="version_five_nine">Release Note 1.259</option>
                        <option value="version_five_four">Release Note 1.254</option>
                        <option value="version_five">Release Note 1.253</option>
                        <option value="version_five_one">Release Note 1.251</option>
                        <option value="version_four_six">Release Note 1.246</option>
                        <option value="version_four_two">Release Note 1.242</option>
                    </select>
                </div>
            </div>

            <!-- ── Right Content ─────────────────────────────────────────────── -->
            <div class="col-12 col-lg-9">
                <div id="toggleboxing" class="border rounded-3 overflow-hidden shadow-sm" style="background:#fff;border-color:#dee2e6 !important;">

                    <!-- ════════════════════════════════════════════════════════════════════════════
     1.271
════════════════════════════════════════════════════════════════════════════ -->
                    <div id="version_seven_one" class="tabcontent">
                        <div class="rn-panel-header">
                            <h2>Release Notes- 1.271
                                <a href="https://360smsapp.com/wp-content/uploads/2026/03/Release-Notes-1.271.pdf"
                                    class="downloadPDF" target="_blank">
                                    <img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/pdf-icon.png" alt="PDF">
                                </a>
                            </h2>
                        </div>
                        <p class="notFound">No matching content found for Release Notes- 1.271</p>
                        <div class="rn-accordion-list">

                            <!-- item -->
                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Package to support Salesforce's Enhanced Domain Update</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Salesforce is enforcing a major and mandatory change related to the <a href="https://help.salesforce.com/s/articleView?id=000393816&type=1" target="_blank">Enhanced Domains</a>, in the Mid-October 2023. Since all Salesforce sites would be affected, we have proactively rolled out this package release for 360 SMS to ensure that the services are not affected.</p>
                                </div>
                            </div>

                            <!-- item -->
                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">What does this mean for you?</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>The 360 SMS App will stop working for you if you are on any previous SMS package (versions before 1.271).</p>
                                </div>
                            </div>

                            <!-- item -->
                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">How can you ensure there is no impact?</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>To ensure uninterrupted product functionality, it is imperative that you upgrade the product package to 1.271 at the earliest. Please contact the 360 SMS Support team for assistance.</p>
                                </div>
                            </div>

                            <div class="rn-section-title">New Feature:</div>

                            <!-- item -->
                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Number Masking</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>We have introduced a feature called "Number Masking," and by Enabling Number Masking in the SMS general settings, we will now conceal the recipient's number in the Incoming Alert Slidebar, Multi Conversation View, SMS Composing, and Detail Page.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Number-Masking.png" alt="Number Masking in General Settings"></span>
                                    <span class="figDescription">Fig.1 Number Masking in General Settings</span>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Incoming-Alert2.png" alt="Incoming Alert with Number Masking"></span>
                                </div>
                            </div>

                            <!-- item -->
                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">PushTopic Optimization</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>A new feature has been introduced to optimize PushTopic for creating, updating, or performing both operations. Anyone can access these options in the general settings.</p>
                                </div>
                            </div>

                            <div class="rn-section-title">Enhancements:</div>

                            <!-- item -->
                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Task Creation in Async Mode</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Introduction of a new enhancement feature, the ability to create tasks in asynchronous mode. With this update, users can now select the "Create task in Async Mode" checkbox in the SMS General Settings, enabling the generation of tasks in an asynchronous manner. This enhancement significantly improves workflow efficiency, streamlining the task creation process.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Async.png" alt="Async Mode Setting"></span>
                                </div>
                            </div>

                            <!-- item -->
                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Improved Functionality of "List View ALL" with SpeedBoosting Support</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>In this latest update, we have enhanced the functionality of "List View ALL" by introducing a dependency on the sender number's support for SpeedBoosting. With this improvement, if the sender number does have SpeedBoosting capabilities, the checkbox for "List View ALL" will be enabled, allowing users to take advantage of this feature. Conversely, if the sender number does not support SpeedBoosting, the checkbox will be automatically disabled to prevent any potential issues.</p>
                                </div>
                            </div>

                            <!-- item -->
                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Speed Boosting and Link Shortening</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Provider has incorporated Speed Boosting into its latest update, thereby improving its overall performance and efficiency. Furthermore, the upcoming release will introduce link shortening functionality, which will further enhance optimization.</p>
                                </div>
                            </div>

                            <!-- item -->
                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Duplicate Entries</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, duplicate entries were prevented for messages with the same "To" number, even when sent concurrently from ListView, Campaigns, and SMS From Reports. This was achieved by adding a custom setting named "duplicateToNum" to SMS incoming alerts, enabling the unrestricted sending of messages to duplicate "To" numbers.</p>
                                </div>
                            </div>

                            <!-- item -->
                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Preview Functionality</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Now Preview functionality is available for File Records within Conversation View, Incoming Alerts, and Multi Conversation View.</p>
                                </div>
                            </div>

                            <!-- item -->
                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Send SMS with a customized schedule</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, the enterprise scheduling option automatically caused the flex queue to parallel execution. Now, users can choose when to send SMS with a customized schedule. Once they enable this feature, the system sets the schedule for 15 minutes after activation. Users can pick their time, but it must be at least 15 minutes later than the current time.</p>
                                </div>
                            </div>

                            <div class="rn-section-title">Minor Bug Fixes:</div>

                            <!-- item -->
                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Minor Bug Fixes</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Bug fixes and performance improvements.</p>
                                </div>
                            </div>

                        </div><!-- /.rn-accordion-list -->
                    </div><!-- /#version_seven_one -->


                    <!-- ════════════════════════════════════════════════════════════════════════════
     1.270
════════════════════════════════════════════════════════════════════════════ -->
                    <div id="version_seven_zero" class="tabcontent" style="display:none;">
                        <div class="rn-panel-header">
                            <h2>Release Notes- 1.270
                                <a href="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/release-note/Release Notes1.270(Summary).pdf"
                                    class="downloadPDF" target="_blank">
                                    <img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/pdf-icon.png" alt="PDF">
                                </a>
                            </h2>
                        </div>
                        <p class="notFound">No matching content found for Release Notes- 1.270</p>
                        <div class="rn-accordion-list">

                            <div class="rn-section-title">Enhancements:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Media supported for WhatsApp Approved Templates</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>We now support media files (such as an image, video, or document) in WhatsApp approved templates from our current provider. You can send the WhatsApp Approved Templates with media files by selecting media using the attachment option from any of our modules (such as Conversation View, Send SMS button, etc.).</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Link Tracking and Link Shortening support</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>For the current provider, Link Tracking and Link shortening are supported for approved WhatsApp templates using merge fields.</p>
                                    <p>We need to create approved templates that include variables. Instead of the variables themselves, we should use merge fields when creating an SMS template record. These merge fields should contain long URLs that need to be both shortened and tracked.</p>
                                </div>
                            </div>

                            <div class="rn-section-title">Minor Bug Fixes:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Minor Bug Fixes</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Bug fixes and performance improvements.</p>
                                </div>
                            </div>

                        </div>
                    </div><!-- /#version_seven_zero -->


                    <!-- ════════════════════════════════════════════════════════════════════════════
     1.267
════════════════════════════════════════════════════════════════════════════ -->
                    <div id="version_six_seven" class="tabcontent" style="display:none;">
                        <div class="rn-panel-header">
                            <h2>Release Notes- 1.267
                                <a href="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/release-note/Release Notes1.267(Summary).pdf"
                                    class="downloadPDF" target="_blank">
                                    <img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/pdf-icon.png" alt="PDF">
                                </a>
                            </h2>
                        </div>
                        <p class="notFound">No matching content found for Release Notes- 1.267</p>
                        <div class="rn-accordion-list">

                            <div class="rn-section-title">Enhancements:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Improved Auto-Sync Feature</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>We introduced a new Twilio API in the last package (1.266). But Twilio WhatsApp had a problem: assigned numbers didn't update when sending templates. So, we had to delete and recreate records.</p>
                                    <p>With the new package installed, manual number re-assignment is unnecessary. Numbers will synchronize automatically.</p>
                                    <p><strong>Note:</strong></p>
                                    <ul>
                                        <li>After installing the package, the user simply clicks the "Outgoing &amp; Incoming Setup" button in the SMS Setup section to initiate the sync.</li>
                                        <li>The script will execute once after the package upgrade, updating all records.</li>
                                    </ul>
                                    <p><strong>Sinch Provider Delivery Changes</strong></p>
                                    <p>Before, delivery status for Sinch-Line messages didn't update on SMS History. Now, after an update, it's consistently resolved.</p>
                                </div>
                            </div>

                            <div class="rn-section-title">Minor Bug Fixes:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Minor Bug Fixes</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Bug fixes and performance improvements.</p>
                                </div>
                            </div>

                        </div>
                    </div><!-- /#version_six_seven -->


                    <!-- ════════════════════════════════════════════════════════════════════════════
     1.266
════════════════════════════════════════════════════════════════════════════ -->
                    <div id="version_six_six" class="tabcontent" style="display:none;">
                        <div class="rn-panel-header">
                            <h2>Release Notes- 1.266
                                <a href="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/release-note/Release Notes1.266(Summary).pdf"
                                    class="downloadPDF" target="_blank">
                                    <img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/pdf-icon.png" alt="PDF">
                                </a>
                            </h2>
                        </div>
                        <p class="notFound">No matching content found for Release Notes- 1.266</p>
                        <div class="rn-accordion-list">

                            <div class="rn-section-title">Minor Bug Fixes:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Minor Bug Fixes and Performance Improvements</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Bug fixes and performance improvements.</p>
                                </div>
                            </div>

                        </div>
                    </div><!-- /#version_six_six -->


                    <!-- ════════════════════════════════════════════════════════════════════════════
     1.259
════════════════════════════════════════════════════════════════════════════ -->
                    <div id="version_five_nine" class="tabcontent" style="display:none;">
                        <div class="rn-panel-header">
                            <h2>Release Notes- 1.259
                                <a href="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/release-note/Release Notes1.259(Summary).pdf"
                                    class="downloadPDF" target="_blank">
                                    <img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/pdf-icon.png" alt="PDF">
                                </a>
                            </h2>
                        </div>
                        <p class="notFound">No matching content found for Release Notes- 1.259</p>
                        <div class="rn-accordion-list">

                            <div class="rn-section-title">New Feature:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Frequent Messaging and Exception Handling in General Settings</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Frequent Messaging feature prevents users from sending the same message to the same number and channel within a set time interval. This functionality helps prevent accidental spamming. For instance, it is useful when an automation at the backend goes wrong and spams the client with the same messages without the Admin being aware of it.</p>
                                    <p>This feature allows you to enable or disable Frequent Messaging in the SMS Setup: General Settings. Once enabled, you can set the time interval for Frequent Messaging.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/3-n.png" alt="Frequent messaging and time"></span>
                                    <span class="figDescription">Fig: Frequent messaging and time</span>
                                    <p>If this feature is enabled, and the same message is sent to the same number and channel within the specified time interval, an error message will appear on the screen, saying "Please select a different message" for a single transaction.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/4-n.png" alt="Error Message in Conversation View"></span>
                                    <span class="figDescription">Fig: Error Message in Conversation View</span>
                                    <p>For Bulk Messaging, no error message is shown, but an SMS history is created with an error code (360035) and message (Duplicate Transaction).</p>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/5-n.png" alt="SMS History with error code"></span>
                                    <span class="figDescription">Fig: SMS History record having error code and Error message</span>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/6-n.png" alt="Error code under SMS history"></span>
                                    <span class="figDescription">Fig: Error message and Error Code under SMS history</span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Spin Text Feature: Send multiple Templates alternately</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Now we have the ability to select multiple templates for bulk messaging in List View, SMS From Reports, and Campaigns. You can select multiple templates and when we send the message, it will be sent alternately using the selected templates. It will also reduce the chances of being marked as spam for that number.</p>
                                    <p><strong>For example</strong> – let's say you need to send bulk messages to 10 Contacts, and you send 3 templates via bulk message. It will send the templates 1, 2, and 3 in a sequential manner to the initial 3 Contacts, and then in the 4th contact, it will send template 1 again, and then the cycle continues sequentially for the rest of the Contacts.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/7-n.png" alt="Multiple template selection"></span>
                                    <span class="figDescription">Fig: Multiple template selection</span>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/8.png" alt="SMS history of sending templates in bulk message"></span>
                                    <span class="figDescription">Fig: SMS history of sending templates in bulk message</span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Channel Restriction</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>In SMS Setup: General Settings, there is now an option called 'Enable Channel Restriction for User Setup.' When this is enabled and you assign a number in the SMS Setup: User Config page, you can choose which channels the user can access using the 'Allowed Channels' field.</p>
                                    <p>Only channels supported by the selected number will be displayed. If you choose only some channels, the user won't be able to use unselected channels and send cross-channel messages. The user will only see selected channels as active channels in the Conversation View: Channel list. Unselected channels will be visible as inactive and cannot be used.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/9.png" alt="Enable channel restriction"></span>
                                    <span class="figDescription">Fig: Enable channel restriction for user setup option in general setup</span>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/10.png" alt="Assigned channels to user"></span>
                                    <span class="figDescription">Fig: Assigned channels to user</span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Introducing LINE Channel with Attachment Support via provider</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>We have introduced the LINE Channel with another provider. Previously, we offered this channel with another provider, but it lacked support for attachments. With our current provider, we can now support attachments up to 10 MB.</p>
                                    <p>It is important to note that this feature is only supported for one-on-one messaging and is not available for bulk messaging.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/11.png" alt="LINE channel"></span>
                                    <span class="figDescription">Fig: LINE channel</span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">"Invoke a Drip" Channel in Drip Campaigns</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>We are now supporting an additional channel in drip called 'Invoke a Drip'. This channel allows users to invoke another drip by selecting it from the Drip Campaign: Channel field, which displays a list of associated drips for the respective object.</p>
                                    <p>For example, if we have a Drip Campaign set up for the Contact object and we want to execute another drip campaign for the same object, this functionality allows us to do so.</p>
                                    <p><strong>Note:</strong> Previously, we recommended that users add only 20 actions per drip, but now users can add as many drip actions as they desire without any limitations.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/12.png" alt="Invoke a drip channel"></span>
                                    <span class="figDescription">Fig: Invoke a drip channel in channel list</span>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/13.png" alt="Drip campaigns field"></span>
                                    <span class="figDescription">Fig: Drip campaigns field</span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">iText Supported in Conversation View</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, iText was not supported in the conversation view, but now it is supported.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/14.png" alt="iText Icon"></span>
                                    <span class="figDescription">Fig: iText Icon</span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Quick Replies and Call-to-Action Buttons for Approved Templates and iText</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>When a template is approved for a button, it will appear as a button on the WhatsApp receiver's end. Previously, these buttons were not displayed on the conversation view SMS thread. However, we have now added two options: quick replies and Call to Action.</p>
                                    <p>If the respective template body is approved for Quick Replies, then when you send the template, the SMS will include the Quick Replies button. You can add up to three buttons in a Quick Reply. For Call to Action, you can add up to two buttons. This functionality will also work for iText.</p>
                                    <p><strong>In Templates:</strong> After clicking on 'New', you will enter the 'New Template' window where you will see options under the 'Approved' button for 'Quick Replies' and 'Call to Action'.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/15.png" alt="Quick replies and Call to action in Templates"></span>
                                    <span class="figDescription">Fig: Quick replies and Call to action buttons in Templates</span>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Quick-replies.png" alt="Quick replies in templates"></span>
                                    <span class="figDescription">Fig: Quick replies and Call to action in templates</span>
                                    <p><strong>In iText:</strong> Similar processes will be performed in iText also.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/18.png" alt="Quick replies in iText"></span>
                                    <span class="figDescription">Fig: Quick replies and Call to action options in iText</span>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/19.png" alt="Quick replies in chat"></span>
                                    <span class="figDescription">Fig: Quick replies in chat</span>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/20.png" alt="Message with Quick reply buttons in WhatsApp"></span>
                                    <span class="figDescription">Fig: Message with Quick reply buttons in WhatsApp</span>
                                </div>
                            </div>

                            <div class="rn-section-title">Enhancements:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Synced Multi-Conversation View and Incoming SMS Alert for Message Read Status</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, if we read an incoming message in the Multi-Conversation View, that message would still be marked as unread in the Incoming Alert. We have now synchronized both components and resolved this issue.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Restrict the 360 SMS app access to licensed users Only</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>We are restricting users who do not have a 360 SMS App's license. Previously, some components of 360 SMS App were visible to unlicensed users. However, now unlicensed users will see a popup message that says, 'You do not have a license to access the 360 SMS app.' There is also a lightning button labeled 'Request for License' in the popup window, which automatically sends an email to the SMS App administrator.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/21.png" alt="Request for License button"></span>
                                    <span class="figDescription">Fig: Request for License button</span>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/22.png" alt="Sample license request email"></span>
                                    <span class="figDescription">Fig: Sample email sent by the user to request for license</span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Enhanced Control Options for Emoji and Attachment Buttons</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, the option to enable or disable the Emoji and Attachment buttons on the conversation view was only available in the SMS Setup: General Settings. Now, this functionality has been extended to the Multi-Conversation and the Incoming Alert utility bars. Users are presented with three options: "Enable", "Disable", and "Hide".</p>
                                    <ul>
                                        <li><strong>Enable Option:</strong> To enable the Emoji button and Attachment Button.</li>
                                        <li><strong>Disable Option:</strong> The emoji and attachment buttons are visible but disabled.</li>
                                        <li><strong>Hide Option:</strong> The emoji and attachment buttons are not visible.</li>
                                    </ul>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/23.png" alt="Emoji and attachment Enable/Disable button"></span>
                                    <span class="figDescription">Fig: Emoji and attachment Enable/Disable button</span>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/25.png" alt="Emoji and attachments disabled"></span>
                                    <span class="figDescription">Fig: Emoji and attachments disabled</span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Group Chats: Increase in Participants from 5 to 10 Members</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, we only supported group chats with up to 5 members (5 recipients and 1 sender). Now, we have expanded our support to allow for up to 10 participants (To Number), in addition to the 1 sender member, to join a group chat.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Enhanced Voicemail System: Opt-Out Option and History Records</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Whenever a Ringless Voicemail SMS History record is created, the voicemail information will be included in the History record channel. Additionally, we have introduced a new channel for SMS unsubscribers called Voicemail. With this channel, you can now stop sending voice mail to selected customers.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/26.png" alt="Voicemail Channel Optout"></span>
                                    <span class="figDescription">Fig: Voicemail Channel Optout in SMS Unsubscribe</span>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/27.png" alt="Voicemail Opted out"></span>
                                    <span class="figDescription">Fig: Voicemail Opted out</span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">iText: Default Status, Name Change, and Improved Folder Options</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>We have made some upgrades to iText:</p>
                                    <ul>
                                        <li>Previously, when creating a new iText, the status would default to "Inactive." However, now it will be set to "Active" by default.</li>
                                        <li>We have changed the display name from "Survey" to "iText."</li>
                                        <li>Previously, there was no option to "Add new" button to folders, but now "Add new" button is available in the Folder field.</li>
                                    </ul>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/28.png" alt="iText Active status"></span>
                                    <span class="figDescription">Fig: iText Active status</span>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/29.png" alt="Add New button in Folder field in iText"></span>
                                    <span class="figDescription">Fig: Add New button in Folder field in iText</span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Expanded Query Limitations in iText</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, 10–50 queries were allowed for answers to one question. This has been increased to 120 answers for one question.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Custom Notification</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Initially, the notifications were sent through Salesforce Chatter. Now the app uses push notifications for the Salesforce mobile app.</p>
                                    <p>We have introduced two options for custom notifications in SMS Setup: General Settings: <em>Enable Custom Notification</em> and <em>Custom Notification</em>. To use custom notifications, first enable the "Enable Custom Notification" checkbox and add the Custom Notification API.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/CustomNotificationHistory.png" alt="Custom Notification History"></span>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/32.png" alt="Custom notification"></span>
                                    <span class="figDescription">Fig: Custom notification</span>
                                    <span class="img_Sec"><img src="https://360smsapp.com/wp-content/uploads/2023/05/33.png" alt="Custom notification option in General settings"></span>
                                    <span class="figDescription">Fig: Custom notification option in General settings</span>
                                </div>
                            </div>

                            <div class="rn-section-title">Minor Bug Fixes:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Minor Bug Fixes</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Bug fixes and performance improvements.</p>
                                </div>
                            </div>

                        </div>
                    </div><!-- /#version_five_nine -->


                    <!-- ════════════════════════════════════════════════════════════════════════════
     1.254
════════════════════════════════════════════════════════════════════════════ -->
                    <div id="version_five_four" class="tabcontent" style="display:none;">
                        <div class="rn-panel-header">
                            <h2>Release Notes- 1.254
                                <a href="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/release-note/Release Notes1.254(Summary).pdf"
                                    class="downloadPDF" target="_blank">
                                    <img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/pdf-icon.png" alt="PDF">
                                </a>
                            </h2>
                        </div>
                        <p class="notFound">No matching content found for Release Notes- 1.254</p>
                        <div class="rn-accordion-list">

                            <div class="rn-section-title">New Feature:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">ChatGPT with 360 SMS</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>To start with ChatGPT, a manual remote site setting needs to be created.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Remote-Site.png" alt="Remote Site Setting"></span>
                                    <ul>
                                        <li>The CSM team will provide the user with a ChatGPT number.</li>
                                        <li>You can assign multiple ChatGPT numbers to a single 360 SMS organization.</li>
                                        <li>To link ChatGPT with 360 SMS, you need to create an account in ChatGPT and generate an API key through it.</li>
                                    </ul>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/API-Keys.png" alt="API Keys"></span>
                                    <p>There are a few free trial credits already provided by ChatGPT, after which it becomes a paid feature.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Free-trial.png" alt="Free trial credits"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">ChatGPT Features</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>You can enter your required questions or suggestions in the ChatGPT Question box on the Create SMS page, and it will generate a prepared template that can be sent to your clients and customers.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/ChatGPT.png" alt="ChatGPT question box"></span>
                                    <ul>
                                        <li>ChatGPT also suggests a reply based on ten recent messages in the 360 SMS' "Conversation view" and "Incoming SMS Utility bar."</li>
                                    </ul>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/conversation.png" alt="Conversation view with ChatGPT"></span>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/ChatGPT-utility.png" alt="ChatGPT utility bar"></span>
                                </div>
                            </div>

                            <div class="rn-section-title">Minor Bug Fixes:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Minor Bug Fixes</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Bug fixes and performance improvements.</p>
                                </div>
                            </div>

                        </div>
                    </div><!-- /#version_five_four -->


                    <!-- ════════════════════════════════════════════════════════════════════════════
     1.253
════════════════════════════════════════════════════════════════════════════ -->
                    <div id="version_five" class="tabcontent" style="display:none;">
                        <div class="rn-panel-header">
                            <h2>Release Notes- 1.253
                                <a href="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/release-note/Release Notes1.253(Summary).pdf"
                                    class="downloadPDF" target="_blank">
                                    <img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/pdf-icon.png" alt="PDF">
                                </a>
                            </h2>
                        </div>
                        <p class="notFound">No matching content found for Release Notes- 1.253</p>
                        <div class="rn-accordion-list">

                            <div class="rn-section-title">New Feature:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Auto Assign Number</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, if a number wasn't assigned to a user, you couldn't send messages. But now we have introduced a feature called Auto Assign Numbers, which is by default enabled. Whenever a record is updated, it will automatically assign the number to the user.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Carrier Violation due to Cannabis keyword</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>You can add keywords to the Restricted Keywords section under General Settings in the SMS Setup. These words will be restricted from being sent to the customer.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Channel support in SMS Composing Module</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>We have introduced three new channels with the SMS Composing Module, i.e., WhatsApp, SMS, and VoiceMail.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/SMS-Composing2.png" alt="SMS Composing channels"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Field Mapping Setup for New Record creation</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>New features are added to field mapping when you create a new record. You can View, Edit and Delete a new record with the drop down.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Field-Mapping2.png" alt="Field Mapping"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Mark Incoming as Read</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>This new functionality will mark your incoming messages as read after you send an outgoing message to the same message. To enable this functionality, enable "Mark Incoming as Read" in the General Settings.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Mark-incoming2.png" alt="Mark Incoming as Read setting"></span>
                                </div>
                            </div>

                            <div class="rn-section-title">Enhancements:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Partner and Customer Community License</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>When a customer clicks on the incoming/outgoing button, we fetch the partner and customer community license.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">'From Address' displayed</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>The "from" address will also be shown when we send emails through a drip campaign.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Functionality changes in VTP</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>In the VTP History, verified phone numbers can be changed and re-verified, and the details can be seen on the details page.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">WhatsApp Profile Name</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>You can now see the "WhatsApp profile name" field on the SMS History page.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Channel option on SMS Template/Folder</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>You can now create different templates for different channels. Select your desired channel on the "Create SMS" page and choose the template.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Channel.png" alt="Channel option on SMS Template"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Signature for batch only</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>This functionality lets you enable user signatures to send signatures along with your messages in batches. This works for bulk messages only.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Bulk-messaging2.png" alt="Bulk messaging signature"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Use record owner's signature</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, only the user signature was displayed, but now you have the option to enable the functionality to send the record owner's signature. This functionality won't work in the case of speed boosting and cross-automation.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Change in Object Picklist value in SMS App</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, we displayed various objects on the object setup page that clients would likely not use. Now, the number of standard objects has been reduced.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Add-objects2.png" alt="Add objects"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Changes in SMS Scheduling</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>While scheduling a message, the message will be sent immediately if the time period is too short (2 to 5 minutes). This feature is usually for automated messages.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Labels for "To Number" and "From Number" in Conversation View</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Earlier in the conversation view, we could see only numbers in place of 'To number'. Now we can see the API of the number. For example, if it's a mobile number, the 'mobile number' label will be displayed; if it's a landline, home phone, or any other number, then that label will be displayed.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Number-Labels2.png" alt="Number Labels in Conversation View"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Number Formats Design Sync from Setup Org</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, we created custom settings in the client's organization, where we supported only five formats of numbers. Now, more than five formats are supported.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Remove duplicate numbers from bulk list</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>If two contacts have the same number, one of them is removed and marked as duplicated so that the same number won't receive a message twice.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Black List Number Use Case</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>If you have blacklisted any number, you cannot send messages or voice notes to that number. If you try to send a message to a blacklisted number, an error will be shown.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Invocable Method in SMS with Wrapper Signature</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>When you select Send Message in Apex Class through Process Builder, you need to fill in the required information as shown in the image below.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Process-Builder2.png" alt="Process Builder configuration"></span>
                                </div>
                            </div>

                            <div class="rn-section-title">Minor Bug Fixes:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Minor Bug Fixes</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Bug fixes and performance improvements.</p>
                                </div>
                            </div>

                        </div>
                    </div><!-- /#version_five -->


                    <!-- ════════════════════════════════════════════════════════════════════════════
     1.251
════════════════════════════════════════════════════════════════════════════ -->
                    <div id="version_five_one" class="tabcontent" style="display:none;">
                        <div class="rn-panel-header">
                            <h2>Release Notes- 1.251
                                <a href="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/release-note/Release Notes1.251(Summary).pdf"
                                    class="downloadPDF" target="_blank">
                                    <img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/pdf-icon.png" alt="PDF">
                                </a>
                            </h2>
                        </div>
                        <p class="notFound">No matching content found for Release Notes- 1.251</p>
                        <div class="rn-accordion-list">

                            <div class="rn-section-title">Enhancements:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Schedule SMS</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>While scheduling a message, if the time period is too short (2 to 5 minutes), the message will be sent immediately. This feature is usually for automated messages.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Change in object picklist value in SMS App</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>The drop-down options in various locations (such as SMS Templates, Drip Campaigns, General Settings, etc.) can be customized, and the number of items can be manually set by the user. The standard items are already displayed in the drop-down.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">SMS from report phase 2</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Earlier, the number of records you could send data to through a report was set to 2000 at a time. Now, the limit has been increased to 50,000. 360 SMS supports scheduling messages to unlimited records from the SMS From Reports component with real-time data.</p>
                                    <p>There are two cases:</p>
                                    <ul>
                                        <li>If the report contains 50,000 records:
                                            <ul class="subpoints">
                                                <li>The report will run synchronously in batch execution. The report will be generated in chunks of 2,000 rows at a time, with a maximum of 25 batches (50,000 total rows). After retrieving the 2,000 IDs, SMS messages will be sent in parallel.</li>
                                            </ul>
                                        </li>
                                        <li>If the report contains more than 50,000 records:
                                            <ul class="subpoints">
                                                <li>We will run the report, collect the IDs, and send the SMS messages in parallel.</li>
                                                <li>If the booster is not enabled, the report chunk size will be set at 30 or 25, depending on the current functionality.</li>
                                                <li>If the speed booster is enabled, the report chunk size will be set to 100.</li>
                                                <li>If there is a limit reached for the number of reports that can be executed per hour, the batch will stop and a new batch will be scheduled after one hour for the remaining records.</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Number sync from Setup Org</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Currently, different clients use different number formats, which are utilized in both the SMS and CTI systems.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">WhatsApp Profile name displayed on incoming</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>In the case of WhatsApp, the provider gives us the profile name of the sender's account. We can use this profile name as the name mapping for new leads in incoming WhatsApp messages.</p>
                                    <p>WhatsApp providers will give us the profile name saved in the SMS history. For lead conversion field mapping, we will map the field in the SMS history to the lead for the new lead name mapping.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Field Mapping setup for new record creation</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Field mapping setup for creating new records. Linked to the WA profile name, the admin can change the default lead name for unknown incoming messages.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Signature Parsing</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>In the Sign option in General settings, a sign is automatically added to every outgoing message, which is the sign of the user who is sending the message (not the record owner). Through this setting, the sign can be changed to the record owner. This setting can be changed for each user through "My SMS setup" for a user-wise setup.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Stop Autoplay for voicedrop template selection</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>"Stop Autoplay" refers to disabling the automatic playback feature for the "voicedrop template selection." By stopping the autoplay feature, the voicedrop template will not play automatically and will only play when the user initiates it manually.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Read Incoming after sending Outgoing message</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, the last incoming message was marked as read only when an outgoing message was sent from the conversation view or the utility bar. Now, incoming messages will be marked as read for all outgoing messages sent from anywhere (conversation view, utility bar, automation, etc.). This functionality is enabled through the General Settings.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Channel option on SMS template/folder</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Once a channel is assigned, the template can only be used for that channel. There is a multi-channel picklist and the "Channel All" option. This is used for WhatsApp-approved templates.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Blacklisted number use case</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Outgoing messages will not be sent if the recipient number is on a blacklist. This is a security measure to ensure that restricted or unwanted numbers cannot receive messages from the app.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Signature for bulk messages</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>The sign is currently appended to all outgoing messages in the General Settings. Now, the sign can only be added to bulk messaging and not to one-to-one messaging.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Labels for "To" and "From" number</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>In the conversation view, the thread displays the "to" and "from" numbers. For the "to" number, we will provide an option to display the label, such as "Mobile," "Phone," "Home Phone," etc. For the "from" number, the label set in the org setup will be displayed.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Schedule SMS button in conversation view</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>In the conversation view, we have now added the scheduling option. This was previously only available in the "Send SMS" button.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Update parent records for new incoming</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Whenever a new lead is created, the "SMS Last Sender Number" field will be prefilled. The field will only be updated once, when the lead is first created. Currently, the user has to manually update this field, but with this change, the first default value will be automatically set when the lead is created.</p>
                                </div>
                            </div>

                            <div class="rn-section-title">Minor Bug Fixes:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Minor Bug Fixes</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Bug fixes and performance improvements.</p>
                                </div>
                            </div>

                        </div>
                    </div><!-- /#version_five_one -->


                    <!-- ════════════════════════════════════════════════════════════════════════════
     1.246
════════════════════════════════════════════════════════════════════════════ -->
                    <div id="version_four_six" class="tabcontent" style="display:none;">
                        <div class="rn-panel-header">
                            <h2>Release Notes- 1.246
                                <a href="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/release-note/Release Notes1.246(Summary).pdf"
                                    class="downloadPDF" target="_blank">
                                    <img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/pdf-icon.png" alt="PDF">
                                </a>
                            </h2>
                        </div>
                        <p class="notFound">No matching content found for Release Notes- 1.246</p>
                        <div class="rn-accordion-list">

                            <div class="rn-section-title">New Feature:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">SpeedBoosting feature</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, if a number wasn't assigned to a user, you couldn't send messages. But now we have introduced a feature called Auto Assign Numbers, which is by default enabled. Whenever a record is updated, it will automatically assign the number to the user.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Group-based restriction on SMS Composing</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Earlier, the restriction on SMS Composition was only based on profiles. However, now we also have the option of restricting based on groups. In the Message Settings section of General Settings, you can edit your preferences for restricting SMS Composing.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/SMS-composing.png" alt="SMS Composing restrictions"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Manage Unicode Character From LMA</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, Unicode character records were manually created in our organization. However, we have now introduced a new record type in the production org. The record type is a unique code character on the general setup object, where both Name and CC address are used. The CC address will be treated as a replacement for the name that needs to be replaced.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Owner-Based Signature Parsing</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Signature text will now be selected or parsed based on the record owner's signature instead of the current user's.</p>
                                    <p><strong>Limitations:</strong></p>
                                    <ul>
                                        <li>This functionality is dependent on the Org-Wide Signature General Setting. The Org-Wide General Setting must be enabled to use this functionality.</li>
                                        <li>This functionality will not work in the cases of Speed Boosting and Cross Object Automation.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="rn-section-title">Enhancements:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Enhance iText Reply</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>In the past, there was a delay in sending outbound replies through iText. This issue can be resolved by adjusting a custom setting named "itextboosting," which is designed to optimize the speed of iText operations. The "ReplySMSRest" class should initiate an "iText boosting" call prior to executing any DML operations.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Restrict Composing Enhancement</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>The 'Restrict Composing' feature is now also operational on the SMS Composing Utility. When this feature is enabled, only specific numbers that have been approved or added to a list of approved numbers can send messages to the restricted number.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">SMS Template Changes</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, SMS templates would not work if the selected object in the template had more than 1,000 fields. We have added a new feature to the SMS templates — we only displayed a few standard objects in the SMS template, and there was no way to add any additional standard objects to the SMS template object picklist. However, this issue has now been resolved. To add a new object to the picklist, we simply need to add that object to the Object Setup page.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">SMS App Owner in General Settings</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>In the SMS App Owner section of the General Settings, initially all the users with Salesforce licenses were displayed. To avoid long lists due to the large number of users, we have made a change to only display the following users:</p>
                                    <ul>
                                        <li>Users with System Admin Profile</li>
                                        <li>Previous SMS App Owner</li>
                                        <li>Currently logged-in users with edit capability</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Scheduling from SMS From Reports</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Earlier, the number of records you could send data to through a report was set to 2000 at a time. Now, the limit has been increased to 50,000. 360 SMS supports scheduling messages to unlimited records from the SMS From Reports component with real-time data.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Run-report.png" alt="Run report on scheduled time"></span>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Filter-number.png" alt="Filter number field"></span>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Incoming-Alert.png" alt="Incoming Alert custom setting"></span>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Create-Message-2.png" alt="Create Message scheduling"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Opt-in template in Object Setup</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>The Opt-in template in the object setup is now sorted by "Last Modified Date". However, we were facing an issue where if there were more than 1000 templates, the system would crash. As a temporary fix, we have implemented a limit of 999 templates to prevent the page from breaking.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Phone-API.png" alt="Phone API"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Search for Case Object in SMS Composer</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, you could only search names in the SMS Composer, which is located in the utility bar. Now, the Case object may also be found using the SMS Composer's search feature.</p>
                                </div>
                            </div>

                            <div class="rn-section-title">Minor Bug Fixes:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Minor Bug Fixes</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Bug fixes and performance improvements.</p>
                                </div>
                            </div>

                        </div>
                    </div><!-- /#version_four_six -->


                    <!-- ════════════════════════════════════════════════════════════════════════════
     1.242
════════════════════════════════════════════════════════════════════════════ -->
                    <div id="version_four_two" class="tabcontent" style="display:none;">
                        <div class="rn-panel-header">
                            <h2>Release Notes- 1.242
                                <a href="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/release-note/Release Notes1.242(Summary).pdf"
                                    class="downloadPDF" target="_blank">
                                    <img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/pdf-icon.png" alt="PDF">
                                </a>
                            </h2>
                        </div>
                        <p class="notFound">No matching content found for Release Notes- 1.242</p>
                        <div class="rn-accordion-list">

                            <div class="rn-section-title">New Feature:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Read Receipt for SpeedBoosting</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Users can now check whether their outgoing WhatsApp message has been read or not in the Outgoing SMS History through the Status and Read fields.</p>
                                    <ul>
                                        <li><strong>"Delivered" Checkbox field:</strong> When enabled, outgoing messages will display a 'delivered' sign (double tick) below the SMS. When disabled, users will not be able to see any delivery confirmation.</li>
                                        <li><strong>"Read" Checkbox field:</strong> When enabled, outgoing messages will display a 'read' sign (with 'read' written below the outgoing message). When disabled, the user will not be able to see any 'read' sign.</li>
                                    </ul>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/SMS-History.png" alt="SMS History read receipt"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Read Receipt for WhatsApp outgoing</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>When you send a WhatsApp message, you will see a 'Read' below your message in the Conversation View after it is read.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Read-receipt.png" alt="Read Receipt in Conversation View"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">User Name Display</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>The first and last name of the user will be displayed beside "Generated By" or "Last Setup done by" on the SMS setup page.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/SMS-Composing-Utility.png" alt="SMS Composing Utility - User Name"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Field Mapping Setup for New Record creation</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>New features are added to field mapping when you create a new record. You can View, Edit and Delete a new record with the drop down.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/User-Name.png" alt="Field Mapping setup"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Create SMS History record in case of Voice drop failure</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>We now know whether a message has been delivered or not, and if not, what the reason for the failure is. An error message will be displayed in the voicemail history when a voicemail is not delivered to the receiving party.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Voicemail.png" alt="Voicemail error message"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">SMS History dashboard for failed Messages</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Under the SMS Analytics object, one more report is added named as "Failed SMS per Day", which displays the number of undelivered SMS per day.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Failed-SMS.png" alt="Failed SMS dashboard"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Select All option for Bulk Messaging</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>The new functionality allows users to select all records in the List View when sending bulk messages, thus bypassing the previous limitation of Salesforce, which restricted the selection to only 200 records at a time. This option can be checked true on the Create Message page from the Send SMS button on the List View. Once selected, it will select all the records in that List View, regardless of the user's previous record selection.</p>
                                    <p><strong>Note:</strong> This feature works only if speed boosting is enabled in the user's Salesforce organization.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Send-All.png" alt="Select All for Bulk Messaging"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Help Texts added in SMS setup</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>In the SMS setup page, under the section named as "Enable/Disable/Hide Interface Element", help texts are added with all the fields that tell you about the field when you hover your cursor over it.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Help-Texts.png" alt="Help Texts in SMS Setup"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Sync SMS Number status in real time</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Sync the real-time value of the status. Once you change the status from inactive to active, click the "Sync to Client" button on the top right. It will show you that the record has been synced successfully.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Sync-Client.png" alt="Sync to Client button"></span>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Pop-up-message.png" alt="Sync success popup"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Message Settings Modification</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>A new option called "Last Message Owner" has been added to this list. This means that you can now set the default as the "Last Message Owner", and messages will be sent to the person who last sent you a message from the particular organization.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Message-Settings.png" alt="Message Settings modification"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Dark hour for Scheduled Job</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>The Dark Hour works as "do not disturb" mode that can be enabled during certain hours of the day or night. When you enable the "dark hour," the app will typically stop sending notifications during the specified time period. Instead, the messages will be stored in the app until the "dark hour" period ends. When enabled, the "Dark Hour" functionality will be active for the record. Its default value is set to true for system-generated records, and if created manually then the default value is set to false.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/dark-hours.png" alt="Dark hours setting"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Schedule SMS Changes</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>When a client creates a record for scheduling SMS and does not specify the channel, the default channel will be set as "SMS" if it's a text message and "MMS" if they add any attachments.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">SpeedBoosting feature</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>MMS and link tracking are supported in the SpeedBoosting feature for SMS reports. With this feature, MMS and link tracking are supported, meaning that users can include multimedia content in their messages and track link clicks within them.</p>
                                </div>
                            </div>

                            <div class="rn-section-title">Enhancements:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Multiple link shortening and tracking</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>When you send several URL links in a message, a record for message URLs is created and stored in the SMS History's "Message URL" section. We can now track if the user clicks on those links, how many times they click them, and the timestamps. You can track 5 links at a time in a message.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Messages-URLs.png" alt="Message URLs tracking"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Compliance Mechanism Support for Drip/Speedboosting/others</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>In the past, Drip Campaigns, SpeedBoosting, and other similar marketing strategies did not fully support compliance mechanism features. However, now these strategies have been updated to include complete support for such features.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Voice Template Recording limit</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>A limit will be shown below the recording button to display the supported limit, so the user knows the time limit before recording. Previously, the limit was not shown on the screen.</p>
                                    <div class="rn-info-box">
                                        <strong>Recording Limits</strong>
                                        Recording Time Limit: 30 seconds &nbsp;|&nbsp; File Size Limit: 4.5 MB
                                    </div>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Voice-Note.png" alt="Voice Note recording limit"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Link Shortening using 360 Domain</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, "Link shortening using 360 domains" was a standalone field in the General Settings. However, it is now listed under the Link Tracking section within the General Settings.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Link-Tracking.png" alt="Link Tracking section"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Drip Campaign Updates</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>The Drip Campaign for this release has undergone the following improvements:</p>
                                    <ul>
                                        <li>The UI has been improved which is now similar to Salesforce Lightning UI.</li>
                                        <li>You can now navigate to the Drip Campaign Action page and directly view the field you have set for a specific field in the Field Set.</li>
                                        <li>You can also edit the field set as per your requirements.</li>
                                        <li>"Add Row" is renamed "Add Action".
                                            <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Action-Button.png" alt="Add Action button"></span>
                                        </li>
                                        <li>Tab title on drip campaign tab: When you hover over the drip campaign tab you will now notice that it shows the drip campaign's name.
                                            <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Drip-Campaign.png" alt="Drip Campaign tab name"></span>
                                        </li>
                                        <li>You can now also enable dark hour functionality for Drip Campaign.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">'Salesforce Down' error message</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>If any number cannot be assigned due to a Salesforce issue, an error message will be displayed indicating that Salesforce is unavailable. One lead will be created and all other incomings will get synced to that.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Signature for batch only</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>This functionality lets you enable user signatures to send signatures along with your messages in batches. This works for bulk messages only.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Bulk-messaging.png" alt="Bulk messaging signature"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Switch process builder to job mode</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>The scheduled time message is triggered in two ways, first by real-time process builder; second by job process builder. Now we have introduced a new feature in General Settings, named as <strong>Disable "Schedule in Real Time" Process Builder.</strong> If this is enabled, all the messages will be sent from Job Mode.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/SMS-Preference.png" alt="SMS Preference setting"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Link Shortening changes</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Users can customize whether they want a particular link to be shortened or not. You can stop a link from shortening by adding "tsd=NA" at the end of the link.</p>
                                    <div class="rn-info-box">
                                        Example: <span style="color:#dc3545;">CompanyName.com/tsd=NA</span>
                                    </div>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Stop-link.png" alt="Stop link shortening"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Enhance iText Reply</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, there was a delay in the outbound replies for iText. It can be resolved by creating a custom setting (itextboosting) to boost speed in iText. The "ReplySMSRest" class should include a call to "itext boosting" before any operations are performed.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">SMS App Owner in General Settings</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>In the SMS App Owner section of the General Settings, initially, all the users with Salesforce licenses were displayed. To avoid long lists due to a large number of users, we have made changes to only display the following users:</p>
                                    <ul>
                                        <li>Users with System Admin Profile</li>
                                        <li>Previous SMS App Owner</li>
                                        <li>Currently logged-in users with edit capability</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Scheduling SMS From Reports</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Earlier, the number of records you could send data to through a report was set to 2000 at a time. Now, the limit has been increased to 50,000. 360 SMS supports scheduling messages to unlimited records from the SMS From Reports component with real-time data.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Drip Campaign</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>In the case of drip through the record owner's email, the Email feature has been enabled. To activate this feature, a custom setting named "EmailSenderAsRecordOwner" should be created in the SMSIncomingAlert record, and the OptOut checkbox field should be enabled.</p>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Opt-in template in Object Setup</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>The Opt-in template in the object setup is now sorted by "Last Modified Date". As a temporary fix, we have implemented a limit of 999 templates to prevent the page from breaking. Additionally, if there are any issues, we can edit old templates to bring them into the list.</p>
                                    <span class="img_Sec"><img src="https://360smsapp.test360degreecloud.in/new-sms/wp-content/themes/thegem-child/images/Link-Objects.png" alt="Linked Objects"></span>
                                </div>
                            </div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Search for Case Object in SMS Composer</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Previously, you could only search Names in the SMS Composer, which is located in the utility bar. Now, the Case object may also be found using the SMS Composer's search feature.</p>
                                </div>
                            </div>

                            <div class="rn-section-title">Minor Bug Fixes:</div>

                            <div class="rn-accordion-item">
                                <div class="rn-accordion-header" onclick="toggleAccordion(this)">
                                    <span class="rn-title">Minor Bug Fixes</span>
                                    <span class="rn-chevron-circle"><i class="bi bi-chevron-down"></i></span>
                                </div>
                                <div class="rn-accordion-body">
                                    <p>Bug fixes and performance improvements.</p>
                                </div>
                            </div>

                        </div>
                    </div><!-- /#version_four_two -->

                </div><!-- /#toggleboxing -->
            </div><!-- /.col-lg-9 -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div><!-- /#main-content -->

<script>
    // ── Tab switching ──────────────────────────────────────────────────────────────
    document.querySelectorAll('.rn-tab-link').forEach(function(link) {
        link.addEventListener('click', function() {
            document.querySelectorAll('.rn-tab-link').forEach(function(l) {
                l.classList.remove('active');
            });
            document.querySelectorAll('.tabcontent').forEach(function(tc) {
                tc.style.display = 'none';
            });
            this.classList.add('active');
            var targetId = this.getAttribute('data-target');
            document.getElementById(targetId).style.display = 'block';
            // sync mobile
            var mob = document.getElementById('mobileDropdown');
            if (mob) mob.value = targetId;
        });
    });

    // ── Mobile dropdown ────────────────────────────────────────────────────────────
    var mobileDropdown = document.getElementById('mobileDropdown');
    if (mobileDropdown) {
        mobileDropdown.addEventListener('change', function() {
            var targetId = this.value;
            document.querySelectorAll('.rn-tab-link').forEach(function(l) {
                l.classList.remove('active');
            });
            document.querySelectorAll('.tabcontent').forEach(function(tc) {
                tc.style.display = 'none';
            });
            var matchingLink = document.querySelector('.rn-tab-link[data-target="' + targetId + '"]');
            if (matchingLink) matchingLink.classList.add('active');
            document.getElementById(targetId).style.display = 'block';
        });
    }

    // ── Accordion toggle ───────────────────────────────────────────────────────────
    function toggleAccordion(header) {
        var item = header.parentElement;
        var body = item.querySelector('.rn-accordion-body');
        var isExpanded = item.classList.contains('expanded');
        if (isExpanded) {
            body.style.display = 'none';
            item.classList.remove('expanded');
        } else {
            body.style.display = 'block';
            item.classList.add('expanded');
        }
    }

    // ── Search ─────────────────────────────────────────────────────────────────────
    document.getElementById('searchF').addEventListener('input', function() {
        var query = this.value.toLowerCase().trim();

        // Filter sidebar links
        document.querySelectorAll('.rn-tab-link').forEach(function(link) {
            var text = link.textContent.toLowerCase();
            link.style.setProperty('display', text.includes(query) ? 'block' : 'none', 'important');
        });

        // Filter accordion content
        document.querySelectorAll('.tabcontent').forEach(function(tab) {
            var matchesFound = false;

            tab.querySelectorAll('.rn-accordion-item').forEach(function(item) {
                var headerText = item.querySelector('.rn-accordion-header').textContent.toLowerCase();
                var bodyText = item.querySelector('.rn-accordion-body').textContent.toLowerCase();

                if (headerText.includes(query) || bodyText.includes(query)) {
                    item.style.setProperty('display', 'block', 'important');
                    matchesFound = true;
                    if (query !== '') {
                        item.classList.add('expanded');
                        item.querySelector('.rn-accordion-body').style.display = 'block';
                    } else {
                        item.classList.remove('expanded');
                        item.querySelector('.rn-accordion-body').style.display = 'none';
                    }
                } else {
                    item.style.setProperty('display', 'none', 'important');
                }
            });

            // Show/hide section headers during search
            tab.querySelectorAll('.rn-section-title').forEach(function(title) {
                title.style.setProperty('display', query !== '' ? 'none' : 'block', 'important');
            });

            // Not found message
            var notFound = tab.querySelector('.notFound');
            if (notFound) notFound.style.display = matchesFound ? 'none' : 'block';
        });
    });

    // ── Auto-open first accordion item on page load ────────────────────────────────
    document.addEventListener('DOMContentLoaded', function() {
        var firstVisible = document.querySelector('.tabcontent:not([style*="display:none"]) .rn-accordion-item');
        if (firstVisible) {
            firstVisible.classList.add('expanded');
            firstVisible.querySelector('.rn-accordion-body').style.display = 'block';
        }
    });
</script>

<?php get_footer(); ?>