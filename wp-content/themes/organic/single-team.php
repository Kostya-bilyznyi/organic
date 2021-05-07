<?php 
require_once THEME_DIR . '/inc/classes/SingleTeam.class.php';

$single_team = new SingleTeam(); 
get_header(); ?>

    <article class="entry single-team">
      <div class="entry-content">
        <div class="bg-texture-image pt-px-lg-119 pt-md-7 pt-6 overflow-hidden">
          <div class="container position-relative">
            <div class="row">
					<?php 
					echo get_theme_page_title_block( get_the_title(), false, false );
					echo $single_team->get_team_image(); ?>
				</div>
          </div>
        </div>
        <div class="container mt-lg-8 mt-md-7 mt-5">
				<?php echo $single_team->get_team_info(); ?>
          <div class="row justify-content-lg-center">
            <div class="col-lg-8">
					<?php echo $single_team->get_team_content(); ?>
					<?php echo $single_team->get_team_quote(); ?>
            </div>
          </div>
        </div>
        <div class="container my-5">
          <div class="row gx-lg-5">
			 	<?php echo $single_team->get_team_images(); ?>
          </div>
        </div>
      </div>
    </article>
<?php
get_footer(); ?>