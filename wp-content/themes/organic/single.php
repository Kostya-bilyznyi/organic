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
          <div class="container position-relative"><img class="d-lg-block d-none position-absolute top-px-lg-5 start-px-n-lg-25" src="<?php echo $temp_html_dir; ?>assets/images/flowers/f100.png" alt="f100 flower image"><img class="d-lg-block d-none position-absolute top-px-lg-30 end-px-n-lg-35" src="<?php echo $temp_html_dir; ?>assets/images/flowers/f11.png" alt="f11 flower image">
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

              	<blockquote class="mt-5">
						<div class="border-start border-grain-brown border-3 ps-4">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
							<cite class="font-weight-bold text-flame-pea"> - Richard Thomas</cite>
						</div>
              </blockquote>
            </div>
          </div>
        </div>
        <div class="container my-5">
          <div class="row gx-lg-5">
            <div class="col-lg-6 mb-lg-0 mb-5"><img class="height-px-853 w-100 object-fit-cover" src="<?php echo $temp_html_dir; ?>assets/images/single-project/sp1.jpg" alt="single-post1"></div>
            <div class="col-lg-6"><img class="height-px-853 w-100 object-fit-cover" src="<?php echo $temp_html_dir; ?>assets/images/single-project/sp2.jpg" alt="single-post2"></div>
          </div>
        </div>
        <div class="container">
          <div class="row justify-content-lg-center">
            <div class="col-lg-8">
              <h4 class="mb-4">There are many variations of passages of Lorem Ipsum available</h4>
              <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et sadipscing  accusam et justo duo dolores rebum.
            </div>
          </div>
          <div class="mt-5"><img class="height-px-730 w-100 object-fit-cover" src="<?php echo $temp_html_dir; ?>assets/images/single-project/sp3.jpg" alt="single-post3"></div>
          <div class="row justify-content-lg-center mt-5">
            <div class="col-lg-8">
              <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et sadipscing  accusam et justo duo dolores rebum.
            </div>
          </div>
          <div class="row justify-content-lg-center mt-5">
            <div class="col-lg-8 pr-lg-10"> 
              <div class="py-3"><i class="fas fa-tags text-parsley"></i><span class="ms-2"><a class="h5 font-letter-space" href="#">Energy, </a></span><span><a class="h5 font-letter-space" href="">New</a></span></div>
            </div>
          </div>
          <div class="row justify-content-lg-center mt-4">
            <div class="col-lg-8">
              <!-- Comments Area-->
              <div class="comments comments-area container-small mt-4">
                <div class="comment-respond">
						<?php comments_template(); ?>;
                </div>
                <!-- #respond-->
              </div>
              <!-- End Comments Area-->
            </div>
          </div>
        </div>

      </div>
    </article>


<?php
get_footer(); ?>