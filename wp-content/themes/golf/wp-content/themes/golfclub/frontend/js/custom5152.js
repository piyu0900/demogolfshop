jQuery(document).ready(function($) {
    "use strict";
	
	/* PrettyPhoto Script
    ======================================================*/
    $('a[data-rel]').each(function () {
        $(this).attr('rel', $(this).data('rel'));
        $(".pretty-gallery a[rel^='prettyPhoto']").prettyPhoto();
    });

    /* Side Bar Menu Js
    ======================================================*/
    if ($('#push, #close').length) {
        $('#push, #close').on('click', function(){
            var $navigacia = $('body, #cp-slide-menu'),
            val = $navigacia.css('right') === '400px' ? '0px' : '400px';
            $navigacia.animate({
            right: val
            }, 500)
        });
    }
	
	


    /* Owl Slider For Banner 1
    ======================================================*/
    if ($('#cp-banner-slider').length) {
        $('#cp-banner-slider').owlCarousel({
            loop:false,
            dots: false,
            nav:true,
            navText:'',
            items:1,
            autoplay: false,
            smartSpeed:2000,
            animateOut: 'flipOutX',
            animateIn: 'fadeIn',
            URLhashListener:true,
            autoplayHoverPause:false,
			

        });
    }
	
     /* Owl Slider Hash Navigation
    ======================================================*/
    if ($('.cp-hash-listed li').length) {
        $('.cp-hash-listed li').on('click', function(){

            $(this).siblings().removeClass('active');
            $(this).addClass('active');
               
        });
    }


     /* Owl Slider Services Slider
    ======================================================*/
    if ($('#cp-clients-slider').length) {
        $('#cp-clients-slider').owlCarousel({
            loop:true,
            dots: false,
            nav:false,
            navText:'',
            items:5,
            smartSpeed:1000,
            padding:0,
            margin: 0,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                },
                560:{
                    items: 2,
                },
                768:{
                    items:3,
                },
                992:{
                    items:4,
                },
                1199:{
                    items:5,
                }
            }
        });
    }

     /* Owl Slider Services Slider
    ======================================================*/
    if ($('#cp-gallery-slider').length) {
        $('#cp-gallery-slider').owlCarousel({
            loop:true,
            dots: false,
            nav:false,
            navText:'',
            items:4,
            smartSpeed:2000,
            padding:0,
            margin: 12,
            autoplay: true,
            autoWidth:true,
            responsiveClass:true,
            responsive:{
                0:{
                    items: 1,
                    autoWidth: false,
                },
                640:{
                    items:2,
                    autoWidth:false,
                },
                768:{
                    items:2,
                },
                992:{
                    items:4,
                },
                1199:{
                    items:4,
                }
            }
        });
    }

     /* Owl Slider Booking Slider
    ======================================================*/
    if ($('#cp-booking-slider').length) {
        $('#cp-booking-slider').owlCarousel({
            loop:true,
            dots: false,
            nav:true,
            navText:'',
            items:4,
            smartSpeed:1000,
            padding:0,
            margin: 30,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                992:{
                    items:3,
                },
                1199:{
                    items:4,
                }
            }
        });
    }

    /* Owl Slider Booking Slider
    ======================================================*/
    if ($('#cp-product-slider2').length) {
        $('#cp-product-slider2').owlCarousel({
            loop:true,
            dots: false,
            nav:true,
            navText:'',
            items:4,
            smartSpeed:1000,
            padding:0,
            margin: 30,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:2,
                },
                992:{
                    items:3,
                },
                1199:{
                    items:4,
                }
            }
        });
    }

    /* Owl Slider For Testimonial
    ======================================================*/
    if ($('#cp-testimonial-slider').length) {
        $('#cp-testimonial-slider').owlCarousel({
			loop:false,
            dots: true,
            nav:false,
            navText:'',
            items:1,
            autoplay: false,
            smartSpeed:1500,
        });
    }
	
	 /* Owl Slider For Weather Forecast */
   /* ======================================================*/
	
	if ($('#weather-bx').length) {
		$('#weather-bx').bxSlider({
			auto:true,
			pager:false,
			controls:false,
			ticker:true,
			adaptiveHeight:true,
			speed:1500,
			
		});
	}
    
    /* Owl Slider For Blog
    ======================================================*/
    if ($('#cp-blog-slider').length) {
        $('#cp-blog-slider').owlCarousel({
            loop:true,
            dots: false,
            nav:false,
            navText:'',
            items:1,
            autoplay: false,
            smartSpeed:1500,
        });
    }

    /* Owl Slider For Widget
    ======================================================*/
    if ($('#cp-quotate-slider').length) {
        $('#cp-quotate-slider').owlCarousel({
            loop:true,
            dots: false,
            nav:false,
            navText:'',
            items:1,
            autoplay: true,
            animate: 'fadeIn',
            smartSpeed:2000,
        });
    }

     /* Owl Slider For Quotation
    ======================================================*/
    if ($('#widget-slider').length) {
        $('#widget-slider').owlCarousel({
            loop:true,
            dots: true,
            nav:false,
            navText:'',
            items:1,
            autoplay: false,
            smartSpeed:2000,
        });
    }

    /* Owl Slider Tabs Booking Slider
    ======================================================*/
    if ($('#cp-tabs-booking-slider').length) {
        $('#cp-tabs-booking-slider').owlCarousel({
            loop:true,
            dots: false,
            nav:true,
            navText:'',
            items:7,
            smartSpeed:1000,
            padding:0,
            margin: 0,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                },
                768:{
                    items:4,
                },
                992:{
                    items:6,
                },
                1199:{
                    items:7,
                }
            }
        });
    }

    /* BX Slider For Abuot Page
    ======================================================*/
    if ($('#cp_about-slider').length) {
        $('#cp_about-slider').bxSlider({
            auto: true,
            pagerCustom: '#bx-pager2',
            navigation: false,
        });
    }

     /* BX Slider For Product Detail
    ======================================================*/
    if ($('#cp_product-slider').length) {
        $('#cp_product-slider').bxSlider({
            auto: true,
            pagerCustom: '#bx-pager',
            navigation: false,
        });
    }


    /* FILTERABLE Masonary For Gallery
    ======================================================*/
    if ($('.cp_portfolioGallery').length) {
        var $container = $('.cp_portfolioGallery');
        $container.imagesLoaded( function(){
            $container.isotope({
                filter: '*',
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
        });
        $('.cp_galleryFilter a').on('click', function(){
            $('.cp_galleryFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });
    }

    /* Audio Player For Blog Page
    ======================================================*/
    if ($('audio').length) {
        $('audio').audioPlayer();
    }

    /* Event Countdown Scipts Start
    ======================================================*/
    if ($('.eventcountdown').length) {
        $(function () {
        var austDay = new Date();
        austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
        $('.eventcountdown').countdown({until: austDay});
        $('#year').text(austDay.getFullYear());
        });
    }

    /* CounterUp For Facts Start
    ======================================================*/
   if ($('.counter').length) {
       $('.counter').counterUp({
           delay: 10,
           time: 1000
       });
   }

    /* JQuery Calendar for Event Page
    ======================================================*/
    if ($('#cp-calendar').length) {
        $('#cp-calendar').fullCalendar({
            defaultDate: '2016-05-12',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'All Day Event',
                    start: '2016-05-01'
                },
                {
                    title: 'Long Event',
                    start: '2016-05-07',
                    end: '2016-05-10'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-05-09T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2016-05-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2016-05-11',
                    end: '2016-05-13'
                },
                {
                    title: 'Meeting',
                    start: '2016-05-12T10:30:00',
                    end: '2016-05-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2016-05-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2016-05-12T14:30:00'
                },
                {
                    title: 'Happy Hour',
                    start: '2016-05-12T17:30:00'
                },
                {
                    title: 'Dinner',
                    start: '2016-05-12T20:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2016-05-13T07:00:00'
                },
                {
                    title: 'Click for Google',
                    url: 'http://google.com/',
                    start: '2016-05-28'
                }
            ]
        });
    };

    /* Scroll Button
    ======================================================*/
    $("#cp_back-top").hide();
    
    // fade in #back-top
    $(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 1000) {
                $('#cp_back-top').fadeIn();
            } else {
                $('#cp_back-top').fadeOut();
            }
        });

        $('#cp_back-top a').on('click', function () {
            $('body,html').animate({
                scrollTop: 0
            }, 1000);
            return false;
        });
    });


  /* JQuery Load on Pop Up Show
    ======================================================*/
   $(document).ready(function(){
     $('#popup-overlay').fadeIn(700,function(){
        $('#popup').show();
         $('#popup').css({"opacity":"1","visibility":"visible","transform":"scale(1) rotate(0deg)"});
     });

     $("#popup-close").on('click', function() {
        $('#popup-overlay').css({"display":"none","visibility":"hidden"});
        
     });
  });
  
  $('p:empty').remove();

 });
 
 
 /* --Contact Form Submitted Through VC----- */
 
 jQuery( "#consulation_submit_form" ).submit(function( event ) {
	event.preventDefault();
	//Loader Image
    jQuery("#loader").show();
	var templateUrl = object_name.templateUrl;
	//Template Path
	jQuery("#loader").html("<img src="+templateUrl+"/aj-loader.gif alt='' width='35'>");
	

	var name = jQuery('#name_cc').val();
	var email = jQuery('#email_cc').val();
	var message = jQuery('#message_cc').val();	
	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	var errormsg = "";
	
	if(name == ""){
		errormsg = "<p><font color='red'><h5 class = 'form_name_field'>Please Enter Name</h5></font></p>";
	}
	if(email == ""){
		errormsg += "<p><font color='red'><h5 class = 'form_name_field'>Please Enter Email</h5></font></p>";
	} else if (!filter.test(email)) {
		errormsg += "<p><font color='red'><h5 class = 'form_name_field'>Please Provide A Valid Email Address</h5></font></p>";
	}

	if(message == ""){
		errormsg += "<p><font color='red'><h5 class = 'form_name_field'>Please Enter Message</h5></font></p>";
	} 
	
	if(errormsg != ""){
		jQuery("#loader").html(errormsg);
		return false;
	}
	
	jQuery.ajax({
		url: ajaxurl,
		data: {
			'action':'courses_ajax_request',
			'type':'consulation_submit_form',
			'name': jQuery('#name_cc').val(),
			'email': jQuery('#email_cc').val(),
			'message': jQuery('#message_cc').val(),
			'email_to': jQuery('#email_to').val()
		},
		success:function(data) {
			jQuery("#loader").html(data).delay( 5000 ).hide('slow');
			jQuery('#name_cc').val(""),
			jQuery('#email_cc').val(),
			jQuery('#message_cc').val("")
		},
		error: function(errorThrown){
			console.log(errorThrown);
		}
	});
	

});