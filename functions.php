<?php
/**
 * Séance functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package seance
 * @subpackage seance
 * @since 1.0.0
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

		// Adds styles inline.
		wp_add_inline_style( 'seance-style', seance_get_font_face_styles() );

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'seance-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'seance_styles' );

if ( ! function_exists( 'seance_editor_styles' ) ) :

	/**
	 * Enqueue Block Editor styles.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function seance_editor_styles() {

		// Adds styles inline.
		wp_add_inline_style( 'wp-block-library', seance_get_font_face_styles() );

	}

endif;

add_action( 'admin_init', 'seance_editor_styles' );


if ( ! function_exists( 'seance_get_font_face_styles' ) ) :

	/**
	 * Get font face styles.
	 * Called by the functions seance_styles() and seance_editor_styles() above.
	 *
	 * @since 1.0.0
	 *
	 * @return string
	 */
	function seance_get_font_face_styles() {

		return "
		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Roman.ttf.woff2' ) . "') format('woff2');
		}

		@font-face{
			font-family: 'Source Serif Pro';
			font-weight: 200 900;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Italic.ttf.woff2' ) . "') format('woff2');
		}
		";

	}

endif;

if ( ! function_exists( 'seance_preload_webfonts' ) ) :

	/**
	 * Preloads the main web font to improve performance.
	 *
	 * Only the main web font (font-style: normal) is preloaded here since that font is always relevant (it is used
	 * on every heading, for example). The other font is only needed if there is any applicable content in italic style,
	 * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
	 * at all.
	 *
	 * @since 1.0.0
	 *
	 * @return void
	 */
	function seance_preload_webfonts() {
		?>
		<link rel="preload" href="<?php echo esc_url( get_theme_file_uri( 'assets/fonts/SourceSerif4Variable-Roman.ttf.woff2' ) ); ?>" as="font" type="font/woff2" crossorigin>
		<?php
	}

endif;

add_action( 'wp_head', 'seance_preload_webfonts' );

// Adds Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';
