<?php
class FlexibleContent {

	function text_and_image_2_columns($data) {
		$layout = $data['layout'];

		// Image
		$image_url = $data['image']['url'];
		$image_alt = $data['image']['alt'];
		$html_image = '<div class="col-lg-6 mb-lg-0 mb-px-40"><img class="height-px-456 object-fit-cover w-100" src="'. $image_url .'" alt="' . $image_alt . '"></div>';

		// Link
		$link = $data['link'];
		if( !empty( $link ) ) :
			$link_title = $link['title'];
			$link_url = $link['url'];
			$link_target = $link['target'] ? $link['target'] : '_self';
			$html_link = '<a class="btn btn-parsley" target="' . $link_target . '" href="' . $link_url . '">' . $link_title . '</a>';
		else :
			$html_link = null;
		endif;
		
		// Content
		$content = $data['content'];
		$html_content = '<div class="col-lg-6 my-auto"><div class="ms-px-lg-32">'. $content . $html_link . '</div></div>';

		// Display
		if($layout == 'txt_img') {
			$display = $html_content . $html_image;
		} else {
			$display = $html_image . $html_content;
		}

		$block = <<<SALE
<div class="container margin-30-0">
	<div class="row gx-lg-5">
		{$display}
	</div>
</div>
SALE;

		return $block;
	}

	function images_3_columns($data) {

		// Image 1
		$image_1_url = $data['image_1']['url'];
		$image_1_alt = $data['image_1']['alt'];
		$html_image_1 = '<div class="col-lg-4"><img class="mb-lg-0 mb-md-5 mb-4 height-px-614 w-100 object-fit-cover" src="'. $image_1_url .'" alt="' . $image_1_alt . '"></div>';
		
		// Image 2
		$image_2_url = $data['image_2']['url'];
		$image_2_alt = $data['image_2']['alt'];
		$html_image_2 = '<div class="col-lg-4"><img class="mb-lg-0 mb-md-5 mb-4 height-px-614 w-100 object-fit-cover" src="'. $image_2_url .'" alt="' . $image_2_alt . '"></div>';
		
		// Image 3
		$image_3_url = $data['image_3']['url'];
		$image_3_alt = $data['image_3']['alt'];
		$html_image_3 = '<div class="col-lg-4"><img class="height-px-614 w-100 object-fit-cover" src="'. $image_3_url .'" alt="' . $image_3_alt . '"></div>';

		$block = <<<IMGS
<div class="container-fluid">
	<div class="row gx-lg-3">
		{$html_image_1}
		{$html_image_2}
		{$html_image_3}
	</div>
</div>
IMGS;

		return $block;
	
	}

	function text_and_image_3_columns($data) {
		$layout = $data['layout'];

		// Column 1
		// Image
		$image_1 = $data['column_1']['image'];
		$image_1_url = $image_1['sizes']['thumbnail'];
		$image_1_alt = $image_1['alt'];
		$html_image_1 = '<img class="mb-px-27" src="' . $image_1_url . '" alt="' . $image_1_alt . '">';
		
		// Content
		$content_1 = $data['column_1']['content'];
		$html_content_1 = '<div class="px-2">' . $data['column_1']['content'] . '</div>';

		// Display
		if( $layout == 'txt_img' ) {
			$display_1 = $html_content_1 . $html_image_1;
		} else {
			$display_1 = $html_image_1 . $html_content_1;
		}

		// Column 2
		// Image
		$image_2 = $data['column_2']['image'];
		$image_2_url = $image_2['sizes']['thumbnail'];
		$image_2_alt = $image_2['alt'];
		$html_image_2 = '<img class="mb-px-27" src="' . $image_2_url . '" alt="' . $image_2_alt . '">';
		
		// Content
		$content_2 = $data['column_2']['content'];
		$html_content_2 = '<div class="px-2">' . $data['column_2']['content'] . '</div>';

		// Display
		if( $layout == 'txt_img' ) {
			$display_2 = $html_content_2 . $html_image_2;
		} else {
			$display_2 = $html_image_2 . $html_content_2;
		}

		// Column 3
		// Image
		$image_3 = $data['column_3']['image'];
		$image_3_url = $image_3['sizes']['thumbnail'];
		$image_3_alt = $image_3['alt'];
		$html_image_3 = '<img class="mb-px-37" src="' . $image_3_url . '" alt="' . $image_3_alt . '">';
		
		// Content
		$content_3 = $data['column_3']['content'];
		$html_content_3 = '<div class="px-3">' . $data['column_3']['content'] . '</div>';

		// Display
		if( $layout == 'txt_img' ) {
			$display_3 = $html_content_3 . $html_image_3;
		} else {
			$display_3 = $html_image_3 . $html_content_3;
		}

		$block = <<<THRE
<div class="container mt-px-lg-150 mb-px-lg-150 mt-px-md-80 mb-px-md-80 mt-px-60 mb-px-60">
	<div class="row gx-lg-5 pt-px-lg-15 pb-px-lg-29">
		<div class="col-lg-4 mb-lg-0 mb-px-md-40 mb-px-30">
			<div class="text-center">
				{$display_1}
			</div>
		</div>
		<div class="col-lg-4 mb-lg-0 mb-px-md-40 mb-px-30">             
			<div class="text-center">
				{$display_2}
			</div>
		</div>
		<div class="col-lg-4">
			<div class="text-center">
				{$display_3}
			</div>
		</div>
	</div>
</div>
THRE;

		return $block;
	
	}

	function big_text_small_text_columns_and_2_images($data) {
		// Content
		$content = $data['content'];

		// Front Image
		$front_image_url = $data['front_image']['url'];
		$front_image_alt = $data['front_image']['alt'];
		$html_front_image = '<img class="height-px-460 object-fit-cover w-100" src="' . $front_image_url . '" alt="' . $front_image_alt . '">';
		
		// Back Image
		$back_image_url = $data['back_image']['url'];
		$back_image_alt = $data['back_image']['alt'];
		$html_back_image = '<img class="mb-md-0 mb-px-20 height-px-550 object-fit-cover w-100" src="' . $back_image_url . '" alt="' . $back_image_alt . '">';

		// Repiter content columns
		$columns_list = $data['columns'];
		$html_columns = null;
		foreach ( $columns_list as $columns_item ) {
			
			$column_content = $columns_item['small_text'];
			
			$html_columns .= '<div class="col-md-6">' . $column_content . '</div>';
		}
		


		$block = <<<MEGA
<div class="mt-px-lg-120 mb-px-lg-120 mt-px-md-80 mb-px-md-70 mt-px-20 mb-px-50">
	<div class="container pb-px-lg-66">
		<div class="row gx-lg-5">
			<div class="col-lg-6 order-lg-1">
				<div class="ms-px-lg-32">
					<div class="position-relative">
						<div class="ms-px-lg-151 me-lg-0 me-px-md-150">
							<div class="ps-px-lg-30 pe-lg-0 pe-px-md-70">
								{$html_back_image}
							</div>
						</div>
						<div class="position-md-absolute top-0 end-0">
							<div class="me-px-lg-101 ms-px-md-150 ms-lg-0 mt-px-lg-150 mt-px-md-120">
								<div class="pe-px-lg-85 ps-lg-0 ps-px-md-70 pt-px-lg-70">
									{$html_front_image}
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6 my-auto">
				<div class="position-relative">
					<div class="mt-px-lg-84 mt-px-md-150 mt-px-30">
						{$content}
						<div class="row mt-px-lg-30 mt-px-20">
							{$html_columns}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
MEGA;
		return $block;
	}


	function text_and_slider($data) {

		$content = $data['content'];
		$link = $data['link'];
		$link_url = $link['url'];
		$link_title = $link['title'];
		$link_html = '<a class="btn btn-parsley" href="' . $link_url . '">' . $link_title . '</a>';

		$slider_list = $data['slider'];
		$html_slider = null;
		$slider_counter = 1;

		foreach ( $slider_list as $slider_item ) {

			$image_url = $slider_item['image']['url'];
			$image_alt = $slider_item['image']['alt'];
			$slider_class = ( $slider_counter == 1 ) ? 'active' : null;
			$slide_content = $slider_item['text'];
			$slide_link = $slider_item['link'];
			$slide_link_url = $slide_link['url'];
			$slide_link_title = $slide_link['title'];
			$slider_counter++;
			
			$html_slider .= <<<HTML
<div class="carousel-item pb-px-lg-50 {$slider_class}">
	<div class="position-relative">
		<img class="d-block w-100 height-px-520 object-fit-cover w-100" src="{$image_url}" alt="{$image_alt}">
		<div class="position-absolute top-50 end-0">
			<div class="me-px-50 mt-px-lg-145 mt-px-md-151">
				<div class="bg-white mb-px-n-50 border-radius-home ps-px-30 pe-px-30 pt-px-28 pb-px-32">
					{$slide_content}
					<div class="mt-px-14">
						<a class="h6 btn-link border-2 border-bottom shop-button-style" href="{$slide_link_url}">{$slide_link_title}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
HTML;
		}
		

		$block = <<<HTML
<div class="bg-texture-image pt-px-lg-120 pb-px-lg-120 pt-px-md-80 pb-px-md-70 pt-px-30 pb-px-60 overflow-hidden">
	<div class="container">
		<div class="row gx-lg-5">
			<div class="col-lg-5 order-lg-1 mb-lg-0 mb-px-md-40 mb-px-30">
				<div class="position-relative">
					<div class="carousel slide z-index-back me-px-lg-0 me-px-md-60" id="carouselExampleControls" data-bs-ride="carousel">
						<div class="carousel-inner">
							{$html_slider}
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
					</div>
				</div>
			</div>
			<div class="col-lg-7 my-auto pe-px-lg-150">
				<div class="me-px-lg-100 me-px-md-60">
					{$content}
					{$link_html}
				</div>
			</div>
		</div>
	</div>
</div>
HTML;
		return $block;
	}


	function image_text_repiter($data) {
		$image_url = $data['image']['url'];
		$image_alt = $data['image']['alt'];
		$html_image = '<img class="z-index-3 height-px-780 w-100 object-fit-cover" src="' . $image_url . '" alt="' . $image_alt . '">';
		
		$content = $data['content'];

		$repiter_list = $data['advantages'];
		$html_repiter = null;

		foreach ( $repiter_list as $repiter_item ) {

			$image_url = $repiter_item['image']['url'];
			$image_alt = $repiter_item['image']['alt'];
			$repiter_content = $repiter_item['content'];

			$html_repiter .= <<<HTML
<div class="row gx-lg-0 mb-px-md-45 mb-px-30">
	<div class="col-3">
		<img class="img-100px" src="{$image_url}" alt="{$image_alt}">
	</div>
	<div class="col-9">
		{$repiter_content}
	</div>
</div>
HTML;
		}
		
		$block = <<<HTML
<div class="container mt-px-lg-120 mb-px-lg-120 mt-px-md-80 mb-px-md-80 mt-px-60 mb-px-60">
	<div class="row gx-lg-5">
		<div class="col-lg-6 mb-lg-0 mb-px-30">
			<div class="position-relative">
				{$html_image}
			</div>
		</div>
		<div class="col-lg-6 my-auto">
			<div class="ms-px-lg-32">
				{$content}
			</div>
			<div class="pe-px-lg-60">
				{$html_repiter}
			</div>
		</div>
	</div>
</div>
HTML;
		return $block;
	}


	function two_images_and_quote($data) {
		// Content
		$content = $data['quote'];

		// Front Image
		$front_image_url = $data['front_image']['url'];
		$front_image_alt = $data['front_image']['alt'];
		$html_front_image = '<img class="mb-md-0 mb-px-40 height-px-550 object-fit-cover w-100" src="' . $front_image_url . '" alt="' . $front_image_alt . '">';
		
		// Back Image
		$back_image_url = $data['back_image']['url'];
		$back_image_alt = $data['back_image']['alt'];
		$html_back_image = '<img class="height-px-460 object-fit-cover w-100" src="' . $back_image_url . '" alt="' . $back_image_alt . '">';


		
		$block = <<<HTML
<div class="bg-texture-image overflow-hidden pt-px-lg-120 pb-px-16 pt-px-md-80 pt-px-60 mb-px-60">
	<div class="container pb-px-lg-150 pb-px-md-60 pb-px-50">
		<div class="row gx-lg-5">
			<div class="col-lg-6">
				<div class="position-relative">
				<div class="me-px-lg-151 me-px-md-150">
					<div class="pe-px-lg-30 pe-px-md-70">
						{$html_back_image}
					</div>
				</div>
				<div class="position-md-absolute top-px-lg-0 end-px-lg-0 top-px-md-15">
					<div class="ms-px-md-151 mt-px-lg-150 mt-px-md-120">
						<div class="ps-px-lg-85 pt-px-lg-70 ps-px-md-70">
							{$html_front_image}
						</div>
					</div>
				</div>
				</div>
			</div>
			<div class="col-lg-6 my-auto">
				<div class="ms-px-lg-32 mt-px-lg-150 mt-px-md-150 mt-px-30">
					<i class="fas fa-quote-left text-grain-brown icon-left-quote mb-px-30"></i>
					{$content}
				</div>
			</div>
		</div>
	</div>
</div>
HTML;

		return $block;
	
	}
}


