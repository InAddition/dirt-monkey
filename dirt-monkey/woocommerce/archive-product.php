<?php get_header(); ?>
<div class="wrapper">
	<div class="container">
		<div class="content">
			<h2 class="page-title">
				Shop
			</h2>
					<div class="products-container">
						

						<?php
						    $args = array(
				            'post_type'   =>  'product',
				            'stock'       =>  1,
				            'showposts'   =>  20,
				            'orderby'     =>  'date',
				            'order'       =>  'DESC',
				        	);
						    $loop = new WP_Query( $args );
						    while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>

						    <?php 
						    	$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'square' ); 
						    ?>

						    

						    <a href="<?php the_permalink(); ?>" class="product">
			    				<div class="btn-container">
				    				<div class="btn">
				    					Buy Now
				    				</div>
				    				<img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>" >
				    			</div>
			    				<div class="product-info">
			    					<h2><?php the_title(); ?></h2>

			    					<h4><?php  echo wc_price($product->get_price_including_tax(1,$product->get_price())); ?>
			    					</h4>
			    				</div>
			    			</a>

						    <?php 
						        endwhile;
						        wp_reset_query(); 
						    ?>
					</div>
		</div>
	</div>
	</div>
<?php get_footer(); ?>

