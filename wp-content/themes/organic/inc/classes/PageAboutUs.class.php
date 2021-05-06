<?php
class AboutUs {

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
}