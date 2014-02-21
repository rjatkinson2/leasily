<div class="topSecondBar" data-thmr="thmr_454">
    <div class="row">
        <div class="row accountSettings registerForm" style="margin-top:20px; margin-bottom:20px">
            <div class="large-12 columns">
            	
            	<div class="row accountHeader" style="margin-bottom:50px">
            		<p class="statHeader">Edit Profile</p>
            		<p class="accountBack"><?php print l(t('back to profile >'), 'profile-main/' . $user->uid); ?></p>
            	</div>

                <div class="row">
                    <div class="large-3 large-offset-1 columns">
            			<label>Profile Photo</label>
						<?php print drupal_render($form['profile_main']['field_user_picture']);?>
                    </div>
                    <div class="large-7 columns">
                    	<div class="row">
                    		<div class="large-12 columns">
                    			<?php print drupal_render($form['profile_main']['field_profile_type']);?>
                    		</div>
                    	</div>
                    	<div class="row">
                    		<div class="large-6 columns">
                    			<?php print drupal_render($form['profile_main']['field_first_name']);?>
                    		</div>
                    		<div class="large-6 columns">
                    			<?php print drupal_render($form['profile_main']['field_last_name']);?>
                    		</div>
                    	</div>
                    	<div class="row">
                    		<div class="large-6 columns">
                    			<?php print drupal_render($form['profile_main']['field_phone_number']);?>
                    		</div>
                    		<div class="large-6 columns">
                    			<?php print drupal_render($form['profile_main']['field_email']);?>
                    		</div>
                    	</div>
                    	<div class="row">
                    		<div class="large-6 columns">
                    			<?php print drupal_render($form['profile_main']['field_user_roomates']);?>
                    		</div>
                    		<div class="large-6 columns">
                    			<?php print drupal_render($form['profile_main']['field_user_city']);?>
                    		</div>
                    	</div>
                    	<div class="row">
                    		<div class="large-6 columns">
                    			<?php print drupal_render($form['profile_main']['field_user_furniture']);?>
                    		</div>
                    		<div class="large-6 columns">
                    			<?php print drupal_render($form['profile_main']['field_user_pets']);?>
                    		</div>
                    	</div>
                    </div>
                    <div class="large-1 columns">
                    </div>
                </div>
                
            	<div class="row" style="margin-top:70px">
		            <div class="large-6 columns">
		            	<div class="row accountRowFour">
		                    <div class="large-1 small-1 columns">
		                        <p class="deckHeader accountNumber" style="font-size:35px">!</p>
		                    </div>
		
		                    <div class="large-11 small-11 columns">
		                        <p class="deckDescription" style="margin-top:12px"><span style="color:#182956">Save changes, or cancel to get back to where you started!</span></p>
		                    </div>
		            	</div>
		            </div>
					<div class="large-6 columns">
						<p class="cancelButton"><?php print l(t('Cancel'), 'profile-main/' . $user->uid); ?></p>
						<?php print drupal_render_children($form);?>
			        </div>
		        </div>
		        
            </div>
        </div>
    </div>
</div>