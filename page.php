<?php get_header(); ?>

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php
    get_template_part( 'template-parts/content', 'page' );

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
      comments_template();
    endif;
  ?>

  <?php endwhile; else : ?>
    <p><?php _e( 'Sorry, no pages matched your criteria.' ); ?></p>
  <?php endif; ?>

<?php get_footer(); ?>
