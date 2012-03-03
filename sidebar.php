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
			<?php if ( ! dynamic_sidebar( 'sidebar-blog' ) ) : ?>

				<div id="blog-categories" class="widget widget_categories">
					<h3 class="parent-title">categories</h3>
					<ul>
						<?php wp_list_categories('hide_empty=0&title_li='); ?>
					</ul>
				</div>

				<div id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'chirp' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</div>

			<?php endif; // end sidebar widget area ?>

		</div><!-- #secondary .widget-area -->
<?php endif; ?>