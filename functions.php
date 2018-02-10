<?php

require_once(get_template_directory().'/inc/enqueue.php');
require_once(get_template_directory().'/inc/theme-setup.php');
require_once(get_template_directory().'/inc/navwalker.php');
require_once(get_template_directory().'/inc/custom-widgets.php');
require_once(get_template_directory().'/inc/custom-comments.php');
require_once(get_template_directory().'/theme-options/cs-framework.php');
require_once(get_template_directory().'/inc/breadcrumb.php');
require_once(get_template_directory().'/inc/theme-options.php');
require_once(get_template_directory().'/inc/theme-element.php');

function consult_wpb_move_comment_field_to_bottom( $fields ) {
	
$comment_field = $fields['comment'];
unset( $fields['comment'] );
$fields['comment'] = $comment_field;
return $fields;
}

add_filter( 'comment_form_fields', 'consult_wpb_move_comment_field_to_bottom' );

				
/**
* set Unlimited Addons addons install folder. 
* example: 'installs/addons' (will be wp-content/themes/installs/addons)
**/
function set_addons_install_path_u78t5($value){
	
	//change the 'yourfolder' to the folder you want
	
	return("yourfolder");
}

add_filter("uc_path_theme_addons", "set_addons_install_path_u78t5");
