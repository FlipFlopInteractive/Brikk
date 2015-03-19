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


	<article class="p_content_wordpress">
		<?php echo wpautop( $post->post_content ); ?>
	</article>
	<!--<?php echo get_all_cases( 'col-lg-3 col-md-3 col-sm-4 col-xs-1' ); ?>-->

	<div id="categories">
		<ul class="cl-effect-1 filters">
			<li class="staff">staff pick</li>
			<li class="animation">animation</li>
			<li class="stopmotion">stopmotion</li>
			<li class="cel">cel-animation</li>
			<li class="live">live-action</li>
			<li class="all">all</li>
		</ul>
	</div>

		<?php echo get_all_cases( 'workGrid'); ?>

</section> 

 <?php get_footer(); ?>

