<?php
/**
 * Section testimonials columns
 */
return array(
	'title'      => esc_html__( 'Testimonials Columns', 'blockst' ),
	'categories' => array( 'blockst-sections' ),
	'content'    => '
			<!-- wp:group {"align":"full","style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"right":"40px","left":"40px"}}},"backgroundColor":"quaternary","layout":{"inherit":true}} -->
			<div class="wp-block-group alignfull has-quaternary-background-color has-background" style="margin-top:0px;margin-bottom:0px;padding-right:40px;padding-left:40px"><!-- wp:spacer -->
			<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:columns {"style":{"spacing":{"blockGap":"30px"}}} -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"7px"}},"textColor":"secondary","fontSize":"x-small"} -->
			<h2 class="has-text-align-left has-secondary-color has-text-color has-x-small-font-size" style="letter-spacing:7px;text-transform:uppercase">' . esc_html__( 'testimonials', 'blockst' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"40px"}}},"fontSize":"2x-large"} -->
			<h2 class="has-2-x-large-font-size" style="margin-bottom:40px">' . esc_html__( 'What They Say About Us', 'blockst' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"textColor":"primary","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color">' . esc_html__( 'MORE TESTIMONIALS', 'blockst' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:spacer {"height":"160px"} -->
			<div style="height:160px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}},"backgroundColor":"white"} -->
			<div class="wp-block-group has-white-background-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":349,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
			<figure class="wp-block-image size-full" style="border-radius:100px"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/blockst_testimonial_1.jpg" alt="" class="wp-image-349"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} -->
			<p class="has-x-small-font-size" style="font-style:normal;font-weight:500">' . esc_html__( '— Kasey Burt, Entreprenuer', 'blockst' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"secondary"} -->
			<p class="has-secondary-color has-text-color">' . esc_html__( '“Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu. Excepteur sint occaecat cupidatat non proident, sunt in.”', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"}}},"backgroundColor":"white"} -->
			<div class="wp-block-group has-white-background-color has-background" style="padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:image {"id":350,"sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"100px"}}} -->
			<figure class="wp-block-image size-full" style="border-radius:100px"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/blockst_testimonial_2.jpg" alt="blockst_testimonial_2" class="wp-image-350"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"x-small"} -->
			<p class="has-x-small-font-size" style="font-style:normal;font-weight:500">' . esc_html__( '— Lucy Walker, Sales Manager', 'blockst' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"secondary"} -->
			<p class="has-secondary-color has-text-color">' . esc_html__( '“Phasellus luctus nisi id orci condimentum, at cursus nisl vestibulum. Orci varius natoque penatibus et magnis dis parturient montes commodo.”', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:spacer -->
			<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:group -->',
);