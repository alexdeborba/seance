<?php
/**
 * This file adds functions to the Séance WordPress theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package seance
 * @author  Alex de Borba
 * @license GNU General Public License v2 or later
 * @link    https://github.com/alexdeborba/seance/
 * @since   1.0.0
 */


if ( ! function_exists( 'seance_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function seance_support() {

		// Adds support for Block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue Block Editor styles.
		add_editor_style( 'style.css' );

	}

endif;

add_action( 'after_setup_theme', 'seance_support' );

if ( ! function_exists( 'seance_styles' ) ) :

	/**
	 * Enqueue theme styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function seance_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'seance-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'seance-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'seance_styles' );

// Register pattern categories.
function pattern_categories() {

	$block_pattern_categories = array(
		'post'           => array(
			'label' => __( 'Post', 'seance' ),
		),
		'footer'           => array(
			'label' => __( 'Footer', 'seance' ),
		),
		),
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', __NAMESPACE__ . '\pattern_categories', 9 );