// Set up HTML for email header
function PROJECTNAME_gf_email_header(){
	return 'INSERT YOUR HTML HERE';
}

// Set up HTML for email header
function PROJECTNAME_gf_email_footer(){
	return 'INSERT YOUR HTML HERE';
}

// Add custom notification structure for Form ID 14
add_filter( 'gform_notification_14', 'form_notification_email_14', 10, 3 );
function form_notification_email_14($notification, $form, $entry) {
	$notification['message'] = PROJECTNAME_gf_email_header();	
	$notification['message'] .= $notification['message'];	
	$notification['message'] .= PROJECTNAME_gf_email_footer();
	return $notification;
}
