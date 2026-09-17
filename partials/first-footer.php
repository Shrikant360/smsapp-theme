<!-- ===== SECTION: TESTIMONIALS ===== -->
<?php if (get_field('testimonial_heading')): ?>
  <section class="sec pt-5 pt-lg-5 bg-white bdr-section">
    <div class="container">
      <div class="mb-5">
        <h2 class="fw-bold mb-3 fs-32 ls-n1 c-ink">
          <?php the_field('testimonial_heading'); ?>
        </h2>
        <p class="text-muted fs-17"><?php the_field('testimonial_content'); ?></p>
      </div>

      <?php /*<div class="row align-items-center g-4 mb-5">
        <div class="col-12">
          <img src="<?php echo esc_url(home_url('/')); ?>wp-content/uploads/2026/04/image-84.png" alt="companies-logo" class="img-fluid">
        </div>
      </div> */?>
      
      <?php
$cmpsl_logos = array(
  'ABBOTT.png',
  'AMERICAN-RED-CROSS-1.png',
  'AMGEN.png',
  'ASSURANT.png',
  'CLARIS.png',
  'COPART.png',
  'MORGAN.png',
  'PEARSON.png',
  'SHAW.png',
  'AMGEN.png',
  'SOFTWARE-ONE.png',
  'STANLEY.png',
);

$cmpsl_base = home_url( '/wp-content/uploads/2026/09/' );
$cmpsl_data = array();

foreach ( $cmpsl_logos as $cmpsl_logo ) {
  $cmpsl_data[] = array(
    'src' => esc_url_raw( $cmpsl_base . $cmpsl_logo ),
    'alt' => ucwords( strtolower( str_replace( array( '-', '.png' ), array( ' ', '' ), $cmpsl_logo ) ) ),
  );
}
?>

<div class="row align-items-center g-4 mb-5">
  <div class="col-12">
    <div class="cmpsl-wrap">
        <div id="cmpslCarousel" class="carousel slide cmpsl-carousel"
           data-bs-ride="carousel" data-bs-interval="3500"
           data-bs-pause="false" data-bs-touch="true">

        <div class="carousel-inner"></div>

        <button class="carousel-control-prev cmpsl-ctrl" type="button"
                data-bs-target="#cmpslCarousel" data-bs-slide="prev">
          <span class="cmpsl-ctrl-icon" aria-hidden="true">&#8249;</span>
          <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next cmpsl-ctrl" type="button"
                data-bs-target="#cmpslCarousel" data-bs-slide="next">
          <span class="cmpsl-ctrl-icon" aria-hidden="true">&#8250;</span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
  </div>
</div>

<script type="application/json" id="cmpslData"><?php echo wp_json_encode( $cmpsl_data ); ?></script>
      
      <?php if (have_rows('testimonial_list')): ?>
        <div class="row g-4 justify-content-center">
          <?php while (have_rows('testimonial_list')): the_row(); ?>
            <div class="col-lg-4">
              <div class="p-4 border rounded-4 h-100 bg-white shadow-sm position-relative">
                <div class="text-warning mb-3 small">★★★★★</div>
                <p class="mb-4 text-dark fst-italic testimonial-p">
                  <?php the_sub_field('testimonial_quote'); ?>
                </p>
                <div class="mt-auto">
                  <div class="fw-bold text-dark fs-15"><?php the_sub_field('testimonial_name'); ?></div>
                  <div class="text-muted small"><?php the_sub_field('testimonial_role'); ?></div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </section>
<?php endif; ?>

<!-- ===== SECTION 13: CTA BAR ===== -->
<?php if (get_field('cta_bar')): ?>
  <section class="bg-cta c-white" id="cta-bar-13" style="padding: 20px 0;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-2 cta-bar-h" style="font-weight:800;color:#fff;font-size:17px;line-height:25.5px;">
            <?php the_field('cta_bar'); ?></h2>
          <p class="mb-0 opacity-75 fs-16"><?php the_field('cta_content'); ?></p>
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="ai-cta-btns">
            <a class="open-popup-form-on-click btn-white-solid">
              Start Free Trial
            </a>

            <a href="https://appexchange.salesforce.com/appxListingDetail?listingId=a0N3000000DpSyIEAV&utm_source=SEO&utm_medium=website&utm_campaign=navigation"
              class="btn-white-outline" target="_blank">
              Book a Demo
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- ===== SECTION 15: FAQ ===== -->
<?php if (get_field('dynamic_faq_subtitle')): ?>
  <!--<section class="sec py-5 bg-white"-->
  <!--<section class="bg-white mt-5 mt-lg-5"-->
  <section class="bg-white pt-4 pt-lg-5 "
    itemscope
    itemtype="https://schema.org/FAQPage">

    <div class="container">

      <div class="mb-5">
        <h2 class="fw-bold mb-3 fs-32 ls-n1 mt-0">
          <?php the_field('dynamic_faq_subtitle'); ?>
        </h2>

        <p class="text-muted fs-14">
          <?php the_field('FAQs_Content'); ?>
        </p>
      </div>

      <?php if (have_rows('dynamic_faq_list')): ?>

        <div class="border rounded-4 overflow-hidden shadow-sm bg-white">

          <?php
          $faq_rows = get_field('dynamic_faq_list');
          $total = count($faq_rows);
          $i = 0;
          ?>

          <?php while (have_rows('dynamic_faq_list')): the_row(); ?>

            <?php
            $bdr = ($i < $total - 1) ? 'border-bottom' : '';
            $i++;
            ?>

            <div class="faq-item <?= $bdr ?> p-4"
              itemscope
              itemprop="mainEntity"
              itemtype="https://schema.org/Question">

              <div class="faq-q d-flex justify-content-between align-items-center"
                onclick="toggleFaq(this)"
                itemprop="name">

                <?= $i ?>. <?= get_sub_field('dynamic_question') ?>

                <i class="bi bi-plus fs-4"></i>

              </div>

              <div class="faq-a pt-3 text-muted"
                style="display:none"
                itemscope
                itemprop="acceptedAnswer"
                itemtype="https://schema.org/Answer">

                <div itemprop="text">
                  <?= get_sub_field('dynamic_answer') ?>
                </div>

              </div>

            </div>

          <?php endwhile; ?>

        </div>

      <?php endif; ?>

    </div>

  </section>
<?php endif; ?>

<!-- ═══ SECTION 14: RESOURCES ═══ -->

<?php if (have_rows('case_studies')) : ?>
  <section class="sec bg-fdfdfd">
    <div class="container">
      <h2 class="fw-bold mb-4 ls-n1 c-ink">
        Everything you need to learn, set up, and succeed
      </h2>

      <div class="row g-4">
        <?php while (have_rows('case_studies')) : the_row(); ?>

          <?php
          $image   = get_sub_field('case_study_image');
          $title   = get_sub_field('case_study_title');
          $date    = get_sub_field('case_study_date');
          $excerpt = get_sub_field('case_study_excerpt');
          $url     = get_sub_field('case_study_url');

          if (is_array($image)) {
            $image_url = $image['url'];
            $image_alt = !empty($image['alt']) ? $image['alt'] : $title;
          } else {
            $image_url = $image;
            $image_alt = $title;
          }
          ?>

          <div class="col-lg-4 col-md-6 resource-margin">
            <div class="res-card bg-white border-0 shadow-sm rounded-4 overflow-hidden h-100">

              <div class="position-relative">
                <?php if ($image_url) : ?>
                  <img
                    src="<?= esc_url($image_url); ?>"
                    class="w-100 img-card-h"
                    alt="<?= esc_attr($image_alt); ?>">
                <?php endif; ?>

                <span class="badge position-absolute top-0 end-0 m-3 px-3 py-1 fw-bold bg-badge-orange badge-tag">
                  Case Study
                </span>
              </div>

              <div class="p-4 d-flex flex-column res-body">
                <?php if ($date) : ?>
                  <div class="mb-3">
                    <span class="badge rounded-pill px-3 py-2 text-dark bg-badge-blue fs-11 fw-500">
                      <i class="bi bi-calendar3 me-2"></i>
                      <?= esc_html($date); ?>
                    </span>
                  </div>
                <?php endif; ?>

                <?php if ($title) : ?>
                  <h4 class="fw-bold fs-21 lh-14 c-ink mb-3">
                    <?= esc_html($title); ?>
                  </h4>
                <?php endif; ?>

                <?php if ($excerpt) : ?>
                  <p class="text-muted small mb-3 lh-16">
                    <?= esc_html($excerpt); ?>
                  </p>
                <?php endif; ?>

                <?php if ($url) : ?>
                  <div class="pt-2">
                    <a
                      href="<?= esc_url($url); ?>"
                      class="btn btn-brand px-4 py-2 fw-bold rounded-2 fs-14 rb-btn">
                      Read More
                    </a>
                  </div>
                <?php endif; ?>
              </div>

            </div>
          </div>

        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<!-- ===== SECTION 14: RESOURCES ===== -->
<?php /*if(get_field('dynamic_case-study')): ?>
<section class="sec py-5" style="background: #F7F7F5;">
  <div class="container py-4">
    <h2 class="fw-bold mb-5 fs-32 ls-n1 c-ink">Salesforce SMS resources - guides, case studies, and setup help</h2>
    <div class="row g-4">
      <?php
      $resources = [
        ['https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800', 'Case Study'],
        ['https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=800', 'Case Study'],
        ['https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800', 'Case Study'],
        ['https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800', 'Case Study'],
        ['https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?auto=format&fit=crop&q=80&w=800', 'Case Study'],
        ['https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800', 'Case Study'],
      ];
      foreach ($resources as $r): ?>
        <div class="col-lg-4 col-md-6">
          <div class="res-card bg-white border-0 shadow-sm rounded-4 overflow-hidden h-100">
            <div class="position-relative">
              <img src="<?= $r[0] ?>" class="w-100 img-card-h" alt="<?= $r[1] ?>">
              <span class="badge position-absolute top-0 end-0 m-3 px-3 py-1 fw-bold bg-badge-orange badge-tag"><?= $r[1] ?></span>
            </div>
            <div class="p-4 d-flex flex-column res-body">
              <div class="mb-3">
                <span class="badge rounded-pill px-3 py-2 text-dark bg-badge-blue fs-11 fw-500"><i class="bi bi-calendar3 me-2"></i>Jan 5, 2025</span>
              </div>
              <h4 class="fw-bold mb-4 fs-21 lh-14 c-ink">So how did the classical Latin become so incoherent</h4>
              <p class="case-study">Read our success story to see how we leveraged Salesforce Sales Cloud and Pardot to achieve our client’s business goals.</p>
              <strong class="case-study">Salesforce Sales Cloud and Salesforce Pardot</strong>
              <div class="mt-auto">
                <a href="#" class="btn btn-brand px-4 py-2 fw-bold rounded-2 fs-14 rb-btn" style="color:#fff; background:#C8654E;">Read More</a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; */ ?>
<style>
  #app-features h2,
  h2 {
    line-height: 26px;
  }

  h2.fw-bold.mb-5.fs-32.ls-n1.c-ink {
    line-height: 38px;
  }

  strong.case-study {
    font-weight: 600;
    font-style: Italic;
    line-height: 100%;
    letter-spacing: 0px;
    margin-bottom: 15px;
    color: #356DB2;
    font-size: 13px;
  }

  p.case-study {
    font-size: 14px;
    color: #5A7184;
  }

  .hiw-slide-icon .bi {
    color: #0057B8;
  }

  .hiw-slide-icon {
    background: #fff;
  }

  #cta-bar-13 .ai-cta-btns {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: flex-end;
    gap: 12px;
  }

  .btn-white-solid {
    background: #fff;
    border: 2px solid #fff;
    border-radius: 8px;
    padding: 9px 22px;
    font-weight: 700;
    font-size: 13.5px;
    text-decoration: none;
    transition: all .2s;
    white-space: nowrap;
    display: inline-flex;
    align-items: center;
  }

  .btn-white-outline:hover {
    background: rgba(255, 255, 255, 0.12);
    border-color: #fff;
  }

  .btn-white-outline {
    background: transparent;
    color: #fff;
    border: 2px solid rgba(255, 255, 255, 0.5);
    border-radius: 8px;
    padding: 9px 22px;
    font-weight: 700;
    font-size: 13.5px;
    text-decoration: none;
    transition: all .2s;
    white-space: nowrap;
    display: inline-flex;
    align-items: center;
  }

  p.mb-0.opacity-75.fs-16 {
    color: #fff;
  }

  div.cmp-award-badge {
    margin-top: 0px !important;
  }

  @media (max-width: 991.98px) {
    #cta-bar-13 .ai-cta-btns {
      justify-content: flex-start;
    }
  }
/* ==========================================================================
   Company logo slider (cmpsl-)
   ========================================================================== */

.cmpsl-wrap {
  /* layout */
  --cmpsl-gutter: 52px;          /* side space reserved for the buttons */
  --cmpsl-btn: 40px;             /* button diameter */
  --cmpsl-logo-h: 55px;          /* max logo height */

  /* colours */
  --cmpsl-btn-bg: #f1f3f7;
  --cmpsl-btn-bg-hover: #e2e6ef;
  --cmpsl-btn-color: #0057b8;
  --cmpsl-btn-shadow: 0 2px 10px rgba(16, 24, 40, .10);

  position: relative;
  padding-top: 0;
  padding-bottom: 0;
  padding-left: var(--cmpsl-gutter);
  padding-right: var(--cmpsl-gutter);
}

/* --------------------------------------------------------------------------
   Track
   -------------------------------------------------------------------------- */

.cmpsl-carousel {
  position: static;              /* buttons position against .cmpsl-wrap */
  margin: 0;
}

.cmpsl-carousel .carousel-inner {
  overflow: hidden;
}

.cmpsl-carousel .carousel-item {
  transition: transform .6s ease-in-out;
}

.cmpsl-carousel .carousel-item .row {
  margin-left: 0;
  margin-right: 0;
  min-height: calc(var(--cmpsl-logo-h) + 10px);
}

.cmpsl-col {
  display: flex;
  align-items: center;
  justify-content: center;
  min-width: 0;
  padding-left: 12px;
  padding-right: 12px;
}

/* --------------------------------------------------------------------------
   Logos
   -------------------------------------------------------------------------- */

.cmpsl-logo {
  display: block;
  width: auto;
  max-width: 100%;
  max-height: var(--cmpsl-logo-h);
  margin: 0 auto;
  object-fit: contain;
  opacity: 1;
  transition: transform .3s ease;
}

.cmpsl-logo:hover {
  transform: scale(1.05);
}

/* --------------------------------------------------------------------------
   Prev / next buttons
   -------------------------------------------------------------------------- */

.cmpsl-wrap .cmpsl-ctrl.carousel-control-prev,
.cmpsl-wrap .cmpsl-ctrl.carousel-control-next {
  position: absolute;
  top: 50%;
  bottom: auto;
  z-index: 5;
  display: flex;
  align-items: center;
  justify-content: center;
  width: var(--cmpsl-btn);
  height: var(--cmpsl-btn);
  margin: 0;
  padding: 0;
  transform: translateY(-50%);
  background: #0057b8;
  border: 0;
  border-radius: 50%;
  box-shadow: var(--cmpsl-btn-shadow);
  opacity: 1;
  transition: background .25s ease;
}

.cmpsl-wrap .cmpsl-ctrl.carousel-control-prev {
  left: calc((var(--cmpsl-gutter) - var(--cmpsl-btn)) / 2);
  right: auto;
}

.cmpsl-wrap .cmpsl-ctrl.carousel-control-next {
  right: calc((var(--cmpsl-gutter) - var(--cmpsl-btn)) / 2);
  left: auto;
}

.cmpsl-wrap .cmpsl-ctrl:hover,
.cmpsl-wrap .cmpsl-ctrl:focus {
  background: var(--cmpsl-btn-bg-hover);
  opacity: 1;
}

.cmpsl-wrap .cmpsl-ctrl:focus-visible {
  outline: 2px solid var(--cmpsl-btn-color);
  outline-offset: 2px;
}

.cmpsl-ctrl-icon {
  margin: 0;
  fill: none;
  stroke: var(--cmpsl-btn-color);
  stroke-width: 2.2;
  stroke-linecap: round;
  stroke-linejoin: round;
}

/* --------------------------------------------------------------------------
   Breakpoints
   -------------------------------------------------------------------------- */

@media (max-width: 991.98px) {
  .cmpsl-wrap {
    --cmpsl-gutter: 48px;
    --cmpsl-logo-h: 50px;
  }
}

@media (max-width: 575.98px) {
  .cmpsl-wrap {
    --cmpsl-gutter: 40px;
    --cmpsl-btn: 34px;
    --cmpsl-logo-h: 46px;
  }

  .cmpsl-col {
    padding-left: 8px;
    padding-right: 8px;
  }
}

/* --------------------------------------------------------------------------
   Accessibility
   -------------------------------------------------------------------------- */

@media (prefers-reduced-motion: reduce) {
  .cmpsl-carousel .carousel-item,
  .cmpsl-logo {
    transition: none;
  }
}
</style>
<script>
(function () {
  function init() {
    var slider = document.getElementById('cmpslCarousel');
    var dataEl = document.getElementById('cmpslData');
    if (!slider || !dataEl) return;

    var logos;
    try {
      logos = JSON.parse(dataEl.textContent);
    } catch (e) {
      return;
    }
    if (!logos || !logos.length) return;

    var inner  = slider.querySelector('.carousel-inner');
    var perRow = null;
    var timer;

    function getPerRow() {
      var w = window.innerWidth;
      if (w < 576) return 1;   // single logo on mobile
      if (w < 768) return 3;
      if (w < 992) return 4;
      return 4;
    }

    function build() {
      var count = getPerRow();
      if (count === perRow) return;
      perRow = count;

      var instance = bootstrap.Carousel.getInstance(slider);
      if (instance) instance.dispose();

      inner.innerHTML = '';

      for (var i = 0; i < logos.length; i += count) {
        var group = logos.slice(i, i + count);

        var item = document.createElement('div');
        item.className = 'carousel-item' + (i === 0 ? ' active' : '');

        var row = document.createElement('div');
        row.className = 'row align-items-center justify-content-center g-3 g-md-4';

        for (var j = 0; j < count; j++) {
          var col = document.createElement('div');
          col.className = 'col';

          if (group[j]) {
            var img = document.createElement('img');
            img.src = group[j].src;
            img.alt = group[j].alt;
            img.className = 'cmpsl-logo';
            col.appendChild(img);
          }
          row.appendChild(col);
        }

        item.appendChild(row);
        inner.appendChild(item);
      }

       bootstrap.Carousel.getOrCreateInstance(slider, {
        interval: 3500,
        ride: 'carousel',
        pause: false,
        touch: true,
        wrap: true
      });
    }

    build();

    window.addEventListener('resize', function () {
      clearTimeout(timer);
      timer = setTimeout(build, 200);
    });
  }

  function waitForBootstrap(tries) {
    if (typeof bootstrap !== 'undefined' && bootstrap.Carousel) {
      init();
    } else if (tries > 0) {
      setTimeout(function () { waitForBootstrap(tries - 1); }, 100);
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', function () { waitForBootstrap(50); });
  } else {
    waitForBootstrap(50);
  }
})();
</script>