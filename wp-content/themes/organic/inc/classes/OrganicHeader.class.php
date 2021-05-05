<?php
class OrganicHeader {
	public $acf_fields;

	function __construct() {
		$this->acf_fields = get_field('header', 'options');
	}

	function get_sale_section() {
		$sale_bunner_link = $this->acf_fields['sale_bunner_link'];
		$sale_bunner_tiile = $this->acf_fields['sale_bunner_link']['title'];
		$sale_bunner_url = $this->acf_fields['sale_bunner_link']['url'];
		$sale_bunner_icon = $this->acf_fields['sale_bunner_icon'];

		$block = <<<SALE
<div class="bg-bay-leaf py-2">
	<div class="continer">
		<a class="text-center" href="{$sale_bunner_url}">
			<p class="font-size-14 text-white mb-0">
				{$sale_bunner_tiile}
				<span>
					{$sale_bunner_icon}
				</span>
			</p>
		</a>
	</div>
</div>
SALE;

		return $block;
	}

	function get_header_search() {
		$search = get_search_form();

		$block = <<<SRCH
<a class="navbar-brand text-center d-md-block d-lg-none" href="{$home_url}">
	<img class="navbar-brand__img" src="{$logo_img_url}" alt="{$logo_alt}"/>
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
</button>
SRCH;

		return $block;
	}

	function get_header_logo() {
		$home_url = home_url('/');
		$logo_img_url = $this->acf_fields['logo'];
		$logo_alt =  get_bloginfo( 'name' );

		$block = <<<LOGO
<div class="col-lg-2">
	<a class="navbar-brand mx-auto d-none d-lg-block" href="{$home_url}">
		<img class="navbar-brand__img" src="{$logo_img_url}" alt="{$logo_alt}"/>
	</a>
</div>
LOGO;

		return $block;
	}

	function get_header_menu() {
		$main_menu = wp_nav_menu( [
			'theme_location'  => 'main_menu',
			'menu'            => '', 
			'container'       => '', 
			'container_class' => '', 
			'container_id'    => '',
			'menu_class'      => 'navbar-nav justify-content-lg-center', 
			'menu_id'         => '',
			'echo'            => false,
			'fallback_cb'     => 'wp_page_menu',
			'before'          => '',
			'after'           => '',
			'link_before'     => '',
			'link_after'      => '',
			'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
			'depth'           => 0,
			'walker'          => '',
		] );

		$block = <<<MENU
<div class="col-lg-7">
	{$main_menu}
</div>
MENU;

		return $block;
	}

	function get_header_icons() {
		$social_list = get_field('header_social_networks', 'options');
		if( empty( $social_list ) ) {
			return false;
		}

		$html_social = null;
		foreach ( $social_list as $social_item ) {
			
			$network_url = $social_item['social_link'];
			$icon = $social_item['social_icon'];
			
			$html_social .= '<li class="list-inline-item me-px-21"><a target="_blank" href="' . $network_url . '">' . $icon . '</a></li>';
		}

		$block = <<<ICONS
<div class="col-lg-3 d-none d-lg-block">
	<ul class="list-unstyled nav-modules text-end">
		{$html_social}
		<li class="list-inline-item"><span class="i fas fa-user-circle navbar-icon-size me-px-18" data-bs-toggle="modal" data-bs-target="#user-login"></span></li>
		<li class="list-inline-item"><span class="i fas fa-bars navbar-icon-size" data-bs-toggle="modal" data-bs-target="#checkout-modal"></span></li>
	</ul>
</div>
ICONS;

		return $block;
	}
}