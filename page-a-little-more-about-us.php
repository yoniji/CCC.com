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
        	
            <div class="widget tipsWidget" id="results">
                <h3 class="tips-title">results!</h3>
                <div class="tips-item">
                	<p>98% of our clients end up <br /> a successful match</p>
				</div><!--.tips-item-->
                <div class="tips-item">
                	<p>85% of the time our nannies <br /> with their families <br /> a minimum of one year</p>
				</div><!--.tips-item-->
            </div><!--.tipsWidget-->
        </div><!-- #secondary .widget-area -->

<?php get_footer(); ?>