<?php
/*
Template Name:General Template
*/
get_header('sms');
?>
<style>
        .banner-section {
                background: url(https://360smsapp.test360degreecloud.in/new-sms/wp-content/uploads/2026/05/SMS-Blog-Banner-BG.webp) no-repeat center center / cover !important;
                text-align: center !important;
                padding: 50px 20px !important;
            }

        .banner-section h1 {
            color: #000;
        }
        body{
            background:#fff;
        }
        div.styled-subtitle p{
            color:#fff;
            font-size:1.8rem !important;
        }
        div.wpb_wrapper p{
            font-size:1.3rem;
        }
        .content-section {
            padding: 20px 0;
            background:#fff;
        }

        .content-section h2,
        .content-section h3 {
            color: #2f3048;
            font-weight: 700;
            margin-bottom: 30px;
        }

        .content-section p {
            color: #5c667a;
            font-size: 1.2rem;
            line-height: 1.8;
            margin-bottom: 50px;
        }

        .download-btn {
            background: #16b8d4;
            color: #fff;
            border: none;
            padding: 15px 60px;
            font-size: 1.1rem;
            font-weight: 700;
            text-transform: uppercase;
            border-radius: 3px;
            text-decoration: none;
            display: inline-block;
            transition: 0.3s;
        }

        .download-btn:hover {
            background: #0ea5c0;
            color: #fff;
        }

        @media (max-width: 768px) {
            .banner-section {
                min-height: 220px;
                padding: 30px 15px;
            }

            .banner-section h1 {
                font-size: 2rem;
            }

            .content-section {
                padding: 50px 0;
            }

            .content-section h2,
            .content-section h3 {
                font-size: 1.5rem;
            }

            .content-section p {
                font-size: 1rem;
            } 

            .download-btn {
                width: 100%;
                max-width: 320px;
            }
        }
    </style>

    <!-- Banner -->
    <section class="banner-section">
        <div class="container">
            <h1><?php the_title();?></h1>
        </div>
    </section>

    <!-- Content -->
    <section class="content-section">
        <div class="container">
            <?php  
                  the_content();
            ?>
        </div>
    </section>
<?php
get_footer('sms'); 
?>