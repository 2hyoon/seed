<?php

/**
* Sets the directories (inside your theme) to find .twig files
*/
Timber::$dirname = array( 'templates', 'views' );

/**
* By default, Timber does NOT autoescape values. Want to enable Twig's autoescape?
* No prob! Just set this value to true
*/
Timber::$autoescape = false;

/**
 * Context
 */
add_filter( 'timber/context', 'addTimberContext' );

function addTimberContext( $context ) {
  $context['notes'] = 'These values are available everytime you call Timber::context();';
  $context['menu']  = new Timber\Menu();
  return $context;
}
