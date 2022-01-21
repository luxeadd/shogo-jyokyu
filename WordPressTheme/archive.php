<?php get_header(); ?>

<?php get_template_part( 'template-parts/sub-mv' ); ?>

<div class="p-sub-blog l-sub-blog">
  <div class="l-inner">


<?php
  $category = get_the_category();
  $cat_name = $category[0]->cat_name;
?>

<h2 class="p-sub-blog__title c-section-title--small"><?php echo $cat_name; ?>一覧</h2><!-- / -->
  
    <div class="p-sub-blog__body">
      <div class="p-sub-blog__items">

<?php
//記事があれば以下を表示
if ( have_posts() ) : ?>
<?php
//記事数ぶんループ
while ( have_posts() ) :
the_post(); ?>

<article class="p-sub-blog__item p-sub-card-long">
  <a href="<?php the_permalink(); //記事のリンクを表示 ?>">
    <div class="p-sub-card-long__header">
      <figure class="p-sub-card-long__figure">
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
          echo '<div class="p-sub-card-long__category">' . $category[0]->cat_name . '</div>';
          }
          ?>
      
    </div><!-- /.p-news-sub-card__header -->
    <div class="p-sub-card-long__body">
      <time class="p-sub-card-long__time" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y-m-j'); ?></time>
      <h3 class="p-sub-card-long__title"><?php the_title(); //タイトルを表示 ?></h3>
      <h3 class="p-sub-card-long__text"><?php the_excerpt( ); ?></h3>
    </div><!-- /.p-sub-card-long__body -->
  </a>
</article>

<?php
endwhile;
?>      
<?php endif; ?>

 
  </div><!-- /.p-sub-blog__items -->
</div><!-- /.p-sub-blog__body -->
</div><!-- /.l-inner -->


<div class="p-sub-blog__pagination">
  <?php get_template_part( 'template-parts/pagination' ); ?>
</div><!-- /.p-sub-blog__pagination -->

</div><!-- /.p-sub-blog -->


<?php get_footer(); ?>