<?php

/*
 * This is the child theme for  theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
 
 add_action('init', function () {
 
    // Check if cookie is already set
    if (!isset($_COOKIE['first_touch'])) {
 
        $landing_page = isset($_SERVER['REQUEST_URI']) ? sanitize_text_field($_SERVER['REQUEST_URI']) : '';
        $referrer     = isset($_SERVER['HTTP_REFERER']) ? sanitize_text_field($_SERVER['HTTP_REFERER']) : '';
        $utm = [
            'utm_source'   => isset($_GET['utm_source']) ? sanitize_text_field($_GET['utm_source']) : '',
            'utm_medium'   => isset($_GET['utm_medium']) ? sanitize_text_field($_GET['utm_medium']) : '',
            'utm_campaign' => isset($_GET['utm_campaign']) ? sanitize_text_field($_GET['utm_campaign']) : '',
        ];
 
        $data = [
            'landing_page' => $landing_page, 
            'referrer'     => $referrer,
            'utm'          => $utm,
        ];
 
        // Store as JSON - IMPORTANT: Set the cookie BEFORE any output
        setcookie(
            'first_touch',
            json_encode($data),
            time() + (1 * 60),  //1 min
            '/',
            '', // domain
            true, // secure - only over HTTPS
            true  // httponly
        );
    }
 
});
$landing_page = '';
                    $referrer = '';
                    $utm_source = '';
                    $utm_medium = '';
                    $utm_campaign = '';

                    // If cookie exists, use first-touch data
                    if (isset($_COOKIE['first_touch'])) {
                        $first_touch = json_decode(stripslashes($_COOKIE['first_touch']), true);

                        if (is_array($first_touch)) {
                            $landing_page = isset($first_touch['landing_page']) ? $first_touch['landing_page'] : '';
                            $referrer = isset($first_touch['referrer']) ? $first_touch['referrer'] : '';

                            if (isset($first_touch['utm']) && is_array($first_touch['utm'])) {
                                $utm_source = isset($first_touch['utm']['utm_source']) ? $first_touch['utm']['utm_source'] : '';
                                $utm_medium = isset($first_touch['utm']['utm_medium']) ? $first_touch['utm']['utm_medium'] : '';
                                $utm_campaign = isset($first_touch['utm']['utm_campaign']) ? $first_touch['utm']['utm_campaign'] : '';
                            }
                        }

                        // If cookie not yet there (first visit), fall back to current URL
                    } else {
                        $landing_page = isset($_SERVER['REQUEST_URI']) ? sanitize_text_field($_SERVER['REQUEST_URI']) : '';
                    }
 
// Remove Yoast schema via output buffering on homepage
add_action('template_redirect', 'remove_yoast_schema_output_buffer');
function remove_yoast_schema_output_buffer()
{
  if ((is_front_page() || is_home() || is_page()) && !is_page('blog')) {
    ob_start('clean_yoast_schema_from_homepage');
  }
}

function clean_yoast_schema_from_homepage($html)
{
  // Remove all Yoast schema scripts
  $html = preg_replace('/<script[^>]*yoast-schema-graph[^>]*>.*?<\/script>/s', '', $html);
  return $html;
}

// Clean up the buffer
add_action('wp_footer', 'end_yoast_schema_buffer', 99);
function end_yoast_schema_buffer()
{
  if ((is_front_page() || is_home() || is_page()) && !is_page('blog')) {
    ob_end_flush();
  }
}

// add_action( 'wp_enqueue_scripts', 'thegem_child_enqueue_styles' );
// function thegem_child_enqueue_styles() {
//     wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
//     wp_enqueue_style( 'child-style',
//         get_stylesheet_directory_uri() . '/style.css',
//         array('parent-style')
//     );
// }

// Remove ALL parent enqueued styles first, then re-add in correct order
add_action( 'wp_enqueue_scripts', 'thegem_child_enqueue_styles', 999 );
function thegem_child_enqueue_styles() {

    $parent_version = wp_get_theme( get_template() )->get('Version');
    $child_css      = get_stylesheet_directory() . '/style.css';

    // 1. Parent style
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css',
        array(),
        $parent_version
    );

    // 2. Child style — loads last, cache busted, depends on parent
    wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'parent-style' ),
        file_exists( $child_css ) ? filemtime( $child_css ) : '1.0'
    );
}

// Our custom post type function
function create_posttype() {

  register_post_type( 'youtubevideos',
    // CPT Options
    array(
      'labels' => array(
        'name' => __( 'Youtube Videos' ),
        'singular_name' => __( 'Youtube Video' )
      ),
      'public' => true,
      'has_archive' => false,
      'publicly_queryable'  => false,
      'rewrite' => array('slug' => 'youtubevideos'),
      'show_in_rest' => true,

    )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

function youtubeShortcode() {
 $args = array(  
  'post_type' => 'youtubevideos',
  'post_status' => 'publish',
  'posts_per_page' => 9, 
  'paged' => get_query_var('paged') ? get_query_var('paged') : 1

);

 $loop = new WP_Query( $args ); 
 echo '<div id="youtubevideo">';    
 while ( $loop->have_posts() ) : $loop->the_post(); 
  echo '<div class="videocontent vc_col-sm-4">';
         // 
  the_content(); 
  echo '<h2>'.get_the_title().'</h2>';
  echo '</div>';
endwhile;


echo '</div>';
echo '<div class="navigation">';
    $big = 999999999; // need an unlikely integer
    echo paginate_links( array(
      'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
      'format' => '?paged=%#%',
      'current' => max( 1, get_query_var('paged') ),
      'total' => $loop->max_num_pages
    ) );
   // echo do_shortcode('[ajax-loadmore-button]');
    echo '</div>';
    wp_reset_postdata(); 
  }
  add_shortcode('youtubevid', 'youtubeShortcode');

// Register Custom Post Type
  function webniar_post_type() {

   $labels = array(
    'name'                  => _x( 'Webinar Post Types', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Webinar', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Webniar', 'text_domain' ),
    'name_admin_bar'        => __( 'Post Type', 'text_domain' ),
    'archives'              => __( 'Item Archives', 'text_domain' ),
    'attributes'            => __( 'Item Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Webniars', 'text_domain' ),
    'add_new_item'          => __( 'Add New Webniar', 'text_domain' ),
    'add_new'               => __( 'Add New', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'view_items'            => __( 'View Webniars', 'text_domain' ),
    'search_items'          => __( 'Search Webniar', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into Webniar', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Webniars list', 'text_domain' ),
    'items_list_navigation' => __( 'Webniars list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
   $args = array(
    'label'                 => __( 'Webinar', 'text_domain' ),
    'description'           => __( 'Post Type Description', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    'taxonomies'            => array( 'webniar_category', 'web_post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'rewrite' => array(
     'slug'   => '',
     'with_front'  => false,
   ),
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
   register_post_type( 'webniar', $args );

 }
 add_action( 'init', 'webniar_post_type', 0 );

 function formshortcode(){
   $plink = 
   get_the_permalink();
   $id = get_the_ID();
   $title = get_permalink();
   ?>


   <div class="test">

    <script> 

//var idd = <?php //echo $id;?>;
function errorElement(text) {
  var newSpan = document.createElement("SPAN");
  newSpan.classList.add("error");
  var newContent = document.createTextNode(text);
  newSpan.appendChild(newContent); 
  return newSpan;
}
function validateForm<?php echo $id;?>() {


  var hasError = false;
            //e.preventDefault();            
            var last_name = document.querySelector('.last_name'+<?php echo $id;?>).value;
            var email = document.querySelector('.email'+<?php echo $id;?>).value;
            var company = document.querySelector('.company'+<?php echo $id;?>).value;
            var phone = document.querySelector('.phone'+<?php echo $id;?>).value;
            
            var errorArr = document.querySelectorAll(".error");
            for(var i = 0; i < errorArr.length; i++) {
              var element = errorArr[i];
              element.parentNode.removeChild(element);
            }
            if ( (last_name.trim() != '') && (phone.trim() != '') && (email.trim() != '') && (company.trim() != '')){
             setCookie("page_title","<?php echo $title;?>",30);
             var userEmail=getCookie("page_title");
         //alert(userEmail);
       }

       if (last_name.trim() == '') {
        document.querySelector('.last_name'+<?php echo $id;?>).parentNode.appendChild(errorElement('Required Field'));
        hasError = true;
      }

      if (phone.trim() == '') {
        document.querySelector('.phone'+<?php echo $id;?>).parentNode.appendChild(errorElement('Required Field'));
        hasError = true;
      }
      if (email.trim() == '') {
        document.querySelector('.email'+<?php echo $id;?>).parentNode.appendChild(errorElement('Required Field'));
        hasError = true;
      } else {
        var regEx = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        var validEmail = regEx.test(email);
        if (!validEmail) {
          document.querySelector('.email'+<?php echo $id;?>).parentNode.appendChild(errorElement('Enter a valid email'));
          hasError = true;
        }
      }
      if (company.trim() == '') {
        document.querySelector('.company'+<?php echo $id;?>).parentNode.appendChild(errorElement('Required Field'));
        hasError = true;
      }


      return !hasError;



    }

  </script>

  <script>
    document.querySelector('#title').value = localStorage.getItem('utm') ;
    document.querySelector('.gclid').value = localStorage.getItem('gclid') ;
  </script>

  <form  action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST" onsubmit="return validateForm<?php echo get_the_ID();?>()" class="Form<?php echo $id;?>">
    <input type=hidden name="oid" value="00D2v000002Eqpv">
    <!-- Put Return URL below -->
    <input type=hidden name="retURL" value="<?php echo $plink;?>">
    <div class="flex">
      <div>
        <label for="first_name">First Name</label>
        <input  id="last_name<?php echo $id;?>" name="first_name" type="text" class="last_name<?php echo $id;?>"/>
      </div>
      <div>
        <label for="last_name">Last Name</label>
        <input  id="first_name<?php echo $id;?>" name="last_name" type="text"/>
      </div>
    </div>
    <div class="flex">

      <div style="width:100%;">
        <label for="email">Email</label>
        <input  id="email<?php echo $id;?>" maxlength="80" name="email" size="20" type="text" class="email<?php echo $id;?>"/>
      </div>
    </div>
    <div class="flex">
     <div>
      <label for="mobile">Mobile</label>
      <input  id="mobile<?php echo $id;?>" maxlength="40" name="phone" size="20" type="text" class="phone<?php echo $id;?>"/>

    </div>
    <div>
      <label for="company">Company</label>
      <input  id="company<?php echo $id;?>" maxlength="40" name="company" size="20" type="text" class="company<?php echo $id;?>"/>
    </div>
	
    <div style="display:none;">
      <!-- Put Deafult Hidden Value of Lead Source as = 'Webinar Recordings' -->
		
      <label for="lead_source">Lead Source</label>
      <select  id="lead_source<?php echo $id;?>" name="lead_source">
       <option value="SEO">SEO</option>

     </select>
   </div>
 </div>
 <input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
 
<input type="hidden" 
       id="lead_source_sub" 
       name="Sub_Lead_Source__c" 
       value="360SMS-Contact Us" />

<input type="hidden" 
       id="Lead_Source_URL__c" 
       name="Lead_Source_URL__c" 
       value="<?php echo esc_url( get_permalink() ); ?>" />
 
 <div class="btn">
  <button type="submit" name="submit" id="sub<?php echo $id;?>">Submit</button>
</div>
</form>
</div>

<?php

}
add_shortcode('formshortcodeval','formshortcode');

//** *Enable upload for webp image files.*/
function webp_upload_mimes($existing_mimes) {
  $existing_mimes['webp'] = 'image/webp';
  return $existing_mimes;
}
add_filter('mime_types', 'webp_upload_mimes');
if ( ! function_exists('manuals_post_type') ) {

// Register Custom Post Type
  function manuals_post_type() {

   $labels = array(
    'name'                  => _x( 'Product Manuals', 'Post Type General Name', 'text_domain' ),
    'singular_name'         => _x( 'Manuals', 'Post Type Singular Name', 'text_domain' ),
    'menu_name'             => __( 'Manuals', 'text_domain' ),
    'name_admin_bar'        => __( 'Post Type Manuals', 'text_domain' ),
    'archives'              => __( 'Item Archives', 'text_domain' ),
    'attributes'            => __( 'Item Attributes', 'text_domain' ),
    'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
    'all_items'             => __( 'All Items', 'text_domain' ),
    'add_new_item'          => __( 'Add New Item', 'text_domain' ),
    'add_new'               => __( 'Add New Manual', 'text_domain' ),
    'new_item'              => __( 'New Item', 'text_domain' ),
    'edit_item'             => __( 'Edit Item', 'text_domain' ),
    'update_item'           => __( 'Update Item', 'text_domain' ),
    'view_item'             => __( 'View Item', 'text_domain' ),
    'view_items'            => __( 'View Items', 'text_domain' ),
    'search_items'          => __( 'Search Item', 'text_domain' ),
    'not_found'             => __( 'Not found', 'text_domain' ),
    'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
    'featured_image'        => __( 'Featured Image', 'text_domain' ),
    'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
    'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
    'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
    'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
    'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
    'items_list'            => __( 'Items list', 'text_domain' ),
    'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
    'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  );
   $args = array(
    'label'                 => __( 'Manuals', 'text_domain' ),
    'description'           => __( 'Post Type Description', 'text_domain' ),
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields' ),
    'taxonomies'            => array( 'manual_category', 'post_tag_manual' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 5,
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'rewrite' => array(
      'with_front' => false,
      'slug'       => 'manual'
    ),
    'has_archive'           => false,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
   register_post_type( 'manual', $args );

 }
 add_action( 'init', 'manuals_post_type', 0 );

}



// the ajax function
add_action('wp_ajax_data_fetch' , 'data_fetch');
add_action('wp_ajax_nopriv_data_fetch','data_fetch');
function data_fetch(){

  $the_query = new WP_Query( array( 'posts_per_page' => -1, 's' => esc_attr( $_POST['keyword'] ), 'post_type' => 'manual' ) );
  if( $the_query->have_posts() ) :
    if( $_POST['keyword']){ 
    ?><ul  class="searchresult">

      <?php

      while( $the_query->have_posts() ): $the_query->the_post(); ?>

        <li><a href="<?php echo esc_url( post_permalink() ); ?>">
            <?php //echo esc_attr( $_POST['keyword']);
            the_title();?></a></li>

          <?php endwhile;
          wp_reset_postdata();  ?></ul>

        <?php }
      endif;

      die();
    }

    function search_form(){
     ?>
     <script>
// jQuery(document).ready(function() {
//   var stickyTop = jQuery('#lsection').offset().top;

//  jQuery(window).scroll(function() {
//  console.log('coming in scroll');
//     var windowTop = jQuery(window).scrollTop();

//     if (stickyTop < windowTop) {
//      jQuery('#lsection').parent().css('position', 'fixed');
//      jQuery('#lsection').parent().css('top', '40px');
//      jQuery('#lsection').parent().css('width', '361px');
//       jQuery('#lsection').parent().css('z-index', '1');
//     console.log('coming in if');

//     } 
//     else {
//     console.log('coming in else');
//       jQuery('#lsection').parent().css('position', 'relative');
//       jQuery('#lsection').parent().css('top', '40');
//    }
//   });
// });

//nikita//        
function sticky_relocate() {
  var window_top = jQuery(window).scrollTop();
  var footer_top = jQuery(".custom-footer").offset().top  - 90;
  var div_top = jQuery('.vc_clearfix').offset().top;
  var div_height = jQuery("#sticky").height();

    var padding = 40;  // tweak here or get from margins etc
    
    if (window_top + div_height > footer_top - padding)
      jQuery('#sticky').css({top: (window_top + div_height - footer_top + padding) * -1})
    else if (window_top > div_top) {
      jQuery('#sticky').addClass('stick');
      jQuery('#sticky').css({top: 95})
    } else {
      jQuery('#sticky').removeClass('stick');

    }
  }

  jQuery(function () {
    jQuery(window).scroll(sticky_relocate);
    sticky_relocate();
  });      


</script>
<script>
   //scrolling-section//         
// jQuery(function () {
// //    alert("hello1");
// jQuery('a[href*="#"]')

//   .not('[href="#"]')
//   .not('[href="#0"]')

//   .click(function(event) {
// //    alert("hello");

//     if (
//       location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
//       && 
//       location.hostname == this.hostname
//     ) {

//       var target = jQuery(this.hash);
//       console.log('target', target);
//       target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');

//       if (target.length) {

//         event.preventDefault();
//         jQuery('html, body').animate({
//           scrollTop: target.offset().top - 115
//         }, 300);
//       }
//     }
//   });
//    var urlget = window.location.href;
//    console.log('urlget', urlget);
// //    let aaa = window.location.href;
// console.log(">>>",urlget.includes('#'));
// if(urlget.includes('#')){
//     let geturlid = urlget.split('#');
//     console.log(">>>",geturlid[0]);
//     let getanchorid = '#'+geturlid[1];
//     console.log(">>>",geturlid[1]);
//     if (geturlid[1] != '') {
//        setTimeout(function(){
//           jQuery('html, body').animate({scrollTop:jQuery('#'+geturlid[1]).offset().top - 115}, 'slow');
//        }, 300);  
//         jQuery('input[class="toggle-box"]').attr('checked','checked');
//     }


// }
// });

jQuery(function () {

  jQuery('a[href*="#"]')

  .not('[href="#"]')
  .not('[href="#0"]')

  .click(function(event) {
//  alert("hello");

if (
  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
  && 
  location.hostname == this.hostname
  ) {

  var target = jQuery(this.hash);
console.log('target', target);
target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');

if (target.length) {

  event.preventDefault();
  jQuery('html, body').animate({
    scrollTop: target.offset().top - 115
  }, 300);
}
}
});
  var urlget = window.location.href;
  console.log('urlget', urlget);
//  let aaa = window.location.href;
console.log(">>>",urlget.includes('#'));
if(urlget.includes('#')){

  let geturlid = urlget.split('#');
  console.log("h1>>>",geturlid[0]);
  let getanchorid = '#'+geturlid ; console.log('dd');
  //  console.log(getanchorid );
  //  console.log("h2>>>",geturlid[1]);

//var df  = jQuery('.'+geturlid[1]).addClass('active');
console.log(geturlid[1]);
var getprp = jQuery('.'+geturlid[1]).parent().prop('className');
var dataatr = jQuery('.'+geturlid[1]).attr('data-ids');
console.log(dataatr);
jQuery('.'+geturlid[1]).parentsUntil('div.'+dataatr).prevAll('input').addClass('active');
jQuery('.'+geturlid[1]).parent().siblings().prevAll().addClass("archive-meta-slide");
jQuery('input.active ').attr('checked','checked'); 

   //$(this).prevAll('input').val() 
   
   
   
   var result = urlget.split('/');
   var final = result[result.length -2];
   console.log('rest'+final);
    //geturlid[1]
    console.log(geturlid[1],'tester');
    if (geturlid[1] != '') {
     setTimeout(function(){
      jQuery('html, body').animate({scrollTop:jQuery('#'+geturlid[1]).offset().top - 115}, 'slow');
      jQuery('input[data-id="'+ geturlid[1]+'"]').attr('checked','checked');

    }, 300);
   }

 }
});

</script>
<script>
   //manualpages
   function openCity(evt, pageName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(pageName).style.display = "block";
    evt.currentTarget.className += " active";
  }

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script>
 function sticky1_relocate() {
  var window_top = jQuery(window).scrollTop();
  var footer_top = jQuery(".custom-footer").offset().top  - 90;
  var div_top = jQuery('.vc_clearfix').offset().top;
  var div_height = jQuery("#sticky1").height();

    var padding = 40;  // tweak here or get from margins etc
    
    if (window_top + div_height > footer_top - padding)
      jQuery('#sticky1').css({top: (window_top + div_height - footer_top + padding) * -1})
    else if (window_top > div_top) {
      jQuery('#sticky1').addClass('stick1');
      jQuery('#sticky1').css({top: 95})
    } else {
      jQuery('#sticky1').removeClass('stick1');

    }
  }

  jQuery(function () {
    jQuery(window).scroll(sticky1_relocate);
    sticky1_relocate();
  });
</script>
<style>
  .toggle-box-region {background-color:#fff; padding:16px 5px;margin-top: 6x;
  }
  .toggle-box {display:none;}
  .toggle-box + label {

   cursor:pointer;
   display:block;

   padding: .3em 0 .3em 5px;
   position:relative;
 }

 .toggle-box + label + div {display:none; margin:0 0 14px;}
 .toggle-box:checked + label:nth-child(n)
 + div {display:block;}

 .toggle-box.cust-text + label:after {
   position:absolute;
   content:"\f0fe";
   font-family:FontAwesome;
   top:.3em;
   right:-11px;
   color:#0085a6;
 }
 .toggle-box.cust-text1 + label:after {
   position:absolute;
   content:"\f0fe";
   font-family:FontAwesome;
   top:.3em;
   right:-25px;
   color:#0085a6;
 }
 .toggle-box + label:after {
   position:absolute;
   content:"\f0fe";
   font-family:FontAwesome;
   top:.3em;
   right:4px;
   color:#0085a6;
 }
 .toggle-box:checked + label {color:#0085a6;}
 .toggle-box:checked + label:after {content:"\f146";}
 .toggle-box-content { color:#000;     padding: 3px 15px;}

 .toggle-box-content ul{
   list-style: none;
   padding-left: 0px;
   margin-top:0px;
 }
 .toggle-box-content li{
   margin: 10px 0px 0px 39px;
 }
 .toggle-box-content.third_align li{
  margin: 10px -15px 0px 15px !important;
}
.toggle-box-content li a{
 text-decoration: none;
 color:  #3c3950;
}

.ex_li{

  cursor: pointer;
  display: block;
  font-weight: bold;
  line-height: 23px;
  padding: .3em 0 .3em 26px;
  position: relative;
}
.ex_li a{
 text-decoration: none;
 color: #555;
}
.toggle-box-region ul{
 list-style: none;
 padding-left: 0px;
}

.toggle-box-region h3{
 padding-left: 25px;
}

html {
  scroll-behavior: smooth;
}

.removeborder .toggle-box-region{
 border:none;border-bottom:none;
}
.removeborder{
 max-width:500px;
}
/*   div#sticky{
  position: -webkit-sticky;
  position: sticky;
  top: 0;  
 
} / /
/* #EXE_MAIN{
   min-height:1200px;
} */
/* #sticky {
  position: sticky;
  position: -webkit-sticky;
  top: 0;
   overflow:auto;
}
#wrapper{
    height: 800px;
} */
div#sticky.stick {
  position: fixed;
  z-index: 10;
  width:361px;
  top: 0 ;
  height: 80vh;
  overflow-y:auto;

}

.single-manual .block-content {
  padding-top: 0px;
}
.toggle-box-region label a{
 color:#3c3950;
}
.post_outer.show {
  display: block;
}
.post_outer {
  position: fixed;
  background: rgba(0,0,0,0.5);
  z-index: 999999999;
  width: 47%;
  / height: 102%; /
  top: 60%;
  left: 26%;
  border-radius: 4px;
  display: none;
}
.post_loader.show {
  display: block;
  position: absolute;
  z-index: 1001;
  opacity: 1;
  left: 50%;
  bottom: 0;
  right: 0;
  top:40%;
  border: 8px solid #f3f3f3;
  border-radius: 50%;
  border-top: 8px solid #3498db;
  width: 40px;
  height: 40px;
  -webkit-animation: spins 2s linear infinite; / Safari /
  animation: spins 2s linear infinite;
}

/ Safari /
@-webkit-keyframes spins {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spins {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/ medium scroll bar /

.medium-scroll::-webkit-scrollbar-track {
  background: #fff;
}

.medium-scroll::-webkit-scrollbar {
 width: 5px;
 transition: all .5s linear;
}

.medium-scroll::-webkit-scrollbar-thumb {
 background-color:#ccc;
 border-radius: 15px;
}

.medium-scroll:hover::-webkit-scrollbar-thumb {
 background-color: #0085a6;
 border-radius: 15px;
}
@media screen and (min-device-width: 768px) and (max-device-width: 900px){
 div#sticky.stick {
  width: 230px;
}}
@media screen and (min-device-width: 920px) and (max-device-width: 1024px){
 div#sticky.stick {
  width: 270px;
}
}
@media screen  and (max-device-width: 600px){
 .page-template-default.page-id-37348 .banner {
  height: 80vh !important;
} }
@media screen  and (max-device-width: 360px){
 .page-template-default.page-id-37348 .banner {
  height: 100vh !important;
} }
@media screen and (min-device-width: 320px) and (max-device-width: 600px){

  .stick {
    position: relative !important;
  }
  .cust_mar{
    margin-top:55px !important;

  }
  div#sticky.stick {
    width: 308px ;
    top:0px !important;
  }
  .banner-cu{
    margin-top:20px;
  }
}
div#sticky1.stick1 {
  position: fixed;
  z-index: 10;
  width:350px;
  height:75vh;
  top: 100px !important;
  overflow-y:auto;
}
h1#headingspace {
  margin: 0px 0px 25px 0px;
  line-height: 45px;
}
@media screen and (min-device-width: 320px) and (max-device-width: 600px){

  div#sticky.stick {
    position: relative !important;
  }
  .stick1{
    position: relative !important;
  }
}
@media only screen and (max-width: 320px){

  .stick {
    position: relative !important;
  }
  .stick1{
    position: relative !important;
  }
}
@media only screen and (max-width: 375px){

  .stick {
    position: relative !important;
  }
  .cust_mar{
    margin-top:85px !important;
  }
  .stick1{
    position: relative !important;
  }

}
@media screen and (min-device-width: 320px) and (max-device-width: 600px){

  div#sticky.stick {
    position: relative !important;
    width: 100% !important;
    height:auto !important;
  }

}
.side-border{
  border:1px #b3b3bb  solid;
}
.widget .searchform input{
        background: #fff;
}
.toggle-box + label + div {
    display: none;
    margin: 0px 8px 18px -2px !important;
}

.toggle-box-content {
    color: #000;
    padding: 3px 8px 2px !important;
}
</style>
<div class="widget widget_search">


  <form class="header-search-form header-search-form--ajax header-search-form--has-keywords searchform " id="header-search-form-1" action="#" method="POST"><input id="searchform" name="keyword" type="text" onkeyup="fetch123()" placeholder="Search Documentation"/></form> </div> <div class="post_outer">
    <span class="post_loader show"></span>
  </div>
  <div id="datafetch"></div>
  <?php
}
add_shortcode('manual_form','search_form');

// add the ajax fetch js
add_action( 'wp_footer', 'ajax_fetch' );
function ajax_fetch() {
  ?>
  <script type="text/javascript">
    function fetch123(){
   //jQuery('#datafetch').html( 'datahhhh' );
   jQuery('.post_outer').addClass('show');
   jQuery.ajax({
     url: '<?php echo admin_url('admin-ajax.php'); ?>',
     type: 'post',
     data: { action: 'data_fetch', keyword: jQuery('#searchform').val() },
     success: function(data) {
      jQuery('.post_outer').removeClass('show');
      jQuery('#datafetch').html(data);
    }
  });

 }
</script>

<?php
}

function sidebarmanuals(){
 ?>
 <style>
 div#sideres .vc_column-inner{
          padding-top: 0px !important;
 }
     .side-border .vc_custom_heading.appheading {
    text-align: center;
    background: #f2f2f2;
    margin: 10px;
    padding: 5px;
        margin-top: 15px;
}
.toggle-box-content li {
    margin: 10px 0px 0px 20px;
}

/*..............*/
.toggle-box-content {
    padding-right: 0px !important;
}
.toggle-box + label {
    padding-right: 28px !important;
    box-sizing: border-box !important;
}
/*..............*/

.toggle-box + label:after,.toggle-box.cust-text + label:after,.toggle-box.cust-text1 + label:after,.toggle-box.cust-text2 + label:after{
    font-family: "bootstrap-icons" !important;
    color: #2196f3;
    content: "\F4F9"; /* plus-circle */
        right: 12px;
}
.toggle-box:checked + label:after {
     font-family: "bootstrap-icons" !important;
    content: "\F2E5"; /* dash-circle */
    color: #f34235;
    right: 12px !important;
}
 </style>
 <div class="toggle-box-region" id="sticky" style="top: 95px;">
   <div class="side-border">
    <div class="vc_custom_heading appheading"><span style="margin-left: 4px; font-weight: 600; color: #7b7e82; font-size: 18px;">Documentation</span></div>
    <div class="installation">
     <input data-id="appExchange" class="toggle-box" id="toggleId-1" type="checkbox">
     <label for="toggleId-1">
      <button class="tablinks cust-button" onclick="openPage(event, 'installation')" id="defaultOpen"><a href="<?php echo site_url(); ?>/manual/appexchange/" data-ids="installation" class="installation">1. Installation</a></button>
    </label>
    <div class="toggle-box-content">
      <input class=" toggle-box cust-text" data-id="where-to-find-salesforce-apps-to-extend-capabilities-of-salesforce-0rg" data-parentid="appExchange" id="toggleId-2" type="checkbox">
      <label for="toggleId-2"><a href="<?php echo site_url(); ?>/manual/appexchange/" data-ids="installation" class="appExchange">1.1. AppExchange</a></label>
      <div class="toggle-box-content">
       <ul>
        <li> <a href="<?php echo site_url(); ?>/manual/appexchange/#where-to-find-salesforce-apps-to-extend-capabilities-of-salesforce-0rg" data-ids="installation" class="where-to-find-salesforce-apps-to-extend-capabilities-of-salesforce-0rg">1.1.1. Where to find Salesforce Apps to extend capabilities of Salesforce Org.?</a> </li>
        <li>
         <input class="toggle-box cust-text1" id="toggleId-3" type="checkbox">
         <label for="toggleId-3" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/appexchange/#what-is-appExchange" data-ids="installation" class="what-is-appExchange">1.1.2. What is AppExchange?</a></label>
         <div class="toggle-box-content third_align">
          <ul>
           <li><a href="<?php echo site_url(); ?>/manual/appexchange/#finding-salesforce-apps-on-appExchange" data-ids="installation" class="finding-salesforce-apps-on-appExchange"> 1.1.2.1. Finding Salesforce Apps on AppExchange</a></li>
           <li><a href="<?php echo site_url(); ?>/manual/appexchange/#what-is-the-significance-of-the-green-chat-button-appearing-in-the-appExchange-listing" data-ids="installation" class="what-is-the-significance-of-the-green-chat-button-appearing-in-the-appExchange-listing">1.1.2.2. What is the significance of the Green chat button appearing in the AppExchange listing?</a></li>
           <li>
            <input class="toggle-box cust-text1" id="toggleId-4" type="checkbox">
            <label for="toggleId-4" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/appexchange/#Choosing-the-Best-App-on-AppExchange" data-ids="installation" class="Choosing-the-Best-App-on-AppExchange">1.1.2.3. Choosing the Best App on AppExchange</a></label>
            <div class="toggle-box-content">
             <ul>
              <li><a href="<?php echo site_url(); ?>/manual/appexchange/#Pricing" class="Pricing" data-ids="installation">1.1.2.3.1. Pricing</a></li>
              <li><a href="<?php echo site_url(); ?>/manual/appexchange/#Latest-Release" class="Latest-Release" data-ids="installation">1.1.2.3.2. Latest Release</a></li>
              <li><a href="<?php echo site_url(); ?>/manual/appexchange/#Description" class="Description" data-ids="installation">1.1.2.3.3. Description</a></li>
              <li><a href="<?php echo site_url(); ?>/manual/appexchange/#Ratings-Reviews" class="Date-of-App-Listing" data-ids="installation">1.1.2.3.4. Ratings &amp; Reviews</a></li>
              <li><a href="<?php echo site_url(); ?>/manual/appexchange/#Date-of-App-Listing" data-ids="installation">1.1.2.3.5. Date of App Listing</a></li>
            </ul>
          </div>
        </li>
        <li>
          <input class="toggle-box cust-text1" id="toggleId-5" type="checkbox">
          <label for="toggleId-5" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/appexchange/#What-is-the-significance-of-the-Get-It-Now-Watch-Demo-and-Test-Drive-options-in-an-AppExchange-listing" class="What-is-the-significance-of-the-Get-It-Now-Watch-Demo-and-Test-Drive-options-in-an-AppExchange-listing" data-ids="installation">1.1.2.4. What is the significance of the Get It Now, Watch Demo, and Test Drive options in an AppExchange listing?</a></label>
          <div class="toggle-box-content">
           <ul>
            <li> <a href="<?php echo site_url(); ?>/manual/appexchange/#Get-It-now" class="Get-It-now" data-ids="installation">1.1.2.4.1. Get It now</a> </li>
            <li> <a href="<?php echo site_url(); ?>/manual/appexchange/#Watch-demo" class="Watch-demo" data-ids="installation">1.1.2.4.2. Watch demo</a> </li>
            <li> <a href="<?php echo site_url(); ?>/manual/appexchange/#Test-Drive" class="Test-Drive" data-ids="installation">1.1.2.4.3. Test Drive</a> </li>
          </ul>
        </div>
      </li>
    </ul>
  </div>
</li>
</ul>
</div>
</div>
</div>
<div class="utility">
 <input data-id="utility-bar" class="toggle-box " id="toggleId-6" type="checkbox">
 <label for="toggleId-6">
  <button class="tablinks cust-button" onclick="openPage(event, 'utility')"><a href="<?php echo site_url(); ?>/manual/utility-bar/" data-ids="utility" class="utility">2. Utility</a></button>
</label>
<div class="toggle-box-content ">
  <input class="toggle-box cust-text  archive-meta-slide" id="toggleId-7" type="checkbox" data-id="How-can-users-prioritize-text-responses-for-unread-messages" data-parentid="utility-bar" >
  <label for="toggleId-7" class="archive-meta-slide"><a href="<?php echo site_url(); ?>/manual/utility-bar/" data-ids="utility" class="utility-bar">2.1. Utility Bar/ Incoming Sidebar</a></label>
  <div class="toggle-box-content">
   <ul>
    <li> <a href="<?php echo site_url(); ?>/manual/utility-bar/#How-can-users-prioritize-text-responses-for-unread-messages" data-ids="utility" class="How-can-users-prioritize-text-responses-for-unread-messages">2.1.1. How can users prioritize text responses for unread messages?</a> </li>
    <li> <a href="<?php echo site_url(); ?>/manual/utility-bar/#What-are-other-actions-users-can-perform-using-the-Utility-Bar" data-ids="utility" class="What-are-other-actions-users-can-perform-using-the-Utility-Bar">2.1.2. What are other actions users can perform using the Utility Bar?</a> </li>
    <li>
     <input class="toggle-box cust-text1" id="toggleId-9" type="checkbox">
     <label for="toggleId-9" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/utility-bar/#Channels-supported-by-the-Utility-Bar" class="Channels-supported-by-the-Utility-Bar" data-ids="utility">2.1.3. Channels supported by the Utility Bar</a></label>
     <div class="toggle-box-content">
      <div class="toggle-box-content third_align">
       <ul>
        <li> <a href="<?php echo site_url(); ?>/manual/utility-bar/#SMSMMS" class="SMSMMS" data-ids="utility">2.1.3.1. SMS/MMS</a> </li>
      </ul>
    </div>
  </div></li>
</ul>
</div>
</div>
</div>

<div class="conversation">
 <input data-id="Conversation" class="toggle-box" id="toggleId-10" type="checkbox">
 <label for="toggleId-10">
  <button class="tablinks cust-button" onclick="openPage(event, 'conversation')"><a href="<?php echo site_url(); ?>/manual/conversation-view/" data-ids="conversation" class="Conversation-view">3. Conversation-view</a></button>
</label>

<div class="toggle-box-content">
 <ul>
  <li><a href="<?php echo site_url(); ?>/manual/conversation-view/#Conversation-History" data-ids="conversation" class="Conversation-History">3.1. Conversation History</a> </li>
  <li>
   <input class="toggle-box cust-text1" id="toggleId-11" type="checkbox">
   <label for="toggleId-11" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/conversation-view/#User-and-Message-Filters-and-SMS-Segments" data-ids="conversation" class="User-and-Message-Filters-and-SMS-Segments">3.2. User and Message Filters and SMS Segments</a></label>
   <div class="toggle-box-content">
    <ul>
     <li> <a href="<?php echo site_url(); ?>/manual/conversation-view/#Message-Filters" data-ids="conversation" class="Message-Filters">3.2.1. Message Filters</a> </li>
     <li> <a href="<?php echo site_url(); ?>/manual/conversation-view/#User-Filter" data-ids="conversation" class="User-Filter">3.2.2. User Filter</a> </li>
     <li> <a href="<?php echo site_url(); ?>/manual/conversation-view/#SMS-Segment" data-ids="conversation" class="SMS-Segment">3.2.3. SMS Segment</a> </li>
   </ul>
 </div></li>
 <li>
  <input class="toggle-box cust-text1" id="toggleId-12" type="checkbox">
  <label for="toggleId-12" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/conversation-view/#Message-Format-Options" data-ids="conversation" class="Message-Format-Options">3.3. Message Format Options</a></label>
  <div class="toggle-box-content">
   <ul>
    <li> <a href="<?php echo site_url(); ?>/manual/conversation-view/#Sender-Number-List" data-ids="conversation" class="Sender-Number-List">3.3.1. Sender Number List</a> </li>
    <li> <a href="<?php echo site_url(); ?>/manual/conversation-view/#Send-to" data-ids="conversation" class="Send-to">3.3.2. Send To</a> </li>
    <li>
     <input class="toggle-box cust-text1" id="toggleId-13" type="checkbox">
     <label for="toggleId-13" style="padding-left: 0px; color:#3c3950;"><a href="<?php echo site_url(); ?>/manual/conversation-view/#Templates-and-Folders" data-ids="conversation" class="Templates-and-Folders">3.3.3. Templates and Folders </a></label>
     <div class="toggle-box-content">
      <ul>
       <li><a href="<?php echo site_url(); ?>/manual/conversation-view/#Merge-Fields-in-Conversation-View" data-ids="conversation" class="Merge-Fields-in-Conversation-View">3.3.3.1. Merge Fields in Conversation View</a></li>
     </ul>
   </div>
 </li>
 <li><a href="<?php echo site_url(); ?>/manual/conversation-view/#Channels" data-ids="conversation" class="Channels">3.3.4. Channels</a> </li>
 <li><a href="<?php echo site_url(); ?>/manual/conversation-view/#Select-Files" data-ids="conversation" class="Select-Files">3.3.5. Select Files</a> </li>
 <li><a href="<?php echo site_url(); ?>/manual/conversation-view/#Voice" data-ids="conversation" class="Voice">3.3.6. Voice</a> </li>
</ul>
</div>
</li>
<li>
  <input class="toggle-box cust-text1" id="toggleId-14" type="checkbox">
  <label for="toggleId-14" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/conversation-view/#Notificationbadges" data-ids="conversation" class="Notificationbadges">3.4. Notification Badges</a></label>
  <div class="toggle-box-content">
   <ul>
    <li><a href="<?php echo site_url(); ?>/manual/conversation-view/#For-Channels" data-ids="conversation" class="For-Channels">3.4.1. For Channels</a></li>
    <li><a href="<?php echo site_url(); ?>/manual/conversation-view/#For-URLs-Clickthrough" data-ids="conversation" class="For-URLs-Clickthrough">3.4.2. For URLs Clickthrough</a></li>
  </ul>
</div>
</li>
</ul>
</div>
</div>
<div class="Tracking">
 <input data-id="url-Shortening" class="toggle-box" id="toggleId-15" type="checkbox">
 <label for="toggleId-15">
  <button class="tablinks cust-button" onclick="openPage(event, 'Tracking')"><a href="<?php echo site_url(); ?>/manual/link-tracking/" data-ids="Tracking" class="Link-Tracking">4. Link Tracking</a></button>
</label>
<div class="toggle-box-content ">
  <input class="toggle-box cust-text" id="toggleId-21" type="checkbox">
  <label for="toggleId-21"><a href="<?php echo site_url(); ?>/manual/link-tracking/#url-Shortening" data-ids="Tracking" class="url-Shortening">4.1. URL Shortening</a></label>
  <div class="toggle-box-content">
   <ul>
    <li>
     <input class="toggle-box cust-text1" id="toggleId-16" type="checkbox">
     <label for="toggleId-16" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/link-tracking/#What-is-Link-Tracking" data-ids="Tracking" class="scroll_to What-is-Link-Tracking"> 4.1.1. What is Link Tracking</a></label>
     <div class="toggle-box-content">
      <ul>
       <li><a href="<?php echo site_url(); ?>/manual/link-tracking/#SMS-Length" data-ids="Tracking" class="scroll_to SMS-Length"> 4.1.1.1. SMS Length</a></li>
       <li><a href="<?php echo site_url(); ?>/manual/link-tracking/#Urchin-Tracking-Module" data-ids="Tracking" class="scroll_to Urchin-Tracking-Module"> 4.1.1.2. Urchin Tracking Module (UTM)</a></li>
     </ul>
   </div>
 </li>
 <li>
   <input class="toggle-box cust-text1" id="toggleId-49" type="checkbox">
   <label for="toggleId-49" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/link-tracking/#How-to-track-the-click-through-rate-of-a-URL" data-ids="Tracking" class="scroll_to How-to-track-the-click-through-rate-of-a-URL">  4.1.2. How to track the click-through rate of a URL?</a></label>
   <div class="toggle-box-content">
    <ul>
     <li><a href="<?php echo site_url(); ?>/manual/link-tracking/#Notification-Badge" data-ids="Tracking" class="scroll_to Notification-Badge"> 4.1.2.1. Notification Badge</a></li>
   </ul>
 </div>
</li>
<li>
 <input class="toggle-box cust-text1" id="toggleId-18" type="checkbox">
 <label for="toggleId-18" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/link-tracking/#Service-Providers-for-Link-Shortening-Service" data-ids="Tracking" class="scroll_to Service-Providers-for-Link-Shortening-Service">  4.1.3. Service Providers for Link Shortening Service</a></label>
 <div class="toggle-box-content">
  <ul>
   <li><a href="<?php echo site_url(); ?>/manual/link-tracking/#Third-Party" data-ids="Tracking" class="scroll_to Third-Party"> 4.1.3.1. Third-Party</a></li>
   <li><a href="<?php echo site_url(); ?>/manual/link-tracking/#Proprietary-Native" data-ids="Tracking" class="scroll_to Proprietary-Native"> 4.1.3.2. Proprietary / Native</a></li>
   <li><a href="<?php echo site_url(); ?>/manual/link-tracking/#Custom" data-ids="Tracking" class="scroll_to Custom"> 4.1.3.3. Custom</a></li>
 </ul>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="sms-drip">
 <input data-id="Drip-Campaigns" class="toggle-box" id="toggleId-19" type="checkbox">
 <label for="toggleId-19">
  <button class="tablinks cust-button" onclick="openPage(event, 'sms-drip')"><a href="<?php echo site_url(); ?>/manual/sms-drip-campaigns/" class="sms-drip-campaigns" data-ids="sms-drip">5. SMS Drip Campaigns</a></button>
</label>
<div class="toggle-box-content">
  <input class="toggle-box cust-text" id="toggleId-20" type="checkbox">
  <label for="toggleId-20"><a href="<?php echo site_url(); ?>/manual/sms-drip-campaigns/" data-ids="sms-drip" class="Drip-Campaigns">5.1. Drip Campaigns</a></label>
  <div class="toggle-box-content">
   <ul>
    <li> <a href="<?php echo site_url(); ?>/manual/sms-drip-campaigns/#What-are-SMS-Drip-Campaigns" data-ids="sms-drip" class="scroll_to What-are-SMS-Drip-Campaigns"> 5.1.1. What are SMS Drip Campaigns?</a></li>
    <li>
     <input class="toggle-box cust-text1" id="toggleId-50" type="checkbox">
     <label for="toggleId-50" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/sms-drip-campaigns/#How-to-set-up-SMS-Drip-Campaigns" data-ids="sms-drip" class="scroll_to How-to-set-up-SMS-Drip-Campaigns"> 5.1.2. How to set up SMS Drip Campaigns</a></label>
     <div class="toggle-box-content">
      <ul>
       <li class="lt_li"><a href="<?php echo site_url(); ?>/manual/sms-drip-campaigns/#Create-Drip-Campaign-Action" data-ids="sms-drip" class="scroll_to Create-Drip-Campaign-Action">5.1.2.1. Create Drip Campaign Action</a> </li>
     </ul>
   </div>
 </li>
 <li>
   <input class="toggle-box cust-text1" id="toggleId-22" type="checkbox">
   <label for="toggleId-22" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/sms-drip-campaigns/#Jumping-between-Campaigns-Surveys-and-Channels" data-ids="sms-drip" class="scroll_to Jumping-between-Campaigns-Surveys-and-Channels"> 5.1.3. Jumping between Campaigns, Surveys, and Channels</a></label>
   <div class="toggle-box-content">
    <ul>
     <li class="lt_li"><a href="<?php echo site_url(); ?>/manual/sms-drip-campaigns/#Campaigns" data-ids="sms-drip" class="scroll_to Campaigns">5.1.3.1. Campaigns</a></li>
     <li class="lt_li"><a href="<?php echo site_url(); ?>/manual/sms-drip-campaigns/#Surveys-or-iText" data-ids="sms-drip" class="scroll_to Surveys-or-iText">5.1.3.2. Surveys or iText</a></li>
     <li class="lt_li"><a href="<?php echo site_url(); ?>/manual/sms-drip-campaigns/#Channels" data-ids="sms-drip" class="scroll_to Channels">5.1.3.3. Channels</a></li>
   </ul>
 </div>
</li>
<li>
 <input class="toggle-box cust-text1" id="toggleId-23" type="checkbox">
 <label for="toggleId-23" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/sms-drip-campaigns/#User-Interface-for-Drip-Campaigns" data-ids="sms-drip" class="scroll_to User-Interface-for-Drip-Campaigns"> 5.1.4. User Interface (UI) for Drip Campaigns</a></label>
 <div class="toggle-box-content">
  <ul>
   <li class="lt_li"><a href="<?php echo site_url(); ?>/manual/sms-drip-campaigns/#Visibility-for-Campaign-Progress" data-ids="sms-drip" class="scroll_to Visibility-for-Campaign-Progress">5.1.4.1. Visibility for Campaign Progress</a></li>
 </ul>
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="application-numbers">
 <input data-id="Phone-Numbers" class="toggle-box" id="toggleId-24" type="checkbox">
 <label for="toggleId-24">
  <button class="tablinks cust-button" onclick="openPage(event, 'application-numbers')"><a href="<?php echo site_url(); ?>/manual/application-numbers/" data-ids="application-numbers" class="application-numbers">6. Application Numbers</a></button>
</label>
<div class="toggle-box-content ">
  <input class="toggle-box cust-text" id="toggleId-25" type="checkbox">
  <label for="toggleId-25"><a href="<?php echo site_url(); ?>/manual/application-numbers/" data-ids="application-numbers" class="Phone-Numbers">6.1. Phone Numbers/Application Numbers</a></label>
  <div class="toggle-box-content">
   <ul>
    <li><a href="<?php echo site_url(); ?>/manual/application-numbers/#What-are-Application-Numbers" data-ids="application-numbers" class="What-are-Application-Numbers">6.1.1. What are Application Numbers?</a> </li>
    <li>
     <input class="toggle-box cust-text1" id="toggleId-26" type="checkbox">
     <label for="toggleId-26" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/application-numbers/#Different-Types-of-Phone-Numbers" data-ids="application-numbers" class="Different-Types-of-Phone-Numbers">6.1.2. Different Types of Phone Numbers</a></label>
     <div class="toggle-box-content">
      <ul>
       <li>
        <input class="toggle-box cust-text1 cust-text" id="toggleId-27" type="checkbox">
        <label for="toggleId-27" style="padding-left: 0px;  color: #262729;"><a href="<?php echo site_url(); ?>/manual/application-numbers/#Long-Code" data-ids="application-numbers" class="Long-Code">6.1.2.1. Long Code</a></label>
        <div class="toggle-box-content">
         <ul>
          <li><a href="<?php echo site_url(); ?>/manual/application-numbers/#Fixed-Line-Numbers" data-ids="application-numbers" class="Fixed-Line-Numbers">6.1.2.1.1. Fixed-Line Numbers</a></li>
          <li><a href="<?php echo site_url(); ?>/manual/application-numbers/#VoIP" data-ids="application-numbers" class="VoIP">6.1.2.1.2. VoIP</a></li>
          <li><a href="<?php echo site_url(); ?>/manual/application-numbers/#Toll-free-Numbers" data-ids="application-numbers" class="Toll-free-Numbers">6.1.2.1.3. Toll-free Numbers</a></li>
        </ul>
      </div>
    </li>
    <li>
      <input class="toggle-box cust-text1 cust-text" id="toggleId-28" type="checkbox">
      <label for="toggleId-28" style="padding-left: 0px;  color: #262729;"><a href="<?php echo site_url(); ?>/manual/application-numbers/#Shortcodes" data-ids="application-numbers" class="Shortcodes">6.1.2.2. Shortcodes</a></label>
      <div class="toggle-box-content">
       <ul>
        <li><a href="<?php echo site_url(); ?>/manual/application-numbers/#Random" data-ids="application-numbers" class="Random">6.1.2.2.1. Random</a></li>
        <li><a href="<?php echo site_url(); ?>/manual/application-numbers/#Vanity" data-ids="application-numbers" class="Vanity">6.1.2.2.2. Vanity</a></li>
        <li><a href="<?php echo site_url(); ?>/manual/application-numbers/#FTEU" data-ids="application-numbers" class="FTEU">6.1.2.2.3 FTEU</a></li>
      </ul>
    </div>
  </li>
  <li><a href="<?php echo site_url(); ?>/manual/application-numbers/#Custom-Sender-ID" data-ids="application-numbers" class="Custom-Sender-ID">6.1.2.3. Custom Sender ID</a> </li>
</ul>
</div>
</li>
<li>
 <input class="toggle-box cust-text1" id="toggleId-29" type="checkbox">
 <label for="toggleId-29" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/application-numbers/#Can-I-Bring-My-Own-Number" data-ids="application-numbers" class="Can-I-Bring-My-Own-Number">6.1.3. Can I Bring My Own Number?</a></label>
 <div class="toggle-box-content">
  <ul>
   <li> <a href="<?php echo site_url(); ?>/manual/application-numbers/#Hosting" data-ids="application-numbers" class="Hosting">6.1.3.1. Hosting</a> </li>
   <li> <a href="<?php echo site_url(); ?>/manual/application-numbers/#Porting" data-ids="application-numbers" class="Porting">6.1.3.2. Porting</a> </li>
   <li> <a href="<?php echo site_url(); ?>/manual/application-numbers/#Industry-Limitation-for-Hosting-and-Porting" class="Industry-Limitation-for-Hosting-and-Porting" data-ids="application-numbers">6.1.3.3. Industry Limitation for Hosting and Porting</a> </li>
 </ul>
</div>
</li>
<li> <a href="<?php echo site_url(); ?>/manual/application-numbers/#Can-I-bring-my-own-carrier" class="Can-I-bring-my-own-carrier" data-ids="application-numbers">6.1.4. Can I bring my own carrier?</a> </li>
</ul>
</div>
</div>
</div>
<div class="sms-segments">
 <input data-id="sms-segment" class="toggle-box" id="toggleId-30" type="checkbox">
 <label for="toggleId-30">
  <button class="tablinks cust-button" onclick="openPage(event, 'sms-segments')"><a href="<?php echo site_url(); ?>/manual/sms-segments/" data-ids="sms-segments" class="segments">7. SMS Segment</a></button>
</label>

<div class="toggle-box-content">
 <ul>
  <li><a href="<?php echo site_url(); ?>/manual/sms-segments/#sms-segment-and-character-limitss" data-ids="sms-segments" class="sms-segment-and-character-limitss">7.1. SMS Segment and Character limits</a> </li>
  <li>
   <input class="toggle-box cust-text1" id="toggleId-32" type="checkbox">
   <label for="toggleId-32" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/sms-segments/#difference-between-gsm-and-non-gsm-characters" data-ids="sms-segments" class="difference-between-gsm-and-non-gsm-characters">7.2. Difference between GSM and non-GSM characters</a></label>
   <div class="toggle-box-content">
    <ul>
     <li>
      <input class="toggle-box cust-text1 cust-text" id="toggleId-33" type="checkbox">
      <label for="toggleId-33" style="padding-left: 0px;  color: #262729;"><a data-ids="sms-segments" href="<?php echo site_url(); ?>/manual/sms-segments/#what-are-gsm-characters" class="what-are-gsm-characters">7.2.1. What are GSM Characters</a></label>
      <div class="toggle-box-content">
       <ul>
        <li><a href="<?php echo site_url(); ?>/manual/sms-segments/#examples-of-gsm-characters" data-ids="sms-segments" class="examples-of-gsm-characters">7.2.1.1. Examples of GSM Characters</a></li>
      </ul>
    </div>
  </li>
  <li>
    <input class="toggle-box cust-text1 cust-text" id="toggleId-34" type="checkbox">
    <label for="toggleId-34" style="padding-left: 0px;  color: #262729;"><a href="<?php echo site_url(); ?>/manual/sms-segments/#what-are-non-gsm-characters" data-ids="sms-segments" class="what-are-non-gsm-characters">7.2.2. What are Non-GSM characters</a></label>
    <div class="toggle-box-content">
     <ul>
      <li><a href="<?php echo site_url(); ?>/manual/sms-segments/#What-is-a-Unicode-character" data-ids="sms-segments" class="What-is-a-Unicode-character">7.2.2.1. What is a Unicode character?</a></li>
      <li><a href="<?php echo site_url(); ?>/manual/sms-segments/#What-are-Special-Characters" data-ids="sms-segments" class="What-are-Special-Characters">7.2.2.2. What are Special Characters?</a></li>
      <li><a href="<?php echo site_url(); ?>/manual/sms-segments/#Examples-of-Non-GSM-Characters" data-ids="sms-segments" class="Examples-of-Non-GSM-Characters">7.2.2.3. Examples of Non-GSM Characters</a></li>
    </ul>
  </div>
</li>
</ul>
</div>
</li>
<li>
 <input class="toggle-box cust-text1" id="toggleId-35" type="checkbox">
 <label for="toggleId-35" style="padding-left: 0px;"><a data-ids="sms-segments" href="<?php echo site_url(); ?>/manual/sms-segments/#Character-limits-for-GSM-and-non-GSM" class="Character-limits-for-GSM-and-non-GSM">7.3.Character limits for GSM and non-GSM</a></label>
 <div class="toggle-box-content">
  <ul>
   <li> <a data-ids="sms-segments" href="<?php echo site_url(); ?>/manual/sms-segments/#For-GSM-characters" class="For-GSM-characters">7.3.1. For GSM characters</a> </li>
   <li>
    <input class="toggle-box cust-text1 cust-text" id="toggleId-36" type="checkbox">
    <label for="toggleId-36" style="padding-left: 0px;  color: #262729;"><a data-ids="sms-segments" href="<?php echo site_url(); ?>/manual/sms-segments/#For-non-GSM-characters" class="For-non-GSM-characters">7.3.2. For non-GSM characters</a></label>
    <div class="toggle-box-content">
     <ul>
      <li><a data-ids="sms-segments" href="<?php echo site_url(); ?>/manual/sms-segments/#For-Emojis" class="For-Emojis">7.3.2.1. For Emojis</a></li>
    </ul>
  </div>
</li>
</ul>
</div>
</li>
<li>
 <input class="toggle-box cust-text1" id="toggleId-37" type="checkbox">
 <label for="toggleId-37" style="padding-left: 0px;"><a data-ids="sms-segments" href="<?php echo site_url(); ?>/manual/sms-segments/#Using-Characters-to-connect-segments" class="Using-Characters-to-connect-segments">7.4. Using Characters to connect segments</a></label>
 <div class="toggle-box-content">
  <ul>
   <li>
    <input class="toggle-box cust-text1 cust-text" id="toggleId-38" type="checkbox">
    <label for="toggleId-38" style="padding-left: 0px;  color: #262729;"><a data-ids="sms-segments" href="<?php echo site_url(); ?>/manual/sms-segments/#GSM-characters" class="GSM-characters">7.4.1. For GSM characters</a></label>
    <div class="toggle-box-content">
     <ul>
      <li><a data-ids="sms-segments" href="<?php echo site_url(); ?>/manual/sms-segments/#Industries-logic-to-count-segments-for-GSM-characters" class="Industries-logic-to-count-segments-for-GSM-characters">7.4.1.1. Industries logic to count segments for GSM characters</a></li>
    </ul>
  </div>
</li>
<li>
  <input class="toggle-box cust-text1 cust-text" id="toggleId-39" type="checkbox">
  <label for="toggleId-39" style="padding-left: 0px;  color: #262729;"><a href="<?php echo site_url(); ?>/manual/sms-segments/#non-GSM-characters" data-ids="sms-segments" class="non-GSM-characters">7.4.2. For non-GSM characters</a></label>
  <div class="toggle-box-content">
   <ul>
    <li><a href="<?php echo site_url(); ?>/manual/sms-segments/#logic-to-count-segments-for-GSM-characters" class="logic-to-count-segments-for-GSM-characters" data-ids="sms-segments">7.4.2.1. Industries logic to count segments for GSM characters</a></li>
  </ul>
</div>
</li>
</ul>
</div>
</li>
<li> <a href="<?php echo site_url(); ?>/manual/sms-segments/#Impact-of-adding-one-special-character-or-emoji-to-a-GSM-message" class="Impact-of-adding-one-special-character-or-emoji-to-a-GSM-message" data-ids="sms-segments">7.5. Impact of adding one special character or emoji to a GSM message</a> </li>
<li> <a href="<?php echo site_url(); ?>/manual/sms-segments/#Language-Support" class="Language-Support" data-ids="sms-segments">7.6. Language Support</a> </li>
</ul>
</div>
</div>

<div class="bulk-messaging">
 <input data-id="bulk-messages" class="toggle-box" id="toggleId-40" type="checkbox">
 <label for="toggleId-40">
  <button class="tablinks cust-button" onclick="openPage(event, 'bulk-messaging')"><a href="<?php echo site_url(); ?>/manual/bulk-messaging/" class="bulk-messaging" data-ids="bulk-messaging">8. Bulk Messaging</a></button>
</label>

<div class="toggle-box-content">
 <ul>
  <li>
   <input class="toggle-box cust-text1" id="toggleId-42" type="checkbox">
   <label for="toggleId-42" style="padding-left: 0px; padding-bottom: 0px !important;"><a href="<?php echo site_url(); ?>/manual/bulk-messaging/#how-to-send-bulk-messages" class="scroll_to how-to-send-bulk-messages" data-ids="bulk-messaging"> 8.1. How to send bulk messages?</a></label>
   <div class="toggle-box-content">
    <ul>
     <li>
      <input class="toggle-box cust-text1" id="toggleId-43" type="checkbox">
      <label for="toggleId-43" style="padding-left: 0px; right: -15px;"><a href="<?php echo site_url(); ?>/manual/bulk-messaging/#salesforce-objects" class="scroll_to salesforce-objects" data-ids="bulk-messaging">8.1.1. Salesforce Objects</a></label>
      <div class="toggle-box-content">
       <ul>
        <li>
         <input class="toggle-box cust-text1" id="toggleId-44" type="checkbox">
         <label for="toggleId-44" style="padding-left: 0px; right: -30px;"><a href="<?php echo site_url(); ?>/manual/bulk-messaging/#from-list-views" class="scroll_to from-list-views" data-ids="bulk-messaging">8.1.1.1. From List Views</a></label>
         <div class="toggle-box-content">
          <ul>
           <li><a href="<?php echo site_url(); ?>/manual/bulk-messaging/#limitation-of-bulk-messaging-through-listviews" class="scroll_to limitation-of-bulk-messaging-through-listviews" data-ids="bulk-messaging">8.1.1.1.1. Limitation of bulk messaging through ListViews</a></li>
         </ul>
       </div>
     </li>
     <li>
       <input class="toggle-box cust-text1" id="toggleId-45" type="checkbox">
       <label for="toggleId-45" style="padding-left: 0px; right: -30px;"><a href="<?php echo site_url(); ?>/manual/bulk-messaging/#from-campaigns" class="scroll_to from-campaigns" data-ids="bulk-messaging">8.1.1.2. From Campaigns</a></label>
       <div class="toggle-box-content">
        <ul>
         <li><a href="<?php echo site_url(); ?>/manual/bulk-messaging/#limitation-of-bulk-messaging-through-campaigns" class="scroll_to limitation-of-bulk-messaging-through-campaigns" data-ids="bulk-messaging">8.1.1.2.1. Limitation of bulk messaging through Campaigns</a></li>
       </ul>
     </div>
   </li>
   <li>
     <input class="toggle-box cust-text1" id="toggleId-46" type="checkbox">
     <label for="toggleId-46" style="padding-left: 0px; right: -30px;"><a href="<?php echo site_url(); ?>/manual/bulk-messaging/#from-reports" class="scroll_to from-reports" data-ids="bulk-messaging">8.1.1.3. From Reports</a></label>
     <div class="toggle-box-content">
      <ul>
       <li><a href="<?php echo site_url(); ?>/manual/bulk-messaging/#limitation-of-bulk-messaging-from-reports" class="scroll_to limitation-of-bulk-messaging-from-reports" data-ids="bulk-messaging">8.1.1.3.1. Limitation of bulk messaging from Reports</a></li>
     </ul>
   </div>
 </li>
</ul>
</div>
</li>
<li>
  <input class="toggle-box cust-text1" id="toggleId-47" type="checkbox">
  <label for="toggleId-47" style="padding-left: 0px; right: -15px;"><a href="<?php echo site_url(); ?>/manual/bulk-messaging/#sms-custom-interface" data-ids="bulk-messaging" class="scroll_to sms-custom-interface">8.1.2. 360 SMS Custom Interface</a></label>
  <div class="toggle-box-content">
   <ul>
    <li>
     <input class="toggle-box cust-text1" id="toggleId-48" type="checkbox">
     <label for="toggleId-48" style="padding-left: 0px; right: -30px;"><a href="<?php echo site_url(); ?>/manual/bulk-messaging/#conversation-manager" data-ids="bulk-messaging" class="scroll_to conversation-manager">8.1.2.1. Conversation Manager</a></label>
     <div class="toggle-box-content">
      <ul>
       <li><a href="<?php echo site_url(); ?>/manual/bulk-messaging/#limitation-of-bulk-messaging-from-conversation-manager" data-ids="bulk-messaging" class="scroll_to limitation-of-bulk-messaging-from-conversation-manager">8.1.2.1.1. Limitation of bulk messaging from Conversation manager</a></li>
     </ul>
   </div>
 </li>
</ul>
</div>
</li>
</ul>
</div>
</li>
<li><a href="<?php echo site_url(); ?>/manual/bulk-messaging/#scheduling-bulk-messages" data-ids="bulk-messaging" class="scroll_to scheduling-bulk-messages"> 8.2. Scheduling bulk messages </a> </li>
<li> <a href="<?php echo site_url(); ?>/manual/bulk-messaging/#channels-supporting-bulk-messaging" data-ids="bulk-messaging" class="scroll_to channels-supporting-bulk-messaging"> 8.3. Channels Supporting Bulk Messaging</a> </li>
</ul>
</div>
</div>
<div class="whatsapp">
 <input data-id="whats-apps" class="toggle-box" id="toggleId-51" type="checkbox">
 <label for="toggleId-51">
  <button class="tablinks cust-button" onclick="openPage(event, 'whatsapp')"><a href="<?php echo site_url(); ?>/manual/whats-app/" data-ids="whatsapp" class="whats-app">9. Whats app</a></button>
</label>

<div class="toggle-box-content">
 <ul>
  <li>
   <input class="toggle-box cust-text1" id="toggleId-53" type="checkbox">
   <label for="toggleId-53" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/whats-app/#business-whatsapp" data-ids="whatsapp" class="scroll_to business-whatsapp"> 9.1. Business WhatsApp</a></label>
   <div class="toggle-box-content">
    <ul>
     <li>
      <input class="toggle-box cust-text1" id="toggleId-54" type="checkbox">
      <label for="toggleId-54" style="padding-left: 0px; right: -15px;"><a href="<?php echo site_url(); ?>/manual/whats-app/#how-to-enable-WhatsApp-business-API-for-business-messaging" data-ids="whatsapp" class="scroll_to how-to-enable-WhatsApp-business-API-for-business-messaging">9.1.1. How to enable WhatsApp business API for business messaging</a></label>
      <div class="toggle-box-content">
       <ul>
        <li><a href="<?php echo site_url(); ?>/manual/whats-app/#how-does-360-sms-help-to-enable-whatsapp-business-api" data-ids="whatsapp" class="scroll_to how-does-360-sms-help-to-enable-whatsapp-business-api">9.1.1.1. How does 360 SMS help to enable WhatsApp Business API?</a></li>
        <li><a href="<?php echo site_url(); ?>/manual/whats-app/#whatsapp-notification-badge" data-ids="whatsapp" class="scroll_to whatsapp-notification-badge">9.1.1.2. WhatsApp Notification Badge</a></li>
        <li><a href="<?php echo site_url(); ?>/manual/whats-app/#how-to-select-whatsapp-channel-while-messaging" data-ids="whatsapp" class="scroll_to how-to-select-whatsapp-channel-while-messaging">9.1.1.3. How to select WhatsApp channel while Messaging</a></li>
        <li><a href="<?php echo site_url(); ?>/manual/whats-app/#limits-on-whatsapp-multimedia" data-ids="whatsapp" class="scroll_to limits-on-whatsapp-multimedia">9.1.1.4. Limits on WhatsApp Multimedia</a></li>
      </ul>
    </div>
  </li>
  <li>
    <input class="toggle-box cust-text1" id="toggleId-55" type="checkbox">
    <label for="toggleId-55" style="padding-left: 0px; right: -15px;"><a href="<?php echo site_url(); ?>/manual/whats-app/#How-many-contact-numbers-can-a-user-add-to-a-single-WhatsApp-business-account" data-ids="whatsapp" class="scroll_to How-many-contact-numbers-can-a-user-add-to-a-single-WhatsApp-business-account">9.1.2. How many contact numbers can a user add to a single WhatsApp business account?</a></label>
    <div class="toggle-box-content">
     <ul>
      <li><a href="<?php echo site_url(); ?>/manual/whats-app/#What-if-a-user-wants-more-than-25-numbers" data-ids="whatsapp" class="What-if-a-user-wants-more-than-25-numbers scroll_to">9.1.2.1. What if a user wants more than 25 numbers?</a> </li>
    </ul>
  </div>
</li>
<li>
  <input class="toggle-box cust-text1" id="toggleId-56" type="checkbox">
  <label for="toggleId-56" style="padding-left: 0px; right: -15px;"><a href="<?php echo site_url(); ?>/manual/whats-app/#How-does-WhatsApp-handle-messaging-compliance" data-ids="whatsapp" class="scroll_to How-does-WhatsApp-handle-messaging-compliance">9.1.3. How does WhatsApp handle messaging compliance?</a></label>
  <div class="toggle-box-content">
   <ul>
    <li>
     <input class="toggle-box cust-text1" id="toggleId-57" type="checkbox">
     <label for="toggleId-57" style="padding-left: 0px; right: -30px;"><a href="<?php echo site_url(); ?>/manual/whats-app/#What-are-WhatsApp-templates" class="scroll_to What-are-WhatsApp-templates" data-ids="whatsapp">9.1.3.1. What are WhatsApp templates?</a></label>
     <div class="toggle-box-content">
      <ul>
       <li><a href="<?php echo site_url(); ?>/manual/whats-app/#How-many-WhatsApp-templates-can-a-user-get-approved-for-one-WhatsApp-business-account" class="scroll_to How-many-WhatsApp-templates-can-a-user-get-approved-for-one-WhatsApp-business-account" data-ids="whatsapp">9.1.3.1.1. How many WhatsApp templates can a user get approved for one WhatsApp business account?</a> </li>
     </ul>
   </div>
 </li><li>
  <input class="toggle-box cust-text1" id="toggleId-58" type="checkbox">
  <label for="toggleId-58" style="padding-left: 0px; right: -30px;"><a href="<?php echo site_url(); ?>/manual/whats-app/#What-is-a-chat-session" data-ids="whatsapp" class="scroll_to What-is-a-chat-session">9.1.3.2. What is a chat session? </a></label>
  <div class="toggle-box-content">
   <ul>
    <li><a href="<?php echo site_url(); ?>/manual/whats-app/#For-how-long-is-a-chat-session-active" data-ids="whatsapp" class="scroll_to For-how-long-is-a-chat-session-active">9.1.3.2.1. For how long is a chat session active?</a> </li>
    <li><a href="<?php echo site_url(); ?>/manual/whats-app/#Can-a-user-keep-a-chat-session-active-for-longer-than-24-hours" data-ids="whatsapp" class="scroll_to Can-a-user-keep-a-chat-session-active-for-longer-than-24-hours">9.1.3.2.2. Can a user keep a chat session active for longer than 24 hours?
    </a> </li>
  </ul>
</div>
</li>

</ul>
</div>
</li>
</ul>
</div>
</li>
<li><a href="<?php echo site_url(); ?>/manual/whats-app/#Industries-and-countries-barred-from-using-WhatsApp" data-ids="whatsapp" class="scroll_to Industries-and-countries-barred-from-using-WhatsApp"> 9.2. Industries and countries barred from using WhatsApp</a> </li>
<li><a href="<?php echo site_url(); ?>/manual/whats-app/#Personal-WhatsApp" data-ids="whatsapp" class="scroll_to Personal-WhatsApp"> 9.3. Personal WhatsApp</a> </li>
</ul>
</div>
</div>
<div class="availability">
 <input data-id="availability-management" class="toggle-box" id="toggleId-62" type="checkbox">
 <label for="toggleId-62">
  <button class="tablinks cust-button" onclick="openPage(event, 'availability')"><a href="<?php echo site_url(); ?>/manual/availability-management/" data-ids="availability">10. Availability Management</a></button>
</label>
<div class="toggle-box-content ">

 <ul>
  <li> <a href="<?php echo site_url(); ?>/manual/availability-management/#availability-status" class="availability-status" data-ids="availability">10.1. Availability Status</a> </li>
  <li>
   <input class="toggle-box cust-text1" id="toggleId-64" type="checkbox">
   <label for="toggleId-64" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/availability-management/#addressing-messages-calls-after-business-hours" data-ids="availability" class="addressing-messages-calls-after-business-hours">10.2. Addressing messages &amp; calls after business hours</a></label>
   <div class="toggle-box-content">
    <div class="toggle-box-content third_align">
     <ul>
      <li> <a href="<?php echo site_url(); ?>/manual/availability-management/#auto-response" class="auto-response" data-ids="availability">10.2.1. Auto Response</a> </li>
      <li> <a href="<?php echo site_url(); ?>/manual/availability-management/#voice-autoresponse-for-unavailable-busy-teams" class="voice-autoresponse-for-unavailable-busy-teams" data-ids="availability">10.2.2. Voice Autoresponse for Unavailable / Busy Teams</a> </li>
    </ul>
  </div>
</div></li>
</ul>
</div>

</div>

<div class="conversation-manager">
 <input data-id="conversation-manager" class="toggle-box" id="toggleId-65" type="checkbox">
 <label for="toggleId-65">
  <button class="tablinks cust-button" onclick="openPage(event, 'conversation-manager')"><a href="<?php echo site_url(); ?>/manual/conversation-manager/" class="conversation-manage" data-ids="conversation-manager">11. Conversation Manager </a></button>
</label>

<div class="toggle-box-content">
 <ul>
  <li>
   <input class="toggle-box cust-text1" id="toggleId-67" type="checkbox">
   <label for="toggleId-67" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/conversation-manager/#user-interface-of-conversation-manager" class="user-interface-of-conversation-manager" data-ids="conversation-manager">11.1. User Interface of Conversation Manager</a></label>
   <div class="toggle-box-content">
    <ul>
     <li>
      <input class="toggle-box cust-text1 " id="toggleId-68" type="checkbox">
      <label for="toggleId-68" style="padding-left: 0px;  color: #262729;"><a href="<?php echo site_url(); ?>/manual/conversation-manager/#split-view" data-ids="conversation-manager" class="split-view">11.1.1. Split View</a></label>
      <div class="toggle-box-content">
       <ul>
        <li><a href="<?php echo site_url(); ?>/manual/conversation-manager/#detail-page-tab" class="detail-page-tab" data-ids="conversation-manager">11.1.1.1. Detail Page Tab </a></li>
        <li><a href="<?php echo site_url(); ?>/manual/conversation-manager/#conversation-view-tab-the-sms-tab" class="conversation-view-tab-the-sms-tab" data-ids="conversation-manager">11.1.1.2. Conversation View Tab (the SMS Tab) </a></li>
      </ul>
    </div>
  </li>
</ul>
</div>
</li>
<li>
 <input class="toggle-box cust-text1" id="toggleId-69" type="checkbox">
 <label for="toggleId-69" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/conversation-manager/#filtering-and-configuring-record-lists-in-conversation-manager" class="filtering-and-configuring-record-lists-in-conversation-manager" data-ids="conversation-manager">11.2. Filtering and Configuring Record Lists in Conversation Manager</a></label>
 <div class="toggle-box-content">
  <ul>
   <li><a href="<?php echo site_url(); ?>/manual/conversation-manager/#navigating-to-records-details-from-conversation-manager" data-ids="conversation-manager" class="navigating-to-records-details-from-conversation-manager">11.2.1. Navigating to Record’s Details from Conversation Manager</a>
   </li>
   <li>
    <input class="toggle-box cust-text1" id="toggleId-70" type="checkbox">
    <label for="toggleId-70" style="padding-left: 0px;  color: #262729;"><a href="<?php echo site_url(); ?>/manual/conversation-manager/#configuring-columns-and-salesforce-object-in-the-conversation-manager" class="configuring-columns-and-salesforce-object-in-the-conversation-manager" data-ids="conversation-manager">11.2.2. Configuring Columns and Salesforce Object in the Conversation Manager </a></label>
    <div class="toggle-box-content">
     <ul>
      <li><a href="<?php echo site_url(); ?>/manual/conversation-manager/#objects" class="objects" data-ids="conversation-manager">11.2.2.1. Objects</a></li>
    </ul>
  </div>
</li>
<li><a href="<?php echo site_url(); ?>/manual/conversation-manager/#filters-for-columns" class="filters-for-columns" data-ids="conversation-manager">11.2.3. Filters for Columns</a> </li></ul>
</div>
</li>
<li>
  <input class="toggle-box cust-text1" id="toggleId-71" type="checkbox">
  <label for="toggleId-71" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/conversation-manager/#actions-supported-in-conversation-manager" class="actions-supported-in-conversation-manager" data-ids="conversation-manager">11.3.  Actions supported in Conversation Manager</a></label>
  <div class="toggle-box-content">
   <ul>
    <li>
     <input class="toggle-box cust-text1" id="toggleId-72" type="checkbox">
     <label for="toggleId-72" style="padding-left: 0px;  color: #262729;"><a href="<?php echo site_url(); ?>/manual/conversation-manager/#take-individual-actions-for-records-in-line" class="take-individual-actions-for-records-in-line" data-ids="conversation-manager">11.3.1. Take individual actions for records in-line</a></label>
     <div class="toggle-box-content">
      <ul>
       <li><a href="<?php echo site_url(); ?>/manual/conversation-manager/#creating-a-new-record" class="creating-a-new-record" data-ids="conversation-manager">11.3.1.1. Creating a new record</a></li>
       <li><a href="<?php echo site_url(); ?>/manual/conversation-manager/#sending-a-sms" class="sending-a-sms" data-ids="conversation-manager">11.3.1.2. Sending an SMS</a></li>
       <li><a href="<?php echo site_url(); ?>/manual/conversation-manager/#creating-tasks" class="creating-tasks" data-ids="conversation-manager">11.3.1.3. Creating tasks</a></li>
       <li><a href="<?php echo site_url(); ?>/manual/conversation-manager/#export-filtered-views" class="export-filtered-views" data-ids="conversation-manager">11.3.1.4. Export Filtered Views</a></li>
     </ul>
   </div>
 </li>
 <li><a href="<?php echo site_url(); ?>/manual/conversation-manager/#detail-page-editing" class="detail-page-editing" data-ids="conversation-manager">11.3.2. Detail Page Editing</a></li>
</ul>
</div>
</li>
</ul>

</div>
</div>
<div class="ringless-voicemail">
 <input data-id="ringless-voicemail" class="toggle-box" id="toggleId-73" type="checkbox">
 <label for="toggleId-73">
  <button class="tablinks cust-button" onclick="openPage(event, 'ringless-voicemails')"><a href="<?php echo site_url(); ?>/manual/ringless-voicemails/" class="ringless" data-ids="ringless-voicemail">12. Ringless Voicemail</a></button>
</label>

<div class="toggle-box-content">
 <ul>
  <li>
   <input class="toggle-box cust-text1" id="toggleId-75" type="checkbox">
   <label for="toggleId-75" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/ringless-voicemails/#ringless-conversation-view" data-ids="ringless-voicemail" class="ringless-conversation-view">12.1. Conversation View</a></label>
   <div class="toggle-box-content">
    <ul>
     <li><a href="<?php echo site_url(); ?>/manual/ringless-voicemails/#how-to-send-voice-messages-through-conversation-view" class="how-to-send-voice-messages-through-conversation-view" data-ids="ringless-voicemail">12.1.1. How to send voice messages through Conversation View</a> </li>
   </ul>
 </div>
</li>
<li>
 <input class="toggle-box cust-text1" id="toggleId-76" type="checkbox">
 <label for="toggleId-76" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/ringless-voicemails/#voice-templates" data-ids="ringless-voicemail" class="voice-templates">12.2. Voice Templates</a></label>
 <div class="toggle-box-content">
  <ul>
   <li>
    <input class="toggle-box cust-text1 cust-text" id="toggleId-77" type="checkbox">
    <label for="toggleId-77" style="padding-left: 0px;  color: #262729;"><a href="<?php echo site_url(); ?>/manual/ringless-voicemails/#how-to-create-voice-templates" class="how-to-create-voice-templates" data-ids="ringless-voicemail">12.2.1. How to create Voice Templates</a></label>
    <div class="toggle-box-content">
     <ul>
      <li><a href="<?php echo site_url(); ?>/manual/ringless-voicemails/#note" class="note" data-ids="ringless-voicemail">12.2.1.1. Note</a></li>
    </ul>
  </div>
</li>
</ul>
</div>
</li>
<li>
 <input class="toggle-box cust-text1" id="toggleId-78" type="checkbox">
 <label for="toggleId-78" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/ringless-voicemails/#bulk-voicemails" data-ids="ringless-voicemail" class="bulk-voicemails">12.3. Bulk Voicemails</a></label>
 <div class="toggle-box-content">
  <ul>
   <li>
    <input class="toggle-box cust-text1 cust-text" id="toggleId-79" type="checkbox">
    <label for="toggleId-79" style="padding-left: 0px;  color: #262729;"><a href="<?php echo site_url(); ?>/manual/ringless-voicemails/#voicemails-from-list-views" data-ids="ringless-voicemail" class="voicemails-from-list-views">12.3.1. Voicemails from List Views</a></label>
    <div class="toggle-box-content">
     <ul>
      <li><a href="<?php echo site_url(); ?>/manual/ringless-voicemails/#limitation-list-views" class="limitation-list-views" data-ids="ringless-voicemail">12.3.1.1. Limitation </a></li>
    </ul>
  </div>
</li>
<li>
  <input class="toggle-box cust-text1 cust-text" id="toggleId-80" type="checkbox">
  <label for="toggleId-80" style="padding-left: 0px;  color: #262729;"><a href="<?php echo site_url(); ?>/manual/ringless-voicemails/#voicemails-from-campaigns" class="voicemails-from-campaigns" data-ids="ringless-voicemail">12.3.2. Voicemails from Campaigns</a></label>
  <div class="toggle-box-content">
   <ul>
    <li><a href="<?php echo site_url(); ?>/manual/ringless-voicemails/#limitation-campaigns" class="limitation-campaigns" data-ids="ringless-voicemail">12.3.2.1. Limitation</a></li>
  </ul>
</div>
</li>
<li>
  <input class="toggle-box cust-text1 cust-text" id="toggleId-81" type="checkbox">
  <label for="toggleId-81" style="padding-left: 0px;  color: #262729;"><a href="<?php echo site_url(); ?>/manual/ringless-voicemails/#voicemails-from-reports" data-ids="ringless-voicemail" class="ringless-voicemail">12.3.3. Voicemails from Reports</a></label>
  <div class="toggle-box-content">
   <ul>
    <li><a href="<?php echo site_url(); ?>/manual/ringless-voicemails/#limitation-reports" data-ids="ringless-voicemail" class="limitation-reports">12.3.3.1. Limitation</a></li>
  </ul>
</div>
</li>
<li>
  <input class="toggle-box cust-text1 cust-text" id="toggleId-82" type="checkbox">
  <label for="toggleId-82" style="padding-left: 0px;  color: #262729;"><a href="<?php echo site_url(); ?>/manual/ringless-voicemails/#Voicemails-from-Conversation-Manager-single-window-console" class="Voicemails-from-Conversation-Manager-single-window-console" data-ids="ringless-voicemail">12.3.4. Voicemails from Conversation Manager (single-window console)</a></label>
  <div class="toggle-box-content">
   <ul>
    <li><a href="<?php echo site_url(); ?>/manual/ringless-voicemails/#limitation-conversation-manager" class="limitation-conversation-manager" data-ids="ringless-voicemail">12.3.4.1. Limitation </a></li>
  </ul>
</div>
</li>
</ul>
</div>
</li>
<li> <a href="<?php echo site_url(); ?>/manual/ringless-voicemails/#using-characters-to-connect-segments" class="using-characters-to-connect-segments" data-ids="ringless-voicemail">12.4. Using Characters to connect segments</a> </li>
</ul>
</div>

</div>
<!-- itext------------------------------------------------------------------------------------------------------------>
<div class="itext">
 <input data-id="itext" class="toggle-box" id="toggleId-83" type="checkbox">
 <label for="toggleId-83">
  <button class="tablinks cust-button" onclick="openPage(event, 'i-text')"><a href="<?php echo site_url(); ?>/manual/itext/" class="itext">13. itext</a></button>
</label>
<div class="toggle-box-content ">
  <input class="toggle-box cust-text" id="toggleId-84" type="checkbox" data-id="automated-questionnaires-and-surveys" data-parentid="itext">
  <label for="toggleId-84"><a href="<?php echo site_url(); ?>/manual/itext/#surveys-and-decision-trees" class="surveys-and-decision-trees itext" data-ids="itext">13.1. Surveys and Decision Trees (DIY Chatbots)
  </a></label>
  <div class="toggle-box-content">
   <ul>
    <li>
     <input class="toggle-box cust-text1 itext" id="toggleId-85" type="checkbox">
     <label for="toggleId-85" style="padding-left: 0px; padding-bottom: 0px !important;"><a href="<?php echo site_url(); ?>/manual/itext/#automated-questionnaires-and-surveys" class="scroll_to automated-questionnaires-and-surveys" data-ids="itext"> 13.1.1. Automated Questionnaires and Surveys</a></label>
     <div class="toggle-box-content">
      <ul>
       <li><a href="<?php echo site_url(); ?>/manual/itext/#configure-questions-and-answers" class="configure-questions-and-answers" data-ids="itext">13.1.1.1. Configure Questions and Answers</a></li>
     </ul>
   </div>
 </li>
 <li>
   <input class="toggle-box cust-text1 itext" id="toggleId-86" type="checkbox">
   <label for="toggleId-86" style="padding-left: 0px; padding-bottom: 0px !important;"><a href="<?php echo site_url(); ?>/manual/itext/#jumping-between-questions-and-surveys" class="scroll_to jumping-between-questions-and-surveys" data-ids="itext"> 13.1.2. Jumping between Questions and Surveys</a></label>
   <div class="toggle-box-content">
    <ul>
     <li>
      <input class="toggle-box cust-text1 itext" id="toggleId-87" type="checkbox">
      <label for="toggleId-87" style="padding-left: 0px; right: -15px;"><a href="<?php echo site_url(); ?>/manual/itext/#jumping-to-specific-questions" class="scroll_to jumping-to-specific-questions" data-ids="itext">13.1.2.1. Jumping to Specific Questions</a></label>
      <div class="toggle-box-content">
       <ul>
        <li><a href="<?php echo site_url(); ?>/manual/itext/#answer-path" class="answer-path" data-ids="itext">13.1.2.1.1. Answer Path (/ Action Handler) for taking action on responses
        </a></li>
        <li>
         <input class="toggle-box cust-text1 itext" id="toggleId-88" type="checkbox">
         <label for="toggleId-88" style="padding-left: 0px; right:0px;"><a href="<?php echo site_url(); ?>/manual/itext/#triggering-actions-through-answer-path" class="scroll_to triggering-actions-through-answer-path" data-ids="itext">13.1.2.1.2. Triggering Actions through Answer Path / Action Handler</a></label>
         <div class="toggle-box-content">
          <ul>
           <li><a href="<?php echo site_url(); ?>/manual/itext/#sms-alert" class="scroll_to sms-alert" data-ids="itext">13.1.2.1.2.1. SMS Alert</a></li>
           <li><a href="<?php echo site_url(); ?>/manual/itext/#email-alert" class="scroll_to email-alert" data-ids="itext">13.1.2.1.2.2. Email Alert</a></li>
           <li><a href="<?php echo site_url(); ?>/manual/itext/#create-task" class="scroll_to create-task" data-ids="itext">13.1.2.1.2.3. Create Task</a></li>
           <li><a href="<?php echo site_url(); ?>/manual/itext/#add-to-campaign" class="scroll_to add-to-campaign" data-ids="itext">13.1.2.1.2.4. Add to Campaign</a></li>
           <li><a href="<?php echo site_url(); ?>/manual/itext/#update-field-value" class="scroll_to update-field-value" data-ids="itext">13.1.2.1.2.5. Update Field Value</a></li>
           <li><a href="<?php echo site_url(); ?>/manual/itext/#survey-to-survey" class="scroll_to survey-to-survey" data-ids="itext">13.1.2.1.2.6. Survey to Survey</a></li>
         </ul>
       </div>
     </li>
   </ul>
 </div>
</li>
</ul>
</div>
</li>
<li><a href="<?php echo site_url(); ?>/manual/itext/#jumping-to-itext-while-texting" class="scroll_to jumping-to-itext-while-texting" data-ids="itext"> 13.1.3. Jumping to iText while texting </a></li>
</ul>
</div>
</div>
</div>
<div class="sticky-sender">
 <input data-id="sticky-sender" class="toggle-box" id="toggleId-90" type="checkbox">
 <label for="toggleId-90">
  <button class="tablinks cust-button" onclick="openPage(event, 'sticky-sender')"><a href="<?php echo site_url(); ?>/manual/sticky-sender/" data-ids="sticky-sender">14. Sticky Sender</a></button>
</label>

<div class="toggle-box-content">
 <ul>
  <li> <a href="<?php echo site_url(); ?>/manual/sticky-sender/#sticky-sender-for-phone-number" class="sticky-sender-for-phone-number" data-ids="availability">14.1. Sticky Sender for Phone Number (/ Originator Number) Management</a> </li>
  <li>
   <input class="toggle-box cust-text1" id="toggleId-91" type="checkbox">
   <label for="toggleId-91" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/sticky-sender/#custom-parameters-for-choosing-originators" data-ids="sticky-sender" class="custom-parameters-for-choosing-originators">14.2. Custom Parameters for Choosing Originators</a></label>
   <div class="toggle-box-content">
    <ul>
     <li><a href="<?php echo site_url(); ?>/manual/sticky-sender/#by-geography" class="by-geography" data-ids="sticky-sender">14.2.1. By Geography</a> </li>
     <li><a href="<?php echo site_url(); ?>/manual/sticky-sender/#by-language" class="by-language" data-ids="sticky-sender">14.2.2. By Language</a> </li>
     <li><a href="<?php echo site_url(); ?>/manual/sticky-sender/#by-skill" class="by-skill" data-ids="sticky-sender">14.2.3. By Skill</a> </li>
     <li><a href="<?php echo site_url(); ?>/manual/sticky-sender/#by-account-owner-or-representative" class="by-account-owner-or-representative" data-ids="sticky-sender">14.2.4. By Account Owner or Representative</a> </li>
     <li><a href="<?php echo site_url(); ?>/manual/sticky-sender/#by-contact-number" class="by-contact-number" data-ids="sticky-sender">14.2.5. By Contact Number (by previous message/call originator)</a> </li>
   </ul>
 </div>
 <input class="toggle-box cust-text1" id="toggleId-92" type="checkbox">
 <label for="toggleId-92" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/sticky-sender/#assigning-incoming-owners-automatically" data-ids="sticky-sender" class="assigning-incoming-owners-automatically">14.3. Assigning Incoming Owners Automatically</a></label>

 <div class="toggle-box-content third_align">
   <ul>
    <li>
      <input class="toggle-box cust-text1" id="toggleId-93" type="checkbox">
      <label for="toggleId-93" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/sticky-sender/#for-existing-and-purchased-data" data-ids="sticky-sender" class="for-existing-and-purchased-data">14.3.1. For Existing and Purchased Data</a></label>
      <div class="toggle-box-content">
        <ul>
          <li> <a href="<?php echo site_url(); ?>/manual/sticky-sender/#how-to-enable-automatic-response-assignment-to-account-owners" class="how-to-enable-automatic-response-assignment-to-account-owners" data-ids="sticky-sender">14.3.1.1. How to enable automatic response assignment to account owners</a> </li>
        </ul>
      </div>  
    </li>
  </ul>
</div>

<li> <a href="<?php echo site_url(); ?>/manual/sticky-sender/#sticky-channel-custom" class="auto-response" data-ids="sticky-sender">14.4. Sticky Channel (Custom)</a> </li>

</ul>
</div>
</div>

<!--  -------------------standard-automation-in-360-sms---------------------------------------------------------------> 
<div class="standard-automation">
 <input data-id="standard-automation" class="toggle-box" id="toggleId-95" type="checkbox">
 <label for="toggleId-95">
  <button class="tablinks cust-button" onclick="openPage(event, 'standardautomation')"><a href="<?php echo site_url(); ?>/manual/standard-automation/" data-ids="standard-automation">15. Standard Automation</a></button>
</label>

<div class="toggle-box-content">
 <ul>
  <li><a href="<?php echo site_url(); ?>/manual/standard-automation/#standard-automation-in-360-sms" class="standard-automation-for-phone-number"data-ids="standard-automation">15.1 Standard Automation in 360 SMS</a> </li>
  <li>
   <input class="toggle-box cust-text1" id="toggleId-96" type="checkbox">
   <label for="toggleId-96" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/standard-automation/#no-code-automation-for-admins" data-ids="standard-automation" class="no-code-automation-for-admins">15.2. No Code Automation for Admins</a></label>
   <div class="toggle-box-content">
    <ul>
     <li><a href="<?php echo site_url(); ?>/manual/standard-automation/#workflows" class="workflows" data-ids="standard-automation">15.2.1. Workflows</a> </li>
     <li><a href="<?php echo site_url(); ?>/manual/standard-automation/#process-builders" class="process-builders" data-ids="standard-automation">15.2.2. Process Builders</a> </li>
     <li><a href="<?php echo site_url(); ?>/manual/standard-automation/#flows" class="flows" data-ids="standard-automation">15.2.3. Flows</a> </li>

   </ul>
 </div>
 <input class="toggle-box cust-text1" id="toggleId-97" type="checkbox">
 <label for="toggleId-97" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/standard-automation/#custom-code-automation-for-developers" data-ids="standard-automation" class="custom-code-automation-for-developers">15.3. Custom Code Automation for Developers</a></label>
 <div class="toggle-box-content third_align">
  <ul>
    <li>
      <a href="<?php echo site_url(); ?>/manual/standard-automation/#apex-code" data-ids="standard-automation" class="apex-code">15.3.1. Apex Code</a></li>
      <li> <a href="<?php echo site_url(); ?>/manual/standard-automation/#api-integration" class="api-integration" data-ids="standard-automation">15.3.2. API Integration</a> </li>
    </ul>
  </div>  
</li>
</ul>
</div>
</div>


<!-----------opt-in-opt-out----------------------------------------------------------------------------------->

<div class="Opt-in-opt-out">
 <input data-id="opt-in-opt-out" class="toggle-box" id="toggleId-99" type="checkbox">
 <label for="toggleId-99">
   <button class="tablinks cust-button" onclick="openPage(event, 'Opt-in-opt-out-compliance')"><a href="<?php echo site_url(); ?>/manual/opt-in-opt-out-compliance/" data-ids="opt-in-opt-out">16. Opt-in / Opt-out Compliance</a></button>
 </label>
 <div class="toggle-box-content">
  <ul>
   <li>
     <input class="toggle-box cust-text1" id="toggleId-100" type="checkbox">
     <label for="toggleId-100" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/opt-in-opt-out-compliance/#opt-in-compliance" data-ids="opt-in-opt-out" class="opt-in-compliance">16.1. Opt-in Compliance</a></label>
     <div class="toggle-box-content">
       <ul>
        <li><a href="<?php echo site_url(); ?>/manual/opt-in-opt-out-compliance/#exception-opt-in-template" class="exception-opt-in-template" data-ids="opt-in-opt-out">16.1.1. Exception Opt-in Template</a> </li>
        <li><a href="<?php echo site_url(); ?>/manual/opt-in-opt-out-compliance/#double-opt-ins-for-gdpr" class="double-opt-ins-for-gdpr" data-ids="opt-in-opt-out">16.1.2. Double Opt-ins for GDPR</a> </li>
      </ul>
    </div>
  </li>
  <li><a href="<?php echo site_url(); ?>/manual/opt-in-opt-out-compliance/#opt-out-compliance" data-ids="opt-in-opt-out" class="opt-out-compliance">16.2. Opt-out Compliance</a></li>

  <li><input class="toggle-box cust-text1" id="toggleId-101" type="checkbox">
   <label for="toggleId-101" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/opt-in-opt-out-compliance/#configuring-opt-in-and-opt-out-compliance" data-ids="opt-in-opt-out" class="configuring-opt-in-and-opt-out-compliance">16.3. Configuring Opt-in and Opt-out Compliance</a></label>
   <div class="toggle-box-content third_align">
    <ul>
     <input class="toggle-box cust-text1" id="toggleId-102" type="checkbox">
     <label for="toggleId-102" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/opt-in-opt-out-compliance/#custom-parameters-for-opt-in-opt-out" data-ids="opt-in-opt-out" class="custom-parameters-for-opt-in-opt-out">16.3.1. Custom parameters for opt-in/ opt-out</a></label>
     <div class="toggle-box-content third_align">
      <ul>
       <li><a href="<?php echo site_url(); ?>/manual/opt-in-opt-out-compliance/#by-number" data-ids="opt-in-opt-out" class="by-number">16.3.1.1. By Number</a></li>
       <li><a href="<?php echo site_url(); ?>/manual/opt-in-opt-out-compliance/#by-user" data-ids="opt-in-opt-out" class="by-user">16.3.1.2. By User</a></li>
       <li>       
        <input class="toggle-box cust-text1" id="toggleId-103" type="checkbox">
        <label for="toggleId-103" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/opt-in-opt-out-compliance/#by-custom-preferences" data-ids="opt-in-opt-out" class="by-custom-preferences">16.3.1.3. By Custom Preferences</a></label>
        <div class="toggle-box-content third_align">
          <ul>
           <li><a href="<?php echo site_url(); ?>/manual/opt-in-opt-out-compliance/#channels-otp" data-ids="opt-in-opt-out" class="channels-otp">16.3.1.3.1. Channels</a></li>
           <li><a href="<?php echo site_url(); ?>/manual/opt-in-opt-out-compliance/#geographies" data-ids="opt-in-opt-out" class="geographies">16.3.1.3.2. Geographies</a></li>
           <li><a href="<?php echo site_url(); ?>/manual/opt-in-opt-out-compliance/#content-type" data-ids="opt-in-opt-out" class="content-type">16.3.1.3.3. Content-type</a></li>
           <li><a href="<?php echo site_url(); ?>/manual/opt-in-opt-out-compliance/#departments" data-ids="opt-in-opt-out" class="departments">16.3.1.3.4. Departments</a></li>
           <li><a href="<?php echo site_url(); ?>/manual/opt-in-opt-out-compliance/#specific-person-account-manager" data-ids="opt-in-opt-out" class="specific-person-account-manager">16.3.1.3.5. Specific Person/ Account Manager </a></li>
           <li><a href="<?php echo site_url(); ?>/manual/opt-in-opt-out-compliance/#organizations" data-ids="opt-in-opt-out" class="organizations">16.3.1.3.6. Organizations</a></li>
         </ul>
       </div>
     </li>
   </ul>
 </div>
</ul>

</div>
</li>
</ul>
</div>
</div>
<div class="group-chat-guide">
 <input data-id="group-chat-guide" class="toggle-box" id="toggleId-104" type="checkbox">
 <label for="toggleId-104">
   <button class="tablinks cust-button" onclick="openPage(event, 'group-chat-guide')"><a href="<?php echo site_url(); ?>/manual/group-chat-guide/" data-ids="opt-in-opt-out">17. SMS Group Chat</a></button>
 </label>
 <div class="toggle-box-content"> 
  <ul>

  <li><a href="<?php echo site_url(); ?>/manual/group-chat-guide/#group-chat-guide" data-ids="group-chat-guide" class="opt-out-compliance">17.1 SMS Group Chat</a></li>

  
</ul>
</div>
</div>

<div class="chatgpt-guide-panel">
 <input data-id="chatgpt-guide-panel" class="toggle-box" id="togglechatId-10" type="checkbox">
 <label for="togglechatId-10">
  <button class="tablinks cust-button" onclick="openPage(event, 'chatgpt-guide-panel')"><a href="<?php echo site_url(); ?>/manual/chatgpt-360-sms-user-guide/" data-ids="chatgpt-guide-panel" class="chatgpt-guide-panel-view">18. ChatGPT 360 SMS User Guide</a></button>
</label>

<div class="toggle-box-content">
 <ul>
  <li><a href="<?php echo site_url(); ?>/manual/chatgpt-360-sms-user-guide/#chatgpt-guide-panel-History" data-ids="chatgpt-guide-panel" class="chatgpt-guide-panel-History">18.1. Introduction</a> </li>
  <li><a href="<?php echo site_url(); ?>/manual/chatgpt-360-sms-user-guide/#enablingchat" data-ids="chatgpt-guide-panel" class="enablingchat">18.2. Chatgpt (Beta) With 360 Sms)</a> </li>
  <li><a href="<?php echo site_url(); ?>/manual/chatgpt-360-sms-user-guide/#enablingchat" data-ids="chatgpt-guide-panel" class="enablingchat3">18.3. Enabling Chatgpt With 360 SMS</a> </li>
  <li>
   <input class="toggle-box cust-text1" id="togglechatId-11" type="checkbox">
   <label for="togglechatId-11" style="padding-left: 0px;"><a href="<?php echo site_url(); ?>/manual/chatgpt-360-sms-user-guide/#functionalitites" data-ids="chatgpt-guide-panel" class="functionalitites">18.4. Functionalities Of Chatgpt With 360 Sms App</a></label>
   <div class="toggle-box-content">
    <ul>
     <li> <a href="<?php echo site_url(); ?>/manual/chatgpt-360-sms-user-guide/#template1" data-ids="chatgpt-guide-panel" class="template1">18.4.1. Template Suggestion</a> </li>
     <li> <a href="<?php echo site_url(); ?>/manual/chatgpt-360-sms-user-guide/#template2" data-ids="chatgpt-guide-panel" class="template2">18.4.2. Auto-reply In Conversation View And Incoming Sms Utility Bar</a> </li>
    
   </ul>
 </div></li>
 <li><a href="<?php echo site_url(); ?>/manual/chatgpt-360-sms-user-guide/#ratechat" data-ids="chatgpt-guide-panel" class="ratechat ">18.5. Rate Limit For The Chatgpt Api</a> </li>

</ul>
</div>
</div>


</div>  
</div>


<?php
} add_shortcode('sidebarmanualsss','sidebarmanuals');


if ( ! function_exists('one_post_type') ) {

// Register Custom Post Type
  function one_post_type() {

    $labels = array(
      'name'                  => _x( 'Calendar Activity', 'Post Type General Name', 'text_domain' ),
      'singular_name'         => _x( 'Calendar Activity', 'Post Type Singular Name', 'text_domain' ),
      'menu_name'             => __( 'Calendar Types', 'text_domain' ),
      'name_admin_bar'        => __( 'Calendar Type', 'text_domain' ),
      'archives'              => __( 'Item Archives', 'text_domain' ),
      'attributes'            => __( 'Item Attributes', 'text_domain' ),
      'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
      'all_items'             => __( 'All Items', 'text_domain' ),
      'add_new_item'          => __( 'Add New Item', 'text_domain' ),
      'add_new'               => __( 'Add New', 'text_domain' ),
      'new_item'              => __( 'New Item', 'text_domain' ),
      'edit_item'             => __( 'Edit Item', 'text_domain' ),
      'update_item'           => __( 'Update Item', 'text_domain' ),
      'view_item'             => __( 'View Item', 'text_domain' ),
      'view_items'            => __( 'View Items', 'text_domain' ),
      'search_items'          => __( 'Search Item', 'text_domain' ),
      'not_found'             => __( 'Not found', 'text_domain' ),
      'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
      'featured_image'        => __( 'Featured Image', 'text_domain' ),
      'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
      'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
      'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
      'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
      'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
      'items_list'            => __( 'Items list', 'text_domain' ),
      'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
      'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
     
    );
    $args = array(
      'label'                 => __( 'Calendar Activity', 'text_domain' ),
      'description'           => __( 'Calendar Type Description', 'text_domain' ),
      'labels'                => $labels,
      'supports'              => array( 'title', 'editor' ),
      'taxonomies'            => array( 'cal_category', 'cal_tag' ),
      'hierarchical'          => false,
      'public'                => true,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'menu_position'         => 5,
      'show_in_admin_bar'     => true,
      'show_in_nav_menus'     => true,
      'can_export'            => true,
      'has_archive'           => false,
      'exclude_from_search'   => false,
      'publicly_queryable'    => true,
      'capability_type'       => 'page',
      'rewrite' => array('slug' => '1','with_front' => false),
    );
    register_post_type( 'calen', $args );

  }
  add_action( 'init', 'one_post_type', 0 ); 

}


if ( ! function_exists( 'calendar_taxonomy' ) ) {

// Register Custom Taxonomy
  function calendar_taxonomy() {

    $labels = array(
      'name'                       => _x( 'Calendar Taxonomies', 'Taxonomy General Name', 'text_domain' ),
      'singular_name'              => _x( 'Calendar Taxonomy', 'Taxonomy Singular Name', 'text_domain' ),
      'menu_name'                  => __( 'Calendar Taxonomy', 'text_domain' ),
      'all_items'                  => __( 'All Items', 'text_domain' ),
      'parent_item'                => __( 'Parent Item', 'text_domain' ),
      'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
      'new_item_name'              => __( 'New Item Name', 'text_domain' ),
      'add_new_item'               => __( 'Add New Item', 'text_domain' ),
      'edit_item'                  => __( 'Edit Item', 'text_domain' ),
      'update_item'                => __( 'Update Item', 'text_domain' ),
      'view_item'                  => __( 'View Item', 'text_domain' ),
      'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
      'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
      'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
      'popular_items'              => __( 'Popular Items', 'text_domain' ),
      'search_items'               => __( 'Search Items', 'text_domain' ),
      'not_found'                  => __( 'Not Found', 'text_domain' ),
      'no_terms'                   => __( 'No items', 'text_domain' ),
      'items_list'                 => __( 'Items list', 'text_domain' ),
      'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
    );
    $args = array(
      'labels'                     => $labels,
      'hierarchical'               => true,
      'public'                     => true,
      'show_ui'                    => true,
      'show_admin_column'          => true,
      'show_in_nav_menus'          => true,
      'show_tagcloud'              => true,
      
    );
    register_taxonomy( 'cal_category', array( 'calen' ), $args );

  }
  add_action( 'init', 'calendar_taxonomy', 0 );

}


function partnership_frm(){
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      padding: 0;
      margin: 0;
    }

    .conct_txt {
      width: 80%;
      margin: 0 auto;

    }

    .conct_txt p {
      color: #fff;
      font-size: 52px;
    }

    .frm {
      display: flex;
      flex-direction: column;
      width: 80%;
      margin: 0 auto;
    }

    .form_section {
      display: flex;
      flex-wrap: wrap;
    }

    .input_four {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .input_four>div label {
      margin-bottom: 10px !important;
      display: block;
    }

    .input_four input {
      margin-bottom: 20px;
      padding: 7px 10px;
      width: 100%;
      background-color: #fff !important;
    }
    .input_four1 {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .input_four1>div label {
      margin-bottom: 10px !important;
      display: block;
    }

    .input_four1 input {
      margin-bottom: 20px;
      padding: 7px 10px;
      width: 100%;
      background-color: #fff !important;
    }

    input {
      padding: 15px 20px;
      border-radius: 5px;
      outline: none;
      margin-bottom: 20px;
      font-size: 17px;
      border: none;
    }

    button {
      width: 100%;
      padding: 7px 50px;
      outline: none;
      color: #fff;
      border: none;
      background-color: #006efd;
      background-image: linear-gradient(136deg, #006efd 0%, #00d2dd 50%, #006efd 100%);
      font-size: 17px;
      background-size: 200% auto;
    }

    .btn {
      text-align: center;
      padding-top: 36px;
    }

    button:hover {
      background-color: transparent;
      background-position: right center !important;
    }

    .heading h2 {
      text-align: center !important;
      margin: 0 !important;
      margin-bottom: 40px !important;
      / font-family: Abril Fatface !important;/
    }

    .input_four>div {
      width: 48%;
    }
    .input_four1>div {
      width: 100%;
    }
    .input_four .company {}

    .main {
      font-family: 'Montserrat', sans-serif !important;
    }

    @media(max-width: 768px) {
      select {
        width: 100%;
      }

      button {
        width: 100%;
      }

      .container {
        padding: 0;
      }

      .conct_txt p {
        margin-top: 0;
        padding-top: 30px;
      }

      .btn {
        margin-bottom: 30px;
      }

      .input_four>div {
        width: 100%;
      }
    }
  </style>


  <script src="https://www.google.com/recaptcha/api.js"></script>
  <script>
   function timestamp() { var response = document.getElementById("g-recaptcha-response"); if (response == null || response.value.trim() == "") {var elems = JSON.parse(document.getElementsByName("captcha_settings")[0].value);elems["ts"] = JSON.stringify(new Date().getTime());document.getElementsByName("captcha_settings")[0].value = JSON.stringify(elems); } } setInterval(timestamp, 500); 
 </script>
 <div class="main">
  <div class="heading">
  </div>
  <form action="https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST"
  class="niteshClass" name="myForm" id="webinarForm">
  <input type=hidden name='captcha_settings' value='{"keyname":"Partnership","fallback":"true","orgId":"00D2v000002Eqpv","ts":""}'>

  <input type=hidden name="oid" value="00D2v000002Eqpv">
  <!--Update the Return URL below-->
  <input type=hidden name="retURL" value="<?php echo get_site_url(); ?>/thank-you/">
  <!-- ---------------------------------------------------------------------- -->
  <!-- NOTE: These fields are optional debugging elements. Please uncomment -->
  <!-- these lines if you wish to test in debug mode. -->
  <!-- <input type="hidden" name="debug" value=1> -->
  <!-- <input type="hidden" name="debugEmail" -->
  <!-- value="sid@360degreecloud.com"> -->
  <!-- ---------------------------------------------------------------------- -->
  <div class="form_section">
    <div class="frm">
      <div class="input_four">
        <div>
          <input id="first_name" name="first_name" type="text"  Placeholder="First Name"  required />
        </div>
        <div>
          <input id="last_name" name="last_name" type="text" Placeholder="Last Name" required />
        </div>

      </div>
      <div class="input_four1">
        <div>
          <input id="email" name="email" type="email" Placeholder="Work Email"  required />
        </div>
        <div class="company">
          <input id="company" name="company" type="text" Placeholder="Company Name" required />
        </div>

        <div>
        </div>
        <div>
          <input type="text" Placeholder="Your message goes here…" required />
        </div>
	<input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
       
        <div> <input type="hidden" value="Partnership" id="lead_source" name="lead_source" />
          <div class="g-recaptcha" data-sitekey="6Ld4S70dAAAAAOGo7oSVo_8m3RasBg05Pkw2wIvx"></div><br>

        </div>

        <div class="btn">
          <button type="submit" name="submit">Submit</button>
        </div>
      </div>
    </div>
  </div>
</form>
</div>

<?
}
add_shortcode('partnership_form_shrtcode','partnership_frm');
function register_session_new(){
  if( ! session_id() ) {
    session_start();
  }
}

add_action('init', 'register_session_new');
add_shortcode('capchshortcode_create','capchshortcode');

function capchshortcode(){
  session_start();

  $one_value = rand(1,9);
  $two_value = rand(1,9);

  if($one_value > $two_value){

   $captcha_total = $one_value - $two_value; 
   $math = "$one_value"." - "."$two_value"." =";  

 }else{


  $captcha_total = $one_value + $two_value;
  $math = "$one_value"." + "."$two_value"." =";


}
$_SESSION['captcha_total'] = $captcha_total;
$_SESSION['math'] = $math;
}
add_shortcode('partnerpageformshortcode','partnerpageform');
function partnerpageform(){
 ?>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <style>
  * {
    box-sizing: border-box;
  }

  body {
    padding: 0;
    margin: 0;
  }

  .conct_txt {
    width: 80%;
    margin: 0 auto;

  }

  .conct_txt p {
    color: #fff;
    font-size: 52px;
  }

  .frm {
    display: flex;
    flex-direction: column;
    width: 80%;
    margin: 0 auto;
  }

  .form_section {
    display: flex;
    flex-wrap: wrap;
  }

  .input_four {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
  }

  .input_four>div label {
    margin-bottom: 10px !important;
    display: block;
  }

  .input_four input {

    padding: 10px 10px;
    width: 100%;
    background-color: #fff !important;
  }
  .input_four1 {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
  }

  .input_four1>div label {
    margin-bottom: 10px !important;
    display: block;
  }

  .input_four1 input {

    padding: 10px 10px;
    width: 100%;
    background-color: #fff !important;
  }

  input {
    padding: 15px 20px;
    border-radius: 5px;
    outline: none;

    font-size: 17px;
    border: none;
  }

  .button {
    width: 88% !important;
    padding: 7px 50px;
    outline: none;
    color: #fff;
    border: none;
    background-color: #006efd;
    background-image: linear-gradient(136deg, #006efd 0%, #00d2dd 50%, #006efd 100%);
    font-size: 17px;
    background-size: 200% auto;
  }

  .btn {
    text-align: center;
    padding-top: 36px;
  }
  .textareadesign{
    margin-bottom: 20px;
    padding: 7px 10px;
    width: 100%;
    background-color: #fff !important;
    border: 1px solid #dfe5e8;
    border-radius: 5px;
    height: 81px;
  }
  .button:hover {
    background-color: transparent;
    background-position: right center !important;
  }

  .heading h2 {
    text-align: center !important;
    margin: 0 !important;
    margin-bottom: 40px !important;
    / font-family: Abril Fatface !important;/
  }

  .input_four>div {
    width: 48%;
  }
  .input_four1>div {
    width: 100%;
  }.d-flexform {
    margin: 3% 0%;
  }

  .main {
    font-family: 'Montserrat', sans-serif !important;
  }
  form span.error, span.error1 {
    color: red;
    font-size: 12px;
    font-weight: 400;
  }
  .error {
    color: red;
    margin-left: 0px;
    position: relative;
    top: -16px;
  }

  @media(max-width: 768px) {
   img.codeImg{
    margin-bottom:20px;
    padding-left: 0px !important;
  }
  select {
    width: 100%;
  }

  .button {
    width: 100%;
  }

  .container {
    padding: 0;
  }

  .conct_txt p {
    margin-top: 0;
    padding-top: 30px;
  }

  .btn {
    margin-bottom: 30px;
  }

  .input_four>div {
    width: 100%;
  }
}
.form_section input{
  margin-bottom:15px;
}
select.phncode{
  height: 47.5px !important;
  border-radius: 5px !important;
  border-color: #ccc;
  width: 100%;
}
input#vercode {
  border: 1px solid #ccc;
}
@media screen and (min-device-width: 768px) and (max-device-width: 1024px){

  .select-height{
    height:52px !important;
    border-radius: 0px !important;
  }
  select#phone_code {
    padding: 11.5px 0.5px 11.5px 0.5px !important;
    padding-left: 10px !important;
  }
}
@media screen and (min-device-width: 280px) and (max-device-width: 767px){
  .select-height{
    height:51.8px !important;
    border-radius: 0px !important;
  }
  .phonecode_sec{
    padding-right: 5px !important;
    width: 33% !important;  
    padding-left: 5px !important;
    border-radius: 5px !important;
  }
  .phone_sec{
    padding-left: 5px !important;
    width: 66% !important;
    padding-right: 0px !important;
  }
}
.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-2,.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-3,.iti{
 width: 100% !important;
}
input#phone_code{
 padding: 10px 10px 10px 85px;
 width: 100% !important;
 background-color: #fff !important;
}
input#company{
  padding: 10px 10px !important;
  width: 100% !important;
  background-color: #fff !important;}

  .col-md-12 {
    width: 100%;
    padding: 0px !important;margin: 0px 0px 15px 0px!important;}  
  </style> 

  <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">

  <!--  ----------------------------------------------------------------------  -->
  <!--  NOTE: Please add the following <FORM> element to your page.             -->
    <!--  ----------------------------------------------------------------------  -->

    <form id="formFirstLead">
      <input type="hidden" name="encoding" value="UTF-8">
      <input type="hidden" name="oid" value="00D61000000cnSO">
      <input type="hidden" name="retURL" value="<?php echo get_site_url(); ?>/thank-you/">

      <!--  ----------------------------------------------------------------------  -->
      <!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
      <!--  these lines if you wish to test in debug mode.                          -->
      <!--  <input type="hidden" name="debug" value=1>                              -->
      <!--  <input type="hidden" name="debugEmail"                                  -->
      <!--  value="rinnie@360degreecloud.com">                                      -->
      <!--  ----------------------------------------------------------------------  -->

      <div class="form_section">
        <div class="frm">
          <div class="input_four">
          
            <div>
              <input  id="one" maxlength="40" placeholder="First Name" name="first_name" size="20" type="text"  />
              <span class="error" id="one_error"></span>
            </div>
            <div>
              <input  id="last_name" placeholder="Last Name" maxlength="80" name="last_name" size="20" type="text"  />
              <span id="last_name_error" style="color:red;"></span>
            </div>

          </div>
          <div class="input_four1">
            <div>
              <input placeholder="Business Email" id="email" maxlength="80" name="email" size="20" type="email" class="form-control wpcf7-text" style="border: 1px solid #ccc;" onblur="verify_email_partner(this.value)" />
              <span id="email_error" style="color:red;"></span>
              <span class="ldremailchk text-center" style="display: none !important;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
            </div>
          </div>
          <script type="text/javascript">
            $(function () {
            var code = "+1"; // Assigning value from model.
            $('#phone_code').val(code);
            $('#phone_code').intlTelInput({
              allowExtensions: true,
              autoHideDialCode: true,
              autoPlaceholder: "ON",
              dropdownContainer: document.body,
              formatOnDisplay: true,
              hiddenInput: "full_number",
              initialCountry: "auto",
              nationalMode: true,
              placeholderNumberType: "MOBILE",
              preferredCountries: ['US','GB' ,'AU' ,'CA' ,'IN'],
              separateDialCode: true
            });
            $('#btnSubmit').on('click', function () {
              var code = $("#phone_code").intlTelInput("getSelectedCountryData").dialCode;
              var phoneNumber = $('#phone_code').val();
              var name = $("#phone_code").intlTelInput("getSelectedCountryData").name;
              alert('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);
            });
          });
            function verify_phone_contactnew(phone){ 
             var selval = jQuery('.selected-dial-code').text().slice(1);
             var phone = jQuery('input#phone_code').val();
             console.log(phone + ' ' + selval);
             if(phone!= '' && phone.length >= 10 && selval!= ''){       
              jQuery('span.ldrphone').show();
              jQuery('span#phone_error').hide();
              var phone_check = phone.trim();
              var ever = jQuery('#ever').val();
              var phone_code = jQuery('.selected-dial-code').text().slice(1);
                var pageid = jQuery("input#pageid").val();
        var baseURL = '<?php echo site_url(); ?>/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
              jQuery.ajax({
                crossDomain: true,
                url: baseURL,
                method: 'POST',
                data: {"phone_code":phone_code,"phone":phone_check},
                success: function(response) {
                 jQuery('span.ldrphone').hide();
                 jQuery('span#phone_error').show();
                 res = JSON.parse(response);
                 if(res.status == false){

                   jQuery('#phone_error').html('');   
                   jQuery('#phone_error').html('Invalid Number');
                   if(ever == "1" || ever == 1 ){  
                         // alert(ever);
                       }else{ //alert(ever);

                        jQuery('#phone_error').html('');   
                        jQuery('#phone_error').html('Invalid Number');
                        //   jQuery('#phone').val('');  
                      }
                    }
                    else if(res.status == true){

                     jQuery('#phone_error').html('<span style="color:green">Valid Number</span>');
                     jQuery('#pver').val('1'); 
                   }
                 }
               });

            }else if(selval!= '' && phone != "" && phone.length < 10){

              jQuery('#phone_error').html(' ');
              jQuery('#phone_error').html('Invalid Number');
            }else if(selval == ''){

              jQuery('#phone_error').html(' ');
              jQuery('#phone_error').html('Please select country code.');
            }else if(phone == ""){

              jQuery('#phone_error').html(' ');
              jQuery('#phone_error').html('Invalid Number');
            }
          }
        </script>
        <div class="col-md-12">
          <input oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Phone" id="phone_code" name="phone" onblur="verify_phone_contactus(this.value)" type="tel" class="form-control wpcf7-text focus-on phnnumb" style="border-top: 1px solid #ccc;border-bottom: 1px solid #ccc;border-right: 1px solid #ccc; border-left: 1px solid #ccc;">
          <span id="phone_error" style="color:red;"></span> <span id="country_error" style="color:red;"></span>
          <span class="ldrphone text-center" style="display: none;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
        </div>
   
        <!--country deepak 1      -->
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/country-picker-flags/build/css/countrySelect.css">
    	<style>
    	.country-select.inside{
    	    width:100%;
    	}
        .country-select .country-list .country {
            padding: 0px 7px;
        }
        .selected-flag {
            background: #f2f2f2;
        }
        input#country_selector {
            text-indent: 5px; width: 100%;
        }
        .country-select.inside {
            width: 100%;
        }
        input#country_selector {
    height: 50px;
    background: #ffffff;
}
p.country {
    margin:0px;
}

	</style>
           <p class="country">Please select country below</p>

            <fieldset class="form-col" id="" style="padding: 0px;border: none;margin:0 0 1em;">
                <input id="country_selector" type="text" name="">
                  <span id="companydev_error" style="color:red;"></span>

				<label for="country_selector" style="display:none;">Select a country here...</label>
				<div class="form-item" style="display:none;">
        				<input type="text" id="country_selector_code" name="Country__c" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
        				<label for="country_selector_code">...and the selected country code will be updated here</label>
        			</div>
        			<button type="submit" style="display:none;">Submit</button>
    		</fieldset> 
              <script src="https://www.jqueryscript.net/demo/country-picker-flags/build/js/countrySelect.js"></script>    
              <script>
    			jQuery("#country_selector").countrySelect({
    				// defaultCountry: "jp",
    				// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    				// responsiveDropdown: true,
    				preferredCountries: ['us', 'gb', 'in', 'ca']
    			});
    		</script>
    		
      <!--country end deepak      -->
    <div class="company" >
      <input  id="company" maxlength="40" placeholder="Company" name="company" size="20" type="text"  />
      <span id="company_error" style="color:red;"></span>
      <textarea id="description" placeholder="Description...." name="description" class="textareadesign"></textarea>
      <span id="description_error" style="color:red;"></span>
      <div class="row formBack">          
       <div class="col-sm-3 mt-2 col-xs-4"> 
        <?php
        $pid = get_queried_object_id();
    
        ?>
    <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['current_captcha_form_id'] = $pid;
        ?>
        <img alt="captcha" 
             src="<?php echo get_site_url(); ?>/wp-content/themes/thegem-child/cap2.php" 
             id="captchaImg_<?php echo $pid; ?>"
             class="codeImg" style="width:100%;height: 44px;padding-left: 5px;"> </div> 
      <input type="hidden" name="pageid" id="pageid"  value="<?php echo $pid;?>">
      <div class="col-sm-2 mt-1 col-xs-2">
<!--         <p  class="
        " style="cursor: grab;"><img src="https://test.360smsapp.info/wp-content/uploads/2022/04/free-refresh-icon-3104-thumb-1.png" style="height: 40px; width: 45px !important;"></p> -->
		          <p  class="btnRefresh pt-page-css" style="cursor: grab;"><img alt="refresh-icon" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/04/free-refresh-icon-3104-thumb-1.png" style="height: 40px; width: 45px !important;"></p>
      </div>
      <div class="col-sm-7 mt-3 col-xs-6">
        <div class="form-group ">
          <input type="text" name="vercode" id="vercode" class="wpcf7-form-control wpcf7-text " placeholder="Enter value" style="width: 100%;background: #fff;height: 35px;"> 
          <span id="vercode_error" style="color:red;"></span>
        </div>
      </div>    
    </div>
    <input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
    <select  id="lead_source" name="lead_source" style="display: none;">
      <option value="Partner With Us">Partner With Us</option>

    </select>
    <input type="hidden" id="ever" value="0">
    <input type="hidden" id="pver" value="0">
    <span id="all_error" style="color:red;"></span>
    <input type="submit" name="submit" id="webtoLeadFormOne" class="button" style="padding: initial;"  />

  </div>
</div>
</div>
</form>
<script type="text/javascript">
 function  verify_phone_partner(phone){ 
   var selval = jQuery('select#phone_code').val();
   if(phone!= '' && phone.length >= 10 && selval!= ''){       
    jQuery('span.ldrphone').show();
    jQuery('span#phone_error').hide();
    jQuery('span#counrty_error').hide();
    var phone_check = phone.trim();
    var ever = jQuery('#ever').val();
    var phone_code = jQuery('#phone_code').val();
      var pageid = jQuery("input#pageid").val();
        var baseURL = '<?php echo site_url(); ?>/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
    jQuery.ajax({
      crossDomain: true,
      url: baseURL,
      method: 'POST',
      data: {"phone_code":phone_code,"phone":phone_check},
      success: function(response) {
       jQuery('span.ldrphone').hide();
       jQuery('span#phone_error').show();
       jQuery('span#counrty_error').show();
       res = JSON.parse(response);
       if(res.status == false){
         jQuery('span#country_error').html(''); 
         jQuery('#phone_error').html('');   
         jQuery('#phone_error').html('Invalid Number');
         if(ever == "1" || ever == 1 ){  
                         // alert(ever);
                       }else{ //alert(ever);
                         jQuery('span#country_error').html('');   
                         jQuery('#phone_error').html('');   
                         jQuery('#phone_error').html('Invalid Number');
                        //   jQuery('#phone').val('');  
                      }
                    }
                    else if(res.status == true){
                      jQuery('span#country_error').html(' '); 
                      jQuery('#phone_error').html('<span style="color:green">Valid Number</span>');
                      jQuery('#pver').val('1'); 
                    }
                  }
                });

  }else if(selval!= '' && phone != "" && phone.length < 10){
   jQuery('span#country_error').html(' ');
   jQuery('#phone_error').html(' ');
   jQuery('#phone_error').html('Invalid Number');
 }else if(selval == ''){
  jQuery('#country_error').html(' ');
  jQuery('#phone_error').html(' ');
  jQuery('#phone_error').html('Please select country code.');
}else if(phone == ""){
  jQuery('#country_error').html(' ');
  jQuery('#phone_error').html(' ');
  jQuery('#phone_error').html('Invalid Number');
}
}
function  verify_email_partner(email){
  if(email != ''){
    if(email.indexOf("@", 0) < 0){
      jQuery('#email').siblings('span.error').html(' ');
      jQuery('#email_error').html('Invalid Email');


    }
    else if(email.indexOf(".", 0) < 0){
      jQuery('#email').siblings('span.error').html(' ');
      jQuery('#email_error').html('Invalid Email');


    }else  if(email.toLowerCase().slice(email.length - 9) == 'gmail.com'){
     jQuery('#email_error').html('Please enter your business email address. This form does not accept addresses from gmail.com.');
   }else  if(email.toLowerCase().slice(email.length - 9) == 'yahoo.com'){
     jQuery('#email_error').html('Please enter your business email address. This form does not accept addresses from yahoo.com.');
   }else  if(email.toLowerCase().slice(email.length - 10) == 'rediff.com'){
     jQuery('#email_error').html('Please enter your business email address. This form does not accept addresses from rediff.com.');
   }else  if(email.toLowerCase().slice(email.length - 11) == 'outlook.com'){
     jQuery('#email_error').html('Please enter your business email address. This form does not accept addresses from outlook.com.');
   }else  if(email.toLowerCase().slice(email.length - 11) == 'hotmail.com'){
     jQuery('#email_error').html('Please enter your business email address. This form does not accept addresses from hotmail.com.');
   }else {
    jQuery('#email').siblings('span.error').html(' ');
    jQuery('#email_error').html(' ');
    jQuery('span.ldremailchk').show();
    var email_check = email.trim();
    var pageid = jQuery("input#pageid").val();
        var baseURL = '<?php echo site_url(); ?>/wp-content/themes/thegem-child/verifyEmail.php?id='+pageid;
    jQuery.ajax({
      crossDomain: true,
      url: baseURL,
      method: 'POST',
      data: "email="+email_check,
      success: function(response) {
       jQuery('span.ldremailchk').hide();
       res = JSON.parse(response);
       if(res.status == false){
        jQuery('#email').siblings('span.error').html(' ');
        jQuery('#email_error').html('Invalid Email');
                    //   jQuery('#email').val('');
                    jQuery('#ever').val('0');
                  }
                  else if(res.status == true){
                    jQuery('#email').siblings('span.error').html(' ');
                    jQuery('#email_error').html('<span style="color:green">Valid Email</span>');                                  jQuery('#ever').val('1'); 
                  }
                }
              });
  }
}else{
  jQuery('#email_error').html(' ');  
  jQuery('#email').siblings('span.error').html(' ');
  jQuery('#email_error').html('Email Required');  
}
}
jQuery('select#phone_code').on('change', function() {
 jQuery('span.ldrphone').show();
 jQuery('span#phone_error').hide();
 jQuery('span#counrty_error').hide();
 jQuery('span#phone_error').html(' ');
       //jQuery("input#phone").val('');
       var selval = jQuery('select#phone_code').val();
       var phone = jQuery("input#phone").val();
       if(selval == ''){
        console.log('1');
      //alert('sdasdasd');
      jQuery('span.ldrphone').hide();
      jQuery('span#phone_error').show();
      jQuery('span#counrty_error').show();
      jQuery('span#country_error').html('Please select country code');
    }else if( selval == '' && phone.length < 10){
      jQuery('span.ldrphone').hide();
      jQuery('span#phone_error').show();
      jQuery('span#counrty_error').show();
      jQuery('#phone_error').html('');   
      jQuery('span#country_error').html(' ');
      jQuery('span#country_error').html('Invalid Number');
    } else if( selval != '' && phone.length < 10 && phone != ""){
     jQuery('span.ldrphone').hide();
     jQuery('span#phone_error').show();
     jQuery('span#counrty_error').show();
     jQuery('#phone_error').html('');   
     jQuery('span#country_error').html(' ');
     jQuery('span#country_error').html('Invalid Number');
   }else{
    jQuery('span.ldrphone').hide();
    jQuery('span#phone_error').show();
    jQuery('span#counrty_error').show();
    jQuery('span#country_error').html('');
    if(phone!= '' && selval!= '' && phone.length >= 10){
      console.log('3');
      jQuery('span.ldrphone').show();
      jQuery('span#phone_error').hide();
      jQuery('span#counrty_error').hide();
      var phone_check = phone.trim();
      var ever = jQuery('#ever').val();
      var phone_code = jQuery('#phone_code').val();
      var pageid = jQuery("input#pageid").val();
        var baseURL = '<?php echo site_url(); ?>/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
      jQuery.ajax({
        crossDomain: true,
        url: baseURL,
        method: 'POST',
        data: {"phone_code":phone_code,"phone":phone_check},
        success: function(response) {
         jQuery('span.ldrphone').hide();
         jQuery('span#phone_error').show();
         jQuery('span#counrty_error').show();
         res = JSON.parse(response);
         if(res.status == false){ 
           jQuery('#phone_error').html(' ');   
           jQuery('span#country_error').html('');
           jQuery('#phone_error').html('Invalid Number');

           if(ever == "1" || ever == 1 ){  
                         // alert(ever);
                       }else{ //alert(ever);
                        jQuery('#phone_error').html('');   
                        jQuery('span#country_error').html('');
                        jQuery('#phone_error').html('Invalid Number'); 
                        
                        //   jQuery('#phone').val('');  
                      }
                    }
                    else if(res.status == true){
                     jQuery('span#country_error').html('');
                     jQuery('#phone_error').html(' ');
                     jQuery('#phone_error').html('<span style="color:green">Valid Number</span>');
                     jQuery('#pver').val('1'); 
                   }
                 }
               });
    }
  }
});


jQuery("input#phone").keypress(function(){
  var selval = jQuery('select#phone_code').val();
  var phone = jQuery("input#phone").val();
  if(selval == ''){      
    jQuery('span#country_error').html(' ');
    jQuery('span#country_error').html('Please select country code');
    jQuery("input#phone").val(' ');
  } else{     
   if(phone!= '' && selval!= ''){
    jQuery('span#country_error').html('');
  }
}

});

jQuery(document).ready(function () {
    jQuery("p.btnRefresh_bottom_other").click(function(){
    jQuery("img.codeImg").attr('src', '<?php echo site_url(); ?>/wp-content/themes/thegem-child/cap2.php?nocache=' + Math.random());
});
  jQuery("#webtoLeadFormOne").click(function(e){
      console.log("hi from sms");
   e.preventDefault();
   var ids = ['last_name','email','company','vercode'];

   var last_name = jQuery('#last_name').val();
   var email = jQuery('#email').val();
   var company = jQuery('#company').val();
   var vercode = jQuery('#vercode').val();
   var description = jQuery('#description').val();
   var phone = jQuery('#phone').val();
   removeValidations(ids);
   if(last_name == "" || email == "" || company == "" || vercode == "" ){

    if(last_name == ""){
      jQuery("#last_name_error").html('Required Field');
    }
    if(email == ""){
      jQuery("#email_error").html('Required Field');
    }
    if(company == ""){
      jQuery("#company_error").html('Required Field');
    }
    if(vercode == ""){
      jQuery("#vercode_error").html('Required Field');
    }

    return false;   
  }
  else if(email.indexOf("@", 0) < 0){
   jQuery('#email_error').html('Invalid Email');
   jQuery('#email').focus();
   return false;
 }
 else if(email.indexOf(".", 0) < 0){
  jQuery('#email_error').html('Invalid Email');
  jQuery('#email').focus();
  return false;
}

else{
            // var baseURL =  '<?php echo site_url(); ?>/wp-content/themes/thegem-child/vwebtolead.php';
            var baseURL =  '<?php echo site_url(); ?>/wp-content/themes/thegem-child/checkdata.php';
            var form = jQuery('#formFirstLead');
            var currentUrl = location.href;
            var formData = form.serialize();
            formData += '&c_url=' + encodeURIComponent(currentUrl);
            jQuery.ajax({
              url: baseURL,
              method: 'post',
              data: formData,
              success: function(response) {
               var res = JSON.parse(response); 
               if(res.st === parseInt(1)){
                location.href = res.url;

              }else if(res.st === parseInt(2)){
                jQuery("#vercode_error").html(res.msg);
                return false;   
              }else if(res.st === parseInt(3)){
                jQuery("#last_name_error").html(res.msg);
                return false;   
              }else if(res.st === parseInt(4)){
                jQuery("#email_error").html(res.msg);
                return false;   
              }else if(res.st === parseInt(5)){
                jQuery("#company_error").html(res.msg);
                return false;   
              } else if(res.st === parseInt(6)){
                jQuery("#description_error").html(res.msg);
                return false;   
              } else if(res.st === parseInt(8)){
                jQuery("#all_error").html(res.msg);
                return false;   
              }
              else if(res.st === parseInt(0)){
                jQuery("#all_error").html(res.msg);
                return false;   
              }
              else{
               jQuery("#all_error").html("Something Went Wrong Please Try Again Later");
               return false; 

             }


           }
         });  
          }


        });

}); 

function removeValidations(ids) {
 jQuery(ids).each(function(index, key) {
  jQuery("#" + key).keyup(function() {
    jQuery("#" + key + "_error").html('');
  });
});
}                                           


</script>

<?php
}

add_shortcode('australia_pageshortcode','australia_page');
function australia_page(){
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      padding: 0;
      margin: 0;
    }

    .conct_txt {
      width: 80%;
      margin: 0 auto;

    }

    .conct_txt p {
      color: #fff;
      font-size: 52px;
    }

    .frm {
      display: flex;
      flex-direction: column;
      width: 80%;
      margin: 0 auto;
    }

    .form_section {
      display: flex;
      flex-wrap: wrap;
    }

    .input_four {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .input_four>div label {
     margin-bottom: 10px !important;
     display: block;
   }

   .input_four input {
     padding: 5px 12px;
     width: 100%;
     background-color: #f7f6f6 !important;
   }
   .input_four1 {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
  }
  .input_four1>div label {
    margin-bottom: 10px !important;
    display: block;
  }
  .d-flexform {
    margin: 3% 0%;
  }
  .input_four1 input {
    padding: 5px 12px;
    width: 100%;
    background-color: #f7f6f6 !important;
  }
  input {
    padding: 15px 20px;
    outline: none;
    font-size: 17px;
    border: none;
  }
  .button {
    width: 40% !important;
    padding: 7px 50px;
    outline: none;
    color: #fff;
    border: none;
    background-color: #006efd;
    background-image: linear-gradient(136deg, #0c92cc 0%, #0c92cc 50%, #0c92cc 100%);
    font-size: 17px;
    background-size: 200% auto;
  }
  .btn {
    text-align: center;
    padding-top: 36px;
  }
  .textareadesign{
    margin-bottom: 20px;
    padding: 7px 10px;
    width: 100%;
    background-color: #f7f6f6 !important;
    border: 1px solid #dfe5e8;
    height: 105px;
  }
  .button:hover {
   background-color: transparent;
   background-position: right center !important;
 }
 .heading h2 {
   text-align: center !important;
   margin: 0 !important;
   margin-bottom: 40px !important;
 }
 .input_four>div {
   width: 48%;
 }
 .input_four1>div {
   width: 100%;
 }
 .input_four .company {}

 .main {
  font-family: 'Montserrat', sans-serif !important;
}
form span.error, span.error1 {
  color: red;
  font-size: 12px;
  font-weight: 400;
}
.error {
  color: red;
  margin-left: 0px;
  position: relative;
  top: -16px;
}
.cus-button{
  display: flex !important;
  justify-content: center !important;
  margin: auto !important;
}   #phonefield{
 padding-left:0px;
}
@media(max-width: 768px) { img.codeImg{
  width:100% !important;margin-bottom:20px;
}   #phonefield{
 padding-left:21px;
} .formBack.row .col-sm-4 {
  padding-right: 0px;
}@media(max-width: 480px) {   #phonefield{
 margin-top:15px;}}

 select {
  width: 100%;
}

.button {
  width: 100%;
}

.container {
  padding: 0;
}

.conct_txt p {
  margin-top: 0;
  padding-top: 30px;
}

.btn {
  margin-bottom: 30px;
}

.input_four>div {
  width: 100%;
}
}
.form_section input{
  margin: 0px auto 16px;
  line-height: 25px;
  justify-content: center;
  display: flex;
}
select#phone_code {
 height: 33px;
 width: 100%;
 padding: 5px 12px;
 background-color: #f7f6f6 !important;
 border-color: #ccc;
 font-size:16px;
}
input#phone{
  width: 100%;
  padding: 3px 10px;
  background-color: #f7f6f6 !important;
}
.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-2,.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-3,.iti {
 width: 100% !important;
}
input#phone_code {
  width: 100%;
  background-color: #f7f6f6 !important;
  padding-top: 5px;
  padding-bottom: 5px; 
  border: 1px solid #ccc;
}
.mb-16{
  margin: 0px auto 16px;
}
</style>
<META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">

<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <FORM> element to your page.             -->
  <!--  ----------------------------------------------------------------------  -->

  <form id="formFirstLead" >
    <input type="hidden" name="encoding" value="UTF-8">

    <input type=hidden name="oid" value="00D61000000cnSO"> 
    <input type=hidden name="retURL" value="<?php echo get_site_url(); ?>/thank-you/">

    <!--  ----------------------------------------------------------------------  -->
    <!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
    <!--  these lines if you wish to test in debug mode.                          -->
    <!--  <input type="hidden" name="debug" value=1>                              -->
    <!--  <input type="hidden" name="debugEmail"                                  -->
    <!--  value="rinnie@360degreecloud.com">                                      -->
    <!--  ----------------------------------------------------------------------  -->

    <div class="form_section">
      <div class="frm">
        <div class="input_four">
          <div>
            <input  id="one" maxlength="40" name="first_name" size="20" type="text"  placeholder="First Name" />
            <span class="error" id="one_error"></span>
          </div>
          <div>
            <input  id="last_name" maxlength="80" name="last_name" size="20" type="text"  placeholder="Last Name"/>
            <span id="last_name_error" style="color:red;"></span>
          </div>

        </div>
        <div class="input_four"> 
          <div>
           <input placeholder="Business Email" id="email" maxlength="80" name="email" size="20" type="email" class="form-control wpcf7-text" style="border: 1px solid #ccc;" onblur="verify_email_contactus(this.value)" />
           <span id="email_error" style="color:red;"></span>
           <span class="ldremailchk text-center" style="display: none !important;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
         </div>
         <div>
            <input id="company" maxlength="40" placeholder="Company" name="company" size="20" type="text">
            <span id="company_error" style="color:red;"></span>
          </div>
         
         
       </div>
       <div class="row" style="margin-bottom: 0px;">
        <script type="text/javascript">
          $(function () {
            var code = "+1"; // Assigning value from model.
            $('#phone_code').val(code);
            $('#phone_code').intlTelInput({
              allowExtensions: true,
              autoHideDialCode: true,
              autoPlaceholder: "ON",
              dropdownContainer: document.body,
              formatOnDisplay: true,
              hiddenInput: "full_number",
              initialCountry: "auto",
              nationalMode: true,
              placeholderNumberType: "MOBILE",
              preferredCountries: ['US','GB' ,'AU' ,'CA' ,'IN'],
              separateDialCode: true
            });
            $('#btnSubmit').on('click', function () {
              var code = $("#phone_code").intlTelInput("getSelectedCountryData").dialCode;
              var phoneNumber = $('#phone_code').val();
              var name = $("#phone_code").intlTelInput("getSelectedCountryData").name;
              alert('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);
            });
          });
          function verify_phone_contactnew(phone){ 
           var selval = jQuery('.selected-dial-code').text().slice(1);
           var phone = jQuery('input#phone_code').val();
           console.log(phone + ' ' + selval);
           if(phone!= '' && phone.length >= 10 && selval!= ''){       
            jQuery('span.ldrphone').show();
            jQuery('span#phone_error').hide();
            var phone_check = phone.trim();
            var ever = jQuery('#ever').val();
            var phone_code = jQuery('.selected-dial-code').text().slice(1);
            var pageid = jQuery("input#pageid").val();
            var baseURL = '<?php echo site_url(); ?>/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
            jQuery.ajax({
              crossDomain: true,
              url: baseURL,
              method: 'POST',
              data: {"phone_code":phone_code,"phone":phone_check},
              success: function(response) {
               jQuery('span.ldrphone').hide();
               jQuery('span#phone_error').show();
               res = JSON.parse(response);
               if(res.status == false){

                 jQuery('#phone_error').html('');   
                 jQuery('#phone_error').html('Invalid Number');
                 if(ever == "1" || ever == 1 ){  
                         // alert(ever);
                       }else{ //alert(ever);

                        jQuery('#phone_error').html('');   
                        jQuery('#phone_error').html('Invalid Number');
                        //   jQuery('#phone').val('');  
                      }
                    }
                    else if(res.status == true){

                     jQuery('#phone_error').html('<span style="color:green">Valid Number</span>');
                     jQuery('#pver').val('1'); 
                   }
                 }
               });

          }else if(selval!= '' && phone != "" && phone.length < 10){

            jQuery('#phone_error').html(' ');
            jQuery('#phone_error').html('Invalid Number');
          }else if(selval == ''){

            jQuery('#phone_error').html(' ');
            jQuery('#phone_error').html('Please select country code.');
          }else if(phone == ""){

            jQuery('#phone_error').html(' ');
            jQuery('#phone_error').html('Invalid Number');
          }
        }
      </script>
      <div class="col-12 col-xs-12 col-md-12 mb-16">
        <input oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Phone" id="phone_code" name="phone" onblur="verify_phone_contactus(this.value)" type="tel" class="form-control wpcf7-text focus-on phnnumb" style="">
        <span id="phone_error" style="color:red;"></span> <span id="country_error" style="color:red;"></span>
        <span class="ldrphone text-center" style="display: none;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
      </div>
    </div>
    <!--country deepak 2      -->
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/country-picker-flags/build/css/countrySelect.css">
    	<style>
    	.country-select.inside{
    	    width:100%;
    	}
        .country-select .country-list .country {
            padding: 0px 7px;
        }
        .selected-flag {
            background: #f2f2f2;
        }
        input#country_selector {
            text-indent: 5px; width: 100%;
            height: 36px;
            background: #f7f6f6;
        }
        .country-select.inside {
            width: 100%;
        }
        p.country {
   margin:0;
   text-indent: 12px;
}

	</style>
           <p class="country">Please select country below</p>

            <fieldset class="form-col" id="" style="padding: 0px;border: none;margin:0 0 1em;">
                <input id="country_selector" type="text" name="">
                  <span id="companydev_error" style="color:red;"></span>

				<label for="country_selector" style="display:none;">Select a country here...</label>
				<div class="form-item" style="display:none;">
        				<input type="text" id="country_selector_code" name="Country__c" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
        				<label for="country_selector_code">...and the selected country code will be updated here</label>
        			</div>
        			<button type="submit" style="display:none;">Submit</button>
    		</fieldset> 
              <script src="https://www.jqueryscript.net/demo/country-picker-flags/build/js/countrySelect.js"></script>    
              <script>
    			jQuery("#country_selector").countrySelect({
    				// defaultCountry: "jp",
    				// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    				// responsiveDropdown: true,
    				preferredCountries: ['us', 'gb', 'in', 'ca']
    			});
    		</script>
    		
      <!--country end deepak      -->
    <div class="input_four1">
      <textarea name="description" class="textareadesign" id="description" placeholder="Your message goes here.." ></textarea>
      <span id="description_error" style="color:red;"></span>
      
      <input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
       
      <select  id="lead_source" name="lead_source" style="display: none;">
        <?php 
            if(is_page('aus')){
                echo '<option value="SEO">SEO</option>';
            }
            if(is_page('uk')){
                echo '<option value="SEO">SEO</option>';
            }
        ?>
      </select>
      
	<input type="hidden" 
       id="lead_source_sub" 
       name="Sub_Lead_Source__c" 
       value="360SMS-Contact Us" />

	<input type="hidden" 
       id="Lead_Source_URL__c" 
       name="Lead_Source_URL__c" 
       value="<?php echo esc_url( get_permalink() ); ?>" />
       
      <div class="row formBack" style="padding: 0px !important;margin-left: 0px;">          
       <div class="col-md-3 col-lg-3 col-xs-4" style="padding:0px !important"> 
        <?php
        $pid = get_queried_object_id();
    
        ?>
    <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['current_captcha_form_id'] = $pid;
        ?>
        <img alt="captcha" 
             src="<?php echo get_site_url(); ?>/wp-content/themes/thegem-child/cap2.php" 
             id="captchaImg_<?php echo $pid; ?>"
             class="codeImg" style="width:100%;height: 44px;padding-left: 5px;">  </div>
        <input type="hidden" name="pageid" id="pageid"  value="<?php echo $pid;?>">
        <div class="col-md-4 col-lg-4 col-xs-2" style="padding:0px !important;text-align: -webkit-center;"> 

      </div> 

      <div class="col-md-5 col-xs-6" style="padding:0px !important">
       <div class="form-group ">
        <input type="text" name="vercode" id="vercode" class="wpcf7-form-control wpcf7-text " placeholder="Enter value"> 
        <span id="vercode_error" style="color:red;"></span>
      </div>
    </div> 
  </div>
    <input type="hidden" id="company" name="page_id" value="39680">
  <input type="hidden" id="ever" value="0">
  <input type="hidden" id="pver" value="0">
  <span id="all_error" style="color:red;width: 100%;"></span>
  <input type="submit" name="submit" id="webtoLeadFormOne" class="button"/>
</div>
</div>
</div>
</form>

<?php
}

add_shortcode('industry_pageshortcode','industry_form');
function industry_form(){
    //echo '';
  ?>
  <style>
    .col-one {
      padding: 0% 15px 2.7% 1% !important;
      margin: 0px 0 0 0;
      background-color: #f9f9f9;
    }
    .d-flex {
      display: flex !important;
    }
    .text-center {
      text-align: center;
      
    }
    h3.text-center {
      color: #ffffff;
      font-size: 40px;
      display: flex;
      justify-content: center;
      margin: 35% 0px 5% 0px;
    }
    .form-col {
      padding: 0px 10px 0px 10px;
    }
    .width-50 {
      width: 50%;
    }
    .form-select {
      background-color: rgba(229, 241, 248, 0.58);
      min-height: 56px;
      border: none !important;
      background-position-y: 28px;
      padding: 16px 18px;
    }
    .form-control {
      display: block !important;
      width: 100% !important;
      /*height: calc(1.5em + .75rem + 2px);*/
      padding: 7px 18px !important;
      font-size: 20px !important;
      font-weight: 400 !important;
      line-height: 1.5 !important;
      color: #495057 !important;
      background-color: rgba(229, 241, 248, 0.58) !important;
      /*border: 1px solid #ced4da; */
      border: none !important;
    }
    .button1 {
      font-weight: 700 !important;
      font-size: 17.5px !important;
      line-height: 17.5px !important;
      font-style: normal;
      padding: 12px 25px !important;
      border: 1px solid !important;
      border-radius: 5px !important;
      background: #00bcd4 !important;
      color: #ffffff !important;
      border-color: #00bcd4 !important;
    }
    .buttonmr{
      margin:5px !important;
    }
    .error {
      color: red !important;
      margin-left: 5px !important;
    }

    label.error {
      display: inline !important;
    }
    .col-bg{
      background-image: url(/wp-content/uploads/2022/03/main-footer_form_bg.jpg); 
      /*height: 24.75em;*/
    }
    form#formFirstLead {
      padding-top: 10px;
    }
    .intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-2,.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-3,.iti{
      width: 100% !important;
    }
    input#phone_code {
      font-size: 20px !important;
      font-weight: 400 !important;
      line-height: 1.5 !important;
      color: #495057 !important;
      background-color: rgba(229, 241, 248, 0.58) !important;
      border: none;
      width: 100% !important;
      padding-top: 5px;
      padding-bottom: 5px;
    }
    .phone_pd{
      padding:0px 10px !important;
    }
    @media screen and (min-width: 1200px) {
  .formwidth {
    width: 900px !important;
    max-width: 900px !important;
    display: flex;
    justify-content: center;
    margin: 1% auto 0%;
  }
} 
    @media only screen and (max-device-width: 769px) {
     img.codeImg{
        margin-bottom:20px;
    } input#vercode {
      max-width: 93%;
      margin: auto;
    }
    .d-flexform{
      display: block !important;
      margin: 2% 0% !important;
    } .d-flexform input{

      margin: 4% 0% !important;
    } 
    .width-50 {
      width: 100%;
    }
    h3.text-center {
      color: #ffffff;
      font-size: 40px;
      display: flex;
      justify-content: center;
      margin: 0% 0px 5% 0px;
      padding: 18% 0 0px 0;
    }
    .col-bg {
      background-image: url(/wp-content/uploads/2022/03/main-footer_form_bg.jpg);
      height: auto;
    }
    .text-center {
      text-align: center;
      color: #ffffff;
      padding-bottom: 10%;
    }
    .col-one {
      padding: 0% 15px 0% 1% !important;
      margin: -19px 0 0 0;
      background-color: #f9f9f9;
    }
    .phone_pd{
      margin-bottom: 12px 
    }
  } @media only screen and (max-device-width: 569px) { 
    img.codeImg{
    margin-bottom:20px;
  }
  span#vercode_error {
    padding-left: 10px;
  }
  form#formFirstLead {
    padding-top: 10px;
    padding-bottom: 20px;
  }
}


</style>


<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
  <!--  If necessary, please modify the charset parameter to specify the        -->
  <!--  character set of your HTML page.                                        -->
  <!--  ----------------------------------------------------------------------  -->

  <meta http-equiv="Content-type" content="text/html; charset=UTF-8">


  <!--  ----------------------------------------------------------------------  -->
  <!--  NOTE: Please add the following <FORM> element to your page.             -->
    <!--  ----------------------------------------------------------------------  -->
    <div class=" formwidth">
      <div class="col-md-6 col-bg">
        <h3 class="text-center">Contact Us</h3>
        <p class="text-center">No matter where you are from, we provide Global Coverage.</p>
      </div>
      <div class="col-md-6 col-one">

        <form id="formFirstLead">
          <input type="hidden" name="encoding" value="UTF-8">
          <input type="hidden" name="oid" value="00D61000000cnSO"> 
          <input type="hidden" name="retURL" value="<?php echo get_site_url(); ?>/thank-you/">
          <input type="hidden" id="ever" value="0">
          <input type="hidden" id="pver" value="0">


          <div class="d-flex d-flexform">
            <div class="form-col width-50">
              <input placeholder="Name" id="last_name" maxlength="255" name="last_name" size="20" type="text"
              class="form-control wpcf7-text" style="border: 1px solid #ccc;"
              >
              <span id="last_name_error" style="color:red;"></span>
            </div>


            <div class="form-col width-50" id="email_p">
              <input placeholder="Business Email" id="email" maxlength="80" name="email" size="20" type="email"
              class="form-control wpcf7-text" style="border: 1px solid #ccc;" onblur="verify_email_contactus(this.value);">
              <span id="email_error" style="color:red;"></span>

              <span class="ldremailchk text-center" style="display: none;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
            </div>
          </div>
          <div class="d-flex d-flexform">
            <script type="text/javascript">
              $(function () {
            var code = "+1"; // Assigning value from model.
            $('#phone_code').val(code);
            $('#phone_code').intlTelInput({
              allowExtensions: true,
              autoHideDialCode: true,
              autoPlaceholder: "ON",
              dropdownContainer: document.body,
              formatOnDisplay: true,
              hiddenInput: "full_number",
              initialCountry: "auto",
              nationalMode: true,
              placeholderNumberType: "MOBILE",
              preferredCountries: ['US','GB' ,'AU' ,'CA' ,'IN'],
              separateDialCode: true
            });
            $('#btnSubmit').on('click', function () {
              var code = $("#phone_code").intlTelInput("getSelectedCountryData").dialCode;
              var phoneNumber = $('#phone_code').val();
              var name = $("#phone_code").intlTelInput("getSelectedCountryData").name;
              alert('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);
            });
          });
              function verify_phone_contactnew(phone){ 
               var selval = jQuery('.selected-dial-code').text().slice(1);
               var phone = jQuery('input#phone_code').val();
               console.log(phone + ' ' + selval);
               if(phone!= '' && phone.length >= 10 && selval!= ''){       
                jQuery('span.ldrphone').show();
                jQuery('span#phone_error').hide();
                var phone_check = phone.trim();
                var ever = jQuery('#ever').val();
                var phone_code = jQuery('.selected-dial-code').text().slice(1);
                var pageid = jQuery("input#pageid").val();
        var baseURL = '<?php echo site_url(); ?>/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
                jQuery.ajax({
                  crossDomain: true,
                  url: baseURL,
                  method: 'POST',
                  data: {"phone_code":phone_code,"phone":phone_check},
                  success: function(response) {
                   jQuery('span.ldrphone').hide();
                   jQuery('span#phone_error').show();
                   res = JSON.parse(response);
                   if(res.status == false){

                     jQuery('#phone_error').html('');   
                     jQuery('#phone_error').html('Invalid Number');
                     if(ever == "1" || ever == 1 ){  
                         // alert(ever);
                       }else{ //alert(ever);

                        jQuery('#phone_error').html('');   
                        jQuery('#phone_error').html('Invalid Number');
                        //   jQuery('#phone').val('');  
                      }
                    }
                    else if(res.status == true){

                     jQuery('#phone_error').html('<span style="color:green">Valid Number</span>');
                     jQuery('#pver').val('1'); 
                   }
                 }
               });

              }else if(selval!= '' && phone != "" && phone.length < 10){

                jQuery('#phone_error').html(' ');
                jQuery('#phone_error').html('Invalid Number');
              }else if(selval == ''){

                jQuery('#phone_error').html(' ');
                jQuery('#phone_error').html('Please select country code.');
              }else if(phone == ""){

                jQuery('#phone_error').html(' ');
                jQuery('#phone_error').html('Invalid Number');
              }
            }
          </script>
          <div class="col-12 col-xs-12 col-md-12 phone_pd">
            <input oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Phone" id="phone_code" name="phone" onblur="verify_phone_contactus(this.value)" type="tel" class="wpcf7-text focus-on phnnumb" style="">
            <span id="phone_error" style="color:red;"></span> <span id="country_error" style="color:red;"></span>
            <span class="ldrphone text-center" style="display: none;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
          </div>
        </div>
        <!--country deepak 3     -->
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/country-picker-flags/build/css/countrySelect.css">
    	<style>
    	.country-select.inside{
    	    width:100%;
    	}
        .country-select .country-list .country {
            padding: 0px 7px;
        }
        .selected-flag {
            background: #f2f2f2;
        }
        input#country_selector {
            text-indent: 5px; width: 100%;
        }
        .country-select.inside {
            width: 100%;
        }
        input#country_selector {
          background: rgba(229, 241, 248, 0.58) !important;
          height: 40px;
          border: none;
      }
      input#country_selector {
    font-size: 20px;
    font-weight: 400;
    color: #757575;
}
p.country {
   margin:0;
   text-indent:12px;
}

	</style>
           <p class="country">Please select country below</p>

            <fieldset class="form-col" id="" style="padding: 0px 10px 0px 10px;border: none;">
                <input id="country_selector" type="text" name="">
                  <span id="companydev_error" style="color:red;"></span>

				<label for="country_selector" style="display:none;">Select a country here...</label>
				<div class="form-item" style="display:none;">
        				<input type="text" id="country_selector_code" name="Country__c" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
        				<label for="country_selector_code">...and the selected country code will be updated here</label>
        			</div>
        			<button type="submit" style="display:none;">Submit</button>
    		</fieldset> 
              <script src="https://www.jqueryscript.net/demo/country-picker-flags/build/js/countrySelect.js"></script>    
              <script>
    			jQuery("#country_selector").countrySelect({
    				// defaultCountry: "jp",
    				// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    				// responsiveDropdown: true,
    				preferredCountries: ['us', 'gb', 'in', 'ca']
    			});
    		</script>
    
      <!--country end deepak      -->
        <div class="d-flex d-flexform">
          <div class="form-col" style="width: 100%;">
           <input placeholder="Company"  id="company" maxlength="40" name="company" size="20" type="text"
           class="form-control wpcf7-text" style="border: 1px solid #ccc;" />
           <span id="company_error" style="color:red;"></span>

         </div>
       </div>

       <div class="d-flex d-flexform">
        <div class="form-col" style="width: 100%;">
          <div class="form-group">
            <textarea id="description" name="description" rows="6" class="form-control wpcf7-text"
            placeholder="Description...." style="border: 1px solid #ccc; height: 68px; margin-bottom: 2%;"></textarea>
          </div><span id="description_error" style="color:red;"></span>
          <p style="color: #271c1c; font-size: 14px;">By clicking 'Submit,' I agree to subscribe to promotional messages and newsletters.</p>
        </div>
      </div>
      <div class="row formBack">
        <div class="col-sm-4 col-xs-4 mt-4">
<?php
        $pid = get_queried_object_id();
    
        ?>
    <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['current_captcha_form_id'] = $pid;
        ?>
        <img alt="captcha" 
             src="<?php echo get_site_url(); ?>/wp-content/themes/thegem-child/cap2.php" 
             id="captchaImg_<?php echo $pid; ?>"
             class="codeImg" style="width:100%;height: 44px;padding-left: 5px;">                                    <?php //session_start();  
                           //echo "<pre>"; print_r($_SESSION); 

                                        ?>
                                        <input type="hidden" name="pageid" id="pageid"  value="<?php echo $pid;?>">
                                      </div>
                                      <div class="col-sm-2 col-xs-2 mt-4">
                                        <p  class="btnRefresh" style="cursor: grab;"><img alt="refresh-icon" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/04/free-refresh-icon-3104-thumb-1.png" style="height: 40px;"></p>
                                      </div>
                                      <div class="col-sm-6 col-xs-6 mt-4">
                                        <div class="form-group ">
                                          <input type="text" name="vercode" id="vercode" class="form-control" placeholder="Enter value">
                                          <span id="vercode_error" style="color:red;"></span>
                                        </div>
                                      </div> </div>
                                      <?php
                                      if(is_page(37889)){
                                        $source="Industry-Mortgage";
                                      } elseif(is_page(33818 )){
                                        $source="Industry-Education";

                                      } elseif(is_page(33847 )){
                                        $source="Industry-Finance";

                                      } elseif(is_page(33851 )){
                                        $source="Industry-Healthcare";

                                      } elseif(is_page(33870 )){
                                        $source="Industry-Nonprofit";

                                      }  elseif(is_page(36283 )){
                                        $source="Industry-ISP";

                                      } elseif(is_page(37348 )){
                                        $source="Industry-Insurance";

                                      }  elseif(is_page(33882 )){
                                        $source="Industry-Realestate";

                                      }  elseif(is_page(34328)){
                                        $source="Industry-Recruitment";

                                      }  elseif(is_page(36285)){
                                        $source="Industry-legal";

                                      }  elseif(is_page(38427)){
                                        $source="Industry-Sales";

                                      }  elseif(is_page(38214)){
                                        $source="Industry-Service";

                                      }  elseif(is_page(38215)){
                                        $source="Industry-Marketing";

                                      } elseif(is_page(37455)){
                                        $source="Industry-Professional";

                                      }  
                                      ?>

<input type="hidden" 
	name="First_touch_URL__c"
    value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
    
<input type="hidden" 
       id="lead_source" 
       name="lead_source" 
       value="<?php echo esc_attr( get_field('lead_source') ); ?>" />

<input type="hidden" 
       id="lead_source_sub" 
       name="Sub_Lead_Source__c" 
       value="<?php echo esc_attr( get_field('sub_lead_source') ); ?>" />

<input type="hidden" 
       id="Lead_Source_URL__c" 
       name="Lead_Source_URL__c" 
       value="<?php echo esc_url( get_permalink() ); ?>" />



                                      <div class="form-col" style="width: 100%;">
                                        <span id="all_error" style="color:red;"></span>
                                        <input type="submit" name="submit" id="webtoLeadFormOne" class="button1 buttonmr" style="width: 100%;"/>
                                      </div>
                                    </form>                    

                                  </div>
                                </div>
                                <?php
                              }
                              
    


/**
 * PPC Landing Page Form Shortcode
 * Shortcode: [contact_ppc_shortcode]
 *
 * - Designed for: https://360smsapp.com/360-sms-app-for-salesforce-ppc/
 * - Supports multiple instances on the same page (static counter).
 * - All IDs are prefixed "ppc_" + instance number to avoid any conflict
 *   with the original [contact_pageshortcode] or any other form on the page.
 * - No captcha, no description field (PPC-specific).
 * - Includes: Job Title, Industry, City.
 */



                              add_shortcode('contact_pageshortcode','contactpageform');
                              function contactpageform(){
                                ?>
                                <!--  ----------------------------------------------------------------------  -->
                                <!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
                                  <!--  If necessary, please modify the charset parameter to specify the        -->
                                  <!--  character set of your HTML page.                                        -->
                                  <!--  ----------------------------------------------------------------------  -->

                                  <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">

                                  <!--  ----------------------------------------------------------------------  -->
                                  <!--  NOTE: Please add the following <FORM> element to your page.             -->
                                    <!--  ----------------------------------------------------------------------  -->
                                    <style>
                                      select.phncode{
                                       height: 51px !important;
                                       border-radius: 0px !important;
                                       border-color: #ccc;
                                       width: 100%;
                                     }
                                     input#vercode {
                                      border: 1px solid #ccc;
                                    }
                                    @media screen and (min-device-width: 768px) and (max-device-width: 1024px){

                                      .select-height{
                                        height:52px !important;
                                        border-radius: 0px !important;
                                      }
                                      select#phone_code {
                                        padding: 11.5px 0.5px 11.5px 0.5px !important;
                                        padding-left: 10px !important;
                                      }
                                    }
                                    @media screen and (min-device-width: 280px) and (max-device-width: 767px){
                                      .select-height{
                                        height:51.8px !important;
                                        border-radius: 0px !important;
                                      }
                                      fieldset.form-col {
                                          margin-bottom: 7px !important;
                                      }
                                    }
                                    @media (max-width: 1199px){
                                      .row > * {
                                        margin-top: 0;
                                        margin-bottom: 6px;
                                      }
                                      .row{
                                        margin-top: 0;
                                        margin-bottom:0;
                                      }
                                    }
                                    form label {
                                      display: inline-block;
                                      width: 100px;
                                    }

                                    form div {
                                      margin-bottom: 10px;
                                    }

                                    .error {
                                      color: red !important;
                                      margin-left: 5px;
                                    }

                                    label.error {
                                      display: inline;
                                    }
                                   .intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-2{
                                     width: 100% !important;
                                   }
                                  .flag-container {
                                      background: rgba(0, 0, 0, 0.05) !important;
                                      margin: 0px;
                                      
                                  }
                                  
                                  /*Page loader Start*/
                                    .post_outer.show {
                                    display: block;
                                    }
                                   .post_outer {
                                    position: fixed;
                                    background: rgba(0,0,0,0.5);
                                    z-index: 999999999;
                                    width: 100%;
                                    height: 100%;
                                    top: 0;
                                    left: 0;
                                    border-radius: 4px;
                                    display: none;
                                     }
                                
                                	.post_loader.show {
                                    display: block;
                                    position: absolute;
                                    z-index: 1001;
                                    opacity: 1;
                                    left: 50%;
                                    bottom: 0;
                                    right: 0;
                                    top: 50%;
                                    border: 8px solid #f3f3f3;
                                    border-radius: 50%;
                                    border-top: 8px solid #3498db;
                                    width: 40px;
                                    height: 40px;
                                    -webkit-animation: spins 2s linear infinite; / Safari /
                                    animation: spins 2s linear infinite;
                                    }
                                    / Safari /
                                    @-webkit-keyframes spins {
                                      0% { -webkit-transform: rotate(0deg); }
                                      100% { -webkit-transform: rotate(360deg); }
                                    }
                                    
                                    @keyframes spins {
                                      0% { transform: rotate(0deg); }
                                      100% { transform: rotate(360deg); }
                                    }
                                  /*Page loader End*/
                                  </style>                                  
        <form   class="wpcf7-form gem-contact-form-white" id="formFirstLead">
            <div class="post_outer"><span class="post_loader show"></span></div>

         <input type=hidden name="oid" value="00D61000000cnSO">
         <input type=hidden name="retURL" value="<?php echo get_site_url(); ?>/contact-us-thank-you/">
         <input type="hidden" id="ever" value="0">
         <input type="hidden" id="pver" value="0">
         <!--  ----------------------------------------------------------------------  -->
         <!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
         <!--  these lines if you wish to test in debug mode.                          -->
         <!--  <input type="hidden" name="debug" value=1>                              -->
         <!--  <input type="hidden" name="debugEmail" value="sid@360smsapp.com">       -->
         <!--  ----------------------------------------------------------------------  -->
         <div class="row">
    <!--<div class="col-md-6">
        <input placeholder="First Name" id="first_name" maxlength="255" name="first_name" size="20" type="text" class="wpcf7-form-control wpcf7-text "  style="border: 1px solid #ccc;"/>
      </div>-->
      <div class="col-md-6">
    
    
<input type="hidden" name="First_touch_URL__c"
        value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
    
        <input placeholder="Name" id="last_name" maxlength="255" name="last_name" size="20" type="text" class="wpcf7-form-control wpcf7-text "  style="border: 1px solid #ccc;"/>
        <span id="last_name_error" style="color:red;"></span>

      </div>
      <div class="col-md-6">
        <input placeholder="<?php echo is_page([67413, 67501, 68015, 67530, 67660, 67671, 67676, 67680, 67700, 67678,67768,67793,67968]) ? 'Email Address' : 'Business Email'; ?>" id="email" maxlength="80" name="email" size="20" type="email" class="form-control wpcf7-text" style="border: 1px solid #ccc;" onblur="verify_email_contactus(this.value)" />
        <span id="email_error" style="color:red;"></span>
        <span class="ldremailchk text-center" style="display: none !important;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
      </div>
    </div>
    <div class="row">
      <script type="text/javascript">
    jQuery(document).ready(function($) {
            var code = "+1"; // Assigning value from model.
            $('#phone_code').val(code);
            $('#phone_code').intlTelInput({
              allowExtensions: true,
              autoHideDialCode: true,
              autoPlaceholder: "ON",
              dropdownContainer: document.body,
              formatOnDisplay: true,
              hiddenInput: "full_number",
              initialCountry: "auto",
              nationalMode: true,
              placeholderNumberType: "MOBILE",
              preferredCountries: ['US','GB' ,'AU' ,'CA' ,'IN'],
              separateDialCode: true
            });
            $('#btnSubmit').on('click', function () {
              var code = $("#phone_code").intlTelInput("getSelectedCountryData").dialCode;
              var phoneNumber = $('#phone_code').val();
              var name = $("#phone_code").intlTelInput("getSelectedCountryData").name;
              alert('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);
            });
          });
    function verify_phone_contactnew(phone){ 
     var selval = jQuery('.selected-dial-code').text().slice(1);
     var phone = jQuery('input#phone_code').val();
     console.log(phone + ' ' + selval);
     if(phone!= '' && phone.length >= 10 && selval!= ''){       
      jQuery('span.ldrphone').show();
      jQuery('span#phone_error').hide();
      var phone_check = phone.trim();
      var ever = jQuery('#ever').val();
      var phone_code = jQuery('.selected-dial-code').text().slice(1);
      var pageid = jQuery("input#pageid").val();
        var baseURL = '<?php echo site_url(); ?>/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
      jQuery.ajax({
        crossDomain: true,
        url: baseURL,
        method: 'POST',
        data: {"phone_code":phone_code,"phone":phone_check},
        success: function(response) {
         jQuery('span.ldrphone').hide();
         jQuery('span#phone_error').show();
         res = JSON.parse(response);
         if(res.status == false){

           jQuery('#phone_error').html('');   
           jQuery('#phone_error').html('Invalid Number');
           if(ever == "1" || ever == 1 ){  
                         // alert(ever);
                       }else{ //alert(ever);

                        jQuery('#phone_error').html('');   
                        jQuery('#phone_error').html('Invalid Number');
                        //   jQuery('#phone').val('');  
                      }
                    }
                    else if(res.status == true){

                     jQuery('#phone_error').html('<span style="color:green">Valid Number</span>');
                     jQuery('#pver').val('1'); 
                   }
                 }
               });
      
    }else if(selval!= '' && phone != "" && phone.length < 10){

      jQuery('#phone_error').html(' ');
      jQuery('#phone_error').html('Invalid Number');
    }else if(selval == ''){

      jQuery('#phone_error').html(' ');
      jQuery('#phone_error').html('Please select country code.');
    }else if(phone == ""){

      jQuery('#phone_error').html(' ');
      jQuery('#phone_error').html('Invalid Number');
    }
  }
</script>
<div class="col-12 col-sm-12 col-md-6 phone1">
  <input oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Phone" id="phone_code" name="" onblur="verify_phone_contactnew(this.value)" type="tel" class="form-control wpcf7-text focus-on phnnumb" style="border-top: 1px solid #ccc;border-bottom: 1px solid #ccc;border-right: 1px solid #ccc; border-left: 1px solid #ccc;">

  <input type="hidden" id="merged_phone" name="phone" value="">

  <span id="phone_error" style="color:red;"></span> <span id="country_error" style="color:red;"></span>
  <span class="ldrphone text-center" style="display: none;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
</div>
    <div class="col-md-6 company">
      <input placeholder="Company" id="company" maxlength="40" name="company" size="20" type="text" class="wpcf7-form-control wpcf7-text "  style="border: 1px solid #ccc;"/>
      <span id="company_error" style="color:red;"></span>
    </div>
     <?php if ( is_page([67413, 67501, 68015, 67530, 67660, 67671, 67676, 67680, 67700, 67678,67768,67793,67968]) ) { ?>
     
     <input type="hidden" name="form_shortcode" value="contact_pageshortcode">

  <input type="hidden" name="allow_public_email" value="1">
  <script>
    jQuery(function ($) {
      function allowPublicEmailValidation() {
        window.verify_email_contactus = function (email) {
          if (!email) { $("#email_error").html("Email Required"); return; }
          if (email.indexOf("@") < 0 || email.indexOf(".") < 0) {
            $("#email_error").html("Invalid Email"); return;
          }
          $("#email_error").html(" ");
        };
        if (typeof myVars !== "undefined") myVars.blockedDomains = [];
      }
      allowPublicEmailValidation();
      $(window).on("load", allowPublicEmailValidation);
      setTimeout(allowPublicEmailValidation, 800);
    });
  </script>


    <div class="col-md-6">
      <input placeholder="Job Title" id="job_title" maxlength="128" name="Job_Title__c" size="20" type="text" class="wpcf7-form-control wpcf7-text" style="border: 1px solid #ccc;" required />
      <span id="job_title_error" style="color:red;"></span>
    </div>
    <div class="col-md-6">
      <input placeholder="Industry" id="industry" maxlength="255" name="Industry__c" size="20" type="text" class="wpcf7-form-control wpcf7-text" style="border: 1px solid #ccc;" required />
      <span id="industry_error" style="color:red;"></span>
    </div>
    <div class="col-md-12">
      <input placeholder="City" id="city" maxlength="40" name="CITY__c" size="20" type="text" class="wpcf7-form-control wpcf7-text" style="border: 1px solid #ccc;" />
      <span id="city_error" style="color:red;"></span>
    </div>
    <input type="hidden" name="Full_Landing_Page_URL__c" class="full-url-field" value="">
    <script>
    (function () {
        function setFullUrl() {
            document.querySelectorAll(".full-url-field").forEach(function (field) {
                field.value = window.location.href;
            });
        }
        if (document.readyState === "loading") {
            document.addEventListener("DOMContentLoaded", setFullUrl);
        } else {
            setFullUrl();
        }
    })();
    </script>
    <?php } ?>
    
    <?php if (get_post_type() === 'webinar') {?>
       <div class="col-md-12">
        <input placeholder="Designation" id="designation" maxlength="40" name="designation" size="30" type="text"
          class="wpcf7-form-control wpcf7-text " style="border: 1px solid #ccc;" />
        <span id="designation_error" style="color:red;"></span>
      </div>
      <?php } ?>
  </div>
  <!--country deepak 4     -->
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/country-picker-flags/build/css/countrySelect.css">
    	<style>
    	.country-select.inside{
    	    width:100%;
    	}
        .country-select .country-list .country {
            padding: 0px 7px;
        }
        .selected-flag {
            background: #f2f2f2;
        }
        input#country_selector {
            text-indent: 5px; width: 100%;
        }
        .country-select.inside {
            width: 100%;
        }
        .country-select.inside {
          height: 42px;
        }

        input#country_selector {
            height: 50px;
        }

        .flag-dropdown {
            height: 53px;
        }
p.country {
   margin:0;
}

	</style>
           <p class="country">Please select country below.</p>

            <fieldset class="form-col" id="country" style="padding: 0px;border: 1px solid #ccc;margin-bottom:1.8em;">
                <input id="country_selector" type="text" name="">
                  <span id="companydev_error" style="color:red;"></span>

				<label for="country_selector" style="display:none;">Select a country here...</label>
				<div class="form-item" style="display:none;">
        				<input type="text" id="country_selector_code" name="Country__c" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
        				<label for="country_selector_code">...and the selected country code will be updated here</label>
        			</div>
        			<button type="submit" style="display:none;">Submit</button>
    		</fieldset> 
              <script src="https://www.jqueryscript.net/demo/country-picker-flags/build/js/countrySelect.js"></script>

            <script>
            jQuery(document).ready(function($) {
                if (typeof jQuery.fn.countrySelect === 'function') {
                    jQuery("#country_selector").countrySelect({
                        preferredCountries: ['us', 'gb', 'in', 'ca']
                    });
                } else {
                    console.log('countrySelect plugin is not loaded.');
                }
            });
            </script>
    	
      <!--country end deepak      -->
       <?php if ( ! is_page([67413, 67501, 68015, 67530, 67660, 67671, 67676, 67680, 67700, 67678,67768,67793,67968]) ) { ?>
  <div class="row description_block">
    <div class="col-md-12">
      <textarea id="description" name="description" rows="3" class="wpcf7-form-control wpcf7-text " placeholder="Description...." style="border: 1px solid #ccc;"></textarea>
    </div>
  </div>
  <?php } ?>
   <?php
    $pid = get_queried_object_id();
    $is_ppc_page = is_page([67413, 67501, 68015, 67530, 67660, 67671, 67676, 67680, 67700, 67678,67768,67793,67968]);
  ?>
  <input type="hidden" name="pageid" id="pageid" value="<?php echo $pid; ?>">
  <?php if ( ! $is_ppc_page ) { ?>
  <div class="row formBack">
    <div class="col-sm-4 mt-4 col-xs-4 cus-width">
     <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['current_captcha_form_id'] = $pid; 
        ?>
        <img alt="captcha" 
             src="<?php echo get_site_url(); ?>/wp-content/themes/thegem-child/cap2.php?id=<?php echo $pid; ?>" 
             id="captchaImg_<?php echo $pid; ?>"
             class="codeImg" style="width:100%;height: 44px;padding-left: 5px;"></div>
    <div class="col-sm-2 mt-4 col-xs-2 cus-width">
      <p class="btnRefresh" style="cursor: grab;"><img alt="refresh-icon" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/04/free-refresh-icon-3104-thumb-1.png" style="height: 40px;"></p>
    </div>
    <div class="col-sm-6 mt-4 col-xs-6">
      <div class="form-group">
        <input type="text" name="vercode" id="vercode" class="wpcf7-form-control wpcf7-text" placeholder="Enter value">
        <span id="vercode_error" style="color:red;"></span>
      </div>
    </div>
  </div>
  <?php } ?>
  <div class="row cus_class">
    <div class="col-md-12">
      <input placeholder="title"  id="title" maxlength="40" name="title" size="20" type="hidden" class="wpcf7-form-control wpcf7-text "  style="border: 1px solid #ccc;"/>
      <input id="00N4N00000IVjck" maxlength="40" name="00N4N00000IVjck" size="20" type="hidden" class="wpcf7-form-control wpcf7-text gclid"  style="border: 1px solid #ccc;"/>
    </div>
  </div>
  <div class="row cus_class">
    <div class="col-md-12">
      <input placeholder="title"  id="title" maxlength="40" name="title" size="20" type="hidden" class="wpcf7-form-control wpcf7-text "  style="border: 1px solid #ccc;"/>
      <input id="00N4N00000IVjck" maxlength="40" name="00N4N00000IVjck" size="20" type="hidden" class="wpcf7-form-control wpcf7-text gclid"  style="border: 1px solid #ccc;"/>
    </div>
  </div>


<div class="row">
  <div class="col-md-12">
    <div style="display:flex; align-items:flex-start; gap:8px;">
      <input type="checkbox" id="marketing_optin" name="marketing_optin" value="yes" style="margin-top:3px;" />
      <span style="font-size:14px; color:#555; line-height:1.5;">
          By checking this box, you agree to receive recurring text messages from 360 SMS App. Msg & data rates may apply. Message frequency may vary. Reply HELP for help, STOP to cancel. View our <a href="https://qa.360smsapp.in/privacy-policy/">Privacy Policy</a> and <a href="https://qa.360smsapp.in/terms-of-service/">Terms of Service</a>.
      </span>
    </div>
  </div>
</div>
	<?php
// Check if the page ID
if (is_page(40667)) {
    $lead_source = "Partner With Us";
}else if(is_page(63865)){
 $lead_source = "360SMS_Zoho";
}
 else  {
    $lead_source = "CONTACT US PAGE |360 SMS APP FOR SALESFORCE";
}
?>

<input type="hidden" name="First_touch_URL__c"
    value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
 <input type="hidden" 
					   id="lead_source" 
					   name="lead_source" 
					   value="<?php echo esc_attr( get_field('lead_source') ); ?>" />
 
				<input type="hidden" 
					   id="lead_source_sub" 
					   name="Sub_Lead_Source__c" 
					   value="<?php echo esc_attr( get_field('sub_lead_source') ); ?>" />
 
				<input type="hidden" 
					   id="Lead_Source_URL__c" 
					   name="Lead_Source_URL__c" 
					   value="<?php echo esc_url( get_permalink() ); ?>" />
  
  <div class="row"><span id="all_error" style="color:red;"></span>
    <input type="hidden" id="ever" value="0">
    <input type="hidden" id="pver" value="0">
    <div class="col-md-12">

      <!-- <input type="submit" name="submit" style="margin-top:1rem"> -->
      <input type="submit" value="<?php 
							if (get_post_type() === 'webinar') {
								echo 'Get Access';
							} else { 
								echo 'Submit'; 
							} 
						?>" name="submit" id="webtoLeadFormOne" style="margin-top: 1rem;" value="Submit" class="href" />
    </div>
  </div>
  <style>
    .iti--allow-dropdown .iti__flag-container, .iti--separate-dial-code .iti__flag-container{
      margin-bottom: 0px !important;
    }
  </style>
  <script>
    document.querySelector('#title').value = localStorage.getItem('utm') ;
    document.querySelector('.gclid').value = localStorage.getItem('gclid') ;

  </script>
</form>
<?php
}



add_shortcode('about_pageshortcode','aboutpageform');
function aboutpageform(){
  ?>

  <!--  ----------------------------------------------------------------------  -->
  <!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
    <!--  If necessary, please modify the charset parameter to specify the        -->
    <!--  character set of your HTML page.                                        -->
    <!--  ----------------------------------------------------------------------  -->

    <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">

    <!--  ----------------------------------------------------------------------  -->
    <!--  NOTE: Please add the following <FORM> element to your page.             -->
      <!--  ----------------------------------------------------------------------  -->
      <style>
      .flag-container{
          margin:0px;
      }
       select.phncode{
         height: 51px !important;
         border-radius: 0px !important;
         border-color: #ccc;
         width: 100%;
       }
       .iti__selected-flag{
        padding-top: 8px !important;
       }
       input#vercode {
        border: 1px solid #ccc;
      }
       @media (max-width: 1199px){
          .row > * {
            margin-top: 0;
            margin-bottom: 6px;
          }
          .row{
            margin-top: 0;
            margin-bottom:0;
          }
        }
      @media screen and (min-device-width: 768px) and (max-device-width: 1024px){

        .select-height{
          height:52px !important;
          border-radius: 0px !important;
        }
        select#phone_code {
          padding: 11.5px 0.5px 11.5px 0.5px !important;
          padding-left: 10px !important;
        }
      }
      .iti__flag-container{
          margin-bottom: 0px !important;
        }
      @media screen and (min-device-width: 280px) and (max-device-width: 767px){
        .select-height{
          height:51.8px !important;
          border-radius: 0px !important;
        }
        .iti.iti--allow-dropdown.iti--separate-dial-code{
          width: 100% !important;
        }
        intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-2 {
            width: 100%;
        }
        fieldset.form-col {
    margin-bottom: 0px !important;
}
        
      }
       
        form label {
          display: inline-block;
          width: 100px;
        }

        form div {
          margin-bottom: 10px;
        }

        .error {
          color: red !important;
          margin-left: 5px;
        }

        label.error {
          display: inline;
        }
      </style>

      <form   class="wpcf7-form gem-contact-form-white" id="formFirstLead">
        <input type="hidden" name="encoding" value="UTF-8">

        <input type=hidden name="oid" value="00D61000000cnSO">
        <input type=hidden name="retURL" value="<?php echo get_site_url(); ?>/about-us-thank-you/">
        <input type="hidden" id="ever" value="0">
        <input type="hidden" id="pver" value="0">

        <!--  ----------------------------------------------------------------------  -->
        <!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
        <!--  these lines if you wish to test in debug mode.                          -->
        <!--  <input type="hidden" name="debug" value=1>                              -->
        <!--  <input type="hidden" name="debugEmail" value="sid@360smsapp.com">       -->
        <!--  ----------------------------------------------------------------------  -->
        <div class="row">
    <!--<div class="col-md-3">
        <input placeholder="First Name" id="first_name" maxlength="255" name="first_name" size="20" type="text" class="wpcf7-form-control wpcf7-text "  style="border: 1px solid #ccc;"/>
      </div>-->
      <div class="col-md-3">
        <input placeholder="Name" id="last_name" maxlength="255" name="last_name" size="20" type="text" class="wpcf7-form-control wpcf7-text "  style="border: 1px solid #ccc;"/>
        <span id="last_name_error" style="color:red;"></span>
      </div>
      <div class="col-md-3">
        <input placeholder="Business Email" id="email" maxlength="80" name="email" size="20" type="email" class="form-control wpcf7-text" style="border: 1px solid #ccc;" onblur="verify_email_contactus(this.value)" />
        <span id="email_error" style="color:red;"></span>
        <span class="ldremailchk text-center" style="display: none !important;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
      </div>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/js/intlTelInput-jquery.min.js"></script>
      <script type="text/javascript">
        $(function () {
            var code = "+1"; // Assigning value from model.
            $('#phone_code').val(code);
            $('#phone_code').intlTelInput({
              autoHideDialCode: true,
              autoPlaceholder: "ON",
              dropdownContainer: document.body,
              formatOnDisplay: true,
              hiddenInput: "full_number",
              initialCountry: "auto",
              nationalMode: true,
              placeholderNumberType: "MOBILE",
              preferredCountries: ['US','GB' ,'AU' ,'CA' ,'IN'],
              separateDialCode: true
            });
            $('#btnSubmit').on('click', function () {
              var code = $("#phone_code").intlTelInput("getSelectedCountryData").dialCode;
              var phoneNumber = $('#phone_code').val();
              var name = $("#phone_code").intlTelInput("getSelectedCountryData").name;
              alert('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);
            });
          });
        function verify_phone_contactnew(phone){ 
          var selval = jQuery('.selected-dial-code').text().slice(1);
          console.log(selval+"selva");
          var phone = jQuery('input#phone_code').val();
          console.log(phone + ' ' + selval);
          if(phone!= '' && phone.length >= 10 && selval!= ''){       
            jQuery('span.ldrphone').show();
            jQuery('span#phone_error').hide();
            jQuery('span#counrty_error').hide();
            var phone_check = phone.trim();
            var ever = jQuery('#ever').val();
            var phone_code = jQuery('.iti__selected-dial-code').text().slice(1);
            var pageid = jQuery("input#pageid").val();
        var baseURL = '<?php echo site_url(); ?>/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
            jQuery.ajax({
              crossDomain: true,
              url: baseURL,
              method: 'POST',
              data: {"phone_code":phone_code,"phone":phone_check},
              success: function(response) {
               jQuery('span.ldrphone').hide();
               jQuery('span#phone_error').show();
               jQuery('span#counrty_error').show();
               res = JSON.parse(response);
               if(res.status == false){
                 jQuery('span#country_error').html(''); 
                 jQuery('#phone_error').html('');   
                 jQuery('#phone_error').html('Invalid Number');
                 if(ever == "1" || ever == 1 ){  
                         // alert(ever);
                       }else{ //alert(ever);
                         jQuery('span#country_error').html('');   
                         jQuery('#phone_error').html('');   
                         jQuery('#phone_error').html('Invalid Number');
                        //   jQuery('#phone').val('');  
                      }
                    }
                    else if(res.status == true){
                      jQuery('span#country_error').html(' '); 
                      jQuery('#phone_error').html('<span style="color:green">Valid Number</span>');
                      jQuery('#pver').val('1'); 
                    }
                  }
                });

          }else if(selval!= '' && phone != "" && phone.length < 10){
           jQuery('span#country_error').html(' ');
           jQuery('#phone_error').html(' ');
           jQuery('#phone_error').html('Invalid Number');
         }else if(selval == ''){
          jQuery('#country_error').html(' ');
          jQuery('#phone_error').html(' ');
          jQuery('#phone_error').html('Please select country code.');
        }else if(phone == ""){
          jQuery('#country_error').html(' ');
          jQuery('#phone_error').html(' ');
          jQuery('#phone_error').html('Invalid Number');
        }
      }
    </script>
    <div class="col-12 col-sm-12 col-md-3">

      <input oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Phone" id="phone_code" name="phone" onblur="verify_phone_contactus(this.value)" type="tel" class="form-control wpcf7-text focus-on phnnumb" style="border: 1px solid #ccc !important;">
      <span id="phone_error" style="color:red;"></span> <span id="country_error" style="color:red;"></span>
      <span class="ldrphone text-center" style="display: none;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
    </div>
  
    <div class="col-md-3">
      <input placeholder="Company" id="company" maxlength="40" name="company" size="20" type="text" class="wpcf7-form-control wpcf7-text "  style="border: 1px solid #ccc;"/>
      <span id="company_error" style="color:red;"></span>
    </div>
  </div>
  <!--country deepak 5     -->
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/country-picker-flags/build/css/countrySelect.css">
    	<style>
    	.country-select.inside{
    	    width:100%;
    	}
        .country-select .country-list .country {
            padding: 0px 7px;
        }
        .selected-flag {
            background: #f2f2f2;
        }
        input#country_selector {
            text-indent: 5px; width: 100%;
        }
        .country-select.inside {
            width: 100%;
        }
         input#country_selector {
              height: 50px;
          }
          .flag-dropdown {
              height: 50px;
          }
p.country {
   margin:0;
}

	</style>
           <p class="country">Please select country below</p>

            <fieldset class="form-col" id="" style="padding: 0px;border: none;margin-bottom:1.6em;">
                <input id="country_selector" type="text" name="">
                  <span id="companydev_error" style="color:red;"></span>

				<label for="country_selector" style="display:none;">Select a country here...</label>
				<div class="form-item" style="display:none;">
        				<input type="text" id="country_selector_code" name="Country__c" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
        				<label for="country_selector_code">...and the selected country code will be updated here</label>
        			</div>
        			<button type="submit" style="display:none;">Submit</button>
    		</fieldset> 
              <script src="https://www.jqueryscript.net/demo/country-picker-flags/build/js/countrySelect.js"></script>    
              <script>
    			jQuery("#country_selector").countrySelect({
    				// defaultCountry: "jp",
    				// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    				// responsiveDropdown: true,
    				preferredCountries: ['us', 'gb', 'in', 'ca']
    			});
    		</script>
    	
      <!--country end deepak      -->
  <div class="row">   

    <div class="col-md-12">
      <textarea id="description" name="description" rows="2" class="wpcf7-form-control wpcf7-text " placeholder="Description...." style="border: 1px solid #ccc;"></textarea>
    </div>
  </div>
  <div class="row">
   <div class="col-sm-2 col-xs-4 mt-2"> 
    <?php
        $pid = get_queried_object_id();
    
        ?>
  <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['current_captcha_form_id'] = $pid;
        ?>
        <img alt="captcha" 
             src="<?php echo get_site_url(); ?>/wp-content/themes/thegem-child/cap2.php" 
             id="captchaImg_<?php echo $pid; ?>"
             class="codeImg" style="width:100%;height: 44px;padding-left: 5px;"></div> 
  <input type="hidden" name="pageid" id="pageid"  value="<?php echo $pid;?>">
  <div class="col-sm-2 col-xs-2 mt-1">
    <p  class="btnRefresh" style="cursor: grab;"><img alt="refresh-icon" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/04/free-refresh-icon-3104-thumb-1.png" style="height: 40px;"></p>
  </div>
  <div class="col-sm-2 col-xs-6 mt-3">
    <div class="form-group ">
      <input type="text" name="vercode" id="vercode" class="wpcf7-form-control wpcf7-text " placeholder="Enter value"> 
      <span id="vercode_error" style="color:red;"></span>
    </div>
  </div> 
  <div class="col-md-6">
    <input placeholder="title"  id="title" maxlength="40" name="title" size="20" type="hidden" class="wpcf7-form-control wpcf7-text "  style="border: 1px solid #ccc;" />
  </div>
</div>

<input type="hidden" name="First_touch_URL__c"
    value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
<input type="hidden" 
					   id="lead_source" 
					   name="lead_source" 
					   value="<?php echo esc_attr( get_field('lead_source') ); ?>" />
 
				<input type="hidden" 
					   id="lead_source_sub" 
					   name="Sub_Lead_Source__c" 
					   value="<?php echo esc_attr( get_field('sub_lead_source') ); ?>" />
 
				<input type="hidden" 
					   id="Lead_Source_URL__c" 
					   name="Lead_Source_URL__c" 
					   value="<?php echo esc_url( get_permalink() ); ?>" />

<div class="row">
  <div class="col-md-12">
    <span id="all_error" style="color:red;"></span>
    <input type="submit" value="submit" name="submit" id="webtoLeadFormOne" style="margin-top: 1rem;" class="href" />
  </div>
</div>
<script>
  document.querySelector('#title').value = localStorage.getItem('utm') ;

</script>
</form>







<?php
}
add_shortcode('demo_pageshortcode','demopageform');
function demopageform(){
  ?>
  <!--  ----------------------------------------------------------------------  -->
  <!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
    <!--  If necessary, please modify the charset parameter to specify the        -->
    <!--  character set of your HTML page.                                        -->
    <!--  ----------------------------------------------------------------------  -->

    <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">

    <!--  ----------------------------------------------------------------------  -->
    <!--  NOTE: Please add the following <FORM> element to your page.             -->
      <!--  ----------------------------------------------------------------------  -->
      <style>

        form label {
          display: inline-block;
          width: 100px;
        }

        form div {
          margin-bottom: 10px;
        }

        .error {
          color: red !important;
          margin-left: 5px;
        }

        label.error {
          display: inline;
        }
        form#formFirstLead{
          padding:7rem 8rem 3rem;
          background: rgba(9, 83, 148, 0.4);
        }
        select.phncode{
         height: 51px !important;
         border-radius: 0px !important;
         border-color: #ccc;
         width: 100%;
       }
       input#vercode {
        border: 1px solid #ccc;
      }
      @media screen and (min-device-width: 768px) and (max-device-width: 1024px){

        .select-height{
          height:52px !important;
          border-radius: 0px !important;
        }
        select#phone_code {
          padding: 11.5px 0.5px 11.5px 0.5px !important;
          padding-left: 10px !important;
        }
      }
      @media screen and (min-device-width: 280px) and (max-device-width: 767px){
        .select-height{
          height:51.8px !important;
          border-radius: 0px !important;
        }
        form#formFirstLead{
          padding:6rem 2rem 3rem;

        }
        fieldset.form-col {
    margin-bottom: 0px !important;
}
      }
      @media (max-width: 1199px){
        .row > * {
          margin-top: 0;
          margin-bottom: 6px;
        }
        .row{
          margin-top: 0;
          margin-bottom:0;
        }
        form{
          padding:4rem 3rem 2rem;
        }
      }
      .flag-container {
    margin: 0px;
}
.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-2 , .intl-tel-input{
    width: 95%;
    margin: 0 auto;
    padding: 0px !important;
}
    </style>
    <form   class="wpcf7-form gem-contact-form-white" id="formFirstLead">
      <input type="hidden" name="encoding" value="UTF-8">
      <input type=hidden name="oid" value="00D61000000cnSO">
      <input type="hidden" id="ever" value="0">
      <input type="hidden" id="pver" value="0">
      <input type=hidden name="retURL" value="<?php echo get_site_url(); ?>/thank-you/">

      <!--  ----------------------------------------------------------------------  -->
      <!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
      <!--  these lines if you wish to test in debug mode.                          -->
      <!--  <input type="hidden" name="debug" value=1>                              -->
      <!--  <input type="hidden" name="debugEmail" value="sid@360smsapp.com">       -->
      <!--  ----------------------------------------------------------------------  -->
      <div class="row">
    <!--<div class="col-md-6">
        <input placeholder="First Name" id="first_name" maxlength="255" name="first_name" size="20" type="text" class="wpcf7-form-control wpcf7-text "  style="border: 1px solid #ccc;"/>
      </div>-->
      <div class="col-md-12">
        <input placeholder="Name" id="last_name" maxlength="255" name="last_name" size="20" type="text" class="wpcf7-form-control wpcf7-text "  style="border: 1px solid #ccc;"/>
        <span id="last_name_error" style="color:red;"></span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <input placeholder="Business Email" id="email" maxlength="80" name="email" size="20" type="email" class="form-control wpcf7-text" style="border: 1px solid #ccc;" onblur="verify_email_contactus(this.value)" />
        <span id="email_error" style="color:red;"></span>
        <span class="ldremailchk text-center" style="display: none !important;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
      </div>
    </div>
    <div class="row">
      <script type="text/javascript">
    $(function () {
            var code = "+1"; // Assigning value from model.
            $('#phone_code').val(code);
            $('#phone_code').intlTelInput({
              allowExtensions: true,
              autoHideDialCode: true,
              autoPlaceholder: "ON",
              dropdownContainer: document.body,
              formatOnDisplay: true,
              hiddenInput: "full_number",
              initialCountry: "auto",
              nationalMode: true,
              placeholderNumberType: "MOBILE",
              preferredCountries: ['US','GB' ,'AU' ,'CA' ,'IN'],
              separateDialCode: true
            });
            $('#btnSubmit').on('click', function () {
              var code = $("#phone_code").intlTelInput("getSelectedCountryData").dialCode;
              var phoneNumber = $('#phone_code').val();
              var name = $("#phone_code").intlTelInput("getSelectedCountryData").name;
              alert('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);
            });
          });
    function verify_phone_contactnew(phone){ 
     var selval = jQuery('.selected-dial-code').text().slice(1);
     var phone = jQuery('input#phone_code').val();
     console.log(phone + ' ' + selval);
     if(phone!= '' && phone.length >= 10 && selval!= ''){       
      jQuery('span.ldrphone').show();
      jQuery('span#phone_error').hide();
      var phone_check = phone.trim();
      var ever = jQuery('#ever').val();
      var phone_code = jQuery('.selected-dial-code').text().slice(1);var pageid = jQuery("input#pageid").val();
      var baseURL =  '<?php echo site_url(); ?>/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
      jQuery.ajax({
        crossDomain: true,
        url: baseURL,
        method: 'POST',
        data: {"phone_code":phone_code,"phone":phone_check},
        success: function(response) {
         jQuery('span.ldrphone').hide();
         jQuery('span#phone_error').show();
         res = JSON.parse(response);
         if(res.status == false){

           jQuery('#phone_error').html('');   
           jQuery('#phone_error').html('Invalid Number');
           if(ever == "1" || ever == 1 ){  
                         // alert(ever);
                       }else{ //alert(ever);

                        jQuery('#phone_error').html('');   
                        jQuery('#phone_error').html('Invalid Number');
                        //   jQuery('#phone').val('');  
                      }
                    }
                    else if(res.status == true){

                     jQuery('#phone_error').html('<span style="color:green">Valid Number</span>');
                     jQuery('#pver').val('1'); 
                   }
                 }
               });
      
    }else if(selval!= '' && phone != "" && phone.length < 10){

      jQuery('#phone_error').html(' ');
      jQuery('#phone_error').html('Invalid Number');
    }else if(selval == ''){

      jQuery('#phone_error').html(' ');
      jQuery('#phone_error').html('Please select country code.');
    }else if(phone == ""){

      jQuery('#phone_error').html(' ');
      jQuery('#phone_error').html('Invalid Number');
    }
  }
  </script>
  <div class="col-12 col-sm-12 col-md-12" style="padding: 0px 0px 0px 20px;">

  <input oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Phone" id="phone_code" name="phone" onblur="verify_phone_contactus(this.value)" type="tel" class="form-control wpcf7-text focus-on phnnumb" style="">
  <span id="phone_error" style="color:red;"></span> <span id="country_error" style="color:red;"></span>
  <span class="ldrphone text-center" style="display: none;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
  </div>
    
  </div>
  <!--country deepak 6     -->
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/country-picker-flags/build/css/countrySelect.css">
    	<style>
    	.country-select.inside{
    	    width:100%;
    	}
        .country-select .country-list .country {
            padding: 0px 7px;
        }
        .selected-flag {
            background: #f2f2f2;
        }
        .flag-dropdown {
          right: auto;
          left: 0;
          height: 50px;
      }
        input#country_selector {
            text-indent: 5px; width: 100%;
            height:50px;
        }
        .country-select.inside {
            width: 100%;
        }
        p.country {
   margin:0;
}

	</style>
           <p class="country">Please select country below</p>

            <fieldset class="form-col" id="" style="padding: 0px;border: none;margin:0 0 1.1em;">
                <input id="country_selector" type="text" name="">
                  <span id="companydev_error" style="color:red;"></span>

				<label for="country_selector" style="display:none;">Select a country here...</label>
				<div class="form-item" style="display:none;">
        				<input type="text" id="country_selector_code" name="Country__c" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
        				<label for="country_selector_code">...and the selected country code will be updated here</label>
        			</div>
        			<button type="submit" style="display:none;">Submit</button>
    		</fieldset> 
              <script src="https://www.jqueryscript.net/demo/country-picker-flags/build/js/countrySelect.js"></script>    
              <script>
    			jQuery("#country_selector").countrySelect({
    				// defaultCountry: "jp",
    				// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    				// responsiveDropdown: true,
    				preferredCountries: ['us', 'gb', 'in', 'ca']
    			});
    		</script>
    			
      <!--country end deepak      -->

  <div class="row">
    <div class="col-md-12">
      <input placeholder="Company" id="company" maxlength="40" name="company" size="20" type="text" class="wpcf7-form-control wpcf7-text "  style="border: 1px solid #ccc;"/>
      <span id="company_error" style="color:red;"></span>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <textarea id="description" name="description" rows="2" class="wpcf7-form-control wpcf7-text " placeholder="Description...." style="border: 1px solid #ccc;"></textarea>
    </div>
  </div>
  <div class="row formBack">
    <div class="col-sm-4 mt-4"> 
      <?php
        $pid = get_queried_object_id();
    
        ?>
    <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['current_captcha_form_id'] = $pid;
        ?>
        <img alt="captcha" 
             src="<?php echo get_site_url(); ?>/wp-content/themes/thegem-child/cap2.php" 
             id="captchaImg_<?php echo $pid; ?>"
             class="codeImg" style="width:100%;height: 44px;padding-left: 5px;"></div> 
    <input type="hidden" name="pageid" id="pageid"  value="<?php echo $pid;?>">
    <div class="col-sm-2 mt-4">
      <p  class="btnRefresh" style="cursor: grab;"><img alt="refresh-icon" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/04/free-refresh-icon-3104-thumb-1.png" style="height: 40px;"></p>
    </div>
    <div class="col-sm-6 mt-4">
      <div class="form-group ">
        <input type="text" name="vercode" id="vercode" class="wpcf7-form-control wpcf7-text " placeholder="Enter value"> 
        <span id="vercode_error" style="color:red;"></span>
      </div>
    </div> 
  </div>
  <div class="row">
    <div class="col-md-12">
      <input type="submit" value="submit" name="submit" id="webtoLeadFormOne" style="margin-top: 1rem;" class="href" />
    </div>
  </div>
  <?php
            if(is_page(15987)){
                                        $source="SEO";
                                      } elseif(is_page(30100 )){
                                        $source="SEO";

                                      }
    ?>
    
    <input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
    
  <input type="hidden" value="<?php echo $source; ?>"  id="lead_source" name="lead_source" />
  
  <input type="hidden" 
       id="lead_source_sub" 
       name="Sub_Lead_Source__c" 
       value="360SMS-Contact Us" />
  
 <input type="hidden"
       id="Lead_Source_URL__c"
       name="Lead_Source_URL__c"
       value="<?php echo esc_url( get_permalink() ); ?>"/>

  <input placeholder="title"  id="title" maxlength="40" name="title" size="20" type="hidden" />
  <style type="text/css">
    .iti--allow-dropdown .iti__flag-container, .iti--separate-dial-code .iti__flag-container{
      margin-bottom: 0px !important;
    }
    .iti.iti--allow-dropdown.iti--separate-dial-code{
      width: 100%;
      padding-right: 20px;
    }

  </style>
  <script>
    document.querySelector('#title').value = localStorage.getItem('utm') ;
  </script>

</form>
<?php
}
/**************************************************************
 * ***** REDIRECTION FROM THANK YOU PAGE TO HOMEPAGE  *******
 * ********************************************************/
add_action('wp_head', 'redirect_function');
function redirect_function() {
  global $wp;
  if( $wp->request == 'thank-you' ) {

    echo '<meta http-equiv="refresh" content="2; URL='.site_url().'">';
  }
}

/********************************************************************
 * ***
 * ******************************************************************/


// deepak










add_shortcode( 'filter_calender', 'filter_calender_function' );
function filter_calender_function() {     
  ?>
  <style>
   .main11 {
    width: 100%;
    /*height: 100vh;*/
    display: flex;
    flex-direction: column;
    justify-content: center;
  }
  .card11 {
    width: 272px;
    margin: 0 auto;
    position: relative;
    box-shadow: 0 20px 25px -5px rgb(0 0 0 / 10%), 0 10px 10px -5px rgb(0 0 0 / 4%);
    background-color: #1b4371;
    background-image: linear-gradient(to right, #1b4371 , #01305e);
  }
  .card11 img {
    width: 100%;
    opacity: 0.2;
  }
  .card-title11 {
    width: 28%;
    background: transparent;
    padding: 4px;
    position: absolute;
    left: 50%;
    top: 170px;
    transform: translate(-122px, -157px);
    /*border: 2px solid #fff !important;*/
    color: #fff;
    font-size: 18px;
    height: 8%;
  }
  .card-title11 h3 {
    font-weight: normal;
  }
  .card-content11 {
    width: 100%;
    background: #fff;
    padding-top: 10px;
  }
  .card-content-row11 {
    display: flex;
    flex-wrap: wrap;
    border-bottom: 1px solid #e2e8f0;
  }
  .card-content-col11 {
    width: 50%;
    padding: 20px;
  }
  .card-content-col11 .fa {
    font-size: 25px;
    vertical-align: middle;
    margin-right: 10px;
    color: #718096;
  }
  .card-content-user-info11 {
    width: 100%;
    padding: 8px;
    display: flex;
    background: #ffffff;
  }
  .card-content-user-info img {
    width: 60px;
    height: 60px;
    margin: 10px;
    border-radius: 50%;
    vertical-align: middle;
  }
  .card-content-user-info11 p {
    padding: 20px 0px 0px 0px;
  }
  .card-content-user-info11 .card-content-user-contact11 {
    display: flex;
    flex-direction: column;
    justify-content: left;
    padding-left: 3px;
    font-size: 16px;
  }
  .card211 {
    margin: 0px;
    box-shadow: 0 0 15px rgb(0 0 0 / 20%);
    width: 300px;
    height: 235px;
    padding: 15px;
    color: #fff;
    background-color: #52b6ff;
    background-image: linear-gradient(to right, #1b4371 , #3572b8);
    padding: 8% 5% 8% 5%;
  }
  .main211 {
    display: -webkit-flex;
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: flex;
    justify-content: center;
    -ms-align-items: center;
    align-items: center;
    height: auto;
  }
  .card211 .tagbutton11 {
    display: block;
    background-color: transparent;
    padding: 5px 8px;
    color: #fff;
    border: 1px solid;
    margin-bottom: 12%;
    margin: 11px 0px 13px 3px;
    font-size: 14px;text-transform: uppercase;
  }
  .date11 {
    font-size: 12px;
    margin: 18px 0px 0px 0px;
    font-weight: 400;
  }
  .tagbutton111 {
    background-color: transparent;
    border: 1px solid #fff;
    padding: 6px;
    color: #fff;
    font-weight: 500;
    font-size: 14px; 
  }
  .card-content-user-contact11 {
    font-size: 16px;
  }
  .user-contact11 {
    font-size: 16px;
    margin: 30px 0px 13px 10px;
  }
  @media screen and (min-device-width: 600px) and (max-device-width: 900px) {
    .card-title11 {
      width: 28%;
      transform: translate(-100px, -153px);
    }
    .card11 {
      width: 230px;
    }
    .card211 {
      margin: 6px;
    }
  }

  @media screen and (min-device-width: 280px) and (max-device-width: 360px) {
    .card-title11 {
      width: 28%;
      transform: translate(-100px, -153px);
    }
    .card211 {
      margin: 6px;
    }
  }
  @media screen and (min-device-width: 260px) and (max-device-width: 300px) {
    .card11 {
      width: 235px;
    }
  }
  #submitsearch {
    border: 1px solid rgb(138, 134, 134);
    margin-left: -82px;
    padding: 5px;
    border-radius: 19px;
    cursor: pointer;
    padding-left: 10px;
    padding-right: 8px;
    padding-top: 4px;
    display: none;
    box-shadow: 0 0 1px black;
    margin-right: 110px;
  }

  #searchInput {
    width: 95%;
    border-bottom: 2px solid #5f5f64;
    border-right: none;
    border-top: none;
    border-left: none;
    font-size: 16px;
    background-color: white;
    background-image: url(https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/search-24.png);
    background-position: 10px 7px;
    background-repeat: no-repeat;
    padding: 8px 20px 8px 40px;
    -webkit-transition: width 0.8s ease-in-out;
    transition: width 0.8s ease-in-out;
    outline: none;
    opacity: 1;
    margin-left: 2%;
    box-shadow: rgb(0 0 0 / 52%) 0px 27px 21px -19px;
  }
  @media screen and (min-device-width: 280px) and (max-device-width: 600px) { 
    #searchInput{
      font-size: 12px;
      margin-left: 4%;
    }
    #myBtn1Container {
      margin-top: 2%;
      margin-left: 4%;
      margin-right: 5%;
    }
  } .btn {
    border: none;
    background: linear-gradient(to bottom, #3498db, #2980b9);
    border-radius: 3px;
    font-family: Arial;
    color: #ffffff;
    padding: 5px 10px 5px 10px;
    text-decoration: none;
    margin: 5px;
  }

  .active {
    background: #da5e46;
    text-decoration: none;
  }
  .box {
    padding: 8px 8px;
    margin-top: 8px;
    text-align: center;
    border-radius: 3px;
    color: #fff;
  }
  .user-contact11 {
    font-size: 16px;
    margin: 25px 3px 14px 3px;
    text-align: left;
  }
  .spacer {
    clear: both;
    height: 20px;
  } 
   @media(max-width:767px){
      #myBtn1Container{
          display:none;
      }
      .mobiledropDownSection{
          display:block !important;
      }
       .mobile-dropdown {
    display: block;
    margin: 20px;
    padding: 10px;
    width: calc(100% - 40px);
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    color: #333;
    background-color: #fff;
  }
  }
</style>

<div>
  <input type="text" id="searchInput" name="keywords" onkeyup = "loadData(1)" placeholder="Lets find what you're looking for...." />
  <div id="submitsearch" style="">
    <span>Search</span>
  </div>  
  <?php 
    $calendar_terms_data = get_terms('cal_category'); // get all the cal_category 
    ?>
    
    <div id="myBtn1Container">
      <button class="active btn" id="all">Show All</button>
      <?php foreach($calendar_terms_data as $calendar_termdata) { ?>
        <button class="btn" id="<?php echo $calendar_termdata->slug ?>" data-attr="<?php echo $calendar_termdata->slug ?>"><?php echo $calendar_termdata->name ?></button>
      <?php } ?>
      <span class="loaderclasss" ></span>
      <span  class="loaderclasss"></span>
      <span class="loaderclasss"></span>
      <span class="loaderclasss"></span>
      <span class="loaderclasss"></span>

      <span class="loaderclasss ldr text-center"  style="color:#e1026d !important;"><img src="<?php echo site_url(); ?>/wp-content/uploads/2022/04/giphy.webp"></span>
     </div>
    <div class="mobiledropDownSection" style="display:none;">
    <select class="mobile-dropdown">
      <option value="all">Show All</option>
      <?php foreach($calendar_terms_data as $calendar_termdata) { ?>
      <option class="mobiledropDown" value="<?php echo $calendar_termdata->slug ?>" data-attr="<?php echo $calendar_termdata->slug ?>" ><?php echo $calendar_termdata->name ?></option>
      <?php } ?>
    </select>
    <div class="ldr" style="display: none;">
        <span class="mobLoader text-center" style="color: rgb(225, 2, 109) !important;"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/04/giphy.webp"></span>
    </div>
    </div>
    <div id="searchresultwebinar">     
      <div class="spacer"></div>
    </div> 
    <script>

  jQuery(document).ready(function(){ //jQuery('span.loaderclasss').css('display','none');
    var page = 1;
    
    loadData(page); 
  });
    //jQuery('.dcs_universal_container .dcs-universal-pagination li.active').live('click',function(){

//  jQuery("#searchInput").keypress(function(e){
//  // alert('dddd');
//   var keywords = jQuery('#searchInput').val();
//    if ($.trim(keywords) === "" || $.trim(keywords) === "") {  e.preventDefault(); jQuery('.post_outer').removeClass('show');
//        jQuery('.error').html('Please enter Question/Answer to Search');

//     } else{
//       jQuery('.error').html('');
//       jQuery('span.loaderclasss').css('display','none');

//      var page = 1;
//   loadData(page); 
//  }


//  });
//   $('#myModal_subs').modal({backdrop: 'static', keyboard: false})  

function loadData(page){
  jQuery('.ldr').css('display','block');
  jQuery('#parent').hide();
  jQuery('#noresult').hide();

     // jQuery("#result").html('<div class="col-md-12 text-center" style="text-align:center;color:#fff !important;"><h4><b>Loading...</b></h4></div>');


      //var slug = jQuery("#slug").val();
      var numofrecords     = jQuery("#numofrecords").val();
      var calencats     = jQuery("input#calencat").val();
      var url = '<?php echo site_url(); ?>/wp-content/themes/thegem-child/calendarpagination.php';
     var keywords = jQuery('#searchInput').val(); //alert(keywords);
     jQuery.ajax({
      url : url,
      type: "GET",
      data : {Submit:'Pagination',numofrecords:numofrecords,page:page, keywords: keywords, calencats: calencats},
      success:function(a){
        jQuery('.ldr').css('display','none');
        jQuery("#searchresultwebinar").html(a);
        jQuery('#noresult').show();
      }
    });






   }

   /*Pagination*/
   function Pagination(page){
    loadData(page);
  }


</script><script>  
            //  jQuery( document ).ready(function() { //jQuery('.btn').click(function() { alert('hj');});
//        var $btns = jQuery('.btn').click(function() {  alert('hj');
//   if (this.id == 'all') {
//     jQuery('#parent > div').fadeIn(450);
//   } else {
//     var $el = jQuery('.' + this.id).fadeIn(450);
//     jQuery('#parent > div').not($el).hide();
//   }
//   $btns.removeClass('active'); 
//   jQuery(this).addClass('active');
// }); //});
var btns = jQuery('.btn').click(function() { 
  jQuery('#parent').hide();
  var datatr = jQuery(this).attr('data-attr');  
  var sss = jQuery('#calencat').val(datatr); loadData(1);
  if (this.id == 'all') {
    jQuery('#parent > div').fadeIn(450);
  } else {
    var el = jQuery('.' + this.id).fadeIn(450); 
    jQuery('#parent > div').not(el).hide();
  }
  btns.removeClass('active'); 
  jQuery(this).addClass('active');

});  
	jQuery('.mobile-dropdown').change(function() {
   
  jQuery('#parent').hide();
  var datatr = jQuery(this).val();  
    var sss = jQuery('#calencat').val(datatr);
    
  loadData(1);
  if (datatr == 'all') {
    jQuery('#parent > div').fadeIn(450);
  } else {
    var el = jQuery('.' + datatr).fadeIn(450); 
    jQuery('#parent > div').not(el).hide();
  }
});
</script>
<div>
  <style>
    ul.list-inline{
      display:flex;
    }.text-center {
      text-align: center!important;
    }
  </style>
  <input type="hidden" id="calencat" value="">
  <input type="hidden" id="numofrecords" value="15">
  <?php 

}

/*Create custom MetaBox for adding option to display post on front for only calendar post type*/
function CreateTextfield()
{
  $screen = 'calen';
  add_meta_box('my-meta-box-id','Additional Options for Show/Hide and month and year','displayposts',$screen,'normal','high');
}
add_action( 'add_meta_boxes', 'CreateTextfield' ) ;

/********* Display Post Meta box at backend *********/
function displayposts($post)
{
  global $wbdb;
  $displaypoststext = get_post_meta( $post->ID, 'display_posts_data' , true );  
  $displaymonthtext = get_post_meta( $post->ID, 'display_month_data' , true );  
  $displayear_text = get_post_meta( $post->ID, 'display_year_data' , true ); 
  $displayarticletext = get_post_meta( $post->ID, 'article_week_number' , true );
  ?>
  <style>
    .show_data{
      margin-left: 15px;
    }
    .show_data label{
      margin-right: 10px;
      vertical-align: inherit;
    }
    .month_Data input[type="radio"] {
      margin-top: 5px;
      margin-bottom: 5px;
    }
    .additional_data h2{
      padding: 15px 12px;
    }
  </style>
  <div class="additional_data">
    <h2>Enter the Article Week Number</h2>
    <div class="show_data">
      <input type="text" name="article_meta_box_text"  value="<?php echo ($displayarticletext) ? $displayarticletext:"";?>"/>
    </div>
    <h2>Choose the options for showing the posts.</h2>
    <div class="show_data">
      <input type="radio" name="my_meta_box_text"  value="Yes"  <?php echo ($displaypoststext == 'Yes') ? "checked" :"";?>/>
      <label for="my_meta_box_text">Yes</label>
      <input type="radio" name="my_meta_box_text"  value="No"  <?php echo ($displaypoststext == 'No') ? "checked" :"";?>/>
      <label for="my_meta_box_text">No</label>
    </div>

    <h2>Choose the month for posts.</h2>
    <div class="show_data month_Data">
      <input type="radio" name="month_text"  value="january"  <?php echo ($displaymonthtext == 'january') ? "checked" :"";?>/>
      <label for=" month_text">January</label><br>

      <input type="radio" name="month_text"  value="february"  <?php echo ($displaymonthtext == 'february') ? "checked" :"";?>/>
      <label for=" month_text">February</label><br>

      <input type="radio" name="month_text"  value="march"  <?php echo ($displaymonthtext == 'march') ? "checked" :"";?>/>
      <label for=" month_text">March</label><br>

      <input type="radio" name="month_text"  value="april"  <?php echo ($displaymonthtext == 'april') ? "checked" :"";?>/>
      <label for=" month_text">April</label><br>

      <input type="radio" name="month_text"  value="may"  <?php echo ($displaymonthtext == 'may') ? "checked" :"";?>/>
      <label for=" month_text">May</label><br>


      <input type="radio" name="month_text"  value="june"  <?php echo ($displaymonthtext == 'june') ? "checked" :"";?>/>
      <label for=" month_text">June</label><br>

      <input type="radio" name="month_text"  value="july"  <?php echo ($displaymonthtext == 'july') ? "checked" :"";?>/>
      <label for=" month_text">July</label><br>

      <input type="radio" name="month_text"  value="august"  <?php echo ($displaymonthtext == 'august') ? "checked" :"";?>/>
      <label for=" month_text">August</label><br>

      <input type="radio" name="month_text"  value="september"  <?php echo ($displaymonthtext == 'september') ? "checked" :"";?>/>
      <label for=" month_text">September</label><br>

      <input type="radio" name="month_text"  value="october"  <?php echo ($displaymonthtext == 'october') ? "checked" :"";?>/>
      <label for=" month_text">October</label><br>

      <input type="radio" name="month_text"  value="november"  <?php echo ($displaymonthtext == 'november') ? "checked" :"";?>/>
      <label for=" month_text">November</label><br>

      <input type="radio" name="month_text"  value="december"  <?php echo ($displaymonthtext == 'december') ? "checked" :"";?>/>
      <label for=" month_text">December</label><br>

    </div>
    <h2>Choose the year for posts.</h2>
    <div class="show_data month_Data">
      <input type="radio" name=" year_text"  value="2022"  <?php echo ($displayear_text == '2022') ? "checked" :"";?>/>
      <label for=" year_text">2022</label><br>

      <input type="radio" name=" year_text"  value="2023"  <?php echo ($displayear_text == '2023') ? "checked" :"";?>/>
      <label for=" year_text">2023</label><br>
    </div>
  </div>
  <?php        
}

/********** Save Post Meta Box data in post table  **********/
function saveOptionsTodisplay($post_id )
{
 $new_meta_value = ( isset( $_POST['my_meta_box_text'] ) ? sanitize_html_class( $_POST['my_meta_box_text'] ) : '' );
 $new_month_value = ( isset( $_POST['month_text'] ) ? sanitize_html_class( $_POST['month_text'] ) : '' );
 $new_year_value = ( isset( $_POST['year_text'] ) ? sanitize_html_class( $_POST['year_text'] ) : '' );
 $article_text = ( isset( $_POST['article_meta_box_text'] ) ? sanitize_html_class( $_POST['article_meta_box_text'] ) : '' );

    // Update the meta field in the database.
 $up_post = update_post_meta( $post_id, 'display_posts_data', $new_meta_value );
 $up_month = update_post_meta( $post_id, 'display_month_data', $new_month_value );
 $up_year = update_post_meta( $post_id, 'display_year_data', $new_year_value );
 $article_week_number = update_post_meta( $post_id, 'article_week_number', $article_text );
}
add_action('save_post','saveOptionsTodisplay');


function gtagFunction(){
  ?>

  <?php
}
add_action('wp_head', 'gtagFunction', 9999);



add_shortcode('protip_pagweshortcode','prtipsss');
function prtipsss(){
  ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    * {
      box-sizing: border-box;
    }

    body {
      padding: 0;
      margin: 0;
    }

    .conct_txt {
      width: 80%;
      margin: 0 auto;

    }

    .conct_txt p {
      color: #fff;
      font-size: 52px;
    }

    .frm {
      display: flex;
      flex-direction: column;
      width: 94%;
      margin: 0 auto;
    }

    .form_section {
      display: flex;
      flex-wrap: wrap;
    }

    .input_four {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
    }

    .input_four>div label {
      margin-bottom: 10px !important;
      display: block;
    }

    .input_four input {
      padding: 5px 12px;
      width: 100%;
      background-color: #fff;
      border: 1px solid rgb(223 244 255);
      border-radius: 0px;
    }
    .input_four1 {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .input_four1>div label {
      margin-bottom: 10px !important;
      display: block;
    }

    .input_four1 input {
      padding: 5px 12px;
      width: 100%;
      background-color: #fff ;
    }

    input {
      padding: 15px 20px;
      border-radius: 5px;
      outline: none;

      font-size: 17px;
      border: none;
    }
    .button-34 {
      background: #23acdd;
      border-radius: 999px;
      box-shadow: #23acdd 0 10px 20px -15px;
      box-sizing: border-box;
      color: #FFFFFF;
      cursor: pointer;
      line-height: 24px;
      opacity: 1;
      outline: 0 solid transparent;
      padding: 8px 18px;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      width: fit-content;
      word-break: break-word;
      border: 0;
    }
    .button {
      width: 48%;
      padding: 7px 50px;
      outline: none;
      color: #fff;
      border: none;
      background-color: #23acdd !important;
      background-image:  #23acdd !important;
      font-size: 17px;
      background-size: 200% auto;
      border-radius: 18px !important;
    }
    .cus-button{
      display: flex !important;
      justify-content: center !important;
      margin: auto !important;
      padding: 1px 10px !important;
    }
    .btn {
      text-align: center;
      padding-top: 36px;
    }
    .textareadesign{
      margin-bottom: 20px;
      padding: 7px 10px;
      width: 100%;
      background-color: #fff !important;
      border: 1px solid #dfe5e8;
      border-radius: 5px;
      height: 81px;
    }
    .button:hover {
      background-color: transparent;
      background-position: right center !important;
    }

    .heading h2 {
      text-align: center !important;
      margin: 0 !important;
      margin-bottom: 40px !important;
      / font-family: Abril Fatface !important;/
    }

    .input_fours>div {
      width: 48%;
    }
    .input_four1>div {
      width: 100%;
    }
    .input_four .company {}

    .main {
      font-family: 'Montserrat', sans-serif !important;
    }
    form span.error, span.error1 {
      color: red;
      font-size: 14px;
      font-weight: 400;
    }
    .error {
      color: red;
      margin-left: 0px;
      position: relative;
      top: -16px;
    }
    input[type=submit] {
      margin:0px ;
    }
    @media(max-width: 768px) {
      select {
        width: 100%;
      }

      .button {
        width: 100%;
      }

      .container {
        padding: 0;
      }

      .conct_txt p {
        margin-top: 0;
        padding-top: 30px;
      }

      .btn {
        margin-bottom: 30px;
      }

      .input_fourz>div {
        width: 100%;
      }
    }
    .form_section input{
      margin-bottom:10px;
    }
    .formdesign{
      border-top-width: 1px !important;
      border-right-width: 1px !important;
      border-bottom-width: 1px !important;
      border-left-width: 1px !important;
      padding-top: 10px !important;
      padding-right: 0px !important;
      padding-bottom: 20px !important;
      padding-left: 0px !important;
      background-color: #f4f4f4 !important;
      border-left-color: #efefef !important;
      border-left-style: solid !important;
      border-right-color: #efefef !important;
      border-right-style: solid !important;
      border-top-color: #efefef !important;
      border-top-style: solid !important;
      border-bottom-color: #efefef !important;
      border-bottom-style: solid !important;
      border-radius: 25px !important;
    } select#phone_code {
      padding: 5px 12px;
      width: 100%;
      background-color: #fff;
      border: 1px solid rgb(223 244 255);
      border-radius: 0px;
    }
    .intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-2,.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-3,.iti{
     width: 100% !important;
   }
   input#phone_code{
     padding-top: 5px;
     padding-bottom: 5px;
     width: 100%;
     background-color: #fff;
     border: 1px solid rgb(223 244 255);
     border-radius: 0px;
   }

   .intl-tel-input.separate-dial-code.allow-dropdown.iti-sdc-2 .selected-flag{
     border-right: 1px solid rgb(223 244 255);
     background-color: #fff !important;
   }
   .selected-flag{
     background: #FFF !important;
     border-right: 1px solid rgb(223 244 255) !important;
   }
   @media (max-width:767px) {
    input#company {
    margin-bottom: -8px;
}
   }
 </style> 
 <script>    
  function removeValidations(ids) {
   jQuery(ids).each(function(index, key) {
    jQuery("#" + key).keyup(function() {
      jQuery("#" + key + "_error").html('');
    });
  });
 }
 jQuery( document ).ready(function() {  
  jQuery("#description").keyup(function(){
    jQuery(this).siblings('span:first').text("");
  });
});                                              
</script>
<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
  <!--  If necessary, please modify the charset parameter to specify the        -->
  <!--  character set of your HTML page.                                        -->
  <!--  ----------------------------------------------------------------------  -->
  <div class="formdesign">
    <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">

    <!--  ----------------------------------------------------------------------  -->
    <!--  NOTE: Please add the following <FORM> element to your page.             -->
      <!--  ----------------------------------------------------------------------  -->

      <form id="formFirstLead">

        <input type=hidden name="oid" value="00D61000000cnSO">
        <input type=hidden name="retURL" value="<?php echo get_site_url(); ?>/thank-you/">

        <!--  ----------------------------------------------------------------------  -->
        <!--  NOTE: These fields are optional debugging elements. Please uncomment    -->
        <!--  these lines if you wish to test in debug mode.                          -->
        <!--  <input type="hidden" name="debug" value=1>                              -->
        <!--  <input type="hidden" name="debugEmail"                                  -->
        <!--  value="rinnie@360degreecloud.com">                                      -->
        <!--  ----------------------------------------------------------------------  -->

        <div class="form_section devprotip">
          <div class="frm">
            <h2 style="color: #032d60;text-align: left ; padding-bottom: 10px; margin-top:5px;    margin-bottom: 10px; ">Need help implementing this?</h2>
            <p style="text-align: left;  padding-bottom: 2px;"><span style="font-weight: 400; color: #333333;">Leave your details here and texting expert will get back to you and hold your hand through this</span></p>

            <div class="input_four row">
              <div class="col-12 col-md-6 col-sm-12 col-xs-12">
                <input  id="last_name" maxlength="80" name="last_name" size="20" type="text" placeholder="Name" /><br/>
                <span id="last_name_error" style="color:red;"></span>
              </div>
 
              <script type="text/javascript">
                $(function () {
            var code = "+1"; // Assigning value from model.
            $('#phone_code').val(code);
            $('#phone_code').intlTelInput({
              allowExtensions: true,
              autoHideDialCode: true,
              autoPlaceholder: "ON",
              dropdownContainer: document.body,
              formatOnDisplay: true,
              hiddenInput: "full_number",
              initialCountry: "auto",
              nationalMode: true,
              placeholderNumberType: "MOBILE",
              preferredCountries: ['US','GB' ,'AU' ,'CA' ,'IN'],
              separateDialCode: true
            });
            $('#btnSubmit').on('click', function () {
              var code = $("#phone_code").intlTelInput("getSelectedCountryData").dialCode;
              var phoneNumber = $('#phone_code').val();
              var name = $("#phone_code").intlTelInput("getSelectedCountryData").name;
              alert('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);
            });
          });
                function verify_phone_contactnew(phone){ 
                 var selval = jQuery('.selected-dial-code').text().slice(1);
                 var phone = jQuery('input#phone_code').val();
                 console.log(phone + ' ' + selval);
                 if(phone!= '' && phone.length >= 10 && selval!= ''){       
                  jQuery('span.ldrphone').show();
                  jQuery('span#phone_error').hide();
                  var phone_check = phone.trim();
                  var ever = jQuery('#ever').val();
                  var phone_code = jQuery('.selected-dial-code').text().slice(1);
                  var pageid = jQuery("input#pageid").val();
        var baseURL = '<?php echo site_url(); ?>/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
                  jQuery.ajax({
                    crossDomain: true,
                    url: baseURL,
                    method: 'POST',
                    data: {"phone_code":phone_code,"phone":phone_check},
                    success: function(response) {
                     jQuery('span.ldrphone').hide();
                     jQuery('span#phone_error').show();
                     res = JSON.parse(response);
                     if(res.status == false){

                       jQuery('#phone_error').html('');   
                       jQuery('#phone_error').html('Invalid Number');
                       if(ever == "1" || ever == 1 ){  
                         // alert(ever);
                       }else{ //alert(ever);

                        jQuery('#phone_error').html('');   
                        jQuery('#phone_error').html('Invalid Number');
                        //   jQuery('#phone').val('');  
                      }
                    }
                    else if(res.status == true){

                     jQuery('#phone_error').html('<span style="color:green">Valid Number</span>');
                     jQuery('#pver').val('1'); 
                   }
                 }
               });

                }else if(selval!= '' && phone != "" && phone.length < 10){

                  jQuery('#phone_error').html(' ');
                  jQuery('#phone_error').html('Invalid Number');
                }else if(selval == ''){

                  jQuery('#phone_error').html(' ');
                  jQuery('#phone_error').html('Please select country code.');
                }else if(phone == ""){

                  jQuery('#phone_error').html(' ');
                  jQuery('#phone_error').html('Invalid Number');
                }
              }
            </script>
            <div class="col-12 col-xs-12 col-md-6">
              <input oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Phone" id="phone_code" name="phone" onblur="verify_phone_contactus(this.value)" type="tel" class="form-control wpcf7-text focus-on phnnumb" style="">
              <span id="phone_error" style="color:red;"></span> <span id="country_error" style="color:red;"></span>
              <span class="ldrphone text-center" style="display: none;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
            </div>
          </div>

          <div class="input_four row">
            <div class="col-12 col-md-6 col-sm-12 col-xs-12">
              <input  id="email" maxlength="80" name="email" size="20" type="text" placeholder="Business Email" onblur="verify_email_contactus(this.value);" /><br/>
              <span id="email_error" style="color:red;"></span>
              <span class="ldremailchk text-center" style="display: none !important;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
            </div>
            <div class="col-12 col-md-6 col-sm-12 col-xs-12">
              <input  id="company" maxlength="40" name="company" size="20" type="text" placeholder="Company" /><br/>
              <span id="company_error" style="color:red;"></span>
            </div>
          </div>

          
          <div class="input_four row">
            
            <div class="col-12 col-md-6 col-sm-12 col-xs-12">
              <!--country deepak  7    -->
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/country-picker-flags/build/css/countrySelect.css">
    	<style>
    	.country-select.inside{
    	    width:100%;
    	}
        .country-select .country-list .country {
            padding: 0px 7px;
        }
        .selected-flag {
            background: #f2f2f2;
        }
        input#country_selector {
            text-indent: 5px; width: 100%;
        }
        .country-select.inside {
            width: 100%;
        }
        p.country {
   margin:0;
}

	</style>
           <p class="country">Please select country below</p>

            <fieldset class="form-col" id="" style="padding: 0px;border: none;">
                <input id="country_selector" type="text" name="">
                  <span id="companydev_error" style="color:red;"></span>

				<label for="country_selector" style="display:none;">Select a country here...</label>
				<div class="form-item" style="display:none;">
        				<input type="text" id="country_selector_code" name="Country__c" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
        				<label for="country_selector_code">...and the selected country code will be updated here</label>
        			</div>
        			<button type="submit" style="display:none;">Submit</button>
    		</fieldset> 
              <script src="https://www.jqueryscript.net/demo/country-picker-flags/build/js/countrySelect.js"></script>    
              <script>
    			jQuery("#country_selector").countrySelect({
    				// defaultCountry: "jp",
    				// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    				// responsiveDropdown: true,
    				preferredCountries: ['us', 'gb', 'in', 'ca']
    			});
       

    		</script>
    
      <!--country end deepak      -->
            </div>
          </div>


          <div class="row input_fou2r">
            <div class="col-4 col-md-2 col-sm-4 col-xs-4 mt-4">

              <?php
        $pid = get_queried_object_id();
    
        ?>
    <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['current_captcha_form_id'] = $pid;
        ?>
        <img alt="captcha" 
             src="<?php echo get_site_url(); ?>/wp-content/themes/thegem-child/cap2.php" 
             id="captchaImg_<?php echo $pid; ?>"
             class="codeImg" style="width:100%;height: 44px;padding-left: 5px;"> </div>
              <div class="col-2 col-md-2 col-sm-2 col-xs-2 mt-4" style="padding-right: 0px;">
               <p  class="btnRefresh" style="cursor: grab;    text-align: center;"><img alt="refresh-icon" src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/04/free-refresh-icon-3104-thumb-1.png" style="height: 40px;"></p>

             </div>
<input type="hidden" name="pageid" id="pageid"  value="<?php echo $pid;?>">
             <div class="col-6 col-md-4 col-sm-6 col-xs-6 mt-4">
              <div class="form-group ">
                <input type="text" name="vercode" id="vercode" class="form-control" placeholder="Enter value" style="padding: 5px 12px;
                width: 100%;
                background-color: #fff;
                border: 1px solid rgb(223 244 255);
                border-radius: 0px;">
                <span id="vercode_error" style="color:red;"></span>
              </div>
            </div> </div>
            <?php
            $id = get_the_ID();
            ?>
            
 <input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
            
            <select  id="lead_source" name="lead_source" style="display: none;"><option value="SEO">SEO</option>

          </select><br/>
          
          <input type="hidden" 
       id="lead_source_sub" 
       name="Sub_Lead_Source__c" 
       value="360SMS-Contact Us" />

<input type="hidden" 
       id="Lead_Source_URL__c" 
       name="Lead_Source_URL__c" 
       value="<?php echo esc_url( get_permalink() ); ?>" />
          
          <input type="hidden" id="ever" value="0">
          <input type="hidden" id="pver" value="0">
          <span id="all_error" style="color:red;"></span>
          <input type="submit" name="submit" id="webtoLeadFormOne" class="button cus-button button-34 " value="Connect with Texting Expert"/>

        </form></div><br/>

        <?php


      }
      
      add_filter(
    'register_post_type_args',
    function ($args, $post_type) {
        if ($post_type !== 'post') {
            return $args;
        }

        $args['rewrite'] = [
            'slug' => 'blog',
            'with_front' => true,
        ];

        return $args;
    },
    10, 
    2
);

/*function space_change_custom_taxonomy_slug_args( $taxonomy, $object_type, $args ){
    if( 'cal_category' == $taxonomy ){ // Instead of the "old-slug", add current slug, which you want to change.
        remove_action( current_action(), __FUNCTION__ );
        $args['rewrite'] = array( 'slug' => 'texting-for-pros' ); // Instead of the "new-slug", add a new slug name.
        register_taxonomy( $taxonomy, $object_type, $args );
    }
}
add_action( 'registered_taxonomy', 'space_change_custom_taxonomy_slug_args', 10, 3 );*/

add_shortcode('channel_pageshortcode','channel_form');
function channel_form(){
   //echo '';
 ?>
 <style>
  .col-one {
    padding: 0% 15px 2.7% 1% !important;
    margin: 0px 0 0 0;
    background-color: #f9f9f9;
  }
  .d-flex {
    display: flex !important;
  }
	 .d-flexform {
    margin: 13px 0;
}
  .text-center {
    text-align: center;
    color: #ffffff;
  }
  h3.text-center {
    color: #ffffff;
    font-size: 40px;
    display: flex;
    justify-content: center;
    margin: 40% 0px 5% 0px;
  }
  .form-col {
    padding: 0px 10px 0px 10px;
  }
  .width-50 {
    width: 50%;
  }
  .form-select {
    background-color: rgba(229, 241, 248, 0.58);
    min-height: 56px;
    border: none !important;
    background-position-y: 28px;
    padding: 16px 18px;
  }
  .form-control {
    display: block !important;
    width: 100% !important;
    /*height: calc(1.5em + .75rem + 2px);*/
    padding: 7px 18px !important;
    font-size: 20px !important;
    font-weight: 400 !important;
    line-height: 1.5 !important;
    color: #495057 !important;
    background-color: rgba(229, 241, 248, 0.58) !important;
    /*border: 1px solid #ced4da; */
    border: none !important;
  }
  .button1 {
    font-weight: 700 !important;
    font-size: 17.5px !important;
    line-height: 17.5px !important;
    font-style: normal;
    padding: 12px 25px !important;
    border: 1px solid !important;
    border-radius: 5px !important;
    background: #00bcd4 !important;
    color: #ffffff !important;
    border-color: #00bcd4 !important;
  }
  .buttonmr{
   margin:5px !important;
 }
 .error {
  color: red !important;
  margin-left: 5px !important;
}

label.error {
  display: inline !important;
}
.col-bg{
  background-image: url(/wp-content/uploads/2022/03/main-footer_form_bg.jpg); 

}
@media only screen and (max-device-width: 769px) { 
 img.codeImg{
  width: 50% !important;margin-bottom:20px;
}
.d-flexform{
  display: block !important;
  margin: 2% 0% !important;
} 
.width-50 {
  width: 100%;
  margin:2% 0%;
}
h3.text-center {
  color: #ffffff;
  font-size: 40px;
  display: flex;
  justify-content: center;
  margin: 0% 0px 5% 0px;
  padding: 18% 0 0px 0;
}
.col-bg {
  background-image: url(/wp-content/uploads/2022/03/main-footer_form_bg.jpg);
  height: auto;
}
.text-center {
  text-align: center;
  color: #ffffff;
  padding-bottom: 10%;
}
.col-one {
  padding: 0% 15px 0% 1% !important;
  margin: -19px 0 0 0;
  background-color: #f9f9f9;
}
}
@media screen and (min-width: 1200px) {
  .formwidth {
    width: 900px !important;
    max-width: 900px !important;
    display: flex;
    justify-content: center;
    margin: 1% auto 0%;
  }}
  .formwidth .col-bg{
    height: 28.75em;
  }
  .formwidth  .col-one {
    padding:1.7% 15px 1.7% 1% !important;
  }
  .intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-2,.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-3,.iti{
   width: 100% !important;
 }
	 input#phone_code {padding-top: 7px !important;
    padding-bottom: 7px !important;border: none;font-size: 20px !important;
    font-weight: 400 !important;
    line-height: 1.5 !important;
    color: #495057 !important;
    background-color: rgba(229, 241, 248, 0.58) !important;width: 100%;}
@media(max-width:767px){
    .formwidth .col-bg{
        height: auto;
    }
    .row.formBack {
    display: flex;
}
.col-sm-4.mt-4.mob-col-4{
    width:100%;
    padding-right:0px;
}
.col-sm-6.mt-4.mob-col-6 {
    padding-left: 0px;
    width: 100%;
}
img.codeImg{
     width: 100% !important;
}
}
@media (min-width: 1200px){
    .formwidth .col-bg{   
        min-height: 28.75em;
        height: auto !important;
    }
}
@media (max-width: 1024px) and (min-width: 992px){
    .form-col p {
        margin-bottom: 0;
    }
    .formwidth .col-bg, .formwidth .col-md-6{
        height: auto !important;
        min-height: 31.35em;
    }
}
</style>
<script>    
  function removeValidations(ids) {
   jQuery(ids).each(function(index, key) {
    jQuery("#" + key).keyup(function() {
      jQuery("#" + key + "_error").html('');
    });
  });
 }

 jQuery( document ).ready(function() {


  jQuery("#description").keyup(function(){
    jQuery(this).siblings('span:first').text("");
  });
});                                              
</script>
<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
  <!--  If necessary, please modify the charset parameter to specify the        -->
  <!--  character set of your HTML page.                                        -->
  <!--  ----------------------------------------------------------------------  -->

  <meta http-equiv="Content-type" content="text/html; charset=UTF-8">


  <!--  ----------------------------------------------------------------------  -->
  <!--  NOTE: Please add the following <FORM> element to your page.             -->
    <!--  ----------------------------------------------------------------------  -->
    <div class=" formwidth dev">
      <div class="col-md-6 col-bg">
        <h3 class="text-center">Contact Us</h3>
        <p class="text-center">No matter where you are from, we provide Global Coverage.</p>
      </div>
      <div class="col-md-6 col-one">

        <form id="formFirstLead">
          <input type="hidden" name="encoding" value="UTF-8">
          <input type="hidden" name="oid" value="00D61000000cnSO">
          <input type="hidden" name="retURL" value="<?php echo get_site_url(); ?>/thank-you/">
          <input type="hidden" id="ever" value="0">
          <input type="hidden" id="pver" value="0">


          <div class="d-flex d-flexform">
            <div class="form-col width-50">
              <input placeholder="Name" id="last_name" maxlength="255" name="last_name" size="20" type="text"
              class="form-control wpcf7-text" style="border: 1px solid #ccc;"
              >
              <span id="last_name_error" style="color:red;"></span>
            </div>


            <div class="form-col width-50" id="email_p">
              <input placeholder="Business Email" id="email" maxlength="80" name="email" size="20" type="email"
              class="form-control wpcf7-text" style="border: 1px solid #ccc;" onblur="verify_email_contactus(this.value);">
              <span id="email_error" style="color:red;"></span>

              <span class="ldremailchk text-center" style="display: none;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
            </div>
          </div>


          <div class="d-flex d-flexform">
            <script type="text/javascript">
             $(function () {
            var code = "+1"; // Assigning value from model.
            $('#phone_code').val(code);
            $('#phone_code').intlTelInput({
              autoHideDialCode: true,
              autoPlaceholder: "ON",
              dropdownContainer: document.body,
              formatOnDisplay: true,
              hiddenInput: "full_number",
              initialCountry: "auto",
              nationalMode: true,
              placeholderNumberType: "MOBILE",
              preferredCountries: ['US','GB' ,'AU' ,'CA' ,'IN'],
              separateDialCode: true
            });
          });
              function verify_phone_contactnew(phone){ 
                var selval = jQuery('.selected-dial-code').text().slice(1);
                var phone = jQuery('input#phone_code').val();
                console.log(phone + ' ' + selval);
                if(phone!= '' && phone.length >= 10 && selval!= ''){       
                  jQuery('span.ldrphone').show();
                  jQuery('span#phone_error').hide();
                  jQuery('span#counrty_error').hide();
                  var phone_check = phone.trim();
                  var ever = jQuery('#ever').val();
                  var phone_code = jQuery('.selected-dial-code').text().slice(1);
                   var pageid = jQuery("input#pageid").val();
      var baseURL =  '<?php echo site_url(); ?>/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
                  jQuery.ajax({
                    crossDomain: true,
                    url: baseURL,
                    method: 'POST',
                    data: {"phone_code":phone_code,"phone":phone_check},
                    success: function(response) {
                     jQuery('span.ldrphone').hide();
                     jQuery('span#phone_error').show();
                     jQuery('span#counrty_error').show();
                     res = JSON.parse(response);
                     if(res.status == false){
                       jQuery('span#country_error').html(''); 
                       jQuery('#phone_error').html('');   
                       jQuery('#phone_error').html('Invalid Number');
                       if(ever == "1" || ever == 1 ){  
                         // alert(ever);
                       }else{ //alert(ever);
                         jQuery('span#country_error').html('');   
                         jQuery('#phone_error').html('');   
                         jQuery('#phone_error').html('Invalid Number');
                        //   jQuery('#phone').val('');  
                      }
                    }
                    else if(res.status == true){
                      jQuery('span#country_error').html(' '); 
                      jQuery('#phone_error').html('<span style="color:green">Valid Number</span>');
                      jQuery('#pver').val('1'); 
                    }
                  }
                });

                }else if(selval!= '' && phone != "" && phone.length < 10){
                 jQuery('span#country_error').html(' ');
                 jQuery('#phone_error').html(' ');
                 jQuery('#phone_error').html('Invalid Number');
               }else if(selval == ''){
                jQuery('#country_error').html(' ');
                jQuery('#phone_error').html(' ');
                jQuery('#phone_error').html('Please select country code.');
              }else if(phone == ""){
                jQuery('#country_error').html(' ');
                jQuery('#phone_error').html(' ');
                jQuery('#phone_error').html('Invalid Number');
              }
            }
          </script>
          <div class="col-12 col-sm-12 col-md-12" style="padding:0px 10px;">

            <input oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Phone" id="phone_code" name="phone" onblur="verify_phone_contactus(this.value)" type="tel" class="wpcf7-text focus-on phnnumb">
            <span id="phone_error" style="color:red;"></span> <span id="country_error" style="color:red;"></span>
            <span class="ldrphone text-center" style="display: none;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
          </div>

        </div>
<!--country deepak  8    -->
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/country-picker-flags/build/css/countrySelect.css">
    	<style>
    	.country-select.inside{
    	    width:100%;
    	}
        .country-select .country-list .country {
            padding: 0px 7px;
        }
        .selected-flag {
            background: #f2f2f2;
        }
        input#country_selector {
            text-indent: 5px; width: 100%;
        }
        .country-select.inside {
            width: 100%;
        }
        input#country_selector {
    height: 44px;
    background: #edf4f8;
}
p.country {
   margin:0;text-indent:12px;
}

	</style>
           <p class="country">Please select country below</p>

            <fieldset class="form-col" id="" style="padding: 0px 10px;border: none;">
                <input id="country_selector" type="text" name="">
                  <span id="companydev_error" style="color:red;"></span>

				<label for="country_selector" style="display:none;">Select a country here...</label>
				<div class="form-item" style="display:none;">
        				<input type="text" id="country_selector_code" name="Country__c" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
        				<label for="country_selector_code">...and the selected country code will be updated here</label>
        			</div>
        			<button type="submit" style="display:none;">Submit</button>
    		</fieldset> 
              <script src="https://www.jqueryscript.net/demo/country-picker-flags/build/js/countrySelect.js"></script>    
              <script>
    			jQuery("#country_selector").countrySelect({
    				// defaultCountry: "jp",
    				// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    				// responsiveDropdown: true,
    				preferredCountries: ['us', 'gb', 'in', 'ca']
    			});
    		</script>
    		
      <!--country end deepak      -->
        <div class="d-flex d-flexform">
          <div class="form-col" style="width: 100%;">
           <input placeholder="Company"  id="company" maxlength="40" name="company" size="20" type="text"
           class="form-control wpcf7-text" style="border: 1px solid #ccc;" />
           <span id="company_error" style="color:red;"></span>

         </div>
       </div>
       <div class="d-flex d-flexform">
        <div class="form-col" style="width: 100%;">
          <div class="form-group">
            <textarea id="description" name="description" rows="6" class="form-control wpcf7-text"
            placeholder="Description...." style="border: 1px solid #ccc; height: 68px; margin-bottom: 2%;"></textarea>
          </div><span id="description_error" style="color:red;"></span>
          <p style="color: #271c1c; font-size: 14px;">By clicking 'Submit,' I agree to subscribe to promotional messages and newsletters.</p>
        </div>
      </div>
      <div class="row formBack">
        <div class="col-sm-4 mt-4 mob-col-4">
<?php $pid = get_queried_object_id(); ?>
        <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['current_captcha_form_id'] = $pid;
        ?>
        <img alt="captcha" 
             src="<?php echo get_site_url(); ?>/wp-content/themes/thegem-child/cap2.php" 
             id="captchaImg_<?php echo $pid; ?>"
             class="codeImg" style="width:100%;height: 44px;padding-left: 5px;"> <input type="hidden" name="pageid" id="pageid"  value="<?php echo $pid;?>">         
                                      </div>
                                      <div class="col-sm-2 mt-4 mob-col-2">
                                        <p  class="btnRefresh" style="cursor: grab;"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2022/04/free-refresh-icon-3104-thumb-1.png" alt="Refresh icon" style="height: 40px;"></p>
                                      </div>
                                      <div class="col-sm-6 mt-4 mob-col-6">
                                        <div class="form-group ">
                                          <input type="text" name="vercode" id="vercode" class="form-control" placeholder="Enter value">
                                          <span id="vercode_error" style="color:red;"></span>
                                        </div>
                                      </div> </div>
                                      <?php
                                       if(is_page('texting')){
                                        $source="SMS_Texting";
                                      }
                                      
                                      if(is_page('sms')){
                                        $source="Channel-SMS";
                                      } elseif(is_page('mms' )){
                                        $source="Channel-MMS";

                                      } elseif(is_page('computer-telephony-integration' )){
                                        $source="Channel-Computer-Telephony-Integration";

                                      } elseif(is_page('whatsapp')){
                                        $source="Channel-Whatsapp";

                                      } elseif(is_page('ringless-voicemail' )){
                                        $source="Channel-Ringless-Voicemail";

                                      }  elseif(is_page('facebook-messenger' )){
                                        $source="Channel-Facebook-Messenger";

                                      } elseif(is_page('wechat' )){
                                        $source="Channel-Wechat";

                                      }  elseif(is_page('viber' )){
                                        $source="Channel-Viber";

                                      }  elseif(is_page('automated-messaging')){
                                        $source="Channel-Automated-Messaging";

                                      }  elseif(is_page('itext')){
                                        $source="Channel-Itext";

                                      }  elseif(is_page('conversation-manager')){
                                        $source="Channel-Conversation-Manager";

                                      }  elseif(is_page('bulk-batch-scheduled-sms-texting')){
                                        $source="Channel-Bulk-Batch-Scheduled-Sms-Texting";

                                      }  elseif(is_page('link-tracking')){
                                        $source="Channel-Link-Tracking";

                                      } elseif(is_page('drip-campaigns')){
                                        $source="Channel-Drip-Campaigns";

                                      }  elseif(is_page('one-on-one-conversations')){
                                        $source="Channel-One-on-One-Conversations";

                                      } elseif(is_page('cti-call-auto-forwarding')){
                                        $source="Channel-Cti-Call-Auto-Forwarding";

                                      } elseif(is_page('sticky-sender')){
                                        $source="Channel-Sticky-Sender";
                                      } 
                                       elseif(is_page('appointments-and-rescheduling')){
                                        $source="Channel-Appointments-and-Rescheduling";
                                      } elseif(is_page('multiple-language-support')){
                                        $source="Channel-Multiple-Language-Support";
                                      } 
                                      elseif(is_page(42070)){
                                        $source="Channel-Kakao";
                                      }

                                      elseif(is_page(61303)){
                                        $source="Channel-Zalo";
                                      }

                                      elseif(is_page('instagram')){
                                        $source="Channel-Instagram";
                                      }
                                      elseif(is_page(42129)){
                                        $source="Channel-Line";
                                      }
                                      elseif(is_page('chatbot')){
                                        $source="SMS_Chatbot";
                                      }
                                      elseif(is_single()){
                                        $source="360SMS_contact_form_blogs";
                                      }
                                      ?>
                                      
<input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">                                                              
<input type="hidden" 
       id="lead_source" 
       name="lead_source" 
       value="<?php echo esc_attr( get_field('lead_source') ); ?>" />

<input type="hidden" 
       id="lead_source_sub" 
       name="Sub_Lead_Source__c" 
       value="<?php echo esc_attr( get_field('sub_lead_source') ); ?>" />

<input type="hidden" 
       id="Lead_Source_URL__c" 
       name="Lead_Source_URL__c" 
       value="<?php echo esc_url( get_permalink() ); ?>" />



                                      <div class="form-col" style="width: 100%;">
                                        <span id="all_error" style="color:red;"></span>
                                        <input type="submit" name="submit" id="webtoLeadFormOne" class="button1 buttonmr" style="width: 100%;"/>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                                <?php
                              }
                              
function team_custom_security_headers( $headers ) {
    $headers['X-XSS-Protection'] = '0';
    $headers['X-Content-Type-Options'] = 'nosniff';
    if(!is_page([33999,33306,34328,30472,15987,29867,33818,33847,33851,36283,37889])){  
    $headers['Content-Security-Policy'] = "upgrade-insecure-requests,frame-ancestors 'self'; style-src 'self' 'unsafe-inline' http: https: fonts.googleapis.com; font-src 'self' data: http: https: fonts.googleapis.com themes.googleusercontent.com;";
    }
     $headers['Permissions-Policy'] = "fullscreen=(self 'https://test.360smsapp.info'),geolocation=*, camera=()"; 
    $headers['X-FRAME-OPTIONS'] = 'SAMEORIGIN';
    $headers['Strict-Transport-Security'] = 'includeSubDomains; preload; max-age=63072000';
     $headers['Referrer-Policy'] = 'no-referrer-when-downgrade';
    $headers['X-Permitted-Cross-Domain-Policies'] = 'none';
    $headers['Permissions-Policy'] = 'geolocation=(self "https://test.360smsapp.info"); microphone=()';
    $headers['cache-control'] = 'max-age=86400';
    $headers['Cross-Origin-Embedder-Policy'] = 'same-origin';
    $headers['Cross-Origin-Opener-Policy'] = 'same-origin';
    $headers['Cross-Origin-Resource-Policy'] = 'same-origin';
    $headers['Set-Cookie'] = '__Host-sess=123; path=/; Secure; HttpOnly; SameSite=Lax';
    return $headers;
}

add_filter( 'wp_headers', 'team_custom_security_headers' );

/*
function addingScriptingCode(){
    
if(is_page('verify-the-phone')){
?>
<script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "Salesforce Phone Number Verification",
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2021/09/verify-number.jpg?id=37669",
   		 "description": "360 SMS APP Verify & validates Phone Numbers in Salesforce for mobile-first interactions allows increase in conversions with better data hygiene for opportunities.",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>


<?php
}
if(is_page('education-academics')){
?>
<script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "Salesforce SMS for Higher Education",
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2021/05/EDUCATION-banner-1-1.jpg?id=33899",
   		 "description": "Best Salesforce Native APP for SMS and Texting Solution to Education Cloud to reach & engage more students & meet enrolment targets, broadcast Bulk and Batch Messaging",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>

<?php
}if(is_page('non-profit')){
?>
<script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "Salesforce for Non Profit",
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2021/05/Finance-banner-1.jpg?id=33910",
   		 "description": "Best Native app on Salesforce AppExchange for Non-Profit Organization. One-stop text messaging solution for NPO Fundraising. Contact us sales@360smsapp.com",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>



<?php
}if(is_page('short-codes')){
?>
<script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "Salesforce Short Codes",
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2021/09/Get-Memorable-Short.jpg?id=37159",
   		 "description": "The 360 Sms app creates explosive messages for billboards, TV ads, and AdWords that customers remember. we are dedicated to short codes and over time we become synonymous with brand identity.",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>


<?php
}if(is_page('healthcare-wellness')){
?>
<script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "Salesforce for Healthcare",
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2021/05/Healthcare-2.jpg?id=33959",
   		 "description": "HIPAA Compliant SMS and Text Message for Salesforce Health Cloud. Reliable, Serverless Communications for Healthcare &amp; Wellness Patients",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>

<?php
}if(is_page('appointments-and-rescheduling')){
?>
<script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "Salesforce Appointment Confirmation Message",
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2022/01/appointment.jpg?id=40002",
   		 "description": "Automate bookings, reminders, and cancellations messages for appointments with 360 SMS APP. Manage appointments by sending reminders to your potential customers.",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>



<?php
}if(is_page('real-estate')){
?>
<script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "Salesforce For Real Estate Agents",
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2022/01/appointment.jpg?id=40002",
   		 "description": "A Salesforce WhatsApp and SMS Automation for Realtors. 360 SMS APP native app to send personalized invites, open house visits and accelerate buying decisions.",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>


<?php
}
if(is_page('link-tracking')){
?>
<script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "Salesforce Link Tracking",
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2022/01/appointment.jpg?id=40002",
   		 "description": "Send on-brand shortened links that you can track for engagement metrics. Enrich, Measure, And Brand Texting Engagements meaningfully with Link Tracking in 360 SMS APP.",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>




<?php
}

    if(is_page('sms')){
    ?>
    <script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "Salesforce SMS",
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp",
   		 "description": "Native Salesforce sms APP on AppExchange to add Text Messaging facility, send Bulk SMS to millions of users globally. Run interactive campaign at different stages of sales or operations",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>
    <?php
    }
        if(is_page('mms')){
    ?>
    <script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "Salesforce MMS",
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp",
   		 "description": "Send MMS from Salesforce to add new dimensions and value to communications. Push multimedia, long-form attachments, Send pictures, phone contacts, and video files.",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>

    <?php
    }
      if(is_page('computer-telephony-integration')){
    ?>
    <script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "Salesforce CTI",
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp",
   		 "description": "Salesforce Computer Telephony Integration (CTI) to access an integrated Dialer from any record to make and receive calls & propel deals. 360 SMS APP - Salesforce Native APP",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>

    <?php
    }
     if(is_page('whatsapp')){
    ?>
    <script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "Salesforce WhatsApp",
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp",
   		 "description": "Best Salesforce WhatsApp API Integration. Salesforce Native app 360 SMS APP give access to a lower-cost, multimedia-enabled messaging with WhatsApp automation solution.",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>


    <?php
    }
    if(is_page('ringless-voicemail')){
    ?>
    <script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "Ringless Voicemail Salesforce",
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp",
   		 "description": "Send personalized Ringless Voicemail messages with 96% listen rate. 360 SMS APP extension send non-intrusive voicemail in bulk to create the illusion of a personal missed call",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>
    <?php
    }
    if(is_page('facebook-messenger')){
    ?>
    <script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "Facebook Salesforce Integration",
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp",
   		 "description": "360 SMS APP integrates Facebook Messenger with Salesforce. Run Interactive campaigns for millions of users and get messaging expertise in Facebook Live Chat.",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>
    <?php
    }
    if(is_page('wechat')){
    ?>
    <script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "WeChat Salesforce Integration",	
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp",
   		 "description": "Integrating WeChat messaging with Salesforce 360 SMS Native APP in AppExchange enables you reach directly with Chinese speaking audiences, students & travellers",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>

    <?php
    }
    if(is_page(42129)){
    ?>
    <script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "Salesforce Line Integration",	
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp",
   		 "description": "Respond instantly to opportunity with 360 SMS for LINE to best message loyal audiences from Japan and Southeast Asia in a popular super-app.",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>

    <?php
    }
    if(is_page(42070)){
    ?>
    <script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "Salesforce KakaoTalk Integration",	
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp",
   		 "description": "Integrate KakaoTalk with Salesforce, a well-known favourite app in the South Korean market, and reach out to 47 million South Koreans.",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>
    <?php
    }
     if(is_page('instagram')){
    ?>
    <script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "Salesforce Instagram Integration",	
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp",
   		 "description": "360 SMS for Instagram provides superior messaging automation, chatbots, and peer-to-peer messaging.Connect customers social DMs to Salesforce for real-time chats",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>

    <?php
    }
    if(is_page('viber')){
    ?>
    <script type="application/ld+json">
   	 {"@context": "https://schema.org/",
   		 "@type": "Product",
   		 "name": "Salesforce Viber Integration",	
  		 "image":"https://test.360smsapp.info/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp",
   		 "description": "Integrating WeChat messaging with Salesforce 360 SMS Native APP in AppExchange enables you reach directly with Chinese speaking audiences, students & travellers",
   		 "brand": {"@type": "Brand","name": "360 SMS APP"},
   		 "aggregateRating": {"@type": "AggregateRating","ratingValue": "5","ratingCount":"950"}
    	}
</script>

<?php
    }
    
}
add_action('wp_head', 'addingScriptingCode');
*/


function usecaseFxnForm()
{
    $obj_id = get_queried_object_id();
    $current_url = get_permalink($obj_id);
    ?>
    
    <style>
    .intl-tel-input {
      width: 100%;
  }
  .intl-tel-input .selected-flag {
      z-index: 4;
  }
  .intl-tel-input .country-list {
      z-index: 5;
  } span.country-name {
    color: #000;
}
div#termcon,div#termcon a{
    font-size:14px !important;
  }
  @media(max-width:767px){
  .mob-3{
    width:30% !important;
  }
    .mob-2{
    width:15% !important;
  }
  .mob-6{
      width:50% !important;
    }
  }
</style>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">

<link rel="stylesheet" href="https://static.fontawesome.com/css/fontawesome-app.css">
<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
   <!--  If necessary, please modify the charset parameter to specify the        -->
   <!--  character set of your HTML page.                                        -->
   <!--  ----------------------------------------------------------------------  -->

   <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
   

   <!--  ----------------------------------------------------------------------  -->
   <!--  NOTE: Please add the following <FORM> element to your page.             -->
       <!--  ----------------------------------------------------------------------  -->
       <style>  

          .error {
            color: red;
            margin-left: 5px;
        }

        label.error {
            display: inline;
        } div#myBtn {
         background: #da5e46;
}
.para small {
    padding-bottom: 20px;
}
.designmodal {
    /*padding-top: 180px !important;*/
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}
div#myModal {
    overflow: hidden;
}
    </style>
 
    <div class="gem-button gem-button-size-small gem-button-style-flat gem-button-text-weight-normal myBtns" style="border-radius: 3px;background-color: #00bcd4;color: #ffffff;cursor: pointer;display:block;max-width: 340px;
    margin: 0 auto;" onmouseleave="this.style.backgroundColor='#00bcd4';this.style.color='#ffffff';" onmouseenter="this.style.color='#ffffff';"  target="_blank" data-lf-fd-inspected-kn9eq4rmqql7rlvp="true" id="myBtn">Download SMS Group Chat Guide</div>
     <div id="myModal" class="modals">
        <div class="designmodal">
            <div>
        <div style="max-width: 700px;
    margin: 0 auto;
    width: 100%;
    text-align: right;">   
             <span class="close">&times;</span>
        </div>
    
        <div class="modal-content">
            
            <div class="modalss">
                <div class="popup-heading">
                    <h2>Get this resource.</h2>
                    <p>Please fill out all the fields to download this resource.</p>
                </div>
                <div class="form-part">
                    <form id="formFirstLeads2">
    <input type="hidden" name="encoding" value="UTF-8" />
    <input type=hidden name="oid" value="00D61000000cnSO">
    
        <input type=hidden name="retURL" value="<?php echo get_site_url(); ?>/wp-content/uploads/2023/02/360_SMS-Group_Chat_Guide.pdf">
    
	 
    <div class="form-flex-popup">
        <label for="Name">Name:</label>
        <div class="input-popup-field">
                <div class="d-flex" style="display:flex;">
              <div class="form-col width-50">
                 <input type="text" id="first_name2" placeholder="First Name" maxlength="40" name="first_name" >
            </div>
            <div class="form-col width-50" id="last_name_p">
          <input type="text" class="form-col width-50" id="last_name2" placeholder="Last Name" maxlength="40" name="last_name" >
        <span id="last_name_error2" style="color:red;"></span>
            </div>
        </div>
    </div>
    </div>

 
<div class="d-flex d-flexform">
    <link href="<?php echo site_url(); ?>/wp-content/themes/thegem-child/css/flag-tel.css" rel="stylesheet" media="screen">
    <script src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/phoneDesign/js/jquery.min.js"></script>
   <script src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/phoneDesign/js/intlTelInput.js"></script>
   <script src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/phoneDesign/js/intlTelInput.min.js"></script>
   <script src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/phoneDesign/js/utils.js"></script> 

 <script type="text/javascript">
        $(function () {
                var code = "+1"; // Assigning value from model.
            $('#phone_code2').val(code);
            $('#phone_code2').intlTelInput({
            allowExtensions: true,
                autoHideDialCode: true,
                autoPlaceholder: "ON",
                dropdownContainer: document.body,
                formatOnDisplay: true,
                hiddenInput: "full_number",
                initialCountry: "auto",
                nationalMode: true,
                placeholderNumberType: "MOBILE",
                preferredCountries: ['US','GB' ,'AU' ,'CA' ,'IN'],
                separateDialCode: true
            });
            $('#btnSubmit2').on('click', function () {
                var code = $("#phone_code2").intlTelInput("getSelectedCountryData").dialCode;
                var phoneNumber = $('#phone_code2').val();
                var name = $("#phone_code2").intlTelInput("getSelectedCountryData").name;
                alert('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);
            });
        });
      function verify_phone_contactnewsydney(phone){ 
        var pageid = jQuery("input#pageid2").val();
   var selval = jQuery('form#formFirstLeads2 .selected-dial-code').text().slice(1);
   var phone = jQuery('input#phone_code2').val();
      console.log(phone + ' ' + selval);
      
      if(selval!= '' && phone != "" && phone.length < 10){
     
        jQuery('#phone_error2').html(' ');
        jQuery('#phone_error2').html('Invalid Number');
      }else if(selval == ''){
        
        jQuery('#phone_error2').html(' ');
       }else if(phone == ""){
      
      jQuery('#phone_error2').html(' ');
      jQuery('#phone_error2').html('Invalid Number');
   }
    else{
           jQuery('#phone_error2').html(' ');
        }

    }
    </script>
    <div class="form-flex-popup" style="width: 100%;">
    <label for="Name">Phone No:</label>
    <div class="input-popup-field">
       <input oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Phone" id="phone_code2" name="phone" onblur="verify_phone_contactnewsydney(this.value)" type="tel" class="form-control wpcf7-text focus-on phnnumb input" style="">
    <span id="phone_error2" style="color:red;"></span> <span id="country_error2" style="color:red;"></span>
    <span class="ldrphone2 text-center" style="display: none;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
    </div>
    </div>
</div>
<div class="form-flex-popup">
                            <label for="Name">Work Email:</label>
                            <div class="input-popup-field">
                               <input id="email2" maxlength="80" name="email" size="20" class="form-control" placeholder="Email" onblur="verify_emailsydney(this.value);">
    <span id="email_error2" style="color:red;"></span>
     <span class="ldremailchk text-center" style="display: none "><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
                            </div>
                        </div>
<div class="row formBack part1 form-part">
    <div class="col-xs-3 mob-3 col-sm-4 mt-4 ">
        <!--<label class="checkbox-inline">Verification Code<span class="astrix">*</span></label>-->
        <?php
     $pid = get_queried_object_id();        
        ?>
        <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['current_captcha_form_id'] = $pid;
        ?>
        <img alt="captcha" 
             src="<?php echo get_site_url(); ?>/wp-content/themes/thegem-child/cap2.php" 
             id="captchaImg_<?php echo $pid; ?>"
             class="codeImg" style="width:100%;height: 44px;padding-left: 5px;">                                <?php //session_start();  
                                    //echo "<pre>"; print_r($_SESSION); 
                                        
                                        ?>
                                        
                                    </div>
                                   
                                        <input type="hidden" name="pageid" id="pageid2"  value="<?php echo $pid;?>">
                                    
                                     
                                    <div class="col-xs-3 mob-2 col-sm-2 mt-4">
                                        
                                        <p  class="btnRefresh2" style="cursor: grab;"><img alt="refresh-icon"  src="<?php echo get_site_url();?>/wp-content/uploads/2022/04/free-refresh-icon-3104-thumb-1.png" style="height: 40px;"></p>
                                    </div>
                                    <div class="col-xs-6 mob-6 col-sm-6 mt-4 input-popup-field">
                                        <div class="form-groups form-flex-popup">
                                            <input type="text" name="vercode" id="vercode2" class="form-controls" placeholder="Enter value" style="width: calc(100% - 10px);
    background-color: #ffffff;
    border: 1px solid #d6d6d6;
    border-radius: 5px;
    font-size: 16px;
    padding: 6px 0px 6px 5px;">
                                            <span id="vercode_error2" style="color:red;"></span>
                                            <input   maxlength="40" name="company" value="360dc" type="hidden" size="20" type="text" /><br>
                                        </div>
                                    </div> </div>
<div class="part1 form-ftr"> 
                         <div class="btn1">
                       <div class="para">
                             <input type="checkbox" id="00N3k00000JB5bD" name="00N3k00000JB5bD" value="1">
                             <label for="00N3k00000JB5bD"><small> Yes, I would like to receive marketing communication about 360 Degree Cloud’d Saleforce services, products, and events.I can unsubscribe at any time.</small></label>

                            </div>
                         <button class="btnn" id="webtoLeadFormOness2">Download Now  </button> 
                           <div class="para">
                               <small style="margin-bottom: 0px;">By registering, you confirm that you agree to the processing of your personal data by 360 Degree Cloud as described in the <a style="font-weight: bold; color:#f8957e; font-size:100%;" href="/privacy-policies/" target="_blank"> Privacy Statement</a>.</small>
                            </div>
                                           
                    </div>
                </div> 

                                    <div class="d-flexs" style="display:none !important;">
                                        <div class="form-col" style="width: 100%;">
                                            <div class="form-group"> 
<input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">                                                                                  
                                              <select class="form-select" style="width: 100%;"id="lead_source2" name="lead_source" style="display:none !important;">
 
		 <option value="SEO">SEO</option>
                              </select>
                          </div>
                      </div>
                  </div>
                  
    <input type="hidden" 
       id="lead_source_sub" 
       name="Sub_Lead_Source__c" 
       value="360SMS-Contact Us" />

<input type="hidden" 
       id="Lead_Source_URL__c" 
       name="Lead_Source_URL__c" 
       value="<?php echo esc_url( get_permalink() ); ?>" />
    
<input type="hidden" id="ever" name="email_status" value="0">
  <input type="hidden" id="pver" name="phone_status" value="0">
<span id="all_error2" style="color:red;"></span>
        <div class="d-flex">
            <div class="form-col" style="width: 100%;">
                <div class="submit-wrap text-center" style="width: 100%;">
                    
                </div>
            </div>
        </div>
    </form>   
                  
                </div>
                
              
            </div>
        </div>
    </div>
</div>
</div>
<script>

jQuery(document).ready(function(){
  jQuery(".myBtns").click(function(){
      
    jQuery("#myModal").show();
  });
  jQuery(".close").click(function(){
     jQuery("#myModal").hide();
  });
});
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementsByClassName("myBtns")[0];


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    //alert('clicked');
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  //jQuery(".form-flex-popup span").hide();
  
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none"; 
  }
}
</script>
<script>       
function  verify_emailsydney(email){
     
        var pageid = jQuery("input#pageid2").val();
              if(email != ''){
        if(email.indexOf("@", 0) < 0){
         jQuery('#email_error2').html('Invalid Email');
         
         
       }
       else if(email.indexOf(".", 0) < 0){
        jQuery('#email_error2').html('Invalid Email');
        
        
      }
      
        else if (myVars.blockedDomains.includes(email.split('@')[1])) {
        jQuery('#email2_popup_ptt_error').html('Please enter your business email address. This form does not accept addresses from public/free domains.');
    } 
       
       
       
       else {
        jQuery('#email_error2').html(' ');
        // jQuery('span.ldremailchk').show();
        // var email_check = email.trim();
        
        // var baseURL =  location.protocol + '//' + document.location.hostname + '/wp-content/themes/thegem-child/verifyEmail.php?id='+ pageid;
        // jQuery.ajax({
        //   crossDomain: true,
        //   url: baseURL,
        //   method: 'POST',
        //   data: "email="+email_check,
        //   success: function(response) {
        //    jQuery('span.ldremailchk').hide();
        //    res = JSON.parse(response);
        //    if(res.status == false){
             
        //     jQuery('#email_error2').html('Invalid Email');
        //             //   jQuery('#email2').val('');
        //             jQuery('#ever').val('0');
        //           }
        //           else if(res.status == true){
        //            jQuery('#email_error2').html('<span style="color:green">Valid Email</span>');                                 
        //            jQuery('#ever').val('1'); 
        //          }
        //        }
        //      });
      }
    }else{
    jQuery('#email_error2').html(' ');  
       jQuery('#email_error2').html('Email Required');  
  }
    }
// jQuery('select#phone_code2').on('change', function() {
//    jQuery('span#phone_error').html(' ');
//        //jQuery("input#phone").val('');
//        var selval = jQuery('select#phone_code2').val();
//        var phone = jQuery("input#phone").val();
//        if(selval == ''){
//         console.log('1');
//       //alert('sdasdasd');
//       jQuery('span#country_error').html('Please select country code');
//   }else if( selval == '' && phone.length < 10){
//       jQuery('#phone_error').html('');   
//       jQuery('span#country_error').html(' ');
//       jQuery('span#country_error').html('Invalid Number');
//   } else if( selval != '' && phone.length < 10 && phone != ""){
//    console.log('2');
//    jQuery('#phone_error').html('');   
//    jQuery('span#country_error').html(' ');
//    jQuery('span#country_error').html('Invalid Number');
// }else{
//     console.log('no');

//     jQuery('span#country_error2').html('');
//     if(phone!= '' && selval!= '' && phone.length >= 10){
//       console.log('3');
//       jQuery('span.ldrphone2').show();
//       var phone_check = phone.trim();
//       var ever = jQuery('#ever').val();
//       var phone_code2 = jQuery('#phone_code2').val();
//       var pageid = jQuery("input#pageid").val();
//       var baseURL =  location.protocol + '//' + document.location.hostname + '/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
//       jQuery.ajax({
//         crossDomain: true,
//         url: baseURL,
//         method: 'POST',
//         data: {"phone_code2":phone_code2,"phone":phone_check},
//         success: function(response) {
//            jQuery('span.ldrphone2').hide();
//            res = JSON.parse(response);
//            if(res.status == false){ 
//              jQuery('#phone_error2').html(' ');   
//              jQuery('span#country_error2').html('');
//              jQuery('#phone_error2').html('Invalid Number');

//              if(ever == "1" || ever == 1 ){  
//                          // alert(ever);
//                        }else{ //alert(ever);
//                         jQuery('#phone_error2').html('');   
//                         jQuery('span#country_error2').html('');
//                         jQuery('#phone_error2').html('Invalid Number'); 
                        
//                         //   jQuery('#phone').val('');  
//                     }
//                 }
//                 else if(res.status == true){
//                  jQuery('span#country_error2').html('');
//                  jQuery('#phone_error2').html(' ');
//                  jQuery('#phone_error2').html('<span style="color:green">Valid Number</span>');
//                  jQuery('#pver').val('1'); 
//              }
//          }
//      });
//   }
// }
// });
jQuery("input#phone2").keypress(function(){
    var selval = jQuery('select#phone_code2').val();
    var phone = jQuery("input#phone2").val();
    if(selval == ''){      
      jQuery('span#country_error2').html(' ');
      jQuery('span#country_error2').html('Please select country code');
      jQuery("input#phone2").val(' ');
  } else{     
   if(phone!= '' && selval!= ''){
      jQuery('span#country_error2').html('');
  }
}

});

jQuery(document).ready(function () {
   jQuery("p.btnRefresh_bottom_other").click(function(){
    jQuery("img.codeImg").attr('src', '<?php echo site_url(); ?>/wp-content/themes/thegem-child/cap2.php?nocache=' + Math.random());
});
});
    jQuery("#webtoLeadFormOness2").click(function(e){
     e.preventDefault();
      //alert('Hi');
     var ids = ['last_name2','email2','vercode2'];
     
     var last_name = jQuery('#last_name2').val();
     var email = jQuery('#email2').val();
     var vercode = jQuery('#vercode2').val();
     //var description = jQuery('#description').val();
     var phone = jQuery('#phone2').val();
     removeValidations(ids);
     if(last_name == "" || email == "" ||  vercode == "" ){
        
        if(last_name == ""){
            jQuery("#last_name_error2").html('Required Field');
        }
        if(email == ""){
            jQuery("#email_error2").html('Required Field');
        }       
        if(vercode == ""){
            jQuery("#vercode_error2").html('Required Field');
        }
        
        return false;   
    }
    else if(email.indexOf("@", 0) < 0){
     jQuery('#email_error2').html('Invalid Email');
     jQuery('#email2').focus();
     return false;
 }
 else if(email.indexOf(".", 0) < 0){
    jQuery('#email_error2').html('Invalid Email');
    jQuery('#email2').focus();
    return false;
}
else if(jQuery('span#phone_error2').text() == 'Invalid Number' && jQuery('#phone_code2').val() != ''){
    return false;
}

  else if (myVars.blockedDomains.includes(email.split('@')[1])) {
        jQuery('#email2_popup_ptt_error').html('Please enter your business email address. This form does not accept addresses from public/free domains.');
    } 


else{
    console.log('checksss');
         $('.post_outer').addClass('show');

            // var baseURL =  location.protocol + '//' + document.location.hostname + '/wp-content/themes/thegem-child/vwebtolead.php';
            var baseURL =  location.protocol + '//' + document.location.hostname + '/wp-content/themes/thegem-child/server-check.php'; 
            console.log(baseURL);
            var form = jQuery('#formFirstLeads2');
            jQuery.ajax({
              url: baseURL,
              method: 'post',
              data: form.serialize(),
              success: function(response) {
                         $('.post_outer').removeClass('show');

                 var res = JSON.parse(response); 
               console.log(res.st);
                 if(res.st === parseInt(1)){
                    //location.href = res.url;
                    //window.open(res.url, '_blank');
                    void(window.open(res.url, '_blank'));
                    window.location.reload(true);
                    
                }else if(res.st === parseInt(2)){
               console.log('vercode_error2');
                  jQuery("#vercode_error2").html(res.msg);
                  return false;   
              }else if(res.st === parseInt(3)){
                  jQuery("#last_name2_error").html(res.msg);
                  return false;   
              }else if(res.st === parseInt(4)){
                  jQuery("#email_error2").html(res.msg);
                  return false;   
              }else if(res.st === parseInt(5)){
                  jQuery("#company_error").html(res.msg);
                  return false;   
             }else if(res.st === parseInt(6)){
                      jQuery("#phone_error2").html(res.msg);
                      return false;   
                    }
                    else if(res.st === parseInt(8)){
                      jQuery("#all_error2").html(res.msg);
                      return false;   
                    }
                    else if(res.st === parseInt(0)){
                      jQuery("#all_error2").html(res.msg);
                      return false;   
                    }
                    else{
                         jQuery("#all_error2").html("Something Went Wrong Please Try Again Later");
                      return false; 
                       
                    }
            jQuery("div#myModal").hide(); 
             
         }
     });  
        }
        
        
    });



function removeValidations(ids) {
 jQuery(ids).each(function(index, key) {
    jQuery("#" + key).keyup(function() {
      jQuery("#" + key + "_error").html('');
  });
});
}

</script>
<style>

html {
  scroll-behavior: smooth;
}

.cursorpointer img{
    cursor:pointer;
}
button#myBtn {
    color: #fff; 
    background-color: #04C1DA; 
    border: none; 
   border-radius: 6px; 
    font-weight: bold; 
    font-size: 13px; 
    transition: all .3s; text-align:center; padding: 15px 30px;
} 
button#myBtn:hover{ 
    transform: scale(1.1); 
} 
 .modals{    
  
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
  z-index: 999; /* Sit on top */
  padding-top: 30px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
   }
   .modal{
    width: 700px;
    border-radius: 5px;
   }
   .modal-content {
    background-color: #fefefe;

    max-width: 700px;
    margin: 0 auto;
  }
   .popup-heading{
    background-color: #fafafa;
   }
   .popup-heading{
    text-align: center;
    padding: 15px 22px 10px 22px;
    border-radius: 5px;
   
   }
   .popup-heading h2{
    font-size: 32px;
    font-weight: bold;
    text-transform:initial !important;
    margin: 0px;
    text-align: center;
    color: #1580d5;
   }
   .popup-heading p{
    font-size: 18px;
    margin-bottom:0px;
   }
   .form-part{
    background-color:#edf4f8;
    padding: 5px 50px 0px 25px;
   }
   .form-flex-popup {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    padding: 8px 0;
   }
   .form-part .form-flex-popup label{
    width: 225px;
    font-size: 17px;
    font-weight: 600;
    color:#535354;
    text-align: right;
}
   .form-part .form-flex-popup .input-popup-field{
    width: 100%;
   }
   .form-part .form-flex-popup .input-popup-field input{
    width: calc(100% - 10px);
    background-color: #ffffff;
    border:1px solid #d6d6d6;
    border-radius:5px;
    font-size: 16px;
    padding:6px 0px 6px 5px;
   }
   .part{
    display: flex;
    justify-content: space-between;
    align-items:center;
    margin-left: 165px;
    padding: 0px;
    margin-top: 10px;
   }
   .check-box-btn{
    display: flex;
    align-items:flex-start;
    gap: 10px;
    padding-left: 10px;
   }
   .btn{
    width: 100%;
    padding-left: 10px;
    
   }
.btnn{  
      font-weight: 600;
    width: 100%;
    padding: 10px 8px;
    border-radius: 40px;
    border: none;
    background-color: #1580d5;
    font-size: 20px;
    color:#ffffff;
    margin: 15px 0px 10px 0px;
}
    .form-control{
    border:1px solid #d6d6d6;
    padding:10px;
    border-radius: 5px;
    }
    .close {
        color: #ffffff;
        font-size: 28px;
        font-weight: bold;
      } 
      
      .close:hover,
      .close:focus {
        color: #fff;
        text-decoration: none;
        cursor: pointer;
      } 
      .form-groups.form-flex-popup {
        display: block;
} 
     @media screen and (max-width: 460px) {

 .form-part .form-flex-popup label {
    max-width: 200px;
    font-size: 14px;
    font-weight: 500;
    color: #535354;
     text-align: left; 
}
.part {
    /* display: flex; */
    justify-content: space-between;
    align-items: center;
    margin-left: 10px;}
    .popup-heading h2 {
    font-size: 20px; margin-top: 0px;} 
.popup-heading p {
    font-size: 14px; 
}
.form-part {
    
    padding: 18px 50px 18px 25px;
} .form-part .form-flex-popup .input-popup-field input{
    padding: 3px 0px 3px 5px;
}
.form-groups.form-flex-popup {
    gap: 0px;
    width: 100%;    display: block;
} 
.row.formBack.part.form-part {
    padding: 0px;
     margin-top: 0px;
} 
p.btnRefresh img {
    height: 30px;
} .check-box-btn p {
    font-size: 13px;
} button#webtoLeadFormOness2, button#webtoLeadFormOness2 span {
    font-size: 16px;
}
.form-col {padding:0px;}
} 
        .intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-2,.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-3,.iti{
            width: 100%  !important;
         color: #000 !important;
        }
        
          .error {
            color: red;
            margin-left: 5px;
        }

        label.error {
            display: inline;
        } div#myBtn {
         background: #da5e46;
}
div.btndesign {
    background: #da5e46;
    text-align: center;
    width: 100%;
    margin: 0 auto;
    display: block;
    max-width: 300px !important;
    max-width: 215px;
}
div.btndesign .elementor-button span {
   font-size: 18px !important;
    font-weight: 600;
}
div#myBtn span.elementor-button-text {
    font-size: 18px !important;
    font-weight: 600 !important;
}
.form-ftr .para {
    display: flex;
    justify-content: space-between;
}
.form-ftr .para label {
    width: 96%;
    
}
#formFirstLeads2 {
    max-width: 500px;
    margin: auto;
}
#formFirstLeads2 label {
    text-align: left;
    width:140px;
    
}
#formFirstLeads2 .form-ftr .para label {
       width: unset;
    margin-left: 10px;
    line-height: 15px;
    cursor:pointer;
}
   .intl-tel-input {
      width: 100%;
  }
  .intl-tel-input .selected-flag {
      z-index: 4;
  }
  .intl-tel-input .country-list {
      z-index: 5;
  } span.country-name {
    color: #000;
}
    </style>
    <?php
}
add_shortcode("usecaseForm", "usecaseFxnForm");




// deepak code
function commonfrxform()
{
    $obj_id = get_queried_object_id();
    $current_url = get_permalink($obj_id);
    ?>
    
    <style>
    .intl-tel-input {
      width: 100%;
  }
  .intl-tel-input .selected-flag {
      z-index: 4;
  }
  .intl-tel-input .country-list {
      z-index: 5;
  } span.country-name {
    color: #000;
}
div#termcon,div#termcon a{
    font-size:14px !important;
  }
  @media(max-width:767px){
  .mob-3{
    width:100% !important;
  }
    .mob-2{
    width:100% !important;
  }
  .mob-6{
      width:100% !important;
    }
        .form-part {
         margin: auto;
        text-align: center;
    }
  }
</style>

<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.2.0/css/all.css">

<link rel="stylesheet" href="https://static.fontawesome.com/css/fontawesome-app.css">
<!--  ----------------------------------------------------------------------  -->
<!--  NOTE: Please add the following <META> element to your page <HEAD>.      -->
   <!--  If necessary, please modify the charset parameter to specify the        -->
   <!--  character set of your HTML page.                                        -->
   <!--  ----------------------------------------------------------------------  -->

   <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
   

   <!--  ----------------------------------------------------------------------  -->
   <!--  NOTE: Please add the following <FORM> element to your page.             -->
       <!--  ----------------------------------------------------------------------  -->
       <style>  

          .error {
            color: red;
            margin-left: 5px;
        }

        label.error {
            display: inline;
        } div#myBtn {
         background: #da5e46;
}
.para small {
    padding-bottom: 20px;
}
.designmodal {
    /*padding-top: 180px !important;*/
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100%;
}
div#myModal {
    overflow: hidden;
}
    </style>

    <div class="gem-button gem-button-size-small gem-button-style-flat gem-button-text-weight-normal myBtns" style="border-radius: 3px;background-color: #00bcd4;color: #ffffff;cursor: pointer;display:block;max-width: 340px;
    margin: 0 auto;" onmouseleave="this.style.backgroundColor='#00bcd4';this.style.color='#ffffff';" onmouseenter="this.style.color='#ffffff';"  target="_blank" data-lf-fd-inspected-kn9eq4rmqql7rlvp="true" id="myBtn">Download Here</div>
     <div id="myModal" class="modals">
        <div class="designmodal">
            <div>
        <div style="max-width: 700px;
    margin: 0 auto;
    width: 100%;
    text-align: right;">   
             <span class="close">&times;</span>
        </div>
    
        <div class="modal-content">
            
            <div class="modalss">
                <div class="popup-heading">
                    <h2>Grab this Valuable Resource Today!
                    </h2>
                    <p>Please fill out all the fields to download.

</p>
                </div>
                <div class="form-part">
                    <form id="formFirstLeads2">
    <input type="hidden" name="encoding" value="UTF-8" />
    <input type=hidden name="oid" value="00D61000000cnSO">
    <!-- different pdfs for pages -->
    <?php 
   
   if(is_page(59132)){ ?>
   <input type=hidden name="retURL" value="<?php echo get_site_url(); ?>/wp-content/uploads/2018/12/360-Email-Sync-Guide.pdf">
   <?php }
   else if(is_page(59139)){ ?>
     <input type="hidden" name="retURL" value="<?php echo get_site_url(); ?>/wp-content/uploads/2018/12/File-Sync App-Guide.pdf">
   <?php } 
   else if(is_page(67353)){ ?>
     <input type="hidden" name="retURL" value="<?php echo get_site_url(); ?>/wp-content/uploads/2018/12/File-Sync App-Guide.pdf">
   <?php }
   else if(is_page(59141)){ ?>
     <input type="hidden" name="retURL" value="<?php echo get_site_url(); ?>/wp-content/uploads/2018/12/Mass-Email-Guide.pdf">
   <?php }
   else if(is_page(59154)){ ?>
      <input type="hidden" name="retURL" value="<?php echo get_site_url(); ?>/wp-content/uploads/2018/12/Open-API-Guide-Integration.pdf">
   <?php }

else if(is_page(25315)){ ?>
 <input type="hidden" name="retURL" value="<?php echo get_site_url(); ?>/wp-content/uploads/2018/12/360-SMS-Configuration-Guide-1.pdf">
<?php }
 else if(is_page(25345)){ ?>
   <input type="hidden" name="retURL" value="<?php echo get_site_url(); ?>/wp-content/uploads/2018/360-SMS-Sending-SMS-through-Process-Builder.pdf">
<?php }
  else if(is_page(25321)){ ?>
   <input type="hidden" name="retURL" value="<?php echo get_site_url(); ?>/wp-content/uploads/2018/12/360-SMS-Batch-Texting-1.pdf">
<?php }
  else if(is_page(25336)){ ?>
   <input type="hidden" name="retURL" value="<?php echo get_site_url(); ?>/wp-content/uploads/2018/12/360-SMS-Email_to_SMS-Configuration-1.pdf">
<?php }


    else if(is_page(25351)){ ?>
         <input type="hidden" name="retURL" value="<?php echo get_site_url(); ?>/wp-content/uploads/2018/12/360-SMS-Pardot-Integration.pdf">

   <?php }
     else if(is_page(59372)){ ?>
      <input type="hidden" name="retURL" value="<?php echo get_site_url(); ?>/wp-content/uploads/2018/12/360_Kakao_Talk_User_Guide.pdf">

<?php }
  else if(is_page(59374)){ ?>
    <input type="hidden" name="retURL" value="<?php echo get_site_url(); ?>/wp-content/uploads/2018/12/360_Viber_Channel_Complete_guide.pdf">

<?php }
  else if(is_page(59376)){ ?>
    <input type="hidden" name="retURL" value="<?php echo get_site_url(); ?>/wp-content/uploads/2018/12/360_SMS_Facebook.pdf">

<?php }
   else { ?>
         <input type="hidden" name="retURL" value="<?php echo get_site_url(); ?>/wp-content/uploads/2018/12/ChatGPT_with_360_SMS_User_Guide.pdf">

   <?php }?>
    <!-- different pdf for pages end -->
     <div class="form-flex-popup">
        <label for="Name">Name:</label>
        <div class="input-popup-field">
                <div class="d-flex" style="display:flex;">
              <div class="form-col width-50">
                 <input type="text" id="first_name2" placeholder="First Name" maxlength="40" name="first_name" >
            </div>
            <div class="form-col width-50" id="last_name_p">
          <input type="text" class="form-col width-50" id="last_name2" placeholder="Last Name" maxlength="40" name="last_name" >
        <span id="last_name_error2" style="color:red;"></span>
            </div>
        </div>
    </div>
    </div>

 
<div class="d-flex d-flexform">
    <link href="<?php echo site_url(); ?>/wp-content/themes/thegem-child/css/flag-tel.css" rel="stylesheet" media="screen">
    <script src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/phoneDesign/js/jquery.min.js"></script>
   <script src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/phoneDesign/js/intlTelInput.js"></script>
   <script src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/phoneDesign/js/intlTelInput.min.js"></script>
   <script src="<?php echo site_url(); ?>/wp-content/themes/thegem-child/js/phoneDesign/js/utils.js"></script> 

 <script type="text/javascript">
        $(function () {
                var code = "+1"; // Assigning value from model.
            $('#phone_code2').val(code);
            $('#phone_code2').intlTelInput({
            allowExtensions: true,
                autoHideDialCode: true,
                autoPlaceholder: "ON",
                dropdownContainer: document.body,
                formatOnDisplay: true,
                hiddenInput: "full_number",
                initialCountry: "auto",
                nationalMode: true,
                placeholderNumberType: "MOBILE",
                preferredCountries: ['US','GB' ,'AU' ,'CA' ,'IN'],
                separateDialCode: true
            });
            $('#btnSubmit2').on('click', function () {
                var code = $("#phone_code2").intlTelInput("getSelectedCountryData").dialCode;
                var phoneNumber = $('#phone_code2').val();
                var name = $("#phone_code2").intlTelInput("getSelectedCountryData").name;
                alert('Country Code : ' + code + '\nPhone Number : ' + phoneNumber + '\nCountry Name : ' + name);
            });
        });
    function verify_phone_contactnewsydney(phone){ 
    var phone = jQuery('input#phone_code2').val();
    var cleanPhone = phone.replace(/^0+/, '');
    console.log('phone: ' + phone + ' length: ' + cleanPhone.length);
    if(cleanPhone != "" && cleanPhone.length < 7){
        jQuery('#phone_error2').html('Invalid Number');
    } else {
        jQuery('#phone_error2').html('');
    }
}
    </script>
    <div class="form-flex-popup" style="width: 100%;">
    <label for="Name">Phone No:</label>
    <div class="input-popup-field">
       <input oninput="this.value = this.value.replace(/[^0-9]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Phone" id="phone_code2" name="phone" onblur="verify_phone_contactnewsydney(this.value)" type="tel" class="form-control wpcf7-text focus-on phnnumb input" style="">
    <span id="phone_error2" style="color:red;"></span> <span id="country_error2" style="color:red;"></span>
    <span class="ldrphone2 text-center" style="display: none;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
    </div>
    </div>
</div>

<!--country deepak  9    -->
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/country-picker-flags/build/css/countrySelect.css">
    	<style>
    	.country-select.inside{
    	    width:100%;
    	}
        .country-select .country-list .country {
            padding: 0px 7px;
        }
        .selected-flag {
            background: #f2f2f2;
        }
        input#country_selector {
     text-indent: 5px;
    width: 100%;
    background: #ffffff;
    height: 32px;
    border: 1px solid #d6d6d6;
    font-size: 16px;
}
    
        .country-select.inside {
            width: 100%;
        }
        fieldset.form-col {
          width: calc(100% - 10px);
          background-color: #ffffff;
          border: 1px solid #d6d6d6;
          border-radius: 5px;
          font-size: 16px;
          padding: 6px 0px 6px 5px;
      }
      .selected-flag {
    height: 30px !important;
}
p.country {
   margin:0;
}

	</style>
             <div class="form-flex-popup" style="width: 100%;">
             <label for="Name">Country</label>
            <fieldset class="form-col" id="" style="padding: 0px;border: none;margin:0 0 0em;">
                <input id="country_selector" type="text" name="">
                  <span id="companydev_error" style="color:red;"></span>

				<label for="country_selector" style="display:none;">Select a country here...</label>
				<div class="form-item" style="display:none;">
        				<input type="text" id="country_selector_code" name="Country__c" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
        				<label for="country_selector_code">...and the selected country code will be updated here</label>
        			</div>
        			<button type="submit" style="display:none;">Submit</button>
    		</fieldset> 

      </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

              <script src="https://www.jqueryscript.net/demo/country-picker-flags/build/js/countrySelect.js"></script>    
              <script>
    			jQuery("#country_selector").countrySelect({
    				// defaultCountry: "jp",
    				// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    				// responsiveDropdown: true,
    				preferredCountries: ['us', 'gb', 'in', 'ca']
    			});
    		</script>
    		
      <!--country end deepak      -->
<div class="form-flex-popup">
                            <label for="Name">Work Email:</label>
                            <div class="input-popup-field">
                               <input id="email2" maxlength="80" name="email" size="20" class="form-control" placeholder="Email" onblur="verify_emailsydney(this.value);">
    <span id="email_error2" style="color:red;"></span>
     <span class="ldremailchk text-center" style="display: none "><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
                            </div>
                        </div>
<div class="row formBack part1 form-part">
    <div class="col-xs-3 mob-3 col-sm-4 mt-4 ">
        <!--<label class="checkbox-inline">Verification Code<span class="astrix">*</span></label>-->
        <?php
     $pid = get_queried_object_id();        
        ?>
        <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['current_captcha_form_id'] = $pid;
        ?>
        <img alt="captcha" 
             src="<?php echo get_site_url(); ?>/wp-content/themes/thegem-child/cap2.php" 
             id="captchaImg_<?php echo $pid; ?>"
             class="codeImg" style="width:100%;height: 44px;padding-left: 5px;">                               <?php //session_start();  
                                    //echo "<pre>"; print_r($_SESSION); 
                                        
                                        ?>
                                        
                                    </div>
                                   
                                        <input type="hidden" name="pageid" id="pageid2"  value="<?php echo $pid;?>">
                                    
                                     
                                    <div class="col-xs-3 mob-2 col-sm-2 mt-4">
                                        
                                        <p  class="btnRefresh2" style="cursor: grab;"><img alt="refresh-icon" src="<?php echo get_site_url();?>/wp-content/uploads/2022/04/free-refresh-icon-3104-thumb-1.png" style="height: 40px;"></p>
                                    </div>
                                    <div class="col-xs-6 mob-6 col-sm-6 mt-4 input-popup-field">
                                        <div class="form-groups form-flex-popup">
                                            <input type="text" name="vercode" id="vercode2" class="form-controls" placeholder="Enter value" style="width: calc(100% - 10px);
    background-color: #ffffff;
    border: 1px solid #d6d6d6;
    border-radius: 5px;
    font-size: 16px;
    padding: 6px 0px 6px 5px;">
                                            <span id="vercode_error2" style="color:red;"></span>
                                            <input   maxlength="40" name="company" value="360dc" type="hidden" size="20" type="text" /><br>
                                        </div>
                                    </div> </div>
<div class="part1 form-ftr"> 
                         <div class="btn1">
                       <div class="para">
                             <input type="checkbox" id="00N3k00000JB5bD" name="00N3k00000JB5bD" value="1">
                             <label for="00N3k00000JB5bD"><small> Yes, I would like to receive marketing communication about 360 Degree Cloud’d Saleforce services, products, and events.I can unsubscribe at any time.</small></label>

                            </div>
                         <button class="btnn" id="webtoLeadFormOness2">Download Now  </button> 
                           <div class="para">
                               <small style="margin-bottom: 0px;">By registering, you confirm that you agree to the processing of your personal data by 360 Degree Cloud as described in the <a style="font-weight: bold; color:#f8957e; font-size:100%;" href="/privacy-policies/" target="_blank"> Privacy Statement</a>.</small>
                            </div>
                                           
                    </div>
                </div> 

                                    <div class="d-flexs" style="display:none !important;">
                                        <div class="form-col" style="width: 100%;">
                                            <div class="form-group"> 
 <input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
 
  <select class="form-select" style="width: 100%;"id="lead_source2" name="lead_source" style="display:none !important;">
  <?php
    if(is_page(59376)){
        ?>
		 <option value="SEO">SEO</option>   
    <?php
    } else if(is_page(59374)){
      ?>  
      <option value="SEO">SEO</option>
    <?php } 
     else if(is_page(59372)){
      ?>  
      <option value="SEO">SEO</option>
    <?php }     
    else{
    ?>  
    <option value="SEO">SEO</option>
  <?php }
   ?>
 </select>
                          </div>
                      </div>
                  </div>
                  
 <input type="hidden" 
       id="lead_source_sub" 
       name="Sub_Lead_Source__c" 
       value="360SMS-Contact Us" />

<input type="hidden" 
       id="Lead_Source_URL__c" 
       name="Lead_Source_URL__c" 
       value="<?php echo esc_url( get_permalink() ); ?>" />
    
<input type="hidden" id="ever" name="email_status" value="0">
  <input type="hidden" id="pver" name="phone_status" value="0">
<span id="all_error2" style="color:red;"></span>
        <div class="d-flex">
            <div class="form-col" style="width: 100%;">
                <div class="submit-wrap text-center" style="width: 100%;">
                    
                </div>
            </div>
        </div>
    </form>   
                  
                </div>
                
              
            </div>
        </div>
    </div>
</div>
</div>
<script>

jQuery(document).ready(function(){
  jQuery(".myBtns").click(function(){
    jQuery("body").css("overflow", "hidden");
    jQuery("#desktopheader").css("display", "none");
    jQuery("#myModal").show();
  });
  jQuery(".close").click(function(){
     jQuery("#myModal").hide();
     jQuery("body").css("overflow", "visible");
     jQuery("#desktopheader").css("display", "block");
  });
});
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementsByClassName("myBtns")[0];


// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    //alert('clicked');
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  //jQuery(".form-flex-popup span").hide();
  
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none"; 
  }
}
</script>
<script>       
function  verify_emailsydney(email){
     
        var pageid = jQuery("input#pageid2").val();
              if(email != ''){
        if(email.indexOf("@", 0) < 0){
         jQuery('#email_error2').html('Invalid Email');
         
         
       }
       else if(email.indexOf(".", 0) < 0){
        jQuery('#email_error2').html('Invalid Email');
        
        
      }
      
       else if (myVars.blockedDomains.includes(email.split('@')[1])) {
        jQuery('#email2_popup_ptt_error').html('Please enter your business email address. This form does not accept addresses from public/free domains.');
    } 
       
       
       else {
        jQuery('#email_error2').html(' ');
        // jQuery('span.ldremailchk').show();
        // var email_check = email.trim();
        
        // var baseURL =  location.protocol + '//' + document.location.hostname + '/wp-content/themes/thegem-child/verifyEmail.php?id='+ pageid;
        // jQuery.ajax({
        //   crossDomain: true,
        //   url: baseURL,
        //   method: 'POST',
        //   data: "email="+email_check,
        //   success: function(response) {
        //    jQuery('span.ldremailchk').hide();
        //    res = JSON.parse(response);
        //    if(res.status == false){
             
        //     jQuery('#email_error2').html('Invalid Email');
        //             //   jQuery('#email2').val('');
        //             jQuery('#ever').val('0');
        //           }
        //           else if(res.status == true){
        //            jQuery('#email_error2').html('<span style="color:green">Valid Email</span>');                                 
        //            jQuery('#ever').val('1'); 
        //          }
        //        }
        //      });
      }
    }else{
    jQuery('#email_error2').html(' ');  
       jQuery('#email_error2').html('Email Required');  
  }
    }
// jQuery('select#phone_code2').on('change', function() {
//    jQuery('span#phone_error').html(' ');
//        //jQuery("input#phone").val('');
//        var selval = jQuery('select#phone_code2').val();
//        var phone = jQuery("input#phone").val();
//        if(selval == ''){
//         console.log('1');
//       //alert('sdasdasd');
//       jQuery('span#country_error').html('Please select country code');
//   }else if( selval == '' && phone.length < 10){
//       jQuery('#phone_error').html('');   
//       jQuery('span#country_error').html(' ');
//       jQuery('span#country_error').html('Invalid Number');
//   } else if( selval != '' && phone.length < 10 && phone != ""){
//    console.log('2');
//    jQuery('#phone_error').html('');   
//    jQuery('span#country_error').html(' ');
//    jQuery('span#country_error').html('Invalid Number');
// }else{
//     console.log('no');

//     jQuery('span#country_error2').html('');
//     if(phone!= '' && selval!= '' && phone.length >= 10){
//       console.log('3');
//       jQuery('span.ldrphone2').show();
//       var phone_check = phone.trim();
//       var ever = jQuery('#ever').val();
//       var phone_code2 = jQuery('#phone_code2').val();
//       var pageid = jQuery("input#pageid").val();
//       var baseURL =  location.protocol + '//' + document.location.hostname + '/wp-content/themes/thegem-child/verifyPhone.php?id='+pageid;
//       jQuery.ajax({
//         crossDomain: true,
//         url: baseURL,
//         method: 'POST',
//         data: {"phone_code2":phone_code2,"phone":phone_check},
//         success: function(response) {
//            jQuery('span.ldrphone2').hide();
//            res = JSON.parse(response);
//            if(res.status == false){ 
//              jQuery('#phone_error2').html(' ');   
//              jQuery('span#country_error2').html('');
//              jQuery('#phone_error2').html('Invalid Number');

//              if(ever == "1" || ever == 1 ){  
//                          // alert(ever);
//                        }else{ //alert(ever);
//                         jQuery('#phone_error2').html('');   
//                         jQuery('span#country_error2').html('');
//                         jQuery('#phone_error2').html('Invalid Number'); 
                        
//                         //   jQuery('#phone').val('');  
//                     }
//                 }
//                 else if(res.status == true){
//                  jQuery('span#country_error2').html('');
//                  jQuery('#phone_error2').html(' ');
//                  jQuery('#phone_error2').html('<span style="color:green">Valid Number</span>');
//                  jQuery('#pver').val('1'); 
//              }
//          }
//      });
//   }
// }
// });
jQuery("input#phone2").keypress(function(){
    var selval = jQuery('select#phone_code2').val();
    var phone = jQuery("input#phone2").val();
    if(selval == ''){      
      jQuery('span#country_error2').html(' ');
      jQuery('span#country_error2').html('Please select country code');
      jQuery("input#phone2").val(' ');
  } else{     
   if(phone!= '' && selval!= ''){
      jQuery('span#country_error2').html('');
  }
}

});

jQuery(document).ready(function () {
    jQuery("p.btnRefresh_bottom_other").click(function(){
    jQuery("img.codeImg").attr('src', '<?php echo site_url(); ?>/wp-content/themes/thegem-child/cap2.php?nocache=' + Math.random());
});
});
    jQuery("#webtoLeadFormOness2").click(function(e){
     e.preventDefault();
      //alert('Hi');
     var ids = ['last_name2','email2','vercode2'];
     
     var last_name = jQuery('#last_name2').val();
     var email = jQuery('#email2').val();
     var vercode = jQuery('#vercode2').val();
     //var description = jQuery('#description').val();
     var phone = jQuery('#phone2').val();
     removeValidations(ids);
     if(last_name == "" || email == "" ||  vercode == "" ){
        
        if(last_name == ""){
            jQuery("#last_name_error2").html('Required Field');
        }
        if(email == ""){
            jQuery("#email_error2").html('Required Field');
        }       
        if(vercode == ""){
            jQuery("#vercode_error2").html('Required Field');
        }
        
        return false;   
    }
    else if(email.indexOf("@", 0) < 0){
     jQuery('#email_error2').html('Invalid Email');
     jQuery('#email2').focus();
     return false;
 }
 else if(email.indexOf(".", 0) < 0){
    jQuery('#email_error2').html('Invalid Email');
    jQuery('#email2').focus();
    return false;
}
else if(jQuery('span#phone_error2').text() == 'Invalid Number' && jQuery('#phone_code2').val() != ''){
    return false;
}

  else if (myVars.blockedDomains.includes(email.split('@')[1])) {
        jQuery('#email2_popup_ptt_error').html('Please enter your business email address. This form does not accept addresses from public/free domains.');
    } 
else{
    console.log('checksss');
     $('.post_outer').addClass('show');
            // var baseURL =  location.protocol + '//' + document.location.hostname + '/wp-content/themes/thegem-child/vwebtolead.php';
            var baseURL =  location.protocol + '//' + document.location.hostname + '/new-sms/wp-content/themes/thegem-child/server-check.php'; 
            console.log(baseURL);
            var form = jQuery('#formFirstLeads2');
            jQuery.ajax({
              url: baseURL,
              method: 'post',
              data: form.serialize(),
              success: function(response) {
                         $('.post_outer').removeClass('show');

                 var res = JSON.parse(response); 
               console.log(res.st);
                 if(res.st === parseInt(1)){
                    if (res["user-guide"] === true) {
                        window.open("<?php echo esc_url(get_field('user_guide_pdf')); ?>", "_blank");
                    return;
                    }
                    else {
                        void(window.open(res.url, '_blank'));
                        window.location.reload(true);
                    }
                    
                }else if(res.st === parseInt(2)){
               console.log('vercode_error2');
                  jQuery("#vercode_error2").html(res.msg);
                  return false;   
              }else if(res.st === parseInt(3)){
                  jQuery("#last_name2_error").html(res.msg);
                  return false;   
              }else if(res.st === parseInt(4)){
                  jQuery("#email_error2").html(res.msg);
                  return false;   
              }else if(res.st === parseInt(5)){
                  jQuery("#company_error").html(res.msg);
                  return false;   
             }else if(res.st === parseInt(6)){
                      jQuery("#phone_error2").html(res.msg);
                      return false;   
                    }
                    else if(res.st === parseInt(8)){
                      jQuery("#all_error2").html(res.msg);
                      return false;   
                    }
                    else if(res.st === parseInt(0)){
                      jQuery("#all_error2").html(res.msg);
                      return false;   
                    }
                    else{
                         jQuery("#all_error2").html("Something Went Wrong Please Try Again Later");
                      return false; 
                       
                    }
            jQuery("div#myModal").hide(); 
             
         }
     });  
        }
        
        
    });



function removeValidations(ids) {
 jQuery(ids).each(function(index, key) {
    jQuery("#" + key).keyup(function() {
      jQuery("#" + key + "_error").html('');
  });
});
}

</script>
<style>

html {
  scroll-behavior: smooth;
}

.cursorpointer img{
    cursor:pointer;
}
button#myBtn {
    color: #fff; 
    background-color: #04C1DA; 
    border: none; 
   border-radius: 6px; 
    font-weight: bold; 
    font-size: 13px; 
    transition: all .3s; text-align:center; padding: 15px 30px;
} 
button#myBtn:hover{ 
    transform: scale(1.1); 
} 
 .modals{    
  
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
  z-index: 999; /* Sit on top */
  padding-top: 30px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
   }
   .modal{
    width: 700px;
    border-radius: 5px;
   }
   .modal-content {
    background-color: #fefefe;

    max-width: 700px;
    margin: 0 auto;
  }
   .popup-heading{
    background-color: #fafafa;
   }
   .popup-heading{
    text-align: center;
    padding: 15px 22px 10px 22px;
    border-radius: 5px;
   
   }
   .popup-heading h2{
    font-size: 32px;
    font-weight: bold;
    text-transform:initial !important;
    margin: 0px;
    text-align: center;
    color: #1580d5;
   }
   .popup-heading p{
    font-size: 18px;
    margin-bottom:0px;
   }
   .form-part{
    background-color:#edf4f8;
    padding: 5px 50px 0px 25px;
   }
   .form-flex-popup {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 15px;
    padding: 8px 0;
   }
   .form-part .form-flex-popup label{
    width: 225px;
    font-size: 17px;
    font-weight: 600;
    color:#535354;
    text-align: right;
}
   .form-part .form-flex-popup .input-popup-field{
    width: 100%;
   }
   .form-part .form-flex-popup .input-popup-field input{
    width: calc(100% - 10px);
    background-color: #ffffff;
    border:1px solid #d6d6d6;
    border-radius:5px;
    font-size: 16px;
    padding:6px 0px 6px 5px;
   }
   .part{
    display: flex;
    justify-content: space-between;
    align-items:center;
    margin-left: 165px;
    padding: 0px;
    margin-top: 10px;
   }
   .check-box-btn{
    display: flex;
    align-items:flex-start;
    gap: 10px;
    padding-left: 10px;
   }
   .btn{
    width: 100%;
    padding-left: 10px;
    
   }
.btnn{  
      font-weight: 600;
    width: 100%;
    padding: 10px 8px;
    border-radius: 40px;
    border: none;
    background-color: #1580d5;
    font-size: 20px;
    color:#ffffff;
    margin: 15px 0px 10px 0px;
}
    .form-control{
    border:1px solid #d6d6d6;
    padding:10px;
    border-radius: 5px;
    }
    .close {
        color: #ffffff;
        font-size: 28px;
        font-weight: bold;
      } 
      
      .close:hover,
      .close:focus {
        color: #fff;
        text-decoration: none;
        cursor: pointer;
      } 
      .form-groups.form-flex-popup {
        display: block;
} 
     @media screen and (max-width: 460px) {

 .form-part .form-flex-popup label {
    max-width: 200px;
    font-size: 14px;
    font-weight: 500;
    color: #535354;
     text-align: left; 
}
.part {
    /* display: flex; */
    justify-content: space-between;
    align-items: center;
    margin-left: 10px;}
    .popup-heading h2 {
    font-size: 20px; margin-top: 0px;} 
.popup-heading p {
    font-size: 14px; 
}
.form-part {
    
    padding: 18px 50px 18px 25px;
} .form-part .form-flex-popup .input-popup-field input{
    padding: 3px 0px 3px 5px;
}
.form-groups.form-flex-popup {
    gap: 0px;
    width: 100%;    display: block;
} 
.row.formBack.part.form-part {
    padding: 0px;
     margin-top: 0px;
} 
p.btnRefresh img {
    height: 30px;
} .check-box-btn p {
    font-size: 13px;
} button#webtoLeadFormOness2, button#webtoLeadFormOness2 span {
    font-size: 16px;
}
.form-col {padding:0px;}
} 
        .intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-2,.intl-tel-input.allow-dropdown.separate-dial-code.iti-sdc-3,.iti{
            width: 100%  !important;
         color: #000 !important;
        }
        
          .error {
            color: red;
            margin-left: 5px;
        }

        label.error {
            display: inline;
        } div#myBtn {
         background: #da5e46;
}
div.btndesign {
    background: #da5e46;
    text-align: center;
    width: 100%;
    margin: 0 auto;
    display: block;
    max-width: 300px !important;
    max-width: 215px;
}
div.btndesign .elementor-button span {
   font-size: 18px !important;
    font-weight: 600;
}
div#myBtn span.elementor-button-text {
    font-size: 18px !important;
    font-weight: 600 !important;
}
.form-ftr .para {
    display: flex;
    justify-content: space-between;
}
.form-ftr .para label {
    width: 96%;
    
}
#formFirstLeads2 {
    max-width: 500px;
    margin: auto;
}
#formFirstLeads2 label {
    text-align: left;
    width:140px;
    
}
#formFirstLeads2 .form-ftr .para label {
       width: unset;
    margin-left: 10px;
    line-height: 15px;
    cursor:pointer;
}
   .intl-tel-input {
      width: 100%;
  }
  .intl-tel-input .selected-flag {
      z-index: 4;
  }
  .intl-tel-input .country-list {
      z-index: 5;
  } span.country-name {
    color: #000;
}
    </style>
    <?php
}
add_shortcode("commonform", "commonfrxform");






/*----Start Second Page----*/
function referralProgram_other_new_page(){
  ob_start();
  $obj_id = get_queried_object_id();
  $current_url = get_permalink( $obj_id ); 
  include('fasterForm-shortcodeother.php');
?>
<style>
  button#referralSubmissionNewother {
  font-size: 21px;
  font-style: normal;
  font-family: 'Roboto';
  background-color: #da5e46;
  border-radius: 5px;
  color: #FFF;
  border: 1px solid #FFF;
  width: 100%;
   margin: 10px 0px;
  
}
.error , .error_em{
  color: red;
  font-size: 14px;
}
#refFormNewone_other input{
  width: 100%;
  border: 2px solid #efefef;
  margin: 10px 0px;
  color: #000;
  /*font-size: 21px;*/
  border-radius: 3px;
}
button#referralSubmissionNewother:hover{
  color: #69A84F;
  background-color: #FFFFFF;
  border-color: #69A84F;
}

</style>
<form id="refFormNewone_other" class="refFormNewone_other_page">
  <input type="hidden" name="encoding" value="UTF-8" />
  <input type="hidden" name="Form2" value="Form2" />
  <input type="hidden" id="ever2" name="email_status" value="0">
  <input type="hidden" id="pver2" name="phone_status" value="0">
  <input type="hidden" name="Lead_Source_URL" value="<?php echo get_permalink();?>">
	
    <input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
    
    <input type="hidden" value="SMS_LP_4XGrowth" id="lead_source" name="lead_source" />
  

  <input type=hidden name="retURL" value="">

<input  id="last_name2_other" maxlength="80" name="last_name" size="20" type="text" class="form-control"placeholder="Name" />
  <span id="last_name2_other_error" style="color:red;"></span>
  
  <input id="email2_other" maxlength="80" name="email" size="20" class="form-control" placeholder="Email" onblur="verify_email2_other(this.value);">
  <span id="email2_other_error" style="color:red;"></span>
  <span class="ldremailchk2 text-center" style="display: none "><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
   
  <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Phone Number" id="phone_code2_other" name="phone" onblur="verify_phone_contactnews2_other(this.value)" type="tel" class="form-control wpcf7-text focus-on phnnumb" style="">
  <span id="phone2_other_error" style="color:red;"></span> <span id="country_error" style="color:red;"></span>
  <span class="ldrphone2_other text-center" style="display: none;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
  
<div class="row formBack">
  <div class="col-xs-3 mob-3 col-sm-4 mt-4 codeimgdevp" style="margin-top: 1.3rem !important;padding:0px 7px;">
      <?php
        
        $pid = get_queried_object_id();
        $pid .= '_b';
        //echo '<pre>';
        //print_r($pid);
      ?>
            

     <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['current_captcha_form_id'] = $pid;
        ?>
        <img alt="captcha" 
             src="<?php echo get_site_url(); ?>/wp-content/themes/thegem-child/cap2.php" 
             id="captchaImg_<?php echo $pid; ?>"
             class="codeImg" style="width:100%;height: 44px;padding-left: 5px;">
                                    <?php //session_start();  
                                            //echo "<pre>"; print_r($_SESSION); 
                                    ?>
                                  </div>
                                   <input type="hidden" name="pageid" id="pageid2"  value="<?php echo $pid;?>">
                                  <div class="col-xs-3 mob-2 col-sm-2 mt-4" style="margin-top: 1.3rem !important;padding:0px 11px;" >
  <p  class="btnRefresh_bottom_other" style="cursor: grab;"><img src="<?php echo get_site_url();?>/wp-content/uploads/2022/04/free-refresh-icon-3104-thumb-1.png" style="width: 200px;
  height: 40px;" alt="refreshImg"></p>
                                  </div>
                                  <div class="col-xs-6 mob-6 col-sm-6 mt-4">
                                      <div class="form-group ">
                                          <input type="text" name="vercode" id="vercode2_other" class="form-control" placeholder="Enter value">
                                          <span id="vercode2_other_error" style="color:red;"></span>
                                          <input   maxlength="40" name="company" value="360dc" type="hidden" size="20" type="text" /><br>
                                      </div>
                                  </div> </div>


<span id="all_error" style="color:red;"></span>
<button type="submit" id="referralSubmissionNewother"><?php echo esc_html__('Enjoy 7 Days FREE TRIAL!', 'degree'); ?></button>
</form>
<?php 
return ob_get_clean();
}
add_shortcode('referralProgram_new_page_other','referralProgram_other_new_page');
/*----End Second Page----*/


/*----Start New Design Forms----*/


function referralProgram_footer_new_page($atts){
    $atts = shortcode_atts(
      array(
        'button_label' => 'Connect with a VA',
      ),
      $atts,
      'referralProgram_new_page'
    );
    ob_start();
    $obj_id = get_queried_object_id();
    $current_url = get_permalink( $obj_id );
    include('fasterForm-shortcode-virtual-form-one.php');
 ?>

<style>
  button#referralSubmission_vu {
  font-size: 21px;
  font-style: normal;
  font-family: 'Roboto';
  background-color: #da5e46;
  border-radius: 5px;
  color: #FFF;
  border: 1px solid #FFF;
  width: 100%;
   margin: 10px 0px;
  
}
.error , .error_em{
  color: red;
  font-size: 14px;
}
#virtual_uniqueue input{
  width: 100%;
  border: 2px solid #efefef;
  margin: 10px 0px;
  color: #000;
  /*font-size: 21px;*/
  border-radius: 3px;
}
button#referralSubmission_vu:hover{
  color: #69A84F;
  background-color: #FFFFFF;
  border-color: #69A84F;
}

	/* Define the keyframes for the blink effect */
@keyframes blink {
  0% { opacity: 1; }
  50% { opacity: 0; }
  100% { opacity: 1; }
}

/* Apply the blink animation to an element */
.blinking-text {
  animation: blink 1s step-start infinite;
	transition: all linear 0.5s;
}

	
</style>
<script>
jQuery(document).ready(function(){
   $('input#phone_code_vu').val('');
});
        
</script>
<form id="virtual_uniqueue" class="virtual_uniqueue_page">
  <input type="hidden" name="encoding" value="UTF-8" />
  <input type="hidden" name="Form2" value="Form2" />
  <input type="hidden" id="ever1" name="email_status" value="0">
  <input type="hidden" id="pver1" name="phone_status" value="0">
  <input type="hidden" name="Lead_Source_URL" value="<?php echo get_permalink();?>">

<input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">

    <input type="hidden" value="SMS_LP_4XGrowth" id="lead_source" name="lead_source" />


  <input type=hidden name="retURL" value="">

<input  id="last_name_vu" maxlength="80" name="last_name" size="20" type="text" class="form-control"placeholder="Name" />
  <span id="last_name_vu_error" style="color:red;"></span>
  
  <input id="email_vu" maxlength="80" name="email" size="20" class="form-control" placeholder="Email" onblur="verify_email_vu(this.value);">
  <span id="email_vu_error" style="color:red;"></span>
  <span class="ldremailchk_vu text-center" style="display: none "><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
   
  <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Phone Number" id="phone_code_vu" name="phone" onblur="verify_phone_contactnews2_vu(this.value)" type="tel" class="form-control wpcf7-text focus-on phnnumb" style="">
  <span id="phone2_vu_error" style="color:red;"></span> <span id="country_error" style="color:red;"></span>
  <span class="ldrphone_vu text-center" style="display: none;"><h4 style="font-size:1rem;"><b>Loading......</b></h4></span>
  
<div class="row formBack">
  <div class="col-xs-3 mob-3 col-sm-4 mt-4 codeimgdevp" style="margin-top: 1.3rem !important; padding: 0 7px;">
      <?php
        
        $pid = get_queried_object_id();
         $pid .= '_a';
        //echo '<pre>';
        //print_r($pid);
      ?>
            

      <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['current_captcha_form_id'] = $pid;
        ?>
        <img alt="captcha" 
             src="<?php echo get_site_url(); ?>/wp-content/themes/thegem-child/cap2.php" 
             id="captchaImg_<?php echo $pid; ?>"
             class="codeImg" style="width:100%;height: 44px;padding-left: 5px;">
                                    <?php //session_start();  
                                            //echo "<pre>"; print_r($_SESSION); 
                                    ?>
                                  </div>
                                   <input type="hidden" name="pageid" id="pageid"  value="<?php echo $pid;?>">
                                  <div class="col-xs-3 mob-2 col-sm-2 mt-4" style="margin-top: 1.3rem !important;padding:0px 11px;" >
  <p  class="btnRefresh_bottom_vu" style="cursor: grab;"><img src="<?php echo get_site_url();?>/wp-content/uploads/2022/04/free-refresh-icon-3104-thumb-1.png" style="width: 200px;
  height: 40px;" alt="refreshImg"></p>
                                  </div>
                                  <div class="col-xs-6 mob-6 col-sm-6 mt-4">
                                      <div class="form-group ">
                                          <input type="text" name="vercode" id="vercode_vu" class="form-control" placeholder="Enter value">
                                          <span id="vercode_vu_error" style="color:red;"></span>
                                          <input   maxlength="40" name="company" value="360dc" type="hidden" size="20" type="text" /><br>
                                      </div>
                                  </div> </div>


<span id="all_error" style="color:red;"></span>
<button type="submit" id="referralSubmission_vu"><?php echo esc_html__('Enjoy 7 Days FREE TRIAL!', 'degree'); ?></button>
	<p class="blinking-text" style="text-align: center;
    color: #004677;
    font-style: italic;
    font-weight: 700;
    font-size: 19px;">No Credit Card Required</p>
</form>



<?php 
  return ob_get_clean();
}
add_shortcode('referralProgram_new_page','referralProgram_footer_new_page');

/*----End New Design Forms----*/







// end deepak code



function releaseNotes_search_form(){
     ?>
     <script>
        
function sticky_relocate() {
  var window_top = jQuery(window).scrollTop();
  var footer_top = jQuery(".custom-footer").offset().top  - 90;
  var div_top = jQuery('.vc_clearfix').offset().top;
  var div_height = jQuery("#sticky").height();

    var padding = 40;  // tweak here or get from margins etc
    
    if (window_top + div_height > footer_top - padding)
      jQuery('#sticky').css({top: (window_top + div_height - footer_top + padding) * -1})
    else if (window_top > div_top) {
      jQuery('#sticky').addClass('stick');
      jQuery('#sticky').css({top: 95})
    } else {
      jQuery('#sticky').removeClass('stick');

    }
  }

  jQuery(function () {
    jQuery(window).scroll(sticky_relocate);
    sticky_relocate();
  });      


</script>
<script>
 jQuery(function () {

  jQuery('a[href*="#"]')

  .not('[href="#"]')
  .not('[href="#0"]')

  .click(function(event) {
//  alert("hello");

if (
  location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
  && 
  location.hostname == this.hostname
  ) {

  var target = jQuery(this.hash);
console.log('target', target);
target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');

if (target.length) {

  event.preventDefault();
  jQuery('html, body').animate({
    scrollTop: target.offset().top - 115
  }, 300);
}
}
});
  var urlget = window.location.href;
  console.log('urlget', urlget);
//  let aaa = window.location.href;
console.log(">>>",urlget.includes('#'));
if(urlget.includes('#')){

  let geturlid = urlget.split('#');
  console.log("h1>>>",geturlid[0]);
  let getanchorid = '#'+geturlid ; console.log('dd');
  //  console.log(getanchorid );
  //  console.log("h2>>>",geturlid[1]);

//var df  = jQuery('.'+geturlid[1]).addClass('active');
console.log(geturlid[1]);
var getprp = jQuery('.'+geturlid[1]).parent().prop('className');
var dataatr = jQuery('.'+geturlid[1]).attr('data-ids');
console.log(dataatr);
jQuery('.'+geturlid[1]).parentsUntil('div.'+dataatr).prevAll('input').addClass('active');
jQuery('.'+geturlid[1]).parent().siblings().prevAll().addClass("archive-meta-slide");
jQuery('input.active ').attr('checked','checked'); 

   //$(this).prevAll('input').val() 
   
   
   
   var result = urlget.split('/');
   var final = result[result.length -2];
   console.log('rest'+final);
    //geturlid[1]
    console.log(geturlid[1],'tester');
    if (geturlid[1] != '') {
     setTimeout(function(){
      jQuery('html, body').animate({scrollTop:jQuery('#'+geturlid[1]).offset().top - 115}, 'slow');
      jQuery('input[data-id="'+ geturlid[1]+'"]').attr('checked','checked');

    }, 300);
   }

 }
});

</script>
<script>
   //manualpages
   function openCity(evt, pageName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(pageName).style.display = "block";
    evt.currentTarget.className += " active";
  }

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script>
 function sticky1_relocate() {
  var window_top = jQuery(window).scrollTop();
  var footer_top = jQuery(".custom-footer").offset().top  - 90;
  var div_top = jQuery('.vc_clearfix').offset().top;
  var div_height = jQuery("#sticky1").height();

    var padding = 40;  // tweak here or get from margins etc
    
    if (window_top + div_height > footer_top - padding)
      jQuery('#sticky1').css({top: (window_top + div_height - footer_top + padding) * -1})
    else if (window_top > div_top) {
      jQuery('#sticky1').addClass('stick1');
      jQuery('#sticky1').css({top: 95})
    } else {
      jQuery('#sticky1').removeClass('stick1');

    }
  }

  jQuery(function () {
    jQuery(window).scroll(sticky1_relocate);
    sticky1_relocate();
  });
</script>
<style>
  .toggle-box-region {background-color:#fff; padding:16px 5px;margin-top: 6x;
  }
  .toggle-box {display:none;}
  .toggle-box + label {

   cursor:pointer;
   display:block;

   padding: .3em 0 .3em 5px;
   position:relative;
 }

 .toggle-box + label + div {display:none; margin:0 0 14px;}
 .toggle-box:checked + label:nth-child(n)
 + div {display:block;}

 .toggle-box.cust-text + label:after {
   position:absolute;
   content:"\f0fe";
   font-family:FontAwesome;
   top:.3em;
   right:-11px;
   color:#0085a6;
 }
 .toggle-box.cust-text1 + label:after {
   position:absolute;
   content:"\f0fe";
   font-family:FontAwesome;
   top:.3em;
   right:-25px;
   color:#0085a6;
 }
 .toggle-box + label:after {
   position:absolute;
   content:"\f0fe";
   font-family:FontAwesome;
   top:.3em;
   right:4px;
   color:#0085a6;
 }
 .toggle-box:checked + label {color:#0085a6;}
 .toggle-box:checked + label:after {content:"\f146";}
 .toggle-box-content { color:#000;     padding: 3px 15px;}

 .toggle-box-content ul{
   list-style: none;
   padding-left: 0px;
   margin-top:0px;
 }
 .toggle-box-content li{
   margin: 10px 0px 0px 39px;
 }
 .toggle-box-content.third_align li{
  margin: 10px -15px 0px 15px !important;
}
.toggle-box-content li a{
 text-decoration: none;
 color:  #3c3950;
}

.ex_li{

  cursor: pointer;
  display: block;
  font-weight: bold;
  line-height: 23px;
  padding: .3em 0 .3em 26px;
  position: relative;
}
.ex_li a{
 text-decoration: none;
 color: #555;
}
.toggle-box-region ul{
 list-style: none;
 padding-left: 0px;
}

.toggle-box-region h3{
 padding-left: 25px;
}

html {
  scroll-behavior: smooth;
}

.removeborder .toggle-box-region{
 border:none;border-bottom:none;
}
.removeborder{
 max-width:500px;
}

div#sticky.stick {
  position: fixed;
  z-index: 10;
  width:361px;
  top: 0 ;
  height: 80vh;
  overflow-y:auto;

}

.single-manual .block-content {
  padding-top: 0px;
}
.toggle-box-region label a{
 color:#3c3950;
}
.post_outer.show {
  display: block;
}
.post_outer {
  position: fixed;
  background: rgba(0,0,0,0.5);
  z-index: 999999999;
  width: 47%;
  / height: 102%; /
  top: 60%;
  left: 26%;
  border-radius: 4px;
  display: none;
}
.post_loader.show {
  display: block;
  position: absolute;
  z-index: 1001;
  opacity: 1;
  left: 50%;
  bottom: 0;
  right: 0;
  top:40%;
  border: 8px solid #f3f3f3;
  border-radius: 50%;
  border-top: 8px solid #3498db;
  width: 40px;
  height: 40px;
  -webkit-animation: spins 2s linear infinite; / Safari /
  animation: spins 2s linear infinite;
}

/ Safari /
@-webkit-keyframes spins {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spins {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

/ medium scroll bar /

.medium-scroll::-webkit-scrollbar-track {
  background: #fff;
}

.medium-scroll::-webkit-scrollbar {
 width: 5px;
 transition: all .5s linear;
}

.medium-scroll::-webkit-scrollbar-thumb {
 background-color:#ccc;
 border-radius: 15px;
}

.medium-scroll:hover::-webkit-scrollbar-thumb {
 background-color: #0085a6;
 border-radius: 15px;
}
@media screen and (min-device-width: 768px) and (max-device-width: 900px){
 div#sticky.stick {
  width: 230px;
}}
@media screen and (min-device-width: 920px) and (max-device-width: 1024px){
 div#sticky.stick {
  width: 270px;
}
}
@media screen  and (max-device-width: 600px){
 .page-template-default.page-id-37348 .banner {
  height: 80vh !important;
} }
@media screen  and (max-device-width: 360px){
 .page-template-default.page-id-37348 .banner {
  height: 100vh !important;
} }
@media screen and (min-device-width: 320px) and (max-device-width: 600px){

  .stick {
    position: relative !important;
  }
  .cust_mar{
    margin-top:55px !important;

  }
  div#sticky.stick {
    width: 308px ;
    top:0px !important;
  }
  .banner-cu{
    margin-top:20px;
  }
}
div#sticky1.stick1 {
  position: fixed;
  z-index: 10;
  width:350px;
  height:75vh;
  top: 100px !important;
  overflow-y:auto;
}
h1#headingspace {
  margin: 0px 0px 25px 0px;
  line-height: 45px;
}
@media screen and (min-device-width: 320px) and (max-device-width: 600px){

  div#sticky.stick {
    position: relative !important;
  }
  .stick1{
    position: relative !important;
  }
}
@media only screen and (max-width: 320px){

  .stick {
    position: relative !important;
  }
  .stick1{
    position: relative !important;
  }
}
@media only screen and (max-width: 375px){

  .stick {
    position: relative !important;
  }
  .cust_mar{
    margin-top:85px !important;
  }
  .stick1{
    position: relative !important;
  }

}
@media screen and (min-device-width: 320px) and (max-device-width: 600px){

  div#sticky.stick {
    position: relative !important;
    width: 100% !important;
    height:auto !important;
  }

}
.side-border{
  border:1px #b3b3bb  solid;
}
.widget .searchform input{
        background: #fff;
}
</style>
<div class="widget widget_search">
  <form role="search" class="search-form">
    <label>
        <span class="screen-reader-text">Search Release Notes</span>
        <input type="search" class="search-field" id="searchF" placeholder="Search Release Notes" value="">
        <input type="submit" style="display:none;" value="Submit"/>
    </label>
</form>
  </div>
  
  <script>
      jQuery(document).ready(function($) {
     $('.search-form').on('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting
         $('#loader').show();
 
  $('.gem-button-container.gem-button-position-center.pdf-dwnld').hide();
  
  // get the search input value
  var searchValue = $(this).val().toLowerCase();
  
  // loop through each toggle
  $(".tabcontent").each(function() {
    var toggleBox = $(this);
    var resultFound = false;
    // loop through each tab content in the toggle
    toggleBox.find(".toggle-box-content.toggle-box-region.tog-box").each(function() {
      // get the tab content text
      var tabContent = $(this).text().toLowerCase();
      
      // check if the tab content matches the search input
      if (tabContent.indexOf(searchValue) !== -1) {
        // display the matching tab content
        $(this).show();
        resultFound = true;
      } else {
        // hide the non-matching tab content
        $(this).hide();
      }
    });
    
    // show "No result found" message if no matching content is found in the toggle
    if (!resultFound && toggleBox.find(".toggle-box-content.toggle-box-region.tog-box:visible").length == 0) {
      toggleBox.find('.releasenotehead').hide();
       toggleBox.find('.patchedContent').hide();
       toggleBox.find('.notFound').show();
    } else {
      toggleBox.find('.releasenotehead').show();
      toggleBox.find('.notFound').hide();
       toggleBox.find('.patchedContent').show();
    }
    
    // show/hide elements
    if (resultFound) {
      $('#loader').hide();
      $('div#toggleboxing').show();
      $('.gem-button-container.gem-button-position-center.pdf-dwnld').show();
    } else {
      $('#loader').hide();
    }
  });  
       
    });
    });

jQuery(document).ready(function() {
$("#searchF").keyup(function() {
  $('#loader').show();
 
  $('.gem-button-container.gem-button-position-center.pdf-dwnld').hide();
  
  // get the search input value
  var searchValue = $(this).val().toLowerCase();
  
  // loop through each toggle
  $(".tabcontent").each(function() {
    var toggleBox = $(this);
    var resultFound = false;
    // loop through each tab content in the toggle
    toggleBox.find(".toggle-box-content.toggle-box-region.tog-box").each(function() {
      // get the tab content text
      var tabContent = $(this).text().toLowerCase();
      
      // check if the tab content matches the search input
      if (tabContent.indexOf(searchValue) !== -1) {
        // display the matching tab content
        $(this).show();
        resultFound = true;
      } else {
        // hide the non-matching tab content
        $(this).hide();
      }
    });
    
    // show "No result found" message if no matching content is found in the toggle
    if (!resultFound && toggleBox.find(".toggle-box-content.toggle-box-region.tog-box:visible").length == 0) {
      toggleBox.find('.releasenotehead').hide();
       toggleBox.find('.patchedContent').hide();
       toggleBox.find('.notFound').show();
    } else {
      toggleBox.find('.releasenotehead').show();
      toggleBox.find('.notFound').hide();
       toggleBox.find('.patchedContent').show();
    }
    
    // show/hide elements
    if (resultFound) {
      $('#loader').hide();
      $('div#toggleboxing').show();
      $('.gem-button-container.gem-button-position-center.pdf-dwnld').show();
    } else {
      $('#loader').hide();
    }
  });
});
});

  </script>
  <?php
}
add_shortcode('releaseNotes_form','releaseNotes_search_form');

/* Dreamforce landing page */
add_shortcode('dreamforce23','dreamforce23form');
function dreamforce23form(){ ?>

    <style type="text/css">
		.formheader{
			color: #474543;
		}
		.formheader span{
			color: #1aa2de;
			font-weight: 800;
		}
		.formheader b{
			font-weight: 800;
		}
		.formcontainer{
			max-width: 400px;
    		border-radius: 5px;
    		background-color: #fff;
    		padding: 1px 30px 20px;
    		width: 100%;
    		box-sizing: border-box;
		}
		.formcontainer form div input {
		    border: none;
		    border-bottom: 1px solid;
		    width: 80%;
    		margin-left: 15px;
		}
		.formcontainer form {
		    padding: 20px;
		    border: 1px solid #000;
		    border-radius: 5px;
		}
		.formcontainer form div {
		    margin-bottom: 15px;
		    display: flex;
		}
		.formcontainer form div:nth-child(2) label {
		    min-width: 75px;
		}
		.confirmbtn {
		    background-color: #66a14c;
		    padding: 15px;
		    width: 100%;
		    color: #fff;
		    font-weight: 700;
		    border: 1px solid #66a14c;
		    font-size: 16px;
		    border-radius: 5px;
		}
		.msg1 {    font-size: 40px;
    color: #4cc74c;line-height: 40px;}
	</style>
	<div class="formcontainer">
		<h4 class="formheader">
			
			Let’s Catch up at <span><?php echo is_page(65722) ? 'Agentforce World Tour Sydney 2026' : 'Dreamforce 25.'; ?></span>
		</h4>
		<div class="msg1"></div>
		<form id="dreamforceformLead">
		    <input type="hidden" name="encoding" value="UTF-8" />
		    <input type="hidden" name="Form1" value="Form1" />
            <input type="hidden" id="ever" name="email_status" value="0">
            <input type="hidden" id="pver" name="phone_status" value="0">
		    <!--<input id="00N4N00000IVjck" maxlength="40" name="00N4N00000IVjck" size="20" type="hidden" />-->
            
            <input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
       
		    <input type="hidden" name="Lead_Source_URL" value="<?php echo get_permalink();?>">
		    <input type="hidden" value="<?php echo esc_html( is_page(66641) ? 'NYWT2026' : 'SWT2026' );?>" id="lead_source" name="lead_source" />
			<input  id="company" maxlength="40" name="company" value="360 SMSAPP Website" size="20" type="hidden" />
			<div>
				<label>Name*</label>
				<input type="text" name="last_name" id="last_name" value="" minlength="3" required>
				<span id="last_name_error" style="color:red;"></span>
			</div>
			<div class="phNo">
				<label>Phone No.*</label>
				<input type="tel" name="phone" id="phone" minlength="10" pattern="[1-9]{1}[0-9]{9}"  required>
				<span id="phone_error" style="color:red;"></span>
			</div>
			<div>
				<label>Email*</label>
				<input type="email" name="email" id="email" value="" required>
				<span id="email_error" style="color:red;"></span>
			</div>
			<button id="dreamforcewebtoLeadFormOne" class="confirmbtn">Book a 1:1 Meeting</button>
		</form>
	</div>
	<script>
    jQuery(document).ready(function () {
            
            jQuery("#dreamforcewebtoLeadFormOne").click(function (e) {
                  //console.log('Home JS');
                e.preventDefault();
                

                var ids = ['last_name', 'email', 'phone'];

                var last_name = jQuery('#last_name').val();
                var email = jQuery('#email').val();
                var phone = jQuery('#phone').val();
               // var filter = /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/;
            var filter = /^[0-9]{10}$/; 
                //var regex = /^[a-zA-Z]+$/;
                var sanitizedText = last_name.replace(/[^a-zA-Z0-9]/g, '');
//alert(sanitizedText);

               removeValidations(ids);
                if (last_name == "" || email == "" || phone == "") {

                    if (last_name == "") {
                        jQuery("#last_name_error").html('Required Field');
                    }
                    if (email == "") {
                        jQuery("#email_error").html('Required Field');
                    }
                    if (phone == "") {
                        jQuery("#phone_error").html('Required Field');
                    }
                    return false;
                }else if(sanitizedText == "" && sanitizedText.length == 0) {
                         jQuery('#last_name_error').html('Please enter valid name'); 
                         //console('tets - '+last_name); alert('called');
                         return false;
               } else if(!phone.match(filter) ){
                       jQuery('#phone_error').html('Please enter 10 digit mobile number');
                       jQuery('#phone').focus();
                       return false;
                }else if (email.indexOf("@", 0) < 0) {
                    jQuery('#email_error').html('The Email  must contain a valid email address.');
                    jQuery('#email').focus();
                    return false;
                } else if (email.indexOf(".", 0) < 0) {
                    jQuery('#email_error').html('The Email  must contain a valid email address.');
                    jQuery('#email').focus();
                    return false;
                }  else if(jQuery('span#phone_error').text() == 'Invalid Number'){
                         return false;}
                else {
                   
                    // var baseURL =  '<?php echo site_url(); ?>/wp-content/themes/thegem/vwebtolead.php';
                    var baseURL = '<?php echo site_url(); ?>/wp-content/themes/thegem-child/dreamforce-checkdata.php';
                    
                    var form = jQuery('#dreamforceformLead');
                    
                    jQuery('#pver').val('1');
                    jQuery('#ever').val('1');
                    
                    var currentUrl = location.href;
                    var formData = form.serialize();
                    formData += '&c_url=' + encodeURIComponent(currentUrl);
                    jQuery.ajax({
                        url: baseURL,
                        method: 'post',
                       //data: form.serialize(),
					data: formData,
                      // data: { "fullname": fullname, "phone": phone, "email": email},
                        success: function (response) {   //return false;  
                       //console.log($(this).closest('form').serialize()); return false; 
                            var res = JSON.parse(response);
                            // console.log(res);
                            if (res.st === parseInt(1)) {
                               // location.href = res.url;
                               jQuery('#dreamforceformLead').css('display','none');
                               jQuery(".msg1").html('Thank You for contacting us!')
                               

                            } else if (res.st === parseInt(3)) {
                                jQuery("#last_name_error").html(res.msg);
                                return false;
                            } else if (res.st === parseInt(4)) {
                                jQuery("#email_error").html(res.msg);
                                return false;
                            } else if (res.st === parseInt(5)) {
                                jQuery("#phone_error").html(res.msg);
                                return false;
                            } 
                            else if (res.st === parseInt(8)) {
                                jQuery("#all_error").html(res.msg);
                                return false;
                            }
                            else if (res.st === parseInt(0)) {
                                jQuery("#all_error").html(res.msg);
                                return false;
                            }
                            else {
                                jQuery("#all_error").html("Something Went Wrong Please Try Again Later");
                                return false;

                            }


                        }
                    });
                }


            });

        }); 
        function removeValidations(ids) { 
             console.log('ids');
            jQuery(ids).each(function (index, key) {
                jQuery("#" + key).keyup(function () {
                    jQuery("#" + key + "_error").html('');
                });
            });
        }
    </script>
<?php }

add_shortcode('dreamforce23_form2','dreamforce23form_form2');
function dreamforce23form_form2(){ ?>
 <style type="text/css">
		.formheader{
			color: #474543;
		}
		.formheader span{
			color: #1aa2de;
			font-weight: 800;
		}
		.formheader b{
			font-weight: 800;
		}
		.formcontainer{
			max-width: 400px;
    		border-radius: 5px;
    		background-color: #fff;
    		padding: 1px 30px 20px;
    		width: 100%;
    		box-sizing: border-box;
		}
		.formcontainer form div input {
		    border: none;
		    border-bottom: 1px solid;
		    width: 80%;
    		margin-left: 15px;
		}
		.formcontainer form {
		    padding: 20px;
		    border: 1px solid #000;
		    border-radius: 5px;
		}
		.formcontainer form div {
		    margin-bottom: 15px;
		    display: flex;
		}
		.formcontainer form div:nth-child(2) label {
		    min-width: 75px;
		}
		.confirmbtn {
		    background-color: #66a14c;
		    padding: 15px;
		    width: 100%;
		    color: #fff;
		    font-weight: 700;
		    border: 1px solid #66a14c;
		    font-size: 16px;
		    border-radius: 5px;
		}
		.msg2 {    font-size: 40px;
    color: #4cc74c;line-height: 40px;}
	</style>
	<div class="formcontainer">
		<h4 class="formheader">
			
			Let’s Catch up at <span><?php echo is_page(65722) ? 'Agentforce World Tour Sydney 2026' : 'Dreamforce 25.'; ?></span>
		</h4>
		<div class="msg2"></div>
		<form id="dreamforceformLead2">
		    <input type="hidden" name="encoding" value="UTF-8" />
		    <input type="hidden" name="Form2" value="Form2" />
            <input type="hidden" id="ever2" name="email_status" value="0">
            <input type="hidden" id="pver2" name="phone_status" value="0">
		    <!--<input id="00N4N00000IVjck" maxlength="40" name="00N4N00000IVjck" size="20" type="hidden" />-->
            
            <input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
            
		    <input type="hidden" name="Lead_Source_URL" value="<?php echo get_permalink();?>">
		    <input type="hidden" value="<?php echo esc_html( is_page(66641) ? 'NYWT2026' : 'SWT2026' );?>" id="lead_source" name="lead_source" />
			<input  id="company" maxlength="40" name="company" value="360 SMSAPP Website" size="20" type="hidden" />
			<div>
				<label>Name*</label>
				<input type="text" name="last_name" id="last_name2" minlength="3" value="" required>
				<span id="last_name2_error" style="color:red;"></span>
			</div>
			<div class="phNo">
				<label>Phone No.*</label>
				<input type="tel" name="phone" id="phone2" minlength="10" maxlength="12" pattern="[1-9]{1}[0-9]{9}"  required>
				<span id="phone2_error" style="color:red;"></span>
			</div>
			<div>
				<label>Email*</label>
				<input type="email" name="email" id="email2" value="" required>
				<span id="email2_error" style="color:red;"></span>
			</div>
			<button id="dreamforcewebtoLeadForm2" class="confirmbtn">Book a 1:1 Meeting</button>
		</form>
	</div>
	<script>
    jQuery(document).ready(function () {
            jQuery("#dreamforcewebtoLeadForm2").click(function (e) {
                  //console.log('Home JS');
                e.preventDefault();
                

                var ids2 = ['last_name2', 'email2', 'phone2'];

                var last_name2 = jQuery('#last_name2').val();
                var email2 = jQuery('#email2').val();
                var phone2 = jQuery('#phone2').val();
               // var filter = /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/;
               var filter2 = /^[0-9]{10}$/;  
               var regex2 = /^[a-zA-Z\s]+$/;
               
                var sanitizedText2 = last_name2.replace(/[^a-zA-Z0-9]/g, '');

               removeValidations2(ids2);
                if (last_name2 == "" || email2 == "" || phone2 == "") { 
                    //alert('called1');
                    if (last_name2 == "") {
                        jQuery("#last_name2_error").html('Required Field');
                         //console.log('tets - '+last_name2); alert('called2');
                    }
                    if (email2 == "") {
                        jQuery("#email2_error").html('Required Field'); 
                          //console.log('tets - '+email_error2); alert('called3');
                    }
                    if (phone2 == "") {
                        jQuery("#phone2_error").html('Required Field');
                          //console.log('tets - '+phone_error2); alert('called4');
                    }
                    return false;
                //}else if(sanitizedText2 == "" && sanitizedText2.length == 0) {
                } else if(!last_name2.match(regex2) || sanitizedText2.length == 0) {
                         jQuery('#last_name2_error').html('Please enter valid name'); 
                      //console.log('tets - '+last_name); alert('name called');
                         return false;
                } else if(!phone2.match(filter2)) { 
                       jQuery('#phone2_error').html('Please enter 10 digit mobile number');
                       jQuery('#phone2').focus();
                       return false;
                }else if (email2.indexOf("@", 0) < 0) {
                    jQuery('#email2_error').html('The Email  must contain a valid email address.');
                    jQuery('#email2').focus();
                    return false;
                } else if (email2.indexOf(".", 0) < 0) {
                    jQuery('#email2_error').html('The Email  must contain a valid email address.');
                    jQuery('#email2').focus();
                    return false;
                }  else if(jQuery('span#phone2_error').text() == 'Invalid Number'){
                         return false;}
                else {
                   
                    // var baseURL =  '<?php echo site_url(); ?>/wp-content/themes/thegem/vwebtolead.php';
                    var baseURL = '<?php echo site_url(); ?>/wp-content/themes/thegem-child/dreamforce-checkdata.php';
                    
                    var form = jQuery('#dreamforceformLead2');
                    
                    jQuery('#pver2').val('1');
                    jQuery('#ever2').val('1');
                     var currentUrl = location.href;
                    var formData = form.serialize();
                    formData += '&c_url=' + encodeURIComponent(currentUrl);
                    jQuery.ajax({
                        url: baseURL,
                        method: 'post',
                       //data: form.serialize(),
                       data: formData,
                        success: function (response) {   //return false;  
                       //console.log('tetst success'); return false; 
                            var res = JSON.parse(response);
                            // console.log(res);
                            if (res.st === parseInt(1)) {
                               // location.href = res.url;
                               jQuery('#dreamforceformLead2').css('display','none');
                               jQuery(".msg2").html('Thank You for contacting us!')
                               

                            } else if (res.st === parseInt(3)) {
                                jQuery("#last_name2_error").html(res.msg);
                                return false;
                            } else if (res.st === parseInt(4)) {
                                jQuery("#email2_error").html(res.msg);
                                return false;
                            } else if (res.st === parseInt(5)) {
                                jQuery("#phone2_error").html(res.msg);
                                return false;
                            } 
                            else if (res.st === parseInt(8)) {
                                jQuery("#all_error2").html(res.msg);
                                return false;
                            }
                            else if (res.st === parseInt(0)) {
                                jQuery("#all_error2").html(res.msg);
                                return false;
                            }
                            else {
                                jQuery("#all_error2").html("Something Went Wrong Please Try Again Later");
                                return false;

                            }


                        }
                    });
                }


            });

        }); 
        function removeValidations2(ids2) { 
             console.log('ids2');
            jQuery(ids2).each(function (index, key) {
                jQuery("#" + key).keyup(function () {
                    jQuery("#" + key + "_error").html('');
                });
            });
        }
    </script>
<?php }

/****** End Dreamforce'23 Landing Page *********/



/************ Start NPO-99  *****************/
add_shortcode('npo','npo_form');
function npo_form(){ ?>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Allura&family=Comforter+Brush&display=swap" rel="stylesheet">
<style>

.formcontainer {
    background: #f5f5f5;
    padding: 10px 30px 25px;
    border-radius: 5px;
}
.mb-5 {
    margin-bottom: 5%;
}
.formcontainer input {
    width: 100%;
    background: #fff;
    font-size: 15px;
    padding: 5px 10px;
    border-radius: 3px;
}
.formcontainer button {
    width: 100%;
    background: #2688C9;
    color: #fff;
    border: none;
    padding: 5px;
    font-size: 20px;
    border-radius: 3px;
}
    .msg1{background: #0071b4;
    color: #fff;
    font-size: 20px;
    }
</style>

<div class="formcontainer">
	<h4 class="npoheader">Learn more about <span>NPO-99</span></h4>
		<div class="msg1"></div>
		<form id="npoformLead">
		    <input type="hidden" name="encoding" value="UTF-8" />
		    <input type="hidden" name="Form1" value="Form1" />
            <input type="hidden" id="ever" name="email_status" value="0">
            <input type="hidden" id="pver" name="phone_status" value="0">
		    <!--<input id="00N4N00000IVjck" maxlength="40" name="00N4N00000IVjck" size="20" type="hidden" />-->
		    <input type="hidden" name="Lead_Source_URL" value="<?php echo get_permalink();?>">
		    <input type="hidden" value="360SMS_NPO-99" id="lead_source" name="lead_source" />
			<input  id="company" maxlength="40" name="company" value="360 SMSAPP Website" size="20" type="hidden" />
			<div class="mb-5">
				<input type="text" name="last_name" id="last_name" value="" placeholder="Name:-" required>
				<span id="last_name_error" style="color:red;font-size: 14px;"></span>
			</div>
			<div class="mb-5">
				<input type="tel" name="phone" id="phone" maxlength="12" pattern="[1-9]{1}[0-9]{9}" placeholder="Phone No:-" required>
				<span id="phone_error" style="color:red;font-size: 14px;"></span>
			</div>
      <!--country deepak  10    -->
<link rel="stylesheet" href="https://www.jqueryscript.net/demo/country-picker-flags/build/css/countrySelect.css">
    	<style>
    	.country-select.inside{
    	    width:100%;
    	}
        .country-select .country-list .country {
            padding: 0px 7px;
        }
        .selected-flag {
            background: #f2f2f2;
        }
        input#country_selector {
            text-indent: 5px; width: 100%;
        }
        .country-select.inside {
            width: 100%;
        }
        p.country {
   margin:0;
}

	</style>
           <p class="country">Please select country below</p>

            <fieldset class="form-col" id="" style="padding: 0px;border: none;margin:0 0 1.1em;">
                <input id="country_selector" type="text" name="">
                  <span id="companydev_error" style="color:red;"></span>

				<label for="country_selector" style="display:none;">Select a country here...</label>
				<div class="form-item" style="display:none;">
        				<input type="text" id="country_selector_code" name="Country__c" data-countrycodeinput="1" readonly="readonly" placeholder="Selected country code will appear here" />
        				<label for="country_selector_code">...and the selected country code will be updated here</label>
        			</div>
        			<button type="submit" style="display:none;">Submit</button>
    		</fieldset> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

              <script src="https://www.jqueryscript.net/demo/country-picker-flags/build/js/countrySelect.js"></script>    
              <script>
    			jQuery("#country_selector").countrySelect({
    				// defaultCountry: "jp",
    				// onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
    				// responsiveDropdown: true,
    				preferredCountries: ['us', 'gb', 'in', 'ca']
    			});
    		</script>
    		
      <!--country end deepak      -->
			<div class="mb-5">
				<input type="email" name="email" id="email" value="" placeholder="Email:-" required>
				<span id="email_error" style="color:red;font-size: 14px;"></span>
			</div>
			<button id="npowebtoLeadbutton" class="confirmbtn">Fill up the form</button>
		</form>
		<br/>
		<p class="formpara"><b>NPO-99</b> is available for a <b>LIMITED-TIME PERIOD</b>.</p>



	</div>
	<script>
    jQuery(document).ready(function () {
            
            jQuery("#npowebtoLeadbutton").click(function (e) {
                  //console.log('Home JS');
                e.preventDefault();
                

                var ids = ['last_name', 'email', 'phone'];

                var last_name = jQuery('#last_name').val();
                var email = jQuery('#email').val();
                var phone = jQuery('#phone').val();
                var phoneRegex = /^\d{10,15}$/; // Allow only numbers and require a length between 10 and 15
                var filter = /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/;
                //var regex = /^[a-zA-Z]+$/;
                var sanitizedText = last_name;

               removeValidations(ids);
                if (last_name == "" || email == "" || phone == "") {

                    if (last_name == "") {
                        jQuery("#last_name_error").html('This field is required.');
                    }
                    if (email == "") {
                        jQuery("#email_error").html('This field is required.');
                    }
                    if (phone == "") {
                        jQuery("#phone_error").html('This field is required.');
                    }
                    return false;
                }else if(/\d/.test(sanitizedText) || /^\s*$/.test(sanitizedText)) {
                         jQuery('#last_name_error').html('Please enter a valid name with only letters'); 
                         //console('tets - '+last_name); alert('called');
                         return false;
                }else if(/[^a-zA-Z\s]/.test(sanitizedText)) {
                         jQuery('#last_name_error').html('Please enter a valid name with only letters'); 
                         //console('tets - '+last_name); alert('called');
                         return false;
                }else if(sanitizedText.length > 30) {
                         jQuery('#last_name_error').html('Please enter a valid name upto 30 characters'); 
                         //console('tets - '+last_name); alert('called');
                         return false;
               } else if(!phoneRegex.test(phone)){
                       jQuery('#phone_error').html('Please enter a valid mobile number');
                       jQuery('#phone').focus();
                       return false;
                }else if (email.indexOf("@", 0) < 0) {
                    jQuery('#email_error').html('The Email  must contain a valid email address.');
                    jQuery('#email').focus();
                    return false;
                } else if (email.indexOf(".", 0) < 0) {
                    jQuery('#email_error').html('The Email  must contain a valid email address.');
                    jQuery('#email').focus();
                    return false;
                }  else if(jQuery('span#phone_error').text() == 'Invalid Number'){
                         return false;}
                else {
                   
                    var baseURL = '<?php echo get_stylesheet_directory_uri(); ?>/npo-checkdata.php';
                    
                    var form = jQuery('#npoformLead');
                    
                    jQuery('#pver').val('1');
                    jQuery('#ever').val('1');
                    jQuery.ajax({
                        url: baseURL,
                        method: 'post',
                       data: form.serialize(),
                      // data: { "fullname": fullname, "phone": phone, "email": email},
                        success: function (response) {   //return false;  
                       //console.log($(this).closest('form').serialize()); return false; 
                            var res = JSON.parse(response);
                            // console.log(res);
                            if (res.st === parseInt(1)) {
                               // location.href = res.url;
                               jQuery('#npoformLead').css('display','none');
                               jQuery(".msg1").html('Thank You for contacting us!');
                               jQuery(".msg1").css("padding","20px");

                               

                            } else if (res.st === parseInt(3)) {
                                jQuery("#last_name_error").html(res.msg);
                                return false;
                            } else if (res.st === parseInt(4)) {
                                jQuery("#email_error").html(res.msg);
                                return false;
                            } else if (res.st === parseInt(5)) {
                                jQuery("#phone_error").html(res.msg);
                                return false;
                            } 
                            else if (res.st === parseInt(8)) {
                                jQuery("#all_error").html(res.msg);
                                return false;
                            }
                            else if (res.st === parseInt(0)) {
                                jQuery("#all_error").html(res.msg);
                                return false;
                            }
                            else {
                                jQuery("#all_error").html("Something Went Wrong Please Try Again Later");
                                return false;

                            }


                        }
                    });
                }


            });

        }); 
        function removeValidations(ids) { 
             console.log('ids');
            jQuery(ids).each(function (index, key) {
                jQuery("#" + key).keyup(function () {
                    jQuery("#" + key + "_error").html('');
                });
            });
        }
    </script>
<?php }


add_shortcode('npo_footer','npo_form2');
function npo_form2(){ ?>

<style>

    .msg2{background: #0071b4;
    color: #fff;
    font-size: 20px;
    }
</style>

<div class="formcontainer">
	<h4 class="npoheader">Get your <span>NPO-99 Now</span></h4>
		<div class="msg2"></div>
		<form id="npoformLeadFooter">
		    <input type="hidden" name="encoding" value="UTF-8">
		    <input type="hidden" name="Form2" value="Form1">
            <input type="hidden" id="ever" name="email_status" value="0">
            <input type="hidden" id="pver" name="phone_status" value="0">
		    <!--<input id="00N4N00000IVjck" maxlength="40" name="00N4N00000IVjck" size="20" type="hidden" />-->
		    <input type="hidden" name="Lead_Source_URL" value="<?php echo get_permalink();?>">
		    <input type="hidden" value="360SMS_NPO-99" id="lead_source" name="lead_source">
			<div class="mb-5">
				<input type="text" name="last_name" id="last_name2" value="" placeholder="Name:-" required="">
				<span id="last_name2_error" style="color:red;font-size: 14px;"></span>
			</div>
			<div class="mb-5">
				<input type="tel" name="phone" id="phone2" maxlength="12" pattern="[1-9]{1}[0-9]{9}" placeholder="Phone No:-" required="">
				<span id="phone2_error" style="color:red;font-size: 14px;"></span>
			</div>
      
			<div class="mb-5">
				<input type="email" name="email" id="email2" value="" placeholder="Email:-" required="">
				<span id="email2_error" style="color:red;font-size: 14px;"></span>
			</div>
      
			<div class="mb-5">
				<input type="text" name="company" id="company2" value="" placeholder="Nonprofit Org. Name:-" required="">
				<span id="company2_error" style="color:red;font-size: 14px;"></span>
			</div>
			<button id="npowebtoLeadFormFooter" class="confirmbtn">Talk to our NPO Experts</button> 
		</form>
		<br/>
		<p class="formpara"><b>NPO-99</b> is available for a <b>LIMITED-TIME PERIOD</b>.</p>

	</div>
<script>
    jQuery(document).ready(function () {
         
            jQuery("#npowebtoLeadFormFooter").click(function (e) {
                  //console.log('Home JS');
                
                e.preventDefault();
                

                var ids2 = ['last_name2', 'email2', 'phone2','company2'];

                var last_name2 = jQuery('#last_name2').val();
                var email2 = jQuery('#email2').val();
                var phone2 = jQuery('#phone2').val();
                var phoneRegex = /^\d{10,15}$/; // Allow only numbers and require a length between 10 and 15
                var company2 = jQuery('#company2').val();
                var filter = /^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$/;
                //var regex = /^[a-zA-Z]+$/;
               var sanitizedText = last_name2;
//alert(sanitizedText);

               removeValidations(ids2);
                if (last_name2 == "" || email2 == "" || phone2 == "" || company2 == "") {

                    if (last_name2 == "") {
                        jQuery("#last_name2_error").html('This field is required.');
                    }
                    if (email2 == "") {
                        jQuery("#email2_error").html('This field is required.');
                    }
                    if (phone2 == "") {
                        jQuery("#phone2_error").html('This field is required.');
                    }
                     if (company2 == "") {
                        jQuery("#company2_error").html('This field is required.');
                    }
                    return false;
                }else if(/\d/.test(sanitizedText) || /^\s*$/.test(sanitizedText)) {
                    jQuery('#last_name2_error').html('Please enter a valid name with only letters');
                    return false;
                } else if(/[^a-zA-Z\s]/.test(sanitizedText)) {
                    jQuery('#last_name2_error').html('Please enter a valid name with only letters');
                    return false;
                } else if(sanitizedText.length > 30) {
                    jQuery('#last_name2_error').html('Please enter a valid name upto 30 characters');
                    return false;
                } else if(/^\s*$/.test(company2)) {
                    jQuery('#company2_error').html('Please enter a valid company name');
                    return false;
                } else if(!/^[a-zA-Z0-9\s]+$/.test(company2)) {
                    jQuery('#company2_error').html('Please enter a valid company name');
                    return false;
                } else if(company2.length > 30) {
                    jQuery('#company2_error').html('Company name should be 30 characters long');
                    return false;
                } else if(!phoneRegex.test(phone2)) {
                   jQuery('#phone2_error').html('Please enter a valid mobile number');
                    jQuery('#phone2').focus();
                    return false;
                }else if (email2.indexOf("@", 0) < 0) {
                    jQuery('#email2_error').html('The Email  must contain a valid email address.');
                    jQuery('#email2').focus();
                    return false;
                } else if (email2.indexOf(".", 0) < 0) {
                    jQuery('#email2_error').html('The Email  must contain a valid email address.');
                    jQuery('#email2').focus();
                    return false;
                }  else if(jQuery('span#phone2_error').text() == 'Invalid Number'){
                         return false;}
                else {
                   
                    var baseURL = '<?php echo get_stylesheet_directory_uri(); ?>/npo-checkdata.php';
                    
                    var form = jQuery('#npoformLeadFooter');
                    
                    jQuery('#pver').val('1');
                    jQuery('#ever').val('1');
                    jQuery.ajax({
                        url: baseURL,
                        method: 'post',
                       data: form.serialize(),
                        success: function (response) {   //return false;  
                            var res = JSON.parse(response);
                            if (res.st === parseInt(1)) {
                               // location.href = res.url;
                               jQuery('#npoformLeadFooter').css('display','none');
                               jQuery(".msg2").html('Thank You for contacting us!');
                               jQuery(".msg2").css("padding","20px");

                            } else if (res.st === parseInt(3)) {
                                jQuery("#last_name2_error").html(res.msg);
                                return false;
                            } else if (res.st === parseInt(4)) {
                                jQuery("#email2_error").html(res.msg);
                                return false;
                            } else if (res.st === parseInt(5)) {
                                jQuery("#phone2_error").html(res.msg);
                                return false;
                            } else if (res.st === parseInt(6)) {
                                jQuery("#company2_error").html(res.msg);
                                return false;
                            } 
                            else if (res.st === parseInt(8)) {
                                jQuery("#all_error").html(res.msg);
                                return false;
                            }
                            else if (res.st === parseInt(0)) {
                                jQuery("#all_error").html(res.msg);
                                return false;
                            }
                            else {
                                jQuery("#all_error").html("Something Went Wrong Please Try Again Later");
                                return false;

                            }


                        }
                    });
                }


            });

        }); 
        function removeValidations(ids2) { 
             console.log('ids2');
            jQuery(ids2).each(function (index, key) {
                jQuery("#" + key).keyup(function () {
                    jQuery("#" + key + "_error").html('');
                });
            });
        }
    </script>
<?php }
/************ End NPO-99  *****************/






// Deepak code



/*----Start Popup Form[i]----*/
add_shortcode('usecaseForm_popup', 'referralProgramnewfourPopupForm');
function referralProgramnewfourPopupForm($atts) {
    $atts = shortcode_atts(
        array(
            'link_label' => 'Get Consultation',
            'button_label' => 'SUBMIT'
        ),
        $atts,
      'usecaseForm_popup'
    );
    ob_start();
    $obj_id = get_queried_object_id();
    $current_url = get_permalink( $obj_id );
    include('fasterForm-shortcode-popup_form.php');
?>
  <style>
   button#referralSubmissionNewpopup {
   font-size: 16px;
   font-style: normal;
   font-family: 'Roboto';
   background-color: #0576bc;
   border-radius: 5px;
   color: #FFF;
   border: 1px solid #FFF;
   width: 100%;
 
       margin: 10px 0px;
    padding: 17px 0;
   }
   .error , .error_em{
   color: red;
   font-size: 14px;
   }
   button#referralSubmissionNewpopup:hover{
   color: #0576bc;
   background-color: #FFFFFF;
   border-color: #0576bc;
   }
</style>
<!----Start Btn Link---->
<div class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow myBtnsPopup btndesign" role="button" id="myBtnPopup">
   <span class="elementor-button-content-wrapper">
   <span class="elementor-button-text book_Demo"><?php echo esc_html($atts['link_label']); ?></span>
   </span>
</div>
<!----End Btn Link---->
<div id="myModalPopup" class="modals" style="display:none;">
   <div style="max-width: 533px;margin: 0 auto; width: 100%;text-align: right;"><span class="close">×</span></div>
   <div class="modal-content">
      <div class="modalss">
         <div class="popup-heading">
            <!-- <h2>BOOK A DEMO</h2> -->
            <?php    
                 
                  if(is_page(59860)){ ?>
               <h2>CONFIRM YOUR PRESENCE</h2>
               <?php }
                  else {?>
               <h2>Get Consultation</h2>
               <?php
                  }?>
         </div>
         <div class="form-part">
            <!----Start Popup Form Start---->
            <form id="refFormNewone_popup" class="refFormNewone_popup_page">
               <input type="hidden" name="encoding" value="UTF-8" />
               <input type="hidden" name="Form2" value="Form2" />
               <input type="hidden" id="ever2" name="email_status" value="0">
               <input type="hidden" id="pver2" name="phone_status" value="0">
               <input type="hidden" name="Lead_Source_URL" value="<?php echo get_permalink();?>">
              
              <input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
       
               <input type="hidden" value="SMS_LP_4XGrowth" id="lead_source" name="lead_source" />
               
               <input type=hidden name="retURL" value="">
               <div class="form-flex-popup">
               <input  id="last_name2_popup" maxlength="80" name="last_name" size="20" type="text" class="form-control"placeholder="Full Name" />
               <span id="last_name2_popup_error" style="color:red;"></span>
               </div>
               <div class="form-flex-popup">
               <input id="email2_popup" maxlength="80" name="email" size="20" class="form-control" placeholder="Work Email" onblur="verify_email2_popup(this.value);">
               <span id="email2_popup_error" style="color:red;"></span>
               <span class="ldremailchk2_popup text-center" style="display: none ">
                  <h4 style="font-size:1rem;"><b>Loading......</b></h4>
               </span>
               </div>
               <div class="form-flex-popup">
               <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Phone Number" id="phone_code2_popup" name="phone" onblur="verify_phone_contact_popup(this.value)" type="tel" class="form-control wpcf7-text focus-on phnnumb" style="">
               <span id="phone_code2_popup_error" style="color:red;"></span> <span id="country_error" style="color:red;"></span>
               <span class="ldrphone2_popup text-center" style="display: none;">
                  <h4 style="font-size:1rem;"><b>Loading......</b></h4>
               </span>
               </div>
               <div class="row formBack">
                  <div class="col-xs-3 mob-3 col-sm-4 mt-4" style="margin-top: 1.3rem !important;">
                     <?php
                        $pid = get_queried_object_id();
                        ?>
                     <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['current_captcha_form_id'] = $pid;
        ?>
        <img alt="captcha" 
             src="<?php echo get_site_url(); ?>/wp-content/themes/thegem-child/cap2.php" 
             id="captchaImg_<?php echo $pid; ?>"
             class="codeImg" style="width:100%;height: 44px;padding-left: 5px;">
                  </div>
                  <input type="hidden" name="pageid" id="pageid"  value="<?php echo $pid;?>">
                  <div class="col-xs-3 mob-2 col-sm-2 mt-4" style="margin-top: 1.3rem !important;" >
                     <p  class="btnRefresh_popup" style="cursor: grab;">
                        <img src="<?php echo get_site_url();?>/wp-content/uploads/2022/04/free-refresh-icon-3104-thumb-1.png" style="width: 55px;height: 40px;" alt="refreshImg">
                     </p>
                  </div>
                  <div class="col-xs-6 mob-6 col-sm-6 mt-4" style="margin-top: 1.3rem !important;" >
                     <div class="form-group ">
                        <input type="text" name="vercode" id="vercode2_popup" class="form-control" placeholder="Enter value">
                        <span id="vercode2_popup_error" style="color:red;"></span>
                        <input maxlength="40" name="company" value="360dc" type="hidden" size="20" type="text" /><br>
                     </div>
                  </div>
               </div>
               <span id="all_error" style="color:red;"></span>
               <button type="submit" id="referralSubmissionNewpopup"><?php echo esc_html($atts['button_label']); ?></button>
            </form>
            <!----End   Popup Form Start---->
         </div>
      </div>
   </div>
</div>

<?php
return ob_get_clean();
}

/*----End Popup Form[i]----*/


/*----Start 2nd Popup Form----*/
add_shortcode('usecaseForm_pt', 'referralProgramnewfourPopupForm_pt');
function referralProgramnewfourPopupForm_pt($atts) {
    $atts = shortcode_atts(
        array(
            'link_label' => 'Watch a Demo',
            'button_label' => 'SUBMIT'
        ),
        $atts,
      'usecaseForm_pt'
    );
    ob_start();
    $obj_id = get_queried_object_id();
    $current_url = get_permalink( $obj_id );
    include('fasterForm-shortcode-popup_form_two.php');
?>
  <style>
   button#referralSubmissionNewpt {
   font-size: 16px;
   font-style: normal;
   font-family: 'Roboto';
   background-color: #0576bc;
   border-radius: 5px;
   color: #FFF;
   border: 1px solid #FFF;
   width: 100%;
   margin: 10px 0px;
   padding:17px 0;
   }
   .error , .error_em{
   color: red;
   font-size: 14px;
   }
   button#referralSubmissionNewpt:hover{
   color: #0576bc;
   background-color: #FFFFFF;
   border-color: #0576bc;
   }
</style>
<!----Start Btn Link Two---->
<div class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow myBtnspt btndesign" role="button" id="myBtnPopup_pt">
   <span class="elementor-button-content-wrapper">
   <span class="elementor-button-text book_Demo"><?php echo esc_html($atts['link_label']); ?></span>
   </span>
</div>
<!----End Btn Link Two---->
<div id="myModalpt" class="modals" style="display:none;">
   <div style="max-width: 533px;margin: 0 auto; width: 100%;text-align: right;"><span class="close">×</span></div>
   <div class="modal-content">
      <div class="modalss">
         <div class="popup-heading">
            <h2>Watch a Demo</h2>
         </div>
         <div class="form-part">
            <!----Start Popup Form Start Two---->
            <form id="refFormNewone_pt" class="refFormNewone_pt_page">
               <input type="hidden" name="encoding" value="UTF-8" />
               <input type="hidden" name="Form2" value="Form2" />
               <input type="hidden" id="ever2" name="email_status" value="0">
               <input type="hidden" id="pver2" name="phone_status" value="0">
               <input type="hidden" name="Lead_Source_URL" value="<?php echo get_permalink();?>">
               
               <input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
               
                <input type="hidden" value="SMS_LP_4XGrowth" id="lead_source" name="lead_source" />
               <input type="hidden" name="retURL" value="https://youtu.be/LuoEhGgK2ms">
               <div class="form-flex-popup">

               <input  id="last_name2_popup_pt" maxlength="80" name="last_name" size="20" type="text" class="form-control"placeholder="Full Name" />
               <span id="last_name2_popup_pt_error" style="color:red;"></span>
               </div>
               <div class="form-flex-popup">
               <input id="email2_popup_pt" maxlength="80" name="email" size="20" class="form-control" placeholder="Work Email" onblur="verify_email2_popup_pt(this.value);">
               <span id="email2_popup_pt_error" style="color:red;"></span>
               <span class="ldremailchk2_pt text-center" style="display: none ">
                  <h4 style="font-size:1rem;"><b>Loading......</b></h4>
               </span>
               </div>
               <div class="form-flex-popup">
               <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Phone Number" id="phone_code2_pt" name="phone" onblur="verify_phone_contact_popup_pt(this.value)" type="tel" class="form-control wpcf7-text focus-on phnnumb" style="">
               <span id="phone_code2_pt_error" style="color:red;"></span> <span id="country_error" style="color:red;"></span>
               <span class="ldrphone2_pt text-center" style="display: none;">
                  <h4 style="font-size:1rem;"><b>Loading......</b></h4>
               </span>
               </div>
               <div class="row formBack">
                  <div class="col-xs-3 mob-3 col-sm-4 mt-4" style="margin-top: 1.3rem !important;">
                     <?php
                        $pid = get_queried_object_id();
                        ?>
                     <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['current_captcha_form_id'] = $pid;
        ?>
        <img alt="captcha" 
             src="<?php echo get_site_url(); ?>/wp-content/themes/thegem-child/cap2.php" 
             id="captchaImg_<?php echo $pid; ?>"
             class="codeImg" style="width:100%;height: 44px;padding-left: 5px;">
                  </div>
                  <input type="hidden" name="pageid" id="pageid"  value="<?php echo $pid;?>">
                  <div class="col-xs-3 mob-2 col-sm-2 mt-4" style="margin-top: 1.3rem !important;" >
                     <p  class="btnRefresh_pt" style="cursor: grab;">
                        <img src="<?php echo get_site_url();?>/wp-content/uploads/2022/04/free-refresh-icon-3104-thumb-1.png" style="width: 55px;height: 40px;" alt="refreshImg">
                     </p>
                  </div>
                  <div class="col-xs-6 mob-6 col-sm-6 mt-4" style="margin-top: 1.3rem !important;">
                     <div class="form-group ">
                        <input type="text" name="vercode" id="vercode2_pt" class="form-control" placeholder="Enter value">
                        <span id="vercode2_pt_error" style="color:red;"></span>
                        <input maxlength="40" name="company" value="360dc" type="hidden" size="20" type="text" /><br>
                     </div>
                  </div>
               </div>
               <span id="all_error" style="color:red;"></span>
               <button type="submit" id="referralSubmissionNewpt"><?php echo esc_html($atts['button_label']); ?></button>
            </form>
            <!----End   Popup Form End---->
         </div>
      </div>
   </div>
</div>
<?php
return ob_get_clean();
}
/*----End 2nd Popup Form----*/


/*----Start 3rd Popup Form----*/
add_shortcode('usecaseForm_third_popup', 'referralProgramnewfourPopupForm_third_popup');
function referralProgramnewfourPopupForm_third_popup($atts) {
    $atts = shortcode_atts(
        array(
            'link_label' => 'SCHEDULE A DEMO NOW',
            'button_label' => 'SUBMIT'
        ),
        $atts,
      'usecaseForm_third_popup'
    );
    ob_start();
    $obj_id = get_queried_object_id();
    $current_url = get_permalink( $obj_id );
    include('fasterForm-shortcode-popup_form_three.php');
?>
  <style>
   button#referralSubmissionNewptt {
   font-size: 21px;
   font-style: normal;
   font-family: 'Roboto';
   background-color: #69A84F;
   border-radius: 5px;
   color: #FFF;
   border: 1px solid #FFF;
   width: 100%;
   margin: 10px 0px;
   }
   .error , .error_em{
   color: red;
   font-size: 14px;
   }
   button#referralSubmissionNewptt:hover{
   color: #69A84F;
   background-color: #FFFFFF;
   border-color: #69A84F;
   }
</style>
<!----Start Btn Link Three---->
<div class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow myBtnsptt btndesign" role="button" id="myBtnPopup_ptt">
   <span class="elementor-button-content-wrapper">
   <span class="elementor-button-text book_Demo"><?php echo esc_html($atts['link_label']); ?></span>
   </span>
</div>
<!----End Btn Link Three---->
<div id="myModalptt" class="modals" style="display:none;">
   <div style="max-width: 533px;margin: 0 auto; width: 100%;text-align: right;"><span class="close">×</span></div>
   <div class="modal-content">
      <div class="modalss">
         <div class="popup-heading">
            <h2>BOOK A DEMO</h2>
         </div>
         <div class="form-part">
            <!----Start Popup Form Start Three---->
            <form id="refFormNewone_ptt" class="refFormNewone_ptt_page">
               <input type="hidden" name="encoding" value="UTF-8" />
               <input type="hidden" name="Form2" value="Form2" />
               <input type="hidden" id="ever2" name="email_status" value="0">
               <input type="hidden" id="pver2" name="phone_status" value="0">
               <input type="hidden" name="Lead_Source_URL" value="<?php echo get_permalink();?>">
               <?php 
                  $pageid = get_queried_object_id();
                  if($pageid == 56943 || $pageid == "56943"){ ?>
                  
                  <input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
                  
               <input type="hidden" value="VA SERVICE PAGE WC" id="lead_source" name="lead_source" />
               <?php }
                  elseif($pageid == 59780 || $pageid == "59780"){?>
               <input type="hidden" value="Email-Sync SERVICE PAGE WC" id="lead_source" name="lead_source" />
               <?php
                  }
                  
                     elseif($pageid == 59783 || $pageid == "59783"){?>
               <input type="hidden" value="Product Page | Mass-mailer | DC Website" id="lead_source" name="lead_source" />
               <?php
                  }
                  
                  
                  else{?>
                  
                  <input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
       
               <input type="hidden" value="Product Page | Whatssync | DC Website" id="lead_source" name="lead_source" />
               <?php }?>
               <input type=hidden name="retURL" value="">
               <div class="form-flex-popup">
               <input  id="last_name2_popup_ptt" maxlength="80" name="last_name" size="20" type="text" class="form-control"placeholder="Full Name" />
               <span id="last_name2_popup_ptt_error" style="color:red;"></span>
               </div>
               <div class="form-flex-popup">
               <input id="email2_popup_ptt" maxlength="80" name="email" size="20" class="form-control" placeholder="Work Email" onblur="verify_email2_popup_ptt(this.value);">
               <span id="email2_popup_ptt_error" style="color:red;"></span>
               <span class="ldremailchk2_ptt text-center" style="display: none ">
                  <h4 style="font-size:1rem;"><b>Loading......</b></h4>
               </span>
               </div>
               <div class="form-flex-popup">
               <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Phone Number" id="phone_code2_ptt" name="phone" onblur="verify_phone_contact_popup_ptt(this.value)" type="tel" class="form-control wpcf7-text focus-on phnnumb" style="">
               <span id="phone_code2_ptt_error" style="color:red;"></span> <span id="country_error" style="color:red;"></span>
               <span class="ldrphone2_ptt text-center" style="display: none;">
                  <h4 style="font-size:1rem;"><b>Loading......</b></h4>
               </span>
               </div>
               <div class="row formBack">
                  <div class="col-xs-3 mob-3 col-sm-4 mt-4" style="margin-top: 1.3rem !important;">
                     <?php
                        $pid = get_queried_object_id();
                        ?>
                     <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['current_captcha_form_id'] = $pid;
        ?>
        <img alt="captcha" 
             src="<?php echo get_site_url(); ?>/wp-content/themes/thegem-child/cap2.php" 
             id="captchaImg_<?php echo $pid; ?>"
             class="codeImg" style="width:100%;height: 44px;padding-left: 5px;">
                  </div>
                  <input type="hidden" name="pageid" id="pageid"  value="<?php echo $pid;?>">
                  <div class="col-xs-3 mob-2 col-sm-2 mt-4" style="margin-top: 1.3rem !important;" >
                     <p  class="btnRefresh_ptt" style="cursor: grab;">
                        <img src="<?php echo get_site_url();?>/wp-content/uploads/2022/05/free-refresh-icon-3104-thumb-1.png" style="width: 200px;height: 40px;" alt="refreshImg">
                     </p>
                  </div>
                  <div class="col-xs-6 mob-6 col-sm-6 mt-4">
                     <div class="form-group ">
                        <input type="text" name="vercode" id="vercode2_ptt" class="form-control" placeholder="Enter value">
                        <span id="vercode2_ptt_error" style="color:red;"></span>
                        <input maxlength="40" name="company" value="360dc" type="hidden" size="20" type="text" /><br>
                     </div>
                  </div>
               </div>
               <span id="all_error" style="color:red;"></span>
               <button type="submit" id="referralSubmissionNewptt"><?php echo esc_html($atts['button_label']); ?></button>
            </form>
            <!----End Popup Form End---->
         </div>
      </div>
   </div>
</div>
<?php
return ob_get_clean();
}
/*----End 3rd Popup Form----*/
/*----Start 4th Popup Form----*/
add_shortcode('usecaseForm_forth_popup', 'referralProgramnewfourPopupForm_forth_popup');
function referralProgramnewfourPopupForm_forth_popup($atts) {
    $atts = shortcode_atts(
        array(
            'link_label' => 'SCHEDULE A DEMO NOW',
            'button_label' => 'SUBMIT'
        ),
        $atts,
      'usecaseForm_forth_popup'
    );
    ob_start();
    $obj_id = get_queried_object_id();
    $current_url = get_permalink( $obj_id );
    include('fasterForm-shortcode-popup_form_four.php');
?>
  <style>
   button#referralSubmissionNewforth {
   font-size: 21px;
   font-style: normal;
   font-family: 'Roboto';
   background-color: #69A84F;
   border-radius: 5px;
   color: #FFF;
   border: 1px solid #FFF;
   width: 100%;
   margin: 10px 0px;
   }
   .error , .error_em{
   color: red;
   font-size: 14px;
   }
   button#referralSubmissionNewforth:hover{
   color: #69A84F;
   background-color: #FFFFFF;
   border-color: #69A84F;
   }
</style>
<!----Start Btn Link Three---->
<div class="elementor-button-link elementor-button elementor-size-sm elementor-animation-grow myBtnsforth btndesign" role="button" id="myBtnPopup_forth">
   <span class="elementor-button-content-wrapper">
   <span class="elementor-button-text book_Demo"><?php echo esc_html($atts['link_label']); ?></span>
   </span>
</div>
<!----End Btn Link Three---->
<div id="myModalforth" class="modals" style="display:none;">
   <div style="max-width: 533px;margin: 0 auto; width: 100%;text-align: right;"><span class="close">×</span></div>
   <div class="modal-content">
      <div class="modalss">
         <div class="popup-heading">
            <h2>BOOK A DEMO</h2>
         </div>
         <div class="form-part">
            <!----Start Popup Form Start Three---->
            <form id="refFormNewone_forth" class="refFormNewone_forth_page">
               <input type="hidden" name="encoding" value="UTF-8" />
               <input type="hidden" name="Form2" value="Form2" />
               <input type="hidden" id="ever2" name="email_status" value="0">
               <input type="hidden" id="pver2" name="phone_status" value="0">
               <input type="hidden" name="Lead_Source_URL" value="<?php echo get_permalink();?>">
               <?php 
                  $pageid = get_queried_object_id();
                  if($pageid == 56943 || $pageid == "56943"){ ?>
                  
                  <input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
                  
               <input type="hidden" value="VA SERVICE PAGE WC" id="lead_source" name="lead_source" />
               <?php }
                  elseif($pageid == 59780 || $pageid == "59780"){?>
               <input type="hidden" value="Email-Sync SERVICE PAGE WC" id="lead_source" name="lead_source" />
               <?php
                  }
                  
                     elseif($pageid == 59783 || $pageid == "59783"){?>
               <input type="hidden" value="Product Page | Mass-mailer | DC Website" id="lead_source" name="lead_source" />
               <?php
                  }
                  
                  
                  else{?>
                  
                  <input type="hidden" 
	   name="First_touch_URL__c"
	   value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">
                  
               <input type="hidden" value="Product Page | Whatssync | DC Website" id="lead_source" name="lead_source" />
               <?php }?>
               <input type=hidden name="retURL" value="">
               <div class="form-flex-popup">
               <input  id="last_name2_popup_forth" maxlength="80" name="last_name" size="20" type="text" class="form-control"placeholder="Full Name" />
               <span id="last_name2_popup_forth_error" style="color:red;"></span>
               </div>
               <div class="form-flex-popup">
               <input id="email2_popup_forth" maxlength="80" name="email" size="20" class="form-control" placeholder="Work Email" onblur="verify_email2_popup_forth(this.value);">
               <span id="email2_popup_forth_error" style="color:red;"></span>
               <span class="ldremailchk2_forth text-center" style="display: none ">
                  <h4 style="font-size:1rem;"><b>Loading......</b></h4>
               </span>
               </div>
               <div class="form-flex-popup">
               <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" placeholder="Phone Number" id="phone_code2_forth" name="phone" onblur="verify_phone_contact_popup_forth(this.value)" type="tel" class="form-control wpcf7-text focus-on phnnumb" style="">
               <span id="phone_code2_forth_error" style="color:red;"></span> <span id="country_error" style="color:red;"></span>
               <span class="ldrphone2_forth text-center" style="display: none;">
                  <h4 style="font-size:1rem;"><b>Loading......</b></h4>
               </span>
               </div>
               <div class="row formBack">
                  <div class="col-xs-3 mob-3 col-sm-4 mt-4" style="margin-top: 1.3rem !important;">
                     <?php
                        $pid = get_queried_object_id();
                        ?>
                     <?php
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        $_SESSION['current_captcha_form_id'] = $pid;
        ?>
        <img alt="captcha" 
             src="<?php echo get_site_url(); ?>/wp-content/themes/thegem-child/cap2.php" 
             id="captchaImg_<?php echo $pid; ?>"
             class="codeImg" style="width:100%;height: 44px;padding-left: 5px;">
                  </div>
                  <input type="hidden" name="pageid" id="pageid"  value="<?php echo $pid;?>">
                  <div class="col-xs-3 mob-2 col-sm-2 mt-4" style="margin-top: 1.3rem !important;" >
                     <p  class="btnRefresh_forth" style="cursor: grab;">
                        <img src="<?php echo get_site_url();?>/wp-content/uploads/2022/04/free-refresh-icon-3104-thumb-1.png" style="width: 200px;height: 40px;" alt="refreshImg">
                     </p>
                  </div>
                  <div class="col-xs-6 mob-6 col-sm-6 mt-4">
                     <div class="form-group ">
                        <input type="text" name="vercode" id="vercode2_forth" class="form-control" placeholder="Enter value">
                        <span id="vercode2_forth_error" style="color:red;"></span>
                        <input maxlength="40" name="company" value="360dc" type="hidden" size="20" type="text" /><br>
                     </div>
                  </div>
               </div>
               <span id="all_error" style="color:red;"></span>
               <button type="submit" id="referralSubmissionNewforth"><?php echo esc_html($atts['button_label']); ?></button>
            </form>
            <!----End Popup Form End---->
         </div>
      </div>
   </div>
</div>
<?php
return ob_get_clean();
}
/*----End 4th Popup Form----*/






function formopenPoupscript(){
  ?>
  <script>
    jQuery(document).ready(function(){
  
      jQuery(".myBtnsPopup").click(function(){
        jQuery("#myModalPopup").show();
      });
      jQuery(".close").click(function(){
         jQuery("#myModalPopup").hide();
      });

      //-----------------2ndpopup----------
      jQuery(".myBtnspt").click(function(){
        jQuery("#myModalpt").show();
      });
      jQuery(".close").click(function(){
         jQuery("#myModalpt").hide();
      });

      //-----------------3rdpopup----------
      jQuery(".myBtnsptt").click(function(){
        jQuery("#myModalptt").show();
      });
      jQuery(".close").click(function(){
         jQuery("#myModalptt").hide();
      });
      //-----------------4th-popup----------
      jQuery(".myBtnsforth").click(function(){
        jQuery("#myModalforth").show();
      });
      jQuery(".close").click(function(){
         jQuery("#myModalforth").hide();
      });



    });
  
    let modalPopup = document.getElementById("myModalPopup");
    let btnPopup   = document.getElementsByClassName("myBtnsPopup")[0];
    let spanPopup = document.getElementsByClassName("close")[0];
  
    a.onclick = function() {
      modalPopup.style.display = "block";
    }
    
    spanPopup.onclick = function() 
    {
      modalPopup.style.display = "none";
    }
  
    window.onclick = function(event) {
      if (event.target == modalPopup) {
        modalPopup.style.display = "none"; 
      }
    }

    //---------------------------2nd----------------------
    let modalpt = document.getElementById("myModalpt");
    let btnpt   = document.getElementsByClassName("myBtnspt")[0];
    let spanpt = document.getElementsByClassName("close")[0];
    a.onclick = function() {
      modalpt.style.display = "block";
    }
    
    spanpt.onclick = function() 
    {
      modalpt.style.display = "none";
    }
  
    window.onclick = function(event) {
      if (event.target == modalpt) {
        modalpt.style.display = "none"; 
      }
    }

    //---------------------------3rd----------------------
    let modalptt = document.getElementById("myModalptt");
    let btnptt   = document.getElementsByClassName("myBtnsptt")[0];
    let spanptt = document.getElementsByClassName("close")[0];
    a.onclick = function() {
      modalptt.style.display = "block";
    }
    spanptt.onclick = function() 
    {
      modalptt.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modalptt) {
        modalptt.style.display = "none"; 
      }
    }
    //---------------------------4th----------------------
    let modalforth = document.getElementById("myModalforth");
    let btnforth   = document.getElementsByClassName("myBtnsforth")[0];
    let spanforth = document.getElementsByClassName("close")[0];
    a.onclick = function() {
      modalforth.style.display = "block";
    }
    spanforth.onclick = function() 
    {
      modalforth.style.display = "none";
    }
    window.onclick = function(event) {
      if (event.target == modalforth) {
        modalforth.style.display = "none"; 
      }
    }
  </script>
  <?php
   }
  add_action('wp_footer','formopenPoupscript');
/*----End Popup Form[i]----*/
 

function add_clickcease_tracking_script() {
    ?>
    <!-- ClickCease.com tracking -->
    <script type='text/javascript'>
        var script = document.createElement('script');
        script.async = true; script.type = 'text/javascript';
        var target = 'https://www.clickcease.com/monitor/stat.js';
        script.src = target;
        var elem = document.head;
        elem.appendChild(script);
    </script>
    <noscript>
        <a href='https://www.clickcease.com' rel='nofollow'>
            <img src='https://monitor.clickcease.com' alt='ClickCease'/>
        </a>
    </noscript>
    <!-- End ClickCease.com tracking -->
    <?php
}
add_action('wp_body_open', 'add_clickcease_tracking_script');

function enqueue_custom_script_with_domains() {
    global $wpdb;
    $table = 'listed_domains';
    $results = $wpdb->get_col("SELECT domain FROM $table WHERE status = 'Active'");

    wp_enqueue_script('custom-own', get_stylesheet_directory_uri() . '/js/customs-own.js', array('jquery'), null, true);

    wp_localize_script('custom-own', 'myVars', array(
        'blockedDomains' => $results
    ));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_script_with_domains');

// Deepak code ends



function custom_dynamic_blog_route() {
    // Bail early if it's the homepage or any WordPress-defined front page
    if (is_front_page() || is_home()) {
        return;
    }

    global $wp;
    $slug = $wp->request;

    // Bail if slug is empty (homepage or invalid route)
    if (empty($slug)) {
        return;
    }

    // Only proceed if the URL is not already under /blog/
    if (!preg_match('/^blog\//', $slug)) {
        // Check if a blog post exists with this slug
        $post = get_page_by_path($slug, OBJECT, 'post');

        if ($post instanceof WP_Post) {
            // Make sure this is a real 'post' type (not a page or CPT)
            if ($post->post_type === 'post') {
                // Redirect to /blog/{slug}
                wp_redirect(site_url('/blog/' . $slug), 301);
                exit;
            }
        }
    }
}
add_action('template_redirect', 'custom_dynamic_blog_route');


function add_dynamic_blogposting_schema() {
    if (is_single()) {
        global $post;

        $post_id = $post->ID;
        $post_url = get_permalink($post_id);

        // Get SEO title if available (works with Yoast and other plugins)
        $seo_title = get_post_meta($post_id, '_yoast_wpseo_title', true);
        if (!$seo_title) {
            $seo_title = get_the_title($post_id); // fallback to post title
        }

        $post_description = get_the_excerpt($post_id);
        $post_image = get_the_post_thumbnail_url($post_id, 'full');
        $post_date = get_the_date('c', $post_id);

        // Default image fallback
        if (!$post_image) {
            $post_image = 'https://360smsapp.com/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp';
        }

        $schema = [
            "@context" => "https://schema.org",
            "@type" => "BlogPosting",
            "mainEntityOfPage" => [
                "@type" => "WebPage",
                "@id" => $post_url
            ],
            "headline" => wp_strip_all_tags($seo_title),
            "description" => wp_strip_all_tags($post_description),
            "image" => $post_image,
            "author" => [
                "@type" => "Organization",
                "name" => "360 SMS APP",
                "url" => "https://360smsapp.com/"
            ],
            "publisher" => [
                "@type" => "Organization",
                "name" => "360 SMS APP",
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => "https://360smsapp.com/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp"
                ]
            ],
            "datePublished" => $post_date
        ];

        echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>';
    }
}
add_action('wp_head', 'add_dynamic_blogposting_schema');



// slash URL
add_action('template_redirect', function() {
    if (!is_404() && !is_admin()) {
        $current_url = $_SERVER['REQUEST_URI'];
        // Skip query strings
        $path = parse_url($current_url, PHP_URL_PATH);
        $query = isset($_SERVER['QUERY_STRING']) && $_SERVER['QUERY_STRING'] ? '?' . $_SERVER['QUERY_STRING'] : '';

        if (substr($path, -1) !== '/') {
            wp_redirect(home_url($path . '/') . $query, 301);
            exit;
        }
    }
});

// Dynamic schema for Homepage aand service pages
add_action('wp_head', 'my_dynamic_schema_yoastseo');

function my_dynamic_schema_yoastseo()
{
  if (is_page('blog'))
    return;
  $page_id = get_queried_object_id();
  if (!$page_id)
    return;

  // Fetch Rank Math meta
  // $title = get_post_meta($page_id, 'rank_math_title', true);
  // $desc = get_post_meta($page_id, 'rank_math_description', true);
  // $url = get_post_meta($page_id, 'rank_math_canonical', true);

  $title = get_post_meta($page_id, '_yoast_wpseo_title', true);
  $desc = get_post_meta($page_id, '_yoast_wpseo_metadesc', true);
  $url = get_post_meta($page_id, '_yoast_wpseo_canonical', true);

  // Fallbacks if Rank Math meta is empty
  if (empty($title))
    $title = get_the_title($page_id);
  if (empty($desc))
    $desc = get_the_excerpt($page_id);
  if (empty($url))
    $url = get_permalink($page_id);


  if (is_front_page()) {
    // Output
    // echo 'Title: ' . esc_html( $title ) . '<br>';
    // echo 'URL: ' . esc_url( $url ) . '<br>';
    // echo 'Description: ' . esc_html( $desc );


    ?>
        <script type="application/ld+json">
            {
            "@context": "https://schema.org",
            "@graph": [
            {
            "@type": "WebPage",
            "name": "<?php echo esc_js($title); ?>",
            "url": "<?php echo esc_url($url); ?>",
            "description": "<?php echo esc_js($desc); ?>",
            "isPartOf": {
            "@type": "WebSite",
            "name": "360 SMS App",
            "url": "https://360smsapp.com/"
            },
            "publisher": {
            "@id": "https://360smsapp.com/#organization"
            }
            },
            {
            "@type": "Organization",
            "@id": "https://360smsapp.com/#organization",
            "name": "360 SMS App",
            "description": "Salesforce sms messaging solution by 360 sms App. Now businesses can send SMS From Salesforce to communicate effectively with clients",
            "url": "https://360smsapp.com/",
            "logo": "https://360smsapp.com/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp",
            "contactPoint": {
                    "@type": "ContactPoint",
                    "telephone": [
                "+44 740 327 9473",
                "+61 48885 3632",
                "+91 806 902 7849",
                 "+1 323 641 4417"
              ],
                    "contactType": "customer service",
                    "email": "care@360smsapp.com",
                    "contactOption": "",
                    "areaServed": "",
                    "availableLanguage": null
                },
                "address": {
                    "@type": "PostalAddress",
                    "addressCountry": "US",
                    "addressLocality": "1968 S. Coast Hwy #1412, Laguna Beach ",
                    "addressRegion": "California",
                    "postalCode": "92651",
                    "streetAddress": "1968 S. Coast Hwy #1412, Laguna Beach CA 92651"
                },
            "founder": {
            "@type": "Person",
            "name": "Siddharth Sehgal",
            "url": "https://www.linkedin.com/in/sid360degreecloud/"
            },
            "knowsAbout": [
            {
            "@type": "Product",
            "name": "Salesforce SMS App",
            "alternateName": 	["Salesforce Messaging App","Salesforce Messaging Software","SMS App for Salesforce","Salesforce SMS Marketing","Salesforce SMS Integration","Salesforce SMS API","Salesforce Appexchange SMS"],
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.89,
            "ratingCount": 1241,
            "bestRating": 5,
            "worstRating": 1
            }
            },
            
            {
            "@type": "Product",
            "name": "Salesforce Texting App",
            "alternateName": ["Salesforce Text Messaging App","Salesforce Texting Software","Texting App for Salesforce","Salesforce Text Marketing","Salesforce Text App Integration","Salesforce Text API","Salesforce Appexchange Text"],
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.89,
            "ratingCount": 1241,
            "bestRating": 5,
            "worstRating": 1
            }
            },
            {
            "@type": "Product",
            "name": "Salesforce MMS App",
            "alternateName": ["MMS App for Salesforce","Salesforce MMS Software","Salesforce MMS Marketing","Salesforce MMS App Integration","Salesforce MMS API","Salesforce Appexchange MMS"],
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.89,
            "ratingCount": 1241,
            "bestRating": 5,
            "worstRating": 1
            }
            },
            {
            "@type": "Product",
            "name": "Salesforce Telephony Integration",
            "alternateName": ["Salesforce Telephony Solutions","Salesforce Telephony App","Call Center Integration Software","Salesforce Telephony Solutions","Salesforce CTI Integration"]
            ,
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.89,
            "ratingCount": 1241,
            "bestRating": 5,
            "worstRating": 1
            }
            },
            {
            "@type": "Product",
            "name": "Salesforce WhatsApp",
            "alternateName": ["Salesforce WhatsApp Integration","Salesforce WhatsApp Marketing","WhatsApp Integration for Salesforce","Custom Salesforce WhatsApp Integration","Salesforce WhatsApp Messaging"],
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.89,
            "ratingCount": 1241,
            "bestRating": 5,
            "worstRating": 1
            }
            },
            {
            "@type": "Product",
            "name": "Salesforce Ringless Voicemail",
            "alternateName": ["Salesforce Ringless Voicemail App","Salesforce Voicemail Messaging","Voicemail App for Salesforce","Salesforce Voicemail Integration","Salesforce Voicemail Marketing"],
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.89,
            "ratingCount": 1241,
            "bestRating": 5,
            "worstRating": 1
            }
            },
            {
            "@type": "Product",
            "name": "Salesforce Facebook Messenger",
            "alternateName": ["Salesforce Facebook Integration","Salesforce Facebook Marketing","Facebook Messenger for Salesforce"],
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.89,
            "ratingCount": 1241,
            "bestRating": 5,
            "worstRating": 1
            }
            },
            {
            "@type": "Product",
            "name": "Salesforce WeChat",
            "alternateName": ["Salesforce WeChat Integration","Salesforce WeChat Marketing","Salesforce WeChat Messaging","Wechat for Salesforce","Salesforce Wechat App"],
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.89,
            "ratingCount": 1241,
            "bestRating": 5,
            "worstRating": 1
            }
            },
            {
            "@type": "Product",
            "name": "Salesforce Instagram",
            "alternateName": ["Salesforce Instagram Integration","Salesforce Instagram Marketing","Instagram Integration for Salesforce","Custom Salesforce Instagram Integration","Salesforce Instagram Messaging"],
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.89,
            "ratingCount": 1241,
            "bestRating": 5,
            "worstRating": 1
            }
            },
            {
            "@type": "Product",
            "name": "Salesforce Viber",
            "alternateName": ["Salesforce Viber Integration","Salesforce Viber Marketing","Viber Integration for Salesforce","Salesforce Viber Messaging"],
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.89,
            "ratingCount": 1241,
            "bestRating": 5,
            "worstRating": 1
            }
            },
            {
            "@type": "Product",
            "name": "Salesforce Kakao",
            "alternateName": ["Salesforce Kakao Integration","Salesforce Kakao Marketing","Kakao Integration for Salesforce","Salesforce Kakao Messaging"],
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.89,
            "ratingCount": 1241,
            "bestRating": 5,
            "worstRating": 1
            }
            },
            {
            "@type": "Product",
            "name": "Salesforce Zalo",
            "alternateName": ["Salesforce Zalo Integration","Salesforce Zalo Marketing","Zalo Integration for Salesforce","Salesforce Zalo Messaging"],
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.89,
            "ratingCount": 1241,
            "bestRating": 5,
            "worstRating": 1
            }
            },
            {
            "@type": "Product",
            "name": "Salesforce Line",
            "alternateName": ["Salesforce Line Integration","Salesforce Line Marketing","Line Integration for Salesforce","Salesforce Line Messaging"],
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.89,
            "ratingCount": 1241,
            "bestRating": 5,
            "worstRating": 1
            }
            },
            {
            "@type": "Product",
            "name": "Short codes",
            "alternateName": ["Short codes for SMS","SMS Short codes for Salesforce","Short Code App","Salesforce Short codes Solutions"],
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.89,
            "ratingCount": 1241,
            "bestRating": 5,
            "worstRating": 1
            }
            },
            {
            "@type": "Product",
            "name": "Verify the Phone",
            "alternateName": ["Salesforce Phone Number Verification","SMS Identity Verification","Identity Verification Salesforce","Phone Verification in Salesforce"],
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.89,
            "ratingCount": 1241,
            "bestRating": 5,
            "worstRating": 1
            }
            },
            {
            "@type": "Product",
            "name": "Salesforce Chatbot",
            "alternateName": ["Salesforce Chatbot Integration","Salesforce Texting Chatbot","Salesforce Chatbot Solutions","Chatbot for Salesforce"],
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": 4.89,
            "ratingCount": 1241,
            "bestRating": 5,
            "worstRating": 1
            }
            }
            ],
            "parentOrganization": {
            "@type": "Organization",
            "name": "360 Degree Cloud",
            "url": "https://360degreecloud.com/",
            "description": "360 Degree Cloud is a registered Salesforce Summit and ISV Partner with 12+ years of experience in delivering Salesforce solutions.",
            "sameAs": [
            "https://www.facebook.com/360DegreeCloud/",
            "https://x.com/360degreecloud",
            "https://in.linkedin.com/company/360-degree-cloud",
            "https://www.instagram.com/360_degreecloud/?igshid=YmMyMTA2M2Y%3D",
            "https://www.youtube.com/@360degreecloud6"
            ]
            },
            "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.89",
            "ratingCount": "1241",
            "bestRating": "5",
            "worstRating": "1"
            }
            }
            ]
            }
            </script>
      <?php } elseif (is_page()) {

    // Output
    // echo 'Title: ' . esc_html( $title ) . '<br>';
    // echo 'URL: ' . esc_url( $url ) . '<br>';
    // echo 'Description: ' . esc_html( $desc );
    ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [

    {
      "@type": "Organization",
      "@id": "https://360smsapp.com/#organization",
      "name": "360 SMS App",
      "url": "https://360smsapp.com/",
      "logo": {
        "@type": "ImageObject",
        "url": "https://360smsapp.com/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp"
      },
      "description": "Salesforce SMS messaging solution by 360 SMS App. Businesses can send SMS from Salesforce to communicate effectively with clients.",
      "sameAs": [
        "https://www.facebook.com/360SMSApp/",
        "https://x.com/360smsapp",
        "https://www.linkedin.com/company/360smsapp/",
        "https://www.instagram.com/360smsapp/?hl=en",
        "https://www.youtube.com/@360smsapp8"
      ],
      "contactPoint": {
        "@type": "ContactPoint",
        "contactType": "customer service",
        "telephone": [
          "+44 740 327 9473",
          "+61 48885 3632",
          "+91 806 902 7849",
          "+1 323 641 4417"
        ],
        "email": "care@360smsapp.com"
      },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "1968 S. Coast Hwy #1412",
        "addressLocality": "Laguna Beach",
        "addressRegion": "CA",
        "postalCode": "92651",
        "addressCountry": "US"
      },
      "founder": {
        "@type": "Person",
        "name": "Siddharth Sehgal",
        "url": "https://www.linkedin.com/in/sid360degreecloud/"
      }
    },

    {
      "@type": "WebSite",
      "@id": "https://360smsapp.com/#website",
      "url": "https://360smsapp.com/",
      "name": "360 SMS App",
      "publisher": {
        "@id": "https://360smsapp.com/#organization"
      },
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://360smsapp.com/appxSearchKeywordResults?keywords={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    },

    {
      "@type": "WebPage",
      "@id": "<?php echo esc_url($url); ?>#webpage",
      "url": "<?php echo esc_url($url); ?>",
      "name": "<?php echo esc_js($title); ?>",
      "description": "<?php echo esc_js($desc); ?>",
      "isPartOf": {
        "@id": "https://360smsapp.com/#website"
      },
      "publisher": {
        "@id": "https://360smsapp.com/#organization"
      }
    },

    {
      "@type": "SoftwareApplication",
      "@id": "<?php echo esc_url($url); ?>#softwareapplication",
      "name": "<?php echo esc_js($title); ?>",
      "description": "<?php echo esc_js($desc); ?>",
      "url": "<?php echo esc_url($url); ?>",
      "applicationCategory": "BusinessApplication",
      "operatingSystem": [
        "Windows",
        "macOS"
      ],
      "accessibilityHazard": [
        "noFlashingHazard",
        "noMotionSimulationHazard",
        "noSoundHazard"
      ],
      "accessMode": [
        "textual",
        "visual"
      ],
      "image": {
        "@type": "ImageObject",
        "url": "https://360smsapp.com/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp",
        "width": 231,
        "height": 198
      },
      "publisher": {
        "@id": "https://360smsapp.com/#organization"
      },
      "mainEntityOfPage": {
        "@id": "<?php echo esc_url($url); ?>#webpage"
      }
    },

    {
      "@type": "Product",
      "@id": "<?php echo esc_url($url); ?>#product",
      "name": "<?php echo esc_js($title); ?>",
      "description": "<?php echo esc_js($desc); ?>",
      "image": "https://360smsapp.com/wp-content/uploads/2022/01/logo_b046c853129b1637fa48a6e91c6a7b17_1x.webp",
      "url": "<?php echo esc_url($url); ?>",
      "brand": {
        "@id": "https://360smsapp.com/#organization"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.89",
        "bestRating": "5",
        "worstRating": "1",
        "reviewCount": "1241"
      }
    },

    {
      "@type": "BreadcrumbList",
      "@id": "<?php echo esc_url($url); ?>#breadcrumb",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "https://360smsapp.com/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "<?php echo esc_js($title); ?>",
          "item": "<?php echo esc_url($url); ?>"
        }
      ]
    }

  ]
}
</script>
      <?php }
}


// Register Webinar Post Type and Category
function register_webinar_post_type()
{
    // Custom Post Type
    register_post_type('webinar', array(
        'labels' => array(
            'name' => 'Webinars',
            'singular_name' => 'Webinar',
            'add_new_item' => 'Add New',
            'edit_item' => 'Edit Webinar',
            'new_item' => 'New Webinar',
            'view_item' => 'View Webinar',
            'search_items' => 'Search Webinars',
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array(
            'slug' => 'webinar',
            'with_front' => false
        ),
        'menu_icon' => 'dashicons-video-alt3',
        'supports' => array('title', 'editor', 'thumbnail', 'excerpt')
    ));

    // Custom Taxonomy (Category)
    register_taxonomy('webinar_category', 'webinar', array(
        'label' => 'Categories',
        'hierarchical' => true,
        'rewrite' => array(
            'slug' => 'webinar-category',
            'with_front' => false
        ),
    ));
}
add_action('init', 'register_webinar_post_type');

// Webinar Ajax fileter
add_action('wp_ajax_filter_webinars', 'filter_webinars_ajax');
add_action('wp_ajax_nopriv_filter_webinars', 'filter_webinars_ajax');
function filter_webinars_ajax()
{
    $paged = isset($_POST['paged']) ? max(1, intval($_POST['paged'])) : 1;
    $categories = isset($_POST['categories']) ? array_map('sanitize_text_field', (array) $_POST['categories']) : [];
    
    // Categories to exclude
    $exclude_categories = ['upcoming', 'previous'];
    
    $args = [
        'post_type' => 'webinar',
        'posts_per_page' => 9,
        'paged' => $paged,
        'post_status' => 'publish'
    ];
    
    // Build tax_query based on conditions
    $tax_query = ['relation' => 'AND'];
    
    // If categories are selected, include them
    if (!empty($categories)) {
        $tax_query[] = [
            'taxonomy' => 'webinar_category',
            'field' => 'slug',
            'terms' => $categories,
            'operator' => 'IN'
        ];
    }
    
    // Always exclude specific categories
    $tax_query[] = [
        'taxonomy' => 'webinar_category',
        'field' => 'slug',
        'terms' => $exclude_categories,
        'operator' => 'NOT IN'
    ];
    
    // Only add tax_query if we have conditions
    if (count($tax_query) > 1) {
        $args['tax_query'] = $tax_query;
    }

    $q = new WP_Query($args);
    if ($q->have_posts()) {
        echo '<div class="row g-3">';
        $i = 0; // ← ADD THIS
        while ($q->have_posts()) {
            $q->the_post();

            $img = get_the_post_thumbnail_url(get_the_ID(), 'large');
            $date = get_the_date('M j, Y');
            $terms = get_the_terms(get_the_ID(), 'webinar_category');
            $badge = (!is_wp_error($terms) && !empty($terms)) ? $terms[0]->name : 'Webinar';
            $download = function_exists('get_field') ? get_field('download_link', get_the_ID()) : '';
            // $download = "abc";
            $cta_href = $download ? esc_url($download) : esc_url(get_permalink());
            $title = esc_html(get_the_title());
            $excerpt = wp_trim_words(get_the_excerpt(get_the_ID()), 20, '...');
            $card_theme = ($i % 2 === 0) ? 'card--dark' : 'card--light';
            $i++; // ← INCREMENT COUNTER
            ?>

            <div class="col-lg-4">
                <a href="<?php the_permalink(); ?>" class="text-decoration-none d-block h-100" target="_blank" ;>
                    <div class="module-card <?php echo esc_attr($card_theme); ?> h-100">
                        <div class="d-flex flex-column align-items-start">
                            <span aria-hidden="true">
                                <img src="<?php echo ($card_theme === 'card--light')
                                    ? 'https://360degreecloud.com/wp-content/uploads/2025/10/360-Degree-Cloud-logo-2.png'
                                    : 'https://360degreecloud.com/wp-content/uploads/2025/10/360DC_White_logo-01.png'; ?>"
                                    alt="360DC Logo" width="80">
                            </span>
                            <div class="d-flex w-100 mt-4">
                                <div class="fw-semibold module-title my-auto">Grow with 360 SMS</div>
                                <?php if ($badge): ?>
                                    <span class="module-badge ms-3"><?php echo esc_html($badge); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>
                        <h4 class="module-title mt-4"><?php echo esc_html(mb_strimwidth($title, 0, 100, '...')); ?></h4>
                        <div class="speaker-box mt-4">
                            <div class="speaker-tile text-center">
                                <img src="https://360smsapp.test360degreecloud.in/wp-content/uploads/2025/12/sid-1.webp" />
                                <p class=" text-center mt-2"><strong>Siddharth Sehgal</strong><br>CEO – 360 Degree Cloud & 360 SMS
                                    App </p>
                            </div>
                            <div class="speaker-tile text-center">
                                <img src="https://360smsapp.test360degreecloud.in/wp-content/uploads/2025/12/sonia-1.webp" />
                                <p class="text-center mt-2"><strong>Sonia Gupta</strong><br>VP – Marketing</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        <?php }
        echo '</div>';

        // Pagination
        $total_pages = (int) $q->max_num_pages;
        if ($total_pages > 1) {
            echo '<nav class="webinar-pagination d-flex justify-content-center align-items-center mt-4">';
            echo '<ul class="pagination mb-0">';
            $prev_disabled = ($paged <= 1) ? 'disabled' : '';
            echo '<li class="page-item ' . $prev_disabled . '"><button class="page-link webinar-page-btn" data-page="' . max(1, $paged - 1) . '">&laquo; Back</button></li>';
            for ($i = 1; $i <= $total_pages; $i++) {
                $active = ($i === $paged) ? 'active' : '';
                echo '<li class="page-item ' . $active . '"><button class="page-link webinar-page-btn" data-page="' . $i . '">' . $i . '</button></li>';
            }
            $next_disabled = ($paged >= $total_pages) ? 'disabled' : '';
            echo '<li class="page-item ' . $next_disabled . '"><button class="page-link webinar-page-btn" data-page="' . min($total_pages, $paged + 1) . '">Next &raquo;</button></li>';
            echo '</ul></nav>';
        }
    } else {
        echo '<p class="text-center text-muted py-5">No webinars found.</p>';
    }
    wp_reset_postdata();
    die();
}

// Enqueue JS & CSS
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_script('webinar-filter', get_stylesheet_directory_uri() . '/js/webinar-ajax.js');
    wp_localize_script('webinar-filter', 'webinar', ['ajaxurl' => admin_url('admin-ajax.php')]);
});




/**
 * Webinar Level 3 Interceptor - Proper WordPress Way
 */
add_action('template_redirect', function () {
    $request_uri = $_SERVER['REQUEST_URI'];
    $found_webinar_id = 0;
    
    // A. Check for custom slug: /webinar/some-slug/
    if (preg_match('/\/webinar\/([^\/\?]+)/i', $request_uri, $matches)) {
        $url_slug = strtolower(trim($matches[1]));
        
        // Don't intercept the main archive if it's exactly /webinar/
        if ($url_slug !== 'webinar') {
            $webinars = get_posts([
                'post_type' => array('webinar', 'webniar'),
                'posts_per_page' => -1,
                'suppress_filters' => true
            ]);
            
            foreach ($webinars as $w) {
                $l3_title = get_field('level3_title', $w->ID);
                if ($l3_title && sanitize_title(trim($l3_title)) === $url_slug) {
                    $found_webinar_id = $w->ID;
                    break;
                }
            }
        }
    }
    
    // B. Check for fallback: /webinar-level-3/?webinar_id=...
    if (!$found_webinar_id && strpos($request_uri, '/webinar-level-3/') !== false) {
        if (isset($_GET['webinar_id'])) {
            $found_webinar_id = intval($_GET['webinar_id']);
        }
    }
    
    // If a webinar was found, set it up properly
    if ($found_webinar_id) {
        global $wp_query;
        
        // Fix the query - don't use include/exit
        status_header(200);
        $wp_query->is_404 = false;
        $wp_query->is_singular = true;
        $wp_query->is_single = false;
        $wp_query->is_page = true;
        
        // Store the webinar ID for the template to use
        $_GET['webinar_id'] = $found_webinar_id;
        
        // Let WordPress continue normally - DON'T exit here!
    }
}, 1);

/**
 * Load custom template for webinar level 3
 */
add_filter('template_include', function ($template) {
    if (isset($_GET['webinar_id']) && intval($_GET['webinar_id']) > 0) {
        $custom_template = get_stylesheet_directory() . '/webinar level 3.php'; 
        if (file_exists($custom_template)) {
            return $custom_template;
        }
    }
    return $template;
}, 99);
add_action('wp_enqueue_scripts', function() {
    
    // Page IDs of your 40 new design pages
    $new_design_pages = [67023, 66914,66899,66897, 67127,61189,67652, 31911,61422,65679,66980,63980,65537, 66975,30472,65464,32287,67113, 66855, 67025, 67006,67035, 67045, 67052, 67049,67058,67063,67067,67065,66121, 67061,67660, 67027,67067, 66998,66873, 66996,67000,66980,67006,67035,67045,67049,67018,66991,67004,67016,67012,67014,66904,66983,66986,67008, 66988, 67037,66994, 67039, 67041, 67002, 67021, 67047, 67349,67349, 65161,67191,67127,67168, 67170, 67172, 67193, 67196, 67174, 67186]; // add all new page IDs here
    
    // ============================================
    // ALWAYS load: new header/footer CSS (all pages)
    // ============================================
    /*wp_enqueue_style(
        'new-hf-bootstrap',
        'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
        [],
        '5.3.3'
    );
    wp_enqueue_style(
        'new-hf-icons',
        'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css',
        [],
        '1.11.3'
    );
    wp_enqueue_style(
        'new-header-footer',
        get_stylesheet_directory_uri() . '/css/new-header-footer.css',
        ['new-hf-bootstrap'],
        filemtime(get_stylesheet_directory() . '/css/new-header-footer.css')
    );*/
    
    // ============================================
    // ONLY on NEW design pages: dequeue old theme CSS
    // ============================================
    if (is_page($new_design_pages)) {
        $old_handles = [
            'thegem-preloader','thegem-reset','thegem-grid','thegem-header',
            'thegem-style','thegem-child-style','thegem-widgets','thegem-new-css',
            'perevazka-css-css','thegem-custom','thegem_js_composer_front',
            'thegem-additional-blog-1','thegem-vc_elements','thegem_wp_toolbar_css',
            'parent-style','child-style','js_composer_front','jquery-fancybox',
            'elementor-icons','elementor-common','e-theme-ui-light','elementor-frontend',
            'elementor-wp-admin-bar','elementor-post-59539','elementor-gf-roboto',
            'elementor-gf-robotoslab','revslider-material-icons','revslider-basics-css',
            'rs-color-picker-css','revbuilder-ddTP','rs-roboto','tp-material-icons',
            'amp-icons','post-views-counter-frontend','wpautoterms_css',
            'wp-faq-schema-jquery-ui','omgf-frontend','malinky-ajax-pagination',
            'popup-maker-block-library-style','wp-block-library','wp-block-library-theme',
            'wp-components','wp-preferences','wp-block-editor','global-styles',
            'classic-theme-styles','custom-8iVusr9D',
        ];
        
        foreach ($old_handles as $handle) {
            wp_dequeue_style($handle);
            wp_deregister_style($handle);
        }
    }
    
}, 100);

/**
 * Shortcode: [contact_page_multi_shortcode]
 * Multi-instance contact form - safe to use multiple times per page.
 * Isolated IDs/JS; does not conflict with [contact_pageshortcode] or footer handlers.
 */



if (! function_exists('contactpageform_multi')) {
  function contactpageform_multi($atts = array())
  {
      
      if (! function_exists('cpm_get_blocked_email_domains')) {
  function cpm_get_blocked_email_domains()
  {
    return array(
      'gmail.com',
      'yahoo.com',
      'rediff.com',
      'outlook.com',
      'hotmail.com',
      'webinar.com',
      'business.com',
      'test.xyz',
      'prateek.com',
      'icloud.com',
      'qq.com',
      'google.com',
      'qualys.com',
      'fire.com',
      'gmfl.com',
      'gm.com',
      'testing.com',
      'manualtest.com',
    );
  }
}

if (! function_exists('cpm_print_assets_once')) {
  function cpm_print_assets_once()
  {
    static $printed = false;
    if ($printed) {
      return '';
    }
    $printed = true;
    ob_start();
  ?>
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css" />-->
    <!--<link rel="stylesheet" href="https://www.jqueryscript.net/demo/country-picker-flags/build/css/countrySelect.css" />-->
    <!--<script src="https://www.jqueryscript.net/demo/country-picker-flags/build/js/countrySelect.js"></script>-->
    
    <!-- Bootstrap CSS -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">-->

    <!-- Bootstrap JS Bundle -->
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>-->
    
    <!-- Google Font: Plus Jakarta Sans -->
    <!--<link rel="preconnect" href="https://fonts.googleapis.com">-->
    <!--<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
    <!--<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">-->

    <!-- keep these two static -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<script>
(function () {
  var res = [
    ['css', 'https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/16.0.8/css/intlTelInput.css'],
    ['css', 'https://www.jqueryscript.net/demo/country-picker-flags/build/css/countrySelect.css'],
    ['js',  'https://www.jqueryscript.net/demo/country-picker-flags/build/js/countrySelect.js'],
    ['css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'],
    ['js',  'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js'],
    ['css', 'https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap']
  ];
  res.forEach(function (r) {
    var isCss = r[0] === 'css', url = r[1];
    var file = url.split('/').pop().split('?')[0];            // filename = dedupe key
    var sel = isCss ? 'link[rel="stylesheet"][href*="' + file + '"]'
                    : 'script[src*="' + file + '"]';
    if (document.querySelector(sel)) return;                  // already loaded → skip
    var el = document.createElement(isCss ? 'link' : 'script');
    if (isCss) { el.rel = 'stylesheet'; el.href = url; document.head.appendChild(el); }
    else       { el.src = url; document.body.appendChild(el); }
  });
})();
</script>
    
    <style>
      /* ── CPM FORM SCOPED STYLES ─────────────────────────────────────────── */
      
      /*Form Loader Start*/
      .post_outer.show {
        display: block;
        }
       .post_outer {
        position: fixed;
        background: rgba(0,0,0,0.5);
        z-index: 999999999;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        border-radius: 4px;
        display: none;
        }
    
    		 .post_loader.show {
        display: block;
        position: absolute;
        z-index: 1001;
        opacity: 1;
        left: 50%;
        bottom: 0;
        right: 0;
        top: 50%;
        border: 8px solid #f3f3f3;
        border-radius: 50%;
        border-top: 8px solid #3498db;
        width: 40px;
        height: 40px;
        -webkit-animation: spins 2s linear infinite; / Safari /
        animation: spins 2s linear infinite;
        }
        / Safari /
        @-webkit-keyframes spins {
          0% { -webkit-transform: rotate(0deg); }
          100% { -webkit-transform: rotate(360deg); }
        }
        
        @keyframes spins {
          0% { transform: rotate(0deg); }
          100% { transform: rotate(360deg); }
        }
    
    /*Form Loader End*/
      
      
      /* All selectors are prefixed with .cpm-form-wrap to avoid global leaks  */

      .cpm-form-wrap {
        font-family: inherit;
        max-width: 100%;
      }

      /* Grid row */
      .cpm-form-wrap .cpm-row {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        margin-bottom: 8px;
      }

      .cpm-form-wrap .cpm-col-half {
        flex: 1 1 calc(50% - 6px);
        min-width: 0;
      }

      .cpm-form-wrap .cpm-col-full {
        flex: 1 1 100%;
        min-width: 0;
      }

      /* Shared input / textarea / select look */
      .cpm-form-wrap .cpm-field {
        display: block;
        width: 100%;
        box-sizing: border-box;
        padding: 10px 16px;
        font-size: 15px;
        color: #333;
        background: #fff;
        border: 1.5px solid #d8dde6;
        border-radius: 10px;
        outline: none;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
        appearance: none;
        -webkit-appearance: none;
      }

      .cpm-form-wrap .cpm-field::placeholder {
        color: #a0a8b4;
        font-size: 15px;
      }

      .cpm-form-wrap .cpm-field:focus {
        border-color: #1d4ed8;
        box-shadow: 0 0 0 3px rgba(29, 78, 216, 0.10);
      }

      .cpm-form-wrap textarea.cpm-field {
        resize: vertical;
        /*min-height: 100px;*/
        line-height: 1.5;
      }

      /* Phone input — intlTelInput overrides scoped */
      .cpm-form-wrap .cpm-phone-wrap .iti,
      .cpm-form-wrap .cpm-phone-wrap .intl-tel-input {
        width: 100% !important;
        display: block !important;
      }

      .cpm-form-wrap .cpm-phone-wrap .cpm-field {
        padding-left: 90px !important;
      }

      .cpm-form-wrap .cpm-phone-wrap .iti__flag-container,
      .cpm-form-wrap .cpm-phone-wrap .intl-tel-input .flag-container {
        margin-bottom: 0 !important;
      }

      /* Country selector */
      .cpm-form-wrap .cpm-country-wrap {
        border: 1.5px solid #d8dde6;
        border-radius: 10px;
        overflow: visible;
        background: #fff;
        margin-bottom: 12px;
        transition: border-color 0.2s ease, box-shadow 0.2s ease;
      }

      .cpm-form-wrap .cpm-country-wrap:focus-within {
        border-color: #1d4ed8;
        box-shadow: 0 0 0 3px rgba(29, 78, 216, 0.10);
      }

      .cpm-form-wrap .cpm-country-wrap .country-select.inside {
        width: 100% !important;
        border: none !important;
        box-shadow: none !important;
        margin-bottom:0px !important;
      }

      .cpm-form-wrap .cpm-country-input {
        display: block;
        width: 100%;
        box-sizing: border-box;
        padding: 10px 16px;
        font-size: 15px;
        color: #333;
        border: none !important;
        outline: none !important;
        background: transparent;
        border-radius: 10px;
      }

      .cpm-form-wrap .cpm-country-input::placeholder {
        color: #a0a8b4;
      }

      .cpm-form-wrap .cpm-country-wrap .selected-flag {
        background: transparent !important;
        border-right: none !important;
      }

      .cpm-form-wrap .cpm-country-wrap .flag-dropdown {
        height: 50px !important;
        border: none !important;
        background: transparent !important;
      }

      /* Country label */
      .cpm-form-wrap .cpm-country-label {
        font-size: 13px;
        color: #6b7280;
        margin-bottom: 4px;
        display: block;
      }

      /* Captcha row */
      .cpm-form-wrap .cpm-captcha-row {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 5px;
        flex-wrap: wrap;
      }
      
/*      .cmp-form-wrap .country-select.inside {*/
/*     height: 0px !important; */
/*}*/

      .cpm-form-wrap .cpm-captcha-row .cpm-captcha-img-wrap {
        flex: 0 0 auto;
        border: 1.5px solid #d8dde6;
        border-radius: 10px;
        overflow: hidden;
        height: 48px;
        display: flex;
        align-items: center;
        background: #f5f6fa;
      }

      .cpm-form-wrap .cpm-captcha-row .cpm-captcha-img-wrap img {
        height: 44px;
        width: auto;
        display: block;
        padding: 2px 8px;
      }

      .cpm-form-wrap .cpm-captcha-row .cpm-refresh-btn {
        flex: 0 0 auto;
        cursor: pointer;
        background: none;
        border: none;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 36px;
        height: 36px;
        border-radius: 50%;
        transition: background 0.15s;
      }

      .cpm-form-wrap .cpm-captcha-row .cpm-refresh-btn:hover {
        background: #f0f0f0;
      }

      .cpm-form-wrap .cpm-captcha-row .cpm-refresh-btn img {
        width: 22px;
        height: 22px;
        display: block;
      }

      .cpm-form-wrap .cpm-captcha-row .cpm-captcha-input-wrap {
        flex: 1 1 120px;
        min-width: 100px;
      }

      /* Error messages — hidden when empty so they take zero height */
      .cpm-form-wrap .cpm-error {
        display: none;
        font-size: 12px;
        color: #dc2626;
        margin-top: 2px;
      }

      .cpm-form-wrap .cpm-error:not(:empty) {
        display: block;
      }

      /* Checkbox + privacy */
      .cpm-form-wrap .cpm-privacy-row {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 20px;
        margin-top: 4px;
      }

      .cpm-form-wrap .cpm-privacy-row input[type="checkbox"] {
        margin-top: 3px;
        width: 16px;
        height: 16px;
        flex-shrink: 0;
        accent-color: #1d4ed8;
        cursor: pointer;
      }

      .cpm-form-wrap .cpm-privacy-row span {
        font-size: 13px;
        color: #555;
        line-height: 1.55;
      }

      .cpm-form-wrap .cpm-privacy-row span a {
        color: #1d4ed8;
        text-decoration: underline;
      }

      /* Submit button */
      .cpm-form-wrap .cpm-submit-btn {
        display: block;
        width: 100%;
        padding: 12px 24px;
        font-size: 15px;
        font-weight: 700;
        letter-spacing: 0.06em;
        text-transform: uppercase;
        color: #fff;
        background: #1d4ed8;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        transition: background 0.2s ease, transform 0.1s ease;
        box-shadow: 0 4px 14px rgba(29, 78, 216, 0.25);
        text-align: center;
      }

      .cpm-form-wrap .cpm-submit-btn:hover {
        background: #1a44c2;
        transform: translateY(-1px);
        box-shadow: 0 6px 18px rgba(29, 78, 216, 0.30);
      }

      .cpm-form-wrap .cpm-submit-btn:active {
        transform: translateY(0);
      }

      /* All-errors span */
      .cpm-form-wrap .cpm-all-error {
        display: none;
        font-size: 13px;
        color: #dc2626;
        margin-bottom: 8px;
      }

      .cpm-form-wrap .cpm-all-error:not(:empty) {
        display: block;
      }

      /* Responsive */
      @media (max-width: 600px) {
        .cpm-form-wrap .cpm-col-half {
          flex: 1 1 100%;
        }

        .cpm-form-wrap .cpm-captcha-row {
          flex-wrap: wrap;
        }
      }
    </style>
  <?php
    return ob_get_clean();
  }
}
      
    if (! function_exists('cpm_print_assets_once') || ! function_exists('cpm_get_blocked_email_domains')) {
      return '<p>Contact form is temporarily unavailable. Please contact support.</p>';
    }

    static $instance = 0;
    $instance++;

    global $landing_page;
    if (! isset($landing_page)) {
      $landing_page = isset($_SERVER['REQUEST_URI'])
        ? sanitize_text_field(wp_unslash($_SERVER['REQUEST_URI']))
        : '';
    }

    $uid          = 'cpm_' . $instance;
    $pid          = get_queried_object_id();
    $is_ppc_page  = is_page(array(67413, 67501, 68015));
    $captcha_rand = time() . '_' . $instance;
    $site_url     = site_url();
    $post_id      = get_queried_object_id();
    $l3           = get_field('level3_title', $post_id);
    $slug         = $l3 ? sanitize_title(trim($l3)) : '';
    $webinar_url  = $slug
      ? home_url('/webinar/' . $slug . '/')
      : home_url('/webinar-level-3/?webinar_id=' . $post_id);
    $cs_pdf       = get_field('cs_upload_pdf');
    $submit_label = (get_post_type() === 'webinar') ? 'Get Access' : 'Submit';

    $js_config = array(
      'uid'              => $uid,
      'blockedDomains'   => cpm_get_blocked_email_domains(),
      'submitUrl'        => $site_url . '/wp-content/themes/thegem-child/server-check.php',
      'verifyPhoneUrl'   => $site_url . '/wp-content/themes/thegem-child/verifyPhone.php?id=',
      'captchaUrl'       => $site_url . '/wp-content/themes/thegem-child/cap3.php?id=' . rawurlencode($uid),
      'webinarRedirect'  => $webinar_url,
      'caseStudyImg'     => 'https://360smsapp.com/wp-content/uploads/2026/03/Thanks-You-Popup_half.jpg',
      'webinarImg'       => 'https://360smsapp.com/wp-content/uploads/2025/12/Thanks-You-Popup-1.webp',
      'paidThankYou'     => '/paid-thank-you/',
      'csPdfUrl'         => $cs_pdf ? esc_url($cs_pdf) : '',
    );

    ob_start();
    echo cpm_print_assets_once(); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
  ?>

    <div class="cpm-form-wrap p-3">
      <form
        id="<?php echo esc_attr($uid); ?>_form"
        data-cpm-instance="<?php echo esc_attr($uid); ?>"
        novalidate>
        <div class="post_outer"><span class="post_loader show"></span></div>
        <input type="hidden" name="oid" value="00D61000000cnSO">
        <input type="hidden" name="retURL" value="<?php echo esc_url($site_url); ?>/thank-you/">
        <input type="hidden" id="<?php echo esc_attr($uid); ?>_ever" value="0">
        <input type="hidden" id="<?php echo esc_attr($uid); ?>_pver" value="0">
        <input type="hidden" name="First_touch_URL__c" value="https://360smsapp.com<?php echo esc_attr($landing_page); ?>">

        <!-- Row 1: Name + Email -->
        <div class="cpm-row">
          <div class="cpm-col-half">
            <input
              placeholder="Name"
              id="<?php echo esc_attr($uid); ?>_last_name"
              maxlength="255"
              name="last_name"
              type="text"
              class="cpm-field">
            <span id="<?php echo esc_attr($uid); ?>_last_name_error" class="cpm-error"></span>
          </div>
          <div class="cpm-col-half">
            <input
              placeholder="Business Email"
              id="<?php echo esc_attr($uid); ?>_email"
              maxlength="80"
              name="email"
              type="email"
              class="cpm-field">
            <span id="<?php echo esc_attr($uid); ?>_email_error" class="cpm-error"></span>
          </div>
        </div>

        <!-- Row 2: Phone + Company -->
        <div class="cpm-row">
          <div class="cpm-col-half cpm-phone-wrap">
            <input
              oninput="this.value=this.value.replace(/[^0-9]/g,'').replace(/(\..*?)\..*/g,'$1');"
              placeholder="Phone"
              id="<?php echo esc_attr($uid); ?>_phone_code"
              type="tel"
              class="cpm-field">
            <input type="hidden" id="<?php echo esc_attr($uid); ?>_merged_phone" name="phone" value="">
            <span id="<?php echo esc_attr($uid); ?>_phone_error" class="cpm-error"></span>
            <span id="<?php echo esc_attr($uid); ?>_country_error" class="cpm-error"></span>
            <span class="cpm-ldrphone" style="display:none;font-size:13px;color:#666;">Loading...</span>
          </div>
          <div class="cpm-col-half">
            <input
              placeholder="Company"
              id="<?php echo esc_attr($uid); ?>_company"
              maxlength="40"
              name="company"
              type="text"
              class="cpm-field">
            <span id="<?php echo esc_attr($uid); ?>_company_error" class="cpm-error"></span>
          </div>
        </div>

        <?php if ($is_ppc_page) : ?>
          <!-- PPC extra fields: Job Title + Industry + City -->
          <div class="cpm-row">
            <div class="cpm-col-half">
              <input
                placeholder="Job Title"
                id="<?php echo esc_attr($uid); ?>_job_title"
                maxlength="128"
                name="Job_Title__c"
                type="text"
                class="cpm-field">
              <span id="<?php echo esc_attr($uid); ?>_job_title_error" class="cpm-error"></span>
            </div>
            <div class="cpm-col-half">
              <input
                placeholder="Industry"
                id="<?php echo esc_attr($uid); ?>_industry"
                maxlength="255"
                name="Industry__c"
                type="text"
                class="cpm-field">
              <span id="<?php echo esc_attr($uid); ?>_industry_error" class="cpm-error"></span>
            </div>
          </div>
          <div class="cpm-row">
            <div class="cpm-col-full">
              <input
                placeholder="City"
                id="<?php echo esc_attr($uid); ?>_city"
                maxlength="40"
                name="CITY__c"
                type="text"
                class="cpm-field">
              <span id="<?php echo esc_attr($uid); ?>_city_error" class="cpm-error"></span>
            </div>
          </div>
        <?php endif; ?>

        <?php if (get_post_type() === 'webinar') : ?>
          <div class="cpm-row">
            <div class="cpm-col-full">
              <input
                placeholder="Designation"
                id="<?php echo esc_attr($uid); ?>_designation"
                maxlength="40"
                name="designation"
                type="text"
                class="cpm-field">
              <span id="<?php echo esc_attr($uid); ?>_designation_error" class="cpm-error"></span>
            </div>
          </div>
        <?php endif; ?>

        <!-- Country Selector -->
        <span class="cpm-country-label">Please select country below</span>
        <div class="cpm-country-wrap">
          <input
            id="<?php echo esc_attr($uid); ?>_country_selector"
            type="text"
            name=""
            class="cpm-country-input"
            placeholder="Select country...">
          <span id="<?php echo esc_attr($uid); ?>_companydev_error" class="cpm-error"></span>
          <div style="display:none;">
            <input
              type="text"
              id="<?php echo esc_attr($uid); ?>_country_selector_code"
              name="Country__c"
              data-countrycodeinput="1"
              readonly="readonly">
          </div>
        </div>

        <?php if (! $is_ppc_page) : ?>
          <!-- Description -->
          <div style="margin-bottom:12px;">
            <textarea
              id="<?php echo esc_attr($uid); ?>_description"
              name="description"
              rows="2"
              class="cpm-field"
              placeholder="Description...."></textarea>
          </div>
        <?php endif; ?>

        <!-- Hidden fields -->
        <input type="hidden" name="pageid" id="<?php echo esc_attr($uid); ?>_pageid" value="<?php echo esc_attr($pid); ?>">
        <input type="hidden" name="captcha_id" value="<?php echo esc_attr($uid); ?>">

        <?php if (! $is_ppc_page) : ?>
          <!-- Captcha Row -->
          <div class="cpm-captcha-row">
            <div class="cpm-captcha-img-wrap">
              <img
                alt="captcha"
                src="<?php echo esc_url($site_url); ?>/wp-content/themes/thegem-child/cap3.php?id=<?php echo esc_attr($uid); ?>&rand=<?php echo esc_attr($captcha_rand); ?>"
                id="<?php echo esc_attr($uid); ?>_captchaImg"
                class="cpm-captcha-img">
            </div>
            <button
              type="button"
              class="cpm-refresh-btn cpm-btn-refresh"
              data-cpm="<?php echo esc_attr($uid); ?>"
              aria-label="Refresh captcha">
              <img
                alt="refresh"
                src="<?php echo esc_url($site_url); ?>/wp-content/uploads/2022/04/free-refresh-icon-3104-thumb-1.png">
            </button>
            <div class="cpm-captcha-input-wrap">
              <input
                type="text"
                name="vercode"
                id="<?php echo esc_attr($uid); ?>_vercode"
                class="cpm-field"
                placeholder="Enter value">
              <span id="<?php echo esc_attr($uid); ?>_vercode_error" class="cpm-error"></span>
            </div>
          </div>
        <?php endif; ?>

        <!-- Remaining hidden fields -->
        <input type="hidden" id="<?php echo esc_attr($uid); ?>_title" name="title" value="">
        <input type="hidden" id="<?php echo esc_attr($uid); ?>_gclid" name="00N4N00000IVjck" value="">
        <input type="hidden" name="lead_source" value="<?php echo esc_attr(get_field('lead_source')); ?>">
        <input type="hidden" name="Sub_Lead_Source__c" value="<?php echo esc_attr(get_field('sub_lead_source')); ?>">
        <input type="hidden" name="Lead_Source_URL__c" value="<?php echo esc_url(get_permalink()); ?>">

        <!-- Privacy checkbox -->
        <div class="cpm-privacy-row">
          <input
            type="checkbox"
            id="<?php echo esc_attr($uid); ?>_marketing_optin"
            name="marketing_optin"
            value="yes">
          <span>
           By checking this box, you agree to receive recurring text messages from 360 SMS App. Msg & data rates may apply. Message frequency may vary. Reply HELP for help, STOP to cancel. View our <a href="https://qa.360smsapp.in/privacy-policy/">Privacy Policy</a> and <a href="https://qa.360smsapp.in/terms-of-service/">Terms of Service</a>.
          </span>
        </div>

        <!-- Error + Submit -->
        <span id="<?php echo esc_attr($uid); ?>_all_error" class="cpm-all-error"></span>
        <button
          type="button"
          id="<?php echo esc_attr($uid); ?>_submit"
          class="cpm-submit-btn">
          <?php echo esc_html($submit_label); ?>
        </button>

      </form>
    </div><!-- /.cpm-form-wrap -->

    <script type="text/javascript">
      (function($, cfg) {
        'use strict';

        var uid = cfg.uid;
        var $form = $('#' + uid + '_form');

        function fld(name) {
          return $('#' + uid + '_' + name);
        }

        function setError(field, msg) {
          fld(field + '_error').html(msg);
        }

        function getDialCode($phoneInput) {
          try {
            var data = $phoneInput.intlTelInput('getSelectedCountryData');
            if (data && data.dialCode) {
              return String(data.dialCode);
            }
          } catch (err) {}
          var $wrap = $phoneInput.closest('.iti, .intl-tel-input');
          if (!$wrap.length) {
            $wrap = $phoneInput.parent();
          }
          return ($wrap.find('.iti__selected-dial-code, .selected-dial-code').first().text() || '').replace(/\D/g, '');
        }

        function clearErrors(fields) {
          fields.forEach(function(field) {
            setError(field, '');
            fld(field).off('keyup.cpm' + uid).on('keyup.cpm' + uid, function() {
              setError(field, '');
            });
          });
        }

        function isBlockedEmail(email) {
          if (!email || email.indexOf('@') < 0) return false;
          var domain = email.split('@')[1];
          return cfg.blockedDomains.indexOf(domain) !== -1;
        }

        function verifyEmailCpm() {
          var email = fld('email').val();
          if (!email) {
            setError('email', 'Email Required');
            return false;
          }
          if (email.indexOf('@') < 0 || email.indexOf('.') < 0) {
            setError('email', 'Invalid Email');
            return false;
          }
          if (isBlockedEmail(email)) {
            setError('email', 'Please enter your business email address. This form does not accept addresses from public/free domains.');
            return false;
          }
          setError('email', ' ');
          return true;
        }

        function verifyPhoneCpm() {
          var $phoneInput = fld('phone_code');
          var selval = getDialCode($phoneInput);
          var phone = $phoneInput.val();
          var $err = fld('phone_error');

          if (phone && phone.length >= 10 && selval) {
            $form.find('.cpm-ldrphone').show();
            $err.hide();
            $.ajax({
              crossDomain: true,
              url: cfg.verifyPhoneUrl + fld('pageid').val(),
              method: 'POST',
              data: {
                phone_code: selval,
                phone: phone.trim()
              },
              success: function(response) {
                $form.find('.cpm-ldrphone').hide();
                $err.show();
                var res = JSON.parse(response);
                if (res.status === true) {
                  $err.html('<span style="color:green">Valid Number</span>');
                  fld('pver').val('1');
                } else {
                  $err.html('Invalid Number');
                }
              }
            });
            return;
          }
          if (selval && phone && phone.length < 10) {
            $err.html('Invalid Number');
          } else if (!selval) {
            $err.html('Please select country code.');
          } else if (!phone) {
            $err.html('Invalid Number');
          }
        }

        function handleSuccess(res) {
            
          if (res["user-guide"] === true) {
            window.open("<?php echo esc_url(get_field('user_guide_pdf')); ?>", "_blank");
            return;
          }
            
          if (res['landing-page'] === true) {
            window.location.href = (res.url && res.url !== '') ? res.url : cfg.paidThankYou;
            return;
          }
          if (res['case_study'] === true) {
            var csHtml = '<div class="thank-you-message" style="text-align:center;color:#000">' +
              '<img src="' + cfg.caseStudyImg + '" style="width:100%;">' +
              '<h1 class="py-5">' + res.msg + '</h1></div>';
            if (cfg.csPdfUrl) {
              csHtml += '<div class="text-center" style="padding-bottom:57px;">' +
                '<a href="' + cfg.csPdfUrl + '" target="_blank" style="background-color:#0A86C6;padding:8px 10px;color:white;border-radius:5px;font-size:12px;font-weight:600;">' +
                'Click Here to Download the complete Case Study</a></div>';
            }
            $('#div_replace').fadeOut(300, function() {
              $(this).replaceWith(csHtml);
            });
            return;
          }
          if (res['webinar'] === true) {
            if (new URLSearchParams(window.location.search).get('id') === 'upcoming_submit') {
              $('#div_replace').fadeOut(300, function() {
                $(this).replaceWith(
                  '<div class="thank-you-message text-center" style="color:#000">' +
                  '<img src="' + cfg.webinarImg + '" style="width:80%;display:block;margin:0 auto;" />' +
                  '</div>'
                );
              });
            } else {
              window.location.replace(cfg.webinarRedirect);
            }
            return;
          }
          if (res.url && res.url !== '' && res.url !== 'undefined') {
            location.href = res.url;
          }
        }

        function handleSubmit(e) {
          e.preventDefault();
          var fields = ['last_name', 'email', 'company', 'vercode', 'job_title', 'industry', 'city'];
          clearErrors(fields);

          verifyEmailCpm();

          var last_name    = fld('last_name').val();
          var email        = fld('email').val();
          var company      = fld('company').val();
          var vercode      = fld('vercode').length ? fld('vercode').val() : '';
          var $phoneInput  = fld('phone_code');
          var phone_contact = $phoneInput.val();
          var selval       = getDialCode($phoneInput);

          fld('merged_phone').val(selval ? '+' + selval + phone_contact : phone_contact);

          if (!last_name) { setError('last_name', 'Required Field'); return; }
          if (!email)     { setError('email',     'Required Field'); return; }
          if (!company)   { setError('company',   'Required Field'); return; }
          if (!phone_contact) { setError('phone', 'Required Field'); return; }
          if (!selval)    { setError('phone', 'Please select country code.'); return; }
          if (fld('vercode').length && !vercode) { setError('vercode', 'Required Field'); return; }

          var emailErrText = fld('email_error').text();
          if (emailErrText && emailErrText !== ' ' && emailErrText !== '') { return; }
          if (fld('phone_error').text() === 'Invalid Number' && phone_contact) { return; }
          if (isBlockedEmail(email)) {
            setError('email', 'Please enter your business email address. This form does not accept addresses from public/free domains.');
            return;
          }

          $('.post_outer').addClass('show');
          $.ajax({
            url: cfg.submitUrl,
            method: 'POST',
            data: $form.serialize() + '&c_url=' + encodeURIComponent(location.href),
            success: function(response) {
              $('.post_outer').removeClass('show');
              var res = JSON.parse(response);
              if (res.st === 1) {
                handleSuccess(res);
              } else if (res.st === 2) {
                setError('vercode',   res.msg);
              } else if (res.st === 3) {
                setError('last_name', res.msg);
              } else if (res.st === 4) {
                setError('email',     res.msg);
              } else if (res.st === 5) {
                setError('company',   res.msg);
              } else if (res.st === 6) {
                setError('phone',     res.msg);
              } else if (res.st === 8 || res.st === 0) {
                setError('all',       res.msg);
              } else {
                setError('all', 'Something Went Wrong Please Try Again Later');
              }
            },
            error: function() {
              $('.post_outer').removeClass('show');
              setError('all', 'Something Went Wrong Please Try Again Later');
            }
          });
        }

        $(window).on('load', function() {
          if (!$.fn.intlTelInput) {
            console.error('[contact_page_multi_shortcode] intlTelInput library not loaded.');
            return;
          }

          var $phone = fld('phone_code');
          if (!$phone.closest('.iti, .intl-tel-input').length) {
            $phone.intlTelInput({
              allowExtensions: true,
              autoHideDialCode: true,
              autoPlaceholder: 'ON',
              dropdownContainer: document.body,
              formatOnDisplay: true,
              initialCountry: 'us',
              nationalMode: true,
              placeholderNumberType: 'MOBILE',
              preferredCountries: ['US', 'GB', 'AU', 'CA', 'IN'],
              separateDialCode: true
            });
          }

          fld('email').on('blur.cpm' + uid, verifyEmailCpm);
          $phone.on('blur.cpm' + uid, verifyPhoneCpm);

          if ($.fn.countrySelect) {
            fld('country_selector').countrySelect({
              preferredCountries: ['us', 'gb', 'in', 'ca']
            });
          }

          fld('title').val(localStorage.getItem('utm') || '');
          fld('gclid').val(localStorage.getItem('gclid') || '');

          $form.find('.cpm-btn-refresh[data-cpm="' + uid + '"]').on('click.cpm' + uid, function() {
            var rand = Math.random() + Date.now();
            fld('captchaImg').attr('src', cfg.captchaUrl + '&rand=' + rand);
          });

          fld('submit').on('click.cpm' + uid, handleSubmit);
        });

      })(jQuery, <?php echo wp_json_encode($js_config); ?>);
    </script>

  <?php
    return ob_get_clean();
  }

   add_shortcode('contact_page_multi_shortcode', 'contactpageform_multi');
}
/**
 * Knowledge Base — Post Type + Category Taxonomy
 * Register both together so the taxonomy is always available
 * before the post type args reference it.
 */

function register_knowledge_base_post_type() {
    $labels = array(
        'name'                  => 'Knowledge Base',
        'singular_name'         => 'Knowledge Base',
        'menu_name'             => 'Knowledge Base',
        'add_new'               => 'Add New',
        'add_new_item'          => 'Add New Article',
        'edit_item'             => 'Edit Article',
        'new_item'              => 'New Article',
        'view_item'             => 'View Article',
        'search_items'          => 'Search Articles',
        'not_found'             => 'No articles found',
        'not_found_in_trash'    => 'No articles found in Trash',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => 'knowledge-base',
        'rewrite'            => array(
            'slug'       => 'knowledge-base',
            'with_front' => false,
        ),
        'supports'           => array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'author',
            'revisions',
        ),
        'taxonomies'         => array( 'kb_category' ),
        'menu_icon'          => 'dashicons-book-alt',
        'show_in_rest'       => true,
    );

    register_post_type( 'knowledge_base', $args );
}
add_action( 'init', 'register_knowledge_base_post_type' );

function register_kb_category_taxonomy() {
    $labels = array(
        'name'              => 'KB Categories',
        'singular_name'     => 'KB Category',
        'menu_name'         => 'Categories',
        'all_items'         => 'All Categories',
        'edit_item'         => 'Edit Category',
        'view_item'         => 'View Category',
        'update_item'       => 'Update Category',
        'add_new_item'      => 'Add New Category',
        'new_item_name'     => 'New Category Name',
        'search_items'      => 'Search Categories',
        'not_found'         => 'No categories found',
    );

    $args = array(
        'labels'            => $labels,
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_in_rest'      => true,
        'rewrite'           => array(
            'slug'       => 'kb-category',
            'with_front' => false,
        ),
    );

    register_taxonomy( 'kb_category', array( 'knowledge_base' ), $args );
}
add_action( 'init', 'register_kb_category_taxonomy' );
function register_footer_menus() {
    register_nav_menus([
        'footer_products'  => __('Footer - Products'),
        'footer_resources' => __('Footer - Resources'),
        'footer_company'   => __('Footer - Company'),
    ]);
}
add_action('after_setup_theme', 'register_footer_menus');