<!DOCTYPE html>
<html>


<?php
session_start();

$userName = $_GET["username"];
$email = $_GET["email"];
$subject = $_GET["subject"];
$issueDes = $_GET["issue"];

$servername="localhost";
$username="root";
$password="";
$dbname="leBaieBase";
        
        $conn=mysqli_connect($servername, $username, $password, $dbname);
    
      
	  if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error()); } 

  $result= mysqli_query($conn, "SELECT `username` FROM `registration` WHERE `username`='".$userName."'");

  $sql = "INSERT INTO `contactUs`  (`username`,`email`,`subject`,`issueDescription`) 
  VALUES('$userName','$email','$subject','$issueDes')";
  
  if(mysqli_query($conn, $sql)){

  if (mysqli_num_rows($result) >0)
  {
    $redirect = TRUE;
if ($redirect) {
   header('Location: http://localhost/implementation/RegisteredHomeContact.php');
   die();}

}

    else{  $redirect1 = TRUE;
        if ($redirect1) {
           header('Location: http://localhost/implementation/homeContact.php');
           die();}}}
        

?>



</body>
</html>
