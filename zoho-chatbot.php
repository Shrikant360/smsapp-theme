<?php
/**
 * Template Name: Zoho Chatbot
 */
get_header();
?>
<!-- ✅ Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">


<style>
  /* Zoho LP Hero Section */
  
 .top-header-left{
  font-size:16px;
  }
  
  body {
    background: #fff !important;
    font-family: 'Montserrat';
    font-size:inherit;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    text-transform: none;
  }

  h2{
    font-size:3rem;
  }
  h3{
    font-size:1.8rem;
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
    background: url('https://360smsapp.com/wp-content/uploads/2026/02/Human-Like-AI-Conversational-Bot-for-Zoho.jpg') center center/cover no-repeat;
    min-height: 80vh;
    position: relative;
    z-index: -3;
  }

  .chatbot-hero h1 {
    font-size: 5rem;
    line-height: 1.3;
    color: #fff;
  }

  .chatbot-hero p {
    font-size: 2.4rem !important;
    line-height: 36px;
  }

  .chatbot-hero .btn {
    border-radius: 6px;
    transition: all 0.3s ease;
    background:#fff;
  }

  .chatbot-hero .btn:hover {
    transform: translateY(-2px);
    color:#000;
  }

  @media (max-width: 767px) {
    .chatbot-hero {
      margin-top: 40px !important;
      padding-top: 70px;
      padding-bottom: 20px;
    }
  }
</style>


<!-- Hero Section -->
<section class="chatbot-hero d-flex align-items-center text-center text-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10" style="margin-top: -40px;">
        <h1 class="fw-bold mb-3">AI-Powered Zoho Chatbot For 24/7 Engagement</h1>
        <p class="lead mb-5">
          Deliver real-time, intelligent responses with a Zoho-native CRM chatbot that drives better experiences, higher engagement, and more opportunities.
        </p>
        <div class="d-flex justify-content-center gap-5 mt-5">
          <a href="#zoho_form" class="btn btn-outline-dark fw-semibold px-4 py-2" style="font-size: 1.5rem;">Book a Free Demo</a>
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
  	font-weight:500px;
    font-size: 3rem !important;
    padding: 16px 8px 16px 8px;
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
        <div class="expertise-box bg-white shadow-md rounded-4 p-4 text-center mx-auto">
          <p class="mb-0 text-dark fst-italic">
          <span class=" text-primary">13+ years</span> of CRM messaging experience, now powering intelligent, AI-driven automated conversations inside Zoho CRM. 
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ✅ Why Integrate 360 SMS with Zoho CRM -->
<section class="chatbot-integration">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <h2 class="fw-bold mb-5 mt-2 text-dark text-center">Human-Like AI Conversational Bot for Zoho</h2>
      <!-- Left Image -->
      <div class="col-md-6 text-center mb-4 mb-md-0">

        <div class="integration-img position-relative">
          <img src="https://360smsapp.com/wp-content/uploads/2026/02/img-1-1.png" alt="Zoho CRM Integration"
            class="img-fluid">
        </div>
      </div>

      <!-- Right Content -->
      <div class="col-md-6 ps-5">

        <p class="text-muted mb-4">
          Deliver contextual and action-oriented responses—right from your CRM
        </p>
        <ul class="list-unstyled mb-4 fs-6 lh-lg">
          <li class="mb-2"><i class="bi bi-circle text-primary me-2"></i> Zoho chatbot integration, 100% native — no redirection </li>
          <li class="mb-2"><i class="bi bi-circle text-primary me-2"></i> Your data and conversations live in your Zoho CRM
          </li>
          <li class="mb-2"><i class="bi bi-circle text-primary me-2"></i> Go live in minutes with a simple, one-click setup</li>
          <li class="mb-2"><i class="bi bi-circle text-primary me-2"></i> AI that understands CRM context, not just messages
           </li>
        </ul>
        <hr style="border-top:2px dashed #777E90;" class="my-4">
        <p class="small text-muted">
          It’s your all-in-one setup to
          <span class="text-primary text-decoration-none fw-semibold">turn Zoho CRM into a 24/7 engagement engine with AI-powered conversations.</span>
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

  .chatbot-integration {
    background-color: #fff;
    position: relative;
    overflow: hidden;
    border-radius: 60px 60px 0px 0px;
    margin-top: -115px;
    z-index: -2;
    padding-top: 160px;
    padding-bottom: 50px;
  }

  .chatbot-integration p {
    font-size: 1.6rem;
  }

  .chatbot-integration h3 {
    font-size: 1.75rem;
  }

  .chatbot-integration ul li {
    display: flex;
    align-items: center;
    color: #333;
    font-size: 1.8rem;
  }

  .chatbot-integration .integration-img {
    max-width: 480px;
    margin: 0 auto;
  }

  .chatbot-integration .zoho-logo {
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
    .chatbot-integration h3 {
      font-size: 1.5rem;
    }

    .chatbot-integration .zoho-logo {
      width: 60px;
      bottom: -15px;
    }
  }
</style>


<!-- ✅ Zoho CRM Texting Section with Accordion -->
<section class="chatbot-capabilities" style="padding-bottom:50px">
  <div class="container">
    <h2 class="fw-bold text-dark mb-5 mt-5 text-center">
      Zoho CRM Chatbot Across Sales, Service, and Support
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
                Instant Lead Qualification
              </button>
            </h3>
            <div id="collapse1One" class="accordion-collapse collapse show" aria-labelledby="heading1One"
              data-bs-parent="#zohoAccordion1">
              <div class="accordion-body text-muted">
                Qualify leads in real time and route high-intent prospects to sales instantly.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item mb-3 border-0 shadow-sm rounded-3">
            <h3 class="accordion-header" id="heading1Two">
              <button class="accordion-button collapsed fw-semibold " type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse1Two" aria-expanded="false" aria-controls="collapse1Two">
                Automated Demo & Meeting Booking
              </button>
            </h3>
            <div id="collapse1Two" class="accordion-collapse collapse" aria-labelledby="heading1Two"
              data-bs-parent="#zohoAccordion1">
              <div class="accordion-body text-muted">
                Book demos automatically and sync meetings directly with Zoho CRM.
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="accordion-item mb-3 border-0 shadow-sm rounded-3">
            <h3 class="accordion-header" id="heading1Three">
              <button class="accordion-button collapsed fw-semibold " type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse1Three" aria-expanded="false" aria-controls="collapse1Three">
                24/7 Lead Nurturing at Scale
              </button>
            </h3>
            <div id="collapse1Three" class="accordion-collapse collapse" aria-labelledby="heading1Three"
              data-bs-parent="#zohoAccordion1">
              <div class="accordion-body text-muted">
                Engage prospects with personalized, context-aware replies until they’re sales-ready.
              </div>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="accordion-item mb-3 border-0 shadow-sm rounded-3">
            <h3 class="accordion-header" id="heading1Four">
              <button class="accordion-button collapsed fw-semibold " type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse1Four" aria-expanded="false" aria-controls="collapse1Four">
                Customer Query Handling
              </button>
            </h3>
            <div id="collapse1Four" class="accordion-collapse collapse" aria-labelledby="heading1Four"
              data-bs-parent="#zohoAccordion1">
              <div class="accordion-body text-muted">
                Answer common questions and resolve queries instantly even outside business hours.
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Right Column -->
      <div class="col-lg-6 text-center">
        <img src="https://360smsapp.com/wp-content/uploads/2026/02/img-2-1.png" alt="Zoho CRM Texting Dashboard"
          class="img-fluid">
      </div>

    </div>
  </div>
</section>

<section class="chatbot-capabilities py-5">
  <div class="container">
    <div class="row align-items-center justify-content-between order-2 ">

      <!-- Left Column -->
      <div class="col-lg-6 text-center order-2 order-lg-1 ">
        <img src="https://360smsapp.com/wp-content/uploads/2026/02/img-3-1.png" alt="Zoho CRM Texting Dashboard"
          class="img-fluid">
      </div>

      <!-- Right Column -->
      <div class="col-lg-5 mb-4 mb-lg-0 order-1 order-lg-2">
        <!-- ✅ Accordion -->
        <div class="accordion" id="zohoAccordion2">

          <!-- Item 1 -->
          <div class="accordion-item mb-3 border-0 shadow-sm rounded-3">
            <h3 class="accordion-header" id="heading2One">
              <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2One" aria-expanded="true" aria-controls="collapse2One">
                Business Offerings Knowledge Transfer
              </button>
            </h3>
            <div id="collapse2One" class="accordion-collapse collapse show" aria-labelledby="heading2One"
              data-bs-parent="#zohoAccordion2">
              <div class="accordion-body text-muted">
                Answer product questions on pricing, features, and plans to help with buying decisions.
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="accordion-item mb-3 border-0 shadow-sm rounded-3">
            <h3 class="accordion-header" id="heading2Two">
              <button class="accordion-button collapsed fw-semibold " type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2Two" aria-expanded="false" aria-controls="collapse2Two">
                Post Purchase Feedback Collection
              </button>
            </h3>
            <div id="collapse2Two" class="accordion-collapse collapse" aria-labelledby="heading2Two"
              data-bs-parent="#zohoAccordion2">
              <div class="accordion-body text-muted">
                Collect feedback after interactions or purchases to improve future experiences.
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="accordion-item mb-3 border-0 shadow-sm rounded-3">
            <h3 class="accordion-header" id="heading2Three">
              <button class="accordion-button collapsed fw-semibold " type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2Three" aria-expanded="false" aria-controls="collapse2Three">
                Support Requests Management
              </button>
            </h3>
            <div id="collapse2Three" class="accordion-collapse collapse" aria-labelledby="heading2Three"
              data-bs-parent="#zohoAccordion2">
              <div class="accordion-body text-muted">
                Acknowledge and respond to support requests instantly with AI-driven conversations.
              </div>
            </div>
          </div>

          <!-- Item 4 -->
          <div class="accordion-item border-0 shadow-sm rounded-3">
            <h3 class="accordion-header" id="heading2Four">
              <button class="accordion-button collapsed fw-semibold " type="button" data-bs-toggle="collapse"
                data-bs-target="#collapse2Four" aria-expanded="false" aria-controls="collapse2Four">
                High-Volume Ticket Deflection
              </button>
            </h3>
            <div id="collapse2Four" class="accordion-collapse collapse" aria-labelledby="heading2Four"
              data-bs-parent="#zohoAccordion2">
              <div class="accordion-body text-muted">
                Resolve repetitive issues automatically to reduce support workload.
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>


<!-- ✅ CSS -->
<style>
  .chatbot-capabilities {
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
    font-size: 1.8rem;
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
    font-size: 1.8rem;
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
    font-size: 1.6rem;
  }

  @media (max-width: 767px) {
    .chatbot-capabilities h3 {
      font-size: 1.5rem;
    }
  }
</style>


<!-- ✅ Zoho CRM Power Section -->
<section class="chatbot-power-section text-center text-white py-5 mt-5 mx-0 bg-white"
  style="background:url('https://360smsapp.com/wp-content/uploads/2025/11/bg1.png') center center/cover no-repeat;">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <h2 class="fw-bold mb-3 " style="letter-spacing:-0.3px;">
          <span class="highlight-text">Capture More Business with an AI Chatbot in Zoho CRM </span>
        </h2>
        <p class="lead mb-3">
        Turn every chat session into a promising opportunity that comes with qualified leads 
        </p>
        <div class="d-flex justify-content-center gap-5 flex-wrap mt-5">
          <a href="https://marketplace.zoho.in/app/crm/360-sms-for-zoho-crm" target="_blank" class="btn btn-light fw-semibold px-4 py-2">Start free Trial</a>
          <a href="#zoho_form" class="btn btn-outline-light fw-semibold px-4 py-2">Talk to Sales</a>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  /* Zoho CRM Power Section */

  .chatbot-power-section h2 {
    font-size: 3.5rem;
    font-weight: 700;
    color: #00e5ff;
    z-index: 2;
    position: relative;
  }

  .chatbot-power-section p.lead {
    font-size: 3rem;
    color: #e9f3ff;
    z-index: 2;
    position: relative;
  }

  .chatbot-power-section p.small {
    color: #cfe5ff;
  }

  .highlight-text {
    color: #03E5FE;
  }

  .chatbot-power-section .btn {
    border-radius: 6px;
    transition: all 0.3s ease;
    position: relative;
    z-index: 2;
    font-size: 1.5rem;
  }

  .chatbot-power-section .btn:hover {
    transform: translateY(-2px);
  }

  .chatbot-power-section .btn-light {
    color: #002060;
    border: none;
    background: #fff;
  }

  .chatbot-power-section .btn-outline-light {
    border: 2px solid #fff;
    color: #fff;
  }

  .chatbot-power-section .btn-outline-light:hover {
    background: #fff;
    color: #002060;
  }

  @media (max-width: 767px) {
    .chatbot-power-section h2 {
      font-size: 1.5rem;
    }

    .chatbot-power-section::before,
    .chatbot-power-section::after {
      width: 250px;
      height: 250px;
    }
  }
</style>


<style>
  /* AI-led Zoho Messaging Section */
  .zoho-ai {
    background-color: #ffffff;
    padding-top: 60px;
    padding-bottom: 60px;
  }

  .zoho-ai h3 {
    font-size: 3rem;
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
    font-size: 2.3rem;
  }

  .ai-card p {
    font-size: 2rem;
  }

  @media (max-width: 767px) {
    .zoho-ai h3 {
      font-size: 1.5rem;
    }

    .icon-circle {
      width: 50px;
      height: 50px;
    }

    .icon-circle img {
      width: 24px;
    }
  }
</style>


<!-- ✅ Why 360 SMS for Zoho Messaging Section -->
<section class="zoho-benefits py-5">
  <div class="container">
    <!-- Section Heading -->
    <div class="row justify-content-center text-center my-5">
      <div class="col-lg-8 ">
        <h2 class="fw-bold text-dark my-4">Why 360 SMS AI Chatbot integration</h2>
      </div>
    </div>

    <!-- Stat Cards -->
    <div class="row g-4 justify-content-center">

      <!-- Card 1 (Highlighted) -->
      <div class="col-md-4 my-5">
        <div class="benefit-card highlight mx-5 p-4 h-100">
          <h2 class="fw-bold text-primary mb-2">45%</h2>
          <h5 class="fw-semibold text-dark mb-3"> Faster Response Time</h5>
          <p class="text-muted mb-0">
            Engage customers instantly with AI-powered chatbot conversations that eliminate wait times and capture intent the moment it appears. 
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 my-5">
        <div class="benefit-card mx-5 p-4 h-100">
          <h2 class="fw-bold text-primary mb-2">31%</h2>
          <h5 class="fw-semibold text-dark mb-3">Improved Service Quality </h5>
          <p class="text-muted mb-0">
           Deliver accurate, contextual, and consistent responses using CRM-aware AI conversations that feel personal—not scripted. 
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 my-5">
        <div class="benefit-card mx-5 p-4 h-100">
          <h2 class="fw-bold text-primary mb-2">37%</h2>
          <h5 class="fw-semibold text-dark mb-3">More Lead Generation </h5>
          <p class="text-muted mb-0">
            Qualify leads, answer questions, and seize opportunities right away with intelligent chatbot interactions.  
          </p>
        </div>
      </div>

    </div>
  </div>

  <!-- ✅ Free Trial CTA Section -->
  <section class="zoho-trial text-white">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-md-7 mb-3 mb-md-0">
          <h2 class="fw-semibold mb-1">Turn your Zoho CRM into a 24/7 engagement engine with AI-powered conversations 
</h2>
            <p class="mb-0 small">Start with 360 SMS for Zoho for Free! </p>
        </div>
        <div class="col-md-5 text-md-center ">
          <a href="https://marketplace.zoho.in/app/crm/360-sms-for-zoho-crm" target="_blank" class="btn btn-light fw-semibold px-4 py-2 me-5 my-2" style="font-size: 1.5rem;">Start Free Trial</a>
          <a href="#zoho_form" class="btn btn-outline-light fw-semibold px-4 py-2" style="font-size: 1.5rem;">Talk To Sales</a>
        </div>
      </div>
    </div>
  </section>
  <style>
    /* Free Trial CTA Section */
    .zoho-trial {
      background: url('https://360smsapp.com/wp-content/uploads/2025/11/bg2.png') center center/cover no-repeat;
      color: #fff;
      border-radius: 10px;
      margin: 50px auto;
      max-width: 1300px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 0.08);
      padding: 50px 40px 50px 40px;
    }

    .zoho-trial h4 {
      font-size: 1.4rem;
    }
    .zoho-trial h2 {
      font-size: 2rem;
    }

    /* .zoho-trial h2 {
  font-size: 2.4rem;
} */

    .zoho-trial p {
      color: #e4efff;
    }

    .zoho-trial a {
      font-size: 2rem;
    }

    .zoho-trial .btn {
      border-radius: 6px;
      transition: all 0.3s ease;
    }

    .zoho-trial .btn:hover {
      transform: translateY(-2px);
    }

    .zoho-trial .btn-light {
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
      .zoho-trial h4 {
        font-size: 1.2rem;
      }
    }
  </style>

</section>
<style>
  /* Why 360 SMS for Zoho Messaging Section */
  .zoho-benefits {
    background-color: #ffffff;
  }

  .zoho-benefits h3 {
    font-size: 1.8rem;
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
    font-size: 1.96rem;
  }

  .benefit-card p {
    font-size: 1.8rem;
  }

  @media (max-width: 767px) {
    .zoho-benefits h3 {
      font-size: 1.5rem;
    }

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
    <?php echo do_shortcode('[sp_easyaccordion id="66457"]'); ?>
    
  </div>
  
</section>

<style>
  /* FAQ Section */
  #sp-ea-66457.sp-easy-accordion>.sp-ea-single {
    background: #fff !important;
    border-radius: 8px !important;
    border:1px solid #CFCFCF !important;
}
.spcollapse p {
     border-left: none; 
    margin-left: 0px;
    padding-left:0px;
    }
   .sp-collapse p{
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
      <div class="col-md-5 p-4 d-flex justify-content-center">
        <img src="https://360smsapp.com/wp-content/uploads/2025/11/Image-1.png" alt="Contact Support"
          class="img-fluid rounded-4 shadow-sm object-fit-cover" style="max-height:480px;">
      </div>
    </div>
  </div>
</section>
<style>
  /* Section Styling */
  
 #zoho_form {
  scroll-margin-top: 250px; /* Adjust this value to your header height */
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
    font-size: 1.3rem;
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
</style>
<?php// echo do_shortcode('[sp_easyaccordion id="61715"]'); ?>

<?php get_footer(); ?>