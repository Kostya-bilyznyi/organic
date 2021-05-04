    <?php $temp_html_dir = THEME_DIR_URI . '/' . 'organic/' ?>
	 <footer class="site-footer bg-texture-image overflow-hidden">
      <div class="footer-widgets">
        <div class="container">
          <div class="row gx-lg-40">
            <div class="col-lg-4">
	 				
              <div class="position-relative">
                <div class="footer-widget footer-widget-1">
						<?php dynamic_sidebar('footer-col-1'); ?>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12 mt-lg-0 mt-md-5 mt-4">
              <div class="ms-px-lg-9">
                <h5 class="mb-px-16">Get in touch</h5>
                <p class="footer-text-size mb-5">info@address.com</p>
                <div class="pt-1">
                  <h5 class="mb-px-28">Headquarters</h5>
                </div>
                <div class="pe-px-lg-0 pe-px-md-60 pe-px-40">
                  <p class="footer-text-size mb-4">9235 Bayberry Drive Hendersonville, NC 28792</p>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12 mt-lg-0 mt-md-5 mt-4">
              <div class="ms-px-lg-14">
                <h5>Useful</h5>
                <div class="footer-widget footer-widget-2">
                  <ul class="pt-px-17"> 
                    <li><a href="page-partners.html">Certificates</a></li>
                    <li><a href="page-abuot-us.html">Platform</a></li>
                    <li><a href="page-faq.html">FAQ </a></li>
                    <li><a href="page-contact.html">Legal & Privacy</a></li>
                    <li><a href="blog.html">Blog</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <div class="position-relative">
                <div class="ms-px-lg-13">
                  <h5 class="mb-px-16">Newsletter</h5>
                  <p class="footer-text-size mb-4">Sign up here to get the latest news, updates and special offers delivered to your inbox.</p>
                  <form id="contact-form" method="post" action="assets/php/contact.php">
                    <div class="mb-px-20 pb-2">
                      <input class="footer-input form-control input-border text-md-start text-center" id="form_email" type="text" name="lname" placeholder="mail@address.com" required>
                    </div>
                    <div class="row">
                      <div class="col-lg-3 col-md-4 text-md-start text-center"><a class="footer-form h6 btn-link pb-px-12 d-block" href="#">Submit<i class="fas fa-long-arrow-alt-right ms-px-14"></i></a></div>
                    </div>
                  </form>
                </div><img class="position-absolute top-px-n-lg-10 end-px-n-lg-100 top-px-n-md-70 end-px-n-md-150" src="<?php echo $temp_html_dir; ?>assets/images/flowers/f17.png" alt="hero flower image">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom-area">
        <div class="container">
          <div class="row gx-5">
            <div class="col-lg-6 col-md-6">
              <div class="footer-widget text-md-start text-center">
                <p class="m-md-0">© 2021 Energetic Themes • All Rights Reserved</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6">
              <div class="text-md-end text-center">
                <ul class="list-unstyled list-inlinetrue">
                  <li class="list-inline-item me-px-21"><a href="#"><i class="fab fa-facebook-square icon"></i></a></li>
                  <li class="list-inline-item me-px-21"><a href="#"><i class="fab fa-instagram icon"></i></a></li>
                  <li class="list-inline-item me-px-21"><a href="#"><i class="fab fa-twitter icon"></i></a></li>
                  <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in icon"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer-->
		<?php wp_footer(); ?>
	</body>
</html>