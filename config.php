<?php
$conn = mysqli_connect('db', 'root', 'pass', 'queries');

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_select_db($conn, 'queries') or die("Could not select database: " . mysqli_error($conn));

// Define the base directory for your project
define('D', "/backend_projects/queries");
?>
