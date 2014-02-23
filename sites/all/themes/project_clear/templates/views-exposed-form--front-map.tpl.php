<?php

/**
 * @file
 * This template handles the layout of the views exposed filter form.
 *
 * Variables available:
 * - $widgets: An array of exposed form widgets. Each widget contains:
 * - $widget->label: The visible label to print. May be optional.
 * - $widget->operator: The operator for the widget. May be optional.
 * - $widget->widget: The widget itself.
 * - $sort_by: The select box to sort the view using an exposed form.
 * - $sort_order: The select box with the ASC, DESC options to define order. May be optional.
 * - $items_per_page: The select box with the available items per page. May be optional.
 * - $offset: A textfield to define the offset of the view. May be optional.
 * - $reset_button: A button to reset the exposed filter applied. May be optional.
 * - $button: The submit button for the form.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($q)): ?>
  <?php
    // This ensures that, if clean URLs are off, the 'q' is added first so that
    // it shows up first in the URL.
    print $q;
  ?>
<?php endif; ?>

<!--
    <div class="large-2 columns">
      <div class="row collapse">
        <div class="large-6 small-6 columns">
          <span class="prefix">Beds</span>
        </div>
        <div class="large-6 small-6 columns">
            	<select id="bedsDrop">
                	<option>1</option>
                	<option>2</option>
                    <option>3</option>
                	<option>4+</option>
              	</select>
        </div>
      </div>
    </div>
-->

	<?php $columnWidthCounter=1;?>
	<?php foreach ($widgets as $id => $widget): ?>
    	<?php if ($columnWidthCounter<=1):?>
			<?php print '<div class="large-12 columns searchRow"><div class="row collapse">';?>
        <?php endif; ?>
    	<?php if ($columnWidthCounter>1):?>
			<?php print '<div class="large-12 columns searchRow"><div class="row collapse">';?>
        <?php endif; ?>
			<?php if (!empty($widget->label)): ?>
            
            <?php if ($columnWidthCounter>1):?>
                <?php print '<div class="large-5 small-5 columns">';?>
            <?php endif; ?>
						<?php print $widget->label; ?>
            </div>
            <?php endif; ?>
            
            
			<?php if (!empty($widget->operator)): ?>
                <?php print $widget->operator; ?>
            <?php endif; ?>

            <?php if ($columnWidthCounter>1):?>
                <?php print '<div class="large-7 small-7 columns">';?>
            <?php endif; ?>
              <?php print $widget->widget; ?>        
			<?php if (!empty($widget->description)): ?>
					<?php print $widget->description; ?>
            <?php endif; ?>
            	</div>
        	</div>
		</div>
        <?php $columnWidthCounter++?>
        <?php endforeach; ?>
		
		<div class="large-10 large-centered columns listPropertyLink">
			<div class="large-3 hide-for-medium columns">
				<p class="deckHeader accountNumber">
					<?php print l(t('+'), 'listing-choices', array('attributes' => array('class' => array('listPlus', 'another-class'))));?>
				</p>
			</div>
			<div class="large-9 medium-12 columns">
				<?php print l(t('List your property'), 'listing-choices', array('attributes' => array('class' => array('listLink', 'another-class'))));?>
			</div>
		</div>  

        <?php if (!empty($sort_by)): ?>
            <?php print $sort_by; ?>
            <?php print $sort_order; ?>
        <?php endif; ?>
        <?php if (!empty($items_per_page)): ?>
            <?php print $items_per_page; ?>
        <?php endif; ?>
        <?php if (!empty($offset)): ?>
            <?php print $offset; ?>
        <?php endif; ?>
          <?php print $button; ?>
        <?php if (!empty($reset_button)): ?>
            <?php print $reset_button; ?>
        <?php endif; ?>