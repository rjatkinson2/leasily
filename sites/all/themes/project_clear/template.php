<?php
/* Devel module command (()) to print all the hooks from inside out

function project_clear_preprocess(&$variables, $hook){
	static $i;
	kpr($i .' '. $hook);
	$i++;	
}
*/

function project_clear_theme() {
  $items = array();
  // these hooks are created using the $form_id
  // create custom user-login.tpl.php
  $items['user_login'] = array(
	  'render element' => 'form',
	  'path' => drupal_get_path('theme', 'project_clear') . '/templates',
	  'template' => 'user-login',
	  'preprocess functions' => array(
	  'project_clear_preprocess_user_login'
	),
  );
  
  // create custom user-register.tpl.php
  $items['user_register_form'] = array(
     'render element' => 'form',
     'path' => drupal_get_path('theme','project_clear') . '/templates',
     'template' => 'user-register-form',
     'preprocess functions' => array(
	 'project_clear_preprocess_user_register_form'
	),
  );
  
  // create custom user-profile-form.tpl.php - themes edit account settings, not edit profile (profile2)
  $items['user_profile_form'] = array(
	 'render element' => 'form',
     'path' => drupal_get_path('theme','project_clear') . '/templates',
     'template' => 'user-profile-form',
     'preprocess functions' => array(
	 'project_clear_preprocess_user_profile_form'
	),
  );
  
  $items['home_node_form'] = array(
	 'render element' => 'form',
     'path' => drupal_get_path('theme','project_clear') . '/templates',
     'template' => 'home-node-form',
     'preprocess functions' => array(
	 'project_clear_preprocess_home_node_form'
	),
  );
  
    $items['profile2_edit_main_form'] = array(
	 'render element' => 'form',
     'path' => drupal_get_path('theme','project_clear') . '/templates',
     'template' => 'profile2-edit-main-form',
     'preprocess functions' => array(
	 'project_clear_preprocess_profile2_edit_main_form'
	),
  );

return $items;

}

function project_clear_preprocess_node(&$variables) {
  global $user;
  
  if(in_array('administrator', $user->roles) || in_array('administrator testing',$user->roles) || $variables['node']->uid == $user->uid) {
    $variables['is_admin_or_author'] = TRUE;
  }
  else {
    $variables['is_admin_or_author'] = FALSE;
  }

    // define $node object, so it's be easier to use it
  //$node = $variables['node'];

  // add variables to node--nameofnodetype.tpl.php file
  //if ($node->type == 'home'){

      // $variables: an array with variables
      // you need to add one, so just define it
      //$variables['my_variable'] = t('testing123');

      // also you can rewrite those variables which already exists
      // for example variable: $title
      //$variables['title'] = t('The new title');
  //}
	//kpr($variables);
}

function project_clear_preprocess_html(&$variables) {
    $variables['left_sidebar'] = block_get_blocks_by_region('left_sidebar');
	drupal_add_css('http://fonts.googleapis.com/css?family=Pacifico', array('type' => 'external'));
	drupal_add_css('http://fonts.googleapis.com/css?family=Raleway:100,200,400', array('type' => 'external'));
	//kpr($variables);
		
	  $fbnoscript = array(
	    '#type' => 'html_tag',
	    '#tag' => 'noscript',
	    '#weight' => '-1900.5',
		'#suffix' => '<img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/offsite_event.php?id=6014750647219&amp;value=0.01&amp;currency=USD" /></noscript>',
	  );
	  drupal_add_html_head($fbnoscript, 'fbnoscript');	
}

 
 function project_clear_preprocess_field(&$variables, $hook){
  if ($variables['element']['#field_name'] == 'field_card') {
    $variables['theme_hook_suggestions'][] = 'field__card_collected';
 
    $field_array = array('field_card_header', 'field_card_story','field_card_image');
    rows_from_field_collection($variables, 'field_card', $field_array);
  }
  
  if ($variables['element']['#field_name'] == 'field_user_picture') {
	$variables['classes_array'][] = 'circlePic';
  }
}

function project_clear_preprocess_comment(&$variables) {
  $comment = $variables['elements']['#comment'];
  $node = $variables['elements']['#node'];
  $variables['comment'] = $comment;
  $variables['node'] = $node;
  $variables['author'] = theme('username', array('account' => $comment));

  $variables['created'] = format_date($comment->created, $type='custom', $format='n.j.y', $timezone = NULL, $langcode = NULL);

  // Avoid calling format_date() twice on the same timestamp.
  if ($comment->changed == $comment->created) {
    $variables['changed'] = $variables['created'];
  }
  else {
    $variables['changed'] = format_date($comment->changed, $type='custom', $format='n.j.y', $timezone = NULL, $langcode = NULL);
  }

}

function project_clear_preprocess_page(&$variables){  
  //add new variables to page.tpl - use <?php print $footer_message
  
  if($variables['logged_in']){
  	global $user;
	$variables['footer_message'] = t('Welcome @username, Lullabot loves you', array('@username' => $variables['user']->name));
	/*<?php print $footer_message; ?> to print text*/
	//$variables['top_bar_link_one'] = l(t('landlords'), 'landlords', array('attributes' => array('class' => array('topBarFont'))));
	$variables['top_bar_link_two'] = l($user->name, 'profile-main/', array('attributes' => array('class' => array('topBarFont'))));
	$variables['view_profile_link'] = l(t('View Profile'), 'profile-main/' . $user->uid, array('attributes' => array('class' => array('holderClass'))));
	$variables['account_settings_link'] = l(t('Edit Profile'),'profile-main/' . $user->uid . '/edit', array('attributes' => array('class' => array('holderClass'))));
	$variables['edit_account_link'] = l(t('Account Settings'),'user/' . $user->uid . '/edit', array('attributes' => array('class' => array('holderClass'))));
	$variables['dropdownClasses'] = t('first leaf has-dropdown');
  	}
  else{
	$variables['footer_message'] = t('Lullabot loves you.');
	$variables['top_bar_link_one'] = l(t('login'), 'user/login', array('attributes' => array('class' => array('topBarFont'))));
	$variables['top_bar_link_two'] = l(t('register'), 'user/register', array('attributes' => array('class' => array('topBarFont'))));
	$variables['dropdownClasses'] = t('first leaf');
  }
  //add conditional css and javascript - check path to css file.  CSS_THEME is a constant equal to 100 to ensure it is in the very last group.  Higher numbers will be listed even later (or last).  'weight' => 100 can be used to list files in order within different groups.
  if($variables['node']){
		//drupal_add_css(path_to_theme(). '/css/front.css', array('group' => CSS_THEME));
		drupal_add_js(path_to_theme(). '/js/jquery.bxslider.min.js', array('group' => 1000, 'every_page' => TRUE, 'weight' => -19.5));  
		drupal_add_js(path_to_theme(). '/js/jquery.flot.js', array('group' => 1000, 'every_page' => TRUE, 'weight' => -19.5));
		drupal_add_js(path_to_theme(). '/js/scripts.js', array('group' => 1000, 'every_page' => TRUE, 'weight' => -19.5));  
  }
  
	if (drupal_get_path_alias() == 'landlords') {
		drupal_add_js(path_to_theme(). '/js/fbpixel.js', array('group' => 2000, 'every_page' => TRUE, 'weight' => -19.5));
		//kpr($variables);
	}
    
  //drupal_add_js works exactly the same as drupal_add_css above
  //drupal_add_js(path_to_theme(). '/js/custom.js', array('group' => -99, 'every_page' => TRUE, 'weight' => -19.5));  
  //Devel function to pretty print all variables associated with the page
  //kpr($variables);

if ($node->field_occupancy['und'][0]['value'] == 0);{
	$variables['page']['bugchasing2'] = t('I hope this occupancy test works!!');
	}
	
if ($variables['page']['content']);{
	$variables['page']['bugchasing'] = t('I hope this test works!!');
	}
	
if ($variables['page']['content']);{
	$variables['page']['searchResults'] = views_embed_view('search', 'block');
	}
	
/*if($variables['node']){
	$cardNum = 1;
	$withPhotos = 0;
	$photoList="";
	$titleElement="";
	$descElement="";
	$photoElement="";
	
	while($cardNum<=10){
		$titleKey = 'field_card_title' . $cardNum;
		$descKey = 'field_card_description' . $cardNum;
		$photoKey = 'field_card_photo' . $cardNum;
		if($variables['node']->$photoKey){
			$titleElement[$withPhotos] = $variables['node']->$titleKey;
			$descElement[$withPhotos] = $variables['node']->$descKey;
			$photoElement[$withPhotos] = $variables['node']->$photoKey;
			$withPhotos++;
		}
	$cardNum++;
	}

	$variables['node']->titleArray = $titleElement;
	$variables['node']->descriptionArray = $descElement;
	$variables['node']->photoArray = $photoElement;
	$variables['node']->numberofCards = sizeof($photoElement);
	kpr($variables['node']);
}*/

if($variables['page']['content']['system_main']['nodes']);{
	//drupal_add_js(base_path() . path_to_theme() .'/js/jquery.flot.js', 'inline');
	//drupal_add_js(base_path() . path_to_theme() .'/js/scripts.js', 'inline');

	$nodeId = $variables['node']->nid;
	$variables['page']['content']['system_main']['nodes'][$nodeId]['nodsaId'] = $nodeId;
	$cardNum = 1;
	$withPhotos = 0;
	$photoList="";
	$titleElement="";
	$descElement="";
	$photoElement="";
	
	
//	Counts the number of cards that have at least one photo
	$countString = "";
	$nodeArray = $variables['page']['content']['system_main']['nodes'][$nodeId];
	$fieldNames = array_keys($nodeArray);
	foreach ($fieldNames as $value){
		$countString = $countString . $value;
		$cardCount = substr_count($countString, "card");
		$roundCardCount = round(floor($cardCount/3.0));
			//print_r(array_keys($value));
			//$variables['page']['content']['system_main']['nodes'][$nodeId]['testing123'][] = print_r($value);
	}
	$variables['page']['content']['system_main']['nodes'][$nodeId]['testing123'] = $roundCardCount;
	
	
	
	while($cardNum<=10){
		$titleKey = 'field_card_title' . $cardNum;
		$descKey = 'field_card_description' . $cardNum;
		$photoKey = 'field_card_photo' . $cardNum;
		$und = 'und';
		if($variables['node']->$photoKey){
			$titleElement[$withPhotos] = $variables['page']['content']['system_main']['nodes'][$nodeId][$titleKey];
			$descElement[$withPhotos] = $variables['page']['content']['system_main']['nodes'][$nodeId][$descKey];
			$photoElement[$withPhotos] = $variables['page']['content']['system_main']['nodes'][$nodeId][$photoKey];
			
			$subPhotoCounter = 0;
			$possiblePhotos = 0;
			while ($possiblePhotos < 10){
			  if($variables['page']['content']['system_main']['nodes'][$nodeId][$photoKey][$possiblePhotos]){
				$subPhotoCounter++;
			  }
			  $possiblePhotos++;
			} 
			$numberPhotos[$withPhotos] = $subPhotoCounter;
			$withPhotos++;
		}
	$cardNum++;
	}
	
	$variables['page']['content']['system_main']['nodes'][$nodeId]['titleArray'] = $titleElement;
	$variables['page']['content']['system_main']['nodes'][$nodeId]['descriptionArray'] = $descElement;
	$variables['page']['content']['system_main']['nodes'][$nodeId]['photoArray'] = $photoElement;
	$variables['page']['content']['system_main']['nodes'][$nodeId]['totalCards'] = sizeof($photoElement);
	$variables['page']['content']['system_main']['nodes'][$nodeId]['subphotoArray'] = $numberPhotos;
	$variables['page']['content']['system_main']['nodes'][$nodeId]['totalAmmenities'] = sizeof($variables['node']->field_amenity['und']);
		
	//kpr($variables['node']);
}
	
	unset($variables['page']['content']['system_main']['nodes'][413]['links']['statistics']);
	unset($variables['page']['content']['system_main']['nodes'][427]['links']['statistics']);
	
	//kpr($variables['node']->NEXTLOWERVARIABLE);
	//$variables['show_messages'] = FALSE;
	//kpr($variables['page']['content']['system_main']['nodes']);
	//kpr($variables['node']);
	//kpr($row);
	//kpr($variables['view']);
	//kpr($variables);
}

function project_clear_preprocess_block(&$variables) {
	//kpr($variables);
}


function project_clear_faceted_search_ui_search_item($item, $type) {
	$output = ' <dt class="title"><a href="'. check_url($item['link']) .'">'. check_plain($item['title']) .'</a></dt>';
	$info = array();
		if ($item['type']) { 
			$info[] = check_plain($item['type']);
		 }
		
		if ($item['user']) {
			$author = user_load($item['node']->uid);
			/*if author is not an admin*/
			if (!in_array('site administrator', array_values($author->roles)) && $author->uid != 1) {
			/*display first and last name using info from user's content profile */
			$content_profile = content_profile_load('employee_profile', $item['node']->uid); $name = $content_profile->field_first_name[0]['value'] . ' ' . $content_profile->field_last_name[0]['value']; $info[] = l($name, url('user/' . $item['node']->uid, array('absolute' => TRUE))); }
			else { 
			/*$info[] = $item['user'];*/
			}
		}
		
		if ($item['date']) {
			$info[] = format_date($item['date'], 'small');
		}
		
		/*remove OG details*/
		unset($item['extra']['og_msg']);
		
		if (is_array($item['extra'])) {
			$info = array_merge($info, $item['extra']);
		}
		$output .= ' <dd>'. ($item['snippet'] ? '<p>'. $item['snippet'] .'</p>' : '') .'<p class="search-info">'. implode(' - ', $info) .'</p></dd>';
		return $output;
	}
	
function project_clear_css_alter(&$css) {
	//kpr($css);
}

function project_clear_js_alter(&$javascript){
	//kpr($javascript);
}

//The function below will copy an image element from the 'content' array on the page and paste a copy at the top of the 'highlighted' array
function project_clear_page_alter(&$page){
	//kpr($page);
	/*$nid = arg(1);
	$image = $page['content']['system_main']['nodes'][$nid]['field_money_shot'];
	array_unshift($page['sidebar_first'], array('image' => $image));
	
	//to easily remove something from the page
	unset($page['content']['system_main']['nodes'][$nid]['field_money_shot']);*/
}

/*function project_clear_apachesolr_update_index(&$document, $node) {
  // Index field_money_shot as a separate field
  if (count($node->field_money_shot)) {
    foreach ($node->field_money_shot AS $image) {
      $document->setMultiValue('sm_field_money_shot', $image['filepath']);
    }
  }
}*/

function project_clear_date_combo($variables) {
  return theme('form_element', $variables);
}

function project_clear_form_alter(&$form, &$form_state, $form_id){
	//kpr($form_id);
	if($form_id == 'search_block_form'){
		//kpr($form);
		$form['actions']['submit']['#type'] = 'image_button';
		$form['actions']['submit']['#src'] = drupal_get_path('theme', 'project_clear') . '/images/searchBlue.png';
		$form['actions']['submit']['#attributes']['class'][] = 'form';
		$form['search_block_form']['#attributes']['class'][] = 'formTest';
		}
	if($form_id == 'apachesolr_search_custom_page_search_form'){
		//kpr($form);
		$form['basic']['submit']['#type'] = 'image_button';
		$form['basic']['submit']['#src'] = drupal_get_path('theme', 'project_clear') . '/images/search.png';
		$form['basic']['submit']['#attributes']['class'][] = 'form';
		$form['apachesolr_search_custom_page_search_form']['#attributes']['class'][] = 'whateverYouWant';
		$form['basic']['keys']['#title'] = '';
		}
	if($form_id == 'user_login'){
		$form['name']['#description'] = '';
		$form['pass']['#description'] = '';
		$form['actions']['submit']['#attributes']['class'][0] = 'loginSubmit';
		$form['actions']['submit']['#attributes']['class'][1] = '';
		$form['actions']['submit']['#attributes']['class'][2] = '';
		$form['actions']['submit']['#value'] = 'Submit';
		$form['remember_me']['#title'] = 'keep me logged in!';
		//kpr($form);
		}
	if($form_id == 'user_pass'){
		$form['actions']['submit']['#attributes']['class'][0] = 'loginSubmit';
		$form['actions']['submit']['#attributes']['class'][1] = 'passReset';
		$form['name']['#title'] = 'Password Reset: enter username or e-mail address';
		$form['actions']['submit']['#value'] = 'Submit';
		//kpr($form);
	}
	if($form_id == 'user_profile_form'){
		$form['actions']['submit']['#attributes']['class'][0] = 'loginSubmit';
		$form['account']['name']['#description'] = '';
		$form['account']['mail']['#description'] = '';
		$form['account']['current_pass']['#description'] = '';
		$form['account']['pass']['#description'] = '';
		$form['actions']['submit']['#value'] = 'Submit';
		$form['timezone']['#type'] = '';
		$form['timezone']['timezone']['#description'] = '';
		$form['account']['current_pass_required_values']['#value']['name'] = 'Username';
		//kpr($form);
	}

	if($form_id == 'home_node_form'){
		$form['title']['#title'] = 'Property Title';
		$form['locations'][0]['#location_settings']['form']['fields']['city']['collect'] = 1;
		$form['locations'][0]['#location_settings']['form']['fields']['province']['collect'] = 1;
		$form['locations'][0]['#location_settings']['form']['fields']['postal_code']['collect'] = 1;
		$form['locations'][0]['#location_settings']['form']['fields']['locpick']['collect'] = 0;
		$form['locations'][0]['#location_settings']['form']['fields']['name']['collect'] = 0;
		$form['locations'][0]['#location_settings']['form']['fields']['country']['collect'] = 0;
		$form['locations']['#prefix'] = '<div>';
		$form['field_property_title']['#access'] = FALSE;
		$form['field_open_house_dates']['#access'] = FALSE;
		$form['field_open_house_date']['und']['#title'] = '';
		$form['locations'][0]['#collapsible'] = 0;
		$form['locations'][0]['#collapsed'] = 0;
		$form['locations'][0]['#location_settings']['form']['collapsible'] = 0;
		$form['locations'][0]['#location_settings']['form']['collapsed'] = 0;
		$form['field_subcity']['und']['#title'] = 'Neighborhood';
		$form['field_address']['#access'] = FALSE;
		$form['field_card_title']['#access'] = FALSE;
		$form['field_card_description']['#access'] = FALSE;
		$form['field_card_photo']['#access'] = FALSE;
		$form['revision_information']['#access'] = FALSE;
		$form['field_card_title']['#access'] = FALSE;
		$form['field_price_history']['#access'] = FALSE;
		$form['actions']['preview']['#access'] = FALSE;
		$form['actions']['delete']['#access'] = FALSE;
		$form['actions']['submit']['#value'] = 'Submit';
		$form['actions']['submit']['#attributes']['class'][0] = 'loginSubmit';
		for($x=1; $x<=10; $x++){
			$form['field_card_photo' . $x]['und']['#theme_wrappers']='';
			$form['field_card_photo' . $x]['und']['#theme']='';
		}
		//$form['field_card_photo1']['und']['#file_upload_title'] = t('Add Photos');
		
		global $base_path;
		global $theme_path;
		$form['#markup'][0] = $base_path . $theme_path . '/images/cardDemo/card.png';
		$form['#markup'][1] = $base_path . $theme_path . '/images/cardDemo/Larrow.png';
		$form['#markup'][2] = $base_path . $theme_path . '/images/cardDemo/RBarrow.png';
		$form['#markup'][3] = $base_path . $theme_path . '/images/cardDemo/RTarrow.png';
		//kpr($form);
	}
	
	if($form_id == 'user_register_form'){
		$form['account']['mail']['#description']='';
		$form['account']['name']['#description']='';
		$form['actions']['submit']['#value']='Create account';
		//$form['actions']['submit']['#attributes']['class'][0] = 'loginSubmit';
		//$form['account']['name']['#description'] = '';
		//$form['actions']['submit']['#value'] = 'Submit';
		//$form['timezone']['#type'] = '';
		//$form['account']['current_pass_required_values']['#value']['name'] = 'Username';
		//kpr($form);
	}
	
	if($form_id == 'profile2_edit_main_form'){
		//$form['actions']['submit']['#attributes']['class'][0] = 'loginSubmit';
		//$form['account']['name']['#description'] = '';
		//$form['actions']['submit']['#value'] = 'Submit';
		//$form['timezone']['#type'] = '';
		//$form['account']['current_pass_required_values']['#value']['name'] = 'Username';
		//kpr($form);
		$form['profile_main']['field_user_phone']['#access'] = FALSE;
	}

	
	if($form_id == 'views_exposed_form'){
		//$form['#attributes']['class'][1] = 'custom';
		//kpr($form);
	}
	
	if($form_id == 'webform_client_form_406'){
		if (1==1) {
		  $node = node_load(arg(1));
		  $form['#parentNode'] = $node;
		  $account = $node->name;
		  $profile = user_load_by_name($account);
		  $form['#profile'] = $profile;
		  // do stuff with $node
		}
		$form['#node2'] = 'test2';
		unset($form['submitted']['mailto']['#value']);
		$form['submitted']['mailto']['#default_value'] = $form['#profile']->mail;
		unset($form['submitted']['property']['#value']);
		$form['submitted']['property']['#default_value'] = $form['#parentNode']->title;
		//kpr($form);
	}
	
	if($form_id == 'commerce_checkout_form_checkout'){
		$form['buttons']['cancel']['#attributes']['class'][0]='';
		$form['buttons']['back']['#attributes']['class'][0]='';
		//kpr($form);
	}
	
	if($form_id == 'commerce_checkout_form_review'){
		$form['buttons']['back']['#attributes']['class'][0]='';
		//kpr($form);
	}
	
	if($form_id == 'mailchimp_lists_user_subscribe_form_leasily_launch_subscribers'){
		$form['mailchimp_lists']['mailchimp_leasily_launch_subscribers']['mergevars']['EMAIL']['#attributes']['placeholder'] = t( 'jappleseed@example.com' );
		//kpr($form);
	}
	
	if($form_id == 'mailchimp_lists_user_subscribe_form_landlord_signup'){
		$form['mailchimp_lists']['mailchimp_landlord_signup']['mergevars']['EMAIL']['#attributes']['placeholder'] = t( 'jappleseed@example.com' );
		//kpr($form);
	}

	
	
	//kpr($form_id);
	//kpr($form);
	//dsm($form);
}

/**
 * Implements template_preprocess_html().
 *
 */
//function project_clear_preprocess_html(&$variables) {
//  // Add conditional CSS for IE. To use uncomment below and add IE css file
//  drupal_add_css(path_to_theme() . '/css/ie.css', array('weight' => CSS_THEME, 'browsers' => array('!IE' => FALSE), 'preprocess' => FALSE));
//
//  // Need legacy support for IE downgrade to Foundation 2 or use JS file below
//  // drupal_add_js('http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE7.js', 'external');
//}

/**
 * Implements template_preprocess_page
 *
 */
//function project_clear_preprocess_page(&$variables) {
//}

/**
 * Implements template_preprocess_node
 *
 */
//function project_clear_preprocess_node(&$variables) {
//}

/**
 * Implements hook_preprocess_block()
 */
//function project_clear_preprocess_block(&$variables) {
//  // Add wrapping div with global class to all block content sections.
//  $variables['content_attributes_array']['class'][] = 'block-content';
//
//  // Convenience variable for classes based on block ID
//  $block_id = $variables['block']->module . '-' . $variables['block']->delta;
//
//  // Add classes based on a specific block
//  switch ($block_id) {
//    // System Navigation block
//    case 'system-navigation':
//      // Custom class for entire block
//      $variables['classes_array'][] = 'system-nav';
//      // Custom class for block title
//      $variables['title_attributes_array']['class'][] = 'system-nav-title';
//      // Wrapping div with custom class for block content
//      $variables['content_attributes_array']['class'] = 'system-nav-content';
//      break;
//
//    // User Login block
//    case 'user-login':
//      // Hide title
//      $variables['title_attributes_array']['class'][] = 'element-invisible';
//      break;
//
//    // Example of adding Foundation classes
//    case 'block-foo': // Target the block ID
//      // Set grid column or mobile classes or anything else you want.
//      $variables['classes_array'][] = 'six columns';
//      break;
//  }
//
//  // Add template suggestions for blocks from specific modules.
//  switch($variables['elements']['#block']->module) {
//    case 'menu':
//      $variables['theme_hook_suggestions'][] = 'block__nav';
//    break;
//  }
//}

function project_clear_preprocess_views_view(&$variables) {
	//kpr($variables);
}

/**
 * Implements template_preprocess_panels_pane().
 *
 */
//function project_clear_preprocess_panels_pane(&$variables) {
//}

/**
 * Implements template_preprocess_views_views_fields().
 *
 */
//function project_clear_preprocess_views_view_fields(&$variables) {
//}

/**
 * Implements theme_form_element_label()
 * Use foundation tooltips
 */
//function project_clear_form_element_label($variables) {
//  if (!empty($variables['element']['#title'])) {
//    $variables['element']['#title'] = '<span class="secondary label">' . $variables['element']['#title'] . '</span>';
//  }
//  if (!empty($variables['element']['#description'])) {
//    $variables['element']['#description'] = ' <span data-tooltip="top" class="has-tip tip-top" data-width="250" title="' . $variables['element']['#description'] . '">' . t('More information?') . '</span>';
//  }
//  return theme_form_element_label($variables);
//}

/**
 * Implements hook_preprocess_button().
 */
//function project_clear_preprocess_button(&$variables) {
//  $variables['element']['#attributes']['class'][] = 'button';
//  if (isset($variables['element']['#parents'][0]) && $variables['element']['#parents'][0] == 'submit') {
//    $variables['element']['#attributes']['class'][] = 'secondary';
//  }
//}

/**
 * Implements hook_form_alter()
 * Example of using foundation sexy buttons
 */
//function project_clear_form_alter(&$form, &$form_state, $form_id) {
//  // Sexy submit buttons
//  if (!empty($form['actions']) && !empty($form['actions']['submit'])) {
//    $form['actions']['submit']['#attributes'] = array('class' => array('primary', 'button', 'radius'));
//  }
//}

// Sexy preview buttons
//function project_clear_form_comment_form_alter(&$form, &$form_state) {
//  $form['actions']['preview']['#attributes']['class'][] = array('class' => array('secondary', 'button', 'radius'));
//}


/**
 * Implements template_preprocess_panels_pane().
 */
// function zurb_foundation_preprocess_panels_pane(&$variables) {
// }

/**
* Implements template_preprocess_views_views_fields().
*/
/* Delete me to enable
function THEMENAME_preprocess_views_view_fields(&$variables) {
 if ($variables['view']->name == 'nodequeue_1') {

   // Check if we have both an image and a summary
   if (isset($variables['fields']['field_image'])) {

     // If a combined field has been created, unset it and just show image
     if (isset($variables['fields']['nothing'])) {
       unset($variables['fields']['nothing']);
     }

   } elseif (isset($variables['fields']['title'])) {
     unset ($variables['fields']['title']);
   }

   // Always unset the separate summary if set
   if (isset($variables['fields']['field_summary'])) {
     unset($variables['fields']['field_summary']);
   }
 }
}

// */

/**
 * Implements hook_css_alter().
 */
//function project_clear_css_alter(&$css) {
//  // Always remove base theme CSS.
//  $theme_path = drupal_get_path('theme', 'zurb_foundation');
//
//  foreach($css as $path => $values) {
//    if(strpos($path, $theme_path) === 0) {
//      unset($css[$path]);
//    }
//  }
//}

/**
 * Implements hook_js_alter().
 */
//function project_clear_js_alter(&$js) {
//  // Always remove base theme JS.
//  $theme_path = drupal_get_path('theme', 'zurb_foundation');
//
//  foreach($js as $path => $values) {
//    if(strpos($path, $theme_path) === 0) {
//      unset($js[$path]);
//    }
//  }
//}
