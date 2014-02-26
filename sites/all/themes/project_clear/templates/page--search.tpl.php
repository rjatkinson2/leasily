<?php
  global $theme_path;
  global $base_path;
?>

<!---------------------TOP BAR------------------------>    

<?php //print $messages; ?>
<div class="topBar" style="margin-bottom:0px">
	<div class="row">
		<div class="large-12 columns">
        	<div class="large-2 columns">
            	<a href="/d7-demo/"><img src="<?php print $base_path . $theme_path . '/images/logo.png';?>" alt="logo" height="40px" width="105px" style="padding-top:2px"/></a>
			</div>
            
            <div class="large-5 large-offset-2 columns">
				&nbsp;
            </div>
            
      <?php	global $user; ?>
      <?php if ($logged_in): ?>
                        
            <div class="large-2 columns">
            	<div style="padding-top:15px; text-align:right"><?php print l($user->name, 'profile-main/' . $user->uid, array('attributes' => array('class' => array('topBarText'), 'data-dropdown' => array('drop1')))); ?></div>

                <ul id="drop1" class="f-dropdown">
                  <li><?php print l(t('View Profile'), 'profile-main/' . $user->uid, array('attributes' => array('class' => array('topBarTextDropdown')))); ?></li>
                  <li><?php print l(t('Edit Profile'),'profile-main/' . $user->uid . '/edit', array('attributes' => array('class' => array('topBarTextDropdown'))));?></li>
                  <li><?php print l(t('Account Settings'),'user/' . $user->uid, array('attributes' => array('class' => array('topBarTextDropdown'))));?></li>
                  <li><?php print l(t('Edit Account Settings'),'user/' . $user->uid . '/edit', array('attributes' => array('class' => array('topBarTextDropdown'))));?></li>
                </ul>                
            </div>
            
            <div class="large-1 columns" style="border-left: 1px solid #fff; height:30px; margin-top:10px;">
            	<div style="padding-top:5px;"><?php print l(t('logout'), 'user/logout', array('attributes' => array('class' => array('topBarText')))); ?></div>
            </div>
            
      <?php else: ?>
            
            <div class="large-2 columns">
            	<div style="padding-top:15px; text-align:right"><?php print l(t('register'), 'user/register', array('attributes' => array('class' => array('topBarText')))); ?></div><br>               
            </div>
            
            <div class="large-1 columns" style="border-left: 1px solid #fff; height:30px; margin-top:10px;">
            	<div style="padding-top:5px"><?php print l(t('login'), 'user/login', array('attributes' => array('class' => array('topBarText')))); ?></div>
            </div>

      <?php endif;  ?>       
            
		</div>
	</div>
</div>

<!---------------------END TOP BAR------------------------>

<!---------------------ADVANCED SEARCH------------------------>

<div class="topSecondBar" data-thmr="thmr_455">
    <div class="row" style="margin-top:15px">
        <div class="row">
            <div class="large-12 columns">
                <a href="/d7-demo/"><p class="loginSubtext" style="display:inline; margin-left:16%;">&lt; back to map</p></a>
                <p class="statHeader" style="font-size:35px; text-align:right; margin-left:30%; display:inline">Advanced Search</p>
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
					<?php print render($page['content']['system_main']['search_form']); ?>
            </div>
        </div>
        <div class="row">
            <div class="large-12 columns">
				<?php print render($page['content']['system_main']['suggestions']); ?>
            </div>
        </div>
    </div>
</div>


<!-----------------------SEARCH RESULTS------------------------>
<?php if ($page['content']['system_main']['search_results']['#markup']): ?>

	<div class="row card" style="margin-top:30px; margin-bottom:20px">
	    <div class="row">    
	        <div class="large-12 columns" style="padding:0px">
	        	<?php print render($page['content']['system_main']['search_results']['#markup']);   ?>
	        </div>    
	    </div>
	</div>

<?php endif;?>

<div class="row" style="margin-top: 50px">
	<div class="large-8 large-offset-3 columns">
		<div class="row card" style="border-bottom:none; padding:15px 0 0 0;">
			<div class="sortBox">
				<p class="sortHeader">Sort by:</p>
				<?php print render($page['content']['apachesolr_search_sort']);   ?>
			</div>
		</div>
	</div>
</div>

    <div class="row card" style="position:relative; margin-top:0; min-height:900px">
	<div class="row card facetCard" style="width:170px">
		<div class="row">
			<div class="large-12 columns" style="padding:0px">
			<!--Bed Number-->
			<p class="facetHeader"><?php print render($page['content']['facetapi_P9UQO6zTzOexyMxOGE3L59s2iKB6DcdL']['#title']); ?></p>
			<?php print render($page['content']['facetapi_P9UQO6zTzOexyMxOGE3L59s2iKB6DcdL']); ?>
			
			<!--City-->
			<p class="facetHeader"><?php print render($page['content']['facetapi_FMftg1rr0vW9QjvQKLU1WiHnVw6RIXmu']['#title']); ?></p>
			<?php print render($page['content']['facetapi_FMftg1rr0vW9QjvQKLU1WiHnVw6RIXmu']); ?>
			
			<!--Baths-->
			<p class="facetHeader"><?php print render($page['content']['facetapi_P8XOaqTcugyQoL7oZhzs1qjJWv181LFN']['#title']); ?></p>
			<?php print render($page['content']['facetapi_P8XOaqTcugyQoL7oZhzs1qjJWv181LFN']); ?>
			
			<!--Neighborhood-->
			<p class="facetHeader"><?php print render($page['content']['facetapi_T4DoyuzMkHLQeLPtfMggzZA1LZ9Tg8h2']['#title']); ?></p>
			<?php print render($page['content']['facetapi_T4DoyuzMkHLQeLPtfMggzZA1LZ9Tg8h2']); ?>
			</div>
		</div>
	</div>
	<?php print render($page['content']['system_main']['search_results']); ?>
</div>



<!---------------------FOOTER------------------------>

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

  <?php // if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
<!---------------------BEGIN FOOTER------------------------>