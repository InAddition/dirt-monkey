<?php /* Template Name: About Template */ ?>
<?php get_header(); ?>
<div class="wrapper page-wrapper">
	<div class="container">
		<div class="content">
			<h2 class="page-title">
				Bio
			</h2>
			<?php 
				$headline = get_field('headline');
				$bio = get_field('bio');
			?>
			<p class="bio-headline">
				<?php echo $headline ?>
			</p>
			<p class="bio-copy">
				<?php echo $bio ?>
			</p>
		</div>
	</div>
	</div>
<?php get_footer(); ?>

