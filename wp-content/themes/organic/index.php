<?php $temp_html_dir = THEME_DIR_URI . '/' . 'organic/' ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- favicon-->
		<link rel="shortcut icon" href="<?php echo $temp_html_dir; ?>assets/images/favicon.ico">
		<!-- Site Title-->
		<title>oganic - Natural Ingradiant Seeds Design HTML Template</title>
		<meta name="description" content="A Template for Natural Ingradiant Design company website.">
		<!-- Bootstrap CSS file-->
		<link href="<?php echo $temp_html_dir; ?>assets/css/bootstrap.min.css" rel="stylesheet">
		<!-- Flickity CSS file-->
		<link href="<?php echo $temp_html_dir; ?>assets/css/flickity.min.css" rel="stylesheet">
		<!-- Main CSS file-->
		<link href="<?php echo $temp_html_dir; ?>assets/css/style.css" rel="stylesheet">
		<!-- Fontawesome 5 CSS file-->
		<link href="<?php echo $temp_html_dir; ?>assets/css/fontawesome-all.min.css" rel="stylesheet">
		<!-- Magnific Popup CSS-->
		<link href="<?php echo $temp_html_dir; ?>assets/css/magnific-popup.css" rel="stylesheet">
		<!-- Google Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&amp;family=Roboto:wght@400;700&amp;DM+Sans:wght@700&amp;display=swap">
		<?php wp_head(); ?>
	</head>
  	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
    <!-- Navbar-->
    <div class="bg-bay-leaf py-2">
      <div class="continer"><a class="text-center" href="#">
          <p class="font-size-14 text-white mb-0">Black Friday | Hundreds of brands, up to 50% off!<span> <i class="fas fa-long-arrow-alt-right"></i></span></p></a></div>
    </div>
    <div class="site-header">
      <nav class="navbar navbar-expand-lg navbar-light pe-lg-7 ps-lg-6 px-4">
        <div class="container-fluid px-0"><a class="navbar-brand text-center d-md-block d-lg-none" href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="119" height="43" viewBox="0 0 119 43">
				<text id="Oganic1" transform="translate(0 35)" fill="#2a5631" font-size="32" font-family="PlayfairDisplay-Bold, Playfair Display" font-weight="700" letter-spacing="-0.05em"><tspan x="0" y="0">OGANIC</tspan></text>
				</svg></a>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
							<div class="collapse navbar-collapse" id="navbarNavDropdown">
								<div class="col-lg-2"><a class="navbar-brand mx-auto d-none d-lg-block" href="index.html"><svg xmlns="http://www.w3.org/2000/svg" width="119" height="43" viewBox="0 0 119 43">
				<text id="Oganic" transform="translate(0 35)" fill="#2a5631" font-size="32" font-family="PlayfairDisplay-Bold, Playfair Display" font-weight="700" letter-spacing="-0.05em"><tspan x="0" y="0">OGANIC</tspan></text>
				</svg></a></div>
            <div class="col-lg-8">
              <ul class="navbar-nav justify-content-lg-center">
                <li class="nav-item ml-0"><a class="nav-link pl-0" href="index.html">Home</a></li>
                <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                  <div class="dropdown-menu"><a class="dropdown-item" href="page-about-us.html">About Us</a><a class="dropdown-item" href="page-services.html">Services</a><a class="dropdown-item" href="page-contact.html">Contact Us</a><a class="dropdown-item" href="page-partners.html">Partners</a><a class="dropdown-item" href="page-404.html">404</a><a class="dropdown-item" href="page-pricing-table.html">Pricing Table </a><a class="dropdown-item" href="page-faq.html">Faq's</a><a class="dropdown-item" href="page-team.html">Team</a><a class="dropdown-item" href="page-testimonials.html">Testimonials</a></div>
                </li>
                <li class="nav-item dropdown mega_menu_holder"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Portfolio</a>
                  <div class="dropdown-menu"><a class="dropdown-item" href="page-portfolio.html">Portfolio</a><a class="dropdown-item" href="page-portfolio-three-col.html">Portfolio Three Col</a><a class="dropdown-item" href="single-project.html">Single Project</a></div>
                </li>
                <li class="nav-item dropdown mega_menu_holder"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Blog</a>
                  <div class="dropdown-menu"><a class="dropdown-item" href="blog.html">Blog</a><a class="dropdown-item" href="blog-single-post.html">Single Post</a><a class="dropdown-item" href="blog-right-sidebar.html">Right Sidebar</a><a class="dropdown-item" href="blog-left-sidebar.html">Left Sidebar</a><a class="dropdown-item" href="blog-three-col.html">Three Col</a><a class="dropdown-item" href="blog-two-col-right-sidebar.html">Two Col Right Sidebar</a><a class="dropdown-item" href="blog-two-col-left-sidebar.html">Two Col Left Sidebar</a><a class="dropdown-item" href="blog-card-right-sidebar.html">Card Right Sidebar</a><a class="dropdown-item" href="blog-card-left-sidebar.html">Card Left Sidebar</a><a class="dropdown-item" href="blog-card-three-col.html">Card Three Col</a><a class="dropdown-item" href="blog-card-two-col-right-sidebar.html">Card two Col Right Sidebar</a><a class="dropdown-item" href="blog-card-two-col-left-sidebar.html">Card two Col Left Sidebar</a><a class="dropdown-item" href="blog-single-post-gallery.html">Single Gallary Post </a><a class="dropdown-item" href="blog-single-post-video.html">Single Video Post</a><a class="dropdown-item" href="blog-single-post-audio.html">Single Audio Post</a></div>
                </li>
                <li class="nav-item dropdown mega_menu_holder"><a class="dropdown-toggle nav-link" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>
                  <div class="dropdown-menu"><a class="dropdown-item" href="shop.html">Shop</a><a class="dropdown-item" href="single-product.html">Single Product</a></div>
                </li>
                <li class="nav-item"><a class="nav-link" href="element-accordions.html">Element</a></li>
              </ul>
            </div>
            <div class="col-lg-2 d-none d-lg-block">
              <ul class="list-unstyled nav-modules text-end">
                <!-- Social nav-->
                <li class="list-inline-item"><span class="i h6 fas fa-user-circle navbar-icon-size me-px-18" data-bs-toggle="modal" data-bs-target="#user-login"></span></li>
                <li class="list-inline-item"><span class="i h6 fas fa-search navbar-icon-size me-px-18 openBtn" onclick="openSearch()"></span></li>
                <li class="list-inline-item"><span class="i h6 fas fa-bars navbar-icon-size" data-bs-toggle="modal" data-bs-target="#checkout-modal"></span></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
    </div>
    <!-- End Navbar -->
    <article class="entry">
      <div class="entry-content">
        <!-- head title-->
        <div class="bg-texture-image pt-px-lg-120 pb-px-lg-120 pt-px-md-80 pb-px-md-70 pt-px-30 pb-px-60 overflow-hidden"><img class="ms-px-n-lg-45 d-lg-block d-none position-absolute top-px-lg-23 start-px-lg-0" src="<?php echo $temp_html_dir; ?>assets/images/flowers/f100.png" alt="hero flower image">
          <div class="container">
            <div class="row gx-lg-5">
              <div class="col-lg-5 order-lg-1 mb-lg-0 mb-px-md-40 mb-px-30">
                <div class="position-relative">
                  <div class="carousel slide z-index-back me-px-lg-0 me-px-md-60" id="carouselExampleControls" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item pb-px-lg-50 active">
                        <div class="position-relative"><img class="d-block w-100 height-px-520 object-fit-cover w-100" src="<?php echo $temp_html_dir; ?>assets/images/shop/s3.jpg" alt="slider one image">
                          <div class="position-absolute top-50 end-0">
                            <div class="me-px-50 mt-px-lg-145 mt-px-md-151">
                              <div class="bg-white mb-px-n-50 border-radius-home ps-px-30 pe-px-30 pt-px-28 pb-px-32">
                                <h5>Grilled squids  </h5>
                                <div class="pt-px-4">
                                  <h6 class="price">$9.99</h6>
                                </div>
                                <div class="mt-px-14"><a class="h6 btn-link border-2 border-bottom shop-button-style" href="single-product.html">Add to cart</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item pb-px-lg-50">
                        <div class="position-relative"><img class="d-block w-100 height-px-520 object-fit-cover w-100" src="<?php echo $temp_html_dir; ?>assets/images/shop/s5.jpg" alt="slider two image">
                          <div class="position-absolute top-50 end-0">
                            <div class="me-px-50 mt-px-lg-145 mt-px-md-151">
                              <div class="bg-white border-radius-home ps-px-30 pe-px-30 pt-px-28 pb-px-32">
                                <h5>Corn Mixed Salad  </h5>
                                <div class="pt-px-4">
                                  <h6 class="price">$10.99</h6>
                                </div>
                                <div class="mt-px-14"><a class="h6 btn-link border-2 border-bottom shop-button-style" href="single-product.html">Add to cart</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="carousel-item pb-px-lg-50">
                        <div class="position-relative"><img class="d-block w-100 height-px-520 object-fit-cover w-100" src="<?php echo $temp_html_dir; ?>assets/images/shop/s6.jpg" alt="slider three image">
                          <div class="position-absolute top-50 end-0">
                            <div class="me-px-50 mt-px-lg-145 mt-px-md-151">
                              <div class="bg-white border-radius-home ps-px-30 pe-px-30 pt-px-28 pb-px-32">
                                <h5>Ketolegic Diet  </h5>
                                <div class="pt-px-4">
                                  <h6 class="price">$15.99</h6>
                                </div>
                                <div class="mt-px-14"><a class="h6 btn-link border-2 border-bottom shop-button-style" href="single-product.html">Add to cart</a></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
                  </div>
                  <div class="position-absolute top-px-md-0 start-lg-20 end-px-n-md-5"><img class="mt-px-n-lg-120 mt-px-n-md-70 ms-px-md-150 ps-px-lg-135 ps-px-md-151 d-none d-lg-block" src="<?php echo $temp_html_dir; ?>assets/images/flowers/circle.png" alt="slider image"></div>
                </div>
              </div>
              <div class="col-lg-7 my-auto pe-px-lg-150">
                <div class="me-px-lg-100 me-px-md-60">
                  <h5 class="font-letter-space mb-px-8">Go Organic</h5>
                  <h1 class="hero-font mb-px-28">It’s always better when it’s natural. Eat organic & be healthy</h1>
                  <ul class="list-unstyled">
                    <li class="mb-px-12"><i class="fas fa-check text-parsley me-px-9"></i> Donec feugiat ipsum sed enim ullamcorper</li>
                    <li class="mb-px-12"> <i class="fas fa-check text-parsley me-px-9"></i> Nullam fermentum vel odio ac congue</li>
                    <li class="mb-px-12"><i class="fas fa-check text-parsley me-px-9"></i> Praesent tincidunt ante auctor tellus dictum</li>
                    <li class="mb-px-37"><i class="fas fa-check text-parsley me-px-9"></i> Suspendisse posuere vel massa quis sodales</li>
                  </ul><a class="btn btn-parsley" href="page-contact.html">Get started</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- logo section-->
        <div class="container mt-px-lg-120 mb-px-lg-120 mt-px-md-80 mb-px-md-80 mt-px-60 mb-px-60">
          <div class="row gx-lg-5">
            <div class="col-lg-6 mb-lg-0 mb-px-30">
              <div class="position-relative"><img class="z-index-3 height-px-780 w-100 object-fit-cover" src="<?php echo $temp_html_dir; ?>assets/images/home/h1.jpg" alt="home-1-image"><img class="z-index-flower position-absolute top-px-9 start-0 translate-middle" src="<?php echo $temp_html_dir; ?>assets/images/flowers/f13.png" alt="flower-13-image"></div>
            </div>
            <div class="col-lg-6 my-auto">
              <div class="ms-px-lg-32">
                <h5 class="font-letter-space mb-px-8">Go Organic</h5>
                <h2 class="mb-px-17">It’s always better when it’s natural.</h2>
                <div class="pe-px-lg-40 pb-px-36">
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras maximus, dolor nec placerat scelerisque, urna libero lacinia nisi, vitae viverra augue turpis eget dui. Suspendisse pellentesque iaculis venenatis. </p>
                </div>
                <div class="pe-px-lg-60">
                  <div class="row gx-lg-0 mb-px-md-45 mb-px-30">
                    <div class="col-3"><img src="<?php echo $temp_html_dir; ?>assets/images/logo4.png" alt="logo-4"></div>
                    <div class="col-9">
                      <div class="ms-px-n-5">
                        <h5 class="mb-px-12">Eat clean and green</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras maximus, dolor nec placerat scelerisque.</p>
                      </div>
                    </div>
                  </div>
                  <div class="row gx-lg-0 mb-px-md-45 mb-px-30">
                    <div class="col-3"><img src="<?php echo $temp_html_dir; ?>assets/images/logo5.png" alt="logo-4"></div>
                    <div class="col-9">
                      <div class="ms-px-n-5">
                        <h5 class="mb-px-12">Grown by Nature</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras maximus, dolor nec placerat scelerisque.</p>
                      </div>
                    </div>
                  </div>
                  <div class="row gx-lg-0">
                    <div class="col-3"><img src="<?php echo $temp_html_dir; ?>assets/images/logo6.png" alt="logo-4"></div>
                    <div class="col-9">
                      <div class="ms-px-n-5">
                        <h5 class="mb-px-12">Eat good, Feel good</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras maximus, dolor nec placerat scelerisque.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- image merge section-->
        <div class="bg-texture-image overflow-hidden pt-px-lg-120 pb-px-16 pt-px-md-80 pt-px-60">
          <div class="container pb-px-lg-150 pb-px-md-60 pb-px-50">
            <div class="row gx-lg-5">
              <div class="col-lg-6">
                <div class="position-relative">
                  <div class="me-px-lg-151 me-px-md-150">
                    <div class="pe-px-lg-30 pe-px-md-70"><img class="mb-md-0 mb-px-40 height-px-550 object-fit-cover w-100" src="<?php echo $temp_html_dir; ?>assets/images/home/h2.jpg" alt="home image-2"><img class="d-md-block d-none position-absolute top-px-lg-5 start-px-n-lg-28 end-px-n-lg-0 top-px-n-md-15 end-px-n-md-10" src="<?php echo $temp_html_dir; ?>assets/images/flowers/1.png" alt="one flower image"></div>
                  </div>
                  <div class="position-md-absolute top-px-lg-0 end-px-lg-0 top-px-md-15">
                    <div class="ms-px-md-151 mt-px-lg-150 mt-px-md-120">
                      <div class="ps-px-lg-85 pt-px-lg-70 ps-px-md-70"><img class="height-px-460 object-fit-cover w-100" src="<?php echo $temp_html_dir; ?>assets/images/home/h3.jpg" alt="home image-3"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 my-auto">
                <div class="ms-px-lg-32 mt-px-lg-150 mt-px-md-150 mt-px-30"><i class="fas fa-quote-left text-grain-brown icon-left-quote mb-px-30"></i>
                  <h2 class="fst-italic mb-px-30">There is an enormous amount of interest in raw and organic foods, but more recently it is superfoods. People want to know more about chia seeds, mocha, raw chocolate and cocoa, and what they can do for you.</h2>
                  <h5 class="base-font-family text-flame-pea">- David Wolfe</h5>
                </div>
              </div>
            </div>
          </div>
          <!--middle section-->
          <div class="container pt-px-lg-80">
            <div class="row gx-lg-5">
              <div class="col-lg-6 order-lg-1">
                <div class="position-relative"><img class="mb-lg-0 mb-px-30 z-index-2 height-px-456 object-fit-cover w-100" src="<?php echo $temp_html_dir; ?>assets/images/home/h4.jpg" alt="home image-4"><img class="d-lg-block d-none z-index-3 position-absolute top-px-n-lg-16 end-px-n-lg-45" src="<?php echo $temp_html_dir; ?>assets/images/flowers/f18.png" alt="f18 flower image"></div>
              </div>
              <div class="col-lg-6 my-auto">
                <h5 class="font-letter-space mb-px-8">Go Organic</h5>
                <h2 class="mb-px-17">It’s always better when it’s natural.</h2>
                <div class="pe-px-lg-90 pb-px-6">
                  <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam justo duo dolores et ea rebum.</p>
                </div><a class="btn btn-parsley" href="page-about-us.html">Get started</a>
              </div>
            </div>
          </div>
          <!-- partners-->
          <div class="container pt-px-lg-150 pb-px-lg-150 pt-px-md-80 pb-px-md-80 pt-px-60 pb-px-60">
            <div class="row gx-lg-5 pt-px-lg-15 pb-px-lg-29">
              <div class="col-lg-4 mb-lg-0 mb-px-md-40 mb-px-30">
                <div class="text-center position-relative"><img class="mb-px-27 z-index-4" src="<?php echo $temp_html_dir; ?>assets/images/logo7.png" alt="logo4">
                  <h5 class="mb-px-18">Farm raised food</h5>
                  <div class="px-2">
                    <p class="mb-0">Pellentesque habitant tristique senectus et netus et malesuada ac turpis egestas. Suspendisse vel orci quis metus aliquam porta a eu dui. Integer tempor enim non nibh convallis maximus. </p>
                  </div><img class="d-lg-block d-none position-absolute top-px-n-lg-10 start-px-n-lg-90" src="<?php echo $temp_html_dir; ?>assets/images/flowers/f10.png" alt="f10 flower image">
                </div>
              </div>
              <div class="col-lg-4 mb-lg-0 mb-px-md-40 mb-px-30">             
                <div class="text-center"><img class="mb-px-27" src="<?php echo $temp_html_dir; ?>assets/images/logo8.png" alt="logo4">
                  <h5 class="mb-px-18">100% organic food</h5>
                  <div class="px-2">
                    <p class="mb-0">Pellentesque habitant tristique senectus et netus et malesuada ac turpis egestas. Suspendisse vel orci quis metus aliquam porta a eu dui. Integer tempor enim non nibh convallis maximus. </p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="text-center"><img class="mb-px-27" src="<?php echo $temp_html_dir; ?>assets/images/logo9.png" alt="logo4">
                  <h5 class="mb-px-18">Grown naturally</h5>
                  <div class="px-2">
                    <p class="mb-0">Pellentesque habitant tristique senectus et netus et malesuada ac turpis egestas. Suspendisse vel orci quis metus aliquam porta a eu dui. Integer tempor enim non nibh convallis maximus. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
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
        <div class="bg-texture-image overflow-hidden pt-px-lg-120 pb-px-lg-120 pt-px-md-80 pb-px-md-70 pt-px-60 pb-px-50">
          <div class="container pb-px-lg-66">
            <div class="row gx-lg-5">
              <div class="col-lg-6 order-lg-1">
                <div class="ms-px-lg-32">
                  <div class="position-relative">
                    <div class="ms-px-lg-151 me-lg-0 me-px-md-150">
                      <div class="ps-px-lg-30 pe-lg-0 pe-px-md-70"><img class="mb-md-0 mb-px-20 height-px-550 object-fit-cover w-100" src="<?php echo $temp_html_dir; ?>assets/images/home/h5.jpg" alt="home image-5"><img class="d-md-block d-none position-absolute top-px-n-lg-0 end-px-n-lg-44 top-px-n-md-15 end-px-n-md-10" src="<?php echo $temp_html_dir; ?>assets/images/flowers/f8.png" alt="f8 flower image"></div>
                    </div>
                    <div class="position-md-absolute top-px-lg-0 end-px-lg-0 top-px-md-15">
                      <div class="me-px-lg-101 ms-px-md-150 ms-lg-0 mt-px-lg-150 mt-px-md-120">
                        <div class="pe-px-lg-85 ps-lg-0 ps-px-md-70 pt-px-lg-70"><img class="height-px-460 object-fit-cover w-100" src="<?php echo $temp_html_dir; ?>assets/images/home/h6.jpg" alt="home image-6"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 my-auto">
                <div class="position-relative">
                  <div class="mt-px-lg-84 mt-px-md-150 mt-px-30">
                    <h5 class="font-letter-space mb-px-8">Go Organic</h5>
                    <h2 class="mb-px-17">It’s always better when it’s natural.</h2>
                    <div class="pe-px-lg-90 pb-px-6">
                      <p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                    </div>
                    <div class="row mt-px-lg-30 mt-px-20">
                      <div class="col-md-6 mb-md-0 mb-3">
                        <h6 class="mb-px-18">1. Eat good, Feel good</h6>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing. Cras maximus, dolor nec placerat scelerisque.</p>
                      </div>
                      <div class="col-md-6">
                        <h6 class="mb-px-18">1. Eat good, Feel good</h6>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing. Cras maximus, dolor nec placerat scelerisque.</p>
                      </div>
                    </div>
                    <div class="row mt-px-lg-35 mt-px-20">
                      <div class="col-md-6 mb-md-0 mb-3">
                        <h6 class="mb-px-18">1. Eat good, Feel good</h6>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing. Cras maximus, dolor nec placerat scelerisque.</p>
                      </div>
                      <div class="col-md-6">
                        <h6 class="mb-px-18">1. Eat good, Feel good</h6>
                        <p>Lorem ipsum dolor amet, consectetur adipiscing. Cras maximus, dolor nec placerat scelerisque.</p>
                      </div>
                    </div>
                  </div><img class="d-lg-block d-none position-absolute top-px-40 start-px-n-77" src="<?php echo $temp_html_dir; ?>assets/images/flowers/f9.png" alt="f9 flower image">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- carousel-->
        <div class="overflow-hidden">
          <div class="container px-0 mb-px-lg-104 mt-px-lg-116 mb-px-md-80 mt-px-md-70 mb-px-60 mt-px-60">
            <div class="text-center mb-px-lg-27 mb-px-20"><i class="fas fa-quote-left text-grain-brown icon-left-quote-45 mb-px-30"></i></div>
            <div class="position-relative">
              <div class="carousel slide" id="carouselExampleInterval" data-bs-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <div class="px-lg-10 px-md-6 px-3">
                      <div class="mx-lg-7">
                        <p class="lead text-center">Mauris faucibus ante quis arcu pellentesque congue. In faucibus ipsum vitae libero hendrerit volutpat. Semed quis mauris consequat, sollicitudin urna ac, mattis neque. Aenean purus ligula, condimentum id sapien quis, auctor.</p>
                      </div>
                    </div>
                    <div class="row pt-4">
                      <div class="col-lg-4 col-md-6 col-12 offset-md-3 offset-lg-4 text-center">
                        <div class="row">
                          <div class="col-3 offset-3"><img class="mb-3 rounded-circle height-px-200 object-fit-cover w-100" src="<?php echo $temp_html_dir; ?>assets/images/team/t7.jpg" alt="t7 image"></div>
                          <div class="col-6">
                            <div class="text-start ms-px-lg-2">
                              <h5 class="mb-px-12">Mary Gillis</h5>
                              <h5 class="font-letter-space">Brooklyn, NY</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="10000">
                    <div class="px-lg-10 px-md-6 px-3">
                      <div class="mx-lg-5">
                        <p class="lead text-center">Mauris faucibus ante quis arcu pellentesque congue. In faucibus ipsum vitae libero hendrerit volutpat. Semed quis mauris consequat, sollicitudin urna ac, mattis neque. Aenean purus ligula, condimentum id sapien quis, auctor.</p>
                      </div>
                    </div>
                    <div class="row pt-4">
                      <div class="col-lg-4 col-md-6 col-12 offset-md-3 offset-lg-4 text-center">
                        <div class="row">
                          <div class="col-3 offset-3"><img class="mb-3 rounded-circle height-px-200 object-fit-cover w-100" src="<?php echo $temp_html_dir; ?>assets/images/team/t6.jpg" alt="t6 image"></div>
                          <div class="col-6">
                            <div class="text-start ms-px-lg-2">
                              <h5 class="mb-px-12">Jhon Doe</h5>
                              <h5 class="font-letter-space">CEO</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="px-lg-10 px-md-6 px-3">
                      <div class="mx-lg-5">
                        <p class="lead text-center">Mauris faucibus ante quis arcu pellentesque congue. In faucibus ipsum vitae libero hendrerit volutpat. Semed quis mauris consequat, sollicitudin urna ac, mattis neque. Aenean purus ligula, condimentum id sapien quis, auctor.</p>
                      </div>
                    </div>
                    <div class="row pt-4">
                      <div class="col-lg-4 col-md-6 col-12 offset-md-3 offset-lg-4 text-center">
                        <div class="row">
                          <div class="col-3 offset-3"><img class="mb-3 rounded-circle height-px-200 object-fit-cover w-100" src="<?php echo $temp_html_dir; ?>assets/images/team/t2.jpg" alt="t2 image"></div>
                          <div class="col-6">
                            <div class="text-start ms-px-lg-2">
                              <h5 class="mb-px-12">James Smith</h5>
                              <h5 class="font-letter-space">Manager</h5>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon text-black" aria-hidden="true"></span><span class="visually-hidden">Previous</span></a><a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-bs-slide="next"><span class="carousel-control-next-icon text-black" aria-hidden="true"></span><span class="visually-hidden">Next</span></a>
              </div><img class="d-lg-block d-none position-absolute top-px-n-60 end-px-n-37" src="<?php echo $temp_html_dir; ?>assets/images/flowers/f11.png" alt="f11 flower image">
            </div>
          </div>
        </div>
        <!-- icon box-->
        <div class="container">
          <div class="row gx-md-5">
            <div class="col-lg-4 mb-lg-0 mb-px-md-48 mb-px-40"><img class="height-px-408 w-100 object-fit-cover" src="<?php echo $temp_html_dir; ?>assets/images/home/h7.jpg" alt="home image-7"></div>
            <div class="col-lg-4 col-md-6 mb-md-0 mb-px-40">
              <div class="bg-saltpan pt-px-lg-81 pb-px-lg-83 ps-px-lg-40 pe-px-lg-40 pt-px-40 pb-px-40 ps-px-40 pe-px-40">
                <div class="row mb-px-5">
                  <div class="col-lg-1 col-2"><i class="fas fa-pepper-hot text-flame-pea icon-left-quote-34"></i></div>
                  <div class="col-lg-11 col-10">
                    <div class="text-start ms-px-lg-18"> 
                      <h3 class="h3-md">Our Menu</h3>
                    </div>
                  </div>
                </div>
                <p class="mb-px-28">Donec fermentum sodales lacus ut mollis. Proin posuere urna eu quam pellentesque, vel sagittis ipsum pulvinar. Nunc sed tellus. Nullam dapibus et turpis ut ultricies.</p><a class="btn btn-parsley" href="shop.html">View more</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="bg-texture-image pt-px-lg-81 pb-px-lg-83 ps-px-lg-40 pe-px-lg-40 pt-px-40 pb-px-40 ps-px-40 pe-px-40">
                <div class="row mb-px-5">
                  <div class="col-lg-1 col-2"><i class="fab fa-uber text-flame-pea icon-left-quote-34"></i></div>
                  <div class="col-lg-11 col-10">
                    <div class="text-start ms-px-lg-18"> 
                      <h3 class="h3-md">24 hours delivery</h3>
                    </div>
                  </div>
                </div>
                <p class="mb-px-28">Donec fermentum sodales lacus ut mollis. Proin posuere urna eu quam pellentesque, vel sagittis ipsum pulvinar. Nunc sed tellus. Nullam dapibus et turpis ut ultricies.</p><a class="btn btn-parsley" href="single-product.html">Order now</a>
              </div>
            </div>
          </div>
        </div>
        <!-- blogs-->
        <div class="container mt-px-lg-112 mb-px-lg-120 mt-px-md-80 mb-px-md-70 mt-px-60 mb-px-50">
          <div class="text-center mb-px-lg-62 mb-px-lg-52 mb-px-40">
            <h3>Recent News</h3>
          </div>
          <!-- Blog-->
          <div class="row gx-lg-5 gy-lg-5 gy-3 gx-3 blog-post card-post-style">
            <div class="col-lg-4 mb-lg-0 mb-md-5 mb-4">
              <article>
                <figure class="entry-media"><a href="blog-single-post.html"><img class="lozad height-px-320 object-fit-cover w-100" src="<?php echo $temp_html_dir; ?>assets/images/blog/b1-lqip.jpg" data-src="<?php echo $temp_html_dir; ?>assets/images/blog/b1.jpg" alt="b1 image"/></a><span class="entry-meta-category"><a href="blog-three-col.html">Ingradiants</a></span>
                </figure>
                <div class="entry-content-wrapper bg-texture-image">
                  <header class="entry-header"><a href="blog-single-post.html">
                      <h5 class="mb-px-17 hover-color">Naturally grown green pumpkin</h5></a>
                    <div class="entry-meta-top">
                    </div>
                  </header>
                  <div class="entry-content">
                    <p>Cras erosed nisl, imperdiet in nisl rhoncus, lobortis tempus ligula. Duis elementum laoreet congue. In scelerisque metused interdum eros dignissim nisl laoreet.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-md-5 mb-4">
              <article>
                <figure class="entry-media"><a href="blog-single-post.html"><img class="lozad height-px-320 object-fit-cover w-100" src="<?php echo $temp_html_dir; ?>assets/images/blog/b2-lqip.jpg" data-src="<?php echo $temp_html_dir; ?>assets/images/blog/b2.jpg" alt="b2 image"/></a><span class="entry-meta-category"><a href="blog-three-col.html">Vegitabe</a></span>
                </figure>
                <div class="entry-content-wrapper bg-texture-image">
                  <header class="entry-header"><a href="blog-single-post.html">
                      <h5 class="mb-px-17 hover-color">Fresh tomatoes harvesting </h5></a>
                    <div class="entry-meta-top">
                    </div>
                  </header>
                  <div class="entry-content">
                    <p>Cras erosed nisl, imperdiet in nisl rhoncus, lobortis tempus ligula. Duis elementum laoreet congue. In scelerisque metused interdum eros dignissim nisl laoreet.</p>
                  </div>
                </div>
              </article>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-md-5 mb-4">
              <article>
                <figure class="entry-media"><a href="blog-single-post.html"><img class="lozad height-px-320 object-fit-cover w-100" src="<?php echo $temp_html_dir; ?>assets/images/blog/b3-lqip.jpg" data-src="<?php echo $temp_html_dir; ?>assets/images/blog/b3.jpg" alt="b3 image"/></a><span class="entry-meta-category"><a href="blog-three-col.html">Natural</a></span>
                </figure>
                <div class="entry-content-wrapper bg-texture-image">
                  <header class="entry-header"><a href="blog-single-post.html">
                      <h5 class="mb-px-17 hover-color">Fresh vegetables are important</h5></a>
                    <div class="entry-meta-top">
                    </div>
                  </header>
                  <div class="entry-content">
                    <p>Cras erosed nisl, imperdiet in nisl rhoncus, lobortis tempus ligula. Duis elementum laoreet congue. In scelerisque metused interdum eros dignissim nisl laoreet.</p>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <!-- End Blog-->
          <div class="text-center mt-lg-5 mt-2"><a class="btn btn-parsley" href="blog.html">See more</a></div>
        </div>
        <div class="container mb-lg-8 mb-md-6 mb-6">
          <div class="text-center mb-px-lg-41 mb-4">
            <h3 class="mb-px-10">Follow us</h3>
            <h5 class="font-letter-space">@oganic</h5>
          </div>
          <div class="row g-5" id="instafeed"></div>
        </div>
        <!-- last section Need a Expert-->
        <div class="container mt-px-lg-120 mb-px-lg-120 mt-px-md-80 mb-px-md-80 mt-px-60 mb-px-60">
          <div class="row gx-lg-5">
            <div class="col-lg-5">
              <div class="position-relative"><img class="height-px-408 object-fit-cover w-100" src="<?php echo $temp_html_dir; ?>assets/images/home/h8.jpg" alt="image-h8"><img class="d-lg-block d-none position-absolute top-px-0 start-px-n-93" src="<?php echo $temp_html_dir; ?>assets/images/flowers/f9.png" alt="hero flower image"></div>
            </div>
            <div class="col-lg-7">
              <div class="bg-texture-image px-lg-7 pt-px-lg-80 pb-px-lg-81 px-md-5 pt-px-md-50 pb-px-md-51 px-4 pt-px-40 pb-px-41">
                <h5 class="font-letter-space mb-px-8">Need a expert advice?</h5>
                <h2 class="mb-px-17">Ask a Nutritionist Online</h2>
                <div class="pe-px-lg-0 pb-px-6">
                  <p>Donec euismod posuere rhoncus. Donec vestibulum venenatis nunc, quis mollis lectus fermentum vel. Curabitur mollis dolor sapien, ut varius arcu ullamcorper vitae rci varius natoque penatibus magnis.</p>
                </div><a class="btn btn-parsley" href="page-about-us.html">Contact us</a>
              </div>
            </div>
          </div>
        </div>
        <!-- popup form-->
        <div class="overlay" id="myOverlay"><span class="closebtn" onclick="closeSearch()" title="Close Overlay">&times;</span>
          <div class="overlay-content">
            <form action="#">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form>
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
    <!-- Footer-->
    <footer class="site-footer bg-texture-image overflow-hidden">
      <div class="footer-widgets">
        <div class="container">
          <div class="row gx-lg-40">
            <div class="col-lg-4">
              <div class="position-relative">
                <div class="footer-widget footer-widget-1">
                  <h2 class="mb-px-36">Eat nutritious food because it makes your health so good.</h2>
                  <h4 class="text-flame-pea base-font-family text-uppercase">Oganic</h4><img class="ms-px-n-45 d-lg-block d-none position-absolute top-px-5 start-px-n-115" src="<?php echo $temp_html_dir; ?>assets/images/flowers/f4.png" alt="hero flower image">
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
    <!-- javascript files-->
    <!-- jquery-->
    <script src="<?php echo $temp_html_dir; ?><?php echo $temp_html_dir; ?>assets/js/jquery.min.js"></script>
    <!-- lozad js-->
    <script src="<?php echo $temp_html_dir; ?><?php echo $temp_html_dir; ?>assets/js/lozad.min.js"></script>
    <!-- Bootstrap js-->
    <script src="<?php echo $temp_html_dir; ?><?php echo $temp_html_dir; ?>assets/js/bootstrap.bundle.min.js"></script>
    <!-- Aos js-->
    <script src="<?php echo $temp_html_dir; ?><?php echo $temp_html_dir; ?>assets/js/aos.js"></script>
    <!-- Slick flickity js-->
    <script src="<?php echo $temp_html_dir; ?><?php echo $temp_html_dir; ?>assets/js/flickity.pkgd.min.js"></script>
    <!-- Magnific popup js-->
    <script src="<?php echo $temp_html_dir; ?><?php echo $temp_html_dir; ?>assets/js/jquery.magnific-popup.min.js"></script>
    <!-- Countdown js-->
    <script src="<?php echo $temp_html_dir; ?><?php echo $temp_html_dir; ?>assets/js/jquery.countdown.js"></script>
    <!-- CountTo js-->
    <script src="<?php echo $temp_html_dir; ?><?php echo $temp_html_dir; ?>assets/js/jquery.countTo.js"></script>
    <!-- Masonry js-->
    <script src="<?php echo $temp_html_dir; ?><?php echo $temp_html_dir; ?>assets/js/masonry.pkgd.min.js"></script>
    <!-- search-->
    <script src="<?php echo $temp_html_dir; ?><?php echo $temp_html_dir; ?>assets/js/search.js"></script>
    <script src="<?php echo $temp_html_dir; ?><?php echo $temp_html_dir; ?>assets/js/instafeed.min.js"></script>
    <!-- Global - Main js-->
    <script src="<?php echo $temp_html_dir; ?><?php echo $temp_html_dir; ?>assets/js/global.js"></script>


		<?php wp_footer(); ?>
	</body>
</html>