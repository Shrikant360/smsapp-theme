<?php

/**
 * Template Name: User Guide Page
 */

get_header('sms');
?>


<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
    :root {
        --primary-blue: #0057B8;
        --dark-navy: #0B3B75;
        --accent-blue: #499FDD;
        --bg-light: #F8FAFC;
        --bg-quote: #D0D7F4;
        --bg-social: #F4F6F7;
        --text-dark: #373737;
        --text-muted: #64748B;
        --white: #FFFFFF;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        background-color: var(--white) !important;
        color: var(--text-dark);
        line-height: 1.6;
        font-size: 16px;
    }

    /* ── TYPOGRAPHY ── */
    h1, h2, h3, h4, h5, h6 {
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        color: var(--dark-navy);
        text-transform: none;
    }

    h1 {
        font-size: clamp(28px, 4.5vw, 45px);
        line-height: 1.25;
    }

		h2 {
			font-size: clamp(24px, 3.5vw, 32px);
			line-height: 1.3;
		}

		/* ── HERO BANNER HEADER ── */
		.story-hero-header {
			
			background:linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;
			padding: clamp(40px, 6vw, 70px) 0;
			text-align: center;
			
		}

		.story-hero-header h1 {
			color: #000000;
			margin: 0;
			letter-spacing: -0.02em;
		}

		/* ── HERO MOCKUP & NEWS ── */
		.story-hero-content {
			padding: clamp(40px, 6vw, 80px) 0;
			background-color: var(--white);
		}

		.mockup-container {
			max-width: 1000px;
			margin: 0 auto clamp(30px, 5vw, 50px);
			transition: transform 0.4s cubic-bezier(0.165, 0.84, 0.44, 1);
		}

		.mockup-container:hover {
			transform: translateY(-8px);
		}

		.mockup-img {
			width: 100%;
			height: auto;
			border-radius: 12px;
			box-shadow: 0 20px 40px rgba(11, 59, 117, 0.12);
			transition: box-shadow 0.4s ease;
		}

		.mockup-container:hover .mockup-img {
			box-shadow: 0 30px 60px rgba(11, 59, 117, 0.2);
		}

		.italic-lead {
			font-size: clamp(16px, 2.2vw, 20px);
			color: var(--text-dark);
			font-style: italic;
			text-align: center;
			max-width: 800px;
			margin: 0 auto clamp(25px, 4vw, 40px);
			font-weight: 500;
			line-height: 1.5;
		}

		.news-text {
			font-size: 16px;
			color: var(--text-dark);
			text-align: justify;
			max-width: 900px;
			margin: 0 auto;
			line-height: 1.8;
		}

		.news-text strong {
			color: var(--dark-navy);
		}

		.news-text a {
			color: var(--primary-blue);
			font-weight: 700;
			text-decoration: none;
			border-bottom: 2px solid rgba(0, 87, 184, 0.2);
			transition: all 0.2s ease;
		}

		.news-text a:hover {
			color: var(--dark-navy);
			border-bottom-color: var(--dark-navy);
		}

		/* ── BOOTSTRAP CONTENT SECTION (as per screenshot) ── */
		.config-guide-section h3 {
			font-size: 19px;
			letter-spacing: 0.08em;
		}

		.config-guide-section .btn-download {
			background-color: #00bcd4;
			border-color: #00bcd4;
			max-width: 340px;
			width: 100%;
			padding: 12px 28px;
			font-weight: 700;
			text-transform: uppercase;
		}

		.config-guide-section .btn-download:hover,
		.config-guide-section .btn-download:focus {
			background-color: #00a7bd;
			border-color: #00a7bd;
		}
	</style>

	<!-- ── Hero Banner Header ── -->
	<div class="story-hero-header">
		<div class="container">
			<h1>360 SMS App is now enabled <br> <span style="color:#0057B8;">with AppExchange Chat</span></h1>
		</div>
	</div>

	

	<!-- ── New Section (matches screenshot) ── -->
	<section class="config-guide-section py-4 py-md-5">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-lg-9">
					<p class="mb-3">
						360 SMS is an easily implemented integration of inbound and outbound Text Messaging (SMS) capabilities within Salesforce as well as MMS (sending pictures and files). The 360 SMS features at a high level are:
					</p>
					<ul class="mb-4">
						<li>Individual one-on-one texting</li>
						<li>Batch texting from List Views and Reports</li>
						<li>Scheduled Texting</li>
						<li>Triggered automatic texting via native Salesforce Process Builders</li>
						<li>Surveys and Inbound Keyword processing to update Salesforce Fields or trigger additional messages</li>
						<li>Templates</li>
					</ul>
					<p class="mb-4">
						The solution is 100% native Salesforce, meaning that no data is stored outside of Salesforce. 3rd party messaging services such as Twilio are invoked from the Salesforce environment but the messages (SMS) and/or attachments (MMS) are never stored on other servers besides within the native Salesforce.
					</p>
					<h3 class="text-center text-uppercase fw-semibold mb-4">
						FOR MORE INFORMATION, DOWNLOAD THE 360 CONFIGURATION USER GUIDE.
					</h3>
					
						<div class="card card-body border-0 p-0">
							<?php echo do_shortcode('[commonform]'); ?>
						</div>
					
				</div>
			</div>
		</div>
	</section>

	<!-- Bootstrap 5 JS Bundle -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<?php get_footer('sms'); ?>