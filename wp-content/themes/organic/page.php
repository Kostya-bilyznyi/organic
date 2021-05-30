<?php 
$content = get_the_content();
$html_content = ( !empty( $content ) ) ? '<div class="container mt-lg-8 mt-md-7 mt-5"><div class="row justify-content-lg-center"><div class="col-lg-8">' . $content . '</div></div></div>' : null ;

$thumbnail_url = get_the_post_thumbnail_url();
$html_thumbnail = ( !empty( $html_thumbnail ) ) ? '<img class="mt-px-lg-61 mt-px-md-64 mt-px-48 height-px-630 w-100 object-fit-cover" src="' . $thumbnail_url . '" alt="a8 single post2">' : null;
 
require_once THEME_DIR . '/inc/classes/FlexibleContent.class.php';

$content = new FlexibleContent();
$acf_fields = get_field('content');

get_header(); ?>

<article class="entry">
	<div class="entry-content">
		<div class="bg-texture-image pt-px-lg-119 pt-md-7 pt-6 overflow-hidden">
			<div class="container position-relative">
				<div class="row">
					<?php
					echo get_theme_page_title_block( get_the_title(), false, false );
					echo $html_thumbnail; ?>
				</div>
			</div>
		</div>
		<?php echo $html_content;
		if(!empty($acf_fields)) :
			foreach($acf_fields as $about_block) :

				$layout = $about_block['acf_fc_layout'];

				switch($layout) {
					case 'text_and_image_2_columns':
						echo $content->text_and_image_2_columns($about_block);
						break;

					case '3_images_3_columns':
						echo $content->images_3_columns($about_block);
						break;

					case 'text_and_image_3_columns':
						echo $content->text_and_image_3_columns($about_block);
						break;

					case 'big_text_small_text_columns_and_2_images':
						echo $content->big_text_small_text_columns_and_2_images($about_block);
						break;

					case 'text_and_slider':
						echo $content->text_and_slider($about_block);
						break;

					case 'image_text_repiter':
						echo $content->image_text_repiter($about_block);
						break;

					case 'two_images_and_quote':
						echo $content->two_images_and_quote($about_block);
						break;
				}

			endforeach;
		endif; ?>
	</div>
</article>

<?php
get_footer(); ?>