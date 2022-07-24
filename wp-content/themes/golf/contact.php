<?php
/* Template name:  Contact */

get_header(); ?>







		
		<div class="cp-inner-banner">
			<div class="container">
				<div class="cp-inner-banner-outer">
					<h2>				
						CONTACT US					</h2>
					
						<ul class="breadcrumb"><li class=""><a href="<?php echo get_home_url(); ?>">Home</a> </li> <li class="current">CONTACT US</li></ul>				
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
								<div class="">		
									<div id="post-2" class="post-2 page type-page status-publish hentry">
			
										<div class="entry-content-cp">
											<div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">				
											
											<div class="wpb_column vc_column_container vc_col-sm-12">
											<div class="vc_column-inner ">
											<div class="wpb_wrapper">
										
										<section class="cp-map-section cp-contact-section pd-tb100">
											<div id="cp-contact-map">
											<?php echo get_option('map'); ?>
											</div>
											 <div class="container">
												<ul class="cp-contact-listed">
												  <li>
													<div class="cp-address-box box1">
													  <h3>Address</h3>
													  <p><?php echo get_option('address'); ?></p>
													</div>
												  </li>
												  <li>
													<div class="cp-address-box box2">
													  <h3>Phone</h3>
													  <p><?php echo get_option('tel'); ?> - Office</p> 
													  <p><?php echo get_option('fax'); ?> - Fax</p>  
													</div>
												  </li>
												  <li>
													<div class="cp-address-box box3">
													  <h3>Email</h3>
													  <p><a href="mailto:<?php echo get_option('email'); ?>"><?php echo get_option('email'); ?></a></p>
													  <p><a href="mailto:<?php echo get_option('email2'); ?>"><?php echo get_option('email2'); ?></a></p>
													</div>
												  </li>
												</ul>
											  </div>
										</section></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div class="vc_row wpb_row vc_row-fluid vc_custom_1476708498110">				
											
											<div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
										
										<section class="cp-map-section cp-contact-section ">
										  
										  <div class="cp-contact-text-holder">
											<div class="cp-map-text">
											  <?php $the_query = new WP_Query( 'page_id=17' ); ?>
												<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>	
												<?php the_content(); ?>
											  <?php endwhile;?>
											  <?php echo do_shortcode('[contact-form-7 id="4" title="Contact form 1"]');  ?>
											</div>
										  </div>
										</section></div></div></div></div>
										</div>
									</div>
		
									<div class="comment-box"></div>
								</div>
							</div>
						</div>
					</div>
									</div>
				</div>
				</div>
			</div>
		</div>
	</div>
	
		
		
		










	
		
		
<?php get_footer(); ?>
