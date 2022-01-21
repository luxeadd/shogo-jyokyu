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
   
<?php
// カテゴリー１つ目の名前を表示
$category = get_the_category();
if ($category[0] ) {
echo '<div class="p-single-blog__category">' . $category[0]->cat_name . '</div>';
}
?>

     <h1 class="p-single-blog__title"><?php the_title(); //タイトルを表示 ?></h1><!-- /.p-single-blog__title -->
     <div class="p-single-blog__info">
       <div class="p-single-blog__sns">
         <?php if (function_exists("wp_social_bookmarking_light_output_e")) wp_social_bookmarking_light_output_e(); ?>
       </div><!-- /.p-single-blog__sns -->
       <time class="p-single-blog__time" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y-m-j'); ?></time>
    </div><!-- /.p-single-blog__info -->
    <div class="p-single-blog__img">
    <?php
   if (has_post_thumbnail() ) {
   // アイキャッチ画像が設定されてれば大サイズで表示
   the_post_thumbnail('large');
   } 
   ?>
    </div><!-- /.p-single-blog__img -->
    <h2 class="p-single-blog__sub-title">
    <?php the_field('blog_title1'); ?>
    </h2><!-- /.p-single-blog__sub-title -->
    <p class="p-single-blog__text">
    <?php the_field('blog_text1'); ?>
    </p><!-- /.p-single-blog__text -->
    <h2 class="p-single-blog__sub-title">
    <?php the_field('blog_title2'); ?>
    </h2><!-- /.p-single-blog__sub-title -->
    <p class="p-single-blog__text">
    <?php the_field('blog_text2'); ?>
    </p><!-- /.p-single-blog__text -->
    <div class="p-single-blog__quote">
    <?php the_field('blog_quote'); ?>
    </div><!-- /.p-single-blog__quote -->
    <div class="p-single-blog__sub-img">
      <img src="<?php the_field('blog_image'); ?>" alt="ブログ画像2">
    </div><!-- /.p-single-blog__img -->
    
    <ul class="p-single-blog__lists">
      <li class="p-single-blog__list">
      <?php the_field('blog_list1'); ?>
      </li><!-- /.p-single-blog__list -->
      <li class="p-single-blog__list">
      <?php the_field('blog_list2'); ?>
      </li><!-- /.p-single-blog__list -->
      <li class="p-single-blog__list">
      <?php the_field('blog_list3'); ?>
      </li><!-- /.p-single-blog__list -->
    </ul><!-- /.p-single-blog__lists -->
    <a href="<?php the_field('blog_link_url'); ?>" class="p-single-blog__link">
    <?php the_field('blog_link'); ?>
    </a><!-- /.p-single-blog__link -->

    <?php
endwhile;
?>      
<?php endif; ?>

     
    <!-- おすすめ記事 -->
    <div class="p-single-blog__recommend p-recommend">
      <h2 class="p-recommend__head">おすすめの記事
        </h2><!-- /.p-recommend__title -->
        <div class="p-recommend__items">

<?php
$pick_query = new WP_Query(
array(
  'tag' => 'pickup',
  'posts_per_page' => 3, 
)
);
?>

<?php if ( $pick_query->have_posts() ) : ?>
<?php while ( $pick_query->have_posts() ) : ?>
<?php $pick_query->the_post(); ?>

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
              <?php
              // カテゴリー１つ目の名前を表示
              $category = get_the_category();
              if ($category[0] ) {
              echo '<div class="p-recommend__category">' . $category[0]->cat_name . '</div>';
              }
              ?>
        </div><!-- /.p-news-sub-card__header -->
        <div class="p-recommend__body">
          <time class="p-recommend__time" datetime="<?php the_time( 'c' ) ; ?>"><?php the_time('Y-m-j'); ?></time>
          <h3 class="p-recommend__title"><?php the_title(); //タイトルを表示 ?></h3>
        </div><!-- /.p-recommend__body -->
      </a>
    </article>


<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?> <!-- post_typeなどを強制的に上書きしているため初期化 -->

        </div><!-- /.p-recommend__items -->

    </div><!-- /.p-single-blog__recommend -->

  </div><!-- /.p-single-blog__main-block -->
  
  

  
  <!-- 関連記事・カテゴリ -->
  <aside class="p-single-blog__aside p-aside">
    <div class="p-aside__related">
      <h2 class="p-aside__aside-title">関連記事</h2><!-- /.p-aside__aside-title -->
      <div class="p-aside__related-items">

<?php
// 同じカテゴリから記事を10件呼び出す
$categories = get_the_category($post->ID);

$category_ID = array();

foreach($categories as $category):
array_push( $category_ID, $category -> cat_ID);
endforeach ;

$args = array(
// 今読んでいる記事を除く
'post__not_in' => array($post -> ID),
'posts_per_page'=> 4,
'category__in' => $category_ID,
// ランダムに記事を選ぶ
'orderby' => 'rand',
);
$query = new WP_Query($args);
if( $query -> have_posts() ):
while ($query -> have_posts()) :
$query -> the_post();
?>

      
        <article class="p-aside__related-item">
          <a href="<?php the_permalink(); //記事のリンクを表示 ?>">
            <figure class="p-aside__related-img">
              <?php
              if (has_post_thumbnail() ) {
              // アイキャッチ画像が設定されてれば大サイズで表示
              the_post_thumbnail('large');
              } 
              ?>
            </figure> 
            <div class="p-aside__related-body">
              <h3 class="p-aside__related-title">ブログタイトルテキストテキストテキストテキストテキストテキスト</h3><!-- /.p-aside__related-title0 -->
            </div><!-- /.p-aside__related-body -->
          </a>
        </article>

<?php endwhile; endif; ?>
<?php wp_reset_postdata(); ?>

      </div><!-- /.p-aside__related-items -->
      </div><!-- /.p-aside__related -->



      <div class="p-aside__genre">
         <h2 class="p-aside__aside-title">カテゴリー</h2><!-- /.p-aside__genre-title -->
         <div class="p-aside__genre-body">
           <ul class="p-aside__genre-lists">

<?php
// 親カテゴリーのものだけを一覧で取得
$args = array(
'parent' => 0,
'orderby' => 'term_order',
'order' => 'ASC'
);
$categories = get_categories( $args );
?>

<?php foreach( $categories as $category ) : ?>

        <li class="p-aside__genre-list">
           <a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->name; ?></a>
      </li>

<?php endforeach; ?>
           

  
           </ul><!-- /.p-aside__genre-lists -->
         </div><!-- /.p-aside__genre-body -->
      </div><!-- /.p-aside__genre -->
      </aside>
    </div><!-- /.p-single-blog-block -->
    </div><!-- /.l-inner -->
  </div><!-- /.p-single-blog -->
  
 


<?php get_template_part( 'template-parts/contact' ); ?>

<?php get_footer(); ?>


