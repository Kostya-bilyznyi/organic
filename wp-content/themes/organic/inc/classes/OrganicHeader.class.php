<?php
class OrganicHeader {
	function get_sale_section() {

		$block = <<<SALE
<span>testSALE</span>
SALE;	

		return $block;
	}

	function get_header_mobail() {

		$block = <<<MOB
<span>testMOB</span>
MOB;	

		return $block;
	}
}