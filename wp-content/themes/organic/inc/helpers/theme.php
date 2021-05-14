<?php

function get_theme_page_title_block( $title, $post_author = true, $date = true,  $has_breadcrumbs = true ) {

	$breadcrumbs = yoast_breadcrumb( '<div class="font-weight-bold text-flame-pea" id="breadcrumbs">','</div>', false );
	$html_breadcrumbs = ( $breadcrumbs ) ? $breadcrumbs : null;
	$html_post_author = ( $post_author ) ? '<span class="entry-author">' . $post_author . '</span>' : null;
	$html_date = ( $date ) ? '<span class="entry-meta-date">' . $date . '</span>' : null;
	$html_date_author = ($date && $post_author ) ? '<div class="entry-meta-top">' . $html_post_author . $html_date . '</div>' : null;

	$block = <<<HTML
<div class="col-lg-6 offset-lg-3">
	<div class="text-center">
		{$html_breadcrumbs}
		{$html_date_author}
		<h1 class="mb-0">{$title}</h1>
	</div>
</div>
HTML;

	return $block;
}

function init_google_map() {
	function js_google_map() {
		$key = get_field('general_data_google_api_key', 'option');
		wp_enqueue_script( 'maps-javascript', "//maps.googleapis.com/maps/api/js?key=$key&language=en", [], null, true );
	}
	add_action('wp_enqueue_scripts', 'js_google_map');
}


if ( ! function_exists('local_acf_google_map_api') ) :

	function local_acf_google_map_api( $api ) {
		$api['key'] = get_field('general_data_google_api_key', 'option');
		return $api;
	}
	add_filter('acf/fields/google_map/api', 'local_acf_google_map_api');

endif;