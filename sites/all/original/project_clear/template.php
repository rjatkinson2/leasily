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
}

function project_clear_preprocess_html(&$variables) {
    $variables['left_sidebar'] = block_get_blocks_by_region('left_sidebar');
	drupal_add_css('http://fonts.googleapis.com/css?family=Pacifico', array('type' => 'external'));
}


function rows_from_field_collection(&$vars, $field_name, $field_array) {
  $vars['rows'] = array();
  foreach($vars['element']['#items'] as $key => $item) {
    $entity_id = $item['value'];
    $entity = field_collection_item_load($entity_id);
    $wrapper = entity_metadata_wrapper('field_collection_item', $entity);
    $row = array();
    foreach($field_array as $field){
      $row[$field] = $wrapper->$field->value();
    }
    $vars['rows'][] = $row;
  }
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
  	$variables['footer_message'] = t('Welcome @username, Lullabot loves you', array('@username' => $variables['user']->name));
  /*<?php print $footer_message; ?> to print text*/
  	}
  else{
	  $variables['footer_message'] = t('Lullabot loves you.');
  } 
  
  //add conditional css and javascript - check path to css file.  CSS_THEME is a constant equal to 100 to ensure it is in the very last group.  Higher numbers will be listed even later (or last).  'weight' => 100 can be used to list files in order within different groups.
  if($variables['is_front'] == TRUE){
		drupal_add_css(path_to_theme(). '/css/front.css', array('group' => CSS_THEME));  
  }  
  //drupal_add_js works exactly the same as drupal_add_css above
  //drupal_add_js(path_to_theme(). '/js/custom.js', array('group' => -99, 'every_page' => TRUE, 'weight' => -19.5));  
  //Devel function to pretty print all variables associated with the page
  //kpr($variables);

if ($variables['page']['content']);{
	$variables['page']['bugchasing'] = t('I hope this test works!!');
	}
	
if ($variables['page']['content']);{
	$variables['page']['searchResults'] = views_embed_view('search', 'block');
	}

	kpr($variables);
	//$variables['show_messages'] = FALSE;
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

function project_clear_apachesolr_update_index(&$document, $node) {
  // Index field_money_shot as a separate field
  if (count($node->field_money_shot)) {
    foreach ($node->field_money_shot AS $image) {
      $document->setMultiValue('sm_field_money_shot', $image['filepath']);
    }
  }
}

function project_clear_form_alter(&$form, &$form_state, $form_id){
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
		kpr($form);
	}
	//dsm($form);
}
	
/**
 * Implements theme_links() targeting the main menu specifically
 * Outputs Foundation Nav bar http://foundation.zurb.com/docs/navigation.php
 * 
 */
//function project_clear_links__system_main_menu($variables) {
//  // Get all the main menu links
//  $menu_links = menu_tree_output(menu_tree_all_data('main-menu'));
//  
//  // Initialize some variables to prevent errors
//  $output = '';
//  $sub_menu = '';
//
//  foreach ($menu_links as $key => $link) {
//    // Add special class needed for Foundation dropdown menu to work
//    !empty($link['#below']) ? $link['#attributes']['class'][] = 'has-flyout' : '';
//
//    // Render top level and make sure we have an actual link
//    if (!empty($link['#href'])) {
//      $output .= '<li' . drupal_attributes($link['#attributes']) . '>' . l($link['#title'], $link['#href']);
//      // Get sub navigation links if they exist
//      foreach ($link['#below'] as $key => $sub_link) {
//        if (!empty($sub_link['#href'])) {
//          $sub_menu .= '<li>' . l($sub_link['#title'], $sub_link['#href']) . '</li>';
//        }
//        
//      }
//      $output .= !empty($link['#below']) ? '<a href="#" class="flyout-toggle"><span> </span></a><ul class="flyout">' . $sub_menu . '</ul>' : '';
//      
//      // Reset dropdown to prevent duplicates
//      unset($sub_menu);
//      $sub_menu = '';
//      
//      $output .=  '</li>';
//    }
//  }
//  return '<ul class="nav-bar">' . $output . '</ul>';
//}

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
//function project_clear_preprocess_&$variables) {
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

//function project_clear_preprocess_views_view(&$variables) {
//}

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
 * Status messages in reveal modal
 *
 */
//function project_clear_status_messages($variables) {
//  $display = $variables['display'];
//  $output = ''; 
//
//  $status_heading = array(
//    'status' => t('Status message'), 
//    'error' => t('Error message'), 
//    'warning' => t('Warning message'),
//  );  
//  foreach (drupal_get_messages($display) as $type => $messages) {
//    $output .= "<div class=\"messages $type\">\n";
//    if (!empty($status_heading[$type])) {
//      $output .= '<h2 class="element-invisible">' . $status_heading[$type] . "</h2>\n";
//    }   
//    if (count($messages) > 1) {
//      $output .= " <ul>\n";
//      foreach ($messages as $message) {
//        $output .= '  <li>' . $message . "</li>\n";
//      }   
//      $output .= " </ul>\n";
//    }   
//    else {
//      $output .= $messages[0];
//    }   
//    $output .= "</div>\n";
//  }
//  if ($output != '') {
//    drupal_add_js("jQuery(document).ready(function() { jQuery('#status-messages').foundation('reveal','open');
//            });", array('type' => 'inline', 'scope' => 'footer'));
//    $output = '<div id="status-messages" class="reveal-modal" >'. $output;
//    $output .= '<a class="close-reveal-modal">&#215;</a>';
//    $output .= "</div>\n";
//    $output .= '<div class="reveal-modal-bg"></div>';
//  }
//  return $output;
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
//    $variables['element']['#description'] = ' <span class="has-tip tip-top radius" data-width="250" title="' . $variables['element']['#description'] . '">' . t('More information?') . '</span>';
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
