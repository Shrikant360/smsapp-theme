<?php
get_header(); 
?>
<script>	
var ptitle=getCookie("page_title");
	console.log(ptitle);
	var title= '<?php echo get_permalink();?>';
	if( ptitle == title ){
		
	} else{
		//alert("You don't have permission to access this page");
		location.href = "/previous-webinar/";
	}
	
</script>
<div id="main-content" class="main-content">

<?php
	while ( have_posts() ) : the_post();
		if(get_post_type() == 'post' || get_post_type() == 'thegem_pf_item' || get_post_type() == 'thegem_news') {
			get_template_part( 'content', 'page' );
		} else {
			//get_template_part( 'content', get_post_format() );
            
             if(is_singular()) : ?>
	
<div class="block-content">
<!-- 	<section class="background-image">
		<div class="mobile-background-8">
			<div class="wrapper-inner-title">
				<div class="project-title">
					<h1>
						<?php the_title();?>
					</h1>
				</div>
			</div>
		</div>
		</section> -->
	<div class="container">
<?php endif; ?>
		
<article gfhf id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="item-post">
			<?php //if (has_post_thumbnail()) : ?>
				<!--div class="post-image col-md-3">
					<?php// thegem_post_thumbnail('medium', false, 'img-responsive'); ?>
				</div -->
			<?php //endif; ?>
			<div class="post-text col-md-12<?php echo has_post_thumbnail() ? 9 : 12; ?>">
				<header class="entry-header">
					<?php if (in_array('category', get_object_taxonomies(get_post_type())) && thegem_categorized_blog()) : ?>

					<?php
					endif;

					if (!is_single()) :
						the_title('<div class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></div>');
					endif;
					?>

					<div class="entry-meta">
						<?php
						if ('post' == get_post_type())
							thegem_posted_on();

						if (!post_password_required() && (comments_open() || get_comments_number())) :
							?>

						<?php
						endif;

						?>
						<?php the_tags('<span class="entry-meta">|<span class="tag-links">', '|', '</span></span>'); ?>

					</div>
					<!-- .entry-meta -->
		<style>
				.webniar-template-default .item-post .post-text{
	   			 	    width: 100% !important;
						margin: 0 auto 33px;
						padding: 26px 30px 3px;
						background-color: #f3f5f6;
			}
			.webniar-template-default .block-content{
				padding: 0 !important;
			}
/* 			.background-image{
				background-image:url('https://360smsapp.com/wp-content/uploads/2020/11/laptop-3317007_1920-1.jpg');
				background-size:cover;
				background-repeat:no-repeat;
				width:100%;
		
			} */
			section{
				margin-bottom:20px;
			}
			.mobile-background-8{
			
				background: #2B7EBF;
				
				background-blend-mode: multiply;
			}
			.wrapper-inner-title{
				max-width: 900px;
    			margin: auto;
				}
			.project-title{
				 width: 100%;
    margin: 0 auto;
    text-align: center;
			}
			.project-title h1{
				
    text-transform: none!important;
    font-size: 26px!important;
    font-weight: 700!important;
    color: #fbfdfd!important;
    height: auto;
    line-height: 1.1!important;
   padding: 23px 0px;
	margin:0px;
			} 
			@media(max-width:768px){
				.project-title h1{
					font-size: 40px!important;
				}
				  
			}
}
			
		</style>
				</header>
				<!-- .entry-header -->

				<?php if (is_search()) : ?>
					<div class="entry-summary">
						<?php the_excerpt(); ?>
					</div><!-- .entry-summary -->
				<?php else : ?>
					<div class="entry-content">
						<?php
						the_content(wp_kses(__('Continue reading <span class="meta-nav">&rarr;</span>', 'thegem'), array('span' => array('class' => array()))));
						wp_link_pages(array(
							'before' => '<div class="page-links"><span class="page-links-title">' . esc_html__('Pages:', 'thegem') . '</span>',
							'after' => '</div>',
							'link_before' => '<span>',
							'link_after' => '</span>',
						));
						?>
					</div><!-- .entry-content -->
				<?php endif; ?>
			</div>
		</div>
	</div>
</article><!-- #post-## -->
<?php if(is_singular()) : ?>
	</div>
</div>
<?php endif;
            
		}
	endwhile;
?>

</div><!-- #main-content -->

<?php
get_footer();