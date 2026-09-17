<?php
/**
 * Template Name: Partner page
 */
get_header("sms");
?>
<!-- ✅ Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
<!-- ✅ Slick Slider CDN -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />

<style>
/* ============================================================
   ALL STYLES SCOPED TO .pp-wrap — zero global bleed
   ============================================================ */

/* ── Base resets scoped to wrapper ── */

.pp-wrap {
  --bs-body-font-size: 1.8rem !important;
  background: #fff;
}
.pp-wrap a {
  text-decoration: none;
}

.pp-wrap p {
  font-size: 1.8rem !important;
}

.pp-wrap h1,
.pp-wrap h2,
.pp-wrap h3,
.pp-wrap h4,
.pp-wrap h5,
.pp-wrap h6 {
  text-transform: none;
  color: #0b3b75;
  font-weight: 700;
}

.pp-wrap h1 { font-size: 3rem;  line-height: 1.2; }
.pp-wrap h2 { font-size: 3.5rem; line-height: 1.3; }
.pp-wrap h3 { font-size: 2.8rem; line-height: 1.4; }
.pp-wrap h4 { font-size: 2rem; }
.pp-wrap h5 { font-size: 1.8rem; }

@media (max-width: 767px) {
  .pp-wrap h1 { font-size: 2.8rem; }
  .pp-wrap h2 { font-size: 2.25rem; }
  .pp-wrap h3 { font-size: 1.8rem; }
  .pp-wrap h4 { font-size: 1.6rem; }
  .pp-wrap h5 { font-size: 1.4rem; }
}

/* ── Hero ── */
.pp-hero {
  background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;
  min-height: 75vh;
}

.pp-hero h1 {
  font-size: 5rem;
  line-height: 1.3;
  color: #000;
}

.pp-hero p {
  font-size: 2.4rem !important;
  line-height: 36px;
}

.pp-hero .btn {
  border-radius: 6px;
  transition: all 0.3s ease;
  background: #fff;
}

.pp-hero .btn:hover {
  transform: translateY(-2px);
  color: #000;
}

@media (max-width: 767px) {
  .pp-hero {
    margin-top: 40px !important;
    padding-top: 70px;
    padding-bottom: 20px;
  }
}

/* ── Trust Logos ── */
.pp-trust {}

.pp-trust .logo-slider {
  display: flex;
  overflow: hidden;
  padding: 20px 0;
}

.pp-trust .logo-slider.slick-initialized {
  display: block;
}

.pp-trust .logo-item {
  padding: 0 15px;
}

.pp-trust .logo-box {
  background: #f8f8f8;
  border-radius: 15px;
  padding: 20px;
  height: 100px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  margin: 0 auto;
  width: 100%;
  max-width: 220px;
}

.pp-trust .logo-box:hover {
  background: #fff;
  transform: translateY(-5px);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
}

.pp-trust .logo-box img {
  max-width: 90%;
  max-height: 90%;
  object-fit: contain;
}

.pp-trust .slick-prev:before,
.pp-trust .slick-next:before {
  color: #0b3b75;
}

@media (max-width: 767px) {
  .pp-trust {
    margin-top: 20px;
  }

  .pp-trust .logo-box {
    height: 100px;
    padding: 10px;
  }

  .pp-trust .trust-bg-container h2 {
    margin-bottom: 30px !important;
  }
}

/* ── Partner About Slider ── */
.pp-about {
  background-color: #fff;
  overflow: hidden;
}

.pp-about .phone-mockup-container {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  z-index: 1;
}

.pp-about .phone-img {
  width: auto;
  object-fit: contain;
  position: relative;
  z-index: 2;
}

.pp-about .phone-glow {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 120%;
  height: 120%;
  background: radial-gradient(circle, rgba(230, 100, 255, 0.15) 0%, rgba(255, 255, 255, 0) 70%);
  z-index: 1;
  pointer-events: none;
}

.pp-about .custom-carousel-indicators button {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  border: none;
  background-color: #e0e0e0;
  transition: all 0.3s ease;
  padding: 0;
}

.pp-about .custom-carousel-indicators button.active {
  width: 40px;
  border-radius: 10px;
  background-color: #d17a5d;
}

.pp-about .role-item h4 {
  margin-bottom: 5px;
}

/* ── Why Partner ── */
.pp-why {
  background-color: #fff;
  position: relative;
  overflow: hidden;
  z-index: 0;
  padding-top: 50px;
  padding-bottom: 50px;
}

.pp-why p {
  font-size: 1.6rem;
}

.pp-why h3 {
  font-size: 1.75rem;
}

.pp-why ul li {
  display: flex;
  align-items: flex-start;
  color: #333;
  font-size: 1.8rem;
  line-height: 1.6;
  margin-bottom: 1.5rem !important;
}

.pp-why ul li i {
  margin-top: 0.35em;
  font-size: 1.5rem;
  margin-right: 15px !important;
  color: #0b3b75 !important;
}

.pp-why .pp-bi-circle::before {
  font-weight: bolder !important;
  margin-right: 5px;
  color: #499FDD;
}

.pp-why .integration-img {
  max-width: 480px;
  margin: 0 auto;
}

@media (max-width: 767px) {
  .pp-why h3 { font-size: 1.5rem; }
}

/* ── CTA / Power Section ── */
.pp-cta h2 {
  font-size: 3.5rem;
  font-weight: 700;
  color: #00e5ff;
  z-index: 2;
  position: relative;
}

.pp-cta p.lead {
  font-size: 3rem;
  color: #e9f3ff;
  z-index: 2;
  position: relative;
}

.pp-cta .highlight-text {
  color: #03E5FE;
}

.pp-cta .btn {
  border-radius: 6px;
  transition: all 0.3s ease;
  position: relative;
  z-index: 2;
  font-size: 1.5rem;
}

.pp-cta .btn:hover { transform: translateY(-2px); }

.pp-cta .btn-light {
  color: #002060;
  border: none;
  background: #fff;
}

.pp-cta .btn-outline-light {
  border: 2px solid #fff;
  color: #fff;
}

.pp-cta .btn-outline-light:hover {
  background: #fff;
  color: #002060;
}

@media (max-width: 767px) {
  .pp-cta h2 { font-size: 2.25rem; }
}

/* ── Partnership Types / Benefit Cards ── */
.pp-types {
  background-color: #ffffff;
}

.pp-types h3 {
  font-size: 1.8rem;
  line-height: 1.4;
}

.pp-types .benefit-card {
  background-color: #f9fbff;
  border-radius: 10px;
  transition: all 0.3s ease;
  border: 1px solid #f1f4fa;
  padding: 35px 25px !important;
}

.pp-types .benefit-card:hover {
  transform: translateY(-3px);
  box-shadow: 0 6px 16px rgba(0, 0, 0, 0.06);
}

.pp-types .benefit-card h5 { font-size: 2rem; }
.pp-types .benefit-card p  { font-size: 1.8rem; }

@media (max-width: 767px) {
  .pp-types h3 { font-size: 1.5rem; }
  .pp-types .benefit-card { text-align: center; }
}

/* ── 4 Steps / AI Cards ── */
.pp-steps {
  background-color: #ffffff;
  padding-top: 60px;
  padding-bottom: 60px;
}

.pp-steps h3 {
  font-size: 3rem;
  line-height: 1.4;
}

.pp-steps .ai-card {
  background: #f9fbff;
  border-radius: 10px;
  transition: all 0.3s ease;
  border: 1px solid #edf2fa;
}

.pp-steps .ai-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
}

.pp-steps .icon-circle {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background-color: #0b3b75;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
}

.pp-steps .icon-circle img {
  width: 28px;
  height: 28px;
  object-fit: contain;
}

.pp-steps .ai-card h5 { font-size: 2.3rem; }
.pp-steps .ai-card p  { font-size: 2rem; }

@media (max-width: 767px) {
  .pp-steps h3 { font-size: 1.5rem; }
  .pp-steps .icon-circle { width: 50px; height: 50px; }
  .pp-steps .icon-circle img { width: 24px; }
}

/* ── Testimonials ── */
.pp-testimonials {
  background-color: #EDF2FF;
}

.pp-testimonials h3 {
  font-size: 1.8rem;
  line-height: 1.4;
}

.pp-testimonials .testimonial-wrapper {
  position: relative;
  padding-top: 20px;
}

.pp-testimonials .testimonial-card {
  background: #fff;
  border-radius: 10px;
  position: relative;
  box-shadow: -13px -13px 20px 6px rgba(122, 122, 122, 0.06);
  overflow: visible;
  height: 100%;
}

.pp-testimonials .testimonial-card::after {
  content: "";
  position: absolute;
  bottom: 0;
  right: 0;
  width: 0;
  height: 0;
  border-bottom: 30px solid #EDF2FF;
  border-left: 30px solid transparent;
}

.pp-testimonials .quote-icon {
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

.pp-testimonials .quote-icon i {
  font-size: 1.6rem;
  line-height: 0;
}

.pp-testimonials .stars i {
  font-size: 1rem;
  margin-right: 3px;
}

.pp-testimonials .testimonial-card p {
  font-size: 1.6rem !important;
  line-height: 1.6;
}

.pp-testimonials .testimonial-card h6 {
  color: #1a1a1a;
  font-size: 1.8rem;
}

.pp-testimonials .carousel-control-prev,
.pp-testimonials .carousel-control-next {
  width: 50px;
  height: 50px;
  background-color: #0046d5;
  border-radius: 50%;
  top: 50%;
  transform: translateY(-50%);
  opacity: 1;
}

.pp-testimonials .carousel-control-prev { left: -25px; }
.pp-testimonials .carousel-control-next { right: -25px; }

.pp-testimonials .carousel-control-prev:hover,
.pp-testimonials .carousel-control-next:hover {
  background-color: #003bb5;
}

.pp-testimonials .carousel-control-prev-icon,
.pp-testimonials .carousel-control-next-icon {
  width: 20px;
  height: 20px;
}

.pp-testimonials .carousel-indicators {
  margin-bottom: -30px;
}

.pp-testimonials .carousel-indicators button {
  width: 10px;
  height: 10px;
  border-radius: 50%;
  background-color: #0046d5;
  opacity: 0.5;
}

.pp-testimonials .carousel-indicators button.active {
  opacity: 1;
}

@media (max-width: 767px) {
  .pp-testimonials h3 { font-size: 1.5rem; }

  .pp-testimonials .quote-icon {
    left: 20px;
    width: 40px;
    height: 40px;
  }

  .pp-testimonials .quote-icon i {
    position: relative;
    top: 22px;
    left: -8px;
  }

  .pp-testimonials .carousel-control-prev,
  .pp-testimonials .carousel-control-next {
    width: 40px;
    height: 40px;
  }

  .pp-testimonials .carousel-control-prev { left: -10px; }
  .pp-testimonials .carousel-control-next { right: -10px; }
}


</style>

<!-- ============================================================
     ALL PAGE HTML WRAPPED IN .pp-wrap
     ============================================================ -->
<div class="pp-wrap">

<!-- Hero Section -->
<section class="pp-hero d-flex align-items-center text-center text-white">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10" style="margin-top: -40px;">
        <h1 class="fw-bold mb-3 text-dark">Grow Your Revenue with #1 Salesforce Messaging App</h1>
        <p class="lead mb-5 text-dark">
          Join our 360 SMS Partner Program for recurring revenue, co-selling opportunities, and ready-to-use messaging solutions across SMS, WhatsApp, CTI, and automation journeys.
        </p>
        <div class="d-flex justify-content-center gap-5 mt-5">
          <a href="#contact_form" class="btn btn-nav-pri fw-semibold px-4 py-2" style="font-size: 1.5rem;">Become a Partner</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Trust Logos Section -->
<section class="pp-trust m-5">
  <div class="container">
    <div class="trust-bg-container p-4 p-md-5" style="background:linear-gradient(180deg, #ffffff 0%, #F0F9FF 100%); border-radius: 40px;">
      <h2 class="text-center fw-bold mb-5">Trusted by a Global Network of Salesforce Partners & Agencies</h2>
      <div class="logo-slider">
        <div class="logo-item"><div class="logo-box"><img src="https://360smsapp.com/wp-content/uploads/2026/02/Inc5000_Medallion_Color-1.png" alt="Inc 5000"></div></div>
        <div class="logo-item"><div class="logo-box"><img src="https://360smsapp.com/wp-content/uploads/2026/02/app-future-1.png" alt="AppFutura"></div></div>
        <div class="logo-item"><div class="logo-box"><img src="https://360smsapp.com/wp-content/uploads/2026/02/300-cloud-png-pffafygm8wthek7zls3mx1zsw5cp95p7beuqmoouf4-1.png" alt="TechReviewer"></div></div>
        <div class="logo-item"><div class="logo-box"><img src="https://360smsapp.com/wp-content/uploads/2026/02/clutch-1.png" alt="Clutch"></div></div>
        <div class="logo-item"><div class="logo-box"><img src="https://360smsapp.com/wp-content/uploads/2026/02/Group-295.png" alt="SelectedFirms"></div></div>
      </div>
    </div>
  </div>
</section>

<!-- About Our 360 SMS Partner Program -->
<section class="pp-about py-5">
  <div class="container">
    <div class="row justify-content-center text-center mb-4">
      <div class="col-lg-10">
        <h2 class="fw-bold mb-4">About Our 360 SMS Partner Program</h2>
        <div class="mx-auto" style="max-width: 900px;">
          <p class="section-desc text-muted mb-0">
            At 360 SMS, we believe the most impactful growth stories are written through collaboration. Whether you refer, resell, or integrate our platform, we provide elite tools and dedicated support to scale your business without limits.
          </p>
        </div>
      </div>
    </div>

    <div id="partnerMainCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row align-items-center">
            <div class="col-md-5 d-flex justify-content-center align-items-center">
              <div class="phone-mockup-container">
                <img src="https://360smsapp.com/wp-content/uploads/2026/02/mob-img-1-1.png" alt="Who is it for?" class="img-fluid phone-img">
                <div class="phone-glow"></div>
              </div>
            </div>
            <div class="col-md-7 ps-md-5 mt-4 mt-md-0">
              <h3 class="fw-bold mb-4">Who is it for?</h3>
              <div class="partner-roles">
                <div class="role-item mb-4">
                  <h4 class="fw-bold mb-1" style="font-size: 1.8rem; color: #334155;">Salesforce Consultants</h4>
                  <p class="text-muted" style="font-size: 1.6rem !important; color: #64748b !important;">looking to add ROI-driven messaging to client projects.</p>
                </div>
                <div class="role-item mb-4">
                  <h4 class="fw-bold mb-1" style="font-size: 1.8rem; color: #334155;">Digital Agencies</h4>
                  <p class="text-muted" style="font-size: 1.6rem !important; color: #64748b !important;">focused on high-engagement marketing</p>
                </div>
                <div class="role-item mb-4">
                  <h4 class="fw-bold mb-1" style="font-size: 1.8rem; color: #334155;">ISVs & SaaS Platforms</h4>
                  <p class="text-muted" style="font-size: 1.6rem !important; color: #64748b !important;">wanting to enhance platforms with robust SMS/CTI capabilities.</p>
                </div>
                <div class="role-item">
                  <h4 class="fw-bold mb-1" style="font-size: 1.8rem; color: #334155;">Freelancers & System Architects</h4>
                  <p class="text-muted" style="font-size: 1.6rem !important; color: #64748b !important;">looking for a trusted partner</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row align-items-center">
            <div class="col-md-5 d-flex justify-content-center align-items-center">
              <div class="phone-mockup-container">
                <img src="https://360smsapp.com/wp-content/uploads/2026/02/mob-img-2-1.png" alt="Partnership Models" class="img-fluid phone-img">
                <div class="phone-glow"></div>
              </div>
            </div>
            <div class="col-md-7 ps-md-5 mt-4 mt-md-0">
              <h3 class="fw-bold mb-4">Flexible Partnership Models</h3>
              <div class="partner-roles">
                <div class="role-item mb-4">
                  <h4 class="fw-bold mb-1" style="font-size: 1.8rem; color: #334155;"></h4>
                  <p class="text-muted" style="font-size: 1.6rem !important; color: #64748b !important;">Introduce qualified leads and earn high-margin commissions.</p>
                </div>
                <div class="role-item mb-4">
                  <h4 class="fw-bold mb-1" style="font-size: 1.8rem; color: #334155;">Reseller</h4>
                  <p class="text-muted" style="font-size: 1.6rem !important; color: #64748b !important;">Own the customer relationship and manage the full sales lifecycle under the 360 SMS brand.</p>
                </div>
                <div class="role-item mb-4">
                  <h4 class="fw-bold mb-1" style="font-size: 1.8rem; color: #334155;">Strategic / Co-sell</h4>
                  <p class="text-muted" style="font-size: 1.6rem !important; color: #64748b !important;">Partner with our experts to design and close complex enterprise solutions.</p>
                </div>
                <div class="role-item">
                  <h4 class="fw-bold mb-1" style="font-size: 1.8rem; color: #334155;">White-Label / OEM</h4>
                  <p class="text-muted" style="font-size: 1.6rem !important; color: #64748b !important;">Fully bundle or rebrand our messaging engine within your own solution.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="row align-items-center">
            <div class="col-md-5 d-flex justify-content-center align-items-center">
              <div class="phone-mockup-container">
                <img src="https://360smsapp.com/wp-content/uploads/2026/02/mob-img-3-1.png" alt="Why Partner with Us" class="img-fluid phone-img">
                <div class="phone-glow"></div>
              </div>
            </div>
            <div class="col-md-7 ps-md-5 mt-4 mt-md-0">
              <h3 class="fw-bold mb-4">What's In It for You</h3>
              <div class="partner-roles">
                <div class="role-item mb-4">
                  <h4 class="fw-bold mb-1" style="font-size: 1.8rem; color: #334155;">Recurring Revenue</h4>
                  <p class="text-muted" style="font-size: 1.6rem !important; color: #64748b !important;">Earn attractive commissions on licenses, renewals, and expansion deals.</p>
                </div>
                <div class="role-item mb-4">
                  <h4 class="fw-bold mb-1" style="font-size: 1.8rem; color: #334155;">Expert Sales Support</h4>
                  <p class="text-muted" style="font-size: 1.6rem !important; color: #64748b !important;">Access to solution engineering and co-selling assistance to close deals faster.</p>
                </div>
                <div class="role-item mb-4">
                  <h4 class="fw-bold mb-1" style="font-size: 1.8rem; color: #334155;">Industry Blueprints</h4>
                  <p class="text-muted" style="font-size: 1.6rem !important; color: #64748b !important;">Pre-built messaging and CTI use-case bundles tailored for specific verticals.</p>
                </div>
                <div class="role-item">
                  <h4 class="fw-bold mb-1" style="font-size: 1.8rem; color: #334155;">Partner Enablement</h4>
                  <p class="text-muted" style="font-size: 1.6rem !important; color: #64748b !important;">Get exclusive access to dedicated demo orgs, sales toolkits, and co-branded collateral.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Indicators -->
      <div class="row">
        <div class="col-md-6 offset-md-6 ps-md-5">
          <div class="custom-carousel-indicators d-flex align-items-center gap-2 mt-4">
            <button type="button" data-bs-target="#partnerMainCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#partnerMainCarousel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#partnerMainCarousel" data-bs-slide-to="2"></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Why Partner with Us -->
<section class="pp-why">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <h2 class="fw-bold mb-5 mt-2 text-center">Why Partner with Us</h2>
      <div class="col-md-6 text-center mb-4 mb-md-0">
        <div class="integration-img position-relative">
          <img src="https://360smsapp.com/wp-content/uploads/2026/02/partner-1.png" alt="partner" class="img-fluid">
        </div>
      </div>
      <div class="col-md-6 ps-5">
        <p class="text-muted mb-4">
          Partner with the leading Salesforce messaging platform to deliver high-impact communication strategies while building a scalable revenue engine.
        </p>
        <ul class="list-unstyled mb-4 fs-6 lh-lg">
          <li class="mb-2"><i class="bi bi-circle pp-bi-circle text-primary me-2"></i>Recurring Revenue: Earn attractive, consistent commissions on new licenses and renewals.</li>
          <li class="mb-2"><i class="bi bi-circle pp-bi-circle text-primary me-2"></i>Expanded Offerings: Instantly provide SMS, WhatsApp, and CTI automation to your service portfolio.</li>
          <li class="mb-2"><i class="bi bi-circle pp-bi-circle text-primary me-2"></i>Sales Enablement: Get immediate access to dedicated demo orgs, pitch decks, and pricing tools.</li>
          <li class="mb-2"><i class="bi bi-circle pp-bi-circle text-primary me-2"></i>Technical Bench: Leverage our experts for custom POCs, solution engineering, and live demos.</li>
          <li class="mb-2"><i class="bi bi-circle pp-bi-circle text-primary me-2"></i>Industry Blueprints: Deploy faster with pre-built messaging workflows for any vertical.</li>
          <li class="mb-2"><i class="bi bi-circle pp-bi-circle text-primary me-2"></i>Proven Credibility: Build trust using our global success stories and large-scale implementations.</li>
          <li class="mb-2"><i class="bi bi-circle pp-bi-circle text-primary me-2"></i>Co-Marketing Power: Scale via joint webinars, featured case studies, and collaborative campaigns.</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- CTA / Power Section -->
<section class="pp-cta text-center text-white py-5 mt-5 mx-0 bg-white"
  style="background:url('https://360smsapp.com/wp-content/uploads/2025/11/bg1.png') center center/cover no-repeat !important;">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-12">
        <h2 class="fw-bold mb-3" style="letter-spacing:-0.3px;">
          <span class="highlight-text">Join the 360 SMS Ecosystem</span>
        </h2>
        <p class="lead mb-3">
          Start earning recurring commissions and expanding your service portfolio in just a few clicks.
        </p>
        <div class="d-flex justify-content-center gap-5 flex-wrap mt-5">
          <a href="#partner_form" class="btn btn-outline-light fw-semibold px-4 py-2">Talk to Partnerships</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Partnership Types -->
<section class="pp-types py-5">
  <div class="container">
    <div class="row justify-content-center text-center my-5">
      <div class="col-lg-8">
        <h2 class="fw-bold my-4">Choose the Right Partnership for Your Business</h2>
      </div>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-md-4 my-5">
        <div class="benefit-card highlight mx-5 p-4 h-100">
          <h5 class="fw-semibold text-dark mb-3">Referral Partner</h5>
          <p class="text-muted mb-0">Introduce. Earn. Repeat.</p>
        </div>
      </div>
      <div class="col-md-4 my-5">
        <div class="benefit-card mx-5 p-4 h-100">
          <h5 class="fw-semibold text-dark mb-3">Reseller Partner</h5>
          <p class="text-muted mb-0">Sell directly. Own the relationship. Scale revenue.</p>
        </div>
      </div>
      <div class="col-md-4 my-5">
        <div class="benefit-card mx-5 p-4 h-100">
          <h5 class="fw-semibold text-dark mb-3">Strategic/OEM Partner</h5>
          <p class="text-muted mb-0">Co-build enterprise solutions or embed our messaging engine.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- 4 Steps -->
<section class="pp-steps">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-8 my-3">
        <h2 class="fw-bold">Achieve Partner Success in 4 Simple Steps</h2>
      </div>
    </div>
    <div class="row g-4 justify-content-center">
      <div class="col-md-5 col-lg-5">
        <div class="ai-card p-4 h-100">
          <div class="d-flex align-items-start gap-5">
            <div class="pt-3"><img src="https://360smsapp.com/wp-content/uploads/2025/11/logo1.png" alt="Apply"></div>
            <div class="p-4">
              <h5 class="fw-semibold text-dark mb-2">Apply to the Program</h5>
              <p class="text-muted mb-0">Submit your interest via our partner form to start the conversation.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-lg-5">
        <div class="ai-card p-4 h-100">
          <div class="d-flex align-items-start gap-5">
            <div class="pt-3"><img src="https://360smsapp.com/wp-content/uploads/2025/11/logo2.png" alt="Onboard"></div>
            <div class="p-4">
              <h5 class="fw-semibold text-dark mb-2">Get Onboarded</h5>
              <p class="text-muted mb-0">Access your starter kit, including demo orgs, sales tools, and product training.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-lg-5">
        <div class="ai-card p-4 h-100">
          <div class="d-flex align-items-start gap-5">
            <div class="pt-3"><img src="https://360smsapp.com/wp-content/uploads/2025/11/logo3.png" alt="Sell"></div>
            <div class="p-4">
              <h5 class="fw-semibold text-dark mb-2">Start Referring & Selling</h5>
              <p class="text-muted mb-0">Begin submitting leads or co-selling with our experts to solve client needs.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-lg-5">
        <div class="ai-card p-4 h-100">
          <div class="d-flex align-items-start gap-5">
            <div class="pt-3"><img src="https://360smsapp.com/wp-content/uploads/2025/11/logo4.png" alt="Earn"></div>
            <div class="p-4">
              <h5 class="fw-semibold text-dark mb-2">Earn & Scale</h5>
              <p class="text-muted mb-0">Collect quarterly commissions and grow your revenue as you close more deals.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="pp-testimonials py-5">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-8 pt-5">
        <h2 class="fw-bold">Success Stories from Our Global Partners</h2>
      </div>
    </div>

    <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="0" class="active" aria-current="true"></button>
        <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="1"></button>
      </div>

      <div class="carousel-inner py-5">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row justify-content-between">
            <div class="col-md-6 col-lg-5">
              <div class="testimonial-wrapper position-relative">
                <div class="quote-icon position-absolute"><i class="bi bi-quote text-white"></i></div>
                <div class="testimonial-card p-5">
                  <div class="stars mb-2">
                    <i class="bi bi-star-fill text-danger"></i><i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i><i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                  </div>
                  <p class="text-muted mb-4">"I'm very pleased with the app and the customer service. They go above and beyond to resolve our issues. The team provides great feedback and is always there to help whenever we need them. I look forward to continuing...</p>
                  <div class="border-top pt-3">
                    <h6 class="mb-0">Khansaa Algassid</h6>
                    <p class="text-muted">Administrator | Zaman International Michigan</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-5">
              <div class="testimonial-wrapper position-relative">
                <div class="quote-icon position-absolute"><i class="bi bi-quote text-white"></i></div>
                <div class="testimonial-card p-5">
                  <div class="stars mb-2">
                    <i class="bi bi-star-fill text-danger"></i><i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i><i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                  </div>
                  <p class="text-muted mb-4">"We have been using the 360 SMS app for the past few months. It was a seamless setup, and it is very easy to use; not much training is needed for the users. The team is very knowledgeable, and we have also been receiv...</p>
                  <div class="border-top pt-3">
                    <h6 class="mb-0">Wesley Gordon</h6>
                    <p class="text-muted">IT Manager | Global Vision International</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row justify-content-between">
            <div class="col-md-6 col-lg-5">
              <div class="testimonial-wrapper position-relative">
                <div class="quote-icon position-absolute"><i class="bi bi-quote text-white"></i></div>
                <div class="testimonial-card p-5">
                  <div class="stars mb-2">
                    <i class="bi bi-star-fill text-danger"></i><i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i><i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                  </div>
                  <p class="text-muted mb-4">"We have been using the 360 SMS App for a while now and really enjoy it. The Customer Service and Support team is top-notch and has fixed any issues we've had. I had a recent experience with the team, and they were ab...</p>
                  <div class="border-top pt-3">
                    <h6 class="mb-0">Stephanie Hack</h6>
                    <p class="text-muted">Administrator | Rapley Classic Cars Connecticut</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-5">
              <div class="testimonial-wrapper position-relative">
                <div class="quote-icon position-absolute"><i class="bi bi-quote text-white"></i></div>
                <div class="testimonial-card p-5">
                  <div class="stars mb-2">
                    <i class="bi bi-star-fill text-danger"></i><i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i><i class="bi bi-star-fill text-danger"></i>
                    <i class="bi bi-star-fill text-danger"></i>
                  </div>
                  <p class="text-muted mb-4">"Nice app! It's very quick and easy to use. The installation went smoothly, and the 360 SMS team was very helpful throughout the installation process. My customer is very happy with the results. Highly recommended!"</p>
                  <div class="border-top pt-3">
                    <h6 class="mb-0">Diede O.</h6>
                    <p class="text-muted">Salesforce Consultant | Welisa</p>
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



</div><!-- /.pp-wrap -->

<!-- Slick JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    if ($.fn.slick) {
      $('.pp-trust .logo-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
        infinite: true,
        pauseOnHover: false,
        cssEase: 'linear',
        responsive: [
          { breakpoint: 1024, settings: { slidesToShow: 4 } },
          { breakpoint: 768,  settings: { slidesToShow: 2 } },
          { breakpoint: 480,  settings: { slidesToShow: 1 } }
        ]
      });
    }
  });

  document.addEventListener('DOMContentLoaded', function() {
    var mainCarousel = document.querySelector('#partnerMainCarousel');
    var indicators   = document.querySelectorAll('.pp-about .custom-carousel-indicators button');
    if (mainCarousel) {
      mainCarousel.addEventListener('slid.bs.carousel', function(e) {
        indicators.forEach(function(btn, idx) {
          btn.classList.toggle('active', idx === e.to);
        });
      });
    }
  });
</script>

<?php get_footer("sms"); ?>