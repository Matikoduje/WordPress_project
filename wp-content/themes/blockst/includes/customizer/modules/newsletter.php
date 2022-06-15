<?php
/**
 * Newsletter
 *
 * @package Blockst
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

if ( ! class_exists( 'Blockst_Core' ) ) {
	return;
}

// Newsletter Popup
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'blockst_settings_newsletter_popup_show',
	'label'       => esc_html__( 'Show newsletter pop-up', 'blockst' ),
	'section'     => 'blockst_settings_newsletter_popup',
	'default'     => false,
) );

// Action after pop-up close
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'radio',
	'settings'    => 'blockst_settings_newsletter_popup_storage',
	'label'       => esc_html__( 'Action after pop-up close', 'blockst' ),
	'section'     => 'blockst_settings_newsletter_popup',
	'default'     => 'session',
	'choices'     => array(
		'session'   => esc_html__( 'Show on every visit (session)', 'blockst' ),
		'cookies' => esc_html__( 'Do not show on every visit (cookies)', 'blockst' ),
	),
	'active_callback' => array(
		array(
			'setting'  => 'blockst_settings_newsletter_popup_show',
			'operator' => '==',
			'value'    => true,
		)
	),
) );

// Cookies age
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'number',
	'settings'    => 'blockst_settings_newsletter_popup_cookies_age',
	'label'       => esc_html__( 'Expiration (days)', 'blockst' ),
	'description' => esc_html__( 'How many days to store cookies', 'blockst' ),
	'section'     => 'blockst_settings_newsletter_popup',
	'default'     => 7,
	'choices'     => array(
		'min'  => 0,
		'max'  => 365,
		'step' => 1,
	),
	'active_callback' => array(
		array(
			'setting'  => 'blockst_settings_newsletter_popup_storage',
			'operator' => '==',
			'value'    => 'cookies',
		)
	),
) );


// Newsletter Popup Image
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'image',
	'settings'    => 'blockst_settings_newsletter_popup_image',
	'label'       => esc_html__( 'Image', 'blockst' ),
	'section'     => 'blockst_settings_newsletter_popup',
	'default'     => [
		'url' => BLOCKST_CORE_URL . 'public/assets/img/blockst_newsletter_popup.jpg',
		'id' => 0,
		'width' => 400,
		'height' => 486
	],
	'choices'     => [
		'save_as' => 'array',
	],
) );

// Title
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'text',
	'settings'    => 'blockst_settings_newsletter_popup_title',
	'label'       => esc_html__( 'Title', 'blockst' ),
	'section'     => 'blockst_settings_newsletter_popup',
	'default'     => esc_html__( 'Join our newsletter and	get 20% discount', 'blockst' ),
) );

// Text
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'text',
	'settings'    => 'blockst_settings_newsletter_popup_text',
	'label'       => esc_html__( 'Text', 'blockst' ),
	'section'     => 'blockst_settings_newsletter_popup',
	'default'     => esc_html__( 'We promise we won\'t write to you often, only for the fun stuff.', 'blockst' ),
) );

// Form
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'text',
	'settings'    => 'blockst_settings_newsletter_popup_form',
	'label'       => esc_html__( 'Form shortcode', 'blockst' ),
	'section'     => 'blockst_settings_newsletter_popup',
	'default'     => '[mc4wp_form id="807"]',
) );