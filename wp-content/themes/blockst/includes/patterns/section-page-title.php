<?php
/**
 * Section page title
 */
return array(
	'title'      => esc_html__( 'Page Title', 'blockst' ),
	'categories' => array( 'blockst-sections' ),
	'content'    => '
			<!-- wp:group {"layout":{"contentSize":"600px","inherit":false}} -->
			<div class="wp-block-group"><!-- wp:spacer {"height":"80px"} -->
			<div style="height:80px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading {"textAlign":"center","style":{"typography":{"textTransform":"uppercase","letterSpacing":"7px"}},"textColor":"secondary","fontSize":"x-small"} -->
			<h2 class="has-text-align-center has-secondary-color has-text-color has-x-small-font-size" style="letter-spacing:7px;text-transform:uppercase">' . esc_html__( 'get in touch', 'blockst' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:heading {"textAlign":"center","fontSize":"2x-large"} -->
			<h2 class="has-text-align-center has-2-x-large-font-size">' . esc_html__( 'Contact Us', 'blockst' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:spacer {"height":"20px"} -->
			<div style="height:20px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:group -->',
);