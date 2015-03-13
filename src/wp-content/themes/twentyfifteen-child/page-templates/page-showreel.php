<?php
/**
 * Template Name: showreel page
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php get_header(); ?>

<section class="showreel">

		<div class="container-fluid">
				<div class="row">
					<?php echo get_showreel_vimeo( $post->ID ); ?>
				</div>
		</div>

		<?php echo wpautop( $post->post_content ); ?>

	

</section> 

 <?php get_footer(); ?>