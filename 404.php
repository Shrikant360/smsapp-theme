<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

$thegem_use_custom = get_post(thegem_get_option('404_page'));

$thegem_q = new WP_Query(array('page_id' => thegem_get_option('404_page')));

get_header(); ?>

<div id="main-content" class="main-content"  hggj>

<?php if(thegem_get_option('404_page') && $thegem_use_custom && $thegem_q->have_posts()) : $thegem_q->the_post(); ?>

<div id="page-title" class="page-title-block page-title-alignment-center page-title-style-1 " style="padding-top: 80px;padding-bottom: 80px;"><div class="container"><div class="page-title-title" style=""><h1 style=""> Page Not Found</h1></div></div></div>

<?php else : ?>
<div id="page-title" class="page-title-block page-title-alignment-center page-title-style-1 " style="padding-top: 80px;padding-bottom: 80px;"><div class="container"><div class="page-title-title" style=""><h1 style="">  Page Not Found</h1></div></div></div>

<div class="block-content">
	<div class="container">
		<div class="entry-content page-content content-none">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'thegem' ); ?></p>
			<?php add_filter( 'get_search_form', 'thegem_serch_form_nothing_found' ); get_search_form(); remove_filter( 'get_search_form', 'thegem_serch_form_nothing_found' ); ?>
		</div><!-- .entry-content -->
	</div>
</div>
<?php endif; ?>

</div><!-- #main-content -->

<?php
get_footer();