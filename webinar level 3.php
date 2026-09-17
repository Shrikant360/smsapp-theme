<?php
/**
 * Template Name: AI Possible Finale Layout
 */
get_header(); ?>

<?php

$webinar_id = isset($_GET['webinar_id']) ? intval($_GET['webinar_id']) : 0;

if (!$webinar_id) {
    echo '<div class="container py-5 text-center"><h3>Invalid webinar selected.</h3></div>';
    get_footer();
    return;
}

?>

<!-- Bootstrap 5 CDN (Consider moving to functions.php) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    /* Section 1: Hero */
	
    .top-header-left .link > div p, .top-header-left .link.m-hov-1{
  margin-top: 9px !important;
}

    a {
        text-decoration: none;
    }

    .hero-section {
        background: url("https://360dc.test360degreecloud.in/360dc/new/wp-content/uploads/2025/10/Banner-img-1-1.png") no-repeat center center / cover;
        padding: 60px 0;
    }

    .hero-section h1 {
        font-size: 42px;
        font-weight: 700;
        color: #0073aa;
        line-height: 1.2;
    }

    /* Section 2: Video Container */

    .content-video-section {
        font-size: 1.8rem;
    }

    .video-container {
        position: relative;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        background: #000;
    }

    .video-ratio {
        position: relative;
        padding-bottom: 56.25%;
        height: 0;
    }

    .video-ratio iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0;
    }

    /* Section 3: CTA Box */
    .cta-box {
        background: url("https://360dc.test360degreecloud.in/360dc/new/wp-content/uploads/2025/12/webinar-cta-bg.webp") no-repeat center center / cover;
        border-radius: 12px;
        padding: 60px 50px;
        color: #fff;
    }

    .cta-box h2 {
        font-weight: 700;
        font-size: 2.6rem;
        line-height: 1.3;
    }

    .btn-demo {
        background-color: #fff;
        color: #2f56b3 !important;
        font-weight: 600;
        padding: 12px 35px;
        border-radius: 8px;
        transition: 0.3s;
    }

    .btn-demo:hover {
        background-color: #f1f1f1;
        transform: translateY(-2px);
    }

    /* Section 4: Featured Webinars */
    .featured-webinar-section p {
        font-size: 16px;
    }

    .featured-webinar-section h3 {
        font-size: 20px !important;
    }



    .w-img-box {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        aspect-ratio: 16 / 9;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.06);
    }

    .w-play-btn {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 50px;
        height: 50px;
        background: #fff;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .w-play-btn::after {
        content: "";
        width: 0;
        height: 0;
        border-top: 8px solid transparent;
        border-bottom: 8px solid transparent;
        border-left: 12px solid #333;
        margin-left: 3px;
    }

    @media (max-width: 768px) {
        .hero-section h1 {
            font-size: 1.8rem;
        }

        .cta-box h2 {
            font-size: 1.8rem;
        }
    }
</style>


<!-- SECTION 1: HERO -->
<section class="hero-section text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1><?php echo esc_html(get_field('level3_title', $webinar_id)); ?></h1>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 2: CONTENT & VIDEO -->
<section class="content-video-section py-5">
    <div class="container">
        <!-- Content Text -->
        <div class="row justify-content-center">
            <div class="col-lg-12 text-muted">
                <p> <?php the_field('level3_subtitle', $webinar_id); ?></p>
            </div>
        </div>

        <!-- Video Container -->
        <div class="row justify-content-center mt-5">
            <div class="col-lg-8">
                <div class="video-container">
                    <div class="video-ratio">
                        <?php
                        $video_link = get_field('webinar_add_youtube_link', $webinar_id);
                        echo $video_link;
                        if (strpos($video_link, 'watch?v=') !== false) {
                            $video_link = str_replace('watch?v=', 'embed/', $video_link);

                        }
                        echo $video_link;
                        ?>
                        <iframe src="<?php echo esc_url($video_link); ?>" allowfullscreen></iframe>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 3: CTA -->
<section class="cta-section pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="cta-box text-center shadow">
                    <h5 class="text-dark fw-bold mb-3">AI Agents to Power Your Workflows</h5>
                    <h2 class="mb-4">Trusted by 400+ global enterprises and growing powerhouse.</h2>
                    <a class="btn btn-demo text-decoration-none" href="https://360smsapp.com/contact-us/" target="_blank">Talk To Our Experts</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SECTION 4: FEATURED WEBINARS -->
<?php
$upcoming_posts = get_posts(['post_type' => 'webinar', 'posts_per_page' => 3, 'tax_query' => [['taxonomy' => 'webinar_category', 'field' => 'slug', 'terms' => 'upcoming']]]);
$exclude_ids = wp_list_pluck($upcoming_posts, 'ID');
$other_posts = get_posts(['post_type' => 'webinar', 'posts_per_page' => 3, 'post__not_in' => $exclude_ids, 'orderby' => 'date', 'order' => 'DESC']);
$final_webinars = array_slice(array_merge($upcoming_posts, $other_posts), 0, 3);

if (count($final_webinars) >= 3):
    ?>
    <section class="featured-webinar-section py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold mb-5 text-dark text-center" style="font-size: 2.2rem;">Featured Webinars</h2>
            <div class="row g-4">
                <?php foreach ($final_webinars as $post):
                    setup_postdata($post); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="webinar-card h-100 bg-white p-3 rounded shadow-sm">
                            <a href="<?php echo esc_url(get_permalink() . '?id=upcoming_submit'); ?>"
                                class="w-img-box d-block mb-3">
                                <?php if (has_post_thumbnail()):
                                    the_post_thumbnail('large', ['class' => 'img-fluid w-100 h-100 object-fit-cover']);
                                else:
                                    echo '<img src="https://via.placeholder.com/600x340" class="img-fluid">';
                                endif; ?>
                                <div class="w-play-btn"></div>
                            </a>
                            <h3 class="w-title fs-5 fw-bold"><?php the_title(); ?></h3>
                            <div class="w-excerpt text-muted mb-4">
                                <p> <?php echo wp_trim_words(get_the_content(), 18); ?></p>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary w-100"
                                style="background: #C8654E; border: none; font-size:20px;">Watch Now</a>
                        </div>
                    </div>
                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<?php get_footer(); ?>