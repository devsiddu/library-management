<?php
// Database connection details
$servername = "localhost"; 
$username = "root";        
$password = "";            
$dbname = "library_db"; 

// Create a connection
$connection= new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>