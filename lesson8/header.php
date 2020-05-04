<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="description" content="PizzaTime — пицца в Москве от итальянского повара">
  <meta name="keywords" content="пицца">

  <meta property="og:title" content="PizzaTime — пицца в Москве от итальянского повара" />
  <meta property="og:description" content="PizzaTime — пицца в Москве от итальянского повара" />
  <meta property="og:image" content="img/section-top/bg.jpg" />

  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon/site.webmanifest">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#ffffff">

  <title>PizzaTime — пицца в Москве от итальянского повара</title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<!-- header-page -->
<header class="header-page">
  <div class="container header-page__container">
    <div class="header-page__start">
      <div class="logo">
        <?php if (is_front_page()) : ?>
          <img class="logo__img" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo' )); ?>" alt="" width="127" height="21">
        <?php else : ?>
          <a href="<?php echo get_home_url(); ?>">
            <img class="logo__img" src="<?php echo wp_get_attachment_image_url(carbon_get_theme_option( 'site_logo' )); ?>" alt="" width="127" height="21">
          </a>
        <?php endif; ?>
      </div>
    </div>
    <div class="header-page__end">
      <nav class="header-page__nav">
        <?php
          wp_nav_menu( [
            'theme_location'  => 'menu_main_header',
            'container'       => null, 
            'menu_class'      => 'header-page__ul', 
          ] );
        ?>
      </nav>
      <div class="phone">
        <a class="phone__item header-page__phone" href="tel:<?php echo $GLOBALS['pizza_time']['phone_digits']; ?>"><?php echo $GLOBALS['pizza_time']['phone']; ?></a>
      </div>
      <div class="header-page__hamburger">
        <button class="btn-menu" type="button" data-popup="popup-menu">
          <span class="btn-menu__box">
            <span class="btn-menu__inner"></span>
          </span>
        </button>
      </div>
    </div>
  </div>
</header>
<!-- /.header-page -->