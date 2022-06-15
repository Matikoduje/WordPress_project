<?php
/**
 * Section pricing tables
 */
return array(
	'title'      => esc_html__( 'Pricing tables', 'blockst' ),
	'categories' => array( 'blockst-sections' ),
	'content'    => '
			<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"right":"40px","left":"40px"}}},"backgroundColor":"quaternary","layout":{"inherit":true}} -->
			<div class="wp-block-group alignfull has-quaternary-background-color has-background" style="padding-right:40px;padding-left:40px"><!-- wp:spacer {"height":"120px"} -->
			<div style="height:120px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:columns {"style":{"spacing":{"blockGap":"30px"}}} -->
			<div class="wp-block-columns"><!-- wp:column {"style":{"spacing":{"padding":{"top":"48px","right":"48px","bottom":"48px","left":"48px"}}},"backgroundColor":"white","layout":{"inherit":false}} -->
			<div class="wp-block-column has-white-background-color has-background" style="padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:heading {"level":3,"fontSize":"small"} -->
			<h3 class="has-small-font-size">' . esc_html__( 'Personal', 'blockst' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
			<p class="has-large-font-size" style="font-style:normal;font-weight:600">' . esc_html__( '$', 'blockst' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary","fontSize":"2x-large"} -->
			<p class="has-secondary-color has-text-color has-2-x-large-font-size" style="font-style:normal;font-weight:600;line-height:1.2">' . esc_html__( '75', 'blockst' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"color":{"text":"#8e8e8f"},"typography":{"fontSize":"0.83rem","lineHeight":"3"}}} -->
			<p class="has-text-color" style="color:#8e8e8f;font-size:0.83rem;line-height:3">' . esc_html__( '/ Monthly', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"bottom":"34px","top":"34px"}}}} -->
			<div class="wp-block-group" style="margin-top:34px;margin-bottom:34px"><!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group"><!-- wp:image {"id":796,"height":24,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/check-line.svg" alt="" class="wp-image-796" height="24"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
			<p style="line-height:1">' . esc_html__( 'Adipiscing eli sed eiusmod', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group"><!-- wp:image {"id":796,"height":24,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/check-line.svg" alt="" class="wp-image-796" height="24"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
			<p style="line-height:1">' . esc_html__( 'Tempor incididunt', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group"><!-- wp:image {"id":796,"height":24,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/check-line.svg" alt="" class="wp-image-796" height="24"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
			<p style="line-height:1">' . esc_html__( 'Labore et dolore magna', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group"><!-- wp:image {"id":796,"height":24,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/check-line.svg" alt="" class="wp-image-796" height="24"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
			<p style="line-height:1">' . esc_html__( 'Adipiscing eli sed eiusmod', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"textColor":"primary","style":{"typography":{"textTransform":"uppercase"}},"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline" style="text-transform:uppercase"><a class="wp-block-button__link has-primary-color has-text-color">' . esc_html__( 'GET STARTED', 'blockst' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"padding":{"top":"48px","right":"48px","bottom":"48px","left":"48px"}}},"backgroundColor":"primary","textColor":"white","layout":{"inherit":false}} -->
			<div class="wp-block-column has-white-color has-primary-background-color has-text-color has-background" style="padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:heading {"level":3,"textColor":"white","fontSize":"small"} -->
			<h3 class="has-white-color has-text-color has-small-font-size">' . esc_html__( 'Professional', 'blockst' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
			<p class="has-large-font-size" style="font-style:normal;font-weight:600">' . esc_html__( '$', 'blockst' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"textColor":"white","fontSize":"2x-large"} -->
			<p class="has-white-color has-text-color has-2-x-large-font-size" style="font-style:normal;font-weight:600;line-height:1.2">' . esc_html__( '175', 'blockst' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"fontSize":"0.83rem","lineHeight":"3"}},"textColor":"white"} -->
			<p class="has-white-color has-text-color" style="font-size:0.83rem;line-height:3">' . esc_html__( '/ Monthly', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"bottom":"34px","top":"34px"}}}} -->
			<div class="wp-block-group" style="margin-top:34px;margin-bottom:34px"><!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group"><!-- wp:image {"id":797,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/check-line-white.svg" alt="" class="wp-image-797"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
			<p style="line-height:1">' . esc_html__( 'Adipiscing eli sed eiusmod', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group"><!-- wp:image {"id":797,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/check-line-white.svg" alt="" class="wp-image-797"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
			<p style="line-height:1">' . esc_html__( 'Tempor incididunt', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group"><!-- wp:image {"id":797,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/check-line-white.svg" alt="" class="wp-image-797"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
			<p style="line-height:1">' . esc_html__( 'Labore et dolore magna', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group"><!-- wp:image {"id":797,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/check-line-white.svg" alt="" class="wp-image-797"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
			<p style="line-height:1">' . esc_html__( 'Adipiscing eli sed eiusmod', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"white","textColor":"primary","style":{"typography":{"textTransform":"uppercase"}},"className":"is-style-fill"} -->
			<div class="wp-block-button is-style-fill" style="text-transform:uppercase"><a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background">' . esc_html__( 'GET STARTED', 'blockst' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column -->

			<!-- wp:column {"style":{"spacing":{"padding":{"top":"48px","right":"48px","bottom":"48px","left":"48px"}}},"backgroundColor":"white","layout":{"inherit":false}} -->
			<div class="wp-block-column has-white-background-color has-background" style="padding-top:48px;padding-right:48px;padding-bottom:48px;padding-left:48px"><!-- wp:heading {"level":3,"fontSize":"small"} -->
			<h3 class="has-small-font-size">' . esc_html__( 'Enterprise', 'blockst' ) . '</h3>
			<!-- /wp:heading -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"12px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top"}} -->
			<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"large"} -->
			<p class="has-large-font-size" style="font-style:normal;font-weight:600">' . esc_html__( '$', 'blockst' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary","fontSize":"2x-large"} -->
			<p class="has-secondary-color has-text-color has-2-x-large-font-size" style="font-style:normal;font-weight:600;line-height:1.2">275</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"style":{"color":{"text":"#8e8e8f"},"typography":{"fontSize":"0.83rem","lineHeight":"3"}}} -->
			<p class="has-text-color" style="color:#8e8e8f;font-size:0.83rem;line-height:3">' . esc_html__( '/ Monthly', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"bottom":"34px","top":"34px"}}}} -->
			<div class="wp-block-group" style="margin-top:34px;margin-bottom:34px"><!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group"><!-- wp:image {"id":796,"height":24,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/check-line.svg" alt="" class="wp-image-796" height="24"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
			<p style="line-height:1">' . esc_html__( 'Adipiscing eli sed eiusmod', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group"><!-- wp:image {"id":796,"height":24,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/check-line.svg" alt="" class="wp-image-796" height="24"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
			<p style="line-height:1">' . esc_html__( 'Tempor incididunt', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group"><!-- wp:image {"id":796,"height":24,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/check-line.svg" alt="" class="wp-image-796" height="24"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
			<p style="line-height:1">' . esc_html__( 'Labore et dolore magna', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"14px"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
			<div class="wp-block-group"><!-- wp:image {"id":796,"height":24,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/check-line.svg" alt="" class="wp-image-796" height="24"/></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"style":{"typography":{"lineHeight":"1"}}} -->
			<p style="line-height:1">' . esc_html__( 'Adipiscing eli sed eiusmod', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:group --></div>
			<!-- /wp:group -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons"><!-- wp:button {"textColor":"primary","style":{"typography":{"textTransform":"uppercase"}},"className":"is-style-outline"} -->
			<div class="wp-block-button is-style-outline" style="text-transform:uppercase"><a class="wp-block-button__link has-primary-color has-text-color">' . esc_html__( 'GET STARTED', 'blockst' ) . '</a></div>
			<!-- /wp:button --></div>
			<!-- /wp:buttons --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:spacer {"height":"120px"} -->
			<div style="height:120px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:group -->',
);