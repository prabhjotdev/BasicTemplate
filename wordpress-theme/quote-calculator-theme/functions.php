<?php
/**
 * Quote Calculator Theme Functions
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Theme Setup
 */
function quote_calculator_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'quote_calculator_theme_setup' );

/**
 * Enqueue scripts and styles
 */
function quote_calculator_theme_scripts() {
    // Enqueue Tailwind CSS
    wp_enqueue_style( 'tailwindcss', 'https://cdn.tailwindcss.com', array(), null );

    // Enqueue theme stylesheet
    wp_enqueue_style( 'quote-calculator-style', get_stylesheet_uri(), array(), '1.0.0' );

    // Enqueue calculator JavaScript
    wp_enqueue_script( 'quote-calculator-js', get_template_directory_uri() . '/js/calculator.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'quote_calculator_theme_scripts' );

/**
 * Quote Calculator Shortcode
 * Usage: [quote_calculator]
 */
function quote_calculator_shortcode() {
    ob_start();
    get_template_part( 'templates/calculator' );
    return ob_get_clean();
}
add_shortcode( 'quote_calculator', 'quote_calculator_shortcode' );
