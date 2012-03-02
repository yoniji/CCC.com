<?php
/**
 * page template file.
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

		<div id="secondary" class="widget-area" role="complementary">
        	<div id="<?php echo($post->post_name); ?>-photo"></div>
        	
            <div class="widget tipsWidget">
                <h3 class="tips-title">singing our praise!</h3>
                <div class="tips-item">
                	<p>Alyce is amazing! Her service went well beyond finding us a nanny — she clearly was committed to finding a perfect fit for our family. We cannot recommend her highly enough!</p>
					<p class="tips-meta">-Emily, mother of a 3mos old son</p>
				</div><!--.tips-item-->
                <div class="tips-item">
                	<p>I have to admit - it took us (new parents) a while to realize that we were on a "nanny treadmill"!  Having a resource like you is invaluable. </p>
					<p class="tips-meta">-Tony</p>
				</div><!--.tips-item-->
                <div class="tips-item">
                	<p>Thanks for sending me to meet with your clients last week.  I noticed that practically every family you sent me to meet liked me!  The ratio, compared to other agencies I’ve worked with, is much higher. You do a good job of 
matching people up! Thanks. </p>
					<p class="tips-meta">-Tracy, perspective nanny candidate</p>
				</div><!--.tips-item-->
            </div><!--.tipsWidget-->
        </div><!-- #secondary .widget-area -->

<?php get_footer(); ?>