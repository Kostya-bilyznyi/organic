<?php
/**
 * The template for displaying 404 pages (not found).
 *
 */

get_header(); ?>


<div class="container">
	<h1 class="hero-font mb-px-28">
		<?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'organictxt' ); ?>
	</h1>
	<?php get_search_form(); ?>
</div>


<?php
get_footer();
