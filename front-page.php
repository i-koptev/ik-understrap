<?php
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = 'container';
//$container = get_theme_mod( 'ikunderstrap_container_type' );
?>

<?php get_template_part( 'global-templates/hero' ); ?>


		<main class="site-main" id="main">
			<?php get_template_part( 'global-templates/section-clients' ); ?>
		</main><!-- #main -->


<?php
get_footer();
