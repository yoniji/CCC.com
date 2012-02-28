<?php
/**
 * The blog template file.
 *
 * @package chirp
 * @subpackage Chirp
 */

get_header(); ?>

		<div id="primary">
        <div id="top" name="top"></div>
			<div id="content" class="faq-content" role="main">        
            <h1 id="faq-header"><span>&gt;&gt; </span>Frequently Asked Questions</h1>
            
            
            
            <?php 
			$args = array(
				'post_type' => 'page',
				'posts_per_page'     => -1,
				'orderby' => 'menu_order',
				'order'    => 'ASC',
				'post_parent' => $post->ID
			);

			query_posts($args ); ?>
            
			<?php if ( have_posts() ) : ?>
            
            	<ul id="faq-title-list">

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'faqtitle' ); ?>

				<?php endwhile; ?>
                
                </ul><!-- #faq-title-list -->
                
                <?php query_posts( $args  ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'faq' ); ?>

				<?php endwhile; ?>
                
	

			<?php else : ?>



			<?php endif; ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar('faq'); ?>
<?php get_footer(); ?>