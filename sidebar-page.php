<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage chirp
 * @since Chirp 1.0
 */

$current_layout = '';
$blockname ='';
if(empty( $post->post_parent )) {
	$blockname = $post->post_name;
} else {
	$blockname = get_page($post->post_parent)->post_name;
}
if ( 'content' != $current_layout ) :
?>
		<div id="secondary" class="widget-area" role="complementary">
        	<div id="<?php echo($blockname); ?>-photo"></div>
            <div class="widget widget_categories">
            <ul>
		<?php
		if($post->post_name != 'faq') {
			$args = array(
				'depth'        => 0,
				'show_date'    => '',
				'child_of'     => $post->ID,
				'exclude'      => '',
				'include'      => '',
				'title_li'     => __('<h3 class="widget-title">'.get_the_title().'</h3>'),
				'echo'         => 1,
				'link_before'  => ':: ',
				'link_after'   => '',
				'walker' => '' ); 
				
			wp_list_pages($args); 
			
		}//end if ?>
            </ul>
            </div>
			<?php if ( ! dynamic_sidebar( 'sidebar-'.$blockname ) ) : ?>



			<?php endif; // end sidebar widget area ?>
            
            <div id="meta" class="widget">
                <div class="textwidget">
                <h3 id="subcribe-title">&gt;&gt; Subscribe</h3>
                <form id="Subscribe" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=yoniji/FkKK', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p id="subscribe-note">Enter your email address:</p><p><input type="text" name="email"/></p><input type="hidden" value="yoniji/FkKK" name="uri"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Subscribe" /></form>
                </div>
            </div>
            
		</div><!-- #secondary .widget-area -->
<?php endif; ?>