<?php
// List of allowed IP addresses
$allowed_ips = array(''); // Replace with your allowed IP addresses

// Get the user's IP address
$user_ip = $_SERVER['REMOTE_ADDR'];

// Check if the user's IP address is in the list of allowed IP addresses
if (!in_array($user_ip, $allowed_ips)) {
    // If the IP address is not allowed, display a 403 Forbidden error and exit
    header('HTTP/1.0 403 Forbidden');
    echo 'You are forbidden!';
    exit;
}

// If the IP address is allowed, the rest of the admin page code will run
?>
