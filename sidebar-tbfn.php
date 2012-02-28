<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage chirp
 * @since Chirp 1.0
 */

//$options = twentyeleven_get_theme_options();
//aihtemp $current_layout = $options['theme_layout'];
$current_layout = '';
if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
        	<div id="tbfn-photo"></div>
            <div class="widget">
            <ul>
		<?php $args = array(
            'depth'        => 0,
            'show_date'    => '',
            'child_of'     => 26,
            'exclude'      => '',
            'include'      => '',
            'title_li'     => __('<h3>the Best Fit Nanny</h3>'),
            'echo'         => 1,
            'link_before'  => '&gt;&gt; ',
            'link_after'   => '',
            'walker' => '' ); ?>
    
            <?php wp_list_pages($args); ?>
            </ul>
            </div>
			<?php if ( ! dynamic_sidebar( 'sidebar-tbfn' ) ) : ?>



			<?php endif; // end sidebar widget area ?>
            
            <div id="meta" class="widget">
                <div class="textwidget">
                <form id="Subscribe" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=yoniji/FkKK', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p id="subscribe-note">Enter your email address:</p><p><input type="text" name="email"/></p><input type="hidden" value="yoniji/FkKK" name="uri"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Subscribe" /></form>
                </div>
            </div>
            
		</div><!-- #secondary .widget-area -->
<?php endif; ?>