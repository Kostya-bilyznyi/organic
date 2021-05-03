<?php 
get_header();

$temp_html_dir = THEME_DIR_URI . '/' . 'organic/';
$date = get_the_date('M j, Y');
$title = get_the_title();
$post_thumbnail_url = get_the_post_thumbnail_url();
$content = get_the_content();
$post_author = get_the_author();  ?>

    <article class="entry">
      <div class="entry-content">
        <!--featured image-->
        <div class="bg-texture-image pt-px-lg-119 pt-md-7 pt-6 overflow-hidden">
          <div class="container position-relative"><img class="d-lg-block d-none position-absolute top-px-lg-5 start-px-n-lg-25" src="<?php echo $temp_html_dir; ?>assets/images/flowers/f100.png" alt="f100 flower image"><img class="d-lg-block d-none position-absolute top-px-lg-30 end-px-n-lg-35" src="<?php echo $temp_html_dir; ?>assets/images/flowers/f11.png" alt="f11 flower image">
            <div class="row">
					<?php echo get_theme_page_title_block( $title, $post_author, $date );

				  if( !empty( $post_thumbnail_url ) ) : ?>
						<img class="mt-px-lg-61 mt-px-md-64 mt-px-48 height-px-630 w-100 object-fit-cover" src="<?php echo $post_thumbnail_url; ?>" alt="a8 single post2">
					<?php endif; ?>

				</div>
          </div>
        </div>
        <div class="container mt-lg-8 mt-md-7 mt-5">
          <div class="row justify-content-lg-center">
            <div class="col-lg-8">

					<?php echo $content; ?>

              	<blockquote class="mt-5">
						<div class="border-start border-grain-brown border-3 ps-4">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, </p>
							<cite class="font-weight-bold text-flame-pea"> - Richard Thomas</cite>
						</div>
              </blockquote>
            </div>
          </div>
        </div>
        <div class="container my-5">
          <div class="row gx-lg-5">
            <div class="col-lg-6 mb-lg-0 mb-5"><img class="height-px-853 w-100 object-fit-cover" src="<?php echo $temp_html_dir; ?>assets/images/single-project/sp1.jpg" alt="single-post1"></div>
            <div class="col-lg-6"><img class="height-px-853 w-100 object-fit-cover" src="<?php echo $temp_html_dir; ?>assets/images/single-project/sp2.jpg" alt="single-post2"></div>
          </div>
        </div>
        <div class="container">
          <div class="row justify-content-lg-center">
            <div class="col-lg-8">
              <h4 class="mb-4">There are many variations of passages of Lorem Ipsum available</h4>
              <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et sadipscing  accusam et justo duo dolores rebum.
            </div>
          </div>
          <div class="mt-5"><img class="height-px-730 w-100 object-fit-cover" src="<?php echo $temp_html_dir; ?>assets/images/single-project/sp3.jpg" alt="single-post3"></div>
          <div class="row justify-content-lg-center mt-5">
            <div class="col-lg-8">
              <p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et sadipscing  accusam et justo duo dolores rebum.
            </div>
          </div>
          <div class="row justify-content-lg-center mt-5">
            <div class="col-lg-8 pr-lg-10"> 
              <div class="py-3"><i class="fas fa-tags text-parsley"></i><span class="ms-2"><a class="h5 font-letter-space" href="#">Energy, </a></span><span><a class="h5 font-letter-space" href="">New</a></span></div>
            </div>
          </div>
          <div class="row justify-content-lg-center mt-4">
            <div class="col-lg-8">
              <!-- Comments Area-->
              <div class="comments comments-area container-small mt-4" id="comments">
                <div class="comment-respond" id="respond">
                  <h3 class="comment-reply-title mt-3 mb-lg-5 text-parsley" id="reply-title">Leave a Reply</h3>
                  <form class="comment-form" id="commentform" action="#" method="post" novalidate="">
                    <p class="comment-form-comment form-group mb-px-40">
                      <textarea class="form-control" id="comment" name="comment" cols="45" rows="7" required="required" placeholder="Message"></textarea>
                    </p>
                    <p class="comment-form-author form-group mb-px-40">
                      <input class="form-control" id="author" name="author" type="text" value="" size="30" maxlength="245" required="required" placeholder="Name">
                    </p>
                    <p class="comment-form-email form-group mb-px-40">
                      <input class="form-control" id="email" name="email" type="email" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required" placeholder="Email">
                    </p>
                    <p class="comment-form-url form-group mb-px-40">
                      <input class="form-control" id="url" type="url" name="url" size="30" maxlength="200" value="" placeholder="Website">
                    </p>
                    <p class="form-submit"><a class="btn btn-parsley" href="#">Submit</a></p>
                  </form>
                </div>
                <!-- #respond-->
              </div>
              <!-- End Comments Area-->
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
                            <td> <img class="height-px-50 object-fit-cover" src="<?php echo $temp_html_dir; ?>assets/images/shop/s3.jpg" alt="Shop3"></td>
                            <td>350$</td>
                            <td>2</td>
                            <td>20$</td>
                            <td>330$</td>
                          </tr>
                          <tr class="text-black text-center align-middle">
                            <td> <img class="height-px-50 object-fit-cover" src="<?php echo $temp_html_dir; ?>assets/images/shop/s4.jpg" alt="Shop3"></td>
                            <td>250$</td>
                            <td>3</td>
                            <td>15$</td>
                            <td>235$</td>
                          </tr>
                          <tr class="text-black text-center align-middle">
                            <td> <img class="height-px-50 object-fit-cover" src="<?php echo $temp_html_dir; ?>assets/images/shop/s5.jpg" alt="Shop3"></td>
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