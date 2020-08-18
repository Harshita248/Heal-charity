jQuery(window).on('scroll', function (){

  /*----------------------------- Navigation --------------------------*/
  if (jQuery(window).scrollTop() > 100){
    jQuery('#main-menu').addClass('menu-bg-overlay');
  } else {
    jQuery('#main-menu').removeClass('menu-bg-overlay');
  }
  if (jQuery(window).scrollTop() > 800){
    jQuery('#main-menu').addClass('menu-bg');
  } else {
    jQuery('#main-menu').removeClass('menu-bg');
  }


});




/*------------------------- Team Member Slider ----------------------------*/
var teamSlider = $("#team-slider");

teamSlider.owlCarousel({
        autoPlay : 3000,
        stopOnHover : true,
        pagination : true,
        paginationNumbers: false,

        itemsCustom : [
        [0, 1],
        [450, 1],
        [600, 1],
        [700, 2],
        [1000, 3],
        [1200, 4],
        ],
        // Responsive 
        responsive: true,
        responsiveRefreshRate : 200,
        responsiveBaseWidth: window
    });



/*------------------------- Causes Post Slider ----------------------------*/
var causestSlider = $("#causes-post-slider");

causestSlider.owlCarousel({
        autoPlay : 3000,
        stopOnHover : true,
        pagination : false,
        paginationNumbers: false,

        itemsCustom : [
        [0, 1],
        [450, 1],
        [600, 1],
        [700, 2],
        [1000, 2],
        [1200, 2],
        ],
        // Responsive 
        responsive: true,
        responsiveRefreshRate : 200,
        responsiveBaseWidth: window
    });
    // Custom Navigation Events
      $(".slide-left").click(function(){
        causestSlider.trigger('owl.next');
      });
      $(".slide-right").click(function(){
        causestSlider.trigger('owl.prev');
      });





jQuery(window).load(function($) {

  /*-------------------------------- Parallax ---------------------------------------*/
  jQuery("#top-section").parallax("50%", 0.5);
  jQuery("#about-parallax").parallax("50%", 0.5);
  jQuery("#next-event").parallax("50%", 0.5);
  jQuery("#testimonial").parallax("50%", 0.5);
  jQuery("#tweet-section").parallax("50%", 0.5);
  jQuery("#clients").parallax("50%", 0.5);
  
  /*------------------------------- Preloader -----------------------------------------*/
  jQuery(".loader").fadeOut();
  jQuery("#preloader").delay(350).fadeOut("slow");

});


  /*------------------------------- Progress Bar---------------------------------------*/
  jQuery("#about-progress-1").css( "width", "60%" );
  jQuery("#causes-progress-1").css( "width", "60%" );
  jQuery("#causes-progress-2").css( "width", "60%" );
  jQuery("#causes-progress-3").css( "width", "60%" );
  jQuery("#causes-progress-4").css( "width", "60%" );



jQuery(document).ready(function($) {
  "use strict";


  /*------------------------------- Element Appear Effect -----------------------------------------*/
  $('.from-top.delay-normal').each(function () {
    $(this).appear(function() {
      $(this).delay(150).animate({opacity:1,top:"0px"},600);
    }); 
  });

  $('.from-bottom.delay-normal').each(function () {
    $(this).appear(function() {
      $(this).delay(150).animate({opacity:1,bottom:"0px"},600);
    }); 
  });


  $('.from-bottom.delay-200').each(function () {
    $(this).appear(function() {
      $(this).delay(200).animate({opacity:1,bottom:"0px"},600);
    }); 
  });

  $('.from-bottom.delay-600').each(function () {
    $(this).appear(function() {
      $(this).delay(600).animate({opacity:1,bottom:"0px"},600);
    }); 
  });

  $('.from-bottom.delay-1000').each(function () {
    $(this).appear(function() {
      $(this).delay(1000).animate({opacity:1,bottom:"0px"},600);
    }); 
  });

  $('.from-bottom.delay-1400').each(function () {
    $(this).appear(function() {
      $(this).delay(1400).animate({opacity:1,bottom:"0px"},600);
    }); 
  });

  $('.from-left.delay-normal').each(function () {
    $(this).appear(function() {
      $(this).delay(150).animate({opacity:1,left:"0px"},600);
    }); 
  });


  $('.from-right.delay-normal').each(function () {
    $(this).appear(function() {
      $(this).delay(150).animate({opacity:1,right:"0px"},600);
    }); 
  });

  $('.from-right.delay-200').each(function () {
    $(this).appear(function() {
      $(this).delay(200).animate({opacity:1,right:"0px"},600);
    }); 
  });

  $('.from-right.delay-600').each(function () {
    $(this).appear(function() {
      $(this).delay(600).animate({opacity:1,right:"0px"},600);
    }); 
  });

  $('.from-right.delay-1000').each(function () {
    $(this).appear(function() {
      $(this).delay(1000).animate({opacity:1,right:"0px"},600);
    }); 
  });

  $('.from-right.delay-1400').each(function () {
    $(this).appear(function() {
      $(this).delay(1400).animate({opacity:1,right:"0px"},600);
    }); 
  });

  $('.fade-in.delay-normal').each(function () {
    $(this).appear(function() {
      $(this).delay(150).animate({opacity:1,right:"0px"},600);
    }); 
  });


  /*-------------------------------  Scroll to Top ----------------------------*/
  $(window).scroll(function() {
    if ($(this).scrollTop() > 200) {
     $('#scroll-to-top').fadeIn('slow');
       } else {
        $('#scroll-to-top').fadeOut('slow');
      }
    }); 

  $('#scroll-to-top').click(function(){
    $("html,body").animate({ scrollTop: 0 }, 1000);
    return false;
  });

});



// onepage nav
$(document).ready(function(){
    var scrolllink = $(".navbar-nav li a");
    scrolllink.click(function(e){
      e.preventDefault();
      $('body, html').animate({
         scrollTop: $(this.hash).offset().top 
      }, 1000);
    });
    
    
    
     $(window).scroll(function() {
    var scrollbarLocation = $(this).scrollTop();
    
    scrolllink.each(function() {
      
      var sectionOffset = $(this.hash).offset().top - 20;
      
      if ( sectionOffset <= scrollbarLocation ) {
      $(this).parent().addClass('active');
      $(this).parent().siblings().removeClass('active');
      }
    });
    
    });
  });
