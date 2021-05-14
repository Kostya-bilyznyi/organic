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

			<?php
			echo $advansed_fields->get_offises(); ?>
        <!-- <div class="overflow-hidden">
          <div class="container mt-lg-8 mt-md-7 mt-4"> 
            <div class="row gx-lg-5">
              <div class="col-lg-4 mb-0">
                <div class="bg-texture-image py-4 px-4">
                  <div class="py-3 px-3">
                    <h4 class="mb-4">Our London Shop</h4>
                    <p class="mb-1">9235 Bayberry Drive</p>Hendersonville, NC 28792
                    <p class="mb-1 mt-4">london@email.com​</p>+51853 458 243
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="bg-texture-image py-4 px-4">
                  <div class="py-3 px-3">
                    <h4 class="mb-4">Our Amsterdam Shop</h4>
                    <p class="mb-1">9235 Bayberry Drive</p>Hendersonville, NC 28792
                    <p class="mb-1 mt-4">amsterdam@email.com​</p>+51853 458 243
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="position-relative"><img class="height-px-408 w-100 object-fit-cover" src="assets/images/contact-us/c4.jpg" alt="contact-us-3"><img class="z-index-flower d-lg-block d-none position-absolute top-px-lg-12 end-px-n-lg-130" src="assets/images/flowers/f5.png" alt="f5 flower image"></div>
                <div class="bg-texture-image py-4 px-4">
                  <div class="py-3 px-3">
                    <h4 class="mb-4">Our Singapore Shop</h4>
                    <p class="mb-1">9235 Bayberry Drive</p>Hendersonville, NC 28792
                    <p class="mb-1 mt-4">singapore@email.com​</p>+51853 458 243
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!-- form and map-->
         <?php
			echo $advansed_fields->get_form();
         echo $advansed_fields->get_map(); ?>
      </div>
    </article>
<?php
get_footer(); ?>
