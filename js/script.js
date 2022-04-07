
jQuery(function ($) { // この中であればWordpressでも「$」が使用可能になる

  var topBtn = $('.pagetop');
  topBtn.hide();

  // ボタンの表示設定
  $(window).scroll(function () {
    if ($(this).scrollTop() > 70) {
      // 指定px以上のスクロールでボタンを表示
      topBtn.fadeIn();
    } else {
      // 画面が指定pxより上ならボタンを非表示
      topBtn.fadeOut();
    }
  });


   //ドロワーメニュー
   $(".js-hamburger").click(function () {
      if ($('.js-hamburger').hasClass('is-active')) {
        $('.js-hamburger').removeClass("is-active");
        // $("html").toggleClass("is-fixed");
        $(".js-sp-nav").fadeOut(300);
      } else {
        $('.js-hamburger').addClass("is-active");
        // $("html").toggleClass("is-fixed");
        $(".js-sp-nav").fadeIn(300);
      }
    });
    $('.sp-nav__item a').on('click',function() {
      $(this).toggleClass('is-active');
      if ($(this).hasClass('is-active')) {
        $('.js-sp-nav').fadeOut(300);
        $('.js-hamburger').removeClass('is-active');
      } 
    });


  // トップへ戻る
  var pagetop = $('#page_top');   
    pagetop.hide();
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {  //100pxスクロールしたら表示
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 300); //0.5秒かけてトップへ移動
        return false;
    });
  




  // スムーススクロール (絶対パスのリンク先が現在のページであった場合でも作動)

  $(document).on('click', 'a[href*="#"]', function () {
    let time = 400;
    let header = $('header').innerHeight();
    let target = $(this.hash);
    if (!target.length) return;
    let targetY = target.offset().top - header;
    $('html,body').animate({ scrollTop: targetY }, time, 'swing');
    return false;
  });

});
