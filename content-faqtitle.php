<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Chirp
 * @since Chirp 1.0
 */
?>

	<li id="faq-title-<?php the_ID(); ?>" class="faq-title">

                    	<a href="#faq-<?php the_ID(); ?>"  title="<?php printf( esc_attr__( 'Permalink to %s', 'chirp' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">:: <?php the_title(); ?></a>

	</li><!-- #faq-title-<?php the_ID(); ?> -->
