






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
				
				<div class="large-12 columns pricingTables">
					<div class="large-3 columns">
		                <div class="pricing_table one row">
		                	<div class="large-12 columns">
		                        <div class="top">
		                            Original
		                        </div>
		                	</div>
		                    <div class="large-12 columns searchRow">
								<p>Always Free!</p>
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
		                            <a href="#"><div>
		                                Get started!
		                            </div></a>
		                        </div>
		                    </div>
		                </div>
					</div>
					<div class="large-3 columns">
		                <div class="pricing_table two row">
		                	<div class="large-12 columns">
		                        <div class="top">
		                            Rush Hour
		                        </div>
		                	</div>
		                    <div class="large-12 columns searchRow">
								<p>6%</p>
								<p>of one month's rent</p>
		                    </div>
		
		                    <div class="large-12 columns searchRow">
		                        <div class="row collapse">
		                            <div class="large-12 small-12 columns">
		                                <p>Pro Photography</p>
		                                <p>let us take the shots!</p>
		                            </div>
		                        </div>
		                    </div>
		
		                    <div class="large-12 columns searchRow">
		                        <div class="row collapse">
		                            <div class="large-12 small-12 columns">
		                                <p>Hands free listing</p>
		                                <p>we'll set everything up for you, head to toe</p>
		                            </div>
		                        </div>
		                    </div>
		
		                    <div class="large-12 columns searchRow">
		                        <div class="row collapse">
		                            <div class="large-12 small-12 columns">
		                                <p>Property Manager</p>
		                                <p>For quickly and easily managing listings after setup</p>
		                            </div>
		                        </div>
		                    </div>
		                    
		                    <div class="large-12 columns signUp">
		                        <div class="row collapse">
		                            <a href="#"><div>
		                                Sign up
		                            </div></a>
		                        </div>
		                    </div>
		                    
		                </div>
					</div>
					<div class="large-3 columns">
		                <div class="pricing_table three row">
		                	<div class="large-12 columns">
		                        <div class="top">
		                            Prime Time
		                        </div>
		                	</div>
		                    <div class="large-12 columns searchRow">
								<p>4%</p>
								<p>of one month's rent</p>
		                    </div>
		
		                    <div class="large-12 columns searchRow">
		                        <div class="row collapse">
		                            <div class="large-12 small-12 columns">
		                                <p>Pro Photography</p>
		                                <p>let us take the shots!</p>
		                            </div>
		                        </div>
		                    </div>
		
		                    <div class="large-12 columns searchRow">
		                        <div class="row collapse">
		                            <div class="large-12 small-12 columns">
		                                <p>Hands free listing</p>
		                                <p>we'll set everything up for you, head to toe</p>
		                            </div>
		                        </div>
		                    </div>
		
		                    <div class="large-12 columns searchRow">
		                        <div class="row collapse">
		                            <div class="large-12 small-12 columns">
		                                <p>Property Manager</p>
		                                <p>For managing listings after setup</p>
		                            </div>
		                        </div>
		                    </div>
		                    
		                    <div class="large-12 columns searchRow">
		                        <div class="row collapse">
		                            <div class="large-12 small-12 columns">
		                                <p>Make an Offer</p>
		                                <p>*coming soon*</p>
		                            </div>
		                        </div>
		                    </div>
		                    
		                    <div class="large-12 columns signUp">
		                        <div class="row collapse">
		                            <a href="#"><div>
		                                Sign up
		                            </div></a>
		                        </div>
		                    </div>
		                </div>
					</div>
					<div class="large-3 columns">
		                <div class="pricing_table four row">
		                	<div class="large-12 columns">
		                        <div class="top">
		                            Early Bird
		                        </div>
		                	</div>
		                    <div class="large-12 columns searchRow">
								<p>2%</p>
								<p>of one month's rent</p>
		                    </div>
		
		                    <div class="large-12 columns searchRow">
		                        <div class="row collapse">
		                            <div class="large-12 small-12 columns">
		                                <p>Pro Photography</p>
		                                <p>let us take the shots!</p>
		                            </div>
		                        </div>
		                    </div>
		
		                    <div class="large-12 columns searchRow">
		                        <div class="row collapse">
		                            <div class="large-12 small-12 columns">
		                                <p>Hands Free Listing</p>
		                                <p>we'll set everything up for you, head to toe</p>
		                            </div>
		                        </div>
		                    </div>
		
		                    <div class="large-12 columns searchRow">
		                        <div class="row collapse">
		                            <div class="large-12 small-12 columns">
		                                <p>Property Manager</p>
		                                <p>For managing listings after setup</p>
		                            </div>
		                        </div>
		                    </div>
		                    
		                    <div class="large-12 columns searchRow">
		                        <div class="row collapse">
		                            <div class="large-12 small-12 columns">
		                                <p>Make an Offer</p>
		                                <p>*coming soon*</p>
		                            </div>
		                        </div>
		                    </div>
		                    
		                    <div class="large-12 columns signUp">
		                        <div class="row collapse">
		                            <a href="#"><div>
		                                Sign up
		                            </div></a>
		                        </div>
		                    </div>
		                </div>
					</div>
				</div>
			</div>
    	</div>
</div>
    <!--/.main region -->

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  <!--/.main-->
  
	<?php if (!empty($page['highlighted'])): ?>
		<?php print render($page['highlighted']); ?>
	<?php endif; ?>


  <?php if (!empty($page['triptych_first']) || !empty($page['triptych_middle']) || !empty($page['triptych_last'])): ?>
    <!--.triptych-->
    <section class="l-triptych row">
      <div class="triptych-first large-4 columns">
        <?php print render($page['triptych_first']); ?>
      </div>
      <div class="triptych-middle large-4 columns">
        <?php print render($page['triptych_middle']); ?>
      </div>
      <div class="triptych-last large-4 columns">
        <?php print render($page['triptych_last']); ?>
      </div>
    </section>
    <!--/.triptych -->
  <?php endif; ?>

  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
  <?php global $theme_path; ?>
    <!--.footer-columns -->
<div class="footerForm">
    <div class="row row3">
        <div class="large-7 columns">
            <p class="signUpText" style="text-align:right">Stay on top of what’s happening here at leasily.com with our noninvasive emails</p>
        </div>
        <div class="large-5 columns" style="padding-left:20px">
            <div class="formPlaceHolder" style="display:inline-block; float:left"></div>
            <div class="formPlaceHolder formPlaceHolder2" style="display:inline-block; float:left"></div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="row row2">
		<div class="large-12 columns">
		    <section class="row l-footer-columns footerSection">
		      <?php if (!empty($page['footer_firstcolumn'])): ?>
		        <div class="footer-first large-3 columns">
		          <img src="<?php print $base_path . $theme_path . '/images/footerSearch-03.png';?>" width="80px" alt="Search" class="centerTest">
		          <?php print render($page['footer_firstcolumn']); ?>
		        </div>
		      <?php endif; ?>
		      <?php if (!empty($page['footer_secondcolumn'])): ?>
		        <div class="footer-second large-3 columns">
		          <img src="<?php print $base_path . $theme_path . '/images/footerDollar_Artboard 5.png';?>" width="80px" alt="Dollar" class="centerTest">
		          <?php print render($page['footer_secondcolumn']); ?>
		        </div>
		      <?php endif; ?>
		      <?php if (!empty($page['footer_thirdcolumn'])): ?>
		        <div class="footer-third large-3 columns">
		          <img src="<?php print $base_path . $theme_path . '/images/footerHouse-02.png';?>" width="80px" alt="House" class="centerTest">
		          <?php print render($page['footer_thirdcolumn']); ?>
		        </div>
		      <?php endif; ?>
		      <?php if (!empty($page['footer_fourthcolumn'])): ?>
		        <div class="footer-fourth large-3 columns">
				  <img src="<?php print $base_path . $theme_path . '/images/footerCamera_Artboard 4.png';?>" width="110px" alt="Camera" class="centerTest" style="padding:4px 0">
		          <?php print render($page['footer_fourthcolumn']); ?>
		        </div>
		      <?php endif; ?>
		    </section>
	    <!--/.footer-columns-->
	    	<div class="row footerLinks" style="padding-top:50px;">
	    		<div class="large-5 small-3 columns">
					<ul class="inline-list firstFooterList">
						<li><a href="#">Home</a></li>
						<li><a href="#">Search</a></li>
						<li><a href="#">Contact Us</a></li>
					</ul>
	    		</div>
	            <div class="large-2 small-6 columns" style="padding-bottom:20px">        
	                <img src="<?php print $base_path . $theme_path . '/images/LeasilyCircle.png';?>" alt="Logo" class="centerTest" width="125px" style="padding-top:10px">
	            </div>
	    		<div class="large-5 small-3 columns">
					<ul class="inline-list">
						<li><a href="#">About</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Terms</a></li>
					</ul>
	    		</div>
	    	</div>
		</div>
    </div>
</div>



<div class="footerAccent"></div>

  <?php else: ?>
	<div style="margin:0 auto">
		<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/greenCircleLogo.png'; ?>" alt="L-Logo" style="margin-top:85px" width="130px" class="centerTest"/>
	</div>
    <p class="loginFooterText" data-thmr="thmr_400">
    ©2013-2014 All Rights Reserved. Leasily&trade; is a trademark of Leasily LLC. Privacy and Terms
    </p>
  <?php endif; ?>

  <!--.l-footer
  <footer class="l-footer panel row" role="contentinfo">
    <?php if (!empty($page['footer'])): ?>
      <div class="footer large-12 columns">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>

    <?php if ($site_name) :?>
      <div class="copyright large-12 columns">
        &copy; <?php print date('Y') . ' ' . check_plain($site_name) . ' ' . t('All rights reserved.'); ?>
      </div>
    <?php endif; ?>
  </footer>
  /.footer-->

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->