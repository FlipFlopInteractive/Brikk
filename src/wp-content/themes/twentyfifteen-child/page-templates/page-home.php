<?php
/**
 * Template Name: home page
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<?php get_header(); ?>

<section class="homepage">

	<!--<?php echo get_page_heading( $post->ID ); ?>-->

	<div class="ImageHeader">
		<h1>Animation - stop motion - cel animation - live action</h1>
		<div class="background_wrapper">	
			<div class="embed-responsive embed-responsive-16by9">	
				<iframe src="https://player.vimeo.com/video/122655942?color=f0f0f0&amp;title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;autoplay=1&amp;loop=1" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				
			</div>
		</div>
	</div>

	<article class="p_content_wordpress">
		<?php echo wpautop( $post->post_content ); ?>
	</article>

</section>

 <?php get_footer(); ?>