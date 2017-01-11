<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package ElectronPress
 * @since ElectronPress 1.0.0
 */

 get_header(); ?>

<?php 
do_action( 'wpdrubo_before_content' );
do_action( 'wpdrubo_before_page_content' );

    if ( have_posts() ) :

      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', get_post_format() );

      endwhile;

      the_posts_navigation();

    else :

      get_template_part( 'template-parts/content', 'none' );

    endif;


do_action( 'wpdrubo_after_page_content' ); 
do_action( 'wpdrubo_after_content' ); 
?>