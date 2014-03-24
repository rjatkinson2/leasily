<?php

/**
 * @file
 * Customize the display of a complete webform.
 *
 * This file may be renamed "webform-form-[nid].tpl.php" to target a specific
 * webform on your site. Or you can leave it "webform-form.tpl.php" to affect
 * all webforms on your site.
 *
 * Available variables:
 * - $form: The complete form array.
 * - $nid: The node ID of the Webform.
 *
 * The $form array contains two main pieces:
 * - $form['submitted']: The main content of the user-created form.
 * - $form['details']: Internal information stored by Webform.
 */
?>

        <div class="row makeOffer" style="margin-top:70px">
        
        	<div class="row">
	        	<div class="large-12 columns">
		            <div class="large-6 columns">
	                    <p>Compose your message</p>
	                    <p class="statDescription">Your note will be delivered to the landlord.</p>
						<?php print drupal_render($form['submitted']['email']);?>
						<?php print drupal_render($form['submitted']['number_of_tenants']);?>
						<?php print drupal_render($form['submitted']['message']);?>
		            </div>
		            <div class="large-6 columns">
	                    <p>Include some details</p>
	                    <p class="statDescription">The information below is optional.</p>
						<?php print drupal_render($form['submitted']['name']);?>
						<?php print drupal_render($form['submitted']['phone']);?>
						<?php print drupal_render($form['submitted']['preferred_move_in']);?>
		            </div>
	        	</div>
	        	<div class="large-12 columns" style="margin-top:3.0em">
                    <p>Build your offer (optional)</p>
                    <p class="statDescription">Your offer is non-binding information for the landlord.</p>
	                <div class="large-8 large-centered columns">
		                <div class="large-8 columns" style="padding:0 2.0em">
							<?php print drupal_render($form['submitted']['rate']);?>
		                </div>
		                <div class="large-4 columns">
		                	<p id="priceCalc">$ --</p>
		                	<p class="priceSub">per person, per month</p>
		                </div>
	                </div>    
	        	</div>
        	</div>
        	
        	<div class="row" style="margin-top:50px">
				<?php print drupal_render_children($form);?>
        	</div>
        	
        </div>


<?php
  // Print out the main part of the form.
  // Feel free to break this up and move the pieces within the array.
  // print drupal_render($form['submitted']);

  // Always print out the entire $form. This renders the remaining pieces of the
  // form that haven't yet been rendered above.
  // print drupal_render_children($form);
