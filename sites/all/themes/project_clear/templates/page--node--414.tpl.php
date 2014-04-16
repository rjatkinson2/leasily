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
			<ul id="secondary-menu" class="secondary link-list right" data-thmr="thmr_400">
				<!--<li class="divider topDivide show-for-large-up"></li>-->

				<li>
					<?php print l(t('landlords'), 'landlords', array('attributes' => array('class' => array('topBarFont')))); ?>
				</li>
				
				
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
<img src="<?php print $base_path . $theme_path . '/images/greenCircleLogo.png';?>" alt="Logo" class="centerTest" width="125px" style="margin:60px auto 30px auto">

<h1 style="margin-bottom:.3em">Home sweet home.</h1>

<div class="row stats">
	<div class="small-12 columns">
		<div class="large-3 small-6 columns">
			<div class="large-4 columns">
				<h1>2</h1>
			</div>
			<div class="large-8 columns">
				<h6>properties photographed</h6>
			</div>
		</div>      								  
		<div class="large-3 small-6 columns">				  
			<div class="large-4 columns">
				<h1>30</h1>
			</div>
			<div class="large-8 columns">
				<h6>average tenants interested</h6>
			</div>
		</div>      								  
		<div class="large-3 small-6 columns">				  
			<div class="large-4 columns">
				<h1>3</h1>
			</div>
			<div class="large-8 columns">
				<h6>average days to fill property</h6>
			</div>
		</div>      								  
		<div class="large-3 small-6 columns">				  
			<div class="large-4 columns">
				<h1>10</h1>
			</div>
			<div class="large-8 columns">
				<h6>happy tenants and landlords</h6>
			</div>
		</div>      
	</div>
</div>


<div class="row" style="padding:5.0em 0 .5em 0">
	<?php if ($logged_in):?>
		<?php $block = module_invoke('webform', 'block_view', 'client-block-415');
		print render($block['content']);?>
	<?php else: ?>
	    <?php print render($page['footer']); ?>
    <?php endif; ?>
</div>

<div class="row">
	<div class="large-7 large-centered columns">
		<h6 style="margin-bottom:5.0em; font-size:1.1em; line-height: 150%;"><span style="color:#E16565; font-size:1.7em">Sign up</span> to have your house listed! It's&nbsp;&nbsp;<span style="color:#4D997C; font-size:2.8em; text-decoration: underline;">free</span>&nbsp;&nbsp;for a short time, and you'll get all the features <span style="text-decoration: underline">described below!</span></h6>
	</div>
</div>

<div class="wideCard">      
	<div class="row">
		<div class="large-4 large-offset-1 push-7 columns">
			<h1>Photos worth a thousand words</h1>
			<h5>Photography is at the heart and soul of Leasily.com.  We will photograph your home in all its beauty, delivering tenants with the complete experience before a tour is ever required.</h5>
		</div>  
		<div class="large-7 pull-5 columns">
	    	<ul class="bxslider">
	                <li><img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/slideDemo/slideDemo1.jpg'; ?>"/></li>
	                <li><img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/slideDemo/slideDemo2.jpg'; ?>"/></li>
	                <li><img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/slideDemo/slideDemo3.jpg'; ?>"/></li>
	                <li><img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/slideDemo/slideDemo4.jpg'; ?>"/></li>
	                <li><img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/slideDemo/slideDemo5.jpg'; ?>"/></li>
	                <li><img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/slideDemo/slideDemo6.jpg'; ?>"/></li>
	                <li><img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/slideDemo/slideDemo7.jpg'; ?>"/></li>
	                <li><img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/slideDemo/slideDemo8.jpg'; ?>"/></li>
	    	</ul>
			<div class="social hide-for-small" style="position:absolute; bottom:80px; <?php if ($cardNumberCount % 2 != 0): ?>left:25px;<?php else: ?>right:30px;<?php endif; ?> z-index:300">
				<a rel="nofollow" href="http://www.facebook.com/sharer.php?u=<?php print $currentAlias; ?>">
					<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/css/icons/social/facebook-small@2x.png';?>" width="32px" height="32px">
				</a>
				<a rel="nofollow" href="http://pinterest.com/pin/create/button/?url=<?php print $currentAlias; ?>">
					<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/css/icons/social/pinterest-small@2x.png';?>" width="32px" height="32px">
				</a>
				<a rel="nofollow" href="http://twitter.com/share?url=<?php print $currentAlias; ?>">
					<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/css/icons/social/twitter-small@2x.png';?>" width="32px" height="32px">
				</a>
				<a rel="nofollow" href="https://plus.google.com/share?url=<?php print $currentAlias; ?>">
					<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/css/icons/social/googleplus-small@2x.png';?>" width="32px" height="32px">
				</a>
			</div>
		</div>
	</div>
</div>

<div class="offer">      
	<div class="row">
		<div class="large-4 columns">
			<h1>Make an offer</h1>
			<h5>Each tenant inquiry may be accompanied by an offer, creating tremendous opportunity for a market driven increase in your rental income.</h5>
		</div>
		<div class="large-8 columns">
            <img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landlordOverview/OfferBrowser2@2x.png'; ?>"/>
		</div>  
	</div>
</div>

<div class="wideCard listing">      
	<div class="row">
		<div class="large-6 push-6 columns">
			<h1>Maximum listing exposure</h1>
			<h5>Our listings can optionally be posted on other rental property platforms as well, expanding the audience to maximize visibility of the listing and further increase demand.</h5>
		</div>  
		<div class="large-6 pull-6 columns" style="margin-top:1.5em">
			<div class="large-12 columns">
	            <img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landlordOverview/craigslist-logo.jpeg'; ?>" width="215" class="centerTest"/>
			</div>
			<div class="large-12 columns" style="margin-top:1.5em">
            	<div class="large-5 columns">
	            	<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landlordOverview/trulia-logo.png'; ?>" width="215" class="centerTest"/>
            	</div>
            	<div class="large-7 columns">
					<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landlordOverview/zillow-logo.jpg'; ?>" width="215" class ="centerTest"/>
            	</div>
			</div>
		</div>
	</div>
</div>

<div>      
	<div class="row" style="padding:5.0em 0">
		<div class="large-6 columns" style="padding:1.0em">
			<img src="<?php print $base_path . $theme_path . '/images/landlordOverview/Listing@2x.png';?>" width="117px" class="centerTest" style="padding:1.0em 0">
			<h1 style="font-size:2.5em">Hands-free listing</h1>
			<h5>Sit back and relax.  We’ll take care of creating the listing so you can focus on finding the best match.</h5>
		</div>
		<div class="large-6 columns" style="padding:1.0em">
			<img src="<?php print $base_path . $theme_path . '/images/landlordOverview/Clock@2x.png';?>" width="117px" class="centerTest" style="padding:1.0em 0">
			<h1 style="font-size:2.5em">Use it again next year</h1>
			<h5>We’ll hang on to your gorgeous listing.  Next time you need tenants, it’ll be a flip of the switch away.</h5>
		</div>  
	</div>
</div>

<div class="row card base" id="signupReturn"  onclick="_gaq.push(['_trackPageview', '/landlords/signupReturn']);">
	<div class="large-12 large-centered columns">
		<div class="large-3 columns">
			<img src="<?php print $base_path . $theme_path . '/images/landlordOverview/Arrow@2x.png';?>" width="60px" class="centerTest" style="padding:1.1em 0 1.0em 0">
		</div>
		<div class="large-9 columns">
			<h1>Landlord sign-up</h1>
			<h5>Click here to return to the sign-up (at the top).</h5>
		</div>
	</div>
</div>


<div class="row card base">
	<div class="large-12 large-centered columns">
		<div class="large-3 columns">
			<img src="<?php print $base_path . $theme_path . '/images/landlordOverview/Question@2x.png';?>" width="60px" class="centerTest" style="padding:1.7em 0 1.0em 0">
		</div>
		<div class="large-9 columns">
			<h1>Still have questions?</h1>
			<h5>Shoot! Let's get those answered quickly. Contact us at founders@leasily.com.</h5>
		</div>
	</div>
</div>

<!---------------------BEGIN FOOTER------------------------>
  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
  <?php global $theme_path; ?>
    <!--.footer-columns -->
<div class="footerForm"  style="margin-top:100px">
    <div class="row row3" style="height:.85em">
        <div class="large-7 columns">
            <p class="signUpText">Stay on top of what’s happening here at leasily.com via our friendly emails.</p>
        </div>
        <div class="large-5 columns<?php if ($logged_in){print ' mailFull';} ?>">
	        <?php print render($page['footer']); ?>
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
	    
		<!--<div class="row socialImg" style="padding-top:4.0em;">
				<div class="large-6 large-centered columns" style="position:relative; padding:0">
					<img src="<?php print $base_path . $theme_path . '/images/L8.jpg';?>">
					<div class="social" style="position:absolute; bottom:20px; left: 20px">
						<a href="#"><img src="<?php print $base_path . $theme_path . '/css/icons/social/facebook-small@2x.png';?>" width="32px" height="32px"></a>
						<a href="#"><img src="<?php print $base_path . $theme_path . '/css/icons/social/pinterest-small@2x.png';?>" width="32px" height="32px"></a>
						<a href="#"><img src="<?php print $base_path . $theme_path . '/css/icons/social/twitter-small@2x.png';?>" width="32px" height="32px"></a>
						<a href="#"><img src="<?php print $base_path . $theme_path . '/css/icons/social/email-small@2x.png';?>" width="32px" height="32px"></a>
					</div>
				</div>
			</div>-->
	    
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
						<li><?php print l(t('Privacy Policy'),'privacy-policy'); ?></li>
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
