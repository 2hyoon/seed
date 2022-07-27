<?php

// disable gutenberg editor for the specified post types
// function disable_gutenberg($is_enabled, $post_type) {
// 	if ($post_type === 'page' | $post_type === 'custom_post') return false;
//   return $is_enabled;
// }
// add_filter('use_block_editor_for_post_type', 'disable_gutenberg', 10, 2);


// custom block cateogory
// function add_block_categories( $block_categories, $block_editor_context ) {
//   return array_merge(
//     $block_categories,
//     array(
//       array(
//         'slug'  => 'seed',
//         'title' => esc_html__( 'Seed', 'seed' ),
//         'icon'  => null
//       ),
//     )
//   );
// }
// add_filter( 'block_categories_all', 'add_block_categories', 10, 2 );

