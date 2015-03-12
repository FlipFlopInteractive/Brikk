<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

			<div class="container-fluid">
				<div class="row">
					<?php echo get_case_vimeo( $post->ID ); ?>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<h1><?php the_title(); ?></h1>
						<?php the_content(); ?>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row">
					<?php echo get_case_stills( $post->ID, 'col-lg-6 col-md-6' ); ?>
				</div>
			</div>
			
			<?php endwhile; ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
