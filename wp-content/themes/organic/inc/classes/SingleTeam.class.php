<?php
class SingleTeam {
	public $acf_fields;

	function __construct() {
		$this->acf_fields = get_field('employee');
	}

	function get_team_image() {
		$post_thumbnail_url = get_the_post_thumbnail_url();

		$block = <<<HTML
<img class="mt-px-lg-61 mt-px-md-64 mt-px-48 height-px-630 w-100 object-fit-cover" src="{$post_thumbnail_url}" alt="a8 single post2">
HTML;

		return $block;
	}

	function get_team_info() {
		$position =  $this->acf_fields['position'];
		$location_obj =  $this->acf_fields['location'];
		$location =  $location_obj->name;
		$location_html = __('Hello, I am from ', 'organictxt' ) . $location;


		$departament_obj =  $this->acf_fields['departament'];
		$departament =  $departament_obj->name;
		$departament_html = __('I am working at ', 'organictxt' ) . $departament .  __(' departament.', 'organictxt' );


		$block = <<<HTML
<div class="single-team__info row row justify-content-lg-center">
	<h5 class="text-flame-pea mb-px-12">{$position}</h5>
	<p>{$location_html}</p>
	<p>{$departament_html}</p>
</div>
HTML;

		return $block;
	}

	function get_team_content() {
		$content = get_the_content();

		$block = <<<HTML
{$content}
HTML;

		return $block;
	}

	function get_team_quote() {
		$quote =  $this->acf_fields['quote'];
		$title = get_the_title();

		$block = <<<HTML
<blockquote class="mt-5">
	<div class="border-start border-grain-brown border-3 ps-4">
		<p>{$quote}</p>
		<cite class="font-weight-bold text-flame-pea"> - {$title}</cite>
	</div>
</blockquote>
HTML;

		return $block;
	
	}

	function get_team_images() {
		$left_image = $this->acf_fields['left_image'];
		$left_image_url = $left_image['url'];
		$left_image_alt = $left_image['alt'];
		$left_image_html = '<img class="height-px-853 w-100 object-fit-cover" src="' . $left_image_url . '" alt="' . $left_image_alt . '">';

		$right_image = $this->acf_fields['right_image'];
		$right_image_url = $right_image['url'];
		$right_image_alt = $right_image['alt'];
		$right_image_html = '<img class="height-px-853 w-100 object-fit-cover" src="' . $right_image_url . '" alt="' . $right_image_alt . '">';

		$block = <<<HTML
<div class="col-lg-6 mb-lg-0 mb-5">
	{$left_image_html}
</div>
<div class="col-lg-6">
	{$right_image_html}
</div>
HTML;

		return $block;
	
	}
}