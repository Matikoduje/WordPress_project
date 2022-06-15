<?php

/**
 * Customizer Header
 *
 * @package Blockst
 * @since 1.0.0
 */
if ( !defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}
// Show header
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'toggle',
    'settings' => 'blockst_settings_header_show',
    'label'    => esc_html__( 'Show header', 'blockst' ),
    'section'  => 'blockst_settings_default_header',
    'default'  => true,
) );
// Sticky header
Kirki::add_field( 'blockst_settings_config', array(
    'type'            => 'toggle',
    'settings'        => 'blockst_settings_sticky_header',
    'label'           => esc_html__( 'Sticky header', 'blockst' ),
    'section'         => 'blockst_settings_default_header',
    'default'         => true,
    'active_callback' => array( array(
    'setting'  => 'blockst_settings_header_show',
    'operator' => '==',
    'value'    => true,
) ),
) );
// Header container width
Kirki::add_field( 'blockst_settings_config', array(
    'type'            => 'dimension',
    'settings'        => 'blockst_settings_header_container_width',
    'label'           => esc_html__( 'Header container width', 'blockst' ),
    'description'     => esc_html__( "Example: 1200px or 80%", 'blockst' ),
    'section'         => 'blockst_settings_default_header',
    'default'         => $container_width . 'px',
    'output'          => array( array(
    'element'  => '.blockst-header .container',
    'property' => 'max-width',
) ),
    'active_callback' => array( array(
    'setting'  => 'blockst_settings_header_show',
    'operator' => '==',
    'value'    => true,
) ),
    'transport'       => 'auto',
) );
// Header height
Kirki::add_field( 'blockst_settings_config', array(
    'type'            => 'slider',
    'settings'        => 'blockst_settings_header_height',
    'label'           => esc_attr__( 'Header height', 'blockst' ),
    'description'     => esc_html__( 'Will apply only on big screens', 'blockst' ),
    'section'         => 'blockst_settings_default_header',
    'default'         => 100,
    'choices'         => array(
    'min'  => '40',
    'max'  => '200',
    'step' => '1',
),
    'output'          => array( array(
    'element'     => '.nav',
    'property'    => 'min-height',
    'units'       => 'px',
    'media_query' => $bp_lg_up,
), array(
    'element'     => '.nav__menu > li > a',
    'property'    => 'line-height',
    'units'       => 'px',
    'media_query' => $bp_lg_up,
) ),
    'active_callback' => array( array(
    'setting'  => 'blockst_settings_header_show',
    'operator' => '==',
    'value'    => true,
) ),
    'transport'       => 'auto',
) );
// Header sticky height
Kirki::add_field( 'blockst_settings_config', array(
    'type'            => 'slider',
    'settings'        => 'blockst_settings_header_sticky_height',
    'label'           => esc_attr__( 'Header sticky height', 'blockst' ),
    'description'     => esc_html__( 'Will apply only on big screens', 'blockst' ),
    'section'         => 'blockst_settings_default_header',
    'default'         => 60,
    'choices'         => array(
    'min'  => '40',
    'max'  => '200',
    'step' => '1',
),
    'output'          => array( array(
    'element'     => '.nav--sticky.sticky .nav__flex-parent',
    'property'    => 'height',
    'units'       => 'px',
    'media_query' => $bp_lg_up,
), array(
    'element'     => '.nav--sticky.sticky .nav__menu > li > a',
    'property'    => 'line-height',
    'units'       => 'px',
    'media_query' => $bp_lg_up,
) ),
    'active_callback' => array( array(
    'setting'  => 'blockst_settings_header_show',
    'operator' => '==',
    'value'    => true,
) ),
    'transport'       => 'auto',
) );
// Header mobile height
Kirki::add_field( 'blockst_settings_config', array(
    'type'            => 'slider',
    'settings'        => 'blockst_settings_header_mobile_height',
    'label'           => esc_attr__( 'Header mobile height', 'blockst' ),
    'description'     => esc_html__( 'Will apply only on mobile screens', 'blockst' ),
    'section'         => 'blockst_settings_default_header',
    'default'         => 60,
    'choices'         => array(
    'min'  => '40',
    'max'  => '200',
    'step' => '1',
),
    'output'          => array( array(
    'element'     => '.nav__header',
    'property'    => 'height',
    'units'       => 'px',
    'media_query' => $bp_lg_down,
), array(
    'element'     => '.nav',
    'property'    => 'min-height',
    'units'       => 'px',
    'media_query' => $bp_lg_down,
) ),
    'active_callback' => array( array(
    'setting'  => 'blockst_settings_header_show',
    'operator' => '==',
    'value'    => true,
) ),
    'transport'       => 'auto',
) );
// Logo
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'image',
    'settings' => 'blockst_settings_logo_dark',
    'label'    => esc_html__( 'Upload logo', 'blockst' ),
    'section'  => 'blockst_settings_logo',
    'choices'  => [
    'save_as' => 'array',
],
) );
// Logo width
Kirki::add_field( 'blockst_settings_config', array(
    'type'      => 'slider',
    'settings'  => 'blockst_settings_header_logo_width',
    'label'     => esc_attr__( 'Header logo width', 'blockst' ),
    'section'   => 'blockst_settings_logo',
    'default'   => 127,
    'choices'   => array(
    'min'  => '10',
    'max'  => '300',
    'step' => '1',
),
    'output'    => array( array(
    'element'     => '.nav__header .logo',
    'property'    => 'max-width',
    'units'       => 'px',
    'media_query' => $bp_lg_up,
) ),
    'transport' => 'auto',
) );
// Logo mobile width
Kirki::add_field( 'blockst_settings_config', array(
    'type'      => 'slider',
    'settings'  => 'blockst_settings_header_logo_mobile_width',
    'label'     => esc_attr__( 'Header logo mobile width', 'blockst' ),
    'section'   => 'blockst_settings_logo',
    'default'   => 127,
    'choices'   => array(
    'min'  => '10',
    'max'  => '200',
    'step' => '1',
),
    'output'    => array( array(
    'element'     => '.nav__header .logo',
    'property'    => 'max-width',
    'units'       => 'px',
    'media_query' => $bp_lg_down,
) ),
    'transport' => 'auto',
) );
// Menu items horizontal spacing
Kirki::add_field( 'blockst_settings_config', array(
    'type'            => 'slider',
    'settings'        => 'blockst_settings_header_text_links_horizontal_spacing',
    'label'           => esc_attr__( 'Menu text links horizontal spacing', 'blockst' ),
    'description'     => esc_html__( 'Will apply only on big screens', 'blockst' ),
    'section'         => 'blockst_settings_primary_menu',
    'default'         => 17,
    'choices'         => array(
    'min'  => '0',
    'max'  => '60',
    'step' => '1',
),
    'output'          => array( array(
    'element'     => '.nav__menu > li',
    'property'    => 'padding-left',
    'units'       => 'px',
    'media_query' => $bp_lg_up,
), array(
    'element'     => '.nav__menu > li',
    'property'    => 'padding-right',
    'units'       => 'px',
    'media_query' => $bp_lg_up,
) ),
    'active_callback' => array( array(
    'setting'  => 'blockst_settings_header_show',
    'operator' => '==',
    'value'    => true,
) ),
    'transport'       => 'auto',
) );
// Last Menu Item Title
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'custom',
    'settings' => 'separator-' . $uniqid++,
    'section'  => 'blockst_settings_primary_menu',
    'default'  => '<h3 class="customizer-title">' . esc_attr__( 'Last menu item', 'blockst' ) . '</h3>',
) );

if ( blockst_is_woocommerce_activated() ) {
    // Last Item: Shopping cart
    Kirki::add_field( 'blockst_settings_config', array(
        'type'     => 'checkbox',
        'settings' => 'blockst_settings_header_last_menu_item_shopping_cart',
        'label'    => esc_html__( 'Shopping Cart', 'blockst' ),
        'section'  => 'blockst_settings_primary_menu',
        'default'  => true,
    ) );
    // Last Item: Account
    Kirki::add_field( 'blockst_settings_config', array(
        'type'     => 'checkbox',
        'settings' => 'blockst_settings_header_last_menu_item_account',
        'label'    => esc_html__( 'Account', 'blockst' ),
        'section'  => 'blockst_settings_primary_menu',
        'default'  => true,
    ) );
}

// Last Item: Search
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'checkbox',
    'settings' => 'blockst_settings_header_last_menu_item_search',
    'label'    => esc_html__( 'Search', 'blockst' ),
    'section'  => 'blockst_settings_primary_menu',
    'default'  => true,
) );
// Last Item: HTML
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'checkbox',
    'settings' => 'blockst_settings_header_last_menu_item_html',
    'label'    => esc_html__( 'HTML', 'blockst' ),
    'section'  => 'blockst_settings_primary_menu',
    'default'  => false,
) );
// Last Item: Text / HTML
Kirki::add_field( 'blockst_settings_config', array(
    'type'            => 'code',
    'settings'        => 'blockst_settings_header_last_menu_item_text_html',
    'label'           => esc_html__( 'Text / HTML / Shortcode', 'blockst' ),
    'section'         => 'blockst_settings_primary_menu',
    'choices'         => array(
    'language' => 'html',
),
    'active_callback' => array( array(
    'setting'  => 'blockst_settings_header_last_menu_item_html',
    'operator' => '==',
    'value'    => true,
) ),
) );