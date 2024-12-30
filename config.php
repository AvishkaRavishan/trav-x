<?php
$servername = "sql212.infinityfree.com";
$username = "if0_37991643"; // Change if using a different username
$password = "AkpWEghIqYt "; // Change if using a different password
$dbname = "if0_37991643_travel"; // Ensure this matches your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>
