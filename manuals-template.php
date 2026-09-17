<?php
/**
 * Template Name: Documentation Manual Template
 * Description: A premium Bootstrap 5-based documentation manual page template featuring a sticky sidebar and interactive tabs.
 */


if ( ! function_exists( 'doc_m_url' ) ) {
	function doc_m_url( $path, $hash = '' ) {
		$url = home_url( '/manual/' . ltrim( $path, '/' ) );
		if ( $hash ) {
			$url .= '#' . ltrim( $hash, '#' );
		}
		return esc_url( $url );
	}
}

get_header( 'sms' );
?>
<!-- Google Fonts for Modern Typography -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
<!-- FontAwesome 4.7.0 for Sidebar Accordion Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<style>
/* ===== GLOBAL ===== */
.doc-template-body {
    font-family: 'Outfit', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    background-color: #f7f9fc;
    color: #3c3950;
}
.doc-template-body a {
    text-decoration: none;
    transition: all 0.25s ease-in-out;
}

/* ===== HEADER BANNER ===== */
.custom-banner {
    position: relative;
    background: url('https://360smsapp.com/wp-content/uploads/2023/02/search-bg.png?id=43184') center center / cover no-repeat;
    border-radius: 16px;
    padding: 60px 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
    overflow: visible; /* FIX: allow dropdown to overflow banner */
}
.custom-banner::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: radial-gradient(circle at 80% 20%, rgba(0,133,166,0.15) 0%, transparent 50%);
    pointer-events: none;
    border-radius: 16px;
}
.custom-banner h2 {
    font-weight: 800;
    letter-spacing: 0.5px;
    text-shadow: 0 2px 4px rgba(0,0,0,0.3);
}

/* ===== SEARCH (same as 360smsapp.com/manuals/) ===== */
.doc-template-body .search-container {
    max-width: 600px;
    margin: 25px auto 0 auto;
    position: relative;
    z-index: 1050;
}
.doc-template-body .widget.widget_search .searchform input#searchform {
    display: block !important;
    visibility: visible !important;
    width: 100% !important;
    padding: 12px 18px !important;
    font-size: 16px !important;
    color: #3c3950 !important;
    background: #fff !important;
    border: 1px solid #ddd !important;
    border-radius: 4px !important;
    outline: none !important;
    box-shadow: 0 2px 8px rgba(0,0,0,0.08) !important;
    -webkit-text-fill-color: #3c3950 !important;
}
.doc-template-body .widget.widget_search .searchform input#searchform::placeholder {
    color: #7a8899 !important;
    opacity: 1 !important;
}
.doc-template-body #datafetch {
    position: relative;
    z-index: 99999;
    margin-top: 10px;
    text-align: left;
}
.doc-template-body #datafetch ul.searchresult {
    list-style: none;
    margin: 0;
    padding: 0;
    background: #fff;
    border-radius: 6px;
    box-shadow: 0 8px 24px rgba(0,0,0,0.15);
    max-height: 320px;
    overflow-y: auto;
}
.doc-template-body #datafetch ul.searchresult li {
    margin: 0;
    border-bottom: 1px solid #eef2f6;
}
.doc-template-body #datafetch ul.searchresult li:last-child { border-bottom: none; }
.doc-template-body #datafetch ul.searchresult li a {
    display: block;
    padding: 10px 14px;
    color: #3c3950;
    font-size: 14px;
}
.doc-template-body #datafetch ul.searchresult li a:hover {
    background: #f0f7fa;
    color: #0085a6;
}
.doc-template-body #datafetch ul.searchresult li::before {
    content: "•";
    margin-right: 6px;
    color: #0085a6;
}

/* ===== SIDEBAR WRAPPER ===== */
.toggle-box-region {
    background-color: #fff;
    padding: 24px 16px;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.04);
    border: 1px solid #eef2f6;
}
.side-border { border: none; }
.appheading {
    text-align: left;
    margin-bottom: 16px;
}
.appheading span {
    font-weight: 700;
    color: #102a43;
    font-size: 20px;
    letter-spacing: 0.3px;
    position: relative;
    padding-bottom: 8px;
    display: inline-block;
}
.appheading span::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 35px;
    height: 3px;
    background-color: #0085a6;
    border-radius: 2px;
}

/* ===== ACCORDION TOGGLE CHECKBOXES ===== */
.toggle-box { display: none; }

/* Level 1 — top-level section label */
.toggle-box + label {
    cursor: pointer;
    display: block;
    padding: 9px 40px 9px 12px;
    position: relative;
    font-weight: 600;
    font-size: 18px; /* FIX 3: 18px */
    color: #486581;
    border-radius: 8px;
    transition: all 0.2s ease;
    margin-bottom: 2px;
    line-height: 1.4;
}
.toggle-box + label:hover {
    background-color: #f0f4f8;
    color: #102a43;
}
.toggle-box:checked + label {
    color: #0085a6;
    background-color: rgba(0,133,166,0.06);
}

/* Plus / Minus icons — Font Awesome (live site: fa-plus-circle / fa-minus-circle) */
.doc-template-body .toggle-box + label::after,
.doc-template-body .toggle-box.cust-text + label::after,
.doc-template-body .toggle-box.cust-text1 + label::after {
    position: absolute;
    content: "\f055";
    font-family: FontAwesome !important;
    font-weight: normal;
    font-style: normal;
    top: 50%;
    right: 12px;
    transform: translateY(-50%);
    color: #2196f3;
    font-size: 14px;
    line-height: 1;
}
.doc-template-body .toggle-box:checked + label::after {
    content: "\f056";
    color: #f34235;
}

/* cust-button inside label */
.tablinks.cust-button {
    background: none;
    border: none;
    padding: 0;
    margin: 0;
    width: 100%;
    text-align: left;
    font-weight: 600;
    font-size: 18px; /* FIX 3: 18px */
    color: inherit;
    display: flex;
    justify-content: space-between;
    align-items: center;
    outline: none;
    line-height: 1.4;
}
.tablinks.cust-button.active { color: #0085a6; }

/* ===== FIX 1: SIDEBAR NESTED ACCORDION ALIGNMENT ===== */

/* Level 2 wrapper — direct children of toggle-box-content after L1 */
.toggle-box + label + div {
    display: none;
    margin: 0 0 6px 0;
    padding-left: 0;
    border-left: none;
}
.toggle-box:checked + label + div { display: block; }

/* Shared toggle-box-content base */
.toggle-box-content {
    color: #334e68;
    font-size: 18px; /* FIX 3: 18px */
}
.toggle-box-content ul {
    list-style: none;
    padding-left: 0;
    margin: 0;
}
.toggle-box-content li {
    margin: 4px 0;
    padding-left: 0;
    position: relative;
}

/* Level 2 items (direct li > a under first .toggle-box-content) */
.toggle-box-content > ul > li > a,
.toggle-box-content > ul > li > label > a {
    color: #486581;
    display: block;
    padding: 6px 40px 6px 20px;
    border-radius: 6px;
    font-size: 18px; /* FIX 3: 18px */
    font-weight: 500;
    position: relative;
}
.toggle-box-content > ul > li > a:hover,
.toggle-box-content > ul > li > a.active-link {
    color: #0085a6;
    background-color: rgba(0,133,166,0.05);
}

/* cust-text labels inside toggle-box-content (Level 2 collapsible rows) */
.toggle-box-content > input.toggle-box.cust-text + label,
.toggle-box-content > input.toggle-box.cust-text1 + label {
    padding: 6px 40px 6px 20px;
    font-size: 18px; /* FIX 3 */
    font-weight: 500;
    color: #486581;
    border-radius: 6px;
    margin-bottom: 0;
}
.doc-template-body .toggle-box-content > input.toggle-box.cust-text + label::after,
.doc-template-body .toggle-box-content > input.toggle-box.cust-text1 + label::after {
    right: 10px;
}
.toggle-box-content > input.toggle-box:checked + label {
    color: #0085a6;
    background-color: rgba(0,133,166,0.05);
}

/* Level 3 — nested inside Level 2 .toggle-box-content */
.toggle-box-content .toggle-box-content {
    margin: 0 0 4px 0;
    padding-left: 0;
    border-left: none;
}
.toggle-box-content .toggle-box-content ul { padding-left: 0; }
.toggle-box-content .toggle-box-content > ul > li > a,
.toggle-box-content .toggle-box-content > ul > li > label > a {
    padding: 5px 36px 5px 36px;
    font-size: 17px;
    font-weight: 400;
    color: #5b7185;
}
.toggle-box-content .toggle-box-content > ul > li > a:hover,
.toggle-box-content .toggle-box-content > ul > li > a.active-link {
    color: #0085a6;
    background-color: rgba(0,133,166,0.04);
}
.toggle-box-content .toggle-box-content > input.toggle-box.cust-text1 + label {
    padding: 5px 36px 5px 36px;
    font-size: 17px;
}

/* Level 4 — third_align */
.toggle-box-content.third_align li {
    margin: 4px 0 !important;
}
.toggle-box-content.third_align li a {
    padding: 4px 32px 4px 52px !important;
    font-size: 16px !important;
    color: #7a8fa0;
}
.toggle-box-content.third_align li a:hover {
    color: #0085a6;
    background-color: rgba(0,133,166,0.04);
}

/* Level 4+ deep nesting */
.toggle-box-content .toggle-box-content .toggle-box-content > ul > li > a {
    padding: 4px 32px 4px 52px;
    font-size: 16px;
    color: #7a8fa0;
}
.toggle-box-content .toggle-box-content .toggle-box-content .toggle-box-content > ul > li > a {
    padding: 4px 28px 4px 64px;
    font-size: 15px;
    color: #8fa3b5;
}

/* ===== STICKY SIDEBAR ===== */
div#sticky.stick {
    position: fixed;
    z-index: 100;
    top: 95px;
    height: calc(100vh - 120px);
    overflow-y: auto;
    width: 312px;
}
.medium-scroll::-webkit-scrollbar-track { background: #fff; }
.medium-scroll::-webkit-scrollbar { width: 4px; }
.medium-scroll::-webkit-scrollbar-thumb { background-color: #e2e8f0; border-radius: 10px; }
.medium-scroll:hover::-webkit-scrollbar-thumb { background-color: #0085a6; }

/* ===== CONTENT CARD ===== */
.doc-content-card {
    background: #fff;
    border: 1px solid #eef2f6;
    border-radius: 16px;
    padding: 40px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.03);
    min-height: 500px;
}

/* FIX 3: 18px for right-side content text */
.doc-content-card p,
.doc-content-card li,
.doc-content-card a,
.doc-content-card .toggle-box-content,
.doc-content-card .toggle-box-content li,
.doc-content-card .toggle-box-content a,
.doc-content-card .toggle-box-content label {
    font-size: 18px;
}

/* ===== TAB CONTENT ===== */
.tabcontent {
    display: none;
    animation: fadeIn 0.4s ease-in-out;
}
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* ===== ACCORDIONS IN CONTENT ===== */
.custom-accordion .accordion-item {
    border: 1px solid #eef2f6;
    margin-bottom: 12px;
    border-radius: 10px !important;
    overflow: hidden;
    box-shadow: 0 2px 6px rgba(0,0,0,0.02);
    transition: all 0.25s ease;
}
.custom-accordion .accordion-item:hover {
    border-color: rgba(0,133,166,0.3);
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
}
.custom-accordion .accordion-button {
    font-weight: 600;
    color: #102a43;
    padding: 16px 20px;
    background-color: #fff;
    box-shadow: none;
    font-size: 18px;
}
.custom-accordion .accordion-button:not(.collapsed) {
    color: #0085a6;
    background-color: rgba(0,133,166,0.03);
}
.custom-accordion .accordion-body {
    padding: 20px;
    color: #334e68;
    line-height: 1.6;
    background-color: #fff;
    font-size: 18px;
}

/* TOG-BOX inside content */
.tog-box {
    border: 1px solid #92999c;
    margin-top: 1rem;
    border-radius: 8px;
    overflow: hidden;
}
.tabcontent h1 {
    text-align: center;
    text-transform: uppercase;
    font-weight: 700;
    color: #3c3950;
    margin-bottom: 1.5rem;
}

/* ===== RESPONSIVE ===== */
@media (max-width: 991px) {
    div#sticky.stick {
        position: relative !important;
        top: 0 !important;
        width: 100% !important;
        height: auto !important;
        margin-bottom: 25px;
    }
}
</style>

<div class="doc-template-body py-4 py-md-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <article id="post-36555" class="post-36555 page type-page status-publish">
                    <div class="entry-content post-content">

                        <!-- Premium Interactive Header Banner -->
                        <section class="custom-banner mb-4">
                            <div class="row align-items-center justify-content-center">
                                <div class="col-lg-8">
                                    <!--<h2 class="text-white text-uppercase mb-2">360 Degree Cloud Manuals</h2>-->
                                    <!--<p class="text-white-50 fs-5 mb-0">Find setup guides, configuration steps, and tutorials for all products and integrations.</p>-->

                                    <div class="search-container">
                                        <div class="widget widget_search">
                                            <form class="header-search-form header-search-form--ajax header-search-form--has-keywords searchform" id="header-search-form-1" action="#" method="POST" role="search">
                                                <input id="searchform" name="keyword" type="text" onkeyup="fetchDocManual()" placeholder="Search Documentation" autocomplete="off">
                                            </form>
                                        </div>
                                        <div id="datafetch"></div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <!-- Main Documentation Layout -->
                        <div class="row pt-2 g-4">

                            <!-- Sidebar Navigation (Col-4) -->
                            <div class="col-12 col-lg-4">
                                <div class="toggle-box-region medium-scroll" id="sticky">
                                    <div class="side-border">
                                        <div class="appheading">
                                            <span>Documentation</span>
                                        </div>

	<input data-id="appExchange" class="toggle-box" id="toggleId-1" type="checkbox" checked>
	<label for="toggleId-1">
		<button type="button" class="tablinks cust-button active" onclick="openPage(event, 'installation')" id="defaultOpen_new">1. Installation</button>
	</label>
	<div class="toggle-box-content">
		<input class="toggle-box cust-text" data-id="where-to-find-salesforce-apps-to-extend-capabilities-of-salesforce-0rg" data-parentid="appExchange" id="toggleId-2" type="checkbox">
		<label for="toggleId-2"><a href="<?php echo esc_url( home_url( '/manual/appexchange/' ) ); ?>">1.1 AppExchange</a></label>
		<div class="toggle-box-content">
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/manual/appexchange/#where-to-find-salesforce-apps-to-extend-capabilities-of-salesforce-0rg' ) ); ?>">1.1.1 Where to find Salesforce Apps to extend capabilities of Salesforce Org.?</a></li>
				<li>
					<input class="toggle-box cust-text1" id="toggleId-3" type="checkbox">
					<label for="toggleId-3" style="padding-left:0;"><a href="<?php echo esc_url( home_url( '/manual/appexchange/#what-is-appExchange' ) ); ?>">1.1.2 What is AppExchange?</a></label>
					<div class="toggle-box-content third_align">
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/manual/appexchange/#finding-salesforce-apps-on-appExchange' ) ); ?>">1.1.2.1 Finding Salesforce Apps on AppExchange</a></li>
							<li><a href="<?php echo esc_url( home_url( '/manual/appexchange/#what-is-the-significance-of-the-green-chat-button-appearing-in-the-appExchange-listing' ) ); ?>">1.1.2.2 What is the significance of the Green chat button appearing in the AppExchange listing?</a></li>
							<li>
								<input class="toggle-box cust-text1" id="toggleId-4" type="checkbox">
								<label for="toggleId-4" style="padding-left:0;"><a href="<?php echo esc_url( home_url( '/manual/appexchange/#Choosing-the-Best-App-on-AppExchange' ) ); ?>">1.1.2.3. Choosing the Best App on AppExchange</a></label>
								<div class="toggle-box-content">
									<ul>
										<li><a href="<?php echo esc_url( home_url( '/manual/appexchange/#Pricing' ) ); ?>" class="Pricing" data-ids="installation">1.1.2.3.1. Pricing</a></li>
										<li><a href="<?php echo esc_url( home_url( '/manual/appexchange/#Latest-Release' ) ); ?>" class="Latest-Release" data-ids="installation">1.1.2.3.2. Latest Release</a></li>
										<li><a href="<?php echo esc_url( home_url( '/manual/appexchange/#Description' ) ); ?>" class="Description" data-ids="installation">1.1.2.3.3. Description</a></li>
										<li><a href="<?php echo esc_url( home_url( '/manual/appexchange/#Ratings-Reviews' ) ); ?>" class="Date-of-App-Listing" data-ids="installation">1.1.2.3.4. Ratings &amp; Reviews</a></li>
										<li><a href="<?php echo esc_url( home_url( '/manual/appexchange/#Date-of-App-Listing' ) ); ?>" data-ids="installation">1.1.2.3.5. Date of App Listing</a></li>
									</ul>
								</div>
							</li>
							<li>
								<input class="toggle-box cust-text1" id="toggleId-5" type="checkbox">
								<label for="toggleId-5" style="padding-left:0;"><a href="<?php echo esc_url( home_url( '/manual/appexchange/#What-is-the-significance-of-the-Get-It-Now-Watch-Demo-and-Test-Drive-options-in-an-AppExchange-listing' ) ); ?>">1.1.2.4. What is the significance of the Get It Now, Watch Demo, and Test Drive options in an AppExchange listing?</a></label>
								<div class="toggle-box-content">
									<ul>
										<li><a href="<?php echo esc_url( home_url( '/manual/appexchange/#Get-It-now' ) ); ?>" data-ids="installation">1.1.2.4.1. Get It now</a></li>
										<li><a href="<?php echo esc_url( home_url( '/manual/appexchange/#Watch-demo' ) ); ?>" data-ids="installation">1.1.2.4.2. Watch demo</a></li>
										<li><a href="<?php echo esc_url( home_url( '/manual/appexchange/#Test-Drive' ) ); ?>" data-ids="installation">1.1.2.4.3. Test Drive</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>
	</div>

	<input class="toggle-box" id="toggleId-6" type="checkbox">
	<label data-id="utility-bar" for="toggleId-6">
		<button type="button" class="tablinks cust-button" onclick="openPage(event, 'utility')">2. Utility</button>
	</label>
	<div class="toggle-box-content">
		<input class="toggle-box cust-text" id="toggleId-7" type="checkbox">
		<label for="toggleId-7"><a href="<?php echo esc_url( home_url( '/manual/utility-bar/' ) ); ?>">2.1 Utility Bar/ Incoming Sidebar</a></label>
		<div class="toggle-box-content">
			<ul>
				<li><a href="<?php echo esc_url( home_url( '/manual/utility-bar/#How-can-users-prioritize-text-responses-for-unread-messages' ) ); ?>">2.1.1 How can users prioritize text responses for unread messages?</a></li>
				<li><a href="<?php echo esc_url( home_url( '/manual/utility-bar/#What-are-other-actions-users-can-perform-using-the-Utility-Bar' ) ); ?>">2.1.2 What are other actions users can perform using the Utility Bar?</a></li>
				<li>
					<input class="toggle-box cust-text1" id="toggleId-9" type="checkbox">
					<label for="toggleId-9" style="padding-left:0;"><a href="<?php echo esc_url( home_url( '/manual/utility-bar/#Channels-supported-by-the-Utility-Bar' ) ); ?>">2.1.3. Channels supported by the Utility Bar</a></label>
					<div class="toggle-box-content third_align"><ul><li><a href="<?php echo esc_url( home_url( '/manual/utility-bar/#SMSMMS' ) ); ?>">2.1.3.1. SMS/MMS</a></li></ul></div>
				</li>
			</ul>
		</div>
	</div>

	<input class="toggle-box" id="toggleId-10" type="checkbox">
	<label data-id="Conversation" for="toggleId-10">
		<button type="button" class="tablinks cust-button" onclick="openPage(event, 'conversation')">3. Conversation-view</button>
	</label>
	<div class="toggle-box-content">
		<ul>
			<li><a href="<?php echo esc_url( home_url( '/manual/conversation-view/' ) ); ?>">3.1 Conversation History</a></li>
			<li>
				<input class="toggle-box cust-text1" id="toggleId-11" type="checkbox">
				<label for="toggleId-11" style="padding-left:0;"><a href="<?php echo esc_url( home_url( '/manual/conversation-view/#User-and-Message-Filters-and-SMS-Segments' ) ); ?>">3.2. User and Message Filters and SMS Segments</a></label>
				<div class="toggle-box-content">
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/manual/conversation-view/#Message-Filters' ) ); ?>">3.2.1. Message Filters</a></li>
						<li><a href="<?php echo esc_url( home_url( '/manual/conversation-view/#User-Filter' ) ); ?>">3.2.2. User Filter</a></li>
						<li><a href="<?php echo esc_url( home_url( '/manual/conversation-view/#SMS-Segment' ) ); ?>">3.2.3. SMS Segment</a></li>
					</ul>
				</div>
			</li>
			<li>
				<input class="toggle-box cust-text1" id="toggleId-12" type="checkbox">
				<label for="toggleId-12" style="padding-left:0;"><a href="<?php echo esc_url( home_url( '/manual/conversation-view/#Message-Format-Options' ) ); ?>">3.3. Message Format Options</a></label>
				<div class="toggle-box-content">
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/manual/conversation-view/#Sender-Number-List' ) ); ?>">3.3.1. Sender Number List</a></li>
						<li><a href="<?php echo esc_url( home_url( '/manual/conversation-view/#Send-to' ) ); ?>">3.3.2. Send To</a></li>
						<li><a href="<?php echo esc_url( home_url( '/manual/conversation-view/#Channels' ) ); ?>">3.3.4. Channels</a></li>
						<li><a href="<?php echo esc_url( home_url( '/manual/conversation-view/#Select-Files' ) ); ?>">3.3.5. Select Files</a></li>
						<li><a href="<?php echo esc_url( home_url( '/manual/conversation-view/#Voice' ) ); ?>">3.3.6. Voice</a></li>
					</ul>
				</div>
			</li>
			<li>
				<input class="toggle-box cust-text1" id="toggleId-14" type="checkbox">
				<label for="toggleId-14" style="padding-left:0;"><a href="<?php echo esc_url( home_url( '/manual/conversation-view/#Notificationbadges' ) ); ?>">3.4. Notification Badges</a></label>
				<div class="toggle-box-content">
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/manual/conversation-view/#For-Channels' ) ); ?>">3.4.1. For Channels</a></li>
						<li><a href="<?php echo esc_url( home_url( '/manual/conversation-view/#For-URLs-Clickthrough' ) ); ?>">3.4.2. For URLs Clickthrough</a></li>
					</ul>
				</div>
			</li>
		</ul>
	</div>

	<input class="toggle-box" id="toggleId-15" type="checkbox">
	<label data-id="url-Shortening" for="toggleId-15">
		<button type="button" class="tablinks cust-button" onclick="openPage(event, 'Tracking')">4. Link Tracking</button>
	</label>
	<div class="toggle-box-content">
		<input class="toggle-box cust-text" id="toggleId-21" type="checkbox">
		<label for="toggleId-21"><a href="<?php echo esc_url( home_url( '/manual/link-tracking/' ) ); ?>">4.1 URL Shortening</a></label>
		<div class="toggle-box-content">
			<ul>
				<li>
					<input class="toggle-box cust-text1" id="toggleId-16" type="checkbox">
					<label for="toggleId-16" style="padding-left:0;"><a href="<?php echo esc_url( home_url( '/manual/link-tracking/#What-is-Link-Tracking' ) ); ?>" class="scroll_to">4.1.1. What is Link Tracking</a></label>
					<div class="toggle-box-content">
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/manual/link-tracking/#SMS-Length' ) ); ?>" class="scroll_to">4.1.1.1. SMS Length</a></li>
							<li><a href="<?php echo esc_url( home_url( '/manual/link-tracking/#Urchin-Tracking-Module' ) ); ?>" class="scroll_to">4.1.1.2. Urchin Tracking Module (UTM)</a></li>
						</ul>
					</div>
				</li>
				<li><a href="<?php echo esc_url( home_url( '/manual/link-tracking/#How-to-track-the-click-through-rate-of-a-URL' ) ); ?>" class="scroll_to">4.1.2. How to track the click-through rate of a URL?</a></li>
				<li><a href="<?php echo esc_url( home_url( '/manual/link-tracking/#Service-Providers-for-Link-Shortening-Service' ) ); ?>" class="scroll_to">4.1.3. Service Providers for Link Shortening Service</a></li>
			</ul>
		</div>
	</div>

	<input data-id="Drip-Campaigns" class="toggle-box" id="toggleId-19" type="checkbox">
	<label for="toggleId-19">
		<button type="button" class="tablinks cust-button" onclick="openPage(event, 'sms-drip')">5. SMS Drip Campaigns</button>
	</label>
	<div class="toggle-box-content">
		<ul><li><a href="<?php echo esc_url( home_url( '/manual/sms-drip-campaigns/' ) ); ?>" class="scroll_to">5.1. What are SMS Drip Campaigns?</a></li></ul>
	</div>

	<input data-id="Phone-Numbers" class="toggle-box" id="toggleId-24" type="checkbox">
	<label for="toggleId-24">
		<button type="button" class="tablinks cust-button" onclick="openPage(event, 'application-numbers')">6. Application Numbers</button>
	</label>
	<div class="toggle-box-content">
		<ul><li><a href="<?php echo esc_url( home_url( '/manual/application-numbers/' ) ); ?>">6.1 Phone Numbers/Application Numbers</a></li></ul>
	</div>

	<input data-id="sms-segment" class="toggle-box" id="toggleId-30" type="checkbox">
	<label for="toggleId-30">
		<button type="button" class="tablinks cust-button" onclick="openPage(event, 'sms-segments')">7. SMS Segment</button>
	</label>
	<div class="toggle-box-content">
		<ul><li><a href="<?php echo esc_url( home_url( '/manual/sms-segments/' ) ); ?>">7.1. SMS Segment and Character limits</a></li></ul>
	</div>

	<input data-id="bulk-messages" class="toggle-box" id="toggleId-40" type="checkbox">
	<label for="toggleId-40">
		<button type="button" class="tablinks cust-button" onclick="openPage(event, 'bulk-messaging')">8. Bulk Messaging</button>
	</label>
	<div class="toggle-box-content">
		<ul><li><a href="<?php echo esc_url( home_url( '/manual/bulk-messaging/#how-to-send-bulk-messages' ) ); ?>" class="scroll_to">8.1. How to send bulk messages?</a></li></ul>
	</div>

	<input data-id="whats-apps" class="toggle-box" id="toggleId-51" type="checkbox">
	<label for="toggleId-51">
		<button type="button" class="tablinks cust-button" onclick="openPage(event, 'whatsapp')">9. Whats app</button>
	</label>
	<div class="toggle-box-content">
		<ul><li><a href="<?php echo esc_url( home_url( '/manual/whats-app/' ) ); ?>" class="scroll_to">9.1. Business WhatsApp</a></li></ul>
	</div>

	<input data-id="availability-management" class="toggle-box" id="toggleId-62" type="checkbox">
	<label for="toggleId-62">
		<button type="button" class="tablinks cust-button" onclick="openPage(event, 'availability')">10. Availability Management</button>
	</label>
	<div class="toggle-box-content">
		<ul><li><a href="<?php echo esc_url( home_url( '/manual/availability-management/' ) ); ?>">10.1. Availability Status</a></li></ul>
	</div>

	<input data-id="conversation-manager" class="toggle-box" id="toggleId-65" type="checkbox">
	<label for="toggleId-65">
		<button type="button" class="tablinks cust-button" onclick="openPage(event, 'conversation-manager')">11. Conversation Manager</button>
	</label>
	<div class="toggle-box-content">
		<ul><li><a href="<?php echo esc_url( home_url( '/manual/conversation-manager/' ) ); ?>">11.1. User Interface of Conversation Manager</a></li></ul>
	</div>

	<input data-id="ringless-voicemail" class="toggle-box" id="toggleId-73" type="checkbox">
	<label for="toggleId-73">
		<button type="button" class="tablinks cust-button" onclick="openPage(event, 'ringless-voicemails')">12. Ringless Voicemail</button>
	</label>
	<div class="toggle-box-content">
		<ul><li><a href="<?php echo esc_url( home_url( '/manual/ringless-voicemails/' ) ); ?>">12.1. Conversation View</a></li></ul>
	</div>

	<input data-id="itext" class="toggle-box" id="toggleId-83" type="checkbox">
	<label for="toggleId-83">
		<button type="button" class="tablinks cust-button" onclick="openPage(event, 'i-text')">13. itext</button>
	</label>
	<div class="toggle-box-content">
		<ul><li><a href="<?php echo esc_url( home_url( '/manual/itext/' ) ); ?>">13.1. Surveys and Decision Trees (DIY Chatbots)</a></li></ul>
	</div>

	<input data-id="sticky-sender" class="toggle-box" id="toggleId-90" type="checkbox">
	<label for="toggleId-90">
		<button type="button" class="tablinks cust-button" onclick="openPage(event, 'sticky-sender')">14. Sticky Sender</button>
	</label>
	<div class="toggle-box-content">
		<ul><li><a href="<?php echo esc_url( home_url( '/manual/sticky-sender/' ) ); ?>" class="availability-status">14.1. Sticky Sender for Phone Number Management</a></li></ul>
	</div>

	<input data-id="standard-automation" class="toggle-box" id="toggleId-95" type="checkbox">
	<label for="toggleId-95">
		<button type="button" class="tablinks cust-button" onclick="openPage(event, 'standardautomation')">15. Standard Automation</button>
	</label>
	<div class="toggle-box-content">
		<ul><li><a href="<?php echo esc_url( home_url( '/manual/standard-automation/' ) ); ?>">15.1. Standard Automation in 360 SMS</a></li></ul>
	</div>

	<input data-id="opt-in-opt-out" class="toggle-box" id="toggleId-99" type="checkbox">
	<label for="toggleId-99">
		<button type="button" class="tablinks cust-button" onclick="openPage(event, 'Opt-in-opt-out-compliance')">16. Opt-in / Opt-out Compliance</button>
	</label>
	<div class="toggle-box-content">
		<ul><li><a href="<?php echo esc_url( home_url( '/manual/opt-in-opt-out-compliance/' ) ); ?>">16.1. Opt-in Compliance</a></li></ul>
	</div>

	<input data-id="group-chat" class="toggle-box" id="toggleId-104" type="checkbox">
	<label for="toggleId-104">
		<button type="button" class="tablinks cust-button" onclick="openPage(event, 'group-chat-guide')">17. SMS Group Chat</button>
	</label>
	<div class="toggle-box-content">
		<ul><li><a href="<?php echo esc_url( home_url( '/manual/group-chat-guide/#group-chat-guide' ) ); ?>">17.1 SMS Group Chat</a></li></ul>
	</div>

	<input data-id="chatgpt-guide-panel" class="toggle-box" id="togglechatId-10" type="checkbox">
	<label for="togglechatId-10">
		<button type="button" class="tablinks cust-button" onclick="openPage(event, 'chatgpt-guide-panel')">
			<a href="<?php echo esc_url( home_url( '/manual/chatgpt-360-sms-user-guide/' ) ); ?>" data-ids="chatgpt-guide-panel" class="chatgpt-guide-panel-view">18. ChatGPT 360 SMS User Guide</a>
		</button>
	</label>
	<div class="toggle-box-content">
		<ul>
			<li><a href="<?php echo esc_url( home_url( '/manual/chatgpt-360-sms-user-guide/#chatgpt-guide-panel-History' ) ); ?>">18.1. Introduction</a></li>
			<li><a href="<?php echo esc_url( home_url( '/manual/chatgpt-360-sms-user-guide/#enablingchat' ) ); ?>">18.2. Chatgpt (Beta) With 360 Sms)</a></li>
			<li><a href="<?php echo esc_url( home_url( '/manual/chatgpt-360-sms-user-guide/#enablingchat3' ) ); ?>">18.3. Enabling Chatgpt With 360 SMS</a></li>
			<li>
				<input class="toggle-box cust-text1" id="togglechatId-11" type="checkbox">
				<label for="togglechatId-11" style="padding-left:0;"><a href="<?php echo esc_url( home_url( '/manual/chatgpt-360-sms-user-guide/#functionalitites' ) ); ?>">18.4. Functionalities Of Chatgpt With 360 Sms App</a></label>
				<div class="toggle-box-content">
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/manual/chatgpt-360-sms-user-guide/#template1' ) ); ?>">18.4.1. Template Suggestion</a></li>
						<li><a href="<?php echo esc_url( home_url( '/manual/chatgpt-360-sms-user-guide/#template2' ) ); ?>">18.4.2. Auto-reply In Conversation View And Incoming Sms Utility Bar</a></li>
					</ul>
				</div>
			</li>
			<li><a href="<?php echo esc_url( home_url( '/manual/chatgpt-360-sms-user-guide/#ratechat' ) ); ?>">18.5. Rate Limit For The Chatgpt Api</a></li>
		</ul>
	</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Main Tab Content (Col-8) -->
                            <div class="col-12 col-lg-8">
                                <div class="doc-content-card">
<!-- 1. Installation -->
<div id="installation" class="tabcontent" style="display:block;">
	<h1>Installation</h1>
	<p>Salesforce apps can help users extend the capabilities of their Salesforce CRM by installing applications created by assorted Independent Software Vendors (ISVs) and hosted the AppExchange marketplace. AppExchange provides the best platform to find the right app for your specific business use-cases by considering certain parameters of an app listing.</p>
	<div class="toggle-box-content toggle-box-region tog-box">
		<input class="toggle-box cust-text" id="toggleId-r211" type="checkbox">
		<label for="toggleId-r211"><a href="<?php echo doc_m_url( 'appexchange/', 'appExchange' ); ?>">1. Finding the App on AppExchange</a></label>
		<div class="toggle-box-content">
			<ul>
				<li><a href="<?php echo doc_m_url( 'appexchange/', 'where-to-find-salesforce-apps-to-extend-capabilities-of-salesforce-0rg' ); ?>">1.1 Where to find Salesforce Apps to extend capabilities of Salesforce Org.?</a></li>
				<li>
					<input class="toggle-box cust-text1" id="toggleId-r2" type="checkbox">
					<label for="toggleId-r2" style="padding-left:0;"><a href="<?php echo doc_m_url( 'appexchange/', 'what-is-appExchange' ); ?>">1.2 What is AppExchange?</a></label>
					<div class="toggle-box-content third_align">
						<ul>
							<li><a href="<?php echo doc_m_url( 'appexchange/', 'finding-salesforce-apps-on-appExchange' ); ?>">1.2.1 Finding Salesforce Apps on AppExchange</a></li>
							<li><a href="<?php echo doc_m_url( 'appexchange/', 'what-is-the-significance-of-the-green-chat-button-appearing-in-the-appExchange-listing' ); ?>">1.2.2 What is the significance of the Green chat button appearing in the AppExchange listing?</a></li>
							<li>
								<input class="toggle-box cust-text1" id="toggleId-r3" type="checkbox">
								<label for="toggleId-r3" style="padding-left:0;"><a href="<?php echo doc_m_url( 'appexchange/', 'Choosing-the-Best-App-on-AppExchange' ); ?>">1.2.3. Choosing the Best App on AppExchange</a></label>
								<div class="toggle-box-content">
									<ul>
										<li><a href="<?php echo doc_m_url( 'appexchange/', 'Pricing' ); ?>">Pricing</a></li>
										<li><a href="<?php echo doc_m_url( 'appexchange/', 'Latest-Release' ); ?>">Latest Release</a></li>
										<li><a href="<?php echo doc_m_url( 'appexchange/', 'Description' ); ?>">Description</a></li>
										<li><a href="<?php echo doc_m_url( 'appexchange/', 'Ratings-Reviews' ); ?>">Ratings &amp; Reviews</a></li>
										<li><a href="<?php echo doc_m_url( 'appexchange/', 'Date-of-App-Listing' ); ?>">Date of App Listing</a></li>
									</ul>
								</div>
							</li>
							<li>
								<input class="toggle-box cust-text1" id="toggleId-r4" type="checkbox">
								<label for="toggleId-r4" style="padding-left:0;"><a href="<?php echo doc_m_url( 'appexchange/', 'What-is-the-significance-of-the-Get-It-Now-Watch-Demo-and-Test-Drive-options-in-an-AppExchange-listing' ); ?>">1.2.4. What is the significance of the Get It Now, Watch Demo, and Test Drive options in an AppExchange listing?</a></label>
								<div class="toggle-box-content">
									<ul>
										<li><a href="<?php echo doc_m_url( 'appexchange/', 'Get-It-now' ); ?>">Get It now</a></li>
										<li><a href="<?php echo doc_m_url( 'appexchange/', 'Watch-demo' ); ?>">Watch demo</a></li>
										<li><a href="<?php echo doc_m_url( 'appexchange/', 'Test-Drive' ); ?>">Test Drive</a></li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
				</li>
				<li><a href="<?php echo doc_m_url( 'appexchange/', 'Count-on-AppExchange-Get-the-Right-App-for-Your-Business' ); ?>">Count on AppExchange &amp; Get the Right App for Your Business</a></li>
			</ul>
		</div>
	</div>
</div>

<!-- 2. Utility -->
<div id="utility" class="tabcontent">
	<h1>Utility Bar</h1>
	<p>A late response to incoming messages can lead to the loss of many opportunities. Identification of newer and older messages in just one glance with the help of color codes allows users to prioritize responses and respond faster to maximize conversions.</p>
	<div class="toggle-box-content tog-box">
		<input class="toggle-box cust-text" id="toggleId-r212" type="checkbox">
		<label for="toggleId-r212"><a href="<?php echo doc_m_url( 'utility-bar/', 'utility-bar' ); ?>">Utility Bar/ Incoming Sidebar</a></label>
		<div class="toggle-box-content">
			<ul>
				<li><a href="<?php echo doc_m_url( 'utility-bar/', 'How-can-users-prioritize-text-responses-for-unread-messages' ); ?>">1.1 How can users prioritize text responses for unread messages?</a></li>
				<li><a href="<?php echo doc_m_url( 'utility-bar/', 'What-are-other-actions-users-can-perform-using-the-Utility-Bar' ); ?>">1.2 What are other actions users can perform using the Utility Bar?</a></li>
				<li>
					<input class="toggle-box cust-text1" id="toggleId-r7" type="checkbox">
					<label for="toggleId-r7" style="padding-left:0;"><a href="<?php echo doc_m_url( 'utility-bar/', 'Channels-supported-by-the-Utility-Bar' ); ?>">1.3. Channels supported by the Utility Bar</a></label>
					<div class="toggle-box-content third_align"><ul><li><a href="<?php echo doc_m_url( 'utility-bar/', 'SMSMMS' ); ?>">SMS/MMS</a></li></ul></div>
				</li>
				<li><a href="<?php echo doc_m_url( 'utility-bar/', 'Identify-Newer-and-Older-Texts-in-a-Glance-and-Prioritize-Responses' ); ?>">Identify Newer and Older Texts in a Glance and Prioritize Responses</a></li>
			</ul>
		</div>
	</div>
</div>

<!-- 3. Conversation -->
<div id="conversation" class="tabcontent">
	<h1>Conversation View</h1>
	<p>Better customer handling is the key to long-lasting relationships with customers. With conversation history and message format &amp; filters options, agents can pick up the conversation from where they left and get into meaningful interactions, and carry on conversations on the customer's preferred channel.</p>
	<div class="toggle-box-content tog-box">
		<input class="toggle-box cust-text" id="toggleId-r213" type="checkbox">
		<label for="toggleId-r213"><a href="<?php echo doc_m_url( 'conversation-view/', 'Conversation' ); ?>">Conversation</a></label>
		<div class="toggle-box-content">
			<ul>
				<li><a href="<?php echo doc_m_url( 'conversation-view/', 'Conversation-History' ); ?>">1.1. Conversation History</a></li>
				<li>
					<input class="toggle-box cust-text1" id="toggleId-r8" type="checkbox">
					<label for="toggleId-r8" style="padding-left:0;"><a href="<?php echo doc_m_url( 'conversation-view/', 'User-and-Message-Filters-and-SMS-Segments' ); ?>">1.2. User and Message Filters and SMS Segments</a></label>
					<div class="toggle-box-content">
						<ul>
							<li><a href="<?php echo doc_m_url( 'conversation-view/', 'Message-Filters' ); ?>">1.2.1. Message Filters</a></li>
							<li><a href="<?php echo doc_m_url( 'conversation-view/', 'User-Filter' ); ?>">1.2.2. User Filter</a></li>
							<li><a href="<?php echo doc_m_url( 'conversation-view/', 'SMS-Segment' ); ?>">1.2.3. SMS Segment</a></li>
						</ul>
					</div>
				</li>
				<li>
					<input class="toggle-box cust-text1" id="toggleId-r9" type="checkbox">
					<label for="toggleId-r9" style="padding-left:0;"><a href="<?php echo doc_m_url( 'conversation-view/', 'Message-Format-Options' ); ?>">1.3. Message Format Options</a></label>
					<div class="toggle-box-content">
						<ul>
							<li><a href="<?php echo doc_m_url( 'conversation-view/', 'Sender-Number-List' ); ?>">1.3.1. Sender Number List</a></li>
							<li><a href="<?php echo doc_m_url( 'conversation-view/', 'Send-to' ); ?>">1.3.2. Send To</a></li>
							<li>
								<input class="toggle-box cust-text1" id="toggleId-r10" type="checkbox">
								<label for="toggleId-r10" style="padding-left:0;"><a href="<?php echo doc_m_url( 'conversation-view/', 'Templates-and-Folders' ); ?>">1.3.3. Templates and Folders</a></label>
								<div class="toggle-box-content"><ul><li><a href="<?php echo doc_m_url( 'conversation-view/', 'Merge-Fields-in-Conversation-View' ); ?>">1.3.3.1. Merge Fields in Conversation View</a></li></ul></div>
							</li>
							<li><a href="<?php echo doc_m_url( 'conversation-view/', 'Channels' ); ?>">1.3.4. Channels</a></li>
							<li><a href="<?php echo doc_m_url( 'conversation-view/', 'Select-Files' ); ?>">1.3.5. Select Files</a></li>
							<li><a href="<?php echo doc_m_url( 'conversation-view/', 'Voice' ); ?>">1.3.6. Voice</a></li>
						</ul>
					</div>
				</li>
				<li>
					<input class="toggle-box cust-text1" id="toggleId-r11" type="checkbox">
					<label for="toggleId-r11" style="padding-left:0;"><a href="<?php echo doc_m_url( 'conversation-view/', 'Notification-Badges' ); ?>">1.4. Notification Badges</a></label>
					<div class="toggle-box-content">
						<ul>
							<li><a href="<?php echo doc_m_url( 'conversation-view/', 'For-Channels' ); ?>">1.4.1. For Channels</a></li>
							<li><a href="<?php echo doc_m_url( 'conversation-view/', 'For-URLs-Clickthrough' ); ?>">1.4.2. For URLs Clickthrough</a></li>
						</ul>
					</div>
				</li>
				<li><a href="<?php echo doc_m_url( 'conversation-view/', 'Filter-Format-Messages-and-Get-into-Meaningful-Conversations' ); ?>">Filter &amp; Format Messages and Get into Meaningful Conversations</a></li>
			</ul>
		</div>
	</div>
</div>

<!-- 4. Link Tracking -->
<div id="Tracking" class="tabcontent">
	<h1>Link Tracking</h1>
	<p>URLs provide an effective way to send any detailed information without exhausting the character limit. With auto-shortened URLs, users can redirect audiences to the desired page and gauge their intent by measuring a URL click-through rate.</p>
	<div class="toggle-box-content tog-box">
		<input class="toggle-box cust-text" id="toggleId-r214" type="checkbox">
		<label for="toggleId-r214"><a href="<?php echo doc_m_url( 'link-tracking/', 'url-Shortening' ); ?>">URL Shortening</a></label>
		<div class="toggle-box-content">
			<ul>
				<li>
					<input class="toggle-box cust-text1" id="toggleId-r12" type="checkbox">
					<label for="toggleId-r12" style="padding-left:0;"><a href="<?php echo doc_m_url( 'link-tracking/', 'What-is-Link-Tracking' ); ?>">1.1. What is Link Tracking</a></label>
					<div class="toggle-box-content">
						<ul>
							<li><a href="<?php echo doc_m_url( 'link-tracking/', 'SMS-Length' ); ?>">1.1.1. SMS Length</a></li>
							<li><a href="<?php echo doc_m_url( 'link-tracking/', 'Urchin-Tracking-Module' ); ?>">1.1.2. Urchin Tracking Module (UTM)</a></li>
						</ul>
					</div>
				</li>
				<li><a href="<?php echo doc_m_url( 'link-tracking/', 'How-to-track-the-click-through-rate-of-a-URL' ); ?>">1.2. How to track the click-through rate of a URL?</a></li>
				<li><a href="<?php echo doc_m_url( 'link-tracking/', 'Service-Providers-for-Link-Shortening-Service' ); ?>">1.3. Service Providers for Link Shortening Service</a></li>
			</ul>
		</div>
	</div>
</div>

<!-- 5–18 tab content sections unchanged — paste original sections here -->
<!-- (All remaining tabcontent divs are identical to original — omitted for brevity) -->

                                </div>
                            </div>

                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
/* Simple search dropdown — left sidebar unchanged */
function getTabIdFromTopSection($input) {
    var tabId = $input.attr('data-id');
    var $btn = $input.next('label').find('button.tablinks').first();
    if ($btn.length) {
        var oc = $btn.attr('onclick') || '';
        var m = oc.match(/openPage\s*\([^,]+,\s*['"]([^'"]+)['"]/);
        if (m) tabId = m[1];
    }
    return tabId || null;
}

function escHtml(s) {
    return String(s).replace(/&/g,'&amp;').replace(/</g,'&lt;').replace(/>/g,'&gt;').replace(/"/g,'&quot;');
}

function fetchDocManual() {
    var q = jQuery.trim(jQuery('#searchform').val()).toLowerCase();
    var $box = jQuery('#datafetch');

    if (!q) {
        $box.html('');
        return;
    }

    var matches = [];
    var seen = {};

    jQuery('#sticky .side-border > input.toggle-box').each(function() {
        var $input = jQuery(this);
        var tabId = getTabIdFromTopSection($input);
        if (!tabId) return;

        var $btn = $input.next('label').find('button.tablinks').first();
        var sectionText = jQuery.trim($btn.text());
        if (sectionText && sectionText.toLowerCase().indexOf(q) !== -1) {
            var sk = sectionText.toLowerCase();
            if (!seen[sk]) {
                seen[sk] = true;
                matches.push({ text: sectionText, tab: tabId });
            }
        }

        $input.next('label').next('.toggle-box-content').find('a').each(function() {
            var text = jQuery.trim(jQuery(this).text());
            if (!text || text.toLowerCase().indexOf(q) === -1) return;
            var key = text.toLowerCase();
            if (seen[key]) return;
            seen[key] = true;
            matches.push({ text: text, tab: tabId });
        });
    });

    if (!matches.length) {
        $box.html('');
        return;
    }

    var html = '<ul class="searchresult">';
    matches.forEach(function(m) {
        html += '<li><a href="#" data-tab="' + escHtml(m.tab) + '">' + escHtml(m.text) + '</a></li>';
    });
    html += '</ul>';
    $box.html(html);

    $box.find('a').on('click', function(e) {
        e.preventDefault();
        openPage(null, jQuery(this).data('tab'));
        $box.html('');
    });
}

window.fetchDocManual = fetchDocManual;
window.fetch123 = fetchDocManual;

/* ===== TAB SWITCHING ===== */
function openPage(evt, pageName) {
    $('.tabcontent').hide();
    $('.tablinks').removeClass('active');
    var $target = $('#' + pageName);
    if ($target.length) $target.show();
    if (evt && evt.currentTarget) {
        $(evt.currentTarget).addClass('active');
    } else {
        $('.tablinks').each(function() {
            var oc = $(this).attr('onclick') || '';
            if (oc.indexOf(pageName) !== -1) $(this).addClass('active');
        });
    }
    var $linked = $('button[onclick*="' + pageName + '"]').closest('label').prev('input.toggle-box');
    if ($linked.length) $linked.prop('checked', true);
}
function openCity(evt, pageName) { openPage(evt, pageName); }

/* ===== STICKY SIDEBAR ===== */
function sticky_relocate() {
    if ($(window).width() < 992) {
        $('#sticky').removeClass('stick').css('top', '0');
        return;
    }
    var window_top  = $(window).scrollTop();
    var footer      = $('footer');
    var footer_top  = footer.length ? footer.offset().top : $(document).height() - 200;
    var div_top     = $('.doc-template-body').length ? $('.doc-template-body').offset().top : 150;
    var div_height  = $('#sticky').height();

    if (window_top + div_height > footer_top - 40) {
        $('#sticky').css({ top: (window_top + div_height - footer_top + 40) * -1 });
    } else if (window_top > div_top - 50) {
        $('#sticky').addClass('stick').css({ top: '95px' });
    } else {
        $('#sticky').removeClass('stick').css({ top: '0' });
    }
}

$(document).ready(function() {
    var def = document.getElementById('defaultOpen_new');
    if (def) def.click();

    jQuery('#searchform').on('keydown', function(e) {
        if (e.key === 'Escape') {
            jQuery(this).val('');
            fetch123();
        }
    });

    jQuery(document).on('click', function(e) {
        if (!jQuery(e.target).closest('.search-container').length) {
            jQuery('#datafetch').html('');
        }
    });

    $(window).on('scroll resize', sticky_relocate);
    sticky_relocate();

    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function(e) {
        if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
            var hash   = this.hash;
            var target = $(hash).length ? $(hash) : $('[name=' + hash.slice(1) + ']');
            if (target.length) {
                e.preventDefault();
                var parentTab = target.closest('.tabcontent');
                if (parentTab.length) openPage(null, parentTab.attr('id'));
                $('html, body').animate({ scrollTop: target.offset().top - 120 }, 400);
                $('.toggle-box-region a').removeClass('active-link');
                $('a[href="' + hash + '"]').addClass('active-link');
            }
        }
    });

    var urlHash = window.location.hash;
    if (urlHash) {
        var el = $(urlHash);
        if (el.length) {
            var pt = el.closest('.tabcontent');
            if (pt.length) openPage(null, pt.attr('id'));
            setTimeout(function() {
                $('html, body').animate({ scrollTop: el.offset().top - 120 }, 'slow');
            }, 300);
        }
    }
});
</script>

<?php get_footer( 'sms' ); ?>
