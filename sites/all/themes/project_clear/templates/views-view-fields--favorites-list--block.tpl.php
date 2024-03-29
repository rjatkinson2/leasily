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

<div class="row" style="margin-bottom:25px; margin-left:0px; margin-right:0px">
    <div class="view view-first">
        <?php print $fields['field_money_shot']->content?>
        <div class="mask hide-for-touch hide-for-small">
            <h2 class="hide-for-small"><?php print $fields['title']->content?></h2>
            <div class="hoverStat hide-for-small" style="margin-left:115px; width:50px"><?php print $fields['field_bed_number']->content?><span>beds</span></div>
            <div class="hoverStat hide-for-small"><?php print $fields['field_full_baths']->content?><span>baths</span></div>
            <div class="hoverStat hide-for-small"><?php print $fields['field_base_price']->content?><span>$/mo</span></div>
            <div class="hide-for-small" style="float:left; margin:10px 0 0 200px"><?php print $fields['nid']->content?></div>
        </div>
    </div>
</div>