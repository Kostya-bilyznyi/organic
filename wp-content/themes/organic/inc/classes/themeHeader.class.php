<?php
class ThemeHeader {
	public $acf_fields;
	public $home_url;
	public $logo_alt;

	function __construct() {
		$this->acf_fields = get_field('header', 'options'); 
		$this->home_url = home_url('/');
		$this->logo_alt = get_bloginfo( 'name' ); 
	}

	function get_sale_section() {
		$sale_bunner_link = $this->acf_fields['sale_bunner_link'];
		$sale_bunner_tiile = $sale_bunner_link['title'];
		$sale_bunner_url = $sale_bunner_link['url'];
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

	function get_header_mobail() {
		$home_url = $this->home_url;
		$logo_img_url = $this->acf_fields['mobail_logo'];
		$logo_alt =  $this->logo_alt;

		$block = <<<MOB
<a class="navbar-brand text-center d-md-block d-lg-none" href="{$home_url}">
	<img class="navbar-brand__img" src="{$logo_img_url}" alt="{$logo_alt}"/>
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
</button>
MOB;	

		return $block;
	}

	function get_header_logo() {
		$home_url = $this->home_url;
		$logo_img_url = $this->acf_fields['logo'];
		$logo_alt =  $this->logo_alt;

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
		$block = <<<MENU
<div class="col-lg-8">
	<ul class="navbar-nav justify-content-lg-center">
		<li class="nav-item ml-0">
			<a class="nav-link pl-0" href="index.html">Home</a>
		</li>
		<li class="nav-item dropdown">
			<a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
			<div class="dropdown-menu">
				<a class="dropdown-item" href="page-about-us.html">About Us</a>
				<a class="dropdown-item" href="page-services.html">Services</a>
				<a class="dropdown-item" href="page-contact.html">Contact Us</a>
				<a class="dropdown-item" href="page-partners.html">Partners</a>
				<a class="dropdown-item" href="page-404.html">404</a>
				<a class="dropdown-item" href="page-pricing-table.html">Pricing Table </a>
				<a class="dropdown-item" href="page-faq.html">Faq's</a>
				<a class="dropdown-item" href="page-team.html">Team</a>
				<a class="dropdown-item" href="page-testimonials.html">Testimonials</a>
			</div>
		</li>
		<li class="nav-item dropdown mega_menu_holder"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Portfolio</a>
			<div class="dropdown-menu"><a class="dropdown-item" href="page-portfolio.html">Portfolio</a><a class="dropdown-item" href="page-portfolio-three-col.html">Portfolio Three Col</a><a class="dropdown-item" href="single-project.html">Single Project</a></div>
		</li>
		<li class="nav-item dropdown mega_menu_holder"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
			<div class="dropdown-menu"><a class="dropdown-item" href="blog.html">Blog</a><a class="dropdown-item" href="blog-single-post.html">Single Post</a><a class="dropdown-item" href="blog-right-sidebar.html">Right Sidebar</a><a class="dropdown-item" href="blog-left-sidebar.html">Left Sidebar</a><a class="dropdown-item" href="blog-three-col.html">Three Col</a><a class="dropdown-item" href="blog-two-col-right-sidebar.html">Two Col Right Sidebar</a><a class="dropdown-item" href="blog-two-col-left-sidebar.html">Two Col Left Sidebar</a><a class="dropdown-item" href="blog-card-right-sidebar.html">Card Right Sidebar</a><a class="dropdown-item" href="blog-card-left-sidebar.html">Card Left Sidebar</a><a class="dropdown-item" href="blog-card-three-col.html">Card Three Col</a><a class="dropdown-item" href="blog-card-two-col-right-sidebar.html">Card two Col Right Sidebar</a><a class="dropdown-item" href="blog-card-two-col-left-sidebar.html">Card two Col Left Sidebar</a><a class="dropdown-item" href="blog-single-post-gallery.html">Single Gallary Post </a><a class="dropdown-item" href="blog-single-post-video.html">Single Video Post</a><a class="dropdown-item" href="blog-single-post-audio.html">Single Audio Post</a></div>
		</li>
		<li class="nav-item dropdown mega_menu_holder"><a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
			<div class="dropdown-menu"><a class="dropdown-item" href="shop.html">Shop</a><a class="dropdown-item" href="single-product.html">Single Product</a></div>
		</li>
		<li class="nav-item"><a class="nav-link" href="element-accordions.html">Element</a></li>
	</ul>
</div>
MENU;

		return $block;
	}

	function get_header_icons() {
		$block = <<<ICONS
<div class="col-lg-2 d-none d-lg-block">
	<ul class="list-unstyled nav-modules text-end">
	<!-- Social nav-->
		<li class="list-inline-item"><span class="i fas fa-user-circle navbar-icon-size me-px-18" data-bs-toggle="modal" data-bs-target="#user-login"></span></li>
		<li class="list-inline-item"><span class="i fas fa-search navbar-icon-size me-px-18 openBtn" onclick="openSearch()"></span></li>
		<li class="list-inline-item"><span class="i fas fa-bars navbar-icon-size" data-bs-toggle="modal" data-bs-target="#checkout-modal"></span></li>
	</ul>
</div>
ICONS;

		return $block;
	}
}

