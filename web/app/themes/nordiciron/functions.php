<?php
/**
 * nordiciron functions and definitions.
 *
 * @link https://codex.wordpress.org/Functions_File_Explained
 *
 * @package nordiciron
 */

function category_shortcode() {
	$result = '';
	$categories = get_categories( null );
	foreach ($categories as $key => $category) {
		//if( $category->name == 'CadBank' ) continue;
		$result .= "<button style='margin-bottom:10px;' onclick='document.location=\"/produkter/" . $category->slug . "\";'>" . $category->name . "</button>&nbsp;";
	}	
	return $result;
}
add_shortcode( 'produkter', 'category_shortcode' );

add_filter('widget_text', 'do_shortcode');

function get_post_excerpt( $post_or_post_id=null, $length = 100 )
{

    $post   = null;
    $result = "";

    if( !$post_or_post_id ) $post_or_post_id = get_the_ID();

    if (is_object( $post_or_post_id )) {
        $post = $post_or_post_id;
    } else if (is_numeric( $post_or_post_id )) {
        $post = get_post( $post_or_post_id );
    } else {
        return ''; //throw new Exception( '### Error in VcModule/get_post_excerpt, no post nor post_id given! ###' );
    }

    $excerpt = html_entity_decode( $post->post_excerpt );
    if (empty( $excerpt )) {
        $excerpt = html_entity_decode( strip_tags( $post->post_content ) );
    }

    if (strlen( $excerpt ) > $length) {

        $line=$excerpt;
        if (preg_match('/^.{1,' . $length . '}\b/s', $excerpt, $match))
        {
            $line=$match[0];
        }

        $excerpt = $line . '... Läs mer!';
    }
    return wp_kses_post( $excerpt );
}




if ( ! function_exists( 'nordiciron_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function nordiciron_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on nordiciron, use a find and replace
	 * to change 'nordiciron' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'nordiciron', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'nordiciron' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'nordiciron_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // nordiciron_setup
add_action( 'after_setup_theme', 'nordiciron_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function nordiciron_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'nordiciron_content_width', 640 );
}
add_action( 'after_setup_theme', 'nordiciron_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function nordiciron_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'nordiciron' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'nordiciron' ),
		'id'            => 'footer-1',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'nordiciron' ),
		'id'            => 'footer-2',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 3', 'nordiciron' ),
		'id'            => 'footer-3',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer 4', 'nordiciron' ),
		'id'            => 'footer-4',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="footer-widget %2$s ">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'nordiciron_widgets_init' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/scripts.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * ACF Settings
 */
require get_template_directory() . '/inc/comments-callback.php';
