<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Chirp
 * @since Chirp 1.0
 */
?>

	<div id="faq-<?php the_ID(); ?>" name="faq-<?php the_ID(); ?>" class="faq-entry post">

			<h2 class="entry-title">
                    	<?php the_title(); ?>
            </h2>



		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
        <div class="entry-footer">
 		<div class="fl"></div>
        <div class="fr"><?php edit_post_link( __( 'Edit', 'chrip' ), '<span class="edit-link">', '</span> <span class="sep"> | </span> ' ); ?> <a href="#top" class="faq-top">TOP</a></div>
        </div><!-- .entry-footer -->


	</div><!-- #post-<?php the_ID(); ?> -->
