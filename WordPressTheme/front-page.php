<?php get_header(); ?>

<?php
        $home = esc_url( home_url( "/" ));
        $news = esc_url( home_url( "/news/" ));
        $blog = esc_url( home_url( "/blog/" ));
        $price = esc_url( home_url( "/price/" ));
        $contact = esc_url( home_url( "/contact/" ));
      ?>

<div class="p-mv">
 <div class="p-mv__top">
   <h2 class="p-mv__title">TOEFL対策はEngress</h2><!-- /.top-mv__title -->
   <p class="p-mv__sub-title">日本人へのTOEFL指導歴豊かな講師陣の<br>
コーチング型TOEFLスクール</p><!-- /.p-mv__sub-title -->
   <div class="p-mv__btn">
     <a href="<?php echo $contact ?>">資料請求</a>
   </div><!-- /.p-mv__btn -->
   <div class="p-mv__to-contact">
     <a href="<?php echo $contact ?>">お問い合わせ</a>
   </div><!-- /.p-mv__to-contact -->
 </div><!-- /.top__top --> 
</div><!-- /.top-mv -->

<section class="p-message">
  <div class="l-inner">
    <h2 class="p-message__title c-section-title">TOEFL学習でこんな悩みありませんか？</h2><!-- /.p-message__title -->
    <ul class="p-message__items">
      <li class="p-message__item">勉強の習慣が<br>身についていない</li><!-- /.p-message__item -->
      <li class="p-message__item">勉強しているはず<br>なのに点数が伸びない</li><!-- /.p-message__item -->
      <li class="p-message__item">正しい勉強方法が<br>わからない</li><!-- /.p-message__item -->
    </ul><!-- /.p-message__items -->
    <div class="p-massage__main">
      <p class="p-message__main-title">Engressは<br><span>TOEFLに特化したスクール</span>です</p><!-- /.p-message__main-title -->
       <p class="p-message__main-text">完全オーダーメイドで、１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。</p><!-- /.p-message__main-text -->
    </div><!-- /.p-massage__main -->
  </div><!-- /.l-inner -->
</section><!-- /.p-message -->

<section class="p-strong">
  <div class="l-inner">
    <h2 class="p-strong__title c-section-title">TOEFL対策に特化したEngress3つの強み</h2><!-- /.p-strong__title -->
   <div class="p-strong__items">
     <div class="p-strong__item">
       <div class="p-strong__text-box">
         <div class="p-strong__category">特長 １</div><!-- /.p-strong__category -->
         <h3 class="p-strong__item-title">TOEFLに最適化された<br>無駄のないカリキュラム</h3><!-- /.p-strong__item-title -->
         <p class="p-strong__text">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p><!-- /.p-strong__text -->
       </div><!-- /.p-strong__text-box -->
       <div class="p-strong__img">
         <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/feature01.jpg" alt="特徴1">
       </div><!-- /.p-strong__img -->
     </div><!-- /.p-strong__item -->
     <div class="p-strong__item">
       <div class="p-strong__text-box">
         <div class="p-strong__category">特長 2</div><!-- /.p-strong__category -->
         <h3 class="p-strong__item-title">日本人指導歴10年以上の<br>経験豊富な講師陣</h3><!-- /.p-strong__item-title -->
         <p class="p-strong__text">TEngressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p><!-- /.p-strong__text -->
       </div><!-- /.p-strong__text-box -->
       <div class="p-strong__img">
         <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/feature02.jpg" alt="特徴2">
       </div><!-- /.p-strong__img -->
     </div><!-- /.p-strong__item -->
     <div class="p-strong__item">
       <div class="p-strong__text-box">
         <div class="p-strong__category">特長 3</div><!-- /.p-strong__category -->
         <h3 class="p-strong__item-title">平均3ヶ月でTOEFL iBT20点アップ</h3><!-- /.p-strong__item-title -->
         <p class="p-strong__text">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p><!-- /.p-strong__text -->
       </div><!-- /.p-strong__text-box -->
       <div class="p-strong__img">
         <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/feature03.jpg" alt="特徴3">
       </div><!-- /.p-strong__img -->
     </div><!-- /.p-strong__item -->
   </div><!-- /.p-strong__items -->

   <div class="p-strong__content">
     <p class="p-strong__content-text">Engressの料金プランはこちら</p><!-- /.p-strong__content-text -->
     <div class="p-strong__btn">
       <a href="<?php echo $price ?>">料金を見てみる</a>
     </div><!-- /.p-strong__btn -->
   </div><!-- /.p-strong__content -->


  </div><!-- /.l-inner -->
</section><!-- /.p-strong -->



<?php get_footer(); ?>