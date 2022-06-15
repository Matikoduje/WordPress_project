<?php
/**
 * The default footer template file
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Blockst
 * @since 		 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
} ?>

<?php
	$footer_bottom_text = get_theme_mod( 'blockst_settings_footer_bottom_text', sprintf(
		esc_html__( 'Copyright &copy; [current-year] %1$s. All rights reserved — Made by %2$sDeoThemes%3$s' , 'blockst' ),
		get_bloginfo( 'name' ),
		'<a href="https://deothemes.com">',
		'</a>'
	) );

	$footer_top_divider = get_theme_mod( 'blockst_settings_footer_top_border_show', false );
?>

<?php if ( get_theme_mod( 'blockst_settings_footer_show', true ) ) : ?>

	<!-- Footer -->
	<footer class="footer<?php if ( $footer_top_divider ) echo ' footer--top-border'; ?>" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">

		<?php if ( is_active_sidebar( 'blockst-footer-col-1' ) || is_active_sidebar( 'blockst-footer-col-2' ) || is_active_sidebar( 'blockst-footer-col-3' ) || is_active_sidebar( 'blockst-footer-col-4' ) || is_active_sidebar( 'blockst-footer-col-5' ) ) : ?>
			<?php if ( get_theme_mod( 'blockst_settings_footer_widgets_show', true ) ) : ?>
				<div class="container">

					<div class="footer__widgets">
						<div class="row row-40">

							<?php // 5 Columns
							if ( get_theme_mod( 'blockst_settings_footer_columns', 'footer-col-50-25-25' ) == 'footer-col-5' ) : ?>                

								<?php if ( is_active_sidebar( 'blockst-footer-col-1' ) ) : ?>
									<div class="col-lg col-md-6 footer__col footer__col-1">
										<?php dynamic_sidebar( 'blockst-footer-col-1' ); ?>
									</div>
								<?php endif; ?>

								<?php if ( is_active_sidebar( 'blockst-footer-col-2' ) ) : ?>
									<div class="col-lg col-md-6 footer__col footer__col-2">
										<?php dynamic_sidebar( 'blockst-footer-col-2' ); ?>
									</div>
								<?php endif; ?>

								<?php if ( is_active_sidebar( 'blockst-footer-col-3' ) ) : ?>
									<div class="col-lg col-md-6 footer__col footer__col-3">
										<?php dynamic_sidebar( 'blockst-footer-col-3' ); ?>
									</div>
								<?php endif; ?>

								<?php if ( is_active_sidebar( 'blockst-footer-col-4' ) ) : ?>
									<div class="col-lg col-md-6 footer__col footer__col-4">
										<?php dynamic_sidebar( 'blockst-footer-col-4' ); ?>
									</div>
								<?php endif; ?>

								<?php if ( is_active_sidebar( 'blockst-footer-col-5' ) ) : ?>
									<div class="col-lg col-md-6 footer__col footer__col-5">
										<?php dynamic_sidebar( 'blockst-footer-col-5' ); ?>
									</div>
								<?php endif; ?>

							<?php endif; ?>
				
							<?php // 4 Columns
							if ( get_theme_mod( 'blockst_settings_footer_columns', 'footer-col-50-25-25' ) == 'footer-col-4' ) : ?>                

								<?php if ( is_active_sidebar( 'blockst-footer-col-1' ) ) : ?>
									<div class="col-lg-3 col-md-6 footer__col footer__col-1">
										<?php dynamic_sidebar( 'blockst-footer-col-1' ); ?>
									</div>
								<?php endif; ?>

								<?php if ( is_active_sidebar( 'blockst-footer-col-2' ) ) : ?>
									<div class="col-lg-3 col-md-6 footer__col footer__col-2">
										<?php dynamic_sidebar( 'blockst-footer-col-2' ); ?>
									</div>
								<?php endif; ?>

								<?php if ( is_active_sidebar( 'blockst-footer-col-3' ) ) : ?>
									<div class="col-lg-3 col-md-6 footer__col footer__col-3">
										<?php dynamic_sidebar( 'blockst-footer-col-3' ); ?>
									</div>
								<?php endif; ?>

								<?php if ( is_active_sidebar( 'blockst-footer-col-4' ) ) : ?>
									<div class="col-lg-3 col-md-6 footer__col footer__col-4">
										<?php dynamic_sidebar( 'blockst-footer-col-4' ); ?>
									</div>
								<?php endif; ?>

							<?php endif; ?>

							<?php // 3 Columns
							if ( get_theme_mod( 'blockst_settings_footer_columns', 'footer-col-50-25-25' ) == 'footer-col-3' ) : ?>                

								<?php if ( is_active_sidebar( 'blockst-footer-col-1' ) ) : ?>
									<div class="col-lg-4 col-md-6 footer__col-1">
										<?php dynamic_sidebar( 'blockst-footer-col-1' ); ?>
									</div>
								<?php endif; ?>

								<?php if ( is_active_sidebar( 'blockst-footer-col-2' ) ) : ?>
									<div class="col-lg-4 col-md-6 footer__col-2">
										<?php dynamic_sidebar( 'blockst-footer-col-2' ); ?>
									</div>
								<?php endif; ?>

								<?php if ( is_active_sidebar( 'blockst-footer-col-3' ) ) : ?>
									<div class="col-lg-4 col-md-6 footer__col-3">
										<?php dynamic_sidebar( 'blockst-footer-col-3' ); ?>
									</div>
								<?php endif; ?>

							<?php endif; ?>

							<?php // 2 Columns
							if ( get_theme_mod( 'blockst_settings_footer_columns', 'footer-col-50-25-25' ) == 'footer-col-2' ) : ?>                

								<?php if ( is_active_sidebar( 'blockst-footer-col-1' ) ) : ?>
									<div class="col-lg-6 footer__col-1">
										<?php dynamic_sidebar( 'blockst-footer-col-1' ); ?>
									</div>
								<?php endif; ?>

								<?php if ( is_active_sidebar( 'blockst-footer-col-2' ) ) : ?>
									<div class="col-lg-6 footer__col-2">
										<?php dynamic_sidebar( 'blockst-footer-col-2' ); ?>
									</div>
								<?php endif; ?>

							<?php endif; ?>

							<?php // 1 Column
							if ( get_theme_mod( 'blockst_settings_footer_columns', 'footer-col-50-25-25' ) == 'footer-col-1' ) : ?>                

								<?php if ( is_active_sidebar( 'blockst-footer-col-1' ) ) : ?>
									<div class="col-md-12 footer__col-1">
										<?php dynamic_sidebar( 'blockst-footer-col-1' ); ?>
									</div>
								<?php endif; ?>

							<?php endif; ?>

							<?php // 50 / 25 / 25 Columns
							if ( get_theme_mod( 'blockst_settings_footer_columns', 'footer-col-50-25-25' ) == 'footer-col-50-25-25' ) : ?>                

								<?php if ( is_active_sidebar( 'blockst-footer-col-1' ) ) : ?>
									<div class="col-lg-6 footer__col-1">
										<?php dynamic_sidebar( 'blockst-footer-col-1' ); ?>
									</div>
								<?php endif; ?>

								<?php if ( is_active_sidebar( 'blockst-footer-col-2' ) ) : ?>
									<div class="col-lg-3 footer__col-2">
										<?php dynamic_sidebar( 'blockst-footer-col-2' ); ?>
									</div>
								<?php endif; ?>

								<?php if ( is_active_sidebar( 'blockst-footer-col-3' ) ) : ?>
									<div class="col-lg-3 footer__col-3">
										<?php dynamic_sidebar( 'blockst-footer-col-3' ); ?>
									</div>
								<?php endif; ?>

							<?php endif; ?>

						</div>
					</div> <!-- end footer widgets -->				
				
				</div> <!-- end container -->
			<?php endif; ?>
		<?php endif; ?>

		<?php if ( get_theme_mod( 'blockst_settings_footer_bottom_show', true ) ) : ?>
			<div class="footer__bottom">
				<div class="container">
					<div class="footer__row">
						<div class="row">						
							
							<?php if ( has_nav_menu( 'footer-bottom-menu' ) && get_theme_mod( 'blockst_settings_footer_bottom_menu_show', true ) ) : ?>						
								<div class="col-md-6">
							<?php else : ?>
								<div class="col-md-12">
							<?php endif; ?>
								<?php if ( $footer_bottom_text ) : ?>
									<div class="footer__bottom-copyright">									
										<span class="copyright">
											<?php blockst_footer_bottom_text(); ?>
										</span>
									</div>
								<?php endif; ?>
							</div>

							<?php if ( has_nav_menu( 'footer-bottom-menu' ) && get_theme_mod( 'blockst_settings_footer_bottom_menu_show', true ) ) : ?>
								<div class="col-md-6">
									<?php
										wp_nav_menu( array(
											'theme_location' => 'footer-bottom-menu',
											'menu_class'     => 'footer__nav-menu',
											'depth'          => 1,
										) );
									?>
								</div>
							<?php endif; ?>

						</div> <!-- .row -->
					</div> <!-- .footer__row -->
				</div> <!-- .container -->
			</div> <!-- .footer__bottom -->
		<?php endif; ?>

	</footer>

<?php endif; ?>	