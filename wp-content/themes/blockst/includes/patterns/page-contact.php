<?php
/**
 * Page contact
 */
return array(
	'title'      => esc_html__( 'Contact', 'blockst' ),
	'categories' => array( 'blockst-pages' ),
	'content'    => '
			<!-- wp:pattern {"slug":"blockst/section-page-title"} /-->
			<!-- wp:pattern {"slug":"blockst/section-info-boxes"} /-->
			<!-- wp:acf/google-map {"id":"block_6296ff32820c4","name":"acf/google-map","data":{"_deoblocks_gmap":{"address":"17 Somerset Pl, Melbourne VIC 3000, Australia","lat":-37.813843,"lng":144.9624204,"zoom":14,"place_id":"ChIJYyTJPbVC1moRSQDuFcJl7YM","street_number":"17","street_name":"Somerset Place","street_name_short":"Somerset Pl","city":"Melbourne","state":"Victoria","state_short":"VIC","post_code":"3004","country":"Australia","country_short":"AU"},"__deoblocks_gmap":"field_628357994ca02","_deoblocks_gmap_zoom":"13","__deoblocks_gmap_zoom":"field_62838b6aca8c4","_deoblocks_gmap_skin":"magnesium","__deoblocks_gmap_skin":"field_628440cebc643","_deoblocks_gmap_height":"760","__deoblocks_gmap_height":"field_62848d7a9715f"},"align":"full","mode":"edit"} /-->
			<!-- wp:pattern {"slug":"blockst/section-contact-form"} /-->
			',
);