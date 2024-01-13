<!DOCTYPE html>
<html>


<?php
session_start();

 
$userProduct = $_GET["productname"];
$condition = $_GET["condition"];
$price = $_GET["price"];
$message = $_GET["message"];
$image = $_GET["image"];

$servername="localhost";
$username="root";
$password="";
$dbname="leBaieBase";
        
        $conn=mysqli_connect($servername, $username, $password, $dbname);
    
      
	  if (!$conn) { 
    die("Connection failed: " . mysqli_connect_error()); } 


    $sql = "INSERT INTO `products`  (`productName`,`productCategory`,`price`,`description`,`image`) 
    VALUES('$userProduct','$condition','$surName','$price', '$message', '$image')";
  
  if(mysqli_query($conn, $sql)) {
    echo "Product Listed";} 

    $redirect = TRUE;
if ($redirect) {
   header('Location: http://localhost/implementation/RegisteredHome.html');
   die();}


?>



</body>
</html>
