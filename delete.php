<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "panera";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "DELETE FROM users1 WHERE id= '".$_GET[id]."' ";

$conn->query($sql);

	
$conn->close();
header("Location: /"); 
exit();

?>

