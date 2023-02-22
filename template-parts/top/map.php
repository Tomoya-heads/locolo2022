<?php $secName = "top-map";?>
<section class="<?php echo $secName;?>" id="map">
  <div class="<?php echo $secName;?>__container">
    <div class=mod-heading><span>LOCOLOマップ<div class="mod-headingSub font-en blue">MAP</div></span></div>
    <div class="<?php echo $secName;?>__inner">
      <div class="<?php echo $secName;?>__explanation">
        オートキャンプが楽しめる整備されたアッパーフィールド。そのままの自然と随時開催されるイベントを楽しめるフリーガーデン。竹を眺めるバンブーロードに遊び場のアンディーズプレイス。そして少し困った時や少し誰かと話したい時はタイニーバーへ。<br>
        LOCOLO MAPを見ながらあなたの想像をたくさん膨らませてください。
      </div>
      <div class="<?php echo $secName;?>__location">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/map/img_map.jpg" class="object_fit">
        <ul class="<?php echo $secName;?>__location-list">
        <?php if(have_rows('acf_top_map_group','options')): while(have_rows('acf_top_map_group','options')): the_row(); ?>
          <!-- <li class="<?php echo $secName;?>__location-item <?php echo $secName;?>__location-item01"></li> -->
          <li class="<?php echo $secName;?>__location-item <?php echo $secName;?>__location-item02"></li>
          <li class="<?php echo $secName;?>__location-item <?php echo $secName;?>__location-item03"></li>
          <!-- <li class="<?php echo $secName;?>__location-item <?php echo $secName;?>__location-item04"></li> -->
          <li class="<?php echo $secName;?>__location-item <?php echo $secName;?>__location-item05"></li>
          <li class="<?php echo $secName;?>__location-item <?php echo $secName;?>__location-item06"></li>
          <!-- <li class="<?php echo $secName;?>__location-item <?php echo $secName;?>__location-item07"></li> -->
          <?php endwhile; endif;?>
        </ul>
        <div class="<?php echo $secName;?>__location-modal">
          <ul class="<?php echo $secName;?>__location-modal-list">
          <?php if(have_rows('acf_top_map_group','options')): while(have_rows('acf_top_map_group','options')): the_row(); ?>
            <!-- <li class="<?php echo $secName;?>__location-modal-item">
              <div class="<?php echo $secName;?>__location-modal-img"><img class="object_fit" src="<?php the_sub_field('acf_top_map_img01');?>"></div>
              <div class="<?php echo $secName;?>__location-modal-inner">
                <div class="<?php echo $secName;?>__location-modal-name"><?php the_sub_field('acf_top_map_name01');?></div>
                <div class="<?php echo $secName;?>__location-modal-txt"><?php the_sub_field('acf_top_map_txt01');?></div>
              </div>
            </li> -->
            <li class="<?php echo $secName;?>__location-modal-item">
              <div class="<?php echo $secName;?>__location-modal-img"><img class="object_fit" src="<?php the_sub_field('acf_top_map_img02');?>"></div>
              <div class="<?php echo $secName;?>__location-modal-inner">
                <div class="<?php echo $secName;?>__location-modal-name"><?php the_sub_field('acf_top_map_name02');?></div>
                <div class="<?php echo $secName;?>__location-modal-txt"><?php the_sub_field('acf_top_map_txt02');?></div>
              </div>
            </li>
            <li class="<?php echo $secName;?>__location-modal-item">
              <div class="<?php echo $secName;?>__location-modal-img"><img class="object_fit" src="<?php the_sub_field('acf_top_map_img03');?>"></div>
              <div class="<?php echo $secName;?>__location-modal-inner">
                <div class="<?php echo $secName;?>__location-modal-name"><?php the_sub_field('acf_top_map_name03');?></div>
                <div class="<?php echo $secName;?>__location-modal-txt"><?php the_sub_field('acf_top_map_txt03');?></div>
              </div>
            </li>
            <!-- <li class="<?php echo $secName;?>__location-modal-item">
              <div class="<?php echo $secName;?>__location-modal-img"><img class="object_fit" src="<?php the_sub_field('acf_top_map_img04');?>"></div>
              <div class="<?php echo $secName;?>__location-modal-inner">
                <div class="<?php echo $secName;?>__location-modal-name"><?php the_sub_field('acf_top_map_name04');?></div>
                <div class="<?php echo $secName;?>__location-modal-txt"><?php the_sub_field('acf_top_map_txt04');?></div>
              </div>
            </li> -->
            <li class="<?php echo $secName;?>__location-modal-item">
              <div class="<?php echo $secName;?>__location-modal-img"><img class="object_fit" src="<?php the_sub_field('acf_top_map_img05');?>"></div>
              <div class="<?php echo $secName;?>__location-modal-inner">
                <div class="<?php echo $secName;?>__location-modal-name"><?php the_sub_field('acf_top_map_name05');?></div>
                <div class="<?php echo $secName;?>__location-modal-txt"><?php the_sub_field('acf_top_map_txt05');?></div>
              </div>
            </li>
            <li class="<?php echo $secName;?>__location-modal-item">
              <div class="<?php echo $secName;?>__location-modal-img"><img class="object_fit" src="<?php the_sub_field('acf_top_map_img06');?>"></div>
              <div class="<?php echo $secName;?>__location-modal-inner">
                <div class="<?php echo $secName;?>__location-modal-name"><?php the_sub_field('acf_top_map_name06');?></div>
                <div class="<?php echo $secName;?>__location-modal-txt"><?php the_sub_field('acf_top_map_txt06');?></div>
              </div>
            </li>
            <!-- <li class="<?php echo $secName;?>__location-modal-item">
              <div class="<?php echo $secName;?>__location-modal-img"><img class="object_fit" src="<?php the_sub_field('acf_top_map_img07');?>"></div>
              <div class="<?php echo $secName;?>__location-modal-inner">
                <div class="<?php echo $secName;?>__location-modal-name"><?php the_sub_field('acf_top_map_name07');?></div>
                <div class="<?php echo $secName;?>__location-modal-txt"><?php the_sub_field('acf_top_map_txt07');?></div>
              </div>
            </li> -->
          <?php endwhile; endif;?>
          </ul>
          <div class="<?php echo $secName;?>__location-modal-magnifying">
            <img class="object_fit pctab-only" src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/map/icn_magnifying.svg">
            <img class="object_fit sp-only" src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/map/icn_magnifying-sp.svg">
          </div>
          <div class="<?php echo $secName;?>__location-modal-stamp">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top/icn_stamp.svg" class="object_fit">
          </div>
          <div class="<?php echo $secName;?>__location-modal-box"></div>
        </div>
      </div>
    </div>
    <div class="<?php echo $secName;?>__insta"><?php echo do_shortcode('[instagram-feed feed=2]'); ?></div>
  </div>
</section>