






<?php
global $theme_path;
global $base_path;
?>


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
            <?php //if ($top_bar_secondary_menu) :?>
              <?php //print $top_bar_secondary_menu; ?>
            <?php //endif; ?>
			<ul id="secondary-menu" class="secondary link-list right" data-thmr="thmr_400">
				<li class="<?php print $dropdownClasses?>" title="">
					<?php print $top_bar_link_one;?>
					<?php if ($logged_in):?>
			            <ul class="dropdown">
			              <li><?php print $view_profile_link?></li>
			              <li><?php print $account_settings_link?></li>
			              <li><?php print $edit_account_link?></li>
			              <li><?php print l(t('Add Property'), 'node/add/home'); ?></a></li>
			            </ul>
		            <?php endif; ?>
				</li>
				<li class="divider topDivide show-for-large-up"></li>
				<li class="last leaf">
					<?php print $top_bar_link_two;?>
				</li>
			</ul>
          </section>
        </nav>
      <?php if ($top_bar_classes): ?>
      </div>
      <?php endif; ?>
      <!--/.top-bar -->
    <?php endif; ?>

  </header>
  <!--/.l-header -->

  <?php if (!empty($page['featured'])): ?>
    <!--/.featured -->
    <section class="l-featured row">
      <div class="large-12 columns">
        <?php print render($page['featured']); ?>
      </div>
    </section>
    <!--/.l-featured -->
  <?php endif; ?>

  <?php if (!empty($page['help'])): ?>
    <!--/.l-help -->
    <section class="l-help row">
      <div class="large-12 columns">
        <?php print render($page['help']); ?>
      </div>
    </section>
    <!--/.l-help -->
  <?php endif; ?>
  
  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--/.l-messages -->
        <?php if ($messages): print $messages; endif; ?>
    <!--/.l-messages -->
  <?php endif; ?>


      <?php // if ($breadcrumb): print $breadcrumb; endif; ?>

      <!--<?php if ($title && !$is_front): ?>
        <?php print render($title_prefix); ?>
        	<h1 id="page-title" class="title"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
      <?php endif; ?>-->

      <!--<?php if (!empty($tabs)): ?>
        <?php print render($tabs); ?>
        <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
      <?php endif; ?>-->

      <!--<?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>-->


<div class="topSecondBar pricing">

	    <img src="<?php print $base_path . 'sites/all/themes/project_clear/images/price-photo-10.jpg';?>" alt="Ammenity1" style="position:relative; width=100%" class="hide-for-small">
		
		
		<div class="logoPush">
		<div class="whiteDrop">&nbsp;</div>
			<div class="row">
				<div class="large-12 columns pricingTitle hide-for-medium hide-for-small" style="margin-bottom:3%">Welcome! Your listing awaits.</div>
				<div class="large-12 columns" id="priceDesc">
					<div class="large-12 columns" style="padding-bottom:10px">
						<div class="large-1 small-2 columns">
							<p class="deckHeader accountNumber">1</p>
						</div>
						<div class="large-11 small-10 columns show-for-small">
							<p class="deckHeader" style="font-size:1.5em">Original Plan</p>
						</div>
						<div class="large-11 small-12 columns">
							<p style="padding-top:7px">Want to handle the listing yourself? Go for it!  Our free property manager is quick and easy to use.</p>
						</div>
					</div>
					<div style="border-left: solid 1px #FFF; display:inline-block; margin-left:4%">
						<div class="large-9 large-offset-3 columns" style="padding-top:0">
							<div class="large-1 small-2 columns">
								<p class="deckHeader accountNumber">2</p>
							</div>
							<div class="large-11 small-10 columns show-for-small">
								<p class="deckHeader" style="font-size:1.5em">Pro Plans</p>
							</div>
							<div class="large-11 columns">
								<p>Or, let us take care of everything!  We will create a complete listing and fill it with beautiful photography.  The monthly rate only applies while the property is active.</p>
							</div>
						</div>
						<div class="large-9 columns large-offset-3" style="padding-top:0;">
							<div style="border-left: solid 1px #FFF; display:inline-block; margin-left:5%">
								<div class="large-9 large-offset-3 columns">
									<div class="large-2 small-2 columns">
										<p class="deckHeader accountNumber">3</p>
									</div>
									<div class="large-11 small-10 columns show-for-small">
										<p class="deckHeader" style="font-size:1.5em">Beat Rush Hour</p>
									</div>
									<div class="large-10 columns">
										<p>We want listings up earlier so tenants can plan ahead.  Our plans get cheaper the earlier you list.</p>
									</div>
								</div>
								<div class="large-9 columns large-offset-3" style="padding:0">
									<div style="border-left: solid 1px #FFF; width: 91%; margin-left:8%; padding:5% 30% 0 0">
										<div style="border-top: solid 1px #FFF; border-right: solid 1px #FFF; width: 91%">&nbsp;</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>			

				<div class="<?php print $classes; ?> large-12 columns pricingTables">
				
					<div class="large-3 columns">
					    <div class="pricing_table one row">
					    	<div class="large-12 columns">
					            <div class="top">
					                Original
					            </div>
					    	</div>
					        <div class="large-12 columns searchRow">
								<div class="field-content">Always Free!</div>
								<p>(no credit card necessary)</p>
					        </div>
					
					        <div class="large-12 columns searchRow">
					            <div class="row collapse">
					                <div class="large-12 small-12 columns">
					                    <p>Use your photos</p>
					                </div>
					            </div>
					        </div>
					
					        <div class="large-12 columns searchRow">
					            <div class="row collapse">
					                <div class="large-12 small-12 columns">
					                    <p>Property Manager</p>
					                    <p>For quickly and easily creating and managing listings</p>
					                </div>
					            </div>
					        </div>
					
					        <div class="large-12 columns signUp">
					            <div class="row collapse">
					            	<div>
						                <a href="<?php print $base_path . 'node/add/home'; ?>">
						                	<button>Get Started!</button>
						                </a>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
				
				  <?php if ($rows): ?>
				      <?php print $rows; ?>
				  <?php elseif ($empty): ?>
				      <?php print $empty; ?>
				  <?php endif; ?>
				
				<div style="clear:both; padding-top:3.0em"><p style="color:#454C52; text-align:center; margin:0">* All prices are a one time service fee, no additional fees will be incurred.</p></div>

				</div><?php /* class view */ ?>
				


			</div>
    	</div>
</div>