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
}