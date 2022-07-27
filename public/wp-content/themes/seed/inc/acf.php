<?php

add_action('acf/init', 'acf_options');
add_action('acf/init', 'acf_custom_wysiwyg');

function acf_options() {
  if( function_exists('acf_add_options_page') ) {
    $option_page = acf_add_options_page(array(
      'page_title'    => __('Global Options'),
      'menu_title'    => __('Global Options'),
      'menu_slug'     => 'global-options',
      'capability'    => 'edit_posts',
      'redirect'      => false
    ));
  }
}

function acf_custom_wysiwyg() {
  add_filter( 'acf/fields/wysiwyg/toolbars' , function($toolbars) {
      $toolbars['Simple'] = array();
      $toolbars['Simple'][1] = array(
        'bold' ,
        'italic',
        'superscript',
        'subscript',
        'link'
      );
      return $toolbars;
  });
}
