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
        	<div id="blog-title"><a href="<?php echo($wpurl ); ?>/blog/" title="Chirp Blog">Chirp Blog</a></div>
			<?php if ( ! dynamic_sidebar( 'sidebar-blog' ) ) : ?>

				<div id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'chirp' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
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