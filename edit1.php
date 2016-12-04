<?

$id = $_GET[id];


?>




  <form method="POST" action="edit.php">
  First Name:<input type="text" name="fname" value=""/> 
  Last Name<input type="text" name="lname"/>
  <input type="hidden" name="id" value=" <? echo $id; ?>">
  <input type="submit" value="Edit New User"/>
</form> 





