<?php

/**
 * Template parts.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Blockst
 * @since 		 1.0.0
 */
add_action( 'blockst_header_before', 'blockst_top_bar' );
add_action( 'blockst_header', 'blockst_header_markup' );
add_action( 'blockst_menu_after', 'blockst_last_menu_item' );
add_action( 'blockst_footer', 'blockst_footer_template' );
add_action( 'blockst_comments', 'blockst_comments_template' );
add_action( 'blockst_page_title_after', 'blockst_breadcrumbs' );
add_action( 'blockst_entry_section_before', 'blockst_breadcrumbs' );
add_action( 'blockst_entry_featured_image', 'blockst_featured_image_markup' );
if ( !function_exists( 'blockst_header_markup' ) ) {
    /**
     * Get site Header
     */
    function blockst_header_markup()
    {
        if ( !get_theme_mod( 'blockst_settings_header_show', true ) ) {
            return;
        }
        
        if ( get_theme_mod( 'blockst_settings_header_layout_type', 'default' ) === 'default' ) {
            get_template_part( 'template-parts/header/header-default-template' );
        } elseif ( get_theme_mod( 'blockst_settings_header_layout_type', 'default' ) === 'centered-logo' ) {
            get_template_part( 'template-parts/header/header-centered-logo-template' );
        }
    
    }

}
if ( !function_exists( 'blockst_last_menu_item' ) ) {
    /**
     * Header last item in menu
     */
    function blockst_last_menu_item( $is_mobile = false )
    {
        $text_html = get_theme_mod( 'blockst_settings_header_last_menu_item_text_html' );
        $hide_on_mobile = get_theme_mod( 'blockst_settings_header_last_menu_item_hide', false );
        $search = get_theme_mod( 'blockst_settings_header_last_menu_item_search', true );
        $cart = get_theme_mod( 'blockst_settings_header_last_menu_item_shopping_cart', true );
        $account = get_theme_mod( 'blockst_settings_header_last_menu_item_account', true );
        $html = get_theme_mod( 'blockst_settings_header_last_menu_item_html', false );
        if ( $hide_on_mobile ) {
            return;
        }
        if ( false === $search && false === $cart && false === $account && false === $html ) {
            return;
        }
        if ( !$is_mobile ) {
            echo  '<div class="nav__right d-lg-flex d-none">' ;
        }
        
        if ( $search ) {
            ?>
				<div class="nav__right-item">
					<div class="blockst-menu-search">
						<button type="button" class="blockst-menu-search__trigger" title="<?php 
            echo  esc_attr__( 'Open Search', 'blockst' ) ;
            ?>">
							<i class="blockst-icon-search blockst-menu-search__icon" aria-hidden="true"></i>
						</button>
						<div class="blockst-menu-search-modal" tabindex="-1" aria-hidden="true" aria-label="<?php 
            echo  esc_attr( 'Search Modal', 'blockst' ) ;
            ?>">
							<div class="blockst-menu-search-modal__inner">
								<div class="container">
									<?php 
            get_search_form();
            ?>
								</div>				
							</div>
						</div>
					</div>
				</div>				
				<?php 
        }
        
        
        if ( $html ) {
            echo  '<div class="nav__right-item">' ;
            // We don't escape output here, so user can enter any HTML
            echo  do_shortcode( $text_html ) ;
            // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
            echo  '</div>' ;
        }
        
        if ( !$is_mobile ) {
            echo  '</div>' ;
        }
    }

}
if ( !function_exists( 'blockst_menu_mobile' ) ) {
    /**
     * Mobile menu
     */
    function blockst_menu_mobile()
    {
        ?>
		<div class="nav__mobile d-lg-none">

			<?php 
        blockst_last_menu_item( true );
        ?>

			<?php 
        
        if ( has_nav_menu( 'primary-menu' ) ) {
            ?>
				<!-- Mobile toggle -->
				<button type="button" class="nav__icon-toggle" id="nav__icon-toggle" data-bs-toggle="collapse" data-bs-target="#navbar-collapse">
					<span class="visually-hidden"><?php 
            esc_html_e( 'Toggle navigation', 'blockst' );
            ?></span>
					<span class="nav__icon-toggle-bar"></span>
					<span class="nav__icon-toggle-bar"></span>
					<span class="nav__icon-toggle-bar"></span>
				</button>
			<?php 
        }
        
        ?>

		</div>
		<?php 
    }

}
if ( !function_exists( 'blockst_logo' ) ) {
    /**
     * Logo
     */
    function blockst_logo()
    {
        $width = get_theme_mod( 'blockst_settings_header_logo_width' );
        $logo = get_theme_mod( 'blockst_settings_logo_dark' );
        $size = ( is_customize_preview() ? 'full' : [ $width, 0 ] );
        ?>

		<!-- Logo -->
		<a href="<?php 
        echo  esc_url( home_url( '/' ) ) ;
        ?>" class="logo-url logo-dark" itemtype="https://schema.org/Organization" itemscope="itemscope">
			<?php 
        
        if ( isset( $logo['id'] ) ) {
            ?>
				<img src="<?php 
            echo  esc_url( $logo['url'] ) ;
            ?>"
				class="logo logo--dark"
				width="<?php 
            echo  esc_attr( $logo['width'] ) ;
            ?>"
				height="<?php 
            echo  esc_attr( $logo['height'] ) ;
            ?>"
				alt="<?php 
            bloginfo( 'name' );
            ?>" />
			<?php 
        } else {
            ?>
				<span class="site-title site-title--dark"><?php 
            bloginfo( 'name' );
            ?></span>
				<?php 
            $tagline = get_bloginfo( 'description', 'display' );
            ?>
				<p class="site-tagline"><?php 
            echo  esc_html( $tagline ) ;
            ?></p>
			<?php 
        }
        
        ?>
		</a>

		<?php 
    }

}
if ( !function_exists( 'blockst_top_bar' ) ) {
    /**
     * Top bar
     */
    function blockst_top_bar()
    {
        if ( class_exists( 'woocommerce' ) ) {
            if ( is_checkout() && get_theme_mod( 'blockst_settings_woocommerce_distraction_free_checkout', false ) ) {
                return;
            }
        }
        $message = get_theme_mod( 'blockst_settings_top_bar_message', esc_html__( 'Free shipping on orders over $100 with free returns', 'blockst' ) );
        $url = get_theme_mod( 'blockst_settings_top_bar_url', '#' );
        $customizer = get_theme_mod( 'blockst_settings_top_bar_show', false );
        $meta = get_post_meta( get_the_ID(), '_blockst_top_bar_hide', true );
        if ( is_archive() || is_404() || is_search() || is_home() ) {
            $meta = '';
        }
        
        if ( $customizer && $meta != '1' ) {
            ?>
			<div class="top-bar">
				<div class="container">
					<a href="<?php 
            echo  esc_url( $url ) ;
            ?>" class="top-bar__url">
						<p class="top-bar__message"><?php 
            echo  esc_html( $message ) ;
            ?></p>
					</a>				
				</div>
			</div>
			<?php 
        }
    
    }

}
if ( !function_exists( 'blockst_footer_template' ) ) {
    /**
     * Footer main template
     */
    function blockst_footer_template()
    {
        get_template_part( 'template-parts/footer/footer-default-template' );
    }

}
if ( !function_exists( 'blockst_comments_template' ) ) {
    /**
     * Comments template
     */
    function blockst_comments_template()
    {
        
        if ( comments_open() || get_comments_number() ) {
            ?>
			<!-- Comments -->
			<div class="comments-wrap">
			<?php 
            comments_template();
            ?>
		<?php 
        }
    
    }

}
if ( !function_exists( 'blockst_preloader' ) ) {
    /**
     * Preloader
     */
    function blockst_preloader()
    {
        if ( get_theme_mod( 'blockst_settings_preloader_show', false ) ) {
            ?>
			<div class="loader-mask">
				<div class="loader">
					<div></div>
				</div>
			</div>
		<?php 
        }
    }

}
if ( !function_exists( 'blockst_back_to_top' ) ) {
    /**
     * Back to top
     */
    function blockst_back_to_top()
    {
        
        if ( get_theme_mod( 'blockst_settings_back_to_top_show', true ) ) {
            ?>
			<!-- Back to top -->
			<div id="back-to-top">
				<a href="#top">
					<i class="blockst-icon-chevron-up" aria-label="<?php 
            echo  esc_attr__( 'Back to top', 'blockst' ) ;
            ?>" aria-hidden="true"></i>
				</a>
			</div>
		<?php 
        }
    
    }

}
if ( !function_exists( 'blockst_primary_content_markup_top' ) ) {
    /**
     * Content markup top
     */
    function blockst_primary_content_markup_top()
    {
        ?>
			<div class="container">
				<div class="row">
		<?php 
    }

}
if ( !function_exists( 'blockst_primary_content_markup_bottom' ) ) {
    /**
     * Content markup bottom
     */
    function blockst_primary_content_markup_bottom()
    {
        ?>
				</div>
			</div>
		<?php 
    }

}
if ( !function_exists( 'blockst_breadcrumbs' ) ) {
    /**
     * Breadcrumbs
     *
     * @since 1.0.0
     */
    function blockst_breadcrumbs()
    {
        if ( !function_exists( 'breadcrumb_trail' ) ) {
            return;
        }
        // Shop
        if ( blockst_is_woocommerce_activated() ) {
            // Shop pages
            if ( (is_cart() || is_checkout()) && get_theme_mod( 'blockst_settings_shop_pages_breadcrumbs_show', true ) ) {
                breadcrumb_trail( array(
                    'show_browse' => false,
                ) );
            }
        }
        // Blog
        if ( is_home() && get_theme_mod( 'blockst_settings_breadcrumbs_blog_show', false ) ) {
            breadcrumb_trail( array(
                'show_browse' => false,
            ) );
        }
        // Pages
        
        if ( is_page() && get_theme_mod( 'blockst_settings_breadcrumbs_pages_show', false ) ) {
            if ( blockst_is_woocommerce_activated() && is_shop() ) {
                return;
            }
            breadcrumb_trail( array(
                'show_browse' => false,
            ) );
        }
        
        // Single post
        
        if ( is_single() && get_theme_mod( 'blockst_settings_single_post_breadcrumbs_show', false ) ) {
            ?>
			<div class="breadcrumbs-wrap">
				<div class="container">
					<?php 
            breadcrumb_trail( array(
                'show_browse' => false,
            ) );
            ?>
				</div>
			</div>
			<?php 
        }
    
    }

}
if ( !function_exists( 'blockst_featured_image_markup' ) ) {
    /**
     * Single Entry Featured Image
     *
     * @since 1.0.0
     */
    function blockst_featured_image_markup()
    {
        $featured_image = get_theme_mod( 'blockst_settings_single_featured_image_show', true );
        
        if ( !defined( 'BLOCKST_PRODUCTION' ) ) {
            $layout = get_theme_mod( 'blockst_settings_single_featured_image_layout', 'default' );
        } else {
            
            if ( isset( $_GET['featured'] ) ) {
                
                if ( 'split' === $_GET['featured'] ) {
                    $layout = 'split';
                } else {
                    $layout = get_theme_mod( 'blockst_settings_single_featured_image_layout', 'default' );
                }
            
            } else {
                $layout = get_theme_mod( 'blockst_settings_single_featured_image_layout', 'default' );
            }
        
        }
        
        
        if ( 'default' === $layout ) {
            ?>
			<!-- Featured Image -->
			<div class="single-post__featured-img single-post__featured-img--layout-1 bg-overlay bg-overlay--dark" <?php 
            
            if ( has_post_thumbnail() && $featured_image ) {
                ?>style="background-image: url(<?php 
                echo  esc_url( the_post_thumbnail_url() ) ;
                ?>);"<?php 
            }
            
            ?>>
				<?php 
            
            if ( has_post_thumbnail() ) {
                ?>
					<figure class="single-post__featured-img-container d-none">
						<?php 
                the_post_thumbnail( 'full', array(
                    'class' => 'single-post__featured-img-image',
                ) );
                ?>
					</figure>
				<?php 
            }
            
            ?>

				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">

							<header class="single-post__entry-header">
								<?php 
            
            if ( get_theme_mod( 'blockst_settings_single_category_show', true ) ) {
                ?>
									<?php 
                blockst_meta_category();
                ?>
								<?php 
            }
            
            ?>
								<h1 class="single-post__entry-title"><?php 
            the_title();
            ?></h1>
								
								<div class="entry__meta single-post__entry-meta">
									<?php 
            
            if ( get_theme_mod( 'blockst_settings_single_author_show', true ) ) {
                ?>
										<?php 
                blockst_meta_author();
                ?>
									<?php 
            }
            
            ?>

									<?php 
            
            if ( get_theme_mod( 'blockst_settings_single_date_show', true ) ) {
                ?>
										<?php 
                blockst_meta_date();
                ?>
									<?php 
            }
            
            ?>
								</div>

							</header>

						</div>
					</div>
				</div>

			</div>

		<?php 
        } elseif ( 'split' === $layout ) {
            ?>

			<div class="single-post__featured-img single-post__featured-img--layout-2">
				
				<?php 
            
            if ( has_post_thumbnail() && $featured_image ) {
                ?>			
					<?php 
                
                if ( has_post_thumbnail() ) {
                    ?>
						<!-- Featured Image -->
						<figure class="single-post__featured-img-container">
							<?php 
                    the_post_thumbnail( 'full', array(
                        'class' => 'single-post__featured-img-image',
                    ) );
                    ?>
						</figure>
					<?php 
                }
                
                ?>				
				<?php 
            }
            
            ?>

				<!-- Title / Meta -->
				<header class="single-post__entry-header">
					<?php 
            
            if ( get_theme_mod( 'blockst_settings_single_category_show', true ) ) {
                ?>
						<?php 
                blockst_meta_category();
                ?>
					<?php 
            }
            
            ?>
					<h1 class="single-post__entry-title"><?php 
            the_title();
            ?></h1>

					<div class="entry__meta single-post__entry-meta">
						<?php 
            
            if ( get_theme_mod( 'blockst_settings_single_author_show', true ) ) {
                ?>
							<?php 
                blockst_meta_author();
                ?>
						<?php 
            }
            
            ?>

						<?php 
            
            if ( get_theme_mod( 'blockst_settings_single_date_show', true ) ) {
                ?>
							<?php 
                blockst_meta_date();
                ?>
						<?php 
            }
            
            ?>
					</div>
				</header>

			</div>
		
		<?php 
        }
    
    }

}
if ( !function_exists( 'blockst_footer_bottom_text' ) ) {
    /**
     * Footer bottom text
     *
     * @since 1.0.0
     */
    function blockst_footer_bottom_text()
    {
        $output = get_theme_mod( 'blockst_settings_footer_bottom_text', sprintf(
            esc_html__( 'Copyright &copy; [current-year] %1$s. All rights reserved — Made by %2$sDeoThemes%3$s', 'blockst' ),
            get_bloginfo( 'name' ),
            '<a href="https://deothemes.com">',
            '</a>'
        ) );
        $output = str_replace( '[current-year]', date_i18n( 'Y' ), $output );
        echo  do_shortcode( wp_kses_post( $output ) ) ;
    }

}