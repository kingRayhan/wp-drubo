<?php
/**
 * The sidebar containing the main widget area
 *
 * @package ElectronPress
 * @since ElectronPress 1.0.0
 */

?>
<aside class="sidebar">
	<?php do_action( 'wpdrubo_before_sidebar' ); ?>
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>
	<?php do_action( 'wpdrubo_after_sidebar' ); ?>
</aside>
