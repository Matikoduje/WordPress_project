<?php
/**
 * Merlin WP configuration file.
 *
 * @package   Merlin WP
 * @version   @@pkg.version
 * @link      https://merlinwp.com/
 * @author    Rich Tabor, from ThemeBeans.com & the team at ProteusThemes.com
 * @copyright Copyright (c) 2018, Merlin WP of Inventionn LLC
 * @license   Licensed GPLv3 for Open Source Use
 */

if ( ! class_exists( 'Merlin' ) ) {
	return;
}

/**
 * Set directory locations, text strings, and settings.
 */
$wizard = new Merlin(

	$config = array(
		'directory'            => 'includes/merlin', // Location / directory where Merlin WP is placed in your theme.
		'merlin_url'           => 'merlin', // The wp-admin page slug where Merlin WP loads.
		'parent_slug'          => 'themes.php', // The wp-admin parent page slug for the admin menu item.
		'capability'           => 'manage_options', // The capability required for this menu to be displayed to the user.
		'child_action_btn_url' => 'https://codex.wordpress.org/child_themes', // URL for the 'child-action-link'.
		'dev_mode'             => false, // Enable development mode for testing.
		'ready_big_button_url' => home_url( '/' ), // Link for the big button on the ready step.
	),
	$strings = array(
		'admin-menu'               => esc_html__( 'Theme Setup', 'blockst' ),

		/* translators: 1: Title Tag 2: Theme Name 3: Closing Title Tag */
		'title%s%s%s%s'            => esc_html__( '%1$s%2$s Themes &lsaquo; Theme Setup: %3$s%4$s', 'blockst' ),
		'return-to-dashboard'      => esc_html__( 'Return to the dashboard', 'blockst' ),
		'ignore'                   => esc_html__( 'Disable this wizard', 'blockst' ),

		'btn-skip'                 => esc_html__( 'Skip', 'blockst' ),
		'btn-next'                 => esc_html__( 'Next', 'blockst' ),
		'btn-start'                => esc_html__( 'Start', 'blockst' ),
		'btn-no'                   => esc_html__( 'Cancel', 'blockst' ),
		'btn-plugins-install'      => esc_html__( 'Install', 'blockst' ),
		'btn-child-install'        => esc_html__( 'Install', 'blockst' ),
		'btn-content-install'      => esc_html__( 'Install', 'blockst' ),
		'btn-import'               => esc_html__( 'Import', 'blockst' ),
		'btn-license-activate'     => esc_html__( 'Upgrade', 'blockst' ),

		/* translators: Theme Name */
		'pro-version-header%s'		 => esc_html__( '%s Pro Features', 'blockst' ),
		'pro-version-text%s'			 => esc_html__( 'Build better websites with %s Pro. Save tons of time.', 'blockst' ),

		/* translators: Theme Name */
		'welcome-header%s'         => esc_html__( 'Welcome to %s', 'blockst' ),
		'welcome-header-success%s' => esc_html__( 'Hi. Welcome back', 'blockst' ),
		'welcome%s'                => esc_html__( 'This wizard will set up your theme, install plugins, and import content. It should take only a few minutes.', 'blockst' ),
		'welcome-success%s'        => esc_html__( 'You may have already run this theme setup wizard. If you would like to proceed anyway, click on the "Start" button below.', 'blockst' ),

		'child-header'             => esc_html__( 'Install Child Theme', 'blockst' ),
		'child-header-success'     => esc_html__( 'You\'re good to go!', 'blockst' ),
		'child'                    => esc_html__( 'Let\'s build & activate a child theme so you may easily make theme changes.', 'blockst' ),
		'child-success%s'          => esc_html__( 'Your child theme has already been installed and is now activated, if it wasn\'t already.', 'blockst' ),
		'child-action-link'        => esc_html__( 'Learn about child themes', 'blockst' ),
		'child-json-success%s'     => esc_html__( 'Awesome. Your child theme has already been installed and is now activated.', 'blockst' ),
		'child-json-already%s'     => esc_html__( 'Awesome. Your child theme has been created and is now activated.', 'blockst' ),

		'plugins-header'           => esc_html__( 'Install Plugins', 'blockst' ),
		'plugins-header-success'   => esc_html__( 'You\'re up to speed!', 'blockst' ),
		'plugins'                  => esc_html__( 'Let\'s install some essential WordPress plugins to get your site up to speed.', 'blockst' ),
		'plugins-success%s'        => esc_html__( 'The required WordPress plugins are all installed and up to date. Press "Next" to continue the setup wizard.', 'blockst' ),
		'plugins-action-link'      => esc_html__( 'Advanced', 'blockst' ),

		'import-header'            => esc_html__( 'Import Content', 'blockst' ),
		'import'                   => esc_html__( 'Let\'s import content to your website. This could take some minutes. Please wait.', 'blockst' ),
		'import-demo-link'         => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://blockst.deothemes.com', esc_html__( 'Explore Demos', 'blockst' ) ),
		'import-action-link'       => esc_html__( 'Advanced', 'blockst' ),

		'ready-header'             => esc_html__( 'All done. Have fun!', 'blockst' ),

		/* translators: Theme Author */
		'ready%s'                  => esc_html__( 'Your theme has been all set up. Enjoy your new theme by %s.', 'blockst' ),
		'ready-action-link'        => esc_html__( 'Extras', 'blockst' ),
		'ready-big-button'         => esc_html__( 'View your website', 'blockst' ),
		'ready-link-1'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', 'https://docs.deothemes.com/blockst/', esc_html__( 'Documentation', 'blockst' ) ),
		'ready-link-2'             => sprintf( '<a href="%1$s" target="_blank">%2$s</a>', admin_url( 'themes.php?page=blockst-theme-contact' ), esc_html__( 'Get Theme Support', 'blockst' ) ),
		'ready-link-3'             => sprintf( '<a href="%1$s">%2$s</a>', admin_url( 'customize.php' ), esc_html__( 'Start Customizing', 'blockst' ) ),
	),
	$features = array(
		array(
			'title' => esc_html__( '2 Home page demos', 'blockst' ),
			'url' 	=> 'https://blockst.deothemes.com',
		),
		array(
			'title' => esc_html__( '2 Header layouts', 'blockst' ),
			'url' 	=> 'https://docs.deothemes.com/blockst/knowledgebase/header-layouts',
		),
		array(
			'title' => esc_html__( '2 Single post layouts', 'blockst' ),
			'url' 	=> 'https://docs.deothemes.com/blockst/knowledgebase/single-post-layouts',
		),
		array(
			'title' => esc_html__( 'Premium blocks', 'blockst' ),
			'url' 	=> 'https://docs.deothemes.com/blockst/knowledgebase/premium-blocks',
		),		
		array(
			'title' => esc_html__( 'WooCommerce integration', 'blockst' ),
			'url' 	=> 'https://blockst.deothemes.com/online-store/',
		),
		array(
			'title' => esc_html__( 'Google map', 'blockst' ),
			'url' 	=> 'https://docs.deothemes.com/blockst/knowledgebase/google-map',
		),
		array(
			'title' => esc_html__( 'Newsletter popup', 'blockst' ),
			'url' 	=> 'https://blockst.deothemes.com/newsletter-popup',
		),
		array(
			'title' => esc_html__( 'GDPR Tools', 'blockst' ),
			'url' 	=> 'https://blockst.deothemes.com/gdpr-tools',
		),
		array(
			'title' => esc_html__( 'ACF Pro included (Save $49)', 'blockst' ),
			'url' 	=> 'https://docs.deothemes.com/blockst/knowledgebase/premium-plugins/',
		),
		array(
			'title' => esc_html__( 'Dynamic portfolio', 'blockst' ),
			'url' 	=> 'https://docs.deothemes.com/blockst/knowledgebase/dynamic-custom-post-types/',
		),
		array(
			'title' => esc_html__( 'Priority email support', 'blockst' ),
			'url' 	=> esc_url( admin_url( 'themes.php?page=blockst-theme-contact' ) ),
		)
	)
);
