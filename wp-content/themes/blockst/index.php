<?php
/**
 * The main template file.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Blockst
 * @since 		 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

get_header();
?>

<?php if ( get_theme_mod( 'blockst_settings_blog_page_title_show', true ) ) : ?>
	<?php get_template_part( 'template-parts/page-title/page-title' ); ?>
<?php endif; ?>

<div class="blog-section">	

	<?php blockst_primary_content_markup_top(); ?>

		<?php blockst_primary_content_top(); ?>

		<!-- blog content -->
		<div id="primary" class="content blog__content col-lg mb-32">
			<main class="site-main">

				<?php blockst_primary_content_before(); ?>

				<?php blockst_primary_content_query(); ?>

				<?php blockst_post_pagination(); ?>

				<?php blockst_primary_content_after(); ?>

			</main>
		</div> <!-- .blog__content -->

		<?php

			if ( ! defined( 'BLOCKST_PRODUCTION' ) ) {
				if ( blockst_is_active_sidebar( 'blog', 'blog', 'right-sidebar' ) ) {
					blockst_sidebar( 'blockst-blog-sidebar' );
				}
			} else {
				if ( ! isset( $_GET['layout'] ) ) {
					if ( blockst_is_active_sidebar( 'blog', 'blog', 'right-sidebar' ) ) {
						blockst_sidebar( 'blockst-blog-sidebar' );
					}				
				} elseif ( 'fullwidth' !== $_GET['layout'] ) {
					if ( blockst_is_active_sidebar( 'blog', 'blog', 'right-sidebar' ) ) {
						blockst_sidebar( 'blockst-blog-sidebar' );
					}
				}
			}

		?>

		<?php blockst_primary_content_bottom(); ?>

	<?php blockst_primary_content_markup_bottom(); ?>

</div> <!-- .blog-section -->

<?php get_footer(); ?>