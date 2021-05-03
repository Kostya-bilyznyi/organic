<?php
class OrganicHeader {

	function get_header_logo() {
		$block = <<<HTML
<div class="col-lg-2">
	<a class="navbar-brand mx-auto d-none d-lg-block" href="#">
		TEST LINK
	</a>
</div>
HTML;

		return $block;
	}
}