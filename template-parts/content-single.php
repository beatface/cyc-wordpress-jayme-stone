<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="row post-image">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="entry-header text-purple-primary">
		<?php the_title( '<h1 class="entry-title text-purple-primary">', '</h1>' ); ?>
	</div><!-- .entry-header -->

	<div class="entry-content text-md-purple">
		<?php	the_content();?>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'Compose-Your-Career' ),
				'after'  => '</div>',
			) );
		?>
		<div class="row post-details">
			<p class="blog-post-meta"><span class="post-date text-purple-primary"><?php echo get_the_date('F, j, Y'); ?></span> By <?php the_author(); ?> </p>
		</div>
		<div class="row breathing-room">
			<a href="#" class="btn bg-purple-primary post-button">HAVE YOU HEARD ABOUT THE ONLINE COURSE?</a>
		</div>
	</div><!-- .entry-content -->

  <nav>
    <div class="row container breathing-room">
      <div class="col-sm-4 col-sm-offset-4">
        <ul class="pager">
          <li><?php next_post_link()?></li>
          <li><?php previous_post_link()?></li>
        </ul>
      </div>
    </div>
  </nav>

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'Compose-Your-Career' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
