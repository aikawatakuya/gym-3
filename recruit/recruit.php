<?php /* Template Name: 採用情報*/ ?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <?php get_header(); ?>
  <title>採用情報 | ジムテンプレート-3</title>
</head>

<body>
  <div class="superwrapper animsition">
    <?php get_template_part('includes/c-header'); ?>
    <main id="main-contents" class="c-recruit">
      <section class="c-topview">
        <div class="c-topview__img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/home/dumbbell_1.jpg" alt="">
        </div>

      </section>
      <!-- /.c-topview -->
      <div class="contents-recruit">
        <section class="recruit-message">
          <div class="c-container">
            <h2 class="c-title">
              <span class="en">recruit</span>
              <span class="ja">採用情報</span>
            </h2>
            <h3 class="tit">
              <p class="ja">RivGymが求める人材</p>
              <p class="en">The Attraction of RivRound</p>
            </h3>
            <div class="c-recruit__points">
              <ul>
                <li>
                  <h4 class="points-title">
                    <span class="c-txt-lg">01</span>
                    <span class="c-txt-md">チャレンジ精神旺盛で、やり切る力を持った人材</span>
                  </h4>
                  <div class="points-desc">
                    <p class="c-txt-sm">
                      業界のスタンダードとなるジムを目指し、高い目標意識を持って日々研鑽しています。強い意思と行動力を持ち、「一生に一度しかない人生で、“大きな事にチャレンジ”したい」という意欲あふれる人材を求めています。
                    </p>
                  </div>
                </li>
                <li>
                  <h4 class="points-title">
                    <span class="c-txt-lg">02</span>
                    <span class="c-txt-md">真摯な姿勢で自分を高めていける人材</span>
                  </h4>
                  <div class="points-desc">
                    <p class="c-txt-sm">
                      自分でも思っていなかった弱みや強みが見つかります。その評価を受けて、強みは自覚的に高め、弱みがあれば改善していくことが、その後の成長に大きく作用することでしょう。素直かつ真摯な姿勢で自分自身をより高めていける人材を求めています。
                    </p>
                  </div>
                </li>
                <li>
                  <h4 class="points-title">
                    <span class="c-txt-lg">03</span>
                    <span class="c-txt-md">個もチームも大切に出来る人材</span>
                  </h4>
                  <div class="points-desc">
                    <p class="c-txt-sm">
                      RivRoundがセッションや食事指導といった個人プレーに留まらず、「お客様の一生をサポートするプロフェッショナル集団」という大きなmissionに向かって、共に切磋琢磨出来る仲間を求めているためです。個人力もチーム力も高め、活躍できる人材を求めています。
                    </p>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </section>
        <!-- /.recruit-message -->
        <section class="recruit-detaiil">
          <div class="c-container">
            <section class="recruit-sec">
              <h2 class="c-recruit__title">
                <p class="c-txt-lg">募集内容
                </p>
                <p class="c-txt-xs">Recruitment
                </p>
              </h2>
              <div class="c-table01 is-top">
                <table>
                  <tbody class="c-txt-sm">
                    <tr>
                      <th>雇用形態</th>
                      <td>正社員</td>
                    </tr>
                    <tr>
                      <th>勤務地</th>
                      <td>福岡県福岡市博多区博多駅前3-27-25-9F</td>
                    </tr>
                    <tr>
                      <th>通勤</th>
                      <td>マイカー通勤可能</td>
                    </tr>
                    <tr>
                      <th>勤務時間</th>
                      <td>9：30～21：00</td>
                    </tr>
                    <tr>
                      <th>給与</th>
                      <td>
                        <dl class="c-table01__salary">
                          <dt>&lt;月給20万円〜&gt;</dt>
                          <dd>※経験を考慮して決定します。</dd>
                        </dl>
                        <dl class="c-table01__salary">
                          <dt>&lt;※その他&gt;</dt>
                        </dl>
                        <span class="c-note01">年齢・経験・能力など考慮の上、優遇します</span>
                      </td>
                    </tr>
                    <tr>
                      <th>休日休暇</th>
                      <td>毎週火曜日、第２第３水曜日、有給休暇、夏季休暇、年末年始休暇、慶弔休暇<br>
                        <span class="c-note01">※その他都度相談可能</span></td>
                    </tr>
                    <tr>
                      <th>待遇・福利厚生</th>
                      <td>社会保険完備、制服支給、残業手当、有給休暇、資格取得支援</td>
                    </tr>
                    <tr>
                      <th>応募方法</th>
                      <td>
                        まずはお電話にてご応募ください。<br>追ってこちらから面接日等の詳細をお知らせします。<br>お仕事や職場のことをもっと知りたいという方は、お気軽にお問合せ下さい。<br>面接日・入社日のご相談もお気軽にどうぞ。現在お仕事中の方もぜひご検討下さい。
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
          </div>
        </section>
        <div class="more-btn item">
          <a href="<?php echo esc_url( home_url('/contact')); ?>" class="more-btn__link slide-bg animsition-link">
            <span class="c-txt-sm">お問い合わせフォーム</span>
            <span class="bg"></span></a>
        </div>
      </div>
      <!-- /.contents-recruit -->
    </main>
    <!-- /#main-contents -->
    <?php get_footer(); ?>

  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/vendor/animsition.min.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/page.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/mobile-menu.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/scripts/libs/scroll.js"></script>
</body>

</html>