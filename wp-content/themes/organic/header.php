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
		<?php wp_body_open(); ?>

		<?php echo $header->get_sale_section(); ?>

		<div class="site-header">
			<nav class="navbar navbar-expand-lg navbar-light pe-lg-7 ps-lg-6 px-4">
				<div class="container-fluid px-0">

					<?php /* echo $header->get_header_mobail(); */?>

					<div class="collapse navbar-collapse" id="navbarNavDropdown">

						<?php /* echo $header->get_header_logo(); ?>
						<?php echo $header->get_header_menu(); ?>
						<?php echo $header->get_header_icons(); */ ?>

					</div>
				</div>
			</nav>
		</div>