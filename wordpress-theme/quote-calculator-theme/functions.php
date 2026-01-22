<?php
/**
 * Quote Calculator Theme Functions
 *
 * @package Quote_Calculator_Theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme Setup
 */
function quote_calculator_theme_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Let WordPress manage the document title
    add_theme_support( 'title-tag' );

    // Enable support for Post Thumbnails
    add_theme_support( 'post-thumbnails' );

    // Register navigation menus
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'quote-calculator-theme' ),
    ) );

    // Switch default core markup to output valid HTML5
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Add theme support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
}
add_action( 'after_setup_theme', 'quote_calculator_theme_setup' );

/**
 * Enqueue scripts and styles
 */
function quote_calculator_theme_scripts() {
    // Enqueue Tailwind CSS from CDN
    wp_enqueue_style(
        'tailwindcss',
        'https://cdn.tailwindcss.com',
        array(),
        null
    );

    // Enqueue theme stylesheet
    wp_enqueue_style(
        'quote-calculator-theme-style',
        get_stylesheet_uri(),
        array( 'tailwindcss' ),
        wp_get_theme()->get( 'Version' )
    );

    // Enqueue calculator JavaScript (only on pages using it)
    wp_enqueue_script(
        'quote-calculator-script',
        get_template_directory_uri() . '/js/calculator.js',
        array(),
        wp_get_theme()->get( 'Version' ),
        true
    );

    // Enqueue comment reply script
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
add_action( 'wp_enqueue_scripts', 'quote_calculator_theme_scripts' );

/**
 * Register widget areas
 */
function quote_calculator_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'quote-calculator-theme' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'quote-calculator-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s mb-8">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title text-2xl font-bold mb-4">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer', 'quote-calculator-theme' ),
        'id'            => 'footer-1',
        'description'   => __( 'Add widgets here to appear in your footer.', 'quote-calculator-theme' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title text-xl font-bold mb-4">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'quote_calculator_theme_widgets_init' );

/**
 * Quote Calculator Shortcode
 * Usage: [quote_calculator]
 */
function quote_calculator_shortcode( $atts ) {
    // Get the calculator template
    ob_start();
    get_template_part( 'templates/calculator' );
    return ob_get_clean();
}
add_shortcode( 'quote_calculator', 'quote_calculator_shortcode' );

/**
 * Custom excerpt length
 */
function quote_calculator_theme_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'quote_calculator_theme_excerpt_length' );

/**
 * Custom excerpt more text
 */
function quote_calculator_theme_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'quote_calculator_theme_excerpt_more' );
