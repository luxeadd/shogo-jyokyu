<?php get_header(); ?>

<?php get_template_part( 'template-parts/sub-mv' ); ?>

<div class="p-sub-price l-sub-price">
  <div class="l-inner">

    <h2 class="p-sub-price__title1 c-section-title--small">料金体系</h2><!-- /.p-sub-price__title -->
    <div class="p-sub-price__body">
      <div class="p-sub-price__body-contents">
      <div class="p-sub-price__body-content">入会金 39,800円</div><!-- /.p-sub-price__body-content -->
      <div class="p-sub-price__body-content">月額費用</div><!-- /.p-sub-price__body-content -->
    </div><!-- /.p-sub-price__body-main -->
    <p class="p-sub-price__body-text">
      Engressのカリキュラムは完全オーダーメイドのため、カリキュラム内のサポート内容によって料金が変動します。おすすめのスタンダードプランでは、進学先に合わせたサポートまで包括的に行います。
    </p><!-- /.p-sub-price__body-text -->
  </div><!-- /.p-sub-price__body -->
  
  <h2 class="p-sub-price__title2 c-section-title--small">料金表</h2><!-- /.p-sub-price__title2 -->
  <div class="p-sub-price__block">
    <dl class="p-sub-price__block-items js-scrollable">

      <div class="p-sub-price__block-item">
        <dt class="p-sub-price__block-item-top"> 基礎プラン</dt><!-- /.p-sub-price__block-item-top -->
        <dd class="p-sub-price__block-item-bottom">
          <div class="p-sub-price__block-price"><?php the_field('price1'); ?></div><!-- /.p-sub-price__block-price -->
          <div class="p-sub-price__block-price-sub">*月額（税抜価格）</div><!-- /.p-sub-price__block-price-sub -->
          <div class="p-sub-price__block-text-box">
            <p class="p-sub-price__block-text">カリキュラム作成</p><!-- /.p-sub-price__block-text -->
            <p class="p-sub-price__block-text">TOEFL学習サポート</p><!-- /.p-sub-price__block-text -->
            <p class="p-sub-price__block-text">週一回のビデオMTG</p><!-- /.p-sub-price__block-text -->
          
          </div><!-- /.p-sub-price__block-text-box -->
          </dd><!-- /.p-sub-price__block-item-top -->
        </div><!-- /.p-sub-price__block-item -->
      <div class="p-sub-price__block-item">
        <dt class="p-sub-price__block-item-top"> 演習プラン</dt><!-- /.p-sub-price__block-item-top -->
        <dd class="p-sub-price__block-item-bottom">
          <div class="p-sub-price__block-price"><?php the_field('price2'); ?></div><!-- /.p-sub-price__block-price -->
          <div class="p-sub-price__block-price-sub">*月額（税抜価格）</div><!-- /.p-sub-price__block-price-sub -->
          <div class="p-sub-price__block-text-box">
            <p class="p-sub-price__block-text">カリキュラム作成</p><!-- /.p-sub-price__block-text -->
            <p class="p-sub-price__block-text">TOEFL学習サポート</p><!-- /.p-sub-price__block-text -->
            <p class="p-sub-price__block-text">週一回のビデオMTG</p><!-- /.p-sub-price__block-text -->
            <p class="p-sub-price__block-text">月二回の模試（解説付き）</p><!-- /.p-sub-price__block-text -->
          </div><!-- /.p-sub-price__block-text-box -->
          </dd><!-- /.p-sub-price__block-item-top -->
        </div><!-- /.p-sub-price__block-item -->
      <div class="p-sub-price__block-item">
        <dt class="p-sub-price__block-item-top"> おすすめ<br>志望校対策プラン</dt><!-- /.p-sub-price__block-item-top -->
        <dd class="p-sub-price__block-item-bottom">
          <div class="p-sub-price__block-price"><?php the_field('price3'); ?></div><!-- /.p-sub-price__block-price -->
          <div class="p-sub-price__block-price-sub">*月額（税抜価格）</div><!-- /.p-sub-price__block-price-sub -->
          <div class="p-sub-price__block-text-box">
            <p class="p-sub-price__block-text">カリキュラム作成</p><!-- /.p-sub-price__block-text -->
            <p class="p-sub-price__block-text">TOEFL学習サポート</p><!-- /.p-sub-price__block-text -->
            <p class="p-sub-price__block-text">週一回のビデオMTG</p><!-- /.p-sub-price__block-text -->
            <p class="p-sub-price__block-text">月二回の模試（解説付き）</p><!-- /.p-sub-price__block-text -->
            <p class="p-sub-price__block-text">週一の英語面接対策</p><!-- /.p-sub-price__block-text -->
          </div><!-- /.p-sub-price__block-text-box -->
          </dd><!-- /.p-sub-price__block-item-top -->
        </div><!-- /.p-sub-price__block-item -->
      <div class="p-sub-price__block-item">
        <dt class="p-sub-price__block-item-top"> フレックスプラン</dt><!-- /.p-sub-price__block-item-top -->
        <dd class="p-sub-price__block-item-bottom">
          <div class="p-sub-price__block-price"><?php the_field('price4'); ?></div><!-- /.p-sub-price__block-price -->
          <div class="p-sub-price__block-price-sub">*月額（税抜価格）</div><!-- /.p-sub-price__block-price-sub -->
          <div class="p-sub-price__block-text-box">
            <p class="p-sub-price__block-text">別途ご相談下さい</p><!-- /.p-sub-price__block-text -->
            
          </div><!-- /.p-sub-price__block-text-box -->
          </dd><!-- /.p-sub-price__block-item-top -->
        </div><!-- /.p-sub-price__block-item -->
        
      </dl><!-- /.p-sub-price__items -->
      
    </div><!-- /.p-sub-price__block -->
</div><!-- /.l-inner -->
  
</div><!-- /.sub-price -->


    <?php get_template_part( 'template-parts/contact' ); ?>

<?php get_footer(); ?>