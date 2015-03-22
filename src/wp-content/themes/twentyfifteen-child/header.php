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
  <link rel="shortcut icon" href="<?php echo get_child_template_directory_uri(); ?>/images/logo/brikk.ico" type="image/x-icon" />
  <meta name="description" content="Vi är ett designdrivet produktionsbolag, i hjärtat av Stockholm. Tillsammans med våra kunder producerar vi animation i världsklass!" />
  
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<!--<script>(function(){document.documentElement.className='js'})();</script>-->

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div id="container" class="preloader">
    
    <header id="header">

      <div id="wrapper_logo">
          <a href="./home"><img class="logo_static" alt="Brikk Produktionsbolag i stockholm" title="Brikk Produktionsbolag i stockholm" src="<?php echo get_child_template_directory_uri(); ?>/images/logo/animatieLogoStatic.jpg"/></a>
          <a href="./home"><img class="logo_animation" alt="Brikk Produktionsbolag i stockholm" title="Brikk Produktionsbolag i stockholm" src="<?php echo get_child_template_directory_uri(); ?>/images/logo/animateLogo.gif"/></a>
          <a href="./home"><img class="logo_brikk_fixed" alt="Brikk Produktionsbolag i stockholm" title="Brikk Produktionsbolag i stockholm" src="<?php echo get_child_template_directory_uri(); ?>/images/logo/brikkLogoFixed.jpg"/></a>
          <!-- <a href="./home"><img class="logo_animate" alt="logo" title="logo" src="<?php echo get_child_template_directory_uri(); ?>/images/logo/logo_animation_home.gif"/></a> -->
      </div>
    
      <div id="navigation">
          <ul>
            <!-- <li><a href="./home/">home</a></li> -->
            <!-- <li><a href="./showreel/">showreel</a></li> -->
            <!-- <li><a href="./work">work</a></li> -->
            <!-- <li><a href="./contact/">contact</a></li> -->
            <!-- <li><a href="./about/">about</a></li> -->
            <!-- <li><a href="./directors/">directors</a></li> -->
            <!-- <li><a href="http://brikkblog.tumblr.com/">blog</a></li> -->

            <?php
              $args = array(
                'theme_location'  => '',
                'menu'            => 'Navigation',
                'container'       => '',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'menu',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => '',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '%3$s',
                'depth'           => 1,
                'walker'          => ''
              );
            ?>

            <?php wp_nav_menu( $args ); ?> 

            <!-- <a href="./swe"><li class="language">SWE</li></a>
            <a href="./"><li class="language">ENG</li></a> -->
        </ul>
      </div>

      <div id="responsive_menu">
        <img id="menu_icon"src="<?php echo get_child_template_directory_uri(); ?>/images/buttons/menuIcon.png"/>
          <ul>
            <!-- <li><a href="./home/">home</a></li> -->
            <!-- <li><a href="./showreel/">showreel</a></li> -->
            <!-- <li><a href="./work/">work</a></li> -->
            <!-- <li><a href="./contact/">contact</a></li> -->
            <!-- <li><a href="./about/">about</a></li> -->
            <!-- <li><a href="http://brikkblog.tumblr.com/">blog</a></li> -->
            <!-- <li><a href="./directors/">directors</a></li> -->

            <?php wp_nav_menu( $args ); ?> 
            
        </ul>
      </div>

    </header>