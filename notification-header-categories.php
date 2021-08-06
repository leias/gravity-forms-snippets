// Add specific header categories for SendGrid for various order notifications
add_filter( 'woocommerce_email_headers', 'PROJECTNAME_headers_filter_function', 10, 3);
 
function PROJECTNAME_headers_filter_function( $headers, $id, $object ) {
    if ($id == 'customer_completed_order') {
		  $headers .= 'categories:order-complete' . "\r\n";
    }
    if ($id == 'customer_reset_password') {
		  $headers .= 'categories:password-reset' . "\r\n";
    }
    if ($id == 'customer_refunded_order') {
		  $headers .= 'categories:order-refund' . "\r\n";
    }
    if ($id == 'customer_processing_order') {
		  $headers .= 'categories:order-processing' . "\r\n";
    }
    if ($id == 'customer_invoice') {
		  $headers .= 'categories:invoice' . "\r\n";
    }
    if ($id == 'new_order' || $id == 'cancelled_order') {
		  $headers .= 'categories:admin-notice' . "\r\n";
    }
 
    return $headers;
}
