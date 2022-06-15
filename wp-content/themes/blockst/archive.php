<?php
/**
 * The template for displaying archive pages.
 *
 * @package Blockst
 */

get_header();
?>

<?php
	// Page Title
	get_template_part( 'template-parts/page-title/page-title-archive' );
?>

<div class="archive-section">
	<div class="container">
		<div class="row">

			<?php blockst_primary_content_top(); ?>

			<div id="primary" class="content blog__content mb-32 col-lg">
				<main class="site-main">

					<?php blockst_primary_content_before(); ?>

					<?php blockst_primary_content_query(); ?>

					<?php blockst_post_pagination(); ?>

					<?php blockst_primary_content_after(); ?>

				</main>
			</div> <!-- #primary -->

			<?php
				// Sidebar
				if ( 'fullwidth' !== blockst_layout_type( 'archive', 'fullwidth' ) && is_active_sidebar( 'blockst-blog-sidebar' ) ) {
					blockst_sidebar();
				}
			?>	

		</div> <!-- .row -->
	</div> <!-- .container -->
</div>
<?php get_footer();  ?>