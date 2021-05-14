<?php $temp_html_dir = THEME_DIR_URI . '/' . 'organic/' ?>
 <?php
/**
 * The main template file.
 *
 */
require_once THEME_DIR . '/inc/classes/FlexibleContent.class.php';
$content = new FlexibleContent();
$acf_fields = get_field('content');
get_header(); ?>
	 <!-- End Navbar -->
    <article class="entry">
      <div class="entry-content">
			<?php
			if(!empty($acf_fields)) :
				foreach($acf_fields as $about_block) :

					$layout = $about_block['acf_fc_layout'];

					switch($layout) {
						case 'text_and_image_2_columns':
							echo $content->text_and_image_2_columns($about_block);
							break;

						case '3_images_3_columns':
							echo $content->images_3_columns($about_block);
							break;

						case 'text_and_image_3_columns':
							echo $content->text_and_image_3_columns($about_block);
							break;

						case 'big_text_small_text_columns_and_2_images':
							echo $content->big_text_small_text_columns_and_2_images($about_block);
							break;

						case 'text_and_slider':
							echo $content->text_and_slider($about_block);
							break;

						case 'image_text_repiter':
							echo $content->image_text_repiter($about_block);
							break;

						case 'two_images_and_quote':
							echo $content->two_images_and_quote($about_block);
							break;
					}

				endforeach;
			endif; ?>

        <!-- shop-->
        <div class="overflow-hidden">
          <div class="container mt-px-lg-120 mb-px-lg-120 mt-px-md-80 mb-px-md-80 mt-px-60 mb-px-60">
            <div class="position-relative"> 
              <div class="text-center">
                <h3 class="mb-px-md-52 mb-px-40">Organic Meals</h3>
              </div>
              <div class="row gx-lg-5 gy-lg-6 card-post-style">
                <div class="col-lg-4 mb-lg-0 mb-px-md-50 mb-px-40">
                  <article class="mb-lg-0 mb-px-md-40 mb-px-20"><a href="single-product.html"><img class="mb-px-18 height-px-456 w-100 object-fit-cover" src="<?php echo $temp_html_dir; ?>assets/images/shop/s9.jpg" alt="s9 image"/></a>
                    <h5 class="product-title"><a href="single-product.html">Taco with meat and vegetables</a></h5><span class="price"><span class="amount"><span class="currencySymbol">$15.99</span></span></span>
                    <div class="mt-px-14"><a class="h6 btn-link border-2 border-bottom shop-button-style" href="single-product.html">Add to cart</a></div>
                  </article>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-px-md-50 mb-px-40">
                  <article class="mb-lg-0 mb-px-md-40 mb-px-20"><a href="single-product.html"><img class="mb-px-18 height-px-456 w-100 object-fit-cover" src="<?php echo $temp_html_dir; ?>assets/images/shop/s8.jpg" alt="s8 image"/></a>
                    <h5 class="product-title"><a href="single-product.html">Sala dwith Grilled squids </a></h5><span class="price"><span class="amount"><span class="currencySymbol">$20.99</span></span></span>
                    <div class="mt-px-14"><a class="h6 btn-link border-2 border-bottom shop-button-style" href="single-product.html">Add to cart</a></div>
                  </article>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-px-md-50 mb-px-40">
                  <article class="mb-lg-0 mb-px-md-40 mb-px-20"><a href="single-product.html"><img class="mb-px-18 height-px-456 w-100 object-fit-cover" src="<?php echo $temp_html_dir; ?>assets/images/shop/s7.jpg" alt="s7 image"/></a>
                    <h5 class="product-title"><a href="single-product.html">Chicken burrito</a></h5><span class="price"><span class="amount"><span class="currencySymbol">$21.99</span></span></span>
                    <div class="mt-px-14"><a class="h6 btn-link border-2 border-bottom shop-button-style" href="single-product.html">Add to cart</a></div>
                  </article>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-px-md-50 mb-px-40">
                  <article class="mb-lg-0 mb-px-md-40 mb-px-20"><a href="single-product.html"><img class="mb-px-18 height-px-456 w-100 object-fit-cover" src="<?php echo $temp_html_dir; ?>assets/images/shop/s6.jpg" alt="s6 image"/></a>
                    <h5 class="product-title"><a href="single-product.html">Baked salmon fish</a></h5><span class="price"><span class="amount"><span class="currencySymbol">$15.99</span></span></span>
                    <div class="mt-px-14"><a class="h6 btn-link border-2 border-bottom shop-button-style" href="single-product.html">Add to cart</a></div>
                  </article>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-px-md-50 mb-px-40">
                  <article class="mb-lg-0 mb-px-md-40 mb-px-20"><a href="single-product.html"><img class="mb-px-18 height-px-456 w-100 object-fit-cover" src="<?php echo $temp_html_dir; ?>assets/images/shop/s5.jpg" alt="s5 image"/></a>
                    <h5 class="product-title"><a href="single-product.html">Organic Wrap</a></h5><span class="price"><span class="amount"><span class="currencySymbol">$60.99</span></span></span>
                    <div class="mt-px-14"><a class="h6 btn-link border-2 border-bottom shop-button-style" href="single-product.html">Add to cart</a></div>
                  </article>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-px-md-50 mb-px-40">
                  <article class="mb-lg-0 mb-px-md-40 mb-px-20"><a href="single-product.html"><img class="mb-px-18 height-px-456 w-100 object-fit-cover" src="<?php echo $temp_html_dir; ?>assets/images/shop/s4.jpg" alt="s4 image"/></a>
                    <h5 class="product-title"><a href="single-product.html">Mexican black bean corn</a></h5><span class="price"><span class="amount"><span class="currencySymbol">$10.99</span></span></span>
                    <div class="mt-px-14"><a class="h6 btn-link border-2 border-bottom shop-button-style" href="single-product.html">Add to cart</a></div>
                  </article>
                </div>
              </div>
              <!-- End Products-->
              <div class="text-center mt-px-lg-80"><a class="btn btn-parsley" href="shop.html">See more</a></div><img class="d-lg-block d-none position-absolute bottom-px-n-lg-8 start-px-n-lg-41" src="<?php echo $temp_html_dir; ?>assets/images/flowers/f6.png" alt="f6 flower image"><img class="d-lg-block d-none position-absolute top-px-n-lg-0 end-px-n-lg-37" src="<?php echo $temp_html_dir; ?>assets/images/flowers/f5.png" alt="f5 flower image">
            </div>
          </div>
        </div>

      </div>
    </article>
<?php
get_footer(); ?>