
</main>
<!-- ////コンテンツ -->
<!-- ローディング画面 -->
<?php if(is_front_page() || is_home()):?>
<div class="common-loading">
  <div class="common-loading__inner">
    <div class="common-loading__logo"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/logo_locolo.svg" alt="ロゴ"></div>
    <div class="common-loading__concept">1日10組限定の<br class="sp-only">秘密の遊び場、ロコロ</div>
    <div class="common-loading__txt">
      淡路島から眺める大阪湾の夜景とサンライズ<br>
      風の香り・せせらぎの音・<br class="sp-only">秘密のアジトに癒やしの空間<br>
      地球のあそび場で街の常識を忘れ、<br class="sp-only">自分だけの自由な旅へ
    </div>
  </div>
</div>
<?php endif;?>
<!-- オーバーレイ -->
<div class="common-overlay"></div>
<!-- フッター -->
<footer class="common-footer" id="Footer">
  <!-- 追従ボタン -->
<div class="fixed-btn">
  <ul class="fixed-btn__list">
    <?php if(have_rows('acf_top_deserve_btn_group','options')): while(have_rows('acf_top_deserve_btn_group','options')): the_row(); ?>
    <li class="fixed-btn__item"><a href="<?php the_sub_field('acf_top_deserve_btn_url');?>"><span><?php the_sub_field('acf_top_deserve_btn_ttl');?>の<br>予約はこちら</span></a></li>
    <?php endwhile; endif;?>
  </ul>
</div>
  <div class="common-footer__pageTop font-en" style="display:none">
    <div class="common-footer__pageTop-txt"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/txt_top.svg"></div>
    <div class="common-footer__pageTop-img">
      <img class="object_fit" src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/icn_bonfire.gif">
      <!-- <img class="object_fit" src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/icn_bonfire.svg"> -->
    </div>
  </div>
  <div class="common-footer__wave"></div>
  <div class="common-footer__inner">
    <div class="common-footer__logo">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/logo_locolo-white.svg" alt="ロゴ">
      </a>
    </div>
    <nav class="common-footer__nav">
      <ul class="common-footer__list">
        <li class="common-footer__item"><a href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#about">ABOUT</a></li>
        <li class="common-footer__item"><a href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#howtofun">HOW TO FUN</a></li>
        <li class="common-footer__item"><a href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#map">MAP</a></li>
        <li class="common-footer__item"><a href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#price">PRICE</a></li>
        <li class="common-footer__item"><a href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#location">LOCATION</a></li>
        <!-- <li class="common-footer__item"><a href="https://locolo2334.stores.jp/" target="_blank">GOODS</a></li> -->
        <li class="common-footer__item"><a href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#faq">FAQ</a></li>
      </ul>
    </nav>
    <a class="mod-btn white" href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#contact">予約する</a>
    <ul class="common-footer__sns">
      <!-- Twitter -->
      <li class="common-footer__sns-item">
        <a href="//twitter.com/locolo2334" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/icn_twitter-white.svg"></a>
      </li>
      <!-- LINE -->
      <!-- <li class="common-footer__sns-item">
        <a href="#" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/icn_line-white.svg"></a>
      </li> -->
      <!-- instagram -->
      <li class="common-footer__sns-item">
        <a href="//www.instagram.com/locolo2334" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/icn_instagram-white.svg"></a>
      </li>
      <!-- YouTube -->
      <li class="common-footer__sns-item">
        <a href="//www.youtube.com/channel/UCTOp6AMiEcsWlXDrbxabK1w" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/icn_youtube-white.svg"></a>
      </li>
    </ul>
    <ul class="common-footer__subList">
      <li class="common-footer__subItem"><a href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#contact">お問い合わせ</a></li>
      <li class="common-footer__subItem"><a href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy">プライバシーポリシー</a></li>
    </ul>
    <small class="common-footer__copyright">&copy; LOCOLO</small>
  </div>
</footer>
<!-- ////フッター -->

</div><!-- / #Wrapper-->
<?php wp_footer(); ?>

</body>
</html>