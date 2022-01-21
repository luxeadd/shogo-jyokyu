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

<div class="p-single-news l-single-news">
  <div class="l-inner">

    <h1 class="p-single-news__title"><?php the_title(); //タイトルを表示 ?></h1><!-- /.p-single-news__title -->
    <time class="p-single-news__time" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y-m-j'); ?></time>
    <h2 class="p-single-news__sub-title"><?php the_field('news_title1'); ?></h2><!-- /.p-single-news__sub-title -->
    <p class="p-single-news__text"><?php the_field('news_text1'); ?></p><!-- /.p-single-news__text -->
    <h2 class="p-single-news__sub-title"><?php the_field('news_title2'); ?></h2><!-- /.p-single-news__sub-title -->
    <p class="p-single-news__text">
    <?php the_field('news_text2'); ?>
    </p><!-- /.p-single-news__text -->
    <div class="p-single-news__quote">
    <?php the_field('news_quote'); ?>
    </div><!-- /.p-single-news__quote -->
    <div class="p-single-news__img">
    <?php
   if (has_post_thumbnail() ) {
   // アイキャッチ画像が設定されてれば大サイズで表示
   the_post_thumbnail('large');
   } 
   ?>
    </div><!-- /.p-single-news__img -->
    <ul class="p-single-news__lists">
      <li class="p-single-news__list">
      <?php the_field('news_list1'); ?>
      </li><!-- /.p-single-news__list -->
        <li class="p-single-news__list">
        <?php the_field('news_list2'); ?>
        </li><!-- /.p-single-news__list -->
      <li class="p-single-news__list">
      <?php the_field('news_list3'); ?>
      </li><!-- /.p-single-news__list -->
    </ul><!-- /.p-single-news__lists -->
    <a href="" class="p-single-news__link">
    <?php the_field('news_link'); ?>
    </a><!-- /.p-single-news__link -->
</div><!-- /.l-inner -->
</div><!-- /.p-single-news -->


<?php
endwhile;
?>      
<?php endif; ?>


<?php get_template_part( 'template-parts/contact' ); ?>

<?php get_footer(); ?>