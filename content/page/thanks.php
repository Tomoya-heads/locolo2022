<div class="page-contact">
  <div class="page-contact__inner">
    <figure class="page-contact__thanksLogo"><img class="object_fit" src="<?php echo get_stylesheet_directory_uri();?>/img/common/logo_locolo.svg" alt=""></figure>
    <p class="page-contact__intro">お問い合わせ、ありがとうございました。<br>返信にはお時間を<br class="sp-only">いただくことがございますので、<br>あらかじめ、ご了承ください。</p>
    <a href="<?php echo home_url(""); ?>" class="form__btn-col back btn__more mod-btn blue"><span class="txt">TOPへ戻る</span></a>
    <?php echo do_shortcode('[mwform_formkey key="'.heads_get_mwwpform_id('contact').'"]');?>
  </div>
</div>