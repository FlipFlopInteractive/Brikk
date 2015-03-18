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
						<h2 class="text_single"><?php the_title(); ?></h2>
							<p>
								<?php the_content(); ?>
							</p>

							<?php echo get_case_detail_information($case_detail_id->ID); ?>

							<h2 class="text_single">stills from project</h2>
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

<?php get_footer(); ?>
