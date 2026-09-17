<?php
/*
Template Name:verify-the-phone-vtp
*/
get_header('sms'); 
?>
    <style>
        body {
            background-color: #fff;
        }

        /* ── Hero ── */
        .hero-section {
            background: url("https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/05/SMS-Blog-Banner-BG.webp");
            padding: 60px 20px;
            text-align: center;
        }
        .hero-section h1 {
            color: #000;
            font-size: 4rem;
            font-weight: 700;
        }

        /* ── Quote ── */
        .quote-section {
            background: linear-gradient(135deg, #1a3a5c, #2a5a8a);
            padding: 30px 40px;
            position: relative;
            margin: 40px 0;
            border-radius: 4px;
        }
        .quote-section p {
            color: #fff;
            font-size: 2rem;
        }
        .quote-section .quote-mark {
            position: absolute;
            bottom: 10px;
            right: 30px;
            font-size: 5rem;
            color: rgba(255,255,255,0.15);
            line-height: 1;
        }

        /* ── Description ── */
        .description-section p {
            color: #000;
            line-height: 1.8;
            font-size: 1.5rem;
        }
        .description-section h5 {
            font-weight: 700;
            margin-top: 25px;
            margin-bottom: 10px;
        }

        /* ── Section headings ── */
        .section-heading {
            font-weight: 700;
            font-size: 2rem;
            color: #0057b8;
            text-transform: uppercase;
            margin: 40px 0 15px;
        }

        /* ── Help grid ── */
        .help-section h2 {
            font-weight: 700;
            text-align: center;
            margin-bottom: 40px;
            font-size: 2rem;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .help-section h2 span {
            color: #0057b8;
        }
        .feature-card {
            display: flex;
            align-items: flex-start;
            gap: 15px;
            padding: 20px 15px;
            margin-bottom: 20px;
        }
        .feature-icon {
            flex-shrink: 0;
            width: 45px;
            height: 45px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #0057b8;
            color: #fff;
            font-size: 1.5rem;
        }
        .feature-card p {
            margin: 0;
            font-size: 1.5rem;
            color: #555;
            line-height: 1.6;
        }

        /* ── NEW: Intro banner box ── */
        .intro-banner {
            background: linear-gradient(135deg, #1a3a5c, #2a5a8a);
            border-radius: 6px;
            padding: 28px 36px;
            margin-bottom: 35px;
        }
        .intro-banner h2 {
            color: #fff;
            font-size: 2rem;
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 15px;
        }
        .intro-banner .btn-speak {
            background-color: #00bfff;
            color: #fff;
            border: none;
            padding: 10px 24px;
            font-size: 1.3rem;
            font-weight: 600;
            border-radius: 4px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            cursor: pointer;
            display: inline-block;
            text-decoration: none;
        }

        /* ── NEW: Body paragraphs ── */
        .body-text {
            font-size: 1.5rem;
            color: #333;
            line-height: 1.8;
            margin-bottom: 18px;
        }

        /* ── NEW: Blue section headings ── */
        .blue-heading {
            color: #0057b8;
            font-size: 1.8rem;
            font-weight: 700;
            text-transform: uppercase;
            margin: 35px 0 15px;
        }

        /* ── NEW: For Example label ── */
        .for-example {
            font-size: 1.5rem;
            font-weight: 700;
            color: #000;
            margin: 20px 0 10px;
        }

        /* ── NEW: Status box (Not Verified / Valid) ── */
        .status-box {
            border: 1px solid #ddd;
            border-radius: 6px;
            padding: 18px 24px;
            margin: 18px 0;
            background: #fafafa;
        }
        .status-box .status-label {
            font-size: 1.2rem;
            color: #888;
            margin-bottom: 8px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .status-not-verified {
            color: #e67e22;
            font-size: 1.5rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .status-valid {
            color: #27ae60;
            font-size: 1.5rem;
            font-weight: 600;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        /* ── NEW: Step instruction text ── */
        .step-text {
            font-size: 1.4rem;
            color: #333;
            line-height: 1.8;
            margin: 12px 0;
        }
        .step-text strong {
            color: #000;
        }

        /* ── NEW: Numbered reason cards ── */
        .reason-card {
            display: flex;
            align-items: flex-start;
            gap: 18px;
            margin-bottom: 28px;
        }
        .reason-number {
            flex-shrink: 0;
            width: 42px;
            height: 42px;
            border-radius: 6px;
            background-color: #0057b8;
            color: #fff;
            font-size: 1.4rem;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .reason-content h6 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #000;
            margin: 0 0 6px;
        }
        .reason-content p {
            font-size: 1.4rem;
            color: #555;
            line-height: 1.7;
            margin: 0;
        }

        /* ── NEW: Results section ── */
        .results-section {
            margin: 30px 0;
        }
        .results-section p {
            font-size: 1.5rem;
            color: #333;
            line-height: 1.8;
            margin-bottom: 12px;
        }
        .results-section .highlight-green {
            color: #27ae60;
            font-weight: 700;
        }
        .results-section .highlight-blue {
            color: #0057b8;
            font-weight: 700;
        }

        /* ── NEW: Wrapping up section ── */
        .wrapping-up {
            margin: 30px 0 10px;
        }
        .wrapping-up p {
            font-size: 1.5rem;
            color: #333;
            line-height: 1.8;
        }

        @media screen and (max-width:768px){
            .hero-section h1 { font-size: 2rem; }
            .blue-heading { font-size: 1.5rem; }
            .intro-banner h2 { font-size: 1.5rem; }
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>LET'S CLEAN ALL THE INVALID NUMBERS STORED IN YOUR DATABASE</h1>
        </div>
    </section>

    <section style="background-color:#fff;">
        <div class="container py-4">

            <!-- Intro Banner Box -->
            <div class="intro-banner">
                <h2>NUMBERS STORED IN YOUR DATABASE</h2>
                <a href="#" class="btn-speak">SPEAK TO TEXTING EXPERT</a>
            </div>

            <!-- Intro Body Paragraphs -->
            <p class="body-text">Keep your data clean right from the moment you collect it.</p>
            <p class="body-text">Contact numbers of prospects and customers are crucial data that you and your teams usually require to carry out various business operations. But you can't make the best out of the collected phone numbers until they are not correct and valid.</p>
            <p class="body-text">Say you made hefty investments to run an effective SMS campaign with a view of maximizing returns but didn't get the desired result or returns expected. In all likelihood, the reason could be low SMS deliverability and inaccurate phone numbers.</p>
            <p class="body-text">Often, messages do not get delivered when you send texts to devices that are not capable of receiving SMS, like landline phones. Sending bulk SMS without identifying the phone number type adversely affects the SMS delivery rate. Because there may be chances that you're trying to send SMS to landline numbers, and messages do not get delivered.</p>
            <p class="body-text">Being familiar with the importance of data hygiene to increase conversions, we help our customers to make the most of their investment in business operations that require phone numbers. We allow our customers to keep their data clean and accurate with real-time verification right at the collection source using Verify the Phone (VTP).</p>

            <!-- Section: What Even Is VTP -->
            <h2 class="blue-heading">WHAT EVEN IS 'VERIFY THE PHONE' (VTP)?</h2>
            <p class="body-text">As the name indicates, Verify the Phone (VTP) is an add-on by 360 SMS that allows you and your teams to verify every phone number in your Salesforce records. More importantly, you can check the type of a phone number if it is a mobile number, landline number, or VoIP number. The best part is VTP works for Classic and Lightning both versions, and you can use it to verify individual or bulk phone numbers for all countries without exception.</p>

            <!-- Section: How Industries Are Using VTP -->
            <h2 class="blue-heading">HOW INDUSTRIES ARE USING VERIFY THE PHONE (VTP)</h2>
            <p class="body-text">It is a Do-It-Yourself (DIY) process that you can perform with just a few clicks.</p>
            <p class="body-text">Assuming the VTP app is installed on your Salesforce CRM, you can verify phone numbers from any Salesforce record page.</p>

            <p class="for-example">FOR EXAMPLE:</p>
            <p class="body-text">When the phone number is not verified, the phone status will appear as Not Verified Yet (as shown below), and the Phone type will be blank.</p>

            <!-- Status: Not Verified Yet -->
            <div class="status-box">
                <div class="status-label">Phone Status</div>
                <div class="status-not-verified">
                    <i class="bi bi-question-circle-fill"></i> Not Verified Yet
                </div>
            </div>

            <p class="step-text">• So to verify a number, click on the <strong>Contact</strong> tab and select the record for which you want to verify the number.</p>
            <p class="step-text">• Click on the <strong>dropdown icon</strong> on the top-right corner (as shown below) for more options and click <strong>Verify the Number</strong>.</p>
            <p class="body-text">Once the number is verified, the phone status will change to <strong>Valid</strong> (as shown below), and you can also check the updated phone number <strong>Type</strong>.</p>

            <!-- Status: Valid -->
            <div class="status-box">
                <div class="status-label">Phone Status</div>
                <div class="status-valid">
                    <i class="bi bi-check-circle-fill"></i> Valid
                </div>
            </div>

            <!-- Section: Why Should You Use VTP -->
            <h2 class="blue-heading">WHY SHOULD YOU USE VERIFY THE PHONE (VTP)</h2>

            <div class="reason-card">
                <div class="reason-number">#1</div>
                <div class="reason-content">
                    <h6>Say 'No' to Guesswork while Targeting Customers</h6>
                    <p>VTP lets you know the type of phone number you're targeting to reach a customer. Consequently, you can segment lots of mobile, landline, home, and VoIP numbers and target audiences using the most suited channels, i.e., SMS or call. More importantly, you and your team won't waste effort due to the non-existence of phone numbers that aren't pre-validated.</p>
                </div>
            </div>

            <div class="reason-card">
                <div class="reason-number">#2</div>
                <div class="reason-content">
                    <h6>Get every SMS delivered reliably</h6>
                    <p>Using VTP, you can easily single out inactive or invalid contacts, and you can create a list of valid mobile numbers before sending out texts or running SMS campaigns. This way, you can have a better text delivery rate and anticipate returns more accurately.</p>
                </div>
            </div>

            <div class="reason-card">
                <div class="reason-number">#3</div>
                <div class="reason-content">
                    <h6>Maintain clean, healthy, and ready-to-use data round the clock</h6>
                    <p>VTP helps maintain clean and accurate phone numbers on records that are worth your time. So, teams can spend time chasing real revenue opportunities and drive more conversions. Real-time data verification lets you and your teams be on their toes always to initiate as SMS campaigns and perform other text operations using accurate data.</p>
                </div>
            </div>

            <!-- Section: Some Interesting Results -->
            <h2 class="blue-heading">SOME INTERESTING RESULTS</h2>
            <div class="results-section">
                <p>Based on the interviews of clients that use the VTP app, here are some surprising results they witnessed:</p>
                <p>Overall marketing returns increase by <span class="highlight-green">30% because of better outreach using the right channel.</span></p>
                <p>Response rate improves by <span class="highlight-green">50%</span> for our clients. Now, they can target valid phone numbers.</p>
                <p>SMS campaign returns increase by <span class="highlight-blue">40% because of high text deliverability.</span></p>
                <p>So, verifying the phone numbers should be one of the first things on your list before carrying out any operation to pursue real opportunities.</p>
            </div>

            <!-- Section: Wrapping Up -->
            <h2 class="blue-heading">WRAPPING UP</h2>
            <div class="wrapping-up">
                <p>Using VTP to verify the phone numbers is a super easy DIY process that doesn't need technical knowledge or expert assistance. You and your teams can use it on the fly and stay on top of data quality.</p>
            </div>

        </div>
    </section>

<?php
get_footer('sms');
?>