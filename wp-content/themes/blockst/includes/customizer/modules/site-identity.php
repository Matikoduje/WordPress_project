<?php
/**
 * Customizer Site Identity
 *
 * @package Blockst
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'custom',
	'settings'    => 'separator-' . $uniqid++,
	'section'     => 'title_tagline',
	'default'     => '<h3 class="customizer-title">' . esc_attr__( 'Site Logo', 'blockst' ) . '</h3>',
) );

// Logo Image Upload
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'image',
	'settings'    => 'blockst_settings_logo_dark',
	'label'       => esc_attr__( 'Upload logo', 'blockst' ),
	'section'     => 'title_tagline',
) );	

// Logo Retina Image Upload
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'image',
	'settings'    => 'blockst_settings_logo_dark_retina',
	'label'       => esc_attr__( 'Upload retina logo', 'blockst' ),
	'description' => esc_html__( 'Logo 2x bigger size', 'blockst' ),
	'section'     => 'title_tagline',
) );