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

                    <p class="clearH2" style="display:inline; float:right">
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
                    <p class="clearH2" style="display:inline; float:left"><?php print render($content['field_subcity']); ?></p>
        
                    <div style="display:inline-block; float:right">
                        <img src="<?php print $base_path . $theme_path . '/images/compass3.png'; ?>" alt="Google Pin" style="margin-left:1em; margin-top:1em; margin-bototm:1.5em; display:inline; float:right">
                    </div>
            	</div>
        	</div>
<?php endif; ?>

    		<div class="large-12 columns">            	
        		<!--<iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=1106+Bordeaux+Street,+New+Orleans,+LA&amp;aq=0&amp;oq=1106+Bor&amp;sll=29.929164,-90.094199&amp;sspn=0.02358,0.061755&amp;ie=UTF8&amp;hq=&amp;hnear=1106+Bordeaux+St,+New+Orleans,+Orleans,+Louisiana+70115&amp;ll=29.922637,-90.106612&amp;spn=0.023581,0.045404&amp;t=m&amp;z=14&amp;output=embed"></iframe>-->                
				
<!--Causes warning: invalid argument supplied foreach() in element_children() AND multiple warning: illegal string offsets-->				
				<?php
                $block = module_invoke('views', 'block_view', 'node_mini_map-block');
                print render($block);
                ?>
            </div>
		</div>
	</div>
    
<!---------------------STAT CARD------------------------>    


    <div class="row card">
            <div class="large-7 columns" style="padding-top:25px">
                <div id="content">
                    <div class="demo-container">
                        <div id="flot_graph" class="demo-placeholder">
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="large-5 columns deckText" style="padding-top:0px">
                <p class="statHeader shOld">Move-in Details</p>
                <p class="statDescription">
                    <?php if($content['field_move_in_day']): ?>
                    <?php print render($content['field_move_in_day']); ?>
                    <?php else:?>
                    Twelve to eighteen month lease available<br />
                    starting: July 1st, 2014
                    <?php endif?>
                </p>
                
                <p class="statHeader shOld">Take a look</p>
                <p class="statDescription">
                    <?php if($content['field_open_house_dates']): ?>
                        Next open house:<br />
                        <?php print render($content['field_open_house_dates']); ?>
                    <?php else:?>
                        Next open house:<br />Check back later for dates!
                    <?php endif?>
                </p>
    
    <!--FINISH THIS (only print two future open house dates)
                <p class="statDescription">
                <?php
                    $total_dates = count($content['field_open_house_dates']);
                    $dates_number=0;
                    for($dates_number; $dates_number<=$total_dates; $dates_number++){
                        if( time($content['field_open_house_dates'][$dates_number]) > time('now') ) {
                            print render($content['field_open_house_dates'][$dates_number]);
                        }
                    }
                ?>
                </p>--> 
                
                <div style="display:inline; float:left; margin-left:80px">
                        <p class="statHeader shOld">Make an offer</p>
                        <p class="statDescription">What's it worth to you?</p>
                </div>
                <button class="btn1" style="display:inline; float:left; margin: 20px 0 0 20px">X</button>
    	</div>

        <div class="row">
            <div class="large-4 columns makeAnOffer" style="padding:40px 0 0 0">
            	<div class="makeOffer" style="border:none">
                    <p class="statHeader shOld">Build your offer</p>
                    <p class="statDescription" style="margin-bottom: 10px">$ / month</p>
                    <p class="statDescription"># of tenants</p>
                </div>
            </div>
            <div class="large-4 columns makeAnOffer" style="padding:40px 0 0 0">
            	<div class="makeOffer">
                    <p class="statHeader shOld">Send offer</p>
                    <p class="statDescription">Check in to see if you’ve scored<br /> a new place to live</p>
                </div>
            </div>
            <div class="large-4 columns makeAnOffer" style="padding:40px 0 0 0">
            	<div class="makeOffer">
                    <p class="statHeader shOld">Offer Status</p>
                    <p class="statDescription">Check in to see if you’ve scored<br /> a new place to live</p>
                </div>
            </div>
        </div>
    </div>

<!---------------------AMMENITIES------------------------>    

     <div class="row card">
     	<div style="text-align:center">
			<?php
                $total_amenities = count($content['field_amenity'])-18;
				$amenity_number=0;
                for($amenity_number; $amenity_number<=$total_amenities; $amenity_number++){
                    print ('<div class="button2" style="display:inline-block"><img src="' . $base_path . $theme_path . '/images/icon1.png"></div>');
                }
            ?>
			<!--<div class="button2" style="display:inline-block;"><img src="<?php print $base_path . $theme_path . '/images/icon1.png';?>" alt="Amenity1"></div>
			<div class="button2" style="display:inline-block;"><img src="<?php print $base_path . $theme_path . '/images/icon1.png';?>" alt="Amenity1"></div>
			<div class="button2" style="display:inline-block;"><img src="<?php print $base_path . $theme_path . '/images/icon1.png';?>" alt="Amenity1"></div>
		<div class="button2" style="display:inline-block;">A</div>
			<div class="button2" style="display:inline-block;">A</div>
			<div class="button2" style="display:inline-block;">A</div>
			<div class="button2" style="display:inline-block;">A</div>-->
    	</div>

        <div style="text-align:center">
          
			<?php
                $total_amenities = count($content['field_amenity'])-17;
				$amenity_number=0;
                for($amenity_number; $amenity_number<$total_amenities; $amenity_number++){
                    print ('<p class="button2Description" style="display:inline-block">' . render($content['field_amenity'][$amenity_number]) . '</p>');
                }
            ?>
        <!--<p class="button2Description" style="display:inline-block;"><?php /*print render($content['field_amenity'][0]); */?></p>
			<p class="button2Description" style="display:inline-block;">These</p>
			<p class="button2Description" style="display:inline-block;">are</p>
			<p class="button2Description" style="display:inline-block;">Descriptions</p>-->
    	</div>
        
<!--ROW 2 if Required       
        <div style="text-align:center; margin-top:20px;">
			<div class="button2" style="display:inline-block;">A</div>
			<div class="button2" style="display:inline-block;">A</div>
			<div class="button2" style="display:inline-block;">A</div>
			<div class="button2" style="display:inline-block;">A</div>
			<div class="button2" style="display:inline-block;">A</div>
			<div class="button2" style="display:inline-block;">A</div>
			<div class="button2" style="display:inline-block;">A</div>
    	</div>
        
		<div style="text-align:center">
			<p class="button2Description" style="display:inline-block;">These</p>
			<p class="button2Description" style="display:inline-block;">Are</p>
			<p class="button2Description" style="display:inline-block;">Different</p>
			<p class="button2Description" style="display:inline-block;">Descriptions</p>
			<p class="button2Description" style="display:inline-block;">To</p>
			<p class="button2Description" style="display:inline-block;">Demonstrate</p>
            <p class="button2Description" style="display:inline-block;">Widths</p>
    	</div>
-->

    </div>
    
<!-------------------------------------------------------DYNAMIC CARDS-------------------------------------------------------->    

<?php $cardNumberCount = 1; ?>

<?php while ($cardNumberCount<11):?>
	<?php if ($content['field_card_title' . $cardNumberCount]) : ?>
    
<!---------------------DYNAMIC CARD LEFT------------------------>
    
		<?php if ($cardNumberCount % 2 != 0): ?>      
            <div class="row card">
                <div class="large-4 columns deckText">
                    <p class="deckHeader"><?php print render($content['field_card_title' . $cardNumberCount]); ?></p>
                    <p class="deckDescription"><?php print render($content['field_card_description' . $cardNumberCount]); ?></p>
                </div>
            
                <div class="large-8 columns">
				<?php print render($content['field_card_photo' . $cardNumberCount]); ?>
                </div>
            </div>
            
<!---------------------DYNAMIC CARD RIGHT------------------------>    
            
		<?php elseif ($cardNumberCount % 2 == 0): ?>    
            <div class="row card">
                <div class="large-8 columns">
                    <?php print render($content['field_card_photo' . $cardNumberCount]); ?>
                </div>
        
                <div class="large-4 columns deckText">
                    <p class="deckHeader"><?php print render($content['field_card_title' . $cardNumberCount]); ?></p>
                    <p class="deckDescription"><?php print render($content['field_card_description' . $cardNumberCount]); ?></p>
                </div>
            </div>
         <?php endif; ?>
	 <?php endif; ?>
<?php $cardNumberCount++;?>
<?php endwhile; ?>    
        
    
<?php /*?>-----------------------------------OLD CARD SYSTEM------------------------------------------------------------

<!---------------------DYNAMIC CARDS----------------------------->    

<?php $cardNumberCount = 0; ?>
<?php
	$titles = sizeof($content['field_card_title']) - 15;
	$descriptions = sizeof($content['field_card_description']) - 15;
	$photo = sizeof($content['field_card_photo']) - 15; 
	$totalCardNumber = max($titles,$descriptions,$photo);
?>

<!---------------------DYNAMIC CARD LEFT------------------------>
<?php while ($cardNumberCount<$totalCardNumber):?>
	<?php if ($cardNumberCount % 2 == 0): ?>    
        <div class="row card">
            <div class="large-4 columns deckText">
                <p class="deckHeader"><?php print render($content['field_card_title'][$cardNumberCount]); ?></p>
                <p class="deckDescription"><?php print render($content['field_card_description'][$cardNumberCount]); ?></p>
            </div>
            
            <div class="large-8 columns">
				<?php print render($content['field_card_photo'][$cardNumberCount]); ?>
            </div>
        </div>
	<?php $cardNumberCount++;?>
<!---------------------DYNAMIC CARD RIGHT------------------------>    
	<?php elseif ($cardNumberCount % 2 != 0): ?>    
        <div class="row card">
            <div class="large-8 columns">
                <?php print render($content['field_card_photo'][$cardNumberCount]); ?>
            </div>
    
            <div class="large-4 columns deckText">
                <p class="deckHeader"><?php print render($content['field_card_title'][$cardNumberCount]); ?></p>
                <p class="deckDescription"><?php print render($content['field_card_description'][$cardNumberCount]); ?></p>
            </div>
        </div>
     <?php $cardNumberCount++;?>
     <?php endif ?>
<?php endwhile; ?>    
<?php */?>   
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

<?php /*?>		<div class="container">
			<header class="clearfix">
				<span>Comments</span>
				<h1>What are your thoughts?</h1>
				<nav>
					<a href="http://tympanus.net/Blueprints/ScrollingLayout/" class="icon-arrow-left" data-info="previous Blueprint">Previous Blueprint</a>
					<a href="http://tympanus.net/codrops/?p=14941" class="icon-drop" data-info="back to the Codrops article">back to the Codrops article</a>
				</nav>
			</header>	
			<div class="main">
				<ul class="cbp_tmtimeline">
					<li>
						<time class="cbp_tmtime" datetime="2013-04-10 18:30"><span>4/10/13</span> <span>18:30</span></time>
						<div class="cbp_tmicon cbp_tmicon-phone"></div>
						<div class="cbp_tmlabel">
							<h2>Ricebean black-eyed pea</h2>
							<p>Winter purslane courgette pumpkin quandong komatsuna fennel green bean cucumber watercress. Pea sprouts wattle seed rutabaga okra yarrow cress avocado grape radish bush tomato ricebean black-eyed pea maize eggplant. Cabbage lentil cucumber chickpea sorrel gram garbanzo plantain lotus root bok choy squash cress potato summer purslane salsify fennel horseradish dulse. Winter purslane garbanzo artichoke broccoli lentil corn okra silver beet celery quandong. Plantain salad beetroot bunya nuts black-eyed pea collard greens radish water spinach gourd chicory prairie turnip avocado sierra leone bologi.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-11T12:04"><span>4/11/13</span> <span>12:04</span></time>
						<div class="cbp_tmicon cbp_tmicon-screen"></div>
						<div class="cbp_tmlabel">
							<h2>Greens radish arugula</h2>
							<p>Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-13 05:36"><span>4/13/13</span> <span>05:36</span></time>
						<div class="cbp_tmicon cbp_tmicon-mail"></div>
						<div class="cbp_tmlabel">
							<h2>Sprout garlic kohlrabi</h2>
							<p>Parsnip lotus root celery yarrow seakale tomato collard greens tigernut epazote ricebean melon tomatillo soybean chicory broccoli beet greens peanut salad. Lotus root burdock bell pepper chickweed shallot groundnut pea sprouts welsh onion wattle seed pea salsify turnip scallion peanut arugula bamboo shoot onion swiss chard. Avocado tomato peanut soko amaranth grape fennel chickweed mung bean soybean endive squash beet greens carrot chicory green bean. Tigernut dandelion sea lettuce garlic daikon courgette celery maize parsley komatsuna black-eyed pea bell pepper aubergine cauliflower zucchini. Quandong pea chickweed tomatillo quandong cauliflower spinach water spinach.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-15 13:15"><span>4/15/13</span> <span>13:15</span></time>
						<div class="cbp_tmicon cbp_tmicon-phone"></div>
						<div class="cbp_tmlabel">
							<h2>Watercress ricebean</h2>
							<p>Peanut gourd nori welsh onion rock melon mustard jícama. Desert raisin amaranth kombu aubergine kale seakale brussels sprout pea. Black-eyed pea celtuce bamboo shoot salad kohlrabi leek squash prairie turnip catsear rock melon chard taro broccoli turnip greens. Fennel quandong potato watercress ricebean swiss chard garbanzo. Endive daikon brussels sprout lotus root silver beet epazote melon shallot.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-16 21:30"><span>4/16/13</span> <span>21:30</span></time>
						<div class="cbp_tmicon cbp_tmicon-earth"></div>
						<div class="cbp_tmlabel">
							<h2>Courgette daikon</h2>
							<p>Parsley amaranth tigernut silver beet maize fennel spinach. Ricebean black-eyed pea maize scallion green bean spinach cabbage jícama bell pepper carrot onion corn plantain garbanzo. Sierra leone bologi komatsuna celery peanut swiss chard silver beet squash dandelion maize chicory burdock tatsoi dulse radish wakame beetroot.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-17 12:11"><span>4/17/13</span> <span>12:11</span></time>
						<div class="cbp_tmicon cbp_tmicon-screen"></div>
						<div class="cbp_tmlabel">
							<h2>Greens radish arugula</h2>
							<p>Caulie dandelion maize lentil collard greens radish arugula sweet pepper water spinach kombu courgette lettuce. Celery coriander bitterleaf epazote radicchio shallot winter purslane collard greens spring onion squash lentil. Artichoke salad bamboo shoot black-eyed pea brussels sprout garlic kohlrabi.</p>
						</div>
					</li>
					<li>
						<time class="cbp_tmtime" datetime="2013-04-18 09:56"><span>4/18/13</span> <span>09:56</span></time>
						<div class="cbp_tmicon cbp_tmicon-phone"></div>
						<div class="cbp_tmlabel">
							<h2>Sprout garlic kohlrabi</h2>
							<p>Parsnip lotus root celery yarrow seakale tomato collard greens tigernut epazote ricebean melon tomatillo soybean chicory broccoli beet greens peanut salad. Lotus root burdock bell pepper chickweed shallot groundnut pea sprouts welsh onion wattle seed pea salsify turnip scallion peanut arugula bamboo shoot onion swiss chard. Avocado tomato peanut soko amaranth grape fennel chickweed mung bean soybean endive squash beet greens carrot chicory green bean. Tigernut dandelion sea lettuce garlic daikon courgette celery maize parsley komatsuna black-eyed pea bell pepper aubergine cauliflower zucchini. Quandong pea chickweed tomatillo quandong cauliflower spinach water spinach.</p>
						</div>
					</li>
				</ul>
			</div>
		</div>
<?php */?>
