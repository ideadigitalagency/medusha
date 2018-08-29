$(document).ready(function(){

  /*-----header-----*/
  //HAMBURGER
  $('.nav-icon').click(function(){
      $(this).toggleClass('open');
      $('.main-menu').toggleClass('open-menu');
      $('body').toggleClass('disable-scroll');
  });

  $('.nav_wrap').click(function(){
      $(this).toggleClass('open');
  });

  $('.main-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 900,
    prevArrow: '<button type="button" class="slick-prev"><img src="build/images/prev.svg"></button>',
    nextArrow: '<button type="button" class="slick-next"><img src="build/images/next.svg"></button>'
  });

  $("a.scroll-down").click(function() {
    $("html, body").animate({
       scrollTop: $($(this).attr("href")).offset().top + "px"
    }, {
       duration: 900,
       easing: "swing"
    });
    return false;
  });

  // $('.nav-icon').click(function(){
  //   $(this).toggleClass('open');
  //   $('.main-menu').toggleClass('open-menu');
  //   $('body').toggleClass('disable-scroll');
  // });
  $('.logo-slider').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: false
  });


  /*----animate-----*/
  $(".menu-animation-number").animated( "fadeIn");
  $(".menu-animation-logo").animated( "fadeIn");
  $(".menu-animation-burger").animated( "fadeIn");

  $(".menu-animation-fs-left").animated( "fadeInLeft");
  $(".menu-animation-fs-eko").animated( "fadeInLeft");
  $(".menu-animation-fs-title").animated( "fadeInLeft");
  $(".menu-animation-fs-text").animated( "fadeInLeft");
  $(".menu-animation-fs-button").animated( "fadeInLeft");
  $(".menu-animation-fs-right").animated( "fadeInRight");

  $(".scroll-animation").animated( "fadeInDown");


  $(".main-slider-left").animated( "fadeInLeft");
  $(".images-item-r-1").animated( "fadeInRight");
  $(".images-item-r-2").animated( "fadeInRight");
  $(".images-item-r-3").animated( "fadeInRight");
  $(".images-item-r-4").animated( "fadeInRight");

  $(".product-left").animated( "fadeInLeft");
  $(".product-right").animated( "fadeInRight");
  $(".product-left-up").animated( "fadeInLeft");
  $(".product-right-down").animated( "fadeInRight");

  $(".form-fade").animated( "fadeIn");
  $(".form-decore-fade-bee").animated( "fadeIn");
  $(".form-decore-bg-right-fade").animated( "fadeIn");
  /*----animate-----*/
});

