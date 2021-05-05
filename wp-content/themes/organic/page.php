<?php 
get_header();

$title = get_the_title();
$content = get_the_content(); ?>

    <article class="entry">
      <div class="entry-content">
        <!--featured image-->
        <div class="bg-texture-image pt-px-lg-119 pt-md-7 pt-6 overflow-hidden">
          <div class="container position-relative">
            <div class="row">
					<?php echo get_theme_page_title_block( $title, false, false ); ?>
				</div>
			 </div>
			</div>
		
        <div class="small-bg-about-us">
          <div class="container">
            <div class="row gx-lg-5 card-post-style">
              <div class="col-lg-12">
                <artical>
                  <div class="row gx-lg-5 pt-px-lg-151 pb-px-lg-151 pt-px-md-40 pb-px-md-70 pt-px-24 pb-px-60">
                    <div class="col-lg-6 order-lg-1">
                      <div class="d-lg-none"><img class="mb-px-lg-0 mb-px-md-40 mb-px-30 height-px-355 object-fit-cover w-100" src="assets/images/about-us/a1.jpg" alt="about-us-hero-image"/>
                      </div>
                    </div>
                    <div class="col-lg-6 my-auto">
                      <div class="position-relative">
                        <div class="me-px-lg-80 mt-px-4">
                          <h5 class="font-letter-space mb-px-7">About us</h5>
                          <h1>We are farmers</h1>
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
		
		
		</div>
	</article>

<?php
get_footer(); ?>