<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

<sectin class="single">

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
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php the_title( '<h2 class="text_single">', '</h2>' ); ?>
						<?php the_content(); ?>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php printf( '<h3>%s</h3>', __( 'CREDITS', 'twentyfifteen' )); ?>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-1"></div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-11">
						<div class="row">
							<?php echo get_case_detail_information( $case_detail_id->ID ); ?>	
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<?php printf( '<h3>%s</h3>', __( 'STILLS FROM PROJECT', 'twentyfifteen' )); ?>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row detailStills">
					<?php echo get_case_stills( $post->ID, 'detailGrid' ); ?>
				</div>
			</div>

			<div class="container">
				<div class="row extra_movies">
					<?php echo get_case_extra_movies( $post_id->ID ); ?>
				</div>
			</div>
			
			<?php endwhile; ?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

</section>	

<?php get_footer(); ?>
