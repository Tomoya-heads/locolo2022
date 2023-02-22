<?php $secName = "top-howtofun";?>
<section class="<?php echo $secName;?>" id="howtofun">
  <div class=mod-heading><span>LOCOLOの楽しみ方<div class="mod-headingSub font-en red">HOWtoFUN</div></span>
  </div>
  <div class="<?php echo $secName;?>__inner">
    <div class="<?php echo $secName;?>__explanation">
      心地よい風とオーシャンビューのキャンプサイト。生演奏やワークショップ、カフェ＆バースペース。野菜や雑貨の販売。アーティストによるポップアップと様々な楽しみ方が。電子機器はちょっと脇に置いてあなた本来の時間をお楽しみください。もちろんペットの同伴はOKです。
    </div>
    <ul class="<?php echo $secName;?>__list">
    <?php if(have_rows('acf_top_howtofun_group','options')): while(have_rows('acf_top_howtofun_group','options')): the_row(); ?>
      <li class="<?php echo $secName;?>__item">
        <div class="<?php echo $secName;?>__left">
          <img class="object_fit"  src="<?php the_sub_field('acf_top_howtofun_img');?>">
          <div class="mod-ttl white"><?php the_sub_field('acf_top_howtofun_ttl');?></div>
          <div class="<?php echo $secName;?>__ttl font-en"><?php the_sub_field('acf_top_howtofun_ttl_en');?></div>
        </div>
        <div class="<?php echo $secName;?>__right">
          <div class="mod-ttl"><?php the_sub_field('acf_top_howtofun_ttl');?></div>
          <div class="<?php echo $secName;?>__right-txt"><?php the_sub_field('acf_top_howtofun_txt');?></div>
          <ul class="<?php echo $secName;?>__right-list">
          <!-- 料金表をみるボタン -->
          <?php if ( get_sub_field( 'acf_top_howtofun_btn_fee_switch' ) ): ?>
            <li class="<?php echo $secName;?>__right-item">
              <!-- <a class="mod-btn red" href="<?php the_sub_field('acf_top_howtofun_btn_fee_url');?>">料金表をみる</a> -->
              <a class="mod-btn red" href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#price">料金表をみる</a>
            </li>
          <?php endif; ?>
          <!-- 問い合わせるボタン -->
          <?php if ( get_sub_field( 'acf_top_howtofun_btn_contact_switch' ) ): ?>
            <li class="<?php echo $secName;?>__right-item">
              <a class="mod-btn red" href="<?php if(!is_front_page() ||  !is_home()) {echo esc_url( home_url( '/' ) ); }?>#contact">問い合わせる</a>
            </li>
          <?php endif; ?>
          <!-- 予約するボタン -->
          <?php if ( get_sub_field( 'acf_top_howtofun_btn_deserve_switch' ) ): ?>
            <li class="<?php echo $secName;?>__right-item">
              <a class="mod-btn blue" href="<?php the_sub_field('acf_top_howtofun_btn_deserve_url');?>" target="_blank">予約する</a>
            </li>
          <?php endif; ?>
          </ul>
        </div>
        <div class="<?php echo $secName;?>__seemore"><div class="<?php echo $secName;?>__seemore-txt">See More</div></div>
      </li>
      <?php endwhile; endif;?>
    </ul>
  </div>
</section>