<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

	<link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
	
<link rel='stylesheet' id='cp-shortcode-css'  href='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/shortcodes/shortcode7bcd.css?ver=4.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='default-style-css'  href='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/style7bcd.css?ver=4.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='responsive-css-css'  href='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/css/responsive7bcd.css?ver=4.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='cp-owl-css-css'  href='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/css/owl.carousel7bcd.css?ver=4.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='cp-svg-css-css'  href='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/css/icomoon7bcd.css?ver=4.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='cp-countdowncs-css'  href='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/css/jquery.countdown7bcd.css?ver=4.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='widget-css-css'  href='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/css/cp-widgets7bcd.css?ver=4.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='cp-bx-slider-css-css'  href='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/css/jquery.bxslider7bcd.css?ver=4.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='cp-audioplayer-css'  href='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/css/audioplayer7bcd.css?ver=4.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='prettyPhoto-css'  href='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/css/prettyphoto7bcd.css?ver=4.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='cp-bootstrap-css'  href='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/css/bootstrap7bcd.css?ver=4.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='cp-wp-commerce-css'  href='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/css/wp-commerce7bcd.css?ver=4.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='<?php echo bloginfo('template_url');  ?>/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min5fba.css?ver=5.2' type='text/css' media='all' />
<link rel='stylesheet' id='googleFonts-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin-ext%2Ccyrillic%2Clatin%2Cgreek%2Ccyrillic-ext%2Cvietnamese%2Cgreek-ext&amp;ver=4.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='googleFonts-heading-css'  href='http://fonts.googleapis.com/css?family=Oswald%3A300%2Cregular%2C700&amp;subset=latin-ext%2Clatin&amp;ver=4.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='menu-googleFonts-heading-css'  href='http://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C300%2C300italic%2Cregular%2Citalic%2C500%2C500italic%2C700%2C700italic%2C900%2C900italic&amp;subset=latin-ext%2Ccyrillic%2Clatin%2Cgreek%2Ccyrillic-ext%2Cvietnamese%2Cgreek-ext&amp;ver=4.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='<?php echo bloginfo('template_url');  ?>/wp-content/plugins/js_composer/assets/css/js_composer.min5fba.css?ver=5.2' type='text/css' media='all' />
<link rel='stylesheet' id='wpglobus-css'  href='<?php echo bloginfo('template_url');  ?>/wp-content/plugins/wpglobus/includes/css/wpglobus.min29af.css?ver=1.8.4' type='text/css' media='all' />
<link rel='stylesheet' id='def-googleFonts-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C700%2C700i%2C900%2C900i&amp;ver=4.8.3' type='text/css' media='all' />
<link rel='stylesheet' id='def-googleFonts-sig-css'  href='https://fonts.googleapis.com/css?family=Mrs+Saint+Delafield&amp;ver=4.8.3' type='text/css' media='all' />
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-includes/js/jquery/ui/core.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-includes/js/jquery/ui/widget.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-includes/js/jquery/ui/position.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-includes/js/jquery/ui/mouse.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-includes/js/jquery/ui/sortable.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-includes/js/jquery/ui/datepicker.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-includes/js/jquery/ui/menu.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-includes/js/wp-a11y.min7bcd.js?ver=4.8.3'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-includes/js/jquery/ui/autocomplete.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-includes/js/jquery/ui/resizable.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-includes/js/jquery/ui/draggable.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-includes/js/jquery/ui/button.mine899.js?ver=1.11.4'></script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-includes/js/jquery/ui/dialog.mine899.js?ver=1.11.4'></script>
<script type='text/javascript'>
var EM = {"ajaxurl":"http:\/\/golfclub.crunchpress.com\/wp-admin\/admin-ajax.php","locationajaxurl":"http:\/\/golfclub.crunchpress.com\/wp-admin\/admin-ajax.php?action=locations_search","firstDay":"1","locale":"en","dateFormat":"dd\/mm\/yy","ui_css":"http:\/\/golfclub.crunchpress.com\/wp-content\/plugins\/events-manager\/includes\/css\/jquery-ui.min.css","show24hours":"","is_ssl":"","bookingInProgress":"Please wait while the booking is being submitted.","tickets_save":"Save Ticket","bookingajaxurl":"http:\/\/golfclub.crunchpress.com\/wp-admin\/admin-ajax.php","bookings_export_save":"Export Bookings","bookings_settings_save":"Save Settings","booking_delete":"Are you sure you want to delete?","booking_offset":"30","bb_full":"Sold Out","bb_book":"Book Now","bb_booking":"Booking...","bb_booked":"Booking Submitted","bb_error":"Booking Error. Try again?","bb_cancel":"Cancel","bb_canceling":"Canceling...","bb_cancelled":"Cancelled","bb_cancel_error":"Cancellation Error. Try again?","txt_search":"Search","txt_searching":"Searching...","txt_loading":"Loading...","event_detach_warning":"Are you sure you want to detach this event? By doing so, this event will be independent of the recurring set of events.","delete_recurrence_warning":"Are you sure you want to delete all recurrences of this event? All events will be moved to trash.","disable_bookings_warning":"Are you sure you want to disable bookings? If you do this and save, you will lose all previous bookings. If you wish to prevent further bookings, reduce the number of spaces available to the amount of bookings you currently have","booking_warning_cancel":"Are you sure you want to cancel your booking?"};
</script>
<script type='text/javascript' src='<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/frontend/images/index7bcd.html?ver=4.8.3'></script>




	<style type="text/css">
	body, .main-content{background:#f1f1f1;}h1{ font-size:60px !important; }h3{ font-size:24px !important; }h5{ font-size:16px !important; }h6{ font-size:36px !important; }body{font-size:16px !important;}.classes-page .skill-inner .label, body,.comments-list li .text p, .header-4-address strong.info,.header-4-address a.email,strong.copy,.widget-box-inner p,.blog-post-box .text p,.box-1 p, .box-1 .textwidget,.get-touch-form input,.get-touch-form strong.title,.footer-copyright strong.copy,#inner-banner p,.welcome-text-box p,.about-me-text p,.about-me-text blockquote q,.team-box .text p,.accordition-box .accordion-inner p,.facts-content-box p,.our-detail-box p,.our-detail-box ul li,.widget_em_widget ul li,.sidebar-recent-post ul li p,blockquote p,blockquote q,.author-box .text p,.contact-page address ul li strong.title,.contact-page address ul li strong.ph,.contact-page address ul li strong.mob,.contact-page address ul li a.email,a.comment-reply-link,.timeline-project-box > .text p,.comments .text p,.event-row .text p,.project-detail p,.news-box .text p,.error-page p,.cp-columns p,.cp-list-style ul li,.customization-options ul li,.cp-accordion .accordion-inner strong,.list-box ul li,.list-box2 ul li,.list-box3 ul li,.tab-content p, .tab-content-area p,.blockquote-1 q,.blockquote-2 q,.map h3,.even-box .caption p,.header-4-address strong.info,.header-4-address a.email,strong.copy,.widget-box-inner p, .cp-theme-style-1 p, .cp_job_list strong.salary, .load_more_jobs > strong, #footer .box ul li a, .bottom-row strong.copyrights,.theme-style-1 p, .testimonials-section .holder .text-box em, .price-table .box ul li, .sidebar .box .text-box strong.widget_price_featured, .sidebar .box .text-box a.text, .banner-menu ul li a, .browse-job-section strong.title,.load_more_resumes > strong, .job-detail ul li, #content-area .job-manager-application-wrapper .application .application_button, #content-area .single_job_listing .application .application_button { font-family:"Roboto" !important;} .theme-style-1 h1, .theme-style-1 h2, .theme-style-1 h3, .theme-style-1 h4, .theme-style-1 h5, .theme-style-1 h6, .cp_job_list .rp4wp-related-job_listing > ul li.job_listing a div.position h3, .cp_job_list .rp4wp-related-job_listing > ul li.no_job_listings_found a div.position h3, .cp_job_list ul.job_listings li.job_listing a div.position h3, .cp_job_list ul.job_listings li.no_job_listings_found a div.position h3, .resumes-section ul.resumes li.no_resumes_found a div.candidate-column h3, .resumes-section ul.resumes li.resume a div.candidate-column h3, .cp-home1-welcome p, .widget.latest-posts .small-post h3, .widget .recent-post strong
		  { font-family:"Oswald" !important;}#mega_main_menu.main-menu > .menu_holder > .menu_inner > .nav_logo > .mobile_toggle > .mobile_button, #mega_main_menu.main-menu > .menu_holder > .menu_inner > ul > li > .item_link, #mega_main_menu.main-menu > .menu_holder > .menu_inner > ul > li > .item_link .link_text, #mega_main_menu.main-menu > .menu_holder > .menu_inner > ul > li.nav_search_box *, #mega_main_menu.main-menu > .menu_holder > .menu_inner > ul > li .post_details > .post_title, #mega_main_menu.main-menu > .menu_holder > .menu_inner > ul > li .post_details > .post_title > .item_link, .navigation ul, #nav li a{font-family:"Roboto" !important;}</style><style id="stylesheet">::selection {
			background: #74b527; /* Safari */
			color:#fff;
		}
		::-moz-selection {
			background: #74b527; /* Firefox */
			color:#fff;
		}.cp-btn-style1:before, .cp-btn-style2:before, .cp-nav-holder .navbar-nav li ul li:hover > a, .cp-btn-style1:hover:after, .cp-btn-style2:hover:after, #cp-testimonial-slider .owl-dot.active span, .cp-social-links li:hover a, .cp_side-navigation .btn-holder a:hover, #popup-close, #cp-calendar .fc-event, .cp-event-box3 .cp-text .cp-social-links li:hover a, .cp-tab-box .nav-tabs > li.active > a, .cp-tab-box.nav-tabs > li.active > a:hover, .cp-tab-box .nav-tabs > li.active > a:focus, .cp-tab-box .nav-tabs > li a:hover, #widget-slider .owl-dots .owl-dot.active span, .cp-pro-item .cart-listed li:hover a, .cp-audio-item .audioplayer-bar-played, .cp-audio-item .audioplayer-playpause:hover, .cp-audio-item .audioplayer-playpause:focus, .audioplayer-playing .audioplayer-playpause a::before, .audioplayer-playing .audioplayer-playpause a::after, .cp-booking-item .price, .cp-nav-holder .navbar-nav li ul li:before, .sticky:after, .widget.widget-search .btn-submit
			{
				background-color:#74b527; 
				color:#fff;
			}.entry-content-cp .entry-content .job_listing_packages_title .button, .entry-content-cp .entry-content .resume_packages_title .button, .entry-content-cp .job_listing_packages_title .button, .entry-content-cp .resume_packages_title .button, .entry-content-cp .resume-manager-add-row, .entry-content-cp .button, .job_listings .job_filters .showing_jobs a, #content-area .job-manager-application-wrapper .application .application_button, #content-area .single_job_listing .application .application_button, .resume_btn .resume-link- a, .jobinn.single-resume .resume_contact .resume_contact_button, .resumes-section .companies-overview li .company-letter, .resumes-section .companies-overview li:before, .company-letter:before, .comment-form#commentform input[type="submit"], #searchform button, .resume_btn .resume-link a, .sticky:before, .widget_search #searchform_widget button, .widget_wysija .widget_wysija_cont input[type="submit"], #footer .box ul li a:hover, .btn-participate, .em-booking-buttons input#em-booking-submit, .em-booking-login #em_wp-submit,  .cp-nav-logo-bar .navbar-default .navbar-nav > li > a::before, .cp-pagination .pagination .page-numbers.current, .cp-pagination .pagination .page-numbers:hover, .login-submit #wp-submit, .cp-signup-form input[type="submit"], .page .wpcf7 .wpcf7-form-control.wpcf7-submit, .page .wpcf7 .wpcf7-form-control.wpcf7-submit, #consulation_submit .inner-holder.cp-btn-holder > button, .sticky .cp-blog-item:after, .widget .calendar_wrap caption, .woocommerce-pagination .page-numbers > li a.page-numbers:hover, .widget_tag_cloud .tagcloud a {

				background:#74b527; 

		}.cp-banner-content h2 span, .btn-readmore, .cp-services-box .btn-readmore .icomoon, .btn-readmore:hover, .cp-text p a, h1 a:hover, h2 a:hover, h3 a:hover, h4 a:hover, h5 a:hover, h6 a:hover, .cp-team-item .cp-text p, .cp-signature, .cp-pricing-box .price, .cp-pricing-listed li span, .cp-pricing-listed li a, .cp-map-text h2 span, .cp-gallery-box .cp-caption .meta-list li:hover a, .cp-services-box:hover > .icomoon, .about-sm-thumb .cp-caption .fa, .cp-tabs-holder .nav-tabs > li.active > a, .cp-tabs-holder .nav-tabs > li.active > a:hover, .cp-tabs-holder .nav-tabs > li.active > a:focus, .cp-tabs-holder .nav-tabs a:focus, .cp-tabs-holder .nav-tabs a:hover, .cp-pro-item h3:hover a, .cp-award-listed .year, .cp-facts-inner h3, .cp_side-navigation p span, .color, .cp-event-box2 .date, .cp-pagination-row .pagination > li:hover, .cp-pagination-row .pagination > li:hover a, .cp-pagination-row .pagination > li:hover span, .cp-pagination-row .pagination > li.active a, .widget-banner .cp-thumb .cp-caption span, .audioplayer-playpause a, .mp3-player-box .audioplayer, .cp-course-box span:hover, .cp-address-box p a, .cp-rating .fa, .cp-pager-outer .cp-caption .fa, .cp-team-detail .cp-about-text .desination, .cp-career-listed .cp-date-box .cp-top h3, .cp-booking-table .date, .tb-price-info span, .cp-booking-tabs .nav-tabs .tabs-list strong, .cp-pro-item:hover h3 a, .cp-meta-listed > a[rel=tag],.cp-post-box.golf_index_page .cp-text table a, .comment-notes
		{ 
			color:#74b527; 

		}.cp-heading-style1_v1 h2:before, .cp-heading-style1_v2 h2:before, .cp-btn-style1, .cp-btn-style2, .cp-about-text ul li:before, .cp-about-outer:before, .cp-services-listed:before, .cp-date-holder, .cp-team-img-outer:before, .cp-pricing-box .cp-top:before, .cp-map-text, .footer-banner:before, .cp-home-gallery-listed .item:before, .about-sm-thumb .cp-caption, .cp-facts-box:before, .cp-facts-listed:before, .cp-popup-holder form .subscribe:before, #cp-calendar .fc-event, .cp-blog-img-holder:after, .cp-product-top-outer:before, .cp-product-slider .cp-pager-outer .cp-caption, .cp-pager-outer .cp-caption, .cp-facts-listed, .cp-event-box3:hover, .cp-popup-holder .wysija-submit:before, .entry-content-cp .cp-facts-listed
		{
			border-color:#74b527; 
		}.signup-section .holder span:before{
			border-color: transparent transparent transparent #74b527;

		}.progress-box .progress-bar span:before{
			border-color: transparent transparent transparent #74b527;
		}#homev2-slider .cp-slider-content:before, .related.products ul.products li, #main-woo .products li, .woocommerce-main-image.zoom, .cp-blog-item .cp-text blockquote{
				border-top-color:#74b527;
		}.cp-tab-box .nav-tabs > li.active > a, .cp-tab-box.nav-tabs > li.active > a:hover, .cp-tab-box .nav-tabs > li.active > a:focus, .cp-tab-box .nav-tabs > li a:hover,.cp-tab-box .nav-tabs > li.active > a,.cp-tab-box .nav-tabs > li.active > a:hover,.cp-tab-box .nav-tabs > li.active > a:focus, .woocommerce-tabs ul.tabs li a:hover, .woocommerce-tabs ul.tabs li.active a, .cp-header .widget_shopping_cart_content{

				border-bottom-color:#74b527;

		}.blue, .cp-news-grid-style-1 .cp-news-post-excerpt h3 a:hover, .cp-mega-menu ul .random a, .cp-mega-menu ul .search-bar, .cp-news-grid-style-2 a:hover,
				.cp-news-grid-style-3 h3 a:hover, .cp-news-grid-style-5 .cp-news-list h3 a:hover, .cp-post-tools a, .cp-rating a, .tags-widget a, .cp-post-rating a,.cp-news-grid-style-6 .cp-post-content h3 a:hover, .cp-pro-rating a, .cp-product-grid .price ins, .cp-product-grid ul.grid h3 a:hover, .cp-single-post .cp-post-content h3 a:hover,.cp-post-share span, .cp-post-tags span, .cp-post-content h3 a:hover, .cp-comments h4 a:hover, .cp-masonry-posts .cp-post-content blockquote:before, .cp-masonry-posts .cp-post-content strong.link-post:before,.cp-masonry-posts-50 .cp-post-content blockquote:before, .cp-masonry-posts-50 .cp-post-content strong.link-post:before, .cp-product-details .cp-pro-content h3 a:hover,  .cp-product-details .price ins,.cp-pro-details-tabs .nav-tabs > li > a:hover, .cp-pro-details-tabs .nav-tabs > li.active > a, .cp-pro-details-tabs .nav-tabs > li.active > a:hover,  .cp-pro-details-tabs .nav-tabs > li.active > a:focus,.cp-login-form .forgot a, .cp-login-form .signup a, .sidebar .popular-post .small-grid h3 a:hover, .sidebar .latest-posts .small-grid h3 a:hover, .sidebar .most-commented ul li a:hover,.cp-featured-news-slider .cp-post-content h1 a:hover, .sidebar .reviews li h4 a:hover, .sidebar .cat-holder a:hover, .cp-news-grid-style-4 .cp-fullwidth-news-post-excerpt .cp-post-content h3 a:hover,.cp-news-grid-style-4 .cp-post .cp-post-content h3 a:hover, #wrapper .cp-featured-news-slider a:hover, #wrapper .cp-featured-news-slider .cp-post-content .cp-post-tools a:hover, #main-woo .price ins
					{
						color: ;
					}.nbs-flexisel-item .eventcd, #footer .wpcf7-form .wpcf7-submit, .events .eventcd, .event-content .eventcd, .fc.fc-ltr .fc-header, .wrapper .woocommerce-page #respond #submit.submit, .comment-form .form-submit .submit, .wrapper .sidebar .widget #searchform input[type="submit"], .readmore-button, .side-banner .bx-wrapper .bx-pager.bx-default-pager a:hover, .side-banner .bx-wrapper .bx-pager.bx-default-pager a.active, .events .eventcd, .event-content .eventcd, .nbs-flexisel-item .eventcd, .wrapper .testimonial .title, .trave-home-blog .read-more, .hot-deal .like a, .hot-deal .cart a, .list-view .like a, .list-view .cart a, .custom_accordion_cp h3, .table th, .table .progress, .striker, .category_list_filterable .gdl-button.active, #signin .modal-content .btn-style, .modal-dialog.modal-sm #sing-up .btn-style, .full-fixture #booking_form #em-booking-submit, .full-fixture #booking_form #em_wp-submit, .btn-hover, .btn-dark-hover, #dbem-bookings-table thead, .widget .em-calendar-wrapper tbody td a, .value .reset_variations, .post-password-form input[type="submit"], .textwidget .wpcf7 .wpcf7-submit,#header9 .main-navbar .hcart, .widget #searchform input[type="submit"], .widget_product_search input[type="submit"], .pro-bottom .pcart:hover, .woocommerce .shop_table.cart .actions .button, .woocommerce .shipping_calculator .button, #order_review #payment .button, .woocommerce .login .button, .entry-content-cp .checkout_coupon .button, .summary.entry-summary .button, .wrapper .woocommerce #respond input#submit.submit, .wrapper .woocommerce-page #respond #submit.submit, #place_order.button, .woocommerce .shop_table.cart thead, .em-search-submit, #horizontal-tabs .nav-tabs > li > a:hover, #horizontal-tabs .ui-tabs-active.ui-state-active a, #vertical-tabs .nav-tabs > li > a:hover, #vertical-tabs .ui-tabs-active.ui-state-active a, .sidebar .readmore, .sidebar .widget_shopping_cart_content .buttons .button, #header9 .topbar-dropdowns .dropdown-menu > li > a:hover, #header9 .topbar-dropdowns .dropdown-menu > li > a:focus, .related.products .products .rel-box .add_to_cart_button, #main-woo .woo-cat-products .add_to_cart_button,#main-woo .woo-cat-products .added_to_cart , .pricing .btn-style, .form-404 input#searchsubmit, .home-blog-container .post-meta .add_to_cart_button:hover,.simple-grid .product-box .frame .add_to_cart_button:hover, .simple-grid .product-box .frame .added_to_cart:hover,
				{
				  background: ;

				}.blog-post-text blockquote, .news-post-text blockquote {

				  border-bottom-color: ;

				}.cp-heading-style1_v1 h2:before, .cp-heading-style1_v2 h2:before, .cp-btn-style1, .cp-btn-style2, .cp-about-text ul li:before, .cp-about-outer:before, .cp-services-listed:before, .cp-date-holder, .cp-team-img-outer:before, .cp-pricing-box .cp-top:before, .cp-map-text, .footer-banner:before, .cp-home-gallery-listed .item:before, .about-sm-thumb .cp-caption, .cp-facts-box:before, .cp-facts-listed:before, .cp-popup-holder form .subscribe:before, #cp-calendar .fc-event, .cp-blog-img-holder:after, .cp-product-top-outer:before, .cp-product-slider .cp-pager-outer .cp-caption, .cp-pager-outer .cp-caption, .cp-facts-listed, .cp-event-box3:hover {

				  border-color: ;

				}.addtocart:before, .home .pro-box .add_to_cart_button:before, .addtocart:before, .normal-grid .pro-box .add_to_cart_button:before, .pro-box .thumb .sale,.classes-time .nav-tabs > li.active > a:after
				{
				  border-top-color:#74b527;
				}.copyright-row:before{
				  border-bottom:12px solid #74b527;
				}.home-menu .navbar-nav > li > .sub-menu, .home-menu .menu ul > li .children, #header .nav > li > a:hover, #header .nav > li > a:focus, #header .navbar-nav > li > .sub-menu, #header .menu ul > li .children,.home-menu .navbar-nav > li ul.sub-menu li ul.sub-menu, .home-menu .menu > li ul.children li ul.children,.pricing-table-curve  .price-table:hover .pricing-footer
				{
				  border-bottom-color:#74b527;

				}.ftop {
				  background:#C0617D
				}#golfclub_header6 .navigation-row, #golfclub_header6 .search-box .search, #golfclub_header1 .navigation-row, #golfclub_header4 .navigation-row, .golfclub_search_box, #golfclub_header2 .navbar-nav li a:hover,#golfclub_header2 .navbar-nav li a:focus,#golfclub_header2 .navbar-nav li a.active,#golfclub_header2 .search,#golfclub_header3 .logo-row,#golfclub_header3 .navbar-nav li a:hover,#golfclub_header3 .navbar-nav li a:focus,#golfclub_header3 .navbar-nav li a.active, .pro-box button.add_to_cart_button, .pro-box .added_to_cart, .add_to_cart_button, .product-box .bottom strong.price, .added_to_cart, .onsale, .widget_search #searchsubmit, .sidebar #searchform input[type="submit"], .sidebar .widget_product_search #searchform input[type="submit"], .sidebar .newsletter-box button,	  .about .nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus, #header-login, .about .nav-tabs > li a, .percentage, .progress span, .p404 .buttons, .service-grid span:hover ,  .woocommerce a.button, .woocommerce-page a.button, .woocommerce button.button, .woocommerce-page button.button, .woocommerce input.button, .woocommerce-page input.button, .woocommerce #respond input#submit, .woocommerce-page #respond input#submit, .woocommerce #content input.button, .woocommerce-page #content input.button, .signup input[type="submit"], .category_list_filterable .active, input[type="submit"]:hover,			  .block-image li.white-rounded:hover, .ghover .pluss:hover, .home .pro-box .add_to_cart_button:after, .addtocart:after, .addtocart, .home .pro-box .add_to_cart_button ,.progress .percentage, .pagination #pagination a:hover, .pagination #pagination .active a{

				  background:#74b527; 
				}.pattren_golfclub_footer {
				  background-color:#fff;
				  background-image: 
				  radial-gradient(circle at 100% 150%,#74b527 24%,#74b527 25%,#74b527 28%,#74b527 29%,#74b527 36%,#74b527 36%,#74b527 40%, transparent 40%, transparent),
				  radial-gradient(circle at 0    150%,#74b527 24%,#74b527 25%,#74b527 28%,#74b527 29%,#74b527 36%,#74b527 36%,#74b527 40%, transparent 40%, transparent),
				  radial-gradient(circle at 50%  100%,#74b527 10%,#74b527 11%,#74b527 23%,#74b527 24%,#74b527 30%,#74b527 31%,#74b527 43%,#74b527 44%,#74b527 50%,#74b527 51%,#74b527 63%,#74b527 64%,#74b527 71%, transparent 71%, transparent),
				  radial-gradient(circle at 100% 50%,#74b527 5%,#74b527 6%,#74b527 15%,#74b527 16%,#74b527 20%,#74b527 21%,#74b527 30%,#74b527 31%,#74b527 35%,#74b527 36%,#74b527 45%,#74b527 46%,#74b527 49%, transparent 50%, transparent),
				  radial-gradient(circle at 0    50%,#74b527 5%,#74b527 6%,#74b527 15%,#74b527 16%,#74b527 20%,#74b527 21%,#74b527 30%,#74b527 31%,#74b527 35%,#74b527 36%,#74b527 45%,#74b527 46%,#74b527 49%, transparent 50%, transparent);
				  background-size:30px 60px;
				  height:25px;
				}.footer-copy {
					background:rgba(0,0,0,0.5);
				}.cp-ft-middle-section {background: url(<?php echo bloginfo('template_url');  ?>/wp-content/themes/golfclub/images/footer-middle-img.jpg) top center no-repeat; background-size:cover }#cp-slide-menu {background: url(http://golfclub.crunchpress.com/wp-content/themes/golfclub/images/sidemenu-img.jpg) top center no-repeat }
				</style>		  <!--Customizer CSS--> 
		  <style type="text/css">
			    
			    
		  </style> 
		  
		  	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
	<meta name="generator" content="Powered by Visual Composer - drag and drop page builder for WordPress."/>
		
	
	<style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1474980921904{background-color: #f1f1f1 !important;}.vc_custom_1475060291827{background-image: url(<?php echo bloginfo('template_url');  ?>/wp-content/uploads/2016/09/booking-bg-img6396.jpg?id=42) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1477291993828{background-image: url(http://golfclub.crunchpress.com/wp-content/uploads/2016/09/Untitled-1.jpg?id=851) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1475070614803{background: #f1f1f1 url(http://golfclub.crunchpress.com/wp-content/uploads/2016/09/events_bg-1.png?id=110) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}.vc_custom_1477030176442{padding-bottom: 50px !important;background-image: url(http://golfclub.crunchpress.com/wp-content/uploads/2016/09/team_bg.png?id=108) !important;}.vc_custom_1475133253495{border-top-width: 1px !important;border-bottom-width: 1px !important;background: #f1f1f1 url(http://golfclub.crunchpress.com/wp-content/uploads/2016/09/testimonial-bg-img.png?id=120) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;border-top-color: #cccccc !important;border-top-style: solid !important;border-bottom-color: #cccccc !important;border-bottom-style: solid !important;}.vc_custom_1475134472198{background-image: url(http://golfclub.crunchpress.com/wp-content/uploads/2016/09/home-gallery-bg.png?id=137) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}.vc_custom_1475136405791{background-image: url(http://golfclub.crunchpress.com/wp-content/uploads/2016/09/pricing-bg-img.png?id=141) !important;background-position: 0 0 !important;background-repeat: no-repeat !important;}.vc_custom_1483356322855{margin-bottom: -80px !important;background-image: url(http://golfclub.crunchpress.com/wp-content/uploads/2016/09/brands_bg.png?id=152) !important;background-position: center !important;background-repeat: no-repeat !important;background-size: cover !important;}.vc_custom_1475064378208{padding-top: -35px !important;}</style><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>	






<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/*
	 * We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/*
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body id="home" class="home page-template-default page page-id-18 golfclub_full_width    wpb-js-composer js-comp-ver-5.2 vc_responsive currency-usd">
	

<div id="wrapper" class="cp-wrapper">
	
				
	<header class="cp-header">

				
        <div id="cp-slide-menu" class="cp_side-navigation">
			<ul class="nav navbar-nav">
				<li id="close">
				  <a href="#">
					<span class="icon-cancel micon">
					</span>
				  </a>
				</li>
			</ul>
            <div class="menu-main-menu-container">
				<?php
					wp_nav_menu( array(
					'menu'           => 'Main Menu', // Do not fall back to first non-empty menu.
					'menu_class'	 => 'sidebar-nav mm-menu__items',
					) );
				?>
			</div>
			

         
				
		<ul class="cp-social-links">
			<li class="social-links"><a target = "_blank" data-rel='tooltip' href="<?php echo get_option('twitter_url'); ?>" title="Twitter"><i class="fa fa-twitter"></i></a></li>
			<li class="social-links"><a target = "_blank" data-rel='tooltip' href="<?php echo get_option('facebook_url'); ?>" title="Facebook"><i class="fa fa-facebook"></i></a></li>
			<li class="social-links"><a target = "_blank" data-rel='tooltip' href="<?php echo get_option('gplus_url'); ?>" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>						 
		</ul>
	        </div>
		        
        <div class="cp-navigation-row">
          <div class="container">
           
            <strong class="cp-logo">
				<a href='<?php echo get_home_url(); ?>'><?php  dynamic_sidebar( 'logo-widget-area' ); ?></a>
            </strong>
            
            <div class="cp-nav-holder">
              
              <nav class="navbar navbar-default">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#cp-navbar-collaspe" aria-expanded="false"> 
                    <span class="sr-only">Menu</span> 
                    <span class="icon-bar">
                    </span> 
                    <span class="icon-bar">
                    </span> 
                    <span class="icon-bar">
                    </span> 
                  </button>
                </div>
                
                <div class="collapse navbar-collapse" id="cp-navbar-collaspe">
                  	<div id="navbarCollapse" class="collapse navbar-collapse ">
						<?php
							wp_nav_menu( array(
							'menu'           => 'Main Menu', // Do not fall back to first non-empty menu.
							'menu_class'	 => 'nav navbar-nav',
							) );
						?>
					</div>
		        </div>
                
              </nav>
              
              <ul class="cp-right-nav">
									<li>
					  <div class="cp-sidemenu-btn">
						<div id="push" class="cp-sidemenu">
						  <a href="#">
							<span class="icon-bars micon">
							</span>
						  </a>
						</div>
					  </div>
					</li>
			 </ul>
             
            </div>
           
          </div>
        </div>
        
        
    </header>	
		
	