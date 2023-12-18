<!DOCTYPE html>
<html>


<?php
session_start();

 
$userName = $_GET["productname"];
$firstName = $_GET["condition"];
$surName = $_GET["price"];
$dateOfBirth = $_GET["message"];
$userPassword = $_GET["image"];

$servername="localhost";
$username="root";
$password="";
$dbname="leBaieBase";
        
        $conn=mysqli_connect($servername, $username, $password, $dbname);
    
      
	  if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error()); } 


    $sql = "INSERT INTO `products`  (`productName`,`productCa`,`surname`,`DOB`,`password`) 
    VALUES('$userName','$firstName','$surName','$dateOfBirth','$userPassword')";
  
  if(mysqli_query($conn, $sql)) {
    echo "New account created successfully";} 

    $redirect = TRUE;
if ($redirect) {
   header('Location: http://localhost/implementation/RegisteredHome.html');
   die();}

}
?>



</body>
</html>
