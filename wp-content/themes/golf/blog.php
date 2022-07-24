<?php
/* Template name:  Blog */

get_header(); ?>


	
	  
	  
		
		<div class="cp-inner-banner">
			<div class="container">
				<div class="cp-inner-banner-outer">
					<h2>Blog</h2>
					
						<ul class="breadcrumb"><li class=""><a href="<?php echo get_home_url(); ?>">Home</a> </li> <li class="current">Blog</li></ul>				
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
								<div class="">		<div id="post-581" class="post-581 page type-page status-publish hentry">
			<a href="index.html">
						</a>
			<div class="entry-content-cp">
				<div class="vc_row wpb_row vc_row-fluid"><div class="wpb_column vc_column_container vc_col-sm-9"><div class="vc_column-inner vc_custom_1483438937165"><div class="wpb_wrapper">
			
			<section class="cp-blog-section pd-t100">
				
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
								  
								'post_type' => 'post', 
								'post_status' => 'publish',                // - post is in trashbin (available with Version 2.9).
								'order' => 'ASC',                      //(string) - Designates the ascending or descending order of the 'orderby' parameter. Defaultto 'DESC'.
								'orderby' => 'date',                    //(string) - Sort retrieved posts by parameter. Defaults to 'date'.
								'posts_per_page' => 10,
								'paged' => $paged
								);
									
								$the_query = new WP_Query( $args );
								// The Loop
								while ( $the_query->have_posts() ) : $the_query->the_post();
								?>
										<div class="cp-blog-item">
											<div class="cp-blog-img-holder">
												<figure class="cp-thumb">
												  <div class="post_featured_image thumbnail_image"><img width="750" height="415" src="<?php the_post_thumbnail_url(array(675*374)); ?>" class="attachment-full size-full wp-post-image" alt="" sizes="(max-width: 750px) 100vw, 750px" /></div>
												  <figcaption class="cp-caption">
													<div class="cp-date-holder">
													  <strong><?php echo get_the_date('d'); ?></strong> <?php echo get_the_date('F'); ?>  <br><?php echo get_the_date('Y'); ?>  
													</div>
												  </figcaption>
												</figure>
											</div>
											<div class="cp-text">
												<ul class="cp-meta-listed">
													<li><?php echo get_the_date(); ?></li>
												</ul>
												<h3><?php the_title(); ?> <br /></h3>
												<p style="margin-right: 20px;"><?php echo substr(get_the_content(),0,400)."....";?></p>

												<a href="<?php the_permalink(); ?>" class="cp-btn-style1">Read More</a>
											</div>
										</div>	
										
										<?php
										endwhile;
										?>
										
										
										
										
										
										
									
								
									<div class="cp-pagination-row">
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
			
			</section></div></div></div><div class="wpb_column vc_column_container vc_col-sm-3"><div class="vc_column-inner "><div class="wpb_wrapper"><div  class="wpb_widgetised_column wpb_content_element">
		<div class="wpb_wrapper">
			
			<div class="widget sidebar_section sidebar-recent-post widget-recent-post"><h3>POPULAR POSTS</h3>			<ul>
						<?php
						$args = array( 
								  
								'post_type' => 'post', 
								'post_status' => 'publish',                // - post is in trashbin (available with Version 2.9).
								'order' => 'DESC',                      //(string) - Designates the ascending or descending order of the 'orderby' parameter. Defaultto 'DESC'.
								'orderby' => 'date',                    //(string) - Sort retrieved posts by parameter. Defaults to 'date'.
								'posts_per_page' => 5,
								);
									
								$the_query = new WP_Query( $args );
								// The Loop
								while ( $the_query->have_posts() ) : $the_query->the_post();
						?>			
						<li>
							<div class="cp-recent-inner">
							  <figure class="cp-thumb">
								<a href="<?php the_permalink(); ?>"><img width="260" height="180" src="<?php the_post_thumbnail_url(array(260*180)); ?>" class="attachment-260x180 size-260x180 wp-post-image" alt=""  sizes="(max-width: 260px) 100vw, 260px" /></a>							  </figure>
							  <div class="cp-text">
								<a href="<?php the_permalink(); ?>"><h5><?php the_title(); ?></h5></a>
								<ul class="cp-meta-listed">
								  <li><?php echo get_the_date(); ?></li>
								</ul>
							  </div>
							</div>
						</li>
						<?php
							endwhile;
						?>
										
						
						
				</ul>
		
</div>

		</div>
	</div>
</div></div></div></div>
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
