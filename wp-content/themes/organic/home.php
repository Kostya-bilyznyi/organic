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
        <!--check out cart-->
        <div class="modal fade" id="checkout-modal" tabindex="-1" aria-hidden="true">
          <div class="container-fluid mt-8">
            <div class="row">
              <div class="col-lg-6 offset-6">
                <div class="modal-dialog modal-xl">
                  <div class="modal-content">
                    <div class="modal-body"> 
                      <h3 class="text-center mb-4 mt-3">Check Out Item</h3>
                      <table class="table mb-2 table-bordered bg-white-smoke">
                        <thead>
                          <tr class="text-black text-center align-middle">
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Discount</th>
                            <th scope="col">Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="text-black text-center align-middle">
                            <td> <img class="height-px-50 object-fit-cover" src="assets/images/shop/s3.jpg" alt="Shop3"></td>
                            <td>350$</td>
                            <td>2</td>
                            <td>20$</td>
                            <td>330$</td>
                          </tr>
                          <tr class="text-black text-center align-middle">
                            <td> <img class="height-px-50 object-fit-cover" src="assets/images/shop/s4.jpg" alt="Shop3"></td>
                            <td>250$</td>
                            <td>3</td>
                            <td>15$</td>
                            <td>235$</td>
                          </tr>
                          <tr class="text-black text-center align-middle">
                            <td> <img class="height-px-50 object-fit-cover" src="assets/images/shop/s5.jpg" alt="Shop3"></td>
                            <td>150$</td>
                            <td>4</td>
                            <td>10$</td>
                            <td>140$  </td>
                          </tr>
                          <tr class="text-black text-center align-middle text-center">
                            <td class="font-weight-bold">Grand Total</td>
                            <td class="text-end font-weight-bold" colspan="4">705$ </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="modal-footer border-0">
                      <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Add items</button>
                      <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Check Out</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Subscription Form-->
        <div class="modal fade" id="user-login" tabindex="-1" aria-hidden="true">
          <div class="container-fluid mt-8">
            <div class="row">
              <div class="col-lg-4 offset-8">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <div class="row">
                        <div class="col-lg-11">
                          <h3 class="mb-4 mt-1">Subscription account For Hanan</h3>
                        </div>
                        <div class="col-lg-1 my-auto">
                          <div class="ms-n1">
                            <button class="btn btn-black close rounded-0 px-2 py-2" type="button" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          </div>
                        </div>
                      </div>
                      <form>
                        <div class="form-group">
                          <input class="form-control input-border" id="user-name" type="text" placeholder="User name">
                        </div>
                        <div class="form-group mt-4">
                          <input class="form-control input-border" id="Pasword-name" type="password" placeholder="********">
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer border-0">
                      <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Register</button>
                      <button class="btn btn-black" type="button" data-bs-dismiss="modal">Login</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </article>
<?php
get_footer(); ?>