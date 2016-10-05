<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row post-image">
		<?php the_post_thumbnail(); ?>
	</div>
	<div class="entry-header text-purple-primary">
		<a class="text-purple-primary" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		</a>
	</div><!-- .entry-header -->

	<div class="entry-content">
		<?php	the_excerpt();?>

		<a href="<?php get_permalink(); ?>"><?php _e("Read more...") ?></a>

		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'Compose-Your-Career' ),
				'after'  => '</div>',
			) );
		?>

		<div class="row breathing-room">
			<a href="<?php the_field('blog_post_sale_link'); ?>" class="btn bg-purple-primary post-button"><?php the_field('blog_post_sale_button'); ?></a>
		</div>
	</div><!-- .entry-content -->

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
