<?php
/**
 * The front page template file.
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
		$blockname ='';
		if(empty( $post->post_parent )) {
			$blockname = $post->post_name;
		} else {
			$blockname = get_page($post->post_parent)->post_name;
		}
		?>
		<div id="secondary" class="widget-area" role="complementary">
        	<div id="<?php echo($blockname); ?>-photo"></div>
        	
            <div class="widget" id="subscribeContainer">
                <h3 id="subcribe-title">stay in the know!</h3>
                <div id="subcribe-intro">We’ll keep in touch (sparingly, we promise) with relevant info about families, nannies
and our workshop events.</div>
                <form id="Subscribe" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=yoniji/FkKK', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p id="subscribe-note">Enter your email address:</p><p><input type="text" name="email"/></p><input type="hidden" value="yoniji/FkKK" name="uri"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Submit" /></form>
            </div>
            
        </div><!-- #secondary .widget-area -->

<?php get_footer(); ?>