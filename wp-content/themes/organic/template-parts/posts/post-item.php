<?php
$post_url = get_permalink();
$post_title = get_the_title();
$post_content = wp_trim_words(get_the_content(), 40, '...');

$thumbnail_url = get_the_post_thumbnail_url();
// $html_thumbnail = (!empty($thumbnail)) ? '<a class="blog-thumb mb-20 mb-md-0 mr-md-4 mr-xl-5 w-md-50 zoom-in d-block overflow-hidden" href="'. $post_url .'">'. $thumbnail .'</a>' : null;

$txt_more = __('Read More', 'orgamic');
?>

<div class="col-md-12">
	<article>
		<figure class="entry-media">
			
			<img class="lozad height-px-320 object-fit-cover w-100" src="<?php echo $thumbnail_url; ?>" data-src="<?php echo $thumbnail_url; ?>" alt="b1 image"/>

			<span class="entry-meta-category">
				<a href="<?php echo $post_url; ?>"><?php echo $txt_more; ?></a>
			</span>
		</figure>
		<div class="entry-content-wrapper bg-texture-image">
			<header class="entry-header">
				<a href="<?php echo $post_url; ?>">
					<h5 class="mb-px-17 hover-color"><?php echo $post_title; ?></h5>
				</a>
			<div class="entry-meta-top">
			</div>
			</header>
			<div class="entry-content">
				<?php echo $post_content; ?>
			</div>
		</div>
	</article>
</div>