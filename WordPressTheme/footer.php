<footer class="p-footer">
  <div class="l-inner">
   <div class="p-footer__body">

     <div class="p-footer__items">
       <div class="p-footer__item"><a href="">ホーム</a></div><!-- /.p-footer__item -->
       <div class="p-footer__item"><a href="">お知らせ</a></div><!-- /.p-footer__item -->
      <div class="p-footer__item"><a href="">ブログ</a></div><!-- /.p-footer__item -->
      <div class="p-footer__item"><a href="">コース・料金</a></div><!-- /.p-footer__item -->
    </div><!-- /.p-footer__items -->
    
    <div class="p-footer__info">
      <div class="p-footer__logo">
        <a href="<?php echo $home ?>">
          <img  src="<?php echo get_template_directory_uri(  ) ?>/assets/img/logo-footer.svg" alt="Engress">
        </a>
      </div><!-- /.footer__logo -->
      
      <div class="p-footer__open">
        <div class="p-footer__time">平日08:00〜20:00</div><!-- /.p-footer__time -->
        <div class="p-footer__tel">
          <a href="tel:0123-456-7890">0123-456-7890</a>
        </div><!-- /.p-footer__tel -->
      </div><!-- /.p-footer__open -->
      
    </div><!-- /.footer__info -->
  </div><!-- /.p-footer__body -->
</div><!-- /.l-inner -->
</footer>
<?php wp_footer(); ?>
</body>
</html>