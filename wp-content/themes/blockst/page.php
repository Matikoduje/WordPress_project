<?php
/**
 * The template for displaying all pages.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Blockst
 * @since 		 1.0.0
 */

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
	<?php
		if ( ! is_front_page() ) {
			get_template_part( 'template-parts/page-title/page-title' );
		}		
	?>

	<div class="page-section">
		<div class="container">
			<div class="row">

				<?php blockst_primary_content_top(); ?>

				<div id="primary" class="content page-content col-lg mb-32">
					<main class="site-main">

						<?php blockst_primary_content_before(); ?>

						<div class="entry__article clearfix">
							<?php the_content(); ?>
						</div>

						<?php blockst_multi_page_pagination(); ?>
						
						<?php blockst_comments(); ?>

						<?php blockst_primary_content_after(); ?>

					</main>
				</div> <!-- .page-content -->

				<?php blockst_primary_content_bottom(); ?>

				<?php
					// Sidebar
					if ( blockst_is_active_sidebar( 'page', 'page', 'fullwidth' ) ) {
						blockst_sidebar( 'blockst-page-sidebar' );
					}
				?>						

			</div> <!-- .row -->
		</div> <!-- .container -->			
	</div> <!-- .page-section -->

<?php endwhile; endif; ?>

<?php get_footer(); ?>