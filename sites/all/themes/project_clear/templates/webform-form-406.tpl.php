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

        <div class="row makeOffer">
        
        	<div class="row">
	        	<div class="large-12 columns">
		            <div class="large-4 columns" style="padding-top:60px;">
	                    <p>Build your offer</p>
						<?php print drupal_render($form['submitted']['rate']);?>
						<?php print drupal_render($form['submitted']['number_of_tenants']);?>
		            </div>
		            <div class="large-4 columns">
	                    <p>Send offer</p>
	                    <p>Check in to see if you’ve scored a new place to live.</p>
						<?php print drupal_render($form['submitted']['email']);?>
						<?php print drupal_render($form['submitted']['phone']);?>
		            </div>
		            <div class="large-4 columns">
	                    <p>Offer Status</p>
	                    <p>Check in to see if you’ve scored<br /> a new place to live oh yea.</p>
						<?php print drupal_render($form['submitted']['preferred_move_in']);?>
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
