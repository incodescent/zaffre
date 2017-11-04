<?php
/**
 * zaffre functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package zaffre
 */

if ( ! function_exists( 'zaffre_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function zaffre_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on zaffre, use a find and replace
	 * to change 'zaffre' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'zaffre', get_template_directory() . '/languages' );

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
		'primary' => __( 'Primary Menu', 'zaffre' ),
        'social' => __( 'Social Menu', 'zaffre'),
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
	add_theme_support( 'custom-background', apply_filters( 'zaffre_custom_background_args', array(
		'default-color' => '#d8dadc',
		'default-image' => '',
	) ) );
}
endif;
add_action( 'after_setup_theme', 'zaffre_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function zaffre_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'zaffre_content_width', 640 );
}
add_action( 'after_setup_theme', 'zaffre_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function zaffre_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'zaffre' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'zaffre' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

register_sidebar( array(
    'name' => __( 'Footer 1', 'zaffre' ),
    'id' => 'footer-sidebar-1',
    'description' => __( 'Appears in the footer area', 'zaffre' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

  register_sidebar( array(
    'name' => __( 'Footer 2', 'zaffre' ),
    'id' => 'footer-sidebar-2',
    'description' => __( 'Appears in the footer area', 'zaffre' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

  register_sidebar( array(
    'name' => __( 'Footer 3', 'zaffre' ),
    'id' => 'footer-sidebar-3',
    'description' => __( 'Appears in the footer area', 'zaffre' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

  register_sidebar( array(
    'name' => __( 'Footer 4', 'zaffre' ),
    'id' => 'footer-sidebar-4',
    'description' => __( 'Appears in the footer area', 'zaffre' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

  	register_sidebar( array(
		'name' => __( 'Footer Disclaimer', 'zaffre' ),
		'id' => 'footer-disclaimer',
		'description' => __( 'Appears in the footer area above the bottome line. Stretching across the bottom, it is intended for copyright, terms, etc. Use the text widget only, and leave the title blank.', 'zaffre' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget' => '</aside>',
		'before_title' => '',
		'after_title' => '',
) );

}
add_action( 'widgets_init', 'zaffre_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function zaffre_scripts() {

	wp_enqueue_script( 'zaffre-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'zaffre-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script('main', get_template_directory_uri() .'/js/js.js', array('jquery'), '20151215', true);

  	wp_enqueue_script('slick', get_template_directory_uri() .'/js/slick.js', array('jquery'), '20151215', true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'zaffre_scripts' );

function style_scripts() {
  wp_enqueue_style ('slick', get_template_directory_uri() .'/slick.css');  
  wp_enqueue_style( 'zaffre-style', get_stylesheet_uri() );
  wp_enqueue_style( 'zaffre-style-content-sidebar', get_template_directory_uri() . '/layouts/sidebar-content.css');
  wp_enqueue_style ('font-awesome', get_template_directory_uri() .'/font-awesome.css');
}
add_action('wp_enqueue_scripts', 'style_scripts');

/**
 * Registers an editor stylesheet for the theme.
 */
function add_editor_styles() {
    add_editor_style( 'editor-style.css' );
}
add_action( 'admin_init', 'add_editor_styles' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


     function zaffre_theme_customizer( $wp_customize ) {
    $wp_customize->add_section( 'zaffre_logo_section' , array(
    'title'       => __( 'Logo', 'zaffre' ),
    'priority'    => 30,
    'description' => __('Upload a logo to the Site Title', 'zaffre' ),
) );
$wp_customize->add_setting( 'zaffre_logo', array(
    'sanitize_callback'        => 'esc_url_raw',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'zaffre_logo', array(
    'label'    => __( 'Logo', 'zaffre' ),
    'section'  => 'zaffre_logo_section',
    'settings' => 'zaffre_logo',
) ) );
}
add_action('customize_register', 'zaffre_theme_customizer');

function zaffre_slider_register($wp_customize) {  

$wp_customize->add_section( 'slides', array(
    'title'          => 'Slides',
    'priority'       => 25,
    'description'    => 'This theme requires slider images be 860 pixels wide and 250 pixels high',
) );

$wp_customize->add_setting( 'first_slide', array(
  'sanitize_callback'        => 'esc_url_raw',
    'default'        => get_template_directory_uri().'/images/blank.png',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'first_slide', array(
    'label'   => 'First Slide',
    'section' => 'slides',
    'settings'   => 'first_slide',
) ) );

$wp_customize->add_setting( 'second_slide', array(
  'sanitize_callback'        => 'esc_url_raw',
    'default'        => '',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'second_slide', array(
    'label'   => 'Second Slide',
    'section' => 'slides',
    'settings'   => 'second_slide',
) ) );

$wp_customize->add_setting( 'third_slide', array(
  'sanitize_callback'        => 'esc_url_raw',
    'default'        => '',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'third_slide', array(
    'label'   => 'Third Slide',
    'section' => 'slides',
    'settings'   => 'third_slide',
) ) );

$wp_customize->add_setting( 'fourth_slide', array(
  'sanitize_callback'        => 'esc_url_raw',
    'default'        => '',
) );
$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'fourth_slide', array(
    'label'   => 'Fourth Slide',
    'section' => 'slides',
    'settings'   => 'fourth_slide',
) ) );

$wp_customize->add_setting( 'fifth_slide', array(
  'sanitize_callback'        => 'esc_url_raw',
    'default'        => '',
) );

$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'fifth_slide', array(
    'label'   => 'Fifth Slide',
    'section' => 'slides',
    'settings'   => 'fifth_slide',
) ) );
}
add_action( 'customize_register', 'zaffre_slider_register' );


 if ( ! function_exists( 'zaffre_paging_nav' ) ) :
/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @global WP_Query   $wp_query   WordPress Query object.
 * @global WP_Rewrite $wp_rewrite WordPress Rewrite object.
 */

endif;

