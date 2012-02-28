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
			$top_id = 788;
			$top_post = get_post($top_id); 
			$title = $top_post->post_title;
			$content = $top_post->post_content ;
			$edit_link = get_edit_post_link( $top_id);
			?>

            <div id="tcd-top">
            <h2 class="tcd-topTitle"><?php echo($title); ?></h2>
            <div class="tcd-topContent"><?php echo($content); ?></div>
            
            <?php if (current_user_can('manage_options') ) { ?>
            <a href=" <?php echo($edit_link);?> ">&gt;&gt; Edit</a>
            <?php } ?>
            </div>

            <?php 
			$btm_left_slug= "the-chirp-difference/tcd-left";
			$btm_right_slug = "the-chirp-difference/tcd-center";
			$btm_left_post = get_page_by_path( $btm_left_slug ); 
			$btm_right_post = get_page_by_path( $btm_right_slug ); 
			
			
			$title = $btm_left_post->post_title;
			$content = $btm_left_post ->post_content ;
			$edit_link = get_edit_post_link( $btm_left_post->ID);
			$permalink = get_permalink( $btm_left_post->ID);
			?>         
            <div id="tcd-bottom">
                <div class="tcd-bottom-block">
                    <div id="tcd-bottom-leftIntro" title="Not All Nannies Are Created Equal">Not All Nannies Are Created Equal</div>
                    <h3 id="tcd-bottom-leftTitle"><a href="<?php echo($permalink);?>" title="<?php echo($title); ?>"><?php echo($title); ?></a></h3>
                    <div class="tcd-bottomContent"><?php echo($content); ?></div>
              		<div class="tcd-bottomLinks">
                    <?php if (current_user_can('manage_options') ) { ?>
                    <a href=" <?php echo($edit_link);?> " class="fl">&gt;&gt; Edit </a> 
                    <?php } ?>
                    <a href="<?php echo($permalink);?> " class="readMoreLink">&gt;&gt; Read More</a>
                    </div>
                </div>
                
             <?php
			$title = $btm_right_post->post_title;
			$content = $btm_right_post ->post_content ;
			$edit_link = get_edit_post_link( $btm_right_post->ID );
			$permalink = get_permalink( $btm_right_post->ID );
			?>  
                <div class="tcd-bottom-block">
                    <div id="tcd-bottom-centerIntro" title="Does it sound all too familliar?">Does it sound all too familiar?</div>
                    <h3 id="tcd-bottom-centerTitle"><a href="<?php echo($permalink);?>" title="<?php echo($title); ?>"><?php echo($title); ?></a></h3>
                    <div class="tcd-bottomContent"><?php echo($content); ?></div>
              		<div class="tcd-bottomLinks">
                    <?php if (current_user_can('manage_options') ) { ?>
                    <a href=" <?php echo($edit_link);?> " class="fl">&gt;&gt; Edit </a> 
                    <?php } ?>
                    <a href="<?php echo($permalink);?> " class="readMoreLink">&gt;&gt; Read More</a>
                    </div>
                </div>
            </div>
                
            <div id="tcd-book">
            	<a id="tcd-book-link" href="" title="Our essential guide on hiring a nanny is now available on amazon.com. Read more here..."></a>
            </div>

                
	


			</div><!-- #content -->

<?php get_footer(); ?>