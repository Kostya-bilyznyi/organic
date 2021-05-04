<?php 

function organic_widget_arias(){

	register_sidebar( array(
		'name'          => __('Footer Column 1'),
		'id'            => "footer-col-1",
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h2 class="mb-px-36">',
		'after_title'   => '</h2>',
		'before_sidebar' => '',
		'after_sidebar'  => '',
	) );
}

add_action( 'widgets_init', 'organic_widget_arias' );