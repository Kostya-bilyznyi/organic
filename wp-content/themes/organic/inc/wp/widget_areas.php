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

	register_sidebar( array(
		'name'          => __('Footer Column 2'),
		'id'            => "footer-col-2",
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
		'before_sidebar' => '',
		'after_sidebar'  => '',
	) );

	register_sidebar( array(
		'name'          => __('Footer Column 3'),
		'id'            => "footer-col-3",
		'description'   => '',
		'class'         => '',
		'before_widget' => '<div class="footer-widget footer-widget-2">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5 class="pb-px-17">',
		'after_title'   => '</h5>',
		'before_sidebar' => '',
		'after_sidebar'  => '',
	) );

	register_sidebar( array(
		'name'          => __('Footer Column 4'),
		'id'            => "footer-col-4",
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
		'before_sidebar' => '',
		'after_sidebar'  => '',
	) );
}

add_action( 'widgets_init', 'organic_widget_arias' );