<?php
/**
 * The template for displaying all single posts.
 *
 * @package Blockst
 */

get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>

	<?php if ( 'projects' == get_post_type() ) : ?>	

		<div class="container">
			<?php the_content(); ?>
		</div>

	<?php else : ?>

		<?php blockst_entry_featured_image_before(); ?>

		<?php blockst_entry_featured_image(); ?>

		<?php blockst_entry_featured_image_after(); ?>

		<?php blockst_entry_section_before(); ?>

		<div class="section-wrap pt-72 pb-40">
			<div class="container">
				<div class="row">

					<!-- blog content -->
					<div class="content blog__content col-lg mb-40">
						<main class="site-main">
					
							<?php
								if ( function_exists( 'blockst_save_post_views' ) ) {
									blockst_save_post_views( get_the_ID() );
								}

								get_template_part( 'template-parts/content-single', get_post_format() );
							?>
							
						</main>
					</div> <!-- .blog__content -->

					<?php
						if ( blockst_is_active_sidebar( 'blog', 'single_post', 'fullwidth' ) ) {
							blockst_sidebar( 'blockst-blog-sidebar' );
						}
					?>

				</div>
			</div>

		</div> <!-- .section-wrap -->

	<?php endif; ?>

<?php endwhile; ?>

<?php get_footer(); ?>