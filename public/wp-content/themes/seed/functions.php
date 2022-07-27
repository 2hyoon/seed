<?php

/**
 * This ensures that Timber is loaded and available as a PHP class.
 * If not, it gives an error message to help direct developers on where to activate
 */
if ( ! class_exists( 'Timber' ) ) {

	add_action(
		'admin_notices',
		function() {
			echo '<div class="error"><p>Timber not activated. Make sure you activate the plugin in <a href="' . esc_url( admin_url( 'plugins.php#timber' ) ) . '">' . esc_url( admin_url( 'plugins.php' ) ) . '</a></p></div>';
		}
	);
	return;
}


$templateDir = get_template_directory();

require( $templateDir . '/inc/theme.php' );
require( $templateDir . '/inc/timber.php' );
require( $templateDir . '/inc/acf.php' );
// require( $templateDir . '/inc/acf-blocks.php' );
require( $templateDir . '/inc/scripts.php' );
require( $templateDir . '/inc/post-types.php' );
require( $templateDir . '/inc/taxonomies.php' );
require( $templateDir . '/inc/gutenberg-handler.php' );
