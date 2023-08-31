<?php
/**
 * This file adds functions to the Séance WordPress theme.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package seancewp
 * @author  Alex de Borba
 * @license GNU General Public License v2 or later
 * @link    https://github.com/alexdeborba/seancewp/
 * @since   1.0.0
 */

if ( ! function_exists( 'seancewp_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function seancewp_support() {

		// Adds support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue block editor styles.
		add_editor_style( 'style.css' );

		// Remove support for WordPress default block patterns.
		remove_theme_support( 'core-block-patterns' );

	}

endif;

add_action( 'after_setup_theme', 'seancewp_support' );

if ( ! function_exists( 'seancewp_styles' ) ) :

	/**
	 * Enqueue theme styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function seancewp_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'seancewp-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'seancewp-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'seancewp_styles' );

// Register pattern categories.
function pattern_categories() {

	$block_pattern_categories = array(
		'post'    => array(
			'label' => __( 'Post', 'seancewp' ),
		),
		'pages'   => array(
			'label' => __( 'Pages', 'seancewp' ),
		),
		'gallery' => array(
			'label' => __( 'Gallery', 'seancewp' ),
		),
		'query'   => array(
			'label' => __( 'Query', 'seancewp' ),
		),
		'footer'  => array(
			'label' => __( 'Footer', 'seancewp' ),
		),
	);

	foreach ( $block_pattern_categories as $name => $properties ) {
		register_block_pattern_category( $name, $properties );
	}
}
add_action( 'init', __NAMESPACE__ . '\pattern_categories', 9 );

// Prevent loading patterns from the WordPress.org pattern directory.
function seancewp_prevent_remote_patterns() {
	return false;
}
add_filter( 'should_load_remote_block_patterns', 'seancewp_prevent_remote_patterns' );
