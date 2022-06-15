<?php
/**
 * Section info boxes
 */
return array(
	'title'      => esc_html__( 'Info Boxes', 'blockst' ),
	'categories' => array( 'blockst-sections' ),
	'content'    => '
			<!-- wp:group -->
			<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":"30px"}}} -->
			<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"48px","right":"48px","bottom":"48px","left":"48px"}}},"backgroundColor":"quaternary"} -->
			<div class="wp-block-column has-quaternary-background-color has-background" style="padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"small"} -->
			<h3 class="has-text-align-center has-small-font-size">' . esc_html__( 'Open Hours', 'blockst' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html__( 'Mon-Fri: 9 AM – 6 PM', 'blockst' ) . '<br>' . esc_html__( 'Saturday: 9 AM – 4 PM', 'blockst' ) . '<br>' . esc_html__( 'Sunday: Closed', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"padding":{"top":"48px","right":"48px","bottom":"48px","left":"48px"}}},"backgroundColor":"quaternary"} -->
			<div class="wp-block-column has-quaternary-background-color has-background" style="padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"small"} -->
			<h3 class="has-text-align-center has-small-font-size">' . esc_html__( 'Address', 'blockst' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html__( '175 W street name, New York,', 'blockst' ) . '<br>' . esc_html__( 'NY 10015', 'blockst' ) . '<br><a href="#">' . esc_html__( 'Check Location', 'blockst' ) . '</a></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"padding":{"top":"48px","right":"48px","bottom":"48px","left":"48px"}}},"backgroundColor":"quaternary"} -->
			<div class="wp-block-column has-quaternary-background-color has-background" style="padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:heading {"textAlign":"center","level":3,"fontSize":"small"} -->
			<h3 class="has-text-align-center has-small-font-size">' . esc_html__( 'Contact Info', 'blockst' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html__( 'Telephone: +1(800)123-4565', 'blockst' ) . '<br>' . esc_html__( 'Email: ', 'blockst' ) . '<a href="mailto:info@yoursite.com">info@yoursite.com</a><br><a href="#">' . esc_html__( 'Contact Form', 'blockst' ) . '</a></p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:spacer -->
			<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:group -->',
);