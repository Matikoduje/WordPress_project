<?php
/**
 * Page content.
 * 
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Blockst
 * @since 		 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}


if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>	
		
	<?php
		// Page Title
		get_template_part( 'template-parts/page-title/page-title' );
	?>

	<section class="page-section">
		<div class="container">
			<div class="row">

				<?php blockst_primary_content_top(); ?>

				<div id="primary" class="page-content mb-32 <?php if ( blockst_is_active_sidebar( 'page' ) ) { echo esc_attr( 'col-lg-8' ); } else { echo esc_attr( 'col-lg-12' ); } ?>">

					<?php blockst_primary_content_before(); ?>

					<div class="entry__article clearfix">
						<?php the_content(); ?>
					</div>

					<?php blockst_multi_page_pagination(); ?>
					
					<?php blockst_comments(); ?>

					<?php blockst_primary_content_after(); ?>

				</div> <!-- .page-content -->

				<?php blockst_primary_content_bottom(); ?>

				<?php
					// Sidebar
					if ( blockst_is_active_sidebar( 'page' ) ) {
						blockst_sidebar();
					}
				?>						

			</div> <!-- .row -->
		</div> <!-- .container -->			
	</section> <!-- .page-section -->

<?php endwhile; endif; ?>