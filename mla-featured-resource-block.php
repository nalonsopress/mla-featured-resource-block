<?php
/**
 * Plugin Name: MLA Featured Resource Block
 * Description: Example Gutenberg block using React in the editor and PHP server-side rendering.
 * Version: 1.0.0
 * Author: Nelson Alonso
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function mla_featured_resource_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'mla_featured_resource_block_init' );
