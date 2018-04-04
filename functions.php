<?php
/**
 * artcraft functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package artcraft
 */

if ( ! function_exists( 'artcraft_setup' ) ) :
function artcraft_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );
	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'top' => esc_html__( 'top', 'kamnerez' ),//for header menu
		'footer' => esc_html__( 'footer', 'kamnerez' ),//for footer menu
	) );
	// Switch default core markup for search form, comment form, and comments
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'artcraft_setup' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
//function artcraft_widgets_init() {
//	register_sidebar( array(
//		'name'          => esc_html__( 'Sidebar', 'artcraft' ),
//		'id'            => 'artcraft-sidebar',
//		'description'   => esc_html__( 'Add widgets here.', 'artcraft' ),
//		'before_widget' => '<section id="%1$s" class="widget %2$s">',
//		'after_widget'  => '</section>',
//		'before_title'  => '<h2 class="widget-title">',
//		'after_title'   => '</h2>',
//	) );
//}
//add_action( 'widgets_init', 'artcraft_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kamnerez_scripts() {
   /*css*/
	wp_enqueue_style( 'kamnerez-fontsaversome-style', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'kamnerez-libs-style', get_template_directory_uri() . '/assets/css/libs.min.css' );
	wp_enqueue_style( 'kamnerez-main-style', get_template_directory_uri() . '/assets/css/styles.min.css' );
   /*js*/
	wp_enqueue_script( 'kamnerez-vendor-script', get_template_directory_uri() . '/assets/js/vendor.js', [], '', true );
	wp_enqueue_script( 'kamnerez-yandex-map-script', 'https://api-maps.yandex.ru/2.1/?lang=ru_RU', [], '', true  );
	wp_enqueue_script( 'kamnerez-script', get_template_directory_uri() . '/assets/js/script.min.js', [], '', true );
    wp_localize_script( 'kamnerez-script', 'myajax',
        [
            'url' => admin_url( 'admin-ajax.php' ),
            'template' => get_template_directory_uri()
        ]
    );
}
add_action( 'wp_enqueue_scripts', 'kamnerez_scripts' );

/*custom mail functions*/
require get_template_directory() . '/includes/mail-functions.php';

/**
 * Load custom functions
 */
require get_template_directory() . '/includes/custom-functions.php';