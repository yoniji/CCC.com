<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Chirp
 * @since Chirp 1.0
 */
?><!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'chirp' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed">
	<div id="branding"  class="clearfix" role="banner">
			<div id="logo">
				<h1 id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?><span></span></a></h1>
				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>



			<?php
				// Has the text been hidden?
				if ( 'blank' == get_header_textcolor() ) :
			?>
				<div class="only-search<?php if ( ! empty( $header_image ) ) : ?> with-image<?php endif; ?>">
				<?php //aihtemp get_search_form(); ?>
				</div>
			<?php
				else :
			?>
				<?php //aihtemp get_search_form(); ?>
			<?php endif; ?>
            <div id="chirpEmail">&gt;&gt; call or <a href="mailto:info@chirpchirpchirp.com">click to email</a> for a free consultation!</div>
			<div id="chirpTel"><sup>tel</sup> 415 331 nani<small>(</small>6264<small>)</small></div>
            
			<div id="access" role="navigation">
            	
                <div id="chirpMenuRight"></div>
                
				<h3 class="assistive-text"><?php _e( 'Main menu', 'chirp' ); ?></h3>
				<?php /*  Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff. */ ?>
				<div class="skip-link"><a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to primary content', 'chirp' ); ?>"><?php _e( 'Skip to primary content', 'chirp' ); ?></a></div>
				<div class="skip-link"><a class="assistive-text" href="#secondary" title="<?php esc_attr_e( 'Skip to secondary content', 'chirp' ); ?>"><?php _e( 'Skip to secondary content', 'chirp' ); ?></a></div>
				<?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
				<?php //wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
                
				<?php /* get block id */
				$blockname ='';
				if(empty( $post->post_parent )) {
					$blockname = $post->post_name;
				} else {
					$blockname = get_page($post->post_parent)->post_name;
				}
				?>
                <?php /* chirp navigation */ ?>
                <div id="chirpMenu">
                	<ul>
                    <?php $wpurl = get_bloginfo('wpurl'); ?>
                    	<li class="chirpMenu-item"><a href="<?php echo($wpurl ); ?>/the-chirp-difference" id="theChirpDifference" <?php if ( 'the-chirp-difference' == $blockname )  { ?>class="current" <?php }//end if ?>>the chirp <br />difference</a></li>
                        <li class="chirpMenu-item"><a href="<?php echo($wpurl ); ?>/a-little-more-about-us/" id="aLittleMoreAboutUs" <?php if ( 'the-best-fit-nanny' == $blockname )  { ?>class="current" <?php }//end if ?>>a little more <br />about us</a></li>
                        <li class="chirpMenu-item"><a href="<?php echo($wpurl ); ?>/blog/" id="chirpBlog" <?php if ( 'the-chirp-difference' != $blockname && (is_home() || !is_page()))  { ?>class="current" <?php }//end if ?> >in-depth <br />faq/blog</a></li>
                        <li class="chirpMenu-item"><a href="<?php echo($wpurl ); ?>/for-nannies/" id="forNannies" <?php if ( 'faq' == $blockname )  { ?>class="current" <?php }//end if ?> >for nannies <br />(apply here)</a></li>
                        
                    </ul>
                </div><!-- #chirpMenu -->
           		
			</div><!-- #access -->
            
			<div id="chirpIntro">chirp is an official nanny placement agency<br />of the 2012-2013 america’s cup, in san francisco. </div><!-- #chirpIntro -->
            
	</div><!-- #branding -->


	<div id="main" class="clearfix">