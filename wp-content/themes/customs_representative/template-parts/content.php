<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Customs_representative
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php customs_representative_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'customs-representative' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'customs-representative' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

<!--	<footer class="entry-footer">-->
<!--		--><?php //customs_representative_entry_footer(); ?>
<!--	</footer>-->
  <!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
