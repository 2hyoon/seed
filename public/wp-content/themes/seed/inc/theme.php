<?php

if ( ! function_exists( 'seed_setup' ) ) :
  
  function seed_setup() {

    load_theme_textdomain( 'seed', get_template_directory() . '/languages' );
    
    /** Theme support */
    add_theme_support( 'automatic-feed-links' );
    
    add_theme_support( 'title-tag' );
    
    add_theme_support( 'post-thumbnails' );
    
    add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

    
    /** Images */
		// add_image_size( 'square_thumb', 532, 532, array( 'center', 'center' ) );


    /** Menus */
    register_nav_menus(
      array(
        'primary' => esc_html__( 'Primary', 'seed' )
      )
    );
    

    remove_action( 'admin_print_styles', 'print_emoji_styles' );
    // remove_action( 'template_redirect', 'rest_output_link_header' );
    // remove_action( 'wp_head', 'feed_links_extra', 3 ); 
    // remove_action( 'wp_head', 'feed_links', 2 );
    // remove_action( 'wp_head', 'index_rel_link' );
    // remove_action( 'wp_head', 'rel_canonical');
    // remove_action( 'wp_head', 'rest_output_link_wp_head' );
    // remove_action( 'wp_head', 'rsd_link' );
    // remove_action( 'wp_head', 'wlwmanifest_link' );
    remove_action( 'wp_head', 'wp_generator' );
    // remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
    // remove_action( 'wp_head', 'wp_resource_hints', 2);
    remove_action( 'wp_head', 'wp_shortlink_wp_head' );
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
    remove_action( 'wp_print_styles', 'print_emoji_styles');
    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
  }

endif;

add_action( 'after_setup_theme', 'seed_setup' );