<?php /* Template Name: お問い合わせフォーム*/ ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <title>お問い合わせ | 株式会社リバーストーンのお問い合わせページ</title>
  <?php get_header(); ?>

</head>

<body>
  <div class="contents-wrapper c-contact">
  <?php get_template_part('includes/c-header'); ?>      
    <section id="thumbnail" class="position-relative bg">
      <img class="thumbnail-img" src="<?php echo get_template_directory_uri(); ?>/images/home/reserve.jpg" alt="">
      <div class="position-absolute text-center">
        <p>CONTACT</p>
        <h2 class="Typing">お問い合わせ</h2>
      </div>
    </section>
    <div class="contact-form">
      <div class="c-container">
        <p class="c-contact-text">以下必要事項をご記入の上、「送信する」ボタンを押して下さい。</p>
        <?php echo apply_filters('the_content', '[contact-form-7 id="6" title="コンタクトフォーム 1"]'); ?>
      </div>
    </div>
    <?php get_footer(); ?>
    <!-- /.footer -->
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/typing.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>
</body>

</html>