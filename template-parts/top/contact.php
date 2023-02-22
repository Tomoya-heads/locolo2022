<?php $secName = "top-contact";?>
<section class="<?php echo $secName;?>" id="contact">
  <div class=mod-heading><span>お問い合わせ<div class="mod-headingSub font-en red">CONTACT</div></span></div>
  <div class="<?php echo $secName;?>__inner">
  <div class="<?php echo $secName;?>__explanation">キャンプサイトのことはもちろん、プライベートパーティーの貸し切りやイベントについて、お気軽にお問合せください。</div>
  <small class="<?php echo $secName;?>__note">*は必須項目です。</small>
  <?php echo do_shortcode('[mwform_formkey key="'.heads_get_mwwpform_id('contact').'"]');?>
  </div>
</section>