<?php /* Template Name: Videos Template */ ?>
<?php get_header(); ?>
<div class="wrapper">
	<div class="container">
		<div class="content">
			<h2 class="page-title">
				Videos
			</h2>
			<?php echo do_shortcode('[ajax_load_more container_type="div" post_type="videos" progress_bar="true" progress_bar_color="f71b59" button_label="Load More" posts_per_page="3" ]'); ?>
		</div>
	</div>
	</div>
<?php get_footer(); ?>

