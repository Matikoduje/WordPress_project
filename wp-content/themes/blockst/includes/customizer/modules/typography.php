<?php
/**
 * Customizer Typography
 *
 * @package Blockst
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
 * Add custom choice
 */
if ( ! function_exists( 'blockst_add_custom_choice' ) ) {
	function blockst_add_custom_choice() {
		return array(
			'fonts' => apply_filters( 'blockst_kirki_font_choices', array() ),
			'variant' => array( 'regular', 'italic' )
		);
	}
}


// Base font
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'blockst_settings_base_font',
	'label'       => esc_html__( 'Base font', 'blockst' ),
	'section'     => 'blockst_settings_typography',
	'default'     => array(
		'font-family'    => $body_font,
		'font-size'      => '18px',
		'line-height'    => '1.5',
		'letter-spacing' => 'normal',
		'text-transform' => 'none',
		'variant' 			 => 'regular',
	),
	'choices'  => blockst_add_custom_choice(),
	'output' => array(
		array(
			'element' => $selectors['base_font'],
		),
		array(
			'element' => '.edit-post-visual-editor .editor-styles-wrapper',
			'context' => array( 'editor' ),
		)
	),
	'transport' => 'auto',
));


/*-------------------------------------------------------*/
/* Headings font
/*-------------------------------------------------------*/

// Headings
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'blockst_settings_headings_font',
	'label'       => esc_html__( 'Headings font', 'blockst' ),
	'section'     => 'blockst_settings_typography',
	'default'     => array(
		'font-family'    => $heading_font,
		'variant' 	 		 => '600',
		'line-height' 	 => '1.3',
		'letter-spacing' => 'normal',
		'text-transform' => 'none'
	),
	'choices'  => blockst_add_custom_choice(),
	'output' => array(
		array(
			'element' => $selectors['headings'],
		),
		array(
			'element' => isset( $selectors['shop_headings_font'] ) ? $selectors['shop_headings_font'] : null,
		),
	),
	'transport' => 'auto',
));


// H1
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'blockst_settings_headings_h1',
	'label'       => esc_html__( 'H1 Headings', 'blockst' ),
	'section'     => 'blockst_settings_typography',
	'default'     => array(
		'font-size'   	 => '3.5rem',
		'text-transform' => 'none'
	),
	'choices'  => blockst_add_custom_choice(),
	'output' => array(
		array(
			'element' => $selectors['h1'],
		),
	),
	'transport' => 'auto',
));

// H2
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'blockst_settings_headings_h2',
	'label'       => esc_html__( 'H2 Headings', 'blockst' ),
	'section'     => 'blockst_settings_typography',
	'default'     => array(
		'font-size'   	 => '32px',
		'text-transform' => 'none'
	),
	'choices'  => blockst_add_custom_choice(),
	'output' => array(
		array(
			'element' => $selectors['h2'],
		),
	),
	'transport' => 'auto',
));

// H3
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'blockst_settings_headings_h3',
	'label'       => esc_html__( 'H3 Headings', 'blockst' ),
	'section'     => 'blockst_settings_typography',
	'default'     => array(
		'font-size'   	 => '28px',
		'text-transform' => 'none'
	),
	'choices'  => blockst_add_custom_choice(),
	'output' => array(
		array(
			'element' => $selectors['h3'],
		),
	),
	'transport' => 'auto',
));

// H4
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'blockst_settings_headings_h4',
	'label'       => esc_html__( 'H4 Headings', 'blockst' ),
	'section'     => 'blockst_settings_typography',
	'default'     => array(
		'font-size'   	 => '24px',
		'text-transform' => 'none'
	),
	'choices'  => blockst_add_custom_choice(),
	'output' => array(
		array(
			'element' => $selectors['h4'],
		),
	),
	'transport' => 'auto',
));

// H5
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'blockst_settings_headings_h5',
	'label'       => esc_html__( 'H5 Headings', 'blockst' ),
	'section'     => 'blockst_settings_typography',
	'default'     => array(
		'font-size'   	 => '20px',
		'text-transform' => 'none'
	),
	'choices'  => blockst_add_custom_choice(),
	'output' => array(
		array(
			'element' => $selectors['h5'],
		),
	),
	'transport' => 'auto',
));

// H6
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'blockst_settings_headings_h6',
	'label'       => esc_html__( 'H6 Headings', 'blockst' ),
	'section'     => 'blockst_settings_typography',
	'default'     => array(
		'font-size'   	 => '16px',
		'text-transform' => 'none'
	),
	'choices'  => blockst_add_custom_choice(),
	'output' => array(
		array(
			'element' => 'h6',
		),
	),
	'transport' => 'auto',
));


/*-------------------------------------------------------*/
/* Forms
/*-------------------------------------------------------*/

// Buttons typography
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'blockst_settings_buttons_typography',
	'label'       => esc_html__( 'Buttons', 'blockst' ),
	'section'     => 'blockst_settings_typography',
	'default'     => array(
		'font-family'    => $heading_font,
		'variant'		 		 => '700',
		'letter-spacing' => 'normal',
		'text-transform' => 'none'
	),
	'choices'  => blockst_add_custom_choice(),
	'output' => array(
		array(
			'element' => $selectors['buttons'],
		),
		array(
			'element' => '.wp-block-button .wp-block-button__link',
			'context' => array( 'editor' ),			
		)
	),
	'transport' => 'auto',
));


/*-------------------------------------------------------*/
/* Header
/*-------------------------------------------------------*/

// Menu Links typography
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'blockst_settings_menu_links_typography',
	'label'       => esc_html__( 'Menu links', 'blockst' ),
	'section'     => 'blockst_settings_typography',
	'default'     => array(
		'font-family'    => $heading_font,
		'variant' 	 		 => '600',
		'font-size'			 => '16px',
		'letter-spacing' => 'normal',
		'text-transform' => 'none'
	),
	'choices'  => blockst_add_custom_choice(),
	'output' => array(
		array(
			'element' => '.nav__menu > li > a',
		),
	),
	'transport' => 'auto',
));

// Dropdown menu Links typography
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'typography',
	'settings'    => 'blockst_settings_dropdown_menu_links_typography',
	'label'       => esc_html__( 'Dropdown menu links', 'blockst' ),
	'section'     => 'blockst_settings_typography',
	'default'     => array(
		'font-family'    => $body_font,
		'variant' 			 => '400',
		'font-size'			 => '16px',
		'letter-spacing' => 'normal',
		'text-transform' => 'none'
	),
	'choices'  => blockst_add_custom_choice(),
	'output' => array(
		array(
			'element' => '.nav__dropdown-menu li a',
		),
	),
	'transport' => 'auto',
));