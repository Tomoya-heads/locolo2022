// LOCOLOの楽しみ方
$(function(){
  $('.top-howtofun__item:nth-of-type(odd) .top-howtofun__ttl').addClass('blue');
  $('.top-howtofun__item:nth-of-type(even) .top-howtofun__ttl').addClass('red');
});
$(function(){
if (window.matchMedia('(max-width: 767px)').matches) {
  $('.top-howtofun__item').click(function() {
    // $(this).find('.top-service__container').slideDown(400);
    // $('.top-service__item').not($(this)).find('.top-service__container').slideUp();
    $(this).addClass("open");
    // $(this).find('.top-howtofun__right').fadeIn("");
    $('.top-howtofun__item').not($(this)).removeClass("open");
    $(this).find('.top-howtofun__right').slideToggle(600);
    // $(this).find('.top-howtofun__right').fadeIn("");
    $('.top-howtofun__item').not($(this)).find('.top-howtofun__right').slideUp(600);
    // $('.top-howtofun__item').not($(this)).find('.top-howtofun__right').fadeOut("");
  });
} else if (window.matchMedia('(max-width: 1024px)').matches) {
  $('.top-howtofun__item').click(function() {
    // $(this).find('.top-service__container').slideDown(400);
    // $('.top-service__item').not($(this)).find('.top-service__container').slideUp();
    $(this).addClass("open");
    // $(this).find('.top-howtofun__right').fadeIn("");
    $('.top-howtofun__item').not($(this)).removeClass("open");
    // $('.top-howtofun__item').not($(this)).find('.top-howtofun__right').fadeOut("");
  });
} else {
  $('.top-howtofun__item').hover(function() {
    // $(this).find('.top-service__container').slideDown(400);
    // $('.top-service__item').not($(this)).find('.top-service__container').slideUp();
    $(this).addClass("open");
    // $(this).find('.top-howtofun__right').fadeIn("");
    $('.top-howtofun__item').not($(this)).removeClass("open");
    // $('.top-howtofun__item').not($(this)).find('.top-howtofun__right').fadeOut("");
  });
}
});

// よくあるご質問
$(function(){
  //クリックで動く
  $('.top-faq__item').click(function(){
    $(this).toggleClass('active');
    $(this).find('.top-faq__subList').slideToggle();
  });
});

function checkMediaQuery(){
  $(".top-map__location-modal-list.slick-initialized").slick("unslick");

    var initialSlide = 0;
    $(function(){
  
      var nav_col = $(this).find(".top-map__location-item");
      nav_col.eq(0).removeClass("active");
      nav_col.eq(0).addClass("active");
      nav_col.each(function(){
        // if (window.matchMedia("(max-width: 767px)").matches) {
      $(this).on('click', function(){
        nav_col.not(this).removeClass('active');
        $(this).addClass('active');
        var initialSlide = nav_col.index(this);
        main_slider.slick('slickGoTo', initialSlide, false);
      })
      // } 
      // else {
      //   $(this).on('mouseenter', function(){
      //     nav_col.not(this).removeClass('active');
      //     $(this).addClass('active');
      //     var initialSlide = nav_col.index(this);
      //     main_slider.slick('slickGoTo', initialSlide, false);
      //   })
      // }
      });

      var main_slider = $(this).find(".top-map__location-modal-list").not(".slick-initialized").slick({
        fade: true,
        speed: 700,
        dots: false,
        focusOnSelect: false,
        draggable: true,
        swipeToSlide: true,
        initialSlide: initialSlide,
        waitForAnimate: false,
      });
    });
}
window.onload = checkMediaQuery();
var lastInnerWidth = window.innerWidth;
window.addEventListener( "resize", function () {
if ( lastInnerWidth != window.innerWidth ) {
  lastInnerWidth = window.innerWidth ;
  checkMediaQuery();
}
});

$(function(){
  $('.top-map__location-item').click(function(){
    $('.common-overlay').addClass('active');
    $('.top-map__location-modal').addClass('active');
  });
  $('.common-overlay').click(function(){
    $(this).removeClass('active');
    $('.top-map__location-modal').removeClass('active');
  });
  $('.top-map__location-modal-box').click(function(){
    $('.common-overlay').removeClass('active');
    $('.top-map__location-modal').removeClass('active');
  });
});

$(function(){
  if (window.matchMedia('(max-width: 767px)').matches) {
    $('.sbi_item:last-of-type').remove();
    $('.sbi_item:nth-last-of-type(2)').remove();
    // $('.sbi_item').css('width','25%');
  }
});

$(window).on('load',function(){
  // setTimeout(function(){
  //   $('.common-loading__inner').css('opacity','1');
  // },1600);
  $('.common-loading').delay(2400).fadeOut(1400);
  $('.common-header').delay(4200).queue(function(){
    $(this).addClass("active");
  });
  setTimeout(function(){
    $('.top-kv__wave').css('transform','translateY(0)');
  },4200);
  setTimeout(function(){
    $('.top-kv__scroll').css('opacity','1');
  },5000);
});
