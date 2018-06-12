<?php
/** 
* Product Detail Template
*
* $post = post information, use this to create the Product Object
* $WC_Product = class to instantiate
*
* The basic methods are used here, for more methods, check out the Class documentation: https://docs.woothemes.com/wc-apidocs/class-WC_Product.html
*/
global $post;
$product = get_product($post);
$image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'small' ); 
$lrg_image = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID ), 'full' );
$attachment_ids = $product->get_gallery_attachment_ids(); 
$description = $product->get_description();
$attributes = $product->get_variation_attributes();
$attribute_keys = array_keys( $attributes );
?>
<?php get_header(); ?>
<div class="wrapper">
	<div class="container">
		<div class="content">
			<h2 class="page-title">
				Shop
			</h2>
			<?php do_action( 'woo_before_product_detail' ); ?>
			<div class="single-product-info">
				<div class="single-product-gallery">
					<a href="<?php  echo $lrg_image[0]; ?>" class="venobox desktop-product-thumb" data-gall="gallery">
						<img src="<?php  echo $image[0]; ?>" data-id="<?php echo $loop->post->ID; ?>" class="single-product-feature-photo">
					</a>
					<?php if($attachment_ids) { ?>
					<div class="product-thumbs">
						<?php foreach( array_slice( $attachment_ids, 0,3 ) as $attachment_id ) : ?>

					  <?php $thumbnail_url = wp_get_attachment_image_src( $attachment_id, 'full' )[0];
					  $thumbnail = wp_get_attachment_image_src( $attachment_id, 'square' )[0];
					  ?>

					  <a href="<?php echo $thumbnail_url; ?>" class="venobox" data-gall="gallery"><img class="thumb" src="<?php echo $thumbnail; ?>"></a>

					<?php endforeach; ?>
					</div>
					<?php } ?>
				</div>
				<div class="single-product-details wysiwyg">
					<h1><?php the_title(); ?></h1>

						<h3><?php echo wc_price($product->get_price_including_tax(1,$product->get_price())); ?></h3>
					<div class="single-product-excerpt">
						<?php the_excerpt(); ?>
					</div>

					<?php if($product->is_in_stock()): ?>

													<!-- Add To Cart -->
													
													<div class="add-to-cart">

													<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

														<form class="cart" method="post" enctype='multipart/form-data' data-product_id="<?php echo absint( $product->id ); ?>" data-product_variations="<?php echo htmlspecialchars( json_encode( $attributes ) ) ?>">

															<?php do_action( 'woocommerce_before_variations_form' ); ?>

															<?php if ($product->product_type == 'variable') : ?>

																<?php if ( empty( $attributes ) && false !== $product_variable->get_available_variations() ) : ?>
																		<p class="stock out-of-stock"><?php _e( 'This product is currently out of stock and unavailable.', 'woocommerce' ); ?></p>
																	<?php else : ?>
																		<div class="variations">
																			<?php foreach ($attributes as $attribute => $options) : ?>
																				<label for="<?php echo sanitize_title( $attribute ); ?>"><?php echo wc_attribute_label( $attribute ); ?></label>
																				<?php 
																				wc_dropdown_variation_attribute_options( array( 'options' => $options, 'attribute' => $attribute, 'product' => $product_variable, 'selected' => '' ) ); ?>
																			<?php endforeach; ?>
																		</div>

																		<input type="hidden" name="variation_id" class="variation_id" value="0" />

																<?php endif; ?>

															<?php endif; ?>

															<div class="details">
																
														 		<div class="info">

														 			<input type="submit" value="<?php echo esc_html( $product->single_add_to_cart_text() ); ?>" class="add_to_cart_button button alt "  />

														 			<?php
																 		if ( ! $product->is_sold_individually() ) {
																 			woocommerce_quantity_input( array(
																 				'min_value'   => apply_filters( 'woocommerce_quantity_input_min', 1, $product ),
																 				'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product ),
																 				'input_value' => ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 )
																 			) );
																 		}
																 	?>

															 		<?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>

																 	<input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />
																 	
																 	

																 	<?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>
																 	
														 		</div>
														 	</div>
														</form>
													</div>
												<?php else: ?>
													<h3> Sorry, this product is not available. </h3>
												<?php endif; ?>
				</div>
			</div>

		</div>
	</div>
	</div>

<?php get_footer(); ?>

<script type='text/javascript' src='<?php echo bloginfo('url'); ?>/wp-content/plugins/woocommerce/assets/js/select2/select2.min.js?ver=3.5.4'></script>