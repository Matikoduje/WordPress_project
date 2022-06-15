<?php

/**
 * Customizer Blog
 *
 * @package Blockst
 * @since 1.0.0
 */
if ( !defined( 'ABSPATH' ) ) {
    exit( 'Direct script access denied.' );
}
/**
* Page title
*/
// Blog page title
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'toggle',
    'settings' => 'blockst_settings_blog_page_title_show',
    'label'    => esc_html__( 'Show page title', 'blockst' ),
    'section'  => 'blockst_settings_blog_page_title',
    'default'  => true,
) );
// Blog page title
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'text',
    'settings' => 'blockst_settings_blog_page_title',
    'label'    => esc_html__( 'Blog title', 'blockst' ),
    'section'  => 'blockst_settings_blog_page_title',
    'default'  => esc_html__( 'Blog Listing', 'blockst' ),
) );
// Blog page subtitle
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'text',
    'settings' => 'blockst_settings_blog_page_subtitle',
    'label'    => esc_html__( 'Blog subtitle', 'blockst' ),
    'section'  => 'blockst_settings_blog_page_title',
    'default'  => esc_html__( 'Latest News', 'blockst' ),
) );
/**
* Meta
*/
// Meta category
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'toggle',
    'settings' => 'blockst_settings_meta_category_show',
    'label'    => esc_html__( 'Show meta category', 'blockst' ),
    'section'  => 'blockst_settings_post_meta',
    'default'  => true,
) );
// Meta date
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'toggle',
    'settings' => 'blockst_settings_meta_date_show',
    'label'    => esc_html__( 'Show meta date', 'blockst' ),
    'section'  => 'blockst_settings_post_meta',
    'default'  => true,
) );
// Meta author
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'toggle',
    'settings' => 'blockst_settings_meta_author_show',
    'label'    => esc_html__( 'Show meta author', 'blockst' ),
    'section'  => 'blockst_settings_post_meta',
    'default'  => true,
) );
// Meta comments
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'toggle',
    'settings' => 'blockst_settings_meta_comments_show',
    'label'    => esc_html__( 'Show meta comments', 'blockst' ),
    'section'  => 'blockst_settings_post_meta',
    'default'  => true,
) );
// Post excerpt
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'toggle',
    'settings' => 'blockst_settings_post_excerpt_show',
    'label'    => esc_html__( 'Show post excerpt', 'blockst' ),
    'section'  => 'blockst_settings_post_meta',
    'default'  => true,
) );
// Excerpt length
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'number',
    'settings' => 'blockst_settings_posts_excerpt_length',
    'label'    => esc_html__( 'Excerpt length (words)', 'blockst' ),
    'section'  => 'blockst_settings_post_meta',
    'default'  => 30,
    'choices'  => array(
    'min'  => 0,
    'max'  => 9999,
    'step' => 1,
),
) );
/**
* Single Post
*/
// Featured image
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'toggle',
    'settings' => 'blockst_settings_single_featured_image_show',
    'label'    => esc_html__( 'Show featured image', 'blockst' ),
    'section'  => 'blockst_settings_single_post',
    'default'  => true,
) );
// Meta category
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'toggle',
    'settings' => 'blockst_settings_single_category_show',
    'label'    => esc_html__( 'Show category', 'blockst' ),
    'section'  => 'blockst_settings_single_post',
    'default'  => true,
) );
// Meta date
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'toggle',
    'settings' => 'blockst_settings_single_date_show',
    'label'    => esc_html__( 'Show date', 'blockst' ),
    'section'  => 'blockst_settings_single_post',
    'default'  => true,
) );
// Meta author
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'toggle',
    'settings' => 'blockst_settings_single_author_show',
    'label'    => esc_html__( 'Show author', 'blockst' ),
    'section'  => 'blockst_settings_single_post',
    'default'  => true,
) );
// Post tags
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'toggle',
    'settings' => 'blockst_settings_post_tags_show',
    'label'    => esc_html__( 'Show tags', 'blockst' ),
    'section'  => 'blockst_settings_single_post',
    'default'  => true,
) );
// Post author box
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'toggle',
    'settings' => 'blockst_settings_author_box_show',
    'label'    => esc_html__( 'Show author box', 'blockst' ),
    'section'  => 'blockst_settings_single_post',
    'default'  => true,
) );
// Related posts heading
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'custom',
    'settings' => 'separator-' . $uniqid++,
    'section'  => 'blockst_settings_single_post',
    'default'  => '<h3 class="customizer-title">' . esc_html__( 'Related Posts', 'blockst' ) . '</h3>',
) );
// Related posts
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'toggle',
    'settings' => 'blockst_settings_related_posts_show',
    'label'    => esc_html__( 'Show related posts', 'blockst' ),
    'section'  => 'blockst_settings_single_post',
    'default'  => true,
) );
// Related by
Kirki::add_field( 'blockst_settings_config', array(
    'type'     => 'select',
    'settings' => 'blockst_settings_related_posts_relation',
    'label'    => esc_html__( 'Related by', 'blockst' ),
    'section'  => 'blockst_settings_single_post',
    'default'  => 'category',
    'choices'  => array(
    'category' => esc_html__( 'Category', 'blockst' ),
    'tag'      => esc_html__( 'Tag', 'blockst' ),
    'author'   => esc_html__( 'Author', 'blockst' ),
),
) );