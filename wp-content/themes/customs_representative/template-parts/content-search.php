<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Customs_representative
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php customs_representative_post_thumbnail(); ?>

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

<!--	<footer class="entry-footer">-->
<!--		--><?php //customs_representative_entry_footer(); ?>
<!--	</footer><!-- .entry-footer -->-->
</article><!-- #post-<?php the_ID(); ?> -->
