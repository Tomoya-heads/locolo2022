<?php $secName = "top-faq";?>
<section class="<?php echo $secName;?>" id="faq">
  <div class=mod-heading><span>よくあるご質問<div class="mod-headingSub font-en blue">FAQ</div></span></div>
  <div class="<?php echo $secName;?>__inner">
    <ul class="<?php echo $secName;?>__list">
    <?php if(have_rows('acf_top_faq_group','options')): while(have_rows('acf_top_faq_group','options')): the_row(); ?>
      <li class="<?php echo $secName;?>__item">
        <div class="<?php echo $secName;?>__ttl">
          <div class="<?php echo $secName;?>__left"><?php the_sub_field('acf_top_faq_ttl');?></div>
          <div class="<?php echo $secName;?>__right">
            <img class="object_fit pctab-only" src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/icn_arrow-blue.svg">
            <img class="object_fit sp-only" src="<?php echo get_stylesheet_directory_uri(); ?>/img/common/icn_arrow-blue-sp.svg">
          </div>
        </div>
        <ul class="<?php echo $secName;?>__subList">
        <?php if(have_rows('acf_top_faq_sub_group','options')): while(have_rows('acf_top_faq_sub_group','options')): the_row(); ?>
          <li class="<?php echo $secName;?>__subItem">
            <div class="<?php echo $secName;?>__question"><span>Q.</span><?php the_sub_field('acf_top_faq_question');?></div>
            <div class="<?php echo $secName;?>__answer"><span>A.</span><?php the_sub_field('acf_top_faq_answer');?></div>
          </li>
        <?php endwhile; endif;?>
        </ul>
      </li>
    <?php endwhile; endif;?>
    </ul>
  </div>
</section>