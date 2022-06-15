<?php
/**
 * Single post
 *
 * @package Blockst
 */
?>

<?php 
	$tags_show = get_theme_mod( 'blockst_settings_post_tags_show', true );
	$socials_share_show = get_theme_mod( 'blockst_settings_post_share_buttons_show', true );
?>

<div class="single-post__content">
	<article id="post-<?php the_ID(); ?>" <?php post_class( 'entry single-post__entry' ); ?>>

		<?php blockst_entry_content_top(); ?>

		<div class="entry__article clearfix">
			<?php the_content(); ?>
		</div>

		<?php blockst_multi_page_pagination(); ?>

		<?php blockst_entry_content_bottom(); ?>

	</article><!-- #post-## -->

	<?php if ( ( $tags_show && has_tag() ) || ( function_exists( 'blockst_social_sharing_buttons' ) && $socials_share_show ) ) : ?>
		<div class="entry__share-tags">
			<div class="row align-items-center">
				<?php if ( $tags_show && has_tag() ) : ?>
					<div class="<?php if ( $socials_share_show && function_exists( 'blockst_social_sharing_buttons' ) ) { echo 'col-lg-6'; } else { echo 'col-lg-12'; } ?>">
						<!-- Tags -->
						<div class="entry__tags">				 
							<?php the_tags( '', '', '' ); ?>
						</div> <!-- end tags -->
					</div>
				<?php endif; ?>

				<?php if ( $socials_share_show && function_exists( 'blockst_social_sharing_buttons' ) ) : ?>
					<div class="<?php if ( $tags_show ) { echo 'col-lg-6'; } else { echo 'col-lg-12'; } ?>">
						<!-- Share -->
						<div class="entry__share <?php if ( $tags_show && has_tag() ) { echo 'entry__share--right'; } ?>">
							<?php echo blockst_social_sharing_buttons(); ?>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</div>
	<?php endif; ?>

	<?php blockst_post_nav(); ?>

	<?php if ( get_theme_mod( 'blockst_settings_author_box_show', true ) ) {
		blockst_author_box();
	} ?>

	<?php if ( get_theme_mod( 'blockst_settings_related_posts_show', true ) ) {
		blockst_related_posts();
	} ?>

	<?php
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	?>

</div> <!-- .single-post__content -->
