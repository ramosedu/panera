<?php

$id = $_GET['id'];
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



$sql = "SELECT * FROM user1 WHERE id='".$id."'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
                  
              
                  


echo "
 <form method='POST' action='edit.php'>
  First Name:<input type='text' name='fname' value='".$row['first_name']."'/> 
  Last Name<input type='text' name='lname' value='".$row['last_name']."' />
  <input type='hidden' name='id' value='".$id."'>
  <input type='submit' value='Edit New User'/>
</form> 
";
$conn->close();    

?>









