<?php

/**
 * Twenty Nineteen functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

/**
 * Twenty Nineteen only works in WordPress 4.7 or later.
 */
if (version_compare($GLOBALS['wp_version'], '4.7', '<')) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if (!function_exists('AirbnbWebsite_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function AirbnbWebsite_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Nineteen, use a find and replace
		 * to change 'twentynineteen' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('AirbnbWebsite', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(1568, 9999);

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'menu-1' => __('Primary', 'AirbnbWebsite'),
				'footer' => __('Footer Menu', 'AirbnbWebsite'),
				'social' => __('Social Links Menu', 'AirbnbWebsite'),
			)
		);

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

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 190,
				'width'       => 190,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for Block Styles.
		add_theme_support('wp-block-styles');

		// Add support for full and wide align images.
		add_theme_support('align-wide');

		// Add support for editor styles.
		add_theme_support('editor-styles');

		// Enqueue editor styles.
		add_editor_style('style-editor.css');

		// Add custom editor font sizes.


		// Editor color palette.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => 'default' === get_theme_mod('primary_color') ? __('Blue', 'AirbnbWebsite') : null,
					'slug'  => 'primary',
					'color' => twentynineteen_hsl_hex('default' === get_theme_mod('primary_color') ? 199 : get_theme_mod('primary_color_hue', 199), 100, 33),
				),
				array(
					'name'  => 'default' === get_theme_mod('primary_color') ? __('Dark Blue', 'AirbnbWebsite') : null,
					'slug'  => 'secondary',
					'color' => twentynineteen_hsl_hex('default' === get_theme_mod('primary_color') ? 199 : get_theme_mod('primary_color_hue', 199), 100, 23),
				),
				array(
					'name'  => __('Dark Gray', 'AirbnbWebsite'),
					'slug'  => 'dark-gray',
					'color' => '#111',
				),
				array(
					'name'  => __('Light Gray', 'AirbnbWebsite'),
					'slug'  => 'light-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __('White', 'AirbnbWebsite'),
					'slug'  => 'white',
					'color' => '#FFF',
				),
			)
		);

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

		// Add support for custom line height.
		add_theme_support('custom-line-height');
	}
    endif;
add_action('after_setup_theme', 'AirbnbWebsite_setup');



/**
 * Common theme functions.
 */
require get_template_directory() . '/inc/helper-functions.php';

/**
 * SVG Icons related functions.
 */
require get_template_directory() . '/inc/icon-functions.php';

/**
 * Enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom template tags for the theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Block Patterns.
 */


require get_template_directory() . '/inc/block-patterns.php';

// require get_template_directory() . '/archive-news.php';

add_filter('ot_show_pages', '__return_false');
add_filter('ot_show_new_layout', '__return_false');
add_filter('ot_theme_mode', '__return_true');
include_once('inc/Theme-control/ot-loader.php');
include_once('inc/Theme-control/assets/theme-mode/theme-options.php');
// include_once('inc/custom_post_type_news.php');

include_once('inc/custom_post_type_header.php');
include_once('inc/custom_post_type_footer.php');

include_once('inc/custom_post_type_news.php');
add_action('wp_footer','contact_form_events');


function my_login_logo_one()
{
?>
	<style type="text/css">
		body.login div#login h1 a {
			background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/logos/main_logo.svg');
			padding-bottom: 22px;
			margin-bottom: 0px;
			background-size: 130px;
			width: 100%;
			height: 100%;

		}
	</style>
<?php
}
add_action('login_enqueue_scripts', 'my_login_logo_one');
//to change the dashboard
function wpb_custom_logo()
{
	echo '
	<style type="text/css">
	
	#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
		background-image: url('.get_template_directory_uri().'/assets/images/logos/main_logo.svg) !important;
		background-position: left;
		background-size: 65px;
		background-repeat: no-repeat;
		color: rgba(0, 0, 0, 0);
		
	}
	#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
	background-position: 0 0;
	}
	</style>
	';
}

//hook into the administrative header output
add_action('wp_before_admin_bar_render', 'wpb_custom_logo');

function my_login_stylesheet()
{
	wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/assets/css/style-login.css');
}
add_action('login_enqueue_scripts', 'my_login_stylesheet');

add_action('wp_footer','contact_form_events');
function contact_form_events(){?>
	

	<?php
}
?>








