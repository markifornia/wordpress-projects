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