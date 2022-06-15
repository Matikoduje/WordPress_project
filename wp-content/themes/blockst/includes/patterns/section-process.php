<?php
/**
 * Section process
 */
return array(
	'title'      => esc_html__( 'Process', 'blockst' ),
	'categories' => array( 'blockst-sections' ),
	'content'    => '
			<!-- wp:group {"layout":{"inherit":false}} -->
			<div class="wp-block-group"><!-- wp:spacer -->
			<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:columns -->
			<div class="wp-block-columns"><!-- wp:column -->
			<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","style":{"typography":{"textTransform":"uppercase","letterSpacing":"7px"}},"textColor":"secondary","fontSize":"x-small"} -->
			<h2 class="has-text-align-left has-secondary-color has-text-color has-x-small-font-size" style="letter-spacing:7px;text-transform:uppercase">' . esc_html__( 'CORPORATE SERVICE', 'blockst' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:heading {"style":{"spacing":{"margin":{"bottom":"40px"}}},"fontSize":"2x-large"} -->
			<h2 class="has-2-x-large-font-size" style="margin-bottom:40px">' . esc_html__( 'We help startups everywhere.', 'blockst' ) . '</h2>
			<!-- /wp:heading --></div>
			<!-- /wp:column -->

			<!-- wp:column -->
			<div class="wp-block-column"><!-- wp:paragraph -->
			<p>' . esc_html__( 'We appreciate your trust greatly! Our clients choose us and our products because they know we’re the best.', 'blockst' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:spacer {"height":"16px"} -->
			<div style="height:16px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
			<p class="has-secondary-color has-text-color has-small-font-size"><mark style="background-color:rgba(0, 0, 0, 0);color:#8e8e8f" class="has-inline-color">' . esc_html__( '01.', 'blockst' ) . '</mark> ' . esc_html__( 'Endless Possibilities', 'blockst' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
			<p class="has-secondary-color has-text-color has-small-font-size"><mark style="background-color:rgba(0, 0, 0, 0);color:#8e8e8f" class="has-inline-color">' . esc_html__( '02.', 'blockst' ) . '</mark> ' . esc_html__( 'Creative Design', 'blockst' ) . '</p>
			<!-- /wp:paragraph -->

			<!-- wp:paragraph {"textColor":"secondary","fontSize":"small"} -->
			<p class="has-secondary-color has-text-color has-small-font-size"><mark style="background-color:rgba(0, 0, 0, 0);color:#8e8e8f" class="has-inline-color">' . esc_html__( '03.', 'blockst' ) . '</mark> ' . esc_html__( 'Process Optimization', 'blockst' ) . '</p>
			<!-- /wp:paragraph --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:spacer -->
			<div style="height:100px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:group -->',
);