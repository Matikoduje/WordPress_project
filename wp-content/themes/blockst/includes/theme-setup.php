<?php

/**
 * Theme setup.
 *
 * @package Blockst
 */
if ( !defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}
if ( !function_exists( 'blockst_setup' ) ) {
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function blockst_setup()
    {
        load_theme_textdomain( 'blockst', BLOCKST_DIR . '/languages' );
        // Enable theme support
        add_theme_support( 'post-thumbnails' );
        add_theme_support( 'title-tag' );
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption'
        ) );
        add_theme_support( 'post-formats', array( 'video', 'audio' ) );
        add_theme_support( 'automatic-feed-links' );
        add_theme_support( 'custom-background', apply_filters( 'blockst_custom_background_args', array(
            'default-color' => '#ffffff',
            'default-image' => '',
        ) ) );
        // WooCommerce
        
        if ( blockst_is_woocommerce_activated() ) {
            add_theme_support( 'woocommerce', array(
                'thumbnail_image_width'         => 270,
                'gallery_thumbnail_image_width' => 68,
                'single_image_width'            => 554,
                'product_grid'                  => array(
                'default_columns' => 4,
                'default_rows'    => 2,
            ),
            ) );
            add_theme_support( 'wc-product-gallery-zoom' );
            add_theme_support( 'wc-product-gallery-lightbox' );
            add_theme_support( 'wc-product-gallery-slider' );
        }
        
        // Gutenberg
        add_theme_support( 'align-wide' );
        add_theme_support( 'responsive-embeds' );
        add_theme_support( 'editor-styles' );
        add_editor_style();
        add_theme_support( 'custom-spacing' );
        add_theme_support( 'editor-color-palette', array(
            array(
            'name'  => esc_html__( 'Primary', 'blockst' ),
            'slug'  => 'primary',
            'color' => get_theme_mod( 'blockst_settings_primary_color', '#6364a5' ),
        ),
            array(
            'name'  => esc_html__( 'Secondary', 'blockst' ),
            'slug'  => 'secondary',
            'color' => get_theme_mod( 'blockst_settings_headings_color', '#3c3c46' ),
        ),
            array(
            'name'  => esc_html__( 'Tertiary', 'blockst' ),
            'slug'  => 'tertiary',
            'color' => get_theme_mod( 'blockst_settings_text_color', '#54545f' ),
        ),
            array(
            'name'  => esc_html__( 'Quaternary', 'blockst' ),
            'slug'  => 'quaternary',
            'color' => get_theme_mod( 'blockst_settings_background_light_color', '#f6f7fc' ),
        ),
            array(
            'name'  => esc_html__( 'White', 'blockst' ),
            'slug'  => 'white',
            'color' => '#ffffff',
        ),
            array(
            'name'  => esc_html__( 'Black', 'blockst' ),
            'slug'  => 'black',
            'color' => '#000000',
        )
        ) );
        // Thumbnails
        add_image_size(
            'blockst_thumbnail',
            68,
            68,
            true
        );
        add_image_size(
            'blockst_featured_medium',
            400,
            0,
            false
        );
        add_image_size(
            'blockst_featured_large',
            752,
            0,
            false
        );
        // Nav menus
        register_nav_menus( array(
            'primary-menu'       => esc_html__( 'Primary Menu', 'blockst' ),
            'footer-bottom-menu' => esc_html__( 'Footer Bottom Menu', 'blockst' ),
        ) );
        // Disable WooCommerce wizard redirect
        add_filter( 'woocommerce_enable_setup_wizard', '__return_false' );
        add_filter( 'woocommerce_show_admin_notice', '__return_false' );
        add_filter( 'woocommerce_prevent_automatic_wizard_redirect', '__return_false' );
        // Disable Kirki telemetry
        add_filter( 'kirki_telemetry', '__return_false' );
        // Allow shorcodes in text widgets
        add_filter( 'widget_text', 'do_shortcode' );
    }

}
// theme_setup
add_action( 'after_setup_theme', 'blockst_setup' );
// Disable Woo Variation Swatches activation redirect
if ( class_exists( 'Woo_Variation_Swatches' ) ) {
    remove_action( 'admin_init', array( Woo_Variation_Swatches(), 'after_plugin_active' ) );
}
/**
* Register widget areas.
*/
function blockst_widgets_init()
{
    register_sidebar( array(
        'name'          => esc_html__( 'Blog Sidebar', 'blockst' ),
        'id'            => 'blockst-blog-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Page Sidebar', 'blockst' ),
        'id'            => 'blockst-page-sidebar',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer Column 1', 'blockst' ),
        'id'            => 'blockst-footer-col-1',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
    if ( get_theme_mod( 'blockst_settings_footer_columns', 'footer-col-50-25-25' ) == 'footer-col-50-25-25' || get_theme_mod( 'blockst_settings_footer_columns', 'footer-col-50-25-25' ) == 'footer-col-5' || get_theme_mod( 'blockst_settings_footer_columns', 'footer-col-50-25-25' ) == 'footer-col-4' || get_theme_mod( 'blockst_settings_footer_columns', 'footer-col-50-25-25' ) == 'footer-col-3' || get_theme_mod( 'blockst_settings_footer_columns', 'footer-col-50-25-25' ) == 'footer-col-2' ) {
        register_sidebar( array(
            'name'          => esc_html__( 'Footer Column 2', 'blockst' ),
            'id'            => 'blockst-footer-col-2',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
    }
    if ( get_theme_mod( 'blockst_settings_footer_columns', 'footer-col-50-25-25' ) == 'footer-col-50-25-25' || get_theme_mod( 'blockst_settings_footer_columns', 'footer-col-50-25-25' ) == 'footer-col-5' || get_theme_mod( 'blockst_settings_footer_columns', 'footer-col-50-25-25' ) == 'footer-col-4' || get_theme_mod( 'blockst_settings_footer_columns', 'footer-col-50-25-25' ) == 'footer-col-3' ) {
        register_sidebar( array(
            'name'          => esc_html__( 'Footer Column 3', 'blockst' ),
            'id'            => 'blockst-footer-col-3',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
    }
    if ( get_theme_mod( 'blockst_settings_footer_columns', 'footer-col-50-25-25' ) == 'footer-col-5' || get_theme_mod( 'blockst_settings_footer_columns', 'footer-col-50-25-25' ) == 'footer-col-4' ) {
        register_sidebar( array(
            'name'          => esc_html__( 'Footer Column 4', 'blockst' ),
            'id'            => 'blockst-footer-col-4',
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
    }
}

add_action( 'widgets_init', 'blockst_widgets_init' );