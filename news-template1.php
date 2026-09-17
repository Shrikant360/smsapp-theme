<?php

/**
 * Template Name: News-360 SMS App now Enabled with AppExchange Chat
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

		/* ── ABOUT SECTIONS ── */
		.section-about {
			padding: clamp(40px, 6vw, 70px) 0;
			background-color: var(--bg-light);
			border-top: 1px solid rgba(0, 0, 0, 0.05);
			border-bottom: 1px solid rgba(0, 0, 0, 0.05);
		}

		.section-title-wrapper {
			text-align: center;
			margin-bottom: clamp(25px, 4vw, 40px);
		}

		.section-title-wrapper h2 {
			display: inline-block;
			position: relative;
			padding-bottom: 12px;
			margin: 0;
		}

		.section-title-wrapper h2::after {
			content: '';
			position: absolute;
			bottom: 0;
			left: 25%;
			width: 50%;
			height: 3px;
			background-color: var(--accent-blue);
			border-radius: 2px;
		}

		.about-description {
			max-width: 900px;
			margin: 0 auto;
			text-align: justify;
			line-height: 1.8;
			font-size: 16px;
		}

		/* ── COMMENTS ON THE NEWS ── */
		.section-comments {
			padding: clamp(40px, 6vw, 80px) 0;
			background-color: var(--white);
		}

		.quote-card {
			background-color: var(--bg-quote);
			border: 1px solid rgba(11, 59, 117, 0.1);
			border-radius: 16px;
			padding: clamp(25px, 4vw, 45px);
			height: 100%;
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			box-shadow: 0 10px 30px rgba(11, 59, 117, 0.04);
			transition: transform 0.3s ease, box-shadow 0.3s ease;
			position: relative;
			overflow: hidden;
		}

		.quote-card:hover {
			transform: translateY(-5px);
			box-shadow: 0 15px 40px rgba(11, 59, 117, 0.08);
		}

		.quote-icon {
			font-size: 40px;
			color: rgba(11, 59, 117, 0.15);
			position: absolute;
			top: 20px;
			left: 20px;
			line-height: 1;
		}

		.quote-text {
			font-size: 16px;
			line-height: 1.7;
			color: var(--text-dark);
			margin-bottom: 25px;
			position: relative;
			z-index: 1;
			text-align: justify;
			padding-top: 15px;
		}

		.quote-author {
			border-top: 1px solid rgba(11, 59, 117, 0.15);
			padding-top: 15px;
			font-size: 14px;
			line-height: 1.4;
		}

		.quote-author strong {
			color: var(--dark-navy);
			display: block;
			font-size: 15px;
			margin-bottom: 2px;
		}

		/* ── SOCIAL CONNECT BOXES ── */
		.section-socials {
			padding: clamp(40px, 6vw, 70px) 0;
			background-color: var(--bg-light);
		}

		.social-box {
			background-color: var(--white);
			border-radius: 16px;
			padding: clamp(25px, 4vw, 40px);
			box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
			height: 100%;
			transition: transform 0.3s ease;
		}

		.social-box:hover {
			transform: translateY(-4px);
		}

		.social-box h3 {
			font-size: clamp(20px, 2.5vw, 24px);
			text-align: center;
			margin-bottom: 30px;
			border-bottom: 2px solid var(--bg-light);
			padding-bottom: 15px;
			letter-spacing: 0.05em;
		}

		.social-link-item {
			display: flex;
			justify-content: space-between;
			align-items: center;
			background-color: var(--bg-light);
			padding: 14px 20px;
			border-radius: 12px;
			margin-bottom: 15px;
			text-decoration: none !important;
			color: var(--text-dark);
			font-weight: 600;
			transition: all 0.2s ease;
		}

		.social-link-item:last-child {
			margin-bottom: 0;
		}

		.social-link-item:hover {
			background-color: var(--primary-blue);
			color: var(--white);
			transform: translateX(4px);
		}

		.social-icon-wrapper {
			width: 36px;
			height: 36px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 18px;
			color: var(--white);
			transition: background-color 0.2s ease;
		}

		.facebook-icon {
			background-color: #1877F2;
		}
		.twitter-icon {
			background-color: #1DA1F2;
		}
		.linkedin-icon {
			background-color: #0A66C2;
		}

		.social-link-item:hover .social-icon-wrapper {
			background-color: var(--white);
			color: var(--primary-blue);
		}

		/* ── FOOTER & DISCLAIMER ── */
		.section-disclaimer {
			padding: 30px 0;
			background-color: var(--white);
			border-top: 1px solid rgba(0, 0, 0, 0.05);
		}

		.disclaimer-text {
			font-size: 13px;
			color: var(--text-muted);
			text-align: center;
			max-width: 900px;
			margin: 0 auto;
			line-height: 1.6;
			font-style: italic;
		}

		/* ── CTA BANNER ── */
		.cta-banner {
			background-color: var(--primary-blue);
			padding: clamp(35px, 5vw, 45px) 0;
			text-align: center;
			width: 100%;
			box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
		}

		.btn-get-started {
			background-color: var(--white) !important;
			color: var(--primary-blue) !important;
			border: none;
			border-radius: 6px;
			padding: clamp(12px, 1.5vw, 16px) clamp(35px, 4vw, 55px);
			font-size: clamp(14px, 1.6vw, 16px);
			font-weight: 700;
			text-transform: uppercase;
			letter-spacing: 0.08em;
			text-decoration: none !important;
			display: inline-block;
			transition: transform 0.2s, box-shadow 0.2s, background-color 0.2s;
			box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
		}

		.btn-get-started:hover {
			background-color: #F1F5F9 !important;
			transform: translateY(-2px);
			box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
		}

		.btn-get-started:active {
			transform: translateY(1px);
		}
	</style>

	<!-- ── Hero Banner Header ── -->
	<header class="story-hero-header">
		<div class="container">
			<h1>360 SMS App is now enabled <br> <span style="color:#0057B8;">with AppExchange Chat</span></h1>
		</div>
	</header>

	<!-- ── Hero Mockup & News Content ── -->
	<section class="story-hero-content">
		<div class="container">
			<!-- Monitor Display Mockup -->
			<div class="mockup-container">
				<a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" rel="noopener noreferrer">
					<img src="https://360smsapp.com/wp-content/uploads/2021/07/2.jpg" alt="360 SMS App AppExchange Chat Enabled" class="mockup-img">
				</a>
			</div>

			<!-- Subtext/Lead Italic -->
			<p class="italic-lead">
				Customers can now connect with 360 SMS directly to book demos and resolve their inquiries
			</p>

			<!-- Main News Paragraph -->
			<div class="news-text">
				<strong>California, 07/23/2021, July Friday,2021</strong> – 360 SMS announced it has embedded AppExchange Chat functionality within 360 SMS App on Salesforce AppExchange, empowering customers to connect with 360 SMS experts in real-time and make better business decisions. 360 SMS App is a business messaging app that teams can use to speak to customers right where they are for sales, service, marketing, and more. The mobile-first app developed by texting experts at 360 SMS enables teams to connect and manage communication through Salesforce. Now customers can get their questions answered directly by 360 SMS experts without even leaving their AppExchange listing. 360 SMS App is currently available on <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" rel="noopener noreferrer">AppExchange</a>.
			</div>
		</div>
	</section>

	<!-- ── About 360 SMS App Section ── -->
	<section class="section-about">
		<div class="container">
			<div class="section-title-wrapper">
				<h2>About 360 SMS App</h2>
			</div>
			<div class="about-description">
				Texting brings businesses closer to consumer devices. And it’s what customers have come to expect. 360 SMS App lets you send and automate single and bulk texts for millions of smart interactions, surveys, and follow-ups to increase customer engagement. Admins can then monitor effectiveness over dashboards. The app also gives teams access to multiple channels to send messages over SMS, MMS, Ringless Voicemails, Telephony, and more, within two minutes of installation. Being listed on AppExchange lets 360 SMS connect to customers and partners and drive meaningful business results.
			</div>
		</div>
	</section>

	<!-- ── Comments on the News Section ── -->
	<section class="section-comments">
		<div class="container">
			<div class="section-title-wrapper">
				<h2>Comments on the News</h2>
			</div>
			<div class="row g-4 justify-content-center">
				<!-- Quote 1 -->
				<div class="col-md-6">
					<div class="quote-card">
						<div class="quote-icon"><i class="bi bi-quote"></i></div>
						<div class="quote-text">
							“360 SMS App is built by design to make powerful texting features and configurations accessible to non-coders and help businesses unleash the true potential of texting,” customers will now have direct access to us for demonstrations and guidance on their use cases.
						</div>
						<div class="quote-author">
							<strong>Siddharth Sehgal</strong>
							CEO and Founder of the 360 SMS
						</div>
					</div>
				</div>

				<!-- Quote 2 -->
				<div class="col-md-6">
					<div class="quote-card">
						<div class="quote-icon"><i class="bi bi-quote"></i></div>
						<div class="quote-text">
							“AppExchange has always brought partners and customers together—and now the addition of AppExchange Chat connects our ecosystem in real-time,” with this feature, customers can leverage 360 SMS’ expertise to accelerate their digital transformations with confidence.
						</div>
						<div class="quote-author">
							<strong>Woodson Martin</strong>
							GM of Salesforce AppExchange
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ── About Salesforce AppExchange Section ── -->
	<section class="section-about" style="border-bottom: none;">
		<div class="container">
			<div class="section-title-wrapper">
				<h2>About Salesforce AppExchange</h2>
			</div>
			<div class="about-description">
				Salesforce AppExchange, the world’s leading enterprise cloud marketplace, empowers companies, developers, and entrepreneurs to build, market, and grow in entirely new ways. With more than 6,000 listings, 9 million customer installs and 117,000 peer reviews, AppExchange connects customers of all sizes and across industries to ready-to-install or customizable apps and Salesforce-certified consultants to solve any business challenge.
			</div>
		</div>
	</section>

	<!-- ── Social Connect Boxes ── -->
	<section class="section-socials">
		<div class="container">
			<div class="row g-4">
				<!-- 360 SMS App Socials -->
				<div class="col-md-6">
					<div class="social-box">
						<h3>360 SMS APP</h3>
						<a href="https://www.facebook.com/360SMSApp" target="_blank" rel="noopener noreferrer" class="social-link-item">
							<span>Become a fan of 360 SMS</span>
							<span class="social-icon-wrapper facebook-icon"><i class="bi bi-facebook"></i></span>
						</a>
						<a href="https://twitter.com/360smsapp" target="_blank" rel="noopener noreferrer" class="social-link-item">
							<span>Follow 360 SMS on Twitter</span>
							<span class="social-icon-wrapper twitter-icon"><i class="bi bi-twitter"></i></span>
						</a>
						<a href="https://www.linkedin.com/company/360smsapp/" target="_blank" rel="noopener noreferrer" class="social-link-item">
							<span>Connect with 360 SMS on LinkedIn</span>
							<span class="social-icon-wrapper linkedin-icon"><i class="bi bi-linkedin"></i></span>
						</a>
					</div>
				</div>

				<!-- Salesforce Socials -->
				<div class="col-md-6">
					<div class="social-box">
						<h3>Salesforce</h3>
						<a href="http://www.facebook.com/salesforce" target="_blank" rel="noopener noreferrer" class="social-link-item">
							<span>Like Salesforce on Facebook</span>
							<span class="social-icon-wrapper facebook-icon"><i class="bi bi-facebook"></i></span>
						</a>
						<a href="https://twitter.com/salesforce" target="_blank" rel="noopener noreferrer" class="social-link-item">
							<span>Follow Salesforce on Twitter</span>
							<span class="social-icon-wrapper twitter-icon"><i class="bi bi-twitter"></i></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ── Footnote & Disclaimer ── -->
	<footer class="section-disclaimer">
		<div class="container">
			<p class="disclaimer-text">
				Salesforce, AppExchange, and others are among the trademarks of salesforce.com, Inc. 360 SMS and 360 SMS App are among the trademarks of 360 Degree Cloud Technologies LLC.
			</p>
		</div>
	</footer>


	<!-- Bootstrap 5 JS Bundle -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<?php get_footer('sms'); ?>