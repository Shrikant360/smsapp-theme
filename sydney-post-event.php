<?php
/*
Template Name: Sydney Post Event
*/
get_header('sms');
?>

<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet" />
 
	<!-- Bootstrap 5 CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
 
	<style>
		/* ─── Base ─── */
		body {
			font-family: 'Open Sans', sans-serif;
			background-color: #fff;
			overflow-x: hidden;
			margin: 0;
			padding: 0;
		}
        
       /* header fix code Start */
        .top-header-left .link p {
        margin-top:7px;
        }
        .top-header-left .link .m-hov-1{
        padding-top:7px;
        }
        
        /* header fix code End */
 
		a { text-decoration: none !important; }
 
		h1, h2, h3, h4, h5, h6,
		.hero-title, .section-heading, .stats-heading, .cta-title {
			text-transform: none !important;
		}
 
		/* ══════════════════════════════════
		   SECTION 1 — HERO
		══════════════════════════════════ */
		.section-hero {
			background: url('https://360smsapp.com/wp-content/uploads/2026/03/hero-bg.png') center center / cover no-repeat;
			padding-top: 85px;
			padding-bottom: 150px;
			color: #fff;
			position: relative;
			overflow: hidden;
		}
 
		.hero-badges-row {
			display: flex;
			align-items: center;
			justify-content: center;
			gap: 0;
			margin-top: 18px;
			margin-bottom: 20px;
		}
 
		.hero-badge {
			border: 1px solid rgba(255, 255, 255, 0.55);
			border-radius: 5px;
			padding: 5px 14px;
			font-size: 12.5px;
			font-weight: 500;
			color: #fff;
			display: inline-flex;
			align-items: center;
			gap: 6px;
			background: transparent;
			white-space: nowrap;
		}
 
		.hero-badge + .hero-badge {
			border-left: none;
			border-radius: 0 5px 5px 0;
		}
 
		.hero-badge:first-child {
			border-radius: 5px 0 0 5px;
		}
 
		.hero-desc {
			font-size: clamp(14px, 2vw, 22px);
            font-weight: 600; /* semibold */
			line-height: 1.75;
			opacity: 0.94;
			text-align: center;
		}
 	
    	@media (max-width: 767px) {
    /* styles for small screens */
 	.section-hero{
    padding-bottom:100px;
    }
}
        
		/* ══════════════════════════════════
		   SECTION 2 — HIGHLIGHTS
		══════════════════════════════════ */
		.section-highlights {
			background-color: #ffffff;
			padding-top: 56px;
			padding-bottom: 20px;
		}
 
		.section-heading {
			font-size: clamp(24px, 4vw, 32px);
			font-weight: 800;
			color: #0e2547;
			letter-spacing: -0.3px;
			line-height: 1.2;
		}
 
		.section-subtext {
			font-size: clamp(14px, 2vw, 20px);
			color: #555e6d;
			line-height: 1.72;
		}
 
		.feature-card {
			border: 1px solid #e4eaf3;
			border-bottom: 3px solid #032D60;
			border-radius: 12px;
			padding: 32px 46px;
			background: #FAFAFA;
			box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
			height: 100%;
			display: flex;
			align-items: center;
			transition: box-shadow 0.2s, transform 0.2s;
		}
 
		.feature-card:hover {
			box-shadow: 0 8px 30px rgba(0, 21, 162, 0.1);
			transform: translateY(-2px);
		}
 
		.feature-card-text {
			font-size: clamp(15px, 2vw, 22px);
			color: #333d4d;
			line-height: 1.65;
			margin: 0;
		}
 
		.feature-card-text strong {
			font-weight: 700;
			color: #0e2547;
		}
        
        @media (max-width: 767px) {
    /* styles for small screens */
    .feature-card{
    padding:23px 30px;
    }
    
    .row:last-of-type{
    margin-left: 10px;
    margin-right: 10px;
    }
    
    .section-highlights{
    padding-top: 15px;
    }
}
 
		 /* ═══════════════════════════════════════════
     SECTION 3 — WHAT AWAITS YOU AT OUR BOOTH
  ═══════════════════════════════════════════ */
  .awaits-section {
            position: relative;
            background: url("https://360smsapp.com/wp-content/uploads/2026/03/background-1.png") no-repeat center center;
            background-size: 100% 100%;
            padding: 8% 0;
            text-align: center;
            overflow: hidden;
        }

        .awaits-section .awaits-heading {

            font-size: clamp(24px, 4.5vw, 32px);
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 5px;
            line-height: 1.2;

        }

        .awaits-section .awaits-subheading {
            font-size: clamp(16px, 2vw, 20px);
            font-weight: 400;
            color: #ffffff;
            margin-bottom: 50px;
        }

        .awaits-col {
            padding: 0 30px;
        }

        /* gap between the two columns */
        .awaits-col-left {
            padding-right: 60px;
            padding-left: 0;
        }

        .awaits-col-right {
            padding-left: 60px;
            padding-right: 0;
        }

        .awaits-item {
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
            padding: 18px 10px;
        }

        .awaits-item-text {

            font-size: clamp(18px, 2vw, 22px);
            font-weight: 400;
            color: #ffffff;
            text-align: left;
            margin: 0;
            line-height: 1.3;
        }

        .awaits-item-text strong {
            font-size: 32px;
            font-weight: 700;
            margin-right: 4px;
        }

        .awaits-bottom-text {
            font-size: clamp(18px, 1.8vw, 24px);
            color: #ffffff;
            font-weight: 500;
            margin-top: 50px;
            line-height: 1.4;
        }

        @media (max-width: 768px) {

            .awaits-col-left,
            .awaits-col-right {
                padding: 0;
            }

            .awaits-item {
                padding: 10px 10px;
                margin-bottom:15px;
            }

            .awaits-section {
                padding: 20% 0 33% 0;
                background-size: cover;
                background-position: center;
            }

            .awaits-bottom-text {
                margin-top: 30px;
            }

        }

        @media (max-width: 499px) {
            .awaits-section .awaits-heading {}
        }
		/* ══════════════════════════════════
		   SECTION 4 — MEMORABLE MOMENTS
		══════════════════════════════════ */
		.section-moments {
			background-color: #ffffff;
			padding-top: 58px;
			padding-bottom: 56px;
		}
 
		.moment-img-wrap {
			border-radius: 8px;
			overflow: hidden;
			aspect-ratio: 3 / 4;
			background: #dde5f0;
		}
 
		.moment-img-wrap img {
			width: 100%;
			height: 100%;
			object-fit: cover;
			display: block;
			transition: transform 0.35s ease;
		}
 
		.moment-img-wrap:hover img {
			transform: scale(1.04);
		}
 
		.dot-indicator {
			width: 9px;
			height: 9px;
			border-radius: 50%;
			background-color: #c8d8f5;
			display: inline-block;
			margin: 0 !important;
			padding: 0;
			opacity: 1 !important;
			cursor: pointer;
		}
 
		.dot-indicator.active {
			background-color: #0015a2;
		}
 
		/* ══════════════════════════════════
		   SECTION 5 — CTA
		══════════════════════════════════ */
		.section-cta-wrap {
			background: linear-gradient(180deg, #FFFFFF 0%, rgba(255, 255, 255, 0.26) 22%, rgba(251, 195, 184, 0.52) 100%) !important;
			padding-top: 28px;
			padding-bottom: 44px;
		}
 
		.cta-box {
			background: linear-gradient(150deg, #1a3d65 0%, #00346d 100%);
			border-radius: 14px;
			padding: 44px 36px;
		}
 
		.cta-title {
			font-size: clamp(16px, 2.5vw, 20px);
			font-weight: 800;
			color: #fff;
			line-height: 1.5;
		}
 
		.cta-btn {
			background: #fff;
			color: #00346d;
			border: none;
			border-radius: 28px;
			padding: 10px 28px;
			font-family: 'Open Sans', sans-serif;
			font-size: 13.5px;
			font-weight: 700;
			text-decoration: none;
			display: inline-block;
			transition: opacity 0.2s, transform 0.2s;
		}
 
		.cta-btn:hover {
			opacity: 0.88;
			transform: translateY(-2px);
			color: #00346d;
		}
	</style>
</head>
 
<body <?php body_class(); ?>>
 
	<?php wp_body_open(); ?>
 
	<!-- ══════════════════════════════════════════════
	     SECTION 1 — HERO
	══════════════════════════════════════════════ -->
	<section class="section-hero">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-9 col-lg-9 position-relative">
 
					<img
						src="https://360smsapp.com/wp-content/uploads/2026/03/hero-title.png"
						alt="<?php esc_attr_e( 'Salesforce Agentforce World Tour Sydney', 'textdomain' ); ?>"
						class="img-fluid d-block mx-auto">
					
 
					<div class="hero-badges-row">
						<span class="hero-badge">
							<svg width="12" height="12" viewBox="0 0 16 16" fill="none" aria-hidden="true">
								<rect x="1.5" y="3.5" width="13" height="11" rx="1.5" stroke="white" stroke-width="1.4" fill="none" />
								<path d="M5 1.5v3M11 1.5v3M1.5 7h13" stroke="white" stroke-width="1.4" stroke-linecap="round" />
							</svg>
							<?php esc_html_e( 'February 25, 2026', 'textdomain' ); ?>
						</span>
						<span class="hero-badge">
							<svg width="9" height="12" viewBox="0 0 10 14" fill="none" aria-hidden="true">
								<path d="M5 1C2.8 1 1 2.8 1 5c0 3.5 4 8 4 8s4-4.5 4-8c0-2.2-1.8-4-4-4z" stroke="white" stroke-width="1.4" fill="none" />
								<circle cx="5" cy="5" r="1.3" fill="white" />
							</svg>
							<?php esc_html_e( 'ICC Sydney', 'textdomain' ); ?>
						</span>
					</div>
 
					<p class="hero-desc">
						<?php esc_html_e( 'From packed booth conversations to live demos and meaningful 1:1 discussions, the event was a huge success. Thanks to everyone who stopped by our booth.', 'textdomain' ); ?>
					</p>
 
				</div>
			</div>
		</div>
	</section>
 
 
	<!-- ══════════════════════════════════════════════
	     SECTION 2 — AI AGENTS HIGHLIGHTS
	══════════════════════════════════════════════ -->
	<section class="section-highlights">
		<div class="container">
 
			<div class="row justify-content-center text-center">
				<div class="col-12 col-lg-10">
					<h2 class="section-heading mb-3">
						<?php esc_html_e( 'AI Agents in Action: Event Highlights', 'textdomain' ); ?>
					</h2>
					<p class="section-subtext mb-5">
						<?php esc_html_e( 'At our booth, we showcased how Salesforce-native AI agents by 360 SMS are transforming multichannel customer engagement across SMS, WhatsApp, and voice, at scale.', 'textdomain' ); ?>
					</p>
				</div>
			</div>
 
			<div class="row g-4 justify-content-center pb-5">
 
				<div class="col-12 col-md-6 col-lg-5">
					<div class="feature-card">
						<p class="feature-card-text">
							<strong><?php esc_html_e( 'AI Voice Agent', 'textdomain' ); ?></strong>
							<?php esc_html_e( ' that holds human-like conversation, handles objections, and books demos in real time.', 'textdomain' ); ?>
						</p>
					</div>
				</div>
 
				<div class="col-12 col-md-6 col-lg-5">
					<div class="feature-card">
						<p class="feature-card-text">
							<strong><?php esc_html_e( 'Chat &amp; Recruitment Agents', 'textdomain' ); ?></strong>
							<?php esc_html_e( ' engaging and qualifying leads 24/7 and accelerating hiring processes.', 'textdomain' ); ?>
						</p>
					</div>
				</div>
 
				<div class="col-12 col-md-6 col-lg-5">
					<div class="feature-card">
						<p class="feature-card-text">
							<strong><?php esc_html_e( 'Transcription &amp; Translation Agents', 'textdomain' ); ?></strong>
							<?php esc_html_e( ' offering real-time guidance and powering multilingual conversations.', 'textdomain' ); ?>
						</p>
					</div>
				</div>
 
				<div class="col-12 col-md-6 col-lg-5">
					<div class="feature-card">
						<p class="feature-card-text">
							<strong><?php esc_html_e( 'Metadata Creation &amp; Pre-sales Agents', 'textdomain' ); ?></strong>
							<?php esc_html_e( ' accelerating Salesforce operations and presales workflows.', 'textdomain' ); ?>
						</p>
					</div>
				</div>
 
			</div>
		</div>
	</section>
 
 
	 <!-- ═══════════════════════════════════════════
     SECTION 3 — WHAT AWAITS YOU AT OUR BOOTH
     bg: blue gradient · heading · 2-col item list
═══════════════════════════════════════════ -->
  <section class="awaits-section mt-5">
        <div class="container" style="max-width: 1100px;">

            <h2 class="awaits-heading">What An Eventful Day </h2>
            

            <div class="row justify-content-center"
                style="width:80%; max-width:1100px; margin:0 auto; margin-top: 50px;">

                <!-- Left column -->
                <div class="col-12 col-md-6 awaits-col-left">
                    <div class="awaits-item">
                        <p class="awaits-item-text"><strong>30+</strong> AI Agents Showcased</p>
                    </div>
                    <div class="awaits-item">
                        <p class="awaits-item-text"><strong>300+</strong> 1:1 B2B Interactions</p>
                    </div>
                    <div class="awaits-item">
                        <p class="awaits-item-text"><strong>50+</strong> Real Use Cases Discussed</p>
                    </div>
                </div>

                <!-- Right column -->
                <div class="col-12 col-md-6 awaits-col-right">
                    <div class="awaits-item">
                        <p class="awaits-item-text"><strong>100+</strong> Live Demos Performed</p>
                    </div>
                    <div class="awaits-item">
                        <p class="awaits-item-text"><strong>20+</strong> Industries Served</p>
                    </div>
                    <div class="awaits-item">
                        <p class="awaits-item-text"><strong>40+</strong> Challenges Addressed</p>
                    </div>
                </div>

            </div><!-- /row -->

            <div class="row justify-content-center">
                <div class="col-12 col-md-9">
                    <p class="awaits-bottom-text">
                        Digital Engagement is evolving and 360 SMS AI agents<br />
                        are leading the way reshaping
                    </p>
                </div>
            </div>

        </div><!-- /container -->
    </section>


 
	<!-- ══════════════════════════════════════════════
	     SECTION 4 — MEMORABLE MOMENTS
	══════════════════════════════════════════════ -->
	<section class="section-moments">
		<div class="container">
 
			<div class="row justify-content-center text-center mb-4">
				<div class="col-12 col-lg-10">
					<h2 class="section-heading mb-3">
						<?php esc_html_e( 'Memorable Moments from the Event', 'textdomain' ); ?>
					</h2>
					<p class="section-subtext">
						<?php esc_html_e( 'From longtime clients to new associations, collaborations, and team bonding, here are some moments from Agentforce World Tour Sydney that made the event truly memorable.', 'textdomain' ); ?>
					</p>
				</div>
			</div>
 
			<div id="momentsSlider" class="mt-3 position-relative" style="overflow: hidden;">
				<div class="row g-3 flex-nowrap" id="momentsSliderTrack"
					style="transition: transform 0.4s ease-in-out; margin: 0;">
					<!-- Original 4 -->
					<div class="col-6 col-md-3 moment-slide">
						<div class="moment-img-wrap">
							<img src="https://360smsapp.com/wp-content/uploads/2026/03/moment-1.png" alt="<?php esc_attr_e( 'Team at the 360 SMS booth', 'textdomain' ); ?>" />
						</div>
					</div>
					<div class="col-6 col-md-3 moment-slide">
						<div class="moment-img-wrap">
							<img src="https://360smsapp.com/wp-content/uploads/2026/03/moment2.png" alt="<?php esc_attr_e( 'Team members smiling', 'textdomain' ); ?>" />
						</div>
					</div>
					<div class="col-6 col-md-3 moment-slide">
						<div class="moment-img-wrap">
							<img src="https://360smsapp.com/wp-content/uploads/2026/03/moment3.png" alt="<?php esc_attr_e( 'Live demo at the booth', 'textdomain' ); ?>" />
						</div>
					</div>
					<div class="col-6 col-md-3 moment-slide">
						<div class="moment-img-wrap">
							<img src="https://360smsapp.com/wp-content/uploads/2026/03/moment4.png" alt="<?php esc_attr_e( 'New partnerships formed', 'textdomain' ); ?>" />
						</div>
					</div>
					<!-- Duplicated 4 for infinite-loop effect -->
					<div class="col-6 col-md-3 moment-slide" aria-hidden="true">
						<div class="moment-img-wrap">
							<img src="https://360smsapp.com/wp-content/uploads/2026/03/moment-1.png" alt="" />
						</div>
					</div>
					<div class="col-6 col-md-3 moment-slide" aria-hidden="true">
						<div class="moment-img-wrap">
							<img src="https://360smsapp.com/wp-content/uploads/2026/03/moment2.png" alt="" />
						</div>
					</div>
					<div class="col-6 col-md-3 moment-slide" aria-hidden="true">
						<div class="moment-img-wrap">
							<img src="https://360smsapp.com/wp-content/uploads/2026/03/moment3.png" alt="" />
						</div>
					</div>
					<div class="col-6 col-md-3 moment-slide" aria-hidden="true">
						<div class="moment-img-wrap">
							<img src="https://360smsapp.com/wp-content/uploads/2026/03/moment4.png" alt="" />
						</div>
					</div>
				</div>
			</div>
 
			<div class="d-flex justify-content-center gap-2 mt-4" id="momentsDots">
				<span class="dot-indicator active"></span>
				<span class="dot-indicator"></span>
				<span class="dot-indicator"></span>
				<span class="dot-indicator"></span>
			</div>
 
		</div>
	</section>
 
 
	<!-- ══════════════════════════════════════════════
	     SECTION 5 — CTA
	══════════════════════════════════════════════ -->
	<div class="section-cta-wrap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-md-10 col-lg-10">
					<div class="cta-box text-center">
						<h3 class="cta-title mb-5">
							<?php esc_html_e( 'Want to join us at our next', 'textdomain' ); ?><br />
							<?php esc_html_e( 'event to supercharge your Digital Engagement?', 'textdomain' ); ?>
						</h3>
						<a href="https://360smsapp.com/events/agentforce-nyc-world-tour-2026/" class="cta-btn target="_blank">
							<?php esc_html_e( "Here's we're headed next", 'textdomain' ); ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
 
 
	<!-- Bootstrap 5 JS bundle (includes Popper) -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 
	<!-- Moments Slider Script -->
	<script>
	document.addEventListener('DOMContentLoaded', function () {
		var track        = document.getElementById('momentsSliderTrack');
		var dots         = document.querySelectorAll('#momentsDots .dot-indicator');
		var currentIndex = 0;
		var maxIndex     = dots.length; // 4
 
		if (!track || !dots.length) { return; }
 
		function updateSlider(index, smooth) {
			if (smooth === undefined) { smooth = true; }
			currentIndex = index;
			var colWidth = track.querySelector('.moment-slide').offsetWidth;
			track.style.transition = smooth ? 'transform 0.4s ease-in-out' : 'none';
			track.style.transform  = 'translateX(-' + (currentIndex * colWidth) + 'px)';
			dots.forEach(function (d) { d.classList.remove('active'); });
			dots[currentIndex % dots.length].classList.add('active');
		}
 
		dots.forEach(function (dot, index) {
			dot.addEventListener('click', function () { updateSlider(index); });
		});
 
		setInterval(function () {
			var nextIndex = currentIndex + 1;
			if (nextIndex > maxIndex) {
				updateSlider(0, false);
				track.offsetHeight; // force reflow
				nextIndex = 1;
			}
			updateSlider(nextIndex);
		}, 3000);
 
		window.addEventListener('resize', function () {
			updateSlider(currentIndex, false);
		});
	});
	</script>

<?php get_footer('sms'); ?>