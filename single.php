<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Chirp
 * @since Chirp 1.0
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>
                

					<?php get_template_part( 'content', 'single' ); ?>
                    
					<div id="nav-single">
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'chirp' ); ?></h3>
						<span class="nav-previous"><?php previous_post_link( '%link', __( '<span class="meta-nav">&lt;&lt;</span> Previous', 'chirp' ) ); ?></span>
						<span class="nav-next"><?php next_post_link( '%link', __( 'Next <span class="meta-nav">&gt;&gt;</span>', 'chirp' ) ); ?></span>
					</div><!-- #nav-single -->
					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>