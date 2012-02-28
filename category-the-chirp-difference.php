<?php
/**
 * The blog template file.
 *
 * @package chirp
 * @subpackage Chirp
 */

get_header(); ?>

			<div id="tcd-content" role="main">        
            
            
            <?php 
			$top_id = 15;
			$top_post = get_post($top_id); 
			$title = $top_post->post_title;
			$content = $top_post->post_content ;
			
			?>

            <div id="tcd-top">
            <h2 class="tcd-topTitle"><?php echo($title); ?></h2>
            <div class="tcd-topContent"><?php echo($content); ?></div>
            </div>
                

                
	


			</div><!-- #content -->

<?php get_footer(); ?>