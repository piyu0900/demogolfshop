<?php
/**
 * Sidebar template containing the primary and secondary widget areas
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		<div class="col-md-3 content_sidebar sidebar side-bar">
					
			<div class="widget sidebar_section sidebar-recent-post widget-recent-post">
			<h3>POPULAR POSTS</h3>			
				<ul>
                     
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
