<?php
// $Id:

/**
 * @file
 * Result submissions page.
 *
 * Available variables:
 * - $node: The node object for this webform.
 * - $submissions: The Webform submissions array.
 * - $total_count: The total number of submissions to this webform.
 * - $pager_count: The number of results to be shown per page.
 * - is_submissions: The user is viewing the node/NID/submissions page.
 * - $table: The table[] array consists of three keys:
 * - $table['#header']: Table header.
 * - $table['#rows']: Table rows.
 * - $table['#operation_total']: Maximum number of operations in the operation column.
 */
?>

<div class="topSecondBar" data-thmr="thmr_454">
    <div class="row">
        <div class="row accountSettings" style="margin-top:20px; margin-bottom:20px">
            <div class="large-12 columns">
            	
            	<div class="row accountHeader" style="margin-bottom:50px">
            		<p class="statHeader">Submitted Offers</p>
            		<p class="accountBack">
						<?php if ($is_submissions): ?>
						  <?php print l('Back to form','node/' . $node->nid); ?>
						<?php endif; ?>
            		</p>
            	</div>
                
                <div class="large-12 columns">
					<?php if (count($table['#rows'])): ?>
					  <?php print render($table); ?>
					<?php else: ?>
					  <?php print t('There are no submissions for this form. <a href="!url">View this form</a>.', array('!url' => url('node/' . $node->nid))); ?>
					<?php endif; ?>
					
					
					
					<?php if ($pager_count): ?>
					  <?php print theme('pager', array('limit' => $pager_count)); ?>
					<?php endif; ?>
                </div>
			</div>
        </div>
    </div>
</div>