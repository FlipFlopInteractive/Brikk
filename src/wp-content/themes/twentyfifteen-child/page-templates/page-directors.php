<?php
/**
 * Template Name: directors page
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php get_header(); ?>

<section class="directors">

	<?php echo get_page_heading( $post->ID ); ?>
	<?php echo wpautop( $post->post_content ); ?>

<img src="<?php echo get_child_template_directory_uri(); ?>/images/Academylog.png"/>
<p>For US clients contact Mike Holm - Executive Producer at The Academy.mike@academycreative.com</br>
501 E Pine - Suite 206</br>
Seattle, WA 98122</br>
P. 206.325.5125</p>

</section> 

 <?php get_footer(); ?>