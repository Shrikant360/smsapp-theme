<?php
/* Template Name: Single Webinar */
get_header('sms');
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<style>
#formFirstLead{
padding:5px;
}

html, body {
    max-width: 100%;
    overflow-x: hidden;
}


#formFirstLead .row{
margin-top:0px;
margin-bottom:0px;
}
#formFirstLead .formBack div{
margin-top:0px !important;
}
#formFirstLead .col-md-12{
margin-top:0px;
margin-bottom:0px;
}
#formFirstLead .company,#formFirstLead .phone1{
margin-bottom:0px;
}

@media screen and (max-width: 767px) {
    .inp-num {
        width: 100px !important;
    }
    .textfirst1{
    width:65px !important;
    padding:0px;
    }
    }
/* Outer card background (the pale blue container) */
.wpcf7-form,.webinar_form {
    background: #eaf6fb !important;
    border-radius: 22px;
    padding: 22px;
}

.single.single-webinar div.description_block, .cus_class{
	display:none !important;
}

/* Heading: Register Now */
.wpcf7-form h2 {
    font-size: 28px;
    font-weight: 700;
    color: #0b1830;
    margin-bottom: 25px;
    text-align: center;
}

input#country_selector{
height:42px !important;
}

/* Input tile – white box around inputs */
.wpcf7-form-control,
#email,
textarea#wpcf7-text,
textarea.wpcf7-text {
    background: #ffffff !important;
    border: 1px solid #e8edf1 !important;
    border-radius: 12px !important;
    padding: 8px 16px !important;
    width: 100% !important;
    font-size: 16px;
    box-shadow: 0 6px 14px rgba(0,0,0,0.04);
}



#phone_code{
    background: #ffffff !important;
    border: 1px solid #e8edf1 !important;
    border-radius: 12px !important;
    padding: 8px 10px 8px 77px !important;
    width: 100% !important;
    font-size: 16px;
    box-shadow: 0 6px 14px rgba(0,0,0,0.04);
}

/* Remove default WP Contact Form 7 styling that conflicts */
.wpcf7-form-control:focus {
    border-color: #b6cde0 !important;
    outline: none !important;
    box-shadow: 0 6px 18px rgba(0,0,0,0.06);
}

/* Error text style */
.error,
#email_error,
#phone_error,
#company_error,
#designation_error,
#vercode_error,
#all_error {
    display: block;
    margin-top: 6px;
    color: #d9534f !important;
    font-size: 14px;
}

/* Country field styling */
.country {
    margin-bottom: 6px;
    font-size: 15px;
    color: #6c757d;
}

#country {
    border: 1px solid #e8edf1 !important;
    border-radius: 12px !important;
    padding: 0 !important;
    background: #fff;
}
.form-col .country-select.inside {
margin:0px !important;
}

/* Country input inside tile */
#country_selector {
    border: none !important;
    padding:  8px 16px 8px 50px !important;
    font-size: 16px;
    border-radius: 12px !important;
}

/* Captcha tile */
.formBack .col-sm-4,
.formBack .col-sm-6,
.formBack .col-xs-4,
.formBack .col-xs-6 {
    padding-top: 0 !important;
}

.codeImg {
    width: 100%;
    height: 44px;
    object-fit: contain;
}

.btnRefresh img {
    height: 40px;
}

/* Submit button */
#webtoLeadFormOne,
.href {
    background: #C8654E !important;
    border: none !important;
    color: #fff !important;
    font-size: 18px !important;
    padding: 12px 40px !important;
    border-radius: 10px !important;
    box-shadow: 0 8px 20px rgba(200, 100, 80, 0.18);
    cursor: pointer;
    width: 100%;
}

#webtoLeadFormOne:hover {
    background: #b45543 !important;
}

/* Responsive spacing */
@media (max-width: 767px) {
    .wpcf7-form {
        padding: 20px;
        border-radius: 18px;
    }
    .wpcf7-form h2 {
        font-size: 24px;
    }
}

</style>
<style>

	#description,p.country, #country, .company{
    
    }
    
    .cus-width {
    width:auto !important;
    }
    p {
        font-size: 16px;
    }

    .footer_phone a,
    .footer_email a {
        color: #fff !important;
    }

    .footer_phone a:hover,
    .footer_email a:hover {
        color: #C8654E !important;
    }

    .webinar-content * {
        color: rgba(33, 37, 41, 0.75) !important;
    }

    a {
        text-decoration: none;
    }

    .thank-you-message {
        font-size: 20px;
        color: #007bff;
        font-weight: 600;
        animation: fadeIn 0.8s ease-in-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .hero-section {
        background: #001B38;
        padding: 30px 0;
        position: relative;
        overflow: hidden;

    }

    .hero-label {
        display: inline-block;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        letter-spacing: 1px;
        margin-bottom: 15px;
        text-transform: uppercase;
    }

    .hero-title {
        font-size: 42px;
        font-weight: 700;
        color: #fff;
        line-height: 1.2;
        margin-bottom: 20px;
        text-transform:none;
    }

    .hero-description {
        font-size: 16px;
        color: #2c5282;
        line-height: 1.6;
        margin-bottom: 30px;
        max-width: 450px;
    }

    .hero-btn-text {
        background: #fff;
        color: #000;
        border: none;
        padding: 10px 28px;
        font-size: 1.5rem;
        font-weight: 600;
        border-radius: 20px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(230, 106, 60, 0.3);
    }
    
     .hero-btn {
        background: #C8654E;
        color: #fff;
        border: none;
        padding: 10px 28px;
        font-size: 15px;
        font-weight: 600;
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 4px 6px rgba(230, 106, 60, 0.3);
    }

    .hero-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 6px 12px rgba(230, 106, 60, 0.4);
    }

    .hero-image-wrapper {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .hero-image-container {
        position: relative;
        max-width: 500px;
    }

    .hero-image {
        width: 100%;
        height: auto;
        border-radius: 0;
        display: block;
    }
	
   
   

    @media (max-width: 768px) {
        .hero-section {
            padding: 50px 0;
        }

        .hero-title {
            font-size: 32px;
            
        }

        .hero-description {
            font-size: 15px;
        }

        .contact_image_wrap, .wpcf7-form.description_block {
            display: none !important;
        }
        
         .hero-btn-text {
        font-size: 1.3rem;
    }
    }

    @media (max-width: 576px) {
    
     
        .hero-title {
            font-size: 28px;
        }

        .hero-btn {
            padding: 12px 24px;
            font-size: 14px;
        }
        .hero-btn-text {
        font-size: .83rem;
        padding:10px 10px;
    }
    
    }

    .home_s17 .form-control {
        width: 100% !important;
    }

    /* .highlight {
    background: linear-gradient(90deg, #0A86C6, #003773);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    display: inline-block;
  } */
</style>

<section id="contactus_form" class="hero-section">
    <div class="container">
        <div class="row align-items-center justify-content-between">

            <!-- Left Content -->
            <div class="col-lg-7 col-md-7 mb-4 pe-5 mb-md-0">
                <div class="hero-content m-4">
                    <span class="hero-label">Webinar</span>
                    <h1 class="hero-title highlight mb-4"><?php echo  get_field('webinar_hero_title'); ?></h1>
                <p class="text-light pb-4"><?php echo esc_attr( get_field('webinar_hero_subtitle') ); ?></p>
    
              <a href="" 
                       class="hero-btn-text pe-none" target="_blank">
                        <?php echo esc_attr( get_field('webinar_add_date__time') ); ?>
                    </a>
                </div>
            </div>

            <!-- Right Form -->
            <div class="col-lg-5 col-md-5">
            	<div id="div_replace">
                	<div class="webinar_form p-4 pt-5 m-4" style="background:white; border-radius:20px;">
                   <!-- <h2 class="section_heading_s17 my-3 text-center" style="font-size:3rem; font-weight:600;">
                        Watch Now 
                    </h2>-->
                    <?php echo do_shortcode('[contact_pageshortcode]'); ?>
					</div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- ==========================
     CLIENT OVERVIEW SECTION
=========================== -->
<section class="client-overview py-5  mt-5">
    <div class="container mb-5 mt-5">
        <div class="row align-items-center g-4">

            <!-- Left Image -->
            <div class="col-lg-5 col-md-5 text-center">
                <img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'large');?>"
                    alt="Client Overview" class="img-fluid rounded-4 shadow-sm overview-image">
            </div>

            <!-- Right Info Columns -->
            <div class="col-lg-7 col-md-7">
                <div class="webinar-content text-muted mb-5" style="font-size:16px">
                    <?php echo get_field('webinar_summary'); ?>
                </div>
            </div>
        </div>

    </div>
    <!--</div>-->
</section>

<style>
    /* General section styling */
    .client-overview {
        /*     background: url('https://yourdomain.com/path-to-bg-image.png') no-repeat center/cover; */
    }

    /* Image styling */
    .overview-image {
        max-width: 430px;
        border-radius: 12px;
    }

    /* Headings & text */
    .client-overview h6 {
        font-size: 1rem;
        color: #356DB2;
    }

    .client-overview p {
        /*font-size: 0.95rem;*/
        /*color: #333;*/
    }

    .webinar-section p {
        /*color: rgba(33, 37, 41, 0.75) !important;*/
    }

    /* Responsive adjustments */
    @media (max-width: 767px) {
        .overview-image {
            max-width: 100%;
            margin-bottom: 20px;
        }

        .client-overview h6 {
            font-size: 0.95rem;
        }
    }
</style>

<!-- ==========================
     CLIENT OVERVIEW SECTION
=========================== -->

<div class="webinar-section">
    <div class="container">
        <div class="row justify-content-center formpopup">
            <div class="col-md-12 mb-5 px-5">
                <div class="webinar-box">
                    <h2 style="font-size: 25px;" class="fw-bold text-dark mb-4"><?php the_title(); ?></h2>
                    <div class="webinar-content text-muted mb-5">
                        <?php the_content(); ?>
                    </div>
                    <a href="#contactus_form" class="hero-btn mt-3">
                        Watch Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="featured-speakers py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <h2 class="text-center fw-bold mb-5" style="font-size: 25px;">Featured Judging Panel</h2>
                <div class="row justify-content-center g-4">

                    <!-- Image 1 -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-center">
                        <div class="speaker-img-wrap">
                            <img src="https://360smsapp.com/wp-content/uploads/2025/12/1Mission-AI-Panel-of-Judges-1.png"
                                class="img-fluid speaker-img" alt="Speaker 1">
                        </div>
                    </div>

                    <!-- Image 2 -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-center">
                        <div class="speaker-img-wrap">
                            <img src="https://360smsapp.com/wp-content/uploads/2025/12/2Mission-AI-Panel-of-Judges-2.png"
                                class="img-fluid speaker-img" alt="Speaker 2">
                        </div>
                    </div>

                    <!-- Image 3 -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-center">
                        <div class="speaker-img-wrap">
                            <img src="https://360smsapp.com/wp-content/uploads/2025/12/3Mission-AI-Panel-of-Judges-1.png"
                                class="img-fluid speaker-img" alt="Speaker 3">
                        </div>
                    </div>
                     <!-- Image 4 -->
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6 text-center">
                        <div class="speaker-img-wrap">
                            <img src="https://360smsapp.com/wp-content/uploads/2025/12/4Mission-AI-Panel-of-Judges-1.png"
                                class="img-fluid speaker-img" alt="Speaker 3">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .speaker-img-wrap {
        border-radius: 20px;
        overflow: hidden;
    }

    .speaker-img {
        border-radius: 20px;
    }
</style>




<?php
/* Template Name: Single Webinar */
get_footer('contact');
?>