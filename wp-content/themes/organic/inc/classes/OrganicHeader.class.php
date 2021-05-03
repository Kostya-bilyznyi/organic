<?php
class OrganicHeader {
	public $acf_fields;

	function __construct() {
		$this->acf_fields = get_field('header', 'options'); 
	}

	function get_sale_section() {
		$sale_bunner_link = $this->acf_fields['sale_bunner_link'];
		$sale_bunner_tiile = $sale_bunner_link['title'];
		$sale_bunner_url = $sale_bunner_link['url'];
		$sale_bunner_icon = $this->acf_fields['sale_bunner_icon'];

		$block = <<<HTML
<div class="bg-bay-leaf">
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
}