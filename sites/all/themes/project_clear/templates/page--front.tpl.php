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
<div class="topSecondBar" style="background-color: #4D997C; border:none; padding-bottom:10px; position:relative">
	<div class="row fade" style="padding-top:20px;">
		<div class="large-11 large-centered columns" style="padding:0; margins:0">
			<div class="large-2 columns">
				<img src="<?php print $base_path . $theme_path . '/images/CircleLogo@2x.png';?>" alt="Logo" class="centerTest" width="120px">
			</div>
			<div class="large-10 columns">
				<h1>Rental property listings hand crafted for those who love photography.</h1>
			</div>
		</div>
	</div>
		
	<div class="row fade" style="padding:40px 0 0 0;">
		<div class="large-4 columns frontForm" style="padding:0, margin:0">
			<?php $block = module_invoke('webform', 'block_view', 'client-block-418');
			print render($block['content']);?>
			<?php $block = module_invoke('webform', 'block_view', 'client-block-431');
			print render($block['content']);?>
		</div>
		<div class="large-8 columns dotted">
			<div>
				<div></div>
				<h4>Sign up with your landlord's email. Don't worry, they'll be getting lots of <?php print l(t('features'), 'landlords', array('attributes' => array('class' => array('frontLink')))); ?> with no commitment.</h4>
			</div>
			<div>
				<div></div>
				<h4>Living in your place for a while? Great! We're building the listing for whenever your landlord needs it.</h4>
			</div>
			<div>
				<div></div>
				<h4>Once we schedule a time that works best for you, we'll stop by to professionaly photograph your house.</h4>
			</div>
			<div style="padding-bottom:1.8em">
				<div></div>
				<h4 style="margin-bottom:0">Get your free <span style="text-decoration:underline; font-size:1.1em">$20 gift card</span> to amazon.com.</h4>
				<img src="<?php print $base_path . $theme_path . '/images/AmazonLogoWhite.png';?>" alt="Amazon Logo" class="amazon" width="130.5px">
			</div>
			<div style="border:none">
				<div style="margin-left:-7px"></div>
				<h4 id="seeDetails">That's it, easy money! <span id="details">Click here</span> for some more details that we couldn't fit in these bullets.</h4>
			</div>
		</div>
	</div>
	
	<div class="row fade" id="promoDetails" style="padding:0 0 20px 0; display:none">
		<div class="large-12 columns">
				<h4>Leasily was created by a New Orleans based team with a passion for photography, and our mission is to reinvent the way renters look for their new home.</h4>
				<h4>We're giving away gift cards because we love our product and want to share it with the world as fast as possible.</h4>
				<h4>Our <span style="text-decoration: underline">only requirement</span> is that you obtain permission from your landlord before signing up.</h4>
				<h4>If you could tidy-up a bit before the shoot it would really help the photographs shine, and we're confident your landlord won't mind a little cleaning.</h4>
		</div>
	</div>
	<div id="learn" style="position:absolute; bottom:-150px; left:20%">
		<h3 class="hide-for-small" style="color:rgba(255, 255, 255, 0.7); margin-top:3.0em">learn more about leasily</h3>
		<div class="arrow-down hide-for-small" style="margin: 0 auto"></div>
	</div>
</div>

<div class="wideCard">      
	<div class="row">
		<div class="large-4 large-offset-1 push-7 columns">
			<h1>Photos worth a thousand words</h1>
			<h5>Photography is at the heart and soul of Leasily.com.  We professionally photograph every listing, delivering tenants with the complete experience before a tour is ever required.</h5>
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
			<h1>Map search</h1>
			<h5 style="padding-bottom:2.0em">Find our crystal clear listings by location using our map-based search and advanced filters.</h5>
			<h4 class="mapLink"><?php print l(t('Head to the map'),'map'); ?></h4>
		</div>
		<div class="large-8 columns">
            <img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/landlordOverview/MapBrowser@2x.png'; ?>"/>
		</div>  
	</div>
</div>

<div class="wideCard listing">      
	<div class="row">
		<div class="large-6 push-6 columns">
			<h1>Maximum listing exposure</h1>
			<h5>Our listings are spread across all major platforms, ensuring you won't miss your next home.  Landlords benefit from the maximum exposure for their properties.</h5>
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
			<h1>Tenant sign-up</h1>
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
