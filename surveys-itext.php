<?php
/*
Template Name:surveys-itext
*/
get_header('sms');
?>
    <style>
         body {
                background-color: #fff;
            }
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
            color: rgba(255, 255, 255, 0.15);
            line-height: 1;
        }

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
            color: #fff;
            font-size: 1.5rem;
        }

        .feature-icon {
            background-color: #0057b8;
            color: #fff;
        }

        .feature-card p {
            margin: 0;
            font-size: 1.5rem;
            color: #555;
            line-height: 1.6;
        }
        @media screen and (max-width:768px){
            .hero-section h1{
                font-size: 2rem;
            }
        }
    </style>
 <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <h1>SURVEYS (ITEXT)</h1>
        </div>
    </section>
<section style="background-color:#fff;">
    <!-- Content Section -->
    <div class="container py-4">

        <!-- Quote -->
        <div class="quote-section">
            <p>The Americans are the leaders of SMS, sending approximately 830 billion SMS messages per year.....</p>
            <span class="quote-mark">&rdquo;</span>
        </div>

        <!-- Description -->
        <div class="description-section">
            <p>
                iText allows you to have keyword-triggered automated conversations with the customers. It's a list of predefined questions and answers, triggered by inbound keywords. It can be used to take feedback, send automated responses or any other customer-related queries.
            </p>
            <h5>Why iText is important?</h5>
            <p>
                iText or Intelligent-texting is important because it allows you to provide a spontaneous reply to your customers if their response contains the desired keyword. It saves your time and money in a smarter manner. Moreover, you do not need a full-time resource responding to the answers by your respective target audience. iText is enough for the same.
            </p>
        </div>

        <!-- Help Section -->
        <section class="help-section mt-5">
            <h2>How 360 SMS App Can <span>Help You With iText?</span></h2>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-bar-chart"></i>
                        </div>
                        <p>It can be used well to gather information from the respective target audience for a specific topic.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-bar-chart"></i>
                        </div>
                        <p>It can be used good enough to carry out automation processes at a faster rate.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-bar-chart"></i>
                        </div>
                        <p>People do not have to wait to get instant responses.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-bar-chart"></i>
                        </div>
                        <p>It reduces your stress to hire a dedicated resource to answer people's queries all day long.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-bar-chart"></i>
                        </div>
                        <p>It can be categorized as per the respective departments of your organization.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-bar-chart"></i>
                        </div>
                        <p>You can even control the admin rights on each survey you create as an administrator.</p>
                    </div>
                </div>
            </div>
        </section>

    </div>
</section>
<?php
get_footer('sms');
?>