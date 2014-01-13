<?php /*

7=1; 5=2; 12=3; 15=4; 16=5; 17=6; 9=7; 6=8; 10=9; 8=10; 3=11; 13=12; // 14=13; 11=14; 4=17;  

- All complicated PHP should go in the templated */

function themename_preprocess(&$vars,$hook){
	if($hook == 'page'){
		$vars['my_new_variable'] = 'some value';
	}
}

/*in the example below, page is considered the hook -> which is why the above function works */

function themename_preprocess_page(&$vars){
		$vars['my_new_variable'] = 'some value';
}

/*in the above two functions, $vars['my_new_variable'] will be available in the tpl.php pages */

/*template.php can be used to overide theme function.  to do this, compy the theme function in the .module file and rename theme_ to mytheme_ */

function garland_username($object){
	/*some code here*/
	return $output;
}

/* Proper syntax for overriding theme functions - not sure how this works with what was stated above? */

theme('username',$object)



/*Arrays

-Lists that map values to keys

-vector array: simple list of values */

array('stingray','telescope'); 
/*in this simple vector array above, the items are indexed by integers beginning with 0, so stingray is 0 and telescope is 1*/

$stuff = array('stingray','telescope');
print $stuff[0];

= stingray

$fruit = array(
'red' => 'cherries',
'green' => 'apple',
);
print $fruit['green'];

=apple

/*Objects in drupal are like arrays, main difference is that can have methods or functions*/
$robot->color
$robot->material
$robot->finish

/*complicated example below*/

print $node->links['blog_usernames_blog']['href'];
/*the name of each part of the print statement above can be seen below*/
	  $object->property['key']['key'];
	  
/*quick conditional syntax below*/
print($a==$b) ? "it's equal!" : '';
/*in the above statement, the action is given first. if the first condition is met (if a=b) (? = then) print it's equal (: = else) print nothing*/

for(initial condition; conditional statement; iteration){	
}

/*for each shown below using $stuff variable above, a simple array string of stingray and telescope; item is an arbitrary variable*/
foreach ($stuff as $item){
	print $item .'<br />';
}

=
stingray
telescope

/*functions encapsulate frequently repeated tasks, can pass any variables into the function, variable $c only exists inside execution of the function*/

function my_function($a, $b){
	$c = $a + $b;
	$a = $a +1;
	return $c;		
}

/*if we include an & before the variable $a in the above function, the variable has been passed by reference.  show any changes inside the function will carry to the varible passed into its place*/



/*template.php*/
function mytheme_preprocess(&$variables, $hook){
	kpr($hook);
}

//one way to access variables associated with node
function project_clear_preprocess_node(&$variables){
	if($variables['type'] == 'article'){
		$node = $variables['node'];
		kpr($node);
		}
}

//to add one more item to an array, use the following syntax
	$variables['theme_hook_suggestions'][] = 'node__wednesday';
//the second set of brackets in the line above indicates "add another item" called 'node__wednesday'

//also, use underscores when using template names in php.  use dashes in the file name themselves
	$today = strtolower(date('l'));
//the above prints the day of the week in lower case.

	$variables['theme_hook_suggestions'][] = 'node__'.$today;
//above loads a different theme hook each day of the week 


//CSS and JavaSCRIPT HOOKS - replace the word hook with the name of the theme

function project_clear_css_alter(&$css) {
	kpr($css);
}

//Only run in a node
if(arg(0) == 'content' && is_numeric(arg(1))){
	$nid = arg(1);
	$image = $page['content']['system_main']['nodes'][$nid]['field_money_shot'];
}

?>