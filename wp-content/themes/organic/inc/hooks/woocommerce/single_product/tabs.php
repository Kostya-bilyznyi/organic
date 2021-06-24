<?php
/**
 * Add a custom product data tab
 */


add_filter( 'woocommerce_product_tabs', 'woo_custom_tabs' );
function woo_custom_tabs( $tabs ) {
	
	global $product;
	if ( $product->is_type( 'variable' ) ) {
		$tabs['test_tab'] = array(
			'title' 	=> __( 'Custom Homework Tab', 'woocommerce' ),
			'priority' 	=> 50,
			'callback' 	=> 'woo_custom_tabs_content'
		);
	}

	return $tabs;

}
function woo_custom_tabs_content() {
	$custom_tab_title = get_field('custom_tab_title', 'option');
	echo !empty($custom_tab_title) ? '<h2 class="woo-custom-tab-title">' . $custom_tab_title . '</h2>' : '<h2 class="woo-custom-tab-title">' . __('custom tab title', 'organic') . '</h2>';
	$custom_tab_content = get_field('custom_tab_content', 'option');
	echo !empty($custom_tab_content) ? '<p class="woo-custom-tab-content">' . $custom_tab_content . '</p>' : '<p class="woo-custom-tab-content">' . __('custom tab content', 'organic') . '</p>';
}