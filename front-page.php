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
				
				<div id="home-book">
					<h3 id="home-book-title">&gt;&gt; our essential guide on hiring the right<br /> is now available on amazon.com</h3>
					<p id="home-book-intro">Nannies for Modern Moms is an invaluable resource, providing step-by-step guidelines for parents who want to find the right nanny for their family. With customizable worksheets and abundant childcare information, this book will give you the tools you need to get through the process successfully. </p>
					<p class="clearfix" style="margin-bottom: 0"><a href=" http://www.amazon.com/Nannies-Modern-Moms-Essential-Hiring/dp/098157730X/ref=sr_1_1?ie=UTF8&qid=1330044044&sr=8-1" target="_blank" id="home-book-buyLink">click to buy now!</a></p>
				</div><!--#home-book-->
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
                <form id="Subscribe" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=yoniji/FkKK', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p id="subscribe-note">Enter your email address:</p>
                	<p><input type="text" name="email"/>&nbsp;&nbsp;<input type="submit" value="Submit" /></p>
                	<input type="hidden" value="yoniji/FkKK" name="uri"/>
                	<input type="hidden" name="loc" value="en_US"/></form>
            </div>

            <div class="widget" id="memberOfContainer">
                <h3>pround member of:</h3>
                <div id="memberOf">
                	<a href="http://www.nanny.org/" id="inaLink" target="_blank" title="International Nanny Association"></a>
                	<a href="http://www.naeyc.org/" id="naeycLink" target="_blank" title="National Association for the Education of Young Children"></a>
                	<a href="http://www.zerotothree.org/" id="zttLink" target="_blank" title="ZERO TO THREE"></a>
                	<a href="http://www.naswdc.org/" id="naswLink" target="_blank" title="National Association of Social Workers"></a>
                </div>
            </div>
            
        </div><!-- #secondary .widget-area -->

<?php get_footer(); ?>