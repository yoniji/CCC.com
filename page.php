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
                
                <?php if( !empty( $post->post_parent )) { ?> 
                <div class="parent-title"><a href="<?php echo(get_permalink($post->post_parent)); ?>">&gt;&gt; <?php echo(get_the_title( $post->post_parent )); ?></a></div>
				<?php } ?>

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