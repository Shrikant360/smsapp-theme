<?php /* Template Name: Blog Template */ 
get_header();
?>

<?php
$thegem_panel_classes = array('panel', 'row');

if(is_active_sidebar('page-sidebar')) {
   $thegem_panel_classes[] = 'panel-sidebar-position-right';
   $thegem_panel_classes[] = 'with-sidebar';
   $thegem_center_classes = 'col-lg-9 col-md-9 col-sm-12';
} else {
   $thegem_center_classes = 'col-xs-12';
}

get_header();  ?>
<style>
   .block-content{
      padding-top:90px;
   }
button#searchsubmit:before {content: '\e612';
    position: absolute;
    font-size: 24px;
    font-family: thegem-icons;
    left: 26%;
	top: -4px;
    font-weight: 100;
    margin-top: -3px;
    margin: 0;
   }
button#searchsubmit {
        color: #00bcd4;
    font-size: 0;
    position: absolute;
    top: 0;
    right: 0;
    width: 43px;
    height: 38px;
    margin: 0;
    background-color: transparent!important;
}
button#searchsubmit { 
    padding-right: 50px;
}
input#s {
	width: 100%;
	margin: 0px 0px 50px 0px;
	height: 30px;
    padding-right: 50px;  
	border-radius: 3px;
	padding: 5px 10px;    
	border: 1px solid #dfe5e8;
	color: #3c3950;
   }
	 @media(max-width:1024px){
     	.block-content {
   				 padding-top: 40px;
		}
     }
   @media(max-width:767px){
   		.form-ipad-mob{
			display: block !important;
		}
		.form-desk{
			display: none !important;
		}
        
		 input#s{
		 margin: 0px 0px 20px 0px;
		  }
            .block-content {
                padding-top: 20px;
            }
      }
   </style>
<div id="main-content" class="main-content">

<?php
   $thegem_no_margins_block = '';
   if(is_tax() || is_category() || is_tag() || is_archive()) {
      $thegem_term_id = get_queried_object() ? get_queried_object()->term_id : 0;
      $thegem_page_data = array(
         'title' => thegem_theme_options_get_page_settings('blog'),
         'effects' => thegem_theme_options_get_page_settings('blog'),
         'slideshow' => thegem_theme_options_get_page_settings('blog'),
         'sidebar' => thegem_theme_options_get_page_settings('blog')
      );
      if(get_term_meta($thegem_term_id , 'thegem_taxonomy_custom_page_options', true)) {
         $thegem_page_data = array(
            'title' => thegem_get_sanitize_page_title_data($thegem_term_id, array(), 'term'),
            'effects' => thegem_get_sanitize_page_effects_data($thegem_term_id, array(), 'term'),
            'slideshow' => thegem_get_sanitize_page_slideshow_data($thegem_term_id, array(), 'term'),
            'sidebar' => thegem_get_sanitize_page_sidebar_data($thegem_term_id, array(), 'term')
         );
      }

      if($thegem_page_data['effects']['effects_no_bottom_margin']) {
         $thegem_no_margins_block .= ' no-bottom-margin';
      }
      if($thegem_page_data['effects']['effects_no_top_margin']) {
         $thegem_no_margins_block .= ' no-top-margin';
      }

      $thegem_panel_classes = array('panel', 'row');
      $thegem_center_classes = 'panel-center';
      $thegem_sidebar_classes = '';

      if(is_active_sidebar('page-sidebar') && $thegem_page_data['sidebar']['sidebar_position']) {
         $thegem_panel_classes[] = 'panel-sidebar-position-'.$thegem_page_data['sidebar']['sidebar_position'];
         $thegem_panel_classes[] = 'with-sidebar';
         $thegem_center_classes .= ' col-lg-9 col-md-9 col-sm-12';
         if($thegem_page_data['sidebar']['sidebar_position'] == 'left') {
            $thegem_center_classes .= ' col-md-push-3 col-sm-push-0';
            $thegem_sidebar_classes .= ' col-md-pull-9 col-sm-pull-0';
         }
      } else {
         $thegem_center_classes .= ' col-xs-12';
      }
      if($thegem_page_data['sidebar']['sidebar_sticky']) {
         $thegem_panel_classes[] = 'panel-sidebar-sticky';
         wp_enqueue_script('thegem-sticky');
      }
      if($thegem_page_data['slideshow']['slideshow_type']) {
         thegem_slideshow_block(array('slideshow_type' => $thegem_page_data['slideshow']['slideshow_type'], 'slideshow' => $thegem_page_data['slideshow']['slideshow_slideshow'], 'lslider' => $thegem_page_data['slideshow']['slideshow_layerslider'], 'slider' => $thegem_page_data['slideshow']['slideshow_revslider']));
      }
   }
   echo thegem_page_title();
   

?>

   <div class="block-content<?php echo esc_attr($thegem_no_margins_block); ?>">
      <div class="container">
          <div class="row">
      <?php     $the_query = new WP_Query( array('posts_per_page'=>5,
                                 'post_type'=>'post',
                                 'paged' => get_query_var('paged') ? get_query_var('paged') : 1) 
                            );  $count = $the_query->post_count;
                           $counter = 1; 
   
                           
     ?>
     
<?php  
while ($the_query -> have_posts()) : $the_query -> the_post();  

    $thegem_categories = get_the_category();
$thegem_categories_list = array();
foreach($thegem_categories as $thegem_category) {
   $thegem_categories_list[] = '<a href="'.esc_url(get_category_link( $thegem_category->term_id )).'" title="'.esc_attr( sprintf( __( "View all posts in %s", "thegem" ), $thegem_category->name ) ).'">'.$thegem_category->cat_name.'</a>';
} $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
if ($counter == 1) {
    ?>
      <div class="col-sm-7 <?php echo $counter; ?>">   
		  <div class="form-ipad-mob" style="display:none;"><form role="search" method="get" id="searchform" class="searchform" action="'.home_url().'">
            <div>
               <input type="text" value="" name="s" id="s">
                <button class="gem-button" type="submit" id="searchsubmit" value="Search">Search</button>
            </div>
         </form></div>
         <article id="post-33731" class="item-animations-not-inited post-33731 post type-post status-publish format-standard has-post-thumbnail category-salesforce category-sms-app tag-cti tag-cti-integration tag-cti-integration-with-salesforce">
            <div class="item-post-container">
               <div class="item-post clearfix">
                  <div class="post-image"><div class="post-featured-content"><a href="<?php echo get_permalink();?>">      <picture>
                  <img src="<?php echo $featured_img_url;?>" class="img-responsive" alt="">
                     </picture>
                     </a>
                     </div>
                  </div>
                  <div class="post-meta date-color">
                     <div class="entry-meta clearfix gem-post-date">
                        <div class="post-meta-left MT3">
                           <?php if($thegem_categories): ?>
                           <span class="post-meta-categories postmeta "><?php echo implode(' <span class="sep"></span> ', $thegem_categories_list); ?></span>
                     <?php endif ?>
                        </div>
                     </div><!-- .entry-meta -->
                  </div>
                  <div class="post-title">
               <h3 class="entry-title sidetitle MT3 title-main"><a href="<?php echo get_permalink();?>"><span><?php the_title();?></span></a></h3>
                  </div>
                  <div class="post-text postmeta">
                     <div class="summary">
                        <p><?php the_excerpt();?></p>
                     </div>
                  </div>
				   <div>
					   <a style="text-decoration: underline;" href="<?php echo get_permalink();?>" class="btn btn-info" role="button" aria-pressed="true">Read More</a>
				   </div>
               </div>
            </div>
         </article>
            </div>
    <?php
}else{
    
 ?>
 <div class="row" style=" margin-bottom: .5em;">
    <div class="col-sm-6 <?php echo $counter; ?>">
       <div class="post-image">
          <div class="post-featured-content">
             <a href="<?php echo get_permalink();?>">
                <picture>
                  <img src="<?php echo $featured_img_url;?>" class="img-responsive" alt="">
                </picture>
             </a></div></div></div>
    <div class="col-sm-6 cuspadding" style="padding: 0 0 0 0px;" >
       <div class="post-meta date-color m-5">
          <div class="entry-meta clearfix gem-post-date">
             <div class="post-meta-left">
                <?php if($thegem_categories): ?>
                     <span class="post-meta-categories postmeta"><?php echo implode(' <span class="sep"></span> ', $thegem_categories_list); ?></span>
                     <?php endif ?>
             </div>
          </div><!-- .entry-meta -->
       </div>
       <div class="post-title">
          <h3 class="entry-title sidetitle"><a href="<?php echo get_permalink();?>"><span>
             <?php 
               $title = get_the_title();
               $title_substr = substr($title, 0, 40);
               if(strlen($title_substr) <= 39){
                  echo $title_substr;
               }else{
               echo $title_substr."....";
               }
             ?></span></a></h3>
       </div>
       <div class="post-text">
          <div class="summary">
             <p><?php 
                  $excerpt = get_the_excerpt();
                  $excerpt_substr = substr($excerpt, 0, 50);
                  if(!empty($excerpt_substr)){
                     echo $excerpt_substr."....";
                  }else if(strlen($excerpt_substr) >= 49){
                     echo $excerpt_substr;
               }
            ?></p>
          </div>
       </div>  
    </div>
            </div>
 <?php
}


 

    $counter ++;
  if ($counter == 2) {
    echo '  <div class="col-sm-5 '.$counter.'" ><div class="form-desk"><form role="search" method="get" id="searchform" class="searchform" action="'.home_url().'">
            <div>
               <input type="text" value="" name="s" id="s">
                <button class="gem-button" type="submit" id="searchsubmit" value="Search">Search</button>
            </div>
         </form></div>'; 
}
endwhile;
if ($counter == 2) {
   ?>
       </div>
   <?php
    } 
    echo '<div class="pagination" style="    max-width: 660px;">';
$big = 999999999; // need an unlikely integer
 echo paginate_links( array(
    'base' => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $the_query->max_num_pages
) );
 echo '</div>';
wp_reset_postdata();?>
          
          
          
          
          
         

      
      </div><!-- .container -->
   </div><!-- .block-content -->
</div><!-- #main-content -->

<?php
get_footer();