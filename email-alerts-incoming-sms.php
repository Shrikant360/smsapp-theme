<?php
/*
Template Name:email-alerts-incoming-sms 
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
            <h1>EMAIL ALERTS ON INCOMING SMS</h1>
        </div>
    </section>

    <section style="background-color:#fff;">
        <!-- Content Section -->
        <div class="container py-4">

            <!-- Quote -->
            <div class="quote-section">
                <p>Over 6 billion text messages are sent in the U.S. each day, with over 80% of American adults texting. Americans exchange twice as many texts as they do phone calls.......</p>
                <span class="quote-mark">&rdquo;</span>
            </div>

            <!-- Description -->
            <div class="description-section">
                <p>
                    This amazing feature provides you with the privilege to receive alerts on your respective email address on every incoming SMS. This way, you would be getting all the alerts on your mobile phone without opening the system every time you get a text.
                </p>
                <h5>WHY ARE EMAIL ALERTS IMPORTANT?</h5>
                <p>
                    Email Alerts are really important because they help you to stay updated regarding all the recent messages that you may have received from the people you were already having a conversation with. Moreover, it would help you plan the things accordingly when you are already aware of the responses from the customers, prospects or even the business partners too.
                </p>
            </div>

            <!-- Help Section -->
            <section class="help-section mt-5">
                <h2>HOW 360 SMS APP CAN HELP YOU WITH <span>EMAIL ALERTS ON INCOMING SMS?</span></h2>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-check-lg"></i>
                            </div>
                            <p>You can check the alerts on-the-go in your phone with your registered email address.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-check-lg"></i>
                            </div>
                            <p>You would not need to get on your system every time to check updates.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-check-lg"></i>
                            </div>
                            <p>You get alert for any new incoming SMS so you become well prepared.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-check-lg"></i>
                            </div>
                            <p>You will not get disturbed each time you get a message, so you can also check them later in your free time.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-check-lg"></i>
                            </div>
                            <p>It can be checked from any of the devices on which you may have signed in from your account.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-check-lg"></i>
                            </div>
                            <p>You can also reply to the customer via the same email, and it would be delivered in SMS format only, without letting them know that you have replied from your email account.</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section>
<?php
get_footer('sms');
?>