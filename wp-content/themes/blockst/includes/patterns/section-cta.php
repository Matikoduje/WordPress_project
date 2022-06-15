<?php
/**
 * Section CTA
 */
return array(
	'title'      => esc_html__( 'CTA', 'blockst' ),
	'categories' => array( 'blockst-sections' ),
	'content'    => '
			<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","right":"40px","bottom":"80px","left":"40px"}}},"backgroundColor":"black","layout":{"inherit":true}} -->
			<div class="wp-block-group alignfull has-black-background-color has-background" style="padding-top:80px;padding-right:40px;padding-bottom:80px;padding-left:40px"><!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","width":"75%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:75%"><!-- wp:paragraph {"textColor":"white","fontSize":"medium"} -->
			<p class="has-white-color has-text-color has-medium-font-size">' . esc_html__( 'We develop enjoyable consumer experiences, from digital strategy and content to media and analysis. Leading to meaningful results and satisfied clients.', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"25%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:25%"><!-- wp:group {"layout":{"type":"default"}} -->
			<div class="wp-block-group"><!-- wp:buttons {"layout":{"type":"flex","justifyContent":"right"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"textColor":"white","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-white-color has-text-color">' . esc_html__( 'VIEW ALL', 'blockst' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->'
);