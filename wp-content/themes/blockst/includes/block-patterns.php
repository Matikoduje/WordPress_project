<?php

/**
 * Blockst: Block Patterns
 *
 * @since 1.0
 */
if ( !function_exists( 'blockst_register_block_patterns' ) ) {
    function blockst_register_block_patterns()
    {
        
        if ( function_exists( 'register_block_pattern_category' ) ) {
            register_block_pattern_category( 'blockst-sections', array(
                'label' => __( 'Blockst Sections', 'blockst' ),
            ) );
            register_block_pattern_category( 'blockst-pages', array(
                'label' => __( 'Blockst Pages', 'blockst' ),
            ) );
        }
        
        
        if ( function_exists( 'register_block_pattern' ) ) {
            $block_patterns = array(
                'section-hero-cover',
                'section-intro',
                'section-service-boxes',
                'section-service-boxes-full',
                'section-cta',
                'section-testimonials-columns',
                'section-testimonial',
                'section-partner-logos',
                'section-process',
                'section-pricing-tables',
                'section-team',
                'section-page-title',
                'section-info-boxes',
                'section-contact-form',
                'page-home-business',
                'page-about',
                'page-services',
                'page-contact'
            );
            foreach ( $block_patterns as $block_pattern ) {
                register_block_pattern( 'blockst/' . $block_pattern, require __DIR__ . '/patterns/' . $block_pattern . '.php' );
            }
        }
    
    }

}
add_action( 'init', 'blockst_register_block_patterns', 9 );