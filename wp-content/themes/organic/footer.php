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
	 					<?php dynamic_sidebar('footer-col-2'); ?>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12 mt-lg-0 mt-md-5 mt-4">
              <div class="ms-px-lg-14">
					  <?php dynamic_sidebar('footer-col-3'); ?>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
              <div class="position-relative">
                <div class="ms-px-lg-13">
						 <?php dynamic_sidebar('footer-col-4'); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom-area">
        <div class="container">
          <div class="row gx-5">
	 			<?php dynamic_sidebar('footer-col-5'); ?>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer-->
		<?php wp_footer(); ?>
	</body>
</html>
