<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	
	
	
	
		
		<footer class="cp-footer">
						
					
				<section class="cp-ft-middle-section">
					<div class="container">
						<div class="row">
							<div class="width_one_fourth">
								<div class="widget box-1 widget-about">
									<h3>OUR MISSION</h3>
									<?php  dynamic_sidebar( 'mission-widget-area' ); ?>
								</div>
							</div>
							<div class="width_one_fourth">
								<div class="widget box-1 widget-keep-touch"><h3>KEEP IN TOUCH</h3>		
									<ul>
										<li class="touch-inner">
										  <span class="icon-placeholder icomoon">
										  </span>
										  <div class="cp-text">
											<h5>Address</h5>
											<p><?php echo get_option('address'); ?></p>
										  </div>
										</li>
										<li class="touch-inner">
										  <span class="icon-open-envelope icomoon">
										  </span>
										  <div class="cp-text">
											<h5>Email</h5>
											<p>
												<a href="mailto:<?php echo get_option('email'); ?>"><?php echo get_option('email'); ?></a>
											</p>
										  </div>
										</li>
										<li class="touch-inner">
										  <span class="icon-phone-call icomoon"></span>
										  <div class="cp-text">
											<h5>Phone Number</h5>
											<p><?php echo get_option('tel'); ?></p>
										  </div>
										</li>
										<li class="touch-inner">
										  <span class="icon-fax icomoon"></span>
										  <div class="cp-text">
											<h5>Fax Number</h5>
											<p><?php echo get_option('fax'); ?></p>
										  </div>
										</li>
									</ul>	
								
								</div>
							</div>
							<div class="width_one_fourth">
								<div class="widget box-1 widget-flickr"><h3>Social Links</h3>			
									<div class="flicker">
									  <ul class="cp-social-links">
										<li class="social-links"><a target = "_blank" data-rel='tooltip' href="<?php echo get_option('twitter_url'); ?>" title="Twitter"><i class="fa fa-twitter"></i></a></li>
										<li class="social-links"><a target = "_blank" data-rel='tooltip' href="<?php echo get_option('facebook_url'); ?>" title="Facebook"><i class="fa fa-facebook"></i></a></li>
										<li class="social-links"><a target = "_blank" data-rel='tooltip' href="<?php echo get_option('gplus_url'); ?>" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>						 
									  </ul>
									</div>
								</div>
							</div>
							<div class="width_one_fourth">
								<div class="widget box-1 footer-banner">
									<figure class="widget-club">
										<?php  dynamic_sidebar( 'footer-banner-widget-area' ); ?>
									</figure>
								</div>
							</div>
						</div>
					</div>
				</section>
			<div class="cp-copyright-row">
			  <div class="container">
				<div class="cp_back-top-holder">
				  <span id="cp_back-top">
					<a href="#">
					  <img src="<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/images/btn-scroll.png" alt="">
					</a>
				  </span>
				</div>
								
						<p>2017. Powered by <a class="pinkweb" href="https://www.pinkwebsolutionz.com" target="_blank">Pink Web Solutionz</a></p>
					
					
			  </div>
			</div>
		</footer>
		

    

<div class="golfclub_search_overlay"></div>   

</div>



<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/owl.carousel.min5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/jquery.countdown.min5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/jquery.bxslider.min5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/audioplayer5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/custom5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/jquery-filterable5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/jquery-easing-1.35152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/moment.min5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/fullcalendar.min5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/modernizr-latest5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/search-script5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/jquery.counterup.min5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/jquery.isotope5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/jquery.spinner5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/plugins/woocommerce/assets/js/prettyPhoto/jquery.prettyPhoto.min005e.js?ver=3.1.6'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/default/pretty_script5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-includes/js/comment-reply.min7bcd.js?ver=4.8.3'></script>

<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/default/bootstrap5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/modernizr-latest5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/frontend_scripts5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/workmark5152.js?ver=1.0'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/js/jquery-easing-1.35152.js?ver=1.0'></script>

<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-includes/js/wp-embed.min7bcd.js?ver=4.8.3'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-includes/js/jquery/ui/slider.mine899.js?ver=1.11.4'></script>

	
	
	

<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
