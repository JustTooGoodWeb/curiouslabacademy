<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'curixoho_db');
define('DB_PASS', 'Avwenagb1ku');
define('DB_NAME', 'curixoho_db');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>