<?php
/**
 * Template Name: whatsapp-zoho-integration
 */
get_header();
?>
<!-- ✅ Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


<style>
  /* Zoho LP Hero Section */

  html,
  body {
    overflow-x: hidden !important;
    width: 100%;
    position: relative;
  }

  @media only screen and (max-width: 425px) {
    .nav-101 .icon img {
      height: auto;
    }

  }

  @media screen and (min-device-width: 360px) and (max-device-width: 600px) {

    div.mm-dropdown ul li,
    div.mm-dropdown div.textfirst {
      width: 88px !important;
      height: 26px !important;
      padding-top: 4px !important;
    }

    .phone-icon {
      padding: 5px 4px;
    }

  }

  @media screen and (min-width: 320px) {
    .inp-num {
      width: 95px;
      height: 27px;
      padding-top: 4px;
    }
  }

  .top-header-left {
    font-size: clamp(14px, 1.5vw + 10px, 16px);
  }

  .btnRefresh img {
    width: auto;
  }

  body {
    background: #fff !important;
    font-family: 'Montserrat';
    font-size: inherit;
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
    font-size: clamp(2rem, 4vw + 1rem, 3rem);
  }

  h3 {
    font-size: clamp(1.5rem, 2vw + 1rem, 1.8rem);
  }



  a {
    text-decoration: none;
  }

  h1 {
    font-size: clamp(2.2rem, 5vw + 1rem, 3rem);
  }

  p {
    font-size: clamp(1.2rem, 1.5vw + 1rem, 1.8rem) !important;
  }

  .zoho-hero {
    background: url('https://360smsapp.com/wp-content/uploads/2026/01/hero-bg1.webp') center center/cover no-repeat;
    min-height: 80vh;
    position: relative;
    z-index: -3;
  }

  .zoho-hero h1 {
    font-size: clamp(4rem, 6vw + 1rem, 5rem);
    line-height: 1.2;
    color: #fff;
  }

  .zoho-hero p {
    font-size: clamp(1.5rem, 2.5vw + 1rem, 2.4rem) !important;
    line-height: 1.4;
  }

  .zoho-hero .btn {
    border-radius: 6px;
    transition: all 0.3s ease;
    background: #fff;
  }

  .zoho-hero .btn:hover {
    transform: translateY(-2px);
    color: #000;
  }

  @media (max-width: 767px) {
    .zoho-hero {
      margin-left: 0px;
      margin-right: 0px;
      margin-top: 0px !important;
      padding-top: 70px;
      padding-bottom: 20px;
    }

    #menu-toggle {
      margin-bottom: 8px !important;
    }
  }
</style>


<!-- Hero Section -->
<section class="zoho-hero d-flex align-items-center text-center text-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10" style="margin-top: -40px;">
        <h1 class="fw-bold mb-3">Zoho-native WhatsApp Integration</h1>
        <p class="lead mb-5">
          Reach customers where they respond fastest. Drive higher engagement, faster responses, and more
          conversions
          with AI-powered Zoho WhatsApp messaging.
        </p>
        <div class="d-flex justify-content-center gap-5 mt-5">
          <!-- <a href="#" class="btn btn-light fw-semibold px-4 py-2" style="font-size: clamp(1.2rem, 2vw + 1rem, 1.5rem);">Try it for Free</a>-->
          <a href="#zoho_form" class="btn btn-outline-dark fw-semibold px-4 py-2"
            style="font-size: clamp(1.2rem, 2vw + 1rem, 1.5rem);">Book a Free
            Demo</a>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  /* Expertise Section */
  .zoho-expertise {
    /* background: linear-gradient(to bottom, #002060 0%, #ffffff 100%); */
    position: relative;
    margin-top: -150px;
    z-index: 1;
    /* overlaps slightly with hero */
  }

  .expertise-box {
    /* max-width: 900px; */
    border-radius: 20px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
  }

  .expertise-box p {
    font-size: clamp(1.6rem, 3vw + 1rem, 2.7rem) !important;
    padding: 16px 8px 16px 8px;
  }

  .expertise-box span.text-primary {
    color: #0056b3 !important;
  }

  @media (max-width: 767px) {
    .zoho-expertise {
      margin-top: 0px;
    }
  }
</style>

<!-- ✅ Expertise Section -->
<section class="zoho-expertise py-5 position-relative">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-11">
        <div class="expertise-box bg-white shadow-md rounded-4 p-4 text-center mx-auto">
          <p class="mb-0 text-dark">
            A trusted CRM messaging partner with
            <span class=" text-primary">13+ years of experience</span>,
            now powering AI-driven WhatsApp engagement inside Zoho CRM.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ✅ Powering WhatsApp-First Engagement from Zoho -->
<section class="zoho-integrate">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <h2 class="fw-bold mb-5 mt-2 text-dark text-center">Powering WhatsApp-First Engagement from Zoho</h2>
      <!-- Left Image -->
      <div class="col-md-6 text-center mb-4 mb-md-0">

        <div class="integration-img position-relative">
          <img src="https://360smsapp.com/wp-content/uploads/2026/01/faq-image-1.png" alt="Zoho CRM Integration"
            class="img-fluid">


        </div>
      </div>

      <!-- Right Content -->
      <div class="col-md-6 ps-5">

        <p class="text-muted mb-4">
          Keep every WhatsApp interaction timely, contextual, and action-driven.
        </p>
        <ul class="list-unstyled mb-4 fs-6 lh-lg">
          <li class="mb-3"><i class="bi bi-circle text-primary me-3"></i> 100% Zoho-native WhatsApp integration - no
            external portals.</li>
          <li class="mb-3"><i class="bi bi-circle text-primary me-3"></i> Your data stays inside Zoho, fully secure and
            owned by you.</li>
          <li class="mb-3"><i class="bi bi-circle text-primary me-3"></i> Start WhatsApp messaging in minutes -
            one-click installation.</li>
          <li class="mb-3"><i class="bi bi-circle text-primary me-3"></i> AI-powered WhatsApp messaging for high-impact
            conversations.</li>
        </ul>
        <hr style="border-top:2px dashed #777E90;" class="my-4">
        <p class="small text-muted">
          It’s your all-in-one setup to
          <span class="text-primary text-decoration-none fw-semibold">turn Zoho workflows into real customer
            conversations.</span>
        </p>
      </div>

    </div>
  </div>
</section>
<style>
  /* Why Integrate Section */

  .bi-circle::before {

    font-weight: bolder !important;
    margin-right: 5px;
    color: #499FDD;
  }

  .zoho-integrate {
    background-color: #fff;
    position: relative;
    overflow: hidden;
    border-radius: 60px 60px 0px 0px;
    margin-top: -115px;
    z-index: -2;
    padding-top: 160px;
    padding-bottom: 50px;
  }

  .zoho-integrate p {
    font-size: clamp(1.4rem, 1.5vw + 1rem, 1.6rem);
  }

  .zoho-integrate h3 {
    font-size: clamp(1.5rem, 2vw + 1rem, 1.75rem);
  }

  .zoho-integrate ul li {
    display: flex;
    align-items: flex-start;
    color: #333;
    font-size: clamp(1.4rem, 1.5vw + 1rem, 1.8rem);
    line-height: 1.4;
  }

  .zoho-integrate ul li i {
    margin-top: 4px;
    font-size: clamp(1.2rem, 1vw + 1rem, 1.4rem);
  }

  .zoho-integrate .integration-img {
    max-width: 480px;
    margin: 0 auto;
  }

  .zoho-integrate .zoho-logo {
    width: 70px;
    bottom: -20px;
    left: 50%;
    transform: translateX(-50%);
  }

  .bi-check-circle-fill {
    font-size: 1rem;
    vertical-align: middle;
  }

  /* Responsive tweaks */
  @media (max-width: 767px) {
    /* Font size handled by clamp */

    .zoho-integrate .zoho-logo {
      width: 60px;
      bottom: -15px;
    }
  }
</style>


<!-- ✅ Zoho CRM Texting Section with Accordion -->
<section class="zoho-texting py-5">
  <div class="container">
    <h2 class="fw-bold text-dark mb-5 mt-5 text-center">
      Zoho CRM Texting Solutions that Boosts Conversions
    </h2>
    <div class="row align-items-center justify-content-between pt-5">

      <!-- Left Column -->
      <div class="col-lg-5 mb-4 mb-lg-0">
        <!-- ✅ Accordion -->
        <div class="accordion" id="zohoAccordion1">

          <!-- Item 1 -->
          <div class="accordion-item mb-3 border-0 shadow-sm rounded-3">
            <h3 class="accordion-header" id="heading1One">
              <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse1One" aria-expanded="true" aria-controls="collapse1One">
                Send WhatsApp Messages Directly from Zoho CRM
              </button>
            </h3>
            <div id="collapse1One" class="accordion-collapse collapse show" aria-labelledby="heading1One"
              data-bs-parent="#zohoAccordion1">
              <div class="accordion-body text-muted">
                Receive real-time alerts and send automated WhatsApp messages for reminders, follow-ups,
                and customer
                engagement directly from Zoho CRM.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item mb-3 border-0 shadow-sm rounded-3">
            <h3 class="accordion-header" id="heading1Two">
              <button class="accordion-button collapsed fw-semibold " type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse1Two" aria-expanded="false" aria-controls="collapse1Two">
                Manage Conversations in One Unified Inbox
              </button>
            </h3>
            <div id="collapse1Two" class="accordion-collapse collapse" aria-labelledby="heading1Two"
              data-bs-parent="#zohoAccordion1">
              <div class="accordion-body text-muted">
                Unify and manage every WhatsApp chat in a single view for effortless, personalized
                customer
                interactions.
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="accordion-item mb-3 border-0 shadow-sm rounded-3">
            <h3 class="accordion-header" id="heading1Three">
              <button class="accordion-button collapsed fw-semibold " type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse1Three" aria-expanded="false" aria-controls="collapse1Three">
                Scale with Personalized Bulk Messaging
              </button>
            </h3>
            <div id="collapse1Three" class="accordion-collapse collapse" aria-labelledby="heading1Three"
              data-bs-parent="#zohoAccordion1">
              <div class="accordion-body text-muted">
                Send personalized WhatsApp campaigns to large groups directly from Zoho—without losing
                the personal
                touch.
              </div>
            </div>
          </div>


          <!-- Item 4 -->
          <div class="accordion-item mb-3 border-0 shadow-sm rounded-3">
            <h3 class="accordion-header" id="heading1Four">
              <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse1Four" aria-expanded="false" aria-controls="collapse1Four">
                Never Miss a Customer Response
              </button>
            </h3>
            <div id="collapse1Four" class="accordion-collapse collapse" aria-labelledby="heading1Four"
              data-bs-parent="#zohoAccordion1">
              <div class="accordion-body text-muted">
                Receive instant alerts for incoming WhatsApp messages. Respond promptly, follow up on
                time, and drive
                faster engagement.
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Right Column -->
      <div class="col-lg-6 text-center">
        <img src="https://360smsapp.com/wp-content/uploads/2026/01/faq-image-3.png" alt="Zoho CRM Texting Dashboard"
          class="img-fluid">
      </div>

    </div>
  </div>
</section>

<section class="zoho-texting py-5">
  <div class="container">
    <div class="row align-items-center justify-content-between ">

      <!-- Left Column -->
      <div class="col-lg-6 text-center desktop-view">
        <img src="https://360smsapp.com/wp-content/uploads/2026/01/faq-image-2.png" alt="Zoho CRM Texting Dashboard"
          class="img-fluid">
      </div>

      <!-- Right Column -->
      <div class="col-lg-5 mb-4 mb-lg-0">
        <!-- ✅ Accordion -->
        <div class="accordion" id="zohoAccordion2">



          <!-- Item 1 -->
          <div class="accordion-item mb-3 border-0 shadow-sm rounded-3">
            <h3 class="accordion-header" id="heading2One">
              <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2One" aria-expanded="true" aria-controls="collapse2One">
                Automate Workflows Effortlessly
              </button>
            </h3>
            <div id="collapse2One" class="accordion-collapse collapse show" aria-labelledby="heading2One"
              data-bs-parent="#zohoAccordion2">
              <div class="accordion-body text-muted">
                Trigger WhatsApp messages from any Zoho CRM object and workflow automatically—no coding
                required,
                minimal manual effort.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item mb-3 border-0 shadow-sm rounded-3">
            <h3 class="accordion-header" id="heading2Two">
              <button class="accordion-button collapsed fw-semibold " type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2Two" aria-expanded="false" aria-controls="collapse2Two">
                Stay Compliant and Mitigate Risk
              </button>
            </h3>
            <div id="collapse2Two" class="accordion-collapse collapse" aria-labelledby="heading2Two"
              data-bs-parent="#zohoAccordion2">
              <div class="accordion-body text-muted">
                Leverage built-in opt-in/opt-out management to follow TCPA, GDPR, and other
                regulations—ensuring safe
                and compliant WhatsApp communication.
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="accordion-item mb-3 border-0 shadow-sm rounded-3">
            <h3 class="accordion-header" id="heading2Three">
              <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2Three" aria-expanded="false" aria-controls="collapse2Three">
                Boost Brand Awareness with Branded Links
              </button>
            </h3>
            <div id="collapse2Three" class="accordion-collapse collapse" aria-labelledby="heading2Three"
              data-bs-parent="#zohoAccordion2">
              <div class="accordion-body text-muted">
                Share shortened, custom-branded WhatsApp links to promote your brand, track engagement,
                and measure
                click-through rates in real time.
              </div>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="accordion-item mb-3 border-0 shadow-sm rounded-3">
            <h3 class="accordion-header" id="heading2Four">
              <button class="accordion-button collapsed fw-semibold " type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2Four" aria-expanded="false" aria-controls="collapse2Four">
                Organize Templates for Instant Access
              </button>
            </h3>
            <div id="collapse2Four" class="accordion-collapse collapse" aria-labelledby="heading2Four"
              data-bs-parent="#zohoAccordion2">
              <div class="accordion-body text-muted">
                Create, categorize, and reuse WhatsApp message templates, making campaigns faster and
                more efficient.
              </div>
            </div>
          </div>

          <!-- Item 5 -->
          <div class="accordion-item border-0 shadow-sm rounded-3">
            <h3 class="accordion-header" id="heading2Five">
              <button class="accordion-button collapsed fw-semibold " type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2Five" aria-expanded="false" aria-controls="collapse2Five">
                Schedule Messages to Maximize Impact
              </button>
            </h3>
            <div id="collapse2Five" class="accordion-collapse collapse" aria-labelledby="heading2Five"
              data-bs-parent="#zohoAccordion2">
              <div class="accordion-body text-muted">
                Plan WhatsApp messages in advance and deliver them at the ideal time to increase
                engagement, responses,
                and conversions.
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Left Column mobile -->
      <div class="col-lg-6 text-center mob-view">
        <img src="https://360smsapp.com/wp-content/uploads/2026/01/faq-image-2.png" alt="Zoho CRM Texting Dashboard"
          class="img-fluid">
      </div>

    </div>
  </div>
</section>

<!-- ✅ CSS  zoho texting -->
<style>
  .mob-view {
    display: none;
  }

  @media (max-width: 600px) {
    .mob-view {
      display: block;
    }

    .desktop-view {
      display: none;
    }
  }

  .zoho-texting {
    background-color: #f8fbff;
  }

  .accordion-item {
    background: #fff;
    border-radius: 8px !important;
    overflow: hidden;
  }

  .accordion-button {
    background: #fff;
    border: none;
    font-size: clamp(1.4rem, 2vw + 1rem, 1.8rem);
    position: relative;
    color: #0C77B7;
  }

  .accordion-button::after {
    display: none !important;
  }

  .accordion-button::before {
    content: "+";
    position: absolute;
    right: 1.25rem;
    font-weight: 600;
    color: #0C77B7;
    font-size: clamp(1.4rem, 2vw + 1rem, 1.8rem);
  }

  .accordion-button:not(.collapsed)::before {
    content: "−";
  }

  .accordion-button:not(.collapsed) {
    background: #fff;
    color: #0C77B7;
    font-weight: 600;
  }

  .accordion-body {
    background: #fff;
    font-size: clamp(1.3rem, 1.5vw + 1rem, 1.6rem);
  }

  @media (max-width: 767px) {
    /* Font size handled by clamp */
  }
</style>


<!-- ✅ Zoho CRM Power Section -->
<section class="zoho-crm-power text-center text-white py-5 mt-5 mx-0 bg-white"
  style="background:url('https://360smsapp.com/wp-content/uploads/2026/01/bg1.webp') center center/cover no-repeat;">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <h2 class="fw-bold mb-3 " style="letter-spacing:-0.3px;">
          <span class="highlight-text">Connect, Engage, and Close Faster with WhatsApp in Zoho</span>
        </h2>
        <p class="lead mb-3">
          Engage leads instantly on WhatsApp from Zoho CRM and turn every message into a closed deal.
        </p>
        <p class="mt-4 mb-5 pb-3 pt-2">
          Have questions related to 360 SMS for Zoho CRM?
        </p>
        <div class="d-flex justify-content-center gap-5 flex-wrap">
          <a href="https://marketplace.zoho.in/app/crm/360-sms-for-zoho-crm" target="_blank"
            class="btn btn-light fw-semibold px-4 py-2">Try For Free</a>
          <a href="#zoho_form" class="btn btn-outline-light fw-semibold px-4 py-2">Book a Free Demo</a>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  /* Zoho CRM Power Section */

  .zoho-crm-power h2 {

    font-weight: 700;
    color: #00e5ff;
    z-index: 2;
    position: relative;
  }

  .zoho-crm-power p.lead {

    color: #e9f3ff;
    z-index: 2;
    position: relative;
  }

  .zoho-crm-power p.small {
    color: #cfe5ff;
  }

  .highlight-text {
    color: #03E5FE;
  }

  .zoho-crm-power .btn {
    border-radius: 6px;
    transition: all 0.3s ease;
    position: relative;
    z-index: 2;
    font-size: clamp(1.1rem, 1.5vw + 1rem, 1.5rem);
  }

  .zoho-crm-power .btn:hover {
    transform: translateY(-2px);
  }

  .zoho-crm-power .btn-light {
    color: #002060;
    border: none;
    background: #fff;
  }

  .zoho-crm-power .btn-outline-light {
    border: 2px solid #fff;
    color: #fff;
  }

  .zoho-crm-power .btn-outline-light:hover {
    background: #fff;
    color: #002060;
  }

  @media (max-width: 767px) {
    .zoho-crm-power h2 {}

    .zoho-crm-power::before,
    .zoho-crm-power::after {
      width: 250px;
      height: 250px;
    }
  }
</style>

<!-- ✅ AI-led Zoho Messaging Section -->
<section class="zoho-ai" style="padding-top:60px; padding-bottom:60px;">
  <div class="container">
    <!-- Section Heading -->
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-8 my-3">
        <h2 class="fw-bold text-dark">
          Elevate Interactions with AI-powered WhatsApp for Zoho CRM
        </h2>
      </div>
    </div>

    <!-- Feature Grid -->
    <div class="row g-4 justify-content-center">
      <!-- Card 1 -->
      <div class="col-md-5 col-lg-5">
        <div class="ai-card p-4 h-100">
          <div class="d-flex align-items-start gap-5">
            <div class="pt-3">
              <img src="https://360smsapp.com/wp-content/uploads/2025/11/logo1.png" alt="Templates">
            </div>
            <div class="p-4">
              <h5 class="fw-semibold text-dark mb-2">Templates</h5>
              <p class="text-muted mb-0">
                Leverage AI to craft personalized WhatsApp message templates that drive higher
                engagement and meaningful
                responses.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-5 col-lg-5">
        <div class="ai-card p-4 h-100">
          <div class="d-flex align-items-start gap-5">
            <div class="pt-3">
              <img src="https://360smsapp.com/wp-content/uploads/2025/11/logo2.png" alt="WhatsApp Compliance with AI">
            </div>
            <div class="p-4">
              <h5 class="fw-semibold text-dark mb-2">Compliance</h5>
              <p class="text-muted mb-0">
                Automatically manage WhatsApp messaging compliance—TCPA, GDPR, and consent—based on
                customer behavior
                and intent.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-5 col-lg-5">
        <div class="ai-card p-4 h-100">
          <div class="d-flex align-items-start gap-5">
            <div class="pt-3">
              <img src="https://360smsapp.com/wp-content/uploads/2025/11/logo3.png" alt="WhatsApp AI Replies">
            </div>
            <div class="p-4">
              <h5 class="fw-semibold text-dark mb-2">AI Replies</h5>
              <p class="text-muted mb-0">
                Receive AI-generated WhatsApp reply suggestions tailored to each ongoing conversation,
                helping teams
                respond faster and smarter.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-5 col-lg-5">
        <div class="ai-card p-4 h-100">
          <div class="d-flex align-items-start gap-5">
            <div class="pt-3">
              <img src="https://360smsapp.com/wp-content/uploads/2025/11/logo4.png" alt="WhatsApp ChatAgent">
            </div>
            <div class="p-4">
              <h5 class="fw-semibold text-dark mb-2">ChatAgent</h5>
              <p class="text-muted mb-0">
                Keep conversations alive round-the-clock with an AI chatbot that handles incoming
                WhatsApp messages
                instantly—never miss a lead.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  /* AI-led Zoho Messaging Section */
  .zoho-ai {
    background-color: #ffffff;
    padding-top: 60px;
    padding-bottom: 60px;
  }

  .zoho-ai h3 {
    font-size: clamp(1.8rem, 4vw + 1rem, 3rem);
    line-height: 1.4;
  }

  .ai-card {
    background: #f9fbff;
    border-radius: 10px;
    transition: all 0.3s ease;
    border: 1px solid #edf2fa;
  }

  .ai-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
  }

  .icon-circle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: #0b3b75;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .icon-circle img {
    width: 28px;
    height: 28px;
    object-fit: contain;
  }

  .ai-card h5 {
    font-size: clamp(1.6rem, 2vw + 1rem, 2.3rem);
  }

  .ai-card p {
    font-size: clamp(1.3rem, 1.5vw + 1rem, 2rem);
  }

  @media (max-width: 767px) {
    /* Font size handled by clamp */

    .icon-circle {
      width: 50px;
      height: 50px;
    }

    .icon-circle img {
      width: 24px;
    }
  }
</style>

<!-- ✅ Testimonials Section -->
<!-- <section class="zoho-testimonials py-5">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-8 pt-5">
        <h2 class="fw-bold text-dark">Success Stories from 360 SMS WhatsApp Users</h2>
      </div>
    </div>

    <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="3"></button>
      </div>

      <div class="carousel-inner py-5">
        <div class="carousel-item active">
          <div class="row justify-content-between">
            <div class="col-md-6 col-lg-5">
              <div class="testimonial-wrapper position-relative">
                <div class="quote-icon position-absolute">
                  <i class="bi bi-quote text-white"></i>
                </div>
                <div class="testimonial-card p-5">
                  <div class="stars mb-2">
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                  </div>
                  <?php echo '<p class="text-muted mb-4">' . esc_html(mb_strimwidth("“I’m very pleased with the app and the customer service. They go above and beyond to resolve our issues. The team provides great feedback and is always there to help whenever we need them. I look forward to continuing to work with them.”", 0, 220, '...')) . '</p>'; ?>
                  <div class="border-top pt-3">
                    <h6 class=" mb-0">Khansaa Algassid</h6>
                    <p class="text-muted">Administrator | Zaman International Michigan</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <div class="testimonial-wrapper position-relative">
                <div class="quote-icon position-absolute">
                  <i class="bi bi-quote text-white"></i>
                </div>
                <div class="testimonial-card p-5">
                  <div class="stars mb-2">
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                  </div>
                  <?php echo '<p class="text-muted mb-4">' . esc_html(mb_strimwidth("“We have been using the 360 SMS app for the past few months. It was a seamless setup, and it is very easy to use; not much training is needed for the users. The team is very knowledgeable, and we have also been receiving the best support from their team.”", 0, 220, '...')) . '</p>'; ?>
                  <div class="border-top pt-3">
                    <h6 class=" mb-0">Wesley Gordon</h6>
                    <p class="text-muted">IT Manager | Global Vision International</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="row justify-content-between">
            <div class="col-md-6 col-lg-5">
              <div class="testimonial-wrapper position-relative">
                <div class="quote-icon position-absolute">
                  <i class="bi bi-quote text-white"></i>
                </div>
                <div class="testimonial-card p-5">
                  <div class="stars mb-2">
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                  </div>
                  <?php echo '<p class="text-muted mb-4">' . esc_html(mb_strimwidth("“We have been using the 360 SMS app for the past few months. It was a seamless setup, and it is very easy to use; not much training is needed for the users. The team is very knowledgeable, and we have also been receiving the best support from their team.”", 0, 220, '...')) . '</p>'; ?>
                  <div class="border-top pt-3">
                    <h6 class=" mb-0">Wesley Gordon</h6>
                    <p class="text-muted">IT Manager | Global Vision International</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <div class="testimonial-wrapper position-relative">
                <div class="quote-icon position-absolute">
                  <i class="bi bi-quote text-white"></i>
                </div>
                <div class="testimonial-card p-5">
                  <div class="stars mb-2">
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                  </div>
                  <?php echo '<p class="text-muted mb-4">' . esc_html(mb_strimwidth("“We have been using the 360 SMS App for a while now and really enjoy it. The Customer Service and Support team is top-notch and has fixed any issues we've had. I had a recent experience with the team, and they were able to help me implement new AI tools and get them running when there was an issue.”", 0, 220, '...')) . '</p>'; ?>
                  <div class="border-top pt-3">
                    <h6 class=" mb-0">Stephanie Hack</h6>
                    <p class="text-muted">Administrator | Rapley Classic Cars Connecticu</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="row justify-content-between">
            <div class="col-md-6 col-lg-5">
              <div class="testimonial-wrapper position-relative">
                <div class="quote-icon position-absolute">
                  <i class="bi bi-quote text-white"></i>
                </div>
                <div class="testimonial-card p-5">
                  <div class="stars mb-2">
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                  </div>
                  <?php echo '<p class="text-muted mb-4">' . esc_html(mb_strimwidth("“We have been using the 360 SMS App for a while now and really enjoy it. The Customer Service and Support team is top-notch and has fixed any issues we've had. I had a recent experience with the team, and they were able to help me implement new AI tools and get them running when there was an issue.”", 0, 220, '...')) . '</p>'; ?>
                  <div class="border-top pt-3">
                    <h6 class=" mb-0">Stephanie Hack</h6>
                    <p class="text-muted">Administrator | Rapley Classic Cars Connecticu</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <div class="testimonial-wrapper position-relative">
                <div class="quote-icon position-absolute">
                  <i class="bi bi-quote text-white"></i>
                </div>
                <div class="testimonial-card p-5">
                  <div class="stars mb-2">
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                  </div>
                  <?php echo '<p class="text-muted mb-4">' . esc_html(mb_strimwidth("“Nice app! It’s very quick and easy to use. The installation went smoothly, and the 360 SMS team was very helpful throughout the installation process. My customer is very happy with the results. Highly recommended!”", 0, 220, '...')) . '</p>'; ?>
                  <div class="border-top pt-3">
                    <h6 class=" mb-0">Diede O.</h6>
                    <p class="text-muted">Salesforce Consultant | Welisa</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item">
          <div class="row justify-content-between">
            <div class="col-md-6 col-lg-5">
              <div class="testimonial-wrapper position-relative">
                <div class="quote-icon position-absolute">
                  <i class="bi bi-quote text-white"></i>
                </div>
                <div class="testimonial-card p-5">
                  <div class="stars mb-2">
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                  </div>
                  <?php echo '<p class="text-muted mb-4">' . esc_html(mb_strimwidth("“Nice app! It’s very quick and easy to use. The installation went smoothly, and the 360 SMS team was very helpful throughout the installation process. My customer is very happy with the results. Highly recommended!”", 0, 220, '...')) . '</p>'; ?>
                  <div class="border-top pt-3">
                    <h6 class=" mb-0">Diede O.</h6>
                    <p class="text-muted">Salesforce Consultant | Welisa</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <div class="testimonial-wrapper position-relative">
                <div class="quote-icon position-absolute">
                  <i class="bi bi-quote text-white"></i>
                </div>
                <div class="testimonial-card p-5">
                  <div class="stars mb-2">
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                  </div>
                  <?php echo '<p class="text-muted mb-4">' . esc_html(mb_strimwidth("“I’m very pleased with the app and the customer service. They go above and beyond to resolve our issues. The team provides great feedback and is always there to help whenever we need them. I look forward to continuing to work with them.”", 0, 220, '...')) . '</p>'; ?>
                  <div class="border-top pt-3">
                    <h6 class=" mb-0">Khansaa Algassid</h6>
                    <p class="text-muted">Administrator | Zaman International Michigan</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>

<style>
  @media (max-width: 767px) {
    .quote-icon i {
      position: relative;
      top: 22px;
      left: -8px;
    }
  }

  .zoho-testimonials {
    background-color: #EDF2FF;
  }

  .zoho-testimonials h3 {
    font-size: clamp(1.5rem, 2vw + 1rem, 1.8rem);
    line-height: 1.4;
  }

  .testimonial-wrapper {
    position: relative;
    padding-top: 20px;
  }

  .testimonial-card {
    background: #fff;
    border-radius: 10px;
    position: relative;
    box-shadow: -13px -13px 20px 6px rgba(122, 122, 122, 0.06);
    overflow: visible;
    height: 100%;
  }

  .testimonial-card::after {
    content: "";
    position: absolute;
    bottom: 0;
    right: 0;
    width: 0;
    height: 0;
    border-bottom: 30px solid #EDF2FF;
    border-left: 30px solid transparent;
  }

  .quote-icon {
    top: 0;
    left: 25px;
    width: 45px;
    height: 45px;
    background-color: #0046d5;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2;
    transform: translateY(-25%);
  }

  .quote-icon i {
    font-size: clamp(1.2rem, 1.5vw + 1rem, 1.6rem);
    line-height: 0;
  }

  .stars i {
    font-size: clamp(0.8rem, 0.5vw + 0.5rem, 1rem);
    margin-right: 3px;
  }

  .testimonial-card p {
    font-size: clamp(1.3rem, 1.5vw + 1rem, 1.6rem) !important;
    line-height: 1.6;
  }

  .testimonial-card h6 {
    color: #1a1a1a;
    font-size: clamp(1.4rem, 2vw + 1rem, 1.8rem);
  }

  .carousel-control-prev,
  .carousel-control-next {
    width: 50px;
    height: 50px;
    background-color: #0046d5;
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
    opacity: 1;
  }

  .carousel-control-prev {
    left: -25px;
  }

  .carousel-control-next {
    right: -25px;
  }

  .carousel-control-prev:hover,
  .carousel-control-next:hover {
    background-color: #003bb5;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    width: 20px;
    height: 20px;
  }

  .carousel-indicators {
    margin-bottom: -30px;
  }

  .carousel-indicators button {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: #0046d5;
    opacity: 0.5;
  }

  .carousel-indicators button.active {
    opacity: 1;
  }

  @media (max-width: 767px) {
    .zoho-testimonials h3 {
      /* Font size handled by clamp */
    }

    .quote-icon {
      left: 20px;
      width: 40px;
      height: 40px;
    }

    .carousel-control-prev,
    .carousel-control-next {
      width: 30px;
      height: 30px;
    }

    .carousel-control-prev {
      left: 0px;
    }

    .carousel-control-next {
      right: 0px;
    }
  }
</style> -->

<!-- ✅ Why 360 SMS for Zoho Messaging Section -->
<section class="zoho-benefits py-5">
  <div class="container">
    <!-- Section Heading -->
    <div class="row justify-content-center text-center my-5">
      <div class="col-lg-8 ">
        <h2 class="fw-bold text-dark my-4">Why Zoho CRM WhatsApp integration with 360 SMS</h2>
      </div>
    </div>

    <!-- Stat Cards -->
    <div class="row g-4 justify-content-center">

      <!-- Card 1 -->
      <div class="col-md-4 my-5">
        <div class="benefit-card mx-5 p-4 h-100">
          <h2 class="fw-bold text-primary mb-2">35%</h2>
          <h5 class="fw-semibold text-dark mb-3">More Responses</h5>
          <p class="text-muted mb-0">
            Reach customers where they respond fastest, with contextual messages that spark more
            interactions and
            meaningful responses.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 my-5">
        <div class="benefit-card mx-5 p-4 h-100">
          <h2 class="fw-bold text-primary mb-2">40%</h2>
          <h5 class="fw-semibold text-dark mb-3">Higher Customer Satisfaction</h5>
          <p class="text-muted mb-0">
            Keep conversations relevant and responsive with AI-backed WhatsApp interactions and boost
            customer
            satisfaction.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 my-5">
        <div class="benefit-card mx-5 p-4 h-100">
          <h2 class="fw-bold text-primary mb-2">25%</h2>
          <h5 class="fw-semibold text-dark mb-3">More Conversions</h5>
          <p class="text-muted mb-0">
            Send timely, personalized WhatsApp messages that guide leads through the funnel and close deals
            faster.
          </p>
        </div>
      </div>

    </div>
  </div>

  <!-- ✅ Free Trial CTA Section -->
  <section class="zoho-trial text-white">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md-8 mb-3 mb-md-0">
          <h2 class="fw-semibold mb-1">Turn every WhatsApp conversation into a sales opportunity—right from Zoho CRM
          </h2>
          <p class="mb-0 small">Start Your Free Trial Today!</p>
        </div>
        <div
          class="col-md-4 d-flex justify-content-center justify-content-md-end align-items-center gap-3 gap-md-5 px-0">
          <a href="https://marketplace.zoho.in/app/crm/360-sms-for-zoho-crm" target="_blank"
            class="btn btn-light fw-bold py-2 my-2">Start Free Trial</a>
          <a href="#zoho_form" class="btn btn-outline-light fw-semibold py-2 my-2">Talk To Sales</a>
        </div>
      </div>
    </div>
  </section>
  <style>
    /* Free Trial CTA Section */
    .zoho-trial {
      background: url('https://360smsapp.com/wp-content/uploads/2026/01/bg2.webp') center center/cover no-repeat;
      color: #fff;
      border-radius: 10px;
      margin: 50px auto;
      max-width: 1300px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
      padding: 50px 40px 50px 40px;
    }

    .zoho-trial h4 {
      font-size: clamp(1.1rem, 1vw + 1rem, 1.4rem);
    }

    .zoho-trial h2 {
      font-size: clamp(1.5rem, 2vw + 1rem, 2rem);
    }

    /* .zoho-trial h2 {
  font-size: 2.4rem;
} */

    .zoho-trial p {
      color: #e4efff;
    }

    .zoho-trial a {
      font-size: clamp(1.2rem, 1.5vw + 1rem, 1.5rem);
    }

    @media (max-width: 767px) {
      .zoho-trial a {
        font-size: 1.6rem !important;
        padding-left: 12px !important;
        padding-right: 12px !important;
      }
    }

    .zoho-trial .btn {
      border-radius: 6px;
      transition: all 0.3s ease;
    }

    .zoho-trial .btn:hover {
      transform: translateY(-2px);
    }

    .zoho-trial .btn-light {
      border: 2px solid #fff !important;
      background: #fff;
      color: #002060;
      border: none;
    }

    .zoho-trial .btn-outline-light {
      border: 2px solid #fff;
      color: #fff;
    }

    .zoho-trial .btn-outline-light:hover {
      background: #fff;
      color: #002060;
    }

    @media (max-width: 767px) {
      /* Font size handled by clamp */
    }
  </style>

</section>
<style>
  /* Why 360 SMS for Zoho Messaging Section */
  .zoho-benefits {
    background-color: #ffffff;
  }

  .zoho-benefits h3 {
    font-size: clamp(1.4rem, 2vw + 1rem, 1.8rem);
    line-height: 1.4;
  }

  .benefit-card {
    background-color: #f9fbff;
    border-radius: 10px;
    transition: all 0.3s ease;
    border: 1px solid #f1f4fa;
    padding: 35px 25px 35px 25px !important;
  }

  .benefit-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.06);
  }

  /* Highlighted first card */
  /* .benefit-card.highlight {
  border: 2px solid #a259ff;
} */

  .benefit-card h1 {
    /* font-size: 2rem; */
    color: #00579B !important;
  }

  .benefit-card h5 {
    font-size: clamp(1.6rem, 2vw + 1rem, 2rem);
  }

  .benefit-card p {
    font-size: clamp(1.4rem, 1.5vw + 1rem, 1.8rem);
  }

  @media (max-width: 767px) {
    /* Font size handled by clamp */

    .benefit-card {
      text-align: center;
    }
  }
</style>



<!-- ✅ FAQ Section -->
<section class="zoho-faq py-5">
  <div class="container">
    <!-- Heading -->
    <div class="row justify-content-center text-center mb-5 pb-5">
      <div class="col-lg-8">
        <h2 class="fw-bold text-dark mb-2">FAQs</h2>
        <div class="faq-underline mx-auto"></div>
      </div>
    </div>
    <?php echo do_shortcode('[sp_easyaccordion id="66123"]'); ?>

  </div>

</section>

<style>
  /* FAQ Section */
  #sp-ea-66123.sp-easy-accordion>.sp-ea-single {
    background: #fff !important;
    border-radius: 8px !important;
    border: 1px solid #CFCFCF !important;
  }

  .spcollapse p {
    border-left: none;
    margin-left: 0px;
    padding-left: 0px;
  }

  .sp-collapse p {
    margin-left: 20px !important;
  }
</style>

<div id="zoho_form"></div>

<!-- ✅ Bootstrap Section -->
<section class="contact-form-section py-5 bg-white">
  <div class="container">
    <div class="row align-items-center justify-content-center overflow-hidden bg-white">

      <!-- Left: Form -->
      <div class="col-md-5 p-5">
        <h2 class="fw-bold mb-5" style="color:#b55a3c;">Got a Question?</h2>

        <!-- ✅ Render Form Shortcode -->
        <?php echo do_shortcode('[contact_pageshortcode]'); ?>
      </div>

      <!-- Right: Image -->
      <div class="col-md-5 p-4 d-flex justify-content-center hidden-mob-img">
        <img src="https://360smsapp.com/wp-content/uploads/2026/01/Image-1.webp" alt="Contact Support"
          class="img-fluid rounded-4 shadow-sm object-fit-cover" style="max-height:480px;">
      </div>
    </div>
  </div>
</section>
<style>
  /* Section Styling */

  #zoho_form {
    scroll-margin-top: 250px;
    /* Adjust this value to your header height */
  }

  .contact-form-section {
    background-color: #f8fbff;
  }

  .contact-form-section .selected-flag,
  input#country_selector {
    height: 42px !important;
  }

  /* Form Fields */
  .contact-form-section form input,
  .contact-form-section form select,
  .contact-form-section form textarea,
  .contact-form-section form fieldset,
  .contact-form-section form email {
    border: 1px solid #d6dce5;
    border-radius: 8px !important;
    box-shadow: none;
    padding: 10px 14px;
    font-size: clamp(1rem, 1vw + 1rem, 1.3rem);
  }

  form div {
    margin-bottom: 0px;
  }


  .contact-form-section form input:focus,
  .contact-form-section form select:focus,
  .contact-form-section form textarea:focus {
    border-color: #0046d5;
    box-shadow: 0 0 0 0.1rem rgba(0, 70, 213, 0.1);
  }

  .contact-form-section form label {
    font-weight: 500;
    color: #333;
  }

  /* Submit Button */
  .contact-form-section form input[type="submit"],
  .contact-form-section form button[type="submit"] {
    background-color: #356ac3;
    color: #fff;
    border: none;
    border-radius: 6px;
    padding: 10px 20px;
    font-weight: 500;
    width: 100%;
    transition: all 0.3s ease;
  }

  .contact-form-section form input[type="submit"]:hover {
    background-color: #2a56a3;
  }

  /* Checkbox and Policy Text */
  .contact-form-section form .wpcf7-list-item-label {
    font-size: 0.9rem;
    color: #555;
  }

  /* Responsive Image Layout */
  @media (max-width: 767px) {
    .cus-width {
      width: 50% !important;
    }

    .hidden-mob-img {
      display: none !important;
    }
  }
</style>

<?php get_footer(); ?>