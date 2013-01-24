<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Flint
 * @since Flint 1.0
 */
?>

	</div><!-- #main .site-main -->

	<footer id="colophon" class="site-footer wrapper" role="contentinfo">
		<div class="site-info">
			<?php do_action( 'flint_credits' ); ?>
			Proudly powered by <a href="http://wordpress.org/" title="<?php esc_attr_e( 'A Semantic Personal Publishing Platform', 'flint' ); ?>">WordPress</a> and the <a href="http://fortcollinscreative.com/" title="<?php esc_attr_e( 'A WordPress Development Framework', 'flint' ); ?>">Sparks Framework</a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'flint' ), 'Flint', '<a href="http://starverte.com/" rel="designer">Star Verte LLC</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>