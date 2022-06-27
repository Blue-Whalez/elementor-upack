<?php
if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}
add_action( 'wp_enqueue_scripts', function () {
	$pack_dir =  get_stylesheet_directory_uri() . '/codepack';

	wp_enqueue_style( 'u-style', $pack_dir . '/u-style-dev.css', [], '1.0' );
	// wp_enqueue_style( 'uih-style', $pack_dir . '/ih-stylesheet.css', [], '1.0' );
	wp_enqueue_script( 'u-js', $pack_dir . '/u-script-dev.js', array('jquery'), '1.0',true );
});