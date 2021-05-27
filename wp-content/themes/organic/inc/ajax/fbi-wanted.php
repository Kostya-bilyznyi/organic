<?php
function ajax_get_fbi_data() {

	$office_code = esc_sql($_GET['office_code']);

	$api_url = 'https://api.fbi.gov/wanted/v1/list?pageSize=12&field_offices='. $office_code;

	$api_raw_data = file_get_contents($api_url);

	$api_data = json_decode($api_raw_data);

	if(empty($api_data->items)) {
		$output = array(
			'status' => 'error',
			'error' => __('Wrong office name', 'organic')
		);

		echo json_encode($output);
		die();
	}

	// $total_items = $api_data->total;
	// $total_pages = ceil( $total_items/12 );

	$criminal_info = $api_data->items;

	$results = array();

	foreach($criminal_info as $result_item) {
		$title = $result_item->title;
		$path = $result_item->path;
		$details = $result_item->details;
		$reward_text = $result_item->reward_text;
		$images = $result_item->images[0];
		$image = $images->original;

		$one_result = array(
			'title' => $title,
			'path' => $path,
			'details' => $details,
			'reward_text' => $reward_text,
			'image' => $image,
		);

		$results[] = $one_result;
	
	}


	$output = array(
		'status'  => 'success',
		'results' => $results,
		// 'pages'   =>  $total_pages
	);

	echo json_encode($output);

	die();
}
add_action('wp_ajax_get_fbi_data', 'ajax_get_fbi_data');
add_action('wp_ajax_nopriv_get_fbi_data', 'ajax_get_fbi_data');