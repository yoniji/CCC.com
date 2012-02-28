<?php
/**
 * The default template for displaying content
 *
 * @package WordPress
 * @subpackage Chirp
 * @since Chirp 1.0
 */
?>
	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-header">
            <div class="entry-date">
            	<?php chirp_posted_on(); ?>
            </div>
			<?php if ( is_sticky() ) : ?>
				<div>
					<h2 class="entry-title">
                    	<?php if ( is_single() ) : ?>
                        <?php the_title(); ?>
                        <?php else : ?>
                    	<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'chirp' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
                        <?php endif; ?>
                    </h2>
					<h3 class="entry-format"><?php _e( 'Featured', 'chirp' ); ?></h3>
				</div>
			<?php else : ?>
			<h1 class="entry-title">
                    	<?php if ( is_single() ) : ?>
                        <?php the_title(); ?>
                        <?php else : ?>
                    	<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'chirp' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
                        <?php endif; ?>
            </h1>
			<?php endif; ?>
            <div class="entry-meta">
                <?php $show_sep = false; ?>
                <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
                <?php
                    /* translators: used between list items, there is a space after the comma */
                    $categories_list = get_the_category_list( __( ', ', 'chrip' ) );
                    if ( $categories_list ):
                ?>
                <span class="cat-links">
                    <?php printf( __( '<span class="%1$s">Posted in</span> %2$s', 'chrip' ), 'entry-utility-prep entry-utility-prep-cat-links', $categories_list );
                    $show_sep = true; ?>
                </span>
                <?php endif; // End if categories ?>
                <?php
                    /* translators: used between list items, there is a space after the comma */
                    $tags_list = get_the_tag_list( '', __( ', ', 'chrip' ) );
                    if ( $tags_list ):
                    if ( $show_sep ) : ?>
                <span class="sep"> | </span>
                    <?php endif; // End if $show_sep ?>
                <span class="tag-links">
                    <?php printf( __( '<span class="%1$s">Tagged</span> %2$s', 'chrip' ), 'entry-utility-prep entry-utility-prep-tag-links', $tags_list );
                    $show_sep = true; ?>
                </span>
                <?php endif; // End if $tags_list ?>
                <?php endif; // End if 'post' == get_post_type() ?>
    
                <?php if ( comments_open() ) : ?>
                <?php if ( $show_sep ) : ?>
                <span class="sep"> | </span>
                <?php endif; // End if $show_sep ?>
                <span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'chrip' ) . '</span>', __( '<b>1</b> Reply', 'chirp' ), __( '<b>%</b> Replies', 'chrip' ) ); ?></span>
                <?php endif; // End if comments_open() ?>
               
                <?php edit_post_link( __( 'Edit', 'chrip' ), '<span class="sep"> | </span><span class="edit-link">', '</span>' ); ?>
            </div><!-- #entry-meta -->



		</div><!-- .entry-header -->

		<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'chrip' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
        <div class="entry-footer">
        
            <div class="facebookLikeButton fl">
                <iframe src="http://www.facebook.com/plugins/like.php?href=<?php the_permalink(); ?>&amp;layout=button_count&amp;show_faces=false&amp;
                width=450&amp;action=like&amp;colorscheme=light" scrolling="no" frameborder="0" allowTransparency="true" style="border:none; overflow:hidden;height:24px;">
                </iframe>
            </div><!-- .facebookLikeButton -->
                    
			<?php if ( !is_single() ) :  ?>
                <div class="readMore fr">
                	<a href="<?php the_permalink(); ?>">&gt;&gt; Read More</a>
                </div><!-- .readMore -->
            <?php endif; ?>        


        </div><!-- .entry-footer -->
		<?php endif; ?>


	</div><!-- #post-<?php the_ID(); ?> -->
