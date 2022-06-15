<?php
 /**
	* This file adds block styles to the Blocks WordPress theme.
	*
	* @since 	 1.0
	* @package Blocks
	* @link    https://blocks.deothemes.com
	*/


/**
 * Block Styles
 */
if ( function_exists( 'register_block_style' ) ) {
	register_block_style( 'core/button', array(
		'name' 				 => 'blockst-button-arrow-icon',
		'label'        => __( 'Arrow icon', 'blockst' ),
		'inline_style' => '
			.is-style-blockst-button-arrow-icon .wp-block-button__link::after {
				content: "";
				width: 18px;
				height: 18px;
				margin-left: 10px;
				background-image: url( "data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' viewBox=\'0 0 24 24\' width=\'24\' height=\'24\'%3E%3Cpath fill=\'none\' d=\'M0 0h24v24H0z\'/%3E%3Cpath fill=\'%23ffffff\' d=\'M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z\'/%3E%3C/svg%3E");
				background-size: cover;
				background-position: center;
				display: inline-block;
				transition: transform var(--deo-transition);
			}
			.is-style-blockst-button-arrow-icon .wp-block-button__link {
				display: inline-flex;
				align-items: center;
			}
			.is-style-blockst-button-arrow-icon .wp-block-button__link:hover::after {
				transform: translateX(6px);
			}
			'
	));
}

if ( function_exists( 'register_block_style' ) ) {
	register_block_style( 'core/column', array(
		'name' 				 => 'blockst-negative-offset-left',
		'label'        => __( 'Negative offset left', 'blockst' ),
	));
}