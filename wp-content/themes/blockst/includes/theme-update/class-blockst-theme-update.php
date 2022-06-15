<?php
/**
 * Theme update logic.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Blockst
 * @since 		 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if ( ! class_exists( 'Blockst_Theme_Update' ) ) {

	/**
	 * Blockst_Theme_Update initial setup
	 *
	 * @since 1.0.3
	 */
	class Blockst_Theme_Update {

		/**
		 * Class instance.
		 *
		 * @access private
		 * @var $instance Class instance.
		 */
		private static $instance;

		/**
		 * Initiator
		 */
		public static function get_instance() {
			if ( ! isset( self::$instance ) ) {
				self::$instance = new self();
			}
			return self::$instance;
		}

		/**
		 *  Constructor
		 */
		public function __construct() {
			if ( is_admin() ) {				
				add_action( 'admin_init', __CLASS__ . '::init', 5 );		
			} else {
				add_action( 'wp', __CLASS__ . '::init', 5 );			
			}
		}

		/**
		 * Implement theme update logic.
		 *
		 * @since 1.0.0
		 */
		public static function init() {

			// Get auto saved version number.
			$saved_version = get_option( 'blockst_theme_version', false );

			// If equals then return.
			if ( version_compare( $saved_version, BLOCKST_VERSION, '=' ) ) {
				return;
			}

			// Update auto saved version number.
			update_option( 'blockst_theme_version', BLOCKST_VERSION );

		}

	}
}

/**
 * Kicking this off by calling 'get_instance()' method
 */
Blockst_Theme_Update::get_instance();