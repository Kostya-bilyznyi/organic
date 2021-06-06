<?php 
get_header();
echo get_theme_page_title_block( false, false, false ); ?>
<article class="entry">
	<div class="entry-content woocommerce-bgc">
		<!-- <div class="bg-texture-image pt-px-lg-119 pt-md-7 pt-6 overflow-hidden"> -->
			<div class="container position-relative">
				<div class="row">
					<?php

					woocommerce_content(); ?>

				</div>
			</div>
		<!-- </div> -->
	</div>
</article>
<?php
get_footer();


