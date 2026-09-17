<?php

/**
 * Template Name: Privacy Policy Page
 */

get_header('sms');

$privacy_current_url = esc_url( home_url( '/privacy-policy/privacy-policy-current/' ) );
$privacy_march_url   = esc_url( home_url( '/privacy-policy/march-3-2025/' ) );
?>


<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<style>
		/* ── Privacy Policy archive only (no global h1/h2/body rules) ── */
		.sms-privacy-archive-wrap .sms-privacy-archive-hero {
			background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;
			padding: clamp(40px, 6vw, 70px) 0;
		}

		.sms-privacy-archive-wrap h1.sms-privacy-archive-hero-title {
			color: #000000;
			margin: 0;
			padding: 0;
			border: 0;
			/*text-transform: uppercase;*/
			letter-spacing: 0.08em;
			font-size: clamp(28px, 3vw, 45px);
			font-weight: 700;
			line-height: 1.25;
		}

		.sms-privacy-archive-wrap .sms-privacy-archive-body {
			background: #ffffff;
			padding: clamp(32px, 5vw, 56px) 0;
		}

		.sms-privacy-archive-wrap h2.sms-privacy-archive-section-title {
			color: #0057b8;
			font-size: clamp(22px, 2.5vw, 28px);
			font-weight: 700;
			line-height: 1.3;
			margin: 0 0 1rem;
			padding: 0;
			border: 0;
			text-transform: none;
		}

		.sms-privacy-archive-wrap .sms-privacy-archive-intro {
			color: #777777;
			font-size: 16px;
			line-height: 1.6;
			margin: 0 0 2rem;
			max-width: 720px;
		}

		.sms-privacy-archive-wrap .sms-privacy-archive-versions {
			list-style: none;
			padding: 0;
			margin: 0;
			max-width: 720px;
		}

		.sms-privacy-archive-wrap .sms-privacy-archive-versions li {
			border-bottom: 1px solid #e5e7eb;
		}

		.sms-privacy-archive-wrap .sms-privacy-archive-versions li:last-child {
			border-bottom: 1px solid #e5e7eb;
		}

		.sms-privacy-archive-wrap .sms-privacy-archive-versions a {
			display: flex;
			align-items: center;
			gap: 0.65rem;
			padding: 1.1rem 0;
			color: #555555;
			text-decoration: none;
			font-size: 16px;
			transition: color 0.2s ease;
		}

		.sms-privacy-archive-wrap .sms-privacy-archive-versions a:hover {
			color: #0057b8;
		}

		.sms-privacy-archive-wrap .sms-privacy-archive-versions a:hover .sms-privacy-archive-icon {
			color: #0057b8;
		}

		.sms-privacy-archive-wrap .sms-privacy-archive-icon {
			color: #0057b8;
			font-size: 1.5rem;
			line-height: 1;
			flex-shrink: 0;
			width: 1em;
			display: inline-flex;
			align-items: center;
			justify-content: center;
		}
	</style>

	<div class="sms-privacy-archive-wrap">
		<!-- Banner (full width) -->
		<section class="sms-privacy-archive-hero text-center w-100">
			<div class="container">
				<h1 class="sms-privacy-archive-hero-title">Privacy Policy</h1>
			</div>
		</section>

		<!-- Content -->
		<section class="sms-privacy-archive-body">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="sms-privacy-archive-section-title">Updates: Privacy Policy</h2>
						<p class="sms-privacy-archive-intro">We want to be as transparent as possible about the changes we make to our Privacy Policy. In this archive you can see the previous versions of the policy.</p>
						<ul class="sms-privacy-archive-versions list-unstyled mb-0">
							<li>
								<a href="<?php echo $privacy_current_url; ?>" target="_blank" rel="noopener noreferrer">
									<i class="bi bi-record-circle-fill sms-privacy-archive-icon" aria-hidden="true"></i>
									<span>Current Version</span>
								</a>
							</li>
							<li>
								<a href="<?php echo $privacy_march_url; ?>" target="_blank" rel="noopener noreferrer">
									<i class="bi bi-record-circle-fill sms-privacy-archive-icon" aria-hidden="true"></i>
									<span>Till March 3, 2025</span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>
	</div>
	<!-- Bootstrap 5 JS Bundle -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<?php get_footer('sms'); ?>