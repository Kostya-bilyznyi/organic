<?php
/**
 * Template Name: Contact us page
 *
 */
// require_once THEME_DIR . '/inc/classes/PageAboutUs.class.php';

init_google_map();
require_once THEME_DIR . '/inc/classes/FlexibleContent.class.php';
require_once THEME_DIR . '/inc/classes/ContactUs.class.php';

$content = new FlexibleContent();
$advansed_fields = new ContactUs();
$acf_fields = get_field('content');
get_header(); ?>

    <article class="entry">
      <div class="entry-content">
			<?php
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
			endif;

			echo $advansed_fields->get_offises();
			echo $advansed_fields->get_form();
         echo $advansed_fields->get_map(); ?>
      </div>
    </article>
<?php
get_footer(); ?>
