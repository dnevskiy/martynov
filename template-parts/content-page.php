<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fl
 */

?>

<article>
	<header>
		<?php the_title( '<h1>', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div>
		<?php
			the_content();

			wp_link_pages( array(
				'before' => '<div>' . esc_html__( 'Pages:', 'fl' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer>
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'fl' ),
					the_title( '<span>"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
