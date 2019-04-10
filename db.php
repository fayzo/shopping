<?php 
// Database configuration
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "shopping";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName,'3308');

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>