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
            <h1 id="faq-header">Frequently Asked Questions</h1>
            
            
            
            <?php 
			$args = array(
				'category_name'      => 'faq',
				'posts_per_page'     => -1,
				'order'    => 'ASC'
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