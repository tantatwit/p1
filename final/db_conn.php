<?php

$sname = "localhost";
$uname = "root";
$password = ""; // Assuming an empty password for local development
$db_name = "recipe_db";

// Attempt to establish a connection to the database
$conn = mysqli_connect($sname, $uname, $password, $db_name);

// Check if the connection was successful
if (!$conn) {
    // Connection failed, output an error message
    echo "Connection failed: " . mysqli_connect_error();
    exit(); // Terminate the script to prevent further execution
}

// If the connection was successful, you can proceed with your database operations here
// For example, executing queries or fetching data
