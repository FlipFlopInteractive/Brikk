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
	<?php echo wpautop( $post->post_content ); ?>
	
	<div id="information_contact">
		<h2>Schedule an appointment</h2>
		<p><a href="mailto:samuel@brikk.se">samuel@brikk.se</a></br>+46 (0)73 612 06 04</p>
	</div>

	<article id="members" class="clearfix">
	
		<?php echo get_contact_faces( $post->ID); ?>

	</article>

</section> 

 <?php get_footer(); ?>
