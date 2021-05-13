<?php
/**
 * Template Name: Contact us page
 *
 */
// require_once THEME_DIR . '/inc/classes/PageAboutUs.class.php';


get_header(); ?>
    <article class="entry">
      <div class="entry-content">
        <!-- contact form-->
        <div class="small-bg-contact-us">
          <div class="container">
            <div class="row gx-lg-5 card-post-style">
              <div class="col-lg-12">
                <artical>
                  <div class="row gx-lg-5 pt-px-lg-151 pb-px-lg-151 pt-px-md-40 pb-px-md-70 pt-px-24 pb-px-60">
                    <div class="col-lg-6 order-lg-1">
                      <div class="d-lg-none"><img class="mb-px-lg-0 mb-px-md-40 mb-px-30 height-px-355 object-fit-cover w-100" src="assets/images/contact-us/c6.jpg" alt="contact-us-hero-image"/>
                      </div>
                    </div>
                    <div class="col-lg-6 my-auto">
                      <div class="position-relative">
                        <div class="me-px-lg-80 mt-px-4">
                          <h5 class="font-letter-space mb-px-7">About us</h5>
                          <h1>Contact us</h1>
                          <p class="lead mb-px-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vestibulum urna augue. Duis sit maximus commodo hendrerit lorem maximus mi.</p><img class="d-lg-block d-none position-absolute top-px-n-lg-60 start-px-n-lg-84" src="assets/images/flowers/flower.png" alt="hero flower image"/>
                        </div>
                      </div>
                    </div>
                  </div>
                </artical>
              </div>
            </div>
          </div>
        </div>
        <div class="overflow-hidden">
          <div class="container mt-lg-8 mt-md-7 mt-4"> 
            <div class="row gx-lg-5">
              <div class="col-lg-4 mb-0"><img class="height-px-408 w-100 object-fit-cover" src="assets/images/contact-us/c2.jpg" alt="contact-us-1">
                <div class="bg-texture-image py-4 px-4">
                  <div class="py-3 px-3">
                    <h4 class="mb-4">Our London Shop</h4>
                    <p class="mb-1">9235 Bayberry Drive</p>Hendersonville, NC 28792
                    <p class="mb-1 mt-4">london@email.com​</p>+51853 458 243
                  </div>
                </div>
              </div>
              <div class="col-lg-4"><img class="height-px-408 w-100 object-fit-cover" src="assets/images/contact-us/c3.jpg" alt="contact-us-2">
                <div class="bg-texture-image py-4 px-4">
                  <div class="py-3 px-3">
                    <h4 class="mb-4">Our Amsterdam Shop</h4>
                    <p class="mb-1">9235 Bayberry Drive</p>Hendersonville, NC 28792
                    <p class="mb-1 mt-4">amsterdam@email.com​</p>+51853 458 243
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="position-relative"><img class="height-px-408 w-100 object-fit-cover" src="assets/images/contact-us/c4.jpg" alt="contact-us-3"><img class="z-index-flower d-lg-block d-none position-absolute top-px-lg-12 end-px-n-lg-130" src="assets/images/flowers/f5.png" alt="f5 flower image"></div>
                <div class="bg-texture-image py-4 px-4">
                  <div class="py-3 px-3">
                    <h4 class="mb-4">Our Singapore Shop</h4>
                    <p class="mb-1">9235 Bayberry Drive</p>Hendersonville, NC 28792
                    <p class="mb-1 mt-4">singapore@email.com​</p>+51853 458 243
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- form and map-->
        <div class="container my-lg-8 my-md-7 my-5">
          <div class="container">
            <div class="row gx-lg-5">
              <div class="col-lg-5">
                <div class="position-relative"><img class="mb-lg-0 mb-5 height-px-383 w-100 object-fit-cover" src="assets/images/contact-us/c5.jpg" alt="contact-us-5"><img class="z-index-flower d-lg-block d-none position-absolute top-px-lg-10 start-px-n-lg-36" src="assets/images/flowers/1.png" alt="1 flower image"></div>
                <div class="bg-texture-image py-4 px-4">
                  <div class="py-3 px-3">
                    <h4 class="mb-4">We're here to help</h4>
                    <p class="mb-0">If you have any questions about our website </p>please email web@email.com, fill out the form 
                    or call +44 650.800.3124.
                    <p class="mt-4">Monday to Friday, 10am-5pm</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-7 my-auto">
                <div class="ms-px-lg-32 me-px-lg-40">
                  <!-- form-->
                  <div class="pr-lg-5 pb-md-0">
							<?php echo do_shortcode('[contact-form-7 id="215" title="Contact form 1"]'); ?>
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
