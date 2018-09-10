<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php wp_title( '' ); ?><?php if ( wp_title( '', false ) ) { echo ' :'; } ?> <?php bloginfo( 'name' ); ?></title>

  <link href="https://www.google-analytics.com/" rel="dns-prefetch">
  <link href="https://cdnjs.cloudflare.com" rel="dns-prefetch">
  <link href="https://fonts.googleapis.com" rel="dns-prefetch">

  <!-- icons -->
  <link href="favicon.ico" rel="shortcut icon">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
  <meta name="msapplication-TileColor" content="#603cba">
  <meta name="theme-color" content="#ffffff">

  <!-- css + javascript -->
  <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i&amp;subset=cyrillic">

  <!--[if lt IE 9]>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- css + javascript -->
  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
  <!-- wrapper -->
  <div class="wrapper">
    <header role="banner">
      <div class="container">
        <div class="row">

          <div class="header--logo col-xl-3 order-xl-1 col-lg-3 order-lg-1 col-md-3 order-md-1 col-sm-3 order-sm-1 col-xs-3 order-xs-1">
            <?php if ( !is_front_page() && !is_home() ){ ?>
              <a href="<?php echo home_url(); ?>">
                <?php } ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php wp_title( '' ); ?>" title="<?php wp_title( '' ); ?>" class="logo-img">
                <?php if ( !is_front_page() && !is_home() ){ ?>
              </a>
            <?php } ?>
          </div><!-- /header--logo -->

          <nav class="header--nav col-xl-6 order-xl-2 col-lg-12 order-lg-3 col-md-12 order-md-3 col-sm-12 order-sm-3 col-xs-12 order-xs-3" role="navigation">
            <?php wpeHeadNav(); ?>
          </nav><!-- /header--nav -->

          <div class="header--contacts col-xl-3 order-xl-3 col-lg-9 order-lg-2 col-md-9 order-md-2 col-sm-9 order-sm-2 col-xs-9 order-xs-2">
            <a href="tel:+380502010002" class="header--phone">+38 <span>050</span> 201 00 02</a>
            <a href="tel:+380502010003" class="header--phone">+38 <span>067</span> 101 00 03</a>
            <span class="header--workingtime">24/7 — 365 круглосуточно</span>
          </div>
          <!-- /.header--contacts col-xl-4 -->

          <?php if ( is_page(37) ){ ?>
            <div class="header--search col-xl-10 order-xl-4 offset-xl-1 order-lg-4 col-md-12 offset-md-0 order-md-4 order-sm-4 order-xs-4">
              <h6 class="header--search__title">Быстрый и Качественный поиск</h6>
              <p class="header--search__descr">по всей территории Украины и за её приделами</p>
              <form class="header--search__form" method="get" action="<?php echo home_url(); ?>" role="search">
                <input type="search" name="s" placeholder="Введите название вакансии">
                <button>Найти</button>
              </form>
            </div>
            <!-- /.header--search -->
          <?php } ?>

          <div class="header--qoute col-xl-6 order-xl-5 offset-xl-3 order-lg-5 col-md-12 order-md-5 offset-md-0 order-sm-5 order-xs-5">
            <blockquote>“Мечта не становится реальностью через магию; <br>это требует пота, решительности и тяжелой работы.”</blockquote>
            <p class="header--qoute__author">Колин Пауэлл</p>
            <div class="header--qoute__post">американский политический деятель и генерал армии США</div>
          </div>
          <!-- /.header--qoute -->

        </div><!-- /.row -->
      </div><!-- /.container -->
    </header><!-- /header -->

    <section role="main">
