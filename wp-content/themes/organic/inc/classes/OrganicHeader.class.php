<?php
class OrganicHeader {
	public $acf_fields;

	function __construct() {
		$this->acf_fields = get_field('header', 'options');
	}

	/**
	 * Sale section
	 */
	function get_sale_section() {
		$sale_bunner_link = $this->acf_fields['sale_bunner_link'];
		$sale_bunner_tiile = $this->acf_fields['sale_bunner_link']['title'];
		$sale_bunner_url = $this->acf_fields['sale_bunner_link']['url'];
		$sale_bunner_icon = $this->acf_fields['sale_bunner_icon'];

		$block = <<<HTML
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
HTML;

		return $block;
	}

	/**
	 * Header mobail
	 */
	function get_header_mobail() {
		$home_url = home_url('/');
		$logo_img_url = $this->acf_fields['mobail_logo'];
		$logo_alt = get_bloginfo('name');

		$block = <<<HTML
<a class="navbar-brand text-center d-md-block d-lg-none" href="{$home_url}">
	<img class="navbar-brand__img" src="{$logo_img_url}" alt="{$logo_alt}"/>
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
</button>
HTML;

		return $block;
	}
}