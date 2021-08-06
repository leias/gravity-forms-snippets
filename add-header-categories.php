// Add categories to Gravity Form notifications for SendGrid
add_filter( 'gform_pre_send_email', function ( $email, $message_format, $notification ) {
    $email['headers']['categories'] = 'categories:gravity-forms'; 
    return $email;
}, 10, 3 );
