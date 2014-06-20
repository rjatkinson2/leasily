<?php

	global $theme_path;
	global $base_path;
  
?>

<?php render($page['content']['metatags']); ?>

<!--.page -->
<div role="document" class="page">

  <!--.l-header region -->
  <header role="banner" class="l-header">

    <?php if ($top_bar): ?>
      <!--.top-bar -->
      <?php if ($top_bar_classes): ?>
      <div class="<?php print $top_bar_classes; ?>">
      <?php endif; ?>
        <nav class="top-bar"<?php print $top_bar_options; ?>>
          <ul class="title-area">
            <li class="name"><?php print $linked_logo; ?></li>
			<!--<li class="has-form left">
				<?php if (!empty($page['header'])): ?>
				<?php print render($page['header']); ?>
				<?php endif; ?>-->
			</li>
            <li class="toggle-topbar menu-icon"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
          </ul>
          <section class="top-bar-section">
            <?php //if ($top_bar_main_menu) :?>
              <?php //print $top_bar_main_menu; ?>
            <?php //endif; ?>
			<ul id="secondary-menu" class="secondary link-list right" data-thmr="thmr_400">
				
				<!--<li class="divider topDivide show-for-large-up"></li>-->

				<?php if ($top_bar_link_other): ?>
					<?php print $top_bar_link_other;?>
				<?php endif; ?>
				
				<?php if ($top_bar_link_one): ?>
				<li class="divider topDivide show-for-large-up"></li>
				
				<li title="">
					<?php print $top_bar_link_one;?>
				</li>
				<?php endif; ?>

				<li class="divider topDivide show-for-large-up"></li>

				<li class="<?php print $dropdownClasses?> last leaf">
					<?php print $top_bar_link_two;?>
					<?php if ($logged_in):?>
			            <ul class="dropdown">
			              <li><?php print l(t('Home'),'<front>'); ?></li>
			              <li><?php print $view_profile_link?></li>
			              <li><?php print $account_settings_link?></li>
			              <li><?php print $edit_account_link?></li>
			              <li><?php print l(t('log out'), 'user/logout'); ?></li>
			            </ul>
		            <?php endif; ?>
				</li>

			</ul>
			<!--<span class="topBarHome">
            <?php // if ($top_bar_secondary_menu) :?>
              <?php // print $top_bar_secondary_menu; ?>
            <?php // endif; ?>
			</span>-->
			
          </section>
        </nav>
      <?php if ($top_bar_classes): ?>
      </div>
      <?php endif; ?>
      <!--/.top-bar -->
    <?php endif; ?>

  </header>
  <!--/.l-header -->

  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--/.l-messages -->
        <?php if ($messages): print $messages; endif; ?>
    <!--/.l-messages -->
  <?php endif; ?>
  <div id="front">
	<div id="bg" style="width:100%; position:relative">
		<div class="row">
			<div class="small-10 small-centered columns dotted">
				<div style="margin:0">
					<div></div>
					<h1><span>Rental property listings hand crafted for people who love photography.</span></h1>
					<div style="margin-top:8px"></div>
				</div>
			</div>
		</div>
		<div>
			<ul>			
				<li><a href="#" rel="p1" class="act">Future Tenants</a></li>
				<li><a href="#" rel="p2">Landlords</a></li>
				<li><a href="#" rel="p3">Current Tenants</a></li>
			</ul>
		</div>
	</div>	
	
	<div style="background-color:#FFF" id="options">
		<div class="row" id="p1">
			<div class="large-4 columns">
				<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landingIcons/houseFlat@2x.png'; ?>" width="94px"/>
				<h3>You Find a Potential Rental</h3>
				<h6>Find a rental your interested in through Craigslist, Zillow, Trulia, or any way you choose.</h6>
				<h6>Paste a link to the listing in the form below!</h6>
			</div>
			<div class="large-4 columns">
				<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landingIcons/camFlat@2x.png'; ?>" width="96.8px" style="margin-top:0.5em"/>
				<h3>We will photograph that listing!</h3>
				<h6>We'll tour the place and take plenty of professional photos, delivering an experience on par with a personal tour.</h6>
				<h6>We'll have our crystal clear listing posted within 24 hours after contact with the landlord.</h6>
			</div>
			<div class="large-4 columns">
				<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landingIcons/mapFlat@2x.png'; ?>" width="90px"/>
				<h3>Check it out and more at the map!</h3>
				<h6>You'll find your listing, along with many other on our map based property search.</h6>
				<h6>Best of all, our service is <span style="text-decoration:underline">completely free!</span></h6>
			</div>
		</div>
		<div class="row" id="p2" style="display:none">
			<div class="large-4 columns">
				<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landingIcons/camFlat@2x.png'; ?>" width="96.8px"/>
				<h3>Free Professional Photography</h3>
				<h6>We'll professionally photograph your property and set up the listing.</h6>
			</div>
			<div class="large-4 columns">
				<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landingIcons/calFlat@2x.png'; ?>" width="83.2px"/>
				<h3>Flexible Listing Schedule</h3>
				<h6>You tell us any time you need new tenants and we’ll set your listing live.<br/>We’ll hold onto the listing for easy access every year.</h6>
			</div>
			<div class="large-4 columns">
				<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landingIcons/amazonFlat@2x.png'; ?>" width="127.2px"/>
				<h3>Free <br/>Gift Card for Trying!</h3>
				<h6>We’ll give you 20 bucks to Amazon for trying out our service and helping spread the word!</h6>
			</div>
		</div>
		<div class="row" id="p3" style="display:none">
			<div class="large-4 columns">
				<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landingIcons/camFlat@2x.png'; ?>" width="96.8px"/>
				<h3>Free Professional Photography</h3>
				<h6>We'll professionally photograph your property and set up the listing.</h6>
			</div>
			<div class="large-4 columns">
				<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landingIcons/calFlat@2x.png'; ?>" width="83.2px"/>
				<h3>Flexible Listing Schedule</h3>
				<h6>You tell us any time you need new tenants and we’ll set your listing live.<br/>We’ll hold onto the listing for easy access every year.</h6>
			</div>
			<div class="large-4 columns">
				<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landingIcons/amazonFlat@2x.png'; ?>" width="127.2px"/>
				<h3>Free <br/>Gift Card for Trying!</h3>
				<h6>We’ll give you 20 bucks to Amazon for trying out our service and helping spread the word!</h6>
			</div>
		</div>
	</div>
	<div style="background-color:#344252; padding:1.2em">
		<div class="row">
			<div class="large-9 columns large-centered" id="midForm" style="padding:0, margin:0">
				<div class="p1 suf">
					<?php $block1 = module_invoke('webform', 'block_view', 'client-block-438');
					print render($block1['content']);?>
				</div>
				<div class="p2 suf" style="display:none">
					<?php $block2 = module_invoke('webform', 'block_view', 'client-block-439');
					print render($block2['content']);?>
				</div>
				<div class="p3 suf" style="display:none">
					<?php $block3 = module_invoke('webform', 'block_view', 'client-block-440');
					print render($block3['content']);?>
				</div>
			</div>
		</div>
	</div>
	<div style="background-color:#F4F4F4">
		<div class="row" style="margin:1.0em auto">
			<h3 class="hide-for-small">learn more</h3>
			<div class="arrow-down2 hide-for-small" style="margin: 0 auto"></div>
		</div>
	</div>
	<div style="background-color:#FFF; padding:6.0em 0" class="wideCard" id="thousand">
		<div class="row">
			<div class="large-7 columns">
				<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landingIcons/ex2@2x.jpg'; ?>" width="310px" style="float:right"/>
				<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landingIcons/ex1@2x.jpg'; ?>" width="220px" style="float:right; margin-right:15px; margin-top:74px"/>
			</div>
			<div class="large-5 columns">
				<h1 style="text-align:left">Photos worth a thousand words</h1>
				<h5 style="text-align:left">Every property is professionally photographed at leasily.com, delivering the complete experience from the comfort of your (soon to be old) home.</h5>
			</div>
		</div>
		<div class="row" style="padding-top:15px">
			<div class="large-7 columns">
				<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landingIcons/ex3@2x.jpg'; ?>" width="390px" style="float:right"/>
			</div>
			<div class="large-5 columns">
					<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landingIcons/ex4@2x.jpg'; ?>" width="310px"/>
			</div>
		</div>
	</div>
	<div style="padding:2.0em; position:relative" id="bg2">
		<div class="row" style="margin-top:80px">
			<div><h1>Map based search</h1></div>
		</div>
		<div class="row" style="margin-top:20px; padding-left:350px;">
			<?php print l(t('Start hunting!'), 'map');?>
		</div>
	</div>
	<div class="wideCard listing">      
		<div class="row">
			<div class="large-6 push-6 columns">
				<h1>Open Ecosystem, Maximum Exposure</h1>
				<h5>We develop our transparent, full-featured listings to share with the world.  Every listing at Leasily.com will be shared across the major platforms so house hunters and landlords won’t miss a thing.</h5>
			</div>  
			<div class="large-6 pull-6 columns" style="margin-top:1.5em">
				<div class="large-12 columns">
		            <img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landingIcons/Craigslist@2x.jpg'; ?>" width="215" class="centerTest"/>
				</div>
				<div class="large-12 columns" style="margin-top:1.5em">
	            	<div class="large-5 columns">
		            	<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landingIcons/Trulia@2x.png'; ?>" width="215" class="centerTest"/>
	            	</div>
	            	<div class="large-7 columns">
						<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landingIcons/Zillow@2x.png'; ?>" width="215" class ="centerTest"/>
	            	</div>
				</div>
			</div>
		</div>
	</div>
	<div style="background-color:#4D997C; padding:1.2em">
		<div class="row">
			<div class="large-9 columns large-centered" id="footForm" style="padding:0, margin:0">
				<div class="p1 suf">
					<?php $block1 = module_invoke('webform', 'block_view', 'client-block-438');
					print render($block1['content']);?>
				</div>
				<div class="p2 suf" style="display:none">
					<?php $block2 = module_invoke('webform', 'block_view', 'client-block-439');
					print render($block2['content']);?>
				</div>
				<div class="p3 suf" style="display:none">
					<?php $block3 = module_invoke('webform', 'block_view', 'client-block-440');
					print render($block3['content']);?>
				</div>
			</div>
		</div>
	</div>
	<div>
		<div class="row foot">
			<div class="large-12 columns">
				<ul style="text-align:center; list-style-type:none; margin:1.0em">			
					<li style="display:inline-block"><h6>Leasily, home sweet home.</h6></li>
					<li style="display:inline-block">
						<?php print l(t('Home'), '<front>', array('attributes' => array('class' => array('o')))); ?>
					</li>
					<li style="display:inline-block">
						<?php print l(t('Map'), 'map'); ?>
					</li>
					<li style="display:inline-block">
						<?php print l(t('Contact Us'), 'mailto:founders@leasily.com?Subject=Leasily%20-%20Question%20for%20the%20Founders', array('absolute' => TRUE)); ?>
					</li>
					<li style="display:inline-block">
						<?php print l(t('Privacy Policy'), 'privacy-policy'); ?>
					</li>
				</ul>
			</div>
		</div>
	</div>
  </div>


  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
