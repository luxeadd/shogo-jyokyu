<?php get_header(); ?>

<?php get_template_part( 'template-parts/sub-mv' ); ?>

<?php
        $home = esc_url( home_url( "/" ));
        $news = esc_url( home_url( "/news/" ));
        $blog = esc_url( home_url( "/blog/" ));
        $price = esc_url( home_url( "/price/" ));
        $contact = esc_url( home_url( "/contact/" ));
      ?>



<section class="l-sub-contact p-sub-contact">
  <div class="l-inner p-sub-contact__inner">
	 <div class="p-sub-contact__textbox">
     <div class="p-sub-contact__text">
     弊社に興味を持って頂きありがとうございます。商談やサービスのご利用、資料請求について下記のフォームよりお問い合わせください。
    </div><!-- /.p-sub-contact__text -->

<?php
if ( have_posts() ) : ?>
<?php
while ( have_posts() ) :
the_post(); ?>
<?php the_content(  ) ;?>
<?php
endwhile;
?>      
<?php endif; ?>


    </div><!-- /.l-inner -->
</section>


<?php get_footer(); ?>