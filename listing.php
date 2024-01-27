<!DOCTYPE html>
<html>


<?php
session_start();

 
$userProduct = $_GET["productname"];
$itemCategory = $_GET["category"];
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


    $sql = "INSERT INTO `products`  (`productName`,`productCategory`,`condition`,`price`,`description`,`image`) 
    VALUES('$userProduct','$itemCategory','$condition','$price', '$message', '$image')";
  
  if(mysqli_query($conn, $sql)) {
    echo "Product Listed";} 

    $redirect = TRUE;
if ($redirect) {
   header('Location: http://localhost/implementation/RegisteredHome.php');
   die();}

  

   else{
       
       echo "<p>Error Registering Account</p>";
       }
       

?>




</html>
