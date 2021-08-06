// Redirect to new post after custom post creation
add_action('gform_after_submission_16', 'redirect_on_post', 10, 2);
add_filter( 'gform_confirmation_anchor_16', '__return_false' );
function redirect_on_post($entry, $form) {
    $post_id = $entry['20']; // Hidden field with custom post slug defined
    $post_name = '/assessment/'.$post_id; // Custom post type is 'assessment'
    wp_redirect($post_name);
    exit;
}
