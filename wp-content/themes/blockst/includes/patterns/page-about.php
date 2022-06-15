<?php
/**
 * Page about
 */
return array(
	'title'      => esc_html__( 'About', 'blockst' ),
	'categories' => array( 'blockst-pages' ),
	'content'    => '
			<!-- wp:pattern {"slug":"blockst/section-intro"} /-->
			<!-- wp:pattern {"slug":"blockst/section-testimonial"} /-->
			<!-- wp:pattern {"slug":"blockst/section-team"} /-->
			<!-- wp:separator {"className":"is-style-wide"} -->
			<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
			<!-- /wp:separator -->
			<!-- wp:pattern {"slug":"blockst/section-partner-logos"} /-->			
			',
);