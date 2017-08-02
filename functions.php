<?php
/**
 * urology functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package urology
 */

if ( ! function_exists( 'urology_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function urology_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on urology, use a find and replace
	 * to change 'urology' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'urology', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	add_theme_support( ‘custom-header’ );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'urology' ),
	) );

	register_nav_menus( array(
  	 'primary' => __( 'Primary Menu', 'underscores' ),
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

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'urology_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'urology_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function urology_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'urology_content_width', 640 );
}
add_action( 'after_setup_theme', 'urology_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function urology_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'urology' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'urology' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'urology_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function urology_scripts() {
	wp_enqueue_style( 'urology-style', get_stylesheet_uri() );

	wp_enqueue_script( 'urology-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'urology-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_style('bootstrap-css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');

	wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.1.1.min.js');

	wp_enqueue_script('bootstrap-js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');

	wp_enqueue_style('font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

 	wp_enqueue_script( 'slickjs-init', get_stylesheet_directory_uri(). '/js/slick-init.js', array( 'slickjs' ), '1.6.0', true );

	wp_enqueue_script( 'slickjs', get_stylesheet_directory_uri() . '/js/slick.min.js', array( 'jquery' ), '1.6.0', true );


	wp_enqueue_style ('css-animate', 'http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css');

	wp_enqueue_style ('css-animate-ajax', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'); 

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'urology_scripts' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function urology_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'urology_pingback_header' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Additional features to allow styling of the templates.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * navigation bootstrap
 */
require get_template_directory() . '/inc/wp_bootstrap_navwalker.php';

/* My function */
function remove_more_link_scroll( $link ) {
$link = preg_replace( '|#more-[0-9]+|', '', $link );
return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );
