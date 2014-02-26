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
				<?php endif; ?>
			</li>-->
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
			              <li><?php print l(t('Add Property'), 'listing-choices'); ?></a></li>
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


  <?php if ($messages && !$zurb_foundation_messages_modal): ?>
    <!--/.l-messages -->
        <?php if ($messages): print $messages; endif; ?>
    <!--/.l-messages -->
  <?php endif; ?>



<!---------------------MAP SECTION------------------------>
    
<?php print render($page['featured']); ?>
<div id="mapBottomBorder"></div>

<!---------------------SEARCH SECTION------------------------>    

<!--
<form class="custom">
  <div class="row searchCard" style="padding-bottom:0px; margin-top:20px;">    
    <div class="large-6 columns">
      <div class="row collapse">
            	<select id="cityDrop">
                	<option>New Orleans, LA</option>
                	<option>Washington, DC</option>
              	</select>
      </div>
    </div>

    <div class="large-2 columns">
      <div class="row collapse">
        <div class="large-6 small-6 columns">
          <span class="prefix">Beds</span>
        </div>
        <div class="large-6 small-6 columns">
            	<select id="bedsDrop">
                	<option>1</option>
                	<option>2</option>
                    <option>3</option>
                	<option>4+</option>
              	</select>
        </div>ß
      </div>
    </div>
    
    <div class="large-2 columns">
      <div class="row collapse">
        <div class="large-6 small-6 columns">
          <span class="prefix">Baths</span>
        </div>
        <div class="large-6 small-6 columns">
            	<select id="bathsDrop">
                	<option>1</option>
                	<option>1.5</option>
                	<option>2</option>
                	<option>2.5</option>
                    <option>3</option>
                	<option>3.5+</option>
              	</select>
        </div>
      </div>
    </div>
    
    <div class="large-2 columns">
		<a href="#" class="success radius button search">Search</a>
    </div>
    
  </div>
</form>
-->
<!---------------------HOME PAGE CARD------------------------>    

<div class="row card" style="margin-top:25px">

<!---------------------MAIN CONTENT------------------------>  
    <div class="row">    
        <div class="large-12 small-12 columns" style="padding:0px">    

<?php print render($page['highlighted']); ?>
                    
        </div>    
    </div>
</div>

<?php print render($region['left_sidebar']); ?>

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
