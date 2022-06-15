<?php
/**
 * Page title.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Blockst
 * @since 		 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

if ( blockst_is_woocommerce_activated() ) {
	if ( is_page('wishlist') ) {
		return;
	}
}

if ( ! get_theme_mod( 'blockst_settings_regular_pages_page_title_show', true ) ) {
	return;
}

$page_title = get_theme_mod( 'blockst_settings_blog_page_title', __( 'Blog Listing', 'blockst' ) );

if ( is_home() ) {
	$page_subtitle = get_theme_mod( 'blockst_settings_blog_page_subtitle', __( 'Latest News', 'blockst' ) );
} else {
	$page_subtitle = get_post_meta( get_the_ID(), '_blockst_page_subtitle', true );
}

?>

<!-- Page Title -->
<div class="page-title">
	<div class="container">
		<div class="page-title__holder">
			<?php blockst_page_title_before(); ?>

			<?php if ( $page_subtitle ) : ?>
				<p class="page-title__subtitle"><?php echo esc_html( $page_subtitle ); ?></p>
			<?php endif; ?>

			<?php if ( is_home() ) : ?>
				<h1 class="page-title__title">
					<?php if ( $page_title ) : ?>
						<?php echo esc_html( $page_title ); ?>
					<?php else : ?>
						<?php single_post_title(); ?>
					<?php endif; ?>
				</h1>
			<?php else : ?>
				<h1 class="page-title__title"><?php the_title(); ?></h1>
			<?php endif; ?>
			<?php blockst_page_title_after(); ?>
		</div>
	</div>
</div> <!-- .page-title -->