<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( $related_products ) : ?>


<ul class="products">
		
	<div class="cp-related-section pd-t100">

		<div class="cp-heading-style1_v1">
					<h2>Related Product</h2>
				</div>
			
				<div id="cp-product-slider2" style="margin-bottom: 100px;" class="owl-carousel">
							<?php //echo the_title();
							global $product;
							$id = get_the_ID();
							//echo $id;
							$array_cat_link =  explode(">",$product->get_categories( ', ', ' ' . _n( ' ', '  ', $cat_count, 'woocommerce' ) . ' ', ' ' ));
							//print_r($array_cat_link);
							//echo $array_cat_link[1]."/////";
							$array_cat = explode("<",$array_cat_link[1]);
							//echo $array_cat[0];
							
							$args = array( 
								  
								'post_type' => 'product', 
								'post_status' => 'publish',                // - post is in trashbin (available with Version 2.9).
								'product_cat' => $array_cat[0],
								'order' => 'ASC',                      //(string) - Designates the ascending or descending order of the 'orderby' parameter. Defaultto 'DESC'.
								'orderby' => 'date',                    //(string) - Sort retrieved posts by parameter. Defaults to 'date'.
								'posts_per_page' => 12,
								'post__not_in' => array( $id, )
								);
									
								$the_query = new WP_Query( $args );
								// The Loop
								while ( $the_query->have_posts() ) : $the_query->the_post();
							?>
													
							<div class="item">
							  <!--Product Item Start-->
							  <div class="cp-pro-item">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a> </h3>
								<figure class="cp-pro-img">
									<a href="<?php the_permalink(); ?>"><img width="235" height="235" src="<?php the_post_thumbnail_url(array(235*235)); ?>" class="attachment-235x235 size-235x235 wp-post-image" alt="" sizes="(max-width: 235px) 100vw, 235px" /></a>							</figure>
								<div class="cp-text">
								  <span class="price price-old">&#036;<?php echo get_post_meta( get_the_ID(), '_regular_price', true); ?></span>
								  <span class="price">&#036;<?php echo get_post_meta( get_the_ID(), '_sale_price', true); ?>  </span>
								</div>
							  </div>
							  <!--Product Item End-->
							</div>
							<?php
								endwhile;
								?>
															
							
		
				</div>
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		<!--<section class="related products">
			
			
			
			<h2><?php esc_html_e( 'Related products', 'woocommerce' ); ?></h2>

			<?php woocommerce_product_loop_start(); ?>

				<?php foreach ( $related_products as $related_product ) : ?>

					<?php
						$post_object = get_post( $related_product->get_id() );

						setup_postdata( $GLOBALS['post'] =& $post_object );

						wc_get_template_part( 'content', 'product' ); ?>

				<?php endforeach; ?>

			<?php woocommerce_product_loop_end(); ?>

		</section>-->

	</div>
	
			
</ul>
	
	
	
	
<?php endif;

wp_reset_postdata();
