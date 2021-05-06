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


	function get_header_card() {

		$block = <<<CARD
<div class="modal fade" id="checkout-modal" tabindex="-1" aria-hidden="true">
	<div class="container-fluid mt-8">
		<div class="row">
			<div class="col-lg-6 offset-6">
				<div class="modal-dialog modal-xl">
				<div class="modal-content">
					<div class="modal-body"> 
						<h3 class="text-center mb-4 mt-3">Check Out Item</h3>
						<table class="table mb-2 table-bordered bg-white-smoke">
						<thead>
							<tr class="text-black text-center align-middle">
								<th scope="col">Product</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Discount</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr class="text-black text-center align-middle">
								<td> <img class="height-px-50 object-fit-cover" src="assets/images/shop/s3.jpg" alt="Shop3"></td>
								<td>350$</td>
								<td>2</td>
								<td>20$</td>
								<td>330$</td>
							</tr>
							<tr class="text-black text-center align-middle">
								<td> <img class="height-px-50 object-fit-cover" src="assets/images/shop/s4.jpg" alt="Shop3"></td>
								<td>250$</td>
								<td>3</td>
								<td>15$</td>
								<td>235$</td>
							</tr>
							<tr class="text-black text-center align-middle">
								<td> <img class="height-px-50 object-fit-cover" src="assets/images/shop/s5.jpg" alt="Shop3"></td>
								<td>150$</td>
								<td>4</td>
								<td>10$</td>
								<td>140$  </td>
							</tr>
							<tr class="text-black text-center align-middle text-center">
								<td class="font-weight-bold">Grand Total</td>
								<td class="text-end font-weight-bold" colspan="4">705$ </td>
							</tr>
						</tbody>
						</table>
					</div>
					<div class="modal-footer border-0">
						<button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Add items</button>
						<button class="btn btn-primary" type="button" data-bs-dismiss="modal">Check Out</button>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
CARD;

		return $block;
	
	}

	function get_header_form() {

		$block = <<<FORM
<div class="modal fade" id="user-login" tabindex="-1" aria-hidden="true">
	<div class="container-fluid mt-8">
	<div class="row">
		<div class="col-lg-4 offset-8">
			<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<div class="row">
					<div class="col-lg-11">
						<h3 class="mb-4 mt-1">Subscription account For Hanan</h3>
					</div>
					<div class="col-lg-1 my-auto">
						<div class="ms-n1">
							<button class="btn btn-black close rounded-0 px-2 py-2" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						</div>
					</div>
					</div>
					<form>
					<div class="form-group">
						<input class="form-control input-border" id="user-name" type="text" placeholder="User name">
					</div>
					<div class="form-group mt-4">
						<input class="form-control input-border" id="Pasword-name" type="password" placeholder="********">
					</div>
					</form>
				</div>
				<div class="modal-footer border-0">
					<button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Register</button>
					<button class="btn btn-black" type="button" data-bs-dismiss="modal">Login</button>
				</div>
			</div>
			</div>
		</div>
	</div>
	</div>
</div>
FORM;

		return $block;
	
	}
}