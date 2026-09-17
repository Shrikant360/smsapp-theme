<?php
/*
Template Name:soc2-type2-report
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

        /* ── NEW: Body paragraphs ── */
        .body-text {
            font-size: 1.5rem;
            color: #333;
            line-height: 1.8;
            margin-bottom: 16px;
        }

        /* ── NEW: Opening quote line ── */
        .opening-quote {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 14px;
            line-height: 1.8;
        }
        .opening-quote strong {
            color: #0057b8;
            font-weight: 700;
        }

        /* ── NEW: Article section headings ── */
        .article-heading {
            font-size: 2rem;
            font-weight: 700;
            color: #000;
            margin: 35px 0 15px;
        }

        /* ── NEW: Type list (Type I / Type II) ── */
        .type-list {
            list-style: none;
            padding: 0;
            margin: 10px 0 20px;
        }
        .type-list li {
            font-size: 1.5rem;
            color: #333;
            line-height: 1.8;
            padding: 4px 0;
        }
        .type-list li strong {
            color: #000;
            font-weight: 700;
        }

        /* ── NEW: Two-column section with image ── */
        .two-col-section {
            display: flex;
            align-items: center;
            gap: 30px;
            margin: 35px 0;
        }
        .two-col-section .text-col {
            flex: 1;
        }
        .two-col-section .image-col {
            flex-shrink: 0;
            width: 180px;
            text-align: center;
        }
        .shield-icon-box {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            background: linear-gradient(135deg, #1a3a5c, #2a5a8a);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            margin: 0 auto;
        }
        .shield-icon-box i {
            font-size: 5rem;
            color: #fff;
        }
        .shield-icon-box .check-badge {
            position: absolute;
            top: 8px;
            right: 8px;
            width: 32px;
            height: 32px;
            background: #00bfff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 1rem;
        }

        /* ── NEW: Bullet list with dots ── */
        .dot-list {
            list-style: none;
            padding: 0;
            margin: 12px 0 20px;
        }
        .dot-list li {
            font-size: 1.5rem;
            color: #333;
            line-height: 1.8;
            padding: 5px 0;
            display: flex;
            align-items: flex-start;
            gap: 10px;
        }
        .dot-list li::before {
            content: "•";
            color: #0057b8;
            font-size: 1.8rem;
            line-height: 1.4;
            flex-shrink: 0;
        }
        .dot-list li a,
        .dot-list li span.link-text {
            color: #0057b8;
            font-weight: 600;
            text-decoration: none;
        }
        .dot-list li .dash-text {
            color: #333;
            font-weight: 400;
        }

        /* ── NEW: Dark quote banner ── */
        .dark-quote-banner {
            background: linear-gradient(135deg, #1a3a5c, #2a5a8a);
            border-radius: 6px;
            padding: 40px 36px;
            margin: 40px 0;
            text-align: center;
        }
        .dark-quote-banner p {
            color: #fff;
            font-size: 2rem;
            font-weight: 600;
            font-style: italic;
            line-height: 1.6;
            margin: 0;
        }

        /* ── NEW: Architecture section ── */
        .arch-section {
            margin: 10px 0 30px;
        }
        .arch-section p {
            font-size: 1.5rem;
            color: #333;
            line-height: 1.8;
            margin-bottom: 14px;
        }

        @media screen and (max-width: 768px) {
            .hero-section h1 { font-size: 2rem; }
            .article-heading { font-size: 1.6rem; }
            .two-col-section { flex-direction: column; }
            .two-col-section .image-col { width: 100%; }
            .dark-quote-banner p { font-size: 1.5rem; }
        }
    </style>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>360 DEGREE CLOUD - SOC 2 TYPE 2 REPORT BY AICPA</h1>
        </div>
    </section>

    <section style="background-color:#fff;">
        <div class="container py-4">

            <!-- Opening Quote Line -->
            <p class="opening-quote">
                <strong>"Your trust precedes EVERYTHING."</strong> Those are words we live by here at 360 SMS.
            </p>

            <p class="body-text">We are thrilled to announce that our parent company, 360 Degree Cloud has successfully achieved a SOC 2 Type 2 report. This report is a testament to our unwavering commitment to the highest information security and privacy standards.</p>

            <!-- What is SOC 2 Type 2 -->
            <h2 class="article-heading">What is SOC 2 Type 2 certification?</h2>
            <p class="body-text">The American Institute of Certified Public Accountants (AICPA) developed a voluntary compliance standard for service organizations to specify how to manage customer data.</p>
            <p class="body-text">This standard is guided by 5 principles of 'Trust' services: Security, Availability, Confidentiality, Processing Integrity, and Privacy.</p>
            <p class="body-text">The certification process involves thoroughly evaluating our information security policies, procedures, and practices and a third-party auditor's independent audit of our systems and processes.</p>
            <p class="body-text">Our SOC 2 Type 2 certification is a testament to our ongoing efforts to enhance our security posture and ensure your data's confidentiality, integrity, and availability.</p>

            <!-- Type 1 and Type 2 Reports -->
            <h2 class="article-heading">Type 1 and Type 2 Reports</h2>
            <p class="body-text">SOC 2 reports are of two types:</p>
            <ul class="type-list">
                <li><strong>Type I</strong> &nbsp; This report states whether the system and its design comply with the trust principles.</li>
                <li><strong>Type II</strong> &nbsp; This report states the operational efficiency of these systems in detail.</li>
            </ul>

            <!-- Importance of SOC 2 with shield image -->
            <div class="two-col-section">
                <div class="text-col">
                    <h2 class="article-heading" style="margin-top:0;">Importance of SOC 2 compliance</h2>
                    <p class="body-text" style="margin-bottom:0;">Our SOC 2 certification indicates that every information you share with us is highly secured. Strict compliance requirements are designed so that every piece of information is handled and processed responsibly.</p>
                </div>
                <div class="image-col">
                    <div class="shield-icon-box">
                        <i class="bi bi-shield-lock-fill"></i>
                        <div class="check-badge"><i class="bi bi-check-lg"></i></div>
                    </div>
                </div>
            </div>

            <!-- Why SOC 2 Should Matter to You -->
            <h2 class="article-heading">Why SOC 2 Should Matter to You</h2>
            <ul class="dot-list">
                <li>
                    <span>
                        <span class="link-text">Enhanced safeguards for data security</span>
                        <span class="dash-text"> – Our organization is equipped to prevent breaches and defend itself against cyber attacks better.</span>
                    </span>
                </li>
                <li>
                    <span>
                        <span class="link-text">Credibility</span>
                        <span class="dash-text"> – Information security can never be a concern for you. You can work with us without any threat to your information, as the best information security standards are in practice.</span>
                    </span>
                </li>
            </ul>

            <!-- Dark Quote Banner -->
            <div class="dark-quote-banner">
                <p>Your Data Security was a concern from the outset, and it reflects in our architecture</p>
            </div>

            <!-- 360 SMS Architecture -->
            <h2 class="article-heading">360 SMS Architecture</h2>
            <div class="arch-section">
                <p>We demonstrate a commitment to accountability, integrity, and 360 SMS's Building Blocks of Reliability responsibility. That's why we designed an app that itself cares about your data security — A SERVERLESS app.</p>
                <ul class="dot-list">
                    <li><span class="link-text">Serverless architecture that doesn't stores data</span></li>
                    <li><span class="link-text">TLS 1.2 authentication to garble the data in case of data theft</span></li>
                </ul>
            </div>

        </div>
    </section>

<?php
get_footer('sms');
?>