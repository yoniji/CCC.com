<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage chirp
 */
?>

<div id="post-<?php echo($post->post_name); ?>" <?php post_class(); ?>>
	<div class="entry-content page-content">
		<?php the_content(); ?>
	</div><!-- .entry-content -->
	<div class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'chirp' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-meta -->
</div><!-- #post-<?php the_ID(); ?> -->

