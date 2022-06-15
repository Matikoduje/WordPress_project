<?php

/**
 * Customizer Colors
 *
 * @package Blockst
 * @since 1.0.0
 */
if ( !defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}
/*-------------------------------------------------------*/
/* General Colors
/*-------------------------------------------------------*/
// Primary color
new \Kirki\Field\Color( array(
    'settings'  => 'blockst_settings_primary_color',
    'label'     => esc_html__( 'Primary', 'blockst' ),
    'section'   => 'blockst_settings_general_colors',
    'default'   => $primary_color,
    'output'    => array( array(
    'element'  => 'body, :root',
    'property' => '--wp--preset--color--primary',
) ),
    'transport' => 'auto',
) );
// Headings colors
new \Kirki\Field\Color( array(
    'settings'  => 'blockst_settings_headings_color',
    'label'     => esc_html__( 'Headings', 'blockst' ),
    'section'   => 'blockst_settings_general_colors',
    'default'   => $secondary_color,
    'output'    => array( array(
    'element'  => 'body, :root',
    'property' => '--wp--preset--color--secondary',
) ),
    'transport' => 'auto',
) );
// Text color
new \Kirki\Field\Color( array(
    'settings'  => 'blockst_settings_text_color',
    'label'     => esc_html__( 'Text', 'blockst' ),
    'section'   => 'blockst_settings_general_colors',
    'default'   => $tertiary_color,
    'output'    => array( array(
    'element'  => 'body, :root',
    'property' => '--wp--preset--color--tertiary',
) ),
    'transport' => 'auto',
) );
// Background light
new \Kirki\Field\Color( array(
    'settings'  => 'blockst_settings_background_light_color',
    'label'     => esc_html__( 'Background light', 'blockst' ),
    'section'   => 'blockst_settings_general_colors',
    'default'   => $bg_light,
    'output'    => array( array(
    'element'  => 'body, :root',
    'property' => '--wp--preset--color--quaternary',
) ),
    'transport' => 'auto',
) );
// Borders color
new \Kirki\Field\Color( array(
    'type'      => 'color',
    'settings'  => 'blockst_settings_borders_color',
    'label'     => esc_html__( 'Borders', 'blockst' ),
    'section'   => 'blockst_settings_general_colors',
    'default'   => $border_color,
    'output'    => array( array(
    'element'     => '.nav__menu li a',
    'property'    => 'border-bottom-color',
    'media_query' => $bp_lg_down,
) ),
    'transport' => 'auto',
) );
// Buttons hover background color
new \Kirki\Field\Color( array(
    'type'      => 'color',
    'settings'  => 'blockst_settings_buttons_hover_background_color',
    'label'     => esc_html__( 'Buttons hover background', 'blockst' ),
    'section'   => 'blockst_settings_general_colors',
    'default'   => $secondary_color,
    'output'    => array( array(
    'element'  => '
				.button:active,
				.button:focus,
				.button:hover,
				.wp-block-button__link:hover,
				.is-style-outline > .wp-block-button__link:not(.has-background):hover,
				.wp-block-button__link.is-style-outline:not(.has-background) button[type=submit]:hover,
				button[type=submit]:focus,
				button[type=submit]:hover,
				input[type=submit]:active,
				input[type=submit]:focus,
				input[type=submit]:hover',
    'property' => 'background-color',
) ),
    'transport' => 'auto',
) );
// Page background color
new \Kirki\Field\Color( array(
    'type'        => 'color',
    'settings'    => 'blockst_settings_page_background_color',
    'label'       => esc_html__( 'Page background', 'blockst' ),
    'description' => esc_html__( 'Applies on a blog, archive and search results pages', 'blockst' ),
    'section'     => 'blockst_settings_general_colors',
    'default'     => '#ffffff',
    'output'      => array( array(
    'element'  => '.blog-section, .archive-section, .search-results-section',
    'property' => 'background-color',
) ),
    'transport'   => 'auto',
) );
blockst_pro_customizer_options( 'blockst_settings_general_colors', wp_unique_id() );