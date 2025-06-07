<?php
/**
 * Twenty Twenty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

/**
 * Table of Contents:
 * Theme Support
 * Required Files
 * Register Styles
 * Register Scripts
 * Register Menus
 * Custom Logo
 * WP Body Open
 * Register Sidebars
 * Enqueue Block Editor Assets
 * Enqueue Classic Editor Styles
 * Block Editor Settings
 */

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 *
 * @since Twenty Twenty 1.0
 */
function twentytwenty_theme_support() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Custom background color.
	add_theme_support(
		'custom-background',
		array(
			'default-color' => 'f5efe0',
		)
	);

	// Set content-width.
	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 580;
	}

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 1200, 9999 );

	// Add custom image size used in Cover Template.
	add_image_size( 'twentytwenty-fullscreen', 1980, 9999 );

	// Custom logo.
	$logo_width  = 120;
	$logo_height = 90;

	// If the retina setting is active, double the recommended width and height.
	if ( get_theme_mod( 'retina_logo', false ) ) {
		$logo_width  = floor( $logo_width * 2 );
		$logo_height = floor( $logo_height * 2 );
	}

	add_theme_support(
		'custom-logo',
		array(
			'height'      => $logo_height,
			'width'       => $logo_width,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'script',
			'style',
			'navigation-widgets',
		)
	);

	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	/*
	 * Adds starter content to highlight the theme on fresh sites.
	 * This is done conditionally to avoid loading the starter content on every
	 * page load, as it is a one-off operation only needed once in the customizer.
	 */
	if ( is_customize_preview() ) {
		require get_template_directory() . '/inc/starter-content.php';
		add_theme_support( 'starter-content', twentytwenty_get_starter_content() );
	}

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * Adds `async` and `defer` support for scripts registered or enqueued
	 * by the theme.
	 */
	$loader = new TwentyTwenty_Script_Loader();
	if ( version_compare( $GLOBALS['wp_version'], '6.3', '<' ) ) {
		add_filter( 'script_loader_tag', array( $loader, 'filter_script_loader_tag' ), 10, 2 );
	} else {
		add_filter( 'print_scripts_array', array( $loader, 'migrate_legacy_strategy_script_data' ), 100 );
	}
}

add_action( 'after_setup_theme', 'twentytwenty_theme_support' );

/**
 * REQUIRED FILES
 * Include required files.
 */
require get_template_directory() . '/inc/template-tags.php';

// Handle SVG icons.
require get_template_directory() . '/classes/class-twentytwenty-svg-icons.php';
require get_template_directory() . '/inc/svg-icons.php';

// Handle Customizer settings.
require get_template_directory() . '/classes/class-twentytwenty-customize.php';

// Require Separator Control class.
require get_template_directory() . '/classes/class-twentytwenty-separator-control.php';

// Custom comment walker.
require get_template_directory() . '/classes/class-twentytwenty-walker-comment.php';

// Custom page walker.
require get_template_directory() . '/classes/class-twentytwenty-walker-page.php';

// Custom script loader class.
require get_template_directory() . '/classes/class-twentytwenty-script-loader.php';

// Non-latin language handling.
require get_template_directory() . '/classes/class-twentytwenty-non-latin-languages.php';

// Custom CSS.
require get_template_directory() . '/inc/custom-css.php';

// Block Patterns.
require get_template_directory() . '/inc/block-patterns.php';

/**
 * Register and Enqueue Styles.
 *
 * @since Twenty Twenty 1.0
 * @since Twenty Twenty 2.6 Enqueue the CSS file for the variable font.
 */
function twentytwenty_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'twentytwenty-style', get_stylesheet_uri(), array(), $theme_version );
	wp_style_add_data( 'twentytwenty-style', 'rtl', 'replace' );

	// Enqueue the CSS file for the variable font, Inter.
	wp_enqueue_style( 'twentytwenty-fonts', get_theme_file_uri( '/assets/css/font-inter.css' ), array(), $theme_version, 'all' );

	// Add output of Customizer settings as inline style.
	$customizer_css = twentytwenty_get_customizer_css( 'front-end' );
	if ( $customizer_css ) {
		wp_add_inline_style( 'twentytwenty-style', $customizer_css );
	}

	// Add print CSS.
	wp_enqueue_style( 'twentytwenty-print-style', get_template_directory_uri() . '/print.css', null, $theme_version, 'print' );
}

add_action( 'wp_enqueue_scripts', 'twentytwenty_register_styles' );

/**
 * Register and Enqueue Scripts.
 *
 * @since Twenty Twenty 1.0
 */
function twentytwenty_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	if ( ( ! is_admin() ) && is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	/*
	 * This script is intentionally printed in the head because it involves the page header. The `defer` script loading
	 * strategy ensures that it does not block rendering; being in the head it will start loading earlier so that it
	 * will execute sooner once the DOM has loaded. The $args array is not used here to avoid unintentional footer
	 * placement in WP<6.3; the wp_script_add_data() call is used instead.
	 */
	wp_enqueue_script( 'twentytwenty-js', get_template_directory_uri() . '/assets/js/index.js', array(), $theme_version );
	wp_script_add_data( 'twentytwenty-js', 'strategy', 'defer' );
}

add_action( 'wp_enqueue_scripts', 'twentytwenty_register_scripts' );

/**
 * Fix skip link focus in IE11.
 *
 * This does not enqueue the script because it is tiny and because it is only for IE11,
 * thus it does not warrant having an entire dedicated blocking script being loaded.
 *
 * @since Twenty Twenty 1.0
 * @deprecated Twenty Twenty 2.3 Removed from wp_print_footer_scripts action.
 *
 * @link https://git.io/vWdr2
 */
function twentytwenty_skip_link_focus_fix() {
	// The following is minified via `terser --compress --mangle -- assets/js/skip-link-focus-fix.js`.
	?>
<script>
/(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window
       .addEventListener("hashchange", function() {
              var t, e = location.hash.substring(1);
              /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (
                     /^(?:a|select|input|button|textarea)$/i
                     .test(t.tagName) || (t.tabIndex = -1), t.focus())
       }, !1);
</script>
<?php
}

/**
 * Enqueue non-latin language styles.
 *
 * @since Twenty Twenty 1.0
 *
 * @return void
 */
function twentytwenty_non_latin_languages() {
	$custom_css = TwentyTwenty_Non_Latin_Languages::get_non_latin_css( 'front-end' );

	if ( $custom_css ) {
		wp_add_inline_style( 'twentytwenty-style', $custom_css );
	}
}

add_action( 'wp_enqueue_scripts', 'twentytwenty_non_latin_languages' );

/**
 * Register navigation menus uses wp_nav_menu in five places.
 *
 * @since Twenty Twenty 1.0
 */
function twentytwenty_menus() {

	$locations = array(
		'primary'  => __( 'Desktop Horizontal Menu', 'twentytwenty' ),
		'expanded' => __( 'Desktop Expanded Menu', 'twentytwenty' ),
		'mobile'   => __( 'Mobile Menu', 'twentytwenty' ),
		'footer'   => __( 'Footer Menu', 'twentytwenty' ),
		'social'   => __( 'Social Menu', 'twentytwenty' ),
	);

	register_nav_menus( $locations );
}

add_action( 'init', 'twentytwenty_menus' );

/**
 * Get the information about the logo.
 *
 * @since Twenty Twenty 1.0
 *
 * @param string $html The HTML output from get_custom_logo (core function).
 * @return string
 */
function twentytwenty_get_custom_logo( $html ) {

	$logo_id = get_theme_mod( 'custom_logo' );

	if ( ! $logo_id ) {
		return $html;
	}

	$logo = wp_get_attachment_image_src( $logo_id, 'full' );

	if ( $logo ) {
		// For clarity.
		$logo_width  = esc_attr( $logo[1] );
		$logo_height = esc_attr( $logo[2] );

		// If the retina logo setting is active, reduce the width/height by half.
		if ( get_theme_mod( 'retina_logo', false ) ) {
			$logo_width  = floor( $logo_width / 2 );
			$logo_height = floor( $logo_height / 2 );

			$search = array(
				'/width=\"\d+\"/iU',
				'/height=\"\d+\"/iU',
			);

			$replace = array(
				"width=\"{$logo_width}\"",
				"height=\"{$logo_height}\"",
			);

			// Add a style attribute with the height, or append the height to the style attribute if the style attribute already exists.
			if ( false === strpos( $html, ' style=' ) ) {
				$search[]  = '/(src=)/';
				$replace[] = "style=\"height: {$logo_height}px;\" src=";
			} else {
				$search[]  = '/(style="[^"]*)/';
				$replace[] = "$1 height: {$logo_height}px;";
			}

			$html = preg_replace( $search, $replace, $html );

		}
	}

	return $html;
}

add_filter( 'get_custom_logo', 'twentytwenty_get_custom_logo' );

if ( ! function_exists( 'wp_body_open' ) ) {

	/**
	 * Shim for wp_body_open, ensuring backward compatibility with versions of WordPress older than 5.2.
	 *
	 * @since Twenty Twenty 1.0
	 */
	function wp_body_open() {
		/** This action is documented in wp-includes/general-template.php */
		do_action( 'wp_body_open' );
	}
}

/**
 * Include a skip to content link at the top of the page so that users can bypass the menu.
 *
 * @since Twenty Twenty 1.0
 */
function twentytwenty_skip_link() {
	echo '<a class="skip-link screen-reader-text" href="#site-content">' .
		/* translators: Hidden accessibility text. */
		__( 'Skip to the content', 'twentytwenty' ) .
	'</a>';
}

add_action( 'wp_body_open', 'twentytwenty_skip_link', 5 );

/**
 * Register widget areas.
 *
 * @since Twenty Twenty 1.0
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function twentytwenty_sidebar_registration() {

	// Arguments used in all register_sidebar() calls.
	$shared_args = array(
		'before_title'  => '<h2 class="widget-title subheading heading-size-3">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Footer #1.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #1', 'twentytwenty' ),
				'id'          => 'sidebar-1',
				'description' => __( 'Widgets in this area will be displayed in the first column in the footer.', 'twentytwenty' ),
			)
		)
	);

	// Footer #2.
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => __( 'Footer #2', 'twentytwenty' ),
				'id'          => 'sidebar-2',
				'description' => __( 'Widgets in this area will be displayed in the second column in the footer.', 'twentytwenty' ),
			)
		)
	);
}

add_action( 'widgets_init', 'twentytwenty_sidebar_registration' );

/**
 * Enqueue supplemental block editor styles.
 *
 * @since Twenty Twenty 1.0
 * @since Twenty Twenty 2.4 Removed a script related to the obsolete Squared style of Button blocks.
 * @since Twenty Twenty 2.6 Enqueue the CSS file for the variable font.
 */
function twentytwenty_block_editor_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	// Enqueue the editor styles.
	wp_enqueue_style( 'twentytwenty-block-editor-styles', get_theme_file_uri( '/assets/css/editor-style-block.css' ), array(), $theme_version, 'all' );
	wp_style_add_data( 'twentytwenty-block-editor-styles', 'rtl', 'replace' );

	// Add inline style from the Customizer.
	$customizer_css = twentytwenty_get_customizer_css( 'block-editor' );
	if ( $customizer_css ) {
		wp_add_inline_style( 'twentytwenty-block-editor-styles', $customizer_css );
	}

	// Enqueue the CSS file for the variable font, Inter.
	wp_enqueue_style( 'twentytwenty-fonts', get_theme_file_uri( '/assets/css/font-inter.css' ), array(), $theme_version, 'all' );

	// Add inline style for non-latin fonts.
	$custom_css = TwentyTwenty_Non_Latin_Languages::get_non_latin_css( 'block-editor' );
	if ( $custom_css ) {
		wp_add_inline_style( 'twentytwenty-block-editor-styles', $custom_css );
	}
}

if ( is_admin() && version_compare( $GLOBALS['wp_version'], '6.3', '>=' ) ) {
	add_action( 'enqueue_block_assets', 'twentytwenty_block_editor_styles', 1, 1 );
} else {
	add_action( 'enqueue_block_editor_assets', 'twentytwenty_block_editor_styles', 1, 1 );
}

/**
 * Enqueue classic editor styles.
 *
 * @since Twenty Twenty 1.0
 * @since Twenty Twenty 2.6 Enqueue the CSS file for the variable font.
 */
function twentytwenty_classic_editor_styles() {

	$classic_editor_styles = array(
		'/assets/css/editor-style-classic.css',
		'/assets/css/font-inter.css',
	);

	add_editor_style( $classic_editor_styles );
}

add_action( 'init', 'twentytwenty_classic_editor_styles' );

/**
 * Output Customizer settings in the classic editor.
 * Adds styles to the head of the TinyMCE iframe. Kudos to @Otto42 for the original solution.
 *
 * @since Twenty Twenty 1.0
 *
 * @param array $mce_init TinyMCE styles.
 * @return array TinyMCE styles.
 */
function twentytwenty_add_classic_editor_customizer_styles( $mce_init ) {

	$styles = twentytwenty_get_customizer_css( 'classic-editor' );

	if ( ! $styles ) {
		return $mce_init;
	}

	if ( ! isset( $mce_init['content_style'] ) ) {
		$mce_init['content_style'] = $styles . ' ';
	} else {
		$mce_init['content_style'] .= ' ' . $styles . ' ';
	}

	return $mce_init;
}

add_filter( 'tiny_mce_before_init', 'twentytwenty_add_classic_editor_customizer_styles' );

/**
 * Output non-latin font styles in the classic editor.
 * Adds styles to the head of the TinyMCE iframe. Kudos to @Otto42 for the original solution.
 *
 * @param array $mce_init TinyMCE styles.
 * @return array TinyMCE styles.
 */
function twentytwenty_add_classic_editor_non_latin_styles( $mce_init ) {

	$styles = TwentyTwenty_Non_Latin_Languages::get_non_latin_css( 'classic-editor' );

	// Return if there are no styles to add.
	if ( ! $styles ) {
		return $mce_init;
	}

	if ( ! isset( $mce_init['content_style'] ) ) {
		$mce_init['content_style'] = $styles . ' ';
	} else {
		$mce_init['content_style'] .= ' ' . $styles . ' ';
	}

	return $mce_init;
}

add_filter( 'tiny_mce_before_init', 'twentytwenty_add_classic_editor_non_latin_styles' );

/**
 * Block Editor Settings.
 * Add custom colors and font sizes to the block editor.
 *
 * @since Twenty Twenty 1.0
 */
function twentytwenty_block_editor_settings() {

	// Block Editor Palette.
	$editor_color_palette = array(
		array(
			'name'  => __( 'Accent Color', 'twentytwenty' ),
			'slug'  => 'accent',
			'color' => twentytwenty_get_color_for_area( 'content', 'accent' ),
		),
		array(
			'name'  => _x( 'Primary', 'color', 'twentytwenty' ),
			'slug'  => 'primary',
			'color' => twentytwenty_get_color_for_area( 'content', 'text' ),
		),
		array(
			'name'  => _x( 'Secondary', 'color', 'twentytwenty' ),
			'slug'  => 'secondary',
			'color' => twentytwenty_get_color_for_area( 'content', 'secondary' ),
		),
		array(
			'name'  => __( 'Subtle Background', 'twentytwenty' ),
			'slug'  => 'subtle-background',
			'color' => twentytwenty_get_color_for_area( 'content', 'borders' ),
		),
	);

	// Add the background option.
	$background_color = get_theme_mod( 'background_color' );
	if ( ! $background_color ) {
		$background_color_arr = get_theme_support( 'custom-background' );
		$background_color     = $background_color_arr[0]['default-color'];
	}
	$editor_color_palette[] = array(
		'name'  => __( 'Background Color', 'twentytwenty' ),
		'slug'  => 'background',
		'color' => '#' . $background_color,
	);

	// If we have accent colors, add them to the block editor palette.
	if ( $editor_color_palette ) {
		add_theme_support( 'editor-color-palette', $editor_color_palette );
	}

	// Block Editor Font Sizes.
	add_theme_support(
		'editor-font-sizes',
		array(
			array(
				'name'      => _x( 'Small', 'Name of the small font size in the block editor', 'twentytwenty' ),
				'shortName' => _x( 'S', 'Short name of the small font size in the block editor.', 'twentytwenty' ),
				'size'      => 18,
				'slug'      => 'small',
			),
			array(
				'name'      => _x( 'Regular', 'Name of the regular font size in the block editor', 'twentytwenty' ),
				'shortName' => _x( 'M', 'Short name of the regular font size in the block editor.', 'twentytwenty' ),
				'size'      => 21,
				'slug'      => 'normal',
			),
			array(
				'name'      => _x( 'Large', 'Name of the large font size in the block editor', 'twentytwenty' ),
				'shortName' => _x( 'L', 'Short name of the large font size in the block editor.', 'twentytwenty' ),
				'size'      => 26.25,
				'slug'      => 'large',
			),
			array(
				'name'      => _x( 'Larger', 'Name of the larger font size in the block editor', 'twentytwenty' ),
				'shortName' => _x( 'XL', 'Short name of the larger font size in the block editor.', 'twentytwenty' ),
				'size'      => 32,
				'slug'      => 'larger',
			),
		)
	);

	add_theme_support( 'editor-styles' );

	// If we have a dark background color then add support for dark editor style.
	// We can determine if the background color is dark by checking if the text-color is white.
	if ( '#ffffff' === strtolower( twentytwenty_get_color_for_area( 'content', 'text' ) ) ) {
		add_theme_support( 'dark-editor-style' );
	}
}

add_action( 'after_setup_theme', 'twentytwenty_block_editor_settings' );

/**
 * Overwrite default more tag with styling and screen reader markup.
 *
 * @param string $html The default output HTML for the more tag.
 * @return string
 */
function twentytwenty_read_more_tag( $html ) {
	return preg_replace( '/<a(.*)>(.*)<\/a>/iU', sprintf( '<div class="read-more-button-wrap"><a$1><span class="faux-button">$2</span> <span class="screen-reader-text">"%1$s"</span></a></div>', get_the_title( get_the_ID() ) ), $html );
}

add_filter( 'the_content_more_link', 'twentytwenty_read_more_tag' );

/**
 * Enqueues scripts for customizer controls & settings.
 *
 * @since Twenty Twenty 1.0
 *
 * @return void
 */
function twentytwenty_customize_controls_enqueue_scripts() {
	$theme_version = wp_get_theme()->get( 'Version' );

	// Add main customizer js file.
	wp_enqueue_script( 'twentytwenty-customize', get_template_directory_uri() . '/assets/js/customize.js', array( 'jquery' ), $theme_version );

	// Add script for color calculations.
	wp_enqueue_script( 'twentytwenty-color-calculations', get_template_directory_uri() . '/assets/js/color-calculations.js', array( 'wp-color-picker' ), $theme_version );

	// Add script for controls.
	wp_enqueue_script( 'twentytwenty-customize-controls', get_template_directory_uri() . '/assets/js/customize-controls.js', array( 'twentytwenty-color-calculations', 'customize-controls', 'underscore', 'jquery' ), $theme_version );
	wp_localize_script( 'twentytwenty-customize-controls', 'twentyTwentyBgColors', twentytwenty_get_customizer_color_vars() );
}

add_action( 'customize_controls_enqueue_scripts', 'twentytwenty_customize_controls_enqueue_scripts' );

/**
 * Enqueue scripts for the customizer preview.
 *
 * @since Twenty Twenty 1.0
 *
 * @return void
 */
function twentytwenty_customize_preview_init() {
	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script( 'twentytwenty-customize-preview', get_theme_file_uri( '/assets/js/customize-preview.js' ), array( 'customize-preview', 'customize-selective-refresh', 'jquery' ), $theme_version, array( 'in_footer' => true ) );
	wp_localize_script( 'twentytwenty-customize-preview', 'twentyTwentyBgColors', twentytwenty_get_customizer_color_vars() );
	wp_localize_script( 'twentytwenty-customize-preview', 'twentyTwentyPreviewEls', twentytwenty_get_elements_array() );

	wp_add_inline_script(
		'twentytwenty-customize-preview',
		sprintf(
			'wp.customize.selectiveRefresh.partialConstructor[ %1$s ].prototype.attrs = %2$s;',
			wp_json_encode( 'cover_opacity' ),
			wp_json_encode( twentytwenty_customize_opacity_range() )
		)
	);
}

add_action( 'customize_preview_init', 'twentytwenty_customize_preview_init' );

/**
 * Get accessible color for an area.
 *
 * @since Twenty Twenty 1.0
 *
 * @param string $area    The area we want to get the colors for.
 * @param string $context Can be 'text' or 'accent'.
 * @return string Returns a HEX color.
 */
function twentytwenty_get_color_for_area( $area = 'content', $context = 'text' ) {

	// Get the value from the theme-mod.
	$settings = get_theme_mod(
		'accent_accessible_colors',
		array(
			'content'       => array(
				'text'      => '#000000',
				'accent'    => '#cd2653',
				'secondary' => '#6d6d6d',
				'borders'   => '#dcd7ca',
			),
			'header-footer' => array(
				'text'      => '#000000',
				'accent'    => '#cd2653',
				'secondary' => '#6d6d6d',
				'borders'   => '#dcd7ca',
			),
		)
	);

	// If we have a value return it.
	if ( isset( $settings[ $area ] ) && isset( $settings[ $area ][ $context ] ) ) {
		return $settings[ $area ][ $context ];
	}

	// Return false if the option doesn't exist.
	return false;
}

/**
 * Returns an array of variables for the customizer preview.
 *
 * @since Twenty Twenty 1.0
 *
 * @return array
 */
function twentytwenty_get_customizer_color_vars() {
	$colors = array(
		'content'       => array(
			'setting' => 'background_color',
		),
		'header-footer' => array(
			'setting' => 'header_footer_background_color',
		),
	);
	return $colors;
}

/**
 * Get an array of elements.
 *
 * @since Twenty Twenty 1.0
 *
 * @return array
 */
function twentytwenty_get_elements_array() {

	// The array is formatted like this:
	// [key-in-saved-setting][sub-key-in-setting][css-property] = [elements].
	$elements = array(
		'content'       => array(
			'accent'     => array(
				'color'            => array( '.color-accent', '.color-accent-hover:hover', '.color-accent-hover:focus', ':root .has-accent-color', '.has-drop-cap:not(:focus):first-letter', '.wp-block-button.is-style-outline', 'a' ),
				'border-color'     => array( 'blockquote', '.border-color-accent', '.border-color-accent-hover:hover', '.border-color-accent-hover:focus' ),
				'background-color' => array( 'button', '.button', '.faux-button', '.wp-block-button__link', '.wp-block-file .wp-block-file__button', 'input[type="button"]', 'input[type="reset"]', 'input[type="submit"]', '.bg-accent', '.bg-accent-hover:hover', '.bg-accent-hover:focus', ':root .has-accent-background-color', '.comment-reply-link' ),
				'fill'             => array( '.fill-children-accent', '.fill-children-accent *' ),
			),
			'background' => array(
				'color'            => array( ':root .has-background-color', 'button', '.button', '.faux-button', '.wp-block-button__link', '.wp-block-file__button', 'input[type="button"]', 'input[type="reset"]', 'input[type="submit"]', '.wp-block-button', '.comment-reply-link', '.has-background.has-primary-background-color:not(.has-text-color)', '.has-background.has-primary-background-color *:not(.has-text-color)', '.has-background.has-accent-background-color:not(.has-text-color)', '.has-background.has-accent-background-color *:not(.has-text-color)' ),
				'background-color' => array( ':root .has-background-background-color' ),
			),
			'text'       => array(
				'color'            => array( 'body', '.entry-title a', ':root .has-primary-color' ),
				'background-color' => array( ':root .has-primary-background-color' ),
			),
			'secondary'  => array(
				'color'            => array( 'cite', 'figcaption', '.wp-caption-text', '.post-meta', '.entry-content .wp-block-archives li', '.entry-content .wp-block-categories li', '.entry-content .wp-block-latest-posts li', '.wp-block-latest-comments__comment-date', '.wp-block-latest-posts__post-date', '.wp-block-embed figcaption', '.wp-block-image figcaption', '.wp-block-pullquote cite', '.comment-metadata', '.comment-respond .comment-notes', '.comment-respond .logged-in-as', '.pagination .dots', '.entry-content hr:not(.has-background)', 'hr.styled-separator', ':root .has-secondary-color' ),
				'background-color' => array( ':root .has-secondary-background-color' ),
			),
			'borders'    => array(
				'border-color'        => array( 'pre', 'fieldset', 'input', 'textarea', 'table', 'table *', 'hr' ),
				'background-color'    => array( 'caption', 'code', 'code', 'kbd', 'samp', '.wp-block-table.is-style-stripes tbody tr:nth-child(odd)', ':root .has-subtle-background-background-color' ),
				'border-bottom-color' => array( '.wp-block-table.is-style-stripes' ),
				'border-top-color'    => array( '.wp-block-latest-posts.is-grid li' ),
				'color'               => array( ':root .has-subtle-background-color' ),
			),
		),
		'header-footer' => array(
			'accent'     => array(
				'color'            => array( 'body:not(.overlay-header) .primary-menu > li > a', 'body:not(.overlay-header) .primary-menu > li > .icon', '.modal-menu a', '.footer-menu a, .footer-widgets a:where(:not(.wp-block-button__link))', '#site-footer .wp-block-button.is-style-outline', '.wp-block-pullquote:before', '.singular:not(.overlay-header) .entry-header a', '.archive-header a', '.header-footer-group .color-accent', '.header-footer-group .color-accent-hover:hover' ),
				'background-color' => array( '.social-icons a', '#site-footer button:not(.toggle)', '#site-footer .button', '#site-footer .faux-button', '#site-footer .wp-block-button__link', '#site-footer .wp-block-file__button', '#site-footer input[type="button"]', '#site-footer input[type="reset"]', '#site-footer input[type="submit"]' ),
			),
			'background' => array(
				'color'            => array( '.social-icons a', 'body:not(.overlay-header) .primary-menu ul', '.header-footer-group button', '.header-footer-group .button', '.header-footer-group .faux-button', '.header-footer-group .wp-block-button:not(.is-style-outline) .wp-block-button__link', '.header-footer-group .wp-block-file__button', '.header-footer-group input[type="button"]', '.header-footer-group input[type="reset"]', '.header-footer-group input[type="submit"]' ),
				'background-color' => array( '#site-header', '.footer-nav-widgets-wrapper', '#site-footer', '.menu-modal', '.menu-modal-inner', '.search-modal-inner', '.archive-header', '.singular .entry-header', '.singular .featured-media:before', '.wp-block-pullquote:before' ),
			),
			'text'       => array(
				'color'               => array( '.header-footer-group', 'body:not(.overlay-header) #site-header .toggle', '.menu-modal .toggle' ),
				'background-color'    => array( 'body:not(.overlay-header) .primary-menu ul' ),
				'border-bottom-color' => array( 'body:not(.overlay-header) .primary-menu > li > ul:after' ),
				'border-left-color'   => array( 'body:not(.overlay-header) .primary-menu ul ul:after' ),
			),
			'secondary'  => array(
				'color' => array( '.site-description', 'body:not(.overlay-header) .toggle-inner .toggle-text', '.widget .post-date', '.widget .rss-date', '.widget_archive li', '.widget_categories li', '.widget cite', '.widget_pages li', '.widget_meta li', '.widget_nav_menu li', '.powered-by-wordpress', '.footer-credits .privacy-policy', '.to-the-top', '.singular .entry-header .post-meta', '.singular:not(.overlay-header) .entry-header .post-meta a' ),
			),
			'borders'    => array(
				'border-color'     => array( '.header-footer-group pre', '.header-footer-group fieldset', '.header-footer-group input', '.header-footer-group textarea', '.header-footer-group table', '.header-footer-group table *', '.footer-nav-widgets-wrapper', '#site-footer', '.menu-modal nav *', '.footer-widgets-outer-wrapper', '.footer-top' ),
				'background-color' => array( '.header-footer-group table caption', 'body:not(.overlay-header) .header-inner .toggle-wrapper::before' ),
			),
		),
	);

	/**
	 * Filters Twenty Twenty theme elements.
	 *
	 * @since Twenty Twenty 1.0
	 *
	 * @param array Array of elements.
	 */
	return apply_filters( 'twentytwenty_get_elements_array', $elements );
}

function add_custom_canonical_tag() {
    if (is_single()) {
        echo '<link rel="canonical" href="' . get_permalink() . '" />';
    }
}
add_action('wp_head', 'add_custom_canonical_tag');

// Enqueue jQuery if not already loaded
function enqueue_contact_form_scripts() {
    wp_enqueue_script('jquery');
}


add_action('wp_enqueue_scripts', 'enqueue_contact_form_scripts');

// Create contact submissions table on theme activation
function create_contact_submissions_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_submissions';
    
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        first_name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        phone varchar(20) NOT NULL,
        subject varchar(200) NOT NULL,
        message text NOT NULL,
        submitted_at datetime NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
add_action('after_switch_theme', 'create_contact_submissions_table');

// Add admin menu for contact submissions
function add_contact_submissions_menu() {
    add_menu_page(
        'Contact Submissions',
        'Contact Submissions',
        'manage_options',
        'contact-submissions',
        'display_contact_submissions',
        'dashicons-email',
        30
    );
}
add_action('admin_menu', 'add_contact_submissions_menu');

// Display contact submissions in admin
function display_contact_submissions() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'contact_submissions';
    
    // Handle delete action
    if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $wpdb->delete($table_name, ['id' => $id]);
        echo '<div class="notice notice-success"><p>Submission deleted successfully.</p></div>';
    }
    
    // Get submissions
    $submissions = $wpdb->get_results("SELECT * FROM $table_name ORDER BY submitted_at DESC");
    
    ?>
<div class="wrap">
       <h1>Contact Form Submissions</h1>
       <table class="wp-list-table widefat fixed striped">
              <thead>
                     <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Submitted At</th>
                            <th>Actions</th>
                     </tr>
              </thead>
              <tbody>
                     <?php foreach ($submissions as $submission): ?>
                     <tr>
                            <td><?php echo esc_html($submission->id); ?></td>
                            <td><?php echo esc_html($submission->first_name); ?></td>
                            <td><?php echo esc_html($submission->email); ?></td>
                            <td><?php echo esc_html($submission->phone); ?></td>
                            <td><?php echo esc_html($submission->subject); ?></td>
                            <td><?php echo esc_html($submission->message); ?></td>
                            <td><?php echo esc_html($submission->submitted_at); ?></td>
                            <td>
                                   <a href="?page=contact-submissions&action=delete&id=<?php echo $submission->id; ?>"
                                          class="button button-small"
                                          onclick="return confirm('Are you sure you want to delete this submission?')">Delete</a>
                            </td>
                     </tr>
                     <?php endforeach; ?>
              </tbody>
       </table>
</div>
<?php
}

// Add action hooks for form processing
add_action('admin_post_process_join_form', 'process_join_form');
add_action('admin_post_nopriv_process_join_form', 'process_join_form');

function process_join_form() {
    require_once(get_template_directory() . '/process-join.php');
}

// Create join us submissions table on theme activation
function create_join_us_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'join_us_entries';
    
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id bigint(20) NOT NULL AUTO_INCREMENT,
        name varchar(100) NOT NULL,
        email varchar(100) NOT NULL,
        message text NOT NULL,
        submitted_at datetime NOT NULL,
        PRIMARY KEY  (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}
add_action('after_switch_theme', 'create_join_us_table');
add_action('init', 'create_join_us_table'); // Also create on init to ensure table exists

// Add admin menu for join us submissions
function add_join_us_menu() {
    add_menu_page(
        'Join Us Submissions',
        'Join Us Submissions',
        'manage_options',
        'join-us-submissions',
        'display_join_us_submissions',
        'dashicons-groups',
        31
    );
}
add_action('admin_menu', 'add_join_us_menu');

// Display join us submissions in admin
function display_join_us_submissions() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'join_us_entries';
    
    // Handle delete action
    if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $wpdb->delete($table_name, ['id' => $id]);
        echo '<div class="notice notice-success"><p>Submission deleted successfully.</p></div>';
    }
    
    // Get submissions
    $submissions = $wpdb->get_results("SELECT * FROM $table_name ORDER BY submitted_at DESC");
    
    ?>
<div class="wrap">
       <h1>Join Us Form Submissions</h1>
       <table class="wp-list-table widefat fixed striped">
              <thead>
                     <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Message</th>
                            <th>Submitted At</th>
                            <th>Actions</th>
                     </tr>
              </thead>
              <tbody>
                     <?php foreach ($submissions as $submission): ?>
                     <tr>
                            <td><?php echo esc_html($submission->id); ?></td>
                            <td><?php echo esc_html($submission->name); ?></td>
                            <td><?php echo esc_html($submission->email); ?></td>
                            <td><?php echo esc_html($submission->message); ?></td>
                            <td><?php echo esc_html($submission->submitted_at); ?></td>
                            <td>
                                   <a href="?page=join-us-submissions&action=delete&id=<?php echo $submission->id; ?>"
                                          class="button button-small"
                                          onclick="return confirm('Are you sure you want to delete this submission?')">Delete</a>
                            </td>
                     </tr>
                     <?php endforeach; ?>
              </tbody>
       </table>
</div>
<?php
}

// Handle donation form submission
add_action('admin_post_process_donation', 'process_donation_form');
add_action('admin_post_nopriv_process_donation', 'process_donation_form');

function process_donation_form() {
    // Enable error logging
    error_log('Donation form submitted');
    
    // Verify nonce
    if (!isset($_POST['donation_nonce']) || !wp_verify_nonce($_POST['donation_nonce'], 'donation_form_nonce')) {
        error_log('Nonce verification failed');
        wp_redirect(add_query_arg('donation_status', 'error', home_url('/donate/')));
        exit;
    }

    // Sanitize and validate form data
    $firstname = sanitize_text_field($_POST['firstname']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $pan = sanitize_text_field($_POST['pan']);
    $address = sanitize_textarea_field($_POST['address']);
    $amount = floatval($_POST['amount']);

    error_log('Form data sanitized: ' . print_r($_POST, true));

    // Validate required fields
    if (empty($firstname) || empty($email) || empty($phone) || empty($pan) || empty($address) || $amount <= 0) {
        error_log('Required fields validation failed');
        wp_redirect(add_query_arg('donation_status', 'error', home_url('/donate/')));
        exit;
    }

    // Store donation data in WordPress database
    $donation_data = array(
        'post_title'    => 'Donation from ' . $firstname,
        'post_type'     => 'donation',
        'post_status'   => 'publish',
    );

    $donation_id = wp_insert_post($donation_data);
    error_log('Donation post created with ID: ' . $donation_id);

    if ($donation_id) {
        // Store donation meta data
        update_post_meta($donation_id, 'donor_name', $firstname);
        update_post_meta($donation_id, 'donor_email', $email);
        update_post_meta($donation_id, 'donor_phone', $phone);
        update_post_meta($donation_id, 'donor_pan', $pan);
        update_post_meta($donation_id, 'donor_address', $address);
        update_post_meta($donation_id, 'donation_amount', $amount);
        update_post_meta($donation_id, 'donation_date', current_time('mysql'));
        update_post_meta($donation_id, 'donation_status', 'pending');

        // Store in custom table
        global $wpdb;
        $table_name = $wpdb->prefix . 'donations';
        
        $result = $wpdb->insert(
            $table_name,
            array(
                'fullname' => $firstname,
                'email' => $email,
                'phone' => $phone,
                'pan' => $pan,
                'address' => $address,
                'amount' => $amount,
                'created_at' => current_time('mysql')
            ),
            array('%s', '%s', '%s', '%s', '%s', '%f', '%s')
        );
        
        error_log('Database insert result: ' . ($result ? 'success' : 'failed'));

        // Send confirmation email
        $to = $email;
        $subject = 'Thank you for your donation to SheWings Foundation';
        $message = "Dear $firstname,\n\n";
        $message .= "Thank you for your generous donation of ₹$amount to SheWings Foundation.\n\n";
        $message .= "We have received your donation request and will process it shortly.\n\n";
        $message .= "Best regards,\nSheWings Foundation Team";
        
        $headers = array('Content-Type: text/plain; charset=UTF-8');
        $mail_sent = wp_mail($to, $subject, $message, $headers);
        error_log('Confirmation email sent: ' . ($mail_sent ? 'yes' : 'no'));

        // Redirect to thank you page with type parameter
        $redirect_url = home_url('/thank-you/?type=donation');
        error_log('Redirecting to: ' . $redirect_url);
        wp_safe_redirect($redirect_url);
        exit;
    } else {
        error_log('Failed to create donation post');
        wp_safe_redirect(add_query_arg('donation_status', 'error', home_url('/donate/')));
        exit;
    }
}

// Register Donation custom post type
function register_donation_post_type() {
    $labels = array(
        'name'               => 'Donations',
        'singular_name'      => 'Donation',
        'menu_name'          => 'Donations',
        'add_new'            => 'Add New',
        'add_new_item'       => 'Add New Donation',
        'edit_item'          => 'Edit Donation',
        'new_item'           => 'New Donation',
        'view_item'          => 'View Donation',
        'search_items'       => 'Search Donations',
        'not_found'          => 'No donations found',
        'not_found_in_trash' => 'No donations found in Trash',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'donations'),
        'capability_type'    => 'post',
        'supports'           => array('title', 'editor', 'custom-fields'),
    );

    register_post_type('donation', $args);
}
add_action('init', 'register_donation_post_type');


//donation thank you page
function create_donations_table() {
	global $wpdb;
	$table_name = $wpdb->prefix . 'donations';
   
	$charset_collate = $wpdb->get_charset_collate();
   
	$sql = "CREATE TABLE $table_name (
	    id INT AUTO_INCREMENT PRIMARY KEY,
	    fullname VARCHAR(255) NOT NULL,
	    email VARCHAR(255) NOT NULL,
	    phone VARCHAR(20) NOT NULL,
	    pan VARCHAR(20) NOT NULL,
	    address TEXT NOT NULL,
	    amount DECIMAL(10,2) NOT NULL,
	    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
	) $charset_collate;";
   
	require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
	dbDelta($sql);
   }
   register_activation_hook(__FILE__, 'create_donations_table');
   
// Configure WordPress mail settings
function configure_wp_mail() {
    // Set the "From" email address
    add_filter('wp_mail_from', function($email) {
        return 'info@shewings.com';
    });
    
    // Set the "From" name
    add_filter('wp_mail_from_name', function($name) {
        return 'SheWings Foundation';
    });
    
    // Enhanced error logging for mail failures
    add_action('wp_mail_failed', function($error) {
        error_log('Mail Error Details:');
        error_log('Error Message: ' . $error->get_error_message());
        error_log('Error Code: ' . $error->get_error_code());
        error_log('Error Data: ' . print_r($error->get_error_data(), true));
    });

    // Add SMTP configuration for GoDaddy
    add_action('phpmailer_init', function($phpmailer) {
        try {
            $phpmailer->isSMTP();
            // Try alternative GoDaddy SMTP server
            $phpmailer->Host = 'smtpout.secureserver.net';
            $phpmailer->Port = 80;
            $phpmailer->SMTPSecure = '';
            $phpmailer->SMTPAuth = true;
            $phpmailer->Username = 'info@shewings.com';
            $phpmailer->Password = 'nlcmedia@sector43';
            $phpmailer->SMTPSecure = 'ssl';
            $phpmailer->From = 'info@shewings.com';
            $phpmailer->FromName = 'SheWings Foundation';
            
            // Enable verbose debugging
            $phpmailer->SMTPDebug = 3; // Maximum debug output
            $phpmailer->Debugoutput = function($str, $level) {
                error_log("SMTP Debug Level $level: $str");
            };
            
            // Additional settings for better compatibility
            $phpmailer->Timeout = 60; // Increased timeout
            $phpmailer->SMTPKeepAlive = true;
            
            // Set character set
            $phpmailer->CharSet = 'UTF-8';
            
            // Disable SSL verification
            $phpmailer->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                    'allow_self_signed' => true
                )
            );
            
            // Log configuration
            error_log('SMTP Configuration:');
            error_log('Host: ' . $phpmailer->Host);
            error_log('Port: ' . $phpmailer->Port);
            error_log('Security: ' . $phpmailer->SMTPSecure);
            error_log('Username: ' . $phpmailer->Username);
            
        } catch (Exception $e) {
            error_log('SMTP Configuration Error: ' . $e->getMessage());
        }
    });
}
add_action('init', 'configure_wp_mail');

// Enhanced test email function
function test_email_configuration() {
    $to = 'info@shewings.com';
    $subject = 'Test Email from WordPress - ' . date('Y-m-d H:i:s');
    $message = "This is a test email to verify SMTP configuration.\n\n";
    $message .= "Server Information:\n";
    $message .= "PHP Version: " . PHP_VERSION . "\n";
    $message .= "WordPress Version: " . get_bloginfo('version') . "\n";
    $message .= "Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "\n";
    $message .= "Time: " . date('Y-m-d H:i:s') . "\n";
    
    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: SheWings Foundation <info@shewings.com>'
    );
    
    error_log('Attempting to send test email...');
    error_log('To: ' . $to);
    error_log('Subject: ' . $subject);
    
    $result = wp_mail($to, $subject, $message, $headers);
    
    error_log('Test email result: ' . ($result ? 'Success' : 'Failed'));
    if (!$result) {
        error_log('Last PHP Error: ' . error_get_last()['message']);
    }
    
    return $result;
}

// Add test email button to WordPress admin
function add_test_email_button() {
    add_menu_page(
        'Email Test',
        'Email Test',
        'manage_options',
        'email-test',
        'display_email_test_page',
        'dashicons-email',
        99
    );
}
add_action('admin_menu', 'add_test_email_button');

// Display email test page with more information
function display_email_test_page() {
    ?>
    <div class="wrap">
        <h1>Email Configuration Test</h1>
        <?php
        if (isset($_POST['test_email'])) {
            $result = test_email_configuration();
            if ($result) {
                echo '<div class="notice notice-success"><p>Test email sent successfully! Check your inbox and spam folder.</p></div>';
            } else {
                echo '<div class="notice notice-error"><p>Failed to send test email. Check the debug log for details.</p></div>';
            }
        }
        ?>
        <div class="card">
            <h2>Current Configuration</h2>
            <p><strong>SMTP Host:</strong> smtpout.secureserver.net</p>
            <p><strong>Port:</strong> 80</p>
            <p><strong>Security:</strong> SSL</p>
            <p><strong>From Email:</strong> info@shewings.com</p>
        </div>
        <form method="post" style="margin-top: 20px;">
            <p>Click the button below to send a test email to info@shewings.com</p>
            <input type="submit" name="test_email" class="button button-primary" value="Send Test Email">
        </form>
    </div>
    <?php
}
   