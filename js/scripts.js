/* jQuery
============================================================================ */
let $ = jQuery.noConflict();

//Web font loader
window.WebFontConfig = {
  // 以下にフォントを指定する
  google: { families: ['Noto+Sans+JP:300,400,500','Noto+Serif+JP:400,500,600'] },//使用するフォントと太さだけ指定
  //custom: { families: ['futura-pt'],urls: ['https://use.typekit.net/jxv2kur.css'] },//Adobe Fonts等
  active: function () {
    sessionStorage.fonts = true;
  }
};
(function () {
  let wf = document.createElement('script');
  wf.src = 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  let s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();

//ページ読み込み後
$(window).on('load',function(){
  $("body").delay(500).queue(function(){
    $(this).addClass('loaded');
  })
});


//object_fit
objectFitImages('img.object_fit');

//ヘッダーメニュー
$(function(){
  let header_toggle = $(".common-header__toggle");
  let header_nav = $(".common-header__nav");
  function checkMediaQuery(){
    if(window.matchMedia('(max-width: 1024px)').matches){
      //header_nav.hide();
      header_toggle.on("click",function(){
        $(this).toggleClass("open");
        header_nav.slideToggle();
      })
    }else{
      //header_nav.show();
    }
  }
  $('.common-header__item a').click(function(){
    if(window.matchMedia('(max-width: 1024px)').matches){
    $('.common-header__toggle').removeClass("open");
    header_nav.slideUp();
    }
  });
  window.onload = checkMediaQuery();
  // let lastInnerWidth = window.innerWidth;
  // window.addEventListener( "resize", function () {
  //   if ( lastInnerWidth != window.innerWidth ) {
  //     lastInnerWidth = window.innerWidth ;
  //     checkMediaQuery();
  //   }
  // });
});

//ページトップに戻る
$(function(){
  let page_top = $(".common-footer__pageTop");
  let window_height = $(window).height();
  $(window).on("scroll",function(){
    let scroll = $(window).scrollTop() + $(window).height();
    let footer = $("footer").offset().top;
    let scroll_top = $(window).scrollTop();
    if(scroll_top > window_height){
      page_top.fadeIn();
    }else{
      page_top.fadeOut();
    }
    if (scroll >= footer - "70") {
      page_top.css({
        "position": "absolute",
      }).addClass("is-stop");
    } else {
      page_top.css({
        "position": "fixed",
      }).removeClass("is-stop");
    }
  });
  page_top.click(function () {
    $('body, html').animate({ scrollTop: 0 }, 500);
    return false;
  });
  // var btn = $('.common-footer__pageTop');
  // var timer;
  // $(window).scroll(function() {
  //   //スクロール開始するとボタンを非表示
  //   btn.removeClass('active');
  //   //スクロール中はイベントの発火をキャンセルする
  //   clearTimeout(timer);
  //   //スクロールが停止して0.2秒後にイベントを発火する
  //   timer = setTimeout(function() {
  //     //スクロール位置を判定してページ上部のときはボタンを非表示にする
  //     if($(this).scrollTop()) {
  //       btn.addClass('active');
  //     } else {
  //       btn.removeClass('active');
  //     }
  //   }, 200);
  // });
});

//スムーズスクロール
$(function () {
  $('a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "body" : href);
    var position = target.offset().top;
    $("html, body").animate({ scrollTop: position }, 700, "swing");
    return false;
  });
});

// 追従ボタン
$(function () {
  const fixedBtn = $(".fixed-btn__list");
  var header = $('.top-kv').outerHeight();
  fixedBtn.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > header) {
      fixedBtn.fadeIn();
    } else {
      fixedBtn.fadeOut();
    }
  });
  // フッター手前でストップ
  $(".fixed-btn__list").hide();
  $(window).on("scroll", function () {
    scrollHeight = $(document).height();
    scrollPosition = $(window).height() + $(window).scrollTop();
    footHeight = $(".common-footer").outerHeight();
    if (window.matchMedia('(max-width: 767px)').matches) {
      if (scrollHeight - scrollPosition <= footHeight) {
        // ページトップボタンがフッター手前に来たらpositionとfixedからabsoluteに変更
        $(".fixed-btn").fadeOut('');
      } else {
        $(".fixed-btn").fadeIn('');
      }
    } else {
      if (scrollHeight - scrollPosition <= footHeight) {
        // ページトップボタンがフッター手前に来たらpositionとfixedからabsoluteに変更
        $(".fixed-btn").addClass('active');
      } else {
        $(".fixed-btn").removeClass('active');
      }
    }
  });
});

$(function(){
  var timer;
  $(window).scroll(function() {
    //スクロール開始するとボタンを非表示
    $(".fixed-btn__item").removeClass('active');
    //スクロール中はイベントの発火をキャンセルする
    clearTimeout(timer);
    //スクロールが停止して0.2秒後にイベントを発火する
    timer = setTimeout(function() {
      //スクロール位置を判定してページ上部のときはボタンを非表示にする
      if($(this).scrollTop()) {
        $(".fixed-btn__item").addClass('active');
      } else {
        $(".fixed-btn__item").removeClass('active');
      }
    }, 200);
  });
});

$(window).on('scroll', function() {
	$('.mod-heading').each(function() { // .js-scrollというクラスが付いている要素に対して
      var elemPosition = $(this).offset().top,
          windowHeight = $(window).height(),
          scroll = $(window).scrollTop();
      if (scroll > elemPosition - windowHeight + windowHeight / 5) {
        // if (scroll > elemPosition - windowHeight) イベント発火のタイミグはお好みで
          $(this).addClass('active'); // ターゲットにis-showというクラスを追加
      }
  });
});

// 予約ボタン2個の時、style変更
$(function(){
  if (window.matchMedia("(min-width: 768px)").matches) {
    $deserveBtn = $('.fixed-btn__item').length;
    if($deserveBtn == 2){
      $('.fixed-btn__list').css('transform', 'translateY(-20%)');
    } else {
      $('.fixed-btn__list').css('transform', 'translateY(-50%)');
    }
  }
});