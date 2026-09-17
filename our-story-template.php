<?php

/**
 * Template Name: Our Story Page
 */

get_header('sms');
?>

<!-- Bootstrap 5 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>
    /* ── Hero Banner ── */
    .faq-hero {
        background-color: #1a2e55;
        background: linear-gradient(90deg, #EEF4FF 0%, #F7F7F5 65%) !important;
        background-repeat: no-repeat;
        background-position: right center;
        background-size: auto 100%;
        padding: clamp(40px, 6vw, 100px) 0;
        text-align: center;
    }

    .faq-hero h1 {
        color: #000;
        font-size: clamp(30px, 4.5vw, 45px);
        font-weight: 700;
        margin: 0;
        letter-spacing: 0.01em;
    }

    /* ── Success Stories Section ── */
    .success-section {
        padding: clamp(30px, 4vw, 50px) 0 clamp(40px, 6vw, 70px);
        background: #fff;
    }

    .success-grid {
        display: grid;
        grid-template-columns: repeat(1, 1fr);
        gap: clamp(20px, 3vw, 30px);
        margin-bottom: clamp(30px, 5vw, 50px);
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
    }

    @media (min-width: 576px) {
        .success-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (min-width: 992px) {
        .success-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }

    .video-card {
        background: #ffffff;
        border-radius: 12px;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .video-card:hover .video-wrapper {
        transform: translateY(-4px);
        box-shadow: 0 12px 24px rgba(26, 46, 85, 0.12);
    }

    .video-wrapper {
        position: relative;
        padding-top: 56.25%;
        /* 16:9 aspect ratio */
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        background-color: #000;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .video-wrapper iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    .video-title {
        font-size: clamp(14px, 1.6vw, 15px);
        font-weight: 700;
        color: #1a2e55;
        margin-top: 15px;
        margin-bottom: 0;
        line-height: 1.4;
        font-family: 'Open Sans', sans-serif;
    }

    /* ── Load More Button Style ── */
    .btn-load-more {
        background-color: #0057B8 !important;
        color: #ffffff !important;
        border: none;
        border-radius: 4px;
        padding: clamp(12px, 1.5vw, 14px) clamp(35px, 4vw, 55px);
        font-size: clamp(14px, 1.6vw, 16px);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        transition: transform 0.2s, box-shadow 0.2s;
        cursor: pointer;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
        display: inline-block;
    }

    .btn-load-more:hover {
        background-color: #0057B8 !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }

    .btn-load-more:active {
        transform: translateY(1px);
    }

    /* ── Bottom Get Started CTA Banner ── */
    .cta-banner {
        background-color: #0057B8;
        padding: clamp(35px, 5vw, 45px) 0;
        text-align: center;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
    }

    .btn-get-started {
        background-color: #ffffff !important;
        color: #0057B8 !important;
        border: none;
        border-radius: 4px;
        padding: clamp(12px, 1.5vw, 16px) clamp(35px, 4vw, 55px);
        font-size: clamp(14px, 1.6vw, 16px);
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.08em;
        text-decoration: none !important;
        display: inline-block;
        transition: transform 0.2s, box-shadow 0.2s, background-color 0.2s;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    }

    .btn-get-started:hover {
        background-color: #f8f9fa !important;
        transform: translateY(-2px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
    }

    .btn-get-started:active {
        transform: translateY(1px);
    }
</style>

<!-- ── Hero Banner ── -->
<section class="faq-hero">
    <div class="container">
        <h1>Our Success Story</h1>
    </div>
</section>

<!-- ── Success Stories Section ── -->
<section class="success-section">
    <div class="container py-4">
        <div id="videoGrid" class="success-grid">
            <!-- Videos will be injected here dynamically by JavaScript -->
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-4">
            <button id="loadMoreBtn" class="btn btn-load-more">Load More Videos</button>
        </div>
    </div>
</section>

<!-- Smooth interactive load-more logic -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const allVideos = [
            {
                id: "0ozkc4vt6UM",
                title: "Brett Jones",
                industry: "Manufacturing Industry"
            },
            {
                id: "YOv9d5wQEmA",
                title: "Devan Thorne",
                industry: "Health Care Providers & Services Industry"
            },
            {
                id: "Hl_VxbHP0js",
                title: "Cynthina S Heinsohn",
                industry: "Professional Services Industry"
            },
            {
                id: "DK8IZMz_L3c",
                title: "Emma Thornton",
                industry: "Health Care Providers & Services Industry"
            },
            {
                id: "I1Irk5e88UY",
                title: "Kristen Eli Griffith",
                industry: "Finance and Insurance Industry"
            },
            {
                id: "2jjg8DW7zEo",
                title: "Irit Eizips",
                industry: "Client Testimonial"
            },
            {
                id: "mJD_1HZ0SiE",
                title: "Bradley Brondt",
                industry: "Mortgage Industry"
            },
            {
                id: "xc_37mGB_XI",
                title: "Rebecca Herndon",
                industry: "Mortgage Industry"
            },
            {
                id: "tPi6EDBiN0w",
                title: "Mitch Brendle",
                industry: "Client Testimonial"
            },
            {
                id: "enw1TGOj1c4",
                title: "Julie Aragon",
                industry: "Mortgage Industry"
            },
            {
                id: "SXysPhmnGoE",
                title: "Jonathan Jones",
                industry: "Consultancy Industry"
            },
            {
                id: "ZeIEP_5Gp3g",
                title: "Bonnie Worthington",
                industry: "Software and Technology Industry"
            },
            {
                id: "XHcmYhrV83Y",
                title: "Hugo Clarke",
                industry: "Consumer Discretionary Industry"
            },
            {
                id: "bwFsGKa_WRM",
                title: "Josh Abreu",
                industry: "Manufacturing Industry"
            },
            {
                id: "UwtswWuzYxA",
                title: "Leon Belov",
                industry: "Mortgage Industry"
            },
            {
                id: "RI17U2WD2T0",
                title: "Karen Duke",
                industry: "Internet Software & Services Industry"
            },
            {
                id: "Zbs19Eb5py4",
                title: "Julie Gilys",
                industry: "Internet Software & Services Industry"
            },
            {
                id: "cbczjMhBsYw",
                title: "Scottie Campbell",
                industry: "Mortgage Industry"
            },
            {
                id: "Pg05_q72m3U",
                title: "Hayes Hicken",
                industry: "Not For Profit Industry"
            },
            {
                id: "tWc-pcxm-Sg",
                title: "Jungo",
                industry: "Client Testimonial"
            },
            {
                id: "QBrxTCF96rg",
                title: "Sean Poynter",
                industry: "Real Estate Industry"
            },
            {
                id: "X92flLMt0xI",
                title: "Adrian Gonzales",
                industry: "Health Care Providers & Services Industry"
            },
            {
                id: "vvDxMUZh450",
                title: "Lindsay Fairchild",
                industry: "Education Industry"
            }
        ];

        const grid = document.getElementById("videoGrid");
        const loadMoreBtn = document.getElementById("loadMoreBtn");

        let currentIndex = 0;
        const batchSize = 9;

        function renderVideos() {
            const nextBatch = allVideos.slice(currentIndex, currentIndex + batchSize);
            nextBatch.forEach(video => {
                const card = document.createElement("div");
                card.className = "video-card";
                card.style.opacity = "0";
                card.style.transform = "translateY(15px)";
                card.style.transition = "opacity 0.4s ease, transform 0.4s ease";

                card.innerHTML = `
                <div class="video-wrapper">
                    <iframe src="https://www.youtube.com/embed/${video.id}?rel=0&wmode=opaque&enablejsapi=1&origin=https://360smsapp.com" 
                            title="${video.title} | ${video.industry}" 
                            allowfullscreen></iframe>
                </div>
                <h3 class="video-title">${video.title} – ${video.industry}</h3>
            `;

                grid.appendChild(card);

                // Force reflow and fade in
                setTimeout(() => {
                    card.style.opacity = "1";
                    card.style.transform = "translateY(0)";
                }, 50);
            });

            currentIndex += batchSize;

            if (currentIndex >= allVideos.length) {
                loadMoreBtn.style.display = "none";
            }
        }

        // Render initial 9 videos
        renderVideos();

        // Event listener for loading more
        loadMoreBtn.addEventListener("click", function() {
            renderVideos();
        });
    });
</script>

<!-- ── Bottom CTA Banner ── -->
<section class="cta-banner">
    <div class="container text-center">
        <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV" target="_blank" rel="noopener noreferrer" class="btn btn-get-started">Get Started</a>
    </div>
</section>

<!-- Bootstrap 5 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<?php get_footer('sms'); ?>