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
	<script>(function(){document.documentElement.className='js'})();</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div id="container">
    
    <header id="header" class="clearfix">

      <div id="wrapper_logo">
          <a href="http://local.brikk.se"><img class="logo" alt="logo" title="logo" src="<?php echo get_child_template_directory_uri(); ?>/images/logo/logo_animate.svg"/></a>
      </div>
    
    <div id="navigation">
        <ul>
          <li><a href="http://local.brikk.se/showreel/">showreel</a></li>
          <li><a href="http://local.brikk.se/work">work</a></li>
          <li><a href="http://local.brikk.se/contact/">contact</a></li>
          <li><a href="http://local.brikk.se/about/">about</a></li>
          <li><a href="http://brikkblogg.tumblr.com/">blog</a></li>
          <li><a href="http://local.brikk.se/directors/">directors</a></li>
      </ul>
    </div>
    
    <div id="languageChanger">
     <!-- <p>SWE</p>-->
      <!--<p>ENG</p>-->
    </div>

    <div id="responsive_menu">
      <img id="menu_icon"src="<?php echo get_child_template_directory_uri(); ?>/images/buttons/menu_icon.png"/>
        <ul>
          <li><a href="http://local.brikk.se/showreel/">showreel</a></li>
          <li><a href="http://local.brikk.se/work">work</a></li>
          <li><a href="http://local.brikk.se/contact/">contact</a></li>
          <li><a href="http://local.brikk.se/about/">about</a></li>
          <li><a href="http://brikkblogg.tumblr.com/">blog</a></li>
          <li><a href="http://local.brikk.se/directors/">directors</a></li>
      </ul>
    </div>

    </header>