<!---------------------TOP BAR------------------------>    

<?php //print $messages; ?>
<div class="topBar" style="margin-bottom:0px">
	<div class="row">
		<div class="large-12 columns">
        	<div class="large-2 columns">
            	<a href="/d7-demo/"><img src="sites/all/themes/project_clear/images/logo.png" alt="logo" height="40px" width="105px" style="padding-top:2px"/></a>
			</div>
            
            <div class="large-5 large-offset-2 columns">
				<?php print render($page['help']); ?>
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

<!---------------------MAP SECTION------------------------>
    
<!--            	
	<iframe width="1910" height="420" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/?ie=UTF8&amp;ll=29.930093,-90.102353&amp;spn=0.029456,0.063772&amp;t=m&amp;z=15&amp;output=embed">
    </iframe>
    -->
    
<?php print render($page['featured']); ?>

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
        </div>
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

<div class="row card" style="margin-top:10px">

<!---------------------MAIN CONTENT------------------------>  
    <div class="row">    
        <div class="large-12 columns" style="padding:0px">    

<?php print render($page['highlighted']); ?>
                    
        </div>    
    </div>
</div>

<?php print render($region['left_sidebar']); ?>

<!---------------------END CARD------------------------>
<?php /*?>
<?php if (!empty($page['footer_first']) || !empty($page['footer_middle']) || !empty($page['footer_last'])): ?>
<footer class="row" style="margin-top:30px">
    <?php if (!empty($page['footer_first'])): ?>
      <div id="footer-first" class="large-4 columns">
        <?php print render($page['footer_first']); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($page['footer_middle'])): ?>
      <div id="footer-middle" class="large-4 columns">
        <?php print render($page['footer_middle']); ?>
      </div>
    <?php endif; ?>
    <?php if (!empty($page['footer_last'])): ?>
      <div id="footer-last" class="large-4 columns">
        <?php print render($page['footer_last']); ?>
      </div>
    <?php endif; ?>
</footer>
<?php endif; ?>
<div class="bottom-bar panel">
  <div class="row">
    <div class="large-6 columns">
      <?php if ($site_name) :?>
        &copy; <?php print date('Y') . ' ' . check_plain($site_name) . ' ' . t('All rights reserved.'); ?>
      <?php endif; ?>
    </div>
    <div class="large-6 small-12 columns">
      <?php if(!empty($page['bottom_menu'])) :?>
        <?php print render($page['bottom_menu']); ?>
      <?php endif; ?>
    </div>
  </div>
</div>
<?php */?>

<div class="footerForm"  style="margin-top:100px">
    <div class="row row3" style="height:.85em">
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
    <div class="row row2" style="margin-bottom:35px">
        <div class="large-12 columns" style="padding-top:50px; margin-top:5px">
            <div class="large-3 columns footerFourths">
            	<img src="sites/all/themes/project_clear/images/footerSearch-03.png" width="80px" alt="Search" class="centerTest">
            	<p class="footerHeader">Find Home</p>
                <p class="footerDescription">Search for the lease of your dreams<br/>with our crystal clear listings</p>
            </div>
            <div class="large-3 columns footerFourths">
            	<img src="sites/all/themes/project_clear/images/footerDollar_Artboard 5.png" width="80px" alt="Dollar" class="centerTest">       
                <p class="footerHeader">Make an Offer</p>
                <p class="footerDescription">Search for the lease of your dreams<br/>with our crystal clear listings</p>
            </div>
            <div class="large-3 columns footerFourths">
            	<img src="sites/all/themes/project_clear/images/footerHouse-02.png" width="80px" alt="House" class="centerTest">
                <p class="footerHeader">Post Here</p>
                <p class="footerDescription">Leasily is the perfect platform<br/>for the world to take a look.</p>
            </div>
            <div class="large-3 columns footerFourths footerLast">
            	<img src="sites/all/themes/project_clear/images/footerCamera_Artboard 4.png" width="110px" alt="Camera" class="centerTest" style="padding:4px 0">
                <p class="footerHeader">Our Best Shot</p>
                <p class="footerDescription">Let us fill out your listing with<br/>beautiful photography, free of charge!</p>
            </div>
        </div>
    </div>
    <div class="row row2">
        <div class="large-12 columns" style="padding-top:10px; vertical-align:center">
            <div class="large-5 columns" style="text-align:right; padding-top:60px; padding-right:0px">        
                <a href="/d7-demo/"><p class="deckDescription footerList">Home</p></a>
                <a href="d7-demo/search/site"><p class="deckDescription footerList">Search</p></a>
                <p class="deckDescription footerListLast">Contact Us</p>
            </div>
            <div class="large-2 columns" style="padding-bottom:20px">        
                <img src="sites/all/themes/project_clear/images/LeasilyCircle.png" alt="Logo" class="centerTest" width="125px" style="padding-top:10px">
            </div>
            <div class="large-5 columns" style="text-align:left; padding-top:60px; padding-left:0px">        
                <p class="deckDescription footerList">About</p>
                <p class="deckDescription footerList">Expansion</p>
                <p class="deckDescription footerListLast">Legal</p>
            </div>
        </div>
    </div>
</div>

<div class="footerAccent"></div>

