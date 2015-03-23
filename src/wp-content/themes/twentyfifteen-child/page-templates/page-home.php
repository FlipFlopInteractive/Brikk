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

	<?php echo get_page_heading( $post->ID ); ?>
	<?php echo get_page_heading_title( $post->ID ); ?>

	<article class="p_content_wordpress">
		<?php echo wpautop( $post->post_content ); ?>
	</article>

</section>

 <?php get_footer(); ?>