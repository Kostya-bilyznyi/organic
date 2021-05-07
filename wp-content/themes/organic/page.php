<?php 
$content = get_the_content();
$html_content = ( !empty( $html_thumbnail ) ) ? '<div class="container mt-lg-8 mt-md-7 mt-5"><div class="row justify-content-lg-center"><div class="col-lg-8">' . $content . '</div></div></div>' : null ;

$thumbnail_url = get_the_post_thumbnail_url();
$html_thumbnail = ( !empty( $html_thumbnail ) ) ? '<img class="mt-px-lg-61 mt-px-md-64 mt-px-48 height-px-630 w-100 object-fit-cover" src="' . $thumbnail_url . '" alt="a8 single post2">' : null;

get_header(); ?>

<article class="entry">
	<div class="entry-content">
		<div class="bg-texture-image pt-px-lg-119 pt-md-7 pt-6 overflow-hidden">
			<div class="container position-relative">
				<div class="row">
					<?php
					echo get_theme_page_title_block( get_the_title(), false, false );
					echo $html_thumbnail; ?>
				</div>
			</div>
		</div>
		<?php echo $html_content; ?>
	</div>
</article>

<?php
get_footer(); ?>