<?php
/**
 * Section hero cover
 */
return array(
	'title'      => esc_html__( 'Hero Cover', 'blockst' ),
	'categories' => array( 'blockst-sections' ),
	'content'    => '
			<!-- wp:cover {"url":"' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/blockst_hero.jpg","id":65,"hasParallax":true,"isRepeated":true,"minHeight":100,"minHeightUnit":"vh","customGradient":"linear-gradient(180deg,rgb(255,255,255) 0%,rgb(255,255,255) 30%,rgba(255,255,255,0) 100%)","contentPosition":"top center","align":"full","className":"blockst-negative-mt-100"} -->
			<div class="wp-block-cover alignfull has-parallax is-repeated has-custom-content-position is-position-top-center blockst-negative-mt-100" style="background-image:url(' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/blockst_hero.jpg);min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-100 has-background-dim wp-block-cover__gradient-background has-background-gradient" style="background:linear-gradient(180deg,rgb(255,255,255) 0%,rgb(255,255,255) 30%,rgba(255,255,255,0) 100%)"></span><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"168px"} -->
			<div style="height:168px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"7px"}},"textColor":"secondary","fontSize":"x-small"} -->
			<h2 class="has-text-align-center has-secondary-color has-text-color has-x-small-font-size" style="letter-spacing:7px;text-transform:uppercase">' . esc_html__( 'innovative ideas', 'blockst' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"letterSpacing":"-1px"},"spacing":{"margin":{"top":"24px","right":"10%","bottom":"18px","left":"10%"}}},"textColor":"secondary","fontSize":"4x-large"} -->
			<h1 class="has-text-align-center has-secondary-color has-text-color has-4-x-large-font-size" style="margin-top:24px;margin-right:10%;margin-bottom:18px;margin-left:10%;letter-spacing:-1px">' . esc_html__( 'We transform your ideas into reality', 'blockst' ) . '</h1>
			<!-- /wp:heading -->

			<!-- wp:spacer {"height":"20px"} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"textColor":"primary","className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-primary-color has-text-color">' . esc_html__( 'LEARN MORE', 'blockst' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div></div>
			<!-- /wp:cover -->',
);