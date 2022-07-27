<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 */

$context = Timber::context();

$timber_post = new Timber\Post();
$context['post'] = $timber_post;
$templates = array( 'page.twig' );
// $templates = array(array( 'page-' . $timber_post->post_name . '.twig', 'page.twig' ));

Timber::render( $templates, $context );
