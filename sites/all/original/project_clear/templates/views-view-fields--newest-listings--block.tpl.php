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

<div class="row" style="margin-bottom:25px; margin-left:0px; margin-right:0px; padding-left:15px; padding-right:15px">
    <div class="view view-first">
        <?php print $fields['field_money_shot']->content?>
        <div class="mask">
            <h2><?php print $fields['field_property_title']->content?></h2>
            <div class="hoverStat" style="margin-left:85px; width:50px"><?php print $fields['field_bed_number']->content?><br /><span>beds</span></div>
            <div class="hoverStat"><?php print $fields['field_full_baths']->content?><br /><span>baths</span></div>
            <div class="hoverStat"><?php print $fields['field_base_price']->content?><br /><span>$/mo</span></div>
            <div style="float:left; margin:20px 0 0 180px"><?php print $fields['title']->content?></div>
        </div>
    </div>
</div>