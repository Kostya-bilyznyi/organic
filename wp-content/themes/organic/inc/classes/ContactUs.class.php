<?php
class ContactUs {

	function get_offises() {
		$offises_list = get_field('offises');
		if( empty( $offises_list ) ) {
			return false;
		}

		$html_offises = null;
		foreach ( $offises_list as $offises_item ) {
			
			$image = $offises_item['image'];
			$image_url = $image['url'];
			$image_alt = $image['alt'];
			$content = $offises_item['offise_info'];

			$html_offises .= <<<HTML
<div class="col-lg-4">
	<img class="height-px-408 w-100 object-fit-cover test" src="{$image_url}" alt="{$image_alt}">
	<div class="bg-texture-image py-4 px-4">
		<div class="py-3 px-3">
			{$content}
		</div>
	</div>
</div>
HTML;

		}

		$block = <<<HTML
<div class="overflow-hidden">
	<div class="container mt-lg-8 mt-md-7 mt-4"> 
		<div class="row gx-lg-5">
			{$html_offises}
		</div>
	</div>
</div>		
HTML;
		return $block;
	}

	function get_form() {
		$image = get_field( 'form_image' );
		$image_url = $image['url'];
		$image_alt = $image['alt'];
		$content = get_field( 'form_description' );
		$form_id = get_field( 'form' );
		$form = do_shortcode( '[contact-form-7 id="' . $form_id . '" ]' );
		$block = <<<HTML
<div class="container my-lg-8 my-md-7 my-5">
	<div class="container">
		<div class="row gx-lg-5">
			<div class="col-lg-5">
				<div class="position-relative">
					<img class="mb-lg-0 mb-5 height-px-383 w-100 object-fit-cover" src="{$image_url}" alt="{$image_alt}">
					<div class="bg-texture-image py-4 px-4">
						<div class="py-3 px-3">
							{$content}
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 my-auto">
				<div class="ms-px-lg-32 me-px-lg-40">
					<div class="pr-lg-5 pb-md-0">
						{$form}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
HTML;

		return $block;
	}

	function get_map() {
		$map = get_field('map');
		$map_lat = $map['lat'];
		$map_lng = $map['lng'];

		$block = <<<HTML
<div class="entry-content">
	<div class="acf-map" data-zoom="16">
		<div class="marker" data-lat="{$map_lat}" data-lng="{$map_lng}"></div>
	</div>
</div>
HTML;

		return $block;
	}
}

