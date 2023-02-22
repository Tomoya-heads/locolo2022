<?php $secName = "top-fee";?>
<section class="<?php echo $secName;?>" id="price">
  <div class="<?php echo $secName;?>__container">
    <div class=mod-heading><span>料金一覧<div class="mod-headingSub font-en red">PRICE</div></span></div>
    <div class="<?php echo $secName;?>__inner">
      <div class="<?php echo $secName;?>__explanation">あなたのお好みに合わせたキャンプ宿泊プランをご用意。詳しくは予約番にアクセスください。手ぶらでも楽しめるレンタル品もご用意しております。</div>
      <!-- 公開時はComing Soon -->
      <ul class="<?php echo $secName;?>__list">
      <?php if(have_rows('acf_top_fee_group','options')): while(have_rows('acf_top_fee_group','options')): the_row(); ?>
        <li class="<?php echo $secName;?>__item">
          <div class="mod-ttl"><?php the_sub_field('acf_top_fee_ttl');?></div>
          <ul class="<?php echo $secName;?>__subList">
          <?php if(have_rows('acf_top_fee_sub_group','options')): while(have_rows('acf_top_fee_sub_group','options')): the_row(); ?>
            <li class="<?php echo $secName;?>__subItem">
              <div class="<?php echo $secName;?>__left"><?php the_sub_field('acf_top_fee_sub_ttl');?></div>
              <div class="<?php echo $secName;?>__right">
                <?php $fee_sub_num = get_sub_field('acf_top_fee_sub_num');if($fee_sub_num){ ?>
                ¥<?php echo number_format($fee_sub_num); ?>
                <?php } ?>
              </div>
            </li>
            <?php endwhile; else:?>
            <div class="<?php echo $secName;?>__comingsoon">Coming Soon</div>
            <?php endif;?>
          </ul>
          <div class="<?php echo $secName;?>__txt"><?php the_sub_field('acf_top_fee_explanation');?></div>
        </li>
      <?php endwhile; endif;?>
      </ul>
    </div>
  </div>
</section>