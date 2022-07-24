jQuery(document).ready(function($) {
	
	"use strict";
	
	if( navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || 
		navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || 
		navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || 
		navigator.userAgent.match(/Windows Phone/i) ){ 
		var kode_touch_device = true; 
	}else{ 
		var kode_touch_device = false; 
	}
	
	// animate ux
	if( !kode_touch_device && ( !$.browser.msie || (parseInt($.browser.version) > 8)) ){
	
		// image ux
		$('.color_class_cp img').each(function(){
			if( $(this).closest('.full-width, .ls-wp-container, .product, .flexslider, .nivoSlider').length ) return;
			
			var ux_item = $(this);
			if( ux_item.offset().top > $(window).scrollTop() + $(window).height() ){
				ux_item.css({ 'opacity':0 });
			}else{ return; }
			
			$(window).scroll(function(){
				if( $(window).scrollTop() + $(window).height() > ux_item.offset().top + 100 ){
					ux_item.animate({ 'opacity':1 }, 1200); 
				}
			});					
		});
	
		// item ux
		$('.full-width').each(function(){
			var ux_item = $(this);
			if( ux_item.hasClass('cp-chart') || ux_item.hasClass('cp-skill-bar') ){
				if( ux_item.offset().top < $(window).scrollTop() + $(window).height() ){
					if( ux_item.hasClass('cp-chart') && (!$.browser.msie || (parseInt($.browser.version) > 8)) ){
						ux_item.golfclub_pie_chart();
					}else if( ux_item.hasClass('cp-skill-bar') ){
						ux_item.children('.cp-skill-bar-progress').each(function(){
							if($(this).attr('data-percent')){
								$(this).find('.number').animate({}, {
									duration: 1200,
									easing:'easeOutQuart', // can be anything
									step: function() { // called on every step
										// Update the element's text with rounded-up value:
										$(this).find('.number').text(Math.ceil($(this).attr('data-percent')) + "%");
									}
								});
								
							}
						});	
					}
					return;
				}
			}else if( ux_item.offset().top > $(window).scrollTop() + $(window).height() ){
				ux_item.css({ 'opacity':0, 'padding-top':20, 'margin-bottom':-20 });
			}else{ return; }	

			$(window).scroll(function(){
				if( $(window).scrollTop() + $(window).height() > ux_item.offset().top + 100 ){
					if( ux_item.hasClass('cp-chart') && (!$.browser.msie || (parseInt($.browser.version) > 8)) ){
						ux_item.golfclub_pie_chart();
					}else if( ux_item.hasClass('cp-skill-bar') ){
						ux_item.children('.cp-skill-bar-progress').each(function(){
							if($(this).attr('data-percent')){
								$(this).find('.number').animate({}, {
									duration: 1200,
									easing:'easeOutQuart', // can be anything
									step: function() { // called on every step
										
										$('.number').text(Math.ceil(10000) + "%");
									} ,
								});
								
							}
						});	
					}else{
						ux_item.animate({ 'opacity':1, 'padding-top':0, 'margin-bottom':0 }, 1200);
					}
				}
			});					
		});
		
		// item ux
		$('.services-box').each(function(){
			var ux_item = $(this);
			if( ux_item.offset().top > $(window).scrollTop() + $(window).height() ){
				ux_item.css({ 'opacity':0, 'padding-top':20, 'margin-bottom':-20 });
			}else{ return; }	
		});
		
	// do not animate on scroll in mobile
	}else{
	
			
	}
	
	
	if ($(".side-featured-slider").length) {
	 $(".side-featured-slider").owlCarousel({
		  navigation : true, // Show next and prev buttons
		  pagination: false,
		  slideSpeed : 300,
		  paginationSpeed : 400,
		  singleItem:true
		  });
	 }
	 
	
			
	
	
	// ingenio back to top button
	if ($('#back-to-top').length) {
		var scrollTrigger = 100, // px
			backToTop = function () {
				var scrollTop = $(window).scrollTop();
				if (scrollTop > scrollTrigger) {
					$('#back-to-top').addClass('show');
				} else {
					$('#back-to-top').removeClass('show');
				}
			};
		backToTop();
		$(window).on('scroll', function () {
			backToTop();
		});
		$('#back-to-top').on('click', function (e) {
			e.preventDefault();
			$('html,body').animate({
				scrollTop: 0
			}, 700);
		});
	}
	
	// pie chart
	$.fn.golfclub_pie_chart = function(){
		if(typeof($.fn.easyPieChart) == 'function'){
			$(this).each(function(){
				var golfclub_chart = $(this);
				
				$(this).easyPieChart({
					animate: 1200,
					lineWidth: golfclub_chart.attr('data-linewidth')? parseInt(golfclub_chart.attr('data-linewidth')): 8,
					size: golfclub_chart.attr('data-size')? parseInt(golfclub_chart.attr('data-size')): 155,
					barColor: golfclub_chart.attr('data-color')? golfclub_chart.attr('data-color'): '#a9e16e',
					trackColor: golfclub_chart.attr('data-bg-color')? golfclub_chart.attr('data-bg-color'): '#f2f2f2',
					backgroundColor: golfclub_chart.attr('data-background'),
					scaleColor: false,
					lineCap: 'square'
				});

				// for responsive purpose
				if($.browser.msie && (parseInt($.browser.version) <= 8)) return;
				function limit_golfclub_chart_size(){
					if( golfclub_chart.parent().width() < parseInt(golfclub_chart.attr('data-size')) ){
						var max_width = golfclub_chart.parent().width() + 'px';
						golfclub_chart.css({'max-width': max_width, 'max-height': max_width});
					}				
				}
				limit_golfclub_chart_size();
				$(window).resize(function(){ limit_golfclub_chart_size(); });
			});
		}
	}
	
	
	$('#mm_font-awesome-css').remove();
	$( "input.radio" ).focus(function() {
		$('.radio').attr('name','amount');
		$('.donate-input').attr('name',' ');
	});
	$( "input.donate-input" ).focus(function() {
		$('.radio').attr('name',' ');
		$('.donate-input').attr('name','amount');
		$('.radio').removeAttr('checked');
	});
	
	
	//menu-list scroller
	// if ($('.menu-list').length) {
	// $(".menu-list").mCustomScrollbar({
		// theme:"minimal"
	// });
	// }
	
	$('#ls-google-fonts-css').remove();
	//Flexslider for Upcoming Evente
	$('a.accordion-toggle').click(function(e) {
        e.preventDefault();
        if(!$(this).parent().hasClass('active')) {
            $('.accordion-heading').removeClass('active');
            $('.accordion-body').removeClass('active');
            $(this).parent().addClass('active').next().addClass('active');
        } else {
            $('.accordion-heading').removeClass('active');
            $('.accordion-body').removeClass('active');
        }
    });
	
	
	$('#search-box-form').hide();
    //Search Area Function on Header
    $('a.btn-search').click(function () {
        $('#search-box-form').toggle('slide');
    });
    $('a.crose').click(function () {
        $('#search-box-form').toggle('slide');
    });	
	
	//Header Search Area Function
    $('.hlinks a.search').click(function () {
        if ($(this).attr('id') == 'active-btn') {
            $(this).attr('id', 'no-active-btn');
            $('.search-box').animate({
                top: '-600px',

            });
        } else {
            $(this).attr('id', 'active-btn');
            $('.search-box').animate({
                top: '53px',

            });
        }
    });
	
	//Header Search Area Function
	
    $('a.show_form').click(function () {
        if ($(this).attr('id') == 'show-form') {
            $(this).attr('id', 'no-show-form');
            $(this).siblings('div.book_form').slideUp('slow');
        } else {
            $(this).attr('id', 'show-form');
           $(this).siblings('div.book_form').slideDown('slow');
        }
    });
	
	$('.single-sermon-playlist').slideUp();
	 //Header Search Area Function
    $('.play').click(function () {
        if ($(this).attr('id') == 'active-btn-play') {
            $(this).attr('id', 'no-active-btn-play');
            $(this).parent().siblings('.single-sermon-playlist').slideUp();
        } else {
            $(this).attr('id', 'active-btn-play');
			$(this).parent().siblings('.single-sermon-playlist').slideDown();
        }
    });
	
	$('.cart-item .widget_shopping_cart_content').hide();
	 //Header Search Area Function
    $('.cart-item > a').click(function () {
        if ($(this).attr('id') == 'active-btn-shopping') {
            $(this).attr('id', 'no-active-btn-shopping');
            $(this).siblings('.widget_shopping_cart_content').slideUp();
        } else {
            $(this).attr('id', 'active-btn-shopping');
			$(this).siblings('.widget_shopping_cart_content').slideDown();
        }
    });
	
	$('.soundcloud-sermon').slideUp();
	 //Header Search Area Function
    $('.cp-play-soundrock').click(function () {
        if ($(this).attr('id') == 'active-sound-play') {
            $(this).attr('id', 'no-active-sound-play');
            $(this).parent().parent().parent().parent().parent().parent().parent().siblings('.soundcloud-sermon').slideUp();
			
        } else {
            $(this).attr('id', 'active-sound-play');
			$(this).parent().parent().parent().parent().parent().parent().parent().siblings('.soundcloud-sermon').slideDown();
        }
    });
	
	$('.soundcloud-sermon-box').slideUp();
	 //Header Search Area Function
    $('.cp-play-box-soundrock').click(function () {
        if ($(this).attr('id') == 'active-sound-box-play') {
            $(this).attr('id', 'no-active-sound-box-play');
            $(this).parent().siblings('.soundcloud-sermon-box').slideUp();
        } else {
            $(this).attr('id', 'active-sound-box-play');
			$(this).parent().siblings('.soundcloud-sermon-box').slideDown();
        }
    });
	
	$('.jp-playlist').slideUp();
	 //Header Search Area Function
    $('.show-playlist').click(function () {
        if ($(this).attr('id') == 'active-playlist-play') {
            $(this).attr('id', 'no-active-playlist-play');
            $(this).parent().parent().parent().parent().parent().siblings('.jp-playlist').slideUp();
			
        } else {
            $(this).attr('id', 'active-playlist-play');
			 $(this).parent().parent().parent().parent().parent().siblings('.jp-playlist').slideDown();
        }
    });
	
	
	$('.soundcloud-sermon-detail').slideUp();
	//Header Search Area Function
    $('.cp-detail-soundrock').click(function () {
        if ($(this).attr('id') == 'active-detail-play') {
            $(this).attr('id', 'no-active-detail-play');
            $(this).parent().parent().parent().siblings('.soundcloud-sermon-detail').slideUp();
			
        } else {
            $(this).attr('id', 'active-detail-play');
			$(this).parent().parent().parent().siblings('.soundcloud-sermon-detail').slideDown();
        }
    });
	
	
	$('.share-btn .topbar-social-cp').slideUp();
	 //Header Search Area Function
    $('.share').click(function () {
        if ($(this).attr('id') == 'active-share-play') {
            $(this).attr('id', 'no-active-share-play');
            $(this).siblings('.topbar-social-cp').slideUp();
			
        } else {
            $(this).attr('id', 'active-share-play');
			$(this).siblings('.topbar-social-cp').slideDown();
        }
    });
	
	
	
	
	$('.sermons-box-grid-cp').slideUp();
	 //Header Search Area Function
    $('.cp-sermon-box-play').click(function () {
        if ($(this).attr('id') == 'active-sound-box-play') {
            $(this).attr('id', 'no-active-sound-box-play');
            $(this).parent().siblings('.sermons-box-grid-cp').slideUp();
			
        } else {
            $(this).attr('id', 'active-sound-box-play');
			$(this).parent().siblings('.sermons-box-grid-cp').slideDown();
        }
    });
	
	
	
	$('.cp-gallery-slider-list').slideUp();
	 //Header Search Area Function
    $('.cp-play').click(function () {
        if ($(this).attr('id') == 'active-btn-play-cp') {
            $(this).attr('id', 'no-active-btn-play-cp');
            
			$(this).parent().parent().parent().parent().parent().parent().parent().siblings('.cp-gallery-slider-list').slideUp();
        } else {
            $(this).attr('id', 'active-btn-play-cp');
			$(this).parent().parent().parent().parent().parent().parent().parent().siblings('.cp-gallery-slider-list').slideDown();
        }
    });
	
	 //Header Search Area Function
    $('.cp-search-box a.search').click(function () {
        if ($(this).attr('id') == 'active-btn') {
            $(this).attr('id', 'no-active-btn');
            $('.search-box').animate({
                top: '-300px',

            });
        } else {
            $(this).attr('id', 'active-btn');
            $('.search-box').animate({
                top: '53px',

            });
        }
    });
	
	 $('.cp-header-f-13 .cp-search-f-13 a.search-cp').click(function () {
        if ($(this).attr('id') == 'active-btn') {
            $(this).attr('id', 'no-active-btn');
            $('.search-box').animate({
                top: '-300px',

            });
        } else {
            $(this).attr('id', 'active-btn');
            $('.search-box').animate({
                top: '28px',

            });
        }
    });

	
	
	
    //Header 4 Search Area Function
    $('.head-topbar a.search').click(function () {
        if ($(this).attr('id') == 'active-btn') {
            $(this).attr('id', 'no-active-btn');
            $('.search-box').animate({
                top: '-100px',

            });
        } else {
            $(this).attr('id', 'active-btn');
            $('.search-box').animate({
                top: '41px',

            });
        }
    });

    //Search Click Function For Footer Menu
    $('.header-nav').click(function () {
        if ($(this).attr('id') == 'bottom-active-btn') {
            $(this).attr('id', 'no-bottom-active-btn');
            $('.footer-menu').animate({
                left: '416px',
            });
        } else {
            $(this).attr('id', 'bottom-active-btn');
            $('.footer-menu').animate({
                left: '0px',

            });
        }
    });
	
	
	//Gallery Validation
	$('a[data-rel]').each(function () {
		$(this).attr('rel', $(this).data('rel'));
	});
	
	$(".navbar-inner ul >li").hover(
		function() {
			$(this).addClass('open');
		},
		function() {
			$(this).removeClass('open');
		}
	);
	if($('#custom_menu_cp').length){
		$('#custom_menu_cp').find('ul.children').addClass('sub-menu');
		$('#custom_menu_cp').find('ul.children');
		
	}
	
	$('.toggle-view li').click(function () {
        var text = $(this).children('div.panel');
        if (text.is(':hidden')) {
            text.slideDown('200');
            $(this).children('span').html('-');
        } else {
            text.slideUp('200');
            $(this).children('span').html('+');
        }
    });
	
	
	//Tool tip Script
	$("[data-toggle='tooltip']").tooltip();
	
	$("[data-rel='tooltip']").tooltip();

	if($('#custom_menu_cp').length){
		$('div.nav > ul').unwrap();
		$('#custom_menu_cp').children('ul').addClass('nav');
	}

	
	
	
	if(Modernizr.mq('only screen and (min-width: 1200px)')){
		jQuery(document).ready(function($) {
			// get test settings
			var byRow = $('body').hasClass('test-row');
			// apply matchHeight to each item container's items
			$('.items-container').each(function() {
				$(this).children('.item').matchHeight({
					byRow: byRow
					//property: 'min-height'
				});
			});
		});
	}
	
	
	
	if($('.logo-nav').length){
		// grab the initial top offset of the navigation 
		var stickyNavTop = $('.logo-nav').offset().top;
		// our function that decides weather the navigation bar should have "fixed" css position or not.
		var stickyNav = function(){
			var scrollTop = $(window).scrollTop(); // our current vertical position from the top
			// if we've scrolled more than the navigation, change its position to fixed to stick to top,
			// otherwise change it back to relative
			if (scrollTop > stickyNavTop) { 
				$('.logo-nav').addClass('golfclub_sticky');
			} else {
				$('.logo-nav').removeClass('golfclub_sticky'); 
			}
		};
		stickyNav();
		// and run it again every time you scroll
		$(window).scroll(function() {
			stickyNav();
		});
	}
	
		
	
});

	
	
	function golfclub_countDown_script(e_date){
		if (jQuery('.countdown').length) {
			var current_date = new Date();
			var unixtime_stamp = current_date.getTime()/1000.0;
			var n_date = Math.ceil(unixtime_stamp);
			var e_datee = new Date(e_date);
			var e_unixtime_stamp = e_datee.getTime()/1000.0;
			var e_date_n = Math.ceil(e_unixtime_stamp);
			jQuery('.countdown').final_countdown({
				'start': 947376000,
				'end': e_date_n,
				'now': n_date
			});
		}
	}
	function golfclub_get_unix_stamp(date_input){
		
		return newdate;
	}
