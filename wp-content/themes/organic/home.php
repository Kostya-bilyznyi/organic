<?php 
get_header();

$sub_title = get_field( 'sub_title', get_option( 'page_for_posts' ) );
$title = get_field( 'title', get_option( 'page_for_posts' ) );
$content = get_field( 'content', get_option( 'page_for_posts' ) );
$post_thumbnail_url = get_the_post_thumbnail_url( get_option( 'page_for_posts' ) );
$post_pagonation_htnl = '<div class="col-md-12 nav-wrapper">'. get_the_posts_pagination(array( 'prev_text' => '«', 'next_text' => '»' )) . '</div>'; ?>

    <article class="entry">
      <div class="entry-content">
        <div class="small-bg-blog">
          <div class="container">
            <div class="row gx-lg-5 card-post-style">
              <div class="col-lg-12">
                <artical>
                  <div class="row gx-lg-5 pt-px-lg-151 pb-px-lg-151 pt-px-md-40 pb-px-md-70 pt-px-24 pb-px-60">
                    <div class="col-lg-6 order-lg-1">
								<img class="mb-px-lg-0 mb-px-md-40 mb-px-30 height-px-355 object-fit-cover w-100" src="<?php echo $post_thumbnail_url; ?>" alt="blog-Right-Sidebar-image"/>
                    </div>
                    <div class="col-lg-6 my-auto">
                      <div class="position-relative">
                        <div class="me-px-lg-80 mt-px-4">
                          <h5 class="font-letter-space mb-px-7"><?php echo $sub_title; ?></h5>
                          <h1><?php echo $title; ?></h1>
								  <?php echo $content; ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </artical>
              </div>
            </div>
          </div>
        </div>
        <div class="container mt-lg-8 mt-md-7 mt-6">
          <div class="row large-gutters">
            <div class="col-lg-8 mb-7">
              <!-- Blog-->
              <div class="row gx-lg-5 gy-lg-5 gy-3 gx-3 blog-post gy-5">
					<?php
						if(have_posts()) {
							while(have_posts()) {
								the_post();

								get_template_part('template-parts/posts/post', 'item');
							}

							echo $post_pagonation_htnl;
						} else {
							get_template_part('template-parts/posts/post', 'none');
						}
					?>
              </div>
              <!-- End Blog-->
              <!-- <div class="text-center align-items-center mt-5"><a class="btn btn-parsley" href="#">Load More</a></div> -->
            </div>
            <div class="col-lg-4 mb-7">
					<?php dynamic_sidebar('blog-right-sidebar'); ?>
            </div>
          </div>
        </div>
      </div>
    </article>
<?php
get_footer(); ?>