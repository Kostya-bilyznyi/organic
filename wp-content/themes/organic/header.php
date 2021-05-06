<?php
require_once THEME_DIR . '/inc/classes/OrganicHeader.class.php';

$header = new OrganicHeader(); 
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<?php wp_head(); ?>
	</head>
  	<body <?php body_class(); ?>>
		<?php wp_body_open();

		echo $header->get_sale_section(); ?>
		
		<div class="site-header">
			<nav class="navbar navbar-expand-lg navbar-light pe-lg-7 ps-lg-6 px-4">
				<div class="container-fluid px-0">
					<div class="collapse navbar-collapse" id="navbarNavDropdown">
						<?php 
						echo $header->get_header_logo();
						echo $header->get_header_menu();
						echo $header->get_header_icons(); ?>
					</div>
				</div>
			</nav>
			<div class="site-header__search">
				<?php get_search_form(); ?>
			</div>
		</div>

		 <?php 
		 echo $header->get_header_card();
		 echo $header->get_header_form(); ?>


