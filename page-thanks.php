<?php /* Template Name: サンクスページ*/ ?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <title>お問い合わせありがとうございます。 | 株式会社リバーストーン</title>
  <?php get_header(); ?>
</head>

<body>
  <div class="contents-wrapper c-thanks">
  <?php get_template_part('includes/c-header'); ?> 
    <section id="thanks" class="container py-5 small">
    <h1 class="text-center pt-4 fs-4">お問い合わせありがとうございます。</h1>
    <div class="p-md-4 p-2">
      <p>ご入力いただいた情報は無事に送信されました。</p>
      <p>お客様に受付完了メールを1通送信しましたのでご確認下さい。</p>
      <p class="fw-bold fs-5 mt-5 mb-3">受付完了メールが届かない場合</p>
      <p>ご利用のメールサービスの設定によっては迷惑フォルダへ送られている場合もございますので、迷惑メールフォルダも合わせてご確認下さい。</p>
      <p>もし、24時間経っても受付完了メールが届かない場合は、お手数ですが再度お問い合わせフォームかお電話にてお問い合わせ下さい</p>
    </div>
    <div class="my-5 text-center">
      <a href=" <?php echo esc_url( home_url('/')); ?>" class="stretchbtn black"><span>TOPに戻る</span></a>
    </div>
  </section>
    <?php get_footer(); ?>
    <!-- /.footer -->
  </div>
</body>

</html>