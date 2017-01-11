<?php
/**
 * Register widget areas
 *
 * @package ElectronPress
 * @since ElectronPress 1.0.0
 */

if ( ! function_exists( 'wpdrubo_sidebar_widgets' ) ) :
function wpdrubo_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'wpdrubo' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'wpdrubo' ),
	  'before_widget' => '<div id="%1$s" class="widget %2$s">',
	  'after_widget' => '</div>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'footer-widgets',
	  'name' => __( 'Footer widgets', 'wpdrubo' ),
	  'description' => __( 'Drag widgets to this footer container', 'wpdrubo' ),
	  'before_widget' => '<div id="%1$s" class="large-4 columns widget %2$s">',
	  'after_widget' => '</div>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));
}

add_action( 'widgets_init', 'wpdrubo_sidebar_widgets' );
endif;
