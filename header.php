<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <title><?php wp_title('|',true, 'right'); bloginfo('name');?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- fontawesome CSS -->
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
  </head>
  <body>

    <header>
      <div class="container">
        <h1><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name');?></a></h1>
      </div>
    </header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="ナビゲーションの切替">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <?php
            wp_nav_menu(
              array(
                //カスタムメニュー名
                'theme_location' => 'header-navi',
                //コンテナを表示しない
                'container' => false,
                //カスタムメニューを設定しない際に固定ページでメニューを作成しない
                'fallback_cb' => false,
                //メニューを構成する ul 要素に適用するCSS クラス名。にnavbar-navを入れる
                'menu_class' => 'navbar-nav'
              )
            );
            ?>
          </div>
        </nav>
      </div>
