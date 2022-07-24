<?php

/* Template name:  Home */

get_header(); ?>

		
				
				
	<div class="content cp-main-content">
	
		<div class="">
			    
			
			<div class="main-content margin-top-bottom-cp">
			
			<section class="cp-banner">
					<div id="cp-banner-slider" class="owl-carousel">
						<?php
	
						$args = array( 
							  
							'post_type' => 'sliders', 
							'post_status' => 'publish',                // - post is in trashbin (available with Version 2.9).
							'order' => 'ASC',                      //(string) - Designates the ascending or descending order of the 'orderby' parameter. Defaultto 'DESC'.
							'orderby' => 'date',                    //(string) - Sort retrieved posts by parameter. Defaults to 'date'.
							);
								
							$the_query = new WP_Query( $args );
							$c = 1;
							// The Loop
							if ( $the_query->have_posts() ) :
							while ( $the_query->have_posts() ) : $the_query->the_post();
							?>
						<div class="item" data-hash="<?php echo $c;?>">
							<img src="<?php the_post_thumbnail_url(array(1349*675)); ?>" alt="img">
							<div class="cp-banner-content">
							  <div class="container">
								  <?php the_content(); ?>
								<strong class="title"><?php the_title(); ?></strong>
							  </div>
							</div>
						</div>
						<?php
						$c++;
						endwhile;
						endif;
						?>
						
					</div>
					<ul class="cp-hash-listed">
						<?php
	
						$args1 = array( 
							  
							'post_type' => 'sliders', 
							'post_status' => 'publish',                // - post is in trashbin (available with Version 2.9).
							'order' => 'ASC',                      //(string) - Designates the ascending or descending order of the 'orderby' parameter. Defaultto 'DESC'.
							'orderby' => 'date',                    //(string) - Sort retrieved posts by parameter. Defaults to 'date'.
							);
								
							$the_query1 = new WP_Query( $args1 );
							$c1 = 1;
							// The Loop
							if ( $the_query1->have_posts() ) :
							while ( $the_query1->have_posts() ) : $the_query1->the_post();
							?>
						<li><a class="cp-hash-btn" href="#<?php echo $c1;?>"><?php echo $c1;?></a></li>
						<?php
						$c1++;
						endwhile;
						endif;
						?>
					</ul>
				
				<div class="cp-banner-bottom">
				  <div class="container-fluid">
					
				  </div>
				</div></section>			
			<div class="page_content">
				<div class = "container">
					<div class = "row">
										<div id="block_content_first" class="col-md-12">
						<div class="container-res">
							<div class="row">
								<div class="">		<div id="post-18" class="post-18 page type-page status-publish hentry">
			<a href="index.html">
						</a>
			<div class="entry-content-cp">
				<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1474980921904 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
			
				<section class="cp-about-section pd-tb100">
					<div class="container">
						<div class="cp-about-outer">
						  <div class="row">
							<div class="col-md-6">
							  <figure class="cp-about-thumb">
								<img src="<?php echo bloginfo('template_url');  ?>/wp-content/uploads/2016/09/about-img-01.jpg" alt="WELCOME TO GOLF CLUB">
							  </figure>
							</div>
							<div class="col-md-5">
							  <div class="cp-about-text">
							  
								<?php $the_query = new WP_Query( 'page_id=6' ); ?>
								<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>	
								<?php the_content(); ?>
								<?php endwhile;?>
								
							  </div>
							</div>
						  </div>
						</div>
					</div>
				</section></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1475060291827 vc_row-has-fill">			
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".cp-booking-section #submit_btn").click(function() { 
					   
						var proceed = true;
						//simple validation at client's end
						//loop through each field and we simply change border color to red for invalid fields		
						$("#contact_submit input[required=true], #contact_submit textarea[required=true]").each(function(){
							$(this).css('border-color',''); 
							if(!$.trim($(this).val())){ //if this field is empty 
								$(this).css('border-color','red'); //change border color to red   
								proceed = false; //set do not proceed flag
							}
							//check invalid email
							var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/; 
							if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
								$(this).css('border-color','red'); //change border color to red   
								proceed = false; //set do not proceed flag				
							}	
						});
					   
						if(proceed) //everything looks good! proceed...
						{
							//get input field values data to be sent to server
							post_data = {
								'courses'		: $('select[name=courses]').val(),
								'players'		: $('select[name=players]').val(), 
								'date'			: $('select[name=date]').val(),
								'time'			: $('select[name=time]').val(), 								
								'email_to_book'		: $('input[name=email_to_book]').val()
							};
							//Ajax post data to server
							$.post('wp-content/plugins/cp-addons-for-vc/modules/contact/contact_me.html', post_data, function(response){  
								if(response.type == 'error'){ //load json data from server and output message     
									output = '<div class="error">'+response.text+'</div>';
								}else{
									output = '<div class="success">'+response.text+'</div>';
									//reset values in all input fields
									$("#contact_submit  input[required=true], #contact_submit textarea[required=true]").val(''); 
									$("#contact_submit").slideUp(); //hide form after success
								}
								$("#contact_results_booking").hide().html(output).slideDown();
							}, 'json');
						}
					});
					
					//reset previously set border colors and hide all message on .keyup()
					$("#contact_submit").keyup(function() { 
						$(this).css('border-color',''); 
						$("#result").slideUp();
					});
				});
			</script>
			<div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
			
			<section class="cp-booking-section pd-tb100">
			  <div class="container">
				<div class="cp-heading-style1_v2">
				  <h2>Video Upload</h2>
				</div>
				<?php
				global $wpdb;
				if($_POST['submit'])
				{
					$time = time();
					
					
					$fullname = $_POST['fullname'];
					$email = $_POST['email'];
					$phone = $_POST['phone'];
					$video = "http://pinkwebsolutionz.com/dev/golfshop/wp-content/uploads/".date("Y")."/".date("m")."/".$time.$_FILES['video']['name'];
					$status = '0';
					
					function my_upload_dir($upload) {

					  return $upload;

					}
					
					
					if ( ! function_exists( 'wp_handle_upload' ) ) 
					$t = time();
					require_once( ABSPATH . 'wp-admin/includes/file.php' );
					$uploadedfile = $_FILES['video']; 
					
					$nm = $t.$uploadedfile['name'];
					$tp = $uploadedfile['type'];
					$tmpname = $uploadedfile['tmp_name'];
					$er = $uploadedfile['error'];
					$sz = $uploadedfile['size'];
					$file_nm = array(name => $nm, type => $tp, tmp_name => $tmpname, error => $er, size => $sz);
					//print_r($uploadedfile);
					//print_r($file_nm);die();
					$upload_overrides = array( 'test_form' => false );
					//add_filter('upload_dir', 'my_upload_dir');
					$movefile = wp_handle_upload( $file_nm, $upload_overrides );
					//remove_filter('upload_dir', 'my_upload_dir');

					if ( $movefile ) {
						?>
						<h2 style="color: #74b527;">File was successfully uploaded.Please wait for admin approve. Thankyou!</h2></br>
						<?php
						//var_dump( $movefile);
					} else {
						echo "Possible file upload attack!\n";
					}

					
					
					
					
					
					
					
					$results = $wpdb->get_results( 'INSERT INTO `golfshop321`.`wp_videos` (`fullname`,`email`,`phone`,`video`,`status`) VALUES ("'.$fullname.'","'.$email.'","'.$phone.'","'.$video.'","'.$status.'")' );
					//print_r($results);
					
				}	 
				?>
				<div class="row">
				  <div class="col-md-10 col-sm-12">
					<div class="cp-booking-inner">
					 <div id="contact_results_booking"></div>
					<form class="cp-courses-form" action="" method="post" enctype="multipart/form-data" id="contact_submit">
						<div class="row">
						
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="test" class="inputclass" name="fullname" placeholder="Fullname"/>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="email" class="inputclass" name="email" placeholder="Email"/>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="tel" class="inputclass" name="phone" placeholder="Phone"/>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<input type="file" class="inputclass" name="video"/>
							</div>
							
						</div>
					  
					</div>
				  </div>
					  <div class="col-md-2 col-sm-12 col-xs-12">
						<input type="submit" class="cp-btn-style1" id="submit_btn" value="Upload" name="submit"/>
					  </div>
					</form>
				</div>
				
				</div>
			</section></div></div></div></div><div class="vc_row-full-width vc_clearfix"></div><div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1477291993828 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1475064378208"><div class="wpb_wrapper">
			
			<section class="cp-services-section pd-tb100">
			  <div class="container">
				<div class="cp-heading-style1_v1">
				  <h2>OUR GOLF FEATURES</h2>
				</div>
					<ul class="cp-services-listed">
								  
								  <li>
									<div class="cp-services-box">
									  <i class="icon-facebook icomoon"> </i>
									  <h3>SHARE YOUR SCORES</h3>
									  <a href="<?php echo get_option('sharescore'); ?>" class="btn-readmore">More details
										<span class="icon-right-arrow icomoon"></span>
									  </a>
									</div>
								  </li>
								  
								  <li>
									<div class="cp-services-box">
									  <i class="icon-terrace icomoon"> </i>
									  <h3>GOLF VIDEOS</h3>
									  <a href="<?php echo get_option('golfvideo'); ?>" class="btn-readmore">More details
										<span class="icon-right-arrow icomoon"></span>
									  </a>
									</div>
								  </li>
								  
								  <li>
									<div class="cp-services-box">
									  <i class="icon-menu icomoon"> </i>
									  <h3>GOLF BOOKS</h3>
									  <a href="<?php echo get_option('golfbook'); ?>" class="btn-readmore">More details
										<span class="icon-right-arrow icomoon"></span>
									  </a>
									</div>
								  </li>
								  
								  <li>
									<div class="cp-services-box">
									  <i class="icon-golf-clubs icomoon"> </i>
									  <h3>GOLF PLANS</h3>
									  <a href="<?php echo get_option('golfplan'); ?>" class="btn-readmore">More details
										<span class="icon-right-arrow icomoon"></span>
									  </a>
									</div>
								  </li>
				
					</ul>	
			  </div>
			</section>
			</div>
			</div>
			</div>
			</div>
			<div class="vc_row-full-width vc_clearfix">
			</div>
			
		<div class="vc_row-full-width vc_clearfix"></div>
		<div data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1477030176442 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">
		
				<section class="cp-team-section pd-tb100">
					  <div class="container"><div class="cp-heading-style1_v1"><h2>Latest Videos</h2></div><div class="row">
									<?php		

									global $wpdb;

									$results = $wpdb->get_results( 'select * from `golfshop321`.`wp_videos` where `wp_videos`.`status` = 1 limit 4' );

									foreach($results as $drft)

									{

									?>
									  <div class="col-md-3 col-sm-6">
										<div class="cp-team-item">
										
										  <div class="cp-team-img-outer">
											<figure class="cp-thumb">
											  <?php 

												$videolink = $drft->video;

												echo do_shortcode('[video width="320" height="176" mp4="'.$videolink.'"][/video]'); 

												?>
											</figure>
										  </div>
										  
										</div>
									  </div>
									<?php

									}

									?>
									  
									  
									 
									  
									  <center><div class="btn-submit cp-btn-style1"><a href="<?php echo get_home_url(); ?>/videos">View All</a></div></center>
									  
									  
									
					
					  </div>
					</div>
				</section></div></div></div></div>
				<div class="vc_row-full-width vc_clearfix"></div>
	
			
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
