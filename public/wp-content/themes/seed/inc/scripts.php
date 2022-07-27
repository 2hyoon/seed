<?php

// if ( ! empty( get_field('cache_version', 'options') ) ) {
// 	define( '_S_VERSION', get_field('cache_version', 'options') );
// }

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}


function enqueueScripts() {
	// style
	wp_enqueue_style(
		'app',
		get_template_directory_uri().'/dist/styles/app.css',
		array(),
		_S_VERSION
	);

	// script
	wp_enqueue_script(
		'vendor',
		get_template_directory_uri().'/dist/scripts/vendor.js', 
		array(),
		_S_VERSION,
		1
	);

	wp_enqueue_script(
		'app',
		get_template_directory_uri().'/dist/scripts/app.js', 
		array('vendor'),
		_S_VERSION,
		1
	);

	// deactivate wp styles
	wp_dequeue_style( 'wp-block-library' );
	wp_dequeue_style( 'wp-block-library-theme' );
	wp_dequeue_style( 'global-styles' );
}

add_action( 'wp_enqueue_scripts', 'enqueueScripts' );