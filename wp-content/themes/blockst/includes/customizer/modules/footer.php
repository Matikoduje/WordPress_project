<?php
/**
 * Customizer Footer
 *
 * @package Blockst
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

// Show footer
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'blockst_settings_footer_show',
	'label'       => esc_attr__( 'Show footer', 'blockst' ),
	'section'     => 'blockst_settings_footer',
	'default'     => true,
) );

// Show footer widgets
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'blockst_settings_footer_widgets_show',
	'label'       => esc_attr__( 'Show footer widgets', 'blockst' ),
	'section'     => 'blockst_settings_footer',
	'default'     => true,
	'active_callback' => array(
		array(
			'setting'  => 'blockst_settings_footer_show',
			'operator' => '==',
			'value'    => true,
		)
	),
) );

// Show footer top border
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'blockst_settings_footer_top_border_show',
	'label'       => esc_attr__( 'Show footer top border', 'blockst' ),
	'section'     => 'blockst_settings_footer',
	'default'     => false,
	'active_callback' => array(
		array(
			'setting'  => 'blockst_settings_footer_show',
			'operator' => '==',
			'value'    => true,
		)
	),
) );

// Footer columns
new \Kirki\Field\Radio_Image( array(
	'settings'    => 'blockst_settings_footer_columns',
	'label'       => esc_html__( 'Number of columns', 'blockst' ),
	'section'     => 'blockst_settings_footer',
	'default'     => 'footer-col-50-25-25',
	'choices'     => array(
		'footer-col-1' 				=> get_template_directory_uri() . '/assets/img/customizer/1-col.png',
		'footer-col-2' 				=> get_template_directory_uri() . '/assets/img/customizer/2-col.png',
		'footer-col-3' 				=> get_template_directory_uri() . '/assets/img/customizer/3-col.png',
		'footer-col-4' 				=> get_template_directory_uri() . '/assets/img/customizer/4-col.png',
		'footer-col-5' 				=> get_template_directory_uri() . '/assets/img/customizer/5-col.png',
		'footer-col-50-25-25' => get_template_directory_uri() . '/assets/img/customizer/50-25-25-col.png',
	),
	'active_callback' => array(
		array(
			'setting'  => 'blockst_settings_footer_show',
			'operator' => '==',
			'value'    => true,
		)
	),
) );

// Show footer bottom menu
Kirki::add_field( 'blockst_settings_config', array(
	'type'        => 'toggle',
	'settings'    => 'blockst_settings_footer_bottom_menu_show',
	'label'       => esc_attr__( 'Show bottom footer menu', 'blockst' ),
	'section'     => 'blockst_settings_footer',
	'default'     => true,
	'active_callback' => array(
		array(
			'setting'  => 'blockst_settings_footer_show',
			'operator' => '==',
			'value'    => true,
		)
	),
) );


// Bottom footer text
Kirki::add_field( 'blockst_settings_config', array(
	'type'        			=> 'text',
	'settings'    			=> 'blockst_settings_footer_bottom_text',
	'section'     			=> 'blockst_settings_footer',
	'label'       			=> esc_html__( 'Bottom footer text', 'blockst' ),
	'description' 			=> esc_html__( 'Allowed HTML: a, span, i, em, strong', 'blockst' ),
	'sanitize_callback' => 'wp_kses_post',
	'default'     			=> sprintf( esc_html__( 'Copyright &copy; [current-year] %1$s. All rights reserved — Made by %2$sDeoThemes%3$s' , 'blockst' ), get_bloginfo( 'name' ), '<a href="https://deothemes.com">', '</a>' ),
	'active_callback' 	=> array(
		array(
			'setting'  => 'blockst_settings_footer_show',
			'operator' => '==',
			'value'    => true,
		)
	),
) );