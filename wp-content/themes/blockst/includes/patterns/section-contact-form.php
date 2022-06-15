<?php
/**
 * Section contact form
 */
return array(
	'title'      => esc_html__( 'Contact Form', 'blockst' ),
	'categories' => array( 'blockst-sections' ),
	'content'    => '
			<!-- wp:group -->
			<div class="wp-block-group"><!-- wp:spacer {"height":"88px"} -->
			<div style="height:88px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:heading {"textAlign":"center","fontSize":"2x-large"} -->
			<h2 class="has-text-align-center has-2-x-large-font-size">' . esc_html__( 'Drop us a Message', 'blockst' ) . '</h2>
			<!-- /wp:heading -->

			<!-- wp:spacer {"height":"24px"} -->
			<div style="height:24px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer -->

			<!-- wp:columns {"style":{"spacing":{"blockGap":"12%"}}} -->
			<div class="wp-block-columns"><!-- wp:column {"width":"40%"} -->
			<div class="wp-block-column" style="flex-basis:40%"><!-- wp:image {"id":524,"sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full"><img src="' . esc_url( BLOCKST_URI ) . '/assets/img/patterns/blockst_contact.jpg" alt="blockst_contact" class="wp-image-524"/></figure>
			<!-- /wp:image -->

			<!-- wp:spacer {"height":"32px"} -->
			<div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center"} -->
			<div class="wp-block-column is-vertically-aligned-center"><!-- wp:contact-form-7/contact-form-selector {"id":418,"title":"Blockst Contact Form"} -->
			<div class="wp-block-contact-form-7-contact-form-selector">[contact-form-7 id="418" title="Blockst Contact Form"]</div>
			<!-- /wp:contact-form-7/contact-form-selector --></div>
			<!-- /wp:column --></div>
			<!-- /wp:columns -->

			<!-- wp:spacer {"height":"64px"} -->
			<div style="height:64px" aria-hidden="true" class="wp-block-spacer"></div>
			<!-- /wp:spacer --></div>
			<!-- /wp:group -->',
);