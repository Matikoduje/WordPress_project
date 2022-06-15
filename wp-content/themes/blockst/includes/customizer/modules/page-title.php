<?php

/**
 * Customizer Page Title
 *
 * @package Blockst
 * @since 1.0.0
 */
if ( !defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}
// Page title padding
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'dimensions',
    'settings' => 'blockst_settings_page_title_padding',
    'label'    => esc_attr__( 'Page title top/bottom padding', 'blockst' ),
    'section'  => 'blockst_settings_page_title',
    'default'  => [
    'padding-top'    => '100px',
    'padding-bottom' => '100px',
],
    'output'   => array( array(
    'element'     => '.page-title',
    'media_query' => $bp_lg_up,
) ),
) );
// Breadcrumbs title
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'custom',
    'settings' => 'separator-' . $uniqid++,
    'section'  => 'blockst_settings_page_title',
    'default'  => '<h3 class="customizer-title">' . esc_attr__( 'Breadcrumbs', 'blockst' ) . '</h3>',
) );
// Show page breadcrumbs
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'toggle',
    'settings' => 'blockst_settings_breadcrumbs_pages_show',
    'label'    => esc_attr__( 'Show on a regular pages', 'blockst' ),
    'section'  => 'blockst_settings_page_title',
    'default'  => false,
) );
// Show blog breadcrumbs
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'toggle',
    'settings' => 'blockst_settings_breadcrumbs_blog_show',
    'label'    => esc_attr__( 'Show on a blog listing page', 'blockst' ),
    'section'  => 'blockst_settings_page_title',
    'default'  => false,
) );