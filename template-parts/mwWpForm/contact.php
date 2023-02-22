<div class="form__row kinds">
  <div class="form__col">お問い合わせ種類*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_radio name="your_kinds" id="your_kinds" class="your_kinds" value="質　問" children="質　問,プライベートパーティーについて,撮影利用について,その他"]'); ?></div>
</div>

<div class="form__row name">
  <div class="form__col">氏　名*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_text name="your_name" id="your_name" class="your_name" size="60"]'); ?>
  </div>
</div>

<div class="form__row mail">
  <div class="form__col">メールアドレス*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_email name="your_mail" id="your_mail" class="your_mail" size="60"]'); ?></div>
</div>

<div class="form__row mail_confirm">
  <div class="form__col">確認用メールアドレス*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_email name="your_mail-confirm" id="your_mail-confirm" class="your_mail-confirm" size="60"]'); ?></div>
</div>

<div class="form__row tel">
  <div class="form__col">電話番号</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_text name="your_tel" id="your_tel" class="your_tel" size="60"]'); ?></div>
</div>

<div class="form__row gender">
  <div class="form__col">性　別</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_radio name="your_gender" id="your_gender" class="your_gender" value="女　性" children="女　性,男　性"]'); ?></div>
</div>

<div class="form__row age">
  <div class="form__col">年　代</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_select name="your_age" id="your_age" class="your_age" children=":選択してください,20代未満,20代〜30代,40代〜50代,60代〜70代,80代以上"]'); ?></div>
</div>

<div class="form__row content">
  <div class="form__col">記入欄*</div>
  <div class="form__col"><?php echo do_shortcode('[mwform_textarea name="your_content" id="your_content" class="your_content" cols="50" rows="8"]'); ?></div>
</div>

<div class="form__btn">
  <label class="form__btn-col back btn__more mod-btn blue"><span class="txt"><?php echo do_shortcode('[mwform_backButton class="btn__back" value="戻　る"]'); ?></label>
  <label class="form__btn-col submit btn__more mod-btn red"><span class="txt"><?php echo do_shortcode('[mwform_submitButton name="btn_submit" class="btn__submit" confirm_value="内容を確認する" submit_value="送信する"]'); ?></span></label>
</div>