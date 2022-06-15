<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package Blockst
 */

get_header();

$title = get_theme_mod( 'blockst_settings_page_404_title', __( 'Page not found', 'blockst' ) );
$description = get_theme_mod( 'blockst_settings_page_404_description', __( 'The page you were looking for could not be found.', 'blockst' ) );
$button_text = get_theme_mod( 'blockst_settings_page_404_button_text', __( 'Back to Home', 'blockst' ) );

?>

<div class="page-404-section">

	<div class="container text-center">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<main class="site-main" role="main">

					<div class="page-404" style="background-image: url( <?php echo esc_url( BLOCKST_URI . '/assets/img/404/404.png' ); ?>)">						
						<h1 class="page-404__title mt-32"><?php echo esc_html( $title ); ?></h1>
						<p class="page-404__text mb-40"><?php echo esc_html( $description ); ?></p>

						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--lg btn--color btn--icon hover-pulse">
							<span><?php echo esc_html( $button_text ); ?></span>
							<svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0z"/><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"/></svg>
						</a>
					</div>

				</main>
			</div>
		</div>				
	</div>

</div>

<?php get_footer();