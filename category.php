<?php
/**
 * The template for displaying category archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @package mortar
 */

get_header('sms');

if (!is_front_page()) {
  // Breadcrumb template (if needed)
  // Egns\Helper\Egns_Helper::egns_template_part('breadcrumb', 'templates/breadcrumb-archive');
}
?>
<style>
a {
    text-decoration: none !important;
}
html, body {
  overflow-x: hidden;
}
#categorySearch{
padding:10px 0 10px 0;
}
.link a {
    margin-top: 0px !important;
}
</style>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
  /*......... Hero Section.........*/
  .hero {
    background: url("/wp-content/uploads/2026/05/SMS-Blog-Banner-BG.webp") no-repeat center / cover !important;
    text-align: center !important;
    padding: 80px 20px !important;
}

  .hero h1 {
    font-size: 3.75rem;
    font-weight: 700;
  }

  .hero h1 .highlight {
    background: linear-gradient(90deg, #003773, #0A86C6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

  .hero p {
    font-size: 1rem;
    max-width: 650px;
    margin: 50px auto 30px;
    color: #333;
    font-weight: 650;
  }

  /*........Search section........*/
  .blog-search-filter .input-group {
    background: #EFEFEF;
    height: 50px;
  }

  .blog-search-filter input.form-control {
    background: transparent;
    box-shadow: none;
    font-size: 18px !important;
    color: #013975;
  }

  .blog-search-filter .ps-3 {
    padding-left: .5rem !important;
  }

  .bi-search::before {
    background: white;
    padding: 10px;
    border-radius: 20px;
  }

  .blog-search-filter .input-group-text i {
    font-size: 16px;
    color: #555;
  }

  .rounded-pill {
    border-color: #003773 !important;
    background-color: #f4f6f7;
  }

  input::placeholder {
    color: #003773 !important;
    font-size: 15px;
    /* Custom color */

  }

  .blog-search-filter select.form-select {
    height: 50px;
    font-size: 18px;
    padding-left: 20px;
    color: #013975;
    background: #EFEFEF;
    border-color: #003773;
  }

  .blog-search-filter select {
    display: block !important;
    visibility: visible !important;
  }
	
   .form-control:focus{
    
    background-color:transparent !important;
    box-shadow: none !important;
    }

  /*......... Category cards sections.........*/

  .card {
    background: white;
    border-radius: 6px;
    padding: 15px;
  }

  .card:hover {
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12) !important;
  }

  .card-title {
    font-size: 16px;
    Text-transform:none;
  }

   .card-btn {
    background: #0D4B78;;
    border:#0D4B78;;
    font-size: 12px;
    padding: 8px 10px;
    font-weight: 600;
    border-radius:9px;
}

.card-btn:hover{
background-color: #003773;
border:#003773
}
  .text-small {
    font-size: 12px !important;
  }

  .card img {
    border-radius: 10px;
  }

  .tag {
    background: #f6d4d4;
    color: #a23d3d;
    padding: 2px 8px;
    border-radius: 4px;
    font-size: 12px;
  }

  .desc {
    font-size: 14px;
    color: #555;
  }
  
  .author{
   border-top:1px solid #969696 !important;
   }

  .author img {
    width: 40px;
    border-radius: 20px;
    height:40px;
  }

  .read-btn img {
    width: 14px;
    height: 14px;
    margin-left: 6px;
  }

  .load-btn {
    background: #0D4B78;
    border: #0D4B78;
    font-size: 12px;
    padding: 8px 10px;
    font-weight: 600;
    border-radius: 9px;
  }

  /*........Footer section........*/
   @media (max-width: 576px) {
   .custom-footer1 h2 {
    font-size: 35px !important;
  }
  
.hero h1 {
    font-size: 3.5rem;
    
}

}

  
  .custom-footer1 {
    background: linear-gradient(90deg, #0A86C6 0%, #0D4B78 100%);
    border-radius: 12px;
    color: #fff;
    text-align: center;
    padding: 60px 81px;
    max-width: 1231px;
    margin: 50px auto;
  }

  .custom-footer1 h2 {
    font-size: 40px;
    font-weight: 600;
    margin-bottom: 40px;
    color: #fff;
  }

  .custom-footer1 p {
    font-size: 20px;
    margin-bottom: 40px;
  }

  .custom-footer1 .btn-demo {
    background: #fff;
    color: #000;
    font-weight: 500;
    font-size: 12px;
    padding: 10px 18px;
    border-radius: 20px;
    border: none;
    transition: 0.3s ease;
  }

  .custom-footer1 .btn-demo:hover {
    background: #f1f1f1;
  }
</style>

<!-- .......... Hero Section .......... -->
<section class="hero">
  <div class="container">
    <h1><span class="highlight">
      <?php
      $current_cat = get_queried_object(); // gets current category object
      if ($current_cat && isset($current_cat->name)) {
          echo esc_html($current_cat->name);
      }
      ?>
    </span></h1>
    <p>
      <?php
      if ($current_cat && isset($current_cat->term_id)) {
          echo category_description($current_cat->term_id);
      }
      ?>
    </p>
  </div>
</section>



<!-- Category Search Bar -->
<div class="container py-5 pb-0">
<div class="container py-5 pb-0 blog-search-filter">
<div class="col-md-6 text-start mb-3 mb-md-0 px-0">
  <!-- Search Form -->
  <form role="search" method="get" class="d-flex position-relative" action="<?php echo home_url('/'); ?>" onsubmit="return false;">
    <div class="input-group rounded-pill border w-100">
      <span class="input-group-text bg-transparent border-0 ps-2">
        <i class="bi bi-search"></i>
      </span>
      <input type="search" id="categorySearch" name="s"
       class="form-control border-0 rounded-pill"
       placeholder="Search blog posts"
       value="<?php echo get_search_query(); ?>">
    </div>
  </form>
</div></div>


    <!-- .......... Category cards sections .......... -->
    <div class="container py-5">
    <div id="searchStatus" class="mb-4 d-none">
    <h4 style="color: #003773;">Search results for: <span id="searchTerm"></span></h4>
  </div>
      <div class="row g-4" id="cardGrid">
        <?php
        // Fetch ALL posts in this category
        $args = array(
          'post_type' => 'post',
          'posts_per_page' => -1,
          'cat' => get_queried_object_id(), // only current category
        );
        $query = new WP_Query($args);
        $count = 0;

        if ($query->have_posts()):
          while ($query->have_posts()):
            $query->the_post();
            $count++; ?>
            <div class="col-md-6 col-lg-4 card-item <?php echo ($count > 6) ? 'd-none' : ''; ?>">
              <div class="card h-100 shadow-sm">
                <?php if (has_post_thumbnail()): ?>
                 <a href="<?php the_permalink(); ?>">  <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>"></a>
                <?php endif; ?>
                <div class="card-body d-flex flex-column">
                  <div class="d-flex align-items-center mb-2 small text-muted gap-4">
                    <span class="tag"><?php echo esc_html($current_cat->name); ?>
                    </span>

                    <span class="text-small"><i
                        class="bi bi-calendar-event-fill me-2"></i><?php echo get_the_date('d M Y'); ?></span>
                  </div>
                 <a href="<?php the_permalink(); ?>">  <h6 class="card-title fw-bold text-dark"><?php the_title(); ?></h6></a>
                  <p class="card-text desc flex-grow-1"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                   <div class="d-flex author justify-content-between align-items-center border-top pt-3">
                <div class="d-flex align-items-center gap-3">
                 <img src="<?php $author_id = get_the_author_meta('ID'); 
                 echo get_field('author_user_image', 'user_' . $author_id) ?>">
                  <div class="small">
                    <div><strong style="font-size:11px;"><?php the_author(); ?></strong></div>
                    <div class="text-muted text-small" style="font-size:12px">
        <?php
        $author_id = get_the_author_meta('ID'); // current post author ID
echo get_field('author_user_designation', 'user_' . $author_id);
?>
      </div>
                      </div>
                    </div>
                    <a href="<?php the_permalink(); ?>"
                      class="btn card-btn btn-primary btn-sm d-flex align-items-center read-btn" style="font-size:10px; background: #0057b8 !important;">
                      Read More <img src="<?php echo home_url(); ?>/wp-content/uploads/2025/11/Frame-1.png" alt="icon"
                        width="12" height="12">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile;
          wp_reset_postdata();
        else:
          echo '<p>No posts found in this category.</p>';
        endif; ?>
      </div>

      <div class="text-center mt-4">
        <button class="btn btn-secondary load-btn mx-auto" id="loadMoreBtn">Load more</button>
      </div>
    </div>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const searchInput = document.getElementById("categorySearch");
        const loadBtn = document.getElementById("loadMoreBtn");
        const cardGrid = document.getElementById("cardGrid");
        const searchStatus = document.getElementById("searchStatus");
        const searchTermDisp = document.getElementById("searchTerm");
        const cards = document.querySelectorAll("#cardGrid .card-item");
        
        // Create No Results message
        const noResults = document.createElement('div');
        noResults.id = "noResults";
        noResults.className = "col-12 text-center py-5 d-none";
        noResults.innerHTML = '<h3 style="color: #003773;">No matching blog posts found.</h3>';
        cardGrid.appendChild(noResults);

        let visibleCount = 6;
        const increment = 6;

        function updateVisibility() {
          const query = searchInput.value.toLowerCase().trim();
          let matchCount = 0;

          if (query.length > 0) {
          
          // Show "Search Results" header
        searchStatus.classList.remove("d-none");
        searchTermDisp.textContent = searchInput.value;
            // Hide "Load More" button when searching
            loadBtn.style.display = "none";
            noResults.classList.add("d-none");
            
            cards.forEach(card => {
              const titleElement = card.querySelector(".card-title");
              const descElement = card.querySelector(".desc");
              
              const title = titleElement ? titleElement.textContent.toLowerCase() : "";
              const desc = descElement ? descElement.textContent.toLowerCase() : "";

              if (title.includes(query) || desc.includes(query)) {
                card.classList.remove("d-none");
                card.style.display = ""; // Reset inline display
                matchCount++;
              } else {
                card.classList.add("d-none");
                card.style.display = "";
              }
            });

            if (matchCount === 0) {
              noResults.classList.remove("d-none");
               searchTermDisp.textContent = `"${searchInput.value}" (No results)`;
        } else {
          searchTermDisp.textContent = `"${searchInput.value}" (${matchCount} found)`;
            }
          } else {
            // Natural state (no search)
            searchStatus.classList.add("d-none");
            noResults.classList.add("d-none");
            cards.forEach((card, index) => {
              card.style.display = "";
              if (index < visibleCount) {
                card.classList.remove("d-none");
              } else {
                card.classList.add("d-none");
              }
            });

            if (visibleCount >= cards.length) {
              loadBtn.style.display = "none";
            } else {
              loadBtn.style.display = "block";
              loadBtn.style.margin = "0 auto";
            }
          }
        }

        // Event Listeners
        searchInput.addEventListener("input", updateVisibility);
        
        // Prevent form from reloading the page
        const searchForm = searchInput.closest("form");
        if (searchForm) {
            searchForm.addEventListener("submit", function(e) {
                e.preventDefault();
                return false;
            });
        }

        loadBtn.addEventListener("click", function () {
          visibleCount += increment;
          updateVisibility();
        });

        // Initialize state
        updateVisibility();
      });
    </script>

    <!--Custom Footer Section -->
    <div class="custom-footer1 p-4 p-sm-5">
      <h2>Reach, engage, and convert with AI-powered multichannel messaging on Salesforce.</h2>
      <p>Speak with our experts.</p>
       <button class="btn btn-demo" onclick="window.open('https://360smsapp.com/contact-us/', '_blank')">
    Book 1:1 Demo
</button>

    </div></div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php
    get_footer('sms');
    ?>