<?php
/**
 * Template Name: contact Page
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php get_header(); ?>

<section class="contact">

 
 	<?php echo get_page_heading( $post->ID ); ?>

 	<article class="p_content_wordpress">
		<?php echo wpautop( $post->post_content ); ?>
	</article>

	<article id="members" class="clearfix">
	
		<?php echo get_contact_faces( $post->ID); ?>

	</article>

</section> 

 <?php get_footer(); ?>
