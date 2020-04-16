<?php
/**
 * Plugin Name: Reduced Test Case
 * Description: Shows the issue I raised on gutenberg
 * Plugin Author: Stephen Dickinson <stephencottontail@me.com>
 */

add_action( 'init', function() {
  $script_assets = require( 'dist/block.asset.php' );
  // $script_assets = require( 'dist/modified.asset.php' );

  wp_register_script( 'sc-test-editor-script', plugins_url( 'dist/block.js', __FILE__ ), $script_assets['dependencies'], $script_assets['version'] );
  register_block_type( 'sc/test', array(
    'editor_script' => 'sc-test-editor-script'
  ) );
} );
