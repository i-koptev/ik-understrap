<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = 'container';
//$container = get_theme_mod( 'ikunderstrap_container_type' );

?>
<section id="clients" class="clients">
	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row" data-aos="zoom-in">

			<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
				<img src="<?php echo get_template_directory_uri() . '/img/clients/client-1.png' ?>" class="img-fluid"
					 alt="">
			</div>

			<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
				<img src="<?php echo get_template_directory_uri() . '/img/clients/client-2.png' ?>" class="img-fluid"
					 alt="">
			</div>

			<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
				<img src="<?php echo get_template_directory_uri() . '/img/clients/client-3.png' ?>" class="img-fluid"
					 alt="">
			</div>

			<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
				<img src="<?php echo get_template_directory_uri() . '/img/clients/client-4.png' ?>" class="img-fluid"
					 alt="">
			</div>

			<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
				<img src="<?php echo get_template_directory_uri() . '/img/clients/client-5.png' ?>" class="img-fluid"
					 alt="">
			</div>

			<div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
				<img src="<?php echo get_template_directory_uri() . '/img/clients/client-6.png' ?>" class="img-fluid"
					 alt="">
			</div>

		</div>

	</div>
</section>
