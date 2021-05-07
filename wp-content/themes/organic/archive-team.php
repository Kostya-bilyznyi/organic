<?php 
get_header();
$post_pagonation_htnl = '<div class="col-md-12 nav-wrapper">'. get_the_posts_pagination(array( 'prev_text' => '«', 'next_text' => '»' )) . '</div>'; ?>

    <article class="entry">
      <div class="entry-content">
        <div class="container mt-lg-8 mt-md-7 mt-6">
          <div class="row large-gutters">
            <div class="col-lg-4 mb-7">
					<?php dynamic_sidebar('archive-left-sidebar'); ?>
            </div>
            <div class="col-lg-8 mb-7">
              <div class="row gx-lg-5 gy-lg-5 gy-3 gx-3 blog-post gy-5">
					<?php
						if(have_posts()) :
							while(have_posts()) :
								the_post();
								get_template_part('template-parts/posts/post', 'item');
							endwhile;

							echo $post_pagonation_htnl;
						else :
							get_template_part('template-parts/posts/post', 'none');
						endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
<?php
get_footer(); ?>