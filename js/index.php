<?php
// Simple redirect to prevent users from browsing directories

// Define directory to forward to
$back = "../";

// Redirect to specified directory
header("Location: $back ");
?>
