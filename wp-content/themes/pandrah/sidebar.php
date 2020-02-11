<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package pandrah
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div id="secondary" class="widget-area <?php do_action('pandrah_secondary-width') ?>" role="complementary">	
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div><!-- #secondary -->
