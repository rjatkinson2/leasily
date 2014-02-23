<div class="topSecondBar" data-thmr="thmr_454">
    <div class="row">
        <div class="row accountSettings registerForm" style="margin-top:20px; margin-bottom:20px">
            <div class="large-12 columns">
            	
            	<div class="row accountHeader" style="margin-bottom:50px">
            		<p class="statHeader">Registration</p>
            		<p class="accountBack"><?php print l(t('back to profile >'), 'profile-main/' . $user->uid); ?></p>
            	</div>
            	
            	<div class="row" style="margin-top:70px">
		            <div class="large-6 columns">
		            	<div class="row accountRowFour">
		                    <div class="large-1 small-1 columns">
		                        <p class="deckHeader accountNumber" style="font-size:35px">1</p>
		                    </div>
		
		                    <div class="large-11 small-11 columns">
		                        <p class="deckDescription" style="margin-top:12px"><span style="color:#182956">Pick a username and enter your email.  This info is required for registration.</span></p>
		                    </div>
		            	</div>
		            </div>
					<div class="large-6 columns">
						<?php print drupal_render($form['account']['name']);?>
						<?php print drupal_render($form['account']['mail']);?>
			        </div>
		        </div>

            	<div class="row" style="margin-top:70px">
		            <div class="large-6 columns">
		            	<div class="row accountRowFour">
		                    <div class="large-1 small-1 columns">
		                        <p class="deckHeader accountNumber" style="font-size:35px">2</p>
		                    </div>
		
		                    <div class="large-11 small-11 columns" style="padding-right:30px">
		                        <p class="deckDescription" style="margin-top:12px"><span style="color:#182956">Fill out your profile information.  This info is optional and will be viewable to all.</span></p>
		                    </div>
		            	</div>
		            </div>
		            <div class="large-6 columns">
		                <div class="row">
		                    <div class="large-12 columns">
		                    	<div class="row">
		                    		<div class="large-12 columns">
		                    			<label>Profile Photo</label>
		                    			<?php print drupal_render($form['profile_main']['field_user_picture']);?>
		                    		</div>
		                    	</div>
		                    	<div class="row" style="margin-top:20px">
		                    		<div class="large-6 columns">
		                    			<?php print drupal_render($form['profile_main']['field_first_name']);?>
		                    		</div>
		                    		<div class="large-6 columns">
		                    			<?php print drupal_render($form['profile_main']['field_last_name']);?>
		                    		</div>
		                    	</div>
		                    	<div class="row">
		                    		<div class="large-12 columns">
		                    			<?php print drupal_render($form['profile_main']['field_profile_type']);?>
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
		                </div>
		            </div>
		        </div>

                
            	<div class="row" style="margin-top:70px">
		            <div class="large-6 columns">
		            	<div class="row accountRowFour">
		                    <div class="large-1 small-1 columns">
		                        <p class="deckHeader accountNumber" style="font-size:35px">!</p>
		                    </div>
		
		                    <div class="large-11 small-11 columns">
		                        <p class="deckDescription" style="margin-top:12px"><span style="color:#182956">Finalize the account, and we will send an email for confirmation</span></p>
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