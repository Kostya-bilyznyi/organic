<?php 
get_header(); ?>
<article class="entry">
	<div class="entry-content">
		<div class="bg-texture-image pt-px-lg-119 pt-md-7 pt-6 overflow-hidden">
			<div class="container position-relative">
				<div class="row">
					<?php
					echo get_theme_page_title_block( get_the_title(), false, false );

					woocommerce_content(); ?>

				</div>
			</div>
		</div>
	</div>
</article>
<?php
get_footer();


