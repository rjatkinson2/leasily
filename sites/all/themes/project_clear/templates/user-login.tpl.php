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
