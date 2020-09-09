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


$sql = "UPDATE user1 SET first_name= '".$_POST[fname]."' ,    last_name='".$_POST[lname]."' WHERE id='".$_POST[id]."'";

$conn->query($sql);

	
$conn->close();
header("Location: /panera"); 
exit();

?>

