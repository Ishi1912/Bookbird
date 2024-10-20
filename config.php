<?php
// Use 'database' as the hostname if your container is called 'database'
// If you're using MySQL default port (3306), specify it correctly.
$conn = mysqli_connect('database', 'root', 'pass', '', 9306);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select the database
mysqli_select_db($conn, 'queries') or die("Could not select database: " . mysqli_error($conn));

// Define the base directory for your project
define('D', "/backend_projects/queries");
?>
