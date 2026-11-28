<?php
/**
 * Embark Theme functions.
 */

function embark_register_pattern_categories() {
    register_block_pattern_category(
        'embark-sections',
        array(
            'label' => __( 'Embark Sections', 'embark-theme' )
        )
    );
}

add_action( 'init', 'embark_register_pattern_categories' );

/**
 * Register custom block styles.
 */
function embark_register_block_styles() {
    register_block_style(
        'core/quote',
        array(
            'name'  => 'embark-highlight',
            'label' => __( 'Embark Highlight', 'embark-theme' )
        )
    );
}

add_action( 'init', 'embark_register_block_styles' );

/**
 * Load custom block styles.
 */
function embark_enqueue_block_styles() {
    wp_enqueue_style(
        'embark-block-styles',
        get_theme_file_uri( 'assets/css/block-styles.css' ),
        array(),
        filemtime( get_theme_file_path( 'assets/css/block-styles.css' ) )
    );
}

add_action( 'enqueue_block_assets', 'embark_enqueue_block_styles' );