<?php
/**
 * Template Name: work page
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php get_header(); ?>

<section class="work">
      
	<?php echo get_page_heading( $post->ID ); ?>
	<?php echo wpautop( $post->post_content ); ?>
	<?php echo get_all_cases( 'col-lg-3 col-md-3 col-sm-4 col-xs-1' ); ?>

</section> 

 <?php get_footer(); ?>

