<?php
/**
 * FI Technologies Theme Functions
 */

// Theme setup
function fi_technologies_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'fi-technologies'),
        'mobile' => __('Mobile Menu', 'fi-technologies'),
    ));
}
add_action('after_setup_theme', 'fi_technologies_setup');

// Enqueue styles and scripts
function fi_technologies_scripts() {
    // Main stylesheet
    wp_enqueue_style('fi-technologies-styles', get_template_directory_uri() . '/assets/css/styles.css', array(), '1.0.0');

    // JavaScript files
    wp_enqueue_script('fi-technologies-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
    wp_enqueue_script('fi-technologies-form', get_template_directory_uri() . '/assets/js/form.js', array(), '1.0.0', true);
    wp_enqueue_script('fi-technologies-ui', get_template_directory_uri() . '/assets/js/ui.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'fi_technologies_scripts');

// Remove WordPress admin bar margin
function fi_technologies_remove_admin_bar_margin() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'fi_technologies_remove_admin_bar_margin');

// Add body classes for page identification
function fi_technologies_body_classes($classes) {
    if (is_page()) {
        $classes[] = 'page-' . sanitize_html_class(get_post_field('post_name'));
    }
    return $classes;
}
add_filter('body_class', 'fi_technologies_body_classes');

// Disable WordPress emoji scripts
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// Custom excerpt length
function fi_technologies_excerpt_length($length) {
    return 20;
}
add_filter('excerpt_length', 'fi_technologies_excerpt_length');

// Contact form shortcode (simple version - expand with Contact Form 7 later)
function fi_technologies_contact_form_shortcode() {
    ob_start();
    include get_template_directory() . '/template-parts/contact-form.php';
    return ob_get_clean();
}
add_shortcode('fi_contact_form', 'fi_technologies_contact_form_shortcode');

// Quote modal shortcode
function fi_technologies_quote_modal_shortcode() {
    ob_start();
    include get_template_directory() . '/template-parts/quote-modal.php';
    return ob_get_clean();
}
add_shortcode('fi_quote_modal', 'fi_technologies_quote_modal_shortcode');
