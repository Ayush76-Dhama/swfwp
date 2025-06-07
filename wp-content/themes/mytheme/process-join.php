<?php
// Load WordPress core
require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    wp_redirect(add_query_arg(['status' => 'error', 'message' => 'invalid_request'], wp_get_referer()));
    exit;
}

// Validate nonce
if (!isset($_POST['join_us_nonce']) || !wp_verify_nonce($_POST['join_us_nonce'], 'join_us_form_nonce')) {
    wp_redirect(add_query_arg(['status' => 'error', 'message' => 'invalid_nonce'], wp_get_referer()));
    exit;
}

// Sanitize inputs
$name    = sanitize_text_field($_POST['name'] ?? '');
$email   = sanitize_email($_POST['email'] ?? '');
$message = sanitize_textarea_field($_POST['message'] ?? '');

// Validate required fields
if (empty($name) || empty($email) || empty($message)) {
    wp_redirect(add_query_arg(['status' => 'error', 'message' => 'missing_fields'], wp_get_referer()));
    exit;
}

// Validate email
if (!is_email($email)) {
    wp_redirect(add_query_arg(['status' => 'error', 'message' => 'invalid_email'], wp_get_referer()));
    exit;
}

// Insert into DB
global $wpdb;
$table = $wpdb->prefix . 'join_us';

$inserted = $wpdb->insert($table, [
    'name'  => $name,
    'email' => $email,
    'message' => $message,
]);

if (!$inserted) {
    wp_redirect(add_query_arg(['status' => 'error', 'message' => 'db_error'], wp_get_referer()));
    exit;
}

// Optional: Send email to admin
$admin_email = get_option('admin_email');
$subject = "New Join Us Submission from $name";
$body = "Name: $name\nEmail: $email\nMessage:\n$message";
$headers = ['Content-Type: text/plain; charset=UTF-8'];

if (!wp_mail($admin_email, $subject, $body, $headers)) {
    wp_redirect(add_query_arg(['status' => 'error', 'message' => 'mail_failed'], wp_get_referer()));
    exit;
}

// Success
wp_redirect(add_query_arg(['status' => 'success'], wp_get_referer()));
exit;
