    <header id="header" class="p-header">
      <div class="mobile-container">
        <div class=" logo__img">
          <a href="<?php echo esc_url( home_url('/')); ?>">
            <div class="logo"></div>
          </a>
        </div>
        <div class="mobile-button">
          <button class="mobile-menu__btn">
            <span></span>
            <span></span>
            <span></span>
          </button>
        </div>
      </div>
      <!-- /.mobile-container -->
      <div class="pc-container">
        <div class=" logo__img">
          <a class="animsition-link" href="<?php echo esc_url( home_url('/')); ?>">
            <div class="logo-pc logo"></div>
          </a>
        </div>
        <nav class="pc-nav">
          <ul class="pc-nav-list">
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/about')); ?>"><span>RivRoundについて</span>
                <small>ABOUT</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link"
                href="<?php echo esc_url( home_url('/method')); ?>"><span>トレーニングメソッド</span><small>METHOD</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link"
                href="<?php echo esc_url( home_url('/staff')); ?>"><span>スタッフ紹介</span><small>STAFF</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/faq')); ?>"><span>よくあるご質問</span><small>FAQ</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link" href="<?php echo esc_url( home_url('/news')); ?>"><span>お知らせ</span><small>NEWS</small></a>
            </li>
            <li class="pc-nav-item">
              <a class="pc-nav-link animsition-link"
                href="<?php echo esc_url( home_url('/recruit')); ?>"><span>採用情報</span><small>RECRUIT</small></a>
            </li>
          </ul>
          <div class="pc-contact">
            <a class="pc-tel" href="tel:092-686-7954">0120-123-456</a>
            <a class="pc-net" href="<?php echo esc_url( home_url('/contact')); ?>">お問い合わせフォーム</a>
          </div>
        </nav>
      </div>
      <!-- /.pc-container -->
      <nav class="sp-navbtn">
        <ul class="sp-navbtn__container">
          <li>
            <a class="tel" href="tel:092-686-7954"><span>電話予約</span> </a>
          </li>
          <li>
            <a class="net" target="_blank" href="https://beauty.hotpepper.jp/">
              <span>オンライン予約</span></a>
          </li>
        </ul>
      </nav>
      <!-- /.nav-btn -->
    </header>
    <!-- /.header -->