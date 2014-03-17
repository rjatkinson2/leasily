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
	<div data-magellan-expedition="fixed" class="hide-for-small">
	  <dl class="sub-nav">
	  	<dd data-magellan-arrival="money"><a href="#money">Cover Photo</a></dd>
	    <dd data-magellan-arrival="location"><a href="#location">Location</a></dd>
	    <dd data-magellan-arrival="lease"><a href="#lease">Lease Details</a></dd>
	    <dd data-magellan-arrival="ammenities"><a href="#ammenities">Ammenities</a></dd>
	    <dd data-magellan-arrival="cards"><a href="#cards">Cards</a></dd>
	    <dd data-magellan-arrival="comments"><a href="#comments">Comments</a></dd>
	  </dl>
	</div>
<!---------------------END MAGELLAN------------------------>

<!---------------------MAGELLAN NUMBER ONE------------------------>
	<a name="money"></a>
	<span data-magellan-destination="money"></span>
		
	<div class="row" style="padding-top:50px">
  		<div class="large-5 columns">
    		<p class="clearTitle"><?php print $node->title;?></p>
  		</div>
  		
  		<div class="large-4 columns">
	  		<ul class="small-block-grid-<?php if(!$logged_in && !$is_admin_or_author){print('1');}else{print('2');} ?> large-block-grid-2 homeButtonGrid">
				<li>
				  
					<?php
	                    if ($is_admin_or_author){
	                      print('<div class="button1 flabBut">' . l('Edit', 'node/' . $nid . '/edit') . '<span>Your Property</span></div>');
	                      }
	                    else{
							if ($logged_in){	  
							  print('<div class="button1 flagBut">' . flag_create_link('favorites', $node->nid) . '<span>Add to Favorites</span></div>');
							}
	                      }
	                ?>   
				  
				</li>
				<li>
					<div class="button1">

					<?php if($content['field_occupancy']['#items']['0']['value']=='0'):?>
						  	<div class="avail" style="color:#D44332">Occupied</div>
							<?php if($content['field_move_in_day']): ?>
							  	<p style="display:inline">Until</p><?php print render($content['field_move_in_day']);?>
							<?php else:?>
							  	<p style="display:inline">Check back later!</p>
						  	<?php endif;?>
				  	<?php else:?>
							<div class="avail">Available</div>
							<?php if($content['field_move_in_day']): ?>
							  	<?php print render($content['field_move_in_day']);?>
							<?php else:?>
							  	<p style="display:inline">Contact owner!</p>
						  	<?php endif;?>
				  	<?php endif; ?>
				  	
					</div>
				</li>
			</ul>
		</div>
  		<div class="large-3 columns">
  			<ul class="small-block-grid-2 homeButtonGrid">
			  <li><div class="button1"><?php print render($content['field_bed_number']); ?><span>Beds</span></div></li>
			  <li><div class="button1"><?php print render($content['field_full_baths']); ?><span>Baths</span></div></li>
			</ul>
  		</div>
	</div>

<!---------------------MONEY CARD------------------------>
    <div class="row card" style="margin-top:5px;">
    	<div class="large-12 wrapper">
      		<div class="large-12 columns">
        		<?php print render($content['field_money_shot']); ?>
     	 	</div>

	<a name="location"></a>
	<span data-magellan-destination="location"></span>

<?php if($content['field_subcity']): ?>
	<?php print '<div class="large-6 small-12 columns">'; ?>
<?php else: ?>
	<?php print '<div class="large-7 large-centered small-12 columns">'; ?>
<?php endif; ?>

					<div class="large-3 small-4 columns">
	                    <img src="<?php print $base_path . $theme_path . '/css/icons/location64.png'; ?>" alt="Google Pin" class="locationIcon">
					</div>
					
					<div class="large-9 small-8 columns">
	                    <p class="clearH2">
	                        <?php if ($location['street']) : ?> 
	                            <?php print $location['street'] ?>
	                        <?php endif; ?>
	                        <?php if ($location['additional']) : ?> 
	                            <?php print $location['additional'] ?>
	                        <?php endif; ?>
	                    </p>
					</div>
       		</div>

<?php if($content['field_subcity']): ?>
            <div class="small-6 columns hide-for-small">
            	
					<div class="large-9 small-9 columns">
	            		<?php print render($content['field_subcity']); ?>
					</div>

					<div class="large-3 small-3 columns">
	                    <img src="<?php print $base_path . $theme_path . '/css/icons/compass64.png'; ?>" alt="Google Pin" style="margin:1.0em 0">
					</div>
        	</div>
<?php endif; ?>

    		<div class="small-12 columns">            					
<!--Causes warning: invalid argument supplied foreach() in element_children() AND multiple warning: illegal string offsets-->				
				<?php 
                $block = module_invoke('views', 'block_view', 'node_mini_map-block');
                print render($block);
                ?>
            </div>
		</div>
	</div>
    
<!---------------------DISABLE WITH PRIVACY------------------------>    

<?php if($content['field_privacy']['#items']['0']['value']=='0'):?>
<div class="privacyBar">
    <div class="row">
		<?php if($content['field_occupancy']['#items']['0']['value']=='0'):?>
			<p class="clearTitle">Property Occupied</p>
			
			<?php if($content['field_move_in_day']): ?>
				<p>Privacy settings enabled.  Check back for complete property details on:</p>
				<p><?php print render($content['field_move_in_day']); ?></p> 
			<?php else:?>
				<p>Privacy settings enabled.  Check back later for complete property details.</p>
		  	<?php endif;?>
	  	<?php else:?>		
			<p class="clearTitle">Property Available</p>
			<?php if($content['field_move_in_day']): ?>
				<p>Privacy settings enabled.  Check back for complete property details on:</p>
				<p style="color:#4D997C"><?php print render($content['field_move_in_day']); ?></p> 
			<?php else:?>
				<p>Privacy settings enabled.  Check back later for complete property details.</p>
		  	<?php endif;?>
		<?php endif;?>
	</div>
</div>    
<?php else: ?>

<!---------------------MAGELLAN NUMBER 2------------------------>
	<a name="lease"></a>
	<span data-magellan-destination="lease"></span>



    <div class="row card">
        <div class="large-7 columns hide-for-small" style="padding-top:50px">
            <div id="content" style="position:relative">
                <div class="demo-container">
                    <div id="placeholder" class="demo-placeholder" style="position:relative">
                    </div>
                    <div id="graphMessage">Not enough data yet!</div>
                </div>
            </div>
        </div>

        <div class="large-5 columns stats">
        	<div class="row" style="margin-bottom:5px;">
                <p class="statHeader">Move-in Details</p>
                	<?php if($content['field_move_in_day']): ?>
		                <p class="statDescription">Lease available starting:</p>
	                    <p class="statDescription"><?php print render($content['field_move_in_day']); ?></p>
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
                        <p class="statDescription">Current list price:</p>
                        <?php print render($content['field_base_price']); ?>
        	</div>
        </div>
        

		<div class="large-5 large-offset-7">
        	<div class="row">
        	
        		<a name="offer"></a>
				<span data-magellan-destination="offer"></span>

        	
	            <button class="btn1">Contact the owner</button>
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
	<a name="ammenities"></a>
	<span data-magellan-destination="ammenities"></span>

     <div class="row card ammenities">
        <div style="text-align:center">
        	<ul>
			<?php $amenityCount=0;?>
				<?php while ($amenityCount < $content['totalAmmenities']):?>
					<?php print ('<li class="' . ''/*for future individual icons render($content['field_amenity']['#items'][$amenityCount]['value'])*/ . '" style="display:inline-block">' . render($content['field_amenity'][$amenityCount]) . '</li>'); ?>
				<?php $amenityCount++;?>
			<?php endwhile; ?>
        	</ul>
    	</div>
     </div>

<!-------------------------------------------------------DYNAMIC CARDS-------------------------------------------------------->    

	<a name="cards"></a>
	<span data-magellan-destination="cards"></span>

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
<a name="comments"></a>
<span data-magellan-destination="comments"></span>

<?php if($content['comments']): ?>
	<div class="row card" style="margin-bottom:50px">
              <?php print render($content['comments']); ?>
	</div>
<?php endif; ?>

<?php endif; ?>
