<!doctype html>
<html lang="en">
<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="msapplication-TileImage" content="favicon/mstile-144x144.png">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <!-- Fonts Google Roboto -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap&subset=cyrillic" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/assets/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="<?php bloginfo('template_directory')?>/assets/css/style.css">
</head>
<body>
<div class="container col-md">
  <div class="top-nav">
    <div class="row">
      <div class="col-md">
        <div class="address">
          <div class="text-style float-right">
            <div class="address-img float-left">
              <img src="<?php bloginfo('template_directory')?>/assets/img/top-line/loc.png" alt="loc">
            </div>
            <a href="#">Москва, ул Братиславская, д.6, оф. 51-52</a>
            <p> Свидетельство № 0082/05 от 15.11.2016</p>
          </div>
        </div>
      </div>
      <!-- address -->

      <div class="phone">
        <div class="phone-content text-style float-right">
          <div class="phone-img float-left">
            <img src="<?php bloginfo('template_directory')?>/assets/img/top-line/phone.png" alt="phone">
          </div>
          <p> +7 (495) 640-62-06</p>
          <a href="#">Заказать звонок</a>
        </div>
      </div>
      <!-- phone -->

      <div class="email">
        <div class="text-style float-right">
          <div class="email-img float-left">
            <img src="<?php bloginfo('template_directory')?>/assets/img/top-line/mail.png" alt="mail">
          </div>
          <a href="#">info@sezs.ru</a>
        </div>
      </div>
      <!-- email -->

      <div class="col-md">
        <div class="search">
          <div class="form-group has-search">
            <input type="text" class="form-control form-control-sm ml-3 w-65" placeholder="Поиск по сайту">
            <span class="fa fa-search form-control-feedback"></span>
          </div>
        </div>
      </div>
      <!-- search -->

    </div>
    <!--  .row -->
  </div>
  <!-- .top-nav-->

  <div class="top-nav_menu">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
        <div class="collapse navbar-collapse text-center" id="navbarTogglerDemo03">
            <?php $args = array(
                'menu'            => '',
                'container'       => 'ul',
                'container_class' => 'navbar-nav',
                'container_id'    => '',
                'menu_class'      => 'navbar-nav',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                'item_spacing'    => 'preserve',
                'depth'           => 0,
                'walker'          => '',
                'theme_location'  => '',
            );
            wp_nav_menu($args);
            ?>
        </div>
      </div>
    </nav>
  </div>
  <!-- .top-nav_menu -->