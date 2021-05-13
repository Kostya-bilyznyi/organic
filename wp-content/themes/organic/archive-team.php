<?php 
require_once THEME_DIR .'/inc/classes/ArchiveTeam.class.php';

$all_team = new ArchiveTeam();
get_header(); ?>

    <article class="entry">
      <div class="entry-content">
        <div class="container mt-lg-8 mt-md-7 mt-6">
          <div class="row large-gutters">
            <div class="col-lg-4 mb-7">
					<?php dynamic_sidebar('archive-left-sidebar'); ?>
            </div>
            <div class="col-lg-8 mb-7">
            	<div class="row gx-lg-5 gy-lg-5 gy-3 gx-3 blog-post gy-5">
						<?php echo $all_team->display(); ?>
            	</div>
            </div>
          </div>
			 
        </div>
      </div>
    </article>
<?php
get_footer(); ?>