<div class="topSecondBar">
    <div class="row">
    <!---------------------MONEY CARD------------------------>    
        <div class="row" style="margin-top:70px; margin-bottom:20px">
			<?php print drupal_render_children($form);?>
            <?php print l(t('forgot my password!'), 'user/password', array('attributes' => array('class' => array('forgotLinks', 'another-class'))));?>
        </div>
	</div>
</div>    
<!---------------------STAT CARD------------------------>    
<div style="margin:0 auto;">
    <img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/greenCircleLogo.png'; ?>" alt="L-Logo" style="margin-top:85px" width="130px" class="centerTest"/>
</div>
<p class="loginFooterText">©2001-2013 All Rights Reserved. Leasily® is a registered<br />trademark of Leasily LLC. Privacy and Terms</p>

