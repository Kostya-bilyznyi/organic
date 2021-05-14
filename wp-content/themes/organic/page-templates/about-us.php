<?php
/**
 * Template Name: About us page
 *
 */
require_once THEME_DIR . '/inc/classes/FlexibleContent.class.php';

$content = new FlexibleContent();
$acf_fields = get_field('content');

get_header(); ?>
	<article class="entry">
		<div class="entry-content">
			<?php echo get_theme_page_title_block( get_the_title(), false, false );
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

						case 'hero_section':
							echo $content->hero_section($about_block);
							break;
					}

				endforeach;
			endif; ?>

		</div>
	</article>
<?php
get_footer(); ?>