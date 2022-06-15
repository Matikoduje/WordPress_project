<?php
/**
 * The template for displaying comments.
 * 
 * The area of the page that contains both current comments
 * and the comment form.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Blockst
 * @since 		 1.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<?php if ( have_comments() ) : ?>

	<div id="comments" class="entry__comments">

		<?php blockst_comments_before(); ?>

			<h2 class="entry-comments__title">    
				<?php
					comments_number( esc_html__( 'No Comments', 'blockst' ),
						esc_html__( '1 Comment', 'blockst' ),
						esc_html__( '% Comments', 'blockst' )
					);
				?>
			</h2>

			<?php the_comments_navigation(); ?>

			<ul class="comment-list">
				<?php
					wp_list_comments( array(
						'style'             => 'ul',
						'short_ping'        => true,
						'avatar_size'       => 48,
						'per_page'          => '',
						'rblockst_top_level' => true,
						'walker'            => new Blockst_Walker_Comment()
					) );
				?>
			</ul><!-- .comment-list -->

			<?php the_comments_navigation(); ?>					

		<?php
			if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
		?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'blockst' ); ?></p>
		<?php endif; ?>

	</div><!-- .entry-comments -->

<?php endif; // have_comments() ?>

<section class="section-comment-form pt-24">

	<?php
		$commenter = wp_get_current_commenter();
		$consent = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';

		$fields = array(
			'author' =>
			'<div class="row"><div class="col-lg-4"><div class="comment-form-input"><label for="author">' . esc_html__( 'Name', 'blockst' ) . '</label><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" required="required" /></div></div>',

			'email' =>
			'<div class="col-lg-4"><div class="comment-form-input"><label for="email">' . esc_html__( 'Email', 'blockst' ) . '</label><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" required="required" /></div></div>',

			'url' =>
			'<div class="col-lg-4"><div class="comment-form-input"><label for="url">' . esc_html__( 'Website', 'blockst' ) . '</label><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" /></div></div></div>',

			'cookies' =>
			'<p class="consent-checkbox"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
			'<label for="wp-comment-cookies-consent">' . esc_html__( 'Save my name, email, and website in this browser for the next time I comment.', 'blockst' ) . '</label></p>'
		);

		$args = array(
			'class_submit'  => 'btn btn--lg btn--color btn--button',
			'title_reply_before' => '<h2 class="comment-respond__title">',
			'title_reply' => esc_html__( 'Leave a Comment', 'blockst' ),
			'title_reply_after' => '</h2>',
			'comment_notes_before' => '',
			'comment_field' => '<label for="comment">' . esc_html_x( 'Comment', 'noun', 'blockst' ) . '</label><textarea id="comment" class="form-control comment-form__textarea" name="comment" rows="6" required="required"></textarea>',
			'fields' => apply_filters( 'blockst_comment_form_default_fields', $fields ),
			'submit_field' => '<p class="form-submit">%1$s %2$s</p>',
		);

		comment_form( $args );
	?>

</section> <!-- comment form -->