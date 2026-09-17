<?php
/*
Template Name:Webinar New
*/
get_header(); ?>
<!-- Bootstrap 5 -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<style>

    div#page{
        background:#fff;
    }

    .parent-header *,
.parent-header {
    pointer-events: auto !important;
}

  a {
    text-decoration: none;
  }

  .webinar-filter-section {
    background: #f9f9f9;
    padding: 15px;
    border-radius: 8px;
    margin-bottom: 20px;
  }

  .webinar-category-list {
    list-style: none;
    padding-left: 0;
    margin: 0;
  }

  .parent-category {
    margin-bottom: 8px;
  }

  .parent-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
    padding: 8px 10px;
    background: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
  }

  .parent-header:hover {
    background: #f0f0f0;
  }

  .expand-child {
    font-size: 18px;
    font-weight: bold;
    width: 20px;
    text-align: center;
    user-select: none;
  }

  .parent-title {
    font-size: 18px;
    font-weight: 600;
    color: #013975;
  }

  .child-category-list {
    list-style: none;
    padding-left: 10px;
    margin-top: 5px;
  }

  .child-category-list label {
    font-size: 14px;
    margin-bottom: 10px;
  }

  .filter-tag {
    display: inline-block;
    background: #0073aa;
    color: #fff;
    padding: 4px 10px;
    margin: 3px 5px 0 0;
    border-radius: 3px;
    font-size: 13px;
    cursor: pointer;
  }

  .filter-tag:hover {
    background: #005177;
  }

  /* .webinar-item { border:1px solid #ddd; padding:12px; border-radius:6px; margin-bottom:15px; background:#fff; }
.webinar-item h3 { margin:8px 0; } */
  .webinar-pagination {
    margin-top: 16px;
    text-align: center;
  }

  .webinar-page-btn {
    display: inline-block;
    margin: 0 4px;
    padding: 6px 10px;
    border: 1px solid #ddd;
    background: #fff;
    cursor: pointer;
    border-radius: 4px;
  }

  .webinar-page-btn:hover {
    background: #f3f3f3;
  }

  .webinar-page-btn.active {
    background: #0073aa;
    color: #fff;
    border-color: #0073aa;
  }

  .card {
    transition: all .2s ease-in-out;
  }

  .card:hover {
    transform: translateY(-4px);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
  }

  .badge.bg-danger {
    background-color: #C8654E !important;
  }

  .bg-blue {
    background-color: #E5EAF4 !important;
  }

  .btn-danger {
    background-color: #C8654E !important;
    border: none;
    box-shadow: 0 4px 10px rgba(200, 101, 78, .25);
  }

  .btn-danger:hover {
    opacity: 0.9;
  }

  .card-body .small.text-muted i {
    font-size: 1rem;
  }

  .footer_phone a,
  .footer_email a,
  .widget-title {
    color: #fff !important;
  }
</style>

<style>
/*.promo-card {*/
/*    border-radius: 12px;*/
/*    padding: 40px 30px;*/
/*    box-shadow: 0 6px 20px rgba(0,0,0,0.15);*/
/*    color:#fff;*/
/*    text-align:center;*/
/*    height:100%;*/
/*  }*/

/*  .promo-card.light { background:#ffffff; color:#000; }*/
/*  .promo-card.dark { background:#062e63; color:#fff; }*/

  /* Tag Buttons */
/*  .tag-btn {*/
/*    display:inline-block;*/
/*    background:#ffffff1a;*/
/*    color:#fff;*/
/*    padding:6px 16px;*/
/*    border-radius:20px;*/
/*    margin-right:8px;*/
/*    font-size:14px;*/
/*  }*/
/*  .tag-btn.light-text { background:#e8e8e8; color:#062e63 !important; }*/

  /* Heading */
/*  .promo-heading { font-size:16px; line-height:1.4; font-weight:350; margin:30px 0; }*/

   /*Speaker Box */
  .speaker-box {
    padding:0px 0px;
    border-radius:12px;
    display:flex;
    gap:10px;
    color:#000;
  }

  .speaker-tile img { width:90px; border-radius:8px; }
  .speaker-tile p { margin:0; font-size:8px;line-height:12px;padding:0px 5px; }
  .speaker-tile p strong { line-height:0px; }
  
  .speaker-tile {
    
    /*padding: 10px ;*/
    border-radius: 12px;
    width: 100px;          /* FIX: Equal tile width */
    display: flex;
    flex-direction: column;
    align-items: center;
}
  
</style>

<style>

:root {
  --indigo-900: #0b2a57;
  --indigo-950: #061b3a;
  --brand: #2b5df5;
  --ink: #0a214a;
  --muted: #6c7a91;
  --light: #ffffff;
  --card-border: #e9eef6;
  --accent-red: #e03131;
}

    .module-card {
  position: relative;
  overflow: hidden;
  padding: 26px 22px 36px 22px;
  min-height: 280px;
  box-shadow: 0 6px 16px rgba(8,23,53,.06);
  transition: transform .25s, box-shadow .25s;
}
.module-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 16px 32px rgba(8,23,53,.12);
}

/* DARK CARD (odd) */
.module-card.card--dark, .module-card.card--dark p {
  color: var(--light);
  background: url("https://360degreecloud.com/wp-content/uploads/2025/10/blue.webp") no-repeat center center / cover;
  border: 0;
}
.card--dark .module-title { color: #fff !important; }
.card--dark .module-date,
.card--dark .module-date .date-day,
.card--dark .module-date .date-month,
.card--dark .module-date .date-year {
  color: #fff !important;
}
	
.card--dark .module-date { color: rgba(255,255,255,.85); }
	
.card--dark .module-badge {
  background: #fff !important;
  color: #000 !important;
}

/* LIGHT CARD (even) */
.module-card.card--light {
  background: url("https://360degreecloud.com/wp-content/uploads/2025/10/white.webp") no-repeat center center / cover;
  border: 1px solid var(--card-border);
}
.card--light .module-title { color: var(--ink) !important; }
.card--light .module-date { color: var(--muted); }
.card--light .module-badge {
  background: #356DB2 !important;
  color: #fff !important;
}

.module-badge {
  display: inline-block;
  /*margin-top: 15px;*/
  padding: 4px 10px;
  border-radius: 999px;
  font-size: .7rem;
  font-weight: 700;
  letter-spacing: .05em;
  text-transform: uppercase;
  background: #eaf1ff;
  color: var(--brand);
}

.module-title {
  margin-top: 18px;
  font-weight: 400;
  line-height: 1.25;
  /*font-size:18px;*/
  text-transform: none
}

.module-date {
  position: absolute;
  left: 22px;
  bottom: 16px;
  font-size: .78rem;
  line-height: 1.15;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}


.date-month, .date-year { opacity: .9; }
.date-sep {
  display: block;
  width: 22px;
  height: 2px;
  background: var(--accent-red);
  margin: 6px 0;
  opacity: .95;
  border-radius: 2px;
}

.module-card span > img { width: 52px !important; }

/* Responsive */
@media (max-width: 575.98px) {
  .module-card { min-height: 260px; padding-bottom: 64px; }
}
    
</style>

<style>
  .hero-section {
    background: url("https://360dc.test360degreecloud.in/360dc/new/wp-content/uploads/2025/10/Banner-img-1-1.png") no-repeat center center / cover;
    padding: 60px 0;
    position: relative;
    overflow: hidden;

  }


  .hero-label {
    display: inline-block;
    color: #0073aa;
    font-size: 14px;
    font-weight: 600;
    letter-spacing: 1px;
    margin-bottom: 15px;
    text-transform: uppercase;
  }

  .hero-title {
    font-size: 42px;
    font-weight: 700;
    color: #0073aa;
    line-height: 1.2;
    margin-bottom: 20px;
  }

  .hero-description {
    font-size: 16px;
    color: #2c5282;
    line-height: 1.6;
    margin-bottom: 30px;
    max-width: 450px;
  }

  .hero-btn {
    background: #C8654E;
    color: #fff;
    border: none;
    padding: 10px 28px;
    font-size: 15px;
    font-weight: 600;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 6px rgba(230, 106, 60, 0.3);
  }

  .hero-btn:hover {

    transform: translateY(-2px);
    box-shadow: 0 6px 12px rgba(230, 106, 60, 0.4);
  }

  .hero-image-wrapper {
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .hero-image-container {
    position: relative;
    max-width: 500px;

  }

  .hero-image {
    width: 100%;
    height: auto;
    border-radius: 0;
    /* clip-path: polygon(15% 0%, 100% 0%, 85% 100%, 0% 100%); */
    display: block;
  }



  @media (max-width: 768px) {
    .hero-section {
      padding: 50px 0;
    }



    .hero-title {
      font-size: 32px;
    }

    .hero-description {
      font-size: 15px;
    }




  }

  @media (max-width: 576px) {
    .hero-title {
      font-size: 28px;
    }

    .hero-btn {
      padding: 12px 24px;
      font-size: 14px;
    }
  }

  .highlight {
    background: linear-gradient(90deg, #0A86C6, #003773);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
</style>

<section class="hero-section">
  <div class="container  ">
    <div class="row align-items-center justify-content-center text-center">
      <!-- Left Content -->
      <div class="col-lg-10 col-md-10 mb-4 mb-md-0">
        <div class="hero-content text-center">
          <span class="hero-label text-dark">Webinar</span>
          <h1 class="hero-title highlight">Upcoming & On-Demand Salesforce Webinars for Every Business</h1>
          <p class="hero-description text-dark mx-auto ">
           Watch expert-led sessions designed to help you unlock more from Salesforce.
          </p>
          <a href="<?php echo get_home_url(); ?>/contact-us/" class="hero-btn" target="_blank">Talk To Our Experts</a>
        </div>
      </div>

      <!-- Right Image -->
      <!--<div class="col-lg-5 col-md-5 ">-->
      <!--  <div class="hero-image-wrapper justify-content-center">-->
      <!--    <div class="hero-image-container">-->
            <!-- Hero Image -->
      <!--      <img width="375px" height="349" src="https://360degreecloud.com/wp-content/uploads/2025/10/hero-img-1.png"-->
      <!--        alt="Smiling professional woman">-->

      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
    </div>
  </div>
</section>




<!-- ==========================
     TOP WEBINAR SLIDER
=========================== -->
<section class="top-webinars mt-5 bg-light"
  style="background-image: url('https://360dc.test360degreecloud.in/360dc/new/wp-content/uploads/2025/10/Group-1000014756-1.png'); background-repeat: no-repeat; background-size: cover; background-position: center;">

  <div class="container py-5" style="padding-top: 100px !important;">
    <div class="mb-5 text-start">
      <h1 class="fw-bold mb-3">Upcoming Webinars</h1>
      <!--<p class="text-muted mb-0">Here's what we've been up to recently.</p>-->
    </div>

    <div class="position-relative">
      <div id="webinarCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
        <div class="carousel-inner">

          <?php
          // Get the selected category Term IDs from ACF field
          $selected_categories = get_field('select_upcoming_webinar_category', get_the_ID());
			
          // Check if categories are selected
          $count = 0;
          $webinar_query = null;
          
          if (!empty($selected_categories) && is_array($selected_categories)) {
            // Only query if categories are selected
            $webinar_query_args = array(
              'post_type' => 'webinar',
              'posts_per_page' => 3, // Adjust number as needed
              'post_status' => 'publish',
              'orderby' => 'date',
              'order' => 'DESC',
              'tax_query' => array(
                array(
                  'taxonomy' => 'webinar_category', // Replace with your taxonomy slug (e.g., 'webinar_category')
                  'field'    => 'term_id',
                  'terms'    => $selected_categories,
                  'operator' => 'IN' // Posts matching any of the selected categories
                )
              )
            );
            
            $webinar_query = new WP_Query($webinar_query_args);
          }
          
          if ($webinar_query && $webinar_query->have_posts()):
            while ($webinar_query->have_posts()):
              $webinar_query->the_post();
              $active = ($count === 0) ? 'active' : '';
              $img = get_the_post_thumbnail_url(get_the_ID(), 'large');
              $date = get_the_date('d M') . ' | ' . get_the_time('g A');
              $acf_date = get_field('add_date__time', get_the_ID());
              $author = get_the_author();
              ?>
              <div class="carousel-item <?php echo $active; ?>">
                <div class="card border-0 shadow-sm rounded-4" style="overflow: hidden;">
                  <div class="row g-0">
                    <!-- Image Column -->
                    <div class="col-lg-6 col-md-6">
                      <a href="<?php the_permalink(); ?>" target="_blank">
                        <?php if ($img): ?>
                          <div class="webinar-image" style="background-image: url('<?php echo esc_url($img); ?>');"></div>
                        <?php else: ?>
                          <div class="webinar-image" style="background-color: #e9ecef;"></div>
                        <?php endif; ?>
                      </a>
                    </div>

                    <!-- Content Column -->
                    <div class="col-lg-6 col-md-6">
                      <div class="webinar-content p-4 p-lg-5 bg-white h-100 d-flex flex-column justify-content-center">
                        <span class="badge bg-primary mb-4 px-3 py-2 rounded-pill d-inline-block"
                          style="width: fit-content;">New</span>
                        <h2 class="fw-bold mb-5" style="font-size: 2.2rem; line-height: 1.3; color: #1a1a1a;">
                          <a class="text-dark" href="<?php the_permalink(); ?>" target="_blank" style="text-decoration:none;">
                            <?php the_title(); ?></a>
                        </h2>
                        <a href="<?php the_permalink(); ?>" target="_blank" style="text-decoration:none;">
                          <p class="text-muted mb-4" style="font-size: 1.2rem; line-height: 1.6; ">
                            <?php echo wp_trim_words(get_the_excerpt(), 25); ?>
                          </p>
                        </a>
                        <div class="d-flex justify-content-between align-items-center mt-4 pt-3">
                          <div class="d-flex align-items-center gap-2 ">
                                <div><a href="<?php echo get_permalink() . '?id=upcoming_submit'; ?>" class="hero-btn" target="_blank">Register Now</a></div>
                                <!--<div><a href="<?php echo get_home_url(); ?>/contact-us/" class="hero-btn" target="_blank">Talk To Our Experts</a></div>-->
                            <?php
                            $author_id = get_post_field('post_author', get_the_ID());
                            /** Author image handling */
                            $acf_image = get_user_meta($author_id, 'author_user_image', true);
                            if (!empty($acf_image)) {
                              if (is_numeric($acf_image)) {
                                $author_avatar_url = wp_get_attachment_url($acf_image);
                              } elseif (is_array($acf_image) && isset($acf_image['url'])) {
                                $author_avatar_url = $acf_image['url'];
                              } elseif (filter_var($acf_image, FILTER_VALIDATE_URL)) {
                                $author_avatar_url = $acf_image;
                              }
                            } else {
                              $author_avatar_url = site_url() . '/wp-content/uploads/2025/09/dummy_700x700_000000_eac94f.png'; // Fallback avatar
                            }
                            ?>
                            <div>
                              </div>
                          </div>
                                <p class="my-auto" style="font-size: 1.5em;"><strong class="text-muted"><?php echo esc_html($acf_date); ?></strong></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php
              $count++;
            endwhile;
            wp_reset_postdata();
          else:
            ?>
            <div class="carousel-item active">
              <div class="card border-0 shadow-sm rounded-4">
                <div class="p-5 text-center">
                  <p class="text-muted">No webinars found for the selected categories.</p>
                </div>
              </div>
            </div>
            <?php
          endif;
          ?>
        </div>

        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#webinarCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bg-danger rounded-circle" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#webinarCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon bg-danger rounded-circle" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</section>

<style>
  /* Section Styling */
  .top-webinars {
    background: #f9fbfd;
    border-radius: 0 0 24px 24px;
  }

  /* Card Styling */
  .top-webinars .card {
    border-radius: 20px !important;
    min-height: 380px;
  }

  /* Image Column */
  .webinar-image {
    width: 100%;
    height: 100%;
    min-height: 370px !important;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
  }

  /* Content Column */
  .webinar-content {
    min-height: 380px;
  }

  /* Badge */
  .top-webinars .badge {
    background-color: #003773 !important;
    color: #ffffff !important;
    font-size: 0.75rem;
    font-weight: 600;
  }

  /* Carousel Controls */
  .carousel-control-prev,
  .carousel-control-next {
    width: 50px;
    height: 50px;
    opacity: 1;
    top: 50%;
    transform: translateY(-50%);
  }

  .carousel-control-prev {
    left: -25px;
  }

  .carousel-control-next {
    right: -25px;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    width: 50px;
    height: 50px;
    background-size: 20px 20px;
    padding: 15px;
  }

  .carousel-control-prev-icon {
    background-image: url('data:image/svg+xml;charset=utf8,<svg xmlns="http://www.w3.org/2000/svg" fill="%23ffffff" viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/></svg>');
    background-color: #C8654E !important;
  }

  .carousel-control-next-icon {
    background-image: url('data:image/svg+xml;charset=utf8,<svg xmlns="http://www.w3.org/2000/svg" fill="%23ffffff" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/></svg>');
    background-color: #C8654E !important;
  }

  /* Carousel Fade Effect */
  .carousel-fade .carousel-item {
    opacity: 0;
    transition: opacity 1s ease-in-out;
  }

  .carousel-fade .carousel-item.active {
    opacity: 1;
  }

  /* Responsive Design */
  @media (max-width: 991px) {
    .webinar-image {
      min-height: 300px;
    }

    .webinar-content {
      min-height: auto;
    }

    .top-webinars .card {
      min-height: auto;
    }

    .carousel-control-prev {
      left: 10px;
    }

    .carousel-control-next {
      right: 10px;
    }
  }

  @media (max-width: 768px) {
    .webinar-image {
      min-height: 250px;
    }

    .webinar-content h2 {
      font-size: 1.5rem !important;
    }
  }

  .filter-title {
    background-color: #F0F9FF;
    border: 1px solid #003773;
    padding: 10px 14px;
    border-radius: 10px;
  }

  .filter-title h5 {
    color: #013975 !important;
  }

  #reset-filters,#reset-filters-main {
    border: none;
    background: none;
    color: #356DB2;
    font-size: 1rem;
    font-weight: bold;
  }
</style>

<div
  style="margin-top:100px; background:url('https://360degreecloud.com/wp-content/uploads/2025/10/hill-1-1.jpg') center/cover no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="filter-title">
          <h5>Browse Webinars<br>
            by Category</h5>
        </div>
        <hr />

       <div class="webinar-filter-section">
  <div class="webinar-filter-actions">
    <div class="d-flex align-items-center justify-content-between">
      <h5 style="font-size:1rem">SORT BY</h5>
      <button id="reset-filters" style="margin-bottom:7px;">CLEAR ALL</button>
    </div>
  </div>
  <?php
  // ============================================
  // ✨ NEW: Define excluded categories
  // ============================================
  $exclude_categories = ['upcoming', 'previous'];
  
  $taxonomy = 'webinar_category';
  
  // ============================================
  // ✨ MODIFIED: Get parent categories and filter excluded ones
  // ============================================
  $parents = get_terms([
    'taxonomy' => $taxonomy,
    'hide_empty' => true,
    'parent' => 0
  ]);
  
  // ✨ NEW: Filter out excluded parent categories
  if (!empty($parents) && !is_wp_error($parents)) {
    $parents = array_filter($parents, function($parent) use ($exclude_categories) {
      return !in_array($parent->slug, $exclude_categories);
    });
  }
  
  if (!empty($parents) && !is_wp_error($parents)):
    echo '<ul class="webinar-category-list">';
    $first = true;
    foreach ($parents as $parent):
      // ============================================
      // ✨ MODIFIED: Get child categories and filter excluded ones
      // ============================================
      $children = get_terms([
        'taxonomy' => $taxonomy,
        'hide_empty' => true,
        'parent' => $parent->term_id
      ]);
      
      // ✨ NEW: Filter out excluded child categories
      if (!empty($children) && !is_wp_error($children)) {
        $children = array_filter($children, function($child) use ($exclude_categories) {
          return !in_array($child->slug, $exclude_categories);
        });
      }
      
      // ✨ NEW: Skip parent if it has no children after filtering
      if (empty($children)) {
        continue;
      }
      
      $is_open = $first ? 'open' : '';
      $symbol = $first ? '−' : '+';
      echo '<li class="parent-category ' . $is_open . '">';
      echo '<div class="parent-header mb-3">';
      echo '<span class="parent-title px-4">' . esc_html($parent->name) . '</span>';
      echo '<span class="expand-child">' . $symbol . '</span>';
      echo '</div>';
      if (!empty($children)) {
        echo '<ul class="child-category-list" ' . ($first ? '' : 'style="display:none;"') . '>';
        foreach ($children as $child) {
          echo '<li><label style="display:flex; align-items:center; gap:6px;"><input type="checkbox" class="webinar-filter-checkbox m-0" value="' . esc_attr($child->slug) . '"> ' . esc_html($child->name) . '</label></li>';
        }
        echo '</ul>';
      }
      echo '</li>';
      $first = false;
    endforeach;
    echo '</ul>';
  endif;
  ?>
</div>
      </div>
      <div class="col-md-9">
        <div class="d-flex align-items-center">
          <h5 style="font-size:1rem" class="my-auto">SORT BY</h5>
          <div class="webinar-filter-actions justify-content-end">
            <button id="reset-filters-main" class="btn btn-primary">CLEAR ALL</button>
          </div>
        </div>
        <div class="selected-filters"></div>
        <hr />
        <div class="mt-5 mb-5">
          <h1 class="fw-bold">Featured Webinars</h1>
        </div>
        <div id="webinar-results"></div>
      </div>
    </div>
  </div>
</div>
<!-- ==========================
     CTA SECTION
=========================== -->
<section class="salesforce-cta my-5">
  <div class="container">
    <div
      class="cta-box d-flex flex-column flex-md-row justify-content-between align-items-center text-center text-md-start rounded-4 px-4 px-md-5 py-4">
      <h4 class="text-white mb-3 mb-md-0 fw-semibold">
       Got a Salesforce Challenge? Let’s Turn it into <br>
        Our Next Webinar
      </h4>
      <strong><a href="<?php echo get_home_url(); ?>/contact-us/" class="btn btn-light fw-semibold px-4 py-2 rounded-3"
          target="_blank">
          Let’s Talk!
        </a></strong>
    </div>
  </div>
</section>

<style>
  /* CTA Section Styling */
  .salesforce-cta .cta-box {
    background: url('https://360dc.test360degreecloud.in/360dc/new/wp-content/uploads/2025/10/footer-cta.png') no-repeat center center / cover;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    padding: 50px !important;
  }

  /* Text */
  .salesforce-cta h4 {
    font-size: 1.75rem;
    color: #fff;
    line-height: 1.5;
  }

  /* Button */
  .salesforce-cta .btn-light {
    color: #2C62D6;
    font-size: 1.3rem;
    transition: all 0.3s ease-in-out;
    border: none;
    padding: 10px 100px !important;
  }

  .salesforce-cta .btn-light:hover {
    background-color: #fff;
    color: #1d4ed8;
    transform: translateY(-2px);
  }

  /* Responsive */
  @media (max-width: 767px) {
    .salesforce-cta h4 {
      font-size: 1.1rem;
    }

    .salesforce-cta .btn-light {
      width: 100%;
    }
  }
</style>


<!-- Bootstrap JS (Optional, for interactive components) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<?php get_footer(); ?>