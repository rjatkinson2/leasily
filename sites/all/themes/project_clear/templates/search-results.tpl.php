<?php

/**
 * @file
 * Default theme implementation for displaying search results.
 *
 * This template collects each invocation of theme_search_result(). This and
 * the child template are dependent to one another sharing the markup for
 * definition lists.
 *
 * Note that modules may implement their own search type and theme function
 * completely bypassing this template.
 *
 * Available variables:
 * - $search_results: All results as it is rendered through
 *   search-result.tpl.php
 * - $module: The machine-readable name of the module (tab) being searched, such
 *   as "node" or "user".
 *
 *
 * @see template_preprocess_search_results()
 *
 * @ingroup themeable
 */
?>
    <div class="row">    
        <div class="large-12 columns" style="padding:0px">    
			<?php if ($search_results): ?>
              <ol class="search-results <?php print $module; ?>-results">
                <?php print $search_results; ?>
              </ol>
        </div>    
    </div>
	<div class="row" style="margin:50px 0 30px 0;">
		<div class="large-12 columns">    
			<?php if ($pager): ?>
                          <?php print $pager; ?>
            <?php endif;?>
		</div>
	</div>

<?php else : ?>
  <h2><?php print t('None of our homes seem to match your search');?></h2>
  <?php print search_help('search#noresults', drupal_help_arg()); ?>
<?php endif; ?>

