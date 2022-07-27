<?php
/**
 * Template Name: Home
 * Template Post Type: page
 */

$context = Timber::context();

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;

if ( post_password_required() ) {
  Timber::render( 'password.twig', $context );
} else {
  Timber::render( 'page-home.twig', $context );
}

?>