<div class="topSecondBar" data-thmr="thmr_454">
    <div class="row">
        <div class="row accountSettings" style="margin-top:20px; margin-bottom:20px">
            <div class="large-12 columns">
            	
            	<div class="row accountHeader" style="margin-bottom:50px">
            		<p class="statHeader">Account Settings</p>
            		<p class="accountBack"><?php print l(t('back to profile >'), 'profile-main/' . $user->uid); ?></p>
            	</div>
                
                <div class="row">
                    <div class="large-6 columns">
		            	<div class="row">
		                    <div class="large-1 small-1 columns">
		                        <p class="deckHeader accountNumber" style="font-size:35px">1</p>
		                    </div>
		
		                    <div class="large-11 small-11 columns">
		                        <p class="deckDescription" style="margin-top:12px"><span style="color:#182956">Enter current password to make account changes</span></p>
		                    </div>
		            	</div>
		            </div>
					<div class="large-6 columns">
						<?php print drupal_render($form['account']['current_pass']);?>
			        </div>
		        </div>
            	
            	<div class="row">
		            <div class="large-6 columns">
		            	<div class="row">
		                    <div class="large-1 small-1 columns">
		                        <p class="deckHeader accountNumber" style="font-size:35px">2</p>
		                    </div>
		
		                    <div class="large-11 small-11 columns">
		                        <p class="deckDescription" style="margin-top:12px"><span style="color:#182956">Make changes to any of the remaining fields</span></p>
		                    </div>
		            	</div>
		            </div>
					<div class="large-6 columns">
						<?php print drupal_render($form['account']['name']);?>
			        </div>
		        </div>
            	<div class="row">
					<div class="large-6 large-offset-6 columns">
						<?php print drupal_render($form['account']['mail']);?>
			        </div>
		        </div>
            	
            	<div class="row">
		            <div class="large-6 columns hide-for-small">
		            	<div class="row accountRowThree">
		                    <div class="large-1 small-1 columns">
		                        <p class="deckHeader accountNumber" style="font-size:35px">3</p>
		                    </div>
		
		                    <div class="large-11 small-11 columns">
		                        <p class="deckDescription" style="margin-top:12px"><span style="color:#182956">If you plan to change your password, make it strong!</span></p>
		                    </div>
		            	</div>
		            </div>
					<div class="large-6 columns">
						<?php print drupal_render($form['account']['pass']);?>
			        </div>
		        </div>
            	
            	<div class="row">
					<div class="large-6 large-offset-6 columns">
						<?php print drupal_render($form['timezone']);?>
			        </div>
		        </div>
            	
            	<div class="row" style="margin-top:20px">
		            <div class="large-6 columns">
		            	<div class="row accountRowFour">
		                    <div class="large-1 small-1 columns">
		                        <p class="deckHeader accountNumber hide-for-small" style="font-size:35px">4</p>
		                        <p class="deckHeader accountNumber show-for-small" style="font-size:35px">3</p>
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