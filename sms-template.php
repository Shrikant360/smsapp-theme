<?php
/*
Template Name:sms-templates
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
            <h1>SMS TEMPLATES</h1>
        </div>
    </section>

    <section style="background-color:#fff;">
        <!-- Content Section -->
        <div class="container py-4">

            <!-- Quote -->
            <div class="quote-section">
                <p>Mobile phone coupons have 10 times the redemption rate of their paper counterparts.......</p>
                <span class="quote-mark">&rdquo;</span>
            </div>

            <!-- Description -->
            <div class="description-section">
                <p>
                    You don't need to type the same message over and over again, you can create a template or the most common messages. Organize these templates through Folders.
                </p>
                <h5>WHY ARE SMS TEMPLATES IMPORTANT?</h5>
                <p>
                    SMS Templates are important because they save us a lot of time and help us complete the tasks in an easier and much efficient manner. They can be easily maintained by a person, irrespective of his/her technical knowledge. They are easy to make and even easier to use. These can be made simply with the help of a few clicks.
                </p>
            </div>

            <!-- Help Section -->
            <section class="help-section mt-5">
                <h2>HOW USING SMS TEMPLATES WITH <span>360 SMS APP CAN HELP YOU?</span></h2>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-check-lg"></i>
                            </div>
                            <p>You can easily save your most frequently used messages as templates.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-check-lg"></i>
                            </div>
                            <p>It would save you much time, as mentioned earlier too.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-check-lg"></i>
                            </div>
                            <p>You can categorize the templates based on their respective department (i.e. Sales, Marketing, etc.).</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-check-lg"></i>
                            </div>
                            <p>You can also control the admin rights of each SMS template.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-check-lg"></i>
                            </div>
                            <p>You can even hide any specific template if you wish to do so.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="bi bi-check-lg"></i>
                            </div>
                            <p>You can make its status as 'Active' or 'Inactive' as per your requirements.</p>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </section>
<?php
get_footer('sms');
?>