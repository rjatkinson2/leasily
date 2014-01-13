<div class="row card" style="margin-top:30px; margin-bottom:400px">
	<div class="row">
        <div class="large-6 columns">
            <?php print render($form['account']['name']);?>
            <?php print render($form['account']['mail']);?>
            <?php print render($form['account']['password']);?>
            <?php print render($form['profile_main']['field_first_name']);?>
        </div>
        <div class="large-5 offset-1 columns">
            <?php print render($form['profile_main']['field_user_picture']);?>
            <?php print render($form['profile_main']['field_user_city']);?>
            <?php print render($form['profile_main']['field_user_beds']);?>
            <?php print render($form['profile_main']['field_user_furniture']);?>
        </div>
    </div>
	<div class="row">
    	<div class="large-12 columns">
				<?php print drupal_render($form['form_build_id']);/*required to process form*/?>
                <?php print drupal_render($form['form_id']);/*required to process form*/?>
                <?php print drupal_render($form['actions']);/*The login button*/?>
		</div>
	</div>
</div>
