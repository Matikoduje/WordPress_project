<?php
/**
 * Section intro
 */
return array(
	'title'      => esc_html__( 'Intro', 'blockst' ),
	'categories' => array( 'blockst-sections' ),
	'content'    => '
			<!-- wp:group {"layout":{"inherit":false}} -->
			<div class="wp-block-group"><!-- wp:spacer {"height":"88px"} -->
			<div style="height:88px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:columns {"style":{"spacing":{"blockGap":"70px"}}} -->
			<div class="wp-block-columns"><!-- wp:column {"width":"54%"} -->
			<div class="wp-block-column" style="flex-basis:54%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"7px"}},"textColor":"secondary","fontSize":"x-small"} -->
			<h2 class="has-text-align-left has-secondary-color has-text-color has-x-small-font-size" style="letter-spacing:7px;text-transform:uppercase">' . esc_html__( 'about', 'blockst' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"40px"}}},"fontSize":"2x-large"} -->
			<h2 class="has-2-x-large-font-size" style="margin-bottom:40px">' . esc_html__( 'From strategy to delivery, we are here to make sure your business endeavor succeeds. Trust our experts.', 'blockst' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column {"width":"30%"} -->
			<div class="wp-block-column" style="flex-basis:30%"></div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"blockGap":"40px"}}} -->
			<div class="wp-block-column"><!-- wp:paragraph -->
			<p>' . esc_html__( 'As you may already know, there are an infinite number of things you can test on your site to help you increase sales.<br><br>From layout to copy to design, there are limitless combinations of changes that may improve your visitor-to-sale conversion rate. But what’s “enough” when you’re just starting out?', 'blockst' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:image {"id":214,"width":166,"height":48,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/blockst_signature.png" alt="" class="wp-image-214" width="166" height="48"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:image {"id":213,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/blockst_intro.jpg" alt="blockst_intro" class="wp-image-213"/></figure>
			<!-- /wp:image --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:spacer {"height":"88px"} -->
			<div style="height:88px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:group -->',
);