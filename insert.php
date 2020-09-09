<?php
$servername = "localhost";
$username = "eddie";
$password = "root";
$dbname = "panera";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT into user1 (first_name, last_name) values ('".$_POST['fname']."', '".$_POST['lname']."')";


$conn->query($sql);

	
$conn->close();


header("Location: /panera"); 
exit();

?>