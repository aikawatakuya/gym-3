<?php /* Template Name: よくあるご質問*/ ?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
  <title>よくあるご質問 | ジム-3</title>
</head>

<body>
  <div class="faq-wrapper animsition">
    <?php get_template_part('includes/c-header'); ?>
    <section class="c-topview">
      <div class="c-topview__img">
        <img class="view-sp" src="<?php echo get_template_directory_uri(); ?>/images/home/run_1.jpg" alt="">
        <img class="view-pc" src="<?php echo get_template_directory_uri(); ?>/images/home/run_1.jpg" alt="">
      </div>
    </section>
    <!-- /.c-topview -->
    <div class="faq-contents">
      <div class="c-container">
        <div class="faq">
          <div class="faq__inner">
            <h2 class="c-title">
              <span class="en">faq</span>
              <span class="ja">よくあるご質問</span>
            </h2>
            <div class="c-txtarea01">
              <p class="c-txt-sm">RivRundに今までにお寄せいただきましたご質問を掲載いたします。もしお求めのご質問が見当たらないようでしたら、お気軽にお問い合わせください。</p>
            </div>
            <dl class="faq__block">
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-sm">トレーニングの予約はどのようにすれば良いですか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-sm">
                      基本的にはトレーニングしていただいた帰りに予約をしていただいておりますが、お電話・ホームページの予約フォームでも受け付けております。当日でも空いていれば予約できます。
                    </p>
                  </div>
                </dd>
              </div>
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-sm">予約制ですが、キャンセル料はかかりますか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-sm">キャンセル料はかかりません。その際は出来るだけ早めにご連絡ください。</p>
                  </div>
                </dd>
              </div>
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-sm">見学・体験をしたいのですが、どのようにすれば良いですか
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-sm">
                      見学体験は常時無料で行っております。お申込みはお問合せフォーム・お電話・ご来店にて受け付けております。
                    </p>
                  </div>
                </dd>
              </div>
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-sm">
                    どんな服装で行けば良いですか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-sm">身体が動きやすい運動着などが最適ですが、特に決まりはありません。室内シューズもご持参ください。
                    </p>
                  </div>
                </dd>
              </div>
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-sm">
                    料金の支払い方法は？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-sm">
                      基本的に月々の口座引き落としになっております。
                    </p>
                  </div>
                </dd>
              </div>
              <div class="faq__item">
                <dt class="js-accordion-title ac-title">
                  <span class="c-txt-sm">
                    退会したい時はどうすれば良いですか？
                  </span>
                </dt>
                <dd class="ac-content">
                  <div class="m-description-article">
                    <p class="c-txt-sm">
                      退会予定月の10日までに申告し、お手続きください
                    </p>
                  </div>
                </dd>
              </div>
            </dl>
          </div>
          <div class="more-btn">
            <a href="<?php echo esc_url( home_url('/contact')); ?>" class="more-btn__link slide-bg animsition-link">
              <span class="c-txt-sm">お問い合わせフォーム</span>
              <span class="bg"></span></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.fq-contents -->
    <?php get_footer(); ?>
  </div>
  <!-- /.main-wrapper -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/accordion.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll-btn.js"></script>
</body>

</html>