<?php
/**
 * The blog template file.
 *
 * @package chirp
 * @subpackage Chirp
 */

get_header(); ?>

		<div id="primary">
			<div id="content" role="main">

				<?php the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php 

if( "the-chirp-difference" == $post->post_name ) {
	
} else {
	get_sidebar('page'); 
}
?>

<?php get_footer(); ?>