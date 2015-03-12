<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<!--<script>(function(){document.documentElement.className='js'})();</script>-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div id="preloaderAnimation">
      <img class="logo" alt="logo" title="logo" src="<?php echo get_child_template_directory_uri(); ?>/images/preloader/logo_animation.gif"/>
    </div>

  <div id="container" class="preloader">
    
    <header id="header">

      <div id="wrapper_logo">
          <a href="./home"><img class="logo_static" alt="logo" title="logo" src="<?php echo get_child_template_directory_uri(); ?>/images/logo/animatie_logo_static.jpg"/></a>
          <a href="./home"><img class="logo_animation" alt="logo" title="logo" src="<?php echo get_child_template_directory_uri(); ?>/images/logo/animate_logo.gif"/></a>
          <a href="./home"><img class="logo_brikk_fixed" alt="logo" title="logo" src="<?php echo get_child_template_directory_uri(); ?>/images/logo/brikk_logo_fixed.jpg"/></a>
          <!-- <a href="./home"><img class="logo_animate" alt="logo" title="logo" src="<?php echo get_child_template_directory_uri(); ?>/images/logo/logo_animation_home.gif"/></a> -->
      </div>
    
    <div id="navigation">
        <ul>
          <li><a href="./home/">home</a></li>
          <li><a href="./showreel/">showreel</a></li>
          <li><a href="./work">work</a></li>
          <li><a href="./contact/">contact</a></li>
          <li><a href="./about/">about</a></li>
          <li><a href="./directors/">directors</a></li>
          <li><a href="http://brikkblog.tumblr.com/">blog</a></li>
          <li class="language">SWE</li>
          <li class="language">ENG</li>
      </ul>
    </div>

    <div id="responsive_menu">
      <img id="menu_icon"src="<?php echo get_child_template_directory_uri(); ?>/images/buttons/menu_icon.png"/>
        <ul>
          <li><a href="./home/">home</a></li>
          <li><a href="./showreel/">showreel</a></li>
          <li><a href="./work/">work</a></li>
          <li><a href="./contact/">contact</a></li>
          <li><a href="./about/">about</a></li>
          <li><a href="./directors/">directors</a></li>
          <li><a href="http://brikkblog.tumblr.com/">blog</a></li>
          
      </ul>
    </div>

    </header>