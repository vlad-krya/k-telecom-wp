<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap"
      rel="stylesheet"
    />
    <title>К Телеком</title>
  </head>
  <body>

  <!-- Header -->
    <header class="header">
      <div class="header__top">
        <div class="header__top__inner">
          <div class="header__top__inner__left-block">
            <span class="header__top__inner__left-block__location">
              <span
                class="header__top__inner__left-block__location-title dashed-text"
                >Екатеринбург</span
              >
              <i class="header__top__inner__left-block__location-arrow"></i>
              <img
                src="<?php echo get_template_directory_uri(); ?>/assets/map-mark.png"
                alt="map mark"
                class="header__top__inner__left-block__location-img"
              />
            </span>
            <span class="header__top__inner__left-block__contacts dashed-text"
              >Контакты офиса</span
            >
          </div>
          <span class="header__top__inner__right-block">
            <span class="dashed-text">Оплата услуг</span>
            <span class="dashed-text">Новости</span></span
          >
        </div>
      </div>
      <div class="header__buttom">
        <div class="header__buttom__inner">
          <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" alt="K Telecom" /></a>
          <span class="header__buttom__inner-number">8 (343) 389 28 28</span>
          <button class="btn btn--request">Оставить заявку</button>
        </div>
      </div>
    </header>