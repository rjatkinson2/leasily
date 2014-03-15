<div class="topSecondBar" data-thmr="thmr_454">
    <div class="row">
        <div class="row addProperty" style="margin-top:20px; margin-bottom:20px">
            <div class="large-12 columns">
            	
            	<div class="row accountHeader" style="margin-bottom:50px">
            		<p class="statHeader">Property Editor</p>
            		<p class="accountBack"><?php print l(t('Cancel'), 'profile-main/' . $user->uid); ?></p>
            	</div>
            	
				<div class="section-container auto" data-section>
				  <section id="hometab1"  class="topLevel active">
				    <p class="title"><a href="#section1">Main Info</a></p>
				    <div class="content" data-slug="section1">
		                <div class="row stepsRow">
		                    <div class="large-6 columns">
				            	<div class="row">
				                    <div class="large-1 small-1 columns">
				                        <p class="deckHeader accountNumber" style="font-size:35px">1</p>
				                    </div>
				
				                    <div class="large-11 small-11 columns">
				                        <p class="formStepH1">Create a name for your property</span></p>
				                        <p class="formStep">Names are fun, help users find and remember properties, and are a great way to build positive reputation.</p>
				                    </div>
				            	</div>
				            </div>
							<div class="large-6 columns">
								<?php print drupal_render($form['title']);?>
					        </div>
				        </div>
		                <div class="row stepsRow">
		                    <div class="large-6 columns">
				            	<div class="row">
				                    <div class="large-1 small-1 columns">
				                        <p class="deckHeader accountNumber" style="font-size:35px">2</p>
				                    </div>
				
				                    <div class="large-11 small-11 columns">
				                        <p class="formStepH1">Upload your best shot!</span></p>
				                        <p class="formStep">The <span style="font-style: italic">Money Shot</span> will be the cover photo on your listing and the photo representing your lease throughout the site, so make it a good one!  We recommend a good shot of the front or a nice look at the interior.</p>
				                    </div>
				            	</div>
				            </div>
							<div class="large-6 columns">
								<?php print drupal_render($form['group_main_info']['field_money_shot']);?>
					        </div>
				        </div>
		                <div class="row stepsRow">
		                    <div class="large-6 columns">
				            	<div class="row">
				                    <div class="large-1 small-1 columns">
				                        <p class="deckHeader accountNumber" style="font-size:35px">3</p>
				                    </div>
				
				                    <div class="large-11 small-11 columns">
				                        <p class="formStepH1">Set a few important dates</span></p>
				                        <p class="formStep">Let visitors know when the lease is available, the exciting <span style="font-style: italic">Move-in Day</span>.</p>
				                        <p class="formStep" style="padding-top:30px">Those interested may want to see the place in person, so you have the option to specify a date here.  The more groups you can show at once, the more time you save!</p>
				                    </div>
				            	</div>
				            </div>
							<div class="large-6 columns">
								<?php print drupal_render($form['group_main_info']['field_move_in_day']);?>
								<?php print drupal_render($form['group_main_info']['field_open_house_date']);?>
					        </div>
				        </div>
		                <div class="row stepsRow">
		                    <div class="large-6 columns">
				            	<div class="row">
				                    <div class="large-1 small-1 columns">
				                        <p class="deckHeader accountNumber" style="font-size:35px">4</p>
				                    </div>
				
				                    <div class="large-11 small-11 columns">
				                        <p class="formStepH1">List your beds, baths, and amenities</span></p>
				                    </div>
				            	</div>
				            </div>
							<div class="large-6 columns">
								<?php print drupal_render($form['group_main_info']['field_bed_number']);?>
								<?php print drupal_render($form['group_main_info']['field_full_baths']);?>
								<?php print drupal_render($form['group_main_info']['field_amenity']);?>
					        </div>
				        </div>
				    </div>
				  </section>
				  <section id="hometab2" class="topLevel">
				    <p class="title"><a href="#section2">Location</a></p>
				    <div class="content" data-slug="section2">
		                <div class="row stepsRow">
		                    <div class="large-6 columns">
				            	<div class="row">
				                    <div class="large-1 small-1 columns">
				                        <p class="deckHeader accountNumber" style="font-size:35px">5</p>
				                    </div>
				
				                    <div class="large-11 small-11 columns">
				                        <p class="formStepH1">Location, location, location</span></p>
				                        <p class="formStep">Fill out the location of your home.  The location will help users find your lease on our front map.</p>
				                    </div>
				            	</div>
				            </div>
							<div class="large-6 columns">
								<?php print drupal_render($form['locations']);?>
								<?php print drupal_render($form['field_subcity']);?>
					        </div>
				        </div>
				    </div>
				  </section>
				  <section id="hometab3" class="topLevel">
				    <p class="title"><a href="#section3">Pricing</a></p>
				    <div class="content" data-slug="section3">
		                <div class="row stepsRow">
		                    <div class="large-6 columns">
				            	<div class="row">
				                    <div class="large-1 small-1 columns">
				                        <p class="deckHeader accountNumber" style="font-size:35px">6</p>
				                    </div>
				
				                    <div class="large-11 small-11 columns">
				                        <p class="formStepH1">Show me the money!</span></p>
				                        <p class="formStep">Fill out the location of your home.  The location will help users find your lease on our front map.</p>
				                    </div>
				            	</div>
				            </div>
							<div class="large-6 columns">
								<?php print drupal_render($form['group_main_info']['field_base_price']);?>
								<?php print drupal_render($form['group_main_info']['field_price_history']);?>
					        </div>
				        </div>
				    </div>
				  </section>
				  <section id="hometab4" class="topLevel">
				    <p class="title"><a href="#section4">Cards</a></p>
				    <div class="content" data-slug="section4">
		                <div class="row stepsRow">
		                    <div class="large-12 columns">
				            	<div class="row">
				                    <div class="large-1 small-1 columns">
				                        <p class="deckHeader accountNumber" style="font-size:35px">7</p>
				                    </div>
				
				                    <div class="large-11 small-11 columns">
				                        <p class="formStepH1">Welcome to cards!</span></p>
				                        <p class="formStep">Cards are a great way to share your home with the world!</p>
				                        <p class="formStep">Each card should detail one aspect of your home through the card's title, description, and of course, gorgeous photography.  Up to ten photos may be uploaded per card, and will be shown as a slideshow in your listing.</p>
				                    </div>
				            	</div>
				            </div>
				            <div class="large-12 columns cardDemo">
				            	<div class="large-2 columns">
				            		<p style="margin-top:60px; color:#4D997C">Slideshow</p>
				            		<p>Add up to ten photos illustrating the card’s theme</p>
				            	</div>
					            <div class="large-8 columns" style="padding:0 20px">
					                <img src="<?php print render($form['#markup'][0]);?>" alt="Card Demo" style="position:relative">
					                <img src="<?php print render($form['#markup'][1]);?>" alt="Card Demo" width="90px" style="position:absolute; left:-45px; top:130px" class="show-for-medium-up">
					                <img src="<?php print render($form['#markup'][3]);?>" alt="Card Demo" width="130px" style="position:absolute; right:-70px; top:75px" class="show-for-medium-up">
					                <img src="<?php print render($form['#markup'][2]);?>" alt="Card Demo" width="130px" style="position:absolute; right: -30px; top:230px" class="show-for-medium-up">
						        </div>
						        <div class="large-2 columns">
				            		<p style="color:#CD3528">Card Title</p>
				            		<p>Set the stage for your card with a great title</p>
				            		<p style="margin-top:165px; color:#0082A6">Card Description</p>
				            		<p>Deliver the important info related to your photos</p>
						        </div>
				            </div>
				        </div>
				      <div class="section-container vertical-tabs" data-section="vertical-tabs" style="margin-top:80px">
				        <?php for ($x=1; $x<=10; $x++):?>
				        <section>
				          <p class="title"><a href="#section4-<?php print $x?>">Card # <?php print $x?></a></p>
				          <div class="content">
			                <div class="row">
								<div class="large-12 columns">
									<div class="large-7 columns top">
										<?php print drupal_render($form['group_card' . $x]['field_card_title' . $x]);?>
										<?php print drupal_render($form['group_card' . $x]['field_card_description' . $x]);?>
									</div>
									<div class="large-5 columns bottom">
										<label>Slideshow Photos</label>
										<?php print drupal_render($form['group_card' . $x]['field_card_photo' . $x]);?>
									</div>
						        </div>
					        </div>
				          </div>
				        </section>
				        <?php endfor;?>				        
				      </div>
				    </div>
				  </section>
  				  <section id="hometab5" class="topLevel">
				    <p class="title"><a href="#section3">Occupancy</a></p>
				    <div class="content" data-slug="section3">
		                <div class="row stepsRow">
		                    <div class="large-6 columns">
				            	<div class="row">
				                    <div class="large-1 small-1 columns">
				                        <p class="deckHeader accountNumber" style="font-size:35px">8</p>
				                    </div>
				
				                    <div class="large-11 small-11 columns">
				                        <p class="formStepH1">Status of Occupancy</span></p>
				                        <p class="formStep">Once you've filled your house with tenants, make sure to turn your listing into occupied mode.  Preserve your beautiful listing for the next time you need to list.</p>
				                    </div>
				            	</div>
				            </div>
							<div class="large-6 columns">
									<?php print drupal_render($form['field_occupancy']);?>
					        </div>
				        </div>
		                <div class="row stepsRow">
		                    <div class="large-6 columns">
				            	<div class="row">
				                    <div class="large-1 small-1 columns">
				                        <p class="deckHeader accountNumber" style="font-size:35px">9</p>
				                    </div>
				
				                    <div class="large-11 small-11 columns">
				                        <p class="formStepH1">Looking for Privacy?</span></p>
				                        <p class="formStep">If you'd like to hide your house details while it's occupied, use this setting for privacy.</p>
				                    </div>
				            	</div>
				            </div>
							<div class="large-6 columns">
									<?php print drupal_render($form['field_privacy']);?>
					        </div>
				        </div>

				        
				    </div>
				  </section>
				  
				<div class="row" style="padding-top:70px">
					<div class="large-2 columns">
						<button class="deckHeader btn" id="prevtab" type="button" style="font-size:37px">Back</button>
					</div>
					<div class="large-8 columns">
						<div class="progress round" style="margin-top:27px"><span class="meter" style="width: 20%"></span></div>
					</div>
					<div class="large-2 columns">
						<button class="deckHeader btn" id="nexttab" type="button" style="font-size:37px">Next</button>
					</div>
				</div>
				  
				<div class="row" style="margin-top:70px">
				    <div class="large-6 columns">
				    	<div class="row accountRowFour">
				            <div class="large-1 columns">
				                <p class="deckHeader accountNumber" style="font-size:35px">!</p>
				            </div>
				
				            <div class="large-11 columns">
				                <p class="deckDescription" style="margin-top:12px"><span style="color:#182956">All done?  Be sure to submit your changes to complete the process.</span></p>
				            </div>
				    	</div>
				    </div>
					<div class="large-6 columns">
						<?php print drupal_render($form['actions']['cancel']);?>
						<?php print drupal_render($form['actions']['submit']);?>
						<?php print drupal_render($form['actions']['save_and_edit']);?>
						<?php print drupal_render_children($form);?>
				    </div>
				</div>
				
				
				</div>
			</div>
        </div>
    </div>
</div>