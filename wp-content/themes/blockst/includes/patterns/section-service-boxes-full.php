<?php
/**
 * Section service boxes full
 */
return array(
	'title'      => esc_html__( 'Service boxes full', 'blockst' ),
	'categories' => array( 'blockst-sections' ),
	'content'    => '
			<!-- wp:group {"style":{"spacing":{"padding":{"right":"40px","left":"40px"}}},"backgroundColor":"quaternary","layout":{"inherit":true}} -->
			<div class="wp-block-group has-quaternary-background-color has-background" style="padding-right:40px;padding-left:40px"><!-- wp:spacer {"height":"80px"} -->
			<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"7px"}},"textColor":"secondary","fontSize":"x-small"} -->
			<h2 class="has-text-align-center has-secondary-color has-text-color has-x-small-font-size" style="letter-spacing:7px;text-transform:uppercase">' . esc_html__( 'WHAT WE OFFER', 'blockst' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:heading {"textAlign":"center","fontSize":"2x-large"} -->
			<h2 class="has-text-align-center has-2-x-large-font-size">' . esc_html__( 'Services', 'blockst' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html__( 'Your idea is our mission and together we’ll make it work.', 'blockst' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"40px"} -->
			<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"30px"}}} -->
			<div class="wp-block-group"><!-- wp:columns {"style":{"spacing":{"blockGap":"30px"}}} -->
			<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"48px","right":"48px","bottom":"48px","left":"48px"}}},"backgroundColor":"white","className":"hover-up"} -->
			<div class="wp-block-column hover-up has-white-background-color has-background" style="padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:image {"align":"center","id":240,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/pie-chart.svg" alt="" class="wp-image-240"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"small"} -->
			<h3 class="has-text-align-center has-small-font-size">' . esc_html__( 'Analytics and Research', 'blockst' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html__( 'Lorem ipsum dolor sit amet, quisque consectetur adipiscing elit. Nulla vitae lorem a neque imperdiet sagittis.', 'blockst' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"textColor":"primary","style":{"color":{"background":"#ffffff00"},"typography":{"fontSize":"12px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"is-style-fill hover-underline"} -->
			<div class="wp-block-button has-custom-font-size is-style-fill hover-underline" style="font-size:12px"><a class="wp-block-button__link has-primary-color has-text-color has-background" style="background-color:#ffffff00;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">' . esc_html__( 'LEARN MORE', 'blockst' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"padding":{"top":"48px","right":"48px","bottom":"48px","left":"48px"}}},"backgroundColor":"white","className":"hover-up"} -->
			<div class="wp-block-column hover-up has-white-background-color has-background" style="padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:image {"align":"center","id":231,"width":48,"height":48,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-full is-resized"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/edit.svg" alt="" class="wp-image-231" width="48" height="48"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"small"} -->
			<h3 class="has-text-align-center has-small-font-size">' . esc_html__( 'Copywriting', 'blockst' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html__( 'Lorem ipsum dolor sit amet, quisque consectetur adipiscing elit. Nulla vitae lorem a neque imperdiet sagittis.', 'blockst' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"textColor":"primary","style":{"color":{"background":"#ffffff00"},"typography":{"fontSize":"12px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"is-style-fill hover-underline"} -->
			<div class="wp-block-button has-custom-font-size is-style-fill hover-underline" style="font-size:12px"><a class="wp-block-button__link has-primary-color has-text-color has-background" style="background-color:#ffffff00;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">' . esc_html__( 'LEARN MORE', 'blockst' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"padding":{"top":"48px","right":"48px","bottom":"48px","left":"48px"}}},"backgroundColor":"white","className":"hover-up"} -->
			<div class="wp-block-column hover-up has-white-background-color has-background" style="padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:image {"align":"center","id":241,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/trending-up.svg" alt="" class="wp-image-241"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"small"} -->
			<h3 class="has-text-align-center has-small-font-size">' . esc_html__( 'Sales Growth', 'blockst' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html__( 'Lorem ipsum dolor sit amet, quisque consectetur adipiscing elit. Nulla vitae lorem a neque imperdiet sagittis.', 'blockst' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"textColor":"primary","style":{"color":{"background":"#ffffff00"},"typography":{"fontSize":"12px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"is-style-fill hover-underline"} -->
			<div class="wp-block-button has-custom-font-size is-style-fill hover-underline" style="font-size:12px"><a class="wp-block-button__link has-primary-color has-text-color has-background" style="background-color:#ffffff00;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">' . esc_html__( 'LEARN MORE', 'blockst' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:columns {"style":{"spacing":{"blockGap":"30px"}}} -->
			<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"48px","right":"48px","bottom":"48px","left":"48px"}}},"backgroundColor":"white","className":"hover-up"} -->
			<div class="wp-block-column hover-up has-white-background-color has-background" style="padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:image {"align":"center","id":791,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/code.svg" alt="" class="wp-image-791"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"small"} -->
			<h3 class="has-text-align-center has-small-font-size">' . esc_html__( 'Web Development', 'blockst' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html__( 'Lorem ipsum dolor sit amet, quisque consectetur adipiscing elit. Nulla vitae lorem a neque imperdiet sagittis.', 'blockst' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"textColor":"primary","style":{"color":{"background":"#ffffff00"},"typography":{"fontSize":"12px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"is-style-fill hover-underline"} -->
			<div class="wp-block-button has-custom-font-size is-style-fill hover-underline" style="font-size:12px"><a class="wp-block-button__link has-primary-color has-text-color has-background" style="background-color:#ffffff00;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">' . esc_html__( 'LEARN MORE', 'blockst' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"padding":{"top":"48px","right":"48px","bottom":"48px","left":"48px"}}},"backgroundColor":"white","className":"hover-up"} -->
			<div class="wp-block-column hover-up has-white-background-color has-background" style="padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:image {"align":"center","id":792,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/smartphone.svg" alt="" class="wp-image-792"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"small"} -->
			<h3 class="has-text-align-center has-small-font-size">' . esc_html__( 'Mobile Apps', 'blockst' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html__( 'Lorem ipsum dolor sit amet, quisque consectetur adipiscing elit. Nulla vitae lorem a neque imperdiet sagittis.', 'blockst' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"textColor":"primary","style":{"color":{"background":"#ffffff00"},"typography":{"fontSize":"12px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"is-style-fill hover-underline"} -->
			<div class="wp-block-button has-custom-font-size is-style-fill hover-underline" style="font-size:12px"><a class="wp-block-button__link has-primary-color has-text-color has-background" style="background-color:#ffffff00;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">' . esc_html__( 'LEARN MORE', 'blockst' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"padding":{"top":"48px","right":"48px","bottom":"48px","left":"48px"}}},"backgroundColor":"white","className":"hover-up"} -->
			<div class="wp-block-column hover-up has-white-background-color has-background" style="padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:image {"align":"center","id":793,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image aligncenter size-full"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/headphones.svg" alt="" class="wp-image-793"/></figure>
			<!-- /wp:image -->

			<!-- wp:heading {"textAlign":"center","level":3,"fontSize":"small"} -->
			<h3 class="has-text-align-center has-small-font-size">' . esc_html__( 'Customers Support', 'blockst' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:paragraph {"align":"center"} -->
			<p class="has-text-align-center">' . esc_html__( 'Lorem ipsum dolor sit amet, quisque consectetur adipiscing elit. Nulla vitae lorem a neque imperdiet sagittis.', 'blockst' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
			<div class="wp-block-buttons"><!-- wp:button {"textColor":"primary","style":{"color":{"background":"#ffffff00"},"typography":{"fontSize":"12px"},"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"is-style-fill hover-underline"} -->
			<div class="wp-block-button has-custom-font-size is-style-fill hover-underline" style="font-size:12px"><a class="wp-block-button__link has-primary-color has-text-color has-background" style="background-color:#ffffff00;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px">' . esc_html__( 'LEARN MORE', 'blockst' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns --></div>
			<!-- /wp:group -->

			<!-- wp:spacer {"height":"80px"} -->
			<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:spacer {"height":"20px"} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:group -->',
);