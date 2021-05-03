<?php
require_once THEME_DIR . '/inc/classes/OrganicHeader.class.php';

// $header = new OrganicHeader(); 
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

		<div class="site-header">
			<nav class="navbar navbar-expand-lg navbar-light pe-lg-7 ps-lg-6 px-4">
				<div class="container-fluid px-0">


					<div class="collapse navbar-collapse" id="navbarNavDropdown">


<?php
$hero = get_field('header', 'options');
if( $hero ): ?>
<img src="<?php echo $hero['logo'] ?>">
<?php endif; ?>
					</div>
				</div>
			</nav>
		</div>