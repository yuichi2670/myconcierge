<!DOCTYPE html>
<html lang="ja">
<head> 
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <!-- meta情報 -->
  <title>Myコンシェル</title>
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- ogp -->
  <meta property="og:title" content="" />
  <meta property="og:type" content="" />
  <meta property="og:url" content="" />
  <meta property="og:image" content="" />
  <meta property="og:site_name" content="" />
  <meta property="og:description" content="" />
  <!-- ファビコン -->
  <link rel="”icon”" href="" />
  <!-- css -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/styles.css">
  <!-- フォント -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@400;500&display=swap" rel="stylesheet">
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script defer type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/script.js"></script>
  <?php wp_head(); ?>
</head>
<body>
<?php wp_body_open(); ?>
  <header class="l-header p-header">
    <div class="p-header__inner l-inner">
      <div class="p-header__logo">
        <img src="<?php echo get_template_directory_uri() ?>/images/header-logo.svg" alt="">
      </div>
      <div class="p-header__drawer c-hamburger js-hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div><!-- /p-header__drawer -->
      <nav class="p-header__sp-nav sp-nav js-sp-nav" id="js-nav">
        <ul class="sp-nav__items">
          <li class="sp-nav__item"><a href="<?php bloginfo('url'); ?>/#feature">特徴</a></li><!-- /sp-nav__item -->
          <li class="sp-nav__item"><a href="#can">Myコンシェルでできること</a></li><!-- /sp-nav__item -->
          <li class="sp-nav__item"><a href="#price">料金表</a></li><!-- /sp-nav__item -->
          <li class="sp-nav__item"><a href="#flow">ご相談・ご契約の流れ</a></li><!-- /sp-nav__item -->
          <li class="sp-nav__item sp-nav__item--pink"><a href="#inquire">お問い合わせ</a></li><!-- /sp-nav__item -->
        </ul><!-- /sp-nab__items -->
      </nav>
      <nav class="p-header__pc-nav pc-nav js-pc-nav">
        <ul class="pc-nav__items">
          <li class="pc-nav__item"><a href="#feature">特徴</a></li><!-- /sp-nav__item -->
          <li class="pc-nav__item"><a href="#can">Myコンシェルでできること</a></li><!-- /sp-nav__item -->
          <li class="pc-nav__item"><a href="#price">料金表</a></li><!-- /sp-nav__item -->
          <li class="pc-nav__item"><a href="#flow">ご相談・ご契約の流れ</a></li><!-- /sp-nav__item -->
          <li class="pc-nav__item pc-nav__item--pink"><a href="#inquire">お問い合わせ</a></li><!-- /sp-nav__item -->
        </ul><!-- /sp-nab__items -->
      </nav><!-- /p-header__sp-nav -->
    </div><!-- /p-header__inner -->
  </header><!-- /p-header -->