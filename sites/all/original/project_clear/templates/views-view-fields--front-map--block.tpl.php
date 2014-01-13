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
 
 
 <div style="min-width:650px; min-height:200px; overflow:hidden" class="infoBox">
    <div style="display:inline; float:left">
        <?php print $fields['field_bed_number']->label_html; ?><?php print $fields['field_bed_number']->content?>
        <?php print $fields['field_full_baths']->label_html; ?><?php print $fields['field_full_baths']->content?><br />
        <?php print $fields['field_base_price']->label_html; ?><?php print $fields['field_base_price']->content?><br />
        <?php print $fields['field_property_title']->content?>
        <?php print $fields['title']->content?>
    </div>
    
    <div style="display:inline; float:right; padding-right:10px">
		<?php print $fields['field_money_shot']->content?>
    </div>
</div>

 
 */
?>





<div style="width:650px; min-height:200px" class="row">
    <div style="display:inline-block; float:left; margin-right:10px">    	
        <div class="panel2"><?php print $fields['field_bed_number']->content?><br /><span style="font-size:.5em">beds</span></div>
        <div class="panel2"><span style="letter-spacing:-2px"><?php print $fields['field_full_baths']->content?></span><br /><span style="font-size:.5em">baths</span></div>
        <div class="panel2 last"><?php print $fields['field_base_price']->content?><br /><span style="font-size:.45em">$/mo</span></div>
    </div>
    
    <div style="display:inline-block; float:left" class="infoBox">
        <?php print $fields['field_money_shot']->content?>
    </div>
    
    <div style="display:inline-block; float:left; margin-left:10px">    	
        <div class="panel2"><?php print $fields['field_property_title']->content?><br /><span style="font-size:.5em"><?php print $fields['title']->content?></span></div>
        <div class="panel2"><span style="letter-spacing:-2px"><?php print $fields['field_full_baths']->content?></span><br /><span style="font-size:.5em">baths</span></div>
        <div class="panel2 last"><?php print $fields['field_base_price']->content?><br /><span style="font-size:.45em">$/mo</span></div>
    </div>          	
</div>

<!-- Header Content -->      