<?php
class OrganicHeader {

	function get_sale_section() {

		$block = <<<HTML
<div class="bg-bay-leaf py-2">
	<div class="continer">
		<a class="text-center" href="{$sale_bunner_url}">
			<p class="font-size-14 text-white mb-0">
				LOREM IPSUM
				<span>
					TEST
				</span>
			</p>
		</a>
	</div>
</div>
HTML;	

		return $block;
	}
}

