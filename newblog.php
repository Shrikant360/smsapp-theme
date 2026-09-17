<?php
/*
Template Name:New Blog
*/
get_header('sms'); 
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
a{
text-decoration:none;
}
html, body {
  overflow-x: hidden;
}
.link a {
    margin-top: 0px !important;
}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<?php
// Fetch all posts and pass them to JS
$posts = get_posts(array(
  'post_type'      => 'post',
  'posts_per_page' => -1, // load all (can limit if many posts)
  'post_status'    => 'publish'
));

$post_data = array();
foreach ($posts as $p) {
  $post_data[] = array(
    'title' => get_the_title($p->ID),
    'url'   => get_permalink($p->ID)
  );
}
?>
<script>
  const posts = <?php echo json_encode($post_data); ?>;
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
  const searchInput = document.getElementById("blog-search");
  const resultsBox = document.getElementById("search-results");

  searchInput.addEventListener("keyup", function(e) {
    const query = this.value.toLowerCase();
    resultsBox.innerHTML = "";

    if (query.length < 2) {
      resultsBox.style.display = "none";
      return;
    }

    const filtered = posts.filter(post => post.title.toLowerCase().includes(query));

    if (filtered.length === 0) {
      resultsBox.innerHTML = `<p class="no-results">No results found</p>`;
      resultsBox.style.display = "block";
      return;
    }

    filtered.forEach(post => {
      const a = document.createElement("a");
      a.href = post.url;
      a.textContent = post.title;
      resultsBox.appendChild(a);
    });

    resultsBox.style.display = "block";
  });

  // Enter -> redirect to first result
  searchInput.addEventListener("keypress", function(e) {
    if (e.key === "Enter") {
      e.preventDefault();
      const firstResult = resultsBox.querySelector("a");
      if (firstResult) {
        window.location.href = firstResult.href;
      }
    }
  });

  // Hide on outside click
  document.addEventListener("click", function(e) {
    if (!e.target.closest(".search-form")) {
      resultsBox.style.display = "none";
    }
  });
});
</script>


<style>

  /*......... Hero Section.........*/
  h1,h2,h3,h4,h5,h6{
text-transform: none !important;
}
  
section.hero {
    background: url("/wp-content/uploads/2026/05/SMS-Blog-Banner-BG.webp") no-repeat center center / cover !important;
    text-align: center !important;
    padding: 100px 20px !important;
}

  .hero h1 {
    font-size: 2.8rem;
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

  /* Email + Button container */
  .hero .email-box, .hero .blog-email-area {
    display: flex;
    justify-content: center;
    align-items: center;
    background: #fff;
    border-radius: 50px;
    padding: 5px 7px;
    max-width: 420px;
    margin: 0 auto;
    box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.15);
  }

  .hero .email-box input{
    border: none;
    outline: none;
    flex: 1;
    padding: 12px 18px;
    border-radius: 50px;
    font-size: 0.95rem;
  }

  .hero .email-box button{
    background: linear-gradient(90deg, #003773, #0A86C6);
    color: #fff;
    border: none;
    border-radius: 50px;
    padding: 10px 25px;
    margin-left: 5px;
    font-weight: 500;
    transition: 0.3s;
  }

.hero .newsletter-submit-button{
    right: -175px;
    position: relative;
    top: -48px;
}
}
  .hero .email-box button:hover {
    background-color: #00264d;
  }
  
  #email_error2{
  position:relative;
  top: 45px;
  }

@media  (max-width: 600px) {
  .hero .newsletter-submit-button{
    right: 0px;
    position: relative;
    top: 0px;
    margin-top:6px !important;
}
 #email_error2{
  position:relative;
  top: 86px;
  }

}
  /*........Search section........*/
  .blog-search-filter .input-group {
    background: #EFEFEF;
    height: 50px;
  }

  .blog-search-filter input.form-control {
    background: transparent;
    box-shadow: none;
    font-size: 18px;
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
  
  .rounded-pill{
    border-color:#003773 !important;
    }
    
    input::placeholder {
 	color: #003773 !important;  /* Custom color */
  	
	}

  .blog-search-filter select.form-select {
    height: 50px;
    font-size: 18px;
    padding-left: 20px;
    color: #013975;
    background: #EFEFEF;
    border-color:#003773;
  }

  .blog-search-filter select {
    display: block !important;
    visibility: visible !important;
  }
  
  /* Search results dropdown */
.search-results-box {
  position: absolute;
  top: 55px; /* below search bar */
  left: 0;
  right: 0;
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 12px;
  max-height: 250px; /* ~5 items */
  overflow-y: auto;
  box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  z-index: 999;
  display: none;
  padding:5px;
}

.search-results-box a {
  display: block;
  padding: 10px 15px;
  color: #333;
  text-decoration: none;
  font-size: 15px;
  border-bottom: 1px solid #f0f0f0;
}

.search-results-box a:last-child {
  border-bottom: none;
}

.search-results-box a:hover {
  background: #f8f9fa;
}

  
 /* Category Dropdown - Seamless UI */


/* Hover / focus states */
.blog-search-filter select.form-select:hover,
.blog-search-filter select.form-select:focus {
  border-color: #0A86C6;
  box-shadow: 0 4px 12px rgba(10, 134, 198, 0.15);
  background: #f9fcff;
}

/* Divider line */
.cat-divider {
  position: absolute;
  top: 50%;
  right: 3rem;
  width: 2px;
  height: 50%;
  background-color: #013975;
  transform: translateY(-50%);
}

/* Custom arrow */
.dropdown-icon {
  position: absolute;
  top: 50%;
  right: 1.2rem;
  transform: translateY(-50%);
  font-size: 14px;
  color: #013975;
  pointer-events: none;
}

/* Dropdown Options */
.blog-search-filter select.form-select option {
  padding: 14px;
  font-size: 14px;
  border-radius: 50px !important; /* smooth list */
  width:fit-content !important;
  max-width:300px !important;
}

/* When opened in Chrome/Edge */
.blog-search-filter select.form-select:focus option {
  background: #f3f9ff;
}

.blog-search-filter select.form-select option:hover,
.blog-search-filter select.form-select option:focus {
  background: #f3f9ff;
  color: #0A86C6;
}



  /*.........Feature Section.......*/
 	
    .featured-img {
  transition: .3s;
}

.featured-img:hover {
  transform: scale(1.02);
  
}


  .featured-img {
    border-radius: 12px;
    width: 100%;
    height: auto;
  }

  .featured-title {
    font-size: 24px;
    font-weight: 600;
    margin-top: 15px;
    color: #111;
  }

  .featured-desc {
    font-size: 15px;
    color: #666;
    margin-top: 10px;
  }

  .meta-info {
    font-size: 13px;
    margin-top: 12px;
    color: #444;
  }

  .meta-info a {
    color: #e63946;
    font-weight: 500;
    text-decoration: none;
  }

  .meta-info i {
    color: #e63946;
    margin-right: 5px;
  }

  .sidebar-post {
    display: flex;
    gap: 0px;
    margin-bottom: 20px;
    padding: 10px 10px 10px 10px;
    border-radius: 8px;
    transition: background 0.3s ease;
    background: #fff;
    border: 1px solid #eee;
  }
  .border{
      border-radius:30px !important;
  }
  .mr-10{
      margin-right:10px;
  }
  .sidebar-post:nth-child(2),
  .sidebar-post:nth-child(4) {
    background: #f1f5ff;
  }

  .sidebar-post:hover {
    background: #f1f5ff;
  }

  .sidebar-post img {
    width: 110px;
    object-fit: cover;
    border-radius: 6px;
  }

  .sidebar-post p {
    font-size: 14px;
    color: #666;
    margin: 0;
    line-height: 1.4;
  }

  .sidebar-category {
    font-size: 14px;
    font-weight: 600;
    color: #0056b3;
    margin-bottom: 5px;
  }

  .divider {
    border-left: 2px solid #969696;
    height: 100%;
  }


  /*.......blog cards Section........*/
  .card {
    background: white;
    border-radius: 6px;
    padding: 15px;
  }

	.card:hover{
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.12) !important;
    }
    
  .card-title {
    font-size: 16px;
  }
  
 
  .card-btn {
    background: #0D4B78;
    border:#0D4B78;
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
    font-size: 12px;
    color: #555;
  }
	
   .author img{
   width:40px;
   border-radius:20px;
   height:40px;
   }
   
   .author{
   border-top:1px solid #969696 !important;
   }

  .read-btn img {
    width: 14px;
    height: 14px;
    margin-left: 6px;
  }
	
    .load-btn{
    background: #0D4B78;
    border: #0D4B78;
    font-size: 12px;
    padding: 8px 10px;
    font-weight: 600;
    border-radius: 9px;
    }
    
    .load-btn:hover{
    background:#003773;
    border:#003773;
    }
    
  /*........Footer section........*/
   @media (max-width: 576px) {
   .custom-footer1 h2 {
    font-size: 40px !important;
  }

.hero h1 {
    font-size: 2.9rem;
    font-weight: 700;
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
    font-weight:500;
    font-size: 12px;
    padding: 10px 18px;
    border-radius: 20px;
    border: none;
    transition: 0.3s ease;
  }

  .custom-footer1 .btn-demo:hover {
    background: #f1f1f1;
  }
  .email-area{
  	max-width: 520px;
    width: 100%;
    margin: 0 auto;
    margin-bottom: 15px;
  }
</style>



<!-- .......... Hero Section .......... -->
<section class="hero">
  <div class="container">
  <div class="row">
   <div class="col-md-12">
    <h1><span class="highlight">Blogs</span> – SMS APP Learning Center</h1>
    <p>
     Learn how AI, automation, and multichannel messaging reshape digital engagement and customer communication on Salesforce—with practical tips, trends, and strategies all in one place.
    </p>

    <!--<form class="email-box">
      <input type="email" placeholder="Enter your work email" required>
      <button type="submit">Book a demo</button>
    </form>*/-->
   
    
    <div class="abc">
    <?php //echo do_shortcode('[book_a_demo_form]'); ?>
   	 </div>
  	 </div>
  	<div>  
  </div>
</section>

<!-- ............Search Section........... -->

<!-- Blog Search & Category Filter Section -->
<section class="blog-search-filter container my-5">
  <div class="row justify-content-between align-items-center">

    <!-- Search Form -->
    <div class="col-md-7 text-start mb-3 mb-md-0">
     <!-- Search Form -->
<form role="search" method="get" class="search-form d-flex position-relative" action="<?php echo home_url('/'); ?>">
  <div class="input-group rounded-pill border w-100">
    <span class="input-group-text bg-transparent border-0 ps-3">
      <i class="bi bi-search"></i>
    </span>
    <input type="search" id="blog-search" class="form-control border-0 rounded-pill"
      placeholder="Search blog posts"
      value="<?php echo get_search_query(); ?>" name="s" autocomplete="off" />
  </div>

  <!-- Results dropdown -->
  <div id="search-results" class="search-results-box"></div>
</form>

    </div>
	
    <!-- Category Dropdown -->
    <div class="col-md-3 text-end">
  <form method="get" action="<?php echo home_url('/'); ?>">
    <div class="position-relative d-inline-block w-100">
      <select class="form-select rounded-pill border pe-5 custom-select" name="cat" onchange="this.form.submit()">
        <option value=""><?php esc_html_e('Select the category', 'textdomain'); ?></option>
        <?php
        $categories = get_categories(array('hide_empty' => true));
        foreach ($categories as $category) {
          $selected = (isset($_GET['cat']) && $_GET['cat'] == $category->term_id) ? 'selected' : '';
          echo '<option value="' . esc_attr($category->term_id) . '" ' . $selected . '>' . esc_html($category->name) . '</option>';
        }
        ?>
      </select>

      <!-- Divider line -->
      <span class="cat-divider"></span>

      <!-- Bootstrap arrow icon -->
      <i class="bi bi-caret-down-fill dropdown-icon"></i>
    </div>
         
      </form>
      
    </div>
  </div>
</section>

<!-- ..........Featured Post Section.......... -->
<div class="container my-4">
  <div class="row">
    <!-- Featured Post -->
    <div class="col-lg-7 ">
      <?php
      // ✅ Post IDs to fetch
      $ids = get_field('post_ids'); //getting postid as string
      $post_ids = explode(',',$ids); //passing as array
      //$post_ids = array(43589, 43040, 42559, 42530); 
      $args = array(
        'post_type'      => 'post',
        'post__in'       => $post_ids,
        'orderby'        => 'post__in', // Keep order as in array
        'posts_per_page' => 5
      );
      $query = new WP_Query($args);

      if ($query->have_posts()) :
        $count = 0;
        while ($query->have_posts()) : $query->the_post();
          if ($count == 0): 
            // First post => Featured
            $img = get_the_post_thumbnail_url(get_the_ID(), 'large') ?: 'https://via.placeholder.com/700x400';
            $category = get_the_category();
            ?>
            <a href="<?php the_permalink(); ?>" class="text-decoration-none d-block">
              <img src="<?php echo esc_url($img); ?>" class="featured-img" alt="<?php the_title_attribute(); ?>">
              <h3 class="featured-title text-center"><?php the_title(); ?></h3> </a>
              <p class="featured-desc text-center text-dark"><?php echo wp_trim_words(get_the_excerpt(), 30, '...'); ?></p></p>
              <div class="meta-info text-center">
                By <span style="color:#C8654E;"><strong><?php the_author(); ?></strong></span>
                <?php if (!empty($category)) : ?>
                  in <span style="color:#C8654E;"><strong><?php echo esc_html($category[0]->name); ?></strong></span>
                <?php endif; ?>
                <span class="ms-3"><i class="bi bi-clock-fill" style="color:#C8654E;"></i> <?php echo get_the_date('d M Y'); ?></span>
              </div>
           
          <?php
          endif;
          $count++;
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>

    <!-- Divider -->
    <div class="col-lg-1 d-none d-lg-flex justify-content-center p-0">
      <div class="divider"></div>
    </div>

    <!-- Sidebar Posts -->
    <div class="col-lg-4 p-2 p-sm-0 p-lg-0">
      <?php
      if ($query->have_posts()) :
        $count = 0;
        while ($query->have_posts()) : $query->the_post();
          if ($count > 0): // Sidebar posts (skip first)
            $img = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail') ?: 'https://via.placeholder.com/90x70';
            $category = get_the_category();
            ?>
            <a href="<?php the_permalink(); ?>" class="sidebar-post d-flex mb-3 text-decoration-none align-items-center">
              <img src="<?php echo esc_url($img); ?>" alt="<?php the_title_attribute(); ?>" class="mr-10">
              <div class="ms-2">
                <?php if (!empty($category)) : ?>
                  <div class="sidebar-category"><?php echo get_the_title(); ?></div>
                <?php endif; ?>
                <p class="m-0 text-dark">
  <?php 
    $excerpt = get_the_excerpt();
    $char_limit = 50; // set number of characters you want
    if (mb_strlen($excerpt) > $char_limit) {
        $excerpt = mb_substr($excerpt, 0, $char_limit) . '...';
    }
    echo esc_html($excerpt);
  ?>
</p>
              </div>
            </a>
          <?php
          endif;
          $count++;
        endwhile;
      endif;
      wp_reset_postdata();
      ?>
    </div>
  </div>
 <hr class="mt-5" style="border-top: 2px solid #969696; opacity: 1;">
</div>


<!-- ..............Blog Cards Section............... -->
<div class="container py-5">
  <div class="row g-4" id="cardGrid">
    <?php
    // Fetch ALL posts once
    $args = array(
      'post_type'      => 'post',
      'posts_per_page' => -1, // get all
      'post_status'    => 'publish'
    );
    $query = new WP_Query($args);
    $count = 0;

    if ($query->have_posts()):
      while ($query->have_posts()): $query->the_post();
        $count++; ?>
        <div class="col-md-6 col-lg-4 card-item mb-4 <?php echo ($count > 6) ? 'd-none' : ''; ?>">
          <div class="card h-100 shadow-sm">
            <?php if (has_post_thumbnail()): ?>
             <a href="<?php the_permalink(); ?>"> <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top" alt="<?php the_title(); ?>"></a>
            <?php endif; ?>
            <div class="card-body d-flex flex-column">
              <div class="d-flex align-items-center mb-2 small text-muted gap-4">
                <span class="tag">
                  <?php $category = get_the_category(); echo $category ? esc_html($category[0]->name) : ''; ?>
                </span>
                <span class="text-small "><i class="bi bi-calendar-event-fill me-2"></i><?php echo get_the_date('d M Y'); ?></span>
              </div>
             <a href="<?php the_permalink(); ?>" class="text-dark"> <h6 class="card-title fw-bold"><?php the_title(); ?></h6></a>
              <p class="card-text desc flex-grow-1"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
              <div class="d-flex author justify-content-between align-items-center border-top pt-3">
                <div class="d-flex align-items-center gap-2">
                 <img src="<?php $author_id = get_the_author_meta('ID'); 
                 echo get_field('author_user_image', 'user_' . $author_id) 
                 ?>">
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
                <a href="<?php the_permalink(); ?>" style="font-size:10px; background: #0057b8 !important;" class="btn card-btn btn-primary btn-sm d-flex align-items-center read-btn">
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

  <div class="text-center mt-4">
    <button class="btn btn-secondary load-btn" id="loadMoreBtn">Load more</button>
  </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const cards = document.querySelectorAll("#cardGrid .card-item");
  const loadMoreBtn = document.getElementById("loadMoreBtn");
  let visibleCount = 6; // initially show 6
  const increment = 6;  // load 6 more each time

  loadMoreBtn.addEventListener("click", function() {
    for (let i = visibleCount; i < visibleCount + increment; i++) {
      if (cards[i]) {
        cards[i].classList.remove("d-none");
      }
    }
    visibleCount += increment;

    if (visibleCount >= cards.length) {
      loadMoreBtn.style.display = "none";
    }
  });
});
</script>
<!-- Footer Section -->
<div class="custom-footer1 p-4 p-sm-5">
  <h2>Reach, engage, and convert with AI-powered multichannel messaging on Salesforce.</h2>
  <p>Speak with our experts.</p>
  <button class="btn btn-demo" onclick="window.open('https://360smsapp.com/contact-us/', '_blank')">
    Book 1:1 Demo
</button>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php get_footer('sms'); ?>