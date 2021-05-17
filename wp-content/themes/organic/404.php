<?php
/**
 * The template for displaying 404 pages (not found).
 *
 */
$title = __('404 Not Found', 'orgamic' );
get_header(); ?>


<div class="container">
	<?php echo get_theme_page_title_block( $title, false, false ); ?>
	<h2 class="hero-font mb-px-28 text-center">
		<?php _e( 'It looks like nothing was found at this location. Maybe try to search?', 'orgamic' ); ?>
	</h2>
</div>


<?php
get_footer();
