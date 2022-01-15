<?php get_header(); ?>

<div class="p-single-breadcrumbs">
    <div class="l-inner">
      <?php get_template_part( 'template-parts/breadcrumbs' ); ?>
    </div><!-- /.l-inner -->
</div><!-- /. -->

<?php
//記事があれば以下を表示
if ( have_posts() ) : ?>
<?php
//記事数ぶんループ
while ( have_posts() ) :
the_post(); ?>

<div class="p-single-blog l-single-blog">
  <div class="l-inner">
 <div class="p-single-blog__block">
   <div class="p-single-blog__main-block">
     <div class="p-single-blog__category"><?php echo esc_html( get_the_terms( get_the_ID(), 'blog_genre' )[0]->name ); ?></div><!-- /.p-single-blog__category -->
     <h1 class="p-single-blog__title"><?php the_title(); //タイトルを表示 ?></h1><!-- /.p-single-blog__title -->
     <div class="p-single-blog__info">
       <div class="p-single-blog__sns">
         <?php if (function_exists("wp_social_bookmarking_light_output_e")) wp_social_bookmarking_light_output_e(); ?>
       </div><!-- /.p-single-blog__sns -->
       <time class="p-single-blog__time" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y-m-j'); ?></time>
    </div><!-- /.p-single-blog__info -->
    <div class="p-single-blog__img">
      <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/sample4.jpg" alt="お知らせ画像">
    </div><!-- /.p-single-blog__img -->
    <h2 class="p-single-blog__sub-title">見出し1</h2><!-- /.p-single-blog__sub-title -->
    <p class="p-single-blog__text">親譲りの無鉄砲で小供の時から損ばかりしている。小学校に居る時分学校の二階から飛び降りて一週間ほど腰を抜かした事がある。</p><!-- /.p-single-blog__text -->
    <h3 class="p-single-blog__sub-title">見出し2</h3><!-- /.p-single-blog__sub-title -->
    <p class="p-single-blog__text">本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p><!-- /.p-single-blog__text -->
    <div class="p-single-blog__quote">引用文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div><!-- /.p-single-blog__quote -->
    <div class="p-single-blog__img">
      <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/sample02.jpg" alt="お知らせ画像">
    </div><!-- /.p-single-blog__img -->
    
    <ul class="p-single-blog__lists">
      <li class="p-single-blog__list">リストリストリストリストリスト</li><!-- /.p-single-blog__list -->
      <li class="p-single-blog__list">リストリストリストリストリストリストリストリストリスト</li><!-- /.p-single-blog__list -->
      <li class="p-single-blog__list">リストリストリストリストリストリストリストリストリストリストリストリストリストリスト</li><!-- /.p-single-blog__list -->
    </ul><!-- /.p-single-blog__lists -->
    <a href="" class="p-single-blog__link">テキストリンクテキストリンク</a><!-- /.p-single-blog__link -->

     
    <!-- おすすめ記事 -->
    <div class="p-single-blog__recommend p-recommend">
      <h2 class="p-recommend__head">おすすめの記事
        </h2><!-- /.p-recommend__title -->
        <div class="p-recommend__items">
        <article class="p-recommend__item">
      <a href="<?php the_permalink(); //記事のリンクを表示 ?>">
        <div class="p-recommend__header">
          <figure class="p-recommend__figure">
            <?php
            if (has_post_thumbnail() ) {
            // アイキャッチ画像が設定されてれば大サイズで表示
            the_post_thumbnail('large');
            } 
            ?>
          </figure>
          <div class="p-recommend__category">
            <?php echo esc_html( get_the_terms( get_the_ID(), 'blog_genre' )[0]->name ); ?>
          </div>
        </div><!-- /.p-news-sub-card__header -->
        <div class="p-recommend__body">
          <time class="p-recommend__time" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y-m-j'); ?></time>
          <h3 class="p-recommend__title"><?php the_title(); //タイトルを表示 ?></h3>
        </div><!-- /.p-recommend__body -->
      </a>
    </article>
        <article class="p-recommend__item">
      <a href="<?php the_permalink(); //記事のリンクを表示 ?>">
        <div class="p-recommend__header">
          <figure class="p-recommend__figure">
            <?php
            if (has_post_thumbnail() ) {
            // アイキャッチ画像が設定されてれば大サイズで表示
            the_post_thumbnail('large');
            } 
            ?>
          </figure>
          <div class="p-recommend__category">
            <?php echo esc_html( get_the_terms( get_the_ID(), 'blog_genre' )[0]->name ); ?>
          </div>
        </div><!-- /.p-news-sub-card__header -->
        <div class="p-recommend__body">
          <time class="p-recommend__time" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y-m-j'); ?></time>
          <h3 class="p-recommend__title"><?php the_title(); //タイトルを表示 ?></h3>
        </div><!-- /.p-recommend__body -->
      </a>
    </article>
        <article class="p-recommend__item">
      <a href="<?php the_permalink(); //記事のリンクを表示 ?>">
        <div class="p-recommend__header">
          <figure class="p-recommend__figure">
            <?php
            if (has_post_thumbnail() ) {
            // アイキャッチ画像が設定されてれば大サイズで表示
            the_post_thumbnail('large');
            } 
            ?>
          </figure>
          <div class="p-recommend__category">
            <?php echo esc_html( get_the_terms( get_the_ID(), 'blog_genre' )[0]->name ); ?>
          </div>
        </div><!-- /.p-news-sub-card__header -->
        <div class="p-recommend__body">
          <time class="p-recommend__time" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y-m-j'); ?></time>
          <h3 class="p-recommend__title"><?php the_title(); //タイトルを表示 ?></h3>
        </div><!-- /.p-recommend__body -->
      </a>
    </article>
        </div><!-- /.p-recommend__items -->

    </div><!-- /.p-single-blog__recommend -->

  </div><!-- /.p-single-blog__main-block -->
  
  

  
  <!-- 関連記事・カテゴリ -->
  <aside class="p-single-blog__aside p-aside">
    <div class="p-aside__related">
      <h2 class="p-aside__aside-title">関連記事</h2><!-- /.p-aside__aside-title -->
      <div class="p-aside__related-items">
        <article class="p-aside__related-item">
          <a href="">
            <figure class="p-aside__related-img">
            <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/sample02.jpg" alt="お知らせ画像">
            </figure> 
            <div class="p-aside__related-body">
              <h3 class="p-aside__related-title">ブログタイトルテキストテキストテキストテキストテキストテキスト</h3><!-- /.p-aside__related-title0 -->
            </div><!-- /.p-aside__related-body -->
          </a>
        </article>
        <article class="p-aside__related-item">
          <a href="">
            <figure class="p-aside__related-img">
            <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/sample02.jpg" alt="お知らせ画像">
            </figure> 
            <div class="p-aside__related-body">
              <h3 class="p-aside__related-title">ブログタイトルテキストテキストテキストテキストテキストテキスト</h3><!-- /.p-aside__related-title0 -->
            </div><!-- /.p-aside__related-body -->
          </a>
        </article>
        <article class="p-aside__related-item">
          <a href="">
            <figure class="p-aside__related-img">
            <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/sample02.jpg" alt="お知らせ画像">
            </figure> 
            <div class="p-aside__related-body">
              <h3 class="p-aside__related-title">ブログタイトルテキストテキストテキストテキストテキストテキスト</h3><!-- /.p-aside__related-title0 -->
            </div><!-- /.p-aside__related-body -->
          </a>
        </article>
      </div><!-- /.p-aside__related-items -->
      </div><!-- /.p-aside__related -->
      <div class="p-aside__genre">
         <h2 class="p-aside__aside-title">カテゴリー</h2><!-- /.p-aside__genre-title -->
         <div class="p-aside__genre-body">
           <ul class="p-aside__genre-lists">
             <li class="p-aside__genre-list">
              <a href="">
              カテゴリー1
              </a>  
             </li><!-- /.p-aside__genre-list -->
             <li class="p-aside__genre-list">
              <a href="">
              カテゴリー2
              </a>  
             </li><!-- /.p-aside__genre-list -->
             <li class="p-aside__genre-list">
              <a href="">
              カテゴリー3
              </a>  
             </li><!-- /.p-aside__genre-list -->
           
           </ul><!-- /.p-aside__genre-lists -->
         </div><!-- /.p-aside__genre-body -->
      </div><!-- /.p-aside__genre -->
      </aside>
    </div><!-- /.p-single-blog-block -->
    </div><!-- /.l-inner -->
  </div><!-- /.p-single-blog -->
  
  <?php
endwhile;
?>      
<?php endif; ?>


<?php get_template_part( 'template-parts/contact' ); ?>

<?php get_footer(); ?>