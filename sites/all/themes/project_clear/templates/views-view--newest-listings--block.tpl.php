<?php

/**
 * @file
 * Main view template.
 *
 * Variables available:
 * - $classes_array: An array of classes determined in
 *   template_preprocess_views_view(). Default classes are:
 *     .view
 *     .view-[css_name]
 *     .view-id-[view_name]
 *     .view-display-id-[display_name]
 *     .view-dom-id-[dom_id]
 * - $classes: A string version of $classes_array for use in the class attribute
 * - $css_name: A css-safe version of the view name.
 * - $css_class: The user-specified classes names, if any
 * - $header: The view header
 * - $footer: The view footer
 * - $rows: The results of the view query, if any
 * - $empty: The empty text to display if the view is empty
 * - $pager: The pager next/prev links to display, if any
 * - $exposed: Exposed widget form/info to display
 * - $feed_icon: Feed icon to display, if any
 * - $more: A link to view more, if any
 *
 * @ingroup views_templates
 */    
?>
            
        <!---------------------RIGHT COLUMN------------------------>
        
            <div class="large-6 columns" style="padding:0px">    
                
                <div class="row">                
                    <p class="statHeader"  style="text-align:center; margin-bottom:5px">Newest Listings</p>
                    <p class="statDescription hide-for-touch hide-for-small" style="font-size:1em; line-height:.75em; text-align:center; margin-bottom:40px; padding:0 2em">Have a look at the latest homes available for rent.</p>            
                </div>
                
                <!---------------------ROW 1------------------------>  

					  <?php if ($rows): ?>
                        <div class="view-content">
                          <?php print $rows; ?>
                        </div>
                      <?php elseif ($empty): ?>
                        <div class="view-empty">
                          <?php print $empty; ?>
                        </div>
                      <?php endif; ?>
                    
                      <?php if ($pager): ?>
                        <?php print $pager; ?>
                      <?php endif; ?>
                    
                      <?php if ($more): ?>
                        <?php print $more; ?>
                      <?php endif; ?>
                    
                      <?php if ($footer): ?>
                        <div class="view-footer">
                          <?php print $footer; ?>
                        </div>
                      <?php endif; ?>
                    
                      <?php if ($feed_icon): ?>
                        <div class="feed-icon">
                          <?php print $feed_icon; ?>
                        </div>
                      <?php endif; ?>
                      <?php /* class view */ ?>

            </div>
            
        <!---------------------END RIGHT COLUMN------------------------>
