<?php
/**
 * Customizer Page 404
 *
 * @package Blockst
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

// Title
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'text',
	'settings'    => 'blockst_settings_page_404_title',
	'label'       => esc_attr__( 'Page 404 title', 'blockst' ),
	'section'     => 'blockst_settings_page_404',
	'default'     => esc_html__( 'Page not found', 'blockst' ),
) );

// Description text
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'text',
	'settings'    => 'blockst_settings_page_404_description',
	'label'       => esc_attr__( 'Page 404 description text', 'blockst' ),
	'section'     => 'blockst_settings_page_404',
	'default'     => esc_html__( 'The page you were looking for could not be found.', 'blockst' ),
) );

// Button text
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'text',
	'settings'    => 'blockst_settings_page_404_button_text',
	'label'       => esc_attr__( 'Page 404 button text', 'blockst' ),
	'section'     => 'blockst_settings_page_404',
	'default'     => esc_html__( 'Back to Home', 'blockst' ),
) );