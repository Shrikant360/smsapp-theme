<?php
/**
* The template used for displaying page content on home page
*/
?>

<?php
get_header('sms');
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<style>
/* Global Font and Typography */
* {
  font-family: 'Poppins', sans-serif;
  letter-spacing:normal !important;
}

h1,h2,h3,h4,h5,h6{
text-transform: none !important;
}

body {
  font-size: 16px;
  line-height: 1.15;
  color: #333;
}

ol li span, ol li, ol li::marker {
  font-size: 16px;
  line-height: 1.15;
}
.small{
  font-size: .575em !important;
}
.post-template-default.single.single-post h2.accordion-header {
  margin: 0 !important;
}

.post-template-default.single.single-post h1,
.post-template-default.single.single-post h2,
.post-template-default.single.single-post h3,
.post-template-default.single.single-post h4,
.post-template-default.single.single-post h5 {
  margin: 20px 0 10px 0 !important;
  font-weight: 700 !important;
  line-height: 1.3;
}

.post-template-default.single.single-post h1 {
  font-size: 32px !important;
}

.post-template-default.single.single-post h2 {
  font-size: 24px !important;
}

.post-template-default.single.single-post main h3 {
  font-size: 20px !important;
}

.post-template-default.single.single-post h4 {
  font-size: 18px !important;
}

.post-template-default.single.single-post h1 span,
.post-template-default.single.single-post h2 span,
.post-template-default.single.single-post h3 span,
.post-template-default.single.single-post h4 span,
.post-template-default.single.single-post h5 span {
  font-weight: 700 !important;
}

div#ez-toc-container ul li a {
  font-size: 15px !important;
}

/* FAQ Section */
#sp-ea-63875.sp-easy-accordion>.sp-ea-single {
  background: #fff !important;
  border-radius: 8px !important;
  border: 1px solid #CFCFCF !important;
}

.spcollapse p {
  border-left: none;
  margin-left: 0px;
  padding-left: 0px;
}

.sp-collapse p {
  margin-left: 20px !important;
}

/* Breadcrumb */
.breadcrumb {
  font-size: 14px;
  margin-bottom: 25px;
  padding: 0;
  background: transparent;
}

.breadcrumb a {
  margin-right: 8px;
  text-decoration: none;
  color: #0a86c6;
  transition: color 0.3s;
}

.breadcrumb a:hover {
  color: #003773;
}

.breadcrumb span {
  margin: 0 5px;
  color: #666;
}

a {
  text-decoration: none;
}

html, body {
  overflow-x: hidden;
  overflow: visible !important;
}

#ez-toc-container {
  box-shadow: none;
}

p {
  font-size: 16px;
  line-height: 1.7;
  margin-bottom: 1em;
}

ul li {
  font-size: 16px;
  line-height: 1.7;
  
}

.toc .card {
  box-shadow: none !important;
  border: none;
  background: transparent;
}

.toc .card-body {
  border: none;
  padding: 0;
}

.toc .card:hover {
  background: none;
  box-shadow: none !important;
  border: none;
  transition: none !important;
}

.toc .card-header {
  background-color: transparent !important;
  box-shadow: none !important;
  border: none;
}

main .ez-toc-container-direction {
  display: none !important;
}

/* Layout Fix */
.singlepost-template .card {
  border-radius: 10px;
  overflow: visible !important;
  background: transparent;
  height: 100%;
}

.singlepost-template .card-header {
  font-weight: 600;
  font-size: 18px;
}

.category-section .card-header {
  background-color: #004378 !important;
}

/* Left Sidebar (TOC) */
.singlepost-template .ez-toc-container,
.singlepost-template .ez-toc-list {
  list-style: none;
  padding-left: 0;
  margin: 0;
}

.singlepost-template .ez-toc-list li {
  margin-bottom: 8px;
}

.singlepost-template .ez-toc-list a {
  color: #333;
  font-size: 14px !important;
  text-decoration: none;
  transition: color 0.2s;
}

.singlepost-template .ez-toc-list a:hover {
  color: #0d6efd;
}

/* Right Sidebar */
.singlepost-template aside .card {
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  border: none;
}

.singlepost-template aside h6 {
  font-size: 16px;
  margin-bottom: 15px;
  font-weight: 600;
}

/* Search Box */
.singlepost-template aside form input[type="search"] {
  border-radius: 50px;
  padding-left: 40px;
  height: 42px;
}

.singlepost-template aside form button {
  color: #666;
  font-size: 16px;
}

/* Rating Card */
.singlepost-template .rating-card .display-6 {
  font-size: 40px;
  line-height: 1;
}

.singlepost-template .rating-card .text-warning {
  letter-spacing: 2px;
}

/* Categories List */
.singlepost-template .list-group-item {
  border: none;
  padding: 10px 15px;
  font-size: 14px;
  transition: background 0.2s;
}

.singlepost-template .list-group-item:hover {
  background: #f8f9fa;
}

.singlepost-template .list-group-item a {
  text-decoration: none;
  color: #333;
}

.singlepost-template .list-group-item a:hover {
  color: #0d6efd;
}

/* Subscribe Box */
.singlepost-template .card input[type="email"] {
  border-radius: 50px;
  height: 42px;
  font-size: 14px;
}

.singlepost-template .card button {
  border-radius: 50px;
  font-size: 14px;
}

/* Share Buttons */
.singlepost-template .btn.rounded-circle {
  width: 36px;
  height: 36px;
  padding: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 16px;
}

/* Force bullets for category list */
.singlepost-template .list-group {
  list-style: disc !important;
  padding-left: 30px !important;
}

.singlepost-template .list-group-item {
  display: list-item !important;
  list-style-type: disc !important;
  border: none;
  background: transparent;
  padding: 6px 10px;
  font-size: 14px;
}

.bg-shadow {
  box-shadow: 0 30px 30px 0 rgba(0, 0, 0, 0.15) !important;
}

.singlepost-template .post-content .wp-block-columns > .wp-block-column:first-child,
.singlepost-template .post-content .wp-block-columns > .wp-block-column:last-child {
  display: none !important;
}

.singlepost-template .post-content .wp-block-columns > .wp-block-column:nth-child(2) {
  flex: 0 0 100% !important;
  max-width: 100% !important;
}

.search-icon {
  padding: 6px 8px;
  border-radius: 15px;
  background-color: white;
}

.vr-short {
  height: 40px;
  background-color: #004378;
  width: 1px;
  opacity: 1;
}

.flex-center {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
}

/* Blog cards Section */
.card {
  background: white;
  border-radius: 10px;
  padding: 20px;
  transition: all 0.3s ease;
}

.card:hover {
  box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12) !important;
  transform: translateY(-5px);
}

.card-title {
  font-size: 18px;
  font-weight: 600;
  line-height: 1.4;
}

.card-btn {
  background: #0a86c6;
  border: #0a86c6;
  font-size: 13px;
  padding: 8px 16px;
  font-weight: 600;
  border-radius: 9px;
  transition: all 0.3s;
}

.card-btn:hover {
  background-color: #003773;
  border: #003773;
}

.text-small {
  font-size: 13px !important;
}

.card img {
  border-radius: 10px;
}

.tag {
  background: #f6d4d4;
  color: #a23d3d;
  padding: 4px 12px;
  border-radius: 4px;
  font-size: 12px;
  font-weight: 500;
}

.desc {
  font-size: 14px;
  color: #555;
  line-height: 1.6;
}

.author img {
  width: 40px;
  border-radius: 50%;
  height: 40px;
  object-fit: cover;
}

.author {
  border-top: 1px solid #e0e0e0 !important;
}

.read-btn img {
  width: 12px;
  height: 12px;
  margin-left: 6px;
}

/* Footer section */
@media (max-width: 576px) {
  .custom-footer1 h2 {
    font-size: 28px !important;
  }
}

.custom-footer1 {
  background: linear-gradient(90deg, #0A86C6 0%, #003773 100%);
  border-radius: 12px;
  color: #fff;
  text-align: center;
  padding: 60px 40px;
  max-width: 1231px;
  margin: 50px auto;
}

.custom-footer1 h2 {
  font-size: 36px;
  font-weight: 600;
  margin-bottom: 30px;
  color: #fff;
}

.custom-footer1 p {
  font-size: 18px;
  margin-bottom: 30px;
  line-height: 1.6;
}

.custom-footer1 .btn-demo {
  background: #fff;
  color: #000;
  font-weight: 500;
  font-size: 14px;
  padding: 12px 30px;
  border-radius: 25px;
  border: none;
  transition: 0.3s ease;
}

.custom-footer1 .btn-demo:hover {
  background: #f1f1f1;
  transform: scale(1.05);
}

/* TOC scrollbar code */
.sipost_s2_toc div#ez-toc-container {
  position: sticky;
  top: 150px;
  border: none;
  background: transparent;
  margin: 0;
  padding: 0;
  box-shadow: none !important;
  padding-left: 15px;
}

.sipost_s2_toc div#ez-toc-container::before {
  content: "";
  height: 100%;
  width: 5px;
  background: #e6f2ff;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 1;
}

.sipost_s2_toc div#ez-toc-container::after {
  content: "";
  height: var(--sipost-size);
  width: 5px;
  background: #356db2;
  position: absolute;
  left: 0;
  top: var(--sipost-offset);
  z-index: 2;
}

.sipost_s2_toc ul.ez-toc-list {
  display: grid;
  gap: 5px;
}

.sipost_s2_toc p.ez-toc-title {
  font-size: 1.5rem !important;
  font-weight: 700 !important;
  margin-bottom: 20px !important;
  display: block !important;
}

.sipost_s2_toc a.ez-toc-link {
  color: #070707 !important;
  font-size: 0.9rem !important;
}

.sipost_s2_toc a.ez-toc-link:hover {
  color: #356db2 !important;
}

.sipost_s2_toc {
  height: 90% !important;
}

.sticky-sidebar {
  position: sticky;
  top: 100px;
  align-self: start;
}

/* Main Content Area Improvements */
main.col-lg-8 {
  padding-left: 40px !important;
  padding-right: 40px !important;
  display: flex;
  justify-content: center;
  align-items: flex-start;
}

.sipost_s2_content {
  max-width: 800px;
  width: 100%;
  margin: 0 auto;
}

.sipost_s2_content img {
  max-width: 100%;
  height: auto;
  border-radius: 8px;
  margin: 20px 0;
}

.sipost_s2_content p {
  margin-bottom: 1.2em;
  text-align: justify;
}

.sipost_s2_content strong {
  font-weight: 600;
}

/* Hero Section */
.hero-section {
  background-size: cover;
  background-position: center;
  padding: 80px 0;
}

.hero-section h1 {
  font-size: 42px;
  line-height: 1.2;
}

@media (max-width: 768px) {
  .hero-section h1 {
    font-size: 32px;
  }
  
  main.col-lg-8 {
    padding-left: 20px !important;
    padding-right: 20px !important;
  }
}
</style>

<?php
// Fetch author details
$author_id = get_post_field('post_author', get_the_ID());
$author_name = get_the_author_meta('display_name', $author_id);
$author_roles = get_the_author_meta('roles', $author_id);
$author_designation = !empty($author_roles) ? ucfirst($author_roles[0]) : 'Author';
$author_avatar_url = get_avatar_url($author_id, ['size' => 150]);
$author_linkedin = '#';
$author_info = 'Short author bio goes here.';
$author_url = get_author_posts_url($author_id);
$post_categories = get_the_category();
$category_name = !empty($post_categories) ? $post_categories[0]->name : '';
$post_date = get_the_date('d M Y');
$profile_options = get_user_meta($author_id, 'egns_profile_options', true);
$linkedin_url = !empty($profile_options['user_linkedin_url']) ? $profile_options['user_linkedin_url'] : '#';
?>

<div class="container-fluid pb-5 pe-0 ps-0 singlepost-template">
  <!-- Hero / Banner -->
  <section class="py-5 text-center bg-light mb-5 hero-section"
    style="background-image: url('/wp-content/uploads/2026/05/SMS-Blog-Banner-BG.webp'); background-size: cover; background-position: center;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-9 col-lg-8">
          <h1 class="display-4 fw-bold pt-5 mb-4 text-dark"><?php the_title(); ?></h1>

          <!-- Author Info -->
          <div class="d-flex flex-row flex-md-row align-items-center justify-content-center gap-3">
            <img src="<?php $author_id = get_the_author_meta('ID'); 
                 echo get_field('author_user_image', 'user_' . $author_id) ?>"
              class="rounded-circle" style="width:70px; height:70px; object-fit:cover;" alt="Author">
            
            <div class="text-start">
              <h5 class="mb-1">
                <div class="text-dark text-decoration-none">
                  <?php echo esc_html($author_name); ?>
                </div>
              </h5>
              <p class="text-muted mb-0"><?php $author_id = get_the_author_meta('ID'); 
          echo get_field('author_user_designation', 'user_' . $author_id); ?></p>
            </div>
            <div class="vr mx-3 my-auto vr-short"></div>
            <div>
              <?php $author_id = get_the_author_meta('ID'); ?>
              <a href="<?php echo esc_url(get_field('author_linkedin_profile_link', 'user_' . $author_id));?>" 
                 target="_blank" 
                 rel="noopener"
                 class="text-primary fs-1 linkedin-p">
                <i class="bi bi-linkedin" style="color: #0375C0;"></i>
              </a>
            </div>
          </div>

          <!-- Date -->
          <p class="mt-5 mb-0 text-dark pb-5">
            <i class="bi bi-calendar-week-fill me-3"></i> <?php echo esc_html($post_date); ?>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="breadcrumb">
            <a href="https://360smsapp.com/">Home</a> 
            <span>&raquo;</span>
            <a href="https://360smsapp.com/blog/">Blog</a> 
            <span>&raquo;</span>
            <a href="<?php the_permalink(); ?>"><?php echo get_the_title(); ?></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Content Section -->
  <section class="bg-white">
    <div class="container">
      <div class="row g-5">

        <!-- Left Sidebar (TOC) -->
        <script>
          document.addEventListener("DOMContentLoaded", () => {
            const content = document.querySelector(".sipost_s2_content");
            const toc = document.querySelector(".sipost_s2_toc");

            if (!content || !toc) return;

            const updateSizeAndOffset = () => {
              const contentRect = content.getBoundingClientRect();
              const contentTop = content.offsetTop;
              const contentHeight = content.offsetHeight;

              const vh90 = window.innerHeight * 0.9;
              const sizePercent = (vh90 / contentHeight) * 100;

              toc.style.setProperty("--sipost-size", `${sizePercent}%`);

              const scrollY = window.scrollY;
              const scrolled = Math.max(0, scrollY - contentTop);
              const offsetPercent = Math.min(100, (scrolled / contentHeight) * 100);

              toc.style.setProperty("--sipost-offset", `${offsetPercent}%`);
            };

            updateSizeAndOffset();
            window.addEventListener("scroll", updateSizeAndOffset);
            window.addEventListener("resize", updateSizeAndOffset);
          });
        </script>

        <aside class="col-lg-2 d-none d-lg-block p-0 toc">
          <div class="card p-0">
            <div class="card-body p-0">
              <div class="sipost_s2_toc">
                <?php echo do_shortcode('[ez-toc]'); ?>
                <div class="toc_progress"></div>
              </div>
            </div>
          </div>
        </aside>

        <!-- Main Content -->
        
        <style>
        
       /* 1. Fix video overflow on blog posts */
.sipost_s2_content .wp-video, 
.sipost_s2_content .mejs-container {
    width: 100% !important;
    max-width: 100% !important;
    height: auto !important;
}

/* 2. Fix controls shifted to top: ensure the wrapper doesn't collapse */
.sipost_s2_content .mejs-mediaelement {
    position: relative !important;
}

/* 3. Ensure the video fits the new responsive container */
.sipost_s2_content .wp-video video, 
.sipost_s2_content .mejs-container video {
    width: 100% !important;
    height: auto !important;
    display: block;
}

        </style>
        <main class="col-lg-8 text-dark">
          <div class="sipost_s2_content img-responsive">
            <?php the_content(); ?>
          </div>
          
          <?php
          $post_url   = urlencode(get_permalink());
          $post_title = urlencode(get_the_title());
          ?>
        </main>

        <!-- Right Sidebar -->
        <aside class="col-lg-2 d-none d-lg-block p-1 sticky-sidebar">
          <div class="d-flex flex-column gap-4">

            <!-- Rating Card -->
            <div class="card bg-shadow text-center shadow-sm border-0 p-0 text-dark">
              <div class="card-body bg-shadow">
                <hr style="border-top: 2px solid #009CDB; opacity: 1;">
                <h6 class="fw-bold">Top-rated SMSAPP solution</h6>
                <div class="display-6 fw-bold">4.89</div>
                <div class="fs-3" style="color:#009CDB;">★★★★★</div>
                <p class="small text-muted px-3">Reviews on</p>
                <img src="https://360smsapp.com/wp-content/uploads/2025/12/app-icon.png"
                  alt="App Logo" class="img-fluid mb-3">
                <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation" 
                   class="btn btn-danger btn-sm" style="background-color:#C8654E">Read Our Reviews</a>
                <hr style="border-top: 2px solid #009CDB; opacity: 1;">
              </div>
            </div>

            <!-- Categories -->
            <div class="card category-section bg-shadow border-0 p-0 pb-1">
              <div class="card-header bg-primary text-white text-center">Categories</div>
              <ul class="list-group list-group-flush">
                <?php
                $categories = get_categories(['orderby' => 'name', 'order' => 'ASC','parent'  => 0]);
                foreach ($categories as $category) {
                  echo '<li class="list-group-item">
                      <a href="' . esc_url(get_category_link($category->term_id)) . '" class="text-decoration-none text-dark">
                        ' . esc_html($category->name) . '
                      </a>
                    </li>';
                }
                ?>
              </ul>
            </div>

            <!-- Share Section -->
            <div class="text-center border-0 p-3">
              <h6 class="fw-bold mb-3 text-dark">Share this Blog</h6>
              <div class="justify-content-center d-flex gap-2">
                <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $post_url; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-dark btn-sm rounded-circle"><i class="bi bi-linkedin text-white"></i></a>
                <a href="https://twitter.com/intent/tweet?url=<?php echo $post_url; ?>&text=<?php echo $post_title; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-dark btn-sm rounded-circle"><i class="bi bi-twitter-x text-white"></i></a>
                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $post_url; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-dark btn-sm rounded-circle"><i class="bi bi-facebook text-white"></i></a>
                <a href="https://wa.me/?text=<?php echo $post_title; ?>%20<?php echo $post_url; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-dark btn-sm rounded-circle"><i class="bi bi-whatsapp text-white"></i></a>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>
</div>

<!-- Accordian start -->
<?php
//get_template_part('partials/faq');
?>

<!-- Blog Cards Section -->
<div class="container py-5">
  <h2 class="mb-4 fw-bold">Recent Blogs</h2>
  <div class="row g-4" id="cardGrid">
    <?php
    $args = array(
      'post_type'      => 'post',
      'posts_per_page' => 3,
      'orderby'        => 'date',
      'order'          => 'DESC',
    );
    $query = new WP_Query($args);

    if ($query->have_posts()):
      while ($query->have_posts()): $query->the_post(); ?>
        <div class="col-md-6 col-lg-4 card-item">
          <div class="card h-100 shadow-sm">
            <?php if (has_post_thumbnail()): ?>
              <a href="<?php the_permalink(); ?>">
                <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>">
              </a>
            <?php endif; ?>
            <div class="card-body d-flex flex-column">
              <div class="d-flex align-items-center mb-3 small text-muted gap-3">
                <span class="tag">
                  <?php $category = get_the_category(); echo $category ? esc_html($category[0]->name) : ''; ?>
                </span>
                <span class="text-small">
                  <i class="bi bi-calendar-event-fill me-2"></i><?php echo get_the_date('d M Y'); ?>
                </span>
              </div>
              <a href="<?php the_permalink(); ?>" class="text-dark">
                <h6 class="card-title fw-bold"><?php the_title(); ?></h6>
              </a>
              <p class="card-text desc flex-grow-1"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
              <div class="d-flex author justify-content-between align-items-center border-top pt-3">
                <div class="d-flex align-items-center gap-2">
                  <img src="<?php $author_id = get_the_author_meta('ID'); 
                   echo get_field('author_user_image', 'user_' . $author_id) ?>" alt="Author">
                  <div class="small">
                    <div><strong style="font-size:11px"><?php the_author(); ?></strong></div>
                    <div class="text-muted text-small">
                      <?php
                      $author_id = get_the_author_meta('ID');
                      echo get_field('author_user_designation', 'user_' . $author_id);
                      ?>
                    </div>
                  </div>
                </div>
                <a href="<?php the_permalink(); ?>" class="btn card-btn btn-primary btn-sm d-flex align-items-center read-btn" style="font-size:10px; background: #0057b8 !important;">
                  Read More <img src="<?php echo home_url(); ?>/wp-content/uploads/2025/11/Frame-1.png" alt="icon" width="12" height="12">
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile;
      wp_reset_postdata();
    endif; ?>
  </div>
</div>

<!-- Footer Section -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<div class="blogFooter mb-5">
  <?php //echo do_shortcode('[channel_pageshortcode]'); ?>
</div>

<?php get_footer('sms'); ?>