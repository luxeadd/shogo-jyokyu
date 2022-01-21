<?php get_header(); ?>

<?php get_template_part( 'template-parts/sub-mv' ); ?>


<div class="p-sub-news l-sub-news">
  <div class="l-inner">
    <h2 class="p-sub-news__title c-section-title--small">お知らせ一覧</h2><!-- /.p-sub-news__title c-section-title--small -->

    <div class="p-sub-news__body">
    <div class="p-news-items">


<?php
//記事があれば以下を表示
if ( have_posts() ) : ?>
<?php
//記事数ぶんループ
while ( have_posts() ) :
the_post(); ?>


<article class="p-news-items_item p-news-item">
  <div class="p-news-item__meta">
    <time class="p-news-item__date" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y-m-j'); ?></time>
  </div><!-- /.p-news-item__nav -->
  <div class="p-news-item__body">
    <a href="<?php the_permalink(); //記事のリンクを表示 ?>" class="p-news-item__title"> 
    <?php the_title(); //タイトルを表示 ?>
    </a><!-- /.p-news-item__title -->
  </div><!-- /.p-news-item__body -->
</article><!-- /.p-news-item -->
     
<?php
  endwhile;
  ?>      
<?php endif; ?>

      
    </div><!-- /.p-news-items -->
        </div><!-- /.p-sub-news__body -->
        
        <div class="p-sub-news__pagination">
        <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
        </div><!-- /.p-sub-news__pagination -->

      </div><!-- /.l-inner -->
    </div><!-- /.p-sub-news -->

    <?php get_template_part( 'template-parts/contact' ); ?>

<?php get_footer(); ?>