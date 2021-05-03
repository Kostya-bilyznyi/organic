<?php
class OrganicHeader {
	public $acf_fields;

	function __construct() {
		$this->acf_fields = get_field('header', 'options');
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