<?php
/**
 * 3AAi-Theme functions and definitions
 *
 * @package 3AAi-Theme
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Enqueue theme styles
 */
function aai_theme_enqueue_styles() {
	wp_enqueue_style(
		'3aai-theme-style',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'aai_theme_enqueue_styles' );

/**
 * Add theme support for block templates
 */
function aai_theme_setup() {
	// Add support for block templates
	add_theme_support( 'block-templates' );
	
	// Add support for editor styles
	add_theme_support( 'editor-styles' );
	
	// Add support for responsive embeds
	add_theme_support( 'responsive-embeds' );
	
	// Add support for custom line height
	add_theme_support( 'custom-line-height' );
	
	// Add support for experimental link color
	add_theme_support( 'experimental-link-color' );
	
	// Add support for custom units
	add_theme_support( 'custom-units' );
	
	// Add support for custom spacing
	add_theme_support( 'custom-spacing' );
	
	// Load theme text domain for translations
	load_theme_textdomain( '3aai-theme', get_template_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'aai_theme_setup' );

/**
 * Register block patterns category
 */
function aai_theme_register_pattern_categories() {
	register_block_pattern_category(
		'3aai-patterns',
		array(
			'label'       => esc_html__( '3AAi Patterns', '3aai-theme' ),
			'description' => esc_html__( 'Custom patterns for 3AAi Theme', '3aai-theme' ),
		)
	);
}
add_action( 'init', 'aai_theme_register_pattern_categories' );
