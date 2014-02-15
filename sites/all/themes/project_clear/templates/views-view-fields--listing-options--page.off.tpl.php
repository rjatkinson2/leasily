<?php

/**
 * @file
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */ 
 ?>
 <!---------------------ROW 1------------------------>  

<div class="large-3 columns">
    <div class="pricing_table two row">
    	<div class="large-12 columns">
            <div class="top">
			    <?php print $fields['title']->content?>
            </div>
    	</div>
        <div class="large-12 columns searchRow">
	        <p><?php print $fields['commerce_price']->content?></p>
			<p>(no credit card necessary)</p>
        </div>

        <div class="large-12 columns searchRow">
            <div class="row collapse">
                <div class="large-12 small-12 columns">
                    <p>Use your photos</p>
                </div>
            </div>
        </div>

        <div class="large-12 columns searchRow">
            <div class="row collapse">
                <div class="large-12 small-12 columns">
                    <p>Property Manager</p>
                    <p>For quickly and easily creating and managing listings</p>
                </div>
            </div>
        </div>

        <div class="large-12 columns signUp">
            <div class="row collapse">
				<?php print $fields['add_to_cart_form']->content?>
			</div>
        </div>
    </div>
</div>