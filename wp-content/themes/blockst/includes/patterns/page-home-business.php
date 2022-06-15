<?php
/**
 * Page home business
 */
return array(
	'title'      => esc_html__( 'Home Business', 'blockst' ),
	'categories' => array( 'blockst-pages' ),
	'content'    => '
			<!-- wp:pattern {"slug":"blockst/section-hero-cover"} /-->
			<!-- wp:pattern {"slug":"blockst/section-intro"} /-->
			<!-- wp:pattern {"slug":"blockst/section-service-boxes"} /-->
			<!-- wp:pattern {"slug":"blockst/section-cta"} /-->
			<!-- wp:pattern {"slug":"blockst/section-testimonials-columns"} /-->
			<!-- wp:pattern {"slug":"blockst/section-partner-logos"} /-->
			',
);