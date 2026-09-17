<?php

/**
 * Template Name: FAQ Page
 */

get_header('sms');
?>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
    body {
        font-family: 'Open Sans', sans-serif;
        color: #333;
    }

    /* ── Hero Banner ── */
    .faq-hero {
        background-color: #1a2e55;
        background:linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;
        background-repeat: no-repeat;
        background-position: right center;
        background-size: auto 100%;
        padding: clamp(40px, 6vw, 70px) 0;
        text-align: center;
    }

    .faq-hero h1 {
        color: #000000;
        font-size: clamp(30px, 4.5vw, 45px);
        font-weight: 700;
        margin: 0;
        letter-spacing: 0.01em;
    }

    /* ── FAQ Section ── */
    .faq-section {
        padding: clamp(30px, 4vw, 50px) 0 clamp(40px, 6vw, 70px);
        background: #fff;
    }

    /* ── Accordion item borders ── */
    .faq-accordion .accordion-item {
        border: none;
        border-bottom: 1px solid #d8dde6;
        border-radius: 0 !important;
        background: transparent;
    }

    .faq-accordion .accordion-item:first-of-type {
        border-top: 1px solid #d8dde6;
    }

    /* ── Accordion button ── */
    .faq-accordion .accordion-button {
        background: transparent !important;
        color: #1a2e55 !important;
        font-size: clamp(14px, 1.8vw, 18px);
        font-weight: 700;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        padding: clamp(12px, 1.8vw, 18px) 0;
        box-shadow: none !important;
        display: flex;
        align-items: flex-start;
        /* icon aligns to first line of text */
        gap: 12px;
        /* Remove Bootstrap's default right-side arrow */
    }

    /* Remove Bootstrap's default chevron */
    .faq-accordion .accordion-button::after {
        display: none !important;
    }

    /* ── Plus/Minus icon box – sits on the LEFT, vertically centred on first line ── */
    .faq-icon {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 22px;
        height: 22px;
        min-width: 22px;
        /* prevent shrink on long question text */
        border: 1.5px solid #1a2e55;
        border-radius: 3px;
        color: #1a2e55;
        font-size: 1rem;
        line-height: 1;
        margin-top: 1px;
        /* optical alignment with first text line */
        transition: background 0.2s, color 0.2s;
        /* The icon child is swapped via CSS content below */
    }

    /* ── CSS-driven icon swap – no JS required ── */

    /* Collapsed state → show + */
    .faq-accordion .accordion-button.collapsed .faq-icon .bi::before {
        content: "\F4FE";
        /* bi-plus */
    }

    /* Expanded state → show − */
    .faq-accordion .accordion-button:not(.collapsed) .faq-icon .bi::before {
        content: "\F2EA";
        /* bi-dash */
    }

    /* Fill the box when expanded */
    .faq-accordion .accordion-button:not(.collapsed) .faq-icon {
        background: #1a2e55;
        color: #fff;
    }

    /* ── Accordion body ── */
    .faq-accordion .accordion-body {
        padding: 4px 0 clamp(16px, 2.2vw, 22px) clamp(24px, 3.4vw, 34px);
        /* indent to align with question text */
        font-size: clamp(14px, 1.6vw, 16px);
        line-height: 1.75;
        color: #444;
    }
</style>

<!-- ── Hero Banner ── -->
<section class="faq-hero">
    <div class="container">
        <h1>Frequently ask questions</h1>
    </div>
</section>

<!-- ── FAQ Accordion ── -->
<section class="faq-section">
    <div class="container" style="max-width: 860px;">
        <div class="accordion faq-accordion" id="faqAccordion">

            <!-- Q1 – open by default -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading1">
                    <button class="accordion-button"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse1"
                        aria-expanded="true"
                        aria-controls="faqCollapse1">
                        <span class="faq-icon"><i class="bi"></i></span>
                        CAN I USE MY OWN NUMBER?
                    </button>
                </h2>
                <div id="faqCollapse1"
                    class="accordion-collapse collapse show"
                    aria-labelledby="faqHeading1"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, you can use your company’s Landline number, Ring Central number or any VoIP hosted number with 360 SMS App for Sending / Receiving text messages.
                    </div>
                </div>
            </div>

            <!-- Q2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading2">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse2"
                        aria-expanded="false"
                        aria-controls="faqCollapse2">
                        <span class="faq-icon"><i class="bi"></i></span>
                        DO YOU SUPPORT AUTOMATION I.E. PROCESS BUILDERS?
                    </button>
                </h2>
                <div id="faqCollapse2"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading2"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes with 360 SMS App automations can be easily created within few minutes and support Process Builders, Workflows or even calling our methods in Global Apex class. <a href="#">Click Here</a> for the guide to create one yourself today!
                    </div>
                </div>
            </div>

            <!-- Q3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading3">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse3"
                        aria-expanded="false"
                        aria-controls="faqCollapse3">
                        <span class="faq-icon"><i class="bi"></i></span>
                        CAN I BUILD REPORTS?
                    </button>
                </h2>
                <div id="faqCollapse3"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading3"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        All the text messages are stored in the ‘SMS History’ custom object provided by the app. SMS History can be linked to any of your Standard/ Custom objects and just by utilizing this architecture, you can build any reports to meet your specific business use case.
                    </div>
                </div>
            </div>

            <!-- Q4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading4">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse4"
                        aria-expanded="false"
                        aria-controls="faqCollapse4">
                        <span class="faq-icon"><i class="bi"></i></span>
                        HOW DO YOU PROVIDE OPT-OUT FOR MESSAGES?
                    </button>
                </h2>
                <div id="faqCollapse4"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading4"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Any incoming message that you receive with a ‘STOP’ keyword will mark the Lead/Contact (Salesforce record) field ‘SMS Optout’ as true. You can also define Opt-out Keywords of your own in the General Settings of the App and use them as per your business use case.
                    </div>
                </div>
            </div>

            <!-- Q5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading5">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse5"
                        aria-expanded="false"
                        aria-controls="faqCollapse5">
                        <span class="faq-icon"><i class="bi"></i></span>
                        IF THE APPLICATION INVOLVES CREDIT CARDS PROCESSING, ARE YOU PCI-DSS CERTIFIED?
                    </button>
                </h2>
                <div id="faqCollapse5"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading5"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>“PCI-DSS certified</p>
                        <p>Payment Card Industry – Data Security Standard</p>
                        <p>The Payment Card Industry Data Security Standards (PCI DSS) is a proprietary information security standard designed to ensure that companies processing, storing or transmitting payment card information maintain a secure environment.</p>
                        <p>A third-party PCI Qualified Security Assessor (QSA) assesses company systems and processes on an annual basis and issues an Attestation of Compliance (AOC). “</p>
                    </div>
                </div>
            </div>

            <!-- Q6 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading6">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse6"
                        aria-expanded="false"
                        aria-controls="faqCollapse6">
                        <span class="faq-icon"><i class="bi"></i></span>
                        WHICH OTHER IT OPERATIONAL, SECURITY, PRIVACY RELATED STANDARDS, CERTIFICATIONS AND/OR REGULATIONS YOU DO COMPLY WITH? PROVIDE REPORT. (PRIVACY SHIELD, PCI, ISO27001, ETC)*
                    </button>
                </h2>
                <div id="faqCollapse6"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading6"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>“Our Security Strategy is based on the ISO 27001:2013 Information Security Framework/ Stndard</p>
                        <p><strong>Security Programs cover:</strong></p>
                        <p>Data Security<br>
                        Product Security<br>
                        Cloud &amp; Network Infrastructure Security<br>
                        Security Compliance<br>
                        Third Party Data Security<br>
                        Vulnerability Management<br>
                        Vulnerability Monitoring<br>
                        Incident Response”</p>
                    </div>
                </div>
            </div>

            <!-- Q7 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading7">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse7"
                        aria-expanded="false"
                        aria-controls="faqCollapse7">
                        <span class="faq-icon"><i class="bi"></i></span>
                        HAS THE APPLICATION BEEN DEVELOPED IN COMPLIANCE WITH A SECURITY METHODOLOGY (SUCH AS OWASP)?
                    </button>
                </h2>
                <div id="faqCollapse7"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading7"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>“OWASP</p>
                        <p>Our application strongly stands by OWASP (Open Web Application Security Project) and has successfully been through the AppExchange Security Review. Along with that, we ensure conducting a review once a year to make sure every features and functionality is ensure data security.”</p>
                    </div>
                </div>
            </div>

            <!-- Q8 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading8">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse8"
                        aria-expanded="false"
                        aria-controls="faqCollapse8">
                        <span class="faq-icon"><i class="bi"></i></span>
                        DO YOU PERFORM SECURITY TESTING (INCLUDING STATIC AND DYNAMIC CODE ANALYSIS, PRE-DEPLOYMENT PENETRATION TESTING, PERIODIC PENETRATION TESTING)? IF SO, WHAT TOOLING DO YOU USE, AND WHAT IS YOUR PROCESS FOR REMEDIATING VULNERABILITIES?
                    </button>
                </h2>
                <div id="faqCollapse8"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading8"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>“We conduct the reviews and penetration testing in-house at least once a year.</p>
                        <p>We use Penetrating Testing as the primary security assessment type. We conduct third-party penetration tests periodically. Our expert IT perform the testing in iterations and list down the detected vulnerability and resolve it until the product is free from any risk. “</p>
                    </div>
                </div>
            </div>

            <!-- Q9 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading9">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse9"
                        aria-expanded="false"
                        aria-controls="faqCollapse9">
                        <span class="faq-icon"><i class="bi"></i></span>
                        WHAT CRYPTOGRAPHIC MEASURES ARE USED TO ENCRYPT DATA AT REST?
                    </button>
                </h2>
                <div id="faqCollapse9"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading9"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        HTTPS, TLS 2.0 Key
                    </div>
                </div>
            </div>

            <!-- Q10 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading10">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse10"
                        aria-expanded="false"
                        aria-controls="faqCollapse10">
                        <span class="faq-icon"><i class="bi"></i></span>
                        WHAT CRYPTOGRAPHIC MEASURES ARE USED TO ENCRYPT DATA IN TRANSITT?
                    </button>
                </h2>
                <div id="faqCollapse10"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading10"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        HTTPS, TLS 2.0 Key
                    </div>
                </div>
            </div>

            <!-- Q11 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading11">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse11"
                        aria-expanded="false"
                        aria-controls="faqCollapse11">
                        <span class="faq-icon"><i class="bi"></i></span>
                        INCOMING AND OUTGOING DATA BETWEEN YOUR SALESFORCE INSTANCE AND THE CARRIER/ THIRD PARTY NETWORK SERVICE PROVIDER
                    </button>
                </h2>
                <div id="faqCollapse11"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading11"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        TLS 2.0 Key
                    </div>
                </div>
            </div>

            <!-- Q12 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading12">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse12"
                        aria-expanded="false"
                        aria-controls="faqCollapse12">
                        <span class="faq-icon"><i class="bi"></i></span>
                        DO YOU EMPLOY SECURITY MEASURES FOR SOCKET AND NETWORK SECURITY?
                    </button>
                </h2>
                <div id="faqCollapse12"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading12"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        SSL Certificates are running on all sockets
                    </div>
                </div>
            </div>

            <!-- Q13 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading13">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse13"
                        aria-expanded="false"
                        aria-controls="faqCollapse13">
                        <span class="faq-icon"><i class="bi"></i></span>
                        WHERE IS YOUR CUSTOMERS DATA LOCATED (AT REST)?
                    </button>
                </h2>
                <div id="faqCollapse13"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading13"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        We don’t store any customer data in any data centers. 360 SMS app is a 100% native Salesforce texting application, which means that 100% of the data is stored exclusively in Salesforce and it doesn’t store any customer information on any physical server/ data centre of its own. Information travels from customer to respective SMS API provider and at no point is stored within the app. The app uses encrypted API’s to send/receive the text messages thus ensuring data encryption and privacy.
                    </div>
                </div>
            </div>

            <!-- Q14 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading14">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse14"
                        aria-expanded="false"
                        aria-controls="faqCollapse14">
                        <span class="faq-icon"><i class="bi"></i></span>
                        HOW MUCH OF YOUR CODEBASE IS COVERED BY AUTOMATED TESTING?
                    </button>
                </h2>
                <div id="faqCollapse14"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading14"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Covering 60-80% of all code
                    </div>
                </div>
            </div>

            <!-- Q15 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading15">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse15"
                        aria-expanded="false"
                        aria-controls="faqCollapse15">
                        <span class="faq-icon"><i class="bi"></i></span>
                        MONITORING SECURITY OPERATIONAL CENTER
                    </button>
                </h2>
                <div id="faqCollapse15"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading15"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        All operations are SOC-2 Compliant
                    </div>
                </div>
            </div>

            <!-- Q16 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading16">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse16"
                        aria-expanded="false"
                        aria-controls="faqCollapse16">
                        <span class="faq-icon"><i class="bi"></i></span>
                        DOES 360 SMS AND ITS MESSAGIN COMPLY WITH THE STANDARD CONTRACTUAL CLAUSES MANDATED IN THE SHREMS II JUDGEMENT BY THE EUROPEAN COURT OF JUSTICE?
                    </button>
                </h2>
                <div id="faqCollapse16"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading16"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>“Compliant with Shrems II judgement by ECJ (European Court of Justice) from 2020 since security was deemed <span class="TextRun BCX0" lang="EN-US" xml:lang="EN-US" data-contrast="none"><span class="NormalTextRun BCX0">inadequate</span></span>.</p>
                        <p>Our DPA (Data Protection Agreement) follows Controller-Processor SCCs (Standard Contractual Clauses) with Salesforce as our Sub Processor for Cloud Services “</p>
                    </div>
                </div>
            </div>

            <!-- Q17 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading17">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse17"
                        aria-expanded="false"
                        aria-controls="faqCollapse17">
                        <span class="faq-icon"><i class="bi"></i></span>
                        I CHANGED THE "SMS APP OWNER" IN THE APP SETTINGS TO AN AUTOMATION ACCOUNT, BUT I AM STILL SEEING THE PREVIOUS USER IN THE LOGIN HISTORY. I AM WONDERING HOW TO CHANGE THE USER THAT IS TRIGGERING THIS IN THE SALESFORCE INTEGRATION”?
                    </button>
                </h2>
                <div id="faqCollapse17"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading17"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>Kindly raise a ticket with our support team by sending them an email<a href="mailto:support@360degreeapps.zohodesk.com"> @ support@360degreeapps.zohodesk.com</a> and also loop in your dedicated Account Manager in the email.<br>
                        He/She will have it expedited for you. Also, kindly grant them the Login Access to your Salesforce instance so that they can look into the Automation.Our support team and your AM will get on a call with you to have a better understanding and help you with it</p>
                    </div>
                </div>
            </div>

            <!-- Q18 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading18">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse18"
                        aria-expanded="false"
                        aria-controls="faqCollapse18">
                        <span class="faq-icon"><i class="bi"></i></span>
                        CAN THE 360 SMS APP SEND PDFS FROM SALESFORCE TO ACCOUNTS?
                    </button>
                </h2>
                <div id="faqCollapse18"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading18"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes, you can send PDF and JPEG files through SMS using our solution. You can simply upload either to Salesforce and snd URLs to them in a text message.
                    </div>
                </div>
            </div>

            <!-- Q19 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading19">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse19"
                        aria-expanded="false"
                        aria-controls="faqCollapse19">
                        <span class="faq-icon"><i class="bi"></i></span>
                        IS IT POSSIBLE FOR A USER TO HAVE AN OUT-OF-OFFICE RESPONSE ON THEIR TEXTS SO THAT CUSTOMERS ARE NOT WAITING FOR A RESPONSE?
                    </button>
                </h2>
                <div id="faqCollapse19"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading19"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        If there is a field on Salesforce that answers if the user is out-of-office, then we can create a Process builder that can trigger an automated out-of-office message.
                    </div>
                </div>
            </div>

            <!-- Q20 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="faqHeading20">
                    <button class="accordion-button collapsed"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#faqCollapse20"
                        aria-expanded="false"
                        aria-controls="faqCollapse20">
                        <span class="faq-icon"><i class="bi"></i></span>
                        CAN YOU IMPORT RECORDS FROM ANOTHER SMS PROVIDER TO KEEP CONVERSATION HISTORY IN SALESFORCE?
                    </button>
                </h2>
                <div id="faqCollapse20"
                    class="accordion-collapse collapse"
                    aria-labelledby="faqHeading20"
                    data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Sure, we will help you with the data migration from your previous SMS Application
                    </div>
                </div>
            </div>

        </div><!-- /.accordion -->
    </div><!-- /.container -->
</section>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php get_footer('sms'); ?>