<?php

add_action( 'after_setup_theme', function () {
  // Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for editor styles.
	add_theme_support( 'editor-styles' );

	// Enqueue editor styles.
	add_editor_style( get_template_directory_uri() . '/assets/css/editor.css' );

	// Add support for responsive embedded content.
	add_theme_support( 'responsive-embeds' );
} );

add_action( 'wp_enqueue_scripts', function () {
  wp_enqueue_style( 'ipc-style-main', get_template_directory_uri() . '/style.css', [], wp_get_theme()->get( 'Version' ) );
  wp_enqueue_style( 'ipc-style-frontend', get_template_directory_uri() . '/assets/css/frontend.css', [], wp_get_theme()->get( 'Version' ) );
  wp_enqueue_style( 'ipc-style-blocks', get_template_directory_uri() . '/assets/css/blocks/index.css', [], wp_get_theme()->get( 'Version' ) );

	wp_enqueue_script( 'ipc-style-main', get_template_directory_uri() . '/assets/js/main.js', [], wp_get_theme()->get( 'Version' ), true );
} );

// Require block styles
require __DIR__ . '/inc/block-styles.php';
