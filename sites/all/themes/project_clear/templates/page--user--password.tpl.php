<!---------------------TOP BAR------------------------>    

<?php //$messages; ?>
<div class="topBar" style="margin-bottom:0px">
	<div class="row">
		<div class="large-12 columns">
        	<div class="large-2 columns">
            	<a href="/d7-demo/"><img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/logo.png';?>" alt="logo" height="40px" width="105px" style="padding-top:2px"/></a>
			</div>
            
            <div class="large-5 large-offset-2 columns">
				<?php print render($page['help']); ?>
            </div>
            
      <?php	global $user; ?>
      <?php if ($logged_in): ?>
                        
            <div class="large-2 columns">
            	<div style="padding-top:15px; text-align:right"><?php print l($user->name, 'profile-main/' . $user->uid, array('attributes' => array('class' => array('topBarText'), 'data-dropdown' => array('drop1')))); ?></div>

                <ul id="drop1" class="f-dropdown">
                  <li><?php print l(t('View Profile'), 'profile-main/' . $user->uid, array('attributes' => array('class' => array('topBarTextDropdown')))); ?></li>
                  <li><?php print l(t('Edit Profile'),'profile-main/' . $user->uid . '/edit', array('attributes' => array('class' => array('topBarTextDropdown'))));?></li>
                  <li><?php print l(t('Account Settings'),'user/' . $user->uid, array('attributes' => array('class' => array('topBarTextDropdown'))));?></li>
                  <li><?php print l(t('Edit Account Settings'),'user/' . $user->uid . '/edit', array('attributes' => array('class' => array('topBarTextDropdown'))));?></li>
                </ul>                
            </div>
            
            <div class="large-1 columns" style="border-left: 1px solid #fff; height:30px; margin-top:10px;">
            	<div style="padding-top:5px;"><?php print l(t('logout'), 'user/logout', array('attributes' => array('class' => array('topBarText')))); ?></div>
            </div>
            
      <?php else: ?>
            
            <div class="large-2 columns">
            	<div style="padding-top:15px; text-align:right"><?php print l(t('register'), 'user/register', array('attributes' => array('class' => array('topBarText')))); ?></div><br>               
            </div>
            
            <div class="large-1 columns" style="border-left: 1px solid #fff; height:30px; margin-top:10px;">
            	<div style="padding-top:5px"><?php print l(t('login'), 'user/login', array('attributes' => array('class' => array('topBarText')))); ?></div>
            </div>

      <?php endif;  ?>       
            
		</div>
	</div>
</div>

<div class="topSecondBar">
    <div class="row">
    <!---------------------MONEY CARD------------------------>    
        <div class="row" style="margin-top:70px; margin-bottom:20px">
			<?php print render($page['content']); ?>
		</div>
	</div>
</div>
<!---------------------STAT CARD------------------------>