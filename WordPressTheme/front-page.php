<?php get_header(); ?>

<?php
        $home = esc_url( home_url( "/" ));
        $news = esc_url( home_url( "/news/" ));
        $blog = esc_url( home_url( "/blog/" ));
        $price = esc_url( home_url( "/price/" ));
        $contact = esc_url( home_url( "/contact/" ));
      ?>

<div class="p-mv l-mv ">
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
    <h2 class="p-message__title c-section-title">TOEFL学習で<br class="sp-only">こんな悩みありませんか？</h2><!-- /.p-message__title -->
    <ul class="p-message__items">
      <li class="p-message__item js-scrollAnimation">勉強の習慣が<br class="pc-only">身についていない</li><!-- /.p-message__item -->
      <li class="p-message__item js-scrollAnimation">勉強しているはず<br class="pc-only" >なのに点数が伸びない</li><!-- /.p-message__item -->
      <li class="p-message__item js-scrollAnimation">正しい勉強方法が<br class="pc-only">わからない</li><!-- /.p-message__item -->
    </ul><!-- /.p-message__items -->
    <div class="p-massage__main">
      <p class="p-message__main-title js-scrollAnimation">Engressは<br><span>TOEFLに特化したスクール</span>です</p><!-- /.p-message__main-title -->
       <p class="p-message__main-text">完全オーダーメイドで、<br class="sp-only">１人１人の悩みに合わせた最適な指導で<br>TOEFLの苦手分野を克服します。</p><!-- /.p-message__main-text -->
    </div><!-- /.p-massage__main -->
  </div><!-- /.l-inner -->
</section><!-- /.p-message -->



<section class="p-strong">
  <div class="l-inner">
    <h2 class="p-strong__title c-section-title">TOEFL対策に特化した<br class="sp-only">Engress3つの強み</h2><!-- /.p-strong__title -->
   <div class="p-strong__items">
     <div class="p-strong__item">
       <div class="p-strong__text-box">
         <div class="p-strong__category">特長 １</div><!-- /.p-strong__category -->
         <h3 class="p-strong__item-title">TOEFLに最適化された<br>無駄のないカリキュラム</h3><!-- /.p-strong__item-title -->
         <p class="p-strong__text">TOEFLではビジネス英語には登場しない数多くの学術的内容が出題されます。そのため、ベースとなる知識も必要になります。Engressでは過去1000題を分析し、最適なカリキュラムを組んでいます。</p><!-- /.p-strong__text -->
       </div><!-- /.p-strong__text-box -->
       <div class="p-strong__img js-scrollAnimation">
         <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/feature01.jpg" alt="特徴1">
       </div><!-- /.p-strong__img -->
     </div><!-- /.p-strong__item -->
     <div class="p-strong__item">
       <div class="p-strong__text-box">
         <div class="p-strong__category">特長 2</div><!-- /.p-strong__category -->
         <h3 class="p-strong__item-title">日本人指導歴10年以上の<br>経験豊富な講師陣</h3><!-- /.p-strong__item-title -->
         <p class="p-strong__text">Engressの講師陣は、もともと日本人向けにTOEFLを教えていた人が大多数です。また全メンバーがTESOL(英語教授法)を取得しており、知識と経験を兼ね備えている教育のプロフェッショナルです。</p><!-- /.p-strong__text -->
       </div><!-- /.p-strong__text-box -->
       <div class="p-strong__img js-scrollAnimation">
         <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/feature02.jpg" alt="特徴2">
       </div><!-- /.p-strong__img -->
     </div><!-- /.p-strong__item -->
     <div class="p-strong__item">
       <div class="p-strong__text-box">
         <div class="p-strong__category">特長 3</div><!-- /.p-strong__category -->
         <h3 class="p-strong__item-title">平均3ヶ月でTOEFL iBT20点アップ</h3><!-- /.p-strong__item-title -->
         <p class="p-strong__text">Engressは高校生からサラリーマンまで様々な年齢層の方々が通われていますが、完全オーダーメイドのカリキュラムで柔軟に対応しているため、平均3ヶ月でTOEFLスコアを20点アップさせています。</p><!-- /.p-strong__text -->
       </div><!-- /.p-strong__text-box -->
       <div class="p-strong__img js-scrollAnimation">
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



<section class="p-success">
  <div class="l-inner">
    <h2 class="p-success__title c-section-title">TOEFL成功事例</h2><!-- /.p-success__title c-section-title -->
    <div class="p-success__body">
      <ul class="p-success__items">

        <li class="p-success__item js-scrollAnimation">
          <p class="p-success__text">
          <?php the_field('success_text1'); ?>
          </p><!-- /.p-success__text -->
           <div class="p-success__img">
             <img src="<?php the_field('success_image1'); ?>" alt="成功事例1">
           </div><!-- /.p-success__img -->

           <div class="p-success__block">
             <div class="p-success__profile">   <?php the_field('success_worker1'); ?></div><!-- /.p-success__profile -->
             <div class="p-success__profile"><?php the_field('success_name1'); ?></div><!-- /.p-success__profile -->
             <div class="p-success__profile">   <?php the_field('success_commit1'); ?></div><!-- /.p-success__profile -->
           </div><!-- /.p-success__block -->
        </li><!-- /.success__item -->

        <li class="p-success__item js-scrollAnimation">
          <p class="p-success__text">
          <?php the_field('success_text2'); ?>
          </p><!-- /.p-success__text -->
           <div class="p-success__img">
             <img src="<?php the_field('success_image2'); ?>" alt="成功事例2">
           </div><!-- /.p-success__img -->

           <div class="p-success__block">
             <div class="p-success__profile"><?php the_field('success_worker2'); ?></div><!-- /.p-success__profile -->
             <div class="p-success__profile"><?php the_field('success_name2'); ?></div><!-- /.p-success__profile -->
             <div class="p-success__profile">6<?php the_field('success_commit2'); ?></div><!-- /.p-success__profile -->
           </div><!-- /.p-success__block -->
        </li><!-- /.success__item -->

        <li class="p-success__item js-scrollAnimation">
          <p class="p-success__text">
          <?php the_field('success_text3'); ?>
          </p><!-- /.p-success__text -->
           <div class="p-success__img">
             <img src="<?php the_field('success_image3'); ?>" alt="成功事例3">
           </div><!-- /.p-success__img -->
           <div class="p-success__block">
             <div class="p-success__profile"><?php the_field('success_worker3'); ?></div><!-- /.p-success__profile -->
             <div class="p-success__profile"><?php the_field('success_name3'); ?></div><!-- /.p-success__profile -->
             <div class="p-success__profile"><?php the_field('success_commit3'); ?></div><!-- /.p-success__profile -->
           </div><!-- /.p-success__block -->
        </li><!-- /.success__item -->

      </ul><!-- /.p-success__items -->
    </div><!-- /.p-success__body -->
  </div><!-- /.l-inner -->
</section><!-- /.p-success -->


<section class="p-use">
  <div class="l-inner">
    <h2 class="p-use__title c-section-title">ご利用の流れ</h2><!-- /.p-use__title c-section-title -->
    <div class="p-use__body">
      <dl class="p-use__items">
        <div class="p-use__item js-scrollAnimation">
          <div class="p-use__number">01</div><!-- /.p-use__number -->
          <dt class="p-use__flow">お問い合わせ</dt><!-- /.p-use__flow -->
          <dd class="p-use__description">まずはフォームまたはお電話からお申し込みください。</dd><!-- /.p-use__description -->
        </div><!-- /.p-use___item -->
        <div class="p-use__item js-scrollAnimation">
          <div class="p-use__number">02</div><!-- /.p-use__number -->
          <dt class="p-use__flow">ヒアリング</dt><!-- /.p-use__flow -->
          <dd class="p-use__description">現在の学習状況やTOEFLスコア、目標のスコアをお聞きします。</dd><!-- /.p-use__description -->
        </div><!-- /.p-use___item -->
        <div class="p-use__item js-scrollAnimation">
          <div class="p-use__number">03</div><!-- /.p-use__number -->
          <dt class="p-use__flow">学習プランのご提供</dt><!-- /.p-use__flow -->
          <dd class="p-use__description">目標達成のために最適な学習プランをご提案致します。</dd><!-- /.p-use__description -->
        </div><!-- /.p-use___item -->
        <div class="p-use__item js-scrollAnimation">
          <div class="p-use__number">04</div><!-- /.p-use__number -->
          <dt class="p-use__flow">ご入会</dt><!-- /.p-use__flow -->
          <dd class="p-use__description">お申込み完了後、レッスンがスタートします。</dd><!-- /.p-use__description -->
        </div><!-- /.p-use___item -->
      </dl><!-- /.p-use__items -->
    </div><!-- /.p-use__body -->
  </div><!-- /.l-inner -->
</section><!-- /.p-use -->



<section class="p-question">
  <div class="l-inner">
  <h2 class="p-question__title c-section-title">よくある質問</h2><!-- /.p-question -->
    <div class="p-question__body p-toggle">
      <div class="p-toggle__item js-scrollAnimation">
        <input id="toggle1" type="checkbox" name="tabs">
        <label class="p-toggle__label" for="toggle1">
          <?php
          //グループのデータを取得
          $group = get_field('question1');
          if($group){
          //グループ内のフィールドを出力
          echo $group['question1_title'];
          }
          ?>
        </label>
        <div class="p-toggle__item-content">
        <?php
          //グループのデータを取得
          $group = get_field('question1');
          if($group){
          //グループ内のフィールドを出力
          echo $group['question1_anser'];
          }
          ?>
        </div>
      </div>
      <div class="p-toggle__item js-scrollAnimation">
        <input id="toggle2" type="checkbox" name="tabs">
        <label class="p-toggle__label" for="toggle2">  <?php
          //グループのデータを取得
          $group = get_field('question2');
          if($group){
          //グループ内のフィールドを出力
          echo $group['question2_title'];
          }
          ?>
          </label>
        <div class="p-toggle__item-content">
        <?php
          //グループのデータを取得
          $group = get_field('question2');
          if($group){
          //グループ内のフィールドを出力
          echo $group['question2_anser'];
          }
          ?>
        </div>
      </div>
      <div class="p-toggle__item js-scrollAnimation">
        <input id="toggle3" type="checkbox" name="tabs">
        <label class="p-toggle__label" for="toggle3"> 
          <?php
          //グループのデータを取得
          $group = get_field('question3');
          if($group){
          //グループ内のフィールドを出力
          echo $group['question3_title'];
          }
          ?>

        </label>
        <div class="p-toggle__item-content">
        <?php
          //グループのデータを取得
          $group = get_field('question3');
          if($group){
          //グループ内のフィールドを出力
          echo $group['question3_anser'];
          }
          ?>
        </div>
      </div>
      <div class="p-toggle__item js-scrollAnimation">
        <input id="toggle4" type="checkbox" name="tabs">
        <label class="p-toggle__label" for="toggle4">
        <?php
          //グループのデータを取得
          $group = get_field('question4');
          if($group){
          //グループ内のフィールドを出力
          echo $group['question4_title'];
          }
          ?>
        </label>
        <div class="p-toggle__item-content">
        <?php
          //グループのデータを取得
          $group = get_field('question4');
          if($group){
          //グループ内のフィールドを出力
          echo $group['question4_anser'];
          }
          ?>
        </div>
      </div>
  </div>
  </div><!-- /.l-inner -->
</section><!-- /.p-question -->


<section class="p-post">
  <div class="l-inner">
    <div class="p-post__body">

      <div class="p-post__blog">
        <h2 class="p-post__blog-title c-section-title--small">ブログ</h2><!-- /.p-post__blog-title -->
        <div class="p-post__blog-body">
          <div class="p-post__blog-items">

<?php
$top_blog_query = new WP_Query(
array(
'post_type'      => 'post', 
'posts_per_page' => 3, 
)
);
?>
<?php if ( $top_blog_query->have_posts() ) : ?>
<?php while ( $top_blog_query->have_posts() ) : ?>
<?php $top_blog_query->the_post(); ?>

<!-- コンテンツ -->
          <article class="p-post__blog-item p-card-long">
              <a href="<?php the_permalink(); //記事のリンクを表示 ?>">
                <div class="p-card-long__header">
                  <figure class="p-card-long__figure">
                  <?php
                      if (has_post_thumbnail() ) {
                      // アイキャッチ画像が設定されてれば大サイズで表示
                      the_post_thumbnail('large');
                      } 
                      ?>
                  </figure>
                  <?php
                    // カテゴリー１つ目の名前を表示
                    $category = get_the_category();
                    if ($category[0] ) {
                    echo '<div class="p-card-long__category">' . $category[0]->cat_name . '</div>';
                    }
                    ?>
                </div><!-- /.p-news-card__header -->
                <div class="p-card-long__body">
                  <h3 class="p-card-long__title"><?php the_title(); //タイトルを表示 ?></h3>
                  <time class="p-card-long__time" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y-m-j'); ?></time>
                </div><!-- /.p-card-long__body -->
              </a>
            </article>

<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?> <!-- post_typeなどを強制的に上書きしているため初期化 -->

       

           
          </div><!-- /.p-post__blog-items -->
        </div><!-- /.p-post__blog-body -->
      </div><!-- /.p-post__blog -->
      
      <div class="p-post__news">
        <h2 class="p-post__news-title c-section-title--small">お知らせ</h2><!-- /.p-post__news-title -->
        <div class="p-post__news-body">
          <div class="p-post__news-items">

<?php
$news_query = new WP_Query(
array(
'post_type'      => 'news',
'posts_per_page' => 3, 
)
);
?>
<?php if ( $news_query->have_posts() ) : ?>
<?php while ( $news_query->have_posts() ) : ?>
<?php $news_query->the_post(); ?>

<!-- コンテンツ -->
            <article class="p-post__news-item">
              <time class="p-post__news-time" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y-m-j'); ?></time>
              <a class="p-post__news-text" href="<?php the_permalink(); //記事のリンクを表示 ?>"><?php the_title(); //タイトルを表示 ?></a>
            </article>
            

<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?> <!-- post_typeなどを強制的に上書きしているため初期化 -->

            

          </div><!-- /.p-post__news-items -->
        </div><!-- /.p-post__news-body -->
      </div><!-- /.p-post__news -->

    </div><!-- /.p-post__body -->
    </div><!-- /.l-inner -->
  </section><!-- /.p-post -->


  <?php get_template_part( 'template-parts/contact' ); ?>
  
  <?php get_footer(); ?>