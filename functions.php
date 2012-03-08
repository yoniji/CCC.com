<?php if ( ! function_exists( 'chirp_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own chirp_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Eleven 1.0
 */
function chirp_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case 'pingback' :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'chirp' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __( 'Edit', 'chirp' ), '<span class="edit-link">', '</span>' ); ?></p>
	<?php
			break;
		default :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>" class="comment">
			<div class="comment-meta">
				<div class="comment-author vcard">
					<?php
						$avatar_size = 68;
						if ( '0' != $comment->comment_parent )
							$avatar_size = 39;

						echo get_avatar( $comment, $avatar_size );

						/* translators: 1: comment author, 2: date and time */
						printf( __( '%1$s on %2$s <span class="says">said:</span>', 'chirp' ),
							sprintf( '<span class="fn">%s</span>', get_comment_author_link() ),
							sprintf( '<a href="%1$s"><time pubdate datetime="%2$s">%3$s</time></a>',
								esc_url( get_comment_link( $comment->comment_ID ) ),
								get_comment_time( 'c' ),
								/* translators: 1: date, 2: time */
								sprintf( __( '%1$s at %2$s', 'chirp' ), get_comment_date(), get_comment_time() )
							)
						);
					?>

					<?php edit_comment_link( __( 'Edit', 'chirp' ), '<span class="edit-link">', '</span>' ); ?>
				</div><!-- .comment-author .vcard -->

				<?php if ( $comment->comment_approved == '0' ) : ?>
					<em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'chirp' ); ?></em>
					<br />
				<?php endif; ?>

			</div>

			<div class="comment-content"><?php comment_text(); ?></div>

			<div class="reply">
				<?php comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply ', 'chirp' ), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
			</div><!-- .reply -->
		</div><!-- #comment-## -->

	<?php
			break;
	endswitch;
}
endif; // ends check for chirp_comment()

/**
 * Register our sidebars and widgetized areas.
 *
 * @since Chirp 1.0
 */
function chirp_widgets_init() {


	register_sidebar( array(
		'name' => __( 'Blog Sidebar(Above Categories)', 'chirp' ),
		'id' => 'blog-sidebar-above-categories',
		'description' => __( 'The left sidebar for the Blog, above the categories', 'chirp' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Blog Sidebar(Below Categories)', 'chirp' ),
		'id' => 'blog-sidebar-below-categories',
		'description' => __( 'The left sidebar for the Blog, below the categories', 'chirp' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );
}
add_action( 'widgets_init', 'chirp_widgets_init' );

/**
 * Display navigation to next/previous pages when applicable
 */
function chirp_content_nav( $nav_id ) {
	global $wp_query;

	if ( $wp_query->max_num_pages > 1 ) : ?>
		<nav id="<?php echo $nav_id; ?>">
			<h3 class="assistive-text"><?php _e( 'Post navigation', 'chirp' ); ?></h3>
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&lt;&lt;</span> Older posts', 'chirp' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&gt;&gt;</span>', 'chirp' ) ); ?></div>
		</nav><!-- #nav-above -->
	<?php endif;
}


if ( ! function_exists( 'chirp_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time.
 * Create your own chirp_posted_on to override in a child theme
 *
 * @since chirp 1.0
 */
function chirp_posted_on() {
	printf( __( '<a href="%1$s" title="%2$s" rel="bookmark">&gt;&gt; %3$s %4$s, %5$s</a>', 'chirp' ),
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_html( get_the_date('M')),
		esc_html( get_the_date('j')),
		esc_html( get_the_date('Y'))
	);
}
endif;
?>