<?php
function footer_logo_shortcode() {
	$logo = get_field('footer_logo', 'options');
	$logo_url = $logo['url'];
	$home_url = home_url('/');
	$logo_alt =  get_bloginfo( 'name' );

	if( empty ($logo_url ) ) {
		return false;
	}

	$block = <<<LOGO
<a class="navbar-brand mx-auto d-none d-lg-block" href="{$home_url}">
	<img class="navbar-brand__img" src="{$logo_url}" alt="{$logo_alt}"/>
</a>
LOGO;

	return $block;
}

add_shortcode( 'footer-logo' , 'footer_logo_shortcode' );