<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header p-header js-header">
  <div class="p-header__inner">

   <!-- ヘッダーロゴ -->
   <?php if ( is_front_page() ): ?>
    <h1 class="p-header__logo">
			<a href="<?php echo $home ?>">
       <img class="logo" src="<?php echo get_template_directory_uri(  ) ?>/assets/img/logo.svg" alt="Engress">
      </a>
     </h1><!-- /.header__logo -->
    <?php else : ?>
      <div class="p-header__logo">
        <a href="<?php echo $home ?>">
          <img class="logo" src="<?php echo get_template_directory_uri(  ) ?>/assets/img/logo.svg" alt="Engress">
        </a>
     </div><!-- /.header__logo -->
    <?php endif; ?>
    

		<!-- ドロワーアイコン  -->
    <button type="button" id="js-hamburger" class="p-header__drawer c-hamburger" aria-controls="js-drawer-menu" aria-expanded="false" area-label="メニューを開閉する">
       <span class="c-hamburger__line"></span>
     </button>
     
     <?php
        $home = esc_url( home_url( "/" ));
        $news = esc_url( home_url( "/news/" ));
        $blog = esc_url( home_url( "/blog/" ));
        $price = esc_url( home_url( "/price/" ));
        $contact = esc_url( home_url( "/contact/" ));
      ?>


    <!-- ドロワーメニュー -->
     <div class=" p-header__drawer-menu  p-drawer-menu" id="js-drawer-menu" area-hidden="true">
       <ul class="p-drawer-menu__items">
         <li id="js-drawer-menu__item" class="p-drawer-menu__item  "><a href="<?php echo $home ?>">ホーム</a></li>
          <li id="js-drawer-menu__item" class="p-drawer-menu__item"><a href="<?php echo $news ?>">お知らせ</a></li>
          <li id="js-drawer-menu__item" class="p-drawer-menu__item"><a href="<?php echo $blog ?>">ブログ</a></li>
          <li id="js-drawer-menu__item" class="p-drawer-menu__item"><a href="<?php echo $price ?>">コース・料金</a></li>
        </ul>
      </div><!-- /.sheader-menu -->
  
        <!-- pcーメニュー -->
      <nav class="p-header__pc-menu p-header-menu ">
        <ul class="p-header-menu__items">
          <li class="p-header-menu__item"><a href="<?php echo $home ?>">ホーム</a></li><!-- /.pc-menu__item -->
          <li class="p-header-menu__item"><a href="<?php echo $news ?>">お知らせ</a></li><!-- /.pc-menu__item -->
          <li class="p-header-menu__item"><a href="<?php echo $blog ?>">ブログ</a></li><!-- /.pc-menu__item -->
          <li class="p-header-menu__item"><a href="<?php echo $price ?>">コース・料金</a></li><!-- /.pc-menu__item -->
        </ul><!-- /.pc-menu__items -->
      </nav><!-- /.header__menu -->
        
          <div class="p-header__right p-header-right">
            <div class="p-header-right__open">
              <div class="p-header-right__time">平日08:00〜20:00</div><!-- /.p-header-right__time -->
              <div class="p-header-right__tel">
                <a href="tel:0123-456-7890">0123-456-7890</a>
              </div><!-- /.p-header-right__tel -->
            </div><!-- /.p-header-right__open -->

            <div class="p-header-right__btn">
              <a href="<?php echo $contact ?>">資料請求</a>
            </div><!-- /.p-header-menu__btn -->

            <div class="p-header-right__btn p-header-right__btn--blue">
              <a href="<?php echo $contact ?>">お問い合わせ</a>
            </div><!-- /.p-header-menu__btn -->

          </div><!-- /.p-header-menu__right -->





      

      <!-- ドロワーメニュー展開時背景 -->
      <div class="p-header__overlay" id="js-header__overlay"></div>

    </div><!-- /.header__inner -->
   </header>