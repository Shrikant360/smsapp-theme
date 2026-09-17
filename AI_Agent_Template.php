<?php
/**
 * Template Name: AI Agent Template
 */
get_header('sms');
?>
<!-- ✅ Bootstrap 5 CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

<?php 
// Get the video URL from ACF
$video_url = get_field('ai_agent_video_url'); 

// Convert standard YouTube URL to embed URL automatically
function convert_to_embed_url($url) {
    if(strpos($url, 'youtube.com/watch') !== false) {
        parse_str(parse_url($url, PHP_URL_QUERY), $params);
        if(isset($params['v'])) {
            return 'https://www.youtube.com/embed/' . $params['v'] . '?autoplay=1';
        }
    } elseif(strpos($url, 'youtu.be') !== false) {
        $path = parse_url($url, PHP_URL_PATH);
        $video_id = ltrim($path, '/');
        return 'https://www.youtube.com/embed/' . $video_id . '?autoplay=1';
    }
    return $url; // fallback
}

$embed_url = convert_to_embed_url($video_url);
?>

<style>
  html,
  body {
    overflow-x: hidden !important;
    max-width: 100vw !important;
  }
  
  .btnRefresh img{
  width:40px;
  }

  /* AI Agent Hero Section */
@media (max-width: 767px) {
	.inp-num1{
   padding-top:5px;
   width:100%;
   }
   .phone-icon{
   padding-top:6px;
   margin-left: 4px;
   }
   
   .top-header .call-num{
   width:100%;
   }
   }

  body {
    background: #fff !important;
    font-family: 'Montserrat';
    font-size: inherit;
  }

  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    text-transform: none;
  }

  h2 {
    font-size: 3rem;
  }

  h3 {
    font-size: 1.8rem;
  }

  a {
    text-decoration: none;
  }

  h1 {
    font-size: 3rem;
  }

  p {
    font-size: 1.6rem !important;
  }

  .ai-agent-hero {
    
    min-height: 80vh;
    position: relative;
    z-index: -3;
  }

  .ai-agent-hero h1 {
    font-size: clamp(3.5rem, 4vw + 1rem, 4.2rem);
    line-height: 1.3;
    color: #fff;
  }

  .ai-agent-hero p {
    font-size: 2.4rem !important;
    line-height: 36px;
  }

  .ai-agent-hero .btn {
    border-radius: 6px;
    transition: all 0.3s ease;
    background: #fff;
  }

  .ai-agent-hero .btn:hover {
    transform: translateY(-2px);
    color: #000;
  }

  @media (max-width: 767px) {
    .ai-agent-hero {
      
      padding-top: 70px;
      padding-bottom: 20px;
    }
  }
</style>


<!-- Hero Section -->
<section class="ai-agent-hero d-flex align-items-center text-center text-light"  style="background: url('<?php echo get_field('ai_agent_hero_image'); ?>') center center / cover no-repeat;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10" style="margin-top: -40px;">
        <h1 class="fw-bold mb-3"><?php echo get_field('ai_agent_hero_heading'); ?></h1>
        <p class="lead mb-5"><?php echo get_field('ai_agent_hero_subheading2'); ?> </p>
        <div class="d-flex justify-content-center gap-5 mt-5">
          <!-- <a href="#" class="btn btn-light fw-semibold px-4 py-2" style="font-size: 1.5rem;">Try it for Free</a>-->
          <a href="#ai_agent_form" class="btn btn-outline-dark fw-semibold px-4 py-2" style="font-size: 1.5rem;">Book a
            Free
            Demo</a>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  /* Expertise Section */
  .ai-agent-expertise {
    /* background: linear-gradient(to bottom, #002060 0%, #ffffff 100%); */
    position: relative;
    margin-top: -150px;
    z-index: 1;
    /* overlaps slightly with hero */
  }

  .expertise-box {
    /* max-width: 900px; */
    border-radius: 20px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
  }

  .expertise-box p {
    font-size: 2.65rem !important;
    padding: 16px 8px 16px 8px;
    font-style: italic;
  }



  @media (max-width: 767px) {
    .ai-agent-expertise {
      margin-top: 0px;
    }
  }
</style>

<!-- ✅ Expertise Description Section -->
<section class="ai-agent-expertise py-5 position-relative">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-11 px-4">
        <div class="expertise-box bg-white shadow-md rounded-4 p-4 text-center mx-auto">
          <p class="mb-0 text-dark">
            <?php echo esc_html(get_field('ai_agent_description_section_tagline')); ?>

          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ✅  -->
<section class="ai-agent-integrate">
  <div class="container">
    <div class="row align-items-center justify-content-center p-4">
      <h2 class="fw-bold mb-5 mt-2 text-dark text-center">
        <?php echo esc_html(get_field('ai_agent_description_heading')); ?>
      </h2>
      <!-- Left Image -->
      <div class="col-md-6 text-center mb-4 mb-md-0">

        <?php
        $image = get_field('ai_agent_description_left_image');
        if (is_array($image)):
          ?>
          <div class="integration-img position-relative">
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>"
              class="img-fluid">
          </div>
        <?php endif; ?>
      </div>

      <!-- Right Content -->
      <div class="col-md-6 ps-5">
        <?php if (get_field('ai_agent_description_content')): ?>
          <p class="text-muted mb-4">
            <?php echo esc_html(get_field('ai_agent_description_content')); ?>
          </p>
        <?php endif; ?>

        <?php if (have_rows('ai_agent_description_content_pointers')): ?>
          <ul class="list-unstyled mb-4 fs-6 lh-lg">
            <?php while (have_rows('ai_agent_description_content_pointers')):
              the_row(); ?>
              <li class="mb-2" style="line-height:1.5;">
                <i class="bi bi-circle text-primary me-2"></i>
                <?php echo esc_html(get_sub_field('ai_agent_pointer')); ?>
              </li>
            <?php endwhile; ?>
          </ul>
        <?php endif; ?>
        <hr style="border-top:2px dashed #777E90; class=" my-4">
        <p class="small text-muted">
          <?php echo esc_html(get_field('ai_agent_description_bottom_message')); ?> <span
            class="text-primary text-decoration-none fw-semibold"></span>
        </p>
        <div class="d-flex gap-5 mt-5">
          <!-- <a href="#" class="btn btn-light fw-semibold px-4 py-2" style="font-size: 1.5rem;">Try it for Free</a>-->
          
            <?php if (get_field("ai_agent_video_url")): ?>
			<!-- Button trigger modal -->
            <button type="button" class="my-modal-btn btn btn-outline-dark fw-semibold px-4 py-2" style="font-size: 1.5rem;background-color: #0D4B78;color: white;" data-bs-toggle="modal" data-bs-target="#videoModal" data-video="<?php echo esc_url($embed_url); ?>">
            Watch Demo
            </button>
			<?php endif; ?>
            
        </div>
      </div>

    </div>
  </div>
</section>
<style>
  /* Why Integrate Section */

  .bi-circle::before {

    font-weight: bolder !important;
    margin-right: 5px;
    color: #499FDD;
  }

  .ai-agent-integrate {
    background-color: #fff;
    position: relative;
    overflow: hidden;
    border-radius: 60px 60px 0px 0px;
    margin-top: -115px;
    z-index: -2;
    padding-top: 160px;
    padding-bottom: 50px;
  }

  .ai-agent-integrate p {
    font-size: 1.6rem;
  }

  .ai-agent-integrate h3 {
    font-size: 1.75rem;
  }

  .ai-agent-integrate ul li {
    display: flex;
    align-items: flex-start;
    color: #333;
    font-size: 1.6rem;
    gap: 10px
  }

  .ai-agent-integrate ul li i {
    margin-top: 1px;
    /* adjust if needed */
    flex-shrink: 0;
  }

  .ai-agent-integrate .integration-img {
    max-width: 480px;
    margin: 0 auto;
  }

  /* Responsive tweaks */
  @media (max-width: 767px) {
    .ai-agent-integrate h3 {
      font-size: 1.5rem;
    }
  }
</style>


<!-- ✅ AI Agent Feature Section  -->
<section class="ai-agent-texting py-5 px-4">
  <div class="container">
    <div class="text-center mb-5 mt-5">
      <h2 class="fw-bold text-dark"><?php echo get_field('ai_agent_feature_heading'); ?></h2>
      <p class="text-muted fs-4 mt-2"><?php echo get_field('ai_agent_feature_subheading'); ?></p>
    </div>

    <div class="row align-items-center justify-content-between pt-5">

      <!-- Left Column -->
      <div class="col-lg-5 mb-4 mb-lg-0">

        <?php if (have_rows('ai_agent_features_1')): ?>
          <?php while (have_rows('ai_agent_features_1')):
            the_row(); ?>

            <div class="d-flex mb-4">
              <div class="flex-shrink-0 me-3 mt-1">
                <?php
                $icon = get_sub_field('ai_agent_feature_icon_1');
                if ($icon): ?>
                  <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                <?php endif; ?>
              </div>

              <div>
                <h3 class="fw-bold mb-2" style="color:#0C77B7;">
                  <?php echo esc_html(get_sub_field('ai_agent_feature_title_1')); ?>
                </h3>
                <p class="text-muted" style="font-size:1.6rem;">
                  <?php echo esc_html(get_sub_field('ai_agent_feature_subtitle_1')); ?>
                </p>
              </div>
            </div>

          <?php endwhile; ?>
        <?php endif; ?>

      </div>

      <!-- Right Column -->
      <div class="col-lg-6 text-center">
        <?php
        $image = get_field('ai_agent_section_image_1');
        if ($image): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid">
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<section class="ai-agent-texting py-5 px-4">
  <div class="container">
    <div class="row align-items-center justify-content-between ">

      <!-- Left Column -->

      <div class="col-lg-6 text-center desktop-only">
        <?php
        $image = get_field('ai_agent_section_image_2');
        if ($image): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid">
        <?php endif; ?>
      </div>

      <!-- Right Column -->
      <div class="col-lg-5 mb-4 mb-lg-0">

        <?php if (have_rows('ai_agent_feature_2')): ?>
          <?php while (have_rows('ai_agent_feature_2')):
            the_row(); ?>

            <div class="d-flex mb-4">
              <div class="flex-shrink-0 me-3 mt-1">
                <?php
                $icon = get_sub_field('ai_agent_feature_icon_2');
                if ($icon): ?>
                  <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>">
                <?php endif; ?>
              </div>

              <div>
                <h3 class="fw-bold mb-2" style="color:#0C77B7;">
                  <?php echo esc_html(get_sub_field('ai_agent_feature_title_2')); ?>
                </h3>
                <p class="text-muted" style="font-size:1.6rem;">
                  <?php echo esc_html(get_sub_field('ai_agent_feature_subtitle_2')); ?>
                </p>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
      
      <!-- Left Column Mobile-->

      <div class="col-lg-6 text-center mobile-only	">
        <?php
        $image = get_field('ai_agent_section_image_2');
        if ($image): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="img-fluid">
        <?php endif; ?>
      </div>

    </div>
  </div>
</section>

<!-- ✅ CSS -->
<style>

.mobile-only {
    display: none;
  }
  
  @media (max-width: 767px) {
  .mobile-only {
    display: block;
  }
  
  .desktop-only {
    display: none;
  }
  
}

  .ai-agent-texting {
    background-color: #f8fbff;
  }

</style>

<!-- ✅ AI-led AI Agent Messaging Section -->
<?php if (function_exists('get_field')): ?>

  <section class="ai-agent-messaging" style="padding-top:60px; padding-bottom:60px;">
    <div class="container px-4">

      <!-- Section Heading -->
      <?php if (get_field('ai_agent_action_heading')): ?>
        <div class="row justify-content-center text-center mb-5">
          <div class="col-lg-10 my-3">
            <h2 class="fw-bold text-dark">
              <?php echo esc_html(get_field('ai_agent_action_heading')); ?>
            </h2>
          </div>
        </div>
      <?php endif; ?>

      <!-- Feature Grid -->
      <?php if (have_rows('ai_agent_action_agent_steps')): ?>
        <div class="row g-4 justify-content-center">

          <?php while (have_rows('ai_agent_action_agent_steps')):
            the_row(); ?>
            <div class="col-md-4 col-lg-4">
              <div class="ai-card p-4 h-100">
                <div class="d-flex align-items-start gap-2">

                  <?php
                  $icon = get_sub_field('ai_agent_action_agent_step_icon');
                  if (is_array($icon) && !empty($icon['url'])):
                    ?>
                    <div class="pt-3">
                      <img src="<?php echo esc_url($icon['url']); ?>"
                        alt="<?php echo esc_attr($icon['alt'] ?? ''); ?>">
                    </div>
                  <?php endif; ?>

                  <div class="p-3">
                    <?php if (get_sub_field('ai_agent_action_agent_step_heading')): ?>
                      <h5 class="fw-semibold text-dark mb-2">
                        <?php echo esc_html(get_sub_field('ai_agent_action_agent_step_heading')); ?>
                      </h5>
                    <?php endif; ?>

                    <?php if (get_sub_field('ai_agent_action_agent_step_content')): ?>
                      <p class="text-muted mb-0">
                        <?php echo esc_html(get_sub_field('ai_agent_action_agent_step_content')); ?>
                      </p>
                    <?php endif; ?>
                  </div>

                </div>
              </div>
            </div>
          <?php endwhile; ?>

        </div>
      <?php endif; ?>

    </div>
  </section>

<?php endif; ?>
<style>
  /* AI-led AI Agent Messaging Section */
  .ai-agent-messaging {
    background-color: #ffffff;
    padding-top: 60px;
    padding-bottom: 60px;
  }

  .ai-agent-messaging h3 {
    font-size: 3rem;
    line-height: 1.4;
  }

  .ai-card {
    background: #f9fbff;
    border-radius: 10px;
    transition: all 0.3s ease;
    border: 1px solid #edf2fa;
  }

  .ai-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.06);
  }

  .icon-circle {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    background-color: #0b3b75;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .icon-circle img {
    width: 28px;
    height: 28px;
    object-fit: contain;
  }

  .ai-card h5 {
    font-size: 2.3rem;
  }

  .ai-card p {
    font-size: 2rem;
  }

  @media (max-width: 767px) {
    .ai-agent-messaging h3 {
      font-size: 1.5rem;
    }

    .icon-circle {
      width: 50px;
      height: 50px;
    }

    .icon-circle img {
      width: 24px;
    }
  }
</style>


<!-- ✅ Industry Section -->
<section class="industry-section py-5 bg-white">
  <div class="container mb-5 px-4">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-lg-10">
         <h2 class="fw-bold mb-4 mt-2 text-dark text-center">
          <?php echo esc_html(get_field('ai_agent_industries_heading')); ?>
        </h2>
        <p class="lead text-muted" style="font-size: 1.6rem;">
          <?php echo esc_html(get_field('ai_agent_industries_subheading')); ?>
        </p>
      </div>
    </div>

    <div class="row g-4 justify-content-center">
      <?php if (have_rows('ai_agent_industries')): ?>
        <?php while (have_rows('ai_agent_industries')):
          the_row();
          $icon = get_sub_field('ai_agent_industries_icon');
          $name = get_sub_field('ai_agent_industries_name');
          ?>
          <div class="col-6 col-lg-3">
            <div class="industry-card p-4 text-center h-100 bg-white rounded-4">
              <div class="icon-wrapper mb-3 d-flex justify-content-center align-items-center" style="height: 70px;">
                <?php if ($icon): ?>
                  <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>"
                    class="img-fluid" style="max-height: 60px; object-fit: contain;">
                <?php else: ?>
                  <i class="bi bi-layers text-primary display-4"></i>
                <?php endif; ?>
              </div>
              <h5 class="fw-bold text-dark"><?php echo esc_html($name); ?></h5>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>

    </div>
  </div>
</section>

<style>
  /* Industry Section Styles */
  .industry-card {
    border: 1px solid #f0f0f0;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .industry-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
  }

  .industry-card h5 {
    font-size: 1.4rem;
    margin-top: 15px;
  }

  .icon-wrapper i {
    font-size: 3.5rem;
    /* Adjust if display-4 is too big/small */
    line-height: 1;
  }

  @media (max-width: 767px) {
    .industry-section h2 {
      font-size: 2rem !important;
    }
  }
</style>

<!-- ✅ Testimonials Section -->
<?php if (get_field('ai_agent_testimonial_heading')): ?>
<section class="ai-agent-testimonials py-5">
  <div class="container px-4">

    <!-- Section Heading -->
    
      <div class="row justify-content-left text-center mb-5 g-4">
        <div class="col-lg-8 pt-5">
          <p class="text-start" style="color:#00B8D9">TESTIMONIAL</p>
          <h2 class="fw-bold text-dark text-start">
            <?php echo esc_html(get_field('ai_agent_testimonial_heading')); ?>
          </h2>
        </div>
      </div>
    <?php endif; ?>

    <?php if (have_rows('ai_agent_testimonials_users')): ?>

      <?php
      $testimonials = get_field('ai_agent_testimonials_users');
      $total = count($testimonials);
      $slides = ceil($total / 2);
      ?>

      <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators -->
        <div class="carousel-indicators">
          <?php for ($i = 0; $i < $slides; $i++): ?>
            <button type="button" data-bs-target="#testimonialsCarousel" data-bs-slide-to="<?php echo $i; ?>"
              class="<?php echo $i === 0 ? 'active' : ''; ?>" aria-current="<?php echo $i === 0 ? 'true' : 'false'; ?>">
            </button>
          <?php endfor; ?>
        </div>

        <!-- Carousel Inner -->
        <div class="carousel-inner py-5">

          <?php
          $index = 0;
          for ($s = 0; $s < $slides; $s++):
            ?>
            <div class="carousel-item <?php echo $s === 0 ? 'active' : ''; ?>">
              <div class="row justify-content-between">

                <?php for ($c = 0; $c < 2; $c++):
                  if (!isset($testimonials[$index]))
                    break;

                  $item = $testimonials[$index];
                  ?>
                  <div class="col-md-6 col-lg-6">
                    <div class="testimonial-card p-5 h-100 bg-white rounded-4 shadow-sm">

                      <div class="d-flex align-items-center mb-3">
                        <?php if (!empty($item['ai_agent_testimonial_image'])): ?>
                          <div class="flex-shrink-0 me-3">
                            <img src="<?php echo esc_url($item['ai_agent_testimonial_image']['url']); ?>"
                              alt="<?php echo esc_attr($item['ai_agent_testimonial_image']['alt']); ?>" class="rounded-circle"
                              style="width:50px;height:50px;object-fit:cover;">
                          </div>
                        <?php endif; ?>

                        <div>
                          <h5 class="fw-bold text-dark mb-0">
                            <?php echo esc_html($item['ai_agent_testimonial_name']); ?>
                          </h5>
                          <small class="text-muted">
                            <?php echo esc_html($item['ai_agent_testimonial_designation']); ?>
                          </small>
                        </div>
                      </div>

                      <p class="text-muted mb-0">
                        <?php echo esc_html($item['ai_agent_testimonial_text']); ?>
                      </p>

                    </div>
                  </div>
                  <?php
                  $index++;
                endfor;
                ?>

              </div>
            </div>
          <?php endfor; ?>

        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
          <span class="visually-hidden">Next</span>
        </button>

      </div>

    <?php endif; ?>

  </div>
</section>

<style>
  /* Testimonials Section */
  .ai-agent-testimonials {
    background-color: #EDF2FF;
  }

  .ai-agent-testimonials h3 {
    font-size: 1.8rem;
    line-height: 1.4;
  }

  /* Card */
  .testimonial-card {
    /* Custom shadow if Bootstrap's isn't enough, otherwise rely on utility classes */
    transition: transform 0.3s ease;
  }

  .testimonial-card:hover {
    transform: translateY(-5px);
  }

  /* Text & Footer */
  .testimonial-card p {
    font-size: 1.6rem !important;
    line-height: 1.6;
  }

  .testimonial-card h5 {
    font-size: 1.8rem;
    /* Match previous h6 size or slightly larger */
  }

  /* Carousel Controls */
  .carousel-control-prev,
  .carousel-control-next {
    width: 50px;
    height: 50px;
    background-color: #0C77B7;
    border-radius: 50%;
    top: 50%;
    transform: translateY(-50%);
    opacity: 1;
  }

  .carousel-control-prev {
    left: -25px;
  }

  .carousel-control-next {
    right: -25px;
  }

  .carousel-control-prev:hover,
  .carousel-control-next:hover {
    background-color: #003bb5;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    width: 20px;
    height: 20px;
  }

  /* Carousel Indicators */
  .carousel-indicators {
    margin-bottom: -30px;
  }

  .carousel-indicators button {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: #0046d5;
    opacity: 0.5;
  }

  .carousel-indicators button.active {
    opacity: 1;
  }

  @media (max-width: 767px) {
    .ai-agent-testimonials h3 {
      font-size: 1.5rem;
    }

    .carousel-control-prev,
    .carousel-control-next {
      width: 40px;
      height: 40px;
    }

    .carousel-control-prev {
      left: -10px;
    }

    .carousel-control-next {
      right: -10px;
    }
  }
</style>

<!-- ✅ AI Agent Power Section -->
<section class="ai-agent-power text-center text-white py-5 mt-5 mx-0 bg-white"
  style="background:url('https://360smsapp.com/wp-content/uploads/2025/11/bg1.png') center center/cover no-repeat;">
  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-10">
        <h2 class="fw-bold mb-3 " style="letter-spacing:-0.3px;">
          <span class="highlight-text"> <?php echo esc_html(get_field('ai_agent_cta_heading')); ?></span>
        </h2>
        <p class="lead mb-3">
          <?php echo esc_html(get_field('ai_agent_cta_subheading')); ?>
        </p>
        <p class="mt-4 mb-5 pb-3 pt-2" style="font-size:2.2rem;">
          <?php echo esc_html(get_field('ai_agent_cta_question')); ?>
        </p>
        <div class="d-flex justify-content-center gap-5 flex-wrap">
          <a href="#ai_agent_form" 
            class="btn btn-light fw-semibold px-4 py-2">Contact our experts</a>
        </div>
      </div>
    </div>
  </div>
</section>
<style>
  /* AI Agent Power Section */

  .ai-agent-power h2 {
    font-size: 3.5rem;
    font-weight: 700;
    color: #00e5ff;
    z-index: 2;
    position: relative;
  }

  .ai-agent-power p.lead {
    font-size: 3rem;
    color: #e9f3ff;
    z-index: 2;
    position: relative;
  }

  .ai-agent-power p.small {
    color: #cfe5ff;
  }

  .highlight-text {
    color: #03E5FE;
  }

  .ai-agent-power .btn {
    border-radius: 6px;
    transition: all 0.3s ease;
    position: relative;
    z-index: 2;
    font-size: 1.5rem;
  }

  .ai-agent-power .btn:hover {
    transform: translateY(-2px);
  }

  .ai-agent-power .btn-light {
    color: #002060;
    border: none;
    background: #fff;
  }

  .ai-agent-power .btn-outline-light {
    border: 2px solid #fff;
    color: #fff;
  }

  .ai-agent-power .btn-outline-light:hover {
    background: #fff;
    color: #002060;
  }

  @media (max-width: 767px) {
    .ai-agent-power h2 {
      font-size: 1.5rem;
    }

    .ai-agent-power::before,
    .ai-agent-power::after {
      width: 250px;
      height: 250px;
    }
    .mobile-only{
    display:none !important;
    }
  }
</style>

<!-- ✅ FAQ Section Start-->
<style>
.accordion-header h3{
margin: 0px !important;
}
</style>
<?php
get_template_part('partials/faq');
?>

<!-- ✅ FAQ Section End -->


<div id="ai_agent_form"></div>

<!-- ✅ Bootstrap Section -->
<section class="contact-form-section py-5 bg-white">
  <div class="container">
    <div class="row align-items-center justify-content-center overflow-hidden bg-white">

      <!-- Left: Form -->
      <div class="col-md-5 p-5">
        <h2 class="fw-bold mb-5" style="color:#b55a3c;">Got a Question?</h2>

        <!-- ✅ Render Form Shortcode -->
        <?php echo do_shortcode('[contact_pageshortcode]'); ?>
      </div>

      <!-- Right: Image -->
      <div class="col-md-5 p-4 d-flex justify-content-center mobile-only">
        <img src="https://360smsapp.com/wp-content/uploads/2025/11/Image-1.png" alt="Contact Support"
          class="img-fluid rounded-4 shadow-sm object-fit-cover" style="max-height:480px;">
      </div>
    </div>
  </div>
</section>
<style>
  /* Section Styling */

  #ai_agent_form {
    scroll-margin-top: 250px;
    /* Adjust this value to your header height */
  }

  .contact-form-section {
    background-color: #f8fbff;
  }

  .contact-form-section .selected-flag,
  input#country_selector {
    height: 42px !important;
  }

  /* Form Fields */
  .contact-form-section form input,
  .contact-form-section form select,
  .contact-form-section form textarea,
  .contact-form-section form fieldset,
  .contact-form-section form email {
    border: 1px solid #d6dce5;
    border-radius: 8px !important;
    box-shadow: none;
    padding: 10px 14px;
    font-size: 1.3rem;
  }

  form div {
    margin-bottom: 0px;
  }


  .contact-form-section form input:focus,
  .contact-form-section form select:focus,
  .contact-form-section form textarea:focus {
    border-color: #0046d5;
    box-shadow: 0 0 0 0.1rem rgba(0, 70, 213, 0.1);
  }

  .contact-form-section form label {
    font-weight: 500;
    color: #333;
  }

  /* Submit Button */
  .contact-form-section form input[type="submit"],
  .contact-form-section form button[type="submit"] {
    background-color: #356ac3;
    color: #fff;
    border: none;
    border-radius: 6px;
    padding: 10px 20px;
    font-weight: 500;
    width: 100%;
    transition: all 0.3s ease;
  }

  .contact-form-section form input[type="submit"]:hover {
    background-color: #2a56a3;
  }

  /* Checkbox and Policy Text */
  .contact-form-section form .wpcf7-list-item-label {
    font-size: 0.9rem;
    color: #555;
  }

  /* Responsive Image Layout */
  @media (max-width: 767px) {
    .cus-width {
      width: 50% !important;
    }
  }
</style>

<!-- Iframe Modal -->
<div class="my-modal" id="myModal">
  <div class="my-modal-content">
    <button class="my-modal-close">&times;</button>
    <div class="my-modal-video">
      <iframe id="youtubeVideo" src="" allowfullscreen allow="autoplay"></iframe>
    </div>
  </div>
</div>
<style>
.my-modal {
  display: none;
  position: fixed;
  z-index: 99999999;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0,0,0,0.7);
  justify-content: center;
  align-items: center;
}

.my-modal.show {
  display: flex;
}

.my-modal-content {
  position: relative;
  background: #fff;
  width: 90%;
  max-width: 800px;
  border-radius: 8px;
  overflow: hidden;
}

.my-modal-close {
  position: absolute;
  top: 10px;
  right: 15px;
  font-size: 1.5rem;
  background: transparent;
  border: none;
  cursor: pointer;
}

.my-modal-video iframe {
  width: 100%;
  height: 450px;
  border: none;
}
</style>
<script>
const modal = document.getElementById('myModal');
const closeBtn = modal.querySelector('.my-modal-close');
const youtubeVideo = document.getElementById('youtubeVideo');

// Open modal dynamically
document.querySelectorAll('.my-modal-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    const videoUrl = btn.getAttribute('data-video');
    youtubeVideo.src = videoUrl; // set iframe src
    modal.classList.add('show');
  });
});

// Close modal
closeBtn.addEventListener('click', () => {
  youtubeVideo.src = ""; // stop video
  modal.classList.remove('show');
});

// Optional: close when clicking outside content
modal.addEventListener('click', e => {
  if(e.target === modal){
    youtubeVideo.src = "";
    modal.classList.remove('show');
  }
});
</script>

<?php get_footer('sms'); ?>