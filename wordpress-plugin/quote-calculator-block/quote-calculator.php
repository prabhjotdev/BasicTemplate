<?php
/**
 * Plugin Name:       Quote Calculator Block
 * Description:       A Gutenberg block for displaying an instant security system quote calculator.
 * Version:           1.0.0
 * Requires at least: 5.8
 * Requires PHP:      7.2
 * Author:            Your Name
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       quote-calculator-block
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register the block
 */
function quote_calculator_block_init() {
    // Register the block by passing the location of block.json.
    register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'quote_calculator_block_init' );

/**
 * Enqueue Tailwind CSS for the block
 */
function quote_calculator_enqueue_tailwind() {
    // Only load on pages that have the block
    if ( has_block( 'quote-calculator/calculator-block' ) ) {
        wp_enqueue_script(
            'tailwindcss',
            'https://cdn.tailwindcss.com',
            array(),
            null,
            false
        );
    }
}
add_action( 'wp_enqueue_scripts', 'quote_calculator_enqueue_tailwind' );
add_action( 'admin_enqueue_scripts', 'quote_calculator_enqueue_tailwind' );
