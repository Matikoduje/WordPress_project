<?php
/**
 * Theme admin functions.
 *
 * @package Blockst
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}

/**
* Add admin menu
*
* @since 1.0.0
*/
function blockst_theme_admin_menu() {
	add_theme_page(
		esc_html__( 'Blockst Getting Started', 'blockst' ),
		esc_html__( 'Blockst', 'blockst' ),
		'manage_options',
		'blockst-theme',
		'blockst_admin_page_content',
		30
	);
}
add_action( 'admin_menu', 'blockst_theme_admin_menu' );


/**
* Add admin page content
*
* @since 1.0.0
*/
function blockst_admin_page_content() {
	$theme = wp_get_theme();
	$theme_name = 'Blockst';
	$active_theme_name  = strtolower( preg_replace( '#[^a-zA-Z]#', '', $theme->template ) );
	$docs_url = 'https://docs.deothemes.com/blockst/knowledgebase/';

	$urls = array(
		'theme-url'									=> 'https://blockst.deothemes.com/',
		'rating-url'								=> 'https://wordpress.org/support/theme/blockst/reviews/?rate=5#new-post',
		'docs' 											=> 'https://docs.deothemes.com/blockst',
		'video-tutorials'						=> 'https://www.youtube.com/watch?v=FrtZjnZINqo&list=PLaPNmyRO67T1tWls03MNYDgT5Q0tS2Mjm',
		'page-layout'								=> $docs_url . 'page-layout',
		'gdpr'											=> $docs_url . 'gdpr',
		'home-page-demos'						=> $docs_url . 'home-page-demos'
	);

	$buttons = array(
		'logo' => array(
			'link_url'		 => admin_url( 'customize.php?autofocus[section]=blockst_settings_logo' ),
			'link_text'    => esc_html__( 'Logo', 'blockst' ),
			'icon'    		 => 'dashicons dashicons-format-image',
		),
		'header' => array(
			'link_url'		 => admin_url( 'customize.php?autofocus[panel]=blockst_settings_header' ),
			'link_text'    => esc_html__( 'Header', 'blockst' ),
			'icon'    		 => 'dashicons dashicons-align-center',
		),
		'footer' => array(
			'link_url'		 => admin_url( 'customize.php?autofocus[section]=blockst_settings_footer' ),
			'link_text'    => esc_html__( 'Footer', 'blockst' ),
			'icon'				 => 'dashicons dashicons-align-full-width'
		),
		'layout' => array(
			'link_url'		 => admin_url( 'customize.php?autofocus[panel]=blockst_settings_layout' ),
			'link_text'    => esc_html__( 'Layout', 'blockst' ),
			'icon'				 => 'dashicons dashicons-layout'
		),
		'colors' => array(
			'link_url'		 => admin_url( 'customize.php?autofocus[panel]=blockst_settings_colors' ),
			'link_text'    => esc_html__( 'Colors', 'blockst' ),
			'icon'				 => 'dashicons dashicons-admin-appearance'
		),
		'typography' => array(
			'link_url'		 => admin_url( 'customize.php?autofocus[section]=blockst_settings_typography' ),
			'link_text'    => esc_html__( 'Typography', 'blockst' ),
			'icon'				 => 'dashicons dashicons-editor-textcolor'
		),
		'customizer' => array(
			'link_url'		 => admin_url( 'customize.php' ),
			'link_text'    => esc_html__( 'Customizer', 'blockst' ),
			'icon'				 => 'dashicons dashicons-admin-generic'
		),
	);

	if ( defined( 'BLOCKST_CORE_VERSION' ) ) {
		$buttons['adobe_fonts'] = array(
			'link_url'		 => admin_url( 'admin.php?page=blockst-core-custom-typekit-fonts' ),
			'link_text'    => esc_html__( 'Adobe Fonts', 'blockst' ),
			'icon'				 => 'dashicons dashicons-editor-spellcheck'
		);
	}

	$videos = array(
		'theme-installation' => array(
			'links' => array(
				array(
					'link_url'		 => 'https://www.youtube.com/watch?v=FrtZjnZINqo',
					'link_text'    => esc_html__( 'Theme Installation', 'blockst' ),
					'link_img_src' => BLOCKST_URI . '/assets/admin/img/videos/blockst_video_demo_import.jpg'
				)
			)
		),
	);

	$info = array(
		'page-layouts' => array(
			'title'			=> esc_html__( 'Page Layout', 'blockst' ),
			'class'			=> 'blockst-addon-list-item',
			'title_url' => $urls['page-layout'],
			'links'			=> array(
				array(
					'link_class'	 => 'blockst-learn-more',
					'link_url'		 => $urls['page-layout'],
					'link_text'    => esc_html__( 'Learn More &#187;', 'blockst' ),
					'target_blank' => true
				),
			),
		),
		'gdpr' => array(
			'title'			=> esc_html__( 'GDPR Tools', 'blockst' ),
			'class'			=> 'blockst-addon-list-item',
			'title_url' => $urls['gdpr'],
			'links'			=> array(
				array(
					'link_class'	 => 'blockst-learn-more',
					'link_url'		 => $urls['gdpr'],
					'link_text'    => esc_html__( 'Learn More &#187;', 'blockst' ),
					'target_blank' => true
				),
			),
		),				
	);

	$features = array(
		'demos' => array(
			'title'			=> esc_html__( 'Home pages', 'blockst' ),
			'url'				=> '',
			'free'			=> esc_html__( '1', 'blockst' ),
			'pro'				=> esc_html__( '2', 'blockst' ),
		),
		'header-layouts' => array(
			'title'			=> esc_html__( 'Header layouts', 'blockst' ),
			'url'				=> '',
			'free'			=> esc_html__( '1', 'blockst' ),
			'pro'				=> esc_html__( '2', 'blockst' )
		),
		'rtl-translation' => array(
			'title'			=> esc_html__( 'RTL and translation ready', 'blockst' ),
			'url'				=> '',
			'free'			=> '<i class="blockst-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>',
			'pro'				=> '<i class="blockst-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>'
		),
		'demo-import' => array(
			'title'			=> esc_html__( 'One Click Demo Import', 'blockst' ),
			'url'				=> '',
			'free'			=> '<i class="blockst-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>',
			'pro'				=> '<i class="blockst-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>'
		),	
		'24-7-support' => array(
			'title'			=> esc_html__( 'Priority email support', 'blockst' ),
			'url'				=> '',
			'free'			=> '<i class="blockst-list-item-icon blockst-list-item-icon--no dashicons dashicons-no" aria-hidden="true"></i>',
			'pro'				=> '<i class="blockst-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>'
		),
		'single-post-layouts' => array(
			'title'			=> esc_html__( 'Single post layouts', 'blockst' ),
			'url'				=> '',
			'free'			=> esc_html__( '1', 'blockst' ),
			'pro'				=> esc_html__( '2', 'blockst' )
		),
		'premium-blockst' => array(
			'title'			=> esc_html__( 'Premium blocks', 'blockst' ),
			'url'				=> '',
			'free'			=> '<i class="blockst-list-item-icon blockst-list-item-icon--no dashicons dashicons-no" aria-hidden="true"></i>',
			'pro'				=> '<i class="blockst-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>'
		),
		'woocommerce-support' => array(
			'title'			=> esc_html__( 'WooCommerce support', 'blockst' ),
			'url'				=> '',
			'free'			=> '<i class="blockst-list-item-icon blockst-list-item-icon--no dashicons dashicons-no" aria-hidden="true"></i>',
			'pro'				=> '<i class="blockst-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>'
		),
		'google-map' => array(
			'title'			=> esc_html__( 'Google map', 'blockst' ),
			'url'				=> '',
			'free'			=> '<i class="blockst-list-item-icon blockst-list-item-icon--no dashicons dashicons-no" aria-hidden="true"></i>',
			'pro'				=> '<i class="blockst-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>'
		),
		'newsletter-popup' => array(
			'title'			=> esc_html__( 'Newsletter popup', 'blockst' ),
			'url'				=> '',
			'free'			=> '<i class="blockst-list-item-icon blockst-list-item-icon--no dashicons dashicons-no" aria-hidden="true"></i>',
			'pro'				=> '<i class="blockst-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>'
		),
		'gdpr' => array(
			'title'			=> esc_html__( 'GDPR tools', 'blockst' ),
			'url'				=> '',
			'free'			=> '<i class="blockst-list-item-icon blockst-list-item-icon--no dashicons dashicons-no" aria-hidden="true"></i>',
			'pro'				=> '<i class="blockst-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>'
		),
		'acf-pro' => array(
			'title'			=> esc_html__( 'ACF Pro integrated', 'blockst' ),
			'url'				=> '',
			'free'			=> '<i class="blockst-list-item-icon blockst-list-item-icon--no dashicons dashicons-no" aria-hidden="true"></i>',
			'pro'				=> '<i class="blockst-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>'
		),
		'dynamic-portfolio' => array(
			'title'			=> esc_html__( 'Dynamic portfolio', 'blockst' ),
			'url'				=> '',
			'free'			=> '<i class="blockst-list-item-icon blockst-list-item-icon--no dashicons dashicons-no" aria-hidden="true"></i>',
			'pro'				=> '<i class="blockst-list-item-icon dashicons dashicons-yes" aria-hidden="true"></i>'
		),		
		'typography' => array(
			'title'			=> esc_html__( 'Typography', 'blockst' ),
			'url'				=> '',
			'free'			=> esc_html__( 'Google Fonts', 'blockst' ),
			'pro'				=> esc_html__( 'Google Fonts + Adobe Fonts', 'blockst' )
		),
		'colors' => array(
			'title'			=> esc_html__( 'Colors', 'blockst' ),
			'url'				=> '',
			'free'			=> esc_html__( 'Limited', 'blockst' ),
			'pro'				=> esc_html__( 'Advanced', 'blockst' )
		),	
	);

	?>

		<div class="blockst-page-header">
			<div class="blockst-page-header__container">
				<div class="blockst-page-header__branding">
					<a href="<?php echo esc_url( $urls['theme-url'] ); ?>" target="_blank" rel="noopener" >
						<img src="<?php echo esc_url( BLOCKST_URI . '/assets/admin/img/theme_logo.png' ); ?>" class="blockst-page-header__logo" alt="<?php echo esc_attr__( 'Blockst', 'blockst' ); ?>" />
					</a>
					<span class="blockst-theme-version"><?php echo esc_html( BLOCKST_VERSION ); ?></span>
				</div>
				<div class="blockst-page-header__tagline">
					<span  class="blockst-page-header__tagline-text">				
						<?php echo esc_html__( 'Made by ', 'blockst' ); ?>
						<a href="https://deothemes.com/"><?php echo esc_html__( 'DeoThemes', 'blockst' ); ?></a>						
					</span>					
				</div>				
			</div>
		</div>

		<div class="wrap blockst-container">
			<div class="blockst-grid">

				<div class="blockst-grid-content">
					<div class="blockst-body">

						<h1 class="blockst-title"><?php esc_html_e( 'Getting Started', 'blockst' ); ?></h1>
						<p class="blockst-intro-text">
							<?php echo esc_html__( 'Blockst is now installed and ready to use. Get ready to build something beautiful. To get started check the links below. We hope you enjoy it!', 'blockst' ); ?>
						</p>
						
						<?php
							$wizard_completed = get_option( 'merlin_' . $active_theme_name . '_completed' );

							if ( ! $wizard_completed ) : ?>
								<a href="<?php echo esc_url( admin_url( 'themes.php?page=merlin' ) ); ?>" class="button button-primary button-hero">
									<?php echo esc_html__( 'Run Setup Wizard', 'blockst' ); ?>
								</a>
							<?php endif;
						?>

						<!-- Navigation Buttons -->
						<ul class="blockst-navigation-buttons">
							<?php foreach ( $buttons as $button => $link ) {
								echo '<li class="blockst-navigation-buttons__item">';
									echo '<a href="' . esc_url( $link['link_url'] ) . '" class="blockst-navigation-buttons__url">';
										echo '<span class="blockst-navigation-buttons__icon ' . esc_attr( $link['icon'] ) . '"></span>';
										echo '<span class="blockst-navigation-buttons__label">' . esc_html( $link['link_text'] ) . '</span>';
									echo '</a>';
								echo '</li>';
							}	?>
						</ul>

						<!-- Comparison -->
						<section class="blockst-section">
							<h2 class="blockst-heading"><?php echo esc_html__( 'Free Vs Pro', 'blockst' ); ?></h2>
							<table class="blockst-comparison widefat striped table-view-list">
								<thead>
									<tr>
										<th><span><?php echo esc_html__( 'Features', 'blockst' ); ?></span></th>
										<th><span><?php printf( esc_html__( '%s Free', 'blockst' ), $theme_name ); ?></span></th>
										<th><span><?php printf( esc_html__( '%s Pro', 'blockst' ), $theme_name ); ?></span></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ( $features as $feature ) : ?>
										<tr>
											<td><?php echo esc_html( $feature['title'] ); ?></td>
											<td><?php echo wp_kses( $feature['free'], array(
												'i' => array(
													'class' => array(),
													'aria-hidden' => array()
												)
											) ); ?></td>
											<td><?php echo wp_kses( $feature['pro'], array(
												'i' => array(
													'class' => array(),
													'aria-hidden' => array()
												)
											) ); ?></td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
							<a href="<?php echo esc_url( blockst_fs()->get_upgrade_url() ); ?>" class="button button-primary button-hero">
								<span><?php echo esc_html__( 'Get Pro', 'blockst' ); ?></span>
							</a>
						</section>
						
					</div> <!-- .body -->
				</div> <!-- .content -->
				
				<aside class="blockst-grid-sidebar">
					<div class="blockst-grid-sidebar-widget-area">

						<div class="blockst-widget">
							<h2 class="blockst-widget-title"><?php echo esc_html__( 'Useful Links', 'blockst' ); ?></h2>
							<ul class="blockst-useful-links">
								<li>
									<a href="https://wordpress.org/support/theme/blockst/reviews/#new-post" target="_blank"><?php echo esc_html__( 'Rate Us ★★★★★', 'blockst' ); ?></a>
								</li>
								<li>
									<a href="https://docs.deothemes.com/blockst" target="_blank"><?php echo esc_html__( 'Knowledge Base', 'blockst' ); ?></a>
								</li>
								<li>
									<a href="<?php echo esc_url( admin_url( 'themes.php?page=blockst-theme-contact' ) ); ?>"><?php echo esc_html__( 'Support', 'blockst' ); ?></a>
								</li>
							</ul>
						</div>

						<div class="blockst-widget blockst-widget-video-tutorials">
							<h2 class="blockst-widget-title"><?php esc_html_e( 'Video Tutorials', 'blockst' ) ?></h2>
							<ul class="blockst-video-tutorials">
								<?php
								foreach ( (array) $videos as $video_items => $video ) {
									echo '<li class="blockst-video-tutorials__item">';
										foreach ( $video['links'] as $key => $link ) {
											echo '<a href="' . esc_url( $link['link_url'] ) . '" class="blockst-video-tutorials__url" target="_blank" rel="noopener">';
												echo '<img src="' . esc_url( $link['link_img_src'] ) . '" alt="' . esc_html( $link['link_text'] ) . '" class="blockst-video-tutorials__img" />';
												echo '<span class="blockst-video-tutorials__label">' . esc_html( $link['link_text'] ) . '</span>';
											echo '</a>';
										}
									echo '</li>';
								}
								?>
							</ul>
						</div>					

					</div>					
				</aside>	

			</div> <!-- .grid -->

		</div>
	<?php
}


/**
* Adds an admin notice upon successful activation.
*/
function blockst_activation_admin_notice() {
	global $current_user;
	global $current_screen;

	// Don't show on Blockst main admin page
	if ( $current_screen->id === 'appearance_page_blockst-theme' || $current_screen->id === 'toplevel_page_blockst' ) {
		return;
	}

	if ( is_admin() ) {

		$current_theme = wp_get_theme();
		$welcome_dismissed = get_user_meta( $current_user->ID, 'blockst_wizard_admin_notice' );

		if ( ( $current_theme->get('Name') == "Blockst" || $current_theme->get('Name') == "Blockst Pro" ) && ! $welcome_dismissed ) {
			add_action( 'admin_notices', 'blockst_wizard_admin_notice', 99 );
		}

		wp_enqueue_style( 'blockst-wizard-notice-css', get_template_directory_uri() . '/assets/admin/css/wizard-notice.css' );

	}
}
add_action( 'current_screen', 'blockst_activation_admin_notice' );



/**
* Adds a button to dismiss the notice
*/
function blockst_dismiss_wizard_notice() {
	global $current_user;
	$user_id = $current_user->ID;

	if ( isset( $_GET['blockst_wizard_dismiss'] ) && $_GET['blockst_wizard_dismiss'] == '1' ) {
		add_user_meta( $user_id, 'blockst_wizard_admin_notice', 'true', true );
	}
}
add_action( 'admin_init', 'blockst_dismiss_wizard_notice', 1 );


/**
* Display an admin notice linking to the wizard screen
*/
function blockst_wizard_admin_notice() {
	if ( current_user_can( 'customize' ) ) : ?>
		<div class="notice theme-notice">
			<div class="theme-notice-logo">
				<img src="<?php echo esc_url( BLOCKST_URI . '/assets/admin/img/theme_logo_white.png' ); ?>" alt="<?php esc_attr_e( 'Blockst', 'blockst' ) ?>">
			</div>
			<div class="theme-notice-message wp-theme-fresh">
				<h2><?php esc_html_e( 'Thank you for choosing Blockst!', 'blockst' ); ?></h2>
				<?php if ( class_exists( 'Merlin' ) ) : ?>
					<p class="about-description"><?php esc_html_e( 'Run the Setup Wizard to configure your new theme and begin customizing your site.', 'blockst' ); ?></p>
				<?php else : ?>
					<p class="about-description"><?php esc_html_e( 'Follow the steps to configure your new theme and begin customizing your site.', 'blockst' ); ?></p>
				<?php endif; ?>
			</div>
			<div class="theme-notice-cta">
				<?php if ( class_exists( 'Merlin' ) ) : ?>
					<a href="<?php echo esc_url( admin_url( 'themes.php?page=merlin' ) ); ?>" class="button button-primary button-hero" style="text-decoration: none;"><?php esc_html_e( 'Run Setup Wizard', 'blockst' ); ?></a>
				<?php else : ?>
					<a href="<?php echo esc_url( admin_url( 'themes.php?page=blockst-theme' ) ); ?>" class="button button-primary button-hero" style="text-decoration: none;"><?php esc_html_e( 'Setup Instructions', 'blockst' ); ?></a>
				<?php endif; ?>
				<a href="<?php echo esc_url( wp_nonce_url( add_query_arg( 'blockst_wizard_dismiss', '1' ) ) ); ?>" class="notice-dismiss" target="_parent"></a>
			</div>
		</div>
	<?php endif;
}




/**
* Change theme icon
*
* @since 1.0.0
*/
function blockst_fs_custom_icon() {
	return BLOCKST_DIR . '/assets/admin/img/theme-icon.png';
} 
blockst_fs()->add_filter( 'plugin_icon' , 'blockst_fs_custom_icon' );

/**
 * Add extra permissions to Freemius
 */
function blockst_freemius_extra_permissions( $permissions ) {
	$permissions['newsletter'] = array(
		'icon-class' => 'dashicons dashicons-email-alt',
		'label'      => blockst_fs()->get_text_inline( 'Newsletter', 'blockst' ),
		'desc'       => blockst_fs()->get_text_inline( 'Your email is added to our newsletter. Updates, announcements, marketing, no spam. Unsubscribe anytime.', 'blockst' ),
		'priority'   => 15,
	);
	return $permissions;
}
blockst_fs()->add_filter( 'permission_list', 'blockst_freemius_extra_permissions' );
