<?php

/**
 * Theme functions and definitions.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Blockst
 * @since 		 1.0.0
 */
if ( !defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}

if ( !function_exists( 'blockst_fs' ) ) {
    // Create a helper function for easy SDK access.
    function blockst_fs()
    {
        global  $blockst_fs ;
        
        if ( !isset( $blockst_fs ) ) {
            // Include Freemius SDK.
            require_once dirname( __FILE__ ) . '/freemius/start.php';
            $blockst_fs = fs_dynamic_init( array(
                'id'              => '10423',
                'slug'            => 'blockst',
                'type'            => 'theme',
                'public_key'      => 'pk_79881c0f2a68b6f2f43604a92f78a',
                'is_premium'      => false,
                'premium_suffix'  => 'Pro',
                'has_addons'      => false,
                'has_paid_plans'  => true,
                'has_affiliation' => 'selected',
                'menu'            => array(
                'slug'    => 'blockst-theme',
                'support' => false,
                'parent'  => array(
                'slug' => 'themes.php',
            ),
            ),
                'is_live'         => true,
            ) );
        }
        
        return $blockst_fs;
    }
    
    // Init Freemius.
    blockst_fs();
    // Signal that SDK was initiated.
    do_action( 'blockst_fs_loaded' );
}

// Set the content width based on the theme's design and stylesheet.

if ( !isset( $content_width ) ) {
    $content_width = 1240;
    /* pixels */
}

// Constants
define( 'BLOCKST_VERSION', '1.0' );
define( 'BLOCKST_DIR', get_template_directory() );
define( 'BLOCKST_URI', get_template_directory_uri() );
// Includes
require_once BLOCKST_DIR . '/includes/admin/theme-admin.php';
require_once BLOCKST_DIR . '/includes/theme-setup.php';
require_once BLOCKST_DIR . '/includes/theme-functions.php';
require_once BLOCKST_DIR . '/includes/theme-hooks.php';
require_once BLOCKST_DIR . '/includes/template-tags.php';
require_once BLOCKST_DIR . '/includes/template-parts.php';
require_once BLOCKST_DIR . '/includes/class-blockst-breadcrumb-trail.php';
require_once BLOCKST_DIR . '/includes/class-blockst-query.php';
require_once BLOCKST_DIR . '/includes/class-blockst-walker-nav-menu.php';
require_once BLOCKST_DIR . '/includes/class-blockst-walker-comment.php';
require_once BLOCKST_DIR . '/includes/customizer/customizer.php';
require_once BLOCKST_DIR . '/includes/block-patterns.php';
require_once BLOCKST_DIR . '/includes/block-styles.php';
/**
 * Theme update functions.
 */
require_once BLOCKST_DIR . '/includes/theme-update/class-blockst-theme-update.php';
/**
* TGM plugins activation.
*/
require_once BLOCKST_DIR . '/includes/tgmpa/tgm-plugin-activation.php';
/**
* Demo Import.
*/
require_once BLOCKST_DIR . '/includes/theme-demo-import.php';
/**
* Theme Wizard.
*/
require_once get_parent_theme_file_path( '/includes/merlin/vendor/autoload.php' );
require_once get_parent_theme_file_path( '/includes/merlin/class-merlin.php' );
require_once get_parent_theme_file_path( '/includes/merlin/merlin-config.php' );
require_once get_parent_theme_file_path( '/includes/merlin/merlin-filters.php' );
/**
 * Theme styles.
 */
function blockst_theme_styles()
{
    wp_enqueue_style(
        'blockst-styles',
        BLOCKST_URI . '/style.min.css',
        array(),
        BLOCKST_VERSION,
        'all'
    );
    wp_style_add_data( 'blockst-styles', 'rtl', 'replace' );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    // Editor shared styles
    wp_enqueue_style( 'blockst-block-editor-shared-styles', get_theme_file_uri( '/assets/css/editor-shared.min.css' ), false );
    wp_style_add_data( 'blockst-block-editor-shared-styles', 'rtl', 'replace' );
    // Fonts
    if ( !class_exists( 'Kirki' ) ) {
        wp_enqueue_style(
            'blockst-google-fonts',
            '//fonts.googleapis.com/css2?family=Outfit:wght@400;600&display=swap',
            [],
            null
        );
    }
}

add_action( 'wp_enqueue_scripts', 'blockst_theme_styles' );
/**
 * Block editor styles.
 */
function blockst_block_assets()
{
    wp_enqueue_style( 'blockst-block-editor-styles', get_theme_file_uri( '/assets/css/editor.min.css' ), false );
    wp_style_add_data( 'blockst-block-editor-styles', 'rtl', 'replace' );
    // Editor shared styles
    wp_enqueue_style( 'blockst-block-editor-shared-styles', get_theme_file_uri( '/assets/css/editor-shared.min.css' ), false );
    wp_style_add_data( 'blockst-block-editor-shared-styles', 'rtl', 'replace' );
    // Adobe fonts
    if ( function_exists( 'blockst_get_typekit_fonts' ) ) {
        $typekit_fonts = blockst_get_typekit_fonts();
    }
    
    if ( !empty($typekit_fonts) ) {
        $typekit_info = get_option( 'blockst-typekit-fonts' );
        $typekit_id = $typekit_info['custom-typekit-font-id'];
        if ( !empty($typekit_id) ) {
            wp_enqueue_style( 'blockst-typekit-fonts', '//use.typekit.net/' . $typekit_id . '.css' );
        }
    }
    
    if ( !class_exists( 'Kirki' ) || empty($typekit_fonts) ) {
        wp_enqueue_style(
            'blockst-block-editor-google-fonts',
            '//fonts.googleapis.com/css2?family=Outfit:wght@400;600&display=swap',
            [],
            null
        );
    }
}

add_action( 'enqueue_block_editor_assets', 'blockst_block_assets' );
/**
 * Theme scripts.
 */
function blockst_theme_scripts()
{
    
    if ( is_archive() || is_search() || is_home() ) {
        wp_enqueue_script( 'masonry' );
        wp_enqueue_script( 'imagesloaded' );
    }
    
    wp_enqueue_script(
        'bootstrap',
        BLOCKST_URI . '/assets/js/vendor/min/bootstrap.min.js',
        array(),
        BLOCKST_VERSION,
        true
    );
    wp_enqueue_script(
        'body-scroll-lock',
        BLOCKST_URI . '/assets/js/vendor/min/bodyScrollLock.min.js',
        array(),
        BLOCKST_VERSION,
        true
    );
    wp_enqueue_script(
        'modernizr',
        BLOCKST_URI . '/assets/js/vendor/min/modernizr.min.js',
        array(),
        BLOCKST_VERSION,
        true
    );
    wp_register_script(
        'blockst-scripts',
        BLOCKST_URI . '/assets/js/scripts.min.js',
        array(),
        BLOCKST_VERSION,
        true
    );
    wp_enqueue_script( 'blockst-scripts' );
    $Blockst_Data = array(
        'home_url'   => esc_url( home_url( '/' ) ),
        'theme_path' => BLOCKST_URI,
    );
    wp_localize_script( 'blockst-scripts', 'Blockst_Data', $Blockst_Data );
}

add_action( 'wp_enqueue_scripts', 'blockst_theme_scripts' );
/**
 * Theme admin scripts and styles.
 */
function blockst_admin_scripts()
{
    $screen = get_current_screen();
    wp_enqueue_style( 'blockst-admin-styles', BLOCKST_URI . '/assets/admin/css/admin-styles.css' );
}

add_action( 'admin_enqueue_scripts', 'blockst_admin_scripts' );
/**
 * Customizer scripts and styles.
 */
function blockst_customizer_scripts()
{
    wp_enqueue_style( 'blockst-customizer-styles', BLOCKST_URI . '/assets/css/customizer/customizer.css' );
}

add_action( 'customize_controls_enqueue_scripts', 'blockst_customizer_scripts' );