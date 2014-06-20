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
      
	<div class="topSecondBar">
	    <div class="row" id="register">
	        <div class="large-9 large-centered columns" style="margin-top:70px; margin-bottom:20px">
	        	<h3 style="text-align:left">Submit your landlord's email.<br />We'll let them know when their listing is ready.</h3>
				<?php print render($page['content']); ?>
				<!--/.main region -->
	        </div>
		</div>
	</div>    

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

  <?php else: ?>
	<div style="margin:0 auto">
		<img src="<?php print base_path() . drupal_get_path('theme', 'project_clear') . '/images/greenCircleLogo.png'; ?>" alt="L-Logo" style="margin-top:85px" width="130px" class="centerTest"/>
	</div>
    <p class="loginFooterText" data-thmr="thmr_400">
    ©2013-2014 All Rights Reserved. Leasily&trade; is a trademark of Leasily LLC. Privacy and Terms
    </p>
  <?php endif; ?>

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
