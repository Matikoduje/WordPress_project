<?php

/**
 * Theme Customizer
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Blockst
 * @since 		 1.0.0
 */
if ( !defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}
function blockst_customize_register( $wp_customize )
{
    // Customize Background Settings
    $wp_customize->get_section( 'background_image' )->title = esc_html__( 'Background Styles', 'blockst' );
    $wp_customize->get_control( 'background_color' )->section = 'background_image';
    // Remove colors section
    $wp_customize->remove_section( 'colors' );
}

add_action( 'customize_register', 'blockst_customize_register' );
// Check Kirki version
if ( defined( 'KIRKI_VERSION' ) && !version_compare( KIRKI_VERSION, '4.0.23', '>=' ) ) {
    return;
}
// Check if Kirki is installed

if ( class_exists( 'Kirki' ) ) {
    function blockst_customizer_options()
    {
        // Selector Vars
        $selectors = array(
            'headings'  => 'h1,h2,h3,h4,h5,h6,
				label,
				.comment-author',
            'h1'        => 'h1, .h1',
            'h2'        => 'h2, .h2',
            'h3'        => 'h3, .h3',
            'h4'        => 'h4, .h4',
            'h5'        => 'h5, .h5',
            'h6'        => 'h6, .h6',
            'base_font' => 'body',
            'buttons'   => 'input[type="button"],
				input[type="reset"],
				input[type="submit"],
				button,
				.btn,
				.button,
				.wp-block-button .wp-block-button__link,
				.added_to_cart',
        );
        if ( blockst_is_woocommerce_activated() ) {
            $selectors['shop_headings_font'] = '.woocommerce #review_form .comment-reply-title, ul.product_list_widget li a:not(.remove)';
        }
        if ( function_exists( 'blockst_get_typekit_fonts' ) ) {
            $typekit_fonts = blockst_get_typekit_fonts();
        }
        $heading_font = ( isset( $typekit_fonts ) && !empty($typekit_fonts && isset( $typekit_fonts[0] )) ? $typekit_fonts[0] : 'Outfit' );
        $body_font = ( isset( $typekit_fonts ) && !empty($typekit_fonts && isset( $typekit_fonts[1] )) ? $typekit_fonts[1] : 'Outfit' );
        $border_color = '#e7e7e7';
        $primary_color = '#6364a5';
        $secondary_color = '#3c3c46';
        $tertiary_color = '#54545f';
        $text_color_light = '#6c6c7a';
        $bg_light = '#f6f7fc';
        $mobile_menu_dividers_color = '#e3e3e3';
        $container_width = '1200';
        $bp_xl_up = '@media (min-width: 1200px)';
        $bp_xl_down = '@media (min-width: 1199px)';
        $bp_lg_up = '@media (min-width: 1025px)';
        $bp_lg_down = '@media (max-width: 1024px)';
        // Kirki
        Kirki::add_config( 'blockst_settings_config', array(
            'capability'  => 'edit_theme_options',
            'option_type' => 'theme_mod',
            'option_name' => 'blockst_settings_config',
        ) );
        /**
         * SECTIONS / PANELS
         **/
        $priority = 20;
        $uniqid = 1;
        // 1. GENERAL PANEL
        Kirki::add_panel( 'blockst_settings_general', array(
            'title'    => esc_attr__( 'General', 'blockst' ),
            'priority' => $priority++,
        ) );
        // Preloader
        Kirki::add_section( 'blockst_settings_preloader', array(
            'title' => esc_html__( 'Preloader', 'blockst' ),
            'panel' => 'blockst_settings_general',
        ) );
        // Back to Top
        Kirki::add_section( 'blockst_settings_back_to_top', array(
            'title' => esc_html__( 'Back to Top', 'blockst' ),
            'panel' => 'blockst_settings_general',
        ) );
        // Portfolio
        Kirki::add_section( 'blockst_settings_portfolio', array(
            'title' => esc_html__( 'Portfolio', 'blockst' ),
            'panel' => 'blockst_settings_general',
        ) );
        // 2. HEADER PANEL
        Kirki::add_panel( 'blockst_settings_header', array(
            'title'    => esc_html__( 'Header / Logo', 'blockst' ),
            'priority' => $priority++,
        ) );
        // Header
        Kirki::add_section( 'blockst_settings_default_header', array(
            'title' => esc_html__( 'Header', 'blockst' ),
            'panel' => 'blockst_settings_header',
        ) );
        // Logo
        Kirki::add_section( 'blockst_settings_logo', array(
            'title' => esc_html__( 'Logo', 'blockst' ),
            'panel' => 'blockst_settings_header',
        ) );
        // Primary Menu
        Kirki::add_section( 'blockst_settings_primary_menu', array(
            'title' => esc_html__( 'Menu', 'blockst' ),
            'panel' => 'blockst_settings_header',
        ) );
        // 3. FOOTER
        Kirki::add_section( 'blockst_settings_footer', array(
            'title'    => esc_html__( 'Footer', 'blockst' ),
            'priority' => $priority++,
        ) );
        // 4. LAYOUT PANEL
        Kirki::add_panel( 'blockst_settings_layout', array(
            'title'    => esc_html__( 'Layout', 'blockst' ),
            'priority' => $priority++,
        ) );
        // Content
        Kirki::add_section( 'blockst_settings_content_layout', array(
            'title' => esc_html__( 'Content', 'blockst' ),
            'panel' => 'blockst_settings_layout',
        ) );
        // Blog Layout
        Kirki::add_section( 'blockst_settings_blog_layout', array(
            'title'       => esc_html__( 'Blog', 'blockst' ),
            'description' => esc_html__( 'Layout options for the blog pages', 'blockst' ),
            'panel'       => 'blockst_settings_layout',
        ) );
        // Single Post Layout
        Kirki::add_section( 'blockst_settings_single_post_layout', array(
            'title' => esc_html__( 'Single Post', 'blockst' ),
            'panel' => 'blockst_settings_layout',
        ) );
        // Projects Layout
        Kirki::add_section( 'blockst_settings_projects_layout', array(
            'title'       => esc_html__( 'Projects', 'blockst' ),
            'description' => esc_html__( 'Layout options for the projects archive pages', 'blockst' ),
            'panel'       => 'blockst_settings_layout',
        ) );
        // Page Layout
        Kirki::add_section( 'blockst_settings_page_layout', array(
            'title'       => esc_html__( 'Page', 'blockst' ),
            'description' => esc_html__( 'Layout options for the regular pages', 'blockst' ),
            'panel'       => 'blockst_settings_layout',
        ) );
        // Archive Layout
        Kirki::add_section( 'blockst_settings_archive_layout', array(
            'title'       => esc_html__( 'Archive', 'blockst' ),
            'description' => esc_html__( 'Layout options for archive and categories pages', 'blockst' ),
            'panel'       => 'blockst_settings_layout',
        ) );
        // Search Results Layout
        Kirki::add_section( 'blockst_settings_search_results_layout', array(
            'title'       => esc_html__( 'Search Results', 'blockst' ),
            'description' => esc_html__( 'Layout options for search result page', 'blockst' ),
            'panel'       => 'blockst_settings_layout',
        ) );
        // 5. COLORS PANEL
        Kirki::add_panel( 'blockst_settings_colors', array(
            'title'    => esc_html__( 'Colors', 'blockst' ),
            'priority' => $priority++,
        ) );
        // General Colors
        Kirki::add_section( 'blockst_settings_general_colors', array(
            'title' => esc_html__( 'General', 'blockst' ),
            'panel' => 'blockst_settings_colors',
        ) );
        // Footer Colors
        Kirki::add_section( 'blockst_settings_footer_colors', array(
            'title' => esc_html__( 'Footer', 'blockst' ),
            'panel' => 'blockst_settings_colors',
        ) );
        // 6. TYPOGRAPHY
        Kirki::add_section( 'blockst_settings_typography', array(
            'title'    => esc_html__( 'Typography', 'blockst' ),
            'priority' => $priority++,
        ) );
        // 7. BLOG PANEL
        Kirki::add_panel( 'blockst_settings_blog', array(
            'title'    => esc_attr__( 'Blog', 'blockst' ),
            'priority' => $priority++,
        ) );
        // Page title
        Kirki::add_section( 'blockst_settings_blog_page_title', array(
            'title' => esc_html__( 'Page Title', 'blockst' ),
            'panel' => 'blockst_settings_blog',
        ) );
        // Post Meta
        Kirki::add_section( 'blockst_settings_post_meta', array(
            'title' => esc_html__( 'Post Meta', 'blockst' ),
            'panel' => 'blockst_settings_blog',
        ) );
        // Single Post
        Kirki::add_section( 'blockst_settings_single_post', array(
            'title' => esc_html__( 'Single Post', 'blockst' ),
            'panel' => 'blockst_settings_blog',
        ) );
        // Post Excerpt
        Kirki::add_section( 'blockst_settings_post_excerpt', array(
            'title' => esc_html__( 'Excerpt', 'blockst' ),
            'panel' => 'blockst_settings_blog',
        ) );
        // Read More
        Kirki::add_section( 'blockst_settings_read_more', array(
            'title' => esc_html__( 'Read More', 'blockst' ),
            'panel' => 'blockst_settings_blog',
        ) );
        // 8. PAGE TITLE
        Kirki::add_section( 'blockst_settings_page_title', array(
            'title'    => esc_attr__( 'Page Title / Breadcrumbs', 'blockst' ),
            'priority' => $priority++,
        ) );
        // 12. Page 404
        Kirki::add_section( 'blockst_settings_page_404', array(
            'title'       => esc_html__( 'Page 404', 'blockst' ),
            'description' => esc_html__( 'Settings for page 404', 'blockst' ),
            'priority'    => $priority++,
        ) );
        /**
         * Pro Customizer Options
         */
        function blockst_pro_customizer_options( $section, $uniqid )
        {
            if ( blockst_fs()->is_not_paying() ) {
                Kirki::add_field( 'blockst_settings_config', array(
                    'type'     => 'custom',
                    'settings' => 'blockst_pro_options_' . $uniqid,
                    'section'  => $section,
                    'default'  => '<hr><h4>' . esc_attr__( 'More Options Available in Blockst Pro', 'blockst' ) . '</h4>' . '<a href="' . esc_url( blockst_fs()->get_upgrade_url() ) . '" class="button button-primary">' . esc_html__( 'Upgrade Now!', 'blockst' ) . '</a>',
                ) );
            }
        }
        
        // Load modules
        require_once BLOCKST_DIR . '/includes/customizer/modules/general.php';
        require_once BLOCKST_DIR . '/includes/customizer/modules/header.php';
        require_once BLOCKST_DIR . '/includes/customizer/modules/footer.php';
        require_once BLOCKST_DIR . '/includes/customizer/modules/layout.php';
        require_once BLOCKST_DIR . '/includes/customizer/modules/page-title.php';
        require_once BLOCKST_DIR . '/includes/customizer/modules/blog.php';
        require_once BLOCKST_DIR . '/includes/customizer/modules/colors.php';
        require_once BLOCKST_DIR . '/includes/customizer/modules/typography.php';
        require_once BLOCKST_DIR . '/includes/customizer/modules/page-404.php';
    }
    
    blockst_customizer_options();
}

// endif Kirki check