<?php
function footer_logo_shortcode() {
	$logo = get_field('footer_logo', 'options');
	$title = get_field('footer_title', 'options');
	$logo_url = $logo['url'];
	$home_url = home_url('/');
	$logo_alt =  get_bloginfo( 'name' );

	if( empty ( $logo_url && $title ) ) {
		return false;
	}

	$block = <<<LOGO
<h2 class="mb-px-36">{$title}</h2>
<a class="navbar-brand mx-auto d-none d-lg-block" href="{$home_url}">
	<img class="navbar-brand__img" src="{$logo_url}" alt="{$logo_alt}"/>
</a>
LOGO;

	return $block;
}

add_shortcode( 'footer-logo' , 'footer_logo_shortcode' );

function footer_address_info_shortcode() {
	$address_group = get_field('footer_address_info', 'options');
	$mail_title = $address_group['mail_title'];
	$mail_address = $address_group['mail'];
	$address_title = $address_group['adress_title'];
	$address_text = $address_group['address'];

	$block = <<<ADDR
<h5 class="mb-px-16">{$mail_title}</h5>
<a href="mailto:{$mail_address}" class="footer-text-size mb-5 display-block">{$mail_address}</a>
<div class="pt-1">
	<h5 class="mb-px-28">{$address_title}</h5>
</div>
<div class="pe-px-lg-0 pe-px-md-60 pe-px-40">
	<p class="footer-text-size mb-4">{$address_text}</p>
</div>
ADDR;

	return $block;
}

add_shortcode( 'footer-address-info' , 'footer_address_info_shortcode' );