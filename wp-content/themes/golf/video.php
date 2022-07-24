<?php
/* Template name:  Video */

get_header(); ?>


	








		
		<div class="cp-inner-banner">
			<div class="container">
				<div class="cp-inner-banner-outer">
					<h2>				
						Golf Videos					</h2>
					
						<ul class="breadcrumb"><li class=""><a href="<?php echo get_home_url(); ?>">Home</a> </li> <li class="current">Golf Videos</li></ul>				
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
								global $wpdb;
								$results = $wpdb->get_results( 'select * from `golfshop321`.`wp_videos` where `wp_videos`.`status` = 1' );
								foreach($results as $drft)
								{
									?>
									
									<div class="col-md-3 col-sm-6">
										<div class="cp-pro-item">
										  <h3><?php echo $drft->fullname; ?></h3>
										  <figure class="cp-pro-img">
												<?php 
												$videolink = $drft->video;
												echo do_shortcode('[video width="320" height="176" mp4="'.$videolink.'"][/video]'); 
												?>
										  </figure>
										  
										</div>
									</div>
									
									<?php
								}
								?>
								
								
			
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
	