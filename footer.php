<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Chrip
 * @since  Chirp 1.0
 */
?>

	</div><!-- #main -->

	<div id="colophon" role="contentinfo">

			<div id="site-generator"  <?php if(is_page('the-chirp-difference')) { ?> class="tcd-footer" <?php } ?> >
				<p>&copy;2011 Chirp Design by 13 Creative </p>
                <p><a href="<?php echo esc_url( __( 'http://wordpress.org/', 'chirp' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'chirp' ); ?>" rel="generator"><?php printf( __( 'Powered by %s', 'chirp' ), 'WordPress' ); ?></a> </p>
			</div>
	</div><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>