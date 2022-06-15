<?php
/**
 * The template for displaying the footer.
 * @author  	 DeoThemes
 * @copyright  (c) Copyright by DeoThemes
 * @link       https://deothemes.com
 * @package 	 Blockst
 * @since 		 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>

	<?php blockst_footer_before(); ?>

	<?php blockst_footer(); ?>		
	
	<?php blockst_footer_after(); ?>

	<?php blockst_back_to_top(); ?>

	<?php blockst_content_bottom(); ?>

	</div> <!-- #content -->

	<?php blockst_content_after(); ?>

</div> <!-- .main-wrapper -->

<?php blockst_body_bottom(); ?>

<?php wp_footer(); ?>
</body>
</html>