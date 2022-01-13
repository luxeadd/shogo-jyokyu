<?php if ( is_home() ) : ?>
  <div class="l-sub-mv p-sub-mv">
    <div class="p-suv-mv__img">
      <picture>
        <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/sub-news-mv.jpg" alt="お知らせ">
      </picture>
    </div><!-- /.p-suv-mv__img -->
    <h1 class="p-sub-mv__title">お知らせ</h1><!-- /.p-sub-mv__title -->
  </div><!-- /.p-sub-mv -->

  <div class="p-sub-mv__breadcrumbs">
    <div class="l-inner">
      <?php get_template_part( 'template-parts/breadcrumbs' ); ?>
    </div><!-- /.l-inner -->
</div><!-- /.p-sub-mv__breadcrumbs -->
  <?php endif; ?>


<?php if ( is_page('about') ) : ?>
    <div class="l-sub-mv p-sub-mv">
    <div class="p-suv-mv__img">
      <picture>
        <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/sub-blog-mv.jpg" alt="ブログ">
      </picture>
    </div><!-- /.p-suv-mv__img -->
    <h1 class="p-sub-mv__title">ブログ</h1><!-- /.p-sub-mv__title -->
  </div><!-- /.p-sub-mv -->

  <div class="p-sub-mv__breadcrumbs">
    <div class="l-inner">
      <?php get_template_part( 'template-parts/breadcrumbs' ); ?>
    </div><!-- /.l-inner -->
</div><!-- /.p-sub-mv__breadcrumbs -->
<?php endif; ?>


<?php if ( is_page('price') ) : ?>
    <div class="l-sub-mv p-sub-mv">
    <div class="p-suv-mv__img">
      <picture>
        <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/sub-price-mv.jpg" alt="コース・料金">
      </picture>
    </div><!-- /.p-suv-mv__img -->
    <h1 class="p-sub-mv__title">コース・料金</h1><!-- /.p-sub-mv__title -->
  </div><!-- /.p-sub-mv -->

  <div class="p-sub-mv__breadcrumbs">
    <div class="l-inner">
      <?php get_template_part( 'template-parts/breadcrumbs' ); ?>
    </div><!-- /.l-inner -->
</div><!-- /.p-sub-mv__breadcrumbs -->
<?php endif; ?>


<?php if ( is_page('contact') ) : ?>
    <div class="l-sub-mv p-sub-mv">
    <div class="p-suv-mv__img">
      <picture>
        <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/sub-contact-mv.jpg" alt="コース・料金">
      </picture>
    </div><!-- /.p-suv-mv__img -->
    <h1 class="p-sub-mv__title">お問い合わせ・資料請求</h1><!-- /.p-sub-mv__title -->
  </div><!-- /.p-sub-mv -->

  <div class="p-sub-mv__breadcrumbs">
    <div class="l-inner">
      <?php get_template_part( 'template-parts/breadcrumbs' ); ?>
    </div><!-- /.l-inner -->
</div><!-- /.p-sub-mv__breadcrumbs -->
<?php endif; ?>



<?php if ( is_archive('blog') ) : ?>
    <div class="l-sub-mv p-sub-mv">
    <div class="p-suv-mv__img">
      <picture>
        <img src="<?php echo get_template_directory_uri(  ) ?>/assets/img/sub-blog-mv.jpg" alt="ブログ">
      </picture>
    </div><!-- /.p-suv-mv__img -->
    <h1 class="p-sub-mv__title">ブログ</h1><!-- /.p-sub-mv__title -->
  </div><!-- /.p-sub-mv -->

  <div class="p-sub-mv__breadcrumbs">
    <div class="l-inner">
      <?php get_template_part( 'template-parts/breadcrumbs' ); ?>
    </div><!-- /.l-inner -->
</div><!-- /.p-sub-mv__breadcrumbs -->
<?php endif; ?>