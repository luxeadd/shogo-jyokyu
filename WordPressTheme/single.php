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
    <h2 class="p-single-news__sub-title">見出し1</h2><!-- /.p-single-news__sub-title -->
    <p class="p-single-news__text">本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p><!-- /.p-single-news__text -->
    <h3 class="p-single-news__sub-title">見出し2</h3><!-- /.p-single-news__sub-title -->
    <p class="p-single-news__text">本文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p><!-- /.p-single-news__text -->
    <div class="p-single-news__quote">引用文テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</div><!-- /.p-single-news__quote -->
    <div class="p-single-news__img">
      <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/sample4.jpg" alt="お知らせ画像">
    </div><!-- /.p-single-news__img -->
    <ul class="p-single-news__lists">
      <li class="p-single-news__list">リストリストリストリストリスト</li><!-- /.p-single-news__list -->
      <li class="p-single-news__list">リストリストリストリストリストリストリストリストリスト</li><!-- /.p-single-news__list -->
      <li class="p-single-news__list">リストリストリストリストリストリストリストリストリストリストリストリストリストリスト</li><!-- /.p-single-news__list -->
    </ul><!-- /.p-single-news__lists -->
    <a href="" class="p-single-news__link">テキストリンクテキストリンク</a><!-- /.p-single-news__link -->
</div><!-- /.l-inner -->
</div><!-- /.p-single-news -->


<?php
endwhile;
?>      
<?php endif; ?>


<?php get_template_part( 'template-parts/contact' ); ?>

<?php get_footer(); ?>