<?php

/**
 * Template Name: Privacy Policy Current Page
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
        /*font-family: 'Montserrat', sans-serif;*/
        background-color: var(--white) !important;
        color: var(--text-dark);
        line-height: 1.6;
        font-size: 16px;
    }

    /* ── TYPOGRAPHY ── */
    h1, h2, h3, h4, h5, h6 {
        /*font-family: 'Montserrat', sans-serif;*/
        font-weight: 700;
        color: var(--dark-navy);
        text-transform: none;
    }

	/* Force requested heading sizes */
	h5 { font-size: 16px; } /* legacy: ok if other content uses h5 */

    h1 {
        font-size: clamp(28px, 4.5vw, 45px);
        line-height: 1.25;
    }

		h2 {
			font-size: 32px;
			line-height: 1.3;
		}

		/* ── PRIVACY POLICY PAGE LAYOUT (matches screenshot) ── */
		.policy-hero {
			background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;
            padding: clamp(40px, 6vw, 70px) 0;
		}

		 h1 {
			color: #000000 !important;
			margin: 0;
			/*text-transform: uppercase;*/
			letter-spacing: 0.08em;
			font-size: clamp(22px, 3vw, 22px);
		}

		.policy-content {
			background: #ffffff;
			padding: clamp(24px, 4vw, 48px) 0;
		}

		.policy-content h2 {
			color: #111827;
			margin-top: 22px;
			margin-bottom: 10px;
			font-weight: 700;
		}

		.policy-content h2:first-child {
			margin-top: 0;
		}

		.policy-content p {
			color: #374151;
			margin-bottom: 12px;
			line-height: 1.75;
		}

		.policy-content ul {
			padding-left: 1.2rem;
			margin-bottom: 14px;
		}

		.policy-content li {
			margin-bottom: 8px;
			color: #374151;
		}
	</style>

	
	
		<!-- Banner (full width) -->
		

		<!-- Content (center aligned column) -->
		<section class="policy-content">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-12 col-lg-10 col-xl-9">
					    <h1>Privacy Policy</h1>
						<p>Your privacy is important to us. It is 360 Degree Cloud's policy to respect your privacy regarding any information we may collect from you through our app, the 360 SMS App, why we collect it, how we use it and what rights you might be entitled to as a data subject or consumer.</p>
						<p><span style="font-weight: 400;">Please note: all information in this privacy policy is applicable to you unless otherwise indicated.</span></p>
						<p><b>1. Purpose</b></p>
						<p><span style="font-weight: 400;">The purpose of this Privacy Policy is to provide users with transparency with respect to 360 Degree's collection and use of personal data, including while using its services 360 SMS App. 360 Degree Cloud is committed to protecting confidentiality of information entrusted to it by users and has prepared this policy to describe our policies and procedures on the collection, use, and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You. We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy.</span></p>
						<p><b>2. Scope</b></p>
						<p><span style="font-weight: 400;">This Privacy Policy addresses all data, programs, systems, facilities, other tech infrastructure, users of technology, and Third-Parties at the Company, without exception.</span></p>
						<p><b>3. Definitions</b></p>
						<p><span style="font-weight: 400;">3.1. "</span><b>We</b><span style="font-weight: 400;">", "</span><b>Our</b><span style="font-weight: 400;">", "</span><b>Company</b><span style="font-weight: 400;">", "</span><b>Us</b><span style="font-weight: 400;">", "</span><b>360 Degree Cloud</b><span style="font-weight: 400;">" refers to "</span><b>360 Degree Cloud LLC, 1968 S. Coast Hwy #1412 Laguna Beach California 92651</b><span style="font-weight: 400;">" and its Affiliates.</span></p>
						<p><span style="font-weight: 400;">3.2. "</span><b>Affiliate</b><span style="font-weight: 400;">" (or plurally "</span><b>Affiliates</b><span style="font-weight: 400;">") means any entity that controls, is controlled by, or is under common control with the Party (or such other entity for which such determination is being made). The term "control" (including the terms "controlling", "controlled by" and "under common control with") means the possession, whether direct or indirect, of the power to direct or cause the direction of the management and policies of an entity or the composition of its board of directors or equivalent body, whether through the ownership of shares, by contract, or otherwise. Affiliate shall also include (i) any entity that is consolidated into either Parties group of companies or accounted for under the equity method of accounting under IFRS and/or (ii) any entity where either Party, directly or indirectly, has ownership of at least 50% of the shares.</span></p>
						<p><span style="font-weight: 400;">3.3. "</span><b>Client</b><span style="font-weight: 400;">" refers to any entity(es) or Company(ies) that enter into business with Us, or avail Our Products or Services.</span></p>
						<p><span style="font-weight: 400;">3.4. "</span><b>Party</b><span style="font-weight: 400;">" (or plurally "</span><b>Parties</b><span style="font-weight: 400;">") refers to Us, the Client, Third Parties, and any of their respective affiliates that enter an agreement with Us to purchase or subscribe to any Licensed Property, Service, or Product.</span></p>
						<p><span style="font-weight: 400;">3.5. "</span><b>Third Party</b><span style="font-weight: 400;">" (or plurally "Third Parties") refers to any entities outside of Our Company, the Client, and either of their Affiliates that provide or vend specialized software services or dependencies.</span></p>
						<p><span style="font-weight: 400;">3.6. "</span><b>Employee</b><span style="font-weight: 400;">" (or plurally "Employees") all refers to all employees officially appointed on Our payroll.</span></p>
						<p><span style="font-weight: 400;">3.7. "</span><b>Senior Managers</b><span style="font-weight: 400;">" refers to all team-leaders that grant data access to Employees and maintain corresponding records</span></p>
						<p><span style="font-weight: 400;">3.8. "</span><b>Application Security Program</b><span style="font-weight: 400;">" refers to Security for flagship Products that are purchased.</span></p>
						<p><span style="font-weight: 400;">3.9. "</span><b>Security Team</b><span style="font-weight: 400;">" is the technical team of Employees that makes Security updates and changes to fully address and report on any issues related to Vulnerability Management or issues brought up by another internal team dedicated to Security Management and Incident Response.</span></p>
						<p><span style="font-weight: 400;">3.10. "</span><b>Product</b><span style="font-weight: 400;">" refers to all Licensed and Unlicensed Property owned by Us</span></p>
						<p><span style="font-weight: 400;">3.11. "</span><b>Licensed Property</b><span style="font-weight: 400;">" means all the documentation and proprietary software, systems, inventions, and designs of 360 Degree Cloud, except for Deliverables.</span></p>
						<p><span style="font-weight: 400;">3.12. "</span><b>Services</b><span style="font-weight: 400;">" means the Products and services to be provided by 360 Degree Cloud or any of its Affiliates.</span></p>
						<p><span style="font-weight: 400;">3.13. "</span><b>People Security</b><span style="font-weight: 400;">" refers to restricted communications for sensitive data for the Company's Employees.</span></p>
						<p><span style="font-weight: 400;">3.14. "</span><b>Product Security</b><span style="font-weight: 400;">" refers to the failsafe and guardrails implemented to secure all Our Products from unauthorized access and control by malicious actors.</span></p>
						<p><span style="font-weight: 400;">3.15. "</span><b>Cloud and Network Infrastructure Security</b><span style="font-weight: 400;">" refers to measures taken to ensure any data hosted over a cloud or local network is safe from unauthorized access,&nbsp; destruction, and modification.</span></p>
						<p><span style="font-weight: 400;">3.16. "</span><b>Security</b><span style="font-weight: 400;">" refers to any recognized measures, best practices, protocols, enforcement, and related measures taken with the ultimate aim to secure a Product or Service or Client data from unauthorized access and modification.</span></p>
						<p><span style="font-weight: 400;">3.17. "</span><b>Security Compliance</b><span style="font-weight: 400;">" refers to adherence and record-keeping for agreed measures and responsibilities that constitute Security.</span></p>
						<p><span style="font-weight: 400;">3.18. "</span><b>Third Party Security</b><span style="font-weight: 400;">" refers to measures and legal obligations for a Third Party as well as Us for the Security of any Client's data.</span></p>
						<p><span style="font-weight: 400;">3.19. "</span><b>Vulnerability Management</b><span style="font-weight: 400;">" refers to updates to address identified, potential, or future vulnerabilities and flaws in Security for Products, Services, and any Client's data.</span></p>
						<p><span style="font-weight: 400;">3.20. "</span><b>Security Management and Incident Response</b><span style="font-weight: 400;">" means dealing with any emerging, persistent, or envisioned Security flaws or loopholes.</span></p>
						<p><span style="font-weight: 400;">3.21. "</span><b>Chief Information and Security Officer</b><span style="font-weight: 400;">" is Our designated head and principal decision-maker for a dedicated internal team tasked with Security Management and Information Response.</span></p>
						<p><span style="font-weight: 400;">3.22."</span><b>Customer</b><span style="font-weight: 400;">" or "</span><b>Data Subject</b><span style="font-weight: 400;">" refers to anyone whose data a Client stores and collects in a Salesforce Org or Salesforce Cloud.</span></p>
						<p><b>4. References</b></p>
						<p><span style="font-weight: 400;">4.1. Regulatory Compliance</span></p>
						<p><span style="font-weight: 400;">Our Security Strategy is based on the ISO 27001:2022 Information Security standard.</span></p>
						<p><b>4.2. Physical Security Policy</b><b><br></b><b><br></b><span style="font-weight: 400;">A document that describes all prerequisites in the form of measures, fail-safes, restrictions, and verifications undertaken by 360 Degree Cloud prior to and while establishing physical access or control at all locations of availability.</span></p>
						<p><b>5. Data Collection &amp; Usage</b><b><br></b></p>
						<p><b>5.1.1. Personal Data</b><b><br></b><b><br></b><span style="font-weight: 400;">While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally, identifiable information may include, but is not limited to:</span></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">First name and last name,</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Phone number, and</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Usage Data.</span></li>
						</ul>
						<p><b>5.1.2. Usage Data</b><b><br></b><b><br></b><span style="font-weight: 400;">Usage Data is collected automatically when using the Service. Usage Data may include information such as Your Device's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data. When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data. We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.</span></p>
						<p><b>5.2. Use of Your Personal Data</b><b><br></b><b><br></b><span style="font-weight: 400;">To provide and maintain our Service, including to monitor the usage of our Service.</span></p>
						<p><b>To manage Your Account:</b><span style="font-weight: 400;"> To manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user. For the performance of a contract: the development, compliance, and undertaking of the purchase contract for the products, items, or services You have purchased or of any other contract with Us through the Service.</span></p>
						<p><b>To contact You:</b><span style="font-weight: 400;"> To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application's push notifications regarding updates or informative communications related to the functionalities, products, or contracted services, including the security updates, when necessary or reasonable for their implementation.</span></p>
						<p><b>To manage Your requests:</b><span style="font-weight: 400;"> To attend and manage Your requests to Us.</span></p>
						<p><b>For business transfers:</b><span style="font-weight: 400;"> We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or another sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.</span></p>
						<p><b>With Service Providers:</b><span style="font-weight: 400;"> We may share Your personal information with Service Providers to monitor and analyse the use of our Service, to contact You. For Business Transfers: We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of Our business to another company.</span></p>
						<p><b>With Affiliates:</b><span style="font-weight: 400;"> We may share Your information with Our affiliates, in which case we will require those affiliates to honour this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners, or other companies that We control or that are under common control with Us.</span></p>
						<p><b>With business partners:</b><span style="font-weight: 400;"> We may share Your information with Our business partners to offer You certain products, services, or promotions.</span></p>
						<p><b>5.3. Disclosure</b><b><br></b><b><br></b><b>5.3.1. Business Transactions</b><b><br></b><b><br></b><span style="font-weight: 400;">If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.</span></p>
						<p><b>5.3.2. Law Enforcement</b><b><br></b><b><br></b><span style="font-weight: 400;">Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</span></p>
						<p><b>5.3.3. Other Legal Requirements</b><b><br></b><b><br></b><span style="font-weight: 400;">The Company may disclose Your Personal Data in the good faith belief that such action is necessary to: •</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">Comply with a legal obligation.</span></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Protect and defend the rights or property of the Company.</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Prevent or investigate possible wrongdoing in connection with the Service.</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Protect the personal safety of users of the Service or the public.</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Protect against legal liability.</span></li>
						</ul>
						<p><span style="font-weight: 400;">360 Degree Cloud does not and will not sell, share or rent your personal data to anyone in exchange for monetary compensation.</span></p>
						<p><b>5.4. Transfer</b></p>
						<p><span style="font-weight: 400;">Your information, including Personal Data, is processed at the Company's operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country, or other governmental jurisdiction where the data protection laws may differ from those from Your jurisdiction. Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer. The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.</span></p>
						<p><b>5.5. Retention</b><b><br></b><b><br></b><span style="font-weight: 400;">Our Retention Policy data use follows a principle of 'end-to-end' security from disclosure to destruction. This is in keeping with our measures for Privacy By the Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies. The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods. Still, in case any data is provided by the Client for operational purposes, it is destroyed and formatted over 13 times to prevent retrieval.</span></p>
						<p><b>6. Enforcement and Dispute Resolution</b></p>
						<p><span style="font-weight: 400;">360 Degree will investigate and attempt to resolve all disputes and complaints regarding our use and disclosure of personal data in accordance with this Privacy Policy.</span></p>
						<p><b>7. Jurisdiction-Specific Requirements and Implementation</b></p>
						<p><span style="font-weight: 400;">National data protection and privacy laws may impose additional requirements on 360 Degree Cloud for the processing of personal data. Where required, 360 Degree Cloud will establish procedures and guidelines in order to supplement the principles of this policy and engage with relevant regulatory/supervisory authority, as required.</span></p>
						<p><b>8. Privacy By Enforcement</b><b><br></b></p>
						<p><span style="font-weight: 400;">A dedicated Privacy Team Headed by a designated, accessible administrator manages the Application's Privacy program and assumes complete responsibility for all privacy-related issues. Security measures are meant to be proactive and preventative, not remedial and reactive. Our Information Security policies and standards are approved by management and available to all Employees.</span></p>
						<p><b>8.1. Classification Of Data</b><b><br></b><b><br></b><span style="font-weight: 400;">A data classification policy may arrange the entire set of information as follows</span></p>
						<p><b>8.1.1. High-Risk Class</b><b><br></b><span style="font-weight: 400;">Data protected by state and federal legislation (the Data Protection Act, HIPAA, FERPA as well as financial, payroll, and personnel (privacy requirements) are included here.</span></p>
						<p><b>8.2.1. Confidential Class</b><b><br></b><span style="font-weight: 400;">Data in this class do enjoy the privilege of being protected by laws explicitly, but nonetheless, data owners are still extended equivalent protections against unauthorized disclosure.</span></p>
						<p><b>8.3.1. Public Class</b><b><br></b><span style="font-weight: 400;">This information is available publicly and can be freely distributed.</span></p>
						<p><b>8.2. Data Support &amp; Operations</b><b><br></b><b><br></b><span style="font-weight: 400;">Support and operations like the regulation of general system mechanisms responsible for data protection, data backup, movement of data.</span></p>
						<p><span style="font-weight: 400;">Our Security framework includes People Security, Product Security, Cloud and Network Infrastructure Security, Security Compliance, Third Party Security, Vulnerability Management, as well as Security Monitoring and Incident Response.</span></p>
						<p><b>8.3. Authority, Access Control, and Restrictions</b><b><br></b><b><br></b><span style="font-weight: 400;">Permissions and access to any Client's data, if found necessary for operation, are shared sparingly on a 'need-to-know' basis with a due record of access. Employees with access are legally bound not to share the little amount of information they may have unless explicitly authorized. This is affected in ways that Senior Managers may have adequate authority to make a decision on what data can be shared and with whom while assuming responsibility for keeping due records of access. Monitoring on all systems must be implemented to record login and access attempts.</span></p>
						<p><b>8.4. Legal Obligations</b><b><br></b><b><br></b><span style="font-weight: 400;">We ourselves, our Service Providers, Third-Parties, and all affiliates thereof are contractually obligated to take meaningful active consent (or seek obligations for the same) in accordance with mandated local regulations, before storing any user Data in an Org. Obligations also include all situations enumerated in the Section titled "Privacy Rights &amp; Data Removal."</span></p>
						<p><span style="font-weight: 400;">8.4.1. </span><span style="font-weight: 400;">Legitimate Interest</span><span style="font-weight: 400;">– The processing is based on our legitimate interests or the legitimate interests of our subsidiaries and affiliates to continuously operate, improve and/or personalize our services and develop new services, monitor the usage of our website, and ensure the security and detect any frauds and abuse, unless the requirement to protect the individual's personal data overrides those legitimate interests.</span></p>
						<p><span style="font-weight: 400;">8.4.2. </span><b>Consent</b><span style="font-weight: 400;">– You have provided express consent to the processing of your personal data for the specific purposes by explicitly ticking the relevant buttons, where applicable, and by voluntarily filling in and providing your personal data.</span></p>
						<p><span style="font-weight: 400;">8.4.3. </span><b>Contract</b><span style="font-weight: 400;">– Processing is required for the performance of a contract in which 360 Degree has been engaged to perform services.</span></p>
						<p><b>9. Privacy By Transparency</b><b><br></b></p>
						<p><b>9.1. Changes and Approvals</b><b><br></b><b><br></b><b>9.1.1. Privacy Policy</b><b><br></b><b><br></b><span style="font-weight: 400;">We reserve our right to update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page from our Data Protection Team. We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the "Last Updated" date at the top of this Privacy Policy. You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</span></p>
						<p><b>9.1.2. Security Policy</b><b><br></b><b><br></b><span style="font-weight: 400;">Security is represented at the highest levels of the Company, with Our Chief Information Security Officer meeting with executive management regularly to discuss issues and coordinate Company-wide Security initiatives.</span></p>
						<p><b>9.2. Disclosures</b><b><br></b><b><br></b><span style="font-weight: 400;">It is possible that we will need to disclose information about you when required by law, subpoena, or other legal process, or if we have a good faith belief that disclosure is reasonably necessary to:</span></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Investigate, prevent, or take action regarding suspected or actual illegal activities or to assist government enforcement agencies,</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Enforce our agreements with you,</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Investigate and defend ourselves against any third-party claims or allegations,</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Protect the security or integrity of our Service (such as by sharing with companies facing similar threats).</span></li>
						</ul>
						<p><span style="font-weight: 400;">We will attempt to notify you about legal demands for your personal data when appropriate in our judgment unless prohibited by law or court order or when the request is an emergency. We may dispute such demands when we believe, in our discretion, that the requests are overbroad, vague, or lack proper authority, but we do not promise to challenge any demand.</span></p>
						<p><b>10. Security Commitments for Privacy</b></p>
						<p><span style="font-weight: 400;">We consider Our attitude towards Security as a vital part of our commitment to and enforcement of Privacy. Security is a top priority for 360 Degree Cloud. We use the best Security practices and policies to ensure that Our network is secured physically, virtually, and that Our customer's data is both private and secure. We do not save the data of the organizations which install our app instead, We use infrastructure from recognized&nbsp; Third Party organizations for sending and receiving SMS, multimedia, or any other communication administered by Our Applications or Services. Our Security practices and policies offer a transparent look into Our operations and the support that We offer Our Clients and their Customers (or Data Subjects).</span></p>
						<p><b>10.1. Privacy By Design</b><b><br></b><b><br></b><span style="font-weight: 400;">10.1.1. At 360 SMS, all operations are 'zero-local-storage', by design, even accelerated bulk messaging. That means any communications you send out or receive in confidence or otherwise, lives only on Salesforce's cloud storage, within your Org.</span></p>
						<p><b>10.2. Privacy By End-to-End Security</b></p>
						<p><span style="font-weight: 400;">From Salesforce, an HTTP request with the Message body, Sender Number as well as Receiver Number reaches the user's (Our) SMS Provider, which triggers an SMS from Salesforce. In its turn, the Service Provider then drafts an SMS from the HTTP request and sends it over to the intended recipient's carrier and device as depicted in the schematic in Figure 1 below. Similarly, any replies or incoming messages are routed to our Salesforce site via the recipient's carrier and then our own Provider.</span></p>
						<p><b>10.3. Privacy By Architecture Security</b></p>
						<p><span style="font-weight: 400;">10.3.1. Our Applications are completely 'Salesforce-native', which means Client data is hosted exclusively over the Client's own Salesforce Cloud instance and doesn't store any NPI (Non-Public Information) of the Client's customers on any physical server of Our own. Information travels from Customer to respective SMS API Provider and at no point is stored within the app. The app uses encrypted APIs to send/receive the text messages thus ensuring data encryption and privacy.</span></p>
						<p><span style="font-weight: 400;">10.3.2. Therefore, by the combined virtue of the Salesforce cloud platform being HIPAA certified, Our Applications being completely Salesforce-native, and Our Service Providers being contractually obligated to observe and enforce HIPAA compliance, all of Our Applications would be considered HIPAA certified, even though we have never explicitly sought this specific designation.</span></p>
						<p><span style="font-weight: 400;">10.3.3. Penetration Testing is used as the primary security assessment type.</span></p>
						<p><span style="font-weight: 400;">10.3.4. Security engineers continuously perform numerous activities to ensure that our Products are secure.</span></p>
						<p><span style="font-weight: 400;">These include internal security reviews before products are launched, regular penetration tests performed by Third-Party contractors, continuously running bug bounty programs, continuously running internal and external security tests, and regularly conducted performance tests against threat models.</span></p>
						<p><b>10.4. Privacy By Data Security Controls</b></p>
						<p><span style="font-weight: 400;">10.4.1. We don't store any of the client's data at our end but since we use multiple texting providers to send and receive messages, Providers store data such as the number to which the message was sent or the date and time the messages were sent or received.</span></p>
						<p><span style="font-weight: 400;">10.4.2. Even within our Applications, we don't access or modify your Salesforce instance's internal data.</span></p>
						<p><span style="font-weight: 400;">10.4.3. We have provisioned a separate 'SMS History' object in which you hold the records of all messages sent and received.</span></p>
						<p><span style="font-weight: 400;">10.4.4. While communication platform Multi-Tenancy is an integral component of Our Application architecture, logical identifiers ensure that a Client's data isn't accessed by other Clients.</span></p>
						<p><span style="font-weight: 400;">10.4.5. 360 Degree Cloud has a formal change-management process where all changes are tracked and require approval. Changes are reviewed before being moved into a staging environment where they get tested further before finally being deployed to production.</span></p>
						<p><span style="font-weight: 400;">10.4.6. 360 Degree Cloud performs Third-Party penetration tests periodically</span></p>
						<p><b>10.5. Privacy By Default</b></p>
						<p><span style="font-weight: 400;">10.5.1. Default Commitment &amp; Intentions</span></p>
						<p><span style="font-weight: 400;">We only ask for personal information when we truly need it to provide a service to you. We collect it by fair and lawful means, with your knowledge and consent. We also let you know why we're collecting it and how it will be used. We only retain collected information for as long as necessary to provide you with your requested service. What data we store, we'll protect within commercially acceptable means to prevent loss and theft, as well as unauthorized access, disclosure, copying, use, or modification. We don't share any personally identifying information publicly or with third-parties, except when required to by law. Even in events not covered by this Privacy Policy, We intend to uphold Privacy for all Clients and their Customers (or Data Subjects) in good faith. Your continued use of our app will be regarded as acceptance of our practices around privacy and personal information. If you have any questions about how we handle user data and personal information, feel free to contact us.</span></p>
						<p><b>11. How we will keep your information safe</b></p>
						<p><span style="font-weight: 400;">We have put in place appropriate technical, organizational and security measures to prevent your personal data from being accidentally lost, used or accessed in an unauthorized way, altered or disclosed. In addition, we limit access to your personal data to those employees, agents, contractors and other third parties who have a business need to know. They will only process your personal data on our instructions and they are subject to a duty of confidentiality.</span></p>
						<p><span style="font-weight: 400;">We have put in place procedures to deal with any suspected data security breach and will notify you and any applicable regulator of a suspected breach where we are legally required to do so.</span></p>
						<p><b>12. Rights of the data subject residing in the European Union or to which GDPR applies</b><b><br></b></p>
						<p><span style="font-weight: 400;">Residents of the European Union have certain rights under European data protection law with respect to personal data, including the right to request access to, correct, amend, delete, limit the use of, object to or withdraw your consent for the processing of your personal data at any time. They may also have the right to receive a copy of your personal information in a commonly used and machine-readable format and to transmit such information to another controller.</span></p>
						<p><span style="font-weight: 400;">You may write to us at any time requesting the above stated requests and we will update, block, erase, remove or provide your personal information upon request in line with applicable law.</span></p>
						<p><b>13. Privacy Policy for California Residents</b></p>
						<p><span style="font-weight: 400;">360 Degree adopted the California Consumer Privacy Statement which supplements the information contained herein and represents an attachment to this privacy policy, an integral part hereto. The California Consumer Privacy Statement applies solely to personal information as defined in the relevant data privacy laws collected about California consumers, such as our website visitors, attendees of our webinars and events, representatives of our business customers and business partners, and job applicants.</span></p>
						<p><b>14. Compliance Measures</b></p>
						<p><span style="font-weight: 400;">14.1. Assigned Privacy and Security Responsibility</span></p>
						<p><b>14.1.1. Security Program</b><b><br></b><span style="font-weight: 400;">While security is a high priority for all Our teams, a dedicated Security Team manages Our Security Program.</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;"><br></span><b>14.1.2. Security Alert Response</b><b><br></b><span style="font-weight: 400;">Security alerts are directed at IT managers that can speak to Development Team coordinators and are followed up with a proportionate response and disciplinary measures</span></p>
						<p><b>14.1.3. Security Initiatives</b><b><br></b><span style="font-weight: 400;">Data Protection and Chief Information Security Officers (and their respective teams) discuss and lead Our Security initiatives.</span></p>
						<p><b>14.2. Standard Compliance Measures &amp; Best Practices</b><b><br></b><b><br></b><span style="font-weight: 400;">Applications by 360 Degree Cloud adhere to a host of Privacy principles and best practices required by most compliance regulations by design, through architecture. Since 360 SMS is natively built on Salesforce, it doesn't store Customer information on any physical server of its own. Information travels from Customer to the respective Service Provider, and at no point is stored with 360 Degree Cloud. The app also encrypts the messages thus ensuring data encryption and privacy.</span></p>
						<p><b>15.&nbsp;Site Usage</b></p>
						<p><span style="font-weight: 400;">Our Service or Website may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party's site. We strongly advise You to review the Privacy Policy of every site You visit. We have no control over and assume no responsibility for the content, privacy policies or practices of any Third Party sites or Service .</span></p>
						<p><b>16. Privacy Rights And Data Removal</b></p>
						<p><span style="font-weight: 400;">16.1. Your Rights As A Data Subject</span></p>
						<p><span style="font-weight: 400;">At any point while we are in possession of or processing your personal data, you, the data subject, have the following rights:</span></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Right of access – you have the right to request a copy of the information that we hold about you.</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Right of rectification – you have a right to correct data that we hold about you that is inaccurate or incomplete.</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Right to be forgotten – in certain circumstances, you can ask for the data we hold about you to be erased from our records.</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Right to restriction of processing – where certain conditions apply to have a right to restrict the processing.</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Right of portability – you have the right to have the data we hold about you transferred to another organization.</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Right to object – you have the right to object to certain types of processing, such as direct marketing.</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Right to object to automated processing, including profiling – you also have the right to be subject to the legal effects of automated processing or profiling.</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Right to judicial review – in the event that 360 SMS App refuses your request under rights of access, we will provide you with a reason as to why. You have the right to complain as outlined in clause 7 below.</span></li>
						</ul>
						<p><span style="font-weight: 400;">You may also contact us using the contact information below, and we will consider your request in accordance with applicable laws.</span></p>
						<p><b>16.2. Privacy Rights For Minors</b></p>
						<p><span style="font-weight: 400;">We do not intentionally collect or store any data for Clients or their Customers under the age of 18. All Third-Parties and Clients are contractually obligated to abstain from doing the same. However, if such data does make its way past Us or Our Clients unknowingly, we intend to destroy it as soon as we can, once it is brought to Our attention.</span></p>
						<p><b>16.3. Data Removal &amp; Complaints</b></p>
						<p><span style="font-weight: 400;">To request data removal or in the event that you wish to make a complaint about how your personal data is being processed by 360 SMS App (or third parties as described above), or how your complaint has been handled, you have the right to lodge a complaint directly with the supervisory authority with Our Data Protection Officer.</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">Contact Name</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">Address</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">Email</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">Contact Number</span></p>
						<p><b>17. Disclaimer</b></p>
						<p><span style="font-weight: 400;">360 Degree Cloud is the owner and controller of this website. We do not consent to the use and/or reproduction of the content and information on this website without our consent, pursuant to applicable copyright law.</span></p>
						<p><span style="font-weight: 400;">360 Degree Cloud is not responsible, nor do we have control of third-party websites/links to and from our website.</span></p>
						<p><b>18.&nbsp;Data Minimization and Purpose Limitation</b><b><br></b></p>
						<p><span style="font-weight: 400;">The Company shall collect and process personal data solely for specified, explicit, and legitimate purposes. No personal data shall be processed in a manner that is incompatible with those purposes, adhering to the principle of data minimization.</span></p>
						<p><b>19. Data Sharing and Third-Party Processors</b><b><br></b></p>
						<p><span style="font-weight: 400;">Personal data may be shared with third-party processors only when necessary and under conditions that ensure the data's confidentiality and integrity. All third-party processors must adhere to data protection standards comparable to those outlined herein.</span></p>
						<p><b>20.&nbsp;Specific Rights under CCPA and Indian Data Protection Guidelines</b><b><br></b></p>
						<p><span style="font-weight: 400;">Data subjects under the California Consumer Privacy Act (CCPA) and applicable Indian data protection guidelines are afforded specific rights, including the right to access, delete, and opt-out of the sale of their personal data. The Company commits to honouring these rights in compliance with the respective legislations.</span></p>
						<p><b>21.&nbsp;Use of Cookies and Tracking Technologies</b><b><br></b></p>
						<p><span style="font-weight: 400;">The Company employs cookies and similar tracking technologies to enhance user experience and analyse service usage. Data subjects may control the use of such technologies via their browser settings or through direct opt-out mechanisms provided by the Company.</span></p>
						<p><b>22. Data Breach and Incident Response</b></p>
						<p><span style="font-weight: 400;">22.1. </span><b>Incident Reporting</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">In the event of a data breach or unauthorized access to User data, 360 Degree Cloud will take immediate steps to mitigate the impact and notify affected Users and relevant regulatory authorities as required by applicable laws.</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Notification will be provided within 72 hours of becoming aware of the breach, unless otherwise mandated by law.</span></li>
						</ul>
						<p><span style="font-weight: 400;">22.2. </span><b>Limitation of Liability</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">360 Degree Cloud shall not be liable for any damages, losses, or consequences arising from a data breach, including but not limited to financial losses, reputational damage, or third-party claims, unless such breach is directly attributable to the Company's gross negligence or willful misconduct.</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Users are responsible for maintaining the security of their credentials, passwords, and systems. 360 Degree Cloud may assist in data recovery but does not guarantee the restoration of lost or compromised data.</span></li>
						</ul>
						<p><span style="font-weight: 400;">22.3. </span><b>Force Majeure</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">360 Degree Cloud shall not be liable for any failure or delay in performance due to events beyond its reasonable control, including but not limited to cyberattacks, hacking, or other security incidents caused by third parties.</span></li>
						</ul>
						<p><b>23. Third-Party Platforms and Services</b><b><br></b></p>
						<p><span style="font-weight: 400;">23.1. </span><b>Salesforce Platform</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">The 360 SMS App operates on the Salesforce Platform, which is owned and controlled by a third party. 360 Degree Cloud does not own, operate, or assume any responsibility for the Salesforce Platform.</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Users acknowledge that their use of the Salesforce Platform is subject to Salesforce's terms of service and privacy policy, and 360 Degree Cloud shall not be liable for any issues arising from the use of the Salesforce Platform.</span></li>
						</ul>
						<p><span style="font-weight: 400;">23.2. </span><b>Third-Party Service Providers</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">360 Degree Cloud may use third-party service providers for messaging, data storage, and other services. These providers operate independently of 360 Degree Cloud, and the Company shall not be liable for any actions, omissions, or breaches by such third-party providers.</span></li>
						</ul>
						<p><b>24. Global Data Protection Compliance</b><b><br></b></p>
						<p><span style="font-weight: 400;">24.1. </span><b>GDPR Compliance</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">For Users residing in the European Union, 360 Degree Cloud complies with the General Data Protection Regulation (GDPR). Users have the right to access, rectify, erase, restrict, or port their data, as outlined in Section 12 of this Privacy Policy.</span></li>
						</ul>
						<p><span style="font-weight: 400;">24.2. </span><b>CCPA Compliance</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">For California residents, 360 Degree Cloud complies with the California Consumer Privacy Act (CCPA). Users have the right to opt-out of the sale of their personal data and request the deletion of their data, as outlined in Section 13 of this Privacy Policy.</span></li>
						</ul>
						<p><span style="font-weight: 400;">24.3. </span><b>Indian Data Protection Compliance</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">For Users in India, 360 Degree Cloud complies with applicable data protection laws, including the upcoming Digital Personal Data Protection Act (DPDPA). Users have the right to access, correct, and delete their personal data, as outlined in Section 16 of this Privacy Policy.</span></li>
						</ul>
						<p><b>25. User Responsibilities</b><b><br></b></p>
						<p><span style="font-weight: 400;">25.1. </span><b>Security of Credentials</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Users are solely responsible for maintaining the confidentiality and security of their login credentials, passwords, and access to the 360 SMS App.</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Users must immediately notify 360 Degree Cloud of any unauthorized access or suspected security breach.</span></li>
						</ul>
						<p><span style="font-weight: 400;">25.2. </span><b>Compliance with Applicable Laws</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Users agree to comply with all applicable laws and regulations, including but not limited to TRAI regulations for SMS and WhatsApp services, Meta's policies for WhatsApp, and FCC regulations for telecommunications.</span></li>
						</ul>
						<p><b>26. Dispute Resolution and Arbitration</b><b><br></b></p>
						<p><span style="font-weight: 400;">26.1. </span><b>Governing Law</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">This Privacy Policy and any disputes arising out of or related to it shall be governed by the laws of the State of California, USA, without regard to its conflict of law principles.</span></li>
						</ul>
						<p><span style="font-weight: 400;">26.2. </span><b>Arbitration</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Any disputes, claims, or controversies arising out of or relating to this Privacy Policy shall be resolved through binding arbitration administered by the American Arbitration Association (AAA) in accordance with its Commercial Arbitration Rules.</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">The arbitration shall take place in Laguna Beach, California, and the decision of the arbitrator shall be final and binding.</span></li>
						</ul>
						<p><span style="font-weight: 400;">26.3. </span><b>Class Action Waiver</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Users agree to resolve disputes on an individual basis and waive any right to participate in class actions or class arbitrations.</span></li>
						</ul>
						<p><b>27.&nbsp;Limitation of Liability</b><b><br></b></p>
						<p><span style="font-weight: 400;">27.1. </span><b>Exclusion of Consequential Damages</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">In no event shall 360 Degree Cloud be liable for any indirect, incidental, consequential, special, or punitive damages, including but not limited to loss of profits, data, or business opportunities, arising out of or related to the use of the Website, Services, or this Privacy Policy.</span></li>
						</ul>
						<p><span style="font-weight: 400;">27.2. </span><b>Cap on Liability</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">360 Degree Cloud's total liability for any claims arising out of or related to this Privacy Policy shall not exceed the amount paid by the User for the Services in the one (1) month preceding the claim.</span></li>
						</ul>
						<p><b>28. Data Minimization and Retention</b><b><br></b></p>
						<p><span style="font-weight: 400;">28.1. </span><b>Data Minimization</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">360 Degree Cloud shall collect and process only the minimum amount of personal data necessary to provide the Services.</span></li>
						</ul>
						<p><span style="font-weight: 400;">28.2. </span><b>Data Retention</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Personal data shall be retained only for as long as necessary to fulfill the purposes outlined in this Privacy Policy, unless a longer retention period is required by law.</span></li>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Upon the expiration of the retention period, personal data shall be securely deleted or anonymized.</span></li>
						</ul>
						<p><b>29.&nbsp;Transparency and User Consent</b><b><br></b></p>
						<p><span style="font-weight: 400;">29.1. </span><b>Explicit Consent</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">By using the Website or Services, Users explicitly consent to the collection, use, and sharing of their personal data as described in this Privacy Policy.</span></li>
						</ul>
						<p><span style="font-weight: 400;">29.2. </span><b>Withdrawal of Consent</b></p>
						<p><span style="font-weight: 400;">Users may withdraw their consent at any time by contacting 360 Degree Cloud at </span><a href="mailto:sales@360degreecloud.com"><span style="font-weight: 400;">sales@360degreecloud.com</span></a><span style="font-weight: 400;">. Withdrawal of consent may result in the termination of Services.</span></p>
						<p><b>30. Use of Cookies and Tracking Technologies</b><b><br></b></p>
						<p><span style="font-weight: 400;">30.1. </span><b>Types of Cookies</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">360 Degree Cloud uses cookies and similar tracking technologies to enhance User experience, analyse service usage, and deliver targeted advertisements.</span></li>
						</ul>
						<p><span style="font-weight: 400;">30.2. </span><b>User Control</b></p>
						<ul>
							<li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Users may control the use of cookies and tracking technologies through their browser settings or by using the opt-out mechanisms provided by 360 Degree Cloud.</span></li>
						</ul>
						<p><b>31. Contact Information</b><b><br></b></p>
						<p><span style="font-weight: 400;">For any questions, concerns, or requests related to this Privacy Policy, Users may contact 360 Degree Cloud at:</span></p>
						<p><b>360 Degree Cloud Technology Private Limited</b><b><br></b><span style="font-weight: 400;">1968 S. Coast Hwy #1412</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">Laguna Beach, California 92651</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">Tel: +1 360 663 4309</span><span style="font-weight: 400;"><br></span><span style="font-weight: 400;">Email: </span><a href="mailto:sales@360degreecloud.com"><span style="font-weight: 400;">sales@360degreecloud.com</span></a></p>
					</div>
				</div>
			</div>
		</section>

	

	<!-- Bootstrap 5 JS Bundle -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

	<?php get_footer('sms'); ?>