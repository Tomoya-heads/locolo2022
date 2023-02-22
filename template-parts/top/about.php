<?php $secName = "top-about";?>
<section class="<?php echo $secName;?>" id="about">
  <div class=mod-heading><span>LOCOLOとは<div class="mod-headingSub font-en blue">ABOUT</div></span></div>
  <div class="<?php echo $secName;?>__inner">
    <div class="<?php echo $secName;?>__high">
      LOCAL COCOLO = LOCOLO/ロコロ<br>
      淡路島の東浦地域に密着したコミュニティスペースであり“地元と都市のつながり”を大切に アーティスト夫婦が手がける人生の遊び場プロジェクト。デジタル社会にこそ大切なアナログ精神を大切に地球と呼吸する場所。常に進行形で本当の完成はまだまだ先になりそう…
      <div class="<?php echo $secName;?>__stamp"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/icn_stamp.svg" class="object_fit"></div>
    </div>
    <div class="<?php echo $secName;?>__low">
      <div class="<?php echo $secName;?>__left">
        <div class="<?php echo $secName;?>__left-inner"><img class="object_fit" src="<?php the_field('acf_top_about_img_left','options');?>"></div>
      </div>
      <div class="<?php echo $secName;?>__right"><img class="object_fit" src="<?php the_field('acf_top_about_img_right','options');?>"></div>
    </div>
    <div class="<?php echo $secName;?>__wave">
      <div class="<?php echo $secName;?>__wave-inner"></div>
    </div>
  </div>
</section>