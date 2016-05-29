<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package fl
 */

?>

<article>
	<header>
		<?php the_title( sprintf( '<h2><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div>
			<?php fl_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div>
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer>
		<?php fl_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
