<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<div id="post-<?php echo($post->post_name); ?>" <?php post_class(); ?>>
	<div class="entry-header">
		<h1 class="<?php echo((empty( $post->post_parent ))?"parent-title":"sub-page-title entry-title");?>"><span><?php echo((empty( $post->post_parent ))?"&gt;&gt;":"");?> </span><?php the_title(); ?></h1>
	</div><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'chirp' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<div class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'chirp' ), '<span class="edit-link">', '</span>' ); ?>
	</div><!-- .entry-meta -->
</div><!-- #post-<?php the_ID(); ?> -->
