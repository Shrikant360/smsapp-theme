<?php
/* Template Name:Salesforce Texting */
?>

<?php get_header('sms'); ?>

<style>
    /* TOP SECTION */
.numbers-section {
  background: #f7f7f7;
}

.info-card {
  background: #fff;
  padding: 18px;
  border-radius: 12px;
  height: 100%;
  border: 1px solid #eee;
  transition: 0.3s;
}

.info-card i {
  font-size: 18px;
  color: #0d6efd;
  margin-bottom: 8px;
  display: inline-block;
}

.info-card h6 {
  font-weight: 600;
  margin-bottom: 6px;
}

.info-card p {
  font-size: 14px;
  color: #666;
  margin: 0;
}

.info-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 6px 14px rgba(0,0,0,0.08);
}


/* TESTIMONIAL SECTION */
.testimonial-section1 {
  background: #0057B8 !important;
}

.testimonial-card {
  background: rgba(255,255,255,0.08);
  padding: 20px;
  border-radius: 12px;
  text-align: left;
  height: 100%;
}

.testimonial-card p {
  font-size: 14px;
  margin: 10px 0;
  color:#fff;
}

.testimonial-card small {
  font-weight: 600;
  opacity: 0.8;
}

.stars {
  color: #ffc107;
  font-size: 14px;
}
    .channels-section {
      background: #f7f7f7;
    }
    
    .channel-card {
      background: #ffffff;
      border-radius: 12px;
      padding: 20px;
      text-align: left;
      height: 100%;
      box-shadow: 0 2px 6px rgba(0,0,0,0.05);
      transition: all 0.25s ease;
    }
    
    .channel-card i {
      font-size: 20px;
      color: #0d6efd;
      margin-bottom: 10px;
      display: inline-block;
    }
    
    .channel-card h6 {
      font-weight: 600;
      margin-bottom: 6px;
    }
    
    .channel-card p {
      font-size: 14px;
      color: #666;
      margin: 0;
    }
    
    .channel-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 6px 14px rgba(0,0,0,0.08);
    }
    .feature-section {
      background: linear-gradient(180deg, #0d5db8, #0a4ea0);
    }
    
    .feature-box {
      background: rgba(255, 255, 255, 0.08);
      border-radius: 12px;
      padding: 14px 18px;
      font-size: 14px;
      text-align: left;
      transition: all 0.3s ease;
    }
    
    .feature-box:hover {
      background: rgba(255, 255, 255, 0.15);
      transform: translateY(-2px);
    }
    
    .bottom-bar {
      background: rgba(255, 255, 255, 0.08);
    }
    
    .chip {
      display: inline-block;
      padding: 6px 14px;
      margin: 5px;
      font-size: 13px;
      border-radius: 999px;
      background: rgba(255, 255, 255, 0.12);
    }
    :root {
        --font-heading: 'Plus Jakarta Sans', sans-serif;
        --font-body: 'Plus Jakarta Sans', sans-serif;
        --fs-h1: clamp(2.5rem, 5vw, 3rem);
        --fs-h2: clamp(1.5rem, 4vw, 2rem);
        --fs-h3: clamp(1.5rem, 3vw, 1.75rem);
        --fs-h4: clamp(1.25rem, 2.5vw, 1.5rem);
        --fs-h5: clamp(1.125rem, 2vw, 1.25rem);
        --fs-h6: clamp(1rem, 1.8vw, 1.125rem);
        --fs-lead: clamp(1.125rem, 2vw, 1.375rem);
        --fs-body: clamp(0.875rem, 1vw, 1rem);
        --fs-sm: clamp(0.875rem, 1.5vw, 1rem);
        --fs-xs: clamp(0.75rem, 1.2vw, 0.875rem);
        --fs-label: clamp(0.75rem, 1.2vw, 0.875rem);
        --fs-btn-lg: 1.125rem;
        --fs-btn-md: 1rem;
        --fs-btn-sm: 0.875rem;
        --fs-nav: 1rem;
        --fs-icon-sm: 1rem;
        --fs-icon-md: 1.25rem;
        --fs-icon-lg: 1.5rem;
        --fw-regular: 400;
        --fw-medium: 500;
        --fw-semibold: 600;
        --fw-bold: 700;
        --fw-extrabold: 800;
        --fw-heading: var(--fw-bold);
        --fw-subheading: var(--fw-semibold);
        --fw-body: var(--fw-regular);
        --fw-btn: var(--fw-semibold);
        --fw-label: var(--fw-medium);
        --fw-nav: var(--fw-medium);
        --lh-heading: 1.1;
        --lh-lead: 1.4;
        --lh-body: 1.6;
        --ls-tight: -0.02em;
        --ls-normal: 0;
        --ls-wide: 0.04em;
        --ls-wider: 0.08em;
        --clr-primary: #0057B8;
        --clr-primary-hover: #00438c;
        --clr-primary-light: #e6f0f9;
        --clr-secondary: #0057B8;
        --clr-accent: #0057B8;
        --clr-bg: #FFFFFF;
        --clr-bg-alt: #f8f9fb;
        --clr-bg-dark: #0D1F3C;
        --clr-surface: #FFFFFF;
        --clr-text: #334155;
        --clr-text-muted: #64748B;
        --clr-text-inverse: #FFFFFF;
        --clr-heading: #0F172A;
        --clr-border: #E2E8F0;
        --clr-link: var(--clr-primary);
        --clr-focus-ring: var(--clr-primary);
        --space-xs: clamp(0.5rem, 1vw, 0.75rem);
        --space-sm: clamp(0.75rem, 1.5vw, 1rem);
        --space-md: clamp(1rem, 2vw, 1.5rem);
        --space-lg: clamp(1.5rem, 3vw, 2.5rem);
        --space-xl: clamp(2rem, 4vw, 4rem);
        --space-2xl: clamp(3rem, 6vw, 6rem);
        --space-3xl: clamp(4rem, 8vw, 8rem);
        --pad-btn-sm: 0.375rem 0.875rem;
        --pad-btn-md: 0.5rem 1.25rem;
        --pad-btn-lg: 0.75rem 1.75rem;
        --pad-card: 1.5rem;
        --gap-card: 1.5rem;
        --radius-sm: 4px;
        --radius-md: 8px;
        --radius-lg: 12px;
        --radius-xl: 16px;
        --radius-pill: 999px;
        --radius-btn: var(--radius-md);
        --radius-card: var(--radius-lg);
        --radius-input: var(--radius-md);
        --shadow-sm: 0 1px 4px rgba(0, 0, 0, .08);
        --shadow-md: 0 4px 12px rgba(0, 0, 0, .10);
        --shadow-lg: 0 8px 24px rgba(0, 0, 0, .12);
        --shadow-hover: 0 12px 32px rgba(0, 0, 0, .16);
        --shadow-card: var(--shadow-md);
        --shadow-btn: var(--shadow-sm);
        --transition-base: all 0.25s ease;
        --transition-color: color .2s ease, background-color .2s ease, border-color .2s ease;
        --transition-lift: box-shadow .25s ease, transform .25s ease;
        --btn-height-sm: 36px;
        --btn-height-md: 44px;
        --btn-height-lg: 52px;
        --input-height-md: 44px;
        --navbar-height: 64px;
    }

    *,
    *::before,
    *::after {
        box-sizing: border-box;
        margin: 0;
        padding: 0
    }

    html {
        scroll-behavior: smooth
    }
    @media (min-width: 1200px) {
    .display-5 {
        font-size: 2.4rem;
    }
}
    body {
        font-family: var(--font-body);
        font-size: var(--fs-body);
        font-weight: var(--fw-regular);
        line-height: var(--lh-body);
        color: var(--clr-text);
        background-color: var(--clr-bg)
    }

    .text-color-sf {
        color: var(--clr-primary) !important;
    }

    img {
        max-width: 100%;
        height: auto;
        display: block
    }

    hr {
        border: none;
        border-top: 1px solid var(--clr-border);
        margin: var(--space-lg) 0
    }

    h1,
    .h1 {
        font-size: var(--fs-h1);
        font-weight: var(--fw-heading) !important;
        line-height: var(--lh-heading);
        color: var(--clr-heading);
        letter-spacing: var(--ls-tight)
    }

    h2,
    .h2 {
        font-size: var(--fs-h2);
        font-weight: var(--fw-heading);
        line-height: var(--lh-heading);
        color: var(--clr-heading);
        letter-spacing: var(--ls-tight)
    }

    h3,
    .h3 {
        font-size: var(--fs-h3);
        font-weight: var(--fw-subheading);
        line-height: var(--lh-heading);
        color: var(--clr-heading)
    }

    h4,
    .h4 {
        font-size: var(--fs-h4);
        font-weight: var(--fw-subheading);
        line-height: var(--lh-lead);
        color: var(--clr-heading)
    }

    h5,
    .h5 {
        font-size: var(--fs-h5);
        font-weight: var(--fw-semibold);
        line-height: var(--lh-lead);
        color: var(--clr-heading)
    }

    h6,
    .h6 {
        font-size: var(--fs-h6);
        font-weight: var(--fw-semibold);
        line-height: var(--lh-lead);
        color: var(--clr-heading)
    }

    p {
        font-size: var(--fs-body);
        line-height: var(--lh-body);
        color: var(--clr-text);
        margin-bottom: var(--space-sm);
        font-weight: var(--fw-regular);
    }

    .lead {
        font-size: var(--fs-lead);
        font-weight: var(--fw-regular);
        line-height: var(--lh-lead);
        color: var(--clr-text-muted)
    }

    small {
        font-size: var(--fs-sm)
    }

    a {
        color: var(--clr-link);
        transition: var(--transition-color);
        text-decoration: none
    }

    a:hover {
        color: var(--clr-primary-hover)
    }

    section {
        padding: var(--space-2xl) 0
    }

    .section-label {
        font-size: var(--fs-label);
        font-weight: var(--fw-label);
        letter-spacing: var(--ls-wider);
        text-transform: uppercase;
        color: var(--clr-primary);
        margin-bottom: var(--space-xs)
    }

    .section-title {
        font-size: var(--fs-h2);
        font-weight: var(--fw-heading);
        line-height: var(--lh-heading);
        color: var(--clr-heading);
        margin-bottom: var(--space-sm)
    }

    .section-subtitle {
        font-size: var(--fs-icon-sm);
        color: var(--clr-text-muted);
        line-height: var(--lh-lead);
        max-width: 640px
    }

    .section-header {
        margin-bottom: var(--space-xl)
    }

    .section-header.text-center .section-subtitle {
        margin-inline: auto
    }

    .btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: var(--space-xs);
        font-family: var(--font-body);
        font-weight: var(--fw-btn);
        font-size: var(--fs-btn-md);
        line-height: 1;
        border-radius: var(--radius-btn);
        border: 2px solid transparent;
        padding: var(--pad-btn-md);
        height: var(--btn-height-md);
        cursor: pointer;
        white-space: nowrap;
        transition: var(--transition-base);
        text-decoration: none
    }

    .btn-sm {
        font-size: var(--fs-btn-sm);
        padding: var(--pad-btn-sm);
        height: var(--btn-height-sm)
    }

    .btn-cta-light {
        border: 1px solid #fff !important;
    }

    .btn-cta-light:hover {
        color: #000 !important;
    }

    .btn-lg {
        font-size: var(--fs-btn-lg);
        padding: var(--pad-btn-lg);
        height: var(--btn-height-lg)
    }

    .btn-primary {
        background-color: var(--clr-primary);
        color: var(--clr-text-inverse);
        border-color: var(--clr-primary);
        box-shadow: var(--shadow-btn)
    }

    .btn-primary:hover {
        background-color: var(--clr-primary-hover);
        border-color: var(--clr-primary-hover);
        box-shadow: var(--shadow-md);
        transform: translateY(-1px)
    }

    .btn-secondary {
        background-color: var(--clr-secondary);
        color: var(--clr-text-inverse);
        border-color: var(--clr-secondary)
    }

    .btn-outline-primary {
        background-color: transparent;
        color: var(--clr-primary);
        border-color: var(--clr-primary)
    }

    .btn-outline-primary:hover {
        background-color: var(--clr-primary);
        color: var(--clr-text-inverse)
    }

    .btn-ghost {
        background-color: transparent;
        color: var(--clr-primary);
        border-color: transparent
    }

    .btn-ghost:hover {
        background-color: var(--clr-primary-light)
    }

    .btn:focus-visible {
        outline: 2px solid var(--clr-focus-ring);
        outline-offset: 3px
    }

    .card {
        background-color: var(--clr-surface);
        border: 1px solid var(--clr-border);
        border-radius: var(--radius-card);
        box-shadow: var(--shadow-card);
        padding: var(--pad-card);
        transition: var(--transition-lift);
        height: 100%
    }

    .card:hover {
        box-shadow: var(--shadow-hover);
        transform: translateY(-2px)
    }

    .card-icon {
        font-size: var(--fs-icon-lg);
        color: var(--clr-primary);
        margin-bottom: var(--space-sm)
    }

    .card-title {
        font-size: var(--fs-h5);
        font-weight: var(--fw-subheading);
        color: var(--clr-heading);
        margin-bottom: var(--space-xs)
    }

    .card-text {
        font-size: var(--fs-body);
        color: var(--clr-text-muted);
        line-height: var(--lh-body)
    }

    .form-label {
        font-size: var(--fs-label);
        font-weight: var(--fw-label);
        color: var(--clr-text);
        margin-bottom: .25rem
    }

    .form-control,
    .form-select {
        font-size: var(--fs-body);
        height: var(--input-height-md);
        border-radius: var(--radius-input);
        border: 1px solid var(--clr-border);
        color: var(--clr-text);
        background-color: var(--clr-surface);
        transition: var(--transition-color);
        padding: 0 var(--space-sm)
    }

    .form-control:focus,
    .form-select:focus {
        border-color: var(--clr-focus-ring);
        box-shadow: 0 0 0 3px rgba(0, 0, 0, .08);
        outline: none
    }

    .nav-link {
        font-size: var(--fs-nav);
        font-weight: var(--fw-nav);
        color: var(--clr-text);
        padding: var(--space-xs) var(--space-sm);
        transition: var(--transition-color)
    }

    .nav-link:hover,
    .nav-link.active {
        color: var(--clr-primary)
    }

    .icon-sm {
        font-size: var(--fs-icon-sm)
    }

    .icon-md {
        font-size: var(--fs-icon-md)
    }

    .icon-lg {
        font-size: var(--fs-icon-lg)
    }

    .badge-custom {
        background-color: #E8F0FB !important;
        display: inline-flex;
        align-items: center;
        font-size: var(--fs-xs);
        font-weight: var(--fw-semibold);
        letter-spacing: var(--ls-wide);
        padding: .5rem .75rem;
        border-radius: var(--radius-pill);
        line-height: 1;
        border: 1px solid #CCE0F7;
    }

    /* Additive Modifiers & Section Specifics */

    .bg-hero {
        background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;
    }

    .bg-light-blue {
        background-color: #eef7ff !important;
    }

    .bg-cta {
        background-color: --clr-accent
    }

    .bg-dark-navy {
        background-color: #E8F0FB;
        color: var(--clr-text-inverse);
        border-radius: var(--radius-xl);
    }

    .bg-light {
        background-color: var(--clr-bg-alt);
    }

    .text-primary {
        color: #0057B8 !important;
    }

    .text-accent {
        color: var(--clr-secondary);
    }

    .text-white-75 {
        color: #000;
        opacity: 75% !important;
    }

    .text-white-35 {
        color: #000;
        opacity: 50%;
    }

    .hero-dashboard-card {
        box-shadow: var(--shadow-lg);
        border-radius: var(--radius-xl);
        overflow: hidden;
        background: white;
    }

    .stat-item {
        border-right: 1px solid #e2e8f0;
        padding: 1.5rem 1rem;
    }

    .stat-item:last-child {
        border-right: none;
    }

    .stat-strip {
        background-color: #f8f9fb;
        border-top: 1px solid #e2e8f0;
        border-bottom: 1px solid #e2e8f0;
    }

    .numbered-list {
        list-style: none;
        counter-reset: pbd-counter;
    }

    .pbd-principles-box {
        background-color: #F7F7F5;
        border: 1px solid #e2e8f0;
        border-radius: 16px;
        padding: 2.5rem;
    }

    .list-number {
        flex-shrink: 0;
        width: 32px;
        height: 32px;
        background-color: var(--clr-primary);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        font-weight: var(--fw-bold);
        font-size: 0.875rem;
        position: relative;
        z-index: 2;
    }

    .numbered-list li {
        border: 1px solid #CCE0F7;
        display: flex;
        gap: 1.25rem;
        margin-bottom: 1.5rem !important;
        position: relative;
        background-color: #fff;
        padding: 1rem;
        border-radius: 18px;
        transition: var(--transition-base);
    }

    .numbered-list li.active {
        background-color: #EEF7FF;
        border-color: var(--clr-primary);
    }

    .principles-alert {
        background-color: #eef7ff;
        border: 1px solid #CCE0F7;
        color: var(--clr-primary);
        font-weight: var(--fw-semibold);
        border-radius: 8px;
    }

    .browser-card {
        border: 1px solid var(--clr-border);
        border-radius: var(--radius-lg);
        box-shadow: var(--shadow-md);
        background: white;
        overflow: hidden;
    }

    .browser-header {
        background: #f1f5f9;
        padding: 0.75rem 1rem;
        display: flex;
        gap: 6px;
        border-bottom: 1px solid var(--clr-border);
    }

    .dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
    }

    .dot-red {
        background: #ff5f56;
    }

    .dot-yellow {
        background: #ffbd2e;
    }

    .dot-green {
        background: #27c93f;
    }

    .checklist-item {
        display: flex;
        gap: 0.75rem;
        margin-bottom: 1rem;
    }

    .checklist-icon {
        color: var(--clr-secondary);
    }

    .quote-box {
        background: white;
        border-radius: var(--radius-lg);
        padding: var(--space-lg);
        box-shadow: var(--shadow-lg);
        position: relative;
    }

    .hero-list i {
        color: var(--clr-primary);
        font-size: 1.25rem;
    }
</style>

<main class="pbd-page">
    <!-- Hero Section -->
    <section class="hero-section bg-hero py-1" style="background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;">
        <div class="container py-lg-5">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="badge-custom bg-light text-primary mb-3">
                        The #1 Salesforce Texting App · AppExchange · 1,200+ Reviews
                    </div>
                    <h1 class="display-5 fw-extrabold mb-4" style="line-height: 1.1;">
                        No One Does Salesforce Texting Like We Do. <span class="text-primary">That's the Power of 360 SMS.</span>
                    </h1>
                    <p class="mb-4 lead text-dark fw-semibold">
                        The state-of-the-art for business texting in Salesforce is us.
                    </p>
                    <div class="hero-list mb-5">
                        <div class="d-flex align-items-start gap-3 mb-3">
                            <p class="mb-0">Get only the most exhaustive capabilities for texting, channels, compliance
                                management, and automation - everything your customer-facing teams need, all
                                natively inside Salesforce.
                            </p>
                        </div>
                    </div>
                    <div class="d-flex flex-wrap gap-3 mb-5">
                        <a href="#contact_form" class="btn btn-primary btn-md px-4" aria-label="Book a demo for 360 SMS">Book a demo →</a>
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" class="btn btn-outline-light btn-md text-dark border px-4" aria-label="Get 360 SMS on AppExchange">Get the App →</a>
                    </div>
                    <div class="d-flex align-items-center gap-4">
                        <div class="d-flex align-items-center gap-2">
                            <div class="text-warning small"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div>
                            <span class="fw-bold small">4.9/5.0</span>
                        </div>
                        <div class="text-muted extra-small" style="font-size: 12px;">1,200+ AppExchange reviews</div>
                        <div class="text-muted extra-small" style="font-size: 12px;">60K+ users</div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/06/texting.webp" alt="360 SMS Salesforce Texting Platform Dashboard">
                </div>
            </div>
        </div>
    </section>
    <style>
    .rating .bi.bi-star-fill{
        color:#777777;
    }
        .testimonial-section {
      padding: 60px 20px;
      background: #fff;
      text-align: center;
    }

    .testimonial-text {
      font-size: 18px;
      color: #333;
      max-width: 900px;
      margin: 0 auto 20px;
      line-height: 1.6;
    }

    .highlight {
      color: #1e6bd6;
      font-weight: 600;
    }

    .rating {
      color: #bbb;
      margin-bottom: 8px;
    }

    .rating i {
      margin: 0 2px;
    }

    .testimonial-meta {
      font-size: 13px;
      color: #666;
    }

    .testimonial-meta strong {
      color: #1e6bd6;
      margin-right: 8px;
    }

    /* Mobile */
    @media (max-width: 768px) {
      .testimonial-text {
        font-size: 16px;
      }
    }
  </style>
<section class="testimonial-section">
  <div class="container">

    <!-- Quote -->
    <p class="testimonial-text">
      "We searched for other applications for texting in Salesforce before and found 360 SMS to be the best product. 
      Since we started using the 360 SMS App, our 
      <span class="highlight">response rate has increased by 50%+</span> 
      from our candidates, which gave us higher chances to generate revenue."
    </p>

    <!-- Stars -->
    <div class="rating">
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
      <i class="bi bi-star-fill"></i>
    </div>

    <!-- Meta -->
    <div class="testimonial-meta">
      <strong>50%+ Response Rate Increase</strong>
      360 SMS Customer - Global Staffing Platform
    </div>

  </div>
</section>
    <!-- Stats Strip -->
    <div class="stat-strip py-2">
        <div class="container">
            <div class="row text-center align-items-center">
                <div class="col-md-2 stat-item border-0">
                    <div class="h3 fw-bold text-primary mb-0">15+</div>
                    <div class="text-muted small">Pre-Integrated Channels</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">60K+</div>
                    <div class="text-muted small">Salesforce Users</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">1,200+</div>
                    <div class="text-muted small">AppExchange Reviews</div>
                </div>
                <div class="col-md-2 stat-item">
                    <div class="h3 fw-bold text-primary mb-0">24/7</div>
                    <div class="text-muted small">Free Support</div>
                </div>
                <div class="col-md-3 stat-item">
                    <div class="h3 fw-bold text-primary mb-0" style="font-size: 1.5rem;">AI-powered</div>
                    <div class="text-muted small">Messaging at Scale</div>
                </div>
            </div>
        </div>
    </div>
<section class="feature-section text-white py-5">
  <div class="container text-center">

    <!-- Heading -->
    <p class="small text-uppercase mb-4 opacity-75" style="color: #FFFFFF99;">
      The texting app market is crowded. Pick only the best. Every great feature in Salesforce texting happened here first.
    </p>

    <!-- Features Grid -->
    <div class="row g-3 justify-content-center">

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="feature-box">2-Way Drag-and-Drop Chatbots</div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="feature-box">Point-and-Click Drip Campaigns</div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="feature-box">Bulk Messaging from Salesforce Reports</div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="feature-box">Marketing Cloud Integration</div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="feature-box">Phone Number Management</div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="feature-box">User-Defined Consent Management</div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="feature-box">Multichannel Inboxes</div>
      </div>

      <div class="col-12 col-sm-6 col-lg-3">
        <div class="feature-box">Power-Texting</div>
      </div>

    </div>

    <!-- Bottom Chips -->
    <div class="mt-4 p-3 rounded-4 bottom-bar">
      <span class="me-2 small opacity-75">AND THE CLASSICS, PERFECTED:</span>

      <span class="chip">Peer-to-Peer Messaging</span>
      <span class="chip">Automated Messaging</span>
      <span class="chip">After-Hours Messaging</span>
      <span class="chip">Automated Responses</span>
    </div>

  </div>
</section>
<section class="channels-section py-5">
  <div class="container text-center">

    <!-- Top Label -->
    <p class="text-primary fw-semibold small text-uppercase mb-2">
      Access exclusive Salesforce text messaging capabilities wherever customers are
    </p>

    <!-- Main Heading -->
    <h2 class="fw-bold mb-3">
      9 Pre-Integrated Business Channels in One Salesforce App
    </h2>

    <!-- Subtitle -->
    <p class="text-muted mb-5">
      Get on a first-name basis with customers across every channel they use - all from a single Salesforce text messaging app
    </p>

    <!-- Cards -->
    <div class="row g-4">

      <!-- Card -->
      <div class="col-12 col-md-6 col-lg-4">
        <div class="channel-card">
          <i class="bi bi-phone"></i>
          <h6>SMS</h6>
          <p>Land messages directly in the customer’s notification bar, even on feature phones without any apps installed.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="channel-card">
          <i class="bi bi-messenger"></i>
          <h6>Facebook Messenger</h6>
          <p>Drive business to your FB page and reach the most customers globally on any device, even the desktop.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="channel-card">
          <i class="bi bi-whatsapp"></i>
          <h6>WhatsApp</h6>
          <p>Send approved messages and keep the 24-hour consent open with auto-scheduled messages.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="channel-card">
          <i class="bi bi-instagram"></i>
          <h6>Instagram</h6>
          <p>Rule the customer DMs with in-store experiences and outclass other Instagram businesses.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="channel-card">
          <i class="bi bi-chat-dots"></i>
          <h6>WeChat</h6>
          <p>Communicate deeper with a captive audience in Asia’s most active messaging platform.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="channel-card">
          <i class="bi bi-chat"></i>
          <h6>Viber</h6>
          <p>Target lower-end devices and feature phones in Eastern Europe with wide reach.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="channel-card">
          <i class="bi bi-line"></i>
          <h6>LINE</h6>
          <p>Tap into Japan & Southeast Asia’s most active messaging communities.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="channel-card">
          <i class="bi bi-image"></i>
          <h6>MMS</h6>
          <p>Multimedia messages that increase engagement and faster response rates.</p>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="channel-card">
          <i class="bi bi-chat-square"></i>
          <h6>KakaoTalk</h6>
          <p>Reach South Korea’s market using one of its most popular messaging apps.</p>
        </div>
      </div>

    </div>
  </div>
</section>
    <!-- Core Principles Section -->
    <section class="core-principles py-5">
        <div class="container py-lg-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="pbd-principles-box">
                        <div class="text-muted extra-small text-uppercase mb-4 fw-medium" style="letter-spacing: 0.05em; font-size: 10px;">THE #1 TEXT MARKETING APP FOR SALESFORCE · WHY IT MATTERS</div>
                        <ul class="numbered-list m-0 p-0">
                            <li class="bg-light-blue">
                                <div class="list-number">1</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Set Up Campaigns, Automation & Actions in Salesforce</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Send messages to millions with Bulk SMS, handle 2-way conversations with chatbots, and automate Salesforce actions on any object based on keywords.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">2</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">AI-Powered Messaging at Scale & in Real-Time</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Leverage AI to personalize conversations, optimize message content, and respond in real time, while intelligently automating engagement and multichannel journeys.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">3</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Generate Complete Analytics & Granular Reports</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Generate complete messaging analytics and more granular reports on Salesforce - making every campaign decision data-driven.</div>
                                </div>
                            </li>
                            <li>
                                <div class="list-number">4</div>
                                <div>
                                    <div class="fw-semibold text-heading medium mb-1">Manage P2P Conversations Faster with AI Suggestions</div>
                                    <div class="text-muted extra-small" style="font-size: 11px; line-height: 1.4;">Manage P2P conversations faster and better with auto-suggested responses based on ongoing discussions - AI-powered inside Salesforce.</div>
                                </div>
                            </li>
                        </ul>
                        <div class="alert principles-alert mb-0 px-3 py-2 small d-flex align-items-center">
                            <i class="bi bi-check2 me-2"></i> Sell 4x more, send more reliable updates, and boost team productivity - all inside Salesforce
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 ps-lg-5">
                    <h2 class="fw-bold mb-4" style="font-size: 2.5rem; line-height: 1.2;">Most Easy-to-Use, Most Comprehensive Texting App for Salesforce</h2>
                    <p class="text-muted mb-4">Unlock the potential of Salesforce SMS communication with our user-friendly and intuitive text messaging app. Whether single or bulk, 360 SMS simplifies sending and receiving SMS messages directly from Salesforce - accelerating customer interactions and empowering every team to perform most messaging operations from a single-window console.</p>
                    <div class="bg-light-blue p-4 rounded-3 mb-5 border-start border-primary border-4">
                        <div class="fw-semibold mb-2">Every great feature in Salesforce texting happened here first</div>
                        <p class="text-muted small mb-0">2-Way Drag-and-Drop Chatbots · Point-and-Click Drip Campaigns · Bulk Messaging from Salesforce Reports · AI & AI Agents-powered Messaging · Phone Number Management · User-Defined Consent Management · Multichannel Inboxes · Power-Texting</p>
                    </div>
                    <div class="d-flex gap-3">
                        <a href="#contact_form" class="btn btn-primary btn-md px-4" aria-label="Book a demo for 360 SMS">Book a demo →</a>
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" class="btn btn-outline-light btn-md text-dark border px-4" aria-label="Get 360 SMS on AppExchange">Get the App →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Revenue Drivers Grid Section -->
    <section class="bg-light" style="border-bottom: 1px solid #2e8f0">
        <div class="container">
            <div class="section-header text-center mb-5">
                <h2 class="section-title">Everything Your Teams Need to Drive Revenue with SMS</h2>
                <p class="section-subtitle mx-auto">From first-touch campaigns to post-sale loyalty - 360 SMS covers every customer interaction across the revenue cycle</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-tag" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Boost Sales with Text Discounts</h4>
                        <p class="card-text small">Send text-based discount codes and promotional offers that arrive directly in the customer's notification bar - the highest-engagement channel for promotional content.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-lightning" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">One Keyword, Unlimited Actions</h4>
                        <p class="card-text small">Automate a lot with one keyword: actions, campaigns, chatbots, customer support, sign-ups, and opt-outs - a single reserved keyword triggers the full Salesforce workflow.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-arrow-repeat" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Re-Engage Call & Email Avoiders</h4>
                        <p class="card-text small">Customers who ignore emails and screen calls still open texts - SMS reaches the unreachable segment every other channel leaves behind.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-trophy" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Build Loyalty on SMS</h4>
                        <p class="card-text small">Build loyalty programs on SMS and get feedback through Salesforce text message surveys. Drive repeat engagement, NPS collection, and customer satisfaction scoring natively inside Salesforce.</p>
                    </div>
                </div>
            </div>
            <div class="row g-4" style="margin-top:30px;">
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-tag" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Boost Sales with Text Discounts</h4>
                        <p class="card-text small">Send text-based discount codes and promotional offers that arrive directly in the customer's notification bar - the highest-engagement channel for promotional content.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-lightning" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">One Keyword, Unlimited Actions</h4>
                        <p class="card-text small">Automate a lot with one keyword: actions, campaigns, chatbots, customer support, sign-ups, and opt-outs - a single reserved keyword triggers the full Salesforce workflow.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-arrow-repeat" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Re-Engage Call & Email Avoiders</h4>
                        <p class="card-text small">Customers who ignore emails and screen calls still open texts - SMS reaches the unreachable segment every other channel leaves behind.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card h-100">
                        <div class="card-icon"><i class="bi bi-trophy" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Build Loyalty on SMS</h4>
                        <p class="card-text small">Build loyalty programs on SMS and get feedback through Salesforce text message surveys. Drive repeat engagement, NPS collection, and customer satisfaction scoring natively inside Salesforce.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TOP SECTION -->
<section class="numbers-section py-5">
  <div class="container">
    <div class="row align-items-center g-4">

      <!-- LEFT CONTENT -->
      <div class="col-lg-6">
        <p class="text-primary small fw-semibold text-uppercase mb-2">
          Find branded numbers and keywords for any geography
        </p>

        <h2 class="fw-bold mb-3">
          Get Quality Phone Numbers & <br> Keywords - Any Type, Any Geography
        </h2>

        <p class="text-muted mb-4">
          70% of consumers prefer SMS. Get better throughput with a vanity short code,
          send more messages faster, and pay less per message - all with the right number type.
        </p>

        <div class="d-flex gap-3 flex-wrap">
          <a href="#" class="btn btn-primary px-4">Get a Number →</a>
          <a href="#" class="btn btn-outline-secondary px-4" style="background:#fff;">Ask an Expert →</a>
        </div>
      </div>

      <!-- RIGHT CARDS -->
      <div class="col-lg-6">
        <div class="row g-3">

          <div class="col-md-6">
            <div class="info-card">
              <i class="bi bi-phone"></i>
              <h6>Dedicated & Shared Short Codes</h6>
              <p>High throughput messaging and memorable numeric identity.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-card">
              <i class="bi bi-telephone"></i>
              <h6>Vanity Numbers & Long Codes</h6>
              <p>Enhance branding and send messages faster with cost efficiency.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-card">
              <i class="bi bi-link-45deg"></i>
              <h6>Text-to-Landline & VoIP</h6>
              <p>Enable texting on existing business numbers seamlessly.</p>
            </div>
          </div>

          <div class="col-md-6">
            <div class="info-card">
              <i class="bi bi-arrow-left-right"></i>
              <h6>Porting & Hosting (BYON)</h6>
              <p>Keep your existing number and maintain brand identity.</p>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>


<!-- TESTIMONIAL SECTION -->
<section class="testimonial-section1 py-5 text-white">
  <div class="container text-center">

    <p class="small text-uppercase opacity-75 mb-2" style="color:#fff;">
      Rated 5/5 across online review platforms for texting
    </p>

    <h3 class="fw-bold mb-5" style="color:#fff;">We're Raising the Bar for B2B Texting</h3>

    <div class="row g-4">

      <div class="col-md-6">
        <div class="testimonial-card">
          <div class="stars">★★★★★</div>
          <p>
            “With the 360SMS WhatsApp solution, we can connect with customers faster.
            The app is easy to configure and use.”
          </p>
          <small>HEM TOBIAS</small>
        </div>
      </div>

      <div class="col-md-6">
        <div class="testimonial-card">
          <div class="stars">★★★★★</div>
          <p>
            “Support has been outstanding. The solution is simple and highly effective.
            Highly recommended!”
          </p>
          <small>ALFRED DAVID</small>
        </div>
      </div>

      <div class="col-md-6">
        <div class="testimonial-card">
          <div class="stars">★★★★★</div>
          <p>
            “We realized faster responses with WhatsApp messaging. Implementation was easy.”
          </p>
          <small>ALEXANDER SCHNELL</small>
        </div>
      </div>

      <div class="col-md-6">
        <div class="testimonial-card">
          <div class="stars">★★★★★</div>
          <p>
            “360 SMS stands above competitors. The product is excellent and delivers results.”
          </p>
          <small>STEVEN ZIN</small>
        </div>
      </div>

    </div>
  </div>
</section>

  <!-- State of the Art Checklist Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="section-label">STAY AHEAD OF THE CURVE</div>
                    <h2 class="section-title">Cutting-Edge Salesforce Text Messaging That Keeps You One Step Ahead</h2>
                    <p class="mb-4 text-muted">Embrace the future of Salesforce communication with our feature-rich text messaging app. Enhance customer communication with personalized SMS messaging, making an impact with each message you send. Manage and monitor SMS campaigns effortlessly, achieve outstanding results, and rule the DMs - with 360 SMS. 70% of consumers prefer SMS.</p>
                    <div class="d-flex gap-3">
                        <a href="#contact_form" class="btn btn-primary btn-md px-4" aria-label="Book a demo for 360 SMS">Book a demo →</a>
                        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" class="btn btn-outline-light btn-md text-dark border px-4" aria-label="Get 360 SMS on AppExchange">Get the App →</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-dark-navy p-5 rounded-xl">
                        <div class="text-white-35 small mb-4 text-uppercase">360 SMS - State of the Art for Salesforce Texting</div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Every Innovation Happened Here First<span class="text-white-75 small fw-normal"> - Drag-and-drop chatbots, bulk from reports, point-and-click drips - all 360 SMS firsts</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">15 Pre-Integrated Channels<span class="text-white-75 small fw-normal"> - SMS, WhatsApp, WeChat, Viber, LINE, KakaoTalk, Instagram, Facebook Messenger, MMS</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Single-Window Console<span class="text-white-75 small fw-normal"> - Reduce navigation - perform most messaging operations without switching screens</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">AI-Powered Auto-Suggested Responses<span class="text-white-75 small fw-normal"> - Manage P2P conversations faster with suggestions based on ongoing discussions</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">Complete Number Management<span class="text-white-75 small fw-normal"> - Short codes, long codes, VoIP, BYON, vanity numbers - any number type for any geo</span></div>
                            </div>
                        </div>
                        <div class="checklist-item">
                            <i class="bi bi-check-circle-fill checklist-icon"></i>
                            <div>
                                <div class="fw-semibold fs-sm text-color-sf">User-Defined Consent Management<span class="text-white-75 small fw-normal"> - TCPA, GDPR, HIPAA-conscious - built in, not bolted on</span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blue CTA Banner -->
    <div class="bg-cta py-5 text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h6 class="text-white mb-2">The #1 Salesforce Texting App - 15 channels, AI-powered, all natively inside Salesforce</h6>
                    <p class="mb-0 text-white">Book a demo • Get the App • 60K+ teams on Salesforce • 1,200+ AppExchange reviews • 24/7 free support</p>
                </div>
                <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                    <a href="#contact_form" class="btn btn-light btn-md text-primary me-2">Book a demo</a>
                    <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" class="btn btn-outline-light btn-md btn-cta-light text-light">Get the App</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Capabilities Section -->
    <section class="bg-light">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="section-title">The Most Comprehensive Salesforce Texting Capabilities - All in One App</h2>
                <p class="section-subtitle">Every capability your teams need, natively inside Salesforce, with the support and onboarding to match</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-emoji-smile" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Easy to Use - Zero Learning Curve</h4>
                        <p class="card-text small">Familiar, intuitive interface means reps start using it immediately. Point-and-click setup for chatbots, drip campaigns, and automation - no developer required at any step.</p>
                        <a href="#" class="btn-ghost fw-bold btn-sm mt-auto" aria-label="Explore Ease of Use">Explore <i class="bi bi-arrow-right icon-sm" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-graph-up" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Elevated Productivity</h4>
                        <p class="card-text small">Single-window console. Reduce navigation and skip screen-switching. Perform most messaging operations from one place - saving time, effort, and reducing errors in every customer interaction.</p>
                        <a href="#" class="btn-ghost fw-bold btn-sm mt-auto" aria-label="Explore Productivity">Explore <i class="bi bi-arrow-right icon-sm" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-shield-lock" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Built-In Compliance</h4>
                        <p class="card-text small">TCPA, GDPR, HIPAA-conscious compliance with user-defined consent management. Compliance built into the architecture - not bolted on. Set-and-forget with zero ongoing legal risk.</p>
                        <a href="#" class="btn-ghost fw-bold btn-sm mt-auto">Explore <i class="bi bi-arrow-right icon-sm"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-headset" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Outstanding Support - Dedicated SPOC</h4>
                        <p class="card-text small">360SMS allots you a dedicated SPOC who takes care of all your requirements and onboarding with near-zero wait times - as confirmed by customers across every review platform.</p>
                        <a href="#" class="btn-ghost fw-bold btn-sm mt-auto">Explore <i class="bi bi-arrow-right icon-sm"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-rocket" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">Quick to Go Live</h4>
                        <p class="card-text small">Easy to deploy and start using. Whether you need a dry-run for complex requirements or a straightforward setup, 360 SMS gets you sending in the shortest possible time.</p>
                        <a href="#" class="btn-ghost fw-bold btn-sm mt-auto">Explore <i class="bi bi-arrow-right icon-sm"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-icon"><i class="bi bi-cloud-check" style="color: var(--clr-primary);"></i></div>
                        <h4 class="card-title">All Salesforce Clouds Supported</h4>
                        <p class="card-text small">Works across Sales Cloud, Service Cloud, Marketing Cloud, and any custom Salesforce implementation. Supports campaigns over even the most customized record types.</p>
                        <a href="#" class="btn-ghost fw-bold btn-sm mt-auto">Explore <i class="bi bi-arrow-right icon-sm" style="color: var(--clr-primary);"></i></a>
                    </div>
                </div>
            </div>
            <div class="text-center mt-5">
                <a href="#" class="btn btn-primary btn-md px-5" aria-label="View all Features">View all Features</a>
            </div>
        </div>
    </section>


</main>

<?php get_footer('sms'); ?>