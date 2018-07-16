<?php /* Template Name: Videos Template */ ?>
<?php get_header(); ?>
<div class="wrapper page-wrapper">
	<div class="container">
		<div class="content">
			<h2 class="page-title">
				Videos
			</h2>
			


			<?php
				$query = new WP_Query(array(
					'post_type' => 'videos'
				));
			?>
			<?php if ( $query->have_posts() ) { ?>
			<?php echo do_shortcode('[ajax_load_more container_type="div" post_type="videos" progress_bar="true" progress_bar_color="f71b59" button_label="Load More" posts_per_page="3" ]'); ?>
			<?php } else { ?>
				<div class="wysiwyg">
					<p>There are no videos to show at this time. Please check back soon.</p>
				</div>
			<?php } ?>


		</div>
	</div>
	</div>
<?php get_footer(); ?>

