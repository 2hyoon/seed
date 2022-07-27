<?php 

add_action('acf/init', 'register_acf_blocks');

/**
 * https://www.advancedcustomfields.com/resources/blocks/
 */
function register_acf_blocks() {
  if( function_exists('acf_register_block_type') ) {
    acf_register_block_type(array(
      'name'              => 'seed',
      'title'             => __('seed'),
      'description'       => __('A custom seed block.'),
      'render_callback'   => 'seed_block_handler',
      'category'          => 'seed',
      'icon'              => 'admin-comments',
      'keywords'          => array( 'seed', 'quote' ),
    ));
  }
}

/**
 * https://timber.github.io/docs/guides/gutenberg/
 */
function seed_block_handler($block, $content = '', $is_preview = false) {
  $context = Timber::context();

  // Store block values.
  $context['block'] = $block;

  // Store field values.
  $context['fields'] = get_fields();

  // Store $is_preview value.
  $context['is_preview'] = $is_preview;

  // Render the block.
  Timber::render( 'views/blocks/seed.twig', $context );
}