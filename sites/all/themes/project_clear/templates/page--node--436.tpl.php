<?php

	global $theme_path;
	global $base_path;
	$currentAlias = $base_path . 'landlords';
  
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


<div class="topSecondBar">
	<div class="row">
		<div class="large-12 columns">
			<h1 style="margin:.8em 0 0 0; color:#4A4A4A">Thanks for signing up!</h1>
			<h3>We will contact you shortly at the supplied email with further instructions.</h5>
		</div>
	</div>
	
	<div class="row" style="margin-top:4.0em">
		<div class="large-11 columns large-centered">
			<div class="large-6 columns">
				<div class="large-12 columns socialsign" style="text-align:center; padding: .7em 0">
					<a rel="nofollow" target="_blank" href="http://www.facebook.com/sharer.php?u=http://www.leasily.com/landlords" onclick="_gaq.push(['_trackPageview', '/landlords/social/tfacebook']);">
						<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/confirmation/fb-color@2x.png';?>" width="61px" height="61px">
					</a>
					<a rel="nofollow" target="_blank" href="http://twitter.com/share?url=http://www.leasily.com/landlords" onclick="_gaq.push(['_trackPageview', '/landlords/social/ttwitter']);">
						<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/confirmation/twitter-color@2x.png';?>" width="61px" height="61px">
					</a>
				</div>
				<div class="large-12 columns socialsign" style="text-align:center; padding:.4em 0 1.0em 0">
					<a rel="nofollow" target="_blank" href="http://pinterest.com/pin/create/button/?url=http://www.leasily.com/landlords" onclick="_gaq.push(['_trackPageview', '/landlords/social/tpinterest']);">
						<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/confirmation/pin-color@2x.png';?>" width="61px" height="61px">
					</a>
					<a rel="nofollow" target="_blank" href="https://plus.google.com/share?url=http://www.leasily.com/landlords" onclick="_gaq.push(['_trackPageview', '/landlords/social/tgoogle']);">
						<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/confirmation/google-color@2x.png';?>" width="61px" height="61px">
					</a>
				</div>
				<h5 style="padding: 0 2.0em">Excited about the deal? Please help us spread the word!</h5>
			</div>
			<div class="large-6 dubs columns">
				<?php $image_html = '<img src="' . base_path() . drupal_get_path('theme', 'project_clear') . '/images/confirmation/flat-map@2x.png" width="164px" class="centerTest">';?>
				<?php print l($image_html, '<front>', array('html' => TRUE)); ?>
				<h5 style="padding: 0 2.0em">Head back to the home page to see our mapping features.</h5>
			</div>
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
