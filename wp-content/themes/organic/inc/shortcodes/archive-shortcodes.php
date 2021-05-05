<?php
function archive_pot_posts() {
	$widget_title = __('TOP POSTS', 'organictxt');
	$html_articles = null;
	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 5,
		'orderby' => 'comment_count',
		'order'   => 'DESC'
	);

	$query = new WP_Query( $args );

	if ( $query->have_posts() ) :
		while ( $query->have_posts() ) :
			$query->the_post();

			$title = get_the_title();
			$link_url = get_permalink();
			$autor = get_the_author();
			$date = get_the_date('M j, Y');

			$html_articles .= '<article class="mb-4">
										<div class="entry-content1-wrapper">
											<div class="entry-header">
												<h2 class="entry-title">
													<a href="' . $link_url . '">' . $title . '</a>
												</h2>
												<div class="entry-meta-top">
													<span class="entry-author">' . $autor . '</span>
													<span class="entry-meta-date">' . $date . '</span>
												</div>
											</div>
										</div>
									</article>';

		endwhile;
	endif;

	wp_reset_postdata();

	$block = <<<POST
<h5 class="widget-title archive-posts-title">{$widget_title}</h5>
<div class="simple-entry-list blog-post">
{$html_articles}
</div>
POST;

	return $block;
}

add_shortcode( 'top-posts' , 'archive_pot_posts' );