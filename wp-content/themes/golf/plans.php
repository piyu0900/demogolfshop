<?php
/* Template name:  Plans */

get_header(); ?>




		
		
		<div class="cp-inner-banner">
			<div class="container">
				<div class="cp-inner-banner-outer">
					<h2>				
						Golf Shop					</h2>
					
						<ul class="breadcrumb"><li class=""><a href="<?php echo get_home_url(); ?>">Home</a> </li> <li class="current">Golf Shop</li></ul>				
				</div>
			</div>
		</div>
	
		
	
	
	<div class="content cp-main-content">
	
		<div class="">
			    
			
			<div class="main-content margin-top-bottom-cp">
			
						
			<div class="page_content">
				<div class = "container">
					<div class = "row">
										<div id="block_content_first" class="col-md-12">
						<div class="container-res">
							<div class="row">
								<div class="">		<div id="post-555" class="post-555 page type-page status-publish hentry">
			<a href="index.html">
						</a>
			<div class="entry-content-cp">
				<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1475835918269 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
		  
		  <section class="cp-product-section pd-tb100 pd-b0">
			
			<div class="">
				
				<div class="row">
								<?php		
	
								function custom_pagination($numpages = '', $pagerange = '', $paged='') {

								  if (empty($pagerange)) {
									$pagerange = 2;
								  }

								  /**
								   * This first part of our function is a fallback
								   * for custom pagination inside a regular loop that
								   * uses the global $paged and global $wp_query variables.
								   * 
								   * It's good because we can now override default pagination
								   * in our theme, and use this function in default quries
								   * and custom queries.
								   */
								  global $paged;
								  if (empty($paged)) {
									$paged = 1;
								  }
								  if ($numpages == '') {
									global $wp_query;
									$numpages = $wp_query->max_num_pages;
									if(!$numpages) {
										$numpages = 1;
									}
								  }

								  
								  $pagination_args = array(
								  'base'            => get_pagenum_link(1) . '%_%',
								  'format'          => 'page/%#%',
								  'total'           => $numpages,
								  'current'         => $paged,
								  'show_all'        => False,
								  'end_size'        => 1,
								  'mid_size'        => $pagerange,
								  'prev_next'       => True,
								  'prev_text'       => __('&lsaquo; Previous'),
								  'next_text'       => __('Next &rsaquo;'),
								  'type'            => 'plain',
								  'add_args'        => false,
								  'add_fragment'    => ''
								);				
												
								$paginate_links = paginate_links($pagination_args);

								if ($paginate_links) {
								  echo "<ul class='pagination'>";
								   // echo "<span class='page-numbers page-num'>Page " . $paged . " of " . $numpages . "</span> ";
									echo $paginate_links;
								  echo "</ul>";
								}	
								  
								  
								  
								}

	
	
								$paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
								$args = array( 
								  
								'post_type' => 'product', 
								'post_status' => 'publish',                // - post is in trashbin (available with Version 2.9).
								'product_cat' => 'Plan',
								'order' => 'ASC',                      //(string) - Designates the ascending or descending order of the 'orderby' parameter. Defaultto 'DESC'.
								'orderby' => 'date',                    //(string) - Sort retrieved posts by parameter. Defaults to 'date'.
								'posts_per_page' => 16,
								'paged' => $paged
								);
									
								$the_query = new WP_Query( $args );
								// The Loop
								while ( $the_query->have_posts() ) : $the_query->the_post();
								?>
								<div class="col-md-3 col-sm-6">
									<div class="cp-pro-item">
									  <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a> </h3>
									  <figure class="cp-pro-img">
										<a href="<?php the_permalink(); ?>"><img width="235" height="235" src="<?php the_post_thumbnail_url(array(235*235)); ?>" class="attachment-235x235 size-235x235 wp-post-image" alt=""  sizes="(max-width: 235px) 100vw, 235px" /></a>
									  </figure>
									  <div class="cp-text">
										<span class="price price-old">&#36;<?php echo get_post_meta( get_the_ID(), '_regular_price', true); ?></span>
										<span class="price">&#36;<?php echo get_post_meta( get_the_ID(), '_sale_price', true); ?></span>
									  </div>
									</div>
								</div>
								<?php
								endwhile;
								?>
								
						<div class="cp-pagination-row" role="navigation">
							<nav>
								<?php
								if (function_exists(custom_pagination)) {
									custom_pagination($the_query->max_num_pages,"",$paged);
								}
								?>
							</nav>
						</div>
			
				</div>
			
			</div>
		
		</section></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div>
			</div>
		</div>
		
		<div class="comment-box"></div></div>							</div>
						</div>
					</div>
									</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	
	
	
	
		
		
<?php get_footer(); ?>
