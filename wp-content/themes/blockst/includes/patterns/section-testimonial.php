<?php
/**
 * Section testimonial
 */
return array(
	'title'      => esc_html__( 'Testimonial', 'blockst' ),
	'categories' => array( 'blockst-sections' ),
	'content'    => '
			<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"40px","left":"40px"}}},"backgroundColor":"quaternary","layout":{"inherit":true}} -->
			<div class="wp-block-group alignfull has-quaternary-background-color has-background" style="padding-right:40px;padding-left:40px"><!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"168px","lineHeight":"0.4"}}} -->
			<h2 class="has-text-align-center" style="font-size:168px;line-height:0.4">“</h2>
			<!-- /wp:heading -->

			<!-- wp:spacer {"height":"30px"} -->
			<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:group {"layout":{"contentSize":"1000px"}} -->
			<div class="wp-block-group"><!-- wp:paragraph {"align":"center","textColor":"secondary","fontSize":"large"} -->
			<p class="has-text-align-center has-secondary-color has-text-color has-large-font-size">' . esc_html__( 'Launch your creative ideas. Whatever you imagine we will make it happen with our team of specialists.', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->

			<!-- wp:spacer {"height":"20px"} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading {"textAlign":"center","level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small"} -->
			<h3 class="has-text-align-center has-small-font-size" style="font-style:normal;font-weight:500">' . esc_html__( '— Matt Mullenweg, 2017', 'blockst' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:spacer {"height":"120px"} -->
			<div style="height:120px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:group -->',
);