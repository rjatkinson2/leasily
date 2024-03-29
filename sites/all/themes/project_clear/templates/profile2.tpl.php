<?php

/**
 * @file
 * Default theme implementation for profiles.
 *
 * Available variables:
 * - $content: An array of comment items. Use render($content) to print them all, or
 *   print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $title: The (sanitized) profile type label.
 * - $url: The URL to view the current profile.
 * - $page: TRUE if this is the main view page $url points too.
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. By default the following classes are available, where
 *   the parts enclosed by {} are replaced by the appropriate values:
 *   - entity-profile
 *   - profile-{TYPE}
 *
 * Other variables:
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 *
 * @see template_preprocess()
 * @see template_preprocess_entity()
 * @see template_process()
 */
?>
<?php
global $user;
global $theme_path;
global $base_path;
  
?>

<div class="topSecondBar">
    <div class="row profileSelector" style="margin-top:15px">
        <?php print render($content['field_user_picture']) ?>

<!---------------------MONEY CARD------------------------>    
        <div class="row">
            <div class="large-12 columns">
					<?php print render($content['field_profile_type']); ?>
					<?php //print render(end($user->roles)); ?>
            </div>
        </div>
        <div class="row hide-for-small">
            <div class="profileBar">
                <div class="large-12 columns">
					<?php print l(t('Account Settings'),'user/' . $user->uid . '/edit', array('attributes' => array('class' => array('anythingHere'))));?>
					<?php print l(t('Edit Profile'), 'profile-main/' . $user->uid . '/edit', array('attributes' => array('class' => array('anythingHere')))); ?>
                </div>
            </div>
        </div>
    </div>
</div>    

<!---------------------STAT CARD------------------------>    


    <div class="row">
<?php
	$views = views_embed_view('favorites_list', 'block');
	print render($views);
?>
            
        <div class="large-6 columns card" style="width:400px; margin-top:40px">
			<?php if($content['field_first_name']): ?>
	            <?php print('
                <div class="row profInfo">
                    <div class="large-4 columns">
                        <div class=button2 style="display:inline-block; margin-left:30px;"><img src="' . $base_path . 'sites/all/themes/project_clear/css/icons/name40.png' . '" alt="Ammenity1"></div>
                    </div>
                    <div class="large-8 columns">
	                        <p class="profileH2">name</p>' . strtolower(render($content['field_first_name'])) . ' ' . strtolower(render($content['field_last_name'])) . '
	                    </div>
	                </div>')
				?>
            <?php endif?>
			
			<?php $roleCheck = end($user->roles); ?>
			<?php if($roleCheck=='Early Bird' || $roleCheck=='Prime Time' || $roleCheck=='Rush Hour'): ?>
	            <?php print('
                <div class="row profInfo">
                    <div class="large-4 columns">
                        <div class=button2 style="display:inline-block; margin-left:30px;"><img src="' . $base_path . 'sites/all/themes/project_clear/css/icons/name40.png' . '" alt="Ammenity1"></div>
                    </div>
                    <div class="large-8 columns">
	                        <p class="profileH2">premium</p><div class="field">' . strtolower(render(end($user->roles))) . '
	                    </div></div>
	                </div>')
				?>
            <?php endif?>

			<?php if($content['field_email']): ?>
            <?php print('
                <div class="row profInfo">
                    <div class="large-4 columns">
                        <div class=button2 style="display:inline-block; margin-left:30px;"><img src="' . $base_path . 'sites/all/themes/project_clear/css/icons/mail40.png' . '" alt="Ammenity1"></div>
                    </div>
                    <div class="large-8 columns">
                        <p class="profileH2">e-mail</p>' . render($content['field_email']) . '
                    </div>
                </div>')
			?>
            <?php endif?>

			<?php if($content['field_user_city']): ?>
            <?php print('
                <div class="row profInfo">
                    <div class="large-4 columns">
                        <div class=button2 style="display:inline-block; margin-left:30px;"><img src="' . $base_path . 'sites/all/themes/project_clear/css/icons/location40.png' . '" alt="Ammenity1"></div>
                    </div>
                    <div class="large-8 columns">
                        <p class="profileH2">city</p>' . strtolower(render($content['field_user_city'])) . '
                    </div>
                </div>')
			?>
            <?php endif?>
            

			<?php if($content['field_user_beds']): ?>
            <?php print('
                <div class="row profInfo">
                    <div class="large-4 columns">
                        <div class=button2 style="display:inline-block; margin-left:30px;"><img src="' . $base_path . 'sites/all/themes/project_clear/css/icons/mail40.png' . '" alt="Ammenity1"></div>
                    </div>
                    <div class="large-8 columns">
                        <p class="profileH2">beds</p>
                        <p class="profileDescription">' . render($content['field_user_beds']) . '</p>
                    </div>
                </div>')
			?>
            <?php endif?>
            

			<?php if($content['field_user_furniture']): ?>
            <?php print('
                <div class="row profInfo">
                    <div class="large-4 columns">
                        <div class=button2 style="display:inline-block; margin-left:30px;"><img src="' . $base_path . 'sites/all/themes/project_clear/css/icons/furniture40.png' . '" alt="Ammenity1"></div>
                    </div>
                    <div class="large-8 columns">
                        <p class="profileH2">furniture</p>
                        <p class="profileDescription">' . render($content['field_user_furniture']) . '</p>
                    </div>
                </div>')
			?>
            <?php endif?>
            

			<?php if($content['field_user_roomates']): ?>
            <?php print('
                <div class="row profInfo">
                    <div class="large-4 columns">
                        <div class=button2 style="display:inline-block; margin-left:30px;"><img src="' . $base_path . 'sites/all/themes/project_clear/css/icons/roomates40.png' . '" alt="Ammenity1"></div>
                    </div>
                    <div class="large-8 columns">
                        <p class="profileH2">roomates</p>
                        <p class="profileDescription">' . render($content['field_user_roomates']) . '</p>
                    </div>
                </div>')
			?>
            <?php endif?>
            
            
			<?php if($content['field_user_pets']): ?>
            <?php print('
                <div class="row profInfo">
                    <div class="large-4 columns">
                        <div class=button2 style="display:inline-block; margin-left:30px;"><img src="' . $base_path . 'sites/all/themes/project_clear/css/icons/bone40.png' . '" alt="Ammenity1"></div>
                    </div>
                    <div class="large-8 columns">
                        <p class="profileH2">pets</p>
                        <p class="profileDescription">' . render($content['field_user_pets']) . '</p>
                    </div>
                </div>')
			?>
            <?php endif?>
            
            
			<?php if($content['field_phone_number']): ?>
            <?php print('
                <div class="row profInfo">
                    <div class="large-4 columns">
                        <div class=button2 style="display:inline-block; margin-left:30px;"><img src="' . $base_path . 'sites/all/themes/project_clear/css/icons/mail40.png' . '" alt="Ammenity1"></div>
                    </div>
                    <div class="large-8 columns">
                        <p class="profileH2">phone</p>
                        <p class="profileDescription">' . render($content['field_phone_number']) . '</p>
                    </div>
                </div>')
			?>
            <?php endif?>
            
        </div>
    </div>
  </div>
</div>