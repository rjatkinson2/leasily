<?php

/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>

<?php

	global $theme_path;
	global $base_path;
  
?>


<!--<?php print render($content['path']); ?>


<?php print render($content['field_half_baths']); ?>
<?php print render($content['field_base_price']); ?>
<?php print render($content['field_amenity']); ?>
<?php print render($content['field_address']); ?>
<?php print render($content['field_subcity']); ?>
<?php print render($content['field_price_history']); ?>
<?php print render($content['field_rating']); ?>
<?php print render($content['field_amenity_photo']); ?>-->
<!---------------------PROPERTY TITLE LINE------------------------>


<!---------------------MAGELLAN------------------------>
	<div data-magellan-expedition="fixed">
	  <dl class="sub-nav">
	  	<dd data-magellan-arrival="money"><a href="#money">Money Card</a></dd>
	    <dd data-magellan-arrival="build"><a href="#build">Build with HTML</a></dd>
	    <dd data-magellan-arrival="js"><a href="#js">Arrival 2</a></dd>
	  </dl>
	</div>
<!---------------------END MAGELLAN------------------------>

<!---------------------MAGELLAN NUMBER ONE------------------------>
	<a name="money"></a>
	<span data-magellan-destination="money"></span>
	
	<div class="row" style="padding-top:50px">
  		<div class="large-5 large-offset-1 columns">
    		<p class="clearTitle"><?php print render($content['title']); ?><?php print $node->title;?></p>
  		</div>
				<?php
                    if ($is_admin_or_author){
                      print('<div class="large-2 columns" style="padding-left:28px; padding-right:2px"><div class="button1">' . l('Edit', 'node/' . $nid . '/edit') . '<br/><span style="font-size:.5em; color:rgb(25,25,25);">Your Property</span></div></div>');
                      }
                    else{
						if ($logged_in){	  
						  print('<div class="large-2 columns" style="padding-left:28px; padding-right:2px"><div class="button1">' . flag_create_link('favorites', $node->nid) . '<br/><span style="min-width=50px; font-size:.5em; color:rgb(25,25,25);">Add to Favorites</span></div></div>');
						}
                      }
                ?>   
        <div class="large-2 columns <?php if(!$logged_in && !$is_admin_or_author){print('large-offset-2');} ?>">
        
    		<div class="button1" style="min-width:150px;">Available<br/><span style="font-size:.5em; color:rgb(25,25,25);">July 1st, 2014</span></div>
  		</div>
        <div class="large-1 columns">
    		<div class="button1"><?php print render($content['field_bed_number']); ?><br/><span style="font-size:.5em; color:rgb(25,25,25);">Beds</span></div>
  		</div>
        <div class="large-1 columns">
    		<div class="button1"><?php print render($content['field_full_baths']); ?><br/><span style="font-size:.5em; color:rgb(25,25,25);">Baths</span></div>
  		</div>
	</div>

<!---------------------MONEY CARD------------------------>
    <div class="row card" style="margin-top:5px;">
    	<div class="large-12 wrapper">
      		<div class="large-12 columns">
        		<?php print render($content['field_money_shot']); ?>
     	 	</div>

<?php if($content['field_subcity']): ?>
	<?php print '<div class="large-6 columns">
            	<div style="display:inline-block; float:left; margin-left:1em;">' ?>
<?php endif; ?>
<?php if(!$content['field_subcity']): ?>
	<?php print '<div class="large-12 columns">
            	<div style="display:inline-block; float:left; margin-left:310px;;">' ?>
<?php endif; ?>
                    <img src="<?php print $base_path . $theme_path . '/images/googlePin.png'; ?>" alt="Google Pin" style="margin-right: 1em; margin-top:1em; margin-bototm:1.5em; display:inline; float:left">

                    <p class="clearH2" style="display:inline; float:left">
                        <?php if ($location['street']) : ?> 
                            <?php print $location['street'] ?>
                        <?php endif; ?>
                        <?php if ($location['additional']) : ?> 
                            <?php print $location['additional'] ?><!--8243 Magazine Street-->
                        <?php endif; ?>
                    </p>
            	</div>
       		</div>

<?php if($content['field_subcity']): ?>
            <div class="large-6 columns">
            	<div style="display:inline-block; float:right; margin-right:1em">
            	
                    <div style="display:inline-block; float:right">
                        <img src="<?php print $base_path . $theme_path . '/images/compass3.png'; ?>" alt="Google Pin" style="margin-left:1em; margin-top:1em; margin-bototm:1.5em; display:inline; float:right">
                    </div>
                    
            		<?php print render($content['field_subcity']); ?>

            	</div>
        	</div>
<?php endif; ?>

    		<div class="large-12 columns">            					
<!--Causes warning: invalid argument supplied foreach() in element_children() AND multiple warning: illegal string offsets-->				
				<?php 
                $block = module_invoke('views', 'block_view', 'node_mini_map-block');
                print render($block);
                ?>
            </div>
		</div>
	</div>
    
<!---------------------STAT CARD------------------------>    
	
<!---------------------MAGELLAN NUMBER 2------------------------>
	<a name="build"></a>
	<span data-magellan-destination="build"></span>



    <div class="row card">
        <div class="large-7 columns hide-for-small" style="padding-top:40px">
            <div id="content">
                <div class="demo-container">
                    <div id="placeholder" class="demo-placeholder">
                    </div>
                </div>
            </div>
        </div>

        <div class="large-5 columns stats">
        	<div class="row" style="margin-bottom:5px;">
                <p class="statHeader">Move-in Details</p>
                	<?php if($content['field_move_in_day']): ?>
		                <p class="statDescription">Lease available starting:</p>
	                    <?php print render($content['field_move_in_day']); ?>
                    <?php else:?>
	                    <p class="statDescription">Not yet specified, contact the owner.</p>
                    <?php endif?>
                
                <p class="statHeader">Take a look</p>
                    <?php if($content['field_open_house_date']): ?>
		                <p class="statDescription">Next open house:</p>
                        <?php print render($content['field_open_house_date']); ?>
                    <?php else:?>
						<p class="statDescription">Check back later for open house dates!</p>
                    <?php endif?>
                    
                <p class="statHeader">Make an offer</p>
                        <p class="statDescription">What's it worth to you?</p>
        	</div>
        </div>

		<div class="large-5 large-offset-7">
        	<div class="row">
	            <button class="btn1">Begin our simple offer creator!</button>
        	</div>
		</div>

    	<?php $block = module_invoke('webform', 'block_view', 'client-block-406d');
    	print render($block['content']);?>

    <!--<div class="row makeOffer">
        	<div class="large-12 columns">
	            <ul class="large-block-grid-3 small-block-grid-3" style="padding-top:60px;">
					<li>            	
	                    <p>Build your offer</p>
	                    <p>$ / month</p>
	                    <p># of tenants</p>
		            </li>
		            <li>
	                    <p>Send offer</p>
	                    <p>Check in to see if you’ve scored a new place to live.</p>
		            </li>
		            <li>
	                    <p>Offer Status</p>
	                    <p>Check in to see if you’ve scored<br /> a new place to live oh yea.</p>
		            </li>
	            </ul>
        	</div>
        </div>-->
    </div>
        
<!---------------------MAGELLAN NUMBER 3------------------------>
	<a name="js"></a>
	<span data-magellan-destination="js"></span>

     <div class="row card">
     	<div style="text-align:center">
			<?php $amenityCount=0;?>
				<?php while ($amenityCount < $content['totalAmmenities']):?>
			        <?php print ('<div class="button2" style="display:inline-block"><img src="' . $base_path . $theme_path . '/images/icon1.png"></div>'); ?>
				<?php $amenityCount++;?>
			<?php endwhile; ?>
    	</div>

        <div style="text-align:center">
			<?php $amenityCount=0;?>
				<?php while ($amenityCount < $content['totalAmmenities']):?>
					<?php print ('<p class="button2Description" style="display:inline-block">' . render($content['field_amenity'][$amenityCount]) . '</p>'); ?>
				<?php $amenityCount++;?>
			<?php endwhile; ?>
    	</div>
    </div>

<!-------------------------------------------------------DYNAMIC CARDS-------------------------------------------------------->    



<?php $cardNumberCount=0;?>
	<?php while ($cardNumberCount < $content['totalCards']):?>
        <div class="row card">
            <div class="large-4 <?php if ($cardNumberCount % 2 != 0): ?>push-8<?php endif;?> columns deckText">
                <?php print render($content['titleArray'][$cardNumberCount]); ?>
                <?php print render($content['descriptionArray'][$cardNumberCount]); ?>
            </div>
        
            <div class="large-8 <?php if ($cardNumberCount % 2 != 0): ?>pull-4<?php endif;?> columns">
            	<?php if($content['subphotoArray'][$cardNumberCount] == 1):?>
                	<?php print render($content['photoArray'][$cardNumberCount]); ?>
            	<?php else:?>	
            	<ul class="bxslider">
                	<?php $subCounter = 0; ?>
                    <?php while ($subCounter < $content['subphotoArray'][$cardNumberCount]): ?>
	                    <li><?php print render($content['photoArray'][$cardNumberCount][$subCounter]); ?></li>
	                    <?php $subCounter++;?>
                    <?php endwhile; ?>
            	</ul>
            	<?php endif;?>
            </div>
        </div>
	<?php $cardNumberCount++;?>
<?php endwhile; ?>

<!-----------------------ADD A CARD------------------------->
<?php if ($is_admin_or_author)
  {
  print('<div class="row card" style="margin-bottom:50px"><div class="large-12 columns"><p class="deckDescription">' . l('Add another card to the deck!', 'node/' . $nid . '/edit') .  '<span class="deckHeader">'. l('+','node/' . $nid . '/edit') . '</span></p></div></div>');
  }  
?>    
<!-----------------------END CARDS-------------------------->


<?php if($content['comments']): ?>
	<div class="row card" style="margin-bottom:50px">
              <?php print render($content['comments']); ?>
	</div>
<?php endif ?>