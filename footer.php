<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Chrip
 * @since  Chirp 1.0
 */
?>

	</div><!-- #main -->

	<div id="colophon" role="contentinfo">
          <ul id="siteMap" class="clearfix">
                 <li class="siteMap-item"><a href="<?php echo($wpurl ); ?>">home</a></li>
                 <li class="siteMap-div">&sdot;</li>
                 <li class="siteMap-item"><a href="<?php echo($wpurl ); ?>/the-chirp-difference/">the chirp difference</a></li>
                 <li class="siteMap-div">&sdot;</li>
                 <li class="siteMap-item"><a href="<?php echo($wpurl ); ?>/a-little-more-about-us/">a little more about us</a></li>
                  <li class="siteMap-div">&sdot;</li>
                 <li class="siteMap-item"><a href="<?php echo($wpurl ); ?>/blog/">faq/blog</a></li>
                  <li class="siteMap-div">&sdot;</li>
                 <li class="siteMap-item"><a href="<?php echo($wpurl ); ?>/for-nannies/">for nannies (apply here)</a></li>
                        
            </ul>
			<div id="site-generator" >
				<p>&copy;2012 Chirp Design by 13 Creative </p>
			</div>
	</div><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>