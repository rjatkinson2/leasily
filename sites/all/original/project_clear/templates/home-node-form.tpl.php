<div class="topSecondBar" data-thmr="thmr_454">
    <div class="row">
        <div class="row addProperty" style="margin-top:20px; margin-bottom:20px">
            <div class="large-12 columns">
            	
            	<div class="row accountHeader" style="margin-bottom:50px">
            		<p class="statHeader">Property Editor</p>
            		<p class="accountBack"><?php print l(t('Cancel'), 'profile-main/' . $user->uid); ?></p>
            	</div>

                <div class="row">
                    <div class="large-6 columns">
		            	<div class="row">
		                    <div class="large-1 columns">
		                        <p class="deckHeader accountNumber" style="font-size:35px">1</p>
		                    </div>
		
		                    <div class="large-11 columns">
		                        <p class="deckDescription" style="margin-top:12px; padding-right:30px;"><span style="color:#182956">Enter a name for your property.  Names are fun, help users find and remember properties, and are a great way to build positive reputation.</span></p>
		                    </div>
		            	</div>
		            </div>
					<div class="large-6 columns">
						<?php print drupal_render($form['title']);?>
			        </div>
		        </div>

                <div class="row">
                    <div class="large-4 columns">
		            	<div class="row">
		                    <div class="large-1 columns">
		                        <p class="deckHeader accountNumber" style="font-size:35px">2</p>
		                    </div>
		
		                    <div class="large-11 columns">
		                        <p class="deckDescription" style="margin-top:12px"><span style="color:#182956">Input your property's location</span></p>
		                    </div>
		            	</div>
		            </div>
					<div class="large-8 columns">
						<?php print drupal_render($form['locations']);?>
			        </div>
		        </div>
		        
                <div class="row">
                    <div class="large-4 columns">
		            	<div class="row">
		                    <div class="large-1 columns">
		                        <p class="deckHeader accountNumber" style="font-size:35px">3</p>
		                    </div>
		
		                    <div class="large-11 columns">
		                        <p class="deckDescription" style="margin-top:12px"><span style="color:#182956">Click submit and you've got yourself a new home!</span></p>
		                    </div>
		            	</div>
		            </div>
					<div class="large-8 columns">
						<?php print drupal_render_children($form);?>
			        </div>
		        </div>

			</div>
        </div>
    </div>
</div>



<!---------------------STAT CARD------------------------>    
<div style="margin:0 auto;">
    <img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/greenCircleLogo.png'; ?>" alt="L-Logo" style="margin-top:85px" width="130px" class="centerTest"/>
</div>
<p class="loginFooterText">©2001-2013 All Rights Reserved. Leasily® is a registered<br />trademark of Leasily LLC. Privacy and Terms</p>