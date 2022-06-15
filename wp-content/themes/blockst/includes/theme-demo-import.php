<?php

/**
 * Theme Demo Import.
 *
 * @package Blockst
 */
if ( !defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}
/*
* Demo Import
*/
function blockst_ocdi_import_files()
{
    $url = 'https://blockst.deothemes.com';
    return array( array(
        'import_file_name'           => 'Demo Import Free',
        'import_file_url'            => 'https://blockst-free.deothemes.com/import/demo-content.xml',
        'import_widget_file_url'     => 'https://blockst-free.deothemes.com/import/widgets.wie',
        'import_customizer_file_url' => 'https://blockst-free.deothemes.com/import/customizer.dat',
        'import_preview_image_url'   => 'https://blockst-free.deothemes.com/import/preview.jpg',
        'preview_url'                => 'https://blockst-free.deothemes.com',
    ) );
}

add_filter( 'pt-ocdi/import_files', 'blockst_ocdi_import_files' );
/**
* Assign menus and front page after demo import
*
* @param array $selected_import array with demo import data
*/
function blockst_ocdi_after_import( $selected_import )
{
    global  $wp_rewrite ;
    // Assign menus to their locations.
    $primary_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
    $footer_menu = get_term_by( 'name', 'Footer Bottom Menu', 'nav_menu' );
    set_theme_mod( 'nav_menu_locations', array(
        'primary-menu'       => $primary_menu->term_id,
        'footer-bottom-menu' => $footer_menu->term_id,
    ) );
    // Delete WooCommerce duplicates
    $pages2 = array(
        'cart',
        'checkout',
        'my-account',
        'wishlist'
    );
    foreach ( $pages2 as $page2 ) {
        $page = get_page_by_path( $page2 . '-2' );
        if ( $page ) {
            wp_delete_post( $page->ID, true );
        }
    }
    $shop2 = get_page_by_path( 'shop-2' );
    
    if ( $shop2 ) {
        $shop1 = get_page_by_path( 'shop' );
        wp_delete_post( $shop1->ID, true );
        wp_update_post( [
            'post_name' => 'shop',
            'ID'        => $shop2->ID,
        ] );
    }
    
    // Assign WooCommerce pages
    $shop = get_page_by_path( 'shop' );
    $cart = get_page_by_path( 'cart' );
    $checkout = get_page_by_path( 'checkout' );
    $wishlist = get_page_by_path( 'wishlist' );
    $myaccount = get_page_by_path( 'my-account' );
    update_option( 'woocommerce_shop_page_id', $shop->ID );
    update_option( 'woocommerce_cart_page_id', $cart->ID );
    update_option( 'woocommerce_checkout_page_id', $checkout->ID );
    update_option( 'woocommerce_myaccount_page_id', $myaccount->ID );
    // Assign front page based on demo import
    switch ( $selected_import ) {
        case 0:
            $front_page_id = get_page_by_title( 'Home' );
            update_option( 'page_on_front', $front_page_id->ID );
            break;
        case 1:
            $front_page_id = get_page_by_title( 'Home Online Store' );
            update_option( 'page_on_front', $front_page_id->ID );
            break;
        default:
            $front_page_id = get_page_by_title( 'Home' );
            update_option( 'page_on_front', $front_page_id->ID );
            break;
    }
    $blog_page_id = get_page_by_title( 'Blog' );
    update_option( 'show_on_front', 'page' );
    update_option( 'page_for_posts', $blog_page_id->ID );
    // Omit installing WooCommerce pages
    delete_option( '_wc_needs_pages' );
    delete_transient( '_wc_activation_redirect' );
    // Set permalinks and flush rewrite rules
    $wp_rewrite->set_permalink_structure( '/%postname%/' );
    update_option( "rewrite_rules", FALSE );
    $wp_rewrite->flush_rules( true );
}

add_action( 'pt-ocdi/after_import', 'blockst_ocdi_after_import' );