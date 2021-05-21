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

function footer_copyright() {
	$copyright = get_field('footer_copyright', 'options');
	$year = date("Y");

	$block = <<<COPY
<div class="col-lg-6 col-md-6">
	<div class="footer-widget text-md-start text-center">
		<p class="m-md-0">&copy; {$year} {$copyright}</p>
	</div>
</div>
COPY;

	return $block;
}

add_shortcode( 'footer-copyright' , 'footer_copyright' );


function footer_social_icons() {
		$social_list = get_field( 'footer_social_networks', 'options' );
		if( empty( $social_list ) ) {
			return false;
		}

		$html_social = null;
		foreach ( $social_list as $social_item ) {
			
			$network_url = $social_item['social_link'];
			$icon = $social_item['social_icon'];
			
			$html_social .= '<li class="list-inline-item me-px-21"><a target="_blank" href="' . $network_url . '">' . $icon . '</a></li>';
		}

	$block = <<<ICON
<div class="col-lg-6 col-md-6">
	<div class="text-md-end text-center">
		<ul class="list-unstyled list-inlinetrue">
			{$html_social}
		</ul>
	</div>
</div>
ICON;

	return $block;
}

add_shortcode( 'footer-social-icons' , 'footer_social_icons' );


function footer_form() {
		$form_title = get_field( 'footer_form_title', 'options' );
		$form_sub_title = get_field( 'footer_form_sub_title', 'options' );
		$form_id = get_field( 'footer_form', 'options' );
		$form = do_shortcode( '[contact-form-7 id="' . $form_id . '" ]' );

	$block = <<<FORM
<h5 class="mb-px-16">{$form_title}</h5>
<p class="footer-text-size mb-4">{$form_sub_title}</p>
{$form}
FORM;

	return $block;
}

add_shortcode( 'footer-form' , 'footer_form' );
