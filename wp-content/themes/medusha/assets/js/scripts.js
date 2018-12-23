$(document).ready(function(){

  /*-----header-----*/
  //HAMBURGER
  $('.nav-icon').click(function(){
      $(this).toggleClass('open');
      $('.main-menu').toggleClass('open-menu');
      $('.number').toggleClass('white');
      $('.main-name').toggleClass('white');
      $('.nav-icon').toggleClass('white');
      $('.logo-white').toggleClass('active');
      $('.logo').toggleClass('disable');
      $('body').toggleClass('disable-scroll');
  });

//   $(function() {
//     $('.menu-ul-wrp li').click(function() {
//         $(this).find('.sub-menu').slideToggle();
//     })
// });
    // $('.menu-ul-wrp>ul>li>a').click(function() {
    //   $('.menu-ul-wrp>ul>li>a').removeClass('active');
    //   $('.sub-menu').css("display") == "none");
    //   if ($(this).next('.sub-menu').css("display") == "none") {
    //     $('.sub-menu').hide('normal');
    //     $(this).next('.sub-menu').toggle('normal');
    //     $('.menu-ul-wrp>ul>li>a').removeClass('active');
    //     $(this).toggleClass('active');
    //   } else $('.sub-menu').hide('normal');
    //   return false;
    // });

    // $('.menu-ul-wrp > ul > li > a').click(function(){
    //   $(this).find('.sub-menu').stop().slideToggle('slov');
    // });
    
    // $(".menu-ul-wrp > ul > li > a").click(function() {
    //   $(this).find("~ ul").stop().slideToggle("slov");
    // });

  $('.main-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 900,
    prevArrow: '<button type="button" class="slick-prev"><img src="http://localhost:8888/medusha/wp-content/themes/medusha/build/images/prev-white.svg"></button>',
    nextArrow: '<button type="button" class="slick-next"><img src="http://localhost:8888/medusha/wp-content/themes/medusha/build/images/next-white.svg"></button>'
  });

  $('.individual').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    speed: 900,
    prevArrow: '<button type="button" class="slick-prev"><img src="http://localhost:8888/medusha/wp-content/themes/medusha/build/images/prev-white.svg"></button>',
    nextArrow: '<button type="button" class="slick-next"><img src="http://localhost:8888/medusha/wp-content/themes/medusha/build/images/next-white.svg"></button>'
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
    arrows: false,
    responsive: [
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('.single-text__read-more').readmore({
    collapsedHeight: 41,
    speed: 350,
    moreLink: '<div class="single-text__more"><img src="http://localhost:8888/medusha/wp-content/themes/medusha/build/images/single/more.svg" alt=""></div>',
    lessLink: '<div class="single-text__less"><img src="http://localhost:8888/medusha/wp-content/themes/medusha/build/images/single/less.svg" alt=""></div>'
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
  $(".menu-animation-fs-eko_r").animated( "fadeInRight");
  $(".menu-animation-fs-title_r").animated( "fadeInRight");
  $(".menu-animation-fs-text_r").animated( "fadeInRight");
  $(".menu-animation-fs-button_r").animated( "fadeInRight");

  $(".scroll-animation").animated( "bounce");


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

  $(".product-fade").animated( "fadeIn");


  $(".blog-item-fade-1").animated( "fadeIn");
  $(".blog-item-fade-2").animated( "fadeIn");
  $(".blog-item-fade-3").animated( "fadeIn");
  $(".blog-item-fade-4").animated( "fadeIn");

  $(".bee-animation").animated( "bee");

  $(".bee-404-one").animated( "pulse");
  $(".bee-404-two").animated( "pulse");
  $(".bee-404-three").animated( "pulse");
  $(".bee-404-four").animated( "pulse");

  var swiper = new Swiper('.swiper-container', {

    direction: 'vertical',
    
    pagination: {
      el: '.swiper-pagination',
      dynamicBullets: true,
      dynamicMainBullets: 1,
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">0' + (index + 1) + '</span>';
      },
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      // when window width is <= 480px
      480: {
        direction: 'horizontal',
      }
    }

  }) 

  

  var galleryTop = new Swiper('.gallery-top', {
    direction: 'vertical',
    autoHeight: true,
    navigation: {
      nextEl: '.gallery-top-next',
      prevEl: '.gallery-top-prev',
    },
  });

  var galleryThumbs = new Swiper('.gallery-thumbs', {
    direction: 'vertical',
    slidesPerView: 4,
    touchRatio: 0.2,
    slideToClickedSlide: true,
    navigation: {
      nextEl: '.gallery-thumb-next',
    },
  });

  
		galleryTop.controller.control = galleryThumbs;
		galleryThumbs.controller.control = galleryTop;
	

  

  

  // var swIndividual = new Swiper('.individual', {
  //   // direction: 'horizontal',
  //   // autoHeight: true,
  //   // slideToClickedSlide: true,
  //   navigation: {
  //     nextEl: '.individual-top-next',
  //     prevEl: '.individual-top-prev',
  //   },
  // });

  


  /*----animate-----*/
});

