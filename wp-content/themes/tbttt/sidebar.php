<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package sensible
 */

	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		return;
	}
	?>

	<div id="secondary" class="b-left widget-area col-3-12" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div><!-- #secondary --> 
