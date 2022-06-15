<?php
/**
 * Customizer General
 *
 * @package Blockst
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


// Preloader
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'blockst_settings_preloader_show',
	'label'       => esc_html__( 'Enable/Disable theme preloader', 'blockst' ),
	'section'     => 'blockst_settings_preloader',
	'default'     => false,
) );

// Back to top
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'blockst_settings_back_to_top_show',
	'label'       => esc_html__( 'Back to top arrow', 'blockst' ),
	'section'     => 'blockst_settings_back_to_top',
	'default'     => true,
) );