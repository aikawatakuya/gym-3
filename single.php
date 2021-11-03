<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
  <title>お知らせ詳細 | ジムテンプレート3</title>
</head>

<body>
  <div id="main-wrapper" class="news-wrapper animsition">
    <?php get_template_part('includes/c-header'); ?>
    <section class="c-topview">
      <div class="c-topview__img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/home/shoose_1.jpg" alt="">
      </div>
    </section>
    <!-- /.c-topview -->
    <section class="c-news-sl">
      <div class="c-container">
        <ul class="c-news-sl__list">
          <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <li class="c-news-sl__block">
              <div class="c-news-sl__tit">
                <span class="thumbnail"><?php the_post_thumbnail(); ?></span>
                <p class="c-txt-md"><?php the_title(); ?></p>
                <span class="c-news-sl__date c-txt-sm"><?php the_date(); ?></span>
              </div>
              <div class="c-news-sl__contents">
                <p class="c-txt-sm"><?php the_content(); ?></p>
              </div>
            </li>
          <?php endwhile; ?>
          <?php endif; ?>
        </ul>
        <div class="c-news-sl__link">
          <a class="more-link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>"><span class="readmore c-txt-sm">一覧へ戻る</span></a>
        </div>
      </div>
    </section>
    <!-- /.news-top -->
    <?php get_footer(); ?>
  </div>
  <!-- .superwrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
</body>

</html>