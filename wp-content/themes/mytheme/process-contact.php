<?php
// process-contact.php

require_once('../../../wp-load.php');

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set JSON response header
header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    global $wpdb;

    // Log server environment
    error_log('Server Environment: ' . print_r([
        'PHP Version' => PHP_VERSION,
        'WordPress Version' => get_bloginfo('version'),
        'Server Software' => $_SERVER['SERVER_SOFTWARE'],
        'Database Prefix' => $wpdb->prefix
    ], true));

    // Get form data
    $first_name = sanitize_text_field($_POST['first_name']);
    $email      = sanitize_email($_POST['email']);
    $phone      = sanitize_text_field($_POST['phone']);
    $subject    = sanitize_text_field($_POST['subject']);
    $message    = sanitize_textarea_field($_POST['message']);

    $table = $wpdb->prefix . 'contact_submissions';
    
    // Log table name and check database connection
    error_log('Attempting to use table: ' . $table);
    error_log('Database connection status: ' . ($wpdb->check_connection(false) ? 'Connected' : 'Not connected'));

    // Check if table exists, if not create it
    if($wpdb->get_var("SHOW TABLES LIKE '$table'") != $table) {
        error_log('Table does not exist, attempting to create: ' . $table);
        $charset_collate = $wpdb->get_charset_collate();
        $sql = "CREATE TABLE $table (
            id bigint(20) NOT NULL AUTO_INCREMENT,
            first_name varchar(100) NOT NULL,
            email varchar(100) NOT NULL,
            phone varchar(20) NOT NULL,
            subject varchar(200) NOT NULL,
            message text NOT NULL,
            submitted_at datetime NOT NULL,
            PRIMARY KEY  (id)
        ) $charset_collate;";
        
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        $result = dbDelta($sql);
        error_log('Table creation result: ' . print_r($result, true));
        
        // Verify table was created
        if($wpdb->get_var("SHOW TABLES LIKE '$table'") != $table) {
            error_log('Failed to create table. Last error: ' . $wpdb->last_error);
            wp_send_json_error([
                'message' => 'Database setup error. Please contact the administrator.'
            ]);
            exit;
        }
    }

    // Log the data being inserted
    error_log('Attempting to insert data: ' . print_r([
        'first_name' => $first_name,
        'email' => $email,
        'phone' => $phone,
        'subject' => $subject,
        'message' => $message,
        'submitted_at' => current_time('mysql')
    ], true));

    // Insert into database with proper format specifiers
    $result = $wpdb->insert(
        $table,
        array(
            'first_name'   => $first_name,
            'email'        => $email,
            'phone'        => $phone,
            'subject'      => $subject,
            'message'      => $message,
            'submitted_at' => current_time('mysql')
        ),
        array('%s', '%s', '%s', '%s', '%s', '%s')
    );

    // Enhanced error logging
    if ($result === false) {
        error_log('Database error details:');
        error_log('Last error: ' . $wpdb->last_error);
        error_log('Last query: ' . $wpdb->last_query);
        error_log('Table name: ' . $table);
        
        // Check if table exists
        $table_exists = $wpdb->get_var("SHOW TABLES LIKE '$table'");
        error_log('Table exists: ' . ($table_exists ? 'Yes' : 'No'));
        
        wp_send_json_error([
            'message' => 'There was a problem saving your message. Please try again later.'
        ]);
        exit;
    }

    // Log successful insertion
    error_log('Successfully inserted data with ID: ' . $wpdb->insert_id);

    // Send email to admin
    $admin_email = get_option('admin_email');
    $email_subject = "New Contact Form Submission: " . $subject;
    $email_message = "A new contact form submission has been received:\n\n";
    $email_message .= "Name: $first_name\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Subject: $subject\n";
    $email_message .= "Message:\n$message\n\n";
    $email_message .= "Submitted at: " . current_time('mysql');

    wp_mail($admin_email, $email_subject, $email_message);

    // Success response with contact type
    wp_send_json_success([
        'message' => 'Thank you! Your message has been submitted successfully.',
        'redirect' => home_url('/thank-you/?type=contact')
    ]);

} else {
    wp_send_json_error(['message' => 'Invalid request method.']);
}
?>
