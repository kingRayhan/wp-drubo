<?php get_header(); ?>

<?php 
do_action( 'wpdrubo_before_content' );

    if ( have_posts() ) :

      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content');

      endwhile;

      the_posts_navigation();

    else :

      get_template_part( 'template-parts/content', 'none' );

    endif;


do_action( 'wpdrubo_after_content' );
?>