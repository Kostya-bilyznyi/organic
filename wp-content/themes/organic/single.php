<?php 
get_header();

$temp_html_dir = THEME_DIR_URI . '/' . 'organic/';
$date = get_the_date('M j, Y');
$title = get_the_title();
$post_thumbnail_url = get_the_post_thumbnail_url();
$content = get_the_content();
$post_author = get_the_author();  ?>

    <article class="entry">
      <div class="entry-content">
        <!--featured image-->
        <div class="bg-texture-image pt-px-lg-119 pt-md-7 pt-6 overflow-hidden">
          <div class="container position-relative">
				<div class="row">
					<?php echo get_theme_page_title_block( $title, $post_author, $date );

				  if( !empty( $post_thumbnail_url ) ) : ?>
						<img class="mt-px-lg-61 mt-px-md-64 mt-px-48 height-px-630 w-100 object-fit-cover" src="<?php echo $post_thumbnail_url; ?>" alt="a8 single post2">
					<?php endif; ?>

				</div>
          </div>
        </div>
        <div class="container mt-lg-8 mt-md-7 mt-5">
          <div class="row justify-content-lg-center">
            <div class="col-lg-8">

					<?php echo $content; ?>

            </div>
          </div>
        </div>

			<div class="row justify-content-lg-center mt-4">
            <div class="col-lg-8">
              <!-- Comments Area-->
              <div class="comments comments-area container-small mt-4">
                <div class="comment-respond">
						<?php comments_template(); ?>
                </div>
                <!-- #respond-->
              </div>
              <!-- End Comments Area-->
            </div>
         </div>

      </div>
    </article>


<?php
get_footer(); ?>