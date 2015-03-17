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
	<!--<?php echo get_all_cases( 'col-lg-3 col-md-3 col-sm-4 col-xs-1' ); ?>-->

	<div id="navigation">
		<ul class="cl-effect-1 filters">
			<a href="" data-filter=".1"><li>staff pick</li></a>
			<a href="" data-filter=".2"><li>animation</li></a>
			<a href="" data-filter=".3"><li>stopmotion</li></a>
			<a href="" data-filter=".4"><li>cel-animation</li></a>
			<a href="" data-filter=".5"><li>live-action</li></a>
			<a href="#" data-filter="*"><li>all</li></a>
		</ul>
	</div>

		<?php echo get_all_cases( 'workGrid'); ?>

</section> 

 <?php get_footer(); ?>

